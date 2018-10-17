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
        <h2>Edit Data Bersalin</h2>  
    </div> 
    <div class="container-fluid">
      <form method="POST" action="aksi.php?aksi=edit-persalinan">
      <?php
      $idpersalinan = $_GET['id_persalinan'];
      $sql = "SELECT * from persalinan where id_persalinan = ".$idpersalinan." " ;
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      echo"
      <div class='form-group'>
            <label for='no_reg'>No Reg</label>
            <input type='hidden' name='id_persalinan' value='".$data['id_persalinan']."' required>
            <input type='text' class='form-control' id='no_reg' name='no_reg' aria-describedby='emailHelp' placeholder='Masukan No reg' value='".$data['no_reg']."' readonly>
      </div> 
      <div class='form-group'>
            <label for='nama'>Nama</label>
            <input type='text' class='form-control' id='nama' name='nama' aria-describedby='emailHelp' value='".$data['nama']."' readonly>
      </div> 
      <div class='form-group'>
            <label for='nama_suami'>Nama Suami</label>
            <input type='text' class='form-control' id='nama_suami' name='nama_suami' aria-describedby='emailHelp' value='".$data['nama_suami']."' readonly>
      </div> 
      
      <div class='form-group'>
              <label for='taksiran_persalinan'>Taksiran Persalinan</label>
                <input type='datetime-local' class='form-control'  id='taksiran_persalinan' name='taksiran_persalinan' required>
      </div> 
     <div class='form-group'>
              <label for='diagnosa'>Diagnosa</label>
              <input type='text' class='form-control' id='diagnosa' name='diagnosa' aria-describedby='emailHelp' value='".$data['diagnosa']."' required>
      </div> 
      <div class='form-group'>
              <label for='jenis_kelamin'>Jenis Kelamin</label><br>
              <label for='laki'>Laki-laki</label>
                <input type='radio' id='laki' name='jenis_kelamin' value='Laki - Laki' checked>
              &nbsp;&nbsp;&nbsp;
              <label for='perempuan'>Perempuan</label>
                <input type='radio' id='perempuan' name='jenis_kelamin' value='Perempuan'><br><br>
      </div> 
      <div class='form-group'>
              <label for='jam_lahir'>Tanggal Lahir</label>
                <input type='datetime-local' class='form-control'  id='jam_lahir' name='jam_lahir' required>
      </div> 
                <div class='form-group'>
              <label for='berat_badan'>Berat Badan</label>
              <input type='text' class='form-control' id='berat_badan' name='berat_badan' aria-describedby='emailHelp' value='".$data['berat_badan']."' required>
      </div> 
                <div class='form-group'>
              <label for='panjang_badan'>Panjang Badan</label>
              <input type='text' class='form-control' id='panjang_badan' name='panjang_badan' aria-describedby='emailHelp' value='".$data['panjang_badan']."'  required>
      </div> 
      <div class='form-group'>
              <label for='penolong'>Penolong</label>
              <input type='text' class='form-control' id='penolong' name='penolong' aria-describedby='emailHelp' value='".$data['penolong']."'  required>
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
                  <a href='aksi.php?aksi=hapus-data-bersalin&&id_persalinan=".$data['id_persalinan']."'><button type='button' class='btn btn-danger'>Ya</button></a>
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