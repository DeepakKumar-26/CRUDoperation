-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql303.byetcluster.com
-- Generation Time: Jul 19, 2022 at 01:43 PM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_32203155_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sn` int(5) NOT NULL,
  `roll_number` bigint(12) NOT NULL,
  `password` varchar(10) NOT NULL,
  `enrollment_number` varchar(6) DEFAULT NULL,
  `department` varchar(10) DEFAULT NULL,
  `semester` int(1) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `father` varchar(30) DEFAULT NULL,
  `mother` varchar(30) DEFAULT NULL,
  `mobile` bigint(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `img` varchar(50) NOT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sn`, `roll_number`, `password`, `enrollment_number`, `department`, `semester`, `name`, `father`, `mother`, `mobile`, `dob`, `img`, `address`) VALUES
(3, 301602218016, 'pass', 'BF3328', 'CSE', 7, 'Deepak Kumar', 'Girwar Singh', 'Khurmaniya Bai', 8517971204, '1999-11-06', '1.png', 'sitapur surguja chhattisgarh'),
(6, 301602218003, '', 'BF3315', 'CSE', 0, 'Deepika Netam', '', '', 9589034194, '2001-05-20', '', 'Raipur'),
(15, 301602218023, '', 'BF3335', 'cse', NULL, '	Mohit Kumar Painkra', NULL, NULL, 6262116388, '2000-08-08', '', 'Raipur '),
(16, 301602218032, '', 'BF3342', 'cse', NULL, 'Ritesh Sai', NULL, NULL, 9131886778, '2000-01-01', '', 'Jashpur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sn`),
  ADD UNIQUE KEY `roll_number` (`roll_number`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sn` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
