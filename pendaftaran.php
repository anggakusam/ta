<html>
  <head>
    <title>
      Bidan
    </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  </head>
  <body>
    
    
    <div class="container-fluid">
      <div class="row">

        <!--KONTEN KIRI-->
        <div class="col-md-3">
            <h1>Pendaftaran</h1>
        </div>


        <!--KONTEN ISI-->
        <div class="col-md-9 p-3">
          <div class="row">
            <?php include "menu.php"; ?>
          </div>
          <hr>
            <form method="POST" action="aksi.php?aksi=daftar">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp" placeholder="Masukan Nama" autofocus required>
                </div> 
                <div class="form-group">
                  <label for="tgl_lahir">Tanggal Lahir</label>
                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                </div> 
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" id="alamat" name="alamat" rows="3" required> </textarea>
                </div>
                <div class="form-group">
                    <label for="no_hp">No HP</label>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" aria-describedby="emailHelp" placeholder="Masukan No HP" required>
                  </div> 
                  
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Simpan</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Apakah Anda Yakin Akan Menyimpan Data Ini?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>