<?php

// array numerik

$nama = ["Carli Wiranata", "Rido", "Hafiz"];

// var_dump($nama);
// echo $nama[2];

// array assosiatif 

$siswa = ["nama" => "Carli Wiranata", "jenis_kelamin" => "Laki-laki", "kelas" => "XII"];

// var_dump($siswa);
// echo $siswa['jenis_kelamin'];
// array multidimensi
// $tas = ["Laptop", ["Pulpen", "Pensil"], "Buku"];

// var_dump($tas);
// echo $tas[1][1];

$angkat = [89, 100, 30, [18, 20, [0]], [19], 2000, [1, 2, [10000, [75,[1009]]]], 99, [[23]], 123];

echo $angkat[6][2][1][1][0];
