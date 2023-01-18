-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 03:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko3`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kodebrg` varchar(20) NOT NULL,
  `namabrg` varchar(20) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `jumlah_beli` double NOT NULL,
  `jumlah_jual` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kodebrg`, `namabrg`, `satuan`, `jumlah_beli`, `jumlah_jual`) VALUES
('b003', 'Laptop Asus', 'pcs', 2000, 1000),
('b004', 'PC', 'pcs', 4000, 5000),
('b005', 'CPU', 'pcs', 4000, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `detailgudang`
--

CREATE TABLE `detailgudang` (
  `kodetr` bigint(20) NOT NULL,
  `kodebrg` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailgudang`
--

INSERT INTO `detailgudang` (`kodetr`, `kodebrg`, `harga`, `jumlah`) VALUES
(20221212100715, 'b004', 1, 2000),
(20221212100715, 'b003', 1, 1000),
(20221212104823, 'b004', 1, 2000),
(20221212104823, 'b003', 1, 1000),
(20221216110727, 'm01', 1, 1000),
(20221218145104, 'm02', 1, 2000),
(20221218150551, 'b003', 1, 1000),
(20221219074533, 'b004', 1, 2000),
(20221219074942, 'b003', 1, 1000),
(20221219075032, 'b003', 1, 1000),
(20221219081409, 'b004', 1, 2000),
(20230107173947, 'PR0001', 1, 20000),
(20230107183804, 'b003', 1, 1000);

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
-- Table structure for table `mastergudang`
--

CREATE TABLE `mastergudang` (
  `kodetr` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `namasupplier` varchar(50) NOT NULL,
  `telpon` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `grandtotal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mastergudang`
--

INSERT INTO `mastergudang` (`kodetr`, `tanggal`, `namasupplier`, `telpon`, `alamat`, `keterangan`, `grandtotal`) VALUES
(20221212100715, '2022-12-12', 'rara', '0895554777', 'Jl.Bakdeyah', '-', '3000'),
(20221212104823, '2022-12-12', 'wawa', '0895554777', 'Jl.lamara', '-', '3000'),
(20221218150551, '2022-12-18', 'Oji', '089576844', 'Jl.Bakdeyah', '-', '1000'),
(20221219075032, '2022-12-19', 'Sultan', '08953679', 'Jl.lamara', '-', '1000'),
(20221219081409, '2022-12-19', 'Adel', '08954732', 'Jl.lamara', '-', '2000'),
(20230107183804, '2023-01-07', 'Tina', '0895365489', 'Jl.lamara', '-', '1000');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `kodeorder` varchar(40) NOT NULL,
  `kodesup` varchar(40) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `do` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL,
  `grandtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`kodeorder`, `kodesup`, `id`, `tanggal`, `do`, `keterangan`, `grandtotal`) VALUES
('o1233', 'Sup001', 13, '2022-11-02', 'do1213', 'belibahan', 10000),
('o4355', 'Sup001', 13, '2022-11-28', 'do133', 'belibahan', 10000),
('o9315', 'Sup001', 13, '2022-11-28', 'do133', 'belibahan', 10000),
('o9345', 'Sup001', 13, '2022-11-28', 'do133', 'belibahan', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `kodeorder` varchar(20) NOT NULL,
  `kodebrg` varchar(20) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` varchar(40) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`kodeorder`, `kodebrg`, `harga`, `jumlah`, `total`) VALUES
('o1233', 'b003', 50000, '2', 100000);

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
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kodesup` varchar(40) NOT NULL,
  `namasup` varchar(250) NOT NULL,
  `telponsup` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `alamatsup` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`kodesup`, `namasup`, `telponsup`, `keterangan`, `alamatsup`) VALUES
('Sup001', 'Sumanti', '08953679', 'Sudah lunas', 'Jln.Ahmad Dahlan'),
('Sup002', 'Bae Irene', '0895365488', 'Lunas', 'Jl.Dukuh Kupang');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `alamat` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telp` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','operator','gudang') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `alamat`, `telp`, `jeniskelamin`, `role`) VALUES
(13, 'Reynalda', '20410100006@dinamika.ac.id', NULL, '$2y$10$61zfMIQ.v6CHmj/zIy3udO1RwXKnJIuvg9a1L8qCr7dNjAwwlP8fS', NULL, '2022-11-27 17:46:11', '2022-11-27 17:46:11', 'Jl.lamara', '08965776', 'perempuan', 'operator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kodebrg`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mastergudang`
--
ALTER TABLE `mastergudang`
  ADD PRIMARY KEY (`kodetr`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`kodeorder`),
  ADD KEY `kodesup` (`kodesup`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD KEY `kodeorder` (`kodeorder`),
  ADD KEY `kodebrg` (`kodebrg`),
  ADD KEY `kodeorder_2` (`kodeorder`);

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
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kodesup`);

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
-- AUTO_INCREMENT for table `mastergudang`
--
ALTER TABLE `mastergudang`
  MODIFY `kodetr` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20230107183805;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`kodesup`) REFERENCES `supplier` (`kodesup`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`kodeorder`) REFERENCES `order` (`kodeorder`),
  ADD CONSTRAINT `order_item_ibfk_2` FOREIGN KEY (`kodebrg`) REFERENCES `barang` (`kodebrg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
