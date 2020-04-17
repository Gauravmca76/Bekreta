-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 12:22 PM
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
-- Table structure for table `demomiles`
--

CREATE TABLE `demomiles` (
  `id` int(11) NOT NULL,
  `mdate` varchar(500) NOT NULL,
  `mname` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demomiles`
--

INSERT INTO `demomiles` (`id`, `mdate`, `mname`) VALUES
(1, 'null', 'null'),
(2, '20/02/2016', 'AC'),
(3, 'null', 'null'),
(4, 'null', 'null'),
(5, 'null', 'null'),
(6, 'null', 'null'),
(8, 'null', 'null'),
(9, 'null', 'null'),
(10, 'null', 'null'),
(11, '[\"20/02/2016\",\"20/02/2016\"]', '[\"AC\",\"Tables\"]'),
(12, '[\"20/02/2016\"]', '[\"AC\"]'),
(13, 'null', 'null'),
(14, 'null', 'null'),
(15, 'null', 'null'),
(16, 'null', 'null'),
(17, 'null', 'null'),
(18, 'null', 'null'),
(19, 'null', 'null'),
(27, '[\"20/02/2016\",\"20/02/2016\",\"20/02/2016\",\"20/02/2016\"]', '[\"AC\",\"Chaires\",\"Tables\",\"Chaires\"]'),
(28, '[\"20/02/2016\",\"20/02/2016\",\"20/02/2016\",\"20/02/2016\"]', '[\"AC\",\"Chaires\",\"Tables\",\"Chaires\"]');

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

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `mdate` varchar(2000) NOT NULL,
  `mname` varchar(2000) NOT NULL,
  `empname` varchar(2000) NOT NULL,
  `design` varchar(2000) NOT NULL,
  `exp` varchar(2000) NOT NULL,
  `about` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `mdate`, `mname`, `empname`, `design`, `exp`, `about`) VALUES
(1, '[\"20/02/2016\"]', '[\"Ac\"]', '[\"Gaurav Singh\"]', '[\"Programmer\"]', '[\"1\"]', '[\"Hardwork\"]'),
(2, '[\"20/02/2016\",\"20/02/2016\"]', '[\"Ac\",\"Computers\"]', '[\"Gaurav Singh\",\"Aarti Pawar\"]', '[\"Programmer\"]', '[\"1\",\"1\"]', '[\"Hardwork\",\"smart\"]'),
(3, '[\"20/02/2016\",\"20/02/2016\"]', '[\"Ac\",\"Computers\"]', '[\"Gaurav Singh\",\"Aarti Pawar\"]', '[\"Programmer\",\"Tester\"]', '[\"1\",\"1\"]', '[\"Hardwork\",\"Smart\"]');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `olname` varchar(2000) NOT NULL,
  `sy1` varchar(2000) NOT NULL,
  `sy2` varchar(2000) NOT NULL,
  `sy3` varchar(2000) NOT NULL,
  `ds` int(11) NOT NULL,
  `ds1` int(11) NOT NULL,
  `ds2` int(11) NOT NULL,
  `chs` int(11) NOT NULL,
  `chs1` int(11) NOT NULL,
  `chs2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `olname`, `sy1`, `sy2`, `sy3`, `ds`, `ds1`, `ds2`, `chs`, `chs1`, `chs2`) VALUES
(1, '[\"fb\"]', '[\"2000\"]', '[\"2000\"]', '[\"2000\"]', 0, 0, 0, 0, 0, 0),
(2, '[\"fb\",\"Youtube\"]', '[\"2000\",\"2000\"]', '[\"2000\",\"2000\"]', '[\"2000\",\"2000\"]', 0, 0, 0, 0, 0, 0),
(3, '[\"fb\",\"Instagram\"]', '[\"2000\",\"1000\"]', '[\"2000\",\"1000\"]', '[\"2000\",\"1000\"]', 0, 0, 0, 0, 0, 0),
(4, '[\"fb\",\"Instagram\",\"Emarket\"]', '[\"2000\",\"1000\",\"200\"]', '[\"2000\",\"1000\",\"200\"]', '[\"2000\",\"1000\",\"200\"]', 0, 0, 0, 0, 0, 0),
(5, '[\"fb\",\"Instagram\",\"Business Card\"]', '[\"2000\",\"1000\",\"4000\"]', '[\"2000\",\"1000\",\"4000\"]', '[\"2000\",\"1000\",\"4000\"]', 300, 300, 300, 500, 500, 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demomiles`
--
ALTER TABLE `demomiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial`
--
ALTER TABLE `financial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `demomiles`
--
ALTER TABLE `demomiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `financial`
--
ALTER TABLE `financial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
