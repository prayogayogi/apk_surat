-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2021 pada 07.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_teknik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dosen`
--

CREATE TABLE `data_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jabatan` varchar(250) NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_dosen`
--

INSERT INTO `data_dosen` (`id_dosen`, `nama`, `jabatan`, `no_hp`, `gambar`) VALUES
(17, 'landan', 'staf tu', '08525748595', 'foto2.jpg'),
(19, 'Andas Marta', 'Dosen Programer Mobile', '085356258600', 'Screenshot_(80).png'),
(20, 'ramahdan', 'dosen intern', '085234142', 'Screenshot_(19).png'),
(21, 'randi', 'web programing', '085380385', 'Screenshot_(20).png'),
(22, 'anggi', 'mobile', '0836676863', 'Screenshot_(27).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_magang`
--

CREATE TABLE `data_magang` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npm` int(15) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_magang`
--

INSERT INTO `data_magang` (`id`, `nama`, `npm`, `semester`, `email`, `alamat`) VALUES
(1, 'Muhammad amin', 1760100134, 'IV', 'amin@gmail.com', 'padang guci, bengkulu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` int(50) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nama`, `email`, `no_hp`, `gambar`) VALUES
(8, 'yogi  prayoga', 'yogiprayoga@gmail.com', 2147483647, 'photo1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Admin'),
(2, 'Pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id` int(11) NOT NULL,
  `no_agenda` varchar(225) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `no_surat` int(255) NOT NULL,
  `isi_surat` varchar(500) NOT NULL,
  `tgl_surat` int(20) NOT NULL,
  `tgl_diterima` int(23) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suratkeluar`
--

INSERT INTO `suratkeluar` (`id`, `no_agenda`, `pengirim`, `no_surat`, `isi_surat`, `tgl_surat`, `tgl_diterima`, `keterangan`, `file`) VALUES
(3, '757', 'Dinas pendidikan ', 748, 'surat rekomendasi', 2021, 2021, 'private', 'Screenshot_(46).png'),
(4, 'ab-43', 'Dinas kesehatan', 89, 'Surat Dinas ', 2021, 2021, '-', 'ktp.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id` int(11) NOT NULL,
  `no_agenda` varchar(200) NOT NULL,
  `pengirim` varchar(200) NOT NULL,
  `no_surat` int(250) NOT NULL,
  `isi_surat` varchar(250) NOT NULL,
  `tgl_surat` int(255) NOT NULL,
  `tgl_diterima` int(255) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`id`, `no_agenda`, `pengirim`, `no_surat`, `isi_surat`, `tgl_surat`, `tgl_diterima`, `keterangan`, `file`) VALUES
(7, '88', 'Dinas perpustakan', 9, 'surat penting', 2021, 2021, 'wajip', 'Screenshot_(52).png'),
(9, '75', 'Dinas Komunikasi', 2, 'Surat Dinas Komunikasi', 2021, 2021, 'wajip', 'Screenshot_(46).png'),
(10, '850', 'Dinas Perpusatakaan', 89, 'surat dinas', 2021, 2021, '-', 'ktp.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role_id` int(2) NOT NULL,
  `active` varchar(5) NOT NULL,
  `gambar` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `role_id`, `active`, `gambar`, `password`) VALUES
(12, 'Admin Yogi ', 'yogi@gmail.com', 1, '1', 'profile.jpg', '$2y$10$OePy5olyNA0ZPO6ajrcFfOIrxkCsZnQXZsmx/YCkNITmS7LjcYSqS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `data_magang`
--
ALTER TABLE `data_magang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_dosen`
--
ALTER TABLE `data_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `data_magang`
--
ALTER TABLE `data_magang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
