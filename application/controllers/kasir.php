<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
    public function index(){
        $this->load->view('login');
    }
    
    public function tampil_kasir(){
        $this->template->load('template','kasir');
        //$this->load->view('pantry');
    }
            
}
