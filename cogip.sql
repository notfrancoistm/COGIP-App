-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: database:3306
-- Generation Time: Oct 31, 2019 at 09:33 AM
-- Server version: 10.4.2-MariaDB-1:10.4.2+maria~bionic
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cogip`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `ID` int(11) NOT NULL,
  `company_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VAT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `company_name`, `VAT`, `country`, `type`) VALUES
(1, 'dunder mifflin', 'us678765765', 'usa', 1),
(2, 'raviga', 'US456654342', 'usa', 1),
(3, 'jouet jean-michel', 'fr677544000', 'france', 1),
(4, 'bob vance refrig.', 'us456654687', 'usa', 1),
(5, 'belgalol', 'be0876654665', 'belgium', 2),
(6, 'pierre cailloux', 'fr678908654', 'france', 2),
(7, 'proximdr', 'be0876985665', 'belgique', 2),
(8, 'electric power', 'it256852542', 'italy', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` int(11) DEFAULT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`ID`, `first_name`, `last_name`, `mail`, `company`, `phone`) VALUES
(1, 'Dwight', 'Schrute', 'dwight.schrute@ddmfl.com', 1, 555511984),
(15, 'peter', 'gregory', 'peter.gregory@raviga.com', 2, 5554567),
(16, 'cameron', 'howe', 'cam.howe@belgalol.net', 5, 5557896),
(17, 'gavin', 'belson', 'gavin@cailloux.fr', 6, 5554213),
(18, 'jian', 'yang', 'jian.yang@vance.bob', 4, 5554567),
(19, 'bertram', 'gilfoye', 'gilfoye.b@electricpow.it', 8, 5550987),
(20, 'pascale', 'belette', 'pas.bel@jjmc.fr', 3, 5489632),
(21, 'archie', 'medesi', 'archi.mede@proximdr.net', 7, 6335841);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `ID` int(11) NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `company` int(11) NOT NULL,
  `company_type` int(11) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`ID`, `number`, `date`, `company`, `company_type`, `contact`) VALUES
(1, 'F20190404-004', '2019-10-30 00:00:00', 1, 1, 1),
(2, 'F20180310-052', '2019-10-30 00:00:00', 1, 1, 1),
(3, 'F20190204-008', '2019-10-30 00:00:00', 1, 1, 1),
(4, 'F20160409-013', '2019-10-30 00:00:00', 1, 1, 1),
(7, 'f20190404-004', '2019-04-04 00:00:00', 3, 2, 20),
(8, 'F20190404-002', '2019-04-04 00:00:00', 6, 2, 17),
(9, 'F20190404-001', '2019-04-04 00:00:00', 5, 2, 16),
(10, 'F20190403-654', '2019-04-03 00:00:00', 2, 1, 15),
(11, 'f20150522-235', '2015-05-22 00:00:00', 4, 1, 18),
(12, 'f20101103-369', '2010-11-03 00:00:00', 8, 2, 19),
(13, 'f20160226-245', '2016-02-26 00:00:00', 7, 2, 21);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `ID` int(11) NOT NULL,
  `company_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`ID`, `company_type`) VALUES
(1, 'client'),
(2, 'supplier');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rights` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `login`, `password`, `rights`) VALUES
(1, 'jean-christian', '', 'god'),
(2, 'muriel', '', 'modo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `contacts_ibfk_2` (`company`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `invoices_ibfk_1` (`company`),
  ADD KEY `invoices_ibfk_2` (`company_type`),
  ADD KEY `invoices_ibfk_3` (`contact`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_3` FOREIGN KEY (`type`) REFERENCES `type` (`ID`);

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_ibfk_2` FOREIGN KEY (`company`) REFERENCES `company` (`ID`) ON DELETE CASCADE;

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`company`) REFERENCES `company` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`company_type`) REFERENCES `type` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `invoices_ibfk_3` FOREIGN KEY (`contact`) REFERENCES `contacts` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
