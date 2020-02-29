-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 04:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

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
-- Table structure for table `addrequirements`
--

CREATE TABLE `addrequirements` (
  `id` int(11) NOT NULL,
  `requirementstitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `addrequirements`
--

INSERT INTO `addrequirements` (`id`, `requirementstitle`) VALUES
(1, 'Course Syllabus'),
(2, 'Class Record'),
(7, 'Examination and Table of Specification'),
(8, 'Academic Consultation'),
(9, 'Seat Plan'),
(10, 'Sample Quizzes per Term'),
(11, 'Laboratory Activities Sample Output with Rubics/criteria(Laboratory)'),
(12, 'Syllabus Acknowledgement Form'),
(13, 'Records Releasing Form'),
(14, 'PDS'),
(15, '1tablespoon');

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
(6, 'Friday 14 February 2020', '02:03', 'partyparty partyparty asdasd as', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales orci ante, sed ornare eros vestibulum ut. Ut accumsan vitae eros sit amet tristique. Nullam scelerisque nunc enim, non dignissim nibh faucibus ullamcorper. Fusce pulvinar libero vel li'),
(7, 'Friday 14 February 2020', '01:55', 'vghvg', 'vhghvghvg'),
(8, 'Friday 28 February 2020', '03:26', 'party', 'partypartypartyp artypartypa rtypartypartyp artypartypar typartypartypartypa rtypartypartypart ypartypartypartypa rtypartypart ypartypartypa rtypartypartypartypar yparty artypartypa rty partypartypartypartyparty'),
(9, 'Saturday 01 February 2020', '01:25', 'ewan', 'ewanewanewa newanewanewanewanewa newanewanewan ewanewanewanewan ewanewanewa newanewanewanewanewa newanewanewan ewanewanewanewan ewanewanewa newanewanewanewanewa newanewanewan ewanewanewanewan');

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
-- Table structure for table `clearancestatus`
--

CREATE TABLE `clearancestatus` (
  `id` int(11) NOT NULL,
  `identitynumber` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clearancestatus`
--

INSERT INTO `clearancestatus` (`id`, `identitynumber`, `name`, `status`) VALUES
(75, '2011', 't', 'Complete'),
(77, '233', 'qw', 'Incomplete'),
(78, '444', 'ss', 'Incomplete'),
(79, '1121', 'a', 'Incomplete'),
(83, '22', 'leo', 'Complete');

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
(132, 'COMMITMENT', 'Demonstrates sensitivity to student`s ability to attend and absorb content information.'),
(133, 'COMMITMENT', 'Integrates sensitivity his/her learning objectives with those of the students in a collaborative process.'),
(134, 'COMMITMENT', 'Makes self reliable to students beyond official time'),
(135, 'COMMITMENT', 'Regularly comes to class on time,well groomed, and well-prepared to complete assigned responsibilities.'),
(136, 'COMMITMENT', 'Keeps accurate records of student`s performance and prompt submission of the the same.'),
(137, 'KNOWLEDGE OF SUBJECT', 'Demonstrates mastery of the subject matter (explain the subject matter without relying solely on the prescribed textbook).'),
(138, 'KNOWLEDGE OF SUBJECT', 'Draws and shares information on the state on the art of theory and practice in his/her discipline.'),
(139, 'KNOWLEDGE OF SUBJECT', 'Integrates subject to practical circumstances and learning intents/purposes of the students.'),
(140, 'KNOWLEDGE OF SUBJECT', 'Explains the relevance of present topics to the previous lessons, and relates the subject matter to relevantcurrent issues and /daily activities.'),
(141, 'KNOWLEDGE OF SUBJECT', 'Demonstrates up-to-date knowledge and/or awareness on current trends and issues of the subject.'),
(142, 'TEACHING FOR INDEPENDENT LEARNING', 'Creates teaching strategies that allow students to practice using concepts they need to understand (interactive discussion).\r\n'),
(143, 'TEACHING FOR INDEPENDENT LEARNING', 'Enhances student self-esteem and/or gives due recognition to students perfomance /potentials.'),
(144, 'TEACHING FOR INDEPENDENT LEARNING', 'Allows students to create their own course with objectives and realistically defined student-instructor rules and make them accountable for their performance.'),
(145, 'TEACHING FOR INDEPENDENT LEARNING', 'Allows studnets to think indepently and make their own decisions and holding them accountable for their performance based largely on their success in executing decisions.'),
(146, 'TEACHING FOR INDEPENDENT LEARNING', 'Encourages studnets to learn beyond what is required and help/guide the students how to apply the concepts learned.'),
(147, 'MANAGEMENT OF LEARNING', 'Creates opportuninites for intensive and/or extensive contribution of students in the class activities (e.g. breaks class into dyads, triads or buzz/task groups).'),
(148, 'MANAGEMENT OF LEARNING', 'Assumes roles as facilitator, resource person, coach, inquisitor, referee in drawing students to contribute knowledge and understanding of the concepts at hand.'),
(149, 'MANAGEMENT OF LEARNING', 'Assumes various appropriate roles, (facilitator, coach resource speacker, integrator, inquisitor, referee, etc.) in drawing students to contribute knowledge and understanding of the concepts at hand.'),
(150, 'MANAGEMENT OF LEARNING', 'Structures/re-structures learning conditions and experience that promotes healthy exchange and /or confrontations.'),
(151, 'MANAGEMENT OF LEARNING', 'Uses instructional materials (audio-video materials: fieldtrips,dfilm showing, computer aided instruction and et.) to reinforce learning process');

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
(97, '2013', '', 'COMMITMENT', '2020-02-21 15:08:45', 'cris'),
(98, '2013', '', 'KNOWLEDGE OF SUBJECT', '2020-02-21 15:10:57', 'cris'),
(99, '2013', '', 'TEACHING FOR INDEPENDENT LEARNING', '2020-02-26 14:39:23', 'cris'),
(100, '2013', '', 'MANAGEMENT OF LEARNING', '2020-02-26 14:39:30', 'cris');

-- --------------------------------------------------------

--
-- Table structure for table `requirements`
--

CREATE TABLE `requirements` (
  `id` int(11) NOT NULL,
  `identitynumber` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `requirementstitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ClearanceProgress` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requirements`
--

INSERT INTO `requirements` (`id`, `identitynumber`, `fullname`, `requirementstitle`, `filename`, `ClearanceProgress`) VALUES
(40, 2015, 'teacher teacher', '1tablespoon', '447_teacher_hello.txt', 'pass'),
(41, 2011, 't t', '1tablespoon', '13509_t_hello.txt', 'pass');

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
(3, 'dsa', '2020-02-12 00:27:32', 'cris'),
(4, 'ap', '2020-02-18 01:41:20', 'cris');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `identitynumber` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `submittedby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `identitynumber`, `name`, `subject`, `sem`, `year`, `status`, `date`, `submittedby`) VALUES
(20, '22', 'leo', '101 - English', '3RD', '2020', 'Complete', '2020-02-25', 'cris');

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
(14, '2013', '101', 'English', '2020-02-25 19:52:57', 'cris'),
(15, '2013', '102', 'English', '2020-02-25 19:53:03', 'cris'),
(16, '2013', 'prog1', 'programming', '2020-02-25 19:53:09', 'cris'),
(17, '2013', 'prog2', 'programming', '2020-02-25 19:53:13', 'cris'),
(18, '2013', 'n1', 'nstp', '2020-02-25 19:53:19', 'cris'),
(19, '2013', 'n2', 'nstp', '2020-02-25 19:53:23', 'cris');

-- --------------------------------------------------------

--
-- Table structure for table `teacheraddsubject`
--

CREATE TABLE `teacheraddsubject` (
  `id` int(11) NOT NULL,
  `identitynumber` varchar(255) NOT NULL,
  `subcode` varchar(255) NOT NULL,
  `subjectname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacheraddsubject`
--

INSERT INTO `teacheraddsubject` (`id`, `identitynumber`, `subcode`, `subjectname`, `role`) VALUES
(227, '2016', '101', 'English', 'Student'),
(228, '2016', '102', 'English', 'Student'),
(229, '2016', 'prog1', 'programming', 'Student'),
(230, '2016', 'prog2', 'programming', 'Student'),
(231, '2016', 'n1', 'nstp', 'Student'),
(232, '2016', 'n2', 'nstp', 'Student'),
(233, '22', '101', 'English', 'Teacher'),
(234, '22', '102', 'English', 'Teacher'),
(235, '22', 'prog1', 'programming', 'Teacher'),
(236, '22', 'prog2', 'programming', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `teacherfileuploadform`
--

CREATE TABLE `teacherfileuploadform` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `requirements` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clearanceprogress` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `clearance` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'None',
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `identitynumber`, `username`, `name`, `lastname`, `password`, `role`, `department`, `status`, `clearance`, `image`) VALUES
(410, 2013, 'cris', 'cris', 'emarson', 'cris', 'Dean', 'comsci', 'active', '', 'favicon.jpg'),
(447, 2015, 'teacher', 'teacher', 'teacher', 'teacher', 'Teacher', '', 'active', 'None', 'favicon.jpg'),
(449, 2016, 'student', 'student', 'student', 'student', 'Student', '', 'active', '', 'user-lg.jpg'),
(450, 2017, 'cp', 'cp', 'cp', 'cp', 'Chair Person', '', 'active', '', '43292327_1923177201321629_7418994415391211520_n.png'),
(497, 2009, 'emarson', 'emarson', 'emarson', 'emarson', 'Dean', '', 'active', '', ''),
(502, 2001, 's1', 's1', 's1', 's1', 'Student', '', 'active', '', ''),
(507, 1351, 'janzs', 'janzs', 'janzs', 'janzs', 'Dean', '', 'active', '', ''),
(13509, 2011, 't', 't', 't', 't', 'Teacher', '', 'active', 'Complete', 'animation-bg.jpg'),
(13510, 1121, 'a', 'a', 'a', 'a', 'Teacher', '', 'active', 'Incomplete', ''),
(13511, 22, 'leo', 'leo', 'leo', 'leo', 'Teacher', '', 'active', 'Complete', 'user-lg.jpg'),
(13512, 233, 'qw', 'qw', 'qw', 'qw', 'Teacher', '', 'active', 'Incomplete', ''),
(13513, 444, 'ss', 'ss', 'ss', 'ss', 'Teacher', '', 'active', 'Incomplete', ''),
(13516, 12, 'a', 'a', 'a', 'a', 'Dean', '', 'active', 'None', ''),
(13518, 11, 'b', 'b', 'b', 'b', 'Dean', '', 'active', 'None', ''),
(13519, 41231, 'asdas`', 'asdsa', 'asdasd', 'asdsada', 'Dean', '', 'active', 'None', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addrequirements`
--
ALTER TABLE `addrequirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clearancestatus`
--
ALTER TABLE `clearancestatus`
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
-- Indexes for table `requirements`
--
ALTER TABLE `requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacheraddsubject`
--
ALTER TABLE `teacheraddsubject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacherfileuploadform`
--
ALTER TABLE `teacherfileuploadform`
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
-- AUTO_INCREMENT for table `addrequirements`
--
ALTER TABLE `addrequirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clearancestatus`
--
ALTER TABLE `clearancestatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `questionaire`
--
ALTER TABLE `questionaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `requirements`
--
ALTER TABLE `requirements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teacheraddsubject`
--
ALTER TABLE `teacheraddsubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `teacherfileuploadform`
--
ALTER TABLE `teacherfileuploadform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13520;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
