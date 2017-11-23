-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2017 at 07:10 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bfs`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `eqid` varchar(6) NOT NULL,
  `eqname` varchar(30) NOT NULL,
  `eqcost` int(11) NOT NULL,
  `eqcatid` varchar(6) NOT NULL,
  `eqbrandid` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`eqid`, `eqname`, `eqcost`, `eqcatid`, `eqbrandid`) VALUES
('1', 'Dumbells', 1500, '2', '1'),
('2', 'Dumbells', 1450, '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `equipments_brands`
--

CREATE TABLE `equipments_brands` (
  `eqbrandid` varchar(6) NOT NULL,
  `eqbrandname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments_brands`
--

INSERT INTO `equipments_brands` (`eqbrandid`, `eqbrandname`) VALUES
('1', 'Puma'),
('2', 'Nike');

-- --------------------------------------------------------

--
-- Table structure for table `equipments_categories`
--

CREATE TABLE `equipments_categories` (
  `eqcatid` varchar(6) NOT NULL,
  `eqcategory` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments_categories`
--

INSERT INTO `equipments_categories` (`eqcatid`, `eqcategory`) VALUES
('1', 'Cardio'),
('2', 'Biceps');

-- --------------------------------------------------------

--
-- Table structure for table `equipments_order`
--

CREATE TABLE `equipments_order` (
  `orderid` varchar(6) NOT NULL,
  `userid` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipments_order_details`
--

CREATE TABLE `equipments_order_details` (
  `orderid` varchar(6) NOT NULL,
  `prodid` varchar(6) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totcost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipments_size`
--

CREATE TABLE `equipments_size` (
  `eqid` varchar(6) NOT NULL,
  `length` int(11) NOT NULL,
  `breadth` int(11) NOT NULL,
  `height` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nutrition_supplements`
--

CREATE TABLE `nutrition_supplements` (
  `supid` varchar(6) NOT NULL,
  `supcatid` varchar(6) NOT NULL,
  `supname` varchar(40) NOT NULL,
  `supbrand` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nutrition_supplements_categories`
--

CREATE TABLE `nutrition_supplements_categories` (
  `supcatid` varchar(6) NOT NULL,
  `supcategory` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nutrition_supplements_order`
--

CREATE TABLE `nutrition_supplements_order` (
  `orderid` varchar(6) NOT NULL,
  `userid` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nutrition_supplements_order details`
--

CREATE TABLE `nutrition_supplements_order details` (
  `orderid` varchar(6) NOT NULL,
  `prodid` varchar(6) NOT NULL,
  `quantity` int(11) NOT NULL,
  `totcost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `userid` varchar(6) NOT NULL,
  `serviceid` varchar(6) NOT NULL,
  `length` int(11) NOT NULL,
  `breadth` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `budget` int(11) NOT NULL,
  `servtype` varchar(6) NOT NULL,
  `locality` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services_types`
--

CREATE TABLE `services_types` (
  `servid` varchar(6) NOT NULL,
  `servtypr` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` varchar(4) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `uphoneno` varchar(10) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `uaddress` varchar(100) NOT NULL,
  `upwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `uphoneno`, `uemail`, `uaddress`, `upwd`) VALUES
('1', 'alan', '9090909090', 'alan@gmail.com', 'Bangalore', 'alan'),
('2', 'barbie', '1234567890', 'barbie@gmail.com', 'Bangalore', 'barbie'),
('3', 'Dan', '7865127643', 'dan@gmail.com', 'Bangalore', 'dan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`eqid`),
  ADD UNIQUE KEY `eqname` (`eqname`,`eqbrandid`),
  ADD KEY `eqcatid` (`eqcatid`),
  ADD KEY `eqbrandid` (`eqbrandid`);

--
-- Indexes for table `equipments_brands`
--
ALTER TABLE `equipments_brands`
  ADD PRIMARY KEY (`eqbrandid`);

--
-- Indexes for table `equipments_categories`
--
ALTER TABLE `equipments_categories`
  ADD PRIMARY KEY (`eqcatid`);

--
-- Indexes for table `equipments_order`
--
ALTER TABLE `equipments_order`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `equipments_order_details`
--
ALTER TABLE `equipments_order_details`
  ADD PRIMARY KEY (`orderid`,`prodid`),
  ADD UNIQUE KEY `pri` (`orderid`,`prodid`),
  ADD KEY `orderid` (`orderid`),
  ADD KEY `prodid` (`prodid`),
  ADD KEY `orderid_2` (`orderid`,`prodid`);

--
-- Indexes for table `equipments_size`
--
ALTER TABLE `equipments_size`
  ADD PRIMARY KEY (`eqid`);

--
-- Indexes for table `nutrition_supplements`
--
ALTER TABLE `nutrition_supplements`
  ADD PRIMARY KEY (`supid`),
  ADD KEY `supcatid` (`supcatid`);

--
-- Indexes for table `nutrition_supplements_categories`
--
ALTER TABLE `nutrition_supplements_categories`
  ADD PRIMARY KEY (`supcatid`);

--
-- Indexes for table `nutrition_supplements_order`
--
ALTER TABLE `nutrition_supplements_order`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `nutrition_supplements_order details`
--
ALTER TABLE `nutrition_supplements_order details`
  ADD PRIMARY KEY (`orderid`,`prodid`),
  ADD KEY `prodid` (`prodid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceid`),
  ADD KEY `servtype` (`servtype`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `services_types`
--
ALTER TABLE `services_types`
  ADD PRIMARY KEY (`servid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uemail` (`uemail`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `equipments`
--
ALTER TABLE `equipments`
  ADD CONSTRAINT `equipments_ibfk_1` FOREIGN KEY (`eqcatid`) REFERENCES `equipments_categories` (`eqcatid`),
  ADD CONSTRAINT `equipments_ibfk_2` FOREIGN KEY (`eqbrandid`) REFERENCES `equipments_brands` (`eqbrandid`);

--
-- Constraints for table `equipments_order`
--
ALTER TABLE `equipments_order`
  ADD CONSTRAINT `equipments_order_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `equipments_order_details`
--
ALTER TABLE `equipments_order_details`
  ADD CONSTRAINT `equipments_order_details_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `equipments_order` (`orderid`),
  ADD CONSTRAINT `equipments_order_details_ibfk_2` FOREIGN KEY (`prodid`) REFERENCES `equipments` (`eqid`);

--
-- Constraints for table `equipments_size`
--
ALTER TABLE `equipments_size`
  ADD CONSTRAINT `equipments_size_ibfk_1` FOREIGN KEY (`eqid`) REFERENCES `equipments` (`eqid`);

--
-- Constraints for table `nutrition_supplements`
--
ALTER TABLE `nutrition_supplements`
  ADD CONSTRAINT `nutrition_supplements_ibfk_1` FOREIGN KEY (`supcatid`) REFERENCES `nutrition_supplements_categories` (`supcatid`);

--
-- Constraints for table `nutrition_supplements_order`
--
ALTER TABLE `nutrition_supplements_order`
  ADD CONSTRAINT `nutrition_supplements_order_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `nutrition_supplements_order details`
--
ALTER TABLE `nutrition_supplements_order details`
  ADD CONSTRAINT `nutrition_supplements_order details_ibfk_1` FOREIGN KEY (`orderid`) REFERENCES `nutrition_supplements_order` (`orderid`),
  ADD CONSTRAINT `nutrition_supplements_order details_ibfk_2` FOREIGN KEY (`prodid`) REFERENCES `nutrition_supplements` (`supid`);

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`uid`),
  ADD CONSTRAINT `services_ibfk_2` FOREIGN KEY (`servtype`) REFERENCES `services_types` (`servid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
