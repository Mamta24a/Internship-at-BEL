-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2017 at 01:14 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

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
) ENGINE=InnoDB AUTO_INCREMENT=143310 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`id`, `first_name`, `parent_id`, `hide`) VALUES
(1, 'A MEERA, (AGM)', 0, 0),
(143284, 'V Tejesh kumar, (DGM)', 1, 0),
(143285, 'Padmaja K,(DGM)', 1, 0),
(143286, 'Rathnakar Achary, (DGM)', 1, 0),
(143287, 'A M Sowbhagya, (MGR)', 143285, 0),
(143288, 'B Vanishri, (MGR)', 143286, 0),
(143289, 'Vinay Prakash, (MGR)', 143284, 0),
(143290, 'B Vanishri, (MGR)', 143284, 0),
(143291, 'Kshitij Sinha, (DM)', 143287, 0),
(143292, 'Pramod Kumar Bhatt, (MGR)', 143285, 0),
(143293, 'Gopi N, (DM)', 143286, 0),
(143295, 'Deepak, (SE)', 143291, 0),
(143303, 'Girish, (SE) ', 143293, 0),
(143307, 'sanjay S, (DE)', 143293, 0);

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
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=143310;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
