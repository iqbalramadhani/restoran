<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayan extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('model_login');
        //cek_session();
    }
    
    public function tampil_pelayan(){
        //$this->template->load('template','pelayan');
        $this->load->view('pelayan');
    }
    
    public function index(){
        //$this->template->load('template','login');
        $level = "Pelayan";
        $this->session->set_userdata(array('level'=>$level));
        $this->load->view('login');
    }
    
    public function cek_pelayan(){
        $id = $this->session->userdata('id_pengguna');
        $data = $this->model_login->get_one($id)->row_array();
        if($data['jabatan'] == 'Pelayan'){
            $this->session->set_userdata(array('nama_pengguna'=>$data['nama_lengkap']));
            redirect('pelayan/tampil_pelayan');
        }else{
            $this->session->set_flashdata('info','ANDA BUKAN PELAYAN !');
            redirect('pelayan');
        }
    }
}
