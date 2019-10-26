<?php
if (isset($_POST['cetak'])) {
    
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $goldar = $_POST['goldar'];
    $hobi = $_POST['hobi'];
    $keterangan = $_POST['keterangan'];

    echo '<h1>Hasil Input</h1>';
    echo '<ul>';
    echo '<li>Nama: '  .$nama. '</li>';
    echo '<li>Alamat: ' .$alamat. '</li>';
    echo '<li>Jenis Kelamin: ' .$jenis_kelamin. '</li>';
    echo '<li>Golongan Darah: ' .$goldar. '</li>';
    echo '<li>Hobi: ' .$hobi. '</li>';
    echo '<li>Keterangan: ' .$keterangan. '</li>';

}
?>