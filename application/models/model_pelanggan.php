<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pelanggan extends CI_Model {
    
    function post(){
        $nama = $this->input->post('nama_anda');
        $data = array(
            'nama'    => $nama,
            'tanggal' => date('Y-m-d')
        );
        $this->db->insert('pelanggan',$data);
        //$pelanggan = $this->db->get_where('pelanggan',array('nama'=>$nama))->row_array();
        /*coba pake qury*/
        $pelanggan = $this->db->query("SELECT *
                                    FROM pelanggan
                                    WHERE nama = '$nama'
                                    ORDER BY id_pelanggan
                                    DESC LIMIT 1");
        $this->session->set_userdata(array(
            'id_pelanggan'      => $pelanggan['id_pelanggan'],
            'nama_pelanggan'    => $pelanggan['nama'],
            ));
    }
    
    function tampil_data(){
        return $this->db->get('makanan');;
    }
}
