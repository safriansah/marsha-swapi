<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MARSA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
    <!-- owl carousel-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/fav.jpg">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <div id="top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="<?php echo base_url() ?>" class="btn btn-success btn-sm">Tugas API C 2018</a></div>
          </div>
        </div>
      </div>
        <!-- *** TOP BAR END ***-->
        
        
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="<?php echo base_url() ?>" class="navbar-brand home"><img src="<?php echo base_url() ?>assets/img/MARSA.jpg" alt="MARSA logo" class="d-none d-md-inline-block"><img src="<?php echo base_url() ?>assets/img/MARSA.jpg" alt="MARSA logo" class="d-inline-block d-md-none"><span class="sr-only">MARSA - go to homepage</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="<?php echo base_url() ?>" class="nav-link <?php echo $menu=='1'?'active':'' ?>">Home</a></li>
              <li class="nav-item"><a href="<?php echo base_url() ?>people" class="nav-link <?php echo $menu=='2'?'active':'' ?>">people</a></li>
              <li class="nav-item"><a href="<?php echo base_url() ?>planet" class="nav-link <?php echo $menu=='3'?'active':'' ?>">planets</a></li>
              <li class="nav-item"><a href="<?php echo base_url() ?>film" class="nav-link <?php echo $menu=='4'?'active':'' ?>">films</a></li>
              <li class="nav-item"><a href="<?php echo base_url() ?>species" class="nav-link <?php echo $menu=='5'?'active':'' ?>">species</a></li>
              <li class="nav-item"><a href="<?php echo base_url() ?>vehicle" class="nav-link <?php echo $menu=='6'?'active':'' ?>">vehicles</a></li>
              <li class="nav-item"><a href="<?php echo base_url() ?>starship" class="nav-link <?php echo $menu=='7'?'active':'' ?>">starships</a></li>
            </ul>
          </div>
        </div>
      </nav>
      </div>
    </header>
