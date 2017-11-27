<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pantry extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        //$this->load->model('model_pelanggan');
        //cek_session();
    }
    
    public function index(){
        //$this->template->load('template','login');
        $this->load->view('login');
    }
    
    public function tampil_pantry(){
        $this->template->load('template','pantry');
        //$this->load->view('pantry');
    } 
}
