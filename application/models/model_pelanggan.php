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
        $query = "SELECT *
                  FROM menu
                  WHERE id_menu <> ALL (SELECT DISTINCT (resep.id_menu)
                                        FROM resep JOIN bahan USING (id_bahan)
                                        WHERE resep.jumlah > bahan.jumlah) AND id_kategori = '1'";
        return $this->db->query($query);
        
    }

    function tampil_data2(){
        $query = "SELECT *
                  FROM menu
                  WHERE id_menu <> ALL (SELECT DISTINCT (resep.id_menu)
                                        FROM resep JOIN bahan USING (id_bahan)
                                        WHERE resep.jumlah > bahan.jumlah) AND id_kategori = '0'";
        return $this->db->query($query);
        
    }
    
    function pesan($id){
        $data = array(
                'id_pelanggan' => $id,
                'tanggal'      => date('Y-m-d')
            );
        $this->db->insert('pesanan',$data);
        return $this->db->get_where('pesanan',array('id_pelanggan'=>$id))->row_array();
    }
            
    function pesanan_detail($hasil){
        $this->db->insert_batch('pesanan_detail',$hasil);
    }
    
    function update_bahan($id,$jumlah){
        $query = "SELECT id_bahan,jumlah FROM resep WHERE id_menu = '$id'";
        $hasil = $this->db->query($query)->result();
        //die(print_r($hasil));
        foreach ($hasil as $r){
            $query = "UPDATE bahan 
                      SET jumlah = jumlah - ($r->jumlah*$jumlah)  
                      WHERE id_bahan = '$r->id_bahan'";
            $this->db->query($query);
        }
    }

    function unlike($id){
        $this->db->where('id_pelanggan',$id);
        $this->db->update('pelanggan',array('feedback'=>'0'));
        //return $this->db->get_where('pesanan',array('id_pelanggan'=>$id))->row_array();
    }
}
