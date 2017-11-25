-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2017 at 12:32 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bfs`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

DROP TABLE IF EXISTS `equipments`;
CREATE TABLE IF NOT EXISTS `equipments` (
  `eqid` varchar(6) NOT NULL,
  `eqname` varchar(30) NOT NULL,
  `eqcost` int(11) NOT NULL,
  `eqcatid` varchar(6) NOT NULL,
  `eqbrandid` varchar(6) NOT NULL,
  PRIMARY KEY (`eqid`),
  UNIQUE KEY `eqname` (`eqname`,`eqbrandid`),
  KEY `eqcatid` (`eqcatid`),
  KEY `eqbrandid` (`eqbrandid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`eqid`, `eqname`, `eqcost`, `eqcatid`, `eqbrandid`) VALUES
('1', 'Cross trainer', 20000, '1', '1'),
('10', 'Rowing machine', 55000, '1', '10'),
('11', 'Treadmill', 40000, '1', '11'),
('12', 'Treadmill', 50000, '1', '12'),
('13', 'Treadmill', 60000, '1', '13'),
('14', 'Bench', 5000, '2', '14'),
('15', 'Bench', 7000, '2', '15'),
('16', 'Bench', 9999, '2', '16'),
('17', 'E-Z bar', 3000, '2', '17'),
('18', 'E-Z bar', 3500, '2', '18'),
('19', 'E-Z bar', 3800, '2', '19'),
('2', 'Cross trainer', 50999, '1', '2'),
('20', 'Straight bar', 3080, '2', '20'),
('21', 'Straight bar', 5089, '2', '21'),
('22', 'Straight bar', 5180, '2', '22'),
('23', 'Barbell bench press', 1000, '3', '23'),
('24', 'Barbell bench press', 1500, '3', '24'),
('25', 'Barbell bench press', 2000, '3', '25'),
('26', 'Chest press ', 20000, '3', '26'),
('27', 'Chest press', 50000, '3', '27'),
('28', 'Chest press', 50080, '3', '28'),
('29', 'Dips bar', 10000, '3', '29'),
('3', 'Cross trainer', 80000, '1', '3'),
('30', 'Dips bar', 10656, '3', '30'),
('31', 'Dips bar', 10400, '3', '31'),
('32', 'Leg press', 38999, '4', '32'),
('33', 'Leg press', 68999, '4', '33'),
('34', 'Tummy trimmer', 2499, '4', '34'),
('35', 'Tummy trimmer', 2999, '4', '35'),
('36', 'Tummy trimmer', 2500, '4', '36'),
('37', 'Exercise ball', 1500, '5', '37'),
('38', 'Exercise ball', 2800, '5', '38'),
('39', 'Exercise ball', 1899, '5', '39'),
('4', 'Cross trainer', 70000, '1', '4'),
('40', 'Gym mat', 2500, '5', '40'),
('41', 'Gym mat', 2580, '5', '41'),
('42', 'Gym mat', 3500, '5', '42'),
('43', 'Skipping', 999, '5', '43'),
('44', 'Skipping', 899, '5', '44'),
('5', 'Exercise cycle', 20000, '1', '5'),
('6', 'Exercise cycle', 45000, '1', '6'),
('7', 'Exercise cycle', 50000, '1', '7'),
('8', 'Rowing machine', 40000, '1', '8'),
('9', 'Rowing machine', 50000, '1', '9');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `equipments`
--
ALTER TABLE `equipments`
  ADD CONSTRAINT `equipments_ibfk_1` FOREIGN KEY (`eqcatid`) REFERENCES `equipments_categories` (`eqcatid`),
  ADD CONSTRAINT `equipments_ibfk_2` FOREIGN KEY (`eqbrandid`) REFERENCES `equipments_brands` (`eqbrandid`);
