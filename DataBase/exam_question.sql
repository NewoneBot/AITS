-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 06:36 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gdfims_ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_question`
--

CREATE TABLE `exam_question` (
  `s_no` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `o1` varchar(20) NOT NULL,
  `o2` varchar(20) NOT NULL,
  `o3` varchar(20) NOT NULL,
  `o4` varchar(20) NOT NULL,
  `answer` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_question`
--

INSERT INTO `exam_question` (`s_no`, `question`, `o1`, `o2`, `o3`, `o4`, `answer`) VALUES
(1, 'chouse right option ', 'a', 'b', 'c', 'd', 'a'),
(2, 'chouse right option ', 'a', 'b', 'c', 'd', 'b'),
(3, 'chouse right option ', 'a', 'b', 'c', 'd', 'c'),
(4, 'chouse right option ', 'a', 'b', 'c', 'd', 'd'),
(5, 'chouse right option ', 'a', 'b', 'c', 'd', 'a'),
(6, 'chouse right option ', 'a', 'b', 'c', 'd', 'b'),
(7, 'chouse right option ', 'a', 'b', 'c', 'd', 'c'),
(8, 'chouse right option ', 'a', 'b', 'c', 'd', 'd'),
(9, 'chouse right option ', 'a', 'b', 'c', 'd', 'a'),
(10, 'chouse right option ', 'a', 'b', 'c', 'd', 'b'),
(11, 'chouse right option ', 'a', 'b', 'c', 'd', 'c'),
(12, 'chouse right option ', 'a', 'b', 'c', 'd', 'd'),
(13, 'chouse right option ', 'a', 'b', 'c', 'd', 'a'),
(14, 'chouse right option ', 'a', 'b', 'c', 'd', 'b'),
(15, 'chouse right option ', 'a', 'b', 'c', 'd', 'c'),
(16, 'chouse right option ', 'a', 'b', 'c', 'd', 'd'),
(17, 'chouse right option ', 'a', 'b', 'c', 'd', 'a'),
(18, 'chouse right option ', 'a', 'b', 'c', 'd', 'b'),
(19, 'chouse right option ', 'a', 'b', 'c', 'd', 'c'),
(20, 'chouse right option ', 'a', 'b', 'c', 'd', 'd'),
(21, 'chouse right option ', 'a', 'b', 'c', 'd', 'a'),
(22, 'chouse right option ', 'a', 'b', 'c', 'd', 'b'),
(23, 'chouse right option ', 'a', 'b', 'c', 'd', 'c'),
(24, 'chouse right option ', 'a', 'b', 'c', 'd', 'd'),
(25, 'chouse right option ', 'a', 'b', 'c', 'd', 'a'),
(26, 'chouse right option ', 'a', 'b', 'c', 'd', 'b'),
(27, 'chouse right option ', 'a', 'b', 'c', 'd', 'c'),
(28, 'chouse right option ', 'a', 'b', 'c', 'd', 'd'),
(29, 'chouse right option ', 'a', 'b', 'c', 'd', 'a'),
(30, 'chouse right option ', 'a', 'b', 'c', 'd', 'b'),
(31, 'chouse right option ', 'a', 'b', 'c', 'd', 'c'),
(32, 'chouse right option ', 'a', 'b', 'c', 'd', 'd'),
(33, 'chouse right option ', 'a', 'b', 'c', 'd', 'a'),
(34, 'chouse right option ', 'a', 'b', 'c', 'd', 'b'),
(35, 'chouse right option ', 'a', 'b', 'c', 'd', 'c'),
(36, 'chouse right option ', 'a', 'b', 'c', 'd', 'd'),
(37, 'chouse right option ', 'a', 'b', 'c', 'd', 'a'),
(38, 'chouse right option ', 'a', 'b', 'c', 'd', 'b'),
(39, 'chouse right option ', 'a', 'b', 'c', 'd', 'c'),
(40, 'chouse right option ', 'a', 'b', 'c', 'd', 'd'),
(41, 'chouse right option ', 'a', 'b', 'c', 'd', 'a'),
(42, 'chouse right option ', 'a', 'b', 'c', 'd', 'b'),
(43, 'chouse right option ', 'a', 'b', 'c', 'd', 'c'),
(44, 'chouse right option ', 'a', 'b', 'c', 'd', 'd'),
(45, 'chouse right option ', 'a', 'b', 'c', 'd', 'a'),
(46, 'chouse right option ', 'a', 'b', 'c', 'd', 'b'),
(47, 'chouse right option ', 'a', 'b', 'c', 'd', 'c'),
(48, 'chouse right option ', 'a', 'b', 'c', 'd', 'd'),
(49, 'chouse right option ', 'a', 'b', 'c', 'd', 'a'),
(50, 'chouse right option ', 'a', 'b', 'c', 'd', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_question`
--
ALTER TABLE `exam_question`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_question`
--
ALTER TABLE `exam_question`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
