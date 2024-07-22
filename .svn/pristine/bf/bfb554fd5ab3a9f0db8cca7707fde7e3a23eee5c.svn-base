-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 19, 2020 at 05:14 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loyalwagers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_comment`
--

CREATE TABLE `admin_comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_comment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_comment`
--

INSERT INTO `admin_comment` (`id`, `admin_id`, `game_key`, `admin_comment`, `created_at`, `updated_at`) VALUES
(4, 'admin@gmail.com', '5f63085b9818c', 'tr', '2020-09-17 03:06:09', '2020-09-17 03:06:09'),
(5, 'admin@gmail.com', '5f63056bbbf7a', 'hellodfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh fghfgfghfghfghfh fghfghfghfg', '2020-09-17 03:07:11', '2020-09-17 03:07:11'),
(6, 'admin@gmail.com', '5f63056bbbf7a', 'tr', '2020-09-17 03:25:44', '2020-09-17 03:25:44'),
(7, 'admin@gmail.com', '5f63056bbbf7a', 'hellodfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh fghfgfghfghfghfh fghfghfghfg', '2020-09-17 03:26:03', '2020-09-17 03:26:03'),
(8, 'admin@gmail.com', '5f63056bbbf7a', 'hellodfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh fghfgfghfghfghfh fghfghfghfg', '2020-09-17 03:26:24', '2020-09-17 03:26:24'),
(9, 'admin@gmail.com', '5f63056bbbf7a', 'hellodfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh fghfgfghfghfghfh fghfghfghfg', '2020-09-17 03:28:26', '2020-09-17 03:28:26'),
(10, 'admin@gmail.com', '5f63056bbbf7a', 'Please Update Screenshot', '2020-09-17 03:28:40', '2020-09-17 03:28:40'),
(11, 'admin@gmail.com', '5f63056bbbf7a', 'hellodfhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh fghfgfghfghfghfh fghfghfghfg', '2020-09-17 03:29:44', '2020-09-17 03:29:44'),
(12, 'admin@gmail.com', '5f63056bbbf7a', 'Please Update Screenshot', '2020-09-17 03:30:41', '2020-09-17 03:30:41'),
(13, 'admin@gmail.com', '5f63056bbbf7a', 'ljklkl', '2020-09-17 23:50:19', '2020-09-17 23:50:19');

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
(7, 2.50, 1.00, '2020-08-26 05:41:49', '2020-08-26 05:41:49', 0.00),
(8, 5.00, 2.00, '2020-08-26 05:41:56', '2020-08-26 05:41:56', 0.00),
(9, 10.00, 4.00, '2020-08-26 05:42:03', '2020-08-26 05:42:03', 0.00),
(10, 15.00, 6.00, '2020-08-26 05:42:13', '2020-08-26 05:42:13', 0.00),
(15, 25.00, 25.45, '2020-09-11 08:15:39', '2020-09-11 08:17:42', 0.90),
(16, 2.50, 4.50, '2020-09-11 08:27:17', '2020-09-11 08:27:17', 0.20);

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

--
-- Dumping data for table `assign_content_creators`
--

INSERT INTO `assign_content_creators` (`id`, `gamername`, `uniqkey`, `code_create_amount`, `code_create_id`, `created_at`, `updated_at`) VALUES
(7, 'hitesh.v@naapbooks.com', 'http://localhost/loyalwagers?invitation_token=9dd2585a167a8488a3bc33628a8d9c2a', 1.50, 8, '2020-08-28 05:26:45', '2020-08-28 05:26:45'),
(14, 'alpesh.n@naapbooks.com', 'http://localhost/loyalwagers?invitation_token=7a3b4016c011407fb0811a3b03551767', 1.50, 8, '2020-09-11 05:35:01', '2020-09-11 05:35:01');

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

--
-- Dumping data for table `codecreators`
--

INSERT INTO `codecreators` (`id`, `codecreator_name`, `codecreator_amount`, `codecreator_uniqid`, `created_at`, `updated_at`, `codecreator_type`) VALUES
(8, 'A', 1.50, '5f48e2e3f2917', '2020-08-28 05:26:35', '2020-08-28 05:26:35', '1');

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
  `public` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `completed_games_list`
--

INSERT INTO `completed_games_list` (`id`, `gamername`, `gamemode`, `vs_type`, `server`, `amount`, `console`, `game_key`, `confirmation`, `confirmation_game_enter`, `score`, `score_confirm`, `dispute`, `dispute_time`, `dispute_image`, `game_over`, `created_at`, `updated_at`, `result`, `prize`, `sqard`, `gamer_id`, `epicid`, `valorantid`, `epic_profile_id`, `public`) VALUES
(152, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '1v1', 'NAE', 2.50, 'PC', '5f5f3262b46a2', 1, 1, '5', 1, 0, '', '', 1, '2020-09-14 04:21:06', '2020-09-14 04:21:06', 'W', '1', 'Team 1', NULL, 'sdajkkhujhg', 'dfgd', 'lkkj', 0),
(153, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '1v1', 'NAE', 2.50, 'PC', '5f5f3262b46a2', 1, 1, '2', 1, 0, '', '', 1, '2020-09-14 04:21:06', '2020-09-14 04:21:06', 'L', '1', 'Team 2', NULL, 'sdaf', 'asdasdhjkh', 'sdsdfsd', 0),
(154, 'hitesh.v@naapbooks.com', 'Valorant', '1v1', 'NAE', 2.50, 'PC', '5f63056bbbf7a', 1, 1, '5', 0, 0, '2020-09-17 07:13:36', '5f63056bbbf7a_4.png', 1, '2020-09-17 01:43:36', '2020-09-17 23:50:48', 'W', '1', 'Team 1', NULL, 'sdaf', 'asdasdhjkh', 'sdsdfsd', 0),
(155, 'alpesh.n@naapbooks.com', 'Valorant', '1v1', 'NAE', 2.50, 'PC', '5f63056bbbf7a', 1, 1, '2', 0, 0, '2020-09-17 07:13:36', '5f63056bbbf7a_4.png', 1, '2020-09-17 01:43:36', '2020-09-17 23:50:48', 'L', '1', 'Team 2', NULL, '1212', '855', '1212', 0),
(158, 'alpesh.n@naapbooks.com', 'Valorant', '1v1', 'NAE', 2.50, 'Console', '5f65eca93adde', 1, 1, '5', 1, 0, '', '', 1, '2020-09-19 06:09:16', '2020-09-19 06:09:16', 'W', '1', 'Team 1', NULL, '1212', '855', '1212', 0),
(159, 'hitesh.v@naapbooks.com', 'Valorant', '1v1', 'NAE', 2.50, 'Console', '5f65eca93adde', 1, 1, '2', 1, 0, '', '', 1, '2020-09-19 06:09:16', '2020-09-19 06:09:16', 'L', '1', 'Team 2', NULL, 'sdaf', 'asdasdhjkh', 'sdsdfsd', 0);

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
(1, 'alpesh.n@naapbooks.com', '6H564987H7035871W', 2.50, 'USD', 'Completed', '2020-08-25T09:21:47Z', '2020-08-25 03:52:26', '2020-08-25 03:52:26'),
(2, 'himanshi.s@naapbooks.com', '9KH02654SP9642521', 2.50, 'USD', 'Pending', '2020-08-25T13:59:45Z', '2020-08-25 08:30:35', '2020-08-25 08:30:35'),
(3, 'himanshi.s@naapbooks.com', '4L3659540B590564R', 2.50, 'USD', 'Pending', '2020-08-25T14:03:38Z', '2020-08-25 08:34:09', '2020-08-25 08:34:09'),
(4, 'himanshi.s@naapbooks.com', '4L3659540B590564R', 2.50, 'USD', 'Pending', '2020-08-25T14:03:38Z', '2020-08-25 08:35:42', '2020-08-25 08:35:42'),
(5, 'himanshi.s@naapbooks.com', '4L3659540B590564R', 2.50, 'USD', 'Pending', '2020-08-25T14:03:38Z', '2020-08-25 08:36:48', '2020-08-25 08:36:48'),
(6, 'himanshi.s@naapbooks.com', '4L3659540B590564R', 2.50, 'USD', 'Pending', '2020-08-25T14:03:38Z', '2020-08-25 08:38:06', '2020-08-25 08:38:06'),
(7, 'himanshi.s@naapbooks.com', '6DC88627FL1055448', 2.50, 'USD', 'Pending', '2020-08-25T14:08:54Z', '2020-08-25 08:39:31', '2020-08-25 08:39:31'),
(52, 'check@gmail.com', '7C903264KF281113A', 2.50, 'USD', 'Completed', '2020-08-28T11:41:29Z', '2020-08-28 06:12:28', '2020-08-28 06:12:28'),
(53, 'alpesh.n@naapbooks.com', '55G920331P944891E', 15.00, 'USD', 'Completed', '2020-08-29T05:17:40Z', '2020-08-28 23:53:31', '2020-08-28 23:53:31'),
(54, 'alpesh.n@naapbooks.com', '4E532343NW499645M', 25.00, 'USD', 'Completed', '2020-08-29T05:24:19Z', '2020-08-28 23:55:11', '2020-08-28 23:55:11'),
(55, 'alpesh.n@naapbooks.com', '39S47020WM2557629', 10.00, 'USD', 'Completed', '2020-08-29T05:27:44Z', '2020-08-29 00:17:37', '2020-08-29 00:17:37'),
(56, 'alpesh.n@naapbooks.com', '8C956756H5102872D', 2.50, 'USD', 'Completed', '2020-08-29T05:48:19Z', '2020-08-29 00:19:25', '2020-08-29 00:19:25'),
(57, 'hitesh.v@naapbooks.com', '9RB28516F1648602B', 25.00, 'USD', 'Completed', '2020-08-29T05:55:40Z', '2020-08-29 00:26:05', '2020-08-29 00:26:05'),
(58, 'test@gmail.com', '4N55553138418691C', 2.50, 'USD', 'Completed', '2020-08-29T06:00:07Z', '2020-08-29 00:48:04', '2020-08-29 00:48:04'),
(59, 'test@gmail.com', '7HG7684029303963J', 2.50, 'USD', 'Completed', '2020-08-29T06:18:54Z', '2020-08-29 00:55:23', '2020-08-29 00:55:23'),
(60, 'test@gmail.com', '20E197811P719913W', 2.50, 'USD', 'Completed', '2020-08-29T11:48:55Z', '2020-08-29 06:20:06', '2020-08-29 06:20:06'),
(61, 'test@gmail.com', '35R74243262143028', 2.50, 'USD', 'Completed', '2020-09-02T09:29:15Z', '2020-09-02 04:01:58', '2020-09-02 04:01:58'),
(62, 'test@gmail.com', '3KW5225537029820R', 10.00, 'USD', 'Completed', '2020-09-03T06:42:58Z', '2020-09-03 01:13:41', '2020-09-03 01:13:41'),
(63, 'himanshi.s@naapbooks.com', '9EH29865GN5606021', 20.00, 'USD', 'Completed', '2020-09-04T12:03:25Z', '2020-09-04 06:34:09', '2020-09-04 06:34:09'),
(64, 'himanshi.s@naapbooks.com', '7G146574A1303323N', 20.00, 'USD', 'Completed', '2020-09-09T07:28:47Z', '2020-09-09 01:59:28', '2020-09-09 01:59:28'),
(65, 'hitesh.v@naapbooks.com', '1GY26637V3892372K', 20.00, 'USD', 'Completed', '2020-09-10T08:42:34Z', '2020-09-10 03:13:13', '2020-09-10 03:13:13'),
(66, 'himanshi.s@naapbooks.com', '86351036E5235561T', 25.00, 'USD', 'Completed', '2020-09-14T08:23:25Z', '2020-09-14 02:54:12', '2020-09-14 02:54:12'),
(67, 'harsh.p@naapbooks.in', '84E15859NS750414K', 2.50, 'USD', 'Completed', '2020-09-15T12:08:13Z', '2020-09-15 06:38:54', '2020-09-15 06:38:54');

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
-- Table structure for table `friend`
--

CREATE TABLE `friend` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gamer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friend_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `acceptStatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`id`, `gamer_name`, `friend_name`, `created_at`, `updated_at`, `acceptStatus`) VALUES
(123, 'alpesh.n@naapbooks.com', 'test@gmail.com', NULL, NULL, 1),
(125, 'test@gmail.com', 'alpesh.n@naapbooks.com', NULL, NULL, 0);

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

--
-- Dumping data for table `gamemode`
--

INSERT INTO `gamemode` (`id`, `gamemode_type`, `gamemode_name`, `created_at`, `updated_at`) VALUES
(2, 'Fortnite', 'aSasd', '2020-08-20 06:10:35', '2020-08-20 06:10:35'),
(3, 'Fortnite', 'aSasd', '2020-08-21 05:54:39', '2020-08-21 05:54:39'),
(14, 'Valorant', 'asdas', '2020-08-21 06:18:53', '2020-08-21 06:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` bigint(20) NOT NULL,
  `to` bigint(20) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_read` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gamemode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from`, `to`, `message`, `is_read`, `created_at`, `updated_at`, `gamemode`) VALUES
(1, 4, 5, 'asd', 1, '2020-08-26 04:00:57', '2020-09-11 04:55:31', '5f45fbf8a88a7'),
(2, 13, 16, 'sad', 1, '2020-08-27 03:24:47', '2020-08-27 07:37:55', '5f4770064886a'),
(3, 13, 16, 'asdas', 1, '2020-08-27 03:24:53', '2020-08-27 07:37:55', '5f4770064886a'),
(4, 13, 16, 'asdasd', 1, '2020-08-27 03:24:57', '2020-08-27 07:37:55', '5f4770064886a'),
(5, 13, 16, 'asdasd', 1, '2020-08-27 03:24:57', '2020-08-27 07:37:55', '5f4770064886a'),
(6, 13, 16, 'asdasd', 1, '2020-08-27 03:24:57', '2020-08-27 07:37:55', '5f4770064886a'),
(7, 20, 4, 'dasda', 1, '2020-09-08 11:44:33', '2020-09-08 12:33:32', 'undefined'),
(8, 4, 20, 'sdsa', 1, '2020-09-08 11:44:53', '2020-09-08 12:33:58', 'undefined'),
(9, 4, 20, 'sd', 1, '2020-09-08 11:46:06', '2020-09-08 12:33:58', 'undefined'),
(10, 4, 20, 'sd', 1, '2020-09-08 11:47:26', '2020-09-08 12:33:58', 'undefined'),
(11, 4, 20, 'd', 1, '2020-09-08 11:49:47', '2020-09-08 12:33:58', 'undefined'),
(12, 4, 20, 'asd', 1, '2020-09-08 12:32:15', '2020-09-08 12:33:58', 'undefined'),
(13, 4, 20, 'ds', 1, '2020-09-08 12:33:09', '2020-09-08 12:33:58', 'undefined'),
(14, 4, 20, 'sssd', 1, '2020-09-08 12:33:14', '2020-09-08 12:33:58', 'undefined'),
(15, 4, 20, 'ss', 1, '2020-09-08 12:33:31', '2020-09-08 12:33:58', 'undefined'),
(16, 4, 5, 'w', 1, '2020-09-09 00:48:39', '2020-09-11 04:55:31', 'undefined'),
(17, 5, 4, 'hi', 1, '2020-09-09 00:48:56', '2020-09-11 04:55:31', 'undefined'),
(18, 4, 5, 'ok', 1, '2020-09-09 00:49:05', '2020-09-11 04:55:31', 'undefined'),
(19, 5, 4, 'sadadssad', 1, '2020-09-09 00:49:21', '2020-09-11 04:55:31', 'undefined'),
(20, 4, 5, 's', 1, '2020-09-09 00:51:50', '2020-09-11 04:55:31', 'undefined'),
(21, 4, 5, 'hi', 1, '2020-09-11 00:37:31', '2020-09-11 04:55:31', 'undefined'),
(22, 5, 4, 'confirm scoe', 1, '2020-09-11 00:37:45', '2020-09-11 04:55:31', 'undefined'),
(23, 5, 4, 'hi', 1, '2020-09-11 04:54:46', '2020-09-11 04:55:31', 'undefined'),
(24, 4, 5, 'hello', 1, '2020-09-11 04:55:30', '2020-09-11 04:55:31', 'undefined'),
(25, 13, 4, 'dfgdfg', 0, '2020-09-19 01:44:26', '2020-09-19 01:44:26', 'undefined'),
(26, 13, 4, 'dfgdfg', 0, '2020-09-19 01:44:27', '2020-09-19 01:44:27', 'undefined'),
(27, 13, 4, 'dfgdfg', 0, '2020-09-19 01:44:28', '2020-09-19 01:44:28', 'undefined'),
(28, 13, 4, 'dfgdfg', 0, '2020-09-19 01:44:28', '2020-09-19 01:44:28', 'undefined'),
(29, 13, 4, 'dsfdsf', 0, '2020-09-19 01:45:59', '2020-09-19 01:45:59', 'undefined'),
(30, 13, 4, 'hiiiiiii', 0, '2020-09-19 01:46:10', '2020-09-19 01:46:10', 'undefined');

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
(20, '2020_08_14_135125_create_terminated_game_list_table', 1),
(21, '2020_08_14_135602_add_epic_profile_id_to_epic_profile_id_ongoing_game_list_table', 1),
(22, '2020_08_14_135924_add_gamer_id_to_epic_profile_id_completed_games5_list_table', 1),
(23, '2020_08_17_054715_add_uniqids_to_ongoing_game_list_table', 1),
(24, '2020_08_17_055034_add_uniqids_to_completed_games_list_table', 1),
(25, '2020_08_17_140830_add_server_to_users_table', 1),
(26, '2020_08_18_095120_create_deposit_table', 1),
(27, '2020_08_18_143238_add_gamer_epic_profile_id_to_completed_games_list_table', 1),
(28, '2020_08_19_043356_add_game_id_to_users', 1),
(29, '2020_08_20_055951_add_data_to_terminated_game_list_table', 1),
(30, '2020_08_20_061513_add_role_to_users_table', 2),
(31, '2020_08_20_062837_create_terminated__games__lists_table', 3),
(32, '2020_08_20_103404_create_gamemodes_table', 4),
(33, '2020_08_21_115354_create_amounts_table', 5),
(34, '2020_08_21_131552_create_teams_table', 6),
(35, '2020_08_24_051207_create_platforms_table', 7),
(36, '2020_08_24_052928_add_public_to_wagers_table', 8),
(37, '2020_08_24_053038_add_public_to_ongoing_game_list_table', 8),
(38, '2020_08_24_053047_add_public_to_completed_games_list_table', 8),
(39, '2020_08_24_053615_add_public_to_wagers_table', 9),
(40, '2020_08_24_053653_add_public_to_ongoing_game_list_table', 9),
(41, '2020_08_24_055625_create_servers_table', 10),
(42, '2020_08_24_060151_create_servers_table', 11),
(43, '2020_08_24_060456_create_servers_table', 12),
(44, '2020_08_24_062249_create_codecreators_table', 13),
(45, '2020_08_24_064452_create_codecreators_table', 14),
(46, '2020_08_24_081953_create_assign_content_creators_table', 15),
(47, '2020_08_24_125258_add_team_to_ongoing_game_list_table', 16),
(48, '2020_08_25_063409_add_pimage_to_users_table', 17),
(49, '2020_08_25_072243_create_transaction_table', 18),
(50, '2020_08_25_082113_add_pimage_to_users_table', 19),
(51, '2020_08_25_122649_add_epicid_to_users_table', 20),
(52, '2020_08_25_124610_add_gmode_to_transaction_table', 21),
(53, '2020_08_26_081745_add_fromuserto_transaction_table', 22),
(54, '2020_08_28_072226_add_gamer_slug_to_send_requests_table', 23),
(55, '2020_08_28_090723_add_codecreator_type_to_codecreators_table', 24),
(56, '2020_08_28_095034_create_friend_table', 25),
(57, '2020_09_02_102608_add_paypalemail_to_users_table', 26),
(58, '2020_09_02_142530_add_whitelistip_type_to_users_table', 27),
(59, '2020_09_03_105930_add_accept_status_to_friend_table', 28),
(60, '2020_09_04_101842_add_username_to_wagers_table', 29),
(61, '2020_09_06_130254_add_pasfield_to_wagers_table', 30),
(62, '2020_09_10_095517_create_notification_table', 30),
(63, '2020_09_10_100454_create_notification_table', 31),
(64, '2020_09_11_124941_add_our_fees_slug_to_amount_table', 32),
(65, '2020_09_15_090532_create_paypals_table', 33);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noti_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noti_status` int(11) NOT NULL DEFAULT '0',
  `noti_gamer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `noti_type`, `noti_info`, `noti_link`, `noti_status`, `noti_gamer`, `created_at`, `updated_at`) VALUES
(3, 'Balance Deduction ', 'Admin Deducted \r\n Balance ', 'http://localhost/loyalwagers/userprofile#history', 1, 'hitesh.v@naapbooks.com', '2020-09-10 05:36:02', '2020-09-10 23:50:45'),
(4, 'Content Creator', 'Admin Added You As Content Creators', 'na', 1, 'hitesh.v@naapbooks.com', '2020-09-10 05:47:36', '2020-09-10 23:50:45'),
(10, 'Friend Request', 'You have got friend request from alpesh.n@naapbooks.com', 'na', 1, 'hitesh.v@naapbooks.com', '2020-09-10 06:49:42', '2020-09-10 23:50:45'),
(38, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/loyalwagers/userprofile#teams', 1, 'alpesh.n@naapbooks.com', '2020-09-11 04:08:34', '2020-09-11 04:08:44'),
(39, 'Admin Role', 'Admin Assigned You  Admin Role ', '#', 1, 'alpesh.n@naapbooks.com', '2020-09-11 04:12:25', '2020-09-11 04:12:46'),
(40, 'Content Creator', 'Admin Added You As Content Creators', 'http://localhost/loyalwagers/userprofile#teams', 1, 'alpesh.n@naapbooks.com', '2020-09-11 05:35:01', '2020-09-11 05:35:08'),
(41, 'Admin Role', 'Admin Removed You as Admin Role ', '#', 1, 'alpesh.n@naapbooks.com', '2020-09-11 05:37:59', '2020-09-11 05:38:08'),
(42, 'Balance Deduction ', 'Admin Deducted Balance ', 'http://localhost/loyalwagers/userprofile#history', 1, 'alpesh.n@naapbooks.com', '2020-09-11 05:43:36', '2020-09-11 05:44:13'),
(43, 'Game Request', 'You have got Game request from alpesh.n@naapbooks.com', 'http://localhost/loyalwagers/userprofile#teams', 1, 'test@gmail.com', '2020-09-11 06:41:53', '2020-09-11 10:27:19'),
(44, 'Game Request', 'You have got Game request from test@gmail.com', 'http://localhost/loyalwagers/userprofile#teams', 1, 'alpesh.n@naapbooks.com', '2020-09-11 06:58:11', '2020-09-11 06:58:33'),
(45, 'Balance Added', 'Admin Added Balance', 'http://localhost/Loyalwagers/userprofile#history', 1, 'hitesh.v@naapbooks.com', '2020-09-19 00:11:38', '2020-09-19 00:29:46'),
(46, 'Balance Deduction ', 'Admin Deducted Balance ', 'http://localhost/Loyalwagers/userprofile#history', 0, 'hitesh.v@naapbooks.in', '2020-09-19 00:23:05', NULL);

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
  `public` int(11) NOT NULL DEFAULT '0',
  `team` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
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
(1, 'sb-bqtpr1353259@business.example.com', 'AZHXb5iHM9lgyNmYQ9k1LHZsmJiUCDV6lfTxx17ezwK7BX6bntp-EqnSEXLZRvvjKf5JDN0HJ1ODnRQJ', 'EPVMIsxnyxNkHOxRDLjU4xx4aA0ZhrSBwzNmn4OOOLKuN4Z-O6RaYHx-njrhWLtPB93sfWcNDpZkhZWF', '2020-09-15 03:55:07', '2020-09-15 04:01:13'),
(2, 'sb-bqtpr1353259@business.example.com', 'AZHXb5iHM9lgyNmYQ9k1LHZsmJiUCDV6lfTxx17ezwK7BX6bntp-EqnSEXLZRvvjKf5JDN0HJ1ODnRQJ', 'EPVMIsxnyxNkHOxRDLjU4xx4aA0ZhrSBwzNmn4OOOLKuN4Z-O6RaYHx-njrhWLtPB93sfWcNDpZkhZWF', NULL, NULL);

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
(4, 'PC', '2020-08-24 00:18:19', '2020-08-24 00:18:19'),
(5, 'Console', '2020-08-24 00:18:23', '2020-08-24 00:18:23');

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
  `gamer_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 'NAE', '2020-08-24 00:36:50', '2020-08-24 00:36:50'),
(3, 'US', '2020-08-24 00:36:53', '2020-08-24 00:36:53');

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

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `team_name`, `team_player`, `created_at`, `updated_at`) VALUES
(1, '1v1', 2, '2020-08-21 08:14:05', '2020-08-21 08:14:05'),
(2, '2v2', 4, '2020-08-21 08:14:44', '2020-08-21 08:14:44');

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
(61, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'PC', '5f5765948aca0', 1, 1, '-1', 0, 0, '', '', 0, '1', 'Team 1', 'hjkhjk', '5', 121.00, '2020-09-08 05:51:19', '2020-09-08 05:51:19'),
(62, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'PC', '5f5765948aca0', 1, 1, '-1', 0, 0, '', '', 0, '1', 'Team 2', '1212', '1212', 1212.00, '2020-09-08 05:51:19', '2020-09-08 05:51:19'),
(64, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'PC', '5f57b91e64820', 1, 1, '-1', 0, 0, '', '', 0, '1', 'Team 2', '1212', '1212', 1212.00, '2020-09-09 00:47:09', '2020-09-09 00:47:09'),
(65, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f58739382295', 1, 1, '-1', 0, 0, '', '', 0, '2', 'Team 1', 'hjkhjk', '5', 121.00, '2020-09-09 01:04:46', '2020-09-09 01:04:46'),
(66, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f58739382295', 1, 1, '-1', 0, 0, '', '', 0, '2', 'Team 2', '1212', '1212', 1212.00, '2020-09-09 01:04:46', '2020-09-09 01:04:46'),
(67, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'PC', '5f587a9f39efb', 1, 1, '-1', 0, 0, '', '', 0, '1', 'Team 1', '1212', '85', 1212.00, '2020-09-09 02:57:08', '2020-09-09 02:57:08'),
(68, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'PC', '5f587a9f39efb', 1, 1, '-1', 0, 0, '', '', 0, '1', 'Team 2', 'hjkhjk', '5', 121.00, '2020-09-09 02:57:08', '2020-09-09 02:57:08'),
(69, 'test@gmail.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '5', 'PC', '5f59bdd241f37', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '555', '1216', 5666.00, '2020-09-10 00:35:09', '2020-09-10 00:35:09'),
(70, 'test@gmail.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '5', 'PC', '5f59c21eb71ff', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '555', '1216', 5666.00, '2020-09-10 00:40:21', '2020-09-10 00:40:21'),
(71, 'test@gmail.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '5', 'PC', '5f59c36077fda', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '555', '1216', 5666.00, '2020-09-10 00:45:43', '2020-09-10 00:45:43'),
(72, 'alpesh.n@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '5', 'PC', '5f59c51a21df7', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '1212', '85', 1212.00, '2020-09-10 00:53:04', '2020-09-10 00:53:04'),
(73, 'alpesh.n@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '2.5', 'PC', '5f59c6aabd202', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 1', '1212', '85', 1212.00, '2020-09-10 00:59:45', '2020-09-10 00:59:45'),
(74, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'Console', '5f59c93a6ced0', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '1212', '85', 1212.00, '2020-09-10 01:10:47', '2020-09-10 01:10:47'),
(75, 'alpesh.n@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '5', 'PC', '5f59d3dc5d396', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '1212', '85', 1212.00, '2020-09-10 01:56:00', '2020-09-10 01:56:00'),
(76, 'alpesh.n@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '2.5', 'PC', '5f59d584288c5', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 1', '1212', '85', 1212.00, '2020-09-10 02:03:04', '2020-09-10 02:03:04'),
(77, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f59e1851b4e7', 1, 1, '-1', 0, 0, '', '', 0, '2', 'Team 1', '555', '1216', 5666.00, '2020-09-10 03:04:31', '2020-09-10 03:04:31'),
(78, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f59e1851b4e7', 1, 1, '-1', 0, 0, '', '', 0, '2', 'Team 2', '1212', '85', 1212.00, '2020-09-10 03:04:31', '2020-09-10 03:04:31'),
(79, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f5a128da9ee6', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '1212', '85', 1212.00, '2020-09-10 06:23:32', '2020-09-10 06:23:32'),
(80, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f5a157557c95', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '555', '1216', 5666.00, '2020-09-10 06:35:54', '2020-09-10 06:35:54'),
(81, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f5a16f6bba69', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '555', '1216', 5666.00, '2020-09-10 06:42:18', '2020-09-10 06:42:18'),
(82, 'test@gmail.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '5', 'PC', '5f5a1949a3f9b', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '555', '1216', 5666.00, '2020-09-10 06:52:14', '2020-09-10 06:52:14'),
(83, 'alpesh.n@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '5', 'PC', '5f5a19d86d15a', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '1212', '85', 1212.00, '2020-09-10 06:54:37', '2020-09-10 06:54:37'),
(84, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'PC', '5f5a1bad5d2bf', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 1', '555', '1216', 5666.00, '2020-09-10 07:02:25', '2020-09-10 07:02:25'),
(85, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f5a1e39a15cb', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '1212', '85', 1212.00, '2020-09-10 07:13:18', '2020-09-10 07:13:18'),
(86, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f5a1e39a15cb', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 2', '555', '1216', 5666.00, '2020-09-10 07:13:18', '2020-09-10 07:13:18'),
(87, 'test@gmail.com', NULL, 'FortniteBoxfight', '2v2', 'NAE', '2.5', 'PC', '5f5b1ba2bac92', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 1', '555', '1216', 5666.00, '2020-09-11 01:14:31', '2020-09-11 01:14:31'),
(88, 'test@gmail.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '5', 'PC', '5f5b27b8e8adb', 1, 1, '-1', 0, 0, '', '', 0, '2', 'Team 1', '555', '1216', 5666.00, '2020-09-11 02:16:26', '2020-09-11 02:16:26'),
(89, 'alpesh.n@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '5', 'PC', '5f5b27b8e8adb', 1, 1, '-1', 0, 0, '', '', 0, '2', 'Team 2', '1212', '85', 1212.00, '2020-09-11 02:16:26', '2020-09-11 02:16:26'),
(90, 'test@gmail.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '2.5', 'PC', '5f5b31c8f3bf9', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 1', '555', '1216', 5666.00, '2020-09-11 02:49:02', '2020-09-11 02:49:02'),
(91, 'alpesh.n@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '2.5', 'PC', '5f5b31c8f3bf9', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 2', '1212', '85', 1212.00, '2020-09-11 02:49:02', '2020-09-11 02:49:02'),
(92, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '10', 'PC', '5f5b33c1bc4c0', 0, 0, '-1', 0, 0, '', '', 0, '4', 'Team 1', '555', '1216', 5666.00, '2020-09-11 02:57:25', '2020-09-11 02:57:25'),
(93, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'Console', '5f5b39e316778', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 1', '555', '1216', 5666.00, '2020-09-11 03:23:35', '2020-09-11 03:23:35'),
(94, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'Console', '5f5b39e316778', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 2', '1212', '85', 1212.00, '2020-09-11 03:23:35', '2020-09-11 03:23:35'),
(95, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'PC', '5f5b3b5fd16cb', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 1', '1212', '85', 1212.00, '2020-09-11 03:32:05', '2020-09-11 03:32:05'),
(96, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'PC', '5f5b3b5fd16cb', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 2', '555', '1216', 5666.00, '2020-09-11 03:32:05', '2020-09-11 03:32:05'),
(97, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'PC', '5f5b3d1ee3a16', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 1', '1212', '85', 1212.00, '2020-09-11 03:37:23', '2020-09-11 03:37:23'),
(98, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'PC', '5f5b3d1ee3a16', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 2', '555', '1216', 5666.00, '2020-09-11 03:37:23', '2020-09-11 03:37:23'),
(99, 'alpesh.n@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '5', 'PC', '5f5b3e5f8c8e2', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '1212', '85', 1212.00, '2020-09-11 03:42:43', '2020-09-11 03:42:43'),
(100, 'test@gmail.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '5', 'PC', '5f5b3e5f8c8e2', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 2', '555', '1216', 5666.00, '2020-09-11 03:42:43', '2020-09-11 03:42:43'),
(101, 'test@gmail.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '2.5', 'PC', '5f5b459007135', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 1', '555', '1216', 5666.00, '2020-09-11 04:13:25', '2020-09-11 04:13:25'),
(102, 'alpesh.n@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '2.5', 'PC', '5f5b459007135', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 2', '1212', '85', 1212.00, '2020-09-11 04:13:25', '2020-09-11 04:13:25'),
(103, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f5b48878f6a2', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '1212', '85', 1212.00, '2020-09-11 04:26:03', '2020-09-11 04:26:03'),
(104, 'alpesh.n@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '2.5', 'PC', '5f5b6977dc25f', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 1', '1212', '855', 1212.00, '2020-09-11 06:43:28', '2020-09-11 06:43:28'),
(105, 'test@gmail.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '2.5', 'PC', '5f5b6977dc25f', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 2', '555', '1216', 5666.00, '2020-09-11 06:43:28', '2020-09-11 06:43:28'),
(106, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'PC', '5f5b6a368d831', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 1', '1212', '855', 1212.00, '2020-09-11 06:44:47', '2020-09-11 06:44:47'),
(107, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f5b6a83c1dc1', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '555', '1216', 5666.00, '2020-09-11 06:47:18', '2020-09-11 06:47:18'),
(108, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f5b6a83c1dc1', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 2', '1212', '855', 1212.00, '2020-09-11 06:47:18', '2020-09-11 06:47:18'),
(109, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'PC', '5f5b6b7307bf5', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 1', '555', '1216', 5666.00, '2020-09-11 06:55:03', '2020-09-11 06:55:03'),
(110, 'test@gmail.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '10', 'PC', '5f5b6d52f3f11', 0, 0, '-1', 0, 0, '', '', 0, '4', 'Team 1', '555', '1216', 5666.00, '2020-09-11 07:03:04', '2020-09-11 07:03:04'),
(111, 'hitesh.v@naapbooks.com', NULL, 'Valorant', '1v1', 'US', '2.5', 'PC', '5f5b9631a9d9f', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 1', NULL, 'asdasdhjkh', 0.00, '2020-09-11 09:57:25', '2020-09-11 09:57:25'),
(112, 'himanshi.s@naapbooks.com', NULL, 'Valorant', '1v1', 'US', '2.5', 'PC', '5f5b9631a9d9f', 0, 0, '-1', 0, 0, '', '', 0, '1', 'Team 2', 'lkkj', 'dfgd', 0.00, '2020-09-11 09:57:25', '2020-09-11 09:57:25'),
(113, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f5b96984535d', 1, 1, '-1', 0, 0, '', '', 0, '2', 'Team 1', '1212', '855', 1212.00, '2020-09-11 10:11:54', '2020-09-11 10:11:54'),
(114, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f5b96984535d', 1, 1, '-1', 0, 0, '', '', 0, '2', 'Team 2', '555', '1216', 5666.00, '2020-09-11 10:11:54', '2020-09-11 10:11:54'),
(115, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f5b9d20674d6', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 1', '1212', '855', 1212.00, '2020-09-11 10:27:00', '2020-09-11 10:27:00'),
(116, 'test@gmail.com', NULL, 'Valorant', '1v1', 'NAE', '5', 'PC', '5f5b9d20674d6', 0, 0, '-1', 0, 0, '', '', 0, '2', 'Team 2', '555', '1216', 5666.00, '2020-09-11 10:27:00', '2020-09-11 10:27:00'),
(117, 'himanshi.s@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '5', 'PC', '5f5f29bcf2467', 1, 1, '1', 0, 0, '', '', 0, '2', 'Team 1', 'lkkj', 'dfgd', 0.00, '2020-09-14 03:13:57', '2020-09-14 03:13:57'),
(118, 'hitesh.v@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '5', 'PC', '5f5f29bcf2467', 1, 1, '5', 0, 0, '', '', 0, '2', 'Team 2', 'sdsdfsd', 'asdasdhjkh', 0.00, '2020-09-14 03:13:57', '2020-09-14 03:13:57'),
(119, 'hitesh.v@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'US', '2.5', 'PC', '5f5f2d7132ed2', 1, 1, '5', 0, 0, '', '', 0, '1', 'Team 1', 'sdsdfsd', 'asdasdhjkh', 0.00, '2020-09-14 03:29:46', '2020-09-14 03:29:46'),
(120, 'himanshi.s@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'US', '2.5', 'PC', '5f5f2d7132ed2', 1, 1, '2', 0, 0, '', '', 0, '1', 'Team 2', 'lkkj', 'dfgd', 0.00, '2020-09-14 03:29:46', '2020-09-14 03:29:46'),
(121, 'hitesh.v@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'PC', '5f65a229a0a14', 1, 1, '-1', 0, 1, '2020-09-19 06:19:31', '5f65a229a0a14_13.png', 0, '1', 'Team 1', 'sdsdfsd', 'asdasdhjkh', 0.00, '2020-09-19 00:50:39', '2020-09-19 00:50:39'),
(122, 'alpesh.n@naapbooks.com', NULL, 'Valorant', '1v1', 'NAE', '2.5', 'PC', '5f65a229a0a14', 1, 1, '-1', 0, 1, '2020-09-19 06:19:31', '5f65a229a0a14_13.png', 0, '1', 'Team 2', '1212', '855', 1212.00, '2020-09-19 00:50:39', '2020-09-19 00:50:39'),
(123, 'alpesh.n@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '2.5', 'PC', '5f65a3cc6469d', 1, 1, '-1', 0, 0, '', '', 0, '1', 'Team 1', '1212', '855', 1212.00, '2020-09-19 01:18:07', '2020-09-19 01:18:07'),
(124, 'hitesh.v@naapbooks.com', NULL, 'FortniteBoxfight', '1v1', 'NAE', '2.5', 'PC', '5f65a3cc6469d', 1, 1, '-1', 0, 0, '', '', 0, '1', 'Team 2', 'sdsdfsd', 'asdasdhjkh', 0.00, '2020-09-19 01:18:07', '2020-09-19 01:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
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
(49, 'test@gmail.com', 'Valorant', '1', '+', '2020-08-27 08:36:25', NULL, NULL),
(50, 'alpesh.n@naapbooks.com', 'Valorant', '1', '+', '2020-08-27 08:36:37', NULL, NULL),
(51, 'test@gmail.com', 'Valorant', '1', '+', '2020-08-27 23:48:55', NULL, NULL),
(52, 'test@gmail.com', 'Valorant', '1', '+', '2020-08-27 23:51:25', NULL, NULL),
(53, 'test@gmail.com', 'Valorant', '1', '+', '2020-08-27 23:56:22', NULL, NULL),
(54, 'test@gmail.com', 'Valorant', '1', '+', '2020-08-28 00:02:02', NULL, NULL),
(55, 'test@gmail.com', 'Valorant', '1', '+', '2020-08-28 00:11:52', NULL, NULL),
(56, 'alpesh.n@naapbooks.com', 'Valorant', '1', '+', '2020-08-28 00:12:54', NULL, NULL),
(57, 'test@gmail.com', 'Valorant', '1', '+', '2020-08-28 00:14:15', NULL, NULL),
(109, 'hitesh.v@naapbooks.com', 'Inviation Refferal Pay', '1.5', '+', '2020-08-28 05:39:45', NULL, NULL),
(110, 'check@gmail.com', 'paypal added', '2.50', '+', '2020-08-28 05:39:45', NULL, NULL),
(111, 'hitesh.v@naapbooks.com', 'Inviation Refferal Pay', '1.5', '+', '2020-08-28 05:39:56', NULL, NULL),
(112, 'check@gmail.com', 'paypal added', '2.50', '+', '2020-08-28 05:39:56', NULL, NULL),
(113, 'hitesh.v@naapbooks.com', 'Inviation Refferal Pay', '1.5', '+', '2020-08-28 05:50:25', NULL, NULL),
(114, 'check@gmail.com', 'paypal added', '2.50', '+', '2020-08-28 05:50:25', NULL, NULL),
(115, 'hitesh.v@naapbooks.com', 'Inviation Refferal Pay', '1.5', '+', '2020-08-28 05:59:43', NULL, NULL),
(116, 'check@gmail.com', 'paypal added', '2.50', '+', '2020-08-28 05:59:43', NULL, NULL),
(117, 'hitesh.v@naapbooks.com', 'Inviation Refferal Pay', '1.5', '+', '2020-08-28 05:59:47', NULL, NULL),
(118, 'check@gmail.com', 'paypal added', '2.50', '+', '2020-08-28 05:59:47', NULL, NULL),
(119, 'hitesh.v@naapbooks.com', 'Inviation Refferal Pay', '1.5', '+', '2020-08-28 06:01:41', NULL, NULL),
(120, 'check@gmail.com', 'paypal added', '2.50', '+', '2020-08-28 06:01:41', NULL, NULL),
(121, 'hitesh.v@naapbooks.com', 'Inviation Refferal Pay', '1.5', '+', '2020-08-28 06:12:28', NULL, NULL),
(122, 'check@gmail.com', 'paypal added', '2.50', '+', '2020-08-28 06:12:28', NULL, NULL),
(123, 'alpesh.n@naapbooks.com', 'paypal added', '15.00', '+', '2020-08-28 23:53:31', NULL, NULL),
(124, 'alpesh.n@naapbooks.com', 'paypal added', '25.00', '+', '2020-08-28 23:55:11', NULL, NULL),
(125, 'alpesh.n@naapbooks.com', 'paypal added', '10.00', '+', '2020-08-29 00:17:37', NULL, NULL),
(126, 'alpesh.n@naapbooks.com', 'paypal added', '2.50', '+', '2020-08-29 00:19:25', NULL, NULL),
(127, 'hitesh.v@naapbooks.com', 'paypal added', '25.00', '+', '2020-08-29 00:26:05', NULL, NULL),
(128, 'test@gmail.com', 'paypal added', '2.50', '+', '2020-08-29 00:48:04', NULL, NULL),
(129, 'test@gmail.com', 'paypal added', '2.50', '+', '2020-08-29 00:55:23', NULL, NULL),
(130, 'test@gmail.com', 'paypal added', '2.50', '+', '2020-08-29 06:20:06', NULL, NULL),
(131, 'test@gmail.com', 'paypal added', '2.50', '+', '2020-09-02 04:01:58', NULL, NULL),
(132, 'test@gmail.com', 'paypal added', '10.00', '+', '2020-09-03 01:13:41', NULL, NULL),
(133, 'admin@gmail.com', 'Admin Transfer', '14', '-', '2020-09-03 01:19:18', NULL, 'alpesh.n@naapbooks.com'),
(134, 'alpesh.n@naapbooks.com', 'Admin Transfer', '14', '+', '2020-09-03 01:19:18', NULL, NULL),
(135, 'admin@gmail.com', 'Admin Transfer', '14', '+', '2020-09-03 01:20:11', NULL, 'alpesh.n@naapbooks.com'),
(136, 'alpesh.n@naapbooks.com', 'Admin Transfer', '14', '-', '2020-09-03 01:20:11', NULL, NULL),
(137, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-03 01:36:29', NULL, NULL),
(138, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-03 01:36:31', NULL, NULL),
(139, 'test@gmail.com', 'Valorant', '1', '+', '2020-09-03 01:45:56', NULL, NULL),
(140, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-03 03:36:50', NULL, NULL),
(141, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-03 03:36:50', NULL, NULL),
(142, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-03 03:58:31', NULL, NULL),
(143, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-03 03:58:32', NULL, NULL),
(144, 'himanshi.s@naapbooks.com', 'paypal added', '20.00', '+', '2020-09-04 06:34:09', NULL, NULL),
(145, 'himanshi.s@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-07 04:00:07', NULL, NULL),
(146, 'hitesh.v@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-07 04:00:09', NULL, NULL),
(147, 'hitesh.v@naapbooks.com', 'Valorant', '1', '+', '2020-09-07 04:07:32', NULL, NULL),
(148, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-07 04:09:37', NULL, NULL),
(149, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-07 04:09:38', NULL, NULL),
(150, 'hitesh.v@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-07 04:28:08', NULL, NULL),
(151, 'himanshi.s@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-07 04:28:09', NULL, NULL),
(152, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-08 05:02:39', NULL, NULL),
(153, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-08 05:02:40', NULL, NULL),
(154, 'alpesh.n@naapbooks.com', 'Valorant', '2', '+', '2020-09-08 05:03:24', NULL, NULL),
(155, 'test@gmail.com', 'FortniteBoxfight', '5', '-', '2020-09-08 05:05:38', NULL, NULL),
(156, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '5', '-', '2020-09-08 05:05:38', NULL, NULL),
(157, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '5', '-', '2020-09-08 05:07:24', NULL, NULL),
(158, 'test@gmail.com', 'FortniteBoxfight', '5', '-', '2020-09-08 05:07:24', NULL, NULL),
(159, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '5', '-', '2020-09-08 05:09:46', NULL, NULL),
(160, 'test@gmail.com', 'FortniteBoxfight', '5', '-', '2020-09-08 05:09:57', NULL, NULL),
(161, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-08 05:11:05', NULL, NULL),
(162, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-08 05:11:06', NULL, NULL),
(163, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-08 05:14:44', NULL, NULL),
(164, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-08 05:14:45', NULL, NULL),
(165, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-08 05:19:28', NULL, NULL),
(166, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-08 05:19:29', NULL, NULL),
(167, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-08 05:36:19', NULL, NULL),
(168, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-08 05:36:36', NULL, NULL),
(169, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-08 08:57:23', NULL, NULL),
(170, 'tom@gmail.com', 'Valorant', '5', '-', '2020-09-08 08:57:24', NULL, NULL),
(171, 'tom@gmail.com', 'Valorant', '5', '-', '2020-09-08 09:16:49', NULL, NULL),
(172, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-08 09:16:51', NULL, NULL),
(173, 'tom@gmail.com', 'Valorant', '5', '-', '2020-09-08 10:45:50', NULL, NULL),
(174, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-08 10:45:50', NULL, NULL),
(176, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-08 12:34:01', NULL, NULL),
(177, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-09 00:49:43', NULL, NULL),
(178, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-09 00:49:45', NULL, NULL),
(179, 'hitesh.v@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-09 01:09:03', NULL, NULL),
(180, 'himanshi.s@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-09 01:09:04', NULL, NULL),
(181, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-09 01:13:14', NULL, NULL),
(182, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-09 01:13:15', NULL, NULL),
(183, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-09 01:14:09', NULL, NULL),
(184, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-09 01:14:11', NULL, NULL),
(185, 'himanshi.s@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-09 01:15:02', NULL, NULL),
(186, 'hitesh.v@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-09 01:15:04', NULL, NULL),
(187, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-09 01:33:16', NULL, NULL),
(188, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-09 01:33:17', NULL, NULL),
(189, 'alpesh.n@naapbooks.com', 'Valorant', '2', '+', '2020-09-09 01:34:47', NULL, NULL),
(190, 'himanshi.s@naapbooks.com', 'Valorant', '1', '+', '2020-09-09 01:35:27', NULL, NULL),
(191, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '1', '+', '2020-09-09 01:35:39', NULL, NULL),
(192, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '1', '+', '2020-09-09 01:35:47', NULL, NULL),
(193, 'himanshi.s@naapbooks.com', 'Valorant', '1', '+', '2020-09-09 01:37:16', NULL, NULL),
(194, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '1', '+', '2020-09-09 01:37:25', NULL, NULL),
(195, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-09 01:44:23', NULL, NULL),
(196, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-09 01:44:24', NULL, NULL),
(197, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '1', '+', '2020-09-09 01:47:17', NULL, NULL),
(198, 'himanshi.s@naapbooks.com', 'paypal added', '20.00', '+', '2020-09-09 01:59:28', NULL, NULL),
(199, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-09 01:59:58', NULL, NULL),
(200, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-09 01:59:59', NULL, NULL),
(201, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '1', '+', '2020-09-09 02:01:01', NULL, NULL),
(202, 'hitesh.v@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-09 02:34:22', NULL, NULL),
(203, 'himanshi.s@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-09 02:34:23', NULL, NULL),
(204, 'hitesh.v@naapbooks.com', 'Valorant', '1', '+', '2020-09-09 02:34:39', NULL, NULL),
(205, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-09 02:35:51', NULL, NULL),
(206, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-09 02:35:51', NULL, NULL),
(207, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '1', '+', '2020-09-09 02:37:47', NULL, NULL),
(208, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-09 02:42:06', NULL, NULL),
(209, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-09 02:42:07', NULL, NULL),
(210, 'himanshi.s@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-09 02:45:26', NULL, NULL),
(211, 'hitesh.v@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-09 02:45:28', NULL, NULL),
(212, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-09 03:22:31', NULL, NULL),
(213, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-09 03:22:33', NULL, NULL),
(214, 'alpesh.n@naapbooks.com', 'Valorant', '2', '+', '2020-09-09 03:23:24', NULL, NULL),
(215, 'himanshi.s@naapbooks.com', 'Valorant', '1', '+', '2020-09-09 03:27:34', NULL, NULL),
(216, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '5', '-', '2020-09-09 03:29:11', NULL, NULL),
(217, 'test@gmail.com', 'FortniteBoxfight', '5', '-', '2020-09-09 03:29:12', NULL, NULL),
(218, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '5', '-', '2020-09-09 03:30:42', NULL, NULL),
(219, 'test@gmail.com', 'FortniteBoxfight', '5', '-', '2020-09-09 03:30:47', NULL, NULL),
(220, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '5', '-', '2020-09-09 03:31:40', NULL, NULL),
(221, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-09 03:32:29', NULL, NULL),
(222, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-09 03:32:29', NULL, NULL),
(223, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-09 03:34:12', NULL, NULL),
(224, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-09 03:34:13', NULL, NULL),
(225, 'alpesh.n@naapbooks.com', 'Valorant', '1', '+', '2020-09-09 03:34:31', NULL, NULL),
(226, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-09 05:57:50', NULL, NULL),
(227, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-09 05:57:51', NULL, NULL),
(228, 'alpesh.n@naapbooks.com', 'Valorant', '1', '+', '2020-09-09 05:58:06', NULL, NULL),
(229, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-09 06:03:37', NULL, NULL),
(230, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-09 06:03:38', NULL, NULL),
(231, 'test@gmail.com', 'Valorant', '2', '+', '2020-09-09 06:03:53', NULL, NULL),
(232, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-09 06:06:15', NULL, NULL),
(233, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-09 06:06:15', NULL, NULL),
(234, 'test@gmail.com', 'Valorant', '2', '+', '2020-09-09 06:06:30', NULL, NULL),
(235, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-10 02:46:58', NULL, NULL),
(236, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-10 02:46:59', NULL, NULL),
(237, 'test@gmail.com', 'Valorant', '2', '+', '2020-09-10 02:47:27', NULL, NULL),
(238, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '10', '-', '2020-09-10 02:48:01', NULL, NULL),
(239, 'test@gmail.com', 'FortniteBoxfight', '10', '-', '2020-09-10 02:48:03', NULL, NULL),
(240, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '10', '-', '2020-09-10 02:48:49', NULL, NULL),
(241, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '10', '-', '2020-09-10 02:49:02', NULL, NULL),
(242, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-10 02:49:29', NULL, NULL),
(243, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-10 02:49:31', NULL, NULL),
(244, 'hitesh.v@naapbooks.com', 'Inviation Refferal Pay', '1.5', '+', '2020-09-10 03:13:13', NULL, NULL),
(245, 'hitesh.v@naapbooks.com', 'paypal added', '20.00', '+', '2020-09-10 03:13:13', NULL, NULL),
(246, 'hitesh.v@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-10 03:14:41', NULL, NULL),
(247, 'himanshi.s@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-10 03:14:42', NULL, NULL),
(248, 'admin@gmail.com', 'Admin Transfer', '6', '-', '2020-09-10 05:23:53', NULL, 'alpesh.n@naapbooks.com'),
(249, 'alpesh.n@naapbooks.com', 'Admin Transfer', '6', '+', '2020-09-10 05:23:53', NULL, NULL),
(250, 'admin@gmail.com', 'Admin Transfer', '55', '-', '2020-09-10 05:31:50', NULL, 'alpesh.n@naapbooks.com'),
(251, 'alpesh.n@naapbooks.com', 'Admin Transfer', '55', '+', '2020-09-10 05:31:50', NULL, NULL),
(252, 'admin@gmail.com', 'Admin Transfer', '55', '+', '2020-09-10 05:36:02', NULL, 'alpesh.n@naapbooks.com'),
(253, 'alpesh.n@naapbooks.com', 'Admin Transfer', '55', '-', '2020-09-10 05:36:02', NULL, NULL),
(254, 'hitesh.v@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-11 00:03:00', NULL, NULL),
(255, 'himanshi.s@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-11 00:03:02', NULL, NULL),
(256, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-11 00:16:17', NULL, NULL),
(257, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-11 00:16:18', NULL, NULL),
(258, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-11 00:37:17', NULL, NULL),
(259, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-11 00:37:17', NULL, NULL),
(260, 'test@gmail.com', 'Valorant', '1', '+', '2020-09-11 00:38:05', NULL, NULL),
(261, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-11 00:41:04', NULL, NULL),
(262, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-11 00:41:05', NULL, NULL),
(263, 'test@gmail.com', 'Valorant', '2', '+', '2020-09-11 00:41:23', NULL, NULL),
(264, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-11 00:45:14', NULL, NULL),
(265, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-11 00:45:14', NULL, NULL),
(266, 'alpesh.n@naapbooks.com', 'Valorant', '1', '+', '2020-09-11 00:45:31', NULL, NULL),
(267, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-11 00:50:38', NULL, NULL),
(268, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-11 00:50:39', NULL, NULL),
(269, 'alpesh.n@naapbooks.com', 'Valorant', '1', '+', '2020-09-11 00:50:52', NULL, NULL),
(270, 'himanshi.s@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-11 00:55:05', NULL, NULL),
(271, 'hitesh.v@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-11 00:55:06', NULL, NULL),
(272, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-11 00:55:27', NULL, NULL),
(273, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-11 00:55:28', NULL, NULL),
(274, 'himanshi.s@naapbooks.com', 'Valorant', '1', '+', '2020-09-11 00:55:23', NULL, NULL),
(275, 'test@gmail.com', 'Valorant', '1', '+', '2020-09-11 00:55:41', NULL, NULL),
(276, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-11 01:08:20', NULL, NULL),
(277, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-11 01:08:20', NULL, NULL),
(278, 'test@gmail.com', 'Valorant', '2', '+', '2020-09-11 01:08:39', NULL, NULL),
(279, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-11 01:59:07', NULL, NULL),
(280, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-11 01:59:09', NULL, NULL),
(281, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-11 02:00:37', NULL, NULL),
(282, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-11 02:00:38', NULL, NULL),
(283, 'alpesh.n@naapbooks.com', 'Valorant', '2', '+', '2020-09-11 02:00:50', NULL, NULL),
(284, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '5', '-', '2020-09-11 02:01:27', NULL, NULL),
(285, 'test@gmail.com', 'FortniteBoxfight', '5', '-', '2020-09-11 02:01:28', NULL, NULL),
(286, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-11 02:41:56', NULL, NULL),
(287, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-11 02:41:56', NULL, NULL),
(288, 'alpesh.n@naapbooks.com', 'Valorant', '2', '+', '2020-09-11 02:42:17', NULL, NULL),
(289, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-11 03:16:26', NULL, NULL),
(290, 'test@gmail.com', 'FortniteBoxfight', '2.5', '-', '2020-09-11 03:16:28', NULL, NULL),
(291, 'test@gmail.com', 'Valorant', '2.5', '-', '2020-09-11 04:55:41', NULL, NULL),
(292, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-11 04:55:42', NULL, NULL),
(293, 'test@gmail.com', 'Valorant', '1', '+', '2020-09-11 05:13:36', NULL, NULL),
(294, 'admin@gmail.com', 'Admin Transfer', '2', '+', '2020-09-11 05:43:36', NULL, 'alpesh.n@naapbooks.com'),
(295, 'alpesh.n@naapbooks.com', 'Admin Transfer', '2', '-', '2020-09-11 05:43:36', NULL, NULL),
(296, 'alpesh.n@naapbooks.com', 'Valorant', '5', '-', '2020-09-11 09:56:53', NULL, NULL),
(297, 'test@gmail.com', 'Valorant', '5', '-', '2020-09-11 09:56:54', NULL, NULL),
(298, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-14 01:44:40', NULL, NULL),
(299, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-14 01:44:41', NULL, NULL),
(300, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '1', '+', '2020-09-14 01:55:41', NULL, NULL),
(301, 'himanshi.s@naapbooks.com', 'paypal added', '25.00', '+', '2020-09-14 02:54:12', NULL, NULL),
(302, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-14 02:55:43', NULL, NULL),
(303, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-14 02:55:45', NULL, NULL),
(304, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '1', '+', '2020-09-14 02:57:03', NULL, NULL),
(305, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '5', '-', '2020-09-14 02:58:55', NULL, NULL),
(306, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '5', '-', '2020-09-14 02:58:56', NULL, NULL),
(307, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-14 03:14:47', NULL, NULL),
(308, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-14 03:14:47', NULL, NULL),
(309, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-14 03:36:28', NULL, NULL),
(310, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-14 03:36:30', NULL, NULL),
(311, 'himanshi.s@naapbooks.com', 'FortniteBoxfight', '1', '+', '2020-09-14 04:21:06', NULL, NULL),
(312, 'harsh.p@naapbooks.in', 'paypal added', '2.50', '+', '2020-09-15 06:38:54', NULL, NULL),
(313, 'hitesh.v@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-17 01:14:13', NULL, NULL),
(314, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-17 01:14:13', NULL, NULL),
(315, 'hitesh.v@naapbooks.com', 'Valorant', '1', '+', '2020-09-17 23:50:48', NULL, NULL),
(316, 'admin@gmail.com', 'Admin Transfer', '5', '-', '2020-09-19 00:11:38', NULL, 'hitesh.v@naapbooks.com'),
(317, 'hitesh.v@naapbooks.com', 'Admin Transfer', '5', '+', '2020-09-19 00:11:38', NULL, NULL),
(318, 'admin@gmail.com', 'Admin Transfer', '5', '+', '2020-09-19 00:23:05', NULL, 'hitesh.v@naapbooks.in'),
(319, 'hitesh.v@naapbooks.in', 'Admin Transfer', '5', '-', '2020-09-19 00:23:05', NULL, NULL),
(320, 'hitesh.v@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-19 00:46:45', NULL, NULL),
(321, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-19 00:46:46', NULL, NULL),
(322, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-19 01:05:53', NULL, NULL),
(323, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-19 01:05:54', NULL, NULL),
(324, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-19 01:27:07', NULL, NULL),
(325, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-19 01:27:08', NULL, NULL),
(326, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-19 01:41:14', NULL, NULL),
(327, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-19 01:41:16', NULL, NULL),
(328, 'alpesh.n@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-19 06:06:55', NULL, NULL),
(329, 'hitesh.v@naapbooks.com', 'Valorant', '2.5', '-', '2020-09-19 06:06:56', NULL, NULL),
(330, 'alpesh.n@naapbooks.com', 'Valorant', '1', '+', '2020-09-19 06:09:16', NULL, NULL),
(331, 'alpesh.n@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-19 06:09:58', NULL, NULL),
(332, 'hitesh.v@naapbooks.com', 'FortniteBoxfight', '2.5', '-', '2020-09-19 06:09:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epic_profile_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `server` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `pimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitation_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitation_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `epicid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valorantid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_balance` double(10,2) DEFAULT NULL,
  `paypalemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whitelistip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `slug`, `epic_profile_id`, `server`, `role`, `pimage`, `invitation_link`, `invitation_status`, `epicid`, `valorantid`, `user_balance`, `paypalemail`, `whitelistip`) VALUES
(3, 'admin', 'admin@gmail.com', NULL, '$2y$10$MiALskeaU9p3/UiPpGhOl.Mgj8pji/VdmBeh80kOJ3Rasvj6loIZa', 'wHK6QT35FJ6HBRMexJ3MLvAysaZ538s8IiZzy6SYYcHG2Vs9LB6ssx8crhMU', '2020-08-20 00:41:31', '2020-09-16 23:25:42', 'admin', '', NULL, 1, '14.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'alpesh', 'alpesh.n@naapbooks.com', '2020-09-02 06:44:00', '$2y$10$MiALskeaU9p3/UiPpGhOl.Mgj8pji/VdmBeh80kOJ3Rasvj6loIZa', 'IJka5ptDkuddDQVOfH47kGC36DOQk8U2lmoJovPetzv0j8MuasPXS2cTYqkI', '2020-08-20 00:41:43', '2020-09-19 06:09:58', 'alpesh', '1212', 'NAE', 0, '1 (14).png', NULL, '1', '1212', '855', 4658.00, 'sb-wehan1361382@personal.example.com', '5'),
(5, 'test', 'test@gmail.com', NULL, '$2y$10$uTAUAVcPmFKVdoqD7FMBIeos7.tH03x92udtqpSnRCQYb57coIg12', 'gRtf60BlTK70rnAO28uwMi79n4x8FRnegOLiYkIZqLFAIG5LdGAgxwLEZKX2', '2020-08-20 00:41:52', '2020-09-11 09:56:54', 'test', '555', 'NAE', 0, '1 (5).png', '123', '1', '5666', '1216', 5690.50, 'abc@gmail.com', NULL),
(13, 'Hitesh', 'hitesh.v@naapbooks.com', '2020-09-16 09:28:10', '$2y$10$L0kbsF4KfKwEBhN5A5q.ZeNVsXuarL7N7VeD4rnYHDwyWeGN2254O', 'nDLPMPuoElT1wfru4VE4QxMdbKgolHHQ8li5zNctiVYr1O8zoKt84LNJhb1f', '2020-08-27 00:04:23', '2020-09-19 06:09:59', 'Hitesh', 'sdsdfsd', 'NAE', 1, '1 (10).png', 'http://localhost/loyalwagers?invitation_token=9dd2585a167a8488a3bc33628a8d9c2a', '0', 'sdaf', 'asdasdhjkh', 88.50, 'hitesh.v@naapbooks.com', NULL),
(14, 'Himanshi', 'himanshi.s@naapbooks.com', NULL, '$2y$10$JUaCPZbzDaXW4reCSRcx7u9q/0LLC445wQN3GKLfF1YgM/MAFnTeG', 'T1ZBYAmjkLcdlEssQtOpGWsXGjub8ijlSqo81PcxLToq0LUMC4CgaqgHH1M1', '2020-08-27 00:04:46', '2020-09-17 08:30:41', 'Himanshi', 'lkkj', 'NAE', 0, '14.png', NULL, '1', 'sdajkkhujhg', 'dfgd', 15.50, NULL, NULL),
(15, 'Harsh', 'harsh.p@naapbooks.com', NULL, '$2y$10$Wzv0j8/9kaYoy0yEKshRluqzHc3cgFzZPeAAHTmSDM8jaydXCAGFq', 'yUWHljuxEscVcSqlts6wgEywHWoxXZBY3hK0w9hg94P9yIcAGHwi4e0cjt8x', '2020-08-27 00:18:31', '2020-08-27 02:00:30', 'Harsh', 'asdasdasd', 'NAE', 0, '13.png', NULL, '0', 'gfjhghjgjghj', 'sdgdfgdfg', 100.00, NULL, NULL),
(16, 'Rashmi', 'rashmi@naapbooks.com', NULL, '$2y$10$mdqmnnxsYsbs4/OSq38HqurpWOM9dv8njwBEV62sMbN9hmlLLjQRW', 'PZdVqsZTOzWBdjIogUDJW7Ur4OONIp0cTI53IeVVtFjMlmjGtx2bvV2doCdf', '2020-08-27 00:19:36', '2020-09-03 01:26:15', 'Rashmi', NULL, 'NAE', 0, '13.png', NULL, '0', NULL, 'fghfghh', 89.50, NULL, NULL),
(17, 'demo', 'demo@gmail.com', '2020-09-16 09:28:10', '$2y$10$MiALskeaU9p3/UiPpGhOl.Mgj8pji/VdmBeh80kOJ3Rasvj6loIZa', '5WkCwRXctf', '2020-08-28 00:32:46', '2020-08-28 01:07:23', 'demo', 'demo', 'US', 0, '13.png', NULL, '0', 'demo', 'demo', 50000.00, NULL, NULL),
(18, 'test222', 'test222@gmail.com', NULL, '$2y$10$TEa3TKYwC1qE9tDZyYSzuuqLna0ICt.M8s0ktPAOb3uQoN8gCnNym', 'S5HwM2a1fo', '2020-08-28 03:30:35', '2020-08-28 03:32:50', 'test222', 'test222', 'NAE', 0, '13.png', NULL, '0', 'test', 'test', 550.00, NULL, NULL),
(19, 'Check', 'check@gmail.com', NULL, '$2y$10$N/v0z6OGSxygXrtdWXcqwuLrX9aPAa9SBmDXvoP.vd9xF04flz5DC', 'B0XiShyxMhFhj0b1PcZShBY4jLDioXWhK5kBizL0ZCanx3jiTyv2pECqn836', '2020-08-28 04:52:56', '2020-08-28 06:12:28', 'Check', '', NULL, 0, '13.png', 'http://localhost/loyalwagers?invitation_token=9dd2585a167a8488a3bc33628a8d9c2a', '0', '', '', 92.50, NULL, NULL),
(51, 'admin11', 'harsh.p@naapbooks.in', '2020-09-15 12:21:59', '$2y$10$4jn32998fHW/3FmCLTQ16eUWTnr455d9OC4NIturtxk5NcV6utYjq', 'Kc5vJ98zvdeO5Ew4aAqp2M909cRMuqYGBUQx6BwGKYQFY2crfjd82CCpnHvY', '2020-09-15 06:31:53', '2020-09-15 08:11:32', 'admin11', 'kl;kl;kl;tyuty', 'NAE', 0, '13.png', NULL, '1', 'sda', 'dfgd', 2.50, 'harsh.p@naapbooks.in', NULL),
(53, 'admin1', 'hitesh.v@naapbooks.in', '2020-09-15 08:37:36', '$2y$10$3UxEearlTbWZkiahgQdwoeFc5i9Kw/oRYKcT7hj5YxnDmzHPj2GVe', 'Dxsrnd0w6X', '2020-09-15 08:36:34', '2020-09-19 00:23:05', 'admin1', '', NULL, 0, '13.png', NULL, '0', '', '', -5.00, NULL, NULL);

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
  `public` int(11) NOT NULL DEFAULT '0' COMMENT '1="private"',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gpassword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD UNIQUE KEY `creators_gamername` (`gamername`),
  ADD UNIQUE KEY `creators_uniqkey` (`uniqkey`);

--
-- Indexes for table `codecreators`
--
ALTER TABLE `codecreators`
  ADD PRIMARY KEY (`id`),


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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `amounts`
--
ALTER TABLE `amounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `assign_content_creators`
--
ALTER TABLE `assign_content_creators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `codecreators`
--
ALTER TABLE `codecreators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `completed_games_list`
--
ALTER TABLE `completed_games_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `gamemode`
--
ALTER TABLE `gamemode`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `ongoing_game_list`
--
ALTER TABLE `ongoing_game_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=769;

--
-- AUTO_INCREMENT for table `paypals`
--
ALTER TABLE `paypals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `platform`
--
ALTER TABLE `platform`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `send_requests`
--
ALTER TABLE `send_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `server`
--
ALTER TABLE `server`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `terminated_games_lists`
--
ALTER TABLE `terminated_games_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `wagers`
--
ALTER TABLE `wagers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=436;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
