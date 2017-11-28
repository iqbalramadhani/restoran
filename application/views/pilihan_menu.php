<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan Menu</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Footer.css">
</head>

<body>
    <div class="container shadow">
    <h1><center><div class="menu">Pilih Jenis Akses Anda !!!!</div></center></h1>
    <hr class="baris">
    <center>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <a href="<?php echo base_url().'manager/';?>">
                <input type="button" class="btn btn-default btn-circle btn-xl" value="Manager">
            </a>          
        </div>
        <div class="col-sm-6 col-md-4">
            <a href="<?php echo base_url().'pelayan';?>">
                <input type="button" class="btn btn-default btn-circle btn-xl" value="Pelayan">
            </a>
            <!--<button type="button" class="btn btn-default btn-circle btn-xl">Pelayan<i class=""></i></button>-->
        </div>
        <div class="col-sm-6 col-md-4">
            <a href="<?php echo base_url().'koki';?>">
                <input type="button" class="btn btn-default btn-circle btn-xl" value="Koki"></a>
            <!--<button type="button" class="btn btn-default btn-circle btn-xl">Koki</button>-->
        </div>
    </div>
    <div class="spasi"></div>
    
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <a href="<?php echo base_url().'pelanggan';?>">
                <input type="button" class="btn btn-default btn-circle btn-xl" value="Pelanggan">
            </a>            
        </div>
        <div class="col-sm-6 col-md-4">
            <a href="<?php echo base_url().'kasir';?>">
            <button type="button" class="btn btn-default btn-circle btn-xl">Kasir<i class=""></i></button>
        </div>
        <div class="col-sm-6 col-md-4">
            <a href="<?php echo base_url().'pantry';?>">
                <input type="button" class="btn btn-default btn-circle btn-xl" value="Pantry">
            </a>
        </div>
    </div>
    </center>
    <div class="spasi"></div>
    </div>
    