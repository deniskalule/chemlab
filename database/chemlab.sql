-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 11:25 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chemlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `name`, `password`, `modification_date`) VALUES
(1, 'admin@kyu.ac.ug', 'Kivumbi Achilles', 'admin123', '2023-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `organic`
--

CREATE TABLE `organic` (
  `id` int(4) NOT NULL,
  `compound` varchar(100) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `expdate` varchar(4) DEFAULT NULL,
  `location` varchar(50) NOT NULL,
  `modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organic`
--

INSERT INTO `organic` (`id`, `compound`, `amount`, `expdate`, `location`, `modification_date`) VALUES
(1, 'UNIVERSAL INDICATOR ', '500', '2020', '', '0000-00-00'),
(2, 'PYRIDINE DRIED', '500', '', '', '0000-00-00'),
(3, 'ACETIC ACID', '2500', '', '', '0000-00-00'),
(4, 'PETROLEUM ETHER', '2000', '', '', '0000-00-00'),
(5, 'NITRIC ACID', '5000', '', '', '0000-00-00'),
(6, 'HYDROGEN PEROXIDE', '', '', '', '0000-00-00'),
(7, 'ETHANOL ABSOLUTE', '', '', '', '0000-00-00'),
(8, 'BENZALDEHYDE', '1000', '', '', '0000-00-00'),
(9, 'TOLUENE', '2500', '', '', '0000-00-00'),
(10, 'TRICHLOROMEHTANE', '1000', '', '', '0000-00-00'),
(11, 'ISOPROPYL ALCHOL', '1000', '', '', '0000-00-00'),
(12, 'ETHANOL  ', '2000', '', '', '0000-00-00'),
(13, 'ACETONE', '2000', '', '', '0000-00-00'),
(14, 'FORMALIN', '2000', '', '', '0000-00-00'),
(15, 'PROPAN', '2000', '', '', '0000-00-00'),
(16, 'BRINE', '1000', '', '', '0000-00-00'),
(17, 'METHANOL', '1000', '', '', '0000-00-00'),
(18, 'GLYCERINE', '1000', '', '', '0000-00-00'),
(19, 'METHYLATED SPIRIT', '1000', '', '', '0000-00-00'),
(20, 'OLIVE OIL', '1000', '', '', '0000-00-00'),
(21, 'ALMOND OIL', '500', '', '', '0000-00-00'),
(22, 'COCONUT OIL', '500', '', '', '0000-00-00'),
(23, 'SODIUM SILICATE', '500', '', '', '0000-00-00'),
(24, 'LEMON PERFUME', '5000', '', '', '0000-00-00'),
(25, 'PALM KENNEL OIL', '5000', '', '', '0000-00-00'),
(26, 'VANILA PERFUME', '5000', '', '', '0000-00-00'),
(27, 'VEGETABLE OIL', '5000', '', '', '0000-00-00'),
(28, 'STRAWBERRY PERFUME', '5000', '', '', '0000-00-00'),
(29, 'TRIETHANOL', '500', '', '', '0000-00-00'),
(30, 'VINEGAR', '500', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(4) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `course`, `year`, `email`, `password`) VALUES
(2, 'kivumbi achilles', 'CHD', '3', '1800801896@std.kyu.ac.ug', '1800801896'),
(3, 'nansikombi cathy', 'CHD', '3', '1900800356@std.kyu.ac.ug', '1900800356');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organic`
--
ALTER TABLE `organic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organic`
--
ALTER TABLE `organic`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
