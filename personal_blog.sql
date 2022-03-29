-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 09:29 PM
-- Server version: 10.4.20-MariaDB-log
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personal_blog`
--

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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_kategori1` bigint(20) UNSIGNED DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `id_kategori1`, `image`, `kategori`, `created_at`, `updated_at`) VALUES
(28, 6, '1648572067.png', 'Jacket', '2022-03-29 09:13:21', '2022-03-29 09:41:07'),
(29, 6, '1648572055.png', 'Crewneck', '2022-03-29 09:13:30', '2022-03-29 09:40:55'),
(30, 6, '1648572024.png', 'Tee', '2022-03-29 09:13:45', '2022-03-29 10:05:02'),
(31, 6, '1648573213.png', 'Hoodie', '2022-03-29 10:00:13', '2022-03-29 10:00:13'),
(32, 6, '1648573246.png', 'Cap', '2022-03-29 10:00:46', '2022-03-29 10:00:46'),
(33, 6, '1648573450.png', 'Shirt', '2022-03-29 10:04:10', '2022-03-29 10:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `kategori1`
--

CREATE TABLE `kategori1` (
  `id_kategori1` bigint(20) UNSIGNED NOT NULL,
  `kategori1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori1`
--

INSERT INTO `kategori1` (`id_kategori1`, `kategori1`, `created_at`, `updated_at`) VALUES
(6, '-', '2022-03-21 11:26:28', '2022-03-21 11:26:28'),
(23, 'Hoodie', '2022-03-29 10:00:13', '2022-03-29 10:00:13'),
(24, 'Cap', '2022-03-29 10:00:46', '2022-03-29 10:00:46'),
(25, 'Shirt', '2022-03-29 10:04:10', '2022-03-29 10:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori_produk` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori_produk`, `id_kategori`, `id_produk`, `created_at`, `updated_at`) VALUES
(56, 28, 41, NULL, NULL),
(57, 29, 42, NULL, NULL),
(58, 28, 43, NULL, NULL),
(59, 28, 44, NULL, NULL),
(60, 32, 45, NULL, NULL),
(61, 32, 46, NULL, NULL);

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
(5, '2022_01_02_141736_create_about_table', 1),
(6, '2022_01_02_142125_create_work_table', 2),
(7, '2022_01_02_142547_create_contact_table', 3),
(8, '2022_01_02_143045_create_ability_table', 4),
(9, '2022_01_02_143318_create_portfolio_table', 5),
(10, '2022_01_02_144654_create_portfolio_table', 6),
(11, '2022_01_02_145130_create_portfolio_ability_table', 7),
(12, '2022_01_03_134358_create_labs_table', 8),
(13, '2022_01_03_142453_create_labs_table', 9),
(14, '2022_03_14_132605_create_kategori_table', 10),
(15, '2022_03_14_133429_create_kategori_table', 11),
(16, '2022_03_14_133821_create_produk_table', 12),
(17, '2022_03_14_134406_create_produk_table', 13),
(18, '2022_03_14_134534_create_produk_table', 14),
(19, '2022_03_14_134658_create_produk_table', 15),
(20, '2022_03_14_134807_create_kategori_produk_table', 16),
(21, '2022_03_14_135723_create_kategori_produk_table', 17),
(22, '2022_03_21_093627_create_kategori1_table', 18),
(23, '2022_03_27_035704_create_order_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` bigint(20) UNSIGNED NOT NULL,
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `pelanggan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `total` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `order`
--
DELIMITER $$
CREATE TRIGGER `delete_order` AFTER DELETE ON `order` FOR EACH ROW Begin 
	UPDATE produk
    SET stock = stock + OLD.jumlah WHERE produk.id_produk = OLD.id_produk;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_order` AFTER INSERT ON `order` FOR EACH ROW Begin 
	UPDATE produk
    SET stock = stock - NEW.jumlah WHERE produk.id_produk = NEW.id_produk;
END
$$
DELIMITER ;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `deskripsi`, `status`, `harga`, `berat`, `stock`, `image`, `created_at`, `updated_at`) VALUES
(41, 'Red Dickies Jacket', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at luctus libero. Mauris vel tortor sit amet odio volutpat maximus sit amet sed dui. Aliquam velit odio, mattis eu ligula eget, laoreet egestas ex. Pellentesque rutrum pharetra erat, ac fermentum nibh convallis at. Sed quis vehicula purus. Pellentesque non nisl aliquet, condimentum leo ac, placerat mauris. Sed dui enim, convallis a vestibulum imperdiet, fermentum eu justo. Nunc eu fermentum mi. Curabitur ullamcorper pulvinar facilisis. Nunc in iaculis sem. Sed sodales dui sit amet suscipit tincidunt. Donec id quam diam.', 'Draft', '500000', '1', 5, '1648570496.jpg', '2022-03-29 09:14:56', '2022-03-29 11:45:11'),
(42, 'Green Dickies Jacket', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at luctus libero. Mauris vel tortor sit amet odio volutpat maximus sit amet sed dui. Aliquam velit odio, mattis eu ligula eget, laoreet egestas ex. Pellentesque rutrum pharetra erat, ac fermentum nibh convallis at. Sed quis vehicula purus. Pellentesque non nisl aliquet, condimentum leo ac, placerat mauris. Sed dui enim, convallis a vestibulum imperdiet, fermentum eu justo. Nunc eu fermentum mi. Curabitur ullamcorper pulvinar facilisis. Nunc in iaculis sem. Sed sodales dui sit amet suscipit tincidunt. Donec id quam diam.', 'Draft', '500000', '1', 10, '1648573588.png', '2022-03-29 09:16:39', '2022-03-29 11:44:59'),
(43, 'Rebirt, Ash Hoodie', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at luctus libero. Mauris vel tortor sit amet odio volutpat maximus sit amet sed dui. Aliquam velit odio, mattis eu ligula eget, laoreet egestas ex. Pellentesque rutrum pharetra erat, ac fermentum nibh convallis at. Sed quis vehicula purus. Pellentesque non nisl aliquet, condimentum leo ac, placerat mauris. Sed dui enim, convallis a vestibulum imperdiet, fermentum eu justo. Nunc eu fermentum mi. Curabitur ullamcorper pulvinar facilisis. Nunc in iaculis sem. Sed sodales dui sit amet suscipit tincidunt. Donec id quam diam.', 'Draft', '500000', '1', 5, '1648573634.png', '2022-03-29 09:18:29', '2022-03-29 11:44:51'),
(44, 'Black Dickies Jacket', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at luctus libero. Mauris vel tortor sit amet odio volutpat maximus sit amet sed dui. Aliquam velit odio, mattis eu ligula eget, laoreet egestas ex. Pellentesque rutrum pharetra erat, ac fermentum nibh convallis at. Sed quis vehicula purus. Pellentesque non nisl aliquet, condimentum leo ac, placerat mauris. Sed dui enim, convallis a vestibulum imperdiet, fermentum eu justo. Nunc eu fermentum mi. Curabitur ullamcorper pulvinar facilisis. Nunc in iaculis sem. Sed sodales dui sit amet suscipit tincidunt. Donec id quam diam.', 'Complete', '200000', '200', 5, '1648579584.png', '2022-03-29 11:46:24', '2022-03-29 11:46:24'),
(45, 'Red Rebirth Cap', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at luctus libero. Mauris vel tortor sit amet odio volutpat maximus sit amet sed dui. Aliquam velit odio, mattis eu ligula eget, laoreet egestas ex. Pellentesque rutrum pharetra erat, ac fermentum nibh convallis at. Sed quis vehicula purus. Pellentesque non nisl aliquet, condimentum leo ac, placerat mauris. Sed dui enim, convallis a vestibulum imperdiet, fermentum eu justo. Nunc eu fermentum mi. Curabitur ullamcorper pulvinar facilisis. Nunc in iaculis sem. Sed sodales dui sit amet suscipit tincidunt. Donec id quam diam.', 'Complete', '2000000', '200', 10, '1648579625.jpg', '2022-03-29 11:47:05', '2022-03-29 11:47:05'),
(46, 'Black Rebirth Cap', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc at luctus libero. Mauris vel tortor sit amet odio volutpat maximus sit amet sed dui. Aliquam velit odio, mattis eu ligula eget, laoreet egestas ex. Pellentesque rutrum pharetra erat, ac fermentum nibh convallis at. Sed quis vehicula purus. Pellentesque non nisl aliquet, condimentum leo ac, placerat mauris. Sed dui enim, convallis a vestibulum imperdiet, fermentum eu justo. Nunc eu fermentum mi. Curabitur ullamcorper pulvinar facilisis. Nunc in iaculis sem. Sed sodales dui sit amet suscipit tincidunt. Donec id quam diam.', 'Complete', '200000', '200', 10, '1648579684.jpg', '2022-03-29 11:48:04', '2022-03-29 11:48:04');

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
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `foto`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Your Name', 'example@example.com', NULL, '$2y$10$B5cODoxf/aoTx9Es4Rao6uog6.847wqUV6etnG9HEB2sXkLk7dr8G', '1641226347.png', NULL, '2022-01-02 08:11:45', '2022-01-06 08:52:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_kategori1` (`id_kategori1`);

--
-- Indexes for table `kategori1`
--
ALTER TABLE `kategori1`
  ADD PRIMARY KEY (`id_kategori1`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori_produk`),
  ADD KEY `kategori_produk_id_kategori_foreign` (`id_kategori`),
  ADD KEY `kategori_produk_id_produk_foreign` (`id_produk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_produk` (`id_produk`);

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
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `kategori1`
--
ALTER TABLE `kategori1`
  MODIFY `id_kategori1` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`id_kategori1`) REFERENCES `kategori1` (`id_kategori1`);

--
-- Constraints for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD CONSTRAINT `kategori_produk_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori_produk_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
