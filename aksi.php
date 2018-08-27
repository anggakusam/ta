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

break;


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

case"imunisasi":
        
  $no_reg = $_POST['no_reg'];
  $nama = $_POST['nama'];
  $nama_bayi = $_POST['nama_bayi'];
  $berat_badan_bayi = $_POST['berat_badan_bayi'];
  $lingkar_kepala_bayi = $_POST['lingkar_kepala_bayi'];
  $suhu = $_POST['suhu'];
  $jenis_imunisasi = $_POST['jenis_imunisasi'];
  $tgl_lahir_bayi = $_POST['tgl_lahir_bayi'];
  $jadwal_kunjungan_ulang = $_POST['jadwal_kunjungan_ulang'];
  $keterangan = $_POST['keterangan'];

mysqli_query($con, "insert into imunisasi values(
  '',
  '$no_reg',
  '$nama',
  '$nama_bayi',
  '$berat_badan_bayi',
  '$lingkar_kepala_bayi',
  '$suhu',
  '$jenis_imunisasi',
  '$tgl_lahir_bayi',
  '$jadwal_kunjungan_ulang',
  '$keterangan'
  )")
or die(mysqli_error($con));
  
  
header("location:index.php");
  

break;


case"kb":
        
  $no_reg = $_POST['no_reg'];
  $nama = $_POST['nama'];
  $berat_badan = $_POST['berat_badan'];
  $tekanan_darah = $_POST['tekanan_darah'];
  $metode_kb = $_POST['metode_kb'];
  $jadwal_kunjungan_ulang = $_POST['jadwal_kunjungan_ulang'];
  $keterangan = $_POST['keterangan'];

mysqli_query($con, "insert into kb values(
  '',
  '$no_reg',
  '$nama',
  '$berat_badan',
  '$tekanan_darah',
  '$metode_kb',
  '$jadwal_kunjungan_ulang',
  '$keterangan'
  )")
or die(mysqli_error($con));
  
  
header("location:index.php");
  

break;

case"antenatal":
        
  $no_reg = $_POST['no_reg'];
  $nama = $_POST['nama'];
  $diagnosa = $_POST['diagnosa'];
  $berat_badan = $_POST['berat_badan'];
  $tekanan_darah = $_POST['tekanan_darah'];
  $haid_terakhir = $_POST['haid_terakhir'];
  $taksiran_persalinan = $_POST['taksiran_persalinan'];
  $tindakan = $_POST['keterangan'];
  $keterangan = $_POST['keterangan'];

mysqli_query($con, "insert into antenatal_care values(
  '',
  '$no_reg',
  '$nama',
  '$diagnosa',
  '$berat_badan',
  '$tekanan_darah',
  '$haid_terakhir',
  '$taksiran_persalinan',
  '$tindakan',
  '$keterangan'
  )")
or die(mysqli_error($con));
  
  
header("location:index.php");
  

break;

}


?>