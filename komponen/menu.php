
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Rumah Bersalin Bidan Iyam Siti Purnama</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Halaman Depan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="pendaftaran.php">
            <i class="fa fa-fw fa-address-card"></i>
            <span class="nav-link-text">Pendaftaran Pasien</span>
          </a>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-address-book"></i>
            <span class="nav-link-text">Pendaftaran Berobat</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="kunjungan-umum.php">Kunjungan umum</a>
            </li>
            <li>
              <a href="bersalin.php">Bersalin</a>
            </li>
            <li>
              <a href="imunisasi.php">Imunisasi</a>
            </li>
            <li>
              <a href="kb.php">Kunjungan KB</a>
            </li>
            <li>
              <a href="antenatal.php">Antenatal care</a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#menulihatdata" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-archive"></i>
            <span class="nav-link-text">Lihat Data</span>
          </a>
          <ul class="sidenav-second-level collapse" id="menulihatdata">
             <li>
              <a href="data-pasien.php">Data Pasien</a>
            </li>
            <li>
              <a href="data-kunjungan.php">Kunjungan umum</a>
            </li>
            <li>
              <a href="data-bersalin.php">Bersalin</a>
            </li>
            <li>
              <a href="data-imunisasi.php">Imunisasi</a>
            </li>
            <li>
              <a href="data-kb.php">Kunjungan KB</a>
            </li>
            <li>
              <a href="data-antenatal.php">Antenatal care</a>
            </li>
          </ul>
        </li>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#menulihatlaporan" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-print"></i>
            <span class="nav-link-text">Laporan</span>
          </a>
          <ul class="sidenav-second-level collapse" id="menulihatlaporan">
            <li>
              <a href="#.php">Kunjungan Berobat</a>
            </li>
            <li>
              <a href="keuangan.php">Keuangan</a>
            </li>
            <li>
              <a href="print/print-laporan.php" target="_blank">
                <i class="fa fa-fw fa-print"></i>
                Cetak Laporan
              </a>
            </li>
          </ul>
        </li>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="obat.php">
            <i class="fa fa-fw fa-asterisk"></i>
            <span class="nav-link-text">Data Obat</span>
          </a>
        </li>
        
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#modalLogout">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>


  <!-- Logout Modal-->
    <div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="aksi.php?aksi=keluar_admin">Logout</a>
          </div>
        </div>
      </div>
    </div>