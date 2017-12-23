<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koki extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array('model_login','model_koki'));
        //cek_session();
    }
    
    public function index(){
        $level = "Koki";
        $this->session->set_userdata(array('level'=>$level));
        $this->load->view('login');
    }
    
    public function tampil_koki(){
        $data['record'] = $this->model_koki->tampil_pesanan()->result();
        //die(print_r($data));
        $this->load->view('koki',$data);
        $this->load->view('footer');
    }
    
    public function cek_koki(){
        $id = $this->session->userdata('id_pengguna');
        $data = $this->model_login->get_one($id)->row_array();
        if($data['jabatan'] == 'Koki'){
            $this->session->set_userdata(array('nama_pengguna'=>$data['nama_lengkap']));
            redirect('koki/tampil_koki');
        }else{
            $this->session->set_flashdata('info','ANDA BUKAN KOKI !');
            redirect('koki');
        }
    }
    
    function pesanan_selesai(){
        $id = $this->input->post("id");
        $this->model_koki->pesanan_selesai($id);
    }
    
}
