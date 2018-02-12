<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('model_pelanggan');
        //cek_session();
    }
     
    public function index(){
        $this->cart->destroy();
        $this->session->sess_destroy();
        $this->load->view('inp_pelanggan');
        //$this->load->view('customer');
    }

    public function identitas(){
        if(isset($_POST['submit'])){
            $nama  = $this->input->post('nama_anda',true);
            $this->model_pelanggan->post($nama);
            $this->model_pelanggan->data_user($nama);
            redirect('pelanggan/menu');
        }else{
            $this->load->view('inp_pelanggan');
        }
    }
    
    public function menu(){
        //echo 'proses';
        $data['record'] = $this->model_pelanggan->tampil_data();
        //$this->template->load('pelanggan',$data);
        //$this->load->view('customer_material',$data);
        $this->load->view('header_menu');
        $this->load->view('pelanggan',$data);
        
    }

    public function menu2(){
        //echo 'proses';
        $data['record'] = $this->model_pelanggan->tampil_data2();
        //$this->template->load('pelanggan',$data);
        //$this->load->view('customer_material',$data);
        $this->load->view('header_menu');
        $this->load->view('pelanggan',$data);
        
    }

    public function feedback(){
       $this->load->view('feedback'); 
    }
     
    public function selesai(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
    
    public function checkout(){
        $data['baris'] = $this->cart->contents();
        $this->load->view('header_menu');
        $this->load->view('checkout');
    }
    
    public function pesanan(){
    }
    
    public function hapus_pesanan(){
        $this->cart->destroy();
    }
    
    function add_to_cart(){ //fungsi Add To Cart
        $data = array(
            'id' => $this->input->post('produk_id'), 
            'qty' => $this->input->post('quantity'),
            'price' => $this->input->post('produk_harga'),
            'name' => $this->input->post('produk_nama') 
        );
        $this->cart->insert($data);
        die(print_r($this->cart->contents()));
        echo $this->show_cart(); //tampilkan cart setelah added
    }
    
    public function chart(){
        $this->load->view('v_chart');
    }
    
    public function show_cart(){ //Fungsi untuk menampilkan Cart
        $no=1;
        $jumlah = 0;
        foreach ($this->cart->contents() as $b){
            echo '<tr>
                    <td class="mdl-data-table__cell--non-numeric">'.$b['qty'].'</td>
                    <td class="mdl-data-table__cell--non-numeric">'.$b['name'].'</td>
                    <td class="mdl-data-table__cell--non-numeric">'.$b['price'].'</td>
                    <td class="mdl-data-table__cell--non-numeric">'.$b['subtotal'].'</td>
                    <td>
                          <button type="button" id="'.$b['rowid'].'" class="hapus_cart mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--accent"><i class="material-icons">clear</i></button>
                        </td>
                  </tr>';
            $no++;
            $jumlah = $jumlah+$b['qty'];
        }
        echo '  <tr>
                <th colspan="3">Total</th>
                <th>'.'Rp '.$this->cart->total().'</th>';
            
    }
    
    function jumlah(){
        $jumlah = 0;
        foreach ($this->cart->contents() as $b){
            $jumlah = $jumlah+$b['qty'];
        }
        
        echo $jumlah;
    }
            
    
    function hapus_cart(){ //fungsi untuk menghapus item cart
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }
    
    function pesan(){
        $id = $this->session->userdata('id_pelanggan');
        $pesanan = $this->model_pelanggan->pesan($id);
        $hasil = array();
        foreach ($this->cart->contents() as $r){
            $hasil[] = array(
                'id_pesanan'   => $pesanan['id_pesanan'],
                'id_menu'      => $r['id'],
                'jumlah'       => $r['qty'],
            );
            $id = $r['id'];
            $jumlah = $r['qty'];
            //die(print_r($id));
            $this->model_pelanggan->update_bahan($id,$jumlah);
        }
        //die(print_r($hasil));
        $this->model_pelanggan->pesanan_detail($hasil);
        $this->session->set_userdata(array('pesanan'=>'oke'));
    }
    
    function cek(){
        echo $this->session->userdata('pesanan');
        //die(print_r($this->session->userdata('pesanan')));
    }

    function like(){
        $this->session->sess_destroy();
        redirect('pelanggan');
    }

    function unlike(){
        $id = $this->session->userdata('id_pelanggan');
        $this->model_pelanggan->unlike($id);
        //$this->session->sess_destroy();
        redirect('pelanggan');
    }
    
    function tampil_makanan(){
        $record = $this->model_pelanggan->tampil_data();
        foreach ($record->result() as $r){
            echo '<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                <div class="mdl-card__media">
                  <a class="posisi">
                    <img class="gambar1"
                         id="M'.$r->id_menu.'"  
                         data-id="'.$r->id_menu.'"
                         data-nama="'.$r->nama.'"
                         data-foto="'.$r->foto.'" 
                         src="'.base_url().'/assets/gambar/makanan/'.$r->foto.'">
                    <div class="centered">'.$r->nama.'</div>
                  </a>
                </div>
                <p><center><h7><b>Rp.'.$r->harga.'</b></h7></center></p>
              </div>';
        }
    }
    
    function tampil_minuman(){
        $record = $this->model_pelanggan->tampil_data2();
        foreach ($record->result() as $r){
            echo '<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                <div class="mdl-card__media">
                  <a class="posisi">
                    <img class="gambar1"
                         id="M'.$r->id_menu.'"  
                         data-id="'.$r->id_menu.'"
                         data-nama="'.$r->nama.'"
                         data-foto="'.$r->foto.'" 
                         src="'.base_url().'/assets/gambar/makanan/'.$r->foto.'">
                    <div class="centered">'.$r->nama.'</div>
                  </a>
                </div>
                <p><center><h7><b>Rp.'.$r->harga.'</b></h7></center></p>
              </div>';
        }
    }
}
