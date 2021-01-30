<?php 
include 'koneksi.php';

$nama_peserta =$_POST['nama_peserta'];
$tgl_lahir =$_POST['tgl_lahir'];
$jk =$_POST['jk'];
$alamat =$_POST['alamat'];
$agama =$_POST['agama'];

$sql = $koneksi->query("INSERT INTO peserta VALUES ('', '$nama_peserta', '$tgl_lahir', '$jk', '$alamat', '$agama')");

header('location: peserta.php')
 ?>