-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 30, 2017 at 05:14 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Hostel_global`
--

-- --------------------------------------------------------

--
-- Table structure for table `merit`
--

CREATE TABLE `merit` (
  `G_ID` int(10) NOT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Distance` float NOT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Percentage` varchar(10) DEFAULT NULL,
  `Quota` varchar(15) DEFAULT NULL,
  `Score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merit`
--

INSERT INTO `merit` (`G_ID`, `Name`, `Email`, `Password`, `City`, `Distance`, `Contact`, `Gender`, `Percentage`, `Quota`, `Score`) VALUES
(1, 'Daksh Brijeshbhai Patel', 'daksh2298@icloud.com', 'daksh2298', 'Ahmedabad', 16.1, '7990151443', 'male', '90', 'gen', 45.66),
(2, 'katil ironman Patel', 'katil2298@icloud.com', 'katil123', 'Ahmedabad', 16.1, '7990151444', 'male', '90', 'obc', 45.66),
(3, 'Dhrumil mahesh purohit', 'dhru@gmail.com', 'asdfg', 'mehsana', 37.7, '6775882323', 'male', '80', 'gen', 54.62),
(4, 'qwe wer ert', 'qwe@g.com', 'asd', 'ahmedabad', 16.1, '6885994848', 'male', '78', 'gen', 40.86),
(5, 'bat man bruce', 'bat@gmail.com', 'asdfg', 'bharuch', 132, '7878784949', 'male', '78', 'sc', 110.4),
(6, 'bruce banner hulk', 'bruce@hulk.com', 'asdfg', 'bhavnagar', 121, '6868474739', 'male', '79', 'obc', 104.2),
(7, 'super girl elina', 'elina@supergirl.com', 'arrow123', 'gandhidham', 191, '3234234456', 'female', '69', 'gen', 142.2),
(8, 'killer frost kaitlin', 'killer@frost.com', 'killer123', 'diu', 235, '6767674948', 'female', '67', 'sc', 167.8),
(9, 'san fran cisco', 'san@cisco.com', 'san123', 'unjha', 53.9, '4949383823', 'female', '78', 'obc', 63.54),
(10, 'Silviya Vijay Velani', 'silviyavelani@gmail.com', '9898', 'Hyderabad', 772, '9825089794', 'female', '87', 'gen', 498),
(11, 'Heena sunil vidhani', 'heenavidhani98@gmail.com', '7676', 'sidhpur', 62.3, '9898989898', 'female', '70', 'sc', 65.38),
(12, 'Jinius Jitendrakumar Patel', 'Jinius123@gmail.com', 'india123456789', 'Ahmedabad', 16.1, '9724246058', 'male', '82', 'gen', 42.46),
(13, 'Sameer Shaileshkumar Prajapati', 'sameerprajapati1@gmail.com', '123456', 'Valsad', 221, '9898419155', 'male', '85', 'obc', 166.6),
(14, 'clark  kent', 'clarkkent@hotmail.com', '123456', 'karnataka', 736, '98765432', 'male', '77', 'sc', 472.4),
(15, 'Sherlock  Holmes', 'sherlockh@gmail.com', '123456', 'mehsana', 37.7, '67835284', 'male', '69', 'gen', 50.22),
(16, 'wonder   woman', 'wwoman@yahoo.com', '123456', 'surendranagar', 89.6, '852349329', 'male', '80', 'gen', 85.76),
(17, 'Vidhi SanjayBhai Patel', 'Vidhipatel@gmail.com', 'vidhi@123', 'Ahmadabad', 16.1, '8141010022', 'female', '80', 'gen', 41.66),
(18, 'Rushi Nainesh Shah', 'i@g.con', 'asdfg', 'Ahmedabad', 16.1, '00000000011', 'male', '99.99', 'gen', 49.656),
(19, 'bruno kaka mars', 'bruno@mars.com', 'bruno12345', 'visnagar', 37.8, '3838595948', 'male', '83', 'sc', 55.88),
(20, 'Sahil Nimesh Patel', 'sahilpatel.sp272.nr@gmail.com', '1234567890', 'Ahmedabad', 16.1, '8200575765', 'male', '90', 'gen', 45.66),
(21, 'steve apple jobs', 'steve@apple.com', 'steve123', 'surat', 180, '6969585847', 'male', '74', 'sc', 137.6),
(22, 'aa aa aa', 'aa', 'aa', 'Ahmedabad', 16.1, '33332', 'male', '34', 'gen', 23.26),
(23, 'aa qq ww', 'aa@ww.com', 'aaa', 'mehsana', 37.7, '2838475622', 'male', '78', 'gen', 53.82),
(24, 'aa qq ww', 'aa@wwq.com', 'qqq', 'dahod', 134, '2838475623', 'male', '71', 'gen', 108.8),
(25, 'aa qq ww', 'aaq@wwq.com', 'qqq', 'dahod', 134, '2838475621', 'male', '71', 'sc', 108.8),
(26, 'aa qq ww', 'qaaq@wwq.com', 'aaa', 'dahod', 134, '2828475621', 'female', '71', 'obc', 108.8),
(27, 'aa qq ww', 'qaaqq@wwq.com', 'qqq', 'dahod', 134, '2828475656', 'female', '71', 'sc', 108.8),
(28, 'aa qq ww', 'qaaqqq@wwq.com', 'aaa', 'dahod', 134, '2822375656', 'female', '71', 'obc', 108.8);

-- --------------------------------------------------------

--
-- Table structure for table `merit_final`
--

CREATE TABLE `merit_final` (
  `Serialno` int(11) NOT NULL,
  `Merit_Rank` int(11) NOT NULL,
  `G_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Distance` float NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Percentage` float NOT NULL,
  `Quota` varchar(15) NOT NULL,
  `Score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merit_final`
--

INSERT INTO `merit_final` (`Serialno`, `Merit_Rank`, `G_ID`, `Name`, `Email`, `Password`, `City`, `Distance`, `Contact`, `Gender`, `Percentage`, `Quota`, `Score`) VALUES
(1, 1, 10, 'Silviya Vijay Velani', '', '', 'Hyderabad', 772, '9825089794', 'female', 87, 'gen', 498),
(2, 2, 7, 'super girl elina', '', '', 'gandhidham', 191, '3234234456', 'female', 69, 'gen', 142.2),
(3, 3, 24, 'aa qq ww', '', '', 'dahod', 134, '2838475623', 'male', 71, 'gen', 108.8),
(4, 4, 16, 'wonder   woman', '', '', 'surendranagar', 89.6, '852349329', 'male', 80, 'gen', 85.76),
(5, 5, 3, 'Dhrumil mahesh purohit', '', '', 'mehsana', 37.7, '6775882323', 'male', 80, 'gen', 54.62),
(6, 6, 23, 'aa qq ww', '', '', 'mehsana', 37.7, '2838475622', 'male', 78, 'gen', 53.82),
(7, 7, 15, 'Sherlock  Holmes', '', '', 'mehsana', 37.7, '67835284', 'male', 69, 'gen', 50.22),
(8, 8, 18, 'Rushi Nainesh Shah', '', '', 'Ahmedabad', 16.1, '00000000011', 'male', 99.99, 'gen', 49.656),
(9, 9, 20, 'Sahil Nimesh Patel', '', '', 'Ahmedabad', 16.1, '8200575765', 'male', 90, 'gen', 45.66),
(10, 10, 1, 'Daksh Brijeshbhai Patel', '', '', 'Ahmedabad', 16.1, '7990151443', 'male', 90, 'gen', 45.66),
(11, 11, 12, 'Jinius Jitendrakumar Patel', '', '', 'Ahmedabad', 16.1, '9724246058', 'male', 82, 'gen', 42.46),
(12, 12, 17, 'Vidhi SanjayBhai Patel', '', '', 'Ahmadabad', 16.1, '8141010022', 'female', 80, 'gen', 41.66),
(13, 13, 4, 'qwe wer ert', '', '', 'ahmedabad', 16.1, '6885994848', 'male', 78, 'gen', 40.86),
(14, 14, 22, 'aa aa aa', '', '', 'Ahmedabad', 16.1, '33332', 'male', 34, 'gen', 23.26),
(15, 15, 13, 'Sameer Shaileshkumar Prajapati', '', '', 'Valsad', 221, '9898419155', 'male', 85, 'obc', 166.6),
(16, 16, 28, 'aa qq ww', '', '', 'dahod', 134, '2822375656', 'female', 71, 'obc', 108.8),
(17, 17, 26, 'aa qq ww', '', '', 'dahod', 134, '2828475621', 'female', 71, 'obc', 108.8),
(18, 18, 6, 'bruce banner hulk', '', '', 'bhavnagar', 121, '6868474739', 'male', 79, 'obc', 104.2),
(19, 19, 9, 'san fran cisco', '', '', 'unjha', 53.9, '4949383823', 'female', 78, 'obc', 63.54),
(20, 20, 2, 'katil ironman Patel', '', '', 'Ahmedabad', 16.1, '7990151444', 'male', 90, 'obc', 45.66),
(21, 21, 14, 'clark  kent', '', '', 'karnataka', 736, '98765432', 'male', 77, 'sc', 472.4),
(22, 22, 8, 'killer frost kaitlin', '', '', 'diu', 235, '6767674948', 'female', 67, 'sc', 167.8),
(23, 23, 21, 'steve apple jobs', '', '', 'surat', 180, '6969585847', 'male', 74, 'sc', 137.6),
(24, 26, 27, 'aa qq ww', '', '', 'dahod', 134, '2828475656', 'female', 71, 'sc', 108.8);

-- --------------------------------------------------------

--
-- Table structure for table `merit_sort`
--

CREATE TABLE `merit_sort` (
  `Merit_Rank` int(11) NOT NULL,
  `G_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Distance` float NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Percentage` float NOT NULL,
  `Quota` varchar(15) NOT NULL,
  `Score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merit_sort`
--

INSERT INTO `merit_sort` (`Merit_Rank`, `G_ID`, `Name`, `Email`, `Password`, `City`, `Distance`, `Contact`, `Gender`, `Percentage`, `Quota`, `Score`) VALUES
(1, 10, 'Silviya Vijay Velani', '', '', 'Hyderabad', 772, '9825089794', 'female', 87, 'gen', 498),
(2, 7, 'super girl elina', '', '', 'gandhidham', 191, '3234234456', 'female', 69, 'gen', 142.2),
(3, 24, 'aa qq ww', '', '', 'dahod', 134, '2838475623', 'male', 71, 'gen', 108.8),
(4, 16, 'wonder   woman', '', '', 'surendranagar', 89.6, '852349329', 'male', 80, 'gen', 85.76),
(5, 3, 'Dhrumil mahesh purohit', '', '', 'mehsana', 37.7, '6775882323', 'male', 80, 'gen', 54.62),
(6, 23, 'aa qq ww', '', '', 'mehsana', 37.7, '2838475622', 'male', 78, 'gen', 53.82),
(7, 15, 'Sherlock  Holmes', '', '', 'mehsana', 37.7, '67835284', 'male', 69, 'gen', 50.22),
(8, 18, 'Rushi Nainesh Shah', '', '', 'Ahmedabad', 16.1, '00000000011', 'male', 99.99, 'gen', 49.656),
(9, 20, 'Sahil Nimesh Patel', '', '', 'Ahmedabad', 16.1, '8200575765', 'male', 90, 'gen', 45.66),
(10, 1, 'Daksh Brijeshbhai Patel', '', '', 'Ahmedabad', 16.1, '7990151443', 'male', 90, 'gen', 45.66),
(11, 12, 'Jinius Jitendrakumar Patel', '', '', 'Ahmedabad', 16.1, '9724246058', 'male', 82, 'gen', 42.46),
(12, 17, 'Vidhi SanjayBhai Patel', '', '', 'Ahmadabad', 16.1, '8141010022', 'female', 80, 'gen', 41.66),
(13, 4, 'qwe wer ert', '', '', 'ahmedabad', 16.1, '6885994848', 'male', 78, 'gen', 40.86),
(14, 22, 'aa aa aa', '', '', 'Ahmedabad', 16.1, '33332', 'male', 34, 'gen', 23.26),
(15, 13, 'Sameer Shaileshkumar Prajapati', '', '', 'Valsad', 221, '9898419155', 'male', 85, 'obc', 166.6),
(16, 28, 'aa qq ww', '', '', 'dahod', 134, '2822375656', 'female', 71, 'obc', 108.8),
(17, 26, 'aa qq ww', '', '', 'dahod', 134, '2828475621', 'female', 71, 'obc', 108.8),
(18, 6, 'bruce banner hulk', '', '', 'bhavnagar', 121, '6868474739', 'male', 79, 'obc', 104.2),
(19, 9, 'san fran cisco', '', '', 'unjha', 53.9, '4949383823', 'female', 78, 'obc', 63.54),
(20, 2, 'katil ironman Patel', '', '', 'Ahmedabad', 16.1, '7990151444', 'male', 90, 'obc', 45.66),
(21, 14, 'clark  kent', '', '', 'karnataka', 736, '98765432', 'male', 77, 'sc', 472.4),
(22, 8, 'killer frost kaitlin', '', '', 'diu', 235, '6767674948', 'female', 67, 'sc', 167.8),
(23, 21, 'steve apple jobs', '', '', 'surat', 180, '6969585847', 'male', 74, 'sc', 137.6),
(24, 5, 'bat man bruce', '', '', 'bharuch', 132, '7878784949', 'male', 78, 'sc', 110.4),
(25, 25, 'aa qq ww', '', '', 'dahod', 134, '2838475621', 'male', 71, 'sc', 108.8),
(26, 27, 'aa qq ww', '', '', 'dahod', 134, '2828475656', 'female', 71, 'sc', 108.8),
(27, 11, 'Heena sunil vidhani', '', '', 'sidhpur', 62.3, '9898989898', 'female', 70, 'sc', 65.38),
(28, 19, 'bruno kaka mars', '', '', 'visnagar', 37.8, '3838595948', 'male', 83, 'sc', 55.88);

-- --------------------------------------------------------

--
-- Table structure for table `merit_waiting`
--

CREATE TABLE `merit_waiting` (
  `Serialno` int(11) NOT NULL,
  `Merit_Rank` int(11) NOT NULL,
  `G_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `City` float NOT NULL,
  `Distance` float NOT NULL,
  `Contact` varchar(15) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Percentage` float NOT NULL,
  `Quota` varchar(15) NOT NULL,
  `Score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merit_waiting`
--

INSERT INTO `merit_waiting` (`Serialno`, `Merit_Rank`, `G_ID`, `Name`, `Email`, `Password`, `City`, `Distance`, `Contact`, `Gender`, `Percentage`, `Quota`, `Score`) VALUES
(1, 24, 5, 'bat man bruce', '', '', 0, 132, '7878784949', 'male', 78, 'sc', 110.4),
(2, 25, 25, 'aa qq ww', '', '', 0, 134, '2838475621', 'male', 71, 'sc', 108.8),
(3, 27, 11, 'Heena sunil vidhani', '', '', 0, 62.3, '9898989898', 'female', 70, 'sc', 65.38),
(4, 28, 19, 'bruno kaka mars', '', '', 0, 37.8, '3838595948', 'male', 83, 'sc', 55.88);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `SR_NO` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`SR_NO`, `Email`, `Password`) VALUES
(1, 'daksh2298@icloud.com', 'daksh2298'),
(2, 'katil2298@icloud.com', 'katil123'),
(3, 'dhru@gmail.com', 'asdfg'),
(4, 'qwe@g.com', 'asd'),
(5, 'bat@gmail.com', 'asdfg'),
(6, 'bruce@hulk.com', 'asdfg'),
(7, 'elina@supergirl.com', 'arrow123'),
(8, 'killer@frost.com', 'killer123'),
(9, 'san@cisco.com', 'san123'),
(10, 'silviyavelani@gmail.com', '9898'),
(11, 'heenavidhani98@gmail.com', '7676'),
(12, 'Jinius123@gmail.com', 'india123456789'),
(13, 'sameerprajapati1@gmail.com', '123456'),
(14, 'clarkkent@hotmail.com', '123456'),
(15, 'sherlockh@gmail.com', '123456'),
(16, 'wwoman@yahoo.com', '123456'),
(17, 'Vidhipatel@gmail.com', 'vidhi@123'),
(18, 'i@g.con', 'asdfg'),
(19, 'bruno@mars.com', 'bruno12345'),
(20, 'sahilpatel.sp272.nr@gmail.com', '1234567890'),
(21, 'steve@apple.com', 'steve123'),
(22, 'aa', 'aa'),
(23, 'aa@ww.com', 'aaa'),
(24, 'aa@wwq.com', 'qqq'),
(25, 'aaq@wwq.com', 'qqq'),
(26, 'qaaq@wwq.com', 'aaa'),
(27, 'qaaqq@wwq.com', 'qqq'),
(28, 'qaaqqq@wwq.com', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `users_admin`
--

CREATE TABLE `users_admin` (
  `SR_NO` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_admin`
--

INSERT INTO `users_admin` (`SR_NO`, `Username`, `Password`) VALUES
(1, 'admin', 'admin12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merit`
--
ALTER TABLE `merit`
  ADD PRIMARY KEY (`G_ID`);

--
-- Indexes for table `merit_final`
--
ALTER TABLE `merit_final`
  ADD PRIMARY KEY (`Serialno`);

--
-- Indexes for table `merit_sort`
--
ALTER TABLE `merit_sort`
  ADD PRIMARY KEY (`Merit_Rank`);

--
-- Indexes for table `merit_waiting`
--
ALTER TABLE `merit_waiting`
  ADD PRIMARY KEY (`Serialno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`SR_NO`);

--
-- Indexes for table `users_admin`
--
ALTER TABLE `users_admin`
  ADD PRIMARY KEY (`SR_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merit`
--
ALTER TABLE `merit`
  MODIFY `G_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `merit_final`
--
ALTER TABLE `merit_final`
  MODIFY `Serialno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `merit_sort`
--
ALTER TABLE `merit_sort`
  MODIFY `Merit_Rank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `merit_waiting`
--
ALTER TABLE `merit_waiting`
  MODIFY `Serialno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `SR_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `users_admin`
--
ALTER TABLE `users_admin`
  MODIFY `SR_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
