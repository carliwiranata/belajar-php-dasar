<?php

$siswa = [
    ['nama' => 'Carli Wiranata', 'kelas' => 'XII', 'jurusan' => 'RPL', 'alamat' => 'Dusun 4 Karang Anyar'],
    ['nama' => 'Ridho', 'kelas' => 'XI', 'jurusan' => 'TKJ', 'alamat' => 'Dusun 7B Karang Anyar'],
    ['nama' => 'Hafiz', 'kelas' => 'XI', 'jurusan' => 'TKJ', 'alamat' => 'Dusun 7B Karang Anyar'],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>

<body>
    <h1>Data Siswa Prakrin</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>
        <?php $no = 1;
        foreach ($siswa as $s) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $s['nama'] ?></td>
                <td><?= $s['kelas'] ?></td>
                <td><?= $s['jurusan'] ?></td>
                <td><?= $s['alamat'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>