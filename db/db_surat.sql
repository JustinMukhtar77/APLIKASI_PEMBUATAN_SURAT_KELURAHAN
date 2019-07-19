-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 05:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelahiran`
--

CREATE TABLE `tb_kelahiran` (
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelahiran`
--

INSERT INTO `tb_kelahiran` (`nama`, `jk`, `nama_ayah`, `nama_ibu`, `tempat`, `tanggal`) VALUES
('lutfi anshori', 'on', 'sadas', 'sadas', 'sampang', '2018-06-11'),
('salam', 'on', 'asa', 'asda', 'djhfjakh', '2018-05-11'),
('febriyanto', 'perempuan', 'sadas', 'asda', 'lskdlkd', '2018-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kematian`
--

CREATE TABLE `tb_kematian` (
  `no` int(11) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `tempat` varchar(50) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `penyebab` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kematian`
--

INSERT INTO `tb_kematian` (`no`, `nik`, `nama`, `jk`, `tempat`, `tanggal`, `penyebab`) VALUES
(1, 2, 'sudin', 'laki-laki', 'madura', '02201', 'sakit'),
(1, 2, 'sudin', 'laki-laki', 'madura', '02201', 'sakit'),
(1, 122, 'sdasds', 'perempuan', 'asdasd', '2019-07-30', 'kecelakaan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
