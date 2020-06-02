-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2020 at 07:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `retention_module`
--

-- --------------------------------------------------------

--
-- Table structure for table `emps_payments_list`
--

CREATE TABLE `emps_payments_list` (
  `id` int(100) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `training_name` varchar(100) NOT NULL,
  `installment_amount` int(100) NOT NULL,
  `training_document` varchar(100) NOT NULL,
  `ep_approval` varchar(100) NOT NULL,
  `other_doc` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emps_payments_list`
--

INSERT INTO `emps_payments_list` (`id`, `emp_id`, `emp_name`, `training_name`, `installment_amount`, `training_document`, `ep_approval`, `other_doc`, `remark`, `status`) VALUES
(1, 'INDO77', 'ruhi bhardwaj', 'testing', 780000, 'INDO77-13-05-2020-08-41-31-139386294.PNG', 'INDO77-13-05-2020-08-41-31-1466031797.PNG', 'INDO77-13-05-2020-07-47-35-493237026.PNG', 'payments', '11'),
(2, 'INDO101', 'Rahul singh', 'development', 9200, 'INDO101-13-05-2020-10-49-53-1087609825.png', 'INDO101-13-05-2020-10-49-53-312385300.png', 'INDO101-13-05-2020-10-49-53-672517266.png', 'abc', '10'),
(3, 'INDO501', ' sandeep', 'software development', 10000, 'INDO501-13-05-2020-09-01-32-123774780.docx', 'INDO501-13-05-2020-09-01-32-1207906923.PNG', 'INDO501-13-05-2020-09-01-32-1201012121.png', 'add remark', '11'),
(5, 'INDO404', '  dark android', 'update..', 600000, 'INDO404-13-05-2020-10-51-59-1673147567.png', 'INDO404-13-05-2020-10-51-59-1773406425.png', 'INDO404-13-05-2020-10-51-59-25684574.png', 'new addition', '10'),
(6, 'INDO001', ' vinay kaushik', 'testing', 5000, 'INDO001-14-05-2020-11-30-29-1189546403.jpg', 'INDO001-14-05-2020-11-30-29-2032807166.docx', '', 'need', '10'),
(7, 'INDO34', 'ram', 'testing', 1000, 'INDO34-15-05-2020-08-15-53-1279400315.docx', 'INDO34-15-05-2020-08-15-53-924487165.jpg', '', 'remark for payment', '11'),
(8, 'INDO54', 'admin ', 'software development', 80000, 'INDO54-18-05-2020-07-36-00-306521526.pdf', 'INDO54-18-05-2020-07-36-00-372456534.pdf', '', 'abc', '11'),
(10, 'INDO90', ' Dinesh sharma', 'software development', 50000, 'INDO90-21-05-2020-08-30-34-802668208.pdf', 'INDO90-21-05-2020-08-30-34-1206645784.PNG', '', 'response', NULL),
(11, 'INDO311', 'david', 'development', 2147483647, 'INDO311-21-05-2020-08-31-29-1243656340.PNG', 'INDO311-21-05-2020-08-31-29-797940117.jpg', 'INDO311-21-05-2020-08-31-29-178140822.PNG', 'remarks..', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emp_apply_retention`
--

CREATE TABLE `emp_apply_retention` (
  `id` int(100) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `retention_reason` varchar(100) NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `training_start_date` date NOT NULL,
  `training_end_date` date NOT NULL,
  `installment_amount` int(100) NOT NULL,
  `purpose_of_visit` varchar(100) NOT NULL,
  `project_leader` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_apply_retention`
--

INSERT INTO `emp_apply_retention` (`id`, `emp_id`, `emp_name`, `retention_reason`, `mail_id`, `training_start_date`, `training_end_date`, `installment_amount`, `purpose_of_visit`, `project_leader`, `remark`) VALUES
(1, 'INDO34', 'ram', 'OJT', 'testin@gmail.com', '2020-12-31', '2019-12-30', 1000, 'testing', 'Ravi shastri', 'null'),
(2, 'INDO404', '  dark android', 'Recommendation', 'android@google.com', '2022-02-02', '2020-02-02', 600000, 'update..', 'Sundar Pichai', 'new version'),
(3, 'INDO501', ' sandeep', 'OJT', 'sandeep@email.com', '2020-04-24', '2020-04-25', 10000, 'software development', 'dinesh', 'update amount'),
(4, 'INDO001', ' vinay kaushik', 'Training', 'vinay@indovision.in', '2020-04-21', '2020-04-21', 5000, 'testing', 'Mr.  Raj maher', ''),
(5, 'INDO2011', 'Sandeep Negi', 'Training', 'sandeep@indovision.in', '2020-04-23', '2020-10-23', 500000, 'software development', 'Mr. Hawkeye', 'nothing....'),
(6, 'INDO210', 'Rohit singh', 'OJT', 'rohit@indovision.in', '2020-03-23', '2020-09-23', 700000, 'account', 'Mr. Ajay', ''),
(7, 'INDO245', 'vishal kumar', 'Recommendation', 'vishal@indovision.in', '2020-04-25', '2020-10-25', 650000, 'development', 'vinay kaushik', 'add amount'),
(8, 'INDO45', ' Rohit rana', 'OJT', 'rohit@indovisio.in', '2020-04-04', '2020-09-09', 100000, 'account', 'Mr. Hawkeye', 'blank'),
(9, 'INDO55', 'Amit singh', 'OJT', 'amit@indovision.in', '2020-02-02', '2020-03-03', 10000000, 'testing', 'vinay kaushik', 'amount'),
(10, 'INDO9', 'Dinesh sharma', 'Training', 'dinesh@indovision.in', '2020-03-03', '2020-03-09', 450000, 'software development', 'Mr. Hawkeye', ''),
(11, 'INDO90', ' Dinesh sharma', 'Training', 'dinesh@indovision.in', '2020-03-03', '2020-03-09', 50000, 'software development', 'Mr. Hawkeye', ''),
(13, 'INDO54', 'admin ', 'Recommendation', 'admin@email.com', '2020-01-01', '2020-09-09', 80000, 'software development', 'Mr.  Raj maher', 'test'),
(15, 'INDO91', 'bebhav kumar', 'Training', 'golu@indovision.in', '2020-03-17', '2020-09-17', 750000, 'UI designer', 'dinesh', 'test...'),
(18, 'INDO101', 'Rahul singh', 'OJT', 'rahul@indovision.in', '2020-04-04', '2020-12-04', 9200, 'development', 'Mr. Hawkeye', ''),
(20, 'INDO77', 'ruhi bhardwaj', 'OJT', 'ruhi@indovision.in', '2020-01-02', '2020-06-02', 780000, 'testing', 'vinay kaushik', ''),
(21, 'INDO909', 'vinay kaushik', 'OJT', 'vinay@email.com', '2020-05-13', '2020-05-19', 100000, 'testing', 'vinay kaushik', 'abc'),
(23, 'INDO301', 'sumit rao', 'Training', 'sumit@indovision.in', '2020-05-18', '2020-11-18', 2000, 'software development', 'Mr. dinesh', 'apply retention..'),
(27, 'INDO311', 'david', 'Training', 'david@indovision.in', '2020-09-05', '2020-09-12', 2147483647, 'development', 'Mr. vinay kaushik', 'fill amount..'),
(29, 'INDO302', 'sachin mishra', 'Training', 'sachin@indovision.in', '2019-02-19', '2019-12-19', 750000, 'tesing', 'Mr. avi', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `emp_personal_info`
--

CREATE TABLE `emp_personal_info` (
  `emp_id` int(100) NOT NULL,
  `indo_code` varchar(100) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `rom_empcode` varchar(100) NOT NULL,
  `old_indocode` varchar(100) NOT NULL,
  `empl_id` varchar(100) NOT NULL,
  `reg_id` varchar(100) NOT NULL,
  `agencyid` varchar(100) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `working_shift_id` varchar(100) NOT NULL,
  `verticalName` varchar(100) NOT NULL,
  `empType` varchar(100) NOT NULL,
  `position_code` varchar(100) NOT NULL,
  `new_code` varchar(100) NOT NULL,
  `resource_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `designation` varchar(100) NOT NULL,
  `positionRole` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `prime_department` varchar(100) NOT NULL,
  `national_circle` varchar(100) NOT NULL,
  `circle_name` varchar(100) NOT NULL,
  `base_location` varchar(100) NOT NULL,
  `offered_date` date NOT NULL,
  `offered_by` varchar(100) NOT NULL,
  `expected_joining_date` date NOT NULL,
  `joining_date` date NOT NULL,
  `probation_days` varchar(100) NOT NULL,
  `old_joiningdate` date NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `official_email_id` varchar(100) NOT NULL,
  `married_status` varchar(100) NOT NULL,
  `fatherName` varchar(100) NOT NULL,
  `esic_number` varchar(100) NOT NULL,
  `pf_number` varchar(100) NOT NULL,
  `uan_number` varchar(100) NOT NULL,
  `pancard` varchar(100) NOT NULL,
  `pancard_number` varchar(100) NOT NULL,
  `aadharcard` varchar(100) NOT NULL,
  `passport` varchar(100) NOT NULL,
  `passport_back` varchar(100) NOT NULL,
  `mediclaimdoc` varchar(100) NOT NULL,
  `esicdoc` varchar(100) NOT NULL,
  `aadhar_number` int(100) NOT NULL,
  `permanent_address` varchar(100) NOT NULL,
  `current_address` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `pledgedoc` varchar(100) NOT NULL,
  `another_mobile` int(100) NOT NULL,
  `reportingMgrName` varchar(100) NOT NULL,
  `reportingMgrContact` int(100) NOT NULL,
  `reportingMgrEmail` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `infoCompleted` varchar(100) NOT NULL,
  `punchType` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `updateDatesAr` date NOT NULL,
  `updateUsersAr` varchar(100) NOT NULL,
  `lastUpdate` datetime NOT NULL,
  `lastUpdatedBy` varchar(100) NOT NULL,
  `geo_tracking_status` varchar(100) NOT NULL,
  `office_location_id` varchar(100) NOT NULL,
  `working_location_id` varchar(100) NOT NULL,
  `working_location_address` varchar(100) NOT NULL,
  `contact_person_name` varchar(100) NOT NULL,
  `contact_person_email` varchar(100) NOT NULL,
  `contact_person_mobile` int(100) NOT NULL,
  `terms_condition` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_personal_info`
--

INSERT INTO `emp_personal_info` (`emp_id`, `indo_code`, `emp_name`, `rom_empcode`, `old_indocode`, `empl_id`, `reg_id`, `agencyid`, `companyName`, `working_shift_id`, `verticalName`, `empType`, `position_code`, `new_code`, `resource_name`, `gender`, `dob`, `designation`, `positionRole`, `department`, `prime_department`, `national_circle`, `circle_name`, `base_location`, `offered_date`, `offered_by`, `expected_joining_date`, `joining_date`, `probation_days`, `old_joiningdate`, `mobile_number`, `email_id`, `official_email_id`, `married_status`, `fatherName`, `esic_number`, `pf_number`, `uan_number`, `pancard`, `pancard_number`, `aadharcard`, `passport`, `passport_back`, `mediclaimdoc`, `esicdoc`, `aadhar_number`, `permanent_address`, `current_address`, `photo`, `blood_group`, `pledgedoc`, `another_mobile`, `reportingMgrName`, `reportingMgrContact`, `reportingMgrEmail`, `description`, `infoCompleted`, `punchType`, `remark`, `updateDatesAr`, `updateUsersAr`, `lastUpdate`, `lastUpdatedBy`, `geo_tracking_status`, `office_location_id`, `working_location_id`, `working_location_address`, `contact_person_name`, `contact_person_email`, `contact_person_mobile`, `terms_condition`) VALUES
(1, 'INDO34', 'ram', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '', 'testin@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, ''),
(2, 'INDO404', 'dark android', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '', 'android@google.com', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, ''),
(3, 'INDO501', 'sandeep', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '', 'sandeep@email.com', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, ''),
(4, 'INDO001', 'vinay kaushik', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '', 'vinay@indovision.in', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, ''),
(5, 'INDO301', 'sumit rao', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '', 'sumit@indovision.in', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, ''),
(6, 'INDO302', 'sachin mishra', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '', 'sachin@indovision.in', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, ''),
(7, 'INDO303', 'vivek rawat', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '', 'vivek@indovision.in', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, ''),
(9, 'INDO305', 'pankaj negi', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '', 'pankaj@indovision.in', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, ''),
(10, 'INDO306', 'sakshi malik', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '', 'sakshimalik@indovision.in', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, ''),
(12, 'INDO309', 'jyoti sharma', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '', 'jyoti@indovision.in', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, ''),
(13, 'INDO311', 'david', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '', 'david@indovision.in', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, ''),
(15, 'INDO316', 'Sophia jain', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '', 'Sophia@indovision.in', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '0000-00-00', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `hr_approval_emp`
--

CREATE TABLE `hr_approval_emp` (
  `id` int(100) NOT NULL,
  `emp_id` varchar(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `return_date` date DEFAULT NULL,
  `installment_amount` int(100) NOT NULL,
  `purpose_of_visit` varchar(100) DEFAULT NULL,
  `agreement_upload` varchar(100) DEFAULT NULL,
  `remark` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hr_approval_emp`
--

INSERT INTO `hr_approval_emp` (`id`, `emp_id`, `emp_name`, `start_date`, `return_date`, `installment_amount`, `purpose_of_visit`, `agreement_upload`, `remark`) VALUES
(1, 'INDO001', ' vinay kaushik', '2020-04-21', '2020-04-21', 5000, 'testing', 'INDO001-19-05-2020-08-26-10-1582642627.pdf', ''),
(2, 'INDO501', ' sandeep', '2020-04-24', '2020-04-25', 10000, 'software development', 'INDO501-19-05-2020-08-26-25-82788345.pdf', 'update amount'),
(3, 'INDO404', '  dark android', '2022-02-02', '2020-02-02', 600000, 'update..', 'INDO404-19-05-2020-08-43-49-1652100308.docx', 'new version'),
(4, 'INDO34', 'ram', '2020-12-31', '2019-12-30', 1000, 'testing', 'INDO34-19-05-2020-08-45-15-575887330.xlsx', 'null'),
(6, 'INDO90', ' Dinesh sharma', '2020-03-03', '2020-03-09', 50000, 'software development', 'INDO90-21-05-2020-05-51-43-720537168.pdf', ''),
(8, 'INDO9', 'Dinesh sharma', '2020-03-03', '2020-03-09', 450000, 'software development', 'INDO9-21-05-2020-08-27-04-1058375917.png', ''),
(10, 'INDO91', 'bebhav kumar', '2020-03-17', '2020-09-17', 750000, 'UI designer', 'INDO91-21-05-2020-08-26-50-768493943.png', 'test...'),
(11, 'INDO45', ' Rohit', '2020-04-04', '2020-09-09', 90000, 'account', 'INDO45-21-05-2020-08-26-11-298864368.pdf', 'null'),
(12, 'INDO77', 'ruhi bhardwaj', '2020-01-02', '2020-06-02', 780000, 'testing', 'INDO77-19-05-2020-08-25-33-1377233234.docx', ''),
(15, 'INDO54', 'admin ', '2020-01-01', '2020-09-09', 80000, 'software development', 'INDO54-19-05-2020-08-15-32-526456992.PNG', 'test'),
(16, 'INDO101', 'Rahul singh', '2020-04-04', '2020-12-04', 9200, 'development', 'INDO101-19-05-2020-08-11-24-2135903752.png', ''),
(22, 'INDO311', 'david', '2020-09-05', '2020-09-12', 2147483647, 'development', 'INDO311-19-05-2020-13-03-13-34121848.PNG', 'fill amount..'),
(23, 'INDO301', 'sumit rao', '2020-05-18', '2020-11-18', 2000, 'software development', NULL, 'apply retention..'),
(25, 'INDO302', 'sachin mishra', '2019-02-19', '2019-12-19', 750000, 'tesing', NULL, 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `payment_request_employees`
--

CREATE TABLE `payment_request_employees` (
  `id` int(100) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `traning_name` varchar(100) NOT NULL,
  `installment_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_request_employees`
--

INSERT INTO `payment_request_employees` (`id`, `emp_id`, `emp_name`, `traning_name`, `installment_amount`) VALUES
(1, 'INDO501', ' sandeep', 'software development', 10000),
(2, 'INDO001', ' vinay kaushik', 'testing', 5000),
(4, 'INDO404', '  dark android', 'update..', 600000),
(5, 'INDO101', 'Rahul singh', 'development', 9200),
(6, 'INDO77', 'ruhi bhardwaj', 'testing', 780000),
(7, 'INDO54', 'admin ', 'software development', 80000),
(9, 'INDO34', 'ram', 'testing', 1000),
(12, 'INDO91', 'bebhav kumar', 'UI designer', 750000),
(15, 'INDO90', ' Dinesh sharma', 'software development', 50000),
(18, 'INDO311', 'david', 'development', 2147483647),
(26, 'INDO45', ' Rohit', 'account', 90000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emps_payments_list`
--
ALTER TABLE `emps_payments_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- Indexes for table `emp_apply_retention`
--
ALTER TABLE `emp_apply_retention`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emp_id` (`emp_id`) USING BTREE;

--
-- Indexes for table `emp_personal_info`
--
ALTER TABLE `emp_personal_info`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `indo_code` (`indo_code`);

--
-- Indexes for table `hr_approval_emp`
--
ALTER TABLE `hr_approval_emp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- Indexes for table `payment_request_employees`
--
ALTER TABLE `payment_request_employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emps_payments_list`
--
ALTER TABLE `emps_payments_list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `emp_apply_retention`
--
ALTER TABLE `emp_apply_retention`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `emp_personal_info`
--
ALTER TABLE `emp_personal_info`
  MODIFY `emp_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hr_approval_emp`
--
ALTER TABLE `hr_approval_emp`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payment_request_employees`
--
ALTER TABLE `payment_request_employees`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
