<?php 
    if (isset($_GET['url'])) {
        $url=$_GET['url'];
        

        switch($url)
        {

            case'catat':
            include 'catat.php';
            break;
            
            case'pesan':
            include 'pesan.php';
            break;
            
            case'daftar_pengguna':
            include 'data.php';
            break;
            
            case'custom':
            include 'custom.php';
            break;
            
            default:
            echo "Selamat Datang!!!";
            break;
        }
    }

?>