-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 06:35 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

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
(6, 'Web Design', '3', 'Course Topic Covered', 'Wev-dev', 36, 'HTML, CSS', 7000, 'img/courses/2017-09-25-01-17-13-81455c8c14d8de481793341d104526a8a77c710b.jpg', 1, '2017-09-25 20:17:13', '2017-09-25 20:17:13');

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
(5, 'Elise L.', 'Client', 'People Per Hour.com', 'Edinburgh, United Kingdom', NULL, NULL, 'img/default.jpg', 1, '2017-10-14 15:48:15', '2017-10-14 15:48:15');

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
(1, 1, 8000, 1000, 'Existed Student', 7000, 0, '', 0, 1, 1, '2017-09-10 21:08:24', '2017-09-10 22:52:15');

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
(91, 1, 'November 2017', 1000, 1000, 1000, 'bkash', 0, 1, 2, 16, NULL, '2017-11-10 06:42:50', '2017-11-10 06:42:50');

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
(16, 'Net Bill', 'Internet Bill of Office', '2017-11-10 06:40:46', '2017-11-10 06:40:46');

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
  `expense_category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `name`, `amount`, `interest`, `payment_date`, `installment_qty`, `installment`, `total_amount`, `expense_category_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Jakub', 6500, 0, '2017-09-21', 0, 6500, 0, 6, 1, '2017-09-18 15:53:48', '2017-09-19 21:16:24'),
(2, 'Link Foundation', 35000, 6, '2017-11-15', 6, 5300, 36400, 6, 1, '2017-09-18 16:17:15', '2017-09-21 21:24:22'),
(3, 'Grameen Bank', 30000, 10, '2018-03-20', 39, 717, 28500, 6, 1, '2017-09-18 16:18:04', '2017-10-31 15:25:39'),
(4, 'Rana Bikram Sen', 5000, 0, '2017-12-31', 0, 5000, 0, 6, 1, '2017-09-18 16:33:08', '2017-09-21 21:23:03'),
(5, 'Nayan Das', 5500, 0, '2017-09-20', 0, 5500, 0, 6, 1, '2017-09-18 16:36:17', '2017-09-19 21:19:47'),
(6, 'Munna', 1000, 0, '2017-09-22', 9, 100, 0, 6, 1, '2017-09-18 16:53:23', '2017-09-24 18:39:36'),
(7, 'Ovi Das', 2000, 0, '2017-09-22', 1, 2000, 2000, 6, 1, '2017-09-18 16:53:53', '2017-09-18 22:26:54'),
(8, 'Bijoy Das', 600, 0, '2017-09-26', 0, 600, 0, 6, 1, '2017-09-18 16:55:41', '2017-09-19 21:35:34'),
(9, 'Doli Das', 3000, 0, '2017-09-29', 1, 3000, 3000, 6, 1, '2017-09-19 17:12:17', '2017-09-19 17:12:30'),
(10, 'Suvel Chowdhury', 1000, 0, '2017-09-25', 0, 1000, 0, 6, 1, '2017-09-26 17:40:03', '2017-09-26 17:41:02'),
(11, 'Jakub Nath', 2200, 0, '2017-10-15', 1, 2200, 2200, 6, 1, '2017-10-15 07:44:11', '2017-10-31 15:24:37');

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
(18, '2017-11-09 08:00:09', '2017-11-09 08:00:09', 'Ovi ki korteco', 1);

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
(16, '2017_09_14_130258_create_expenses_table', 11),
(17, '2017_09_17_115933_create_loans_table', 12),
(18, '2017_10_05_005940_create_jobs_table', 13),
(19, '2017_10_23_215446_create_messages_table', 13),
(20, '2017_11_02_215339_create_tasks_table', 14);

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
(1, 1, 'prodip', 300, 300, 0, 'cash', 300, 0, 1, 3, 1, 1, '2017-09-13 22:47:38', '2017-09-14 19:01:54', 1),
(2, 1, 'X-ray packet Delivery Charge', 300, 300, 0, 'cash', 300, 0, 1, 1, NULL, 2, '2017-09-14 18:25:19', '2017-09-14 19:12:33', 1),
(3, 1, 'prodip', 200, 200, 0, 'cash', 200, 0, 1, 3, NULL, 1, '2017-09-14 21:16:41', '2017-09-14 21:16:41', NULL),
(4, 1, 'Payment for 12 sep to 30 sep', 23986, 23986, 0, 'bank', 23986, 0, 1, 4, NULL, 1, '2017-09-16 18:19:24', '2017-09-16 18:23:59', 2),
(5, 1, 'A project of Webdesign from PPH completed by Abhi', 1700, 1700, 0, 'online', 1700, 0, 1, 5, NULL, 2, '2017-09-16 18:37:45', '2017-09-16 18:37:45', 3),
(6, 1, 'prodip', 200, 200, 0, 'cash', 200, 0, 1, 3, NULL, 1, '2017-09-18 17:57:31', '2017-09-18 17:57:31', NULL),
(7, 1, 'Sanjoy and Subal', 50, 50, 0, 'cash', 50, 0, 1, 6, NULL, 1, '2017-09-18 17:58:49', '2017-09-18 17:58:49', NULL),
(8, 2, 'prodip', 200, 400, 0, 'cash', 400, 0, 1, 3, NULL, 1, '2017-09-19 21:22:59', '2017-09-19 21:37:49', NULL),
(9, 1, 'rajib', 300, 300, 0, 'cash', 300, 0, 1, 3, NULL, 1, '2017-09-19 21:38:33', '2017-09-19 21:38:33', NULL),
(10, 1, 'Simple wordpress website jdassociate.net', 1000, 1000, 0, 'cash', 1000, 0, 1, 7, NULL, 1, '2017-09-21 21:35:07', '2017-09-21 21:35:07', 4),
(11, 1, 'Domain name jdassociate.net', 1000, 1000, 0, 'cash', 1000, 0, 1, 8, NULL, 1, '2017-09-21 21:35:49', '2017-09-21 21:35:49', 4),
(12, 1, 'prodip', 300, 300, 0, 'cash', 300, 0, 1, 3, NULL, 1, '2017-09-24 18:02:02', '2017-09-24 18:02:02', NULL),
(13, 1, 'Delivery cost', 200, 200, 0, 'cash', 200, 0, 1, 1, NULL, 2, '2017-09-25 13:05:17', '2017-09-25 13:05:17', 1),
(14, 1, 'Payment for Report Packed', 1500, 1500, 0, 'bkash', 1500, 0, 1, 1, NULL, 1, '2017-09-26 17:39:00', '2017-10-15 07:38:56', 1),
(15, 1, 'tution', 5000, 5000, 0, 'cash', 5000, 0, 1, 3, NULL, 1, '2017-10-02 10:52:18', '2017-10-02 10:52:18', NULL),
(16, 1, 'rubel', 160, 160, 0, 'cash', 160, 0, 1, 3, NULL, 1, '2017-10-03 11:59:45', '2017-10-03 11:59:45', NULL),
(17, 1, 'online application', 20, 20, 0, 'cash', 20, 0, 1, 6, NULL, 1, '2017-10-03 12:01:21', '2017-10-03 12:01:21', NULL),
(18, 1, 'prodip', 200, 200, 0, 'cash', 200, 0, 1, 3, NULL, 1, '2017-10-07 19:25:20', '2017-10-07 19:25:20', NULL),
(19, 1, 'prodip', 3000, 3000, 0, 'cash', 3000, 0, 1, 3, NULL, 1, '2017-10-14 14:58:31', '2017-10-14 14:58:31', NULL),
(20, 1, 'A work payment from People per hour', 4900, 4900, 0, 'online', 4900, 0, 1, 5, NULL, 1, '2017-10-14 15:49:56', '2017-10-14 15:49:56', 5),
(21, 1, 'prodip', 530, 530, 0, 'cash', 530, 0, 1, 3, NULL, 1, '2017-10-23 17:16:15', '2017-10-23 17:16:15', NULL),
(22, 1, 'prodip', 200, 200, 0, 'cash', 200, 0, 1, 3, NULL, 1, '2017-10-28 04:42:36', '2017-10-28 04:42:36', NULL),
(23, 1, 'rajib', 400, 400, 0, 'cash', 400, 0, 1, 3, NULL, 1, '2017-10-28 04:43:28', '2017-10-28 04:43:28', NULL),
(24, 1, 'abhis mother', 1000, 1000, 0, 'cash', 1000, 0, 1, 3, NULL, 1, '2017-10-28 04:44:01', '2017-10-28 04:44:01', NULL),
(25, 1, 'Get From DPS NGO Mamota', 3500, 3500, 0, 'cash', 3500, 0, 1, 3, NULL, 1, '2017-10-31 15:23:37', '2017-10-31 15:23:37', NULL),
(26, 1, 'Payoneer Referral Payment', 1500, 1500, 0, 'online', 1500, 0, 1, 9, NULL, 1, '2017-11-07 07:25:04', '2017-11-07 07:25:04', NULL),
(27, 1, 'tution', 5000, 5000, 0, 'cash', 5000, 0, 2, 3, NULL, 1, '2017-11-10 06:35:17', '2017-11-10 06:35:17', NULL);

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
(9, 'Online', 'All kind of online others income', '2017-11-07 07:23:07', '2017-11-07 07:23:07');

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
(1, 'Piklu Biswas', 'Mintu Biswas', 'Mita Biswas', 'Bahadderhat, Chittagong', '98409385', 'piklu@gmail.com', 'img/references/2017-09-13-11-09-35-9e1978ff2baf4807e293c030a2c2848ddb0c7d6f.jpg', 1, '2017-09-13 18:00:35', '2017-09-13 18:12:45');

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
(1, 'Abhi Das', 'Ajit Das', 'Doli Das', 'dasabhi75@gmail.com', 'Joara, Chandanaish, Chittagong', '1998-07-25', 'Graphics Designer', '01859387218', 'img/students/2017-11-06-10-47-37-e0d7c707b47f28d61dad225bba73ec0c92588aa6.png', 1, '2017-09-02 09:31:17', '2017-11-06 16:47:37');

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
(3, 'Making a post in Shareideas.info', 'Making a post in shareideas.info. Search a topic that can make it viral.', 'pending', 2, '2017-11-08', '2017-11-07 14:03:41', '2017-11-07 14:03:41'),
(4, 'Making Database design for room rent website', 'Make a database design for Room Rent Website. Modules are\r\n\r\nuser type : i) admin\r\n                     ii) Rental/poster\r\n\r\nRenter/Poster : Can Create a post for his rent. a) Location b) rental price c) Room Qty d) Facilities', 'pending', 1, '2017-11-08', '2017-11-07 14:11:05', '2017-11-07 18:35:30'),
(5, 'Making Blog page for Photography Template', 'Making Blog Page According TO Ovi\'s Design', 'pending', 1, '2017-11-09', '2017-11-08 13:24:38', '2017-11-08 13:24:38'),
(6, 'Redesign Flexibleit.net with wordpress', 'Making a nice Design\r\nMaking a nice integration of Payment \r\nAnyone Can order a service', 'pending', 1, '2017-11-30', '2017-11-08 20:16:24', '2017-11-08 20:16:24'),
(7, 'Integrate Instant article with shareideas.ino', 'Integrate Instant article with shareideas.info\r\nSubmit 10 articles for review', 'completed', 1, '2017-11-09', '2017-11-08 20:31:11', '2017-11-08 20:31:23');

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
(1, 'admin', 'admin@flexibleit.net', '$2y$10$bvWHxVtQq8XOHLFM//q/tux9ZZbLfq6mq1oMlkx48yPNNUads6Ja.', 'Z3fvupaFfM8NJxYkPiiOsoN7B0ZNui5VrTqafbTUrsm9epTEdILwOLQyhVhB', '2017-09-02 09:27:17', '2017-09-02 09:27:17'),
(2, 'Abhi Das', 'dasabhi725@gmail.com', '$2y$10$7uO5LQG.pgr4Q09iZ3Z.puuT4kingQjU0wHT2OCwbnal5GdT/oJJ6', NULL, '2017-10-24 15:19:07', '2017-10-24 15:19:07');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enrolements`
--
ALTER TABLE `enrolements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `expense_categories`
--
ALTER TABLE `expense_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_cats`
--
ALTER TABLE `order_cats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
