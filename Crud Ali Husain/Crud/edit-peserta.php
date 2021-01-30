<?php 
include 'koneksi.php';

$id_peserta = $_GET['id_peserta'];

$sql = $koneksi->query("SELECT * FROM peserta WHERE id_peserta = '$id_peserta'");

$row = mysqli_fetch_assoc($sql);

// var_dump($row);
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 </head>
 <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Pendaftaran Siswa Baru</h1>
                <div class="row">
                    <div class="col-md-12">
                        <h1>Edit Data</h1>
                        <form action="update.php" method="POST">
                            <div class="form-group">
                                <input type="hidden" name="id_peserta" value="<?= $row['id_peserta'];?>">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Nama Peserta</label>
                                <input type="text" name="nama_peserta" class="form-control" value="<?= $row['nama_peserta']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk" value="L"<?= $row['jk']== 'L' ? 'checked' : '' ?>>Laki-laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk" value="P" <?= $row['jk']== 'P' ? 'checked' : '' ?>>Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control" ><?= $row['alamat'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label">Agama</label>
                                <select name="agama" class="form-control">
                                    <option value="" selected disabled></option>
                                    <?php $agama= array('Islam', 'Kristen Katholik', 'Kristen Protestan', 'Hindu', 'Budha'); ?>
                                    <?php foreach ($agama as $key) : ?>
                                        <option value="<?= $key; ?>"<?= $row['agama']== $key ? 'selected' : '' ?>>
                                            <?=  $key; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="peserta.php" class="btn btn-default">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js" ></script>
    <script src="assets/js/bootstrap.min.js" ></script>
 </body>
 </html>