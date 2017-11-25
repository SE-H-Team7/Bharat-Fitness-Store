-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2017 at 12:36 PM
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
-- Table structure for table `equipments_size`
--

CREATE TABLE IF NOT EXISTS `equipments_size` (
  `eqid` varchar(6) NOT NULL,
  `length` int(11) NOT NULL,
  `breadth` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  PRIMARY KEY (`eqid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments_size`
--

INSERT INTO `equipments_size` (`eqid`, `length`, `breadth`, `height`) VALUES
('1', 84, 31, 63),
('10', 55, 25, 15),
('11', 64, 28, 5),
('12', 65, 30, 5),
('13', 65, 28, 7),
('14', 62, 47, 47),
('15', 59, 43, 47),
('16', 70, 47, 55),
('17', 5, 3, 2),
('18', 7, 4, 2),
('19', 8, 2, 2),
('2', 85, 30, 63),
('20', 8, 3, 3),
('21', 9, 4, 3),
('22', 8, 5, 3),
('23', 5, 3, 2),
('24', 5, 4, 2),
('25', 10, 6, 4),
('26', 57, 54, 74),
('27', 56, 54, 74),
('28', 58, 54, 75),
('29', 10, 24, 15),
('3', 80, 33, 63),
('30', 11, 24, 16),
('31', 10, 28, 15),
('32', 83, 34, 56),
('33', 88, 36, 56),
('34', 10, 5, 4),
('35', 12, 5, 4),
('36', 11, 6, 5),
('37', 25, 25, 25),
('38', 29, 29, 29),
('39', 20, 20, 20),
('4', 84, 31, 63),
('40', 4, 6, 1),
('41', 6, 6, 1),
('42', 4, 8, 2),
('43', 39, 2, 1),
('44', 31, 2, 1),
('5', 35, 21, 51),
('6', 40, 25, 60),
('7', 36, 22, 65),
('8', 54, 24, 14),
('9', 55, 24, 14);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `equipments_size`
--
ALTER TABLE `equipments_size`
  ADD CONSTRAINT `equipments_size_ibfk_1` FOREIGN KEY (`eqid`) REFERENCES `equipments` (`eqid`);
