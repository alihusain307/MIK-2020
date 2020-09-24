<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas M. Ali Husain</title>
</head>
<body>

    <table border="1">
        <?php 
    for ($i=1; $i <= 10; $i++) { ?>
       
        <tr>
          <td><?= $i; ?></td>
          <td><?php
    if ($i % 2 == 0) {
    echo "Genap";
    } else {
    echo "Ganjil";
    }
        
    ?></td>
        </tr>
 <?php } ?>
     
    </table>
    


</body>
</html>