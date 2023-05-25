-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 12:48 AM
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
-- Database: `versity_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_name` varchar(255) NOT NULL,
  `credit` double(8,2) NOT NULL,
  `type` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `short_name`, `credit`, `type`, `semester`, `department_id`, `created_at`, `updated_at`) VALUES
(10, 'Database', 'DBMS', 3.00, 'Theory', 4, 456, '2023-03-05 02:35:27', '2023-03-05 02:35:27'),
(20, 'Accounting', 'ACC', 3.00, 'Lab', 1, 500, '2023-03-05 02:35:52', '2023-03-05 02:35:52');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(250, 'EEE', '2023-03-12 14:34:34', '2023-03-12 14:34:34'),
(456, 'CSE', '2023-03-05 02:34:20', '2023-03-05 02:34:20'),
(500, 'ECO', '2023-03-05 02:34:36', '2023-03-05 02:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `ct1` varchar(30) NOT NULL,
  `ct2` varchar(30) NOT NULL,
  `ct3` varchar(30) NOT NULL,
  `assign` varchar(30) NOT NULL,
  `quiz` varchar(30) NOT NULL,
  `mid` varchar(30) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `ct1`, `ct2`, `ct3`, `assign`, `quiz`, `mid`, `updated_at`, `created_at`) VALUES
(20, 'OS', 'Mark_Given', 'Taken', 'Not_taken', 'Taken', 'Mark_Given', 'Taken', '2023-04-16', '2023-04-16'),
(50, 'AI', 'Mark_Given', 'Taken', 'Not_taken', 'Taken', 'Mark_Given', 'Mark_Given', '2023-04-16', '2023-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(36, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(37, '2023_01_16_072956_create_employees_table', 1),
(38, '2023_02_06_054855_create_users_table', 1),
(39, '2023_02_20_073634_create_sessions_table', 1),
(40, '2023_02_20_074603_create_departments_table', 1),
(41, '2023_02_20_074623_create_courses_table', 1),
(42, '2023_02_20_075715_create_sections_table', 1),
(43, '2023_03_12_211112_create_teachers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `semester` int(11) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `session_id`, `semester`, `course_id`, `section_name`, `created_at`, `updated_at`) VALUES
(46, 2, 4, 10, '[\"A1\"]', '2023-03-05 02:36:58', '2023-03-12 14:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Spring 2023', 'Running', '2023-03-12 14:07:29', '2023-03-12 14:07:29'),
(40, 'Fall 2023', 'Running', '2023-03-05 02:36:21', '2023-03-05 02:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `birth_date` date NOT NULL,
  `department` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` mediumtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `birth_date`, `department`, `sid`, `gender`, `address`, `status`, `profile_pic`, `created_at`, `updated_at`) VALUES
(2, 'Tanzim', 'wazihullahtanzim@gmail.com', '2023-03-02', 'cse', 400000, 'male', 'Chandgaon', 1, '1677926965.jpg', NULL, NULL),
(3, 'Albert Einstein', 'nobel@gmail.com', '2012-05-06', 'eee', 600000, 'male', 'America', 1, '1677928723.jpg', NULL, NULL),
(4, 'Nikola Tesla', 'tesla@gmail.com', '2012-05-02', 'eee', 700000, 'male', 'England', 1, '1677928786.jfif', NULL, NULL),
(5, 'Sheikh Hasina', 'hasina_madam@gmail.com', '2023-03-04', 'hrm', 90000, 'female', 'Bangladesh', 1, '1677954865.jpg', NULL, NULL),
(6, 'Masum', 'Masum@gmail.com', '2008-12-27', 'cse', 20000, 'male', 'sfsdfdsf', 1, '1681576902.jpg', NULL, NULL),
(7, 'Tanzim', 'tanzim@gmaill.com', '2023-04-10', 'hrm', 6565, 'male', 'Barisal', 1, '1681593462.png', NULL, NULL),
(8, 'Thor', 'tanzim@gmaill.com', '2023-04-06', 'cse', 1, 'male', 'xcgbf', 1, '1681593952.png', NULL, NULL),
(9, 'Thor', 'spider2011@gmail.com', '2023-04-12', 'eee', 56465, 'male', 'dsfsf', 1, '1681598041.png', NULL, NULL),
(10, 'student test', 'spider2011@gmail.com', '2023-04-04', 'cse', 1905465456, 'male', 'chandgaon', 1, '1681650645.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `number` int(12) NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `semester` int(11) NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `credit` double(8,2) NOT NULL,
  `progress` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `blood`, `number`, `department_id`, `session_id`, `semester`, `course_id`, `section_name`, `type`, `credit`, `progress`, `created_at`, `updated_at`) VALUES
(20, 'Kazi Muntaha', 'A-', 1587846656, 456, 40, 3, 20, '[\"B2\",\"C1\"]', 'Lab', 3.00, 50.00, '2023-04-16 14:00:22', '2023-04-16 14:00:22'),
(565, 'Shimu', 'O-', 1866654665, 250, 2, 8, 10, '[\"A1\",\"C1\"]', 'Theory', 3.00, 10.00, '2023-03-12 16:38:50', '2023-04-16 11:51:34'),
(4220, 'Wazih Ullah Tanzim', 'A+', 1852120386, 250, 2, 6, 10, '[\"A1\",\"B2\"]', 'Lab', 2.00, 90.00, '2023-03-12 16:25:14', '2023-04-16 14:00:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` mediumtext NOT NULL,
  `role` varchar(255) NOT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `is_approved`, `created_at`, `updated_at`) VALUES
(2, 'Tanzim', 'tanzim@gmaill.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 1, '2023-03-12 11:05:40', '2023-03-12 11:05:40'),
(3, 'ffffff', 'ffff@gmaill.com', 'a98f6f64e6cdfac22ab2ffd15a7241e3', 'Teacher', 1, '2023-04-15 15:43:36', '2023-04-16 08:24:50'),
(4, 'Ataur', 'Ataur@gmaill.com', 'e10adc3949ba59abbe56e057f20f883e', 'Teacher', 1, '2023-04-16 08:26:33', '2023-04-16 08:26:40'),
(5, 'Rony', 'rony@gmaill.com', 'e10adc3949ba59abbe56e057f20f883e', 'Student', 1, '2023-04-16 08:35:03', '2023-04-16 08:35:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_department_id_foreign` (`department_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_session_id_foreign` (`session_id`),
  ADD KEY `sections_course_id_foreign` (`course_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachers_department_id_foreign` (`department_id`),
  ADD KEY `teachers_session_id_foreign` (`session_id`),
  ADD KEY `teachers_course_id_foreign` (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4221;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `sections_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `teachers_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teachers_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `sessions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
