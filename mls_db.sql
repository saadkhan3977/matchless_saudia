-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 12:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mls_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_blog`
--

CREATE TABLE `about_blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_blog`
--

INSERT INTO `about_blog` (`id`, `title`, `description`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'en', '2021-07-01 07:56:36', '2021-07-01 07:56:36'),
(2, 'كن منظمًا', 'تجربة لا تتلاشى أبدًا. تجربة ذلك', 'ar', '2021-07-01 07:56:53', '2021-07-01 07:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `about_gallery_heading`
--

CREATE TABLE `about_gallery_heading` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_secfour_heading`
--

CREATE TABLE `about_secfour_heading` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_secfour_heading`
--

INSERT INTO `about_secfour_heading` (`id`, `title`, `description`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'en', '2021-07-01 07:47:09', '2021-07-01 07:47:09'),
(2, 'كن منظمًا', 'لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة. لقد نجت ليس فقط خمسة قرون ، ولكن أيضًا القفزة في التنضيد الإلكتروني ، وظلت دون تغيير جوهري. تم نشره في الستينيات من القرن الماضي بإصدار أوراق Letraset التي تحتوي على مقاطع Lorem Ipsum ، ومؤخرًا مع برامج النشر المكتبي مثل Aldus PageMaker بما في ذلك إصدارات Lorem Ipsum.', 'ar', '2021-07-01 07:47:32', '2021-07-01 07:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `about_sec_five_heading`
--

CREATE TABLE `about_sec_five_heading` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_sec_five_heading`
--

INSERT INTO `about_sec_five_heading` (`id`, `title`, `description`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'en', '2021-07-01 07:48:25', '2021-07-01 07:48:25'),
(2, 'كن منظمًا', 'تجربة لا تتلاشى أبدًا. تجربة ذلك', 'ar', '2021-07-01 07:48:35', '2021-07-01 07:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `about_sec_one`
--

CREATE TABLE `about_sec_one` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_sec_one`
--

INSERT INTO `about_sec_one` (`id`, `title`, `link`, `link_text`, `lang`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', 'Officia reprehenderi', 'Free Consultation', 'en', '20210701122557.jpg', 'asd', '2021-07-01 07:25:57', '2021-07-01 07:28:47'),
(2, 'كن منظمًا', 'http://mls.test/about', 'استشارة مجانية', 'ar', '20210701123019.jpg', 'كن منظمًا كن منظمًا كن منظمًا', '2021-07-01 07:30:19', '2021-07-01 07:30:19');

-- --------------------------------------------------------

--
-- Table structure for table `about_sec_six`
--

CREATE TABLE `about_sec_six` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_sec_six`
--

INSERT INTO `about_sec_six` (`id`, `title`, `description`, `sub_title`, `sub_description`, `image`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Hospitality Managemen', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '20210701124909.jpg', 'en', '2021-07-01 07:49:09', '2021-07-01 07:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `about_sec_three`
--

CREATE TABLE `about_sec_three` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_sec_three`
--

INSERT INTO `about_sec_three` (`id`, `heading`, `title`, `description`, `sub_title`, `sub_description`, `image`, `video_url`, `lang`, `created_at`, `updated_at`) VALUES
(3, 'xa', 'Get Organized', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Hospitality Managemen', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '20210701124307.jpg', 'https://www.youtube.com/watch?v=DLJxUSwU_7E', 'en', '2021-07-01 07:39:43', '2021-07-01 07:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `about_sec_two`
--

CREATE TABLE `about_sec_two` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_sec_two`
--

INSERT INTO `about_sec_two` (`id`, `title`, `image`, `lang`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', '20210701123319.jpg', 'en', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-07-01 07:33:19', '2021-07-01 07:33:19'),
(2, 'Get Organized saad', '20210701123353.jpg', 'en', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-07-01 07:33:53', '2021-07-01 07:33:53'),
(3, 'MLS', '20210701123408.jpg', 'en', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-07-01 07:34:08', '2021-07-01 07:34:08'),
(4, 'كن منظمًا', '20210701123519.jpg', 'ar', 'لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة. لقد صمد ليس فقط لخمسة قرون ، ولكن أيضًا القفزة في التنضيد الإلكتروني ، وظل دون تغيير جوهري. تم نشره في الستينيات من القرن الماضي مع إصدار أوراق Letraset التي تحتوي على مقاطع Lorem Ipsum ، ومؤخرًا مع برامج النشر المكتبي مثل Aldus PageMaker بما في ذلك إصدارات Lorem Ipsum.', '2021-07-01 07:35:19', '2021-07-01 07:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menus`
--

CREATE TABLE `admin_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menus`
--

INSERT INTO `admin_menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Header-Menu-en', '2021-06-25 03:07:18', '2021-06-25 03:07:18'),
(2, 'Header-Menu-Ar', '2021-06-25 03:08:15', '2021-06-25 03:08:15');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu_items`
--

CREATE TABLE `admin_menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `sort` int(11) NOT NULL DEFAULT 0,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu` bigint(20) UNSIGNED NOT NULL,
  `depth` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menu_items`
--

INSERT INTO `admin_menu_items` (`id`, `label`, `link`, `parent`, `sort`, `class`, `menu`, `depth`, `created_at`, `updated_at`) VALUES
(1, 'Home', '/', 0, 0, NULL, 1, 0, '2021-06-25 03:07:26', '2021-07-01 02:46:17'),
(2, 'Projects', '/project', 0, 2, NULL, 1, 0, '2021-06-25 03:07:36', '2021-07-01 02:46:17'),
(3, 'المشروع', '/project', 0, 0, NULL, 2, 0, '2021-06-25 03:08:39', '2021-06-25 03:08:55'),
(4, 'منزل، بيت', '/', 0, 1, NULL, 2, 0, '2021-06-25 03:08:55', '2021-06-25 03:08:59'),
(5, 'About Us', '/about', 0, 1, NULL, 1, 0, '2021-07-01 02:45:44', '2021-07-01 02:46:17'),
(6, 'Careers', '/career', 0, 3, NULL, 1, 0, '2021-07-01 07:57:22', '2021-07-01 07:57:22'),
(7, 'Contact', '/contact', 0, 4, NULL, 1, 0, '2021-07-02 00:42:48', '2021-07-02 00:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_page_detail`
--

CREATE TABLE `blog_page_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_tags`
--

CREATE TABLE `blog_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career_sec_four`
--

CREATE TABLE `career_sec_four` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_sec_four`
--

INSERT INTO `career_sec_four` (`id`, `title`, `image`, `lang`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', '20210701130245.jpg', 'en', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-07-01 08:02:45', '2021-07-01 08:02:45'),
(2, 'Get Organized', '20210701130310.jpg', 'en', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-07-01 08:03:10', '2021-07-01 08:03:10'),
(3, 'Get Organized saad', '20210701130331.jpg', 'en', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-07-01 08:03:31', '2021-07-01 08:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `career_sec_four_heading`
--

CREATE TABLE `career_sec_four_heading` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_sec_four_heading`
--

INSERT INTO `career_sec_four_heading` (`id`, `title`, `sub_title`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', 'Hospitality Managemen', 'en', '2021-07-01 08:02:26', '2021-07-01 08:02:26'),
(2, 'كن منظمًا', 'كن منظمًا', 'ar', '2021-07-01 08:02:32', '2021-07-01 08:02:32');

-- --------------------------------------------------------

--
-- Table structure for table `career_sec_one`
--

CREATE TABLE `career_sec_one` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_sec_one`
--

INSERT INTO `career_sec_one` (`id`, `title`, `image`, `lang`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', '20210701130003.jpg', 'en', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-07-01 07:59:27', '2021-07-01 08:00:03'),
(2, 'كن منظمًا', '20210701125946.jpg', 'ar', 'لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة. لقد نجت ليس فقط خمسة قرون ، ولكن أيضًا القفزة في التنضيد الإلكتروني ، وظلت دون تغيير جوهري. تم نشره في الستينيات من القرن الماضي بإصدار أوراق Letraset التي تحتوي على مقاطع Lorem Ipsum ، ومؤخرًا مع برامج النشر المكتبي مثل Aldus PageMaker بما في ذلك إصدارات Lorem Ipsum.', '2021-07-01 07:59:46', '2021-07-01 07:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `career_sec_three`
--

CREATE TABLE `career_sec_three` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_sec_three`
--

INSERT INTO `career_sec_three` (`id`, `title`, `sub_title`, `image`, `post_title`, `apply_title`, `position_title`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', 'Hospitality Managemen', '20210701130202.jpg', 'sa', 'asd', 'asd', 'en', '2021-07-01 08:02:02', '2021-07-01 08:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `career_sec_two`
--

CREATE TABLE `career_sec_two` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_sec_two`
--

INSERT INTO `career_sec_two` (`id`, `title`, `image`, `lang`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', '20210701130047.jpg', 'en', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-07-01 08:00:47', '2021-07-01 08:00:47'),
(2, 'Get Organized', '20210701130100.jpg', 'en', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-07-01 08:01:00', '2021-07-01 08:01:00'),
(3, 'Get Organized', '20210701130121.jpg', 'en', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-07-01 08:01:21', '2021-07-01 08:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `career_sec_two_heading`
--

CREATE TABLE `career_sec_two_heading` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_sec_two_heading`
--

INSERT INTO `career_sec_two_heading` (`id`, `title`, `lang`, `sub_title`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', 'en', 'Hospitality Managemen', '2021-07-01 08:00:23', '2021-07-01 08:00:23'),
(2, 'كن منظمًا', 'ar', 'كن منظمًا', '2021-07-01 08:00:32', '2021-07-01 08:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `subject`, `description`, `submit`, `lang`, `created_at`, `updated_at`) VALUES
(2, 'Stuart Williamson', 'jynucy@mailinator.com', '0304215746', 'Subject', 'hello world', 'Submit', 'en', '2021-07-02 03:13:22', '2021-07-02 03:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `contact_question`
--

CREATE TABLE `contact_question` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_question`
--

INSERT INTO `contact_question` (`id`, `title`, `description`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'en', '2021-07-02 00:47:48', '2021-07-02 01:05:19'),
(2, 'كن منظمًا', 'لوريم إيبسوم هو ببساطة نص شكلي يستخدم في صناعة الطباعة والتنضيد. كان Lorem Ipsum هو النص الوهمي القياسي في الصناعة منذ القرن الخامس عشر الميلادي ، عندما أخذت طابعة غير معروفة لوحًا من النوع وتدافعت عليه لعمل كتاب عينة. لقد نجت ليس فقط خمسة قرون ، ولكن أيضًا القفزة في التنضيد الإلكتروني ، وظلت دون تغيير جوهري. تم نشره في الستينيات من القرن الماضي بإصدار أوراق Letraset التي تحتوي على مقاطع Lorem Ipsum ، ومؤخرًا مع برامج النشر المكتبي مثل Aldus PageMaker بما في ذلك إصدارات Lorem Ipsum.', 'ar', '2021-07-02 01:03:23', '2021-07-02 01:03:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_visit`
--

CREATE TABLE `contact_visit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_visit`
--

INSERT INTO `contact_visit` (`id`, `title`, `address`, `phone`, `email`, `lang`, `description`, `created_at`, `updated_at`) VALUES
(1, 'jynucy@mailinator.com', 'Voluptate velit aliq', '0304215746', 'jynucy@mailinator.com', 'en', 'An experience that never fades awayAn experience that', '2021-07-01 08:07:37', '2021-07-01 08:07:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `project_id`, `image`, `created_at`, `updated_at`) VALUES
(2, '2', '20210626063221.png', '2021-06-26 01:32:21', '2021-06-26 01:32:21'),
(4, '2', '20210626063229.png', '2021-06-26 01:32:29', '2021-06-26 01:32:29'),
(5, '6', '20210628112726.jpg', '2021-06-28 06:27:26', '2021-06-28 06:27:26'),
(6, '6', '20210628112726.jpg', '2021-06-28 06:27:26', '2021-06-28 06:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `general-setting-favicon`
--

CREATE TABLE `general-setting-favicon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general-setting-header`
--

CREATE TABLE `general-setting-header` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `getintouch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscribe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_label` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submit` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general-setting-header`
--

INSERT INTO `general-setting-header` (`id`, `getintouch`, `subscribe`, `title`, `phone_label`, `phone`, `email_label`, `email`, `copyright`, `lang`, `submit`, `created_at`, `updated_at`) VALUES
(1, 'Get I Touch', 'Subscribe Newsletter', 'Get Organized', '+12429298348', '+12309232919', 'nujekema@mailinator.com', 'nujekema@mailinator.com', 'Copyright © 2021 Matchlesssaudia (Pvt. ltd)', 'en', 'submit', '2021-07-02 05:20:17', '2021-07-02 05:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `general-setting-logo`
--

CREATE TABLE `general-setting-logo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general-setting-logo`
--

INSERT INTO `general-setting-logo` (`id`, `file`, `created_at`, `updated_at`) VALUES
(3, '20210625065732.png', '2021-06-25 01:57:32', '2021-06-25 01:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `general-setting-preloader`
--

CREATE TABLE `general-setting-preloader` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `website_loader` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_loader` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general-setting-preloader`
--

INSERT INTO `general-setting-preloader` (`id`, `website_loader`, `admin_loader`, `created_at`, `updated_at`) VALUES
(2, '20210625070446.gif', '20210625070201.gif', '2021-06-25 02:02:01', '2021-06-25 02:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `general-setting-webstyle`
--

CREATE TABLE `general-setting-webstyle` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_theme_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_text_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_theme_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_text_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tawkto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tawkto_status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general-setting-webstyle`
--

INSERT INTO `general-setting-webstyle` (`id`, `title`, `front_theme_color`, `front_text_color`, `front_background`, `admin_theme_color`, `admin_text_color`, `admin_background`, `copyright`, `tawkto`, `tawkto_status`, `created_at`, `updated_at`) VALUES
(1, 'MLS', '#000000', '#ccae5a', '#000000', '#000000', '#ccae5a', '#000000', NULL, 'sd', 'PENDING', '2021-06-25 01:58:33', '2021-06-25 01:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `home-video`
--

CREATE TABLE `home-video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_text` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home-video`
--

INSERT INTO `home-video` (`id`, `title`, `sub_title`, `description`, `link`, `video_url`, `button_text`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', 'Hospitality Managemen', 'An experience that never fades awayAn experience that never fades awayAn experience that never fades away', 'dsadd', 'https://www.youtube.com/watch?v=DLJxUSwU_7E', 'Free Consultaion', 'en', '2021-06-25 02:33:28', '2021-06-25 02:55:05'),
(2, 'كن منظمًا', 'ufy', 'تجربة لا تتلاشى أبدًا. تجربة ذلك', 'ds', 'https://www.youtube.com/watch?v=DLJxUSwU_7E', 'استشارة مجانية', 'ar', '2021-06-25 03:11:56', '2021-06-25 03:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `home_contact_us`
--

CREATE TABLE `home_contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_contact_us`
--

INSERT INTO `home_contact_us` (`id`, `title`, `description`, `map_link`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', 'An experience that never fades awayAn experience that', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.6505205569842!2d67.07762231447853!3d24.909899749410116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33fbcac4b7627%3A0x31b2a8b32ea56b6b!2sDigitalopment!5e0!3m2!1sen!2s!4v1620612502882!5m2!1sen!2s', 'en', '2021-06-25 06:44:14', '2021-06-25 06:44:14'),
(2, 'كن منظمًا', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.6505205569842!2d67.07762231447853!3d24.909899749410116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33fbcac4b7627%3A0x31b2a8b32ea56b6b!2sDigitalopment!5e0!3m2!1sen!2s!4v1620612502882!5m2!1sen!2s', 'ar', '2021-06-25 06:44:54', '2021-06-25 06:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `home_hospitality_cnsultancy`
--

CREATE TABLE `home_hospitality_cnsultancy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_hospitality_cnsultancy`
--

INSERT INTO `home_hospitality_cnsultancy` (`id`, `title`, `description`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'كن منظمًا', 'تجربة لا تتلاشى أبدًا. تجربة ذلك', 'ar', '2021-06-25 05:48:14', '2021-06-25 05:52:09'),
(2, 'Get Organized', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'en', '2021-06-25 05:48:21', '2021-06-25 05:52:16');

-- --------------------------------------------------------

--
-- Table structure for table `home_missions`
--

CREATE TABLE `home_missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_missions`
--

INSERT INTO `home_missions` (`id`, `title`, `description`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'en', '2021-06-25 06:14:32', '2021-06-25 06:14:32'),
(2, 'كن منظمًا', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'ar', '2021-06-25 06:14:42', '2021-06-25 06:14:42');

-- --------------------------------------------------------

--
-- Table structure for table `home_missions_features`
--

CREATE TABLE `home_missions_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_missions_features`
--

INSERT INTO `home_missions_features` (`id`, `title`, `description`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'en', '2021-06-25 06:39:22', '2021-06-25 06:39:22'),
(2, 'Get Organized', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'en', '2021-06-25 06:39:33', '2021-06-25 06:39:33'),
(3, 'Get Organized', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'en', '2021-06-25 06:40:02', '2021-06-25 06:40:02'),
(4, 'Get Organized', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'en', '2021-06-25 06:40:17', '2021-06-25 06:40:17'),
(5, 'كن منظمًا', 'تجربة لا تتلاشى أبدًا. تجربة ذلك', 'ar', '2021-06-25 06:40:30', '2021-06-25 06:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `home_projects`
--

CREATE TABLE `home_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_projects`
--

INSERT INTO `home_projects` (`id`, `title`, `description`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Get Organized', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'en', '2021-06-25 06:06:48', '2021-06-25 06:06:48'),
(2, 'كن منظمًا', 'تجربة لا تتلاشى أبدًا. تجربة ذلك', 'ar', '2021-06-25 06:07:34', '2021-06-25 06:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `home_sec_two`
--

CREATE TABLE `home_sec_two` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sec_two`
--

INSERT INTO `home_sec_two` (`id`, `title`, `video`, `image`, `description`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'كن منظمًا', 'https://www.youtube.com/watch?v=fvIWPFEZi_s&list=RDMMn5ept0rl4LM&index=12', '20210625105246.png', 'An experience that never fades awayAn experience that never fades awayAn experience that never fades away', 'ar', '2021-06-25 05:52:46', '2021-06-25 05:52:46'),
(2, 'Get Organized', 'https://www.youtube.com/watch?v=fvIWPFEZi_s&list=RDMMn5ept0rl4LM&index=12', '20210625105306.png', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'en', '2021-06-25 05:53:06', '2021-06-25 05:53:06'),
(3, 'Get Organized', 'https://www.youtube.com/watch?v=fvIWPFEZi_s&list=RDMMn5ept0rl4LM&index=12', '20210625105343.png', 'An experience that never fades awayAn experience that never fades awayAn experience that never fades away', 'en', '2021-06-25 05:53:43', '2021-06-25 05:53:43'),
(4, 'كن منظمًا', 'https://www.youtube.com/watch?v=fvIWPFEZi_s&list=RDMMn5ept0rl4LM&index=12', '20210625110145.png', 'تجربة لا تتلاشى أبدًا. تجربة ذلك', 'ar', '2021-06-25 06:01:45', '2021-06-25 06:01:45');

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
(3, '2017_08_11_073824_create_menus_wp_table', 1),
(4, '2017_08_11_074006_create_menu_items_wp_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2021_03_18_013004_create_generalsetting_logo', 1),
(7, '2021_03_18_184947_create_generalsetting_favicon', 1),
(8, '2021_03_18_194624_create_generalsetting_preloader', 1),
(9, '2021_03_18_202436_create_generalsetting_header', 1),
(10, '2021_03_18_205928_create_socialsetting_links', 1),
(11, '2021_03_22_100732_create_seotools_keywords', 1),
(12, '2021_03_22_113007_create_generalsetting_webstyle', 1),
(13, '2021_05_06_093417_create_home_video_table', 1),
(14, '2021_05_10_012342_create_contactus_table', 1),
(15, '2021_05_10_015536_create_home_contactustable', 1),
(16, '2021_05_11_010933_create_projects_table', 1),
(17, '2021_05_11_023828_create_home_projects_table', 1),
(18, '2021_05_11_030323_create_home_hospitality_cnsultancy_table', 1),
(19, '2021_05_11_031810_create_home_missions_table', 1),
(20, '2021_05_11_041521_create_home_missions_features_table', 1),
(21, '2021_05_12_041644_create_contact_visit_table', 1),
(22, '2021_05_12_044555_create_contact_question_table', 1),
(23, '2021_05_12_050613_create_projects_page_text_table', 1),
(24, '2021_05_18_062541_create_career_sec_one_table', 1),
(25, '2021_05_18_073336_create_career_sec_two_table', 1),
(26, '2021_05_18_075431_create_career_sec_two_heading_table', 1),
(27, '2021_05_18_112237_create_career_sec_four_table', 1),
(28, '2021_05_18_112435_create_career_sec_four_heading_table', 1),
(29, '2021_05_19_093426_create_gallery_table', 1),
(30, '2021_05_24_064045_create_about_sec_one_table', 1),
(31, '2021_05_24_073351_create_about_sec_two_table', 1),
(32, '2021_05_24_081646_create_about_sec_three_table', 1),
(33, '2021_05_26_060559_create_about__sec_four_heading', 1),
(34, '2021_05_27_093413_create_about_secfive_heading_table', 1),
(35, '2021_05_27_104635_create_about_sec_six_table', 1),
(36, '2021_05_28_122445_create_testimonial_table', 1),
(37, '2021_05_31_054218_create_about_blog_table', 1),
(38, '2021_05_31_070344_create_category_table', 1),
(39, '2021_05_31_070535_create_blog_table', 1),
(40, '2021_05_31_075943_create_blog_page_detail_table', 1),
(41, '2021_06_01_121109_create_blog_tags_table', 1),
(42, '2021_06_03_080134_create_blog_comment_table', 1),
(43, '2021_06_11_080031_create_about_gallery_heading_table', 1),
(44, '2021_06_15_073620_create_home_section_two_table', 1),
(45, '2021_06_16_112559_create_contact_form_table', 1),
(46, '2021_06_22_065148_create_career_sec_three_table', 1);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `service_id`, `title`, `slug`, `category`, `image`, `logo`, `video`, `website`, `description`, `lang`, `created_at`, `updated_at`) VALUES
(14, '1', 'Get Organized', 'get-organized', 'dsfds', '20210629061744.1961040100png', '20210629061744.png', 'https://www.youtube.com/watch?v=fvIWPFEZi_s&list=RDMMn5ept0rl4LM&index=12', 'http://pkorders.com/', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'en', '2021-06-29 01:17:44', '2021-07-01 02:00:21'),
(16, '1', 'asd', 'asd', 'dsfds', '20210629120457.1055248684jpg', '20210629120457.jpg', 'https://www.youtube.com/watch?v=fvIWPFEZi_s&list=RDMMn5ept0rl4LM&index=12', 'http://pkorders.com/', 'An experience that never fades awayAn experience that never fades awayAn experience that never f', 'en', '2021-06-29 07:04:57', '2021-07-01 02:00:54'),
(17, '1', 'كن منظمًا', 'kn-mnthma', 'كن منظمًا', '20210701055056.120543796jpg', '20210701055056.jpg', 'https://www.youtube.com/watch?v=fvIWPFEZi_s&list=RDMMn5ept0rl4LM&index=12', 'http://digitalopment.com/', 'تجربة لا تتلاشى أبدًا. تجربة ذلك', 'ar', '2021-07-01 00:50:56', '2021-07-01 00:50:56');

-- --------------------------------------------------------

--
-- Table structure for table `projects_page_text`
--

CREATE TABLE `projects_page_text` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lang` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects_page_text`
--

INSERT INTO `projects_page_text` (`id`, `description`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'The series is being filmed in Istanbul', 'en', '2021-06-26 01:23:03', '2021-06-26 01:26:10'),
(2, 'يتم تصوير المسلسل في اسطنبول. لا يزال اختيار الممثلين جاريًا.', 'ar', '2021-06-26 01:23:43', '2021-06-26 01:26:20');

-- --------------------------------------------------------

--
-- Table structure for table `seotools-keywords`
--

CREATE TABLE `seotools-keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social-setting-links`
--

CREATE TABLE `social-setting-links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social-setting-links`
--

INSERT INTO `social-setting-links` (`id`, `facebook`, `facebook_status`, `instagram`, `instagram_status`, `twitter`, `twitter_status`, `linkedin`, `linkedin_status`, `whatsapp`, `whatsapp_status`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 'on', 'instagram', 'on', 'twitter', 'on', 'linkedin', 'on', 'fg', 'on', '2021-07-02 05:23:35', '2021-07-02 05:23:55');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_blog`
--
ALTER TABLE `about_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_gallery_heading`
--
ALTER TABLE `about_gallery_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_secfour_heading`
--
ALTER TABLE `about_secfour_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_sec_five_heading`
--
ALTER TABLE `about_sec_five_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_sec_one`
--
ALTER TABLE `about_sec_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_sec_six`
--
ALTER TABLE `about_sec_six`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_sec_three`
--
ALTER TABLE `about_sec_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_sec_two`
--
ALTER TABLE `about_sec_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menus`
--
ALTER TABLE `admin_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_menu_items_menu_foreign` (`menu`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_category_id_foreign` (`category_id`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_page_detail`
--
ALTER TABLE `blog_page_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_tags`
--
ALTER TABLE `blog_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_sec_four`
--
ALTER TABLE `career_sec_four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_sec_four_heading`
--
ALTER TABLE `career_sec_four_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_sec_one`
--
ALTER TABLE `career_sec_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_sec_three`
--
ALTER TABLE `career_sec_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_sec_two`
--
ALTER TABLE `career_sec_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_sec_two_heading`
--
ALTER TABLE `career_sec_two_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_question`
--
ALTER TABLE `contact_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_visit`
--
ALTER TABLE `contact_visit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general-setting-favicon`
--
ALTER TABLE `general-setting-favicon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general-setting-header`
--
ALTER TABLE `general-setting-header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general-setting-logo`
--
ALTER TABLE `general-setting-logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general-setting-preloader`
--
ALTER TABLE `general-setting-preloader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general-setting-webstyle`
--
ALTER TABLE `general-setting-webstyle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home-video`
--
ALTER TABLE `home-video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_contact_us`
--
ALTER TABLE `home_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_hospitality_cnsultancy`
--
ALTER TABLE `home_hospitality_cnsultancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_missions`
--
ALTER TABLE `home_missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_missions_features`
--
ALTER TABLE `home_missions_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_projects`
--
ALTER TABLE `home_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sec_two`
--
ALTER TABLE `home_sec_two`
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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects_page_text`
--
ALTER TABLE `projects_page_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seotools-keywords`
--
ALTER TABLE `seotools-keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social-setting-links`
--
ALTER TABLE `social-setting-links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
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
-- AUTO_INCREMENT for table `about_blog`
--
ALTER TABLE `about_blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_gallery_heading`
--
ALTER TABLE `about_gallery_heading`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_secfour_heading`
--
ALTER TABLE `about_secfour_heading`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_sec_five_heading`
--
ALTER TABLE `about_sec_five_heading`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_sec_one`
--
ALTER TABLE `about_sec_one`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `about_sec_six`
--
ALTER TABLE `about_sec_six`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_sec_three`
--
ALTER TABLE `about_sec_three`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `about_sec_two`
--
ALTER TABLE `about_sec_two`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_menus`
--
ALTER TABLE `admin_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_page_detail`
--
ALTER TABLE `blog_page_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_tags`
--
ALTER TABLE `blog_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `career_sec_four`
--
ALTER TABLE `career_sec_four`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `career_sec_four_heading`
--
ALTER TABLE `career_sec_four_heading`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `career_sec_one`
--
ALTER TABLE `career_sec_one`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `career_sec_three`
--
ALTER TABLE `career_sec_three`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `career_sec_two`
--
ALTER TABLE `career_sec_two`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `career_sec_two_heading`
--
ALTER TABLE `career_sec_two_heading`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_question`
--
ALTER TABLE `contact_question`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_visit`
--
ALTER TABLE `contact_visit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `general-setting-favicon`
--
ALTER TABLE `general-setting-favicon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general-setting-header`
--
ALTER TABLE `general-setting-header`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general-setting-logo`
--
ALTER TABLE `general-setting-logo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `general-setting-preloader`
--
ALTER TABLE `general-setting-preloader`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `general-setting-webstyle`
--
ALTER TABLE `general-setting-webstyle`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home-video`
--
ALTER TABLE `home-video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_contact_us`
--
ALTER TABLE `home_contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_hospitality_cnsultancy`
--
ALTER TABLE `home_hospitality_cnsultancy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_missions`
--
ALTER TABLE `home_missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_missions_features`
--
ALTER TABLE `home_missions_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_projects`
--
ALTER TABLE `home_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_sec_two`
--
ALTER TABLE `home_sec_two`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `projects_page_text`
--
ALTER TABLE `projects_page_text`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seotools-keywords`
--
ALTER TABLE `seotools-keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social-setting-links`
--
ALTER TABLE `social-setting-links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_menu_items`
--
ALTER TABLE `admin_menu_items`
  ADD CONSTRAINT `admin_menu_items_menu_foreign` FOREIGN KEY (`menu`) REFERENCES `admin_menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
