     <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        //$('#pesanan').load("<?php echo base_url();?>koki/pesanan_next");
        
        setInterval(function(){
            tampil();
        },5000);
        
        tampil();
        
        $(document).on('click','.selesai',pesanan_selesai);
        
        function pesanan_selesai(){
            //alert('Holla');
            var id = $(this).attr("data-id");
            $.ajax({
                url : "<?php echo base_url();?>koki/pesanan_selesai",
                method : "POST",
                data : {id : id},
                success :function(data){
                    $("#data_"+id).fadeOut(500);
                    $.ajax({
                        url : "<?php echo base_url();?>koki/pesanan_next",
                        method : "GET",
                        success :function(data){
                            $('#pesanan').html(data).fadeIn(500);
                        }
                    });
                }
            });
        }   
    });
    
    function tampil(){
        $.ajax({
            url : "<?php echo base_url();?>koki/pesanan_next",
            method : "GET",
            success :function(data){
                $('#pesanan').html(data);
            }
        });
    }
    </script>
    <section class="content">
        <div class="container-fluid">
            <!-- Default Example -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card" id="pesanan">
                        
                    </div>
                </div>
            </div>
        </div>
            <!-- #END# Default Example -->
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url();?>assets/js/demo.js"></script>
</body>

</html>