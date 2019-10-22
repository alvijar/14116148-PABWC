<?php

$nama = "Alvijar Akbar Pahlevi";
$Panjang_nama = strlen($nama);

if ($Panjang_nama==1 && $Panjang_nama<=10) {
    $harga_tot = $Panjang_nama*300;
    echo '<font color=yellow>Nama   : '.$nama.'</font><br>';
    echo '<font color=yellow>Harga total : Rp.'.$harga_tot.'</font><br>';
}elseif ($Panjang_nama>10 && $Panjang_nama<=20) {
    $harga_tot = $Panjang_nama*500;
    echo '<font color=blue>Nama   : '.$nama.'</font><br>';
    echo '<font color=blue>Harga total : Rp.'.$harga_tot.'</font><br>';
}elseif ($Panjang_nama>20) {
    $harga_tot = $Panjang_nama*700;
    echo '<font color=purple>Nama   : '.$nama.'</font><br>';
    echo '<font color=purple>Harga total : Rp.'.$harga_tot.'</font><br>';
}else {
    function bet($color="red"){
        echo '<font color="'.$color.'">Nama : '.$nama.'</font><br>';
        echo '<font color="'.$color.'">Harga total : Rp.'.$harga_tot.'</font><br>';
    }
    bet();
}

?>