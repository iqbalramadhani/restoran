<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Pantry</title>
  
  
  <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-admin.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/admin.css" rel="stylesheet">
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
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
         <button class="btn btn-primary" data-toggle="modal" data-target="#tambah">Tambah</button>
         <div  style="padding-top : 2px;"></div>
         </br>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID Bahan</th>
                  <th>Nama Bahan</th>
                  <th>Jumlah</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody id="tampil_data">
                
              </tbody>
            </table>
          </div>
        </div>
            <div class="card-footer small text-muted"><p id="update"></p></div>
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
    
    <!-- Modal -->
<div class="modal fade" id="tambah" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
        <div class="modal-body">
            <div class="form-group">
                <label class="control-label" for="text-input">Nama Bahan</label>
                <input class="form-control" type="text" name="nama_bahan" id="nama_bahan">
            </div>
            <div class="form-group">
                <label class="control-label" for="text-input">Jumlah</label>
                <input class="form-control" type="text" name="jumlah" id="jumlah">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <input type="submit" name="submit_data" id="submit_data" class="btn btn-primary" value="Simpan">
        </div>
    </div>
  </div>
</div>
    
<div class="modal fade" id="hapus_dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Bahan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
        <div class="modal-body">
            <div class="form-group">
                <label class="control-label" for="text-input">ID Bahan</label>
                <p class="form-control id" style="border: none;" id="hapus_id"></p>
            </div>
            <div class="form-group">
                <label class="control-label" for="text-input">Nama Bahan</label>
                <p class="form-control nama" style="border: none;" id="hapus_bahan"></p>
            </div>
            <div class="form-group">
                <label class="control-label" for="text-input">Jumlah</label>
                <p class="form-control jumlah" style="border: none;" id="hapus_jumlah"></p>
            </div>
        </div>
        <div class="modal-footer">
          <button class="batal btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" name="submit" id="hapus_simpan" class="btn btn-primary">Hapus</button>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit_dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Bahan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>  
        <div class="modal-body">
            <div class="form-group">
                <label class="control-label" for="text-input">ID Bahan</label>
                <p class="form-control id" style="border: none;" id="edit_id"></p>
            </div>
            <div class="form-group">
                <label class="control-label" for="text-input">Nama Bahan</label>
                <input type="text" class="form-control" id="edit_bahan">
            </div>
            <div class="form-group">
                <label class="control-label" for="text-input">Jumlah</label>
                <input type="text" class="form-control" id="edit_jumlah">
                
            </div>
        </div>
        <div class="modal-footer">
          <button class="batal1 btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" name="submit" id="simpan_edit" class="hapus2 btn btn-primary">Simpan</button>
        </div>
    </div>
  </div>
</div>
       
  
<script type="text/javascript">
    $(document).ready(function(){     
        $('#submit_data').on('click',function(){
           var nama_bahan = $('#nama_bahan').val();
           var jumlah     = $('#jumlah').val();
           $.ajax({
               url : "<?php echo base_url();?>pantry/post",
               method : "POST",
               data : {nama_bahan: nama_bahan, jumlah: jumlah},
               success :function(data){
                   $('#tampil_data').html(data);
                   $('#update').html("Updated <?php echo date('Y-m-d H:m:s')?>");
               }
           });
        });
        
        $('#tampil_data').load("<?php echo base_url();?>pantry/tampil");
        
        
        $(document).on('click','.modal_data',function(){
            var id     = $(this).data("id");
            var nama   = $(this).data("nama_bahan");
            var jumlah = $(this).data("jumlah");
            $('#hapus_id').html('<b>'+id+'</b>');
            $('#hapus_bahan').html('<b>'+nama+'</b>');
            $('#hapus_jumlah').html('<b>'+jumlah+'</b>');
            $('#edit_id').html('<b>'+id+'</b>');
            $('#edit_bahan').val(nama);
            $('#edit_jumlah').val(jumlah);
            $('#simpan_edit').attr("data-id",id);
            $('#hapus_simpan').attr("data-id",id);
            
        });
        
        $('#hapus_simpan').on('click',function(){
            var id = $(this).attr('data-id');
            $.ajax({
               url : "<?php echo base_url();?>pantry/hapus",
               method : "POST",
               data : {id_bahan: id},
               success :function(data){
                   $("#baris_"+id).fadeOut();
               }
           });
           $('.batal').trigger('click');
        });
        
        $('#simpan_edit').on('click',function(){
            var id = $(this).attr('data-id');
            var nama_bahan = $('#edit_bahan').val();
            var jumlah     = $('#edit_jumlah').val();
            $.ajax({
               url : "<?php echo base_url();?>pantry/edit",
               method : "POST",
               data : {id_bahan   : id,
                       nama_bahan : nama_bahan,
                       jumlah     : jumlah},
               success :function(data){
                   $('#tampil_data').html(data);
                   $('#tampil_data').load("<?php echo base_url();?>pantry/tampil");
               }
           });
           $('.batal1').trigger('click');
        });
    });
</script>

</body>

</html>