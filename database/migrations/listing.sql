-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2019 at 05:28 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$OVqSQtjSVqqXLfihubq/GeN6fpEL.skh5byacN.EWCZsBB31gd5I.', '2019-12-08 10:57:06', '2019-12-08 10:57:06');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `listing_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amenities` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `listing_id`, `amenities`, `created_at`, `updated_at`) VALUES
(12, 21, NULL, '2019-12-03 11:34:37', '2019-12-03 11:34:37'),
(13, 22, NULL, '2019-12-03 11:37:54', '2019-12-03 11:37:54'),
(15, 24, 'elevator,workspace,event', '2019-12-04 08:13:57', '2019-12-04 08:13:57'),
(16, 25, 'elevator,workspace', '2019-12-04 09:32:39', '2019-12-04 09:32:39'),
(17, 26, 'elevator,workspace', '2019-12-05 08:38:59', '2019-12-06 10:58:06'),
(18, 27, 'elevator,workspace,booking,wifi,parking_premise,parking_street,smoking', '2019-12-06 11:04:57', '2019-12-06 11:06:58'),
(19, 28, 'workspace', '2019-12-06 11:08:55', '2019-12-06 11:15:08'),
(20, 29, 'workspace', '2019-12-06 11:16:23', '2019-12-06 11:27:53'),
(21, 30, 'elevator,workspace', '2019-12-06 11:32:08', '2019-12-07 08:17:23'),
(22, 31, 'smoking', '2019-12-07 08:05:34', '2019-12-07 08:05:34'),
(23, 32, 'smoking', '2019-12-07 08:05:59', '2019-12-07 08:15:42'),
(24, 33, 'elevator,workspace', '2019-12-07 08:18:49', '2019-12-07 08:20:51'),
(27, 36, 'workspace,booking,parking_premise', '2019-12-08 10:14:10', '2019-12-08 10:14:10'),
(28, 37, 'workspace,booking,wifi', '2019-12-09 09:19:18', '2019-12-09 09:19:18'),
(29, 38, 'workspace,booking', '2019-12-09 09:20:48', '2019-12-09 09:20:48'),
(33, 42, 'smoking', '2019-12-09 10:00:24', '2019-12-09 10:00:24'),
(34, 43, 'smoking', '2019-12-09 10:00:25', '2019-12-09 10:00:25'),
(35, 44, 'workspace,booking', '2019-12-09 10:01:43', '2019-12-09 10:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hours`
--

CREATE TABLE `hours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `listing_id` bigint(20) UNSIGNED DEFAULT NULL,
  `monday_op` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monday_cl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuesday_op` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuesday_cl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wednesday_op` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wednesday_cl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thursday_op` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thursday_cl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friday_op` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friday_cl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saturday_op` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saturday_cl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunday_op` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunday_cl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hours`
--

INSERT INTO `hours` (`id`, `listing_id`, `monday_op`, `monday_cl`, `tuesday_op`, `tuesday_cl`, `wednesday_op`, `wednesday_cl`, `thursday_op`, `thursday_cl`, `friday_op`, `friday_cl`, `saturday_op`, `saturday_cl`, `sunday_op`, `sunday_cl`, `created_at`, `updated_at`) VALUES
(3, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-03 11:34:37', '2019-12-03 11:34:37'),
(4, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-03 11:37:54', '2019-12-03 11:37:54'),
(6, 24, '1 AM', '2 AM', NULL, NULL, '2 AM', 'Closed', NULL, NULL, NULL, NULL, NULL, NULL, 'Closed', 'Closed', '2019-12-04 08:13:58', '2019-12-04 08:13:58'),
(7, 25, NULL, NULL, NULL, NULL, NULL, NULL, '2 AM', '4 AM', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-04 09:32:40', '2019-12-04 09:32:40'),
(8, 26, 'Closed', 'Closed', '2 AM', '4 AM', '3 AM', '4 AM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-05 08:38:59', '2019-12-06 10:58:06'),
(9, 27, '3 AM', '3 AM', NULL, NULL, '2 AM', '1 AM', NULL, NULL, '2 AM', '1 AM', NULL, NULL, NULL, NULL, '2019-12-06 11:04:57', '2019-12-06 11:06:58'),
(10, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-06 11:08:55', '2019-12-06 11:15:08'),
(11, 29, '3 AM', NULL, NULL, NULL, NULL, 'Closed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-06 11:16:23', '2019-12-06 11:27:53'),
(12, 30, '2 AM', '3 AM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-06 11:32:08', '2019-12-07 08:17:23'),
(13, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 AM', '3 AM', NULL, NULL, NULL, NULL, '2019-12-07 08:05:59', '2019-12-07 08:15:43'),
(14, 33, NULL, NULL, NULL, NULL, NULL, NULL, 'Closed', 'Closed', '1 AM', '1 AM', NULL, NULL, NULL, NULL, '2019-12-07 08:18:50', '2019-12-07 08:20:51'),
(17, 36, '3 AM', '2 AM', NULL, NULL, NULL, NULL, '2 AM', '2 AM', NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-08 10:14:10', '2019-12-08 10:14:10'),
(18, 37, NULL, NULL, '1 AM', '2 AM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-09 09:19:18', '2019-12-09 09:19:18'),
(19, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1 AM', '2 AM', '2019-12-09 09:20:49', '2019-12-09 09:20:49'),
(23, 42, 'Closed', 'Closed', '1 AM', '4 AM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-09 10:00:25', '2019-12-09 10:00:25'),
(24, 43, 'Closed', 'Closed', '1 AM', '4 AM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-09 10:00:25', '2019-12-09 10:00:25'),
(25, 44, '3 AM', '5 AM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-09 10:01:43', '2019-12-09 10:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_id`, `admin_id`, `title`, `category`, `city`, `address`, `state`, `zipcode`, `image`, `description`, `phone`, `website`, `email`, `facebook`, `created_at`, `updated_at`) VALUES
(21, 1, NULL, 'ewr', 'Shops', 'Chicago', 'wer', 'wer', 'wer', '5de69caccccae.jpg', 'qwe', 'wqe', 'wqe', 'asif@y.c', 'wqe', '2019-12-03 11:34:36', '2019-12-03 11:34:36'),
(22, 1, NULL, 'vdfv', 'Restaurants', 'Chicago', 'sdf', 'asd', 'zxcxz', '5de69d72900f2.jpg', NULL, NULL, NULL, NULL, NULL, '2019-12-03 11:37:54', '2019-12-03 11:37:54'),
(24, 2, NULL, 'Rahman\'s Club', 'Eat & Drink', 'Chicago', '121/4', 'Dhaka`', '1209', '5de7bf25ab76b.jpg', 'Come & Drink', '1032101651', '/rahman', 'rahman@r.h', '/rahman319', '2019-12-04 08:13:57', '2019-12-04 08:13:57'),
(25, 2, NULL, 'Rahman Burger House', 'Eat & Drink', 'Dhaka', '16/4, Dhanmondi', 'Dhaka', '1209', '5de7d197a5b20.jpg', 'City\'s best burgur place.', '311.3', '/burger', 'asif@y.c', '/burger', '2019-12-04 09:32:39', '2019-12-04 09:32:39'),
(26, 1, NULL, 'Best Burger House', 'Hotels', 'Rajshahi', 'Dhanmondi 27', 'Dhaka, Bangladesh', '1219', '5dea889e7e430.jpg', 'Best Burger House in Town.', '01010101', '/asifur', 'asifur@y.c', '/asifur', '2019-12-05 08:38:59', '2019-12-06 10:58:06'),
(27, 1, NULL, 'Best Burger Home', 'Eat & Drink', 'Dhaka', 'Dhanmondi 32', 'Dhanmondi', '1209', '5dea8ab1ea9ba.jpg', 'You will find delicious burger here. Welcome to my world. Here you are.', '021203', '/asifur', 'asif@y.c', '/asifur', '2019-12-06 11:04:57', '2019-12-06 11:06:57'),
(28, 1, NULL, 'dfs', 'Hotels', 'Rajshahi', 'sdf', 'sdf', 'sdf', '5dea8b27a411f.jpg', 'fsd', 'dsf', 'sdf', 'asif@y.c', 'sdf', '2019-12-06 11:08:55', '2019-12-06 11:08:55'),
(29, 1, NULL, 'c', 'Restaurants', 'Khulna', 'xzc', 'zxc', 'xz', '5dea8ce797671.jpg', 'xzc', 'zx', 'xz', 'asif@y.c', 'xz', '2019-12-06 11:16:23', '2019-12-06 11:16:23'),
(30, 1, NULL, 'dfv', 'Shops', 'Magura', 'dfv', 'fdv', 'dfv', '5deaa31fe172a.jpg', 'vdf', 'fv', 'dfv', 'asif@y.c', 'dfv', '2019-12-06 11:32:08', '2019-12-06 12:51:11'),
(31, 1, NULL, 'sdfsdf', 'Hotels', 'Dhaka', 'sdf', 'dsf', 'sdfds', '5debb1ad94e82.jpg', 'dsfvd', 'gdf', 'dfg', 'asif@g.m', 'dfg', '2019-12-07 08:05:33', '2019-12-07 08:05:33'),
(32, 1, NULL, 'sdfsdf', 'Hotels', 'Dhaka', 'sdf', 'dsf', 'sdfds', '5debb3ebf305c.jpg', 'dsfvd', 'gdf', 'dfg', 'asif@g.m', 'dfg', '2019-12-07 08:05:59', '2019-12-07 08:15:07'),
(33, 1, NULL, 'sfdfdf', 'Shops', 'Select City', 'ssadsda', 'sadsad', 'asdsad', '5debb4c9a41c1.jpg', 'dfsfds', 'sdf', 'dfs', 'asif@y.c', 'dsfds', '2019-12-07 08:18:49', '2019-12-07 08:18:49'),
(36, 1, NULL, 'asiiff', 'Hotels', 'Khulna', 'dsfds', 'sdfds', 'sdf', '5ded215224908.jpg', 'sdfsdf', 'sdf', 'sdf', 'asif@y.c', 'sdf', '2019-12-08 10:14:10', '2019-12-08 10:14:10'),
(37, 6, NULL, 'sadasdada', 'Hotels', 'Khulna', 'asdsad', 'asdsd', 'asdsadsa', '5dee65f6b6c55.jpg', 'asdsadsadsadsadsa', 'sadsad', 'sadsa', 'asif@y.c', 'asdsad', '2019-12-09 09:19:18', '2019-12-09 09:19:18'),
(38, 6, NULL, 'asdaasasd', 'Restaurants', 'Khulna', 'asdsa', 'asd', 'asdsa', '5dee6650346e9.jpg', 'sadsadsasad', 'asdsa', 'dsadsa', 'rahman@r.h', 'sad', '2019-12-09 09:20:48', '2019-12-09 09:20:48'),
(42, 7, NULL, 'fdgfdgf', 'Shops', 'Chittagong', 'dfgfd', 'dfgf', 'dfgf', '5dee6f98bbbba.jpg', 'dfgf', 'fdg', 'fdgfdg', 'kingarthurluis4@gmail.com', 'dfgf', '2019-12-09 10:00:24', '2019-12-09 10:00:24'),
(43, 7, NULL, 'fdgfdgf', 'Shops', 'Chittagong', 'dfgfd', 'dfgf', 'dfgf', '5dee6f999bdcb.jpg', 'dfgf', 'fdg', 'fdgfdg', 'kingarthurluis4@gmail.com', 'dfgf', '2019-12-09 10:00:25', '2019-12-09 10:00:25'),
(44, 7, NULL, 'dsfds', 'Restaurants', 'Khulna', 'dsfd', 'sdfdf', 'dsfdsf', '5dee6fe6f18b7.jpg', 'dsfds', 'sdfdsf', 'dsfds', 'kingarthurluis4@gmail.com', 'dsfdsf', '2019-12-09 10:01:42', '2019-12-09 10:01:42');

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2019_11_11_171318_create_admins_table', 1),
(14, '2019_11_27_172629_create_profiles_table', 1),
(15, '2019_11_29_155916_create_listings_table', 1),
(16, '2019_11_30_170140_create_amenities_table', 1),
(17, '2019_11_30_171227_create_hours_table', 1),
(18, '2019_12_02_175143_create_prices_table', 1);

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
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `listing_id` bigint(20) UNSIGNED DEFAULT NULL,
  `item_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `listing_id`, `item_title`, `item_description`, `item_price`, `created_at`, `updated_at`) VALUES
(11, 21, NULL, NULL, NULL, NULL, NULL),
(12, 22, NULL, NULL, NULL, NULL, NULL),
(15, 24, 'Soft Drink', 'Mountain Dew', '3', NULL, NULL),
(16, 24, 'Soft Drink', '7 UP', '3', NULL, NULL),
(17, 25, 'Burger', 'Spicy', '5', NULL, NULL),
(18, 26, 'Drinks', 'dew', '3', NULL, '2019-12-06 10:58:06'),
(19, 26, 'Drinks', 'dew', '3', NULL, '2019-12-06 10:58:06'),
(20, 27, 'Drinks', 'Dew', '1', NULL, '2019-12-06 11:06:58'),
(21, 28, NULL, NULL, NULL, '2019-12-06 11:08:55', '2019-12-06 11:15:08'),
(22, 28, NULL, NULL, NULL, '2019-12-06 11:08:55', '2019-12-06 11:15:08'),
(23, 28, NULL, NULL, NULL, '2019-12-06 11:08:55', '2019-12-06 11:15:08'),
(24, 29, 'cc', 'cccc', 'ccc', '2019-12-06 11:16:23', '2019-12-06 11:27:53'),
(25, 29, 'cc', 'cccc', 'ccc', '2019-12-06 11:16:23', '2019-12-06 11:27:53'),
(26, 30, '55555', '222', '333', '2019-12-06 11:32:08', '2019-12-06 12:51:12'),
(27, 30, 'dfdfdfdf', 'dfdf', 'dfdfd', '2019-12-06 11:32:08', '2019-12-07 08:17:23'),
(28, 32, 'dfg', 'dfg', 'dfg', '2019-12-07 08:05:59', '2019-12-07 08:05:59'),
(29, 32, '2222', '222', '222', '2019-12-07 08:05:59', '2019-12-07 08:15:43'),
(30, 33, 'sdfd', 'sdfdsf', 'sdfds', '2019-12-07 08:18:49', '2019-12-07 08:18:49'),
(31, 33, 'sdfdsfsdf', 'dsfdsf', 'sdfdsf', '2019-12-07 08:18:49', '2019-12-07 08:20:51'),
(32, 33, 'dsfdsf', 'sdfdsf', 'sdfsd', '2019-12-07 08:18:49', '2019-12-07 08:18:49'),
(33, 33, 'qqq', 'qqq', 'qqq', '2019-12-07 08:18:50', '2019-12-07 08:18:50'),
(34, 33, 'qeeeqwq', '131', '1232', '2019-12-07 08:18:50', '2019-12-07 08:18:50'),
(37, 36, 'sdf', 'sdf', 'sdf', '2019-12-08 10:14:10', '2019-12-08 10:14:10'),
(38, 36, 'sdfsss', 'ssss', 'ss', '2019-12-08 10:14:10', '2019-12-08 10:14:10'),
(39, 37, 'asd', 'sadsadasd', 'sadsadsa', '2019-12-09 09:19:18', '2019-12-09 09:19:18'),
(40, 37, 'aaaaa', 'aaaa', 'aaaa', '2019-12-09 09:19:18', '2019-12-09 09:19:18'),
(41, 38, 'asd', 'asdsa', 'asdsa', '2019-12-09 09:20:48', '2019-12-09 09:20:48'),
(42, 38, 'sad', 'asdasdsa', 'asdsad', '2019-12-09 09:20:48', '2019-12-09 09:20:48'),
(43, 38, 'sadsa', 'asdsad', 'sadasd', '2019-12-09 09:20:48', '2019-12-09 09:20:48'),
(44, 38, 'asdsad', 'sadsad', 'sadsa', '2019-12-09 09:20:48', '2019-12-09 09:20:48'),
(48, 42, 'dfgfd', 'fdgf', 'dfgfdg', '2019-12-09 10:00:25', '2019-12-09 10:00:25'),
(49, 43, 'dfgfd', 'fdgf', 'dfgfdg', '2019-12-09 10:00:25', '2019-12-09 10:00:25'),
(50, 44, 'dsf', 'dsfdsf', 'dsfds', '2019-12-09 10:01:43', '2019-12-09 10:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `full_name`, `number`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Md Asif', '3213113', '5de9263f6cc9b.jpg', '2019-12-03 07:31:38', '2019-12-05 09:46:07'),
(2, 2, 'Md Rahman', '+654165651', '5de7cac523e74.jpg', '2019-12-04 08:03:24', '2019-12-04 09:03:33'),
(6, 6, 'Asif Rahman', '132132', '5dee65c9d011c.jpg', '2019-12-09 09:17:36', '2019-12-09 09:18:33'),
(7, 7, 'dsadsa', 'asdsa', '5dee6f73698e9.jpg', '2019-12-09 09:59:13', '2019-12-09 09:59:47');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'asif', 'asif@y.c', NULL, '$2y$10$17OkCbLYSJUy806CT1cwyezvpEwLOv4qW/e.5Oj1JilDN5rP9z4b6', NULL, '2019-12-03 07:31:37', '2019-12-03 07:31:37'),
(2, 'Rahman', 'rahman@r.h', NULL, '$2y$10$4u6PgbRHIM7Ojn6Qr4MxOu4B/HMesE3wkjNzyEVQbnhjE3ArRqply', NULL, '2019-12-04 08:03:24', '2019-12-04 08:03:24'),
(6, 'asifrahman', 'asif@g.m', NULL, '$2y$10$XKDXfE5XXUXljmSa7C1Ft.p3rSMkvvCqIJTrarWMlFlo2eWhHhopK', NULL, '2019-12-09 09:17:35', '2019-12-09 09:17:35'),
(7, 'asifur', 'asif@y.cerr', NULL, '$2y$10$kzrQy2I5Hy67OPuWpyiuwuMXjkUGMhlKeyq4uHU5uF3Vw6nhUMozW', NULL, '2019-12-09 09:59:13', '2019-12-09 09:59:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amenities_listing_id_foreign` (`listing_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hours`
--
ALTER TABLE `hours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hours_listing_id_foreign` (`listing_id`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listings_user_id_foreign` (`user_id`),
  ADD KEY `listings_admin_id_foreign` (`admin_id`);

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
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prices_listing_id_foreign` (`listing_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hours`
--
ALTER TABLE `hours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `amenities`
--
ALTER TABLE `amenities`
  ADD CONSTRAINT `amenities_listing_id_foreign` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hours`
--
ALTER TABLE `hours`
  ADD CONSTRAINT `hours_listing_id_foreign` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `listings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_listing_id_foreign` FOREIGN KEY (`listing_id`) REFERENCES `listings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
