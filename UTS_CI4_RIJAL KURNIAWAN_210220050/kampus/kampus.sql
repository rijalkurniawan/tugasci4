-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2023 pada 11.02
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
-- Database: `kampus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `email_dosen` varchar(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `mata_kuliah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nama_dosen`, `email_dosen`, `nip`, `jabatan`, `mata_kuliah`) VALUES
(1, 'Rijal Kurniawan, S.Kom, M.M', 'rijalkurniawan1994@gmail.com', '22001910', 'Dekan Fakul Informatika', 'Pemograman PHP'),
(2, 'Dedi Mizwar, M.KOM', 'dedi123@yahoo.com', '22901777', 'Dosen Pengajar', 'Basis Data'),
(3, 'Irwansyah, M.KOM', 'irwan@gmail.com', '099989911', 'Dosen Pengajar', 'Pemograman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `email_mahasiswa` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `semester` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `email_mahasiswa`, `nim`, `jurusan`, `semester`) VALUES
(3, 'Rafli Ahmad', 'rafli2000@yahoo.com', '21081919', 'Ekonomi dan bisnis', 3),
(4, 'Rudi', 'rudi111@gmail.com', '23019911', 'Hukum', 1),
(5, 'Weni Nilam', 'wenilam@gmail.com', '20201994', 'Sistem Informasi', 6),
(6, 'Imron', 'imronbanten@gmail.com', '23231010', 'Hukum', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `level` int(11) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `created_at`, `updated_at`, `level`, `aktif`) VALUES
('admin', '$2y$10$jiHHV7JON2vQELi1YoxemOgap20m58bYFF8qTWrGoUmF2e9/SrFKm', 'rijal kurniawan', '2023-04-07 14:05:21', '2023-04-07 14:05:21', 0, 0),
('awan', '$2y$10$lUG/OaB5rjR84eiBUAB4Fuyo4woVAwg0a1tKQUEFWZ4tBcH1Ygzoi', 'awan kinton', '2023-04-03 12:32:29', '2023-04-03 12:32:29', 1, 0),
('rijal', '$2y$10$pxjBlvD/hzrGRDg5HJRkoetADSYPvMuI9yBYGL3O1dKpfY6Ab/LWa', 'rijal kurniawan', '2023-03-31 13:34:41', '2023-03-31 13:34:41', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
