-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 09:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_info`
--

CREATE TABLE `auth_users_info` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `usersid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `browser` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `logintime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth_users_info`
--

INSERT INTO `auth_users_info` (`id`, `ip_address`, `usersid`, `email`, `device_name`, `browser`, `role`, `logintime`) VALUES
(1, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1727512129),
(2, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1727522490),
(3, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1727522776),
(4, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1727542852),
(5, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1727807848),
(6, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1727867139),
(7, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1727925501),
(8, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1728279030),
(9, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1728289436),
(10, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1728289581),
(11, '::1', 2, 'abir@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 2, 1728289651),
(12, '::1', 3, 'mitu@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 3, 1728289686),
(13, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1728291514),
(14, '::1', 3, 'mitu@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 3, 1728291674),
(15, '::1', 1, 'jon@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 0, 1729185636),
(16, '::1', 1, 'jon@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 0, 1729185723),
(17, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1729226495),
(18, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1729256614),
(19, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1729613373),
(20, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 1, 1729617092),
(21, '::1', 1, 'jon@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 0, 1729695342),
(22, '::1', 1, 'jon@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 0, 1729695458),
(23, '::1', 1, 'jon@gmail.com', 'Windows 10', 'Chrome 129.0.0.0', 0, 1729707816),
(24, '::1', 1, 'jon@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1729779343),
(25, '::1', 1, 'jon@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1729789703),
(26, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 1, 1729793545),
(27, '::1', 1, 'jon@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1729796501),
(28, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 1, 1729829292),
(29, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 1, 1729844524),
(30, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1729869138),
(31, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1729869141),
(32, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1729869175),
(33, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1729869222),
(34, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1729945444),
(35, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1730086184),
(36, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1730171909),
(37, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1730178285),
(38, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1730179293),
(39, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1730180082),
(40, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1730183441),
(41, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1730258245);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bn` varchar(300) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `create_user` int(11) NOT NULL,
  `create_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `name`, `name_bn`, `slug`, `mobile_no`, `email`, `address`, `picture`, `is_active`, `create_user`, `create_date`) VALUES
(4, 'Smart ID Card Zoon', 'Smart ID Card Zoon', 'smart-id-card-zoon', '01829107469', 'samrt@gmail.com', '', '0.png', 1, 1, 1730259581);

-- --------------------------------------------------------

--
-- Table structure for table `org_fields`
--

CREATE TABLE `org_fields` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_name_en` int(11) NOT NULL,
  `is_name_bn` int(11) NOT NULL,
  `is_father_name_en` int(11) NOT NULL,
  `is_father_name_bn` int(11) NOT NULL,
  `is_mother_name_en` int(11) NOT NULL,
  `is_mother_name_bn` int(11) NOT NULL,
  `is_mobile_no` int(11) NOT NULL,
  `is_email` int(11) NOT NULL,
  `is_village_en` int(11) NOT NULL,
  `is_village_bn` int(11) NOT NULL,
  `is_post_office_en` int(11) NOT NULL,
  `is_post_office_bn` int(11) NOT NULL,
  `is_upazila_en` int(11) NOT NULL,
  `is_upazila_bn` int(11) NOT NULL,
  `is_zilla_en` int(11) NOT NULL,
  `is_zilla_bn` int(11) NOT NULL,
  `is_present_address_en` int(11) NOT NULL,
  `is_present_address_bn` int(11) NOT NULL,
  `is_permanent_address_en` int(11) NOT NULL,
  `is_permanent_address_bn` int(11) NOT NULL,
  `is_designation` int(11) NOT NULL,
  `is_department` int(11) NOT NULL,
  `is_employee_id` int(11) NOT NULL,
  `is_index_no` int(11) NOT NULL,
  `is_class` int(11) NOT NULL,
  `is_class_roll` int(11) NOT NULL,
  `is_date_of_birth` int(11) NOT NULL,
  `is_gender` int(11) NOT NULL,
  `is_id_number` int(11) NOT NULL,
  `is_blood_group` int(11) NOT NULL,
  `is_marital_status` int(11) NOT NULL,
  `is_photo` int(11) NOT NULL,
  `is_nationality` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `create_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `org_fields`
--

INSERT INTO `org_fields` (`id`, `organization_id`, `title`, `description`, `is_name_en`, `is_name_bn`, `is_father_name_en`, `is_father_name_bn`, `is_mother_name_en`, `is_mother_name_bn`, `is_mobile_no`, `is_email`, `is_village_en`, `is_village_bn`, `is_post_office_en`, `is_post_office_bn`, `is_upazila_en`, `is_upazila_bn`, `is_zilla_en`, `is_zilla_bn`, `is_present_address_en`, `is_present_address_bn`, `is_permanent_address_en`, `is_permanent_address_bn`, `is_designation`, `is_department`, `is_employee_id`, `is_index_no`, `is_class`, `is_class_roll`, `is_date_of_birth`, `is_gender`, `is_id_number`, `is_blood_group`, `is_marital_status`, `is_photo`, `is_nationality`, `is_active`, `create_date`) VALUES
(8, 4, 'SMART ID CARD ZOON', 'please check & filed up all data ', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1730267970);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `is_system` int(11) NOT NULL,
  `is_superadmin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `is_active`, `is_system`, `is_superadmin`) VALUES
(1, 'Super Admin', 'super_admin', 1, 0, 1),
(2, 'Admin', 'admin', 1, 1, 0),
(3, 'Instructor', 'instructor', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(300) NOT NULL,
  `short_description` text NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `linkedin` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `currency_icon` varchar(50) NOT NULL,
  `language` varchar(250) NOT NULL,
  `timezone` varchar(50) NOT NULL,
  `dateformat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `title`, `name`, `short_description`, `address`, `email`, `phone`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `logo`, `favicon`, `country`, `currency`, `currency_icon`, `language`, `timezone`, `dateformat`) VALUES
(1, ' Jim Online School', ' Jim Online School', '', 'Dhaka', 'info@jimonline.com', '01829107469', '', '', '', '', '', 'ea7261492467a912ac9b162bd1511b86.jpg', '3945131131aef350d5b00e50f776a702.png', 'BD', 'BD', ' ৳', 'bangla', 'Asia/Dhaka', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(255) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `work_exp` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `emergency_contact_no` varchar(255) NOT NULL,
  `dob` int(11) NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `date_of_joining` int(11) NOT NULL,
  `date_of_leaving` int(11) NOT NULL,
  `local_address` varchar(300) NOT NULL,
  `permanent_address` varchar(300) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `account_title` varchar(300) NOT NULL,
  `bank_account_no` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `lang_id` varchar(255) NOT NULL,
  `bank_branch` varchar(255) NOT NULL,
  `basic_salary` decimal(10,2) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `joining_letter` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `last_login` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `create_user` int(11) NOT NULL,
  `create_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `employee_id`, `department_id`, `designation_id`, `ip_address`, `first_name`, `last_name`, `email`, `password`, `roles_id`, `qualification`, `work_exp`, `father_name`, `mother_name`, `contact_no`, `emergency_contact_no`, `dob`, `marital_status`, `date_of_joining`, `date_of_leaving`, `local_address`, `permanent_address`, `gender`, `account_title`, `bank_account_no`, `bank_name`, `lang_id`, `bank_branch`, `basic_salary`, `facebook`, `twitter`, `linkedin`, `instagram`, `resume`, `joining_letter`, `is_active`, `last_login`, `picture`, `create_user`, `create_date`) VALUES
(1, '', 0, 0, '', 'Admin', '', 'admin@gmail.com', 'UHZVdVBOTWI0VkwrN0MvQjRRRUZkdz09', 1, '', '', '', '', '', '', 0, '', 0, 0, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', 1, 1730258245, '0.png', 0, 0),
(2, '43443', 0, 0, '', 'Md Abir', 'Hossan', 'abir@gmail.com', 'UHZVdVBOTWI0VkwrN0MvQjRRRUZkdz09', 2, '4334', 'Resolving Conflicts Between Designers And Engineers', 'dsfds', 'sdfds', 'sdffds', 'sd3454', 1727560800, 'Single', 1727560800, 1727560800, '443', '4443', 'Male', '', '', '', '', '', 0.00, '43443', '444', '444', '44', '', '', 1, 1728289651, '3714aef45111e7229a46f298ff89c56b.JPG', 1, 1727601998),
(3, '43443', 0, 0, '', 'Md Abir', 'Hossan', 'mitu@gmail.com', 'UHZVdVBOTWI0VkwrN0MvQjRRRUZkdz09', 3, '4334', 'Resolving Conflicts Between Designers And Engineers', 'dsfds', 'sdfds', 'sdffds', 'sd3454', 1727560800, 'Single', 1727560800, 1727560800, '443', '4443', 'Female', '', '', '', '', '', 0.00, '43443', '444', '444', '44', '', '', 1, 1728291674, '3714aef45111e7229a46f298ff89c56b.JPG', 1, 1727601998);

-- --------------------------------------------------------

--
-- Table structure for table `users_fields`
--

CREATE TABLE `users_fields` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `date_code` year(4) NOT NULL,
  `month_code` float NOT NULL,
  `code_random` int(11) NOT NULL,
  `registration_no` varchar(255) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `org_fields_id` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) NOT NULL,
  `father_name_en` varchar(255) NOT NULL,
  `father_name_bn` varchar(255) NOT NULL,
  `mother_name_en` varchar(255) NOT NULL,
  `mother_name_bn` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `village_en` varchar(255) NOT NULL,
  `village_bn` varchar(255) NOT NULL,
  `post_office_en` varchar(255) NOT NULL,
  `post_office_bn` varchar(255) NOT NULL,
  `upazila_en` varchar(255) NOT NULL,
  `upazila_bn` varchar(255) NOT NULL,
  `zilla_en` varchar(255) NOT NULL,
  `zilla_bn` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `index_no` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `class_roll` varchar(255) NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `id_number` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `present_address_en` text NOT NULL,
  `present_address_bn` text NOT NULL,
  `permanent_address_en` text NOT NULL,
  `permanent_address_bn` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `create_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_fields`
--

INSERT INTO `users_fields` (`id`, `ip_address`, `date_code`, `month_code`, `code_random`, `registration_no`, `organization_id`, `org_fields_id`, `name_en`, `name_bn`, `father_name_en`, `father_name_bn`, `mother_name_en`, `mother_name_bn`, `mobile_no`, `email`, `village_en`, `village_bn`, `post_office_en`, `post_office_bn`, `upazila_en`, `upazila_bn`, `zilla_en`, `zilla_bn`, `designation`, `department`, `employee_id`, `index_no`, `class`, `class_roll`, `date_of_birth`, `gender`, `id_number`, `blood_group`, `marital_status`, `nationality`, `present_address_en`, `present_address_bn`, `permanent_address_en`, `permanent_address_bn`, `photo`, `is_active`, `create_date`) VALUES
(7, '::1', '2024', 10, 1, '24104001', 4, 8, 'ewasda', '33', '33', '3', '33', '3333', '33', '33@gail.com', '33', '33', '33', '33', '33', '333', '33', '33', '33', '33', '333', '33', '', '33', 0, 'Male', '33', 'O-', '', '33', '', '', '', '', '0.png', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_users_info`
--
ALTER TABLE `auth_users_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org_fields`
--
ALTER TABLE `org_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_fields`
--
ALTER TABLE `users_fields`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_users_info`
--
ALTER TABLE `auth_users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `org_fields`
--
ALTER TABLE `org_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_fields`
--
ALTER TABLE `users_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
