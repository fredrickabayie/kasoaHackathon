-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2015 at 08:14 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `kasoa_farmer`
--

CREATE TABLE IF NOT EXISTS `kasoa_farmer` (
`farmer_id` int(11) NOT NULL,
  `farmer_sname` varchar(50) NOT NULL,
  `farmer_fname` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `produce_type` varchar(100) NOT NULL,
  `certification_grade` enum('A','B','C') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kasoa_produce`
--

CREATE TABLE IF NOT EXISTS `kasoa_produce` (
`produce_id` int(11) NOT NULL,
  `produce_name` varchar(100) NOT NULL,
  `produce_desc` varchar(200) NOT NULL,
  `famer_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `quality_grade` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kasoa_sales`
--

CREATE TABLE IF NOT EXISTS `kasoa_sales` (
`sales_id` int(11) NOT NULL,
  `produce_id` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `price` double NOT NULL,
  `buyer_phone` varchar(11) NOT NULL,
  `buyer_email` varchar(100) NOT NULL,
  `farmer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasoa_farmer`
--
ALTER TABLE `kasoa_farmer`
 ADD PRIMARY KEY (`farmer_id`);

--
-- Indexes for table `kasoa_produce`
--
ALTER TABLE `kasoa_produce`
 ADD PRIMARY KEY (`produce_id`), ADD KEY `famer_id` (`famer_id`);

--
-- Indexes for table `kasoa_sales`
--
ALTER TABLE `kasoa_sales`
 ADD PRIMARY KEY (`sales_id`), ADD KEY `farmer_id` (`farmer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kasoa_farmer`
--
ALTER TABLE `kasoa_farmer`
MODIFY `farmer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kasoa_produce`
--
ALTER TABLE `kasoa_produce`
MODIFY `produce_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kasoa_sales`
--
ALTER TABLE `kasoa_sales`
MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
