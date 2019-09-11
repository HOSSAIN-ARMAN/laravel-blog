-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2019 at 06:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `blog_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `blog_title`, `blog_short_description`, `blog_long_description`, `blog_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(17, 30, 'sakib bhai', 'sakib khan', '<p>armanarmanarmanarman</p>', 'img-folder/12247156_1101791719853327_4618118790053243034_n.jpg', 1, '2019-09-10 10:23:39', '2019-09-10 14:31:01'),
(18, 31, 'qqqqqqqq', 'qqqqqqqqqqqqqq', '<p>qqqqqqqqqqqqqqqqqq</p>', 'img-folder/ssss.png', 1, '2019-09-10 10:35:09', '2019-09-10 11:52:24'),
(21, 32, 'cricket', ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type', '<p>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker i</p>', 'img-folder/14907028_1824493821141004_7694628135956071617_n.jpg', 1, '2019-09-10 14:09:11', '2019-09-11 01:13:56'),
(22, 30, 'Awmilegue', ' is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type', '<p>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type</p>', 'img-folder/15132185_924151571020367_8543236928714047488_n.jpg', 1, '2019-09-10 14:09:52', '2019-09-10 14:09:52'),
(23, 33, 'action game', 'this is new gamethis is new gamethis is new gamethis is new game', '<p>this is new gamethis is new gamethis is new gamethis is new gamethis is new game</p>', 'img-folder/20170917_172849.jpg', 1, '2019-09-11 01:18:07', '2019-09-11 08:22:06'),
(24, 33, 'classsical game', 'wowowowowowowowowowowowowowowowowowo', '<p>wowowowowowowowowowowowowowowowowowo</p>', 'img-folder/20170917_172724.jpg', 1, '2019-09-11 01:18:51', '2019-09-11 08:21:39'),
(25, 28, 'new education', 'aaaaaaaaaaaaaaaaaaaaaa', '<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>', 'img-folder/18486281_1070519349716921_5825267916428520012_n.jpg', 1, '2019-09-11 01:19:46', '2019-09-11 01:19:46'),
(26, 28, 'asdfnklasdf', 'sadfsdf', '<h3>News Portal</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>By&nbsp;<a href=\"https://wordpress.org/themes/author/mysterythemes/\">Mystery Themes</a></p>\r\n\r\n<p><a href=\"https://wp-themes.com/news-portal\">Preview</a><a href=\"https://downloads.wordpress.org/theme/news-portal.1.1.15.zip\">Download</a></p>\r\n\r\n<p>Version:&nbsp;<strong>1.1.15</strong></p>\r\n\r\n<p>Last updated:&nbsp;<strong>August 1, 2019</strong></p>\r\n\r\n<p>Active Installations:&nbsp;<strong>8,000+</strong></p>\r\n\r\n<p>WordPress Version:&nbsp;<strong>4.0 or higher</strong></p>\r\n\r\n<p>PHP Version:&nbsp;<strong>5.6 or higher</strong></p>\r\n\r\n<p><a href=\"https://mysterythemes.com/wp-themes/news-portal\">Theme Homepage</a></p>\r\n\r\n<p><img alt=\"\" src=\"https://i0.wp.com/themes.svn.wordpress.org/news-portal/1.1.15/screenshot.jpg?w=1142&amp;strip=all\" /></p>\r\n\r\n<p>News Portal is the ultimate magazine theme with creative design and powerful features that allow you to quickly and easily create a style to suit your needs. It is completely built on Customizer which allows you to customize most of the theme settings easily with live previews. It is the fully widgetized theme so as to let users manage the website using the easy to use widgets. News Portal Theme is the best choice to create a Beautiful &amp; Powerful News/magazine/blog websites with ease. Get free support at https://mysterythemes.com/support/forum/themes/free-themes/ and check the demo at http://demo.mysterythemes.com/news-portal-landing/</p>\r\n\r\n<p>Tags:</p>\r\n\r\n<p><a href=\"https://wordpress.org/themes/tags/blog/\">Blog</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/custom-colors/\">Custom Colors</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/custom-logo/\">Custom Logo</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/entertainment/\">Entertainment</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/featured-image-header/\">Featured Image Header</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/footer-widgets/\">Footer Widgets</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/full-width-template/\">Full Width Template</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/grid-layout/\">Grid Layout</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/left-sidebar/\">Left Sidebar</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/news/\">News</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/one-column/\">One Column</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/right-sidebar/\">Right Sidebar</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/rtl-language-support/\">RTL Language Support</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/theme-options/\">Theme Options</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/three-columns/\">Three Columns</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/translation-ready/\">Translation Ready</a>,&nbsp;<a href=\"https://wordpress.org/themes/tags/two-columns/\">Two Columns</a></p>', 'img-folder/20170917_122809.jpg', 1, '2019-09-11 01:48:53', '2019-09-11 08:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(28, 'education', 'asdfasdf', 1, '2019-09-09 00:49:26', '2019-09-09 00:49:26'),
(30, 'Politics', 'adasdf', 1, '2019-09-10 09:34:24', '2019-09-10 09:34:24'),
(32, 'Sports', 'abhani club', 1, '2019-09-10 14:07:53', '2019-09-10 14:07:53'),
(33, 'game', 'V-city', 1, '2019-09-10 14:08:05', '2019-09-10 14:08:05');

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
(3, '2019_09_04_112819_create_categories_table', 2),
(4, '2019_09_05_165434_create_tests_table', 3),
(5, '2019_09_09_114642_create_blogs_table', 4),
(6, '2019_09_11_104247_create_sliders_table', 5);

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
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slider_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_title`, `slider_short_description`, `slider_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'demo1', 'this demo 1', 'slider-image/15027755_919845638117627_6686128093148041787_n.jpg', 1, '2019-09-11 05:56:20', '2019-09-11 08:18:23'),
(5, 'demo2', 'this is another demo part', 'slider-image/15095579_919888058113385_652293076568278668_n.jpg', 1, '2019-09-11 05:56:34', '2019-09-11 08:18:37'),
(6, 'demo3', 'this is also demo', 'slider-image/20170919_121017.jpg', 1, '2019-09-11 05:56:46', '2019-09-11 08:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(21, 'sabbir', 'bhai', '2019-09-05 12:05:35', '2019-09-05 12:05:35');

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
(1, 'admin', 'admin@project.com', NULL, '$2y$10$y7FSTv1ye8NMmsVV8uvKtOk56EVTS1AnmZucfVkFBcpvgeZYKHh4y', NULL, '2019-09-03 05:43:02', '2019-09-03 05:43:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
