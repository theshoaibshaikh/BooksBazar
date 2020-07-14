-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2018 at 11:12 AM
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
-- Database: `booksbazar_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `postad`
--

DROP TABLE IF EXISTS `postad`;
CREATE TABLE IF NOT EXISTS `postad` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_category` text NOT NULL,
  `ad_city` varchar(50) NOT NULL,
  `ad_title` varchar(200) NOT NULL,
  `ad_price` int(200) NOT NULL,
  `ad_description` varchar(5000) NOT NULL,
  `ad_image` varchar(200) DEFAULT NULL,
  `s_name` text NOT NULL,
  `s_mobile` varchar(20) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `TimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postad`
--

INSERT INTO `postad` (`ad_id`, `ad_category`, `ad_city`, `ad_title`, `ad_price`, `ad_description`, `ad_image`, `s_name`, `s_mobile`, `s_email`, `TimeStamp`) VALUES
(9, 'Engineering', 'Mumbai', 'Reference of engineering', 500, 'A good condition book.\r\nHas 300 pages.\r\nAll pages are white.', 'uploads/18-02-2018-1518951016.png', 'Shoaib Shaikh', '9619241109', 'shoaibhs19@gmail.com', '2018-02-18 10:50:16'),
(10, 'History', 'Kalyan', 'Shivaji Maharaj', 200, 'This is book contains complete biography of Shivaji Maharaj.\r\nIt\'s in a good condition.', 'uploads/18-02-2018-1518951901.jpg', 'Pranav', '4587895612', 'pranav@gmail.com', '2018-02-18 11:05:01'),
(8, 'Zoology', 'Dadar', 'The Life Of Pie', 400, 'This book contains the complete info of the animals.\r\nIt is in good condition.\r\nI want to sell it as I don\'t have sufficient storage area.\r\n', 'uploads/18-02-2018-1518948623.jpg', 'Mitesh Pawanarkar', '8998875420', 'mayankpawnarkar@gmail.com', '2018-02-18 10:10:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
