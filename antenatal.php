<?php
include "koneksi.php";
session_start();
if(isset($_SESSION['admin'])) {
    
?>

<?php include "koneksi.php"; ?>
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
    <form method="POST" action="aksi.php?aksi=antenatal">
    
    
    <!-- ISI KONTEN -->
    <div class="form-group">
        <h2>Antenatal Care</h2>  
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
          <label for="diagnosa">Diagnosa</label>
            <input type="text" class="form-control"  id="diagnosa" name="diagnosa" required>
      </div> 
            <div class="form-group">
          <label for="berat_badan">Berat Badan</label>
            <input type="text" class="form-control"  id="berat_badan" name="berat_badan" required>
      </div> 
            <div class="form-group">
          <label for="tekanan_darah">Tekanan Darah</label>
          <input type="text" class="form-control" id="tekanan_darah" name="tekanan_darah" required>
      </div> 
            <div class="form-group">
          <label for="haid_terakhir">Haid Terakhir</label>
          <input type="date" class="form-control" id="haid_terakhir" name="haid_terakhir" required>
      </div>
            <div class="form-group">
          <label for="taksiran_persalinan">Taksiran Persalinan</label>
            <input type="date" class="form-control"  id="taksiran_persalinan" name="taksiran_persalinan" required>
      </div> 
      <div class="form-group">
          <label for="tindakan">Tindakan</label>
          <select class="form-control" name="tindakan">
                <option value="Trimester 1: Asam Folat 30">Trimester 1: Asam Folat 30 </option>
                <option value="Trimester 1: Asam Folat 30 + obat mual">Trimester 1: Asam Folat 30 + obat mual </option>
                <option value="Trimester 1: Asam Folat 30 + obat mual + Vit C">Trimester 1: Asam Folat 30 + obat mual + Vit C </option>
                <option value="Trimester 2: Hufabion 20 + Calcifar 10">Trimester 2: Hufabion 20 + Calcifar 10 </option>
                <option value="Trimester 2: Etabion 30 + Erkade 10">Trimester 2: Etabion 30 + Erkade 10 </option>
                <option value="Trimester 2: Gestiamin Z + Calcifar 20">Trimester 2: Gestiamin Z + Calcifar 20 </option>
                <option value="Trimester 2: Fermia 30 + Licokalk 10">Trimester 2: Fermia 30 + Licokalk 10 </option>
                <option value="Trimester 3: Gestiamin Z 10">Trimester 3: Gestiamin Z 10 </option>
                <option value="Trimester 3: Neurodex 10">Trimester 3: Neurodex 10 </option>
                <option value="Trimester 3: Alinammin F 5">Trimester 3: Alinammin F 5 </option>
            </select>
      </div> 
      <div class="form-group">
          <label for="obat">Obat</label>
            <select class="form-control" name="obat1">
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
            <select class="form-control" name="obat2">
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
          <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control"  id="keterangan" name="keterangan" required>
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