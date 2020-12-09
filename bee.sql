-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 08:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

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
(1, 'pemilik@pemilik.com', '9d127228d15be02d35d734084e571731', 'Ari A Wijaya', '08291829398398', 'Kudus', '2020-12-09', 'AKTIF', 'ADMIN'),
(2, 'aji@gmail.com', 'ADMIN123abc', 'Aji Wijaya2', '0829382982', 'Kudus', '2020-12-09', 'AKTIF', 'ADMIN');

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
  `tgl_lahir` date DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `status_validasi` enum('DAFTAR','AKTIF','BLOKIR','HAPUS','TOLAK') NOT NULL DEFAULT 'DAFTAR',
  `tgl_daftar` date NOT NULL,
  `ket_lain` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Logo', '3adad2482757069ae8d0a1fe660f76c3.jpg', 'Apa saja', 3000000, 'ADA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_traksaksi`
--

CREATE TABLE `tbl_traksaksi` (
  `id_transaksi` int(9) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `id_konsumen` int(9) NOT NULL,
  `id_produk` int(9) NOT NULL,
  `foto_bayar` text NOT NULL,
  `status_transaksi` enum('KONFIRMASI','BAYAR','PROSES','SELESAI') NOT NULL,
  `ket_lain` text DEFAULT NULL,
  `ongkir` int(9) DEFAULT NULL,
  `total_harga` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id_admin` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_chat`
--
ALTER TABLE `tbl_chat`
  MODIFY `id_chat` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  MODIFY `id_konsumen` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_traksaksi`
--
ALTER TABLE `tbl_traksaksi`
  MODIFY `id_transaksi` int(9) NOT NULL AUTO_INCREMENT;

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
