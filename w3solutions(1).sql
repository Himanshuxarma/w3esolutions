-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 03:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `w3solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_title`, `page_name`, `banner_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'We are team of talanted designers making websites with Bootstrap', 'home_page', '1679291276.jpg', 1, '2023-03-17 23:47:52', '2023-03-20 05:46:32'),
(2, 'This is a list of notable companies in the information technology sector based in India.', 'home_page', '1679291263.jpg', 1, '2023-03-17 23:58:01', '2023-03-20 05:46:30'),
(3, 'Several foreign companies have more employees in India than their parent countries.', 'home_page', '1679291250.jpg', 1, '2023-03-18 00:01:28', '2023-03-20 05:46:12'),
(4, 'On the other hand', 'home_page', '1679291320.jpg', 1, '2023-03-20 00:18:40', '2023-03-20 05:46:28'),
(6, 'omnis voluptas assumenda est, omnis dolor repellendus.', 'Home Page', '1679748016.jpg', 1, '2023-03-25 07:10:16', '2023-03-25 07:10:16'),
(7, 'omnis voluptas assumenda est, omnis dolor repellendus.', 'Home Page', '1679748070.jpg', 0, '2023-03-25 07:11:10', '2023-03-25 07:13:53'),
(8, 'omnis voluptas assumenda est, omnis dolor repellendus.', 'Home Page', '1679748108.jpg', 1, '2023-03-25 07:11:48', '2023-03-25 07:11:48'),
(9, 'omnis voluptas assumenda est, omnis dolor repellendus.', 'Home Page', '1679748128.jpg', 1, '2023-03-25 07:12:08', '2023-03-25 07:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `banner_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'laravel', 'ssa', '1679550578.jpg', 1, '2023-03-23 00:19:38', '2023-03-23 00:19:38'),
(2, 'Demo', 'demo', 'asdasa', '1679550600.jpg', 1, '2023-03-23 00:20:00', '2023-03-23 00:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE `domains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_done` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technology` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `domains`
--

INSERT INTO `domains` (`id`, `name`, `project_done`, `technology`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'Demo', '2', 'sd', 1, '2023-03-27 06:32:57', '2023-03-27 06:32:57'),
(2, 'demo', '5', '1', 'wdd', 1, '2023-03-27 06:55:39', '2023-03-27 06:55:39'),
(3, 'ssds', '5', '10', 'dd', 1, '2023-03-27 07:03:28', '2023-03-27 07:03:28'),
(4, 'sdsds', '3', '4', 'sdsds', 1, '2023-03-27 23:54:54', '2023-03-27 23:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_profile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_exp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joining_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `name`, `job_profile`, `total_exp`, `photo`, `joining_date`, `salary`, `description`, `dob`, `status`, `created_at`, `updated_at`) VALUES
(2, '101', 'Ramesh Singh Shekhawat', 'Product Manager', '', '1679376566.jpg', '2023-03-17', '80000', 'Singh', '2023-03-17', 1, '2023-03-17 01:55:30', '2023-03-20 23:59:26'),
(3, '102', 'Sonu Singh', 'Chief Executive Officer', '', '1679302075.jpg', '2023-03-31', '900000', 'Test', '2023-04-04', 1, '2023-03-20 03:13:36', '2023-03-20 03:17:55'),
(4, '103', 'Amanda Jepson', 'Accountant', '', '1679302328.jpg', '2023-03-20', '70000', 'Demo', '2023-03-23', 1, '2023-03-20 03:14:37', '2023-03-20 03:22:08'),
(5, '105', 'Sarah Jhonson', 'CTO', '', '1679748788.jpg', '2023-07-10', '4545454', 'Test', '2023-03-22', 1, '2023-03-20 03:15:46', '2023-03-25 07:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Non consectetur a erat nam at lectus urna duis?', 'Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.', 1, '2023-03-29 01:27:25', '2023-03-29 01:27:25'),
(2, 'Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?', 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi.Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.', 1, '2023-03-29 01:31:13', '2023-03-29 01:31:13'),
(3, 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?', 'Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.  quis', 1, '2023-03-29 01:32:02', '2023-03-29 01:32:02'),
(4, 'Ac odio LiveMeetUpsr orci dapibus. Aliquam eleifend mi in nulla?', 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.', 1, '2023-03-29 01:33:12', '2023-03-29 01:33:12'),
(5, 'Tempus quam pellentesque nec nam aliquam sem et tortor consequat?', 'Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in', 1, '2023-03-29 01:33:44', '2023-03-29 01:33:44'),
(6, 'Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?', 'Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.', 1, '2023-03-29 01:35:04', '2023-03-29 01:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `metals`
--

CREATE TABLE `metals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_23_074925_create_posts_table', 1),
(7, '2023_02_04_172909_create_products_table', 2),
(8, '2023_02_05_112541_create_categories_table', 2),
(9, '2023_02_07_023943_create_pages_table', 2),
(10, '2023_02_07_033227_create_metals_table', 2),
(11, '2023_02_08_090602_create_productimages_table', 2),
(12, '2023_02_10_154943_create_settings_table', 2),
(13, '2023_02_13_114309_create_services_table', 2),
(14, '2023_02_15_041930_create_contacts_table', 2),
(15, '2023_02_15_063703_rename_contacts_table_to_enquiries', 2),
(16, '2023_02_16_071327_create_banners_table', 2),
(17, '2023_02_16_125619_add_banner_title_to_banners_table', 2),
(18, '2023_02_21_042819_add_address_field_to_settings', 2),
(19, '2023_03_04_053637_create_testimonials_table', 3),
(20, '2023_03_13_053108_add_twitter_link_to_settings_table', 4),
(21, '2023_03_13_062710_create_techstacks_table', 5),
(22, '2023_03_13_071356_drop_price_from_products_table', 6),
(23, '2023_03_13_072028_rename_products_table_to_projects', 7),
(24, '2023_03_16_102447_create_employees_table', 8),
(25, '2023_03_17_102329_create_domains_table', 9),
(26, '2023_03_22_125518_rename_testimonial_in_domains_table', 10),
(29, '2023_03_27_115233_rename_technology_in_domains_table', 12),
(30, '2023_03_28_053709_create_project_technologies_table', 13),
(31, '2023_03_29_060303_create_faqs_table', 14),
(32, '2023_03_29_074225_add_total_exp_to_employees_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `description`, `banner_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'about-us', '<section id=\"about\" class=\"about\">\r\n      <div class=\"container\">\r\n\r\n        <div class=\"section-title\">\r\n          <h2>About</h2>\r\n          <h3>Learn More <span>About Us</span></h3>\r\n          <p>Ut possimus qui ut LiveMeetUps culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>\r\n        </div>\r\n\r\n        <div class=\"row content\">\r\n          <div class=\"col-lg-6\">\r\n            <p>\r\n              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod LiveMeetUpsr incididunt ut labore et dolore\r\n              magna aliqua.\r\n            </p>\r\n            <ul>\r\n              <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>\r\n              <li><i class=\"ri-check-double-line\"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>\r\n              <li><i class=\"ri-check-double-line\"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>\r\n            </ul>\r\n          </div>\r\n          <div class=\"col-lg-6 pt-4 pt-lg-0\">\r\n            <p>\r\n              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate\r\n              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in\r\n              culpa qui officia deserunt mollit anim id est laborum.\r\n            Excepteur sint occaecat cupidatat non proident, sunt in\r\n              culpa qui officia deserunt mollit anim id est laborum.\r\n            </p>\r\n            <br>\r\n          </div>\r\n        </div>\r\n\r\n      </div>\r\n    </section>', '1679034166.jpg', 1, '2023-03-17 00:52:46', '2023-03-24 01:28:48');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productimages`
--

CREATE TABLE `productimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `cat_id`, `title`, `slug`, `description`, `image`, `is_featured`, `status`, `created_at`, `updated_at`) VALUES
(3, '2', 'Hospitality', 'hospitality', 'Test Project about hospitality<br>', '1679312654.jpg', '1', 1, '2023-03-20 06:14:14', '2023-03-20 06:14:14'),
(5, '1', 'Shubharambh Arts', 'shubharambh-arts', '<p>It is a long established fact that a reader will be distracted \r\nby the readable content of a page when looking at its layout. The point \r\nof using Lorem Ipsum is that it has a more-or-less normal distribution \r\nof letters, as opposed to using \'Content here, content here\', making it \r\nlook like readable English. Many desktop publishing packages and web \r\npage editors now use Lorem Ipsum as their default model text, and a \r\nsearch for \'lorem ipsum\' will uncover many web sites still in their \r\ninfancy. Various versions have evolved over the years, sometimes by \r\naccident, sometimes on purpose (injected humour and the like).</p>', '1679556810.png', '1', 1, '2023-03-23 02:03:30', '2023-03-28 05:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `project_technologies`
--

CREATE TABLE `project_technologies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technology_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_technologies`
--

INSERT INTO `project_technologies` (`id`, `project_id`, `technology_id`, `status`, `created_at`, `updated_at`) VALUES
(1, '13', '2', 1, NULL, NULL),
(2, '13', '5', 1, NULL, NULL),
(3, '14', '2', 1, NULL, NULL),
(4, '14', '5', 1, NULL, NULL),
(5, '14', '6', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', 'There are many variations of passages of Lorem Ipsum available, but the \r\nmajority have suffered alteration in some form, by injected humour, or \r\nrandomised words which don\'t look even slightly believable. If you are \r\ngoing to use a passage of Lorem Ipsum, you need to be sure there isn\'t \r\nanything embarrassing hidden in the middle of text. All the Lorem Ipsum \r\ngenerators on the Internet tend to repeat predefined chunks as \r\nnecessary.', '1680087702.gif', 1, '2023-03-17 07:46:58', '2023-03-29 05:31:42'),
(2, 'Web Designing', 'Fully Update Your Social Media Accounts.', '1680087555.gif', 1, '2023-03-17 07:49:00', '2023-03-29 05:29:15'),
(3, 'Graphic Design', 'Fully Update Your Social Media Accounts.', '1679059191.png', 1, '2023-03-17 07:49:51', '2023-03-24 07:02:59'),
(4, 'Motion graphics', 'Fully Update Your Social Media Accounts.', '1679138052.png', 1, '2023-03-18 05:44:12', '2023-03-24 07:03:14'),
(5, 'Social Media Marketing', 'Fully Update Your Social Media Accounts.', '1679138321.png', 0, '2023-03-18 05:48:41', '2023-03-25 06:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pinterest_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `snapchat_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `themeforest_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `projects_done` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satisfied_clients` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_numbers` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_counts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `first_name`, `last_name`, `email`, `phone1`, `phone2`, `front_logo`, `back_logo`, `profile_picture`, `address`, `last_login`, `facebook_link`, `instagram_link`, `google_link`, `linkedin_link`, `pinterest_link`, `snapchat_link`, `twitter_link`, `themeforest_link`, `projects_done`, `satisfied_clients`, `country_numbers`, `employee_counts`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ramesh', 'Singh', 'admin@w3esolutions.com', '9828886639', '9680814546', '1679651836_front_logo.png', '1679649742_back_logo.png', '1677569724_profile_picture.jpg', 'B-50, Chandra Nagar 9 Dukan,Kalwar Road Govindpura,Jotwara,Jaipur,Rajasthan-302012', '', 'https://www.facebook.com', 'https://www.instagram.com/', 'google_link', 'linkedin_link', 'https://in.pinterest.com/', '', 'https://twitter.com', 'https://themeforest.net/', '10', '20', '30', '408', 1, '2023-02-28 02:05:24', '2023-03-24 04:27:16');

-- --------------------------------------------------------

--
-- Table structure for table `techstacks`
--

CREATE TABLE `techstacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `technology` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `techstacks`
--

INSERT INTO `techstacks` (`id`, `technology`, `tech_icon`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Laravel 9', '1680088106.gif', 'Welcome to the Laravel Admin Panel Documentation for version 0.2. These \r\ndocs will teach you how to install, configure, and use Laravel Admin \r\nPanel so that way you can create some kick ass stuff.', 1, '2023-03-17 06:35:00', '2023-03-29 05:38:26'),
(2, 'Designing', '1679055377.png', 'design', 1, '2023-03-17 06:46:17', '2023-03-17 06:46:17'),
(3, 'Html 5', '1680088534.gif', 'Html', 1, '2023-03-17 06:48:18', '2023-03-29 05:45:34'),
(4, 'Css 3', '1679056461.png', 'css', 1, '2023-03-17 07:04:21', '2023-03-22 23:39:54'),
(5, 'Bootstrap 5', '1679056539.png', 'bootstrap', 1, '2023-03-17 07:05:39', '2023-03-17 07:05:39'),
(6, 'CakePhp', '1679056568.png', 'cakephp', 1, '2023-03-17 07:06:08', '2023-03-17 07:06:08'),
(7, 'CodeIgniter 4', '1679056642.png', 'CodeIgniter', 1, '2023-03-17 07:07:22', '2023-03-17 07:07:22'),
(8, 'React Js', '1679056667.png', 'react js<br>', 1, '2023-03-17 07:07:47', '2023-03-17 07:07:47'),
(9, 'Node Js', '1679056687.png', 'node js<br>', 1, '2023-03-17 07:08:07', '2023-03-17 07:08:07'),
(10, 'Php', '1680088028.gif', 'php', 1, '2023-03-17 07:08:28', '2023-03-29 05:37:08'),
(11, 'Wordpress', '1679056744.png', 'wordpress', 1, '2023-03-17 07:09:04', '2023-03-17 07:09:04'),
(12, 'Angular', '1679747390.png', 'angular', 1, '2023-03-25 06:59:50', '2023-03-25 06:59:50'),
(13, 'MySql', '1679747445.png', 'mysql', 1, '2023-03-25 07:00:45', '2023-03-25 07:00:45'),
(14, 'Rails', '1679747498.png', 'rails', 1, '2023-03-25 07:01:38', '2023-03-25 07:01:38'),
(15, 'Yii', '1679747541.png', 'yii', 1, '2023-03-25 07:02:21', '2023-03-25 07:02:21'),
(16, 'Python', '1680089353.png', 'python', 1, '2023-03-29 05:59:13', '2023-03-29 05:59:13');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `description`, `image`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ramesh Singh Shekhawat', 'There are two ways: ask for them and catch them as they flow past', '1679123220.png', '1', 1, '2023-03-18 01:36:42', '2023-03-23 07:26:02'),
(2, 'Gigi Hadid', 'Contrary to popular belief, Lorem Ipsum is not simply random text', '1679380121.jpg', '2', 1, '2023-03-18 04:58:13', '2023-03-23 07:26:12'),
(3, 'Kendall Jenner', 'omnis voluptas assumenda est, omnis dolor repellendus.', '1679380103.jpg', '3', 1, '2023-03-21 00:58:23', '2023-03-23 07:26:22'),
(4, 'sdff', 'sddddsddddddddddddddddddddddd', '1679395034.jpg', '4', 0, '2023-03-21 05:07:14', '2023-03-23 07:26:34'),
(5, 'sdsdd', 'sdsdsd', '1679395091.jpeg', '5', 0, '2023-03-21 05:08:11', '2023-03-23 07:26:45'),
(6, 'Sonu Singh SHekhawat', 'There are two ways: ask for them and catch them as they flow past', '1679576293.jpg', '5', 1, '2023-03-23 07:28:13', '2023-03-25 07:15:31');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Houston King', 'destiny.denesik@example.org', '2023-02-23 04:39:13', '$2y$10$QDfrOPM1HIhz1ZYD8xugAuvKATN54x6tYdf/c0Hk.fCL973PoaYHO', 'ZwkEdtpW7LcrNAugrNQHwJaoX6iWUYu8afUT9JB6oFBB5RM6xUlNeJeZiOY7', '2023-02-23 04:39:13', '2023-02-23 04:39:13'),
(2, 'Ahmed Reichert', 'eliseo.kohler@example.net', '2023-02-23 04:39:13', '$2y$10$gIL25RDqo9mocyxUsZi/leiZh4m.yWqd35qesql/cc6bRgPQTzcvm', 'wlFbQ2a5Ce', '2023-02-23 04:39:13', '2023-02-23 04:39:13'),
(3, 'Lottie Considine', 'angeline66@example.com', '2023-02-23 04:39:13', '$2y$10$nmnEOhTtgoQ88nxHsLyBKOBvx05eHZRvx5WDZRHNNObSAoFY.dqwq', '98vFOznUKX', '2023-02-23 04:39:13', '2023-02-23 04:39:13'),
(4, 'Herman Mante', 'araceli.boyle@example.com', '2023-02-23 04:39:13', '$2y$10$JUyFMeB/pFQRmLHBbJ71xudAvYN0rEihIdWhGz.MlWRz23Q.Th/A2', 'UcJMR4qosr', '2023-02-23 04:39:13', '2023-02-23 04:39:13'),
(5, 'Kylie Terry', 'lehner.shemar@example.org', '2023-02-23 04:39:13', '$2y$10$j5NDYUSlB2bUnmXOEZ60xu9ScTX8F8yqDPE7l9GuJtJlN15hfoKNa', 'TglzFVxngh', '2023-02-23 04:39:13', '2023-02-23 04:39:13'),
(6, 'Emma Wiegand', 'kristoffer.emard@example.net', '2023-02-23 04:39:13', '$2y$10$sdSNufQiLsaiTHSdwaaTUuepD3sHS8b4zbKk.8PYUM3EuDQ2M6kLC', 'Rwf6vQ5kie', '2023-02-23 04:39:13', '2023-02-23 04:39:13'),
(7, 'Neha Schneider DDS', 'rgreenfelder@example.net', '2023-02-23 04:39:13', '$2y$10$vM3mhelW/P1GFgbh15LNFuoFf/2WD9DEc6L.vP.66IR3UuHTPElNe', 'zhGumnYb8X', '2023-02-23 04:39:13', '2023-02-23 04:39:13'),
(8, 'D\'angelo Rolfson', 'jerrod67@example.net', '2023-02-23 04:39:13', '$2y$10$CXDVP7gIma0.OwwrYQYIKOH/sJ8zDjiGV0XWsGUq2U59mci7GScM2', 'juy98hbZ31', '2023-02-23 04:39:13', '2023-02-23 04:39:13'),
(9, 'Chaya Morar', 'dbahringer@example.org', '2023-02-23 04:39:13', '$2y$10$bG2l6eny9/bSmFuJaJDM9uIeDoS3ESL2JGAZkoY3haoCTBdLEd5nS', 'pxHbeE1hJf', '2023-02-23 04:39:13', '2023-02-23 04:39:13'),
(10, 'Dr. Earline Funk DVM', 'dillon.little@example.org', '2023-02-23 04:39:13', '$2y$10$CLusbRKCyrxAkGfO6.gFUe4DpOEHOc771cKDVOCKH.AitxEPPQ4d.', 'a3IuQWgXZ6', '2023-02-23 04:39:13', '2023-02-23 04:39:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metals`
--
ALTER TABLE `metals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productimages`
--
ALTER TABLE `productimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_technologies`
--
ALTER TABLE `project_technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `techstacks`
--
ALTER TABLE `techstacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `metals`
--
ALTER TABLE `metals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productimages`
--
ALTER TABLE `productimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `project_technologies`
--
ALTER TABLE `project_technologies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `techstacks`
--
ALTER TABLE `techstacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
