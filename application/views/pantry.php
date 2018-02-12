<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pantry</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    
    
    
    <!--JQuery DataTable Css--> 
    <link href="<?php echo base_url();?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    
    
    <!--Bootstrap Core Css-->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

     <!--Waves Effect Css -->
    <link href="<?php echo base_url();?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

     <!--Animation Css--> 
    <link href="<?php echo base_url();?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

     <!--Morris Chart Css-->
    <link href="<?php echo base_url();?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!--Sweetalert Css -->
    <link href="<?php echo base_url();?>assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    
     <!--Custom Css -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

     <!--AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
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
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars" style="inn"></a>
                <a class="navbar-brand">
                    <img src="<?php echo base_url();?>assets/gambar/logo.png" width="25" height="25">
                </a>
                <a class="navbar-brand">Broto Resto</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                </ul>
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
                    <li class="active">
                        <a href="<?php echo base_url().'pantry/tampil_pantry';?>">
                            <i class="material-icons">view_list</i>
                            <span>Daftar Stock</span>
                        </a>
                    </li>
                    <li class="header">LABELS</li>
                    <li>
                        <a href="<?php echo base_url().'pantry/logout';?>">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <!-- #Footer -->
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
                            <h2>
                                Daftar Stok Bahan
                            </h2>
                            <div style="padding-top: 20px;">
                                <button data-toggle="modal" data-target="#tambah" type="button" class="btn btn-primary waves-effect">TAMBAH</button>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="mydata">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Bahan</th>
                                            <th>Jumlah</th>
                                            <th>Ubah</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody id="show_data">

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
 
        <!-- Default Size -->
            <div class="modal fade" id="defaultModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        
                        <div class="modal-body">
                            <h1 class="modal-title">Apakah Anda Yakin Akan Menghapus Bahan Ini ?</h1>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="hapus" class="btn btn-danger waves-effect">HAPUS</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">BATAL</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="modal fade" id="edit">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Edit Bahan</h4>
                        </div>
                        <div class="modal-body">
                            <form id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <small>Nama Bahan</small>
                                        <input id="edit_bahan" type="text" class="form-control validate"  placeholder="" name="nama_brg" required="">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <small>Jumlah</small>
                                        <input id="edit_jumlah" type="text" class="form-control validate" name="jml_brg" required="">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="simpan_edit" class="btn btn-primary waves-effect">SIMPAN</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">BATAL</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="modal fade" id="tambah">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Tambah Bahan</h4>
                        </div>
                        <div class="modal-body">
                            <form id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input id="nama_bahan" type="text" class="form-control form-float validate" name="nama_brg" required>
                                        <label class="form-label">Nama Bahan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input id="jumlah" type="text" class="form-control validate" name="jml_brg" required>
                                        <label class="form-label">Jumlah Bahan</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="simpan_data" class="btn btn-primary waves-effect">SIMPAN</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">BATAL</button>
                        </div>
                    </div>
                </div>
            </div>
 
    <!--Jquery Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>

     <!--Bootstrap Core Js-->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>

     <!--Select Plugin Js--> 
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

     <!--Slimscroll Plugin Js-->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

     <!--Waves Effect Plugin Js-->
    <script src="<?php echo base_url();?>assets/plugins/node-waves/waves.js"></script>
    
    <!--Jquery DataTable Plugin Js--> 
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    
    <!--Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/tables/jquery-datatable.js"></script>

     <!--SweetAlert Plugin Js--> 
    <script src="<?php echo base_url();?>assets/plugins/sweetalert/sweetalert.min.js"></script>

     <!--Custom Js -->
    <script src="<?php echo base_url();?>assets/js/pages/ui/dialogs.js"></script>
    <script src="<?php echo base_url();?>assets/plugins/jquery-validation/jquery.validate.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/forms/form-validation.js"></script>
     <!--Demo Js -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script>
    <script type="text/javascript">
    var save_method; //for save method string
    var table;
    
        
    $(document).ready(function(){
        
        setInterval(function(){
            reload_table();
        },5000);
        
        table = $('#mydata').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('pantry/tampil')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });
//        tampil_data_barang();   //pemanggilan fungsi tampil barang.
//        $('#mydata').dataTable();
//        //fungsi tampil barang
//        function tampil_data_barang(){
//            $.ajax({
//                type  : 'ajax',
//                url   : "<?php echo base_url()?>pantry/tampil",
//                async : false,
//                dataType : 'json',
//                success : function(data){
//                    //alert(id);
//                    //alert(data);
//                    var html = '';
//                    var i;
//                    for(i=0;i<data.length;i++){
//                        html += '<tr id="baris_"'+i+'>'+
//                                '<td>'+(i+1)+'</td>'+
//                                '<td>'+data[i].nama_bahan+'</td>'+
//                                '<td>'+data[i].jumlah+'</td>'+
//                                '<td><button class="modal_data btn btn-block btn-sm bg-indigo waves-effect" data-toggle="modal" data-target="#edit" data-id='+data[i].id_bahan+' data-nama_bahan='+data[i].nama_bahan+' data-jumlah='+data[i].jumlah+'><i class="material-icons col-red">create</i></button></td>'+
//                                '<td></td>'+
//                                '</tr>';
//                    }
//                    $('#show_data').html(html);
//                }
//            });
//        }
//      
        //data bahan
        $(document).on('click','.modal_data',function(){
            var id     = $(this).data("id");
            var nama   = $(this).data("nama_bahan");
            var jumlah = $(this).data("jumlah");
            $('#hapus').attr("data-id",id);
//            $('#hapus_id').html('<b>'+id+'</b>');
//            $('#hapus_bahan').html('<b>'+nama+'</b>');
//            $('#hapus_jumlah').html('<b>'+jumlah+'</b>');
            $('#edit_id').html('<b>'+id+'</b>');
            $('#edit_bahan').val(nama);
            $('#edit_jumlah').val(jumlah);
            $('#simpan_edit').attr("data-id",id);
//            $('#hapus_simpan').attr("data-id",id); 
        });
        
        //hapus
        $('#hapus').click(function(){
            var id = $(this).attr('data-id');
            //alert(id);
            $.ajax({
               type : "POST",
               url : "<?php echo base_url();?>pantry/hapus",
               data : {id_bahan: id},
               dataType : "JSON",
               success :function(data){
                    $('#defaultModal').modal("hide");
                    reload_table();
               }
           });
        });
        
        
        //simpan
        $('#simpan_data').click(function(){
           var nama_bahan = $('#nama_bahan').val();
           var jumlah     = $('#jumlah').val();
           $.ajax({
               type : "POST",
               url : "<?php echo base_url();?>pantry/post",
               dataType : "JSON",
               data : {nama_bahan: nama_bahan, jumlah: jumlah},
               success :function(data){
                   //$('#tampil_data').append(data);
                   //$('#tampil_data').html(data);
                   $('#tambah').modal("hide");
                   reload_table();
               }
           });
        });
        
        
        //ubah
        $('#simpan_edit').on('click',function(){
            var id = $(this).attr('data-id');
            var nama_bahan = $('#edit_bahan').val();
            var jumlah     = $('#edit_jumlah').val();
            $.ajax({
               url : "<?php echo base_url();?>pantry/edit",
               dataType : "JSON",
               type : "POST",
               data : {id_bahan   : id,
                       nama_bahan : nama_bahan,
                       jumlah     : jumlah},
               success :function(data){
                   //$('#tampil_data').html(data);
                   $('#edit').modal("hide");
                   //tampil_data_barang();
                   reload_table();
               }
           });
        });
    });
    
    function reload_table()
    {
        table.ajax.reload(null,false); //reload datatable ajax 
    }
    
 
</script>

</body>
</html>