<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('model_pelanggan');
        //cek_session();
    }
    
    public function index(){
            $this->template->load('template','inp_pelanggan');
            //$this->load->view('customer');
    }

    public function identitas(){
        if(isset($_POST['submit'])){
            $nama = $this->input->post('nama_anda',true);
            $this->model_pelanggan->post($nama);
            $this->model_pelanggan->data_user($nama);
            redirect('pelanggan/menu');
        }else{
            $this->template->load('template','inp_pelanggan');
            //$this->load->view('inp_pelanggan');
        }
    }
    
    public function menu(){
        //echo 'proses';
        $data['record'] = $this->model_pelanggan->tampil_data();
        $this->template->load('template','customer',$data);
        //$this->load->view('customer',$data);
    }
     
    public function selesai(){
        $this->session->sess_destroy();
        redirect('awal');
    }
}
