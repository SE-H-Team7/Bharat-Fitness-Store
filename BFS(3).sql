-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2017 at 12:35 PM
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
-- Table structure for table `equipments_categories`
--

DROP TABLE IF EXISTS `equipments_categories`;
CREATE TABLE IF NOT EXISTS `equipments_categories` (
  `eqcatid` varchar(6) NOT NULL,
  `eqcategory` varchar(40) NOT NULL,
  PRIMARY KEY (`eqcatid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments_categories`
--

INSERT INTO `equipments_categories` (`eqcatid`, `eqcategory`) VALUES
('1', 'Cardio'),
('2', 'Biceps'),
('3', 'Chest'),
('4', 'Leg'),
('5', 'General');
