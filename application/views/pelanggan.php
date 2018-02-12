
      <div class="resto-content mdl-layout__content">        
        <div class="resto-customized-section">
          <div class="resto-customized-section-text">
          </div>
          <div class="resto-customized-section-image"></div>
        </div>
        <div class="resto-more-section" style="background-color: white">
          <div class="resto-section-title mdl-typography--display-1-color-contrast mdl-grid">
            <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                More From Broto Resto
            </div>
          </div>

            <div class="resto-card-container mdl-grid" id="menu">
            <?php foreach ($record->result() as $r){ ?>
              <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                <div class="mdl-card__media">
                  <a class="posisi">
                    <img class="gambar1"
                         id="M<?php echo $r->id_menu;?>"  
                         data-id="<?php echo $r->id_menu;?>"
                         data-nama="<?php echo $r->nama;?>"
                         data-foto="<?php echo $r->foto;?>" 
                         src="<?php echo base_url();?>/assets/gambar/makanan/<?php echo $r->foto;?>">
                    <div class="centered"><?php echo $r->nama;?></div>
                  </a>
                </div>
                <p><center><h7><b>Rp.<?php echo $r->harga;?></b></h7></center></p>
              </div>
           <?php } ?>
          </div>
        </div>

  <dialog class="mdl-dialog animated bounceInDown">
    <h6 class="mdl-dialog__title" id="nama_menu"></h6>
    <div class="mdl-dialog__content">
      <p>
        <img id="gambar" width="310px">
      </p>
      <p>
            <div class="handle-counter" id="count" style="padding-left: 22%; position: absolute;">
              <button class="counter-minus btn btn-primary dis">-</button>
                                                        <!--pengulangan buat id menu-->
              <input type="text" class="quantity" id="jml" name="quantity" value="1" readonly="">
              <button class="counter-plus btn btn-primary">+</button>
            </div>  
      </p>
    </div>
    <input type="hidden" name="" id="nama_m"><input type="hidden" name="" id="harga_m"><input type="hidden" name="" id="id_m">
    <div class="mdl-dialog__actions">
      <button type="button" class="add_cart mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored close" 
      data-nama_menu="<?php echo $r->nama;?>" 
      data-harga="<?php echo $r->harga;?>" 
      id="reset">Ok</button>
      <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect close1">Batal</button>
    </div>
  </dialog>
  <script src="<?php echo base_url();?>assets/mdl/jquery-1.12.4.min.js"></script>
  <script src="<?php echo base_url();?>assets/mdl/app/js/handleCounter.js"></script>
  <script>
    $(document).ready(function(){
        
        setInterval(function(){
            //tampil();
        },5000);
        
      <?php foreach ($record->result() as $r){ ?>
      var dialog = document.querySelector('dialog');
      var showDialogButton = document.querySelector('#M<?php echo $r->id_menu;?>');
      
      if (! dialog.showModal) {
        dialogPolyfill.registerDialog(dialog);
      }
      showDialogButton.addEventListener('click', function() {
          dialog.showModal();
          $('#count').attr("id","K<?php echo $r->id_menu;?>");
          $('#nama_menu').html("<?php echo $r->nama;?>");
          $('#id_m').val("<?php echo $r->id_menu;?>");
          $('#nama_m').val("<?php echo $r->nama;?>");
          $('#harga_m').val("<?php echo $r->harga;?>");
          $('#gambar').attr("src","<?php echo base_url();?>assets/gambar/makanan/<?php echo $r->foto;?>");
          $('.add_cart').attr("data-id_menu_d","<?php echo $r->id_menu;?>");
      });
      dialog.querySelector('.close').addEventListener('click', function() {
        dialog.close();
      });
      dialog.querySelector('.close1').addEventListener('click', function() {
        dialog.close();
      });
      <?php } ?>
      $(function ($) {
            var options = {
                minimum: 1,
                maximize: 10,
                onChange: valChanged,
                onMinimum: function(e) {
                    console.log('reached minimum: '+e)
                },
                onMaximize: function(e) {
                    console.log('reached maximize'+e)
                }
            }
      $('#count').handleCounter({maximize: 50})
        })
        function valChanged(d) {
//            console.log(d)
        }

        $('#reset').click(function(){
          
          $('.dis').attr("disabled","disabled");
        });

        jumlah();
        
       $('.add_cart').click(function(){
          var id_menu   = $('#id_m').val();
          var nama_menu = $('#nama_m').val();
          var harga     = $('#harga_m').val();
          var qty       = $('#jml').val();
          $.ajax({
                url : "<?php echo base_url();?>pelanggan/add_to_cart",
                method : "POST",
                data : {produk_id: id_menu, produk_nama: nama_menu, produk_harga: harga, quantity: qty},
                success :function(data){
                    //alert(data);
                    $('#detail_cart').html(data);
                    $('#jumlah_cart').html($('#jumlah').val());
                    $('#jml').val(1);
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
                      $('#jumlah_cart').attr('data-badge','0');
                    }else{    
                       $('#jumlah_cart').attr('data-badge',data);
                    }
                }
          });
       }
       
    });
    
    function tampil(){
        $.ajax({
            url : "<?php echo base_url();?>pelanggan/tampil_makanan",
            method : "GET",
            success :function(data){
                $('#menu').html(data);
            }
        });
    }
    
  </script>


        <footer class="mdl-mini-footer">
  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo">Title</div>
    <ul class="mdl-mini-footer__link-list">
      <li><a href="#">Help</a></li>
      <li><a href="#">Privacy & Terms</a></li>
    </ul>
  </div>
</footer>
      </div>
    </div>
    <script src="<?php echo base_url();?>assets/mdl/material.min.js"></script>
  </body>
</html>
