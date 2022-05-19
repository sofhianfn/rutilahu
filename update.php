<?php

    include "config/db.php";
    
    switch(@$_GET[page]) {
        
        case 'akun' :
            $username   = $_POST[username];
            $password   = $_POST[password];
            $nama       = $_POST[nama];
            $hp         = $_POST[hp];
            
            mysqli_query($con,"UPDATE akun SET password='$password', 
                                nama='$nama',
                                hp = '$hp'
                                WHERE username='$username' LIMIT 1");
            
            header('location:admin.php?page=desa&notif=updated');
        break;
        
        case 'aktivasi' :
            $username   = $_GET[id];
            
            mysqli_query($con,"UPDATE akun SET status='Y' WHERE username='$username' LIMIT 1");
            
            header('location:admin.php?page=desa&notif=updated');
        break;
        
    }
        
        
    
?>