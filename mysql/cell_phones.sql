-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 18, 2025 lúc 01:05 AM
-- Phiên bản máy phục vụ: 8.2.0
-- Phiên bản PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cell_phones`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attribute`
--

DROP TABLE IF EXISTS `attribute`;
CREATE TABLE IF NOT EXISTS `attribute` (
  `id_attr` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_attr`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `attribute`
--

INSERT INTO `attribute` (`id_attr`, `name`, `type`, `image`, `active`) VALUES
(1, 'màu', NULL, 'http://127.0.0.1:8000/admin/uploads/images/attribute/1702526803_z4972732147282_5448dd67ef946d89a10af0038ac78d81.jpg', 1),
(2, 'Kích thước', NULL, NULL, 1),
(3, 'Linh Kiện Điện Tử', NULL, 'http://localhost:8000/admin/uploads/images/attribute/1716910866_kich-thuoc-tieu-chuan-ghe-thu-gian-2024.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attribute_value`
--

DROP TABLE IF EXISTS `attribute_value`;
CREATE TABLE IF NOT EXISTS `attribute_value` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `attribute_id` bigint UNSIGNED NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_required` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `attribute_value_attribute_id_foreign` (`attribute_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attribute_value`
--

INSERT INTO `attribute_value` (`id`, `attribute_id`, `value`, `is_required`, `created_at`, `updated_at`) VALUES
(1, 1, 'trắng', 1, '2023-12-13 21:06:43', '2023-12-13 21:06:43'),
(2, 1, 'đỏ', 1, '2023-12-13 21:06:43', '2023-12-13 21:06:43'),
(3, 1, 'đen', 1, '2023-12-13 21:06:43', '2023-12-13 21:06:43'),
(9, 3, '4ram', 1, '2024-05-27 07:21:27', '2024-05-27 07:21:27'),
(5, 2, 'M', 1, '2024-01-02 19:52:05', '2024-01-02 19:52:05'),
(6, 2, 'L', 1, '2024-01-02 19:52:05', '2024-01-02 19:52:05'),
(7, 3, '16ram', 1, '2024-03-01 20:46:03', '2024-03-01 20:46:03'),
(8, 3, '8ram', 1, '2024-03-01 20:46:03', '2024-03-01 20:46:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_img` text COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '0',
  `name_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `id_brand` int NOT NULL AUTO_INCREMENT,
  `name_brand` varchar(255) NOT NULL,
  `logo_brand` text,
  `name_logo` text,
  `slug` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_brand`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id_brand`, `name_brand`, `logo_brand`, `name_logo`, `slug`, `status`) VALUES
(1, 'Samsung', 'http://localhost/public/uploads/images/brands/1684207355_phu-kien - Copy.png', '1684207355_phu-kien - Copy.png', 'samsung', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `name_category` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `image_category` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `name_image` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `parent_category` int DEFAULT NULL,
  `hide` int DEFAULT '1',
  `desc_category` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `meta_keyword` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `tags` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `ihome` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `slug`, `image_category`, `name_image`, `parent_category`, `hide`, `desc_category`, `meta_keyword`, `meta_description`, `meta_title`, `tags`, `ihome`) VALUES
(72, 'Nội thất phòng khách', 'noi-that-phong-khac', 'http://localhost:8000/public/uploads/images/1734539089_sofa-vang-dai-milano.png', '1734539089_sofa-vang-dai-milano.png', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1),
(87, 'Nội thất phòng ngủ', 'noi-that-phong-ng', 'http://localhost:8000/public/uploads/images/1734537875_giuong-ngu-gn022.png', '1734537875_giuong-ngu-gn022.png', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1),
(88, 'Nội thất phòng ăn', 'noi-that-phong-a', 'http://localhost:8000/public/uploads/images/1734537901_438089202_834759145336663_8344769580825509375_n-removebg-preview.png', '1734537901_438089202_834759145336663_8344769580825509375_n-removebg-preview.png', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1),
(90, 'Ghế sofa', 'ghe-sof', 'http://localhost:8000/public/uploads/images/1735911127_angie-minotti-3-removebg-preview.png', '1735911127_angie-minotti-3-removebg-preview.png', 72, 1, NULL, NULL, NULL, NULL, NULL, 1),
(91, 'Bàn trà', 'ban-tr', 'http://localhost:8000/public/uploads/images/1735911160_pebble-table__1_-removebg-preview.png', '1735911160_pebble-table__1_-removebg-preview.png', 72, 1, NULL, NULL, NULL, NULL, NULL, 1),
(92, 'Sản phẩm nổi bật', 'san-pham-noi-bat', 'http://localhost:8000/public/uploads/images/1735389807_product-1.png', '1735389807_product-1.png', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1),
(93, 'Giường Ngủ', 'giuong-ng', 'http://localhost:8000/public/uploads/images/1736092064_z6195380575840_ef98ea43098fc14ea438a64fdf37f46f-removebg-preview.png', '1736092064_z6195380575840_ef98ea43098fc14ea438a64fdf37f46f-removebg-preview.png', 87, 1, NULL, NULL, NULL, NULL, NULL, 1),
(94, 'Sofa', 'sofa', 'http://localhost:8000/public/uploads/images/1736092098_z6195307022873_8295e2ad6c6a11a2ec00b34070babd19-removebg-preview.png', '1736092098_z6195307022873_8295e2ad6c6a11a2ec00b34070babd19-removebg-preview.png', 72, 1, NULL, NULL, NULL, NULL, NULL, 1),
(95, 'Bộ bàn ăn 4 ghế', 'bo-ban-an-4-gh', 'http://localhost:8000/public/uploads/images/1736092159_z6195345613397_b7de9498ab0b840a7dcc50e5b78cc4c6-removebg-preview.png', '1736092159_z6195345613397_b7de9498ab0b840a7dcc50e5b78cc4c6-removebg-preview.png', 88, 1, NULL, NULL, NULL, NULL, NULL, 1),
(96, 'Bộ bàn ăn 6 ghế', 'bo-ban-an-6-gh', 'http://localhost:8000/public/uploads/images/1736092181_z6195344983478_3d382dcd2ec6d3d34ffb3e5d8f355bd3-removebg-preview.png', '1736092181_z6195344983478_3d382dcd2ec6d3d34ffb3e5d8f355bd3-removebg-preview.png', 88, 1, NULL, NULL, NULL, NULL, NULL, 1),
(97, 'Bộ bàn ăn 8 ghế', 'bo-ban-an-8-ghe', 'http://localhost:8000/public/uploads/images/1736092198_z6195322484444_930ea4f0306c3943789351ce06320345-removebg-preview.png', '1736092198_z6195322484444_930ea4f0306c3943789351ce06320345-removebg-preview.png', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_product`
--

DROP TABLE IF EXISTS `category_product`;
CREATE TABLE IF NOT EXISTS `category_product` (
  `id_category` int NOT NULL,
  `id_product` int NOT NULL,
  PRIMARY KEY (`id_category`,`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_product`
--

INSERT INTO `category_product` (`id_category`, `id_product`) VALUES
(19, 11),
(19, 12),
(19, 13),
(19, 14),
(19, 15),
(19, 16),
(19, 17),
(19, 18),
(19, 19),
(19, 20),
(19, 21),
(19, 22),
(19, 23),
(19, 24),
(19, 25),
(19, 26),
(19, 27),
(19, 28),
(19, 29),
(19, 30),
(19, 31),
(19, 32),
(72, 83),
(72, 84),
(72, 85),
(72, 86),
(72, 87),
(72, 88),
(72, 89),
(72, 90),
(72, 91),
(72, 92),
(72, 93),
(88, 94),
(92, 95);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

DROP TABLE IF EXISTS `color`;
CREATE TABLE IF NOT EXISTS `color` (
  `id_color` int NOT NULL,
  `name_color` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id_color`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color_product`
--

DROP TABLE IF EXISTS `color_product`;
CREATE TABLE IF NOT EXISTS `color_product` (
  `id_color` int NOT NULL,
  `id_product` int NOT NULL,
  `price` float NOT NULL,
  `status` int DEFAULT '1',
  `quanlity` int DEFAULT NULL,
  PRIMARY KEY (`id_color`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `filter_category`
--

DROP TABLE IF EXISTS `filter_category`;
CREATE TABLE IF NOT EXISTS `filter_category` (
  `id_filter_category` int NOT NULL AUTO_INCREMENT,
  `id_attr` int DEFAULT NULL,
  `id_category` int DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `value` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_filter_category`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `filter_category`
--

INSERT INTO `filter_category` (`id_filter_category`, `id_attr`, `id_category`, `created_at`, `updated_at`, `value`) VALUES
(6, 3, 19, '2024-01-30 01:33:48', '2024-01-30 01:33:48', NULL),
(7, 1, 20, '2024-05-26 01:15:43', '2024-05-26 01:15:43', NULL),
(8, 1, 21, '2024-05-26 01:16:14', '2024-05-26 01:16:14', NULL),
(9, NULL, 22, '2024-06-17 01:25:01', '2024-06-17 01:25:01', NULL),
(10, NULL, 23, '2024-06-17 01:30:17', '2024-06-17 01:30:17', NULL),
(11, NULL, 25, '2024-06-17 01:34:46', '2024-06-17 01:34:46', NULL),
(12, NULL, 28, '2024-06-17 01:38:26', '2024-06-17 01:38:26', NULL),
(13, NULL, 29, '2024-06-17 01:38:57', '2024-06-17 01:38:57', NULL),
(14, NULL, 30, '2024-06-17 01:39:29', '2024-06-17 01:39:29', NULL),
(15, NULL, 31, '2024-06-17 01:40:05', '2024-06-17 01:40:05', NULL),
(16, NULL, 55, '2024-06-17 02:39:42', '2024-06-17 02:39:42', NULL),
(17, NULL, 56, '2024-06-18 00:53:17', '2024-06-18 00:53:17', NULL),
(18, NULL, 57, '2024-06-18 00:53:52', '2024-06-18 00:53:52', NULL),
(19, NULL, 59, '2024-06-18 01:02:37', '2024-06-18 01:02:37', NULL),
(20, NULL, 60, '2024-06-18 01:02:46', '2024-06-18 01:02:46', NULL),
(21, NULL, 61, '2024-06-18 01:07:06', '2024-06-18 01:07:06', NULL),
(22, NULL, 62, '2024-11-30 01:45:29', '2024-11-30 01:45:29', NULL),
(23, NULL, 63, '2024-11-30 01:52:49', '2024-11-30 01:52:49', NULL),
(24, NULL, 64, '2024-11-30 08:44:35', '2024-11-30 08:44:35', NULL),
(25, NULL, 65, '2024-11-30 08:45:11', '2024-11-30 08:45:11', NULL),
(26, NULL, 66, '2024-11-30 08:51:25', '2024-11-30 08:51:25', NULL),
(27, NULL, 67, '2024-11-30 08:51:45', '2024-11-30 08:51:45', NULL),
(28, NULL, 68, '2024-11-30 08:52:02', '2024-11-30 08:52:02', NULL),
(29, NULL, 69, '2024-11-30 08:52:23', '2024-11-30 08:52:23', NULL),
(30, NULL, 70, '2024-11-30 08:53:31', '2024-11-30 08:53:31', NULL),
(31, 1, 71, '2024-12-07 07:27:31', '2024-12-07 07:27:31', '1,2'),
(32, 2, 71, '2024-12-07 07:27:32', '2024-12-07 07:27:32', '5,6'),
(33, NULL, NULL, '2024-12-18 08:59:05', '2024-12-18 08:59:05', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `filter_category_option`
--

DROP TABLE IF EXISTS `filter_category_option`;
CREATE TABLE IF NOT EXISTS `filter_category_option` (
  `id_filter_category_option` int NOT NULL AUTO_INCREMENT,
  `id_filter_category` int DEFAULT NULL,
  `id_category` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `value` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  PRIMARY KEY (`id_filter_category_option`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `filter_category_option`
--

INSERT INTO `filter_category_option` (`id_filter_category_option`, `id_filter_category`, `id_category`, `name`, `value`) VALUES
(6, 6, 19, 'RAM', '6GB,8GB'),
(7, 6, 19, 'Độ phân giải', '2K,4K'),
(9, 7, 20, 'testt', 'test'),
(10, 7, 20, 'testt', 'testtt'),
(11, 8, 21, 'testt', 'test'),
(12, 8, 21, 'testt', 'testtt'),
(13, 21, 61, 'CPU', 'Intel core i5,Intel core I7'),
(14, 21, 61, 'RAM', '8RAM,16RAM');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `filter_options_product`
--

DROP TABLE IF EXISTS `filter_options_product`;
CREATE TABLE IF NOT EXISTS `filter_options_product` (
  `id_filter_options_product` int NOT NULL,
  `slug` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `filter_id` int NOT NULL,
  `text` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `bg_color` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id_filter_options_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `filter_product`
--

DROP TABLE IF EXISTS `filter_product`;
CREATE TABLE IF NOT EXISTS `filter_product` (
  `id_filter_option_product` int NOT NULL,
  `id_product` int NOT NULL,
  PRIMARY KEY (`id_filter_option_product`,`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `parent_menu` bigint DEFAULT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `class` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `target` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `position` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu`
--

INSERT INTO `menu` (`id_menu`, `title`, `url`, `parent_menu`, `icon`, `class`, `target`, `type`, `position`, `created_at`, `updated_at`) VALUES
(1, 'Trang chủ', 'https:localhost', NULL, NULL, NULL, NULL, 'page', 0, NULL, NULL),
(2, 'Giới thiệu', '#', 1, NULL, NULL, NULL, 'page', 0, NULL, NULL),
(3, 'Tin tức', '#', 1, NULL, NULL, NULL, 'page', 0, NULL, NULL),
(4, 'Tin tức nổi bật', '#', 2, NULL, NULL, NULL, 'page', 0, NULL, NULL),
(5, 'Tin tức xu hướng', '#', 2, NULL, NULL, NULL, 'page', 0, NULL, NULL),
(6, 'Chính sách bảo hành', 'http://localhost/page/chinh-sach-bao-hanh', NULL, NULL, NULL, NULL, 'page', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_06_01_064453_create_permission_tables', 1),
(11, '2023_11_17_081739_attribue', 2),
(12, '2023_11_18_023807_attribute_product', 2),
(13, '2023_11_24_090505_seo', 2),
(14, '2023_11_25_044249_category', 2),
(15, '2023_11_28_074703_filter_category', 3),
(16, '2023_12_16_041438_system', 3),
(17, '2023_12_16_072032_pages', 4),
(18, '2023_12_30_102433_product_variants', 5),
(19, '2023_12_30_103529_product_variants_option', 5),
(20, '2023_12_30_104830_skus_product_variant_options', 6),
(21, '2024_01_15_092506_menu', 7),
(22, '2024_01_16_083957_type_menu', 8),
(23, '2024_02_24_092958_promotion_product', 9),
(24, '2024_02_24_093303_promotion_product', 9),
(25, '2024_03_05_151748_product_promotion', 10),
(26, '2024_07_12_091600_create_column_users', 11),
(27, '2024_07_16_154755_create_teams_table', 12),
(29, '2024_07_16_155158_add_column_department_user', 13),
(30, '2024_07_19_141317_add_column_phone_user', 14),
(31, '2024_09_04_074945_banner', 15),
(32, '2024_07_25_142211_create_sessions_table', 16),
(33, '2024_11_24_135724_add_column_user_provider', 17),
(34, '2024_11_30_083700_add_column_ihome_category', 18),
(35, '2024_12_07_141826_add_column_value_to_filter_category_table', 19);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 2),
(5, 'App\\Models\\User', 2),
(6, 'App\\Models\\User', 2),
(7, 'App\\Models\\User', 2),
(8, 'App\\Models\\User', 2),
(9, 'App\\Models\\User', 2),
(10, 'App\\Models\\User', 2),
(11, 'App\\Models\\User', 2),
(12, 'App\\Models\\User', 2),
(13, 'App\\Models\\User', 2),
(14, 'App\\Models\\User', 2),
(15, 'App\\Models\\User', 2),
(39, 'App\\Models\\User', 2),
(41, 'App\\Models\\User', 2),
(42, 'App\\Models\\User', 2),
(47, 'App\\Models\\User', 2),
(38, 'App\\Models\\User', 21),
(39, 'App\\Models\\User', 21),
(46, 'App\\Models\\User', 26),
(38, 'App\\Models\\User', 42),
(1, 'App\\Models\\User', 44),
(3, 'App\\Models\\User', 44);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 9),
(4, 'App\\Models\\User', 10),
(4, 'App\\Models\\User', 11),
(4, 'App\\Models\\User', 12),
(4, 'App\\Models\\User', 13),
(4, 'App\\Models\\User', 15),
(4, 'App\\Models\\User', 16),
(4, 'App\\Models\\User', 17),
(4, 'App\\Models\\User', 19),
(1, 'App\\Models\\User', 21),
(2, 'App\\Models\\User', 26),
(1, 'App\\Models\\User', 42),
(1, 'App\\Models\\User', 44);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id_order` int NOT NULL,
  `order_code` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_provines` int NOT NULL,
  `id_districs` int NOT NULL,
  `id_wards` int NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `total_price` float NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE IF NOT EXISTS `order_detail` (
  `id_order` int NOT NULL,
  `id_product` int NOT NULL,
  `quanlity` int NOT NULL,
  PRIMARY KEY (`id_order`,`id_product`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id_page` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keyword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pages`
--

INSERT INTO `pages` (`id_page`, `title`, `slug`, `content`, `image`, `meta_keyword`, `meta_title`, `meta_description`, `tag`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Chính sách bảo hành', 'chinh-sach-bao-hanh', NULL, NULL, NULL, NULL, NULL, 'taq,ta2', 1, NULL, NULL),
(2, 'Trang chính sách bảo mật', 'trang-chinh-sach-bao-ma', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(3, 'Trang giới thiệu', 'trang-gioi-thie', NULL, '/public/uploads/images/1705377406_kham-pha-sofa-go-phong-khach-dep.jpg', NULL, NULL, NULL, 'sax', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'post.add', 'web', '2024-01-11 02:01:04', '2024-01-11 02:01:04'),
(2, 'post.edit', 'web', '2024-01-11 02:01:10', '2024-01-11 02:01:10'),
(3, 'post.delete', 'web', '2024-01-11 02:01:18', '2024-01-11 02:01:18'),
(4, 'category.add', 'web', '2024-01-11 02:05:29', '2024-01-11 02:05:29'),
(5, 'category.edit', 'web', '2024-01-11 02:05:33', '2024-01-11 02:05:33'),
(6, 'category.delete', 'web', '2024-01-11 02:05:39', '2024-01-11 02:05:39'),
(7, 'category.show', 'web', '2024-01-11 02:05:47', '2024-01-11 02:05:47'),
(8, 'product.show', 'web', '2024-01-11 02:05:52', '2024-01-11 02:05:52'),
(9, 'product.eddit', 'web', '2024-01-11 02:05:58', '2024-01-11 02:05:58'),
(10, 'product.add', 'web', '2024-01-11 02:06:02', '2024-01-11 02:06:02'),
(11, 'product.delete', 'web', '2024-01-11 02:06:07', '2024-01-11 02:06:07'),
(12, 'attr.add', 'web', '2024-01-11 02:06:12', '2024-01-11 02:06:12'),
(13, 'attr.show', 'web', '2024-01-11 02:06:16', '2024-01-11 02:06:16'),
(14, 'attr.edit', 'web', '2024-01-11 02:06:22', '2024-01-11 02:06:22'),
(15, 'attr.delete', 'web', '2024-01-11 02:06:28', '2024-01-11 02:06:28'),
(38, 'user.show', 'web', '2024-01-11 23:27:44', '2024-01-11 23:27:44'),
(39, 'user.edit', 'web', '2024-01-11 23:40:41', '2024-01-11 23:40:41'),
(40, 'user.add', 'web', '2024-01-11 23:40:59', '2024-01-11 23:40:59'),
(41, 'user.delete', 'web', '2024-01-11 23:41:18', '2024-01-11 23:41:18'),
(42, 'delete user', 'web', '2024-01-11 23:42:23', '2024-01-11 23:42:23'),
(43, '32113132132', 'web', '2024-01-11 23:43:47', '2024-01-11 23:43:47'),
(44, '32131312312', 'web', '2024-01-11 23:43:47', '2024-01-11 23:43:47'),
(45, 'test 1', 'web', '2024-01-11 23:44:13', '2024-01-11 23:44:13'),
(46, 'clq', 'web', '2024-01-11 23:44:39', '2024-01-11 23:44:39'),
(47, 'sax', 'web', '2024-01-15 00:03:17', '2024-01-15 00:03:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=490 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id_product` int NOT NULL AUTO_INCREMENT,
  `slug` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `name_product` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `id_brand` int DEFAULT NULL,
  `p_desc_short` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `p_desc` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `product_SKU` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `status` int DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_category` varchar(40) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `attribute` json DEFAULT NULL,
  `variants` json DEFAULT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `slug`, `name_product`, `id_brand`, `p_desc_short`, `p_desc`, `product_SKU`, `status`, `created_at`, `updated_at`, `id_category`, `attribute`, `variants`) VALUES
(93, 'noi-that-phong-khach-1', 'Nội thất phòng khách 1', 1, '<p>Features :</p>\r\n\r\n<ul>\r\n	<li>It is a long established fact that a reader will be distracted.</li>\r\n	<li>Contrary to popular belief, Lorem Ipsum is not text.</li>\r\n	<li>There are many variations of passages of Lorem.</li>\r\n</ul>', '<p><strong>Mastro Table</strong>&nbsp;l&agrave; một t&aacute;c phẩm thiết kế đ&aacute;ng ch&uacute; &yacute;, thể hiện sự s&aacute;ng tạo v&agrave; t&agrave;i năng của c&aacute;c nh&agrave; thiết kế. Với mặt b&agrave;n bằng đ&aacute; cẩm thạch sang trọng, kết hợp c&ugrave;ng c&aacute;c phụ kiện gốm sứ m&agrave;u n&acirc;u ấm &aacute;p, sản phẩm tạo n&ecirc;n một kh&ocirc;ng gian tinh tế v&agrave; đầy c&aacute; t&iacute;nh.</p>\r\n\r\n<h2><strong>Thiết kế tinh tế v&agrave; độc đ&aacute;o</strong></h2>\r\n\r\n<p><strong><img alt=\"Bàn trà mastro - Thiết kế tinh tế và độc đáo\" src=\"//bizweb.dktcdn.net/thumb/grande/100/412/591/products/be-mat-ban-bong-bay-va-tinh-van-sac-sao.jpg?v=1733231240303\" /></strong></p>\r\n\r\n<p>Mẫu b&agrave;n tr&agrave; Mastro n&agrave;y thể hiện sự độc đ&aacute;o v&agrave; tinh tế trong thiết kế. Với mặt b&agrave;n bằng&nbsp;<strong>đ&aacute; cẩm thạch</strong>, n&oacute; tạo n&ecirc;n một vẻ đẹp sang trọng v&agrave; tinh tế. C&aacute;c chi tiết phụ kiện như c&aacute;c cốc v&agrave; đĩa trang tr&iacute; bằng gốm sứ m&agrave;u n&acirc;u tạo n&ecirc;n sự h&agrave;i h&ograve;a v&agrave; c&acirc;n bằng trong tổng thể thiết kế.</p>\r\n\r\n<h2><strong>Sản phẩm độc đ&aacute;o l&agrave;m từ chất liệu đặc biệt</strong></h2>\r\n\r\n<p><strong><img alt=\"Bàn trà mastro - chất liệu đặc biệt\" src=\"//bizweb.dktcdn.net/thumb/grande/100/412/591/products/z6091918045803-824c3ac6678640c999c2889e18ffaae0.jpg?v=1733231244530\" /></strong></p>\r\n\r\n<p>Điều đặc biệt l&agrave; sự kết hợp giữa c&aacute;c vật liệu kh&aacute;c nhau như đ&aacute; cẩm thạch, gốm sứ v&agrave; kim loại, tạo n&ecirc;n một sự tương phản v&agrave; sự h&agrave;i h&ograve;a th&uacute; vị. Điều n&agrave;y thể hiện sự s&aacute;ng tạo v&agrave; tầm nh&igrave;n của nh&agrave; thiết kế, khi biết c&aacute;ch kết hợp c&aacute;c yếu tố kh&aacute;c nhau để tạo n&ecirc;n một sản phẩm độc đ&aacute;o v&agrave; tinh tế.</p>', 'Consectetur delectu', 1, NULL, NULL, '90', '[{\"name\": \"1\", \"title\": [\"sax\", \"Trắng\", \"Đỏ\", \"Đen\"]}, {\"name\": \"2\", \"title\": [\"S\", \"M\", \"L\"]}]', '[{\"price\": \"20000000\", \"stock\": \"50\", \"title\": [\"Trắng\", \"S\"], \"price_old\": \"10000000\"}, {\"price\": \"2000000\", \"stock\": \"50\", \"title\": [\"Trắng\", \"M\"], \"price_old\": \"1000000\"}, {\"price\": \"200000\", \"stock\": \"50\", \"title\": [\"Trắng\", \"L\"], \"price_old\": \"100000\"}, {\"price\": \"20000000\", \"stock\": \"50\", \"title\": [\"Đỏ\", \"S\"], \"price_old\": \"10000000\"}, {\"price\": \"2000000\", \"stock\": \"50\", \"title\": [\"Đỏ\", \"M\"], \"price_old\": \"1000000\"}, {\"price\": \"200000\", \"stock\": \"50\", \"title\": [\"Đỏ\", \"L\"], \"price_old\": \"100000\"}, {\"price\": \"25000000\", \"stock\": \"50\", \"title\": [\"Đen\", \"S\"], \"price_old\": \"20000000\"}, {\"price\": \"2500000\", \"stock\": \"50\", \"title\": [\"Đen\", \"M\"], \"price_old\": \"100000\"}, {\"price\": \"2500000\", \"stock\": \"50\", \"title\": [\"Đen\", \"L\"], \"price_old\": \"2500000\"}]'),
(94, 'noi-that-phong-khach-2', 'Nội thất phòng khách 2', 1, NULL, NULL, 'Rerum consequatur E', 1, NULL, NULL, '90', '[{\"name\": \"1\"}]', NULL),
(95, 'san-pham-noi-bat-1', 'Sản phẩm Nổi Bật 1', NULL, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, 'SP1', 1, NULL, NULL, '92', '[{\"name\": \"0\"}]', NULL),
(96, 'Inventore minim prae', 'Hop Andrews', 1, NULL, NULL, 'Consectetur ea qui', 0, NULL, NULL, '97,95,91', '[{\"name\": \"0\"}]', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_detail`
--

DROP TABLE IF EXISTS `product_detail`;
CREATE TABLE IF NOT EXISTS `product_detail` (
  `id_product_detail` int NOT NULL AUTO_INCREMENT,
  `id_product` int NOT NULL,
  `id_size` int DEFAULT NULL,
  `id_color` int DEFAULT NULL,
  `price` float DEFAULT NULL,
  `price_sale` float DEFAULT NULL,
  `quanlity` int DEFAULT NULL,
  `link_img` text,
  `name_img` text,
  PRIMARY KEY (`id_product_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_image`
--

DROP TABLE IF EXISTS `product_image`;
CREATE TABLE IF NOT EXISTS `product_image` (
  `id_product_image` int NOT NULL AUTO_INCREMENT,
  `id_product` int NOT NULL,
  `link_img` text NOT NULL,
  `name_img` text NOT NULL,
  PRIMARY KEY (`id_product_image`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `product_image`
--

INSERT INTO `product_image` (`id_product_image`, `id_product`, `link_img`, `name_img`) VALUES
(11, 93, 'http://localhost:8000/public/uploads/images/products/1734539774_z6091954372571_e8837d0a86e55e33b4b7b3bba98f4884-removebg-preview.png', '1734539774_z6091954372571_e8837d0a86e55e33b4b7b3bba98f4884-removebg-preview.png'),
(12, 94, 'http://localhost:8000/public/uploads/images/products/1734539811_467766705_974844194661490_830041011849436078_n-removebg-preview.png', '1734539811_467766705_974844194661490_830041011849436078_n-removebg-preview.png'),
(13, 93, 'http://localhost:8000/public/uploads/images/products/1734854175_bulgari-ban-chu-nhat.png', '1734854175_bulgari-ban-chu-nhat.png'),
(14, 93, 'http://localhost:8000/public/uploads/images/products/1734854175_giuong-ngu-gn022.png', '1734854175_giuong-ngu-gn022.png'),
(15, 93, 'http://localhost:8000/public/uploads/images/products/1734854175_ghe-van-phong-001.png', '1734854175_ghe-van-phong-001.png'),
(16, 95, 'http://localhost:8000/public/uploads/images/products/1735389897_product-1.png', '1735389897_product-1.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_promotion`
--

DROP TABLE IF EXISTS `product_promotion`;
CREATE TABLE IF NOT EXISTS `product_promotion` (
  `promotion_id` bigint UNSIGNED DEFAULT NULL,
  `id_product` bigint UNSIGNED DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  KEY `product_promotion_promotion_id_foreign` (`promotion_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_variants`
--

DROP TABLE IF EXISTS `product_variants`;
CREATE TABLE IF NOT EXISTS `product_variants` (
  `id_product_variants` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_attr` int DEFAULT NULL,
  `id_product` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_product_variants`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_variants`
--

INSERT INTO `product_variants` (`id_product_variants`, `id_attr`, `id_product`, `created_at`, `updated_at`) VALUES
(14, 2, 24, '2024-02-27 01:27:16', '2024-02-27 01:27:16'),
(13, 1, 23, '2024-02-27 01:26:51', '2024-02-27 01:26:51'),
(12, 2, 23, '2024-02-27 01:26:51', '2024-02-27 01:26:51'),
(11, 2, 22, '2024-02-27 01:26:41', '2024-02-27 01:26:41'),
(10, 1, 21, '2024-02-27 00:58:59', '2024-02-27 00:58:59'),
(9, 3, 21, '2024-02-27 00:58:59', '2024-02-27 00:58:59'),
(7, 2, 20, '2024-02-20 23:52:01', '2024-02-20 23:52:01'),
(8, 1, 20, '2024-02-20 23:52:01', '2024-02-20 23:52:01'),
(15, 1, 24, '2024-02-27 01:27:16', '2024-02-27 01:27:16'),
(16, 2, 25, '2024-02-27 01:29:00', '2024-02-27 01:29:00'),
(17, 1, 25, '2024-02-27 01:29:00', '2024-02-27 01:29:00'),
(18, 2, 26, '2024-02-27 01:29:14', '2024-02-27 01:29:14'),
(19, 1, 26, '2024-02-27 01:29:14', '2024-02-27 01:29:14'),
(20, 2, 27, '2024-02-27 01:29:54', '2024-02-27 01:29:54'),
(21, 1, 27, '2024-02-27 01:29:54', '2024-02-27 01:29:54'),
(22, 2, 28, '2024-02-27 01:30:19', '2024-02-27 01:30:19'),
(23, 1, 28, '2024-02-27 01:30:19', '2024-02-27 01:30:19'),
(24, 2, 29, '2024-02-27 01:30:48', '2024-02-27 01:30:48'),
(25, 1, 29, '2024-02-27 01:30:48', '2024-02-27 01:30:48'),
(26, 2, 30, '2024-03-04 07:44:57', '2024-03-04 07:44:57'),
(27, 1, 30, '2024-03-04 07:44:57', '2024-03-04 07:44:57'),
(28, 1, 31, '2024-05-26 01:17:40', '2024-05-26 01:17:40'),
(29, 1, 32, '2024-05-29 22:00:19', '2024-05-29 22:00:19'),
(30, 2, 32, '2024-05-29 22:00:19', '2024-05-29 22:00:19'),
(31, 0, 83, '2024-12-18 09:32:21', '2024-12-18 09:32:21'),
(32, 0, 86, '2024-12-18 09:33:58', '2024-12-18 09:33:58'),
(33, 0, 89, '2024-12-18 09:35:09', '2024-12-18 09:35:09'),
(34, 0, 90, '2024-12-18 09:35:17', '2024-12-18 09:35:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_variants_option`
--

DROP TABLE IF EXISTS `product_variants_option`;
CREATE TABLE IF NOT EXISTS `product_variants_option` (
  `id_product_variants_option` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_product_variants` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_value_attr` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_product_variants_option`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_variants_option`
--

INSERT INTO `product_variants_option` (`id_product_variants_option`, `id_product_variants`, `name`, `id_value_attr`, `created_at`, `updated_at`) VALUES
(3, 24, 's - m - l', NULL, '2024-02-27 01:30:48', '2024-02-27 01:30:48'),
(5, 25, 'red', NULL, '2024-02-27 01:30:48', '2024-02-27 01:30:48'),
(7, 26, 's-m-l', NULL, '2024-03-04 07:44:57', '2024-03-04 07:44:57'),
(8, 26, NULL, NULL, '2024-03-04 07:44:57', '2024-03-04 07:44:57'),
(9, 27, 'black-white', NULL, '2024-03-04 07:44:57', '2024-03-04 07:44:57'),
(10, 27, NULL, NULL, '2024-03-04 07:44:57', '2024-03-04 07:44:57'),
(11, 28, '1', NULL, '2024-05-26 01:17:40', '2024-05-26 01:17:40'),
(12, 28, NULL, NULL, '2024-05-26 01:17:40', '2024-05-26 01:17:40'),
(13, 29, 'trắng-đen', NULL, '2024-05-29 22:00:19', '2024-05-29 22:00:19'),
(14, 29, NULL, NULL, '2024-05-29 22:00:19', '2024-05-29 22:00:19'),
(15, 30, 's-m-l', NULL, '2024-05-29 22:00:19', '2024-05-29 22:00:19'),
(16, 30, NULL, NULL, '2024-05-29 22:00:19', '2024-05-29 22:00:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int DEFAULT NULL,
  `from` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `to` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `promotion`
--

INSERT INTO `promotion` (`id`, `title`, `type`, `from`, `to`, `created_at`, `updated_at`, `status`, `discount`) VALUES
(1, 'Prof. Donnie Hilpert V', NULL, '2009-10-05 02:00:54', '1973-07-21 23:00:33', NULL, NULL, 0, '11'),
(2, 'Matilda Donnelly', NULL, '1996-09-06 15:09:32', '2007-07-27 05:05:19', NULL, NULL, 0, ''),
(3, 'Mohammed Rodriguez', NULL, '2010-09-24 20:23:09', '1973-10-29 16:34:21', NULL, NULL, 1, ''),
(4, 'Cora Feeney', NULL, '1974-01-26 13:28:51', '1972-08-11 00:48:48', NULL, NULL, 0, ''),
(5, 'Gabriella Mayer', NULL, '1992-09-25 13:35:55', '1998-03-16 23:48:48', NULL, NULL, 1, ''),
(6, 'Madelyn White', NULL, '2020-01-09 14:54:32', '1981-11-27 18:24:11', NULL, NULL, 0, ''),
(7, 'Marlene Cummerata', NULL, '1981-07-03 12:04:14', '1981-10-13 11:14:31', NULL, NULL, 1, ''),
(8, 'Lauryn Morar', NULL, '2018-11-12 11:21:03', '2018-06-13 05:30:47', NULL, NULL, 0, ''),
(9, 'Miss Fannie Stroman', NULL, '1970-12-03 23:52:20', '1990-10-14 10:20:47', NULL, NULL, 0, ''),
(10, 'Prof. Brigitte Rohan DVM', NULL, '1986-12-09 06:28:46', '1988-07-12 10:11:07', NULL, NULL, 0, ''),
(11, '03/03', NULL, '2024-03-06', '2024-03-09', NULL, NULL, 1, ''),
(12, 'giảm giá đơn hàng', 1, '2024-03-06', '2024-03-08', NULL, NULL, 1, '30%'),
(13, 'dasdas', 1, '2024-11-20 00:18:00', '2024-11-29 22:15:00', NULL, NULL, 1, 'dasadsadsadsadsads'),
(14, 'dasdasad', 1, '2024-11-06 22:17:00', '2024-11-26 22:17:00', NULL, NULL, 1, '222'),
(15, 'dasdasad', 1, '2024-11-06 22:17:00', '2024-11-26 22:17:00', NULL, NULL, 1, '222');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate`
--

DROP TABLE IF EXISTS `rate`;
CREATE TABLE IF NOT EXISTS `rate` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_product` int NOT NULL,
  `user` int NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `rate` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `rate_id_product_foreign` (`id_product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate_product`
--

DROP TABLE IF EXISTS `rate_product`;
CREATE TABLE IF NOT EXISTS `rate_product` (
  `id_rate` int NOT NULL,
  `id_product` int NOT NULL,
  `rate` int NOT NULL,
  PRIMARY KEY (`id_rate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'biên tập', 'web', '2024-01-11 02:00:18', '2024-01-11 02:00:18'),
(2, 'SEO', 'web', '2024-01-11 02:04:39', '2024-01-11 02:04:39'),
(3, 'Administrator', 'web', '2024-01-11 02:09:08', '2024-01-11 02:09:08'),
(4, 'Super Admin', 'web', '2024-01-11 23:42:23', '2024-01-11 23:42:23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(3, 1),
(1, 2),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(39, 3),
(41, 3),
(47, 3),
(42, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seo`
--

DROP TABLE IF EXISTS `seo`;
CREATE TABLE IF NOT EXISTS `seo` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('5nTS6rJr1U70oLWV3N2rXFVay9DenaX5W41nnDWW', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRlo4THp1YWNuN1dnMVlNek5KQ2xCVmNad3hMTDlJWFhqTWNNdkh2eSI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyNzoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1736177101),
('z877Lo8223OXifmdndoBeIjkJWIIf0P4x3aLkjjE', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoicFkwWVFwY1htellZNXoyaUZpVm52V1NRdjdOTnhId0hUaEg4MGVrViI7czoxODoiZmxhc2hlcjo6ZW52ZWxvcGVzIjthOjA6e31zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NjoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2FkbWluL3Byb2R1Y3QvZWRpdD9pZD05MyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1736178563);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

DROP TABLE IF EXISTS `size`;
CREATE TABLE IF NOT EXISTS `size` (
  `id_size` int NOT NULL AUTO_INCREMENT,
  `id_product` int NOT NULL,
  `name_size` varchar(50) NOT NULL,
  PRIMARY KEY (`id_size`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skus_product_variant_options`
--

DROP TABLE IF EXISTS `skus_product_variant_options`;
CREATE TABLE IF NOT EXISTS `skus_product_variant_options` (
  `id_skus_product_variant_options` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_product_variants` bigint DEFAULT NULL,
  `id_product_variant_options` bigint DEFAULT NULL,
  `id_product` int NOT NULL,
  `attribute` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int NOT NULL DEFAULT '0',
  `discount` int NOT NULL DEFAULT '0',
  `stock` int NOT NULL DEFAULT '0',
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_skus_product_variant_options`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `skus_product_variant_options`
--

INSERT INTO `skus_product_variant_options` (`id_skus_product_variant_options`, `id_product_variants`, `id_product_variant_options`, `id_product`, `attribute`, `sku`, `price`, `discount`, `stock`, `image`, `created_at`, `updated_at`) VALUES
(8, NULL, NULL, 20, '64GB-white', NULL, 100000, 500000, 50, NULL, NULL, NULL),
(9, NULL, NULL, 20, '64GB-black', NULL, 100000, 500000, 50, NULL, NULL, NULL),
(10, NULL, NULL, 21, '2ram - red', NULL, 20000, 0, 50, NULL, NULL, NULL),
(11, NULL, NULL, 21, '4ram - red - 2ram - black', NULL, 20000, 0, 50, NULL, NULL, NULL),
(12, NULL, NULL, 21, '4ram - black', NULL, 11111, 0, 50, NULL, NULL, NULL),
(13, NULL, NULL, 21, '6ram - red', NULL, 22222, 0, 50, NULL, NULL, NULL),
(14, NULL, NULL, 21, '6ram - black', NULL, 33333, 0, 50, NULL, NULL, NULL),
(15, NULL, NULL, 24, 's - red', NULL, 150000, 0, 50, NULL, NULL, NULL),
(16, NULL, NULL, 24, 'm - red', NULL, 150020, 0, 50, NULL, NULL, NULL),
(17, NULL, NULL, 24, 'l - red', NULL, 0, 0, 50, NULL, NULL, NULL),
(18, NULL, NULL, 25, 's - red', NULL, 150000, 0, 50, NULL, NULL, NULL),
(19, NULL, NULL, 25, 'm - red', NULL, 150020, 0, 50, NULL, NULL, NULL),
(20, NULL, NULL, 25, 'l - red', NULL, 0, 0, 50, NULL, NULL, NULL),
(21, NULL, NULL, 26, 's - red', NULL, 150000, 0, 50, NULL, NULL, NULL),
(22, NULL, NULL, 26, 'm - red', NULL, 150020, 0, 50, NULL, NULL, NULL),
(23, NULL, NULL, 26, 'l - red', NULL, 0, 0, 50, NULL, NULL, NULL),
(24, NULL, NULL, 27, 's - red', NULL, 150000, 0, 50, NULL, NULL, NULL),
(25, NULL, NULL, 27, 'm - red', NULL, 150020, 0, 50, NULL, NULL, NULL),
(26, NULL, NULL, 27, 'l - red', NULL, 0, 0, 50, NULL, NULL, NULL),
(27, NULL, NULL, 28, 's - red', NULL, 150000, 0, 50, NULL, NULL, NULL),
(28, NULL, NULL, 28, 'm - red', NULL, 150020, 0, 50, NULL, NULL, NULL),
(29, NULL, NULL, 28, 'l - red', NULL, 0, 0, 50, NULL, NULL, NULL),
(30, NULL, NULL, 29, 's - red', NULL, 150000, 0, 50, NULL, NULL, NULL),
(31, NULL, NULL, 29, 'm - red', NULL, 150020, 0, 50, NULL, NULL, NULL),
(32, NULL, NULL, 29, 'l - red', NULL, 0, 0, 50, NULL, NULL, NULL),
(33, NULL, NULL, 30, 's - black', NULL, 0, 0, 50, NULL, NULL, NULL),
(34, NULL, NULL, 30, 'm - black - s - white', NULL, 0, 0, 50, NULL, NULL, NULL),
(35, NULL, NULL, 30, 'l - black', NULL, 0, 0, 50, NULL, NULL, NULL),
(36, NULL, NULL, 30, 'm - white', NULL, 0, 0, 50, NULL, NULL, NULL),
(37, NULL, NULL, 30, 'l - white', NULL, 0, 0, 50, NULL, NULL, NULL),
(38, NULL, NULL, 31, '1', NULL, 9999, 99999, 99999, NULL, NULL, NULL),
(39, NULL, NULL, 32, 'trắng - s', NULL, 0, 0, 50, NULL, NULL, NULL),
(40, NULL, NULL, 32, 'trắng - m', NULL, 0, 0, 50, NULL, NULL, NULL),
(41, NULL, NULL, 32, 'trắng - l', NULL, 0, 0, 50, NULL, NULL, NULL),
(42, NULL, NULL, 32, 'đen - s', NULL, 0, 0, 50, NULL, NULL, NULL),
(43, NULL, NULL, 32, 'đen - m', NULL, 0, 0, 50, NULL, NULL, NULL),
(44, NULL, NULL, 32, 'đen - l', NULL, 0, 0, 50, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `system`
--

DROP TABLE IF EXISTS `system`;
CREATE TABLE IF NOT EXISTS `system` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_site` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zalo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hotline` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_tag_manager` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_adsense` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `system`
--

INSERT INTO `system` (`id`, `name_site`, `facebook`, `zalo`, `instagram`, `youtube`, `email`, `hotline`, `logo`, `favicon`, `meta_keyword`, `meta_title`, `meta_description`, `footer`, `google_analytics`, `google_tag_manager`, `google_adsense`, `google_map`, `created_at`, `updated_at`) VALUES
(1, 'SHOPSSSS', 'https://wwww.facebook.com/user', 'https://wwww.zalo.me/user', 'https://wwww.instangram.com/user', 'https://wwww.youtube.com/user', 'abc@gmail.com', '0123456789', 'http://127.0.0.1:8000/public/uploads/images/products/1702709838_no-image.png', 'http://127.0.0.1:8000/public/uploads/images/products/1702709838_no-image.png', 'dsadsdasasd', 'dsaasdas', 'asdasdsd', NULL, NULL, NULL, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teams`
--

INSERT INTO `teams` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Quản lý nhân sự', '2024-07-16 21:15:29', '2024-07-16 21:15:29'),
(2, 'Quản lý Content', '2024-07-16 21:15:29', '2024-07-16 21:15:29'),
(3, 'SEO', '2024-07-16 21:15:29', '2024-07-16 21:15:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `typemenu`
--

DROP TABLE IF EXISTS `typemenu`;
CREATE TABLE IF NOT EXISTS `typemenu` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabled` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `typemenu`
--

INSERT INTO `typemenu` (`id`, `title`, `enabled`, `created_at`, `updated_at`) VALUES
(1, 'Menu chính', 1, '2024-01-16 02:21:00', '2024-01-16 02:21:00'),
(2, 'Menu chính', 1, '2024-01-16 02:21:09', '2024-01-16 02:21:09'),
(3, 'Menu chính', 1, '2024-01-16 02:22:02', '2024-01-16 02:22:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `provider_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link_img` text COLLATE utf8mb4_unicode_ci,
  `name_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `provider_name`, `provider_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `link_img`, `name_img`, `team_id`, `phone`) VALUES
(2, NULL, NULL, 'Kacie', 'abc@gmail.comsss', '2024-01-09 19:35:12', '$2y$10$9gkqBahvrMwncARB7qlQgeGRM6onMmCJFb2NfABL8rahmbjgZErkK', 'u3wSkcZN5V0chZrjmXbQgQGU9GuAQYeScWnYiITT53PkqjmTnmgdsDxYrF82', '2024-01-09 19:35:12', '2024-07-20 06:54:46', '/storage/uploads/1721483686_1-1-8afngua-thai-1166-1432567926-1432714003907-1433209804125.jpg', '1721483686_1-1-8afngua-thai-1166-1432567926-1432714003907-1433209804125.jpg', '1', '0123456789'),
(21, NULL, NULL, 'Nguyễn Triển', 'anhtrien147@gmail.com', NULL, '$2y$10$EeG0KQP6N70iI5R40hirJu5mBIWSP9JrshYfOAanTphTDXjlSO6LW', NULL, '2024-07-15 21:18:36', '2024-07-15 21:18:36', NULL, NULL, '2', NULL),
(26, NULL, NULL, 'Nguyễn Thị Tố Sương', 'likgamerstudio@gmail.com', NULL, '$2y$10$gq5vrCAGCIL7CDP9.8RPKuPdDO6CiTwZTnS8HtFyzq0yzsFFX.G9i', 'ScVfsgLCGu8czy6IgGSTXeaRV8hXoEh5PkEGa1Y0k10Aolu1mgEJQDVIFGTJ', '2024-07-17 01:29:40', '2024-07-17 01:29:40', NULL, NULL, '2', NULL),
(42, NULL, NULL, 'Nguyễn thị tố sương', 'tosuong337@gmail.com', NULL, '$2y$10$.hE4tcCr/EaJgIamTCQNuOGvpnHV1HRO53u7HGoB.WpBC49obJOuq', NULL, '2024-07-17 01:47:42', '2024-07-17 01:47:42', NULL, NULL, '1', NULL),
(44, 'google', '107644881482113793777', 'An Đông Phòng Khám', 'bpquangcao.pkad@gmail.com', NULL, 'eyJpdiI6IlZQczlQNzhWaXNqa3QxeEZFWDB4NHc9PSIsInZhbHVlIjoiWXh5MTVlU2R3RDl5NVY0dnVTendqdz09IiwibWFjIjoiMjJlOTEyODAzMjg3ZThiNGFjOGFiZjg2MjU1MDM4ODk3NWMxMTNlY2U4ODU0ODUzMzY2ZjkwMDg3MjkyZjcxZCIsInRhZyI6IiJ9', '5vBDzwzYVUWEHGYvSnltw3eetzobJAUYje8R2w2MsLmrmXHiLcrdq3oDxuXy', '2024-11-24 07:59:52', '2024-11-24 07:59:52', NULL, NULL, NULL, NULL);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
