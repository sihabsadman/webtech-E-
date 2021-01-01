-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 07:09 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `AdminID` int(11) NOT NULL,
  `Adminpass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `AdminID`, `Adminpass`) VALUES
(1, 12345678, 'ss12345678');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(200) NOT NULL,
  `Student_Name` varchar(200) NOT NULL,
  `Student_ID` varchar(20) NOT NULL,
  `Father_Name` varchar(200) NOT NULL,
  `Mother_Name` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Section` varchar(5) NOT NULL,
  `Class` varchar(5) NOT NULL,
  `Roll` varchar(100) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Session` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Academic` varchar(100) NOT NULL,
  `Grade_report` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Student_Name`, `Student_ID`, `Father_Name`, `Mother_Name`, `Address`, `Section`, `Class`, `Roll`, `Phone`, `Email`, `Session`, `Gender`, `Academic`, `Grade_report`) VALUES
(8, 'Shihab', '12345', 'fegfddg', 'fesgdfbfg', 'dftugy', 'A', '4', 'Roll', 2147483647, 'sadmanshihab@gmail.com', 'Half Yearly', 'Male', 'Registation', 'English'),
(10, 'Sadman shihab', '43222', 'wfefsd', 'wfseeeb', 'dwfegww', 'A', '1', 'Roll', 2147483647, 'sadmanshihab@gmail.com', 'Half Yearly', 'Male', 'offered course', 'Bangla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
