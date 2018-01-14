
<div class="container" style="padding-top : 15px;">
        <!--konten_utama-->
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><span class="glyphicon glyphicon-plus"></span> Tambah</button>
        <div style="padding-top : 15px;"></div>
        <div class="panel panel-info">
            <!-- Default panel contents -->
            <!-- Table -->
            <table class="table">
                <tr class="text-center" style="">
                    <th>No.</th>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Bahan</th>
                    <th>Baha Tersedia</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
                <tbody>
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
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="<?php echo base_url();?>koki/hapus_menu/<?php echo $m->id_menu;?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php 
                    $no++;
                    endforeach; 
                ?>
                </tbody>    
            </table>
        </div>
    <!--konten_utama-->
</div>    

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
                    <td colspan="2"><input type="text" name="nama" class="form-control"></td>
                </tr>
                <tr>
                    <td><label for="recipient-name" class="control-label">Kategori</label></td>  
                    <td colspan="2">
                        <input type="radio" name="kategori" value="1"> Makanan
                        <input type="radio" name="kategori" value="2"> Minuman
                    </td>
                </tr>
                <tr>
                    <td><label for="recipient-name" class="control-label">Harga</label></td>
                    <td colspan="2"><input type="text" name="harga" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="file" name="foto" class="form-control"></td>
                </tr>
                <tr>
                    <td>
                        <button type="button" id="BahanTambah" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span>Tambah</button>
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
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
       var id = 1;
       $('#simpan').click(function(){ 
           //alert("Holla");
           //$('#exampleModal').modal("hide");
       });
       
       $('#BahanTambah').click(function(){
           //lert("Holla");
           $('#bahan').append('<div id="'+id+'" class="input-group" style="padding-top: 5px;"><input list="bahan1" name="bahan[]" class="form-control" placeholder="Nama Bahan" style="width: 240px;"><input  name="qty[]" class="form-control" placeholder="Jumlah" style="width: 100px;">&nbsp;<button data-id="'+id+'" class="hapus_bahan btn btn-danger" type="button">Hapus</button></div>');               
           id++;
       });
       
       $(document).on('click','.hapus_bahan',function(){
           var id = $(this).attr("data-id");
           //alert(id);
           $('#'+id).fadeOut(800,function(){
               $('#'+id).remove();
           });
       });
    });
</script>
<datalist id="bahan1">
    <?php foreach ($bahan as $b){ ?>
        <option value="<?php echo $b->nama_bahan;?>"></option>
    <?php } ?>
</datalist>