<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Footer.css">
    
     
    
</head>

<body>
    <nav class="view-header">
        <div class="container">
        <div class="row">
            <div class="col-sm col-md">
                <a class="navbar-link logo" href=""><img src="<?php echo base_url();?>assets/gambar/logo.png"></a>
                <div class="nama">
                    <h4>
                        <b>Selamat Datang, <?php echo $this->session->userdata('nama_pelanggan');?></b> 
                    </h4>
                </div>            
            </div>
        </div>
    </div>
    </nav>
    <!navbar>
    
    <div class="collapse navbar-collapse" id="Mynav">
    <b>
      <ul class="nav navbar-nav" id="navbar">
        <li><a href="<?php echo base_url().'pelanggan/menu';?>" class="glyphicon glyphicon-home"></a></li>
        <li class="active"><a href="#">REKOMENDASI</a></li>
        <li><?php echo anchor('pelanggan/menu','Makanan');?></li>
        <li><?php echo anchor('pelanggan/menu','Minuman');?></li>
        <li><?php echo anchor('pelanggan/menu','Hidangan Lain');?></li>
        <li><?php echo anchor('pelanggan/selesai','Selesai');?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" id="nav-right">
        <li>
            <a aria-expanded="false" href="<?php echo base_url().'pelanggan/checkout';?>"> <span></span><img src="<?php echo base_url();?>assets/gambar/out.png"><span class="badge" id="jumlah_cart">0</span></a>
        </li>
      </ul>
    </b>
    </div>