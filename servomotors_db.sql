-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 يونيو 2021 الساعة 22:09
-- إصدار الخادم: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servomotors_db`
--

-- --------------------------------------------------------

--
-- بنية الجدول `servomotorsstatus_table`
--

CREATE TABLE `servomotorsstatus_table` (
  `SMOOID` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `servomotorsstatus_table`
--

INSERT INTO `servomotorsstatus_table` (`SMOOID`, `status`) VALUES
(1, 1),
(2, 0),
(3, 1),
(4, 0),
(5, 1),
(6, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `servomotors_table`
--

CREATE TABLE `servomotors_table` (
  `SMID` int(11) NOT NULL,
  `servoMotor1` int(11) NOT NULL,
  `servoMotor2` int(11) NOT NULL,
  `servoMotor3` int(11) NOT NULL,
  `servoMotor4` int(11) NOT NULL,
  `servoMotor5` int(11) NOT NULL,
  `servoMotor6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `servomotors_table`
--

INSERT INTO `servomotors_table` (`SMID`, `servoMotor1`, `servoMotor2`, `servoMotor3`, `servoMotor4`, `servoMotor5`, `servoMotor6`) VALUES
(1, 90, 90, 90, 90, 90, 90),
(2, 90, 90, 90, 90, 90, 90),
(3, 84, 108, 90, 118, 66, 115),
(4, 115, 165, 151, 131, 180, 90),
(5, 0, 90, 160, 43, 129, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `servomotorsstatus_table`
--
ALTER TABLE `servomotorsstatus_table`
  ADD PRIMARY KEY (`SMOOID`);

--
-- Indexes for table `servomotors_table`
--
ALTER TABLE `servomotors_table`
  ADD PRIMARY KEY (`SMID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `servomotorsstatus_table`
--
ALTER TABLE `servomotorsstatus_table`
  MODIFY `SMOOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `servomotors_table`
--
ALTER TABLE `servomotors_table`
  MODIFY `SMID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
