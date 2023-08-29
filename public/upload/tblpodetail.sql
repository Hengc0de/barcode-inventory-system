-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2023 at 09:45 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblpodetail`
--

DROP TABLE IF EXISTS `tblpodetail`;
CREATE TABLE IF NOT EXISTS `tblpodetail` (
  `pdetail` int(11) NOT NULL AUTO_INCREMENT,
  `poid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `qty` float NOT NULL,
  `cost` float NOT NULL,
  PRIMARY KEY (`pdetail`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblpodetail`
--

INSERT INTO `tblpodetail` (`pdetail`, `poid`, `proid`, `qty`, `cost`) VALUES
(1, 10, 2, 10, 1),
(2, 10, 1, 10, 1.5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
