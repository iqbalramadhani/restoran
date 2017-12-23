<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_pelanggan extends CI_Model {
    
    function post($nama){
        $isi = array(
            'nama'    => $nama,
            'tanggal' => date('Y-m-d')
        );
        $this->db->insert('pelanggan',$isi);
        
    }
    
    function data_user($nama){
        $query = "SELECT * 
                  FROM pelanggan 
                  WHERE nama = '$nama'
                  ORDER BY id_pelanggan DESC
                  LIMIT 1";
        $hasil = $this->db->query($query)->row_array();
        $this->session->set_userdata(array(
                    'id_pelanggan'   => $hasil['id_pelanggan'],
                    'nama_pelanggan' => $hasil['nama'],
                    'status_input'   => 'oke'
                ));
        //die(print_r($this->session->userdata('nama_pelanggan')));
        return $hasil; 
    }
    
    function tampil_data(){
        return $this->db->get('makanan');
    }
    
    function pesan($hasil){
        return $this->db->insert_batch('pesanan_detail',$hasil);
    }
}
