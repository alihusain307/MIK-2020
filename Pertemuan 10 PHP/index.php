  <?php 
  include 'koneksi.php';
  $sql = $koneksi->query("SELECT * FROM biodata");

if (isset($_POST['btnsearch'])) {
  $search = $_POST['search'];
  $sql = $koneksi->query("SELECT * FROM biodata WHERE nama LIKE '%". $search ."%'");

  if (mysqli_num_rows($sql) == 0) {
    $sql = $koneksi->query("SELECT * FROM biodata"); 
      echo '<script>alert("Data Tidak ditemukan!")</Script>';
  }

}
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col s12 m12">
          <h3>Biodata</h3>
          <div class="row">
            <div class="col s12 m12">
              <div class="card grey darken-3 white-text">
                <div class="card-content">
                  <div class="row">
                    <form action="" method="POST">
                      <div class="col s4 m4">
                        <input class="white-text" type="text" name="search" placeholder="Pencarian Berdasarkan Nama"> 
                      </div>
                      <div class="col s4 m4">
                        <button type="Submit" name="btnsearch" class="btn-small blue darken-1">Search</button>
                      </div>
                    </form>
                    <div class="col s4 m4">
                      <a href="tambah_biodata.php" class="btn-floating btn-large waves-effect waves-light blue right"><i class="material-icons">add</i></a>
                    </div>
                  </div>
                  <table class="highlight responsive-table">
                    <thead>
                      <tr>
                        <th class="center-align">No</th>
                        <th>Nama Lengkap</th>
                        <th class="center-align">Tanggal Lahir</th>
                        <th class="center-align">Jenis Kelamin</th>
                        <th class="center-align">Agama</th>
                        <th class="center-align">Telepon</th>
                        <th class="center-align">Email</th>
                        <th class="center-align">Foto</th>
                        <th class="center-align">Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php $no=1 ?>
                      <?php foreach ($sql as $row) :?>
                        <tr>
                          <td class="center-align"><?= $no++; ?></td>
                          <td><?= $row['nama']; ?></td>
                          <td class="center-align"><?= $row['tgl_lahir']; ?></td>
                          <td class="center-align"><?= $row['jenis_kelamin']=='L' ? 'Laki-laki':'Perempuan'; ?></td>
                          <td class="center-align"><?= $row['agama']; ?></td>
                          <td class="center-align"><?= $row['telepon']; ?></td>
                          <td class="center-align"><?= $row['email']; ?></td>
                          <td class="center-align"><img src="images/myfoto.jpg" width="75px"></td>
                          <td width="250pt" class="center-align">
                            <a href=""class="btn-small cyan accent-3 black-text">Detail</a>
                            <a onclick="return confirm('Edit Data?')" href="edit_biodata.php?id=<?= $row['id']; ?>" class="btn-small yellow accent-3 black-text">Edit</a>
                            <a onclick="return confirm('Hapus Data?')" href="hapus_biodata.php?id=<?= $row['id']; ?>" class="btn-small red accent-3">Hapus</a>
                          </td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
  </body>
  </html>