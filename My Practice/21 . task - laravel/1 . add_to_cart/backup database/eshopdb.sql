-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 01:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocarts`
--

CREATE TABLE `addtocarts` (
  `id` int(10) UNSIGNED NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productqty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymentmethod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productid` int(10) UNSIGNED NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addtocarts`
--

INSERT INTO `addtocarts` (`id`, `productname`, `productprice`, `productqty`, `totalprice`, `paymentmethod`, `productid`, `customerid`, `created_at`, `updated_at`) VALUES
(1, 'fry pan', '250', '3', '750', 'debit card', 4, 2, '2023-01-12 12:31:11', '2023-01-12 12:31:11'),
(2, 'frooti', '35', '2', '70', 'credit card', 12, 4, '2023-01-12 12:31:11', '2023-01-12 12:31:11'),
(3, 'wheat', '50', '10 kg', '500', 'google pay', 1, 1, '2023-01-12 12:33:51', '2023-01-12 12:33:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `categoryname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryname`, `created_at`, `updated_at`) VALUES
(1, 'groceries', '2023-01-12 11:23:19', '2023-01-12 11:23:19'),
(2, 'household', '2023-01-12 11:23:19', '2023-01-12 11:23:19'),
(3, 'packaged foods', '2023-01-12 11:26:46', '2023-01-12 11:26:46'),
(4, 'beverages', '2023-01-12 11:27:20', '2023-01-12 11:27:20'),
(5, 'fruits', '2023-01-12 11:29:44', '2023-01-12 11:29:44'),
(6, 'vegetables', '2023-01-12 11:31:19', '2023-01-12 11:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `cityname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countryid` int(10) UNSIGNED NOT NULL,
  `stateid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `cityname`, `countryid`, `stateid`, `created_at`, `updated_at`) VALUES
(1, 'rajkot', 1, 1, '2023-01-12 07:50:36', '2023-01-12 07:50:36'),
(2, 'ahmedabad', 1, 1, '2023-01-12 07:50:36', '2023-01-12 07:50:36'),
(3, 'jaypur', 1, 3, '2023-01-12 07:52:49', '2023-01-12 07:52:49'),
(4, 'mumbai', 1, 2, '2023-01-12 07:52:49', '2023-01-12 07:52:49'),
(5, 'puna', 1, 2, '2023-01-12 07:52:49', '2023-01-12 07:52:49'),
(6, 'bangaluru', 1, 4, '2023-01-12 07:55:10', '2023-01-12 07:55:10');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `email`, `mobile`, `address`, `message`, `customerid`, `created_at`, `updated_at`) VALUES
(1, 'raj', 'pandya', 'raj@gmail.com', 9898765473, 'jaypur', 'hii', 3, '2023-01-12 11:20:53', '2023-01-12 11:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `countryname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `countryname`, `created_at`, `updated_at`) VALUES
(1, 'india', '2023-01-12 07:47:00', '2023-01-12 07:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `countryid` int(10) UNSIGNED NOT NULL,
  `stateid` int(10) UNSIGNED NOT NULL,
  `cityid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `photo`, `firstname`, `lastname`, `dob`, `gender`, `email`, `password`, `mobile`, `address`, `countryid`, `stateid`, `cityid`, `created_at`, `updated_at`) VALUES
(1, 'p1.jpg', 'aakash', 'patel', '10-07-1998', 'male', 'aakash@gmail.com', '12345', 9998909990, 'rajkot', 1, 1, 1, '2023-01-12 10:45:13', '2023-01-12 10:45:13'),
(2, 'p2.jpg', 'nirav', 'patel', '15-12-1995', 'male', 'nirav@gmail.com', '12345', 9998994550, 'ahmedabad', 1, 1, 2, '2023-01-12 10:45:13', '2023-01-12 10:45:13'),
(3, 'p3.jpg', 'raj', 'pandya', '25-01-1999', 'male', 'raj@gmail.com', '12345', 9898765473, 'jaypur', 1, 3, 3, '2023-01-12 10:59:17', '2023-01-12 10:59:17'),
(4, 'p4.jpg', 'krunal', 'kotadiya', '24-05-2000', 'male', 'krunal@gmail.com', '12345', 9998991234, 'puna', 1, 2, 5, '2023-01-12 11:01:22', '2023-01-12 11:01:22'),
(5, 'p5.jpg', 'kishan', 'patel', '23-02-2000', 'male', 'kishan@gmail.com', '12345', 9998003456, 'bangaluru', 1, 4, 6, '2023-01-12 11:04:44', '2023-01-12 11:04:44');

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
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `firstname`, `lastname`, `email`, `mobile`, `address`, `message`, `star`, `customerid`, `created_at`, `updated_at`) VALUES
(1, 'aakash', 'patel', 'aakash@gmail.com', 9998909990, 'rajkot', 'hii', '4 star', 1, '2023-01-12 11:14:00', '2023-01-12 11:14:00'),
(2, 'kishan', 'patel', 'kishan@gmail.com', 9998003456, 'bangaluru', 'hii', '5 star', 5, '2023-01-12 11:17:19', '2023-01-12 11:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productqty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `productname`, `productprice`, `productqty`, `totalprice`, `customerid`, `created_at`, `updated_at`) VALUES
(1, 'fry pan', '250', '3', '750', 2, '2023-01-12 12:23:58', '2023-01-12 12:23:58'),
(2, 'frooti', '35', '2', '70', 4, '2023-01-12 12:23:58', '2023-01-12 12:23:58'),
(3, 'wheat', '50', '10 kg', '500', 1, '2023-01-12 12:28:19', '2023-01-12 12:28:19');

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
(5, '2023_01_11_123418_create_countries_table', 1),
(6, '2023_01_11_123450_create_states_table', 1),
(7, '2023_01_11_123611_create_cities_table', 1),
(8, '2023_01_12_072746_create_customers_table', 1),
(9, '2023_01_12_073840_create_contacts_table', 1),
(10, '2023_01_12_074030_create_feedbacks_table', 1),
(11, '2023_01_12_074150_create_categories_table', 1),
(12, '2023_01_12_074238_create_products_table', 1),
(13, '2023_01_12_074356_create_invoices_table', 1),
(14, '2023_01_12_074452_create_addtocarts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `productname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productdetail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stockinqty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `productdetail`, `price`, `stockinqty`, `categoryid`, `created_at`, `updated_at`) VALUES
(1, 'wheat', 'wheat', '50/kg', '10000 kg', 1, '2023-01-12 11:33:22', '2023-01-12 11:33:22'),
(2, 'millet', 'millet', '60/kg', '2000 kg', 1, '2023-01-12 11:33:22', '2023-01-12 11:33:22'),
(3, 'rice', 'basmati rice', '70/kg', '7500 kg', 1, '2023-01-12 11:43:47', '2023-01-12 11:43:47'),
(4, 'fry pan', 'fry pan', '250', '500', 2, '2023-01-12 11:43:47', '2023-01-12 11:43:47'),
(5, 'dosa tawa', 'dosa tawa', '300', '550', 2, '2023-01-12 11:47:26', '2023-01-12 11:47:26'),
(6, 'idly kadai', 'idly kadai', '300', '500', 2, '2023-01-12 11:48:27', '2023-01-12 11:48:27'),
(7, 'tadka pan', 'tadka pan', '450', '100', 2, '2023-01-12 11:49:39', '2023-01-12 11:49:39'),
(8, 'coated pan', 'coated pan', '250', '200', 2, '2023-01-12 11:50:37', '2023-01-12 11:50:37'),
(9, 'balaji masala chips', 'balaji masala chips', '40', '500', 3, '2023-01-12 11:52:14', '2023-01-12 11:52:14'),
(10, 'balaji simply saulted chips', 'balaji simply saulted chips', '40', '150', 3, '2023-01-12 11:52:14', '2023-01-12 11:52:14'),
(11, 'lemonade', 'lemonade', '20', '100', 4, '2023-01-12 11:59:26', '2023-01-12 11:59:26'),
(12, 'frooti', 'frooti', '35', '150', 4, '2023-01-12 12:08:30', '2023-01-12 12:08:30'),
(13, 'tropicana', 'tropicana', '20', '200', 4, '2023-01-12 12:12:26', '2023-01-12 12:12:26'),
(14, 'jira soda', 'jira soda', '60', '300', 4, '2023-01-12 12:12:26', '2023-01-12 12:12:26'),
(15, 'cabbage', 'cabbage', '25', '340 kg', 6, '2023-01-12 12:14:36', '2023-01-12 12:14:36'),
(16, 'tomato', 'tomato', '30', '100 kg', 6, '2023-01-12 12:14:36', '2023-01-12 12:14:36'),
(17, 'carrot', 'carrot', '40 ', '250 kg', 6, '2023-01-12 12:14:36', '2023-01-12 12:14:36'),
(18, 'pineapple', 'pineapple', '50', '150', 5, '2023-01-12 12:14:36', '2023-01-12 12:14:36'),
(19, 'apple', 'apple', '100', '500 kg', 5, '2023-01-12 12:14:36', '2023-01-12 12:14:36'),
(20, 'banana', 'banana', '25', '50', 5, '2023-01-12 12:20:15', '2023-01-12 12:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `statename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countryid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `statename`, `countryid`, `created_at`, `updated_at`) VALUES
(1, 'gujarat', 1, '2023-01-12 07:47:56', '2023-01-12 07:47:56'),
(2, 'maharashtra', 1, '2023-01-12 07:47:56', '2023-01-12 07:47:56'),
(3, 'rajasthan', 1, '2023-01-12 07:48:57', '2023-01-12 07:48:57'),
(4, 'karnataka', 1, '2023-01-12 07:49:29', '2023-01-12 07:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocarts`
--
ALTER TABLE `addtocarts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addtocarts_productid_foreign` (`productid`),
  ADD KEY `addtocarts_customerid_foreign` (`customerid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_countryid_foreign` (`countryid`),
  ADD KEY `cities_stateid_foreign` (`stateid`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_customerid_foreign` (`customerid`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_countryid_foreign` (`countryid`),
  ADD KEY `customers_stateid_foreign` (`stateid`),
  ADD KEY `customers_cityid_foreign` (`cityid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedbacks_customerid_foreign` (`customerid`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoices_customerid_foreign` (`customerid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_categoryid_foreign` (`categoryid`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_countryid_foreign` (`countryid`);

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
-- AUTO_INCREMENT for table `addtocarts`
--
ALTER TABLE `addtocarts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addtocarts`
--
ALTER TABLE `addtocarts`
  ADD CONSTRAINT `addtocarts_customerid_foreign` FOREIGN KEY (`customerid`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `addtocarts_productid_foreign` FOREIGN KEY (`productid`) REFERENCES `products` (`id`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_countryid_foreign` FOREIGN KEY (`countryid`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `cities_stateid_foreign` FOREIGN KEY (`stateid`) REFERENCES `states` (`id`);

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_customerid_foreign` FOREIGN KEY (`customerid`) REFERENCES `customers` (`id`);

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_cityid_foreign` FOREIGN KEY (`cityid`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `customers_countryid_foreign` FOREIGN KEY (`countryid`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `customers_stateid_foreign` FOREIGN KEY (`stateid`) REFERENCES `states` (`id`);

--
-- Constraints for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_customerid_foreign` FOREIGN KEY (`customerid`) REFERENCES `customers` (`id`);

--
-- Constraints for table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_customerid_foreign` FOREIGN KEY (`customerid`) REFERENCES `customers` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_categoryid_foreign` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`id`);

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_countryid_foreign` FOREIGN KEY (`countryid`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
