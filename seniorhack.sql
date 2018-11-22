-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 09:36 AM
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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `mobileNo` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `fullName`, `mobileNo`, `address`, `type`) VALUES
('barry1', '12345678', 'Barry Haney', '0193654398', '32, Jalan BU 7/8, Bandar Utama', 'S'),
('christianlee', '12345678', 'Christian Lee Hsien Loong', '0169983074', '14, 2/3 Jalan Tiga Itik', 'S'),
('hangtuah1', '12345678', 'Hang Tuah', '0146075112', '178, Taman Karak, Jalan 3/3', 'SP'),
('madeline1', '12345678', 'madeline chong', '0127392323', '102, Jalan hang jebat', 'S'),
('nadia1219', '12345678', 'Nadia ', '0142642957', '4A-3, Jalan USJ 9/2, Subang', 'SP'),
('rebeccasen9', '12345678', 'Rebecca Sen', '0185727773', '3-5B, Block D, Riana Green Condominium', 'SP'),
('seniorTesting1', '12345678', 'seniorTesting 1 full name', '0147483647', '20, Jalan bu 9/4', 'S'),
('spTesting1', '12345678', 'spTesting1 full name', '0128328311', '27, jalan bu 8/1', 'SP'),
('walter1', '12345678', 'Walter White', '0197654321', '88, Jalan 8, Taman Lapan', 'SP');

-- --------------------------------------------------------

--
-- Table structure for table `providerinfo`
--

CREATE TABLE `providerinfo` (
  `username` varchar(20) NOT NULL,
  `serviceCode` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rating` int(10) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `spID` varchar(20) NOT NULL,
  `sID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewID`, `date`, `rating`, `comments`, `spID`, `sID`) VALUES
(100000, '2018-10-31 16:18:35', 4, 'I think Mr Walter is a very good man, he is very patient with me', 'walter1', 'christianlee'),
(100001, '2018-11-03 16:18:43', 5, 'He drives really safe', 'walter1', 'madeline1'),
(100002, '2018-11-05 16:24:22', 4, 'he is not very friendly', 'hangtuah1', 'madeline1'),
(100003, '2018-11-10 07:34:35', 2, 'he didnt offer to help me carry my groceries', 'hangtuah1', 'christianlee'),
(100004, '2018-11-14 02:34:10', 2, 'Mr Adam wasn\'t very friendly, he was on the phone all the time ', 'spTesting1', 'madeline1'),
(100005, '2018-11-19 11:12:57', 5, 'Mr Adam did a great job, he was very kind to me and my husband, he was very helpful', 'spTesting1', 'seniorTesting1'),
(100006, '2018-11-20 05:33:01', 5, 'Such a great person, i would give 10 stars if i could', 'spTesting1', 'seniorTesting1'),
(100010, '2018-11-20 07:15:28', 5, 'Mr Walter was very helpful today, he helped me and my husband carried all our stuffs', 'walter1', 'madeline1');

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
  `spID` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicerequest`
--

INSERT INTO `servicerequest` (`requestID`, `date`, `time`, `notes`, `status`, `serviceCode`, `sID`, `spID`) VALUES
(100001, '2018-10-01', '12:30:00', 'Please be on time yeah', 'completed', 'CL', 'christianlee', 'rebeccasen9'),
(100002, '2018-10-03', '13:40:00', 'please don\'t be late', 'pending', 'DR', 'madeline1', NULL),
(100003, '2018-10-05', '19:00:00', 'meet me at the main entrance', 'pending', 'DR', 'madeline1', NULL),
(100004, '2018-10-09', '14:00:00', 'meet me at entrance C', 'pending', 'DR', 'christianlee', NULL),
(100005, '2018-10-15', '12:30:00', 'meet me at the main entrance', 'cancelled', 'CO', 'madeline1', 'walter1'),
(100006, '2018-10-18', '14:00:00', 'I am a vegetarian', 'accepted', 'MP', 'christianlee', 'hangtuah1'),
(100007, '2018-10-19', '17:30:00', 'meet me at the main entrance', 'accepted', 'DR', 'barry1', 'nadia1219'),
(100008, '2018-10-19', '12:00:00', 'I am a vegetarian, please take note', 'completed', 'MP', 'barry1', 'nadia1219'),
(100009, '2018-10-20', '12:30:00', 'meet me at the main entrance', 'accepted', 'CO', 'christianlee', 'rebeccasen9'),
(100010, '2018-10-22', '09:00:00', 'I am allergic to nuts', 'pending', 'MP', 'madeline1', NULL),
(100011, '2018-10-25', '12:30:00', 'meet me at the main entrance', 'completed', 'CO', 'madeline1', 'rebeccasen9'),
(100012, '2018-11-01', '19:00:00', 'I am a vegetarian', 'cancelled', 'MP', 'barry1', 'walter1'),
(100013, '2018-11-06', '20:30:00', 'meet me at the main entrance', 'accepted', 'CO', 'barry1', 'hangtuah1'),
(100014, '2018-11-12', '15:00:00', 'Meet me at Block A pick up area', 'pending', 'CO', 'madeline1', NULL),
(100015, '2018-11-22', '14:00:00', 'Thank you', 'pending', 'CL', 'seniorTesting1', NULL),
(100016, '2018-11-22', '15:00:00', 'need to get groceries from the store nearby', 'accepted', 'DR', 'madeline1', 'seniorTesting1');

-- --------------------------------------------------------

--
-- Table structure for table `servicetype`
--

CREATE TABLE `servicetype` (
  `serviceCode` char(2) NOT NULL,
  `serviceDescription` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicetype`
--

INSERT INTO `servicetype` (`serviceCode`, `serviceDescription`) VALUES
('CL', 'Cleaning'),
('CO', 'Companion'),
('DR', 'Driver'),
('MP', 'Meal Preparation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `providerinfo`
--
ALTER TABLE `providerinfo`
  ADD KEY `serviceCode` (`serviceCode`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewID`),
  ADD UNIQUE KEY `reviewID` (`reviewID`),
  ADD KEY `spID` (`spID`),
  ADD KEY `sID` (`sID`);

--
-- Indexes for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD PRIMARY KEY (`requestID`),
  ADD UNIQUE KEY `requestID` (`requestID`),
  ADD KEY `serviceCode` (`serviceCode`),
  ADD KEY `sID` (`sID`),
  ADD KEY `spID` (`spID`);

--
-- Indexes for table `servicetype`
--
ALTER TABLE `servicetype`
  ADD PRIMARY KEY (`serviceCode`),
  ADD UNIQUE KEY `serviceCode` (`serviceCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100011;

--
-- AUTO_INCREMENT for table `servicerequest`
--
ALTER TABLE `servicerequest`
  MODIFY `requestID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100017;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `providerinfo`
--
ALTER TABLE `providerinfo`
  ADD CONSTRAINT `providerinfo_ibfk_1` FOREIGN KEY (`username`) REFERENCES `account` (`username`),
  ADD CONSTRAINT `providerinfo_ibfk_2` FOREIGN KEY (`serviceCode`) REFERENCES `servicetype` (`serviceCode`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`sID`) REFERENCES `account` (`username`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`spID`) REFERENCES `account` (`username`);

--
-- Constraints for table `servicerequest`
--
ALTER TABLE `servicerequest`
  ADD CONSTRAINT `servicerequest_ibfk_1` FOREIGN KEY (`sID`) REFERENCES `account` (`username`),
  ADD CONSTRAINT `servicerequest_ibfk_2` FOREIGN KEY (`spID`) REFERENCES `account` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
