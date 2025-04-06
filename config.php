<?php
$conn = mysqli_connect('localhost:3306', 'root', '145689', 'pemweb6');

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows= [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]=$row;
    }
    return $rows;
}

function insert($data){
    global $conn;

    if (isset($_POST['submit'])) {
        $nama=htmlspecialchars($data['nama']);
        $nim=htmlspecialchars($data['nim']);
        $prodi=htmlspecialchars($data['prodi']);

        $querry = "INSERT INTO mahasiswa VALUES ('$nama', '$nim', '$prodi')"; 
        mysqli_query($conn, $querry);

        return mysqli_affected_rows($conn);
    }
}

function hapus($nim){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE nim=$nim");
    return mysqli_affected_rows($conn);
}

function update($data){
    global $conn;

        $nama=htmlspecialchars($data['nama']);
        $nim=htmlspecialchars($data['nim']);
        $prodi=htmlspecialchars($data['prodi']);

        $querry = "UPDATE mahasiswa SET 
                        nama = '$nama',
                        nim = '$nim',
                        program_studi = '$prodi'
                    WHERE nim = '$nim'"; 
        mysqli_query($conn, $querry);

        return mysqli_affected_rows($conn);
}

?>