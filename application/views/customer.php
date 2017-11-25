<!DOCTYPE html>
<html>
<?php
    echo form_open('pelanggan');
?>
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
                        <b>Selamat Datang, <?php echo $this->session->userdata('id_pelanggan');?></b> 
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
        <li><?php echo anchor('pelanggan/home','HOME');?></li>
        <li class="active"><a href="#">REKOMENDASI</a></li>
        <li><?php echo anchor('pelanggan/menu_makanan','Makanan');?></li>
        <li><?php echo anchor('pelanggan/menu_minuman','Minuman');?></li>
        <li><?php echo anchor('pelanggan/menu_lain','Hidangan Lain');?></li>
        <li><?php echo anchor('pelanggan/checout','Checout');?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" id="nav-right">
        <li>
            <a aria-expanded="false" href="#">
                <img src="<?php echo base_url();?>/assets/gambar/out.png">
                <span class="badge">42</span>
            </a>
        </li>
      </ul>
    </b>
    </div>

    <!isi>
    <div class="container spasi-T2 shadow">
        <!isi gambar>
        <div class="row">
            <div class="col-sm-5 col-md-3">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>/assets/gambar/M1.png" alt="...">
                    <div class="caption">
                        <p><h3><span class="label label-default">Rp.25000</span> <a href="#" class="btn btn-default" role="button"><img src="<?php echo base_url();?>/assets/gambar/Y.png"></a></h3></p>
                    </div>
                </div>
            </div>
            <?php
            foreach ($record->result() as $r){
            ?>
            <div class="col-sm-4 col-md-2">
                <div class="thumbnail">
                    <img src="<?php echo base_url();?>/assets/gambar/makanan/<?php echo $r->foto;?>" alt="gambar_menu <?php echo $r->id_menu;?>">
                    <h3><?php echo $r->nama;?></h3>
                    <div class="caption">
                        <h4><span class="label label-default"><?php echo $r->harga;?></span>                             
                           <button type="submit" name="submit" class="btn btn-default"><img src="<?php echo base_url();?>/assets/gambar/Y.png"></button> 
                        </h4>                            
                    </div>
                </div>
            </div>    
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>