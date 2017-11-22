<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
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
                <a class="navbar-link logo" href=""><img src="M2.png"></a>
                <div class="nama"><h4><b>Selamat Datang,xxxxxxxxxxxxxxx</b> </h4></div>            
            </div>
        </div>
    </div>
    </nav>
    <!navbar>
    <div class="collapse navbar-collapse blok" id="">
    <b>
      <ul class="nav navbar-nav" id="navbar">
        <li class="active"><a href="#">REKOMENDASI </a></li>
        <li><a href="#">Makanan </a></li>
        <li><a href="#">Minuman</a></li>
        <li><a href="#">Hidangan Lain </a></li>
        <li><a href="#">Checkout </a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
            <a aria-expanded="false" href="#"> <span></span><img src="<?php echo base_url();?>assets/img/out.png"><span class="badge">42</span></a>
                        
        </li>
      </ul>
  </b>
    </div>

    <!isi>
    <div class="container spasi-T2">
        <!isi gambar>
    <div class="row">
        <div class="col-sm-5 col-md-3">
            <div class="thumbnail">
                <img src="<?php echo base_url();?>assets/gambar/M1.png" alt="...">
                <div class="caption">
                    <p><h3><span class="label label-default">Rp.25000</span> <a href="#" class="btn btn-default" role="button"><img src="<?php echo base_url();?>assets/gambar/Y.png"></a></h3></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-2">
            <div class="thumbnail">
                <img src="<?php echo base_url();?>assets/gambar/N1.png" alt="...">
                <div class="caption">
                    <p><h3><span class="label label-default">Rp.25000</span> <a href="#" class="btn btn-default" role="button"><img src="<?php echo base_url();?>assets/gambar/Y.png"></a></h3></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-2">
            <div class="thumbnail">
                <img src="<?php echo base_url();?>assets/gambar/N1.png" alt="...">
                <div class="caption">
                    <p><h3><span class="label label-default">Rp.25000</span> <a href="#" class="btn btn-default" role="button"><img src="<?php echo base_url();?>assets/gambar/Y.png"></a></h3></p>
                </div>
            </div>
        </div>
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
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>