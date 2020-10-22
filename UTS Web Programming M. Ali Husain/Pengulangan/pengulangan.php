<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
        <tr>
            <td>
                <?php 
                $z=10;
                do {
                 echo "anak ayam turun.$z, mati satu tinggal".$z-1; 
                 $x++;
                }
                 while ($z <= 1);
                ?>
            </td>
        </tr>
    </table>
    
</body>
</html>