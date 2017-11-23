<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_pelanggan');
        //cek_session();
    }
    
    public function index(){
            $this->load->view('inp_pelanggan');
    }

    public function identitas(){
        if(isset($_POST['submit'])){
            $this->model_pelanggan->post();
            $this->load->view('customer');
        }else{
            $this->load->view('inp_pelanggan');
        }
    }
}
