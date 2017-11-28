<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koki extends CI_Controller {
    public function index(){
        $this->load->view('login');
    }
    
    public function tampil_koki(){
        $this->template->load('template','koki');
        //$this->load->view('pantry');
    }
            
}
