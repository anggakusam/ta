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
      <form method="POST" action="aksi.php?aksi=edit-pasien">
      <?php
      $noreg = $_GET['no_reg'];
      $sql = "select * from pendaftaran where no_reg = ".$noreg." ";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      echo"
      <div class='form-group'>
        <label for='nama'>Nama</label>
        <input type='hidden' name='no_reg' value='".$data['no_reg']."' required>
        <input type='text' class='form-control' id='nama' name='nama' aria-describedby='emailHelp' placeholder='Masukan Nama' value='".$data['nama']."' required>
      </div> 
      <div class='form-group'>
        <label for='tgl_lahir'>Tanggal Lahir</label>
        <input type='date' class='form-control' id='tgl_lahir' name='tgl_lahir' value='".$data['tgl_lahir']."'  required>
      </div> 
      <div class='form-group'>
        <label for='alamat'>Alamat</label>
        <textarea class='form-control' id='alamat' name='alamat' rows='3' required>".$data['alamat']."</textarea>
      </div>
      <div class='form-group'>
        <label for='no_hp'>No HP</label>
        <input type='text' class='form-control' id='no_hp' name='no_hp' aria-describedby='emailHelp' placeholder='Masukan No HP' value='".$data['no_hp']."'  required>
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
                  <a href='aksi.php?aksi=hapus-data-pasien&&no_reg=".$data['no_reg']."'><button type='button' class='btn btn-danger'>Ya</button></a>
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