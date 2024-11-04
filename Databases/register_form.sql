-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<<< HEAD:Databases/messages.sql
-- Generation Time: Oct 28, 2024 at 05:34 AM
========
-- Generation Time: Oct 20, 2024 at 07:38 AM
>>>>>>>> 86d55ce7414deceb38c987824110e342c508389c:Databases/register_form.sql
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
<<<<<<<< HEAD:Databases/messages.sql
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_sent` timestamp NOT NULL DEFAULT current_timestamp()
========
-- Table structure for table `register_form`
--

CREATE TABLE `register_form` (
  `id` int(11) DEFAULT NULL,
  `Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `F_Name` varchar(50) NOT NULL,
  `user` varchar(88) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Conform_Password` varchar(50) NOT NULL,
  `Post_Type` varchar(60) NOT NULL,
  `Job_Type` varchar(60) NOT NULL,
  `Post_No` int(30) NOT NULL,
  `Relevant_Department` varchar(60) NOT NULL,
  `Observation` varchar(150) NOT NULL
>>>>>>>> 86d55ce7414deceb38c987824110e342c508389c:Databases/register_form.sql
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `date_sent`) VALUES
(1, 'send this message', '2024-10-27 09:27:53'),
(2, 'your close to your gules  ', '2024-10-27 09:30:01');

--
-- Indexes for dumped tables
--

--
<<<<<<<< HEAD:Databases/messages.sql
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
========
-- Indexes for table `register_form`
--
ALTER TABLE `register_form`
  ADD PRIMARY KEY (`user`),
  ADD UNIQUE KEY `id` (`id`);
>>>>>>>> 86d55ce7414deceb38c987824110e342c508389c:Databases/register_form.sql
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
