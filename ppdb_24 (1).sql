-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2024 pada 05.40
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_24`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_casis`
--

CREATE TABLE `data_casis` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `nisn` int(10) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_casis`
--

INSERT INTO `data_casis` (`id`, `nama`, `nisn`, `jenis_kelamin`, `alamat`, `sekolah_asal`) VALUES
(19, 'dfghjmk,', 456, 'laki-laki', 'xcvbnm,', 'sdfvgbhnjmko7ip-0[uji mn'),
(20, 'sdfghjk', 453, 'laki-laki', 'fghjkl', 'liuyt5r4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_casis`
--
ALTER TABLE `data_casis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_casis`
--
ALTER TABLE `data_casis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
