-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 06:35 AM
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
-- Table structure for table `aits_student_login`
--

CREATE TABLE `aits_student_login` (
  `user` varchar(10) NOT NULL,
  `result` varchar(22) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `f_name` varchar(10) NOT NULL,
  `l_name` varchar(10) NOT NULL,
  `ft_name` varchar(10) NOT NULL,
  `m_name` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `adhar` varchar(4) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `category` varchar(10) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `phn` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_loc` varchar(50) NOT NULL,
  `s_addres` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `district` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aits_student_login`
--

INSERT INTO `aits_student_login` (`user`, `result`, `pass`, `f_name`, `l_name`, `ft_name`, `m_name`, `date`, `adhar`, `gender`, `category`, `mail`, `phn`, `s_name`, `s_loc`, `s_addres`, `city`, `district`, `state`, `pin`) VALUES
('20012301', '', 'babylucifer', 'sahil', 'none', 'suleman', 'kaise', '2001-12-02', '1234', 'male', 'obc', '1sahilsulemna@gmail.com', 7303, 'sbv', 'sbv a block vikas puri', 'vikas puri ', 'new delhi', 'delhi', 'delhi', 110059),
('20012302', '', '2001@baby', 'akash', 'nishad', 'xyz', 'mxyz', '2001-12-02', '4567', 'male', 'st', '1akash@gmail.com', 123456789, 'sdjj', 'sjnsdjnsjdnsdjnjsdcnsdjcsjdcnj', 'vnslsklnskljs', 'skcnsdjkcnsdjknc', 'delhi', 'delhi', 110058);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aits_student_login`
--
ALTER TABLE `aits_student_login`
  ADD PRIMARY KEY (`user`),
  ADD KEY `user` (`user`),
  ADD KEY `user_2` (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
