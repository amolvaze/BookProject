-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2015 at 04:57 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `Id` int(25) NOT NULL AUTO_INCREMENT,
  `Title` varchar(25) NOT NULL,
  `Author` varchar(25) NOT NULL,
  `Shipping` varchar(25) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Id`, `Title`, `Author`, `Shipping`) VALUES
(1, 'The Flight', 'George', 'Not Free'),
(2, 'EI Pooch', 'Smith', 'Free'),
(3, 'Top 10 Australian Beaches', 'John Cole', 'Free'),
(4, 'Hary Potter', 'J. K Rolling', 'Free'),
(5, 'Mr', 'T', 'Free'),
(6, 'Mr1', 'T1', 'Free'),
(7, 'The Flight1', 'George1', 'Not Free'),
(8, 'Life After The Death', 'Mark', 'Free'),
(10, 'ABBC', 'Amol', 'Not Free');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
