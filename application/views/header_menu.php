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
    <link rel="icon" href="<?php echo base_url();?>assets/favicon.ico" type="image/x-icon">

    <!--custom-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/mdl/app/css/handle-counter.css">

    <!-- Page styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/mdl/css/material.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/mdl/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/custom.css">
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
            <a href="<?php echo base_url().'pelanggan/menu';?>"><img class="resto-logo-image" src="<?php echo base_url();?>assets/mdl/images/header2.png"></a>
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="resto-header-spacer mdl-layout-spacer"></div>
          <div class="resto-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            
              <a href="<?php echo base_url().'pelanggan/checkout';?>"><i class="material-icons mdl-badge" id="jumlah_cart">add_shopping_cart</i></a>
 
          </div>
          <!-- Navigation -->
          <div class="resto-navigation-container">
            <nav class="resto-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?php echo base_url().'pelanggan/menu';?>">MAKANAN</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="<?php echo base_url().'pelanggan/menu2';?>">MINUMAN</a>              
            </nav>
          </div>
          <span class="resto-mobile-title mdl-layout-title">
            <img class="resto-logo-image" src="<?php echo base_url();?>assets/mdl/images/header2.png">
          </span>
          
          
        </div>
      </div>

      <div class="resto-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <div style="padding-left: 20%">
            <b><?php echo $this->session->userdata('nama_pelanggan');?></b>
            <p><img class="android-logo-image" src="<?php echo base_url();?>assets/mdl/images/logo.png" width="45%"></p>
          </div>
        </span>
        <nav class="mdl-navigation">

          <a class="mdl-navigation__link" href="<?php echo base_url().'pelanggan/menu';?>"><b>MAKANAN</b></a>
          <a class="mdl-navigation__link" href="<?php echo base_url().'pelanggan/menu2';?>"><b>MINUMAN</b></a>
          <div class="resto-drawer-separator"></div>
          <a class="mdl-navigation__link" href="<?php echo base_url().'pelanggan/feedback';?>"><b>Bayar Sekarang</b></a>
        </nav>
      </div>
