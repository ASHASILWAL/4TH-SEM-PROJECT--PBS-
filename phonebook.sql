-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2022 at 04:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetails`
--

CREATE TABLE `admindetails` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `usernames` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admindetails`
--

INSERT INTO `admindetails` (`contact_id`, `name`, `usernames`, `email`, `password`) VALUES
(1, 'Admin PBS', 'admin', 'admin@gmail.com', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`contact_id`, `contact_name`, `designation`, `phone`, `address`) VALUES
(40, 'Sandesh Thapa', 'Accountant', '9813543214', 'Lalitpur'),
(39, 'Simran Rai', 'Marketing Director', '016622093', 'Lalitpur'),
(42, 'Kiran Shrestha', 'Secretary', '9845543213', 'Bhktapur'),
(45, 'Simon Sharma', 'Accountant', '9841543215', 'Bhaktapur'),
(47, 'Kusum Thapa', 'Project Manager', '9841543219', 'Lalitpur'),
(50, 'Radika Silwal', 'Receptionist', '017789235', 'Bhaktapur'),
(49, 'Malina Deshar', 'System Administrator', '9810543211', 'Bhaktapur'),
(52, 'Aakash Basnet', 'Marketing Director', '9860543218', 'Jhapa'),
(53, 'Sunita Lama ', 'Accountant', '9845543221', 'Jhapa'),
(54, 'Hari Silwal', 'Project Manager', '9808543342', 'Jhapa'),
(56, 'Manoj Shrestha', 'Receptionist', '019966287', 'Jhapa'),
(80, 'Binisha Poudel', 'Receptionist', '9823754088', 'Lalitpur'),
(78, 'Dipendra Shah', 'Manager', '012200567', 'Bhaktapur'),
(73, 'Samir Tamang', 'Data Administrator', '9823764044', 'Jhapa'),
(79, 'Rima Sikdel', 'Secretary', '014466237', 'Lalitpur');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `contact_id` int(11) NOT NULL COMMENT 'Primary Key',
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`contact_id`, `name`, `username`, `email`, `password`) VALUES
(35, 'Asha Silwal', 'asha', 'asha@gmail.com', 'aaaaaaaaaa'),
(43, 'Puja Thapa', 'puja', 'p@gmail.com', 'pppppppppp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindetails`
--
ALTER TABLE `admindetails`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `contactdetails`
--
ALTER TABLE `contactdetails`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindetails`
--
ALTER TABLE `admindetails`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contactdetails`
--
ALTER TABLE `contactdetails`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key', AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
