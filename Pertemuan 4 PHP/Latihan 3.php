<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >
        Id <input type="number" name="Id"><br>
        Nama<input type="text" name="nama"><br>
        Umur <input type="text" name="umur"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>

<?php 
if (isset($_POST["submit"])) {
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $umur = $_POST["umur"];

    echo "ID Anda:".$id;
    echo "<br>Nama Andan:".$nama;
    echo "<br>Umur:".$umur;
}
 ?>