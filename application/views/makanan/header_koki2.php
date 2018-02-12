<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koki</title>
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
                <a class="navbar-link logo" href=""><img src="<?php echo base_url();?>/assets/gambar/logo.png"></a>
                <div class="nama"><h4><b>Selamat Datang, <?php echo $this->session->userdata('nama_pengguna');?></b> </h4></div>            
            </div>
        </div>
        </div>
    </nav>
    <div class="collapse navbar-collapse" id="Mynav">
      <ul class="nav navbar-nav" id="navbar">
        <li><?php echo anchor('koki/tampil_koki','Pesanan');?></li>
        <li><?php echo anchor('koki/menu','Menu ');?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style="padding-right: 15px;" >
        <li><a href="<?php echo base_url().'login/logout'?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>