<?php 
$sever = "localhost";
$username = "root";
$password = "";
$db = "user";
$koneksi = mysqli_connect($sever,$username,$password,$db);

if(mysqli_connect_errno()){
    echo "Koneksi gagal : ".mysqli_connect_error();
}

?>