<!doctype html>
<html lang="en">
  <head>
  	<title>Rutilahu Kuningan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="login_asset/css/style.css">
	
	<link rel="stylesheet" href="plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  
    <link rel="icon" type="image/png" href="login_asset/images/logo.png"/>


	</head>
	<body>
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
				<form action="insert.php?page=daftar" method="POST">
		      		<div class="form-group mt-3">
		      			<input name="username" type="text" class="form-control" required>
		      			<label class="form-control-placeholder" for="username">Username</label>
		      		</div>
		            <div class="form-group">
		              <input name="password" id="password-field" type="password" class="form-control" required>
		              <label class="form-control-placeholder" for="password">Password</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		              <input name="nama" type="text" class="form-control" required>
		              <label class="form-control-placeholder">Nama Lengkap</label>
		            </div>
					
		            <div class="form-group">
		              <input name="hp" type="text" class="form-control" required>
		              <label class="form-control-placeholder">Nomor HP</label>
		            </div>

				
		            <div class="form-group">
		              <select name="id_desa" class="form-control select2bs4" required>
					  <option vaule="">--Pilih Desa--</option>
<?php
	include "config/db.php";

	$qk = mysqli_query($con,"SELECT * FROM kec ORDER BY id");
	while($rk=mysqli_fetch_array($qk)) {
		echo"<optgroup label='$rk[kecamatan]'>";
			$q = mysqli_query($con,"SELECT * FROM desa WHERE id_kec='$rk[id]' ORDER BY jenis");
			while($r=mysqli_fetch_array($q)) {
					echo"
							  <option value='$r[id]'>$r[desa]</option>
					";
			}
		echo"</optgroup>";
	}
?>
					  </select>
		            </div>

		            <div class="form-group">
		            	<input type="submit" class="form-control btn btn-primary rounded submit px-3" value="Daftar">
		            </div>
		        </form>
		          <p class="text-center">Sudah punya akun? <a href="login.php">Login</a></p>
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
  <script src="plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {

    $('.select2').select2()
	
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
	
  });
</script>
	</body>
</html>

