-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql307.byetcluster.com
-- Generation Time: Jul 18, 2023 at 10:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_34551565_penerimaan_siswa_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kode_progdi` varchar(16) NOT NULL,
  `nama_progdi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kode_progdi`, `nama_progdi`) VALUES
('AP004', 'Administrasi Perkantoran'),
('MM005', 'Multimedia'),
('RPL001', 'Rekayasa Perangkat Lunak'),
('SI003', 'Sistem Informasi'),
('TBG006', 'Tata Boga'),
('TKJ002', 'Teknik Komputer dan Jaringan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE `panitia` (
  `id_panitia` varchar(16) NOT NULL,
  `nama_panitia` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`id_panitia`, `nama_panitia`, `jenis_kelamin`, `alamat`) VALUES
('001', 'Mr Baek Yonsung', 'Laki-Laki', 'Jl Raya Gangnam No 1 Global '),
('002', 'Haki Sutampit', 'Laki-Laki', 'Jl Mulu');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(16) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `kode_progdi` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `jenis_kelamin`, `alamat`, `asal_sekolah`, `kode_progdi`) VALUES
('123', 'Nezuko', 'Perempuan', 'Jl Raya Kupu Kupu', 'SMPN Pembasmi Iblis 2', 'MM005'),
('123456789101112', 'Dzaki', 'Laki-Laki', 'Cibinong ajasih', 'SMA Cibinong ajasih', 'RPL001'),
('1241', 'Ryukisa', 'Perempuan', 'Bogor ', 'MTsN 60 Bogor', 'MM005'),
('202043502684', 'Syafiq Muhammad', 'Laki-Laki', 'Condet', 'SMPN 1 Jakarta Selatan', 'SI003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kode_progdi`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
  ADD PRIMARY KEY (`id_panitia`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
