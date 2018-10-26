-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2018 at 05:35 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seniorhack`
--

-- --------------------------------------------------------

--
-- Table structure for table `servicerequest`
--

CREATE TABLE `servicerequest` (
  `requestID` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `notes` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `serviceCode` char(2) NOT NULL,
  `sID` varchar(20) NOT NULL,
  `spID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`requestID`, `date`, `time`, `notes`, `status`, `serviceCode`, `sID`, `spID`) VALUES
(100001, '2018-10-01', '12:30:00', 'Please be on time yeah', 'pending', 'CL', 'danieltan1', ''),
(100002, '2018-10-03', '13:40:00', 'please don\'t be late', 'pending', 'DR', 'danieltan1', ''),
(100003, '2018-10-05', '19:00:00', 'meet me at the main entrance', 'pending', 'DR', 'kimberlyong22', ''),
(100004, '2018-10-09', '14:00:00', 'meet me at entrance C', 'pending', 'DR', 'mindylim555', ''),
(100005, '2018-10-09', '12:30:00', 'meet me at the main entrance', 'cancelled', 'CO', 'kimberlyong22', 'rebeccasen9'),
(100006, '2018-10-10', '14:00:00', 'I am a vegetarian', 'cancelled', 'MP', 'adammm122', 'julianng100'),
(100007, '2018-10-12', '17:30:00', 'meet me at the main entrance', 'accepted', 'DR', 'kimberlyong22', 'nadia1219'),
(100008, '2018-10-13', '12:00:00', 'I am a vegetarian', 'accepted', 'MP', 'mindylim555', 'julianng100'),
(100009, '2018-10-09', '12:30:00', 'meet me at the main entrance', 'completed', 'CO', 'kimberlyong22', 'rebeccasen9'),
(100010, '2018-10-10', '09:00:00', 'I am allergic to nuts', 'pending', 'MP', 'danieltan1', 'nadia1219'),
(100011, '2018-10-09', '12:30:00', 'meet me at the main entrance', 'pending', 'CO', 'kimberlyong22', 'rebeccasen9'),
(100012, '2018-10-10', '19:00:00', 'I am a vegetarian', 'cancelled', 'MP', 'mindylim555', 'julianng100'),
(100013, '2018-10-09', '20:30:00', 'meet me at the main entrance', 'completed', 'CO', 'kimberlyong22', 'nadia1219'),
(100014, '2018-10-10', '15:00:00', 'Meet me at Block A pick up area', 'completed', 'CO', 'adammm122', 'julianng100');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD PRIMARY KEY (`requestID`),
  ADD UNIQUE KEY `requestID` (`requestID`),
  ADD KEY `serviceCode` (`serviceCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `servicerequest`
--
ALTER TABLE `servicerequest`
  MODIFY `requestID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100015;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD CONSTRAINT `servicerequest_ibfk_1` FOREIGN KEY (`serviceCode`) REFERENCES `servicetype` (`serviceCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
