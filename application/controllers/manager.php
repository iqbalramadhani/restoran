<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {
    public function index(){
        $this->load->view('login');
    }
    
    public function tampil_manager(){
        $this->template->load('template','manager');
        //$this->load->view('pantry');
    }
            
}
