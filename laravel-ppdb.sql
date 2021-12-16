-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 02:40 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-ppdb`
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
-- Table structure for table `formulirs`
--

CREATE TABLE `formulirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nisn` int(11) DEFAULT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anak_ke` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_saudara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tinggal_dengan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyakit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kerja_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kerja_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pend_akhira` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pend_akhiri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prestasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_prestasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ijazah` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rapot` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telpayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telpibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai1` int(11) DEFAULT NULL,
  `nilai2` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulirs`
--

INSERT INTO `formulirs` (`id`, `full_name`, `user_id`, `nisn`, `place`, `birthday`, `agama`, `address`, `anak_ke`, `jml_saudara`, `school`, `gender`, `tinggal_dengan`, `penyakit`, `nama_ibu`, `nama_ayah`, `kerja_ayah`, `kerja_ibu`, `pend_akhira`, `pend_akhiri`, `status`, `prestasi`, `file_prestasi`, `ijazah`, `photo`, `rapot`, `phone`, `no_telpayah`, `no_telpibu`, `nilai1`, `nilai2`, `remember_token`, `created_at`, `updated_at`) VALUES
(21, 'MUHAMMAD RIFQI SYATRIA', 2, 33899695, 'jakarta', '2000-08-09', 'islam', 'Cirebion', '1', '3', 'al binaa', 'laki', 'orangtua', '1', 'llwnewne', 'sahrul', 'mati', 'adda', 'SD', 'samit albinaa', NULL, NULL, 'prestasi-data/s5XliOHZulRQsw6wcqCyhRMinlqwHUTVE9XUVF7d.png', 'ijazah-data/4800cPtu4TjLEwCy7xoDdfvnbzgtnekyk6Qgfbfo.png', 'image-data/vttlHXlewGzwh1XdV24gtIthXNtmCH4fzMagiuvO.png', 'rapot-data/oz32KxPocNjFo2jThSnlNnx4gcCkX7GwWlFkwOKu.png', '03635465384', '8328932498', '832893248', 60, 60, NULL, '2021-12-16 01:35:28', '2021-12-16 04:44:32'),
(22, 'MUHAMMAD RIFQI SYATRIA', 5, 33899695, 'Jakarta', '2003-03-23', 'islam', 'kp.baru', '1', '1', 'SMA-IT AL-BINAA OSLAMIC BOARDING SCHOOL', 'laki', 'orangtua', 'tenggorokan', 'ibu', 'ayah', 'kerja', 'kerja', 'sma', 'sma', NULL, 'kimia', NULL, NULL, 'image-data/4GKq9hIuKWps5137RHIvWJwsM1Ge8MSTAUqHXhCZ.jpg', 'rapot-data/B91QIFXzkcUUF4LJxwKA1yxgFiNrayNofWmOlwgO.png', '03635465384', '0987654344', '098765445', NULL, NULL, NULL, '2021-12-16 04:48:25', '2021-12-16 04:48:25');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `medially_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `medially_id` bigint(20) UNSIGNED NOT NULL,
  `file_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(79, '2014_10_12_000000_create_users_table', 1),
(80, '2014_10_12_100000_create_password_resets_table', 1),
(81, '2019_08_19_000000_create_failed_jobs_table', 1),
(82, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(83, '2021_11_23_002117_create_formulirs_table', 1),
(84, '2021_11_25_070104_create_nilais_table', 1),
(85, '2020_06_14_000001_create_media_table', 2),
(86, '2021_12_16_172534_create_images_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilais`
--

CREATE TABLE `nilais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nilai1` int(11) DEFAULT NULL,
  `nilai2` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'User',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eric', 'admin@gmail.com', 'Admin', '$2y$10$yVPzapcB/4fRzVtU03cGhO/8j7ZYef6Ni2ltXtHRluh3.Hro6TgVS', NULL, '2021-12-14 02:18:53', '2021-12-14 02:18:53'),
(2, 'siswa', 'siswa@gmail.com', 'User', '$2y$10$zXEPoWjCNqVihxnJhEWce.thO1Cp/PLow04OHVV5WH1Yy.ga4u9Xu', NULL, '2021-12-14 02:19:35', '2021-12-15 10:03:54'),
(3, 'siswa1', 'siswa1@gmail.com', 'User', '$2y$10$AWNVIbIsttfyy4R5z21fCerW85d1BZbulJ2O6JIEF9VVcHDmT2SPG', NULL, '2021-12-15 01:49:28', '2021-12-15 01:49:28'),
(4, 'MUHAMMAD RIFQI SYATRIA', 'siswa3@gmail.com', 'User', '$2y$10$jtLgn.1o2cdH9Z/QkcA3K.Q6ju.zQD.7ZJ7b7y/nsAJn.9.HoaSXy', NULL, '2021-12-15 07:17:33', '2021-12-15 07:17:33'),
(5, 'rifqi', 'rifqi@gmail.com', 'User', '$2y$10$o62Xc/8b7r/64OFE7Eiefu4B5IkO4zmtc4/G51rmS9X9or3mi1XE2', NULL, '2021-12-16 04:46:48', '2021-12-16 04:46:48');

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
-- Indexes for table `formulirs`
--
ALTER TABLE `formulirs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_medially_type_medially_id_index` (`medially_type`,`medially_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `formulirs`
--
ALTER TABLE `formulirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `nilais`
--
ALTER TABLE `nilais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
