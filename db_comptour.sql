-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2014 at 12:47 PM
-- Server version: 5.6.17-debug-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_comptour`
--

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
`id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `university` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel1` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email1` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level1` int(1) NOT NULL,
  `name2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel2` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email2` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level2` int(1) NOT NULL,
  `name3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel3` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email3` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level3` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `university`, `created`, `name1`, `tel1`, `email1`, `level1`, `name2`, `tel2`, `email2`, `level2`, `name3`, `tel3`, `email3`, `level3`) VALUES
(2, 'eeeeeeeeeeeeeeeeeeeee', 'adfafdsadf', '2014-11-04 18:05:39', 'sadfasdf', 'sdfsdaf', 'sadfasdfdsf', 1, 'asdfasdf', 'dsafas', 'dfasdfsdf', 1, 'adfsasdf', 'asdfsa', 'dfdasf', 1),
(3, 'eeeeeeeeeeeeeeeeeeeee', 'adfafdsadf', '2014-11-04 18:05:44', 'sadfasdf', 'sdfsdaf', 'sadfasdfdsf', 1, 'asdfasdf', 'dsafas', 'dfasdfsdf', 1, 'adfsasdf', 'asdfsa', 'dfdasf', 1),
(4, 'eeeeeeeeeeeeeeeeeeeee', 'adfafdsadf', '2014-11-04 18:05:46', 'sadfasdf', 'sdfsdaf', 'sadfasdfdsf', 1, 'asdfasdf', 'dsafas', 'dfasdfsdf', 1, 'adfsasdf', 'asdfsa', 'dfdasf', 1),
(5, 'ronsc', 'adfafdsadf', '2014-11-04 18:05:52', 'sadfasdf', 'sdfsdaf', 'sadfasdfdsf', 1, 'asdfasdf', 'dsafas', 'dfasdfsdf', 1, 'adfsasdf', 'asdfsa', 'dfdasf', 1),
(6, 'test ssss', 'adfafdsadf', '2014-11-04 18:05:58', 'sadfasdf', 'sdfsdaf', 'sadfasdfdsf', 1, 'asdfasdf', 'dsafas', 'dfasdfsdf', 1, 'adfsasdf', 'asdfsa', 'dfdasf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
