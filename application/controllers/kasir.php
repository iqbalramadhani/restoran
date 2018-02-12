<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model(array('model_login','model_kasir'));
        $this->load->library('pdf');
        //cek_session();
    }
    
    public function index(){
        $level = "Kasir";
        $this->session->set_userdata(array('level'=>$level));
        $this->load->view('login');
    }
    
    public function tampil_kasir(){
        cek_kasir();
        //die(print_r($data));
        $this->load->view('header_kasir');
        $this->load->view('kasir');
    }
    
    public function cek_kasir(){
        $id = $this->session->userdata('id_pengguna');
        $data = $this->model_login->get_one($id)->row_array();
        if($data['jabatan'] == 'Kasir'){
            $this->session->set_userdata(array('status_kasir'=>'oke','nama_pengguna'=>$data['nama_lengkap']));
            redirect('kasir/tampil_kasir');
        }else{
            $this->session->set_flashdata('info','ANDA BUKAN KASIR !');
            redirect('kasir');
        }
    }
    
    function pdf(){
        cek_kasir();
        global $title;
        $id = $this->uri->segment(3);
        $nama = $this->uri->segment(4);
        $pdf = new PDF('L','mm','A5');
        $title = 'RESTORAN BROTO' ;
        $pdf->SetTitle($title );
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',10);
        //$pdf->SetY($Y_Fields_Name_position);
        $pdf->Ln(9);
        $pdf->SetXY(22,33);
        $pdf->Cell(10,8,'NO     :',0,0,'C');
        $pdf->Cell(10,8,$id,0,0,'C');
        $pdf->SetXY(22,38);
        $pdf->Cell(10,8,'Nama :',0,0,'C');
        $pdf->Cell(15,8,$nama,0,0,'C');
        $pdf->Ln(10);
        $pdf->SetX(20);
        $pdf->Cell(10,8,'NO.',1,0,'C');
        $pdf->Cell(80,8,'Menu',1,0,'C');
        $pdf->Cell(25,8,'Harga',1,0,'C');
        $pdf->Cell(10,8,'Qty',1,0,'C');
        $pdf->Cell(45,8,'Total',1,1,'C');
        $no = 1;
        $total = 0;
        $pdf->SetFont('Arial','',10);
        foreach ($this->model_kasir->tampil_satu_pesanan($id)->result() as $r){
            $pdf->SetX(20);
            $pdf->Cell(10,8,$no.'.',1,0,'C');
            $pdf->Cell(80,8,$r->nama,1,0);
            $pdf->Cell(25,8,'Rp.'.$r->harga,1,0);
            $pdf->Cell(10,8,$r->jumlah,1,0,'C');
            $pdf->Cell(45,8,'Rp.'.$r->jumlah*$r->harga,1,1);
            $total = $total + ($r->jumlah*$r->harga);
            $no++;
        }
        //$pdf->Line(205, 44+$no*8, 5, 44+$no*8);
        $pdf->SetFont('Arial','B',20);
        $pdf->SetXY(20,51+$no*8);
        $pdf->Cell(125,8,'Total Bayar',0,0);
        $pdf->Cell(45,8,'Rp.'.$total,0,1);
        $pdf->Ln();
        $pdf->Output();
    }
    
    function cari_pesanan(){
        
    }
    
    public function bayar(){
        cek_kasir();
        $id = $this->input->post("id");
        $this->model_kasir->bayar($id);
    }
    
    public function tampil_pesanan(){
        cek_kasir();
        $hasil = $this->model_kasir->tampil_pesanan();
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
                                    <tr>';
                                        $pecah  = explode(",",$r->nama_pesanan);
                                        $pecah1 = explode(",",$r->jumlah);
                                        $pecah2 = explode(",",$r->harga);
                                        $total = 0;
                                        for ($i=0;$i<count($pecah);$i++){
                                        echo '<tr>
                                                <td>'.$pecah[$i].'</td>
                                                <td>'.$pecah1[$i].'</td>
                                                <td>Rp.'.$pecah2[$i].'</td>
                                                <td>Rp.'.$pecah2[$i]*$pecah1[$i].'</td>
                                            </tr>';
                                            $total = $total+$pecah2[$i]*$pecah1[$i];
                                         }
                                    echo '</tr>
                                      <tr>
                                          <td></td>
                                          <td></td>
                                          <td><b>Total</b></td>
                                          <td>Rp.'.$total.'</td>
                                      </tr>              
                                </tbody>
                            </table>
                        </div>
                        <br>
                          <a href="'.base_url().'kasir/pdf/'.$r->id_pesanan.'/'.$r->nama.'" style="display: inline-block; text-decoration: none; color: white;" class="bayar btn btn-primary m-t-15 waves-effect" target="_blank" data-id="'.$r->id_pesanan.'">BAYAR</a>
                    </div>
                </div>
              </div>';
            }
        }else{
            echo '<div style="padding: 20px 0 20px 0;" class="animated fadeIn">
                    <center><h1>Tidak Ada Tagihan !</h1></center>
                  </div>';
        }
    }        
    
    public function logout(){
        $this->session->sess_destroy();
        redirect('kasir');
    }
    
}
