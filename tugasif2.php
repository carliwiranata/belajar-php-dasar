<?php
include 'function.php';
$br = "<br>";
$nama = "Carli Wiranata";
$nilai_1 = 60;
$nilai_2 = 89;
$nilai_3 = 95;
$total = $nilai_1 + $nilai_2 + $nilai_3;
$rata_rata = $total / 3;

$predikat = predikat($rata_rata);
$rata_rata = number_format($rata_rata, 2);
echo "Nama $nama $br HTML = $nilai_1 $br CSS = $nilai_2 $br PHP = $nilai_3 $br Total = $total $br Rata-rata = $rata_rata $br Predikat = $predikat";
