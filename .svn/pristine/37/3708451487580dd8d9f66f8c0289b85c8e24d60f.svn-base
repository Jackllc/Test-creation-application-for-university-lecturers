-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2015 at 07:08 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
`id` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  `answer` varchar(1025) NOT NULL,
  `answerid` varchar(255) NOT NULL,
  `correct` int(2) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=346 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `questionid`, `answer`, `answerid`, `correct`) VALUES
(327, 87, 'true', '', 1),
(326, 86, 'lifelines', '', 1),
(325, 85, 'false', '', 0),
(324, 85, 'true', '', 1),
(323, 84, 'Generalisation', 'an3', 0),
(322, 84, 'Actor', 'an2', 1),
(321, 84, 'Use case', 'an1', 0),
(320, 83, 'Main', 'an4', 0),
(319, 83, 'Mobile', 'an3', 0),
(318, 83, 'Mathematical', 'an2', 0),
(317, 83, 'Modelling', 'an1', 1),
(316, 82, 'false', '', 0),
(315, 82, 'true', '', 1),
(314, 81, '9', 'an3', 0),
(313, 81, '54', 'an2', 1),
(312, 81, '12', 'an1', 0),
(311, 80, '0', '', 1),
(310, 79, 'false', '', 0),
(309, 79, 'true', '', 1),
(308, 78, 'false', '', 1),
(307, 78, 'true', '', 0),
(306, 77, 'Int', 'an4', 0),
(305, 77, 'Tall', 'an3', 1),
(304, 77, 'String', 'an2', 0),
(303, 77, 'Double', 'an1', 0),
(300, 75, 'true', '', 1),
(301, 75, 'false', '', 0),
(302, 76, 'upper', '', 1),
(328, 87, 'false', '', 0),
(329, 88, 'true', '', 0),
(330, 88, 'false', '', 1),
(331, 89, 'doPut', 'an1', 0),
(332, 89, 'doTrace', 'an2', 0),
(333, 89, 'doGet', 'an3', 0),
(334, 89, 'doStay', 'an4', 1),
(335, 90, 'update', '', 1),
(336, 91, 'true', '', 1),
(337, 91, 'false', '', 0),
(338, 92, 'true', '', 0),
(339, 92, 'false', '', 1),
(340, 93, 'true', '', 0),
(341, 93, 'false', '', 1),
(342, 94, 'true', '', 0),
(343, 94, 'false', '', 1),
(344, 95, 'true', '', 1),
(345, 95, 'false', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
`id` int(11) NOT NULL,
  `modulename` varchar(255) NOT NULL,
  `modulecode` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `modulename`, `modulecode`, `instructor`) VALUES
(41, 'Web Technologies', 'CO3098', 'lecturer1'),
(40, 'Software Engineering', 'CO2006', 'instructor1'),
(37, 'Computer Systems', 'CO1016', 'instructor1'),
(36, 'Program Design', 'CO1003', 'instructor1');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
`id` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `subjectcode` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `item_order` int(64) NOT NULL,
  `weight` int(64) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `questionid`, `question`, `subjectcode`, `instructor`, `type`, `item_order`, `weight`) VALUES
(80, 80, 'The first character of a String is position _ ?', 'CO1003CT1', 'instructor1', '3', 2, 1),
(79, 79, ' Every method except for the constructor needs to have a return type', 'CO1003CT1', 'instructor1', '1', 4, 1),
(78, 78, 'Parameters must have primitive data types', 'CO1003CT1', 'instructor1', '1', 5, 1),
(77, 77, 'Which is not a valid data type in JAVA?', 'CO1003CT1', 'instructor1', '2', 6, 1),
(76, 76, 'Method names in Java should start with an ___________ case character', 'CO1003CT1', 'instructor1', '3', 3, 2),
(75, 75, 'JAVA is case sensitive?', 'CO1003CT1', 'instructor1', '1', 7, 1),
(81, 81, 'An array created by new boolean [6] [3] [3] has ___ cells ?', 'CO1003CT1', 'instructor1', '2', 1, 1),
(82, 82, 'Abstract classes are never instantiated', 'CO2006CT1', 'instructor1', '1', 0, 1),
(83, 83, 'UML stands for Unified _____________ Language', 'CO2006CT1', 'instructor1', '2', 0, 1),
(84, 84, 'An ________ is a model of an external enitity ?', 'CO2006CT1', 'instructor1', '2', 0, 1),
(85, 85, 'Use case models should be packaged?', 'CO2006CT1', 'instructor1', '1', 0, 1),
(86, 86, 'In sequence diagrams, __________ are represented by dashed lines', 'CO2006CT1', 'instructor1', '3', 0, 1),
(87, 87, 'HTTPServlet is an abstract class', 'CO3098PRAC', 'lecturer1', '1', 1, 1),
(88, 88, ' The destroy() method can be called multiple times in the lifecycle of a servlet', 'CO3098PRAC', 'lecturer1', '1', 2, 1),
(89, 89, 'Which of the following is NOT a request made by the service() method?', 'CO3098PRAC', 'lecturer1', '2', 3, 1),
(90, 90, 'CRUD with respect to the DAO Pattern stands for Create Read __________ Delete', 'CO3098PRAC', 'lecturer1', '3', 7, 1),
(91, 91, 'Text is the default datatype in XML', 'CO3098PRAC', 'lecturer1', '1', 4, 1),
(92, 92, 'The DOM parser is an event-based parser', 'CO3098PRAC', 'lecturer1', '1', 5, 1),
(93, 93, 'The following syntax declares the XML version to be 1.0:\r\n<?xml version="1.0" />', 'CO3098PRAC', 'lecturer1', '1', 6, 1),
(94, 94, 'Transactions in SQL cannot be rolled back once committed.', 'CO3098PRAC', 'lecturer1', '1', 8, 1),
(95, 95, 'N-tier applications are broken into discrete parts based on functionality', 'CO3098PRAC', 'lecturer1', '1', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
`id` int(11) NOT NULL,
  `subjectname` varchar(255) NOT NULL,
  `subjectcode` varchar(50) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `passmark` int(64) NOT NULL,
  `timer` int(64) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `subjectname`, `subjectcode`, `instructor`, `passmark`, `timer`) VALUES
(30, 'Program Design CT1', 'CO1003CT1', 'instructor1', 40, 45),
(34, 'UMLCT1', 'CO2006CT1', 'instructor1', 40, 90),
(35, 'CO3098ExamPractice', 'CO3098PRAC', 'lecturer1', 50, 160);

-- --------------------------------------------------------

--
-- Table structure for table `quizset`
--

CREATE TABLE IF NOT EXISTS `quizset` (
`id` int(11) NOT NULL,
  `subjectcode` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `modulecode` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=279 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quizset`
--

INSERT INTO `quizset` (`id`, `subjectcode`, `username`, `modulecode`, `instructor`) VALUES
(278, 'CO1003CT1', 'robertextra17', 'CO1003', 'instructor1'),
(276, 'CO1003CT1', 'chris17', 'CO1003', 'instructor1'),
(275, 'CO1003CT1', 'brian17', 'CO1003', 'instructor1');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `subjectcode` varchar(255) NOT NULL,
  `questionid` int(11) NOT NULL,
  `correctanswer` varchar(64) NOT NULL,
  `correct` int(1) NOT NULL,
  `useranswer` varchar(64) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `username`, `subjectcode`, `questionid`, `correctanswer`, `correct`, `useranswer`) VALUES
(1, 'jacklc', 'CO1003CT1', 80, '0', 1, '0'),
(2, 'jacklc', 'CO1003CT1', 79, 'true', 1, 'true'),
(3, 'jacklc', 'CO1003CT1', 78, 'false', 1, 'false'),
(4, 'jacklc', 'CO1003CT1', 77, 'tall', 1, 'tall'),
(5, 'jacklc', 'CO1003CT1', 76, 'upper', 2, 'upper'),
(6, 'jacklc', 'CO1003CT1', 75, 'true', 1, 'true'),
(7, 'jacklc', 'CO1003CT1', 81, '54', 1, '54'),
(8, 'robert17', 'CO1003CT1', 80, '0', 1, '0'),
(9, 'robert17', 'CO1003CT1', 79, 'true', 0, 'false'),
(10, 'robert17', 'CO1003CT1', 78, 'false', 1, 'false'),
(11, 'robert17', 'CO1003CT1', 77, 'tall', 1, 'tall'),
(12, 'robert17', 'CO1003CT1', 76, 'upper', 2, 'upper'),
(13, 'robert17', 'CO1003CT1', 75, 'true', 1, 'true'),
(14, 'robert17', 'CO1003CT1', 81, '54', 1, '54'),
(15, 'Ryan11', 'CO1003CT1', 80, '0', 1, '0'),
(16, 'Ryan11', 'CO1003CT1', 79, 'true', 0, 'false'),
(17, 'Ryan11', 'CO1003CT1', 78, 'false', 0, 'true'),
(18, 'Ryan11', 'CO1003CT1', 77, 'tall', 0, 'int'),
(19, 'Ryan11', 'CO1003CT1', 76, 'upper', 2, 'upper'),
(20, 'Ryan11', 'CO1003CT1', 75, 'true', 1, 'true'),
(21, 'Ryan11', 'CO1003CT1', 81, '54', 1, '54'),
(22, 'mandy17', 'CO1003CT1', 80, '0', 1, '0'),
(23, 'mandy17', 'CO1003CT1', 79, 'true', 0, 'false'),
(24, 'mandy17', 'CO1003CT1', 78, 'false', 0, 'true'),
(25, 'mandy17', 'CO1003CT1', 77, 'tall', 0, 'string'),
(26, 'mandy17', 'CO1003CT1', 76, 'upper', 2, 'upper'),
(27, 'mandy17', 'CO1003CT1', 75, 'true', 0, 'false'),
(28, 'mandy17', 'CO1003CT1', 81, '54', 0, '12');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
`id` int(11) NOT NULL,
  `subjectcode` varchar(255) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `correct_answer` int(5) NOT NULL,
  `total_items` int(5) NOT NULL,
  `correct_percent` int(5) NOT NULL,
  `date_taken` date NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`id`, `subjectcode`, `instructor`, `username`, `full_name`, `module`, `correct_answer`, `total_items`, `correct_percent`, `date_taken`) VALUES
(1, 'CO1003CT1', 'instructor1', 'jacklc', 'Jack Charlesworth', 'CO1003', 8, 8, 100, '2015-05-07'),
(2, 'CO1003CT1', 'instructor1', 'robert17', 'Robert Ward', 'CO1003', 7, 8, 88, '2015-05-07'),
(3, 'CO1003CT1', 'instructor1', 'Ryan11', 'Ryan Brown', 'CO1003', 5, 8, 63, '2015-05-07'),
(4, 'CO1003CT1', 'instructor1', 'mandy17', 'Mandy Barnes', 'CO1003', 3, 8, 38, '2015-05-07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `module` varchar(30) NOT NULL,
  `instructor` varchar(255) NOT NULL,
  `type` int(1) NOT NULL,
  `extratime` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `module`, `instructor`, `type`, `extratime`, `email`) VALUES
(2, 'instructor1', '131e6c6ad74b87633a2a9a78ce3e5306dc2e5d5f', 'instructor', '', '', '', 2, '', ''),
(28, 'Claireb21', '131e6c6ad74b87633a2a9a78ce3e5306dc2e5d5f', 'Claire', 'Green', 'CO3099', 'instructor1', 1, '', 'jakchar@googlemail.com'),
(27, 'Alice28', '131e6c6ad74b87633a2a9a78ce3e5306dc2e5d5f', 'Alice', 'Chapman', 'CO3096', 'instructor1', 1, '', 'jakchar@googlemail.com'),
(25, 'jacklc', '131e6c6ad74b87633a2a9a78ce3e5306dc2e5d5f', 'Jack', 'Charlesworth', 'CO1003', 'instructor1', 1, 'yes', 'jakchar@googlemail.com'),
(26, 'Ryan11', '131e6c6ad74b87633a2a9a78ce3e5306dc2e5d5f', 'Ryan', 'Brown', 'CO1003', 'instructor1', 1, '', 'jakchar@googlemail.com'),
(30, 'lecturer1', '131e6c6ad74b87633a2a9a78ce3e5306dc2e5d5f', 'lecturer', '', '', '', 2, '', ''),
(31, 'mandy17', '131e6c6ad74b87633a2a9a78ce3e5306dc2e5d5f', 'Mandy', 'Barnes', 'CO1003', 'instructor1', 1, '', 'jakchar@googlemail.com'),
(32, 'brian17', '131e6c6ad74b87633a2a9a78ce3e5306dc2e5d5f', 'Brian', 'Kingdom', 'CO1003', 'instructor1', 1, '', 'jakchar@googlemail.com'),
(33, 'chris17', '131e6c6ad74b87633a2a9a78ce3e5306dc2e5d5f', 'Chris', 'Brine', 'CO1003', 'instructor1', 1, '', 'jakchar@googlemail.com'),
(40, 'robert17', '131e6c6ad74b87633a2a9a78ce3e5306dc2e5d5f', 'Robert', 'Ward', 'CO1003', 'instructor1', 1, '', ''),
(41, 'robertextra17', '131e6c6ad74b87633a2a9a78ce3e5306dc2e5d5f', 'Robert', 'Wardextra', 'CO1003', 'instructor1', 1, 'yes', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizset`
--
ALTER TABLE `quizset`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
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
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=346;
--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `quizset`
--
ALTER TABLE `quizset`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=279;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
