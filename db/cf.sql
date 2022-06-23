-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2022 pada 15.48
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'SuperAdmin', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_cf`
--

CREATE TABLE `data_cf` (
  `id_data_cf` int(11) NOT NULL,
  `id_user` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `nilai_persentase` varchar(100) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_cf`
--

INSERT INTO `data_cf` (`id_data_cf`, `id_user`, `status`, `nilai_persentase`, `created_on`) VALUES
(1, 0, 'GERD, Gastritis dan Gastroparesis', '0.24', '2022-06-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(11) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL,
  `cf_pakar` float NOT NULL,
  `grd` tinyint(1) NOT NULL,
  `gtt` tinyint(1) NOT NULL,
  `dsp` tinyint(1) NOT NULL,
  `gtp` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`, `cf_pakar`, `grd`, `gtt`, `dsp`, `gtp`) VALUES
('G01', 'Rasa terbakar di tengah dada', 0.8, 1, 0, 0, 0),
('G02', 'Mulas', 0.2, 1, 0, 0, 0),
('G03', 'Bau Mulut', 0.2, 1, 0, 0, 0),
('G04', 'Mual', 0.4, 1, 1, 1, 0),
('G05', 'Nyeri dada', 0.6, 1, 0, 0, 0),
('G06', 'Sulit untuk menelan', 0.4, 1, 0, 0, 0),
('G07', 'Kembung', 0.4, 0, 1, 1, 0),
('G08', 'Nafsu makan berkurang', 0.2, 0, 1, 0, 0),
('G09', 'Muntah', 0.2, 0, 1, 1, 0),
('G10', 'Lebih cepat kenyang', 0.4, 0, 0, 0, 1),
('G11', 'Perut mengalami keram', 0.6, 0, 0, 0, 1),
('G12', 'Muntah setelah makan', 0.4, 0, 0, 0, 1),
('G13', 'Merasa kenyang', 0.2, 0, 0, 0, 1),
('G14', 'Penurunan berat badan', 0.6, 0, 0, 1, 1),
('G15', 'Riwayat diabetes', 0.8, 0, 0, 0, 1),
('G16', 'Nyeri di ulu hati', 0.6, 0, 0, 1, 0),
('G17', 'Mudah kenyang', 0.4, 0, 0, 1, 0),
('G18', 'Rasa tidak nyaman di perut', 0.6, 0, 0, 1, 0),
('G19', 'Perut terasa panas', 0.8, 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` int(11) NOT NULL,
  `kode_penyakit` varchar(11) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `kode_penyakit`, `nama_penyakit`) VALUES
(1, 'grd', 'GERD'),
(2, 'gtt', 'Gastritis'),
(3, 'dsp', 'Dispepsia'),
(4, 'gtp', 'Gastroparesis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'SamSamid', '123'),
(2, 'SamSamid', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `data_cf`
--
ALTER TABLE `data_cf`
  ADD PRIMARY KEY (`id_data_cf`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `data_cf`
--
ALTER TABLE `data_cf`
  MODIFY `id_data_cf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
