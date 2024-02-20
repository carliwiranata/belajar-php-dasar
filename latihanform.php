<?php
error_reporting(0);
include 'function.php';
$nilai_1 = htmlspecialchars($_POST['nilai_1']);
$nilai_2 = htmlspecialchars($_POST['nilai_2']);

if (isset($_POST['tambah'])) {
    $hasil = tambah($nilai_1, $nilai_2);
    $hasil = "Hasil Penjumlahan dari $nilai_1 tambah $nilai_2 adalah $hasil";
}



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Latihan Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row align-items-center">
            <div class="col-lg-6 mx-auto">
                <input type="text" value="<?= $hasil ?>" class="form-control py-5 mb-3" readonly>
                <form action="" method="post">
                    <input value="<?= $nilai_1 ?>" required type="number" name="nilai_1" class="form-control mb-3" placeholder="Masukkan Nilai 1">
                    <input value="<?= $nilai_2 ?>" required type="number" name="nilai_2" class="form-control mb-3" placeholder="Masukkan Nilai 2">
                    <button type="submit" class="btn btn-warning" name="tambah">+</button>
                    <button type="submit" class="btn btn-warning" name="kurang">-</button>
                    <button type="submit" class="btn btn-warning" name="bagi">/</button>
                    <button type="submit" class="btn btn-warning" name="kali">x</button>
                    <a href="latihanform.php" class="btn btn-warning">C</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>