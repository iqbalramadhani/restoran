    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        
        setInterval(function(){
            tampil();
        },5000);
        
        tampil();
        
        $('#pencarian').change(function(){
            $.ajax({
                url : "<?php echo base_url();?>kasir/pesanan_cari",
                method : "POST",
                data : {id : id},
                success :function(data){
                }
            });
        });
        
        $(document).on('click','.bayar',function(){
            var id = $(this).attr('data-id');
            //alert(id);
            $.ajax({
                url : "<?php echo base_url();?>kasir/bayar",
                method : "POST",
                data : {id : id},
                success :function(data){
                    $('#pesanan'+id).fadeOut(2000);
                }
            });
        });
    });
    
    function tampil(){
        $.ajax({
            url : "<?php echo base_url();?>kasir/tampil_pesanan",
            method : "GET",
            success :function(data){
                $('.tampil').html(data);
            }
        });
    }
</script>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>
            <div class="row clearfix">
                <!-- Basic Examples -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Daftar Tagihan
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                </div>
                                <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                    <div class="tampil panel-group" id="accordion_1" role="tablist" aria-multiselectable="true">
                                      <!--Accordion Looping-->
                                      
                                        <!--#END# Accordion Looping-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Basic Examples -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script>
    
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>