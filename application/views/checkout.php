

      <div class="resto-content mdl-layout__content">        
        <div class="resto-more-section" style="background-color: white;">
          <div class="resto-section-title mdl-typography--display-1-color-contrast">Pesanan :</div>
          <!--content-->
          <div class="resto-card-container mdl-grid">
              <div class="mdl-cell mdl-cell--8-col mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                 <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp animated fadeInRight">
                    <thead>
                      <tr>
                        <th class="mdl-data-table__cell--non-numeric">Jumlah Pesanan</th>
                        <th>Nama Pesanan</th>
                        <th>Harga</th>
                        <th>Sub Total</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="detail_cart">
                      <tr>
                        
                      </tr>
                    </tbody>
                  </table>
                  <br style="float: right;">
                  <button type="button" id="pesan_sekarang" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored animated fadeIn">PESAN</button>
              </div>
            <!--button-cek-->
            </div>
          </div>
  <dialog class="mdl-dialog">
    <h6 class="mdl-dialog__title">Nasi Ayam</h6>
    <div class="mdl-dialog__content">
      <p>
        <img src="mdl/images/M2.jpg" width="310px">
      </p>
      <p>
        <center>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored" id="moins" onclick="minus()" style="color: red;"><i class="material-icons">remove</i></button>
            <input type="text" size="5px" value="0" id="count" readonly="">
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored" id="plus" onclick="plus()" autofocus=""><i class="material-icons">add</i></button>
        </center>    
      </p>
    </div>
    <div class="mdl-dialog__actions">
      <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored close">Ok</button>
      <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect">Batal</button>
    </div>
  </dialog>
  <script>
    var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelector('#show-dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
        dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
  </script>

  <!--kounter-->
    <script src="<?php echo base_url();?>assets/mdl/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/mdl/app/js/handleCounter.js"></script>
  <script>
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
      $('#handleCounter3').handleCounter({maximize: 50})
      $('#handleCounter4').handleCounter({maximize: 50})
      $('#handleCounter5').handleCounter({maximize: 50})
        })
        function valChanged(d) {
//            console.log(d)
        }

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
      </div>
    </div>
    <script src="<?php echo base_url();?>assets/mdl/material.min.js"></script>
  </body>
</html>
