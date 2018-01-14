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
      <tr>
          <td colspan="5" style="border: none">
              <button  id="pesan_sekarang" class="btn btn-primary">Pesan Sekarang !</button>
        </td>
      </tr>
  </table>
    
</div>  
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        jumlah();       
        cek();
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
                    if(data === 0 || data === '0'){
                      $('#jumlah_cart').text(0);
                    }else{    
                       $('#jumlah_cart').text(data); 
                    }
                }
          });
        }
        
        $('#pesan_sekarang').click(eventClick);
        //$(document).on('click','#pesan_sekarang', );
        
        function eventClick(){      
            $.ajax({
                url : "<?php echo base_url();?>pelanggan/pesan",
                method : "GET",
                success :function(data){
                    //alert("Pesanan Anda Sedang Dibuat");
                    cek();
                    //$('.pesan_sekarang').attr('class','pesan_sekarang btn btn-primary disabled');
                }
          });
        }
        
        function cek(){
           $.ajax({
                url : "<?php echo base_url();?>pelanggan/cek",
                method : "GET",  
                success :function(data){
                    //alert(data);
                    if(data==="oke"){
                        $('#pesan_sekarang').attr("disabled","disabled");
                    }
                }
          });
        }    
          
    });
</script>