-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2018 at 09:45 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bidan`
--

-- --------------------------------------------------------

--
-- Table structure for table `antenatal_care`
--

CREATE TABLE IF NOT EXISTS `antenatal_care` (
  `id_antenatal` int(11) NOT NULL AUTO_INCREMENT,
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
  `keterangan` text,
  PRIMARY KEY (`id_antenatal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `antenatal_care`
--

INSERT INTO `antenatal_care` (`id_antenatal`, `tgl_kunjungan`, `no_reg`, `nama`, `diagnosa`, `berat_badan`, `tekanan_darah`, `haid_terakhir`, `taksiran_persalinan`, `tindakan`, `obat`, `keterangan`) VALUES
(5, '2018-09-09', 5, 'Nisrina', 'Amenorrhea', 63, '110/90', '2018-08-15', '2018-12-15', 'Trimester 3: Alinammin F 5', ',', '1x Sehari');

-- --------------------------------------------------------

--
-- Table structure for table `imunisasi`
--

CREATE TABLE IF NOT EXISTS `imunisasi` (
  `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT,
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
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_imunisasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id_imunisasi`, `tgl_kunjungan`, `no_reg`, `nama`, `nama_bayi`, `berat_badan_bayi`, `lingkar_kepala_bayi`, `suhu`, `jenis_imunisasi`, `tgl_lahir_bayi`, `jadwal_kunjungan_ulang`, `keterangan`) VALUES
(9, '2018-09-09', 3, 'Mimin Mintarsih', 'Alfina', 9.21, 18.62, 23.30, 'Tetanus Difteri', '2015-01-05', '2019-09-09', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kb`
--

CREATE TABLE IF NOT EXISTS `kb` (
  `id_kb` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_kunjungan` date NOT NULL,
  `no_reg` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `tekanan_darah` varchar(8) NOT NULL,
  `metode_kb` varchar(50) NOT NULL,
  `jadwal_kunjungan_ulang` date NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_kb`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kb`
--

INSERT INTO `kb` (`id_kb`, `tgl_kunjungan`, `no_reg`, `nama`, `berat_badan`, `tekanan_darah`, `metode_kb`, `jadwal_kunjungan_ulang`, `keterangan`) VALUES
(5, '2018-09-09', 4, 'Atin', 70, '110/90', 'IUDO COPPERT', '2020-09-09', 'Jangan terlalu Cape');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan_umum`
--

CREATE TABLE IF NOT EXISTS `kunjungan_umum` (
  `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_kunjungan` date NOT NULL,
  `no_reg` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `terapi` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_kunjungan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `kunjungan_umum`
--

INSERT INTO `kunjungan_umum` (`id_kunjungan`, `tgl_kunjungan`, `no_reg`, `nama`, `keluhan`, `terapi`, `keterangan`) VALUES
(14, '2018-09-09', 1, 'Rostini', 'Keluar Darah', 'Antimo,Intunal F,Inzana', '2x Sehari');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(15) DEFAULT NULL,
  `harga_obat` int(7) DEFAULT NULL,
  `jumlah_obat` int(3) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jenis_obat`, `harga_obat`, `jumlah_obat`, `keterangan`) VALUES
(1, 'Antimo', 'Tablet', 4000, 80, '0'),
(2, 'Inzana', 'Tablet', 4000, 90, '0'),
(3, 'Intunal F', 'Tablet', 4000, 110, 'Obat PIlek');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_kunjungan` date NOT NULL,
  `no_reg` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_berobat` varchar(50) DEFAULT NULL,
  `tindakan` varchar(50) NOT NULL,
  `biaya_berobat` int(7) DEFAULT NULL,
  `biaya_obat` int(7) DEFAULT NULL,
  `total_harga` int(8) DEFAULT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `tgl_kunjungan`, `no_reg`, `nama`, `jenis_berobat`, `tindakan`, `biaya_berobat`, `biaya_obat`, `total_harga`) VALUES
(9, '2018-09-09', 1, 'Rostini', 'Kunjungan Umum', 'Antimo,Intunal F,Inzana', 75000, 12000, 87000),
(10, '2018-09-09', 2, 'Lisa', 'Melahirkan', '-', 650000, 4000, 654000),
(11, '2018-09-09', 3, 'Mimin Mintarsih', 'Imunisasi', 'Tetanus Difteri', 60000, 0, 60000),
(12, '2018-09-09', 4, 'Atin', 'KB', 'IUDO COPPERT', 250000, 0, 250000),
(13, '2018-09-09', 5, 'Nisrina', 'Antenatal Care', 'Trimester 3: Alinammin F 5', 30000, 0, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `no_reg` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `tgl_daftar` date NOT NULL,
  PRIMARY KEY (`no_reg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_reg`, `nama`, `tgl_lahir`, `alamat`, `no_hp`, `tgl_daftar`) VALUES
(1, 'Rostini', '1996-09-01', 'Jl.Atletik II no. 26', '085720474799', '2018-08-23'),
(2, 'Lisa', '1995-01-01', ' Jl. Sesama', '089928232716', '2018-08-23'),
(3, 'Mimin Mintarsih', '1963-07-14', ' Jl. Permata Biru III', '085715163620', '2018-09-04'),
(4, 'Atin', '1996-09-05', ' Jl. Sesama 456', '085745632154', '2018-09-09'),
(5, 'Nisrina', '1996-09-25', 'Jl. Sindang Laya 90 ', '085214759635', '2018-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `persalinan`
--

CREATE TABLE IF NOT EXISTS `persalinan` (
  `id_persalinan` int(11) NOT NULL AUTO_INCREMENT,
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
  `penolong` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_persalinan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `persalinan`
--

INSERT INTO `persalinan` (`id_persalinan`, `tgl_kunjungan`, `no_reg`, `nama`, `taksiran_persalinan`, `diagnosa`, `obat`, `jam_lahir`, `jenis_kelamin`, `berat_badan`, `panjang_badan`, `penolong`) VALUES
(4, '2018-09-09', 2, 'Lisa', '2018-09-10 15:10:00', 'Sungsang', 'Intunal F,,', '2018-09-11 02:30:00', 'Perempuan', 3.90, 37.50, 'Wulan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
