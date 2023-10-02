-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 05:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Easy Fashion', 'This is easy fashion brand description', 1, '2023-09-19 16:01:24', '2023-09-19 16:04:41'),
(9, 'Freeland', 'This is freeland description', 1, '2023-09-19 16:01:44', '2023-09-19 16:01:44'),
(10, 'Dorji Bari', 'This is dorji bari description', 1, '2023-09-19 16:02:12', '2023-09-19 16:02:12'),
(11, 'Yellow', 'This is yellow brand description', 1, '2023-09-19 16:02:49', '2023-09-19 16:02:49'),
(12, 'Black', 'This is black brand description', 1, '2023-09-19 16:03:07', '2023-09-19 16:03:07'),
(13, 'Apex', 'This is apex brand description', 1, '2023-09-19 16:03:30', '2023-09-19 16:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(19, 'Shirt', 'This is shirt category description', 1, '2023-09-19 16:05:21', '2023-09-19 16:05:21'),
(20, 'T-shirt', 'This is t-shirt category description', 1, '2023-09-19 16:05:42', '2023-09-19 16:05:42'),
(21, 'Pubjabi', 'This is pubjabi category description', 1, '2023-09-19 16:06:27', '2023-09-19 16:06:27'),
(22, 'Sunglass', 'This is sunglass category description', 1, '2023-09-19 16:06:54', '2023-09-19 16:06:54'),
(23, 'Bag', 'This is bag category description', 1, '2023-09-19 16:07:19', '2023-09-19 16:07:19'),
(24, 'Jacket', 'This is Jacket category description', 0, '2023-09-19 16:07:53', '2023-09-19 16:07:53'),
(25, 'Shoes', 'This is shoes category description', 1, '2023-09-19 16:35:56', '2023-09-19 16:35:56'),
(26, 'Belt', 'This is belt category description', 1, '2023-09-19 16:36:14', '2023-09-19 16:36:14'),
(27, 'Cap', 'This is cap category description', 1, '2023-09-19 16:36:35', '2023-09-19 16:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `street_address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `phone`, `street_address`, `city`, `country`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Abu', 'Motaleb', 'abumotaleb@gmail.com', '01717123068', 'Kayanizpara', 'Saidpur', 'Bangladesh', '$2y$10$taYUgm95ZxU7KDAvXNdhaOHRt2TxJTo15.ys18BLIqmaQNxW5iUKu', '2023-09-21 18:38:06', '2023-09-21 18:38:06'),
(2, 'Arfa', 'Alam', 'arfaa@gmail.com', '01998198149', 'Chhatak', 'Sunamganj', 'Bangladesh', '$2y$10$yB6d6Tz/iYBSpSafBUq1ruFmHQXrBf1L12iACocXEyOT6DFMPLXLq', '2023-09-21 18:39:40', '2023-09-21 18:39:40'),
(3, 'Wasif', 'Akram', 'wasif@gmail.com', '01411411445', 'Munshipara', 'Saidpur', 'Bangladesh', '$2y$10$tcnWpJTK9F99l2sUvvG0LeF1x05nMieT.wWPyeGSV3PFTyzc78Wxy', '2023-09-25 07:18:18', '2023-09-25 07:18:18');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_07_212129_create_categories_table', 2),
(6, '2023_09_18_115702_create_brands_table', 3),
(7, '2023_09_18_153251_create_products_table', 4),
(8, '2023_09_21_210449_create_customers_table', 5),
(9, '2023_09_22_123930_create_orders_table', 6),
(10, '2023_09_22_124011_create_order_details_table', 6),
(11, '2023_09_22_124030_create_shippings_table', 6),
(12, '2023_09_22_124045_create_payments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand_id`, `category_id`, `price`, `quantity`, `short_description`, `long_description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Cotton Shirt', 8, 19, 700.00, 100, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'admin/product-images/1695161580_FB_IMG_16169543440146073.jpg', 1, '2023-09-19 16:13:01', '2023-09-19 16:13:01'),
(3, 'Cotton Semi Blue Shirt', 8, 19, 799.00, 80, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'admin/product-images/1695161888_FB_IMG_16169543516586414.jpg', 1, '2023-09-19 16:18:08', '2023-09-19 16:18:08'),
(4, 'Sunglass - 542', 12, 22, 420.00, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'admin/product-images/1695162102_FB_IMG_16171762637134601.jpg', 1, '2023-09-19 16:21:42', '2023-09-19 16:21:42'),
(5, 'Levis - 52', 11, 20, 499.00, 50, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'admin/product-images/1695507653_FB_IMG_16171764119800019.jpg', 1, '2023-09-23 16:20:54', '2023-09-23 16:20:54'),
(6, 'Levis - 58', 11, 20, 499.00, 50, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'admin/product-images/1695507697_FB_IMG_16171764173660854.jpg', 1, '2023-09-23 16:21:37', '2023-09-23 16:21:37'),
(7, 'Pink School Bag', 13, 23, 420.00, 100, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'admin/product-images/1695507748_FB_IMG_16171767548415482.jpg', 1, '2023-09-23 16:22:28', '2023-09-23 16:22:28'),
(8, 'Red School Bag', 13, 23, 420.00, 100, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'admin/product-images/1695507810_FB_IMG_16171767670578911.jpg', 1, '2023-09-23 16:23:30', '2023-09-23 16:23:30'),
(9, 'Winter Jeans Shirt', 8, 19, 1400.00, 200, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet', 'admin/product-images/1695507902_FB_IMG_16169543081283845.jpg', 1, '2023-09-23 16:25:02', '2023-09-23 16:25:02'),
(10, 'Samurai T-shirt - 524', 12, 20, 350.00, 40, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'admin/product-images/1695507958_FB_IMG_16171764928777358.jpg', 1, '2023-09-23 16:25:58', '2023-09-23 16:25:58'),
(11, 'Cotton Green Punjabi', 10, 21, 1750.00, 120, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'admin/product-images/1695508004_FB_IMG_16169551176856711.jpg', 1, '2023-09-23 16:26:44', '2023-09-23 16:26:44'),
(12, 'Cotton Red Pubjabi - 417', 10, 21, 1850.00, 100, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'admin/product-images/1695508069_FB_IMG_16171759742922234.jpg', 1, '2023-09-23 16:27:49', '2023-09-23 16:27:49'),
(13, 'Black Cotton Shirt - 442', 8, 19, 1500.00, 200, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ab vel quam molestias animi porro soluta eveniet repellat rerum incidunt', 'admin/product-images/1695508162_FB_IMG_16169543120476400.jpg', 1, '2023-09-23 16:29:22', '2023-09-23 16:29:22'),
(14, 'Wasif Product - 3232', 14, 28, 200.00, 200, 'Short description', 'Long description', 'admin/product-images/1695647799_FB_IMG_16169544282047180.jpg', 1, '2023-09-25 07:16:39', '2023-09-25 07:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `street_address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `order_notes` text DEFAULT NULL,
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
(3, 'Ogani', 'ogani@gmail.com', NULL, '$2y$10$U/ASFxEy3RepFxS78AuwCuxp046DT4bdlymlbJwQEpEdgA4h9bK72', '74hyliTsoUZJvJPYVYT4w8DqLvq6gj7XFoz7OM2LLcwcK597Rxs2KZj7ypVz', '2023-09-12 17:43:13', '2023-09-12 17:43:13');

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
