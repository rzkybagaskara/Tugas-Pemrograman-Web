<?php

$host="localhost";
$user="root";
$password="";
$db="data_motor";

$conn = mysqli_connect($host,$user,$password,$db);
if (!$conn){
        die("Gagal terhubung ke database!:".mysqli_connect_error());    
}
// echo "Berhasil terhubung ke database!";
?>