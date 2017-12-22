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
    <b>
      <ul class="nav navbar-nav navbar-right" id="log-right" style="padding-right: 15px;" >
        <li>
            <a aria-expanded="false" href="<?php echo base_url().'login/logout'?>"><img src="<?php echo base_url();?>assets/gambar/logout.png"> Logout</a>
        </li>
      </ul>
    </b>
    </div>
    
    
    <div class="container">

        <!--konten_utama-->
        <div class="row thumbnail" style="padding-top: 20px;">
            <div class="col-md-12 thumbnail" style="padding-left: 10px;">
                <p>No Pesanan : ######</p>
                <p>Nama : #########</p>
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
                        <tr>
                            <td>1</td>
                            <td>Karedok</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Karedok</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Karedok</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Karedok</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Karedok</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Karedok</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Karedok</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                
                <div class="col-md-2 col-sm-2">
                    <button type="button" class="btn btn-success"><img src="<?php echo base_url();?>/assets/gambar/checklist.png" width="130px" height="130px"></button>
                </div>
                </div>          
            </div>
        </div>
        <!--konten_utama-->
    </div>
    
</body>
</html>