-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2023 at 11:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `archived_history`
--

CREATE TABLE `archived_history` (
  `his_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archived_history`
--

INSERT INTO `archived_history` (`his_id`, `subject`, `message`, `status`) VALUES
(6, 'ggggggg', 'kakakkakak', 'approved'),
(7, 'hhhhhhh', 'hhhhhhh', 'approved'),
(8, 'dddddddddddddddd', 'gggggggggggggg', 'approved'),
(9, 'cccccccc', 'ccccccccccc', 'approved'),
(11, 'ooooooooooooooooo', 'cwewwwwwwww', 'approved'),
(16, '20', '56', 'approved'),
(18, 'Hiwwwwwww', 'hahahaha', 'approved'),
(19, 'bbbbbbbbbbbbbbbbbn', 'ffn', 'approved'),
(21, 'llllllllll;', 'qqqqq', 'Approved'),
(22, '11111111111111', '1111111', 'Approved'),
(23, '2222222222222', '22222222', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `pc_num` int(5) NOT NULL,
  `itemscol` varchar(255) NOT NULL,
  `serial` varchar(50) NOT NULL,
  `room` varchar(255) NOT NULL,
  `item_condition` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `pc_num`, `itemscol`, `serial`, `room`, `item_condition`) VALUES
(47, 1, 'Monitor', 'XXAsj563SJHD', 'Laboratory 1', 'Working'),
(48, 1, 'Mouse', 'XXAsj563SJHD', 'Laboratory 1', 'Working'),
(50, 1, 'Automatic Voltage Regulator', 'XXAsj563SJHD', 'Laboratory 1', 'Working'),
(51, 1, 'Uninterruptible Power Supply', 'XXAsj563SJHD', 'Laboratory 1', 'Working'),
(52, 2, 'Headset', 'XXAsj563SJHD', 'Laboratory 1', 'Working'),
(53, 4, 'Webcam', 'XXAsj563SJHD', 'Laboratory 1', 'Working');

-- --------------------------------------------------------

--
-- Table structure for table `logged`
--

CREATE TABLE `logged` (
  `emp_id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mi` varchar(1) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `emp_pos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logged`
--

INSERT INTO `logged` (`emp_id`, `Username`, `Password`, `fname`, `mi`, `lname`, `emp_pos`) VALUES
(1, 'admin', 'admin', 'Administrator', 'A', 'Administrator', ''),
(10, 'user', 'user', 'User', 'U', 'User', ''),
(12, 'waning', 'gdtyty', 'Adasdaa', 'Q', 'Qwerwrwew', ''),
(13, 'user1', 'admin', 'Test', 'T', 'Test', ''),
(15, 'jobs', '12345', 'Jobert', 'C', 'Grapa', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `item_need` varchar(255) NOT NULL,
  `requested_by` varchar(255) NOT NULL,
  `date_requested` date NOT NULL,
  `req_room` varchar(255) NOT NULL,
  `item_quantity` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archived_history`
--
ALTER TABLE `archived_history`
  ADD PRIMARY KEY (`his_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `logged`
--
ALTER TABLE `logged`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archived_history`
--
ALTER TABLE `archived_history`
  MODIFY `his_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `logged`
--
ALTER TABLE `logged`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
