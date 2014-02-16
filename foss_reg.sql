-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2014 at 01:00 PM
-- Server version: 5.5.35-0ubuntu0.13.10.2
-- PHP Version: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foss_reg`
--
CREATE DATABASE IF NOT EXISTS `foss_reg` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `foss_reg`;

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE IF NOT EXISTS `entries` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`,`name`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Register`
--

CREATE TABLE IF NOT EXISTS `Register` (
  `email` varchar(50) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `profession` text NOT NULL,
  `insti` text NOT NULL,
  `rollno` varchar(20) NOT NULL,
  `git` text NOT NULL,
  `twitter` text NOT NULL,
  `preference` int(11) NOT NULL DEFAULT '50',
  `kit` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`email`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE IF NOT EXISTS `workshops` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `speaker` text NOT NULL,
  `day` text NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `venue` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
