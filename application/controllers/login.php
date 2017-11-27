<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('model_login');
        //cek_session();
    }
    
    public function index(){
        //$this->load->view('footer');
    }

    public function cek_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password'); 
        $hasil = $this->model_login->login($username,$password);
        if($hasil->num_rows()>0){
            foreach ($hasil->result() as $h){
                $id = $h->id_pegawai;
            }
            $data = $this->model_login->get_one($id)->row_array();
            $this->session->set_userdata(array(
                'nama_pengguna'=> $data['nama_lengkap'],
                'status_login' => 'oke'
                    ));
            if($data['jabatan'] == 'Manager'){
                redirect('manager/tampil_manager');
            }else if($data['jabatan'] == 'Pantry'){
                redirect('pantry/tampil_pantry');
            }
        }else{
            redirect('manager');
        }
    }
    
    public function tampil(){
        $this->load->view('pantry');
    }
}
