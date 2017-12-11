<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Footer.css">
</head>

<body>
    <nav class="view-header">
        <div class="container">
        <div class="row">
            <div class="col-sm col-md">
                <a class="navbar-link logo" href=""><img src="<?php echo base_url();?>assets/gambar/logo.png"></a>
                <div class="nama">
                    <h4>
                        <b>Selamat Datang, <?php echo $this->session->userdata('nama_pelanggan');?></b> 
                    </h4>
                </div>            
            </div>
        </div>
    </div>
    </nav>
    <!navbar>
    
    <div class="collapse navbar-collapse" id="Mynav">
    <b>
      <ul class="nav navbar-nav" id="navbar">
        <li><a href="<?php echo base_url().'pelanggan/menu';?>" class="glyphicon glyphicon-home"></a></li>
        <li class="active"><a href="#">REKOMENDASI</a></li>
        <li><?php echo anchor('pelanggan/menu','Makanan');?></li>
        <li><?php echo anchor('pelanggan/menu','Minuman');?></li>
        <li><?php echo anchor('pelanggan/menu','Hidangan Lain');?></li>
        <li><?php echo anchor('pelanggan/selesai','Selesai');?></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" id="nav-right">
        <li>
            <a aria-expanded="false" href="<?php echo base_url().'pelanggan/checkout';?>"> <span></span><img src="<?php echo base_url();?>assets/gambar/out.png"><span class="badge">42</span></a>
        </li>
      </ul>
    </b>
    </div>
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
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody id="detail_cart">
        
    </tbody>
  </table>
  
</div>   
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