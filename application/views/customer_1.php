<!isi>
    <div class="container spasi-T2 shadow">
        <!isi gambar>
        <div class="row">
            <?php foreach ($record->result() as $r){ ?>
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="<?php echo base_url();?>/assets/gambar/makanan/<?php echo $r->foto;?> " alt="gambar_menu <?php echo $r->id_menu;?>" width="350px" height="350px">
                        <h3><?php echo $r->nama;?></h3>
                        <div class="caption">
                            <p><center><h3><span class="label label-default">Rp.<?php echo $r->harga;?></span></h3></center></p>
                            <p>
                            <table>
                              <center>
                                <th>Qty</th>
                                <th class="col-xs-7">
                                    <input type="number" name="quantity" id="<?php echo $r->id_menu;?>" class="quantity form-control">
                                </th>
                                <th>
                                    <button class="add_cart btn btn-default"
                                            data-id_menu="<?php echo $r->id_menu;?>" 
                                            data-nama_menu="<?php echo $r->nama;?>" 
                                            data-harga="<?php echo $r->harga;?>">
                                        <img src="<?php echo base_url();?>/assets/gambar/Y.png">
                                    </button>
                                </th>
                                    
                              </center>
                            </table></p>
                            <!--
                               <button type="submit" name="submit" class="btn btn-default"><img src="<?php echo base_url();?>/assets/gambar/Y.png"></button> -->
                            </h4>                            
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        jumlah();
        
       $('.add_cart').click(function(){
          var id_menu   = $(this).data("id_menu");
          var nama_menu = $(this).data("nama_menu");
          var harga     = $(this).data("harga");
          var qty       = $('#'+id_menu).val();
          $.ajax({
                url : "<?php echo base_url();?>pelanggan/add_to_cart",
                method : "POST",
                data : {produk_id: id_menu, produk_nama: nama_menu, produk_harga: harga, quantity: qty},
                success :function(data){
                    $('#detail_cart').html(data);
                    $('#jumlah_cart').html($('#jumlah').val());
                    jumlah();
                }
          });
       });
       
       function jumlah(){
          $.ajax({
                url : "<?php echo base_url();?>pelanggan/jumlah",
                method : "GET",  
                success :function(data){
                    if(data == 0 || data == '0'){
                      $('#jumlah_cart').text(0);
                    }else{    
                       $('#jumlah_cart').text(data); 
                    }
                }
          });
       }
       
    });
</script>