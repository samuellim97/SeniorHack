-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2018 at 04:35 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seniorhack`
--

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `requestID` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`requestID`),
  KEY `type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `serviceID` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(20) NOT NULL,
  `spID` int(11) DEFAULT NULL,
  PRIMARY KEY (`serviceID`),
  KEY `spID` (`spID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` varchar(2) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=152 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `fullname`, `contact`, `address`, `type`) VALUES
(125, '', '', '', 0, '', 'S'),
(126, 'jocelyn', '123456', 'jocelyn', 166226126, '', 'S'),
(127, 'jocelyn', '123456', 'jocelyn', 166226126, '', 'S'),
(128, 'jocelyn', '123456', 'jocelyn', 166226126, '', 'S'),
(129, 'jocelyn', '123456', 'jocelyn', 166226126, '', 'S'),
(130, 'jocelyn', '123456', 'jocelyn', 166226126, '', 'S'),
(131, 'jocelyn', '123456', 'jocelyn', 166226126, 'kl', 'S'),
(132, 'jocelyn', '123456', 'jocelyn', 166226126, 'kl', 'S'),
(133, 'jocelyn', '123456', 'jocelyn', 166226126, 'kl', 'S'),
(134, 'jocelyn', '123456', 'jocelyn', 166226126, 'kl', 'S'),
(135, 'jocelyn', '123456', 'jocelyn', 166226126, '123', 'S'),
(136, 'jocelyn', '123456', 'jocelyn', 166226126, 'kl', 'S'),
(137, 'jocelyn', '123456', 'jocelyn', 166226126, '1234', 'S'),
(138, 'jocelyn', '123456', 'jocelyn', 166226126, 'klllll', 'S'),
(139, 'jocelyn', '123456', 'jocelyn', 166226126, 'kl123', 'S'),
(140, 'jocelyn', '123456', 'jocelyn', 166226126, 'kl1233', 'S'),
(141, 'jocelyn', '123456', 'jocelyn', 166226126, '123123', 'S'),
(142, 'jocelyn', '123456', 'jocelyn', 166226126, 'kl123123123', 'S'),
(143, 'jocelyn', '123456', 'jocelyn', 166226126, 'johor', 'S'),
(144, 'jocelyn', '123456', 'jocelyn', 166226126, 'PJ', 'S'),
(145, 'Melissa', '123456', 'Melissa', 1234567890, 'Penang', 'S'),
(146, 'Vivien', 'vivien', 'vivien', 1234567890, '', 'SP'),
(147, 'Annie', '123456', 'annie', 123456789, '', 'SP'),
(148, 'Jean', 'jean1234', 'jean', 123456789, '', 'SP'),
(149, 'Jeann', 'jean12345', 'jean', 1234567890, '', 'SP'),
(150, 'quinzel', '123456', 'quinzel', 166226126, 'Penang', 'SP'),
(151, 'Anne', 'anne12345', 'anne', 1234567890, 'PJ', 'S');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`type`) REFERENCES `service` (`serviceID`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`spID`) REFERENCES `user` (`userID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
