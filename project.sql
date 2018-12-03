-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2018 at 08:02 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Name`, `email`, `password`) VALUES
(1, 'Rafsan', 'admin@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(20) NOT NULL,
  `problem_name` varchar(100) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `sample_input` varchar(255) NOT NULL,
  `sample_output` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `problem_name`, `description`, `sample_input`, `sample_output`) VALUES
(3, 'Sasas', 'Sasas', 'Sasaas', 'Asasas');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(20) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `department`) VALUES
(1, 'Computer science', 'cse299', ''),
(2, 'Computer science', 'cse299', 'CSE'),
(3, 'Computer science', 'cse299', 'CSE'),
(4, 'Electrical ', 'eee452', 'EEE'),
(5, 'Computer science', 'cse299', 'CSE'),
(6, 'Electrical ', 'cse299', 'EEE'),
(7, 'Electrical ', 'cse299', 'MATHMETICS');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(20) NOT NULL,
  `student_id` int(15) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `university` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `fullname`, `email`, `gender`, `phone_number`, `university`, `image`, `address`, `password`) VALUES
(7, 89988, 'Santa sara', 'Iftyhg@gmail.com', 'Male', 1939020774, 'North South Universi', '', '12345 nsu', '$2y$10$Cf/QczwsWsr8fpocGrEY/eFFRYJi26aJGurs1Wtkm4LEDJ7s0k93y'),
(8, 1520083, 'Admin', 'Iftwqy@gmail.com', 'Male', 1686798028, 'NSU', '2018-07-11 (2).png', 'basundhara', '$2y$10$sGWJagFX/Ibeftk1CQOy9..abKHJSq7uVtDqS5/N6C8dLk3cYYRpm');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `phone_number` int(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `fullname`, `email`, `gender`, `phone_number`, `address`, `image`, `password`) VALUES
(22, 'Santa', 'Shawon@yahoo.com', 'Female', 12345678, 'mirpur,dhaka', '2016-12-27-16-05-21-940.jpg', '$2y$10$Wsmt7cOG52eu.h/mTBygqeUOir/w3/YNSMXyehdOf0MtfNmyAzmLS'),
(29, 'Zahid', 'Iftywww95@gmail.com', 'Male', 1686798028, 'basundhara', '29-11-12-19-37.jpg', '$2y$10$btGpPhXLJu0WrUTN0urcC.sJsCu2wD3eWy.tDwhEVGR76mzc7hGHu'),
(31, 'Nishi moni', 'Nishi12@yahoo.com', 'Female', 1978798028, 'Jatrabari,Dhaka', 'nishi.jpg', '$2y$10$K.suL9vMJFULrQm6Fv/g/.2j2cbzr7L/cukltiKgOhSe8DvX6mAd6'),
(32, 'Rafsan', 'Iftycxz@gmail.com', 'Female', 12345678, 'asasas', '2018-06-07 (3).png', '$2y$10$tSzez4WA37w1oou0F3SYu.dlVxJykWwT9lwzKyp5igUNENbVYTvK6');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `file_type` varchar(10) NOT NULL,
  `file_size` varchar(10) NOT NULL,
  `file_path` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `studentName`, `file_name`, `file_type`, `file_size`, `file_path`, `date`) VALUES
(60, 'rafsan', 'hellow.java', 'applicatio', '200', 'uploads/hellow.java', '2018-11-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
