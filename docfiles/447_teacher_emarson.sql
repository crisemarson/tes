-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2020 at 03:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emarson`
--

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE `calendar` (
  `id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `date`, `time`, `title`, `text`) VALUES
(3, 'Thursday 13 February 2020', '15:59', 'das', 'dasdas adas asd asda asda'),
(6, 'Friday 14 February 2020', '02:03', 'partyparty partyparty asdasd as', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper. Fusce pulvinar libero vel li');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(50) NOT NULL,
  `employernumber` varchar(255) NOT NULL,
  `categoryname` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `submittedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `employernumber`, `categoryname`, `date`, `submittedby`) VALUES
(1, '', 'commitment', '', ''),
(2, '', 'knowledge of subject', '', ''),
(3, '', 'teaching for independent learning', '', ''),
(4, '', 'management learning', '', ''),
(5, '', 'suicide', '2019-09-07 01:15:53', ''),
(6, '', '', '2019-09-07 02:02:16', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `employernumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coursecode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coursename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `submittedby` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `employernumber`, `coursecode`, `coursename`, `date`, `submittedby`) VALUES
(1, '2013', 'bsit', 'tech info', '2020-02-12 01:43:01', 'cris'),
(2, '2013', 'cs', 'comsci', '2020-02-12 01:43:33', 'cris');

-- --------------------------------------------------------

--
-- Table structure for table `deanuser`
--

CREATE TABLE `deanuser` (
  `id` int(11) NOT NULL,
  `identitynumber` int(11) NOT NULL,
  `username` varchar(254) NOT NULL,
  `name` varchar(254) NOT NULL,
  `lastname` varchar(254) NOT NULL,
  `password` varchar(254) NOT NULL,
  `role` enum('active','inactive') NOT NULL,
  `department` varchar(254) NOT NULL,
  `status` enum('Dean','Teacher','Chair Person','student') NOT NULL,
  `image` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `employernumber` varchar(255) NOT NULL,
  `Department_Code` varchar(255) NOT NULL,
  `Department_Name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `submittedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `employernumber`, `Department_Code`, `Department_Name`, `date`, `submittedby`) VALUES
(1, '', 'cs', 'comsi', '2019-09-07 16:10:34', 'emarson'),
(2, '2013', 'asd', '123', '2019-09-10 13:53:48', 'Cris'),
(3, '2013', '12333', 'aaasss', '2019-09-10 13:54:21', 'Cris'),
(4, '2013', 'hackx', 'anj', '2019-09-13 16:54:55', 'Cris');

-- --------------------------------------------------------

--
-- Table structure for table `eventactivity`
--

CREATE TABLE `eventactivity` (
  `id` int(50) NOT NULL,
  `date` varchar(254) NOT NULL,
  `textarea` varchar(10000) NOT NULL,
  `images` text NOT NULL,
  `submittedby` varchar(254) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventactivity`
--

INSERT INTO `eventactivity` (`id`, `date`, `textarea`, `images`, `submittedby`) VALUES
(123, '', '', '164289819-fire-wallpapers.jpg', 'Cris'),
(124, '', '', '164289819-fire-wallpapers.jpg', 'Cris'),
(125, '', '', '', 'Cris'),
(126, '', '', '47-476071_svg-library-library-azalea-drawing-flower-wreath-transparent.png', 'Cris'),
(127, '', '', '164289819-fire-wallpapers.jpg', 'Cris'),
(128, '', '', '_pdp_sq_.jfif', 'Cris'),
(129, '', '', '164289819-fire-wallpapers.jpg', 'Cris'),
(130, '', '', 'pic.jpg', 'Cris'),
(131, '02/11/2020', 'asdas', '_pdp_sq_.jfif', 'Cris');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `questiontitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `questiontitle`, `question`) VALUES
(1, 'COMMITMENT', 'Demonstrates sensitivity to student\'s ability to attend and absorb content information.');

-- --------------------------------------------------------

--
-- Table structure for table `questionaire`
--

CREATE TABLE `questionaire` (
  `id` int(11) NOT NULL,
  `employernumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `questionstitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `submittedby` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questionaire`
--

INSERT INTO `questionaire` (`id`, `employernumber`, `question`, `questionstitle`, `date`, `submittedby`) VALUES
(5, '2013', '', 'TEACHING FOR INDEPENDENT LEARNING', '2020-02-12 12:27:15', 'cris'),
(6, '2013', '', 'COMMITMENT', '2020-02-12 12:27:53', 'cris'),
(7, '2013', '', 'KNOWLEDGE OF SUBJECT', '2020-02-12 12:28:03', 'cris');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `section` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `submittedby` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section`, `date`, `submittedby`) VALUES
(2, 'asd', '2020-02-12 00:23:41', 'cris'),
(3, 'dsa', '2020-02-12 00:27:32', 'cris');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(50) NOT NULL,
  `instructorname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `submittedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `instructorname`, `course`, `semester`, `section`, `department`, `year`, `subject`, `date`, `submittedby`) VALUES
(19, 'cris Emarson', 'BSIT', '20', 'ab', '123', '2019-2020', 'PROG 2', '2019-10-04 21:27:32', 'Cris'),
(20, 'teacher lamprea', 'BSCS', '20', 'ab', 'comsi', '2019-2020', 'PROG 2', '2019-10-13 21:49:49', 'Cris'),
(21, 'sai chi', 'BSCS', '20', 'ab', 'comsi', '2015-2016', 'PROG 2', '2019-10-13 23:46:44', 'Cris'),
(22, '', '', '', '', '', '', '', '2019-10-22 13:30:38', 'Cris');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `employernumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subjname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `submittedby` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `employernumber`, `subcode`, `subjname`, `date`, `submittedby`) VALUES
(1, '2008', 'a', 'a1', '', ''),
(2, '2013', 'prog2', 'programming', '2020-02-12 01:28:00', 'cris'),
(3, '2013', 'prog2', 'programming', '2020-02-12 01:28:15', 'cris'),
(4, '2013', 'prog1', 'a1', '2020-02-12 01:30:35', 'cris'),
(5, '2013', 'prog3', 'sd', '2020-02-12 01:31:09', 'cris');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `identitynumber` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('Dean','Chair Person','Student','Teacher') COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive','','') COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `identitynumber`, `username`, `name`, `lastname`, `password`, `role`, `department`, `status`, `image`) VALUES
(410, 2013, 'cris', 'cris', 'emarson', 'cris', 'Dean', 'comsci', 'active', 'favicon.jpg'),
(447, 2015, 'teacher', 'teacher', 'teacher', 'teacher', 'Teacher', '', 'active', ''),
(449, 2016, 'student', 'student', 'student', 'student', 'Student', '', 'active', 'user-lg.jpg'),
(450, 2017, 'cp', 'cp', 'cp', 'cp', 'Chair Person', '', 'active', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questionaire`
--
ALTER TABLE `questionaire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
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
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questionaire`
--
ALTER TABLE `questionaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=497;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
