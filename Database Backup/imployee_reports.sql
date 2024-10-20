-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2024 at 11:50 AM
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
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `imployee_reports`
--

CREATE TABLE `imployee_reports` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(100) DEFAULT NULL,
  `did_reports` varchar(150) DEFAULT NULL,
  `activity_time` varchar(200) DEFAULT NULL,
  `plan` varchar(200) DEFAULT NULL,
  `improve_precentage` varchar(22) DEFAULT NULL,
  `result` varchar(230) DEFAULT NULL,
  `problems` varchar(99) DEFAULT NULL,
  `resolve_sugestion` varchar(99) DEFAULT NULL,
  `observition` varchar(240) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imployee_reports`
--

INSERT INTO `imployee_reports` (`id`, `employee_name`, `did_reports`, `activity_time`, `plan`, `improve_precentage`, `result`, `problems`, `resolve_sugestion`, `observition`) VALUES
(1, 'wrt', 'rwtwt', 'ertrw', 'wertwe', 'rewt', 'erwt', 'erwtwet', NULL, 'ewrtrwre');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imployee_reports`
--
ALTER TABLE `imployee_reports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employee_name` (`employee_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imployee_reports`
--
ALTER TABLE `imployee_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
