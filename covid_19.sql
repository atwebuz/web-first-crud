-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 30, 2023 at 08:42 AM
-- Server version: 5.7.33
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_19`
--

-- --------------------------------------------------------

--
-- Table structure for table `vaksina`
--

CREATE TABLE `vaksina` (
  `id` int(11) NOT NULL,
  `nomi` varchar(50) NOT NULL,
  `mavjud_soni` int(50) NOT NULL,
  `qabul_qilish_soni` int(50) NOT NULL,
  `malumotlari` text NOT NULL,
  `oraliq_kuni` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaksina`
--

INSERT INTO `vaksina` (`id`, `nomi`, `mavjud_soni`, `qabul_qilish_soni`, `malumotlari`, `oraliq_kuni`) VALUES
(4, 'redmijon', 6, 1, 'lorem ipsum amet', 2),
(6, 'Mango', 30, 12, 'hello world mir', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vaksina`
--
ALTER TABLE `vaksina`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vaksina`
--
ALTER TABLE `vaksina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
