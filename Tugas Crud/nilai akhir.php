 <?php 
$conn= mysqli_connect("localhost","root", "","crud_alihusain");
$result= mysqli_query ($conn, "SELECT * FROM nilai_akhir");
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
                    <div class="col-6"><a href="add-nilai.php" class="btn btn-primary btn-sm float-right">Tambah</a></div>
                </div>
                
                <table class="table table-bordered table-sm">
                    <thead>
                       <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Nilai UTS</th>
                            <th>Nilai UAS</th>
                            <th>Rata-rata</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead> 
                    <tbody>
                        <tr>
                            <?php $no = 1; ?>
                            <?php foreach ($result as $row): ?>
                                <td><?= $no++; ?></td>
                                <td><?php echo $row['nim'];?></td>
                                <td><?php echo $row['nama_lengkap'];?></td>
                                <td><?php echo $row['uts'];?></td>
                                <td><?php echo $row['uas'];?></td>
                                <td><?php echo $row['rt2'];?></td>
                                <td><?php echo $row['keterangan'];?></td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm">Detail</a>
                                    <a href="edit-nilai akhir.php ?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm">Hapus</a></td>
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