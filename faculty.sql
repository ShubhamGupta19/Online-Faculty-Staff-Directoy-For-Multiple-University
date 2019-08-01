-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 10:35 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty_people`
--

CREATE TABLE `faculty_people` (
  `id` int(20) NOT NULL,
  `title` varchar(4) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `Institute` varchar(30) NOT NULL,
  `imagename` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_people`
--

INSERT INTO `faculty_people` (`id`, `title`, `first_name`, `department`, `designation`, `email`, `phone`, `Institute`, `imagename`) VALUES
(1, 'Mr.', 'Balram', 'CSE', 'Sr Professor', 'myselfchinna@gmail.com', 9000001001, 'GRIET', 'balram.jpg'),
(2, 'Ms.', 'Abhishek', 'CSE', 'Sr Professor', 'abhieminem@gmail.com', 9000001001, 'GRIET', 'abhi.jpg'),
(3, 'Dr', 'Shubham', 'IT', 'Sr Professor', 'sg1081@outlook.com', 9959497561, 'GRIET', 'shu.jpg'),
(4, 'Dr', 'Saif', 'CSE', 'Sr Professor', 'saif_allauddin@gmail.com', 727423427, 'GRIET', 'saif.png'),
(5, 'Mr.', 'Krishna Chaitanya', 'Artificial Intellige', 'Sr Professor', 'kc@gmail.com', 6627848948, 'GRIET', 'kc.jpg'),
(6, 'Ms.', 'Gnan', 'ECE', 'Asst Professor', 'patlolla@rocketmail.com', 7563246806, 'GRIET', 'gdp.jpg'),
(7, 'Dr.', 'Madhavi', 'EEE', 'Head of dept', 'kmadhavi@gmail.com', 7392745739, 'GRIET', 'md.jpeg'),
(8, 'Mr', 'Aditya', 'ECE', 'Sr Professor', 'jhcsdjs@gmail.com', 9121896944, 'GRIET', 'adi.jpg'),
(9, 'Mr', 'Varun', 'IT', 'Sr Professor', 'jfvbjsvkjvn@gmail.com', 541054154, 'GRIET', 'smart.jpg'),
(10, 'Dr.', 'Mihir', 'IT', 'Sr prof', 'mihir@gmail.com', 234567890, 'GRIET', 'mih.jpeg'),
(29, 'Mr.', 'Shubham', 'Shubham', 'Shubham', 'shu@gmail.com', 854125202, 'Shubham', 'aye.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `username`, `email`, `password`) VALUES
(1, 'shubham', 'shubhamg1234567890@gmail.com', 'Shubham123'),
(2, 'balram', 'shubham@gmail.com', 'Shubham123'),
(3, 'Abhishek', 'ab@gmail.com', 'Abhi123'),
(4, 'Akshith', 'akki@gmail.com', 'Mukesh123'),
(5, 'Prashant', 'cobra@gmail.com', 'Cobra123'),
(6, 'Saif', 'allu@gmail.com', 'Bro12345'),
(7, 'sriram', 'y.ssr1998@gmail.com', 'Sriram123'),
(8, 'alley', 'alley@gmail.com', 'Alley123'),
(9, 'ram', 'yssr1998@gmail.com', 'Sriram123'),
(10, 'Shubham12345', 'shu@gmail.com', 'Shubham1234'),
(11, 'ShubhamGupta', 'shubh@gmail.com', 'Shubham123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty_people`
--
ALTER TABLE `faculty_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty_people`
--
ALTER TABLE `faculty_people`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
