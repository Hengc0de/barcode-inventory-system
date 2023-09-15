-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 07:05 AM
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
  `grand_total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordered_product`
--

INSERT INTO `ordered_product` (`id`, `product_name`, `product_qty`, `product_price`, `product_discount`, `product_total`, `order_id`, `product_id`, `grand_total`) VALUES
(73, 'Razer Viper V2 Pro', 2, 150, 0, 300, 46, 3, NULL),
(74, 'Cotton Pad', 1, 20, 0, 20, 46, 3, NULL),
(75, 'Razer Viper V2 Pro', 1, 150, 0, 150, 46, 3, NULL),
(76, 'Razer Viper V2 Pro', 3, 150, 0, 450, 46, 3, NULL),
(77, 'Coca', 1, 2, 0, 2, 46, 3, NULL),
(78, 'Coca', 2, 2, 0, 4, 46, 4, NULL),
(79, 'Coca', 1, 2, 0, 2, 46, 4, NULL),
(80, 'Razer Viper V2 Pro', 2, 150, 0, 300, 46, 3, NULL),
(81, 'Razer Viper V2 Pro', 1, 150, 0, 150, 46, 3, NULL),
(82, 'Razer Viper V2 Pro', 1, 150, 0, 150, 46, 3, NULL),
(87, 'Razer Viper V2 Pro', 1, 150, 0, 150, 10, 3, NULL),
(88, 'Test Supplier', 1, 120, 0, 120, 11, 9, NULL),
(89, 'Razer Viper V2 Pro', 1, 150, 0, 150, 12, 3, NULL),
(90, 'Test Supplier', 1, 120, 0, 120, 12, 3, NULL),
(91, 'Test Supplier', 1, 120, 0, 120, 13, 9, NULL),
(92, 'Test Supplier', 1, 120, 0, 120, 16, 9, NULL),
(93, 'Test Supplier', 1, 120, 0, 120, 20, 9, NULL),
(94, 'Test Supplier', 1, 120, 0, 120, 21, 9, NULL),
(95, 'Razer Viper V2 Pro', 1, 150, 0, 150, 22, 3, NULL),
(96, 'Coca', 1, 2, 0, 2, 23, 4, NULL),
(97, 'Coca', 1, 2, 0, 2, 24, 4, NULL),
(98, 'Test Supplier', 1, 120, 0, 120, 25, 9, NULL),
(99, 'Razer Viper V2 Pro', 1, 150, 0, 150, 26, 3, NULL),
(100, 'Razer Viper V2 Pro', 1, 150, 0, 150, 27, 3, NULL),
(101, 'Razer Viper V2 Pro', 1, 150, 0, 150, 28, 3, NULL),
(102, 'Razer Viper V2 Pro', 1, 150, 0, 150, 29, 3, NULL),
(103, 'Test Supplier', 1, 120, 0, 120, 29, 3, NULL),
(104, 'Razer Viper V2 Pro', 1, 150, 0, 150, 30, 3, NULL),
(105, 'Razer Viper V2 Pro', 1, 150, 0, 150, 31, 3, NULL),
(106, 'Razer Viper V2 Pro', 1, 150, 0, 150, 32, 3, NULL),
(107, 'Test Supplier', 1, 120, 0, 120, 33, 9, NULL),
(109, 'Razer Viper V2 Pro', 5, 150, 0, 750, 34, 3, NULL),
(110, 'Test Supplier', 1, 120, 0, 120, 34, 3, NULL),
(113, 'Razer Viper V2 Pro', 4, 150, 0, 600, 35, 3, NULL),
(114, 'Test Supplier', 1, 120, 0, 120, 35, 3, NULL),
(115, 'Razer Viper V2 Pro', 12, 150, 0, 1800, 37, 3, NULL),
(116, 'Test Supplier', 14, 120, 0, 1680, 37, 3, NULL),
(117, 'Razer Viper V2 Pro', 10, 150, 0, 1500, 40, 3, NULL),
(118, 'Test Supplier', 11, 120, 0, 1320, 40, 9, NULL),
(119, 'Coca', 6, 2, 0, 12, 40, 4, NULL),
(120, 'vital', 2, 100, 0, 200, 40, 10, NULL),
(121, 'Razer Viper V2 Pro', 1, 150, 0, 150, 41, 3, NULL),
(122, 'Test Supplier', 2, 120, 0, 240, 42, 9, NULL),
(123, 'Coca', 1, 2, 0, 2, 42, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`, `created_at`) VALUES
(1, 'DDog', '2023-08-13 14:23:06'),
(2, '3', '2023-08-13 14:23:06'),
(3, 'New', '2023-08-13 14:23:06'),
(4, 'doggy', '2023-08-13 14:23:06'),
(5, '321', '2023-08-13 14:23:06'),
(6, '23', '2023-08-13 14:23:06'),
(7, '23', '2023-08-13 14:23:06'),
(8, '2', '2023-08-13 14:23:06'),
(9, '223', '2023-08-13 14:23:06'),
(10, '223', '2023-08-13 14:23:06'),
(11, '223', '2023-08-13 14:23:06'),
(12, 'da', '2023-08-13 14:23:06'),
(13, 'da', '2023-08-13 14:23:06'),
(14, '23', '2023-08-13 14:23:06'),
(15, '3', '2023-08-13 14:23:06'),
(16, 'a', '2023-08-13 14:23:06'),
(17, 'test', '2023-08-13 14:23:06'),
(18, 'test', '2023-08-13 14:23:06'),
(19, 'ada', '2023-08-13 14:23:06'),
(20, 'Dog', '2023-08-13 14:23:06'),
(21, 'Doggo', '2023-08-13 14:23:06'),
(22, 'Doggo', '2023-08-13 14:23:06'),
(23, 'test', '2023-08-13 14:23:06'),
(24, 'okay', '2023-08-13 14:23:06'),
(25, 'Scan Test', '2023-08-13 14:23:06'),
(26, 'Scan Test', '2023-08-13 14:23:06'),
(27, 'Jack', '2023-08-13 14:23:06'),
(28, 'Customer name', '2023-08-13 14:23:06'),
(29, 'Customer name', '2023-08-13 14:23:06'),
(30, 'Customer name', '2023-08-13 14:23:06'),
(31, 'Customer name', '2023-08-13 14:23:06'),
(32, 'Customer name', '2023-08-13 14:23:06'),
(33, 'Customer name', '2023-08-13 14:23:06'),
(34, 'Customer name', '2023-08-13 14:23:06'),
(35, 'Customer name', '2023-08-13 14:23:06'),
(36, 'Customer name', '2023-08-13 14:23:06'),
(37, 'Customer name', '2023-08-13 14:23:06'),
(38, 'Customer name', '2023-08-13 14:23:06'),
(39, 'Customer name', '2023-08-13 14:23:06'),
(40, 'Customer name', '2023-08-13 14:23:06'),
(41, 'Customer name', '2023-08-13 14:23:06'),
(42, 'Customer name', '2023-08-13 14:23:06'),
(43, 'Customer name', '2023-08-13 14:23:06'),
(44, 'Customer name', '2023-08-13 14:23:06'),
(45, 'Customer name', '2023-08-13 14:23:06');

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
  `customer_name` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pos`
--

INSERT INTO `pos` (`po_id`, `po_name`, `grand_total`, `customer_name`, `created_at`, `order_id`) VALUES
(1, 'Default', 1, '1', '2023-08-13 16:01:07', 1),
(21, 'Order#3', 150, 'Customer name', '2023-08-14 09:08:22', 3),
(22, 'Order#4', 150, 'Customer name', '2023-08-14 09:08:24', 4),
(23, 'Order#5', 150, 'Customer name', '2023-08-14 09:08:29', 5),
(24, 'Order#6', 150, 'Customer name', '2023-08-14 09:09:51', 6),
(25, 'Order#7', 150, 'Customer name', '2023-08-14 09:09:56', 7),
(26, 'Order#8', 150, 'Customer name', '2023-08-14 09:10:27', 8),
(27, 'Order#9', 150, 'Customer name', '2023-08-14 09:10:29', 9),
(28, 'Order#10', 150, 'Customer name', '2023-08-14 09:10:34', 10),
(29, 'Order#11', 120, 'Customer name', '2023-08-14 09:11:40', 11),
(30, 'Order#12', 270, 'Customer name', '2023-08-14 09:16:31', 12),
(31, 'Order#13', 120, 'Customer name', '2023-08-14 09:17:12', 13),
(32, 'Order#14', 120, 'Customer name', '2023-08-14 09:19:02', 14),
(33, 'Order#15', 120, 'Customer name', '2023-08-14 09:19:02', 15),
(34, 'Order#16', 120, 'Customer name', '2023-08-14 09:19:20', 16),
(35, 'Order#17', 120, 'Customer name', '2023-08-14 09:22:17', 17),
(36, 'Order#18', 120, 'Customer name', '2023-08-14 09:23:05', 18),
(37, 'Order#19', 120, 'Customer name', '2023-08-14 09:23:08', 19),
(38, 'Order#20', 120, 'Customer name', '2023-08-14 09:24:55', 20),
(39, 'Order#21', 120, 'Customer name', '2023-08-14 09:25:48', 21),
(40, 'Order#22', 270, 'Customer name', '2023-08-14 09:38:31', 22),
(41, 'Order#23', 2, 'Customer name', '2023-08-14 09:42:21', 23),
(42, 'Order#24', 2, 'Customer name', '2023-08-14 09:42:35', 24),
(43, 'Order#25', 120, 'Customer name', '2023-08-14 09:48:08', 25),
(44, 'Order#26', 270, 'Customer name', '2023-08-14 09:55:16', 26),
(45, 'Order#27', 270, 'Customer name', '2023-08-14 09:55:54', 27),
(46, 'Order#28', 270, 'Customer name', '2023-08-14 09:55:55', 28),
(47, 'Order#29', 270, 'Customer name', '2023-08-14 09:56:22', 29),
(48, 'Order#30', 150, 'Customer name', '2023-08-14 11:52:57', 30),
(49, 'Order#31', 150, 'Customer name', '2023-08-14 11:53:44', 31),
(50, 'Order#32', 150, 'Customer name', '2023-08-14 11:54:57', 32),
(51, 'Order#33', 120, 'Doggo', '2023-08-14 11:56:54', 33),
(53, 'Order#34', 870, 'kok', '2023-08-14 12:24:55', 34),
(55, 'Order#35', 720, 'Customer name', '2023-08-15 08:51:41', 35),
(56, 'Order#36', 0, 'Customer name', '2023-09-11 07:23:26', 36),
(57, 'Order#37', 3480, 'Customer name', '2023-09-11 07:51:33', 37),
(58, 'Order#38', 3032, 'Customer name', '2023-09-11 08:03:01', 38),
(59, 'Order#39', 3032, 'Customer name', '2023-09-11 08:03:06', 39),
(60, 'Order#40', 3032, 'Customer name', '2023-09-11 08:05:03', 40),
(61, 'Order#41', 150, 'Customer name', '2023-09-11 08:30:55', 41),
(62, 'Order#42', 242, 'Customer name', '2023-09-11 08:31:10', 42);

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
(3, 'Razer Viper V2 Pro', 150, 1, '2216H25403794', 9, NULL, '2023-09-11 08:30:55', '202308000000430505Razer-Viper-V2-Pro-Hyperspeed-Wireless-Gaming-Mouse-58g-Ultra-Lightweight-Optical-Switches-Gen-3-30K.jpg', 1),
(4, 'Coca', 2, 2, '8847100563637', 5, NULL, '2023-09-11 08:31:10', '202308000000020615coca-33cl.jpg', 2),
(9, 'Test Supplier', 120, 1, '434234', 9, NULL, '2023-09-11 08:31:10', '202308000000061318image (2).png', 10),
(10, 'vital', 100, 2, '8846002481704', 2, NULL, '2023-09-02 03:19:34', NULL, 10);

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
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `about`, `avatar`, `role`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', NULL, '$2y$10$.cLHP38QH5IOVWWJwnjVDug9kkvR28yw5RbhEto3cJc6kRe5BG0WC', NULL, '2023-07-30 09:25:32', '2023-08-15 01:55:26', '', '20230800000055150855roadwork.png', 'admin'),
(2, 'Dog admin', 'Doggo', 'doggo@dog.com', NULL, '$2y$10$QF7./69arwmZ9aGQSj.qS.8H7Rz5LxdW3IzgCijftK2iqiUwi8eCu', NULL, '2023-08-14 04:45:35', '2023-08-14 04:45:35', NULL, NULL, 'customer'),
(3, 'Customer', 'customer', 'customer@gmail.com', NULL, '$2y$10$WKISxkuZidz2C5zCPSq3.e26wtuSpt/zkhGtGSl3cgmLVypwYKFn6', NULL, '2023-09-14 10:19:21', '2023-09-14 10:19:21', NULL, NULL, 'customer'),
(4, 'employee', 'employee', 'employee@gmail.com', NULL, '$2y$10$qnpyy36I2Xa7xkP/yb/nseU6MbLuqkdFL46V2VyjIO8wmehPd5Bbe', NULL, '2023-09-14 11:07:08', '2023-09-14 11:07:08', NULL, NULL, NULL),
(5, 'customer1', 'customer1', 'customer1@gmail.com', NULL, '$2y$10$eP5A5p5gyIMU1wdxoQSe6eCZF9TeCz03L7oX8yj8/Z/lBtKF9mktu', NULL, '2023-09-14 11:14:03', '2023-09-14 11:14:03', NULL, NULL, NULL),
(6, '123', '123', '123123@123', NULL, '$2y$10$P3/PQ0MN4flrFbY.7edOJOh.eihHDXud8Zbdu689XHImXObt5ZLAS', NULL, '2023-09-14 11:16:53', '2023-09-14 11:16:53', NULL, NULL, NULL),
(7, '123', '123123123', '123123@123s', NULL, '$2y$10$Afh8GNNboTifGn1v4hU7xem4wk8EKqoQBTQLxuvhZoinbXzQdZPv6', NULL, '2023-09-14 11:18:24', '2023-09-14 11:18:24', NULL, NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

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
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
