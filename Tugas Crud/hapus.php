<?php 
include 'config/koneksi 2.php';

$id= $_GET['id'];

$sql = $koneksi->query("DELETE FROM nilai_akhir WHERE id= '$id'");
  header('Location: nilai akhir.php');

var_dump($id);
 ?>