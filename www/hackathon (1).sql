-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2015 at 02:33 PM
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
-- Table structure for table `farm_produce`
--

CREATE TABLE IF NOT EXISTS `farm_produce` (
  `produce_type` varchar(100) NOT NULL,
  `quantity` float NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farm_produce`
--

INSERT INTO `farm_produce` (`produce_type`, `quantity`, `phone`) VALUES
('yams', 67, '233200393945');

-- --------------------------------------------------------

--
-- Table structure for table `kasoa_buyer`
--

CREATE TABLE IF NOT EXISTS `kasoa_buyer` (
`buyer_id` int(11) NOT NULL,
  `buyer_sname` varchar(50) NOT NULL,
  `buyer_fname` varchar(50) NOT NULL,
  `buyer_email` varchar(100) NOT NULL,
  `buyer_phone` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasoa_buyer`
--

INSERT INTO `kasoa_buyer` (`buyer_id`, `buyer_sname`, `buyer_fname`, `buyer_email`, `buyer_phone`) VALUES
(1, 'Kwame', 'Mintah', 'kasi@gmail.com', '6767232223');

-- --------------------------------------------------------

--
-- Table structure for table `kasoa_farmer`
--

CREATE TABLE IF NOT EXISTS `kasoa_farmer` (
  `name` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `produce_type` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasoa_farmer`
--

INSERT INTO `kasoa_farmer` (`name`, `location`, `produce_type`, `phone`) VALUES
('Kwame', 'Aseibu Nkwanta', 'yams', ''),
('$sname', '$location', '$prod_type', ''),
('Kwadwo', 'Aseibu Nkwanta', 'yams', ''),
('Sally', 'Berekuso', 'pineapple', ''),
('B', 'Ashesi', 'rice', ''),
('B', 'Kwashieman', 'pineapple', ''),
('Sally', 'Berekuso', 'pineapple', '233200393945'),
('Ansah', 'Ashesi', 'Yams', '233200393945'),
('Kwasi Amofa', 'Ada', 'Plantain', '233200393945'),
('Kwasi Amofa', 'Ada', 'Plantain', '233200393945'),
('Ansah', 'Ashesi', 'Yams', '233200393945');

-- --------------------------------------------------------

--
-- Table structure for table `kasoa_produce`
--

CREATE TABLE IF NOT EXISTS `kasoa_produce` (
`produce_id` int(11) NOT NULL,
  `produce_name` varchar(100) NOT NULL,
  `produce_desc` varchar(200) NOT NULL,
  `farmer_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `quality_grade` enum('A','B','C','D') NOT NULL,
  `unit` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasoa_produce`
--

INSERT INTO `kasoa_produce` (`produce_id`, `produce_name`, `produce_desc`, `farmer_id`, `price`, `quantity`, `quality_grade`, `unit`) VALUES
(2, 'yam', 'huge tubers', 1, 4, 45, 'A', 'kg'),
(3, 'maize', 'savannah', 2, 1, 34, 'A', 'kg'),
(4, 'pineapple', 'sugar loaf', 2, 2, 34, 'A', 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `kasoa_sales`
--

CREATE TABLE IF NOT EXISTS `kasoa_sales` (
`sales_id` int(11) NOT NULL,
  `produce_id` int(11) NOT NULL,
  `quantity` double NOT NULL,
  `price` double NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `date_purchased` date NOT NULL,
  `time_purchased` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kasoa_sales`
--

INSERT INTO `kasoa_sales` (`sales_id`, `produce_id`, `quantity`, `price`, `buyer_id`, `date_purchased`, `time_purchased`) VALUES
(1, 2, 45, 78, 1, '2015-10-25', '22:50:54'),
(2, 2, 45, 78, 1, '2015-10-26', '01:35:03'),
(3, 2, 45, 78, 1, '2015-10-26', '01:38:18'),
(4, 3, 45, 4, 0, '2015-10-26', '01:38:18'),
(5, 2, 45, 78, 1, '2015-10-26', '01:57:16'),
(6, 2, 45, 78, 1, '2015-10-26', '01:57:32'),
(7, 3, 45, 4, 0, '2015-10-26', '01:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `sales_produce`
--

CREATE TABLE IF NOT EXISTS `sales_produce` (
  `produce` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `quantity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_produce`
--

INSERT INTO `sales_produce` (`produce`, `price`, `quantity`) VALUES
('yams', 67, 57),
('rice', 23, 68);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasoa_buyer`
--
ALTER TABLE `kasoa_buyer`
 ADD PRIMARY KEY (`buyer_id`);

--
-- Indexes for table `kasoa_produce`
--
ALTER TABLE `kasoa_produce`
 ADD PRIMARY KEY (`produce_id`), ADD KEY `famer_id` (`farmer_id`);

--
-- Indexes for table `kasoa_sales`
--
ALTER TABLE `kasoa_sales`
 ADD PRIMARY KEY (`sales_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kasoa_buyer`
--
ALTER TABLE `kasoa_buyer`
MODIFY `buyer_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kasoa_produce`
--
ALTER TABLE `kasoa_produce`
MODIFY `produce_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kasoa_sales`
--
ALTER TABLE `kasoa_sales`
MODIFY `sales_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
