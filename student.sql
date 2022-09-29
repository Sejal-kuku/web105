-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 07:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `id` int(15) NOT NULL,
  `sname` varchar(15) NOT NULL,
  `saddress` varchar(30) NOT NULL,
  `sclass` text NOT NULL,
  `sphone` varchar(30) NOT NULL,
  `log` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`id`, `sname`, `saddress`, `sclass`, `sphone`, `log`) VALUES
(1, 'pradeep', 'karol bagh new delhi', '8th', '12565636', ''),
(5, 'ram', 'shadipur dipo near metro stati', '4th', '9958264253', ''),
(6, 'ram', 'shadipur dipo near metro stati', '4th', '9958264253', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentdata`
--
ALTER TABLE `studentdata`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
