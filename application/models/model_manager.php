<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_manager extends CI_Model {
    
    
    
    function post($data){
       $this->db->insert('pegawai',$data);
       $id = $this->db->insert_id();
       $akun = array(
          'id_pegawai' => $id,
          'username' => $this->input->post('username',true),
          'password' => MD5($this->input->post('password',true))
        );
       //$coba = MD5($akun['password']);
       //die(print_r($coba));
       $this->db->insert('akun',$akun);
    }

    function tampil_akun(){
        $query = "SELECT * FROM pegawai";
        $hasil = $this->db->query($query);
        return $hasil;
    }
    

    function delete($id){
        $this->db->where('id_pegawai',$id);
        $this->db->delete('pegawai');
    }
    
    function update($id,$data){
        $this->db->where('id_pegawai',$id);
        $this->db->update('pegawai',$data);
    }
}
