<?php
 $cari=$_POST["cari"];
 $conn=mysqli_connect ("localhost","root","","latihan")
 or die ("koneksi gagal");
 $hasil=mysqli_query( $conn ,"SELECT mahasiswa.NRP, mahasiswa.nama,jurusan.nama, mahasiswa.foto  FROM mahasiswa, jurusan
 WHERE mahasiswa.ID_Jur=jurusan.ID_Jur AND mahasiswa.nama like '%$cari%'"); 
 $jumlah=mysqli_num_rows($hasil);
 echo "<br>";
 echo "Ditemukan: $jumlah";
 echo "<br>";
 echo "<br>";
 while($baris=mysqli_fetch_array($hasil))
 {
 echo "NRP : ";
 echo $baris[0];
 echo "<br>";
 echo "Nama : ";
 echo $baris[1];
 echo "<br>";
 echo "Jurusan :";
 echo $baris[2];
 echo "<br>";
 echo "Foto :";
 echo "<img width=200 src=foto/$baris[3]>";
 echo "<br>";
 
 echo "<br>";
}
?>