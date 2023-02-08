-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2023 at 01:49 PM
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
-- Database: `assessment_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addbook`
--

CREATE TABLE `tbl_addbook` (
  `bookid` int(11) NOT NULL,
  `bookname` varchar(255) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `autherid` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_addbook`
--

INSERT INTO `tbl_addbook` (`bookid`, `bookname`, `categoryid`, `autherid`, `quantity`, `price`) VALUES
(1, 'java', 1, 3, '1', '100'),
(4, 'electronic engineering', 2, 4, '1', '250'),
(5, 'php', 1, 6, '1', '400');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auther`
--

CREATE TABLE `tbl_auther` (
  `autherid` int(11) NOT NULL,
  `authername` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_auther`
--

INSERT INTO `tbl_auther` (`autherid`, `authername`) VALUES
(1, 'vijay kumar pandey'),
(2, 'b. prashnalakshmi'),
(3, 'sonveer singh'),
(4, 't. joel'),
(5, 'Dr. p.s.bimbhara'),
(6, 'dr.m.h.shah'),
(7, 'danish hasan'),
(8, 'k.p.verma'),
(9, 's.trambakamurti'),
(10, 'charls matlack');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`categoryid`, `categoryname`) VALUES
(1, 'computer'),
(2, 'electronics'),
(3, 'electrical'),
(4, 'civil'),
(5, 'mechanical'),
(6, 'architacture');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contactid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contactid`, `firstname`, `lastname`, `email`, `mobile`, `subject`, `message`, `datetime`) VALUES
(1, 'Brijesh', 'Chikhaliya', 'brijesh@gmail.com', 9998992134, 'hii', 'hii', '01/02/2023 13:20:59 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `registerid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `datetime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`registerid`, `name`, `mobile`, `email`, `password`, `datetime`) VALUES
(1, 'Ketan Patel', 9998999999, 'ketan@gmail.com', 'MTIzNDU=', '01/02/2023 18:03:21 pm'),
(2, 'brijesh patel', 9998999999, 'brijesh@gmail.com', 'MTIzNDU=', '01/02/2023 18:06:30 pm'),
(3, 'parth patel', 9998993333, 'parth@gmail.com', 'MTIzNDU=', '01/02/2023 18:06:58 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_addbook`
--
ALTER TABLE `tbl_addbook`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `foreign` (`categoryid`),
  ADD KEY `foreign key` (`autherid`);

--
-- Indexes for table `tbl_auther`
--
ALTER TABLE `tbl_auther`
  ADD PRIMARY KEY (`autherid`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`registerid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_addbook`
--
ALTER TABLE `tbl_addbook`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_auther`
--
ALTER TABLE `tbl_auther`
  MODIFY `autherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `registerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
