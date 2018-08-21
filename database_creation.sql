-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2018 at 05:32 AM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jazz_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `client_id` int(5) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` text NOT NULL,
  `street` text NOT NULL,
  `zip` int(5) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`client_id`, `fname`, `lname`, `email`, `street`, `zip`, `city`, `state`) VALUES
(16, 'John', 'Smith', 'testemail@gmail.com', '1600 Amphitheatre Parkway', 94043, 'Mountain View', 'CA'),
(15, 'John', 'Smith', 'testemail@gmail.com', '1600 Amphitheatre Parkway', 94043, 'Mountain View', 'CA'),
(14, 'John', 'Smith', 'testemail@gmail.com', '1600 Amphitheatre Parkway', 94043, 'Mountain View', 'CA'),
(13, 'John', 'Smith', 'testemail@gmail.com', '1600 Amphitheatre Parkway', 94043, 'Mountain View', 'CA'),
(12, 'John', 'Smith', 'testemail@gmail.com', '1600 Amphitheatre Parkway', 94043, 'Mountain View', 'CA'),
(11, 'John', 'Smith', 'testemail@gmail.com', '1600 Amphitheatre Parkway', 94043, 'Mountain View', 'CA'),
(10, 'John', 'Smith', 'testemail@gmail.com', '1600 Amphitheatre Parkway', 94043, 'Mountain View', 'CA'),
(9, 'John', 'Smith', 'testemail@gmail.com', '1600 Amphitheatre Parkway', 94043, 'Mountain View', 'CA'),
(17, 'John', 'Smith', 'testemail@gmail.com', '1600 Amphitheatre Parkway', 94043, 'Mountain View', 'CA'),
(18, 'John', 'Smith', 'testemail@gmail.com', '1600 Amphitheatre Parkway', 94043, 'Mountain View', 'CA'),
(19, 'John', 'Smith', 'testemail@gmail.com', '1600 Amphitheatre Parkway', 94043, 'Mountain View', 'CA'),
(20, 'John', 'Smith', 'testemail@gmail.com', '1600 Amphitheatre Parkway', 94043, 'Mountain View', 'CA');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(5) NOT NULL,
  `ClientID` int(5) NOT NULL,
  `RowA` int(2) NOT NULL DEFAULT '0',
  `RowB` int(2) NOT NULL DEFAULT '0',
  `RowC` int(2) NOT NULL DEFAULT '0',
  `RowD` int(2) NOT NULL DEFAULT '0',
  `RowE` int(2) NOT NULL DEFAULT '0',
  `RowF` int(2) NOT NULL DEFAULT '0',
  `RowG` int(2) NOT NULL DEFAULT '0',
  `RowH` int(2) NOT NULL DEFAULT '0',
  `RowI` int(2) NOT NULL DEFAULT '0',
  `Shipping` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `ClientID`, `RowA`, `RowB`, `RowC`, `RowD`, `RowE`, `RowF`, `RowG`, `RowH`, `RowI`, `Shipping`) VALUES
(14648, 15, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14647, 14, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(14646, 13, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14645, 12, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0),
(14644, 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14643, 10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14642, 9, 0, 1, 2, 4, 0, 0, 2, 0, 0, 0),
(14649, 16, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(14650, 17, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14651, 18, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(14652, 19, 0, 3, 0, 0, 0, 2, 0, 0, 1, 0),
(14653, 20, 0, 0, 0, 2, 0, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_row`
--

CREATE TABLE `ticket_row` (
  `row_id` char(1) NOT NULL,
  `row_price` int(2) NOT NULL,
  `row_cat` int(1) NOT NULL,
  `row_sold` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_row`
--

INSERT INTO `ticket_row` (`row_id`, `row_price`, `row_cat`, `row_sold`) VALUES
('a', 50, 1, 5),
('b', 50, 1, 4),
('c', 50, 1, 2),
('d', 40, 2, 16),
('e', 40, 2, 3),
('f', 40, 2, 2),
('g', 30, 3, 2),
('h', 30, 3, 1),
('i', 30, 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `ticket_row`
--
ALTER TABLE `ticket_row`
  ADD PRIMARY KEY (`row_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `client_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14654;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
