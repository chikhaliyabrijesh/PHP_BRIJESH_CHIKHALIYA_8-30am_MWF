-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 02:30 PM
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
-- Database: `tablesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `fname` varchar(155) DEFAULT NULL,
  `lname` varchar(155) DEFAULT NULL,
  `gender` varchar(155) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `Email` varchar(155) DEFAULT NULL,
  `department` varchar(155) DEFAULT NULL,
  `salary` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `fname`, `lname`, `gender`, `address`, `Email`, `department`, `salary`) VALUES
(1, 'akshar', 'patel', 'male', 'rajkot', 'akshar10@gmail.com', 'web designing', 1000000),
(2, 'anant', 'patel', 'male', 'rajkot', 'anant@gmail.com', 'web developing', 900000),
(3, 'anil', 'kotadiya', 'male', 'ahmedabad', 'anil1999@gmail.com', 'application developing', 800000),
(4, 'bhargav', 'akabari', 'male', 'baroda', 'bhargav15@gmail.com', 'web designing', 700000),
(5, 'bipin', 'madhani', 'male', 'bhavnagar', 'bipin30@gmail.com', 'web developing', 600000),
(6, 'chandresh', 'patel', 'male', 'porbandar', 'chandresh@gmail.com', 'application developing', 500000),
(7, 'mahesh', 'kanani', 'male', 'morbi', 'mahesh25@gmail.com', 'web designing', 400000),
(8, 'ketan', 'patel', 'male', 'anand', 'ketan20@gmail.com', 'web developing', 300000),
(9, 'raj', 'pansuriya', 'male', 'jamnagar', 'raj1998@gmail.com', 'application developing', 200000),
(10, 'nirav', 'kalariya', 'male', 'navsari', 'nirav21@gmail.com', 'web developing', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
