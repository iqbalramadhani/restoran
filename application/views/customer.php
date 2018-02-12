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
    <title>Broto Resto | Makanan</title>
    <link rel="icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon">

    <!--custom-->
    <link rel="stylesheet" href="<?php echo base_url();?>mdl/app/css/handle-counter.css">

    <!-- Page styles -->
    <link rel="stylesheet" href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="<?php echo base_url();?>https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url();?>mdl/css/material.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>mdl/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>mdl/styles.css">
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

      <div class="resto-header mdl-layout__header mdl-layout__header--waterfall mdl-shadow--2dp">
        <div class="mdl-layout__header-row">
          <span class="resto-title mdl-layout-title">
            <img class="resto-logo-image" src="<?php echo base_url();?>mdl/images/header2.png">
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="resto-header-spacer mdl-layout-spacer"></div>
          <div class="resto-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            
              <a href="pelanggan_pesanan.html"><i class="material-icons mdl-badge" data-badge="4">description</i></a>
 
          </div>
          <!-- Navigation -->
          <div class="resto-navigation-container">
            <nav class="resto-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="pelanggan.html">MAKANAN</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="pelanggan.html">MINUMAN</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="pelanggan.html">LAIN - LAIN</a>
              
            </nav>
          </div>
          <span class="resto-mobile-title mdl-layout-title">
            <img class="resto-logo-image" src="<?php echo base_url();?>mdl/images/header2.png">
          </span>
          
          
        </div>
      </div>

      <div class="resto-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <div style="padding-left: 20%">
            <b>Meja 01</b>
            <p><img class="android-logo-image" src="<?php echo base_url();?>mdl/images/meja.png" width="45%"></p>
          </div>
        </span>
        <nav class="mdl-navigation">

          <a class="mdl-navigation__link" href=""><b>MAKANAN</b></a>
          <a class="mdl-navigation__link" href=""><b>MINUMAN</b></a>
          <a class="mdl-navigation__link" href=""><b>LAIN-LAIN</b></a>
          <div class="resto-drawer-separator"></div>
          <a class="mdl-navigation__link" href="pelanggan_pesanan.html"><b>Pesanan Saya</b></a>
          <a class="mdl-navigation__link" href="pelanggan_rincian.html"><b>Rincian Pemesanan</b></a>
          <a class="mdl-navigation__link" href=""><b>Panggil Pelayan</b></a>
        </nav>
      </div>

      <div class="resto-content mdl-layout__content">        
        <div class="resto-customized-section">
          <div class="resto-customized-section-text">
          </div>
          <div class="resto-customized-section-image"></div>
        </div>
        <div class="resto-more-section" style="background-color: white">
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
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <a href="" class="posisi"><img src="<?php echo base_url();?>mdl/images/M1.jpg">
                  <div class="centered">Tumis Ayam Bumbu Kuningg</div>
                </a>
              </div>
              <p><center><h7><b>Rp. 30000</b></h7></center></p>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <a id="show-dialog" class="posisi"><img src="<?php echo base_url();?>mdl/images/M2.jpg">
                  <div class="centered">Nasi Ayam</div>
                </a>
              </div>
              <p><center><h7><b>Rp. 25000</b></h7></center></p>
            </div>
          </div>
        </div>

  <dialog class="mdl-dialog animated bounceInDown">
    <h6 class="mdl-dialog__title">Nasi Ayam</h6>
    <div class="mdl-dialog__content">
      <p>
        <img src="<?php echo base_url();?>mdl/images/M2.jpg" width="310px">
      </p>
      <p>
            <div class="handle-counter" id="handleCounter3" style="padding-left: 22%; position: absolute;">
              <button class="counter-minus btn btn-primary">-</button>
              <input type="text" value="1" readonly="">
              <button class="counter-plus btn btn-primary">+</button>
            </div>  
      </p>
    </div>
    <div class="mdl-dialog__actions">
      <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored close">Ok</button>
      <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect">Batal</button>
    </div>
  </dialog>
  <script>
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
  </script>


  <!--kounter-->
    <script src="<?php echo base_url();?>mdl/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url();?>mdl/app/js/handleCounter.js"></script>
  <script>
        $(function ($) {
            var options = {
                minimum: 1,
                maximize: 10,
                onChange: valChanged,
                onMinimum: function(e) {
                    console.log('reached minimum: '+e)
                },
                onMaximize: function(e) {
                    console.log('reached maximize'+e)
                }
            }
      $('#handleCounter3').handleCounter({maximize: 50})
        })
        function valChanged(d) {
//            console.log(d)
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
    <script src="<?php echo base_url();?>mdl/material.min.js"></script>
  </body>
</html>
