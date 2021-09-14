-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 06:08 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `cdesc` text NOT NULL,
  `cintro` text NOT NULL,
  `fee` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `cdesc`, `cintro`, `fee`) VALUES
('cse01', 'java', 'Java', 'media/intros/video01.mp4', 1000.5),
('cse02', 'python', 'Python', 'media/intros/video02.mp4', 2000),
('cse03', 'c++', 'c++', '', 3000),
('cse04', 'c#', 'c#', '', 4000),
('cse05', 'JavaScript', 'JavaScript', '', 5000),
('cse06', 'php', 'php', '', 4000),
('cse07', 'ALC', 'ALC', '', 3000),
('cse08', 'WD', 'WD', '', 2000),
('cse09', 'AI', 'AI', '', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `cse01_i`
--

CREATE TABLE `cse01_i` (
  `course_id` varchar(50) NOT NULL,
  `instructor_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse01_i`
--

INSERT INTO `cse01_i` (`course_id`, `instructor_id`) VALUES
('cse01', 'i01');

-- --------------------------------------------------------

--
-- Table structure for table `cse01_s`
--

CREATE TABLE `cse01_s` (
  `course_id` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse01_s`
--

INSERT INTO `cse01_s` (`course_id`, `student_email`) VALUES
('cse01', 'pubg@p.com'),
('cse01', 'pubg@pg.com'),
('cse01', 'test@test.test');

-- --------------------------------------------------------

--
-- Table structure for table `cse02_i`
--

CREATE TABLE `cse02_i` (
  `course_id` varchar(50) NOT NULL,
  `instructor_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cse02_s`
--

CREATE TABLE `cse02_s` (
  `course_id` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse02_s`
--

INSERT INTO `cse02_s` (`course_id`, `student_email`) VALUES
('cse02', 'b@b.b'),
('cse02', 'pubg@p.com'),
('cse02', 'pubg@pg.com');

-- --------------------------------------------------------

--
-- Table structure for table `cse03_i`
--

CREATE TABLE `cse03_i` (
  `course_id` varchar(50) NOT NULL,
  `instructor_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cse03_s`
--

CREATE TABLE `cse03_s` (
  `course_id` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse03_s`
--

INSERT INTO `cse03_s` (`course_id`, `student_email`) VALUES
('cse03', 'b@b.b'),
('cse03', 'pubg@p.com'),
('cse03', 'pubg@pg.com');

-- --------------------------------------------------------

--
-- Table structure for table `cse04_i`
--

CREATE TABLE `cse04_i` (
  `course_id` varchar(50) NOT NULL,
  `instructor_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cse04_s`
--

CREATE TABLE `cse04_s` (
  `course_id` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse04_s`
--

INSERT INTO `cse04_s` (`course_id`, `student_email`) VALUES
('cse04', 'b@b.b'),
('cse04', 'pubg@p.com'),
('cse04', 'pubg@pg.com');

-- --------------------------------------------------------

--
-- Table structure for table `cse05_i`
--

CREATE TABLE `cse05_i` (
  `course_id` varchar(50) NOT NULL,
  `instructor_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cse05_s`
--

CREATE TABLE `cse05_s` (
  `course_id` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse05_s`
--

INSERT INTO `cse05_s` (`course_id`, `student_email`) VALUES
('cse05', 'b@b.b'),
('cse05', 'pubg@p.com'),
('cse05', 'pubg@pg.com');

-- --------------------------------------------------------

--
-- Table structure for table `cse06_i`
--

CREATE TABLE `cse06_i` (
  `course_id` varchar(50) NOT NULL,
  `instructor_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cse06_s`
--

CREATE TABLE `cse06_s` (
  `course_id` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse06_s`
--

INSERT INTO `cse06_s` (`course_id`, `student_email`) VALUES
('cse06', 'b@b.b'),
('cse06', 'pubg@pg.com');

-- --------------------------------------------------------

--
-- Table structure for table `cse07_i`
--

CREATE TABLE `cse07_i` (
  `course_id` varchar(50) NOT NULL,
  `instructor_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cse07_s`
--

CREATE TABLE `cse07_s` (
  `course_id` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cse08_i`
--

CREATE TABLE `cse08_i` (
  `course_id` varchar(50) NOT NULL,
  `instructor_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cse08_s`
--

CREATE TABLE `cse08_s` (
  `course_id` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse08_s`
--

INSERT INTO `cse08_s` (`course_id`, `student_email`) VALUES
('cse08', 'b@b.b');

-- --------------------------------------------------------

--
-- Table structure for table `cse09_i`
--

CREATE TABLE `cse09_i` (
  `course_id` varchar(50) NOT NULL,
  `instructor_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cse09_s`
--

CREATE TABLE `cse09_s` (
  `course_id` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cse09_s`
--

INSERT INTO `cse09_s` (`course_id`, `student_email`) VALUES
('cse09', 'b@b.b');

-- --------------------------------------------------------

--
-- Table structure for table `scc`
--

CREATE TABLE `scc` (
  `email` varchar(50) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scc`
--

INSERT INTO `scc` (`email`, `count`) VALUES
('b@b.b', 7),
('pubg@p.com', 5),
('pubg@pg.com', 6),
('test2@b.b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_lname` varchar(255) NOT NULL,
  `father_name` varchar(35) NOT NULL,
  `dob` year(4) NOT NULL,
  `address` text NOT NULL,
  `age` int(11) NOT NULL,
  `pin_year` int(11) NOT NULL,
  `pin_branch` varchar(255) NOT NULL,
  `pin_num` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `memo` varchar(255) NOT NULL,
  `createdBy` int(11) NOT NULL,
  `createdOn` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `father_name`, `dob`, `address`, `age`, `pin_year`, `pin_branch`, `pin_num`, `user_email`, `password`, `user_gender`, `user_phone`, `avatar`, `memo`, `createdBy`, `createdOn`) VALUES
(2, 'z', 'z', 'z', 2021, 'zxdcvjkhgxdc', 18, 1, 'CSE-B', 123, 'b@b.b', 'abcabcabc', 'f', '9111089992', 'media/users/pass_photos/6037a2bf61dd1.jpg', 'media/users/memo/6037a2bf5d382.jpg', 0, '2021-02-25 13:14:39'),
(3, 'testing2', 'testing2', 'test', 2021, 'hnlfs ndkja', 10, 3, 'IT-B', 300, 'test2@b.b', 'xyzxyzxyz', 'm', '1234444456', 'media/users/pass_photos/6037f5524579e.jpg', 'media/users/memo/6037f55237aad.jpg', 0, '2021-02-25 19:06:58'),
(4, 'pubg', 'pubg', 'china', 2021, '4-12-236/A, plot no.16, Behind Bhagyalatha Hospital, Bhagyalatha(BDL) colony, Vanasthalipuram', 3, 1, 'CSE-A', 1234, 'pubg@pg.com', 'pubgpubg', 'm', '6301380289', 'media/users/pass_photos/604f56c11fb94.jpeg', 'media/users/memo/604f56c11f29a.jpeg', 0, '2021-03-15 12:44:49'),
(5, 'l', 'o', 'v', 2021, '4-12-236/A, plot no.16, Behind Bhagyalatha Hospital, Bhagyalatha(BDL) colony, Vanasthalipuram', 1, 2, 'CSE-B', 1234, 'pubg@p.com', 'zxcvbnm,', 'f', '5301380280', 'media/users/pass_photos/60503788d75ce.jpeg', 'media/users/memo/60503788d6ddf.jpeg', 0, '2021-03-16 04:43:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `cse01_i`
--
ALTER TABLE `cse01_i`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `cse01_s`
--
ALTER TABLE `cse01_s`
  ADD PRIMARY KEY (`student_email`);

--
-- Indexes for table `cse02_i`
--
ALTER TABLE `cse02_i`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `cse02_s`
--
ALTER TABLE `cse02_s`
  ADD PRIMARY KEY (`student_email`);

--
-- Indexes for table `cse03_i`
--
ALTER TABLE `cse03_i`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `cse03_s`
--
ALTER TABLE `cse03_s`
  ADD PRIMARY KEY (`student_email`);

--
-- Indexes for table `cse04_i`
--
ALTER TABLE `cse04_i`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `cse04_s`
--
ALTER TABLE `cse04_s`
  ADD PRIMARY KEY (`student_email`);

--
-- Indexes for table `cse05_i`
--
ALTER TABLE `cse05_i`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `cse05_s`
--
ALTER TABLE `cse05_s`
  ADD PRIMARY KEY (`student_email`);

--
-- Indexes for table `cse06_i`
--
ALTER TABLE `cse06_i`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `cse06_s`
--
ALTER TABLE `cse06_s`
  ADD PRIMARY KEY (`student_email`);

--
-- Indexes for table `cse07_i`
--
ALTER TABLE `cse07_i`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `cse07_s`
--
ALTER TABLE `cse07_s`
  ADD PRIMARY KEY (`student_email`);

--
-- Indexes for table `cse08_i`
--
ALTER TABLE `cse08_i`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `cse08_s`
--
ALTER TABLE `cse08_s`
  ADD PRIMARY KEY (`student_email`);

--
-- Indexes for table `cse09_i`
--
ALTER TABLE `cse09_i`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `cse09_s`
--
ALTER TABLE `cse09_s`
  ADD PRIMARY KEY (`student_email`);

--
-- Indexes for table `scc`
--
ALTER TABLE `scc`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
