 <?php 
$conn= mysqli_connect("localhost","root", "","uts_php");
$result= mysqli_query ($conn, "SELECT * FROM usia");
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Akhir</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12" >
                <div class="row mt-2">
                    <div class="col-6"><h3>Data Nilai</h3></div>
                    <div class="col-6"><a href="add-usia.php" class="btn btn-primary btn-sm float-right">Tambah</a></div>
                </div>
                
                <table class="table table-bordered table-sm">
                    <thead>
                       <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Usia</th>
                            <th>Status</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr>
                            <?php $no = 1; ?>
                            <?php foreach ($result as $row): ?>
                                <td><?= $no++; ?></td>
                                <td><?php echo $row['nama'];?></td>
                                <td><?php echo $row['usia'];?></td>
                                <td><?php echo $row['status'];?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>      
                </table>
            </div>
        </div>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>