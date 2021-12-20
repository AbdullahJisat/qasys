-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2021 at 12:35 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qasys`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `code`, `created_at`, `updated_at`, `department_id`) VALUES
(1, 'Case', 'cse080', '2021-10-15 13:05:07', '2021-10-15 13:06:39', 1),
(2, 'sdfsd', 'fdf', '2021-10-15 14:55:16', '2021-10-15 14:55:16', 2),
(3, 'vdo', '25', '2021-12-15 06:06:11', '2021-12-15 06:06:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_students`
--

CREATE TABLE `course_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_students`
--

INSERT INTO `course_students` (`id`, `course_id`, `student_id`, `created_at`, `updated_at`) VALUES
(4, 1, 10, '2021-10-18 01:33:35', '2021-10-18 01:33:35'),
(5, 2, 10, '2021-10-18 01:33:35', '2021-10-18 01:33:35');

-- --------------------------------------------------------

--
-- Table structure for table `course_teachers`
--

CREATE TABLE `course_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_teachers`
--

INSERT INTO `course_teachers` (`id`, `course_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(6, 2, 4, '2021-10-15 15:10:05', '2021-10-15 15:10:05'),
(7, 1, 11, '2021-11-03 07:19:30', '2021-11-03 07:19:30');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Computer Science & Engineering', 'cse', '2021-12-15 05:29:34', '2021-12-15 05:29:34'),
(2, 'Electrical Engineering', 'eee', '2021-12-15 05:29:34', '2021-12-15 05:29:34'),
(3, 'Marketing & HR', 'mhr', '2021-12-15 05:29:34', '2021-12-17 07:56:27'),
(4, 'Economics', 'eco', '2021-12-15 05:29:34', '2021-12-15 05:29:34'),
(5, 'Machine Learning', 'ml', '2021-12-15 05:29:34', '2021-12-15 05:29:34'),
(6, 'Data Science', 'ds', '2021-12-15 05:29:34', '2021-12-15 05:29:34'),
(7, 'Mathematics', 'mat', '2021-12-15 05:29:34', '2021-12-15 05:29:34'),
(8, 'Biology', 'bio', '2021-12-15 05:29:34', '2021-12-15 05:29:34'),
(9, 'Astrophysics', 'as', '2021-12-15 05:29:34', '2021-12-15 05:29:34'),
(10, 'Climate Change', 'cl', '2021-12-15 05:29:34', '2021-12-15 05:29:34'),
(11, 'Physics', 'phy', '2021-12-15 05:29:34', '2021-12-15 05:29:34'),
(12, 'Social Science', 'ss', '2021-12-15 05:29:34', '2021-12-15 05:29:34');

-- --------------------------------------------------------

--
-- Table structure for table `department_students`
--

CREATE TABLE `department_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_students`
--

INSERT INTO `department_students` (`id`, `department_id`, `student_id`, `created_at`, `updated_at`) VALUES
(2, 2, 10, '2021-12-17 08:55:33', '2021-12-17 08:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `department_teachers`
--

CREATE TABLE `department_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_teachers`
--

INSERT INTO `department_teachers` (`id`, `department_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 1, 4, '2021-12-17 08:18:49', '2021-12-17 08:18:49'),
(2, 3, 4, '2021-12-17 08:18:49', '2021-12-17 08:18:49'),
(3, 1, 11, '2021-12-17 08:59:49', '2021-12-17 08:59:49'),
(4, 3, 11, '2021-12-17 08:59:49', '2021-12-17 08:59:49'),
(5, 5, 11, '2021-12-17 08:59:49', '2021-12-17 08:59:49'),
(6, 6, 11, '2021-12-17 08:59:49', '2021-12-17 08:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qa_id` int(10) UNSIGNED DEFAULT NULL,
  `is_ans` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `type`, `file_url`, `qa_id`, `is_ans`, `created_at`, `updated_at`) VALUES
(1, 'pdf', '/storage/question_answer/fsfsdfds.pdf', 1, '1', '2021-09-22 01:10:29', '2021-09-22 01:10:29'),
(2, 'pdf', '/storage/question_answer/fsfsdfds.pdf', 2, '2', '2021-09-22 01:10:58', '2021-09-22 01:10:59'),
(3, 'pdf', '/storage/question_answer/fsfsdfds.pdf', 3, '3', '2021-09-22 01:51:49', '2021-09-22 01:51:49'),
(6, 'jpg', '/storage/question/Akbar.jpg', 4, '/storage/answer/Akbar.jpg', '2021-10-16 01:37:29', '2021-10-16 01:37:29'),
(7, 'pdf', '/storage/question/david.pdf', 5, '', '2021-12-17 09:10:31', '2021-12-17 09:10:31');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_21_102153_create_question_answers_table', 2),
(6, '2021_09_21_103504_create_files_table', 3),
(7, '2021_09_22_081058_create_semesters_table', 4),
(8, '2021_09_22_081060_create_subjects_table', 4),
(9, '2021_09_22_084742_create_send_links_table', 5),
(10, '2021_10_15_183708_create_courses_table', 6),
(11, '2021_10_15_191627_create_course_teachers_table', 7),
(12, '2021_10_15_191746_create_course_students_table', 7),
(13, '2021_12_15_110242_create_departments_table', 8),
(14, '2021_12_17_140258_create_department_teachers_table', 9),
(15, '2021_12_17_142730_create_department_students_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question_answers`
--

CREATE TABLE `question_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1-mcq, & 0-other',
  `teacher_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_answers`
--

INSERT INTO `question_answers` (`id`, `name`, `description`, `type`, `teacher_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'fsfsdfds', 'sdfsfsfsf', 1, 4, 1, '2021-09-22 01:10:28', '2021-09-22 01:10:28'),
(3, 'asdsadsadadelete', 'dsadsada', 1, 4, 2, '2021-09-22 01:51:49', '2021-09-22 02:03:41'),
(4, 'Akbar', 'sfsdkfdskfsdf', 0, 4, 1, '2021-10-16 01:37:29', '2021-10-16 01:37:29'),
(5, 'david', NULL, 0, 4, 3, '2021-12-17 09:10:31', '2021-12-17 09:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `send_links`
--

CREATE TABLE `send_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` int(10) UNSIGNED DEFAULT NULL,
  `student_id` text COLLATE utf8mb4_unicode_ci,
  `course_id` int(11) DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_links`
--

INSERT INTO `send_links` (`id`, `teacher_id`, `student_id`, `course_id`, `link`, `created_at`, `updated_at`) VALUES
(1, 4, '10,5,6', 1, 'dsdsadsa', '2021-09-22 03:37:14', '2021-09-22 03:37:14'),
(2, 4, '5,6', 2, 'dsfdsf', '2021-09-22 03:42:28', '2021-09-22 03:42:28'),
(3, 4, '5,6', NULL, 'ssfsfsdfds', '2021-10-16 02:43:42', '2021-10-16 02:43:42'),
(4, 4, '5,6', 1, 'sfsfs', '2021-10-16 02:51:58', '2021-10-16 02:51:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `gender`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ehab', 'ehab@gmail.com', NULL, '$2y$10$L745mGf77nGKxPwvz4LaCuiP2Je.U9tHFdMM5fsjOCXpGWfzrJuVu', '0123456789', 'Male', 'admin', NULL, '2021-09-21 04:15:19', '2021-09-21 04:15:19'),
(4, 'rakib', 'rakib@gmail.com', NULL, '123456789', '435435345', '1', 'teacher', NULL, NULL, NULL),
(5, 'hasan', 'hasan@gmail.com', NULL, '123456789', '535555535', '1', 'student', NULL, NULL, NULL),
(6, 'david', 'david@gmail.com', NULL, '12345667', '121322432', '0', 'student', NULL, NULL, NULL),
(7, 'akram', 'akbsar@gmail.com', NULL, '$2y$10$aS3p8HMnDjTE.4naIkK9U.CntocausoR6KiRR/DJaI5zm2BmiA0Z2', '2112234', 'Male', NULL, NULL, '2021-10-17 01:12:24', '2021-10-17 01:12:24'),
(8, 'david', 's@gmail.com', NULL, '$2y$10$iG9xLCXoLxfTCxe86gF95uStBFJMukqIlWT6UMa6h538T4w9t/qQu', '012653655743', 'Male', NULL, NULL, '2021-10-17 01:13:15', '2021-10-17 01:13:15'),
(9, 'david', 'davida@gmail.com', NULL, '$2y$10$ZgJc69awlhwJ7M9t3u3HDudRU8IbqDF46thOzl5kad4PIu4blNpUu', '012653655743', 'Male', NULL, NULL, '2021-10-17 01:30:50', '2021-10-17 01:30:50'),
(10, 'ee', 'ee@dmail.com', NULL, '$2y$10$zGsTX.rjaz1Qknwzr8mwSu/rduZsoISt6wsyXk1H97Yuk4.pQDfXm', '121121', 'male', 'student', NULL, '2021-10-17 01:37:54', '2021-10-17 01:37:54'),
(11, 'saiful', 'saiful@gmail.com', NULL, '$2y$10$Xk/mGFi4a/VpjTCMCHbSwOb5qLRNkqnc1KlYCi68Tn1dT6e2ynz7q', '2242', 'male', 'teacher', 'hZNTkt5ZngjIJ8QGQI8y8d7H89NjPSd2WAWjhse1lQnpHOUxXCdTvNZN9IoJ', '2021-10-17 02:09:40', '2021-10-17 02:09:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_students`
--
ALTER TABLE `course_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_teachers`
--
ALTER TABLE `course_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_students`
--
ALTER TABLE `department_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_teachers`
--
ALTER TABLE `department_teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `question_answers`
--
ALTER TABLE `question_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_links`
--
ALTER TABLE `send_links`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_students`
--
ALTER TABLE `course_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_teachers`
--
ALTER TABLE `course_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `department_students`
--
ALTER TABLE `department_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department_teachers`
--
ALTER TABLE `department_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question_answers`
--
ALTER TABLE `question_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `send_links`
--
ALTER TABLE `send_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
