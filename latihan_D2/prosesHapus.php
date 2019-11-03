<?php
 $hapus=$_POST["hapus"];
 $conn=mysqli_connect ("localhost","root","","latihan")
 or die ("koneksi gagal");
 $hasil=mysqli_query( $conn ,"DELETE FROM mahasiswa WHERE NRP='$hapus'"); 
 echo "<br>";
 echo "Berhasil dihapus";
 echo "<br>";
 echo "<br>";
 
?> 