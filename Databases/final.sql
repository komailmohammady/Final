-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 07:39 AM
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
-- Table structure for table `employeereport`
--

CREATE TABLE `employeereport` (
  `ID` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Did_Reports` varchar(100) NOT NULL,
  `Activity_Time` varchar(100) NOT NULL,
  `Plane` varchar(100) NOT NULL,
  `Improve_Precentage` float NOT NULL,
  `Result` varchar(100) NOT NULL,
  `Problems` varchar(100) NOT NULL,
  `Resolve_Sugestion` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Observation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeereport`
--

INSERT INTO `employeereport` (`ID`, `Username`, `Did_Reports`, `Activity_Time`, `Plane`, `Improve_Precentage`, `Result`, `Problems`, `Resolve_Sugestion`, `Date`, `Observation`) VALUES
(6, 'Komail Mohammady', 'تائید مکتوب شماره 40', 'چهارشنبه', 'خارج از پلان', 90, 'عالی', 'هیچ مشکل ندارد', 'ندارد', '2024-10-23', 'بهترین سیستم است!'),
(7, 'alijan@gmail.com', 'تعیین صلاحیت برای کارمندان', 'چهارشنبه', 'پلان مربوطه', 20, 'عالی', 'ندارد', 'امتحان شود', '2024-10-23', ''),
(8, 'Helllo', 'تائید مکتوب شماره 40', 'چهارشنبه', 'خارج از پلان', 90, 'خوب', 'ندارد', 'امتحان شود', '2024-10-23', 'بهترین سیستم است!');

-- --------------------------------------------------------

--
-- Table structure for table `employee_register`
--

CREATE TABLE `employee_register` (
  `ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `FatherName` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `PostType` varchar(100) NOT NULL,
  `JobType` varchar(100) NOT NULL,
  `PostNo` varchar(100) NOT NULL,
  `ReleventDep` varchar(100) NOT NULL,
  `Observation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_register`
--

INSERT INTO `employee_register` (`ID`, `Name`, `LastName`, `FatherName`, `Username`, `Password`, `PostType`, `JobType`, `PostNo`, `ReleventDep`, `Observation`) VALUES
(4, 'احمد مسعود', 'حیدری', 'خلیل احمد', 'ahmad@2020.com', '$2y$10$CIr26UrI/XpFEV9mmlNSjuIl.vdlLs14VcDo/rfmNU34vU7GrhTAW', 'آمر', 'کنترول کارمندان', 'بست اول', 'آمریت امور مکاتب', ''),
(3, 'علی جان', 'سروری', 'غلام محمد', 'alijan@gmail.com', '$2y$10$XKsE0nF11zMGJ6.fGTFPduoFHrbu0mdmZHNg.TXl2TnfHh990Cq36', 'انجنیر نرم افزار', 'ساختن نرم افزار برای اداره', 'بست سوم', 'آمریت تعلیمات خاص', ''),
(5, 'اسدالله', 'جاهد', 'گل احمد', 'asad9999', '$2y$10$dHcGMCsAV2mxnSVz41nSg.ArUvH9.WyL1IIUDVKhwnw7FLfCbHi8a', 'آمر', 'کنترول کارمندان', 'بست اول', 'آمریت امور مکاتب', ''),
(6, 'کمیل', 'محمدی', 'غلام حسین', 'Helllo', '12121212', 'آمر', 'کنترول کارمندان', 'بست اول', 'آمریت امور مکاتب', ''),
(1, 'کمیل', 'محمدی', 'غلام حسین', 'Komail Mohammady', '$2y$10$XMFX9CrA7W/SJ5AcJ2sbQe1myFH4wUGJcEAICY.bDLnHYmRjZfXA.', 'آمر', 'کنترول کارمندان', 'بست اول', 'آمریت امور مکاتب', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employeereport`
--
ALTER TABLE `employeereport`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Username` (`Username`);

--
-- Indexes for table `employee_register`
--
ALTER TABLE `employee_register`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `unique_id` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employeereport`
--
ALTER TABLE `employeereport`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employeereport`
--
ALTER TABLE `employeereport`
  ADD CONSTRAINT `employeereport_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `employee_register` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
