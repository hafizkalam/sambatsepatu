-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 09, 2021 at 10:32 PM
-- Server version: 8.0.25-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sambatweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `sepatu`
--

CREATE TABLE `sepatu` (
  `id_sepatu` int NOT NULL,
  `jenis_sepatu` varchar(10) NOT NULL,
  `harga_sepatu` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sepatu`
--

INSERT INTO `sepatu` (`id_sepatu`, `jenis_sepatu`, `harga_sepatu`) VALUES
(1, 'Tog', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL,
  `id_user` int NOT NULL,
  `sistem_pengambilan` varchar(10) NOT NULL,
  `total` int NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `jenis_sepatu` varchar(10) NOT NULL,
  `jenis_treatment` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `total_bayar` int NOT NULL,
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
1 
--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `sistem_pengambilan`, `total`, `tanggal_masuk`, `tanggal_keluar`, `jenis_sepatu`, `jenis_treatment`, `total_bayar`, `status`) VALUES
(1, 2, 'COD', 0, '2021-06-06', '2021-06-10', 'Sneakers', 'Repaint', 20000, 1),
(2, 2, 'COD', 4, '2021-06-09', '2021-06-11', '', '', 0, 1),
(5, 6, 'Pickup', 4, '2021-06-09', '2021-06-09', 'Sneakers', '', 0, 0),
(6, 6, 'Pickup', 5, '2021-06-09', '2021-06-09', 'Sneakers', '23432', 0, 0),
(7, 6, 'COD', 1, '2021-06-09', '2021-06-09', 'Sneakers', '', 0, 0),
(8, 6, 'Pickup', 5, '2021-06-09', '2021-06-09', 'Sneakers', 'Fast Clean', 0, 0),
(9, 6, 'Pickup', 4, '2021-06-09', '2021-06-09', 'Sneakers', 'Fast Clean,5000', 0, 0),
(10, 6, 'COD', 3, '2021-06-09', '2021-06-09', 'Sneakers', 'Fast Clean', 0, 0),
(11, 6, 'COD', 1, '2021-06-09', '2021-06-09', 'Sneakers', 'Fast Clean', 10000, 0),
(12, 6, 'Pickup', 10, '2021-06-09', '2021-06-12', 'Tog', 'Deep Clean', 120000, 1),
(13, 2, 'Pickup', 3, '2021-06-09', '2021-06-09', 'Tog', 'Deep Clean', 36000, 0),
(14, 6, 'COD', 10, '2021-06-09', '2021-06-09', 'Tog', 'Fast Clean', 70000, 0),
(15, 6, 'Pickup', 1, '2021-06-09', '2021-06-09', 'Tog', 'Fast Clean', 7000, 0),
(16, 6, 'COD', 7, '2021-06-09', '2021-06-09', 'Tog', 'Fast Clean', 49000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `id_treatment` int NOT NULL,
  `jenis_treatment` varchar(10) NOT NULL,
  `harga_treatment` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`id_treatment`, `jenis_treatment`, `harga_treatment`) VALUES
(1, 'Fast Clean', 25000),
(2, 'Deep Clean', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nama` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` int NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `no_telp`, `username`, `password`, `level`) VALUES
(1, 'admin', 'Jl Kahuripan ', 823123123, 'admin', 'admin', 0),
(2, 'Hafiz', 'Kota Malang', 65141, 'hafiz', 'hafiz.123', 1),
(6, 'Kalam', 'Kabupaten Malang', 65152, 'kalam', 'kalam', 1);

--
-- Indexes for dumped tables
--
 
--
-- Indexes for table `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id_sepatu`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id_treatment`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id_sepatu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id_treatment` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
