<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_pelayan extends CI_Model {
    
    function tampil_pesanan(){
        $query = "SELECT p.nama,pd.id_pelanggan,GROUP_CONCAT(pd.jumlah) as jumlah,GROUP_CONCAT(m.nama) as nama_pesanan
                  FROM makanan as m JOIN pesanan_detail as pd JOIN pelanggan as p 
                  WHERE pd.id_menu = m.id_menu AND pd.id_pelanggan = p.id_pelanggan AND pd.status = '1'
                  GROUP BY pd.id_pelanggan";
        $hasil = $this->db->query($query);
        return $hasil;
    }
    
    function pesan($hasil){
        return $this->db->insert_batch('pesanan_detail',$hasil);
    }
}
