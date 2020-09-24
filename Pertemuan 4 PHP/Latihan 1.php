<?php 

for ($i=0; $i <10 ; $i++) { 
     echo "Perulangan ke-".$i."<br>";
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tanggal</title>
 </head>
 <body>
    <select>
    <?php  

    for ($i=1; $i <=30; $i++) { 
        echo "Tanggal :".$tgl;
       echo "Tanggal: <option>.$i.</option>"; 
    }
    ?>
    </select>
    <select>
        <?php 
        $x=1;
        while ($x <= 12) {
            echo "Bulan";
          echo "<option>.$x.</option>"; 
        $x++;
        }
        ?>

    </select>
    <select>
<?php 
$z=1990;
do {
 echo "<option>".$z."</option> <br>"; 
 $x++;
}
 while ($z <= 2020);
?>
    </select>
 </body>
 </html>