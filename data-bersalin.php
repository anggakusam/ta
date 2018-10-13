<?php
include "koneksi.php";
session_start();
if(isset($_SESSION['admin'])) {
    
?>

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

  <!-- ISI KONTEN -->
  <div class="content-wrapper">
    <div class="container-fluid">
        <h2>Data Bersalin</h2>
      <table id='tablePasien' class='display'>
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal Kunjungan</th>
            <th>No Reg</th>
            <th>Nama</th>
            <th>Taksiran Persalinan</th>
            <th>Diagnosa</th>
            <th>Jam Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Berat Badan</th>
            <th>Panjang Badan</th>
            <th>Penolong</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>

    <?php

    $sql = "select * from persalinan";
    $query = mysqli_query($con, $sql);
    $nomer = 1;
    if ($query) {

      while ($data = mysqli_fetch_array($query)) {
        
        echo"
        
              <tr>
                  <td>". $nomer ."</td>
                  <td>". $data['tgl_kunjungan'] ."</td>
                  <td>". $data['no_reg'] ."</td>
                  <td>". $data['nama'] ."</td>
                  <td>". $data['taksiran_persalinan'] ."</td>
                  <td>". $data['diagnosa'] ."</td>
                  <td>". $data['jam_lahir'] ."</td>
                  <td>". $data['jenis_kelamin'] ."</td>
                  <td>". $data['berat_badan']  ." kg</td>
                  <td>". $data['panjang_badan']  ." cm</td>
                  <td>". $data['penolong'] ."</td>
                  <td> 
                    <Center>
                      <a href='#'>
                        <i class='fa fa-address-card'></i>
                      </a>
                      </center>
                  </td>
              </tr>
        ";
        $nomer++;
      }
    
    }
    else{
      echo "eror nich datanya ga muncul";
    }
    
    
    ?>
    
        </tbody>
      </table>
    
    
    

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
  <script type="text/javascript">
    $(document).ready( function () {
      $('#tablePasien').DataTable();
    } );
  </script>
  
  </body>
</html>

<?php
}
else{
    header("location:masuk.php");
}
?>