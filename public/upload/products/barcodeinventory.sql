-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 09:41 PM
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
(1, 'Mouse', 'This is mouse category', '2023-08-07 09:36:55'),
(2, 'Drink', 'dog drink', '2023-08-07 09:15:13');

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
(1, '23231', 1, 22, 0, 22, 0, 0, NULL),
(2, 'Razer Viper V2 Pro', 1, 150, 0, 150, 0, 0, NULL),
(3, '', 0, 0, 0, 0, 0, 0, NULL),
(4, '23231', 1, 22, 0, 22, 0, 0, NULL),
(5, 'Razer Viper V2 Pro', 1, 150, 0, 150, 0, 0, NULL),
(6, '', 0, 0, 0, 0, 0, 0, NULL),
(7, '23231', 1, 22, 0, 22, 1, 0, NULL),
(8, 'Razer Viper V2 Pro', 1, 150, 0, 150, 1, 0, NULL),
(9, '', 0, 0, 0, 0, 1, 0, NULL),
(10, '23231', 1, 22, 0, 22, 2, 0, NULL),
(11, 'Razer Viper V2 Pro', 1, 150, 0, 150, 2, 0, NULL),
(12, '', 0, 0, 0, 0, 2, 0, NULL),
(13, '23231', 1, 22, 0, 22, 2, 0, NULL),
(14, 'Razer Viper V2 Pro', 1, 150, 0, 150, 2, 0, NULL),
(15, '', 0, 0, 0, 0, 2, 0, NULL),
(16, '23231', 1, 22, 0, 22, 3, 0, NULL),
(17, 'Razer Viper V2 Pro', 1, 150, 0, 150, 3, 0, NULL),
(18, '', 0, 0, 0, 0, 3, 0, NULL),
(19, '23232svfvfs', 1, 2222, 0, 2222, 4, 0, NULL),
(20, 'Razer Viper V2 Pro', 1, 150, 0, 150, 4, 0, NULL),
(21, '', 0, 0, 0, 0, 4, 0, NULL),
(22, '2', 2, 2, 2, 2, 5, 0, NULL),
(23, '2', 2, 2, 2, 2, 6, 0, NULL),
(24, 'ad', 0, 2, 2, 2, 7, 0, NULL),
(25, '2', 2, 2, 12, 12, 8, 0, NULL),
(26, '2', 2123, 32, 23, 3, 9, 0, NULL),
(27, '2', 2123, 32, 23, 3, 10, 0, NULL),
(28, '2', 2123, 32, 23, 3, 11, 0, NULL),
(29, '2a', 2, 22, 2, 2, 12, 0, NULL),
(30, 'da', 0, 1, 1, 1, 13, 0, NULL),
(31, '32', 323, 23, 232, 32, 14, 0, NULL),
(32, '3', 3, 3, 3, 3, 15, 0, NULL),
(33, '323', 323, 3232, 323, 323, 16, 0, NULL),
(34, '2', 2, 2, 22, 22, 17, 0, NULL),
(35, '2', 2, 2, 3, 3, 19, 0, NULL),
(36, '23232svfvfs', 1, 2222, 0, 2222, 20, 0, NULL),
(37, 'Razer Viper V2 Pro', 1, 150, 0, 150, 20, 0, NULL),
(38, 'Coca', 1, 18847100000000, 0, 18847100000000, 20, 0, NULL),
(39, '', 0, 0, 0, 0, 20, 0, NULL),
(40, '23232svfvfs', 3, 2222, 0, 6666, 21, 0, NULL),
(41, '', 0, 0, 0, 0, 21, 0, NULL),
(42, 'a', 2, 2, 2, 2, 22, 0, NULL),
(43, '23232svfvfs', 1, 2222, 0, 2222, 23, 1, NULL),
(44, '23232svfvfs', 8, 2222, 0, 17776, 24, 1, NULL),
(45, 'Coca', 1, 1, 0, 1, 24, 1, NULL),
(46, 'Razer Viper V2 Pro', 1, 150, 0, 150, 25, 3, NULL),
(47, 'Coca', 3, 1, 0, 3, 25, 3, NULL),
(48, '23232svfvfs', 2, 2222, 0, 4444, 27, 1, NULL),
(49, '23231', 1, 22, 0, 22, 27, 1, NULL),
(50, 'Coca', 2, 1, 0, 2, 27, 1, NULL),
(51, 'Coca', 1, 1, 0, 1, 28, 4, NULL),
(52, '23232svfvfs', 1, 2222, 0, 2222, 29, 1, NULL),
(53, '123', 1, 2, 2, 2, 30, 0, NULL),
(54, '23232svfvfs', 1, 2222, 0, 2222, 31, 1, NULL),
(55, '23232svfvfs', 1, 2222, 0, 2222, 32, 1, NULL),
(56, '23232svfvfs', 2, 2222, 0, 4444, 33, 1, NULL),
(57, '23231', 1, 22, 0, 22, 33, 1, NULL),
(58, '23232svfvfs', 1, 2222, 0, 2222, 34, 1, NULL),
(59, '23231', 1, 22, 0, 22, 35, 2, NULL),
(60, '23231', 1, 22, 0, 22, 36, 2, NULL),
(61, '23231', 1, 22, 0, 22, 37, 2, NULL),
(62, '23232svfvfs', 1, 2222, 0, 2222, 38, 1, NULL),
(63, '23232svfvfs', 1, 2222, 0, 2222, 39, 1, NULL),
(64, '23232svfvfs', 1, 2222, 0, 2222, 40, 1, NULL),
(65, '23232svfvfs', 1, 2222, 0, 2222, 41, 1, NULL),
(66, '23232svfvfs', 1, 2222, 0, 2222, 42, 1, NULL),
(67, '23232svfvfs', 2, 2222, 0, 4444, 43, 1, NULL),
(68, '23232svfvfs', 33, 2222, 0, 73326, 44, 1, NULL),
(69, 'Razer Viper V2 Pro', 6, 150, 0, 900, 44, 1, NULL),
(70, 'Coca', 13, 1, 0, 13, 44, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_name`) VALUES
(1, 'DDog'),
(2, '3'),
(3, 'New'),
(4, 'doggy'),
(5, '321'),
(6, '23'),
(7, '23'),
(8, '2'),
(9, '223'),
(10, '223'),
(11, '223'),
(12, 'da'),
(13, 'da'),
(14, '23'),
(15, '3'),
(16, 'a'),
(17, 'test'),
(18, 'test'),
(19, 'ada'),
(20, 'Dog'),
(21, 'Doggo'),
(22, 'Doggo'),
(23, 'test'),
(24, 'okay'),
(25, 'Scan Test'),
(26, 'Scan Test'),
(27, 'Jack'),
(28, 'Customer name'),
(29, 'Customer name'),
(30, 'Customer name'),
(31, 'Customer name'),
(32, 'Customer name'),
(33, 'Customer name'),
(34, 'Customer name'),
(35, 'Customer name'),
(36, 'Customer name'),
(37, 'Customer name'),
(38, 'Customer name'),
(39, 'Customer name'),
(40, 'Customer name'),
(41, 'Customer name'),
(42, 'Customer name'),
(43, 'Customer name'),
(44, 'Customer name');

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
  `po_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pos`
--

INSERT INTO `pos` (`po_id`, `po_name`) VALUES
(1, 'Order'),
(2, 'Order'),
(3, 'Order'),
(4, 'Order'),
(5, 'Order'),
(6, 'Order'),
(7, 'Order'),
(8, 'Order'),
(9, 'Order');

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
  `product_img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `category_id`, `product_code`, `product_qty`, `serial_number`, `updated_at`, `product_img`) VALUES
(3, 'Razer Viper V2 Pro', 150, 1, 'PM2216H25403794', 4, NULL, '2023-08-07 01:33:38', '202308000000430505Razer-Viper-V2-Pro-Hyperspeed-Wireless-Gaming-Mouse-58g-Ultra-Lightweight-Optical-Switches-Gen-3-30K.jpg'),
(4, 'Coca', 2, 2, '8847100563637', 5, NULL, '2023-08-07 02:58:19', '202308000000020615coca-33cl.jpg'),
(5, 'Cotton Pad', 20, 2, '6971338350973', 20, NULL, '2023-08-07 02:57:29', '202308000000510709safg.PNG');

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
  `about` text NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `about`, `avatar`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', NULL, '$2y$10$.cLHP38QH5IOVWWJwnjVDug9kkvR28yw5RbhEto3cJc6kRe5BG0WC', NULL, '2023-07-30 09:25:32', '2023-08-02 03:08:27', '', '20230800000008021008financial.png');

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewproduct`
-- (See below for the actual view)
--
CREATE TABLE `viewproduct` (
`id` int(11)
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewproduct`  AS SELECT `products`.`id` AS `id`, `products`.`product_name` AS `product_name`, `products`.`product_price` AS `product_price`, `products`.`category_id` AS `category_id`, `products`.`product_qty` AS `product_qty`, `products`.`product_img` AS `product_img`, `products`.`product_code` AS `product_code`, `categories`.`catid` AS `catid`, `categories`.`category_name` AS `category_name`, `categories`.`description` AS `description` FROM (`products` join `categories`) WHERE `products`.`category_id` = `categories`.`catid` ;

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
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
