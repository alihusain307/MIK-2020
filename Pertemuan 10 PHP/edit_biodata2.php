<?php 
include 'koneksi.php';
$id = $_GET['id'];

$sql = $koneksi->query("SELECT * FROM biodata WHERE id ='$id'");


$row = mysqli_fetch_assoc($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

<!--Let browser know website is optimized for mobile-->
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Edit Data</title>
 <link rel="stylesheet" href="">
</head>
<body>
    <di class="container">
        <div class="row">
            <div class="col s12 m12">
                <div class="card">
                    <form action="update_biodata.php" method="POST">
                        <div class="card-content">
                            <div class="row">
                                <input type="hidden=">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Masukan Nama Lengkap" id="nama" name="nama" type="text" class="validate" required value="<?=$row['nama']; ?>">
                                        <label for="nama">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input placeholder="Masukan Tanggal" id="tgl_lahir" type="date" class="validate" name="tgl_lahir" required value="<?=$row['tgl_lahir']; ?>">
                                        <label for="tgl_lahir">Tanggal Lahir</label>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 45px;">
                                    <div class="col s12">
                                        <label for="agama">Agama</label>
                                        <select class="browser-default" id="agama" name="agama" required value="<?=$row['agama']; ?>">
                                            <option value="" disabled selected>Choose your option</option>
                                            <?php $agama = array('Islam', 'Protestan', 'Khatolik', 'Hindu', 'Buddha', 'Konghuchu') ; ?>
                                            <?php foreach ($agama as $key) :?>
                                            <option value="<?= $key; ?>" <?=$row['agama']== $key ? 'selected' :'' ?> ><?= $key; ?></option>
                                            <?php endforeach ?> 
                                        </select>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom: 25px;">
                                    <div class="input-filed col s12">
                                        <label>Jenis Kelamin</label><br><br>
                                        <p>
                                        <label for="laki-laki">
                                          <input name="jenis_kelamin" value="L" id="laki-laki" type="radio" <?=$row['jenis_kelamin']== 'L' ? 'checked' :'' ?>/>
                                          <span >Laki-laki</span>
                                        </label>
                                        </p>
                                        <p>
                                        <label for="perempuan">
                                            <input name="jenis_kelamin" value="P" id="perempuan" type="radio" <?=$row['jenis_kelamin']== 'P' ? 'checked' :'' ?> />
                                            <span>Perempuan</span>
                                        </label>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <label for="alamat">Alamat</label>
                                        <textarea id="alamat" class="materialize-textarea validate" name="alamat" placeholder="Masukan Alamat"><?=$row['alamat']; ?></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-filed col s12">
                                        <input placeholder="Masukan No.Telp" id="telepon" name="telepon" type="number" class="validate" required value="<?=$row['telepon']; ?>">
                                        <label for="telepon">Nomor Telepon</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field ccol s12">
                                        <input placeholder="Masukan Email" id="email" name="email" type="email" class="validate" required value="<?=$row['email']; ?>">
                                        <label for="email">Email</label>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn blue accent-3" type="submit">Simpan</button>
                            <button class="btn red accent-3" type="button">Batal</button>
                            <a href="" class="btn blue-grey accent-3">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </di>

<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script>
    $('#alamat').val('New Text');
    M.textareaAutoResize($('#alamat'));
</script>
</body>
</html>