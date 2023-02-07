-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Feb 07, 2023 at 10:07 AM
-- Server version: 5.7.41
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deitybase`
--

-- --------------------------------------------------------

--
-- Table structure for table `deities`
--

CREATE TABLE `deities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `mythology` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `association` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `objects` varchar(255) COLLATE latin1_bin DEFAULT 'nothing'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `deities`
--

INSERT INTO `deities` (`id`, `name`, `mythology`, `association`, `objects`) VALUES
(1, 'Nanook', 'Inuit', 'polar bears', 'nothing'),
(2, 'Thor', 'Norse', 'thunder, trees and fertiliity', 'hammer'),
(3, 'Anubis', 'Egyptian', 'funerary rites, graves and the underworld', 'flail'),
(4, 'Anansi', 'West African/Akan', 'stories, wisdom, knowledge and trickery', 'nothing'),
(5, 'Hanuman', 'Indian/Vedic', 'wisdom, courage, strength and self-discipline', 'mace'),
(6, 'Hephaestus', 'Greek', 'blacksmithing, technology, fire and volcanoes', 'hammer'),
(7, 'Dazhbog', 'Slavic', 'sun and fire', 'nothing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deities`
--
ALTER TABLE `deities`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deities`
--
ALTER TABLE `deities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
