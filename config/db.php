<?php

	// sesuaikan data berikut tergantung hosting atau localhost 
	$host = 'localhost';	//default
	$user = 'root';		//default seperti ini jika localhost
	$pass = '';		//default seperti ini jika localhost
	$dbase = 'rutilahu';	//sesuaikan dengan nama database

	$con = mysqli_connect($host,$user,$pass) 
	OR DIE ("upss koneksi gagal, periksa file koneksi database");
	
	mysqli_select_db($con,$dbase) 
	OR DIE ("upss koneksi gagal, periksa file koneksi database");

?>