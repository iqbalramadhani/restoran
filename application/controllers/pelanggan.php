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
        $this->load->view('header_menu');
        $this->load->view('customer',$data);
        //echo $this->show_cart();
        $this->load->view('footer');
        
    }
     
    public function selesai(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
    
    public function checkout(){
        $data['baris'] = array ( 
                $this->cart->contents()
        );
        $this->load->view('header_menu');
        $this->load->view('checkout',$data);
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
    
    function show_cart(){ //Fungsi untuk menampilkan Cart
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='
                <tr>
                    <td>'.$items['name'].'</td>
                    <td>'.number_format($items['price']).'</td>
                    <td>'.$items['qty'].'</td>
                    <td>'.number_format($items['subtotal']).'</td>
                    <td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
                </tr>
            ';
        }
        $output .= '
            <tr>
                <th colspan="3">Total</th>
                <th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
            </tr>
        ';
        return $output;
    }
 
    function load_cart(){ //load data cart
        echo $this->show_cart();
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
