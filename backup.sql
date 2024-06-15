-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 10:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutimages`
--

CREATE TABLE `aboutimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutimages`
--

INSERT INTO `aboutimages` (`id`, `title`, `image`, `key`, `created_at`, `updated_at`) VALUES
(1, 'about1', '1709493420-about-1.jpg', 'first', '2024-03-03 13:32:55', '2024-03-03 13:47:00'),
(2, 'about2', '1709493440-about-2.jpg', 'seccond', '2024-03-03 13:33:26', '2024-03-03 13:47:20'),
(3, 'about3', '1709493456-about-3.jpg', 'third', '2024-03-03 13:34:15', '2024-03-03 13:47:36'),
(4, 'about4', '1709493470-about-4.jpg', 'fourth', '2024-03-03 13:34:54', '2024-03-03 13:47:50');

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `exp` varchar(255) NOT NULL,
  `chef` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `exp`, `chef`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', '115', '150', '0', '2024-03-03 13:49:32', '2024-03-04 05:03:24'),
(2, 'about', 'chef', '16', '100', '0', '2024-03-04 04:53:53', '2024-03-04 04:53:53');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `people` varchar(255) NOT NULL,
  `special_request` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `email`, `people`, `special_request`, `created_at`, `updated_at`) VALUES
(1, 'ANUSHREE BASAK', 'anushreebasak1764@gmail.com', '3', 'special', '2024-03-05 01:56:18', '2024-03-05 01:58:46'),
(3, 'Mrinmay', 'm@gmail.com', '2', 'abc', '2024-03-05 02:00:52', '2024-03-05 02:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('Active','InActive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_code` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `whatsapp_no` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `opening_and_closing_time` varchar(255) NOT NULL,
  `status` enum('Active','InActive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `email`, `phone_code`, `contact_no`, `whatsapp_no`, `address`, `opening_and_closing_time`, `status`, `created_at`, `updated_at`) VALUES
(1, 'contact@galvanize.com', '+68', '122109876', '122109876', '58 Howard Street #2 San Francisco, CA 941', 'Mon to Fri - 9AM to 6PM', 'Active', '2024-03-03 13:32:48', '2024-03-03 13:32:48'),
(2, 'abcd@test.com', '+68', '123456789', '123456789', '58 test Street #2 San Francisco, test address', 'Mon to Fri - 9AM to 6PM', 'InActive', '2024-03-03 13:32:48', '2024-03-03 13:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mchefs`
--

CREATE TABLE `mchefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mchefs`
--

INSERT INTO `mchefs` (`id`, `name`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mr.Chef 1', 'chef', '1709494734-team-1.jpg', '2024-03-03 14:08:54', '2024-03-03 14:08:54'),
(2, 'Mr.Chef 2', 'chef', '1709494759-team-2.jpg', '2024-03-03 14:09:19', '2024-03-03 14:09:19'),
(3, 'Mr.Chef 3', 'chef', '1709494783-team-3.jpg', '2024-03-03 14:09:43', '2024-03-03 14:09:43'),
(4, 'Mr.Chef 4', 'chef', '1709494802-team-4.jpg', '2024-03-03 14:10:02', '2024-03-03 14:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_id` varchar(255) DEFAULT NULL,
  `Items` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `item_id`, `Items`, `price`, `description`, `image`, `category`, `created_at`, `updated_at`) VALUES
(1, NULL, 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'breakfast', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(2, 'psum ipsum clita erat amet dolor justo diam', 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'breakfast', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(3, NULL, 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'breakfast', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(4, 'psum ipsum clita erat amet dolor justo diam', 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'breakfast', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(5, NULL, 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'breakfast', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(6, 'psum ipsum clita erat amet dolor justo diam', 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'breakfast', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(7, NULL, 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'breakfast', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(8, 'psum ipsum clita erat amet dolor justo diam', 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'breakfast', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(9, NULL, 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Dinner', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(10, 'psum ipsum clita erat amet dolor justo diam', 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Dinner', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(11, NULL, 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Dinner', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(12, 'psum ipsum clita erat amet dolor justo diam', 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Dinner', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(13, NULL, 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Dinner', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(14, 'psum ipsum clita erat amet dolor justo diam', 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Dinner', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(15, NULL, 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Dinner', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(16, 'psum ipsum clita erat amet dolor justo diam', 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Dinner', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(17, NULL, 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Lunch', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(18, 'psum ipsum clita erat amet dolor justo diam', 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Lunch', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(19, NULL, 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Lunch', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(20, 'psum ipsum clita erat amet dolor justo diam', 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Lunch', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(21, NULL, 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Lunch', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(22, 'psum ipsum clita erat amet dolor justo diam', 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Lunch', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(23, NULL, 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Lunch', '2024-03-03 16:31:51', '2024-03-03 16:32:44'),
(24, 'psum ipsum clita erat amet dolor justo diam', 'chicken burger', '150', 'ipsum ipsum clita erat amet dolor justo diam', '1709503311-menu-1.jpg', 'Lunch', '2024-03-03 16:31:51', '2024-03-03 16:32:44');

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
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2014_10_12_100000_create_password_resets_table', 1),
(37, '2019_08_19_000000_create_failed_jobs_table', 1),
(38, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(39, '2021_06_14_084524_create_site_info_table', 1),
(40, '2023_01_31_093857_create_cms_table', 1),
(41, '2023_02_06_080242_create_contact_infos_table', 1),
(42, '2023_02_06_091409_create_team_members_table', 1),
(43, '2024_03_02_182552_create_abouts_table', 1),
(44, '2024_03_02_182606_create_aboutimages_table', 1),
(45, '2024_03_02_182626_create_bookings_table', 1),
(46, '2024_03_02_182644_create_contacts_table', 1),
(47, '2024_03_02_182655_create_mchefs_table', 1),
(48, '2024_03_02_182707_create_menus_table', 1),
(49, '2024_03_02_182733_create_services_table', 1),
(50, '2024_03_02_184130_create_people_table', 1),
(51, '2024_03_03_103029_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ytlink` varchar(255) NOT NULL,
  `maplink` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `ytlink`, `maplink`, `created_at`, `updated_at`) VALUES
(3, 'https://www.youtube.com/embed/8YB-zGeNfD4?si=QOHtw_QcehnTznq5', 'https://www.youtube.com/embed/DWRcNpR6Kdc', '2024-03-04 13:54:35', '2024-03-04 14:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ANUSHREE BASAK', 'anushreebasak1764@gmail.com', NULL, '$2y$10$Wu7ubtdQgwHitpTrnhVCneSrFCu6Xs6lV0Y6qYUctz73GkJGmmSKO', NULL, '2024-03-05 02:00:07', '2024-03-05 02:00:07');

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Member1', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', '1709495731-testimonial-1.jpg', '0', '2024-03-03 14:25:31', '2024-03-03 14:25:31'),
(2, 'Member2', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', '1709495756-testimonial-2.jpg', '0', '2024-03-03 14:25:56', '2024-03-03 14:25:56'),
(3, 'Member3', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', '1709495777-testimonial-3.jpg', '0', '2024-03-03 14:26:17', '2024-03-03 14:26:17'),
(4, 'Member4', 'Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', '1709495793-testimonial-4.jpg', '0', '2024-03-03 14:26:33', '2024-03-03 14:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About1', '. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', '1709500493-testimonial-2.jpg', '0', '2024-03-03 15:44:53', '2024-03-04 05:40:56'),
(2, 'About2', 'Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', '1709500700-hero.png', '0', '2024-03-03 15:48:20', '2024-03-04 05:41:14'),
(3, 'About3', 'Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', '1709500723-hero.png', '0', '2024-03-03 15:48:43', '2024-03-04 05:41:36'),
(4, 'About4', '. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet', '1709500743-menu-1.jpg', '0', '2024-03-03 15:49:03', '2024-03-04 05:42:04'),
(5, 'about1', 'sed stet lorem sit clita duo justo magna dolore erat amet', '1709550601-bg-hero.jpg', '0', '2024-03-04 05:40:01', '2024-03-04 05:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `site_info`
--

CREATE TABLE `site_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `is_image` enum('Yes','No') NOT NULL DEFAULT 'No',
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_info`
--

INSERT INTO `site_info` (`id`, `key`, `is_image`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'No', 'Restorent', '2024-03-03 13:32:48', '2024-03-03 13:32:48'),
(2, 'site_logo', 'Yes', 'http://localhostimage/logo.webp', '2024-03-03 13:32:48', '2024-03-03 13:32:48'),
(3, 'fav_icon', 'Yes', 'http://localhostimage/logo.webp', '2024-03-03 13:32:48', '2024-03-03 13:32:48'),
(4, 'copy_right', 'No', '© © 2022 All Rights Reserved.', '2024-03-03 13:32:48', '2024-03-03 13:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE `team_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `job_position` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `status` enum('Active','InActive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` enum('Admin','Employee','User') NOT NULL DEFAULT 'User',
  `api_token` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `slug_name`, `email`, `phone`, `profile_picture`, `email_verified_at`, `password`, `user_type`, `api_token`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'john', 'admin@gmail.com', NULL, 'user.jpg', NULL, '$2y$10$0ZwD2fW995622dlCeUDgWe4/hpatLHi8oR1evzBBWPJFHtl.l5Sya', 'Admin', NULL, NULL, NULL, '2024-03-03 13:32:48', '2024-03-03 13:32:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutimages`
--
ALTER TABLE `aboutimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cms_key_unique` (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mchefs`
--
ALTER TABLE `mchefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `people_email_unique` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_info`
--
ALTER TABLE `site_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_slug_name_unique` (`slug_name`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutimages`
--
ALTER TABLE `aboutimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mchefs`
--
ALTER TABLE `mchefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `site_info`
--
ALTER TABLE `site_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team_members`
--
ALTER TABLE `team_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
