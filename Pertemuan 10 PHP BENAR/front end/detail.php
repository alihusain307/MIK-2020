<?php 
include '../koneksi.php';

$id = $_GET['id'];

$sql = $koneksi->query("SELECT * FROM produk WHERE id = '$id'");
$row = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html>
<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>

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
                        <img src="images/<?= $row['gambar'] == '' ? 'default.png' : $row['gambar']; ?>">
                        <span class="card-title"><?= $row['nama']; ?></span>
                    </div>
                    <div class="card-content">
                        <table>
                            <tr>
                                <td width="100pt">Harga</td>
                                <td><?='Rp. '.number_format($row['harga'],2,',',',');?></td>   
                            </tr>
                            <tr>
                                <td width="100pt">Deskripsi</td>
                                <td><?= $row['deskripsi']; ?></td>   
                            </tr>
                        </table>
                    </div>
                    <div class="card-action">
                        <a href="index.php">Kembali</a>
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