<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pelayan extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array('model_login','model_pelayan'));
        //cek_session();
    }
    
    public function tampil_pelayan(){
        cek_pelayan();
        $data['record'] = $this->model_pelayan->tampil_pesanan()->result();
        $this->load->view('header_pelayan');
        $this->load->view('pelayan',$data);
    }
    
    public function index(){
        $level = "Pelayan";
        $this->session->set_userdata(array('level'=>$level));
        //$this->model_security->secure_pelayan();
        $this->load->view('login');
    }
    
    public function cek_pelayan(){
        $id = $this->session->userdata('id_pengguna');
        $data = $this->model_login->get_one($id)->row_array();
        if($data['jabatan'] == 'Pelayan'){
            $this->session->set_userdata(array('status_pelayan'=>'oke','nama_pengguna'=>$data['nama_lengkap']));
            redirect('pelayan/tampil_pelayan');
        }else{
            $this->session->set_flashdata('info','ANDA BUKAN PELAYAN !');
            redirect('pelayan');
        }
    }

    public function antar(){
        cek_pelayan();
        $id = $this->input->post("id");
        $this->model_pelayan->antar($id);
    }
    
    public function tampil_pesanan(){
        cek_pelayan();
        $hasil = $this->model_pelayan->tampil_pesanan();
        if($hasil->num_rows()>0){
            foreach ($hasil->result() as $r){
            echo '<div id="pesanan'.$r->id_pesanan.'" class="panel panel-primary">
                <div class="panel-heading" role="tab" id="headingTwo_'.$r->id_pesanan.'">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_1" href="#collapseTwo_'.$r->id_pesanan.'" aria-expanded="true"
                           aria-controls="collapseTwo_'.$r->id_pesanan.'">
                            '.$r->id_pesanan.'
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo_'.$r->id_pesanan.'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_'.$r->id_pesanan.'">
                    <div class="panel-body">
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Pesanan</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>'; 
                                $pecah = explode(",",$r->nama_pesanan);
                                $pecah2 = explode(",",$r->jumlah);
                                // $total = 0;
                                for ($i=0;$i<count($pecah);$i++){
                                echo '<tr>
                                        <td>'.$pecah[$i].'</td>
                                        <td>'.$pecah2[$i].'</td>
                                      </tr>';
                                }                       
                        echo '</tbody>
                            </table>
                        </div>
                        <br>
                          <button type="submit" class ="antar btn btn-primary m-t-15 waves-effect" data-id="'.$r->id_pesanan.'">Antar</button>
                    </div>
                </div>
               </div>';
            }
        }else{
            echo '<div style="padding: 20px 0 20px 0;">
                    <center><h1>Tidak Ada Pesanan !</h1></center>
                  </div>';
        }
    } 

    public function logout(){
        $this->session->sess_destroy();
        redirect('pelayan');
    }                   
}