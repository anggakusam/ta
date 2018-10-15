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
  <h2>Rekap Medis</h2>

  <?php
  $sql = "select 
            no_reg, nama, tgl_lahir, alamat, no_hp
          from pendaftaran 
            
          where no_reg = ".$_GET['no_reg']."
          ";
  $query = mysqli_query($con, $sql);
  $tampil = mysqli_fetch_array($query);
  
  echo"

  
  <a href='print/print-rekap-medis.php?no_reg=".$tampil['no_reg']."' target='_blank'> <button class='btn-primary' style='float:right;'>Cetak Rekap Medik</button></a>

  <br><br>

  No. Registrasi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$tampil['no_reg']."
  <br>
  Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : ".$tampil['nama']."
  <br>
  Tanggal Lahir &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$tampil['tgl_lahir']."
  <br>
  Alamat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: ".$tampil['alamat']."
  <br>
  No HP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp: ".$tampil['no_hp']."
  <br>
  <br>
  ";
  
  ?>
    <h2>Kunjungan Umum</h2>
    <table class="tblDataDosen">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal Kunjungan</th>
          <th>Keluhan</th>
          <th>Terapi</th>
          <th>Keterangan</th>
        </tr>
      </thead>
      <tbody>

  <?php

  
  $sqlDua = "select 
    pendaftaran.no_reg,
    pendaftaran.nama,
    pendaftaran.no_hp,
    pendaftaran.alamat,
    ku.tgl_kunjungan,
    ku.keluhan,
    ku.terapi,
    ku.keterangan

    from pendaftaran 
    inner join kunjungan_umum AS ku ON pendaftaran.no_reg = ku.no_reg 

    where pendaftaran.no_reg = ".$_GET['no_reg']."
  ";
  $queryDua = mysqli_query($con, $sqlDua);
  $nomer = 1;
  if ($queryDua) {

    while ($data = mysqli_fetch_array($queryDua)) {
      
      echo"
      
            <tr>
                <td>". $nomer ."</td>
                <td>". $data['tgl_kunjungan'] ."</td>
                <td>". $data['keluhan'] ."</td>
                <td>". $data['terapi'] ."</td>
                <td>". $data['keterangan']. "</td>
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
    
    <!-- ISI KONTEN-->
    <br>
    <h2>Persalinan</h2>
    <table class="tblDataDosen">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal Kunjungan</th>
          <th>Taksiran Persalinan</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Berat Badan</th>
          <th>Panjang Badan</th>
        </tr>
      </thead>
      <tbody>

  <?php

  
  $sqlTiga = "select tgl_kunjungan, taksiran_persalinan, jam_lahir, jenis_kelamin, berat_badan, panjang_badan from persalinan where no_reg = ".$_GET['no_reg']."
  ";
  $queryTiga = mysqli_query($con, $sqlTiga);
  $nomer = 1;
  if ($queryTiga) {

    while ($data = mysqli_fetch_array($queryTiga)) {
      
      echo"
      
            <tr>
                <td>". $nomer ."</td>
                <td>". $data['tgl_kunjungan'] ."</td>
                <td>". $data['taksiran_persalinan'] ."</td>
                <td>". $data['jam_lahir'] ."</td>
                <td>". $data['jenis_kelamin'] ."</td>
                <td>". $data['berat_badan'] ."</td>
                <td>". $data['panjang_badan'] ."</td>
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

    <!-- ISI KONTEN-->
    <br>
    <h2>Imunisasi</h2>
    <table class="tblDataDosen">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal Kunjungan</th>
          <th>Nama Bayi</th>
          <th>Berat Badan Bayi</th>
          <th>Jenis Imunisasi</th>
          <th>Tanggal Lahir Bayi</th>
          <th>Jadwal Kunjungan Ulang</th>
        </tr>
      </thead>
      <tbody>

  <?php

  
  $sqlTiga1 = "select tgl_kunjungan, nama_bayi, berat_badan_bayi, jenis_imunisasi, tgl_lahir_bayi, jadwal_kunjungan_ulang FROM imunisasi where no_reg = ".$_GET['no_reg']."
  ";
  $queryTiga1 = mysqli_query($con, $sqlTiga1);
  $nomer = 1;
  if ($queryTiga1) {

    while ($data = mysqli_fetch_array($queryTiga1)) {
      
      echo"
      
            <tr>
                <td>". $nomer ."</td>
                <td>". $data['tgl_kunjungan'] ."</td>
                <td>". $data['nama_bayi'] ."</td>
                <td>". $data['berat_badan_bayi'] ."</td>
                <td>". $data['jenis_imunisasi'] ."</td>
                <td>". $data['tgl_lahir_bayi'] ."</td>
                <td>". $data['jadwal_kunjungan_ulang'] ."</td>
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

    <!-- ISI KONTEN-->
    <br>
    <h2>Kunjungan KB</h2>
    <table class="tblDataDosen">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal Kunjungan</th>
          <th>Berat Badan</th>
          <th>Tekanan Darah</th>
          <th>Metode KB</th>
          <th>Jadwal Kunjungan Ulang</th>
        </tr>
      </thead>
      <tbody>

  <?php

  
  $sqlTiga2 = "select tgl_kunjungan, berat_badan, tekanan_darah, metode_kb,  jadwal_kunjungan_ulang FROM kb where no_reg = ".$_GET['no_reg']."
  ";
  $queryTiga2 = mysqli_query($con, $sqlTiga2);
  $nomer = 1;
  if ($queryTiga2) {

    while ($data = mysqli_fetch_array($queryTiga2)) {
      
      echo"
      
            <tr>
                <td>". $nomer ."</td>
                <td>". $data['tgl_kunjungan'] ."</td>
                <td>". $data['berat_badan'] ."</td>
                <td>". $data['tekanan_darah'] ."</td>
                <td>". $data['metode_kb'] ."</td>
                <td>". $data['jadwal_kunjungan_ulang'] ."</td>
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

    
    <!-- ISI KONTEN-->
    <br>
    <h2>Antenatal Care</h2>
    <table class="tblDataDosen">
      <thead>
        <tr>
          <th>No</th>
          <th>Tanggal Kunjungan</th>
          <th>Diagnosa</th>
          <th>Berat Badan</th>
          <th>Tekanan Darah</th>
          <th>TIndakan</th>
          <th>Obat</th>
        </tr>
      </thead>
      <tbody>

  <?php

  
  $sqlTiga3 = "select tgl_kunjungan, diagnosa, berat_badan, tekanan_darah, tindakan, obat FROM antenatal_care where no_reg = ".$_GET['no_reg']."
  ";
  $queryTiga3 = mysqli_query($con, $sqlTiga3);
  $nomer = 1;
  if ($queryTiga3) {

    while ($data = mysqli_fetch_array($queryTiga3)) {
      
      echo"
      
            <tr>
                <td>". $nomer ."</td>
                <td>". $data['tgl_kunjungan'] ."</td>
                <td>". $data['diagnosa'] ."</td>
                <td>". $data['berat_badan'] ."</td>
                <td>". $data['tekanan_darah'] ."</td>
                <td>". $data['tindakan'] ."</td>
                <td>". $data['obat'] ."</td>
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