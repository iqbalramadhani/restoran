<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_koki extends CI_Model {
    
    function tampil_pesanan(){
        $query = "SELECT p.id_pesanan,pl.nama,p.id_pelanggan,GROUP_CONCAT(pd.jumlah) as jumlah,GROUP_CONCAT(m.nama) as nama_pesanan 
                  FROM menu as m JOIN pesanan_detail as pd JOIN pesanan as p JOIN pelanggan as pl 
                  WHERE pd.id_menu = m.id_menu AND pd.id_pesanan = p.id_pesanan AND p.id_pelanggan = pl.id_pelanggan AND p.status_pesanan = '0' 
                  GROUP BY pd.id_pesanan LIMIT 1";
        $hasil = $this->db->query($query);
        return $hasil;
    }
    
    function pesanan_selesai($id){
        $this->db->where('id_pesanan',$id);
        $this->db->update('pesanan',array('status_pesanan'=>'1'));
    }
    
    function menu(){
        $query = "SELECT m.nama,m.harga,m.foto,r.id_menu,GROUP_CONCAT(r.jumlah) as jumlah,GROUP_CONCAT(b.nama_bahan) as bahan,GROUP_CONCAT(b.jumlah) as jumlah_bahan
                  FROM menu as m JOIN resep as r JOIN bahan as b  
                  WHERE m.id_menu = r.id_menu AND r.id_bahan = b.id_bahan
                  GROUP BY (r.id_menu)";
        return $this->db->query($query);
    }
    
    function tampil_bahan(){
        return $this->db->get('bahan');
    }
    
    function tambah_menu($data){
        $this->db->insert('menu',$data);
        //return $this->db->insert_id(); // letakkan tepat dibawah query insert
        return $this->db->get_where('menu',array('nama'=>$data['nama']))->row_array();
        //die(print_r());
    }
    
    function tambah_bahan($bahan){
        $this->db->insert('resep',$bahan);
        //$this->db->insert_batch('resep',$bahan);
    }
    
    function getid_bahan($nama_bahan){
        return $this->db->get_where('bahan',array('nama_bahan'=>$nama_bahan))->row_array();
    }
    
    function hapus_menu($id){
        $this->db->where(array('id_menu'=>$id));
        $this->db->delete('menu');
    }
}
