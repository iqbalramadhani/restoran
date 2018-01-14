<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_kasir extends CI_Model {
    
    function tampil_pesanan(){
        $query = "SELECT p.id_pesanan,pl.nama,p.id_pelanggan,GROUP_CONCAT(m.harga) as harga,GROUP_CONCAT(pd.jumlah) as jumlah,GROUP_CONCAT(m.nama) as nama_pesanan 
                  FROM menu as m JOIN pesanan_detail as pd JOIN pesanan as p JOIN pelanggan as pl 
                  WHERE pd.id_menu = m.id_menu AND pd.id_pesanan = p.id_pesanan AND p.id_pelanggan = pl.id_pelanggan AND pd.status_bayar = '0' 
                  GROUP BY pd.id_pesanan";
        $hasil = $this->db->query($query);
        return $hasil;
    }
    
    function tampil_satu_pesanan($id){
        $query = "SELECT menu.nama,menu.harga,pd.jumlah  
                  FROM pesanan_detail as pd JOIN menu USING (id_menu)
                  WHERE id_pesanan = '$id'";
        $hasil = $this->db->query($query);
        return $hasil;
    }
    
    function pesanan_selesai($id){
        $this->db->where('id_pesanan',$id);
        $this->db->update('pesanan_detail',array('status'=>'1'));
    }
    
    function bayar($id){
        $this->db->where('id_pesanan',$id);
        $this->db->update('pesanan_detail',array('status_bayar'=>'1'));
    }
}
