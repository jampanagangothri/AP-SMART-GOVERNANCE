-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2023 at 06:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(100) NOT NULL,
  `first name` varchar(100) NOT NULL,
  `last name` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `firstname`, `lastname`, `message`, `city`, `contact`, `email`) VALUES
(1, '', '', 'hello', 'bestavaripeta', '7093474382', 'R190675@rguktrkv.ac.in'),
(2, 'harshitha', 'reddy', 'hello', 'cumbum', '7093474382', 'R190675@rguktrkv.ac.in'),
(3, 'harshitha', 'reddy', 'hello', 'cumbum', '7093474382', 'R190675@rguktrkv.ac.in'),
(4, 'harshitha', 'reddy', 'hello web technology', 'bestavaripeta', '7093474382', 'R190734@rguktrkv.ac.in'),
(5, 'harshi', 'reddy', 'heloo', 'cumbum', '70934567', 'r190734@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
