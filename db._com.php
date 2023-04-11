<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Kontol = koneksi tolol".mysqli_connect_error());
}

//echo "Koneksi sukses";
?>