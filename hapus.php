<?php 
require "config.php";

$nim=$_GET['nim'];

if (hapus($nim) > 0) {
    echo "<script>
            alert('Data dihapus');
            document.location.href='index.php';
        </script>";
} else {
    echo "<script>
            alert('Data gagal dihapus');
            document.location.href='index.php';
        </script>";
}
?>