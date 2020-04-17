-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 09:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bekreta`
--

-- --------------------------------------------------------

--
-- Table structure for table `financial`
--

CREATE TABLE `financial` (
  `id` int(11) NOT NULL,
  `iname` text NOT NULL,
  `iy1` text NOT NULL,
  `iy2` text NOT NULL,
  `iy3` text NOT NULL,
  `sval1` text NOT NULL,
  `sval2` text NOT NULL,
  `sval3` text NOT NULL,
  `ename` text NOT NULL,
  `ey1` text NOT NULL,
  `ey2` text NOT NULL,
  `ey3` text NOT NULL,
  `mval1` bigint(20) NOT NULL DEFAULT 0,
  `mval2` bigint(20) NOT NULL DEFAULT 0,
  `mval3` bigint(20) NOT NULL DEFAULT 0,
  `aname` text NOT NULL,
  `ay1` text NOT NULL,
  `ay2` text NOT NULL,
  `ay3` text NOT NULL,
  `lname` text NOT NULL,
  `ly1` text NOT NULL,
  `ly2` text NOT NULL,
  `ly3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `financial`
--
ALTER TABLE `financial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `financial`
--
ALTER TABLE `financial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
