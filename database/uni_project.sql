-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 04:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uni_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `dep_id` int(11) NOT NULL,
  `department_name` text NOT NULL,
  `cat_of_department` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`dep_id`, `department_name`, `cat_of_department`) VALUES
(1, 'Computer science', 'science'),
(2, 'Economics', 'art'),
(3, 'Political Science', 'art'),
(4, 'Sociology', 'art'),
(5, 'English', 'art'),
(6, 'Statistics', 'science'),
(7, 'Mathematics', 'science'),
(8, 'Zoology', 'science'),
(9, 'botany', 'science'),
(10, 'Pharmacy', 'science'),
(11, ' mangment science', 'science'),
(12, 'Agriculture', 'science'),
(13, 'poshto', 'art'),
(16, 'physics', 'science'),
(17, 'educational', 'art');

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
(23, 136, ' head  of IT', ' bacha khan university', '2020', '2023', ' le', ' char', '2023-06-24 07:34:09', '2023-06-24 07:34:09'),
(24, 133, 'web', 'bacha khan uni', '2022', '2023', 'dd', 'zz', '2023-06-25 03:35:36', '2023-06-25 03:35:36'),
(25, 133, 'we', 'swat', '2022', '2023', 'wwww', 'ww', '2023-06-25 03:43:37', '2023-06-25 03:43:37'),
(26, 133, ' zz', ' zz', '2022', '2023', ' zz', ' zz', '2023-06-25 03:46:43', '2023-06-25 03:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `title_fa` text NOT NULL,
  `profile_picture` text NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `date_birth` date NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `phone_no` decimal(20,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `faculty_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `title_fa`, `profile_picture`, `first_name`, `last_name`, `email`, `password`, `country`, `state`, `city`, `date_birth`, `department_id`, `designation`, `phone_no`, `created_at`, `updated_at`, `faculty_role`) VALUES
(133, 'Mr.', 'profile_picture6.JPG', 'Safi', 'Ullah', 'safiullah@gmail.com', '123', 'Pakistan', 'Balochistan', 'Mardan', '2000-05-10', 1, 'lecture', '344399833', '2023-06-22 17:16:42', '2023-06-22 17:16:42', 'Faculty'),
(135, '', '', 'Safi', 'Ullah', 'safiullahcs1122@gmail.com', '123', '', '', '', '0000-00-00', 13, '', '0', '2023-06-23 09:31:00', '2023-06-23 09:31:00', 'faculty'),
(136, 'Dr.', 'profile_picture3.JPG', 'Mr. Muhammad', 'sheraz', 'sheraz@gmail.com', '123', 'Pakistan', 'Punjab', 'Mardan', '2000-02-29', 1, 'lecture', '3443998332', '2023-06-23 15:16:19', '2023-06-23 15:16:19', 'head of department'),
(137, '', '', 'Safi khan', 'qq', 'safiullah1122@gmail.com', '123', '', '', '', '0000-00-00', 13, '', '0', '2023-06-24 17:32:05', '2023-06-24 17:32:05', 'faculty'),
(138, '', '', 'Dr. Mohammad ', 'Abrar', 'Abrar@bkuc.edu.pk', '123', '', '', '', '0000-00-00', 1, '', '0', '2023-06-25 07:50:09', '2023-06-25 07:50:09', 'faculty'),
(139, '', '', 'Safi', 'Ullahk998', 'safiullah@gmail11.com', '123', '', '', '', '0000-00-00', 1, '', '0', '2023-06-25 15:27:54', '2023-06-25 15:27:54', 'Head Of Department');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `l_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`l_id`, `faculty_id`, `description`, `created_at`, `updated_at`) VALUES
(92, 133, 'poshto', '2023-07-03 08:19:28', '2023-07-03 08:19:28');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `p_id` int(11) NOT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `journal` text DEFAULT NULL,
  `issue` int(11) NOT NULL,
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

INSERT INTO `publications` (`p_id`, `faculty_id`, `title`, `link`, `journal`, `issue`, `issn`, `year`, `page_nos`, `impact_factor`, `hec_category`, `created_at`, `updated_at`) VALUES
(26, 136, '', '', ' i do not know ', 0, 13, '2022', 13, 1.33, 'fifty', '2023-06-24 09:42:46', '2023-06-24 09:42:46'),
(27, 136, '', '', ' what is this ', 0, 23, '2022', 23, 2.2, 'kmf', '2023-06-24 09:43:37', '2023-06-24 09:43:37'),
(32, 136, ' Industrial polluted soil borne fungi decolorize the recalcitrant azo dyes Synozol red HF–6BN and Synozol black B', ' https://www.sciencedirect.com/science/article/pii/S0147651320312185', ' ss', 2, 2, '2022', 22, 2.333, 'kmf', '2023-07-03 08:07:33', '2023-07-03 08:07:33');

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
(85, 136, 'PHD', 'web', '2020', '2023', '2023-06-23 04:29:40', '2023-06-23 04:29:40'),
(87, 133, 'BS', 'bacha khan', '2022', '2023', '2023-06-25 04:16:42', '2023-06-25 04:16:42'),
(88, 133, 'Master', 'aa', '2022', '2022', '2023-06-25 04:17:09', '2023-06-25 04:17:09'),
(92, 136, 'Master/Ms (18 Years)Degree', 'mardan', '2022', '2023', '2023-07-01 07:25:24', '2023-07-01 07:25:24');

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
(46, 'web', 'codeigniter 4', 'Intermediate', 133, '2023-06-25 06:04:24', '2023-06-25 06:04:24');

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
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`dep_id`);

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
  ADD PRIMARY KEY (`l_id`);

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
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
