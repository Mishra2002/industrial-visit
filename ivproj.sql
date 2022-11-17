-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 06:08 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `clg` varchar(100) NOT NULL,
  `location` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `mobile`, `clg`, `location`, `price`) VALUES
(1, 'qbuqbw', 'admin@admin.com', 287382, 'weuiwhe', 'hdvuwdh', 4000),
(2, 'qbuqbw', 'admin@admin.com', 287382, 'weuiwhe', 'hdvuwdh', 4000),
(3, 'qbuqbw', 'admin@admin.com', 0, '', 'munnar', 4000),
(4, 'qbuqbw', 'admin@admin.com', 0, '', 'munnar', 4000),
(5, 'qbuqbw', 'admin@admin.com', 0, '', 'munnar', 4000),
(6, 'qbuqbw', 'admin@admin.com', 0, '', 'munnar', 4000),
(7, 'qbuqbw', 'admin@admin.com', 0, '', 'munnar', 4000),
(8, 'qbuqbw', 'admin@admin.com', 0, '', 'munnar', 4000),
(9, 'qbuqbw', 'admin@admin.com', 0, '', 'munnar', 4000),
(10, 'qbuqbw', 'admin@admin.com', 0, '', 'munnar', 4000),
(11, 'qbuqbw', 'admin@admin.com', 0, '', 'munnar', 4000),
(12, 'qbuqbw', 'admin@admin.com', 2147483647, 'nnwi2jw', '5000', 0),
(13, 'qbuqbw', 'admin@admin.com', 123455, 'bedenkcn', 'banglore', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `msg`) VALUES
(1, '', '', 0, ''),
(2, '', 'yadavabh99@gmail.com', 2147483647, 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh'),
(3, '', 'yadavabh99@gmail.com', 2147483647, 'mmmmmmmmmmmmmm'),
(4, 'Sunil', 'sssssssssssssss', 2147483647, 'ssssssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `loc` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `loc`, `price`) VALUES
(1, 'munnar', 4000),
(2, 'banglore', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `phonenumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `phonenumber`) VALUES
(1, 'abcd', 'admin@admin.com', 'abcd', 'student', 1234567890),
(2, 'abcd', 'admin@admin.com', 'abcd', 'student', 1234567890),
(3, 'acbucb', 'bsjwvyd@gmail.com', 'whjdbui2b', 'agent', 1223),
(4, 'qbuqbw', 'admin@admin.com', 'wswbjb', 'agent', 12234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
