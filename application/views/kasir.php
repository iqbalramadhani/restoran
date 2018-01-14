<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Footer.css">
</head>

<body>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#pencarian').change(function(){
            $.ajax({
                url : "<?php echo base_url();?>kasir/pesanan_cari",
                method : "POST",
                data : {id : id},
                success :function(data){
                }
            });
        });
        
        $('.bayar').click(function(){
            var id = $(this).attr("data-id");
            $.ajax({
                url : "<?php echo base_url();?>kasir/bayar",
                method : "POST",
                data : {id : id},
                success :function(data){
                    $('#pesanan'+id).fadeOut(2000);
                }
            });
        });
    });
</script>

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

  <nav class="navbar-default" role="" >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="background-color: orange;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
  </nav>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color: orange;">
        <b>
          <ul class="nav navbar-nav" id="navbar">
           <div style="margin: auto;">
            <div class="col-sm-7 col-md-7" style="padding-top: 7px;">
              <div class="input-group-btn">
                  <input type="text" class="form-control" id="pencarian" placeholder="Pencarian" >
              </div>
                <p id="hasil"></p>
             </div>
           </div>
           <li style="float: right; padding-right: 25px;">
               <a aria-expanded="false" href="<?php echo base_url();?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
           </li>
         </ul>
        </b>
    </div>
    
    <!containt>
    <div class="container" style="padding-top: 20px;">
        <div id="tampil" class="row thumbnail" style="padding-top: 20px;">
            <?php foreach ($record as $r){?>
              <div id="pesanan<?php echo $r->id_pesanan;?>" class="col-md-12 thumbnail">
                <p>No Pesanan : <?php echo $r->id_pesanan;?></p>
                <p>Nama       : <?php echo $r->nama;?></p>
                  <table class="table table-bordered">
                    <thead>
                      <tr style="background-color: skyblue; color: white;">
                        <th>Banyak</th>
                        <th>Pesanan</th>
                        <th>Harga</th>
                        <th>Total</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                            $pecah  = explode(",",$r->nama_pesanan);
                            $pecah1 = explode(",",$r->jumlah);
                            $pecah2 = explode(",",$r->harga);
                            $total = 0;
                            for ($i=0;$i<count($pecah);$i++){
                      ?>
                                <tr>
                                    <td ><?php echo $pecah1[$i];?></td>
                                    <td><?php echo $pecah[$i];?></td>
                                    <td><?php echo 'Rp.'.$pecah2[$i];?></td>
                                    <td><?php echo 'Rp.'.$pecah2[$i]*$pecah1[$i];?></td>
                                    <td></td>
                                </tr>
                      <?php
                          $total = $total+$pecah2[$i]*$pecah1[$i];
                          }
                      ?>
                      <tr>
                        <th colspan="3">Total</th>
                        <th>Rp.<?php echo $total;?></th>
                        <td><a href="<?php echo base_url().'kasir/pdf/'.$r->id_pesanan.'/'.$r->nama;?>" class="bayar btn btn-default" target="_blank"  data-id="<?php echo $r->id_pesanan;?>">Bayar</a>
                            </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <?php } ?>
        </div>
    </div>