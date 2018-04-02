-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 09:30 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flex`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sessions` int(11) NOT NULL,
  `topics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fees` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `duration`, `description`, `code`, `sessions`, `topics`, `fees`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Graphics Design', '3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'GD-09', 36, 'Adobe Photoshop, Adobe Illustrator, Coral Draw, Freelancing, Print Design', 8000, 'img/default.jpg', 1, '2017-09-02 09:39:45', '2017-09-02 09:39:45'),
(2, 'Web Application Development-PHP', '3', 'Session 1 : Basic BPHP', 'Web-dev-php', 36, 'Basic PHP, HTML, CSS, (Primary), Bootstrap(form, table), OOP, Primary Project, Final Project with Laravel', 12000, 'img/default.jpg', 1, '2017-09-08 22:22:56', '2017-09-08 22:22:56'),
(6, 'Web Design', '3', 'Course Topic Covered', 'Wev-dev', 36, 'HTML, CSS', 7000, 'img/courses/2017-09-25-01-17-13-81455c8c14d8de481793341d104526a8a77c710b.jpg', 1, '2017-09-25 20:17:13', '2017-09-25 20:17:13'),
(9, 'Microsoft Office', '1', 'Microsoft Word, \r\n- Typing Both Bengali & English\r\n- Alignment\r\n- Design & Document Setup\r\nMicrosoft Excel,\r\n- All operations\r\n- Formating Cell\r\n- Making Balance Sheet\r\n Microsoft Access, Microsoft Power Point', 'MS-SHORT', 16, 'Microsoft Word, Microsoft Excel, Microsoft Access, Microsoft Power Point', 3000, 'img/courses/2018-02-05-12-04-18-30b4fc34405d228747017c6bb2e60b099c5e6973.jpg', 1, '2018-02-05 06:04:18', '2018-02-05 06:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `designation`, `company`, `address`, `mobile`, `email`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Ajoy Sen', 'Managing Director', 'The Metro Lab', 'Patiya, Chittagong', '28349283', 'ajoysen@gmail.com', 'img/customers/2017-09-13-11-09-24-c6ad52093c7e92e09bb6dc1296afdf94ac87fdd6.jpg', 1, '2017-09-13 18:36:24', '2017-09-13 18:37:59'),
(2, 'Fatima Muna', 'Web Developer', 'Techno Sites', 'Dubai, UAE', '09488', 'technopay@live.com', 'img/default.jpg', 1, '2017-09-16 18:18:02', '2017-09-16 18:18:02'),
(3, 'Jay T', 'Web Developer', 'People Per Hour', 'A clients From People Per Hour. Web Design Job', NULL, NULL, 'img/default.jpg', 1, '2017-09-16 18:35:40', '2017-09-16 18:35:40'),
(4, 'Rana Bikram Sen', 'Manager', 'JD Associate', 'Rahmatgonj, Anderkillah, Chittagong', '01711823772', 'jd_associate@hotmail.com', 'img/default.jpg', 1, '2017-09-21 21:34:03', '2017-09-21 21:34:03'),
(5, 'Elise L.', 'Client', 'People Per Hour.com', 'Edinburgh, United Kingdom', NULL, NULL, 'img/default.jpg', 1, '2017-10-14 15:48:15', '2017-10-14 15:48:15'),
(6, 'Prodip Das', 'Executive', 'some', 'Azimpur, Patiya, Chittagong', NULL, 'prodipdas43@gmail.com', 'img/default.jpg', 1, '2017-12-30 05:52:52', '2017-12-30 05:52:52'),
(7, 'Rajib Das', 'Proprietor', 'Bayezid Bostami Laundry', 'Aturar Dipo, Punchlaish, Chittagong', NULL, NULL, 'img/default.jpg', 1, '2017-12-30 06:04:45', '2017-12-30 06:04:45'),
(8, 'Mr. Nazrul Islam', 'Director', 'WaterLily & Otograf', 'Chittagong, Bangladesh', '01815384969', 'nazrul@waterlily-apparels.com', 'img/default.jpg', 1, '2018-02-04 15:28:42', '2018-02-04 15:28:42'),
(9, 'Tetra Power', 'Owner', 'Tetra Power', 'A motor parts seller', '01911750176', 'tetrapower@rocketmail.com', 'img/default.jpg', 1, '2018-03-14 17:29:06', '2018-03-14 17:29:06'),
(10, 'Mithun Das', 'Dentist', 'Prime Dental Care & Cure', 'Hemshen Line, Cheragi Pahar, Chittagong', '01817691694', 'mithundasprime@gmail.com', 'img/default.jpg', 1, '2018-04-01 18:16:52', '2018-04-01 18:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `fathers_name`, `mothers_name`, `address`, `mobile`, `email`, `image`, `date_of_birth`, `nid`, `degree`, `created_at`, `updated_at`, `user_id`, `designation`) VALUES
(1, 'Ajit Das', 'Kajal Das', 'Doli Rani Das', 'Rakal Driver er Bari,\r\nVill- Azimpur, P.O- Alirhat,\r\nP.S- Patiya, Dist- Chittagong', '01779652777', 'ajitdas2900@gmail.com', 'img/employees/2017-09-12-01-42-41-f4fad0c82f598343d8aafcb002be138cd4ccb7ef.jpg', '1988-12-25', '1992151617', 'M.Sc in Mathematics', '2017-09-12 20:42:41', '2017-09-12 21:35:31', 1, 'CEO'),
(2, 'Abhi Das', 'Ajit Das', 'Doli Das', 'Vill- Joara, P.O- Joara,\r\nP.S- Chandanaish, Dist- Chittagong', '01859387218', 'dasabhi725@gmail.com', 'img/employees/2017-09-12-01-59-52-b549c3fb4f822b6b00ecde2fdb22af5609e328a3.jpg', '1998-07-25', '1998', 'H.S.C', '2017-09-12 20:59:52', '2017-09-12 20:59:52', 1, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `enrolements`
--

CREATE TABLE `enrolements` (
  `id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `payment` int(10) NOT NULL,
  `payment_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dues` int(10) NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrolements`
--

INSERT INTO `enrolements` (`id`, `qty`, `price`, `discount`, `comment`, `total`, `payment`, `payment_type`, `dues`, `student_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 1, 8000, 1000, 'Existed Student', 7000, 0, '', 0, 1, 1, '2017-09-10 21:08:24', '2017-09-10 22:52:15'),
(2, 1, 8000, 2000, 'Reference By Md. Abu Saleh', 6000, 5000, 'cash', 1000, 2, 1, '2017-11-23 05:15:44', '2018-02-25 17:10:44'),
(3, 1, 3000, 0, 'Refered By Shanta', 3000, 0, 'cash', 3000, 3, 9, '2018-02-06 04:48:17', '2018-02-06 04:48:17'),
(4, 1, 3000, 500, 'Referred By Shanto', 2500, 2000, 'cash', 500, 4, 9, '2018-02-08 15:17:18', '2018-02-10 16:39:28'),
(5, 1, 3000, 2000, 'Known to Ajit before', 1000, 500, 'cash', 500, 5, 9, '2018-03-19 16:29:12', '2018-03-19 16:47:58');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `payment_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dues` int(11) NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `expense_category_id` int(10) UNSIGNED NOT NULL,
  `loan_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `qty`, `description`, `unit_price`, `total`, `payment`, `payment_type`, `dues`, `employee_id`, `user_id`, `expense_category_id`, `loan_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Morning', 44, 44, 44, 'cash', 0, 1, 1, 1, 0, '2017-09-14 22:18:02', '2017-09-15 20:37:46'),
(2, 1, 'Mediplus Toothpaste', 85, 85, 85, 'cash', 0, 1, 1, 3, 0, '2017-09-15 06:34:46', '2017-09-15 21:17:30'),
(3, 1, 'Morning', 36, 36, 36, 'cash', 0, 2, 1, 1, 0, '2017-09-15 06:35:06', '2017-09-15 21:20:12'),
(4, 1, 'Attendence in court via Bkash', 410, 410, 410, 'bkash', 0, 1, 1, 2, 0, '2017-09-15 06:36:05', '2017-09-15 21:18:02'),
(5, 1, 'abhipersonal', 50, 50, 50, 'cash', 0, 2, 1, 3, 0, '2017-09-15 14:51:28', '2017-09-15 21:20:34'),
(6, 1, 'evening', 20, 20, 20, 'cash', 0, 2, 1, 1, 0, '2017-09-15 16:55:44', '2017-09-15 21:20:39'),
(7, 1, 'Morning & Evening', 68, 68, 68, 'cash', 0, 1, 1, 1, 0, '2017-09-16 18:08:46', '2017-09-16 18:08:46'),
(8, 1, 'Morning & Evening', 58, 58, 58, 'cash', 0, 1, 1, 1, 0, '2017-09-17 22:35:18', '2017-09-17 22:35:18'),
(9, 1, 'Morning', 48, 48, 48, 'cash', 0, 2, 1, 1, NULL, '2017-09-18 17:29:46', '2017-09-18 17:29:46'),
(10, 1, 'Fully Paid to Didi', 6960, 6960, 6960, 'cash', 0, 1, 1, 4, NULL, '2017-09-18 17:31:32', '2017-09-18 20:02:20'),
(11, 1, 'Towel', 150, 150, 150, 'cash', 0, 1, 1, 5, NULL, '2017-09-18 17:34:13', '2017-09-18 17:34:13'),
(15, 1, 'Weekly loan Payment', 800, 800, 800, 'bkash', 0, 1, 1, 6, 3, '2017-09-19 21:10:53', '2017-09-19 21:10:53'),
(16, 1, 'Laptop Dues to jakub', 5000, 5000, 5000, 'cash', 0, 1, 1, 6, 1, '2017-09-19 21:16:24', '2017-10-15 07:34:36'),
(17, 1, 'For case from Nayan', 500, 500, 500, 'cash', 0, 1, 1, 6, 5, '2017-09-19 21:19:47', '2017-10-05 11:51:15'),
(18, 1, 'Pay to bijoy Lend for Laptop Buying', 600, 600, 600, 'cash', 0, 1, 1, 6, 8, '2017-09-19 21:35:34', '2017-09-19 21:35:34'),
(19, 1, 'Given With Loan', 100, 100, 100, 'bkash', 0, 1, 1, 7, NULL, '2017-09-20 06:40:25', '2017-09-20 06:40:25'),
(20, 1, 'Evening', 38, 38, 38, 'cash', 0, 1, 1, 1, NULL, '2017-09-20 17:49:49', '2017-09-20 17:49:49'),
(21, 1, 'Morning & Evening + Transport 6', 57, 57, 51, 'cash', 6, 1, 1, 1, NULL, '2017-09-21 21:21:40', '2017-09-21 21:27:25'),
(22, 1, 'Pay to Biplav Dada with monthly savings', 5000, 5000, 5000, 'cash', 0, 1, 1, 6, 4, '2017-09-21 21:23:03', '2017-09-21 21:23:03'),
(23, 1, 'Monthly Interest', 700, 700, 700, 'cash', 0, 1, 1, 6, 2, '2017-09-21 21:24:22', '2017-09-21 21:24:22'),
(24, 1, 'Monthly Savings of September', 2000, 2000, 2000, 'cash', 0, 1, 1, 8, NULL, '2017-09-21 21:26:42', '2017-09-21 21:26:42'),
(25, 1, 'Morning', 36, 36, 36, 'cash', 0, 1, 1, 1, NULL, '2017-09-23 07:01:46', '2017-09-23 07:01:46'),
(26, 1, 'abhipersonal', 100, 100, 100, 'cash', 0, 2, 1, 3, NULL, '2017-09-23 19:59:46', '2017-09-23 19:59:46'),
(27, 1, 'Morning', 76, 76, 76, 'cash', 0, 1, 1, 1, NULL, '2017-09-23 20:12:22', '2017-09-23 20:12:22'),
(29, 1, 'Morning & Evening', 58, 58, 58, 'cash', 0, 1, 1, 1, NULL, '2017-09-24 18:00:30', '2017-09-24 18:00:30'),
(30, 1, 'Screw Driver Set', 110, 110, 110, 'cash', 0, 1, 1, 5, NULL, '2017-09-24 18:01:07', '2017-09-24 18:01:07'),
(31, 1, 'Lend for buying macbook', 1000, 1000, 1000, 'cash', 0, 1, 1, 6, 6, '2017-09-24 18:39:37', '2017-09-24 18:39:37'),
(33, 1, 'Lend for buying macbook', 1000, 1000, 1000, 'bkash', 0, 1, 1, 6, 10, '2017-09-26 17:41:02', '2017-09-26 17:41:02'),
(34, 1, 'Morning & Evening including tomorrow', 122, 122, 122, 'cash', 0, 1, 1, 1, NULL, '2017-09-26 17:45:05', '2017-09-26 18:00:15'),
(35, 1, 'Birthday Banner Gift for Son of Juntu Das', 150, 150, 150, 'cash', 0, 1, 1, 10, NULL, '2017-09-26 17:51:13', '2017-09-26 17:51:13'),
(36, 1, 'Customizing shirt', 110, 110, 110, 'cash', 0, 1, 1, 11, NULL, '2017-09-26 17:53:05', '2017-09-26 17:53:05'),
(37, 1, 'Loan payment to Grameen bank', 800, 800, 800, 'bkash', 0, 1, 1, 6, 3, '2017-09-26 17:58:49', '2017-09-26 17:58:49'),
(38, 1, 'Sent with Loan', 100, 100, 100, 'bkash', 0, 1, 1, 7, NULL, '2017-09-26 18:01:15', '2017-09-26 18:01:15'),
(39, 1, 'dress of mine', 490, 490, 490, 'cash', 0, 1, 1, 11, NULL, '2017-10-02 10:54:05', '2017-10-02 10:54:05'),
(40, 1, 'prodip', 5500, 5500, 5500, 'cash', 0, 1, 1, 3, NULL, '2017-10-02 10:55:04', '2017-10-02 10:55:18'),
(41, 1, 'abhipersonal', 200, 200, 200, 'cash', 0, 2, 1, 3, NULL, '2017-10-02 10:58:25', '2017-10-02 10:58:25'),
(42, 1, 'abhi dress up for durga puja', 170, 170, 170, 'cash', 0, 2, 1, 3, NULL, '2017-10-02 11:01:42', '2017-10-02 11:01:42'),
(43, 1, 'Durga puja dress up', 1080, 1080, 1080, 'cash', 0, 1, 1, 12, NULL, '2017-10-02 11:18:42', '2017-10-02 11:18:42'),
(44, 1, 'Morning snacks of 1 and 2 oct', 56, 56, 56, 'cash', 0, 1, 1, 1, NULL, '2017-10-02 11:38:27', '2017-10-02 11:38:27'),
(45, 1, 'Visit to Shamol House', 270, 270, 270, 'cash', 0, 1, 1, 10, NULL, '2017-10-02 11:51:32', '2017-10-02 11:51:32'),
(46, 1, 'Dashami visiting to Medhas Muni Ashram', 204, 204, 204, 'cash', 0, 1, 1, 3, NULL, '2017-10-02 11:58:25', '2017-10-02 11:58:25'),
(47, 1, 'transport of nabomi', 70, 70, 70, 'cash', 0, 1, 1, 3, NULL, '2017-10-02 12:22:41', '2017-10-02 12:22:41'),
(48, 1, 'cost of Moha Saptomi', 255, 255, 255, 'cash', 0, 1, 1, 3, NULL, '2017-10-03 12:08:13', '2017-10-03 12:08:13'),
(49, 1, 'costing of Moha Astami', 140, 140, 140, 'cash', 0, 1, 1, 3, NULL, '2017-10-03 12:12:04', '2017-10-03 12:12:04'),
(50, 1, 'Morning and Evening', 75, 75, 75, 'cash', 0, 1, 1, 1, NULL, '2017-10-03 20:09:13', '2017-10-03 20:09:13'),
(51, 1, 'Snacks of Morning  04 and 05 October', 142, 142, 142, 'cash', 0, 1, 1, 1, NULL, '2017-10-05 11:43:17', '2017-10-05 18:54:01'),
(52, 1, 'Transport for Prodip Lend from Pintu', 40, 40, 40, 'cash', 0, 2, 1, 3, NULL, '2017-10-05 11:44:13', '2017-10-05 11:44:13'),
(53, 1, 'transport for visiting Hanif Vai', 40, 40, 40, 'cash', 0, 1, 1, 3, NULL, '2017-10-06 16:06:42', '2017-10-06 16:06:42'),
(54, 1, 'Moring & Evening', 92, 92, 92, 'cash', 0, 1, 1, 1, NULL, '2017-10-07 15:46:51', '2017-10-13 16:39:21'),
(55, 1, 'Weekly Loan Payment to Grameen Bank', 500, 500, 500, 'bkash', 0, 1, 1, 6, 3, '2017-10-08 15:44:00', '2017-10-08 15:44:00'),
(56, 1, 'evening', 28, 28, 28, 'cash', 0, 1, 1, 1, NULL, '2017-10-08 15:44:55', '2017-10-08 15:44:55'),
(57, 1, 'Loan of this week Grameen Bank', 500, 500, 500, 'cash', 0, 1, 1, 6, 3, '2017-10-12 03:39:00', '2017-10-12 03:39:00'),
(58, 1, 'Morning and Evening Snacks', 70, 70, 70, 'cash', 0, 1, 1, 1, NULL, '2017-10-12 03:39:51', '2017-10-12 03:39:51'),
(59, 1, 'Loan to Grameen Bank', 800, 800, 800, 'cash', 0, 1, 1, 6, 3, '2017-10-13 14:20:58', '2017-10-21 16:09:03'),
(60, 1, 'Moring & Evening', 56, 56, 56, 'cash', 0, 1, 1, 1, NULL, '2017-10-13 14:22:07', '2017-10-13 14:22:07'),
(61, 1, 'Office Rent of September', 7000, 7000, 7000, 'cash', 0, 1, 1, 13, NULL, '2017-10-15 07:18:36', '2017-10-15 07:18:36'),
(62, 1, 'Previous Payment for Meal', 400, 400, 400, 'cash', 0, 1, 1, 4, NULL, '2017-10-15 07:19:52', '2017-10-15 07:19:52'),
(64, 1, 'Monthly payment until date 15/10/2017', 5650, 5650, 5650, 'cash', 0, 1, 1, 4, NULL, '2017-10-15 07:28:43', '2017-10-15 07:28:43'),
(65, 1, 'Internet Bill of October', 1200, 1200, 1200, 'cash', 0, 1, 1, 5, NULL, '2017-10-15 07:36:06', '2017-10-15 07:36:06'),
(66, 1, 'Morning', 44, 44, 44, 'cash', 0, 1, 1, 1, NULL, '2017-10-16 16:52:56', '2017-10-16 16:52:56'),
(67, 1, 'Rajib Fathers In law and mothers in law visiting my office', 275, 275, 275, 'cash', 0, 1, 1, 10, NULL, '2017-10-16 16:54:19', '2017-10-16 16:54:19'),
(68, 1, 'Morning and Evening', 110, 110, 110, 'cash', 0, 1, 1, 1, NULL, '2017-10-18 10:37:58', '2017-10-18 10:37:58'),
(69, 1, 'Partial Meal Payment for the month of October', 300, 300, 300, 'cash', 0, 1, 1, 4, NULL, '2017-10-18 10:38:52', '2017-10-18 10:38:52'),
(70, 1, 'Transport cost Kali Puja', 150, 150, 150, 'cash', 0, 1, 1, 3, NULL, '2017-10-21 16:04:46', '2017-10-21 16:04:46'),
(71, 1, 'Kali Puja Pronami', 1500, 1500, 1500, 'cash', 0, 1, 1, 3, NULL, '2017-10-21 16:05:25', '2017-10-21 16:05:25'),
(72, 1, 'Mothers Dress', 200, 200, 200, 'cash', 0, 1, 1, 12, NULL, '2017-10-21 16:06:19', '2017-10-21 16:06:19'),
(73, 1, 'Biscuits, fruits for Family', 200, 200, 200, 'cash', 0, 1, 1, 1, NULL, '2017-10-21 16:07:38', '2017-10-21 16:07:38'),
(74, 1, 'Moring & Evening', 67, 67, 67, 'cash', 0, 1, 1, 1, NULL, '2017-10-22 14:32:06', '2017-10-22 14:32:06'),
(75, 1, 'snacks', 60, 60, 60, 'cash', 0, 1, 1, 1, NULL, '2017-10-23 17:15:01', '2017-10-23 17:15:01'),
(76, 1, 'Weekly Loan', 600, 600, 600, 'cash', 0, 1, 1, 6, 3, '2017-10-23 17:15:35', '2017-10-23 17:15:35'),
(77, 1, 'Morning and Evening Snacks', 71, 71, 71, 'cash', 0, 1, 1, 1, NULL, '2017-10-24 20:35:12', '2017-10-24 20:35:12'),
(78, 1, 'Morning', 51, 51, 51, 'cash', 0, 1, 1, 3, NULL, '2017-10-28 04:45:29', '2017-10-28 04:45:29'),
(79, 1, 'Eye Hospital', 54, 54, 54, 'cash', 0, 1, 1, 3, NULL, '2017-10-28 04:46:29', '2017-10-28 04:46:29'),
(80, 1, '2 days Morning evening including ekadosi', 146, 146, 146, 'cash', 0, 1, 1, 1, NULL, '2017-10-31 15:18:14', '2017-10-31 15:18:14'),
(81, 1, 'Weekly Loan', 800, 800, 800, 'cash', 0, 1, 1, 6, 3, '2017-10-31 15:25:39', '2017-10-31 15:25:39'),
(82, 1, 'Electric Bill for Old 4 Phase Meter', 2752, 2752, 2752, 'cash', 0, 1, 1, 14, NULL, '2017-10-31 15:27:26', '2017-10-31 15:27:26'),
(83, 1, 'For visiting S. M. Tech Source', 36, 36, 36, 'cash', 0, 1, 1, 15, NULL, '2017-11-02 07:46:36', '2017-11-02 07:46:36'),
(84, 1, 'interview belancer', 1100, 1100, 1100, 'cash', 0, 1, 1, 15, NULL, '2017-11-05 06:54:12', '2017-11-05 06:54:12'),
(85, 1, 'Interview Belancer', 320, 320, 320, 'cash', 0, 1, 1, 1, NULL, '2017-11-05 07:00:44', '2017-11-05 07:00:44'),
(86, 1, 'Moring & Evening', 56, 56, 56, 'cash', 0, 1, 1, 1, NULL, '2017-11-06 16:00:27', '2017-11-06 16:00:27'),
(87, 1, 'Moring & Evening 2 days', 112, 112, 112, 'cash', 0, 1, 1, 1, NULL, '2017-11-08 13:31:24', '2017-11-08 13:31:24'),
(90, 1, 'October Office Rent', 7000, 7000, 7000, 'cash', 0, 1, 2, 13, NULL, '2017-11-10 06:38:51', '2017-11-10 06:39:02'),
(91, 1, 'November 2017', 1000, 1000, 1000, 'bkash', 0, 1, 2, 16, NULL, '2017-11-10 06:42:50', '2017-11-10 06:42:50'),
(92, 1, '3 weeks payment', 2000, 2000, 2000, 'cash', 0, 1, 1, 6, 3, '2017-11-13 17:49:31', '2017-11-13 17:50:12'),
(93, 1, 'All transports cost for visiting house and after the day', 143, 143, 143, 'cash', 0, 1, 1, 15, NULL, '2017-11-13 17:54:29', '2017-11-13 17:54:29'),
(94, 1, 'Laptop Power Cable Buy', 100, 100, 100, 'cash', 0, 1, 1, 5, NULL, '2017-11-18 18:23:41', '2017-11-18 18:23:41'),
(95, 1, 'Morning & Evening 2 days', 146, 146, 146, 'cash', 0, 1, 1, 1, NULL, '2017-11-18 18:45:23', '2017-11-18 18:45:23'),
(96, 1, 'Meal Cost for October- November', 7000, 7000, 7000, 'cash', 0, 1, 1, 4, NULL, '2017-11-20 18:04:49', '2017-11-20 18:04:49'),
(97, 1, '2 days', 45, 45, 45, 'cash', 0, 1, 1, 15, NULL, '2017-11-20 18:12:44', '2017-11-20 18:12:44'),
(98, 1, 'Morning & Evening 2 days', 63, 63, 63, 'cash', 0, 1, 1, 1, NULL, '2017-11-20 18:14:38', '2017-11-20 18:14:38'),
(99, 1, 'total 4 days for taking class at cu', 177, 177, 177, 'cash', 0, 1, 1, 15, NULL, '2017-11-25 15:41:34', '2017-11-25 15:41:34'),
(100, 1, '4 days meals at cu and snacks', 236, 236, 236, 'cash', 0, 1, 1, 1, NULL, '2017-11-25 15:43:32', '2017-11-25 15:43:32'),
(101, 1, 'Mouse for Abhi', 220, 220, 220, 'cash', 0, 1, 1, 5, NULL, '2017-11-25 15:44:02', '2017-11-25 15:44:02'),
(102, 1, 'For new spectacles', 200, 200, 200, 'cash', 0, 1, 1, 11, NULL, '2017-11-25 15:44:41', '2017-11-25 15:44:41'),
(103, 1, '4 days transport', 71, 71, 71, 'cash', 0, 1, 1, 15, NULL, '2017-11-29 19:03:29', '2017-11-29 19:03:29'),
(104, 1, '4 days meals at cu and snacks', 200, 200, 200, 'cash', 0, 1, 1, 1, NULL, '2017-11-29 19:08:01', '2017-11-29 19:08:01'),
(105, 1, '2 days Transport for CU', 106, 106, 106, 'cash', 0, 1, 1, 15, NULL, '2017-12-01 14:28:14', '2017-12-01 14:28:14'),
(106, 1, 'snacks 2 days', 66, 66, 66, 'cash', 0, 1, 1, 1, NULL, '2017-12-01 14:30:27', '2017-12-01 14:30:27'),
(107, 1, '5 days transport and snacks', 300, 300, 300, 'cash', 0, 1, 1, 15, NULL, '2017-12-06 06:38:10', '2017-12-06 06:38:10'),
(108, 1, 'Costing for previous 4 days till today both transaction and snacks', 444, 444, 444, 'cash', 0, 1, 1, 15, NULL, '2017-12-10 16:28:39', '2017-12-10 16:28:39'),
(109, 1, 'Loan Installment to Bijoy Bkas', 800, 800, 800, 'bkash', 0, 1, 1, 6, 3, '2017-12-10 16:29:25', '2017-12-10 16:29:25'),
(110, 1, 'Sent with Loan in Bijoy Bkas', 200, 200, 200, 'cash', 0, 1, 1, 7, NULL, '2017-12-10 16:30:02', '2017-12-10 16:30:02'),
(111, 1, 'November 2017', 7000, 7000, 7000, 'cash', 0, 1, 1, 13, NULL, '2017-12-21 16:34:11', '2017-12-21 16:34:11'),
(112, 1, 'Visit to Father in law house of Sibu Dada', 245, 245, 245, 'cash', 0, 1, 1, 10, NULL, '2017-12-21 16:36:36', '2017-12-21 16:36:36'),
(113, 1, 'Weekly loan december 2nd week', 800, 800, 800, 'bkash', 0, 1, 1, 6, 3, '2017-12-21 16:38:21', '2017-12-21 16:38:21'),
(114, 1, 'Visit to home and show my mother to doctor', 700, 700, 700, 'cash', 0, 1, 1, 7, NULL, '2017-12-21 16:39:21', '2017-12-21 16:39:21'),
(115, 1, 'Transport of 10 days', 206, 206, 206, 'cash', 0, 1, 1, 15, NULL, '2017-12-21 16:42:47', '2017-12-21 16:42:47'),
(116, 1, '3 days snacks', 114, 114, 114, 'cash', 0, 1, 1, 1, NULL, '2017-12-24 18:10:57', '2017-12-24 18:10:57'),
(117, 1, 'Transport of 3 days', 75, 75, 75, 'cash', 0, 1, 1, 15, NULL, '2017-12-24 19:29:55', '2017-12-24 19:29:55'),
(118, 1, 'Transport of 3 days', 110, 110, 110, 'cash', 0, 1, 1, 15, NULL, '2017-12-28 10:25:40', '2017-12-28 10:25:40'),
(119, 1, '3 days snacks', 188, 188, 188, 'cash', 0, 1, 1, 1, NULL, '2017-12-28 10:27:10', '2017-12-28 10:27:10'),
(120, 1, 'Snacks for CU student at Nasscam Exam', 365, 365, 365, 'cash', 0, 1, 1, 1, NULL, '2017-12-28 10:28:12', '2017-12-28 10:28:12'),
(121, 1, 'Internet Bill of December', 1000, 1000, 1000, 'cash', 0, 1, 1, 16, NULL, '2017-12-28 17:16:44', '2017-12-28 17:16:44'),
(122, 1, 'Pay to Didi in 28 Dec', 500, 500, 500, 'cash', 0, 1, 1, 4, NULL, '2017-12-30 04:59:04', '2017-12-30 04:59:04'),
(123, 1, 'For Mothers Treatment', 500, 500, 500, 'cash', 0, 1, 1, 7, NULL, '2017-12-30 04:59:45', '2017-12-30 04:59:45'),
(124, 1, 'October & November 2017', 4000, 4000, 4000, 'cash', 0, 1, 1, 8, NULL, '2017-12-30 05:04:34', '2017-12-30 05:04:34'),
(125, 1, 'Payment to didi for Meal till 20 Dec', 7200, 7200, 7200, 'cash', 0, 1, 1, 4, NULL, '2017-12-30 06:17:14', '2017-12-30 06:17:14'),
(126, 1, '3 days transport', 50, 50, 50, 'cash', 0, 1, 1, 15, NULL, '2018-01-02 04:27:00', '2018-01-02 04:27:00'),
(127, 1, '3 days snacks', 360, 360, 360, 'cash', 0, 1, 1, 1, NULL, '2018-01-02 04:28:16', '2018-01-02 04:28:16'),
(128, 1, 'Weekly loan january 1st week 2017', 800, 800, 800, 'cash', 0, 1, 1, 6, 3, '2018-01-02 04:31:25', '2018-01-02 04:31:25'),
(129, 1, 'For Mothers Treatment', 200, 200, 200, 'cash', 0, 1, 1, 7, NULL, '2018-01-02 04:31:52', '2018-01-02 04:31:52'),
(130, 1, '2 days Snacks', 112, 112, 112, 'cash', 0, 1, 1, 1, NULL, '2018-01-04 07:44:25', '2018-01-05 05:40:37'),
(131, 1, 'Snacks bill and dinner 6 days', 340, 340, 340, 'cash', 0, 1, 1, 1, NULL, '2018-01-10 16:40:38', '2018-01-10 16:40:38'),
(132, 1, 'Transport of 5 Days', 50, 50, 50, 'cash', 0, 1, 1, 15, NULL, '2018-01-10 16:56:30', '2018-01-10 16:56:30'),
(133, 1, 'January 2018', 1000, 1000, 1000, 'cash', 0, 1, 1, 16, NULL, '2018-01-14 19:27:32', '2018-01-14 19:27:32'),
(134, 1, '4 Months water Bills', 1200, 1200, 1200, 'cash', 0, 1, 1, 3, NULL, '2018-01-14 19:29:32', '2018-01-14 19:29:32'),
(135, 1, '4 Days Transport', 156, 156, 156, 'cash', 0, 1, 1, 15, NULL, '2018-01-19 18:48:55', '2018-01-19 18:48:55'),
(136, 1, 'Gift to Suman\'s Daughter', 130, 130, 130, 'cash', 0, 1, 1, 10, NULL, '2018-01-19 18:51:29', '2018-01-19 18:51:29'),
(137, 1, '3rd Week of January2018', 800, 800, 800, 'cash', 0, 1, 1, 6, 3, '2018-01-19 18:52:14', '2018-01-19 18:52:14'),
(138, 1, 'With 3rd Week loan of Grameen Bank', 200, 200, 200, 'cash', 0, 1, 1, 7, NULL, '2018-01-19 18:54:55', '2018-01-19 18:54:55'),
(139, 1, '4 days Snacks', 275, 275, 275, 'cash', 0, 1, 1, 1, NULL, '2018-01-19 19:06:38', '2018-01-19 19:06:38'),
(140, 1, 'snacks for avi', 400, 400, 400, 'cash', 0, 2, 1, 1, NULL, '2018-01-19 19:08:45', '2018-01-19 19:08:45'),
(141, 1, 'Rent Of December 2017', 7000, 7000, 7000, 'cash', 0, 1, 1, 13, NULL, '2018-01-19 19:12:18', '2018-01-19 19:12:18'),
(142, 1, 'SEP, OCT, NOV, DEC Electricity Bill', 7140, 7140, 7140, 'cash', 0, 1, 1, 14, NULL, '2018-01-21 16:11:49', '2018-01-21 16:11:49'),
(143, 1, 'Meal of December', 8000, 8000, 8000, 'cash', 0, 1, 1, 4, NULL, '2018-01-21 16:12:46', '2018-01-21 16:12:46'),
(144, 1, '3 days transport', 170, 170, 170, 'cash', 0, 1, 1, 15, NULL, '2018-01-24 16:23:27', '2018-01-24 16:23:27'),
(145, 1, 'December 2017 Link Foundation', 2000, 2000, 2000, 'cash', 0, 1, 1, 8, NULL, '2018-01-24 16:25:38', '2018-01-24 16:25:38'),
(146, 1, '5 Days Snacks Morning and evening', 330, 330, 330, 'cash', 0, 1, 1, 1, NULL, '2018-01-29 16:23:15', '2018-01-29 16:23:15'),
(147, 1, '5 days transport', 100, 100, 100, 'cash', 0, 1, 1, 15, NULL, '2018-01-29 16:37:45', '2018-01-29 16:37:45'),
(148, 1, 'Advance For Home Rent', 10000, 10000, 10000, 'cash', 0, 1, 1, 17, NULL, '2018-01-29 16:40:34', '2018-01-29 16:40:34'),
(149, 1, '6 days snacks both morning & evening', 300, 300, 300, 'cash', 0, 1, 1, 1, NULL, '2018-02-04 18:39:57', '2018-02-04 18:39:57'),
(150, 1, 'For First week of February 2018', 800, 800, 800, 'cash', 0, 1, 1, 6, 3, '2018-02-05 05:33:36', '2018-02-05 05:33:52'),
(151, 1, 'With Loan', 200, 200, 200, 'cash', 0, 1, 1, 7, NULL, '2018-02-05 05:36:34', '2018-02-05 05:36:34'),
(152, 1, '2nd Week of February 2018', 800, 800, 800, 'cash', 0, 1, 1, 6, 3, '2018-02-05 06:50:55', '2018-02-05 06:50:55'),
(153, 1, '4 days costing meal, shopping and accessories', 2236, 2236, 2236, 'cash', 0, 1, 1, 7, NULL, '2018-02-08 16:39:15', '2018-02-08 16:39:15'),
(154, 1, 'Past Meal of Didi', 600, 600, 600, 'cash', 0, 1, 1, 1, NULL, '2018-02-09 16:39:54', '2018-02-09 16:39:54'),
(155, 1, 'Grocery Items', 98, 98, 98, 'cash', 0, 1, 1, 7, NULL, '2018-02-09 16:40:43', '2018-02-09 16:40:43'),
(156, 1, 'Home Rent February', 2630, 2630, 2630, 'cash', 0, 1, 1, 17, NULL, '2018-02-10 17:08:29', '2018-02-10 17:08:29'),
(157, 1, 'For Daily needs', 250, 250, 250, 'cash', 0, 1, 1, 7, NULL, '2018-02-13 15:48:49', '2018-02-13 15:48:49'),
(158, 1, '2nd Week of February 2018', 800, 800, 800, 'cash', 0, 1, 1, 6, 3, '2018-02-13 16:26:03', '2018-02-13 16:26:03'),
(159, 1, 'Advance for Chandgaon Office', 2000, 2000, 2000, 'cash', 0, 1, 1, 5, NULL, '2018-02-17 06:39:24', '2018-02-17 06:39:24'),
(190, 1, '1st week of April 2018', 840, 840, 840, 'cash', 0, 1, 1, 6, 3, '2018-04-01 09:41:26', '2018-04-01 09:41:26'),
(191, 1, 'Transport and snacks for first day office at Chandgaon', 135, 135, 135, 'cash', 0, 1, 1, 15, NULL, '2018-04-01 11:47:50', '2018-04-01 11:47:50'),
(192, 1, 'Internet Line shifting Charge from Bahadderhat office to Chandgaon', 500, 500, 500, 'cash', 0, 1, 1, 16, NULL, '2018-04-01 11:49:01', '2018-04-01 11:49:01'),
(193, 1, 'For Office Lock, Dust Bean, Multiplug', 550, 550, 550, 'cash', 0, 1, 1, 5, NULL, '2018-04-01 11:51:37', '2018-04-01 11:51:37'),
(194, 1, 'For Changing Office from Bahadderhat to Chandgaon', 1245, 1245, 1245, 'cash', 0, 1, 1, 5, NULL, '2018-03-31 11:58:44', '2018-04-01 11:58:44'),
(195, 1, 'family refreshment & self', 102, 102, 102, 'cash', 0, 1, 1, 1, NULL, '2018-03-30 12:01:52', '2018-04-01 12:01:52'),
(196, 1, 'Home rent for month March', 4800, 4800, 4800, 'cash', 0, 1, 1, 17, NULL, '2018-03-09 19:07:56', '2018-04-01 19:07:56'),
(197, 1, 'Monthly savings of January & February', 4000, 4000, 4000, 'cash', 0, 1, 1, 8, NULL, '2018-03-10 19:11:52', '2018-04-01 19:11:52'),
(198, 1, 'Feb 2018', 1000, 1000, 1000, 'cash', 0, 1, 1, 16, NULL, '2018-02-09 19:14:17', '2018-04-01 19:14:17'),
(199, 1, 'March 2018', 1000, 1000, 1000, 'cash', 0, 1, 1, 16, NULL, '2018-03-09 19:15:27', '2018-04-01 19:15:27'),
(200, 1, 'Advance for Chandgaon Office', 50000, 50000, 50000, 'cash', 0, 1, 1, 5, NULL, '2018-03-03 19:23:07', '2018-04-01 19:23:07'),
(201, 1, 'Feb 2018', 820, 820, 820, 'cash', 0, 1, 1, 14, NULL, '2018-03-21 19:25:33', '2018-04-01 19:25:33'),
(202, 1, 'January 2018', 920, 920, 920, 'cash', 0, 1, 1, 14, NULL, '2018-02-22 19:26:22', '2018-04-01 19:26:22'),
(203, 1, 'Feb, March 2018 of Bahadderhat Office', 14000, 14000, 14000, 'cash', 0, 1, 1, 13, NULL, '2018-03-25 19:29:07', '2018-04-01 19:29:07');

-- --------------------------------------------------------

--
-- Table structure for table `expense_categories`
--

CREATE TABLE `expense_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expense_categories`
--

INSERT INTO `expense_categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'snacks', 'Includes all Breakfast\r\nSnacks\r\nEntertaining', '2017-09-14 21:27:38', '2017-09-14 21:27:38'),
(2, 'Court', 'Expenses for court thats are given for case handing both for lawyers and tonni.', '2017-09-14 21:39:30', '2017-09-14 21:39:30'),
(3, 'Others', 'All others costings', '2017-09-15 06:34:08', '2017-09-15 06:34:08'),
(4, 'Meal', 'All meals that are have in Sumi Didis house', '2017-09-18 17:30:41', '2017-09-18 17:30:41'),
(5, 'Office Accessories', 'All accessories Including towel, Headphone, Mouse', '2017-09-18 17:32:31', '2017-09-18 17:32:31'),
(6, 'Loan', 'All kinds of Loan', '2017-09-18 18:38:54', '2017-09-18 18:38:54'),
(7, 'Home Support', 'All the balance given for home costing', '2017-09-20 06:21:30', '2017-09-20 06:21:30'),
(8, 'Monthly Saving', 'Savings in Link Foundation\r\nAll money Given to Rana Bikram Sen Biplav', '2017-09-21 21:25:24', '2017-09-21 21:25:24'),
(9, 'Local Printing', 'All expenses for local printing', '2017-09-23 20:14:00', '2017-09-23 20:14:00'),
(10, 'Gift Relatives', 'All kinds of Gifts for relatives, friends and well wishers', '2017-09-26 17:48:30', '2017-09-26 17:48:30'),
(11, 'Self', 'All kinds of costing for myself ( Ajit Das)', '2017-09-26 17:52:19', '2017-09-26 17:52:19'),
(12, 'Family Dress', 'All dress up costing for my family', '2017-10-02 11:14:24', '2017-10-02 11:14:24'),
(13, 'Office Rent', 'Office rent for Flexible It & Design Solution', '2017-10-15 07:15:37', '2017-10-15 07:15:37'),
(14, 'Elec. Bill', 'Electricity Bill for Office', '2017-10-31 15:26:42', '2017-10-31 15:26:42'),
(15, 'transport', 'All kinds of transport cost', '2017-11-02 06:57:32', '2017-11-02 06:57:32'),
(16, 'Net Bill', 'Internet Bill of Office', '2017-11-10 06:40:46', '2017-11-10 06:40:46'),
(17, 'Home Rent', 'Rent Cost for Home', '2018-01-29 16:39:53', '2018-01-29 16:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `amount` decimal(12,2) NOT NULL,
  `payment` decimal(12,2) NOT NULL,
  `dues` decimal(12,2) NOT NULL,
  `payment_date` date NOT NULL,
  `due_date` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `interest` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `installment_qty` int(11) NOT NULL,
  `installment` int(11) NOT NULL,
  `total_amount` int(15) NOT NULL,
  `payment` int(15) NOT NULL,
  `expense_category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `name`, `amount`, `interest`, `payment_date`, `installment_qty`, `installment`, `total_amount`, `payment`, `expense_category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Jakub', 6500, 0, '2017-09-21', 0, 6500, 0, 0, 6, 1, '2017-09-18 15:53:48', '2017-09-19 21:16:24'),
(2, 'Link Foundation', 40000, 6, '2017-11-15', 5, 7067, 36800, 25600, 6, 1, '2017-09-18 16:17:15', '2018-03-02 19:04:54'),
(3, 'Grameen Bank', 30000, 10, '2018-03-20', 23, 971, 24810, 19390, 6, 1, '2017-09-18 16:18:04', '2018-04-01 15:41:26'),
(4, 'Rana Bikram Sen', 5000, 0, '2017-12-31', 0, 5000, 0, 0, 6, 1, '2017-09-18 16:33:08', '2017-09-21 21:23:03'),
(5, 'Nayan Das', 5500, 0, '2017-09-20', 0, 5500, 0, 0, 6, 1, '2017-09-18 16:36:17', '2017-09-19 21:19:47'),
(6, 'Munna', 1000, 0, '2017-09-22', 9, 100, 0, 0, 6, 1, '2017-09-18 16:53:23', '2017-09-24 18:39:36'),
(8, 'Bijoy Das', 600, 0, '2017-09-26', 0, 600, 0, 0, 6, 1, '2017-09-18 16:55:41', '2017-09-19 21:35:34'),
(9, 'Doli Das', 3000, 0, '2017-09-29', 1, 3000, 3000, 0, 6, 1, '2017-09-19 17:12:17', '2017-09-19 17:12:30'),
(10, 'Suvel Chowdhury', 1000, 0, '2017-09-25', 0, 1000, 0, 0, 6, 1, '2017-09-26 17:40:03', '2017-09-26 17:41:02'),
(11, 'Jakub Nath', 700, 0, '2017-10-15', 1, 700, 700, 700, 6, 1, '2017-10-15 07:44:11', '2018-01-24 17:07:58');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `created_at`, `updated_at`, `message`, `user_id`) VALUES
(1, '2017-10-24 07:24:35', '2017-10-24 07:24:35', 'Hello from Ajit', 1),
(2, '2017-10-24 12:39:45', '2017-10-24 12:39:45', 'ovi kn acos', 1),
(3, '2017-10-24 14:52:26', '2017-10-24 14:52:26', 'odo kn goror', 1),
(4, '2017-10-24 14:52:51', '2017-10-24 14:52:51', 'hi', 1),
(5, '2017-10-24 15:19:32', '2017-10-24 15:19:32', 'I am Abhi', 2),
(6, '2017-10-24 15:20:15', '2017-10-24 15:20:15', 'Themeforest project er psd design shes', 1),
(7, '2017-10-24 15:20:31', '2017-10-24 15:20:31', 'na..', 2),
(8, '2017-10-24 15:20:51', '2017-10-24 15:20:51', 'ami ekn knock dce j or jnnno banacci..', 2),
(9, '2017-10-24 15:21:10', '2017-10-24 15:21:10', 'ok', 1),
(10, '2017-10-24 16:18:35', '2017-10-24 16:18:35', 'hi avi', 1),
(11, '2017-10-24 16:23:09', '2017-10-24 16:23:09', '....', 2),
(12, '2017-10-24 16:23:53', '2017-10-24 16:23:53', 'How are you', 1),
(13, '2017-10-25 16:12:54', '2017-10-25 16:12:54', 'Hello abhi ajke wednesday', 1),
(14, '2017-10-25 16:20:40', '2017-10-25 16:20:40', 'yes', 2),
(15, '2017-10-25 16:20:51', '2017-10-25 16:20:51', 'tomorrow thursday', 2),
(16, '2017-10-25 16:35:33', '2017-10-25 16:35:33', 'hi', 2),
(17, '2017-10-26 16:06:44', '2017-10-26 16:06:44', 'tmi ki korco', 1),
(18, '2017-11-09 08:00:09', '2017-11-09 08:00:09', 'Ovi ki korteco', 1),
(19, '2017-11-15 08:28:45', '2017-11-15 08:28:45', 'Ovi ki koro', 1),
(20, '2017-12-23 15:57:33', '2017-12-23 15:57:33', 'hellow how are you', 2),
(21, '2017-12-23 15:58:45', '2017-12-23 15:58:45', 'I am fine', 1),
(22, '2018-01-10 05:29:46', '2018-01-10 05:29:46', 'Hellow', 1),
(23, '2018-01-23 08:01:31', '2018-01-23 08:01:31', 'hi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_22_164653_create_students_table', 1),
(4, '2017_07_23_003844_create_courses_table', 1),
(5, '2017_09_02_185120_create_enrolements_table', 2),
(6, '2017_09_11_034157_create_employees_table', 3),
(8, '2017_09_11_072007_create_order_cats_table', 3),
(9, '2017_09_10_164636_create_orders_table', 4),
(10, '2017_09_12_133007_add_user_id_to_employees', 5),
(11, '2017_09_12_134355_add_designation_to_employees', 6),
(13, '2017_09_11_042745_create_references_table', 8),
(14, '2017_09_13_094640_create_customers_table', 9),
(15, '2017_09_14_125832_create_expense_categories_table', 10),
(17, '2017_09_17_115933_create_loans_table', 12),
(18, '2017_10_05_005940_create_jobs_table', 13),
(19, '2017_10_23_215446_create_messages_table', 13),
(20, '2017_11_02_215339_create_tasks_table', 14),
(21, '2017_09_14_130258_create_expenses_table', 15),
(22, '2018_03_20_225455_create_invoices_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` int(11) NOT NULL,
  `total` int(15) NOT NULL,
  `discount` int(10) DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` int(11) NOT NULL,
  `dues` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `order_cat_id` int(10) UNSIGNED NOT NULL,
  `reference_id` int(10) UNSIGNED DEFAULT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `qty`, `description`, `unit_price`, `total`, `discount`, `type`, `payment`, `dues`, `user_id`, `order_cat_id`, `reference_id`, `employee_id`, `created_at`, `updated_at`, `customer_id`) VALUES
(1, 1, 'For Meal', 300, 300, 0, 'cash', 300, 0, 1, 3, NULL, 1, '2017-09-13 22:47:38', '2017-12-30 06:07:12', 6),
(2, 1, 'X-ray packet Delivery Charge', 300, 300, 0, 'cash', 300, 0, 1, 1, NULL, 2, '2017-09-14 18:25:19', '2017-09-14 19:12:33', 1),
(3, 1, 'For Meal', 200, 200, 0, 'cash', 200, 0, 1, 3, NULL, 1, '2017-09-14 21:16:41', '2017-12-30 05:58:58', 6),
(4, 1, 'Payment for 12 sep to 30 sep', 23986, 23986, 0, 'bank', 23986, 0, 1, 4, NULL, 1, '2017-09-16 18:19:24', '2017-09-16 18:23:59', 2),
(5, 1, 'A project of Webdesign from PPH completed by Abhi', 1700, 1700, 0, 'online', 1700, 0, 1, 5, NULL, 2, '2017-09-16 18:37:45', '2017-09-16 18:37:45', 3),
(6, 1, 'For Meal', 200, 200, 0, 'cash', 200, 0, 1, 3, NULL, 1, '2017-09-18 17:57:31', '2017-12-30 05:59:19', 6),
(7, 1, 'Sanjoy and Subal', 50, 50, 0, 'cash', 50, 0, 1, 6, NULL, 1, '2017-09-18 17:58:49', '2017-09-18 17:58:49', NULL),
(8, 2, 'For Meal', 200, 400, 0, 'cash', 400, 0, 1, 3, NULL, 1, '2017-09-19 21:22:59', '2017-12-30 06:02:57', 6),
(9, 1, 'For Meal', 300, 300, 0, 'cash', 300, 0, 1, 3, NULL, 1, '2017-09-19 21:38:33', '2017-12-30 06:05:07', 7),
(10, 1, 'Simple wordpress website jdassociate.net', 1000, 1000, 0, 'cash', 1000, 0, 1, 7, NULL, 1, '2017-09-21 21:35:07', '2017-09-21 21:35:07', 4),
(11, 1, 'Domain name jdassociate.net', 1000, 1000, 0, 'cash', 1000, 0, 1, 8, NULL, 1, '2017-09-21 21:35:49', '2017-09-21 21:35:49', 4),
(12, 1, 'For Meal', 300, 300, 0, 'cash', 300, 0, 1, 3, NULL, 1, '2017-09-24 18:02:02', '2017-12-30 06:05:41', 6),
(13, 1, 'Delivery cost', 200, 200, 0, 'cash', 200, 0, 1, 1, NULL, 2, '2017-09-25 13:05:17', '2017-09-25 13:05:17', 1),
(14, 1, 'Payment for Report Packed', 1500, 1500, 0, 'bkash', 1500, 0, 1, 1, NULL, 1, '2017-09-26 17:39:00', '2017-10-15 07:38:56', 1),
(15, 1, 'tution', 5000, 5000, 0, 'cash', 5000, 0, 1, 10, NULL, 1, '2017-10-02 10:52:18', '2017-11-23 05:26:12', NULL),
(16, 1, 'rubel', 160, 160, 0, 'cash', 160, 0, 1, 3, NULL, 1, '2017-10-03 11:59:45', '2017-10-03 11:59:45', NULL),
(17, 1, 'online application', 20, 20, 0, 'cash', 20, 0, 1, 6, NULL, 1, '2017-10-03 12:01:21', '2017-10-03 12:01:21', NULL),
(18, 1, 'For Meal', 200, 200, 0, 'cash', 200, 0, 1, 3, NULL, 1, '2017-10-07 19:25:20', '2017-12-30 06:06:13', 6),
(19, 1, 'For Meal', 3000, 3000, 0, 'cash', 3000, 0, 1, 3, NULL, 1, '2017-10-14 14:58:31', '2017-12-30 06:09:55', 6),
(20, 1, 'A work payment from People per hour', 4900, 4900, 0, 'online', 4900, 0, 1, 5, NULL, 1, '2017-10-14 15:49:56', '2017-10-14 15:49:56', 5),
(21, 1, 'For Meal', 530, 530, 0, 'cash', 530, 0, 1, 3, NULL, 1, '2017-10-23 17:16:15', '2017-12-30 06:10:54', 6),
(22, 1, 'For Meal', 200, 200, 0, 'cash', 200, 0, 1, 3, NULL, 1, '2017-10-28 04:42:36', '2017-12-30 06:11:36', 6),
(23, 1, 'For Meal', 400, 400, 0, 'cash', 400, 0, 1, 3, NULL, 1, '2017-10-28 04:43:28', '2017-12-30 06:12:00', 7),
(24, 1, 'abhis mother', 1000, 1000, 0, 'cash', 1000, 0, 1, 3, NULL, 1, '2017-10-28 04:44:01', '2017-10-28 04:44:01', NULL),
(25, 1, 'Get From DPS NGO Mamota', 3500, 3500, 0, 'cash', 3500, 0, 1, 10, NULL, 1, '2017-10-31 15:23:37', '2017-11-23 05:41:29', NULL),
(26, 1, 'Payoneer Referral Payment', 1500, 1500, 0, 'online', 1500, 0, 1, 9, NULL, 1, '2017-11-07 07:25:04', '2017-11-07 07:25:04', NULL),
(27, 1, 'tution', 5000, 5000, 0, 'cash', 5000, 0, 1, 10, NULL, 1, '2017-11-10 06:35:17', '2017-11-23 05:26:00', NULL),
(28, 1, 'For Meal', 300, 300, 0, 'cash', 300, 0, 1, 3, NULL, 1, '2017-11-18 18:42:35', '2017-12-30 06:13:42', 7),
(29, 1, 'For Meal', 8000, 8000, 0, 'cash', 8000, 0, 1, 3, NULL, 1, '2017-11-20 18:25:09', '2017-12-30 06:14:06', 6),
(30, 1, 'For Snacks', 400, 400, 0, 'cash', 400, 0, 1, 3, NULL, 1, '2017-12-01 14:43:48', '2017-12-30 06:14:55', 6),
(31, 1, 'Report Pad Printing 2000pcs', 1200, 1200, 0, 'cash', 1200, 0, 1, 1, NULL, 1, '2017-12-10 16:31:50', '2017-12-10 16:31:50', 1),
(32, 1, 'Report Packet Printing', 2000, 2000, 0, 'cash', 2000, 0, 1, 1, NULL, 2, '2017-12-21 16:32:10', '2017-12-21 16:32:10', 1),
(33, 1, 'Making Pretti for Rajib', 100, 100, 0, 'cash', 100, 0, 1, 1, NULL, 1, '2017-12-25 05:23:28', '2017-12-25 05:23:28', NULL),
(34, 1, 'Salary from LICT of NOv 17', 16600, 16600, 0, 'cash', 16600, 0, 1, 11, NULL, 1, '2017-12-30 05:01:49', '2017-12-30 05:02:43', NULL),
(35, 1, 'For Meal Payment of November', 5700, 5700, 0, 'cash', 5700, 0, 1, 3, NULL, 1, '2017-12-30 05:46:22', '2017-12-30 06:15:22', 6),
(36, 1, 'Payment from Upwork', 3000, 3000, 0, 'cash', 3000, 0, 1, 9, NULL, 1, '2018-01-14 15:41:28', '2018-01-14 15:41:28', NULL),
(37, 1, 'Tution', 2500, 2500, 0, 'cash', 2500, 0, 1, 10, NULL, 1, '2018-01-14 15:43:27', '2018-01-14 15:47:42', NULL),
(38, 1, 'Salary of December', 39200, 39200, 0, 'cash', 39200, 0, 1, 11, NULL, 1, '2018-01-14 15:44:36', '2018-01-14 15:44:36', NULL),
(39, 1, 'prodip for meal december', 5700, 5700, 0, 'cash', 5700, 0, 1, 3, NULL, 1, '2018-01-21 16:13:36', '2018-01-21 16:13:36', NULL),
(40, 1, '4 color x-ray packet 200pcs', 3500, 1000, 2500, 'cash', 1000, 0, 1, 1, NULL, 2, '2018-01-23 07:19:58', '2018-01-23 07:19:58', 1),
(41, 1, 'Prodip for Advance Home', 1000, 1000, 0, 'cash', 1000, 0, 1, 3, NULL, 1, '2018-01-29 16:42:20', '2018-01-29 16:42:20', NULL),
(42, 1, '1000 Pad of Dr.', 400, 400, 0, 'cash', 400, 0, 1, 1, NULL, 1, '2018-02-04 15:25:14', '2018-02-04 15:25:14', 1),
(43, 1, 'Buying waterlily-apparels.com', 1000, 200, 800, 'bkash', 200, 0, 1, 8, 2, 1, '2018-02-04 15:34:24', '2018-02-04 15:34:24', 8),
(44, 1, 'Local Clipping Path Job Done By Abhi', 450, 450, 0, 'cash', 450, 0, 1, 1, NULL, 2, '2018-02-17 06:40:19', '2018-02-17 06:40:19', NULL),
(45, 1, 'Kabir Securities webpage customization', 500, 500, 0, 'cash', 500, 0, 1, 1, NULL, 1, '2018-02-24 15:35:05', '2018-02-24 15:35:05', NULL),
(46, 1, 'Salary of January', 39200, 39200, 0, 'bank', 39200, 0, 1, 11, NULL, 1, '2018-02-26 19:01:25', '2018-03-02 19:09:10', NULL),
(47, 1, 'Tuition salary of January', 2500, 2500, 0, 'cash', 2500, 0, 1, 10, NULL, 1, '2018-02-26 19:02:23', '2018-02-26 19:02:23', NULL),
(48, 1, 'Printing of February Last', 3500, 3500, 0, 'cash', 3500, 0, 1, 1, NULL, 2, '2018-03-02 19:00:38', '2018-03-02 19:00:38', 1),
(49, 1, 'For design of Jakub Client', 300, 300, 0, 'cash', 300, 0, 1, 2, 3, 2, '2018-03-13 16:24:45', '2018-03-13 16:24:45', NULL),
(50, 1, 'For a inventory application', 20000, 15000, 5000, 'cash', 10000, 5000, 1, 6, 4, 1, '2018-03-14 17:30:18', '2018-03-29 16:10:42', 9),
(51, 1, 'Salary from LICT of Month February', 39200, 39200, 0, 'bank', 39200, 0, 1, 11, NULL, 1, '2018-03-25 19:23:41', '2018-03-25 19:23:41', NULL),
(52, 1, 'Tution salary', 2500, 2500, 0, 'cash', 2500, 0, 1, 10, NULL, 1, '2018-03-27 17:02:27', '2018-03-27 17:02:27', NULL),
(53, 1, 'For Selling Glass of Bahadderhat Office', 6500, 6500, 0, 'cash', 6000, 500, 1, 3, NULL, 1, '2018-03-29 16:21:13', '2018-03-29 16:21:13', NULL),
(54, 1, 'for Office Accessories sell', 2500, 2500, 0, 'cash', 2500, 0, 1, 3, NULL, 1, '2018-03-31 18:21:09', '2018-03-31 18:21:09', NULL),
(55, 1, 'for printing banner, leaflet, sticker and others', 1200, 1200, 0, 'bkash', 1200, 0, 1, 1, NULL, 1, '2018-03-31 18:19:07', '2018-04-01 18:19:07', 10);

-- --------------------------------------------------------

--
-- Table structure for table `order_cats`
--

CREATE TABLE `order_cats` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_cats`
--

INSERT INTO `order_cats` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Local Design', 'All designs includes', '2017-09-13 19:11:02', '2017-09-13 19:11:02'),
(2, 'Online Design', 'All designs from Online', '2017-09-13 19:12:33', '2017-09-13 19:12:33'),
(3, 'Others', 'Other or Miscellaneous', '2017-09-13 21:50:48', '2017-09-13 21:50:48'),
(4, 'Job UAE', 'All payments from Fatima Muna', '2017-09-16 18:14:07', '2017-09-16 18:14:07'),
(5, 'Online PPH', 'All online Payment From People Per hour', '2017-09-16 18:28:25', '2017-09-16 18:28:25'),
(6, 'Online Application', 'All online Application from local', '2017-09-18 17:58:14', '2017-09-18 17:58:14'),
(7, 'Local Website & Application', 'All kinds of Local Website Design & Development', '2017-09-21 21:29:42', '2017-09-21 21:29:42'),
(8, 'Domain', 'All kinds of Domain Sale', '2017-09-21 21:31:22', '2017-09-21 21:31:22'),
(9, 'Online', 'All kind of online others income', '2017-11-07 07:23:07', '2017-11-07 07:23:07'),
(10, 'Temporary', 'All incomes from tuition & others', '2017-11-23 05:25:10', '2017-11-23 05:25:10'),
(11, 'Local Job Salary', 'All salaries from Local Job', '2017-12-30 05:01:04', '2017-12-30 05:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE `references` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`id`, `name`, `fathers_name`, `mothers_name`, `address`, `mobile`, `email`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Piklu Biswas', 'Mintu Biswas', 'Mita Biswas', 'Bahadderhat, Chittagong', '98409385', 'piklu@gmail.com', 'img/references/2017-09-13-11-09-35-9e1978ff2baf4807e293c030a2c2848ddb0c7d6f.jpg', 1, '2017-09-13 18:00:35', '2017-09-13 18:12:45'),
(2, 'Rana Bikram Sen', 'Pulin Bihari Sen', 'Rama Sen', 'Muzafarabad, Patiya, Chittagong, Bangladesh', '01711823772', 'biplov@gmail.com', 'img/default.jpg', 1, '2018-02-04 15:32:51', '2018-02-04 15:32:51'),
(3, 'Jakub Nath', 'Some', 'Some', 'some about jakub nath', '01838979289', 'jakubnath@gmail.com', 'img/default.jpg', 1, '2018-03-13 16:23:57', '2018-03-13 16:23:57'),
(4, 'Nazrul Islam Zahid', 'some', 'some', 'Water Lily Garments', '01815384969', 'some@gmail.com', 'img/default.jpg', 1, '2018-03-14 17:27:09', '2018-03-14 17:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `fathers_name`, `mothers_name`, `email`, `address`, `date_of_birth`, `occupation`, `mobile`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Abhi Das', 'Ajit Das', 'Doli Das', 'dasabhi75@gmail.com', 'Joara, Chandanaish, Chittagong', '1998-07-25', 'Graphics Designer', '01859387218', 'img/students/2017-11-06-10-47-37-e0d7c707b47f28d61dad225bba73ec0c92588aa6.png', 1, '2017-09-02 09:31:17', '2017-11-06 16:47:37'),
(2, 'Nur Uddin', 'Abdul Karim', 'Rokeya Begum', 'nuruddinmunna222@gmail.com', 'South Burishchar, Hathazari, Chittagong', '1995-08-12', 'Teacher', '01788386475', 'img/default.jpg', 1, '2017-11-23 05:14:54', '2017-11-23 05:14:54'),
(3, 'Biplab Kanti Barua', 'Mridul Kanti Barua', 'Monju Rani Barua', 'bkbarua90@gmail.com', '2 No, Gate, Green Valey,\r\nShapla Bhavan, Panchlaish, Chittagong', '1990-02-12', 'Unemployed', '01814939700', 'img/default.jpg', 1, '2018-02-06 04:47:08', '2018-02-06 04:47:08'),
(4, 'Md. Ekram', 'Md. Ismail', 'Shamsun Nahar', 'ekram@gmail.com', 'Fazil Khar Hat, Vill- Daulatpur, P.O : Fazil Khar Hat, Patiya, Chittagong', '1989-10-15', 'Bank Officer', '01821780392', 'img/default.jpg', 1, '2018-02-08 07:34:08', '2018-02-08 07:34:08'),
(5, 'Md. Arafat Uddin Chowdhury', 'Md. Jashim Uddin', 's', 'amirarafat237@gmail.com', 'Kalarpool, Bahadderhat, Chandgaon, Chittagong', '1996-08-20', 'Student', '01832153920', 'img/default.jpg', 1, '2018-03-19 16:26:35', '2018-03-19 16:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_id` int(11) NOT NULL,
  `due_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `description`, `status`, `employee_id`, `due_date`, `created_at`, `updated_at`) VALUES
(1, 'Complete index page of Photography Template of Design Rockers', 'Completing Footer and responsive ness', 'completed', 1, '2017-11-07', '2017-11-05 18:14:30', '2017-11-08 13:23:43'),
(2, 'portfolio building', 'full portfolio ready...', 'completed', 2, '2017-11-07', '2017-11-05 20:12:02', '2017-11-09 07:58:27'),
(3, 'Making a post in Shareideas.info', 'Making a post in shareideas.info. Search a topic that can make it viral.', 'completed', 2, '2018-03-11', '2017-11-07 14:03:41', '2018-03-11 17:21:47'),
(4, 'Making Database design for room rent website', 'Make a database design for Room Rent Website. Modules are\r\n\r\nuser type : i) admin\r\n                     ii) Rental/poster\r\n\r\nRenter/Poster : Can Create a post for his rent. a) Location b) rental price c) Room Qty d) Facilities', 'completed', 1, '2017-11-08', '2017-11-07 14:11:05', '2017-11-30 05:25:39'),
(5, 'Making Blog page for Photography Template', 'Making Blog Page According TO Ovi\'s Design', 'completed', 1, '2017-11-09', '2017-11-08 13:24:38', '2017-12-28 17:14:41'),
(6, 'Redesign Flexibleit.net with laravel', 'Making a nice Design\r\nMaking a nice integration of Payment \r\nAnyone Can order a service', 'completed', 1, '2018-01-02', '2017-11-08 20:16:24', '2018-01-02 04:33:35'),
(7, 'Integrate Instant article with shareideas.ino', 'Integrate Instant article with shareideas.info\r\nSubmit 10 articles for review', 'completed', 1, '2017-11-09', '2017-11-08 20:31:11', '2017-11-08 20:31:23'),
(8, 'Making design for Bangla rent', 'Making Homepage design\r\nProperty list page design\r\nCreate Property\r\nSearch Page Design\r\nProperty Owner Page Design\r\nProperty Renter Page Design', 'pending', 2, '2018-01-10', '2017-11-15 08:28:03', '2018-01-05 05:49:13'),
(9, 'Make Ui of Ict School', 'some description', 'completed', 2, '2017-12-23', '2017-12-23 15:53:13', '2017-12-23 15:57:02'),
(10, 'Complete the wordpress task of upwork', 'Making a design according his example\r\nIntegrate paypal,\r\nChatbox \r\nIntegrate social media', 'completed', 1, '2018-01-03', '2018-01-02 04:36:09', '2018-03-11 17:22:12'),
(11, 'Update data and portfolio in flexibleit', 'Update all portfolios\r\nUpdate Contact Form\r\nUpdate Team\r\nUpdate Others heading and subheading\r\nupdate social links', 'pending', 1, '2018-01-05', '2018-01-04 07:46:53', '2018-01-05 05:42:13'),
(12, 'Update Dropbox of LICT', 'All related Documents including \r\nAttendence\r\nTQR\r\nOverview\r\nAssesment', 'pending', 1, '2018-01-05', '2018-01-05 05:43:59', '2018-01-05 05:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@flexibleit.net', '$2y$10$bvWHxVtQq8XOHLFM//q/tux9ZZbLfq6mq1oMlkx48yPNNUads6Ja.', 'XL14z2Ltc8faMQeearlLkFj7EUMROZlzibqFz9kMOgzHdGOkeyWt3d8Q5Vyt', '2017-09-02 09:27:17', '2017-09-02 09:27:17'),
(2, 'Abhi Das', 'dasabhi725@gmail.com', '$2y$10$7uO5LQG.pgr4Q09iZ3Z.puuT4kingQjU0wHT2OCwbnal5GdT/oJJ6', NULL, '2017-10-24 15:19:07', '2017-10-24 15:19:07'),
(3, 'Shaon Mohajon', 'abcd@gmail.com', '$2y$10$r4uzak3jATgKalqyPYWkZe/xvqY3ikBDALTF2AJSg54ogyNZPPsiy', NULL, '2018-03-25 13:56:48', '2018-03-25 13:56:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_user_id_foreign` (`user_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_user_id_foreign` (`user_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_user_id_foreign` (`user_id`);

--
-- Indexes for table `enrolements`
--
ALTER TABLE `enrolements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enrolements_student_id_foreign` (`student_id`),
  ADD KEY `enrolements_course_id_foreign` (`course_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expenses_employee_id_foreign` (`employee_id`),
  ADD KEY `expenses_user_id_foreign` (`user_id`),
  ADD KEY `expenses_expense_category_id_foreign` (`expense_category_id`),
  ADD KEY `loan_id` (`loan_id`);

--
-- Indexes for table `expense_categories`
--
ALTER TABLE `expense_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `expense_categories_name_unique` (`name`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `expense_category_id` (`expense_category_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_order_cat_id_foreign` (`order_cat_id`),
  ADD KEY `orders_reference_id_foreign` (`reference_id`),
  ADD KEY `orders_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `order_cats`
--
ALTER TABLE `order_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`),
  ADD KEY `references_user_id_foreign` (`user_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_user_id_foreign` (`user_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enrolements`
--
ALTER TABLE `enrolements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `order_cats`
--
ALTER TABLE `order_cats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `enrolements`
--
ALTER TABLE `enrolements`
  ADD CONSTRAINT `enrolements_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `enrolements_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `expenses_expense_category_id_foreign` FOREIGN KEY (`expense_category_id`) REFERENCES `expense_categories` (`id`),
  ADD CONSTRAINT `expenses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `orders_order_cat_id_foreign` FOREIGN KEY (`order_cat_id`) REFERENCES `order_cats` (`id`),
  ADD CONSTRAINT `orders_reference_id_foreign` FOREIGN KEY (`reference_id`) REFERENCES `references` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `references`
--
ALTER TABLE `references`
  ADD CONSTRAINT `references_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
