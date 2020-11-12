<?php 
include 'koneksi.php';
$id = $_POST['id'];
$nama= $_POST['nama'];
$tgl_lahir= $_POST['tgl_lahir'];
$agama= $_POST['agama'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$alamat= $_POST['alamat'];
$telepon= $_POST['telepon'];
$email= $_POST['email'];

$sql= $koneksi->query("UPDATE biodata SET nama ='$nama', tgl_lahir='$tgl_lahir', agama='$agama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', telepon='$telepon', email='$email' WHERE id = '$id'");

if (!$sql) {
    header('Location : edit_biodata.php');
}

header('Location: index.php');
?>