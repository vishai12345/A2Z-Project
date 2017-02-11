-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2017 at 05:01 PM
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
(4, 134, 'Bhopal', 'Bhopal', 'India', '852850', 'mSknRTguSboaQuiqiCp88b0BwtrdKPeOhtzZUzQh', '2017-02-11 05:07:32', '2017-02-11 05:07:32');

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
(1, 'India', 'PAXXgWp7UxIpXK1tamxuik3EpT9DfCxfddT0aSJo', '2017-02-09 10:46:41', '2017-02-09 05:16:41'),
(5, 'SA', 'PAXXgWp7UxIpXK1tamxuik3EpT9DfCxfddT0aSJo', '2017-02-09 05:16:52', '2017-02-09 05:16:52');

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
(7, 'Madhya Pradesh', 'MP', 'madhya-pradesh', 'nAqtqA9coFLnJcvDfxhNLM2llz4AMKPZQGvc7xP2', '2017-02-04 08:33:27', '2017-02-04 08:33:27'),
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
(10, 'law', 'IuCIJCbCoO', '2017-02-04 04:26:25', '2017-02-04 04:26:25'),
(11, 'Guitar', 'tFYz83E971', '2017-02-04 04:26:31', '2017-02-04 04:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `subjectsub_cat`
--

CREATE TABLE `subjectsub_cat` (
  `id` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectsub_cat`
--

INSERT INTO `subjectsub_cat` (`id`, `category_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Primary', 'eRkphn0uir', '2017-02-06 06:36:41', '2017-02-06 06:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `subject_categories`
--

CREATE TABLE `subject_categories` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_categories`
--

INSERT INTO `subject_categories` (`id`, `subject_id`, `category_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Maths', 'IjaKBhMxPx', '2017-02-06 01:25:21', '2017-02-06 01:25:21'),
(2, 1, 'Pure Maths', 'VdbB6TMYUN', '2017-02-06 01:25:53', '2017-02-06 01:25:53'),
(3, 1, 'Further Maths', 'sTKnHEDWpM', '2017-02-06 01:26:15', '2017-02-06 01:26:15'),
(4, 1, 'Statistics', 'qTb5ySWQsI', '2017-02-06 01:27:57', '2017-02-06 01:27:57'),
(5, 1, 'Mechanics', '', '2017-02-06 09:35:31', '0000-00-00 00:00:00'),
(6, 2, 'English', 'tPRj9Yqb1b', '2017-02-06 06:49:32', '2017-02-06 06:49:32'),
(7, 2, 'English Literature', 'fRpKuRVHYJ', '2017-02-06 06:49:51', '2017-02-06 06:49:51'),
(8, 2, 'Phonics', 'HUWKpCYfiv', '2017-02-06 06:50:09', '2017-02-06 06:50:09'),
(9, 2, 'Reading Comprehension', 'SlkoKx3wOK', '2017-02-06 06:50:24', '2017-02-06 06:50:24'),
(10, 2, 'Spelling, Punctuation and Grammar', '62jCKDAtJI', '2017-02-06 06:50:39', '2017-02-06 06:50:39'),
(11, 3, 'Science', '53dFxN9uJ3', '2017-02-06 06:51:30', '2017-02-06 06:51:30'),
(12, 3, 'Biology', 'y5ymKveM3A', '2017-02-06 06:51:43', '2017-02-06 06:51:43'),
(13, 3, 'Chemistry', 'CggiHUAzOV', '2017-02-06 06:51:56', '2017-02-06 06:51:56'),
(14, 3, 'Physics', 'KvnGcteQmp', '2017-02-06 06:52:10', '2017-02-06 06:52:10'),
(15, 3, 'Astronomy', 'nJZdfyWBmC', '2017-02-06 06:52:25', '2017-02-06 06:52:25'),
(16, 3, 'Environmental Science', 'wa2Cb8zbsY', '2017-02-06 06:52:40', '2017-02-06 06:52:40'),
(17, 3, 'Geology', 'wzVRKF0quM', '2017-02-06 06:53:19', '2017-02-06 06:53:19');

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
(5, 134, NULL, NULL, '2017-02-11-10-55-52-layer-8.jpg', NULL, NULL, '2017-02-11 10:55:52', '2017-02-11 05:25:52'),
(6, 136, NULL, NULL, '2017-02-11-11-08-41-layer-8.jpg', NULL, NULL, '2017-02-11 11:08:42', '2017-02-11 05:38:42'),
(7, 138, NULL, NULL, '2017-02-11-11-33-46-layer-8.jpg', NULL, NULL, '2017-02-11 06:03:46', '2017-02-11 06:03:46'),
(8, 139, NULL, NULL, '2017-02-11-11-36-15-layer-9.jpg', NULL, NULL, '2017-02-11 06:06:15', '2017-02-11 06:06:15'),
(9, 140, NULL, NULL, '2017-02-11-12-41-57-layer-8.jpg', 'Wow', NULL, '2017-02-11 15:40:44', '2017-02-11 10:10:44'),
(10, 141, 'Hi I am 22 years Old', NULL, '2017-02-11-15-53-15-15193675_1200282796728580_7601578391709280416_n.jpg', 'I am Amit', NULL, '2017-02-11 15:53:48', '2017-02-11 10:23:48');

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
  `role` varchar(8) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'student',
  `status` int(10) NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verification_code` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `lastname`, `email`, `mobile`, `password`, `role`, `status`, `image_url`, `verification_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(134, 'happy12345', 'happy', 'Gladiator', 'happy12345@gmail.com', '8234055619', '$2y$10$hXJm9sowVorEz0EefmP73eJumstS7sNfb96O1.pecQk7n1NiAXpgW', 'admin', 1, '2017-02-11-10-55-52-layer-8.jpg', '5ef0b4eba35ab2d6180b0bca7e46b6f9', 'G1SbmelhvK9Catx7ARxbOx9oL4Xk7MpNCIS6OZoIAL5FnjPMusBP0zddW8cC', '2017-02-11 04:27:16', '2017-02-11 08:30:43'),
(135, 'vishai12345', '', '', 'vishai12345@gmail.com', '', '$2y$10$VCxt9tz2S5fSZNOzjSYCnOHt9rApywwvvznJwA3Ir.0GZN8b.VIzO', 'tutor', 1, '2017-02-11-10-33-56-15193675_1200282796728580_7601578391709280416_n.jpg', '98b297950041a42470269d56260243a1', 'TOzwcDrtt1KkFnHpSBjtRSvi9YOYC7IDsR0ipUOBcprFRVlDIa3RzaooEhHT', '2017-02-11 05:02:52', '2017-02-11 05:05:58'),
(136, 'xxx12345', '', '', 'xxx12345@gmail.com', '', '$2y$10$oggc3jMJYmz5CDi9B3WlNORO2TywFue/GHcTauHPQC1JSVu1Wivy6', 'tutor', 1, '2017-02-11-11-08-41-layer-8.jpg', 'ac627ab1ccbdb62ec96e702f07f6425b', 'Fw40r6lg4Zd5lE21sSpcuWCjVPfhqT4cG12JweTB9f5weUGOk2XBEMDe0m80', '2017-02-11 05:26:39', '2017-02-11 05:38:50'),
(137, 'vishal.mj', '', '', 'vishal.mj@gmail.com', '', '$2y$10$IfgNTvujQ/QnJ1KgYueKAOHmYF7KfofZIceJUnQsD9/gsZBtz3MHm', 'tutor', 1, '', '9f396fe44e7c05c16873b05ec425cbad', '7gdaZTzaVVLpKsH5VoteBYPu4pu7nEh9adimjfBhD1KFlKNWTpDFyrOVEraT', '2017-02-11 05:39:12', '2017-02-11 05:46:38'),
(138, 'vc121356', '', '', 'vc121356@gmail.com', '', '$2y$10$FG.ph.nTWchKH3wnPWvxMu267yxUm99kyZZOmOyeTBZz27oODfz62', 'tutor', 1, '2017-02-11-11-33-46-layer-8.jpg', 'f76a89f0cb91bc419542ce9fa43902dc', 'gibJ0PjGmFQHdSdDkKuXtw92p01DFohdBNf8L8708mHaulo1wPEjztgaiCI4', '2017-02-11 05:47:06', '2017-02-11 06:04:42'),
(139, 'vc121', '', '', 'vc121@gmail.com', '', '$2y$10$tK6WOfLBTQaxFQwMMjZX9.1p.5NLb8uaRuhHnaTxLA/GHpR5PG90W', 'tutor', 1, '2017-02-11-11-36-15-layer-9.jpg', '6cdd60ea0045eb7a6ec44c54d29ed402', 'XMEEczTxL1KdG13buoG8wUKd7ue4ZhDwy6RH23GUAbCG9EOuRynLTNvjO1xL', '2017-02-11 06:05:05', '2017-02-11 06:22:06'),
(140, 'ashish', '', '', 'ashish11@gmail.com', '', '$2y$10$tYMpsWEaTN7EDVIjkN06uuha4kBnL2W2VIY.xbiU0hLpl/sTdILuO', 'tutor', 1, '2017-02-11-12-41-57-layer-8.jpg', '9778d5d219c5080b9a6a17bef029331c', 'Uv0xoaBkdtNWVLsTcYWSmS3AX4z6xG30Cgej9wm0cxrSYkN2m33EJJOOrWKZ', '2017-02-11 06:22:29', '2017-02-11 10:18:54'),
(141, 'Amit12345', '', '', 'amit12345@gmail.com', '', '$2y$10$IEpX1Ju0IbGZg4LAjRS4m.qzwIexihqmT/C8oJmR6JtC7a0O8DQFS', 'tutor', 1, '2017-02-11-15-53-15-15193675_1200282796728580_7601578391709280416_n.jpg', 'd554f7bb7be44a7267068a7df88ddd20', NULL, '2017-02-11 10:19:31', '2017-02-11 10:23:15');

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
-- Indexes for table `country`
--
ALTER TABLE `country`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tutor_profile`
--
ALTER TABLE `tutor_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
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
-- Constraints for table `subject_categories`
--
ALTER TABLE `subject_categories`
  ADD CONSTRAINT `fk_subject_category_id` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`);

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
