
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#pesanan').load("<?php echo base_url();?>koki/pesanan_next");
        
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
        
        //$('.selesai').on('click',function(){
            var id = $(this).attr("data-id");
            $.ajax({
                url : "<?php echo base_url();?>koki/pesanan_selesai",
                method : "POST",
                data : {id : id},
                success :function(data){
                    $("#data_"+id).fadeOut();
                }
            });
            //alert(id); 
        //});
        
    });
</script>
<div class="container" style="padding-top : 15px;">
        <!--konten_utama-->
        <div id="pesanan" class="row thumbnail" style="padding-top: 30px;">
            
        </div>
        <!--konten_utama-->
    </div>
    
</body>
</html>