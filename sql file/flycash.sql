-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 02:00 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flycash`
--

-- --------------------------------------------------------

--
-- Table structure for table `abid`
--

CREATE TABLE `abid` (
  `type` varchar(100) DEFAULT NULL,
  `number` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `username`, `password`, `gender`, `dob`) VALUES
('Faiyaz Shahrear', 'shahrearfaiyaz@gmail.com', 'Faiyaz', '11111111', 'Male', '2001-01-01'),
('Faiyaz Shahrear', 'shahrearfaiyaz@gmail.com', 'Faiyaz', '12345678', 'Male', '2001-01-01'),
('Shahre', 'z@gmail.com', 'Joy', '11223344', 'Male', '2001-01-01'),
('Shahre', 'z@gmail.com', 'Joy', '11223344', 'Male', '2001-01-01'),
('Niloy Hasan', 'shahrearfz@gmail.com', 'Shahrear', '123123123', 'Male', '2001-01-02'),
('Faiyaz Shahrear', 'shahrearfaiyaz@gmail.com', 'Faiyaz', '12345678', 'Male', '1997-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `admin_image`
--

CREATE TABLE `admin_image` (
  `username` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_image`
--

INSERT INTO `admin_image` (`username`, `image`) VALUES
('Shahre', '../../assets/admin/upload/fazbaba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `borno`
--

CREATE TABLE `borno` (
  `type` varchar(100) DEFAULT NULL,
  `number` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borno`
--

INSERT INTO `borno` (`type`, `number`, `amount`, `date`, `id`) VALUES
('Cash IN', '111111111111', '50000', '2021-04-25', '8jt0vhz3'),
('Send Money', '0123456789', '500', '2021-04-25', 'fdwpre7u'),
('Cash out', '00000', '5', '2021-04-25', 'eni2fulz');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `username` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`username`, `image`) VALUES
('Hasan', '../../assets/upload/Jahidul Hasan.jpg'),
('Hasan', '../../assets/upload/Jahidul Hasan.jpg'),
('Borno', '../assets/upload/IMG_20201204_171223.jpg'),
('Faiyaz', '../../assets/upload/fazbaba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mechant_image`
--

CREATE TABLE `mechant_image` (
  `username` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mechant_image`
--

INSERT INTO `mechant_image` (`username`, `image`) VALUES
('Faiyaz', '../../assets/upload/fazbaba.jpg'),
('Borna', '../../assets/upload/fazbaba.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE `merchant` (
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `nid_number` varchar(255) NOT NULL,
  `pin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`name`, `user_name`, `email`, `account_number`, `nid_number`, `pin`, `password`, `gender`, `date_of_birth`, `balance`) VALUES
('Sabira Hossain', 'Borna', 'z@gmail.com', '01987654322', '1234567890', '1234', '12345678', 'Male', '2005-12-09', '0');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `name` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `dob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`name`, `email`, `gender`, `dob`) VALUES
('Faiyaz', 'shahrearfaiyaz@gmail.com', 'Male', '2021-04-19'),
('Kabir', 'kabir@gmail.com', 'Male', '1998-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `serial_no` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `transaction_type` varchar(255) NOT NULL,
  `current_balance` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`serial_no`, `user_name`, `account_number`, `amount`, `transaction_type`, `current_balance`, `date`) VALUES
(1, 'borno', '01521242186', '500', 'Add Money (Bkash)', '500', '20-04-2021'),
(2, 'borno', '01716653557', '500', 'Add Money (Nagad)', '1000', '20-04-2021'),
(3, 'borno', '01716653557', '500', 'Add Money (Roket)', '1500', '20-04-2021'),
(4, 'borno', '01521240158', '500', 'Add Money (Bank)', '2000', '20-04-2021'),
(5, 'borno', '01521242186', '300', 'Cash In', '1700', '20-04-2021'),
(6, 'borno', '01521240158', '500', 'Cash Out', '1200', '20-04-2021'),
(7, 'borno', '01521240158', '500', 'Cash Out', '700', '20-04-2021'),
(8, 'borno', '01716653557', '500', 'From Admin', '1200', '20-04-2021'),
(9, 'borno', '01716653557', '284', 'Payment', '916', '20-04-2021'),
(10, 'borno', '01716653557', '50000', 'Add Money (Bkash)', '50916', '21-04-2021'),
(11, 'borno', '01716653557', '1550', 'Cash In', '49366', '22-04-2021'),
(12, 'borno', '49784894897', '500', 'Payment', '48866', '22-04-2021'),
(13, 'orchi', '01716653557', '500', 'Add Money (Bkash)', '500', '24-04-2021'),
(14, 'orchi', '01716653557', '500', 'Add Money (Bkash)', '1000', '25-04-2021'),
(15, 'orchi', '01716653557', '10', 'Cash In', '990', '25-04-2021'),
(16, 'orchi', '01521240158', '500', 'Cash Out', '490', '25-04-2021');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobilenumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `balance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`, `mobilenumber`, `email`, `gender`, `dob`, `balance`) VALUES
('Jahidul Hasan', 'Hasan', 'A4applee%', '01631137535', 'hasanjoy28@gmail.com', 'Male', '1998-02-01', '38496'),
('Sabbir Hossain', 'Borno', 'Asdfg$1233', '01749549840', 'z@gmail.com', 'Male', '2001-10-31', '49495'),
('Faiyaz Shahrear', 'Abid', 'A4applee%', '01749549840', 'z@gmail.com', 'Male', '1996-01-01', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`serial_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
