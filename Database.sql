-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 05:05 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `Acc_title` varchar(25) NOT NULL,
  `Acc_num` varchar(14) NOT NULL,
  `IBAN` varchar(16) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Amount` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Acc_title`, `Acc_num`, `IBAN`, `Username`, `Amount`) VALUES
('Nauman', '22222222222222', 'Pk22222222222222', 'bsce20028@itu.edu.pk', 50000),
('Ashhar', '11111111111111', 'Pk11111111111111', 'iashharali.18@gmail.com', 90000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CNIC` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CNIC`) VALUES
('35202-0200909-1'),
('35202-2369358-3');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Firstname` varchar(40) NOT NULL,
  `Lastname` varchar(40) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `CNIC` varchar(15) NOT NULL,
  `Phonenumber` varchar(15) NOT NULL,
  `Date` int(11) NOT NULL,
  `Month` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `verification_code` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Firstname`, `Lastname`, `Email`, `Password`, `CNIC`, `Phonenumber`, `Date`, `Month`, `Year`, `Gender`, `verification_code`) VALUES
('Ashhar', 'Ali', 'bsce20028@itu.edu.pk', '$2y$10$FS3AXUD9K37l7DoEizuNPe/nRhNprk5EpAWvEy60U.CuLuzBClZrK', '35202-2369358-3', '+92-312-4884890', 1, 1, 1996, 'Male', '6abad0bf');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `ID` int(11) NOT NULL,
  `R_Acc_num` varchar(14) NOT NULL,
  `T_purpose` varchar(100) NOT NULL,
  `D_Category` varchar(100) NOT NULL,
  `L_purpose` varchar(100) NOT NULL,
  `Amount` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Bank_name` varchar(100) NOT NULL,
  `verification_code` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`ID`, `R_Acc_num`, `T_purpose`, `D_Category`, `L_purpose`, `Amount`, `Username`, `Bank_name`, `verification_code`) VALUES
(2, '0', '0', '0', 'other', 70000, 'bsce20028@itu.edu.pk', '0', '0'),
(3, '11111111111111', 'Other', '0', '0', 20000, 'bsce20028@itu.edu.pk', 'HBL', '4f60ea9c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CNIC`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`CNIC`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `accounts` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
