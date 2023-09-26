-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 07:24 PM
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
  `acc_uname` text DEFAULT NULL,
  `acc_password` text DEFAULT NULL,
  `acc_profile` text DEFAULT NULL,
  `acc_type` text DEFAULT NULL,
  `acc_status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`acc_id`, `acc_admin_id`, `acc_fname`, `acc_mname`, `acc_lname`, `acc_email`, `acc_age`, `acc_phone`, `acc_birth`, `acc_address`, `acc_uname`, `acc_password`, `acc_profile`, `acc_type`, `acc_status`) VALUES
(8, '489757715', 'admin', 'admin', 'admin', 'admin@admin', '11', '123456789', '2000-08-08', NULL, 'admin', '21232f297a57a5a743894a0e4a801fc3', NULL, 'admin', NULL),
(49, '1570704857', 'user3', 'user3', 'user3', 'user3@user3', '12', '12', '0001-01-01', 'Binicuil', 'user3', '92877af70a45fd6a2ed7fe81e1236b78', 'school-icon-png-14053.png', 'user', 'Accept');

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
  `org_pres` text DEFAULT NULL,
  `org_vpress` text DEFAULT NULL,
  `org_status` text DEFAULT NULL
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_brgy`
--
ALTER TABLE `tbl_brgy`
  MODIFY `brgy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_org`
--
ALTER TABLE `tbl_org`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
