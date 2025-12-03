<?php
	
$host_name = "localhost";
$user_name = "root"; 
$password = ""; 
$database = "undangan"; 

$db = mysqli_connect($host_name, $user_name, $password, $database);


if( $db ){
   //echo "Database ditemukan </br></br>";
}else{
     die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

