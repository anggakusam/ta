<?php
include "koneksi.php";

switch($_GET['aksi']){

  case"masuk_admin":
    session_start();
		require_once("koneksi.php");
		$user = mysqli_real_escape_string($con, $_POST['username']);
		$pass = mysqli_real_escape_string($con, md5(md5($_POST['password'])));  
		$cekuser = mysqli_query($con, "SELECT * FROM admin WHERE username = '$user'");
		$jumlah = mysqli_num_rows($cekuser);
		$hasil = mysqli_fetch_array($cekuser);  
		if($jumlah == 0) {
            header('location:masuk.php');
            
        } else {
            if($pass <> $hasil['password']) {
                header('location:masuk.php');
                
            } else {
                
                $_SESSION['admin'] = "$user";
                header('location:data-kunjungan.php');    
                
                
            }	
		}	
	break;
        
	case"keluar_admin":
		session_start();
		unset($_SESSION['admin']);
		header("location:masuk.php");
	break;
  

  case"daftar":
        
  $nama = $_POST['nama'];
  $nama_suami = $_POST['nama_suami'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];
  $tgl_daftar = date("Y-m-d");

mysqli_query($con, "insert into pendaftaran values(
  '',
  '$nama',
  '$nama_suami',
  '$tgl_lahir',
  '$alamat',
  '$no_hp',
  '$tgl_daftar'
  )")
or die(mysqli_error($con));
  
  
header("location:data-pasien.php");
  

break;

case"obat":
        
  $nama_obat = $_POST['nama_obat'];
  $jenis_obat = $_POST['jenis_obat'];
  $harga_obat = $_POST['harga_obat'];
  $keterangan = $_POST['keterangan'];

mysqli_query($con, "insert into obat values(
  '',
  '$nama_obat',
  '$jenis_obat',
  '$harga_obat',
  '$keterangan'
  )")
or die(mysqli_error($con));
  
  
header("location:data-obat.php");
  

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
    'Kunjungan Umum',
    '$terapi',
    '$biaya_berobat',
    '$harga',
    '$total'
    )")
  or die(mysqli_error($con));
    
    
  header("location:data-kunjungan.php");
break;


case"bersalin":

  $tgl_kunjungan = date("Y-m-d");
  $no_reg = $_POST['no_reg'];
  $nama = $_POST['nama'];
  $nama_suami = $_POST['nama_suami'];
  $taksiran_persalinan = $_POST['taksiran_persalinan'];
  $diagnosa = $_POST['diagnosa'];
  $jam_lahir = $_POST['jam_lahir'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $berat_badan = $_POST['berat_badan'];
  $panjang_badan = $_POST['panjang_badan'];
  $penolong = $_POST['penolong'];
  $biaya_berobat = $_POST['biaya_berobat'];
  $total = $biaya_berobat;

  mysqli_query($con, "insert into persalinan values(
    '',
    '$tgl_kunjungan',
    '$no_reg',
    '$nama',
    '$nama_suami',
    '$taksiran_persalinan',
    '$diagnosa',
    '$jam_lahir',
    '$jenis_kelamin',
    '$berat_badan',
    '$panjang_badan',
    '$penolong'
    )")
  or die(mysqli_error($con));

  mysqli_query($con, "insert into pembayaran values(
    '',
    '$tgl_kunjungan',
    '$no_reg',
    '$nama',
    'Melahirkan',
    '-',
    '$biaya_berobat',
    '-',
    '$total'
    )")
    or die(mysqli_error($con));
  
header("location:data-bersalin.php");
  
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
        if ($_POST['jenis_imunisasi'] == 'BCG + Polio'){
          $harga = 50000;
        }
        if ($_POST['jenis_imunisasi'] == 'HB-O'){
          $harga = 50000;
        }
        if ($_POST['jenis_imunisasi'] == 'Pentabio + Polio'){
          $harga = 50000;
        }
        if ($_POST['jenis_imunisasi'] == 'Pentabio + Polio + Paracetamol'){
          $harga = 60000;
        }
        if ($_POST['jenis_imunisasi'] == 'Campak Rubela'){
          $harga = 60000;
        }
        if ($_POST['jenis_imunisasi'] == 'Tetanus Difteri'){
          $harga = 60000;
        }
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

mysqli_query($con, "insert into pembayaran values(
  '',
  '$tgl_kunjungan',
  '$no_reg',
  '$nama',
  'Imunisasi',
  '$jenis_imunisasi',
  '$harga',
  '-',
  '$harga'
  )")
or die(mysqli_error($con));
  
  
header("location:data-imunisasi.php");
  

break;


case"kb":

  $tgl_kunjungan = date("Y-m-d");  
  $no_reg = $_POST['no_reg'];
  $nama = $_POST['nama'];
  $berat_badan = $_POST['berat_badan'];
  $tekanan_darah = $_POST['tekanan_darah'];
  $metode_kb = $_POST['metode_kb'];
      if ($_POST['metode_kb'] == 'Cyclo'){
        $harga = 25000;
      }
      if ($_POST['metode_kb'] == 'Depo'){
        $harga = 30000;
      }
      if ($_POST['metode_kb'] == 'Pil Laktasi'){
        $harga = 20000;
      }
      if ($_POST['metode_kb'] == 'Pil KB: Trinordiol'){
        $harga = 20000;
      }
      if ($_POST['metode_kb'] == 'Pil KB'){
        $harga = 15000;
      }
      if ($_POST['metode_kb'] == 'Andalan'){
        $harga = 20000;
      }
      if ($_POST['metode_kb'] == 'IUD COPPERTY'){
        $harga = 250000;
      }
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

mysqli_query($con, "insert into pembayaran values(
  '',
  '$tgl_kunjungan',
  '$no_reg',
  '$nama',
  'KB',
  '$metode_kb',
  '$harga',
  '-',
  '$harga'
  )")
or die(mysqli_error($con));
  
  
header("location:data-kb.php");
  

break;

case"antenatal":
  $t1 = explode('-', $_POST['obat1']);
  $t2 = explode('-', $_POST['obat2']);

  $obat = $t1[0] .",". $t2[0];
  $hargaobat = $t1[1] + $t2[1];
  $tgl_kunjungan = date("Y-m-d");        
  $no_reg = $_POST['no_reg'];
  $nama = $_POST['nama'];
  $diagnosa = $_POST['diagnosa'];
  $berat_badan = $_POST['berat_badan'];
  $tekanan_darah = $_POST['tekanan_darah'];
  $haid_terakhir = $_POST['haid_terakhir'];
  $taksiran_persalinan = $_POST['taksiran_persalinan'];
  $tindakan = $_POST['tindakan'];
        if ($_POST['tindakan'] == 'Trimester 1: Asam Folat 30'){
          $harga = 40000;
        }
        if ($_POST['tindakan'] == 'Trimester 1: Asam Folat 30 + obat mual'){
          $harga = 45000;
        }
        if ($_POST['tindakan'] == 'Trimester 1: Asam Folat 30 + obat mual + Vit C'){
          $harga = 55000;
        }
        if ($_POST['tindakan'] == 'Trimester 2: Hufabion 20 + Calcifar 10'){
          $harga = 40000;
        }
        if ($_POST['tindakan'] == 'Trimester 2: Etabion 30 + Erkade 10'){
          $harga = 50000;
        }
        if ($_POST['tindakan'] == 'Trimester 2: Gestiamin Z + Calcifar 20'){
          $harga = 60000;
        }
        if ($_POST['tindakan'] == 'Trimester 2: Fermia 30 + Licokalk 10'){
          $harga = 50000;
        }
        if ($_POST['tindakan'] == 'Trimester 3: Gestiamin Z 10'){
          $harga = 35000;
        }
        if ($_POST['tindakan'] == 'Trimester 3: Neurodex 10'){
          $harga = 35000;
        }
        if ($_POST['tindakan'] == 'Trimester 3: Alinammin F 5'){
          $harga = 30000;
        }
  $keterangan = $_POST['keterangan'];
  $total = $harga + $hargaobat;

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
  '$obat',
  '$keterangan'
  )")
or die(mysqli_error($con));

mysqli_query($con, "insert into pembayaran values(
  '',
  '$tgl_kunjungan',
  '$no_reg',
  '$nama',
  'Antenatal Care',
  '$tindakan',
  '$harga',
  '$hargaobat',
  '$total'
  )")
or die(mysqli_error($con));
  
  
header("location:data-antenatal.php");
  

break;

case"edit-pasien":

  $sql = "update pendaftaran set 
    nama = '".$_POST['nama']."',
    nama_suami = '".$_POST['nama_suami']."',
    tgl_lahir = '".$_POST['tgl_lahir']."',
    alamat = '".$_POST['alamat']."',
    no_hp = '".$_POST['no_hp']."'
    
    where no_reg = '".$_POST['no_reg']."'";

mysqli_query($con, $sql) 
or die(mysqli_error($con));

header("location:data-pasien.php");

break;

case"hapus-data-pasien":

  $sql = "delete from pendaftaran where no_reg = '".$_GET['no_reg']."'";

  mysqli_query($con, $sql) 
  or die(mysqli_error($con));

  header("location:data-pasien.php");

break;

case"edit-kunjungan":

  $sql = "update kunjungan_umum set 
    no_reg = '".$_POST['no_reg']."',
    nama = '".$_POST['nama']."',
    keluhan = '".$_POST['keluhan']."',
    terapi = '".$_POST['terapi']."',
    keterangan = '".$_POST['keterangan']."'
    
    where id_kunjungan = '".$_POST['id_kunjungan']."'";


mysqli_query($con, $sql) 
or die(mysqli_error($con));

header("location:data-kunjungan.php");

break;

case"hapus-data-kunjungan":

  $sql = "delete from kunjungan_umum where id_kunjungan = '".$_GET['id_kunjungan']."'";

  mysqli_query($con, $sql) 
  or die(mysqli_error($con));

  header("location:data-kunjungan.php");

break;

}


?>