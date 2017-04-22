-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2017 at 05:45 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `10mks`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE IF NOT EXISTS `form1` (
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `moname` varchar(20) NOT NULL,
  `divb` varchar(10) NOT NULL,
  `seatno` varchar(7) NOT NULL,
  `centerno` int(4) NOT NULL,
  `dnsno` varchar(10) NOT NULL,
  `emonth` text NOT NULL,
  `srno` int(6) NOT NULL,
  PRIMARY KEY (`seatno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`fname`, `mname`, `lname`, `moname`, `divb`, `seatno`, `centerno`, `dnsno`, `emonth`, `srno`) VALUES
('Barry', 'Henry', 'Allen', '', 'mumbai', 'J035162', 1120, '05.01.065', '2017-01', 27866),
('Wally', 'Joe', 'West', '', 'kolhapur', 'J035161', 1120, '05.01.065', '2013-03', 27865),
('Cisco', 'Escobar', 'Ramon', '', 'latur', 'J035160', 1120, '05.01.065', '2010-05', 27864),
('Harrison ', 'A', 'Wells', '', 'mumbai', 'J035159', 1120, '05.01.065', '2013-03', 27863),
('Barry', 'Henry', 'Allen', 'Nora', 'mumbai', 'J035164', 1120, '05.01.065', '2024-01', 27867),
('Eoaboard', 'A', 'Thawne', 'Laura', 'pune', 'J035163', 1120, '05.01.065', '2015-12', 27868),
('Eoaboard', 'A', 'Thawne', 'Laura', 'pune', 'J035165', 1120, '05.01.065', '2015-12', 27868),
('Iris', 'Joe', 'West', 'Miley', 'mumbai', 'J035166', 1120, '05.01.065', '2013-03', 27869);

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

CREATE TABLE IF NOT EXISTS `form2` (
  `seatno` varchar(7) NOT NULL,
  `mar` int(25) NOT NULL,
  `hindi` int(25) NOT NULL,
  `eng` int(25) NOT NULL,
  `maths` int(25) NOT NULL,
  `sci` int(25) NOT NULL,
  `ss` int(25) NOT NULL,
  `m2` text NOT NULL,
  `p1` text NOT NULL,
  `p6` text NOT NULL,
  `p7` text NOT NULL,
  `p8` text NOT NULL,
  `p38` text NOT NULL,
  `totalm` text NOT NULL,
  `perct` text NOT NULL,
  `result` text NOT NULL,
  PRIMARY KEY (`seatno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form2`
--

INSERT INTO `form2` (`seatno`, `mar`, `hindi`, `eng`, `maths`, `sci`, `ss`, `m2`, `p1`, `p6`, `p7`, `p8`, `p38`, `totalm`, `perct`, `result`) VALUES
('J035166', 77, 85, 80, 140, 89, 90, 'A', 'A', 'A', 'A', 'A', 'A', '561', '86.3076923076923', 'PASS'),
('J035165', 65, 83, 65, 115, 81, 78, 'A', 'A', 'A', 'A', 'A', 'A', '487', '74.92307692307692', 'PASS'),
('J035167', 85, 80, 80, 148, 97, 98, 'A', 'A', 'A', 'A', 'A', 'A', '588', '90.46153846153845', 'PASS');
