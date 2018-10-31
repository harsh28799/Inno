-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 31, 2018 at 04:53 PM
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
-- Database: `innovision`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(100) NOT NULL,
  `ans1` int(11) NOT NULL,
  `ans2` int(11) NOT NULL,
  `ans3` int(11) NOT NULL,
  `ans4` int(11) NOT NULL,
  `ans5` int(11) NOT NULL,
  `ans6` int(11) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sno`, `id`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`) VALUES
(1, '0', 0, 0, 4, 4, 0, 0),
(2, '0', 0, 0, 4, 4, 0, 0),
(3, '1', 4, 0, 0, 0, 4, 0),
(4, '117cs0232', 2, 4, 2, 1, 4, 2),
(5, '117cs0184', 0, 0, 1, 1, 0, 0),
(6, '117cs0184', 0, 0, 1, 1, 0, 0),
(7, '117cs0229', 2, 0, 0, 0, 0, 0),
(8, '117ch0232', 0, 0, 1, 0, 0, 0),
(9, '118bt232', 3, 0, 0, 0, 0, 0),
(10, 'HARSH', 0, 0, 0, 0, 0, 0),
(11, '117ch249', 1, 0, 2, 2, 3, 1),
(12, '117gs232', 1, 0, 2, 0, 1, 1),
(13, '117cs0323', 0, 0, 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
