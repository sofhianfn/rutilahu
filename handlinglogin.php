<?php

	include "config/db.php";


	$username 	= @$_POST['username'];
	$password 	= @$_POST['password'];


	$query = mysqli_query($con,"SELECT * FROM akun WHERE username='$username' AND password='$password' ");
	
	$hasil = mysqli_num_rows($query);
	
	if($hasil>0) {
	    $data = mysqli_fetch_array($query);
	    
	    session_start();
		
		$_SESSION['username'] = $data[username];
		$_SESSION['nama'] = $data[nama];
		$_SESSION['level'] = $data[level];
		
	    if($data[level]=='desa') {
    		header('location:desa.php?notif=sukses');
	    }
	    else {
    		header('location:admin.php?notif=sukses');
	    }
	}
	else {
		header('location:login.php?notif=gagal');
	}



?>