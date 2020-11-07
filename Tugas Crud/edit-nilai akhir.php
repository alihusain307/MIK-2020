 <?php 
include 'config/koneksi 2.php';
$id = $_GET['id'];

$sql  = mysqli_query($koneksi, "SELECT * FROM nilai_akhir WHERE id = $id");

if ($sql) {
    $row= mysqli_fetch_assoc($sql) ;
} else {
    echo "Data Tidak Ditemukan";
}
var_dump($id, $sql, $row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Nilai</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>Form Edit Data Nilai</h4>
                <hr>
                <form action ="act-edit.php" method="POST">
                    <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" id="nim" class="form-control" name="nim" required value="<?=$row['nim']; ?>">
                    </div>
                    
                    <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" class="form-control" name="nama_lengkap" required value="<?=$row['nama_lengkap']; ?>">
                    </div>
                
                    <div class="form-group">
                    <label for="uts">Nilai UTS:</label>
                    <input type="text" id="uts" class="form-control" name="uts" required value="<?=$row['uts']; ?>">
                    </div>
                    
                    <div class="form-group">
                    <label for="uas">Nilai UAS:</label>
                    <input type="text" id="telp" class="form-control" name="uas" required value="<?=$row['uas']; ?>">
                    </div>
                    
                    <div class="form-group float-right">
                    <a href="nilai akhir.php" class="btn btn-secondary btn-md">Kembali</a>
                    <button name="submit" class="btn btn-primary btn-md">Simpan</button>
                   </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>


