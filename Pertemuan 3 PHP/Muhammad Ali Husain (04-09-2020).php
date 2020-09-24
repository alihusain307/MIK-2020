<?php 

$gol = "B";
$upah1 = 5000;
$upah2 = 6000;
$upah3 = 7500;
$upah4 = 9000;
$jamK= 185;


switch (true) {
    case($jamK > 150):
        $ket="Lembur";
        break;


   case($jamK <= 150):
        $ket="Tidak Lembur";
        break;
}       
switch (true) {
    case($gol=='A'):
        $gaji = $upah1*$jamK;

        break;
    case($gol=='B'):
        $gaji = $upah2*$jamK;
        break;

    case($gol=='C'):
        $gaji = $upah3*$jamK;
        break;

    case($gol=='D'):
        $gaji = $upah4*$jamK;
        break;

}
$lembur = ($gaji * 150)*0.25;
$GajiT = $gaji + $lembur;

echo "Golongan:".$gol;
echo "<br>Jam Kerja/Minggu:$jamK Jam";
echo "<br>Keterangan:".$ket;
echo "<br>Gaji:Rp.".$gaji;
echo "<br>Gaji Lembur:Rp.".$lembur;
echo "<br>Gaji Total/Bulan:Rp.".$GajiT;


 ?>