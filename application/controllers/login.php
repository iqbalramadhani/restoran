<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('model_login');
        //cek_session();
    }
    
    public function index(){
        $this->load->view('login');
    }

    public function cek_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password'); 
        $hasil = $this->model_login->login($username,$password);
        if($hasil->num_rows()>0){
            foreach ($hasil->result() as $h){
                $id = $h->id_pegawai;
            }
            //$data = $this->model_login->get_one($id)->row_array();
            $this->session->set_userdata(array(
                'id_pengguna'=> $id
                //'status_login' => 'oke'
                    ));
            $level = $this->session->userdata('level');
            if($level == 'Manager'){
                redirect('manager/cek_manager');
            }
            else if($level == 'Pelayan'){
                redirect('pelayan/cek_pelayan');
            }
            else if($level == 'Koki'){
                redirect('koki/cek_koki');
            }
            else if($level == 'Kasir'){
                redirect('kasir/cek_kasir');
            }
            else if($level == 'Pantry'){
                redirect('pantry/cek_pantry');
            }
        }else{
            $this->session->set_flashdata('info','ID ATAU KATA SANDI ANDA SALAH !');
            redirect('login');
        }
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
