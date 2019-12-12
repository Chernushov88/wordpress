-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Лис 30 2019 р., 00:46
-- Версія сервера: 5.6.38
-- Версія PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `shef`
--

-- --------------------------------------------------------

--
-- Структура таблиці `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Автор комментария', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2019-11-28 16:50:39', '2019-11-28 13:50:39', 'Привет! Это комментарий.\nЧтобы начать модерировать, редактировать и удалять комментарии, перейдите на экран «Комментарии» в консоли.\nАватары авторов комментариев загружаются с сервиса <a href=\"https://ru.gravatar.com\">Gravatar</a>.', 0, 'post-trashed', '', '', 0, 0),
(2, 20, 'ActionScheduler', '', '', '', '2019-11-28 18:14:35', '2019-11-28 18:14:35', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(3, 21, 'ActionScheduler', '', '', '', '2019-11-28 18:15:06', '2019-11-28 18:15:06', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(4, 22, 'ActionScheduler', '', '', '', '2019-11-28 18:15:06', '2019-11-28 18:15:06', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(5, 20, 'ActionScheduler', '', '', '', '2019-11-28 18:15:39', '2019-11-28 18:15:39', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(6, 20, 'ActionScheduler', '', '', '', '2019-11-28 18:15:39', '2019-11-28 18:15:39', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(7, 23, 'ActionScheduler', '', '', '', '2019-11-28 18:15:39', '2019-11-28 18:15:39', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(8, 21, 'ActionScheduler', '', '', '', '2019-11-28 18:15:39', '2019-11-28 18:15:39', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(9, 21, 'ActionScheduler', '', '', '', '2019-11-28 18:15:40', '2019-11-28 18:15:40', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(10, 22, 'ActionScheduler', '', '', '', '2019-11-28 18:15:40', '2019-11-28 18:15:40', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(11, 22, 'ActionScheduler', '', '', '', '2019-11-28 18:15:40', '2019-11-28 18:15:40', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(12, 23, 'ActionScheduler', '', '', '', '2019-11-28 19:17:09', '2019-11-28 19:17:09', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(13, 23, 'ActionScheduler', '', '', '', '2019-11-28 19:17:09', '2019-11-28 19:17:09', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(14, 31, 'ActionScheduler', '', '', '', '2019-11-28 19:17:09', '2019-11-28 19:17:09', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(15, 31, 'ActionScheduler', '', '', '', '2019-11-28 20:17:41', '2019-11-28 20:17:41', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(16, 31, 'ActionScheduler', '', '', '', '2019-11-28 20:17:42', '2019-11-28 20:17:42', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(17, 35, 'ActionScheduler', '', '', '', '2019-11-28 20:17:42', '2019-11-28 20:17:42', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(18, 35, 'ActionScheduler', '', '', '', '2019-11-28 21:18:21', '2019-11-28 21:18:21', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(19, 35, 'ActionScheduler', '', '', '', '2019-11-28 21:18:21', '2019-11-28 21:18:21', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(20, 51, 'ActionScheduler', '', '', '', '2019-11-28 21:18:22', '2019-11-28 21:18:22', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(21, 51, 'ActionScheduler', '', '', '', '2019-11-29 06:50:23', '2019-11-29 06:50:23', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(22, 51, 'ActionScheduler', '', '', '', '2019-11-29 06:50:23', '2019-11-29 06:50:23', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(23, 57, 'ActionScheduler', '', '', '', '2019-11-29 06:50:23', '2019-11-29 06:50:23', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(24, 57, 'ActionScheduler', '', '', '', '2019-11-29 07:51:43', '2019-11-29 07:51:43', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(25, 57, 'ActionScheduler', '', '', '', '2019-11-29 07:51:43', '2019-11-29 07:51:43', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(26, 58, 'ActionScheduler', '', '', '', '2019-11-29 07:51:43', '2019-11-29 07:51:43', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(27, 58, 'ActionScheduler', '', '', '', '2019-11-29 08:52:47', '2019-11-29 08:52:47', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(28, 58, 'ActionScheduler', '', '', '', '2019-11-29 08:52:47', '2019-11-29 08:52:47', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(29, 72, 'ActionScheduler', '', '', '', '2019-11-29 08:52:47', '2019-11-29 08:52:47', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(30, 72, 'ActionScheduler', '', '', '', '2019-11-29 09:53:11', '2019-11-29 09:53:11', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(31, 72, 'ActionScheduler', '', '', '', '2019-11-29 09:53:11', '2019-11-29 09:53:11', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(32, 73, 'ActionScheduler', '', '', '', '2019-11-29 09:53:11', '2019-11-29 09:53:11', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(33, 73, 'ActionScheduler', '', '', '', '2019-11-29 10:54:59', '2019-11-29 10:54:59', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(34, 73, 'ActionScheduler', '', '', '', '2019-11-29 10:54:59', '2019-11-29 10:54:59', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(35, 75, 'ActionScheduler', '', '', '', '2019-11-29 10:54:59', '2019-11-29 10:54:59', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(36, 75, 'ActionScheduler', '', '', '', '2019-11-29 11:55:04', '2019-11-29 11:55:04', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(37, 75, 'ActionScheduler', '', '', '', '2019-11-29 11:55:04', '2019-11-29 11:55:04', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(38, 78, 'ActionScheduler', '', '', '', '2019-11-29 11:55:04', '2019-11-29 11:55:04', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(39, 78, 'ActionScheduler', '', '', '', '2019-11-29 12:55:35', '2019-11-29 12:55:35', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(40, 78, 'ActionScheduler', '', '', '', '2019-11-29 12:55:35', '2019-11-29 12:55:35', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(41, 79, 'ActionScheduler', '', '', '', '2019-11-29 12:55:35', '2019-11-29 12:55:35', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(42, 79, 'ActionScheduler', '', '', '', '2019-11-29 13:57:09', '2019-11-29 13:57:09', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(43, 79, 'ActionScheduler', '', '', '', '2019-11-29 13:57:09', '2019-11-29 13:57:09', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(44, 82, 'ActionScheduler', '', '', '', '2019-11-29 13:57:09', '2019-11-29 13:57:09', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(45, 82, 'ActionScheduler', '', '', '', '2019-11-29 14:57:12', '2019-11-29 14:57:12', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(46, 82, 'ActionScheduler', '', '', '', '2019-11-29 14:57:12', '2019-11-29 14:57:12', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(47, 84, 'ActionScheduler', '', '', '', '2019-11-29 14:57:12', '2019-11-29 14:57:12', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(48, 84, 'ActionScheduler', '', '', '', '2019-11-29 15:57:18', '2019-11-29 15:57:18', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(49, 84, 'ActionScheduler', '', '', '', '2019-11-29 15:57:18', '2019-11-29 15:57:18', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(50, 85, 'ActionScheduler', '', '', '', '2019-11-29 15:57:18', '2019-11-29 15:57:18', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(51, 85, 'ActionScheduler', '', '', '', '2019-11-29 16:57:23', '2019-11-29 16:57:23', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(52, 85, 'ActionScheduler', '', '', '', '2019-11-29 16:57:23', '2019-11-29 16:57:23', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(53, 86, 'ActionScheduler', '', '', '', '2019-11-29 16:57:23', '2019-11-29 16:57:23', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(54, 86, 'ActionScheduler', '', '', '', '2019-11-29 17:57:29', '2019-11-29 17:57:29', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(55, 86, 'ActionScheduler', '', '', '', '2019-11-29 17:57:29', '2019-11-29 17:57:29', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(56, 87, 'ActionScheduler', '', '', '', '2019-11-29 17:57:29', '2019-11-29 17:57:29', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(57, 89, 'ActionScheduler', '', '', '', '2019-11-29 18:09:13', '2019-11-29 18:09:13', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(58, 89, 'ActionScheduler', '', '', '', '2019-11-29 18:09:24', '2019-11-29 18:09:24', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(59, 89, 'ActionScheduler', '', '', '', '2019-11-29 18:09:24', '2019-11-29 18:09:24', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(60, 90, 'ActionScheduler', '', '', '', '2019-11-29 18:09:25', '2019-11-29 18:09:25', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(61, 90, 'ActionScheduler', '', '', '', '2019-11-29 18:10:37', '2019-11-29 18:10:37', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(62, 90, 'ActionScheduler', '', '', '', '2019-11-29 18:10:37', '2019-11-29 18:10:37', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(63, 87, 'ActionScheduler', '', '', '', '2019-11-29 18:59:02', '2019-11-29 18:59:02', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(64, 87, 'ActionScheduler', '', '', '', '2019-11-29 18:59:02', '2019-11-29 18:59:02', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(65, 102, 'ActionScheduler', '', '', '', '2019-11-29 18:59:02', '2019-11-29 18:59:02', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(66, 102, 'ActionScheduler', '', '', '', '2019-11-29 20:00:19', '2019-11-29 20:00:19', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(67, 102, 'ActionScheduler', '', '', '', '2019-11-29 20:00:19', '2019-11-29 20:00:19', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(68, 103, 'ActionScheduler', '', '', '', '2019-11-29 20:00:19', '2019-11-29 20:00:19', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(69, 103, 'ActionScheduler', '', '', '', '2019-11-29 21:01:03', '2019-11-29 21:01:03', 'action started', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(70, 103, 'ActionScheduler', '', '', '', '2019-11-29 21:01:03', '2019-11-29 21:01:03', 'action complete', 0, '1', 'ActionScheduler', 'action_log', 0, 0),
(71, 107, 'ActionScheduler', '', '', '', '2019-11-29 21:01:03', '2019-11-29 21:01:03', 'action created', 0, '1', 'ActionScheduler', 'action_log', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблиці `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://shef.ru', 'yes'),
(2, 'home', 'http://shef.ru', 'yes'),
(3, 'blogname', 'Магазин CallShef', 'yes'),
(4, 'blogdescription', 'Ещё один сайт на WordPress', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'chernushov88@mail.ru', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '0', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'd.m.Y', 'yes'),
(24, 'time_format', 'H:i', 'yes'),
(25, 'links_updated_date_format', 'd.m.Y H:i', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%year%/%monthnum%/%day%/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:154:{s:24:\"^wc-auth/v([1]{1})/(.*)?\";s:63:\"index.php?wc-auth-version=$matches[1]&wc-auth-route=$matches[2]\";s:22:\"^wc-api/v([1-3]{1})/?$\";s:51:\"index.php?wc-api-version=$matches[1]&wc-api-route=/\";s:24:\"^wc-api/v([1-3]{1})(.*)?\";s:61:\"index.php?wc-api-version=$matches[1]&wc-api-route=$matches[2]\";s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:32:\"category/(.+?)/wc-api(/(.*))?/?$\";s:54:\"index.php?category_name=$matches[1]&wc-api=$matches[3]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:29:\"tag/([^/]+)/wc-api(/(.*))?/?$\";s:44:\"index.php?tag=$matches[1]&wc-api=$matches[3]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:55:\"product-category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?product_cat=$matches[1]&feed=$matches[2]\";s:50:\"product-category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?product_cat=$matches[1]&feed=$matches[2]\";s:31:\"product-category/(.+?)/embed/?$\";s:44:\"index.php?product_cat=$matches[1]&embed=true\";s:43:\"product-category/(.+?)/page/?([0-9]{1,})/?$\";s:51:\"index.php?product_cat=$matches[1]&paged=$matches[2]\";s:25:\"product-category/(.+?)/?$\";s:33:\"index.php?product_cat=$matches[1]\";s:52:\"product-tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?product_tag=$matches[1]&feed=$matches[2]\";s:47:\"product-tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?product_tag=$matches[1]&feed=$matches[2]\";s:28:\"product-tag/([^/]+)/embed/?$\";s:44:\"index.php?product_tag=$matches[1]&embed=true\";s:40:\"product-tag/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?product_tag=$matches[1]&paged=$matches[2]\";s:22:\"product-tag/([^/]+)/?$\";s:33:\"index.php?product_tag=$matches[1]\";s:35:\"product/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:45:\"product/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:65:\"product/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:60:\"product/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:60:\"product/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:41:\"product/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:24:\"product/([^/]+)/embed/?$\";s:40:\"index.php?product=$matches[1]&embed=true\";s:28:\"product/([^/]+)/trackback/?$\";s:34:\"index.php?product=$matches[1]&tb=1\";s:36:\"product/([^/]+)/page/?([0-9]{1,})/?$\";s:47:\"index.php?product=$matches[1]&paged=$matches[2]\";s:43:\"product/([^/]+)/comment-page-([0-9]{1,})/?$\";s:47:\"index.php?product=$matches[1]&cpage=$matches[2]\";s:33:\"product/([^/]+)/wc-api(/(.*))?/?$\";s:48:\"index.php?product=$matches[1]&wc-api=$matches[3]\";s:39:\"product/[^/]+/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:50:\"product/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:32:\"product/([^/]+)(?:/([0-9]+))?/?$\";s:46:\"index.php?product=$matches[1]&page=$matches[2]\";s:24:\"product/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:34:\"product/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:54:\"product/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:49:\"product/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:49:\"product/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:30:\"product/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:12:\"robots\\.txt$\";s:18:\"index.php?robots=1\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:27:\"comment-page-([0-9]{1,})/?$\";s:38:\"index.php?&page_id=7&cpage=$matches[1]\";s:17:\"wc-api(/(.*))?/?$\";s:29:\"index.php?&wc-api=$matches[2]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:26:\"comments/wc-api(/(.*))?/?$\";s:29:\"index.php?&wc-api=$matches[2]\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:29:\"search/(.+)/wc-api(/(.*))?/?$\";s:42:\"index.php?s=$matches[1]&wc-api=$matches[3]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:32:\"author/([^/]+)/wc-api(/(.*))?/?$\";s:52:\"index.php?author_name=$matches[1]&wc-api=$matches[3]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:54:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/wc-api(/(.*))?/?$\";s:82:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&wc-api=$matches[5]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:41:\"([0-9]{4})/([0-9]{1,2})/wc-api(/(.*))?/?$\";s:66:\"index.php?year=$matches[1]&monthnum=$matches[2]&wc-api=$matches[4]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:28:\"([0-9]{4})/wc-api(/(.*))?/?$\";s:45:\"index.php?year=$matches[1]&wc-api=$matches[3]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:58:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:68:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:88:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:83:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:64:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:53:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/embed/?$\";s:91:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/trackback/?$\";s:85:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&tb=1\";s:77:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&feed=$matches[5]\";s:65:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/page/?([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&paged=$matches[5]\";s:72:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/comment-page-([0-9]{1,})/?$\";s:98:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&cpage=$matches[5]\";s:62:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)/wc-api(/(.*))?/?$\";s:99:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&wc-api=$matches[6]\";s:62:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:73:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/attachment/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:61:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/([^/]+)(?:/([0-9]+))?/?$\";s:97:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&name=$matches[4]&page=$matches[5]\";s:47:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:57:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:77:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:72:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:53:\"[0-9]{4}/[0-9]{1,2}/[0-9]{1,2}/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&cpage=$matches[4]\";s:51:\"([0-9]{4})/([0-9]{1,2})/comment-page-([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&cpage=$matches[3]\";s:38:\"([0-9]{4})/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&cpage=$matches[2]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:25:\"(.?.+?)/wc-api(/(.*))?/?$\";s:49:\"index.php?pagename=$matches[1]&wc-api=$matches[3]\";s:29:\"(.?.+?)/woo-wallet(/(.*))?/?$\";s:53:\"index.php?pagename=$matches[1]&woo-wallet=$matches[3]\";s:42:\"(.?.+?)/woo-wallet-transactions(/(.*))?/?$\";s:66:\"index.php?pagename=$matches[1]&woo-wallet-transactions=$matches[3]\";s:28:\"(.?.+?)/order-pay(/(.*))?/?$\";s:52:\"index.php?pagename=$matches[1]&order-pay=$matches[3]\";s:33:\"(.?.+?)/order-received(/(.*))?/?$\";s:57:\"index.php?pagename=$matches[1]&order-received=$matches[3]\";s:25:\"(.?.+?)/orders(/(.*))?/?$\";s:49:\"index.php?pagename=$matches[1]&orders=$matches[3]\";s:29:\"(.?.+?)/view-order(/(.*))?/?$\";s:53:\"index.php?pagename=$matches[1]&view-order=$matches[3]\";s:28:\"(.?.+?)/downloads(/(.*))?/?$\";s:52:\"index.php?pagename=$matches[1]&downloads=$matches[3]\";s:31:\"(.?.+?)/edit-account(/(.*))?/?$\";s:55:\"index.php?pagename=$matches[1]&edit-account=$matches[3]\";s:31:\"(.?.+?)/edit-address(/(.*))?/?$\";s:55:\"index.php?pagename=$matches[1]&edit-address=$matches[3]\";s:34:\"(.?.+?)/payment-methods(/(.*))?/?$\";s:58:\"index.php?pagename=$matches[1]&payment-methods=$matches[3]\";s:32:\"(.?.+?)/lost-password(/(.*))?/?$\";s:56:\"index.php?pagename=$matches[1]&lost-password=$matches[3]\";s:34:\"(.?.+?)/customer-logout(/(.*))?/?$\";s:58:\"index.php?pagename=$matches[1]&customer-logout=$matches[3]\";s:37:\"(.?.+?)/add-payment-method(/(.*))?/?$\";s:61:\"index.php?pagename=$matches[1]&add-payment-method=$matches[3]\";s:40:\"(.?.+?)/delete-payment-method(/(.*))?/?$\";s:64:\"index.php?pagename=$matches[1]&delete-payment-method=$matches[3]\";s:45:\"(.?.+?)/set-default-payment-method(/(.*))?/?$\";s:69:\"index.php?pagename=$matches[1]&set-default-payment-method=$matches[3]\";s:31:\".?.+?/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:42:\".?.+?/attachment/([^/]+)/wc-api(/(.*))?/?$\";s:51:\"index.php?attachment=$matches[1]&wc-api=$matches[3]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:10:{i:0;s:30:\"advanced-custom-fields/acf.php\";i:1;s:22:\"cyr2lat/cyr-to-lat.php\";i:2;s:73:\"kadence-woocommerce-email-designer/kadence-woocommerce-email-designer.php\";i:3;s:23:\"rustolat/rus-to-lat.php\";i:4;s:59:\"simple-post-type-permalinks/simple-post-type-permalinks.php\";i:5;s:69:\"woo-gutenberg-products-block/woocommerce-gutenberg-products-block.php\";i:6;s:25:\"woo-wallet/woo-wallet.php\";i:7;s:39:\"woocommerce-admin/woocommerce-admin.php\";i:8;s:27:\"woocommerce/woocommerce.php\";i:9;s:39:\"wp-file-manager/file_folder_manager.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '3', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', '', 'no'),
(40, 'template', 'shef', 'yes'),
(41, 'stylesheet', 'shef', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '45805', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '0', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'page', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:1:{s:59:\"simple-post-type-permalinks/simple-post-type-permalinks.php\";a:2:{i:0;s:14:\"SPTP\\Bootstrap\";i:1;s:9:\"uninstall\";}}', 'no'),
(82, 'timezone_string', '', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '7', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'wp_page_for_privacy_policy', '3', 'yes'),
(92, 'show_comments_cookies_opt_in', '1', 'yes'),
(93, 'admin_email_lifespan', '1590501039', 'yes'),
(94, 'initial_db_version', '45805', 'yes'),
(95, 'wp_user_roles', 'a:7:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:114:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;s:18:\"manage_woocommerce\";b:1;s:24:\"view_woocommerce_reports\";b:1;s:12:\"edit_product\";b:1;s:12:\"read_product\";b:1;s:14:\"delete_product\";b:1;s:13:\"edit_products\";b:1;s:20:\"edit_others_products\";b:1;s:16:\"publish_products\";b:1;s:21:\"read_private_products\";b:1;s:15:\"delete_products\";b:1;s:23:\"delete_private_products\";b:1;s:25:\"delete_published_products\";b:1;s:22:\"delete_others_products\";b:1;s:21:\"edit_private_products\";b:1;s:23:\"edit_published_products\";b:1;s:20:\"manage_product_terms\";b:1;s:18:\"edit_product_terms\";b:1;s:20:\"delete_product_terms\";b:1;s:20:\"assign_product_terms\";b:1;s:15:\"edit_shop_order\";b:1;s:15:\"read_shop_order\";b:1;s:17:\"delete_shop_order\";b:1;s:16:\"edit_shop_orders\";b:1;s:23:\"edit_others_shop_orders\";b:1;s:19:\"publish_shop_orders\";b:1;s:24:\"read_private_shop_orders\";b:1;s:18:\"delete_shop_orders\";b:1;s:26:\"delete_private_shop_orders\";b:1;s:28:\"delete_published_shop_orders\";b:1;s:25:\"delete_others_shop_orders\";b:1;s:24:\"edit_private_shop_orders\";b:1;s:26:\"edit_published_shop_orders\";b:1;s:23:\"manage_shop_order_terms\";b:1;s:21:\"edit_shop_order_terms\";b:1;s:23:\"delete_shop_order_terms\";b:1;s:23:\"assign_shop_order_terms\";b:1;s:16:\"edit_shop_coupon\";b:1;s:16:\"read_shop_coupon\";b:1;s:18:\"delete_shop_coupon\";b:1;s:17:\"edit_shop_coupons\";b:1;s:24:\"edit_others_shop_coupons\";b:1;s:20:\"publish_shop_coupons\";b:1;s:25:\"read_private_shop_coupons\";b:1;s:19:\"delete_shop_coupons\";b:1;s:27:\"delete_private_shop_coupons\";b:1;s:29:\"delete_published_shop_coupons\";b:1;s:26:\"delete_others_shop_coupons\";b:1;s:25:\"edit_private_shop_coupons\";b:1;s:27:\"edit_published_shop_coupons\";b:1;s:24:\"manage_shop_coupon_terms\";b:1;s:22:\"edit_shop_coupon_terms\";b:1;s:24:\"delete_shop_coupon_terms\";b:1;s:24:\"assign_shop_coupon_terms\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}s:8:\"customer\";a:2:{s:4:\"name\";s:8:\"Customer\";s:12:\"capabilities\";a:1:{s:4:\"read\";b:1;}}s:12:\"shop_manager\";a:2:{s:4:\"name\";s:12:\"Shop manager\";s:12:\"capabilities\";a:92:{s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:4:\"read\";b:1;s:18:\"read_private_pages\";b:1;s:18:\"read_private_posts\";b:1;s:10:\"edit_posts\";b:1;s:10:\"edit_pages\";b:1;s:20:\"edit_published_posts\";b:1;s:20:\"edit_published_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"edit_private_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:17:\"edit_others_pages\";b:1;s:13:\"publish_posts\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_posts\";b:1;s:12:\"delete_pages\";b:1;s:20:\"delete_private_pages\";b:1;s:20:\"delete_private_posts\";b:1;s:22:\"delete_published_pages\";b:1;s:22:\"delete_published_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:19:\"delete_others_pages\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:17:\"moderate_comments\";b:1;s:12:\"upload_files\";b:1;s:6:\"export\";b:1;s:6:\"import\";b:1;s:10:\"list_users\";b:1;s:18:\"edit_theme_options\";b:1;s:18:\"manage_woocommerce\";b:1;s:24:\"view_woocommerce_reports\";b:1;s:12:\"edit_product\";b:1;s:12:\"read_product\";b:1;s:14:\"delete_product\";b:1;s:13:\"edit_products\";b:1;s:20:\"edit_others_products\";b:1;s:16:\"publish_products\";b:1;s:21:\"read_private_products\";b:1;s:15:\"delete_products\";b:1;s:23:\"delete_private_products\";b:1;s:25:\"delete_published_products\";b:1;s:22:\"delete_others_products\";b:1;s:21:\"edit_private_products\";b:1;s:23:\"edit_published_products\";b:1;s:20:\"manage_product_terms\";b:1;s:18:\"edit_product_terms\";b:1;s:20:\"delete_product_terms\";b:1;s:20:\"assign_product_terms\";b:1;s:15:\"edit_shop_order\";b:1;s:15:\"read_shop_order\";b:1;s:17:\"delete_shop_order\";b:1;s:16:\"edit_shop_orders\";b:1;s:23:\"edit_others_shop_orders\";b:1;s:19:\"publish_shop_orders\";b:1;s:24:\"read_private_shop_orders\";b:1;s:18:\"delete_shop_orders\";b:1;s:26:\"delete_private_shop_orders\";b:1;s:28:\"delete_published_shop_orders\";b:1;s:25:\"delete_others_shop_orders\";b:1;s:24:\"edit_private_shop_orders\";b:1;s:26:\"edit_published_shop_orders\";b:1;s:23:\"manage_shop_order_terms\";b:1;s:21:\"edit_shop_order_terms\";b:1;s:23:\"delete_shop_order_terms\";b:1;s:23:\"assign_shop_order_terms\";b:1;s:16:\"edit_shop_coupon\";b:1;s:16:\"read_shop_coupon\";b:1;s:18:\"delete_shop_coupon\";b:1;s:17:\"edit_shop_coupons\";b:1;s:24:\"edit_others_shop_coupons\";b:1;s:20:\"publish_shop_coupons\";b:1;s:25:\"read_private_shop_coupons\";b:1;s:19:\"delete_shop_coupons\";b:1;s:27:\"delete_private_shop_coupons\";b:1;s:29:\"delete_published_shop_coupons\";b:1;s:26:\"delete_others_shop_coupons\";b:1;s:25:\"edit_private_shop_coupons\";b:1;s:27:\"edit_published_shop_coupons\";b:1;s:24:\"manage_shop_coupon_terms\";b:1;s:22:\"edit_shop_coupon_terms\";b:1;s:24:\"delete_shop_coupon_terms\";b:1;s:24:\"assign_shop_coupon_terms\";b:1;}}}', 'yes'),
(96, 'fresh_site', '0', 'yes'),
(97, 'WPLANG', 'ru_RU', 'yes'),
(98, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(100, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(101, 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(102, 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(103, 'sidebars_widgets', 'a:7:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";}s:9:\"sidebar-2\";a:3:{i:0;s:10:\"archives-2\";i:1;s:12:\"categories-2\";i:2;s:6:\"meta-2\";}s:9:\"sidebar-3\";a:0:{}s:13:\"sidebar-phone\";a:1:{i:0;s:13:\"custom_html-2\";}s:14:\"sidebar-social\";a:1:{i:0;s:13:\"custom_html-3\";}s:13:\"array_version\";i:3;}', 'yes'),
(104, 'cron', 'a:16:{i:1575063981;a:1:{s:26:\"action_scheduler_run_queue\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:12:\"every_minute\";s:4:\"args\";a:0:{}s:8:\"interval\";i:60;}}}i:1575064240;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1575064863;a:1:{s:32:\"woocommerce_cancel_unpaid_orders\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:2:{s:8:\"schedule\";b:0;s:4:\"args\";a:0:{}}}}i:1575065673;a:1:{s:33:\"wc_admin_process_orders_milestone\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1575078640;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1575103219;a:1:{s:28:\"woocommerce_cleanup_sessions\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1575121840;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1575121854;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1575121856;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1575124819;a:1:{s:33:\"woocommerce_cleanup_personal_data\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1575124829;a:1:{s:30:\"woocommerce_tracker_send_event\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1575135619;a:1:{s:24:\"woocommerce_cleanup_logs\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1575137672;a:1:{s:14:\"wc_admin_daily\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1575147600;a:1:{s:27:\"woocommerce_scheduled_sales\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1575331200;a:1:{s:25:\"woocommerce_geoip_updater\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:7:\"monthly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:2635200;}}}s:7:\"version\";i:2;}', 'yes'),
(105, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(110, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(111, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(112, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(113, 'widget_custom_html', 'a:3:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:7:\"content\";s:81:\"<a href=\"/wp-content/themes/shef/verstka/tel:+74950000000\">+7 (495) 000-00-00</a>\";}i:3;a:2:{s:5:\"title\";s:0:\"\";s:7:\"content\";s:274:\"<a href=\"https://vk.com\"><i class=\"fa fa-vk\" aria-hidden=\"true\"></i></a>\r\n          <a href=\"https://www.facebook.com\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>\r\n          <a href=\"https://www.instagram.com\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(115, 'recovery_keys', 'a:0:{}', 'yes'),
(117, 'theme_mods_twentytwenty', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1574950061;s:4:\"data\";a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";}s:9:\"sidebar-2\";a:3:{i:0;s:10:\"archives-2\";i:1;s:12:\"categories-2\";i:2;s:6:\"meta-2\";}}}}', 'yes'),
(126, '_site_transient_timeout_browser_352e84f01e246b1e722c1621ec324313', '1575553855', 'no'),
(127, '_site_transient_browser_352e84f01e246b1e722c1621ec324313', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:13:\"72.0.3626.109\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(128, '_site_transient_timeout_php_check_b0c0a3f6e108bf9223e6faa4fbb549bb', '1575553856', 'no'),
(129, '_site_transient_php_check_b0c0a3f6e108bf9223e6faa4fbb549bb', 'a:5:{s:19:\"recommended_version\";s:3:\"7.3\";s:15:\"minimum_version\";s:6:\"5.6.20\";s:12:\"is_supported\";b:1;s:9:\"is_secure\";b:1;s:13:\"is_acceptable\";b:1;}', 'no'),
(131, 'can_compress_scripts', '1', 'no'),
(144, '_transient_timeout_plugin_slugs', '1575051618', 'no'),
(145, '_transient_plugin_slugs', 'a:11:{i:0;s:30:\"advanced-custom-fields/acf.php\";i:1;s:26:\"create-post-type/index.php\";i:2;s:22:\"cyr2lat/cyr-to-lat.php\";i:3;s:73:\"kadence-woocommerce-email-designer/kadence-woocommerce-email-designer.php\";i:4;s:23:\"rustolat/rus-to-lat.php\";i:5;s:59:\"simple-post-type-permalinks/simple-post-type-permalinks.php\";i:6;s:25:\"woo-wallet/woo-wallet.php\";i:7;s:27:\"woocommerce/woocommerce.php\";i:8;s:39:\"woocommerce-admin/woocommerce-admin.php\";i:9;s:69:\"woo-gutenberg-products-block/woocommerce-gutenberg-products-block.php\";i:10;s:39:\"wp-file-manager/file_folder_manager.php\";}', 'no'),
(146, 'recently_activated', 'a:1:{s:36:\"contact-form-7/wp-contact-form-7.php\";i:1574964606;}', 'yes'),
(152, 'sptp_queue_flush_rewrite_rules', '0', 'yes'),
(154, 'current_theme', 'shef', 'yes'),
(155, 'theme_mods_shef', 'a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:2:{s:3:\"top\";i:18;s:6:\"social\";i:0;}s:18:\"custom_css_post_id\";i:-1;}', 'yes'),
(156, 'theme_switched', '', 'yes'),
(168, 'woocommerce_store_address', '', 'yes'),
(169, 'woocommerce_store_address_2', '', 'yes'),
(170, 'woocommerce_store_city', '', 'yes'),
(171, 'woocommerce_default_country', 'GB', 'yes'),
(172, 'woocommerce_store_postcode', '', 'yes'),
(173, 'woocommerce_allowed_countries', 'all', 'yes'),
(174, 'woocommerce_all_except_countries', 'a:0:{}', 'yes'),
(175, 'woocommerce_specific_allowed_countries', 'a:0:{}', 'yes'),
(176, 'woocommerce_ship_to_countries', '', 'yes'),
(177, 'woocommerce_specific_ship_to_countries', 'a:0:{}', 'yes'),
(178, 'woocommerce_default_customer_address', 'geolocation', 'yes'),
(179, 'woocommerce_calc_taxes', 'no', 'yes'),
(180, 'woocommerce_enable_coupons', 'no', 'yes'),
(181, 'woocommerce_calc_discounts_sequentially', 'no', 'no'),
(182, 'woocommerce_currency', 'RUB', 'yes'),
(183, 'woocommerce_currency_pos', 'right', 'yes'),
(184, 'woocommerce_price_thousand_sep', ' ', 'yes'),
(185, 'woocommerce_price_decimal_sep', '.', 'yes'),
(186, 'woocommerce_price_num_decimals', '0', 'yes'),
(187, 'woocommerce_shop_page_id', '10', 'yes'),
(188, 'woocommerce_cart_redirect_after_add', 'no', 'yes'),
(189, 'woocommerce_enable_ajax_add_to_cart', 'yes', 'yes'),
(190, 'woocommerce_placeholder_image', '', 'yes'),
(191, 'woocommerce_weight_unit', 'kg', 'yes'),
(192, 'woocommerce_dimension_unit', 'cm', 'yes'),
(193, 'woocommerce_enable_reviews', 'no', 'yes'),
(194, 'woocommerce_review_rating_verification_label', 'yes', 'no'),
(195, 'woocommerce_review_rating_verification_required', 'no', 'no'),
(196, 'woocommerce_enable_review_rating', 'yes', 'yes'),
(197, 'woocommerce_review_rating_required', 'yes', 'no'),
(198, 'woocommerce_manage_stock', 'yes', 'yes'),
(199, 'woocommerce_hold_stock_minutes', '60', 'no'),
(200, 'woocommerce_notify_low_stock', 'yes', 'no'),
(201, 'woocommerce_notify_no_stock', 'yes', 'no'),
(202, 'woocommerce_stock_email_recipient', 'chernushov88@mail.ru', 'no'),
(203, 'woocommerce_notify_low_stock_amount', '2', 'no'),
(204, 'woocommerce_notify_no_stock_amount', '0', 'yes'),
(205, 'woocommerce_hide_out_of_stock_items', 'no', 'yes'),
(206, 'woocommerce_stock_format', '', 'yes'),
(207, 'woocommerce_file_download_method', 'force', 'no'),
(208, 'woocommerce_downloads_require_login', 'no', 'no'),
(209, 'woocommerce_downloads_grant_access_after_payment', 'yes', 'no'),
(210, 'woocommerce_prices_include_tax', 'no', 'yes'),
(211, 'woocommerce_tax_based_on', 'shipping', 'yes'),
(212, 'woocommerce_shipping_tax_class', 'inherit', 'yes'),
(213, 'woocommerce_tax_round_at_subtotal', 'no', 'yes'),
(214, 'woocommerce_tax_classes', '', 'yes'),
(215, 'woocommerce_tax_display_shop', 'excl', 'yes'),
(216, 'woocommerce_tax_display_cart', 'excl', 'yes'),
(217, 'woocommerce_price_display_suffix', '', 'yes'),
(218, 'woocommerce_tax_total_display', 'itemized', 'no'),
(219, 'woocommerce_enable_shipping_calc', 'yes', 'no'),
(220, 'woocommerce_shipping_cost_requires_address', 'no', 'yes'),
(221, 'woocommerce_ship_to_destination', 'billing', 'no'),
(222, 'woocommerce_shipping_debug_mode', 'no', 'yes'),
(223, 'woocommerce_enable_guest_checkout', 'yes', 'no'),
(224, 'woocommerce_enable_checkout_login_reminder', 'no', 'no'),
(225, 'woocommerce_enable_signup_and_login_from_checkout', 'no', 'no'),
(226, 'woocommerce_enable_myaccount_registration', 'no', 'no'),
(227, 'woocommerce_registration_generate_username', 'yes', 'no'),
(228, 'woocommerce_registration_generate_password', 'yes', 'no'),
(229, 'woocommerce_erasure_request_removes_order_data', 'no', 'no'),
(230, 'woocommerce_erasure_request_removes_download_data', 'no', 'no'),
(231, 'woocommerce_allow_bulk_remove_personal_data', 'no', 'no'),
(232, 'woocommerce_registration_privacy_policy_text', 'Ваши личные данные будут использоваться для упрощения вашей работы с сайтом, управления доступом к вашей учётной записи и для других целей, описанных в нашей [privacy_policy].', 'yes'),
(233, 'woocommerce_checkout_privacy_policy_text', 'Ваши личные данные будут использоваться для обработки ваших заказов, упрощения вашей работы с сайтом и для других целей, описанных в нашей [privacy_policy].', 'yes'),
(234, 'woocommerce_delete_inactive_accounts', 'a:2:{s:6:\"number\";s:0:\"\";s:4:\"unit\";s:6:\"months\";}', 'no'),
(235, 'woocommerce_trash_pending_orders', '', 'no'),
(236, 'woocommerce_trash_failed_orders', '', 'no'),
(237, 'woocommerce_trash_cancelled_orders', '', 'no'),
(238, 'woocommerce_anonymize_completed_orders', 'a:2:{s:6:\"number\";s:0:\"\";s:4:\"unit\";s:6:\"months\";}', 'no'),
(239, 'woocommerce_email_from_name', 'Магазин CallShef', 'no'),
(240, 'woocommerce_email_from_address', 'skarlatsup@mail.ru', 'no'),
(241, 'woocommerce_email_header_image', '', 'no'),
(242, 'woocommerce_email_footer_text', '{site_title} &mdash; Built with {WooCommerce}', 'no'),
(243, 'woocommerce_email_base_color', '#96588a', 'no'),
(244, 'woocommerce_email_background_color', '#f7f7f7', 'no'),
(245, 'woocommerce_email_body_background_color', '#ffffff', 'no'),
(246, 'woocommerce_email_text_color', '#3c3c3c', 'no'),
(247, 'woocommerce_cart_page_id', '27', 'no'),
(248, 'woocommerce_checkout_page_id', '32', 'no'),
(249, 'woocommerce_myaccount_page_id', '17', 'no'),
(250, 'woocommerce_terms_page_id', '3', 'no'),
(251, 'woocommerce_force_ssl_checkout', 'no', 'yes'),
(252, 'woocommerce_unforce_ssl_checkout', 'no', 'yes'),
(253, 'woocommerce_checkout_pay_endpoint', 'order-pay', 'yes'),
(254, 'woocommerce_checkout_order_received_endpoint', 'order-received', 'yes'),
(255, 'woocommerce_myaccount_add_payment_method_endpoint', 'add-payment-method', 'yes'),
(256, 'woocommerce_myaccount_delete_payment_method_endpoint', 'delete-payment-method', 'yes'),
(257, 'woocommerce_myaccount_set_default_payment_method_endpoint', 'set-default-payment-method', 'yes'),
(258, 'woocommerce_myaccount_orders_endpoint', 'orders', 'yes'),
(259, 'woocommerce_myaccount_view_order_endpoint', 'view-order', 'yes'),
(260, 'woocommerce_myaccount_downloads_endpoint', 'downloads', 'yes'),
(261, 'woocommerce_myaccount_edit_account_endpoint', 'edit-account', 'yes'),
(262, 'woocommerce_myaccount_edit_address_endpoint', 'edit-address', 'yes'),
(263, 'woocommerce_myaccount_payment_methods_endpoint', 'payment-methods', 'yes'),
(264, 'woocommerce_myaccount_lost_password_endpoint', 'lost-password', 'yes'),
(265, 'woocommerce_logout_endpoint', 'customer-logout', 'yes'),
(266, 'woocommerce_api_enabled', 'no', 'yes'),
(267, 'woocommerce_allow_tracking', 'no', 'no'),
(268, 'woocommerce_show_marketplace_suggestions', 'yes', 'no'),
(269, 'woocommerce_single_image_width', '600', 'yes'),
(270, 'woocommerce_thumbnail_image_width', '300', 'yes'),
(271, 'woocommerce_checkout_highlight_required_fields', 'yes', 'yes'),
(272, 'woocommerce_demo_store', 'no', 'no'),
(273, 'woocommerce_permalinks', 'a:5:{s:12:\"product_base\";s:7:\"product\";s:13:\"category_base\";s:16:\"product-category\";s:8:\"tag_base\";s:11:\"product-tag\";s:14:\"attribute_base\";s:0:\"\";s:22:\"use_verbose_page_rules\";b:0;}', 'yes'),
(274, 'current_theme_supports_woocommerce', 'no', 'yes'),
(275, 'woocommerce_queue_flush_rewrite_rules', 'no', 'yes'),
(276, '_transient_wc_attribute_taxonomies', 'a:0:{}', 'yes'),
(278, 'default_product_cat', '15', 'yes'),
(281, 'woocommerce_version', '3.8.1', 'yes'),
(282, 'woocommerce_db_version', '3.8.1', 'yes'),
(283, 'woocommerce_admin_notices', 'a:2:{i:0;s:7:\"install\";i:1;s:20:\"no_secure_connection\";}', 'yes'),
(284, '_transient_woocommerce_webhook_ids_status_active', 'a:0:{}', 'yes'),
(285, 'widget_woocommerce_widget_cart', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(286, 'widget_woocommerce_layered_nav_filters', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(287, 'widget_woocommerce_layered_nav', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(288, 'widget_woocommerce_price_filter', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(289, 'widget_woocommerce_product_categories', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(290, 'widget_woocommerce_product_search', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(291, 'widget_woocommerce_product_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(292, 'widget_woocommerce_products', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(293, 'widget_woocommerce_recently_viewed_products', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(294, 'widget_woocommerce_top_rated_products', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(295, 'widget_woocommerce_recent_reviews', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(296, 'widget_woocommerce_rating_filter', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(301, 'woocommerce_meta_box_errors', 'a:0:{}', 'yes'),
(302, '_transient_timeout_external_ip_address_127.0.0.1', '1575556823', 'no'),
(303, '_transient_external_ip_address_127.0.0.1', '188.163.18.135', 'no'),
(448, 'acf_version', '4.4.11', 'yes'),
(453, 'woo_wallet_db_version', '1.3.9', 'yes'),
(454, '_transient_product_query-transient-version', '1575061263', 'yes'),
(455, '_transient_product-transient-version', '1575052002', 'yes'),
(456, '_woo_wallet_recharge_product', '19', 'yes'),
(457, 'widget_woo-wallet-topup', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(458, '_wallet_enpoint_added', '1', 'yes'),
(459, '_wallet_settings_extensions_general', '', 'yes'),
(460, '_wallet_settings_general', '', 'yes'),
(461, '_wallet_settings_credit', '', 'yes'),
(464, 'wc_admin_install_timestamp', '1574964875', 'yes'),
(468, 'wc_admin_last_orders_milestone', '1', 'yes'),
(477, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:63:\"https://downloads.wordpress.org/release/ru_RU/wordpress-5.3.zip\";s:6:\"locale\";s:5:\"ru_RU\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:63:\"https://downloads.wordpress.org/release/ru_RU/wordpress-5.3.zip\";s:10:\"no_content\";b:0;s:11:\"new_bundled\";b:0;s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:3:\"5.3\";s:7:\"version\";s:3:\"5.3\";s:11:\"php_version\";s:6:\"5.6.20\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"5.3\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1575035467;s:15:\"version_checked\";s:3:\"5.3\";s:12:\"translations\";a:0:{}}', 'no'),
(479, '_site_transient_update_themes', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1575035469;s:7:\"checked\";a:4:{s:4:\"shef\";s:3:\"1.0\";s:14:\"twentynineteen\";s:3:\"1.4\";s:15:\"twentyseventeen\";s:3:\"2.2\";s:12:\"twentytwenty\";s:3:\"1.0\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}}', 'no'),
(486, 'wc_admin_version', '0.22.0', 'yes'),
(508, 'nav_menu_options', 'a:2:{i:0;b:0;s:8:\"auto_add\";a:0:{}}', 'yes'),
(525, '_transient_shipping-transient-version', '1574967166', 'yes'),
(526, '_transient_timeout_wc_shipping_method_count_legacy', '1577559166', 'no'),
(527, '_transient_wc_shipping_method_count_legacy', 'a:2:{s:7:\"version\";s:10:\"1574967166\";s:5:\"value\";i:0;}', 'no'),
(532, '_transient_woocommerce_reports-transient-version', '1575051037', 'yes'),
(533, '_transient_timeout_wc_report_orders_stats_2b8a29cff508af7728c37a3867f4940d', '1575572232', 'no'),
(534, '_transient_wc_report_orders_stats_2b8a29cff508af7728c37a3867f4940d', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2019-48\";s:10:\"date_start\";s:19:\"2019-11-25 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 00:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 20:57:00\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 18:57:00\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(535, '_transient_timeout_wc_report_orders_stats_cf735554c62a35dfc8f7a9d20e4b93c0', '1575572232', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(536, '_transient_wc_report_orders_stats_cf735554c62a35dfc8f7a9d20e4b93c0', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2019-48\";s:10:\"date_start\";s:19:\"2019-11-25 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 00:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 20:57:00\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 18:57:00\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(537, '_transient_timeout_wc_report_orders_stats_80eccfe4db2968dc40e276b06f42ddfd', '1575572235', 'no'),
(538, '_transient_wc_report_orders_stats_80eccfe4db2968dc40e276b06f42ddfd', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2018-48\";s:10:\"date_start\";s:19:\"2018-11-26 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-26 00:00:00\";s:8:\"date_end\";s:19:\"2018-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(539, '_transient_timeout_wc_report_orders_stats_ed4883ef08211ec9cb229188553683b2', '1575572235', 'no'),
(540, '_transient_wc_report_orders_stats_ed4883ef08211ec9cb229188553683b2', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:28:{i:0;a:6:{s:8:\"interval\";s:10:\"2019-11-01\";s:10:\"date_start\";s:19:\"2019-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2019-11-02\";s:10:\"date_start\";s:19:\"2019-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2019-11-03\";s:10:\"date_start\";s:19:\"2019-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2019-11-04\";s:10:\"date_start\";s:19:\"2019-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2019-11-05\";s:10:\"date_start\";s:19:\"2019-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2019-11-06\";s:10:\"date_start\";s:19:\"2019-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2019-11-07\";s:10:\"date_start\";s:19:\"2019-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2019-11-08\";s:10:\"date_start\";s:19:\"2019-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2019-11-09\";s:10:\"date_start\";s:19:\"2019-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2019-11-10\";s:10:\"date_start\";s:19:\"2019-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2019-11-11\";s:10:\"date_start\";s:19:\"2019-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2019-11-12\";s:10:\"date_start\";s:19:\"2019-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2019-11-13\";s:10:\"date_start\";s:19:\"2019-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2019-11-14\";s:10:\"date_start\";s:19:\"2019-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2019-11-15\";s:10:\"date_start\";s:19:\"2019-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2019-11-16\";s:10:\"date_start\";s:19:\"2019-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2019-11-17\";s:10:\"date_start\";s:19:\"2019-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2019-11-18\";s:10:\"date_start\";s:19:\"2019-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2019-11-19\";s:10:\"date_start\";s:19:\"2019-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2019-11-20\";s:10:\"date_start\";s:19:\"2019-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2019-11-21\";s:10:\"date_start\";s:19:\"2019-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2019-11-22\";s:10:\"date_start\";s:19:\"2019-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2019-11-23\";s:10:\"date_start\";s:19:\"2019-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2019-11-24\";s:10:\"date_start\";s:19:\"2019-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2019-11-25\";s:10:\"date_start\";s:19:\"2019-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2019-11-26\";s:10:\"date_start\";s:19:\"2019-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2019-11-27\";s:10:\"date_start\";s:19:\"2019-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2019-11-28\";s:10:\"date_start\";s:19:\"2019-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:28;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(541, '_transient_timeout_wc_report_orders_stats_e24c7f92216f67711ef04bf425711c4b', '1575572235', 'no'),
(542, '_transient_wc_report_orders_stats_e24c7f92216f67711ef04bf425711c4b', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2018-48\";s:10:\"date_start\";s:19:\"2018-11-26 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-26 00:00:00\";s:8:\"date_end\";s:19:\"2018-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(543, '_transient_timeout_wc_report_orders_stats_65684e471ab719f7d624c60bf0280e6a', '1575572236', 'no'),
(544, '_transient_wc_report_orders_stats_65684e471ab719f7d624c60bf0280e6a', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:28:{i:0;a:6:{s:8:\"interval\";s:10:\"2018-11-01\";s:10:\"date_start\";s:19:\"2018-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2018-11-02\";s:10:\"date_start\";s:19:\"2018-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2018-11-03\";s:10:\"date_start\";s:19:\"2018-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2018-11-04\";s:10:\"date_start\";s:19:\"2018-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2018-11-05\";s:10:\"date_start\";s:19:\"2018-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2018-11-06\";s:10:\"date_start\";s:19:\"2018-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2018-11-07\";s:10:\"date_start\";s:19:\"2018-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2018-11-08\";s:10:\"date_start\";s:19:\"2018-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2018-11-09\";s:10:\"date_start\";s:19:\"2018-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2018-11-10\";s:10:\"date_start\";s:19:\"2018-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2018-11-11\";s:10:\"date_start\";s:19:\"2018-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2018-11-12\";s:10:\"date_start\";s:19:\"2018-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2018-11-13\";s:10:\"date_start\";s:19:\"2018-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2018-11-14\";s:10:\"date_start\";s:19:\"2018-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2018-11-15\";s:10:\"date_start\";s:19:\"2018-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2018-11-16\";s:10:\"date_start\";s:19:\"2018-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2018-11-17\";s:10:\"date_start\";s:19:\"2018-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2018-11-18\";s:10:\"date_start\";s:19:\"2018-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2018-11-19\";s:10:\"date_start\";s:19:\"2018-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2018-11-20\";s:10:\"date_start\";s:19:\"2018-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2018-11-21\";s:10:\"date_start\";s:19:\"2018-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2018-11-22\";s:10:\"date_start\";s:19:\"2018-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2018-11-23\";s:10:\"date_start\";s:19:\"2018-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2018-11-24\";s:10:\"date_start\";s:19:\"2018-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2018-11-25\";s:10:\"date_start\";s:19:\"2018-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2018-11-26\";s:10:\"date_start\";s:19:\"2018-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2018-11-27\";s:10:\"date_start\";s:19:\"2018-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2018-11-28\";s:10:\"date_start\";s:19:\"2018-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:28;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(545, '_transient_timeout_wc_report_orders_stats_86247ef4a6f523a36e040dde5deefae9', '1575572236', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(546, '_transient_wc_report_orders_stats_86247ef4a6f523a36e040dde5deefae9', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:28:{i:0;a:6:{s:8:\"interval\";s:10:\"2019-11-01\";s:10:\"date_start\";s:19:\"2019-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2019-11-02\";s:10:\"date_start\";s:19:\"2019-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2019-11-03\";s:10:\"date_start\";s:19:\"2019-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2019-11-04\";s:10:\"date_start\";s:19:\"2019-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2019-11-05\";s:10:\"date_start\";s:19:\"2019-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2019-11-06\";s:10:\"date_start\";s:19:\"2019-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2019-11-07\";s:10:\"date_start\";s:19:\"2019-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2019-11-08\";s:10:\"date_start\";s:19:\"2019-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2019-11-09\";s:10:\"date_start\";s:19:\"2019-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2019-11-10\";s:10:\"date_start\";s:19:\"2019-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2019-11-11\";s:10:\"date_start\";s:19:\"2019-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2019-11-12\";s:10:\"date_start\";s:19:\"2019-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2019-11-13\";s:10:\"date_start\";s:19:\"2019-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2019-11-14\";s:10:\"date_start\";s:19:\"2019-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2019-11-15\";s:10:\"date_start\";s:19:\"2019-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2019-11-16\";s:10:\"date_start\";s:19:\"2019-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2019-11-17\";s:10:\"date_start\";s:19:\"2019-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2019-11-18\";s:10:\"date_start\";s:19:\"2019-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2019-11-19\";s:10:\"date_start\";s:19:\"2019-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2019-11-20\";s:10:\"date_start\";s:19:\"2019-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2019-11-21\";s:10:\"date_start\";s:19:\"2019-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2019-11-22\";s:10:\"date_start\";s:19:\"2019-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2019-11-23\";s:10:\"date_start\";s:19:\"2019-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2019-11-24\";s:10:\"date_start\";s:19:\"2019-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2019-11-25\";s:10:\"date_start\";s:19:\"2019-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2019-11-26\";s:10:\"date_start\";s:19:\"2019-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2019-11-27\";s:10:\"date_start\";s:19:\"2019-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2019-11-28\";s:10:\"date_start\";s:19:\"2019-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:28;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(547, '_transient_timeout_wc_report_orders_stats_640c8f0191fabefb7309f1ea4461bf27', '1575572237', 'no'),
(548, '_transient_wc_report_orders_stats_640c8f0191fabefb7309f1ea4461bf27', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:28:{i:0;a:6:{s:8:\"interval\";s:10:\"2018-11-01\";s:10:\"date_start\";s:19:\"2018-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2018-11-02\";s:10:\"date_start\";s:19:\"2018-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2018-11-03\";s:10:\"date_start\";s:19:\"2018-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2018-11-04\";s:10:\"date_start\";s:19:\"2018-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2018-11-05\";s:10:\"date_start\";s:19:\"2018-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2018-11-06\";s:10:\"date_start\";s:19:\"2018-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2018-11-07\";s:10:\"date_start\";s:19:\"2018-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2018-11-08\";s:10:\"date_start\";s:19:\"2018-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2018-11-09\";s:10:\"date_start\";s:19:\"2018-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2018-11-10\";s:10:\"date_start\";s:19:\"2018-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2018-11-11\";s:10:\"date_start\";s:19:\"2018-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2018-11-12\";s:10:\"date_start\";s:19:\"2018-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2018-11-13\";s:10:\"date_start\";s:19:\"2018-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2018-11-14\";s:10:\"date_start\";s:19:\"2018-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2018-11-15\";s:10:\"date_start\";s:19:\"2018-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2018-11-16\";s:10:\"date_start\";s:19:\"2018-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2018-11-17\";s:10:\"date_start\";s:19:\"2018-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2018-11-18\";s:10:\"date_start\";s:19:\"2018-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2018-11-19\";s:10:\"date_start\";s:19:\"2018-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2018-11-20\";s:10:\"date_start\";s:19:\"2018-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2018-11-21\";s:10:\"date_start\";s:19:\"2018-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2018-11-22\";s:10:\"date_start\";s:19:\"2018-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2018-11-23\";s:10:\"date_start\";s:19:\"2018-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2018-11-24\";s:10:\"date_start\";s:19:\"2018-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2018-11-25\";s:10:\"date_start\";s:19:\"2018-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2018-11-26\";s:10:\"date_start\";s:19:\"2018-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2018-11-27\";s:10:\"date_start\";s:19:\"2018-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2018-11-28\";s:10:\"date_start\";s:19:\"2018-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:28;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(549, '_transient_timeout_wc_report_coupons_stats_ff7d64917761b6941f6cda534d4ee684', '1575572239', 'no'),
(550, '_transient_wc_report_coupons_stats_ff7d64917761b6941f6cda534d4ee684', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:28:{i:0;a:6:{s:8:\"interval\";s:10:\"2019-11-01\";s:10:\"date_start\";s:19:\"2019-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2019-11-02\";s:10:\"date_start\";s:19:\"2019-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2019-11-03\";s:10:\"date_start\";s:19:\"2019-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2019-11-04\";s:10:\"date_start\";s:19:\"2019-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2019-11-05\";s:10:\"date_start\";s:19:\"2019-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2019-11-06\";s:10:\"date_start\";s:19:\"2019-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2019-11-07\";s:10:\"date_start\";s:19:\"2019-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2019-11-08\";s:10:\"date_start\";s:19:\"2019-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2019-11-09\";s:10:\"date_start\";s:19:\"2019-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2019-11-10\";s:10:\"date_start\";s:19:\"2019-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2019-11-11\";s:10:\"date_start\";s:19:\"2019-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2019-11-12\";s:10:\"date_start\";s:19:\"2019-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2019-11-13\";s:10:\"date_start\";s:19:\"2019-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2019-11-14\";s:10:\"date_start\";s:19:\"2019-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2019-11-15\";s:10:\"date_start\";s:19:\"2019-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2019-11-16\";s:10:\"date_start\";s:19:\"2019-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2019-11-17\";s:10:\"date_start\";s:19:\"2019-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2019-11-18\";s:10:\"date_start\";s:19:\"2019-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2019-11-19\";s:10:\"date_start\";s:19:\"2019-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2019-11-20\";s:10:\"date_start\";s:19:\"2019-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2019-11-21\";s:10:\"date_start\";s:19:\"2019-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2019-11-22\";s:10:\"date_start\";s:19:\"2019-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2019-11-23\";s:10:\"date_start\";s:19:\"2019-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2019-11-24\";s:10:\"date_start\";s:19:\"2019-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2019-11-25\";s:10:\"date_start\";s:19:\"2019-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2019-11-26\";s:10:\"date_start\";s:19:\"2019-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2019-11-27\";s:10:\"date_start\";s:19:\"2019-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2019-11-28\";s:10:\"date_start\";s:19:\"2019-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:28;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(551, '_transient_timeout_wc_report_coupons_stats_dcb598c0d2163391ebd68562ee34398a', '1575572239', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(552, '_transient_wc_report_coupons_stats_dcb598c0d2163391ebd68562ee34398a', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:28:{i:0;a:6:{s:8:\"interval\";s:10:\"2018-11-01\";s:10:\"date_start\";s:19:\"2018-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2018-11-02\";s:10:\"date_start\";s:19:\"2018-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2018-11-03\";s:10:\"date_start\";s:19:\"2018-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2018-11-04\";s:10:\"date_start\";s:19:\"2018-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2018-11-05\";s:10:\"date_start\";s:19:\"2018-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2018-11-06\";s:10:\"date_start\";s:19:\"2018-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2018-11-07\";s:10:\"date_start\";s:19:\"2018-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2018-11-08\";s:10:\"date_start\";s:19:\"2018-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2018-11-09\";s:10:\"date_start\";s:19:\"2018-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2018-11-10\";s:10:\"date_start\";s:19:\"2018-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2018-11-11\";s:10:\"date_start\";s:19:\"2018-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2018-11-12\";s:10:\"date_start\";s:19:\"2018-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2018-11-13\";s:10:\"date_start\";s:19:\"2018-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2018-11-14\";s:10:\"date_start\";s:19:\"2018-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2018-11-15\";s:10:\"date_start\";s:19:\"2018-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2018-11-16\";s:10:\"date_start\";s:19:\"2018-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2018-11-17\";s:10:\"date_start\";s:19:\"2018-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2018-11-18\";s:10:\"date_start\";s:19:\"2018-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2018-11-19\";s:10:\"date_start\";s:19:\"2018-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2018-11-20\";s:10:\"date_start\";s:19:\"2018-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2018-11-21\";s:10:\"date_start\";s:19:\"2018-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2018-11-22\";s:10:\"date_start\";s:19:\"2018-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2018-11-23\";s:10:\"date_start\";s:19:\"2018-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2018-11-24\";s:10:\"date_start\";s:19:\"2018-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2018-11-25\";s:10:\"date_start\";s:19:\"2018-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2018-11-26\";s:10:\"date_start\";s:19:\"2018-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2018-11-27\";s:10:\"date_start\";s:19:\"2018-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2018-11-28\";s:10:\"date_start\";s:19:\"2018-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:28;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(553, '_transient_timeout_wc_report_taxes_stats_f2aef913c5b6acebb94014e937b1aa54', '1575572239', 'no'),
(554, '_transient_wc_report_taxes_stats_f2aef913c5b6acebb94014e937b1aa54', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:28:{i:0;a:6:{s:8:\"interval\";s:10:\"2019-11-01\";s:10:\"date_start\";s:19:\"2019-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2019-11-02\";s:10:\"date_start\";s:19:\"2019-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2019-11-03\";s:10:\"date_start\";s:19:\"2019-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2019-11-04\";s:10:\"date_start\";s:19:\"2019-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2019-11-05\";s:10:\"date_start\";s:19:\"2019-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2019-11-06\";s:10:\"date_start\";s:19:\"2019-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2019-11-07\";s:10:\"date_start\";s:19:\"2019-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2019-11-08\";s:10:\"date_start\";s:19:\"2019-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2019-11-09\";s:10:\"date_start\";s:19:\"2019-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2019-11-10\";s:10:\"date_start\";s:19:\"2019-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2019-11-11\";s:10:\"date_start\";s:19:\"2019-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2019-11-12\";s:10:\"date_start\";s:19:\"2019-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2019-11-13\";s:10:\"date_start\";s:19:\"2019-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2019-11-14\";s:10:\"date_start\";s:19:\"2019-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2019-11-15\";s:10:\"date_start\";s:19:\"2019-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2019-11-16\";s:10:\"date_start\";s:19:\"2019-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2019-11-17\";s:10:\"date_start\";s:19:\"2019-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2019-11-18\";s:10:\"date_start\";s:19:\"2019-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2019-11-19\";s:10:\"date_start\";s:19:\"2019-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2019-11-20\";s:10:\"date_start\";s:19:\"2019-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2019-11-21\";s:10:\"date_start\";s:19:\"2019-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2019-11-22\";s:10:\"date_start\";s:19:\"2019-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2019-11-23\";s:10:\"date_start\";s:19:\"2019-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2019-11-24\";s:10:\"date_start\";s:19:\"2019-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2019-11-25\";s:10:\"date_start\";s:19:\"2019-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2019-11-26\";s:10:\"date_start\";s:19:\"2019-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2019-11-27\";s:10:\"date_start\";s:19:\"2019-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2019-11-28\";s:10:\"date_start\";s:19:\"2019-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:28;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(555, '_transient_timeout_wc_report_taxes_stats_3459dd47b179f2d92d9cb212b57595b7', '1575572239', 'no'),
(556, '_transient_wc_report_taxes_stats_3459dd47b179f2d92d9cb212b57595b7', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:28:{i:0;a:6:{s:8:\"interval\";s:10:\"2018-11-01\";s:10:\"date_start\";s:19:\"2018-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2018-11-02\";s:10:\"date_start\";s:19:\"2018-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2018-11-03\";s:10:\"date_start\";s:19:\"2018-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2018-11-04\";s:10:\"date_start\";s:19:\"2018-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2018-11-05\";s:10:\"date_start\";s:19:\"2018-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2018-11-06\";s:10:\"date_start\";s:19:\"2018-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2018-11-07\";s:10:\"date_start\";s:19:\"2018-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2018-11-08\";s:10:\"date_start\";s:19:\"2018-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2018-11-09\";s:10:\"date_start\";s:19:\"2018-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2018-11-10\";s:10:\"date_start\";s:19:\"2018-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2018-11-11\";s:10:\"date_start\";s:19:\"2018-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2018-11-12\";s:10:\"date_start\";s:19:\"2018-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2018-11-13\";s:10:\"date_start\";s:19:\"2018-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2018-11-14\";s:10:\"date_start\";s:19:\"2018-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2018-11-15\";s:10:\"date_start\";s:19:\"2018-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2018-11-16\";s:10:\"date_start\";s:19:\"2018-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2018-11-17\";s:10:\"date_start\";s:19:\"2018-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2018-11-18\";s:10:\"date_start\";s:19:\"2018-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2018-11-19\";s:10:\"date_start\";s:19:\"2018-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2018-11-20\";s:10:\"date_start\";s:19:\"2018-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2018-11-21\";s:10:\"date_start\";s:19:\"2018-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2018-11-22\";s:10:\"date_start\";s:19:\"2018-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2018-11-23\";s:10:\"date_start\";s:19:\"2018-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2018-11-24\";s:10:\"date_start\";s:19:\"2018-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2018-11-25\";s:10:\"date_start\";s:19:\"2018-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2018-11-26\";s:10:\"date_start\";s:19:\"2018-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2018-11-27\";s:10:\"date_start\";s:19:\"2018-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2018-11-28\";s:10:\"date_start\";s:19:\"2018-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:28;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(557, '_transient_timeout_wc_report_downloads_stats_58a1a1b67d3205f54628740c4847fba2', '1575572240', 'no'),
(558, '_transient_wc_report_downloads_stats_58a1a1b67d3205f54628740c4847fba2', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}s:9:\"intervals\";a:28:{i:0;a:6:{s:8:\"interval\";s:10:\"2019-11-01\";s:10:\"date_start\";s:19:\"2019-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:1;a:6:{s:8:\"interval\";s:10:\"2019-11-02\";s:10:\"date_start\";s:19:\"2019-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:2;a:6:{s:8:\"interval\";s:10:\"2019-11-03\";s:10:\"date_start\";s:19:\"2019-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:3;a:6:{s:8:\"interval\";s:10:\"2019-11-04\";s:10:\"date_start\";s:19:\"2019-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:4;a:6:{s:8:\"interval\";s:10:\"2019-11-05\";s:10:\"date_start\";s:19:\"2019-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:5;a:6:{s:8:\"interval\";s:10:\"2019-11-06\";s:10:\"date_start\";s:19:\"2019-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:6;a:6:{s:8:\"interval\";s:10:\"2019-11-07\";s:10:\"date_start\";s:19:\"2019-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:7;a:6:{s:8:\"interval\";s:10:\"2019-11-08\";s:10:\"date_start\";s:19:\"2019-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:8;a:6:{s:8:\"interval\";s:10:\"2019-11-09\";s:10:\"date_start\";s:19:\"2019-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:9;a:6:{s:8:\"interval\";s:10:\"2019-11-10\";s:10:\"date_start\";s:19:\"2019-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:10;a:6:{s:8:\"interval\";s:10:\"2019-11-11\";s:10:\"date_start\";s:19:\"2019-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:11;a:6:{s:8:\"interval\";s:10:\"2019-11-12\";s:10:\"date_start\";s:19:\"2019-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:12;a:6:{s:8:\"interval\";s:10:\"2019-11-13\";s:10:\"date_start\";s:19:\"2019-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:13;a:6:{s:8:\"interval\";s:10:\"2019-11-14\";s:10:\"date_start\";s:19:\"2019-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:14;a:6:{s:8:\"interval\";s:10:\"2019-11-15\";s:10:\"date_start\";s:19:\"2019-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:15;a:6:{s:8:\"interval\";s:10:\"2019-11-16\";s:10:\"date_start\";s:19:\"2019-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:16;a:6:{s:8:\"interval\";s:10:\"2019-11-17\";s:10:\"date_start\";s:19:\"2019-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:17;a:6:{s:8:\"interval\";s:10:\"2019-11-18\";s:10:\"date_start\";s:19:\"2019-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:18;a:6:{s:8:\"interval\";s:10:\"2019-11-19\";s:10:\"date_start\";s:19:\"2019-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:19;a:6:{s:8:\"interval\";s:10:\"2019-11-20\";s:10:\"date_start\";s:19:\"2019-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:20;a:6:{s:8:\"interval\";s:10:\"2019-11-21\";s:10:\"date_start\";s:19:\"2019-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:21;a:6:{s:8:\"interval\";s:10:\"2019-11-22\";s:10:\"date_start\";s:19:\"2019-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:22;a:6:{s:8:\"interval\";s:10:\"2019-11-23\";s:10:\"date_start\";s:19:\"2019-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:23;a:6:{s:8:\"interval\";s:10:\"2019-11-24\";s:10:\"date_start\";s:19:\"2019-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:24;a:6:{s:8:\"interval\";s:10:\"2019-11-25\";s:10:\"date_start\";s:19:\"2019-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:25;a:6:{s:8:\"interval\";s:10:\"2019-11-26\";s:10:\"date_start\";s:19:\"2019-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:26;a:6:{s:8:\"interval\";s:10:\"2019-11-27\";s:10:\"date_start\";s:19:\"2019-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:27;a:6:{s:8:\"interval\";s:10:\"2019-11-28\";s:10:\"date_start\";s:19:\"2019-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}}s:5:\"total\";i:28;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(560, '_transient_timeout_wc_report_downloads_stats_24269a92de40c0310f639a0b02973be4', '1575572241', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(561, '_transient_wc_report_downloads_stats_24269a92de40c0310f639a0b02973be4', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}s:9:\"intervals\";a:28:{i:0;a:6:{s:8:\"interval\";s:10:\"2018-11-01\";s:10:\"date_start\";s:19:\"2018-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:1;a:6:{s:8:\"interval\";s:10:\"2018-11-02\";s:10:\"date_start\";s:19:\"2018-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:2;a:6:{s:8:\"interval\";s:10:\"2018-11-03\";s:10:\"date_start\";s:19:\"2018-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:3;a:6:{s:8:\"interval\";s:10:\"2018-11-04\";s:10:\"date_start\";s:19:\"2018-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:4;a:6:{s:8:\"interval\";s:10:\"2018-11-05\";s:10:\"date_start\";s:19:\"2018-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:5;a:6:{s:8:\"interval\";s:10:\"2018-11-06\";s:10:\"date_start\";s:19:\"2018-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:6;a:6:{s:8:\"interval\";s:10:\"2018-11-07\";s:10:\"date_start\";s:19:\"2018-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:7;a:6:{s:8:\"interval\";s:10:\"2018-11-08\";s:10:\"date_start\";s:19:\"2018-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:8;a:6:{s:8:\"interval\";s:10:\"2018-11-09\";s:10:\"date_start\";s:19:\"2018-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:9;a:6:{s:8:\"interval\";s:10:\"2018-11-10\";s:10:\"date_start\";s:19:\"2018-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:10;a:6:{s:8:\"interval\";s:10:\"2018-11-11\";s:10:\"date_start\";s:19:\"2018-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:11;a:6:{s:8:\"interval\";s:10:\"2018-11-12\";s:10:\"date_start\";s:19:\"2018-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:12;a:6:{s:8:\"interval\";s:10:\"2018-11-13\";s:10:\"date_start\";s:19:\"2018-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:13;a:6:{s:8:\"interval\";s:10:\"2018-11-14\";s:10:\"date_start\";s:19:\"2018-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:14;a:6:{s:8:\"interval\";s:10:\"2018-11-15\";s:10:\"date_start\";s:19:\"2018-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:15;a:6:{s:8:\"interval\";s:10:\"2018-11-16\";s:10:\"date_start\";s:19:\"2018-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:16;a:6:{s:8:\"interval\";s:10:\"2018-11-17\";s:10:\"date_start\";s:19:\"2018-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:17;a:6:{s:8:\"interval\";s:10:\"2018-11-18\";s:10:\"date_start\";s:19:\"2018-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:18;a:6:{s:8:\"interval\";s:10:\"2018-11-19\";s:10:\"date_start\";s:19:\"2018-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:19;a:6:{s:8:\"interval\";s:10:\"2018-11-20\";s:10:\"date_start\";s:19:\"2018-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:20;a:6:{s:8:\"interval\";s:10:\"2018-11-21\";s:10:\"date_start\";s:19:\"2018-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:21;a:6:{s:8:\"interval\";s:10:\"2018-11-22\";s:10:\"date_start\";s:19:\"2018-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:22;a:6:{s:8:\"interval\";s:10:\"2018-11-23\";s:10:\"date_start\";s:19:\"2018-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:23;a:6:{s:8:\"interval\";s:10:\"2018-11-24\";s:10:\"date_start\";s:19:\"2018-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:24;a:6:{s:8:\"interval\";s:10:\"2018-11-25\";s:10:\"date_start\";s:19:\"2018-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:25;a:6:{s:8:\"interval\";s:10:\"2018-11-26\";s:10:\"date_start\";s:19:\"2018-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:26;a:6:{s:8:\"interval\";s:10:\"2018-11-27\";s:10:\"date_start\";s:19:\"2018-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:27;a:6:{s:8:\"interval\";s:10:\"2018-11-28\";s:10:\"date_start\";s:19:\"2018-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}}s:5:\"total\";i:28;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(562, '_transient_timeout_wc_addons_sections', '1575572249', 'no'),
(563, '_transient_wc_addons_sections', 'a:9:{i:0;O:8:\"stdClass\":2:{s:4:\"slug\";s:9:\"_featured\";s:5:\"label\";s:8:\"Featured\";}i:1;O:8:\"stdClass\":2:{s:4:\"slug\";s:4:\"_all\";s:5:\"label\";s:3:\"All\";}i:2;O:8:\"stdClass\":2:{s:4:\"slug\";s:18:\"product-extensions\";s:5:\"label\";s:12:\"Enhancements\";}i:3;O:8:\"stdClass\":2:{s:4:\"slug\";s:15:\"free-extensions\";s:5:\"label\";s:4:\"Free\";}i:4;O:8:\"stdClass\":2:{s:4:\"slug\";s:20:\"marketing-extensions\";s:5:\"label\";s:9:\"Marketing\";}i:5;O:8:\"stdClass\":2:{s:4:\"slug\";s:16:\"payment-gateways\";s:5:\"label\";s:8:\"Payments\";}i:6;O:8:\"stdClass\":2:{s:4:\"slug\";s:12:\"product-type\";s:5:\"label\";s:12:\"Product Type\";}i:7;O:8:\"stdClass\":2:{s:4:\"slug\";s:16:\"shipping-methods\";s:5:\"label\";s:8:\"Shipping\";}i:8;O:8:\"stdClass\":2:{s:4:\"slug\";s:10:\"operations\";s:5:\"label\";s:16:\"Store Management\";}}', 'no'),
(564, '_transient_timeout_wc_addons_featured', '1575572250', 'no'),
(565, '_transient_wc_addons_featured', 'O:8:\"stdClass\":1:{s:8:\"sections\";a:11:{i:0;O:8:\"stdClass\":4:{s:6:\"module\";s:12:\"banner_block\";s:5:\"title\";s:50:\"Take your store beyond the typical - sell anything\";s:11:\"description\";s:81:\"From services to content, there\'s no limit to what you can sell with WooCommerce.\";s:5:\"items\";a:9:{i:0;O:8:\"stdClass\":6:{s:4:\"href\";s:128:\"https://woocommerce.com/products/woocommerce-subscriptions/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:13:\"Subscriptions\";s:5:\"image\";s:71:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/subscriptions-icon@2x.png\";s:11:\"description\";s:98:\"Let customers subscribe to your products or services and pay on a weekly, monthly or annual basis.\";s:6:\"button\";s:10:\"From: $199\";s:6:\"plugin\";s:55:\"woocommerce-subscriptions/woocommerce-subscriptions.php\";}i:1;O:8:\"stdClass\":6:{s:4:\"href\";s:123:\"https://woocommerce.com/products/woocommerce-bookings/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:8:\"Bookings\";s:5:\"image\";s:66:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/bookings-icon@2x.png\";s:11:\"description\";s:76:\"Allow customers to book appointments for services without leaving your site.\";s:6:\"button\";s:10:\"From: $249\";s:6:\"plugin\";s:45:\"woocommerce-bookings/woocommerce-bookings.php\";}i:2;O:8:\"stdClass\":6:{s:4:\"href\";s:126:\"https://woocommerce.com/products/woocommerce-memberships/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:11:\"Memberships\";s:5:\"image\";s:69:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/memberships-icon@2x.png\";s:11:\"description\";s:76:\"Give members access to restricted content or products, for a fee or for free\";s:6:\"button\";s:10:\"From: $149\";s:6:\"plugin\";s:51:\"woocommerce-memberships/woocommerce-memberships.php\";}i:3;O:8:\"stdClass\":6:{s:4:\"href\";s:118:\"https://woocommerce.com/products/product-bundles/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:15:\"Product Bundles\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:50:\"Offer customizable bundles and assembled products.\";s:6:\"button\";s:9:\"From: $49\";s:6:\"plugin\";s:59:\"woocommerce-product-bundles/woocommerce-product-bundles.php\";}i:4;O:8:\"stdClass\":6:{s:4:\"href\";s:121:\"https://woocommerce.com/products/composite-products/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:18:\"Composite Products\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:59:\"Create and offer product kits with configurable components.\";s:6:\"button\";s:9:\"From: $79\";s:6:\"plugin\";s:65:\"woocommerce-composite-products/woocommerce-composite-products.php\";}i:5;O:8:\"stdClass\":6:{s:4:\"href\";s:118:\"https://woocommerce.com/products/product-vendors/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:15:\"Product Vendors\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:47:\"Turn your store into a multi-vendor marketplace\";s:6:\"button\";s:9:\"From: $79\";s:6:\"plugin\";s:59:\"woocommerce-product-vendors/woocommerce-product-vendors.php\";}i:6;O:8:\"stdClass\":6:{s:4:\"href\";s:121:\"https://woocommerce.com/products/groups-woocommerce/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:22:\"Groups for WooCommerce\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:94:\"Sell memberships using the free &#039;Groups&#039; plugin, Groups integration and WooCommerce.\";s:6:\"button\";s:9:\"From: $79\";s:6:\"plugin\";s:41:\"groups-woocommerce/groups-woocommerce.php\";}i:7;O:8:\"stdClass\":6:{s:4:\"href\";s:125:\"https://woocommerce.com/products/woocommerce-pre-orders/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:22:\"WooCommerce Pre-Orders\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:60:\"Allow customers to order products before they are available.\";s:6:\"button\";s:10:\"From: $129\";s:6:\"plugin\";s:49:\"woocommerce-pre-orders/woocommerce-pre-orders.php\";}i:8;O:8:\"stdClass\":6:{s:4:\"href\";s:119:\"https://woocommerce.com/products/chained-products/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:16:\"Chained Products\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:69:\"Create and sell pre-configured product bundles and discounted combos.\";s:6:\"button\";s:9:\"From: $49\";s:6:\"plugin\";s:61:\"woocommerce-chained-products/woocommerce-chained-products.php\";}}}i:1;O:8:\"stdClass\":1:{s:6:\"module\";s:16:\"wcs_banner_block\";}i:2;O:8:\"stdClass\":2:{s:6:\"module\";s:12:\"column_start\";s:9:\"container\";s:22:\"column_container_start\";}i:3;O:8:\"stdClass\":4:{s:6:\"module\";s:12:\"column_block\";s:5:\"title\";s:46:\"Improve the main features of your online store\";s:11:\"description\";s:71:\"Sell more by helping customers find the products and options they want.\";s:5:\"items\";a:9:{i:0;O:8:\"stdClass\":6:{s:4:\"href\";s:118:\"https://woocommerce.com/products/product-add-ons/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:15:\"Product Add-ons\";s:5:\"image\";s:73:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/product-add-ons-icon@2x.png\";s:11:\"description\";s:82:\"Give your customers the option to customize their purchase or add personalization.\";s:6:\"button\";s:9:\"From: $49\";s:6:\"plugin\";s:57:\"woocommerce-product-addons/woocommerce-product-addons.php\";}i:1;O:8:\"stdClass\":6:{s:4:\"href\";s:129:\"https://woocommerce.com/products/woocommerce-product-search/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:14:\"Product Search\";s:5:\"image\";s:72:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/product-search-icon@2x.png\";s:11:\"description\";s:67:\"Make sure customers find what they want when they search your site.\";s:6:\"button\";s:9:\"From: $49\";s:6:\"plugin\";s:57:\"woocommerce-product-search/woocommerce-product-search.php\";}i:2;O:8:\"stdClass\":6:{s:4:\"href\";s:131:\"https://woocommerce.com/products/woocommerce-checkout-add-ons/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:16:\"Checkout Add-ons\";s:5:\"image\";s:74:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/checkout-add-ons-icon@2x.png\";s:11:\"description\";s:89:\"Highlight relevant products, offers like free shipping and other upsells during checkout.\";s:6:\"button\";s:9:\"From: $79\";s:6:\"plugin\";s:61:\"woocommerce-checkout-add-ons/woocommerce-checkout-add-ons.php\";}i:3;O:8:\"stdClass\":6:{s:4:\"href\";s:136:\"https://woocommerce.com/products/woocommerce-checkout-field-editor/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:21:\"Checkout Field Editor\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:128:\"The checkout field editor provides you with an interface to add, edit and remove fields shown on your WooCommerce checkout page.\";s:6:\"button\";s:9:\"From: $49\";s:6:\"plugin\";s:71:\"woocommerce-checkout-field-editor/woocommerce-checkout-field-editor.php\";}i:4;O:8:\"stdClass\":6:{s:4:\"href\";s:127:\"https://woocommerce.com/products/woocommerce-social-login/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:24:\"WooCommerce Social Login\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:62:\"Enable Social Login for Seamless Checkout and Account Creation\";s:6:\"button\";s:9:\"From: $79\";s:6:\"plugin\";s:53:\"woocommerce-social-login/woocommerce-social-login.php\";}i:5;O:8:\"stdClass\":6:{s:4:\"href\";s:124:\"https://woocommerce.com/products/woocommerce-wishlists/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:21:\"WooCommerce Wishlists\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:113:\"WooCommerce Wishlists allows guests and customers to create and add products to an unlimited number of Wishlists.\";s:6:\"button\";s:9:\"From: $79\";s:6:\"plugin\";s:47:\"woocommerce-wishlists/woocommerce-wishlists.php\";}i:6;O:8:\"stdClass\":6:{s:4:\"href\";s:115:\"https://woocommerce.com/products/cart-notices/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:12:\"Cart Notices\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:73:\"Display dynamic, actionable messages to your customers as they check out.\";s:6:\"button\";s:9:\"From: $49\";s:6:\"plugin\";s:53:\"woocommerce-cart-notices/woocommerce-cart-notices.php\";}i:7;O:8:\"stdClass\":6:{s:4:\"href\";s:115:\"https://woocommerce.com/products/cart-add-ons/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:12:\"Cart Add-ons\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:109:\"A powerful tool for driving incremental and impulse purchases by customers once they are in the shopping cart\";s:6:\"button\";s:9:\"From: $29\";s:6:\"plugin\";s:53:\"woocommerce-cart-add-ons/woocommerce-cart-add-ons.php\";}i:8;O:8:\"stdClass\":6:{s:4:\"href\";s:123:\"https://woocommerce.com/products/woocommerce-waitlist/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:20:\"WooCommerce Waitlist\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:117:\"With WooCommerce Waitlist customers can register for email notifications when out-of-stock products become available.\";s:6:\"button\";s:9:\"From: $49\";s:6:\"plugin\";s:45:\"woocommerce-waitlist/woocommerce-waitlist.php\";}}}i:4;O:8:\"stdClass\":5:{s:6:\"module\";s:17:\"small_light_block\";s:5:\"title\";s:34:\"Get the official WooCommerce theme\";s:11:\"description\";s:128:\"Storefront is the lean, flexible, and free theme, built by the people who make WooCommerce - everything you need to get started.\";s:5:\"image\";s:70:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/storefront-screen@2x.png\";s:7:\"buttons\";a:2:{i:0;O:8:\"stdClass\":2:{s:4:\"href\";s:44:\"/wp-admin/theme-install.php?theme=storefront\";s:4:\"text\";s:7:\"Install\";}i:1;O:8:\"stdClass\":2:{s:4:\"href\";s:104:\"https://woocommerce.com/storefront/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:4:\"text\";s:9:\"Read More\";}}}i:5;O:8:\"stdClass\":1:{s:6:\"module\";s:10:\"column_end\";}i:6;O:8:\"stdClass\":1:{s:6:\"module\";s:12:\"column_start\";}i:7;O:8:\"stdClass\":4:{s:6:\"module\";s:16:\"small_dark_block\";s:5:\"title\";s:20:\"WooCommerce + Zapier\";s:11:\"description\";s:88:\"Save time and increase productivity by connecting your store to more than 1000+ services\";s:5:\"items\";a:1:{i:0;O:8:\"stdClass\":2:{s:4:\"href\";s:121:\"https://woocommerce.com/products/woocommerce-zapier/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:6:\"button\";s:9:\"From: $59\";}}}i:8;O:8:\"stdClass\":4:{s:6:\"module\";s:12:\"column_block\";s:5:\"title\";s:19:\"Get deeper insights\";s:11:\"description\";s:58:\"Learn how your store is performing with enhanced reporting\";s:5:\"items\";a:8:{i:0;O:8:\"stdClass\":6:{s:4:\"href\";s:131:\"https://woocommerce.com/products/woocommerce-google-analytics/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:16:\"Google Analytics\";s:5:\"image\";s:60:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/ga-icon@2x.png\";s:11:\"description\";s:93:\"Understand your customers and increase revenue with the world’s leading analytics platform.\";s:6:\"button\";s:4:\"Free\";s:6:\"plugin\";s:85:\"woocommerce-google-analytics-integration/woocommerce-google-analytics-integration.php\";}i:1;O:8:\"stdClass\":6:{s:4:\"href\";s:127:\"https://woocommerce.com/products/woocommerce-cart-reports/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:12:\"Cart reports\";s:5:\"image\";s:70:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/cart-reports-icon@2x.png\";s:11:\"description\";s:66:\"Get real-time reports on what customers are leaving in their cart.\";s:6:\"button\";s:9:\"From: $79\";s:6:\"plugin\";s:53:\"woocommerce-cart-reports/woocommerce-cart-reports.php\";}i:2;O:8:\"stdClass\":6:{s:4:\"href\";s:128:\"https://woocommerce.com/products/woocommerce-cost-of-goods/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:13:\"Cost of Goods\";s:5:\"image\";s:71:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/cost-of-goods-icon@2x.png\";s:11:\"description\";s:64:\"Easily track profit by including  cost of goods in your reports.\";s:6:\"button\";s:9:\"From: $79\";s:6:\"plugin\";s:55:\"woocommerce-cost-of-goods/woocommerce-cost-of-goods.php\";}i:3;O:8:\"stdClass\":6:{s:4:\"href\";s:135:\"https://woocommerce.com/products/woocommerce-google-analytics-pro/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:32:\"WooCommerce Google Analytics Pro\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:85:\"Add advanced event tracking and enhanced eCommerce tracking to your WooCommerce site.\";s:6:\"button\";s:9:\"From: $79\";s:6:\"plugin\";s:69:\"woocommerce-google-analytics-pro/woocommerce-google-analytics-pro.php\";}i:4;O:8:\"stdClass\":6:{s:4:\"href\";s:131:\"https://woocommerce.com/products/woocommerce-customer-history/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:28:\"WooCommerce Customer History\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:125:\"Observe how your customers use your store, keep a full purchase history log, and calculate the total customer lifetime value.\";s:6:\"button\";s:9:\"From: $49\";s:6:\"plugin\";s:61:\"woocommerce-customer-history/woocommerce-customer-history.php\";}i:5;O:8:\"stdClass\":6:{s:4:\"href\";s:115:\"https://woocommerce.com/products/kiss-metrics/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:11:\"Kissmetrics\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:79:\"Easily add Kissmetrics event tracking to your WooCommerce store with one click.\";s:6:\"button\";s:10:\"From: $149\";s:6:\"plugin\";s:52:\"woocommerce-kiss-metrics/woocommerce-kissmetrics.php\";}i:6;O:8:\"stdClass\":6:{s:4:\"href\";s:111:\"https://woocommerce.com/products/mixpanel/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:8:\"Mixpanel\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:65:\"Add event tracking powered by Mixpanel to your WooCommerce store.\";s:6:\"button\";s:10:\"From: $149\";s:6:\"plugin\";s:45:\"woocommerce-mixpanel/woocommerce-mixpanel.php\";}i:7;O:8:\"stdClass\":6:{s:4:\"href\";s:133:\"https://woocommerce.com/products/woocommerce-sales-report-email/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:30:\"WooCommerce Sales Report Email\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:107:\"Receive emails daily, weekly or monthly with meaningful information about how your products are performing.\";s:6:\"button\";s:9:\"From: $29\";s:6:\"plugin\";s:65:\"woocommerce-sales-report-email/woocommerce-sales-report-email.php\";}}}i:9;O:8:\"stdClass\":2:{s:6:\"module\";s:10:\"column_end\";s:9:\"container\";s:20:\"column_container_end\";}i:10;O:8:\"stdClass\":4:{s:6:\"module\";s:12:\"banner_block\";s:5:\"title\";s:40:\"Promote your products and increase sales\";s:11:\"description\";s:77:\"From coupons to emails, these extensions can power up your marketing efforts.\";s:5:\"items\";a:9:{i:0;O:8:\"stdClass\":6:{s:4:\"href\";s:116:\"https://woocommerce.com/products/smart-coupons/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:13:\"Smart Coupons\";s:5:\"image\";s:71:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/smart-coupons-icon@2x.png\";s:11:\"description\";s:106:\"Enhance your coupon options - create gift certificates, store credit, coupons based on purchases and more.\";s:6:\"button\";s:9:\"From: $99\";s:6:\"plugin\";s:55:\"woocommerce-smart-coupons/woocommerce-smart-coupons.php\";}i:1;O:8:\"stdClass\":6:{s:4:\"href\";s:119:\"https://woocommerce.com/products/follow-up-emails/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:16:\"Follow Up Emails\";s:5:\"image\";s:74:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/follow-up-emails-icon@2x.png\";s:11:\"description\";s:140:\"Automatically contact customers after purchase - be it everyone, your most loyal or your biggest spenders - and keep your store top-of-mind.\";s:6:\"button\";s:9:\"From: $99\";s:6:\"plugin\";s:61:\"woocommerce-follow-up-emails/woocommerce-follow-up-emails.php\";}i:2;O:8:\"stdClass\":6:{s:4:\"href\";s:122:\"https://woocommerce.com/products/google-product-feed/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:19:\"Google Product Feed\";s:5:\"image\";s:77:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/google-product-feed-icon@2x.png\";s:11:\"description\";s:61:\"Let customers find you when shopping for products via Google.\";s:6:\"button\";s:9:\"From: $79\";s:6:\"plugin\";s:45:\"woocommerce-product-feeds/woocommerce-gpf.php\";}i:3;O:8:\"stdClass\":6:{s:4:\"href\";s:118:\"https://woocommerce.com/products/dynamic-pricing/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:15:\"Dynamic Pricing\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:48:\"Bulk discounts, role-based pricing and much more\";s:6:\"button\";s:10:\"From: $129\";s:6:\"plugin\";s:59:\"woocommerce-dynamic-pricing/woocommerce-dynamic-pricing.php\";}i:4;O:8:\"stdClass\":6:{s:4:\"href\";s:133:\"https://woocommerce.com/products/woocommerce-points-and-rewards/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:30:\"WooCommerce Points and Rewards\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:102:\"Reward your customers for purchases and other actions with points which can be redeemed for discounts.\";s:6:\"button\";s:10:\"From: $129\";s:6:\"plugin\";s:65:\"woocommerce-points-and-rewards/woocommerce-points-and-rewards.php\";}i:5;O:8:\"stdClass\":6:{s:4:\"href\";s:115:\"https://woocommerce.com/products/store-credit/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:24:\"WooCommerce Store Credit\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:152:\"Generate store credit coupons that enable customers to make multiple purchases until the total value specified is exhausted or the coupons life expires.\";s:6:\"button\";s:9:\"From: $29\";s:6:\"plugin\";s:53:\"woocommerce-store-credit/woocommerce-store-credit.php\";}i:6;O:8:\"stdClass\":6:{s:4:\"href\";s:111:\"https://woocommerce.com/products/facebook/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:24:\"Facebook for WooCommerce\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:89:\"Get the Facebook for WooCommerce plugin for two powerful ways to help grow your business.\";s:6:\"button\";s:4:\"Free\";s:6:\"plugin\";s:53:\"facebook-for-woocommerce/facebook-for-woocommerce.php\";}i:7;O:8:\"stdClass\":6:{s:4:\"href\";s:126:\"https://woocommerce.com/products/newsletter-subscription/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:23:\"Newsletter Subscription\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:127:\"Allow customers to subscribe to your MailChimp or CampaignMonitor mailing list(s) via a widget or by opting in during checkout.\";s:6:\"button\";s:9:\"From: $49\";s:6:\"plugin\";s:63:\"woocommerce-subscribe-to-newsletter/subscribe-to-newsletter.php\";}i:8;O:8:\"stdClass\":6:{s:4:\"href\";s:131:\"https://woocommerce.com/products/woocommerce-email-customizer/?utm_source=extensionsscreen&utm_medium=product&utm_campaign=wcaddons\";s:5:\"title\";s:28:\"WooCommerce Email Customizer\";s:5:\"image\";s:57:\"https://d3t0oesq8995hv.cloudfront.net/add-ons/generic.png\";s:11:\"description\";s:125:\"Connect with your customers with each email you send by visually modifying your email templates via the WordPress Customizer.\";s:6:\"button\";s:9:\"From: $79\";s:6:\"plugin\";s:61:\"woocommerce-email-customizer/woocommerce-email-customizer.php\";}}}}}', 'no'),
(570, '_transient_timeout_wc_shipping_method_count', '1577559719', 'no'),
(571, '_transient_wc_shipping_method_count', 'a:2:{s:7:\"version\";s:10:\"1574967166\";s:5:\"value\";i:0;}', 'no'),
(586, '_transient_timeout_wc_report_orders_stats_602ce4fb823dbaf378e4a559958fa6a9', '1575573598', 'no'),
(587, '_transient_wc_report_orders_stats_602ce4fb823dbaf378e4a559958fa6a9', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2019-48\";s:10:\"date_start\";s:19:\"2019-11-25 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 00:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 21:19:00\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 19:19:00\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(588, '_transient_timeout_wc_report_orders_stats_4399c5f7e9e25fdb60a6cc28326d1b60', '1575573598', 'no'),
(589, '_transient_wc_report_orders_stats_4399c5f7e9e25fdb60a6cc28326d1b60', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2019-48\";s:10:\"date_start\";s:19:\"2019-11-25 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 00:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 21:19:00\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 19:19:00\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(590, '_transient_timeout_wc_report_orders_stats_aea9052571f903916c5db63a88663840', '1575573607', 'no'),
(591, '_transient_wc_report_orders_stats_aea9052571f903916c5db63a88663840', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2019-48\";s:10:\"date_start\";s:19:\"2019-11-25 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 00:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 21:20:00\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 19:20:00\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(592, '_transient_timeout_wc_report_orders_stats_b702bea0b8a8030dd763855650430b83', '1575573607', 'no'),
(593, '_transient_wc_report_orders_stats_b702bea0b8a8030dd763855650430b83', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2019-48\";s:10:\"date_start\";s:19:\"2019-11-25 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 00:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 21:20:00\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 19:20:00\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(597, 'woocommerce_bacs_settings', 'a:11:{s:7:\"enabled\";s:3:\"yes\";s:5:\"title\";s:48:\"Прямой банковский перевод\";s:11:\"description\";s:324:\"Оплату нужно направлять напрямую на наш банковский счет. Используйте идентификатор заказа в качестве кода платежа. Заказ будет отправлен после поступления средств на наш счет.\";s:12:\"instructions\";s:0:\"\";s:15:\"account_details\";s:0:\"\";s:12:\"account_name\";s:0:\"\";s:14:\"account_number\";s:0:\"\";s:9:\"sort_code\";s:0:\"\";s:9:\"bank_name\";s:0:\"\";s:4:\"iban\";s:0:\"\";s:3:\"bic\";s:0:\"\";}', 'yes'),
(598, 'woocommerce_cod_settings', 'a:6:{s:7:\"enabled\";s:3:\"yes\";s:5:\"title\";s:36:\"Оплата при доставке\";s:11:\"description\";s:69:\"Оплата наличными при доставке заказа.\";s:12:\"instructions\";s:69:\"Оплата наличными при доставке заказа.\";s:18:\"enable_for_methods\";a:0:{}s:18:\"enable_for_virtual\";s:3:\"yes\";}', 'yes'),
(599, 'woocommerce_gateway_order', 'a:5:{s:4:\"bacs\";i:0;s:6:\"cheque\";i:1;s:3:\"cod\";i:2;s:6:\"paypal\";i:3;s:6:\"wallet\";i:4;}', 'yes'),
(630, 'woocommerce_new_order_settings', 'a:6:{s:7:\"enabled\";s:3:\"yes\";s:9:\"recipient\";s:18:\"skarlatsup@mail.ru\";s:7:\"subject\";s:0:\"\";s:7:\"heading\";s:0:\"\";s:18:\"additional_content\";s:43:\"Поздравляем с продажей.\";s:10:\"email_type\";s:4:\"html\";}', 'yes'),
(631, 'woocommerce_cancelled_order_settings', 'a:6:{s:7:\"enabled\";s:3:\"yes\";s:9:\"recipient\";s:18:\"skarlatsup@mail.ru\";s:7:\"subject\";s:0:\"\";s:7:\"heading\";s:0:\"\";s:18:\"additional_content\";s:48:\"Спасибо, что ознакомились.\";s:10:\"email_type\";s:4:\"html\";}', 'yes'),
(633, 'woocommerce_failed_order_settings', 'a:6:{s:7:\"enabled\";s:3:\"yes\";s:9:\"recipient\";s:18:\"skarlatsup@mail.ru\";s:7:\"subject\";s:0:\"\";s:7:\"heading\";s:0:\"\";s:18:\"additional_content\";s:257:\"Надеемся, они ещё вернутся. Дополнительная информация о \r\n<a href=\"https://docs.woocommerce.com/document/managing-orders/\">решении проблем с несостоявшимися платежами</a>.\";s:10:\"email_type\";s:4:\"html\";}', 'yes'),
(638, 'new_admin_email', 'skarlatsup@mail.ru', 'yes'),
(639, '_transient_random_seed', '2ae9be741ae23f5c8a1e2adc495d354e', 'yes'),
(640, 'adminhash', 'a:2:{s:4:\"hash\";s:32:\"cd765c7e15575f0135d10e5177dd3a0f\";s:8:\"newemail\";s:18:\"skarlatsup@mail.ru\";}', 'yes'),
(711, 'product_cat_children', 'a:0:{}', 'yes'),
(751, '_transient_timeout_wc_product_children_48', '1577568281', 'no'),
(752, '_transient_wc_product_children_48', 'a:2:{s:3:\"all\";a:0:{}s:7:\"visible\";a:0:{}}', 'no'),
(755, '_transient_timeout_wc_product_children_54', '1577568281', 'no'),
(756, '_transient_wc_product_children_54', 'a:2:{s:3:\"all\";a:0:{}s:7:\"visible\";a:0:{}}', 'no'),
(757, '_transient_timeout_wc_product_children_55', '1577568281', 'no'),
(758, '_transient_wc_product_children_55', 'a:2:{s:3:\"all\";a:0:{}s:7:\"visible\";a:0:{}}', 'no'),
(773, '_transient_timeout_woo_wallet_transaction_resualts', '1575063387', 'no'),
(774, '_transient_woo_wallet_transaction_resualts', 'a:1:{i:1;a:2:{s:32:\"ebce80f5db45a9d562b41e02fc97d240\";a:0:{}s:32:\"4b0aff9bf1f515c84317fd9acceacbe6\";a:0:{}}}', 'no'),
(775, '_transient_timeout_wc_related_55', '1575063387', 'no'),
(776, '_transient_wc_related_55', 'a:1:{s:50:\"limit=4&exclude_ids%5B0%5D=0&exclude_ids%5B1%5D=55\";a:9:{i:0;s:2:\"34\";i:1;s:2:\"37\";i:2;s:2:\"39\";i:3;s:2:\"47\";i:4;s:2:\"48\";i:5;s:2:\"52\";i:6;s:2:\"53\";i:7;s:2:\"54\";i:8;s:2:\"56\";}}', 'no'),
(780, '_transient_timeout_wc_product_children_47', '1577569031', 'no'),
(781, '_transient_wc_product_children_47', 'a:2:{s:3:\"all\";a:0:{}s:7:\"visible\";a:0:{}}', 'no'),
(788, '_transient_timeout__woocommerce_helper_updates', '1575053426', 'no'),
(789, '_transient__woocommerce_helper_updates', 'a:4:{s:4:\"hash\";s:32:\"d751713988987e9331980363e24189ce\";s:7:\"updated\";i:1575010226;s:8:\"products\";a:0:{}s:6:\"errors\";a:1:{i:0;s:10:\"http-error\";}}', 'no'),
(913, 'category_children', 'a:0:{}', 'yes'),
(1170, '_site_transient_timeout_theme_roots', '1575037267', 'no'),
(1171, '_site_transient_theme_roots', 'a:4:{s:4:\"shef\";s:7:\"/themes\";s:14:\"twentynineteen\";s:7:\"/themes\";s:15:\"twentyseventeen\";s:7:\"/themes\";s:12:\"twentytwenty\";s:7:\"/themes\";}', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1172, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1575035469;s:7:\"checked\";a:11:{s:30:\"advanced-custom-fields/acf.php\";s:6:\"4.4.11\";s:26:\"create-post-type/index.php\";s:0:\"\";s:22:\"cyr2lat/cyr-to-lat.php\";s:5:\"4.2.3\";s:73:\"kadence-woocommerce-email-designer/kadence-woocommerce-email-designer.php\";s:5:\"1.3.3\";s:23:\"rustolat/rus-to-lat.php\";s:3:\"0.3\";s:59:\"simple-post-type-permalinks/simple-post-type-permalinks.php\";s:5:\"2.0.5\";s:25:\"woo-wallet/woo-wallet.php\";s:5:\"1.3.9\";s:27:\"woocommerce/woocommerce.php\";s:5:\"3.8.1\";s:39:\"woocommerce-admin/woocommerce-admin.php\";s:6:\"0.22.0\";s:69:\"woo-gutenberg-products-block/woocommerce-gutenberg-products-block.php\";s:5:\"2.5.1\";s:39:\"wp-file-manager/file_folder_manager.php\";s:3:\"5.4\";}s:8:\"response\";a:3:{s:30:\"advanced-custom-fields/acf.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:36:\"w.org/plugins/advanced-custom-fields\";s:4:\"slug\";s:22:\"advanced-custom-fields\";s:6:\"plugin\";s:30:\"advanced-custom-fields/acf.php\";s:11:\"new_version\";s:5:\"5.8.7\";s:3:\"url\";s:53:\"https://wordpress.org/plugins/advanced-custom-fields/\";s:7:\"package\";s:71:\"https://downloads.wordpress.org/plugin/advanced-custom-fields.5.8.7.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:75:\"https://ps.w.org/advanced-custom-fields/assets/icon-256x256.png?rev=1082746\";s:2:\"1x\";s:75:\"https://ps.w.org/advanced-custom-fields/assets/icon-128x128.png?rev=1082746\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:78:\"https://ps.w.org/advanced-custom-fields/assets/banner-1544x500.jpg?rev=1729099\";s:2:\"1x\";s:77:\"https://ps.w.org/advanced-custom-fields/assets/banner-772x250.jpg?rev=1729102\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"5.3.0\";s:12:\"requires_php\";s:3:\"5.4\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:73:\"kadence-woocommerce-email-designer/kadence-woocommerce-email-designer.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:48:\"w.org/plugins/kadence-woocommerce-email-designer\";s:4:\"slug\";s:34:\"kadence-woocommerce-email-designer\";s:6:\"plugin\";s:73:\"kadence-woocommerce-email-designer/kadence-woocommerce-email-designer.php\";s:11:\"new_version\";s:5:\"1.3.5\";s:3:\"url\";s:65:\"https://wordpress.org/plugins/kadence-woocommerce-email-designer/\";s:7:\"package\";s:77:\"https://downloads.wordpress.org/plugin/kadence-woocommerce-email-designer.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:87:\"https://ps.w.org/kadence-woocommerce-email-designer/assets/icon-256x256.png?rev=2100547\";s:2:\"1x\";s:87:\"https://ps.w.org/kadence-woocommerce-email-designer/assets/icon-128x128.png?rev=2100547\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:90:\"https://ps.w.org/kadence-woocommerce-email-designer/assets/banner-1544x500.jpg?rev=1883649\";s:2:\"1x\";s:89:\"https://ps.w.org/kadence-woocommerce-email-designer/assets/banner-772x250.jpg?rev=1883649\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"5.3.0\";s:12:\"requires_php\";s:5:\"5.2.4\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}s:25:\"woo-wallet/woo-wallet.php\";O:8:\"stdClass\":12:{s:2:\"id\";s:24:\"w.org/plugins/woo-wallet\";s:4:\"slug\";s:10:\"woo-wallet\";s:6:\"plugin\";s:25:\"woo-wallet/woo-wallet.php\";s:11:\"new_version\";s:6:\"1.3.11\";s:3:\"url\";s:41:\"https://wordpress.org/plugins/woo-wallet/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/woo-wallet.1.3.11.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:63:\"https://ps.w.org/woo-wallet/assets/icon-256x256.png?rev=1977918\";s:2:\"1x\";s:63:\"https://ps.w.org/woo-wallet/assets/icon-128x128.png?rev=1977918\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:66:\"https://ps.w.org/woo-wallet/assets/banner-1544x500.png?rev=1977918\";s:2:\"1x\";s:65:\"https://ps.w.org/woo-wallet/assets/banner-772x250.png?rev=1977918\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:3:\"5.3\";s:12:\"requires_php\";s:3:\"5.6\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:7:{s:22:\"cyr2lat/cyr-to-lat.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:21:\"w.org/plugins/cyr2lat\";s:4:\"slug\";s:7:\"cyr2lat\";s:6:\"plugin\";s:22:\"cyr2lat/cyr-to-lat.php\";s:11:\"new_version\";s:5:\"4.2.3\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/cyr2lat/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/cyr2lat.4.2.3.zip\";s:5:\"icons\";a:3:{s:2:\"2x\";s:60:\"https://ps.w.org/cyr2lat/assets/icon-256x256.jpg?rev=2022835\";s:2:\"1x\";s:52:\"https://ps.w.org/cyr2lat/assets/icon.svg?rev=2022835\";s:3:\"svg\";s:52:\"https://ps.w.org/cyr2lat/assets/icon.svg?rev=2022835\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:63:\"https://ps.w.org/cyr2lat/assets/banner-1544x500.png?rev=2022835\";s:2:\"1x\";s:62:\"https://ps.w.org/cyr2lat/assets/banner-772x250.png?rev=2022835\";}s:11:\"banners_rtl\";a:0:{}}s:23:\"rustolat/rus-to-lat.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:22:\"w.org/plugins/rustolat\";s:4:\"slug\";s:8:\"rustolat\";s:6:\"plugin\";s:23:\"rustolat/rus-to-lat.php\";s:11:\"new_version\";s:3:\"0.3\";s:3:\"url\";s:39:\"https://wordpress.org/plugins/rustolat/\";s:7:\"package\";s:55:\"https://downloads.wordpress.org/plugin/rustolat.0.3.zip\";s:5:\"icons\";a:1:{s:7:\"default\";s:52:\"https://s.w.org/plugins/geopattern-icon/rustolat.svg\";}s:7:\"banners\";a:0:{}s:11:\"banners_rtl\";a:0:{}}s:59:\"simple-post-type-permalinks/simple-post-type-permalinks.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:41:\"w.org/plugins/simple-post-type-permalinks\";s:4:\"slug\";s:27:\"simple-post-type-permalinks\";s:6:\"plugin\";s:59:\"simple-post-type-permalinks/simple-post-type-permalinks.php\";s:11:\"new_version\";s:5:\"2.0.5\";s:3:\"url\";s:58:\"https://wordpress.org/plugins/simple-post-type-permalinks/\";s:7:\"package\";s:76:\"https://downloads.wordpress.org/plugin/simple-post-type-permalinks.2.0.5.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:80:\"https://ps.w.org/simple-post-type-permalinks/assets/icon-256x256.png?rev=1126124\";s:2:\"1x\";s:80:\"https://ps.w.org/simple-post-type-permalinks/assets/icon-128x128.png?rev=1126124\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:83:\"https://ps.w.org/simple-post-type-permalinks/assets/banner-1544x500.png?rev=1126124\";s:2:\"1x\";s:82:\"https://ps.w.org/simple-post-type-permalinks/assets/banner-772x250.png?rev=1126124\";}s:11:\"banners_rtl\";a:0:{}}s:27:\"woocommerce/woocommerce.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:25:\"w.org/plugins/woocommerce\";s:4:\"slug\";s:11:\"woocommerce\";s:6:\"plugin\";s:27:\"woocommerce/woocommerce.php\";s:11:\"new_version\";s:5:\"3.8.1\";s:3:\"url\";s:42:\"https://wordpress.org/plugins/woocommerce/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/woocommerce.3.8.1.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/woocommerce/assets/icon-256x256.png?rev=2075035\";s:2:\"1x\";s:64:\"https://ps.w.org/woocommerce/assets/icon-128x128.png?rev=2075035\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:67:\"https://ps.w.org/woocommerce/assets/banner-1544x500.png?rev=2075035\";s:2:\"1x\";s:66:\"https://ps.w.org/woocommerce/assets/banner-772x250.png?rev=2075035\";}s:11:\"banners_rtl\";a:0:{}}s:39:\"woocommerce-admin/woocommerce-admin.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:31:\"w.org/plugins/woocommerce-admin\";s:4:\"slug\";s:17:\"woocommerce-admin\";s:6:\"plugin\";s:39:\"woocommerce-admin/woocommerce-admin.php\";s:11:\"new_version\";s:6:\"0.22.0\";s:3:\"url\";s:48:\"https://wordpress.org/plugins/woocommerce-admin/\";s:7:\"package\";s:60:\"https://downloads.wordpress.org/plugin/woocommerce-admin.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:70:\"https://ps.w.org/woocommerce-admin/assets/icon-256x256.jpg?rev=2057866\";s:2:\"1x\";s:70:\"https://ps.w.org/woocommerce-admin/assets/icon-128x128.jpg?rev=2057866\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:73:\"https://ps.w.org/woocommerce-admin/assets/banner-1544x500.jpg?rev=2057866\";s:2:\"1x\";s:72:\"https://ps.w.org/woocommerce-admin/assets/banner-772x250.jpg?rev=2057866\";}s:11:\"banners_rtl\";a:0:{}}s:69:\"woo-gutenberg-products-block/woocommerce-gutenberg-products-block.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:42:\"w.org/plugins/woo-gutenberg-products-block\";s:4:\"slug\";s:28:\"woo-gutenberg-products-block\";s:6:\"plugin\";s:69:\"woo-gutenberg-products-block/woocommerce-gutenberg-products-block.php\";s:11:\"new_version\";s:5:\"2.5.1\";s:3:\"url\";s:59:\"https://wordpress.org/plugins/woo-gutenberg-products-block/\";s:7:\"package\";s:77:\"https://downloads.wordpress.org/plugin/woo-gutenberg-products-block.2.5.1.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:81:\"https://ps.w.org/woo-gutenberg-products-block/assets/icon-256x256.png?rev=1863757\";s:2:\"1x\";s:81:\"https://ps.w.org/woo-gutenberg-products-block/assets/icon-128x128.png?rev=1863757\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:83:\"https://ps.w.org/woo-gutenberg-products-block/assets/banner-772x250.png?rev=1863757\";}s:11:\"banners_rtl\";a:0:{}}s:39:\"wp-file-manager/file_folder_manager.php\";O:8:\"stdClass\":9:{s:2:\"id\";s:29:\"w.org/plugins/wp-file-manager\";s:4:\"slug\";s:15:\"wp-file-manager\";s:6:\"plugin\";s:39:\"wp-file-manager/file_folder_manager.php\";s:11:\"new_version\";s:3:\"5.4\";s:3:\"url\";s:46:\"https://wordpress.org/plugins/wp-file-manager/\";s:7:\"package\";s:58:\"https://downloads.wordpress.org/plugin/wp-file-manager.zip\";s:5:\"icons\";a:1:{s:2:\"1x\";s:68:\"https://ps.w.org/wp-file-manager/assets/icon-128x128.png?rev=1846029\";}s:7:\"banners\";a:1:{s:2:\"1x\";s:70:\"https://ps.w.org/wp-file-manager/assets/banner-772x250.jpg?rev=1846030\";}s:11:\"banners_rtl\";a:0:{}}}}', 'no'),
(1197, '_transient_timeout_wc_report_orders_stats_c0dfc669b79775e7935f407b03537b6b', '1575642092', 'no'),
(1198, '_transient_wc_report_orders_stats_c0dfc669b79775e7935f407b03537b6b', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2019-48\";s:10:\"date_start\";s:19:\"2019-11-25 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 00:00:00\";s:8:\"date_end\";s:19:\"2019-11-29 16:21:00\";s:12:\"date_end_gmt\";s:19:\"2019-11-29 14:21:00\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1199, '_transient_timeout_wc_report_orders_stats_5b5801a35d0ad987b1089baa16a9afe8', '1575642092', 'no'),
(1200, '_transient_wc_report_orders_stats_5b5801a35d0ad987b1089baa16a9afe8', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2019-48\";s:10:\"date_start\";s:19:\"2019-11-25 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 00:00:00\";s:8:\"date_end\";s:19:\"2019-11-29 16:21:00\";s:12:\"date_end_gmt\";s:19:\"2019-11-29 14:21:00\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1201, '_transient_timeout_wc_report_orders_stats_499185e4d90b84233f625f81aeb6bfd0', '1575642095', 'no'),
(1202, '_transient_wc_report_orders_stats_499185e4d90b84233f625f81aeb6bfd0', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2018-48\";s:10:\"date_start\";s:19:\"2018-11-26 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-26 00:00:00\";s:8:\"date_end\";s:19:\"2018-11-29 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-29 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1203, '_transient_timeout_wc_report_orders_stats_8b5af45a5ff287b47108aa20d4ad1e17', '1575642095', 'no'),
(1204, '_transient_wc_report_orders_stats_8b5af45a5ff287b47108aa20d4ad1e17', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:29:{i:0;a:6:{s:8:\"interval\";s:10:\"2019-11-01\";s:10:\"date_start\";s:19:\"2019-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2019-11-02\";s:10:\"date_start\";s:19:\"2019-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2019-11-03\";s:10:\"date_start\";s:19:\"2019-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2019-11-04\";s:10:\"date_start\";s:19:\"2019-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2019-11-05\";s:10:\"date_start\";s:19:\"2019-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2019-11-06\";s:10:\"date_start\";s:19:\"2019-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2019-11-07\";s:10:\"date_start\";s:19:\"2019-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2019-11-08\";s:10:\"date_start\";s:19:\"2019-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2019-11-09\";s:10:\"date_start\";s:19:\"2019-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2019-11-10\";s:10:\"date_start\";s:19:\"2019-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2019-11-11\";s:10:\"date_start\";s:19:\"2019-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2019-11-12\";s:10:\"date_start\";s:19:\"2019-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2019-11-13\";s:10:\"date_start\";s:19:\"2019-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2019-11-14\";s:10:\"date_start\";s:19:\"2019-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2019-11-15\";s:10:\"date_start\";s:19:\"2019-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2019-11-16\";s:10:\"date_start\";s:19:\"2019-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2019-11-17\";s:10:\"date_start\";s:19:\"2019-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2019-11-18\";s:10:\"date_start\";s:19:\"2019-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2019-11-19\";s:10:\"date_start\";s:19:\"2019-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2019-11-20\";s:10:\"date_start\";s:19:\"2019-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2019-11-21\";s:10:\"date_start\";s:19:\"2019-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2019-11-22\";s:10:\"date_start\";s:19:\"2019-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2019-11-23\";s:10:\"date_start\";s:19:\"2019-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2019-11-24\";s:10:\"date_start\";s:19:\"2019-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2019-11-25\";s:10:\"date_start\";s:19:\"2019-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2019-11-26\";s:10:\"date_start\";s:19:\"2019-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2019-11-27\";s:10:\"date_start\";s:19:\"2019-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2019-11-28\";s:10:\"date_start\";s:19:\"2019-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:28;a:6:{s:8:\"interval\";s:10:\"2019-11-29\";s:10:\"date_start\";s:19:\"2019-11-29 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-28 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-29 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-29 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:29;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1205, '_transient_timeout_wc_report_orders_stats_45441408365037816dc40ab86472639f', '1575642095', 'no'),
(1206, '_transient_wc_report_orders_stats_45441408365037816dc40ab86472639f', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2018-48\";s:10:\"date_start\";s:19:\"2018-11-26 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-26 00:00:00\";s:8:\"date_end\";s:19:\"2018-11-29 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-29 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1207, '_transient_timeout_wc_report_orders_stats_59452a92cd01b8245cb07356524d57b3', '1575642095', 'no'),
(1208, '_transient_wc_report_orders_stats_59452a92cd01b8245cb07356524d57b3', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:29:{i:0;a:6:{s:8:\"interval\";s:10:\"2019-11-01\";s:10:\"date_start\";s:19:\"2019-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2019-11-02\";s:10:\"date_start\";s:19:\"2019-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2019-11-03\";s:10:\"date_start\";s:19:\"2019-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2019-11-04\";s:10:\"date_start\";s:19:\"2019-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2019-11-05\";s:10:\"date_start\";s:19:\"2019-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2019-11-06\";s:10:\"date_start\";s:19:\"2019-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2019-11-07\";s:10:\"date_start\";s:19:\"2019-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2019-11-08\";s:10:\"date_start\";s:19:\"2019-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2019-11-09\";s:10:\"date_start\";s:19:\"2019-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2019-11-10\";s:10:\"date_start\";s:19:\"2019-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2019-11-11\";s:10:\"date_start\";s:19:\"2019-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2019-11-12\";s:10:\"date_start\";s:19:\"2019-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2019-11-13\";s:10:\"date_start\";s:19:\"2019-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2019-11-14\";s:10:\"date_start\";s:19:\"2019-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2019-11-15\";s:10:\"date_start\";s:19:\"2019-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2019-11-16\";s:10:\"date_start\";s:19:\"2019-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2019-11-17\";s:10:\"date_start\";s:19:\"2019-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2019-11-18\";s:10:\"date_start\";s:19:\"2019-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2019-11-19\";s:10:\"date_start\";s:19:\"2019-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2019-11-20\";s:10:\"date_start\";s:19:\"2019-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2019-11-21\";s:10:\"date_start\";s:19:\"2019-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2019-11-22\";s:10:\"date_start\";s:19:\"2019-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2019-11-23\";s:10:\"date_start\";s:19:\"2019-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2019-11-24\";s:10:\"date_start\";s:19:\"2019-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2019-11-25\";s:10:\"date_start\";s:19:\"2019-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2019-11-26\";s:10:\"date_start\";s:19:\"2019-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2019-11-27\";s:10:\"date_start\";s:19:\"2019-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2019-11-28\";s:10:\"date_start\";s:19:\"2019-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:28;a:6:{s:8:\"interval\";s:10:\"2019-11-29\";s:10:\"date_start\";s:19:\"2019-11-29 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-28 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-29 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-29 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:29;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1209, '_transient_timeout_wc_report_orders_stats_152d783097e7e62fea8f411d9761dc33', '1575642095', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1210, '_transient_wc_report_orders_stats_152d783097e7e62fea8f411d9761dc33', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:29:{i:0;a:6:{s:8:\"interval\";s:10:\"2018-11-01\";s:10:\"date_start\";s:19:\"2018-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2018-11-02\";s:10:\"date_start\";s:19:\"2018-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2018-11-03\";s:10:\"date_start\";s:19:\"2018-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2018-11-04\";s:10:\"date_start\";s:19:\"2018-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2018-11-05\";s:10:\"date_start\";s:19:\"2018-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2018-11-06\";s:10:\"date_start\";s:19:\"2018-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2018-11-07\";s:10:\"date_start\";s:19:\"2018-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2018-11-08\";s:10:\"date_start\";s:19:\"2018-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2018-11-09\";s:10:\"date_start\";s:19:\"2018-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2018-11-10\";s:10:\"date_start\";s:19:\"2018-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2018-11-11\";s:10:\"date_start\";s:19:\"2018-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2018-11-12\";s:10:\"date_start\";s:19:\"2018-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2018-11-13\";s:10:\"date_start\";s:19:\"2018-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2018-11-14\";s:10:\"date_start\";s:19:\"2018-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2018-11-15\";s:10:\"date_start\";s:19:\"2018-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2018-11-16\";s:10:\"date_start\";s:19:\"2018-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2018-11-17\";s:10:\"date_start\";s:19:\"2018-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2018-11-18\";s:10:\"date_start\";s:19:\"2018-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2018-11-19\";s:10:\"date_start\";s:19:\"2018-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2018-11-20\";s:10:\"date_start\";s:19:\"2018-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2018-11-21\";s:10:\"date_start\";s:19:\"2018-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2018-11-22\";s:10:\"date_start\";s:19:\"2018-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2018-11-23\";s:10:\"date_start\";s:19:\"2018-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2018-11-24\";s:10:\"date_start\";s:19:\"2018-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2018-11-25\";s:10:\"date_start\";s:19:\"2018-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2018-11-26\";s:10:\"date_start\";s:19:\"2018-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2018-11-27\";s:10:\"date_start\";s:19:\"2018-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2018-11-28\";s:10:\"date_start\";s:19:\"2018-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}i:28;a:6:{s:8:\"interval\";s:10:\"2018-11-29\";s:10:\"date_start\";s:19:\"2018-11-29 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-28 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-29 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-29 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:29;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1211, '_transient_timeout_wc_report_orders_stats_6889d8b0e39fa47c2bcb0b0ca0e589f0', '1575642097', 'no'),
(1212, '_transient_wc_report_orders_stats_6889d8b0e39fa47c2bcb0b0ca0e589f0', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:29:{i:0;a:6:{s:8:\"interval\";s:10:\"2018-11-01\";s:10:\"date_start\";s:19:\"2018-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2018-11-02\";s:10:\"date_start\";s:19:\"2018-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2018-11-03\";s:10:\"date_start\";s:19:\"2018-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2018-11-04\";s:10:\"date_start\";s:19:\"2018-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2018-11-05\";s:10:\"date_start\";s:19:\"2018-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2018-11-06\";s:10:\"date_start\";s:19:\"2018-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2018-11-07\";s:10:\"date_start\";s:19:\"2018-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2018-11-08\";s:10:\"date_start\";s:19:\"2018-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2018-11-09\";s:10:\"date_start\";s:19:\"2018-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2018-11-10\";s:10:\"date_start\";s:19:\"2018-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2018-11-11\";s:10:\"date_start\";s:19:\"2018-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2018-11-12\";s:10:\"date_start\";s:19:\"2018-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2018-11-13\";s:10:\"date_start\";s:19:\"2018-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2018-11-14\";s:10:\"date_start\";s:19:\"2018-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2018-11-15\";s:10:\"date_start\";s:19:\"2018-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2018-11-16\";s:10:\"date_start\";s:19:\"2018-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2018-11-17\";s:10:\"date_start\";s:19:\"2018-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2018-11-18\";s:10:\"date_start\";s:19:\"2018-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2018-11-19\";s:10:\"date_start\";s:19:\"2018-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2018-11-20\";s:10:\"date_start\";s:19:\"2018-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2018-11-21\";s:10:\"date_start\";s:19:\"2018-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2018-11-22\";s:10:\"date_start\";s:19:\"2018-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2018-11-23\";s:10:\"date_start\";s:19:\"2018-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2018-11-24\";s:10:\"date_start\";s:19:\"2018-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2018-11-25\";s:10:\"date_start\";s:19:\"2018-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2018-11-26\";s:10:\"date_start\";s:19:\"2018-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2018-11-27\";s:10:\"date_start\";s:19:\"2018-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2018-11-28\";s:10:\"date_start\";s:19:\"2018-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}i:28;a:6:{s:8:\"interval\";s:10:\"2018-11-29\";s:10:\"date_start\";s:19:\"2018-11-29 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-28 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-29 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-29 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:29;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1213, '_transient_timeout_wc_report_coupons_stats_bf42e3bbf9c3aa215f858ae707811ffb', '1575642099', 'no'),
(1214, '_transient_wc_report_coupons_stats_bf42e3bbf9c3aa215f858ae707811ffb', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:29:{i:0;a:6:{s:8:\"interval\";s:10:\"2018-11-01\";s:10:\"date_start\";s:19:\"2018-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2018-11-02\";s:10:\"date_start\";s:19:\"2018-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2018-11-03\";s:10:\"date_start\";s:19:\"2018-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2018-11-04\";s:10:\"date_start\";s:19:\"2018-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2018-11-05\";s:10:\"date_start\";s:19:\"2018-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2018-11-06\";s:10:\"date_start\";s:19:\"2018-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2018-11-07\";s:10:\"date_start\";s:19:\"2018-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2018-11-08\";s:10:\"date_start\";s:19:\"2018-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2018-11-09\";s:10:\"date_start\";s:19:\"2018-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2018-11-10\";s:10:\"date_start\";s:19:\"2018-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2018-11-11\";s:10:\"date_start\";s:19:\"2018-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2018-11-12\";s:10:\"date_start\";s:19:\"2018-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2018-11-13\";s:10:\"date_start\";s:19:\"2018-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2018-11-14\";s:10:\"date_start\";s:19:\"2018-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2018-11-15\";s:10:\"date_start\";s:19:\"2018-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2018-11-16\";s:10:\"date_start\";s:19:\"2018-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2018-11-17\";s:10:\"date_start\";s:19:\"2018-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2018-11-18\";s:10:\"date_start\";s:19:\"2018-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2018-11-19\";s:10:\"date_start\";s:19:\"2018-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2018-11-20\";s:10:\"date_start\";s:19:\"2018-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2018-11-21\";s:10:\"date_start\";s:19:\"2018-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2018-11-22\";s:10:\"date_start\";s:19:\"2018-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2018-11-23\";s:10:\"date_start\";s:19:\"2018-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2018-11-24\";s:10:\"date_start\";s:19:\"2018-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2018-11-25\";s:10:\"date_start\";s:19:\"2018-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2018-11-26\";s:10:\"date_start\";s:19:\"2018-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2018-11-27\";s:10:\"date_start\";s:19:\"2018-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2018-11-28\";s:10:\"date_start\";s:19:\"2018-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:28;a:6:{s:8:\"interval\";s:10:\"2018-11-29\";s:10:\"date_start\";s:19:\"2018-11-29 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-28 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-29 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-29 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:29;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1215, '_transient_timeout_wc_report_coupons_stats_ca1c5362bf352fcd9617b4480d376723', '1575642099', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1216, '_transient_wc_report_coupons_stats_ca1c5362bf352fcd9617b4480d376723', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:29:{i:0;a:6:{s:8:\"interval\";s:10:\"2019-11-01\";s:10:\"date_start\";s:19:\"2019-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2019-11-02\";s:10:\"date_start\";s:19:\"2019-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2019-11-03\";s:10:\"date_start\";s:19:\"2019-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2019-11-04\";s:10:\"date_start\";s:19:\"2019-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2019-11-05\";s:10:\"date_start\";s:19:\"2019-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2019-11-06\";s:10:\"date_start\";s:19:\"2019-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2019-11-07\";s:10:\"date_start\";s:19:\"2019-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2019-11-08\";s:10:\"date_start\";s:19:\"2019-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2019-11-09\";s:10:\"date_start\";s:19:\"2019-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2019-11-10\";s:10:\"date_start\";s:19:\"2019-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2019-11-11\";s:10:\"date_start\";s:19:\"2019-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2019-11-12\";s:10:\"date_start\";s:19:\"2019-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2019-11-13\";s:10:\"date_start\";s:19:\"2019-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2019-11-14\";s:10:\"date_start\";s:19:\"2019-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2019-11-15\";s:10:\"date_start\";s:19:\"2019-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2019-11-16\";s:10:\"date_start\";s:19:\"2019-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2019-11-17\";s:10:\"date_start\";s:19:\"2019-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2019-11-18\";s:10:\"date_start\";s:19:\"2019-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2019-11-19\";s:10:\"date_start\";s:19:\"2019-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2019-11-20\";s:10:\"date_start\";s:19:\"2019-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2019-11-21\";s:10:\"date_start\";s:19:\"2019-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2019-11-22\";s:10:\"date_start\";s:19:\"2019-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2019-11-23\";s:10:\"date_start\";s:19:\"2019-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2019-11-24\";s:10:\"date_start\";s:19:\"2019-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2019-11-25\";s:10:\"date_start\";s:19:\"2019-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2019-11-26\";s:10:\"date_start\";s:19:\"2019-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2019-11-27\";s:10:\"date_start\";s:19:\"2019-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2019-11-28\";s:10:\"date_start\";s:19:\"2019-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:28;a:6:{s:8:\"interval\";s:10:\"2019-11-29\";s:10:\"date_start\";s:19:\"2019-11-29 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-28 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-29 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-29 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":4:{s:6:\"amount\";d:0;s:13:\"coupons_count\";i:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:29;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1217, '_transient_timeout_wc_report_taxes_stats_e1c92151c5a16bdf99c05210e32b2f41', '1575642100', 'no'),
(1218, '_transient_wc_report_taxes_stats_e1c92151c5a16bdf99c05210e32b2f41', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:29:{i:0;a:6:{s:8:\"interval\";s:10:\"2019-11-01\";s:10:\"date_start\";s:19:\"2019-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2019-11-02\";s:10:\"date_start\";s:19:\"2019-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2019-11-03\";s:10:\"date_start\";s:19:\"2019-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2019-11-04\";s:10:\"date_start\";s:19:\"2019-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2019-11-05\";s:10:\"date_start\";s:19:\"2019-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2019-11-06\";s:10:\"date_start\";s:19:\"2019-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2019-11-07\";s:10:\"date_start\";s:19:\"2019-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2019-11-08\";s:10:\"date_start\";s:19:\"2019-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2019-11-09\";s:10:\"date_start\";s:19:\"2019-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2019-11-10\";s:10:\"date_start\";s:19:\"2019-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2019-11-11\";s:10:\"date_start\";s:19:\"2019-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2019-11-12\";s:10:\"date_start\";s:19:\"2019-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2019-11-13\";s:10:\"date_start\";s:19:\"2019-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2019-11-14\";s:10:\"date_start\";s:19:\"2019-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2019-11-15\";s:10:\"date_start\";s:19:\"2019-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2019-11-16\";s:10:\"date_start\";s:19:\"2019-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2019-11-17\";s:10:\"date_start\";s:19:\"2019-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2019-11-18\";s:10:\"date_start\";s:19:\"2019-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2019-11-19\";s:10:\"date_start\";s:19:\"2019-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2019-11-20\";s:10:\"date_start\";s:19:\"2019-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2019-11-21\";s:10:\"date_start\";s:19:\"2019-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2019-11-22\";s:10:\"date_start\";s:19:\"2019-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2019-11-23\";s:10:\"date_start\";s:19:\"2019-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2019-11-24\";s:10:\"date_start\";s:19:\"2019-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2019-11-25\";s:10:\"date_start\";s:19:\"2019-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2019-11-26\";s:10:\"date_start\";s:19:\"2019-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2019-11-27\";s:10:\"date_start\";s:19:\"2019-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2019-11-28\";s:10:\"date_start\";s:19:\"2019-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:28;a:6:{s:8:\"interval\";s:10:\"2019-11-29\";s:10:\"date_start\";s:19:\"2019-11-29 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-28 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-29 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-29 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:29;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1219, '_transient_timeout_wc_report_taxes_stats_fbc5478b6b0abf39d260b12028392111', '1575642100', 'no'),
(1220, '_transient_wc_report_taxes_stats_fbc5478b6b0abf39d260b12028392111', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:29:{i:0;a:6:{s:8:\"interval\";s:10:\"2018-11-01\";s:10:\"date_start\";s:19:\"2018-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:1;a:6:{s:8:\"interval\";s:10:\"2018-11-02\";s:10:\"date_start\";s:19:\"2018-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:2;a:6:{s:8:\"interval\";s:10:\"2018-11-03\";s:10:\"date_start\";s:19:\"2018-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:3;a:6:{s:8:\"interval\";s:10:\"2018-11-04\";s:10:\"date_start\";s:19:\"2018-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:4;a:6:{s:8:\"interval\";s:10:\"2018-11-05\";s:10:\"date_start\";s:19:\"2018-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:5;a:6:{s:8:\"interval\";s:10:\"2018-11-06\";s:10:\"date_start\";s:19:\"2018-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:6;a:6:{s:8:\"interval\";s:10:\"2018-11-07\";s:10:\"date_start\";s:19:\"2018-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:7;a:6:{s:8:\"interval\";s:10:\"2018-11-08\";s:10:\"date_start\";s:19:\"2018-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:8;a:6:{s:8:\"interval\";s:10:\"2018-11-09\";s:10:\"date_start\";s:19:\"2018-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:9;a:6:{s:8:\"interval\";s:10:\"2018-11-10\";s:10:\"date_start\";s:19:\"2018-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:10;a:6:{s:8:\"interval\";s:10:\"2018-11-11\";s:10:\"date_start\";s:19:\"2018-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:11;a:6:{s:8:\"interval\";s:10:\"2018-11-12\";s:10:\"date_start\";s:19:\"2018-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:12;a:6:{s:8:\"interval\";s:10:\"2018-11-13\";s:10:\"date_start\";s:19:\"2018-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:13;a:6:{s:8:\"interval\";s:10:\"2018-11-14\";s:10:\"date_start\";s:19:\"2018-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:14;a:6:{s:8:\"interval\";s:10:\"2018-11-15\";s:10:\"date_start\";s:19:\"2018-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:15;a:6:{s:8:\"interval\";s:10:\"2018-11-16\";s:10:\"date_start\";s:19:\"2018-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:16;a:6:{s:8:\"interval\";s:10:\"2018-11-17\";s:10:\"date_start\";s:19:\"2018-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:17;a:6:{s:8:\"interval\";s:10:\"2018-11-18\";s:10:\"date_start\";s:19:\"2018-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:18;a:6:{s:8:\"interval\";s:10:\"2018-11-19\";s:10:\"date_start\";s:19:\"2018-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:19;a:6:{s:8:\"interval\";s:10:\"2018-11-20\";s:10:\"date_start\";s:19:\"2018-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:20;a:6:{s:8:\"interval\";s:10:\"2018-11-21\";s:10:\"date_start\";s:19:\"2018-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:21;a:6:{s:8:\"interval\";s:10:\"2018-11-22\";s:10:\"date_start\";s:19:\"2018-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:22;a:6:{s:8:\"interval\";s:10:\"2018-11-23\";s:10:\"date_start\";s:19:\"2018-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:23;a:6:{s:8:\"interval\";s:10:\"2018-11-24\";s:10:\"date_start\";s:19:\"2018-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:24;a:6:{s:8:\"interval\";s:10:\"2018-11-25\";s:10:\"date_start\";s:19:\"2018-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:25;a:6:{s:8:\"interval\";s:10:\"2018-11-26\";s:10:\"date_start\";s:19:\"2018-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:26;a:6:{s:8:\"interval\";s:10:\"2018-11-27\";s:10:\"date_start\";s:19:\"2018-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:27;a:6:{s:8:\"interval\";s:10:\"2018-11-28\";s:10:\"date_start\";s:19:\"2018-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}i:28;a:6:{s:8:\"interval\";s:10:\"2018-11-29\";s:10:\"date_start\";s:19:\"2018-11-29 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-28 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-29 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-29 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":6:{s:9:\"tax_codes\";i:0;s:9:\"total_tax\";d:0;s:9:\"order_tax\";d:0;s:12:\"shipping_tax\";d:0;s:12:\"orders_count\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:29;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1221, '_transient_timeout_wc_report_downloads_stats_cdd175d840d417c69d2f5fb47334d19f', '1575642101', 'no'),
(1222, '_transient_wc_report_downloads_stats_cdd175d840d417c69d2f5fb47334d19f', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}s:9:\"intervals\";a:29:{i:0;a:6:{s:8:\"interval\";s:10:\"2019-11-01\";s:10:\"date_start\";s:19:\"2019-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:1;a:6:{s:8:\"interval\";s:10:\"2019-11-02\";s:10:\"date_start\";s:19:\"2019-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:2;a:6:{s:8:\"interval\";s:10:\"2019-11-03\";s:10:\"date_start\";s:19:\"2019-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:3;a:6:{s:8:\"interval\";s:10:\"2019-11-04\";s:10:\"date_start\";s:19:\"2019-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:4;a:6:{s:8:\"interval\";s:10:\"2019-11-05\";s:10:\"date_start\";s:19:\"2019-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:5;a:6:{s:8:\"interval\";s:10:\"2019-11-06\";s:10:\"date_start\";s:19:\"2019-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:6;a:6:{s:8:\"interval\";s:10:\"2019-11-07\";s:10:\"date_start\";s:19:\"2019-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:7;a:6:{s:8:\"interval\";s:10:\"2019-11-08\";s:10:\"date_start\";s:19:\"2019-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:8;a:6:{s:8:\"interval\";s:10:\"2019-11-09\";s:10:\"date_start\";s:19:\"2019-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:9;a:6:{s:8:\"interval\";s:10:\"2019-11-10\";s:10:\"date_start\";s:19:\"2019-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:10;a:6:{s:8:\"interval\";s:10:\"2019-11-11\";s:10:\"date_start\";s:19:\"2019-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:11;a:6:{s:8:\"interval\";s:10:\"2019-11-12\";s:10:\"date_start\";s:19:\"2019-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:12;a:6:{s:8:\"interval\";s:10:\"2019-11-13\";s:10:\"date_start\";s:19:\"2019-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:13;a:6:{s:8:\"interval\";s:10:\"2019-11-14\";s:10:\"date_start\";s:19:\"2019-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:14;a:6:{s:8:\"interval\";s:10:\"2019-11-15\";s:10:\"date_start\";s:19:\"2019-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:15;a:6:{s:8:\"interval\";s:10:\"2019-11-16\";s:10:\"date_start\";s:19:\"2019-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:16;a:6:{s:8:\"interval\";s:10:\"2019-11-17\";s:10:\"date_start\";s:19:\"2019-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:17;a:6:{s:8:\"interval\";s:10:\"2019-11-18\";s:10:\"date_start\";s:19:\"2019-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:18;a:6:{s:8:\"interval\";s:10:\"2019-11-19\";s:10:\"date_start\";s:19:\"2019-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:19;a:6:{s:8:\"interval\";s:10:\"2019-11-20\";s:10:\"date_start\";s:19:\"2019-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:20;a:6:{s:8:\"interval\";s:10:\"2019-11-21\";s:10:\"date_start\";s:19:\"2019-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:21;a:6:{s:8:\"interval\";s:10:\"2019-11-22\";s:10:\"date_start\";s:19:\"2019-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:22;a:6:{s:8:\"interval\";s:10:\"2019-11-23\";s:10:\"date_start\";s:19:\"2019-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:23;a:6:{s:8:\"interval\";s:10:\"2019-11-24\";s:10:\"date_start\";s:19:\"2019-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:24;a:6:{s:8:\"interval\";s:10:\"2019-11-25\";s:10:\"date_start\";s:19:\"2019-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:25;a:6:{s:8:\"interval\";s:10:\"2019-11-26\";s:10:\"date_start\";s:19:\"2019-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:26;a:6:{s:8:\"interval\";s:10:\"2019-11-27\";s:10:\"date_start\";s:19:\"2019-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:27;a:6:{s:8:\"interval\";s:10:\"2019-11-28\";s:10:\"date_start\";s:19:\"2019-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:28;a:6:{s:8:\"interval\";s:10:\"2019-11-29\";s:10:\"date_start\";s:19:\"2019-11-29 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-28 22:00:00\";s:8:\"date_end\";s:19:\"2019-11-29 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2019-11-29 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}}s:5:\"total\";i:29;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1223, '_transient_timeout_wc_report_downloads_stats_0a1d42df6d4b94bc181a96e1a9680f95', '1575642101', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1224, '_transient_wc_report_downloads_stats_0a1d42df6d4b94bc181a96e1a9680f95', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}s:9:\"intervals\";a:29:{i:0;a:6:{s:8:\"interval\";s:10:\"2018-11-01\";s:10:\"date_start\";s:19:\"2018-11-01 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-10-31 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-01 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-01 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:1;a:6:{s:8:\"interval\";s:10:\"2018-11-02\";s:10:\"date_start\";s:19:\"2018-11-02 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-01 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-02 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-02 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:2;a:6:{s:8:\"interval\";s:10:\"2018-11-03\";s:10:\"date_start\";s:19:\"2018-11-03 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-02 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-03 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-03 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:3;a:6:{s:8:\"interval\";s:10:\"2018-11-04\";s:10:\"date_start\";s:19:\"2018-11-04 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-03 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-04 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-04 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:4;a:6:{s:8:\"interval\";s:10:\"2018-11-05\";s:10:\"date_start\";s:19:\"2018-11-05 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-04 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-05 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-05 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:5;a:6:{s:8:\"interval\";s:10:\"2018-11-06\";s:10:\"date_start\";s:19:\"2018-11-06 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-05 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-06 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-06 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:6;a:6:{s:8:\"interval\";s:10:\"2018-11-07\";s:10:\"date_start\";s:19:\"2018-11-07 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-06 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-07 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-07 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:7;a:6:{s:8:\"interval\";s:10:\"2018-11-08\";s:10:\"date_start\";s:19:\"2018-11-08 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-07 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-08 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-08 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:8;a:6:{s:8:\"interval\";s:10:\"2018-11-09\";s:10:\"date_start\";s:19:\"2018-11-09 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-08 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-09 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-09 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:9;a:6:{s:8:\"interval\";s:10:\"2018-11-10\";s:10:\"date_start\";s:19:\"2018-11-10 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-09 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-10 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-10 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:10;a:6:{s:8:\"interval\";s:10:\"2018-11-11\";s:10:\"date_start\";s:19:\"2018-11-11 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-10 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-11 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-11 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:11;a:6:{s:8:\"interval\";s:10:\"2018-11-12\";s:10:\"date_start\";s:19:\"2018-11-12 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-11 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-12 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-12 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:12;a:6:{s:8:\"interval\";s:10:\"2018-11-13\";s:10:\"date_start\";s:19:\"2018-11-13 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-12 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-13 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-13 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:13;a:6:{s:8:\"interval\";s:10:\"2018-11-14\";s:10:\"date_start\";s:19:\"2018-11-14 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-13 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-14 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-14 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:14;a:6:{s:8:\"interval\";s:10:\"2018-11-15\";s:10:\"date_start\";s:19:\"2018-11-15 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-14 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-15 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-15 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:15;a:6:{s:8:\"interval\";s:10:\"2018-11-16\";s:10:\"date_start\";s:19:\"2018-11-16 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-15 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-16 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-16 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:16;a:6:{s:8:\"interval\";s:10:\"2018-11-17\";s:10:\"date_start\";s:19:\"2018-11-17 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-16 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-17 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-17 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:17;a:6:{s:8:\"interval\";s:10:\"2018-11-18\";s:10:\"date_start\";s:19:\"2018-11-18 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-17 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-18 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-18 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:18;a:6:{s:8:\"interval\";s:10:\"2018-11-19\";s:10:\"date_start\";s:19:\"2018-11-19 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-18 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-19 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-19 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:19;a:6:{s:8:\"interval\";s:10:\"2018-11-20\";s:10:\"date_start\";s:19:\"2018-11-20 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-19 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-20 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-20 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:20;a:6:{s:8:\"interval\";s:10:\"2018-11-21\";s:10:\"date_start\";s:19:\"2018-11-21 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-20 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-21 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-21 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:21;a:6:{s:8:\"interval\";s:10:\"2018-11-22\";s:10:\"date_start\";s:19:\"2018-11-22 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-21 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-22 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-22 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:22;a:6:{s:8:\"interval\";s:10:\"2018-11-23\";s:10:\"date_start\";s:19:\"2018-11-23 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-22 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-23 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-23 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:23;a:6:{s:8:\"interval\";s:10:\"2018-11-24\";s:10:\"date_start\";s:19:\"2018-11-24 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-23 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-24 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-24 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:24;a:6:{s:8:\"interval\";s:10:\"2018-11-25\";s:10:\"date_start\";s:19:\"2018-11-25 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-24 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-25 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-25 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:25;a:6:{s:8:\"interval\";s:10:\"2018-11-26\";s:10:\"date_start\";s:19:\"2018-11-26 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-25 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-26 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-26 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:26;a:6:{s:8:\"interval\";s:10:\"2018-11-27\";s:10:\"date_start\";s:19:\"2018-11-27 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-26 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-27 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-27 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:27;a:6:{s:8:\"interval\";s:10:\"2018-11-28\";s:10:\"date_start\";s:19:\"2018-11-28 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-27 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-28 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-28 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}i:28;a:6:{s:8:\"interval\";s:10:\"2018-11-29\";s:10:\"date_start\";s:19:\"2018-11-29 00:00:00\";s:14:\"date_start_gmt\";s:19:\"2018-11-28 22:00:00\";s:8:\"date_end\";s:19:\"2018-11-29 23:59:59\";s:12:\"date_end_gmt\";s:19:\"2018-11-29 21:59:59\";s:9:\"subtotals\";O:8:\"stdClass\":1:{s:14:\"download_count\";i:0;}}}s:5:\"total\";i:29;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1228, '_transient_timeout_wc_report_orders_stats_5287eec9f0c55e65123a6295d119a4e5', '1575642273', 'no'),
(1229, '_transient_wc_report_orders_stats_5287eec9f0c55e65123a6295d119a4e5', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2019-48\";s:10:\"date_start\";s:19:\"2019-11-25 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 00:00:00\";s:8:\"date_end\";s:19:\"2019-11-29 16:24:00\";s:12:\"date_end_gmt\";s:19:\"2019-11-29 14:24:00\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1230, '_transient_timeout_wc_report_orders_stats_5f3873f3f279c8c63707ddd3ee0aa007', '1575642273', 'no'),
(1231, '_transient_wc_report_orders_stats_5f3873f3f279c8c63707ddd3ee0aa007', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2019-48\";s:10:\"date_start\";s:19:\"2019-11-25 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 00:00:00\";s:8:\"date_end\";s:19:\"2019-11-29 16:24:00\";s:12:\"date_end_gmt\";s:19:\"2019-11-29 14:24:00\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1234, '_transient_timeout_wc_order_1_needs_processing', '1575123908', 'no'),
(1235, '_transient_wc_order_1_needs_processing', '0', 'no'),
(1237, '_transient_timeout_woocommerce_test_remote_post', '1575041149', 'no'),
(1238, '_transient_woocommerce_test_remote_post', '200', 'no'),
(1239, '_transient_timeout_woocommerce_test_remote_get', '1575041150', 'no'),
(1240, '_transient_woocommerce_test_remote_get', '200', 'no'),
(1241, '_transient_timeout_woocommerce_system_status_wp_version_check', '1575123952', 'no'),
(1242, '_transient_woocommerce_system_status_wp_version_check', '5.3', 'no'),
(1349, '_transient_timeout_wc_product_children_56', '1577639465', 'no'),
(1350, '_transient_wc_product_children_56', 'a:2:{s:3:\"all\";a:0:{}s:7:\"visible\";a:0:{}}', 'no'),
(1419, '_transient_timeout_wc_report_orders_stats_4e174d18b231c962b6600271645c8618', '1575655661', 'no'),
(1420, '_transient_wc_report_orders_stats_4e174d18b231c962b6600271645c8618', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2019-48\";s:10:\"date_start\";s:19:\"2019-11-25 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 00:00:00\";s:8:\"date_end\";s:19:\"2019-11-29 20:07:00\";s:12:\"date_end_gmt\";s:19:\"2019-11-29 18:07:00\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1421, '_transient_timeout_wc_report_orders_stats_ae1e7fa1c2e38f9acbc4578d50ed387e', '1575655662', 'no'),
(1422, '_transient_wc_report_orders_stats_ae1e7fa1c2e38f9acbc4578d50ed387e', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2019-48\";s:10:\"date_start\";s:19:\"2019-11-25 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 00:00:00\";s:8:\"date_end\";s:19:\"2019-11-29 20:07:00\";s:12:\"date_end_gmt\";s:19:\"2019-11-29 18:07:00\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1424, '_transient_timeout_wc_report_orders_stats_4a32c15e67c62dae4a7fefd00248d896', '1575655702', 'no'),
(1425, '_transient_wc_report_orders_stats_4a32c15e67c62dae4a7fefd00248d896', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2019-48\";s:10:\"date_start\";s:19:\"2019-11-25 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 00:00:00\";s:8:\"date_end\";s:19:\"2019-11-29 20:08:00\";s:12:\"date_end_gmt\";s:19:\"2019-11-29 18:08:00\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:12:\"orders_count\";i:0;s:14:\"num_items_sold\";i:0;s:13:\"gross_revenue\";d:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:7:\"refunds\";d:0;s:5:\"taxes\";d:0;s:8:\"shipping\";d:0;s:11:\"net_revenue\";d:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1426, '_transient_timeout_wc_report_orders_stats_95d3926ec5e0703ab62cd8eaf98dc65e', '1575655702', 'no'),
(1427, '_transient_wc_report_orders_stats_95d3926ec5e0703ab62cd8eaf98dc65e', 'a:2:{s:7:\"version\";s:10:\"1574967432\";s:5:\"value\";O:8:\"stdClass\":5:{s:6:\"totals\";O:8:\"stdClass\":11:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"products\";i:0;s:8:\"segments\";a:0:{}}s:9:\"intervals\";a:1:{i:0;a:6:{s:8:\"interval\";s:7:\"2019-48\";s:10:\"date_start\";s:19:\"2019-11-25 02:00:00\";s:14:\"date_start_gmt\";s:19:\"2019-11-25 00:00:00\";s:8:\"date_end\";s:19:\"2019-11-29 20:08:00\";s:12:\"date_end_gmt\";s:19:\"2019-11-29 18:08:00\";s:9:\"subtotals\";O:8:\"stdClass\":10:{s:11:\"net_revenue\";d:0;s:15:\"avg_order_value\";d:0;s:12:\"orders_count\";i:0;s:19:\"avg_items_per_order\";d:0;s:14:\"num_items_sold\";i:0;s:7:\"coupons\";d:0;s:13:\"coupons_count\";i:0;s:23:\"num_returning_customers\";i:0;s:17:\"num_new_customers\";i:0;s:8:\"segments\";a:0:{}}}}s:5:\"total\";i:5;s:5:\"pages\";i:1;s:7:\"page_no\";i:1;}}', 'no'),
(1430, '_transient_timeout_wc_order_88_needs_processing', '1575137353', 'no'),
(1431, '_transient_wc_order_88_needs_processing', '0', 'no'),
(1433, '_transient_orders-transient-version', '1575050964', 'yes'),
(1577, '_transient_is_multi_author', '0', 'yes'),
(1579, '_transient_wc_count_comments', 'O:8:\"stdClass\":7:{s:14:\"total_comments\";i:0;s:3:\"all\";i:0;s:12:\"post-trashed\";s:1:\"1\";s:9:\"moderated\";i:0;s:8:\"approved\";i:0;s:4:\"spam\";i:0;s:5:\"trash\";i:0;}', 'yes'),
(1580, '_transient_as_comment_count', 'O:8:\"stdClass\":7:{s:12:\"post-trashed\";s:1:\"1\";s:14:\"total_comments\";i:0;s:3:\"all\";i:0;s:9:\"moderated\";i:0;s:8:\"approved\";i:0;s:4:\"spam\";i:0;s:5:\"trash\";i:0;}', 'yes'),
(1581, '_transient_timeout_wc_product_children_53', '1577653423', 'no'),
(1582, '_transient_wc_product_children_53', 'a:2:{s:3:\"all\";a:0:{}s:7:\"visible\";a:0:{}}', 'no'),
(1583, '_transient_timeout_wc_product_children_99', '1577653423', 'no'),
(1584, '_transient_wc_product_children_99', 'a:2:{s:3:\"all\";a:0:{}s:7:\"visible\";a:0:{}}', 'no'),
(1585, '_transient_timeout_wc_product_children_95', '1577653423', 'no'),
(1586, '_transient_wc_product_children_95', 'a:2:{s:3:\"all\";a:0:{}s:7:\"visible\";a:0:{}}', 'no'),
(1595, '_transient_timeout_wc_product_children_37', '1577654084', 'no'),
(1596, '_transient_wc_product_children_37', 'a:2:{s:3:\"all\";a:0:{}s:7:\"visible\";a:0:{}}', 'no'),
(1597, '_transient_timeout_wc_product_children_98', '1577654084', 'no'),
(1598, '_transient_wc_product_children_98', 'a:2:{s:3:\"all\";a:0:{}s:7:\"visible\";a:0:{}}', 'no'),
(1599, '_transient_timeout_wc_product_children_101', '1577654084', 'no'),
(1600, '_transient_wc_product_children_101', 'a:2:{s:3:\"all\";a:0:{}s:7:\"visible\";a:0:{}}', 'no'),
(1610, '_transient_timeout_wc_admin_unsnooze_admin_notes_checked', '1575066315', 'no'),
(1611, '_transient_wc_admin_unsnooze_admin_notes_checked', 'yes', 'no');

-- --------------------------------------------------------

--
-- Структура таблиці `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(9, 6, '_wp_attached_file', 'woocommerce-placeholder.png'),
(10, 6, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1200;s:6:\"height\";i:1200;s:4:\"file\";s:27:\"woocommerce-placeholder.png\";s:5:\"sizes\";a:5:{s:6:\"medium\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:5:\"large\";a:4:{s:4:\"file\";s:37:\"woocommerce-placeholder-1024x1024.png\";s:5:\"width\";i:1024;s:6:\"height\";i:1024;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-768x768.png\";s:5:\"width\";i:768;s:6:\"height\";i:768;s:9:\"mime-type\";s:9:\"image/png\";}s:32:\"twentyseventeen-thumbnail-avatar\";a:4:{s:4:\"file\";s:35:\"woocommerce-placeholder-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(11, 7, '_edit_lock', '1575033133:1'),
(12, 2, '_edit_lock', '1574963793:1'),
(13, 10, '_edit_lock', '1574963843:1'),
(14, 2, '_wp_trash_meta_status', 'publish'),
(15, 2, '_wp_trash_meta_time', '1574964020'),
(16, 2, '_wp_desired_post_slug', 'sample-page'),
(17, 13, '_edit_lock', '1575027390:1'),
(18, 15, '_edit_lock', '1575063925:1'),
(19, 17, '_edit_lock', '1574967164:1'),
(20, 19, '_stock_status', 'instock'),
(21, 19, 'total_sales', '0'),
(22, 19, '_downloadable', 'no'),
(23, 19, '_virtual', 'yes'),
(24, 19, '_regular_price', ''),
(25, 19, '_sale_price', ''),
(26, 19, '_purchase_note', ''),
(27, 19, '_featured', 'no'),
(28, 19, '_weight', ''),
(29, 19, '_length', ''),
(30, 19, '_width', ''),
(31, 19, '_height', ''),
(32, 19, '_sku', ''),
(33, 19, '_product_attributes', 'a:0:{}'),
(34, 19, '_sale_price_dates_from', ''),
(35, 19, '_sale_price_dates_to', ''),
(36, 19, '_price', ''),
(37, 19, '_sold_individually', 'yes'),
(38, 19, '_manage_stock', 'no'),
(39, 19, '_backorders', 'no'),
(40, 19, '_stock', ''),
(41, 19, '_tax_status', 'taxable'),
(42, 19, '_tax_class', ''),
(43, 19, '_download_limit', '-1'),
(44, 19, '_download_expiry', '-1'),
(45, 19, '_wc_average_rating', '0'),
(46, 19, '_wc_review_count', '0'),
(47, 19, '_product_version', '3.8.1'),
(48, 20, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1574964875;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(49, 21, '_action_manager_schedule', 'O:30:\"ActionScheduler_SimpleSchedule\":1:{s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1574964906;}'),
(50, 22, '_action_manager_schedule', 'O:30:\"ActionScheduler_SimpleSchedule\":1:{s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1574964907;}'),
(51, 23, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1574968539;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(52, 24, '_menu_item_type', 'post_type'),
(53, 24, '_menu_item_menu_item_parent', '0'),
(54, 24, '_menu_item_object_id', '13'),
(55, 24, '_menu_item_object', 'page'),
(56, 24, '_menu_item_target', ''),
(57, 24, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(58, 24, '_menu_item_xfn', ''),
(59, 24, '_menu_item_url', ''),
(61, 25, '_menu_item_type', 'post_type'),
(62, 25, '_menu_item_menu_item_parent', '0'),
(63, 25, '_menu_item_object_id', '15'),
(64, 25, '_menu_item_object', 'page'),
(65, 25, '_menu_item_target', ''),
(66, 25, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(67, 25, '_menu_item_xfn', ''),
(68, 25, '_menu_item_url', ''),
(70, 26, '_menu_item_type', 'post_type'),
(71, 26, '_menu_item_menu_item_parent', '0'),
(72, 26, '_menu_item_object_id', '10'),
(73, 26, '_menu_item_object', 'page'),
(74, 26, '_menu_item_target', ''),
(75, 26, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(76, 26, '_menu_item_xfn', ''),
(77, 26, '_menu_item_url', ''),
(79, 27, '_edit_lock', '1574967222:1'),
(80, 29, '_edit_lock', '1574967281:1'),
(81, 31, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1574972229;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(82, 32, '_edit_lock', '1574974372:1'),
(83, 35, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1574975862;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(84, 34, '_edit_last', '1'),
(85, 34, '_edit_lock', '1575051806:1'),
(88, 34, 'people_count', '12-15'),
(90, 34, '_regular_price', '9250'),
(91, 34, '_sale_price', '6290'),
(92, 34, 'total_sales', '0'),
(93, 34, '_tax_status', 'taxable'),
(94, 34, '_tax_class', ''),
(95, 34, '_manage_stock', 'no'),
(96, 34, '_backorders', 'no'),
(97, 34, '_sold_individually', 'no'),
(98, 34, '_virtual', 'no'),
(99, 34, '_downloadable', 'no'),
(100, 34, '_download_limit', '-1'),
(101, 34, '_download_expiry', '-1'),
(102, 34, '_stock', NULL),
(103, 34, '_stock_status', 'instock'),
(104, 34, '_wc_average_rating', '0'),
(105, 34, '_wc_review_count', '0'),
(106, 34, '_product_version', '3.8.1'),
(107, 34, '_price', '6290'),
(108, 37, '_edit_last', '1'),
(109, 37, '_edit_lock', '1575051806:1'),
(112, 37, 'people_count', '4-8'),
(114, 37, '_regular_price', '8290'),
(115, 37, '_sale_price', '6290'),
(116, 37, 'total_sales', '0'),
(117, 37, '_tax_status', 'taxable'),
(118, 37, '_tax_class', ''),
(119, 37, '_manage_stock', 'no'),
(120, 37, '_backorders', 'no'),
(121, 37, '_sold_individually', 'no'),
(122, 37, '_virtual', 'no'),
(123, 37, '_downloadable', 'no'),
(124, 37, '_download_limit', '-1'),
(125, 37, '_download_expiry', '-1'),
(126, 37, '_stock', NULL),
(127, 37, '_stock_status', 'instock'),
(128, 37, '_wc_average_rating', '0'),
(129, 37, '_wc_review_count', '0'),
(130, 37, '_product_version', '3.8.1'),
(131, 37, '_price', '6290'),
(132, 39, '_edit_last', '1'),
(133, 39, '_edit_lock', '1575051803:1'),
(136, 39, 'people_count', '3-5'),
(138, 39, '_regular_price', '8290'),
(139, 39, '_sale_price', '6290'),
(140, 39, 'total_sales', '0'),
(141, 39, '_tax_status', 'taxable'),
(142, 39, '_tax_class', ''),
(143, 39, '_manage_stock', 'no'),
(144, 39, '_backorders', 'no'),
(145, 39, '_sold_individually', 'no'),
(146, 39, '_virtual', 'no'),
(147, 39, '_downloadable', 'no'),
(148, 39, '_download_limit', '-1'),
(149, 39, '_download_expiry', '-1'),
(150, 39, '_stock', NULL),
(151, 39, '_stock_status', 'instock'),
(152, 39, '_wc_average_rating', '0'),
(153, 39, '_wc_review_count', '0'),
(154, 39, '_product_version', '3.8.1'),
(155, 39, '_price', '6290'),
(156, 41, '_wp_attached_file', '2019/11/hit1.fw_.png'),
(157, 41, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:361;s:6:\"height\";i:241;s:4:\"file\";s:20:\"2019/11/hit1.fw_.png\";s:5:\"sizes\";a:7:{s:6:\"medium\";a:4:{s:4:\"file\";s:20:\"hit1.fw_-300x200.png\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:20:\"hit1.fw_-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:32:\"twentyseventeen-thumbnail-avatar\";a:4:{s:4:\"file\";s:20:\"hit1.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:20:\"hit1.fw_-300x241.png\";s:5:\"width\";i:300;s:6:\"height\";i:241;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:20:\"hit1.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:20:\"hit1.fw_-300x241.png\";s:5:\"width\";i:300;s:6:\"height\";i:241;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:20:\"hit1.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(158, 42, '_wp_attached_file', '2019/11/hit2.fw_.png'),
(159, 42, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:361;s:6:\"height\";i:241;s:4:\"file\";s:20:\"2019/11/hit2.fw_.png\";s:5:\"sizes\";a:7:{s:6:\"medium\";a:4:{s:4:\"file\";s:20:\"hit2.fw_-300x200.png\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:20:\"hit2.fw_-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:32:\"twentyseventeen-thumbnail-avatar\";a:4:{s:4:\"file\";s:20:\"hit2.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:20:\"hit2.fw_-300x241.png\";s:5:\"width\";i:300;s:6:\"height\";i:241;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:20:\"hit2.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:20:\"hit2.fw_-300x241.png\";s:5:\"width\";i:300;s:6:\"height\";i:241;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:20:\"hit2.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(160, 43, '_wp_attached_file', '2019/11/hit3.fw_.png'),
(161, 43, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:362;s:6:\"height\";i:241;s:4:\"file\";s:20:\"2019/11/hit3.fw_.png\";s:5:\"sizes\";a:7:{s:6:\"medium\";a:4:{s:4:\"file\";s:20:\"hit3.fw_-300x200.png\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:20:\"hit3.fw_-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:32:\"twentyseventeen-thumbnail-avatar\";a:4:{s:4:\"file\";s:20:\"hit3.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:20:\"hit3.fw_-300x241.png\";s:5:\"width\";i:300;s:6:\"height\";i:241;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:20:\"hit3.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:20:\"hit3.fw_-300x241.png\";s:5:\"width\";i:300;s:6:\"height\";i:241;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:20:\"hit3.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(162, 44, '_wp_attached_file', '2019/11/hit4.fw_.png'),
(163, 44, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:361;s:6:\"height\";i:241;s:4:\"file\";s:20:\"2019/11/hit4.fw_.png\";s:5:\"sizes\";a:7:{s:6:\"medium\";a:4:{s:4:\"file\";s:20:\"hit4.fw_-300x200.png\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:20:\"hit4.fw_-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:32:\"twentyseventeen-thumbnail-avatar\";a:4:{s:4:\"file\";s:20:\"hit4.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:20:\"hit4.fw_-300x241.png\";s:5:\"width\";i:300;s:6:\"height\";i:241;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:20:\"hit4.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:20:\"hit4.fw_-300x241.png\";s:5:\"width\";i:300;s:6:\"height\";i:241;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:20:\"hit4.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(164, 45, '_wp_attached_file', '2019/11/hit5.fw_.png'),
(165, 45, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:361;s:6:\"height\";i:241;s:4:\"file\";s:20:\"2019/11/hit5.fw_.png\";s:5:\"sizes\";a:7:{s:6:\"medium\";a:4:{s:4:\"file\";s:20:\"hit5.fw_-300x200.png\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:20:\"hit5.fw_-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:32:\"twentyseventeen-thumbnail-avatar\";a:4:{s:4:\"file\";s:20:\"hit5.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:20:\"hit5.fw_-300x241.png\";s:5:\"width\";i:300;s:6:\"height\";i:241;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:20:\"hit5.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:20:\"hit5.fw_-300x241.png\";s:5:\"width\";i:300;s:6:\"height\";i:241;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:20:\"hit5.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(166, 46, '_wp_attached_file', '2019/11/hit6.fw_.png'),
(167, 46, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:361;s:6:\"height\";i:241;s:4:\"file\";s:20:\"2019/11/hit6.fw_.png\";s:5:\"sizes\";a:7:{s:6:\"medium\";a:4:{s:4:\"file\";s:20:\"hit6.fw_-300x200.png\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:20:\"hit6.fw_-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:32:\"twentyseventeen-thumbnail-avatar\";a:4:{s:4:\"file\";s:20:\"hit6.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:20:\"hit6.fw_-300x241.png\";s:5:\"width\";i:300;s:6:\"height\";i:241;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:20:\"hit6.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:20:\"hit6.fw_-300x241.png\";s:5:\"width\";i:300;s:6:\"height\";i:241;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:20:\"hit6.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(168, 47, '_edit_last', '1'),
(169, 47, '_edit_lock', '1575051803:1'),
(170, 47, 'people_count', '6-8'),
(171, 47, '_thumbnail_id', '44'),
(172, 47, '_wp_old_date', '2019-11-28'),
(173, 47, '_regular_price', '9290'),
(174, 47, '_sale_price', '6290'),
(175, 47, 'total_sales', '0'),
(176, 47, '_tax_status', 'taxable'),
(177, 47, '_tax_class', ''),
(178, 47, '_manage_stock', 'no'),
(179, 47, '_backorders', 'no'),
(180, 47, '_sold_individually', 'no'),
(181, 47, '_virtual', 'no'),
(182, 47, '_downloadable', 'no'),
(183, 47, '_download_limit', '-1'),
(184, 47, '_download_expiry', '-1'),
(185, 47, '_stock', NULL),
(186, 47, '_stock_status', 'instock'),
(187, 47, '_wc_average_rating', '0'),
(188, 47, '_wc_review_count', '0'),
(189, 47, '_product_version', '3.8.1'),
(190, 47, '_price', '6290'),
(191, 48, '_edit_last', '1'),
(192, 48, '_edit_lock', '1574975999:1'),
(193, 48, 'people_count', '10-12'),
(194, 48, '_thumbnail_id', '46'),
(195, 48, '_regular_price', '9290'),
(196, 48, '_sale_price', '6290'),
(197, 48, 'total_sales', '0'),
(198, 48, '_tax_status', 'taxable'),
(199, 48, '_tax_class', ''),
(200, 48, '_manage_stock', 'no'),
(201, 48, '_backorders', 'no'),
(202, 48, '_sold_individually', 'no'),
(203, 48, '_virtual', 'no'),
(204, 48, '_downloadable', 'no'),
(205, 48, '_download_limit', '-1'),
(206, 48, '_download_expiry', '-1'),
(207, 48, '_stock', NULL),
(208, 48, '_stock_status', 'instock'),
(209, 48, '_wc_average_rating', '0'),
(210, 48, '_wc_review_count', '0'),
(211, 48, '_product_version', '3.8.1'),
(212, 48, '_price', '6290'),
(213, 51, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1574979501;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(214, 52, '_regular_price', '9250'),
(215, 52, '_sale_price', '6290'),
(216, 52, 'total_sales', '0'),
(217, 52, '_tax_status', 'taxable'),
(218, 52, '_tax_class', ''),
(219, 52, '_manage_stock', 'no'),
(220, 52, '_backorders', 'no'),
(221, 52, '_sold_individually', 'no'),
(222, 52, '_virtual', 'no'),
(223, 52, '_downloadable', 'no'),
(224, 52, '_download_limit', '-1'),
(225, 52, '_download_expiry', '-1'),
(227, 52, '_stock', NULL),
(228, 52, '_stock_status', 'instock'),
(229, 52, '_wc_average_rating', '0'),
(230, 52, '_wc_review_count', '0'),
(231, 52, '_product_version', '3.8.1'),
(232, 52, '_price', '6290'),
(233, 52, 'people_count', '12-15'),
(234, 52, '_edit_lock', '1575050720:1'),
(235, 52, '_edit_last', '1'),
(236, 53, '_regular_price', '8290'),
(237, 53, '_sale_price', '6290'),
(238, 53, 'total_sales', '0'),
(239, 53, '_tax_status', 'taxable'),
(240, 53, '_tax_class', ''),
(241, 53, '_manage_stock', 'no'),
(242, 53, '_backorders', 'no'),
(243, 53, '_sold_individually', 'no'),
(244, 53, '_virtual', 'no'),
(245, 53, '_downloadable', 'no'),
(246, 53, '_download_limit', '-1'),
(247, 53, '_download_expiry', '-1'),
(249, 53, '_stock', NULL),
(250, 53, '_stock_status', 'instock'),
(251, 53, '_wc_average_rating', '0'),
(252, 53, '_wc_review_count', '0'),
(253, 53, '_product_version', '3.8.1'),
(254, 53, '_price', '6290'),
(255, 53, 'people_count', '4-8'),
(256, 53, '_edit_lock', '1575050712:1'),
(257, 53, '_edit_last', '1'),
(258, 54, '_regular_price', '9290'),
(259, 54, '_sale_price', '6290'),
(260, 54, 'total_sales', '0'),
(261, 54, '_tax_status', 'taxable'),
(262, 54, '_tax_class', ''),
(263, 54, '_manage_stock', 'no'),
(264, 54, '_backorders', 'no'),
(265, 54, '_sold_individually', 'no'),
(266, 54, '_virtual', 'no'),
(267, 54, '_downloadable', 'no'),
(268, 54, '_download_limit', '-1'),
(269, 54, '_download_expiry', '-1'),
(270, 54, '_thumbnail_id', '46'),
(271, 54, '_stock', NULL),
(272, 54, '_stock_status', 'instock'),
(273, 54, '_wc_average_rating', '0'),
(274, 54, '_wc_review_count', '0'),
(275, 54, '_product_version', '3.8.1'),
(276, 54, '_price', '6290'),
(277, 54, 'people_count', '10-12'),
(278, 54, '_edit_lock', '1574976104:1'),
(279, 54, '_edit_last', '1'),
(280, 55, '_regular_price', '9290'),
(281, 55, '_sale_price', '6290'),
(282, 55, 'total_sales', '0'),
(283, 55, '_tax_status', 'taxable'),
(284, 55, '_tax_class', ''),
(285, 55, '_manage_stock', 'no'),
(286, 55, '_backorders', 'no'),
(287, 55, '_sold_individually', 'no'),
(288, 55, '_virtual', 'no'),
(289, 55, '_downloadable', 'no'),
(290, 55, '_download_limit', '-1'),
(291, 55, '_download_expiry', '-1'),
(292, 55, '_thumbnail_id', '44'),
(293, 55, '_stock', NULL),
(294, 55, '_stock_status', 'instock'),
(295, 55, '_wc_average_rating', '0'),
(296, 55, '_wc_review_count', '0'),
(297, 55, '_product_version', '3.8.1'),
(298, 55, '_price', '6290'),
(299, 55, 'people_count', '6-8'),
(300, 55, '_wp_old_date', '2019-11-28'),
(301, 55, '_edit_lock', '1574977989:1'),
(302, 56, '_regular_price', '8290'),
(303, 56, '_sale_price', '6290'),
(304, 56, 'total_sales', '0'),
(305, 56, '_tax_status', 'taxable'),
(306, 56, '_tax_class', ''),
(307, 56, '_manage_stock', 'no'),
(308, 56, '_backorders', 'no'),
(309, 56, '_sold_individually', 'no'),
(310, 56, '_virtual', 'no'),
(311, 56, '_downloadable', 'no'),
(312, 56, '_download_limit', '-1'),
(313, 56, '_download_expiry', '-1'),
(315, 56, '_stock', NULL),
(316, 56, '_stock_status', 'instock'),
(317, 56, '_wc_average_rating', '0'),
(318, 56, '_wc_review_count', '0'),
(319, 56, '_product_version', '3.8.1'),
(320, 56, '_price', '6290'),
(321, 56, 'people_count', '3-5'),
(322, 56, '_edit_lock', '1575047185:1'),
(323, 55, '_edit_last', '1'),
(324, 56, '_edit_last', '1'),
(325, 57, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575013823;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(326, 58, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575017503;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(327, 59, '_edit_lock', '1575026863:1'),
(328, 60, '_edit_lock', '1575027008:1'),
(329, 61, '_edit_lock', '1575026862:1'),
(330, 62, '_edit_lock', '1575026863:1'),
(335, 68, '_wp_attached_file', '2019/11/f1.fw_.png'),
(336, 68, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:458;s:6:\"height\";i:448;s:4:\"file\";s:18:\"2019/11/f1.fw_.png\";s:5:\"sizes\";a:7:{s:6:\"medium\";a:4:{s:4:\"file\";s:18:\"f1.fw_-300x293.png\";s:5:\"width\";i:300;s:6:\"height\";i:293;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:18:\"f1.fw_-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:32:\"twentyseventeen-thumbnail-avatar\";a:4:{s:4:\"file\";s:18:\"f1.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:18:\"f1.fw_-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:18:\"f1.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:18:\"f1.fw_-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:18:\"f1.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(337, 69, '_wp_attached_file', '2019/11/f2.fw_.png'),
(338, 69, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:264;s:6:\"height\";i:315;s:4:\"file\";s:18:\"2019/11/f2.fw_.png\";s:5:\"sizes\";a:7:{s:6:\"medium\";a:4:{s:4:\"file\";s:18:\"f2.fw_-251x300.png\";s:5:\"width\";i:251;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:18:\"f2.fw_-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:32:\"twentyseventeen-thumbnail-avatar\";a:4:{s:4:\"file\";s:18:\"f2.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:18:\"f2.fw_-264x300.png\";s:5:\"width\";i:264;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:18:\"f2.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:18:\"f2.fw_-264x300.png\";s:5:\"width\";i:264;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:18:\"f2.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(339, 70, '_wp_attached_file', '2019/11/f3.fw_.png'),
(340, 70, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:264;s:6:\"height\";i:315;s:4:\"file\";s:18:\"2019/11/f3.fw_.png\";s:5:\"sizes\";a:7:{s:6:\"medium\";a:4:{s:4:\"file\";s:18:\"f3.fw_-251x300.png\";s:5:\"width\";i:251;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:9:\"thumbnail\";a:4:{s:4:\"file\";s:18:\"f3.fw_-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:32:\"twentyseventeen-thumbnail-avatar\";a:4:{s:4:\"file\";s:18:\"f3.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:21:\"woocommerce_thumbnail\";a:5:{s:4:\"file\";s:18:\"f3.fw_-264x300.png\";s:5:\"width\";i:264;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:9:\"uncropped\";b:0;}s:29:\"woocommerce_gallery_thumbnail\";a:4:{s:4:\"file\";s:18:\"f3.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"shop_catalog\";a:4:{s:4:\"file\";s:18:\"f3.fw_-264x300.png\";s:5:\"width\";i:264;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"shop_thumbnail\";a:4:{s:4:\"file\";s:18:\"f3.fw_-100x100.png\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(342, 59, '_thumbnail_id', '68'),
(344, 60, '_thumbnail_id', '69'),
(345, 60, '_edit_last', '1'),
(348, 62, '_thumbnail_id', '70'),
(349, 62, '_edit_last', '1'),
(352, 61, '_thumbnail_id', '68'),
(353, 61, '_edit_last', '1'),
(359, 1, '_wp_old_slug', '%d0%bf%d1%80%d0%b8%d0%b2%d0%b5%d1%82-%d0%bc%d0%b8%d1%80'),
(363, 59, '_edit_last', '1'),
(368, 1, '_wp_trash_meta_status', 'publish'),
(369, 1, '_wp_trash_meta_time', '1575017359'),
(370, 1, '_wp_desired_post_slug', 'privet-mir'),
(371, 1, '_wp_trash_meta_comments_status', 'a:1:{i:1;s:1:\"1\";}'),
(372, 72, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575021167;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(382, 73, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575024791;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(383, 13, '_edit_last', '1'),
(384, 75, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575028499;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(385, 7, '_wp_page_template', 'home.php'),
(386, 7, '_edit_last', '1'),
(387, 78, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575032104;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(388, 79, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575035735;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(389, 15, '_edit_last', '1'),
(390, 82, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575039429;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(391, 84, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575043032;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(392, 85, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575046638;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(393, 86, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575050243;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(395, 56, '_thumbnail_id', '41'),
(396, 53, '_thumbnail_id', '42'),
(397, 52, '_thumbnail_id', '43'),
(398, 39, '_thumbnail_id', '44'),
(399, 37, '_thumbnail_id', '46'),
(400, 34, '_thumbnail_id', '41'),
(401, 87, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575053849;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(402, 89, '_action_manager_schedule', 'O:30:\"ActionScheduler_SimpleSchedule\":1:{s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1575050958;}'),
(403, 89, '_wp_old_slug', 'wc-admin_import_order'),
(404, 88, '_edit_last', '1'),
(405, 88, '_customer_user', '0'),
(406, 88, '_order_currency', 'RUB'),
(407, 88, '_order_shipping_tax', '0'),
(408, 88, '_order_tax', '0'),
(409, 88, '_order_total', '0'),
(410, 88, '_order_version', '3.8.1'),
(411, 88, '_prices_include_tax', 'no'),
(412, 88, '_billing_address_index', '          '),
(413, 88, '_shipping_address_index', '        '),
(414, 88, '_cart_discount', '0'),
(415, 88, '_cart_discount_tax', '0'),
(416, 88, '_order_shipping', '0'),
(417, 88, '_order_key', 'wc_order_jpLQgS9FNESSa'),
(418, 88, '_created_via', 'admin'),
(419, 90, '_action_manager_schedule', 'O:30:\"ActionScheduler_SimpleSchedule\":1:{s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1575050969;}'),
(420, 88, '_edit_lock', '1575050852:1'),
(421, 90, '_wp_old_slug', 'wc-admin_import_order'),
(422, 91, '_regular_price', '8290'),
(423, 91, '_sale_price', '6290'),
(424, 91, 'total_sales', '0'),
(425, 91, '_tax_status', 'taxable'),
(426, 91, '_tax_class', ''),
(427, 91, '_manage_stock', 'no'),
(428, 91, '_backorders', 'no'),
(429, 91, '_sold_individually', 'no'),
(430, 91, '_virtual', 'no'),
(431, 91, '_downloadable', 'no'),
(432, 91, '_download_limit', '-1'),
(433, 91, '_download_expiry', '-1'),
(434, 91, '_thumbnail_id', '41'),
(435, 91, '_stock', NULL),
(436, 91, '_stock_status', 'instock'),
(437, 91, '_wc_average_rating', '0'),
(438, 91, '_wc_review_count', '0'),
(439, 91, '_product_version', '3.8.1'),
(440, 91, '_price', '6290'),
(441, 91, 'people_count', '3-5'),
(442, 91, '_edit_lock', '1575051832:1'),
(443, 91, '_edit_last', '1'),
(444, 92, '_regular_price', '9290'),
(445, 92, '_sale_price', '6290'),
(446, 92, 'total_sales', '0'),
(447, 92, '_tax_status', 'taxable'),
(448, 92, '_tax_class', ''),
(449, 92, '_manage_stock', 'no'),
(450, 92, '_backorders', 'no'),
(451, 92, '_sold_individually', 'no'),
(452, 92, '_virtual', 'no'),
(453, 92, '_downloadable', 'no'),
(454, 92, '_download_limit', '-1'),
(455, 92, '_download_expiry', '-1'),
(456, 92, '_thumbnail_id', '44'),
(457, 92, '_stock', NULL),
(458, 92, '_stock_status', 'instock'),
(459, 92, '_wc_average_rating', '0'),
(460, 92, '_wc_review_count', '0'),
(461, 92, '_product_version', '3.8.1'),
(462, 92, '_price', '6290'),
(463, 92, 'people_count', '6-8'),
(464, 92, '_wp_old_date', '2019-11-28'),
(465, 92, '_edit_lock', '1575051871:1'),
(466, 93, '_regular_price', '9290'),
(467, 93, '_sale_price', '6290'),
(468, 93, 'total_sales', '0'),
(469, 93, '_tax_status', 'taxable'),
(470, 93, '_tax_class', ''),
(471, 93, '_manage_stock', 'no'),
(472, 93, '_backorders', 'no'),
(473, 93, '_sold_individually', 'no'),
(474, 93, '_virtual', 'no'),
(475, 93, '_downloadable', 'no'),
(476, 93, '_download_limit', '-1'),
(477, 93, '_download_expiry', '-1'),
(478, 93, '_thumbnail_id', '46'),
(479, 93, '_stock', NULL),
(480, 93, '_stock_status', 'instock'),
(481, 93, '_wc_average_rating', '0'),
(482, 93, '_wc_review_count', '0'),
(483, 93, '_product_version', '3.8.1'),
(484, 93, '_price', '6290'),
(485, 93, 'people_count', '10-12'),
(486, 93, '_edit_lock', '1575051876:1'),
(487, 94, '_regular_price', '8290'),
(488, 94, '_sale_price', '6290'),
(489, 94, 'total_sales', '0'),
(490, 94, '_tax_status', 'taxable'),
(491, 94, '_tax_class', ''),
(492, 94, '_manage_stock', 'no'),
(493, 94, '_backorders', 'no'),
(494, 94, '_sold_individually', 'no'),
(495, 94, '_virtual', 'no'),
(496, 94, '_downloadable', 'no'),
(497, 94, '_download_limit', '-1'),
(498, 94, '_download_expiry', '-1'),
(499, 94, '_thumbnail_id', '42'),
(500, 94, '_stock', NULL),
(501, 94, '_stock_status', 'instock'),
(502, 94, '_wc_average_rating', '0'),
(503, 94, '_wc_review_count', '0'),
(504, 94, '_product_version', '3.8.1'),
(505, 94, '_price', '6290'),
(506, 94, 'people_count', '4-8'),
(507, 94, '_edit_lock', '1575051846:1'),
(508, 95, '_regular_price', '9250'),
(509, 95, '_sale_price', '6290'),
(510, 95, 'total_sales', '0'),
(511, 95, '_tax_status', 'taxable'),
(512, 95, '_tax_class', ''),
(513, 95, '_manage_stock', 'no'),
(514, 95, '_backorders', 'no'),
(515, 95, '_sold_individually', 'no'),
(516, 95, '_virtual', 'no'),
(517, 95, '_downloadable', 'no'),
(518, 95, '_download_limit', '-1'),
(519, 95, '_download_expiry', '-1'),
(520, 95, '_thumbnail_id', '43'),
(521, 95, '_stock', NULL),
(522, 95, '_stock_status', 'instock'),
(523, 95, '_wc_average_rating', '0'),
(524, 95, '_wc_review_count', '0'),
(525, 95, '_product_version', '3.8.1'),
(526, 95, '_price', '6290'),
(527, 95, 'people_count', '12-15'),
(528, 95, '_edit_lock', '1575051847:1'),
(529, 96, '_regular_price', '9290'),
(530, 96, '_sale_price', '6290'),
(531, 96, 'total_sales', '0'),
(532, 96, '_tax_status', 'taxable'),
(533, 96, '_tax_class', ''),
(534, 96, '_manage_stock', 'no'),
(535, 96, '_backorders', 'no'),
(536, 96, '_sold_individually', 'no'),
(537, 96, '_virtual', 'no'),
(538, 96, '_downloadable', 'no'),
(539, 96, '_download_limit', '-1'),
(540, 96, '_download_expiry', '-1'),
(541, 96, '_thumbnail_id', '46'),
(542, 96, '_stock', NULL),
(543, 96, '_stock_status', 'instock'),
(544, 96, '_wc_average_rating', '0'),
(545, 96, '_wc_review_count', '0'),
(546, 96, '_product_version', '3.8.1'),
(547, 96, '_price', '6290'),
(548, 96, 'people_count', '10-12'),
(549, 96, '_edit_lock', '1575051851:1'),
(550, 92, '_edit_last', '1'),
(551, 93, '_edit_last', '1'),
(552, 94, '_edit_last', '1'),
(553, 95, '_edit_last', '1'),
(554, 96, '_edit_last', '1'),
(555, 98, '_regular_price', '9250'),
(556, 98, '_sale_price', '6290'),
(557, 98, 'total_sales', '0'),
(558, 98, '_tax_status', 'taxable'),
(559, 98, '_tax_class', ''),
(560, 98, '_manage_stock', 'no'),
(561, 98, '_backorders', 'no'),
(562, 98, '_sold_individually', 'no'),
(563, 98, '_virtual', 'no'),
(564, 98, '_downloadable', 'no'),
(565, 98, '_download_limit', '-1'),
(566, 98, '_download_expiry', '-1'),
(567, 98, '_thumbnail_id', '41'),
(568, 98, '_stock', NULL),
(569, 98, '_stock_status', 'instock'),
(570, 98, '_wc_average_rating', '0'),
(571, 98, '_wc_review_count', '0'),
(572, 98, '_product_version', '3.8.1'),
(573, 98, '_price', '6290'),
(574, 98, 'people_count', '12-15'),
(575, 98, '_edit_lock', '1575060933:1'),
(576, 99, '_regular_price', '8290'),
(577, 99, '_sale_price', '6290'),
(578, 99, 'total_sales', '0'),
(579, 99, '_tax_status', 'taxable'),
(580, 99, '_tax_class', ''),
(581, 99, '_manage_stock', 'no'),
(582, 99, '_backorders', 'no'),
(583, 99, '_sold_individually', 'no'),
(584, 99, '_virtual', 'no'),
(585, 99, '_downloadable', 'no'),
(586, 99, '_download_limit', '-1'),
(587, 99, '_download_expiry', '-1'),
(588, 99, '_thumbnail_id', '46'),
(589, 99, '_stock', NULL),
(590, 99, '_stock_status', 'instock'),
(591, 99, '_wc_average_rating', '0'),
(592, 99, '_wc_review_count', '0'),
(593, 99, '_product_version', '3.8.1'),
(594, 99, '_price', '6290'),
(595, 99, 'people_count', '4-8'),
(596, 99, '_edit_lock', '1575060934:1'),
(597, 100, '_regular_price', '8290'),
(598, 100, '_sale_price', '6290'),
(599, 100, 'total_sales', '0'),
(600, 100, '_tax_status', 'taxable'),
(601, 100, '_tax_class', ''),
(602, 100, '_manage_stock', 'no'),
(603, 100, '_backorders', 'no'),
(604, 100, '_sold_individually', 'no'),
(605, 100, '_virtual', 'no'),
(606, 100, '_downloadable', 'no'),
(607, 100, '_download_limit', '-1'),
(608, 100, '_download_expiry', '-1'),
(609, 100, '_thumbnail_id', '44'),
(610, 100, '_stock', NULL),
(611, 100, '_stock_status', 'instock'),
(612, 100, '_wc_average_rating', '0'),
(613, 100, '_wc_review_count', '0'),
(614, 100, '_product_version', '3.8.1'),
(615, 100, '_price', '6290'),
(616, 100, 'people_count', '3-5'),
(617, 100, '_edit_lock', '1575060937:1'),
(618, 101, '_regular_price', '9290'),
(619, 101, '_sale_price', '6290'),
(620, 101, 'total_sales', '0'),
(621, 101, '_tax_status', 'taxable'),
(622, 101, '_tax_class', ''),
(623, 101, '_manage_stock', 'no'),
(624, 101, '_backorders', 'no'),
(625, 101, '_sold_individually', 'no'),
(626, 101, '_virtual', 'no'),
(627, 101, '_downloadable', 'no'),
(628, 101, '_download_limit', '-1'),
(629, 101, '_download_expiry', '-1'),
(630, 101, '_thumbnail_id', '44'),
(631, 101, '_stock', NULL),
(632, 101, '_stock_status', 'instock'),
(633, 101, '_wc_average_rating', '0'),
(634, 101, '_wc_review_count', '0'),
(635, 101, '_product_version', '3.8.1'),
(636, 101, '_price', '6290'),
(637, 101, 'people_count', '6-8'),
(638, 101, '_wp_old_date', '2019-11-28'),
(639, 101, '_edit_lock', '1575060939:1'),
(640, 98, '_edit_last', '1'),
(641, 99, '_edit_last', '1'),
(642, 100, '_edit_last', '1'),
(643, 101, '_edit_last', '1'),
(644, 102, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575057542;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(645, 103, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575061219;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}'),
(646, 107, '_action_manager_schedule', 'O:32:\"ActionScheduler_IntervalSchedule\":2:{s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1575064863;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:3600;}');

-- --------------------------------------------------------

--
-- Структура таблиці `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2019-11-28 16:50:39', '2019-11-28 13:50:39', '<!-- wp:paragraph -->\n<p>Добро пожаловать в WordPress. Это ваша первая запись. Отредактируйте или удалите ее, затем начинайте создавать!</p>\n<!-- /wp:paragraph -->', 'Привет, мир!', '', 'trash', 'open', 'open', '', 'privet-mir__trashed', '', '', '2019-11-29 11:49:19', '2019-11-29 08:49:19', '', 0, 'http://shef.ru/?p=1', 0, 'post', '', 1),
(2, 1, '2019-11-28 16:50:39', '2019-11-28 13:50:39', '<!-- wp:paragraph -->\n<p>Это пример страницы. От записей в блоге она отличается тем, что остаётся на одном месте и отображается в меню сайта (в большинстве тем). На странице &laquo;Детали&raquo; владельцы сайтов обычно рассказывают о себе потенциальным посетителям. Например, так:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Привет! Днём я курьер, а вечером &#8212; подающий надежды актёр. Это мой блог. Я живу в Ростове-на-Дону, люблю своего пса Джека и пинаколаду. (И ещё попадать под дождь.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...или так:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Компания &laquo;Штучки XYZ&raquo; была основана в 1971 году и с тех пор производит качественные штучки. Компания находится в Готэм-сити, имеет штат из более чем 2000 сотрудников и приносит много пользы жителям Готэма.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>Перейдите <a href=\"http://shef.ru/wp-admin/\">в консоль</a>, чтобы удалить эту страницу и создать новые. Успехов!</p>\n<!-- /wp:paragraph -->', 'Пример страницы', '', 'trash', 'closed', 'open', '', 'sample-page__trashed', '', '', '2019-11-28 21:00:20', '2019-11-28 18:00:20', '', 0, 'http://shef.ru/?page_id=2', 0, 'page', '', 0),
(3, 1, '2019-11-28 16:50:39', '2019-11-28 13:50:39', '<!-- wp:heading --><h2>Кто мы</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Наш адрес сайта: http://shef.ru.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Какие персональные данные мы собираем и с какой целью</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Комментарии</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Если посетитель оставляет комментарий на сайте, мы собираем данные указанные в форме комментария, а также IP адрес посетителя и данные user-agent браузера с целью определения спама.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Анонимизированная строка создаваемая из вашего адреса email (\"хеш\") может предоставляться сервису Gravatar, чтобы определить используете ли вы его. Политика конфиденциальности Gravatar доступна здесь: https://automattic.com/privacy/ . После одобрения комментария ваше изображение профиля будет видимым публично в контексте вашего комментария.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Медиафайлы</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Если вы зарегистрированный пользователь и загружаете фотографии на сайт, вам возможно следует избегать загрузки изображений с метаданными EXIF, так как они могут содержать данные вашего месторасположения по GPS. Посетители могут извлечь эту информацию скачав изображения с сайта.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Формы контактов</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Куки</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Если вы оставляете комментарий на нашем сайте, вы можете включить сохранение вашего имени, адреса email и вебсайта в куки. Это делается для вашего удобства, чтобы не заполнять данные снова при повторном комментировании. Эти куки хранятся в течение одного года.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Если у вас есть учетная запись на сайте и вы войдете в неё, мы установим временный куки для определения поддержки куки вашим браузером, куки не содержит никакой личной информации и удаляется при закрытии вашего браузера.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>При входе в учетную запись мы также устанавливаем несколько куки с данными входа и настройками экрана. Куки входа хранятся в течение двух дней, куки с настройками экрана - год. Если вы выберете возможность \"Запомнить меня\", данные о входе будут сохраняться в течение двух недель. При выходе из учетной записи куки входа будут удалены.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>При редактировании или публикации статьи в браузере будет сохранен дополнительный куки, он не содержит персональных данных и содержит только ID записи отредактированной вами, истекает через 1 день.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Встраиваемое содержимое других вебсайтов</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Статьи на этом сайте могут включать встраиваемое содержимое (например видео, изображения, статьи и др.), подобное содержимое ведет себя так же, как если бы посетитель зашел на другой сайт.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Эти сайты могут собирать данные о вас, использовать куки, внедрять дополнительное отслеживание третьей стороной и следить за вашим взаимодействием с внедренным содержимым, включая отслеживание взаимодействия, если у вас есть учетная запись и вы авторизовались на том сайте.</p><!-- /wp:paragraph --><!-- wp:heading {\"level\":3} --><h3>Веб-аналитика</h3><!-- /wp:heading --><!-- wp:heading --><h2>С кем мы делимся вашими данными</h2><!-- /wp:heading --><!-- wp:heading --><h2>Как долго мы храним ваши данные</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Если вы оставляете комментарий, то сам комментарий и его метаданные сохраняются неопределенно долго. Это делается для того, чтобы определять и одобрять последующие комментарии автоматически, вместо помещения их в очередь на одобрение.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Для пользователей с регистрацией на нашем сайте мы храним ту личную информацию, которую они указывают в своем профиле. Все пользователи могут видеть, редактировать или удалить свою информацию из профиля в любое время (кроме имени пользователя). Администрация вебсайта также может видеть и изменять эту информацию.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Какие у вас права на ваши данные</h2><!-- /wp:heading --><!-- wp:paragraph --><p>При наличии учетной записи на сайте или если вы оставляли комментарии, то вы можете запросить файл экспорта персональных данных, которые мы сохранили о вас, включая предоставленные вами данные. Вы также можете запросить удаление этих данных, это не включает данные, которые мы обязаны хранить в административных целях, по закону или целях безопасности.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Куда мы отправляем ваши данные</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Комментарии пользователей могут проверяться автоматическим сервисом определения спама.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Ваша контактная информация</h2><!-- /wp:heading --><!-- wp:heading --><h2>Дополнительная информация</h2><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Как мы защищаем ваши данные</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Какие принимаются процедуры против взлома данных</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>От каких третьих сторон мы получаем данные</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Какие автоматические решения принимаются на основе данных пользователей</h3><!-- /wp:heading --><!-- wp:heading {\"level\":3} --><h3>Требования к раскрытию отраслевых нормативных требований</h3><!-- /wp:heading -->', 'Политика конфиденциальности', '', 'draft', 'closed', 'open', '', 'privacy-policy', '', '', '2019-11-28 16:50:39', '2019-11-28 13:50:39', '', 0, 'http://shef.ru/?page_id=3', 0, 'page', '', 0),
(4, 1, '2019-11-28 16:50:56', '0000-00-00 00:00:00', '', 'Черновик', '', 'auto-draft', 'open', 'open', '', '', '', '', '2019-11-28 16:50:56', '0000-00-00 00:00:00', '', 0, 'http://shef.ru/?p=4', 0, 'post', '', 0),
(6, 1, '2019-11-28 17:40:19', '2019-11-28 14:40:19', '', 'woocommerce-placeholder', '', 'inherit', 'open', 'closed', '', 'woocommerce-placeholder', '', '', '2019-11-28 17:40:19', '2019-11-28 14:40:19', '', 0, 'http://shef.ru/wp-content/uploads/2019/11/woocommerce-placeholder.png', 0, 'attachment', 'image/png', 0),
(7, 1, '2019-11-28 19:29:13', '2019-11-28 16:29:13', '', 'Главная', '', 'publish', 'closed', 'closed', '', 'glavnaya', '', '', '2019-11-29 14:53:26', '2019-11-29 11:53:26', '', 0, 'http://shef.ru/?page_id=7', 0, 'page', '', 0),
(8, 1, '2019-11-28 19:29:13', '2019-11-28 16:29:13', '', 'Главная', '', 'inherit', 'closed', 'closed', '', '7-revision-v1', '', '', '2019-11-28 19:29:13', '2019-11-28 16:29:13', '', 7, 'http://shef.ru/2019/11/28/7-revision-v1/', 0, 'revision', '', 0),
(9, 1, '2019-11-28 19:49:22', '2019-11-28 16:49:22', '<div class=\"wrapper\">\n<div class=\"clb\"></div>\n<div class=\"hit_ttl\">Хиты продаж</div>\n<div class=\"hits\">\n<ul>\n 	<li>\n<div class=\"hit_img\">\n                <a href=\"detail.html\"><img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/home/hit1.fw.png\"></a></div>\n<div class=\"hit_text\">\n<div class=\"one_hit_ttl\"><a href=\"detail.html\">Ассорти</a></div>\n<div class=\"hit_descr\">— Круассан с ростбифом — 10 шт. по 35 г\nАссорти мини-салатов — 15 шт.:...</div>\n<div class=\"blk_price\">\n<div class=\"count_chel\">12-15</div>\n<div class=\"my_price\">\n                    <span class=\"old_price\">8 290 <span class=\"ruble\">Р</span> </span>\n<span class=\"new_red_price\">6 290<span class=\"ruble\">Р</span></span></div>\n</div>\n</div>\n<a class=\"add_cart\" href=\"#\">\nДобавить в корзину\n</a></li>\n 	<li>\n<div class=\"hit_img\">\n                <a href=\"detail.html\"><img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/home/hit2.fw.png\"></a></div>\n<div class=\"hit_text\">\n<div class=\"one_hit_ttl\"><a href=\"detail.html\">Идеальный завтрак</a></div>\n<div class=\"hit_descr\">— Круассан с ростбифом — 10 шт. по 35 г\nАссорти мини-салатов — 15 шт.:...</div>\n<div class=\"blk_price\">\n<div class=\"count_chel\">4-8</div>\n<div class=\"my_price\">\n                    <span class=\"old_price\">8 290 <span class=\"ruble\">Р</span> </span>\n<span class=\"new_red_price\">6 290<span class=\"ruble\">Р</span></span></div>\n</div>\n</div>\n<a class=\"add_cart\" href=\"#\">\nДобавить в корзину\n</a></li>\n 	<li>\n<div class=\"hit_img\">\n                <a href=\"detail.html\"><img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/home/hit3.fw.png\"></a></div>\n<div class=\"hit_text\">\n<div class=\"one_hit_ttl\"><a href=\"detail.html\">Мини</a></div>\n<div class=\"hit_descr\">— Круассан с ростбифом — 10 шт. по 35 г\nАссорти мини-салатов — 15 шт.:...</div>\n<div class=\"blk_price\">\n<div class=\"count_chel\">3-5</div>\n<div class=\"my_price\">\n                    <span class=\"old_price\">8 290 <span class=\"ruble\">Р</span> </span>\n<span class=\"new_price\">6 290<span class=\"ruble\">Р</span></span></div>\n</div>\n</div>\n<a class=\"add_cart\" href=\"#\">\nДобавить в корзину\n</a></li>\n 	<li>\n<div class=\"hit_img\">\n                <a href=\"detail.html\"><img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/home/hit4.fw.png\"></a></div>\n<div class=\"hit_text\">\n<div class=\"one_hit_ttl\"><a href=\"detail.html\">Изысканнный</a></div>\n<div class=\"hit_descr\">— Круассан с ростбифом — 10 шт. по 35 г\nАссорти мини-салатов — 15 шт.:...</div>\n<div class=\"blk_price\">\n<div class=\"count_chel\">6-8</div>\n<div class=\"my_price\">\n                    <span class=\"old_price\">8 290 <span class=\"ruble\">Р</span> </span>\n<span class=\"new_red_price\">6 290<span class=\"ruble\">Р</span></span></div>\n</div>\n</div>\n<a class=\"add_cart\" href=\"#\">\nДобавить в корзину\n</a></li>\n 	<li>\n<div class=\"hit_img\">\n                <a href=\"detail.html\"><img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/home/hit5.fw.png\"></a></div>\n<div class=\"hit_text\">\n<div class=\"one_hit_ttl\"><a href=\"detail.html\">Сытный</a></div>\n<div class=\"hit_descr\">— Круассан с ростбифом — 10 шт. по 35 г\nАссорти мини-салатов — 15 шт.:...</div>\n<div class=\"blk_price\">\n<div class=\"count_chel\">10-12</div>\n<div class=\"my_price\">\n                    <span class=\"old_price\">8 290 <span class=\"ruble\">Р</span> </span>\n<span class=\"new_red_price\">6 290<span class=\"ruble\">Р</span></span></div>\n</div>\n</div>\n<a class=\"add_cart\" href=\"#\">\nДобавить в корзину\n</a></li>\n 	<li>\n<div class=\"hit_img\">\n                <a href=\"detail.html\"><img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/home/hit6.fw.png\"></a></div>\n<div class=\"hit_text\">\n<div class=\"one_hit_ttl\"><a href=\"detail.html\">Ассорти</a></div>\n<div class=\"hit_descr\">— Круассан с ростбифом — 10 шт. по 35 г\nАссорти мини-салатов — 15 шт.:...</div>\n<div class=\"blk_price\">\n<div class=\"count_chel\">12-15</div>\n<div class=\"my_price\">\n                    <span class=\"old_price\">8 290 <span class=\"ruble\">Р</span> </span>\n<span class=\"new_red_price\">6 290<span class=\"ruble\">Р</span></span></div>\n</div>\n</div>\n<a class=\"add_cart\" href=\"#\">\nДобавить в корзину\n</a></li>\n</ul>\n</div>\n<div style=\"clear: both;\"></div>\n<a href=\"set.html\" class=\"show_sets\">Посмотреть все сеты</a>\n\n</div>\n<div class=\"blk_shef\">\n<div class=\"wrapper relative\">\n          <img class=\"img_shef\" src=\"/wp-content/themes/shef/verstka/image/gif/1.gif\">\n<div class=\"shef_left\">\n<div class=\"shef_ttl\">Знакомьтесь с Шефом</div>\n<div class=\"shef_citata\">\n<div class=\"citata_ttl\">Здравствуйте!\nМеня зовут Имя Фамилия!</div>\n<div class=\"citata_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\n\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\n\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"fish_shef\">\n<div class=\"wrapper\">\n<div class=\"my_articles\">\n<div class=\"fish_ttl\">Фишки от Шефа</div>\n<div class=\"desktop\">\n<div class=\"art_left relative\">\n                <img src=\"/wp-content/themes/shef/verstka/image/home/f1.fw.png\" alt=\"\">\n<div class=\"art_text_white\">\n<div class=\"art_ttl\">Заголовок статьи будет тут</div>\n<div class=\"art_date\">09.08.2019</div>\n</div>\n</div>\n<div class=\"art_right\">\n<div class=\"slider2\">\n<div class=\"one_sld\">\n<div class=\"one_sld_img\"><img src=\"/wp-content/themes/shef/verstka/image/home/f2.fw.png\" alt=\"\"></div>\n<div class=\"art_text\">\n<div class=\"art_ttl_black\">Заголовок статьи будет тут</div>\n<div class=\"art_date_grey\">09.08.2019</div>\n</div>\n</div>\n<div class=\"one_sld\">\n<div class=\"one_sld_img\"><img src=\"/wp-content/themes/shef/verstka/image/home/f3.fw.png\" alt=\"\"></div>\n<div class=\"art_text\">\n<div class=\"art_ttl_black\">Заголовок статьи будет тут</div>\n<div class=\"art_date_grey\">09.08.2019</div>\n</div>\n</div>\n<div class=\"one_sld\">\n<div class=\"one_sld_img\"><img src=\"/wp-content/themes/shef/verstka/image/home/f2.fw.png\" alt=\"\"></div>\n<div class=\"art_text\">\n<div class=\"art_ttl_black\">Заголовок статьи будет тут</div>\n<div class=\"art_date_grey\">09.08.2019</div>\n</div>\n</div>\n<div class=\"one_sld\">\n<div class=\"one_sld_img\"><img src=\"/wp-content/themes/shef/verstka/image/home/f3.fw.png\" alt=\"\"></div>\n<div class=\"art_text\">\n<div class=\"art_ttl_black\">Заголовок статьи будет тут</div>\n<div class=\"art_date_grey\">09.08.2019</div>\n</div>\n</div>\n</div>\n</div>\n</div>\n<div class=\"mob\">\n<div class=\"fich relative\">\n                <img src=\"/wp-content/themes/shef/verstka/image/mob/fm1.fw.png\" alt=\"\">\n<div class=\"art_text_white\">\n<div class=\"art_ttl\">Заголовок статьи будет тут</div>\n<div class=\"art_date\">09.08.2019</div>\n</div>\n</div>\n<div class=\"fich\">\n                <img src=\"/wp-content/themes/shef/verstka/image/mob/fm2.fw.png\" alt=\"\">\n<div class=\"art_text\">\n<div class=\"art_ttl_black\">Заголовок статьи будет тут</div>\n<div class=\"art_date_grey\">09.08.2019</div>\n</div>\n</div>\n<div class=\"fich\">\n                <img src=\"/wp-content/themes/shef/verstka/image/mob/fm3.fw.png\" alt=\"\">\n<div class=\"art_text\">\n<div class=\"art_ttl_black\">Заголовок статьи будет тут</div>\n<div class=\"art_date_grey\">09.08.2019</div>\n</div>\n</div>\n</div>\n<div style=\"clear: both;\"></div>\n</div>\n</div>\n</div>\n<div class=\"insta\">\n<div class=\"inst_blk\">\n<div class=\"flex1\">\n            <img src=\"/wp-content/themes/shef/verstka/image/home/inst0.png\" alt=\"\">\n<img src=\"/wp-content/themes/shef/verstka/image/home/inst1.fw.png\" alt=\"\"></div>\n<div class=\"flex1\">\n            <img src=\"/wp-content/themes/shef/verstka/image/home/inst01.png\" alt=\"\">\n<img src=\"/wp-content/themes/shef/verstka/image/home/inst4.fw.png\" alt=\"\"></div>\n</div>\n<div class=\"inst_blk but\">\n          <a href=\"https://www.instagram.com\">\n<div class=\"inst_ttl\">Жми для перехода в наш Instagram</div>\n<div class=\"inst_btn\">INSTAGRAM</div>\n</a><a href=\"https://www.instagram.com\">          </a>\n\n</div>\n<div class=\"inst_blk\">\n<div class=\"flex1\">\n            <img src=\"/wp-content/themes/shef/verstka/image/home/inst2.fw.png\" alt=\"\">\n<img src=\"/wp-content/themes/shef/verstka/image/home/inst3.fw.png\" alt=\"\"></div>\n<div class=\"flex1\">\n            <img src=\"/wp-content/themes/shef/verstka/image/home/inst5.fw.png\" alt=\"\">\n<img src=\"/wp-content/themes/shef/verstka/image/home/inst6.fw.png\" alt=\"\"></div>\n</div>\n</div>\n<div class=\"my_contacts relative\">\n<div class=\"cont_right\">\n          <img src=\"/wp-content/themes/shef/verstka/image/home/map.png\" alt=\"\"></div>\n<div class=\"cont_left\">\n<div class=\"wrp_cont\">\n<div class=\"cont_ttl\">Контакты</div>\n<div class=\"cont_blk\">\n              <a class=\"map_tel\" href=\"tel:+74950000000\">+7 (495) 000-00-00</a>\n<a class=\"map_email\" href=\"mailto:vashemail@gmail.com\">vashemail@gmail.com</a>\n<div class=\"my_soz\">\n                <a href=\"https://vk.com\"><i class=\"fa fa-vk\" aria-hidden=\"true\"></i></a>\n<a href=\"https://www.facebook.com\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>\n<a href=\"https://www.instagram.com\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></div>\n</div>\n<div class=\"allo\">\n<div class=\"allo_ttl\">- Алло, Шеф.</div>\nХочу быстрый фуршет!\n\n</div>\n<img class=\"green_trub\" alt=\"\" src=\"/wp-content/themes/shef/verstka/image/home/zvonok.fw.png\">\n\n</div>\n</div>\n<div class=\"clb\"></div>\n</div>', 'Главная', '', 'inherit', 'closed', 'closed', '', '7-revision-v1', '', '', '2019-11-28 19:49:22', '2019-11-28 16:49:22', '', 7, 'http://shef.ru/2019/11/28/7-revision-v1/', 0, 'revision', '', 0),
(10, 1, '2019-11-28 20:59:50', '2019-11-28 17:59:50', '', 'Сеты от Шефа', '', 'publish', 'closed', 'closed', '', 'sety-ot-shefa', '', '', '2019-11-28 20:59:50', '2019-11-28 17:59:50', '', 0, 'http://shef.ru/?page_id=10', 0, 'page', '', 0),
(11, 1, '2019-11-28 20:59:50', '2019-11-28 17:59:50', '', 'Сеты от Шефа', '', 'inherit', 'closed', 'closed', '', '10-revision-v1', '', '', '2019-11-28 20:59:50', '2019-11-28 17:59:50', '', 10, 'http://shef.ru/2019/11/28/10-revision-v1/', 0, 'revision', '', 0),
(12, 1, '2019-11-28 21:00:20', '2019-11-28 18:00:20', '<!-- wp:paragraph -->\n<p>Это пример страницы. От записей в блоге она отличается тем, что остаётся на одном месте и отображается в меню сайта (в большинстве тем). На странице &laquo;Детали&raquo; владельцы сайтов обычно рассказывают о себе потенциальным посетителям. Например, так:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Привет! Днём я курьер, а вечером &#8212; подающий надежды актёр. Это мой блог. Я живу в Ростове-на-Дону, люблю своего пса Джека и пинаколаду. (И ещё попадать под дождь.)</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>...или так:</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:quote -->\n<blockquote class=\"wp-block-quote\"><p>Компания &laquo;Штучки XYZ&raquo; была основана в 1971 году и с тех пор производит качественные штучки. Компания находится в Готэм-сити, имеет штат из более чем 2000 сотрудников и приносит много пользы жителям Готэма.</p></blockquote>\n<!-- /wp:quote -->\n\n<!-- wp:paragraph -->\n<p>Перейдите <a href=\"http://shef.ru/wp-admin/\">в консоль</a>, чтобы удалить эту страницу и создать новые. Успехов!</p>\n<!-- /wp:paragraph -->', 'Пример страницы', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2019-11-28 21:00:20', '2019-11-28 18:00:20', '', 2, 'http://shef.ru/2019/11/28/2-revision-v1/', 0, 'revision', '', 0),
(13, 1, '2019-11-28 21:01:28', '2019-11-28 18:01:28', '<div class=\"wrapper relative\">\n    <a href=\"cart.html\" class=\"mini_cart r desktop\"><span class=\"count\">2</span></a>\n<div class=\"dost_left\">\n            Все заказы оформляются на сайте или по телефону:\n8 (800) 000-00-00\n<div class=\"inf_dost\">\n\nЧастные заказы <span>(до 10 сетов)</span> подтверждаются\n<span>за 24 часа</span> с момента оформления заявки.\n\nКорпоративные заказы <span>(от 10 сетов)</span> подтверждаем <span>за 48 часов</span> с момента оформления заявки.\n\n</div>\nБольшие заказы готовим и доставляем по предоплате.\nПозвоните по телефону: 8 (800) 000-00-00. Мы постараемся сделать все возможное, чтобы реализовать ваш заказ\n<div class=\"min_sum\">\n                Мин. сумма заказа для Москвы - 5000 <span class=\"ruble\"></span>\nМин. сумма заказа для МО - 10 000 <span class=\"ruble\"></span></div>\nДоставка осуществляется в специальных контейнерах самыми быстрыми курьерами.\n<div class=\"min_sum m30\">\n                В пределах МКАД - 0 <span class=\"ruble\"></span>\nЗа пределами МКАД - 300 <span class=\"ruble\"></span></div>\n<div class=\"samovivoz\">\n                Забери меня сам и получи - 10% на любой заказ!</div>\n</div>\n<div class=\"dost_right\">\n<div class=\"ttl_d\">Этапы доставки:</div>\n<div class=\"steps\">\n<div class=\"step1\">Вы оставляете заявку на сайте;</div>\n<div class=\"step2\">Наш консультант связывается для уточнения всех деталей;</div>\n<div class=\"step3\">В указанную дату и время заказ будет доставлен по адресу.</div>\n</div>\n<a class=\"green_btn\">Задать вопрос</a>\n\n</div>\n<div class=\"clb\"></div>\n</div>', 'Доставка', '', 'publish', 'closed', 'closed', '', 'dostavka', '', '', '2019-11-29 13:08:52', '2019-11-29 10:08:52', '', 0, 'http://shef.ru/?page_id=13', 0, 'page', '', 0),
(14, 1, '2019-11-28 21:01:28', '2019-11-28 18:01:28', '', 'Доставка', '', 'inherit', 'closed', 'closed', '', '13-revision-v1', '', '', '2019-11-28 21:01:28', '2019-11-28 18:01:28', '', 13, 'http://shef.ru/2019/11/28/13-revision-v1/', 0, 'revision', '', 0),
(15, 1, '2019-11-28 21:01:41', '2019-11-28 18:01:41', '<div class=\"contacts\"><img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/contacts/top_piz.png\" class=\"top_piz\">\n<div class=\"wrapper relative\">\n<div class=\"breadcrumbs_set\"><a href=\"index.html\">Главная</a> <span class=\"orange\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span> Контакты</div>\n<h1 class=\"ttl50\">Контакты</h1>\n<a href=\"cart.html\" class=\"mini_cart desktop\" style=\"margin-top: 280px;\"><span class=\"count\">2</span></a><img class=\"img_shef1\" src=\"/wp-content/themes/shef/verstka/image/gif/2.gif\">\n<div class=\"my_cont\"> <a class=\"tel\" href=\"tel:+74950000000\">+7 (495) 000-00-00</a><a href=\"mailto:vashemail@gmail.com\" class=\"email\">vashemail@gmail.com</a>\n<div class=\"my_soz\"><a href=\"https://vk.com\"><i class=\"fa fa-vk\" aria-hidden=\"true\"></i></a><a href=\"https://www.facebook.com\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a><a href=\"https://www.instagram.com\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></div>\n</div>\n</div>\n</div>\n<img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/contacts/piz.png\" class=\"bot_piz\">', 'Позвони Шефу', '', 'publish', 'closed', 'closed', '', 'pozvoni-shefu', '', '', '2019-11-29 23:58:09', '2019-11-29 20:58:09', '', 0, 'http://shef.ru/?page_id=15', 0, 'page', '', 0),
(16, 1, '2019-11-28 21:01:41', '2019-11-28 18:01:41', '', 'Позвони Шефу', '', 'inherit', 'closed', 'closed', '', '15-revision-v1', '', '', '2019-11-28 21:01:41', '2019-11-28 18:01:41', '', 15, 'http://shef.ru/2019/11/28/15-revision-v1/', 0, 'revision', '', 0),
(17, 1, '2019-11-28 21:04:07', '2019-11-28 18:04:07', '<!-- wp:shortcode -->\n[woocommerce_my_account]\n<!-- /wp:shortcode -->', 'Личный кабинет', '', 'publish', 'closed', 'closed', '', 'lichnyj-kabinet', '', '', '2019-11-28 21:04:07', '2019-11-28 18:04:07', '', 0, 'http://shef.ru/?page_id=17', 0, 'page', '', 0),
(18, 1, '2019-11-28 21:04:07', '2019-11-28 18:04:07', '<!-- wp:shortcode -->\n[woocommerce_my_account]\n<!-- /wp:shortcode -->', 'Личный кабинет', '', 'inherit', 'closed', 'closed', '', '17-revision-v1', '', '', '2019-11-28 21:04:07', '2019-11-28 18:04:07', '', 17, 'http://shef.ru/2019/11/28/17-revision-v1/', 0, 'revision', '', 0),
(19, 1, '2019-11-28 21:14:00', '2019-11-28 18:14:00', 'Auto generated product for wallet recharge please do not delete or update.', 'Wallet Topup', '', 'private', 'closed', 'closed', '', 'wallet-topup', '', '', '2019-11-28 21:14:00', '2019-11-28 18:14:00', '', 0, 'http://shef.ru/product/wallet-topup/', 0, 'product', '', 0),
(20, 0, '2019-11-28 18:14:35', '2019-11-28 18:14:35', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de00ecbc406e4.99063015-r5G5CWBaXl1Tpmfmt1cxU7ibzLha8nj7', '', '', '2019-11-28 21:15:39', '2019-11-28 18:15:39', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=20', 0, 'scheduled-action', '', 3),
(21, 0, '2019-11-28 18:15:06', '2019-11-28 18:15:06', '[\"wc_admin_update_0201_order_status_index\"]', 'woocommerce_run_update_callback', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de00ecc450b85.83330275-ELR54gmrc1sJG3qYyq9ef8Q3gTAINfo9', '', '', '2019-11-28 21:15:40', '2019-11-28 18:15:40', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=21', 0, 'scheduled-action', '', 3),
(22, 0, '2019-11-28 18:15:07', '2019-11-28 18:15:07', '[\"wc_admin_update_0201_db_version\"]', 'woocommerce_run_update_callback', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de00ecc5bf5d9.78342474-7VPxXnsNZ2BcPufILg8UDPtK1bkphhHL', '', '', '2019-11-28 21:15:40', '2019-11-28 18:15:40', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=22', 0, 'scheduled-action', '', 3),
(23, 0, '2019-11-28 19:15:39', '2019-11-28 19:15:39', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de01d35baa922.12426204-RbjXvdRq0iyFNfQxfGcspdvy0y5O6eM8', '', '', '2019-11-28 22:17:09', '2019-11-28 19:17:09', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=23', 0, 'scheduled-action', '', 3),
(24, 1, '2019-11-28 21:40:17', '2019-11-28 18:40:17', ' ', '', '', 'publish', 'closed', 'closed', '', '24', '', '', '2019-11-28 21:40:17', '2019-11-28 18:40:17', '', 0, 'http://shef.ru/?p=24', 2, 'nav_menu_item', '', 0),
(25, 1, '2019-11-28 21:40:17', '2019-11-28 18:40:17', ' ', '', '', 'publish', 'closed', 'closed', '', '25', '', '', '2019-11-28 21:40:17', '2019-11-28 18:40:17', '', 0, 'http://shef.ru/?p=25', 3, 'nav_menu_item', '', 0),
(26, 1, '2019-11-28 21:40:17', '2019-11-28 18:40:17', ' ', '', '', 'publish', 'closed', 'closed', '', '26', '', '', '2019-11-28 21:40:17', '2019-11-28 18:40:17', '', 0, 'http://shef.ru/?p=26', 1, 'nav_menu_item', '', 0),
(27, 1, '2019-11-28 21:56:01', '2019-11-28 18:56:01', '<!-- wp:shortcode -->\n[woocommerce_cart]\n<!-- /wp:shortcode -->', 'Корзина', '', 'publish', 'closed', 'closed', '', 'korzina', '', '', '2019-11-28 21:56:01', '2019-11-28 18:56:01', '', 0, 'http://shef.ru/?page_id=27', 0, 'page', '', 0),
(28, 1, '2019-11-28 21:56:01', '2019-11-28 18:56:01', '<!-- wp:shortcode -->\n[woocommerce_cart]\n<!-- /wp:shortcode -->', 'Корзина', '', 'inherit', 'closed', 'closed', '', '27-revision-v1', '', '', '2019-11-28 21:56:01', '2019-11-28 18:56:01', '', 27, 'http://shef.ru/2019/11/28/27-revision-v1/', 0, 'revision', '', 0),
(29, 1, '2019-11-28 21:56:46', '2019-11-28 18:56:46', '', 'Оплата', '', 'publish', 'closed', 'closed', '', 'oplata', '', '', '2019-11-28 21:56:46', '2019-11-28 18:56:46', '', 0, 'http://shef.ru/?page_id=29', 0, 'page', '', 0),
(30, 1, '2019-11-28 21:56:46', '2019-11-28 18:56:46', '', 'Оплата', '', 'inherit', 'closed', 'closed', '', '29-revision-v1', '', '', '2019-11-28 21:56:46', '2019-11-28 18:56:46', '', 29, 'http://shef.ru/2019/11/28/29-revision-v1/', 0, 'revision', '', 0),
(31, 0, '2019-11-28 20:17:09', '2019-11-28 20:17:09', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de02b6603ff24.31965211-UTgUMs8PW4qce01AysNOFiu9xorxlKZk', '', '', '2019-11-28 23:17:42', '2019-11-28 20:17:42', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=31', 0, 'scheduled-action', '', 3),
(32, 1, '2019-11-28 22:26:46', '2019-11-28 19:26:46', '<!-- wp:shortcode -->\n[woocommerce_checkout]\n<!-- /wp:shortcode -->', 'Оформление заказа', '', 'publish', 'closed', 'closed', '', 'oformlenie-zakaza', '', '', '2019-11-28 22:26:46', '2019-11-28 19:26:46', '', 0, 'http://shef.ru/?page_id=32', 0, 'page', '', 0),
(33, 1, '2019-11-28 22:26:46', '2019-11-28 19:26:46', '<!-- wp:shortcode -->\n[woocommerce_checkout]\n<!-- /wp:shortcode -->', 'Оформление заказа', '', 'inherit', 'closed', 'closed', '', '32-revision-v1', '', '', '2019-11-28 22:26:46', '2019-11-28 19:26:46', '', 32, 'http://shef.ru/2019/11/28/32-revision-v1/', 0, 'revision', '', 0),
(34, 1, '2019-11-28 23:45:15', '2019-11-28 20:45:15', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et soluta quasi id impedit molestiae temporibus quam aliquid vitae, neque, omnis odio iure fugiat, earum ipsum quibusdam dolorum commodi repellat hic!</div>\r\n<div>Nostrum repellendus praesentium quas perferendis sed corrupti sit accusamus, atque temporibus maiores in iusto doloremque delectus dignissimos quidem. Sequi distinctio, commodi voluptate odit minus magnam vero praesentium, repellat nostrum saepe!</div>\r\n<div>Debitis, ipsum. Pariatur, hic! Quas praesentium expedita eius qui laudantium, numquam dolores soluta dolore ea vero et facilis labore. Id possimus, tenetur omnis ipsa obcaecati delectus voluptates laboriosam accusantium unde?</div>\r\n<div>Impedit omnis quia quibusdam cum, veniam facere modi vitae fuga, optio eum nisi deserunt quas nulla soluta reiciendis eligendi enim adipisci commodi officiis sapiente explicabo eaque error quisquam perspiciatis! Sit.</div>\r\n<div>Quasi officiis cumque sed, harum optio dolorum unde sunt, tempore repellendus nesciunt, voluptate ratione rem, voluptates placeat atque repellat temporibus perferendis laudantium expedita sequi error dolor minus officia libero architecto?</div>', 'Ассорти', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'assorti', '', '', '2019-11-29 21:05:45', '2019-11-29 18:05:45', '', 0, 'http://shef.ru/?post_type=product&#038;p=34', 0, 'product', '', 0),
(35, 0, '2019-11-28 21:17:42', '2019-11-28 21:17:42', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de0399ded59f5.60737780-ZX6uSIm9OgXyDwXxAveXk0pOnpcpTw3F', '', '', '2019-11-29 00:18:21', '2019-11-28 21:18:21', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=35', 0, 'scheduled-action', '', 3),
(37, 1, '2019-11-28 23:47:40', '2019-11-28 20:47:40', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et soluta quasi id impedit molestiae temporibus quam aliquid vitae, neque, omnis odio iure fugiat, earum ipsum quibusdam dolorum commodi repellat hic!</div>\r\n<div>Nostrum repellendus praesentium quas perferendis sed corrupti sit accusamus, atque temporibus maiores in iusto doloremque delectus dignissimos quidem. Sequi distinctio, commodi voluptate odit minus magnam vero praesentium, repellat nostrum saepe!</div>\r\n<div>Debitis, ipsum. Pariatur, hic! Quas praesentium expedita eius qui laudantium, numquam dolores soluta dolore ea vero et facilis labore. Id possimus, tenetur omnis ipsa obcaecati delectus voluptates laboriosam accusantium unde?</div>\r\n<div>Impedit omnis quia quibusdam cum, veniam facere modi vitae fuga, optio eum nisi deserunt quas nulla soluta reiciendis eligendi enim adipisci commodi officiis sapiente explicabo eaque error quisquam perspiciatis! Sit.</div>\r\n<div>Quasi officiis cumque sed, harum optio dolorum unde sunt, tempore repellendus nesciunt, voluptate ratione rem, voluptates placeat atque repellat temporibus perferendis laudantium expedita sequi error dolor minus officia libero architecto?</div>', 'Идеальный завтрак', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'idealnyj-zavtrak', '', '', '2019-11-29 21:05:33', '2019-11-29 18:05:33', '', 0, 'http://shef.ru/?post_type=product&#038;p=37', 0, 'product', '', 0),
(39, 1, '2019-11-28 23:57:42', '2019-11-28 20:57:42', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et soluta quasi id impedit molestiae temporibus quam aliquid vitae, neque, omnis odio iure fugiat, earum ipsum quibusdam dolorum commodi repellat hic!</div>\r\n<div>Nostrum repellendus praesentium quas perferendis sed corrupti sit accusamus, atque temporibus maiores in iusto doloremque delectus dignissimos quidem. Sequi distinctio, commodi voluptate odit minus magnam vero praesentium, repellat nostrum saepe!</div>\r\n<div>Debitis, ipsum. Pariatur, hic! Quas praesentium expedita eius qui laudantium, numquam dolores soluta dolore ea vero et facilis labore. Id possimus, tenetur omnis ipsa obcaecati delectus voluptates laboriosam accusantium unde?</div>\r\n<div>Impedit omnis quia quibusdam cum, veniam facere modi vitae fuga, optio eum nisi deserunt quas nulla soluta reiciendis eligendi enim adipisci commodi officiis sapiente explicabo eaque error quisquam perspiciatis! Sit.</div>\r\n<div>Quasi officiis cumque sed, harum optio dolorum unde sunt, tempore repellendus nesciunt, voluptate ratione rem, voluptates placeat atque repellat temporibus perferendis laudantium expedita sequi error dolor minus officia libero architecto?</div>', 'Мини', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'mini', '', '', '2019-11-29 21:05:26', '2019-11-29 18:05:26', '', 0, 'http://shef.ru/?post_type=product&#038;p=39', 0, 'product', '', 0),
(41, 1, '2019-11-28 23:58:33', '2019-11-28 20:58:33', '', 'hit1.fw', '', 'inherit', 'open', 'closed', '', 'hit1-fw', '', '', '2019-11-28 23:58:33', '2019-11-28 20:58:33', '', 39, 'http://shef.ru/wp-content/uploads/2019/11/hit1.fw_.png', 0, 'attachment', 'image/png', 0),
(42, 1, '2019-11-28 23:58:34', '2019-11-28 20:58:34', '', 'hit2.fw', '', 'inherit', 'open', 'closed', '', 'hit2-fw', '', '', '2019-11-28 23:58:34', '2019-11-28 20:58:34', '', 39, 'http://shef.ru/wp-content/uploads/2019/11/hit2.fw_.png', 0, 'attachment', 'image/png', 0),
(43, 1, '2019-11-28 23:58:35', '2019-11-28 20:58:35', '', 'hit3.fw', '', 'inherit', 'open', 'closed', '', 'hit3-fw', '', '', '2019-11-28 23:58:35', '2019-11-28 20:58:35', '', 39, 'http://shef.ru/wp-content/uploads/2019/11/hit3.fw_.png', 0, 'attachment', 'image/png', 0),
(44, 1, '2019-11-28 23:58:37', '2019-11-28 20:58:37', '', 'hit4.fw', '', 'inherit', 'open', 'closed', '', 'hit4-fw', '', '', '2019-11-28 23:58:37', '2019-11-28 20:58:37', '', 39, 'http://shef.ru/wp-content/uploads/2019/11/hit4.fw_.png', 0, 'attachment', 'image/png', 0),
(45, 1, '2019-11-28 23:58:38', '2019-11-28 20:58:38', '', 'hit5.fw', '', 'inherit', 'open', 'closed', '', 'hit5-fw', '', '', '2019-11-28 23:58:38', '2019-11-28 20:58:38', '', 39, 'http://shef.ru/wp-content/uploads/2019/11/hit5.fw_.png', 0, 'attachment', 'image/png', 0),
(46, 1, '2019-11-28 23:58:39', '2019-11-28 20:58:39', '', 'hit6.fw', '', 'inherit', 'open', 'closed', '', 'hit6-fw', '', '', '2019-11-28 23:58:39', '2019-11-28 20:58:39', '', 39, 'http://shef.ru/wp-content/uploads/2019/11/hit6.fw_.png', 0, 'attachment', 'image/png', 0),
(47, 1, '2019-11-29 00:01:39', '2019-11-28 21:01:39', '', 'Изысканнный', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'izyskannnyj', '', '', '2019-11-29 00:22:28', '2019-11-28 21:22:28', '', 0, 'http://shef.ru/?post_type=product&#038;p=47', 0, 'product', '', 0),
(48, 1, '2019-11-29 00:03:26', '2019-11-28 21:03:26', '', 'Сытный', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'sytnyj', '', '', '2019-11-29 00:21:11', '2019-11-28 21:21:11', '', 0, 'http://shef.ru/?post_type=product&#038;p=48', 0, 'product', '', 0),
(50, 1, '2019-11-29 00:09:55', '2019-11-28 21:09:55', '', 'Главная', '', 'inherit', 'closed', 'closed', '', '7-revision-v1', '', '', '2019-11-29 00:09:55', '2019-11-28 21:09:55', '', 7, 'http://shef.ru/2019/11/29/7-revision-v1/', 0, 'revision', '', 0),
(51, 0, '2019-11-28 22:18:21', '2019-11-28 22:18:21', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de0bfaf8e01d3.85633148-3Dt63LasyEEWnT26rl9szxiD3La660QC', '', '', '2019-11-29 09:50:23', '2019-11-29 06:50:23', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=51', 0, 'scheduled-action', '', 3),
(52, 1, '2019-11-29 00:21:43', '2019-11-28 21:21:43', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et soluta quasi id impedit molestiae temporibus quam aliquid vitae, neque, omnis odio iure fugiat, earum ipsum quibusdam dolorum commodi repellat hic!</div>\r\n<div>Nostrum repellendus praesentium quas perferendis sed corrupti sit accusamus, atque temporibus maiores in iusto doloremque delectus dignissimos quidem. Sequi distinctio, commodi voluptate odit minus magnam vero praesentium, repellat nostrum saepe!</div>\r\n<div>Debitis, ipsum. Pariatur, hic! Quas praesentium expedita eius qui laudantium, numquam dolores soluta dolore ea vero et facilis labore. Id possimus, tenetur omnis ipsa obcaecati delectus voluptates laboriosam accusantium unde?</div>\r\n<div>Impedit omnis quia quibusdam cum, veniam facere modi vitae fuga, optio eum nisi deserunt quas nulla soluta reiciendis eligendi enim adipisci commodi officiis sapiente explicabo eaque error quisquam perspiciatis! Sit.</div>\r\n<div>Quasi officiis cumque sed, harum optio dolorum unde sunt, tempore repellendus nesciunt, voluptate ratione rem, voluptates placeat atque repellat temporibus perferendis laudantium expedita sequi error dolor minus officia libero architecto?</div>', 'Ассорти 2', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'assorti-2', '', '', '2019-11-29 21:05:19', '2019-11-29 18:05:19', '', 0, 'http://shef.ru/?post_type=product&#038;p=52', 0, 'product', '', 0),
(53, 1, '2019-11-29 00:22:45', '2019-11-28 21:22:45', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et soluta quasi id impedit molestiae temporibus quam aliquid vitae, neque, omnis odio iure fugiat, earum ipsum quibusdam dolorum commodi repellat hic!</div>\r\n<div>Nostrum repellendus praesentium quas perferendis sed corrupti sit accusamus, atque temporibus maiores in iusto doloremque delectus dignissimos quidem. Sequi distinctio, commodi voluptate odit minus magnam vero praesentium, repellat nostrum saepe!</div>\r\n<div>Debitis, ipsum. Pariatur, hic! Quas praesentium expedita eius qui laudantium, numquam dolores soluta dolore ea vero et facilis labore. Id possimus, tenetur omnis ipsa obcaecati delectus voluptates laboriosam accusantium unde?</div>\r\n<div>Impedit omnis quia quibusdam cum, veniam facere modi vitae fuga, optio eum nisi deserunt quas nulla soluta reiciendis eligendi enim adipisci commodi officiis sapiente explicabo eaque error quisquam perspiciatis! Sit.</div>\r\n<div>Quasi officiis cumque sed, harum optio dolorum unde sunt, tempore repellendus nesciunt, voluptate ratione rem, voluptates placeat atque repellat temporibus perferendis laudantium expedita sequi error dolor minus officia libero architecto?</div>', 'Идеальный завтрак 2', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'idealnyj-zavtrak-2', '', '', '2019-11-29 21:05:14', '2019-11-29 18:05:14', '', 0, 'http://shef.ru/?post_type=product&#038;p=53', 0, 'product', '', 0),
(54, 1, '2019-11-29 00:23:27', '2019-11-28 21:23:27', '', 'Сытный 2', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'sytnyj-2', '', '', '2019-11-29 00:23:36', '2019-11-28 21:23:36', '', 0, 'http://shef.ru/?post_type=product&#038;p=54', 0, 'product', '', 0),
(55, 1, '2019-11-29 00:23:52', '2019-11-28 21:23:52', '', 'Изысканнный 2', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'izyskannnyj-2', '', '', '2019-11-29 00:24:18', '2019-11-28 21:24:18', '', 0, 'http://shef.ru/?post_type=product&#038;p=55', 0, 'product', '', 0),
(56, 1, '2019-11-29 00:23:57', '2019-11-28 21:23:57', '', 'Мини 2', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'mini-2', '', '', '2019-11-29 20:08:37', '2019-11-29 17:08:37', '', 0, 'http://shef.ru/?post_type=product&#038;p=56', 0, 'product', '', 0),
(57, 0, '2019-11-29 07:50:23', '2019-11-29 07:50:23', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de0ce0fa3f7b5.19345896-9DVP7o703ILMVz5ZkyoJhQP1uVtEmuxK', '', '', '2019-11-29 10:51:43', '2019-11-29 07:51:43', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=57', 0, 'scheduled-action', '', 3),
(58, 0, '2019-11-29 08:51:43', '2019-11-29 08:51:43', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de0dc5f423ca0.82830118-cP88B9qsOMkRkQBiSligarVbnQ2WUXOy', '', '', '2019-11-29 11:52:47', '2019-11-29 08:52:47', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=58', 0, 'scheduled-action', '', 3),
(59, 1, '2019-11-29 11:01:15', '2019-11-29 08:01:15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'test article -1', '', 'publish', 'open', 'open', '', 'test-article-1', '', '', '2019-11-29 12:10:49', '2019-11-29 09:10:49', '', 0, 'http://shef.ru/?p=59', 0, 'post', '', 0),
(60, 1, '2019-11-29 11:01:16', '2019-11-29 08:01:16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'test article -2', '', 'publish', 'open', 'open', '', 'test-article-2', '', '', '2019-11-29 12:10:53', '2019-11-29 09:10:53', '', 0, 'http://shef.ru/?p=60', 0, 'post', '', 0),
(61, 1, '2019-11-29 11:01:11', '2019-11-29 08:01:11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'test article -4', '', 'publish', 'open', 'open', '', 'test-article-4', '', '', '2019-11-29 12:10:47', '2019-11-29 09:10:47', '', 0, 'http://shef.ru/?p=61', 0, 'post', '', 0),
(62, 1, '2019-11-29 11:01:19', '2019-11-29 08:01:19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'test article -3', '', 'publish', 'open', 'open', '', 'test-article-3', '', '', '2019-11-29 12:10:54', '2019-11-29 09:10:54', '', 0, 'http://shef.ru/?p=62', 0, 'post', '', 0),
(63, 1, '2019-11-29 11:01:11', '2019-11-29 08:01:11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'test article -4', '', 'inherit', 'closed', 'closed', '', '61-revision-v1', '', '', '2019-11-29 11:01:11', '2019-11-29 08:01:11', '', 61, 'http://shef.ru/2019/11/29/61-revision-v1/', 0, 'revision', '', 0),
(64, 1, '2019-11-29 11:01:15', '2019-11-29 08:01:15', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'test article -1', '', 'inherit', 'closed', 'closed', '', '59-revision-v1', '', '', '2019-11-29 11:01:15', '2019-11-29 08:01:15', '', 59, 'http://shef.ru/2019/11/29/59-revision-v1/', 0, 'revision', '', 0),
(65, 1, '2019-11-29 11:01:16', '2019-11-29 08:01:16', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'test article -2', '', 'inherit', 'closed', 'closed', '', '60-revision-v1', '', '', '2019-11-29 11:01:16', '2019-11-29 08:01:16', '', 60, 'http://shef.ru/2019/11/29/60-revision-v1/', 0, 'revision', '', 0),
(66, 1, '2019-11-29 11:01:19', '2019-11-29 08:01:19', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'test article -3', '', 'inherit', 'closed', 'closed', '', '62-revision-v1', '', '', '2019-11-29 11:01:19', '2019-11-29 08:01:19', '', 62, 'http://shef.ru/2019/11/29/62-revision-v1/', 0, 'revision', '', 0),
(68, 1, '2019-11-29 11:04:25', '2019-11-29 08:04:25', '', 'f1.fw', '', 'inherit', 'open', 'closed', '', 'f1-fw', '', '', '2019-11-29 11:04:25', '2019-11-29 08:04:25', '', 59, 'http://shef.ru/wp-content/uploads/2019/11/f1.fw_.png', 0, 'attachment', 'image/png', 0),
(69, 1, '2019-11-29 11:04:27', '2019-11-29 08:04:27', '', 'f2.fw', '', 'inherit', 'open', 'closed', '', 'f2-fw', '', '', '2019-11-29 11:04:27', '2019-11-29 08:04:27', '', 59, 'http://shef.ru/wp-content/uploads/2019/11/f2.fw_.png', 0, 'attachment', 'image/png', 0),
(70, 1, '2019-11-29 11:04:28', '2019-11-29 08:04:28', '', 'f3.fw', '', 'inherit', 'open', 'closed', '', 'f3-fw', '', '', '2019-11-29 11:04:28', '2019-11-29 08:04:28', '', 59, 'http://shef.ru/wp-content/uploads/2019/11/f3.fw_.png', 0, 'attachment', 'image/png', 0),
(71, 1, '2019-11-29 11:12:32', '2019-11-29 08:12:32', '<!-- wp:paragraph -->\n<p>Добро пожаловать в WordPress. Это ваша первая запись. Отредактируйте или удалите ее, затем начинайте создавать!</p>\n<!-- /wp:paragraph -->', 'Привет, мир!', '', 'inherit', 'closed', 'closed', '', '1-revision-v1', '', '', '2019-11-29 11:12:32', '2019-11-29 08:12:32', '', 1, 'http://shef.ru/2019/11/29/1-revision-v1/', 0, 'revision', '', 0),
(72, 0, '2019-11-29 09:52:47', '2019-11-29 09:52:47', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de0ea8774a248.46652172-ls98WsbJjMZEyrblrVHDkiMEByGHauJH', '', '', '2019-11-29 12:53:11', '2019-11-29 09:53:11', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=72', 0, 'scheduled-action', '', 3),
(73, 0, '2019-11-29 10:53:11', '2019-11-29 10:53:11', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de0f9039000a5.96012756-6lf6VLTOpJf4DaUnK5IxsIeLN7MVrVHt', '', '', '2019-11-29 13:54:59', '2019-11-29 10:54:59', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=73', 0, 'scheduled-action', '', 3);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(74, 1, '2019-11-29 13:08:50', '2019-11-29 10:08:50', '<div class=\"wrapper relative\">\n    <a href=\"cart.html\" class=\"mini_cart r desktop\"><span class=\"count\">2</span></a>\n<div class=\"dost_left\">\n            Все заказы оформляются на сайте или по телефону:\n8 (800) 000-00-00\n<div class=\"inf_dost\">\n\nЧастные заказы <span>(до 10 сетов)</span> подтверждаются\n<span>за 24 часа</span> с момента оформления заявки.\n\nКорпоративные заказы <span>(от 10 сетов)</span> подтверждаем <span>за 48 часов</span> с момента оформления заявки.\n\n</div>\nБольшие заказы готовим и доставляем по предоплате.\nПозвоните по телефону: 8 (800) 000-00-00. Мы постараемся сделать все возможное, чтобы реализовать ваш заказ\n<div class=\"min_sum\">\n                Мин. сумма заказа для Москвы - 5000 <span class=\"ruble\"></span>\nМин. сумма заказа для МО - 10 000 <span class=\"ruble\"></span></div>\nДоставка осуществляется в специальных контейнерах самыми быстрыми курьерами.\n<div class=\"min_sum m30\">\n                В пределах МКАД - 0 <span class=\"ruble\"></span>\nЗа пределами МКАД - 300 <span class=\"ruble\"></span></div>\n<div class=\"samovivoz\">\n                Забери меня сам и получи - 10% на любой заказ!</div>\n</div>\n<div class=\"dost_right\">\n<div class=\"ttl_d\">Этапы доставки:</div>\n<div class=\"steps\">\n<div class=\"step1\">Вы оставляете заявку на сайте;</div>\n<div class=\"step2\">Наш консультант связывается для уточнения всех деталей;</div>\n<div class=\"step3\">В указанную дату и время заказ будет доставлен по адресу.</div>\n</div>\n<a class=\"green_btn\">Задать вопрос</a>\n\n</div>\n<div class=\"clb\"></div>\n</div>', 'Доставка', '', 'inherit', 'closed', 'closed', '', '13-revision-v1', '', '', '2019-11-29 13:08:50', '2019-11-29 10:08:50', '', 13, 'http://shef.ru/2019/11/29/13-revision-v1/', 0, 'revision', '', 0),
(75, 0, '2019-11-29 11:54:59', '2019-11-29 11:54:59', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de10718dd94d1.38017842-EYVLElxbUW770hcmsdqhfgWZEWoxoeOA', '', '', '2019-11-29 14:55:04', '2019-11-29 11:55:04', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=75', 0, 'scheduled-action', '', 3),
(76, 1, '2019-11-29 14:41:08', '2019-11-29 11:41:08', '151лод15ол1д5ол1до1д5олд', 'Главная', '', 'inherit', 'closed', 'closed', '', '7-revision-v1', '', '', '2019-11-29 14:41:08', '2019-11-29 11:41:08', '', 7, 'http://shef.ru/2019/11/29/7-revision-v1/', 0, 'revision', '', 0),
(77, 1, '2019-11-29 14:52:44', '2019-11-29 11:52:44', '', 'Главная', '', 'inherit', 'closed', 'closed', '', '7-revision-v1', '', '', '2019-11-29 14:52:44', '2019-11-29 11:52:44', '', 7, 'http://shef.ru/2019/11/29/7-revision-v1/', 0, 'revision', '', 0),
(78, 0, '2019-11-29 12:55:04', '2019-11-29 12:55:04', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de11547875171.34275328-XLugDHtnXrG9Y7W2Ae3vxZOgNP8bjESr', '', '', '2019-11-29 15:55:35', '2019-11-29 12:55:35', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=78', 0, 'scheduled-action', '', 3),
(79, 0, '2019-11-29 13:55:35', '2019-11-29 13:55:35', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de123b5815686.55899728-kUYbw0yQEbijqes7q9K7qJwr9ua7Kf9W', '', '', '2019-11-29 16:57:09', '2019-11-29 13:57:09', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=79', 0, 'scheduled-action', '', 3),
(80, 1, '2019-11-29 16:14:58', '2019-11-29 13:14:58', '<main>\n<div class=\"contacts\">\n<img alt=\"\" src=\"image/contacts/top_piz.png\" class=\"top_piz\">\n<div class=\"wrapper relative\">\n<div class=\"breadcrumbs_set\"><a href=\"index.html\">Главная</a> <span class=\"orange\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span> Контакты</div>\n<h1 class=\"ttl50\">Контакты</h1>\n<a href=\"cart.html\" class=\"mini_cart desktop\" style=\"margin-top: 280px;\"><span class=\"count\">2</span></a>\n<img class=\"img_shef1\" src=\"image/gif/2.gif\">\n<div class=\"my_cont\">\n            <a class=\"tel\" href=\"tel:+74950000000\">+7 (495) 000-00-00</a>\n<a href=\"mailto:vashemail@gmail.com\" class=\"email\">vashemail@gmail.com</a>\n<div class=\"my_soz\">\n                <a href=\"https://vk.com\"><i class=\"fa fa-vk\" aria-hidden=\"true\"></i></a>\n<a href=\"https://www.facebook.com\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>\n<a href=\"https://www.instagram.com\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></div>\n</div>\n</div>\n</div>\n<img alt=\"\" src=\"image/contacts/piz.png\" class=\"bot_piz\">\n\n</main>', 'Позвони Шефу', '', 'inherit', 'closed', 'closed', '', '15-revision-v1', '', '', '2019-11-29 16:14:58', '2019-11-29 13:14:58', '', 15, 'http://shef.ru/2019/11/29/15-revision-v1/', 0, 'revision', '', 0),
(81, 1, '2019-11-29 16:16:15', '2019-11-29 13:16:15', '<main>\n<div class=\"contacts\">\n<img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/contacts/top_piz.png\" class=\"top_piz\">\n<div class=\"wrapper relative\">\n<div class=\"breadcrumbs_set\"><a href=\"index.html\">Главная</a> <span class=\"orange\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span> Контакты</div>\n<h1 class=\"ttl50\">Контакты</h1>\n<a href=\"cart.html\" class=\"mini_cart desktop\" style=\"margin-top: 280px;\"><span class=\"count\">2</span></a>\n<img class=\"img_shef1\" src=\"/wp-content/themes/shef/verstka/image/gif/2.gif\">\n<div class=\"my_cont\">\n            <a class=\"tel\" href=\"tel:+74950000000\">+7 (495) 000-00-00</a>\n<a href=\"mailto:vashemail@gmail.com\" class=\"email\">vashemail@gmail.com</a>\n<div class=\"my_soz\">\n                <a href=\"https://vk.com\"><i class=\"fa fa-vk\" aria-hidden=\"true\"></i></a>\n<a href=\"https://www.facebook.com\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>\n<a href=\"https://www.instagram.com\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></div>\n</div>\n</div>\n</div>\n<img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/contacts/piz.png\" class=\"bot_piz\">\n\n</main>', 'Позвони Шефу', '', 'inherit', 'closed', 'closed', '', '15-revision-v1', '', '', '2019-11-29 16:16:15', '2019-11-29 13:16:15', '', 15, 'http://shef.ru/2019/11/29/15-revision-v1/', 0, 'revision', '', 0),
(82, 0, '2019-11-29 14:57:09', '2019-11-29 14:57:09', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de131c89bbf19.28605511-cnKS5liffpmVzQ84NNH1MMhWd75BQhT6', '', '', '2019-11-29 17:57:12', '2019-11-29 14:57:12', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=82', 0, 'scheduled-action', '', 3),
(83, 1, '2019-11-29 17:24:20', '0000-00-00 00:00:00', '', 'AUTO-DRAFT', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2019-11-29 17:24:20', '0000-00-00 00:00:00', '', 0, 'http://shef.ru/?post_type=product&p=83', 0, 'product', '', 0),
(84, 0, '2019-11-29 15:57:12', '2019-11-29 15:57:12', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de13fde707c76.81401211-TwuG0t61Yfy21hQgjh3dUGhiWO67UJVk', '', '', '2019-11-29 18:57:18', '2019-11-29 15:57:18', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=84', 0, 'scheduled-action', '', 3),
(85, 0, '2019-11-29 16:57:18', '2019-11-29 16:57:18', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de14df37438c1.41518613-dMDbESS9RIWDU0rTModyk6Y0ShrIdpXg', '', '', '2019-11-29 19:57:23', '2019-11-29 16:57:23', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=85', 0, 'scheduled-action', '', 3),
(86, 0, '2019-11-29 17:57:23', '2019-11-29 17:57:23', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de15c090dd8c0.88179187-0ScxNPimV7ZGu14GLLpGENpMD5r0Q7Fd', '', '', '2019-11-29 20:57:29', '2019-11-29 17:57:29', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=86', 0, 'scheduled-action', '', 3),
(87, 0, '2019-11-29 18:57:29', '2019-11-29 18:57:29', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de16a760f0ad8.84527034-D7vFsH8Zo00nUUp3GLFFfCUw6upOoiuv', '', '', '2019-11-29 21:59:02', '2019-11-29 18:59:02', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=87', 0, 'scheduled-action', '', 3),
(88, 1, '2019-11-29 21:09:13', '2019-11-29 18:09:13', '', 'Order &ndash; Ноябрь 29, 2019 @ 09:09 ПП', '', 'wc-pending', 'closed', 'closed', '', 'zakaz', '', '', '2019-11-29 21:09:24', '2019-11-29 18:09:24', '', 0, 'http://shef.ru/?post_type=shop_order&#038;p=88', 0, 'shop_order', '', 0),
(89, 0, '2019-11-29 18:09:18', '2019-11-29 18:09:18', '[88]', 'wc-admin_import_order', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de15ed4896829.39619575-hJ8ZFMSjYzDUIOsQqCmJdBmCCDBgyMbl', '', '', '2019-11-29 21:09:24', '2019-11-29 18:09:24', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=89', 30, 'scheduled-action', '', 3),
(90, 0, '2019-11-29 18:09:29', '2019-11-29 18:09:29', '[88]', 'wc-admin_import_order', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de15f1d9e7982.01494941-pPtRJYyaqcMCDFSaeo529GmpJa2AQlfp', '', '', '2019-11-29 21:10:37', '2019-11-29 18:10:37', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=90', 30, 'scheduled-action', '', 3),
(91, 1, '2019-11-29 21:23:26', '2019-11-29 18:23:26', '', 'Мини 2-1', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'mini-2-1', '', '', '2019-11-29 21:23:50', '2019-11-29 18:23:50', '', 0, 'http://shef.ru/?post_type=product&#038;p=91', 0, 'product', '', 0),
(92, 1, '2019-11-29 21:24:03', '2019-11-29 18:24:03', '', 'Изысканнный 2-1', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'izyskannnyj-2-1', '', '', '2019-11-29 21:24:29', '2019-11-29 18:24:29', '', 0, 'http://shef.ru/?post_type=product&#038;p=92', 0, 'product', '', 0),
(93, 1, '2019-11-29 21:24:05', '2019-11-29 18:24:05', '', 'Сытный 2-1', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'sytnyj-2-1', '', '', '2019-11-29 21:24:34', '2019-11-29 18:24:34', '', 0, 'http://shef.ru/?post_type=product&#038;p=93', 0, 'product', '', 0),
(94, 1, '2019-11-29 21:24:08', '2019-11-29 18:24:08', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et soluta quasi id impedit molestiae temporibus quam aliquid vitae, neque, omnis odio iure fugiat, earum ipsum quibusdam dolorum commodi repellat hic!</div>\r\n<div>Nostrum repellendus praesentium quas perferendis sed corrupti sit accusamus, atque temporibus maiores in iusto doloremque delectus dignissimos quidem. Sequi distinctio, commodi voluptate odit minus magnam vero praesentium, repellat nostrum saepe!</div>\r\n<div>Debitis, ipsum. Pariatur, hic! Quas praesentium expedita eius qui laudantium, numquam dolores soluta dolore ea vero et facilis labore. Id possimus, tenetur omnis ipsa obcaecati delectus voluptates laboriosam accusantium unde?</div>\r\n<div>Impedit omnis quia quibusdam cum, veniam facere modi vitae fuga, optio eum nisi deserunt quas nulla soluta reiciendis eligendi enim adipisci commodi officiis sapiente explicabo eaque error quisquam perspiciatis! Sit.</div>\r\n<div>Quasi officiis cumque sed, harum optio dolorum unde sunt, tempore repellendus nesciunt, voluptate ratione rem, voluptates placeat atque repellat temporibus perferendis laudantium expedita sequi error dolor minus officia libero architecto?</div>', 'Идеальный завтрак 2-1', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'idealnyj-zavtrak-2-1', '', '', '2019-11-29 21:24:41', '2019-11-29 18:24:41', '', 0, 'http://shef.ru/?post_type=product&#038;p=94', 0, 'product', '', 0),
(95, 1, '2019-11-29 21:24:10', '2019-11-29 18:24:10', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et soluta quasi id impedit molestiae temporibus quam aliquid vitae, neque, omnis odio iure fugiat, earum ipsum quibusdam dolorum commodi repellat hic!</div>\r\n<div>Nostrum repellendus praesentium quas perferendis sed corrupti sit accusamus, atque temporibus maiores in iusto doloremque delectus dignissimos quidem. Sequi distinctio, commodi voluptate odit minus magnam vero praesentium, repellat nostrum saepe!</div>\r\n<div>Debitis, ipsum. Pariatur, hic! Quas praesentium expedita eius qui laudantium, numquam dolores soluta dolore ea vero et facilis labore. Id possimus, tenetur omnis ipsa obcaecati delectus voluptates laboriosam accusantium unde?</div>\r\n<div>Impedit omnis quia quibusdam cum, veniam facere modi vitae fuga, optio eum nisi deserunt quas nulla soluta reiciendis eligendi enim adipisci commodi officiis sapiente explicabo eaque error quisquam perspiciatis! Sit.</div>\r\n<div>Quasi officiis cumque sed, harum optio dolorum unde sunt, tempore repellendus nesciunt, voluptate ratione rem, voluptates placeat atque repellat temporibus perferendis laudantium expedita sequi error dolor minus officia libero architecto?</div>', 'Ассорти 2-1', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'assorti-2-1', '', '', '2019-11-29 21:24:48', '2019-11-29 18:24:48', '', 0, 'http://shef.ru/?post_type=product&#038;p=95', 0, 'product', '', 0),
(96, 1, '2019-11-29 21:24:14', '2019-11-29 18:24:14', '', 'Сытный 1', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'sytnyj-1', '', '', '2019-11-29 21:24:53', '2019-11-29 18:24:53', '', 0, 'http://shef.ru/?post_type=product&#038;p=96', 0, 'product', '', 0),
(97, 1, '2019-11-29 21:25:31', '2019-11-29 18:25:31', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et soluta quasi id impedit molestiae temporibus quam aliquid vitae, neque, omnis odio iure fugiat, earum ipsum quibusdam dolorum commodi repellat hic!</div>\n<div>Nostrum repellendus praesentium quas perferendis sed corrupti sit accusamus, atque temporibus maiores in iusto doloremque delectus dignissimos quidem. Sequi distinctio, commodi voluptate odit minus magnam vero praesentium, repellat nostrum saepe!</div>\n<div>Debitis, ipsum. Pariatur, hic! Quas praesentium expedita eius qui laudantium, numquam dolores soluta dolore ea vero et facilis labore. Id possimus, tenetur omnis ipsa obcaecati delectus voluptates laboriosam accusantium unde?</div>\n<div>Impedit omnis quia quibusdam cum, veniam facere modi vitae fuga, optio eum nisi deserunt quas nulla soluta reiciendis eligendi enim adipisci commodi officiis sapiente explicabo eaque error quisquam perspiciatis! Sit.</div>\n<div>Quasi officiis cumque sed, harum optio dolorum unde sunt, tempore repellendus nesciunt, voluptate ratione rem, voluptates placeat atque repellat temporibus perferendis laudantium expedita sequi error dolor minus officia libero architecto?</div>', 'Мини', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'inherit', 'closed', 'closed', '', '39-autosave-v1', '', '', '2019-11-29 21:25:31', '2019-11-29 18:25:31', '', 39, 'http://shef.ru/2019/11/29/39-autosave-v1/', 0, 'revision', '', 0),
(98, 1, '2019-11-29 21:25:54', '2019-11-29 18:25:54', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et soluta quasi id impedit molestiae temporibus quam aliquid vitae, neque, omnis odio iure fugiat, earum ipsum quibusdam dolorum commodi repellat hic!</div>\r\n<div>Nostrum repellendus praesentium quas perferendis sed corrupti sit accusamus, atque temporibus maiores in iusto doloremque delectus dignissimos quidem. Sequi distinctio, commodi voluptate odit minus magnam vero praesentium, repellat nostrum saepe!</div>\r\n<div>Debitis, ipsum. Pariatur, hic! Quas praesentium expedita eius qui laudantium, numquam dolores soluta dolore ea vero et facilis labore. Id possimus, tenetur omnis ipsa obcaecati delectus voluptates laboriosam accusantium unde?</div>\r\n<div>Impedit omnis quia quibusdam cum, veniam facere modi vitae fuga, optio eum nisi deserunt quas nulla soluta reiciendis eligendi enim adipisci commodi officiis sapiente explicabo eaque error quisquam perspiciatis! Sit.</div>\r\n<div>Quasi officiis cumque sed, harum optio dolorum unde sunt, tempore repellendus nesciunt, voluptate ratione rem, voluptates placeat atque repellat temporibus perferendis laudantium expedita sequi error dolor minus officia libero architecto?</div>', 'Ассорти 1', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'assorti-1', '', '', '2019-11-29 21:26:22', '2019-11-29 18:26:22', '', 0, 'http://shef.ru/?post_type=product&#038;p=98', 0, 'product', '', 0),
(99, 1, '2019-11-29 21:25:56', '2019-11-29 18:25:56', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et soluta quasi id impedit molestiae temporibus quam aliquid vitae, neque, omnis odio iure fugiat, earum ipsum quibusdam dolorum commodi repellat hic!</div>\r\n<div>Nostrum repellendus praesentium quas perferendis sed corrupti sit accusamus, atque temporibus maiores in iusto doloremque delectus dignissimos quidem. Sequi distinctio, commodi voluptate odit minus magnam vero praesentium, repellat nostrum saepe!</div>\r\n<div>Debitis, ipsum. Pariatur, hic! Quas praesentium expedita eius qui laudantium, numquam dolores soluta dolore ea vero et facilis labore. Id possimus, tenetur omnis ipsa obcaecati delectus voluptates laboriosam accusantium unde?</div>\r\n<div>Impedit omnis quia quibusdam cum, veniam facere modi vitae fuga, optio eum nisi deserunt quas nulla soluta reiciendis eligendi enim adipisci commodi officiis sapiente explicabo eaque error quisquam perspiciatis! Sit.</div>\r\n<div>Quasi officiis cumque sed, harum optio dolorum unde sunt, tempore repellendus nesciunt, voluptate ratione rem, voluptates placeat atque repellat temporibus perferendis laudantium expedita sequi error dolor minus officia libero architecto?</div>', 'Идеальный завтрак 1', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'idealnyj-zavtrak-1', '', '', '2019-11-29 21:26:29', '2019-11-29 18:26:29', '', 0, 'http://shef.ru/?post_type=product&#038;p=99', 0, 'product', '', 0),
(100, 1, '2019-11-29 21:25:58', '2019-11-29 18:25:58', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et soluta quasi id impedit molestiae temporibus quam aliquid vitae, neque, omnis odio iure fugiat, earum ipsum quibusdam dolorum commodi repellat hic!</div>\r\n<div>Nostrum repellendus praesentium quas perferendis sed corrupti sit accusamus, atque temporibus maiores in iusto doloremque delectus dignissimos quidem. Sequi distinctio, commodi voluptate odit minus magnam vero praesentium, repellat nostrum saepe!</div>\r\n<div>Debitis, ipsum. Pariatur, hic! Quas praesentium expedita eius qui laudantium, numquam dolores soluta dolore ea vero et facilis labore. Id possimus, tenetur omnis ipsa obcaecati delectus voluptates laboriosam accusantium unde?</div>\r\n<div>Impedit omnis quia quibusdam cum, veniam facere modi vitae fuga, optio eum nisi deserunt quas nulla soluta reiciendis eligendi enim adipisci commodi officiis sapiente explicabo eaque error quisquam perspiciatis! Sit.</div>\r\n<div>Quasi officiis cumque sed, harum optio dolorum unde sunt, tempore repellendus nesciunt, voluptate ratione rem, voluptates placeat atque repellat temporibus perferendis laudantium expedita sequi error dolor minus officia libero architecto?</div>', 'Мини 1', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'mini-1', '', '', '2019-11-29 21:26:36', '2019-11-29 18:26:36', '', 0, 'http://shef.ru/?post_type=product&#038;p=100', 0, 'product', '', 0),
(101, 1, '2019-11-29 21:26:01', '2019-11-29 18:26:01', '', 'Изысканнный 1', '— Круассан с ростбифом — 10 шт. по 35 г Ассорти мини-салатов — 15 шт.:...', 'publish', 'closed', 'closed', '', 'izyskannnyj-1', '', '', '2019-11-29 21:26:42', '2019-11-29 18:26:42', '', 0, 'http://shef.ru/?post_type=product&#038;p=101', 0, 'product', '', 0),
(102, 0, '2019-11-29 19:59:02', '2019-11-29 19:59:02', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de178d309b150.58353103-pXcwOFRoNUFkni8bowk9044vxgg33oyX', '', '', '2019-11-29 23:00:19', '2019-11-29 20:00:19', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=102', 0, 'scheduled-action', '', 3),
(103, 0, '2019-11-29 21:00:19', '2019-11-29 21:00:19', '[]', 'wc_admin_unsnooze_admin_notes', '', 'publish', 'open', 'closed', '', 'scheduled-action-5de1870f43c268.37397561-CiS0GkxEzmLMAorokqR7zw9OkOkCGhLI', '', '', '2019-11-30 00:01:03', '2019-11-29 21:01:03', '', 0, 'http://shef.ru/?post_type=scheduled-action&#038;p=103', 0, 'scheduled-action', '', 3),
(104, 1, '2019-11-29 23:51:46', '2019-11-29 20:51:46', '<div class=\"contacts\">\n<img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/contacts/top_piz.png\" class=\"top_piz\">\n<div class=\"wrapper relative\">\n<div class=\"breadcrumbs_set\"><a href=\"index.html\">Главная</a> <span class=\"orange\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span> Контакты</div>\n<h1 class=\"ttl50\">Контакты</h1>\n<a href=\"cart.html\" class=\"mini_cart desktop\" style=\"margin-top: 280px;\"><span class=\"count\">2</span></a>\n<img class=\"img_shef1\" src=\"/wp-content/themes/shef/verstka/image/gif/2.gif\">\n<div class=\"my_cont\">\n            <a class=\"tel\" href=\"tel:+74950000000\">+7 (495) 000-00-00</a>\n<a href=\"mailto:vashemail@gmail.com\" class=\"email\">vashemail@gmail.com</a>\n<div class=\"my_soz\">\n                <a href=\"https://vk.com\"><i class=\"fa fa-vk\" aria-hidden=\"true\"></i></a>\n<a href=\"https://www.facebook.com\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>\n<a href=\"https://www.instagram.com\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></div>\n</div>\n</div>\n</div>\n<img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/contacts/piz.png\" class=\"bot_piz\">', 'Позвони Шефу', '', 'inherit', 'closed', 'closed', '', '15-revision-v1', '', '', '2019-11-29 23:51:46', '2019-11-29 20:51:46', '', 15, 'http://shef.ru/2019/11/29/15-revision-v1/', 0, 'revision', '', 0),
(105, 1, '2019-11-29 23:55:15', '2019-11-29 20:55:15', '<div class=\"contacts\">\n<img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/contacts/top_piz.png\" class=\"top_piz\">\n<div class=\"wrapper relative\">\n<div class=\"breadcrumbs_set\"><a href=\"index.html\">Главная</a> <span class=\"orange\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span> Контакты</div>\n<h1 class=\"ttl50\">Контакты</h1>\n<a href=\"cart.html\" class=\"mini_cart desktop\" style=\"margin-top: 280px;\"><span class=\"count\">2</span></a>\n<img class=\"img_shef1\" src=\"/wp-content/themes/shef/verstka/image/gif/2.gif\">\n<div class=\"my_cont\">\n            <a class=\"tel\" href=\"tel:+74950000000\">+7 (495) 000-00-00</a>\n<a href=\"mailto:vashemail@gmail.com\" class=\"email\">vashemail@gmail.com</a>\n<div class=\"my_soz\"><a href=\"https://vk.com\"><i class=\"fa fa-vk\" aria-hidden=\"true\"></i></a><a href=\"https://www.facebook.com\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a><a href=\"https://www.instagram.com\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></div>\n</div>\n</div>\n</div>\n<img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/contacts/piz.png\" class=\"bot_piz\">', 'Позвони Шефу', '', 'inherit', 'closed', 'closed', '', '15-revision-v1', '', '', '2019-11-29 23:55:15', '2019-11-29 20:55:15', '', 15, 'http://shef.ru/2019/11/29/15-revision-v1/', 0, 'revision', '', 0),
(106, 1, '2019-11-29 23:58:07', '2019-11-29 20:58:07', '<div class=\"contacts\"><img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/contacts/top_piz.png\" class=\"top_piz\">\n<div class=\"wrapper relative\">\n<div class=\"breadcrumbs_set\"><a href=\"index.html\">Главная</a> <span class=\"orange\"><i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i></span> Контакты</div>\n<h1 class=\"ttl50\">Контакты</h1>\n<a href=\"cart.html\" class=\"mini_cart desktop\" style=\"margin-top: 280px;\"><span class=\"count\">2</span></a><img class=\"img_shef1\" src=\"/wp-content/themes/shef/verstka/image/gif/2.gif\">\n<div class=\"my_cont\"> <a class=\"tel\" href=\"tel:+74950000000\">+7 (495) 000-00-00</a><a href=\"mailto:vashemail@gmail.com\" class=\"email\">vashemail@gmail.com</a>\n<div class=\"my_soz\"><a href=\"https://vk.com\"><i class=\"fa fa-vk\" aria-hidden=\"true\"></i></a><a href=\"https://www.facebook.com\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a><a href=\"https://www.instagram.com\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a></div>\n</div>\n</div>\n</div>\n<img alt=\"\" src=\"/wp-content/themes/shef/verstka/image/contacts/piz.png\" class=\"bot_piz\">', 'Позвони Шефу', '', 'inherit', 'closed', 'closed', '', '15-revision-v1', '', '', '2019-11-29 23:58:07', '2019-11-29 20:58:07', '', 15, 'http://shef.ru/2019/11/29/15-revision-v1/', 0, 'revision', '', 0),
(107, 0, '2019-11-29 22:01:03', '2019-11-29 22:01:03', '[]', 'wc_admin_unsnooze_admin_notes', '', 'pending', 'open', 'closed', '', '', '', '', '2019-11-29 22:01:03', '2019-11-29 22:01:03', '', 0, 'http://shef.ru/?post_type=scheduled-action&p=107', 0, 'scheduled-action', '', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_termmeta`
--

INSERT INTO `wp_termmeta` (`meta_id`, `term_id`, `meta_key`, `meta_value`) VALUES
(1, 15, 'product_count_product_cat', '0'),
(2, 19, 'product_count_product_tag', '20'),
(3, 20, 'order', '0'),
(4, 20, 'display_type', ''),
(5, 20, 'thumbnail_id', '0'),
(6, 21, 'order', '0'),
(7, 21, 'display_type', ''),
(8, 21, 'thumbnail_id', '0'),
(9, 22, 'order', '0'),
(10, 22, 'display_type', ''),
(11, 22, 'thumbnail_id', '0'),
(12, 23, 'order', '0'),
(13, 23, 'display_type', ''),
(14, 23, 'thumbnail_id', '0'),
(15, 24, 'order', '0'),
(16, 24, 'display_type', ''),
(17, 24, 'thumbnail_id', '0'),
(18, 25, 'order', '0'),
(19, 25, 'display_type', ''),
(20, 25, 'thumbnail_id', '0'),
(21, 26, 'order', '0'),
(22, 26, 'display_type', ''),
(23, 26, 'thumbnail_id', '0'),
(24, 27, 'order', '0'),
(25, 27, 'display_type', ''),
(26, 27, 'thumbnail_id', '0'),
(27, 26, 'product_count_product_cat', '4'),
(28, 23, 'product_count_product_cat', '4'),
(29, 24, 'product_count_product_cat', '4'),
(30, 21, 'product_count_product_cat', '4'),
(31, 27, 'product_count_product_cat', '4'),
(32, 25, 'product_count_product_cat', '4'),
(33, 20, 'product_count_product_cat', '8'),
(34, 22, 'product_count_product_cat', '4');

-- --------------------------------------------------------

--
-- Структура таблиці `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Без рубрики', '%d0%b1%d0%b5%d0%b7-%d1%80%d1%83%d0%b1%d1%80%d0%b8%d0%ba%d0%b8', 0),
(2, 'simple', 'simple', 0),
(3, 'grouped', 'grouped', 0),
(4, 'variable', 'variable', 0),
(5, 'external', 'external', 0),
(6, 'exclude-from-search', 'exclude-from-search', 0),
(7, 'exclude-from-catalog', 'exclude-from-catalog', 0),
(8, 'featured', 'featured', 0),
(9, 'outofstock', 'outofstock', 0),
(10, 'rated-1', 'rated-1', 0),
(11, 'rated-2', 'rated-2', 0),
(12, 'rated-3', 'rated-3', 0),
(13, 'rated-4', 'rated-4', 0),
(14, 'rated-5', 'rated-5', 0),
(15, 'Uncategorized', 'uncategorized', 0),
(16, 'wc-admin-notes', 'wc-admin-notes', 0),
(17, 'woocommerce-db-updates', 'woocommerce-db-updates', 0),
(18, 'page_menu', 'page_menu', 0),
(19, 'bestsellers', 'bestsellers', 0),
(20, 'Фирменные сеты от шефа', 'firmennye-sety-ot-shefa', 0),
(21, 'Кофе-брейк', 'kofe-brejk', 0),
(22, 'Фуршет', 'furshet', 0),
(23, 'Банкет', 'banket', 0),
(24, 'Барбекю', 'barbekyu', 0),
(25, 'Собери свой сет', 'soberi-svoj-set', 0),
(26, 'Акции', 'akcii', 0),
(27, 'Праздничные сеты', 'prazdnichnye-sety', 0),
(28, 'post-format-aside', 'post-format-aside', 0),
(29, 'Записи на главной в слайдере', 'home_article_slider', 0),
(30, 'Записи на главной одна', 'home_article_single', 0),
(31, 'wc-admin-data', 'wc-admin-data', 0);

-- --------------------------------------------------------

--
-- Структура таблиці `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(1, 29, 0),
(19, 2, 0),
(19, 6, 0),
(19, 7, 0),
(20, 16, 0),
(21, 17, 0),
(22, 17, 0),
(23, 16, 0),
(24, 18, 0),
(25, 18, 0),
(26, 18, 0),
(31, 16, 0),
(34, 2, 0),
(34, 19, 0),
(34, 26, 0),
(35, 16, 0),
(37, 2, 0),
(37, 19, 0),
(37, 20, 0),
(37, 22, 0),
(39, 2, 0),
(39, 19, 0),
(39, 20, 0),
(39, 25, 0),
(47, 2, 0),
(47, 19, 0),
(47, 21, 0),
(47, 27, 0),
(48, 2, 0),
(48, 19, 0),
(48, 23, 0),
(48, 24, 0),
(51, 16, 0),
(52, 2, 0),
(52, 19, 0),
(52, 26, 0),
(53, 2, 0),
(53, 19, 0),
(53, 20, 0),
(53, 22, 0),
(54, 2, 0),
(54, 19, 0),
(54, 23, 0),
(54, 24, 0),
(55, 2, 0),
(55, 19, 0),
(55, 21, 0),
(55, 27, 0),
(56, 2, 0),
(56, 19, 0),
(56, 20, 0),
(56, 25, 0),
(57, 16, 0),
(58, 16, 0),
(59, 28, 0),
(59, 30, 0),
(60, 29, 0),
(61, 30, 0),
(62, 29, 0),
(72, 16, 0),
(73, 16, 0),
(75, 16, 0),
(78, 16, 0),
(79, 16, 0),
(82, 16, 0),
(84, 16, 0),
(85, 16, 0),
(86, 16, 0),
(87, 16, 0),
(89, 31, 0),
(90, 31, 0),
(91, 2, 0),
(91, 19, 0),
(91, 20, 0),
(91, 25, 0),
(92, 2, 0),
(92, 19, 0),
(92, 21, 0),
(92, 27, 0),
(93, 2, 0),
(93, 19, 0),
(93, 23, 0),
(93, 24, 0),
(94, 2, 0),
(94, 19, 0),
(94, 20, 0),
(94, 22, 0),
(95, 2, 0),
(95, 19, 0),
(95, 26, 0),
(96, 2, 0),
(96, 19, 0),
(96, 23, 0),
(96, 24, 0),
(98, 2, 0),
(98, 19, 0),
(98, 26, 0),
(99, 2, 0),
(99, 19, 0),
(99, 20, 0),
(99, 22, 0),
(100, 2, 0),
(100, 19, 0),
(100, 20, 0),
(100, 25, 0),
(101, 2, 0),
(101, 19, 0),
(101, 21, 0),
(101, 27, 0),
(102, 16, 0),
(103, 16, 0),
(107, 16, 0);

-- --------------------------------------------------------

--
-- Структура таблиці `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 0),
(2, 2, 'product_type', '', 0, 20),
(3, 3, 'product_type', '', 0, 0),
(4, 4, 'product_type', '', 0, 0),
(5, 5, 'product_type', '', 0, 0),
(6, 6, 'product_visibility', '', 0, 0),
(7, 7, 'product_visibility', '', 0, 0),
(8, 8, 'product_visibility', '', 0, 0),
(9, 9, 'product_visibility', '', 0, 0),
(10, 10, 'product_visibility', '', 0, 0),
(11, 11, 'product_visibility', '', 0, 0),
(12, 12, 'product_visibility', '', 0, 0),
(13, 13, 'product_visibility', '', 0, 0),
(14, 14, 'product_visibility', '', 0, 0),
(15, 15, 'product_cat', '', 0, 0),
(16, 16, 'action-group', '', 0, 19),
(17, 17, 'action-group', '', 0, 2),
(18, 18, 'nav_menu', '', 0, 3),
(19, 19, 'product_tag', '', 0, 20),
(20, 20, 'product_cat', '', 0, 8),
(21, 21, 'product_cat', '', 0, 4),
(22, 22, 'product_cat', '', 0, 4),
(23, 23, 'product_cat', '', 0, 4),
(24, 24, 'product_cat', '', 0, 4),
(25, 25, 'product_cat', '', 0, 4),
(26, 26, 'product_cat', '', 0, 4),
(27, 27, 'product_cat', '', 0, 4),
(28, 28, 'post_format', '', 0, 1),
(29, 29, 'category', '', 0, 2),
(30, 30, 'category', '', 0, 2),
(31, 31, 'action-group', '', 0, 2);

-- --------------------------------------------------------

--
-- Структура таблиці `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'adminShef'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', ''),
(15, 1, 'show_welcome_panel', '1'),
(16, 1, 'session_tokens', 'a:1:{s:64:\"fa7a9bbe13415cf7ce4167a47fc409706a0bcbfc2bbe46ef04e21408e1be94a9\";a:4:{s:10:\"expiration\";i:1576158654;s:2:\"ip\";s:9:\"127.0.0.1\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/72.0.3626.109 Safari/537.36\";s:5:\"login\";i:1574949054;}}'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '4'),
(18, 1, 'community-events-location', 'a:1:{s:2:\"ip\";s:9:\"127.0.0.0\";}'),
(19, 1, '_woocommerce_tracks_anon_id', 'woo:Y7cbiW+1RUYslu+ukHuQSX75'),
(20, 1, 'wc_last_active', '1574985600'),
(21, 1, 'managenav-menuscolumnshidden', 'a:5:{i:0;s:11:\"link-target\";i:1;s:11:\"css-classes\";i:2;s:3:\"xfn\";i:3;s:11:\"description\";i:4;s:15:\"title-attribute\";}'),
(22, 1, 'metaboxhidden_nav-menus', 'a:5:{i:0;s:21:\"add-post-type-product\";i:1;s:12:\"add-post_tag\";i:2;s:15:\"add-post_format\";i:3;s:15:\"add-product_cat\";i:4;s:15:\"add-product_tag\";}'),
(23, 1, 'nav_menu_recently_edited', '18'),
(24, 1, 'closedpostboxes_product', 'a:0:{}'),
(25, 1, 'metaboxhidden_product', 'a:1:{i:0;s:7:\"slugdiv\";}'),
(26, 1, 'wp_user-settings', 'libraryContent=browse&editor=html'),
(27, 1, 'wp_user-settings-time', '1575050711'),
(28, 1, '_woocommerce_persistent_cart_1', 'a:1:{s:4:\"cart\";a:4:{s:32:\"b53b3a3d6ab90ce0268229151c9bde11\";a:11:{s:3:\"key\";s:32:\"b53b3a3d6ab90ce0268229151c9bde11\";s:10:\"product_id\";i:55;s:12:\"variation_id\";i:0;s:9:\"variation\";a:0:{}s:8:\"quantity\";i:2;s:9:\"data_hash\";s:32:\"b5c1d5ca8bae6d4896cf1807cdf763f0\";s:13:\"line_tax_data\";a:2:{s:8:\"subtotal\";a:0:{}s:5:\"total\";a:0:{}}s:13:\"line_subtotal\";d:12580;s:17:\"line_subtotal_tax\";i:0;s:10:\"line_total\";d:12580;s:8:\"line_tax\";i:0;}s:32:\"e369853df766fa44e1ed0ff613f563bd\";a:11:{s:3:\"key\";s:32:\"e369853df766fa44e1ed0ff613f563bd\";s:10:\"product_id\";i:34;s:12:\"variation_id\";i:0;s:9:\"variation\";a:0:{}s:8:\"quantity\";i:2;s:9:\"data_hash\";s:32:\"b5c1d5ca8bae6d4896cf1807cdf763f0\";s:13:\"line_tax_data\";a:2:{s:8:\"subtotal\";a:0:{}s:5:\"total\";a:0:{}}s:13:\"line_subtotal\";d:6290;s:17:\"line_subtotal_tax\";i:0;s:10:\"line_total\";d:6290;s:8:\"line_tax\";i:0;}s:32:\"9a1158154dfa42caddbd0694a4e9bdc8\";a:11:{s:3:\"key\";s:32:\"9a1158154dfa42caddbd0694a4e9bdc8\";s:10:\"product_id\";i:52;s:12:\"variation_id\";i:0;s:9:\"variation\";a:0:{}s:8:\"quantity\";i:2;s:9:\"data_hash\";s:32:\"b5c1d5ca8bae6d4896cf1807cdf763f0\";s:13:\"line_tax_data\";a:2:{s:8:\"subtotal\";a:0:{}s:5:\"total\";a:0:{}}s:13:\"line_subtotal\";d:12580;s:17:\"line_subtotal_tax\";i:0;s:10:\"line_total\";d:12580;s:8:\"line_tax\";i:0;}s:32:\"a5bfc9e07964f8dddeb95fc584cd965d\";a:11:{s:3:\"key\";s:32:\"a5bfc9e07964f8dddeb95fc584cd965d\";s:10:\"product_id\";i:37;s:12:\"variation_id\";i:0;s:9:\"variation\";a:0:{}s:8:\"quantity\";i:1;s:9:\"data_hash\";s:32:\"b5c1d5ca8bae6d4896cf1807cdf763f0\";s:13:\"line_tax_data\";a:2:{s:8:\"subtotal\";a:0:{}s:5:\"total\";a:0:{}}s:13:\"line_subtotal\";d:6290;s:17:\"line_subtotal_tax\";i:0;s:10:\"line_total\";d:6290;s:8:\"line_tax\";i:0;}}}'),
(29, 1, '_order_count', '0'),
(30, 1, 'enable_custom_fields', '1'),
(31, 1, 'last_update', '1575050931'),
(32, 1, 'wc_admin_activity_panel_inbox_last_read', '1575050899985');

-- --------------------------------------------------------

--
-- Структура таблиці `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'adminShef', '$P$BgGQ0FN6lfHgvI5i49e5Sng3cU0x5Q/', 'adminshef', 'chernushov88@mail.ru', '', '2019-11-28 13:50:39', '', 0, 'adminShef');

-- --------------------------------------------------------

--
-- Структура таблиці `wp_wc_admin_notes`
--

CREATE TABLE `wp_wc_admin_notes` (
  `note_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `locale` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `content_data` longtext COLLATE utf8mb4_unicode_520_ci,
  `status` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `source` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_reminder` datetime DEFAULT NULL,
  `is_snoozable` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_wc_admin_notes`
--

INSERT INTO `wp_wc_admin_notes` (`note_id`, `name`, `type`, `locale`, `title`, `content`, `icon`, `content_data`, `status`, `source`, `date_created`, `date_reminder`, `is_snoozable`) VALUES
(1, 'wc-admin-welcome-note', 'info', 'en_US', 'New feature(s)', 'Welcome to the new WooCommerce experience! In this new release you\'ll be able to have a glimpse of how your store is doing in the Dashboard, manage important aspects of your business (such as managing orders, stock, reviews) from anywhere in the interface, dive into your store data with a completely new Analytics section and more!', 'info', '{}', 'unactioned', 'woocommerce-admin', '2019-11-28 18:14:35', NULL, 0),
(2, 'wc-admin-wc-helper-connection', 'info', 'en_US', 'Connect to WooCommerce.com', 'Connect to get important product notifications and updates.', 'info', '{}', 'unactioned', 'woocommerce-admin', '2019-11-28 18:14:35', NULL, 0),
(3, 'wc-admin-orders-milestone', 'info', 'en_US', 'First order', 'Congratulations on getting your first order from a customer! Learn how to manage your orders.', 'trophy', '{}', 'unactioned', 'woocommerce-admin', '2019-11-29 18:14:45', NULL, 0);

-- --------------------------------------------------------

--
-- Структура таблиці `wp_wc_admin_note_actions`
--

CREATE TABLE `wp_wc_admin_note_actions` (
  `action_id` bigint(20) UNSIGNED NOT NULL,
  `note_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `query` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_wc_admin_note_actions`
--

INSERT INTO `wp_wc_admin_note_actions` (`action_id`, `note_id`, `name`, `label`, `query`, `status`, `is_primary`) VALUES
(1, 1, 'learn-more', 'Learn more', 'https://woocommerce.wordpress.com/', 'actioned', 0),
(2, 2, 'connect', 'Connect', '?page=wc-addons&section=helper', 'actioned', 0),
(3, 3, 'learn-more', 'Learn more', 'https://docs.woocommerce.com/document/managing-orders/', 'actioned', 0);

-- --------------------------------------------------------

--
-- Структура таблиці `wp_wc_category_lookup`
--

CREATE TABLE `wp_wc_category_lookup` (
  `category_tree_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_wc_category_lookup`
--

INSERT INTO `wp_wc_category_lookup` (`category_tree_id`, `category_id`) VALUES
(15, 15);

-- --------------------------------------------------------

--
-- Структура таблиці `wp_wc_customer_lookup`
--

CREATE TABLE `wp_wc_customer_lookup` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `username` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `date_last_active` timestamp NULL DEFAULT NULL,
  `date_registered` timestamp NULL DEFAULT NULL,
  `country` char(2) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `postcode` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `city` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `state` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_wc_customer_lookup`
--

INSERT INTO `wp_wc_customer_lookup` (`customer_id`, `user_id`, `username`, `first_name`, `last_name`, `email`, `date_last_active`, `date_registered`, `country`, `postcode`, `city`, `state`) VALUES
(1, NULL, '', '', '', '', '2019-11-29 16:09:13', NULL, '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблиці `wp_wc_download_log`
--

CREATE TABLE `wp_wc_download_log` (
  `download_log_id` bigint(20) UNSIGNED NOT NULL,
  `timestamp` datetime NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_ip_address` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_wc_order_coupon_lookup`
--

CREATE TABLE `wp_wc_order_coupon_lookup` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `discount_amount` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_wc_order_product_lookup`
--

CREATE TABLE `wp_wc_order_product_lookup` (
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `variation_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `product_qty` int(11) NOT NULL,
  `product_net_revenue` double NOT NULL DEFAULT '0',
  `product_gross_revenue` double NOT NULL DEFAULT '0',
  `coupon_amount` double NOT NULL DEFAULT '0',
  `tax_amount` double NOT NULL DEFAULT '0',
  `shipping_amount` double NOT NULL DEFAULT '0',
  `shipping_tax_amount` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_wc_order_stats`
--

CREATE TABLE `wp_wc_order_stats` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_created_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `num_items_sold` int(11) NOT NULL DEFAULT '0',
  `gross_total` double NOT NULL DEFAULT '0',
  `tax_total` double NOT NULL DEFAULT '0',
  `shipping_total` double NOT NULL DEFAULT '0',
  `net_total` double NOT NULL DEFAULT '0',
  `returning_customer` tinyint(1) DEFAULT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_wc_order_stats`
--

INSERT INTO `wp_wc_order_stats` (`order_id`, `parent_id`, `date_created`, `date_created_gmt`, `num_items_sold`, `gross_total`, `tax_total`, `shipping_total`, `net_total`, `returning_customer`, `status`, `customer_id`) VALUES
(88, 0, '2019-11-29 21:09:13', '2019-11-29 18:09:13', 0, 0, 0, 0, 0, 0, 'wc-pending', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `wp_wc_order_tax_lookup`
--

CREATE TABLE `wp_wc_order_tax_lookup` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_id` bigint(20) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `shipping_tax` double NOT NULL DEFAULT '0',
  `order_tax` double NOT NULL DEFAULT '0',
  `total_tax` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_wc_product_meta_lookup`
--

CREATE TABLE `wp_wc_product_meta_lookup` (
  `product_id` bigint(20) NOT NULL,
  `sku` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT '',
  `virtual` tinyint(1) DEFAULT '0',
  `downloadable` tinyint(1) DEFAULT '0',
  `min_price` decimal(10,2) DEFAULT NULL,
  `max_price` decimal(10,2) DEFAULT NULL,
  `onsale` tinyint(1) DEFAULT '0',
  `stock_quantity` double DEFAULT NULL,
  `stock_status` varchar(100) COLLATE utf8mb4_unicode_520_ci DEFAULT 'instock',
  `rating_count` bigint(20) DEFAULT '0',
  `average_rating` decimal(3,2) DEFAULT '0.00',
  `total_sales` bigint(20) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_wc_product_meta_lookup`
--

INSERT INTO `wp_wc_product_meta_lookup` (`product_id`, `sku`, `virtual`, `downloadable`, `min_price`, `max_price`, `onsale`, `stock_quantity`, `stock_status`, `rating_count`, `average_rating`, `total_sales`) VALUES
(19, '', 1, 0, '0.00', '0.00', 0, NULL, 'instock', 0, '0.00', 0),
(34, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(37, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(39, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(47, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(48, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(52, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(53, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(54, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(55, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(56, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(91, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(92, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(93, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(94, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(95, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(96, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(98, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(99, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(100, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0),
(101, '', 0, 0, '6290.00', '6290.00', 1, NULL, 'instock', 0, '0.00', 0);

-- --------------------------------------------------------

--
-- Структура таблиці `wp_wc_tax_rate_classes`
--

CREATE TABLE `wp_wc_tax_rate_classes` (
  `tax_rate_class_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_wc_tax_rate_classes`
--

INSERT INTO `wp_wc_tax_rate_classes` (`tax_rate_class_id`, `name`, `slug`) VALUES
(1, 'Пониженная ставка', 'ponizhennaya-stavka'),
(2, 'Нулевая ставка', 'nulevaya-stavka');

-- --------------------------------------------------------

--
-- Структура таблиці `wp_wc_webhooks`
--

CREATE TABLE `wp_wc_webhooks` (
  `webhook_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `delivery_url` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `secret` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `topic` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `date_created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_created_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `api_version` smallint(4) NOT NULL,
  `failure_count` smallint(10) NOT NULL DEFAULT '0',
  `pending_delivery` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woocommerce_api_keys`
--

CREATE TABLE `wp_woocommerce_api_keys` (
  `key_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `permissions` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `consumer_key` char(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `consumer_secret` char(43) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `nonces` longtext COLLATE utf8mb4_unicode_520_ci,
  `truncated_key` char(7) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `last_access` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woocommerce_attribute_taxonomies`
--

CREATE TABLE `wp_woocommerce_attribute_taxonomies` (
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `attribute_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `attribute_label` varchar(200) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `attribute_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `attribute_orderby` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `attribute_public` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woocommerce_downloadable_product_permissions`
--

CREATE TABLE `wp_woocommerce_downloadable_product_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `download_id` varchar(36) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `order_key` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_email` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `downloads_remaining` varchar(9) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `access_granted` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `access_expires` datetime DEFAULT NULL,
  `download_count` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woocommerce_log`
--

CREATE TABLE `wp_woocommerce_log` (
  `log_id` bigint(20) UNSIGNED NOT NULL,
  `timestamp` datetime NOT NULL,
  `level` smallint(4) NOT NULL,
  `source` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `context` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woocommerce_order_itemmeta`
--

CREATE TABLE `wp_woocommerce_order_itemmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woocommerce_order_items`
--

CREATE TABLE `wp_woocommerce_order_items` (
  `order_item_id` bigint(20) UNSIGNED NOT NULL,
  `order_item_name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `order_item_type` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `order_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woocommerce_payment_tokenmeta`
--

CREATE TABLE `wp_woocommerce_payment_tokenmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `payment_token_id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woocommerce_payment_tokens`
--

CREATE TABLE `wp_woocommerce_payment_tokens` (
  `token_id` bigint(20) UNSIGNED NOT NULL,
  `gateway_id` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `type` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woocommerce_sessions`
--

CREATE TABLE `wp_woocommerce_sessions` (
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `session_key` char(32) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `session_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `session_expiry` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `wp_woocommerce_sessions`
--

INSERT INTO `wp_woocommerce_sessions` (`session_id`, `session_key`, `session_value`, `session_expiry`) VALUES
(1, '1', 'a:10:{s:4:\"cart\";s:1644:\"a:4:{s:32:\"b53b3a3d6ab90ce0268229151c9bde11\";a:11:{s:3:\"key\";s:32:\"b53b3a3d6ab90ce0268229151c9bde11\";s:10:\"product_id\";i:55;s:12:\"variation_id\";i:0;s:9:\"variation\";a:0:{}s:8:\"quantity\";i:2;s:9:\"data_hash\";s:32:\"b5c1d5ca8bae6d4896cf1807cdf763f0\";s:13:\"line_tax_data\";a:2:{s:8:\"subtotal\";a:0:{}s:5:\"total\";a:0:{}}s:13:\"line_subtotal\";d:12580;s:17:\"line_subtotal_tax\";i:0;s:10:\"line_total\";d:12580;s:8:\"line_tax\";i:0;}s:32:\"e369853df766fa44e1ed0ff613f563bd\";a:11:{s:3:\"key\";s:32:\"e369853df766fa44e1ed0ff613f563bd\";s:10:\"product_id\";i:34;s:12:\"variation_id\";i:0;s:9:\"variation\";a:0:{}s:8:\"quantity\";i:2;s:9:\"data_hash\";s:32:\"b5c1d5ca8bae6d4896cf1807cdf763f0\";s:13:\"line_tax_data\";a:2:{s:8:\"subtotal\";a:0:{}s:5:\"total\";a:0:{}}s:13:\"line_subtotal\";d:12580;s:17:\"line_subtotal_tax\";i:0;s:10:\"line_total\";d:12580;s:8:\"line_tax\";i:0;}s:32:\"9a1158154dfa42caddbd0694a4e9bdc8\";a:11:{s:3:\"key\";s:32:\"9a1158154dfa42caddbd0694a4e9bdc8\";s:10:\"product_id\";i:52;s:12:\"variation_id\";i:0;s:9:\"variation\";a:0:{}s:8:\"quantity\";i:2;s:9:\"data_hash\";s:32:\"b5c1d5ca8bae6d4896cf1807cdf763f0\";s:13:\"line_tax_data\";a:2:{s:8:\"subtotal\";a:0:{}s:5:\"total\";a:0:{}}s:13:\"line_subtotal\";d:12580;s:17:\"line_subtotal_tax\";i:0;s:10:\"line_total\";d:12580;s:8:\"line_tax\";i:0;}s:32:\"a5bfc9e07964f8dddeb95fc584cd965d\";a:11:{s:3:\"key\";s:32:\"a5bfc9e07964f8dddeb95fc584cd965d\";s:10:\"product_id\";i:37;s:12:\"variation_id\";i:0;s:9:\"variation\";a:0:{}s:8:\"quantity\";i:1;s:9:\"data_hash\";s:32:\"b5c1d5ca8bae6d4896cf1807cdf763f0\";s:13:\"line_tax_data\";a:2:{s:8:\"subtotal\";a:0:{}s:5:\"total\";a:0:{}}s:13:\"line_subtotal\";d:6290;s:17:\"line_subtotal_tax\";i:0;s:10:\"line_total\";d:6290;s:8:\"line_tax\";i:0;}}\";s:11:\"cart_totals\";s:399:\"a:15:{s:8:\"subtotal\";s:5:\"44030\";s:12:\"subtotal_tax\";d:0;s:14:\"shipping_total\";s:1:\"0\";s:12:\"shipping_tax\";d:0;s:14:\"shipping_taxes\";a:0:{}s:14:\"discount_total\";d:0;s:12:\"discount_tax\";d:0;s:19:\"cart_contents_total\";s:5:\"44030\";s:17:\"cart_contents_tax\";d:0;s:19:\"cart_contents_taxes\";a:0:{}s:9:\"fee_total\";s:1:\"0\";s:7:\"fee_tax\";d:0;s:9:\"fee_taxes\";a:0:{}s:5:\"total\";s:5:\"44030\";s:9:\"total_tax\";d:0;}\";s:15:\"applied_coupons\";s:6:\"a:0:{}\";s:22:\"coupon_discount_totals\";s:6:\"a:0:{}\";s:26:\"coupon_discount_tax_totals\";s:6:\"a:0:{}\";s:21:\"removed_cart_contents\";s:6:\"a:0:{}\";s:8:\"customer\";s:734:\"a:26:{s:2:\"id\";s:1:\"1\";s:13:\"date_modified\";s:25:\"2019-11-29T18:08:51+00:00\";s:8:\"postcode\";s:0:\"\";s:4:\"city\";s:0:\"\";s:9:\"address_1\";s:0:\"\";s:7:\"address\";s:0:\"\";s:9:\"address_2\";s:0:\"\";s:5:\"state\";s:0:\"\";s:7:\"country\";s:2:\"UA\";s:17:\"shipping_postcode\";s:0:\"\";s:13:\"shipping_city\";s:0:\"\";s:18:\"shipping_address_1\";s:0:\"\";s:16:\"shipping_address\";s:0:\"\";s:18:\"shipping_address_2\";s:0:\"\";s:14:\"shipping_state\";s:0:\"\";s:16:\"shipping_country\";s:2:\"UA\";s:13:\"is_vat_exempt\";s:0:\"\";s:19:\"calculated_shipping\";s:0:\"\";s:10:\"first_name\";s:0:\"\";s:9:\"last_name\";s:0:\"\";s:7:\"company\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:5:\"email\";s:20:\"chernushov88@mail.ru\";s:19:\"shipping_first_name\";s:0:\"\";s:18:\"shipping_last_name\";s:0:\"\";s:16:\"shipping_company\";s:0:\"\";}\";s:25:\"is_wallet_partial_payment\";b:0;s:10:\"wc_notices\";N;s:21:\"chosen_payment_method\";s:4:\"bacs\";}', 1575149786);

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woocommerce_shipping_zones`
--

CREATE TABLE `wp_woocommerce_shipping_zones` (
  `zone_id` bigint(20) UNSIGNED NOT NULL,
  `zone_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `zone_order` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woocommerce_shipping_zone_locations`
--

CREATE TABLE `wp_woocommerce_shipping_zone_locations` (
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `zone_id` bigint(20) UNSIGNED NOT NULL,
  `location_code` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `location_type` varchar(40) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woocommerce_shipping_zone_methods`
--

CREATE TABLE `wp_woocommerce_shipping_zone_methods` (
  `zone_id` bigint(20) UNSIGNED NOT NULL,
  `instance_id` bigint(20) UNSIGNED NOT NULL,
  `method_id` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `method_order` bigint(20) UNSIGNED NOT NULL,
  `is_enabled` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woocommerce_tax_rates`
--

CREATE TABLE `wp_woocommerce_tax_rates` (
  `tax_rate_id` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_country` varchar(2) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `tax_rate_state` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `tax_rate` varchar(8) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `tax_rate_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `tax_rate_priority` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_compound` int(1) NOT NULL DEFAULT '0',
  `tax_rate_shipping` int(1) NOT NULL DEFAULT '1',
  `tax_rate_order` bigint(20) UNSIGNED NOT NULL,
  `tax_rate_class` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woocommerce_tax_rate_locations`
--

CREATE TABLE `wp_woocommerce_tax_rate_locations` (
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `location_code` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tax_rate_id` bigint(20) UNSIGNED NOT NULL,
  `location_type` varchar(40) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woo_wallet_transactions`
--

CREATE TABLE `wp_woo_wallet_transactions` (
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `type` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `currency` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_520_ci,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_woo_wallet_transaction_meta`
--

CREATE TABLE `wp_woo_wallet_transaction_meta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) UNSIGNED NOT NULL,
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Структура таблиці `wp_wpfm_backup`
--

CREATE TABLE `wp_wpfm_backup` (
  `id` int(11) NOT NULL,
  `backup_name` text COLLATE utf8mb4_unicode_520_ci,
  `backup_date` text COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Індекси таблиці `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10)),
  ADD KEY `woo_idx_comment_type` (`comment_type`);

--
-- Індекси таблиці `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Індекси таблиці `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Індекси таблиці `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Індекси таблиці `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Індекси таблиці `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Індекси таблиці `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Індекси таблиці `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Індекси таблиці `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Індекси таблиці `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Індекси таблиці `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- Індекси таблиці `wp_wc_admin_notes`
--
ALTER TABLE `wp_wc_admin_notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Індекси таблиці `wp_wc_admin_note_actions`
--
ALTER TABLE `wp_wc_admin_note_actions`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `note_id` (`note_id`);

--
-- Індекси таблиці `wp_wc_category_lookup`
--
ALTER TABLE `wp_wc_category_lookup`
  ADD PRIMARY KEY (`category_tree_id`,`category_id`);

--
-- Індекси таблиці `wp_wc_customer_lookup`
--
ALTER TABLE `wp_wc_customer_lookup`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `email` (`email`);

--
-- Індекси таблиці `wp_wc_download_log`
--
ALTER TABLE `wp_wc_download_log`
  ADD PRIMARY KEY (`download_log_id`),
  ADD KEY `permission_id` (`permission_id`),
  ADD KEY `timestamp` (`timestamp`);

--
-- Індекси таблиці `wp_wc_order_coupon_lookup`
--
ALTER TABLE `wp_wc_order_coupon_lookup`
  ADD PRIMARY KEY (`order_id`,`coupon_id`),
  ADD KEY `coupon_id` (`coupon_id`),
  ADD KEY `date_created` (`date_created`);

--
-- Індекси таблиці `wp_wc_order_product_lookup`
--
ALTER TABLE `wp_wc_order_product_lookup`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `date_created` (`date_created`);

--
-- Індекси таблиці `wp_wc_order_stats`
--
ALTER TABLE `wp_wc_order_stats`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `date_created` (`date_created`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `status` (`status`(191));

--
-- Індекси таблиці `wp_wc_order_tax_lookup`
--
ALTER TABLE `wp_wc_order_tax_lookup`
  ADD PRIMARY KEY (`order_id`,`tax_rate_id`),
  ADD KEY `tax_rate_id` (`tax_rate_id`),
  ADD KEY `date_created` (`date_created`);

--
-- Індекси таблиці `wp_wc_product_meta_lookup`
--
ALTER TABLE `wp_wc_product_meta_lookup`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `virtual` (`virtual`),
  ADD KEY `downloadable` (`downloadable`),
  ADD KEY `stock_status` (`stock_status`),
  ADD KEY `stock_quantity` (`stock_quantity`),
  ADD KEY `onsale` (`onsale`),
  ADD KEY `min_max_price` (`min_price`,`max_price`);

--
-- Індекси таблиці `wp_wc_tax_rate_classes`
--
ALTER TABLE `wp_wc_tax_rate_classes`
  ADD PRIMARY KEY (`tax_rate_class_id`),
  ADD UNIQUE KEY `slug` (`slug`(191));

--
-- Індекси таблиці `wp_wc_webhooks`
--
ALTER TABLE `wp_wc_webhooks`
  ADD PRIMARY KEY (`webhook_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Індекси таблиці `wp_woocommerce_api_keys`
--
ALTER TABLE `wp_woocommerce_api_keys`
  ADD PRIMARY KEY (`key_id`),
  ADD KEY `consumer_key` (`consumer_key`),
  ADD KEY `consumer_secret` (`consumer_secret`);

--
-- Індекси таблиці `wp_woocommerce_attribute_taxonomies`
--
ALTER TABLE `wp_woocommerce_attribute_taxonomies`
  ADD PRIMARY KEY (`attribute_id`),
  ADD KEY `attribute_name` (`attribute_name`(20));

--
-- Індекси таблиці `wp_woocommerce_downloadable_product_permissions`
--
ALTER TABLE `wp_woocommerce_downloadable_product_permissions`
  ADD PRIMARY KEY (`permission_id`),
  ADD KEY `download_order_key_product` (`product_id`,`order_id`,`order_key`(16),`download_id`),
  ADD KEY `download_order_product` (`download_id`,`order_id`,`product_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `user_order_remaining_expires` (`user_id`,`order_id`,`downloads_remaining`,`access_expires`);

--
-- Індекси таблиці `wp_woocommerce_log`
--
ALTER TABLE `wp_woocommerce_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `level` (`level`);

--
-- Індекси таблиці `wp_woocommerce_order_itemmeta`
--
ALTER TABLE `wp_woocommerce_order_itemmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `order_item_id` (`order_item_id`),
  ADD KEY `meta_key` (`meta_key`(32));

--
-- Індекси таблиці `wp_woocommerce_order_items`
--
ALTER TABLE `wp_woocommerce_order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Індекси таблиці `wp_woocommerce_payment_tokenmeta`
--
ALTER TABLE `wp_woocommerce_payment_tokenmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `payment_token_id` (`payment_token_id`),
  ADD KEY `meta_key` (`meta_key`(32));

--
-- Індекси таблиці `wp_woocommerce_payment_tokens`
--
ALTER TABLE `wp_woocommerce_payment_tokens`
  ADD PRIMARY KEY (`token_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Індекси таблиці `wp_woocommerce_sessions`
--
ALTER TABLE `wp_woocommerce_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD UNIQUE KEY `session_key` (`session_key`);

--
-- Індекси таблиці `wp_woocommerce_shipping_zones`
--
ALTER TABLE `wp_woocommerce_shipping_zones`
  ADD PRIMARY KEY (`zone_id`);

--
-- Індекси таблиці `wp_woocommerce_shipping_zone_locations`
--
ALTER TABLE `wp_woocommerce_shipping_zone_locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `location_id` (`location_id`),
  ADD KEY `location_type_code` (`location_type`(10),`location_code`(20));

--
-- Індекси таблиці `wp_woocommerce_shipping_zone_methods`
--
ALTER TABLE `wp_woocommerce_shipping_zone_methods`
  ADD PRIMARY KEY (`instance_id`);

--
-- Індекси таблиці `wp_woocommerce_tax_rates`
--
ALTER TABLE `wp_woocommerce_tax_rates`
  ADD PRIMARY KEY (`tax_rate_id`),
  ADD KEY `tax_rate_country` (`tax_rate_country`),
  ADD KEY `tax_rate_state` (`tax_rate_state`(2)),
  ADD KEY `tax_rate_class` (`tax_rate_class`(10)),
  ADD KEY `tax_rate_priority` (`tax_rate_priority`);

--
-- Індекси таблиці `wp_woocommerce_tax_rate_locations`
--
ALTER TABLE `wp_woocommerce_tax_rate_locations`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `tax_rate_id` (`tax_rate_id`),
  ADD KEY `location_type_code` (`location_type`(10),`location_code`(20));

--
-- Індекси таблиці `wp_woo_wallet_transactions`
--
ALTER TABLE `wp_woo_wallet_transactions`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Індекси таблиці `wp_woo_wallet_transaction_meta`
--
ALTER TABLE `wp_woo_wallet_transaction_meta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `transaction_id` (`transaction_id`),
  ADD KEY `meta_key` (`meta_key`(32));

--
-- Індекси таблиці `wp_wpfm_backup`
--
ALTER TABLE `wp_wpfm_backup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT для таблиці `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1625;

--
-- AUTO_INCREMENT для таблиці `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=647;

--
-- AUTO_INCREMENT для таблиці `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT для таблиці `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT для таблиці `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблиці `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблиці `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT для таблиці `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `wp_wc_admin_notes`
--
ALTER TABLE `wp_wc_admin_notes`
  MODIFY `note_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `wp_wc_admin_note_actions`
--
ALTER TABLE `wp_wc_admin_note_actions`
  MODIFY `action_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `wp_wc_customer_lookup`
--
ALTER TABLE `wp_wc_customer_lookup`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `wp_wc_download_log`
--
ALTER TABLE `wp_wc_download_log`
  MODIFY `download_log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_wc_tax_rate_classes`
--
ALTER TABLE `wp_wc_tax_rate_classes`
  MODIFY `tax_rate_class_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `wp_wc_webhooks`
--
ALTER TABLE `wp_wc_webhooks`
  MODIFY `webhook_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woocommerce_api_keys`
--
ALTER TABLE `wp_woocommerce_api_keys`
  MODIFY `key_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woocommerce_attribute_taxonomies`
--
ALTER TABLE `wp_woocommerce_attribute_taxonomies`
  MODIFY `attribute_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woocommerce_downloadable_product_permissions`
--
ALTER TABLE `wp_woocommerce_downloadable_product_permissions`
  MODIFY `permission_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woocommerce_log`
--
ALTER TABLE `wp_woocommerce_log`
  MODIFY `log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woocommerce_order_itemmeta`
--
ALTER TABLE `wp_woocommerce_order_itemmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woocommerce_order_items`
--
ALTER TABLE `wp_woocommerce_order_items`
  MODIFY `order_item_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woocommerce_payment_tokenmeta`
--
ALTER TABLE `wp_woocommerce_payment_tokenmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woocommerce_payment_tokens`
--
ALTER TABLE `wp_woocommerce_payment_tokens`
  MODIFY `token_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woocommerce_sessions`
--
ALTER TABLE `wp_woocommerce_sessions`
  MODIFY `session_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблиці `wp_woocommerce_shipping_zones`
--
ALTER TABLE `wp_woocommerce_shipping_zones`
  MODIFY `zone_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woocommerce_shipping_zone_locations`
--
ALTER TABLE `wp_woocommerce_shipping_zone_locations`
  MODIFY `location_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woocommerce_shipping_zone_methods`
--
ALTER TABLE `wp_woocommerce_shipping_zone_methods`
  MODIFY `instance_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woocommerce_tax_rates`
--
ALTER TABLE `wp_woocommerce_tax_rates`
  MODIFY `tax_rate_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woocommerce_tax_rate_locations`
--
ALTER TABLE `wp_woocommerce_tax_rate_locations`
  MODIFY `location_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woo_wallet_transactions`
--
ALTER TABLE `wp_woo_wallet_transactions`
  MODIFY `transaction_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_woo_wallet_transaction_meta`
--
ALTER TABLE `wp_woo_wallet_transaction_meta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `wp_wpfm_backup`
--
ALTER TABLE `wp_wpfm_backup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `wp_wc_download_log`
--
ALTER TABLE `wp_wc_download_log`
  ADD CONSTRAINT `fk_wp_wc_download_log_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `wp_woocommerce_downloadable_product_permissions` (`permission_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
