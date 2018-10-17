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
        <h2>Edit Data Imunisasi</h2>  
    </div> 
    <div class="container-fluid">
      <form method="POST" action="aksi.php?aksi=edit-imunisasi">
      <?php
      $idimunisasi = $_GET['id_imunisasi'];
      $sql = "select * from imunisasi where id_imunisasi = ".$idimunisasi." ";
      $query = mysqli_query($con, $sql);
      $data = mysqli_fetch_array($query);
      echo"
      <div class='form-group'>
            <label for='no_reg'>No Reg</label>
            <input type='hidden' name='id_imunisasi' value='".$data['id_imunisasi']."' required>
            <input type='text' class='form-control' id='no_reg' name='no_reg' aria-describedby='emailHelp' placeholder='Masukan No reg' value='".$data['no_reg']."' readonly>
      </div> 
      <div class='form-group'>
            <label for='nama'>Nama</label>
            <input type='text' class='form-control' id='nama' name='nama' aria-describedby='emailHelp' value='".$data['nama']."' readonly>
      <div class='form-group'>
              <label for='nama_bayi'>Nama Bayi</label>
                <input type='text' class='form-control'  id='nama_bayi' name='nama_bayi' value='".$data['nama_bayi']."' required>
       </div> 
      <div class='form-group'>
              <label for='berat_badan_bayi'>Berat Badan Bayi</label>
              <input type='text' class='form-control' id='berat_badan_bayi' name='berat_badan_bayi' value='".$data['berat_badan_bayi']."' required>
      </div> 
      <div class='form-group'>
              <label for='lingkar_kepala_bayi'>Lingkar Kepala Bayi</label>
              <input type='text' class='form-control' id='lingkar_kepala_bayi' name='lingkar_kepala_bayi'  value='".$data['lingkar_kepala_bayi']."' required>
      </div> 
      <div class='form-group'>
              <label for='suhu'>Suhu Badan</label>
              <input type='text' class='form-control' id='suhu' name='suhu' aria-describedby='emailHelp'   value='".$data['suhu']."' required>
      </div> 
      <div class='form-group'>
            <label for='jenis_imunisasi'>Jenis Imunisasi</label>
              <select class='form-control' name='jenis_imunisasi'>
                    <option value='BCG + Polio'>BCG + Polio</option>
                    <option value='HB-O'>HB-O</option>
                    <option value='Pentabio + Polio'>Pentabio + Polio</option>
                    <option value='Pentabio + Polio + Paracetamol'>Pentabio + Polio + Paracetamol</option>
                    <option value='Campak Rubela'>Campak Rubela</option>
                    <option value='Tetanus Difteri'>Tetanus Difteri</option>
                </select>
        </div> 
        <div class='form-group'>
              <label for='tgl_lahir_bayi'>Tanggal Lahir Bayi</label>
              <input type='date' class='form-control' id='tgl_lahir_bayi' name='tgl_lahir_bayi' aria-describedby='emailHelp' value='".$data['tgl_lahir_bayi']."' required>
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
                  <a href='aksi.php?aksi=hapus-data-imunisasi&&no_reg=".$data['id_imunisasi']."'><button type='button' class='btn btn-danger'>Ya</button></a>
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