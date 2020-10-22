
<?php 
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

}

echo "Nama:". $nama;
echo "<br>Usia:". $usia;
echo "<br>status:". $status;
 ?>
