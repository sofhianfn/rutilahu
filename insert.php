<?php

	include "config/db.php";

    switch(@$_GET[page]) {
        
        case 'daftar' :
        	$username 	= $_POST['username'];
        	$password 	= $_POST['password'];
        	$id_desa 	= $_POST['id_desa'];
        	$nama		= $_POST['nama'];
        	$hp			= $_POST['hp'];
        
        
        	mysqli_query($con,"INSERT INTO akun(username,password,id_desa,nama,hp,level,status)
        	VALUES('$username','$password','$id_desa','$nama','$hp','desa','N')
        	");
        
        	header('location:login.php?notif=sukses');
        break;

        case 'akun' :
        	$username 	= $_POST['username'];
        	$password 	= $_POST['password'];
        	$id_desa 	= $_POST['id_desa'];
        	$nama		= $_POST['nama'];
        	$hp			= $_POST['hp'];
        
        
        	mysqli_query($con,"INSERT INTO akun(username,password,id_desa,nama,hp,level,status)
        	VALUES('$username','$password','$id_desa','$nama','$hp','desa','Y')
        	");
        
        	header('location:admin.php?page=desa&notif=inserted');
        break;
        
    }

?>