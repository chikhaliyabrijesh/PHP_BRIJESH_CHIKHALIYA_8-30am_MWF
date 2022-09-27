-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 06:53 AM
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
-- Database: `assignmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `onm` int(11) NOT NULL,
  `amt` float DEFAULT NULL,
  `ode` varchar(155) DEFAULT NULL,
  `cnm` int(11) DEFAULT NULL,
  `sno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`onm`, `amt`, `ode`, `cnm`, `sno`) VALUES
(3001, 18.69, '03/10/1994', 201, 1007),
(3002, 1900.1, '03/10/1994', 207, 1004),
(3003, 767.19, '03/10/1994', 201, 1001),
(3005, 3005, '03/10/1994', 203, 1002),
(3006, 3006, '04/10/1994', 201, 1007),
(3007, 3007, '05/10/1994', 204, 1002),
(3008, 3008, '05/10/1994', 206, 1001),
(3009, 3009, '04/10/1994', 202, 1003),
(3010, 3010, '06/10/1994', 204, 1002),
(3011, 3011, '06/10/1994', 206, 1001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`onm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
