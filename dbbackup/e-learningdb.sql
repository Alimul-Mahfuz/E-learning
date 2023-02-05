-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 01:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-learningdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `c_name`, `duration`, `price`, `category`, `user_id`, `description`) VALUES
(1, 'Advanced Computer Network', '3 Weeks', '12000 TK', 'Computer Science', 1, NULL),
(2, 'Artificial Intelligence And Expert System', '4 weeks', '800', 'Computational Algorithm', 10, 'Artificial intelligence (AI) is intelligence—perceiving, synthesizing, and inferring information—demonstrated by machines, as opposed to intelligence displayed by non-human animals and humans. Example tasks in which this is done include speech recognition'),
(4, 'Computer Graphics', '2 weeks', '80', 'Graphics and Game Development', 8, NULL),
(5, 'International Relation', '4 weeks', '300', 'Business Administration', 3, NULL),
(6, 'Integral Calculus', '4 weeks', '300', 'Mathematics', 10, NULL),
(7, 'Algorithm and Data Structure', '4 weeks', '300', 'Computational Algorithm', 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ins_qual`
--

CREATE TABLE `ins_qual` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `inst_name` varchar(255) NOT NULL,
  `degree` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ins_qual`
--

INSERT INTO `ins_qual` (`id`, `u_id`, `inst_name`, `degree`) VALUES
(1, 1, 'AIUB', 'BSC in CSE'),
(2, 10, 'Dhaka University', 'BSC in Mathematics'),
(3, 7, 'AIUB', 'Bsc in CSE');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `user_id`, `c_id`, `date`) VALUES
(2, 2, 1, '2023-02-05'),
(3, 2, 2, '2023-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `u_role` int(11) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `profileImage` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `u_role`, `phone`, `profileImage`, `address`) VALUES
(1, 'Alimul TUSHAR', 'alimulmahfuztushar@gmail.com', '456456', 1, '+88013164006', NULL, NULL),
(2, 'Alimul Mahfuz', 'alimul@gmail.com', '789789', 2, '01716722842', '../../model/user-profile-images/profileId2.png', 'Nikunja, Dhaka-1229'),
(3, 'Nafisa Molla', 'nafisa@gmail.com', '7895566', 1, '01759888566', NULL, NULL),
(4, 'Hossain Kabir', 'hk@gmail.com', '459963', 1, '0174896531', NULL, NULL),
(7, 'Ahnaf Tahmidul Huq', 'ahnaf@gmail.com', '1236456', 1, '01316425893', NULL, NULL),
(8, 'Ehsanuzzaman', 'ehs@gmail.com', '7413699', 1, '01316400215', NULL, NULL),
(9, 'Aziz Khan', 'aziz@gmail.com', '7489596', 1, '01713422586', NULL, NULL),
(10, 'Dilruba Yeasmin', 'dilruba@gmail.com', '123645566', 1, '01316422586', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `course_user_instructor` (`user_id`);

--
-- Indexes for table `ins_qual`
--
ALTER TABLE `ins_qual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_instructor` (`u_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `payment_course` (`c_id`),
  ADD KEY `payment_user` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ins_qual`
--
ALTER TABLE `ins_qual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `course_user_instructor` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ins_qual`
--
ALTER TABLE `ins_qual`
  ADD CONSTRAINT `user_instructor` FOREIGN KEY (`u_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_course` FOREIGN KEY (`c_id`) REFERENCES `courses` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
