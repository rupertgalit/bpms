-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2022 at 07:05 AM
-- Server version: 10.5.16-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u600599775_abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` char(50) DEFAULT NULL,
  `UserName` char(50) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'admin', 'admin', 0, 'tester1@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2019-07-25 06:21:50'),
(2, 'Rowena', 'owner', 9164084556, 'AteRowenaSalon@gmail.com', '4381a72f77cc5e0002808a6e9267a90c', '2022-10-01 17:28:05'),
(3, 'dev', 'dev', 9511223438, 'galitrupert1522@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-10-11 07:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `tblappointment`
--

CREATE TABLE `tblappointment` (
  `ID` int(10) NOT NULL,
  `User_id` varchar(250) DEFAULT NULL,
  `AptNumber` varchar(80) DEFAULT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `PhoneNumber` bigint(13) DEFAULT NULL,
  `AptDate` varchar(120) DEFAULT NULL,
  `AptTime` varchar(120) DEFAULT NULL,
  `Services` varchar(120) DEFAULT NULL,
  `Staff` varchar(250) DEFAULT NULL,
  `ApplyDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `RemarkDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblappointment`
--

INSERT INTO `tblappointment` (`ID`, `User_id`, `AptNumber`, `Name`, `Email`, `PhoneNumber`, `AptDate`, `AptTime`, `Services`, `Staff`, `ApplyDate`, `Remark`, `Status`, `RemarkDate`) VALUES
(38, '3', '263352915', 'PAul Diaz', 'edwardcanites1022@gmail.com', 630916408455, '11/2/2022', '11:mm p', 'Fruit Facial', 'Staff 2', '2022-10-24 00:39:05', '', '', '2022-11-04 08:36:45'),
(39, '2', '800343379', 'Rupert Galit', 'rgalit@netglobalsolutions.net', 639511223438, '10/31/2022', '10:00am', 'Normal Menicure', 'Staff 3', '2022-10-24 05:21:48', 'accepted', '1', '2022-11-02 06:29:57'),
(40, '6', '875851139', 'EDWARD CANITES', 'edward@gmail.com', 639164084556, '10/26/2022', '9:30am', 'Body Spa', 'Staff 1', '2022-10-25 08:18:19', '', '', '2022-11-04 08:36:29'),
(41, '2', '715112600', 'Rupert Galit', 'dangerone10@gmail.com', 639511223438, '11/25/2022', '9:00am', 'Normal Menicure', 'Staff 2', '2022-11-04 02:27:44', 'rasdasd', '1', '2022-11-04 07:49:49'),
(42, '2', '710609877', 'JoHN JONES', 'jj@gmail.com', 639511223438, '11/29/2022', '10:00am', 'Rebonding', 'Staff 2', '2022-11-04 08:41:18', 'Accepted', '1', '2022-11-04 08:42:04'),
(43, '9', '465908844', 'AngelGarciatest', 'angelgarcia@gmail.com', 639164084556, '11/8/2022', '10:00am', 'Body Spa', 'Staff 3', '2022-11-07 03:37:08', 'Accept', '1', '2022-11-07 03:37:46'),
(44, '10', '459774765', 'MARIVIC TARNATE', 'marivictarnate01@gmail.com', 639669456757, '11/16/2022', '10:30am', 'Fruit Facial', 'Staff 2', '2022-11-07 03:48:00', 'accepted', '1', '2022-11-07 03:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` varchar(11) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `Appointment_type` varchar(250) DEFAULT NULL,
  `Apppointment_id` varchar(50) DEFAULT NULL,
  `Staff` varchar(20) DEFAULT NULL,
  `Services` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`ID`, `Name`, `Email`, `MobileNumber`, `Gender`, `Details`, `Appointment_type`, `Apppointment_id`, `Staff`, `Services`, `CreationDate`, `UpdationDate`) VALUES
(16, 'Rupert Galit', 'dangerone10@gmail.com', '9511223438', 'Male', 'testww', 'WALK-IN', '693743759', 'Staff 3', 'Assign-Service', '2022-11-04 07:43:08', '2022-11-04 08:35:53'),
(17, 'Rupert Galit', 'dangerone10@gmail.com', '63951122343', '', '', 'ONLINE', '715112600', 'Staff 2', 'Normal Menicure', '2022-11-04 07:49:49', NULL),
(18, 'Rupert Galit', 'admin@admin.com', '9511223438', 'Female', 'testss', 'WALK-IN', '629640755', 'Staff 2', 'Assign-Service', '2022-11-04 08:09:18', NULL),
(19, 'JoHN JONES', 'jj@gmail.com', '63951122343', '', '', 'ONLINE', '710609877', 'Staff 2', 'Rebonding', '2022-11-04 08:42:04', NULL),
(20, 'EMILY GREY', 'e@gmail.com', '9511222332', 'Female', 'ACCEPTED', 'WALK-IN', '500285352', 'Staff 4', 'Assign-Service', '2022-11-04 08:44:34', NULL),
(21, 'AngelGarciatest', 'angelgarcia@gmail.com', '63916408455', '', '', 'ONLINE', '465908844', 'Staff 3', 'Body Spa', '2022-11-07 03:37:46', NULL),
(22, 'MARIVIC TARNATE', 'marivictarnate01@gmail.com', '63966945675', '', '', 'ONLINE', '459774765', 'Staff 2', 'Fruit Facial', '2022-11-07 03:52:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`id`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`) VALUES
(19, 6, 12, 235301533, '2022-10-21 03:22:21'),
(20, 7, 12, 390661459, '2022-10-24 00:59:04'),
(21, 6, 2, 668424778, '2022-10-25 08:40:49'),
(22, 6, 12, 668424778, '2022-10-25 08:40:49'),
(23, 6, 12, 961579429, '2022-10-25 08:53:25'),
(24, 14, 12, 209966892, '2022-11-04 07:20:27'),
(25, 21, 2, 820493907, '2022-11-07 03:38:57'),
(26, 21, 12, 820493907, '2022-11-07 03:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', '<script src=', '                        <h1 style=\"text-align: center;\"><br></h1>', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '        4A MATAHIMIK ST. BRGY MALAYA QUEZON CITY', 'AteRowenaSaloninfo@gmail.com', 9164084556, NULL, '10:30 am to 7:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `Cost`, `CreationDate`) VALUES
(1, 'O3 Facial', 1200, '2022-07-25 11:22:38'),
(2, 'Fruit Facial', 500, '2022-07-25 11:22:53'),
(3, 'Charcol Facial', 1000, '2022-07-25 11:23:10'),
(4, 'Deluxe Menicure', 500, '2022-07-25 11:23:34'),
(5, 'Deluxe Pedicure', 600, '2022-07-25 11:23:47'),
(6, 'Normal Menicure', 300, '2022-07-25 11:24:01'),
(7, 'Normal Pedicure', 400, '2022-07-25 11:24:19'),
(8, 'U-Shape Hair Cut', 250, '2022-07-25 11:24:38'),
(9, 'Layer Haircut', 550, '2022-07-25 11:24:53'),
(10, 'Rebonding', 3999, '2022-07-25 11:25:08'),
(11, 'Loreal Hair Color(Full)', 1200, '2022-07-25 11:25:35'),
(12, 'Body Spa', 1500, '2022-08-19 13:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `Id` int(20) NOT NULL,
  `Name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Staff_No` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Staff_Name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mobile_No` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_Created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`Id`, `Name`, `Staff_No`, `Staff_Name`, `Mobile_No`, `Date_Created`) VALUES
(1, 'John Jones', 'Staff-0100622-01', 'Staff 1', '', '2022-10-06 06:34:30'),
(2, 'Shan Willis', 'Staff-0100622-02', 'Staff 2', '9522434533', '2022-10-06 06:34:30'),
(3, 'Sasha Delacruz', 'Staff-0100622-03', 'Staff 3', '09091437493', '2022-10-06 06:36:33'),
(4, 'Alex Tanyaga', 'Staff-0100722-03', 'Staff 4', '9511223438', '2022-10-07 03:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(20) NOT NULL,
  `User_id` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `User_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email_add` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Creation_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `User_id`, `User_name`, `Email_add`, `Password`, `Creation_date`) VALUES
(2, NULL, 'Rupert', 'r@gmail.com', '1234', '2022-10-21 05:50:05'),
(6, NULL, 'owner', 'papolarman@gmail.com', 'Test@123', '2022-10-23 01:43:30'),
(7, NULL, 'asd adad', 'wxvhhhmg60@wuuvo.com', 'wxvhhhmg60', '2022-10-27 05:12:30'),
(8, NULL, 'as dad', 'wxvhhhmg60@wuuvo.com', 'wxvhhhmg60', '2022-10-27 05:16:03'),
(9, NULL, 'Angel', 'angel@test', 'Test@123', '2022-11-07 03:34:07'),
(10, NULL, 'marivic Tarnate', 'marivictarnate01@gmail.com', 'Cris1996', '2022-11-07 03:47:28'),
(11, NULL, 'TestPapol', '', 'Test@123', '2022-11-07 03:58:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblappointment`
--
ALTER TABLE `tblappointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblappointment`
--
ALTER TABLE `tblappointment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
