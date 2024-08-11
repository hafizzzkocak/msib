-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 06:07 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yhc`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_kursus`
--

CREATE TABLE `t_kursus` (
  `ID` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `durasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_kursus`
--

INSERT INTO `t_kursus` (`ID`, `judul`, `deskripsi`, `durasi`) VALUES
(5, 'Public Speaking', 'berbicara', '1 bulan');

-- --------------------------------------------------------

--
-- Table structure for table `t_materi`
--

CREATE TABLE `t_materi` (
  `id_materi` int(11) NOT NULL,
  `ID` int(11) DEFAULT NULL,
  `Judul` varchar(255) DEFAULT NULL,
  `Deskripsi` text DEFAULT NULL,
  `EmbedLink` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_materi`
--

INSERT INTO `t_materi` (`id_materi`, `ID`, `Judul`, `Deskripsi`, `EmbedLink`) VALUES
(4, 5, 'practice make perfect', 'lesson', 'oka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_kursus`
--
ALTER TABLE `t_kursus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `t_materi`
--
ALTER TABLE `t_materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_kursus`
--
ALTER TABLE `t_kursus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_materi`
--
ALTER TABLE `t_materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_materi`
--
ALTER TABLE `t_materi`
  ADD CONSTRAINT `t_materi_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `t_kursus` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
