-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2020 at 02:38 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcnp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `name`, `contact`, `email`, `username`, `password`) VALUES
(1, 'Simon', '0706567166', '1simongombya@gmail.com', 'bikeshop', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblcnp`
--

CREATE TABLE `tblcnp` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `prize` float DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcnp`
--

INSERT INTO `tblcnp` (`id`, `name`, `prize`, `description`, `image`, `status`) VALUES
(1, 'kids bike', 250000, 'it has support  tiers ', 'images/3.jpg', 'Available'),
(4, 'kids bike', 250000, 'plastic bike', 'images/14373708234782.jpg', 'Available'),
(5, 'bmx', 500000, 'skill bike', 'images/Bicycle-No-Background.png', 'Available'),
(6, 'changer', 350000, 'it has a carrier ', 'images/Bicycle-Free-PNG.png', 'Available'),
(8, 'kids bike', 350000, 'batman pasonalised', 'images/9214567_R_SET.jpg', 'Available'),
(9, 'changer', 450000, 'yellow bird design ', 'images/Bicycle-Transparent-Images.png', 'Available'),
(10, 'changer', 350000, 'very strong and fast', 'images/Bicycle-Transparent-Free-PNG.png', 'Available'),
(11, 'mountain bike', 500000, 'for professional racing ', 'images/Bicycle-PNG-Images-HD.png', 'Available'),
(12, 'bmx', 900000, 'for professional', 'images/Bicycle_MTB_DH_Bike_PNG_Image_35946.png', 'Available'),
(13, 'changer', 900000, 'PARATROOPER-angled', 'images/PARATROOPER-angled-transparent.png', 'Available'),
(14, 'yyjuiii', 256, 'bbnnb', 'images/11861811527710.jpg', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `tblorders`
--

CREATE TABLE `tblorders` (
  `id` int(11) NOT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `cnpoid` int(11) DEFAULT NULL,
  `oqty` int(11) DEFAULT NULL,
  `ostatus` varchar(50) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `otype` varchar(50) DEFAULT NULL,
  `datepickup` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorders`
--

INSERT INTO `tblorders` (`id`, `cname`, `address`, `contact`, `cnpoid`, `oqty`, `ostatus`, `timestamp`, `otype`, `datepickup`) VALUES
(1, 'xex', 'kampala', '00656188', 11, 2, 'Cancel', '2020-07-15 17:30:51', 'Pick-up', '2020-07-16'),
(2, 'tem', 'mteeee', '5688909', 10, 9, 'Completed', '2020-07-15 17:31:34', 'Pick-up', '2020-07-17'),
(3, 'tom', 'mvcvjh', '68900896', 9, 3, 'Completed', '2020-07-15 17:35:31', 'Deliver', '2020-07-19'),
(4, 'troy', 'jenn', '12356890', 8, 5, 'new', '2020-07-15 17:18:24', 'Pick-up', '2020-07-15'),
(5, 'mmert', '1235689', '0986532', 7, 6, 'Completed', '2020-07-15 17:37:10', 'Pick-up', '2020-07-15'),
(6, 'jonh', 'bvbbvvnbn', '68123568', 6, 3, 'Cancel', '2020-07-15 17:35:16', 'Pick-up', '2020-07-15'),
(8, 'wivv', 'jcjj,m n ', '1233899', 2, 3, 'Cancel', '2020-07-24 12:21:43', 'Pick-up', '2020-07-18'),
(9, 'KAY', 'NDEEBA', '567777', 12, 10, 'Cancel', '2020-07-16 14:47:36', 'Deliver', '2020-10-16'),
(10, 'tom', 'eyuoio,,i', '12633223309', 13, 5, 'new', '2020-07-21 17:32:51', 'Deliver', '0000-00-00'),
(11, 'gnvvyjhjnm', 'jbjbjh j j ', '89686969', 14, 99, 'new', '2020-07-24 12:23:48', 'Pick-up', '2020-07-27'),
(12, 'n bnv', ' mn ,,j', '09098', 12, 23, 'new', '2020-07-24 12:24:21', 'Deliver', '0000-00-00'),
(13, 'fhmvmjmhj', 'nvn mnm,', 'mn m ', 13, 3, 'new', '2020-07-24 12:25:41', 'Deliver', '0000-00-00'),
(14, 'GOMBYA', 'fgghvjhvjh', '398989', 4, 3, 'new', '2020-07-24 12:29:46', 'Deliver', '0000-00-00'),
(15, 'iiiii', 'mnnnb', '998999', 1, 8, 'new', '2020-07-24 12:30:29', 'Pick-up', '2020-07-26'),
(16, 'ytyu', 'ytfhf', '8686868', 1, 5, 'new', '2020-07-24 12:32:44', 'Pick-up', '0000-00-00'),
(17, 'yyuyuyyu', 'ghgggh', '56686888', 13, 11, 'new', '2020-07-24 12:33:50', 'Pick-up', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'admin', 'admin@gmail.com', '30ae43ad1aa0a416699051b73a3dfcf6', '2020-07-14 11:22:38'),
(2, 'dj', 'dj@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2020-07-14 11:23:35'),
(3, 'tim', 'tim@gmail.com', 'f91ceb5afe88b7ab6023892165de4033', '2020-07-14 13:47:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcnp`
--
ALTER TABLE `tblcnp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblorders`
--
ALTER TABLE `tblorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblcnp`
--
ALTER TABLE `tblcnp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tblorders`
--
ALTER TABLE `tblorders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
