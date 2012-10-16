-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2011 at 02:50 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pemjar`
--
CREATE DATABASE `pemjar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pemjar`;

-- --------------------------------------------------------

--
-- Table structure for table `itb`
--

CREATE TABLE IF NOT EXISTS `itb` (
  `id_prodi` int(5) NOT NULL AUTO_INCREMENT,
  `kode_prodi` varchar(5) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `kampus` varchar(35) NOT NULL,
  `website` varchar(20) NOT NULL,
  `akreditasi` char(2) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `itb`
--

INSERT INTO `itb` (`id_prodi`, `kode_prodi`, `nama_prodi`, `fakultas`, `kampus`, `website`, `akreditasi`, `longitude`, `latitude`, `alamat`) VALUES
(1, 'CD', 'Teknik Mesin', 'Teknik', 'Institut Teknologi Bandung', 'www.itb.ac.id', 'A', 107.669, -7.09091, 'Jln. Kebon Sawit Asmara');

-- --------------------------------------------------------

--
-- Table structure for table `its`
--

CREATE TABLE IF NOT EXISTS `its` (
  `id_prodi` int(5) NOT NULL AUTO_INCREMENT,
  `kode_prodi` varchar(5) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `kampus` varchar(35) NOT NULL,
  `website` varchar(20) NOT NULL,
  `akreditasi` char(2) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `its`
--

INSERT INTO `its` (`id_prodi`, `kode_prodi`, `nama_prodi`, `fakultas`, `kampus`, `website`, `akreditasi`, `longitude`, `latitude`, `alamat`) VALUES
(1, '6A', 'Teknik Electro', 'Teknik', 'Institut Teknologi Surabaya', 'www.its.ac.id', 'B', 112.734, -7.28917, 'Jln. Maju Mundur'),
(2, '5A', 'Teknik Informatika', 'Teknik', 'Institut Teknologi Surabaya', 'www.its.ac.id', 'A', 112.734, -7.28917, 'Jln. Maju Mundur');

-- --------------------------------------------------------

--
-- Table structure for table `uinjogja`
--

CREATE TABLE IF NOT EXISTS `uinjogja` (
  `id_prodi` int(5) NOT NULL AUTO_INCREMENT,
  `kode_prodi` varchar(5) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL,
  `fakultas` varchar(30) NOT NULL,
  `kampus` varchar(35) NOT NULL,
  `website` varchar(20) NOT NULL,
  `akreditasi` char(2) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_prodi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `uinjogja`
--

INSERT INTO `uinjogja` (`id_prodi`, `kode_prodi`, `nama_prodi`, `fakultas`, `kampus`, `website`, `akreditasi`, `longitude`, `latitude`, `alamat`) VALUES
(1, '65', 'Teknik Informatika', 'Sains dan Teknologi', 'UIN Sunan Kalijaga', 'www.saintek.uin-suka', 'A', 110.369, -7.79722, 'Jln.Masda Adi Sucipto YK');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
