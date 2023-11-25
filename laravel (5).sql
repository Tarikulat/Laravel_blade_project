-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 03:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand_models`
--

CREATE TABLE `brand_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brand_models`
--

INSERT INTO `brand_models` (`id`, `b_name`, `created_at`, `updated_at`) VALUES
(1, 'boshundhora', '2023-11-06 23:25:04', '2023-11-06 23:25:04'),
(2, 'arong', '2023-11-06 23:57:20', '2023-11-06 23:57:20'),
(3, 'bishowrong', '2023-11-07 01:04:55', '2023-11-07 01:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `categorie_models`
--

CREATE TABLE `categorie_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorie_models`
--

INSERT INTO `categorie_models` (`id`, `c_name`, `c_status`, `created_at`, `updated_at`) VALUES
(1, 'rice', 'hhhhh', '2023-11-06 23:24:44', '2023-11-06 23:24:44'),
(2, 'fish', 'wqw', '2023-11-06 23:57:05', '2023-11-06 23:57:05'),
(3, 'dress', 'ere', '2023-11-06 23:58:17', '2023-11-06 23:58:17'),
(4, 'rice', 'active', '2023-11-19 19:16:22', '2023-11-19 19:16:22'),
(5, 'food', 'active', '2023-11-19 19:16:52', '2023-11-19 19:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `customer_models`
--

CREATE TABLE `customer_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_models`
--

INSERT INTO `customer_models` (`id`, `customer_name`, `customer_address`, `customer_phone`, `customer_email`, `customer_status`, `created_at`, `updated_at`) VALUES
(1, 'korim', 'manikdi', '0374858', 'koei@ghdfkd', 'dcjkgklf', '2023-11-05 18:00:00', '2023-11-05 18:00:00'),
(2, 'tomal', 'bonani', '0123678556', 'rani@gmail.com', 'fggfhgj', '2023-11-06 00:46:20', '2023-11-06 00:46:20'),
(3, 'koli', 'bonani', '0123678556', 'rani@gmail.com', 'active', '2023-11-16 00:29:42', '2023-11-16 00:29:42'),
(4, 'Mistake', 'mirpur', '0123678556', 'Mistake@gmail.com', 'active', '2023-11-17 22:44:33', '2023-11-17 22:44:33'),
(5, 'jahid', 'mirpur', '0123678556', 'jahid@gmail.com', '1', '2023-11-17 22:53:17', '2023-11-17 22:53:17'),
(6, 'rakib', 'borishal', '1123456', 'rakib@gmail.com', '1', '2023-11-18 07:22:55', '2023-11-18 07:22:55'),
(7, 'miraj', 'manikdi', '1123456', 'alua@gmail.com', 'sdjhjskfl', '2023-11-18 07:26:21', '2023-11-18 07:26:21'),
(8, 'miraj', 'manikdi', '1123456', 'alua@gmail.com', 'sdjhjskfl', '2023-11-18 07:27:34', '2023-11-18 07:27:34'),
(9, 'alu', 'manikdi', '1123456', 'rahim@gmail.com', '1', '2023-11-18 07:30:04', '2023-11-18 07:30:04'),
(10, 'korim', 'manikdi', '1123456', 'rahim@gmail.com', '1', '2023-11-18 07:33:05', '2023-11-18 07:33:05'),
(11, 'koli', 'bonani', '0123678556', 'rani@gmail.com', '1', '2023-11-19 00:00:31', '2023-11-19 00:00:31'),
(12, 'tanvir', 'nowga', '12345767', 'tanvir@gmail.com', '1', '2023-11-19 19:23:05', '2023-11-19 19:23:05');

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
(5, '2023_10_27_200940_create_products_table', 2),
(6, '2023_10_28_160939_create_product_models_table', 3),
(7, '2023_10_28_161524_create_products_table', 4),
(8, '2023_10_28_174251_create_categories_table', 5),
(9, '2023_10_28_191123_create_categorie_table', 6),
(12, '2023_10_30_182516_create_brand_models_table', 9),
(13, '2023_10_30_182908_create_brand_models_table', 10),
(38, '2014_10_12_000000_create_users_table', 11),
(39, '2014_10_12_100000_create_password_reset_tokens_table', 11),
(40, '2019_08_19_000000_create_failed_jobs_table', 11),
(41, '2019_12_14_000001_create_personal_access_tokens_table', 11),
(42, '2023_10_28_194019_create_categorie_models_table', 11),
(43, '2023_10_29_172013_create_unit_models_table', 11),
(44, '2023_10_30_193158_create_brand_models_table', 11),
(45, '2023_10_31_155011_create_customer_models_table', 11),
(46, '2023_10_31_160537_create_suppliers_models_table', 11),
(47, '2023_10_31_174109_create_products_models_table', 11),
(53, '2023_11_11_041122_create_sales_order_product_models_table', 13),
(55, '2023_11_11_054834_create_sales_orders_models_table', 14);

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
-- Table structure for table `products_models`
--

CREATE TABLE `products_models` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `unit_id` varchar(255) DEFAULT NULL,
  `selling_price` varchar(255) NOT NULL,
  `buying_price` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `product_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_models`
--

INSERT INTO `products_models` (`product_id`, `category_id`, `brand_id`, `product_name`, `description`, `product_image`, `unit_id`, `selling_price`, `buying_price`, `quantity`, `sku`, `product_status`, `created_at`, `updated_at`) VALUES
(25, '3', '2', 'Saree', 'good', '1700340677.jpg', 'pice', '2000', '1500', 1, '123', 'active', '2023-11-18 14:51:17', '2023-11-18 14:51:17'),
(26, '2', '1', 'Microwave', 'good', '1700340861.jpg', 'pice', '2000', '1500', 1, '123', '1', '2023-11-18 14:54:21', '2023-11-18 14:54:21'),
(27, '1', '1', 'Oil', 'good', '1700341217.jpg', 'litter', '2000', '1500', 2, '123', 'product_status', '2023-11-18 15:00:17', '2023-11-18 15:00:17'),
(28, '2', '1', 'Saree', 'nice', '1700341301.jpg', 'pice', '2000', '1500', 5, '1', 'Active', '2023-11-18 15:01:41', '2023-11-18 15:01:41'),
(29, '1', '1', 'rice', 'fdfdfgd', '1700363171.png', 'pice', '1008', '1207', 3, '127', 'Active', '2023-11-18 21:06:11', '2023-11-18 21:06:11'),
(30, '1', '1', 'bashmoty', 'good', '1700443113.png', 'kg', '80', '75', 5, '12', 'Active', '2023-11-19 19:18:33', '2023-11-19 19:18:33');

-- --------------------------------------------------------

--
-- Table structure for table `sales_orders_models`
--

CREATE TABLE `sales_orders_models` (
  `salesorder_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_product`
--

CREATE TABLE `sales_order_product` (
  `salesorderproduct_id` bigint(20) UNSIGNED NOT NULL,
  `salesorder_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers_models`
--

CREATE TABLE `suppliers_models` (
  `suppliers_id` bigint(20) UNSIGNED NOT NULL,
  `suppliers_name` varchar(255) NOT NULL,
  `suppliers_address` varchar(255) NOT NULL,
  `suppliers_phone` varchar(255) NOT NULL,
  `suppliers_email` varchar(255) NOT NULL,
  `suppliers_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers_models`
--

INSERT INTO `suppliers_models` (`suppliers_id`, `suppliers_name`, `suppliers_address`, `suppliers_phone`, `suppliers_email`, `suppliers_status`, `created_at`, `updated_at`) VALUES
(1, 'Alamin', 'Dhaka', '01234545', 'Alamin@gmail.com', 'dgghccbbj', '2023-11-11 22:00:32', '2023-11-11 22:00:32'),
(2, 'Alamin', 'Dhaka', '01234545', 'Alamin@gmail.com', 'dgghccbbj', '2023-11-11 22:00:32', '2023-11-11 22:00:32'),
(3, 'tanvir', 'mirpur', '014526895', 'tanvir@gmail.com', 'active', '2023-11-19 16:29:36', '2023-11-19 16:29:36');

-- --------------------------------------------------------

--
-- Table structure for table `unit_models`
--

CREATE TABLE `unit_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_models`
--

INSERT INTO `unit_models` (`id`, `u_name`, `u_status`, `created_at`, `updated_at`) VALUES
(1, 'pice', 'khhhh', '2023-11-06 23:25:14', '2023-11-06 23:25:14'),
(2, 'litter', '3', '2023-11-06 23:57:34', '2023-11-06 23:57:34'),
(3, 'gm', 'e', '2023-11-06 23:57:46', '2023-11-06 23:57:46'),
(4, 'kg', 'active', '2023-11-19 19:17:26', '2023-11-19 19:17:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Khaleda', 'khaleda1995.2021@gmail.com', NULL, '$2y$10$a2uFf2z7dbQBPmryT7MnCuoUY3jpyWqlpPhn185CE4aPfg7hpFDFy', NULL, '2023-11-06 00:53:35', '2023-11-06 00:53:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand_models`
--
ALTER TABLE `brand_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie_models`
--
ALTER TABLE `categorie_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_models`
--
ALTER TABLE `customer_models`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products_models`
--
ALTER TABLE `products_models`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `sales_orders_models`
--
ALTER TABLE `sales_orders_models`
  ADD PRIMARY KEY (`salesorder_id`);

--
-- Indexes for table `sales_order_product`
--
ALTER TABLE `sales_order_product`
  ADD PRIMARY KEY (`salesorderproduct_id`);

--
-- Indexes for table `suppliers_models`
--
ALTER TABLE `suppliers_models`
  ADD PRIMARY KEY (`suppliers_id`);

--
-- Indexes for table `unit_models`
--
ALTER TABLE `unit_models`
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
-- AUTO_INCREMENT for table `brand_models`
--
ALTER TABLE `brand_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categorie_models`
--
ALTER TABLE `categorie_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_models`
--
ALTER TABLE `customer_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_models`
--
ALTER TABLE `products_models`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sales_orders_models`
--
ALTER TABLE `sales_orders_models`
  MODIFY `salesorder_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_order_product`
--
ALTER TABLE `sales_order_product`
  MODIFY `salesorderproduct_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers_models`
--
ALTER TABLE `suppliers_models`
  MODIFY `suppliers_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unit_models`
--
ALTER TABLE `unit_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
