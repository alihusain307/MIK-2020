<?php 


if (isset($_POST["submit"])) {

$nama = $_POST["nama"];
$jamker= $_POST["jam_kerja"];
$gol= $_POST["golongan"];
$jamL=$jamker-$jamK;
$jamK=150;

switch ($gol) {
    case "A":
        $upah=5000;
        break;
    case "B":
        $upah=6000;
        break;
    case "C":
        $upah=7500;
        break;
    
    default:
        $upah=9000;
        break;
}

    if ($jamK > 150) {
        $persen=0.25*$upah;
        $upahlembur=$upah+$persen;
        $gajilembur=$jamL*$upahlembur;
        $gaji=$jamK*$upah;
        $total=$gaji=$gajilembur;
        $gb=$total*4;
}
        else  {
          $gaji = $jamker * $upah;

      }
    echo "$nama" ;
    echo "<br>$jamker";
    echo "<br>$gol";
}
?>