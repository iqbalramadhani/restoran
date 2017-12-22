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
            redirect('pelanggan/menu');
        }else{
            $this->load->view('inp_pelanggan');
        }
    }
    
    public function menu(){
        //echo 'proses';
        $data['record'] = $this->model_pelanggan->tampil_data();
        //$this->template->load('customer',$data);
        //$this->load->view('header_menu');
        $this->load->view('customer_material',$data);
        //$this->load->view('customer',$data);
        //$this->load->view('footer');
        
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
        echo '<tr>
                <th colspan="3">Total</th>
                <th>'.'Rp '.$this->cart->total().'</th>
                <th><button  class="pesan1 btn btn-primary">Pesan</button></th>
            </tr>';
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
    
}
