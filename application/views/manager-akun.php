<section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>
            <!-- Basic Validation -->
            <!-- <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Akun</h2>
                        </div>
                        <div class="body">
                            <form>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Nama Pengguna</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <p>
                                        <b>Jabatan</b>
                                    </p>
                                    <select class="form-control show-tick">
                                        <option value="Pantry">Pantry</option>
                                        <option value="Kasir">Kasir</option>
                                        <option value="Pelayan">Pelayan</option>
                                        <option value="Koki">Koki</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">I have read and accept the terms</label>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SIMPAN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- #END# Basic Validation -->  
            <!-- Striped Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Data Pegawai</h2>
                            <br>
                            <button class="btn btn-primary waves-effect" data-toggle="modal" data-target="#tambah" type="submit">Tambah</button>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Jabatan</th>
                                        <th>Ubah</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody id="tampil">
                                    <?php 
                                        $no=1;
                                        foreach ($record->result() as $r){
                                    ?>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $r->nama_lengkap;?></td>
                                        <td><?php echo $r->alamat;?></td>
                                        <td><?php echo $r->jabatan;?></td>
                                        <td><button class="ubah btn btn-primary waves-effect " data-toggle="modal" data-target="#edit"
                                            data-id = "<?php echo $r->id_pegawai;?>"
                                            data-nama = "<?php echo $r->nama_lengkap;?>"
                                            data-alamat = "<?php echo $r->alamat;?>"
                                            data-jabatan = "<?php echo $r->jabatan;?>"
                                            type="submit" >Ubah</button></td>
                                        <td><button class="ubah btn btn-danger waves-effect" data-toggle="modal" data-id = "<?php echo $r->id_pegawai;?>" data-target="#hapus" type="submit">Hapus</button></td>
                                    </tr>
                                    <?php
                                    $no++;
                                     }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Striped Rows -->
        </div>
    </section>

    <div class="modal fade" id="edit">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Ubah Akun</h4>
                        </div>
                        <div class="modal-body">
                            <form id="form_validation" method="POST">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" name="id_edit" id="id_edit">
                                        <p><b>Nama</b></p>
                                        <input type="text" class="form-control" id="nama_edit" name="nama_p" required>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <p><b>Alamat</b></p>
                                        <input type="text" class="form-control" id="alamat_edit" name="alamat" required>
                                        
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <p><b>Jabatan</b></p>
                                        <select name="jabatan_edit" id="jabatan_edit" class="form-control show-tick">
                                            <option value="Manager">Manager</option>
                                            <option value="Pantry">Pantry</option>
                                            <option value="Kasir">Kasir</option>
                                            <option value="Pelayan">Pelayan</option>
                                            <option value="Koki">Koki</option>
                                        </select>
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
                            <h4>Tambah Akun</h4>
                        </div>
                        <div class="modal-body">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="nama_tambah" name="nama_p" required>
                                        <label class="form-label">Nama Pegawai</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="alamat_tambah" name="alamat" required>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <p>
                                        <b>Jabatan</b>
                                    </p>
                                    <select name="jabatan" id="jabatan_tambah" class="form-control show-tick">
                                        <option value="Pantry">Pantry</option>
                                        <option value="Kasir">Kasir</option>
                                        <option value="Pelayan">Pelayan</option>
                                        <option value="Koki">Koki</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="username" name="username" required>
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" id="password" name="password" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="simpan_data" class="btn btn-primary waves-effect">SIMPAN</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">BATAL</button>
                        </div>
                    </div>
                </div>
            </div>

<div class="modal fade" id="hapus">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        
                        <div class="modal-body">
                            <input type="hidden" name="hapus_data" id="hapus_data">
                            <center><h1>Akan Menghapus Data Ini ?</h1></center>   
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="hapus1" class="btn btn-danger waves-effect">Hapus</button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">BATAL</button>
                        </div>
                    </div>
                </div>
            </div>

    <!-- Jquery Core Js -->
   <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
   <script type="text/javascript">
       //simpan
     $(document).ready(function(){
        $('#simpan_data').click(function(){
           var nama_p   = $('#nama_tambah').val();
           var alamat   = $('#alamat_tambah').val();
           var jabatan  = $('#jabatan_tambah').val();
           var username = $('#username').val();
           var password = $('#password').val();
           //alert(jabatan);
           $.ajax({
               method : "POST",
               url : "<?php echo base_url();?>manager/post",
               //dataType : "JSON",
               data : {nama: nama_p, alamat: alamat, jabatan: jabatan, username: username, password: password},
               success :function(data){
                   //$('#tampil_data').append(data);
                   //$('#tampil_data').html(data);
                   alert(data);
                   $('#tambah').modal("hide");
                   $('#tampil').html(data);
                   // reload_table();
               }
           });
        });

        //ubah
        $(document).on('click','.ubah',function(){
            var id       = $(this).attr("data-id");
            var nama     = $(this).data("nama");
            var alamat   = $(this).data("alamat");
            var jabatan  = $(this).data("jabatan");
            $('#nama_edit').val(nama);
            $('#alamat_edit').val(alamat);
            $('#jabatan_edit').val(jabatan).change();
            $('#id_edit').val(id);
            $('#hapus_data').val(id);
        });
        
        $('#simpan_edit').click(function(){
           var id       = $('#id_edit').val();
           var nama_p   = $('#nama_edit').val();
           var alamat   = $('#alamat_edit').val();
           var jabatan  = $('#jabatan_edit').val();
           //alert(jabatan);
           $.ajax({
               method : "POST",
               url : "<?php echo base_url();?>manager/ubah_akun",
               //dataType : "JSON",
               data : {id:id,nama: nama_p, alamat: alamat, jabatan: jabatan},
               success :function(data){
                   //$('#tampil_data').append(data);
                   //$('#tampil_data').html(data);
                   //alert(data);
                   $('#edit').modal("hide");
                   $('#tampil').html(data);
                   // reload_table();
               }
           });  
        });
        
        $('#hapus1').click(function(){
           var id  = $('#hapus_data').val();
           //alert(id);
           $.ajax({
               method : "POST",
               url : "<?php echo base_url();?>manager/hapus_akun",
               //dataType : "JSON",
               data : {id:id},
               success :function(data){
                   //$('#tampil_data').append(data);
                   //$('#tampil_data').html(data);
                   //alert(data);
                   $('#hapus').modal("hide");
                   $('#tampil').html(data);
                   // reload_table();
               }
           });   
        });
    });
   </script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script>
</body>

</html>