-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2022 at 11:12 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `g.p.e`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finger_devices`
--

DROP TABLE IF EXISTS `finger_devices`;
CREATE TABLE IF NOT EXISTS `finger_devices` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `serialNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `finger_devices_serialnumber_unique` (`serialNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(22, '2014_10_12_000000_create_users_table', 8),
(23, '2014_10_12_100000_create_password_resets_table', 8),
(5, '2022_04_28_145230_create_personnels_table', 2),
(6, '2022_05_02_210801_create_schedules_table', 3),
(7, '2022_05_09_140941_create_personnels_table', 4),
(8, '2022_05_09_142110_create_personnels_table', 5),
(24, '2019_08_19_000000_create_failed_jobs_table', 8),
(25, '2019_12_14_000001_create_personal_access_tokens_table', 8),
(26, '2022_05_09_195627_create_personnels_table', 8),
(18, '2022_06_02_045745_create_plannings_table', 6),
(19, '2022_06_08_082455_create_plannings_table', 7),
(27, '2022_05_09_212536_create_finger_devices_table', 8),
(28, '2022_06_10_161621_create_plannings_table', 8),
(29, '2022_06_15_115107_create_years_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personnels`
--

DROP TABLE IF EXISTS `personnels`;
CREATE TABLE IF NOT EXISTS `personnels` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idB` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personnels_name_unique` (`name`),
  UNIQUE KEY `personnels_idb_unique` (`idB`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personnels`
--

INSERT INTO `personnels` (`id`, `name`, `role`, `idB`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'Cadre Administratif', NULL, '2022-06-15 21:15:52', '2022-06-15 21:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `plannings`
--

DROP TABLE IF EXISTS `plannings`;
CREATE TABLE IF NOT EXISTS `plannings` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Lundi` int(11) NOT NULL,
  `Mardi` int(11) NOT NULL,
  `Mercredi` int(11) NOT NULL,
  `Jeudi` int(11) NOT NULL,
  `Vendredi` int(11) NOT NULL,
  `Samedi` int(11) NOT NULL,
  `Dimanche` int(11) NOT NULL,
  `Employee` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `plannings_employee_foreign` (`Employee`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user.png',
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `image`, `year`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dorcas Oben', 'dorcasoben2002@gmail.com', NULL, 'user.png', '2021-2022', '$2y$10$ilwcWXJim/NC452i6TQcIenz6o0Lrmrd/3ulosVBEueTsTTpx80jm', NULL, '2022-06-15 20:58:11', '2022-06-15 20:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

DROP TABLE IF EXISTS `years`;
CREATE TABLE IF NOT EXISTS `years` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `libelle`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, '2021-2022', '2022-01-01', '2022-12-31', NULL, NULL),
(2, '2022-2023', '2023-01-01', '2023-12-31', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
