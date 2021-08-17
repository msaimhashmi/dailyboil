-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2020 at 06:43 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video_downloaderdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads-settings`
--

CREATE TABLE `ads-settings` (
  `id` int(11) NOT NULL,
  `ad728x90Status` bigint(20) NOT NULL,
  `ad728x90ResponsiveStatus` bigint(20) NOT NULL,
  `ad728x90` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ad250x250Status` bigint(20) NOT NULL,
  `ad250x250ResponsiveStatu` bigint(20) NOT NULL,
  `ad250x250` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `popAdStatus` bigint(20) NOT NULL,
  `popAd` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `popAdFrequency` bigint(20) NOT NULL,
  `displayOnHomePage` bigint(20) NOT NULL,
  `displayOnDynamicPages` bigint(20) NOT NULL,
  `displayOnContactPage` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads-settings`
--

INSERT INTO `ads-settings` (`id`, `ad728x90Status`, `ad728x90ResponsiveStatus`, `ad728x90`, `ad250x250Status`, `ad250x250ResponsiveStatu`, `ad250x250`, `popAdStatus`, `popAd`, `popAdFrequency`, `displayOnHomePage`, `displayOnDynamicPages`, `displayOnContactPage`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Helo world', 0, 0, 'fed', 0, 'dsf', 5, 0, 0, 0, NULL, '2020-01-01 00:14:59');

-- --------------------------------------------------------

--
-- Table structure for table `analytics-settings`
--

CREATE TABLE `analytics-settings` (
  `id` int(11) NOT NULL,
  `status` bigint(20) NOT NULL,
  `code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `analytics-settings`
--

INSERT INTO `analytics-settings` (`id`, `status`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hello Karachi..!!', NULL, '2020-01-01 00:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `captcha-settings`
--

CREATE TABLE `captcha-settings` (
  `id` int(11) NOT NULL,
  `siteKey` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secretKey` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loginCaptcha` bigint(20) NOT NULL,
  `forgotPasswordCaptcha` bigint(20) NOT NULL,
  `contactCaptcha` bigint(20) NOT NULL,
  `resetPasswordCaptcha` bigint(20) NOT NULL,
  `captchaShowFailedAttempts` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `captcha-settings`
--

INSERT INTO `captcha-settings` (`id`, `siteKey`, `secretKey`, `loginCaptcha`, `forgotPasswordCaptcha`, `contactCaptcha`, `resetPasswordCaptcha`, `captchaShowFailedAttempts`, `created_at`, `updated_at`) VALUES
(1, 'saad', 'test', 1, 1, 1, 1, 1, NULL, '2020-01-01 00:23:55');

-- --------------------------------------------------------

--
-- Table structure for table `general-settings`
--

CREATE TABLE `general-settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coverImage` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `backgroundImage` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logoLight` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allowDirectLink` bigint(20) NOT NULL,
  `https` bigint(20) NOT NULL,
  `www` bigint(20) NOT NULL,
  `version` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `installed` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general-settings`
--

INSERT INTO `general-settings` (`id`, `title`, `description`, `keywords`, `coverImage`, `backgroundImage`, `logo`, `logoLight`, `favicon`, `allowDirectLink`, `https`, `www`, `version`, `installed`, `created_at`, `updated_at`) VALUES
(1, 'downloader', 'The #1 Free Online Video Downloader allows you to download videos from Facebook, Vimeo, Break, Liveleak, Instagram, Soundcloud, Imgur and many more!', 'download facebook videos, video downloader, facebook downloader, download online videos, download streaming videos', '5d70cca8b6d8fcf74b5233952e1a39f41577681568.jpg', 'f39cbdfe19aea488582fd4a14c8b09fc1577681524.jpg', '774815bb1380b4487e4b48492320150c1577184439.jpg', 'bfbdcc101a6a733241d5ab8c12c7fc0c1577184439.png', '46ea4fe13c298fc46e9270de316442991577184439.png', 1, 1, 1, '1.3', 1, '2019-12-23 20:00:07', '2020-01-01 00:25:49');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bigint(20) NOT NULL,
  `home` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `search_bar_placeholder` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `get_in_touch_with_us` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `share_on_facebook` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `share_on_twitter` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `share_on_googleplus` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `share_on_vk` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `share_on_whatsapp` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_only` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `more` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `less` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gif` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quality` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `downloads` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source_not_found_error` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_not_found_error` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invalid_url_error` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stay_in_touch_with_us` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `features_heading` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multiple_sources_section_heading` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multiple_sources_section_description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multiple_formats_section_heading` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multiple_formats_section_description` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supported_sources` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `more_coming_soon` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_rights_reserved` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_us` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_page_heading` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enter_your_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enter_your_email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enter_subject` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enter_your_message` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_error` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_error` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_error` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_error` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `captcha_error` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_not_found` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `you_seem_to_be_trying_to_find_this_way_home` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `back_to_home` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `here` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dailymotion_download_guide_heading` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dailymotion_download_guide_step_1` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dailymotion_download_guide_step_2` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dailymotion_download_guide_step_3` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dailymotion_download_guide_step_4` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dailymotion_download_guide_step_5` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paste_source_code_here` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_link` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `close` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `flag`, `status`, `home`, `title`, `search_bar_placeholder`, `get_in_touch_with_us`, `source`, `share_on_facebook`, `share_on_twitter`, `share_on_googleplus`, `share_on_vk`, `share_on_whatsapp`, `video`, `video_only`, `more`, `less`, `audio`, `gif`, `quality`, `format`, `size`, `downloads`, `source_not_found_error`, `video_not_found_error`, `invalid_url_error`, `stay_in_touch_with_us`, `features_heading`, `multiple_sources_section_heading`, `multiple_sources_section_description`, `multiple_formats_section_heading`, `multiple_formats_section_description`, `supported_sources`, `more_coming_soon`, `copyright`, `all_rights_reserved`, `contact_us`, `contact_page_heading`, `enter_your_name`, `enter_your_email`, `enter_subject`, `enter_your_message`, `send`, `name_error`, `email_error`, `subject_error`, `message_error`, `captcha_error`, `page_not_found`, `you_seem_to_be_trying_to_find_this_way_home`, `back_to_home`, `here`, `dailymotion_download_guide_heading`, `dailymotion_download_guide_step_1`, `dailymotion_download_guide_step_2`, `dailymotion_download_guide_step_3`, `dailymotion_download_guide_step_4`, `dailymotion_download_guide_step_5`, `paste_source_code_here`, `generate_link`, `close`, `created_at`, `updated_at`) VALUES
(8, 'Algeria', 'ag', 'DZ', 1, 'Cumque adipisicing a', 'Aliquip ullamco ea n', 'Repellendus Quidem', 'Sed ipsa hic alias', 'Recusandae Cumque q', 'Doloremque rerum nih', 'Ad velit numquam et', 'Nisi nostrum animi', 'Et exercitation est', 'Dolore mollit aute t', 'Et illum sit recus', 'Inventore temporibus', 'Esse quia et et sin', 'Accusamus modi quis', 'Vitae consequatur L', 'Est dolorem voluptat', 'Delectus reprehende', 'Dolore ad dolorem re', 'Ut recusandae Labor', 'Voluptas voluptatem', 'Magnam dolore error', 'Aliquam eveniet ist', 'Provident in volupt', 'Ea et dolores aut et', 'Officia et eaque des', 'Est repudiandae est', 'Est sunt ut veniam', 'Velit maxime ea recu', 'Laboriosam placeat', 'Facilis et iste aute', 'Esse debitis occaeca', 'Est rem voluptas nih', 'Enim omnis dolorem q', 'Dolor tempora volupt', 'In facilis reiciendi', 'Kitra Freeman', 'jeluw@mailinator.net', 'Voluptatem qui volu', 'Voluptatem Corrupti', 'Mollit et nulla aliq', 'Kato Lynch', 'sacivofi@mailinator.net', 'Quia quas provident', 'Repudiandae officia', NULL, 'Quo esse quaerat qu', 'Eum quis magna quis', 'Consequat Cillum qu', 'Enim magni ipsa sed', 'Et necessitatibus ex', 'Et aspernatur volupt', 'Unde autem ipsam vel', 'Qui expedita eum ad', 'Dolores autem aliqui', 'Consequatur Cum fug', 'Illum voluptas mole', 'Quasi possimus qui', 'Vel labore mollit do', '2019-12-31 05:55:27', '2019-12-31 05:55:37'),
(9, 'Urdu', 'ur', 'PK', 1, 'shtëpi', 'Aliquip ullamco ea n', 'Repellendus Quidem', 'Sed ipsa hic alias', 'Recusandae Cumque q', 'Doloremque rerum nih', 'Ad velit numquam et', 'Nisi nostrum animi', 'Et exercitation est', 'Dolore mollit aute t', 'Et illum sit recus', 'Inventore temporibus', 'Esse quia et et sin', 'Accusamus modi quis', 'Vitae consequatur L', 'Est dolorem voluptat', 'Delectus reprehende', 'Dolore ad dolorem re', 'Ut recusandae Labor', 'Voluptas voluptatem', 'Magnam dolore error', 'Aliquam eveniet ist', 'Provident in volupt', 'Ea et dolores aut et', 'Officia et eaque des', 'Est repudiandae est', 'Est sunt ut veniam', 'Velit maxime ea recu', 'Laboriosam placeat', 'Facilis et iste aute', 'Esse debitis occaeca', 'Est rem voluptas nih', 'Enim omnis dolorem q', 'Dolor tempora volupt', 'In facilis reiciendi', 'Kitra Freeman', 'jeluw@mailinator.net', 'Voluptatem qui volu', 'Voluptatem Corrupti', 'Mollit et nulla aliq', 'Kato Lynch', 'sacivofi@mailinator.net', 'Quia quas provident', 'Repudiandae officia', NULL, 'Quo esse quaerat qu', 'Eum quis magna quis', 'Consequat Cillum qu', 'Enim magni ipsa sed', 'Et necessitatibus ex', 'Et aspernatur volupt', 'Unde autem ipsam vel', 'Qui expedita eum ad', 'Dolores autem aliqui', 'Consequatur Cum fug', 'Illum voluptas mole', 'Quasi possimus qui', 'Vel labore mollit do', '2019-12-31 07:33:24', '2020-01-01 00:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `mail-settings`
--

CREATE TABLE `mail-settings` (
  `id` int(11) NOT NULL,
  `smtpStatus` bigint(20) NOT NULL,
  `host` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port` bigint(20) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contactEmail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail-settings`
--

INSERT INTO `mail-settings` (`id`, `smtpStatus`, `host`, `port`, `username`, `password`, `contactEmail`, `created_at`, `updated_at`) VALUES
(1, 1, 'smtp.mailtrap.io', 2525, 'Saadkhan', '12345', 'saaddigitalop@gmail.com', '2019-12-31 23:46:49', '2019-12-31 23:51:59');

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
(3, '2019_12_23_070916_ads-settings', 1),
(4, '2019_12_23_071021_analytics-settings', 1),
(5, '2019_12_23_071052_captcha-settings', 1),
(6, '2019_12_23_071122_general-settings', 1),
(7, '2019_12_23_071158_languages', 1),
(8, '2019_12_23_071237_mail-settings', 1),
(9, '2019_12_23_071317_pages', 1),
(10, '2019_12_23_071351_social-sharing', 1),
(11, '2019_12_23_071430_social-statistics', 1),
(12, '2019_12_31_091126_source', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permalink` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` bigint(20) NOT NULL,
  `status` bigint(20) NOT NULL,
  `displayOrder` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `permalink`, `description`, `keywords`, `content`, `position`, `status`, `displayOrder`, `created_at`, `updated_at`) VALUES
(6, 'test', 'test_link', 'asg', 'sFG', 'aerg', 3, 0, 0, '2019-12-26 06:14:00', '2019-12-30 02:25:52'),
(8, 'downloading web', 'downloading_link', 'sdffdas', 'asdfsd', 'dsfasd', 1, 0, NULL, '2019-12-29 23:55:29', '2019-12-31 07:48:26'),
(9, 'visions', 'https://youtube.com', 'jyhg', 'gui', 'gi', 1, 1, NULL, '2020-01-01 00:01:38', '2020-01-01 00:05:33');

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
-- Table structure for table `social-sharing`
--

CREATE TABLE `social-sharing` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `facebookSharing` bigint(20) NOT NULL,
  `facebookPageName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `googleplusSharing` bigint(20) NOT NULL,
  `googleplusPageId` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitterSharing` bigint(20) NOT NULL,
  `twitterTweetText` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedinSharing` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social-sharing`
--

INSERT INTO `social-sharing` (`id`, `status`, `facebookSharing`, `facebookPageName`, `googleplusSharing`, `googleplusPageId`, `twitterSharing`, `twitterTweetText`, `linkedinSharing`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'nexthon', 0, '100619388243402364794', 0, 'Download Videos from {{website title}}', 0, NULL, '2020-01-01 00:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `source`
--

CREATE TABLE `source` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_cache_time` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `source`
--

INSERT INTO `source` (`id`, `name`, `website`, `link_cache_time`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Break.com', 'https://www.break.com/', '3600', '0758d0c58fac1538a892cd4641cecf891577333754.png', '1', NULL, '2020-01-01 00:09:52'),
(2, 'Dailymotion.com', 'https://www.dailymotion.com/', '3600', 'aea54cfbd295072dce51798f2426d2951577333763.png', '0', NULL, '2019-12-26 04:16:03'),
(3, 'Facebook.com', 'https://www.facebook.com/', '3600', '3d31e488c1661908628ece569cffd49c1577192308.png', '0', NULL, '2019-12-24 12:58:28'),
(4, 'Imgur.com', 'https://www.imgur.com/', '3600', '3e1da02f880bb51a3e7e14e7a10d6c4c1577333772.png', '1', NULL, '2019-12-27 06:14:45'),
(5, 'Instagram.com', 'https://www.instagram.com/', '3600', 'd572a515b8922e037fba839eb24632891577333787.png', '0', NULL, '2019-12-26 04:16:27'),
(6, 'Liveleak.com', 'https://www.liveleak.com/', '3600', '7ac82a64332bae61a3c085d298d099311577333796.png', '0', NULL, '2019-12-26 04:16:36'),
(7, '9gag.com', 'https://www.9gag.com/', '3600', '8bddc08b39f89539aa05a845805661da1577333805.png', '0', NULL, '2019-12-26 04:16:45'),
(8, 'Soundcloud.com', 'https://www.soundcloud.com/', '3600', '6175239854fd6003b51678f9026eea1c1577333814.png', '0', NULL, '2019-12-26 04:16:54'),
(9, 'Vimeo.com', 'https://www.vimeo.com/', '3600', '98e77f32616883afa82abb1effb4eddc1577333825.png', '0', NULL, '2019-12-26 04:17:05'),
(10, 'Youtube.com', 'https://www.youtube.com/', '3600', '479b26af0c790ab4b716c3873e4ba30f1577333833.png', '0', NULL, '2019-12-26 04:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pageViews` int(11) NOT NULL,
  `uniqueViews` int(11) NOT NULL,
  `downloads` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `date`, `pageViews`, `uniqueViews`, `downloads`, `created_at`, `updated_at`) VALUES
(1, '13/5/19', 20, 12, 10, '2019-12-14 19:00:00', '2019-12-14 19:00:00'),
(2, '12-13-19', 7, 0, 12, '2019-12-22 19:00:00', '2019-12-22 19:00:00'),
(3, '12-5-19', 10, 23, 33, '2019-12-23 01:00:00', '2019-12-23 01:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'saad khan', 'xaadkhan43@gmail.com', '$2y$10$rr0mTvIUWtzwUFE5LgWCaOndAVcdX1uUZJa45MgvjGS1ZGcvvOf/i', '2019-12-31 04:06:41', '2020-01-01 00:22:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads-settings`
--
ALTER TABLE `ads-settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analytics-settings`
--
ALTER TABLE `analytics-settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `captcha-settings`
--
ALTER TABLE `captcha-settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general-settings`
--
ALTER TABLE `general-settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail-settings`
--
ALTER TABLE `mail-settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `social-sharing`
--
ALTER TABLE `social-sharing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
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
-- AUTO_INCREMENT for table `ads-settings`
--
ALTER TABLE `ads-settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `analytics-settings`
--
ALTER TABLE `analytics-settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `captcha-settings`
--
ALTER TABLE `captcha-settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general-settings`
--
ALTER TABLE `general-settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mail-settings`
--
ALTER TABLE `mail-settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `social-sharing`
--
ALTER TABLE `social-sharing`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `source`
--
ALTER TABLE `source`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
