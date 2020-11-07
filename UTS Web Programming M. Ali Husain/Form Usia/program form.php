
<?php 
if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $usia = $_POST['usia'];
 
    if ($usia <= 5) {
    $ket = "B";
} elseif ($usia <= 16) {
    $ket = "A";
} elseif ($usia <= 50) {
    $ket = "D";
} else {
    $ket = "T";
}

    switch ($ket) {
        case 'B':
            $status = 'Balita';
            break;

        case 'A':
            $status = 'Anak-anak';
            break;

        case 'D':
            $status = 'Dewasa';
            break;
        
        default:
            $status = 'Tua';
            break;
    }

}

echo "Nama:". $nama;
echo "<br>Usia:". $usia;
echo "<br>status:". $status;
 ?>
