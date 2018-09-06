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
      <form method="POST" action="aksi.php?aksi=imunisasi">
    
    
    <!-- ISI KONTEN -->
    <div class="form-group">
        <h2>Imunisasi</h2>  
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
          <label for="nama_bayi">Nama Bayi</label>
            <input type="text" class="form-control"  id="nama_bayi" name="nama_bayi" required>
      </div> 
            <div class="form-group">
          <label for="berat_badan_bayi">Berat Badan Bayi</label>
          <input type="text" class="form-control" id="berat_badan_bayi" name="berat_badan_bayi" required>
      </div> 
            <div class="form-group">
          <label for="lingkar_kepala_bayi">Lingkar Kepala Bayi</label>
          <input type="text" class="form-control" id="lingkar_kepala_bayi" name="lingkar_kepala_bayi" required>
      </div> 
            <div class="form-group">
          <label for="suhu">Suhu Badan</label>
          <input type="text" class="form-control" id="suhu" name="suhu" aria-describedby="emailHelp"  required>
      </div> 
            <div class="form-group">
          <label for="jenis_imunisasi">Jenis Imunisasi</label>
          <select class="form-control" name="jenis_imunisasi">
                <option value="BCG + Polio">BCG + Polio</option>
                <option value="HB-O">HB-O</option>
                <option value="Pentabio + Polio">Pentabio + Polio</option>
                <option value="Pentabio + Polio + Paracetamol">Pentabio + Polio + Paracetamol</option>
                <option value="Campak Rubela">Campak Rubela</option>
                <option value="Tetanus Difteri">Tetanus Difteri</option>
            </select>
          </div> 
              <div class="form-group">
          <label for="tgl_lahir_bayi">Tanggal Lahir Bayi</label>
          <input type="date" class="form-control" id="tgl_lahir_bayi" name="tgl_lahir_bayi" aria-describedby="emailHelp"  required>
      </div> 
      <div class="form-group">
          <label for="jadwal_kunjungan_ulang">Jadwal Kunjungan Ulang</label>
            <input type="date" class="form-control"  id="jadwal_kunjungan_ulang" name="jadwal_kunjungan_ulang" required>
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