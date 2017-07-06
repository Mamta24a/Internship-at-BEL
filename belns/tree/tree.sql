-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2014 at 06:17 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tree`
--

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE IF NOT EXISTS `tree` (
`id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `hide` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=143294 ;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`id`, `first_name`, `parent_id`, `hide`) VALUES
(1, '1', 0, 0),
(143284, '1.1', 1, 0),
(143285, '1.2', 1, 0),
(143286, '1.3', 1, 0),
(143287, '1.2.1', 143285, 0),
(143288, '1.3.1', 143286, 0),
(143289, '1.1.1', 143284, 0),
(143290, '1.1.2', 143284, 0),
(143291, '1.2.1.1', 143287, 0),
(143292, '1.2.2', 143285, 0),
(143293, '1.3.2', 143286, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=143294;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
