-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 03:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms3`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auth`
--

CREATE TABLE `tbl_auth` (
  `auth_id` int(11) NOT NULL,
  `auth_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_auth`
--

INSERT INTO `tbl_auth` (`auth_id`, `auth_name`) VALUES
(2, 'Dale Carnegie'),
(3, 'Malcom '),
(7, 'Eckart Tolle'),
(8, 'Mark manson'),
(9, 'robert kyosaki'),
(12, 'maher'),
(13, 'maher2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `bookid` int(11) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `auth` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`bookid`, `bookname`, `desc`, `auth`, `stock`) VALUES
(14, 'Maher\'s Book', '', '8', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dep`
--

CREATE TABLE `tbl_dep` (
  `depid` int(11) NOT NULL,
  `depname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dep`
--

INSERT INTO `tbl_dep` (`depid`, `depname`) VALUES
(4, 'applied Physics'),
(5, 'ICT'),
(6, 'spirit'),
(7, 'Finance'),
(8, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_issue`
--

CREATE TABLE `tbl_issue` (
  `id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `bname` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `return` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_issue`
--

INSERT INTO `tbl_issue` (`id`, `user_id`, `sname`, `bname`, `date`, `return`) VALUES
(8, 0, '1', 10, '2020-01-27 14:24:04', '20/02/2020'),
(9, 0, '3', 11, '2020-01-27 16:38:44', '25/02/2020'),
(10, 0, '4', 12, '2021-07-16 15:55:19', '2021-07-23'),
(11, 0, '4', 11, '2021-07-16 15:55:45', '2021-07-23'),
(12, 0, '4', 13, '2021-07-16 16:04:39', '2021-07-22'),
(13, 0, '1', 11, '2021-07-17 12:19:37', '2021-07-30'),
(14, 3, '1', 12, '2021-07-17 12:21:25', '2021-07-29'),
(15, 1, '3', 14, '2021-07-17 12:53:29', '2021-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `roll` int(20) NOT NULL,
  `reg` int(11) NOT NULL,
  `session` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `name`, `dept`, `roll`, `reg`, `session`, `batch`, `phone`, `email`) VALUES
(1, 'Asfak Munna', '5', 11509023, 11509023, '20014-15', '6th', '01521259536', 'asfakmunna@yahoo.com'),
(2, 'pyal shaha', '5', 11509002, 11509002, '20014-15', '6th', '019XXXXXX', 'XXXXXX@gmail.com'),
(3, 'Tushar Ahmed', '7', 11709049, 11709049, '2015-16', '10th', '019XXXXXX', 'XXXXXX@gmail.com'),
(4, 'Mohamed Magdy', '', 0, 0, '', '', '01000046532', 'mohamed.m.mostafa61@gmail.com'),
(5, 'Ahmed', '', 0, 0, '', '', '01000046532', 'mohamed.magdy@total.eg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `pass`, `fname`, `lname`, `email`, `phone`, `type`) VALUES
(1, 'magdy', '123', 'Asfak', 'Ahmed', 'Asfakmunna@yahoo.com', '01521259536', 'admin'),
(3, 'maher', '123456', 'Mohamed', 'Maher', 'mohamedmagdi6193@gmail.com', '01000', 'user'),
(4, 'ahmed', '', '', '', 'mohamed.m.mostafa61@gmail.com', '01000046532', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_auth`
--
ALTER TABLE `tbl_auth`
  ADD PRIMARY KEY (`auth_id`);

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `tbl_dep`
--
ALTER TABLE `tbl_dep`
  ADD PRIMARY KEY (`depid`);

--
-- Indexes for table `tbl_issue`
--
ALTER TABLE `tbl_issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_auth`
--
ALTER TABLE `tbl_auth`
  MODIFY `auth_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_dep`
--
ALTER TABLE `tbl_dep`
  MODIFY `depid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_issue`
--
ALTER TABLE `tbl_issue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
