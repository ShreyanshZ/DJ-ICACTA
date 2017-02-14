-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2014 at 03:58 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int(5) NOT NULL,
  `article` varchar(500) NOT NULL,
  `blog_title` varchar(20) NOT NULL,
  `blog_desc` varchar(40) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `article`, `blog_title`, `blog_desc`) VALUES
(1001, 'C++ (pronounced see plus plus) is a general purpose programming language that is free-form and compiled. It is regarded as an intermediate-level language, as it comprises both high-level and low-level language features.[3] It provides imperative, object-oriented and generic programming features.\r\n\r\nC++ is one of the most popular programming languages[4][5] and is implemented on a wide variety of hardware and operating system platforms. As an efficient performance driven programming language it i', 'About c++', 'study c++'),
(1002, 'Java (Indonesian: Jawa; Javanese: ??) is an island of Indonesia. With a population roughly equal to Russia as of 2014, (excluding the 3.7 million on the island of Madura which is administered as part of the province of East Java), Java is the world''s most populous island, and one of the most densely populated places in the world. Java is the home of 57 percent of the Indonesian population. The Indonesian capital city, Jakarta, is located on western Java. Much of Indonesian history took place on ', 'About Java', 'Study Java');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
