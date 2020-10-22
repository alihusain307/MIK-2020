<?php 
include 'config/koneksi 2.php';

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
 
    if ($usia <= 5) {
    $status = "Balita";
} elseif ($usia <= 16) {
    $status = "Anak-anak";
} elseif ($usia <= 50) {
    $status = "Dewasa";
} else {
    $status = "Tua";
}

    
  

    $result = "INSERT INTO usia VALUES ('', '$nama', '$usia', '$status')";

    $sql = mysqli_query($conn, $result);

    if ($sql) {
        echo "<script>alert('Data Berhasil ditambahkan');</script>";
        header('location: usia.php');
    } else {
        echo "<script>alert('Data Gagal ditambahkan');</script>";
    }
}

 ?>
