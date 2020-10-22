
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Usia</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
 </head>
 <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>Form Input Usia</h4>
                <hr>
                <form action ="act-usia.php" method="POST">

                    <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" class="form-control" name="nama" required>
                    </div>
                
                    <div class="form-group">
                    <label for="usia">Usia:</label>
                    <input type="text" id="usia" class="form-control" name="usia" required>
                    </div>
                    
                    <div class="form-group float-right">
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