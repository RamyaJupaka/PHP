-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 08:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbjobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliedjobs`
--

CREATE TABLE `appliedjobs` (
  `JobID` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliedjobs`
--

INSERT INTO `appliedjobs` (`JobID`, `Email`, `Date`) VALUES
(522, 'ooo@gmail.com', '2019-12-03'),
(573, 'hao@gmail.com', '2019-12-02'),
(573, 'ooo@gmail.com', '2019-12-02'),
(573, 'php@gmail.com', '2019-12-02'),
(735, 'ooo@gmail.com', '2019-12-02'),
(796, 'hao@gmail.com', '2019-12-02'),
(854, '', '2019-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `CompanyName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`CompanyName`, `Address`, `Phone`, `Email`, `Password`) VALUES
('', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
('Han', '8788 Pierre', '8760980000', 'hanhao@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
('Hao', 'hao', '6789', 'hao@gmail.com', '6512bd43d9caa6e02c990b0a82652dca'),
('Java', 'Java Rue', '7659879098', 'java@gmail', 'c4ca4238a0b923820dcc509a6f75849b'),
('PHP', 'PHP rue', '768-900-0000', 'php@email.com', 'c4ca4238a0b923820dcc509a6f75849b'),
('PHP Project', 'php rue', '8768768765', 'php@hotmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
('Php Team', 'Lasalle College', '541999-9999', 'phpteam@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
('Python', 'python rue', '876788765', 'python@email', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `jobId` int(50) NOT NULL,
  `jobName` varchar(50) NOT NULL,
  `companyemail` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `JobDes` varchar(100) NOT NULL,
  `Salary` int(10) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`jobId`, `jobName`, `companyemail`, `location`, `JobDes`, `Salary`, `Date`) VALUES
(333, 'JAVA', 'hao@gmail.com', 'MONTREAL', 'java', 67890, '2019-12-02 08:29:43'),
(522, 'Programmer', 'java@gmail', 'USA', 'java developer', 6789, '2019-12-03 02:24:15'),
(573, 'Programming', 'hao@gmail.com', 'MONTREAL', 'java script', 129999, '2019-12-02 08:30:10'),
(854, 'Programmer', 'hao@gmail.com', 'montreal', 'java ', 4444, '2019-12-02 08:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `UserDesc` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FirstName`, `LastName`, `Address`, `Phone`, `Email`, `Password`, `UserDesc`) VALUES
('', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', NULL),
('Hao', 'han', '222 PIERRE', '4567891234', 'hao@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', NULL),
('Hao', 'hao', '222 PIERRE', '789', 'ooo@gmail.com', '202cb962ac59075b964b07152d234b70', 'STUDENT'),
('php', 'phpname', 'php rue', '987-098-0987', 'php@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 'i am php'),
('Student', 'Student', 'somewhere', '8767876543', 'student@mail.com', 'c4ca4238a0b923820dcc509a6f75849b', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appliedjobs`
--
ALTER TABLE `appliedjobs`
  ADD PRIMARY KEY (`JobID`,`Email`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`jobId`),
  ADD KEY `companyemail` (`companyemail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appliedjobs`
--
ALTER TABLE `appliedjobs`
  ADD CONSTRAINT `appliedjobs_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`);

--
-- Constraints for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD CONSTRAINT `jobpost_ibfk_1` FOREIGN KEY (`companyemail`) REFERENCES `company` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
