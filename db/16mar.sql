-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 07:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripntour`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(50) DEFAULT NULL,
  `admin_uname` varchar(50) DEFAULT NULL,
  `admin_email` varchar(50) DEFAULT NULL,
  `admin_phone` varchar(20) DEFAULT NULL,
  `admin_cnic` varchar(20) DEFAULT NULL,
  `admin_password` varchar(50) DEFAULT NULL,
  `admin_fathername` varchar(50) DEFAULT NULL,
  `admin_gender` varchar(10) DEFAULT NULL,
  `admin_dob` date DEFAULT NULL,
  `admin_image` varchar(500) DEFAULT NULL,
  `createDT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_address` varchar(500) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_fname`, `admin_uname`, `admin_email`, `admin_phone`, `admin_cnic`, `admin_password`, `admin_fathername`, `admin_gender`, `admin_dob`, `admin_image`, `createDT`, `admin_address`, `status`) VALUES
(1, 'Muazan Qureshi', 'muazan', 'muazan.web@gmail.com', '+923010301642', '12101-4661709-5', '12101*Mq', 'Ishtiaq Hussain Qureshi', 'Male', '2001-07-05', 'IMG_20210206_174703.jpg', '2021-03-01 16:04:36', 'House No 740, Street No 9, Azam Basti, Karachi.', 1),
(2, 'Muhammad Maaz', 'maaz', 'maaz@gmail.com', '+923241234567', '45871-9632587-0', '123456*Mm', 'Maaz ky Abu', 'Male', '1995-08-08', 'IMG_20210206_164708.jpg', '2021-03-04 02:51:18', 'Johar Karachi.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agent_id` int(11) NOT NULL,
  `agent_fname` varchar(50) DEFAULT NULL,
  `agent_uname` varchar(50) DEFAULT NULL,
  `agent_email` varchar(50) DEFAULT NULL,
  `agent_phone` varchar(20) DEFAULT NULL,
  `agent_cnic` varchar(20) DEFAULT NULL,
  `agent_password` varchar(50) DEFAULT NULL,
  `agent_fathername` varchar(50) DEFAULT NULL,
  `agent_company` varchar(200) NOT NULL,
  `agent_gender` varchar(10) DEFAULT NULL,
  `agent_dob` date DEFAULT NULL,
  `agent_image` varchar(500) DEFAULT NULL,
  `createDT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `createBY` int(11) DEFAULT NULL,
  `agent_address` varchar(500) DEFAULT NULL,
  `agent_location` varchar(200) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agent_id`, `agent_fname`, `agent_uname`, `agent_email`, `agent_phone`, `agent_cnic`, `agent_password`, `agent_fathername`, `agent_company`, `agent_gender`, `agent_dob`, `agent_image`, `createDT`, `createBY`, `agent_address`, `agent_location`, `status`) VALUES
(1, 'Shahzaib Khan Afridi', 'shaxi66221', 'shaxi66221@gmail.com', '+923125557075', '45698-9632587-0', '123456*Sa', 'Muhammad Ayub Khan', 'shaxi & travels', 'Male', '1995-07-08', 'IMG_20201210_170522_1.jpg', '2021-03-03 05:08:14', 1, 'Nazimabad Karachi', 'Karachi, Pakistan (KHI)', 1),
(2, 'Umair Warsi', 'umair_warsi', 'umair.globalbiz@gmail.com', '+923086565652', '45632-4561230-0', '123456*Uw', 'Muhammad Ali ', 'mas travrel', 'Male', '1993-02-02', 'IMG_20201210_165127.jpg', '2021-03-03 05:08:24', 1, 'Gulshan Karachi.', 'Islamabad, Pakistan (ICT)', 1),
(3, 'Jawwad Siddiqui', 'jawwad', 'jawwad@gmail.com', '+923012323236', '45201-8989898-9', '123456*Js', 'Jawwad Abu', 'jawwad & sons', 'Male', '1999-09-09', 'IMG_20201210_175649.jpg', '2021-03-03 05:08:32', 1, 'Buffer zone, Karachi.', 'Lahore, Pakistan (LHR)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `cl_id` int(11) NOT NULL,
  `cl_fname` varchar(50) DEFAULT NULL,
  `cl_email` varchar(50) DEFAULT NULL,
  `cl_password` varchar(50) DEFAULT NULL,
  `cl_phone` varchar(20) DEFAULT NULL,
  `cl_createDT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client_query`
--

CREATE TABLE `client_query` (
  `cq_id` int(11) NOT NULL,
  `cq_name` varchar(50) DEFAULT NULL,
  `cq_email` varchar(50) DEFAULT NULL,
  `cq_subject` varchar(100) DEFAULT NULL,
  `cq_message` varchar(1000) DEFAULT NULL,
  `cq_createDT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_query`
--

INSERT INTO `client_query` (`cq_id`, `cq_name`, `cq_email`, `cq_subject`, `cq_message`, `cq_createDT`) VALUES
(1, 'Muazan Qureshi', 'muazan.web@gmail.com', 'My Order', ' dfdf faidffdf ery3 dsfy3 e8r9 d sdhfi3e df 93 sf 3f 39fasdf 29er9 202 sd sdsiuiaewr  0331+ 4+4+4++4+494670+5\r\n8+40+4+5+441074', '2021-03-05 16:20:03'),
(2, 'Muazan Qureshi', 'muazan.web@gmail.com', 'My Order', ' dfdf faidffdf ery3 dsfy3 e8r9 d sdhfi3e df 93 sf 3f 39fasdf 29er9 202 sd sdsiuiaewr  0331+ 4+4+4++4+494670+5\r\n8+40+4+5+441074', '2021-03-05 16:22:55'),
(3, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:23:37'),
(4, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:55:48'),
(5, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:55:51'),
(6, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:55:55'),
(7, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:55:58'),
(8, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:00'),
(9, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:02'),
(10, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:03'),
(11, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:04'),
(12, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:05'),
(13, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:06'),
(14, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:08'),
(15, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:09'),
(16, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:09'),
(17, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:10'),
(18, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:11'),
(19, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:11'),
(20, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:13'),
(21, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:14'),
(22, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:14'),
(23, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:15'),
(24, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:16'),
(25, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:17'),
(26, 'wedding script', 'weddingscript@yahoo.com', 'My Report', 'ds  dssdsak sdadkho ,z x,x\r\n    dcpe', '2021-03-05 16:56:19'),
(27, 'Muazan Qureshi', 'muazan@yahoo.com', 'asdasd', 'asdasdasddas', '2021-03-06 15:06:51'),
(28, 'Muazan Qureshi', 'muazan@yahoo.com', 'asdasd', 'asdasdasddas', '2021-03-06 15:06:53'),
(29, 'Muazan Qureshi', 'muazan@yahoo.com', 'asdasd', 'asdasdasddas', '2021-03-06 15:06:55'),
(30, 'Muazan Qureshi', 'muazan@yahoo.com', 'asdasd', 'asdasdasddas', '2021-03-06 15:06:55'),
(31, 'Muazan Qureshi', 'muazan@yahoo.com', 'asdasd', 'asdasdasddas', '2021-03-06 15:06:56'),
(32, 'Muazan Qureshi', 'muazan@yahoo.com', 'asdasd', 'asdasdasddas', '2021-03-06 15:06:57'),
(33, 'Muazan Qureshi', 'muazan@yahoo.com', 'asdasd', 'asdasdasddas', '2021-03-06 15:06:58'),
(34, 'Muazan Qureshi', 'muazan@yahoo.com', 'asdasd', 'asdasdasddas', '2021-03-06 15:06:59'),
(35, 'Muazan Qureshi', 'muazan@yahoo.com', 'asdasd', 'asdasdasddas', '2021-03-06 15:07:00'),
(36, 'Muazan Qureshi', 'muazan@yahoo.com', 'asdasd', 'asdasdasddas', '2021-03-06 15:07:01'),
(37, 'Muazan Qureshi', 'muazan@yahoo.com', 'asdasd', 'asdasdasddas', '2021-03-06 15:07:02'),
(38, 'Muazan Qureshi', 'muazan@yahoo.com', 'asdasd', 'asdasdasddas', '2021-03-06 15:07:04'),
(39, 'jhgawe', 'muazanqureshi3@gmail.com', 'hjgjgjsd', 'kjdhsfkshhksdf', '2021-03-11 16:54:25'),
(40, 'asdsad', 'muazanqureshi3@gmail.com', 'sad', 'asdasd', '2021-03-13 02:40:59'),
(41, 'Muazan Qureshi', 'ad@das', 'asd', 'asdadsdsa', '2021-03-16 17:08:28');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `nlid` int(11) NOT NULL,
  `nlemail` varchar(50) DEFAULT NULL,
  `nlcreateDT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pkg_id` int(11) NOT NULL,
  `pkg_name` varchar(200) DEFAULT NULL,
  `pkg_createBY` int(11) DEFAULT NULL,
  `pkg_location` varchar(50) NOT NULL,
  `pkg_createDT` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pkg_from` varchar(50) DEFAULT NULL,
  `pkg_to` varchar(50) DEFAULT NULL,
  `pkg_price` varchar(11) DEFAULT NULL,
  `pkg_day` varchar(10) DEFAULT NULL,
  `pkg_night` varchar(10) DEFAULT NULL,
  `pkg_image` varchar(1000) DEFAULT NULL,
  `pkg_thumbnail` varchar(1000) NOT NULL,
  `pkg_description` varchar(100) DEFAULT NULL,
  `pkg_person` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pkg_id`, `pkg_name`, `pkg_createBY`, `pkg_location`, `pkg_createDT`, `pkg_from`, `pkg_to`, `pkg_price`, `pkg_day`, `pkg_night`, `pkg_image`, `pkg_thumbnail`, `pkg_description`, `pkg_person`) VALUES
(1, '7 Days in Turkrey', 2, 'Turkey', '2021-03-16 14:37:19', 'Karachi', 'Istanbul', '98000', '5', '6', '[\"449137 - Copy.jpg\",\"Hagia-Sophia-Istanbul - Copy.jpg\",\"pexels-bella-white-635279.jpg\",\"pexels-dziana-hasanbekava-5480736.jpg\",\"pexels-irina-iriser-2781760.jpg\",\"pexels-pok-rie-2049422.jpg\"]', 'Untitled-1.jpg', 'Check if this should be added successfully', '2'),
(2, 'wedding script', 2, '45', '2021-03-16 14:31:17', '45', '45', '54', '4545', '45', '[\"159985885_4052799044758567_3788716655196068467_n.jpg\",\"Hagia-Sophia-Istanbul - Copy.jpg\"]', 'Hagia-Sophia-Istanbul - Copy.jpg', '4555454', '54'),
(3, 'sadas', 2, 'asd', '2021-03-16 14:09:53', 'sad', 'ads', 'dasdsa', '3', '3', '[\"pexels-dziana-hasanbekava-5480736.jpg\",\"pexels-irina-iriser-2781760.jpg\",\"pexels-pok-rie-2049422.jpg\"]', 'unnamed.png', 'dsfdsfsd', 'dsa');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) DEFAULT NULL,
  `status_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_type`) VALUES
(0, 'deactive'),
(1, 'active'),
(2, 'left'),
(3, 'blocked');

-- --------------------------------------------------------

--
-- Table structure for table `tester`
--

CREATE TABLE `tester` (
  `tid` int(11) NOT NULL,
  `name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tester`
--

INSERT INTO `tester` (`tid`, `name`) VALUES
(1, '	asdasdsaddsa\r\n'),
(2, 'asdasdasd	sadsad\r\nsadas'),
(3, 'asdasddsddsadsa'),
(4, 'Array'),
(5, 'Array'),
(6, '[\"popo\",\" popo\",\" popo\r\n\"]'),
(7, '[\"Associates the textarea with a form\",\" Use the ID attribute of the form as the value for the textarea form attributes\",\" This allows you to place a textarea anywhere on a webpage, even outside of the form element, and still have the contents of the textarea included when the form is submitted\",\"\r\n\r\nRead more: https://html\",\"com/tags/textarea/#ixzz6pIcHNacN	\r\n\"]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_uname` (`admin_uname`),
  ADD UNIQUE KEY `admin_email` (`admin_email`),
  ADD UNIQUE KEY `admin_phone` (`admin_phone`),
  ADD UNIQUE KEY `admin_cnic` (`admin_cnic`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`agent_id`),
  ADD UNIQUE KEY `agent_uname` (`agent_uname`),
  ADD UNIQUE KEY `agent_email` (`agent_email`),
  ADD UNIQUE KEY `agent_phone` (`agent_phone`),
  ADD UNIQUE KEY `agent_cnic` (`agent_cnic`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `client_query`
--
ALTER TABLE `client_query`
  ADD PRIMARY KEY (`cq_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`nlid`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pkg_id`);

--
-- Indexes for table `tester`
--
ALTER TABLE `tester`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_query`
--
ALTER TABLE `client_query`
  MODIFY `cq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `nlid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pkg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tester`
--
ALTER TABLE `tester`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
