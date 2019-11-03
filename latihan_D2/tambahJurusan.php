<?php
include "koneksi.php";
$nama = $_POST['nama'];
$sql = "INSERT INTO jurusan(Nama) VALUES('$nama')";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
if($query){
	echo "Data berhasil ditambahkan";
}else{
	echo "Error: ".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>