<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('model_pelanggan');
        //cek_session();
    }
    
    public function index(){
        $this->session->sess_destroy();
        $this->template->load('template','inp_pelanggan');
        //$this->load->view('customer');
    }

    public function identitas(){
        if(isset($_POST['submit'])){
            $nama  = $this->input->post('nama_anda',true);
            $data  = $this->model_pelanggan->data_user($nama);
            //$this->model_pelanggan->post($nama,$data);
            if($data->num_rows()>0){
                redirect('pelanggan');
            }else{
                $this->session->set_userdata(array(
                    'nama_pelanggan' => $nama,
                    'status_input'   => 'oke'
                ));
                $this->model_pelanggan->post($nama);
                redirect('pelanggan/menu');
            }     
        }else{
            redirect('pelanggan');
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
