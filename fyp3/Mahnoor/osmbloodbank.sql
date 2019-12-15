-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 08:05 PM
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
-- Database: `osmbloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `id` int(255) NOT NULL,
  `dName` varchar(20) COLLATE utf8_bin NOT NULL,
  `bagNumber` bigint(11) NOT NULL,
  `num` bigint(20) NOT NULL,
  `added_on` date NOT NULL,
  `age` int(20) NOT NULL,
  `gender` varchar(20) COLLATE utf8_bin NOT NULL,
  `bloodGroup` varchar(20) COLLATE utf8_bin NOT NULL,
  `hiv` varchar(3) COLLATE utf8_bin NOT NULL,
  `maleria` varchar(3) COLLATE utf8_bin NOT NULL,
  `typhoid` varchar(3) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`id`, `dName`, `bagNumber`, `num`, `added_on`, `age`, `gender`, `bloodGroup`, `hiv`, `maleria`, `typhoid`) VALUES
(6, 'Shaheer Khan', 1024, 3161024675, '2019-10-29', 22, 'male', 'O+', 'no', 'no', 'no'),
(7, 'Owais Wajid Khan', 1025, 3162959661, '2019-10-29', 23, 'male', 'A+', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('somadmin', 'somadmin123'),
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
