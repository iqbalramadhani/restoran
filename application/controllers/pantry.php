<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pantry extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array('model_pantry','model_login'));
        //cek_session();
    }
    
    public function index(){
        $level = "Pantry";
        $this->session->set_userdata(array('level'=>$level));
        //$this->template->load('template','login');
        $this->load->view('login');
    }
    
    public function tampil_pantry(){
        //$data['record'] = $this->model_pelanggan->tampil_data();
        $data['record'] = $this->model_pantry->tampil_data()->result();
        $this->load->view('pantry',$data);
    } 
    
    public function cek_pantry(){
        $id = $this->session->userdata('id_pengguna');
        $data = $this->model_login->get_one($id)->row_array();
        if($data['jabatan'] == 'Pantry'){
            $this->session->set_userdata(array('nama_pengguna'=>$data['nama_lengkap']));
            redirect('pantry/tampil_pantry');
        }else{
            $this->session->set_flashdata('info','ANDA BUKAN PANTRY !');
            redirect('pantry');
        }
    }
    
    public function stock_barang(){
        $this->load->view('stock_barang');
    }
    
    public function tambah_stock(){
        $this->load->view('tambah_stock');
    }
       
    public function post(){
        $data = array(
            'nama_bahan' => $this->input->post('nama_bahan',true),
            'jumlah'     => $this->input->post('jumlah',true)
        );
        $this->model_pantry->post($data);
        echo $this->tampil();
    }
    
    public function tampil(){
        foreach ($this->model_pantry->tampil_data()->result() as $r){
            echo '<tr id="baris_'.$r->id_bahan.'">
                   <td>'.$r->id_bahan.'</td>
                   <td>'.$r->nama_bahan.'</td>
                   <td>'.$r->jumlah.'</td>
                   <td>
                    <button class="modal_data btn btn-primary"
                           data-toggle="modal"
                           data-target="#edit_dialog"
                           data-id='.$r->id_bahan.' 
                           data-nama_bahan='.$r->nama_bahan.' 
                           data-jumlah='.$r->jumlah.'>Edit
                   </button>
                    <button class="modal_data btn btn-danger"
                            data-toggle="modal"
                            data-target="#hapus_dialog"
                            data-id='.$r->id_bahan.' 
                            data-nama_bahan='.$r->nama_bahan.' 
                            data-jumlah='.$r->jumlah.'>Hapus
                    </button>
                </td>
               </tr>';
        }
    }

    public function edit(){
        $id    = $this->input->post('id_bahan',true);
        $data  = array(
            'nama_bahan' => $this->input->post('nama_bahan',true),
            'jumlah'     => $this->input->post('jumlah',true)
                    );
        $this->model_pantry->edit($id,$data);
    }

    public function hapus(){
        $id = $this->input->post('id_bahan',true);
        $this->model_pantry->hapus($id);
        
    }
}
