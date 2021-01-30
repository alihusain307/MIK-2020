<?php 
session_start();
if (!isset($_SESSION['password'])) {
    header('location: login.php ');
    exit;
}

include 'koneksi.php';

$uploadOk = 1;
$nama_depan = $_POST['nama_depan'];
$nama_belakang = $_POST['nama_belakang'];
$tgl_lahir = $_POST['tgl_lahir'];
$agama = $_POST['agama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
$cek_size = $_FILES['foto']['size'];
$target = basename($_FILES["foto"]["name"]);
$imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));

$nama = $nama_depan.' '.$nama_belakang;

// Check file size
if ($cek_size > 1000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
$uploadOk = 0;
}

if ($uploadOk == 0) {
    header('location:tambah_biodata.php');
} else {
    // merubah nama file
    $fotobaru = date('His').$foto;
    // lokasi penyimpanan foto
    $path = "images/".$fotobaru;

    if (move_uploaded_file($tmp, $path)) {
        $sql = $koneksi->query("INSERT INTO biodata VALUES ('', '$nama', '$tgl_lahir', '$agama', '$jenis_kelamin', '$alamat', '$telepon', '$email', '$fotobaru')");
        header('Location: biodata.php');
    }
}
