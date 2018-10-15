-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 04:26 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('bidaniyam', 'c00b07ac0e416e27d6aa08feb8b9527b'),
('staf', 'c00b07ac0e416e27d6aa08feb8b9527b');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `antenatal_care`
--

INSERT INTO `antenatal_care` (`id_antenatal`, `tgl_kunjungan`, `no_reg`, `nama`, `diagnosa`, `berat_badan`, `tekanan_darah`, `haid_terakhir`, `taksiran_persalinan`, `tindakan`, `obat`, `keterangan`) VALUES
(1, '2018-10-15', 2, 'Mimin Mintarsih', 'Amenorrhea', 70, '110/90', '2018-05-18', '2018-10-24', 'Trimester 2: Gestiamin Z + Calcifar 20', 'Farsidol Forte,Paracetamol Syrup', 'anti biotiknya habiskan');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `imunisasi`
--

INSERT INTO `imunisasi` (`id_imunisasi`, `tgl_kunjungan`, `no_reg`, `nama`, `nama_bayi`, `berat_badan_bayi`, `lingkar_kepala_bayi`, `suhu`, `jenis_imunisasi`, `tgl_lahir_bayi`, `jadwal_kunjungan_ulang`, `keterangan`) VALUES
(1, '2018-10-15', 1, 'Alven', 'Gigi Hadid', 8.70, 18.00, 23.30, 'Tetanus Difteri', '2015-04-05', '2017-04-05', 'jangan makan pedas');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kb`
--

INSERT INTO `kb` (`id_kb`, `tgl_kunjungan`, `no_reg`, `nama`, `berat_badan`, `tekanan_darah`, `metode_kb`, `jadwal_kunjungan_ulang`, `keterangan`) VALUES
(1, '2018-10-15', 2, 'Mimin Mintarsih', 70, '110/90', 'IUD COPPERTY', '2018-05-10', 'sukses kb');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kunjungan_umum`
--

INSERT INTO `kunjungan_umum` (`id_kunjungan`, `tgl_kunjungan`, `no_reg`, `nama`, `keluhan`, `terapi`, `keterangan`) VALUES
(2, '2018-10-15', 1, 'Alven', 'Sakit Setelah Kehamilan', 'Farsidol Forte,Paracetamol Syrup,', 'Obatnya habiskan');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(15) DEFAULT NULL,
  `harga_obat` int(7) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `jenis_obat`, `harga_obat`, `keterangan`) VALUES
(1, 'Paracetamol Syrup', 'Syrup', 7500, '0'),
(2, 'Farsidol Forte', 'Syrup', 15000, '0'),
(3, 'Pasaba cought and flu', 'Syrup', 15000, '-');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `tgl_kunjungan`, `no_reg`, `nama`, `jenis_berobat`, `tindakan`, `biaya_berobat`, `biaya_obat`, `total_harga`) VALUES
(1, '2018-10-15', 1, 'Alven', 'Melahirkan', '-', 650000, 0, 650000),
(2, '2018-10-15', 2, 'Mimin Mintarsih', 'Kunjungan Umum', 'Intunal F,Antimo,', 80000, 8000, 88000),
(3, '2018-10-15', 1, 'Alven', 'Kunjungan Umum', 'Farsidol Forte,Paracetamol Syrup,', 80000, 22500, 102500),
(4, '2018-10-15', 1, 'Alven', 'Imunisasi', 'Tetanus Difteri', 60000, 0, 60000),
(5, '2018-10-15', 2, 'Mimin Mintarsih', 'KB', 'IUD COPPERTY', 250000, 0, 250000),
(6, '2018-10-15', 2, 'Mimin Mintarsih', 'Antenatal Care', 'Trimester 2: Gestiamin Z + Calcifar 20', 60000, 22500, 82500),
(7, '2018-10-15', 1, 'Alven', 'Melahirkan', '-', 650000, 0, 650000);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `no_reg` int(4) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `tgl_daftar` date NOT NULL,
  PRIMARY KEY (`no_reg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_reg`, `nama`, `nama_suami`, `tgl_lahir`, `alamat`, `no_hp`, `tgl_daftar`) VALUES
(1, 'Alven', 'Hikmat', '1989-08-05', 'Bandung ', '085478569852', '2018-10-15'),
(2, 'Mimin Mintarsih', 'Bambang Kun Mulyanto', '1963-12-07', 'Permata Biru ', '085715163620', '2018-10-15');

-- --------------------------------------------------------

--
-- Table structure for table `persalinan`
--

CREATE TABLE IF NOT EXISTS `persalinan` (
  `id_persalinan` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_kunjungan` date NOT NULL,
  `no_reg` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `taksiran_persalinan` datetime NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `jam_lahir` datetime DEFAULT NULL,
  `jenis_kelamin` varchar(12) DEFAULT NULL,
  `berat_badan` float(5,2) DEFAULT NULL,
  `panjang_badan` float(5,2) DEFAULT NULL,
  `penolong` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_persalinan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `persalinan`
--

INSERT INTO `persalinan` (`id_persalinan`, `tgl_kunjungan`, `no_reg`, `nama`, `nama_suami`, `taksiran_persalinan`, `diagnosa`, `jam_lahir`, `jenis_kelamin`, `berat_badan`, `panjang_badan`, `penolong`) VALUES
(2, '2018-10-15', 1, 'Alven', 'Hikmat', '2018-10-24 20:00:00', 'Bukaan 1', '2018-10-25 10:30:00', 'Perempuan', 3.90, 37.50, 'Wulan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
