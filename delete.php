<?php

    include "config/db.php";

    switch(@$_GET[page]) {
        
        case 'akun' :
            $username = $_GET[id];
            
            mysqli_query($con,"DELETE FROM akun WHERE username='$username' LIMIT 1 ");
            
            header('location:admin.php?page=desa&notif=deleted');
        break;

//      case 'yang lain' :
            //query di sini untuk kasus kasus yang lain
//      break;

    }
    
?>