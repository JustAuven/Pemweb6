<?php 
require "config.php";

if (isset($_POST["submit"])) {
    if (insert($_POST) > 0) {
        echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href='index.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan');
                document.location.href='index.php';
            </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="" require required autocomplete="off"><br>
        <label for="nim">NIM</label>
        <input type="text" name="nim" id="nim" value="" require required autocomplete="off"><br>
        <label for="prodi">Program Studi</label>
        <input type="text" name="prodi" id="prodi" value="" require required autocomplete="off"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>