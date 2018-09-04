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
    <button a href="data-obat.php">Lihat Data</button>
    <!-- ISI KONTEN -->
   
    <div class="form-group">
        <h2>Obat</h2>  
    </div>
    <div class="container-fluid">
      <form method="POST" action="aksi.php?aksi=obat">
        <div class="form-group">
          <label for="nama_obat">Nama Obat</label>
          <input type="text" class="form-control" id="nama_obat" name="nama_obat" aria-describedby="emailHelp" placeholder="Nama Obat" autofocus required>
        </div> 
        <div class="form-group">
          <label for="jenis_obat">Jenis Obat</label>
          <select class="form-control" name="jenis_obat">
            <option value="Sirup">Sirup</option>
            <option value="Tablet">Tablet</option>
            <option value="Salep">Salep</option>
            <option value="Pil">Pil</option>
            <option value="Kapsul">Kapsul</option>
</select>
       </div> 
        <div class="form-group">
          <label for="harga_obat">Harga Obat</label>
          <input type="text" class="form-control" id="harga_obat" name="harga_obat" aria-describedby="emailHelp" placeholder="Harga Obat" autofocus required>
        </div> 
        <div class="form-group">
          <label for="jumlah_obat">Jumlah Obat</label>
          <input type="text" class="form-control" id="jumlah_obat" name="jumlah_obat" aria-describedby="emailHelp" placeholder="Jumlah Obat" autofocus required>
        </div> 
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" aria-describedby="emailHelp" placeholder="Keterangan" required>
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

