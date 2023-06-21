-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2023 pada 18.44
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelas_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelulusan`
--

CREATE TABLE `kelulusan` (
  `id_kelulusan` int(15) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `mata_pelajaran` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `kelulusan`
--

INSERT INTO `kelulusan` (`id_kelulusan`, `jk`, `jumlah`, `mata_pelajaran`, `status`) VALUES
(1, 'L', '7', 'Perancangan sistem', 'Lulus'),
(2, 'L', '2', 'Agama', 'Lulus'),
(3, 'P', '4', 'Perancangan sistem', 'Lulus'),
(4, 'P', '2', 'Basis data', 'Lulus'),
(5, 'P', '1', 'Perancangan sistem', 'Tidak Lulus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `mata_pelajaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `jk`, `jumlah`, `mata_pelajaran`) VALUES
(1, 'L', '7', 'Perancangan sistem'),
(2, 'L', '2', 'Agama'),
(3, 'P', '5', 'Perancangan sistem'),
(4, 'P', '2', 'Basis Data');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mata_pelajaran` int(15) NOT NULL,
  `sks` varchar(100) NOT NULL,
  `mata_pelajaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mata_pelajaran`, `sks`, `mata_pelajaran`) VALUES
(1, '2', 'Agama'),
(2, '3', 'Perancangan sistem'),
(3, '3', 'Basis data');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelulusan`
--
ALTER TABLE `kelulusan`
  ADD PRIMARY KEY (`id_kelulusan`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mata_pelajaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelulusan`
--
ALTER TABLE `kelulusan`
  MODIFY `id_kelulusan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mata_pelajaran` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
