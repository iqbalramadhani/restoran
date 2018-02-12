<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login | Broto Resto</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url();?>assets/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url();?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url();?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
</head>

<body class="login-page bg-pink">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>BROTO RESTO</b></a>
            <small>Traditional Food Restaurant</small>
        </div>
        <div class="card">
            <div class="body">
                    <div class="msg">Sign in to start your session</div>
                    <?php echo form_open('login/cek_login');?>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Nama Pengguna" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Kata Sandi" required>
                        </div>
                    </div>
                    <b><?php echo $this->session->flashdata('info');?>
                    <?php echo $this->session->flashdata('info1');?></b>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                           <?php
                            $info = $this->session->flashdata('info');
                            if(!empty($info))
                            {?>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('#but').trigger('click');
                                    })
                                </script>
                            <?php
                            }
                            ?> 
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-indigo waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <?php echo form_close();?>
            </div>
        </div>
    </div>

    <!-- Modal -->
        <div class="modal fade" role="dialog" id="myModal">
          <div class="modal-dialog">
                <div class="alert alert-danger fade in">
                  <span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;
                  <b><?php echo $this->session->flashdata('info');?></b>
                </div>
          </div>
        </div>
        <button data-toggle="modal" data-target="#myModal" style="display:none;" id="but"></button>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url();?>assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url();?>assets/js/admin.js"></script>
    <script src="<?php echo base_url();?>assets/js/pages/examples/sign-in.js"></script>
</body>

</html>