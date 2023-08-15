-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 12:17 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `publicatie`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `revista` varchar(100) NOT NULL COMMENT 'revista in care a aparut',
  `pag_inceput` int(50) NOT NULL,
  `pag_final` int(50) NOT NULL,
  `id_tip` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `revista`, `pag_inceput`, `pag_final`, `id_tip`) VALUES
(2, 'dssd', 1, 20, 1),
(3, 'css', 1, 5, 1),
(4, 'css', 1, 5, 1),
(5, 'css', 1, 5, 1),
(6, 'css', 1, 5, 1),
(7, 'css', 1, 5, 1),
(8, 'ASSS', 1, 23, 1),
(9, 'ASSS', 1, 23, 1),
(10, 'sss', 1, 4, 1),
(11, 'sss', 1, 4, 1),
(12, 'sss', 1, 3, 1),
(13, 'CCC', 1, 5, 1),
(14, 'CCC', 1, 5, 1),
(15, 'ss', 1, 6, 1),
(16, 'ss', 1, 5, 1),
(17, 'Sdd', 1, 5, 1),
(18, 'Sdd', 1, 5, 1),
(19, 'ffgd', 1, 5, 1),
(20, 'ffgd', 1, 5, 1),
(21, '', 0, 0, 1),
(22, '', 0, 0, 1),
(23, '', 0, 0, 1),
(24, '', 0, 0, 1),
(25, 'sds', 1, 6, 1),
(26, 'sds', 1, 6, 1),
(27, 'sds', 1, 6, 1),
(28, 'sds', 1, 6, 1),
(29, 'sds', 1, 6, 1),
(30, 'ASS', 1, 20, 1),
(31, 'gg', 1, 2, 1),
(32, 'ff', 1, 2, 1),
(33, 'jj', 1, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `nume` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`id`, `nume`) VALUES
(5, 'Oana'),
(6, 'Popescu'),
(7, 'Ion'),
(8, 'Anton'),
(9, 'Maria'),
(10, 'Anton'),
(11, 'Ana'),
(12, 'Artur'),
(13, 'Oana U'),
(14, 'Mihaela'),
(15, 'Paul'),
(16, 'Dan'),
(17, 'Fane'),
(18, 'Ion'),
(19, 'Ion'),
(20, 'Lili'),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, 'Dinu'),
(26, ''),
(27, ''),
(28, ''),
(29, ''),
(30, 'Juju'),
(31, ''),
(32, 'gigi'),
(33, 'Gigi'),
(34, 'Lili'),
(35, ''),
(36, 'Koko'),
(37, 'Koko'),
(38, 'dd'),
(39, 'nhvh'),
(40, 'bJSBA'),
(41, ''),
(42, 'sdsa'),
(43, ''),
(44, 'fs'),
(45, ''),
(46, ''),
(47, 'ok'),
(48, 'ggg'),
(49, 'fff');

-- --------------------------------------------------------

--
-- Table structure for table `client_report`
--

CREATE TABLE `client_report` (
  `id` int(11) NOT NULL,
  `id_tip` int(11) NOT NULL,
  `nume_client` varchar(50) NOT NULL,
  `nume_proiect` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_report`
--

INSERT INTO `client_report` (`id`, `id_tip`, `nume_client`, `nume_proiect`) VALUES
(1, 2, 'Dan', 'SSSC');

-- --------------------------------------------------------

--
-- Table structure for table `monograf`
--

CREATE TABLE `monograf` (
  `id` int(20) NOT NULL,
  `id_tip` int(20) NOT NULL,
  `subiect_tratat` varchar(500) NOT NULL,
  `nr_pagini` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monograf`
--

INSERT INTO `monograf` (`id`, `id_tip`, `subiect_tratat`, `nr_pagini`) VALUES
(1, 3, 'ggfdsdvf', 20);

-- --------------------------------------------------------

--
-- Table structure for table `publicatie`
--

CREATE TABLE `publicatie` (
  `id` int(11) NOT NULL,
  `titlu` varchar(100) NOT NULL,
  `sumar` varchar(500) DEFAULT NULL,
  `fisier` varchar(200) DEFAULT NULL COMMENT '.pdf',
  `tip_asociat` int(11) NOT NULL,
  `autor` int(50) NOT NULL,
  `id_asociat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publicatie`
--

INSERT INTO `publicatie` (`id`, `titlu`, `sumar`, `fisier`, `tip_asociat`, `autor`, `id_asociat`) VALUES
(4, 'Articol', 'Realizarea unei publicatii', 'Task Laravel.pdf', 1, 14, 0),
(5, 'Articol 1.1', 'Salut', 'Task Laravel.pdf', 1, 15, 0),
(6, 'Articol 2.1', '....', 'Task Laravel.pdf', 1, 16, 0),
(7, 'Client 3', 'kdsbncnslcnskcnljcnldj', 'Task Laravel.pdf', 2, 17, 0),
(9, 'Monograf 1', 'njksandkknskjdbdskcbkdbdbdkbsdkjbs dn cmbjdbkdmsndb vbsjdnmsb dkjhsnam smnasbjdhblasmnjdn asmnblkdjmsdljsjgwshsn na d,n3521468746135464', 'Task Laravel.pdf', 3, 19, 0),
(10, 'Art 1.1.2', 'nknsdnsn', 'Task Laravel.pdf', 1, 20, 3),
(11, '', '', 'Task Laravel.pdf', 1, 21, 4),
(12, '', '', 'Task Laravel.pdf', 1, 22, 5),
(13, '', '', 'Task Laravel.pdf', 1, 23, 6),
(14, '', '', 'Task Laravel.pdf', 1, 24, 7),
(15, 'Art 2', 'dsdds', 'Task Laravel.pdf', 1, 25, 8),
(16, '', '', 'Task Laravel.pdf', 1, 26, 9),
(17, '', '', 'Task Laravel.pdf', 1, 27, 10),
(18, '', '', 'Task Laravel.pdf', 1, 28, 11),
(19, '', '', 'Task Laravel.pdf', 1, 29, 12),
(20, 'All', 'dnsndjsndjks basjdbaj dv sahvdab', 'Task Laravel.pdf', 1, 30, 13),
(21, '', '', 'Task Laravel.pdf', 1, 31, 14),
(22, 'All', 'ssnm dxsbdx', 'Task Laravel.pdf', 1, 32, 15),
(23, 'All', 'sndkjaskldnm', 'Task Laravel.pdf', 1, 33, 16),
(24, 'All', 'sndkjshkfsn,m', 'Task Laravel.pdf', 1, 34, 17),
(25, '', '', 'Task Laravel.pdf', 1, 35, 18),
(26, 'detalii', 'bjabjdbjam', 'Task Laravel.pdf', 1, 36, 19),
(27, 'detalii', 'bjabjdbjam', 'Task Laravel.pdf', 1, 37, 20),
(28, 'dsfs', 'dsdasda', 'Task Laravel.pdf', 1, 38, 21),
(29, 'ghfhgf', 'hngjh', 'Task Laravel.pdf', 1, 39, 22),
(30, 'dsad', 'm,xbMNBZX', 'Task Laravel.pdf', 1, 40, 23),
(31, '', '', 'Task Laravel.pdf', 1, 41, 24),
(32, 'dsf', 'fdfsf', 'Task Laravel.pdf', 1, 42, 25),
(33, '', '', 'Task Laravel.pdf', 1, 43, 26),
(34, 'sd', 'ds', 'Task Laravel.pdf', 1, 44, 27),
(35, '', '', 'Task Laravel.pdf', 1, 45, 28),
(36, '', '', 'Task Laravel.pdf', 1, 46, 29),
(37, 'ghgujk', ' jgjhkj', 'Task Laravel.pdf', 1, 47, 30),
(38, 'gggg', 'ggg', 'Task Laravel.pdf', 1, 48, 31),
(39, 'ffff', 'ffff', 'Task Laravel.pdf', 1, 49, 32);

-- --------------------------------------------------------

--
-- Table structure for table `tip_publicatie`
--

CREATE TABLE `tip_publicatie` (
  `id_tip` int(11) NOT NULL,
  `denumire_publicatie` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tip_publicatie`
--

INSERT INTO `tip_publicatie` (`id_tip`, `denumire_publicatie`) VALUES
(1, 'Articol'),
(2, 'Client report'),
(3, 'Monograf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tip` (`id_tip`);

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_report`
--
ALTER TABLE `client_report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tip` (`id_tip`);

--
-- Indexes for table `monograf`
--
ALTER TABLE `monograf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tip` (`id_tip`);

--
-- Indexes for table `publicatie`
--
ALTER TABLE `publicatie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tip_asociat` (`tip_asociat`),
  ADD KEY `autor` (`autor`);

--
-- Indexes for table `tip_publicatie`
--
ALTER TABLE `tip_publicatie`
  ADD PRIMARY KEY (`id_tip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `client_report`
--
ALTER TABLE `client_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `monograf`
--
ALTER TABLE `monograf`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publicatie`
--
ALTER TABLE `publicatie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tip_publicatie`
--
ALTER TABLE `tip_publicatie`
  MODIFY `id_tip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_tip`) REFERENCES `tip_publicatie` (`id_tip`);

--
-- Constraints for table `client_report`
--
ALTER TABLE `client_report`
  ADD CONSTRAINT `client_report_ibfk_1` FOREIGN KEY (`id_tip`) REFERENCES `tip_publicatie` (`id_tip`);

--
-- Constraints for table `monograf`
--
ALTER TABLE `monograf`
  ADD CONSTRAINT `monograf_ibfk_1` FOREIGN KEY (`id_tip`) REFERENCES `tip_publicatie` (`id_tip`);

--
-- Constraints for table `publicatie`
--
ALTER TABLE `publicatie`
  ADD CONSTRAINT `publicatie_ibfk_1` FOREIGN KEY (`tip_asociat`) REFERENCES `tip_publicatie` (`id_tip`),
  ADD CONSTRAINT `publicatie_ibfk_2` FOREIGN KEY (`autor`) REFERENCES `autor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
