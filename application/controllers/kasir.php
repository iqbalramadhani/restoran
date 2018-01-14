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
        $data['record'] = $this->model_kasir->tampil_pesanan()->result();
        //die(print_r($data));
        $this->load->view('kasir',$data);
    }
    
    public function cek_kasir(){
        $id = $this->session->userdata('id_pengguna');
        $data = $this->model_login->get_one($id)->row_array();
        if($data['jabatan'] == 'Kasir'){
            $this->session->set_userdata(array('nama_pengguna'=>$data['nama_lengkap']));
            redirect('kasir/tampil_kasir');
        }else{
            $this->session->set_flashdata('info','ANDA BUKAN KASIR !');
            redirect('kasir');
        }
    }
    
    function pdf(){
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
        $id = $this->input->post("id");
        $this->model_kasir->bayar($id);
    }
    
}
