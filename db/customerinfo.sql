-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2016 at 07:20 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `customerinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customerid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `sex` int(10) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `email` varchar(65) NOT NULL,
  `phone` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `codebanner` varchar(50) NOT NULL,
  `date` timestamp(6) NOT NULL,
  `buy` int(10) NOT NULL,
  `sale` int(10) NOT NULL,
  `rent` int(10) NOT NULL,
  `budget` float NOT NULL,
  `apartment` varchar(255) NOT NULL,
  `building` varchar(255) NOT NULL,
  `business` varchar(255) NOT NULL,
  `condo` varchar(255) NOT NULL,
  `factory` varchar(255) NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `land` varchar(255) NOT NULL,
  `houseflat` varchar(255) NOT NULL,
  `villa` varchar(255) NOT NULL,
  `officespace` varchar(255) NOT NULL,
  `warehouse` varchar(250) NOT NULL,
  `other` mediumtext NOT NULL,
  `location` varchar(250) NOT NULL,
  `additionalcomment` mediumtext NOT NULL,
  `purpose` mediumtext NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
