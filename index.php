<?php
require 'config.php';
$mhs = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <button type="submit"><a href="add.php">Tambah Data</a></button>
    <table border ="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
        <?php $i=1 ?>
        <?php foreach($mhs as $row) :?>
        <tr>
            <td><?= $i ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['program_studi']; ?></td>
            <td><a href="update.php?nim=<?= $row['nim']; ?>">Update</a> | <a href="delete.php?nim=<?= $row['nim']; ?>">Hapus</a></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>