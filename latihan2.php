<?php

function bet($color="red", $nama='Alvijar Akbar Pahlevi'){

    $Panjang_nama = strlen($nama);

    if ($Panjang_nama==1 && $Panjang_nama<=10) {
        $harga_tot = $Panjang_nama*300;
        echo 'Nama   : <font color="'.$color.'">'.$nama.'</font><br>';
        echo 'Panjang Nama : <font color="'.$color.'">'.$Panjang_nama.'</font><br>';
        echo 'Harga total : Rp.<font color="'.$color.'">'.$harga_tot.'</font><br>';
    }elseif ($Panjang_nama>10 && $Panjang_nama<=20) {
        $harga_tot = $Panjang_nama*500;
        echo 'Nama   : <font color="'.$color.'">'.$nama.'</font><br>';
        echo 'Panjang Nama : <font color="'.$color.'">'.$Panjang_nama.'</font><br>';
        echo 'Harga total : Rp.<font color="'.$color.'">'.$harga_tot.'</font><br>';
    }elseif ($Panjang_nama>20) {
        $harga_tot = $Panjang_nama*700;
        echo 'Nama   : <font color="'.$color.'">'.$nama.'</font><br>';
        echo 'Panjang Nama : <font color="'.$color.'">'.$Panjang_nama.'</font><br>';
        echo 'Harga total : Rp.<font color="'.$color.'">'.$harga_tot.'</font><br>';
    }

    
}
bet();
?>