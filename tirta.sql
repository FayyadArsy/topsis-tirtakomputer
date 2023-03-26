-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 02:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tirta`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa`
--

CREATE TABLE `analisa` (
  `id_analisa` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_laptop` int(11) NOT NULL,
  `nilainya` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisa`
--

INSERT INTO `analisa` (`id_analisa`, `id_kriteria`, `id_laptop`, `nilainya`) VALUES
(213, 1, 33, '3'),
(214, 2, 33, '3'),
(215, 3, 33, '5'),
(216, 4, 33, '4'),
(217, 5, 33, '3'),
(218, 6, 33, '4'),
(219, 1, 32, '1'),
(220, 2, 32, '3'),
(221, 3, 32, '2'),
(222, 4, 32, '1'),
(223, 5, 32, '2'),
(224, 6, 32, '4'),
(225, 1, 31, '2'),
(226, 2, 31, '5'),
(227, 3, 31, '5'),
(228, 4, 31, '4'),
(229, 5, 31, '2'),
(230, 6, 31, '5'),
(231, 1, 30, '1'),
(232, 2, 30, '2'),
(233, 3, 30, '3'),
(234, 4, 30, '1'),
(235, 5, 30, '2'),
(236, 6, 30, '4'),
(237, 1, 29, '1'),
(238, 2, 29, '4'),
(239, 3, 29, '2'),
(240, 4, 29, '3'),
(241, 5, 29, '2'),
(242, 6, 29, '3'),
(243, 1, 28, '5'),
(244, 2, 28, '5'),
(245, 3, 28, '5'),
(246, 4, 28, '4'),
(247, 5, 28, '5'),
(248, 6, 28, '4'),
(249, 1, 27, '1'),
(250, 2, 27, '3'),
(251, 3, 27, '3'),
(252, 4, 27, '3'),
(253, 5, 27, '4'),
(254, 6, 27, '4'),
(255, 1, 26, '4'),
(256, 2, 26, '5'),
(257, 3, 26, '3'),
(258, 4, 26, '3'),
(259, 5, 26, '4'),
(260, 6, 26, '4'),
(261, 1, 25, '3'),
(262, 2, 25, '5'),
(263, 3, 25, '5'),
(264, 4, 25, '4'),
(265, 5, 25, '3'),
(266, 6, 25, '4'),
(273, 1, 40, '4'),
(274, 2, 40, '5'),
(275, 3, 40, '3'),
(276, 4, 40, '4'),
(277, 5, 40, '3'),
(278, 6, 40, '4');

-- --------------------------------------------------------

--
-- Table structure for table `datalaptop`
--

CREATE TABLE `datalaptop` (
  `id_data` int(11) NOT NULL,
  `id_laptop` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar1` varchar(100) NOT NULL,
  `gambar2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datalaptop`
--

INSERT INTO `datalaptop` (`id_data`, `id_laptop`, `deskripsi`, `harga`, `gambar1`, `gambar2`) VALUES
(33, 33, 'Intel Core i5-1135G7	 <br>\r\n8GB DDR4 <br>\r\n	512GB SSD <br>\r\n	IRIS Xe	 <br>\r\n14” FHD	 <br>\r\nWin 10 \r\n', '6900000', 'acer a514.jpg', 'acer a514 2.jpg'),
(34, 32, 'Intel Dual Core N4500 <br>\r\n	4GB DDR4 <br>\r\n	128GB SSD	 <br>\r\nIntel UHD <br>\r\n	11.6” HD <br>\r\n	Win 10 ', '3499000', 'BR1100CKA.jpg', ''),
(35, 31, 'Intel Pentium N6000 <br>\r\n	4GB DDR4	 <br>\r\n256GB SSD	 <br>\r\nIntel UHD   14”	 <br>\r\nWin 11', '5500000', 'ASUS E410KAO.jpg', ''),
(36, 30, 'Intel Celeron N4000	 <br>\r\n4GB DDR4	 <br>\r\n512GB HDD	 <br>\r\nIntel UHD	 <br>\r\n11.6”	 <br>\r\nWin 10\r\n', '3600000', 'e203mah.jpeg', 'e203mah 2.jpeg'),
(37, 29, 'Intel Celeron N4020	 <br>6GB DDR4 <br>	128GB SSD <br>	Intel UHD <br>	13.3”	 <br>DOS', '2900000', 'axio 12 s1 2.jpg', 'axio 12 s1.jpg'),
(38, 28, 'Processor Intel Core i7-10750H <br>	\nRAM 8GB DDR4	 <br>\nPenyimpanan 512GB SSD + Optane 32GB <br>	\nKartu Grafis GTX 1660Ti 6GB <br>	\nLayar 15.6” FHD	 <br>\nSistem Operasi Win 10 ', '10899000', 'hppavgaming2.jpg', 'hppavgaming.jpg'),
(39, 27, 'Intel Celeron N4020	 <br>\n4GB DDR4	 <br>\n256GB SSD	 <br>\nIntel UHD	 <br>\n14” FHD	 <br>\nWin 10', '4100000', 'ideapad slim 3.jpg', 'ideapad slim3 2.jpg'),
(40, 26, 'Ryzen 5 4500U	 <br>\n8GB DDR4	 <br>\n256GB SSD	 <br>\nAMD Radeon Graphics	 <br>\n14” FHD	 <br>\nWin 10', '8900000', 'Lenovo V-14 Ryzen 5.jpg', 'Lenovo V-14 Ryzen 5 2.jpg'),
(41, 25, 'Intel Core i3-1005G1	 <br>\r\n4GB DDR4	 <br>\r\n256GB SSD	 <br>\r\nIntel UHD	 <br>\r\n14” HD	 <br>\r\nWin 10', '6800000', 'ideapad slim 3i i3.jpg', 'ideapad slim 3i i3 2.jpg'),
(43, 40, 'Intel Celeron N4120 <br>\r\n	4GB DDR4 <br>	256GB SSD\r\n <br>	Intel HD	14”\r\n <br>	Win 10', '5600000', 'acer a314.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `atribut` varchar(50) NOT NULL,
  `bobot_nilai` varchar(50) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `atribut`, `bobot_nilai`, `nama_kriteria`) VALUES
(1, 'benefit', '5', 'Prosesor'),
(2, 'benefit', '5', 'RAM'),
(3, 'benefit', '5', 'Penyimpanan'),
(4, 'benefit', '3', 'Layar'),
(5, 'benefit', '2', 'VGA'),
(6, 'benefit', '3', 'Operating sistem');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id_laptop` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `nama`) VALUES
(25, 'Lenovo Slim 3i i3'),
(26, 'Lenovo V-14 Ryzen 5'),
(27, 'Lenovo Slim 3 N4020'),
(28, 'HP Pav Gaming'),
(29, 'Axioo Slimbook 13 S1'),
(30, 'Asus VivoBook E203Mah'),
(31, 'ASUS E410KAO'),
(32, 'ASUS Br1100CKA'),
(33, 'Acer A514'),
(40, 'Acer A314');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL,
  `no_telepon` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `password_asli` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `status` enum('admin','pemilik','user') COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `nama`, `alamat`, `no_telepon`, `email`, `password`, `password_asli`, `status`) VALUES
('admin', 'administrator', '', '', 'fayyadarsynandi2@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_kriteria`
--

CREATE TABLE `t_kriteria` (
  `id_tkriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nkriteria` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kriteria`
--

INSERT INTO `t_kriteria` (`id_tkriteria`, `id_kriteria`, `keterangan`, `nkriteria`) VALUES
(1, 1, 'Intel Celeron', '1'),
(2, 1, 'Intel Pentium', '2'),
(3, 1, 'Intel Core i3 | AMD Ryzen 3', '3'),
(4, 1, 'Intel Core i5 | AMD Ryzen 5', '4'),
(5, 1, 'Intel Core i7 | AMD Ryzen 7', '5'),
(7, 2, '2 GB', '2'),
(8, 2, '4 GB', '3'),
(9, 2, '6 GB', '4'),
(10, 2, '8 GB Keatas', '5'),
(12, 3, '128 SSD', '2'),
(13, 3, '256 SSD | 512 HDD', '3'),
(15, 3, '512 SSD | 1024 HDD', '5'),
(16, 4, '11-11.9\"', '1'),
(17, 4, '12-12.9\"', '2'),
(18, 4, '13-13.9\"', '3'),
(19, 4, '14-14.9\"', '4'),
(20, 4, '15\" Keatas', '5'),
(22, 5, 'Intel UHD', '2'),
(23, 5, 'Radeon Vega', '3'),
(24, 5, 'AMD Discrete', '4'),
(25, 5, 'Nvidia', '5'),
(29, 6, 'DOS', '3'),
(30, 6, 'Win 10', '4'),
(31, 6, 'Win 11', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa`
--
ALTER TABLE `analisa`
  ADD PRIMARY KEY (`id_analisa`);

--
-- Indexes for table `datalaptop`
--
ALTER TABLE `datalaptop`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `t_kriteria`
--
ALTER TABLE `t_kriteria`
  ADD PRIMARY KEY (`id_tkriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisa`
--
ALTER TABLE `analisa`
  MODIFY `id_analisa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- AUTO_INCREMENT for table `datalaptop`
--
ALTER TABLE `datalaptop`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `t_kriteria`
--
ALTER TABLE `t_kriteria`
  MODIFY `id_tkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
