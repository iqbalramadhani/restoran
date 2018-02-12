<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Broto Resto | Traditional Sundanesse Food</title>
  <link rel="icon" href="<?php echo base_url();?>assets/favicon.ico" type="image/x-icon">
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url();?>assets/materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<style type="text/css">
body{
  margin: 0;
  background-color: #ededed;
  background: url('<?php echo base_url();?>assets/images/resto.jpg') center top no-repeat;
  background-size: ;
  position: center;
}
 
</style>
<body>
  <div>
    <div class="container center">
      <p><img src="<?php echo base_url();?>assets/images/logo.png" width="80px"></p>
      <div class="center white-text teks">BROTO RESTO</div>
      <img src="<?php echo base_url();?>assets/images/text.png" width="45%">
        <?php
            echo form_open('pelanggan/identitas');
        ?>
          <div class="col s6">
              <div class="input-field white-text">
                  <input id="nama" name="nama_anda" type="text" class="validate" required="">
                  <label for="nama" class="white-text">Nama Anda</label>
              </div>
          </div>
          <div class="row center">
            <button type="submit" name="submit" class="btn-large waves-effect waves-light teal">Pesan Sekarang</button>
          </div>
        </form>
    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
       
      </div>

    </div>
    <br><br>
  </div>

  <!--  Scripts-->
  <script src="<?php echo base_url();?>assets/mdl/jquery-1.12.4.min.js"></script>
  <script src="<?php echo base_url();?>assets/materialize/js/materialize.js"></script>
  <script src="<?php echo base_url();?>assets/materialize/js/init.js"></script>
  </body>
</html>
