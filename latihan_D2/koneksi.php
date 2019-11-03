<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "latihan";
//membuat koneksi
$koneksi = mysqli_connect($server,$user,$pass,$db);
//mengecek koneksi
if(!$koneksi){
	die("Koneksi gagal : ".mysqli_connect_error());
}else{
	echo "Koneksi berhasil!  <br>";
}
?>