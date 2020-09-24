<?php 
$nama ="Muhammad Ali Husain";
$tugas = 90;
$uts = 95;
$uas = 97;
$nilai = ($tugas*0.2)+($uts*0.3)+($uas*0.5);

switch (true) {
 	case ($nilai > 65 ):
 		$ket = "Lulus";
 		break;
 	
 	default:
 		$ket = "Tidak Lulus";
 		break;
 } 

 switch (true) {
 	case ($nilai > 85 ):
 		$grade = "A";
 		break;

 	case ($nilai > 75):
 		$grade = "B";
 		break;

 		case ($nilai > 60):
 		$grade = "C";
 		break;

 	default:
		$grade = "D";
 		break;
 }
echo "Nama: ".$nama;
echo "<br>Nilai: ".$nilai;
echo "<br>Grade: ".$grade;
echo "<br>Keterangan: ".$ket;

 ?>