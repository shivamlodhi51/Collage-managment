-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 09:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `app_id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `num` bigint(15) NOT NULL,
  `category` varchar(10) NOT NULL,
  `10%` int(5) NOT NULL,
  `12%` int(5) NOT NULL,
  `graduation%` int(5) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_id` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`app_id`, `firstname`, `lastname`, `fname`, `dob`, `gender`, `email`, `num`, `category`, `10%`, `12%`, `graduation%`, `c_name`, `c_id`, `address`, `status`) VALUES
(1, 'y', 'y', 'i', '1211-12-12', 'Male', 'i@u', 7878790987, 'OBC', 12, 22, 89, 'it', 'BTECH_IT101', 'Inderganj, lashkar, gwalior', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` varchar(20) NOT NULL,
  `year` int(8) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `duration` int(10) NOT NULL,
  `fees` int(20) NOT NULL,
  `intake` int(10) NOT NULL,
  `f_seats` int(10) NOT NULL,
  `v_seats` int(20) NOT NULL,
  `c_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `year`, `c_name`, `duration`, `fees`, `intake`, `f_seats`, `v_seats`, `c_type`) VALUES
('BTECH_CIVIL103', 1956, 'B.Tech (Civil)', 4, 350000, 120, 0, 120, 'ug'),
('BTECH_CSE102', 1994, 'B.Tech (CSE)', 4, 500000, 120, 0, 120, 'ug'),
('BTECH_IT101', 2020, 'B.Tech (IT)', 4, 400000, 60, 1, 59, 'ug'),
('BTECH_MEC104', 1956, 'B.Tech (Mechanical)', 4, 450000, 120, 0, 120, 'ug'),
('MTECH_CIVIL103', 1986, 'M.Tech (Civil)', 2, 230000, 40, 0, 40, 'pg'),
('MTECH_CSE102', 2011, 'M.Tech (CSE)', 2, 500000, 18, 0, 18, 'pg'),
('MTECH_IT101', 2012, 'M.Tech (IT)', 2, 240000, 18, 0, 18, 'pg'),
('MTECH_MEC104', 2012, 'M.Tech (Mechanical)', 2, 310000, 20, 0, 20, 'pg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `app_id` int(20) NOT NULL,
  `desc` varchar(80) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`app_id`, `desc`, `time`) VALUES
(1, 'i am happy with your service....@$%^^', '2023-05-27 20:28:18'),
(9, 'lklnlkj', '2023-05-27 20:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `num` bigint(15) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `dob`, `gender`, `email`, `num`, `password`, `cpassword`, `time`) VALUES
(1, 'Yash', 'Namdev', '2001-05-12', 'Male', 'yash@g', 7470378950, '123', '123', '2023-05-26 18:18:13'),
(2, 'Saloni', 'Jain', '1332-05-17', 'Female', 'saloni@gm', 8098768987, '123', '123', '2023-05-26 20:04:58'),
(3, 'ay', 'nam', '2123-04-23', 'M', 'a@g', 443, '123', '123', '2023-05-26 20:13:04'),
(5, 'rt', 'tr', '2023-05-11', 'F', 'wt@g', 466, '123', '123', '2023-05-27 08:19:10'),
(6, 'yash', 'namdev', '2023-05-06', 'M', '34r@g', 0, '123', '123', '2023-05-27 08:23:48'),
(7, 'yash', 'namdev', '2023-05-11', 'M', '', 33543, '123', '123', '2023-05-27 08:32:11'),
(8, 'yash', 'namdev', '2023-05-05', 'M', 'as@f', 9999, '123', '123', '2023-05-27 08:48:34'),
(9, 'Avyav', 'Namdev', '2009-12-24', 'Male', 'avyav@g', 5684960089, '123', '123', '2023-05-27 20:37:10'),
(10, 'shivam', 'lodhi', '2001-11-04', 'M', 'shivam@g', 9898980887, '123', '123', '2023-05-29 06:53:14');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `app_id` int(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `num` bigint(15) NOT NULL,
  `category` varchar(10) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_id` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`app_id`, `firstname`, `lastname`, `fname`, `dob`, `gender`, `email`, `num`, `category`, `c_name`, `c_id`, `address`) VALUES
(1, 'y            ', 'y            ', 'i            ', '1211-12-12', 'Male      ', 'i@u            ', 7878790987, 'OBC       ', 'it            ', 'BTECH_IT101    ', 'Inderganj, lashkar, gwalior');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`app_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
