<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>KUPTM Libraries | Secure Library Management System</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style type="text/css">
    .headerimage {
      text-align: center !important;
      background-color: #f8f9fa;
    }
    @media only screen and (max-width: 1026px) {
    .headerimage {
        display: none;
        }
    }
  </style>

</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <div class="headerimage">
      <img src="dist/img/logomara.png" style="width:100px; height:80px;">
      <img src="dist/img/logo.png" style="width:380px; height:100px;">
      <img src="dist/img/logojata.png" style="width:100px; height:80px;">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-primary navbar-dark">
    <div class="container">
<!--       <a href="index.php" class="navbar-brand">
        <span class="brand-text font-weight-light">KUPTM</span>
      </a> -->
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link active"><i class="nav-icon fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a href="aboutus.php" class="nav-link"><i class="nav-icon fas fa-user-circle"></i> About Us</a>
          </li>
          <li class="nav-item">
            <a href="contactus.php" class="nav-link"><i class="nav-icon fas fa-blender-phone"></i> Contact Us</a>
          </li>
          <li class="nav-item">
            <a href="rulesregulations.php" class="nav-link"><i class="nav-icon fas fa-table"></i> Rules & Regulations</a>
          </li>
          <li class="nav-item">
            <a href="facilities.php" class="nav-link"><i class="nav-icon fas fa-table"></i> Facilities</a>
          </li>
        </ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <li class="nav-item">
          <a href="slms/" class="nav-link"><i class="nav-icon fas fa-sign-in-alt"></i> Login</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- /.navbar -->