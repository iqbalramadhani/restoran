<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {
	public function index(){
            //$this->load->view('pilihan_menu');
            $this->template->load('template','pilihan_menu');
	}
}
