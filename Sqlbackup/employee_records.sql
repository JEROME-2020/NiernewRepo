-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 09:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niercode`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee records`
--

CREATE TABLE `employee records` (
  `emp_id` int(3) NOT NULL,
  `emp_fullname` varchar(50) NOT NULL,
  `emp_position` varchar(50) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `emp_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee records`
--

INSERT INTO `employee records` (`emp_id`, `emp_fullname`, `emp_position`, `gender`, `address`, `emp_password`) VALUES
(4, 'Jerome', 'Manager', 'Male', 'Imelda', 'asdsa'),
(5, 'Judy ann C. Chunho ', 'Teamleader', 'Male', 'Imelda', 'asdsa'),
(6, 'Bona pogi', 'Crew', 'Male', 'Imelda Cabanatuan City Nueva Ecija', '1244'),
(7, 'JunJun D Maire', 'Crew', 'Male', 'General Trias Cavite', '1244');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee records`
--
ALTER TABLE `employee records`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee records`
--
ALTER TABLE `employee records`
  MODIFY `emp_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
