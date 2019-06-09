-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2019 at 06:28 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`, `level`) VALUES
('AD001', 'Admin Ganteng', 'bayu', '123', 'super_admin'),
('AD002', 'Rianhard Evans Y.P.GG', 'epan', '123', 'admin'),
('AD003', 'wahyudi IS', 'wahyudi', '123', 'super_admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daftar`
--

CREATE TABLE `tbl_daftar` (
  `no_pendaftaran` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_pendaftar` varchar(30) NOT NULL,
  `pilihan_pendaftar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_daftar`
--

INSERT INTO `tbl_daftar` (`no_pendaftaran`, `nik`, `password`, `nama_pendaftar`, `pilihan_pendaftar`) VALUES
('PD001', '123456', '123', 'Bayu Junis Pribadi', 'TK B'),
('PD002', '1234556', '123', 'Wahyudi', 'PG Kecil'),
('PD003', '1234567', '123', 'Rianhard Evans Y.P.G', 'PG Besar'),
('PD004', '12345678', '123', 'Muhammad Fariz', 'TK A'),
('PD005', '123456789', '1233', 'Malik Van Vermallen', 'PG Kecil'),
('PD006', '11111', '123', 'Supriyono', 'TK B'),
('PD007', '12345', '123', 'Aliando', 'TK B'),
('PD008', '666', '123', 'Ahli', 'PG Besar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_formulir`
--

CREATE TABLE `tbl_formulir` (
  `id_formulir` varchar(30) NOT NULL,
  `no_pendaftaran` varchar(30) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `nama_panggilan` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `ttp_tgl` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `anak_ke` varchar(30) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `tgl_lahir_ayah` varchar(50) NOT NULL,
  `pendidikan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tgl_lahir_ibu` varchar(50) NOT NULL,
  `pendidikan_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `nama_jalan` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_formulir`
--

INSERT INTO `tbl_formulir` (`id_formulir`, `no_pendaftaran`, `nama_lengkap`, `nama_panggilan`, `jenis_kelamin`, `ttp_tgl`, `agama`, `anak_ke`, `nama_ayah`, `tgl_lahir_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `nama_ibu`, `tgl_lahir_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `nama_jalan`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `telp`, `gambar`) VALUES
('FM001', 'PD001', 'Bayu Junis Pribadi', 'Bayu', 'PEREMPUAN', 'Jakarta/07/06/1998', 'Islam', '1', 'Tigreal', 'Madiun/06/10/1968', 'SMA', 'Koki', 'Fanny', 'Kulon Progo/16/04/1974', 'SMA', 'Ibu Rumah Tangga', 'GDC Sektor Melati', 'Jatimulya', 'Cilodong', 'kota', 'Jawa Barat', '085782305163', 'sd.png'),
('FM002', 'PD002', 'Wahyudii', 'Wah', 'PEREMPUAN', 'Jakarta/07/06/1998', 'Islam', '1', 'Tigreal', 'Mars/20/12/2012', 'SMA', 'Pro Gamer', 'Wahyuni', 'Saturnus/13/12/11', 'SMA', 'Desain interior', 'Sesamaa', 'Land of Downn', 'Sukajadi', 'kota', 'Jawa Barat', '088881210121', 'indonesia6.jpg'),
('FM003', 'PD003', 'Rainhard Evans', 'Ronal', 'LAKI-LAKI', 'Massacusets/10/10/10', 'Atheis', '2', 'Chou', 'Bogor/12/12/12', 'SMA', 'Gamers', 'Karina', 'Mars/12/10/12', 'S1', 'Grandmaster', 'Buntu', 'Land of Down', 'Sukamakmur', 'Bogor', 'Jawa Barat', '0899991231239', 'person_3.jpg'),
('FM004', 'PD004', 'Muhammad Fariz Fadillah', 'Kucing', 'LAKI-LAKI', 'Kulonprogo/12/12/14', 'Islam', '1', 'Michael', 'Jember/12/10/14', 'SMA', 'Pro Gamer', 'Milea', 'Alaska/15/10/15', 'S1', 'Grandmaster', 'Baru', 'Sukamakmur', 'Sukajaya', 'Bogor', 'Jawa Barat', '08881667121', 'person_4.jpg'),
('FM005', 'PD005', 'Malik Van Vermallen', 'Maleeq', 'PEREMPUAN', 'Marine/12/10/92', 'Islam', '2', 'Rachmadi', 'Gunung lawu/10/12/19', 'SMA', 'Pro Gamer', 'Mariana', 'Bogor/12/09/13', 'S1', 'Street Fighter', 'Jalan Raya', 'Sukamadya', 'Sukamaju', 'kota', 'Jawa Timur', '097888121287182', 'person_1.jpg'),
('FM006', 'PD006', 'Supriyono Marwotaaa', 'AlexanderRR', 'LAKI-LAKI', '10/12/12', 'Islam', '2', 'Martin', 'Bengkulu/12/12/12', 'SMA', 'Street Fighter', 'Martina', 'Lembang/10/10/12', 'S1', 'Street Fighter', 'Baru', 'Lama', 'Sukaraja', 'Bogor', 'Jawa Barat', '0899128812912', 'dunia4.jpg'),
('FM007', 'PD007', 'Wahyudi', 'Bayu', 'PEREMPUAN', 'Jakarta/07/06/1998', 'Islam', '1', 'Tigreal', 'Mars/20/12/2012', 'SMA', 'Pro Gamer', 'Wahyuni', 'Saturnus/13/12/11', 'S1', 'Ibu Rumah Tangga', 'GDC Sektor Melati', 'Land of Down', 'Sukajadi', 'Bogor', 'Jawa Barat', '085782305163', 'ceria.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengaturan`
--

CREATE TABLE `tbl_pengaturan` (
  `id_pengaturan` varchar(30) NOT NULL,
  `status_daftar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengaturan`
--

INSERT INTO `tbl_pengaturan` (`id_pengaturan`, `status_daftar`) VALUES
('PG001', 'Buka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_daftar`
--
ALTER TABLE `tbl_daftar`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `tbl_formulir`
--
ALTER TABLE `tbl_formulir`
  ADD PRIMARY KEY (`id_formulir`);

--
-- Indexes for table `tbl_pengaturan`
--
ALTER TABLE `tbl_pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
