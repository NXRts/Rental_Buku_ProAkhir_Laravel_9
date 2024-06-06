-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 05:05 PM
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
-- Database: `book_rent`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_code` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'in stock',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_code`, `title`, `cover`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2435168', 'Biru Langit', 'Biru Langit-1717655373.png', 'biru-langit', 'in stock', '2024-06-05 23:29:33', '2024-06-06 03:49:27', NULL),
(2, '2317772', 'The Hobbit', 'The Hobbit-1717670607.jpg', 'the-hobbit', 'in stock', '2024-06-06 03:43:27', '2024-06-06 03:43:27', NULL),
(3, '2432516', 'Jurnal Lisa - Teror Liburan Selolah', 'Jurnal Lisa - Teror Liburan Selolah-1717670938.jpeg', 'jurnal-lisa-teror-liburan-selolah', 'in stock', '2024-06-06 03:48:58', '2024-06-06 03:49:41', NULL),
(4, '2753666', 'The Good Son', 'The Good Son-1717671159.jpg', 'the-good-son', 'in stock', '2024-06-06 03:52:39', '2024-06-06 03:52:39', NULL),
(5, '2541732', 'The Lord Of The Rings: Dua Menara (The Two Towers)', 'The Lord Of The Rings: Dua Menara (The Two Towers)-1717671349.jpg', 'the-lord-of-the-rings-dua-menara-the-two-towers', 'in stock', '2024-06-06 03:54:12', '2024-06-06 03:57:38', '2024-06-06 03:57:38'),
(6, 'A32-6124', 'ASD', 'ASD-1717671372.png', 'asd', 'in stock', '2024-06-06 03:56:12', '2024-06-06 03:56:28', '2024-06-06 03:56:28'),
(7, '2435627', 'The Lord Of The Rings', 'The Lord Of The Rings-1717671532.jpg', 'the-lord-of-the-rings', 'in stock', '2024-06-06 03:58:14', '2024-06-06 03:58:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`id`, `book_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 2, 3, NULL, NULL),
(4, 3, 1, NULL, NULL),
(5, 3, 8, NULL, NULL),
(6, 3, 14, NULL, NULL),
(7, 3, 15, NULL, NULL),
(8, 4, 3, NULL, NULL),
(9, 4, 8, NULL, NULL),
(10, 4, 9, NULL, NULL),
(11, 4, 10, NULL, NULL),
(12, 4, 14, NULL, NULL),
(13, 5, 3, NULL, NULL),
(14, 5, 12, NULL, NULL),
(15, 5, 15, NULL, NULL),
(16, 6, 2, NULL, NULL),
(17, 6, 3, NULL, NULL),
(18, 7, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fiksi', 'fiksi', '2024-06-05 22:59:24', '2024-06-05 22:59:24', NULL),
(2, 'Nonfiksi', 'nonfiksi', '2024-06-05 22:59:36', '2024-06-05 22:59:36', NULL),
(3, 'Novel', 'novel', '2024-06-05 22:59:47', '2024-06-05 22:59:47', NULL),
(4, 'Romance', 'romance', '2024-06-05 22:59:58', '2024-06-05 22:59:58', NULL),
(5, 'Fantasi', 'fantasi', '2024-06-05 23:00:07', '2024-06-05 23:00:07', NULL),
(6, 'Science Fiction (Sci-Fi)', 'science-fiction-sci-fi', '2024-06-05 23:00:26', '2024-06-05 23:00:26', NULL),
(7, 'Fan Fiction (Fan-Fic)', 'fan-fiction-fan-fic', '2024-06-05 23:00:36', '2024-06-05 23:00:36', NULL),
(8, 'Horror', 'horror', '2024-06-05 23:00:44', '2024-06-05 23:00:44', NULL),
(9, 'Misteri', 'misteri', '2024-06-05 23:00:50', '2024-06-05 23:00:50', NULL),
(10, 'Thriller', 'thriller', '2024-06-05 23:00:57', '2024-06-05 23:00:57', NULL),
(11, 'Komedi', 'komedi', '2024-06-05 23:01:46', '2024-06-05 23:01:46', NULL),
(12, 'Inspiratif', 'inspiratif', '2024-06-05 23:01:54', '2024-06-05 23:01:54', NULL),
(13, 'Sejarah', 'sejarah', '2024-06-05 23:02:10', '2024-06-05 23:02:10', NULL),
(14, 'Psikologi', 'psikologi', '2024-06-05 23:02:20', '2024-06-05 23:02:20', NULL),
(15, 'Petualangan', 'petualangan', '2024-06-05 23:02:34', '2024-06-05 23:02:34', NULL),
(16, 'Dongeng', 'dongeng', '2024-06-05 23:04:16', '2024-06-05 23:04:16', NULL);

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(23, '2024_04_29_011645_creat_roles_table', 1),
(24, '2024_04_29_021210_add_role_id_column_to_users_table', 1),
(25, '2024_04_29_153309_create_categories_table', 1),
(26, '2024_04_29_153447_create_books_table', 1),
(27, '2024_04_29_153836_create_book_category_table', 1),
(28, '2024_04_29_154920_create_rent_logs_table', 1),
(29, '2024_05_09_072557_add_slug_column_to_categories_tabele', 1),
(30, '2024_05_09_074005_change_slug_column_into_nullable_in_categories_table', 1),
(31, '2024_05_09_131012_add_soft_delete_column_to_categories_table', 1),
(32, '2024_05_10_013223_add_slug_cover_column_to_books_table', 1),
(33, '2024_05_11_023927_add_soft_delete_to_books_table', 1),
(34, '2024_05_12_031452_add_slug_to_users_table', 1),
(35, '2024_05_12_044208_add_softdelete_to_users_table', 1),
(36, '2024_06_06_011911_create_contacts_table', 1),
(37, '2024_06_06_015109_create_contacts_table', 2),
(38, '2024_06_06_133723_create_contacts_table', 3);

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
-- Table structure for table `rent_logs`
--

CREATE TABLE `rent_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `rent_date` date NOT NULL,
  `return_date` date NOT NULL,
  `actual_return_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'client', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `slug`, `password`, `phone`, `address`, `status`, `created_at`, `updated_at`, `deleted_at`, `role_id`) VALUES
(1, 'admin', 'admin', '$2y$10$kyaFzeyv3OT5Sw9jSEsl0.iqnGsr8j4red2kGBLNTf1MXkCqX0VH.', '8232132131', 'Admin', 'active', NULL, NULL, NULL, 1),
(2, 'Azka GG', 'azka-gg', '$2y$10$e7TZ8VBY3NYcQAqVLBzlgujesZHroATItR.VDVty4zxZdZbvX.Ncu', NULL, 'Azka GG', 'active', '2024-06-05 22:57:17', '2024-06-05 22:57:50', NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_category_book_id_foreign` (`book_id`),
  ADD KEY `book_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `rent_logs`
--
ALTER TABLE `rent_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rent_logs_user_id_foreign` (`user_id`),
  ADD KEY `rent_logs_book_id_foreign` (`book_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent_logs`
--
ALTER TABLE `rent_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_category`
--
ALTER TABLE `book_category`
  ADD CONSTRAINT `book_category_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `rent_logs`
--
ALTER TABLE `rent_logs`
  ADD CONSTRAINT `rent_logs_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `rent_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
