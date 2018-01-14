<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('fpdf/fpdf.php');
Class Pdf extends FPDF{

function __construct($orientation='L', $unit='mm', $size='A4')
  {
    parent::__construct($orientation,$unit,$size);
}

function Header(){    
    global $title ;
    $gambar = base_url().'assets/gambar/logo.png';
    $lebar = $this->w;
    $this->SetFont('Arial','B',15);
    $w = $this->GetStringWidth($title );
    $this->SetX(($lebar -$w)/2);
    $this->Cell($w,9,$title  ,0,0,'C');
    $this->SetXY(($lebar -$w)/2,15);
    $this->SetFont('Arial','B',11);
    $this->Cell($w,9,'CABANG DIPATI UKUR'  ,0,0,'C');
    $this->SetXY(($lebar -$w)/2,19);
    $this->SetFont('Arial','B',8);
    $this->Cell($w,9,'Jl. Dipatiukur No.XXX'  ,0,0,'C');
    $this->Image($gambar,9,8,15,15);
    $this->Image($gambar,186,8,15,15);
    $this->Ln(7);
    $this->line($this->GetX(), $this->GetY(), $this->GetX()+$lebar-20, $this->GetY());
    $this->Ln(11);
}                 


function Footer() {                
        $this->SetY(-15);    
        $lebar = $this->w;    
        $this->SetFont('Arial','I',8);            
        $this->line($this->GetX(), $this->GetY(), $this->GetX()+$lebar-20, $this->GetY());
        $this->SetY(-15);
        $this->SetX(0);        
        $this->Ln(1);
        $hal = 'Page : '.$this->PageNo().'/{nb}' ;
        $this->Cell($this->GetStringWidth($hal ),10,$hal );    
        $datestring = "Year: %Y Month: %m Day: %d - %h:%i %a";
        $tanggal  = 'Printed : '.date('d-m-Y  h:i-a').' ';
        $this->Cell($lebar-$this->GetStringWidth($hal )-$this->GetStringWidth($tanggal)-20);    
        $this->Cell($this->GetStringWidth($tanggal),10,$tanggal );    
        
  }                


}