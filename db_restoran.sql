-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2018 at 05:10 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_restoran`
--
CREATE DATABASE IF NOT EXISTS `db_restoran` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_restoran`;

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

DROP TABLE IF EXISTS `akun`;
CREATE TABLE IF NOT EXISTS `akun` (
  `id_pegawai` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_pegawai`, `username`, `password`) VALUES
(6, '123', 'c72851ae0c823fef90fb3bce82d51a77'),
(5, 'afdal', '54281bc66b5eba708e35d38836d69245'),
(2, 'bale', '52004147fe3a0530cbf5a00ab88899df'),
(4, 'bayu', '36566e91f48f3e98ece2b9d1275eb9be'),
(1, 'broto', 'c72851ae0c823fef90fb3bce82d51a77'),
(3, 'danar', '8b5d56ac6b22f166ab0477b8c9553fe3');

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

DROP TABLE IF EXISTS `bahan`;
CREATE TABLE IF NOT EXISTS `bahan` (
`id_bahan` int(11) NOT NULL,
  `nama_bahan` varchar(200) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `nama_bahan`, `jumlah`) VALUES
(8, 'Ayam', 500),
(10, 'Beras', 500),
(11, 'Garam', 500),
(12, 'Daging', 500),
(15, 'bawang', 500),
(17, 'bawang', 500),
(19, 'Kecap', 500),
(24, 'Cuka', 500),
(25, 'Kangkung', 500),
(26, 'Es', 500);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
`id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'makanan'),
(2, 'minuman');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
`id_menu` int(11) NOT NULL,
  `id_kategori` enum('0','1') NOT NULL,
  `nama` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `id_kategori`, `nama`, `harga`, `foto`) VALUES
(11, '1', 'Karedok', 10000, 'Karedok1.jpg'),
(12, '1', 'Nasi Timbel', 20000, 'Nasi-Timbel1.jpg'),
(13, '0', 'Eskrim', 7000, 'M11.png'),
(16, '1', 'Lotek', 6000, 'yogyakarta-classic-lotek-bu-bagyo1-.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

DROP TABLE IF EXISTS `pegawai`;
CREATE TABLE IF NOT EXISTS `pegawai` (
`id_pegawai` int(11) NOT NULL,
  `nama_lengkap` varchar(20) NOT NULL,
  `alamat` varchar(25) NOT NULL,
  `jabatan` enum('Manager','Koki','Pantry','Pelayan','Kasir') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_lengkap`, `alamat`, `jabatan`) VALUES
(1, 'Broto', 'Dago', 'Manager'),
(2, 'Iqbal R', 'CIbiru', 'Pantry'),
(3, 'Danar', 'Semarang', 'Pelayan'),
(4, 'Bayu', 'Baleendah', 'Kasir'),
(5, 'Afdal', 'Dago', 'Koki'),
(6, '123', '123', 'Kasir'),
(7, 'Bale', 'bandung', 'Pantry');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE IF NOT EXISTS `pelanggan` (
`id_pelanggan` int(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `feedback` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=280 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `tanggal`, `feedback`) VALUES
(89, 'tes', '2017-11-28', '0'),
(90, 'tes1', '2017-11-28', '0'),
(91, 'tes2', '2017-11-28', '0'),
(92, 'tes3', '2017-11-28', '0'),
(93, 'tes4', '2017-11-28', '0'),
(94, 'tes5', '2017-11-28', '0'),
(95, 'tes6', '2017-11-28', '0'),
(96, 'tes7', '2017-11-28', '0'),
(97, 'tes', '2017-11-30', '0'),
(98, 'tes', '2017-11-30', '0'),
(99, 'tes', '2017-11-30', '0'),
(100, 'Afdhalul Ihsan', '2017-11-30', '0'),
(101, 'bale', '2017-11-30', '0'),
(102, 'asd', '2017-12-04', '0'),
(103, 'asdf', '2017-12-04', '0'),
(104, 'bale', '2017-12-04', '0'),
(105, 'bale', '2017-12-04', '0'),
(106, 'tes1', '2017-12-04', '0'),
(107, 'tes2', '2017-12-04', '0'),
(108, 'asd', '2017-12-07', '0'),
(109, 'tes11', '2017-12-07', '0'),
(110, 'tes34', '2017-12-07', '0'),
(111, 'tesa', '2017-12-07', '0'),
(112, 'asd3', '2017-12-07', '0'),
(113, 'bale11', '2017-12-07', '0'),
(114, 'asasasa', '2017-12-07', '0'),
(115, 'tes', '2017-12-07', '0'),
(116, 'iqbal', '2017-12-08', '0'),
(117, 'aasd', '2017-12-08', '0'),
(118, 'asa', '2017-12-08', '0'),
(119, 'bale1', '2017-12-09', '0'),
(120, 'tes', '2017-12-10', '0'),
(121, 'asa', '2017-12-10', '0'),
(122, 'bale', '2017-12-11', '0'),
(123, 'bale', '2017-12-11', '0'),
(124, 'bale', '2017-12-13', '0'),
(125, 'bale', '2017-12-13', '0'),
(126, 'asd', '2017-12-21', '0'),
(127, 'l', '2017-12-21', '0'),
(128, 'bale', '2017-12-22', '0'),
(129, 'bale', '2017-12-22', '0'),
(130, 'bale', '2017-12-22', '0'),
(131, 'bale', '2017-12-22', '0'),
(132, 'bale', '2017-12-22', '0'),
(133, 'bale', '2017-12-22', '0'),
(134, 'bale', '2017-12-22', '0'),
(135, 'rizal', '2017-12-22', '0'),
(136, 'bale', '2017-12-22', '0'),
(137, 'bale', '2017-12-22', '0'),
(138, 'bale', '2017-12-22', '0'),
(139, 'bale', '2017-12-22', '0'),
(140, 'bale', '2017-12-22', '0'),
(141, 'bale', '2017-12-22', '0'),
(142, 'bale', '2017-12-22', '0'),
(143, 'bale', '2017-12-22', '0'),
(144, 'bale', '2017-12-22', '0'),
(145, 'asd', '2017-12-22', '0'),
(146, 'asd', '2017-12-22', '0'),
(147, 'asd', '2017-12-22', '0'),
(148, 'asd', '2017-12-22', '0'),
(149, 'asd', '2017-12-22', '0'),
(150, 'asd', '2017-12-22', '0'),
(151, 'asd', '2017-12-22', '0'),
(152, 'asd', '2017-12-22', '0'),
(153, 'asd', '2017-12-22', '0'),
(154, 'asa', '2017-12-22', '0'),
(155, 'asa', '2017-12-22', '0'),
(156, 'asa', '2017-12-22', '0'),
(157, 'asa', '2017-12-22', '0'),
(158, 'asa', '2017-12-22', '0'),
(159, 'asa', '2017-12-22', '0'),
(160, 'asa', '2017-12-22', '0'),
(161, 'asa', '2017-12-22', '0'),
(162, 'bale', '2017-12-22', '0'),
(163, 'asd', '2017-12-22', '0'),
(164, 'asasa', '2017-12-22', '0'),
(165, 'sss', '2017-12-22', '0'),
(166, 'bac', '2017-12-22', '0'),
(167, 'asdf', '2017-12-23', '0'),
(168, 'tes1', '2017-12-23', '0'),
(169, 'bale123', '2017-12-25', '0'),
(170, 'tes22', '2017-12-25', '0'),
(171, 'kal', '2017-12-25', '0'),
(172, 'asaa', '2017-12-25', '0'),
(173, 'Boy', '2017-12-27', '0'),
(174, 'Boyyyy', '2017-12-27', '0'),
(175, 'abc', '2017-12-27', '0'),
(176, 'bale', '2017-12-27', '0'),
(177, 'bale', '2017-12-28', '0'),
(178, 'Bale', '2017-12-28', '0'),
(179, 'rizal', '2017-12-29', '0'),
(180, 'rizal1', '2017-12-29', '0'),
(181, 'bale', '2017-12-29', '0'),
(182, 'tes', '2018-01-01', '0'),
(183, 'tes1', '2018-01-01', '0'),
(184, 'tes2', '2018-01-01', '0'),
(185, 'tes3', '2018-01-01', '0'),
(186, 'tes4', '2018-01-01', '0'),
(187, 'tes5', '2018-01-01', '0'),
(188, 'tes6', '2018-01-01', '0'),
(189, 'tes7', '2018-01-01', '0'),
(190, 'tes8', '2018-01-01', '0'),
(191, 'tes9', '2018-01-01', '0'),
(192, 'tes10', '2018-01-02', '0'),
(193, 'tes11', '2018-01-02', '0'),
(194, 'tes12', '2018-01-02', '0'),
(195, 'tes13', '2018-01-02', '0'),
(196, 'tes14', '2018-01-02', '0'),
(197, 'tes15', '2018-01-02', '0'),
(198, 'tes17', '2018-01-04', '0'),
(199, 'tes18', '2018-01-04', '0'),
(200, 'asa', '2018-01-11', '0'),
(201, '1111', '2018-01-15', '0'),
(202, '1111', '2018-01-15', '0'),
(203, '11111', '2018-01-15', '0'),
(204, '222', '2018-01-15', '0'),
(205, '2222', '2018-01-15', '0'),
(206, '33', '2018-01-15', '0'),
(207, '90', '2018-01-15', '0'),
(208, 'bale', '2018-01-15', '0'),
(209, 'bale1', '2018-01-15', '0'),
(210, 'nnn', '2018-01-15', '0'),
(211, 'll', '2018-01-15', '0'),
(212, '99', '2018-01-15', '0'),
(213, 'ooo', '2018-01-15', '0'),
(214, 'pppp', '2018-01-15', '0'),
(215, 'ddd', '2018-01-15', '0'),
(216, 'lop', '2018-01-15', '0'),
(217, 'bb', '2018-01-15', '0'),
(218, 'ppppp', '2018-01-16', '0'),
(219, 'ww', '2018-01-16', '0'),
(220, 'mm', '2018-01-17', '0'),
(221, 'hh', '2018-01-17', '0'),
(222, 'wgg', '2018-01-17', '0'),
(223, 'qqqq', '2018-01-18', '0'),
(224, '1233', '2018-01-22', '0'),
(225, 'mkj', '2018-01-22', '0'),
(226, 'km', '2018-01-22', '0'),
(227, 'fg', '2018-01-22', '0'),
(228, 'df', '2018-01-22', '0'),
(229, 'lk', '2018-01-22', '0'),
(230, 'sdf', '2018-01-23', '0'),
(231, 'kl', '2018-01-26', '0'),
(232, 'jjjk', '2018-01-29', '0'),
(233, 'Jkll', '2018-01-29', '0'),
(234, 'Lok', '2018-01-29', '0'),
(235, 'kij', '2018-01-29', '0'),
(236, 'kiji', '2018-01-29', '0'),
(237, 'koik', '2018-01-29', '0'),
(238, 'Hiki', '2018-01-30', '0'),
(239, 'klo', '2018-01-30', '0'),
(240, 'Bale', '2018-01-30', '0'),
(241, 'Coba', '2018-01-30', '0'),
(242, 'bio', '2018-02-03', '0'),
(243, 'hoji', '2018-02-03', '0'),
(244, 'ghj', '2018-02-03', '0'),
(245, 'jkuj', '2018-02-03', '0'),
(246, 'doklo', '2018-02-03', '0'),
(247, 'fre', '2018-02-03', '0'),
(248, 'koi', '2018-02-03', '0'),
(249, 'joki', '2018-02-03', '0'),
(250, 'jiko', '2018-02-03', '0'),
(251, 'bio', '2018-02-03', '0'),
(252, 'jino', '2018-02-03', '0'),
(253, 'Jan', '2018-02-04', '0'),
(254, 'nau', '2018-02-04', '0'),
(255, 'gyygy', '2018-02-04', '0'),
(256, 'bayu', '2018-02-04', '0'),
(257, 'bale', '2018-02-04', '0'),
(258, 'Anugrah abdi kautsar', '2018-02-05', '0'),
(259, 'h', '2018-02-05', '1'),
(260, 'gg', '2018-02-05', '1'),
(261, 'ac', '2018-02-05', '1'),
(262, 'Dillan', '2018-02-05', '1'),
(263, 'dilan', '2018-02-05', '1'),
(264, 'dilan', '2018-02-05', '1'),
(265, 'dilan', '2018-02-05', '1'),
(266, 'dilan', '2018-02-05', '1'),
(267, 'dilan', '2018-02-05', '1'),
(268, 'dilan', '2018-02-05', '1'),
(269, 'dilan', '2018-02-05', '1'),
(270, 'dilan', '2018-02-05', '1'),
(271, 'jj', '2018-02-05', '1'),
(272, 'dilan', '2018-02-05', '1'),
(273, 'Afdal ', '2018-02-05', '1'),
(274, 'A', '2018-02-05', '1'),
(275, 'Tamp', '2018-02-05', '1'),
(276, 'Teraq', '2018-02-05', '1'),
(277, 'Jaka', '2018-02-05', '1'),
(278, 'Atr', '2018-02-05', '1'),
(279, 'Tanpan', '2018-02-05', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE IF NOT EXISTS `pesanan` (
`id_pesanan` int(11) NOT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status_bayar` enum('0','1') DEFAULT '0',
  `status_antar` enum('0','1') DEFAULT '0',
  `status_pesanan` enum('0','1') DEFAULT '0',
  `feedback` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_pelanggan`, `tanggal`, `status_bayar`, `status_antar`, `status_pesanan`, `feedback`) VALUES
(1, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(2, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(3, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(4, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(5, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(6, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(7, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(8, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(9, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(10, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(11, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(12, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(13, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(14, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(15, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(16, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(17, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(18, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(19, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(20, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(21, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(22, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(23, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(24, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(25, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(26, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(27, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(28, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(29, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(30, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(31, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(32, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(33, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(34, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(35, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(36, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(37, NULL, '2017-12-25', NULL, NULL, NULL, '0'),
(38, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(39, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(40, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(41, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(42, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(43, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(44, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(45, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(46, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(47, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(48, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(49, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(50, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(51, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(52, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(53, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(54, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(55, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(56, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(57, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(58, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(59, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(60, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(61, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(62, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(63, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(64, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(65, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(66, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(67, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(68, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(69, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(70, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(71, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(72, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(73, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(74, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(75, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(76, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(77, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(78, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(79, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(80, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(81, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(82, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(83, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(84, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(85, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(86, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(87, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(88, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(89, NULL, '2017-12-29', NULL, NULL, NULL, '0'),
(90, NULL, '2018-01-01', NULL, NULL, NULL, '0'),
(91, NULL, '2018-01-01', NULL, NULL, NULL, '0'),
(92, NULL, '2018-01-01', NULL, NULL, NULL, '0'),
(93, NULL, '2018-01-01', NULL, NULL, NULL, '0'),
(94, NULL, '2018-01-01', NULL, NULL, NULL, '0'),
(95, NULL, '2018-01-01', NULL, NULL, NULL, '0'),
(96, NULL, '2018-01-01', NULL, NULL, NULL, '0'),
(97, NULL, '2018-01-01', NULL, NULL, NULL, '0'),
(98, NULL, '2018-01-01', NULL, NULL, NULL, '0'),
(99, NULL, '2018-01-01', NULL, NULL, NULL, '0'),
(100, NULL, '2018-01-02', NULL, NULL, NULL, '0'),
(101, NULL, '2018-01-02', NULL, NULL, NULL, '0'),
(102, NULL, '2018-01-02', NULL, NULL, NULL, '0'),
(103, NULL, '2018-01-02', NULL, NULL, NULL, '0'),
(104, NULL, '2018-01-02', NULL, NULL, NULL, '0'),
(105, NULL, '2018-01-02', NULL, NULL, NULL, '0'),
(106, NULL, '2018-01-04', NULL, NULL, NULL, '0'),
(107, NULL, '2018-01-04', NULL, NULL, NULL, '0'),
(108, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(109, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(110, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(111, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(112, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(113, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(114, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(115, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(116, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(117, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(118, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(119, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(120, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(121, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(122, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(123, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(124, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(125, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(126, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(127, NULL, '2018-01-15', NULL, NULL, NULL, '0'),
(128, NULL, '2018-01-16', NULL, NULL, NULL, '0'),
(129, NULL, '2018-01-17', NULL, NULL, NULL, '0'),
(130, NULL, '2018-01-17', NULL, NULL, NULL, '0'),
(131, NULL, '2018-01-17', NULL, NULL, NULL, '0'),
(132, NULL, '2018-01-18', NULL, NULL, NULL, '0'),
(133, NULL, '2018-01-29', NULL, NULL, NULL, '0'),
(134, NULL, '2018-01-30', NULL, NULL, NULL, '0'),
(135, NULL, '2018-02-03', NULL, NULL, NULL, '0'),
(136, NULL, '2018-02-03', NULL, NULL, NULL, '0'),
(137, NULL, '2018-02-03', NULL, NULL, NULL, '0'),
(138, NULL, '2018-02-03', NULL, NULL, NULL, '0'),
(139, NULL, '2018-02-03', NULL, NULL, NULL, '0'),
(140, NULL, '2018-02-03', NULL, NULL, NULL, '0'),
(141, NULL, '2018-02-03', NULL, NULL, NULL, '0'),
(142, NULL, '2018-02-03', NULL, NULL, NULL, '0'),
(143, NULL, '2018-02-03', '1', '1', '1', '0'),
(144, NULL, '2018-02-03', '1', '1', '1', '0'),
(145, NULL, '2018-02-03', '0', '0', '1', '0'),
(146, NULL, '2018-02-03', '0', '0', '1', '0'),
(147, NULL, '2018-02-04', '1', '1', '1', '0'),
(148, NULL, '2018-02-04', '0', '0', '1', '0'),
(149, NULL, '2018-02-04', '0', '0', '0', '0'),
(150, 258, '2018-02-05', '1', '0', '1', '0'),
(151, 264, '2018-02-05', '0', '0', '1', '0'),
(152, 265, '2018-02-05', '0', '0', '1', '0'),
(153, 266, '2018-02-05', '0', '0', '1', '0'),
(154, 267, '2018-02-05', '0', '0', '1', '0'),
(155, 268, '2018-02-05', '0', '0', '1', '0'),
(156, 270, '2018-02-05', '0', '0', '1', '0'),
(157, 272, '2018-02-05', '0', '0', '1', '0'),
(158, 273, '2018-02-05', '0', '0', '1', '0'),
(159, 274, '2018-02-05', '0', '0', '1', '0'),
(160, 275, '2018-02-05', '0', '0', '1', '0'),
(161, 276, '2018-02-05', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_detail`
--

DROP TABLE IF EXISTS `pesanan_detail`;
CREATE TABLE IF NOT EXISTS `pesanan_detail` (
  `id_pesanan` int(11) DEFAULT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan_detail`
--

INSERT INTO `pesanan_detail` (`id_pesanan`, `id_menu`, `jumlah`) VALUES
(141, 7, 1),
(6, 3, 3),
(6, 8, 3),
(143, 2, 4),
(143, 8, 3),
(144, 1, 3),
(145, 1, 2),
(146, 1, 2),
(146, 8, 2),
(147, 11, 1),
(148, 12, 1),
(149, 14, 1),
(150, 13, 2),
(151, 11, 1),
(152, 12, 1),
(153, 11, 1),
(154, 11, 1),
(155, 11, 1),
(156, 11, 1),
(157, 11, 1),
(158, 12, 2),
(158, 13, 2),
(159, 13, 2),
(160, 13, 1),
(161, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

DROP TABLE IF EXISTS `resep`;
CREATE TABLE IF NOT EXISTS `resep` (
  `id_menu` int(11) NOT NULL,
  `id_bahan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_menu`, `id_bahan`, `jumlah`) VALUES
(29, 10, 1),
(29, 12, 1),
(7, 13, 2),
(7, 19, 3),
(7, 15, 2),
(7, 8, 1),
(8, 19, 1),
(8, 24, 1),
(9, 11, 1),
(10, 25, 1),
(11, 19, 4),
(11, 12, 2),
(12, 10, 3),
(12, 15, 4),
(13, 17, 3),
(14, 26, 4),
(15, 11, 10),
(15, 12, 1),
(15, 10, 25),
(15, 15, 10),
(16, 25, 10),
(16, 24, 10),
(16, 15, 10),
(16, 19, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

DROP TABLE IF EXISTS `tbl_produk`;
CREATE TABLE IF NOT EXISTS `tbl_produk` (
`produk_id` int(11) NOT NULL,
  `produk_nama` varchar(100) DEFAULT NULL,
  `produk_harga` double DEFAULT NULL,
  `produk_image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`produk_id`, `produk_nama`, `produk_harga`, `produk_image`) VALUES
(1, '212 Sexy Men', 720000, '1.jpg'),
(2, 'Adidas Dive', 100000, '2.jpg'),
(3, 'Aigner Pour Homme', 460000, '3.jpg'),
(4, 'Aigner No 1 OUD', 575000, '4.jpg'),
(5, 'Aigner Etienne', 535000, '5.jpg'),
(6, 'Aigner Too Feminine', 465000, '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE IF NOT EXISTS `transaksi` (
`id_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
 ADD PRIMARY KEY (`username`), ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
 ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
 ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
 ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
 ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=280;
--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
