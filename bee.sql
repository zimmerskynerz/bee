-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2020 at 09:23 AM
-- Server version: 10.5.4-MariaDB
-- PHP Version: 7.4.8RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bee`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nm_lengkap` text NOT NULL,
  `no_hp` text NOT NULL,
  `alamat` text NOT NULL,
  `tgl_gabung` date NOT NULL,
  `status` enum('AKTIF','HAPUS','BLOKIR') NOT NULL,
  `status_pegawai` enum('ADMIN','PEMILIK') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `email`, `password`, `nm_lengkap`, `no_hp`, `alamat`, `tgl_gabung`, `status`, `status_pegawai`) VALUES
(1, 'pemilik@pemilik.com', '9d127228d15be02d35d734084e571731', 'Ari A Wijaya', '08291829398398', 'Kudus', '2020-12-09', 'AKTIF', 'PEMILIK'),
(2, 'aji@gmail.com', '8253b3d1771b5edd8d960abb1505c053', 'Aji Wijaya2', '0829382982', 'Kudus', '2020-12-09', 'AKTIF', 'ADMIN'),
(3, 'admin@gmail.com', '9d127228d15be02d35d734084e571731', 'Lovan', '23923929', 'KUDUS', '2020-12-15', 'AKTIF', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat`
--

CREATE TABLE `tbl_chat` (
  `id_chat` int(9) NOT NULL,
  `id_konsumen` int(9) NOT NULL,
  `id_admin` int(9) NOT NULL,
  `sender` enum('K','A') NOT NULL,
  `type` enum('TEXT','GAMBAR','TRANSAKSI') NOT NULL,
  `isi_chat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_chat`
--

INSERT INTO `tbl_chat` (`id_chat`, `id_konsumen`, `id_admin`, `sender`, `type`, `isi_chat`) VALUES
(1, 2, 1, 'K', 'TEXT', 'halo'),
(2, 2, 1, 'K', 'TEXT', 'welcl'),
(3, 2, 1, 'K', 'TEXT', 'jfgklsdf'),
(4, 2, 1, 'K', 'TEXT', 'sdfkjsdf'),
(5, 2, 1, 'K', 'TEXT', 'j;sdfjk'),
(6, 2, 1, 'K', 'TEXT', 'jksdf'),
(7, 2, 1, 'K', 'TEXT', 'jksdf'),
(8, 2, 1, 'K', 'TEXT', 'jl;sdf'),
(9, 2, 1, 'K', 'TEXT', 'j;sdf'),
(10, 2, 1, 'K', 'TEXT', 'j;sdf'),
(11, 2, 1, 'K', 'TEXT', 'jh;sdf'),
(12, 2, 1, 'K', 'TEXT', 'jsdf'),
(13, 2, 1, 'K', 'TEXT', '\'piksdf\'js;df'),
(14, 2, 1, 'K', 'TEXT', 'jsdfj;\''),
(15, 2, 1, 'K', 'TEXT', 'jdsf;'),
(16, 2, 1, 'K', 'TEXT', 'jsdof'),
(17, 2, 1, 'K', 'TEXT', 'jsdf'),
(18, 2, 1, 'K', 'TEXT', 'jksdfj'),
(19, 2, 1, 'K', 'TEXT', 'jksdlf'),
(20, 2, 1, 'K', 'TEXT', 'jkijfsdksjdf'),
(21, 2, 1, 'K', 'TEXT', 'skdljf;sd'),
(22, 2, 1, 'K', 'TEXT', 'jghj'),
(23, 2, 1, 'K', 'TEXT', 'fd'),
(24, 2, 2, 'A', 'TEXT', 'daa'),
(25, 2, 2, 'A', 'TEXT', 'apakabar'),
(26, 2, 1, 'K', 'TEXT', 'apasaja'),
(27, 2, 1, 'K', 'TEXT', 'halo'),
(28, 2, 2, 'A', 'TRANSAKSI', '358bede1ce0d9804da041363e363fd18.png|Logo|Apa saja|1|100000'),
(29, 2, 1, 'K', 'GAMBAR', 'c1805db8dad7d1d05b84c07fbe621cfd.png'),
(30, 2, 1, 'K', 'GAMBAR', '6ce357b2d9616764bbd08e8925ba6b7a.png'),
(31, 2, 1, 'K', 'GAMBAR', '0cc5e9655e3cb21a3b7d1735d53339a5.jpg'),
(32, 2, 1, 'K', 'GAMBAR', '2ed978971f0cf759b47bce3ea8d80b73.jpg'),
(33, 2, 1, 'K', 'TEXT', 'aaaa'),
(34, 2, 2, 'A', 'TEXT', 'sadasa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konsumen`
--

CREATE TABLE `tbl_konsumen` (
  `id_konsumen` int(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nm_konsumen` text NOT NULL,
  `no_hp` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `status_validasi` enum('DAFTAR','AKTIF','BLOKIR','HAPUS','TOLAK') NOT NULL DEFAULT 'DAFTAR',
  `tgl_daftar` date NOT NULL,
  `ket_lain` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_konsumen`
--

INSERT INTO `tbl_konsumen` (`id_konsumen`, `email`, `password`, `nm_konsumen`, `no_hp`, `alamat`, `foto`, `status_validasi`, `tgl_daftar`, `ket_lain`) VALUES
(1, 'lovanio@gmail.com', '9d127228d15be02d35d734084e571731', 'LOVAN', '0895411547434', 'KUDUS', 'default.png', 'AKTIF', '2020-12-10', NULL),
(2, 'ajiw100@gmail.com', '9d127228d15be02d35d734084e571731', 'Aji WIjaya', '08398388383', 'Kudus', 'default.png', 'AKTIF', '2020-12-11', 'DAFTAR');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(9) NOT NULL,
  `nm_produk` text NOT NULL,
  `foto_produk` text NOT NULL,
  `detail_produk` text NOT NULL,
  `harga_produk` int(9) NOT NULL,
  `status_produk` enum('ADA','HAPUS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `nm_produk`, `foto_produk`, `detail_produk`, `harga_produk`, `status_produk`) VALUES
(1, 'Logo', '358bede1ce0d9804da041363e363fd18.png', 'Apa saja', 3000000, 'ADA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_traksaksi`
--

CREATE TABLE `tbl_traksaksi` (
  `id_transaksi` int(9) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `id_konsumen` int(9) NOT NULL,
  `id_produk` int(9) NOT NULL,
  `foto_bayar` text DEFAULT NULL,
  `status_transaksi` enum('KONFIRMASI','BAYAR','PROSES','SELESAI','TOLAK') NOT NULL,
  `ket_lain` text DEFAULT NULL,
  `jml_barang` int(9) DEFAULT NULL,
  `total_harga` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_traksaksi`
--

INSERT INTO `tbl_traksaksi` (`id_transaksi`, `tgl_transaksi`, `tgl_bayar`, `tgl_selesai`, `id_konsumen`, `id_produk`, `foto_bayar`, `status_transaksi`, `ket_lain`, `jml_barang`, `total_harga`) VALUES
(2, '2020-12-10', '2020-12-10', '2020-12-11', 1, 1, '1527432881_27-05-2018_photo6077615961109801020.jpg', 'SELESAI', 'BARANG ANDA SEDANG DIKIRIM. NO RESI : fds322323', 2, 6000000),
(3, '2020-12-11', '2020-12-15', '2020-12-15', 2, 1, 'f3ea45612baf2f7b780c0516058c051d.png', 'SELESAI', 'BARANG ANDA SEDANG DIKIRIM. NO RESI : 32323232', 12, 1),
(4, '2020-12-16', NULL, NULL, 2, 1, NULL, 'KONFIRMASI', 'NEGO', 3, 23000),
(5, '2020-12-18', NULL, NULL, 2, 1, NULL, 'KONFIRMASI', 'NEGO', 1, 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD PRIMARY KEY (`id_chat`),
  ADD KEY `use_id_konsumen01` (`id_konsumen`),
  ADD KEY `use_id_admin01` (`id_admin`);

--
-- Indexes for table `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  ADD PRIMARY KEY (`id_konsumen`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_traksaksi`
--
ALTER TABLE `tbl_traksaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `use_konsumen1` (`id_konsumen`),
  ADD KEY `use_produk` (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `id_chat` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  MODIFY `id_konsumen` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_traksaksi`
--
ALTER TABLE `tbl_traksaksi`
  MODIFY `id_transaksi` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  ADD CONSTRAINT `use_id_admin01` FOREIGN KEY (`id_admin`) REFERENCES `tbl_admin` (`id_admin`),
  ADD CONSTRAINT `use_id_konsumen01` FOREIGN KEY (`id_konsumen`) REFERENCES `tbl_konsumen` (`id_konsumen`);

--
-- Constraints for table `tbl_traksaksi`
--
ALTER TABLE `tbl_traksaksi`
  ADD CONSTRAINT `use_konsumen1` FOREIGN KEY (`id_konsumen`) REFERENCES `tbl_konsumen` (`id_konsumen`),
  ADD CONSTRAINT `use_produk` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
