-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2017 at 12:43 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsone`
--

-- --------------------------------------------------------

--
-- Table structure for table `adds`
--

CREATE TABLE `adds` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `isize` varchar(255) NOT NULL,
  `uri` varchar(2000) NOT NULL,
  `hide` varchar(255) NOT NULL,
  `hit` varchar(255) NOT NULL DEFAULT '0',
  `cat` varchar(350) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pwr` varchar(255) NOT NULL,
  `hide` varchar(255) NOT NULL DEFAULT '0',
  `sid` varchar(255) NOT NULL,
  `forgotcode` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `fullname`, `password`, `email`, `phone`, `pwr`, `hide`, `sid`, `forgotcode`) VALUES
(9, 'admin', 'ABIR KHAN', '21232f297a57a5a743894a0e4a801fc3', 'abirkhan75@gmail.com', '', '100', '0', 'e73796b548ab7a3023d020713639f4db', '');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` int(11) NOT NULL,
  `cnm` varchar(255) NOT NULL,
  `mnm` varchar(255) NOT NULL,
  `isl` varchar(255) NOT NULL,
  `msl` varchar(255) NOT NULL,
  `hide` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `general_setting`
--

CREATE TABLE `general_setting` (
  `id` int(11) NOT NULL,
  `sitetitle` varchar(255) NOT NULL,
  `wcmsg` blob NOT NULL,
  `pageat` int(11) NOT NULL,
  `color` varchar(6) NOT NULL,
  `lid` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_setting`
--

INSERT INTO `general_setting` (`id`, `sitetitle`, `wcmsg`, `pageat`, `color`, `lid`) VALUES
(1, 'NewsONE', 0x3c64697620616c69676e3d2263656e746572223e3c666f6e742073697a653d2235223e3c623e574520415245204e4557534f4e453c2f623e3c2f666f6e743e3c666f6e742073697a653d2233223e3c753e3c623e3c62723e3c62723e56657279206561737920746f207573652c205374726f6e67206275742073696d706c65204e657773205075626c697368696e6720506c6174666f726d2e203c62723e3c2f623e3c2f753e3c2f666f6e743e3c2f6469763e, 10, '8e44ad', 7);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `ttl` varchar(2000) NOT NULL,
  `img` varchar(2555) NOT NULL,
  `thumb` varchar(2555) NOT NULL,
  `btext` blob,
  `desk` varchar(255) NOT NULL,
  `cros` varchar(255) NOT NULL,
  `cats` int(11) DEFAULT NULL,
  `subcat` int(11) NOT NULL,
  `tm` varchar(255) NOT NULL,
  `who` varchar(255) NOT NULL,
  `hide` varchar(255) NOT NULL DEFAULT '0',
  `headlines` varchar(255) NOT NULL DEFAULT '0',
  `main` varchar(255) NOT NULL DEFAULT '0',
  `hits` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `id` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `cnm` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adds`
--
ALTER TABLE `adds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_setting`
--
ALTER TABLE `general_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adds`
--
ALTER TABLE `adds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `general_setting`
--
ALTER TABLE `general_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
