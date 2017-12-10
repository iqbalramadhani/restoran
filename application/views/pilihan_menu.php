<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan Menu</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Footer.css">
</head>

<body>
    <div class="container shadow">
    <h1><div class="text-center menu">Pilih Jenis Akses Anda !!!!</div></h1>
    <hr class="baris">
    <center>
    <div class="row">
        <div class="col-sm-4 col-md-4">
            <a href="<?php echo base_url().'manager';?>">
                <button class="btn btn-default btn-circle btn-xl">Manager</button>
            </a>          
        </div>
        <div class="col-sm-4 col-md-4">
            <a href="<?php echo base_url().'pelayan';?>">
                <button class="btn btn-default btn-circle btn-xl">Pelayan</button>
            </a>
            <!--<button type="button" class="btn btn-default btn-circle btn-xl">Pelayan<i class=""></i></button>-->
        </div>
        <div class="col-sm-4 col-md-4">
            <a href="<?php echo base_url().'koki';?>">
                <button class="btn btn-default btn-circle btn-xl">Koki</button>
            </a>
        </div>
    </div>
    <div class="spasi"></div>
    
    <div class="row">
        <div class="col-sm-4 col-md-4">
            <a href="<?php echo base_url().'pelanggan';?>">
                <button class="btn btn-default btn-circle btn-xl">Pelanggan</button>
            </a>            
        </div>
        <div class="col-sm-4 col-md-4">
            <a href="<?php echo base_url().'kasir';?>">
                <button class="btn btn-default btn-circle btn-xl">Kasir</button>
            </a>
        </div>
        <div class="col-sm-4 col-md-4">
            <a href="<?php echo base_url().'pantry';?>">
                <button class="btn btn-default btn-circle btn-xl">Pantry</button>
            </a>
        </div>
    </div>
    </center>
    <div class="spasi"></div>
    </div>
    