<!doctype html>
<html lang="en">
  <head>
  	<title>Rutilahu Kuningan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:image" content="http://galeri.upmk.ac.id/cache/Profil/Logo-Fiks_298_thumb.jpg" />
    
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="login_asset/css/style.css">
	<link rel="icon" type="image/png" href="login_asset/images/icon.png"/>
	

	<meta property="og:title" content="Rutilahu Kuningan | DPKPP" />
	<meta property="og:description" content="Aplikasi Bidang Perumahan DPKPP" />
	<meta property="og:url" content="http://rutilahu.ptik.online" />
	<meta property="og:site_name" content="Rutilahu Kuningan | DPKPP" />
	<meta property="og:image" content="http://rutilahu.ptik/login_asset/images/og.jpg" />

	</head>
	<body>
	
<?php

	if(@$_GET[notif]=='sukses') {
		echo "<script>alert('Anda sukses membuat akun, silakan login'); window.location = 'login.php'</script>";
	}
	elseif(@$_GET[notif]=='gagal') {
		echo "<script>alert('Kombinasi username dan password keliru'); window.location = 'login.php'</script>";
	}
	elseif(@$_GET[notif]=='logout') {
		echo "<script>alert('Anda telah keluar'); window.location = 'login.php'</script>";
	}
	
	session_start();
	if($_SESSION['username']!='') {
	    if($_SESSION['level']=='desa') {
    	    header('location:index.php');
	    }
	    elseif($_SESSION['level']=='dinas') {
    	    header('location:admin.php');
	    }
	    else {
    	    header('location:login.php');	        
	    }
	}
?>	
	<section class="ftco-section">
		<div class="container" style="margin-top:-100px;">
			<div class="row justify-content-center" style="margin-bottom:-40px;">
				<div class="col-md-6 text-center mb-5">
					<img src="login_asset/images/logo.png" width="100px"/>
					<h2 class="heading-section">Rutilahu Kuningan</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(login_asset/images/rutilahu.jpg);"></div>
						<div class="login-wrap p-0 ml-4 mr-4 mt-4 mb-4">
							<form action="handlinglogin.php" method="POST" class="signin-form">
			      		<div class="form-group mt-3">
			      			<input name="username" type="text" class="form-control" placeholder="Username" required>
			      		</div>
		            <div class="form-group">
		              <input name="password" id="password-field" type="password" class="form-control" placeholder="Password" required>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<p><input type="submit" class="form-control btn btn-primary rounded submit px-3" value="Masuk"></p>
		            </div>
		          </form>
		          <p class="text-center">Belum punya akun? <a href="daftar.php">Daftar</a></p>
		          <p class="text-center">Kembali ke Landingpage <a href="index.php">Landingpage</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

  <script src="login_asset/js/jquery.min.js"></script>
  <script src="login_asset/js/popper.js"></script>
  <script src="login_asset/js/bootstrap.min.js"></script>
  <script src="login_asset/js/main.js"></script>

	</body>
</html>

