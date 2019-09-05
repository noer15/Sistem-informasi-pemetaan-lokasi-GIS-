-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 12:20 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hunafa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id_admin` int(11) NOT NULL DEFAULT '1',
  `username` varchar(50) DEFAULT NULL,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'dayat', '1855c11f044cc8944e8cdac9cae5def8');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
`id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`, `harga`) VALUES
(1, 'Morando Super Glazur Hitam', 3400),
(2, 'Morando Super Glazur Brown', 3400),
(3, 'Morando Super Glazur Natural', 3400),
(4, 'Morando Super Natural', 2250),
(5, 'Morando Super Glazur Hijau', 6000),
(6, 'Morando Super Glazur Biru Tua', 6000),
(7, 'Morando Super Glazur Maroon', 6000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lokasi`
--

CREATE TABLE IF NOT EXISTS `tbl_lokasi` (
`id_lokasi` int(11) NOT NULL,
  `nama_lokasi` text,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_lokasi`
--

INSERT INTO `tbl_lokasi` (`id_lokasi`, `nama_lokasi`, `latitude`, `longitude`) VALUES
(5, 'Jl. Kumbama Koloda No. 88, Majalengka', -6.7251, 108.541),
(7, 'Jl. Janaka Kencana No. 13A, Kedawung', -6.8163, 108.459),
(8, 'Jl. Akhmad Yani No. 12B, Cirebon', -6.96831, 108.215),
(9, 'Saiful Home', -6.75749, 108.498);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material`
--

CREATE TABLE IF NOT EXISTS `tbl_material` (
`id_material` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_supplier` int(11) DEFAULT NULL,
  `nama_material` varchar(50) DEFAULT NULL,
  `cirifisik_material` text,
  `ukuran_material` varchar(50) DEFAULT NULL,
  `warna_material` varchar(50) DEFAULT NULL,
  `kegunaan_material` text,
  `gambar_material` text,
  `harga` int(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1 COMMENT='m';

--
-- Dumping data for table `tbl_material`
--

INSERT INTO `tbl_material` (`id_material`, `id_kategori`, `id_supplier`, `nama_material`, `cirifisik_material`, `ukuran_material`, `warna_material`, `kegunaan_material`, `gambar_material`, `harga`) VALUES
(40, 3, 7, 'Genteng morando ipul', 'memiliki bentuk yang tebal', '32x23', 'coklat', 'atap bangunan', '1539338947.jpg', 3400);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partner`
--

CREATE TABLE IF NOT EXISTS `tbl_partner` (
`id_partner` int(11) NOT NULL,
  `nama_partner` varchar(50) DEFAULT NULL,
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `alamat_partner` varchar(50) DEFAULT NULL,
  `email_partner` varchar(50) DEFAULT NULL,
  `kebutuhan_partner` text
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_partner`
--

INSERT INTO `tbl_partner` (`id_partner`, `nama_partner`, `nama_perusahaan`, `alamat_partner`, `email_partner`, `kebutuhan_partner`) VALUES
(4, 'aaa', 'asa', 'zzcsa', 'sds', 'd'),
(6, 'dayat', 'ad', 'ss', 'sdsd', 'cccccc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE IF NOT EXISTS `tbl_supplier` (
`id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `alamat_supplier` text,
  `telp_supplier` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id_supplier`, `nama_supplier`, `alamat_supplier`, `telp_supplier`) VALUES
(7, 'Adam', 'Majalengka', '08512365422');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_lokasi`
--
ALTER TABLE `tbl_lokasi`
 ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tbl_material`
--
ALTER TABLE `tbl_material`
 ADD PRIMARY KEY (`id_material`), ADD KEY `FK_material_kategori` (`id_kategori`), ADD KEY `FK_material_supplier` (`id_supplier`);

--
-- Indexes for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
 ADD PRIMARY KEY (`id_partner`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
 ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_lokasi`
--
ALTER TABLE `tbl_lokasi`
MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_material`
--
ALTER TABLE `tbl_material`
MODIFY `id_material` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
MODIFY `id_partner` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_material`
--
ALTER TABLE `tbl_material`
ADD CONSTRAINT `FK_material_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
