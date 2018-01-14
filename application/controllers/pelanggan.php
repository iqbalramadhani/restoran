<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array('model_pelanggan','model_koki'));
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
        $this->load->view('header_menu');
        //$this->load->view('customer_material',$data);
        $this->load->view('customer',$data);
        //$this->load->view('customer_1',$data);
        $this->load->view('footer');
        
    }
     
    public function selesai(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
    
    public function checkout(){
        $data['baris'] = $this->cart->contents();
        $this->load->view('header_menu');
        $this->load->view('checkout');
        $this->load->view('footer');
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
        //die(print_r($this->cart->contents()));
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
                    <td>'.$b['qty'].'</td>
                    <td>'.$b['name'].'</td>
                    <td>'.$b['price'].'</td>
                    <td>'.$b['subtotal'].'</td>
                    <td><button type="button" id="'.$b['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
                  </tr>';
            $no++;
            $jumlah = $jumlah+$b['qty'];
        }
        echo '  <tr>
                <th colspan="3">Total</th>
                <th colspan="2">'.'Rp '.$this->cart->total().'</th>';
            
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
        //redirect('pelanggan/menu');
        $this->session->set_userdata(array('pesanan'=>'oke'));
    }
    
    function cek(){
        echo $this->session->userdata('pesanan');
        //die(print_r($this->session->userdata('pesanan')));
    }
}
