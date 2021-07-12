-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 08:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitprousers`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `W_id` int(20) NOT NULL,
  `Trainer` varchar(255) NOT NULL,
  `Workout` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Intensity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`W_id`, `Trainer`, `Workout`, `Location`, `Date`, `Time`, `Price`, `Intensity`) VALUES
(4, 'Madhumita', 'Kickboxing', 'Vikhroli', '2021-03-10', '22:16:00', '8000', 'Beginners'),
(8, 'Ujjval', 'Yoga', 'Charni Road', '2021-03-02', '22:18:00', '23,000', 'Beginners');

-- --------------------------------------------------------

--
-- Table structure for table `duffel`
--

CREATE TABLE `duffel` (
  `W_id` int(11) NOT NULL,
  `Trainee` varchar(255) NOT NULL,
  `Trainer` varchar(255) NOT NULL,
  `Workout` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Date` int(11) NOT NULL,
  `Time` int(11) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Intensity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `duffel`
--

INSERT INTO `duffel` (`W_id`, `Trainee`, `Trainer`, `Workout`, `Location`, `Date`, `Time`, `Price`, `Intensity`) VALUES
(7, 'sona', 'Madhumita', 'TRX', 'Vile Parle (W)', 2021, 22, 'Advanced', '3,00,000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Role` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Name`, `E-mail`, `Password`, `Role`, `Gender`, `City`, `Age`) VALUES
(23, 'Madhumita', 'mrj@gmail.com', '123456', 'Trainer', 'female', 'Mumbai', '15-20'),
(24, 'sona', 'sd@gmail.com', 'sonadarak', 'Trainee', 'Other', 'Kolkata', '20-30'),
(25, 'Amit', 'am@gmail.com', 'XXXXXX', 'Trainee', 'Male', 'Mumbai', '20-30'),
(26, 'Kunal', 'kb@gmail.com', 'YYYYYY', 'Trainee', 'Male', 'Delhi', '35-55'),
(27, 'Anmol', 'anymany@gmail.com', 'anymany', 'Trainee', 'Male', 'Mumbai', '15-20'),
(28, 'Saakshi', 'sak@gmail.com', 'saksak', 'Trainee', 'Female', 'Mumbai', '15-20'),
(29, 'Ujjval', 'ujju@gmail.com', 'hahaha', 'Trainer', 'Female', 'Mumbai', '15-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`W_id`);

--
-- Indexes for table `duffel`
--
ALTER TABLE `duffel`
  ADD PRIMARY KEY (`Date`,`Time`),
  ADD UNIQUE KEY `D_id` (`W_id`),
  ADD UNIQUE KEY `Date_2` (`Date`,`Time`),
  ADD KEY `Date` (`Date`,`Time`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_details`
--
ALTER TABLE `booking_details`
  MODIFY `W_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
