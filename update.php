<?php 
require "config.php";

$nim=$_GET["nim"];
$mhs = query("SELECT * FROM mahasiswa WHERE nim = $nim")[0];

if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah');
                document.location.href='index.php';
            </script>";
    } else {
        echo "<script>
                alert('Data gagal diubah');
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
        <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]?>" require required autocomplete="off"><br>
        <label for="prodi">Program Studi</label>
        <input type="text" name="prodi" id="prodi" value="<?= $mhs["program_studi"]; ?>" require required autocomplete="off"><br>
        <input type="hidden" name="nim" id="nim" value="<?= $mhs["nim"]; ?>" require required autocomplete="off"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>