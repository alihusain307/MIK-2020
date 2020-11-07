<?php 
include 'config/koneksi 2.php';

if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];

    
    
    $rata = ($uts + $uas) / 2;
    switch (true) {
        case ($rata > 65 ):
        $keterangan = "Lulus";
        break;

        default:
        $keterangan = "Tidak Lulus";
        break;
    } 

    $cek = mysqli_query($koneksi, "SELECT nim FROM nilai_akhir
        WHERE nim= '$nim'");

    if (mysqli_num_rows($cek) === 1) {
        echo "<script>
                alert('Data Ditemukan!');
            </script>";
    } else {
        $result = "INSERT INTO nilai_akhir VALUES ('',  '$nim', '$nama_lengkap', '$uts', '$uas', $rata, '$keterangan')";

    $sql = mysqli_query($koneksi, $result);

    if (!$sql) {
        echo "<script>alert('Data Gagal Ditambahkan!');</script>";
    }
}
    
}
header("Location:nilai akhir.php");
?>