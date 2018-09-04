<html>
<head>
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
    <h2>Data Pasien</h2>
      <table id='tablePasien' class='display'>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tanggal lahir</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Tanggal Daftar</th>
            <th>Rekap Medik</th>
          </tr>
        </thead>
        <tbody>

    <?php

    $sql = "select * from pendaftaran";
    $query = mysqli_query($con, $sql);
    $nomer = 1;
    if ($query) {

      while ($data = mysqli_fetch_array($query)) {
        
        echo"
        
              <tr>
                  <td>". $nomer ."</td>
                  <td>". $data['nama'] ."</td>
                  <td>". $data['tgl_lahir'] ."</td>
                  <td>". $data['alamat'] ."</td>
                  <td>". $data['no_hp'] ."</td>
                  <td>". $data['tgl_daftar'] ."</td>
                  <td> 
                    <Center>
                   
                      <a href=edit-data-pasien.php>
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
    <!-- ISI KONTEN -->
    
    

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