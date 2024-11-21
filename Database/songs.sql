-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 12:29 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `songs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(5, '2024_11_15_093726_insert_songs_data', 2),
(9, '0001_01_01_000000_create_users_table', 3),
(10, '0001_01_01_000001_create_cache_table', 3),
(11, '0001_01_01_000002_create_jobs_table', 3),
(12, '2024_11_07_100924_create_songs_table', 3),
(13, '2024_11_15_153609_create_persons_table', 4),
(14, '2024_11_18_121905_create_users_table', 4);

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
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `video_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('v5zidRXdNvhqrNyq8pzbCB1Vb3papKVkyIfckCdJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMHpmcTNWQXB3Sk5YN0dFT1ZGR2NrbnROZWtPMUhNSVNwcUpTYlVFNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zb25nLzExIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1732015739);

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `video_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `duration`, `year`, `image_path`, `video_path`, `created_at`, `updated_at`) VALUES
(1, 'Open Letter', 'Talha Anjum', '3:13', '2023', '/src/index-songs/Open letter/open letter.jpg', '/src/index-songs/Open letter/Open-letter-video.mp4', '2024-11-18 12:04:33', '2024-11-18 12:04:33'),
(7, 'Millionare', 'Yo Yo Honey Singh', '3:29', '2024', '/src/index-songs/Millionare/millionare.jpg', '/src/index-songs/Millionare/Millionare.mp4', '2024-11-19 04:07:02', '2024-11-19 04:07:02'),
(8, 'Lajawab', 'Taimoor Baig', '3:29', '2023', '/src/index-songs/Lajawab/Lajawab.jpg', '/src/index-songs/Lajawab/Lajawab.mp4', '2024-11-19 04:08:12', '2024-11-19 04:08:12'),
(9, 'Nadaniyan', 'AUR Rafey Usama Ahad', '4:59', '2023', '/src/index-songs/Nadaniyan/nadaniyan.png', '/src/index-songs/Nadaniyan/nadaniyan.mp4', '2024-11-19 04:15:06', '2024-11-19 04:26:03'),
(10, 'On Top 2', 'Karan Aujla', '4:33', '2023', '/src/index-songs/on top 2/on top 2.png', '/src/index-songs/on top 2/on top 2.mp4', '2024-11-19 04:28:15', '2024-11-19 04:28:30'),
(11, 'Once Upon a time in Mumbai', 'Karan Aujla', '3:32', '2022', '/src/index-songs/once upon a time in mumbai/hh.png', '/src/index-songs/once upon a time in mumbai/once upon a time in mumbai.mp4', '2024-11-19 04:31:15', '2024-11-19 04:31:57'),
(12, 'Shikayat', 'AUR Rafey Usama Ahad', '3:29', '2023', '/src/index-songs/Shikayat/shikayat.jpg', '/src/index-songs/Shikayat/shikayat.mp4', '2024-11-19 04:32:27', '2024-11-19 04:32:27'),
(13, 'Tauba Tauba', 'Karan Aujla', '3:42', '2024', '/src/index-songs/tauba tauba/tauba tauba.png', '/src/index-songs/tauba tauba/tauba tauba.png', '2024-11-19 04:34:07', '2024-11-19 04:34:07'),
(14, 'Tu Hai kahan', 'AUR Rafey Usama Ahad', '4:29', '2023', '/src/index-songs/tu hai kahan/tu hai kahan.webp', '/src/index-songs/tu hai kahan/tu hai kahan.mp4', '2024-11-19 04:37:29', '2024-11-19 04:38:39'),
(15, 'Zalima', 'Karan Aujla', '3:29', '2021', '/src/index-songs/zalima/zalima.jpg', '/src/index-songs/zalima/zalima.mp4', '2024-11-19 04:39:24', '2024-11-19 04:39:24'),
(16, 'Lajawab 2', 'Taimoor Baig', '3:32', '2023', '/src/index-songs/Lajawab 2/Lajawab-2.jpg', '/src/index-songs/Lajawab 2/Lajawab-2.mp4', '2024-11-19 04:40:22', '2024-11-19 04:40:37'),
(17, 'Kya Chahiye', 'AUR Rafey Usama Ahad', '4:59', '2023', '/src/index-songs/kya chahiye/kya chahiye.png', '/src/index-songs/kya chahiye/kya chahiye.mp4', '2024-11-19 04:41:19', '2024-11-19 04:41:32'),
(18, 'Kabhi Main Kabhi Tum', 'AUR Rafey Usama Ahad', '4:29', '2024', '/src/index-songs/kabhi main kabhi tum/kabhi main kabhi tum.png', '/src/index-songs/kabhi main kabhi tum/kabhi main kabhi tum.mp4', '2024-11-19 04:44:01', '2024-11-19 04:44:10'),
(19, 'Kaun Talha', 'Talha Anjum', '4:29', '2024', '/src/index-songs/kaun-talha/kaun talha.png', '/src/index-songs/kaun-talha/kaun-talha.mp4', '2024-11-19 04:45:25', '2024-11-19 04:45:50'),
(20, 'Jo Tum mery ho', 'Anuv Jain', '3:49', '2024', '/src/index-songs/Jo-tum-mery-ho/Jo tum mery ho.png', '/src/index-songs/Jo-tum-mery-ho/Jo-tum-mery-ho.jpg', '2024-11-19 04:49:42', '2024-11-19 04:50:35'),
(21, 'Iraday', 'Abdul Hannan & Rovalio', '3:13', '2022', '/src/index-songs/iraday/iraday.jpg', '/src/index-songs/iraday/iraday.mp4', '2024-11-19 04:51:42', '2024-11-19 04:51:42'),
(22, 'Come Through', 'Talha Anjum and Umair', '4:29', '2023', '/src/index-songs/come through/come through.jpg', '/src/index-songs/come through/come through.mp4', '2024-11-19 04:52:38', '2024-11-19 04:52:38'),
(23, 'Aaja Mahi', 'AUR Rafey Usama Ahad', '3:13', '2023', '/src/index-songs/aaja mahi/aaja mahi.jpg', '/src/index-songs/aaja mahi/aaja mahi.mp4', '2024-11-19 04:53:32', '2024-11-19 04:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `re_enter_password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `re_enter_password`, `created_at`, `updated_at`) VALUES
(4, 'Suleman Kashif', 'sulaimankashif764@gmail.com', '2ba55bb5', '2ba55bb5', '2024-11-19 04:27:16', '2024-11-19 04:27:16'),
(14, 'Usman', 'irshadusman267@gmail.com', '2ba55bb5', '2ba55bb5', '2024-11-19 03:15:32', '2024-11-19 03:15:32'),
(15, 'Aslam', 'aslam@gmail.com', '2ba55bb5', '2ba55bb5', '2024-11-19 05:03:28', '2024-11-19 05:03:28'),
(16, 'Millionare', 'millionaore@gmail.com', '2ba55bb5', '2ba55bb5', '2024-11-19 05:25:39', '2024-11-19 05:25:39'),
(17, 'Suleman', 'irshadusma11267@gmail.com', '$2y$12$tj8A2PbB0UF/Yh0fq0/X.ezjmYUChkQr5OEwezQX41GFFaLz0zqLm', '$2y$12$diRSZn58W82NfreMPPKOqucmA9LskjVh3e4DxjTzvz41w8aHAtlqG', '2024-11-19 06:28:02', '2024-11-19 06:28:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
