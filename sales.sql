-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 12:02 PM
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
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
