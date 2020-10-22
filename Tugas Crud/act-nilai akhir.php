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

    $result = "INSERT INTO nilai_akhir VALUES ('',  '$nim', '$nama_lengkap', '$uts', '$uas', $rata, '$keterangan')";

    $sql = mysqli_query($conn, $result);

    if ($sql) {
        echo "<script>alert('Data Berhasil ditambahkan');</script>";
        header('location:nilai akhir.php');
    } else {
        echo "<script>alert('Data Gagal ditambahkan');</script>";
    }
}

?>