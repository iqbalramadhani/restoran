<!isi>

<link rel="stylesheet" href="<?php echo base_url();?>assets/materialize/css/materialize.min.css">
    <div class="container">
        <!isi gambar>
        
      <div class="row">
          
        <?php foreach ($record->result() as $r):?>
            <div class="col s10 m5">
              <div class="card">
                <div class="card-image">
                    <a class="modal-trigger" href="#modal1"><img class="gambar" src="<?php echo base_url();?>/assets/gambar/makanan/<?php echo $r->foto?>"></a>
                  <span class="card-title">Card Title</span>
                </div>
                <div class="card-content">
                  <p>I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
              </div>
            </div>
        <?php endforeach; ?>
        <div class="col s10 m5">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo base_url();?>/assets/gambar/makanan/Lotek.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
        <div class="col s10 m5">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo base_url();?>/assets/gambar/makanan/Lotek.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
        <div class="col s10 m5">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo base_url();?>/assets/gambar/makanan/Lotek.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="row">
        <div class="col s12 m7">
          <div class="card">
            <div class="card-image">
              <img src="<?php echo base_url();?>/assets/gambar/makanan/Lotek.jpg">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
        
      </div>
  </div>

<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/materialize/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        jumlah();
        $('.modal').modal();
        
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