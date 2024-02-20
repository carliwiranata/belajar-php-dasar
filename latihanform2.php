<?php
error_reporting(0);
include 'function.php';
$minuman = htmlspecialchars($_POST['minuman']);
$jumlah = htmlspecialchars($_POST['jumlah']);
$bayar = htmlspecialchars($_POST['bayar']);

if (isset($_POST['kirim'])) {
    if ($minuman == "Teh Manis") {
        $harga = 5000;
        $hasil = $harga * $jumlah;
        $kembali = $bayar - $hasil;
    } elseif ($minuman == "Milo Dingin") {
        $harga = 7000;
        $hasil = $harga * $jumlah;
        $kembali = $bayar - $hasil;
    } else {
        $harga = 3000;
        $hasil = $harga * $jumlah;
        $kembali = $bayar - $hasil;
    }
    $hasil = "Minuman = $minuman <br> Harga = $harga <br> Jumlah Barang = $jumlah <br> Harga Bayar = $hasil <br>Bayar = $bayar <br> Kembalian = $kembali ";
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
                <div class="col-lg-6 mb-3">
                    <?= $hasil ?>
                </div>
                <form action="" method="post">

                    <label for="" class="form-label">Pilih Minuman</label>
                    <select name="minuman" id="" class="form-control mb-3">
                        <option value="Teh Manis">Teh Manis</option>
                        <option value="Milo Dingin">Milo Dingin</option>
                        <option value="Fruit Tea">Fruit Tea</option>
                    </select>
                    <label for="" class="form-label">Jumlah Barang</label>
                     <input required type="number" name="jumlah" class="form-control mb-3" placeholder="Masukkan Jumlah Barang">
                    <label for="" class="form-label">Bayar</label>
                    <input required type="number" name="bayar" class="form-control mb-3">
                    <button type="submit" class="btn btn-warning" name="kirim">Kirim</button>
                    <a href="latihanform2.php" class="btn btn-warning">Reset</a>
                </form>
            </div>
        </div>
        <p>Daftar Harga: <br> 1. Teh Manis Rp 5000 <br> 2. Milo Dingin Rp 7000<br> 3. Fruit Tea Rp 3000</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>