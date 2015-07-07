-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2015 at 11:09 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `izquote`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `email`, `fullname`, `created_at`, `updated_at`) VALUES
(1, 'de.quang.co@gmail.com', 'HN Quang', '2015-07-06 01:57:47', '2015-07-06 01:57:47'),
(2, 'wuanghn@gmail.com', 'Nhật Quang Huỳnh', '2015-07-06 21:46:46', '2015-07-06 21:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_06_29_042458_create_posts_table', 1),
('2015_07_03_071817_create_members_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quote` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `created` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `quote`, `slug`, `image`, `id_user`, `created`, `created_at`, `updated_at`) VALUES
(1, 'aaa', '', '', '/Applications/MAMP/htdocs/izquote/public/uploads/store/24665446.jpg', 7, 'Friday, 03/07/2015 12:01:00', '2015-07-03 05:01:00', '2015-07-03 05:01:00'),
(2, 'aaa', '', '', 'uploads/store/27073862.jpg', 7, 'Friday, 03/07/2015', '2015-07-03 05:02:23', '2015-07-03 05:02:23'),
(3, 'url slug', '', 'url-slug-3', 'uploads/store/21223853.jpg', 7, 'Friday, 03/07/2015', '2015-07-03 07:56:21', '2015-07-03 07:56:21'),
(4, 'Nghe kể chuyện ngày xưa', '', 'nghe-ke-chuyen-ngay-xua-4', 'uploads/store/11427268.jpg', 7, 'Friday, 03/07/2015', '2015-07-03 08:05:28', '2015-07-03 08:05:29'),
(5, 'AngularJS Example', 'AngularJS Example\r\nAngularJS Example AngularJS Example', 'angularjs-example-5', 'uploads/store/38233554.jpg', 1, 'Tuesday, 07/07/2015', '2015-07-07 08:07:27', '2015-07-07 08:07:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;