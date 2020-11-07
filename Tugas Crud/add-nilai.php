<?php 
include 'config/koneksi 2.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Nilai</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>Form Input Nilai Akhir</h4>
                <hr>
                <form action ="act-nilai akhir.php" method="POST">
                    <div class="form-group">
                    <label for="nim">NIM:</label>
                    <input type="text" id="nim" class="form-control" name="nim" required>
                    </div>
                    
                    <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" class="form-control" name="nama_lengkap" required>
                    </div>
                
                    <div class="form-group">
                    <label for="uts">Nilai UTS:</label>
                    <input type="text" id="uts" class="form-control" name="uts" required>
                    </div>
                    
                    <div class="form-group">
                    <label for="uas">Nilai UAS:</label>
                    <input type="text" id="telp" class="form-control" name="uas" required>
                    </div>
                    
                    <div class="form-group float-right">
                    <a href="nilai akhir.php" class="btn btn-secondary btn-md">Kembali</a>
                    <button name="submit" onclick="submit()" class="btn btn-primary btn-md">Simpan</button>
                   </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function submit() {
            var simpan = confirm('Simpan Data yang DiInput?');
            if (simpan) {
                window.location = 'nilai akhir.php';
            } else {
                window.location = 'add-nilai.php';
            }
        }
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>


