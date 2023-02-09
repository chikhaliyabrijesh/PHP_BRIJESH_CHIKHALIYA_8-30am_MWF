-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 08:15 AM
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
-- Database: `assessment_ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `addemployee`
--

CREATE TABLE `addemployee` (
  `empid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addemployee`
--

INSERT INTO `addemployee` (`empid`, `firstname`, `lastname`, `gender`, `email`, `password`, `mobile`, `address`, `datetime`) VALUES
(1, 'Brijesh', 'Patel', 'Male', 'brijesh@gmail.com', 'MTIzNDU=', '9998993333', 'Rajkot', '09/02/2023 12:41:24 pm'),
(2, 'Parth', 'Patel', 'Male', 'parth@gmail.com', 'MTIzNDU=', '9998993458', 'Rajkot', '09/02/2023 12:42:03 pm'),
(3, 'Raj', 'Patel', 'Male', 'raj@gmail.com', 'MTIzNDU=', '9998993458', 'Rajkot', '09/02/2023 12:42:36 pm'),
(4, 'Arjun', 'Kotadiya', 'Male', 'arjun@gmail.com', 'MTIzNDU=', '9998993423', 'Rajkot', '09/02/2023 12:43:18 pm'),
(5, 'Kartik', 'Patel', 'Male', 'kartik@gmail.com', 'MTIzNDU=', '9998991111', 'Rajkot', '09/02/2023 12:44:03 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addemployee`
--
ALTER TABLE `addemployee`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addemployee`
--
ALTER TABLE `addemployee`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
