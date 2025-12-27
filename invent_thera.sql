-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2025 at 03:35 AM
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
-- Database: `invent_thera`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `satuan_id` bigint(20) UNSIGNED NOT NULL,
  `stok` int(11) NOT NULL,
  `min_stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT 'gambar/default.png',
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama_barang`, `kode`, `satuan_id`, `stok`, `min_stok`, `harga`, `gambar`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Soft Clay', 'CLAY01', 2, 200, 10, 15000, 'gambar/1766679572-softclay.jpg', 'DIY Soft Clay (12 Warna Soft Clay + Paket Alat)', '2025-12-25 09:20:14', '2025-12-25 09:31:07'),
(2, 'Vas Paint', 'VAS01', 2, 150, 10, 35000, 'gambar/1766680210-vaspaint.jpg', 'Vas Paint (Plain Vas + Cat 3 Warna + Kuas)', '2025-12-25 09:30:38', '2025-12-25 10:09:31'),
(4, 'Kanvas 20x20', 'KV20', 2, 200, 10, 40000, 'gambar/1766680469-kanvas20.jpg', 'Kanvas Lukis (Kanvas 20x20 + Cat 3 Warna + Kuas)', '2025-12-25 09:35:22', '2025-12-25 10:09:54'),
(6, 'Dash (Hard Clay)', 'DASH01', 2, 200, 10, 35000, 'gambar/1766681450-dash.jpg', 'Clay Dash 125gr + Paket Cat 3 Warna + Kuas', '2025-12-25 09:51:38', '2025-12-25 10:10:06'),
(7, 'Soft Clay + Cermin', 'SCRM01', 2, 200, 10, 35000, 'gambar/1766681728-cermin.jpg', 'Cermin 10x15 + 12 Warna Soft Clay + Paket Alat', '2025-12-25 09:55:59', '2025-12-26 11:40:41'),
(8, 'Lukis Cermin', 'LCRM01', 2, 200, 10, 35000, 'gambar/1766682775-lukiscermin.jpg', 'Cermin 10x15 + Cat 3 Warna + Kuas', '2025-12-25 10:13:12', '2025-12-25 10:13:12'),
(9, 'Keychain 20k', 'KEY20', 2, 200, 10, 20000, 'gambar/1766682916-keychain.jpg', 'Keychain 20k + Cat 2 Warna', '2025-12-25 10:15:28', '2025-12-25 10:15:28'),
(10, 'Keychain 25k', 'KEY25', 2, 210, 10, 25000, 'gambar/1766682970-keychain.jpg', 'Keychain 25k + Cat 2 Warna', '2025-12-25 10:16:25', '2025-12-26 11:20:41'),
(11, 'Coaster Paint', 'CP01', 2, 200, 10, 35000, 'gambar/1766683082-coasterpaint.jpg', 'Plain Coaster + Cat 3 Warna + Kuas', '2025-12-25 10:18:17', '2025-12-25 10:18:17'),
(12, 'Painting By Number', 'PBN01', 2, 200, 10, 40000, 'gambar/1766683217-KANVAS10.jpg', 'Kanvas 20x20 + Paket Cat Warna + Kuas', '2025-12-25 10:20:37', '2025-12-25 10:20:49'),
(13, 'Kanvas 10x10', 'KV10', 2, 200, 10, 25000, 'gambar/1766683543-kanvaskcil.jpg', 'Kanvas 10x10 + Cat 2 Warna + Kuas', '2025-12-25 10:26:30', '2025-12-25 10:26:30'),
(14, 'DIY SHRINK PAPER', 'DSP01', 2, 200, 10, 40000, 'gambar/1766683691-SHRINKPAPER.jpg', 'A4 Shrink Paper + Gantungan 5 pcs + Spidol Akrilik (rent)', '2025-12-25 10:28:52', '2025-12-25 10:28:52'),
(15, 'Cat Warna', 'CAT01', 1, 500, 20, 7000, 'gambar/1766683913-CATWARNA.jfif', 'Cat Warna Satuan', '2025-12-25 10:32:07', '2025-12-25 10:32:07'),
(16, 'Kuas', 'K01', 1, 500, 20, 1500, 'gambar/1766684009-KUAS.jfif', 'Kuas Cat Satuan', '2025-12-25 10:33:37', '2025-12-25 10:33:37'),
(17, 'Palette Lukis', 'PAL01', 1, 500, 20, 2500, 'gambar/1766684244-tempatlukis.jfif', 'Palette Lukis Satuan', '2025-12-25 10:37:32', '2025-12-26 11:40:27');

-- --------------------------------------------------------

--
-- Table structure for table `barang_kategori`
--

CREATE TABLE `barang_kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_kategori`
--

INSERT INTO `barang_kategori` (`id`, `barang_id`, `kategori_id`, `created_at`, `updated_at`) VALUES
(1, 1, 5, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 2, 4, NULL, NULL),
(5, 4, 1, NULL, NULL),
(8, 6, 2, NULL, NULL),
(9, 7, 2, NULL, NULL),
(10, 8, 2, NULL, NULL),
(11, 9, 3, NULL, NULL),
(12, 10, 3, NULL, NULL),
(13, 11, 4, NULL, NULL),
(14, 12, 1, NULL, NULL),
(15, 12, 5, NULL, NULL),
(16, 13, 1, NULL, NULL),
(17, 14, 6, NULL, NULL),
(18, 15, 5, NULL, NULL),
(19, 16, 5, NULL, NULL),
(20, 17, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluars`
--

CREATE TABLE `barang_keluars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_transaksi` varchar(255) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `total_qty` int(11) NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_keluars`
--

INSERT INTO `barang_keluars` (`id`, `no_transaksi`, `tgl_keluar`, `total_qty`, `total_harga`, `created_at`, `updated_at`) VALUES
(1, 'INV-20251225-1341', '2025-12-25', 2, '70000', '2025-12-25 12:43:10', '2025-12-25 12:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar_details`
--

CREATE TABLE `barang_keluar_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_keluar_id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_keluar_details`
--

INSERT INTO `barang_keluar_details` (`id`, `barang_keluar_id`, `barang_id`, `qty`, `harga`, `total_harga`, `created_at`, `updated_at`) VALUES
(1, 1, 7, 2, 35000, 70000, '2025-12-25 12:43:10', '2025-12-25 12:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuks`
--

CREATE TABLE `barang_masuks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_transaksi` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `total_qty` int(11) NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_masuks`
--

INSERT INTO `barang_masuks` (`id`, `no_transaksi`, `tgl_masuk`, `total_qty`, `total_harga`, `created_at`, `updated_at`) VALUES
(1, 'INV-20251226-5411', '2025-12-26', 10, '250000', '2025-12-26 11:20:40', '2025-12-26 11:20:40');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk_details`
--

CREATE TABLE `barang_masuk_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barang_masuk_id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_masuk_details`
--

INSERT INTO `barang_masuk_details` (`id`, `barang_masuk_id`, `barang_id`, `qty`, `harga`, `total_harga`, `created_at`, `updated_at`) VALUES
(1, 1, 10, 10, 25000, 250000, '2025-12-26 11:20:41', '2025-12-26 11:20:41');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `nama_kategori`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Produk Kanvas', 'Kanvas Thera Art', '2025-12-25 09:01:11', '2025-12-25 09:10:22'),
(2, 'Soft Material', 'Soft Material Thera Art', '2025-12-25 09:10:45', '2025-12-25 09:10:45'),
(3, 'Accessories', 'Keychain', '2025-12-25 09:12:29', '2025-12-25 09:12:29'),
(4, 'Dekorasi', 'Vas & Coaster Thera Art', '2025-12-25 09:12:56', '2025-12-25 09:12:56'),
(5, 'Alat & Bahan', 'Alat & Bahan Painting', '2025-12-25 09:13:13', '2025-12-25 09:13:13'),
(6, 'Paper Craft', 'Paper Craft Thera Art', '2025-12-25 09:13:30', '2025-12-25 09:13:30'),
(7, 'Sewa & Perlengkapan', 'Penyewaan dan Perlengkapan Thera Art', '2025-12-25 09:14:11', '2025-12-25 09:14:11'),
(8, 'Packaging', 'Packaging Thera Art (Kantong)', '2025-12-25 09:14:39', '2025-12-25 09:14:39');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_01_18_072628_create_brands_table', 1),
(7, '2024_01_18_072630_create_products_table', 1),
(8, '2024_02_01_181941_create_satuans_table', 1),
(9, '2024_02_04_180629_create_kategoris_table', 1),
(10, '2024_02_06_180915_create_barangs_table', 1),
(11, '2024_02_06_185354_create_barang_kategori_table', 1),
(12, '2024_02_08_185950_create_barang_keluars_table', 1),
(13, '2024_02_08_190034_create_barang_keluar_details_table', 1),
(14, '2024_02_12_013014_create_barang_masuks_table', 1),
(15, '2024_02_12_013052_create_barang_masuk_details_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) DEFAULT 'avatars/default.png',
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `satuans`
--

CREATE TABLE `satuans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_satuan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `satuans`
--

INSERT INTO `satuans` (`id`, `nama_satuan`, `created_at`, `updated_at`) VALUES
(1, 'pcs', '2025-12-25 09:00:32', '2025-12-25 09:00:32'),
(2, 'pack', '2025-12-25 09:00:40', '2025-12-25 09:00:40'),
(3, 'box', '2025-12-25 09:00:45', '2025-12-25 09:00:45');

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
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Thera', 'adminthera@gmail.com', NULL, '$2y$12$DbDkMVhWUo0EchWoguWZcu2Nm8IpKvDnVvFpmNz2mV4eJojSYow6m', NULL, NULL, NULL, 'lXp5Vv2VLvVaicDDMeWL3NWhDgdNJ8T339L3SZCp8WhRdEkajtO88QUADAML', '2025-12-25 07:54:06', '2025-12-25 07:54:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `barangs_kode_unique` (`kode`),
  ADD KEY `barangs_satuan_id_foreign` (`satuan_id`);

--
-- Indexes for table `barang_kategori`
--
ALTER TABLE `barang_kategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barang_kategori_barang_id_foreign` (`barang_id`),
  ADD KEY `barang_kategori_kategori_id_foreign` (`kategori_id`);

--
-- Indexes for table `barang_keluars`
--
ALTER TABLE `barang_keluars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_keluar_details`
--
ALTER TABLE `barang_keluar_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barang_keluar_details_barang_keluar_id_foreign` (`barang_keluar_id`),
  ADD KEY `barang_keluar_details_barang_id_foreign` (`barang_id`);

--
-- Indexes for table `barang_masuks`
--
ALTER TABLE `barang_masuks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_masuk_details`
--
ALTER TABLE `barang_masuk_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barang_masuk_details_barang_masuk_id_foreign` (`barang_masuk_id`),
  ADD KEY `barang_masuk_details_barang_id_foreign` (`barang_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_code_unique` (`code`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `satuans`
--
ALTER TABLE `satuans`
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
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `barang_kategori`
--
ALTER TABLE `barang_kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `barang_keluars`
--
ALTER TABLE `barang_keluars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang_keluar_details`
--
ALTER TABLE `barang_keluar_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang_masuks`
--
ALTER TABLE `barang_masuks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang_masuk_details`
--
ALTER TABLE `barang_masuk_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `satuans`
--
ALTER TABLE `satuans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `barangs_satuan_id_foreign` FOREIGN KEY (`satuan_id`) REFERENCES `satuans` (`id`);

--
-- Constraints for table `barang_kategori`
--
ALTER TABLE `barang_kategori`
  ADD CONSTRAINT `barang_kategori_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `barang_kategori_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `barang_keluar_details`
--
ALTER TABLE `barang_keluar_details`
  ADD CONSTRAINT `barang_keluar_details_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`),
  ADD CONSTRAINT `barang_keluar_details_barang_keluar_id_foreign` FOREIGN KEY (`barang_keluar_id`) REFERENCES `barang_keluars` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `barang_masuk_details`
--
ALTER TABLE `barang_masuk_details`
  ADD CONSTRAINT `barang_masuk_details_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`),
  ADD CONSTRAINT `barang_masuk_details_barang_masuk_id_foreign` FOREIGN KEY (`barang_masuk_id`) REFERENCES `barang_masuks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
