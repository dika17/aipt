<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="img/log_upj.png"/>
  <title>UPJ-DASHBOARD DOKUMEN PT</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

  
  <!--  connect database -->
  <?php include ("../dashboard/config/db.php") ?>
  

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
 <body class="hold-transition skin-white sidebar-mini"> 
<div class="">

  <header class="main-header">
    <!-- Logo -->
    
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
<!--       <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>  -->


      <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
      

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="upj.ac.id" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/Logo UPJ-Bulat 2017 transparan.png" class="user-image" alt="User Image">
              <span class="hidden-xs">UNIVERSITAS PEMBANGUNAN JAYA</span>
            </a>
            
          </li>
                   <li class="dropdown user user-menu">
            <a href="lpmu.upj.ac.id" class="dropdown-toggle" data-toggle="dropdown">
              
              <span class="hidden-xs">Lembaga Penjaminan Mutu Universitas</span>
            </a>
            
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="http://upj.id:100">
              <!-- <img src="img/Logo UPJ-Bulat 2017 transparan.png" class="user-image" alt="User Image"> -->
              <span class="hidden-xs">| Login</span>
            </a>
            
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>