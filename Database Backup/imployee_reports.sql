-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 09:44 AM
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
  `ID` int(11) NOT NULL,
  `گزارش فعالیت های انجام شده` varchar(80) NOT NULL,
  `زمان اجرای فعالیت` varchar(40) NOT NULL,
  `مربوط پلان عملیاتی/خارج فعالیت عملیاتی` varchar(80) NOT NULL,
  `فیصدی پیشرفت` varchar(40) NOT NULL,
  `نتیجه/دستاورد` varchar(40) NOT NULL,
  `مشکلات/نواقص و کمبودات` varchar(50) NOT NULL,
  `راه حل پیشنهادی` varchar(60) NOT NULL,
  `ملاحظات` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imployee_reports`
--
ALTER TABLE `imployee_reports`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imployee_reports`
--
ALTER TABLE `imployee_reports`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
