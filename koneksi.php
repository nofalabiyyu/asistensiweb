<?php
 $host = "localhost";
 $username = "root";
 $password = "";
 $dbname = "register";

 $koneksi = mysqli_connect($host, $username, $password, $dbname); 

 if(!$koneksi){
    die("Gagal" . mysqli_connect_error()); 
 }
?>


