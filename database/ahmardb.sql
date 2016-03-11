-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2016 at 07:04 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahmardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `lajnah`
--

CREATE TABLE `lajnah` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lajnah`
--

INSERT INTO `lajnah` (`id`, `username`, `password`) VALUES
(5, 'eewinkk', '490529d97c45f506ba876b71500b5206'),
(6, 'azlan', 'daf83f0e31f2266ce75bbb4b961e602c'),
(7, 'najem', '6bfe72430c232c31773860b41cb5b579');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `website` varchar(200) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `token` int(11) DEFAULT NULL,
  `nim` varchar(50) NOT NULL,
  `tlp` varchar(15) DEFAULT NULL,
  `foto` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `website`, `city`, `lat`, `lng`, `timestamp`, `token`, `nim`, `tlp`, `foto`) VALUES
(29, 'Erwin A Latif', 'eewinkk@gmail.com', 'http://eewinkk@gmail.com', 'subang', -7.824593, 110.365766, '2016-03-04 04:33:33', 174614, '331303', '62 85640421735', 'https://lh3.googleusercontent.com/-ZQyhh-wK3Vw/VtXy7YhheBI/AAAAAAAAAOY/1_MoU-jivM0/s512-Ic42/coegtenan.png'),
(35, 'M Syarief Hidayatull', 'syarifmuhamad4@gmail', 'http://mokaos.com', 'Kendal', -7.823987, 110.365879, '2016-03-04 06:04:04', 368264, '30230', '085601416909', 'https://scontent-sit4-1.xx.fbcdn.net/hphotos-xtl1/v/t1.0-9/12806156_803237266447124_5167652459094030031_n.jpg?oh=bd6f9c2083a892a2d3f4ace213aeaf0b&oe=5757C487');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lajnah`
--
ALTER TABLE `lajnah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lajnah`
--
ALTER TABLE `lajnah`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
