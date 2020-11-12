<?php 
include 'config/koneksi 2.php';
$id= $_GET['id'];
    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    $result= "UPDATE nilai_akhir SET 'nim' = '$nim', 'nama_lengkap' = '$nama_lengkap', 'uts' = '$uts', 'uas' = '$uas' WHERE id = $id";

    $query = mysqli_query($koneksi,$result);
var_dump($nim, $nama_lengkap, $uts, $uas);
    if ($query) {
        echo "<scrip>alert('Data yang di Edit Berhasil Disimpan!!');</scrip>";
        // header("location: nilai akhir.php");
    } else {
        echo "<scrip>alert('Data yang di Edit gagal Disimpan!!');</scrip>";
        header("location: edit-nilai akhir.php");
    }

 ?>