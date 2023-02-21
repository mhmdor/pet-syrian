-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2022 at 02:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saranimals`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `old` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `act` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `user_id`, `type`, `title`, `Description`, `city`, `slug`, `price`, `old`, `country`, `photo`, `photo1`, `photo2`, `act`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'name', 'description', 'Damascus', 'name', 1000, '', '', '1647167484.png', NULL, NULL, 0, NULL, '2022-03-13 08:31:24', '2022-03-13 08:31:24'),
(2, 1, '1', 'aa', 'dd', 'Damascus', 'aa', 22, '', '', '1647169499.jpg', NULL, NULL, 0, NULL, '2022-03-13 09:04:59', '2022-03-13 09:04:59'),
(3, 1, '1', 'a', 'ddd', 'Rif Dimashqq', 'a', 33, '', '', '1647169602.jpg', NULL, NULL, 0, NULL, '2022-03-13 09:06:42', '2022-03-13 09:06:42'),
(4, 1, '1', 'd', 'desci', 'Rif Dimashqq', 'd', 23, '', '', '1647169949.jpg', NULL, NULL, 0, NULL, '2022-03-13 09:12:29', '2022-03-13 09:12:29'),
(5, 1, 'Bird', 'test', 'descriptions', 'Rif Dimashqq', 'test', 33, '', '', '1647171014.jpg', NULL, NULL, 1, NULL, '2022-03-13 09:30:14', '2022-03-13 09:30:14'),
(6, 2, 'Dog', 'animal name', 'descriptions', 'Rif Dimashqq', 'animal-name', 100, '', '', '1647174321.png', NULL, NULL, 1, NULL, '2022-03-13 10:25:21', '2022-03-13 10:25:21'),
(7, 2, 'Breeding', 'animal name', 'dex', 'Rif Dimashqq', 'animal-name', 800, '', '', '1647178261.jpg', NULL, NULL, 0, NULL, '2022-03-13 11:31:01', '2022-03-13 11:31:01'),
(8, 2, 'Horse', 'animal name', 'edd', 'Rif Dimashqq', 'animal-name', 22, '', '', '1647179074.jpg', NULL, NULL, 0, NULL, '2022-03-13 11:44:34', '2022-03-13 11:44:34'),
(9, 2, 'Dog', 'a', 'ed', 'Rif Dimashqq', 'a', 3, '', '', '1647179216.jpg', NULL, NULL, 0, NULL, '2022-03-13 11:46:56', '2022-03-13 11:46:56'),
(10, 2, 'Cat', 'animal name', 'des', 'Rif Dimashqq', 'animal-name', 3300, '', '', '1647179423.png', NULL, NULL, 1, NULL, '2022-03-13 11:50:23', '2022-03-13 11:50:23'),
(11, 2, 'Horse', 'hope', 'gfhgfhgfhgffjhgfjhgfghfjghfjhgfhgjfjghfghfghfjgfjghfjhgfjhgfghfjhgfjhgfjhgfjhgfjghfjhgfjhgfjhgfjhfgjhgfgfjghfjgfjghfjhgfjhgfjhgfjgfuhgfjhfgjgfjgfjgfjhgfjghfhjfgjfjhgfujghfu', 'Rif Dimashqq', 'hope', 1500000, '', '', '1647180961.jpg', NULL, NULL, 0, NULL, '2022-03-13 12:16:01', '2022-03-13 12:16:01');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ads_id` int(10) UNSIGNED NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `ads_id`, `comments`, `created_at`, `updated_at`) VALUES
(1, 2, 10, 'this is test comment', '2022-03-13 11:51:13', '2022-03-13 11:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `fav`
--

CREATE TABLE `fav` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ads_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ads_id` bigint(20) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `url`, `ads_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'imageTest/YcwXjsrPsru0Zl1afmku1xHGYuD9BBIHzo6lguqJ.jpg', 4, 0, NULL, NULL),
(4, 'imageTest/rrjOWFT4aBlLvduH0R7ZrzaeFserUzUsxdZygm16.jpg', 4, 0, NULL, NULL),
(5, 'imageTest/j16Ee1qAt46HaECEZA80pplrZoUnIgw0ZJWPnXsC.jpg', 5, 0, NULL, NULL),
(6, 'imageTest/wrimxFhKTquu7CIEsPZyg7wMZuAgdGZ9MYcH8d59.jpg', 5, 0, NULL, NULL),
(7, 'imageTest/yMqup5rgFCBmVvMyC7PT7WXmUx30FxFrp9WNPa25.jpg', 6, 0, NULL, NULL),
(8, 'imageTest/lfXwKSLuAUBzGeJ9lolVGl8cy78ssHq8GgglZGAz.jpg', 6, 0, NULL, NULL),
(9, 'imageTest/8CJwronMb2S1TJjMxtGno23zrsBHB2gJYlhPR3ud.jpg', 7, 0, NULL, NULL),
(10, 'imageTest/58B0kcGeDTdglyxPFAbnAzYNhcyfuy7cqMC1M1XS.jpg', 8, 0, NULL, NULL),
(11, 'imageTest/kTdLGJ6tQFvpO3FxlaRSchFDZBaD1KOaMMGN0Aws.jpg', 9, 0, NULL, NULL),
(12, 'imageTest/2Ll6vfbW2NpnZpQ4qt8IC5tYihUMSPyOmMtQt7qQ.webp', 10, 0, NULL, NULL),
(13, 'imageTest/SLQjisP8kGXQ8l6HnDQ3RLnEMqDfCxAui6gHzmZS.jpg', 11, 0, NULL, NULL);

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
(3, '2021_10_09_100607_create_ads_table', 1),
(4, '2021_10_12_082922_create_profile_users', 1),
(5, '2021_10_16_103703_add_columns_to_users', 1),
(6, '2021_10_16_105245_fav', 1),
(7, '2021_10_16_113826_comments', 1),
(8, '2021_10_20_131728_create_admins_table', 1),
(9, '2021_10_26_080431_create_roles_table', 1),
(10, '2021_10_26_084748_create_role_user_table', 1),
(11, '2021_10_26_105742_create_roles_user_table', 1),
(12, '2022_03_07_115107_create_categories_table', 1),
(13, '2022_03_08_114123_create_images_table', 1);

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
-- Table structure for table `profile_users`
--

CREATE TABLE `profile_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles_user`
--

CREATE TABLE `roles_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_verified` tinyint(1) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `mobile_verified`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `city`, `gender`, `mobile`, `photo`, `deleted_at`) VALUES
(1, 'ahmad', 'ahmad', NULL, NULL, NULL, '$2y$10$2gOVJbnbFOB.e3YeOK8wqeq1U1H2ZZlHZa6pkIIPRx4SV24P5oXy6', NULL, '2022-03-13 05:37:54', '2022-03-13 08:19:37', NULL, NULL, 444444, NULL, NULL),
(2, 'ahmad', 'ahmad', NULL, 'email@email.com', NULL, '$2y$10$79qUytUIwNwIR/FFeMdoMeVOaQh0rLWmPo/vMFatDEf3w8SoX/TKq', NULL, '2022-03-13 10:16:07', '2022-03-13 11:54:26', 'Damascus', 'Male', 999999999, '1647179666.png', NULL),
(3, 'ahmad', 'ahmad', NULL, 'ahmad@ahmad.com', NULL, '$2y$10$uV/JRaAUQhbSHr7aEC6hg.RauA.yoYZyD9h0APgB/gNgUV0in03X2', NULL, '2022-03-14 11:01:23', '2022-03-14 11:01:23', NULL, NULL, 999, NULL, NULL),
(5, 'ahmad', 'ahmad', NULL, 'ahmad@ahmad2.com', NULL, '$2y$10$fKYmA1sanPMeAbcZ.y8iMOlbRRUEQhgQeYMV0tWE5m6CxiBxuoz4q', NULL, '2022-03-14 11:02:38', '2022-03-14 11:02:38', NULL, NULL, 999, NULL, NULL),
(6, 'ahmad', 'ahm', NULL, 'e@e.com', NULL, '$2y$10$Ei.BT7wLk7At4Q76PY0HvuXlDsGUo1L9efv648O/6e0N2oBvQTQTe', NULL, '2022-03-14 11:06:32', '2022-03-14 11:06:32', NULL, NULL, 9999, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fav`
--
ALTER TABLE `fav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- Indexes for table `profile_users`
--
ALTER TABLE `profile_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_user`
--
ALTER TABLE `roles_user`
  ADD UNIQUE KEY `roles_user_user_id_role_id_unique` (`user_id`,`role_id`),
  ADD KEY `roles_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fav`
--
ALTER TABLE `fav`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profile_users`
--
ALTER TABLE `profile_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `roles_user`
--
ALTER TABLE `roles_user`
  ADD CONSTRAINT `roles_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `roles_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
