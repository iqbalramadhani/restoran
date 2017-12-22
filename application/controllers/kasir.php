<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('model_login');
        //cek_session();
    }
    
    public function index(){
        $level = "Kasir";
        $this->session->set_userdata(array('level'=>$level));
        $this->load->view('login');
    }
    
    public function tampil_kasir(){
        $this->load->view('kasir');
    }
    
    public function cek_kasir(){
        $id = $this->session->userdata('id_pengguna');
        $data = $this->model_login->get_one($id)->row_array();
        if($data['jabatan'] == 'Kasir'){
            $this->session->set_userdata(array('nama_pengguna'=>$data['nama_lengkap']));
            redirect('kasir/tampil_kasir');
        }else{
            $this->session->set_flashdata('info','ANDA BUKAN KASIR !');
            redirect('kasir');
        }
    }
    
}
