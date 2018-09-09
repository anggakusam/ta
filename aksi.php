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

case"obat":
        
  $nama_obat = $_POST['nama_obat'];
  $jenis_obat = $_POST['jenis_obat'];
  $harga_obat = $_POST['harga_obat'];
  $jumlah_obat = $_POST['jumlah_obat'];
  $keterangan = $_POST['keterangan'];

mysqli_query($con, "insert into obat values(
  '',
  '$nama_obat',
  '$jenis_obat',
  '$harga_obat',
  '$jumlah_obat',
  '$keterangan'
  )")
or die(mysqli_error($con));
  
  
header("location:index.php");
  

break;


case"umum":
  $t1 = explode('-', $_POST['terapi1']);
  $t2 = explode('-', $_POST['terapi2']);
  $t3 = explode('-', $_POST['terapi3']);

  $terapi = $t1[0] .",". $t2[0] .",". $t3[0];
  $harga = $t1[1] + $t2[1] + $t3[1];
  $tgl_kunjungan = date("Y-m-d");
  $no_reg = $_POST['no_reg'];
  $nama = $_POST['nama'];
  $keluhan = $_POST['keluhan'];
  $keterangan = $_POST['keterangan'];
  $biaya_berobat = $_POST['biaya_berobat'];
  $total = $biaya_berobat + $harga;

  mysqli_query($con, "insert into kunjungan_umum values(
    '',
    '$tgl_kunjungan',
    '$no_reg',
    '$nama',
    '$keluhan',
    '$terapi',
    '$keterangan'
    )")
  or die(mysqli_error($con));

  mysqli_query($con, "insert into pembayaran values(
    '',
    '$tgl_kunjungan',
    '$no_reg',
    '$nama',
    'kunjungan umum',
    '$biaya_berobat',
    '$harga',
    '$total'
    )")
  or die(mysqli_error($con));
    
    
  header("location:index.php");
break;


case"bersalin":
  
  $tgl_kunjungan = date("Y-m-d");
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
    '$tgl_kunjungan',
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

  $tgl_kunjungan = date("Y-m-d");      
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
  '$tgl_kunjungan',
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

  $tgl_kunjungan = date("Y-m-d");  
  $no_reg = $_POST['no_reg'];
  $nama = $_POST['nama'];
  $berat_badan = $_POST['berat_badan'];
  $tekanan_darah = $_POST['tekanan_darah'];
  $metode_kb = $_POST['metode_kb'];
  $jadwal_kunjungan_ulang = $_POST['jadwal_kunjungan_ulang'];
  $keterangan = $_POST['keterangan'];

mysqli_query($con, "insert into kb values(
  '',
  '$tgl_kunjungan',
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

  $tgl_kunjungan = date("Y-m-d");        
  $no_reg = $_POST['no_reg'];
  $nama = $_POST['nama'];
  $diagnosa = $_POST['diagnosa'];
  $berat_badan = $_POST['berat_badan'];
  $tekanan_darah = $_POST['tekanan_darah'];
  $haid_terakhir = $_POST['haid_terakhir'];
  $taksiran_persalinan = $_POST['taksiran_persalinan'];
  $tindakan = $_POST['tindakan'];
  $keterangan = $_POST['keterangan'];

mysqli_query($con, "insert into antenatal_care values(
  '',
  '$tgl_kunjungan',
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

case"edit-pasien":

        $sql = "update data_location set 
        nama = '".$_POST['nama']."',
        tgl_lahir = '".$_POST['tgl_lahir']."',
        alamat = '".$_POST['alamat']."',
        no_hp = '".$_POST['no_hp']."'

where no_reg = '".$_POST['no_reg']."'";

mysqli_query($con, $sql) 
or die(mysqli_error($con));


header("location:index.php");

break;

}


?>