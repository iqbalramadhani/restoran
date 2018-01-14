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
        $data['record'] = $this->model_koki->tampil_pesanan();
        //die(print_r($data));
        $this->load->view('header_koki');
        $this->load->view('koki',$data);
        $this->load->view('footer');
    }
    
    public function cek_koki(){
        $id = $this->session->userdata('id_pengguna');
        $data = $this->model_login->get_one($id)->row_array();
        if($data['jabatan'] == 'Koki'){
            $this->session->set_userdata(array('nama_pengguna'=>$data['nama_lengkap']));
            redirect('koki/tampil_koki');
        }else{
            $this->session->set_flashdata('info','ANDA BUKAN KOKI !');
            redirect('koki');
        }
    }
    
    public function pesanan_selesai(){
        $id = $this->input->post("id");
        $this->model_koki->pesanan_selesai($id);
    }
    
    public function pesanan_next()
    {
        foreach ($this->model_koki->tampil_pesanan() as $r):
        echo   '<div id="data_'.$r->id_pesanan.'" class="col-md-12 thumbnail" style="padding-left : 10px;">
                <p>No Pesanan : '.$r->id_pesanan.'</p>
                <p>Nama : '.$r->nama.'</p>
                <div class="row">
                  <div class="col-lg-10 col-md-9 col-sm-9">
                    <table class="table table-bordered">
                     <thead>
                        <tr style="background-color: skyblue; color: white;">
                            <th>Banyak</th>
                            <th>Nama Makanan/Minuman</th>
                        </tr>
                     </thead>
                     <tbody>';
                        $pecah  = explode(",",$r->jumlah);
                        $pecah1 = explode(",",$r->nama_pesanan);
                        for ($i=0;$i<count($pecah);$i++){
                           echo '<tr>
                                    <td>'.$pecah[$i].'</td>
                                   <td>'.$pecah1[$i].'</td>    
                                  </tr>';
                        }
               echo  '</tbody>
                    </table>
                  </div>
                  <div class="col-md-2 col-sm-2">
                      <button type="button" data-id="'.$r->id_pesanan.'" class="selesai btn btn-success"><img src="'.base_url().'/assets/gambar/Y.png" width="130px" height="130px" alt="Selesai"></button>
                  </div>
                </div>          
            </div>';
          endforeach;
    }
    
    public function menu(){
        $data['bahan'] = $this->model_koki->tampil_bahan()->result();
        $data['menu'] = $this->model_koki->menu()->result(); 
        $this->load->view('header_koki');
        $this->load->view('koki_menu',$data);
        $this->load->view('footer');
    }
    
    public function simpan_menu(){
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
        $id = $this->uri->segment(3);
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
}