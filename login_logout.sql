-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2016 at 09:18 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login_logout`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `Password`, `role`) VALUES
(1, 'sandeep@gmail.com', '12345', 'admin'),
(2, 'raj@gamil.com', '123', 'user'),
(3, 'rohan@gmail.com', '123456789', 'user'),
(4, 'ddd@gmail.com', '123456', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `registar`
--

CREATE TABLE IF NOT EXISTS `registar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usename` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `registar`
--

INSERT INTO `registar` (`id`, `usename`, `password`, `email`, `Phone`, `gender`, `role`) VALUES
(3, 'rohan', '123456789', 'rohan@gmail.com', '123456789', 'male', 'user'),
(4, 'ddd', '123456', 'ddd@gmail.com', '876856435436', 'male', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
