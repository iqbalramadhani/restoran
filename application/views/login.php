<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Pretty-Footer.css">
</head>

<body class="bg">
    <div class="login-card">
        <img src="<?php echo base_url();?>assets/gambar/avatar_2x.png" class="profile-img-card">
        <p class="profile-name-card"> </p>
        
        <div class="form-signin">
            <?php echo form_open('login/cek_login');?>
                <span class="reauth-email"> </span>
                <input class="form-control" type="text" name="username" required="" placeholder="Nama Pengguna" autofocus="" id="inputEmail">
                <input class="form-control" type="password" name="password" required="" placeholder="Kata Sandi" id="inputPassword">
                <div class="checkbox">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Remember me</label>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" onclick="">Sign in</button>
            <?php echo form_close();?>
        </div>
        
    </div>
</body>
</html>
