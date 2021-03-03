-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 06:35 AM
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
(1, 'Muazan Qureshi', 'muazan', 'muazan.web@gmail.com', '+923010301642', '12101-4661709-5', '12101*Mq', 'Ishtiaq Hussain Qureshi', 'Male', '2001-07-05', 'IMG_20210206_174703.jpg', '2021-03-01 16:04:36', 'House No 740, Street No 9, Azam Basti, Karachi.', 1);

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
  `pkg_description` varchar(100) DEFAULT NULL,
  `pkg_person` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pkg_id`, `pkg_name`, `pkg_createBY`, `pkg_location`, `pkg_createDT`, `pkg_from`, `pkg_to`, `pkg_price`, `pkg_day`, `pkg_night`, `pkg_image`, `pkg_description`, `pkg_person`) VALUES
(1, '7 Days in Turkey ', 1, 'Turkey', '2021-03-02 17:42:10', 'Karachi (KHI)', 'Istanbul (ISN)', '98000', '8', '7', '[\"4c07486b361d74a4bfd4ae9e298a5e19.jpg\",\"449137 - Copy.jpg\",\"Hagia-Sophia-Istanbul - Copy.jpg\",\"pexels-dziana-hasanbekava-5480736.jpg\",\"turkey-country-culture-wallpaper-3.jpg\"]', 'THIS PACKAGE IS FOR 2 PEOPLE TRAVELLING TOGETHER AND INCLUDES:\r\n\r\n10 nights hire of a powered site a', '2'),
(2, 'Miami Beach SPA', 2, 'North America', '2021-03-03 03:52:11', 'Islamabad', 'Miami', '150000', '5', '4', '[\"pexels-bella-white-635279.jpg\",\"pexels-irina-iriser-2781760.jpg\",\"pexels-pok-rie-2049422.jpg\",\"Untitled-1.jpg\"]', 'Offer includes:\r\nDaily Breakfast for two\r\n$50 Spa credit (1 per stay)\r\n15% off at Bloomingdales in-s', '1');

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
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pkg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `agent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pkg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
