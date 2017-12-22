<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelayan</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Footer.css">
    <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/css/admin.css" rel="stylesheet">
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
            <a aria-expanded="false" href="<?php echo base_url().'login/logout'?>"><img src="<?php echo base_url();?>assets/gambar/logout.png" > Logout</a>
        </li>
      </ul>
    </b>
    </div>
    
    <!containt>
    <div class="container">
        <!--main-content-table__kodingan looping -->
        <!--konten_utama-->
        <div class="row thumbnail" style="padding-top: 20px;">
            <div class="col-md-12 thumbnail" style="padding-left: 10px;">
                <p>No Pesanan : ######</p>
                <p>Nama Pemesan : #########</p>
                <div class="row">
                <div class="col-lg-10 col-md-9 col-sm-9">
                <table class="table table-bordered">
                    <thead>
                        <tr style="background-color: skyblue; color: white;">
                            <th>Banyak</th>
                            <th>Pesanan</th>
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
                        
                    </tbody>
                </table>
                </div>
                
                <div class="col-md-1 col-sm-2">
                    <button type="submit" class="btn btn-info">Antar</button>
                    <p> </p>
                    <button type="submit" class="btn btn-success">Bayar</button>
                </div>
                </div>          
            </div>
        </div>
        <!--main-content-table-->
    </div>

</body>
</html>