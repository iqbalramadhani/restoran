<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Cookie">
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
                <div class="nama"><h4><b>Selamat Datang, xxxxxxxxxxxxxxx</b> </h4></div>            
            </div>
        </div>
    </div>
    </nav>
    <!navbar>
    <!--<div class="navb">
    <b>
      <ul>
        <li><a href="#">REKOMENDASI </a></li>
        <li class="navb-select"><a href="#">Makanan </a></li>
        <li><a href="#">Minuman</a></li>
        <li><a href="#">Hidangan Lain </a></li>
        <li><a href="#">Checkout </a></li>
    
        <li class="navbar-right">
            <a aria-expanded="false" href="#"> <span></span><img src="assets/img/out.png"><span class="badge">42</span></a>
                        
        </li>
      </ul>
    </b>  
    </div>-->
    <div class="collapse navbar-collapse" id="Mynav">
    <b>
      <ul class="nav navbar-nav" id="navbar">
        <li class="active"><a href="#">REKOMENDASI </a></li>
        <li><a href="#">Makanan </a></li>
        <li><a href="#">Minuman</a></li>
        <li><a href="#">Hidangan Lain </a></li>
        <li><a href="#">Checkout </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" id="nav-right">
        <li>
            <a aria-expanded="false" href="#"> <span></span><img src="assets/img/out.png"><span class="badge">42</span></a>
                        
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
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Karedok</td>
        <td>Rp.20000</td>
        <td>Rp.20000<button type="submit" style="float: right;">Batal</button></td>
      </tr>
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
</div>


    </div>
    <!footer>
    <footer>
        <div class="row container">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">Company<span>logo </span></a></h3>
               <!-- <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>-->
                <p class="company-name">Company Name © 2015 </p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <!--<div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">21 Revolution Street</span> Paris, France</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +1 555 123456</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@company.com</a></p>
                </div>-->
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>
               <!-- <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>-->
            </div>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>