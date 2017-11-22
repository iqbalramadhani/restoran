<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_makanan extends CI_Controller {
	public function index(){
		$this->load->view('makanan/T3');
	}
}
