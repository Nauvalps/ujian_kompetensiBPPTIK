-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 07:11 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` varchar(20) NOT NULL,
  `nama_anggota` varchar(35) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `status_anggota` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `alamat`, `status_anggota`) VALUES
('A0010', 'Ina Kurniati', 'Tanjung Priuk', 'Mahasiswa'),
('A0020', 'M.Idris', 'Pondok Benda', 'Pelajar'),
('A0030', 'Aas Bahtiar', 'Kemayoran', 'Mahasiswa'),
('A0040', 'Randika', 'Taman Anggrek', 'Pelajar'),
('A0050', 'Dinda Aprilia', 'Salemba', 'Mahasiswa'),
('A0060', 'Silvana', 'Matraman', 'Pelajar');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_anggota_peminjaman` varchar(35) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `kode_buku` varchar(35) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lama_pinjam` varchar(35) NOT NULL,
  `keadaan_buku` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_anggota_peminjaman`, `nama_anggota`, `kode_buku`, `tgl_pinjam`, `tgl_kembali`, `lama_pinjam`, `keadaan_buku`) VALUES
('A0020', 'M.Idris', 'B0060', '2018-11-10', '2018-11-24', '2 minggu', 'Hilang'),
('A0050', 'Dinda Aprilia', 'B0020', '2018-11-12', '2018-12-19', '1 minggu', 'Rusak'),
('A0060', 'Silvana', 'B0040', '2018-12-01', '2018-12-08', '1 minggu', 'Cacat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `kode_buku` varchar(35) NOT NULL,
  `judul_buku` varchar(35) NOT NULL,
  `pengarang_buku` varchar(20) NOT NULL,
  `stok_buku` int(6) NOT NULL,
  `penerbit_buku` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`kode_buku`, `judul_buku`, `pengarang_buku`, `stok_buku`, `penerbit_buku`) VALUES
('B0010', 'Intermediate Akuntasi', 'Zaki Baridwan', 150, 'Pustaka Jaya'),
('B0020', 'PHP dan MYSQL', 'Bunafit Nugroho', 100, 'Erlangga'),
('B0030', 'Detektive Conan', 'Sakura Motto', 75, 'Pustaka Jaya'),
('B0040', 'Aqidah Akhlaq Fiqih Islam', 'Setiawan', 150, 'Pustaka Jaya'),
('B0050', 'Membuat Aplikasi Akuntansi dengan e', 'Moh,Taufiq, S.E', 120, 'Erlangga'),
('B0060', 'Menjadi Dokter Virus Komputer', 'Rahmat Putra', 90, 'Erlangga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_anggota_peminjaman`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`kode_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
