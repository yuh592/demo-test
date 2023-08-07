-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 05:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom5`
--

-- --------------------------------------------------------

--
-- Table structure for table `infonhom5`
--

CREATE TABLE `infonhom5` (
  `StudentID` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Birthday` date NOT NULL,
  `Class` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infonhom5`
--

INSERT INTO `infonhom5` (`StudentID`, `Name`, `Birthday`, `Class`) VALUES
(1, 'Nguyễn Huy', '2002-09-05', '56SD3'),
(2, 'Thu Trà', '2002-06-09', '56SD3'),
(3, 'Ngọc Mai', '2002-09-09', '56SD3'),
(4, 'Hà Phương', '2002-01-05', '56SD3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infonhom5`
--
ALTER TABLE `infonhom5`
  ADD PRIMARY KEY (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infonhom5`
--
ALTER TABLE `infonhom5`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
