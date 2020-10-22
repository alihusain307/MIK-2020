
<?php 
$localhost = 'localhost';
$username = 'root';
$password = '';
$database = 'registrasidata';

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
    $telp = $_POST['telp1'];
    $telp_wali = $_POST['telp_wali'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $prog_akademik = $_POST['prog_akademik'];
    $tema_pelatihan = $_POST['tema_pelatihan'];
    $tempat_pelatihan = $_POST['tempat_pelatihan'];
    $mitra_pelatihan = $_POST['mitra_pelatihan'];

    $result = "INSERT INTO registrasi VALUES ('', '$nama', '$tempat_lahir', '$tanggal_lahir', '$nik', '$email', '$telp', '$telp_wali', '$pekerjaan', '$alamat', '$prog_akademik', '$tema_pelatihan', '$tempat_pelatihan', '$mitra_pelatihan', )";

    $sql = mysqli_query($koneksi, $result);

    if ($sql) {
        echo "<script>alert('Data Berhasil ditambahkan');</script>";
    } else {
        echo "<script>alert('Data Gagal ditambahkan');</script>";
    }
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Form X PHP</title>
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
                                <td>Saya Yang bertandatangan di bawah ini</td>
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
                                <td>: <textarea id="alamat" cols="40" rows="5" name="alamat" placeholder="Masukan Alamat" required></textarea><br></td>
                            </tr>
                            <tr>
                                <td><label for="prog_akademik">Program Akademik</label></td>
                                <td>: <input type="text" name="prog_akademik" placeholder="Masukan Program Akademik" required></td>
                            </tr>
                            <tr>
                                <td><label for="tema_pelatihan">Tema Pelatihan</label></td>
                                <td>: <input type="text" name="tema_pelatihan" placeholder="Masukan Tema Pelatihan" required></td>
                            </tr>
                            <tr>
                                <td><label for="tempat_pelatihan">Tempat Pelatihan</label></td>
                                <td>: <input type="text" name="tempat_pelatihan" placeholder="Masukan Tempat Pelatihan" required></td>
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
                        <tr>
                            <td>1</td>
                            <td>M. Iqbal Adenan</td>
                            <td>Kuala Kapuas</td>
                            <td>17 Oktober 1992</td>
                            <td>085249099652</td>
                            <td>kumpultugas17@gmail.com</td>
                            <td><button>Edit</button> <button>Hapus</button></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Agus Setiawan</td>
                            <td>Banjarmasin</td>
                            <td>4 Agustus 1992</td>
                            <td>087843969674</td>
                            <td>agus@gmail.com</td>
                            <td><button>Edit</button> <button>Hapus</button></td>
                        </tr>
                    </table>
                    </td>
                  </tr>
              </table>
</body>
</center>
</html>