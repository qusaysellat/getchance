-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 17, 2022 at 06:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getchance`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importance` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `importance`, `created_at`, `updated_at`) VALUES
(2, 'Computer Science', 6, NULL, '2022-09-14 10:47:15'),
(3, 'Electrical Engineering', 2, '2021-07-03 14:19:33', '2022-09-14 10:45:05'),
(4, 'Electronics Engineering', 0, '2021-07-03 14:20:41', '2022-06-25 15:58:37'),
(5, 'Mechanical Engineering', 0, '2021-07-03 14:24:21', '2021-07-03 14:24:21'),
(6, 'Civil Engineering', 0, '2021-07-03 14:28:40', '2021-07-03 14:28:40'),
(11, 'Business Administration', 2, '2022-06-23 11:13:17', '2022-06-26 15:43:42'),
(14, 'Public Service', 0, '2022-06-25 14:55:56', '2022-06-25 15:21:26'),
(15, 'Arts', 0, '2022-06-25 14:56:23', '2022-06-25 14:56:23'),
(16, 'Foreign Language', 1, '2022-06-25 14:56:51', '2022-06-26 15:45:12'),
(17, 'Tourism', 1, '2022-06-25 14:57:36', '2022-06-26 15:55:03'),
(18, 'Agriculture', 0, '2022-06-25 14:58:30', '2022-06-25 14:58:30'),
(19, 'Mining', 0, '2022-06-25 14:58:45', '2022-06-25 14:58:45'),
(20, 'Transportation', 0, '2022-06-25 14:58:58', '2022-06-25 14:58:58'),
(21, 'Construction', 0, '2022-06-25 14:59:26', '2022-06-25 14:59:26'),
(22, 'Sales', 0, '2022-06-25 14:59:36', '2022-06-25 14:59:36'),
(23, 'Education', 1, '2022-06-25 15:00:52', '2022-06-26 15:35:29'),
(24, 'Medical', 0, '2022-06-25 15:01:03', '2022-06-25 15:01:03'),
(25, 'Sports', 0, '2022-06-25 15:03:33', '2022-06-25 15:03:33'),
(26, 'Research', 0, '2022-06-25 15:03:52', '2022-06-25 15:03:52'),
(27, 'Culture', 0, '2022-06-25 15:05:42', '2022-06-25 15:21:26');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `phone`, `email`, `website`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Latakia, Syria', '966855744', 'tishreenuniversity@gmail.com', 'https://www.tishreenuniversityinsyria.com', 6, '2021-07-12 14:10:27', '2022-09-14 10:42:24'),
(2, 'Damascus, Syria', '911833755', 'telecomcompanyemail@gmail.com', 'https://www.telecomcompanyinsyria.com/', 7, '2021-07-12 14:11:47', '2022-09-14 10:46:06'),
(3, 'Dubai, UAE', '977833544', 'webcompany@gmail.com', 'https://www.webcompany.com', 10, '2022-06-21 17:33:00', '2022-06-26 03:24:26'),
(4, 'Damascus, Syria', '933822711', 'damascusuniversity@gmail.com', 'https://www.damascusuniversity.com', 11, '2022-06-21 17:33:44', '2022-06-26 02:56:58'),
(5, 'Bhubaneswar, India', '944866755', 'cvraman@gmail.com', 'https://www.cvraman.com', 14, '2022-06-26 03:04:07', '2022-06-26 03:13:17');

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
-- Table structure for table `friendships`
--

CREATE TABLE `friendships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `approved` int(11) NOT NULL,
  `comment1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user1_id` bigint(20) UNSIGNED NOT NULL,
  `user2_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friendships`
--

INSERT INTO `friendships` (`id`, `approved`, `comment1`, `comment2`, `user1_id`, `user2_id`, `created_at`, `updated_at`) VALUES
(8, 1, NULL, NULL, 2, 5, '2022-06-22 18:41:22', '2022-06-23 04:02:02'),
(10, 1, NULL, NULL, 13, 2, '2022-06-26 06:18:08', '2022-09-14 10:53:05'),
(11, 0, NULL, NULL, 13, 8, '2022-06-26 06:18:21', '2022-06-26 06:18:21'),
(12, 0, NULL, NULL, 12, 9, '2022-06-26 06:18:44', '2022-06-26 06:18:44'),
(13, 0, NULL, NULL, 12, 8, '2022-06-26 06:18:51', '2022-06-26 06:18:51'),
(14, 0, NULL, NULL, 12, 2, '2022-06-26 06:18:57', '2022-06-26 06:18:57'),
(15, 0, NULL, NULL, 9, 8, '2022-06-26 06:19:15', '2022-06-26 06:19:15'),
(16, 0, NULL, NULL, 9, 5, '2022-06-26 06:19:22', '2022-06-26 06:19:22'),
(17, 0, NULL, NULL, 9, 2, '2022-06-26 06:19:29', '2022-06-26 06:19:29'),
(18, 0, NULL, NULL, 8, 2, '2022-06-26 06:19:52', '2022-06-26 06:19:52'),
(19, 0, NULL, NULL, 15, 5, '2022-09-06 09:26:23', '2022-09-06 09:26:23');

-- --------------------------------------------------------

--
-- Table structure for table `interactions`
--

CREATE TABLE `interactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interactions`
--

INSERT INTO `interactions` (`id`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(14, 13, 15, NULL, NULL),
(15, 12, 14, NULL, NULL),
(16, 12, 15, NULL, NULL),
(17, 12, 20, NULL, NULL),
(18, 9, 14, NULL, NULL),
(19, 9, 15, NULL, NULL),
(20, 9, 17, NULL, NULL),
(21, 8, 15, NULL, NULL),
(22, 8, 20, NULL, NULL),
(23, 5, 14, NULL, NULL),
(24, 5, 15, NULL, NULL),
(25, 5, 17, NULL, NULL),
(26, 2, 14, NULL, NULL),
(27, 2, 15, NULL, NULL),
(28, 2, 20, NULL, NULL),
(29, 15, 14, NULL, NULL),
(30, 2, 17, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_positions`
--

CREATE TABLE `job_positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `depname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_positions`
--

INSERT INTO `job_positions` (`id`, `depname`, `position`, `description`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(4, 'IT', 'Programmer', 'Programming tasks related to the business process of the company.', 7, 2, '2021-07-14 05:54:02', '2022-06-26 03:18:55'),
(6, 'Sales', 'Sales Manager', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 7, 22, '2022-06-23 01:52:55', '2022-06-26 03:21:03'),
(7, 'R & D', 'Researcher', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 7, 4, '2022-06-23 01:59:29', '2022-06-26 03:22:11'),
(11, 'IT', 'Back-end Developer', 'Id diam vel quam elementum. Malesuada nunc vel risus commodo viverra maecenas. Condimentum vitae sapien pellentesque habitant morbi tristique senectus et netus. Tortor aliquam nulla facilisi cras fermentum odio eu feugiat. Convallis aenean et tortor at risus viverra adipiscing at.', 10, 2, '2022-06-26 03:25:12', '2022-06-26 03:25:12'),
(12, 'IT', 'Software development', 'Aliquet lectus proin nibh nisl condimentum. Viverra aliquet eget sit amet tellus cras. At consectetur lorem donec massa sapien faucibus et molestie. Erat imperdiet sed euismod nisi porta lorem mollis aliquam.', 10, 2, '2022-06-26 03:27:08', '2022-06-26 03:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `job_position_skill`
--

CREATE TABLE `job_position_skill` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_position_id` bigint(20) UNSIGNED NOT NULL,
  `skill_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_position_skill`
--

INSERT INTO `job_position_skill` (`id`, `job_position_id`, `skill_id`, `created_at`, `updated_at`) VALUES
(43, 4, 1, NULL, NULL),
(44, 4, 5, NULL, NULL),
(45, 4, 6, NULL, NULL),
(46, 6, 29, NULL, NULL),
(47, 6, 26, NULL, NULL),
(48, 6, 41, NULL, NULL),
(49, 7, 14, NULL, NULL),
(50, 7, 20, NULL, NULL),
(51, 7, 25, NULL, NULL),
(52, 11, 8, NULL, NULL),
(53, 11, 9, NULL, NULL),
(54, 11, 5, NULL, NULL),
(55, 12, 1, NULL, NULL),
(56, 12, 5, NULL, NULL),
(57, 12, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_relationships`
--

CREATE TABLE `job_relationships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start` date NOT NULL,
  `finish` date NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `rating` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `job_position_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_relationships`
--

INSERT INTO `job_relationships` (`id`, `start`, `finish`, `approved`, `rating`, `comment`, `user_id`, `job_position_id`, `created_at`, `updated_at`) VALUES
(16, '2021-06-01', '2022-06-01', 1, 8, 'good', 5, 7, '2022-06-26 05:44:51', '2022-06-26 06:39:37'),
(17, '2017-08-01', '2018-08-31', 1, 8, 'good', 2, 11, '2022-06-26 05:49:58', '2022-06-26 06:44:30'),
(18, '2018-01-01', '2022-06-30', 1, 8, 'very good', 8, 6, '2022-06-26 05:57:38', '2022-09-14 10:46:41'),
(19, '2008-01-01', '2022-06-01', 1, 9, 'good', 12, 12, '2022-06-26 06:10:20', '2022-06-26 06:44:44'),
(20, '2019-01-01', '2022-09-01', 0, NULL, NULL, 2, 12, '2022-09-14 10:51:08', '2022-09-14 10:51:08');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT 0,
  `user1_id` bigint(20) UNSIGNED NOT NULL,
  `user2_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `content`, `read`, `user1_id`, `user2_id`, `created_at`, `updated_at`) VALUES
(1, 'Hello bro', 1, 5, 2, '2021-07-16 05:11:39', '2022-09-14 10:49:27'),
(2, 'welcome bro.', 1, 2, 5, '2021-07-16 05:19:38', '2022-06-24 05:21:02'),
(3, 'how are you?', 1, 2, 5, '2021-07-16 05:19:46', '2022-06-24 05:21:02'),
(4, 'how are you', 1, 5, 2, '2021-07-16 05:58:05', '2022-09-14 10:49:27'),
(5, 'I am fine', 1, 5, 2, '2021-07-16 05:59:43', '2022-09-14 10:49:27'),
(6, 'hi', 1, 5, 2, '2021-07-16 06:00:04', '2022-09-14 10:49:27'),
(7, 'Hello from the other side', 1, 5, 2, '2021-07-16 06:01:57', '2022-09-14 10:49:27'),
(8, 'At least you can say that I am fine', 1, 5, 2, '2021-07-16 06:03:01', '2022-09-14 10:49:27'),
(9, 'this is the final message', 1, 5, 2, '2021-07-16 06:05:16', '2022-09-14 10:49:27'),
(10, 'How are you?', 1, 2, 5, '2022-06-22 12:40:30', '2022-06-24 05:21:02'),
(11, 'Hello again', 0, 2, 5, '2022-09-14 10:49:27', '2022-09-14 10:49:27');

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
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_08_19_000000_create_failed_jobs_table', 1),
(19, '2021_07_03_103732_create_categories_table', 2),
(20, '2021_07_03_103745_create_skills_table', 2),
(27, '2021_07_04_114949_create_posts_table', 3),
(28, '2021_07_10_134127_create_post_skill_table', 3),
(37, '2021_07_11_125709_create_contacts_table', 4),
(38, '2021_07_11_125732_create_resumes_table', 4),
(39, '2021_07_11_125857_create_study_programs_table', 4),
(40, '2021_07_11_125913_create_job_positions_table', 4),
(41, '2021_07_11_125946_create_study_relationships_table', 4),
(42, '2021_07_11_130001_create_job_relationships_table', 4),
(43, '2021_07_11_130014_create_friendships_table', 4),
(44, '2021_07_11_162736_create_job_position_skill_table', 4),
(45, '2021_07_15_103239_create_interactions_table', 5),
(46, '2021_07_16_093035_create_messages_table', 6),
(47, '2021_07_16_105521_create_notifications_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` int(11) DEFAULT NULL,
  `notificationtype` int(11) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `content`, `url`, `notificationtype`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'person sent you a new message.', NULL, 0, 2, '2021-07-16 06:05:16', '2021-07-16 06:05:16'),
(5, 'qusaysellat sent you a friend request.', NULL, 0, 5, '2021-07-16 06:38:56', '2021-07-16 06:38:56'),
(6, 'person accepted your friend request.', NULL, 0, 2, '2021-07-16 06:47:32', '2021-07-16 06:47:32'),
(7, 'person sent you a job position request.', NULL, 0, 7, '2021-07-16 12:05:31', '2021-07-16 12:05:31'),
(9, 'company replied to your job position request.', NULL, 0, 5, '2021-07-16 12:14:46', '2021-07-16 12:14:46'),
(10, 'person sent you a study program request.', NULL, 0, 6, '2021-07-16 12:20:52', '2021-07-16 12:20:52'),
(11, 'university replied to your study program request.', NULL, 0, 5, '2021-07-16 12:22:57', '2021-07-16 12:22:57'),
(12, 'qusaysellat sent you a new message.', NULL, 0, 5, '2022-06-22 12:40:30', '2022-06-22 12:40:30'),
(13, 'qusaysellat sent you a study program request.', NULL, 0, 6, '2022-06-22 17:20:51', '2022-06-22 17:20:51'),
(14, 'qusaysellat sent you a job position request.', NULL, 0, 7, '2022-06-22 17:42:46', '2022-06-22 17:42:46'),
(15, 'qusaysellat sent you a friend request.', NULL, 0, 5, '2022-06-22 18:13:16', '2022-06-22 18:13:16'),
(16, 'qusaysellat sent you a friend request.', NULL, 0, 5, '2022-06-22 18:35:12', '2022-06-22 18:35:12'),
(17, 'qusaysellat sent you a friend request.', NULL, 0, 5, '2022-06-22 18:41:22', '2022-06-22 18:41:22'),
(18, 'person sent you a friend request.', NULL, 0, 9, '2022-06-22 18:48:37', '2022-06-22 18:48:37'),
(19, 'company replied to your job position request.', NULL, 0, 2, '2022-06-23 01:40:26', '2022-06-23 01:40:26'),
(20, 'university replied to your study program request.', NULL, 0, 5, '2022-06-23 02:35:46', '2022-06-23 02:35:46'),
(21, 'company replied to your job position request.', NULL, 0, 2, '2022-06-23 02:37:06', '2022-06-23 02:37:06'),
(22, 'person accepted your friend request.', NULL, 0, 2, '2022-06-23 04:02:02', '2022-06-23 04:02:02'),
(23, 'person sent you a study program request.', NULL, 0, 6, '2022-06-23 04:10:36', '2022-06-23 04:10:36'),
(24, 'person sent you a job position request.', NULL, 0, 7, '2022-06-23 04:14:57', '2022-06-23 04:14:57'),
(25, 'person sent you a job position request.', NULL, 0, 7, '2022-06-23 04:23:52', '2022-06-23 04:23:52'),
(26, 'person sent you a study program request.', NULL, 0, 6, '2022-06-23 04:24:37', '2022-06-23 04:24:37'),
(27, 'company replied to your job position request.', NULL, 0, 2, '2022-06-23 04:46:08', '2022-06-23 04:46:08'),
(28, 'university replied to your study program request.', NULL, 0, 2, '2022-06-23 04:48:02', '2022-06-23 04:48:02'),
(29, 'qusaysellat sent you a job position request.', NULL, 0, 7, '2022-06-24 10:09:34', '2022-06-24 10:09:34'),
(30, 'company replied to your job position request.', NULL, 0, 2, '2022-06-24 10:10:33', '2022-06-24 10:10:33'),
(31, 'designtest sent you a job position request.', NULL, 0, 7, '2022-06-24 10:23:56', '2022-06-24 10:23:56'),
(32, 'designtest sent you a job position request.', NULL, 0, 7, '2022-06-24 10:24:33', '2022-06-24 10:24:33'),
(33, 'designtest sent you a study program request.', NULL, 0, 6, '2022-06-24 10:24:49', '2022-06-24 10:24:49'),
(34, 'designtest sent you a study program request.', NULL, 0, 6, '2022-06-24 10:25:02', '2022-06-24 10:25:02'),
(35, 'company replied to your job position request.', NULL, 0, 9, '2022-06-24 10:25:45', '2022-06-24 10:25:45'),
(36, 'university replied to your study program request.', NULL, 0, 9, '2022-06-24 10:26:27', '2022-06-24 10:26:27'),
(37, 'Mohammad Adel sent you a study program request.', NULL, 0, 6, '2022-06-26 05:42:02', '2022-06-26 05:42:02'),
(38, 'Mohammad Adel sent you a study program request.', NULL, 0, 14, '2022-06-26 05:43:06', '2022-06-26 05:43:06'),
(39, 'Mohammad Adel sent you a job position request.', NULL, 0, 7, '2022-06-26 05:44:51', '2022-06-26 05:44:51'),
(40, 'Qusay Sellat sent you a study program request.', NULL, 0, 6, '2022-06-26 05:47:45', '2022-06-26 05:47:45'),
(41, 'Qusay Sellat sent you a study program request.', NULL, 0, 14, '2022-06-26 05:48:51', '2022-06-26 05:48:51'),
(42, 'Qusay Sellat sent you a job position request.', NULL, 0, 10, '2022-06-26 05:49:58', '2022-06-26 05:49:58'),
(43, 'Ahmed Mostafa sent you a study program request.', NULL, 0, 11, '2022-06-26 05:56:55', '2022-06-26 05:56:55'),
(44, 'Ahmed Mostafa sent you a job position request.', NULL, 0, 7, '2022-06-26 05:57:38', '2022-06-26 05:57:38'),
(45, 'Ismail Mahmoud sent you a study program request.', NULL, 0, 6, '2022-06-26 06:02:12', '2022-06-26 06:02:12'),
(46, 'Ibrahim Daoud sent you a study program request.', NULL, 0, 11, '2022-06-26 06:07:27', '2022-06-26 06:07:27'),
(47, 'Ibrahim Daoud sent you a job position request.', NULL, 0, 10, '2022-06-26 06:10:20', '2022-06-26 06:10:20'),
(48, 'Basima Ibrahim sent you a study program request.', NULL, 0, 6, '2022-06-26 06:17:33', '2022-06-26 06:17:33'),
(49, 'Basima Ibrahim sent you a friend request.', NULL, 0, 2, '2022-06-26 06:18:08', '2022-06-26 06:18:08'),
(50, 'Basima Ibrahim sent you a friend request.', NULL, 0, 8, '2022-06-26 06:18:21', '2022-06-26 06:18:21'),
(51, 'Ibrahim Daoud sent you a friend request.', NULL, 0, 9, '2022-06-26 06:18:44', '2022-06-26 06:18:44'),
(52, 'Ibrahim Daoud sent you a friend request.', NULL, 0, 8, '2022-06-26 06:18:51', '2022-06-26 06:18:51'),
(53, 'Ibrahim Daoud sent you a friend request.', NULL, 0, 2, '2022-06-26 06:18:57', '2022-06-26 06:18:57'),
(54, 'Ismail Mahmoud sent you a friend request.', NULL, 0, 8, '2022-06-26 06:19:15', '2022-06-26 06:19:15'),
(55, 'Ismail Mahmoud sent you a friend request.', NULL, 0, 5, '2022-06-26 06:19:22', '2022-06-26 06:19:22'),
(56, 'Ismail Mahmoud sent you a friend request.', NULL, 0, 2, '2022-06-26 06:19:29', '2022-06-26 06:19:29'),
(57, 'Ahmed Mostafa sent you a friend request.', NULL, 0, 2, '2022-06-26 06:19:52', '2022-06-26 06:19:52'),
(58, 'Tishreen University replied to your study program request.', NULL, 0, 9, '2022-06-26 06:21:55', '2022-06-26 06:21:55'),
(59, 'Tishreen University replied to your study program request.', NULL, 0, 9, '2022-06-26 06:22:21', '2022-06-26 06:22:21'),
(60, 'Tishreen University replied to your study program request.', NULL, 0, 13, '2022-06-26 06:23:06', '2022-06-26 06:23:06'),
(61, 'Tishreen University replied to your study program request.', NULL, 0, 2, '2022-06-26 06:23:21', '2022-06-26 06:23:21'),
(62, 'Tishreen University replied to your study program request.', NULL, 0, 5, '2022-06-26 06:24:08', '2022-06-26 06:24:08'),
(63, 'National Telecom replied to your job position request.', NULL, 0, 8, '2022-06-26 06:24:56', '2022-06-26 06:24:56'),
(64, 'National Telecom replied to your job position request.', NULL, 0, 5, '2022-06-26 06:25:40', '2022-06-26 06:25:40'),
(65, 'National Telecom replied to your job position request.', NULL, 0, 5, '2022-06-26 06:27:10', '2022-06-26 06:27:10'),
(66, 'National Telecom replied to your job position request.', NULL, 0, 5, '2022-06-26 06:27:16', '2022-06-26 06:27:16'),
(67, 'National Telecom replied to your job position request.', NULL, 0, 5, '2022-06-26 06:39:28', '2022-06-26 06:39:28'),
(68, 'National Telecom replied to your job position request.', NULL, 0, 5, '2022-06-26 06:39:37', '2022-06-26 06:39:37'),
(69, 'Damascus University replied to your study program request.', NULL, 0, 12, '2022-06-26 06:43:19', '2022-06-26 06:43:19'),
(70, 'Damascus University replied to your study program request.', NULL, 0, 8, '2022-06-26 06:43:40', '2022-06-26 06:43:40'),
(71, 'Web Company replied to your job position request.', NULL, 0, 2, '2022-06-26 06:44:30', '2022-06-26 06:44:30'),
(72, 'Web Company replied to your job position request.', NULL, 0, 12, '2022-06-26 06:44:44', '2022-06-26 06:44:44'),
(73, 'Rania Youssef sent you a friend request.', NULL, 0, 5, '2022-09-06 09:26:23', '2022-09-06 09:26:23'),
(74, 'Tishreen University replied to your study program request.', NULL, 0, 9, '2022-09-14 10:42:59', '2022-09-14 10:42:59'),
(75, 'National Telecom replied to your job position request.', NULL, 0, 8, '2022-09-14 10:46:41', '2022-09-14 10:46:41'),
(76, 'Qusay Sellat sent you a new message.', NULL, 0, 5, '2022-09-14 10:49:27', '2022-09-14 10:49:27'),
(77, 'Qusay Sellat sent you a job position request.', NULL, 0, 10, '2022-09-14 10:51:08', '2022-09-14 10:51:08'),
(78, 'Qusay Sellat sent you a study program request.', NULL, 0, 11, '2022-09-14 10:52:04', '2022-09-14 10:52:04'),
(79, 'Qusay Sellat accepted your friend request.', NULL, 0, 13, '2022-09-14 10:53:05', '2022-09-14 10:53:05');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `posttype` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `posttype`, `status`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(14, 'New jobs at IT department', 'Requirements\r\nBSc degree in Computer Science/Computer Engineering. Masters is a plus.\r\nStrong in-depth understanding of the entire web development process (design, development, and deployment)\r\nStrong competencies in algorithms and software architecture.\r\n5+ years of experience as a Python Back-end developer.\r\n4+ years of work experience in Python coding language.\r\n3+ years of experience in developing REST APIs.\r\nStrong experience in Relational Databases (MySQL, SQL Server or PostgreSQL).\r\nExperience in non-relational databases (Mongo DB, Cassandra) is a big plus.\r\nExperience using AWS cloud and its resources/services is a big plus.\r\nPrevious experience in automated testing including unit testing & UI testing.\r\nStrong knowledge in Continuous Integration & Continuous Deployment (CI/CD) utilizing Docker containers.\r\nFamiliarity with front-end languages (e.g. HTML, JavaScript, and CSS).\r\nExcellent analytical, time management and teamwork skills.', 2, 0, 7, 2, '2022-06-26 15:23:09', '2022-09-14 10:47:15'),
(15, 'We are hiring', 'Justo donec enim diam vulputate ut. Lacus luctus accumsan tortor posuere ac ut consequat semper. Velit euismod in pellentesque massa placerat duis ultricies lacus sed. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin. Ut placerat orci nulla pellentesque.', 2, 0, 7, 2, '2022-06-26 15:23:49', '2022-06-26 15:23:49'),
(16, 'Announcement', 'Purus gravida quis blandit turpis cursus in. Augue lacus viverra vitae congue eu consequat ac. Id venenatis a condimentum vitae sapien. Mi proin sed libero enim sed faucibus turpis in eu. Magna ac placerat vestibulum lectus mauris ultrices. Ac feugiat sed lectus vestibulum mattis. Egestas quis ipsum suspendisse ultrices gravida.', 1, 0, 7, 2, '2022-06-26 15:27:47', '2022-06-26 15:27:47'),
(17, 'New Vacancies', 'An amazing opportunity has come up for a Back End Python Developer for a client of ours who is a global company with their regional offices in Dubai.\r\n\r\nResponsibilities\r\nGather and address technical and design requirements.\r\nImplement new features requested by our business and trading team.\r\nRefactor existing applications to optimize its performance through setting the appropriate architecture and integrating the best practices and standards.\r\nParticipate in the entire application lifecycle mainly focusing on coding, debugging and testing.\r\nTroubleshoot and debug applications.\r\nRequirementsIdeal candidate will have the following.\r\n\r\nRequirements\r\nBSc degree in Computer Science/Computer Engineering. Masters is a plus.\r\nStrong in-depth understanding of the entire web development process (design, development, and deployment)', 2, 0, 10, 2, '2022-06-26 15:29:32', '2022-06-26 15:29:32'),
(18, 'New study programs are open', 'Nulla posuere sollicitudin aliquam ultrices sagittis orci. Facilisis sed odio morbi quis commodo odio aenean sed. Eu tincidunt tortor aliquam nulla facilisi cras fermentum. Donec pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Sociis natoque penatibus et magnis dis parturient montes nascetur. Porttitor eget dolor morbi non arcu risus quis varius. Sem et tortor consequat id porta nibh venenatis cras sed. Nisl pretium fusce id velit ut tortor pretium. Quis ipsum suspendisse ultrices gravida dictum fusce. Gravida quis blandit turpis cursus in hac habitasse platea dictumst. Nunc faucibus a pellentesque sit amet. Facilisis sed odio morbi quis commodo odio aenean sed.', 1, 0, 6, 3, '2022-06-26 15:31:06', '2022-06-26 15:31:06'),
(19, 'Join our programs', 'Id venenatis a condimentum vitae sapien pellentesque. Nullam ac tortor vitae purus. Enim neque volutpat ac tincidunt vitae semper quis lectus nulla. Etiam sit amet nisl purus in mollis. Lectus magna fringilla urna porttitor rhoncus dolor purus. Ultricies leo integer malesuada nunc vel risus commodo. Sed augue lacus viverra vitae congue. Habitant morbi tristique senectus et netus et malesuada.', 1, 0, 11, 23, '2022-06-26 15:35:29', '2022-06-26 15:35:29'),
(20, 'New Intermediate 1-year Program is OPEN', 'Purus gravida quis blandit turpis cursus in. Augue lacus viverra vitae congue eu consequat ac. Id venenatis a condimentum vitae sapien. Mi proin sed libero enim sed faucibus turpis in eu. Magna ac placerat vestibulum lectus mauris ultrices. Ac feugiat sed lectus vestibulum mattis. Egestas quis ipsum suspendisse ultrices gravida. Justo donec enim diam vulputate ut. Lacus luctus accumsan tortor posuere ac ut consequat semper. Velit euismod in pellentesque massa placerat duis ultricies lacus sed. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Sapien et ligula ullamcorper malesuada proin. Ut placerat orci nulla pellentesque.', 2, 0, 14, 11, '2022-06-26 15:36:50', '2022-06-26 15:37:17'),
(21, 'Job Seeking', 'I have completed a degree in Informatics Engineering - Software Engineering and Information Systems specialization, and a Master\'s degree in computer Science and Engineering - Computer vision and Deep Learning fields.\r\n\r\n- Have a solid background in programming, algorithms and data structures especially in C++ and Java as I was a contestant at International Collegiate Programming Contest - ICPC. \r\n- Have a good knowledge in software development and back-end web development with some experience in software system analysis and design and Laravel PHP framework.\r\n- Have a good knowledge in Python frameworks for Machine Learning - NumPy, TensorFlow, Keras, Pandas, ScikitLearn, and Matplotlib.', 1, 0, 2, 2, '2022-06-26 15:39:01', '2022-06-26 15:39:01'),
(22, 'my experience', 'Ultricies mi quis hendrerit dolor magna eget est lorem ipsum. Erat nam at lectus urna duis. Sed tempus urna et pharetra pharetra massa massa ultricies mi. Sed viverra ipsum nunc aliquet bibendum enim facilisis. Duis at consectetur lorem donec massa. Placerat orci nulla pellentesque dignissim enim sit amet venenatis. Mauris pellentesque pulvinar pellentesque habitant. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Orci nulla pellentesque dignissim enim sit amet venenatis.', 1, 0, 5, 3, '2022-06-26 15:41:14', '2022-06-26 15:41:14'),
(23, 'New skills obtained', 'Platea dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim. Rutrum quisque non tellus orci ac. Cras semper auctor neque vitae tempus quam pellentesque nec. Risus nec feugiat in fermentum posuere urna nec tincidunt. In dictum non consectetur a erat nam. Tincidunt praesent semper feugiat nibh sed pulvinar. Venenatis lectus magna fringilla urna porttitor.', 1, 0, 8, 11, '2022-06-26 15:43:42', '2022-06-26 15:43:42'),
(24, 'I need a job', 'Viverra accumsan in nisl nisi scelerisque eu. Adipiscing diam donec adipiscing tristique risus nec. Maecenas volutpat blandit aliquam etiam erat velit scelerisque in. Purus viverra accumsan in nisl nisi scelerisque eu ultrices vitae. Non odio euismod lacinia at quis. Scelerisque varius morbi enim nunc faucibus a pellentesque. Eget est lorem ipsum dolor. Vestibulum rhoncus est pellentesque elit. Eu scelerisque felis imperdiet proin. Tincidunt augue interdum velit euismod in pellentesque massa placerat. Dolor purus non enim praesent elementum facilisis leo vel. Consectetur a erat nam at lectus urna. Nullam non nisi est sit amet facilisis magna etiam. Ut ornare lectus sit amet est placerat in. Elit at imperdiet dui accumsan.', 1, 0, 9, 16, '2022-06-26 15:45:12', '2022-06-26 15:45:12'),
(25, 'Programming course finished', 'Dolor sed viverra ipsum nunc. Quam elementum pulvinar etiam non quam lacus suspendisse faucibus. Eu scelerisque felis imperdiet proin fermentum leo vel. At risus viverra adipiscing at. Risus commodo viverra maecenas accumsan. Amet consectetur adipiscing elit ut aliquam purus sit. Est velit egestas dui id ornare arcu. Ut enim blandit volutpat maecenas volutpat blandit aliquam etiam. Pellentesque sit amet porttitor eget dolor morbi non arcu. Odio facilisis mauris sit amet. Habitasse platea dictumst vestibulum rhoncus est pellentesque. Dolor sit amet consectetur adipiscing elit duis.', 1, 0, 12, 2, '2022-06-26 15:53:27', '2022-06-26 15:53:27'),
(26, 'Job seeking in Syria', 'Leo vel orci porta non pulvinar neque laoreet suspendisse interdum. Gravida in fermentum et sollicitudin ac orci phasellus. Ultrices neque ornare aenean euismod elementum nisi quis eleifend quam. Tristique sollicitudin nibh sit amet commodo nulla facilisi. Facilisis volutpat est velit egestas. Id venenatis a condimentum vitae. Vulputate dignissim suspendisse in est ante in nibh mauris cursus. Lacus luctus accumsan tortor posuere ac ut consequat semper viverra. Quis varius quam quisque id diam vel quam elementum pulvinar. Pharetra diam sit amet nisl suscipit adipiscing. Donec pretium vulputate sapien nec sagittis.', 1, 0, 13, 17, '2022-06-26 15:55:03', '2022-06-26 15:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `post_skill`
--

CREATE TABLE `post_skill` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `skill_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_skill`
--

INSERT INTO `post_skill` (`id`, `post_id`, `skill_id`, `created_at`, `updated_at`) VALUES
(82, 15, 13, NULL, NULL),
(83, 15, 14, NULL, NULL),
(84, 15, 17, NULL, NULL),
(91, 16, 20, NULL, NULL),
(92, 16, 25, NULL, NULL),
(93, 16, 16, NULL, NULL),
(94, 17, 8, NULL, NULL),
(95, 17, 1, NULL, NULL),
(96, 17, 9, NULL, NULL),
(100, 19, 20, NULL, NULL),
(101, 19, 9, NULL, NULL),
(102, 19, 22, NULL, NULL),
(106, 20, 26, NULL, NULL),
(107, 20, 27, NULL, NULL),
(108, 20, 28, NULL, NULL),
(109, 21, 8, NULL, NULL),
(110, 21, 5, NULL, NULL),
(111, 21, 2, NULL, NULL),
(112, 22, 13, NULL, NULL),
(113, 22, 16, NULL, NULL),
(114, 22, 14, NULL, NULL),
(115, 23, 27, NULL, NULL),
(116, 23, 9, NULL, NULL),
(117, 23, 5, NULL, NULL),
(118, 24, 30, NULL, NULL),
(119, 24, 10, NULL, NULL),
(120, 24, 33, NULL, NULL),
(121, 25, 1, NULL, NULL),
(122, 25, 2, NULL, NULL),
(123, 25, 6, NULL, NULL),
(124, 26, 30, NULL, NULL),
(125, 26, 29, NULL, NULL),
(126, 26, 35, NULL, NULL),
(133, 18, 20, NULL, NULL),
(134, 18, 15, NULL, NULL),
(135, 18, 25, NULL, NULL),
(136, 14, 8, NULL, NULL),
(137, 14, 1, NULL, NULL),
(138, 14, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `name`, `dob`, `gender`, `nationality`, `address`, `phone`, `email`, `website`, `summary`, `education`, `experience`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Mohammad Adel', '1994-02-15', 0, 'Syria', 'Latakia, Syria', '988699477', 'madel@gmail.com', 'https://www.madel.co.in/', 'Posuere urna nec tincidunt praesent semper feugiat nibh sed. Fringilla est ullamcorper eget nulla facilisi etiam dignissim diam. Cras tincidunt lobortis feugiat vivamus at augue eget arcu dictum. Libero enim sed faucibus turpis.', 'Pellentesque nec nam aliquam sem et tortor consequat. Turpis massa sed elementum tempus egestas sed. Nulla facilisi morbi tempus iaculis.', 'Nisi scelerisque eu ultrices vitae auctor eu augue ut lectus. Sed enim ut sem viverra aliquet eget sit amet tellus. Orci ac auctor augue mauris augue neque.', 5, '2021-07-12 14:07:36', '2022-06-26 05:40:41'),
(3, 'Qusay Sellat', '1993-01-01', 0, 'Syria', 'Latakia, Syria', '988766544', 'qusaysellat@gmail.com', 'https://www.google.co.in/', 'I am looking for a career in the software development industry.', 'I have completed a degree in Informatics Engineering - Software Engineering and Information Systems specialization, and a Master\'s degree in computer Science and Engineering - Computer vision and Deep Learning fields.', '- Have a solid background in programming, algorithms and data structures especially in C++ and Java as I was a contestant at International Collegiate Programming Contest - ICPC. \r\n- Have a good knowledge in software development and back-end web development with some experience in software system analysis and design and Laravel PHP framework.\r\n- Have a good knowledge in Python frameworks for Machine Learning - NumPy, TensorFlow, Keras, Pandas, ScikitLearn, and Matplotlib.', 2, NULL, '2022-06-26 02:34:16'),
(5, 'Ahmed Mostafa', '1994-04-10', 0, 'Syrian', 'Damascus, Syria', '9255366144', 'amostafa@gmail.com', 'https://www.amostafa.com', 'Faucibus vitae aliquet nec ullamcorper. Egestas dui id ornare arcu odio ut sem nulla pharetra. Dignissim convallis aenean et tortor at risus viverra.', 'Hac habitasse platea dictumst vestibulum rhoncus est. Aliquet nibh praesent tristique magna sit amet purus.', 'Non blandit massa enim nec dui. Cum sociis natoque penatibus et magnis dis. Tellus cras adipiscing enim eu turpis.', 8, '2022-06-20 09:21:04', '2022-06-26 05:55:26'),
(6, 'Isamil Mahmoud', '1998-01-01', 0, 'Syria', 'Tartous, Syria', '9377199588', 'imahmoud@gmail.com', 'https://www.imahmoud.com', 'Velit egestas dui id ornare arcu. Lectus mauris ultrices eros in cursus turpis massa. Mattis ullamcorper velit sed ullamcorper morbi. Lectus nulla at volutpat diam ut venenatis tellus in metus.', 'Eget arcu dictum varius duis at consectetur. Urna nunc id cursus metus aliquam. Cursus eget nunc scelerisque viverra mauris in.', 'Mi quis hendrerit dolor magna eget est. Turpis massa tincidunt dui ut ornare lectus. Eget egestas purus viverra accumsan. Congue eu consequat ac felis donec et odio pellentesque diam.', 9, '2022-06-21 17:27:17', '2022-06-26 06:01:26'),
(7, 'Ibrahim Daoud', '1983-06-08', 0, 'Syrian', 'Damascus, Syria', '922744566', 'idaoud@gmail.com', 'https://www.idaoud.com', 'Lorem ipsum dolor sit amet. Et molestie ac feugiat sed lectus vestibulum. Sit amet purus gravida quis blandit turpis cursus in.', 'Sit amet facilisis magna etiam. Consectetur adipiscing elit ut aliquam purus sit amet luctus venenatis. Ut pharetra sit amet aliquam id diam maecenas.', 'Iaculis urna id volutpat lacus laoreet non. Mollis nunc sed id semper risus in hendrerit gravida rutrum. Velit sed ullamcorper morbi tincidunt. Posuere lorem ipsum dolor sit amet consectetur adipiscing.', 12, '2022-06-21 17:51:29', '2022-06-26 06:06:26'),
(8, 'Basima Ibrahim', '2000-02-01', 1, 'Syria', 'Latakia, Syria', '944744822', 'bibrahim@gmail.com', 'https://www.bibrahim.com', 'In fermentum posuere urna nec tincidunt praesent semper feugiat. Sapien et ligula ullamcorper malesuada proin libero nunc consequat.', 'Integer vitae justo eget magna fermentum iaculis eu non diam. Porta non pulvinar neque laoreet suspendisse. Imperdiet sed euismod nisi porta lorem mollis.', 'Amet massa vitae tortor condimentum lacinia quis vel. Nisi est sit amet facilisis magna etiam tempor orci eu.', 13, '2022-06-25 14:49:36', '2022-06-26 06:16:57'),
(9, 'Rania Youssef', '1999-01-04', 1, 'Syrian', 'Latakia, Syria', '9999999999', 'person6@gmail.com', 'https://www.person6.com', 'Looking for a nice job.', 'IT, Tishreen University', '3 years IT department, SyriaTel', 15, '2022-09-06 09:24:41', '2022-09-06 09:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importance` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `importance`, `created_at`, `updated_at`) VALUES
(1, 'Python', 3, NULL, '2022-09-14 10:47:15'),
(2, 'C++/C', 2, NULL, '2022-06-26 15:53:27'),
(5, 'Java', 2, '2021-07-03 14:36:40', '2022-06-26 15:43:42'),
(6, 'Matlab', 1, NULL, '2022-06-26 15:53:27'),
(8, 'PHP', 3, '2022-06-23 11:22:01', '2022-09-14 10:47:15'),
(9, 'Programming', 4, '2022-06-23 11:22:14', '2022-09-14 10:47:15'),
(10, 'IT Support', 1, '2022-06-23 11:22:44', '2022-06-26 15:45:12'),
(13, 'High Current', 2, '2022-06-25 15:29:10', '2022-06-26 15:41:15'),
(14, 'Low Current', 2, '2022-06-25 15:29:16', '2022-06-26 15:41:15'),
(15, 'Power Electronics', 1, '2022-06-25 15:29:26', '2022-09-14 10:45:05'),
(16, 'Solar Power', 2, '2022-06-25 15:29:33', '2022-09-14 10:45:05'),
(17, 'PLC', 1, '2022-06-25 15:29:50', '2022-06-26 15:23:49'),
(18, 'CAD', 0, '2022-06-25 15:29:58', '2022-06-25 15:29:58'),
(19, 'HVAC', 0, '2022-06-25 15:30:02', '2022-06-25 15:30:02'),
(20, 'Electronics Design', 3, '2022-06-25 15:30:12', '2022-09-14 10:45:05'),
(21, 'Mechanical Design', 0, '2022-06-25 15:30:22', '2022-06-25 15:30:22'),
(22, 'Civil Planning', 1, '2022-06-25 15:30:41', '2022-06-26 15:35:29'),
(23, 'Construction Management', 0, '2022-06-25 15:30:52', '2022-06-25 15:30:52'),
(24, 'Transportation Planning', 0, '2022-06-25 15:31:09', '2022-06-25 15:31:09'),
(25, 'Environment Issues', 2, '2022-06-25 15:31:34', '2022-09-14 10:45:05'),
(26, 'Accounting', 1, '2022-06-25 15:32:05', '2022-06-26 15:37:17'),
(27, 'Banking', 2, '2022-06-25 15:32:11', '2022-06-26 15:43:42'),
(28, 'Cashier', 1, '2022-06-25 15:32:19', '2022-06-26 15:37:17'),
(29, 'Customer Service', 1, '2022-06-25 15:32:32', '2022-06-26 15:55:03'),
(30, 'English', 2, '2022-06-25 15:45:42', '2022-06-26 15:55:03'),
(31, 'French', 0, '2022-06-25 15:45:48', '2022-06-25 15:45:48'),
(32, 'German', 0, '2022-06-25 15:45:52', '2022-06-25 15:45:52'),
(33, 'Arabic', 1, '2022-06-25 15:45:56', '2022-06-26 15:45:12'),
(34, 'Food Preparation', 0, '2022-06-25 15:46:28', '2022-06-25 15:46:28'),
(35, 'Hotels', 1, '2022-06-25 15:46:33', '2022-06-26 15:55:03'),
(36, 'Driver License', 0, '2022-06-25 15:46:54', '2022-06-25 15:46:54'),
(37, 'Guitar', 0, '2022-06-25 15:47:25', '2022-06-25 15:47:25'),
(38, 'Piano', 0, '2022-06-25 15:47:31', '2022-06-25 15:47:31'),
(39, 'Violin', 0, '2022-06-25 15:47:55', '2022-06-25 15:47:55'),
(40, 'Cello', 0, '2022-06-25 15:48:07', '2022-06-25 15:48:27'),
(41, 'Secretary', 0, '2022-06-25 15:54:03', '2022-06-25 15:54:03'),
(42, 'Mathematics', 0, '2022-06-25 15:55:26', '2022-06-25 15:55:26'),
(43, 'Physics', 0, '2022-06-25 15:55:34', '2022-06-25 15:55:34'),
(44, 'Chemistry', 0, '2022-06-25 15:55:48', '2022-06-25 15:55:48'),
(45, 'Biology', 0, '2022-06-25 15:56:17', '2022-06-25 15:56:17');

-- --------------------------------------------------------

--
-- Table structure for table `study_programs`
--

CREATE TABLE `study_programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `progname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_programs`
--

INSERT INTO `study_programs` (`id`, `progname`, `level`, `duration`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'computer science', 'master', 24, 'this is a study program for post graduates', 6, '2021-07-13 15:06:58', '2021-07-13 15:06:58'),
(4, 'English Literature', 'Undergraduate', 48, 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 6, '2022-06-23 02:19:29', '2022-06-26 02:38:58'),
(7, 'Informatics Engineering', 'Undergraduate', 60, 'Fundamentals of computer science and its applications in software development and networks.', 6, '2022-06-26 02:38:23', '2022-06-26 02:38:23'),
(8, 'Mechanical & Electrical Engineering', 'Undergraduate', 60, 'Semper viverra nam libero justo laoreet sit amet cursus sit. Augue interdum velit euismod in pellentesque massa placerat duis. At quis risus sed vulputate odio. Aliquam purus sit amet luctus venenatis lectus magna. Orci phasellus egestas tellus rutrum tellus.', 6, '2022-06-26 02:40:34', '2022-06-26 02:40:34'),
(9, 'Civil Engineering', 'Undergraduate', 60, 'Proin sed libero enim sed faucibus turpis in eu mi. Gravida neque convallis a cras semper auctor neque. Nunc vel risus commodo viverra maecenas accumsan lacus vel facilisis. Consequat id porta nibh venenatis. Ultrices sagittis orci a scelerisque purus. Varius duis at consectetur lorem donec massa sapien faucibus. Feugiat sed lectus vestibulum mattis.', 6, '2022-06-26 02:41:22', '2022-06-26 02:41:22'),
(10, 'Business Administration', 'Master', 24, 'Sit amet cursus sit amet dictum sit. In nulla posuere sollicitudin aliquam ultrices sagittis. Fringilla ut morbi tincidunt augue interdum velit euismod in pellentesque. Sodales ut etiam sit amet nisl.', 6, '2022-06-26 02:42:13', '2022-06-26 02:42:13'),
(11, 'Informatics Engineering', 'Undergraduate', 60, 'Lobortis mattis aliquam faucibus purus in. Nibh nisl condimentum id venenatis a condimentum vitae sapien. Sit amet mauris commodo quis imperdiet. Id porta nibh venenatis cras sed felis.', 11, '2022-06-26 02:57:21', '2022-06-26 02:57:21'),
(12, 'Economics', 'Undergraduate', 48, 'Mauris rhoncus aenean vel elit scelerisque. Scelerisque purus semper eget duis at. Nisi vitae suscipit tellus mauris. In cursus turpis massa tincidunt dui ut ornare. Suscipit adipiscing bibendum est ultricies.', 11, '2022-06-26 02:57:48', '2022-06-26 02:57:48'),
(13, 'Medicine', 'Undergraduate', 72, 'Sit amet cursus sit amet dictum. Senectus et netus et malesuada. Amet mattis vulputate enim nulla aliquet porttitor lacus luctus. Dignissim convallis aenean et tortor at. Mus mauris vitae ultricies leo integer.', 11, '2022-06-26 02:58:14', '2022-06-26 02:58:14'),
(14, 'Pharmacy', 'Undergraduate', 60, 'Ultricies integer quis auctor elit sed vulputate. At auctor urna nunc id. Ut sem nulla pharetra diam sit amet nisl suscipit adipiscing. Adipiscing elit duis tristique sollicitudin nibh.', 11, '2022-06-26 02:58:35', '2022-06-26 02:58:35'),
(15, 'International Law', 'Master', 24, 'Massa tempor nec feugiat nisl pretium fusce id velit. Laoreet sit amet cursus sit amet dictum sit amet justo. Pellentesque massa placerat duis ultricies lacus.', 11, '2022-06-26 03:01:19', '2022-06-26 03:01:19'),
(16, 'Law', 'Undergraduate', 48, 'Arcu felis bibendum ut tristique. Sed libero enim sed faucibus turpis in eu. Integer malesuada nunc vel risus commodo viverra maecenas accumsan.', 11, '2022-06-26 03:01:37', '2022-06-26 03:01:37'),
(17, 'Computer Science and Engineering', 'Master', 24, 'Sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis. Metus aliquam eleifend mi in. Id nibh tortor id aliquet lectus. Nisl nisi scelerisque eu ultrices vitae auctor eu. Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam.', 14, '2022-06-26 03:06:49', '2022-06-26 03:06:49'),
(18, 'Electronics and Telecommunication Engineering', 'Master', 24, 'Pellentesque habitant morbi tristique senectus et netus et malesuada. Sagittis id consectetur purus ut faucibus pulvinar elementum. Donec ultrices tincidunt arcu non sodales neque sodales ut etiam.', 14, '2022-06-26 03:07:50', '2022-06-26 03:07:50'),
(19, 'Information Technology', 'Bachelor', 48, 'Sit amet est placerat in egestas erat imperdiet. Donec adipiscing tristique risus nec. Mauris vitae ultricies leo integer malesuada. Consectetur lorem donec massa sapien faucibus et molestie ac. Justo nec ultrices dui sapien eget mi proin sed libero. Laoreet non curabitur gravida arcu ac. Et tortor consequat id porta nibh venenatis.', 14, '2022-06-26 03:08:28', '2022-06-26 03:08:28'),
(20, 'Civil Engineering', 'Bachelor', 48, 'Ac turpis egestas integer eget aliquet. Urna condimentum mattis pellentesque id nibh tortor id aliquet lectus. Egestas erat imperdiet sed euismod nisi porta lorem mollis. Velit egestas dui id ornare arcu odio. Sit amet luctus venenatis lectus magna fringilla. Eget nunc lobortis mattis aliquam faucibus purus in. Et leo duis ut diam quam nulla porttitor massa id.', 14, '2022-06-26 03:08:53', '2022-06-26 03:08:53'),
(21, 'Telecommunication Engineering', 'Undergraduate', 48, 'Good branch for people who love electronics', 6, '2022-09-14 10:44:17', '2022-09-14 10:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `study_relationships`
--

CREATE TABLE `study_relationships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start` date NOT NULL,
  `finish` date NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT 0,
  `rating` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `study_program_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_relationships`
--

INSERT INTO `study_relationships` (`id`, `start`, `finish`, `approved`, `rating`, `comment`, `user_id`, `study_program_id`, `created_at`, `updated_at`) VALUES
(11, '2012-09-01', '2017-07-31', 1, 6, 'ok', 5, 8, '2022-06-26 05:42:02', '2022-06-26 06:24:08'),
(12, '2019-09-01', '2021-06-15', 0, NULL, NULL, 5, 18, '2022-06-26 05:43:06', '2022-06-26 05:43:06'),
(13, '2012-01-01', '2017-07-25', 1, 8, 'very good', 2, 7, '2022-06-26 05:47:45', '2022-06-26 06:23:21'),
(14, '2018-09-01', '2020-06-15', 0, NULL, NULL, 2, 17, '2022-06-26 05:48:51', '2022-06-26 05:48:51'),
(15, '2013-09-01', '2017-07-15', 1, 9, 'excellent', 8, 12, '2022-06-26 05:56:55', '2022-06-26 06:43:40'),
(16, '2017-07-31', '2021-07-31', 1, 7, 'very good', 9, 4, '2022-06-26 06:02:12', '2022-09-14 10:42:59'),
(17, '2001-09-01', '2006-07-01', 1, 7, 'ok', 12, 11, '2022-06-26 06:07:27', '2022-06-26 06:43:19'),
(18, '2018-09-01', '2022-06-15', 1, 7, 'good', 13, 4, '2022-06-26 06:17:33', '2022-06-26 06:23:06'),
(19, '2019-01-31', '2022-09-30', 0, NULL, NULL, 2, 11, '2022-09-14 10:52:04', '2022-09-14 10:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usertype` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `usertype`, `status`) VALUES
(1, 'ADMIN', 'admin@gmail.com', '2021-07-02 07:42:29', '$2y$10$F5Ru2ixBcqMx1upZo5xSEOJxLhW4X4CTOL8Qb/acNO0kEe6/5626e', 'T7rmU1QEWUZ0dhAeAwwCka18b1Efvc1enE0jDecgMRb1eVROjowuiOn5wjDv', NULL, NULL, 0, 2),
(2, 'Qusay Sellat', 'qusaysellat@gmail.com', '2021-07-03 07:19:28', '$2y$10$teNYmzU8TcJjxlLU878q3OpJsY71QsGayEZQi5Y.0YLH9JZSvxVq6', 'YarLJNvSkl5QJzQXoVcKRP0KuwES5byOZ7kjVVUakHprcfkrs5eaWkJC0Lj7', '2021-07-03 07:19:13', '2021-07-16 13:31:43', 1, 1),
(5, 'Mohammad Adel', 'person1@gmail.com', '2021-07-12 14:07:47', '$2y$10$teNYmzU8TcJjxlLU878q3OpJsY71QsGayEZQi5Y.0YLH9JZSvxVq6', NULL, '2021-07-12 14:07:36', '2022-06-22 04:40:32', 1, 1),
(6, 'Tishreen University', 'university1@gmail.com', '2021-07-12 14:10:37', '$2y$10$teNYmzU8TcJjxlLU878q3OpJsY71QsGayEZQi5Y.0YLH9JZSvxVq6', NULL, '2021-07-12 14:10:27', '2021-07-16 13:19:14', 3, 1),
(7, 'National Telecom', 'company1@gmail.com', '2021-07-12 14:11:59', '$2y$10$teNYmzU8TcJjxlLU878q3OpJsY71QsGayEZQi5Y.0YLH9JZSvxVq6', NULL, '2021-07-12 14:11:47', '2021-07-16 13:19:13', 2, 1),
(8, 'Ahmed Mostafa', 'person2@gmail.com', '2022-06-20 09:25:04', '$2y$10$teNYmzU8TcJjxlLU878q3OpJsY71QsGayEZQi5Y.0YLH9JZSvxVq6', NULL, '2022-06-20 09:21:04', '2022-09-14 10:38:30', 1, 1),
(9, 'Ismail Mahmoud', 'person3@gmail.com', '2022-06-21 17:28:25', '$2y$10$teNYmzU8TcJjxlLU878q3OpJsY71QsGayEZQi5Y.0YLH9JZSvxVq6', NULL, '2022-06-21 17:27:17', '2022-06-21 17:28:25', 1, 0),
(10, 'Web Company', 'company2@gmail.com', '2022-06-21 17:28:25', '$2y$10$teNYmzU8TcJjxlLU878q3OpJsY71QsGayEZQi5Y.0YLH9JZSvxVq6', NULL, '2022-06-21 17:33:00', '2022-09-14 10:38:42', 2, 0),
(11, 'Damascus University', 'university2@gmail.com', '2022-06-21 17:28:25', '$2y$10$teNYmzU8TcJjxlLU878q3OpJsY71QsGayEZQi5Y.0YLH9JZSvxVq6', NULL, '2022-06-21 17:33:44', '2022-06-21 17:33:44', 3, 0),
(12, 'Ibrahim Daoud', 'person4@gmail.com', '2022-06-21 17:28:25', '$2y$10$teNYmzU8TcJjxlLU878q3OpJsY71QsGayEZQi5Y.0YLH9JZSvxVq6', NULL, '2022-06-21 17:51:29', '2022-06-21 17:51:29', 1, 0),
(13, 'Basima Ibrahim', 'person5@gmail.com', '2022-06-25 14:50:29', '$2y$10$teNYmzU8TcJjxlLU878q3OpJsY71QsGayEZQi5Y.0YLH9JZSvxVq6', NULL, '2022-06-25 14:49:36', '2022-06-25 14:50:29', 1, 0),
(14, 'C V Raman Global University', 'cvraman@gmail.com', '2022-06-25 14:50:29', '$2y$10$teNYmzU8TcJjxlLU878q3OpJsY71QsGayEZQi5Y.0YLH9JZSvxVq6', NULL, '2022-06-26 03:04:07', '2022-06-26 03:04:07', 3, 0),
(15, 'Rania Youssef', 'person6@gmail.com', '2022-09-06 09:25:46', '$2y$10$DLm95MXc0XGNTtI.IuULbOIMogcnhl94bIYieEg6wsNdhUa9MABIm', NULL, '2022-09-06 09:24:41', '2022-09-06 09:25:46', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contacts_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `friendships`
--
ALTER TABLE `friendships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `friendships_user1_id_foreign` (`user1_id`),
  ADD KEY `friendships_user2_id_foreign` (`user2_id`);

--
-- Indexes for table `interactions`
--
ALTER TABLE `interactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interactions_user_id_foreign` (`user_id`),
  ADD KEY `interactions_post_id_foreign` (`post_id`);

--
-- Indexes for table `job_positions`
--
ALTER TABLE `job_positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_positions_user_id_foreign` (`user_id`),
  ADD KEY `job_positions_category_id_foreign` (`category_id`);

--
-- Indexes for table `job_position_skill`
--
ALTER TABLE `job_position_skill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_position_skill_job_position_id_foreign` (`job_position_id`),
  ADD KEY `job_position_skill_skill_id_foreign` (`skill_id`);

--
-- Indexes for table `job_relationships`
--
ALTER TABLE `job_relationships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_relationships_user_id_foreign` (`user_id`),
  ADD KEY `job_relationships_job_position_id_foreign` (`job_position_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user1_id_foreign` (`user1_id`),
  ADD KEY `messages_user2_id_foreign` (`user2_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `post_skill`
--
ALTER TABLE `post_skill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_skill_post_id_foreign` (`post_id`),
  ADD KEY `post_skill_skill_id_foreign` (`skill_id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resumes_user_id_foreign` (`user_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_programs`
--
ALTER TABLE `study_programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `study_programs_user_id_foreign` (`user_id`);

--
-- Indexes for table `study_relationships`
--
ALTER TABLE `study_relationships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `study_relationships_user_id_foreign` (`user_id`),
  ADD KEY `study_relationships_study_program_id_foreign` (`study_program_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friendships`
--
ALTER TABLE `friendships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `interactions`
--
ALTER TABLE `interactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `job_positions`
--
ALTER TABLE `job_positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `job_position_skill`
--
ALTER TABLE `job_position_skill`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `job_relationships`
--
ALTER TABLE `job_relationships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `post_skill`
--
ALTER TABLE `post_skill`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `study_programs`
--
ALTER TABLE `study_programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `study_relationships`
--
ALTER TABLE `study_relationships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `contacts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `friendships`
--
ALTER TABLE `friendships`
  ADD CONSTRAINT `friendships_user1_id_foreign` FOREIGN KEY (`user1_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `friendships_user2_id_foreign` FOREIGN KEY (`user2_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `interactions`
--
ALTER TABLE `interactions`
  ADD CONSTRAINT `interactions_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `interactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_positions`
--
ALTER TABLE `job_positions`
  ADD CONSTRAINT `job_positions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_positions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_position_skill`
--
ALTER TABLE `job_position_skill`
  ADD CONSTRAINT `job_position_skill_job_position_id_foreign` FOREIGN KEY (`job_position_id`) REFERENCES `job_positions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_position_skill_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_relationships`
--
ALTER TABLE `job_relationships`
  ADD CONSTRAINT `job_relationships_job_position_id_foreign` FOREIGN KEY (`job_position_id`) REFERENCES `job_positions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_relationships_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_user1_id_foreign` FOREIGN KEY (`user1_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_user2_id_foreign` FOREIGN KEY (`user2_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_skill`
--
ALTER TABLE `post_skill`
  ADD CONSTRAINT `post_skill_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_skill_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `resumes`
--
ALTER TABLE `resumes`
  ADD CONSTRAINT `resumes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `study_programs`
--
ALTER TABLE `study_programs`
  ADD CONSTRAINT `study_programs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `study_relationships`
--
ALTER TABLE `study_relationships`
  ADD CONSTRAINT `study_relationships_study_program_id_foreign` FOREIGN KEY (`study_program_id`) REFERENCES `study_programs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `study_relationships_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
