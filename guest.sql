-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 04:35 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guest`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `City` varchar(50) NOT NULL,
  `Area` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`City`, `Area`) VALUES
('Kolar', 'Malur');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Email` varchar(50) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `ImageName` varchar(5000) NOT NULL,
  `ImagePath` varchar(5000) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Room` varchar(50) NOT NULL,
  `Pg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Email`, `Uname`, `Address`, `Phone`, `ImageName`, `ImagePath`, `Status`, `Date`, `Room`, `Pg`) VALUES
('admin1@gmail.com', 'admin', 'Arun malur', '9611590474', 'g4.jpg', './uploads/g4.jpg', 'Empty', '2021-08-20', '545', 'Arun'),
('arunkumar9611590474@gmail.com', 'Pavan', 'malur', '9611590474', 'g4.jpg', './uploads/g4.jpg', 'Booked', '2021-08-18', '502', 'Arun');

-- --------------------------------------------------------

--
-- Table structure for table `citys`
--

CREATE TABLE `citys` (
  `City` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citys`
--

INSERT INTO `citys` (`City`) VALUES
('Banglore'),
('Kolar'),
('Manglore');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `Email` varchar(50) NOT NULL,
  `Room` varchar(50) NOT NULL,
  `Pg` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Uname` varchar(50) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `ImagePath` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`Email`, `Room`, `Pg`, `Phone`, `Uname`, `Address`, `Date`, `ImagePath`) VALUES
('admin1@gmail.com', '545', 'Arun', '9611590474', 'admin', 'Arun malur', '2021-08-20', './uploads/g4.jpg'),
('admin1@gmail.com', '545', 'Arun', '9611590474', 'admin', 'Arun malur', '2021-08-20', './uploads/g4.jpg'),
('admin1@gmail.com', '545', 'Arun', '9611590474', 'admin', 'Arun malur', '2021-08-20', './uploads/g4.jpg'),
('admin1@gmail.com', '545', 'Arun', '9611590474', 'admin', 'Arun malur', '2021-08-20', './uploads/g4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `Pg` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `ImageName` varchar(50) NOT NULL,
  `ImagePath` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`Pg`, `Name`, `Email`, `Password`, `Address`, `Phone`, `City`, `Gender`, `ImageName`, `ImagePath`, `Status`) VALUES
('Arun', 'Arun', 'arunkumar9611590474@gmail.com', '111', 'Malur', '9611590474', '', 'Male', 'a3.jpg', './uploads/a3.jpg', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room` varchar(50) NOT NULL,
  `Pg` varchar(50) NOT NULL,
  `Amount` int(50) NOT NULL,
  `Descp` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `ImageName` varchar(4000) NOT NULL,
  `ImagePath` varchar(4000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room`, `Pg`, `Amount`, `Descp`, `Status`, `ImageName`, `ImagePath`) VALUES
('101', 'Kumar PG', 0, 'Arun@bvhgvg', 'Booked', '4.jpg', './uploads/4.jpg'),
('456', 'Kumar PG', 5000, 'Room good', 'Booked', '1.jpg', './uploads/1.jpg'),
('501', 'Kumar PG', 5000, 'wqrewgrhfv', 'Booked', 'fback.JPG', './uploads/fback.JPG'),
('545', 'Arun', 0, 'jkhgvughb', 'Empty', '2.jpg', './uploads/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Uname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `ImageName` varchar(5000) NOT NULL,
  `ImagePath` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Uname`, `Email`, `Password`, `Gender`, `Phone`, `Address`, `ImageName`, `ImagePath`) VALUES
('admin', 'arunkumar9611590474@gmail.com', '123', 'Male', '9611590474', 'Arun malur', 'g4.jpg', './uploads/g4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`City`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`Pg`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
