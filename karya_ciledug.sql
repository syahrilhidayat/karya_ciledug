-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Mar 2020 pada 04.26
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karya_ciledug`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `nama_banner` varchar(50) NOT NULL,
  `gambar_banner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id`, `nama_banner`, `gambar_banner`) VALUES
(6, 'aerox', 'aerox_hitam1.png'),
(7, 'mx', '7ORtFsROn8nFtO3FI3eS1.png'),
(8, 'wer', 'nmax1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dashboard`
--

CREATE TABLE `dashboard` (
  `id_dashboard` int(11) NOT NULL,
  `nama_banner` varchar(50) NOT NULL,
  `gambar_banner` text NOT NULL,
  `nama_leasing` varchar(50) NOT NULL,
  `gambar_leasing` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dashboard`
--

INSERT INTO `dashboard` (`id_dashboard`, `nama_banner`, `gambar_banner`, `nama_leasing`, `gambar_leasing`) VALUES
(1, '', '', 'baf', 'baf.jpg'),
(2, 'aerox', 'aerox_hitam.png', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `leasing`
--

CREATE TABLE `leasing` (
  `id` int(11) NOT NULL,
  `nama_leasing` varchar(50) NOT NULL,
  `id_banner` varchar(50) NOT NULL,
  `gambar_leasing` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `leasing`
--

INSERT INTO `leasing` (`id`, `nama_leasing`, `id_banner`, `gambar_leasing`) VALUES
(10, 'BAF', '10', 'baf2.jpg'),
(11, 'ADIRA', '11', 'adira1.jpg'),
(12, 'OTO', '12', 'oto2.jpg'),
(13, 'WOM', '13', 'wom1.jpg'),
(14, 'HOME KREDIT', '14', 'homekredit2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matic`
--

CREATE TABLE `matic` (
  `id_motor` int(11) NOT NULL,
  `nama_motor` varchar(50) NOT NULL,
  `warna_motor` varchar(50) NOT NULL,
  `type_motor` varchar(50) NOT NULL,
  `cc_motor` varchar(50) NOT NULL,
  `dp_motor` varchar(50) NOT NULL,
  `angsuran23` varchar(50) NOT NULL,
  `angsuran29` varchar(50) NOT NULL,
  `angsuran35` varchar(50) NOT NULL,
  `gambar_motor` text NOT NULL,
  `gambar_spesifikasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matic`
--

INSERT INTO `matic` (`id_motor`, `nama_motor`, `warna_motor`, `type_motor`, `cc_motor`, `dp_motor`, `angsuran23`, `angsuran29`, `angsuran35`, `gambar_motor`, `gambar_spesifikasi`) VALUES
(1, 'Yamaha Aerox VVA', 'Hitam', 'Matic', '155 CC', '800000', '1500000', '1400000', '130000', 'aerox_hitam.png', 'spek.jpg'),
(2, 'Yamaha Lexi', 'Hitam', 'Matic', '125 CC', '500000', '1200000', '1100000', '1000000', 'lexi.jpg', 'spek.jpg'),
(9, 'Yamaha Aerox', 'Kuning', 'Matic', '155', '1000000', '1200000', '1100000', '1000000', 'Yamaha-Aerox-155.jpg', 'spek.jpg'),
(10, 'Yamaha N-Max', 'Merah', 'Matic', '155', '2000000', '1200000', '1100000', '1000000', 'jkb.jpg', 'spek.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `moped`
--

CREATE TABLE `moped` (
  `id_motor` int(11) NOT NULL,
  `nama_motor` varchar(50) NOT NULL,
  `warna_motor` varchar(50) NOT NULL,
  `type_motor` varchar(50) NOT NULL,
  `cc_motor` varchar(50) NOT NULL,
  `dp_motor` varchar(50) NOT NULL,
  `angsuran23` varchar(50) NOT NULL,
  `angsuran29` varchar(50) NOT NULL,
  `angsuran35` varchar(50) NOT NULL,
  `gambar_motor` text NOT NULL,
  `gambar_spesifikasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `moped`
--

INSERT INTO `moped` (`id_motor`, `nama_motor`, `warna_motor`, `type_motor`, `cc_motor`, `dp_motor`, `angsuran23`, `angsuran29`, `angsuran35`, `gambar_motor`, `gambar_spesifikasi`) VALUES
(4, 'Yamaha Mx-King', 'Putih', 'Moped', '150', '800000', '1500000', '950000', '840000', 'jhfufk.jpg', 'spek.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sport`
--

CREATE TABLE `sport` (
  `id_motor` int(11) NOT NULL,
  `nama_motor` varchar(50) NOT NULL,
  `warna_motor` varchar(50) NOT NULL,
  `type_motor` varchar(50) NOT NULL,
  `cc_motor` varchar(50) NOT NULL,
  `dp_motor` varchar(50) NOT NULL,
  `angsuran23` varchar(50) NOT NULL,
  `angsuran29` varchar(50) NOT NULL,
  `angsuran35` varchar(50) NOT NULL,
  `gambar_motor` text NOT NULL,
  `gambar_spesifikasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sport`
--

INSERT INTO `sport` (`id_motor`, `nama_motor`, `warna_motor`, `type_motor`, `cc_motor`, `dp_motor`, `angsuran23`, `angsuran29`, `angsuran35`, `gambar_motor`, `gambar_spesifikasi`) VALUES
(1, 'Yamaha R-15', 'Hitam', 'Sport', '155', '4000000', '1800000', '1500000', '1200000', 'r15_hitam.jpg', 'spek.jpg'),
(4, 'Yamaha R15', 'Biru', 'Sport', '155', '2500000', '1500000', '1400000', '1300000', '2017-yamaha-r15-v3-official-image-blue-white.jpg', 'spek.jpg'),
(5, 'Yamaha R15', 'Kuning', 'Sport', '155', '2500000', '1500000', '1400000', '1300000', 'th.jpg', 'spek.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'Dede Hardiansyah', 'dede', 'superadmin', 1),
(2, 'Syahril Hidayat', 'syahril', 'syahril', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dashboard`
--
ALTER TABLE `dashboard`
  ADD PRIMARY KEY (`id_dashboard`);

--
-- Indeks untuk tabel `leasing`
--
ALTER TABLE `leasing`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matic`
--
ALTER TABLE `matic`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indeks untuk tabel `moped`
--
ALTER TABLE `moped`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indeks untuk tabel `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `dashboard`
--
ALTER TABLE `dashboard`
  MODIFY `id_dashboard` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `leasing`
--
ALTER TABLE `leasing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `matic`
--
ALTER TABLE `matic`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `moped`
--
ALTER TABLE `moped`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sport`
--
ALTER TABLE `sport`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
