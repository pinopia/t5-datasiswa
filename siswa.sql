-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Sep 2023 pada 09.07
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
-- Database: `siswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(50) NOT NULL,
  `nis` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `noTelepon` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `beratBadan` varchar(10) NOT NULL,
  `tinggiBadan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nis`, `nama`, `jeniskelamin`, `noTelepon`, `alamat`, `beratBadan`, `tinggiBadan`) VALUES
(1, 340554001, 'Budi Santoso', 'L', '08', 'Jl. Pajajaran no.12 Sumberwangi Pakusari', '60', '160'),
(2, 340554002, 'Siti Rahayu', 'P', '08', 'Jl. Pendidikan no.02 Sumberjambe Pakusari', '66', '156'),
(3, 340554003, 'Iwan Setiawan', 'L', '08', 'Jl. Alap-alap no. 01 Sumberwuluh Pakusari', '65', '146'),
(4, 340554004, 'Ani Wijaya', 'P', '08', 'Jl. Ky Mojo no. 14 Sumberrejo Pakusari', '45', '158'),
(5, 340554005, 'Rudi Hermawan', 'L', '08', 'Jl. Brantas no.32 Sumberwangi Pakusari', '95', '169'),
(6, 340554006, 'Dewi Cahyani', 'P', '08', 'Jl. Cempaka no.54 Sumberrejo Pakusari', '54', '135'),
(7, 340554007, 'Adi Nugroho', 'L', '08', 'Jl. Dinoyo no 33 Sumberwulu Pakusari', '52', '129'),
(8, 340554008, 'Maya Indah', 'P', '08', 'Jl. Embong no 22 Sumberjambe Pakusari', '63', '162'),
(9, 340554009, 'Joko Prasetyo', 'L', '08', 'Jl. Geguritan no.84 Sumberwangi Pakusari', '48', '152'),
(10, 2147483647, 'Nita Utami', 'p', '08', 'Jl. Palapa no.65 Sumberwang Pakusari', '59', '149');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
