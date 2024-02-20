<?php

// echo date("d-m-Y");

function selamat($nama)
{
    echo "Selamat datang $nama, di LKP Utama Jaya";
}
// echo "<br>";

function tambah($nilai_1, $nilai_2)
{
    $hasil = $nilai_1 + $nilai_2;
    return $hasil;
}

function predikat($nilai)
{
    if ($nilai >= 90) {
        $predikat = "A";
    } elseif ($nilai >= 80) {
        $predikat = "B";
    } elseif ($nilai >= 70) {
        $predikat = "C";
    } else {
        $predikat = "D";
    }
    return $predikat;
}
// kurang, bagi, kali
// $nama = "Carli Wiranata";
// echo selamat($nama);
