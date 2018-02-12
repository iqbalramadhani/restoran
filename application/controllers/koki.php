<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koki extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(array('model_login','model_koki'));
        //cek_session();
    }
    
    public function index(){
        $level = "Koki";
        $this->session->set_userdata(array('level'=>$level));
        $this->load->view('login');
    }
    
    public function tampil_koki(){
        cek_koki();
        //$data['record'] = $this->model_koki->tampil_pesanan();
        //die(print_r($data));
        $this->load->view('header_koki');
        $this->load->view('koki');
    }
    
    public function cek_koki(){
        $id = $this->session->userdata('id_pengguna');
        $data = $this->model_login->get_one($id)->row_array();
        if($data['jabatan'] == 'Koki'){
            $this->session->set_userdata(array('status_koki'=>'oke','nama_pengguna'=>$data['nama_lengkap']));
            redirect('koki/tampil_koki');
        }else{
            $this->session->set_flashdata('info','ANDA BUKAN KOKI !');
            redirect('koki');
        }
    }
    
    public function pesanan_selesai(){
        cek_koki();
        $id = $this->input->post("id");
        $this->model_koki->pesanan_selesai($id);
    }
    
    public function pesanan_next(){
        cek_koki();
        $hasil = $this->model_koki->tampil_pesanan();
        if($hasil->num_rows()>0){
            foreach ($hasil->result() as $r){
                echo   '<div id="data_'.$r->id_pesanan.'" class="header">
                            <h2>
                                No Pesanan : '.$r->id_pesanan.'
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-xs-8 col-md-8">
                                  <!-- Bordered Table -->
                                  <div class="body table-responsive">
                                                  <table class="table table-bordered">
                                                      <thead style="background-color: #434e60; color: white;">
                                                          <tr>
                                                              <th>Nama Pesanan</th>
                                                              <th>Jumlah Pesanan</th>
                                                          </tr>
                                                      </thead>
                                                      <tbody>
                                                        <tbody>';
                                                            $pecah  = explode(",",$r->nama_pesanan);
                                                            $pecah1 = explode(",",$r->jumlah);
                                                            for ($i=0;$i<count($pecah);$i++){
                                                               echo '<tr>
                                                                        <td>'.$pecah[$i].'</td>
                                                                       <td>'.$pecah1[$i].'</td>    
                                                                      </tr>';
                                                            }
                echo  '</tbody>
                                                  </table>
                                              </div>
                                  <!-- #END# Bordered Table -->                                    
                                </div>
                                <div class="col-xs-4 col-md-3">
                                    <a href="javascript:void(0);" class="thumbnail">
                                        <img class="selesai" src="'.base_url().'assets/mdl/images/checklist.png" data-id="'.$r->id_pesanan.'" class="img-responsive">
                                    </a>
                                </div>';
            }
        }else{
            echo '<div style="padding: 20px 0 20px 0;">
                    <center><h1>Tidak Ada Pesanan !</h1></center>
                  </div>';
        }
    }
    
    public function menu(){
        cek_koki();
        $data['bahan'] = $this->model_koki->tampil_bahan()->result();
        $data['menu'] = $this->model_koki->menu()->result(); 
        //$this->load->view('header_koki');
        $this->load->view('koki_menu',$data);
        //$this->load->view('footer');
    }
    
    public function simpan_menu(){
        cek_koki();
        
        $upload = $this->upload();
        if($upload['result'] == "success"){ // Jika proses upload sukses
            // Panggil function untuk menyimpan data ke database
            $nama      = $this->input->post('nama');
            $kategori  = $this->input->post('kategori');
            $harga     = $this->input->post('harga');
            $namafoto  = $upload['file']['file_name'];
            $data = array (
                'id_kategori' => $kategori,
                'nama'  => $nama,
                'harga' => $harga,
                'foto'  => $namafoto
            );
            $id_menu = $this->model_koki->tambah_menu($data);
            for ($i=0;$i<count($this->input->post('bahan'));$i++){
                $nama_bahan = $this->input->post('bahan')[$i];
                $id_bahan = $this->model_koki->getid_bahan($nama_bahan);
                $bahan = array(
                    'id_menu' => $id_menu['id_menu'],
                    'id_bahan' => $id_bahan['id_bahan'],
                    'jumlah' => $this->input->post('qty')[$i]
                );
                $this->model_koki->tambah_bahan($bahan);
            }
            redirect('koki/menu');
        }else{
             $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
        }
    }
    
    public function hapus_menu(){
        //cek_koki();
        $id = $this->input->post('id_hapus',true);
        $this->model_koki->hapus_menu($id);
        redirect('koki/menu');
    }
    
    public function upload(){
          $config['upload_path'] = 'assets/gambar/makanan';
          $config['allowed_types'] = 'jpg|png|jpeg';
          $config['remove_space'] = TRUE;

          $this->load->library('upload', $config); // Load konfigurasi uploadnya
          if($this->upload->do_upload('foto')){ // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
          }else{
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
          }
    }
    
    public function tampil_menu(){
        cek_koki();
            //$data['bahan'] = $this->model_koki->tampil_bahan()->result();
            $menu = $this->model_koki->menu()->result();
            $no = 1;
            foreach ($menu as $m):
            echo '<tr>
                <td>'.$no.'</td>
                <td>'.$m->nama.'</td>
                <td>'.$m->harga.'</td>
                <td>
                    <ul>';
                        $pecah  = explode(",",$m->jumlah);
                        $pecah1 = explode(",",$m->bahan);
                        for($i=0;$i<count($pecah);$i++){
                   echo '<li>'.$pecah[$i].' '.$pecah1[$i].'</li>';   
                        }
                  echo '</ul>
                </td>
                <td>
                    <ul>'; 
                        $pecah2 = explode(",",$m->jumlah_bahan);
                        for($i=0;$i<count($pecah2);$i++){
                            if($pecah2[$i]>=$pecah[$i]){
                                echo '<li><font color="green" style="bold">'.$pecah2[$i].' '.$pecah1[$i].'</font></li>';
                            }else{
                                echo '<li><font color="red" style="bold">'.$pecah2[$i].' '.$pecah1[$i].'</font></li>';
                            } 
                        }
                  echo '</ul>
                </td>
                <td><img src="'.base_url().'assets/gambar/makanan/'.$m->foto.'" width="180" height="120" alt="Lotek"></td>
                <td>
                    <button class="btn btn-block bg-indigo waves-effect" data-toggle="modal" data-target="#ubah">Ubah</button>
                    <button class="hapus btn btn-block bg-red waves-effect" data-id="'.$m->id_menu.'" data-toggle="modal" data-target="#hapus">Hapus</button>
                </td>
            </tr>';
            $no++;
            endforeach; 
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('koki');
    }
}