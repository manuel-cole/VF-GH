-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2016 at 12:47 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cdr`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetCorporateCodeExpire` ()  MODIFIES SQL DATA
BEGIN
   UPDATE cdr_lea_request
   SET code_status = "1"
   WHERE dateCreated<(NOW()-INTERVAL 10 MINUTE);
   END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetIndividualCodeExpire` ()  MODIFIES SQL DATA
BEGIN
   UPDATE cdr_individual_request
   SET code_status = "1"
   WHERE dateCreated<(NOW()-INTERVAL 10 MINUTE);
   END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetLeaCodeExpire` ()  MODIFIES SQL DATA
BEGIN
   UPDATE cdr_lea_request
   SET code_status = "1"
   WHERE dateCreated<(NOW()-INTERVAL 10 MINUTE);
   END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetOtherCodeExpire` ()  MODIFIES SQL DATA
BEGIN
   UPDATE cdr_other_request
   SET code_status = "1"
   WHERE dateCreated<(NOW()-INTERVAL 10 MINUTE);
   END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `cdr_corporate_request`
--

CREATE TABLE `cdr_corporate_request` (
  `id` int(11) NOT NULL,
  `msisdn` varchar(100) NOT NULL,
  `other_msisdn` varchar(1000) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `record_type` varchar(100) NOT NULL,
  `request_type` text NOT NULL,
  `purpose_for_request` varchar(100) NOT NULL,
  `id_card` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `endDate` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `doc` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL,
  `code_status` int(11) NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cdr_corporate_request`
--

INSERT INTO `cdr_corporate_request` (`id`, `msisdn`, `other_msisdn`, `service_type`, `record_type`, `request_type`, `purpose_for_request`, `id_card`, `company_name`, `startDate`, `endDate`, `email`, `doc`, `code`, `code_status`, `dateCreated`) VALUES
(1, '0509617500', '0303003002', 'Prepaid (Pay As You Go)', 'Corporate', 'Mobile Outgoing & Incoming Calls.<br />Mobile SMS History.<br />', 'Official', '78314invalid-sim-registration-report.pdf', 'Vodafone Ghana (Test)', '28/09/2016', '28/09/2016', 'emmanuel.gamor@vodafone.com', '41191invalid-sim-registration-report.pdf', '229309', 0, '2016-09-28 11:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `cdr_individual_request`
--

CREATE TABLE `cdr_individual_request` (
  `id` int(11) NOT NULL,
  `msisdn` varchar(100) NOT NULL,
  `other_msisdn` varchar(1000) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `record_type` varchar(100) NOT NULL,
  `request_type` text NOT NULL,
  `purpose_for_request` varchar(100) NOT NULL,
  `id_card` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `endDate` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL,
  `code_status` int(11) NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cdr_individual_request`
--

INSERT INTO `cdr_individual_request` (`id`, `msisdn`, `other_msisdn`, `service_type`, `record_type`, `request_type`, `purpose_for_request`, `id_card`, `fullname`, `startDate`, `endDate`, `email`, `code`, `code_status`, `dateCreated`) VALUES
(1, '0509617500', '', 'Prepaid (Pay As You Go)', 'Individual', 'Mobile Outgoing & Incoming Calls.<br />', 'Personal', '59310abed.png', 'Emmanuel Gamor (Test)', '26/09/2016', '26/09/2016', 'emmanuel.gamor@vodafone.com', '562662', 1, '2016-09-26 15:24:18'),
(2, '0509617500', '', 'Prepaid (Pay As You Go)', 'Individual', 'Mobile Outgoing & Incoming Calls.<br />', 'Personal', '59310abed.png', 'Emmanuel Gamor (Test)', '26/09/2016', '26/09/2016', 'gamoremmanuel94@gmail.com', '814194', 1, '2016-09-26 15:24:18'),
(3, '0509617500', '', 'Prepaid (Pay As You Go)', 'Individual', 'Mobile Outgoing & Incoming Calls.<br />', 'Personal', '59310abed.png', 'Emmanuel Gamor (Test)', '26/09/2016', '26/09/2016', 'gamoremmanuel94@gmail.com', '421927', 1, '2016-09-28 10:55:50'),
(4, '0509617500', '', 'Prepaid (Pay As You Go)', 'Individual', 'Mobile Outgoing & Incoming Calls.<br />', 'Personal', '59310abed.png', 'Emmanuel Gamor (Test)', '26/09/2016', '26/09/2016', 'gamoremmanuel94@gmail.com', '605783', 1, '2016-09-28 10:55:50'),
(5, '0509617500', '0202001445', 'Prepaid (Pay As You Go)', 'Individual', 'Mobile Outgoing & Incoming Calls.<br />Mobile SMS History.<br />', 'Embassy', '26605invalid-sim-registration-report.pdf', 'Emmanuel Gamor (Test)', '29/08/2016', '28/09/2016', 'emmanuel.gamor@vodafone.com', '119116', 0, '2016-09-28 10:55:38'),
(6, '0509617500', '', 'Prepaid (Pay As You Go)', 'Individual', 'Mobile Outgoing & Incoming Calls.<br />', 'Embassy', '584615mbimage.jpg', 'Emmanuel Gamor (Test)', '30/08/2016', '12/09/2016', 'emmanuel.gamor@vodafone.com', '410473', 0, '2016-09-28 18:36:58'),
(7, '23', '4343', 'Prepaid (Pay As You Go)', 'Individual', 'Mobile Outgoing & Incoming Calls.<br />', 'Embassy', '66362images.jpg', 'Emmanuel Gamor (Test)', '29/08/2016', '05/09/2016', 'emmanuelgamor94@gmail.com', '603256', 0, '2016-09-28 22:34:20'),
(8, '23', '4343', 'Prepaid (Pay As You Go)', 'Individual', 'Mobile Outgoing & Incoming Calls.<br />', 'Embassy', '66362images.jpg', 'Emmanuel Gamor (Test)', '29/08/2016', '05/09/2016', 'emmanuelgamor94@gmail.com', '914307', 0, '2016-09-28 22:38:00'),
(9, '0509617500', '', 'Prepaid (Pay As You Go)', 'Individual', 'Mobile Outgoing & Incoming Calls.<br />', 'Embassy', '59086images.jpg', 'Emmanuel Gamor (Test)', '28/09/2016', '28/09/2016', 'emmanuelgamor94@gmail.com', '256747', 0, '2016-09-28 23:12:42'),
(10, '0509617500', '', 'Prepaid (Pay As You Go)', 'Individual', 'Mobile Outgoing & Incoming Calls.<br />', 'Embassy', '59086images.jpg', 'Emmanuel Gamor (Test)', '28/09/2016', '28/09/2016', 'emmanuelgamor94@gmail.com', '157348', 0, '2016-09-28 23:14:32'),
(11, '0509617500', '', 'Prepaid (Pay As You Go)', 'Individual', 'Mobile Outgoing & Incoming Calls.<br />', 'Embassy', '36001images.jpg', 'Emmanuel Gamor (Test)', '28/09/2016', '28/09/2016', 'emmanuelgamor94@gmail.com', '570380', 0, '2016-09-28 23:19:25'),
(12, '112222', '0509617500', 'Fixedline Broadband', 'Individual', 'Fixed Broadband(Data Usage Details).<br />', 'Personal', '750845mbimage.jpg', 'Emmanuel Gamor (Test)', '28/09/2016', '28/09/2016', 'emmanuelgamor94@gmail.com', '485345', 0, '2016-09-28 23:56:03'),
(13, '112222', '0509617500', 'Fixedline Broadband', 'Individual', 'Fixed Broadband(Data Usage Details).<br />', 'Personal', '750845mbimage.jpg', 'Emmanuel Gamor (Test)', '28/09/2016', '28/09/2016', 'emmanuelgamor94@gmail.com', '619846', 0, '2016-09-29 00:04:16'),
(14, '0509617500', '', 'Prepaid (Pay As You Go)', 'Individual', 'Fixed Broadband(Data Usage Details).<br />', 'Embassy', '976685mbimage.jpg', 'Emmanuel Gamor (Test)', '29/09/2016', '29/09/2016', 'emmanuelgamor94@gmail.com', '434122', 0, '2016-09-29 00:06:56');

-- --------------------------------------------------------

--
-- Table structure for table `cdr_lea_request`
--

CREATE TABLE `cdr_lea_request` (
  `id` int(11) NOT NULL,
  `msisdn` varchar(100) NOT NULL,
  `other_msisdn` varchar(1000) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `record_type` varchar(100) NOT NULL,
  `request_type` text NOT NULL,
  `purpose_for_request` varchar(100) NOT NULL,
  `id_card` varchar(100) NOT NULL,
  `security_agency_name` varchar(100) NOT NULL,
  `investigator_name` varchar(100) NOT NULL,
  `telephone_number` int(50) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `endDate` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `court_order` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL,
  `code_status` int(11) NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cdr_other_request`
--

CREATE TABLE `cdr_other_request` (
  `id` int(11) NOT NULL,
  `msisdn` varchar(100) NOT NULL,
  `other_msisdn` varchar(1000) NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `record_type` varchar(100) NOT NULL,
  `request_type` text NOT NULL,
  `purpose_for_request` varchar(100) NOT NULL,
  `id_card` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `startDate` varchar(100) NOT NULL,
  `endDate` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` varchar(20) NOT NULL,
  `code_status` int(11) NOT NULL DEFAULT '0',
  `dateCreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cdr_corporate_request`
--
ALTER TABLE `cdr_corporate_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdr_individual_request`
--
ALTER TABLE `cdr_individual_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdr_lea_request`
--
ALTER TABLE `cdr_lea_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cdr_other_request`
--
ALTER TABLE `cdr_other_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cdr_corporate_request`
--
ALTER TABLE `cdr_corporate_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cdr_individual_request`
--
ALTER TABLE `cdr_individual_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `cdr_lea_request`
--
ALTER TABLE `cdr_lea_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cdr_other_request`
--
ALTER TABLE `cdr_other_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
