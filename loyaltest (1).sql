-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 01:56 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loyaltest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_comment`
--

CREATE TABLE `admin_comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_comment`
--

INSERT INTO `admin_comment` (`id`, `admin_id`, `game_key`, `admin_comment`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '5f63085b9818c', 'heloo', '0000-00-00 00:00:00', NULL),
(2, 'admin@gmail.com', '5f63085b9818c', 'your game is over.game is finished', NULL, NULL),
(3, 'admin@gmail.com', '5f63085b9818c', 'hello this is wrong this is right here right now', NULL, NULL),
(4, 'admin@gmail.com', '5f63085b9818c', 'hello this is wrong this is right here right now', NULL, NULL),
(5, 'admin@gmail.com', '5f63085b9818c', 'kdsnfkjdsn sdfjiniksjdbf sdifnshjdf ', NULL, NULL),
(6, 'admin@gmail.com', '5f64540473ccf', 'hello', '2020-09-18 01:43:19', '2020-09-18 01:43:19');

-- --------------------------------------------------------

--
-- Table structure for table `amounts`
--

CREATE TABLE `amounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(8,2) NOT NULL,
  `prize` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `our_fees` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amounts`
--

INSERT INTO `amounts` (`id`, `amount`, `prize`, `created_at`, `updated_at`, `our_fees`) VALUES
(1, 2.50, 4.50, '2020-09-11 23:39:36', '2020-09-11 23:39:36', 0.20),
(2, 5.00, 9.00, '2020-09-11 23:39:36', '2020-09-11 23:39:36', 0.20),
(3, 10.00, 18.00, '2020-09-11 23:39:36', '2020-09-11 23:39:36', 0.20),
(4, 15.00, 27.00, '2020-09-11 23:39:36', '2020-09-11 23:39:36', 0.20);

-- --------------------------------------------------------

--
-- Table structure for table `assign_content_creators`
--

CREATE TABLE `assign_content_creators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gamername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uniqkey` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_create_amount` double(8,2) NOT NULL,
  `code_create_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `codecreators`
--

CREATE TABLE `codecreators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codecreator_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codecreator_amount` double(8,2) NOT NULL,
  `codecreator_uniqid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `codecreator_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `completed_games_list`
--

CREATE TABLE `completed_games_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gamername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gamemode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vs_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `server` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `console` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmation` int(11) NOT NULL,
  `confirmation_game_enter` int(11) NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_confirm` int(11) NOT NULL,
  `dispute` int(11) NOT NULL,
  `dispute_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dispute_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_over` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `result` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prize` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sqard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gamer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epicid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valorantid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epic_profile_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `completed_games_list`
--

INSERT INTO `completed_games_list` (`id`, `gamername`, `gamemode`, `vs_type`, `server`, `amount`, `console`, `game_key`, `confirmation`, `confirmation_game_enter`, `score`, `score_confirm`, `dispute`, `dispute_time`, `dispute_image`, `game_over`, `created_at`, `updated_at`, `result`, `prize`, `sqard`, `gamer_id`, `epicid`, `valorantid`, `epic_profile_id`, `public`) VALUES
(3, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'Console', '5f5c897ebeed7', 1, 1, '66', 0, 0, '2020-09-12 08:41:27', '5f5c897ebeed7_4.jpg', 1, '2020-09-12 03:11:13', '2020-09-12 03:12:25', 'L', '4.5', 'Team 1', NULL, 'alpesh', '1216', NULL, 0),
(4, 'test@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'Console', '5f5c897ebeed7', 1, 1, '666', 0, 0, '2020-09-12 08:41:13', '5f5c897ebeed7_3.png', 1, '2020-09-12 03:11:13', '2020-09-12 03:12:25', 'W', '4.5', 'Team 2', NULL, 'alpeshd', '85', NULL, 0),
(5, 'test@gmail.com', 'Valorant', '1v1', 'EU', 5.00, 'PC', '5f5c8b9a56e37', 1, 1, '5', 1, 0, '', '', 1, '2020-09-12 03:25:11', '2020-09-12 03:25:11', 'L', '9', 'Team 1', NULL, 'alpeshd', '85', NULL, 0),
(6, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 5.00, 'PC', '5f5c8b9a56e37', 1, 1, '66', 1, 0, '', '', 1, '2020-09-12 03:25:11', '2020-09-12 03:25:11', 'W', '9', 'Team 2', NULL, 'alpesh', '1216', NULL, 0),
(7, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 5.00, 'PC', '5f5f2c025e073', 1, 1, '66', 1, 0, '', '', 1, '2020-09-14 03:09:00', '2020-09-14 03:09:00', 'L', '9', 'Team 1', NULL, 'alpesh', '1216', NULL, 0),
(8, 'test@gmail.com', 'Valorant', '1v1', 'EU', 5.00, 'PC', '5f5f2c025e073', 1, 1, '99', 1, 0, '', '', 1, '2020-09-14 03:09:00', '2020-09-14 03:09:00', 'W', '9', 'Team 2', NULL, 'alpeshd', '85', NULL, 0),
(9, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f60badfbcbcb', 1, 1, '99', 1, 0, '', '', 1, '2020-09-15 07:32:21', '2020-09-15 07:32:21', 'W', '4.5', 'Team 1', NULL, NULL, 'sd', NULL, 0),
(10, 'test@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f60badfbcbcb', 1, 1, '55', 1, 0, '', '', 1, '2020-09-15 07:32:21', '2020-09-15 07:32:21', 'L', '4.5', 'Team 2', NULL, 'alpeshd', '85', NULL, 0),
(11, 'alpesh@gmail.com', 'FortniteBoxfight', '1v1', 'EU', 2.50, 'PC', '5f60c2dae9b63', 1, 1, '4', 1, 0, '', '', 1, '2020-09-15 08:25:27', '2020-09-15 08:25:27', 'L', '4.5', 'Team 1', NULL, '56', 'sd', 'yuij', 0),
(12, 'test@gmail.com', 'FortniteBoxfight', '1v1', 'EU', 2.50, 'PC', '5f60c2dae9b63', 1, 1, '5', 1, 0, '', '', 1, '2020-09-15 08:25:27', '2020-09-15 08:25:27', 'W', '4.5', 'Team 2', NULL, 'alpeshd', '85', 'te5', 0),
(13, 'alpesh@gmail.com', 'FortniteBoxfight', '1v1', 'EU', 5.00, 'PC', '5f60c8a1124ed', 1, 1, '5', 1, 0, '', '', 1, '2020-09-15 08:32:54', '2020-09-15 08:32:54', 'W', '9', 'Team 1', NULL, '56', 'sd', 'yuij', 0),
(14, 'test@gmail.com', 'FortniteBoxfight', '1v1', 'EU', 5.00, 'PC', '5f60c8a1124ed', 1, 1, '-1', 1, 0, '', '', 1, '2020-09-15 08:32:54', '2020-09-15 08:32:54', 'L', '9', 'Team 2', NULL, 'alpeshd', '85', 'te5', 0),
(15, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f61aa6dcccfe', 1, 1, '99', 1, 0, '', '', 1, '2020-09-16 00:34:52', '2020-09-16 00:34:52', 'W', '4.5', 'Team 1', NULL, '56', 'sd', 'yuij', 0),
(16, 'test@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f61aa6dcccfe', 1, 1, '6', 1, 0, '', '', 1, '2020-09-16 00:34:52', '2020-09-16 00:34:52', 'L', '4.5', 'Team 2', NULL, 'alpeshd', '85', 'te5', 0),
(19, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 5.00, 'PC', '5f64471e15530', 1, 1, '66', 1, 0, '', '', 1, '2020-09-18 00:22:49', '2020-09-18 00:22:49', 'W', '9', 'Team 1', NULL, '56', 'sd', 'yuij', 0),
(20, 'test@gmail.com', 'Valorant', '1v1', 'EU', 5.00, 'PC', '5f64471e15530', 1, 1, '5', 1, 0, '', '', 1, '2020-09-18 00:22:49', '2020-09-18 00:22:49', 'L', '9', 'Team 2', NULL, 'alpeshd', '85', 'te5', 0),
(31, 'test@gmail.com', 'Valorant', '1v1', 'EU', 5.00, 'PC', '5f6ae782a2550', 1, 1, '66', 1, 0, '', '', 1, '2020-09-23 00:50:41', '2020-09-23 00:50:41', 'W', '9', 'Team 1', NULL, 'alpeshd', '85', 'te5', 0),
(32, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 5.00, 'PC', '5f6ae782a2550', 1, 1, '6', 1, 0, '', '', 1, '2020-09-23 00:50:42', '2020-09-23 00:50:42', 'L', '9', 'Team 2', NULL, '56', 'sd', 'yuij', 0),
(33, 'test@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f89896f83bcb', 1, 1, '5', 1, 0, '', '', 1, '2020-10-16 06:33:42', '2020-10-16 06:33:42', 'W', '4.5', 'Team 1', NULL, 'alpeshd', '85', 'te5', 0),
(34, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f89896f83bcb', 1, 1, '5', 1, 0, '', '', 1, '2020-10-16 06:33:42', '2020-10-16 06:33:42', 'L', '4.5', 'Team 2', NULL, '56', 'sd', 'yuij', 0),
(35, 'test@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f898c3ab872f', 1, 1, '5', 1, 0, '', '', 1, '2020-10-16 06:44:43', '2020-10-16 06:44:43', 'L', '4.5', 'Team 1', NULL, 'alpeshd', '85', 'te5', 0),
(36, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f898c3ab872f', 1, 1, '55', 1, 0, '', '', 1, '2020-10-16 06:44:43', '2020-10-16 06:44:43', 'W', '4.5', 'Team 2', NULL, '56', 'sd', 'yuij', 0),
(37, 'test@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f8a7572d8c1e', 1, 1, '55', 1, 0, '', '', 1, '2020-10-16 23:20:07', '2020-10-16 23:20:07', 'W', '4.5', 'Team 1', NULL, 'alpeshd', '85', 'te5', 0),
(38, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f8a7572d8c1e', 1, 1, '5', 1, 0, '', '', 1, '2020-10-16 23:20:07', '2020-10-16 23:20:07', 'L', '4.5', 'Team 2', NULL, '56', 'sd', 'yuij', 0),
(39, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f8a781101fe7', 1, 1, '44', 1, 0, '', '', 1, '2020-10-16 23:22:01', '2020-10-16 23:22:01', 'L', '4.5', 'Team 1', NULL, '56', 'sd', 'yuij', 0),
(40, 'test@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f8a781101fe7', 1, 1, '55', 1, 0, '', '', 1, '2020-10-16 23:22:01', '2020-10-16 23:22:01', 'W', '4.5', 'Team 2', NULL, 'alpeshd', '85', 'te5', 0),
(41, 'test@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f8e9fd4e39ab', 1, 1, '7', 1, 0, '', '', 1, '2020-10-20 03:00:31', '2020-10-20 03:00:31', 'W', '4.5', 'Team 1', NULL, 'alpeshd', '85', 'te5', 0),
(42, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f8e9fd4e39ab', 1, 1, '5', 1, 0, '', '', 1, '2020-10-20 03:00:31', '2020-10-20 03:00:31', 'L', '4.5', 'Team 2', NULL, '56', 'sd', 'yuij', 0),
(43, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f8eaca4a6869', 1, 1, '5', 1, 0, '', '', 1, '2020-10-20 03:55:08', '2020-10-20 03:55:08', 'W', '4.5', 'Team 1', NULL, '56', 'sd', 'yuij', 0),
(44, 'test@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f8eaca4a6869', 1, 1, '5', 1, 0, '', '', 1, '2020-10-20 03:55:08', '2020-10-20 03:55:08', 'L', '4.5', 'Team 2', NULL, 'alpeshd', '85', 'te5', 0),
(45, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f8fe153a0891', 1, 1, '88', 1, 0, '', '', 1, '2020-10-21 01:58:55', '2020-10-21 01:58:55', 'W', '4.5', 'Team 1', NULL, '56', 'sd', 'yuij', 0),
(46, 'test@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f8fe153a0891', 1, 1, '5', 1, 0, '', '', 1, '2020-10-21 01:58:55', '2020-10-21 01:58:55', 'L', '4.5', 'Team 2', NULL, 'alpeshd', '85', 'te5', 0),
(47, 'alpesh@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f8ff1a0567a6', 1, 1, '44', 1, 0, '', '', 1, '2020-10-21 03:04:09', '2020-10-21 03:04:09', 'W', '4.5', 'Team 1', NULL, '56', 'sd', 'yuij', 0),
(48, 'test@gmail.com', 'Valorant', '1v1', 'EU', 2.50, 'PC', '5f8ff1a0567a6', 1, 1, '8', 1, 0, '', '', 1, '2020-10-21 03:04:09', '2020-10-21 03:04:09', 'L', '4.5', 'Team 2', NULL, 'alpeshd', '85', 'te5', 0),
(49, 'play@gmail.com', 'Valorant', '1v1', 'NAW', 2.50, 'PC', '5f90076a6ea6b', 1, 1, '5', 1, 0, '', '', 1, '2020-10-21 04:39:38', '2020-10-21 04:39:38', 'L', '4.5', 'Team 1', NULL, '55', '55s', '5', 0),
(50, 'om1@gmail.com', 'Valorant', '1v1', 'NAW', 2.50, 'PC', '5f90076a6ea6b', 1, 1, '44', 1, 0, '', '', 1, '2020-10-21 04:39:39', '2020-10-21 04:39:39', 'W', '4.5', 'Team 2', NULL, 'sdfsdfsdf', 'dsfsdf', '5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gamername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txn_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_gross` double(10,2) DEFAULT NULL,
  `currency_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id`, `gamername`, `txn_id`, `payment_gross`, `currency_code`, `payment_status`, `payment_date`, `created_at`, `updated_at`) VALUES
(1, 'test@gmail.com', '65T90723S6071654H', 5.00, 'USD', 'Completed', '2020-09-12T08:58:48Z', '2020-09-12 03:29:40', '2020-09-12 03:29:40'),
(2, 'alpesh@gmail.com', '0N828258KJ801422C', 5.00, 'USD', 'Completed', '2020-09-16T05:14:42Z', '2020-09-15 23:45:37', '2020-09-15 23:45:37'),
(3, 'alpesh@gmail.com', '1N132192PA9166247', 15.00, 'USD', 'Completed', '2020-09-16T12:04:09Z', '2020-09-16 06:34:54', '2020-09-16 06:34:54');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE `friend` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gamer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friend_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `acceptStatus` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`id`, `gamer_name`, `friend_name`, `created_at`, `updated_at`, `acceptStatus`) VALUES
(20, 'play@gmail.com', 'om1@gmail.com', NULL, NULL, 0),
(21, 'om1@gmail.com', 'play@gmail.com', NULL, NULL, 0),
(23, 'test@gmail.com', 'play@gmail.com', NULL, NULL, 0),
(25, 'test@gmail.com', 'alpesh@gmail.com', NULL, NULL, 0),
(26, 'alpesh@gmail.com', 'test@gmail.com', NULL, NULL, 0),
(27, 'om1@gmail.com', 'test@gmail.com', NULL, NULL, 0),
(28, 'test@gmail.com', 'om1@gmail.com', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gamemode`
--

CREATE TABLE `gamemode` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gamemode_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gamemode_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` bigint(20) NOT NULL,
  `to` bigint(20) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gamemode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from`, `to`, `message`, `is_read`, `created_at`, `updated_at`, `gamemode`) VALUES
(1618, 103, 100, 's', 0, '2020-10-21 05:59:34', '2020-10-21 05:59:34', '5f901b7d7acb6'),
(1619, 103, 103, 's', 0, '2020-10-21 05:59:34', '2020-10-21 05:59:34', '5f901b7d7acb6'),
(1620, 3, 100, 'all', 0, '2020-10-21 06:33:04', '2020-10-21 06:33:04', '5f90230214847'),
(1621, 3, 103, 'all', 0, '2020-10-21 06:33:04', '2020-10-21 06:33:04', '5f90230214847'),
(1622, 3, 4, 'all', 0, '2020-10-21 06:33:04', '2020-10-21 06:33:04', '5f90230214847'),
(1623, 3, 3, 'all', 0, '2020-10-21 06:33:04', '2020-10-21 06:33:04', '5f90230214847'),
(1624, 3, 100, 'ok', 0, '2020-10-21 06:33:18', '2020-10-21 06:33:18', '5f90230214847'),
(1625, 3, 103, 'ok', 0, '2020-10-21 06:33:18', '2020-10-21 06:33:18', '5f90230214847'),
(1626, 3, 4, 'ok', 0, '2020-10-21 06:33:18', '2020-10-21 06:33:18', '5f90230214847'),
(1627, 3, 3, 'ok', 0, '2020-10-21 06:33:18', '2020-10-21 06:33:18', '5f90230214847'),
(1628, 103, 100, 'dah asdba', 0, '2020-10-21 06:33:29', '2020-10-21 06:33:29', '5f90230214847'),
(1629, 103, 103, 'dah asdba', 0, '2020-10-21 06:33:29', '2020-10-21 06:33:29', '5f90230214847'),
(1630, 103, 4, 'dah asdba', 0, '2020-10-21 06:33:29', '2020-10-21 06:33:29', '5f90230214847'),
(1631, 103, 3, 'dah asdba', 0, '2020-10-21 06:33:29', '2020-10-21 06:33:29', '5f90230214847'),
(1632, 4, 100, 's', 0, '2020-10-21 06:34:09', '2020-10-21 06:34:09', '5f90230214847'),
(1633, 4, 103, 's', 0, '2020-10-21 06:34:09', '2020-10-21 06:34:09', '5f90230214847'),
(1634, 4, 4, 's', 0, '2020-10-21 06:34:09', '2020-10-21 06:34:09', '5f90230214847'),
(1635, 4, 3, 's', 0, '2020-10-21 06:34:09', '2020-10-21 06:34:09', '5f90230214847'),
(1636, 3, 100, 'ok', 0, '2020-10-21 06:34:16', '2020-10-21 06:34:16', '5f90230214847'),
(1637, 3, 103, 'ok', 0, '2020-10-21 06:34:16', '2020-10-21 06:34:16', '5f90230214847'),
(1638, 3, 4, 'ok', 0, '2020-10-21 06:34:16', '2020-10-21 06:34:16', '5f90230214847'),
(1639, 3, 3, 'ok', 0, '2020-10-21 06:34:16', '2020-10-21 06:34:16', '5f90230214847'),
(1640, 3, 100, 'play game', 0, '2020-10-21 06:34:25', '2020-10-21 06:34:25', '5f90230214847'),
(1641, 3, 103, 'play game', 0, '2020-10-21 06:34:25', '2020-10-21 06:34:25', '5f90230214847'),
(1642, 3, 4, 'play game', 0, '2020-10-21 06:34:25', '2020-10-21 06:34:25', '5f90230214847'),
(1643, 3, 3, 'play game', 0, '2020-10-21 06:34:25', '2020-10-21 06:34:25', '5f90230214847');

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
(4, '2020_07_03_052855_create_tickets_table', 1),
(5, '2020_07_23_114204_create_wagers_table', 1),
(6, '2020_07_28_050032_add_status_to_wagers_table', 1),
(7, '2020_07_28_054630_create_on__going__game__lists_table', 1),
(8, '2020_08_10_072901_create_completed__games__lists_table', 1),
(9, '2020_08_11_115625_create_messages_table', 1),
(10, '2020_08_13_044258_add_gamemode_to_messages_table', 1),
(11, '2020_08_13_044907_add_gamemode138_to_users_table', 1),
(12, '2020_08_13_105930_create_send_requests_table', 1),
(13, '2020_08_14_125915_add_gamer_slug_to_wagerss_table', 1),
(14, '2020_08_14_131920_add_result_to_completed_table', 1),
(15, '2020_08_14_132849_add_prize_to_prizewager_table', 1),
(16, '2020_08_14_133703_add_prize_to_prizeongoing_game_list_table', 1),
(17, '2020_08_14_134109_add_prize_to_prizecompleted_games_list_table', 1),
(18, '2020_08_14_134530_add_sqard_to_sqardongoing_game_list_table', 1),
(19, '2020_08_14_134731_add_sqard_to_sqardcompleted_games_list_table', 1),
(20, '2020_08_14_135602_add_epic_profile_id_to_epic_profile_id_ongoing_game_list_table', 1),
(21, '2020_08_14_135924_add_gamer_id_to_epic_profile_id_completed_games5_list_table', 1),
(22, '2020_08_17_054715_add_uniqids_to_ongoing_game_list_table', 1),
(23, '2020_08_17_055034_add_uniqids_to_completed_games_list_table', 1),
(24, '2020_08_17_140830_add_server_to_users_table', 1),
(25, '2020_08_18_095120_create_deposit_table', 1),
(26, '2020_08_18_143238_add_gamer_epic_profile_id_to_completed_games_list_table', 1),
(27, '2020_08_20_061513_add_role_to_users_table', 1),
(28, '2020_08_20_062837_create_terminated__games__lists_table', 1),
(29, '2020_08_20_103404_create_gamemodes_table', 1),
(30, '2020_08_21_115354_create_amounts_table', 1),
(31, '2020_08_21_131552_create_teams_table', 1),
(32, '2020_08_24_051207_create_platforms_table', 1),
(33, '2020_08_24_053047_add_public_to_completed_games_list_table', 1),
(34, '2020_08_24_053615_add_public_to_wagers_table', 1),
(35, '2020_08_24_053653_add_public_to_ongoing_game_list_table', 1),
(36, '2020_08_24_060456_create_servers_table', 1),
(37, '2020_08_24_064452_create_codecreators_table', 1),
(38, '2020_08_24_081953_create_assign_content_creators_table', 1),
(39, '2020_08_24_125258_add_team_to_ongoing_game_list_table', 1),
(40, '2020_08_25_072243_create_transaction_table', 1),
(41, '2020_08_25_082113_add_pimage_to_users_table', 1),
(42, '2020_08_26_081745_add_fromuserto_transaction_table', 1),
(43, '2020_08_28_072226_add_gamer_slug_to_send_requests_table', 1),
(44, '2020_08_28_090723_add_codecreator_type_to_codecreators_table', 1),
(45, '2020_08_28_095034_create_friend_table', 1),
(46, '2020_09_02_102608_add_paypalemail_to_users_table', 1),
(47, '2020_09_02_142530_add_whitelistip_type_to_users_table', 1),
(48, '2020_09_03_105930_add_accept_status_to_friend_table', 1),
(49, '2020_09_06_130254_add_pasfield_to_wagers_table', 1),
(50, '2020_09_10_100454_create_notification_table', 1),
(51, '2020_09_11_124941_add_our_fees_slug_to_amount_table', 1),
(52, '2020_09_11_182849_add_user_balance_to_wagers_table', 1),
(53, '2020_09_11_185704_add_uniqid_to_wagers_table', 1),
(54, '2020_09_15_090532_create_paypals_table', 2),
(55, '2020_09_16_103420_create_paypal_history_table', 3),
(56, '2020_09_17_065007_create_admin_comment_table', 4),
(57, '2020_10_19_100750_add_key_to_completed_games_list_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noti_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_status` int(11) NOT NULL DEFAULT 0,
  `noti_gamer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `noti_type`, `noti_info`, `noti_link`, `noti_status`, `noti_gamer`, `created_at`, `updated_at`) VALUES
(109, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-19 06:27:46', '2020-10-19 06:27:53'),
(110, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-19 07:00:05', '2020-10-19 07:00:12'),
(111, 'Game Request', 'You have got Game request from om1@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'play@gmail.com', '2020-10-19 07:02:24', '2020-10-19 07:02:38'),
(112, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-19 07:07:48', '2020-10-19 07:08:00'),
(113, 'Game Request', 'You have got Game request from play@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'om1@gmail.com', '2020-10-19 07:10:11', '2020-10-19 07:10:40'),
(114, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-19 07:46:10', '2020-10-19 07:46:16'),
(115, 'Game Request', 'You have got Game request from play@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'om1@gmail.com', '2020-10-19 07:46:50', '2020-10-19 22:49:50'),
(116, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-19 22:52:16', '2020-10-19 22:52:23'),
(117, 'Game Request', 'You have got Game request from om1@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'play@gmail.com', '2020-10-19 22:53:00', '2020-10-19 22:53:09'),
(118, 'Game Request', 'You have got Game request from play@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'om1@gmail.com', '2020-10-20 00:32:17', '2020-10-20 00:32:24'),
(119, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-20 00:33:26', '2020-10-20 00:33:38'),
(120, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-20 00:48:35', '2020-10-20 00:48:41'),
(121, 'Game Request', 'You have got Game request from play@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'om1@gmail.com', '2020-10-20 00:49:01', '2020-10-20 00:49:16'),
(122, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-20 01:14:43', '2020-10-20 01:14:58'),
(123, 'Game Request', 'You have got Game request from play@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'om1@gmail.com', '2020-10-20 01:15:40', '2020-10-20 01:17:06'),
(124, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-20 01:31:02', '2020-10-20 01:33:19'),
(125, 'Game Request', 'You have got Game request from play@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'om1@gmail.com', '2020-10-20 01:33:55', '2020-10-20 01:34:05'),
(126, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-20 01:42:46', '2020-10-20 01:45:08'),
(127, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-20 03:32:10', '2020-10-20 03:32:18'),
(128, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-20 03:34:33', '2020-10-20 03:34:42'),
(129, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-20 03:45:45', '2020-10-20 03:45:50'),
(130, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-20 04:11:31', '2020-10-20 04:12:31'),
(131, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-20 04:14:44', '2020-10-20 04:22:25'),
(132, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-20 04:23:12', '2020-10-20 04:26:13'),
(133, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-20 04:40:21', '2020-10-20 04:47:10'),
(134, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-20 06:12:46', '2020-10-20 06:12:52'),
(135, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-20 06:13:48', '2020-10-20 06:23:11'),
(136, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-20 06:38:24', '2020-10-20 06:39:40'),
(137, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-20 06:42:19', '2020-10-20 06:53:15'),
(138, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-20 06:58:30', '2020-10-20 06:58:43'),
(139, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-20 07:27:37', '2020-10-20 07:27:44'),
(140, 'Game Request', 'You have got Game request from play@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'om1@gmail.com', '2020-10-20 07:29:12', '2020-10-20 07:30:20'),
(141, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-20 23:49:48', '2020-10-20 23:50:03'),
(142, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-20 23:57:50', '2020-10-20 23:57:57'),
(143, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-21 00:23:29', '2020-10-21 00:24:19'),
(145, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-21 00:27:45', '2020-10-21 00:27:52'),
(146, 'Cancel', 'Your Request has been cancelled by test@gmail.com', '#', 1, 'alpesh@gmail.com', '2020-10-21 00:28:04', '2020-10-21 00:28:09'),
(147, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-21 03:16:50', '2020-10-21 03:17:04'),
(148, 'Game Request', 'You have got Game request from play@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'om1@gmail.com', '2020-10-21 03:18:29', '2020-10-21 03:19:41'),
(149, 'Game Request', 'You have got Game request from play@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'om1@gmail.com', '2020-10-21 03:32:19', '2020-10-21 03:32:26'),
(150, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-21 03:32:49', '2020-10-21 03:33:16'),
(151, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'alpesh@gmail.com', '2020-10-21 03:49:04', '2020-10-21 03:49:45'),
(152, 'Game Request', 'You have got Game request from play@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'om1@gmail.com', '2020-10-21 03:49:19', '2020-10-21 03:49:28'),
(153, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-21 05:13:44', '2020-10-21 05:13:52'),
(154, 'Game Request', 'You have got Game request from play@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'om1@gmail.com', '2020-10-21 05:15:30', '2020-10-21 05:16:05'),
(155, 'Game Request', 'You have got Game request from om1@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-21 06:03:31', '2020-10-21 06:04:12'),
(156, 'Friend Request Accepted', 'Friend Request Accepted by test@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'om1@gmail.com', '2020-10-21 06:04:21', '2020-10-21 06:06:16'),
(157, 'Game Request', 'You have got Game request from play@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-21 06:04:54', '2020-10-21 06:32:22'),
(158, 'Cancel', 'Your Request has been cancelled by alpesh@gmail.com', '#', 1, 'test@gmail.com', '2020-10-21 06:05:32', '2020-10-21 06:32:22'),
(159, 'Cancel', 'Your Request has been cancelled by om1@gmail.com', '#', 1, 'play@gmail.com', '2020-10-21 06:06:38', '2020-10-21 06:07:04'),
(160, 'Game Request', 'You have got Game request from om1@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'play@gmail.com', '2020-10-21 06:31:06', '2020-10-21 06:31:14'),
(161, 'Game Request', 'You have got Game request from alpesh@gmail.com', 'http://localhost/2loyal/userprofile#teams', 1, 'test@gmail.com', '2020-10-21 06:32:03', '2020-10-21 06:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `ongoing_game_list`
--

CREATE TABLE `ongoing_game_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gamername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gamemode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vs_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `server` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `console` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmation` int(11) NOT NULL,
  `confirmation_game_enter` int(11) NOT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score_confirm` int(11) NOT NULL,
  `dispute` int(11) NOT NULL,
  `dispute_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dispute_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `game_over` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prize` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sqard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epic_profile_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gamer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epicid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valorantid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public` int(11) NOT NULL DEFAULT 0,
  `team` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ongoing_game_list`
--

INSERT INTO `ongoing_game_list` (`id`, `gamername`, `gamemode`, `vs_type`, `server`, `amount`, `console`, `game_key`, `confirmation`, `confirmation_game_enter`, `score`, `score_confirm`, `dispute`, `dispute_time`, `dispute_image`, `game_over`, `created_at`, `updated_at`, `prize`, `sqard`, `epic_profile_id`, `gamer_id`, `epicid`, `valorantid`, `public`, `team`) VALUES
(623, 'om1@gmail.com', 'FortniteBoxfight', '2v2', 'OCE', 2.50, 'PC', '5f90230214847', 1, 1, '-1', 0, 0, '', '', 0, '2020-10-21 06:33:53', '2020-10-21 06:33:53', '4.5', 'Team 1', '5', NULL, 'sdfsdfsdf', 'dsfsdf', 0, 'Team 1'),
(624, 'play@gmail.com', 'FortniteBoxfight', '2v2', 'OCE', 2.50, 'PC', '5f90230214847', 1, 1, '-1', 0, 0, '', '', 0, '2020-10-21 06:33:53', '2020-10-21 06:33:53', '4.5', 'Team 1', '5', NULL, '55', '55s', 0, 'Team 1'),
(625, 'alpesh@gmail.com', 'FortniteBoxfight', '2v2', 'OCE', 2.50, 'PC', '5f90230214847', 1, 1, '-1', 0, 0, '', '', 0, '2020-10-21 06:33:53', '2020-10-21 06:33:53', '4.5', 'Team 2', 'yuij', NULL, '56', 'sd', 0, 'Team 2'),
(626, 'test@gmail.com', 'FortniteBoxfight', '2v2', 'OCE', 2.50, 'PC', '5f90230214847', 1, 1, '-1', 0, 0, '', '', 0, '2020-10-21 06:33:53', '2020-10-21 06:33:53', '4.5', 'Team 2', 'te5', NULL, 'alpeshd', '85', 0, 'Team 2');

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
-- Table structure for table `paypals`
--

CREATE TABLE `paypals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paypalid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypalclientid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypalsecratekey` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paypals`
--

INSERT INTO `paypals` (`id`, `paypalid`, `paypalclientid`, `paypalsecratekey`, `created_at`, `updated_at`) VALUES
(1, 'sb-bqtpr1353259@business.example.com', 'AZHXb5iHM9lgyNmYQ9k1LHZsmJiUCDV6lfTxx17ezwK7BX6bntp-EqnSEXLZRvvjKf5JDN0HJ1ODnRQJ', 'EPVMIsxnyxNkHOxRDLjU4xx4aA0ZhrSBwzNmn4OOOLKuN4Z-O6RaYHx-njrhWLtPB93sfWcNDpZkhZWF', '2020-09-15 04:29:01', '2020-09-15 04:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `paypal_history`
--

CREATE TABLE `paypal_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paypal_history`
--

INSERT INTO `paypal_history` (`id`, `mode`, `amount`, `user_name`, `created_at`, `updated_at`) VALUES
(1, 'Deposit', '10', 'alpesh@gmail.com', '2020-09-16 05:42:46', NULL),
(3, 'Withdraw', '9.16', 'alpesh@gmail.com', '2020-09-16 05:47:49', NULL),
(4, 'Withdraw', '13.99', 'alpesh@gmail.com', '2020-09-16 06:02:15', NULL),
(5, 'Deposit', '10', 'alpesh@gmail.com', '2020-09-16 06:29:39', NULL),
(6, 'Withdraw', '10', 'alpesh@gmail.com', '2020-09-16 06:29:51', NULL),
(7, 'Withdraw', '10', 'alpesh@gmail.com', '2020-09-16 06:32:41', NULL),
(8, 'Deposit', '15', 'alpesh@gmail.com', '2020-09-16 06:33:57', NULL),
(9, 'Withdraw', '10', 'test@gmail.com', '2020-09-17 07:54:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE `platform` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`id`, `platform`, `created_at`, `updated_at`) VALUES
(1, 'PC', '2020-09-11 23:39:36', '2020-09-11 23:39:36'),
(2, 'Console', '2020-09-11 23:39:36', '2020-09-11 23:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `send_requests`
--

CREATE TABLE `send_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `game_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gamer_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gameid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gameteam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_requests`
--

INSERT INTO `send_requests` (`id`, `game_key`, `sender_id`, `receiver_id`, `created_at`, `updated_at`, `gamer_slug`, `gameid`, `gameteam`) VALUES
(137, '5f90230214847', 'om1@gmail.com', 'play@gmail.com', '2020-10-21 06:31:06', '2020-10-21 06:31:06', '5f90230214847', '314', 'team1'),
(138, '5f90230214847', 'alpesh@gmail.com', 'test@gmail.com', '2020-10-21 06:32:03', '2020-10-21 06:32:03', '5f90230214847', '314', 'team2');

-- --------------------------------------------------------

--
-- Table structure for table `server`
--

CREATE TABLE `server` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `server_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `server`
--

INSERT INTO `server` (`id`, `server_name`, `created_at`, `updated_at`) VALUES
(1, 'EU', '2020-09-11 23:39:36', '2020-09-11 23:39:36'),
(2, 'NAE', '2020-09-11 23:39:36', '2020-09-11 23:39:36'),
(3, 'NAW', '2020-09-11 23:39:36', '2020-09-11 23:39:36'),
(4, 'OCE', '2020-09-11 23:39:37', '2020-09-11 23:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_player` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terminated_games_lists`
--

CREATE TABLE `terminated_games_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gamername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gamer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gamemode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vs_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `console` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confirmation` int(11) DEFAULT NULL,
  `confirmation_game_enter` int(11) DEFAULT NULL,
  `score` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `score_confirm` int(11) DEFAULT NULL,
  `dispute` int(11) DEFAULT NULL,
  `dispute_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dispute_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_over` int(11) DEFAULT NULL,
  `prize` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sqard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epic_profile_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valorantid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epicid` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terminated_games_lists`
--

INSERT INTO `terminated_games_lists` (`id`, `gamername`, `gamer_id`, `gamemode`, `vs_type`, `server`, `amount`, `console`, `game_key`, `confirmation`, `confirmation_game_enter`, `score`, `score_confirm`, `dispute`, `dispute_time`, `dispute_image`, `game_over`, `prize`, `sqard`, `epic_profile_id`, `valorantid`, `epicid`, `created_at`, `updated_at`) VALUES
(1, 'test@gmail.com', NULL, 'Valorant', '1v1', 'EU', '5', 'PC', '5f5c78108cea4', 1, 1, '5', 0, 0, '', '', 0, '9', 'Team 1', NULL, '85', 0.00, '2020-09-12 02:11:31', '2020-09-12 02:11:31'),
(2, 'alpesh@gmail.com', NULL, 'Valorant', '1v1', 'EU', '5', 'PC', '5f5c78108cea4', 1, 1, '-1', 0, 0, '', '', 0, '9', 'Team 2', NULL, '1216', 0.00, '2020-09-12 02:11:31', '2020-09-12 02:11:31'),
(3, 'test@gmail.com', NULL, 'Valorant', '1v1', 'EU', '5', 'PC', '5f5c78108cea4', 1, 1, '5', 0, 0, '', '', 0, '9', 'Team 1', NULL, '85', 0.00, '2020-09-12 02:11:32', '2020-09-12 02:11:32'),
(4, 'alpesh@gmail.com', NULL, 'Valorant', '1v1', 'EU', '5', 'PC', '5f5c78108cea4', 1, 1, '-1', 0, 0, '', '', 0, '9', 'Team 2', NULL, '1216', 0.00, '2020-09-12 02:11:32', '2020-09-12 02:11:32'),
(5, 'test@gmail.com', NULL, 'Valorant', '1v1', 'EU', '10', 'PC', '5f5ca0c7f0287', 1, 1, '6', 0, 0, '', '', 0, '18', 'Team 1', NULL, '85', 0.00, '2020-09-12 05:05:23', '2020-09-12 05:05:23'),
(6, 'alpesh@gmail.com', NULL, 'Valorant', '1v1', 'EU', '10', 'PC', '5f5ca0c7f0287', 1, 1, '66', 1, 0, '', '', 0, '18', 'Team 2', NULL, '1216', 0.00, '2020-09-12 05:05:23', '2020-09-12 05:05:23'),
(7, 'alpesh@gmail.com', NULL, 'Valorant', '1v1', 'EU', '2.5', 'PC', '5f5cb06c726e1', 1, 1, '-1', 0, 0, '', '', 0, '4.5', 'Team 1', NULL, '1216', 0.00, '2020-09-12 06:12:12', '2020-09-12 06:12:12'),
(8, 'test@gmail.com', NULL, 'Valorant', '1v1', 'EU', '2.5', 'PC', '5f5cb06c726e1', 1, 1, '-1', 0, 0, '', '', 0, '4.5', 'Team 2', NULL, '85', 0.00, '2020-09-12 06:12:12', '2020-09-12 06:12:12'),
(9, 'alpesh@gmail.com', NULL, 'Valorant', '1v1', 'EU', '2.5', 'PC', '5f5cb689092ef', 1, 1, '-1', 0, 0, '', '', 0, '4.5', 'Team 1', NULL, '1216', 0.00, '2020-09-12 06:39:55', '2020-09-12 06:39:55'),
(10, 'test@gmail.com', NULL, 'Valorant', '1v1', 'EU', '2.5', 'PC', '5f5cb689092ef', 1, 1, '-1', 0, 0, '', '', 0, '4.5', 'Team 2', NULL, '85', 0.00, '2020-09-12 06:39:55', '2020-09-12 06:39:55'),
(11, 'alpesh@gmail.com', NULL, 'Valorant', '1v1', 'EU', '2.5', 'Console', '5f5cbc3e7905d', 1, 1, '-1', 0, 0, '', '', 0, '4.5', 'Team 1', NULL, '1216', 0.00, '2020-09-12 07:04:41', '2020-09-12 07:04:41'),
(12, 'test@gmail.com', NULL, 'Valorant', '1v1', 'EU', '2.5', 'Console', '5f5cbc3e7905d', 1, 1, '-1', 0, 0, '', '', 0, '4.5', 'Team 2', NULL, '85', 0.00, '2020-09-12 07:04:41', '2020-09-12 07:04:41'),
(13, 'test@gmail.com', NULL, 'Valorant', '1v1', 'EU', '2.5', 'PC', '5f5cc0adaf164', 1, 1, '-1', 0, 0, '', '', 0, '4.5', 'Team 1', NULL, '85', 0.00, '2020-09-12 07:21:14', '2020-09-12 07:21:14'),
(14, 'alpesh@gmail.com', NULL, 'Valorant', '1v1', 'EU', '2.5', 'PC', '5f5cc0adaf164', 1, 1, '-1', 0, 0, '', '', 0, '4.5', 'Team 2', NULL, '1216', 0.00, '2020-09-12 07:21:14', '2020-09-12 07:21:14'),
(15, 'alpesh@gmail.com', NULL, 'Valorant', '1v1', 'EU', '2.5', 'PC', '5f5cc78f0ac33', 1, 1, '-1', 0, 0, '', '', 0, '4.5', 'Team 1', NULL, '1216', 0.00, '2020-09-12 07:48:18', '2020-09-12 07:48:18'),
(16, 'test@gmail.com', NULL, 'Valorant', '1v1', 'EU', '2.5', 'PC', '5f5cc78f0ac33', 1, 1, '-1', 0, 0, '', '', 0, '4.5', 'Team 2', NULL, '85', 0.00, '2020-09-12 07:48:18', '2020-09-12 07:48:18'),
(19, 'alpesh@gmail.com', NULL, 'Valorant', '1v1', 'EU', '5', 'Console', '5f6477acb7fc1', 1, 1, '66', 0, 1, '2020-09-18 09:03:15', '5f6477acb7fc1_3.jpg', 0, '9', 'Team 1', 'yuij', 'sd', 56.00, '2020-09-18 03:39:10', '2020-09-18 03:39:10'),
(20, 'test@gmail.com', NULL, 'Valorant', '1v1', 'EU', '5', 'Console', '5f6477acb7fc1', 1, 1, '6', 0, 1, '2020-09-18 09:03:15', '5f6477acb7fc1_3.jpg', 0, '9', 'Team 2', 'te5', '85', 0.00, '2020-09-18 03:39:10', '2020-09-18 03:39:10'),
(21, 'alpesh@gmail.com', NULL, 'Valorant', '1v1', 'EU', '5', 'PC', '5f647b57281b3', 1, 1, '-1', 0, 1, '2020-09-18 09:18:45', '5f647b57281b3_4.jpg', 0, '9', 'Team 1', 'yuij', 'sd', 56.00, '2020-09-18 03:49:00', '2020-09-18 03:49:00'),
(22, 'test@gmail.com', NULL, 'Valorant', '1v1', 'EU', '5', 'PC', '5f647b57281b3', 1, 1, '-1', 0, 1, '2020-09-18 09:18:45', '5f647b57281b3_4.jpg', 0, '9', 'Team 2', 'te5', '85', 0.00, '2020-09-18 03:49:00', '2020-09-18 03:49:00');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gamername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fromemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `gamername`, `mode`, `amount`, `balance`, `created_at`, `updated_at`, `fromemail`) VALUES
(1, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-12 01:56:30', NULL, NULL),
(2, 'alpesh@gmail.com', 'Valorant', '5', '-', '2020-09-12 01:56:32', NULL, NULL),
(3, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-12 03:02:02', NULL, NULL),
(4, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-09-12 03:02:04', NULL, NULL),
(5, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-09-12 03:10:46', NULL, NULL),
(6, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-12 03:10:47', NULL, NULL),
(7, 'test@gmail.com', 'Valorant', '4.5', '+', '2020-09-12 03:12:25', NULL, NULL),
(8, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-12 03:20:27', NULL, NULL),
(9, 'alpesh@gmail.com', 'Valorant', '5', '-', '2020-09-12 03:20:28', NULL, NULL),
(10, 'alpesh@gmail.com', 'Valorant', '9', '+', '2020-09-12 03:25:11', NULL, NULL),
(11, 'test@gmail.com', 'paypal added', '5.00', '+', '2020-09-12 03:29:41', NULL, NULL),
(12, 'alpesh@gmail.com', 'Valorant', '10', '-', '2020-09-12 04:50:24', NULL, NULL),
(13, 'test@gmail.com', 'Valorant', '10', '-', '2020-09-12 04:50:23', NULL, NULL),
(14, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-12 05:57:10', NULL, NULL),
(15, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-09-12 05:57:10', NULL, NULL),
(16, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-09-12 06:24:54', NULL, NULL),
(17, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-12 06:24:56', NULL, NULL),
(18, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-09-12 06:47:41', NULL, NULL),
(19, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-12 06:47:44', NULL, NULL),
(20, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-12 07:06:11', NULL, NULL),
(21, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-09-12 07:06:13', NULL, NULL),
(22, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-12 07:36:08', NULL, NULL),
(23, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-09-12 07:36:08', NULL, NULL),
(24, 'alpesh@gmail.com', 'Valorant', '5', '-', '2020-09-12 07:51:11', NULL, NULL),
(25, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-12 07:51:13', NULL, NULL),
(26, 'alpesh@gmail.com', 'Valorant', '5', '-', '2020-09-14 03:08:41', NULL, NULL),
(27, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-14 03:08:43', NULL, NULL),
(28, 'test@gmail.com', 'Valorant', '9', '+', '2020-09-14 03:09:00', NULL, NULL),
(29, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-15 07:31:53', NULL, NULL),
(30, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-09-15 07:31:54', NULL, NULL),
(31, 'alpesh@gmail.com', 'Valorant', '4.5', '+', '2020-09-15 07:32:20', NULL, NULL),
(32, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-15 08:05:03', NULL, NULL),
(33, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-15 08:05:05', NULL, NULL),
(34, 'test@gmail.com', 'FortniteBoxfight', '4.5', '+', '2020-09-15 08:25:27', NULL, NULL),
(35, 'alpesh@gmail.com', 'FortniteBoxfight', '5', '-', '2020-09-15 08:32:42', NULL, NULL),
(36, 'test@gmail.com', 'FortniteBoxfight', '5', '-', '2020-09-15 08:32:43', NULL, NULL),
(37, 'alpesh@gmail.com', 'FortniteBoxfight', '9', '+', '2020-09-15 08:32:54', NULL, NULL),
(38, 'alpesh@gmail.com', 'paypal added', '5.00', '+', '2020-09-15 23:45:37', NULL, NULL),
(39, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-16 00:34:29', NULL, NULL),
(40, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-09-16 00:34:30', NULL, NULL),
(41, 'alpesh@gmail.com', 'Valorant', '4.5', '+', '2020-09-16 00:34:52', NULL, NULL),
(42, 'alpesh@gmail.com', 'paypal withdraw', '10', '-', '2020-09-16 06:32:43', NULL, NULL),
(43, 'alpesh@gmail.com', 'paypal added', '15.00', '+', '2020-09-16 06:34:54', NULL, NULL),
(44, 'alpesh@gmail.com', 'Valorant', '5', '-', '2020-09-17 01:26:13', NULL, NULL),
(45, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-17 01:26:13', NULL, NULL),
(46, 'alpesh@gmail.com', 'Valorant', '5', '-', '2020-09-17 23:48:57', NULL, NULL),
(47, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-17 23:48:57', NULL, NULL),
(48, 'alpesh@gmail.com', 'Valorant', '5', '-', '2020-09-18 00:05:43', NULL, NULL),
(49, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-18 00:05:45', NULL, NULL),
(50, 'alpesh@gmail.com', 'Valorant', '9', '+', '2020-09-18 00:22:49', NULL, NULL),
(51, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-18 01:00:46', NULL, NULL),
(52, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-09-18 01:00:47', NULL, NULL),
(53, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-18 03:17:38', NULL, NULL),
(54, 'alpesh@gmail.com', 'Valorant', '5', '-', '2020-09-18 03:17:39', NULL, NULL),
(55, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-18 03:22:54', NULL, NULL),
(56, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-09-18 03:22:55', NULL, NULL),
(57, 'alpesh@gmail.com', 'Valorant', '5', '-', '2020-09-18 03:32:52', NULL, NULL),
(58, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-18 03:32:54', NULL, NULL),
(59, 'alpesh@gmail.com', 'Valorant', '5', '-', '2020-09-18 03:48:34', NULL, NULL),
(60, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-18 03:48:35', NULL, NULL),
(61, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-22 05:28:54', NULL, NULL),
(62, 'alpesh@gmail.com', 'Valorant', '5', '-', '2020-09-22 05:28:55', NULL, NULL),
(63, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-22 23:23:45', NULL, NULL),
(64, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-22 23:23:47', NULL, NULL),
(65, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-22 23:31:20', NULL, NULL),
(66, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-22 23:31:21', NULL, NULL),
(67, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-22 23:34:09', NULL, NULL),
(68, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-22 23:34:10', NULL, NULL),
(69, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-23 00:43:44', NULL, NULL),
(70, 'alpesh@gmail.com', 'Valorant', '5', '-', '2020-09-23 00:43:47', NULL, NULL),
(71, 'test@gmail.com', 'Valorant', '9', '+', '2020-09-23 00:50:41', NULL, NULL),
(72, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-23 00:51:32', NULL, NULL),
(73, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-23 00:51:33', NULL, NULL),
(74, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-23 00:55:20', NULL, NULL),
(75, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-10-16 06:23:33', NULL, NULL),
(76, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-10-16 06:23:33', NULL, NULL),
(77, 'test@gmail.com', 'Valorant', '4.5', '+', '2020-10-16 06:33:42', NULL, NULL),
(78, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-10-16 06:35:19', NULL, NULL),
(79, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-10-16 06:35:19', NULL, NULL),
(80, 'alpesh@gmail.com', 'Valorant', '4.5', '+', '2020-10-16 06:44:43', NULL, NULL),
(81, 'alpesh@gmail.com', 'FortniteBuildfight', '2.5', '-', '2020-10-16 06:53:48', NULL, NULL),
(82, 'test@gmail.com', 'FortniteBuildfight', '2.5', '-', '2020-10-16 06:53:49', NULL, NULL),
(83, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-10-16 23:10:08', NULL, NULL),
(84, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-10-16 23:10:09', NULL, NULL),
(85, 'test@gmail.com', 'Valorant', '4.5', '+', '2020-10-16 23:20:07', NULL, NULL),
(86, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-10-16 23:21:18', NULL, NULL),
(87, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-10-16 23:21:19', NULL, NULL),
(88, 'test@gmail.com', 'Valorant', '4.5', '+', '2020-10-16 23:22:01', NULL, NULL),
(89, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-19 07:16:55', NULL, NULL),
(90, 'om1@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-19 07:16:55', NULL, NULL),
(91, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-19 07:16:56', NULL, NULL),
(92, 'play@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-19 07:16:56', NULL, NULL),
(93, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-19 07:45:33', NULL, NULL),
(94, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-19 07:45:44', NULL, NULL),
(95, 'om1@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-19 23:01:54', NULL, NULL),
(96, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-19 23:01:56', NULL, NULL),
(97, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-19 23:02:19', NULL, NULL),
(98, 'play@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-19 23:02:28', NULL, NULL),
(99, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-20 00:31:23', NULL, NULL),
(100, 'om1@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-20 00:55:02', NULL, NULL),
(101, 'play@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-20 00:55:02', NULL, NULL),
(102, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-20 00:55:04', NULL, NULL),
(103, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-20 00:55:05', NULL, NULL),
(104, 'play@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-20 01:35:34', NULL, NULL),
(105, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-20 01:35:34', NULL, NULL),
(106, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-20 01:35:35', NULL, NULL),
(107, 'om1@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-20 01:35:36', NULL, NULL),
(108, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-10-20 02:59:54', NULL, NULL),
(109, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-10-20 02:59:55', NULL, NULL),
(110, 'test@gmail.com', 'Valorant', '4.5', '+', '2020-10-20 03:00:31', NULL, NULL),
(111, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-20 03:01:40', NULL, NULL),
(112, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-20 03:01:40', NULL, NULL),
(113, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-10-20 03:54:32', NULL, NULL),
(114, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-10-20 03:54:32', NULL, NULL),
(115, 'alpesh@gmail.com', 'Valorant', '4.5', '+', '2020-10-20 03:55:07', NULL, NULL),
(116, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-20 07:21:48', NULL, NULL),
(117, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-20 07:21:49', NULL, NULL),
(118, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-10-21 01:52:38', NULL, NULL),
(119, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-10-21 01:52:39', NULL, NULL),
(120, 'alpesh@gmail.com', 'Valorant', '4.5', '+', '2020-10-21 01:58:55', NULL, NULL),
(121, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-21 01:59:54', NULL, NULL),
(122, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-21 01:59:56', NULL, NULL),
(123, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-10-21 03:01:31', NULL, NULL),
(124, 'alpesh@gmail.com', 'Valorant', '2.5', '-', '2020-10-21 03:01:33', NULL, NULL),
(125, 'alpesh@gmail.com', 'Valorant', '4.5', '+', '2020-10-21 03:04:09', NULL, NULL),
(126, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-21 03:12:10', NULL, NULL),
(127, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-21 03:12:12', NULL, NULL),
(128, 'play@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-21 03:51:29', NULL, NULL),
(129, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-21 03:51:29', NULL, NULL),
(130, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-21 03:51:32', NULL, NULL),
(131, 'om1@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-21 03:51:53', NULL, NULL),
(132, 'play@gmail.com', 'Valorant', '2.5', '-', '2020-10-21 04:38:52', NULL, NULL),
(133, 'om1@gmail.com', 'Valorant', '2.5', '-', '2020-10-21 04:38:55', NULL, NULL),
(134, 'om1@gmail.com', 'Valorant', '4.5', '+', '2020-10-21 04:39:38', NULL, NULL),
(135, 'alpesh@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-21 06:33:52', NULL, NULL),
(136, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-21 06:33:53', NULL, NULL),
(137, 'play@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-21 06:33:54', NULL, NULL),
(138, 'om1@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-10-21 06:33:54', NULL, NULL);

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epic_profile_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `pimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitation_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitation_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypalemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whitelistip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_balance` double(8,2) NOT NULL,
  `epicid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valorantid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `slug`, `epic_profile_id`, `server`, `role`, `pimage`, `invitation_link`, `invitation_status`, `paypalemail`, `whitelistip`, `user_balance`, `epicid`, `valorantid`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$XalHpM4CThkYLZPf1amSIuLgR8TNkK7yxQPi9z53E7hrqB7d4BiPy', 'EtUTuc64ZHcOhIqaDJeKdXnKisqsCC9VFlWITznlYp9DVOurcCJJpseQEVji', '2020-09-11 23:39:36', '2020-09-11 23:39:36', 'admin', NULL, NULL, 1, NULL, NULL, NULL, NULL, '122.170.101.95', 0.00, NULL, NULL),
(2, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$4ctq0Feq0xMF0ZqmzUwRgO2PrrDwvlAZ7bnIKT1wmOiKu88ePfcNW', 'kwVRuAboPK', '2020-09-11 23:39:36', '2020-09-11 23:39:36', 'admin', NULL, NULL, 1, NULL, NULL, NULL, NULL, '182.72.40.250', 0.00, NULL, NULL),
(3, 'test', 'test@gmail.com', '2020-09-09 13:16:21', '$2y$10$LkGaR46geObSUkeCJkp1XOeQWiIw1u3SPGs4z.KxsYIWBpoox4Ruq', 'D2rR84waaAaEBBoO0KUAepJ7QvCC3qXNhGpAs2NQhx7Q0xf12QMwgfINRFLx', '2020-09-11 23:55:24', '2020-10-21 06:33:53', 'test', 'te5', 'EU', 0, '1 (9).png', NULL, '1', NULL, NULL, 5595.00, 'alpeshd', '85'),
(4, 'alpesh', 'alpesh@gmail.com', '2020-09-09 06:54:14', '$2y$10$33.HauAGdH5mLMtXwhkhAep.yCRrBIt5vWCr.BjD0pttsnfEIU2ly', '3iHdjhIc0DtpXowEdiOSrJwiecTLxa1RwN4yYrRqgIRh9IHRNuUybG21TJ2I', '2020-09-12 01:33:20', '2020-10-21 06:33:52', 'alpesh', 'yuij', 'EU', 0, '1 (5).png', NULL, '1', 'sb-wehan1361382@personal.example.com', NULL, 850.84, '56', 'sd'),
(84, 'admin', 'admin@gmail.com', NULL, '$2y$10$dgoaWDEUUsRX29kWt9.rLuqel4G49Z1UTxBTa9j1FcrtEp9to5dtu', 'kIc@ijvYsr', '2020-09-17 00:41:40', '2020-09-17 00:41:40', 'admin', NULL, NULL, 1, NULL, NULL, NULL, NULL, '122.170.101.95', 0.00, NULL, NULL),
(85, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$gfxXn3PvLZDA6.WmO6Yy4ugwzoeDyFDh.hzcY0TYo.F3jYDaA4CiK', 'kIc@ijvYsr', '2020-09-17 00:41:40', '2020-09-17 00:41:40', 'admin', NULL, NULL, 1, NULL, NULL, NULL, NULL, '182.72.40.250', 0.00, NULL, NULL),
(86, 'admin', 'admin@gmail.com', NULL, '$2y$10$QsZT8aGpMjzwVVYaH5g17OMXY/XGQWU1YdufHptF3ADSRcgevKB9G', 'nAHDa84YKr', '2020-09-17 00:45:52', '2020-09-17 00:45:52', 'admin', NULL, NULL, 1, NULL, NULL, NULL, NULL, '122.170.101.95', 0.00, NULL, NULL),
(87, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$aywT.UAo1bZ3qiv67HxqhOmkOTx0FCl8RaEwieWLFemqlg5391Lfe', 'nAHDa84YKr', '2020-09-17 00:45:52', '2020-09-17 00:45:52', 'admin', NULL, NULL, 1, NULL, NULL, NULL, NULL, '182.72.40.250', 0.00, NULL, NULL),
(88, 'admin', 'admin@gmail.com', NULL, '$2y$10$WDkfQRSmKqPa3.qNtHBbeuCshGzpLC5qI.Vh1.WAWvyIpgCNi4b9C', 'Tt@aQ2vPsj', '2020-09-17 00:46:56', '2020-09-17 00:46:56', 'admin', NULL, NULL, 1, NULL, NULL, NULL, NULL, '122.170.101.95', 0.00, NULL, NULL),
(89, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$a5.39RUyjoNMxwCz/6lhKeq6QGhxtpHXXZVG2udDKBcwbY63wH5kG', 'Tt@aQ2vPsj', '2020-09-17 00:46:57', '2020-09-17 00:46:57', 'admin', NULL, NULL, 1, NULL, NULL, NULL, NULL, '182.72.40.250', 0.00, NULL, NULL),
(90, 'admin', 'admin@gmail.com', NULL, '$2y$10$IiT3UF9elw61T7/DK/usZ.gpfZrWqRhiLruP655qtsY84We7yYOFq', 'OrgBKefhk6', '2020-09-17 00:49:39', '2020-09-17 00:49:39', 'admin', NULL, NULL, 1, NULL, NULL, NULL, NULL, '122.170.101.95', 0.00, NULL, NULL),
(91, 'admin1', 'admin1@gmail.com', NULL, '$2y$10$Csl.SMGBrZtqBNP7KymWlu.fOItG4AMByzTHsMFvfyHPd15U2/vFa', 'OrgBKefhk6', '2020-09-17 00:49:40', '2020-09-17 00:49:40', 'admin', NULL, NULL, 1, NULL, NULL, NULL, NULL, '182.72.40.250', 0.00, NULL, NULL),
(97, 'an', 'alpesh.n@naapbooks.in', '2020-09-18 05:38:30', '$2y$10$0BR.4Ppirm0kZDW5oIFTTuQl3uOkuzxp4qhfe30igRBpNLYHOqRc.', '1OH9FXJEy03AH5fhD9PXyW7lAD5k8J6xlZYK7CCx79IUn3Vtk9sxcqzbyFGf', '2020-09-18 04:41:08', '2020-09-18 05:38:30', 'an', '', NULL, 0, '13.png', NULL, '0', NULL, NULL, 0.00, '', ''),
(98, 'demo', 'demo@gmail.com', '2020-09-02 05:27:57', '$2y$10$c5OTt6aWj4CBjjrqrLwU6O4RsmWhxbi8otpwEz9PSWEC9MrAtge32', 'uD8cL3fpIk', '2020-09-20 23:55:21', '2020-09-22 03:06:35', 'demo', '5156', 'NAE', 0, '1 (16).png', NULL, '0', NULL, NULL, 555.00, '2', 'sdfsdf'),
(99, 'mail', 'mail@gmail.com', NULL, '$2y$10$uwydqu9lxzskg7Nju60q9ufRA5JY96HMhB7xGmUxu3AeM2g6mzn4W', '3POL5YNNqZAOnQmE1iUoMbjeYFpdhAF2Zacy4hroRrb2roRQg7rpQUALpE1N', '2020-09-29 04:08:41', '2020-09-29 04:08:46', 'mail', '', NULL, 0, '13.png', NULL, '0', NULL, NULL, 0.00, '', ''),
(100, 'om1', 'om1@gmail.com', '2020-09-29 04:22:55', '$2y$10$33.HauAGdH5mLMtXwhkhAep.yCRrBIt5vWCr.BjD0pttsnfEIU2ly', 'Lv7S70nuEr0a2z1vN62dnrNVC9ajBGgap5fMD0yG0BlHA1O9po9cUSEBWnr8', '2020-09-29 04:21:58', '2020-10-21 06:33:54', 'om1', '5', 'OCE', 1, '1 (14).png', NULL, '0', NULL, NULL, 542.00, 'sdfsdfsdf', 'dsfsdf'),
(101, 'si', 'si@gmail.com', '2020-09-29 04:26:07', '$2y$10$tyN66AAECxnLpURxwlhZGuoJG8qHXaLRLOC6mhEk3b508q4Fq1elG', 'jjWw6ZDs7Izh5cLmhmFGTHOAbonyWpOmjMkEtHRXX23ZwHgoOT0tvHrnbU0n', '2020-09-29 04:25:34', '2020-09-29 04:26:07', 'si', '', NULL, 0, '13.png', NULL, '0', NULL, NULL, 0.00, '', ''),
(102, 'omni', 'omni@gmail.com', '2020-09-29 04:29:43', '$2y$10$OFsZqkslc85QjjdKXsz9lehUy2REwhMbhcSwNRx65M14i8c8n9gty', 'UZJI7pxAJDVQp1AeFY91Jkfd6aYCjmBdGWq6arBQ0vIqipDfzKEIi2vQ917G', '2020-09-29 04:28:15', '2020-09-29 04:29:43', 'omni', '', NULL, 0, '13.png', NULL, '0', NULL, NULL, 0.00, '', ''),
(103, 'play', 'play@gmail.com', '2020-09-29 04:34:33', '$2y$10$LkGaR46geObSUkeCJkp1XOeQWiIw1u3SPGs4z.KxsYIWBpoox4Ruq', 'oYZaEi2xuFQsZ81Dp880JelFvaofH57imJyiNeGakEBiMf6ehVAfXhBY6Pc9', '2020-09-29 04:34:10', '2020-10-21 06:33:53', 'play', '5', 'NAW', 1, '12.png', NULL, '0', NULL, NULL, 537.50, '55', '55s'),
(104, 'ff', 'ff@gmail.com', NULL, '$2y$10$LKsCFxd14wSCTqcZOG1mHO07qb6msLSYGeKVhmMvDHT5Uf16GMliS', 'MNhMnjsXrgpzolF59qI0ucx9UWNQVdrki1B06HtiXEWwoQPUiRTedFjRegge', '2020-09-29 04:36:06', '2020-09-29 04:36:10', 'ff', '', NULL, 0, '13.png', NULL, '0', NULL, NULL, 0.00, '', ''),
(105, 'fire', 'fire@gmail.com', NULL, '$2y$10$6GkZQUezDoEMT1eV.rMa.e4COA89h1PRO7CelKn/Eki9z89/WQnnK', 'm04zgjpdWdS3c7815Uuk1O1H5V7QvZ7POjUaZ6aC2uwvoZtYLVaaD1F1YiyZ', '2020-09-29 04:42:31', '2020-09-29 04:42:35', 'fire', '', NULL, 0, '13.png', NULL, '0', NULL, NULL, 0.00, '', ''),
(106, 'yn', 'yn@gmail.com', NULL, '$2y$10$u/YJC3h3MBJVgDYKSCMxxe.OD9Bfy8H1sM/yUY5Z2IDrfoJcFfROK', 'cvfx9L4rFlPbPYpjtVGQYzqLuss0bYJSRgfSUse9lzafrOWmipjSL8wGgwkY', '2020-09-29 04:45:43', '2020-09-29 04:45:47', 'yn', '', NULL, 0, '13.png', NULL, '0', NULL, NULL, 0.00, '', ''),
(107, 'nav', 'nav@gmail.com', '2020-09-29 05:23:26', '$2y$10$4.pRIDkfLJIykpplORgliuzrCQdQpZ.1k5MohIlVqNL3zKcf514mS', 'qlrmnhwudGm5I0iwqMo134tYaWykU2VxGLfZzGIf3SQVxC9fpSePSUxUTGql', '2020-09-29 04:50:55', '2020-09-29 05:23:26', 'nav', '', NULL, 0, '13.png', NULL, '0', NULL, NULL, 0.00, '', ''),
(108, 'kes', 'kes@gmail.com', '2020-09-29 05:27:53', '$2y$10$WPWPIzGyUDR4sLbO6pxQVO2UjYf1eL0jLRQEwPoYI7ejo3GO3zyM2', 'bJW0LU0LlNrHz5cpjHiXHVUFaKZEoePBWYENh5vhnmTitG0BiyoUgV6TvgNS', '2020-09-29 05:24:45', '2020-09-29 05:27:53', 'kes', '', NULL, 0, '13.png', NULL, '0', NULL, NULL, 0.00, '', ''),
(109, 'oo', 'oo@gmail.com', '2020-09-29 05:32:45', '$2y$10$d3bXyj3fyoW9T7fVvddXn.QHhcPSMh3gE4SmZdOo/eN3LoP809LR2', '8CZkam60TvQDKQ0wAXAYvZW75QmPEwPuXwgsprEsb72ceQHoPzefs2vrICzL', '2020-09-29 05:28:15', '2020-09-29 05:32:45', 'oo', '', NULL, 0, '13.png', NULL, '0', NULL, NULL, 0.00, '', ''),
(110, 'ol', 'ol@gmail.com', '2020-09-29 05:33:51', '$2y$10$qvDZ/.mkHrvabfE6wXi7ouNpUQBP/.fiYZzbcRq29FVm59eycvHYy', 'KpK8DZve2nAM6gWNuwdYXZ6teUKt0UEKdQot9kMvlaMW2GdLKyoZM2aD4XxQ', '2020-09-29 05:33:25', '2020-09-29 05:33:51', 'ol', '', NULL, 0, '13.png', NULL, '0', NULL, NULL, 0.00, '', ''),
(111, 'ni', 'ni@gmail.com', '2020-09-29 05:37:08', '$2y$10$jW7X7aj3Q1zdJNM..BqeC.mzjNXmsW1iNQ8vOig0DULKxrBTMYf8m', '3Sv9ZmnlT7nTwn2ip7EIvhmHjgERnvEqRP6OX6EYksTQVdDLzVImjVdEi90O', '2020-09-29 05:36:47', '2020-09-29 05:37:08', 'ni', '', NULL, 0, '13.png', NULL, '0', NULL, NULL, 0.00, '', ''),
(112, 'jo', 'jo@gmail.com', '2020-09-29 05:41:49', '$2y$10$T2w.chdVMtoxoTaB7GrU3.YLQvepBDENwmOsneuSEmRqqQPA0qryW', 'c1u6aDMJq5', '2020-09-29 05:41:02', '2020-09-29 05:41:49', 'jo', '', NULL, 0, '13.png', NULL, '0', NULL, NULL, 0.00, '', ''),
(120, 'mk', 'alpesh.navadiya123@gmail.com', NULL, '$2y$10$FBXgtw7X/Qny6ylAeNHtAuc/Gn3xm778WPOzGkco887rvw9uw8nTW', '6eAuD3p8HC', '2020-09-29 07:26:39', '2020-09-29 07:26:41', 'mk', '', NULL, 0, '13.png', NULL, '0', NULL, NULL, 0.00, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `wagers`
--

CREATE TABLE `wagers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gamername` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gamemode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vs_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `server` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `console` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL,
  `gamer_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prize` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public` int(11) NOT NULL DEFAULT 0,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gpassword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wagers`
--

INSERT INTO `wagers` (`id`, `gamername`, `gamemode`, `vs_type`, `server`, `amount`, `console`, `created_at`, `updated_at`, `status`, `gamer_slug`, `prize`, `public`, `username`, `gpassword`) VALUES
(314, 'om1@gmail.com', 'FortniteBoxfight', '2v2', 'OCE', '2.5', 'PC', '2020-10-21 06:31:06', '2020-10-21 06:32:49', 1, '5f90230214847', '4.5', 0, '100,', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_comment`
--
ALTER TABLE `admin_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amounts`
--
ALTER TABLE `amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_content_creators`
--
ALTER TABLE `assign_content_creators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `assign_content_creators_gamername_unique` (`gamername`),
  ADD UNIQUE KEY `assign_content_creators_uniqkey_unique` (`uniqkey`);

--
-- Indexes for table `codecreators`
--
ALTER TABLE `codecreators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codecreators_codecreator_uniqid_unique` (`codecreator_uniqid`);

--
-- Indexes for table `completed_games_list`
--
ALTER TABLE `completed_games_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gamemode`
--
ALTER TABLE `gamemode`
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
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ongoing_game_list`
--
ALTER TABLE `ongoing_game_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paypals`
--
ALTER TABLE `paypals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paypal_history`
--
ALTER TABLE `paypal_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_requests`
--
ALTER TABLE `send_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `server`
--
ALTER TABLE `server`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terminated_games_lists`
--
ALTER TABLE `terminated_games_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wagers`
--
ALTER TABLE `wagers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_comment`
--
ALTER TABLE `admin_comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `amounts`
--
ALTER TABLE `amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `assign_content_creators`
--
ALTER TABLE `assign_content_creators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `codecreators`
--
ALTER TABLE `codecreators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `completed_games_list`
--
ALTER TABLE `completed_games_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `gamemode`
--
ALTER TABLE `gamemode`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1644;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `ongoing_game_list`
--
ALTER TABLE `ongoing_game_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=627;

--
-- AUTO_INCREMENT for table `paypals`
--
ALTER TABLE `paypals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paypal_history`
--
ALTER TABLE `paypal_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `platform`
--
ALTER TABLE `platform`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `send_requests`
--
ALTER TABLE `send_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `server`
--
ALTER TABLE `server`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terminated_games_lists`
--
ALTER TABLE `terminated_games_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `wagers`
--
ALTER TABLE `wagers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
