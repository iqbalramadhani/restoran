<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilihan Menu</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Footer.css">
</head>

<body>
    <div class="container shadow">
    <h1><center><div class="menu">Pilih Jenis Akses Anda !!!!</div></center></h1>
    <hr class="baris">
    <center>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <button type="button" class="btn btn-default btn-circle btn-xl">Manager<i class=""></i></button>            
        </div>
        <div class="col-sm-6 col-md-4">
            <button type="button" class="btn btn-default btn-circle btn-xl">Pelayan<i class=""></i></button>
        </div>
        <div class="col-sm-6 col-md-4">
            <button type="button" class="btn btn-default btn-circle btn-xl">Koki<i class=""></i></button>
        </div>
    </div>
    <div class="spasi"></div>
    
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <button type="button" class="btn btn-default btn-circle btn-xl"><?php echo anchor('pelanggan','Pelanggan');?></button>            
        </div>
        <div class="col-sm-6 col-md-4">
            
            <button type="button" class="btn btn-default btn-circle btn-xl">Pelanggan<i class=""></i></button>
        </div>
        <div class="col-sm-6 col-md-4">
            <button type="button" class="btn btn-default btn-circle btn-xl">Pantry<i class=""></i></button>
        </div>
    </div>
    </center>
    <div class="spasi"></div>
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