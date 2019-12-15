-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 01:49 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blores4`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbanks`
--

CREATE TABLE `bloodbanks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `bgname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `branchCode` int(255) NOT NULL,
  `contact` int(20) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodbanks`
--

INSERT INTO `bloodbanks` (`id`, `name`, `url`, `bgname`, `email`, `branchCode`, `contact`, `address`) VALUES
(1, 'Owais Blood Bank', 'http://localhost/fyp2/Owais/restApi.php', 'bloodGroup', 'osmblood@gmail.com', 1024, 2134648696, 'Shaz Bungalows, R82'),
(2, 'Shaheer  Blood Bank', 'http://localhost/fyp2/shaheer/restapi.php', '', 'sombloodbank@gmail.com', 1025, 2147483647, 'R-82 Shaz Bungalows, Gulzar-e-Hijri.'),
(3, 'Mahnoor Blood Bank', 'http://localhost/fyp2/Mahnoor/restApi.php', '', 'mahnoorali@gmail.com', 1026, 123, '123');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `bloodGroup` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `date`, `email`, `bloodGroup`) VALUES
(1, '', NULL, 'A+'),
(2, '2019-Dec-03 09:54:15', 'shr.khn1997@gmail.com', ''),
(3, '', NULL, 'A+'),
(4, '', NULL, 'O+'),
(5, '2019-Dec-03 09:54:49', 'shr.khn1997@gmail.com', 'A+'),
(6, '', NULL, 'a+'),
(7, '2019-Dec-03 09:55:09', 'shr.khn1997@gmail.com', 'O+'),
(8, '', NULL, 'A+'),
(9, '2019-Dec-03 09:56:14', 'shr.khn1997@gmail.com', 'A+'),
(10, '', NULL, 'A+'),
(11, '2019-Dec-03 12:27:33', 'shr.khn1997@gmail.com', 'A+'),
(12, '', NULL, 'A+'),
(13, '', NULL, 'A+'),
(14, '', NULL, 'A+'),
(15, '', NULL, 'A+'),
(16, '', NULL, 'O+'),
(17, '2019-Dec-04 11:09:50', 'shr.khn1997@gmail.com', 'A+'),
(18, '', NULL, 'o+'),
(19, '2019-Dec-04 11:10:03', 'shr.khn1997@gmail.com', 'o+');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `contactNumber` bigint(13) DEFAULT NULL,
  `cnic` bigint(13) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `report` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `contactNumber`, `cnic`, `id`, `email`, `report`) VALUES
('Shaheer', '123', 2134648696, 123123123, 5, 'shr.khn1997@gmail.com', NULL),
('owais', '123', 123, 123, 6, 'owaiswajidkhan@gmail.com', NULL),
('Razameer', '123', 123, 123, 7, 'raza@gmail.com', NULL),
('Haris', '123', 123, 123, 8, 'haris@gmail.com', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbanks`
--
ALTER TABLE `bloodbanks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
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
-- AUTO_INCREMENT for table `bloodbanks`
--
ALTER TABLE `bloodbanks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
