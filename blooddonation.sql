-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 10:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_phone_number` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_phone_number`, `admin_email`) VALUES
(1, 'admin admin', '0721218989', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE `alert` (
  `alert_id` int(11) NOT NULL,
  `alert_name` varchar(100) NOT NULL,
  `alert_desc` varchar(200) NOT NULL,
  `alert_donor_id` varchar(200) NOT NULL,
  `alert_donation_drive_id` varchar(200) NOT NULL,
  `alert_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alert`
--

INSERT INTO `alert` (`alert_id`, `alert_name`, `alert_desc`, `alert_donor_id`, `alert_donation_drive_id`, `alert_date`) VALUES
(1, 'new alert', 'welcome to my work', 'elijah elijah', 'kenya', '2021-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `blood_group`
--

CREATE TABLE `blood_group` (
  `blood_group_id` int(11) NOT NULL,
  `blood_group_name` varchar(100) NOT NULL,
  `blood_group_desc` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_group`
--

INSERT INTO `blood_group` (`blood_group_id`, `blood_group_name`, `blood_group_desc`) VALUES
(2, '0 negatve', 'this is the description');

-- --------------------------------------------------------

--
-- Table structure for table `donation_drive`
--

CREATE TABLE `donation_drive` (
  `donation_drive_id` int(11) NOT NULL,
  `donation_drive_date` varchar(100) NOT NULL,
  `donation_drive_location` varchar(200) NOT NULL,
  `donation_drive_name` varchar(200) NOT NULL,
  `donation_drive_desc` varchar(200) NOT NULL,
  `donation_institution_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donor_id` int(11) NOT NULL,
  `donor_name` varchar(100) NOT NULL,
  `donor_dob` varchar(200) NOT NULL,
  `donor_gender` varchar(200) NOT NULL,
  `donor_telephone_number` varchar(200) NOT NULL,
  `donor_email` varchar(100) NOT NULL,
  `donor_national_id` varchar(100) NOT NULL,
  `donor_county` varchar(200) NOT NULL,
  `donor_blood_group_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `donor_name`, `donor_dob`, `donor_gender`, `donor_telephone_number`, `donor_email`, `donor_national_id`, `donor_county`, `donor_blood_group_id`) VALUES
(2, 'elijah elijah', '2021-01-31', 'Male', '0721216677', 'father1@gmail.com', '98765437', 'makueni', '0 negatve');

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE `institution` (
  `institution_id` int(11) NOT NULL,
  `institution_name` varchar(100) NOT NULL,
  `institution_location` varchar(200) NOT NULL,
  `institution_desc` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`institution_id`, `institution_name`, `institution_location`, `institution_desc`) VALUES
(2, 'kenya', 'located in naironi', 'this is the first and oldes blood donation site in our country');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_user_name` varchar(100) NOT NULL,
  `login_password` varchar(200) NOT NULL,
  `login_admin_id` varchar(200) NOT NULL,
  `login_donor_id` varchar(200) NOT NULL,
  `login_staff_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_user_name`, `login_password`, `login_admin_id`, `login_donor_id`, `login_staff_id`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', '1', '0', '0'),
(2, 'father1@gmail.com', '25d55ad283aa400af464c76d713c07ad', '000', '000', '2'),
(3, 'joshua@gmail.com', '25d55ad283aa400af464c76d713c07ad', '000', '000', '3');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_national_id` varchar(200) NOT NULL,
  `staff_sex` varchar(200) NOT NULL,
  `staff_dob` varchar(200) NOT NULL,
  `staff_phone_number` varchar(100) NOT NULL,
  `staff_email` varchar(100) NOT NULL,
  `staff_role` longtext NOT NULL,
  `staff_ institution_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_national_id`, `staff_sex`, `staff_dob`, `staff_phone_number`, `staff_email`, `staff_role`, `staff_ institution_id`) VALUES
(1, 'donor onesaxsxs', '12981287', 'Female', '2021-01-31', '0763678398', 'superadministrator@app.com', 'welcomecl,led,eled', 'kenya'),
(2, 'elijah elijah', '12345678', 'Female', '2021-02-17', '0720882594', 'father1@gmail.com', 'roles assigned', 'kenya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `alert`
--
ALTER TABLE `alert`
  ADD PRIMARY KEY (`alert_id`);

--
-- Indexes for table `blood_group`
--
ALTER TABLE `blood_group`
  ADD PRIMARY KEY (`blood_group_id`);

--
-- Indexes for table `donation_drive`
--
ALTER TABLE `donation_drive`
  ADD PRIMARY KEY (`donation_drive_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`institution_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alert`
--
ALTER TABLE `alert`
  MODIFY `alert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blood_group`
--
ALTER TABLE `blood_group`
  MODIFY `blood_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donation_drive`
--
ALTER TABLE `donation_drive`
  MODIFY `donation_drive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `institution`
--
ALTER TABLE `institution`
  MODIFY `institution_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
