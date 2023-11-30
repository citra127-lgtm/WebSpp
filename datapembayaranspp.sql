-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Agu 2023 pada 05.50
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
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_PEMBAYARAN` int(30) NOT NULL,
  `ID_SISWA` int(30) NOT NULL,
  `ID_STAF_ATAU_GURU` int(30) NOT NULL,
  `TANGGAL_PEMBAYARAN` date NOT NULL,
  `NOMINAL` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`ID_PEMBAYARAN`, `ID_SISWA`, `ID_STAF_ATAU_GURU`, `TANGGAL_PEMBAYARAN`, `NOMINAL`) VALUES
(11276, 65510142, 1097328798, '2022-11-07', 150000),
(19867, 65510142, 1572390765, '2022-12-27', 150000),
(12323, 65510142, 1987652576, '2023-01-10', 150000),
(18276, 65510142, 1203975912, '2023-02-07', 150000),
(17286, 65510142, 1689926534, '2023-03-13', 150000),
(17254, 65510142, 1572390765, '2023-04-20', 150000),
(12767, 65510142, 1097328798, '2023-08-02', 150000),
(12765, 65510142, 1876298765, '2023-07-18', 150000),
(12753, 65510142, 1686290876, '2023-06-14', 150000),
(16352, 65510142, 1992051420, '2023-05-18', 150000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `NISN` int(30) NOT NULL,
  `NAMA_SISWA` varchar(30) NOT NULL,
  `KELAS_JURUSAN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NISN`, `NAMA_SISWA`, `KELAS_JURUSAN`) VALUES
(0, 'FU XUAN', 'XI ORACLE'),
(6510142, 'CITRA GADIS MARINDAU', 'XI ORACLE'),
(62875309, 'SIFA SALFANA', 'XI ORACLE'),
(73644072, 'KAYLA FITRIA RAHMAN', 'XI ORACLE'),
(74819832, 'SYIFA SALSABILA', 'XI ORACLE'),
(76777774, 'DAFFANISA NURUL FAJRIN', 'XI ORACLE'),
(77610563, 'ELIS HERNAWATI', 'XI ORACLE'),
(77817904, 'PASYA MUHAMMAD RIZKY', 'XI ORACLE'),
(78428154, 'YUSUF DWI SAPUTRA', 'XI ORACLE'),
(79123749, 'SHALMAN ALFHARIZI', 'XI ORACLE'),
(79212640, 'DEVANDRA  APRILIAN GUSTIANTO', 'XI ORACLE'),
(91827623, 'DAN HENG IL', 'XI ORACLE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tu`
--

CREATE TABLE `tu` (
  `NIP_GURU_ATAU_STAF` int(30) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `JABATAN` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tu`
--

INSERT INTO `tu` (`NIP_GURU_ATAU_STAF`, `NAMA`, `JABATAN`) VALUES
(1097328798, 'AZAM', 'GURU'),
(1203975912, 'PRIETA', 'GURU'),
(1572390765, 'IRFAN', 'GURU'),
(1578543211, 'YOGI', 'GURU'),
(1686290876, 'APIS', 'GURU'),
(1689926534, 'INTAN', 'GURU'),
(1876298765, 'ELISA', 'GURU'),
(1973652345, 'PRAKAS', 'GURU'),
(1987652576, 'FARDI', 'GURU'),
(1992051420, 'SITI', 'GURU');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NISN`);

--
-- Indeks untuk tabel `tu`
--
ALTER TABLE `tu`
  ADD PRIMARY KEY (`NIP_GURU_ATAU_STAF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;