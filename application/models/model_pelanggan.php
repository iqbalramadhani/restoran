<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pelanggan extends CI_Model {
    
    function post($nama){
        $data = array(
            'nama'    => $nama,
            'tanggal' => date('Y-m-d')
        );
        $this->db->insert('pelanggan',$data);
        //$pelanggan = $this->db->get_where('pelanggan',array('nama'=>$nama))->row_array();
        /*coba pake qury*/
        
    }
    
    function data_user($nama){
        $query="SELECT *
                FROM pelanggan
                WHERE nama = '$nama'
                ORDER BY id_pelanggan
                DESC LIMIT 1";
        $data = $this->db->query($query)->result();
        //$pelanggan = $this->db->get_where('pelanggan',array('nama'=>$nama))->row_array();
        foreach ($data as $r){
            $this->session->set_userdata(array(
            'id_pelanggan'   => $r->id_pelanggan,
            'nama_pelanggan' => $r->nama,
            'status_input'   => 'oke'
            ));
        }
        
    }
    function tampil_data(){
        return $this->db->get('makanan');;
    }
}
