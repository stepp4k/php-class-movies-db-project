-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 03:58 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ab_unique`
--
CREATE DATABASE IF NOT EXISTS `ab_unique` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ab_unique`;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `rating`, `date`) VALUES
(1, 'Test movie', 3, '2021-04-08 10:37:54'),
(2, 'Testing', 3, '2021-04-08 10:40:01'),
(3, 'The Grapes of Wrath', 3, '2021-04-08 10:41:46'),
(4, 'The Shawshank Redemption', 3, '2021-04-08 10:46:00'),
(5, 'Please work', 1, '2021-04-08 14:58:31'),
(6, 'Help me', 3, '2021-04-08 14:59:46'),
(7, '', 0, '2021-04-08 15:13:25'),
(8, 'DAS', 1, '2021-04-08 15:22:21'),
(9, '', 1, '2021-04-08 15:22:32'),
(10, 'Test2', 2, '2021-04-08 15:59:29'),
(11, 'Qwerty', 1, '2021-04-08 15:59:40'),
(12, 'Reea', 1, '2021-04-08 15:59:49'),
(13, 'tetst3', 3, '2021-04-08 16:01:28'),
(14, 'bare minumum', 1, '2021-04-08 16:06:46'),
(15, 'Rewq', 1, '2021-04-08 16:29:10'),
(16, 'One', 1, '2021-04-08 16:30:17'),
(17, 'Two', 2, '2021-04-08 16:30:23'),
(18, 'Three', 3, '2021-04-08 16:30:29'),
(19, 'QQQ', 1, '2021-04-08 16:32:19'),
(20, 'WWW', 1, '2021-04-08 16:32:23'),
(21, 'EEE', 1, '2021-04-08 16:32:27'),
(22, '', 0, '2021-04-08 16:36:33'),
(23, '', 0, '2021-04-08 16:36:40'),
(24, '', 0, '2021-04-08 16:37:16'),
(25, '', 0, '2021-04-08 16:38:02'),
(26, 'fgjhjf', 1, '2021-04-08 16:38:09'),
(27, '', 0, '2021-04-08 16:38:13'),
(28, '', 0, '2021-04-08 16:39:30'),
(29, '', 0, '2021-04-08 16:39:47'),
(30, '', 0, '2021-04-08 16:39:50'),
(31, '', 0, '2021-04-08 16:41:20'),
(32, '', 0, '2021-04-08 16:41:25'),
(33, 'dasad', 3, '2021-04-08 16:41:34'),
(34, 'killme', 3, '2021-04-08 16:42:57'),
(35, 'killme', 3, '2021-04-08 16:43:24'),
(36, 'killme', 3, '2021-04-08 16:43:54'),
(37, '', 0, '2021-04-08 17:02:55'),
(38, 'SSS', 1, '2021-04-08 17:03:06'),
(39, '', 0, '2021-04-08 17:08:52'),
(40, 'SAda', 1, '2021-04-08 17:34:10'),
(41, 'Aaa', 1, '2021-04-08 18:45:27'),
(42, 'Last try', 1, '2021-04-08 18:45:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
