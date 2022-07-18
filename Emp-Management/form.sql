-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 04:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `emp_code` int(8) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `city` varchar(10) NOT NULL,
  `pin` int(6) NOT NULL,
  `emp_dept` varchar(12) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` text NOT NULL,
  `confirm_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`emp_code`, `first_name`, `last_name`, `dob`, `gender`, `mobile_no`, `email`, `city`, `pin`, `emp_dept`, `username`, `password`, `confirm_password`) VALUES
(3, 'KOVIN', 'NEK', '1996-05-24', 'Male', '2147483647', 'KOV@GMAI', 'US', 123645, 'Software', 'KOVIN', 'USKOQWER', 'DGHYRSZK'),
(4, 'KSHITIJA', 'KAMBLE', '2022-07-01', 'Female', '2147483647', 'dp@123gmail.com', 'pune', 412512, 'Legal', 'Kshitija', 'pune122', 'pune1234'),
(5, 'KSHITIJA', 'KAMBLE', '2022-07-16', 'Female', '7721903599', 'dp@123gmail.com', 'pune', 412365, 'Hardware', 'Kshitija', 'jhvdf', 'BDKJBELF'),
(6, 'niti', 'yog', '2001-08-05', 'Female', '9852364798', 'niti1@gmial.com', 'mumbai', 412365, 'Hardware', 'niti ', 'niti', 'niti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`emp_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `emp_code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
