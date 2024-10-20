-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 07:37 AM
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
  `username` varchar(90) NOT NULL,
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
-- Indexes for dumped tables
--

--
-- Indexes for table `imployee_reports`
--
ALTER TABLE `imployee_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imployee_reports`
--
ALTER TABLE `imployee_reports`
  ADD CONSTRAINT `imployee_reports_ibfk_1` FOREIGN KEY (`username`) REFERENCES `register_form` (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
