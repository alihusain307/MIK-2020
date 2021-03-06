<?php 
session_start();
if (!isset($_SESSION['password'])) {
    header('location: login.php ');
    exit;
}
include 'koneksi.php';

 $sql= $koneksi->query("SELECT * FROM biodata");

 if (isset($_POST['btnsearch'])) {
  $search = $_POST['search'];
  $sql = $koneksi->query("SELECT * FROM biodata WHERE nama_lengkap LIKE '%". $search ."%'");

  if (mysqli_num_rows($sql) == 0) {
    $sql = $koneksi->query("SELECT * FROM biodata"); 
      echo '<script>alert("Data Tidak ditemukan!")</Script>';
    }
}
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
  <div class="container-fluid">
    <div class="row">
      <div class="col s12 m12">
        <h3>Biodata</h3>
        <div class="row">
          <div class="col s12 m12">
            <div class="card">
              <div class="card-content">
                <div class="row">
                  <form action="" method="POST">
                    <!-- Kolom 1 -->
                    <div class="col s4 m4">
                      <input type="text" name="search" placeholder="Pencarian berdasarkan Nama">
                    </div>
                    <!-- Kolom 2 -->
                    <div class="col s4 m4">
                      <button type="submit" name="btnserach" class="btn-small blue darken-1">Search</button>
                    </div>
                  </form>
                  <!-- Kolom 3 -->
                  <div class="col s4 m4">
                    <a href="tambah-biodata.php" class="btn-floating blue darken-1 right"><i class="material-icons">add</i></a>
                  </div>

                </div>
                <table class="highlight responsive-table">
                  <thead>
                    <tr>
                      <th class="center-align">No</th>
                      <th class="center-align">NIM</th>
                      <th>Nama Lengkap</th>
                      <th class="center-align">Agama</th>
                      <th class="center-align">Jenis Kelamin</th> 
                      <th class="center-align">Jurusan</th>
                      <th class="center-align">Nama Ayah</th>
                      <th class="center-align">Nama Ibu</th>
                      <th class="center-align">Alamat</th>
                      <th class="center-align">Asal Sekolah</th>
                      <th class="center-align">Nomor Telepon</th>
                      <th class="center-align">Nomor Telepon Orang Tua</th>
                      <th class="center-align" width="250pt">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php foreach ($sql as $key) {?>
                      <tr>
                        <td class="center-align"><?= $no++; ?></td>
                        <td><?= $key['nim']; ?></td>
                        <td><?= $key['nama_lengkap']; ?></td>
                        <td class="center-align"><?= $key['agama']; ?></td>
                        <td class="center-align"><?= $key['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan'; ?></td>
                        <td><?= $key['jurusan']; ?></td>
                        <td><?= $key['nama_ayah']; ?></td>
                        <td><?= $key['nama_ibu']; ?></td>
                        <td><?= $key['alamat_rumah']; ?></td>
                        <td><?= $key['asal_sekolah']; ?></td>
                        <td class="center-align"><?= $key['no_hp']; ?></td>
                        <td class="center-align"><?= $key['no_hp_ortu']; ?></td>
                        <td width="229pt" class="center-align"> 
                          <a href="edit.php?id=<?= $key['id']; ?>" onclick = "return confirm('Edit Data?')" class="btn-small yellow accent-3 black-text">Edit</a> 
                          <a href="hapus.php?id=<?= $key['id']; ?>" onclick = "return confirm('Data akan dihapus?')" class="btn-small red accent-3">Hapus</a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col s6 m6">
            <a href="cetak-xls.php" class="btn-small">Print xls</a> 
            <a href="cetak-pdf.php" class="btn-small">Print pdf</a>
          </div>
        </div>

        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
      </body>
      </html>