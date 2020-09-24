<?php
$nama = "Rizkiansyah";
$nilai_1 = 43;
$nilai_2 = 34;
$nilai = ($nilai_1 + $nilai_2) / 2;

if ($nilai > 85) {
	$grade = "A";
} elseif ($nilai > 75) {
	$grade = "B";
} elseif ($nilai > 65) {
	$grade = "C";
} else {
	$grade = "D";
}


if ($grade == "A"){
	$ket = "Sangat Baik";
} elseif ($grade == "B") {
	$ket = "Baik";
}elseif ($grade == "C") {
	$ket = "Cukup";
} else {
	$ket = "Kurang";
}	

echo "Nama: ".$nama;
echo "<br>Nilai: ".$nilai;
echo "<br>Grade: ".$grade;
echo "<br> Keterangan: ".$ket;
 ?>
