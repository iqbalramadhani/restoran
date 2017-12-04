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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Google-Style-Login.css">
</head>

<body class="bg">
    <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" onclick="">Sign in</button>
    <div class="login-alert">
        <div class="font-alert">
            <center><p>ID ATAU PASSWORD</p>
            <p>SALAH</p>
            <p>SILAHKAN COBA LAGI</p>
            <div class="ok-btn"><a href="">OK</a></div>
        </center>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <div class="cover">
        
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".btn").on('click',function(){
                $(".cover").fadeIn('slow');
                $(".login-alert").fadeIn('slow');
            });
        });
    </script>
</body>

</html>