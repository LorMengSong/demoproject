-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 06, 2022 at 01:18 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jongdeng_newsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

DROP TABLE IF EXISTS `tbl_video`;
CREATE TABLE IF NOT EXISTS `tbl_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `thumbnail`, `title`, `url`) VALUES
(1, '745-New Project.png', 'https://www.youtube.com/watch?v=dsOQiNaUR4g', 'https://www.youtube.com/watch?v=dsOQiNaUR4g'),
(2, '5767-New Project (1).png', 'áž‚áž“áŸ’áž›áž¹áŸ‡ áŸ¦áž™áŸ‰áž¶áž„ ážŠáŸ‚áž›áž‡áž½áž™áž²áŸ’áž™áž™áž¾áž„áž‘áž“áŸ’áž‘áŸáž‰áž˜áŸážšáŸ€áž“áž†áž¶áž”áŸ‹áž…áž¶áŸ† áž áž¾áž™áž…áž¶áŸ†áž”áž¶áž“áž™áž¼ážšáž‘áŸ€áž', 'https://www.youtube.com/watch?v=jfKfPfyJRdk'),
(5, '5210-203595-New Project (5).png', 'ážŠáŸáž€ážŸáŸ’ážšáž˜áŸƒáž€áŸáž…áž„áŸ‹áž±áŸ’áž™áž†áž¶áž”áŸ‹ážŠáž›áŸ‹ážáŸ’áž„áŸƒážŠáŸ‚ážš áž–áž·áž–áŸážšážŽáŸáž”áž…áŸ’áž…áŸáž€ážœáž·áž‘áŸ’áž™áž¶áž€áž˜áŸ’áž–áž»áž‡áž¶áŸ¢áŸ áŸ¢áŸ¢', 'https://www.youtube.com/watch?v=MaV9VqFMzB4'),
(6, '7115-6036-31905-New Project (6).png', 'áž”áž„áŸ’áž áž¶áž‰áž¢áŸ†áž–áž¸ážœážŒáŸ’ážáž“áž—áž¶áž–áž‚áŸ„áž›áž“áž™áŸ„áž”áž¶áž™ áž“áž·áž„áž€áŸ’ážšáž”ážážŽáŸ’ážŒáž‚ážáž·áž™áž»ážáŸ’áž áž‡áž¶áž–áž·ážŸáŸážŸáž•áž›áž·ážáž•áž›áž“áž·áž„ážŸáŸážœáž¶áž”áž…áŸ’áž…áŸáž€ážœáž·áž‘áŸ’áž™áž¶áž“áž¶áž“áž¶áŸ”', 'https://www.youtube.com/watch?v=G-Pkkhmenp8&list=RDG-Pkkhmenp8&start_radio=1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
