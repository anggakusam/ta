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
    
    <!-- ISI KONTEN -->
    <h2>Data Tersimpan</h2>

<?php
$sql = "select 
          no_reg, nama, tgl_lahir, alamat, no_hp
        from pendaftaran ";
$query = mysqli_query($con, $sql);
while ($tampil = mysqli_fetch_array($query)) {

echo"

No. Registrasi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$tampil['no_reg']."
<br>
Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ".$tampil['nama']."
<br>
Tanggal Lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$tampil['tgl_lahir']."
<br>
Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: ".$tampil['alamat']."
<br>
No HP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: ".$tampil['no_hp']."
<br>
<br>
";
}
?>
    

    <!-- ISI KONTEN SAMPE SINI-->
    </div>
    <!-- FOOTER -->
    <?php include "komponen/footer.php" ?>
    <!-- FOOTER SAMPE SINI-->
  </div>


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

  <!-- KOMPONEN JS -->
  <?php include "komponen/komponen-js.php" ?>
  
  </body>
</html>


<?php
}
else{
    header("location:masuk.php");
}
?>