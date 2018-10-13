<?php
include "koneksi.php";
session_start();
if(isset($_SESSION['admin'])) {
    
?>
<html>
<head>
  <!-- KOMPONEN HEAD-->
  <?php include "komponen/komponen-head.php"; ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  
  <!-- Navigation-->
  <?php include "komponen/menu.php"; ?>


  <div class="content-wrapper">
    <div class="container-fluid">
      <form method="POST" action="aksi.php?aksi=umum">

    <!-- ISI KONTEN -->
      <div class="form-group">
        <h2>Kunjungan Umum</h2>  
       </div> 
      <div class="form-group">
        <label for="no_reg">No Reg</label>
        <input type="text" class="form-control" id="no_reg" name="no_reg" aria-describedby="emailHelp" onkeyup="autofill()" placeholder="Masukan No reg" autofocus required>
      </div> 
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="emailHelp"  readonly>
      </div> 
      <div class="form-group">
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir"  readonly required>
      </div> 
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3"  readonly required> </textarea>
      </div>
      <div class="form-group">
          <label for="keluhan">Keluhan</label>
          <input type="text" class="form-control" id="keluhan" name="keluhan" aria-describedby="emailHelp" required>
      </div> 
        <div class="form-group">
          <label for="terapi">Obat</label>
            <select class="form-control" name="terapi1">
            <option value="-">-</option>
              <?php 
                $query = "select nama_obat, harga_obat from obat order by nama_obat";
                $sql1 = mysqli_query($con, $query);

                while($data = mysqli_fetch_array($sql1)){
                  echo "<option value='".$data['nama_obat']."-".$data['harga_obat']."'>".$data['nama_obat']."</option>";
                }
              ?>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="terapi2">
            <option value="-">-</option>
              <?php 
                $sql2 = mysqli_query($con, $query);

                while($data = mysqli_fetch_array($sql2)){
                  echo "<option value='".$data['nama_obat']."-".$data['harga_obat']."'>".$data['nama_obat']."</option>";
                }
              ?>
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="terapi3">
            <option value="-">-</option>
              <?php 
                $sql3 = mysqli_query($con, $query);

                while($data = mysqli_fetch_array($sql3)){
                  echo "<option value='".$data['nama_obat']."-".$data['harga_obat']."'>".$data['nama_obat']."</option>";
                }
              ?>
            </select>
        </div>
         
      <div class="form-group">
          <label for="biaya_berobat">Biaya Berobat</label>
          <input type="text" class="form-control" id="biaya_berobat" name="biaya_berobat" aria-describedby="emailHelp"  required>
      </div> 
      <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <input type="text" class="form-control" id="keterangan" name="keterangan" aria-describedby="emailHelp"  required>
      </div> 
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Simpan</button>


          <!-- Simpan Modal -->
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
    <!-- ISI KONTEN SAMPE SINI-->
    </div>
    <!-- FOOTER -->
    <?php include "komponen/footer.php" ?>
    <!-- FOOTER SAMPE SINI-->
  </div>
  <!-- KOMPONEN JS -->
  <?php include "komponen/komponen-js.php" ?>

  
  <!-- JAVA SCRIPT -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
        function autofill(){
            var no_reg = $("#no_reg").val();
            $.ajax({
                url : 'autofill-ajax.php',
                data  :  'no_reg='+no_reg,
            }).success(function(data){
                var json = data,
                obj = JSON.parse(json);
                $("#nama").val(obj.nama);
                $("#tgl_lahir").val(obj.tgl_lahir);
                $("#alamat").val(obj.alamat);
                $("#no_hp").val(obj.no_hp);

            });
        }
    </script>
  
  </body>
</html>
<?php
}
else{
    header("location:masuk.php");
}
?>
