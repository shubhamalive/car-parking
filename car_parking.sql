-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2020 at 08:46 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `parking_lot`
--

CREATE TABLE `parking_lot` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `parking_id` varchar(10) NOT NULL,
  `user_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parking_lot`
--

INSERT INTO `parking_lot` (`id`, `name`, `parking_id`, `user_id`) VALUES
(1, 'A1', '2', 0),
(2, 'A2', '2', 0),
(3, 'A3', '2', 0),
(4, 'A4', '2', 0),
(5, 'A5', '2', 0),
(6, 'A6', '2', 0),
(7, 'B1', '2', 0),
(8, 'B2', '2', 0),
(9, 'B3', '2', 0),
(10, 'B4', '2', 0),
(11, 'B5', '2', 0),
(12, 'B6', '2', 0),
(13, 'C1', '2', 0),
(14, 'C2', '2', 0),
(15, 'C3', '2', 0),
(16, 'C4', '2', 0),
(17, 'C5', '2', 0),
(18, 'C6', '2', 0),
(19, 'D1', '2', 0),
(20, 'D2', '2', 0),
(21, 'D3', '2', 0),
(22, 'D4', '2', 0),
(23, 'D5', '2', 0),
(24, 'D6', '2', 0),
(25, 'E1', '2', 0),
(26, 'E2', '2', 0),
(27, 'E3', '2', 0),
(28, 'E4', '2', 0),
(29, 'E5', '2', 0),
(30, 'E6', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `parking_id` int(11) NOT NULL,
  `parking_status` varchar(20) NOT NULL,
  `parking_color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`parking_id`, `parking_status`, `parking_color`) VALUES
(1, 'Occupied', 'red'),
(2, 'Vacant', 'green');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `user_mobile` varchar(20) NOT NULL,
  `user_parking_lot` varchar(20) NOT NULL,
  `user_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parking_lot`
--
ALTER TABLE `parking_lot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`parking_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parking_lot`
--
ALTER TABLE `parking_lot`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
