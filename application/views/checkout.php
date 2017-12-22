<!isi>
<div class="container spasi-T2 shadow">
    <h4>Pesanan Anda : <?php echo $this->session->userdata('nama_pelanggan'); ?> </h4>                       
  <table class="table table-bordered">
    <thead>
      <tr style="background-color: skyblue; color: white;">
        <th>Banyak</th>
        <th>Pesanan</th>
        <th>Harga</th>
        <th>Total</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="detail_cart">
        
    </tbody>
  </table>
  
</div>  
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        jumlah();
        // Load shopping cart
        $('#detail_cart').load("<?php echo base_url();?>pelanggan/show_cart");
        
        $(document).on('click','.hapus_cart',function(){
            var row_id=$(this).attr("id"); //mengambil row_id dari artibut id
            $.ajax({
                url : "<?php echo base_url();?>pelanggan/hapus_cart",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
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
        $(document).on('click','.pesan1', eventClick);
        
        function eventClick(){
            alert('Hallo');
        }
        
        
       
          
    });
</script>