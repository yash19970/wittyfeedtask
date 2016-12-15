-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2016 at 05:11 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `angular`
--

CREATE TABLE IF NOT EXISTS `angular` (
  `name` varchar(20) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `salary` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `id` int(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `angular`
--

INSERT INTO `angular` (`name`, `DOB`, `salary`, `gender`, `id`) VALUES
('kdjskd', '1980-11-23T00', 23, 'male', 31),
('yasjsi', '1980-11-23T00', 232, 'male', 32),
('ldskldkldks', '1980-11-23T00', 111, 'male', 34),
('yash', '1980-11-23T00', 9283, 'male', 37),
('sayasahsh', '1980-11-23T00', 8372372, 'female', 38),
('yash', '1980-11-23T00', 8372372, 'female', 44),
('aman', '1980-11-23T00', 29343, 'female', 45);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
