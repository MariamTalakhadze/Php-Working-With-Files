-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2019 at 12:24 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geolab_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pn` bigint(20) NOT NULL,
  `isPublish` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `lastname`, `pn`, `isPublish`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '5b99U', 'RDc8qXDlla', 625970501, 0, NULL, '2019-05-30 17:57:03', NULL),
(2, 'FiQ1j', 'P2DokNsyOg', 70526343, 1, NULL, '2019-05-30 17:57:03', NULL),
(3, 'PdL87', '87vAYmaJoJ', 722332713, 1, NULL, '2019-05-30 17:57:03', NULL),
(4, 'E6mtA', 'cfT8yg5g3L', 417643942, 1, NULL, '2019-05-30 17:57:03', NULL),
(5, 'GD0ER', '8KAf0XNVZJ', 109302661, 1, NULL, '2019-05-30 17:57:04', NULL),
(6, 'wMNLm', 'PZktBQWvwV', 377554812, 0, NULL, '2019-05-30 17:57:04', NULL),
(7, 'E6LqP', 'vb5NDpdeMB', 441529820, 0, NULL, '2019-05-30 17:57:05', NULL),
(8, 'vyASK', 'PpddbKWpGL', 680179894, 0, NULL, '2019-05-30 17:57:05', NULL),
(9, 'OzWGL', 'pqxbLWcnf1', 306298421, 1, NULL, '2019-05-30 17:57:05', NULL),
(10, 'clnxN', 'T5hBrRmvro', 491165315, 1, NULL, '2019-05-30 17:57:05', NULL),
(11, '7ARXk', 'bKDtZuqNlC', 481434186, 1, NULL, '2019-05-30 17:57:05', NULL),
(12, 'F2bAT', 'kT5J4eyjha', 625678894, 0, NULL, '2019-05-30 17:57:05', NULL),
(13, 'eS1eP', 'ih1vm4gqA9', 214653908, 0, NULL, '2019-05-30 17:57:06', NULL),
(14, 'Xsbpc', 'xZBXOTgWar', 270718252, 1, NULL, '2019-05-30 17:57:06', NULL),
(15, 'glDK1', 'sDYjOQPyKl', 101999188, 0, NULL, '2019-05-30 17:57:07', NULL),
(16, 'ARr0N', 'RIftERuBnQ', 957633074, 0, NULL, '2019-05-30 17:57:07', NULL),
(17, 'hgXyR', 'u7Zz0t37rD', 387268782, 0, NULL, '2019-05-30 17:57:08', NULL),
(18, 'jDFrd', '3XGRpbOAEn', 887570700, 0, NULL, '2019-05-30 17:57:08', NULL),
(19, 'HoSWK', 'rhOFiJF3Dg', 118881589, 1, NULL, '2019-05-30 17:57:08', NULL),
(20, 'PlUT2', 'PbkKI3kUpy', 650703007, 1, NULL, '2019-05-30 17:57:08', NULL),
(21, 'tcecU', 'XHAZKpwqfJ', 672975415, 0, NULL, '2019-05-30 17:57:08', NULL),
(22, '3klCw', '9dUXNzaco2', 681310245, 1, NULL, '2019-05-30 17:57:08', NULL),
(23, 'k8JRk', 'LB4DknhGdc', 102978215, 0, NULL, '2019-05-30 17:57:08', NULL),
(24, 'yAndq', 'puXEBI5O80', 238514748, 1, NULL, '2019-05-30 17:57:09', NULL),
(25, 'NvARt', '25eTqOLi9N', 550631574, 1, NULL, '2019-05-30 17:57:09', NULL),
(26, '63f2u', 'bM3WO7oBp0', 878586595, 1, NULL, '2019-05-30 17:57:09', NULL),
(27, 'AtV5p', 'lezWNzNcXY', 313953779, 0, NULL, '2019-05-30 17:57:09', NULL),
(28, 'RbbH7', 'vyBQQWBcoq', 696317835, 1, NULL, '2019-05-30 17:58:59', NULL),
(29, 'iHZU5', 'dxndVPqIYo', 545529842, 1, NULL, '2019-05-30 17:58:59', NULL),
(30, '4fROU', 'q4aCb9I3jz', 514671457, 0, NULL, '2019-05-30 17:58:59', NULL),
(31, '3Q6yL', 'qYShqchJmD', 676515866, 0, NULL, '2019-05-30 17:58:59', NULL),
(32, 'mfnz1', 'T0R2vJg9ye', 860771513, 1, NULL, '2019-05-30 17:58:59', NULL),
(33, 'JdbHq', 'Kp2DU1R6Gd', 112968663, 0, NULL, '2019-05-30 17:59:00', NULL),
(34, 'UBDTw', 'vwpNevBCVK', 593749692, 0, NULL, '2019-05-30 17:59:00', NULL),
(35, 'twV1C', 'taHKWzMUbJ', 572640849, 0, NULL, '2019-05-30 17:59:00', NULL),
(36, 'NGcc2', 'tQuoFjZNnZ', 655058615, 1, NULL, '2019-05-30 18:03:01', NULL),
(37, 'jrXlz', 'CWqCay49j6', 580843029, 1, NULL, '2019-05-30 18:03:01', NULL),
(38, 'SFcot', 'ADckptk4eG', 1656872, 1, NULL, '2019-05-30 18:03:01', NULL),
(39, 'IRvrc', 'etV4CwfcjX', 844086326, 0, '2019-05-30 18:03:01', '2019-05-30 18:03:01', NULL),
(40, 'lkVGh', 'rjCvB7vCLg', 802994187, 0, '2019-05-30 18:03:01', '2019-05-30 18:03:01', NULL),
(41, '3rixt', 'tIcgon5rvi', 193582783, 0, '2019-05-30 18:03:01', '2019-05-30 18:03:01', NULL),
(42, 'wgsu4', 'Th8wMg8w7q', 19609410, 1, NULL, '2019-05-30 18:03:01', NULL),
(43, 'vT0Nf', '7vlCkyNCCv', 72619172, 1, NULL, '2019-05-30 18:03:01', NULL),
(44, 'FDDNm', 'ItVVJy3Yxb', 347493853, 1, NULL, '2019-05-30 18:03:01', NULL),
(45, 'rnYXQ', '3HpNPXqTgL', 216327875, 1, NULL, '2019-05-30 18:03:01', NULL);

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
(3, '2019_05_30_195710_create_blog_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
