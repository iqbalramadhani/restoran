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
        cek_pantry();
        //$data['record'] = $this->model_pelanggan->tampil_data();
        //$data['record'] = $this->model_pantry->tampil_data()->result();
        $this->load->view('pantry');
    } 
    
    public function cek_pantry(){
        $id = $this->session->userdata('id_pengguna');
        $data = $this->model_login->get_one($id)->row_array();
        if($data['jabatan'] == 'Pantry'){
            $this->session->set_userdata(array('status_pantry'=>'oke','nama_pengguna'=>$data['nama_lengkap']));
            redirect('pantry/tampil_pantry');
        }else{
            $this->session->set_flashdata('info','ANDA BUKAN PANTRY !');
            redirect('pantry');
        }
    }
    
    public function stock_barang(){
        cek_pantry();
        $this->load->view('stock_barang');
    }
    
    public function tambah_stock(){
        cek_pantry();
        $this->load->view('tambah_stock');
    }
       
    public function post(){
        cek_pantry();
        $data = array(
            'nama_bahan' => $this->input->post('nama_bahan',true),
            'jumlah'     => $this->input->post('jumlah',true)
        );
        $hasil = $this->model_pantry->post($data);
        echo json_encode($hasil);
    }
    
    public function tampil(){
        cek_pantry();
        $list = $this->model_pantry->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $person) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $person->nama_bahan;
            $row[] = $person->jumlah;

            //add html for action
            $row[] = '<button class="modal_data btn btn-block btn-sm bg-indigo waves-effect" data-toggle="modal" data-target="#edit" data-id='.$person->id_bahan.' data-nama_bahan='.$person->nama_bahan.' data-jumlah='.$person->jumlah.'><i class="material-icons col-red">create</i></button>';
            $row[] = '<button class="modal_data btn btn-block btn-sm bg-red waves-effect" data-toggle="modal" data-target="#defaultModal" data-id='.$person->id_bahan.' data-nama_bahan='.$person->nama_bahan.' data-jumlah='.$person->jumlah.'><i class="material-icons col-red">clear</i></button>';

            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->model_pantry->count_all(),
                        "recordsFiltered" => $this->model_pantry->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
        
        //$data = $this->model_pantry->tampil_data()->result();
        //die(print_r($data));
        //echo json_encode($data);
//        $no=1;
//        foreach ($this->model_pantry->tampil_data()->result() as $r){
//            echo '<tr id="baris_'.$r->id_bahan.'">
//                   <td>'.$no.'</td>
//                   <td>'.$r->nama_bahan.'</td>
//                   <td>'.$r->jumlah.'</td>
//                   <td>
//                    <button class="modal_data btn btn-block btn-sm bg-indigo waves-effect"
//                           data-toggle="modal"
//                           data-target="#edit"
//                           data-id='.$r->id_bahan.' 
//                           data-nama_bahan='.$r->nama_bahan.' 
//                           data-jumlah='.$r->jumlah.'>
//                           <i class="material-icons col-red">create</i>
//                   </button>
//                   </td><td>
//                    <button class="modal_data btn btn-block btn-sm bg-red waves-effect"
//                            data-toggle="modal"
//                            data-target="#defaultModal"
//                            data-id='.$r->id_bahan.' 
//                            data-nama_bahan='.$r->nama_bahan.' 
//                            data-jumlah='.$r->jumlah.'>
//                            <i class="material-icons col-red">clear</i>
//                    </button>
//                </td>
//               </tr>';
//            $no++;
//        }
    }

    public function edit(){
        cek_pantry();
        $id    = $this->input->post('id_bahan',true);
        $data  = array(
            'nama_bahan' => $this->input->post('nama_bahan',true),
            'jumlah'     => $this->input->post('jumlah',true)
                    );
        $hasil = $this->model_pantry->edit($id,$data);
        echo json_encode($hasil);
        
    }

    public function hapus(){
        cek_pantry();
        $id = $this->input->post('id_bahan',true);
        $hasil = $this->model_pantry->hapus($id);
        echo json_encode($hasil);
    }
    
    public function coba(){
        cek_pantry();
        $this->load->view('pantry_test');
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('pantry');
    }
}
