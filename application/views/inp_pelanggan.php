<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggan</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Footer.css">
</head>
<?php
    echo form_open('pelanggan/identitas');
?>
<body>
    <nav class="view-header">
        <div class="container">
        <div class="row">
            <div class="col-sm col-md">
                <a class="navbar-link logo" href=""><img src="<?php echo base_url();?>/assets/gambar/logo.png"></a>
                <h2 class="text-center selamat">SELAMAT DATANG DI</h2>
                <h2 class="text-center selamat">RESTORAN PAK BROTO</h2>            
            </div>
        </div>
    </div>
    </nav>

    <div class="container">
        <div class="spasi-T2"></div>
        <h3 class="text-center">Silahkan Isi Nama untuk membeli Pesanan</h3>
        <div class="form-group round"> 
                <div class="row">
                    <div class="col-sm-6 col-md-4 kanan">
                        <h4>Hello,</h4>
                    </div>
                    <div class="col-sm-10 col-md-5">
                        <input type="text" name="nama_anda" class="form-control round" placeholder="Nama Anda" required="">
                    </div>
                </div>
         </div>
         <center>
         <div class="row">
            <div class="col-sm col-md">
                <button type="submit" name="submit" class="btn btn-default round">Mulai Pemesanan<i class=""></i></button>           
            </div>
         </div>
         </center>
    </div>
    <div class="spasi-T2"></div>
</form>
</body>
</html>