<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pantry extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('model_login');
        //cek_session();
    }
    
    public function index(){
        $level = "Pantry";
        $this->session->set_userdata(array('level'=>$level));
        //$this->template->load('template','login');
        $this->load->view('login');
    }
    
    public function tampil_pantry(){
        $this->template->load('template','pantry');
        //$this->load->view('pantry');
    } 
    
    public function cek_pantry(){
        $id = $this->session->userdata('id_pengguna');
        $data = $this->model_login->get_one($id)->row_array();
        if($data['jabatan'] == 'Pantry'){
            $this->session->set_userdata(array('nama_pengguna'=>$data['nama_lengkap']));
            redirect('pantry/tampil_pantry');
        }else{
            redirect('pantry');
        }
    }
}
