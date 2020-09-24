<?php 
$kar = "Karyawan 1"; 
$upah1 = 5000;
$upah1 = 6000;
$upah1 = 7500;
$upah1 = 9000;
$jam= 15;

switch (true) {
    case($jam<= 48):
        $gaji = $upah1*$jam;
        break;

    case($jam<= 36):
        $gaji = $upah2*$jam;
        break;

    case($jam<= 12):
        $gaji = $upah3*$jam;
        break;

        
    case($jam<=6):
        $gaji = $upah3*$jam;
        break;
echo "Total Gaji:".$gaji;
    default:
        $lembur=$jam-48;
        break;
}

 ?>