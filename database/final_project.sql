-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 12:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `e_id` int(11) NOT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `organization` text NOT NULL,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `currently_working_here` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`e_id`, `faculty_id`, `title`, `organization`, `from`, `to`, `currently_working_here`, `address`, `created_at`, `updated_at`) VALUES
(18, 116, 'testing', 'bacha khan universty', '2019', '2023', 'web codeigniter', 'Koragh Chowk Makkah Colony', '2023-02-19 16:12:30', '2023-02-19 16:12:30'),
(21, 116, 'testing2', ' BKUC', '2003', '2023', 'core php', 'ndn', '2023-05-12 12:18:34', '2023-05-12 12:18:34'),
(22, 1, '   networking ', '  bkuc', '2000', '2023', '   networking', '  bkuc', '2023-05-13 16:30:54', '2023-05-13 16:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `profile_picture` text NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `date_birth` date NOT NULL,
  `department` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `phone_no` decimal(20,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `faculty_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `profile_picture`, `first_name`, `last_name`, `email`, `password`, `country`, `state`, `city`, `date_birth`, `department`, `designation`, `phone_no`, `created_at`, `updated_at`, `faculty_role`) VALUES
(1, 'profile_picture2.png', 'Safi', 'Ullah khan', 'safiullah68281@gmail.com', '123', 'Pakistan', 'Punjab', 'charsadda', '2003-06-01', 'Zoology', '', '923443998332', '2023-02-07 09:48:23', '2023-02-07 09:48:23', 'Head of Department'),
(2, 'profile_picture.jpeg', 'Safi', 'Ullah', 'safiullah@gmail111.com', '123', 'Pakistan', 'Khyber Pakhtunkhwa', 'Mardan', '2023-03-09', 'Economics', '', '3443998332', '2023-03-09 07:35:42', '2023-03-09 07:35:42', 'faculty'),
(3, 'profile_picture2.jpg', 'Safi', 'khan', 'safiullahcs1122@eq3.com', '123', 'Pakistan', 'Khyber Pakhtunkhwa', 'Mardan', '2023-05-05', 'statistics', 'assistant professor', '344399833', '2023-05-03 08:28:23', '2023-05-03 08:28:23', 'faculty'),
(114, 'profile_picture5.jpeg', 'qari saib', 'karam', 'safiullah@gmail.com', '123', 'Pakistan', 'Khyber Pakhtunkhwa', 'Mardan', '2023-03-06', 'Zoology', 'assistant professor', '344399833', '2023-03-06 17:09:51', '2023-03-06 17:09:51', 'Head of Department'),
(116, 'profile_picture.jpg', 'tufil', 'khan khan', 'safikhan@gmail11.com', '123', 'Pakistan', 'Khyber Pakhtunkhwa', 'Mardan', '2023-03-06', 'computer science', 'lecturer', '344399833', '2023-03-06 17:17:34', '2023-03-06 17:17:34', 'faculty'),
(128, 'profile_picture.PNG', 'ibrar ahmad', 'khan', 'ibrar@gmail.com', '123', 'Pakistan', 'Khyber Pakhtunkhwa', 'Mardan', '1999-06-18', 'Pharmacy', '', '344399833', '2023-06-18 16:40:28', '2023-06-18 16:40:28', 'Faculty'),
(129, '', 'Muhammad', 'Sheraz', 'sheraz@bkuc.edu.pk', '123', '', '', '', '0000-00-00', 'computer science', '', '0', '2023-06-18 16:56:04', '2023-06-18 16:56:04', 'head of department'),
(130, 'profile_picture1.PNG', 'Safi', 'Ullah', 'safiullah112@gmail.com', '123', 'Pakistan', 'Khyber Pakhtunkhwa', 'Mardan', '2000-01-18', 'Computer Science', '', '3443998332', '2023-06-18 18:51:00', '2023-06-18 18:51:00', 'Faculty'),
(131, '', 'Sabir', 'Shah', 'sabir@bkuc.edu.pk', '12345678', '', '', '', '0000-00-00', 'Computer Science', '', '0', '2023-06-21 09:20:41', '2023-06-21 09:20:41', 'faculty');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `faculty_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'english', '2023-02-16 19:54:51', '2023-02-16 19:54:51'),
(2, 1, '', 'poshto', '2023-02-16 19:54:51', '2023-02-16 19:54:51'),
(3, 1, '', 'urdu', '2023-02-16 19:54:51', '2023-02-16 19:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `p_id` int(11) NOT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `journal` text DEFAULT NULL,
  `issn` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `page_nos` int(11) NOT NULL,
  `impact_factor` float DEFAULT NULL,
  `hec_category` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`p_id`, `faculty_id`, `journal`, `issn`, `year`, `page_nos`, `impact_factor`, `hec_category`, `created_at`, `updated_at`) VALUES
(1, 1, 'i am do not know what is', 11, '2020', 11, 2.333, 'what', '2023-02-16 19:54:38', '2023-02-16 19:54:38'),
(2, 3, 'what is this i do not kown kkk', 222, '2020', 223, 0, 'rrr', '2023-03-02 09:18:49', '2023-03-02 09:18:49'),
(25, 116, 'what this', 3343, '2022', 2324, 2.333, 'fifty', '2023-05-04 12:27:52', '2023-05-04 12:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `level_of_education` varchar(200) NOT NULL,
  `address` text DEFAULT NULL,
  `from_date` varchar(255) NOT NULL,
  `to_date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `faculty_id`, `level_of_education`, `address`, `from_date`, `to_date`, `created_at`, `updated_at`) VALUES
(2, 3, 'Mphil', 'charsadaa', '2019', '2022', '2023-03-08 11:10:03', '2023-03-08 11:10:03'),
(72, 1, 'PHD', 'ya allah shuker de', '2020', '2023', '2023-03-02 05:21:52', '2023-03-02 05:21:52'),
(75, 2, 'PHD', '/z. dskaDNkad', '2020', '2023', '2023-03-06 18:39:05', '2023-03-06 18:39:05'),
(77, 114, 'PHD', 'hjghk', '2020', '2022', '2023-03-08 18:44:50', '2023-03-08 18:44:50'),
(78, 2, ' PostDoc', 'Koragh Chowk Makkah Colony', '2020', '2023', '2023-03-10 06:50:54', '2023-03-10 06:50:54'),
(80, 116, 'PostDoc', 'china', '2020', '2022', '2023-04-17 07:06:06', '2023-04-17 07:06:06'),
(81, 116, 'Mphil', 'how are you ', '2019', '2022', '2023-05-04 12:14:03', '2023-05-04 12:14:03'),
(82, 128, 'PHD', 'charsdda', '2020', '2023', '2023-06-18 16:44:35', '2023-06-18 16:44:35'),
(83, 130, 'PHD', 'astrila', '2020', '2022', '2023-06-18 18:53:46', '2023-06-18 18:53:46'),
(84, 131, 'Mphil', 'Bacha Khan University', '2020', '2029', '2023-06-21 09:28:16', '2023-06-21 09:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `s_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `level_of_skill` varchar(255) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`s_id`, `title`, `description`, `level_of_skill`, `faculty_id`, `created_at`, `updated_at`) VALUES
(1, 'web w', 'salman khan', '', 2, '2023-02-19 16:11:30', '2023-02-19 16:11:30'),
(2, 'web wxdsd', 'codeigniter', '', 1, '2023-02-25 16:27:54', '2023-02-25 16:27:54'),
(3, 'webeeee', 'when', 'Beginner', 1, '2023-03-02 05:01:12', '2023-03-02 05:01:12'),
(39, 'testing', 'testing', 'Beginner', 114, '2023-03-11 10:26:02', '2023-03-11 10:26:02'),
(41, 'web developer', ' codeigniter', 'Beginner', 3, '2023-05-04 11:50:36', '2023-05-04 11:50:36'),
(42, 'frontend developer ', ' html css ', '', 126, '2023-05-04 12:01:20', '2023-05-04 12:01:20'),
(43, 'cpp', ' wgah', '', 116, '2023-05-04 12:08:11', '2023-05-04 12:08:11'),
(45, 'web', 'yi', 'Intermediate', 114, '2023-05-15 05:31:05', '2023-05-15 05:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'safi ullah', 'safi@bkuc.edu.pk', '123', 'admin'),
(2, 'safi ullah khan ', 'safiullah@gmail.com', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
