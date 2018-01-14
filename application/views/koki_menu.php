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
    
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.selesai').on('click',function(){
            var id = $(this).attr("data-id");
            $.ajax({
                url : "<?php echo base_url();?>koki/pesanan_selesai",
                method : "POST",
                data : {id : id},
                success :function(data){
                    $("#data_"+id).fadeOut();
                }
            });
            //alert(id); 
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
    <div class="collapse navbar-collapse" id="Mynav">
    <b>
      <ul class="nav navbar-nav navbar-right" id="log-right" style="padding-right: 15px;" >
        <li>
            <a caria-expanded="false" href="<?php echo base_url().'login/logout'?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
        </li>
      </ul>
    </b>
    </div>
    
    
    <div class="container">

        <!--konten_utama-->
        <div id="pesanan" class="row thumbnail" style="padding-top: 20px;">
          <?php foreach ($record as $r):?>
            <div id="data_<?php echo $r->id_pelanggan;?>" class="col-md-12 thumbnail" style="padding-left: 10px;">
                <p>No Pesanan : <?php echo $r->id_pelanggan;?></p>
                <p>Nama : <?php echo $r->nama;?></p>
                <div class="row">
                  <div class="col-lg-10 col-md-9 col-sm-9">
                    <table class="table table-bordered">
                     <thead>
                        <tr style="background-color: skyblue; color: white;">
                            <th>Banyak</th>
                            <th>Nama Makanan/Minuman</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                            //$pecah = explode(",",$r->jumlah);
                            $pecah = explode(",",$r->nama_pesanan);
                            $pecah2 = explode(",",$r->jumlah);
                            for ($i=0;$i<count($pecah);$i++){
                        ?>
                                <tr>
                                    <td><?php echo $pecah2[$i];?></td>
                                    <td><?php echo $pecah[$i];?></td>
                                </tr>
                        <?php
                            }
                        ?>
                     </tbody>
                    </table>
                  </div>
                  <div class="col-md-2 col-sm-2">
                      <button type="button" data-id="<?php echo $r->id_pelanggan;?>" class="selesai btn btn-success"><img src="<?php echo base_url();?>/assets/gambar/Y.png" width="130px" height="130px" alt="Selesai"></button>
                  </div>
                </div>          
            </div>
          <?php endforeach; ?>
        </div>
        <!--konten_utama-->
    </div>
    
</body>
</html>