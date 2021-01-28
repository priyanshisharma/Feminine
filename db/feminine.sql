-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 12:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feminine`
--

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescription_id` varchar(255) NOT NULL,
  `doctorId` varchar(255) NOT NULL,
  `patientId` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `prescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescription_id`, `doctorId`, `patientId`, `title`, `prescription`) VALUES
('patient1601293ab908fc6012951c5fef82.07605849', 'doctor6011c3466814e', 'patient1601293ab908fc', 'Breast Cancer', 'Lorem Ipsum'),
('patient6011c2b66ae146011d42f5e97f0.06109630', 'doctor6011c3466814e', 'patient6011c2b66ae14', 'title', 'dummy pres'),
('patient6011c2b66ae1460126fb1432c08.91420291', 'doctor6011c3466814e', 'patient6011c2b66ae14', 'demo t', 'demo p'),
('patient6011c2b66ae14601289317a84a8.31996254', 'doctor6011c3466814e', 'patient6011c2b66ae14', 'demo tt', 'demo pp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `email`, `occupation`) VALUES
('doctor16012901ab5bb8', 'doctor1', 'doXT3DXgAQCNU', 'doctor1@gmail.com', 'doctor'),
('doctor6011c3466814e', 'doctor', 'doXT3DXgAQCNU', 'doctor@gmail.com', 'doctor'),
('patient1601293ab908fc', 'patient1', 'pa8fg5oAyLo8g', 'patient1@gmail.com', 'patient'),
('patient260129e09637b1', 'patient2', 'pa8fg5oAyLo8g', 'patient2@gmail.com', 'patient'),
('patient360129e53ca7d9', 'patient3', 'pa8fg5oAyLo8g', 'patient3@gmail.com', 'patient'),
('patient6011c2b66ae14', 'patient', 'pa8fg5oAyLo8g', 'patient@gmail.com', 'patient'),
('patient6011c3137c750', 'patient', 'pa8fg5oAyLo8g', 'patient@gmail.com', 'patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
