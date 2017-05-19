-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 03, 2017 at 01:55 PM
-- Server version: 5.5.54-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zigbee`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(1) DEFAULT '1',
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(15) DEFAULT NULL,
  `updated_at` int(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `level`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sangnt1905@gmail.com', '12345', 3, 'Nguyễn Thanh Sang', 'On', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `zigbee1`
--

CREATE TABLE IF NOT EXISTS `zigbee1` (
`id` int(10) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `temperature` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `zigbee1`
--

INSERT INTO `zigbee1` (`id`, `name`, `status`, `temperature`, `time`) VALUES
(9, 'C1', 'On', '27.30', 'Wed May  3 12:41:28 2017'),
(10, 'C1', 'On', '27.30', 'Wed May  3 12:41:38 2017'),
(11, 'C1', 'On', '27.30', 'Wed May  3 12:41:48 2017'),
(12, 'C1', 'On', '27.30', 'Wed May  3 12:41:58 2017'),
(13, 'C1', 'On', '27.30', 'Wed May  3 12:42:08 2017'),
(14, 'C1', 'On', '27.30', 'Wed May  3 12:42:18 2017'),
(15, 'C1', 'On', '27.30', 'Wed May  3 12:42:28 2017'),
(16, 'C1', 'On', '27.30', 'Wed May  3 12:42:38 2017'),
(17, 'C1', 'On', '27.30', 'Wed May  3 12:42:48 2017'),
(18, 'C1', 'On', '27.30', 'Wed May  3 12:42:58 2017'),
(19, 'C1', 'On', '27.30', 'Wed May  3 12:43:08 2017'),
(20, 'C1', 'On', '27.30', 'Wed May  3 12:43:18 2017'),
(21, 'C1', 'On', '27.30', 'Wed May  3 12:43:28 2017'),
(22, 'C1', 'On', '27.30', 'Wed May  3 12:43:38 2017'),
(23, 'C1', 'On', '27.30', 'Wed May  3 12:43:48 2017'),
(24, 'C1', 'On', '27.30', 'Wed May  3 12:43:58 2017'),
(25, 'C1', 'On', '27.30', 'Wed May  3 12:44:08 2017'),
(26, 'C1', 'On', '27.30', 'Wed May  3 12:44:18 2017'),
(27, 'C1', 'On', '27.30', 'Wed May  3 12:44:28 2017'),
(28, 'C1', 'On', '27.30', 'Wed May  3 12:44:38 2017'),
(29, 'C1', 'On', '27.30', 'Wed May  3 12:44:48 2017'),
(30, 'C1', 'On', '27.30', 'Wed May  3 12:44:58 2017'),
(31, 'C1', 'On', '27.30', 'Wed May  3 12:45:08 2017'),
(32, 'C1', 'On', '27.30', 'Wed May  3 12:45:18 2017'),
(33, 'C1', 'On', '27.30', 'Wed May  3 12:45:28 2017'),
(34, 'C1', 'On', '27.30', 'Wed May  3 12:45:38 2017'),
(35, 'C1', 'On', '27.30', 'Wed May  3 12:45:49 2017'),
(36, 'C1', 'On', '27.30', 'Wed May  3 12:45:59 2017'),
(37, 'C1', 'On', '27.30', 'Wed May  3 12:46:09 2017'),
(38, 'C1', 'On', '27.30', 'Wed May  3 12:46:19 2017'),
(39, 'C1', 'On', '27.30', 'Wed May  3 12:46:29 2017'),
(40, 'C1', 'On', '27.30', 'Wed May  3 12:46:39 2017'),
(41, 'C1', 'On', '27.30', 'Wed May  3 12:46:49 2017'),
(42, 'C1', 'On', '27.30', 'Wed May  3 12:46:59 2017'),
(43, 'C1', 'On', '27.30', 'Wed May  3 12:47:09 2017'),
(44, 'C1', 'On', '27.30', 'Wed May  3 12:47:19 2017'),
(45, 'C1', 'On', '27.30', 'Wed May  3 12:47:29 2017'),
(46, 'C1', 'On', '27.30', 'Wed May  3 12:47:39 2017'),
(47, 'C1', 'On', '27.30', 'Wed May  3 12:47:49 2017'),
(48, 'C1', 'On', '27.30', 'Wed May  3 12:47:59 2017'),
(49, 'C1', 'On', '27.30', 'Wed May  3 12:48:09 2017'),
(50, 'C1', 'On', '27.30', 'Wed May  3 12:48:19 2017'),
(51, 'C1', 'On', '27.30', 'Wed May  3 12:48:29 2017'),
(52, 'C1', 'On', '27.30', 'Wed May  3 12:48:39 2017'),
(53, 'C1', 'On', '27.30', 'Wed May  3 12:48:49 2017');

-- --------------------------------------------------------

--
-- Table structure for table `zigbee2`
--

CREATE TABLE IF NOT EXISTS `zigbee2` (
`id` int(10) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `temperature` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `zigbee2`
--

INSERT INTO `zigbee2` (`id`, `name`, `status`, `temperature`, `time`) VALUES
(10, 'C2', 'On', '24.50', 'Wed May  3 12:41:22 2017'),
(11, 'C2', 'On', '24.50', 'Wed May  3 12:41:32 2017'),
(12, 'C2', 'On', '24.50', 'Wed May  3 12:41:42 2017'),
(13, 'C2', 'On', '24.50', 'Wed May  3 12:41:52 2017'),
(14, 'C2', 'On', '24.50', 'Wed May  3 12:42:02 2017'),
(15, 'C2', 'On', '24.50', 'Wed May  3 12:42:12 2017'),
(16, 'C2', 'On', '24.50', 'Wed May  3 12:42:22 2017'),
(17, 'C2', 'On', '24.50', 'Wed May  3 12:42:32 2017'),
(18, 'C2', 'On', '24.50', 'Wed May  3 12:42:42 2017'),
(19, 'C2', 'On', '24.50', 'Wed May  3 12:42:52 2017'),
(20, 'C2', 'On', '24.50', 'Wed May  3 12:43:02 2017'),
(21, 'C2', 'On', '24.50', 'Wed May  3 12:43:12 2017'),
(22, 'C2', 'On', '24.50', 'Wed May  3 12:43:22 2017'),
(23, 'C2', 'On', '24.50', 'Wed May  3 12:43:32 2017'),
(24, 'C2', 'On', '24.50', 'Wed May  3 12:43:42 2017'),
(25, 'C2', 'On', '24.50', 'Wed May  3 12:43:52 2017'),
(26, 'C2', 'On', '24.50', 'Wed May  3 12:44:02 2017'),
(27, 'C2', 'On', '24.50', 'Wed May  3 12:44:12 2017'),
(28, 'C2', 'On', '24.50', 'Wed May  3 12:44:22 2017'),
(29, 'C2', 'On', '24.50', 'Wed May  3 12:44:32 2017'),
(30, 'C2', 'On', '24.50', 'Wed May  3 12:44:42 2017'),
(31, 'C2', 'On', '24.50', 'Wed May  3 12:44:52 2017'),
(32, 'C2', 'On', '24.50', 'Wed May  3 12:45:02 2017'),
(33, 'C2', 'On', '24.50', 'Wed May  3 12:45:12 2017'),
(34, 'C2', 'On', '24.50', 'Wed May  3 12:45:22 2017'),
(35, 'C2', 'On', '24.50', 'Wed May  3 12:45:32 2017'),
(36, 'C2', 'On', '24.50', 'Wed May  3 12:45:42 2017'),
(37, 'C2', 'On', '24.50', 'Wed May  3 12:45:52 2017'),
(38, 'C2', 'On', '24.50', 'Wed May  3 12:46:02 2017'),
(39, 'C2', 'On', '24.50', 'Wed May  3 12:46:12 2017'),
(40, 'C2', 'On', '24.50', 'Wed May  3 12:46:22 2017'),
(41, 'C2', 'On', '24.50', 'Wed May  3 12:46:32 2017'),
(42, 'C2', 'On', '24.50', 'Wed May  3 12:46:42 2017'),
(43, 'C2', 'On', '24.50', 'Wed May  3 12:46:52 2017'),
(44, 'C2', 'On', '24.50', 'Wed May  3 12:47:02 2017'),
(45, 'C2', 'On', '24.50', 'Wed May  3 12:47:12 2017'),
(46, 'C2', 'On', '24.50', 'Wed May  3 12:47:22 2017'),
(47, 'C2', 'On', '24.50', 'Wed May  3 12:47:32 2017'),
(48, 'C2', 'On', '24.50', 'Wed May  3 12:47:42 2017'),
(49, 'C2', 'On', '24.50', 'Wed May  3 12:47:52 2017'),
(50, 'C2', 'On', '24.50', 'Wed May  3 12:48:02 2017'),
(51, 'C2', 'On', '24.50', 'Wed May  3 12:48:12 2017'),
(52, 'C2', 'On', '24.50', 'Wed May  3 12:48:22 2017'),
(53, 'C2', 'On', '24.50', 'Wed May  3 12:48:32 2017'),
(54, 'C2', 'On', '24.50', 'Wed May  3 12:48:42 2017'),
(55, 'C2', 'On', '24.50', 'Wed May  3 12:48:52 2017');

-- --------------------------------------------------------

--
-- Table structure for table `zigbee3`
--

CREATE TABLE IF NOT EXISTS `zigbee3` (
`id` int(10) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `temperature` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zigbee1`
--
ALTER TABLE `zigbee1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zigbee2`
--
ALTER TABLE `zigbee2`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zigbee3`
--
ALTER TABLE `zigbee3`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `zigbee1`
--
ALTER TABLE `zigbee1`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `zigbee2`
--
ALTER TABLE `zigbee2`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `zigbee3`
--
ALTER TABLE `zigbee3`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
