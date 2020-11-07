<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table border="1">
        <tr>            
            <td>
                Anak ayam turun 10
                <br>
                <?php 
                $z=10;
                $i=9;
                do {
                 echo "<br>Anak ayam turun $z, mati satu tinggal ".$i;
                 $z=$z-1;
                 $i=$i-1;
                }
                 while ($z >= 1);
                 while ($i >= 1);
                 if ($i=0) {
                    
                 }
                ?>
            </td>
        </tr>
    </table>
    
</body>
</html>
