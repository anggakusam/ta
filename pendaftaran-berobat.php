
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

                <table>
                    <tr><td>NO REG</td><td><input type="text" id="no_reg" onkeyup="autofill()"></td></tr>
                    <tr><td>Nama</td><td><input type="text" id="nama" ></td></tr>
                    <tr><td>Tanggal Lahir</td><td><input type="text" id="tgl_lahir" ></td></tr>
                    <tr><td>Alamat</td><td><input type="text" id="alamat" ></td></tr>
                    <tr><td>NO Hp</td><td><input type="text" id="no_hp" ></td></tr>
                </table>

                <!-- JAVA SCRIPT -->
                  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
                  <script type="text/javascript">
                      function autofill(){
                          var no_reg = $("#no_reg").val();
                          $.ajax({
                              url : 'autofill-ajax.php',
                              data  :  'no_reg='+no_reg,
                          }).success(function(data){
                              var json = data,
                              obj = JSON.parse(json);
                              $("nama").val(obj.nama);
                              $("tgl_lahir").val(obj.tanggal_lahir);
                              $("alamat").val(obj.alamat);
                              $("no_hp").val(obj.no_hp);

                          });
                      }
                  </script>


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
  </body>
</html>