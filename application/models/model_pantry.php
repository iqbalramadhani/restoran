<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_pantry extends CI_Model {
    
    function post($data){
        $this->db->insert('bahan',$data);
        //$pelanggan = $this->db->get_where('pelanggan',array('nama'=>$nama))->row_array();
        /*coba pake qury*/
        
    }
    
    function get_one($id){
        $param = array('id_bahan' => $id);
        $data = $this->db->get_where('bahan',$param);
        return $data;
    }
    
    function data_user($nama){
        return $this->db->get_where('pelanggan',array('nama'=>$nama));
    }
    
    function tampil_data(){
        return $this->db->get('bahan');
    }
    
    function edit($id,$data){
        $this->db->where('id_bahan',$id);
        $this->db->update('bahan',$data);
    }
    
    function hapus($id){
        $this->db->where('id_bahan',$id);
        $this->db->delete('bahan');
    }
}
