-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2022 at 06:09 PM
-- Server version: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `studenttable`
--

CREATE TABLE `studenttable` (
  `sln` int(6) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studenttable`
--

INSERT INTO `studenttable` (`sln`, `firstname`, `lastname`, `fathername`, `address`, `mobile`, `email`, `time`) VALUES
(30, 'abc', 'def', 'ilj', 'hadg', '4354387365', 'ab@hui.com', '2022-05-23 15:21:22'),
(31, 'ikl', 'fdg', 'hgfadgf', 'bagfhg', '4566875986', 'gu8@gmail.com', '2022-05-23 15:21:41'),
(37, 'etetete', 'ffghjkh', 'jksdhfjkq', 'bhfj', '5578656565', 'jhafg@abc.com', '2022-06-09 13:31:51'),
(38, 'vfdjh', 'g asdfig', 'gcfhgq', 'ff', '5782529985', 'aafgf@hahf.com', '2022-06-09 16:07:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studenttable`
--
ALTER TABLE `studenttable`
  ADD PRIMARY KEY (`sln`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studenttable`
--
ALTER TABLE `studenttable`
  MODIFY `sln` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
