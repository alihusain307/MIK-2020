  <!DOCTYPE html>
  <html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col s12 m12">
          <div class="card" style="padding: 20px">
            <form action="insert_biodata.php" method="POST" enctype="multipart/form-data">
              <div class="card-content">
                <div class="row">
                  <div class="row">
                    <div class="input-field col s6">
                      <input placeholder="Nama Depan" id="nama_depan" type="text" class="validate" name="nama_depan">
                      <label for="nama_depan">Nama Depan</label>
                    </div>
                    <div class="input-field col s6">
                      <input placeholder="Nama Belakang " id="nama_belakang" type="text" class="validate" name="nama_belakang">
                      <label for="nama_belakang">Nama Belakang </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="Masukan Tanggal" id="tgl_lahir" type="date" class="validate" name="tgl_lahir">
                      <label for="tgl_lahir">Tanggal Lahir</label>
                    </div>
                  </div>
                  <div class="row" style="margin-bottom: 45px; ">
                    <div class="col s12">
                      <label for="agama">Agama</label>
                      <select class="browser-default" id="agama" name="agama">
                        <option value="" disabled selected>Choose your option</option>
                        <?php $agama = array('Islam', 'Protestan', 'Khatolik', 'Hindu', 'Buddha', 'Konghuchu') ; ?>
                        <?php foreach ($agama as $key) :?>
                          <option value="<?= $key; ?>" ><?= $key; ?></option>
                        <?php endforeach ?> 
                      </select>
                    </div>
                  </div>
                  <div class="row" style="margin-bottom: 25px">
                    <div class="input-field col s12">
                      <label>Jenis Kelamin</label><br><br>
                      <p>
                        <label for="laki-laki">
                          <input name="jenis_kelamin" value="L" id="laki-laki" type="radio"/>
                          <span >Laki-laki</span>
                        </label>
                      </p>
                      <p>
                        <label for="perempuan">
                          <input name="jenis_kelamin" value="P" id="perempuan" type="radio" />
                          <span>Perempuan</span>
                        </label>
                      </p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col s12">
                      <label for="alamat">Alamat</label>
                      <textarea id="alamat" class="materialize-textarea validate" name="alamat" placeholder="Masukan Alamat"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="input-field col s12">
                      <input placeholder="Masukan No.Telp" id="telepon" name="telepon" type="number" class="validate">
                      <label for="telepon">Nomor Telepon</label>
                    </div>
                    <div class="row">
                      <div class="input-field col s12">
                        <input placeholder="Masukan Email" id="email" name="email" type="email" class="validate">
                        <label for="email">Email</label>
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
        </div>


        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="assets/js/materialize.min.js"></script>
        <script>
          $('#alamat').val('New Text');
          M.textareaAutoResize($('#alamat'));
        </script>
      </body>
      </html>