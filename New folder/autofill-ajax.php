<?php 
include "koneksi.php";
    $no_reg = $_GET['no_reg'];
    $sql    = mysqli_query($koneksi, "select * from pendaftaran where no_reg='$no_reg'");
    $bidan  = mysqli_fetch_array($sql);
    $data = array(
      'nama' => $bidan['nama'],
      'tanggal_lahir' => $bidan['tanggal_lahir'],
      'alamat' => $bidan['alamat'],
      'no_hp' => $bidan['no_hp']
    );
    echo json_encode($bidan);

?>
