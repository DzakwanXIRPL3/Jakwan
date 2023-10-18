-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2023 pada 07.29
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `11rpl3_22_mdzakwan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barokah`
--

CREATE TABLE `tb_barokah` (
  `id` int(11) NOT NULL,
  `KodeBarang` varchar(15) NOT NULL,
  `NamaBarang` varchar(200) NOT NULL,
  `SatuanBarang` varchar(15) NOT NULL,
  `StockBarang` int(11) NOT NULL,
  `HargaBarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_barokah`
--

INSERT INTO `tb_barokah` (`id`, `KodeBarang`, `NamaBarang`, `SatuanBarang`, `StockBarang`, `HargaBarang`) VALUES
(2, '213', 'semen gresik', 'kilogram', 20, 50000),
(3, '214', 'semen bosowa', 'kilogram', 30, 65000),
(4, '215', 'kramik putih', 'pack', 25, 45000),
(5, '216', 'semen putih', 'kilogram', 15, 40000),
(6, '217', 'dempul', 'kilogram', 15, 25000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barokah`
--
ALTER TABLE `tb_barokah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barokah`
--
ALTER TABLE `tb_barokah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
