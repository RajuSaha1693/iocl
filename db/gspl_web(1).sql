-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 05, 2022 at 07:30 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gspl_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthdays`
--

DROP TABLE IF EXISTS `birthdays`;
CREATE TABLE IF NOT EXISTS `birthdays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b_name` varchar(255) NOT NULL,
  `b_date` date DEFAULT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthdays`
--

INSERT INTO `birthdays` (`id`, `b_name`, `b_date`, `status`, `created_at`) VALUES
(1, 'Raju Saha', '1993-06-01', '0', '2022-04-05 02:33:42');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(255) NOT NULL,
  `g_notes` varchar(255) NOT NULL,
  `g_location` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `g_name`, `g_notes`, `g_location`, `status`, `created_at`) VALUES
(1, 'Demo', 'Test Image', '1200px-Image_created_with_a_mobile_phone.jpg', '0', '2022-04-05 02:37:58');

-- --------------------------------------------------------

--
-- Table structure for table `news_event`
--

DROP TABLE IF EXISTS `news_event`;
CREATE TABLE IF NOT EXISTS `news_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_head` varchar(255) NOT NULL,
  `n_description` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_event`
--

INSERT INTO `news_event` (`id`, `n_head`, `n_description`, `status`, `created_at`) VALUES
(1, 'Demo ', 'Complete Description', '0', '2022-04-05 02:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `todays_word`
--

DROP TABLE IF EXISTS `todays_word`;
CREATE TABLE IF NOT EXISTS `todays_word` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `t_word` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `t_meaning` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todays_word`
--

INSERT INTO `todays_word` (`id`, `t_word`, `t_meaning`, `status`, `created_at`) VALUES
(2, 'नैतिक', 'Moral or Obligation', '0', '2022-04-05 06:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `u_name`, `u_password`, `u_email`, `status`, `created_at`) VALUES
(1, 'Admin', '25d55ad283aa400af464c76d713c07ad', 'admin@mail.com', '1', '2022-04-04 09:58:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
