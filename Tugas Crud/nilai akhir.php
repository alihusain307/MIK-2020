 <?php 
 $conn= mysqli_connect("localhost","root", "","crud_alihusain");
 $result= mysqli_query ($conn, "SELECT * FROM nilai_akhir");

 if (isset($_POST['btnsearch'])) {
  $search = $_POST['search'];
  $result = $conn->query("SELECT * FROM nilai_akhir WHERE nama_lengkap LIKE '%". $search ."%'");

  if (mysqli_num_rows($result) == 0) {
    $result = $conn->query("SELECT * FROM nilai_akhir"); 
      echo '<script>alert("Data Tidak ditemukan!")</Script>';
} else {
  $sql = $conn->query("SELECT * FROM biodata");
}
}
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
                    <div class="col-6"><h3>Data Nilai</h3></div>
                    <form action="" method="POST">
                      <div class="col-4">
                        <input class="white-text" type="text" name="search" placeholder="Pencarian Berdasarkan Nama"> 
                      </div>
                      <div class="col-4">
                        <button type="Submit" name="btnsearch" class="btn btn-primary btn-sm float-left">Search</button>
                      </div>
                      <div class="col-4">
                        <a href="add-nilai.php" class="btn btn-primary btn-sm float-right">Tambah</a>
                      </div>
                    </form>
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
                                <a href="edit-nilai akhir.php?id=<?= $row['id']; ?>;" onclick="return confirm ('Edit Data?')" class="btn btn-warning btn-md">Edit</a> |
                                <a href="hapus.php?id=<?= $row ['id'];?>" onclick="return confirm ('Hapus Data?')" class="btn btn-danger btn-md">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>      
            </table>
        </div>
    </div>
</div>
<script>
   function hapus() {
    var yakin = confirm('Hapus Data?');
    if (yakin) {
       window.location = "hapus.php?id=<?= $row['id']; ?>";
   } else {
      window.location = "nilai akhir.php";

  }
}    
</script>
<script>
    function edit(){
        var edit = confirm('Edit Data?');
        if (edit) {
         window.location = "edit-nilai akhir.php?id=<?= $row['id']; ?>";
     } else {
      window.location = "nilai akhir.php";
    }
}
</script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>