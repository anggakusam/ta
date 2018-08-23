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
}

?>