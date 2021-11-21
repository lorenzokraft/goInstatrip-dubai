-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2021 at 11:05 AM
-- Server version: 8.0.27-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourist`
--

-- --------------------------------------------------------

--
-- Table structure for table `addoninclusions`
--

CREATE TABLE `addoninclusions` (
  `id` int NOT NULL,
  `addon_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `product_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `addoninclusions`
--

INSERT INTO `addoninclusions` (`id`, `addon_id`, `product_id`, `created_at`, `updated_at`) VALUES
(5, '1', 15, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(6, '2', 15, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(7, '1', 19, '2021-11-19 06:04:28', '2021-11-19 06:04:28'),
(8, '2', 19, '2021-11-19 06:04:28', '2021-11-19 06:04:28'),
(9, '3', 19, '2021-11-19 06:04:29', '2021-11-19 06:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` int NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `value` int DEFAULT NULL,
  `title` varchar(255) DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `addons`
--

INSERT INTO `addons` (`id`, `type`, `value`, `title`, `created_at`, `updated_at`) VALUES
(1, 'persons-select', 1, 'One person sharing room(double or triple occupancy room)', '2021-11-19 04:15:08', '2021-11-19 04:15:08'),
(2, 'insurance-select', 1, '1 Person', '2021-11-19 04:24:50', '2021-11-19 04:24:50'),
(3, 'seat-select', 1, '1 Seat', '2021-11-19 06:03:53', '2021-11-19 06:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tour_id` bigint UNSIGNED NOT NULL,
  `user_ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `persons_select` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_select` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addon_select1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addon_select2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `checkout_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `tour_id`, `user_ip`, `name`, `image`, `persons_select`, `insurance_select`, `addon_select1`, `addon_select2`, `price`, `payment_option`, `type`, `status`, `created_at`, `updated_at`, `checkout_type`) VALUES
(79, '2', 3250, '127.0.0.1', 'Test Tour', '1636916944.jpg', '3', '2', '1', '1', '3250', 'stripe', NULL, '1', '2021-11-18 19:46:10', '2021-11-18 19:46:10', 'stripe'),
(80, '2', 1, '127.0.0.1', 'One month Visa', '1636980718.jpg', NULL, NULL, NULL, NULL, '750', 'stripe', 'visa', '0', '2021-11-18 20:01:53', '2021-11-18 20:01:53', 'stripe'),
(81, '2', 1250, '127.0.0.1', 'Test Tour', '1636916944.jpg', '1', '1', '0', '0', '1250', 'stripe', 'tour', '1', '2021-11-18 20:03:17', '2021-11-18 20:03:17', 'stripe');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inclusions`
--

CREATE TABLE `inclusions` (
  `id` bigint UNSIGNED NOT NULL,
  `uaeproduct_id` bigint UNSIGNED NOT NULL,
  `inclusion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inclusions`
--

INSERT INTO `inclusions` (`id`, `uaeproduct_id`, `inclusion`, `created_at`, `updated_at`) VALUES
(1, 2, 'inclusion 1', '2021-11-14 15:09:04', '2021-11-14 15:09:04'),
(2, 2, 'inclusion 2', '2021-11-14 15:09:04', '2021-11-14 15:09:04'),
(3, 2, 'inclusion 3', '2021-11-14 15:09:04', '2021-11-14 15:09:04'),
(4, 2, 'inclusion 4', '2021-11-14 15:09:04', '2021-11-14 15:09:04'),
(5, 2, 'inclusion 5', '2021-11-14 15:09:04', '2021-11-14 15:09:04'),
(6, 2, 'inclusion 6', '2021-11-14 15:09:04', '2021-11-14 15:09:04'),
(7, 2, 'inclusion 7', '2021-11-14 15:09:04', '2021-11-14 15:09:04'),
(8, 2, 'inclusion 8', '2021-11-14 15:09:04', '2021-11-14 15:09:04'),
(9, 2, 'inclusion 9', '2021-11-14 15:09:04', '2021-11-14 15:09:04'),
(10, 2, 'inclusion 10', '2021-11-14 15:09:04', '2021-11-14 15:09:04'),
(11, 4, 'dsd', '2021-11-14 16:10:50', '2021-11-14 16:10:50'),
(12, 5, 'dsd', '2021-11-14 16:13:07', '2021-11-14 16:13:07'),
(13, 6, 'Temp 3', '2021-11-14 16:17:24', '2021-11-14 16:17:24'),
(14, 6, 'Temp 3', '2021-11-14 16:17:24', '2021-11-14 16:17:24'),
(15, 6, 'Temp 3', '2021-11-14 16:17:24', '2021-11-14 16:17:24'),
(16, 6, 'Temp 3', '2021-11-14 16:17:24', '2021-11-14 16:17:24'),
(17, 7, 'Temp 3', '2021-11-14 16:24:01', '2021-11-14 16:24:01'),
(18, 7, 'Temp 3', '2021-11-14 16:24:01', '2021-11-14 16:24:01'),
(19, 7, 'Temp 3', '2021-11-14 16:24:01', '2021-11-14 16:24:01'),
(20, 7, 'Temp 3', '2021-11-14 16:24:01', '2021-11-14 16:24:01'),
(21, 7, 'Temp 3', '2021-11-14 16:24:01', '2021-11-14 16:24:01'),
(22, 7, 'Temp 3', '2021-11-14 16:24:01', '2021-11-14 16:24:01'),
(23, 7, NULL, '2021-11-14 16:24:01', '2021-11-14 16:24:01'),
(24, 7, NULL, '2021-11-14 16:24:01', '2021-11-14 16:24:01'),
(25, 7, NULL, '2021-11-14 16:24:01', '2021-11-14 16:24:01'),
(26, 7, NULL, '2021-11-14 16:24:01', '2021-11-14 16:24:01'),
(27, 8, 'Temp 3', '2021-11-14 16:24:49', '2021-11-14 16:24:49'),
(28, 8, 'Temp 3', '2021-11-14 16:24:49', '2021-11-14 16:24:49'),
(29, 8, 'Temp 3', '2021-11-14 16:24:49', '2021-11-14 16:24:49'),
(30, 8, 'Temp 3', '2021-11-14 16:24:49', '2021-11-14 16:24:49'),
(31, 8, 'Temp 3', '2021-11-14 16:24:49', '2021-11-14 16:24:49'),
(32, 8, 'Temp 3', '2021-11-14 16:24:49', '2021-11-14 16:24:49'),
(33, 8, NULL, '2021-11-14 16:24:49', '2021-11-14 16:24:49'),
(34, 8, NULL, '2021-11-14 16:24:49', '2021-11-14 16:24:49'),
(35, 8, NULL, '2021-11-14 16:24:49', '2021-11-14 16:24:49'),
(36, 8, NULL, '2021-11-14 16:24:49', '2021-11-14 16:24:49'),
(37, 9, 'Temp 3', '2021-11-14 16:26:29', '2021-11-14 16:26:29'),
(38, 9, 'Temp 3', '2021-11-14 16:26:29', '2021-11-14 16:26:29'),
(39, 9, 'Temp 3', '2021-11-14 16:26:29', '2021-11-14 16:26:29'),
(40, 9, 'Temp 3', '2021-11-14 16:26:29', '2021-11-14 16:26:29'),
(41, 9, 'Temp 3', '2021-11-14 16:26:29', '2021-11-14 16:26:29'),
(42, 9, 'Temp 3', '2021-11-14 16:26:29', '2021-11-14 16:26:29'),
(43, 9, NULL, '2021-11-14 16:26:29', '2021-11-14 16:26:29'),
(44, 9, NULL, '2021-11-14 16:26:29', '2021-11-14 16:26:29'),
(45, 9, NULL, '2021-11-14 16:26:29', '2021-11-14 16:26:29'),
(46, 9, NULL, '2021-11-14 16:26:29', '2021-11-14 16:26:29'),
(47, 10, 'Temp 3', '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(48, 10, 'Temp 3', '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(49, 10, 'Temp 3', '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(50, 10, 'Temp 3', '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(51, 10, 'Temp 3', '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(52, 10, 'Temp 3', '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(53, 10, NULL, '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(54, 10, NULL, '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(55, 10, NULL, '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(56, 10, NULL, '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(57, 11, 'FLIGHT TICKET', '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(58, 11, 'ARRIVAL COFFEE', '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(59, 11, 'TOUR GUIDE', '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(60, 11, 'PARTY TICKET', '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(61, 11, NULL, '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(62, 11, NULL, '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(63, 11, NULL, '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(64, 11, NULL, '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(65, 11, NULL, '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(66, 11, NULL, '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(67, 12, 'Hiking', '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(68, 12, 'Biking', '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(69, 12, 'Mountain CLimbing', '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(70, 12, 'some inclusions', '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(71, 12, NULL, '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(72, 12, NULL, '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(73, 12, NULL, '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(74, 12, NULL, '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(75, 12, NULL, '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(76, 12, NULL, '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(77, 13, NULL, '2021-11-19 04:48:49', '2021-11-19 04:48:49'),
(78, 13, NULL, '2021-11-19 04:48:49', '2021-11-19 04:48:49'),
(79, 13, NULL, '2021-11-19 04:48:49', '2021-11-19 04:48:49'),
(80, 13, NULL, '2021-11-19 04:48:49', '2021-11-19 04:48:49'),
(81, 13, NULL, '2021-11-19 04:48:49', '2021-11-19 04:48:49'),
(82, 13, NULL, '2021-11-19 04:48:49', '2021-11-19 04:48:49'),
(83, 13, NULL, '2021-11-19 04:48:49', '2021-11-19 04:48:49'),
(84, 13, NULL, '2021-11-19 04:48:49', '2021-11-19 04:48:49'),
(85, 13, NULL, '2021-11-19 04:48:49', '2021-11-19 04:48:49'),
(86, 13, NULL, '2021-11-19 04:48:49', '2021-11-19 04:48:49'),
(87, 14, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(88, 14, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(89, 14, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(90, 14, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(91, 14, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(92, 14, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(93, 14, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(94, 14, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(95, 14, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(96, 14, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(97, 15, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(98, 15, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(99, 15, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(100, 15, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(101, 15, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(102, 15, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(103, 15, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(104, 15, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(105, 15, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(106, 15, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(107, 19, NULL, '2021-11-19 06:04:28', '2021-11-19 06:04:28'),
(108, 19, NULL, '2021-11-19 06:04:28', '2021-11-19 06:04:28'),
(109, 19, NULL, '2021-11-19 06:04:28', '2021-11-19 06:04:28'),
(110, 19, NULL, '2021-11-19 06:04:28', '2021-11-19 06:04:28'),
(111, 19, NULL, '2021-11-19 06:04:28', '2021-11-19 06:04:28'),
(112, 19, NULL, '2021-11-19 06:04:28', '2021-11-19 06:04:28'),
(113, 19, NULL, '2021-11-19 06:04:28', '2021-11-19 06:04:28'),
(114, 19, NULL, '2021-11-19 06:04:28', '2021-11-19 06:04:28'),
(115, 19, NULL, '2021-11-19 06:04:28', '2021-11-19 06:04:28'),
(116, 19, NULL, '2021-11-19 06:04:28', '2021-11-19 06:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `indiatours`
--

CREATE TABLE `indiatours` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `itineries`
--

CREATE TABLE `itineries` (
  `id` bigint UNSIGNED NOT NULL,
  `uaeproduct_id` bigint UNSIGNED DEFAULT NULL,
  `meetuptime` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meetupday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tourday` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `itinerydesc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `itineries`
--

INSERT INTO `itineries` (`id`, `uaeproduct_id`, `meetuptime`, `meetupday`, `tourday`, `itinerydesc`, `created_at`, `updated_at`) VALUES
(1, 9, NULL, 'Temp 3', 'Temp 3', 'Temp 3', '2021-11-14 16:26:29', '2021-11-14 16:26:29'),
(2, 9, NULL, 'Temp 3', 'Temp 3', 'Temp 3', '2021-11-14 16:26:29', '2021-11-14 16:26:29'),
(3, 10, NULL, 'Temp 3', 'Temp 3', 'Temp 3', '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(4, 10, NULL, 'Temp 3', 'Temp 3', 'Temp 3', '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(5, 10, NULL, NULL, NULL, NULL, '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(6, 10, NULL, NULL, NULL, NULL, '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(7, 10, NULL, NULL, NULL, NULL, '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(8, 11, NULL, 'MONDAY', 'DAY 1', 'SOME CONTENT WHERE WE WILL MEET', '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(9, 11, NULL, 'TUESDAY', 'DAY 2', 'LET US MEET HERE', '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(10, 11, NULL, NULL, NULL, NULL, '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(11, 11, NULL, NULL, NULL, NULL, '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(12, 11, NULL, NULL, NULL, NULL, '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(13, 12, NULL, NULL, NULL, NULL, '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(14, 12, NULL, 'Monday', 'TOur Day 1', 'SOme itinery', '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(15, 12, NULL, 'Tuesday', 'Day 2', 'some itinery', '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(16, 12, NULL, NULL, NULL, NULL, '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(17, 12, NULL, NULL, NULL, NULL, '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(18, 14, NULL, NULL, NULL, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(19, 14, NULL, NULL, NULL, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(20, 14, NULL, NULL, NULL, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(21, 14, NULL, NULL, NULL, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(22, 14, NULL, NULL, NULL, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(23, 15, NULL, NULL, NULL, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(24, 15, NULL, NULL, NULL, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(25, 15, NULL, NULL, NULL, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(26, 15, NULL, NULL, NULL, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(27, 15, NULL, NULL, NULL, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(28, 19, NULL, NULL, NULL, NULL, '2021-11-19 06:04:29', '2021-11-19 06:04:29'),
(29, 19, NULL, NULL, NULL, NULL, '2021-11-19 06:04:29', '2021-11-19 06:04:29'),
(30, 19, NULL, NULL, NULL, NULL, '2021-11-19 06:04:29', '2021-11-19 06:04:29'),
(31, 19, NULL, NULL, NULL, NULL, '2021-11-19 06:04:29', '2021-11-19 06:04:29'),
(32, 19, NULL, NULL, NULL, NULL, '2021-11-19 06:04:29', '2021-11-19 06:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(16, '2019_08_19_000000_create_failed_jobs_table', 1),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(18, '2021_10_26_101919_create_sessions_table', 1),
(19, '2021_10_30_034254_create_uaetours_table', 1),
(20, '2021_10_30_045639_create_indiatours_table', 1),
(21, '2021_10_30_085201_create_products_table', 1),
(23, '2021_10_31_072529_add_date_table', 1),
(27, '2021_10_31_062754_create_uaetoursproducts_table', 2),
(28, '2021_11_14_180719_create_itineries_table', 2),
(29, '2021_11_14_180751_create_inclusions_table', 2),
(30, '2021_11_15_200301_create_carts_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `vdays` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `vdays`, `price`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(1, '30 Days Visa', '750', 'One month Visa', '1636980718.jpg', '2021-11-15 08:51:58', '2021-11-15 08:51:58'),
(2, '90 Days Visa', '2500', '90 Days Visa for visitors', '1637183889.jpg', '2021-11-17 17:18:09', '2021-11-17 17:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JZSj4mUDFwih8UXf7G5vlpeGWYcMfnJ5y5HhdEUx', 2, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.45 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoibzgwbDFxVDllTUVwYmJYSERweTNVRzlNWXR0THNpSDBHclR2VUJ4eSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90b3Vycy8xOSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6Njoid2hvYW1pIjtzOjM6InVhZSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJDRFa3RENldnLy92SEtwZ0ZkRzNMOWUwTGZ6eUNtMk41TGxwQkE3NWZWWTh5THdZRDM5bHZ5IjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQ0RWt0RDZXZy8vdkhLcGdGZEczTDllMExmenlDbTJONUxscEJBNzVmVlk4eUx3WUQzOWx2eSI7fQ==', 1637312697);

-- --------------------------------------------------------

--
-- Table structure for table `Tour_itinery`
--

CREATE TABLE `Tour_itinery` (
  `ID` bigint NOT NULL,
  `meetup_time` varchar(300) NOT NULL,
  `meetup_day` varchar(300) NOT NULL,
  `tour_day` varchar(300) NOT NULL,
  `itinery_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `uaetours`
--

CREATE TABLE `uaetours` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uaetoursproducts`
--

CREATE TABLE `uaetoursproducts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ldesc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `days` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotelimage1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotelimage2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uaetoursproducts`
--

INSERT INTO `uaetoursproducts` (`id`, `title`, `slug`, `date`, `price`, `desc`, `status`, `image`, `ldesc`, `days`, `hotelimage1`, `hotelimage2`, `created_at`, `updated_at`) VALUES
(1, 'Test Tour', 'Newly Added', '20 to 40', '750', 'dsdsdsdsdsd', 'Acive', '1636916545.jpg', 'Short Desc', '3 Days 2 Nights', NULL, NULL, '2021-11-14 15:02:25', '2021-11-14 15:02:25'),
(2, 'Test Tour', 'Newly Added', '20 to 40', '750', 'dsdsdsdsdsd', 'Acive', '1636916944.jpg', 'Short Desc', '3 Days 2 Nights', NULL, NULL, '2021-11-14 15:09:04', '2021-11-14 15:09:04'),
(3, 'db check', 'ssdf', 'dsdfsf', '2', 'sdfsdf', 'Acive', '1636920209.jpg', NULL, 'sdfsdf', NULL, NULL, '2021-11-14 16:03:29', '2021-11-14 16:03:29'),
(4, 'Test 3', 'Newly Added', '2020-02', '750', 'sdsds', 'Sold Out', '1636920650.jpg', 'sdsdsd', '3 Days 2 Nights', NULL, NULL, '2021-11-14 16:10:50', '2021-11-14 16:10:50'),
(5, 'Test 3', 'Newly Added', '2020-02', '750', 'sdsds', 'Sold Out', '1636920787.jpg', 'sdsdsd', '3 Days 2 Nights', NULL, NULL, '2021-11-14 16:13:07', '2021-11-14 16:13:07'),
(6, 'Temp 3', 'Temp 3', 'June to November 40', '750', 'Temp 3', 'Acive', '1636921044.jpg', 'Temp 3', 'Temp 3', NULL, NULL, '2021-11-14 16:17:24', '2021-11-14 16:17:24'),
(7, 'Temp 3', 'Temp 3', 'June to December  40', '250', 'Temp 3', 'Acive', '1636921441.jpg', 'Temp 3', '3 Days 2 Nights', NULL, NULL, '2021-11-14 16:24:01', '2021-11-14 16:24:01'),
(8, 'Temp 3', 'Temp 3', 'June to December  40', '250', 'Temp 3', 'Acive', '1636921489.jpg', 'Temp 3', '3 Days 2 Nights', NULL, NULL, '2021-11-14 16:24:49', '2021-11-14 16:24:49'),
(9, 'Temp 3', 'Temp 3', 'June to December  40', '250', 'Temp 3', 'Acive', '1636921589.jpg', 'Temp 3', '3 Days 2 Nights', NULL, NULL, '2021-11-14 16:26:29', '2021-11-14 16:26:29'),
(10, 'Temp 3', 'Temp 3', 'June to December  40', '250', 'Temp 3', 'Acive', '1636921625.jpg', 'Temp 3', '3 Days 2 Nights', NULL, NULL, '2021-11-14 16:27:05', '2021-11-14 16:27:05'),
(11, 'TOUR', 'Newly Added', 'January 5th - January 10th', '750', 'SHORT', 'Acive', '1636966470.jpg', 'LONG DESC', '3 Days 2 Nights', NULL, NULL, '2021-11-15 04:54:30', '2021-11-15 04:54:30'),
(12, 'Sample tour 3', 'Test Tour for David', 'January 5th - January 10th', '750', 'some description', 'Acive', '1637185003.jpg', 'Some long content', '3 Days 2 Nights', NULL, NULL, '2021-11-17 17:36:43', '2021-11-17 17:36:43'),
(13, 'qqqqq', 'qqqqqqqq', '2017 / 2021', '1000', '222222', 'Acive', '1637308129.png', NULL, '4', NULL, NULL, '2021-11-19 04:48:49', '2021-11-19 04:48:49'),
(14, 'qqqqq', 'qqqqqqqq', '2017 / 2021', '1000', '222222', 'Acive', '1637308197.png', NULL, '4', NULL, NULL, '2021-11-19 04:49:57', '2021-11-19 04:49:57'),
(15, 'qqqqqqwe', 'qqqqq', '2018 / 2021', '1000', NULL, 'Select Status', '1637308808.png', NULL, '111', NULL, NULL, '2021-11-19 05:00:08', '2021-11-19 05:00:08'),
(16, '11', '11', '111', '1000', 'ddddddd', 'Acive', '1637312398.png', NULL, '11', NULL, NULL, '2021-11-19 05:59:58', '2021-11-19 05:59:58'),
(17, '11', '11', '111', '1000', 'ddddddd', 'Acive', '1637312418.png', NULL, '11', NULL, NULL, '2021-11-19 06:00:18', '2021-11-19 06:00:18'),
(18, '11', '11', '111', '1000', 'ddddddd', 'Acive', '1637312450.png', NULL, '11', NULL, NULL, '2021-11-19 06:00:50', '2021-11-19 06:00:50'),
(19, 'sssssss', 'sssssss', '2017 / 2021', '1000', 'ssss', 'Acive', '1637312668.png', NULL, 'ssssssssss', NULL, NULL, '2021-11-19 06:04:28', '2021-11-19 06:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '1', '0529564513', 'Dubai', NULL, '$2y$10$DU3LuRDtjYSMs0qrh7FKtebuEI7XapeGHh4vJ/ADwbmcr.3lQFq52', NULL, NULL, NULL, NULL, NULL, '2021-11-11 06:00:40', '2021-11-11 06:00:40'),
(2, 'Heinrich Smith Ondeyo', 'smithheinrich254@gmail.com', '1', '0746273465', '123, Washingtom', NULL, '$2y$10$4EktD6Wg//vHKpgFdG3L9e0LfzyCm2N5LlpBA75fVY8yLwYD39lvy', NULL, NULL, NULL, NULL, NULL, '2021-11-18 18:45:15', '2021-11-18 18:45:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addoninclusions`
--
ALTER TABLE `addoninclusions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inclusions`
--
ALTER TABLE `inclusions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indiatours`
--
ALTER TABLE `indiatours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itineries`
--
ALTER TABLE `itineries`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `Tour_itinery`
--
ALTER TABLE `Tour_itinery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `uaetours`
--
ALTER TABLE `uaetours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uaetoursproducts`
--
ALTER TABLE `uaetoursproducts`
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
-- AUTO_INCREMENT for table `addoninclusions`
--
ALTER TABLE `addoninclusions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inclusions`
--
ALTER TABLE `inclusions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `indiatours`
--
ALTER TABLE `indiatours`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `itineries`
--
ALTER TABLE `itineries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Tour_itinery`
--
ALTER TABLE `Tour_itinery`
  MODIFY `ID` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uaetours`
--
ALTER TABLE `uaetours`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uaetoursproducts`
--
ALTER TABLE `uaetoursproducts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
