-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2021 at 07:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `current` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `name`, `course_name`, `course_desc`, `time`, `capacity`, `flag`, `created_at`, `updated_at`, `current`) VALUES
(19, 'Pending/Ex-student', 'Physics', 'none', 'none', 10, 0, '2020-11-20 08:42:31', '2020-11-20 09:39:13', 0),
(36, '2021-02-27 (Ex)', 'Physics', '1st year', 'none', 10, 0, '2021-02-27 11:46:36', '2021-02-27 11:46:43', NULL),
(37, 'Rose', 'Physics', '1st year', '11-12 pm', 10, 1, '2021-02-27 11:46:51', '2021-02-27 12:09:04', 5),
(38, 'Tulip', 'Physics', '1st year', '10-11 am', 10, 1, '2021-02-27 11:54:23', '2021-02-27 11:58:32', 3);

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_10_25_192254_create_batches_table', 1),
(2, '2020_10_25_192650_create_students_table', 2),
(3, '2020_10_26_081146_create_students_table', 3),
(4, '2020_10_26_150620_create_password_resets_table', 4),
(5, '2020_10_26_150722_create_users_table', 5),
(6, '2020_10_28_074135_create_students_table', 6),
(7, '2020_11_08_043704_create_payments_table', 7),
(8, '2020_11_08_074321_create_payments_table', 8),
(9, '2020_11_20_130003_create_tpayments_table', 9),
(10, '2020_11_20_130328_create_tpayments_table', 10),
(11, '2020_11_26_062900_create_notices_table', 11),
(12, '2019_09_22_192348_create_messages_table', 12),
(13, '2019_10_16_211433_create_favorites_table', 12),
(14, '2019_10_18_223259_add_avatar_to_users', 12),
(15, '2019_10_20_211056_add_messenger_color_to_users', 12),
(16, '2019_10_22_000539_add_dark_mode_to_users', 12),
(17, '2019_10_25_214038_add_active_status_to_users', 12),
(18, '2020_11_27_141329_add_position_to_users_table', 13),
(19, '2020_11_27_160948_add_position_to_users_table', 14),
(20, '2020_11_29_124747_add_current_to_batches_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sajjadurrahman3434@gmail.com', '$2y$10$.3vhYp741xiyw0AX0rbvEOHRmNxLVJ4l52cahvf0C8jDV9dr2ZO92', '2020-10-28 02:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total` int(11) NOT NULL,
  `Paid` int(11) NOT NULL,
  `Due` int(11) NOT NULL,
  `studentid` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `Type`, `Total`, `Paid`, `Due`, `studentid`, `created_at`, `updated_at`) VALUES
(128, 'Monthly', 600, 600, 0, 39, '2021-02-27 12:14:49', '2021-02-27 12:14:49'),
(129, 'Monthly', 600, 500, 100, 39, '2021-02-27 12:15:01', '2021-02-27 12:15:01'),
(130, 'Monthly', 600, 700, -100, 39, '2021-02-27 12:15:10', '2021-02-27 12:15:10'),
(131, 'Monthly', 400, 400, 0, 39, '2021-02-27 12:16:00', '2021-02-27 12:16:00'),
(132, 'Monthly', 700, 700, 0, 39, '2021-02-27 12:16:23', '2021-02-27 12:16:23'),
(133, 'Monthly', 700, 600, 100, 39, '2021-02-27 12:17:04', '2021-02-27 12:17:04'),
(134, 'Monthly', 700, 700, 0, 39, '2021-02-27 12:17:12', '2021-02-27 12:17:12'),
(135, 'Contruct', 6000, 0, 0, 40, '2021-02-27 12:17:53', '2021-02-27 12:17:53'),
(136, 'Contruct', 6000, 1000, 5000, 40, '2021-02-27 12:18:10', '2021-02-27 12:18:10'),
(137, 'Contruct', 8000, 0, 0, 41, '2021-02-27 12:20:49', '2021-02-27 12:20:49'),
(138, 'Contruct', 8000, 0, 8000, 42, '2021-02-27 12:22:03', '2021-02-27 12:22:03'),
(139, 'Contruct', 8000, 3000, 5000, 42, '2021-02-27 12:22:12', '2021-02-27 12:22:12'),
(140, 'Contruct', 8000, 5000, 3000, 42, '2021-02-27 12:22:20', '2021-02-27 12:22:20'),
(141, 'Contruct', 8000, 100, 7900, 43, '2021-02-27 12:23:38', '2021-02-27 12:23:38'),
(142, 'Contruct', 8000, 6000, 1900, 43, '2021-02-27 12:23:47', '2021-02-27 12:23:47'),
(143, 'Contruct', 8000, 1800, 100, 43, '2021-02-27 12:23:56', '2021-02-27 12:23:56'),
(144, 'Contruct', 8000, 0, 100, 43, '2021-02-27 12:24:06', '2021-02-27 12:24:06'),
(145, 'Contruct', 8000, 100, 0, 43, '2021-02-27 12:24:16', '2021-02-27 12:24:16'),
(146, 'Contruct', 7000, 0, 0, 44, '2021-02-27 12:25:22', '2021-02-27 12:25:22'),
(147, 'Contruct', 7000, 6000, 1000, 44, '2021-02-27 12:25:32', '2021-02-27 12:25:32'),
(148, 'Contruct', 7000, 1, 999, 44, '2021-02-27 12:26:04', '2021-02-27 12:26:04'),
(149, 'Contruct', 7000, 300, 699, 44, '2021-02-27 12:26:16', '2021-02-27 12:26:16'),
(150, 'Contruct', 7000, 500, 199, 44, '2021-02-27 12:26:42', '2021-02-27 12:26:42'),
(151, 'Contruct', 7000, 199, 0, 44, '2021-02-27 12:26:51', '2021-02-27 12:26:51'),
(153, 'Contruct', 1000, 0, 0, 45, '2021-02-27 12:31:33', '2021-02-27 12:31:33'),
(154, 'Contruct', 8000, 1000, 7000, 46, '2021-02-27 12:34:16', '2021-02-27 12:34:16'),
(155, 'Contruct', 8000, 2000, 5000, 46, '2021-02-27 12:34:23', '2021-02-27 12:34:23'),
(156, 'Contruct', 8000, 0, 5000, 46, '2021-02-27 12:34:31', '2021-02-27 12:34:31'),
(157, 'Contruct', 8000, 3000, 2000, 46, '2021-02-27 12:34:40', '2021-02-27 12:34:40'),
(158, 'Contruct', 8000, 1990, 10, 46, '2021-02-27 12:34:50', '2021-02-27 12:34:50'),
(159, 'Contruct', 8000, 10, 0, 46, '2021-02-27 12:34:57', '2021-02-27 12:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batchid` bigint(20) UNSIGNED NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `cne`, `firstName`, `secondName`, `age`, `batchid`, `speciality`, `created_at`, `updated_at`) VALUES
(39, 'Phulbari Govt College', 'Raihan', 'Fulbari', '01XXX-XXXXXX', 37, 'Running', '2021-02-27 11:31:18', '2021-02-27 12:14:08'),
(40, 'Adarsha Degree College', 'Rahil', 'Fulbari', '01XXX-XXXXXX', 38, 'Running', '2021-02-27 11:31:59', '2021-02-27 12:12:47'),
(41, 'Adarsha Degree College', 'r', 'Fulbari', '01XXX-XXXXXX', 37, 'Running', '2021-02-27 12:20:27', '2021-02-27 12:20:27'),
(42, 'Phulbari Govt College', 'a', 'Fulbari', '01XXX-XXXXXX', 37, 'Running', '2021-02-27 12:21:52', '2021-02-27 12:21:52'),
(43, 'Phulbari Govt College', 'h', 'Fulbari', '01XXX-XXXXXX', 37, 'Running', '2021-02-27 12:23:26', '2021-02-27 12:23:26'),
(44, 'Phulbari Govt College', 'j', 'Fulbari', '01XXX-XXXXXX', 38, 'Running', '2021-02-27 12:25:10', '2021-02-27 12:25:10'),
(45, 'Fulbari Mohila College', 'ifte', 'Fulbari', '01XXX-XXXXXX', 37, 'Running', '2021-02-27 12:29:53', '2021-02-27 12:29:53'),
(46, 'Adarsha Degree College', 'jj', 'Fulbari', '01XXX-XXXXXX', 38, 'Running', '2021-02-27 12:33:57', '2021-02-27 12:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `tpayments`
--

CREATE TABLE `tpayments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Paid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tpayments`
--

INSERT INTO `tpayments` (`id`, `Paid`, `created_at`, `updated_at`) VALUES
(49, 600, '2021-02-27 12:14:49', '2021-02-27 12:14:49'),
(50, 500, '2021-02-27 12:15:01', '2021-02-27 12:15:01'),
(51, 700, '2021-02-27 12:15:10', '2021-02-27 12:15:10'),
(52, 400, '2021-02-27 12:16:00', '2021-02-27 12:16:00'),
(53, 700, '2021-02-27 12:16:23', '2021-02-27 12:16:23'),
(54, 600, '2021-02-27 12:17:04', '2021-02-27 12:17:04'),
(55, 700, '2021-02-27 12:17:12', '2021-02-27 12:17:12'),
(56, 0, '2021-02-27 12:17:53', '2021-02-27 12:17:53'),
(57, 1000, '2021-02-27 12:18:10', '2021-02-27 12:18:10'),
(58, 0, '2021-02-27 12:20:49', '2021-02-27 12:20:49'),
(59, 0, '2021-02-27 12:22:04', '2021-02-27 12:22:04'),
(60, 3000, '2021-02-27 12:22:12', '2021-02-27 12:22:12'),
(61, 5000, '2021-02-27 12:22:20', '2021-02-27 12:22:20'),
(62, 100, '2021-02-27 12:23:39', '2021-02-27 12:23:39'),
(63, 6000, '2021-02-27 12:23:47', '2021-02-27 12:23:47'),
(64, 1800, '2021-02-27 12:23:56', '2021-02-27 12:23:56'),
(65, 0, '2021-02-27 12:24:06', '2021-02-27 12:24:06'),
(66, 100, '2021-02-27 12:24:16', '2021-02-27 12:24:16'),
(67, 0, '2021-02-27 12:25:22', '2021-02-27 12:25:22'),
(68, 6000, '2021-02-27 12:25:32', '2021-02-27 12:25:32'),
(69, 1, '2021-02-27 12:26:04', '2021-02-27 12:26:04'),
(70, 300, '2021-02-27 12:26:16', '2021-02-27 12:26:16'),
(71, 500, '2021-02-27 12:26:42', '2021-02-27 12:26:42'),
(72, 199, '2021-02-27 12:26:51', '2021-02-27 12:26:51'),
(73, 0, '2021-02-27 12:30:09', '2021-02-27 12:30:09'),
(74, 0, '2021-02-27 12:31:33', '2021-02-27 12:31:33'),
(75, 1000, '2021-02-27 12:34:16', '2021-02-27 12:34:16'),
(76, 2000, '2021-02-27 12:34:23', '2021-02-27 12:34:23'),
(77, 0, '2021-02-27 12:34:31', '2021-02-27 12:34:31'),
(78, 3000, '2021-02-27 12:34:40', '2021-02-27 12:34:40'),
(79, 1990, '2021-02-27 12:34:50', '2021-02-27 12:34:50'),
(80, 10, '2021-02-27 12:34:57', '2021-02-27 12:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Position` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'Student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `active_status`, `dark_mode`, `messenger_color`, `avatar`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `Position`) VALUES
(2, 'Mr.Sajjadur', 'sajjad@gmail.com', 0, 0, '#2180f3', 'avatar.png', NULL, '$2y$10$DKw4G6x7shq2Bz6ZKYmbru8saN7.n3T6c2L80UmoNnktNkDmn4F4S', 'ZjNhlRgVFuse7e0fgT0Ho1yK943yrU2l8M2qFc9Lc4T0FsppIr7G0RN3gvjL', '2020-10-26 09:28:30', '2021-02-27 08:44:03', 'Admin'),
(35, 'Raihan', 'raihanul@gmail.com', 0, 0, '#2180f3', 'avatar.png', NULL, '$2y$10$N0UZFtdZS6YtEwqZMB.rg.XrOGs6pm2bMcKcwOAZ/QNhGgn9X81my', NULL, '2021-02-27 11:29:45', '2021-02-27 11:29:45', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_studentid_foreign` (`studentid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_batchid_foreign` (`batchid`);

--
-- Indexes for table `tpayments`
--
ALTER TABLE `tpayments`
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
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tpayments`
--
ALTER TABLE `tpayments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_studentid_foreign` FOREIGN KEY (`studentid`) REFERENCES `students` (`id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_batchid_foreign` FOREIGN KEY (`batchid`) REFERENCES `batches` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
