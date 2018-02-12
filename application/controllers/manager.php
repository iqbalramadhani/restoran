<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array('model_login','model_manager'));
        
        //cek_manager();
        //cek_session();
    }
    
    public function index(){
        //$this->session->sess_destroy();
        $level = 'Manager';
        $this->session->set_userdata(array('level'=>$level));
        $this->load->view('login');
    }
    
    public function tampil_manager(){
        cek_manager();
        $data["record"] = $this->model_manager->tampil_akun();
        $this->load->view('header_manager',$data);
        $this->load->view('manager-akun');
    }
    
    public function cek_manager(){
        $id = $this->session->userdata('id_pengguna');
        $data = $this->model_login->get_one($id)->row_array();
        if($data['jabatan'] == 'Manager'){
            $this->session->set_userdata(array('status_manager'=>'oke','nama_pengguna'=>$data['nama_lengkap']));
            redirect('manager/tampil_manager');
        }else{
            $this->session->set_flashdata('info','ANDA BUKAN MANAGER !');
            redirect('manager');
        }
    }

    public function post(){
        $data = array(
            'nama_lengkap' => $this->input->post('nama',true),
            'alamat'       => $this->input->post('alamat',true),
            'jabatan'      => $this->input->post('jabatan',true),
        );
        //die(print_r($data));
        $this->model_manager->post($data);
        $record = $this->model_manager->tampil_akun();
        $no=1;
        foreach ($record->result() as $r){
            echo '<tr>
                <td>'.$r->id_pegawai.'</td>
                <td>'.$r->nama_lengkap.'</td>
                <td>'.$r->alamat.'</td>
                <td>'.$r->jabatan.'</td>
                <td><button class="ubah btn btn-primary waves-effect" data-toggle="modal" data-target="#edit"
                    data-nama = "'.$r->nama_lengkap.'"
                    data-alamat = "'.$r->alamat.'"
                    data-jabatan = "'.$r->jabatan.'"
                    type="submit" >Ubah</button></td>
                <td><button class="ubah btn btn-danger waves-effect" data-id="<?php echo $r->id_pegawai;?>" data-toggle="modal" data-target="#hapus" type="submit">Hapus</button></td>
            </tr>';  
        $no++;
        }
        // $hasil = $this->model_manager->post($data);
//        echo json_encode($hasil);
    }
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('manager');
    }
    
    public function ubah_akun(){
        $id = $this->input->post('id',true);
        $data = array(
            'nama_lengkap' => $this->input->post('nama',true),
            'alamat'       => $this->input->post('alamat',true),
            'jabatan'      => $this->input->post('jabatan',true),
        );
        $this->model_manager->update($id,$data);
        $record = $this->model_manager->tampil_akun();
        $no=1;
        foreach ($record->result() as $r){
            echo '<tr>
                <td>'.$no.'</td>
                <td>'.$r->nama_lengkap.'</td>
                <td>'.$r->alamat.'</td>
                <td>'.$r->jabatan.'</td>
                <td><button class="ubah btn btn-primary waves-effect" data-toggle="modal" data-target="#edit"
                    data-id = "'.$r->id_pegawai.'"
                    data-nama = "'.$r->nama_lengkap.'"
                    data-alamat = "'.$r->alamat.'"
                    data-jabatan = "'.$r->jabatan.'"
                    type="submit" >Ubah</button></td>
                <td><button class="ubah btn btn-danger waves-effect" data-id="'.$r->id_pegawai.'" data-toggle="modal" data-target="#hapus" type="submit">Hapus</button></td>
            </tr>';        
        $no++;
        }
    }
    
    public function hapus_akun(){
        $id = $this->input->post('id',true);
        $this->model_manager->delete($id);
        $record = $this->model_manager->tampil_akun();
        $no = 1;
        foreach ($record->result() as $r){
            echo '<tr>
                <td>'.$no.'</td>
                <td>'.$r->nama_lengkap.'</td>
                <td>'.$r->alamat.'</td>
                <td>'.$r->jabatan.'</td>
                <td><button class="ubah btn btn-primary waves-effect" data-toggle="modal" data-target="#edit"
                    data-id = "'.$r->id_pegawai.'"
                    data-nama = "'.$r->nama_lengkap.'"
                    data-alamat = "'.$r->alamat.'"
                    data-jabatan = "'.$r->jabatan.'"
                    type="submit" >Ubah</button></td>
                <td><button class="ubah btn btn-danger waves-effect" data-id="'.$r->id_pegawai.'" data-toggle="modal" data-target="#hapus" type="submit">Hapus</button></td>
            </tr>';
            $no++;
        }
    }
            
}
