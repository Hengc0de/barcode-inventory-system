-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 05:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barcodeinventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `category_name`, `description`, `updated_at`) VALUES
(1, 'Computer Electronic', 'This is mouse category', '2023-08-14 12:40:42'),
(2, 'Drink', 'dog drinks', '2023-08-14 11:13:12'),
(4, 'Bottled Water', 'dwadaw', '2023-08-14 12:40:06'),
(5, 'Other', '12', '2023-08-14 12:41:02');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordered_product`
--

CREATE TABLE `ordered_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_discount` int(11) NOT NULL,
  `product_total` float NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `grand_total` float DEFAULT NULL,
  `customer_phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordered_product`
--

INSERT INTO `ordered_product` (`id`, `product_name`, `product_qty`, `product_price`, `product_discount`, `product_total`, `order_id`, `product_id`, `grand_total`, `customer_phone_number`) VALUES
(73, 'Razer Viper V2 Pro', 2, 150, 0, 300, 46, 3, NULL, '0'),
(74, 'Cotton Pad', 1, 20, 0, 20, 46, 3, NULL, '0'),
(75, 'Razer Viper V2 Pro', 1, 150, 0, 150, 46, 3, NULL, '0'),
(76, 'Razer Viper V2 Pro', 3, 150, 0, 450, 46, 3, NULL, '0'),
(77, 'Coca', 1, 2, 0, 2, 46, 3, NULL, '0'),
(78, 'Coca', 2, 2, 0, 4, 46, 4, NULL, '0'),
(79, 'Coca', 1, 2, 0, 2, 46, 4, NULL, '0'),
(80, 'Razer Viper V2 Pro', 2, 150, 0, 300, 46, 3, NULL, '0'),
(81, 'Razer Viper V2 Pro', 1, 150, 0, 150, 46, 3, NULL, '0'),
(82, 'Razer Viper V2 Pro', 1, 150, 0, 150, 46, 3, NULL, '0'),
(87, 'Razer Viper V2 Pro', 1, 150, 0, 150, 10, 3, NULL, '0'),
(88, 'Test Supplier', 1, 120, 0, 120, 11, 9, NULL, '0'),
(89, 'Razer Viper V2 Pro', 1, 150, 0, 150, 12, 3, NULL, '0'),
(90, 'Test Supplier', 1, 120, 0, 120, 12, 3, NULL, '0'),
(91, 'Test Supplier', 1, 120, 0, 120, 13, 9, NULL, '0'),
(92, 'Test Supplier', 1, 120, 0, 120, 16, 9, NULL, '0'),
(93, 'Test Supplier', 1, 120, 0, 120, 20, 9, NULL, '0'),
(94, 'Test Supplier', 1, 120, 0, 120, 21, 9, NULL, '0'),
(95, 'Razer Viper V2 Pro', 1, 150, 0, 150, 22, 3, NULL, '0'),
(96, 'Coca', 1, 2, 0, 2, 23, 4, NULL, '0'),
(97, 'Coca', 1, 2, 0, 2, 24, 4, NULL, '0'),
(98, 'Test Supplier', 1, 120, 0, 120, 25, 9, NULL, '0'),
(99, 'Razer Viper V2 Pro', 1, 150, 0, 150, 26, 3, NULL, '0'),
(100, 'Razer Viper V2 Pro', 1, 150, 0, 150, 27, 3, NULL, '0'),
(101, 'Razer Viper V2 Pro', 1, 150, 0, 150, 28, 3, NULL, '0'),
(102, 'Razer Viper V2 Pro', 1, 150, 0, 150, 29, 3, NULL, '0'),
(103, 'Test Supplier', 1, 120, 0, 120, 29, 3, NULL, '0'),
(104, 'Razer Viper V2 Pro', 1, 150, 0, 150, 30, 3, NULL, '0'),
(105, 'Razer Viper V2 Pro', 1, 150, 0, 150, 31, 3, NULL, '0'),
(106, 'Razer Viper V2 Pro', 1, 150, 0, 150, 32, 3, NULL, '0'),
(107, 'Test Supplier', 1, 120, 0, 120, 33, 9, NULL, '0'),
(109, 'Razer Viper V2 Pro', 5, 150, 0, 750, 34, 3, NULL, '0'),
(110, 'Test Supplier', 1, 120, 0, 120, 34, 3, NULL, '0'),
(113, 'Razer Viper V2 Pro', 4, 150, 0, 600, 35, 3, NULL, '0'),
(114, 'Test Supplier', 1, 120, 0, 120, 35, 3, NULL, '0'),
(115, 'Razer Viper V2 Pro', 12, 150, 0, 1800, 37, 3, NULL, '0'),
(116, 'Test Supplier', 14, 120, 0, 1680, 37, 3, NULL, '0'),
(117, 'Razer Viper V2 Pro', 10, 150, 0, 1500, 40, 3, NULL, '0'),
(118, 'Test Supplier', 11, 120, 0, 1320, 40, 9, NULL, '0'),
(119, 'Coca', 6, 2, 0, 12, 40, 4, NULL, '0'),
(120, 'vital', 2, 100, 0, 200, 40, 10, NULL, '0'),
(121, 'Razer Viper V2 Pro', 1, 150, 0, 150, 41, 3, NULL, '0'),
(122, 'Test Supplier', 2, 120, 0, 240, 42, 9, NULL, '0'),
(123, 'Coca', 1, 2, 0, 2, 42, 4, NULL, '0'),
(124, 'Razer Viper V2 Pro', 1, 150, 0, 150, 43, 3, NULL, '0123232'),
(125, 'Test Supplier', 1, 120, 0, 80, 44, 9, NULL, '0123'),
(126, 'Razer Viper V2 Pro', 1, 150, 0, 150, 45, 3, NULL, '0123'),
(127, 'Coca', 1, 2, 0, 2, 46, 4, NULL, '0123'),
(128, 'vital', 1, 100, 0, 100, 46, 10, NULL, '0123'),
(129, 'Razer Viper V2 Pro', 1, 150, 0, 150, 47, 3, NULL, '0123'),
(130, 'Razer Viper V2 Pro', 11, 150, 0, 1650, 48, 3, NULL, '0'),
(131, 'vital', 1, 100, 0, 100, 49, 10, NULL, '0123'),
(132, 'Razer Viper V2 Pro', 1, 150, 0, 150, 50, 3, NULL, '0123'),
(133, 'Razer Viper V2 Pro', 1, 150, 0, 150, 51, 3, NULL, '0123'),
(134, 'Razer Viper V2 Pro', 1, 150, 0, 150, 52, 3, NULL, '0123'),
(135, 'Razer Viper V2 Pro', 1, 150, 0, 150, 53, 3, NULL, '0123'),
(136, 'Razer Viper V2 Pro', 1, 150, 0, 150, 54, 3, NULL, '0123'),
(137, 'Razer Viper V2 Pro', 1, 150, 0, 150, 55, 3, NULL, '0123'),
(138, 'Razer Viper V2 Pro', 1, 150, 0, 150, 56, 3, NULL, '0123'),
(139, 'Razer Viper V2 Pro', 1, 150, 0, 150, 57, 3, NULL, '0123'),
(140, 'Razer Viper V2 Pro', 1, 150, 0, 150, 58, 3, NULL, '0123'),
(141, 'Razer Viper V2 Pro', 1, 150, 0, 150, 59, 3, NULL, '0123'),
(142, 'Razer Viper V2 Pro', 1, 150, 0, 150, 60, 3, NULL, '0123'),
(143, 'Razer Viper V2 Pro', 1, 150, 0, 150, 61, 3, NULL, '0123'),
(144, 'Razer Viper V2 Pro', 1, 150, 0, 150, 62, 3, NULL, '0123'),
(145, 'Razer Viper V2 Pro', 1, 150, 0, 150, 63, 3, NULL, '0123'),
(146, 'Coca', 1, 2, 0, 2, 64, 4, NULL, '0123'),
(147, 'Razer Viper V2 Pro', 1, 150, 0, 150, 65, 3, NULL, '0123'),
(148, 'Coca', 1, 2, 0, 2, 65, 4, NULL, '0123'),
(149, 'Razer Viper V2 Pro', 1, 150, 0, 150, 66, 3, NULL, '0123'),
(150, 'Coca', 1, 2, 0, 2, 66, 4, NULL, '0123'),
(151, 'Razer Viper V2 Pro', 1, 150, 0, 150, 67, 3, NULL, '0123'),
(152, 'Coca', 1, 2, 0, 2, 67, 4, NULL, '0123'),
(153, 'Razer Viper V2 Pro', 1, 150, 0, 150, 68, 3, NULL, '0123'),
(154, 'Coca', 1, 2, 0, 2, 68, 4, NULL, '0123'),
(155, 'Razer Viper V2 Pro', 1, 150, 0, 150, 69, 3, NULL, '0123'),
(156, 'Coca', 1, 2, 0, 2, 69, 4, NULL, '0123'),
(157, 'Razer Viper V2 Pro', 1, 150, 0, 150, 70, 3, NULL, '0123'),
(158, 'Coca', 1, 2, 0, 2, 70, 4, NULL, '0123'),
(159, 'Razer Viper V2 Pro', 1, 150, 0, 150, 71, 3, NULL, '0123'),
(160, 'Coca', 1, 2, 0, 2, 71, 4, NULL, '0123'),
(161, 'Razer Viper V2 Pro', 2, 150, 0, 300, 72, 3, NULL, '0123'),
(162, 'Test Supplier', 8, 120, 0, 960, 72, 9, NULL, '0123'),
(163, 'Razer Viper V2 Pro', 1, 150, 0, 150, 73, 3, NULL, '0123'),
(164, 'Razer Viper V2 Pro', 1, 150, 0, 150, 74, 3, NULL, '0123'),
(165, 'Razer Viper V2 Pro', 1, 150, 0, 150, 75, 3, NULL, '0123'),
(166, 'Razer Viper V2 Pro', 1, 150, 0, 150, 76, 3, NULL, '0123'),
(167, 'Razer Viper V2 Pro', 1, 150, 0, 150, 77, 3, NULL, '0123'),
(168, 'Test Supplier', 1, 120, 0, 120, 78, 9, NULL, '0123'),
(169, 'Test Supplier', 1, 120, 0, 120, 79, 9, NULL, '0123'),
(170, 'Test Supplier', 1, 120, 0, 120, 80, 9, NULL, '0123'),
(171, 'Test Supplier', 1, 120, 0, 120, 81, 9, NULL, '0123'),
(172, 'Razer Viper V2 Pro', 1, 150, 0, 150, 82, 3, NULL, '0123'),
(173, 'Coca', 1, 2, 0, 2, 83, 4, NULL, '0123'),
(174, 'vital', 1, 100, 0, 100, 84, 10, NULL, '0123'),
(175, 'vital', 1, 100, 0, 100, 85, 10, NULL, '0123'),
(176, 'Coca', 1, 2, 0, 2, 86, 4, NULL, '0123'),
(177, 'Razer Viper V2 Pro', 1, 150, 0, 150, 87, 3, NULL, '0123'),
(178, 'Test Supplier', 1, 120, 0, 120, 88, 9, NULL, '0123'),
(179, 'vital', 1, 100, 0, 100, 89, 10, NULL, '0123'),
(180, 'Razer Viper V2 Pro', 1, 150, 0, 150, 90, 3, NULL, '0123'),
(181, 'Razer Viper V2 Pro', 2, 150, 0, 300, 91, 3, NULL, '0123'),
(182, 'Razer Viper V2 Pro', 1, 150, 0, 150, 92, 3, NULL, '0123'),
(183, 'Test Supplier', 1, 120, 0, 120, 93, 9, NULL, '0123'),
(184, 'Test Supplier', 1, 120, 0, 120, 94, 9, NULL, '0123'),
(185, 'Test Supplier', 1, 120, 0, 120, 95, 9, NULL, '0123'),
(186, 'Test Supplier', 1, 120, 0, 120, 96, 9, NULL, '0123'),
(187, 'Test Supplier', 1, 120, 0, 120, 97, 9, NULL, '0123'),
(188, 'Test Supplier', 1, 120, 0, 120, 98, 9, NULL, '0123'),
(189, 'Test Supplier', 1, 120, 0, 120, 99, 9, NULL, '0123'),
(190, 'Test Supplier', 1, 120, 0, 120, 100, 9, NULL, '0123'),
(191, 'Test Supplier', 1, 120, 0, 120, 101, 9, NULL, '0123'),
(192, 'Test Supplier', 1, 120, 0, 120, 102, 9, NULL, '0123'),
(193, 'Test Supplier', 1, 120, 0, 120, 103, 9, NULL, '0123'),
(194, 'Test Supplier', 1, 120, 0, 120, 104, 9, NULL, '0123'),
(195, 'Razer Viper V2 Pro', 1, 150, 0, 150, 105, 3, NULL, '0123'),
(196, 'Razer Viper V2 Pro', 1, 150, 0, 150, 106, 3, NULL, '0123'),
(197, 'Test Supplier', 1, 120, 0, 120, 107, 9, NULL, '0123'),
(198, 'Test Supplier', 1, 120, 0, 120, 108, 9, NULL, '0123'),
(199, 'Test Supplier', 1, 120, 0, 120, 109, 9, NULL, '0123'),
(200, 'Test Supplier', 1, 120, 0, 120, 110, 9, NULL, '0123'),
(201, 'Razer Viper V2 Pro', 1, 150, 0, 150, 111, 3, NULL, '0123'),
(202, 'Razer Viper V2 Pro', 1, 150, 0, 150, 112, 3, NULL, '0123'),
(203, 'Razer Viper V2 Pro', 1, 150, 0, 150, 113, 3, NULL, '0123'),
(204, 'Razer Viper V2 Pro', 1, 150, 0, 150, 114, 3, NULL, '0123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ordered_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `created_at`, `ordered_by`) VALUES
(1, 'DDog', '2023-08-13 14:23:06', 0),
(2, '3', '2023-08-13 14:23:06', 0),
(3, 'New', '2023-08-13 14:23:06', 0),
(4, 'doggy', '2023-08-13 14:23:06', 0),
(5, '321', '2023-08-13 14:23:06', 0),
(6, '23', '2023-08-13 14:23:06', 0),
(7, '23', '2023-08-13 14:23:06', 0),
(8, '2', '2023-08-13 14:23:06', 0),
(9, '223', '2023-08-13 14:23:06', 0),
(10, '223', '2023-08-13 14:23:06', 0),
(11, '223', '2023-08-13 14:23:06', 0),
(12, 'da', '2023-08-13 14:23:06', 0),
(13, 'da', '2023-08-13 14:23:06', 0),
(14, '23', '2023-08-13 14:23:06', 0),
(15, '3', '2023-08-13 14:23:06', 0),
(16, 'a', '2023-08-13 14:23:06', 0),
(17, 'test', '2023-08-13 14:23:06', 0),
(18, 'test', '2023-08-13 14:23:06', 0),
(19, 'ada', '2023-08-13 14:23:06', 0),
(20, 'Dog', '2023-08-13 14:23:06', 0),
(21, 'Doggo', '2023-08-13 14:23:06', 0),
(22, 'Doggo', '2023-08-13 14:23:06', 0),
(23, 'test', '2023-08-13 14:23:06', 0),
(24, 'okay', '2023-08-13 14:23:06', 0),
(25, 'Scan Test', '2023-08-13 14:23:06', 0),
(26, 'Scan Test', '2023-08-13 14:23:06', 0),
(27, 'Jack', '2023-08-13 14:23:06', 0),
(28, 'Customer name', '2023-08-13 14:23:06', 0),
(29, 'Customer name', '2023-08-13 14:23:06', 0),
(30, 'Customer name', '2023-08-13 14:23:06', 0),
(31, 'Customer name', '2023-08-13 14:23:06', 0),
(32, 'Customer name', '2023-08-13 14:23:06', 0),
(33, 'Customer name', '2023-08-13 14:23:06', 0),
(34, 'Customer name', '2023-08-13 14:23:06', 0),
(35, 'Customer name', '2023-08-13 14:23:06', 0),
(36, 'Customer name', '2023-08-13 14:23:06', 0),
(37, 'Customer name', '2023-08-13 14:23:06', 0),
(38, 'Customer name', '2023-08-13 14:23:06', 0),
(39, 'Customer name', '2023-08-13 14:23:06', 0),
(40, 'Customer name', '2023-08-13 14:23:06', 0),
(41, 'Customer name', '2023-08-13 14:23:06', 0),
(42, 'Customer name', '2023-08-13 14:23:06', 0),
(43, 'Customer name', '2023-08-13 14:23:06', 0),
(44, 'Customer name', '2023-08-13 14:23:06', 0),
(45, 'Customer name', '2023-08-13 14:23:06', 0);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pos`
--

CREATE TABLE `pos` (
  `po_id` int(11) NOT NULL,
  `po_name` varchar(255) DEFAULT NULL,
  `grand_total` float DEFAULT NULL,
  `customer_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `order_id` int(11) DEFAULT NULL,
  `customer_phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pos`
--

INSERT INTO `pos` (`po_id`, `po_name`, `grand_total`, `customer_name`, `created_at`, `order_id`, `customer_phone_number`) VALUES
(1, 'Default', 1, '1', '2023-08-13 16:01:07', 1, NULL),
(21, 'Order#3', 150, 'Customer name', '2023-08-14 09:08:22', 3, NULL),
(22, 'Order#4', 150, 'Customer name', '2023-08-14 09:08:24', 4, NULL),
(23, 'Order#5', 150, 'Customer name', '2023-08-14 09:08:29', 5, NULL),
(24, 'Order#6', 150, 'Customer name', '2023-08-14 09:09:51', 6, NULL),
(25, 'Order#7', 150, 'Customer name', '2023-08-14 09:09:56', 7, NULL),
(26, 'Order#8', 150, 'Customer name', '2023-08-14 09:10:27', 8, NULL),
(27, 'Order#9', 150, 'Customer name', '2023-08-14 09:10:29', 9, NULL),
(28, 'Order#10', 150, 'Customer name', '2023-08-14 09:10:34', 10, NULL),
(29, 'Order#11', 120, 'Customer name', '2023-08-14 09:11:40', 11, NULL),
(30, 'Order#12', 270, 'Customer name', '2023-08-14 09:16:31', 12, NULL),
(31, 'Order#13', 120, 'Customer name', '2023-08-14 09:17:12', 13, NULL),
(32, 'Order#14', 120, 'Customer name', '2023-08-14 09:19:02', 14, NULL),
(33, 'Order#15', 120, 'Customer name', '2023-08-14 09:19:02', 15, NULL),
(34, 'Order#16', 120, 'Customer name', '2023-08-14 09:19:20', 16, NULL),
(35, 'Order#17', 120, 'Customer name', '2023-08-14 09:22:17', 17, NULL),
(36, 'Order#18', 120, 'Customer name', '2023-08-14 09:23:05', 18, NULL),
(37, 'Order#19', 120, 'Customer name', '2023-08-14 09:23:08', 19, NULL),
(38, 'Order#20', 120, 'Customer name', '2023-08-14 09:24:55', 20, NULL),
(39, 'Order#21', 120, 'Customer name', '2023-08-14 09:25:48', 21, NULL),
(40, 'Order#22', 270, 'Customer name', '2023-08-14 09:38:31', 22, NULL),
(41, 'Order#23', 2, 'Customer name', '2023-08-14 09:42:21', 23, NULL),
(42, 'Order#24', 2, 'Customer name', '2023-08-14 09:42:35', 24, NULL),
(43, 'Order#25', 120, 'Customer name', '2023-08-14 09:48:08', 25, NULL),
(44, 'Order#26', 270, 'Customer name', '2023-08-14 09:55:16', 26, NULL),
(45, 'Order#27', 270, 'Customer name', '2023-08-14 09:55:54', 27, NULL),
(46, 'Order#28', 270, 'Customer name', '2023-08-14 09:55:55', 28, NULL),
(47, 'Order#29', 270, 'Customer name', '2023-08-14 09:56:22', 29, NULL),
(48, 'Order#30', 150, 'Customer name', '2023-08-14 11:52:57', 30, NULL),
(49, 'Order#31', 150, 'Customer name', '2023-08-14 11:53:44', 31, NULL),
(50, 'Order#32', 150, 'Customer name', '2023-08-14 11:54:57', 32, NULL),
(51, 'Order#33', 120, 'Doggo', '2023-08-14 11:56:54', 33, NULL),
(53, 'Order#34', 870, 'kok', '2023-08-14 12:24:55', 34, NULL),
(55, 'Order#35', 720, 'Customer name', '2023-08-15 08:51:41', 35, NULL),
(56, 'Order#36', 0, 'Customer name', '2023-09-11 07:23:26', 36, NULL),
(57, 'Order#37', 3480, 'Customer name', '2023-09-11 07:51:33', 37, NULL),
(58, 'Order#38', 3032, 'Customer name', '2023-09-11 08:03:01', 38, NULL),
(59, 'Order#39', 3032, 'Customer name', '2023-09-11 08:03:06', 39, NULL),
(60, 'Order#40', 3032, 'Customer name', '2023-09-11 08:05:03', 40, NULL),
(61, 'Order#41', 150, 'Customer name', '2023-09-11 08:30:55', 41, NULL),
(62, 'Order#42', 242, 'Customer name', '2023-09-11 08:31:10', 42, NULL),
(63, 'Order#43', 150, NULL, '2023-09-17 11:22:40', 43, '0123232'),
(64, 'Order#44', 80, NULL, '2023-09-17 11:42:58', 44, '0123'),
(65, 'Order#45', 150, NULL, '2023-09-17 11:43:45', 45, '0123'),
(66, 'Order#46', 102, NULL, '2023-09-17 11:43:56', 46, '0123'),
(67, 'Order#47', 150, NULL, '2023-09-17 11:59:58', 47, '0123'),
(68, 'Order#48', 1650, NULL, '2023-09-17 12:56:07', 48, '0'),
(69, 'Order#49', 100, NULL, '2023-09-17 13:01:56', 49, '0123'),
(70, 'Order#50', 150, NULL, '2023-09-17 13:02:30', 50, '0123'),
(71, 'Order#51', -1, NULL, '2023-09-17 13:04:53', 51, '0123'),
(72, 'Order#52', -1, NULL, '2023-09-17 13:04:53', 52, '0123'),
(73, 'Order#53', -1, NULL, '2023-09-17 13:04:53', 53, '0123'),
(74, 'Order#54', -1, NULL, '2023-09-17 13:04:54', 54, '0123'),
(75, 'Order#55', -1, NULL, '2023-09-17 13:04:54', 55, '0123'),
(76, 'Order#56', -1, NULL, '2023-09-17 13:04:54', 56, '0123'),
(77, 'Order#57', -1, NULL, '2023-09-17 13:04:54', 57, '0123'),
(78, 'Order#58', -1, NULL, '2023-09-17 13:04:55', 58, '0123'),
(79, 'Order#59', -1, NULL, '2023-09-17 13:04:55', 59, '0123'),
(80, 'Order#60', -1, NULL, '2023-09-17 13:04:55', 60, '0123'),
(81, 'Order#61', -1, NULL, '2023-09-17 13:04:55', 61, '0123'),
(82, 'Order#62', -1, NULL, '2023-09-17 13:04:55', 62, '0123'),
(83, 'Order#63', -1, NULL, '2023-09-17 13:04:56', 63, '0123'),
(84, 'Order#64', 0, NULL, '2023-09-17 13:20:38', 64, '0123'),
(85, 'Order#65', 152, NULL, '2023-09-17 13:31:31', 65, '0123'),
(86, 'Order#66', 152, NULL, '2023-09-17 13:31:31', 66, '0123'),
(87, 'Order#67', 152, NULL, '2023-09-17 13:31:32', 67, '0123'),
(88, 'Order#68', 152, NULL, '2023-09-17 13:31:32', 68, '0123'),
(89, 'Order#69', 152, NULL, '2023-09-17 13:31:32', 69, '0123'),
(90, 'Order#70', 152, NULL, '2023-09-17 13:31:32', 70, '0123'),
(91, 'Order#71', 152, NULL, '2023-09-17 13:31:32', 71, '0123'),
(92, 'Order#72', 0, NULL, '2023-09-17 13:37:35', 72, '0123'),
(93, 'Order#73', 0, NULL, '2023-09-17 13:37:56', 73, '0123'),
(94, 'Order#74', 0, NULL, '2023-09-17 13:39:37', 74, '0123'),
(95, 'Order#75', 150, NULL, '2023-09-17 13:57:13', 75, '0123'),
(96, 'Order#76', 0, NULL, '2023-09-17 13:58:56', 76, '0123'),
(97, 'Order#77', 0, NULL, '2023-09-17 13:59:16', 77, '0123'),
(98, 'Order#78', 0, NULL, '2023-09-17 14:00:05', 78, '0123'),
(99, 'Order#79', 0, NULL, '2023-09-17 14:00:42', 79, '0123'),
(100, 'Order#80', 0, NULL, '2023-09-17 14:02:25', 80, '0123'),
(101, 'Order#81', 0, NULL, '2023-09-17 14:02:43', 81, '0123'),
(102, 'Order#82', 0, NULL, '2023-09-17 14:08:40', 82, '0123'),
(103, 'Order#83', 0, NULL, '2023-09-17 14:10:55', 83, '0123'),
(104, 'Order#84', 100, NULL, '2023-09-17 14:12:27', 84, '0123'),
(105, 'Order#85', 100, NULL, '2023-09-17 14:16:26', 85, '0123'),
(106, 'Order#86', 2, NULL, '2023-09-17 14:17:50', 86, '0123'),
(107, 'Order#87', 150, NULL, '2023-09-17 14:18:03', 87, '0123'),
(108, 'Order#88', 120, NULL, '2023-09-17 14:18:28', 88, '0123'),
(109, 'Order#89', 100, NULL, '2023-09-17 14:19:36', 89, '0123'),
(110, 'Order#90', 150, NULL, '2023-09-17 14:20:57', 90, '0123'),
(111, 'Order#91', 300, NULL, '2023-09-17 14:21:15', 91, '0123'),
(112, 'Order#92', 150, NULL, '2023-09-17 14:21:54', 92, '0123'),
(113, 'Order#93', 120, NULL, '2023-09-17 14:22:48', 93, '0123'),
(114, 'Order#94', 120, NULL, '2023-09-17 14:24:25', 94, '0123'),
(115, 'Order#95', 120, NULL, '2023-09-17 14:26:08', 95, '0123'),
(116, 'Order#96', 120, NULL, '2023-09-17 14:27:06', 96, '0123'),
(117, 'Order#97', 120, NULL, '2023-09-17 14:27:32', 97, '0123'),
(118, 'Order#98', 120, NULL, '2023-09-17 14:29:46', 98, '0123'),
(119, 'Order#99', 120, NULL, '2023-09-17 14:30:10', 99, '0123'),
(120, 'Order#100', 120, NULL, '2023-09-17 14:30:51', 100, '0123'),
(121, 'Order#101', 120, NULL, '2023-09-17 14:32:11', 101, '0123'),
(122, 'Order#102', 120, NULL, '2023-09-17 14:32:28', 102, '0123'),
(123, 'Order#103', 120, NULL, '2023-09-17 14:33:50', 103, '0123'),
(124, 'Order#104', 120, NULL, '2023-09-17 14:35:12', 104, '0123'),
(125, 'Order#105', 150, NULL, '2023-09-17 14:35:32', 105, '0123'),
(126, 'Order#106', 150, NULL, '2023-09-17 14:36:29', 106, '0123'),
(127, 'Order#107', 120, NULL, '2023-09-17 14:46:26', 107, '0123'),
(128, 'Order#108', 120, NULL, '2023-09-17 14:47:06', 108, '0123'),
(129, 'Order#109', 120, NULL, '2023-09-17 14:48:52', 109, '0123'),
(130, 'Order#110', 120, NULL, '2023-09-17 14:49:30', 110, '0123'),
(131, 'Order#111', 150, NULL, '2023-09-17 14:49:45', 111, '0123'),
(132, 'Order#112', 150, NULL, '2023-09-17 14:49:59', 112, '0123'),
(133, 'Order#113', 150, NULL, '2023-09-17 14:50:22', 113, '0123'),
(134, 'Order#114', 150, NULL, '2023-09-17 14:50:32', 114, '0123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) DEFAULT NULL,
  `product_price` double DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_code` text DEFAULT NULL,
  `product_qty` int(11) DEFAULT NULL,
  `serial_number` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_img` text DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `category_id`, `product_code`, `product_qty`, `serial_number`, `updated_at`, `product_img`, `supplier_id`) VALUES
(3, 'Razer Viper V2 Pro', 150, 1, '2216H25403794', 1000, NULL, '2023-09-17 08:02:47', '202308000000430505Razer-Viper-V2-Pro-Hyperspeed-Wireless-Gaming-Mouse-58g-Ultra-Lightweight-Optical-Switches-Gen-3-30K.jpg', 1),
(4, 'Coca', 2, 2, '8847100563637', 4, NULL, '2023-09-17 14:17:50', '202308000000020615coca-33cl.jpg', 2),
(9, 'Test Supplier', 120, 1, '434234', 20, NULL, '2023-09-17 08:02:54', '202308000000061318image (2).png', 10),
(10, 'vital', 100, 2, '8846002481704', 29, NULL, '2023-09-17 14:19:36', NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(50) DEFAULT NULL,
  `supplier_company` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_name`, `supplier_company`) VALUES
(1, 'Razer People', 'Razer'),
(2, 'Coca People', 'Coca cola'),
(3, 'Skincare Dog', 'Cosmetic Doggy'),
(10, 'Cotton People', 'Wool Wool Ltd.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `about` text DEFAULT NULL,
  `avatar` text DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `customer_phone_number` varchar(20) DEFAULT NULL,
  `credit` float NOT NULL DEFAULT 0,
  `credit_left` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `about`, `avatar`, `role`, `customer_phone_number`, `credit`, `credit_left`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', NULL, '$2y$10$.cLHP38QH5IOVWWJwnjVDug9kkvR28yw5RbhEto3cJc6kRe5BG0WC', NULL, '2023-07-30 09:25:32', '2023-08-15 01:55:26', '', '20230800000055150855roadwork.png', 'admin', NULL, 0, 0),
(2, 'Dog admin', 'Doggo', 'doggo@dog.com', NULL, '$2y$10$QF7./69arwmZ9aGQSj.qS.8H7Rz5LxdW3IzgCijftK2iqiUwi8eCu', NULL, '2023-08-14 04:45:35', '2023-08-14 04:45:35', NULL, NULL, 'customer', NULL, 0, 0),
(3, 'Customer', 'customer', 'customer@gmail.com', NULL, '$2y$10$WKISxkuZidz2C5zCPSq3.e26wtuSpt/zkhGtGSl3cgmLVypwYKFn6', NULL, '2023-09-14 10:19:21', '2023-09-17 07:12:27', NULL, NULL, 'customer', '0123', 205, 5),
(4, 'employee', 'employee', 'employee@gmail.com', NULL, '$2y$10$qnpyy36I2Xa7xkP/yb/nseU6MbLuqkdFL46V2VyjIO8wmehPd5Bbe', NULL, '2023-09-14 11:07:08', '2023-09-14 11:07:08', NULL, NULL, NULL, NULL, 0, 0),
(5, 'customer1', 'customer1', 'customer1@gmail.com', NULL, '$2y$10$eP5A5p5gyIMU1wdxoQSe6eCZF9TeCz03L7oX8yj8/Z/lBtKF9mktu', NULL, '2023-09-14 11:14:03', '2023-09-14 11:14:03', NULL, NULL, NULL, NULL, 0, 0),
(6, '123', '123', '123123@123', NULL, '$2y$10$P3/PQ0MN4flrFbY.7edOJOh.eihHDXud8Zbdu689XHImXObt5ZLAS', NULL, '2023-09-14 11:16:53', '2023-09-14 11:16:53', NULL, NULL, NULL, NULL, 0, 0),
(7, '123', '123123123', '123123@123s', NULL, '$2y$10$Afh8GNNboTifGn1v4hU7xem4wk8EKqoQBTQLxuvhZoinbXzQdZPv6', NULL, '2023-09-14 11:18:24', '2023-09-14 11:18:24', NULL, NULL, NULL, NULL, 0, 5),
(8, 'test create dumb', '123123123123', '13231321312312@2d31', NULL, '$2y$10$3wgPIcIhm.reyWdFIHD5ueBPizIqYc6xpB3s/PMVN0JMHu08TDXye', NULL, '2023-09-17 04:26:54', '2023-09-17 04:26:54', NULL, NULL, NULL, NULL, 0, 0),
(9, 'testpn', 'testpn', 'test@example.com22', NULL, '$2y$10$.KRMbWFvvQiZicVVlZHzK.E/QFlPqhlTypFSX5/4BtFjadpoHqVR6', NULL, '2023-09-17 04:36:42', '2023-09-17 04:36:42', NULL, NULL, 'customer', NULL, 0, 0),
(10, 'testphone', 'testphone', 'test21312@fwdad', NULL, '$2y$10$T3HpkzGIZnkKRAh/JwtQmehriwikf3xi0Oe8h4RI/LBI0kDvgfNvu', NULL, '2023-09-17 04:40:15', '2023-09-17 04:40:15', NULL, NULL, 'customer', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewproduct`
-- (See below for the actual view)
--
CREATE TABLE `viewproduct` (
`id` int(11)
,`supplier_id` int(11)
,`product_name` varchar(50)
,`product_price` double
,`category_id` int(11)
,`product_qty` int(11)
,`product_img` text
,`product_code` text
,`catid` int(11)
,`category_name` varchar(50)
,`description` text
);

-- --------------------------------------------------------

--
-- Structure for view `viewproduct`
--
DROP TABLE IF EXISTS `viewproduct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewproduct`  AS SELECT `products`.`id` AS `id`, `products`.`supplier_id` AS `supplier_id`, `products`.`product_name` AS `product_name`, `products`.`product_price` AS `product_price`, `products`.`category_id` AS `category_id`, `products`.`product_qty` AS `product_qty`, `products`.`product_img` AS `product_img`, `products`.`product_code` AS `product_code`, `categories`.`catid` AS `catid`, `categories`.`category_name` AS `category_name`, `categories`.`description` AS `description` FROM (`products` join `categories`) WHERE `products`.`category_id` = `categories`.`catid` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordered_product`
--
ALTER TABLE `ordered_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ordered_product`
--
ALTER TABLE `ordered_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
