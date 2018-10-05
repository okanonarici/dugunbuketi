-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2018 at 09:25 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dugunbuketi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city` varchar(30) NOT NULL,
  `place` varchar(120) NOT NULL
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city`, `place`) VALUES
('izmir', 'Wedding Place 1'),
('izmir', 'Wedding Place 2'),
('izmir', 'Wedding Place 3'),
('izmir', 'Wedding Place 3'),
('istanbul', 'Place 1'),
('izmir', 'Holiday Inn'),
('ankara', 'Flowerer 1'),
('istanbul', 'Mihribat Korusu'),
('istanbul', 'Ciragan Palace'),
('malatya', 'Pinarbasi Garden'),
('istanbul', 'Grand Istanbul'),
('istanbul', 'Mira Palace'),
('ankara', 'Ogretmenevi ');

-- --------------------------------------------------------

--
-- Table structure for table `limitage`
--

CREATE TABLE `limitage` (
  `ip` varchar(15) NOT NULL,
  `counter` tinyint(4) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MEMORY DEFAULT CHARSET=utf8;

--
-- Dumping data for table `limitage`
--

INSERT INTO `limitage` (`ip`, `counter`, `time`) VALUES
('127.0.0.1', 10, 1538774733);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `limitage`
--
ALTER TABLE `limitage`
  ADD UNIQUE KEY `ip` (`ip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
