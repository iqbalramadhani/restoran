<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Pantry</title>
  
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-admin.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/css/admin.css" rel="stylesheet">
  <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>assets/js/sb-admin.min.js"></script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html" style="color: yellow;">Broto Resto</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Stock Barang">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-edit"></i>
            <span class="nav-link-text">Stock Barang</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tambah Stock">
            <a class="nav-link" href="<?php echo base_url().'pantry/tambah_stock'?>">
            <i class="fa fa-fw fa-pencil-square-o"></i>
            <span class="nav-link-text">Tambah Stock</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Hapus Stock">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-pencil-square-o"></i>
            <span class="nav-link-text">Hapus Stock</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        
        <li>
            <div class="nama" style="padding-top: 10px; color: white;"><h6><b>Selamat Datang, <?php echo $this->session->userdata('nama_pengguna');?></b> </h6></div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--content-->
  <div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Stock Barang</div>
        <div class="card-body">
          <?php echo form_open('pantry/edit');?>  
            <div class="modal-body">
                <div class="form-group">
                    <label class="control-label" for="text-input">ID Bahan</label>
                    <div class="form-control"  style="border: none;"><b><?php echo $record['id_bahan']; ?></b></div>
                    <input type="hidden" name="id" value="<?php echo $record['id_bahan']; ?>">
                </div>
                <div class="form-group">
                    <label class="control-label" for="text-input">Nama Bahan</label>
                    <input class="form-control" type="text" name="nama_bahan" value="<?php echo $record['nama_bahan']; ?>">
                </div>
                <div class="form-group">
                    <label class="control-label" for="text-input">Jumlah</label>
                    <input class="form-control" type="text" name="jumlah" value="<?php echo $record['jumlah']; ?>">
                </div>
            </div>
            <div class="modal-footer">
              <?php echo anchor('pantry/tampil_pantry','Batal',array('class'=>'btn btn-secondary'));?>
              <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    </div>
      
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url().'login/logout'?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    
  
</body>

</html>