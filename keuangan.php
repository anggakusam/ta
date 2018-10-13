<?php
include "koneksi.php";
session_start();
if(isset($_SESSION['admin'])) {
    
?>

<html>
<<head>
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
  <h2>Data Keuangan</h2>
    <table id='tablePasien' class='display'>
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal Kunjungan</th>
          <th>No Reg</th>
          <th>Nama</th>
          <th>Jenis Berobat</th>
          <th>Tindakan</th>
          <th>Biaya Berobat</th>
          <th>Biaya Obat</th>
          <th>Total</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

  <?php

  $sql = "select * from pembayaran";
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
                <td>". $data['jenis_berobat'] ."</td>
                <td>". $data['tindakan'] ."</td>
                <td>". $data['biaya_berobat'] ."</td>
                <td>". $data['biaya_obat'] ."</td>
                <td>". $data['total_harga'] ."</td>
                <td> 
                  <Center>
                 
                    <a href=#.php>
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