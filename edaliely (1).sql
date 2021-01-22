-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03 يناير 2021 الساعة 08:56
-- إصدار الخادم: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edaliely`
--

-- --------------------------------------------------------

--
-- بنية الجدول `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'NYX', 'a', 'a', 'images/dGcWXcBaQUtSjkPzsJ2uWToCrNRXtd1moZIgoKcm.jpeg', '2020-11-22 06:46:04', '2020-12-02 10:45:46', '2020-12-02 10:45:46'),
(2, 'play', 'play', 'fcbcvb', '', '2020-12-01 07:34:36', '2020-12-02 10:45:48', '2020-12-02 10:45:48'),
(3, 'Green Apple', 'Green Apple', 'Green Apple', 'images/vfAPfqUgf1Dt3qI1GHHH2fMh5WN3RbiucjcExhKK.png', '2020-12-02 10:46:29', '2020-12-02 10:46:29', NULL),
(4, 'SAMSUNG', 'SAMSUNG', 'SAMSUNG', 'images/jnOpUeFZjts5DfX6MhKR87lJHeZJo473HCLy51wv.png', '2020-12-02 10:47:07', '2020-12-02 10:47:07', NULL),
(5, 'PUMA', 'PUMA', 'PUMA', 'images/YbawwUnQNcE22JVRgZpyzaQcxJrgZwNms7OIiBeO.png', '2020-12-02 10:47:28', '2020-12-02 10:47:28', NULL),
(6, 'apple', 'apple', 'apple', 'images/vIs7AzMZjDKKfPxbS80u3QmpCbjfFBJ6VtWDDpRn.png', '2020-12-02 10:47:48', '2020-12-02 10:47:48', NULL),
(7, 'adidas', 'adidas', 'adidas', 'images/L3wHKin6JanhYWfdWdMzM9KIkUz93zn5qlRbL6sk.png', '2020-12-02 10:48:06', '2020-12-02 10:48:06', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `is_active`, `parent_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'الجمال والعناية الشخصية', 'a', 1, 0, '', NULL, NULL),
(2, 'البقالة', 'b', 1, 0, '', NULL, NULL),
(3, 'موبايلات واكسسواراتها', 'c', 1, 0, '', NULL, NULL),
(4, 'كمبيوترات واكسسواراتها', 'كمبيوترات واكسسواراتها', 1, 0, '', NULL, NULL),
(5, 'أجهزة كهربائية والكترونية ', 'أجهزة كهربائية والكترونية ', 1, 0, '', NULL, NULL),
(6, 'المنزل والمطبخ', 'المنزل والمطبخ', 1, 0, '', NULL, NULL),
(7, 'قرطاسية وتعليم', 'قرطاسية وتعليم', 1, 0, '', NULL, NULL),
(8, 'ديكور ومفروشات', 'ديكور ومفروشات', 1, 0, '', NULL, NULL),
(9, 'عالم الطفل', 'عالم الطفل', 1, 0, '', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `category_product`
--

CREATE TABLE `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'a', '2020-11-22 06:46:41', '2020-11-22 06:46:41'),
(2, 2, 1, 'a', '2020-11-22 06:58:48', '2020-11-22 06:58:48'),
(3, 3, 1, 'رائع', '2020-12-01 05:28:35', '2020-12-01 05:28:35'),
(4, 4, 1, '1', '2020-12-01 05:31:14', '2020-12-01 05:31:14'),
(5, 5, 1, '1', '2020-12-01 05:32:43', '2020-12-01 05:32:43'),
(6, 6, 1, 'رلاؤرلا', '2020-12-01 05:35:53', '2020-12-01 05:35:53'),
(7, 7, 7, 'سسسس', '2020-12-02 10:59:47', '2020-12-02 10:59:47'),
(8, 8, 7, 'بيب', '2020-12-02 11:07:58', '2020-12-02 11:07:58'),
(9, 9, 7, 'يب', '2020-12-02 11:09:51', '2020-12-02 11:09:51'),
(10, 10, 7, 'بسبسش', '2020-12-02 11:10:50', '2020-12-02 11:10:50'),
(11, 11, 3, 'ssss', '2020-12-02 11:34:04', '2020-12-02 11:34:04'),
(12, 12, 3, 'dfdf', '2020-12-02 11:35:07', '2020-12-02 11:35:07'),
(13, 13, 3, 'dsfvsd', '2020-12-02 11:35:59', '2020-12-02 11:35:59'),
(14, 14, 3, 'fgdfg', '2020-12-02 11:36:51', '2020-12-02 11:36:51'),
(17, 16, 3, 'dfdf', '2020-12-03 11:31:48', '2020-12-03 11:31:48');

-- --------------------------------------------------------

--
-- بنية الجدول `category_store`
--

CREATE TABLE `category_store` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `category_store`
--

INSERT INTO `category_store` (`id`, `category_id`, `store_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `governorate_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `cities`
--

INSERT INTO `cities` (`id`, `name`, `governorate_id`, `is_active`, `zip_code`, `longitude`, `latitude`, `created_at`, `updated_at`) VALUES
(1, 'التل', 2, 1, '+963', '263565', '56565', NULL, NULL),
(2, 'القلمون', 2, 1, '+963', '26546', '65656', NULL, NULL),
(3, 'جرمانا', 1, 1, '+963', '56565', '65656', NULL, NULL),
(4, 'قدسبا', 1, 1, '+963', '5465465', '56565', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `call_perfix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `countries`
--

INSERT INTO `countries` (`id`, `name`, `iso_code`, `currency`, `is_active`, `call_perfix`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 'سوريا', 'نتيبنا', 'الليرة', 1, '+963', '+963', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(11) NOT NULL,
  `currency_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usd_ratio` decimal(8,2) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `custom_fields`
--

CREATE TABLE `custom_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `custom_fields`
--

INSERT INTO `custom_fields` (`id`, `name`, `is_active`, `image`, `description`, `created_at`, `updated_at`) VALUES
(4, 'اللون', 1, '', '', NULL, NULL),
(5, 'الحجم', 1, '', '', NULL, NULL),
(6, 'السعة', 1, '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `custom_field_product`
--

CREATE TABLE `custom_field_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `custom_field_id` int(11) NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `custom_field_product`
--

INSERT INTO `custom_field_product` (`id`, `product_id`, `custom_field_id`, `value`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'a', 'sssssss', '2020-11-22 06:46:41', '2020-11-22 06:46:41'),
(2, 1, 2, 'b', 'sssssss', '2020-11-22 06:46:41', '2020-11-22 06:46:41'),
(3, 2, 1, 'a', 'sssssss', '2020-11-22 06:58:48', '2020-11-22 06:58:48'),
(4, 3, 4, 'كريمي رقم 201', 'sssssss', '2020-12-01 05:28:35', '2020-12-01 05:28:35'),
(5, 4, 4, 'عدة الوان', 'sssssss', '2020-12-01 05:31:14', '2020-12-01 05:31:14'),
(6, 5, 4, 'شفاف 700', 'sssssss', '2020-12-01 05:32:43', '2020-12-01 05:32:43'),
(7, 6, 4, 'كريمي رقم 201', 'sssssss', '2020-12-01 05:35:53', '2020-12-01 05:35:53'),
(8, 7, 5, 'حجم وسط', 'sssssss', '2020-12-02 10:59:47', '2020-12-02 10:59:47'),
(9, 8, 6, ' ليتر', 'sssssss', '2020-12-02 11:07:58', '2020-12-02 11:07:58'),
(10, 9, 6, 'نصف ليتر', 'sssssss', '2020-12-02 11:09:51', '2020-12-02 11:09:51'),
(11, 10, 6, 'نصف ليتر', 'sssssss', '2020-12-02 11:10:50', '2020-12-02 11:10:50'),
(12, 11, 4, 'black', 'sssssss', '2020-12-02 11:34:04', '2020-12-02 11:34:04'),
(13, 12, 4, 'grey', 'sssssss', '2020-12-02 11:35:07', '2020-12-02 11:35:07'),
(14, 13, 4, 'black', 'sssssss', '2020-12-02 11:35:59', '2020-12-02 11:35:59'),
(15, 14, 4, 'blue', 'sssssss', '2020-12-02 11:36:50', '2020-12-02 11:36:50'),
(16, 16, 4, 'black', 'sssssss', '2020-12-03 11:31:48', '2020-12-03 11:31:48');

-- --------------------------------------------------------

--
-- بنية الجدول `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `governorates`
--

CREATE TABLE `governorates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `call_perfix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `governorates`
--

INSERT INTO `governorates` (`id`, `name`, `country_id`, `is_active`, `call_perfix`, `zip_code`, `longitude`, `latitude`, `created_at`, `updated_at`) VALUES
(1, 'دمشق', 1, 1, '+963', '011', '56565655', '565656', NULL, NULL),
(2, 'ريف دمشق', 1, 1, '+963', '011', '678567', '5646', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `languages`
--

CREATE TABLE `languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_rtl` tinyint(1) NOT NULL,
  `lang_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_18_111224_create_brands_table', 1),
(5, '2020_10_18_111424_create_products_table', 1),
(6, '2020_10_18_111533_create_custom_fields_table', 1),
(7, '2020_10_18_111623_create_categories_table', 1),
(8, '2020_10_18_111644_create_countries_table', 1),
(9, '2020_10_18_111711_create_languages_table', 1),
(10, '2020_10_21_062304_create_product_images_table', 1),
(11, '2020_10_21_104659_add_softdelete_column_to_brands_table', 1),
(12, '2020_11_09_123441_create_category_product_table', 1),
(13, '2020_11_09_123906_create_custom_field_product_table', 1),
(14, '2020_11_11_122658_create_stores_table', 1),
(15, '2020_11_11_123308_create_product_store_table', 1),
(16, '2020_11_18_122845_create_tables_table', 1),
(17, '2020_11_18_123452_create_category_store_table', 1),
(18, '2020_11_18_125556_create_images_table', 1),
(19, '2020_11_29_075239_create_store__category__images_table', 2),
(20, '2020_11_30_075334_create_governorates_table', 3),
(21, '2020_11_30_075603_create_cities_table', 3),
(22, '2020_11_30_075625_create_streets_table', 3),
(23, '2020_12_07_112915_create_store__ratings_table', 4),
(24, '2020_12_07_113156_create_product__store__ratings_table', 4),
(25, '2020_12_09_075534_create_orders_table', 5),
(26, '2020_12_09_075816_create_order__details_table', 5),
(27, '2020_12_09_075841_create_payments_table', 5),
(28, '2020_12_09_081111_create_order__statuses_table', 5),
(29, '2020_12_09_125159_create_payment_store_table', 6),
(30, '2020_12_13_103352_create_shipment__statuses_table', 7),
(31, '2020_12_13_103612_create_shippings_table', 7),
(32, '2020_12_13_103649_create_shipment__status__catalogs_table', 7),
(33, '2020_12_13_103709_create_shipment__types_table', 7),
(34, '2020_12_14_094333_create_currencies_table', 8),
(35, '2020_12_15_071717_create_store__designs_table', 9),
(36, '2020_12_15_074650_create_store__nav__designs_table', 9),
(37, '2020_12_15_080255_create_store__header__images_table', 9);

-- --------------------------------------------------------

--
-- بنية الجدول `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `invoice_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `order__details`
--

CREATE TABLE `order__details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price_each` decimal(8,2) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `measurement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `order__statuses`
--

CREATE TABLE `order__statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pay_mode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cheque_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cheque_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `payment_store`
--

CREATE TABLE `payment_store` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) NOT NULL,
  `barcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productcol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_appear` tinyint(1) NOT NULL,
  `meta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `brand_id`, `barcode`, `productcol`, `is_active`, `is_appear`, `meta`, `description`, `created_at`, `updated_at`) VALUES
(1, 'a', 'a', 1, 'a', 'a', 0, 0, 'a', 'a', '2020-11-22 06:46:41', '2020-12-02 06:00:03'),
(2, 'b', 'b', 1, 'b', 'b', 0, 0, 'b', 'b', '2020-11-22 06:58:48', '2020-12-02 06:00:07'),
(3, 'NYX كونسلیر', 'NYX', 1, 'dfgdf', 'gfdgdf', 1, 1, 'fgdfg', 'dfgdfgd', '2020-12-01 05:28:35', '2020-12-01 05:28:35'),
(4, 'علبة الوان مائیة جافة 12 لون', 'KAIDISI', 1, 'gfgf', 'fgfg', 1, 1, 'fgfg', 'fgfgfg', '2020-12-01 05:31:14', '2020-12-01 05:31:14'),
(5, 'NYX طلاء أظافر من', 'NYX', 1, 'fdgfdg', 'dfgdfg', 1, 1, 'dfgdfg', 'fgdfgdf', '2020-12-01 05:32:43', '2020-12-01 05:32:43'),
(6, 'playبلسم شعر من', 'PLAY', 2, 'cbgfdgb', 'fdgbdf', 1, 1, 'fgbdfbg', 'fbdfb', '2020-12-01 05:35:53', '2020-12-01 05:35:53'),
(7, 'حافظة طعام بلاستیكیة', 'حافظة طعام بلاستیكیة', 7, 'حافظة طعام بلاستیكیة', 'حافظة طعام بلاستیكیة', 1, 1, 'حافظة طعام بلاستیكیة', 'حافظة طعام بلاستیكیة', '2020-08-07 09:59:47', '2020-12-02 10:59:47'),
(8, 'ترمس ماء صغیر1', 'ترمس ماء صغیر', 3, 'ترمس ماء صغیر', 'ترمس ماء صغیر', 1, 1, 'ترمس ماء صغیر', 'ترمس ماء صغیر', '2020-10-08 10:07:58', '2020-12-02 11:07:58'),
(9, 'ترمس ماء صغیر', 'ترمس ماء صغیر', 7, 'ترمس ماء صغیر', 'ترمس ماء صغیر', 1, 1, 'ترمس ماء صغیر', 'ترمس ماء صغیر', '2020-08-06 10:09:51', '2020-12-02 11:09:51'),
(10, 'ترمس ماء صغیر', 'ترمس ماء صغیر', 6, 'ترمس ماء صغیر', 'ترمس ماء صغیر', 1, 1, 'ترمس ماء صغیر', 'ترمس ماء صغیر', '2020-10-01 10:10:50', '2020-12-02 11:10:50'),
(11, 'Xiaomi OPPO A52', 'Xiaomi OPPO A52', 4, 'Xiaomi OPPO A52', 'Xiaomi OPPO A52', 1, 1, 'Xiaomi OPPO A52', 'Xiaomi OPPO A52', '2020-06-18 10:34:03', '2020-12-02 11:34:03'),
(12, 'Xiaomi Redmi Note7', 'Xiaomi Redmi Note7', 4, 'Xiaomi Redmi Note7', 'Xiaomi Redmi Note7', 1, 1, 'Xiaomi Redmi Note7', 'Xiaomi Redmi Note7', '2020-08-07 10:35:07', '2020-12-02 11:35:07'),
(13, 'I Phone 7 plus', 'I Phone 7 plus', 6, 'I Phone 7 plus', 'I Phone 7 plus', 1, 1, 'I Phone 7 plus', 'I Phone 7 plus', '2020-06-10 10:35:59', '2020-12-02 11:35:59'),
(14, 'Xiaomi Redmi 9 Prime', 'Xiaomi Redmi 9 Prime', 4, 'Xiaomi Redmi 9 Prime', 'Xiaomi Redmi 9 Prime', 1, 1, 'Xiaomi Redmi 9 Prime', 'Xiaomi Redmi 9 Prime', '2020-06-17 10:36:50', '2020-12-02 11:36:50'),
(16, 'Xiaomi Redmi Note', 'Xiaomi Redmi Note7', 3, 'Xiaomi Redmi Note7', 'Xiaomi Redmi Note7', 1, 1, 'Xiaomi Redmi Note7', 'Xiaomi Redmi Note7Xiaomi Redmi Note7', '2020-08-06 10:31:48', '2020-12-03 11:31:48');

-- --------------------------------------------------------

--
-- بنية الجدول `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_cover` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `is_cover`, `created_at`, `updated_at`) VALUES
(1, 1, 'images/JnXFMdAAIqxSP33KNfknlXtUlPpCpu5TBYuqGgcb.jpeg', 1, '2020-11-22 06:46:41', '2020-11-22 06:46:41'),
(2, 2, 'images/bckO9WMi2eTnEp6MbKTmXDCrmmJnYjO39PH75j6l.png', 1, '2020-11-22 06:58:48', '2020-11-22 06:58:48'),
(3, 3, 'images/PmM4PlazQRmAzHyv4N5ZkS6ZsUZZRSkgaLswZXyi.jpeg', 1, '2020-12-01 05:28:36', '2020-12-01 05:28:36'),
(4, 5, 'images/ZAf4GMX0nRj8l0BKWQd7uUwuxZ527wSJDD5GSROA.jpeg', 1, '2020-12-01 05:32:43', '2020-12-01 05:31:15'),
(5, 4, 'images/qeQc23tpZhL5UQqXVlIBuIpYVIAdjkdCvIeRIToJ.jpeg', 1, '2020-12-01 05:31:15', '2020-12-01 05:32:43'),
(6, 6, 'images/8ul2qPGnDaLPcNlvnyUP7gyRMPhhMiULri1Qpto8.jpeg', 1, '2020-12-01 05:35:53', '2020-12-01 05:35:53'),
(7, 7, 'images/KrNGamNQ7OeMRAeZw3kwgivLiDLpV8ubKbvBj9zd.jpeg', 1, '2020-11-05 10:59:47', '2020-12-02 10:59:47'),
(8, 8, 'images/33MFjUqqJnOeJRA9IAIjglHLJ0VjZqbIaqntm3Xg.jpeg', 1, '2020-10-01 10:07:58', '2020-12-02 11:07:58'),
(9, 9, 'images/YyuxSb0hujlgIS1qu5qe1gz21t9zRVizr9siY2CG.jpeg', 1, '2020-07-02 10:09:51', '2020-12-02 11:09:51'),
(10, 10, 'images/tnXZrrt5ZTbi1xt5npPnyLpzSYu9HCSoJGuaNu8L.jpeg', 1, '2020-06-18 10:10:50', '2020-12-02 11:10:50'),
(11, 11, 'images/oeMhluB7WONhnbsFfCjUWhqnwGnGiNBaaSCqhR1r.jpeg', 1, '2020-08-06 10:34:04', '2020-12-02 11:34:04'),
(12, 12, 'images/nCqUpDZyPunAufQhd5MGzMN9Wgghz6GV6k8Z7DaZ.jpeg', 1, '2020-10-14 10:35:07', '2020-12-02 11:35:07'),
(13, 13, 'images/hZi8ECW65NehrqhPyQCfTkmYGWIJj1wk5hGjTj6F.jpeg', 1, '2020-05-06 10:35:59', '2020-12-02 11:35:59'),
(14, 14, 'images/jYgXVxU6I4rnVrKfw1pJbNsWChk8WXRYY75hhLAk.jpeg', 1, '2020-05-06 10:36:51', '2020-12-02 11:36:51'),
(15, 16, 'images/N5aOioUGoV5G5kx2JhxJclfzOOXBDSuIm8abAryf.jpeg', 1, '2020-08-07 10:31:48', '2020-12-03 11:31:48');

-- --------------------------------------------------------

--
-- بنية الجدول `product_store`
--

CREATE TABLE `product_store` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_approve` tinyint(1) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `product_store`
--

INSERT INTO `product_store` (`id`, `store_id`, `product_id`, `is_active`, `is_approve`, `price`, `qty`, `created_at`, `updated_at`) VALUES
(4, 3, 6, 1, 1, '150.00', 525, NULL, NULL),
(14, 1, 5, 1, 1, '75.00', 30, '2020-12-10 08:25:09', '2020-12-10 08:28:06'),
(15, 3, 5, 1, 1, '100.00', 50, NULL, NULL),
(16, 2, 5, 1, 1, '125.00', 10, '2020-12-10 08:35:15', '2020-12-10 08:36:13'),
(17, 4, 5, 1, 1, '150.00', 30, '2020-12-10 08:25:09', '2020-12-10 08:28:06'),
(18, 2, 6, 1, 1, '100.00', 525, NULL, NULL),
(19, 5, 6, 1, 1, '110.00', 525, NULL, NULL),
(20, 1, 7, 1, 1, '75.00', 30, '2020-12-10 08:25:09', '2020-12-10 08:28:06'),
(21, 2, 7, 1, 1, '80.00', 30, '2020-12-10 08:25:09', '2020-12-10 08:28:06'),
(22, 2, 3, 1, 1, '75.00', 30, '2020-12-10 08:25:09', '2020-12-10 08:28:06'),
(23, 1, 3, 1, 1, '150.00', 30, '2020-12-10 08:25:09', '2020-12-10 08:28:06'),
(24, 1, 4, 1, 1, '100.00', 30, '2020-12-10 08:25:09', '2020-12-10 08:28:06'),
(25, 2, 4, 1, 1, '75.00', 30, '2020-12-10 08:25:09', '2020-12-10 08:28:06');

-- --------------------------------------------------------

--
-- بنية الجدول `product__store__ratings`
--

CREATE TABLE `product__store__ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `product__store__ratings`
--

INSERT INTO `product__store__ratings` (`id`, `user_id`, `store_id`, `product_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 5, 5, NULL, NULL),
(2, 1, 1, 3, 4, NULL, NULL),
(4, 1, 1, 6, 2, NULL, NULL),
(5, 1, 1, 4, 4, NULL, NULL),
(6, 1, 1, 8, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `shipment__statuses`
--

CREATE TABLE `shipment__statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `shipment_status_catalog_id` int(11) NOT NULL,
  `status_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `shipment__status__catalogs`
--

CREATE TABLE `shipment__status__catalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `shipment__types`
--

CREATE TABLE `shipment__types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `shipment_type_id` int(11) NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_price` decimal(8,2) NOT NULL,
  `delivery_cost` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) NOT NULL,
  `final_price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `stores`
--

CREATE TABLE `stores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_approved` tinyint(1) NOT NULL,
  `default_lang` int(11) NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bussiness_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_hours` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_days` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `stores`
--

INSERT INTO `stores` (`id`, `title`, `user_id`, `is_active`, `is_approved`, `default_lang`, `phone_number`, `bussiness_email`, `logo`, `address`, `location`, `working_hours`, `working_days`, `created_at`, `updated_at`) VALUES
(1, 'الریم سنتر-سوبر ماركت', 0, 1, 1, 1, '5345345', 'gvfdhb', 'hgfhgfh', 'fghjfghfg', 'السويداء', 'fghfgh', 'fghfghfgh', NULL, NULL),
(2, 'سنتر امیرة-سوبر ماركت', 0, 1, 1, 1, '1', 'dvdccv', 'xcvxcv', 'cvxcvxcv', 'السويداء', 'xcvxcv', 'xcvxcv', NULL, NULL),
(3, 'سنتر المصري-سوبر ماركت', 0, 1, 1, 1, 'cvxcv', 'xcvxc', 'v', '', 'السويداء', '', '', NULL, NULL),
(4, 'سنتر الاحمد-سوبر ماركت', 0, 1, 1, 1, 'رؤءئرءؤ', '', '', '', 'السويداء', '', '', NULL, NULL),
(5, 'صیدلیة ریم', 0, 1, 1, 0, '', '', '', '', 'السويداء', '', '', NULL, NULL),
(6, 'شركة عدوان-معرض دیكور', 0, 1, 1, 0, '', '', '', '', 'السويداء', '', '', NULL, NULL),
(7, 'شركة مكیفات- A C S', 0, 1, 1, 1, '', '', '', '', 'السويداء', '', '', NULL, NULL),
(8, 'شركة شاھین - مكیاجات', 0, 1, 1, 1, '', '', '', '', 'السويداء', '', '', NULL, NULL),
(9, 'سنتر الربيع - سوبر ماركت', 0, 1, 1, 0, '', '', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `store__category__images`
--

CREATE TABLE `store__category__images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_cover` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `store__designs`
--

CREATE TABLE `store__designs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` int(11) NOT NULL,
  `has_header` tinyint(1) NOT NULL,
  `slider_image_count` int(11) NOT NULL,
  `has_nav` tinyint(1) NOT NULL,
  `show_categoris` tinyint(1) NOT NULL,
  `count_show_categories` int(11) NOT NULL,
  `categories_position` int(11) NOT NULL,
  `has_banner` tinyint(1) NOT NULL,
  `count_banners` int(11) NOT NULL,
  `banners_position` int(11) NOT NULL,
  `has_brand` tinyint(1) NOT NULL,
  `count_brands` int(11) NOT NULL,
  `brands_position` int(11) NOT NULL,
  `has_recent_search_product` tinyint(1) NOT NULL,
  `count_recent_search_product` int(11) NOT NULL,
  `recent_search_position` int(11) NOT NULL,
  `has_visitores` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `store__header__images`
--

CREATE TABLE `store__header__images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_cover` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `store__nav__designs`
--

CREATE TABLE `store__nav__designs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `store_id` int(11) NOT NULL,
  `has_all_categories` tinyint(1) NOT NULL,
  `has_offers` tinyint(1) NOT NULL,
  `has_jobs` tinyint(1) NOT NULL,
  `has_recent` tinyint(1) NOT NULL,
  `has_events` tinyint(1) NOT NULL,
  `has_Purchases` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `store__ratings`
--

CREATE TABLE `store__ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `streets`
--

CREATE TABLE `streets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `streets`
--

INSERT INTO `streets` (`id`, `name`, `city_id`, `is_active`, `longitude`, `latitude`, `created_at`, `updated_at`) VALUES
(1, 'البرج', 3, 1, '5863758', '536758367', NULL, NULL),
(2, 'التجارة', 3, 1, '57637', '4563456', NULL, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
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
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'has', 'hassanalwan36@gmail.com', NULL, '$2y$10$hQ2FeYnyAYARZHyAdXRcNOT0oa.QDYfK4rrHA7EoOarEgUUjieoCu', 'tRCO650UJYMUanRSZlt14DQA3HCvZfVY5WODFlkVxvjQPzqRoWFlBlXjjOmG', '2020-11-22 05:59:24', '2020-11-22 05:59:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_store`
--
ALTER TABLE `category_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_fields`
--
ALTER TABLE `custom_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_field_product`
--
ALTER TABLE `custom_field_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `governorates`
--
ALTER TABLE `governorates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order__details`
--
ALTER TABLE `order__details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order__statuses`
--
ALTER TABLE `order__statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_store`
--
ALTER TABLE `payment_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_store`
--
ALTER TABLE `product_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product__store__ratings`
--
ALTER TABLE `product__store__ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment__statuses`
--
ALTER TABLE `shipment__statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment__status__catalogs`
--
ALTER TABLE `shipment__status__catalogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment__types`
--
ALTER TABLE `shipment__types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store__category__images`
--
ALTER TABLE `store__category__images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store__designs`
--
ALTER TABLE `store__designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store__header__images`
--
ALTER TABLE `store__header__images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store__nav__designs`
--
ALTER TABLE `store__nav__designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store__ratings`
--
ALTER TABLE `store__ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `streets`
--
ALTER TABLE `streets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `category_store`
--
ALTER TABLE `category_store`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `custom_fields`
--
ALTER TABLE `custom_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `custom_field_product`
--
ALTER TABLE `custom_field_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `governorates`
--
ALTER TABLE `governorates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order__details`
--
ALTER TABLE `order__details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order__statuses`
--
ALTER TABLE `order__statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_store`
--
ALTER TABLE `payment_store`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product_store`
--
ALTER TABLE `product_store`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product__store__ratings`
--
ALTER TABLE `product__store__ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shipment__statuses`
--
ALTER TABLE `shipment__statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipment__status__catalogs`
--
ALTER TABLE `shipment__status__catalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shipment__types`
--
ALTER TABLE `shipment__types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `store__category__images`
--
ALTER TABLE `store__category__images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store__designs`
--
ALTER TABLE `store__designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store__header__images`
--
ALTER TABLE `store__header__images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store__nav__designs`
--
ALTER TABLE `store__nav__designs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store__ratings`
--
ALTER TABLE `store__ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `streets`
--
ALTER TABLE `streets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
