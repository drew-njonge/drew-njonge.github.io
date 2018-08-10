-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2017 at 02:32 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `comment`) VALUES
(10, 'Andrew Njonge', 'drew@gmail.com', ''),
(11, 'Jerry Ross', 'jr@gmail.com', ''),
(12, 'Jerry Ross', 'jr@gmail.com', ''),
(13, 'Jerry Ross', 'jr@gmail.com', ''),
(14, 'Jerry Ross', 'jr@gmail.com', ''),
(15, 'Jerry Ross', 'jr@gmail.com', ''),
(16, 'Vivian Mulwa', 'vivy@gmail.com', ''),
(17, 'Vivian Mulwa', 'vivy@gmail.com', ''),
(18, 'Vivian Mulwa', 'vivy@gmail.com', ''),
(19, 'Vivian Mulwa', 'vivy@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `bed`
--

CREATE TABLE IF NOT EXISTS `bed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `furniture` varchar(10) NOT NULL,
  `amount` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `bed`
--

INSERT INTO `bed` (`id`, `name`, `furniture`, `amount`) VALUES
(13, 'Vivian Mulwa', '', 32500),
(14, 'Vivian Mulwa', '', 25000),
(15, 'Vivian Mulwa', '', 40000),
(16, 'Vivian Mulwa', '', 40000),
(17, 'Vivian Mulwa', '', 40000),
(18, 'Andrew Njonge', '', 0),
(19, 'Andrew Njonge', '', 0),
(20, 'Andrew Njonge', '', 0),
(21, 'Angela Samba', '', 0),
(22, 'Angela Samba', '', 0),
(23, 'Andrew Njonge', '', 0),
(24, 'Angela Samba', '', 0),
(25, 'Andrew Njonge', '', 0),
(26, 'Andrew Njonge', '', 0),
(27, 'Andrew Njonge', '', 0),
(28, 'Andrew Njonge', '', 0),
(29, 'Angela Samba', '', 0),
(30, 'Angela Samba', '', 0),
(31, 'Andrew Njonge', '', 0),
(32, 'Angela Samba', '', 0),
(33, 'Angela Samba', '', 0),
(34, 'Angela Samba', '', 0),
(35, 'Angela Samba', '', 0),
(36, 'Andrew Njonge', '', 0),
(37, 'Andrew Njonge', '', 0),
(38, 'Andrew Njonge', '', 0),
(39, 'Andrew Njonge', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `coffee`
--

CREATE TABLE IF NOT EXISTS `coffee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `amount` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `coffee`
--

INSERT INTO `coffee` (`id`, `name`, `contact`, `amount`) VALUES
(1, 'Andrew Njonge', 0, 20000),
(2, '0723654789', 0, 20000),
(3, '0723654789', 0, 20000),
(4, '0723654789', 0, 20000),
(5, '0723654789', 0, 20000),
(6, '0723654789', 0, 20000),
(7, 'Andrew Njonge', 0, 20000),
(8, 'Andrew Njonge', 0, 20000),
(9, 'Andrew Njonge', 0, 20000),
(10, 'Andrew Njonge', 0, 20000),
(11, 'Andrew Njonge', 0, 20000),
(12, 'Andrew Njonge', 0, 20000),
(13, 'Andrew Njonge', 0, 20000),
(14, 'Andrew Njonge', 0, 20000),
(15, 'Andrew Njonge', 0, 20000),
(16, '0723654789', 0, 20000),
(17, 'Andrew Njonge', 0, 20000),
(18, 'Andrew Njonge', 0, 22000),
(19, 'Vivian Mulwa', 0, 20000),
(20, 'Christine Ray', 0, 110000),
(21, 'Christine Ray', 0, 110000),
(22, 'Christine Ray', 0, 110000),
(23, 'Christine Ray', 0, 110000),
(24, 'Christine Ray', 0, 110000),
(25, 'Vivian Mulwa', 0, 180000),
(26, 'Vivian Mulwa', 0, 240000),
(27, 'Angela Samba', 0, 0),
(28, 'Andrew Njonge', 0, 0),
(29, 'Andrew Njonge', 0, 0),
(30, 'Andrew Njonge', 0, 0),
(31, 'Angela Samba', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `contact`) VALUES
(18, 'Angela Samba', 'asamp@gmail.com', 723689547),
(19, 'Angela Samba', 'asamp@gmail.com', 723689547),
(20, 'Angela Samba', 'asamp@gmail.com', 723689547),
(21, 'Angela Samba', 'asamp@gmail.com', 723689547),
(22, 'Angela Samba', 'asamp@gmail.com', 723689547);

-- --------------------------------------------------------

--
-- Table structure for table `dining`
--

CREATE TABLE IF NOT EXISTS `dining` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `amount` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `dining`
--

INSERT INTO `dining` (`id`, `name`, `amount`) VALUES
(1, 'Andrew Njonge', 19000),
(2, 'Angela Samba', 26000),
(3, 'Andrew Njonge', 0),
(4, 'Angela Samba', 0),
(5, 'Angela Samba', 0),
(6, 'Angela Samba', 0),
(7, 'Angela Samba', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `image`, `price`) VALUES
(3, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed1', 40000),
(4, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed2', 25000),
(5, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed3', 35500),
(6, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed4', 24000),
(7, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed5', 50000),
(8, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed6', 70000),
(9, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed7', 45000),
(10, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed8', 55000),
(11, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed9', 80000),
(12, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed10', 135000),
(13, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed11', 95000),
(14, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed12', 20000),
(15, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed13', 18000),
(16, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed14', 15000),
(17, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed15', 22000),
(18, 'Metal Bed', 'http://127.0.0.1/furniture/assets/images/bed16', 17000),
(19, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed2', 25000),
(20, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed3', 35500),
(21, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed4', 24000),
(22, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed5', 50000),
(23, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed6', 70000),
(24, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed7', 45000),
(25, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed8', 55000),
(26, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed9', 80000),
(27, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed10', 135000),
(28, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed11', 95000),
(29, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed12', 20000),
(30, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed13', 18000),
(31, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed14', 15000),
(32, 'Wooden Bed', 'http://127.0.0.1/furniture/assets/images/bed15', 22000),
(33, 'Metal Bed', 'http://127.0.0.1/furniture/assets/images/bed16', 17000);

-- --------------------------------------------------------

--
-- Table structure for table `sofa`
--

CREATE TABLE IF NOT EXISTS `sofa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `price` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tvstand`
--

CREATE TABLE IF NOT EXISTS `tvstand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `contact` int(10) NOT NULL,
  `price` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tvstand`
--

INSERT INTO `tvstand` (`id`, `name`, `contact`, `price`) VALUES
(1, 'Angela Samba', 0, 50000),
(2, 'Vivian Mulwa', 0, 50000),
(3, 'Andrew Njonge', 0, 0),
(4, 'Angela Samba', 0, 0),
(5, 'Angela Samba', 0, 0),
(6, 'Angela Samba', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
