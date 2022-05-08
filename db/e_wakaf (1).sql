-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 01:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_wakaf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cabang`
--

CREATE TABLE `admin_cabang` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cabang` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_cabang`
--

INSERT INTO `admin_cabang` (`id`, `username`, `password`, `cabang`) VALUES
(5, 'adminYk', '$2y$10$wEHUdgTA4hBK.SYSGImbDevIchmkoPnwi8NETwp/upHNsq1JP08LS', 'KCP Yogyakarta'),
(6, 'cabangBantul', '$2y$10$TgKayQxmlObnf4e2XGtkqeUz0fAnFsXNrxfjXejf/Q3OXtbQ0KdxW', 'Cabang Bantul'),
(7, 'cabangBandung', '$2y$10$sopQOH2e0ryRYBnLH73F1es4jIKOBO9mB9xvqeFPZwbv2OEsgd1aO', 'Cabang Bandung'),
(8, 'cabangSolo', '$2y$10$LGummDp2Qiw9dcx4EM4UNuoJlz3JlulUCo27kiH9cnzhKKAKp6iC.', 'Cabang Solo');

-- --------------------------------------------------------

--
-- Table structure for table `admin_pusat`
--

CREATE TABLE `admin_pusat` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_pusat`
--

INSERT INTO `admin_pusat` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin1', 'admin1', '$2y$10$jbDV1re4c73j4pCvgqt7huS85vC9vlNiEafIop9mU9UHvHYC4lP6y'),
(2, 'admin1', 'admin1', '$2y$10$jbDV1re4c73j4pCvgqt7huS85vC9vlNiEafIop9mU9UHvHYC4lP6y'),
(3, 'admin2', 'admin2', '$2y$10$5ly7CCvyTA.J41a/0EJflelS7AMz8E3PPR.aPeNYL4VjT5VH5tSxe'),
(4, 'admin2', 'admin2', '$2y$10$5ly7CCvyTA.J41a/0EJflelS7AMz8E3PPR.aPeNYL4VjT5VH5tSxe'),
(5, 'admin3', 'admin3', 'admin123'),
(6, '', 'admin2', '$2y$10$t4VUzFCOj9D1D6TKDJBZleJ9uCHL4k702bqKn1QHM04w1mEXEHv0O'),
(7, '', 'admin3', '$2y$10$vO/nwz5xK5CnfWmcRCbtsuFLfuSGdtSNRxds9VweExnpevm/kYEt2'),
(8, '', 'admin4', '$2y$10$r3W6FThtL9sEEAZaeOYgF.IYAyp4Tc/OyWWALz59PsgxXO7hAs0XG'),
(9, '', 'admin4', '$2y$10$P7Hujmj4nyaXB8yeRPVd9.NHQJCmxZUGGh2OlkqqD/UJ1MPEGnbW2'),
(10, '', 'cabangYogya', '$2y$10$JjAm7jVO8qwJJwPSh9xYfe7FuK7fBlgbp/faxy.jO0rrBVNqe/5/2'),
(11, '', 'adminYk', '$2y$10$skVHh5yO/T/ATZaHXh/T5eV4vc2.H62.C4BQLQvsAzJoC.Tf449XC'),
(12, '', 'adminYk', '$2y$10$qXkNY4HKvoqrf3HJhrfvRe5.mgMJ9cSJQU5o6JZWKcxFrdCc4vUAS'),
(13, '', 'adminYk', '$2y$10$vCoA1aLI9EYZFtEYg4yGd.2SMZK4iGwsy6YwWq7ZXN9lfXosIUBze');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `category` varchar(128) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `wakaf_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id_transaksi`, `id_user`, `username`, `name`, `email`, `phone`, `category`, `nominal`, `date`, `status`, `description`, `wakaf_type`) VALUES
(1, 10, 'user3', 'user3', 'user3@gmail.com', '0917231023', 'infak', '100000', '2022-04-21 10:14:18', 'draft', '', ''),
(2, 11, 'irul', 'khairul', 'irul05@gmail.com', '085143522', 'wakaf', 'Mobil', '2022-04-25 08:43:22', 'succes', 'Avanza th 2015', 'properti');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_cabang`
--

CREATE TABLE `transaction_cabang` (
  `id_transaksi` int(11) NOT NULL,
  `cabang_name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `category` varchar(128) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(128) NOT NULL,
  `lembaga_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_cabang`
--

INSERT INTO `transaction_cabang` (`id_transaksi`, `cabang_name`, `username`, `name`, `phone`, `category`, `nominal`, `date`, `status`, `lembaga_name`) VALUES
(1, 'KCP Yogyakarta', 'adminYk', 'Khoirul', '08567718', 'sedekah', '1000000', '2022-04-08 03:22:57', 'draft', 'perorangan'),
(2, 'Cabang Bantul', 'cabangBantul', 'irul', '0875512365', 'sedekah', '200000', '2022-04-18 03:59:47', 'draft', 'perorangan');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_succes`
--

CREATE TABLE `transaction_succes` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `category` varchar(128) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `phone`, `password`, `is_active`) VALUES
(1, 'a', 'aa', 'mochmadkhairul308@gmail.com', 'a', '$2y$10$/h1LyRWhJt1m8jMht4dw3OuRoVBU2tbI50OIFDvVWM4cs4wbqicsi', 1),
(2, 'a', 'aa', 'mochmadkhairul308@gmail.com', 'a', '$2y$10$7cBdbJ9x2vwa0jOwsTES8uS7B9O0rR8kQs/9BRICSjszbJdrPMu6e', 1),
(3, 'a', 'a', 'dua@gmail.com', 'a', '$2y$10$VxzLZuLk6YmqDf4j1Wkjheq0JWuq66I7nZ85eJP1VFqihtxFa8WTq', 1),
(4, 'aaa', 'aaa', 'ridhoarrahman05@gmail.com', 'aa', '$2y$10$rN79WfCfIqiLK3ppN4z92eQwdjDlDIF3JQw81ziAmDL9GqrSF4mkm', 1),
(5, 'aa', 'aa', 'a@gmail.com', 'aa', '$2y$10$9paSyn44HmSSFBp4g93smeb.EvNNcWGa1BnshgeO.6GVRYMPcKuqq', 1),
(6, 'aaa', 'aaa', 'aa@gmail.com', 'aa', '$2y$10$CivGFVbbZ10g0jsRSBG/NOwI/ZTTCFs7VV6HJsQkM/A8gxst1Hc1a', 1),
(7, 'a', 'aaaa@gmail.com', 'aaaa@gmail.com', '000', '$2y$10$oEoK7gnEy136/oQHxZQ7Dez/sEQ5x2UJqNDuEUzX1fZyXT/kwQw7K', 1),
(8, 'user1', 'user1', 'user1@gmail.com', '0857266197', '$2y$10$qZ15e1iz7DMZxTJUHTkwvuQcw0X2SZjqcKsOIWJcWDeYpXmfogeGa', 1),
(9, 'user2', 'user2', 'user2@gmail.com', '123124123', '$2y$10$jbDV1re4c73j4pCvgqt7huS85vC9vlNiEafIop9mU9UHvHYC4lP6y', 1),
(10, 'user3', 'user3', 'user3@gmail.com', '0917231023', '$2y$10$5ly7CCvyTA.J41a/0EJflelS7AMz8E3PPR.aPeNYL4VjT5VH5tSxe', 1),
(11, 'khairul', 'irul', 'irul05@gmail.com', '085143522', '$2y$10$tsKy7j.xeGoOzBN7Ij6tte6mZK6QU0S514WVS4uYUE3ZRNQc4lvGu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wakaf_kendaraan`
--

CREATE TABLE `wakaf_kendaraan` (
  `jenis_kendaraan` varchar(255) NOT NULL,
  `nama_kendaraan` varchar(255) NOT NULL,
  `tahun` date NOT NULL,
  `plat_nomor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wakaf_kendaraan`
--

INSERT INTO `wakaf_kendaraan` (`jenis_kendaraan`, `nama_kendaraan`, `tahun`, `plat_nomor`) VALUES
('mobil', 'avabza', '0000-00-00', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cabang`
--
ALTER TABLE `admin_cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_pusat`
--
ALTER TABLE `admin_pusat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaction_cabang`
--
ALTER TABLE `transaction_cabang`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_cabang`
--
ALTER TABLE `admin_cabang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin_pusat`
--
ALTER TABLE `admin_pusat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction_cabang`
--
ALTER TABLE `transaction_cabang`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
