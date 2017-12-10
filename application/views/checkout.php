    <!isi>
<div class="container spasi-T2 shadow">
    <h4>Pesanan Anda : </h4>                       
  <table class="table table-bordered">
    <thead>
      <tr style="background-color: skyblue; color: white;">
        <th>Banyak</th>
        <th>Pesanan</th>
        <th>Harga</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    foreach ($baris as $b):
    ?>
      <tr>
        <td><?php echo $b['name'];?></td>
        <td><?php echo $b['price'];?></td>
        <td>Rp.20000<button type="submit" style="float: right;">Batal</button></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
  <!sub total>
  <div class="row">
    <div class="col-md-6 col-sm-6" style="float: right;">
        <table class="table table-bordered">
        <tbody>
        <tr>
            <td  style="text-align: right;">TAX</td>
            <td  style="text-align: right;">Rp.20000</td>
        </tr>
        <tr>
            <td  style="text-align: right;">Sub Total</td>
            <td  style="text-align: right;">Rp.20000</td>
        </tr>
        </tbody>
        </table>
    </div>
  </div>
  <div class="pesan-btn"><a href="">PESAN</a></div>
  
  <div class="col-md-4">
            <h4>Shopping Cart</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="detail_cart">
 
                </tbody>
                 
            </table>
        </div>
  
</div>   
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
       // Load shopping cart
        $('#detail_cart').load("<?php echo base_url();?>pelanggan/load_cart");
        
        $(document).on('click','.hapus_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url : "<?php echo base_url();?>pelanggan/hapus_cart",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
    });
</script>