<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on resto.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <title>Broto Resto</title>
    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/material.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles.css">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="resto-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="resto-title mdl-layout-title">
            <img class="resto-logo-image" src="<?php echo base_url();?>assets/images/header2.png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="resto-header-spacer mdl-layout-spacer"></div>
          <div class="resto-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            
              <a href=""><i class="material-icons">description</i></a>
 
          </div>
          <!-- Navigation -->
          <div class="resto-navigation-container">
            <nav class="resto-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">MAKANAN</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">MINUMAN</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">LAIN - LAIN</a>
              
            </nav>
          </div>
          <span class="resto-mobile-title mdl-layout-title">
            <img class="resto-logo-image" src="<?php echo base_url();?>assets/images/header2.png">
          </span>
          
          
        </div>
      </div>

      <div class="resto-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <div style="padding-left: 20%">
            <b>Meja 01</b>
            <p><img class="android-logo-image" src="<?php echo base_url();?>assets/images/meja.png" width="45%"></p>
          </div>
        </span>
        <nav class="mdl-navigation">

          <a class="mdl-navigation__link" href=""><b>MAKANAN</b></a>
          <a class="mdl-navigation__link" href=""><b>MINUMAN</b></a>
          <a class="mdl-navigation__link" href=""><b>LAIN-LAIN</b></a>
          <div class="resto-drawer-separator"></div>
          <a class="mdl-navigation__link" href=""><b>Pesanan Saya</b></a>
          <a class="mdl-navigation__link" href=""><b>Rincian Pemesanan</b></a>
          <a class="mdl-navigation__link" href=""><b>Panggil Pelayan</b></a>
        </nav>
      </div>

      <div class="resto-content mdl-layout__content">        
        <div class="resto-customized-section">
          <div class="resto-customized-section-text">
          </div>
          <div class="resto-customized-section-image"></div>
        </div>
        <div class="resto-more-section">
          <div class="resto-section-title mdl-typography--display-1-color-contrast mdl-grid">
            <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                More From Broto Resto
            </div>
            <div class="mdl-cell mdl-cell--6-col mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="text-align: right;">
              <h6><b>Harga dari : <select>
              <option value="rendah">Rendah - Tinggi</option>
              <option value="Tinggi">Tinggi - Rendah</option>
              </select></b></h6>
            </div>
          </div>
        <div class="resto-card-container mdl-grid"> 
        <?php foreach ($record->result() as $r){ ?>
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <a id="show-dialog1" class="posisi"><img src="<?php echo base_url();?>/assets/gambar/makanan/<?php echo $r->foto;?>">
                  <div class="centered"><?php echo $r->nama;?></div>
                </a>
              </div>
              <p><center><h7><b><?php echo 'Rp.'.$r->harga;?></b></h7></center></p>
            </div>
         <?php } ?>
        </div>
          

  <button id="show-dialog" type="button" class="mdl-button">Show Dialog</button>
  <dialog class="mdl-dialog">
    <h6 class="mdl-dialog__title">Nasi Ayam</h6>
    <div class="mdl-dialog__content">
      <p>
        <img src="<?php echo base_url();?>assets/images/M2.jpg" width="310px">
      </p>
      <p class="">
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored" id="moins" onclick="minus()" style="color: red;"><i class="material-icons">remove</i></button>
            <input type="text" size="5px" value="0" id="count" readonly="">
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--colored" id="plus" onclick="plus()" autofocus=""><i class="material-icons">add</i></button>    
      </p>
    </div>
    <div class="mdl-dialog__actions">
      <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">Ok</button>
      <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect close">Batal</button>
    </div>
  </dialog>
</div> 
          

  
 <script src="<?php echo base_url();?>assets/js/material.min.js"></script>
 <script type="text/javascript">
    $(document).ready(function(){
        $('.modal-trigger').leanModal();
    });
    
    var dialog = document.querySelector('dialog');
    var showDialogButton = document.querySelector('#show-dialog');
    if (! dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    showDialogButton.addEventListener('click', function() {
      dialog.showModal();
    });
    dialog.querySelector('.close').addEventListener('click', function() {
      dialog.close();
    });
    

    var count = 0;
    var countEl = document.getElementById("count");
    function plus(){
        count++;
        countEl.value = count;
    }
    function minus(){
      if (count > 0) {
        count--;
        countEl.value = count;
      }  
    }

  </script>

<footer class="mdl-mini-footer">
  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo">Title</div>
    <ul class="mdl-mini-footer__link-list">
      <li><a href="#">Help</a></li>
      <li><a href="#">Privacy & Terms</a></li>
    </ul>
  </div>
</footer>
      </div>
    </div>
  </body>
</html>
