<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Footer.css">
</head>

<body>
    <nav class="view-header">
        <div class="container">
            <div class="row">
                <div class="col-sm col-md">
                    <a class="navbar-link logo" href=""><img src="<?php echo base_url();?>/assets/gambar/logo.png"></a>
                    <center><h1 class="slmt">SELAMAT DATANG</h1>
                    <h2 class="selamat">DAN SELAMAT BEKERJA DI RESTORAN PAK BROTO</h2></center>            
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="spasi-T2"></div>
        <h3><center><u>Silahkan Log In Terlebih dahulu</u></center>
        <div class="form-group round"> 
            <div class="login">
                <?php echo form_open('login/cek_login');?>
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <h4>ID</h4>
                    </div>
                    <div class="col-sm-10 col-md-10">
                        <input type="text" name="username" class="form-control round" required="" placeholder="Nama Anda" autofocus="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <h4>Password</h4>
                    </div>
                    <div class="col-sm-10 col-md-10">
                        <input type="password" name="password" class="form-control round" required="" placeholder="Password Anda">
                    </div>
                </div>
            </div>        
         </div>
         <center>
         <div class="row">
            <div class="col-sm col-md">
                <?php
                $info = $this->session->flashdata('info');
                if(!empty($info))
                {?>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('.but').trigger('click');
                        })
                    </script>
                <?php
                }
                ?>
                <!--<button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" onclick="">MASUK</button>-->
                <button type="submit" class="btn btn-default">MASUK<i class=""></i></button>
            </div>
         </div>
         </center>
            <?php echo form_close();?>
    </div>
    <div class="spasi-T2"></div>
    
    <!-- Modal -->
        <div class="modal fade" role="dialog" id="myModal">
          <div class="modal-dialog">
                <div class="alert alert-danger fade in">
                  <span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;
                  <b><?php echo $this->session->flashdata('info');?></b>
                </div>
          </div>
        </div>
        <button data-toggle="modal" data-target="#myModal" style="display:none;" class="but"></button>
        
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
</body>
</html>