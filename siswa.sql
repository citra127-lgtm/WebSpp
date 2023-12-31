-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2023 pada 03.02
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapembayaranspp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(30) NOT NULL,
  `NISN` int(30) NOT NULL,
  `NAMA_SISWA` varchar(30) NOT NULL,
  `KELAS_JURUSAN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `NISN`, `NAMA_SISWA`, `KELAS_JURUSAN`) VALUES
(1, 0, '', ''),
(2, 872635, 'YANQING', 'XI ORACLE'),
(3, 8672533, 'NANA', 'XI '),
(4, 9283773, 'ELIS HER', 'XI ORACLE'),
(5, 18263297, 'HIMEKO', 'XI ORACLE'),
(6, 23983474, 'GEFARD', 'XI ORACLE'),
(7, 62875309, 'SIFA SALFANA', 'XI ORACLE'),
(8, 65510142, 'CITRA GADIS MARINDAU', 'XI ORACLE'),
(9, 73644072, 'KAYLA FITRIA RAHMAN', 'XI ORACLE'),
(10, 74819832, 'SYIFA SALSABILA', 'XI ORACLE'),
(11, 76777774, 'DAFFANISA NURUL FAJRIN', 'XI ORACLE'),
(12, 77610563, 'ELIS HERNAWATI', 'XI ORACLE'),
(13, 77817904, 'PASYA MUHAMMAD RIZKY', 'XI ORACLE'),
(14, 78428154, 'YUSUF DWI SAPUTRA', 'XI ORACLE'),
(15, 79123749, 'SHALMAN ALFHARIZI', 'XI ORACLE'),
(16, 79212640, 'DEVANDRA  APRILIAN GUSTIANTO', 'XI ORACLE'),
(17, 83378264, 'ELIS', 'XI ORACLE'),
(18, 91838244, 'PAK TEDI', 'XI ORACLE');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
