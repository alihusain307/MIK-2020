<?php 
session_start();
if (!isset($_SESSION['password'])) {
    header('location: login.php ');
    exit;
}
include 'koneksi.php';

$id = $_GET['id'];

$sql = $koneksi->query("SELECT * FROM biodata WHERE id = '$id'");
$row = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s4 m4">
            </div>
            <div class="col s4 m4">
                <div class="card">
                    <div class="card-image">
                        <img src="images/<?= $row['foto'] == '' ? 'default.png' : $row['foto']; ?>">
                        <span class="card-title"><?= $row['nama']; ?></span>
                    </div>
                    <div class="card-content">
                        <table>
                            <tr>
                                <td width="100pt">Agama</td>
                                <td><?= $row['agama']; ?></td>   
                            </tr>
                            <tr>
                                <td width="100pt">Jenis Kelamin</td>
                                <td><?= $row['jenis_kelamin']; ?></td>   
                            </tr>
                            <tr>
                                <td width="100pt">Tgl. lahir</td>
                                <td><?= $row['tgl_lahir']; ?></td>   
                            </tr>
                            <tr>
                                <td width="100pt">No. Telepon</td>
                                <td><?= $row['telepon']; ?></td>   
                            </tr>
                            <tr>
                                <td width="100pt">E-Mail</td>
                                <td><?= $row['email']; ?></td>   
                            </tr>
                            <tr>
                                <td width="100pt">Alamat</td>
                                <td><?= $row['alamat']; ?></td>   
                            </tr>
                        </table>
                    </div>
                    <div class="card-action">
                        <a href="biodata.php">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col s4 m4">
            </div>
        </div>
    </div>
</div>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
</body>
</html