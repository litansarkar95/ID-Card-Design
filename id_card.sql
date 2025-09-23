-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2025 at 06:11 AM
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
(35, 'Blue Printing House', 'নীল প্রিন্টিং হাউস', 'blue-printing-house', '01829107469', 'blue@gmail.com', '3', 'dhaka', '674fd9a2c1060.jpeg', 1, 1, 1733286306),
(36, 'MAster IT Solution', 'মাষ্টার আইটি সলিউশন', 'master-it-solution-1', '01841325044', 'masterit138044@gmail.com', '3', 'Cumilla New Market, Kandirpar, Cumilla.', '', 1, 1, 1748755404),
(37, 'GENIUSCOMPUTER', 'জিনিয়াস কম্পিউটার ', 'geniuscomputer', '01956104797', 'geniuscomputer.comilla@gmail.com', '3', 'ভিক্টোরিয়া কলেজ রোড, কান্দিরপাড়, কুমিল্লা। ', '0.png', 1, 1, 1748764127);

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
(7, '007', '007', 'Design 7', 'Design 7', 1, 1, 1, 'design-007.jpg', 1, 0),
(8, '008', '008', 'Design 8', 'Design 8', 1, 1, 1, 'design-008.jpg', 1, 0);

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
(10, 35, 10, 'Seven', 1, 1733296023, 0),
(11, 36, 17, 'BBA(Hons) 1st Year', 1, 1756987273, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login_credential`
--

CREATE TABLE `login_credential` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1(active) 0(deactivate)',
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `login_credential`
--

INSERT INTO `login_credential` (`id`, `user_id`, `username`, `password`, `role`, `active`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin@gmail.com', 'UHZVdVBOTWI0VkwrN0MvQjRRRUZkdz09', 1, 1, '2025-09-23 09:14:40', '2024-10-21 15:42:57', '2025-09-23 09:14:40'),
(29, 35, '01829107469', 'UHZVdVBOTWI0VkwrN0MvQjRRRUZkdz09', 3, 1, '2025-08-31 14:27:07', '2024-12-04 10:25:06', '2025-08-31 14:27:07'),
(30, 10, '018291074689', 'c3BEckcrYllnMzJBSHhnTFVCanJEQT09', 4, 1, NULL, '2024-12-04 12:09:56', '2024-12-04 12:09:56'),
(31, 11, '01842325244', 'c3BEckcrYllnMzJBSHhnTFVCanJEQT09', 4, 1, NULL, '2024-12-31 12:29:28', '2024-12-31 12:29:28'),
(32, 12, '01829107462', 'c3BEckcrYllnMzJBSHhnTFVCanJEQT09', 4, 1, NULL, '2025-05-13 10:49:04', '2025-05-13 10:49:04'),
(33, 36, '01841325044', 'YlMrVXlBNmpRdHhjc1FsOGttditmZz09', 3, 1, '2025-09-23 09:15:03', '2025-06-01 11:23:24', '2025-09-23 09:15:03'),
(34, 13, '01841325244', 'c3BEckcrYllnMzJBSHhnTFVCanJEQT09', 4, 1, NULL, '2025-06-01 11:26:17', '2025-06-01 11:26:17'),
(35, 14, '01840325244', 'c3BEckcrYllnMzJBSHhnTFVCanJEQT09', 4, 1, NULL, '2025-06-01 11:31:04', '2025-06-01 11:31:04'),
(36, 37, '01956104797', 'SGZ6K2YyRUJDRjVCTTdDWVJoeTNVdz09', 3, 1, '2025-09-04 18:29:18', '2025-06-01 13:48:47', '2025-09-04 18:29:18'),
(37, 15, '01840325044', 'c3BEckcrYllnMzJBSHhnTFVCanJEQT09', 4, 1, NULL, '2025-06-01 13:52:05', '2025-06-01 13:52:05'),
(38, 16, '+8801707325244', 'c3BEckcrYllnMzJBSHhnTFVCanJEQT09', 4, 1, NULL, '2025-06-22 18:57:08', '2025-06-22 18:57:08'),
(39, 17, '01819477843', 'c3BEckcrYllnMzJBSHhnTFVCanJEQT09', 4, 1, NULL, '2025-09-04 11:25:34', '2025-09-04 11:25:34');

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
(12, 35, 'ABC IT Company', 'ABC IT Company', 'abc-it-company', '01829107462', 'abcit@gmail.com', 'www.abcit.com', '1/2 Outer Circular Road,\r\n\r\nDhaka', 'abc It', '', '6822e5d7e43c9.jpg', 1, 29, 1747111744),
(13, 36, 'Master IT Solution', 'মাস্টার আইটি সলিউশন', 'master-it-solution-1', '01841325244', 'masterit138044@gmail.com', 'masteritsolution.com.bd', 'new market,cumilla', 'Riyad', '68ce79234b088.png', '', 1, 33, 1748755577),
(15, 37, 'Ajidgho Moha Bidaloy ', 'অজিদগুহ মহাবিদ্যালয়', 'ajidgho-moha-bidaloy', '01840325044', '', 'cagc.edu.bd', 'VICTORIA COLLEGE ROAD, CANDIRPAR, CUMILLA', 'MONIR ', '', '', 1, 36, 1748764325),
(16, 36, 'Bhasha Soinik Ajit Guha College, Comilla', 'ভাষা সৈনিক অজিত গুহ মহাবিদ্যালয়, কুমিল্লা', 'bhasha-soinik-ajit-guha-college-comilla', '+8801707325244', '', 'https://cagc.edu.bd/', '', '', '', '0.png', 1, 33, 1750597028),
(17, 36, 'Debidwar Sujat Ali Govt. College', 'Debidwar Sujat Ali Govt. College', 'debidwar-sujat-ali-govt-college', '01707325244', 'litanSarkar95@gmail.com', 'www.eductaion.bd.com', '12/A Dhaka Kaligong', '', '', '68c68e01830f7.png', 1, 33, 1756963534);

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
  `is_father_mobile_no` int(11) NOT NULL,
  `is_mother_name_en` int(11) NOT NULL,
  `is_mother_name_bn` int(11) NOT NULL,
  `is_mother_mobile_no` int(11) NOT NULL,
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

INSERT INTO `org_fields` (`id`, `date_code`, `month_code`, `code_random`, `code_no`, `agent_id`, `organization_id`, `title`, `description`, `terms_conditions_name`, `terms_conditions`, `is_name_en`, `is_name_bn`, `is_father_name_en`, `is_father_name_bn`, `is_father_mobile_no`, `is_mother_name_en`, `is_mother_name_bn`, `is_mother_mobile_no`, `is_mobile_no`, `is_email`, `is_village_en`, `is_village_bn`, `is_post_office_en`, `is_post_office_bn`, `is_upazila_en`, `is_upazila_bn`, `is_zilla_en`, `is_zilla_bn`, `is_present_address_en`, `is_present_address_bn`, `is_permanent_address_en`, `is_permanent_address_bn`, `is_designation`, `is_department`, `is_employee_id`, `is_index_no`, `is_class`, `is_class_roll`, `is_sessions`, `is_sections`, `is_date_of_birth`, `is_gender`, `is_id_number`, `is_blood_group`, `is_marital_status`, `is_photo`, `is_signature`, `is_nationality`, `is_active`, `create_date`) VALUES
(24, '2024', 12, 1, '241235001', 35, 10, 'Class 6 Form', 'this is one', '', '', 1, 1, 1, 1, 0, 1, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0, 1, 0, 1, 1, 0, 1, 1733302371),
(25, '2024', 12, 2, '241235002', 35, 11, 'MASTER IT 2024', 'ID CARD TEST', '', '', 1, 1, 1, 1, 0, 1, 0, 0, 1, 0, 0, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1735626643),
(26, '2025', 5, 1, '250535001', 35, 12, 'New Employee Form', 'New Employee Form', 'Terms & Conditions', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto repudiandae laudantium hic! Laborum et, tempora!', 1, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1747111803),
(27, '2025', 5, 2, '250535002', 35, 12, 'aaa', 'dfdfdf', 'gfhg', 'fgdgfdg', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1748263881),
(30, '2025', 6, 1, '250637001', 37, 15, 'COLLEGE ID CARD', 'লিংক পিলাফ করুন ', '', '', 1, 0, 1, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1748764418),
(31, '2025', 6, 3, '250636003', 36, 16, ' ভাষা সৈনিক অজিত গুহ মহাবিদ্যালয় শিক্ষকদের আইডি কার্ড জেনারেট লিংক', 'য়া করে সকল ইনফরমেশন ফিলাপ করে সাবমিট বাটনে ক্লিক করুন ধন্যবাদ', '-', '-', 1, 0, 1, 0, 0, 1, 0, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 1, 1750597757),
(33, '2025', 7, 2, '250736002', 36, 13, 'ক্লাস ৬ আইডি কাড', 'সকল ডাটা এন্ট্রি করে সাবমিট ক্লিক করুন', 'র', '৪', 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 1753614566),
(34, '2025', 9, 1, '250936001', 36, 17, '\"Debidwar Sujat Ali Government College (Honours) 1st Year ID Card Information Link, Session 2024-2025\"', 'Fill in all the information correctly and click the Submit button below.', 'ID Card ব্যবহারের নিয়মাবলী', '\"This card must be carried at all times.\"\r\n\r\n\"If found, please return to [Institution Name]\"', 1, 0, 1, 0, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 1, 1, 0, 0, 1, 0, 1, 0, 1, 0, 0, 1, 1756963642),
(35, '2025', 9, 2, '250936002', 36, 13, 'Staff ID Card design -2025', 'Please Fildup all fileds', 'Terms & Conditions', 'এই আইডি কার্ড শুধুমাত্র অফিসের কার্যক্রম এবং সংস্থার স্বীকৃত পরিষেবার জন্য ব্যবহৃত হবে। আইডি কার্ডটি হারানো বা চুরি হলে অবিলম্বে মানবসম্পদ (HR) বিভাগকে জানান।আইডি কার্ডের অবৈধ ব্যবহার বা ভুল উদ্দেশ্যে ব্যবহার করা হলে আইনি ব্যবস্থা গ্রহণ করা হবে।', 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1758351500);

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
(5, 35, 10, '2024', 1, 1733305153, 0),
(6, 36, 17, '2024-2025', 1, 1756987364, 0);

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
  `father_mobile_no` varchar(100) NOT NULL,
  `mother_name_en` varchar(255) NOT NULL,
  `mother_name_bn` varchar(255) NOT NULL,
  `mother_mobile_no` varchar(100) NOT NULL,
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

INSERT INTO `users_fields` (`id`, `ip_address`, `date_code`, `month_code`, `code_random`, `registration_no`, `agent_id`, `organization_id`, `org_fields_id`, `name_en`, `name_bn`, `father_name_en`, `father_name_bn`, `father_mobile_no`, `mother_name_en`, `mother_name_bn`, `mother_mobile_no`, `mobile_no`, `email`, `village_en`, `village_bn`, `post_office_en`, `post_office_bn`, `upazila_en`, `upazila_bn`, `zilla_en`, `zilla_bn`, `designation`, `department`, `employee_id`, `index_no`, `class`, `class_roll`, `sessions`, `sections`, `date_of_birth`, `gender`, `id_number`, `blood_group`, `marital_status`, `nationality`, `present_address_en`, `present_address_bn`, `permanent_address_en`, `permanent_address_bn`, `photo`, `signature`, `is_excel`, `file_name`, `is_active`, `create_user`, `create_date`) VALUES
(150, '127.0.0.1', '2024', 12, 1, '241235001', 35, 10, 24, 'Md Litan Sarkar', '', '', '', '', '', '', '', '01829107469', 'litan@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '10', '12', '5', 7, '2025-08-08', 'Male', '', 'B+', '', '', '', '', '', '', 'b537610f5fe316b5542c3986efaa0981.JPG', '', 0, '', 1, 0, 0),
(151, '::1', '2024', 12, 2, '241235002', 35, 10, 24, 'Nill Hasan', '', '', '', '', '', '', '', '0182726262', 'nilahasan@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '10', '6', '', 8, '2025-09-04', 'Female', '', 'AB+', '', '', '', '', '', '', '2a7dbcc26bc65e6e9b59e317d4abebc4.png', '', 0, '', 1, 0, 0),
(152, '::1', '2024', 12, 3, '241235003', 35, 10, 24, 'Sonali Akter', '', '', '', '', '', '', '', '01827262', '22@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '10', '2', '5', 8, '2019-12-12', 'Male', '', 'A-', '', '', '', '', '', '', 'bbb0310d0ea7acaff960326c27c8ca66.png', '', 0, '', 1, 0, 0),
(153, '::1', '2024', 12, 4, '241235004', 35, 10, 24, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '0.png', '', 0, '', 1, 0, 0),
(154, '::1', '2024', 12, 5, '241235005', 35, 11, 25, 'Md Litan Sarkar ', 'মো লিটন সরকার', 'Ebrahim Miah', 'ইব্রাহিম মিয়া', '', 'Lipi', '', '', '01829107469', '', '', '', 'Koiguri', '', 'Delduar', '', 'Tangail', '', '', '', '425852', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', 'Vill: Shovoki , Post : Koiguri , delduar, Tangail-1900', '', 'dc04c4df255c30e9c0e76b31c4185aa9.JPG', '', 0, '', 1, 0, 0),
(155, '::1', '2025', 5, 1, '250535001', 35, 12, 26, 'Md Litan Sarkar', '', 'Ibrahim', '', '', '', '', '', '01829107469', 'litan@gmail.com', '', '', '', '', '', '', '', '', 'Software Engineer', 'IT', '1282736', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', 'New Employee Form', '', '', '', '0da0ba03bf25366479e54c2eb5128e16.jpg', '', 0, '', 1, 0, 0),
(156, '::1', '2025', 5, 2, '250535002', 35, 12, 26, 'Mili Akter', '', 'Hamid', '', '', '', '', '', '019287236', 'miliadter@gmail.com', '', '', '', '', '', '', '', '', 'Font Desk Manager', 'IT', '10298273', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', 'Dhaka', '', '', '', '8d432772f39c290c97ae43f6c6aaa656.jpeg', '', 0, '', 1, 0, 0),
(157, '::1', '2025', 5, 3, '250535003', 35, 12, 26, 'Jasmin Akter', '', 'Korim', '', '', '', '', '', '01827262', 'jasminakter@gmail.com', '', '', '', '', '', '', '', '', 'Sales Manager', 'IT', '1230383747', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', 'dhaka', '', '', '', '41fc0bcc0c54cea37fae1b6139a8dfeb.jpeg', '', 0, '', 1, 0, 0),
(158, '::1', '2025', 5, 4, '250535004', 35, 12, 26, 'kobir Miah', '', 'habib', '', '', '', '', '', '019273635333', 'kobir@gmail.com', '', '', '', '', '', '', '', '', 'Sales Manager', 'IT', '13433442', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', 'dhaka', '', '', '', 'e48a1f94bd6e3f3d3d69b2b2851beeb8.jpeg', '', 0, '', 1, 0, 0),
(159, '::1', '2025', 5, 5, '250535005', 35, 12, 26, 'Kaya Akter', '', 'Habib', '', '', '', '', '', '01292721531', 'kaya@gmail.com', '', '', '', '', '', '', '', '', 'Manager', 'IT', '21324434', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', 'dhaka', '', '', '', '1a3f92aefc8704d981eb0c1415fae01c.jpeg', '', 0, '', 1, 0, 0),
(160, '103.229.87.85', '2025', 6, 1, '250637001', 37, 15, 30, 'APURBA KARMAKAR', '', 'ABDUL KUDUSH ', '', '', '', 'জ্যোস্না রানী কর্মকার ', '', '01629109718', '', '', '', '', '', 'CUMILLA ', '', '', '', '', 'CUMILLA ', '', '', '', '5142', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '78867fc9a7583d490bf4bf66fa92b1a5.jpg', '', 0, '', 1, 0, 0),
(161, '114.130.185.47', '2025', 6, 1, '250636001', 36, 13, 29, 'Sabbir Islam', '', '', '', '', '', '', '', '01942154214', '', '', '', '', '', '', '', '', '', 'Technician', '', '001254', '6465452', '', '', '', 0, '0000-00-00', '', '2021452154', '', '', '', '', '', '', '', '', '', 0, '', 1, 0, 0),
(162, '114.130.185.47', '2025', 6, 2, '250636002', 36, 13, 29, 'Mariya Akter', '', '', '', '', '', '', '', '01767593506', '', '', '', '', '', '', '', '', '', 'MLSS', '', '0021652985', '6465452', '', '', '', 0, '0000-00-00', '', '2021452157', '', '', '', '', '', '', '', '', '', 0, '', 1, 0, 0),
(163, '114.130.185.47', '2025', 6, 3, '250636003', 36, 13, 29, 'MD JAHIDUL ISLAM', '', '', '', '', '', '', '', '01980742635', '', '', '', '', '', '', '', '', '', 'টেকনিশিয়ান', '', '95965542', '654125', '', '', '', 0, '0000-00-00', '', '5214685412', '', '', '', '', '', '', '', '', '', 0, '', 1, 0, 0),
(164, '114.130.185.47', '2025', 6, 4, '250636004', 36, 13, 29, 'Shaon Ahmed', '', '', '', '', '', '', '', '01714327779', '', '', '', '', '', '', '', '', '', 'Technician', '', '00214', '654125', '', '', '', 0, '0000-00-00', '', '5214685412', '', '', '', '', '', '', '', '', '', 0, '', 1, 0, 0),
(165, '114.130.185.47', '2025', 6, 5, '250636005', 36, 13, 29, 'Hasan', '', '', '', '', '', '', '', '01714327779', '', '', '', '', '', '', '', '', '', 'LOWER DIVISION ASSISTANT', '', '0021652985', '2154515', '', '', '', 0, '0000-00-00', '', '5214685412', '', '', '', '', '', '', '', '', '', 0, '', 1, 0, 0),
(166, '114.130.185.47', '2025', 6, 6, '250636006', 36, 13, 29, 'Sobuj Chandra Das', '', '', '', '', '', '', '', '01714327779', '', '', '', '', '', '', '', '', '', 'Technician', '', '0021652985', '654125', '', '', '', 0, '0000-00-00', '', '20214521546', '', '', '', '', '', '', '', '', '', 0, '', 1, 0, 0),
(167, '114.130.185.47', '2025', 6, 7, '250636007', 36, 13, 29, 'jamal hossain', '', '', '', '', '', '', '', '01646533079', '', '', '', '', '', '', '', '', '', 'Technician', '', '95965542', '654125', '', '', '', 0, '0000-00-00', '', '2021452155', '', '', '', '', '', '', '', 'dba347621ae30e4186eea873fd8f0913.jpg', '', 0, '', 1, 0, 0),
(168, '202.37.53.180', '2025', 6, 8, '250636008', 36, 16, 31, 'Sushanta Chandra Chakraborty', '', 'Umesh Chandra Chakraborty', '', '', 'Sandha Chakraborty', '', '', '01737737596', '', 'Suvapur', '', 'Cumilla', '', 'Cumilla Sador', '', 'Cumilla', '', 'Lecturer ', '', '', '-', '', '', '', 0, '0000-00-00', '', '', 'A+', '', '', '', '', '', '', '594492a41117d1c785dc6cc17ee8171f.jpg', '', 0, '', 1, 0, 0),
(169, '27.147.186.130', '2025', 6, 9, '250636009', 36, 16, 31, 'Most.Momota Akter', '', 'Mohd.khourshed alam', '', '', 'Salma akter', '', '', '01713160222', '', 'Daulat pur', '', 'Cumilla', '', 'Adarsha sadar', '', 'Cumilla ', '', 'Assistant Professor ', '', '', '3091362', '', '', '', 0, '0000-00-00', '', '', 'A+', '', '', '', '', '', '', 'b896b52d459bb5389e1fe346bd528ac3.jpg', '', 0, '', 1, 0, 0),
(170, '43.246.200.69', '2025', 6, 10, '250636010', 36, 16, 31, 'Tanya Islam', '', 'Abdul Bari', '', '', 'Sufia Begum', '', '', '01717588106', '', 'Gangchar', '', 'Cumilla ', '', 'Adarsha Sadar', '', 'Cumilla', '', 'Assistant professor ', '', '', '3091361', '', '', '', 0, '0000-00-00', '', '', 'O+', '', '', '', '', '', '', '848d7ec3a04eca38d6fffe398c0305fe.jpg', '', 0, '', 1, 0, 0),
(171, '103.205.36.3', '2025', 6, 11, '250636011', 36, 16, 31, 'Sabikun Nahar ', '', 'MD. Shahjahan Bapary', '', '', 'Nargis Begum', '', '', '01752977723', '', 'Dhani', '', 'Damudya', '', 'Damudya', '', 'Shariatpur', '', 'Lecturer ', '', '', '56901539', '', '', '', 0, '0000-00-00', '', '', 'O+', '', '', '', '', '', '', 'ce57ea21f876bfeabd0887c5298e6bc1.jpg', '', 0, '', 1, 0, 0),
(173, '37.111.217.195', '2025', 6, 13, '250636013', 36, 16, 31, 'KAZI SHIPAN', '', 'KAZI ZILLUR RAHMAN ', '', '', 'MST.ROSENA AKTER', '', '', '01303-692946', '', 'MONIONDHA ', '', 'MONIONDHA ', '', 'AKHAURA ', '', 'BRAHMANBARIA ', '', 'ASSISTANT TEACHER', '', '', 'N56901734', '', '', '', 0, '0000-00-00', '', '', 'AB+', '', '', '', '', '', '', 'acbb305b32615d2535c983e16b6cf213.jpg', '', 0, '', 1, 0, 0),
(174, '103.174.192.92', '2025', 6, 14, '250636014', 36, 16, 31, 'Nazmun Naher Choudhury', '', 'Abdul Mannan Choudhury ', '', '', 'Husnera Begum', '', '', '01717739030', '', '1172 ,Race course', '', 'Aadarsh sadar', '', 'Adarsh sadar', '', 'Cumilla', '', 'Lecturer', '', '', '3091364', '', '', '', 0, '0000-00-00', '', '', 'A+', '', '', '', '', '', '', '9a774d902047522f80469eb3040f6404.jpg', '', 0, '', 1, 0, 0),
(175, '37.111.212.7', '2025', 6, 15, '250636015', 36, 16, 31, 'Sariful Islam', '', 'Mafizul Islam', '', '', 'Monoara Begum', '', '', '01723726028', '', 'Koiline', '', 'Koiline', '', 'Chandina', '', 'Cumilla', '', 'Lecturer ', '', '', 'No Index', '', '', '', 0, '0000-00-00', '', '', 'B+', '', '', '', '', '', '', '51a1c235292199ae2d263d81c1382472.jpg', '', 0, '', 1, 0, 0),
(176, '103.114.97.169', '2025', 6, 16, '250636016', 36, 16, 31, 'SHAFIQUE ULLAH RAJVI ', '', 'HABIB ULLAH RAJVI', '', '', 'BEGUM MAKSODA RAJVI', '', '', '+8801715995160', '', 'BOLORAMPUR', '', 'HALIMANAGAR', '', 'ADARSHA SHADOR', '', 'CUMILLA ', '', 'PHYSICAL EDUCATION TEACHER ', '', '', 'N56902331', '', '', '', 0, '0000-00-00', '', '', 'O+', '', '', '', '', '', '', '530a3c51ebe5df93d4125f6e9d2ee08e.jpg', '', 0, '', 1, 0, 0),
(177, '103.150.167.144', '2025', 6, 17, '250636017', 36, 16, 31, 'Tithi Datta', '', 'Kalidas Datta', '', '', 'Anamika Datta', '', '', '01739328603', '', 'West Darshana', '', 'Darshana Bazar', '', 'Kalkini', '', 'Madaripur', '', 'Library Lecturer ', '', '', '56901573', '', '', '', 0, '0000-00-00', '', '', 'O+', '', '', '', '', '', '', '9d997577946c819b365fdd56aadddb8b.jpg', '', 0, '', 1, 0, 0),
(178, '103.150.167.144', '2025', 6, 18, '250636018', 36, 16, 31, 'Md. Mahabubul alam', '', 'Md. Golam mustafa', '', '', 'Mst. Mamataz begum', '', '', '01635361566', '', 'Lonakanda', '', 'Barera', '', 'Chandina', '', 'Cumilla', '', 'Assistant Professor ', '', '', '3092538', '', '', '', 0, '0000-00-00', '', '', 'A+', '', '', '', '', '', '', 'b7e86fb980345f57ae241b40ccb2cbb4.jpg', '', 0, '', 1, 0, 0),
(179, '103.239.4.78', '2025', 6, 19, '250636019', 36, 16, 31, 'Rajib debnath ', '', 'Rymohon debnath ', '', '', 'Shekha Rani debnath ', '', '', '01923950131', '', 'Gosh gaon', '', 'Elahipur', '', 'Sadar South ', '', 'Comilla ', '', 'Assistant Professor ', '', '', '3091363', '', '', '', 0, '0000-00-00', '', '', 'O+', '', '', '', '', '', '', 'cb59965ff3c56933077d8f74fbafdfce.jpg', '', 0, '', 1, 0, 0),
(180, '202.134.11.253', '2025', 6, 20, '250636020', 36, 16, 31, 'FATIHA MOMTAZ FERDOUSI', '', 'MD ABDUL KALEQUE AZAD', '', '', 'ROKEYA BEGUM', '', '', '01816296754', '', 'MOGULTULI', '', ' CUMILLA ', '', 'ADARSHA SADAR', '', 'CUMILLA ', '', 'LECTURER', '', '', '3091360', '', '', '', 0, '0000-00-00', '', '', 'O+', '', '', '', '', '', '', '48c5ae7b3ce885c91acaa2c7f37a8877.jpg', '', 0, '', 1, 0, 0),
(183, '37.111.212.158', '2025', 6, 22, '250636022', 36, 16, 31, 'MOHAMMAD NURUN NABI', '', 'LATE MOHAMMAD ABDUL LATIF', '', '', 'ZAMINA KHATUN', '', '', '01673867662', '', 'MANIKSHAR', '', 'MUDAFORGONJ BAZAR - 3562', '', 'BARURA', '', 'CUMILLA', '', 'ASSISTANT PROFESSOR ', '', '', 'N - 3092537', '', '', '', 0, '0000-00-00', '', '', 'O+', '', '', '', '', '', '', '62b50da908d942a2d33c525c41cda326.png', '', 0, '', 1, 0, 0),
(184, '103.150.167.144', '2025', 6, 23, '250636023', 36, 16, 31, 'MOHAMMAD NURUN NABI', '', 'LATE MOHAMMAD ABDUL LATIF', '', '', 'ZAMINA KHATUN', '', '', '01673 867662', '', 'Manikshar', '', 'MudaforGonj Bazar - 3562', '', 'Barura', '', 'Cumilla', '', 'Assistant Professor ', '', '', 'N - 3092537', '', '', '', 0, '0000-00-00', '', '', 'O+', '', '', '', '', '', '', '82a0f46f34a2be4c6e48b1b0861c324d.png', '', 0, '', 1, 0, 0),
(186, '103.174.193.99', '2025', 9, 1, '250936001', 36, 17, 34, 'MD RASEL AHMED', '', 'JASIM UDDIN', '', '01836293097', 'SHAHINA AKTER', '', '', '01770408873', '', '', '', '', '', '', '', '', '', '', 'Managment ', '', '', '11', '257519', '6', 0, '0000-00-00', 'Male', '', 'A+', '', '', '', '', 'Kacishair/Debidwer /Comilla ', '', 'c2063319be3522e74669a52710ad056c.jpg', '', 0, '', 1, 0, 0),
(187, '103.239.42.212', '2025', 9, 2, '250936002', 36, 17, 34, 'MD ZAHIDUL ISLAM ', '', 'MD Nazrul Islam ', '', '01745795767', 'Mosammat Bilkis Akter ', '', '', '01819372283', '', '', '', '', '', '', '', '', '', '', 'Management ', '', '', '11', '257506 ', '6', 0, '0000-00-00', 'Male', '', 'B+', '', '', '', '', 'Village:Khaiyar, post: Subil-3531, Upazila: Debidwar ', '', 'f7019ea743650f201763556d34b2fddb.jpg', '', 0, '', 1, 0, 0),
(188, '43.255.23.48', '2025', 9, 3, '250936003', 36, 17, 34, 'MD. SAIDUL ISLAM', '', 'MD. NURUL ISLAM', '', '01981200095', 'MONOARA BEGUM', '', '', '01980277033', '', '', '', '', '', '', '', '', '', '', ' Management  ', '', '', '11', '257518', '6', 0, '0000-00-00', 'Male', '', 'O+', '', '', '', '', 'EALAHABAD, DEBIDWER, CUMILLA ', '', 'd3570b6474cf0829041ff99f0cc680ef.jpg', '', 0, '', 1, 0, 0),
(189, '103.214.202.111', '2025', 9, 4, '250936004', 36, 17, 34, 'Minhajul Abedin Meraj', '', 'Abdos Samad', '', '01837676648', 'MST. Rehena Akhter ', '', '', '01619115301', '', '', '', '', '', '', '', '', '', '', 'Management ', '', '', '11', '257514', '6', 0, '0000-00-00', 'Male', '', 'AB+', '', '', '', '', 'Vill:Ponora,P.O:Barera,\r\nP.S:Debidwer ', '', 'f90041345b1bcc418ea69ddbdb474c47.jpg', '', 0, '', 1, 0, 0),
(190, '59.153.103.213', '2025', 9, 5, '250936005', 36, 17, 34, 'Zihadul Islam ', '', 'Abdur Rahim', '', '01612871815', 'Khaleda Akhter ', '', '', '01306578941', '', '', '', '', '', '', '', '', '', '', 'Management ', '', '', '11', '257520', '6', 0, '0000-00-00', 'Male', '', 'O+', '', '', '', '', 'Elahabad,Debidwer, Cumilla ', '', 'b8a7fe05ab9484b188ef1d3d0a31736f.jpg', '', 0, '', 1, 0, 0),
(191, '103.109.59.132', '2025', 9, 6, '250936006', 36, 17, 34, 'Tirtha Chandra paul ', '', 'Sudir Chandra paul', '', '01774757152', 'Kajal rani paul ', '', '', '01774757152', '', '', '', '', '', '', '', '', '', '', 'Accounting ', '', '', '11', '257411', '6', 0, '0000-00-00', 'Male', '', 'O+', '', '', '', '', 'Ellashpur', '', '55fad0b0b212e12a38043ec52b402a6e.png', '', 0, '', 1, 0, 0),
(192, '45.125.221.204', '2025', 9, 7, '250936007', 36, 17, 34, 'SAMIR AHMMED RIYAD', '', 'SHAFIQUL ISLAM', '', '‎+966509438042‎', 'RASHADA AKTER ', '', '', '01823211772', '', '', '', '', '', '', '', '', '', '', ' ACCOUNTING', '', '', '11', '257409', '6', 0, '0000-00-00', 'Male', '', 'B+', '', '', '', '', 'Holding No. 12, Ramiz Kerani Para,\r\nMatiranga Thana,  Khagrachari,Bangladesh ', '', '', '', 0, '', 1, 0, 0),
(193, '58.145.187.219', '2025', 9, 8, '250936008', 36, 17, 34, 'Shamima Akter ', '', 'Jalal Hossain ', '', '01864715828', 'Fatema Akter', '', '', '01864715828', '', '', '', '', '', '', '', '', '', '', 'Management ', '', '', '11', '257524', '6', 0, '0000-00-00', 'Female', '', '', '', '', '', '', 'Paramtala', '', '2282d0283fa03c915de978ec18bd1a9a.jpeg', '', 0, '', 1, 0, 0),
(194, '58.145.187.219', '2025', 9, 9, '250936009', 36, 17, 34, 'Shamima Akter ', '', 'Jalal Hossain ', '', '01864715828', 'Fatema Akter', '', '', '01864715828', '', '', '', '', '', '', '', '', '', '', 'Management ', '', '', '11', '257524', '6', 0, '0000-00-00', 'Female', '', '', '', '', '', '', 'Paramtala', '', '224eab6d616e254ec361ae500fc912ca.jpeg', '', 0, '', 1, 0, 0),
(195, '58.145.187.206', '2025', 9, 10, '250936010', 36, 17, 34, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '0.png', '', 0, '', 1, 0, 0),
(196, '58.145.187.206', '2025', 9, 11, '250936011', 36, 17, 34, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '0.png', '', 0, '', 1, 0, 0),
(197, '37.111.211.233', '2025', 9, 12, '250936012', 36, 17, 34, 'MST RUMANA AKTER', '', 'GAZI BABUl', '', '01882554006', 'MST MORSHEDA BEGUM', '', '', '01614462419', '', '', '', '', '', '', '', '', '', '', 'MANAGEMENT', '', '', '11', '257517', '6', 0, '0000-00-00', 'Female', '', 'A+', '', '', '', '', 'CHOTASHALGHAR, \r\nBARASHALGHAR,\r\nDEBIDWAR,\r\nCUMILLA', '', '3c9fcc9a5a081b8eecd600d934605ab2.jpg', '', 0, '', 1, 0, 0),
(198, '58.145.187.204', '2025', 9, 13, '250936013', 36, 17, 34, 'Mosammad Afrin Akther ', '', 'Md. Ariful Islam', '', '01754295234', 'Opiya Akther ', '', '', '01821781271', '', '', '', '', '', '', '', '', '', '', 'Accounting ', '', '', '11', '257416', '6', 0, '0000-00-00', 'Female', '', 'O+', '', '', '', '', 'Home/holding: Borobari, Village: Nobipur, East Nobipur,Upozila/Thana:Debidwar ,, District:Cumilla.', '', '0.png', '', 0, '', 1, 0, 0),
(199, '58.145.187.131', '2025', 9, 14, '250936014', 36, 17, 34, 'Sumaiya akter ', '', 'Abdul Alim ', '', '01759447692', 'Hafeza Begum', '', '', 'O1759447692', '', '', '', '', '', '', '', '', '', '', 'Accounting ', '', '', '11', '19', '6', 0, '0000-00-00', 'Female', '', 'O+', '', '', '', '', 'BARASHALGHAR ', '', '0.png', '', 0, '', 1, 0, 0),
(200, '27.147.200.222', '2025', 9, 15, '250936015', 36, 17, 34, 'Afsana Sarker Mim', '', 'MD Alauddin ', '', '01821798679', 'Munni', '', '', '01530077896', '', '', '', '', '', '', '', '', '', '', 'Accounting ', '', '', '11', '257413', '6', 0, '0000-00-00', 'Female', '', 'A+', '', '', '', '', 'Siddheswari, Krishnapur, Muradanagar, Comilla', '', '0.png', '', 0, '', 1, 0, 0),
(201, '27.147.200.222', '2025', 9, 16, '250936016', 36, 17, 34, 'Afsana Sarker Mim', '', 'MD Alauddin ', '', '01821798679', 'Munni', '', '', '01530077896', '', '', '', '', '', '', '', '', '', '', 'Accounting ', '', '', '11', '257413', '6', 0, '0000-00-00', 'Female', '', 'A+', '', '', '', '', 'Siddheswari, Krishnapur, Muradanagar, Comilla', '', 'cdb980423d5696a9abd15088103aa540.jpg', '', 0, '', 1, 0, 0),
(202, '37.111.212.72', '2025', 9, 17, '250936017', 36, 17, 34, 'MD: SAKIB HASAN ', '', 'MD: SHAH ALAM', '', '01863472286', 'HALIMA BEGUM ', '', '', '01864397862', '', '', '', '', '', '', '', '', '', '', 'MANAGEMENT ', '', '', '11', '257502', '6', 0, '0000-00-00', 'Male', '', 'B+', '', '', '', '', 'FATEHABAD, DEBIDWAR, CUMLLA...', '', '0.png', '', 0, '', 1, 0, 0),
(203, '160.187.108.150', '2025', 9, 18, '250936018', 36, 17, 34, 'ONISHA SUTRADHAR ', '', 'MINTU CHANDRA SUTRADHAR ', '', '', 'SHIPRA SUTRADHAR ', '', '', '01732140576', '', '', '', '', '', '', '', '', '', '', 'MANAGEMENT ', '', '', '11', '257515', '6', 0, '0000-00-00', 'Female', '', 'A+', '', '', '', '', 'BARA ALAMPUR\r\nDEBIDWAR,CUMILLA', '', '3f94000d52ea4f2ea9f66a3ff92d9bb3.png', '', 0, '', 1, 0, 0),
(204, '37.111.213.58', '2025', 9, 19, '250936019', 36, 17, 34, 'MST RUMANA AKTER', '', 'GAZI BABUL', '', '01882554006', 'MST MORSHEDA BUGEM', '', '', '01614462419', '', '', '', '', '', '', '', '', '', '', 'MANAGEMENT', '', '', '11', '257517', '6', 0, '0000-00-00', 'Female', '', 'A+', '', '', '', '', 'CHOTASHALGHAR,BARASHALGHAR,DEBIDWAR, CUMILLA', '', '497aa4100045d1f72c595444ba7b7c57.jpg', '', 0, '', 1, 0, 0),
(205, '160.187.108.150', '2025', 9, 20, '250936020', 36, 17, 34, 'ONISHA SUTRADHAR ', '', 'MINTU CHANDRA SUTRADHAR ', '', '01779329556', 'SHIPRA SUTRADHAR ', '', '', '01732140576', '', '', '', '', '', '', '', '', '', '', 'MANAGEMENT ', '', '', '11', '257515', '6', 0, '0000-00-00', 'Female', '', 'A+', '', '', '', '', 'BARA ALAMPUR \r\nDEBIDWAR,CUMILLA ', '', 'a39704bafd962eef0a8cf2a9b95f92ae.jpg', '', 0, '', 1, 0, 0),
(206, '160.187.108.150', '2025', 9, 21, '250936021', 36, 17, 34, 'ONISHA SUTRADHAR ', '', 'MINTU CHANDRA SUTRADHAR ', '', '01779329556', 'SHIPRA SUTRADHAR ', '', '', '01732140576', '', '', '', '', '', '', '', '', '', '', 'MANAGEMENT ', '', '', '11', '257515', '6', 0, '0000-00-00', 'Female', '', 'A+', '', '', '', '', 'BARA ALAMPUR \r\nDEBIDWAR,CUMILLA ', '', '5e9d0cfe84139490409a95d3ff73bb27.jpg', '', 0, '', 1, 0, 0),
(207, '160.187.108.150', '2025', 9, 1, '2509001', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '0.png', '', 0, '', 1, 0, 0),
(208, '103.155.71.49', '2025', 9, 22, '250936022', 36, 17, 34, 'MD: Al Shahriar SarKar', '', 'MD: Anisur Rahman Anis', '', '01799420540', 'Asma khanom', '', '', '01820200259', '', '', '', '', '', '', '', '', '', '', 'Management ', '', '', '11', '257516', '6', 0, '0000-00-00', 'Male', '', 'O+', '', '', '', '', 'Village:khushghor\r\nPost:kurbanpur\r\nThana: banghora\r\nUpzilla:muradnagor\r\nZilla:comilla', '', '3051200113b2ec1a42525f5a7c8fd15e.jpg', '', 0, '', 1, 0, 0),
(209, '27.147.200.222', '2025', 9, 23, '250936023', 36, 17, 34, 'Most Morjina Akter', '', 'Md Nurul Islam', '', '01757377913', 'Most Somona Begum', '', '', '01877273850', '', '', '', '', '', '', '', '', '', '', 'Management ', '', '', '11', '257507', '6', 0, '0000-00-00', 'Female', '', 'B+', '', '', '', '', 'Paharpur, Muradnagar, Comilla ', '', 'cb8fa6fb268b5c1ea7beb2cf9ae326c8.jpeg', '', 0, '', 1, 0, 0),
(210, '103.70.171.73', '2025', 9, 24, '250936024', 36, 17, 34, 'Sweety Rani Sarkar', '', 'Prodip Chandra Sarkar ', '', '01932599438', 'Sajol Rani Sarkar', '', '', '01881745408', '', '', '', '', '', '', '', '', '', '', 'Management ', '', '', '11', '0257508', '6', 0, '0000-00-00', 'Female', '', 'A+', '', '', '', '', 'Village:Shiddshori\r\nPost:Krishnopur\r\nUpzilla:Muradnagar \r\nDistrict:Cumilla', '', '836136b56dedfe812f0ba107d69c4be3.jpg', '', 0, '', 1, 0, 0),
(211, '103.214.202.74', '2025', 9, 25, '250936025', 36, 17, 34, 'Israt Jahan Mitu ', '', 'Kamruzzaman ', '', '01954057784', 'Sabina Yasmin ', '', '', '01909511526', '', '', '', '', '', '', '', '', '', '', 'Accounting ', '', '', '11', '257403', '6', 0, '0000-00-00', 'Female', '', 'O+', '', '', '', '', 'Jaforgonj, Debidwer, Cumilla ', '', '538365b48236afb7069e86cff491e6aa.png', '', 0, '', 1, 0, 0),
(212, '43.255.20.42', '2025', 9, 26, '250936026', 36, 17, 34, 'MS. JANNATUL FERDOUSCE', '', 'MD. DULAL MEAH', '', '01819874143', 'MST. LACKY AKTER', '', '', '01989937090', '', '', '', '', '', '', '', '', '', '', 'Management ', '', '', '11', '257501', '6', 0, '0000-00-00', 'Female', '', 'O+', '', '', '', '', 'Joypur,Debidwer,Cumilla ', '', 'c1d70d1de4aff7bf52e0af72eca5340f.jpg', '', 0, '', 1, 0, 0),
(213, '58.145.187.211', '2025', 9, 27, '250936027', 36, 17, 34, 'Nadia Akter', '', 'MD.Monu Mia', '', '01639068880', 'Farida Begum ', '', '', '01640653285', '', '', '', '', '', '', '', '', '', '', 'Accounting ', '', '', '11', '257415', '6', 0, '0000-00-00', 'Female', '', 'A+', '', '', '', '', 'Ramchandrapur,\r\nMuradnagar, \r\nCumilla. ', '', '0e365d120b95f799cb5be94c36a3dfd8.jpg', '', 0, '', 1, 0, 0),
(214, '58.145.187.203', '2025', 9, 28, '250936028', 36, 17, 34, 'Mosammad Afrin Akther ', '', 'Md. Ariful Islam', '', '01754295434', 'Opiya Akther ', '', '', '01821781271', '', '', '', '', '', '', '', '', '', '', 'Accounting ', '', '', '11', '257416', '6', 0, '0000-00-00', 'Female', '', 'O+', '', '', '', '', 'Home/ holding: Borobari , Village: Nabipur;East Nabipur, post office: Nabipur, Debidwar,Cumilla', '', '0.png', '', 0, '', 1, 0, 0),
(215, '58.145.187.203', '2025', 9, 29, '250936029', 36, 17, 34, 'Mosammad Afrin Akther ', '', 'Md. Ariful Islam', '', '01754295434', 'Opiya Akther ', '', '', '01821781271', '', '', '', '', '', '', '', '', '', '', 'Accounting ', '', '', '11', '257416', '6', 0, '0000-00-00', 'Female', '', 'O+', '', '', '', '', 'Home/ holding: Borobari , Village: Nabipur;East Nabipur, post office: Nabipur, Debidwar,Cumilla', '', '205c2330713aa487fb4fae073c13a088.jpg', '', 0, '', 1, 0, 0),
(216, '103.146.16.205', '2025', 9, 2, '2509002', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '0.png', '', 0, '', 1, 0, 0),
(217, '103.146.17.223', '2025', 9, 30, '250936030', 36, 17, 34, 'MST.SUMAIYA ', '', 'MD.AL AMIN ', '', '01811569875', 'LAVLI ', '', '', '01725490879', '', '', '', '', '', '', '', '', '', '', 'ACCOUNTING ', '', '', '11', '257404', '6', 0, '0000-00-00', 'Female', '', 'B+', '', '', '', '', 'BALLAVDI,MURADNAGAR,COMILLA ', '', 'f25cd3335c9c2784643f43864def1c5c.jpg', '', 0, '', 1, 0, 0),
(218, '58.145.187.226', '2025', 9, 31, '250936031', 36, 17, 34, 'Hasan Mia', '', 'Shahalam Mia', '', '01821208533', 'Renuwara Begum ', '', '', '01751869128', '', '', '', '', '', '', '', '', '', '', 'Management ', '', '', '11', '257522', '6', 0, '0000-00-00', 'Male', '', 'O+', '', '', '', '', 'Village:Metonghar,post:Pandoghar,Thana:Bangora Bazar,upazila:Muradnaghar,District:Comilla.', '', 'b6e0116ce2908097204108b634fb4f10.jpg', '', 0, '', 1, 0, 0),
(219, '103.146.17.222', '2025', 9, 3, '2509003', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '0.png', '', 0, '', 1, 0, 0),
(220, '103.146.17.222', '2025', 9, 4, '2509004', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '0.png', '', 0, '', 1, 0, 0),
(221, '103.146.17.222', '2025', 9, 5, '2509005', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '0.png', '', 0, '', 1, 0, 0),
(222, '::1', '2025', 9, 32, '250936032', 36, 13, 35, 'Md Litan Sarkar', '', '', '', '', '', '', '', '01829107469', '', '', '', '', '', '', '', '', '', 'Deputy Director', '', '12583', '', '', '', '', 0, '0000-00-00', 'Male', '', 'B+', '', '', '', '', '', '', 'f9ad8600cba6412adfa5860ac4fc474b.JPG', '05837b463ff5f3659efa21f1eaba0690.png', 0, '', 1, 0, 0),
(223, '127.0.0.1', '2025', 9, 33, '250936033', 36, 13, 35, 'Md. Litan Sarkar', '', '', '', '', '', '', '', '01829107469', '', '', '', '', '', '', '', '', '', 'Sr. Deputy Director', '', '10292837', '', '', '', '', 0, '0000-00-00', 'Male', '', 'B+', '', '', 'Shovoki , Patrial , Delduar , Tangail -1900', '', '', '', '10f163161c3fc19777749fbb227457c0.JPG', '5683411fb75c9158e8916fa0c939e029.png', 0, '', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_last_design`
--

CREATE TABLE `users_last_design` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `date_code` year(4) NOT NULL,
  `month_code` float NOT NULL,
  `code_random` varchar(255) NOT NULL,
  `registration_no` varchar(255) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `org_fields_id` int(11) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) NOT NULL,
  `father_name_en` varchar(255) NOT NULL,
  `father_name_bn` varchar(255) NOT NULL,
  `father_mobile_no` varchar(100) NOT NULL,
  `mother_name_en` varchar(255) NOT NULL,
  `mother_name_bn` varchar(255) NOT NULL,
  `mother_mobile_no` varchar(100) NOT NULL,
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
  `signature` varchar(255) NOT NULL,
  `is_excel` int(11) NOT NULL,
  `file_name` varchar(300) NOT NULL,
  `is_active` int(11) NOT NULL,
  `create_user` int(11) NOT NULL,
  `create_date` int(11) NOT NULL,
  `expiry_date` int(11) NOT NULL,
  `signature_name` int(11) NOT NULL,
  `terms_&_conditions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_last_design`
--

INSERT INTO `users_last_design` (`id`, `ip_address`, `date_code`, `month_code`, `code_random`, `registration_no`, `agent_id`, `organization_id`, `org_fields_id`, `name_en`, `name_bn`, `father_name_en`, `father_name_bn`, `father_mobile_no`, `mother_name_en`, `mother_name_bn`, `mother_mobile_no`, `mobile_no`, `email`, `village_en`, `village_bn`, `post_office_en`, `post_office_bn`, `upazila_en`, `upazila_bn`, `zilla_en`, `zilla_bn`, `designation`, `department`, `employee_id`, `index_no`, `class`, `class_roll`, `sessions`, `sections`, `date_of_birth`, `gender`, `id_number`, `blood_group`, `marital_status`, `nationality`, `present_address_en`, `present_address_bn`, `permanent_address_en`, `permanent_address_bn`, `photo`, `signature`, `is_excel`, `file_name`, `is_active`, `create_user`, `create_date`, `expiry_date`, `signature_name`, `terms_&_conditions`) VALUES
(5, '', '0000', 0, '', '', 36, 0, 35, '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '1', '', '1', '', '', '', '', 0, 0, '', '', '1', '', '', '1', '', '', '', '', '1', 0, '', 1, 0, 0, 1, 1, 1),
(6, '', '0000', 0, '', '', 36, 0, 34, '0', '0', '1', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '1', 0, 0, '', '0', '1', '', '0', '0', '', '1', '', '', '0', 0, '', 0, 0, 0, 0, 0, 1),
(7, '', '0000', 0, '', '', 36, 0, 34, '0', '0', '1', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '1', 0, 0, '', '0', '1', '', '0', '0', '', '1', '', '', '0', 0, '', 0, 0, 0, 1, 1, 1),
(8, '', '0000', 0, '', '', 36, 0, 34, '0', '0', '1', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '1', 0, 0, '', '0', '1', '', '0', '0', '', '1', '', '', '0', 0, '', 0, 0, 0, 1, 1, 1),
(9, '', '0000', 0, '', '', 36, 0, 34, '0', '0', '1', '0', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '1', '1', '1', 0, 0, '', '0', '1', '', '0', '0', '', '1', '', '', '0', 0, '', 1, 0, 0, 1, 1, 1);

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
-- Indexes for table `users_last_design`
--
ALTER TABLE `users_last_design`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `auth_users_info`
--
ALTER TABLE `auth_users_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `card_design`
--
ALTER TABLE `card_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login_credential`
--
ALTER TABLE `login_credential`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `org_fields`
--
ALTER TABLE `org_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT for table `users_last_design`
--
ALTER TABLE `users_last_design`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
