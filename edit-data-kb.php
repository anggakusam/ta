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
      <form method="POST" action="aksi.php?aksi=edit-kb">
      <?php
      $idkb = $_GET['id_kb'];
      $sql = "select * from kb where id_kb = ".$idkb." ";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      echo"
      <div class='form-group'>
              <label for='no_reg'>No Reg</label>
              <input type='hidden' name='id_kb' value='".$data['id_kb']."' required>
            <input type='text' class='form-control' id='no_reg' name='no_reg' aria-describedby='emailHelp' placeholder='Masukan No reg' value='".$data['no_reg']."' readonly>
      </div> 
      <div class='form-group'>
              <label for='nama'>Nama</label>
              <input type='text' class='form-control' id='nama' name='nama' aria-describedby='emailHelp'   value='".$data['nama']."' readonly>
      </div> 
      <div class='form-group'>
                <label for='berat_badan'>Berat Badan</label>
                  <input type='text' class='form-control'  id='berat_badan' name='berat_badan' value='".$data['berat_badan']."' required>
      </div> 
      <div class='form-group'>
                <label for='tekanan_darah'>Tekanan Darah</label>
                <input type='text' class='form-control' id='tekanan_darah' name='tekanan_darah' value='".$data['tekanan_darah']."' required>
      </div> 
      <div class='form-group'>
                <label for='metode_kb'>Metode KB</label>
                <select class='form-control' name='metode_kb'>
                      <option value='value='".$data['metode_kb']."'>".$data['metode_kb']." </option>
                      <option value='Cyclo'>Cyclo ( suntik 1 bulan )</option>
                      <option value='Depo'>Depo ( Suntik 3 bulan )</option>
                      <option value='Pil Laktasi'>Pil Laktasi</option>
                      <option value='Pil KB: Trinordiol'>Pil KB: Trinordiol</option>
                      <option value='Pil KB'>PIL KB</option>
                      <option value='Andalan'>Andalan</option>
                      <option value='IUD COPPERTY'>IUD COPPERTY</option>
                  </select>
      </div>
                  <div class='form-group'>
                <label for='jadwal_kunjungan_ulang'>Jadwal Kunjungan Ulang</label>
                  <input type='date' class='form-control'  id='jadwal_kunjungan_ulang' name='jadwal_kunjungan_ulang' value='".$data['jadwal_kunjungan_ulang']."' required>
      </div> 
      <div class='form-group'>
                <label for='keterangan'>Keterangan</label>
                  <input type='text' class='form-control'  id='keterangan' name='keterangan' value='".$data['keterangan']."' required>
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
                  <a href='aksi.php?aksi=hapus-data-kb&&id_kb=".$data['id_kb']."'><button type='button' class='btn btn-danger'>Ya</button></a>
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