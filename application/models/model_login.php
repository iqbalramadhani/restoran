<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model {
    public function login($username,$password) {
        $cek = $this->db->get_where('akun',array(
                        'username'=>$username,
                        'password'=>MD5($password)
            ));
        return $cek;
        
    }
    
    public function get_one($id){
        return $this->db->get_where('pegawai',array('id_pegawai' => $id));
        //return $this->db->get_where('pegawai',array('id_pegawai'=>$data['id_pegawai']));
    }
    
}
