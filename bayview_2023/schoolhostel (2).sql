-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 11:52 AM
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
-- Database: `schoolhostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'matthew@mail.com', '12345', '2023-10-31 09:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `bedspace`
--

CREATE TABLE `bedspace` (
  `sn` bigint(20) UNSIGNED NOT NULL,
  `bid` int(4) DEFAULT NULL,
  `rid` int(4) DEFAULT NULL,
  `hid` int(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sid` int(8) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bedspace`
--

INSERT INTO `bedspace` (`sn`, `bid`, `rid`, `hid`, `created_at`, `updated_at`, `sid`) VALUES
(1, 1, 1, 1, '2023-11-03 12:23:38', '2023-11-06 10:13:02', 0),
(2, 2, 1, 1, '2023-11-03 12:23:38', '2023-11-06 10:24:11', 2),
(3, 1, 2, 1, '2023-11-03 12:23:39', '2023-11-03 13:02:56', 1),
(4, 2, 2, 1, '2023-11-03 12:23:39', '2023-11-03 12:23:39', 0),
(5, 1, 3, 1, '2023-11-03 12:23:39', '2023-11-06 10:23:49', 2),
(6, 2, 3, 1, '2023-11-03 12:23:39', '2023-11-03 13:02:08', 2),
(7, 1, 4, 1, '2023-11-03 12:23:39', '2023-11-03 12:23:39', 0),
(8, 2, 4, 1, '2023-11-03 12:23:39', '2023-11-03 12:23:39', 0),
(9, 1, 5, 1, '2023-11-03 12:23:39', '2023-11-06 10:24:43', 2),
(10, 2, 5, 1, '2023-11-03 12:23:40', '2023-11-06 10:23:58', 2),
(11, 1, 1, 2, '2023-11-03 13:12:49', '2023-11-06 10:14:58', 2),
(12, 2, 1, 2, '2023-11-03 13:12:49', '2023-11-03 13:12:49', 0),
(13, 3, 1, 2, '2023-11-03 13:12:49', '2023-11-06 10:29:51', 2),
(14, 4, 1, 2, '2023-11-03 13:12:50', '2023-11-03 13:12:50', 0),
(15, 1, 2, 2, '2023-11-03 13:12:50', '2023-11-03 13:12:50', 0),
(16, 2, 2, 2, '2023-11-03 13:12:50', '2023-11-06 10:29:56', 2),
(17, 3, 2, 2, '2023-11-03 13:12:50', '2023-11-03 13:12:50', 0),
(18, 4, 2, 2, '2023-11-03 13:12:50', '2023-11-03 13:12:50', 0),
(19, 1, 3, 2, '2023-11-03 13:12:50', '2023-11-03 13:12:50', 0),
(20, 2, 3, 2, '2023-11-03 13:12:50', '2023-11-06 10:25:49', 6),
(21, 3, 3, 2, '2023-11-03 13:12:50', '2023-11-03 13:12:50', 0),
(22, 4, 3, 2, '2023-11-03 13:12:51', '2023-11-06 10:25:34', 2),
(23, 1, 1, 3, '2023-11-06 10:32:50', '2023-11-06 10:32:50', 0),
(24, 2, 1, 3, '2023-11-06 10:32:50', '2023-11-06 10:32:50', 0),
(25, 1, 2, 3, '2023-11-06 10:32:51', '2023-11-06 10:32:51', 0),
(26, 2, 2, 3, '2023-11-06 10:32:51', '2023-11-06 10:32:51', 0),
(27, 1, 3, 3, '2023-11-06 10:32:51', '2023-11-06 10:32:51', 0),
(28, 2, 3, 3, '2023-11-06 10:32:51', '2023-11-06 10:32:51', 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `sn` bigint(20) UNSIGNED NOT NULL,
  `sid` varchar(10) DEFAULT NULL,
  `hid` varchar(10) DEFAULT NULL,
  `rid` varchar(10) DEFAULT NULL,
  `bid` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `address` varchar(30) NOT NULL,
  `numberofrooms` varchar(10) DEFAULT NULL,
  `numberofbedspace` int(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`id`, `name`, `address`, `numberofrooms`, `numberofbedspace`, `created_at`) VALUES
(1, 'Villareal Hostel', 'Ikeja,Lagos Nigeria', '5', 2, '2023-11-03 12:23:38'),
(2, 'Trinity Hostel', 'Futa South Gate', '3', 4, '2023-11-03 13:12:49'),
(3, 'Akure Hostel', 'Akure', '3', 2, '2023-11-06 10:32:50');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `sn` bigint(20) UNSIGNED NOT NULL,
  `id` varchar(10) NOT NULL,
  `hid` varchar(10) NOT NULL,
  `status` int(3) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`sn`, `id`, `hid`, `status`, `created_at`) VALUES
(1, '1', '1', 0, '2023-11-03 12:23:38'),
(2, '2', '1', 0, '2023-11-03 12:23:38'),
(3, '3', '1', 0, '2023-11-03 12:23:39'),
(4, '4', '1', 0, '2023-11-03 12:23:39'),
(5, '5', '1', 0, '2023-11-03 12:23:39'),
(6, '1', '2', 0, '2023-11-03 13:12:49'),
(7, '2', '2', 0, '2023-11-03 13:12:50'),
(8, '3', '2', 0, '2023-11-03 13:12:50'),
(9, '1', '3', 0, '2023-11-06 10:32:50'),
(10, '2', '3', 0, '2023-11-06 10:32:50'),
(11, '3', '3', 0, '2023-11-06 10:32:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `created_at`) VALUES
(1, 'peter@mail.com', 'temitayo', NULL),
(2, 'matthew@mail.com', '12345', NULL),
(3, 'john@mail.com', '12345', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `sn` (`id`);

--
-- Indexes for table `bedspace`
--
ALTER TABLE `bedspace`
  ADD UNIQUE KEY `sn` (`sn`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD UNIQUE KEY `sn` (`sn`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD UNIQUE KEY `sn` (`sn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bedspace`
--
ALTER TABLE `bedspace`
  MODIFY `sn` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `sn` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `sn` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
