-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2024 at 12:47 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

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

DROP TABLE IF EXISTS `archived_history`;
CREATE TABLE IF NOT EXISTS `archived_history` (
  `his_id` int NOT NULL AUTO_INCREMENT,
  `subject` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`his_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int NOT NULL AUTO_INCREMENT,
  `pc_num` int NOT NULL,
  `itemscol` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `serial` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `room` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `item_condition` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `m_con` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `k_con` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `ups_con` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `f_con` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `avr_con` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `item_need` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `pc_num`, `itemscol`, `serial`, `room`, `item_condition`, `m_con`, `k_con`, `ups_con`, `f_con`, `avr_con`, `item_need`, `date_added`) VALUES
(77, 0, 'TV', 'dfsdfa435345', '', 'working', 'Availed', '', '', '', '', '', '2024-05-11'),
(78, 0, 'TV', 'd453dfsd', '', 'working', 'Available', '', '', '', '', '', '2024-05-11'),
(80, 0, 'TV', 'hdfgh76454675', '', 'working', 'Availed', '', '', '', '', '', '2024-05-11'),
(81, 0, 'TV', 'dsfsafd454325234', '', 'working', 'Available', '', '', '', '', '', '2024-05-11'),
(82, 0, 'MOUSE', 'dsfgsgdsf', '', 'working', 'Available', '', '', '', '', '', '2024-05-11'),
(83, 0, 'MOUSE', 'sdfsdaf43q545', '', 'working', 'Available', '', '', '', '', '', '2024-05-11'),
(84, 0, 'MOUSE', 'sdfsdf3456254', '', 'working', 'Available', '', '', '', '', '', '2024-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `logged`
--

DROP TABLE IF EXISTS `logged`;
CREATE TABLE IF NOT EXISTS `logged` (
  `emp_id` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mi` varchar(1) COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `emp_pos` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logged`
--

INSERT INTO `logged` (`emp_id`, `Username`, `Password`, `fname`, `mi`, `lname`, `emp_pos`) VALUES
(1, 'admin', 'admin', 'Administrator', 'A', 'Administrator', ''),
(10, 'user', 'user', 'User', 'U', 'User', ''),
(12, 'waning', 'gdtyty', 'Adasdaa', 'Q', 'Qwerwrwew', ''),
(13, 'user1', 'admin', 'Test', 'T', 'Test', ''),
(16, 'roldan', '1234', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `request_id` int NOT NULL AUTO_INCREMENT,
  `item_need` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `requested_by` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `date_requested` date NOT NULL,
  `req_room` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `item_quantity` int NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `item_need`, `requested_by`, `date_requested`, `req_room`, `item_quantity`, `subject`, `message`, `status`) VALUES
(29, 'TV', 'dfdfd', '2024-05-31', 'DILG', 5, '', 'dfvdafsdaf', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hitems`
--

DROP TABLE IF EXISTS `tbl_hitems`;
CREATE TABLE IF NOT EXISTS `tbl_hitems` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `serial` varchar(255) NOT NULL,
  `h_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_hitems`
--

INSERT INTO `tbl_hitems` (`id`, `user`, `item`, `serial`, `h_status`) VALUES
(13, 'dfdfd', 'TV', 'hdfgh76454675', '1'),
(12, 'dfdfd', 'TV', 'dfsdfa435345', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
