-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2026 at 04:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brix`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'شسيبشسيبسي', 'shsybshsybsy', '<p>سيبسيل</p>', 'articles/VA7XajRSLg49bsawOibJZ155vLC1zY3Bz4MT939a.png', '2026-06-10 14:30:54', '2026-06-10 14:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `years` varchar(255) DEFAULT NULL,
  `info` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `image`, `url`, `years`, `info`, `created_at`, `updated_at`) VALUES
(2, 'Bebo Alashmawy', 'bebo-alashmawy', 'brands/j6vY6sIs0osCShOheceWHSEF3PvHAEmA29bxii8N.jpg', 'https://github.com/nab1h/E-Commmerce-2/tree/main/admin/function', '2', 'rghhsf', '2026-06-08 18:03:01', '2026-06-10 11:48:08'),
(3, 'avora', 'avora', 'brands/Gc7dpv7uRleprMM76UJ1DbadF0SmeojTKSlsbAE7.png', 'https://www.facebook.com/nab1h', '2', 'https://www.facebook.com/nab1h https://www.facebook.com/nab1h', '2026-06-09 19:56:25', '2026-06-10 11:48:08'),
(4, 'brix', 'brix', 'brands/B3bk14o35qFpOetrF5aeUcGZhpPJmonfxbhSovNo.png', 'https://github.com/nab1h/E-Commmerce-2/tree/main/admin/function', '2', 'https://github.com/nab1h/E-Commmerce-2/tree/main/admin/function', '2026-06-09 19:56:47', '2026-06-10 11:48:08'),
(5, 'MacBook Air M3', 'macbook-air-m3', 'brands/SgZlMHC57iLJQxlhRPRoDqRBYq7OxKfo9UC4rtwH.png', 'https://www.instagram.com/reel/DXmqtUJDdzy/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==', '2', 'https://github.com/nab1h/E-Commmerce-2/tree/main/admin/function', '2026-06-09 19:57:09', '2026-06-10 11:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `depart` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `name`, `depart`, `description`, `location`, `experience`, `created_at`, `updated_at`) VALUES
(2, 'Bebo Alashmawy', 'fgh', 'asdfasdfasdfasd', 'tanta', '5', '2026-06-09 11:17:56', '2026-06-09 11:17:56');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`, `description`, `created_at`, `updated_at`) VALUES
(4, 'جميع المطبوعات الورقية', 'categories/82NThZvPBAvywtuBimhJE1RARhQnSWGFT2jlYENO.jpg', 'جميع انواع المطبوعات الديجيتال', '2026-06-09 19:13:17', '2026-06-09 19:13:17'),
(5, 'طباعة علب الادوية', 'categories/mnm1RqXiRChIvuhZ6MOVBRLtidXA117KI8ug9AFe.jpg', 'طباعة انواع علب الادوية طباعة انواع علب الادوية', '2026-06-09 19:15:39', '2026-06-09 19:15:39'),
(6, 'علب البرفيوم', 'categories/5OQwPGHDUBe0bwMEf5Iq1o5LCibJnqXAWeljvGBS.jpg', 'علب البرفيوم  علب البرفيوم علب البرفيوم', '2026-06-09 19:17:05', '2026-06-09 19:17:05'),
(7, 'روشتات عيادات خاصه وعامه ومستشفيات', 'categories/eU10qvTqG4jakR9Oyj7ypTvOgi4bNQZTDaIaeOgu.jpg', 'روشتات عيادات خاصه وعامه ومستشفيات', '2026-06-09 19:18:16', '2026-06-09 19:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `msg`, `is_read`, `created_at`, `updated_at`) VALUES
(16, 'Bebo Alashmawy', 'beboalashmawy@gmail.com', '+201505253851', 'استفسار عام', '6عث67', 0, '2026-06-09 15:06:51', '2026-06-09 15:06:51'),
(17, 'Bebo Alashmawy', 'beboalashmawy@gmail.com', '+201505253851', 'استفسار عام', 'فق', 0, '2026-06-09 15:10:19', '2026-06-09 15:10:19'),
(18, 'Bebo Alashmawy', 'beboalashmawy@gmail.com', '+201505253851', 'استفسار عام', 'فق', 0, '2026-06-09 15:12:07', '2026-06-09 15:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_ar` varchar(255) NOT NULL,
  `answer_ar` text NOT NULL,
  `order_column` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question_ar`, `answer_ar`, `order_column`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'ما هي طرق الدفع المتاحة؟', 'نقبل الدفع نقداً، وبطاقات الائتمان (فيزا، ماستركارد)، والتحويل البنكي، ومدى، وApple Pay وSTC Pay.', 1, 1, '2026-06-07 13:15:40', '2026-06-07 13:15:40'),
(2, 'ما هي مدة التنفيذ المعتادة؟', 'تختلف حسب نوع الخدمة وحجم المشروع. المطبوعات البسيطة من ١-٣ أيام، والمشاريع الكبيرة من ١٠-٢٠ يوم عمل.', 2, 1, '2026-06-07 13:16:12', '2026-06-07 13:16:12'),
(3, 'هل تقبلون طلبات بكميات صغيرة ؟', 'نعم، لا يوجد حد أدنى للطلب. نقبل الطلبات من قطعة واحدة ونقدم أسعاراً خاصة للكميات الكبيرة.', 3, 1, '2026-06-07 13:16:39', '2026-06-07 13:16:39'),
(4, 'هل توفرون خدمة التوصيل؟', 'نعم، نوفر خدمة توصيل لجميع محافظات مصر بتكلفة رمزية أو مجاناً للطلبات فوق ١٠٠٠ جنية.', 4, 1, '2026-06-07 13:17:44', '2026-06-07 13:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `home_contents`
--

CREATE TABLE `home_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hero_title_ar` varchar(255) DEFAULT NULL,
  `hero_subtitle_ar` varchar(255) DEFAULT NULL,
  `about_title_ar` varchar(255) DEFAULT NULL,
  `about_desc_ar` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_contents`
--

INSERT INTO `home_contents` (`id`, `hero_title_ar`, `hero_subtitle_ar`, `about_title_ar`, `about_desc_ar`, `created_at`, `updated_at`) VALUES
(1, 'نحوّل رؤيتك إلى واقعٍ ملموس', 'في Brix، نؤمن بأن كل فكرة تستحق أن تُرى بأفضل صورة. نحن لا نطبع فقط — نصنع تجارب بصرية تترك أثراً دائماً.', 'الإبداع ليس ترفهاً بل ضرورة', 'منذ أكثر من ١٥ عاماً، تبدأ كل مشاركة بيننا وبين عميل من نقطة واحدة: الفهم العميق لما يريد أن يقوله. لا نكتفي بتنفيذ الطلبات — نشاركك الرحلة من الفكرة الأولى حتى اللحظة التي يرى فيها عملك النور.\r\n\r\nنؤمن بأن الجودة الحقيقية تكمن في التفاصيل: اختيار الخامة المناسبة، اللون الدقيق، اللمسة النهائية التي تصنع الفرق. هذا ما يميز Brix — التزام لا يساوم على الجودة أبداً.', '2026-06-06 13:14:51', '2026-06-06 16:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('hero_video','hero_image','gallery_image') NOT NULL DEFAULT 'gallery_image',
  `path` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `order_column` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `type`, `path`, `thumbnail`, `title`, `order_column`, `is_active`, `created_at`, `updated_at`) VALUES
(5, 'hero_image', 'media/SCgtgi2zE9ZvyopbnPu0yniwZXkqfMyRIgYfmCgn.jpg', 'media/SCgtgi2zE9ZvyopbnPu0yniwZXkqfMyRIgYfmCgn.jpg', NULL, 0, 1, '2026-06-07 11:44:31', '2026-06-07 11:44:31'),
(6, 'gallery_image', 'media/ZXllHlaPdAgFvnh28UKJaXq1w8BjQZafEk0PEoVa.png', 'media/ZXllHlaPdAgFvnh28UKJaXq1w8BjQZafEk0PEoVa.png', NULL, 1, 1, '2026-06-09 17:53:10', '2026-06-09 17:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2026_04_26_002748_create_users_table', 1),
(4, '2026_04_28_170924_create_reservations_table', 1),
(5, '2026_05_14_190506_create_settings_table', 1),
(6, '2026_05_14_203331_update_settings_table_with_multilang_and_socials', 1),
(7, '2026_05_14_204159_add_contact_details_to_settings_table', 1),
(8, '2026_05_15_135639_create_home_contents_table', 1),
(9, '2026_05_15_154255_create_faqs_table', 1),
(10, '2026_05_15_161312_create_media_table', 1),
(11, '2026_05_16_223005_create_testimonials_table', 1),
(12, '2026_05_17_121648_create_statistics_table', 1),
(13, '2026_06_07_164024_add_job_to_testimonials_table', 2),
(14, '2026_06_08_203734_create_brands_table', 3),
(15, '2026_06_08_204845_create_categories_table', 4),
(16, '2026_06_08_205701_create_portfolios_table', 5),
(17, '2026_06_08_212312_create_contacts_table', 6),
(19, '2026_06_08_221438_add_brand_category_email_to_reservations_table', 7),
(20, '2026_06_09_135143_create_careers_table', 8),
(21, '2026_06_10_143839_add_slug_to_brands_table', 9),
(22, '2026_06_10_160924_create_articles_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `brand_id`, `cat_id`, `image`, `description`, `url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'avora', 2, 4, 'portfolios/O4ghi8O5TN3KVLM7cP8DjKLiysKfWRPRDOhcaiDk.jpg', 'rasgdfgf', 'https://www.youtube.com/', 1, '2026-06-09 19:55:14', '2026-06-09 19:55:14'),
(3, 'MacBook Air M3', 3, 5, 'portfolios/RZjikG4sCs1iszCBxcnT0TWZkJOvd8AKcWJjxwrT.jpg', 'https://github.com/nab1h/E-Commmerce-2/tree/main/admin/function', 'https://www.youtube.com/', 1, '2026-06-09 19:57:44', '2026-06-09 19:57:44'),
(4, 'MacBook Air M3', 4, 5, 'portfolios/0EMTVrv7XqjWD544HV30ECdf2vM4sLFRQIiYLVt8.jpg', 'بسم الله الرحمن الرحيم مالك يوم الدين اياك نعبد واياك نستعين', 'https://www.youtube.com/', 1, '2026-06-09 19:58:31', '2026-06-09 19:58:31'),
(5, 'nabih', 3, 4, 'portfolios/noFZrRHeH14xCZEpJsG3y7g1QvPvbXKKWzwhIcMD.png', 'بسم الله الرحمن الرحيم مالك يوم الدين اياك نعبد واياك نستعين', 'https://www.youtube.com/', 1, '2026-06-09 19:59:48', '2026-06-09 19:59:48'),
(6, 'avora', 4, 5, 'portfolios/gj27U9cTfqSZfjuipEIhlg21KJfZdCIIiE2uDfQW.jpg', 'بسم الله الرحمن الرحيم مالك يوم الدين اياك نعبد واياك نستعين', 'https://www.youtube.com/', 1, '2026-06-09 20:00:54', '2026-06-09 20:00:54'),
(7, 'Bebo Alashmawy', 2, 4, 'portfolios/sAoQrHof70N6SOgGaMpiHGgjFxv9lVuqiMPI58Nt.jpg', 'بسم الله الرحمن الرحيم مالك يوم الدين اياك نعبد واياك نستعين', 'https://www.facebook.com/nab1h', 1, '2026-06-09 20:01:07', '2026-06-09 20:01:07'),
(8, 'Bebo Alashmawy', 2, 4, 'portfolios/ceM97vheTLpb7ORbrqRvRTPNDwlyNFzc5COAcEdd.jpg', 'بسم الله الرحمن الرحيم مالك يوم الدين اياك نعبد واياك نستعين', 'https://www.youtube.com/', 1, '2026-06-09 20:01:24', '2026-06-09 20:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `status` enum('pending','confirmed','cancelled','completed') NOT NULL DEFAULT 'pending',
  `notes` text DEFAULT NULL,
  `is_archive` tinyint(1) NOT NULL DEFAULT 0,
  `is_delete` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `phone`, `email`, `brand`, `category`, `status`, `notes`, `is_archive`, `is_delete`, `created_at`, `updated_at`) VALUES
(11, 'Bebo Alashmawy', '+20123456789', 'beboalashmawy@gmail.com', NULL, 'Bebo Alashmawy', 'pending', NULL, 0, 0, '2026-06-09 15:13:42', '2026-06-09 15:13:42'),
(12, 'Bebo Alashmawy', '+201505253851', 'beboalashmawy@gmail.com', NULL, 'Bebo Alashmawy', 'pending', NULL, 0, 0, '2026-06-09 16:02:51', '2026-06-09 16:02:51'),
(13, 'Bebo Alashmawy', '+20123456789', 'beboalashmawy@gmail.com', NULL, 'Bebo Alashmawy', 'pending', NULL, 0, 0, '2026-06-09 16:03:47', '2026-06-09 16:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('QRaTlccMiE1vnkwqC5F5R8Cno3DbI6jd3zPdNE9u', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYkVtQVY1OXJ1UGhzUDkyRTFCT1VtdEhtNlY0TFZzYXdiV29YOEN0UCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0IjtzOjU6InJvdXRlIjtzOjc6ImNvbnRhY3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1781200747);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) NOT NULL DEFAULT 'Aurum Restaurant',
  `site_title` varchar(255) NOT NULL DEFAULT 'Fine Dining Experience',
  `meta_description` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon_180` varchar(255) DEFAULT NULL,
  `icon_32` varchar(255) DEFAULT NULL,
  `icon_16` varchar(255) DEFAULT NULL,
  `manifest` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address_ar` varchar(255) DEFAULT NULL,
  `hours_ar` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `snapchat` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `map_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `site_title`, `meta_description`, `logo`, `icon_180`, `icon_32`, `icon_16`, `manifest`, `created_at`, `updated_at`, `address_ar`, `hours_ar`, `facebook`, `twitter`, `instagram`, `snapchat`, `tiktok`, `mobile`, `whatsapp`, `email`, `map_link`) VALUES
(1, 'Brix', 'brix agenc', 'شريكك الإبداعي في عالم الطباعة والتصميم والإعلان — نؤمن بأن كل علامة تجارية تستحق أن تُرى بأفضل صورة', 'logo/02c8TdnRxgzSCjQy1bXth2DoQcHThPnydcV92185.png', 'icon_180/YEA8LC4xtx6tj1AFnzRhc6KS6bor4BISzVZUoeJf.png', 'icon_32/9D5H6ZqGIIOIfcQE5g689E0C4BlsedYgy9ACAO3C.png', 'icon_16/2b4Z0jsou1soSHqDxL71XiCy5yWH4hXZqU53W5Wo.png', NULL, '2026-06-06 13:28:44', '2026-06-11 14:00:34', 'طنطا -  آخر الفاتح مع عمر بن الخطاب', 'يوميا من الساعة 12 مساءً لـ 12 صباحاً', 'https://www.facebook.com/nab1h', NULL, 'https://www.facebook.com/nab1h2', NULL, NULL, '01017507197', '01017507197', 'adv.brix.print@gmail.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13708.760371173357!2d30.976159350000003!3d30.79730305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f7cbb6e7ffbd3b%3A0x5093798250295859!2z2YXYs9is2K8g2KjZiNin2K_ZiQ!5e0!3m2!1sar!2seg!4v1781191225200!5m2!1sar!2seg\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"');

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(255) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `number`, `title_ar`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, '7', 'سنوات الخبره', 0, 1, '2026-06-06 16:10:10', '2026-06-06 16:11:16'),
(2, '500', 'عملاء سعداء', 0, 1, '2026-06-06 16:18:20', '2026-06-06 16:18:20'),
(3, '99%', 'نسبة رضا العملاء %', 0, 1, '2026-06-06 16:18:50', '2026-06-06 16:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bebo Alashmawy', 'beboalashmawy2@gmail.com', 'admin', NULL, '$2y$12$.1SQRqwmXvkk.Y.D3hIaP.oOR51FE6WYZVyxTJsiHAHmxY1e6kQk.', NULL, '2026-06-06 13:27:43', '2026-06-06 13:27:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_contents`
--
ALTER TABLE `home_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolios_brand_id_foreign` (`brand_id`),
  ADD KEY `portfolios_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_contents`
--
ALTER TABLE `home_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD CONSTRAINT `portfolios_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `portfolios_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
