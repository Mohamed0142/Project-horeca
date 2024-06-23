-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 20, 2024 at 08:19 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-horeca`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tel` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `tel`, `email`, `message`) VALUES
(1, '0684648998', 'mo@gmail.com', 'aa'),
(2, '0684648998', 'mo@gmail.com', 'aaa'),
(3, '0684648998', 'mo@gmail.com', 'poakpoamfk'),
(4, '09798678564', 'user@gmail.com', 'uygireasedufihjkl;kpoiyutresdfgjhuijokl'),
(5, '9798678564', 'user@gmail.com', 'aaaa'),
(6, '0684648998', 'niganiganiganigangiangai@gmail.com', 'NIGAAAAAAAAAAAAAAAAA');

-- --------------------------------------------------------

--
-- Table structure for table `inschrijfformulier`
--

DROP TABLE IF EXISTS `inschrijfformulier`;
CREATE TABLE IF NOT EXISTS `inschrijfformulier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `steden` enum('Amsterdam','Rotterdam','Den Haag','Utrecht','Eindhoven','Tilburg','Groningen','Almere','Breda') NOT NULL,
  `address` varchar(255) NOT NULL,
  `leeftijd` int NOT NULL,
  `klas` enum('1A','1B','1C') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inschrijfformulier`
--

INSERT INTO `inschrijfformulier` (`id`, `voornaam`, `achternaam`, `email`, `steden`, `address`, `leeftijd`, `klas`) VALUES
(1, 'moooo', 'oooooooooooo', 'ooooooooooooooooooooooo', 'Amsterdam', 'oooooooo', 13, '1A'),
(2, 'moooo', 'oooooooooooo', 'ooooooooooooooooooooooo', 'Amsterdam', 'oooooooo', 13, '1A'),
(3, 'moooo', 'oooooooooooo', 'ooooooooooooooooooooooo', 'Amsterdam', 'oooooooo', 13, '1A'),
(4, 'moooo111', 'oooooooooooo', 'ooooooooooooooooooooooo', 'Amsterdam', 'oooooooo', 13, '1C'),
(5, 'moooo111', 'oooooooooooo', 'ooooooooooooooooooooooo', 'Amsterdam', 'oooooooo', 13, '1A'),
(6, 'moooo111', 'oooooooooooo', 'ooooooooooooooooooooooo', 'Amsterdam', 'oooooooo', 13, '1B'),
(7, 'moooo111', 'oooooooooooo', 'ooooooooooooooooooooooo', 'Amsterdam', 'oooooooo', 13, '1C'),
(8, 'moooo111', 'oooooooooooo', 'ooooooooooooooooooooooo', 'Amsterdam', 'oooooooo', 13, '1C'),
(9, 'moooo111', 'oooooooooooo', 'ooooooooooooooooooooooo', 'Amsterdam', 'oooooooo', 13, '1A'),
(10, 'moooo111', 'oooooooooooo', 'ooooooooooooooooooooooo', 'Amsterdam', 'oooooooo', 13, '1A'),
(11, 'moooo111', 'oooooooooooo', 'ooooooooooooooooooooooo', 'Amsterdam', 'oooooooo', 13, '1B'),
(12, 'saaa', 's', 'asdasdsa@gmail.com', 'Amsterdam', 's', 12, '1A'),
(13, 'test', 'aa', 'test@gmail.comqq', 'Utrecht', 'ig75e', 66, '1A'),
(14, 'test', 'aa', 'test@gmail.comqq', 'Amsterdam', 'ig75e', 66, '1B'),
(15, 'moooo111', 'a', 'aaaaaaaaaaaaaa@mail.com', 'Almere', 'aa', 121, '1B'),
(16, 'moooo111', 'a', 'aaaaaaaaaaaaaa@mail.com', 'Rotterdam', 'aa', 121, '1C'),
(17, 'NIGAGNIAGNAGIANGIA', 'aaa', 'aaaaaaaaaaaaaa@mail.com', 'Rotterdam', 'aaa', 121, '1C'),
(18, 'moooo', 'a', 'aaaaaaaaaaaaaa@mail.com', 'Den Haag', 'aa', 1231, '1B'),
(19, 'moooo111', 'aa', 'aaaaaaaaaaaaaa@mail.com', 'Rotterdam', 'aa', 1231, '1A'),
(20, 'NIGAA', 'aa', 'aaaaaaaaaaaaaa@mail.com', 'Groningen', 'aa', 1231, '1A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, '335138@student.mboutrecht.nl', '12345');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
