<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_pelanggan extends CI_Model {
    
    function post($nama){
        $isi = array(
            'nama'    => $nama,
            'tanggal' => date('Y-m-d')
        );
        $this->db->insert('pelanggan',$isi);
        //$pelanggan = $this->db->get_where('pelanggan',array('nama'=>$nama))->row_array();
        /*coba pake qury*/
        
    }
    
    function data_user($nama){
        return $this->db->get_where('pelanggan',array('nama'=>$nama));
    }
    
    function tampil_data(){
        return $this->db->get('makanan');;
    }
}
