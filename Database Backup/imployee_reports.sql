-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2024 at 11:43 AM
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
  `Reg_Date` date DEFAULT NULL,
  `Observition` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imployee_reports`
--

INSERT INTO `imployee_reports` (`id`, `username`, `did_reports`, `activity_time`, `plan`, `improve_precentage`, `result`, `problems`, `resolve_sugestion`, `Reg_Date`, `Observition`) VALUES
(1, 'hkh', 'kklhh', 'lkklkn', 'lnlkn', 'nlknnlk', 'nlnlkn', 'lnlkn', 'nllk', '2024-10-23', 'jlkhj'),
(2, 'hkh', 'lklkjl', 'klklkkll', 'lkjkjlk', 'lkjkjlk', 'n', 'jlkj', 'ljklk', '2021-10-08', 'lklhlk\'jhl'),
(3, 'hkh', 'knlknlkn', 'lklknl', 'lkknlkjjk', 'lklknl', 'lkknlkn', 'lklknlk', NULL, '2024-10-04', 'nlks'),
(4, 'hkh', 'lklklk', 'lkklklklknnlklkk', 'lklklk', 'kkk', 'joioi', 'khklhlkjh', 'lklklk', '2024-10-05', 'khnlknjn'),
(5, 'hkh', 'kjhkj', 'kjhkjh', 'jkkjn', 'kjnkj', 'knkll', 'nlknlk', 'lkknlkn', '2024-10-06', 'lklknlkn'),
(6, 'hkh', 'kklnlknl', 'lknlknlk', 'lknklknlk', 'nlknlk', 'klnkklnlk', 'lknlknlk', 'lkknlknlk', '2024-11-08', 'kllk');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imployee_reports`
--
ALTER TABLE `imployee_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
