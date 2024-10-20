-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Oct 17, 2024 at 08:45 AM
=======
-- Generation Time: Oct 20, 2024 at 07:37 AM
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda
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
<<<<<<< HEAD
  `ID` int(11) NOT NULL,
  `گزارش فعالیت های انجام شده` varchar(80) NOT NULL,
  `زمان اجرای فعالیت` varchar(40) NOT NULL,
  `مربوط پلان عملیاتی/خارج فعالیت عملیاتی` varchar(80) NOT NULL,
  `فیصدی پیشرفت` varchar(40) NOT NULL,
  `(نتیجه(دستاورد` varchar(40) NOT NULL,
  `مشکلات/نواقص و کمبودات` varchar(50) NOT NULL,
  `راه حل پیشنهادی` varchar(60) NOT NULL,
  `ملاحظات` varchar(60) NOT NULL
=======
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
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imployee_reports`
--
ALTER TABLE `imployee_reports`
<<<<<<< HEAD
  ADD PRIMARY KEY (`ID`);
=======
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imployee_reports`
--
ALTER TABLE `imployee_reports`
<<<<<<< HEAD
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
=======
  ADD CONSTRAINT `imployee_reports_ibfk_1` FOREIGN KEY (`username`) REFERENCES `register_form` (`user`);
>>>>>>> c1d04958d888712f8b9653deeef6666639e81eda
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
