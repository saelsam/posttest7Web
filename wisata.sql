-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 05:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `konfirmasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `email`, `username`, `password`, `konfirmasi`) VALUES
(1, 'sael', 'saelsamuelrude@gmail', 'sam', '$2y$10$J2yKe2pUhiPa6F8Ro1AiEuELa9Jy1Doyo792a79Aj7wK4OuYPtxxS', ''),
(2, 'sael', 'saelsamuelrude@gmail', 'saelsam', '$2y$10$f/qIXAUuuDzEwE2DZ5UKh.f.cdYswUBv56LZKPb1YoD46Z4oUM2PC', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `ktp` int(20) NOT NULL,
  `telpon` int(20) NOT NULL,
  `alamat` int(20) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `waktu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `ktp`, `telpon`, `alamat`, `foto`, `tujuan`, `waktu`) VALUES
(10, 'budi', 62, 9123, 0, '', 'abc', ''),
(11, '', 0, 0, 0, '', '', ''),
(27, 'sael', 0, 0, 0, '', '', ''),
(28, 'sael', 0, 9123, 0, '', 'smd', '2022-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tujuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id`, `nama`, `tujuan`) VALUES
(1, 'budi utomo', 'parinding'),
(2, 'sael', 'abc'),
(3, 'sasa', 'idk'),
(4, 'sam', ''),
(5, 'sael', ''),
(6, 'sael', ''),
(7, 'test', ''),
(8, 'Sael Samuel Rude', ''),
(9, 'Sael Samuel Rude', ''),
(10, 'Sael Samuel Rude', ''),
(11, 'Sael Samuel Rude', ''),
(12, 'sael', ''),
(13, 'budi utomo', ''),
(14, 'sss', ''),
(15, '', ''),
(16, 'sael', ''),
(17, 'sael', 'smd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
