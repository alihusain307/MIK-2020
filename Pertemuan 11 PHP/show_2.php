<?php 

session_start();
if ($_SESSION['pw'] != '123456') {
    header('location: login.php');
}


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     
 </body>
 </html>