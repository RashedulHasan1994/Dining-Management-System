-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 07:03 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dms`
--
CREATE DATABASE IF NOT EXISTS `dms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'likhansherpur@yahoo.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE IF NOT EXISTS `cost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`id`, `date`, `day`, `month`, `year`, `amount`) VALUES
(1, '15-Apr-2017', '15', 'Apr', '2017', '340'),
(2, '17-Apr-2017', '17', 'Apr', '2017', '500');

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE IF NOT EXISTS `meal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `meal_1` varchar(100) NOT NULL,
  `meal_2` varchar(100) NOT NULL,
  `meal_3` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`id`, `user_name`, `email`, `date`, `month`, `year`, `meal_1`, `meal_2`, `meal_3`) VALUES
(2, 'Riday Khan', 'riday@yahoo.com', '15-Apr-2017', 'Apr', '2017', '1', '1', '1'),
(3, 'Riday Khan', 'riday@yahoo.com', '16-Apr-2017', 'Apr', '2017', '1', '1', '1'),
(4, 'Asif Khan', 'asif@yahoo.com', '16-Apr-2017', 'Apr', '2017', '1', '1', '1'),
(5, 'Riday Khan', 'riday@yahoo.com', '17-Apr-2017', 'Apr', '2017', '1', '1', '1'),
(6, 'Asif Khan', 'asif@yahoo.com', '17-Apr-2017', 'Apr', '2017', '1', '1', '1'),
(7, 'Ak Azad', 'azad@yahoo.com', '17-Apr-2017', 'Apr', '2017', '1', '1', '1'),
(8, 'Arshad Al', 'arshad@yahoo.com', '17-Apr-2017', 'Apr', '2017', '1', '1', '1'),
(9, 'Furkan Mia', 'furkan@yahoo.com', '17-Apr-2017', 'Apr', '2017', '1', '1', '1'),
(10, 'Riday Khan', 'riday@yahoo.com', '15-May-2017', 'May', '2017', '1', '1', '1'),
(11, 'Asif Khan', 'asif@yahoo.com', '15-May-2017', 'May', '2017', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_no` varchar(200) NOT NULL,
  `nick_name` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `session` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `room_no`, `nick_name`, `user_name`, `email`, `phone`, `department`, `session`, `password`, `picture`) VALUES
(1, '308', 'Riday', 'Riday Khan', 'riday@yahoo.com', '01912233191', 'CSE', '2012-13', '54321', '../upload/58f1b819d5d8bIMG_20160606_181547.jpg'),
(2, '308', 'Asif', 'Asif Khan', 'asif@yahoo.com', '01516135257', 'CSE', '2012-13', '2345', '../upload/58f303947ba16IMG_20150922_191330.jpg'),
(3, '306', 'Ak', 'Ak Azad', 'azad@yahoo.com', '01912233191', 'PA', '2012-13', '246', '../upload/58f3b340ed8713D Picture-251.jpg'),
(4, '306', 'Arshad', 'Arshad Al', 'arshad@yahoo.com', '01912233191', 'PA', '2012-13', '135', '../upload/58f3b378693a214eyehole_1024x768.jpg'),
(5, '308', 'Furkan', 'Furkan Mia', 'furkan@yahoo.com', '01516135257', 'CHEM', '2012-13', '678', '../upload/58f3b4a57913f03 Cherries.bmp');

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE IF NOT EXISTS `money` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `taka` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`id`, `user_name`, `email`, `date`, `taka`) VALUES
(3, 'Riday Khan', 'riday@yahoo.com', '17-Apr-2017', '500'),
(4, 'Asif Khan', 'asif@yahoo.com', '17-Apr-2017', '500'),
(5, 'Ak Azad', 'azad@yahoo.com', '17-Apr-2017', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `on_off`
--

CREATE TABLE IF NOT EXISTS `on_off` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `on_off` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `on_off`
--

INSERT INTO `on_off` (`id`, `user_name`, `email`, `on_off`) VALUES
(1, 'Riday Khan', 'riday@yahoo.com', 'ON'),
(2, 'Asif Khan', 'asif@yahoo.com', 'ON');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
