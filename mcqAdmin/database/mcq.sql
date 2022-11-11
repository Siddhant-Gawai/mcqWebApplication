-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 03:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcq`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `idausers` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(455) DEFAULT NULL,
  `password` varchar(455) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`idausers`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$cTbOLusRaK755IWOyZee6OeKIIvFWuTIVLtmUY4uc3sBaD6u/XT7q');

-- --------------------------------------------------------

--
-- Table structure for table `currentaffairs`
--

CREATE TABLE `currentaffairs` (
  `idcurrentaffairs` int(11) NOT NULL,
  `currentaffairs_title` varchar(455) DEFAULT NULL,
  `currentaffairs_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `iddownloads` int(11) NOT NULL,
  `downloads_title` text DEFAULT NULL,
  `downloads_desc` text DEFAULT NULL,
  `downloads_links` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`iddownloads`, `downloads_title`, `downloads_desc`, `downloads_links`) VALUES
(2, 'Demo', 'Demo', 'http://www.africau.edu/images/default/sample.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `idexams` int(11) NOT NULL,
  `exams_name` varchar(225) DEFAULT NULL,
  `exams_desc` text DEFAULT NULL,
  `exams_status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`idexams`, `exams_name`, `exams_desc`, `exams_status`) VALUES
(4, 'JEE', 'Demo Content', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `idnotices` int(11) NOT NULL,
  `notices_title` varchar(455) DEFAULT NULL,
  `notices_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `idquestions` int(11) NOT NULL,
  `questions_idexams` int(11) DEFAULT NULL,
  `questions_title` text DEFAULT NULL,
  `questions_optiona` text DEFAULT NULL,
  `questions_optionb` text DEFAULT NULL,
  `questions_optionc` text DEFAULT NULL,
  `questions_optiond` text DEFAULT NULL,
  `questions_answer` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `idstudents` int(11) NOT NULL,
  `students_name` varchar(455) DEFAULT NULL,
  `students_email` varchar(255) DEFAULT NULL,
  `students_password` varchar(255) DEFAULT NULL,
  `students_status` tinyint(4) DEFAULT 1,
  `students_phone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `idsyllabus` int(11) NOT NULL,
  `syllabus_idexams` int(11) DEFAULT NULL,
  `syllabus_title` varchar(255) DEFAULT NULL,
  `syllabus_desc` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`idsyllabus`, `syllabus_idexams`, `syllabus_title`, `syllabus_desc`) VALUES
(1, 3, 'Hello', 'Hello'),
(2, 4, 'Demo', 'Demo Content');

-- --------------------------------------------------------

--
-- Table structure for table `upcomingexams`
--

CREATE TABLE `upcomingexams` (
  `idupcomingexams` int(11) NOT NULL,
  `upcomingexams_title` varchar(455) DEFAULT NULL,
  `upcomingexams_desc` text DEFAULT NULL,
  `upcomingexams_end` varchar(45) DEFAULT NULL,
  `upcomingexams_link` varchar(455) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `users_name` varchar(455) DEFAULT NULL,
  `users_email` varchar(455) DEFAULT NULL,
  `users_password` varchar(455) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`idausers`);

--
-- Indexes for table `currentaffairs`
--
ALTER TABLE `currentaffairs`
  ADD PRIMARY KEY (`idcurrentaffairs`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`iddownloads`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`idexams`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`idnotices`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`idquestions`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`idstudents`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`idsyllabus`);

--
-- Indexes for table `upcomingexams`
--
ALTER TABLE `upcomingexams`
  ADD PRIMARY KEY (`idupcomingexams`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `idausers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `currentaffairs`
--
ALTER TABLE `currentaffairs`
  MODIFY `idcurrentaffairs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `iddownloads` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `idexams` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `idnotices` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `idquestions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `idstudents` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `idsyllabus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upcomingexams`
--
ALTER TABLE `upcomingexams`
  MODIFY `idupcomingexams` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
