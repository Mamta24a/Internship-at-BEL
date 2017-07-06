-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2016 at 04:37 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `belns`
--

-- --------------------------------------------------------

--
-- Table structure for table `bdy`
--

CREATE TABLE IF NOT EXISTS `bdy` (
`id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bdy`
--

INSERT INTO `bdy` (`id`, `name`, `date`) VALUES
(1, 'mamta', '15-08'),
(2, 'momo', '19-08'),
(3, 'ankita', '22-08');

-- --------------------------------------------------------

--
-- Table structure for table `demand`
--

CREATE TABLE IF NOT EXISTS `demand` (
`id` int(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dmndfr` varchar(50) NOT NULL,
  `qty` int(100) NOT NULL,
  `rmrk` longtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demand`
--

INSERT INTO `demand` (`id`, `name`, `dmndfr`, `qty`, `rmrk`, `date`) VALUES
(1, 'Mamta Kumari', 'pencil', 2, 'mehanical pencil', '0000-00-00'),
(2, 'Sachin Sharma', 'picnic', 1, 'for fun', '0000-00-00'),
(3, 'vishal', 'fax format', 1, 'nothing', '0000-00-00'),
(4, 'golu', 'missile', 4, 'till sunday', '0000-00-00'),
(43, 'minnie', 'icecream', 10, ':)', '2012-12-12'),
(44, 'mamta', 'cup of coffee', 1, '................', '0007-08-16'),
(72, 'krishan', 'cup of coffee', 2, 'right now', '0007-08-16'),
(74, 'krishan', '', 0, '', '2010-08-16'),
(75, 'krishan', '', 0, '', '2010-08-16'),
(76, 'krishan', '', 0, '', '2010-08-16'),
(77, 'krishan', 'picnic', 0, '', '0000-00-00'),
(78, 'krishan', 'ice cream', 10, 'chilled', '2016-08-10'),
(79, 'krishan', 'nj', 0, '', '0000-00-00'),
(80, 'krishan', 'hot tea', 1, 'hbjbnnbkl', '2016-08-12'),
(81, 'krishan', 'hhujhi', 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `dep_struct`
--

CREATE TABLE IF NOT EXISTS `dep_struct` (
`id` int(200) NOT NULL,
  `name` varchar(30) NOT NULL,
  `position` varchar(20) NOT NULL,
  `ph_no` int(14) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dep_struct`
--

INSERT INTO `dep_struct` (`id`, `name`, `position`, `ph_no`) VALUES
(1, 'A Meera', 'AGM', 4473),
(2, 'Cdr(Retd) K Kumar', 'SR. DGM', 3776),
(3, 'Padmaja K', 'DGM', 4227),
(4, 'Rathnakar Achary', 'DGM', 4528),
(5, 'V Tejesh Kumar', 'DGM', 4639),
(6, 'A M Sowbhagya', 'MGR', 3662),
(7, 'Vinay Prakash', 'MGR', 3875),
(8, 'B Vanishri', 'MGR', 3066),
(9, 'Pramod Kumar Bhatt ', 'MGR', 2046);

-- --------------------------------------------------------

--
-- Table structure for table `fax`
--

CREATE TABLE IF NOT EXISTS `fax` (
`id` int(200) NOT NULL,
  `too` varchar(50) NOT NULL,
  `fax1` int(50) NOT NULL,
  `copy` varchar(50) NOT NULL,
  `fax2` int(50) NOT NULL,
  `frm` varchar(50) NOT NULL,
  `fax3` int(50) NOT NULL,
  `date` date NOT NULL,
  `sub` varchar(50) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `body` longtext NOT NULL,
  `regards` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fax`
--

INSERT INTO `fax` (`id`, `too`, `fax1`, `copy`, `fax2`, `frm`, `fax3`, `date`, `sub`, `ref`, `body`, `regards`, `name`) VALUES
(1, 'mamta', 12345, 'minnie', 67890, 'momo', 45678, '2016-07-22', 'fax app', 'minnie', 'hellooooooooooooooo everybody!!!!!!!!!!!!', 'sir', ''),
(2, 'mamta', 123, 'mamta', 123, 'mamta', 123, '0000-00-00', 'mamta', 'mamta', 'hello mamta ', 'mamta', 'mamta'),
(3, 'john@example.com', 0, 'Doe', 0, '', 0, '0000-00-00', '', '', '', '', 'John'),
(4, 'john@example.com', 0, 'Doe', 0, '', 0, '0000-00-00', '', '', '', '', 'John'),
(5, 'john@example.com', 0, 'Doe', 0, '', 0, '0000-00-00', '', '', '', '', 'John'),
(6, 'mamta', 123, 'mamta', 123, 'mamta', 123, '0000-00-00', 'mamta', 'mamta', 'hellllllllllllllllllllllllllllllllllooooooooooomammuuuuuuuuuu', 'mamta', 'mamta'),
(7, '', 0, '', 0, '', 0, '0000-00-00', '', '', '', '', ''),
(8, '', 0, 'huihjxlsjxn', 0, '', 0, '0000-00-00', '', '', '', '', ''),
(9, 'john@example.com', 0, 'Doe', 0, '', 0, '0000-00-00', '', '', '', '', 'John');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `password`) VALUES
('admin', '1234'),
('mamta', 'momo'),
('root', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `password`) VALUES
('1', '0'),
('2', '0'),
('krishan', 'krish'),
('shivesh', 'shiv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bdy`
--
ALTER TABLE `bdy`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demand`
--
ALTER TABLE `demand`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dep_struct`
--
ALTER TABLE `dep_struct`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fax`
--
ALTER TABLE `fax`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bdy`
--
ALTER TABLE `bdy`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `demand`
--
ALTER TABLE `demand`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `dep_struct`
--
ALTER TABLE `dep_struct`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fax`
--
ALTER TABLE `fax`
MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
