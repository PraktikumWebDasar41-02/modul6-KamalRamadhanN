-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2018 pada 05.09
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kamalamaw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jnskel` varchar(10) NOT NULL,
  `prodi` varchar(20) NOT NULL,
  `fakultas` varchar(20) NOT NULL,
  `hobi` varchar(15) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`nim`, `nama`, `kelas`, `jnskel`, `prodi`, `fakultas`, `hobi`, `pass`, `alamat`) VALUES
('6701174088', 'amaw', 'D3MI-41-02', 'Laki-laki', 'MI', 'FIT', 'mancing', '123456', 'assss'),
('6701174089', 'Kamala', 'D3MI-41-01', 'Laki-laki', 'TK', 'FKB', 'balap', '123123123', 'gfjkl'),
('6701174140', 'Kamalamaw', 'D3MI-41-02', 'Laki-laki', 'MI', 'FIT', 'mancing', '123456789', 'Jalan Dokter Cipto Mangunkusumo Komplek CPM no 39'),
('6701174142', 'KamalRamadhanN', 'D3MI-41-02', 'Laki-laki', 'MI', 'FIT', 'balap', '123456', 'Jalaan Dokter Cipto Mangunkusumo Komplek CPM no 39'),
('6701174144', 'tolin', 'D3MI-41-01', 'Laki-laki', 'TK', 'FIT', 'mancing', '123456789', 'Jalan Dokter Cipto Mangunkusumo Komplek CPM no 39'),
('6701174145', 'Kamal', 'D3MI-41-02', 'Laki-laki', 'MI', 'FIT', 'mancing', '123456789', 'Jalan Dokter Cipto Mangunkusumo Komplek CPM no 39');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
