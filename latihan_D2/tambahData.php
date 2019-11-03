<?php
include "koneksi.php";

$file_ekstensi	= array('png','jpg','jpeg');
$foto = $_FILES['foto']['name'];
$ex = explode('.', $foto);
$ekstensi = strtolower(end($ex));
$ukuran	= $_FILES['foto']['size'];
$file_tmp = $_FILES['foto']['tmp_name'];

$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['id'];

move_uploaded_file($file_tmp, 'foto/'.$foto);
$sql = "INSERT INTO mahasiswa(NRP,nama,alamat,foto,ID_Jur) VALUES('$nrp','$nama','$alamat','$foto','$jurusan')";
$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

if($query){
	echo "Data berhasil ditambahkan <br>";
	echo "$nrp<br>";
	echo "$nama <br>";
	echo "$alamat <br>";
	echo "$jurusan <br>";
	echo "$foto <br>";
}else{
	echo "Error: ".$sql."<br>".mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>