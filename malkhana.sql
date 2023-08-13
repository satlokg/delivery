-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 08:48 PM
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
-- Database: `malkhana`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, 'mal_mukadmati', 'माल मुकदमाती', '2023-03-26 02:37:25', '2023-03-26 02:37:25'),
(2, 'mal_lawarish', 'माल लावारिस', '2023-03-26 02:37:25', '2023-03-26 02:37:25'),
(3, 'mal_kurki', 'माल कुर्की', '2023-03-26 02:37:25', '2023-03-26 02:37:25'),
(4, 'anya_mal', 'अन्य माल', '2023-03-26 02:37:25', '2023-03-26 02:37:25'),
(5, 'vahan_sthiti', 'वाहन स्थिति', '2023-03-26 02:37:25', '2023-03-26 02:37:25'),
(6, 'mvact', 'एमवी एक्ट (सीज)', '2023-03-26 02:37:25', '2023-03-26 02:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `extra_good_details`
--

CREATE TABLE `extra_good_details` (
  `id` int(11) NOT NULL,
  `malkhana_id` int(11) NOT NULL,
  `date_of_admission` varchar(255) DEFAULT NULL,
  `admission_by` varchar(255) DEFAULT NULL,
  `good_details` text DEFAULT NULL,
  `court_name` varchar(255) DEFAULT NULL,
  `release_date` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `kurki_details`
--

CREATE TABLE `kurki_details` (
  `id` int(11) NOT NULL,
  `malkhana_id` int(11) NOT NULL,
  `goods_entry_date_no` varchar(255) DEFAULT NULL,
  `court_name` varchar(255) DEFAULT NULL,
  `state_of_charge` text DEFAULT NULL,
  `date_of_decision` varchar(255) DEFAULT NULL,
  `details_of_appeal` text DEFAULT NULL,
  `release_date_of_goods` varchar(255) DEFAULT NULL,
  `extra` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lawaris_details`
--

CREATE TABLE `lawaris_details` (
  `id` int(11) NOT NULL,
  `malkhana_id` int(11) NOT NULL,
  `date_of_admission` varchar(255) DEFAULT NULL,
  `admission_by` varchar(255) DEFAULT NULL,
  `goods_owner_and_address` text DEFAULT NULL,
  `court_name` varchar(255) DEFAULT NULL,
  `release_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `malkhanas`
--

CREATE TABLE `malkhanas` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `district` varchar(255) DEFAULT NULL,
  `thana` varchar(255) DEFAULT NULL,
  `yrs` varchar(255) DEFAULT NULL,
  `mas` varchar(255) DEFAULT NULL,
  `dhara` varchar(255) DEFAULT NULL,
  `vadi` varchar(255) DEFAULT NULL,
  `prativadi` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `vivechak` varchar(255) DEFAULT NULL,
  `condition` text DEFAULT NULL,
  `goods_condition` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `malkhanas`
--

INSERT INTO `malkhanas` (`id`, `category_id`, `district`, `thana`, `yrs`, `mas`, `dhara`, `vadi`, `prativadi`, `detail`, `vivechak`, `condition`, `goods_condition`, `created_at`, `updated_at`) VALUES
(1, 1, 'hgvv', 'v', 'jh', 'jhvj', 'vjhv', 'jhv', 'jhv', 'jhvj', 'hvjh', 'vhj', 'vjhv', '2023-03-26 12:11:42', '2023-03-26 12:11:42'),
(2, 4, 'vhjvhjv', 'jhvj', 'hvjh', 'vjhv', 'jhv', 'jhv', 'jhvjh', 'vj', 'vjhv', 'jv', 'hhj', '2023-03-26 12:44:35', '2023-03-26 12:44:35'),
(3, 6, 'jbjhbjh', 'bjhb', 'hjb', 'bk', 'bkjb', 'kjbkj', 'bkjb', 'kjb', 'kjbkj', 'bkj', 'bkjb', '2023-03-26 12:45:11', '2023-03-26 12:45:11'),
(4, 6, 'kjb', 'jkbkjb', 'kjb', 'kjb', 'kjbjk', 'bjk', 'bjkb', 'kjb', 'kjbk', 'jbkj', 'bk', '2023-03-26 12:48:49', '2023-03-26 12:48:49'),
(5, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-26 12:55:25', '2023-03-26 12:55:25'),
(6, 2, 'hbjhvhj', 'vhv', 'kb', 'kbkj', 'bkjb', 'kjb', 'kjb', 'kjbkj', 'bkj', 'bkj', 'bkjb', '2023-03-26 13:01:08', '2023-03-26 13:01:08');

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
(5, '2023_01_25_172127_create_permissions_table', 1),
(6, '2023_01_25_172143_create_roles_table', 1),
(7, '2023_01_25_172400_create_users_permissions_table', 1),
(8, '2023_01_25_172440_create_users_roles_table', 1),
(9, '2023_01_25_172520_create_roles_permissions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mukdmati_details`
--

CREATE TABLE `mukdmati_details` (
  `id` int(11) NOT NULL,
  `malkhana_id` int(11) NOT NULL,
  `goods_entry_date_no` varchar(255) DEFAULT NULL,
  `first_entry_of_goods` varchar(255) DEFAULT NULL,
  `goods_entry_by` varchar(255) DEFAULT NULL,
  `type_of_goods` varchar(255) DEFAULT NULL,
  `details_of_goods` text DEFAULT NULL,
  `goods_out_details` text DEFAULT NULL,
  `goods_in_details` text DEFAULT NULL,
  `court_name` varchar(255) DEFAULT NULL,
  `state_of_charge` varchar(255) DEFAULT NULL,
  `date_of_decision:` varchar(255) DEFAULT NULL,
  `details_of_appeal` text DEFAULT NULL,
  `release_date_of_goods` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mvact_details`
--

CREATE TABLE `mvact_details` (
  `id` int(11) NOT NULL,
  `malkhana_id` int(11) NOT NULL,
  `date_of_admission` varchar(255) DEFAULT NULL,
  `admission_by` varchar(255) DEFAULT NULL,
  `type_of_vehicle` varchar(255) DEFAULT NULL,
  `registration_no` varchar(255) DEFAULT NULL,
  `engine_no` varchar(255) DEFAULT NULL,
  `chesis_no` varchar(255) DEFAULT NULL,
  `court_name` varchar(255) DEFAULT NULL,
  `extra` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles_permissions`
--

CREATE TABLE `roles_permissions` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 'satlok gupta', 'satlok.gupta@yahoo.com', NULL, '$2y$10$wSVF4/LaDGKRGW6GSW.NJOvq6qloyum8PReKDOmKoQfDoqk/n4cgK', NULL, '2023-03-22 21:39:14', '2023-03-22 21:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `users_permissions`
--

CREATE TABLE `users_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_roles`
--

CREATE TABLE `users_roles` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `extra_good_details`
--
ALTER TABLE `extra_good_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kurki_details`
--
ALTER TABLE `kurki_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawaris_details`
--
ALTER TABLE `lawaris_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `malkhanas`
--
ALTER TABLE `malkhanas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mukdmati_details`
--
ALTER TABLE `mukdmati_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mvact_details`
--
ALTER TABLE `mvact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD PRIMARY KEY (`role_id`,`permission_id`),
  ADD KEY `roles_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `users_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `users_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `extra_good_details`
--
ALTER TABLE `extra_good_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kurki_details`
--
ALTER TABLE `kurki_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lawaris_details`
--
ALTER TABLE `lawaris_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `malkhanas`
--
ALTER TABLE `malkhanas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mukdmati_details`
--
ALTER TABLE `mukdmati_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mvact_details`
--
ALTER TABLE `mvact_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `roles_permissions`
--
ALTER TABLE `roles_permissions`
  ADD CONSTRAINT `roles_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_permissions`
--
ALTER TABLE `users_permissions`
  ADD CONSTRAINT `users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_roles`
--
ALTER TABLE `users_roles`
  ADD CONSTRAINT `users_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
