<?php
    include 'koneksi.php';
    $no_reg = $_GET['no_reg'];
    $sql = mysqli_query( $con, "select * from pendaftaran where no_reg='$no_reg'");
    $pasien = mysqli_fetch_array($sql);
    $data = array(
        'nama' => $pasien['nama'],
        'nama_suami' => $pasien['nama_suami'],
        'tgl_lahir'=> $pasien['tgl_lahir'],
        'alamat' => $pasien['alamat'],
        'no_hp' => $pasien['no_hp']
    );
    echo json_encode($data);


?>