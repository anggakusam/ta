<?php
include "koneksi.php";

switch($_GET['aksi']){
  
  case"daftar":
        
  $nama = $_POST['nama'];
  $tgl_lahir = $_POST['tgl_lahir'];
  $alamat = $_POST['alamat'];
  $no_hp = $_POST['no_hp'];
  
  $taun = substr($tgl_lahir, 2, 2);
  $bulan = substr($tgl_lahir, 5, 2);
  
  $sql = "select no_reg from pendaftaran order by no_reg desc LIMIT 1";    
  $query = mysqli_query($con,$sql) or die(mysql_error);
  $data = mysqli_fetch_array($query);

  $urut = substr($data['no_reg'], 6);
  $tambah = intval($urut) + 1;
  $urut = strval($tambah);

  $no_reg= $taun . "/" . $bulan . "/" . $tambah;

mysqli_query($con, "insert into pendaftaran values(
  '$no_reg',
  '$nama',
  '$tgl_lahir',
  '$alamat',
  '$no_hp'
  )")
or die(mysqli_error($con));
  
  
header("location:index.php");
  

break;
}
?>