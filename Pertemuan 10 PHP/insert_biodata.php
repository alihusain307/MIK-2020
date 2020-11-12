<?php 
include 'koneksi.php';

$nama_depan= $_POST['nama_depan'];
$nama_belakang= $_POST['nama_belakang'];
$tgl_lahir= $_POST['tgl_lahir'];
$agama= $_POST['agama'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$alamat= $_POST['alamat'];
$telepon= $_POST['telepon'];
$email= $_POST['email'];
$nama = $nama_depan.' '.$nama_belakang;

$sql= $koneksi->query("INSERT INTO biodata VALUES ('', '$nama', '$tgl_lahir', '$agama', '$jenis_kelamin', '$alamat', '$telepon', '$email')");

header('Location: index.php');

?>