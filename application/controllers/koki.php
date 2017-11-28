<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koki extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('model_login');
        //cek_session();
    }
    
    public function index(){
        $level = "Koki";
        $this->session->set_userdata(array('level'=>$level));
        $this->load->view('login');
    }
    
    public function tampil_koki(){
        $this->template->load('template','koki');
        //$this->load->view('pantry');
    }
    
    public function cek_koki(){
        $id = $this->session->userdata('id_pengguna');
        $data = $this->model_login->get_one($id)->row_array();
        if($data['jabatan'] == 'Koki'){
            $this->session->set_userdata(array('nama_pengguna'=>$data['nama_lengkap']));
            redirect('koki/tampil_koki');
        }else{
            redirect('koki');
        }
    }
    
}
