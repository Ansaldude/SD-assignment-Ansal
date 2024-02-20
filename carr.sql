-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 01:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carr`
--

-- --------------------------------------------------------

--
-- Table structure for table `cardetails`
--

CREATE TABLE `cardetails` (
  `carid` int(11) NOT NULL,
  `car_type` varchar(30) NOT NULL,
  `fare` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cardetails`
--

INSERT INTO `cardetails` (`carid`, `car_type`, `fare`, `time`, `date`) VALUES
(0, 'Toyota Camry', 'Rs. 2000 ', '1 day', '2024-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `email`, `date`, `comment`) VALUES
(1, 'adsss', 'df@gmail.com', '2024-02-21', 'dfgfgf');

-- --------------------------------------------------------

--
-- Table structure for table `passengerdetails`
--

CREATE TABLE `passengerdetails` (
  `passenger_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `passengerdetails`
--

INSERT INTO `passengerdetails` (`passenger_id`, `name`, `address`, `contact`, `email`) VALUES
(0, 'adsss', 'sdfgh', '1234567', 'df@gmail.com'),
(2, 'anjila', 'ktm', '134567', '2');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `card_type` varchar(30) NOT NULL,
  `card_no` varchar(100) NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `name`, `postal_code`, `card_type`, `card_no`, `expiry_date`) VALUES
(0, 'Ansal Subedi', '2344', 'Master Card', '34567654565', '2024-03-02'),
(1, 'anjila', '1234', '123444', '12342', '2019-09-12'),
(6, 'anjila', '1234', '01', '12345', '0000-00-00'),
(8, 'ram', '1234', 'visa Card', '12345678', '2019-09-12'),
(9, 'ram karki', '1234', 'Master Card', '12345678', '2019-09-04'),
(10, 'ram', '1234', 'Visa Card', '123456789', '2019-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `reserved`
--

CREATE TABLE `reserved` (
  `carid` int(11) NOT NULL,
  `car_type` varchar(30) NOT NULL,
  `fare` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reserved`
--

INSERT INTO `reserved` (`carid`, `car_type`, `fare`, `time`, `date`) VALUES
(0, 'Toyota', 'Rs.', '1', '2024-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `userid` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`userid`, `fullname`, `lastname`, `username`, `email`, `password`, `confirm_password`) VALUES
(8, 'anjila', 'subedi', 'admin', 'anjilasubedi95@gmail.com', 'admin', ''),
(0, 'Ansal', 'Subedi', 'admin', 'df@gmail.com', '21232f297a57a5a743894a0e4a801fc3', ''),
(0, 'Ansal', 'Subedi', 'admin', 'df@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fullname`, `lastname`, `username`, `email`, `password`, `confirm_password`) VALUES
(8, 'anjila', 'subedi', 'anjila', 'anjilasubedi95@gmail.com', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70'),
(0, 'Ansal', 'adsss', 'as', 'df@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cardetails`
--
ALTER TABLE `cardetails`
  ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `passengerdetails`
--
ALTER TABLE `passengerdetails`
  ADD PRIMARY KEY (`passenger_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `reserved`
--
ALTER TABLE `reserved`
  ADD PRIMARY KEY (`carid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
