-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2017 at 07:47 AM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uploadbin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(40) NOT NULL,
  `pswd` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `pswd`) VALUES
('admin1234', '15c4683193f210ca9c640af9241e8c18'),
('anewadmin', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(5) NOT NULL,
  `bname` varchar(40) NOT NULL,
  `cost` int(4) NOT NULL,
  `category` varchar(20) NOT NULL,
  `uzr` varchar(20) NOT NULL,
  `subcat` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(4) NOT NULL,
  `catname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `catname`) VALUES
(10, 'CSE'),
(11, 'ME'),
(12, 'EEE'),
(13, 'ECE'),
(14, 'CE'),
(15, 'ARCHI'),
(16, 'CHEM');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `uzr1` varchar(20) NOT NULL,
  `uzr2` varchar(20) NOT NULL,
  `msgs` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dircontent`
--

CREATE TABLE `dircontent` (
  `id` int(5) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dirname`
--

CREATE TABLE `dirname` (
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dirname`
--

INSERT INTO `dirname` (`id`) VALUES
(10024);

-- --------------------------------------------------------

--
-- Table structure for table `idbook`
--

CREATE TABLE `idbook` (
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idbook`
--

INSERT INTO `idbook` (`id`) VALUES
(10005);

-- --------------------------------------------------------

--
-- Table structure for table `Rishabh0402`
--

CREATE TABLE `Rishabh0402` (
  `bookid` int(5) NOT NULL,
  `buy` int(1) DEFAULT '0',
  `chat` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Rishabh0402`
--

INSERT INTO `Rishabh0402` (`bookid`, `buy`, `chat`) VALUES
(10002, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `subcatid` int(5) NOT NULL,
  `catid` int(5) NOT NULL,
  `subcatname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`subcatid`, `catid`, `subcatname`) VALUES
(10, 10, 'DS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uname` varchar(40) NOT NULL,
  `pswd` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uname`, `pswd`, `name`, `email`, `mobile`) VALUES
('Rishabh0402', '1a1dc91c907325c69271ddf0c944bc72', 'rishabh', 'rishabh0404@gmail.co', 9874359);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `dircontent`
--
ALTER TABLE `dircontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Rishabh0402`
--
ALTER TABLE `Rishabh0402`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`subcatid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `Rishabh0402`
--
ALTER TABLE `Rishabh0402`
  MODIFY `bookid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10003;
--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `subcatid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
