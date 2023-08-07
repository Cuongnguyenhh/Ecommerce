-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 07, 2023 at 12:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `economerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `visible` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `view`, `visible`, `created_at`, `updated_at`) VALUES
(6, 'Shoes', 89, 0, '2023-07-26 12:43:47', NULL),
(7, 'Shirts', 3, 0, '2023-07-26 12:43:47', NULL),
(8, 'Pants', 16, 0, '2023-07-26 12:43:47', NULL),
(9, 'Coats', 74, 0, '2023-07-26 12:43:47', NULL),
(10, 'Polo Shirt', 106, 0, '2023-07-26 12:43:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `link`, `id_product`, `created_at`, `updated_at`) VALUES
(1, 't-shirt1.jpeg', 9, '2023-07-26 15:46:54', NULL),
(3, 't-shirt1-2.jpeg', 9, '2023-07-26 15:47:43', NULL),
(4, 't-shirt1-3.jpeg', 9, '2023-07-26 15:47:43', NULL),
(8, 'coat1-1.webp', 12, '2023-07-26 15:53:03', NULL),
(9, 'coat1-2.webp', 12, '2023-07-26 15:53:03', NULL),
(10, 'coat1-3.webp', 12, '2023-07-26 15:53:03', NULL),
(11, 'coat2-1.webp', 13, '2023-07-26 15:53:03', NULL),
(12, 'coat2-2.webp', 13, '2023-07-26 15:53:03', NULL),
(13, 'coat2-3.webp', 13, '2023-07-26 15:53:03', NULL),
(17, 'pant1-1.webp', 14, '2023-07-26 15:53:03', NULL),
(18, 'pant1-2.webp', 14, '2023-07-26 15:53:03', NULL),
(19, 'pant1-3.webp', 14, '2023-07-26 15:53:03', NULL),
(20, 'pant2-1.webp', 15, '2023-07-26 15:53:03', NULL),
(21, 'pant1-3.webp', 15, '2023-07-26 15:53:03', NULL),
(22, 'pant1-3.webp', 15, '2023-07-26 15:53:03', NULL),
(23, 't-shirt1.jpeg', 16, '2023-07-26 15:46:54', NULL),
(24, 't-shirt1-2.jpeg', 16, '2023-07-26 15:47:43', NULL),
(25, 't-shirt1-3.jpeg', 16, '2023-07-26 15:47:43', NULL),
(32, 'coat1-1.webp', 19, '2023-07-26 15:53:03', NULL),
(33, 'coat1-2.webp', 19, '2023-07-26 15:53:03', NULL),
(34, 'coat1-3.webp', 19, '2023-07-26 15:53:03', NULL),
(35, 'coat2-1.webp', 20, '2023-07-26 15:53:03', NULL),
(36, 'coat2-2.webp', 20, '2023-07-26 15:53:03', NULL),
(37, 'coat2-3.webp', 20, '2023-07-26 15:53:03', NULL),
(38, 'pant1-1.webp', 21, '2023-07-26 15:53:03', NULL),
(39, 'pant1-2.webp', 21, '2023-07-26 15:53:03', NULL),
(40, 'pant1-3.webp', 21, '2023-07-26 15:53:03', NULL),
(41, 'pant2-1.webp', 22, '2023-07-26 15:53:03', NULL),
(42, 'pant1-3.webp', 22, '2023-07-26 15:53:03', NULL),
(43, 'pant1-3.webp', 22, '2023-07-26 15:53:03', NULL),
(90, 'bruce-mars.jpg', 11, '2023-08-02 08:28:28', '2023-08-02 08:28:28'),
(91, 'carousel-1.jpg', 11, '2023-08-02 08:28:28', '2023-08-02 08:28:28'),
(92, 'ivana-square.jpg', 11, '2023-08-02 08:28:28', '2023-08-02 08:28:28'),
(96, 'marie.jpg', 17, '2023-08-02 09:20:21', '2023-08-02 09:20:21'),
(97, 'team-1.jpg', 17, '2023-08-02 09:20:21', '2023-08-02 09:20:21'),
(98, 'kal-visuals-square.jpg', 17, '2023-08-02 09:20:21', '2023-08-02 09:20:21'),
(99, 'kal-visuals-square.jpg', 23, '2023-08-02 09:26:57', '2023-08-02 09:26:57'),
(100, 'ivana-square.jpg', 23, '2023-08-02 09:26:57', '2023-08-02 09:26:57'),
(101, 'bruce-mars.jpg', 23, '2023-08-02 09:26:57', '2023-08-02 09:26:57'),
(102, 'kal-visuals-square.jpg', 18, '2023-08-02 09:28:08', '2023-08-02 09:28:08'),
(103, 'ivancik.jpg', 18, '2023-08-02 09:28:08', '2023-08-02 09:28:08'),
(104, 'ivana-square.jpg', 18, '2023-08-02 09:28:08', '2023-08-02 09:28:08'),
(105, 'bruce-mars.jpg', 25, '2023-08-04 09:16:59', '2023-08-04 09:16:59'),
(106, 'carousel-1.jpg', 25, '2023-08-04 09:16:59', '2023-08-04 09:16:59'),
(107, 'carousel-2.jpg', 25, '2023-08-04 09:16:59', '2023-08-04 09:16:59'),
(108, 'team-2.jpg', 32, '2023-08-04 09:17:16', '2023-08-04 09:17:16'),
(109, 'team-3.jpg', 32, '2023-08-04 09:17:16', '2023-08-04 09:17:16'),
(110, 'team-4.jpg', 32, '2023-08-04 09:17:16', '2023-08-04 09:17:16'),
(111, 'team-4.jpg', 30, '2023-08-04 09:17:32', '2023-08-04 09:17:32'),
(112, 'team-3.jpg', 30, '2023-08-04 09:17:32', '2023-08-04 09:17:32'),
(113, 'team-2.jpg', 30, '2023-08-04 09:17:32', '2023-08-04 09:17:32'),
(114, 'home-decor-1.jpg', 31, '2023-08-04 09:17:45', '2023-08-04 09:17:45'),
(115, 'ivana-square.jpg', 31, '2023-08-04 09:17:45', '2023-08-04 09:17:45'),
(116, 'kal-visuals-square.jpg', 31, '2023-08-04 09:17:45', '2023-08-04 09:17:45'),
(132, 'kal-visuals-square.jpg', 2639, '2023-08-05 03:15:28', '2023-08-05 03:15:28'),
(133, 'marie.jpg', 2639, '2023-08-05 03:15:28', '2023-08-05 03:15:28'),
(134, 'team-3.jpg', 2639, '2023-08-05 03:15:28', '2023-08-05 03:15:28'),
(135, 'ivana-square.jpg', 2640, '2023-08-05 04:48:15', '2023-08-05 04:48:15'),
(136, 'ivancik.jpg', 2640, '2023-08-05 04:48:15', '2023-08-05 04:48:15'),
(137, 'kal-visuals-square.jpg', 2640, '2023-08-05 04:48:15', '2023-08-05 04:48:15');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_25_161934_create_categories_table', 2),
(6, '2023_07_25_162314_create_products_table', 3),
(7, '2023_07_25_162700_create_comments_table', 4),
(8, '2023_07_25_165906_add_new_column_to_table', 5),
(9, '2023_07_25_183445_create__product_images_table', 6),
(10, '2023_07_26_153717__create_images_table', 7),
(11, '2023_08_03_193800_tbl_order', 8),
(12, '2023_08_03_194542_tbl_order_products', 9);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_name`, `user_phone`, `user_email`, `user_address`, `status`, `created_at`, `updated_at`) VALUES
(33, 'PhuCuong', '0939968040', 'phucuong@gmail.com', '985/62 lac long quan, tan binh', 1, '2023-08-04 08:22:11', '2023-08-05 04:13:46'),
(34, 'PhuCuong', '0939968040', 'phucuong@gmail.com', '985/62 lac long quan, tan binh', 1, '2023-08-04 08:36:53', '2023-08-04 08:36:53'),
(35, 'PhuCuong', '0939968040', 'phucuong@gmail.com', '985/62 lac long quan, tan binh', 0, '2023-08-04 08:37:35', '2023-08-04 08:37:35'),
(36, 'PhuCuong', '0939968040', 'phucuong@gmail.com', '985/62 lac long quan, tan binh', 0, '2023-08-05 04:16:07', '2023-08-05 04:16:07'),
(37, 'PhuCuong', '0939968040', 'phucuong@gmail.com', '985/62 lac long quan, tan binh', 0, '2023-08-05 04:17:15', '2023-08-05 04:17:15'),
(38, 'PhuCuong', '0939968040', 'phucuong@gmail.com', '985/62 lac long quan, tan binh', 0, '2023-08-05 04:19:25', '2023-08-05 04:19:25'),
(39, 'PhuCuong', '0939968040', 'phucuong@gmail.com', '985/62 lac long quan, tan binh', 1, '2023-08-05 04:20:58', '2023-08-05 04:20:58'),
(40, 'nguyenphucuong', '87687', 'phucuong200@gmail.com', '0', 0, '2023-08-05 04:33:15', '2023-08-05 04:33:15'),
(41, 'nguyenphucuong', '', 'phucuong200@gmail.com', '0', 1, '2023-08-05 04:34:29', '2023-08-05 04:34:29'),
(42, 'nguyenphucuong', '', 'phucuong200@gmail.com', '0', 1, '2023-08-05 04:46:08', '2023-08-05 04:46:08'),
(43, 'Admin', '2132131', 'admin@gmail.com', 'Lac long quan', 0, '2023-08-05 05:16:08', '2023-08-05 05:16:08'),
(44, 'Admin', '0939968040', 'admin@gmail.com', 'klac long quan', 0, '2023-08-06 11:29:40', '2023-08-06 11:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_product` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_product`, `quantity`, `order_id`, `created_at`, `updated_at`) VALUES
(48, 9, 12, 33, '2023-08-04 08:22:11', '2023-08-04 08:22:11'),
(49, 9, 15, 34, '2023-08-04 08:36:53', '2023-08-04 08:36:53'),
(50, 22, 4, 34, '2023-08-04 08:36:53', '2023-08-04 08:36:53'),
(51, 9, 17, 35, '2023-08-04 08:37:35', '2023-08-04 08:37:35'),
(52, 22, 4, 35, '2023-08-04 08:37:35', '2023-08-04 08:37:35'),
(53, 9, 123, 36, '2023-08-05 04:16:07', '2023-08-05 04:16:07'),
(54, 9, 123, 37, '2023-08-05 04:17:15', '2023-08-05 04:17:15'),
(55, 15, 1, 37, '2023-08-05 04:17:15', '2023-08-05 04:17:15'),
(56, 9, 123, 38, '2023-08-05 04:19:25', '2023-08-05 04:19:25'),
(57, 15, 1, 38, '2023-08-05 04:19:25', '2023-08-05 04:19:25'),
(58, 9, 123, 39, '2023-08-05 04:20:58', '2023-08-05 04:20:58'),
(59, 15, 1, 39, '2023-08-05 04:20:58', '2023-08-05 04:20:58'),
(60, 14, 1, 40, '2023-08-05 04:33:15', '2023-08-05 04:33:15'),
(61, 14, 1, 41, '2023-08-05 04:34:29', '2023-08-05 04:34:29'),
(62, 9, 3, 42, '2023-08-05 04:46:08', '2023-08-05 04:46:08'),
(63, 15, 3, 42, '2023-08-05 04:46:08', '2023-08-05 04:46:08'),
(64, 12, 2, 43, '2023-08-05 05:16:08', '2023-08-05 05:16:08'),
(65, 13, 1, 44, '2023-08-06 11:29:40', '2023-08-06 11:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('phucuong200@gmail.com', '$2y$10$XlyEfGELZo6US9MUTfpvheWtnIWPEH6CMKLHD7l.nDEqK.X06JRtW', '2023-07-25 03:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `sold` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_visible` tinyint(4) NOT NULL DEFAULT 0,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `price`, `sold`, `description`, `product_visible`, `category_id`, `created_at`, `updated_at`) VALUES
(9, 'Essential Loose T-shirt – Black', 21, 0, 'Form áo rộng dài nhiều và chất vải khá dầy nặng.Hình in Gothic style Logo dành cho Summer22.', 0, 10, '2023-07-26 15:20:09', '2023-08-02 04:47:16'),
(10, 'Heaven in Hiding Tour Shirt', 23, 0, 'Black, organic unisex Imminence T-shirt featuring the \'Heaven in Hiding\' artwork on the front; the European tour dates printed on the back; an inside nape manifesto and a woven Swedish flag tag.', 0, 10, '2023-07-01 15:20:09', '2023-08-02 05:11:52'),
(11, 'Organic unisex Imminence T-shirt 1', 32, 0, 'Streetwear nói chung và thời trang Hiphop nói riêng không bao giờ thiếu đi những chiếc Graphic Tee nổi bật với cổ tròn ôm gọn, tay lỡ và phom áo rộng linh hoạt.', 0, 10, '2023-07-01 15:20:09', '2023-08-02 08:30:56'),
(12, 'Grotesk® Premium Embroidered Unisex Bomber Jacket (LIMITED)', 213, 1, 'This versatile bomber jacket can complement most outfits and come in handy during the chillier days.', 0, 9, '2023-07-26 15:20:09', NULL),
(13, 'Love Hurts® x Champion Embroidered Packable Jacket (Pastel Blue)', 72, 1, 'It\'s made from wind and rain resistant polyester micro poplin, so it\'s perfect for outdoor sports and adventures.', 0, 9, '2023-07-25 15:20:09', NULL),
(14, 'TIME PORTALS® Unisex Shorts', 72, 1, 'Thanks to the smooth, water-repellent fabric, they\'re perfect for a multitude of activities, such as running, exercising, and even swimming.', 0, 8, '2023-07-21 15:20:09', NULL),
(15, 'Pasuteru karā パステルカラー® Unisex Shorts', 49, 2, 'Pasuteru karā パステルカラー® Unisex Shorts', 0, 8, '2023-07-26 15:20:09', NULL),
(16, '1Essential Loose T-shirt – Black', 21, 0, 'Form áo rộng dài nhiều và chất vải khá dầy nặng.Hình in Gothic style Logo dành cho Summer22.', 0, 10, '2023-07-26 15:20:09', '2023-08-04 09:15:09'),
(17, 'Heaven in Hiding Tour Shirt 1', 23, 0, 'Black, organic unisex Imminence T-shirt featuring the \'Heaven in Hiding\' artwork on the front; the European tour dates printed on the back; an inside nape manifesto and a woven Swedish flag tag.', 0, 10, '2023-07-01 15:20:09', '2023-08-02 09:20:21'),
(18, 'Organic unisex Imminence T-shirt', 32, 0, 'Streetwear nói chung và thời trang Hiphop nói riêng không bao giờ thiếu đi những chiếc Graphic Tee nổi bật với cổ tròn ôm gọn, tay lỡ và phom áo rộng linh hoạt.', 0, 10, '2023-07-01 15:20:09', '2023-08-02 09:28:08'),
(19, 'Grotesk® Premium Embroidered Unisex Bomber Jacket (LIMITED)', 213, 1, 'This versatile bomber jacket can complement most outfits and come in handy during the chillier days.', 0, 9, '2023-07-26 15:20:09', NULL),
(20, 'Love Hurts® x Champion Embroidered Packable Jacket (Pastel Blue)', 72, 1, 'It\'s made from wind and rain resistant polyester micro poplin, so it\'s perfect for outdoor sports and adventures.', 0, 9, '2023-07-25 15:20:09', NULL),
(21, 'TIME PORTALS® Unisex Shorts', 72, 1, 'Thanks to the smooth, water-repellent fabric, they\'re perfect for a multitude of activities, such as running, exercising, and even swimming.', 0, 8, '2023-07-21 15:20:09', NULL),
(22, 'Pasuteru karā パステルカラー® Unisex Shorts', 49, 2, 'Pasuteru karā パステルカラー® Unisex Shorts', 0, 8, '2023-07-26 15:20:09', NULL),
(23, 'Essential Loose T-shirt – Black 123', 21, 0, 'Form áo rộng dài nhiều và chất vải khá dầy nặng.Hình in Gothic style Logo dành cho Summer22.', 0, 10, '2023-07-26 15:20:09', '2023-08-04 09:13:52'),
(24, 'Heaven in Hiding Tour Shirt d', 23, 0, 'Black, organic unisex Imminence T-shirt featuring the \'Heaven in Hiding\' artwork on the front; the European tour dates printed on the back; an inside nape manifesto and a woven Swedish flag tag.', 0, 10, '2023-07-01 15:20:09', '2023-08-04 09:15:36'),
(25, 'Organic unisex Imminence T-shirt', 32, 0, 'Streetwear nói chung và thời trang Hiphop nói riêng không bao giờ thiếu đi những chiếc Graphic Tee nổi bật với cổ tròn ôm gọn, tay lỡ và phom áo rộng linh hoạt.', 0, 10, '2023-07-01 15:20:09', '2023-08-04 09:16:59'),
(26, 'Grotesk® Premium Embroidered Unisex Bomber Jacket (LIMITED)', 213, 1, 'This versatile bomber jacket can complement most outfits and come in handy during the chillier days.', 0, 9, '2023-07-26 15:20:09', NULL),
(27, 'Love Hurts® x Champion Embroidered Packable Jacket (Pastel Blue)', 72, 1, 'It\'s made from wind and rain resistant polyester micro poplin, so it\'s perfect for outdoor sports and adventures.', 1, 9, '2023-07-25 15:20:09', NULL),
(28, 'TIME PORTALS® Unisex Shorts', 72, 1, 'Thanks to the smooth, water-repellent fabric, they\'re perfect for a multitude of activities, such as running, exercising, and even swimming.', 0, 8, '2023-07-21 15:20:09', NULL),
(29, 'Pasuteru karā パステルカラー® Unisex Shorts', 49, 2, 'Pasuteru karā パステルカラー® Unisex Shorts', 1, 8, '2023-07-26 15:20:09', NULL),
(30, 'Essential Loose T-shirt – Black', 21, 0, 'Form áo rộng dài nhiều và chất vải khá dầy nặng.Hình in Gothic style Logo dành cho Summer22.', 1, 10, '2023-07-26 15:20:09', '2023-08-04 09:17:32'),
(31, 'Heaven in Hiding Tour Shirt', 23, 0, 'Black, organic unisex Imminence T-shirt featuring the \'Heaven in Hiding\' artwork on the front; the European tour dates printed on the back; an inside nape manifesto and a woven Swedish flag tag.', 1, 10, '2023-07-01 15:20:09', '2023-08-04 09:17:45'),
(32, 'Organic unisex Imminence T-shirt', 32, 0, 'Streetwear nói chung và thời trang Hiphop nói riêng không bao giờ thiếu đi những chiếc Graphic Tee nổi bật với cổ tròn ôm gọn, tay lỡ và phom áo rộng linh hoạt.', 0, 10, '2023-07-01 15:20:09', '2023-08-04 09:17:16'),
(33, 'Grotesk® Premium Embroidered Unisex Bomber Jacket (LIMITED)', 213, 1, 'This versatile bomber jacket can complement most outfits and come in handy during the chillier days.', 0, 9, '2023-07-26 15:20:09', NULL),
(34, 'Love Hurts® x Champion Embroidered Packable Jacket (Pastel Blue)', 72, 1, 'It\'s made from wind and rain resistant polyester micro poplin, so it\'s perfect for outdoor sports and adventures.', 0, 9, '2023-07-25 15:20:09', NULL),
(35, 'TIME PORTALS® Unisex Shorts', 72, 1, 'Thanks to the smooth, water-repellent fabric, they\'re perfect for a multitude of activities, such as running, exercising, and even swimming.', 0, 8, '2023-07-21 15:20:09', NULL),
(36, 'Pasuteru karā パステルカラー® Unisex Shorts', 49, 2, 'Pasuteru karā パステルカラー® Unisex Shorts', 0, 8, '2023-07-26 15:20:09', NULL),
(2639, 'test 123', 213, 0, 'dsadaa', 0, 10, '2023-08-05 03:15:28', '2023-08-05 03:15:28'),
(2640, 'test 1234', 213, 0, 'asdsd', 0, 10, '2023-08-05 04:48:15', '2023-08-05 04:48:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_adress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `user_adress`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nguyenphucuong', 'phucuong200@gmail.com', '', '0', NULL, '$2y$10$SMMlzzARD/kHQkD1lUn2w.pKuX9RK2hG.SYpPaqF/6zQ3u/4NeBCy', 0, NULL, '2023-07-25 03:53:14', '2023-07-25 03:53:14'),
(2, 'Admin', 'admin@gmail.com', '', '0', NULL, '$2y$10$u1Hn80xlHuuU0oRly9KKf.wBCOd9gI4t/xbO7PG88ZcQaNHL2kkx.', 1, 'Wx4toAUv468kvBDklc06vtF1AcAUsDoFFZD1zzZDAK2W9f7xVMbIQaOfkjjG', '2023-07-25 10:53:04', '2023-07-25 10:53:04'),
(7, 'PhuCuong', 'khis2boo32@gmail.com', '0939968040', '985 Lac Long Quan street, Tan Binh District HCM city, Viet Nam', NULL, '$2y$10$VnpeG9r/B2FcUc7T0M8oUuO5km1XcbHZqDnsE86XpDZ14sTjOQfBO', 0, NULL, '2023-07-27 08:48:32', '2023-07-27 08:48:32'),
(8, 'PhuCuongNguyen', 'cuongnpps25188@fpt.edu.com', '0939968040', '985 Lac Long Quan street, Tan Binh District HCM city, Viet Nam', NULL, '$2y$10$eizpNqUFH8LAVmXK3160WuCpFModP17ifRr27wcagEbe0X6B5P26a', 0, NULL, '2023-07-27 08:59:49', '2023-07-27 08:59:49'),
(9, 'PhuCuong', 'phucuong@gmail.com', '0939968040', '985/62 lac long quan, tan binh', NULL, '$2y$10$nD05YN1c//Lxl5Hx7JEdlelZokIvJTONExNnVF2y7DFdMHi.V10bu', 1, NULL, '2023-08-03 12:31:31', '2023-08-03 12:31:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_project_id_foreign` (`project_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`id_product`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_product_foreign` (`order_product`),
  ADD KEY `order_products_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2641;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_products_order_product_foreign` FOREIGN KEY (`order_product`) REFERENCES `products` (`product_id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
