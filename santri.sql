-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2019 at 01:47 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `santri`
--

-- --------------------------------------------------------

--
-- Table structure for table `asrama`
--

CREATE TABLE IF NOT EXISTS `asrama` (
`id_asrama` int(11) NOT NULL,
  `nama_asrama` varchar(100) NOT NULL,
  `gedung` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asrama`
--

INSERT INTO `asrama` (`id_asrama`, `nama_asrama`, `gedung`) VALUES
(1, 'A1', 'Gedung A'),
(3, 'A2', 'Gedung A'),
(4, 'B1', 'Gedung B');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
`id_paket` int(11) NOT NULL,
  `jns_paket` varchar(100) NOT NULL,
  `nama_paket` varchar(100) NOT NULL,
  `tgl_terima` date NOT NULL,
  `kategori_paket` int(11) NOT NULL,
  `penerima` int(11) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `isi_disita` varchar(100) NOT NULL,
  `status_paket` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `jns_paket`, `nama_paket`, `tgl_terima`, `kategori_paket`, `penerima`, `pengirim`, `isi_disita`, `status_paket`) VALUES
(1, 'masuk', 'Barang 1', '1970-01-01', 1, 1, 'Syaiful', 'tidak ada', 'Belum Diambil'),
(3, 'masuk', 'Barang A', '2019-03-10', 2, 1, 'Syaiful', 'Bantal', 'Belum Diambil'),
(6, 'masuk', 'ssadds2', '2019-03-04', 4, 1, 'dsadssa2', 'sddasdsa2', 'Belum Diambil'),
(8, 'masuk', 'asdasd', '2019-03-10', 3, 1, 'asdas', 'saddsasad', 'Sudah Diambil'),
(9, 'masuk', 'asdsadsa', '2019-03-10', 3, 1, 'sadsa', 'saddsa', 'Sudah Diambil'),
(10, 'masuk', 'ssadds2', '2019-03-02', 4, 1, 'dsadssa2', 'sddasdsa2', 'Belum Diambil'),
(11, 'keluar', 'Pakaiana', '2019-03-03', 2, 2, 'Rifais', '-', 'Belum Diambil');

-- --------------------------------------------------------

--
-- Table structure for table `paket_kategori`
--

CREATE TABLE IF NOT EXISTS `paket_kategori` (
`id_pktkat` int(11) NOT NULL,
  `kode_pktkat` varchar(100) NOT NULL,
  `nama_pktkat` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_kategori`
--

INSERT INTO `paket_kategori` (`id_pktkat`, `kode_pktkat`, `nama_pktkat`) VALUES
(1, 'MAK', 'Makanan'),
(2, 'PAK', 'Pakaian'),
(3, 'ATK', 'ATK'),
(4, 'LAIN', 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `santri`
--

CREATE TABLE IF NOT EXISTS `santri` (
  `nis` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_asrama` int(11) NOT NULL,
  `total_paket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `santri`
--

INSERT INTO `santri` (`nis`, `nama`, `alamat`, `id_asrama`, `total_paket`) VALUES
('1', 'Ahmad F', 'MalanG', 1, 4),
('2', 'Alif', 'Surabaya', 3, 0),
('3', 'Sayful', 'Malang', 1, 0),
('4', 'Roni', 'Malang', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`iduser` int(11) NOT NULL,
  `namauser` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `akses` varchar(200) NOT NULL,
  `ketuser` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `namauser`, `username`, `password`, `akses`, `ketuser`, `jabatan`) VALUES
(1, 'admin', '000000', 'e10adc3949ba59abbe56e057f20f883e', 'administrator', '0', ''),
(3, 'Pusat', '111111', 'e10adc3949ba59abbe56e057f20f883e', '', '', ''),
(4, 'admin2', '999999', 'e10adc3949ba59abbe56e057f20f883e', 'administrator', '0', ''),
(5, 'Pusat2', '222222', 'e10adc3949ba59abbe56e057f20f883e', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asrama`
--
ALTER TABLE `asrama`
 ADD PRIMARY KEY (`id_asrama`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
 ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `paket_kategori`
--
ALTER TABLE `paket_kategori`
 ADD PRIMARY KEY (`id_pktkat`);

--
-- Indexes for table `santri`
--
ALTER TABLE `santri`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asrama`
--
ALTER TABLE `asrama`
MODIFY `id_asrama` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `paket_kategori`
--
ALTER TABLE `paket_kategori`
MODIFY `id_pktkat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
