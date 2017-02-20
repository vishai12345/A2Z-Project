-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2017 at 04:38 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a2z_tutors`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `street`, `city`, `country`, `postcode`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, '', '', '', '', NULL, '2017-02-10 05:06:16', '2017-02-10 05:06:16'),
(2, NULL, '', '', '', '', NULL, '2017-02-10 05:08:21', '2017-02-10 05:08:21'),
(4, 134, 'Bhopal', 'Bhopal', 'India', '486002', 'leU3TeWgqwEg03bjkzMNCghosoftVEa391BzcwBP', '2017-02-14 05:40:52', '2017-02-14 00:10:52'),
(5, 141, 'Satna', 'Indore', '', '', 'L8S8tQsFaTHvZxX6JLny9hIWt2TVDwWO1g8V06PZ', '2017-02-14 05:49:43', '2017-02-14 00:19:43'),
(8, 250, '', '', '', '', 'OlnV4Nx1Bs9OJ9TveKBbklnf5o0E2NkdOKv8oVc8', '2017-02-17 02:17:27', '2017-02-17 02:17:27');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) UNSIGNED NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `city_name`, `slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 8, 'Ballia', 'ballia-1', 'EayQ5l8l1oyt6f8pSVeHODsM9vCIxHX98fCw1YHd', '2017-02-18 14:32:09', '2017-02-18 09:02:09');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(11) NOT NULL,
  `user_1` int(100) DEFAULT NULL,
  `user_2` int(111) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`id`, `user_1`, `user_2`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 268, 252, '', '2017-02-20 06:15:16', '2017-02-20 06:15:16'),
(5, 269, 252, '', '2017-02-20 06:17:15', '2017-02-20 06:17:15'),
(6, 252, 269, NULL, '2017-02-20 12:07:01', '2017-02-20 12:07:01'),
(7, 252, 268, NULL, '2017-02-20 12:15:15', '2017-02-20 12:15:15'),
(8, 270, 252, '', '2017-02-20 06:50:39', '2017-02-20 06:50:39'),
(9, 252, 270, '', '2017-02-20 06:50:39', '2017-02-20 06:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `country_name` varchar(111) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'India', 'PAXXgWp7UxIpXK1tamxuik3EpT9DfCxfddT0aSJo', '2017-02-09 10:46:41', '2017-02-09 05:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(21) NOT NULL,
  `from_id` int(11) DEFAULT NULL,
  `from_name` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `regarding_sub` varchar(111) DEFAULT NULL,
  `postal_code` varchar(111) DEFAULT NULL,
  `message_body` varchar(255) DEFAULT NULL,
  `read_message` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from_id`, `from_name`, `user_id`, `regarding_sub`, `postal_code`, `message_body`, `read_message`, `remember_token`, `created_at`, `updated_at`) VALUES
(327, 268, 'ggvd happy', 252, 'maths', '486001', 'fgufgbfkj', 1, 'CnxLa97oGNMOc4e5JmG2tZukWJojsaPY9ESewmww', '2017-02-20 11:46:08', '2017-02-20 06:16:08'),
(328, 252, 'vishal chatur', 268, NULL, NULL, 'hiii', 1, 'GTIw8hi23NdwFMjwCcLpOshOWYWE3tzIiDQBn9IK', '2017-02-20 12:15:41', '2017-02-20 06:45:41'),
(329, 269, 'ggvd grtg', 252, 'science', '486001', 'fhfhekjfgjre', 1, 'NdpM6DZe0kqEl4CCLM97SnWsyo6pd9RGhJ1wQvYL', '2017-02-20 11:47:58', '2017-02-20 06:17:58'),
(330, 252, 'vishal chatur', 269, NULL, NULL, 'fhifhfb', 1, 'jM64fkOSzaNNbAMhdOkhC0NSf7Yd5RIu5PBaE19i', '2017-02-20 12:07:09', '2017-02-20 06:37:09'),
(331, 252, 'vishal chatur', 269, NULL, NULL, 'jklrjgfl', 1, 'jM64fkOSzaNNbAMhdOkhC0NSf7Yd5RIu5PBaE19i', '2017-02-20 12:07:09', '2017-02-20 06:37:09'),
(332, 252, 'vishal chatur', 269, NULL, NULL, 'gfjfjg', 1, 'jM64fkOSzaNNbAMhdOkhC0NSf7Yd5RIu5PBaE19i', '2017-02-20 12:07:09', '2017-02-20 06:37:09'),
(333, 252, 'vishal chatur', 269, NULL, NULL, 'fgmm', 1, 'jM64fkOSzaNNbAMhdOkhC0NSf7Yd5RIu5PBaE19i', '2017-02-20 12:07:09', '2017-02-20 06:37:09'),
(334, 252, 'vishal chatur', 269, NULL, NULL, 'fglkdfg\\', 1, 'jM64fkOSzaNNbAMhdOkhC0NSf7Yd5RIu5PBaE19i', '2017-02-20 12:07:09', '2017-02-20 06:37:09'),
(335, 252, 'vishal chatur', 269, NULL, NULL, 'flkfdg', 1, 'jM64fkOSzaNNbAMhdOkhC0NSf7Yd5RIu5PBaE19i', '2017-02-20 12:07:10', '2017-02-20 06:37:10'),
(336, 252, 'vishal chatur', 269, NULL, NULL, 'dfgjlkdf', 1, 'jM64fkOSzaNNbAMhdOkhC0NSf7Yd5RIu5PBaE19i', '2017-02-20 12:07:10', '2017-02-20 06:37:10'),
(337, 252, 'vishal chatur', 269, NULL, NULL, 'gkgl', 1, 'drzApfQzB0gRsiB0skwYYjYay6xrHW3Kb6dLRlXl', '2017-02-20 12:11:47', '2017-02-20 06:41:47'),
(338, 252, 'vishal chatur', 269, NULL, NULL, 'fgngkf', 1, 'drzApfQzB0gRsiB0skwYYjYay6xrHW3Kb6dLRlXl', '2017-02-20 12:11:47', '2017-02-20 06:41:47'),
(339, 269, 'ggvd grtg', 252, NULL, NULL, 'ky be bhag', 1, 'fePilY5n95db2UO7kTrA6juzPtAXDWQJlEFMVIkm', '2017-02-20 12:12:05', '2017-02-20 06:42:05'),
(340, 252, 'vishal chatur', 269, NULL, NULL, 'are tu bhag', 1, 'drzApfQzB0gRsiB0skwYYjYay6xrHW3Kb6dLRlXl', '2017-02-20 12:12:16', '2017-02-20 06:42:16'),
(341, 269, 'ggvd grtg', 252, NULL, NULL, 'mai kyn bhagun', 1, 'fePilY5n95db2UO7kTrA6juzPtAXDWQJlEFMVIkm', '2017-02-20 12:12:28', '2017-02-20 06:42:28'),
(342, 252, 'vishal chatur', 269, NULL, NULL, 'abe kym ki tu chutiya h', 0, 'drzApfQzB0gRsiB0skwYYjYay6xrHW3Kb6dLRlXl', '2017-02-20 06:42:39', '2017-02-20 06:42:39'),
(343, 268, 'ggvd happy', 252, NULL, NULL, 'are bhag', 1, 'BEjoNuotOnxvDZzR5KByYJ1RczKhzKC2KXOWA0cD', '2017-02-20 12:15:55', '2017-02-20 06:45:55'),
(344, 252, 'vishal chatur', 268, NULL, NULL, 'are tu bhi', 1, 'drzApfQzB0gRsiB0skwYYjYay6xrHW3Kb6dLRlXl', '2017-02-20 12:16:10', '2017-02-20 06:46:10'),
(345, 268, 'ggvd happy', 252, NULL, NULL, 'haan be', 1, 'BEjoNuotOnxvDZzR5KByYJ1RczKhzKC2KXOWA0cD', '2017-02-20 12:16:22', '2017-02-20 06:46:22'),
(346, 270, 'vishal happy', 252, 'ddd', '486001', 'fguiefrghekfrbkj', 1, 'pKBesnikGwTrAJZCFns1Uqt5dq9mSgzbEWQZjeIJ', '2017-02-20 12:21:42', '2017-02-20 06:51:42'),
(347, 252, 'vishal chatur', 270, NULL, NULL, 'haan bahi', 1, 'mz6PgitrUpp9e4RvEPr4P733HrQaG1DWyqyWpnVz', '2017-02-20 12:21:57', '2017-02-20 06:51:57'),
(348, 270, 'vishal happy', 252, NULL, NULL, 'ky sir ji', 1, 'pKBesnikGwTrAJZCFns1Uqt5dq9mSgzbEWQZjeIJ', '2017-02-20 12:22:08', '2017-02-20 06:52:08'),
(349, 252, 'vishal chatur', 270, NULL, NULL, 'bas badiya', 1, 'mz6PgitrUpp9e4RvEPr4P733HrQaG1DWyqyWpnVz', '2017-02-20 12:22:29', '2017-02-20 06:52:29'),
(350, 270, 'vishal happy', 252, NULL, NULL, 'are bhai', 0, 'pKBesnikGwTrAJZCFns1Uqt5dq9mSgzbEWQZjeIJ', '2017-02-20 08:45:31', '2017-02-20 08:45:31'),
(351, 270, 'vishal happy', 252, NULL, NULL, 'gjor', 0, 'pKBesnikGwTrAJZCFns1Uqt5dq9mSgzbEWQZjeIJ', '2017-02-20 09:15:11', '2017-02-20 09:15:11'),
(352, 270, 'vishal happy', 252, NULL, NULL, 'rgjorgi', 0, 'pKBesnikGwTrAJZCFns1Uqt5dq9mSgzbEWQZjeIJ', '2017-02-20 09:15:14', '2017-02-20 09:15:14'),
(353, 270, 'vishal happy', 252, NULL, NULL, 'rioigre', 0, 'pKBesnikGwTrAJZCFns1Uqt5dq9mSgzbEWQZjeIJ', '2017-02-20 09:15:48', '2017-02-20 09:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `email` tinyint(1) NOT NULL,
  `phone` tinyint(1) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shankar@gmail.com', '341d141fbf5e5b657a1b1a67df50dd18f355a7936bae1d0574af42d448d5b0c5', '2017-01-28 07:57:33'),
('shankarsingh0807@gmail.com', 'd7a99e2af4aed12be6c35f6abb2beced6affb208641b4603ca5173cc632c33d4', '2017-01-28 08:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `subject_id` int(11) NOT NULL,
  `university` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `studying` tinyint(1) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`id`, `user_id`, `subject_id`, `university`, `college`, `others`, `level`, `studying`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 138, 1, '', '', '', '', 0, '', '2017-02-15 06:23:14', '0000-00-00 00:00:00'),
(3, 137, 1, '', '', '', '', 0, '', '2017-02-15 07:40:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rate_per_subject`
--

CREATE TABLE `rate_per_subject` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `subject_category_id` int(11) NOT NULL,
  `rate` float(10,2) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `student_user_id` int(11) UNSIGNED NOT NULL,
  `tutor_user_id` int(11) UNSIGNED NOT NULL,
  `review` longtext NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) UNSIGNED NOT NULL,
  `state_name` varchar(100) NOT NULL,
  `state_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state_name`, `state_code`, `slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'Utter pradesh', 'UP', 'utter-pradesh', 'nAqtqA9coFLnJcvDfxhNLM2llz4AMKPZQGvc7xP2', '2017-02-04 08:34:06', '2017-02-04 08:34:06'),
(9, 'Himanchal Pradesh', 'HP', 'himanchal-pradesh', 'nAqtqA9coFLnJcvDfxhNLM2llz4AMKPZQGvc7xP2', '2017-02-04 08:34:18', '2017-02-04 08:34:18'),
(10, 'Andra Pradesh', 'AP', 'andra-pradesh', 'nAqtqA9coFLnJcvDfxhNLM2llz4AMKPZQGvc7xP2', '2017-02-04 08:34:41', '2017-02-04 08:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Maths', 'LJuC4KvGzP', '2017-02-04 04:24:16', '2017-02-04 04:24:16'),
(2, 'English', 'r5FrYWeRpY', '2017-02-04 04:24:32', '2017-02-04 04:24:32'),
(3, 'Science', 'wQdjZmVpQ9', '2017-02-04 04:24:43', '2017-02-04 04:24:43'),
(4, 'French', 'raUJSstjkr', '2017-02-04 04:24:55', '2017-02-04 04:24:55'),
(5, 'Spanish', 'FYtXloOGu9', '2017-02-04 04:25:12', '2017-02-04 04:25:12'),
(6, 'German', 'mEIa8mt24Q', '2017-02-04 04:25:24', '2017-02-04 04:25:24'),
(7, 'History', 'ijyg5xXByo', '2017-02-04 04:25:39', '2017-02-04 04:25:39'),
(8, 'Geography', 'dTt06pkOf5', '2017-02-04 04:25:51', '2017-02-04 04:25:51'),
(9, 'Business', 'JBNzwQXfXK', '2017-02-04 04:26:03', '2017-02-04 04:26:03'),
(10, 'law', 'IuCIJCbCoO', '2017-02-04 04:26:25', '2017-02-04 04:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `subjectsub_cat`
--

CREATE TABLE `subjectsub_cat` (
  `id` int(10) NOT NULL,
  `subject_cat_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `sub_cat_name` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectsub_cat`
--

INSERT INTO `subjectsub_cat` (`id`, `subject_cat_id`, `subject_name`, `sub_cat_name`, `category_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 10, 'Maths', 'Pure Maths', 'KS3', 'mvuVnqHneESm9oHWIaRCzt1UXhx0Rgvyn93cjSD9', '2017-02-18 08:56:50', '2017-02-18 08:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `subject_categories`
--

CREATE TABLE `subject_categories` (
  `id` int(11) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `subject_name` varchar(111) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_categories`
--

INSERT INTO `subject_categories` (`id`, `subject_id`, `subject_name`, `category_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 1, 'Maths', 'Pure Maths', 'mvuVnqHneESm9oHWIaRCzt1UXhx0Rgvyn93cjSD9', '2017-02-18 07:48:40', '2017-02-18 07:48:40'),
(11, 1, 'Maths', 'Further Maths', 'mvuVnqHneESm9oHWIaRCzt1UXhx0Rgvyn93cjSD9', '2017-02-18 07:48:47', '2017-02-18 07:48:47'),
(12, 2, 'English', 'Comprehensive', 'mvuVnqHneESm9oHWIaRCzt1UXhx0Rgvyn93cjSD9', '2017-02-18 07:48:58', '2017-02-18 07:48:58'),
(13, 2, 'English', 'Literature', 'mvuVnqHneESm9oHWIaRCzt1UXhx0Rgvyn93cjSD9', '2017-02-18 07:49:06', '2017-02-18 07:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `travel_policy`
--

CREATE TABLE `travel_policy` (
  `id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `distance` float(10,2) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tutor_profile`
--

CREATE TABLE `tutor_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `bio` longtext,
  `video` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor_profile`
--

INSERT INTO `tutor_profile` (`id`, `user_id`, `bio`, `video`, `profile_picture`, `tagline`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 148, NULL, NULL, '2017-02-15-18-33-43-15193675_1200282796728580_7601578391709280416_n.jpg', NULL, NULL, '2017-02-15 18:33:43', '2017-02-15 13:03:43'),
(2, 138, NULL, NULL, '2017-02-15-07-20-11-15193675_1200282796728580_7601578391709280416_n.jpg', NULL, NULL, '2017-02-15 01:50:11', '2017-02-15 01:50:11'),
(3, 141, NULL, NULL, '2017-02-17-10-45-54-509756-1452716613-s.jpg', NULL, NULL, '2017-02-17 10:45:54', '2017-02-17 05:15:54'),
(4, 250, NULL, NULL, '2017-02-17-07-55-07-1499192-1444798263-s.jpg', NULL, NULL, '2017-02-17 02:25:07', '2017-02-17 02:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verification_code` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `lastname`, `email`, `mobile`, `password`, `role`, `status`, `image_url`, `verification_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(134, 'happy12345', 'happy', 'Gladiator', 'happy12345@gmail.com', '8234055619', '$2y$10$hXJm9sowVorEz0EefmP73eJumstS7sNfb96O1.pecQk7n1NiAXpgW', 'admin', 1, '2017-02-11-10-55-52-layer-8.jpg', '5ef0b4eba35ab2d6180b0bca7e46b6f9', 'h5bh1UtwAztBLh2DIRcjvH546kFiB2lWKEWCThVMVmaRlERyUwSRmMSzLiKD', '2017-02-11 04:27:16', '2017-02-18 09:02:30'),
(136, 'xxx12345', '', '', 'xxx12345@gmail.com', '', '$2y$10$oggc3jMJYmz5CDi9B3WlNORO2TywFue/GHcTauHPQC1JSVu1Wivy6', 'tutor', 1, '2017-02-11-11-08-41-layer-8.jpg', 'ac627ab1ccbdb62ec96e702f07f6425b', 'Fw40r6lg4Zd5lE21sSpcuWCjVPfhqT4cG12JweTB9f5weUGOk2XBEMDe0m80', '2017-02-11 05:26:39', '2017-02-11 05:38:50'),
(137, 'vishal.mj', '', '', 'vishal.mj@gmail.com', '', '$2y$10$IfgNTvujQ/QnJ1KgYueKAOHmYF7KfofZIceJUnQsD9/gsZBtz3MHm', 'tutor', 1, '', '9f396fe44e7c05c16873b05ec425cbad', 'hvYeHkJUUu8vKojBRksXRsXQIrr59ZibExo43X5mTd8Pn03AMq647x29L61E', '2017-02-11 05:39:12', '2017-02-17 05:34:24'),
(138, 'vc121356', '', '', 'vc121356@gmail.com', '', '$2y$10$FG.ph.nTWchKH3wnPWvxMu267yxUm99kyZZOmOyeTBZz27oODfz62', 'tutor', 1, '2017-02-15-07-20-11-15193675_1200282796728580_7601578391709280416_n.jpg', 'f76a89f0cb91bc419542ce9fa43902dc', 'bZxxP4DGpwM8Jj1yENFxpdlVWS69e8chXFAKVE9A1zd0pVuxRoTFGv4PEEmE', '2017-02-11 05:47:06', '2017-02-15 01:50:24'),
(139, 'vc121', '', '', 'vc121@gmail.com', '', '$2y$10$tK6WOfLBTQaxFQwMMjZX9.1p.5NLb8uaRuhHnaTxLA/GHpR5PG90W', 'tutor', 1, '2017-02-11-11-36-15-layer-9.jpg', '6cdd60ea0045eb7a6ec44c54d29ed402', 'XMEEczTxL1KdG13buoG8wUKd7ue4ZhDwy6RH23GUAbCG9EOuRynLTNvjO1xL', '2017-02-11 06:05:05', '2017-02-11 06:22:06'),
(140, 'ashish', '', '', 'ashish11@gmail.com', '', '$2y$10$tYMpsWEaTN7EDVIjkN06uuha4kBnL2W2VIY.xbiU0hLpl/sTdILuO', 'tutor', 1, '2017-02-11-12-41-57-layer-8.jpg', '9778d5d219c5080b9a6a17bef029331c', 'ifAtOi0CwYenhr9jznqilb1m7Tb7YcWgxbZ94B0nggGA6RcMOAbjHOjywV7u', '2017-02-11 06:22:29', '2017-02-13 09:44:34'),
(141, 'Amit12345', 'amit', 'mishra', 'amit12345@gmail.com', '8520025888', '$2y$10$IEpX1Ju0IbGZg4LAjRS4m.qzwIexihqmT/C8oJmR6JtC7a0O8DQFS', 'tutor', 1, '2017-02-17-10-45-54-509756-1452716613-s.jpg', 'd554f7bb7be44a7267068a7df88ddd20', 'WgAqzB4K5lPAGz12TbQn6o8nPXkHZF2LO7VUYMswATOZNw99U1pkT1qCNvTg', '2017-02-11 10:19:31', '2017-02-17 05:16:39'),
(148, 'satveerSir', '', '', 'satveerSir12345@gmail.com', '', '$2y$10$3PnbI4XFjRxY3Kk37etP/uZo9veqaCdM1mnrFe2ousM60BXbIE4au', 'tutor', 1, '2017-02-15-18-33-43-15193675_1200282796728580_7601578391709280416_n.jpg', 'cf67355a3333e6e143439161adc2d82e', 'C977WdamhlUWgFgAf10d60LtzTjZ0pvl1Kbg02o2PtxQVP3OiVLGvk7XgVtU', '2017-02-14 05:41:47', '2017-02-15 13:03:43'),
(250, 'vishal happy', 'vishal', 'happy', 'xxx__12345@hotmail.com', '8520852085', '$2y$10$mGCHy8z/x8zCv3RdON55Ke0tV4cYau5SfrO64JtbFkiaHyjT1tLsG', 'student', 1, '2017-02-17-07-55-07-1499192-1444798263-s.jpg', NULL, NULL, '2017-02-17 02:16:51', '2017-02-17 02:25:07'),
(251, 'ewd ewdsc', 'ewd', 'ewdsc', 'xxdcx12345@hotmail.com', '9876543210', '$2y$10$qM.22w1FpG8feSnw1gQfqungIPxVdIRblJWyx6iW4D8OGEJKB0Q8W', 'student', 1, NULL, NULL, '3sG6PqbjjFqx2VEmDiTlHOehzBWOfuupw37kpauku9PTo7nERIiO1V0JX2ch', '2017-02-17 05:16:57', '2017-02-17 05:17:04'),
(252, 'vishal chatur', 'vishal', 'chatur', 'vc12edcs1365@gmail.com', '9876543210', '$2y$10$CouPZ8y97aghEp3rs/Acf.45YAP4LAwICXEJDwTZQ5eZyedudPFYi', 'student', 1, NULL, NULL, 'hMzEhhzrdBHlGkzoOZ0jfHhXyhklfQ0y6BXK72qqUliM5QN4h9S7hzwzajA7', '2017-02-17 05:31:50', '2017-02-20 06:52:23'),
(253, 'vishal happy', 'vishal', 'happy', 'vc1fv21356@gmail.com', '9876543210', '$2y$10$VHWzjslZahMorHX.GJLBreX3DOYTUb6Y5RNK450awVAB9Md2C7fMu', 'student', 1, NULL, NULL, 'iCi4x9MynINUcD0D4UOksuI8LI56bJHhHskPdlDWgrFhQUHfrrw6H2MU2EPx', '2017-02-17 05:35:39', '2017-02-20 00:25:55'),
(254, 'vishal happy', 'vishal', 'happy', 'xxx15452345@hotmail.com', '9876543210', '$2y$10$JTJ/bWAE0gJfBXe1WNeZ5u8OqQEcPSxz0Svkge2DBT7dupvP4Pkdu', 'student', 1, NULL, NULL, 'LraQvvxuKKuqHJV85UFHtKh4oJEzaiKlLwMo65R2CvFl8WArPc0BEMy4YSKw', '2017-02-20 00:24:46', '2017-02-20 05:44:35'),
(255, 'vishal12345 chatur12345', 'vishal12345', 'chatur12345', 'vishal123456789@gami.com', '9876543210', '$2y$10$mBU0zwWfUazRghkw7EOVvOF1OGu/LDHqWOUP.BobQvl5ykOzVkw6C', 'student', 1, NULL, NULL, 'pWzo3cmcVn7wJw70w16qQ7aT43Yd7BImSsycfYQuJQAXI871jBFseG7GWPJj', '2017-02-20 03:45:04', '2017-02-20 03:45:38'),
(268, 'ggvd happy', 'ggvd', 'happy', 'ffffamit12345@gmail.com', '9876543210', '$2y$10$pHo92Fl4JgRubuY24qGwr.AFX8bEb92CBlsAkjTIxWhJFAVHh9NjK', 'student', 1, NULL, NULL, 'B12x2ZlmtB0jvGWckOr6RnO12NKtMvunY0tJVzL7ixl8TWzyLHQNwKAJ4lfl', '2017-02-20 06:15:16', '2017-02-20 06:46:59'),
(269, 'ggvd grtg', 'ggvd', 'grtg', 'amit1fffff2345@gmail.com', '9876543210', '$2y$10$YNCQabt.Avga0ZPnW/FJ0ekA7HJlvdTUlkh3Kz1/ZKeZR1Fkl1A0W', 'student', 1, NULL, NULL, '9eZkcT0mOiFYMTo1Wf5cuQQQIjyojo6mpEGwmTQbvcmbv2pinBRVXpDYyyrV', '2017-02-20 06:17:15', '2017-02-20 06:47:05'),
(270, 'vishal happy', 'vishal', 'happy', 'vc1213565656@gmail.com', '12345644', '$2y$10$o7QJh31oaY2fyOw5lgXWyuP3eso/AjzzVoL7gR9Ol7k7NVIRIs7Yu', 'student', 1, NULL, NULL, NULL, '2017-02-20 06:50:38', '2017-02-20 06:50:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `rate_per_subject`
--
ALTER TABLE `rate_per_subject`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `subject_category_id` (`subject_category_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `student_user_id` (`student_user_id`),
  ADD KEY `student_user_id_2` (`student_user_id`),
  ADD KEY `tutor_user_id` (`tutor_user_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectsub_cat`
--
ALTER TABLE `subjectsub_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_categories`
--
ALTER TABLE `subject_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_policy`
--
ALTER TABLE `travel_policy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `tutor_profile`
--
ALTER TABLE `tutor_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subjectsub_cat`
--
ALTER TABLE `subjectsub_cat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `subject_categories`
--
ALTER TABLE `subject_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tutor_profile`
--
ALTER TABLE `tutor_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `fk_user_address_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD CONSTRAINT `fk_subject_qualification_id` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `fk_user_qualification_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rate_per_subject`
--
ALTER TABLE `rate_per_subject`
  ADD CONSTRAINT `fk_category_subject_id` FOREIGN KEY (`subject_category_id`) REFERENCES `subject_categories` (`id`),
  ADD CONSTRAINT `fk_user_subject_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk_user_s_review_id` FOREIGN KEY (`student_user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_user_t_review_id` FOREIGN KEY (`tutor_user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `travel_policy`
--
ALTER TABLE `travel_policy`
  ADD CONSTRAINT `fk_address_travel_id` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`);

--
-- Constraints for table `tutor_profile`
--
ALTER TABLE `tutor_profile`
  ADD CONSTRAINT `fk_user_tutor_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
