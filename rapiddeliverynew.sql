-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 07:47 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapiddeliverynew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `age` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `surname`, `age`, `username`, `password`) VALUES
(1, 'Usr', 'pss', '21', 'usr', 'pss');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `id` int(11) NOT NULL,
  `username` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `vehicle_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`id`, `username`, `password`, `address`, `telephone`, `vehicle_ID`) VALUES
(3, 'av', 'pss', 'ghgajdkgs', 776655423, 3),
(4, 'Pr', 'pss', 'hkjhafkjs', 776655422, 4),
(5, 'chandan', 'pss', 'blr', 1234531234, 5),
(6, 'new', 'pss', 'blr', 94654576, 8),
(7, 'abc', 'abc', 'blr', 91872516, 7),
(9, 'def', 'def', 'def', 9567564, 10);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `address` varchar(45) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `password`, `email`, `address`, `tel`) VALUES
(1, 'Pr', 'pss', 'pra@gmail.com', '102 ljn', '0766492254'),
(2, 'zxcv', 'zxcv', 'sdfa', 'feaf', '5233523332'),
(3, 'asdf', 'asdf', 'mn@gmail.com', 'mys', '68926146'),
(4, 'qwer', 'qwer', 'qwer', 'lmp', '638384'),
(13, 'new', 'new', 'new', 'new', '7879876');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `vehicle_ID` int(11) NOT NULL,
  `Longitude` text NOT NULL,
  `Latitude` text NOT NULL,
  `parcel_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`vehicle_ID`, `Longitude`, `Latitude`, `parcel_status`) VALUES
(3, '70.5946', '10.9716', 'pickedup'),
(4, '73.5946', '12.9716', 'pickedup'),
(5, '77.5946', '12.9716', 'pickedup'),
(6, '75.5946', '12.9716', 'pickedup'),
(7, '71.5946', '10.9716', 'pickedup'),
(8, '69.5946', '11.9716', 'pickedup');

-- --------------------------------------------------------

--
-- Table structure for table `parcel`
--

CREATE TABLE `parcel` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `pickup_address` varchar(45) DEFAULT NULL,
  `delivery_address` varchar(45) DEFAULT NULL,
  `package_type` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `state_address` varchar(45) DEFAULT NULL,
  `note` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parcel`
--

INSERT INTO `parcel` (`id`, `customer_id`, `pickup_address`, `delivery_address`, `package_type`, `contact_no`, `state_address`, `note`) VALUES
(2, 2, 'blr', 'ljn', 'mno', '76769', 'blr', 'imp'),
(3, 3, 'blr', 'mys', 'imp', '897', 'blr', 'imp'),
(4, 3, 'blr', 'jhs', 'light', '9689697', 'gjj', 'imp'),
(5, 1, 'blr', 'ljn', 'imp', '70978', 'up', 'imp'),
(6, 1, 'mn', 'nm', 'mnb', '709870', 'hgkjhk', 'ok'),
(7, 1, 'jkhlk', 'nkjj', 'kjhjjk', '7089', 'hkjhlkj', 'jhkj'),
(8, 1, 'blr', 'ljn', 'imp', '67879', 'imp', 'imp'),
(9, 1, 'blr', 'jhs', 'imp', '56968768', 'bgt', 'imp'),
(10, 2, 'blr', 'mys', 'imp', '798798', 'up', 'imp'),
(11, 3, 'del', 'pun', 'light', '767786', 'del', 'imp'),
(12, 3, 'del', 'pun', 'light', '767786', 'del', 'imp'),
(13, 3, 'hkjlh', 'hljkhj', 'jhhjh', '787097', 'lkjjk', 'jblkj'),
(14, 3, 'hkjlh', 'hljkhj', 'jhhjh', '787097', 'lkjjk', 'jblkj'),
(15, 3, 'hkjlh', 'hljkhj', 'jhhjh', '787097', 'lkjjk', 'jblkj'),
(16, 3, 'hkjlh', 'hljkhj', 'jhhjh', '787097', 'lkjjk', 'jblkj'),
(17, 3, 'gkjhkj', 'hkjh', 'jkh', '6986876', 'bbkjbk', 'bbhjb'),
(18, 2, 'pune', 'blr', 'light', '968709546', 'na', 'imp');

-- --------------------------------------------------------

--
-- Table structure for table `parcel_status`
--

CREATE TABLE `parcel_status` (
  `id` int(11) NOT NULL,
  `courier_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `Vehicle_ID` int(11) NOT NULL,
  `parcel_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parcel_status`
--

INSERT INTO `parcel_status` (`id`, `courier_id`, `customer_id`, `status`, `Vehicle_ID`, `parcel_ID`) VALUES
(2, 4, 4, 'Delivered', 4, 5),
(3, 4, 1, 'Pickedup', 4, 2),
(4, 5, 1, 'Delivered', 3, 6),
(5, 3, 1, 'Delivered', 5, 7),
(6, 3, 1, 'Pickedup', 5, 8),
(12, 5, 2, 'Pickedup', 3, 3),
(13, 5, 3, 'Pickedup', 3, 4),
(16, 4, 1, 'Pickedup', 4, 9),
(17, 4, 3, 'Pickedup', 4, 12),
(18, 6, 2, 'Pickedup', 8, 10),
(19, 5, 3, 'Pickedup', 5, 11),
(20, 5, 2, 'Pickedup', 5, 18);

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `id` int(11) NOT NULL,
  `receiver` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `sender` varchar(20) DEFAULT NULL,
  `parcel_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`id`, `receiver`, `password`, `sender`, `parcel_ID`) VALUES
(1, 'jkl', 'lkj', 'pr', 5),
(2, 'bnm', 'mnb', 'pr', 6),
(3, 'chandan', 'pss', 'pr', 7),
(4, 'bnm', 'bnm', 'zxcv', 2),
(6, 'jkl', 'jkl', 'asdf', 12),
(7, 'jio', 'jio', 'asdf', 13),
(8, 'jio', 'jio', 'asdf', 14),
(9, 'jio', 'jio', 'asdf', 15),
(10, 'jio', 'jio', 'asdf', 16),
(11, 'hh', 'hh', 'asdf', 17),
(12, 'jkl', 'jkl', 'zxcv', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vehicle_ID` (`vehicle_ID`),
  ADD KEY `vehicle_ID_2` (`vehicle_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`vehicle_ID`);

--
-- Indexes for table `parcel`
--
ALTER TABLE `parcel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcel_status`
--
ALTER TABLE `parcel_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `const1` (`parcel_ID`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `parcel`
--
ALTER TABLE `parcel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `parcel_status`
--
ALTER TABLE `parcel_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parcel_status`
--
ALTER TABLE `parcel_status`
  ADD CONSTRAINT `const1` FOREIGN KEY (`parcel_ID`) REFERENCES `parcel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
