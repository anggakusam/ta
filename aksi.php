<?php
include "koneksi.php";

switch($_GET['aksi']){
  
  case"daftar":
        
  $nama = $_POST['nama'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];
  $tgl_daftar = date("Y-m-d");

mysqli_query($con, "insert into pendaftaran values(
  '',
  '$nama',
  '$tgl_lahir',
  '$alamat',
  '$no_hp',
  '$tgl_daftar'
  )")
or die(mysqli_error($con));
  
  
header("location:index.php");
  

break;


case"umum":
        
  $no_reg = $_POST['no_reg'];
  $nama = $_POST['nama'];
  $keluhan = $_POST['keluhan'];
  $terapi = $_POST['terapi'];
  $keterangan = $_POST['keterangan'];

mysqli_query($con, "insert into kunjungan_umum values(
  '',
  '$no_reg',
  '$nama',
  '$keluhan',
  '$terapi',
  '$keterangan'
  )")
or die(mysqli_error($con));
  
  
header("location:index.php");


case"bersalin":
        
  $no_reg = $_POST['no_reg'];
  $nama = $_POST['nama'];
  $taksiran_persalinan = $_POST['taksiran_persalinan'];
  $diagnosa = $_POST['diagnosa'];
  $jam_lahir = $_POST['jam_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $berat_badan = $_POST['berat_badan'];
  $panjang_badan = $_POST['panjang_badan'];
  $penolong = $_POST['penolong'];

mysqli_query($con, "insert into persalinan values(
  '',
  '$no_reg',
  '$nama',
  '$taksiran_persalinan',
  '$diagnosa',
  '$jam_lahir',
  '$jenis_kelamin',
  '$berat_badan',
  '$panjang_badan',
  '$penolong'
  )")
or die(mysqli_error($con));
  
  
header("location:index.php");
  

break;


}


?>