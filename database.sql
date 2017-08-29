-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Agu 2017 pada 03.43
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaint`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `complaint`
--

CREATE TABLE `complaint` (
  `id_complaint` int(11) NOT NULL,
  `masuk` datetime NOT NULL,
  `tanggapi` datetime DEFAULT NULL,
  `selesai` datetime DEFAULT NULL,
  `tolak` tinyint(1) NOT NULL,
  `tempat` varchar(250) NOT NULL,
  `kepada` tinyint(1) NOT NULL,
  `permasalahan` varchar(500) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `keterangan` varchar(250) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `complaint`
--

INSERT INTO `complaint` (`id_complaint`, `masuk`, `tanggapi`, `selesai`, `tolak`, `tempat`, `kepada`, `permasalahan`, `nama`, `divisi`, `keterangan`) VALUES
(4, '2017-08-23 08:06:58', '2017-08-24 00:00:00', '2017-10-27 00:00:00', 0, 'Ruang IT & GA', 2, 'Tidak ada TV Flat untuk nonton bola', 'Mukhibillah', 'IT&GA', '-'),
(5, '2017-08-23 08:11:27', '2017-08-24 00:00:00', '2017-08-24 05:11:46', 0, 'Meeting Room 1', 1, 'WiFi sulidh', 'Sarah', 'IT&GA', '-'),
(8, '2017-08-23 08:27:14', '2017-08-24 04:52:12', '2017-08-24 05:08:31', 0, 'Meeting Room 2', 2, 'ngga bisa maen bola tempatnya nih', 'Gita', 'IT&GA', '-'),
(9, '2017-08-24 04:14:43', '2017-08-24 05:02:56', '2017-08-24 05:11:46', 0, 'Auditorium lt. 3', 1, 'masa internetnya lemot, sekarang kan udah 2017 bro.. jamannya internet always on kayak provider thr**', 'Sarah', 'IT&GA', '-'),
(10, '2017-08-24 05:13:42', '2017-08-24 05:14:10', '2017-08-24 05:14:16', 0, 'ruang makan', 2, 'cateringnya kurang micin', 'Sarah', 'IT&GA', '-'),
(11, '2017-08-25 04:40:37', '2017-08-25 04:44:47', NULL, 0, 'Meeting Room 1', 1, 'Wifi mati dan tidak ada jaringan internet', 'Peral', 'IT&GA', '-'),
(12, '2017-08-25 04:55:06', NULL, NULL, 0, 'Musholla', 2, 'AC kurang dingin', 'Aryo', 'IT', '-'),
(13, '2017-08-25 05:48:15', '2017-08-28 04:43:24', '2017-08-28 04:43:24', 1, 'Ruang Makan', 3, 'Makannya kurang segar', 'Mukhib', 'IT', 'Butuh lebih dananya kalo mau enak...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id_complaint`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id_complaint` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
