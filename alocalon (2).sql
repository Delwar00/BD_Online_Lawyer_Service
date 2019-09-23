-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2019 at 11:06 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alocalon`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_infos`
--

CREATE TABLE `additional_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user-id` int(11) NOT NULL,
  `nid` bigint(20) NOT NULL DEFAULT '123445556',
  `masters` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `all_services`
--

CREATE TABLE `all_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `free_consults`
--

CREATE TABLE `free_consults` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personal_info_id` int(11) NOT NULL COMMENT 'foriegn key',
  `user_id` int(11) NOT NULL COMMENT 'foriegn key',
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `free_consults`
--

INSERT INTO `free_consults` (`id`, `personal_info_id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Hi i am a client my user id is 2', NULL, NULL),
(2, 2, 2, 'hi i am clicnt user id 2 message lawyer 3', NULL, NULL),
(3, 1, 2, 'lol message lawyer 1', NULL, NULL),
(4, 1, 4, 'iam a client user id is 4 i send lawyer 1', NULL, NULL),
(17, 2, 4, 'Hi jahir kahan', NULL, NULL),
(18, 1, 4, 'Hi i am 4', NULL, NULL),
(19, 1, 4, 'local', NULL, NULL),
(20, 1, 4, 'smart', NULL, NULL),
(21, 1, 2, 'lkjhgfd', NULL, NULL),
(22, 2, 4, 'wow', NULL, NULL),
(23, 2, 2, 'knowledge', NULL, NULL),
(24, 1, 2, 'power', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_addresses`
--

CREATE TABLE `lawyer_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user-id` int(11) NOT NULL COMMENT 'foriegn key',
  `lawyer_personal_info_id` int(11) NOT NULL COMMENT 'foriegn key',
  `p_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `o_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lawyer_addresses`
--

INSERT INTO `lawyer_addresses` (`id`, `user-id`, `lawyer_personal_info_id`, `p_address`, `o_address`, `add_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'dsf', 'dsf', 1, '2019-09-02 01:32:50', NULL),
(2, 3, 2, 'gfg01783220103', '01783220103', 1, '2019-09-03 11:58:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_feedback_messages`
--

CREATE TABLE `lawyer_feedback_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `personal_info_id` int(11) NOT NULL COMMENT 'foriegn key',
  `user_id` int(11) NOT NULL COMMENT 'foriegn key',
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lawyer_feedback_messages`
--

INSERT INTO `lawyer_feedback_messages` (`id`, `personal_info_id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'hi i am lawyer user-id 3', NULL, NULL),
(2, 2, 1, 'thanks', NULL, NULL),
(3, 4, 1, 'lolol', NULL, NULL),
(4, 4, 3, 'thanks you r genious', NULL, NULL),
(5, 2, 1, 'o my god', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_personal_infos`
--

CREATE TABLE `lawyer_personal_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user-id` int(11) NOT NULL,
  `l_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_birth` date DEFAULT NULL,
  `gender` int(11) NOT NULL,
  `religion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `highest_degree` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'nai',
  `maritual_status` int(11) NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'profile_photos/defaltimage.jpg',
  `l_p_status` int(11) NOT NULL DEFAULT '1',
  `qualifications` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lawyer_personal_infos`
--

INSERT INTO `lawyer_personal_infos` (`id`, `user-id`, `l_name`, `l_birth`, `gender`, `religion`, `highest_degree`, `maritual_status`, `details`, `price`, `profile_photo`, `l_p_status`, `qualifications`, `created_at`, `updated_at`) VALUES
(1, 1, 'Abir Hasan', '2019-09-12', 3, 'Muslim', 'Bsc In Law , Phd in law', 1, 'fgh', '4$', 'profile_photos/sjiBi5QFjhcAC9vRwMAg8OKTge3Q4EcgIGkb1FPi.jpeg', 1, 'ds', NULL, '2019-09-02 01:32:50'),
(2, 3, 'jahir Khan', '2019-09-20', 2, 'Muslim', 'Msc in Law', 1, '01783220103', '6$', 'profile_photos/defaltimage.jpg', 1, '01783220103', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lawyer_practices_areas`
--

CREATE TABLE `lawyer_practices_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user-id` int(11) NOT NULL COMMENT 'foriegn key',
  `lawyer_personal_info_id` int(11) NOT NULL COMMENT 'foriegn key',
  `prac_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lawyer_practices_areas`
--

INSERT INTO `lawyer_practices_areas` (`id`, `user-id`, `lawyer_personal_info_id`, `prac_area`, `add_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Business law, Familly Law', 1, '2019-09-02 01:32:50', NULL),
(2, 3, 2, 'Business law', 1, '2019-09-03 11:58:10', NULL);

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
(3, '2017_03_06_023521_create_admins_table', 1),
(4, '2017_03_06_053834_create_admin_role_table', 1),
(5, '2018_03_06_023523_create_roles_table', 1),
(6, '2019_06_28_033346_create_additional_infos_table', 1),
(7, '2019_06_29_041927_create_lawyer_personal_infos_table', 1),
(8, '2019_06_29_054153_create_lawyer_addresses_table', 1),
(9, '2019_06_29_055354_create_lawyer_practices_areas_table', 1),
(10, '2019_07_22_024715_create_all_services_table', 1),
(11, '2019_07_23_055612_create_free_consults_table', 1),
(12, '2019_08_20_064953_create_service_areas_table', 1),
(13, '2019_09_07_041428_create_lawyer_feedback_messages_table', 2);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_areas`
--

CREATE TABLE `service_areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `all_service_id` int(11) NOT NULL COMMENT 'foriegn key',
  `service_area` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid_number` bigint(20) NOT NULL DEFAULT '123445556',
  `status` int(11) NOT NULL,
  `ver_number` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `phone`, `email`, `nid_number`, `status`, `ver_number`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1783220200, 'aburayhan@gmail.com', 24323534547, 1, 333524, '2019-09-02 01:31:43', '$2y$10$h2833l/jIXv/urCUtSUdOOqn6N6JVyRsD0Qq/sGExNieaaL4TcxHa', NULL, '2019-09-02 01:31:32', '2019-09-02 01:31:43'),
(2, 1783220112, 'cse.del1warhossain@gmail.com', 24323534541, 2, NULL, '2019-09-02 07:59:18', '$2y$10$Jl6V2ZjP6tVOpvvKGmAPBemu.mA3MCXZsBKOfCp/i8LEf3xh5H/Pa', NULL, '2019-09-02 07:58:43', '2019-09-02 07:59:18'),
(3, 1783220103, 'lol@gmail.com', 43235345123, 1, 333521, '2019-09-03 11:57:20', '$2y$10$J7cDezSfEGydXmWibAY1NOu9.SsI167i5dzdO34dcItOThz6WhO0e', NULL, '2019-09-03 11:56:53', '2019-09-03 11:57:20'),
(4, 1783220210, 'cse.delwarhossain@gmail.com', 243235345456, 2, NULL, '2019-09-06 22:45:04', '$2y$10$DBSywsNT4GFMGoPtuM.e0OAe5XDTax1UK/c2pBIEHMf0nwrlnWvfu', NULL, '2019-09-06 22:44:06', '2019-09-06 22:45:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_infos`
--
ALTER TABLE `additional_infos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `additional_infos_nid_unique` (`nid`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_role_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `all_services`
--
ALTER TABLE `all_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `free_consults`
--
ALTER TABLE `free_consults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer_addresses`
--
ALTER TABLE `lawyer_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer_feedback_messages`
--
ALTER TABLE `lawyer_feedback_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer_personal_infos`
--
ALTER TABLE `lawyer_personal_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer_practices_areas`
--
ALTER TABLE `lawyer_practices_areas`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `service_areas`
--
ALTER TABLE `service_areas`
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
-- AUTO_INCREMENT for table `additional_infos`
--
ALTER TABLE `additional_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_role`
--
ALTER TABLE `admin_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `all_services`
--
ALTER TABLE `all_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `free_consults`
--
ALTER TABLE `free_consults`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `lawyer_addresses`
--
ALTER TABLE `lawyer_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lawyer_feedback_messages`
--
ALTER TABLE `lawyer_feedback_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lawyer_personal_infos`
--
ALTER TABLE `lawyer_personal_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lawyer_practices_areas`
--
ALTER TABLE `lawyer_practices_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_areas`
--
ALTER TABLE `service_areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_role`
--
ALTER TABLE `admin_role`
  ADD CONSTRAINT `admin_role_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
