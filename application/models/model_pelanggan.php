<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pelanggan extends CI_Model {
    
    function post(){
        $nama = $this->input->post('nama_anda');
        $this->session->set_userdata(array('nama'=>$nama));
        $data = array(
            'nama'    => $nama,
            'tanggal' => date('Y-m-d')
        );
        $this->db->insert('pelanggan',$data);
    }
}
