-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 28, 2023 at 06:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bayview_hostels`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `year_id` int(11) NOT NULL,
  `a_year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`year_id`, `a_year`) VALUES
(1, '2020/2021'),
(2, '2021/2022'),
(3, '2022/2023'),
(4, '2023/2024');

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `block_id` int(11) NOT NULL,
  `block_name` varchar(20) NOT NULL,
  `hostel_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`block_id`, `block_name`, `hostel_type`) VALUES
(1, 'Haligah', 'Regular Female'),
(2, 'Maatalla', 'Premium Female'),
(3, 'Niang', 'Regular Male'),
(4, 'Abdi', 'Premium Male');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `year_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `proof_of_payment` varbinary(1000) DEFAULT NULL,
  `status` varchar(4) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cleaner`
--

CREATE TABLE `cleaner` (
  `worker_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel_no` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cleaner`
--

INSERT INTO `cleaner` (`worker_id`, `fname`, `lname`, `email`, `tel_no`) VALUES
(1, 'Davida', 'Samah', 'dsamah@gmail.com', '+222 5555-9087'),
(2, 'Jocelyn', 'Dimas', 'joccyd@gmail.com', '+222 7943-5687'),
(3, 'Abele', 'Hayford', 'abel.hay@gmail.com', '+222 5230-8394'),
(4, 'Lenny', 'Amor', 'lamor@gmail.com', '+222 2219-0184'),
(5, 'Terry', 'White', 'whiteterry@gmail.com', '+222 7943-7348'),
(6, 'Diablo', 'Gonzalez', 'dgonzalez@gmail.com', '+222 8237-1824'),
(7, 'Nikolas', 'Kennel', 'nikken@gmail.com', '+222 2374-9128'),
(8, 'Smith', 'Williamson', 'smithwill@gmail.com', '+222 2343-2342'),
(9, 'Henry', 'Dangers', 'hdanger@gmail.com', '+222 2349-3294'),
(10, 'Jordyn', 'Tyson', 'jtyson@gmail.com', '+222 2833-3023'),
(11, 'Breada', 'Gabba', 'b.gabba@gmail.com', '+222 8201-3020'),
(12, 'Felicity', 'Baron', 'baron.fel@gmail.com', '+222 9075-2380'),
(13, 'Samuella', 'Blankton', 'sammy.blank@gmail.com', '+222 8234-2302'),
(14, 'Josephine', 'Baron', 'jbaron@gmail.com', '+222 3456-0987'),
(15, 'Dorothie', 'Brown', 'dotty.brown@gmail.com', '+222 2343-4594'),
(16, 'Bill', 'Bush', 'bbush@gmail.com', '+222 5680-9867'),
(17, 'Mardar', 'Mook', 'mook.mardar@gmail.com', '+222 2345-2346'),
(18, 'Maame', 'Lincoln', 'mamlincoln@gmail.com', '+222 9089-3247'),
(19, 'Jonnie', 'Biden', 'jobiden@gmail.com', '+222 4379-6274'),
(20, 'Annabel', 'Nixon', 'annixon@gmail.com', '+222 5349-9854'),
(21, 'Lorem', 'Ipsum', 'lorem.ipsum@gmail.com', '+222 5567-9854'),
(22, 'Leroya', 'Otis', 'leroy.otis@gmail.com', '+222 9449-0824'),
(23, 'Sica', 'Mbappe', 'sica.mbappe@gmail.com', '+222 5678-0923'),
(24, 'Benji', 'Opoku', 'b.opoku@gmail.com', '+222 3245-1820'),
(25, 'Ahja', 'Rameed', 'ahrameed@gmail.com', '+222 3456-9120');

-- --------------------------------------------------------

--
-- Table structure for table `cleaner_schedule`
--

CREATE TABLE `cleaner_schedule` (
  `cleaner_id` int(11) NOT NULL,
  `cleaning_area` varchar(50) NOT NULL,
  `no_of_rooms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cleaner_schedule`
--

INSERT INTO `cleaner_schedule` (`cleaner_id`, `cleaning_area`, `no_of_rooms`) VALUES
(1, 'Haligah Kitchenette ', 0),
(2, 'Maatalla Kitchenette ', 0),
(3, 'Grounds', 0),
(4, 'Abdi Kitchenette', 0),
(5, 'Niang Kitchenette', 0),
(6, 'Abdi Ground Floor', 6),
(7, 'Abdi First Floor', 6),
(8, 'Abdi Second Floor', 6),
(9, 'Abdi Third Floor', 6),
(10, 'Maatalla Ground Floor', 6),
(11, 'Maatalla First Floor', 6),
(12, 'Maatalla Second Floor', 6),
(13, 'Maatalla Third Floor', 6),
(14, 'Haligah Ground Floor', 3),
(15, 'Haligah Ground Floor', 3),
(16, 'Niang Ground Floor', 3),
(17, 'Niang Ground Floor', 3),
(18, 'Haligah First Floor', 3),
(19, 'Niang First Floor', 3),
(20, 'Haligah First Floor', 3),
(21, 'Niang First Floor', 3),
(22, 'Haligah Second Floor', 3),
(23, 'Haligah Second Floor', 3),
(24, 'Niang Second Floor', 3),
(25, 'Niang Second Floor', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hostel_user`
--

CREATE TABLE `hostel_user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL DEFAULT '',
  `last_name` varchar(50) NOT NULL DEFAULT '',
  `user_tel` varchar(15) NOT NULL DEFAULT '',
  `user_email` varchar(30) NOT NULL DEFAULT '',
  `user_gender` char(1) NOT NULL DEFAULT '',
  `user_password` varchar(100) NOT NULL DEFAULT '',
  `user_role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hostel_user`
--

INSERT INTO `hostel_user` (`user_id`, `first_name`, `last_name`, `user_tel`, `user_email`, `user_gender`, `user_password`, `user_role`) VALUES
(1, 'Abdul', 'Wakeeb', '+222 4567-0239', 'abdul.wakeeb@gmail.com', 'M', 'Awakeeb@gr8', 0),
(2, 'Francoi', 'Rivère', '+222 4589-0239', 'francoir@gmail.com', 'F', 'frRiv3r!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(4) NOT NULL,
  `capacity` int(11) NOT NULL,
  `floor_no` int(11) NOT NULL,
  `price` float NOT NULL,
  `block_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `capacity`, `floor_no`, `price`, `block_id`) VALUES
(1, 'A1', 2, 0, 6000, 4),
(2, 'A10', 2, 1, 6000, 4),
(3, 'A11', 2, 1, 6000, 4),
(4, 'A12', 2, 1, 6000, 4),
(5, 'A13', 2, 2, 6000, 4),
(6, 'A2', 2, 0, 6000, 4),
(7, 'A3', 2, 0, 6000, 4),
(8, 'A4', 2, 0, 6000, 4),
(9, 'A5', 2, 0, 6000, 4),
(10, 'A6', 2, 0, 6000, 4),
(11, 'A7', 2, 1, 6000, 4),
(12, 'A8', 2, 1, 6000, 4),
(13, 'A9', 2, 1, 6000, 4),
(14, 'A14', 2, 2, 6000, 4),
(15, 'A15', 2, 2, 6000, 4),
(16, 'A16', 2, 2, 6000, 4),
(17, 'A17', 2, 2, 6000, 4),
(18, 'A18', 2, 2, 6000, 4),
(19, 'A19', 2, 3, 6000, 4),
(20, 'A20', 2, 3, 6000, 4),
(21, 'A21', 2, 3, 6000, 4),
(22, 'A22', 2, 3, 6000, 4),
(23, 'A23', 2, 3, 6000, 4),
(24, 'A24', 2, 3, 6000, 4),
(25, 'M1', 2, 0, 6000, 2),
(26, 'M2', 2, 0, 6000, 2),
(27, 'M3', 2, 0, 6000, 2),
(28, 'M4', 2, 0, 6000, 2),
(29, 'M5', 2, 0, 6000, 2),
(30, 'M6', 2, 0, 6000, 2),
(31, 'M7', 2, 1, 6000, 2),
(32, 'M8', 2, 1, 6000, 2),
(33, 'M9', 2, 1, 6000, 2),
(34, 'M10', 2, 1, 6000, 2),
(35, 'M11', 2, 1, 6000, 2),
(36, 'M12', 2, 1, 6000, 2),
(37, 'M13', 2, 2, 6000, 2),
(38, 'M14', 2, 2, 6000, 2),
(39, 'M15', 2, 2, 6000, 2),
(40, 'M16', 2, 2, 6000, 2),
(41, 'M17', 2, 2, 6000, 2),
(42, 'M18', 2, 2, 6000, 2),
(43, 'M19', 2, 3, 6000, 2),
(44, 'M20', 2, 3, 6000, 2),
(45, 'M21', 2, 3, 6000, 2),
(46, 'M22', 2, 3, 6000, 2),
(47, 'M23', 2, 3, 6000, 2),
(48, 'M24', 2, 3, 6000, 2),
(49, 'N1', 3, 0, 5000, 3),
(50, 'N2', 3, 0, 5000, 3),
(51, 'N3', 3, 0, 5000, 3),
(52, 'N4', 4, 0, 4000, 3),
(53, 'N5', 4, 0, 4000, 3),
(54, 'N6', 4, 0, 4000, 3),
(55, 'N7', 3, 1, 5000, 3),
(56, 'N8', 3, 1, 5000, 3),
(57, 'N9', 3, 1, 5000, 3),
(58, 'N10', 4, 1, 4000, 3),
(59, 'N11', 4, 1, 4000, 3),
(60, 'N12', 4, 1, 4000, 3),
(61, 'N13', 3, 2, 4000, 3),
(62, 'N14', 3, 2, 5000, 3),
(63, 'N15', 3, 2, 5000, 3),
(64, 'N16', 4, 2, 4000, 3),
(65, 'N17', 4, 2, 4000, 3),
(66, 'N18', 4, 2, 4000, 3),
(67, 'H1', 3, 0, 5000, 1),
(68, 'H2', 3, 0, 5000, 1),
(69, 'H3', 3, 0, 5000, 1),
(70, 'H4', 4, 0, 4000, 1),
(71, 'H5', 4, 0, 4000, 1),
(72, 'H6', 4, 0, 4000, 1),
(73, 'H7', 3, 1, 5000, 1),
(74, 'H8', 3, 1, 5000, 1),
(75, 'H9', 3, 1, 5000, 1),
(76, 'H10', 4, 1, 4000, 1),
(77, 'H11', 4, 1, 4000, 1),
(78, 'H12', 4, 1, 4000, 1),
(79, 'H13', 3, 2, 5000, 1),
(80, 'H14', 3, 2, 5000, 1),
(81, 'H15', 3, 2, 5000, 1),
(82, 'H16', 4, 2, 4000, 1),
(83, 'H17', 4, 2, 4000, 1),
(84, 'H18', 4, 2, 4000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `school_term`
--

CREATE TABLE `school_term` (
  `term_id` int(11) NOT NULL,
  `term` varchar(10) NOT NULL,
  `time_period` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_term`
--

INSERT INTO `school_term` (`term_id`, `term`, `time_period`) VALUES
(1, 'Term One', 'Sept-Dec'),
(2, 'Term Two', 'Jan-Mar'),
(3, 'Term Three', 'Apr-Jul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`year_id`);

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `year_id` (`year_id`);

--
-- Indexes for table `cleaner`
--
ALTER TABLE `cleaner`
  ADD PRIMARY KEY (`worker_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `tel_no` (`tel_no`);

--
-- Indexes for table `cleaner_schedule`
--
ALTER TABLE `cleaner_schedule`
  ADD UNIQUE KEY `cleaner_id` (`cleaner_id`);

--
-- Indexes for table `hostel_user`
--
ALTER TABLE `hostel_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_tel` (`user_tel`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD UNIQUE KEY `room_name` (`room_name`),
  ADD KEY `block_id` (`block_id`);

--
-- Indexes for table `school_term`
--
ALTER TABLE `school_term`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_year`
--
ALTER TABLE `academic_year`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cleaner`
--
ALTER TABLE `cleaner`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `hostel_user`
--
ALTER TABLE `hostel_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `school_term`
--
ALTER TABLE `school_term`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `hostel_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`term_id`) REFERENCES `school_term` (`term_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_4` FOREIGN KEY (`year_id`) REFERENCES `academic_year` (`year_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cleaner_schedule`
--
ALTER TABLE `cleaner_schedule`
  ADD CONSTRAINT `cleaner_schedule_ibfk_1` FOREIGN KEY (`cleaner_id`) REFERENCES `cleaner` (`worker_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`block_id`) REFERENCES `block` (`block_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
