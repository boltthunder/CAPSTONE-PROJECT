-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 05:47 PM
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
-- Database: `chmsu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `acc_id` int(11) NOT NULL,
  `acc_admin_id` text DEFAULT NULL,
  `acc_fname` text DEFAULT NULL,
  `acc_mname` text DEFAULT NULL,
  `acc_lname` text DEFAULT NULL,
  `acc_email` text DEFAULT NULL,
  `acc_age` text DEFAULT NULL,
  `acc_phone` text DEFAULT NULL,
  `acc_birth` text DEFAULT NULL,
  `acc_address` text DEFAULT NULL,
  `acc_org` text DEFAULT NULL,
  `acc_uname` text DEFAULT NULL,
  `acc_password` text DEFAULT NULL,
  `acc_profile` text DEFAULT NULL,
  `acc_type` text DEFAULT NULL,
  `acc_status` text DEFAULT NULL,
  `acc_check` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`acc_id`, `acc_admin_id`, `acc_fname`, `acc_mname`, `acc_lname`, `acc_email`, `acc_age`, `acc_phone`, `acc_birth`, `acc_address`, `acc_org`, `acc_uname`, `acc_password`, `acc_profile`, `acc_type`, `acc_status`, `acc_check`) VALUES
(8, '489757715', 'admin', 'admin', 'admin', 'admin@admin', '11', '123456789', '2000-08-08', NULL, NULL, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'admin', NULL, NULL),
(60, '488783873', 'admin1', 'admin1', 'admin1', 'admin1@admin1', '12', '123123123', '2000-01-01', 'Binicuil', NULL, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'received_319393647084199.jpeg', 'sub_admin', NULL, NULL),
(63, '553016086', 'asd', 'asd', 'asd', 'asdd@asdd', '12', '123123123', '2000-01-01', 'Binicuil', 'sample', 'asd', '7815696ecbf1c96e6894b779456d330e', 'img1.png', 'user', 'Accept', 'View'),
(64, '613979254', 'user1', 'user1', 'user1', 'user1@user1', '12', '123-45-672', '2000-11-11', 'Binicuil', 'hahahahah', 'user1', '24c9e15e52afc47c225b757e7bee1f9d', '666201.png', 'user', 'Accept', 'View');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brgy`
--

CREATE TABLE `tbl_brgy` (
  `brgy_id` int(11) NOT NULL,
  `brgy_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_brgy`
--

INSERT INTO `tbl_brgy` (`brgy_id`, `brgy_name`) VALUES
(7, 'Binicuil'),
(8, 'Daan Banua');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_org`
--

CREATE TABLE `tbl_org` (
  `org_id` int(11) NOT NULL,
  `org_name` text DEFAULT NULL,
  `org_establish` text DEFAULT NULL,
  `org_brgy` text DEFAULT NULL,
  `org_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_org`
--

INSERT INTO `tbl_org` (`org_id`, `org_name`, `org_establish`, `org_brgy`, `org_status`) VALUES
(20, 'hahahahah', '2023-09-29', 'Binicuil', 'Accept'),
(21, 'sample', '2023-09-29', 'Binicuil', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_org_member`
--

CREATE TABLE `tbl_org_member` (
  `org_mem_id` int(11) NOT NULL,
  `mem_orgname` text DEFAULT NULL,
  `mem_id_name` text DEFAULT NULL,
  `mem_name` text DEFAULT NULL,
  `mem_birth` text DEFAULT NULL,
  `mem_position` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `tbl_brgy`
--
ALTER TABLE `tbl_brgy`
  ADD PRIMARY KEY (`brgy_id`);

--
-- Indexes for table `tbl_org`
--
ALTER TABLE `tbl_org`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `tbl_org_member`
--
ALTER TABLE `tbl_org_member`
  ADD PRIMARY KEY (`org_mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_brgy`
--
ALTER TABLE `tbl_brgy`
  MODIFY `brgy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_org`
--
ALTER TABLE `tbl_org`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_org_member`
--
ALTER TABLE `tbl_org_member`
  MODIFY `org_mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
