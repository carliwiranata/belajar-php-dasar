<?php

$predikat = "D";

switch ($predikat) {
    case 'A':
        $keterangan = "Sangat Bagus";
        break;
    case 'B':
        $keterangan = "Bagus";
        break;
    case 'C':
        $keterangan = "Cukup Bagus";
        break;

    default:
        $keterangan = "Kurang ";
        break;
}

echo $keterangan;

echo "<br>";

$nilai = 11;

echo $nilai == 10 ? "Ini adalah 10" : "ini bukan 10";
