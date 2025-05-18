-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2025 at 12:16 PM
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
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bn` varchar(255) NOT NULL,
  `slug` varchar(500) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `roles_id` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `picture` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `create_user` int(11) NOT NULL,
  `create_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `name`, `name_bn`, `slug`, `mobile_no`, `email`, `roles_id`, `address`, `picture`, `is_active`, `create_user`, `create_date`) VALUES
(35, 'Blue Printing House', 'নীল প্রিন্টিং হাউস', 'blue-printing-house', '01829107469', 'blue@gmail.com', '3', 'dhaka', '674fd9a2c1060.jpeg', 1, 1, 1733286306);

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
(41, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1730258245),
(42, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1730351794),
(43, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1730519567),
(44, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1730608461),
(45, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1730694297),
(46, '::1', 1, 'admin@gmail.com', 'Windows 10', 'Chrome 130.0.0.0', 0, 1730777784);

-- --------------------------------------------------------

--
-- Table structure for table `card_design`
--

CREATE TABLE `card_design` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_front_side` int(11) NOT NULL,
  `is_back_side` int(11) NOT NULL,
  `is_both_side` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `create_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card_design`
--

INSERT INTO `card_design` (`id`, `code`, `slug`, `name`, `description`, `is_front_side`, `is_back_side`, `is_both_side`, `picture`, `is_active`, `create_date`) VALUES
(1, '001', '001', 'Design 1', 'Design 1', 1, 1, 1, 'design-001.jpg', 1, 0),
(2, '002', '002', 'Design 2', 'Design 2', 1, 1, 1, 'design-002.jpg', 1, 0),
(3, '003', '003', 'Design 3', 'Design 3', 1, 1, 1, 'design-003.jpg', 1, 0),
(4, '004', '004', 'Design 4', 'Design 4', 1, 1, 1, 'design-004.jpg', 1, 0),
(5, '005', '005', 'Design 5', 'Design 5', 1, 1, 1, 'design-005.jpg', 1, 0),
(6, '006', '006', 'Design 6', 'Design 6', 1, 1, 1, 'design-006.jpg', 1, 0),
(7, '007', '007', 'Design 7', 'Design 7', 1, 1, 1, 'design-007.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `agent_id`, `organization_id`, `name`, `is_active`, `create_date`, `is_delete`) VALUES
(9, 35, 10, 'Six', 1, 1733296014, 0),
(10, 35, 10, 'Seven', 1, 1733296023, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_credential`
--

CREATE TABLE `login_credential` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` tinyint(2) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1(active) 0(deactivate)',
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `login_credential`
--

INSERT INTO `login_credential` (`id`, `user_id`, `username`, `password`, `role`, `active`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin@gmail.com', 'UHZVdVBOTWI0VkwrN0MvQjRRRUZkdz09', 1, 1, '2025-05-18 15:01:25', '2024-10-21 15:42:57', '2025-05-18 15:01:25'),
(29, 35, '01829107469', 'UHZVdVBOTWI0VkwrN0MvQjRRRUZkdz09', 3, 1, '2025-05-18 15:01:41', '2024-12-04 10:25:06', '2025-05-18 15:01:41'),
(30, 10, '018291074689', 'c3BEckcrYllnMzJBSHhnTFVCanJEQT09', 4, 1, NULL, '2024-12-04 12:09:56', '2024-12-04 12:09:56'),
(31, 11, '01842325244', 'c3BEckcrYllnMzJBSHhnTFVCanJEQT09', 4, 1, NULL, '2024-12-31 12:29:28', '2024-12-31 12:29:28'),
(32, 12, '01829107462', 'c3BEckcrYllnMzJBSHhnTFVCanJEQT09', 4, 1, NULL, '2025-05-13 10:49:04', '2025-05-13 10:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_bn` varchar(300) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `signature_name` varchar(255) NOT NULL,
  `signature_picture` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `create_user` int(11) NOT NULL,
  `create_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `agent_id`, `name`, `name_bn`, `slug`, `mobile_no`, `email`, `website`, `address`, `signature_name`, `signature_picture`, `picture`, `is_active`, `create_user`, `create_date`) VALUES
(10, 35, 'M Hasan High School', '', 'm-hasan-high-school', '018291074689', 'mhasan@gmail.com', 'www.mhasan.com', '12/A shshs sdhgd', 'Head Master', '', '', 1, 29, 1733292596),
(11, 35, 'Master IT Solution', 'মাস্টার আইটি সলিউশন', 'master-it-solution', '01842325244', 'masterit138044@gmail.com', 'masteritsolution.com.bd', 'New Market, Kandirpar,Cumilla.', 'Riyad', '', '0.png', 1, 29, 1735626568),
(12, 35, 'ABC IT Company', 'ABC IT Company', 'abc-it-company', '01829107462', 'abcit@gmail.com', 'www.abcit.com', '1/2 Outer Circular Road,\r\n\r\nDhaka', 'abc It', '', '6822e5d7e43c9.jpg', 1, 29, 1747111744);

-- --------------------------------------------------------

--
-- Table structure for table `org_fields`
--

CREATE TABLE `org_fields` (
  `id` int(11) NOT NULL,
  `date_code` year(4) NOT NULL,
  `month_code` float NOT NULL,
  `code_random` int(11) NOT NULL,
  `code_no` varchar(255) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `terms_conditions_name` varchar(255) NOT NULL,
  `terms_conditions` text NOT NULL,
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
  `is_sessions` int(11) NOT NULL,
  `is_sections` int(11) NOT NULL,
  `is_date_of_birth` int(11) NOT NULL,
  `is_gender` int(11) NOT NULL,
  `is_id_number` int(11) NOT NULL,
  `is_blood_group` int(11) NOT NULL,
  `is_marital_status` int(11) NOT NULL,
  `is_photo` int(11) NOT NULL,
  `is_signature` int(11) NOT NULL,
  `is_nationality` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `create_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `org_fields`
--

INSERT INTO `org_fields` (`id`, `date_code`, `month_code`, `code_random`, `code_no`, `agent_id`, `organization_id`, `title`, `description`, `terms_conditions_name`, `terms_conditions`, `is_name_en`, `is_name_bn`, `is_father_name_en`, `is_father_name_bn`, `is_mother_name_en`, `is_mother_name_bn`, `is_mobile_no`, `is_email`, `is_village_en`, `is_village_bn`, `is_post_office_en`, `is_post_office_bn`, `is_upazila_en`, `is_upazila_bn`, `is_zilla_en`, `is_zilla_bn`, `is_present_address_en`, `is_present_address_bn`, `is_permanent_address_en`, `is_permanent_address_bn`, `is_designation`, `is_department`, `is_employee_id`, `is_index_no`, `is_class`, `is_class_roll`, `is_sessions`, `is_sections`, `is_date_of_birth`, `is_gender`, `is_id_number`, `is_blood_group`, `is_marital_status`, `is_photo`, `is_signature`, `is_nationality`, `is_active`, `create_date`) VALUES
(24, '2024', 12, 1, '241235001', 35, 10, 'Class 6 Form', 'this is one', '', '', 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 0, 1, 1733302371),
(25, '2024', 12, 2, '241235002', 35, 11, 'MASTER IT 2024', 'ID CARD TEST', '', '', 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1735626643),
(26, '2025', 5, 1, '250535001', 35, 12, 'New Employee Form', 'New Employee Form', 'Terms & Conditions', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto repudiandae laudantium hic! Laborum et, tempora!', 1, 0, 1, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1747111803);

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
(3, 'Agent', 'agent', 1, 1, 0),
(4, 'Customer', 'customer', 1, 1, 0),
(5, 'Users', 'user', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `agent_id`, `organization_id`, `name`, `is_active`, `create_date`, `is_delete`) VALUES
(7, 35, 10, 'A', 1, 1733303160, 0),
(8, 35, 10, 'B', 1, 1733303164, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `agent_id`, `organization_id`, `name`, `is_active`, `create_date`, `is_delete`) VALUES
(5, 35, 10, '2024', 1, 1733305153, 0);

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
(1, '', 0, 0, '', 'Admin', '', 'admin@gmail.com', 'UHZVdVBOTWI0VkwrN0MvQjRRRUZkdz09', 1, '', '', '', '', '', '', 0, '', 0, 0, '', '', '', '', '', '', '', '', 0.00, '', '', '', '', '', '', 1, 1730777784, '0.png', 0, 0),
(2, '43443', 0, 0, '', 'Md Abir', 'Hossan', 'abir@gmail.com', 'UHZVdVBOTWI0VkwrN0MvQjRRRUZkdz09', 2, '4334', 'Resolving Conflicts Between Designers And Engineers', 'dsfds', 'sdfds', 'sdffds', 'sd3454', 1727560800, 'Single', 1727560800, 1727560800, '443', '4443', 'Male', '', '', '', '', '', 0.00, '43443', '444', '444', '44', '', '', 1, 1728289651, '3714aef45111e7229a46f298ff89c56b.JPG', 1, 1727601998),
(3, '43443', 0, 0, '', 'Md Abir', 'Hossan', 'mitu@gmail.com', 'UHZVdVBOTWI0VkwrN0MvQjRRRUZkdz09', 3, '4334', 'Resolving Conflicts Between Designers And Engineers', 'dsfds', 'sdfds', 'sdffds', 'sd3454', 1727560800, 'Single', 1727560800, 1727560800, '443', '4443', 'Female', '', '', '', '', '', 0.00, '43443', '444', '444', '44', '', '', 1, 1728291674, '3714aef45111e7229a46f298ff89c56b.JPG', 1, 1727601998);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`) VALUES
(19, 'name', 'email', ''),
(20, 'litn', 'test', ''),
(21, 'litn', 'test', ''),
(22, 'litn', 'test', './uploads/images/litn-1731147160.jpg'),
(23, 'litn', 'test', './uploads/images/litn-1731147233.jpg'),
(24, 'joy', 'angla', './uploads/images/joy-1731147233.jpg'),
(25, 'litn', 'test', ''),
(26, 'joy', 'angla', ''),
(27, 'litn', 'test', ''),
(28, 'joy', 'angla', '');

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
  `agent_id` int(11) NOT NULL,
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
  `sessions` varchar(255) NOT NULL,
  `sections` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
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
  `signature` varchar(255) NOT NULL,
  `is_excel` int(11) NOT NULL,
  `file_name` varchar(300) NOT NULL,
  `is_active` int(11) NOT NULL,
  `create_user` int(11) NOT NULL,
  `create_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_fields`
--

INSERT INTO `users_fields` (`id`, `ip_address`, `date_code`, `month_code`, `code_random`, `registration_no`, `agent_id`, `organization_id`, `org_fields_id`, `name_en`, `name_bn`, `father_name_en`, `father_name_bn`, `mother_name_en`, `mother_name_bn`, `mobile_no`, `email`, `village_en`, `village_bn`, `post_office_en`, `post_office_bn`, `upazila_en`, `upazila_bn`, `zilla_en`, `zilla_bn`, `designation`, `department`, `employee_id`, `index_no`, `class`, `class_roll`, `sessions`, `sections`, `date_of_birth`, `gender`, `id_number`, `blood_group`, `marital_status`, `nationality`, `present_address_en`, `present_address_bn`, `permanent_address_en`, `permanent_address_bn`, `photo`, `signature`, `is_excel`, `file_name`, `is_active`, `create_user`, `create_date`) VALUES
(150, '127.0.0.1', '2024', 12, 1, '241235001', 35, 10, 24, 'Md Litan Sarkar', '', '', '', '', '', '01829107469', 'litan@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '10', '12', '5', 7, '0000-00-00', 'Male', '', 'B+', '', '', '', '', '', '', 'b537610f5fe316b5542c3986efaa0981.JPG', '', 0, '', 1, 0, 0),
(151, '::1', '2024', 12, 2, '241235002', 35, 10, 24, 'Nill Hasan', '', '', '', '', '', '0182726262', 'nilahasan@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '10', '6', '', 8, '0000-00-00', 'Female', '', 'AB+', '', '', '', '', '', '', '2a7dbcc26bc65e6e9b59e317d4abebc4.png', '', 0, '', 1, 0, 0),
(152, '::1', '2024', 12, 3, '241235003', 35, 10, 24, 'Sonali Akter', '', '', '', '', '', '01827262', '22@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '10', '2', '5', 8, '2019-12-12', 'Male', '', 'A-', '', '', '', '', '', '', 'bbb0310d0ea7acaff960326c27c8ca66.png', '', 0, '', 1, 0, 0),
(153, '::1', '2024', 12, 4, '241235004', 35, 10, 24, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '0.png', '', 0, '', 1, 0, 0),
(154, '::1', '2024', 12, 5, '241235005', 35, 11, 25, 'Md Litan Sarkar ', 'মো লিটন সরকার', 'Ebrahim Miah', 'ইব্রাহিম মিয়া', 'Lipi', '', '01829107469', '', '', '', 'Koiguri', '', 'Delduar', '', 'Tangail', '', '', '', '425852', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', 'Vill: Shovoki , Post : Koiguri , delduar, Tangail-1900', '', 'dc04c4df255c30e9c0e76b31c4185aa9.JPG', '', 0, '', 1, 0, 0),
(155, '::1', '2025', 5, 1, '250535001', 35, 12, 26, 'Md Litan Sarkar', '', 'Ibrahim', '', '', '', '01829107469', 'litan@gmail.com', '', '', '', '', '', '', '', '', 'Software Engineer', 'IT', '1282736', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', 'New Employee Form', '', '', '', '0da0ba03bf25366479e54c2eb5128e16.jpg', '', 0, '', 1, 0, 0),
(156, '::1', '2025', 5, 2, '250535002', 35, 12, 26, 'Mili Akter', '', 'Hamid', '', '', '', '019287236', 'miliadter@gmail.com', '', '', '', '', '', '', '', '', 'Font Desk Manager', 'IT', '10298273', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', 'Dhaka', '', '', '', '8d432772f39c290c97ae43f6c6aaa656.jpeg', '', 0, '', 1, 0, 0),
(157, '::1', '2025', 5, 3, '250535003', 35, 12, 26, 'Jasmin Akter', '', 'Korim', '', '', '', '01827262', 'jasminakter@gmail.com', '', '', '', '', '', '', '', '', 'Sales Manager', 'IT', '1230383747', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', 'dhaka', '', '', '', '41fc0bcc0c54cea37fae1b6139a8dfeb.jpeg', '', 0, '', 1, 0, 0),
(158, '::1', '2025', 5, 4, '250535004', 35, 12, 26, 'kobir Miah', '', 'habib', '', '', '', '019273635333', 'kobir@gmail.com', '', '', '', '', '', '', '', '', 'Sales Manager', 'IT', '13433442', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', 'dhaka', '', '', '', 'e48a1f94bd6e3f3d3d69b2b2851beeb8.jpeg', '', 0, '', 1, 0, 0),
(159, '::1', '2025', 5, 5, '250535005', 35, 12, 26, 'Kaya Akter', '', 'Habib', '', '', '', '01292721531', 'kaya@gmail.com', '', '', '', '', '', '', '', '', 'Manager', 'IT', '21324434', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', 'dhaka', '', '', '', '1a3f92aefc8704d981eb0c1415fae01c.jpeg', '', 0, '', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_users_info`
--
ALTER TABLE `auth_users_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_design`
--
ALTER TABLE `card_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_credential`
--
ALTER TABLE `login_credential`
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
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `auth_users_info`
--
ALTER TABLE `auth_users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `card_design`
--
ALTER TABLE `card_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login_credential`
--
ALTER TABLE `login_credential`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `org_fields`
--
ALTER TABLE `org_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users_fields`
--
ALTER TABLE `users_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
