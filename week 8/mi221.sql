-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 06:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mi221`
--

CREATE TABLE `mi221` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `gender` enum('female','male','other','') NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mi221`
--

INSERT INTO `mi221` (`id`, `name`, `email`, `website`, `message`, `gender`, `reg_date`) VALUES
(1, 'John', 'john@example.com', 'Doe', '', '', '2024-01-30 04:43:57'),
(2, 'Heiro', 'hu@example.com', 'Usana', '', '', '2024-01-30 05:04:08'),
(3, 'Heiro', 'hu@example.com', 'Usana', '', '', '2024-01-30 05:20:42'),
(4, 'Heiro', 'hu@example.com', 'Usana', '', '', '2024-01-30 05:20:44'),
(6, 'Stephen Curry', 'stp@gmail.com;', 'http://localhost/webprogmi221/', '', '', '2024-01-30 05:23:04'),
(7, '', ';', '', '', '', '2024-02-01 00:28:17'),
(8, '', ';', '', '', '', '2024-02-01 00:29:00'),
(9, '', ';', '', '', '', '2024-02-01 00:33:54'),
(10, '', ';', '', '', '', '2024-02-01 00:54:53'),
(11, '', ';', '', '', '', '2024-02-02 03:54:01'),
(12, 'Heiro Sibud Usana', 'blackyusana123@gmail.com', 'http://localhost/webprogmi221/', 'test', '', '2024-02-02 04:42:41'),
(13, 'Heiro Sibud Usana', 'blackyusana123@gmail.com', 'http://localhost/webprogmi221/', 'test', '', '2024-02-02 04:42:44'),
(14, '', '', '', '', '', '2024-02-02 04:42:46'),
(15, 'Heiro Sibud Usana', 'blackyusana123@gmail.com', 'http://localhost/webprogmi221/', 'test', '', '2024-02-02 04:42:58'),
(16, 'Heiro', 'blackyusana123@gmail.com', 'http://localhost/webprogmi221/', 'test', 'male', '2024-02-02 04:54:10'),
(17, 'Heiro', 'blackyusana123@gmail.com', 'http://localhost/webprogmi221/', 'test', 'male', '2024-02-02 04:55:15'),
(18, 'Heiro', 'blackyusana123@gmail.com', 'http://localhost/webprogmi221/', 'test', 'male', '2024-02-02 04:55:17'),
(19, '', '', '', '', '', '2024-02-02 04:57:39'),
(20, 'Heiro Sibud Usana', 'blackyusana123@gmail.com', 'http://localhost/webprogmi221/', 'test', 'male', '2024-02-02 04:57:48'),
(21, 'Heiro Sibud Usana', 'blackyusana123@gmail.com', 'http://localhost/webprogmi221/', 'test', 'male', '2024-02-02 04:58:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mi221`
--
ALTER TABLE `mi221`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mi221`
--
ALTER TABLE `mi221`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
