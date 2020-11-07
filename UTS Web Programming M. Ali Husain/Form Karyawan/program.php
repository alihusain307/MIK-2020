<?php

    

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $jamker = $_POST["jam_kerja"];
    $jamK= 48;
    $jamL= $jamker-$jamK;
    $upah= 5000;

    if ($jamker > 48) {
        $gaji = $upah * $jamK;
        $upahlembur = $jamL * 7000;
        $total = $upahlembur + $gaji; 
        $GajiBersih = $total * 4;
    } else {
        $GajiBersih= ($jamker * $upah) * 4;
        $upahlembur=0;
        $jamL=0;
    }
    

 } 



    echo "<br>Nama : ".$nama;
   
    echo "<br>Jam Lembur : $jamL Jam ";
    echo "<br>Gaji Lembur : Rp.".$upahlembur;
    echo "<br>Gaji Bersih : Rp. ".$GajiBersih;
?>