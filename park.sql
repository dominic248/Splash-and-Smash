-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 09:46 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `park`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `visitor_name` varchar(100) NOT NULL,
  `Vdate` varchar(100) NOT NULL,
  `total_tickets` int(255) NOT NULL,
  `adult` int(255) NOT NULL,
  `child` int(255) NOT NULL,
  `delrequest` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `userid`, `phoneno`, `visitor_name`, `Vdate`, `total_tickets`, `adult`, `child`, `delrequest`) VALUES
(32, 18, '1234567890', 'Sayli Mhatre', '2019-11-14', 1, 1, 0, 0),
(33, 18, '1234567890', 'Sayli Mhatre', '2019-11-12', 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `passwd` varchar(100) DEFAULT NULL,
  `phoneno` varchar(12) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `isadmin` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `email`, `passwd`, `phoneno`, `userid`, `isadmin`) VALUES
('Sayli', 'Mhatre', 'sayli@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1234567890', 18, 1),
('rahul', 'damn', 'rahul.cdesai@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9870662032', 19, 0),
('hkuhiku', 'hkuhkuh', 'jgjuyjuyj9@gmail.com', 'b923fe3697977da570d3d42bb7e895b6', '9594183245', 20, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
