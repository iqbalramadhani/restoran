<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_pelayan extends CI_Model {
    
    function tampil_pesanan(){
        $query = "SELECT pd.id_pesanan,pl.nama,GROUP_CONCAT(pd.jumlah) as jumlah,GROUP_CONCAT(m.nama) as nama_pesanan 
                  FROM menu as m JOIN pesanan_detail as pd JOIN pesanan as p JOIN pelanggan as pl 
                  WHERE pd.id_menu = m.id_menu AND pd.id_pesanan = p.id_pesanan AND p.id_pelanggan = pl.id_pelanggan AND pd.status_pesanan = '1' 
                  GROUP BY pd.id_pesanan";
        $hasil = $this->db->query($query);
        return $hasil;
    }
    
    function pesan($hasil){
        return $this->db->insert_batch('pesanan_detail',$hasil);
    }
}
