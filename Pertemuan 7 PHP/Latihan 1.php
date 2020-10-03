<?php 
$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'database_php';

$koneksi = mysqli_connect($localhost, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: ". mysqli_connect_error());
}
echo "Koneksi Berhasil";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nik = $_POST['nik'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $telp_wali = $_POST['telp_wali'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $program_akademi = $_POST['program_akademik'];
    $tema_pelatihan = $_POST['tema_pelatihan'];
    $mitra_pelatihan = $_POST['mitra_pelatihan'];
    // var_dump($nama, $tempat_lahir, $tanggal_lahir, $nik, $email, $telp, $telp_wali, $pekerjaan, $alamat, $prog_akademik, $tema_pelatihan, $tempat_pelatihan, $mitra_pelatihan);
    $result = "INSERT INTO registrasi VALUES ('', '$nama', '$tempat_lahir,' '$tanggal_lahir', '$nik', '$email', '$telp', '$telp_wali', '$pekerjaan', '$alamat', '$program_akademi', '$tema_pelatihan', '$mitra_pelatihan', '$tempat_pelatihan')";

    $sql = mysqli_query($koneksi, $result);

    if ($sql) {
        echo "<script>alert('Data Berhasil ditambahkan');</script>";
    } else {
        echo "<script>alert('Data Gagal ditambahkan');</script>";
    }
}

    $rows = "SELECT * FROM registrasi";
    $row = mysqli_query($koneksi, $rows);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check</title>
</head> 
<table align="center" width="700">
    <tr>
        <td>
            <table>
                  <tr>
                      <td align="center" width="800"><b>FORM KOMITMEN PARTISIPASI<br>PROGRAM PEMBERIAN BANTUAN PEMERINAH<br>DIGITAL TALENT SCHOOLARSHIP TAHUN 2020</b></td>
                  </tr>
            </table>
                <table>
                    <tr>
                      <td>
            <table border="1">
                 <tr>
                    <td> <i> Formulir ini untuk diisi (di ketik atau di tulis tangan dengan jelas) kemudian di unggah/upload di akun digitalent.kominfo.go.id oleh masing-masing peserta di <b> awal</b> pelaksanaan pelatihan.</i></td>
                </tr>
            </table>
                <form action="" method="POST">
                    <table>
                            <tr>
                                <td width="250">Saya Yang bertandatangan di bawah ini</td>
                                <td>:</td>
                            </tr>
                            <tr>
                                <td><label for="nama">Nama Lengkap (Sesuai KTP)</label></td>
                                <td> : <input type="text" name="nama" placeholder="Masukan Nama Lengkap" required></td>
                            </tr>
                            <tr>
                                <td><label for="tempat_lahir">Tempat Lahir</label></td>
                                <td> : <input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir" required><br></td>
                           </tr>
                           <tr>
                               <td><label for="tanggal_lahir">Tanggal Lahir </label></td>
                               <td>: <input type="date" name="tanggal_lahir" required><br></td>
                           </tr>
                           <tr>
                                <td><label for="nik">NIK/NIP</label></td>
                                <td>: <input type="text" name="nik" placeholder="Masukan NIK/NIP" required></td>
                            </tr>
                            <tr>
                                <td><label for="email">E-Mail Aktif</label></td>
                                <td>: <input type="text" name="email" placeholder="Masukan Email" required></td>
                            </tr>
                            <tr>
                                <td><label for="telp">No. Hp Aktif</label> </td>
                                <td>: <input type="text" name="telp" placeholder="Masukan No Telp" required></td>
                            </tr>
                            <tr>
                                <td><label for="telp_wali">No Hp (Wali/Atasan)</label> </td>
                                <td>: <input type="text" name="telp_wali" placeholder="Masukan No Telp"required></td>
                            </tr>
                            <tr>
                                <td><label for="pekerjaan">Pekerjaan</label></td>
                                <td>: <input type="text" name="pekerjaan" placeholder="Pekerjaan" required></td>
                            </tr>
                            <tr>
                                <td><label for="alamat">Alamat</label></td>
                                <td>: <textarea cols="40" rows="5" name="alamat" placeholder="Masukan Alamat" required></textarea><br></td>
                            </tr>
                            <tr>
                                <td><label for="program_akademik">Program Akademik</label></td>
                                <td>: <input type="text" name="program_akademik" placeholder="Masukan Program Akademik" required></td>
                            </tr>
                            <tr>
                                <td><label for="tema_pelatihan">Tema Pelatihan</label></td>
                                <td>: <input type="text" name="tema_pelatihan" placeholder="Masukan Tema Pelatihan" required></td>
                            </tr>
                            <tr>
                                <td><label for="mitra_pelatihan">Mitra Pelatihan</label></td>
                                <td>: <input type="text" name="mitra_pelatihan" placeholder="Masukan Mitra Pelatihan" required></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><button type="submit" name="submit">Kirim</button>|<button type="button">Batal</button></td>
                            </tr>
                   </table>
                </form>
                    <table>
                      <tr>
                          <td>
                            <table border="1">
                                <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>Tempat Lahir</td>
                                    <td>Tgl Lahir</td>
                                    <td>No. Hp</td>
                                    <td>Email</td>
                                    <td>Aksi</td>
                                </tr>
                                <?php $no = 1; ?>
                                <?php 
                                foreach ($row as $key) : ?>
                                <tr>
                                    <td><?= $no;?></td>
                                    <td><?= $key['nama']; ?></td>
                                    <td><?= $key['tempat_lahir'];?></td>
                                    <td><?= $key['tanggal_lahir'];?></td>
                                    <td><?= $key['telp'];?></td>
                                    <td><?= $key['nik'];?></td>
                                    <td><button>Edit</button> <button>Hapus</button></td>
                                </tr>
                                <?php $no++ ?>
                                <?php endforeach; ?>
                            </table>
                    </td>
                  </tr>
              </table>
</body>
</center>
</html>