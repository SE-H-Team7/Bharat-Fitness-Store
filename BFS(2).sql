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
-- Table structure for table `equipments_brands`
--

DROP TABLE IF EXISTS `equipments_brands`;
CREATE TABLE IF NOT EXISTS `equipments_brands` (
  `eqbrandid` varchar(6) NOT NULL,
  `eqbrandname` varchar(30) NOT NULL,
  PRIMARY KEY (`eqbrandid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments_brands`
--

INSERT INTO `equipments_brands` (`eqbrandid`, `eqbrandname`) VALUES
('1', 'Kamachi'),
('10', 'Soozier'),
('11', 'Hercules'),
('12', 'Lifeline'),
('13', 'Powermaxx'),
('14', 'Body maxx'),
('15', 'Leeway'),
('16', 'Protoner'),
('17', 'Body maxx'),
('18', 'CAP'),
('19', 'TTC'),
('2', 'Kobo'),
('20', 'Aurion'),
('21', 'Beacon'),
('22', 'Physique'),
('23', 'Cockatoo'),
('24', 'Kobo'),
('25', 'Lifeline'),
('26', 'Cockatoo'),
('27', 'Kamachi'),
('28', 'Lifeline'),
('29', 'Dolphy'),
('3', 'Propel'),
('30', 'Iris'),
('31', 'Protoner'),
('32', 'Jerai'),
('33', 'Palak'),
('34', 'Dreams detak'),
('35', 'Fitsy'),
('36', 'Vencho Perfect'),
('37', 'Cockatoo'),
('38', 'Fitkit'),
('39', 'HSR'),
('4', 'Reebok'),
('40', 'Spinway'),
('41', 'Technix'),
('42', 'Vellora'),
('43', 'Reebok'),
('44', 'Spinway'),
('5', 'Kamachi'),
('6', 'Kobo'),
('7', 'Leeway'),
('8', 'Kamachi'),
('9', 'Marcy');
