-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 09, 2021 at 10:54 PM
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
-- Database: `mirza`
--

-- --------------------------------------------------------

--
-- Table structure for table `addreview`
--

DROP TABLE IF EXISTS `addreview`;
CREATE TABLE IF NOT EXISTS `addreview` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addreview`
--

INSERT INTO `addreview` (`id`, `firstname`, `lastname`, `email`, `message`, `timestamp`) VALUES
(1, 'Mahender', 'Singh', 'mahendersingh@leetshield.com', 'asd', '2021-02-09 21:57:14'),
(2, 'tester', 'afwad', 'tester@gmail.com', 'asdsad', '2021-02-09 21:57:35'),
(3, 'tester', 'afwad', 'tester@gmail.com', 'asdassa', '2021-02-09 22:02:46'),
(4, 'Mahender', 'Singh', 'mahendersingh@leetshield.com', 'asdsad', '2021-02-09 22:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `last_ip` varchar(55) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `name`, `email`, `password`, `last_ip`, `create_at`) VALUES
(1, 'neohacker', 'Mahender Singh', 'admin@gmail.com', '123', '127.0.0.1', '2021-02-07 21:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `enquiryform`
--

DROP TABLE IF EXISTS `enquiryform`;
CREATE TABLE IF NOT EXISTS `enquiryform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiryform`
--

INSERT INTO `enquiryform` (`id`, `firstname`, `lastname`, `email`, `phone`, `subject`, `message`, `timestamp`) VALUES
(6, 'tester', '', 'tester@gmail.com', '9999999999', 'fsefsefsef', 'sesefse', '2021-02-09 21:37:19'),
(7, 'Mahender', 'Singh', 'mahendersingh@leetshield.com', '08770512687', 'sefsefsefsef', 'sefesf', '2021-02-09 21:37:23');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `timestamp`) VALUES
(1, 'mahendersingh@leetshield.com', '0000-00-00 00:00:00'),
(2, 'admin@gmail.com', '2021-02-09 22:25:43'),
(3, 'ms141018@gmail.com', '2021-02-09 22:27:27'),
(4, 'ms141018@gmail.com', '2021-02-09 22:28:15'),
(5, 'admin@gmail.com', '2021-02-09 22:29:52'),
(6, 'tester@gmail.com', '2021-02-09 22:32:12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
