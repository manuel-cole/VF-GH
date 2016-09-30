-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2016 at 05:58 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fraud`
--

-- --------------------------------------------------------

--
-- Table structure for table `2015_2016_april`
--

CREATE TABLE `2015_2016_april` (
  `id` int(11) NOT NULL,
  `financialYear` varchar(11) NOT NULL,
  `aprNCA` varchar(11) NOT NULL,
  `aprSIG` varchar(11) NOT NULL,
  `aprFraudbuster` varchar(11) NOT NULL,
  `aprInternal` varchar(11) NOT NULL,
  `aprSimbox` varchar(11) NOT NULL,
  `aprFixed` varchar(11) NOT NULL,
  `aprRoaming` varchar(11) NOT NULL,
  `aprMobile` varchar(11) NOT NULL,
  `aprPrepaid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2015_2016_april`
--

INSERT INTO `2015_2016_april` (`id`, `financialYear`, `aprNCA`, `aprSIG`, `aprFraudbuster`, `aprInternal`, `aprSimbox`, `aprFixed`, `aprRoaming`, `aprMobile`, `aprPrepaid`) VALUES
(1, '1516', '1153', '0', '9027', '1154', '11335', '', '', '10', '3');

-- --------------------------------------------------------

--
-- Table structure for table `2015_2016_august`
--

CREATE TABLE `2015_2016_august` (
  `id` int(11) NOT NULL,
  `financialYear` varchar(11) NOT NULL,
  `aprNCA` varchar(11) NOT NULL,
  `aprSIG` varchar(11) NOT NULL,
  `aprFraudbuster` varchar(11) NOT NULL,
  `aprInternal` varchar(11) NOT NULL,
  `aprSimbox` varchar(11) NOT NULL,
  `aprFixed` varchar(11) NOT NULL,
  `aprRoaming` varchar(11) NOT NULL,
  `aprMobile` varchar(11) NOT NULL,
  `aprPrepaid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2015_2016_december`
--

CREATE TABLE `2015_2016_december` (
  `id` int(11) NOT NULL,
  `financialYear` varchar(11) NOT NULL,
  `aprNCA` varchar(11) NOT NULL,
  `aprSIG` varchar(11) NOT NULL,
  `aprFraudbuster` varchar(11) NOT NULL,
  `aprInternal` varchar(11) NOT NULL,
  `aprSimbox` varchar(11) NOT NULL,
  `aprFixed` varchar(11) NOT NULL,
  `aprRoaming` varchar(11) NOT NULL,
  `aprMobile` varchar(11) NOT NULL,
  `aprPrepaid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2015_2016_february`
--

CREATE TABLE `2015_2016_february` (
  `id` int(11) NOT NULL,
  `financialYear` varchar(11) NOT NULL,
  `aprNCA` varchar(11) NOT NULL,
  `aprSIG` varchar(11) NOT NULL,
  `aprFraudbuster` varchar(11) NOT NULL,
  `aprInternal` varchar(11) NOT NULL,
  `aprSimbox` varchar(11) NOT NULL,
  `aprFixed` varchar(11) NOT NULL,
  `aprRoaming` varchar(11) NOT NULL,
  `aprMobile` varchar(11) NOT NULL,
  `aprPrepaid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2015_2016_january`
--

CREATE TABLE `2015_2016_january` (
  `id` int(11) NOT NULL,
  `financialYear` varchar(11) NOT NULL,
  `aprNCA` varchar(11) NOT NULL,
  `aprSIG` varchar(11) NOT NULL,
  `aprFraudbuster` varchar(11) NOT NULL,
  `aprInternal` varchar(11) NOT NULL,
  `aprSimbox` varchar(11) NOT NULL,
  `aprFixed` varchar(11) NOT NULL,
  `aprRoaming` varchar(11) NOT NULL,
  `aprMobile` varchar(11) NOT NULL,
  `aprPrepaid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2015_2016_july`
--

CREATE TABLE `2015_2016_july` (
  `id` int(11) NOT NULL,
  `financialYear` varchar(11) NOT NULL,
  `aprNCA` varchar(11) NOT NULL,
  `aprSIG` varchar(11) NOT NULL,
  `aprFraudbuster` varchar(11) NOT NULL,
  `aprInternal` varchar(11) NOT NULL,
  `aprSimbox` varchar(11) NOT NULL,
  `aprFixed` varchar(11) NOT NULL,
  `aprRoaming` varchar(11) NOT NULL,
  `aprMobile` varchar(11) NOT NULL,
  `aprPrepaid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2015_2016_june`
--

CREATE TABLE `2015_2016_june` (
  `id` int(11) NOT NULL,
  `financialYear` varchar(11) NOT NULL,
  `aprNCA` varchar(11) NOT NULL,
  `aprSIG` varchar(11) NOT NULL,
  `aprFraudbuster` varchar(11) NOT NULL,
  `aprInternal` varchar(11) NOT NULL,
  `aprSimbox` varchar(11) NOT NULL,
  `aprFixed` varchar(11) NOT NULL,
  `aprRoaming` varchar(11) NOT NULL,
  `aprMobile` varchar(11) NOT NULL,
  `aprPrepaid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2015_2016_march`
--

CREATE TABLE `2015_2016_march` (
  `id` int(11) NOT NULL,
  `financialYear` varchar(11) NOT NULL,
  `aprNCA` varchar(11) NOT NULL,
  `aprSIG` varchar(11) NOT NULL,
  `aprFraudbuster` varchar(11) NOT NULL,
  `aprInternal` varchar(11) NOT NULL,
  `aprSimbox` varchar(11) NOT NULL,
  `aprFixed` varchar(11) NOT NULL,
  `aprRoaming` varchar(11) NOT NULL,
  `aprMobile` varchar(11) NOT NULL,
  `aprPrepaid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2015_2016_may`
--

CREATE TABLE `2015_2016_may` (
  `id` int(11) NOT NULL,
  `financialYear` varchar(11) NOT NULL,
  `aprNCA` varchar(11) NOT NULL,
  `aprSIG` varchar(11) NOT NULL,
  `aprFraudbuster` varchar(11) NOT NULL,
  `aprInternal` varchar(11) NOT NULL,
  `aprSimbox` varchar(11) NOT NULL,
  `aprFixed` varchar(11) NOT NULL,
  `aprRoaming` varchar(11) NOT NULL,
  `aprMobile` varchar(11) NOT NULL,
  `aprPrepaid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2015_2016_november`
--

CREATE TABLE `2015_2016_november` (
  `id` int(11) NOT NULL,
  `financialYear` varchar(11) NOT NULL,
  `aprNCA` varchar(11) NOT NULL,
  `aprSIG` varchar(11) NOT NULL,
  `aprFraudbuster` varchar(11) NOT NULL,
  `aprInternal` varchar(11) NOT NULL,
  `aprSimbox` varchar(11) NOT NULL,
  `aprFixed` varchar(11) NOT NULL,
  `aprRoaming` varchar(11) NOT NULL,
  `aprMobile` varchar(11) NOT NULL,
  `aprPrepaid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2015_2016_october`
--

CREATE TABLE `2015_2016_october` (
  `id` int(11) NOT NULL,
  `financialYear` varchar(11) NOT NULL,
  `aprNCA` varchar(11) NOT NULL,
  `aprSIG` varchar(11) NOT NULL,
  `aprFraudbuster` varchar(11) NOT NULL,
  `aprInternal` varchar(11) NOT NULL,
  `aprSimbox` varchar(11) NOT NULL,
  `aprFixed` varchar(11) NOT NULL,
  `aprRoaming` varchar(11) NOT NULL,
  `aprMobile` varchar(11) NOT NULL,
  `aprPrepaid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2015_2016_september`
--

CREATE TABLE `2015_2016_september` (
  `id` int(11) NOT NULL,
  `financialYear` varchar(11) NOT NULL,
  `aprNCA` varchar(11) NOT NULL,
  `aprSIG` varchar(11) NOT NULL,
  `aprFraudbuster` varchar(11) NOT NULL,
  `aprInternal` varchar(11) NOT NULL,
  `aprSimbox` varchar(11) NOT NULL,
  `aprFixed` varchar(11) NOT NULL,
  `aprRoaming` varchar(11) NOT NULL,
  `aprMobile` varchar(11) NOT NULL,
  `aprPrepaid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aff`
--

CREATE TABLE `aff` (
  `id` int(11) NOT NULL,
  `msisdn` int(50) NOT NULL,
  `agent_msisdn` int(50) NOT NULL,
  `eventDate` varchar(100) NOT NULL,
  `remarks` text NOT NULL,
  `fraudType` varchar(50) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reporter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aff`
--

INSERT INTO `aff` (`id`, `msisdn`, `agent_msisdn`, `eventDate`, `remarks`, `fraudType`, `dateCreated`, `reporter`) VALUES
(1, 222, 2222, '06/09/2016', '222', '222', '2016-08-22 12:33:09', 'Emmanuel Gamor'),
(2, 11111, 1111, '08/08/2016', 'rjekmhgeij', '', '2016-08-22 13:03:42', 'Emmanuel Gamor'),
(3, 1111, 1111, '22/08/2016', 'kjdrofeno\r\n', '', '2016-08-22 13:04:41', 'Emmanuel Gamor'),
(4, 509617500, 509617500, '30/08/2016', '509617500rwetq344c3', '509617500', '2016-08-22 16:30:36', 'Emmanuel Gamor');

-- --------------------------------------------------------

--
-- Table structure for table `clir_request`
--

CREATE TABLE `clir_request` (
  `id` int(11) NOT NULL,
  `msisdn` int(20) NOT NULL,
  `alt_msisdn` int(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `institution` varchar(50) NOT NULL,
  `eventDate` date NOT NULL,
  `remarks` varchar(20) NOT NULL,
  `id_type` varchar(30) NOT NULL,
  `idUpload` varchar(50) NOT NULL,
  `timeCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clir_request`
--

INSERT INTO `clir_request` (`id`, `msisdn`, `alt_msisdn`, `firstname`, `lastname`, `institution`, `eventDate`, `remarks`, `id_type`, `idUpload`, `timeCreated`) VALUES
(1, 222, 222, '222', '222', 'Vodafone', '2016-09-15', 'REQUEST DECLINED', 'voters', '16351vodafone-logo.png', '2016-09-18 22:29:26'),
(2, 202212341, 202002020, 'Emmanuel', 'Amoah', 'Vodafone Ghana', '2016-09-15', 'REQUEST APPROVED', 'Voter Id', '18076joseph.png', '2016-09-18 22:29:42'),
(3, 0, 0, 'test', 'test', 'test', '2016-09-18', 'REQUEST APPROVED', 'voters', '75652untitled.png', '2016-09-18 15:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `csvtbl`
--

CREATE TABLE `csvtbl` (
  `ID` int(10) NOT NULL,
  `eventdate` varchar(50) NOT NULL,
  `msisdn` int(50) NOT NULL,
  `agent_msisdn` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `csvtbl`
--

INSERT INTO `csvtbl` (`ID`, `eventdate`, `msisdn`, `agent_msisdn`) VALUES
(12, '0', 0, 0),
(13, 'ama', 0, 0),
(15, '12/06/2016', 11111111, 44444444),
(16, '13/06/2016', 22222222, 55555555);

-- --------------------------------------------------------

--
-- Table structure for table `dhu`
--

CREATE TABLE `dhu` (
  `id` int(11) NOT NULL,
  `msisdn` int(50) NOT NULL,
  `agent_msisdn` int(50) NOT NULL,
  `eventDate` varchar(100) NOT NULL,
  `remarks` text NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reporter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dhu`
--

INSERT INTO `dhu` (`id`, `msisdn`, `agent_msisdn`, `eventDate`, `remarks`, `dateCreated`, `reporter`) VALUES
(1, 222, 222, '03/08/2016', 'fdddd', '2016-08-22 13:06:03', 'Emmanuel Gamor');

-- --------------------------------------------------------

--
-- Table structure for table `fixed_high`
--

CREATE TABLE `fixed_high` (
  `id` int(11) NOT NULL,
  `isdn` int(100) NOT NULL,
  `fraudType` varchar(100) NOT NULL,
  `eventDate` varchar(100) NOT NULL,
  `company` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL,
  `estimatedDamage` varchar(100) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reporter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fixed_high`
--

INSERT INTO `fixed_high` (`id`, `isdn`, `fraudType`, `eventDate`, `company`, `country`, `estimatedDamage`, `dateCreated`, `reporter`) VALUES
(1, 509617500, '509617500', '09/08/2016', 'Vodafone Gh', 'Argentina', 'Ghc100', '2016-08-22 16:40:07', 'Emmanuel Gamor');

-- --------------------------------------------------------

--
-- Table structure for table `general_fraud`
--

CREATE TABLE `general_fraud` (
  `id` int(11) NOT NULL,
  `msisdn` int(20) NOT NULL,
  `agent_msisdn` int(20) NOT NULL,
  `eventDate` varchar(20) NOT NULL,
  `remarks` text NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reporter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_fraud`
--

INSERT INTO `general_fraud` (`id`, `msisdn`, `agent_msisdn`, `eventDate`, `remarks`, `dateCreated`, `reporter`) VALUES
(1, 111, 2222, '31/08/2016', 'test', '2016-08-22 10:54:44', ''),
(2, 202009998, 208982898, '27/09/2016', 'Simbox', '2016-09-27 12:19:52', 'Emmanuel Gamor');

-- --------------------------------------------------------

--
-- Table structure for table `irsf`
--

CREATE TABLE `irsf` (
  `id` int(11) NOT NULL,
  `msisdn` int(50) NOT NULL,
  `agent_msisdn` int(50) NOT NULL,
  `eventDate` varchar(100) NOT NULL,
  `remarks` text NOT NULL,
  `reporter` varchar(50) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `irsf`
--

INSERT INTO `irsf` (`id`, `msisdn`, `agent_msisdn`, `eventDate`, `remarks`, `reporter`, `dateCreated`) VALUES
(1, 3040404, 509617500, '15/09/2016', 'This is a fraudster', 'Emmanuel Gamor', '2016-09-15 18:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `roaming`
--

CREATE TABLE `roaming` (
  `id` int(11) NOT NULL,
  `msisdn` int(50) NOT NULL,
  `agent_msisdn` int(50) NOT NULL,
  `eventDate` varchar(50) NOT NULL,
  `service` varchar(500) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `vpmn` varchar(500) NOT NULL,
  `reporter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roaming`
--

INSERT INTO `roaming` (`id`, `msisdn`, `agent_msisdn`, `eventDate`, `service`, `dateCreated`, `vpmn`, `reporter`) VALUES
(1, 202002000, 202002000, '0000-00-00', 'Data', '2016-09-14 13:14:45', 'test', 'Emmanuel Gamor'),
(2, 201001030, 201001000, '0000-00-00', '', '2016-09-14 13:14:45', 'test2', 'Emmanuel Gamor'),
(3, 202002300, 202002000, '0000-00-00', 'Data', '2016-09-14 13:14:45', 'test', 'Emmanuel Gamor'),
(4, 201003000, 201001000, '0000-00-00', '', '2016-09-14 13:14:45', 'test2', 'Emmanuel Gamor'),
(5, 202032000, 202002000, '0000-00-00', 'Data', '2016-09-14 13:14:45', 'test', 'Emmanuel Gamor'),
(6, 201001040, 201001000, '0000-00-00', '', '2016-09-14 13:14:45', 'test2', 'Emmanuel Gamor'),
(7, 202005000, 202002000, '0000-00-00', 'Data', '2016-09-14 13:14:45', 'test', 'Emmanuel Gamor'),
(8, 201001600, 201001000, '0000-00-00', '', '2016-09-14 13:14:46', 'test2', 'Emmanuel Gamor'),
(9, 202002800, 202002000, '0000-00-00', 'Data', '2016-09-14 13:14:46', 'test', 'Emmanuel Gamor'),
(10, 201003400, 201001000, '0000-00-00', '', '2016-09-14 13:14:46', 'test2', 'Emmanuel Gamor'),
(11, 202002040, 202002000, '0000-00-00', 'Data', '2016-09-14 13:14:46', 'test', 'Emmanuel Gamor'),
(12, 201003000, 201001000, '0000-00-00', '', '2016-09-14 13:14:46', 'test2', 'Emmanuel Gamor'),
(13, 202002000, 202002000, '0000-00-00', 'Data', '2016-09-14 13:14:46', 'test', 'Emmanuel Gamor'),
(14, 201001000, 201001000, '0000-00-00', '', '2016-09-14 13:14:46', 'test2', 'Emmanuel Gamor'),
(15, 202002000, 202002000, '0000-00-00', 'Data', '2016-09-14 13:14:46', 'test', 'Emmanuel Gamor'),
(16, 201001000, 201001000, '0000-00-00', '', '2016-09-14 13:14:46', 'test2', 'Emmanuel Gamor'),
(17, 202002000, 202002000, '0000-00-00', 'Data', '2016-09-14 13:14:46', 'test', 'Emmanuel Gamor'),
(18, 201001000, 201001000, '0000-00-00', '', '2016-09-14 13:14:46', 'test2', 'Emmanuel Gamor');

-- --------------------------------------------------------

--
-- Table structure for table `simbox`
--

CREATE TABLE `simbox` (
  `id` int(11) NOT NULL,
  `msisdn` int(50) NOT NULL,
  `agent_msisdn` int(50) NOT NULL,
  `eventDate` varchar(100) NOT NULL,
  `agent_name` varchar(100) NOT NULL,
  `agent_location` varchar(100) NOT NULL,
  `remarks` text NOT NULL,
  `reporter` varchar(50) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simbox`
--

INSERT INTO `simbox` (`id`, `msisdn`, `agent_msisdn`, `eventDate`, `agent_name`, `agent_location`, `remarks`, `reporter`, `dateCreated`) VALUES
(1, 202002000, 202002000, '12/06/2016', '', 'Theo', 'Give remarks here', 'Emmanuel Gamor', '2016-09-15 22:31:10'),
(2, 201001000, 201001000, '13/06/2016', '', 'Emma', '', 'Emmanuel Gamor', '2016-09-15 22:31:11'),
(3, 202002000, 202002000, '12/06/2016', '', 'Theo', 'Give remarks here', 'Emmanuel Gamor', '2016-09-15 22:31:11'),
(4, 201001000, 201001000, '13/06/2016', '', 'Emma', '', 'Emmanuel Gamor', '2016-09-15 22:31:11'),
(5, 202002000, 202002000, '12/06/2016', 'Theo', 'accra', 'Give remarks here', 'Emmanuel Gamor', '2016-09-15 22:39:00'),
(6, 201001000, 201001000, '13/06/2016', 'Emma', 'tema', '', 'Emmanuel Gamor', '2016-09-15 22:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `simreg`
--

CREATE TABLE `simreg` (
  `id` int(11) NOT NULL,
  `msisdn` int(50) NOT NULL,
  `agent_msisdn` int(50) NOT NULL,
  `eventDate` date NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_id_type` varchar(100) NOT NULL,
  `customer_id_number` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `reporter` varchar(50) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simreg`
--

INSERT INTO `simreg` (`id`, `msisdn`, `agent_msisdn`, `eventDate`, `customer_name`, `customer_id_type`, `customer_id_number`, `remarks`, `reporter`, `dateCreated`) VALUES
(1, 202002000, 202002000, '2016-09-15', 'Theo', 'Give remarks here', 0, 'Give remarks here', '', '2016-09-18 16:57:09'),
(2, 201001000, 509617500, '2016-09-15', 'Emma', '', 0, '', '', '2016-09-18 17:01:02'),
(3, 202002000, 202002000, '2016-09-15', 'Theo', 'Theo', 0, 'Give remarks here', '', '2016-09-18 17:02:31'),
(4, 201001000, 201001000, '2016-09-15', 'Emma', 'Cole', 0, '', '', '2016-09-18 17:02:31'),
(5, 202002000, 202002000, '2016-09-04', 'Theo', 'Theo', 0, 'Give remarks here', '', '2016-09-18 17:02:31'),
(6, 201001000, 201001000, '2016-08-31', 'Emma August', 'Cole', 0, '', '', '2016-09-18 17:02:32'),
(7, 202002000, 202002000, '2016-08-09', 'Theo', 'Theo', 0, 'Give remarks here', 'Emmanuel Gamor', '2016-09-18 17:02:32'),
(8, 201001000, 201001000, '2016-09-09', 'Emma', 'Cole', 0, '', 'Emmanuel Gamor', '2016-09-18 17:02:32'),
(9, 202002000, 202002000, '2016-06-12', 'test', 'tester', 0, 'Give remarks here', 'Emmanuel Gamor', '2016-09-18 17:44:03'),
(10, 201001000, 201001000, '2016-06-13', 'teste3', 'twegwu', 0, '', 'Emmanuel Gamor', '2016-09-18 17:44:03'),
(11, 0, 0, '0000-00-00', '', '', 0, '', 'Emmanuel Gamor', '2016-09-18 18:00:53'),
(12, 0, 0, '0000-00-00', '', '', 0, '', 'Emmanuel Gamor', '2016-09-18 18:00:53'),
(13, 0, 0, '0000-00-00', '', '', 0, '', 'Emmanuel Gamor', '2016-09-18 18:00:53'),
(14, 0, 0, '0000-00-00', '', '', 0, '', 'Emmanuel Gamor', '2016-09-18 18:00:53'),
(15, 0, 0, '0000-00-00', '', '', 0, '', 'Emmanuel Gamor', '2016-09-18 18:00:53'),
(16, 0, 0, '0000-00-00', '', '', 0, '', 'Emmanuel Gamor', '2016-09-18 18:00:53'),
(17, 0, 0, '0000-00-00', '', '', 0, '', 'Emmanuel Gamor', '2016-09-18 18:00:53'),
(18, 0, 0, '0000-00-00', '', '', 0, '', 'Emmanuel Gamor', '2016-09-18 18:00:53'),
(19, 202002000, 202002000, '2016-08-25', 'Theo', 'Give remarks here', 0, '', 'Emmanuel Gamor', '2016-09-27 12:34:39'),
(20, 201001000, 201001000, '2016-08-25', 'Emma', '', 0, '', 'Emmanuel Gamor', '2016-09-27 12:34:39'),
(21, 202002000, 202002000, '2016-08-25', 'Theo', 'Give remarks here', 0, '', 'Emmanuel Gamor', '2016-09-27 12:41:47'),
(22, 201001000, 201001000, '2016-08-25', 'Emma', '', 0, '', 'Emmanuel Gamor', '2016-09-27 12:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `file` varchar(100) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `fileSize` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `file`, `fileName`, `fileSize`) VALUES
(1, '63075-sample-(1).csv', '', '0.0341796875'),
(2, '10562-sample-(1).csv', '', '0.0341796875'),
(3, '39382-sample-(1).csv', '', '0.0341796875'),
(4, '42427-sample-(1).csv', '', '0.0341796875'),
(5, '2688-sample-(1).csv', '', '0.0341796875'),
(6, '32931-sample-(1).csv', '', '0.0341796875'),
(7, '9320-sample.csv', '', '0.0888671875'),
(8, '15148-sample.csv', '', '0.1201171875'),
(9, '42188-sample.csv', '', '0.1201171875'),
(10, '2782-invalid_1-june---27-july-2016.csv', '', '272.955078125'),
(11, '91713-invalid_1-june---27-july-2016.csv', '', '272.955078125'),
(12, '65359-invalid_1-june---27-july-2016.csv', '', '272.955078125'),
(13, '67495-simbox-sample.csv', '', '0.1435546875'),
(14, '28550-roaming-sample.csv', '', '0.123046875'),
(15, '41352-roaming-sample-(1).csv', '', '0.11328125'),
(16, '91136-roaming-sample-(1).csv', '', '0.11328125'),
(17, '71658-simbox-sample.csv', '', '0.1435546875'),
(18, '48572-simbox-test-.csv', '', '0.091796875'),
(19, '45841-simbox-test-.csv', '', '0.091796875'),
(20, '8027-roaming-sample-(1).csv', '', '0.11328125'),
(21, '62954-roaming-sample.csv', '', '0.19140625'),
(22, '20526-roaming-sample.csv', '', '0.7548828125'),
(23, '44624-simbox-sample.csv', '', '0.23046875'),
(24, '83547-simbox-sample-(1).csv', '', '0.1650390625'),
(25, '2441-simreg-sample.csv', '', '0.1435546875'),
(26, '80223-simreg-sample.csv', '', '0.173828125'),
(27, '63694-simreg-sample.csv', '', '0.173828125'),
(28, '54839-simreg-sample.csv', '', '0.173828125'),
(29, '99031-simreg-sample.csv', '', '0.1796875'),
(30, '70259-simreg-sample.xlsx', '', '9.3447265625'),
(31, '99354-simreg-sample-(1).csv', '', '0.1435546875'),
(32, '12272-simreg-sample-(1).csv', '', '0.1435546875'),
(33, '12196-simreg-sample-(2).csv', '', '0.267578125');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `access_level` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fullname`, `access_level`, `role`) VALUES
(1, 'emmanuel.gamor', '614f5849038ba0fc357f6237db1ec6aa', 'Emmanuel Gamor', 'admin', 'Fraud Prevention Analyst Intern'),
(2, 'emmanuel.amoah', '614f5849038ba0fc357f6237db1ec6aa', 'Emmanuel Amoah', 'member', 'Fraud Prevention Analyst'),
(3, 'Theophilus.Botchway', '614f5849038ba0fc357f6237db1ec6aa', 'Theophilus Botchway', 'admin', 'Fraud Prevention Manager'),
(4, 'Ibrahim.Rahman', '614f5849038ba0fc357f6237db1ec6aa', 'Ibrahim Rahman', 'member', 'Risk and Compliance Specialist'),
(5, 'constance.addo', '614f5849038ba0fc357f6237db1ec6aa', 'Constance Badu Addo', 'member', 'Awareness Transformation Analyst');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2015_2016_april`
--
ALTER TABLE `2015_2016_april`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2015_2016_august`
--
ALTER TABLE `2015_2016_august`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2015_2016_december`
--
ALTER TABLE `2015_2016_december`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2015_2016_february`
--
ALTER TABLE `2015_2016_february`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2015_2016_january`
--
ALTER TABLE `2015_2016_january`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2015_2016_july`
--
ALTER TABLE `2015_2016_july`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2015_2016_june`
--
ALTER TABLE `2015_2016_june`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2015_2016_march`
--
ALTER TABLE `2015_2016_march`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2015_2016_may`
--
ALTER TABLE `2015_2016_may`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2015_2016_november`
--
ALTER TABLE `2015_2016_november`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2015_2016_october`
--
ALTER TABLE `2015_2016_october`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2015_2016_september`
--
ALTER TABLE `2015_2016_september`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aff`
--
ALTER TABLE `aff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clir_request`
--
ALTER TABLE `clir_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `csvtbl`
--
ALTER TABLE `csvtbl`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dhu`
--
ALTER TABLE `dhu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fixed_high`
--
ALTER TABLE `fixed_high`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_fraud`
--
ALTER TABLE `general_fraud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `irsf`
--
ALTER TABLE `irsf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roaming`
--
ALTER TABLE `roaming`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simbox`
--
ALTER TABLE `simbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simreg`
--
ALTER TABLE `simreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2015_2016_april`
--
ALTER TABLE `2015_2016_april`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `2015_2016_august`
--
ALTER TABLE `2015_2016_august`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `2015_2016_december`
--
ALTER TABLE `2015_2016_december`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `2015_2016_february`
--
ALTER TABLE `2015_2016_february`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `2015_2016_january`
--
ALTER TABLE `2015_2016_january`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `2015_2016_july`
--
ALTER TABLE `2015_2016_july`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `2015_2016_june`
--
ALTER TABLE `2015_2016_june`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `2015_2016_march`
--
ALTER TABLE `2015_2016_march`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `2015_2016_may`
--
ALTER TABLE `2015_2016_may`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `2015_2016_november`
--
ALTER TABLE `2015_2016_november`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `2015_2016_october`
--
ALTER TABLE `2015_2016_october`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `2015_2016_september`
--
ALTER TABLE `2015_2016_september`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `aff`
--
ALTER TABLE `aff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `clir_request`
--
ALTER TABLE `clir_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `csvtbl`
--
ALTER TABLE `csvtbl`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `dhu`
--
ALTER TABLE `dhu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fixed_high`
--
ALTER TABLE `fixed_high`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `general_fraud`
--
ALTER TABLE `general_fraud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `irsf`
--
ALTER TABLE `irsf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `roaming`
--
ALTER TABLE `roaming`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `simbox`
--
ALTER TABLE `simbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `simreg`
--
ALTER TABLE `simreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
