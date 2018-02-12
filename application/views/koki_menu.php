<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Broto Resto | Koki</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url();?>assets/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url();?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url();?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url();?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url();?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url();?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-indigo">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class=" collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand">Broto Resto</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url();?>assets/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('nama_pengguna');?></div>
                </div>
            </div>
            <!-- #User Info -->
             <!-- Menu -->
            <div class="menu">
                <ul class="list">
                  <li>
                        <a href="<?php echo base_url().'koki/tampil_koki';?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url().'koki/menu';?>">
                            <i class="material-icons">view_list</i>
                            <span>Daftar Menu</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="<?php echo base_url().'koki';?>">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>


    <section class="content">
        <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Daftar Menu</h2>
                            <br>
                            <button class="btn btn-primary bg-indigo waves-effect" data-toggle="modal" data-target="#exampleModal">Tambah</button>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <th>No.</th>
                                        <th>Menu</th>
                                        <th>Harga</th>
                                        <th>Bahan</th>
                                        <th>Baha Tersedia</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </thead>
                                                        
                                    <tbody id="pesanan">
                                    <?php
                                        $no = 1;
                                        foreach ($menu as $m):
                                    ?>
                                        <tr>
                                            <td><?php echo $no;?></td>
                                            <td><?php echo $m->nama;?></td>
                                            <td><?php echo $m->harga;?></td>
                                            <td>
                                                <ul>
                                                <?php 
                                                    $pecah  = explode(",",$m->jumlah);
                                                    $pecah1 = explode(",",$m->bahan);
                                                    for($i=0;$i<count($pecah);$i++){
                                                ?>
                                                    <li><?php echo $pecah[$i].' '.$pecah1[$i];?></li>   
                                                <?php
                                                    }
                                                ?>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                <?php 
                                                    $pecah2 = explode(",",$m->jumlah_bahan);
                                                    for($i=0;$i<count($pecah2);$i++){
                                                        if($pecah2[$i]>=$pecah[$i]){
                                                            echo '<li><font color="green" style="bold">'.$pecah2[$i].' '.$pecah1[$i].'</font></li>';
                                                        }else{
                                                            echo '<li><font color="red" style="bold">'.$pecah2[$i].' '.$pecah1[$i].'</font></li>';
                                                        } 
                                                    }
                                                ?>
                                                </ul>
                                            </td>
                                            <td><img src="<?php echo base_url();?>assets/gambar/makanan/<?php echo $m->foto;?>" width="180" height="120" alt="Lotek"></td>
                                            <td>
                                                <button class="btn btn-block bg-indigo waves-effect" data-toggle="modal" data-target="#ubah">Ubah</button>
                                                <button class="hapus btn btn-block bg-red waves-effect" data-id="<?php echo $m->id_menu;?>" data-toggle="modal" data-target="#hapus">Hapus</button>
<!--                                                <a href="<?php echo base_url();?>koki/hapus_menu/<?php echo $m->id_menu;?>" class="btn btn-block bg-red waves-effect">Hapus</a>-->
                                            </td>
                                        </tr>
                                    <?php 
                                        $no++;
                                        endforeach; 
                                    ?>    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
<!--Tambah-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Tambah Menu</h4>
      </div>
      <?php echo form_open_multipart('koki/simpan_menu');?>
       <div class="modal-body"> 
            <table class="table">
                <tr>
                    <td><label for="recipient-name" class="control-label">Nama Menu</label></td>  
                    <td colspan="2"><input type="text" name="nama" class="form-control" required=""></td>
                </tr>
                <tr>
                    <td><label for="recipient-name" class="control-label">Kategori</label></td>  
                    <td colspan="2">
                        <input type="radio" id="test1" name="kategori" value="1" checked="" />
                        <label for="test1">Makanan</label>
                        <input type="radio" id="test2" name="kategori" value="0" />
                        <label for="test2">Minuman</label>
                        <!-- <input type="radio" name="kategori" value="1"> Makanan
                        <input type="radio" name="kategori" value="2"> Minuman -->
                    </td>
                </tr>
                <tr>
                    <td><label for="recipient-name" class="control-label">Harga</label></td>
                    <td colspan="2"><input type="text" name="harga" class="form-control" required=""></td>
                </tr>
                <tr>
                    <td><label for="recipient-name" class="control-label">Foto</label></td>
                    <td colspan="2"><input type="file" name="foto" class="form-control" required=""></td>
                </tr>
                <tr>
                    <td>
                        <button type="button" id="BahanTambah" class="btn btn-primary">Tambah</button>
                    </td>
                    <td id="bahan">
                    </td>
                </tr>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="simpan">SIMPAN</button>
      </div>
      </form>  
    </div>
  </div>
</div>
<!--END Tambah-->

<!--Ubah-->
<div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Ubah Menu</h4>
      </div>
      <?php echo form_open_multipart('');?>
       <div class="modal-body"> 
            <table class="table">
                <tr>
                    <td><label for="recipient-name" class="control-label">Nama Menu</label></td>  
                    <td colspan="2"><input type="text" name="nama" class="form-control" required=""></td>
                </tr>
                <tr>
                    <td><label for="recipient-name" class="control-label">Kategori</label></td>  
                    <td colspan="2">
                        <input type="radio" id="test3" name="kategori" value="1" checked="" />
                        <label for="test3">Makanan</label>
                        <input type="radio" id="test4" name="kategori" value="0" />
                        <label for="test4">Minuman</label>
                        <!-- <input type="radio" name="kategori" value="1"> Makanan
                        <input type="radio" name="kategori" value="2"> Minuman -->
                    </td>
                </tr>
                <tr>
                    <td><label for="recipient-name" class="control-label">Harga</label></td>
                    <td colspan="2"><input type="text" name="harga" class="form-control" required=""></td>
                </tr>
                <tr>
                    <td><label for="recipient-name" class="control-label">Foto</label></td>
                    <td colspan="2"><input type="file" name="foto" class="form-control" required=""></td>
                </tr>
                <tr>
                    <td>
                        <button type="button" id="BahanTambah" class="btn btn-primary">Tambah</button>
                    </td>
                    <td id="bahan">
                    </td>
                </tr>
            </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="simpan">SIMPAN</button>
      </div>
      </form>  
    </div>
  </div>
</div>
<!--END Ubah-->

<!--Hapus-->
<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Hapus Menu</h4>
      </div>
      <?php echo form_open_multipart('koki/hapus_menu');?>
       <div class="modal-body"> 
           <input type="hidden" name="id_hapus" id="id_hapus">
           <h1>Akan Menghapus Menu ini ?</h1>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Hapus</button>
      </div>
      </form>  
    </div>
  </div>
</div>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
       var id = 1;
       $('#simpan').click(function(){ 
           //alert("Holla");
           //$('#exampleModal').modal("hide");
       });
       
       $('#BahanTambah').click(function(){
           //lert("Holla");
           $('#bahan').append('<div id="'+id+'" class="input-group" style="padding-top: 5px;"><input list="bahan1" name="bahan[]" class="form-control" placeholder="Nama Bahan" style="width: 240px;"><input  name="qty[]" class="form-control" placeholder="Jumlah" style="width: 100px;" required="">&nbsp;<button data-id="'+id+'" class="hapus_bahan btn btn-danger" type="button">Hapus</button></div>');               
           id++;
       });
       
       $(document).on('click','.hapus_bahan',function(){
           var id = $(this).attr("data-id");
           //alert(id);
           $('#'+id).fadeOut(800,function(){
               $('#'+id).remove();
           });
       });
       
       $(document).on('click','.hapus',function(){
           var id = $(this).attr("data-id");
           //alert(id);
           $('#id_hapus').val(id);
       });
       
    });
    
    setInterval(function(){
            tampil();
        },5000);
    
    function tampil(){
        $.ajax({
            url : "<?php echo base_url();?>koki/tampil_menu",
            method : "GET",
            success :function(data){
                $('#pesanan').html(data);
            }
        });
    }
</script>
<datalist id="bahan1">
    <?php foreach ($bahan as $b){ ?>
        <option value="<?php echo $b->nama_bahan;?>"></option>
    <?php } ?>
</datalist>
</body>

</html>