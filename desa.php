<?php

	include "config/db.php";
	
	if(@$_GET[notif]=='sukses') {
		echo "<script>alert('Sukses login'); window.location = 'desa.php'</script>";
	}	
	
	session_start();
	if($_SESSION['username']=='' OR $_SESSION['level']!='desa') {
    	    header('location:logout.php');	        
	}
?>


<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Rutilahu Kuningan</title>

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="plugins/ekko-lightbox/ekko-lightbox.css">
  <link rel="icon" type="image/png" href="dist/img/logo.png"/>

</head>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a href="desa.php?page=identitas" class="nav-link"><i class="nav-icon fas fa-home"></i> Rutilahu</a>
      </li>


    </ul>
	
   <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="desa.php?page=identitas&aksi=edit" class="nav-link"><img src="dist/img/logo.png" class="img-circle mt-0" width="30px" alt="DP"></a>
      </li>

      <li class="nav-item">
		<a href="logout.php" class="nav-link"><i class="nav-icon fas fa-sign-out-alt"></i></a>
      </li>
   </li>

    <!-- Right navbar links -->

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="desa.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Rutilahu</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Desa Cirahayu</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
<!--
          <li class="nav-item">
            <a href="index.php?page=dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
!-->
          <li class="nav-item">
            <a href="desa.php?page=identitas" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>Dashboard Desa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="desa.php?page=pelajari" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Penjelasan dan FAQ</p>
            </a>
          </li>
		  
          <li class="nav-header">Rutilahu</li>
          <li class="nav-item">
            <a href="desa.php?page=input" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Draft Rutilahu</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="desa.php?page=data" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>Data Rutilahu</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="desa.php?page=proses" class="nav-link">
              <i class="nav-icon fas fa-spinner"></i>
              <p>Proses Penyelesaian</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="desa.php?page=capaian" class="nav-link">
              <i class="nav-icon fas fa-check-circle"></i>
              <p>Telah Selesai</p>
            </a>
          </li>
		  
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>Keluar</p>
            </a>
          </li>
		  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
	  <?php
		switch(@$_GET[page]) {
			default:
				include "module/content/identitas.php";
			break;
			case 'dashboard':
				include "module/content/identitas.php";
			break;
			case 'identitas':
				include "module/content/identitas.php";
			break;
			case 'pelajari':
				include "module/content/pelajari.php";
			break;
			case 'input':
				include "module/content/input.php";
			break;
			case 'data':
				include "module/content/data.php";
			break;
			case 'proses':
				include "module/content/proses.php";
			break;
			case 'capaian':
				include "module/content/capaian.php";
			break;
		}
	  ?>	
			

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 <a href="#">Dinas PKPP</a></strong>
  </footer>
</div>
<!-- ./wrapper -->




<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });
  })
  
</script>

</body>
</html>
