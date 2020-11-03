-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Nov 2020 pada 01.45
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adityarusmanauts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tentang` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `nama`, `tentang`) VALUES
(1, 'Aditya Rusmana', 'Hallo perkenalkan nama saya Aditya Rusmana, saya laki - laki yang lahir pada tanggal 15 juni 2000, hobby saya adalah bermain futsal dan motoran, makanan kesukaan saya adalah tumis kangkung, saya sekolah dasar di SDN Pondok Kacang Timur 02, saya sekolah menengah pertama di SMP Al-Mubarak, dan saya sekolah menengah atas di SMK Bina Informatika, dan sekarang saya sedang kuliah di Universita Pembangunan Jaya. cita - cita saya dulu ingin sekali menjadi pilot, dan sekarang sangat ingin menjadi programmer yang handal, saya mempunyai sifat yang cuek dan susah berbaur banget.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `google` varchar(30) NOT NULL,
  `youtube` varchar(30) NOT NULL,
  `facebook` varchar(30) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `gambar` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `google`, `youtube`, `facebook`, `instagram`, `gambar`) VALUES
(1, 'adityarusmana48', 'adit channel', 'aditya rusmana', 'adityarus_', 0x61646974372e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` varchar(20) NOT NULL,
  `gambar` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `gambar`) VALUES
('01', 0x61646974312e6a7067),
('02', 0x61646974342e6a7067),
('03', 0x61646974362e6a7067),
('04', 0x61646974352e6a7067),
('05', 0x61646974382e6a7067),
('06', 0x61646974392e6a7067),
('07', 0x6164697431302e6a7067),
('08', 0x61646974322e6a7067),
('09', 0x61646974372e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id_home` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `gambar` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id_home`, `nama`, `deskripsi`, `gambar`) VALUES
(1, 'Aditya Rusmana', 'Selamat datang di website saya, nama saya aditya rusmana, disini kalian dapat mengetahui beberapa informasi mengenai saya, enjoy', 0x61646974322e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `nonakademik1` varchar(100) NOT NULL,
  `nonakademik2` varchar(100) NOT NULL,
  `nonakademik3` varchar(100) NOT NULL,
  `akademik1` varchar(100) NOT NULL,
  `akademik2` varchar(100) NOT NULL,
  `akademik3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `nonakademik1`, `nonakademik2`, `nonakademik3`, `akademik1`, `akademik2`, `akademik3`) VALUES
(1, 'Futsal tingkat kecamatan juara 1 2012 - 2013	', 'Otagei dance mangga 2 square juara 1 2018 - 2020', '30 juz tahfidz 2010 - 2016', 'Hak cipta bersertifikat 2018 - 2019	', 'Juara cerdas cermat SMk tingkat gugus 2015 - 2016	', 'Persami pondok pramuka cibubur 2014 - 2016	');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id_home`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
