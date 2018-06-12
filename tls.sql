-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 09, 2018 at 01:46 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tls`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `empty`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `empty` ()  NO SQL
TRUNCATE orders$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `engineoil`
--

DROP TABLE IF EXISTS `engineoil`;
CREATE TABLE IF NOT EXISTS `engineoil` (
  `pid` int(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engineoil`
--

INSERT INTO `engineoil` (`pid`, `pname`, `quantity`, `price`) VALUES
(101, 'mobil 1 15w-50', '1L', 500),
(102, 'mobil 1 ep 5w20', '1L', 570),
(103, 'mobil super 10w-30', '1L', 396),
(104, 'mobil super 5w30', '1L', 396),
(105, 'mobil 1 esr x1 0w30', '1L', 700);

-- --------------------------------------------------------

--
-- Table structure for table `grease`
--

DROP TABLE IF EXISTS `grease`;
CREATE TABLE IF NOT EXISTS `grease` (
  `pid` int(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grease`
--

INSERT INTO `grease` (`pid`, `pname`, `quantity`, `price`) VALUES
(201, 'mobil shc 1500', '20L', 20000),
(202, 'mobilgrease xhp 005', '20L', 10150),
(203, 'mobilgrease cm-s', '20L', 9100),
(204, 'mobil beacon 325', '20L', 18900),
(205, 'mobil ronex mp', '20L', 9450);

-- --------------------------------------------------------

--
-- Table structure for table `hydraulicoil`
--

DROP TABLE IF EXISTS `hydraulicoil`;
CREATE TABLE IF NOT EXISTS `hydraulicoil` (
  `pid` int(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hydraulicoil`
--

INSERT INTO `hydraulicoil` (`pid`, `pname`, `quantity`, `price`) VALUES
(301, 'mobil shc 526', '20L', 15260),
(302, 'teresstic 100', '20L', 6930),
(303, 'teresstic 220', '20L', 9800),
(304, 'mobil nuto h 100', '20L', 6160),
(305, 'mobil dte 24', '200L', 54670);

-- --------------------------------------------------------

--
-- Table structure for table `losi`
--

DROP TABLE IF EXISTS `losi`;
CREATE TABLE IF NOT EXISTS `losi` (
  `username` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `losi`
--

INSERT INTO `losi` (`username`, `fname`, `lname`, `pass`, `address`) VALUES
('yash', 'yash', 'gupta', 'qwerty', 'hello'),
('yash1', 'yash', 'g', 'qwerty', 'sa');

--
-- Triggers `losi`
--
DROP TRIGGER IF EXISTS `registerlogs`;
DELIMITER $$
CREATE TRIGGER `registerlogs` BEFORE INSERT ON `losi` FOR EACH ROW INSERT INTO reglogs values(NEW.username,now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `marineoil`
--

DROP TABLE IF EXISTS `marineoil`;
CREATE TABLE IF NOT EXISTS `marineoil` (
  `pid` int(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marineoil`
--

INSERT INTO `marineoil` (`pid`, `pname`, `quantity`, `price`) VALUES
(401, 'atlanta  marine d305', '200L', 160650),
(402, 'hymarol', '200L', 130980),
(403, 'talusia hr 70', '200L', 111856),
(404, 'talusia universal', '200L', 140520),
(405, 'disola  m 3015', '200L', 145987);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `pid` int(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `unit` int(20) NOT NULL,
  `amt` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qwerty`
--

DROP TABLE IF EXISTS `qwerty`;
CREATE TABLE IF NOT EXISTS `qwerty` (
  `pid` int(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qwerty`
--

INSERT INTO `qwerty` (`pid`, `pname`, `quantity`, `price`) VALUES
(1, 'lol', '2l', 100),
(2, 'pol', '3l', 200),
(3, 'dol', '4l', 300);

-- --------------------------------------------------------

--
-- Table structure for table `reglogs`
--

DROP TABLE IF EXISTS `reglogs`;
CREATE TABLE IF NOT EXISTS `reglogs` (
  `username` varchar(20) NOT NULL,
  `regtime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reglogs`
--

INSERT INTO `reglogs` (`username`, `regtime`) VALUES
('pk', '2017-11-24 15:40:10'),
('yash', '2017-11-24 22:37:37'),
('yash', '2017-11-29 18:39:41'),
('yash1', '2017-12-03 15:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `transmissionoil`
--

DROP TABLE IF EXISTS `transmissionoil`;
CREATE TABLE IF NOT EXISTS `transmissionoil` (
  `pid` int(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transmissionoil`
--

INSERT INTO `transmissionoil` (`pid`, `pname`, `quantity`, `price`) VALUES
(501, 'mobil atf dexron vi', '1L', 323),
(502, 'mobil 1 synthetic lv', '1L', 746),
(503, 'mobil atf type f', '1L', 320),
(504, 'mobil 1 syn atf', '1L', 583),
(505, 'mobil delvac 1', '20L', 12040);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
