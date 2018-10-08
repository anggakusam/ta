<html>
<head>
  <!-- KOMPONEN HEAD-->
  <?php 
    include "komponen/komponen-head.php"; 
    include "koneksi.php";
  ?>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  
  <!-- Navigation-->
  <?php include "komponen/menu.php"; ?>


  <div class="content-wrapper">
  <div class="container-fluid">
    
    <!-- ISI KONTEN -->
    <div class="form-group">
        <h2>Pendaftaran</h2>  
    </div> 
    <div class="container-fluid">
      <form method="POST" action="aksi.php?aksi=edit-kunjungan">
      <?php
      $idkunjungan = $_GET['id_kunjungan'];
      $sql = "select * from kunjungan_umum where id_kunjungan = ".$idkunjungan." ";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      echo"
      <div class='form-group'>
    <label for='no_reg'>No Reg</label>
    <input type='hidden' name='id_kunjungan' value='".$data['id_kunjungan']."' required>
      <input type='text' class='form-control' id='no_reg' name='no_reg' aria-describedby='emailHelp' placeholder='Masukan No reg' value='".$data['no_reg']."' readonly>
    </div> 
    <div class='form-group'>
      <label for='nama'>Nama</label>
      <input type='text' class='form-control' id='nama' name='nama' aria-describedby='emailHelp' value='".$data['nama']."'  readonly>
    </div>
    <div class='form-group'>
        <label for='keluhan'>Keluhan</label>
        <input type='text' class='form-control' id='keluhan' name='keluhan' aria-describedby='emailHelp' value='".$data['keluhan']."' required>
    </div> 
    


  
    <div class='form-group'>
        <label for='keterangan'>Keterangan</label>
        <input type='text' class='form-control' id='keterangan' name='keterangan' aria-describedby='emailHelp'  value='".$data['keterangan']."' required>
    </div> 
      ";

      ?>
        
          
        <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal' style='float:left;'>Simpan</button>
        <a href="data-pasien.php"><button type='button' class='btn btn-default' style='float:left;'>Batal</button></a>
        

                
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

      <?php
      echo"
      <button type='button' class='btn btn-danger' style='float:right;' data-toggle='modal' data-target='#hapusModal' >Hapus</button>
      ";
      ?>
        
          <!-- Hapus Modal -->
          <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="hapusModalLabel">Hapus Data Pasien</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Apakah Anda Yakin Akan Menghapus Data Ini?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                  <?php
                  echo"
                  <a href='aksi.php?aksi=hapus-data-kunjungan&&id_kunjungan=".$data['id_kunjungan']."'><button type='button' class='btn btn-danger'>Ya</button></a>
                  ";
                  ?>
                </div>
              </div>
            </div>
          </div>
    </div>

    <!-- ISI KONTEN SAMPE SINI-->

    <!-- FOOTER -->
    <?php include "komponen/footer.php" ?>
    <!-- FOOTER SAMPE SINI-->
  </div>



  <!-- KOMPONEN JS -->
  <?php include "komponen/komponen-js.php" ?>
  
  </body>
</html>