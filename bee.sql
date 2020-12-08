-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2020 pada 10.24
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.3.22

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
-- Struktur dari tabel `tbl_konsumen`
--

CREATE TABLE `tbl_konsumen` (
  `id_konsumen` int(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nm_konsumen` text NOT NULL,
  `no_hp` text DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `jk` enum('1','2') DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `status_validasi` enum('DAFTAR','PROSES','VALIDASI','BLOKIR','HAPUS') NOT NULL DEFAULT 'DAFTAR',
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  ADD PRIMARY KEY (`id_konsumen`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  MODIFY `id_konsumen` int(9) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
