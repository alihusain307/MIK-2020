<?php 


if (isset($_POST["submit"])) {

$nama = $_POST["nama"];
$jamker= $_POST["jam_kerja"];
$gol= $_POST["golongan"];
$jamK=48;
$jamL=$jamker-$jamK;


switch ($gol) {
    case "Honorer":
        $upah=5000;
        break;
    default:
        $upah=9000;
        break;
}

    if ($jamK > 48) {
        $upahlembur == $upah + 2000;
        $gajilembur == $jamL * $upahlembur;
        $gaji == $jamK*$upah;
        $gaji_ttl == $gaji + $gajilembur;
}
        else  {
          $gaji = $jamker * $upah;

      }


// var_dump($gaji_ttl, $upahlembur, $gajilembur, $jamL, $gaji, $gajilembur)
    echo "Nama: ".$nama ;
    echo "<br>Jam Kerja: ".$jamker;
    echo "<br>Golongan: ".$gol;
    echo "<br>gaji: ".$gaji_ttl;
}
    ?>