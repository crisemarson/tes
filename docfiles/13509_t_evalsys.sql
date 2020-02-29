-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 06:40 AM
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
-- Database: `evalsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fid` int(11) NOT NULL,
  `role_id` int(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fid`, `role_id`, `username`, `password`) VALUES
(1001, 1, 'marfa', 'stud');

-- --------------------------------------------------------

--
-- Table structure for table `facultyanswer`
--

CREATE TABLE `facultyanswer` (
  `tid` int(11) NOT NULL,
  `quiz_id` int(1) NOT NULL,
  `s_tid` int(11) NOT NULL,
  `ans1` int(1) NOT NULL,
  `ans2` int(1) NOT NULL,
  `ans3` int(1) NOT NULL,
  `ans4` int(1) NOT NULL,
  `ans5` int(1) NOT NULL,
  `ans6` int(1) NOT NULL,
  `ans7` int(1) NOT NULL,
  `ans8` int(1) NOT NULL,
  `ans9` int(1) NOT NULL,
  `ans10` int(1) NOT NULL,
  `ans11` int(1) NOT NULL,
  `ans12` int(1) NOT NULL,
  `ans13` int(1) NOT NULL,
  `ans14` int(1) NOT NULL,
  `ans15` int(1) NOT NULL,
  `ans16` int(1) NOT NULL,
  `ans17` int(1) NOT NULL,
  `ans18` int(1) NOT NULL,
  `ans19` int(1) NOT NULL,
  `ans20` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultyanswer`
--

INSERT INTO `facultyanswer` (`tid`, `quiz_id`, `s_tid`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`, `ans7`, `ans8`, `ans9`, `ans10`, `ans11`, `ans12`, `ans13`, `ans14`, `ans15`, `ans16`, `ans17`, `ans18`, `ans19`, `ans20`) VALUES
(2002, 2, 2004, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `q_id` int(5) NOT NULL,
  `quiz_id` int(5) NOT NULL,
  `sub_id` int(5) NOT NULL,
  `quizname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`q_id`, `quiz_id`, `sub_id`, `quizname`) VALUES
(1, 1, 1, 'I. TEACHING EFFECTIVENESS'),
(4, 2, 2, 'II. PROFESSIONALISM');

-- --------------------------------------------------------

--
-- Table structure for table `quizques`
--

CREATE TABLE `quizques` (
  `ques_id` int(5) NOT NULL,
  `quiz_id` int(5) NOT NULL,
  `question` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizques`
--

INSERT INTO `quizques` (`ques_id`, `quiz_id`, `question`) VALUES
(1, 1, 'Demonstrates sensitivity to students ability to attend and absorb content information.'),
(2, 1, 'Creates teaching strategies that allow students to practice using concepts they need to understand (interactive discussion).'),
(3, 1, 'Demonstrates up-to-date knowledge and/or awareness on current trends and issues of the subject.'),
(4, 1, 'Explains the relevance of present topics to the previous lessons,and relates the subject matter to relevantcurrent issues and /daily activities.'),
(5, 1, 'Integrates subject to practical circumstances and learning intents/purposes of the students.'),
(6, 1, 'Draws and shares information on the state on the art of theory and practice in his/her discipline.'),
(7, 1, 'Makes self reliable to students beyond official time.'),
(8, 1, 'Demonstrates mastery of the subject matter (explain the subject matter without relying solely on the prescribed textbook).'),
(9, 1, 'Keeps accurate records of student\'s performance and prompt submission of the the same.'),
(10, 1, 'Regularly comes to class on time,well groomed, and well-prepared to complete assigned responsibilities.'),
(11, 1, 'Integrates sensitivity his/her learning objectives with those of the students in a collaborative process.'),
(12, 1, 'Enhances student self-esteem and/or gives due recognition to students perfomance /potentials.'),
(13, 1, 'Allows students to create their own course with objectives andrealistically defined student-instructor rules and make them accountable for their performance.'),
(14, 1, 'Allows studnets to think indepently and make their own decisionsand holding them accountable for their performance based largely on their success in executing decisions.'),
(15, 1, 'Encourages studnets to learn beyond what is required and help/guide the students how to apply the concepts learned.'),
(16, 1, 'Creates opportuninites for intensive and/or extensive contribution ofstudents in the class activities (e.g. breaks class into dyads, triads or buzz/task groups).'),
(17, 1, 'Assumes roles as facilitator, resource person, coach, inquisitor, referee in drawing students to contribute knowledge  and understanding of the concepts at hand.'),
(18, 1, 'Assumes various appropriate roles, (facilitator, coach resourcespeacker, integrator, inquisitor, referee, etc.) in drawing students to contribute knowledge and understanding of the concepts at hand.'),
(19, 1, 'Structures/re-structures learning conditions and experience that promotes healthy exchange and /or confrontations.'),
(20, 1, 'Uses instructional materials (audio-video materials: fieldtrips,dfilm showing, computer aided instruction and et.) to reinforce learning process.'),
(21, 2, 'Punctual in starting and ending classes on specified time.'),
(22, 2, 'Attends classes regularly, absences are rare and reasonable.'),
(23, 2, 'Has a happy attitude towards students. '),
(24, 2, 'Is emotionally well-balanced.'),
(25, 2, 'Observes proper grooming'),
(26, 2, 'Possesses self-confidence and poise.'),
(27, 2, 'Has a pleasing personality'),
(28, 2, 'Demonstrates high sense of responsibility'),
(29, 2, 'Manifests initiative in one\'s work'),
(30, 2, 'Practices professional values and attitudes'),
(31, 2, 'Sets good example as a professional in words and actions'),
(32, 2, 'Has a high sense of honesty to oneself and to others '),
(33, 2, 'Is consistent in his/her good acts as a teacher.'),
(34, 2, 'Is looked up with respect by the students.'),
(35, 2, 'Treat students equally and fairly-like responsible and mature individuals.'),
(36, 2, 'Keeps himself easily available for advice and consultation.'),
(37, 2, 'Is fair and accept weaknesses of others.'),
(38, 2, 'Refrains from putting students, peers and superiors in bad light.'),
(39, 2, 'Abide by the policies and regulations of the College (wearing of proper uniform with ID\'s, non-smoking \r\n\r\non campus, etc).'),
(40, 2, 'Treats students with due respect.');

-- --------------------------------------------------------

--
-- Table structure for table `studentanswer`
--

CREATE TABLE `studentanswer` (
  `sid` int(5) NOT NULL,
  `quiz_id` int(1) NOT NULL,
  `tid` int(11) NOT NULL,
  `ans1` int(1) NOT NULL,
  `ans2` int(1) NOT NULL,
  `ans3` int(1) NOT NULL,
  `ans4` int(1) NOT NULL,
  `ans5` int(1) NOT NULL,
  `ans6` int(1) NOT NULL,
  `ans7` int(1) NOT NULL,
  `ans8` int(1) NOT NULL,
  `ans9` int(1) NOT NULL,
  `ans10` int(1) NOT NULL,
  `ans11` int(1) NOT NULL,
  `ans12` int(1) NOT NULL,
  `ans13` int(1) NOT NULL,
  `ans14` int(1) NOT NULL,
  `ans15` int(1) NOT NULL,
  `ans16` int(1) NOT NULL,
  `ans17` int(1) NOT NULL,
  `ans18` int(1) NOT NULL,
  `ans19` int(1) NOT NULL,
  `ans20` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentanswer`
--

INSERT INTO `studentanswer` (`sid`, `quiz_id`, `tid`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`, `ans6`, `ans7`, `ans8`, `ans9`, `ans10`, `ans11`, `ans12`, `ans13`, `ans14`, `ans15`, `ans16`, `ans17`, `ans18`, `ans19`, `ans20`) VALUES
(3001, 1, 2002, 1, 2, 3, 4, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 2, 3, 4, 5),
(3004, 1, 2004, 5, 5, 5, 5, 5, 5, 5, 5, 5, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(3005, 1, 2003, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(3003, 1, 2003, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(3002, 1, 2002, 1, 2, 3, 4, 5, 3, 3, 2, 5, 4, 1, 2, 5, 3, 5, 4, 4, 2, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(11) NOT NULL,
  `role_id` int(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `role_id`, `username`, `password`, `course`) VALUES
(3001, 3, 'Janzs Marfa', 'stud', 'BSCS'),
(3002, 3, 'Renz Escrin', 'stud', 'BSCS'),
(3003, 3, 'Bill Gates', 'stud', 'BSCS'),
(3004, 3, 'John Doe', 'stud', 'BSIT'),
(3005, 3, 'Mark Zuckerberg', 'stud', 'BSCS');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `tid` int(11) NOT NULL,
  `role_id` int(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`tid`, `role_id`, `username`, `password`) VALUES
(2002, 2, 'Cris Emarson', 'teacher'),
(2003, 2, 'Amiel Pastor', 'teacher'),
(2004, 2, 'Wiz Negro', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `sub_id` int(5) NOT NULL,
  `subname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`sub_id`, `subname`) VALUES
(1, 'I. TEACHING EFFECTIVENESS'),
(2, 'II. PROFESSIONALISM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `quizques`
--
ALTER TABLE `quizques`
  ADD PRIMARY KEY (`ques_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `q_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quizques`
--
ALTER TABLE `quizques`
  MODIFY `ques_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3006;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2005;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
