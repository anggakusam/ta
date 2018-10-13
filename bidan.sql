-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2018 pada 16.58
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bidan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('bidaniyam', 'c00b07ac0e416e27d6aa08feb8b9527b'),
('staf', 'c00b07ac0e416e27d6aa08feb8b9527b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `antenatal_care`
--

CREATE TABLE `antenatal_care` (
  `id_antenatal` int(11) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `no_reg` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `berat_badan` int(3) DEFAULT NULL,
  `tekanan_darah` varchar(12) DEFAULT NULL,
  `haid_terakhir` date DEFAULT NULL,
  `taksiran_persalinan` date DEFAULT NULL,
  `tindakan` varchar(50) DEFAULT NULL,
  `obat` varchar(50) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `antenatal_care`
--

INSERT INTO `antenatal_care` (`id_antenatal`, `tgl_kunjungan`, `no_reg`, `nama`, `diagnosa`, `berat_badan`, `tekanan_darah`, `haid_terakhir`, `taksiran_persalinan`, `tindakan`, `obat`, `keterangan`) VALUES
(5, '2018-09-09', 5, 'Nisrina', 'Amenorrhea', 63, '110/90', '2018-08-15', '2018-12-15', 'Trimester 3: Alinammin F 5', ',', '1x Sehari'),
(6, '2018-10-12', 3, 'Mimin Mintarsih', 'Kehamilan', 55, '110/80', '2018-09-18', '2018-10-24', 'Trimester 2: Gestiamin Z + Calcifar 20', 'Antimo,Inzana', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `imunisasi`
--

CREATE TABLE `imunisasi` (
  `id_imunisasi` int(11) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `no_reg` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_bayi` varchar(50) NOT NULL,
  `berat_badan_bayi` float(5,2) NOT NULL,
  `lingkar_kepala_bayi` float(5,2) NOT NULL,
  `suhu` float(5,2) NOT NULL,
  `jenis_imunisasi` varchar(50) NOT NULL,
  `tgl_lahir_bayi` date NOT NULL,
  `jadwal_kunjungan_ulang` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `imunisasi`
--

INSERT INTO `imunisasi` (`id_imunisasi`, `tgl_kunjungan`, `no_reg`, `nama`, `nama_bayi`, `berat_badan_bayi`, `lingkar_kepala_bayi`, `suhu`, `jenis_imunisasi`, `tgl_lahir_bayi`, `jadwal_kunjungan_ulang`, `keterangan`) VALUES
(9, '2018-09-09', 3, 'Mimin Mintarsih', 'Alfina', 9.21, 18.62, 23.30, 'Tetanus Difteri', '2015-01-05', '2019-09-09', '-'),
(10, '2018-10-12', 4, 'Atin', 'Gigi Hadid', 8.00, 29.00, 30.00, 'Tetanus Difteri', '2017-08-10', '2018-10-20', 'cepet sembuh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kb`
--

CREATE TABLE `kb` (
  `id_kb` int(11) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `no_reg` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `tekanan_darah` varchar(8) NOT NULL,
  `metode_kb` varchar(50) NOT NULL,
  `jadwal_kunjungan_ulang` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kb`
--

INSERT INTO `kb` (`id_kb`, `tgl_kunjungan`, `no_reg`, `nama`, `berat_badan`, `tekanan_darah`, `metode_kb`, `jadwal_kunjungan_ulang`, `keterangan`) VALUES
(5, '2018-09-09', 4, 'Atin', 70, '110/90', 'IUDO COPPERT', '2020-09-09', 'Jangan terlalu Cape'),
(6, '2018-10-12', 2, 'Lisa', 70, '110/80', 'IUD COPPERTY', '2020-09-29', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan_umum`
--

CREATE TABLE `kunjungan_umum` (
  `id_kunjungan` int(11) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `no_reg` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `terapi` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kunjungan_umum`
--

INSERT INTO `kunjungan_umum` (`id_kunjungan`, `tgl_kunjungan`, `no_reg`, `nama`, `keluhan`, `terapi`, `keterangan`) VALUES
(14, '2018-09-09', 1, 'Rostini', 'Keluar Darah', 'Antimo,Intunal F,Inzana', '2x Sehari'),
(15, '2018-10-11', 2, 'Lisa', 'mules', 'Antimo,,', 'cepet sembuh yaaa'),
(16, '2018-10-12', 2, 'Lisa', 'mules', 'Inzana,,', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(15) DEFAULT NULL,
  `harga_obat` int(7) DEFAULT NULL,
  `jumlah_obat` int(3) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jenis_obat`, `harga_obat`, `jumlah_obat`, `keterangan`) VALUES
(1, 'Antimo', 'Tablet', 4000, 80, '0'),
(2, 'Inzana', 'Tablet', 4000, 90, '0'),
(3, 'Intunal F', 'Tablet', 4000, 110, 'Obat PIlek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `no_reg` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_berobat` varchar(50) DEFAULT NULL,
  `tindakan` varchar(50) NOT NULL,
  `biaya_berobat` int(7) DEFAULT NULL,
  `biaya_obat` int(7) DEFAULT NULL,
  `total_harga` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `tgl_kunjungan`, `no_reg`, `nama`, `jenis_berobat`, `tindakan`, `biaya_berobat`, `biaya_obat`, `total_harga`) VALUES
(9, '2018-09-09', 1, 'Rostini', 'Kunjungan Umum', 'Antimo,Intunal F,Inzana', 75000, 12000, 87000),
(10, '2018-09-09', 2, 'Lisa', 'Melahirkan', '-', 650000, 4000, 654000),
(11, '2018-09-09', 3, 'Mimin Mintarsih', 'Imunisasi', 'Tetanus Difteri', 60000, 0, 60000),
(12, '2018-09-09', 4, 'Atin', 'KB', 'IUDO COPPERT', 250000, 0, 250000),
(13, '2018-09-09', 5, 'Nisrina', 'Antenatal Care', 'Trimester 3: Alinammin F 5', 30000, 0, 30000),
(14, '2018-10-11', 1, 'Angga', 'Melahirkan', '-', 100000, 12000, 112000),
(15, '2018-10-11', 2, 'Lisa', 'Kunjungan Umum', 'Antimo,,', 20000, 4000, 24000),
(16, '2018-10-12', 4, 'Atin', 'Imunisasi', 'Tetanus Difteri', 60000, 0, 60000),
(17, '2018-10-12', 2, 'Lisa', 'KB', 'IUD COPPERTY', 0, 0, 0),
(18, '2018-10-12', 3, 'Mimin Mintarsih', 'Antenatal Care', 'Trimester 2: Gestiamin Z + Calcifar 20', 60000, 8000, 68000),
(19, '2018-10-12', 2, 'Lisa', 'Kunjungan Umum', 'Inzana,,', 100000, 4000, 104000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_reg` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_reg`, `nama`, `tgl_lahir`, `alamat`, `no_hp`, `tgl_daftar`) VALUES
(1, 'Rostini', '1996-09-01', 'Jl.Atletik II no. 26', '085720474799', '2018-08-23'),
(2, 'Lisa', '1995-01-01', ' Jl. Sesama', '089928232716', '2018-08-23'),
(3, 'Mimin Mintarsih', '1963-07-14', ' Jl. Permata Biru III', '085715163620', '2018-09-04'),
(4, 'Atin', '1996-09-05', ' Jl. Sesama 456', '085745632154', '2018-09-09'),
(5, 'Nisrina', '1996-09-25', 'Jl. Sindang Laya 90 ', '085214759635', '2018-09-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persalinan`
--

CREATE TABLE `persalinan` (
  `id_persalinan` int(11) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `no_reg` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `taksiran_persalinan` datetime NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `obat` varchar(50) NOT NULL,
  `jam_lahir` datetime DEFAULT NULL,
  `jenis_kelamin` varchar(12) DEFAULT NULL,
  `berat_badan` float(5,2) DEFAULT NULL,
  `panjang_badan` float(5,2) DEFAULT NULL,
  `penolong` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `persalinan`
--

INSERT INTO `persalinan` (`id_persalinan`, `tgl_kunjungan`, `no_reg`, `nama`, `taksiran_persalinan`, `diagnosa`, `obat`, `jam_lahir`, `jenis_kelamin`, `berat_badan`, `panjang_badan`, `penolong`) VALUES
(4, '2018-09-09', 2, 'Lisa', '2018-09-10 15:10:00', 'Sungsang', 'Intunal F,,', '2018-09-11 02:30:00', 'Perempuan', 3.90, 37.50, 'Wulan'),
(5, '2018-10-11', 1, 'Angga', '1982-11-01 22:52:00', 'Kehamilan', 'Antimo,Inzana,Intunal F', '2015-09-29 18:53:00', 'Laki - Laki', 29.00, 180.00, 'saya');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antenatal_care`
--
ALTER TABLE `antenatal_care`
  ADD PRIMARY KEY (`id_antenatal`);

--
-- Indeks untuk tabel `imunisasi`
--
ALTER TABLE `imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`);

--
-- Indeks untuk tabel `kb`
--
ALTER TABLE `kb`
  ADD PRIMARY KEY (`id_kb`);

--
-- Indeks untuk tabel `kunjungan_umum`
--
ALTER TABLE `kunjungan_umum`
  ADD PRIMARY KEY (`id_kunjungan`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indeks untuk tabel `persalinan`
--
ALTER TABLE `persalinan`
  ADD PRIMARY KEY (`id_persalinan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antenatal_care`
--
ALTER TABLE `antenatal_care`
  MODIFY `id_antenatal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `imunisasi`
--
ALTER TABLE `imunisasi`
  MODIFY `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kb`
--
ALTER TABLE `kb`
  MODIFY `id_kb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kunjungan_umum`
--
ALTER TABLE `kunjungan_umum`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `no_reg` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `persalinan`
--
ALTER TABLE `persalinan`
  MODIFY `id_persalinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
