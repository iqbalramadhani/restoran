<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelayan extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array('model_login','model_pelayan'));
        //cek_session();
    }
    
    public function tampil_pelayan(){
        $data['record'] = $this->model_pelayan->tampil_pesanan()->result();
        $this->load->view('pelayan',$data);
        $this->load->view('footer');
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
