-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2024 at 06:23 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crevelme_onedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$759vvsz9adEJtL7LOfQ4MutLOcBouIBwroU9q1mKDSywgGhmcxX3q');

-- --------------------------------------------------------

--
-- Table structure for table `auctions`
--

CREATE TABLE `auctions` (
  `id` int NOT NULL,
  `Auctions_userid` int NOT NULL,
  `Auctions_value` int NOT NULL,
  `AuctionsItemID` int NOT NULL,
  `Auctions_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auctionsitem`
--

CREATE TABLE `auctionsitem` (
  `id` int NOT NULL,
  `titel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `startPrice` float NOT NULL,
  `endPrice` float DEFAULT NULL,
  `TimeEnd` datetime NOT NULL,
  `owned` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Barnd` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sience` int NOT NULL,
  `country` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `material` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auctionsitem`
--

INSERT INTO `auctionsitem` (`id`, `titel`, `img`, `startPrice`, `endPrice`, `TimeEnd`, `owned`, `Barnd`, `sience`, `country`, `material`) VALUES
(8, 'test', '01HXAPZB03DW61TM9JEJ6WR63Y.jpg', 622, NULL, '2024-05-22 02:42:07', 'AKera', 'rolex', 2024, 'Egypt', NULL),
(9, NULL, '01HYCVMZN5CA68SJ52635JJK9M.avif', 10, NULL, '2024-05-23 08:58:04', '223', 'ROBLOX', 2024, '19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `basket`
--

CREATE TABLE `basket` (
  `basket_id` int NOT NULL,
  `basket_itemid` int NOT NULL,
  `basket_userid` int NOT NULL,
  `basket_quantity` int NOT NULL,
  `basket_orderstatus` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `Ticket` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adderss` varchar(170) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buildNum` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `basket_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basket`
--

INSERT INTO `basket` (`basket_id`, `basket_itemid`, `basket_userid`, `basket_quantity`, `basket_orderstatus`, `Ticket`, `city`, `adderss`, `buildNum`, `notes`, `basket_time`) VALUES
(230, 2, 8, 9, 'Pending', NULL, NULL, NULL, NULL, NULL, '2024-01-14 07:49:58'),
(234, 1, 8, 4, 'Pending', NULL, NULL, NULL, NULL, NULL, '2024-01-14 07:55:36'),
(257, 1, 34, 1, 'work at order', '728523', '', 'lclmclxmc', '', '', '2024-03-20 12:53:42'),
(258, 1, 34, 1, 'work at order', '728523', '', 'lclmclxmc', '', '', '2024-03-21 14:30:30'),
(259, 1, 4, 1, 'Pending', NULL, NULL, NULL, NULL, NULL, '2024-04-04 10:56:02'),
(260, 3, 4, 1, 'Pending', NULL, NULL, NULL, NULL, NULL, '2024-04-04 10:56:04'),
(261, 40, 112138, 1, 'Pending', NULL, NULL, NULL, NULL, NULL, '2024-05-21 17:37:23'),
(263, 40, 112139, 1, 'Pending', NULL, NULL, NULL, NULL, NULL, '2024-05-23 16:31:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `categories_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_name_ar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `categories_name_ar`, `categories_img`, `categories_time`) VALUES
(1, 'Men', 'أزياء رجالية', 'Fashion', '2023-08-20 05:23:36'),
(2, 'Women', 'الموضة للنساء', 'Fashion', '2023-08-20 05:23:36'),
(3, 'Kids', 'Kids', 'Fashion', '2023-08-20 05:23:36'),
(4, 'unisex', 'للجنسين', '01HXAQGP63P4H9BFJJQ8NZ7S96.jpg', '2024-05-07 23:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `custom_design`
--

CREATE TABLE `custom_design` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `design_id` int NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_design`
--

INSERT INTO `custom_design` (`id`, `user_id`, `design_id`, `img`, `color`, `time`) VALUES
(1, 4, 1, '3652d00bd7e4-a530-4e1e-a4a0-b62e63c224157553402749311840757.jpg', 'قث', '2024-03-02 18:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `id` int NOT NULL,
  `Type` enum('print','design') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`id`, `Type`, `name`, `img`, `time`) VALUES
(1, 'print', NULL, 'samarreta.svg', '2024-01-04 11:39:33'),
(2, 'print', NULL, 'shirt-svgrepo-com.svg', '2024-01-04 11:39:33'),
(4, 'print', NULL, 'T-Shirt-black-2.svg', '2024-01-04 11:39:33'),
(5, 'print', NULL, 'T-Shirt-black.svg', '2024-01-04 11:39:33'),
(6, 'print', NULL, 'yallow.svg', '2024-01-04 11:39:33'),
(7, 'print', NULL, '01HXARNA56Q7XT8G707AJKP3YB.svg', '2024-05-08 00:11:41'),
(8, 'print', 'test', '01HYEDXYY4QXTW2SSZ13ZKRMJA.svg', '2024-05-21 20:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `favorite_id` int NOT NULL,
  `favorite_userid` int NOT NULL,
  `favorite_itemid` int NOT NULL,
  `favorite_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`favorite_id`, `favorite_userid`, `favorite_itemid`, `favorite_time`) VALUES
(1189, 112138, 40, '2024-05-21 17:25:36'),
(1191, 112138, 41, '2024-05-21 18:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int NOT NULL,
  `item_cat` int NOT NULL,
  `item_subcat` int DEFAULT NULL,
  `item_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_price` double DEFAULT NULL,
  `color` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `material` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` bigint DEFAULT NULL,
  `from_shipping_days` int DEFAULT NULL,
  `to_shipping_days` int DEFAULT NULL,
  `shippingPrice` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `item_discount` double DEFAULT '0',
  `item_countView` int DEFAULT '1',
  `item_lat` double DEFAULT NULL,
  `item_long` double DEFAULT NULL,
  `item_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cover` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_cat`, `item_subcat`, `item_name`, `item_desc`, `item_img`, `item_price`, `color`, `material`, `size`, `details`, `quantity`, `from_shipping_days`, `to_shipping_days`, `shippingPrice`, `item_discount`, `item_countView`, `item_lat`, `item_long`, `item_time`, `cover`) VALUES
(27, 1, 2, 'nega for  sale 2', 'nega for  sale ', '[\"01HY95F0R4ZRZN6HZCYC0K38ZD.png\",\"01HY95F0R67M2ME6EF85QKWT49.jpg\"]', 200, NULL, NULL, NULL, '<p>nega for&nbsp; sale&nbsp;</p>', 10, 10, 20, '10', 0, 1, NULL, NULL, '2024-05-19 19:32:39', '[\"01HYCGTME36CP8ZG5WCNMZWMZ6.avif\",\"01HYCGTME96KDFF5JQ2GX32XMG.avif\"]'),
(40, 1, 3, 'nega 3for  sale ', 'nega for  sale ', '[\"01HY95F0R4ZRZN6HZCYC0K38ZD.png\",\"01HY95F0R67M2ME6EF85QKWT49.jpg\"]', 200, NULL, NULL, NULL, '<p>nega for&nbsp; sale&nbsp;</p>', 10, 10, 20, '10', 0, 1, NULL, NULL, '2024-05-19 19:32:39', '[\"01HYCGTME36CP8ZG5WCNMZWMZ6.avif\",\"01HYCGTME96KDFF5JQ2GX32XMG.avif\"]'),
(41, 1, 1, 'nega 1for  sale ', 'nega for  sale ', '[\"01HY95F0R4ZRZN6HZCYC0K38ZD.png\",\"01HY95F0R67M2ME6EF85QKWT49.jpg\"]', 200, NULL, NULL, NULL, '<p>nega for&nbsp; sale&nbsp;</p>', 10, 10, 20, '10', 0, 1, NULL, NULL, '2024-05-19 19:32:39', '[\"01HYCGTME36CP8ZG5WCNMZWMZ6.avif\",\"01HYCGTME96KDFF5JQ2GX32XMG.avif\"]'),
(42, 1, 1, 'x', 'nega for  sale ', '[\"01HY95F0R4ZRZN6HZCYC0K38ZD.png\",\"01HY95F0R67M2ME6EF85QKWT49.jpg\"]', 200, NULL, NULL, NULL, '<p>nega for&nbsp; sale&nbsp;</p>', 10, 10, 20, '10', 0, 1, NULL, NULL, '2024-05-19 19:32:39', '[\"01HYCGTME36CP8ZG5WCNMZWMZ6.avif\",\"01HYCGTME96KDFF5JQ2GX32XMG.avif\"]'),
(43, 1, 1, 'nega for  sale ', 'nega for  sale ', '[\"01HY95F0R4ZRZN6HZCYC0K38ZD.png\",\"01HY95F0R67M2ME6EF85QKWT49.jpg\"]', 200, NULL, NULL, NULL, '<p>nega for&nbsp; sale&nbsp;</p>', 10, 10, 20, '10', 0, 1, NULL, NULL, '2024-05-19 19:32:39', '[\"01HYCGTME36CP8ZG5WCNMZWMZ6.avif\",\"01HYCGTME96KDFF5JQ2GX32XMG.avif\"]'),
(44, 1, 1, 'nega for  sale ', 'nega for  sale ', '[\"01HY95F0R4ZRZN6HZCYC0K38ZD.png\",\"01HY95F0R67M2ME6EF85QKWT49.jpg\"]', 200, NULL, NULL, NULL, '<p>nega for&nbsp; sale&nbsp;</p>', 10, 10, 20, '10', 0, 1, NULL, NULL, '2024-05-19 19:32:39', '[\"01HYCGTME36CP8ZG5WCNMZWMZ6.avif\",\"01HYCGTME96KDFF5JQ2GX32XMG.avif\"]'),
(45, 1, 1, 'nega for  sale ', 'nega for  sale ', '[\"01HY95F0R4ZRZN6HZCYC0K38ZD.png\",\"01HY95F0R67M2ME6EF85QKWT49.jpg\"]', 200, NULL, NULL, NULL, '<p>nega for&nbsp; sale&nbsp;</p>', 10, 10, 20, '10', 0, 1, NULL, NULL, '2024-05-19 19:32:39', '[\"01HYCGTME36CP8ZG5WCNMZWMZ6.avif\",\"01HYCGTME96KDFF5JQ2GX32XMG.avif\"]'),
(46, 1, 1, 'nega for  sale ', 'nega for  sale ', '[\"01HY95F0R4ZRZN6HZCYC0K38ZD.png\",\"01HY95F0R67M2ME6EF85QKWT49.jpg\"]', 200, NULL, NULL, NULL, '<p>nega for&nbsp; sale&nbsp;</p>', 10, 10, 20, '10', 0, 1, NULL, NULL, '2024-05-19 19:32:39', '[\"01HYCGTME36CP8ZG5WCNMZWMZ6.avif\",\"01HYCGTME96KDFF5JQ2GX32XMG.avif\"]'),
(47, 1, 1, 'nega for  sale ', 'nega for  sale ', '[\"01HY95F0R4ZRZN6HZCYC0K38ZD.png\",\"01HY95F0R67M2ME6EF85QKWT49.jpg\"]', 200, NULL, NULL, NULL, '<p>nega for&nbsp; sale&nbsp;</p>', 10, 10, 20, '10', 0, 1, NULL, NULL, '2024-05-19 19:32:39', '[\"01HYCGTME36CP8ZG5WCNMZWMZ6.avif\",\"01HYCGTME96KDFF5JQ2GX32XMG.avif\"]'),
(48, 1, 1, 'nega for  sale ', 'nega for  sale ', '[\"01HY95F0R4ZRZN6HZCYC0K38ZD.png\",\"01HY95F0R67M2ME6EF85QKWT49.jpg\"]', 200, NULL, NULL, NULL, '<p>nega for&nbsp; sale&nbsp;</p>', 10, 10, 20, '10', 0, 1, NULL, NULL, '2024-05-19 19:32:39', '[\"01HYCGTME36CP8ZG5WCNMZWMZ6.avif\",\"01HYCGTME96KDFF5JQ2GX32XMG.avif\"]'),
(49, 1, 1, 'nega for  sale ', 'nega for  sale ', '[\"01HY95F0R4ZRZN6HZCYC0K38ZD.png\",\"01HY95F0R67M2ME6EF85QKWT49.jpg\"]', 200, NULL, NULL, NULL, '<p>nega for&nbsp; sale&nbsp;</p>', 10, 10, 20, '10', 0, 1, NULL, NULL, '2024-05-19 19:32:39', '[\"01HYCGTME36CP8ZG5WCNMZWMZ6.avif\",\"01HYCGTME96KDFF5JQ2GX32XMG.avif\"]'),
(50, 1, 1, 'nega for  sale ', 'nega for  sale ', '[\"01HY95F0R4ZRZN6HZCYC0K38ZD.png\",\"01HY95F0R67M2ME6EF85QKWT49.jpg\"]', 200, NULL, NULL, NULL, '<p>nega for&nbsp; sale&nbsp;</p>', 10, 10, 20, '10', 0, 1, NULL, NULL, '2024-05-19 19:32:39', '[\"01HYCGTME36CP8ZG5WCNMZWMZ6.avif\",\"01HYCGTME96KDFF5JQ2GX32XMG.avif\"]'),
(51, 1, 1, 'nega for  sale ', 'nega for  sale ', '[\"01HY95F0R4ZRZN6HZCYC0K38ZD.png\",\"01HY95F0R67M2ME6EF85QKWT49.jpg\"]', 200, NULL, NULL, NULL, '<p>nega for&nbsp; sale&nbsp;</p>', 10, 10, 20, '10', 0, 1, NULL, NULL, '2024-05-19 19:32:39', '[\"01HYCGTME36CP8ZG5WCNMZWMZ6.avif\",\"01HYCGTME96KDFF5JQ2GX32XMG.avif\"]');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_04_27_200700_create_promo_codes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `promoCode_id` bigint DEFAULT NULL,
  `user_id` bigint NOT NULL,
  `product_id` bigint DEFAULT NULL,
  `total` int NOT NULL,
  `address` text NOT NULL,
  `notes` longtext NOT NULL,
  `status` text NOT NULL,
  `full_name` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `promoCode_id`, `user_id`, `product_id`, `total`, `address`, `notes`, `status`, `full_name`, `created_at`, `updated_at`) VALUES
(1, NULL, 112137, 6, 10, 'asdasasd', 'dsadasd', 'pending', 'mohamed mersal', '2024-05-21 04:26:09', '2024-05-21 04:26:09');

-- --------------------------------------------------------

--
-- Table structure for table `promo_codes`
--

CREATE TABLE `promo_codes` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promo_codes`
--

INSERT INTO `promo_codes` (`id`, `code`, `discount`, `created_at`, `updated_at`) VALUES
(1, '132', 2, '2024-05-07 22:04:51', '2024-05-07 22:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `refreshtoken`
--

CREATE TABLE `refreshtoken` (
  `id` int NOT NULL,
  `token` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refreshtoken`
--

INSERT INTO `refreshtoken` (`id`, `token`, `time`) VALUES
(1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDEyNzI0NDN9.n4upTR5Zk5hBl2bXVvTFcYO_PRYanLjqa50R_7_hkb4', '2023-11-27 15:43:45'),
(2, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDI0NzI1NzJ9.h3tHw3DFj5rA0lM0JLdzIteK99NTn6JD5TOFPNmLdeU', '2023-12-11 13:04:13'),
(3, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDI0NzI2NTN9.1goyq-OuhFgqVlL2islPUB3luRA3bbgwrTy6DewbV8k', '2023-12-11 13:06:24'),
(4, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDI5MTMzMTF9.9mWccUzAmiVueLVBXa1-RYp8KWawRbJLUr6tWJU2R2w', '2023-12-16 15:28:57'),
(5, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDI5MTM0OTh9.Uang6eMezhW9lJw9QNS-PQQg5MBJXUgUpav_vuQIUbc', '2023-12-16 15:31:49'),
(6, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMSwidXNlcl9uYW1lIjoicmdmamhqIHJoY2pyaSIsInVzZXJfZW1haWwiOiJtYXJ3YW5mQGdiZ2huai5jb20iLCJ1c2VyX3Bob25lIjoiMDExMzc2NTI0NSIsInVzZXJfUmVmZXJyYWxjb2RlIjoiT1Y1MVdId1YiLCJyZWZjb2RlICI6IiIsInVzZXJfdGltZSI6bnVsbCwiZXhwIjoxNzA0MDg3MDM0fQ.GU_uQMl0KH9jjvuaNaODCiMJM6SCwfZT3-yVVUtChYU', '2023-12-30 05:32:14'),
(7, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMSwidXNlcl9uYW1lIjoicmdmamhqIHJoY2pyaSIsInVzZXJfZW1haWwiOiJtYXJ3YW5mQGdiZ2huai5jb20iLCJ1c2VyX3Bob25lIjoiMDExMzc2NTI0NSIsInVzZXJfUmVmZXJyYWxjb2RlIjoiT1Y1MVdId1YiLCJyZWZjb2RlICI6IiIsInVzZXJfdGltZSI6bnVsbCwiZXhwIjoxNzA0MDg3MTM0fQ.aghhsV4pF0U2rifvLTfoAWqYF0S9VSTauqKiHKVsgi0', '2023-12-30 05:38:17'),
(8, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMSwidXNlcl9uYW1lIjoicmdmamhqIHJoY2pyaSIsInVzZXJfZW1haWwiOiJtYXJ3YW5mQGdiZ2huai5jb20iLCJ1c2VyX3Bob25lIjoiMDExMzc2NTI0NSIsInVzZXJfUmVmZXJyYWxjb2RlIjoiT1Y1MVdId1YiLCJyZWZjb2RlICI6IiIsInVzZXJfdGltZSI6bnVsbCwiZXhwIjoxNzA0MDg3NDk3fQ.xw-W_a2sD5fWifMo1-VCJL5O6ug7Mwp8H9Ga6d8IftU', '2023-12-30 05:39:37'),
(9, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMSwidXNlcl9uYW1lIjoicmdmamhqIHJoY2pyaSIsInVzZXJfZW1haWwiOiJtYXJ3YW5mQGdiZ2huai5jb20iLCJ1c2VyX3Bob25lIjoiMDExMzc2NTI0NSIsInVzZXJfUmVmZXJyYWxjb2RlIjoiT1Y1MVdId1YiLCJyZWZjb2RlICI6IiIsInVzZXJfdGltZSI6bnVsbCwiZXhwIjoxNzA0MDg3NTc3fQ.O8AqWoOlycv0Vy04i_LPCh7zbCwkUmsl9kIoWhBg-2A', '2023-12-30 05:47:07'),
(10, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMSwidXNlcl9uYW1lIjoicmdmamhqIHJoY2pyaSIsInVzZXJfZW1haWwiOiJtYXJ3YW5mQGdiZ2huai5jb20iLCJ1c2VyX3Bob25lIjoiMDExMzc2NTI0NSIsInVzZXJfUmVmZXJyYWxjb2RlIjoiT1Y1MVdId1YiLCJyZWZjb2RlICI6IiIsInVzZXJfdGltZSI6bnVsbCwiZXhwIjoxNzA0MDg4MDI3fQ.XYJzQEMlH09kim2mpZ8_7Ch-vPglTHL6c4G7gTqlv6Q', '2023-12-30 05:48:15'),
(11, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMSwidXNlcl9uYW1lIjoicmdmamhqIHJoY2pyaSIsInVzZXJfZW1haWwiOiJtYXJ3YW5mQGdiZ2huai5jb20iLCJ1c2VyX3Bob25lIjoiMDExMzc2NTI0NSIsInVzZXJfUmVmZXJyYWxjb2RlIjoiT1Y1MVdId1YiLCJyZWZjb2RlICI6IiIsInVzZXJfdGltZSI6bnVsbCwiZXhwIjoxNzA0MDg4MDk1fQ.ZDuvnT6e6H5IS0gwoEkCirGtbIovBLpF_gU8S-AnZDY', '2023-12-30 05:49:38'),
(12, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMSwidXNlcl9uYW1lIjoicmdmamhqIHJoY2pyaSIsInVzZXJfZW1haWwiOiJtYXJ3YW5mQGdiZ2huai5jb20iLCJ1c2VyX3Bob25lIjoiMDExMzc2NTI0NSIsInVzZXJfUmVmZXJyYWxjb2RlIjoiT1Y1MVdId1YiLCJyZWZjb2RlICI6IiIsInVzZXJfdGltZSI6bnVsbCwiZXhwIjoxNzA0MDg4MTc4fQ.48Y0OuSl8KnOgONNBTIXUmcM7WFd-JnlfGSN2IKrmqU', '2023-12-30 05:51:37'),
(13, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDQwODk4NDd9.do9iXBMqxnSpd6WI5DQLUb_KyKQh7nNOwuZ8NnRHWaU', '2023-12-30 06:46:14'),
(14, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDQwODk4NDd9.do9iXBMqxnSpd6WI5DQLUb_KyKQh7nNOwuZ8NnRHWaU', '2023-12-30 06:46:14'),
(15, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDQwOTE1NzR9.q84qlQj0gAEv2TMojAGAqV68YYNMJCcU8HLDDSencTA', '2023-12-30 07:10:40'),
(16, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MTA5NDI3MDB9.dgZT8nxA98rCH6yjDakT9fUsdVAi0_a49yjBStySbsQ', '2024-01-20 13:54:52'),
(17, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MTA5NDI5MDd9.3v8fYz1jxV0YsqAHZFPXWAh39q8GJeIEjj40mL78v7M', '2024-01-20 14:53:58'),
(18, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDU5MzUyMzh9.hcYJaN7Il3RKnwap0h6WaHxnXyoTHJVCgMRdLA8sxUc', '2024-01-20 14:57:03'),
(19, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMiwidXNlcl9uYW1lIjoibXFmZHkgZmpyamhqbiIsInVzZXJfZW1haWwiOiJmaGhrZnlyeUBnbWFpbCIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5Njk1NSIsInVzZXJfUmVmZXJyYWxjb2RlIjoiTjE5aWZjVzEiLCJyZWZjb2RlICI6IiIsInVzZXJfdGltZSI6bnVsbCwiZXhwIjoxNzExODMyNzMxfQ.gim0d8eoCqQMkPSQw2VjfXs6C1hwgpbklS5R9-DCEOM', '2024-01-30 21:17:27'),
(20, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MTE4MzM3MjV9.24bxqiTF2mRrsgg2riVqZzbRDya6lg7PnN-c2hqU9pk', '2024-01-30 21:22:48'),
(21, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MTE4MzM4MDl9.A092c8Wh0JUo-urjSDd7PxFCCAqr27Ut-20-csi_iHc', '2024-03-02 17:21:22'),
(22, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDk1NzI4ODJ9.kWC6eE9Q-789HonDL1LsA0PHj-CD1p6gtxAKq_D7F2U', '2024-03-02 17:47:48'),
(23, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDk1NzQ0Njh9.B1GBt6fN0shZehZ9R-g5dOtbQgr5NMuNvhbyipK1EWE', '2024-03-02 17:48:39'),
(24, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDk1NzQ1MTl9.SdzEQM5SXlRfrUtS4JtMlGAZ4m5uUSLbcKJNeGk9h8g', '2024-03-02 17:59:40'),
(25, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDk1NzUxODB9.nMDbkyMKCG9BOyddvq3z7dIXhr-QiqQCNXVBRV-GaVE', '2024-03-02 18:00:40'),
(26, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDk1NzUyNDB9.rIdMbeVLwZ3paNZx62APaTY_x8vjHqDxGYXi6I_EnWY', '2024-03-02 18:05:35'),
(27, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDk1NzU1MzV9.HXP0fkOI4Nnn-g243bKr2rYIKmOCURdwmne7erIHKJY', '2024-03-02 18:35:22'),
(28, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo0LCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6Im1hcndhbmJlbW8wQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRlY2R2xaMGUiLCJyZWZjb2RlICI6Im80T3RaMTJHIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDk1NzczMjJ9.mROSXKCLVWsIfAUCcE2LLvwpmFeeXy6p-MbGuJoI6s0', '2024-03-02 18:47:33'),
(29, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMywidXNlcl9uYW1lIjoibWF0ZmpkIHRlc3QiLCJ1c2VyX2VtYWlsIjoiaG0xMjg2NTJAZ21haWwuY29tIiwidXNlcl9waG9uZSI6IjExMTM3NzY4OTZzIiwidXNlcl9SZWZlcnJhbGNvZGUiOiJNUFlBcHZpbiIsInJlZmNvZGUgIjoiIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MTU5OTg5Mzl9.r8x5BMHBj-cGEq4tfJAz3uuj3DGwrgHhg8lPFRUNGSU', '2024-03-19 04:24:18'),
(30, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMywidXNlcl9uYW1lIjoibWF0ZmpkIHRlc3QiLCJ1c2VyX2VtYWlsIjoiaG0xMjg2NTJAZ21haWwuY29tIiwidXNlcl9waG9uZSI6IjExMTM3NzY4OTZzIiwidXNlcl9SZWZlcnJhbGNvZGUiOiJNUFlBcHZpbiIsInJlZmNvZGUgIjoiIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MTA5OTUwNTh9.h6fqB81hCaPZB4NNil76BIGau_zQuwnbOblAiU3nJqc', '2024-03-19 04:26:33'),
(31, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozNCwidXNlcl9uYW1lIjoiXHUwNjQ1XHUwNjJkXHUwNjQ1XHUwNjJmIFx1MDY0NVx1MDYyZFx1MDY0NVx1MDYyZiIsInVzZXJfZW1haWwiOiJtb2hob3NzYW00MUBnbWFpbC5jb20iLCJ1c2VyX3Bob25lIjoiMDEyNzY2NjQyMDkiLCJ1c2VyX1JlZmVycmFsY29kZSI6InRsbEFCd3lQIiwicmVmY29kZSAiOiIiLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcxNjEyMzE3Mn0.3UKPzzz2Dp1CfpsJLQnzn1k5MoKoUbMbcfnYprT7bIs', '2024-03-20 13:20:48'),
(32, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozNCwidXNlcl9uYW1lIjoiXHUwNjQ1XHUwNjJkXHUwNjQ1XHUwNjJmIFx1MDY0NVx1MDYyZFx1MDY0NVx1MDYyZiIsInVzZXJfZW1haWwiOiJtb2hob3NzYW00MUBnbWFpbC5jb20iLCJ1c2VyX3Bob25lIjoiMDEyNzY2NjQyMDkiLCJ1c2VyX1JlZmVycmFsY29kZSI6InRsbEFCd3lQIiwicmVmY29kZSAiOiIiLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcxNjIxNDE5MH0.eFOL3k1u3Q22wwOyYlCN3DBi3bknvZw-uuf9wwHlC1Y', '2024-03-21 14:17:47'),
(33, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozNCwidXNlcl9uYW1lIjoiXHUwNjQ1XHUwNjJkXHUwNjQ1XHUwNjJmIFx1MDY0NVx1MDYyZFx1MDY0NVx1MDYyZiIsInVzZXJfZW1haWwiOiJtb2hob3NzYW00MUBnbWFpbC5jb20iLCJ1c2VyX3Bob25lIjoiMDEyNzY2NjQyMDkiLCJ1c2VyX1JlZmVycmFsY29kZSI6InRsbEFCd3lQIiwicmVmY29kZSAiOiIiLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcxMTIwMzQ2N30.VTY3MDyJK02YR4SA77-PFjw7DGXl6uEN36ArCS0x87s', '2024-03-21 14:18:27'),
(34, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozNCwidXNlcl9uYW1lIjoiXHUwNjQ1XHUwNjJkXHUwNjQ1XHUwNjJmIFx1MDY0NVx1MDYyZFx1MDY0NVx1MDYyZiIsInVzZXJfZW1haWwiOiJtb2hob3NzYW00MUBnbWFpbC5jb20iLCJ1c2VyX3Bob25lIjoiMDEyNzY2NjQyMDkiLCJ1c2VyX1JlZmVycmFsY29kZSI6InRsbEFCd3lQIiwicmVmY29kZSAiOiIiLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcxMTIwMzUwN30.vRiGyEAqmwy1IH03fnCRNVkdzBqMUEZenly8h-ajEQo', '2024-03-21 14:19:12'),
(35, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozNCwidXNlcl9uYW1lIjoiXHUwNjQ1XHUwNjJkXHUwNjQ1XHUwNjJmIFx1MDY0NVx1MDYyZFx1MDY0NVx1MDYyZiIsInVzZXJfZW1haWwiOiJtb2hob3NzYW00MUBnbWFpbC5jb20iLCJ1c2VyX3Bob25lIjoiMDEyNzY2NjQyMDkiLCJ1c2VyX1JlZmVycmFsY29kZSI6InRsbEFCd3lQIiwicmVmY29kZSAiOiIiLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcxMTIwMzU1Mn0.L49XwUEd4wOoT6eiK8O0HMlK1RPSC_nI8RxWnDJFpjY', '2024-03-21 14:19:55'),
(36, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozNCwidXNlcl9uYW1lIjoiXHUwNjQ1XHUwNjJkXHUwNjQ1XHUwNjJmIFx1MDY0NVx1MDYyZFx1MDY0NVx1MDYyZiIsInVzZXJfZW1haWwiOiJtb2hob3NzYW00MUBnbWFpbC5jb20iLCJ1c2VyX3Bob25lIjoiMDEyNzY2NjQyMDkiLCJ1c2VyX1JlZmVycmFsY29kZSI6InRsbEFCd3lQIiwicmVmY29kZSAiOiIiLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcxMTIwMzU5NX0.fGx38CwLUmrytqPUgJT5VMDSIPzY13zSNhyTCE4-A9I', '2024-03-21 14:37:28'),
(37, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozNCwidXNlcl9uYW1lIjoiXHUwNjQ1XHUwNjJkXHUwNjQ1XHUwNjJmIFx1MDY0NVx1MDYyZFx1MDY0NVx1MDYyZiIsInVzZXJfZW1haWwiOiJtb2hob3NzYW00MUBnbWFpbC5jb20iLCJ1c2VyX3Bob25lIjoiMDEyNzY2NjQyMDkiLCJ1c2VyX1JlZmVycmFsY29kZSI6InRsbEFCd3lQIiwicmVmY29kZSAiOiIiLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcxMTIwNDY0OH0.w_qbMsVeuMuwXKM4E0LpWQTCimSbuTOFzi8OXWTKhIQ', '2024-03-21 14:39:03'),
(38, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozNCwidXNlcl9uYW1lIjoiXHUwNjQ1XHUwNjJkXHUwNjQ1XHUwNjJmIFx1MDY0NVx1MDYyZFx1MDY0NVx1MDYyZiIsInVzZXJfZW1haWwiOiJtb2hob3NzYW00MUBnbWFpbC5jb20iLCJ1c2VyX3Bob25lIjoiMDEyNzY2NjQyMDkiLCJ1c2VyX1JlZmVycmFsY29kZSI6InRsbEFCd3lQIiwicmVmY29kZSAiOiIiLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcxMTIwNDc0M30.AMakGl8j2s_GO9EqTJ3uYUSuWaCJpsyeZzPSgl4iiW8', '2024-03-23 09:29:55'),
(39, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozNCwidXNlcl9uYW1lIjoiXHUwNjQ1XHUwNjJkXHUwNjQ1XHUwNjJmIFx1MDY0NVx1MDYyZFx1MDY0NVx1MDYyZiIsInVzZXJfZW1haWwiOiJtb2hob3NzYW00MUBnbWFpbC5jb20iLCJ1c2VyX3Bob25lIjoiMDEyNzY2NjQyMDkiLCJ1c2VyX1JlZmVycmFsY29kZSI6InRsbEFCd3lQIiwicmVmY29kZSAiOiIiLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcxMTM1ODk5NX0.nk6cKA9BDU4WjUNi58TcemMbh_S6kEY6cJevHfdb0Bo', '2024-03-23 09:32:45'),
(40, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozNCwidXNlcl9uYW1lIjoiXHUwNjQ1XHUwNjJkXHUwNjQ1XHUwNjJmIFx1MDY0NVx1MDYyZFx1MDY0NVx1MDYyZiIsInVzZXJfZW1haWwiOiJtb2hob3NzYW00MUBnbWFpbC5jb20iLCJ1c2VyX3Bob25lIjoiMDEyNzY2NjQyMDkiLCJ1c2VyX1JlZmVycmFsY29kZSI6InRsbEFCd3lQIiwicmVmY29kZSAiOiIiLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcxNjM5MjAzMn0.ZFWjE4qjz5vnQW-c-M5I-nl7nVzfbn5jWEjvcwAhiIs', '2024-03-23 18:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int NOT NULL,
  `subcategories_IdCat` int NOT NULL,
  `subcategoriesName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `supportcountry_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `subcategories_IdCat`, `subcategoriesName`, `supportcountry_time`) VALUES
(1, 1, 'Tops', '2023-09-30 21:12:51'),
(2, 1, 'Bottoms', '2023-09-30 21:12:51'),
(3, 1, 'Outerwear', '2023-09-30 21:12:51'),
(4, 1, 'Accessories', '2023-09-30 21:12:51'),
(5, 1, 'Shoes', '2023-09-30 21:12:51'),
(6, 1, 'Underwear & Loungewear', '2023-09-30 21:12:51'),
(7, 1, 'Special Collections', '2023-09-30 21:12:51'),
(8, 2, 'Tops', '2023-09-30 21:13:54'),
(9, 2, 'Bottoms', '2023-09-30 21:13:54'),
(10, 2, 'Dresses & Jumpsuits', '2023-09-30 21:13:54'),
(11, 2, 'Accessories', '2023-09-30 21:13:54'),
(12, 2, 'Shoes', '2023-09-30 21:13:54'),
(13, 2, 'Undergarments', '2023-09-30 21:13:54'),
(14, 2, 'Special Collections', '2023-09-30 21:13:54'),
(15, 3, 'Boys', '2023-09-30 21:14:39'),
(16, 3, 'Girls', '2023-09-30 21:14:39'),
(17, 3, 'Infants & Toddlers', '2023-09-30 21:14:39'),
(18, 3, 'Accessories', '2023-09-30 21:14:39'),
(19, 3, 'Special Collections', '2023-09-30 21:14:39'),
(20, 1, 'tops', '2024-05-08 00:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `user_token` varchar(1500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_age` int DEFAULT NULL,
  `user_gender` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_Referralcode` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_InviteCode` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `user_wallet` double NOT NULL DEFAULT '0',
  `verfiycode` int DEFAULT NULL,
  `user_updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_CreateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_token`, `user_name`, `user_email`, `user_phone`, `user_age`, `user_gender`, `user_password`, `user_img`, `user_Referralcode`, `user_InviteCode`, `user_status`, `user_wallet`, `verfiycode`, `user_updateTime`, `user_CreateTime`) VALUES
(2, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoyLCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6ImVzdCIsInVzZXJfcGhvbmUiOiIwMTAiLCJ1c2VyX1JlZmVycmFsY29kZSAiOiJvNE90WjEyRyIsInJlZmNvZGUgIjoiMDQxIiwidXNlcl90aW1lIjpudWxsfQ.6iivugPVQBKYn6yRJuH_A37J9QQMUC-6J6tDiab_XYQ', 'test', 'est', '010', 0, '', 'test', '', 'o4OtZ12G', 'r74avE3F', 'Active', 245, NULL, '2023-08-01 00:29:53', '2023-08-01 00:29:53'),
(3, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozLCJ1c2VyX25hbWUiOiJ0ZXN0IiwidXNlcl9lbWFpbCI6ImVzdGoiLCJ1c2VyX3Bob25lIjoiMDEwaiIsInVzZXJfUmVmZXJyYWxjb2RlICI6InY2RU5QQXR4IiwicmVmY29kZSAiOiIiLCJ1c2VyX3RpbWUiOm51bGx9.4oOZkeEUAO9SWzTfXu4Bcy0b1GNekINLPMBbCC7g8YY', 'test', 'estj', '010j', 0, '', 'test', '', 'v6ENPAtx', '', 'Active', 0, NULL, '2023-08-01 00:30:11', '2023-08-01 00:30:11'),
(4, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoiNCIsInVzZXJfbmFtZSI6InRlc3QiLCJ1c2VyX2VtYWlsIjoibWFyd2FuYmVtbzBAZ21haWwuY29tIiwidXNlcl9waG9uZSI6IjAxMTEzNzc2ODk2IiwidXNlcl9SZWZlcnJhbGNvZGUiOiJGVjZHbFowZSIsInJlZmNvZGUgIjoibzRPdFoxMkciLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcyMTMyNDM4NX0.q-1KoL2P2u2CeLD2gOtRlSOMw5myw-aI_9GpmYZ9dV0', 'test', 'marwanbemo0@gmail.com', '01113776896', 0, '', '12301230', '', 'FV6GlZ0e', 'o4OtZ12G', 'Active', 11, 54574, '2023-08-01 00:37:49', '2023-08-01 00:37:49'),
(7, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo3LCJ1c2VyX25hbWUiOiJtYXJvbyIsInVzZXJfZW1haWwiOiJtYXJ3YW5iZW1vMEBnbWFpbC5jb20wIiwidXNlcl9waG9uZSI6IjAxMTEzNzc2ODk2MCIsInVzZXJfUmVmZXJyYWxjb2RlICI6IlBhWnBrT3BnIiwicmVmY29kZSAiOiJGVjZHbFowZSIsInVzZXJfdGltZSI6bnVsbH0.tY3lIKRsSVRiQxdYj2-9-OEm_r-QWXpXosq8qje1F5o', 'maroo', 'marwanbemo0@gmail.com0', '011137768960', 12311, 'male', '011137768960', '', 'PaZpkOpg', 'FV6GlZ0e', 'Active', 11, NULL, '2023-08-20 02:48:41', '2023-08-20 02:48:41'),
(8, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo4LCJ1c2VyX25hbWUiOiJtYXJvbyIsInVzZXJfZW1haWwiOiJtYXJ3YW5iZW1vMEBnbWFpbC5jb20wcyIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5NjBkIiwidXNlcl9SZWZlcnJhbGNvZGUiOiJyNzRhdkUzRiIsInJlZmNvZGUgIjoiRlY2R2xaMGUiLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcwNTM5MTM5Nn0.ufjUADRdMOAll60VlsAFWwJcn3BTjFetY1s1WYNfaCY', 'maroo', 'marwanbemo0@gmail.com0s', '011137768960d', 12311, 'male', '011137768960', '', 'r74avE3F', 'FV6GlZ0e', 'Active', 117.5, NULL, '2023-08-23 06:09:46', '2023-08-23 06:09:46'),
(9, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjo5LCJ1c2VyX25hbWUiOiJtYXJld2FuIGhhbmQiLCJ1c2VyX2VtYWlsIjoiaG1obWhtaG1obSIsInVzZXJfcGhvbmUiOiIxMTEzNzc2ODk2IiwidXNlcl9SZWZlcnJhbGNvZGUgIjoiU0g2U0ttcmciLCJyZWZjb2RlICI6IkZWNkdsWjBlIiwidXNlcl90aW1lIjpudWxsfQ.Y3Fw5SnpL8DWGZM1DM4dWGdvmNFZNv1O6OHXltISw64', 'marewan hand', 'hmhmhmhmhm', '1113776896', 0, '18', '123123', '', 'SH6SKmrg', 'FV6GlZ0e', 'Active', 0, NULL, '2023-08-23 06:48:42', '2023-08-23 06:48:42'),
(10, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxMCwidXNlcl9uYW1lIjoidGVzdGVzdCIsInVzZXJfZW1haWwiOiJjZ3ZoZ2ZoYmZnaGIiLCJ1c2VyX3Bob25lIjoiMTAxMDEwMjQ1IiwidXNlcl9SZWZlcnJhbGNvZGUgIjoiSW1xRHEyOEEiLCJyZWZjb2RlICI6IjEyMzIxMzIxIiwidXNlcl90aW1lIjpudWxsfQ.9gVxqt8sA92NB_7hFq4f6qUv1IY4E6lVGMBjcciufn0', 'testest', 'cgvhgfhbfghb', '101010245', 15, 'male', '123123213', '', 'ImqDq28A', '12321321', 'Active', 0, NULL, '2023-08-23 06:51:51', '2023-08-23 06:51:51'),
(11, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxMSwidXNlcl9uYW1lIjoibW9zdGFmYWthbWVsIiwidXNlcl9lbWFpbCI6Im1ha2tha2FAZ21haWwuY29tIiwidXNlcl9waG9uZSI6IjAxMDEzMTQyNzU2IiwidXNlcl9SZWZlcnJhbGNvZGUgIjoiaHAyWGhsWmsiLCJyZWZjb2RlICI6IiIsInVzZXJfdGltZSI6bnVsbH0.xHN2npztHHOHQdSG5PyMJjR_Us-dnBQ7Elu9bBfgg9g', 'mostafakamel', 'makkaka@gmail.com', '01013142756', 0, '', 'jajaioaoakakwkk', '', 'hp2XhlZk', '', 'Active', 0, NULL, '2023-08-23 13:35:48', '2023-08-23 13:35:48'),
(12, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxMiwidXNlcl9uYW1lIjoibW9zdGFmYWthbWVsIiwidXNlcl9lbWFpbCI6Im1ta2ttbTEyQGdhbWlsLmNvbSIsInVzZXJfcGhvbmUiOiIwMTAxMzE0MjU3NjYiLCJ1c2VyX1JlZmVycmFsY29kZSAiOiI0eHVlbEdUNyIsInJlZmNvZGUgIjoiIiwidXNlcl90aW1lIjpudWxsfQ.rainZterPsKS9Fx2CzuplXOZM7Y1UaxR7eLAS6GnT38', 'mostafakamel', 'mmkkmm12@gamil.com', '010131425766', 0, '', 'mmmkk123', '', '4xuelGT7', '', 'Active', 0, NULL, '2023-08-23 13:36:41', '2023-08-23 13:36:41'),
(13, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxMywidXNlcl9uYW1lIjoiU2hhaGVuZGEiLCJ1c2VyX2VtYWlsIjoibW9zdGFmYTEyMzEyM0BnbWFpbC5jb20iLCJ1c2VyX3Bob25lIjoiMDExMTMxMjMxMjMiLCJ1c2VyX1JlZmVycmFsY29kZSAiOiJWQzJwQnRuVCIsInJlZmNvZGUgIjoic2gxMjM0NTY3ODkiLCJ1c2VyX3RpbWUiOm51bGx9.kk7YMp5qnijd5-U_1IABQJVQOF4H8LVwVPRcWbCLXKE', 'Shahenda', 'mostafa123123@gmail.com', '01113123123', 0, '', 'sh123456789', '', 'VC2pBtnT', 'sh123456789', 'Active', 0, NULL, '2023-08-23 20:14:11', '2023-08-23 20:14:11'),
(14, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxNCwidXNlcl9uYW1lIjoiT21hciBIYXNzYW4iLCJ1c2VyX2VtYWlsIjoib2hhc3NhbjQwMjIyMDEzQGdtYWlsLmNvbSIsInVzZXJfcGhvbmUiOiIxMDAwODc1NTM0IiwidXNlcl9SZWZlcnJhbGNvZGUgIjoiRWdQcmdzUm0iLCJyZWZjb2RlICI6IiIsInVzZXJfdGltZSI6bnVsbH0.QAme5m_F6YgM8Iy4fLIui9a1sUNpiozzfuw21uvVOQk', 'Omar Hassan', 'ohassan40222013@gmail.com', '1000875534', 0, '', 'Omar2006', '', 'EgPrgsRm', '', 'Active', 0, NULL, '2023-08-24 00:40:46', '2023-08-24 00:40:46'),
(15, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxNSwidXNlcl9uYW1lIjoiQWhtZWQuYWxpIiwidXNlcl9lbWFpbCI6Im5hZGVyLW5pdm9lcy1tYW5hZ2VyQGhvdG1haWwuY29tICIsInVzZXJfcGhvbmUiOiIwMTExNzg5NTU3NSIsInVzZXJfUmVmZXJyYWxjb2RlICI6IjdoMDBrYm5xIiwicmVmY29kZSAiOiIiLCJ1c2VyX3RpbWUiOm51bGx9.N5PErUWG5_HeBWCFe1pjLKpVC9v9d1QOZ-V6xuYTZRc', 'Ahmed.ali', 'nader-nivoes-manager@hotmail.com ', '01117895575', 0, '', 'P@$$w000rd105', '', '7h00kbnq', '', 'Active', 0, NULL, '2023-08-26 06:46:18', '2023-08-26 06:46:18'),
(16, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxNiwidXNlcl9uYW1lIjoibW9heiBoYXNzYW4iLCJ1c2VyX2VtYWlsIjoibW9hemhhc3NhbiIsInVzZXJfcGhvbmUiOiIwMTAwNTU1NTUxOSIsInVzZXJfUmVmZXJyYWxjb2RlICI6InNjeVBpWkVBIiwicmVmY29kZSAiOiIxMTExMSIsInVzZXJfdGltZSI6bnVsbH0.aUbFnEBM-gpz3iBuSrnRkII7nBTri55WhO39xFoioWo', 'moaz hassan', 'moazhassan', '01005555519', 0, '', 'nile2011', '', 'scyPiZEA', 'FV6GlZ0e', 'Active', 0, NULL, '2023-10-23 18:35:44', '2023-10-23 18:35:44'),
(17, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxNywidXNlcl9uYW1lIjoib21hcjIwMDgiLCJ1c2VyX2VtYWlsIjoib21hcjIwMDYiLCJ1c2VyX3Bob25lIjoiMDEwMDA4NzU0MzMiLCJ1c2VyX1JlZmVycmFsY29kZSI6IlBTQUpYdW9TIiwicmVmY29kZSAiOiIiLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcwMDQ5NzU3OH0.nap8AtGpZaZeH-iz3Inoo2-McvecpynUZhulmQ8kdIk', 'omar2008', 'omar2006', '01000875433', 0, '', 'omar2006', '', 'PSAJXuoS', '', 'Active', 250, NULL, '2023-11-18 16:26:08', '2023-11-18 16:26:08'),
(19, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoxOSwidXNlcl9uYW1lIjoibW9hejIyMyIsInVzZXJfZW1haWwiOiJtb2F6MjIxIiwidXNlcl9waG9uZSI6IjAxMDAwMDAwMDAwIiwidXNlcl9SZWZlcnJhbGNvZGUiOiJmWmYwTFREaSIsInJlZmNvZGUgIjoiIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDA1MDA5MDl9.NTb35FHcFTPHo2L8HgMdkqFdywyRiVPZA9_f-4DtuaM', 'moaz223', 'moaz221', '01000000000', 0, '', 'moaz221', '', 'fZf0LTDi', '', 'Active', 0, NULL, '2023-11-18 17:21:42', '2023-11-18 17:21:42'),
(20, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoyMCwidXNlcl9uYW1lIjoibW9hejIyMiIsInVzZXJfZW1haWwiOiJtb2F6MjIyIiwidXNlcl9waG9uZSI6IjEwMDAwMDAiLCJ1c2VyX1JlZmVycmFsY29kZSI6ImxzNWUwdzJ4IiwicmVmY29kZSAiOiJQU0FKWHVvUyIsInVzZXJfdGltZSI6bnVsbCwiZXhwIjoxNzAwNTA5MDY4fQ.QcqA8Y48TT9msl0yR1HNoo5Fu3JHqc8i_Ra6QLl8CWI', 'moaz222', 'moaz222', '1000000', 0, '', 'moaz222', '', 'ls5e0w2x', 'PSAJXuoS', 'Active', 230, NULL, '2023-11-18 17:23:35', '2023-11-18 17:23:35'),
(21, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoyMSwidXNlcl9uYW1lIjoibW9hejMzMyIsInVzZXJfZW1haWwiOiJtb2F6MzMzIiwidXNlcl9waG9uZSI6IjAxODUxNTE1NCIsInVzZXJfUmVmZXJyYWxjb2RlIjoiRWowTGp5S2oiLCJyZWZjb2RlICI6ImxzNWUwdzJ4IiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDA1MDkwMTd9.ERor9yB2FPBLyTO5LU2xKdB9vUUzsJFO4vANsFH6zQ0', 'moaz333', 'moaz333', '018515154', 0, '', 'moaz333', '', 'Ej0LjyKj', 'ls5e0w2x', 'Active', 0, NULL, '2023-11-18 17:26:16', '2023-11-18 17:26:16'),
(22, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoyMiwidXNlcl9uYW1lIjoibW9hejExMSIsInVzZXJfZW1haWwiOiJtb2F6MTExIiwidXNlcl9waG9uZSI6IjExMTExMTExIiwidXNlcl9SZWZlcnJhbGNvZGUiOiJXQ0ZNZGt3UiIsInJlZmNvZGUgIjoiIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MDA1MDkzNDF9.rEbS65TZZabh6EiBB7btlnS2rwA2I0lUugdaUp-xkis', 'moaz111', 'moaz111', '11111111', 0, '', 'moaz111', '', 'WCFMdkwR', '', 'Active', 165, NULL, '2023-11-18 19:38:37', '2023-11-18 19:38:37'),
(23, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoyMywidXNlcl9uYW1lIjoibW9hejAwMCIsInVzZXJfZW1haWwiOiJtb2F6MDAwIiwidXNlcl9waG9uZSI6IjExMTExMTEiLCJ1c2VyX1JlZmVycmFsY29kZSI6IjlxcGdkSFA5IiwicmVmY29kZSAiOiJXQ0ZNZGt3UiIsInVzZXJfdGltZSI6bnVsbCwiZXhwIjoxNzAwNTA5Mjk2fQ.LfvOL6brhEWL8JMvUMe7POOfAV5StvHXpVtPxeQZ6VM', 'moaz000', 'moaz000', '1111111', 0, '', 'moaz000', '', '9qpgdHP9', 'WCFMdkwR', 'Active', 0, NULL, '2023-11-18 19:41:20', '2023-11-18 19:41:20'),
(24, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoiMjQiLCJ1c2VyX25hbWUiOiIiLCJ1c2VyX2VtYWlsIjoiIiwidXNlcl9waG9uZSI6IiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiQnFtOGlES04iLCJyZWZjb2RlICI6IiIsInVzZXJfdGltZSI6bnVsbCwiZXhwIjoxNzIxMzI0NTM1fQ.mGlBQp7q_nK12JlVWPcfWCEbHO6T-irYmtFpuN7MM0M', '', '', '', 0, '', '', '', 'Bqm8iDKN', '', 'Active', 0, 20343, '2023-12-01 16:05:50', '2023-12-01 16:05:50'),
(25, NULL, 'maroo', 'hussienmo385@gmail.com', '01002596951', 0, '', '01002596951', '', 'HRF7vjCD', 'FV6GlZ0e', 'Active', 0, NULL, '2023-12-12 17:35:18', '2023-12-12 17:35:18'),
(26, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjoyNiwidXNlcl9uYW1lIjoibWFyb28iLCJ1c2VyX2VtYWlsIjoibWFyd2FAZ21haWwuY29tMHMiLCJ1c2VyX3Bob25lIjoiMDExMTM3NzY4OTY1IiwidXNlcl9SZWZlcnJhbGNvZGUiOiIxRWlyeDRIRSIsInJlZmNvZGUgIjoiRlY2R2xaMGUiLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcwMzU4MjI2N30.OUZchch7mPgOsSDkB1ceMxYAwWTkiuqerGyFl6M5sw4', 'maroo', 'marwa@gmail.com0s', '011137768965', 0, '', '011137768965', '', '1Eirx4HE', 'FV6GlZ0e', 'Active', 0, NULL, '2023-12-24 09:17:23', '2023-12-24 09:17:23'),
(27, NULL, 'mawsnda had', 'tesdfs@gmail.com', '0111375', 0, '', '123456789', '', 'GhxqDIHF', '', 'Active', 0, NULL, '2023-12-26 02:02:57', '2023-12-26 02:02:57'),
(28, NULL, 'omayma Mohamed ', 'omaymaesmael@gmail.com', '01113757611', 0, '', 'omayma', '', '3g2IaX1K', '22', 'Active', 0, NULL, '2023-12-29 16:33:33', '2023-12-29 16:33:33'),
(29, NULL, 'yyyg dddfg', 'hmwytyg@gmail.com', '0012355855', 0, '', '123456789', '', 'Tfk2nxTH', '', 'Active', 0, NULL, '2023-12-30 05:20:02', '2023-12-30 05:20:02'),
(30, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMCwidXNlcl9uYW1lIjoiZmZmaGggdHRoZ2giLCJ1c2VyX2VtYWlsIjoiZnZlaXRra2hAZ21haWwuY29tIiwidXNlcl9waG9uZSI6IjU4NDY4OTU1MiIsInVzZXJfUmVmZXJyYWxjb2RlIjoiZURob2VvVWYiLCJyZWZjb2RlICI6IiIsInVzZXJfdGltZSI6bnVsbCwiZXhwIjoxNzA0MDg2OTA2fQ.IELBUOJ8_xuXy-U_pgZEL0ummSFo7djKBmr0Hhdr0zc', 'fffhh tthgh', 'fveitkkh@gmail.com', '584689552', 0, '', '12346978', '', 'eDhoeoUf', '', 'Active', 0, NULL, '2023-12-30 05:28:26', '2023-12-30 05:28:26'),
(31, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMSwidXNlcl9uYW1lIjoicmdmamhqIHJoY2pyaSIsInVzZXJfZW1haWwiOiJtYXJ3YW5mQGdiZ2huai5jb20iLCJ1c2VyX3Bob25lIjoiMDExMzc2NTI0NSIsInVzZXJfUmVmZXJyYWxjb2RlIjoiT1Y1MVdId1YiLCJyZWZjb2RlICI6IiIsInVzZXJfdGltZSI6bnVsbCwiZXhwIjoxNzA0MDg3MDM0fQ.GU_uQMl0KH9jjvuaNaODCiMJM6SCwfZT3-yVVUtChYU', 'rgfjhj rhcjri', 'marwanf@gbghnj.com', '0113765245', 0, '', '1234564165', '', 'OV51WHwV', '', 'Active', 0, NULL, '2023-12-30 05:30:34', '2023-12-30 05:30:34'),
(32, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMiwidXNlcl9uYW1lIjoibXFmZHkgZmpyamhqbiIsInVzZXJfZW1haWwiOiJmaGhrZnlyeUBnbWFpbCIsInVzZXJfcGhvbmUiOiIwMTExMzc3Njg5Njk1NSIsInVzZXJfUmVmZXJyYWxjb2RlIjoiTjE5aWZjVzEiLCJyZWZjb2RlICI6IiIsInVzZXJfdGltZSI6bnVsbCwiZXhwIjoxNzExODMyNzMxfQ.gim0d8eoCqQMkPSQw2VjfXs6C1hwgpbklS5R9-DCEOM', 'mqfdy fjrjhjn', 'fhhkfyry@gmail', '01113776896955', 0, '', 'popopo', '', 'N19ifcW1', '', 'Active', 0, NULL, '2024-01-30 21:05:31', '2024-01-30 21:05:31'),
(33, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozMywidXNlcl9uYW1lIjoibWF0ZmpkIHRlc3QiLCJ1c2VyX2VtYWlsIjoiaG0xMjg2NTJAZ21haWwuY29tIiwidXNlcl9waG9uZSI6IjExMTM3NzY4OTZzIiwidXNlcl9SZWZlcnJhbGNvZGUiOiJNUFlBcHZpbiIsInJlZmNvZGUgIjoiIiwidXNlcl90aW1lIjpudWxsLCJleHAiOjE3MTU5OTg5Mzl9.r8x5BMHBj-cGEq4tfJAz3uuj3DGwrgHhg8lPFRUNGSU', 'matfjd test', 'hm128652@gmail.com', '1113776896s', 0, '', 'Kkoopp00', '', 'MPYApvin', '', 'Active', 0, NULL, '2024-03-19 02:22:19', '2024-03-19 02:22:19'),
(34, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyX2lkIjozNCwidXNlcl9uYW1lIjoiXHUwNjQ1XHUwNjJkXHUwNjQ1XHUwNjJmIFx1MDY0NVx1MDYyZFx1MDY0NVx1MDYyZiIsInVzZXJfZW1haWwiOiJtb2hob3NzYW00MUBnbWFpbC5jb20iLCJ1c2VyX3Bob25lIjoiMDEyNzY2NjQyMDkiLCJ1c2VyX1JlZmVycmFsY29kZSI6InRsbEFCd3lQIiwicmVmY29kZSAiOiIiLCJ1c2VyX3RpbWUiOm51bGwsImV4cCI6MTcxNjM5MjAzMn0.ZFWjE4qjz5vnQW-c-M5I-nl7nVzfbn5jWEjvcwAhiIs', 'محمد محمد', 'mohhossam41@gmail.com', '01276664209', 0, '', '077Smz077', '', 'tllABwyP', '', 'Active', 0, NULL, '2024-03-20 12:52:52', '2024-03-20 12:52:52'),
(112132, NULL, 'ahmed', 'ahmed@gmail.com', NULL, NULL, NULL, 'akeracode', NULL, NULL, NULL, 'Active', 0, NULL, '2024-05-07 23:20:58', '2024-05-07 23:20:58'),
(112133, NULL, 'ahmed', 'mo1670448@gmail.com', NULL, NULL, NULL, 'e', NULL, NULL, NULL, 'Active', 0, NULL, '2024-05-07 23:22:59', '2024-05-07 23:22:59'),
(112134, NULL, 'sss sss', 'smzzmz40@gmail.com', '0000000', NULL, NULL, '12341234', NULL, 'lkvhTVWd', '', 'Active', 0, NULL, '2024-05-19 11:03:03', '2024-05-19 11:03:03'),
(112135, NULL, 'sss ssss', 'eslamsalim35@gmail.com', '00000000', NULL, NULL, '12341234', NULL, 'BP57Es2M', '', 'Active', 0, NULL, '2024-05-19 11:21:20', '2024-05-19 11:21:20'),
(112136, NULL, 'mohamed adels', 'tesasdasdt@gmail.com', NULL, NULL, NULL, '$2y$10$w3lSAD8OIWyPHlOVfVXFEei/dm5zKbbIAovOdGPOV5ij5fhk/ljxm', NULL, NULL, NULL, 'Active', 0, NULL, '2024-05-21 03:30:54', '2024-05-21 03:30:54'),
(112137, NULL, 'mohamed adel', 'testo@gmail.com', NULL, NULL, NULL, '$2y$10$88AC2DtjUKS/bEjNWVOhFuocdd187LKp11diTcj72bT4XhkAdgB32', NULL, NULL, NULL, 'Active', 0, NULL, '2024-05-21 07:52:26', '2024-05-21 07:52:26'),
(112138, NULL, 'mohamed adel', 'mohamedmersal98@gmail.com', NULL, NULL, NULL, '$2y$10$FbJS2hXZYAwnfAKZCM8nBeO0UHf/yG5lNsvuQNv3q2INHUrASWOsG', NULL, NULL, NULL, 'Active', 0, NULL, '2024-05-21 17:12:41', '2024-05-21 17:12:41'),
(112139, NULL, 'mohamed adel', 'mohamedmersal908@gmail.com', NULL, NULL, NULL, '$2y$10$pR8Ewjd4BA9ydj04IQsez.aWtPfz9TGrBSUNLCdz1dyzwIr4lYq5e', NULL, NULL, NULL, 'Active', 0, NULL, '2024-05-23 13:53:19', '2024-05-23 13:53:19');

-- --------------------------------------------------------

--
-- Table structure for table `viewitem`
--

CREATE TABLE `viewitem` (
  `views_id` int NOT NULL,
  `views_userid` int NOT NULL,
  `views_itemid` int NOT NULL,
  `views_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallettransaction`
--

CREATE TABLE `wallettransaction` (
  `WalletTransaction_id` int NOT NULL,
  `from` int NOT NULL COMMENT 'userId',
  `to` int NOT NULL COMMENT 'userId',
  `basketTicket` int NOT NULL COMMENT 'orderid',
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `percent` float NOT NULL,
  `value` float DEFAULT NULL,
  `isCancel` tinyint NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallettransaction`
--

INSERT INTO `wallettransaction` (`WalletTransaction_id`, `from`, `to`, `basketTicket`, `status`, `percent`, `value`, `isCancel`, `time`) VALUES
(1, 4, 2, 923695, 'pending', 10, 50, 0, '2023-12-15 22:42:06'),
(2, 4, 8, 923695, 'pending', 5, 30, 0, '2023-12-15 22:42:06'),
(3, 11, 4, 923695, 'pending', 10, 10, 0, '2023-12-15 22:42:06'),
(4, 16, 4, 923695, 'pending', 5, 30, 0, '2023-12-15 22:42:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auctions`
--
ALTER TABLE `auctions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `AuctionsItemID` (`AuctionsItemID`);

--
-- Indexes for table `auctionsitem`
--
ALTER TABLE `auctionsitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`basket_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_design`
--
ALTER TABLE `custom_design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`favorite_id`),
  ADD KEY `favorite_itemid` (`favorite_itemid`),
  ADD KEY `favorite_userid` (`favorite_userid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_cat` (`item_cat`);

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
-- Indexes for table `promo_codes`
--
ALTER TABLE `promo_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refreshtoken`
--
ALTER TABLE `refreshtoken`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_IdCat` (`subcategories_IdCat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_Referralcode` (`user_Referralcode`);

--
-- Indexes for table `viewitem`
--
ALTER TABLE `viewitem`
  ADD PRIMARY KEY (`views_id`),
  ADD KEY `views_itemid` (`views_itemid`),
  ADD KEY `views_userid` (`views_userid`);

--
-- Indexes for table `wallettransaction`
--
ALTER TABLE `wallettransaction`
  ADD PRIMARY KEY (`WalletTransaction_id`),
  ADD KEY `from` (`from`),
  ADD KEY `to` (`to`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `auctions`
--
ALTER TABLE `auctions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `auctionsitem`
--
ALTER TABLE `auctionsitem`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `basket`
--
ALTER TABLE `basket`
  MODIFY `basket_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `custom_design`
--
ALTER TABLE `custom_design`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `design`
--
ALTER TABLE `design`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `favorite_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1192;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `promo_codes`
--
ALTER TABLE `promo_codes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `refreshtoken`
--
ALTER TABLE `refreshtoken`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112140;

--
-- AUTO_INCREMENT for table `viewitem`
--
ALTER TABLE `viewitem`
  MODIFY `views_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wallettransaction`
--
ALTER TABLE `wallettransaction`
  MODIFY `WalletTransaction_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auctions`
--
ALTER TABLE `auctions`
  ADD CONSTRAINT `Auctions_ibfk_1` FOREIGN KEY (`AuctionsItemID`) REFERENCES `auctionsitem` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `favorite_ibfk_1` FOREIGN KEY (`favorite_itemid`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorite_ibfk_2` FOREIGN KEY (`favorite_userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`item_cat`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`subcategories_IdCat`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `viewitem`
--
ALTER TABLE `viewitem`
  ADD CONSTRAINT `viewitem_ibfk_1` FOREIGN KEY (`views_itemid`) REFERENCES `items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `viewitem_ibfk_2` FOREIGN KEY (`views_userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wallettransaction`
--
ALTER TABLE `wallettransaction`
  ADD CONSTRAINT `WalletTransaction_ibfk_1` FOREIGN KEY (`from`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `WalletTransaction_ibfk_2` FOREIGN KEY (`to`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
