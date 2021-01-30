<?php 
session_start();session_start();
if ($_SESSION['pw'] != '123456') {
    header('location: login.php');
}
 ?>