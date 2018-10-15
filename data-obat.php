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
  <h2>Data Obat</h2>
    <table id='tablePasien' class='display'>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Obat</th>
          <th>Jenis Obat</th>
          <th>Harga Obat</th>
          <th>Keterangan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

  <?php

  $sql = "select * from obat";
  $query = mysqli_query($con, $sql);
  $nomer = 1;
  if ($query) {

    while ($data = mysqli_fetch_array($query)) {
      
      echo"
      
            <tr>
                <td>". $nomer ."</td>
                <td>". $data['nama_obat'] ."</td>
                <td>". $data['jenis_obat'] ."</td>
                <td>". $data['harga_obat'] ."</td>
                <td>". $data['keterangan'] ."</td>
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