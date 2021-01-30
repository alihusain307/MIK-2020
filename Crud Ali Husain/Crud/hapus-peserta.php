<?php
include 'koneksi.php';

$id_peserta = $_GET['id_peserta'];

$sql = $koneksi->query("DELETE FROM peserta
 WHERE id_peserta = $id_peserta");
header('location:peserta.php');
?>