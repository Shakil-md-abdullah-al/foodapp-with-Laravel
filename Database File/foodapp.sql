-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2023 at 10:23 AM
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
-- Database: `foodapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `p_name` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `name`, `email`, `phone`, `address`, `product_title`, `quantity`, `price`, `image`, `product_id`, `p_name`, `user_id`, `created_at`, `updated_at`) VALUES
(17, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', 'White Rice', '1', '48', 'admin-assets/assets/image/products/1528034565.jpg', '7', NULL, '5', '2023-09-11 02:13:44', '2023-09-11 02:13:44'),
(18, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', 'Brown Rice', '1', '150', 'admin-assets/assets/image/products/1338764808.jpg', '8', NULL, '5', '2023-09-11 02:13:50', '2023-09-11 02:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(5, 'Lunch', '2023-08-19 15:33:08', '2023-08-19 16:37:39'),
(6, 'Today\'s Special', '2023-08-19 15:33:26', '2023-08-19 15:33:26'),
(7, 'Rice', '2023-09-05 02:25:47', '2023-09-05 02:25:47'),
(8, 'Vagetable', '2023-09-05 02:25:56', '2023-09-05 02:25:56'),
(9, 'Meat', '2023-09-05 02:26:07', '2023-09-05 02:26:07'),
(10, 'Soft Drinks', '2023-09-05 07:31:42', '2023-09-05 07:31:42'),
(11, 'Lacchi', '2023-09-05 07:31:48', '2023-09-05 07:31:48'),
(12, 'Fish', '2023-09-05 07:32:10', '2023-09-05 07:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `pos` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cq` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `name`, `pos`, `description`, `cq`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Md Abu Sama', 'Main Chif', 'Brown rice is a whole grain rice with the inedible outer hull removed. This kind of rice sheds its outer hull or husk but the bran and germ layer remain on, constituting the brown or tan colour of rice.[1] White rice is the same grain without the hull, the bran layer, and the cereal germ. Red rice, gold rice, and black rice (also called purple rice) are all whole rices with differently pigmented outer layers.', 'Eat for Fun', 'admin-assets/assets/image/chef/1187922930.jpg', '2023-09-06 00:33:00', '2023-09-06 00:33:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', 'Hiushaijh', 'hbsdjpfhdjknsjpn  njkcn', 'Acton Taken', '2023-09-05 01:45:36', '2023-09-06 10:10:30'),
(2, 'Office', 'chiojj@mail.com', 'kjnapvn', 'npvjhdvnnvb hohpjnjkpn', 'Acton Taken', '2023-09-05 02:14:50', '2023-09-05 02:16:17'),
(3, 'MD. Abdulllah Al Shakil', 'shakil3300bd@gmail.com', 'fgrfgsgs', 'Hello', 'Acton Taken', '2023-09-06 10:15:44', '2023-09-06 10:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `custom_orders`
--

CREATE TABLE `custom_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `rice` varchar(255) DEFAULT NULL,
  `veg` varchar(255) DEFAULT NULL,
  `soft_drinks` varchar(255) DEFAULT NULL,
  `lacchi` varchar(255) DEFAULT NULL,
  `meat` varchar(255) DEFAULT NULL,
  `fish` varchar(255) DEFAULT NULL,
  `own` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_orders`
--

INSERT INTO `custom_orders` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `rice`, `veg`, `soft_drinks`, `lacchi`, `meat`, `fish`, `own`, `created_at`, `updated_at`) VALUES
(1, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', '7', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-06 03:26:43', '2023-09-06 03:26:43'),
(2, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', NULL, NULL, NULL, NULL, NULL, NULL, 'Karela Juice', '2023-09-06 03:50:54', '2023-09-06 03:50:54'),
(3, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-06 04:02:42', '2023-09-06 04:02:42'),
(4, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-06 04:05:45', '2023-09-06 04:05:45'),
(5, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', 'Rice', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-06 04:07:22', '2023-09-06 04:07:22'),
(6, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', NULL, NULL, NULL, NULL, '14', NULL, NULL, '2023-09-06 10:23:06', '2023-09-06 10:23:06'),
(7, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', NULL, NULL, NULL, NULL, NULL, NULL, 'Kebjk', '2023-09-06 10:24:35', '2023-09-06 10:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `event_type` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `event_attendees` varchar(255) NOT NULL,
  `event_message` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `event_type`, `place`, `event_attendees`, `event_message`, `event_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', 'corporate-event', 'Dhaka', '50', 'Hello', '2023-09-16', 'Accepted', '2023-09-06 10:09:40', '2023-09-06 11:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `event_manages`
--

CREATE TABLE `event_manages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `timedate` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_manages`
--

INSERT INTO `event_manages` (`id`, `name`, `place`, `timedate`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Md Abu Sama', 'Dhaka', '!0:00 AM Dhaka', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'admin-assets/assets/image/chef/464490381.jpg', '2023-09-06 13:35:36', '2023-09-06 13:35:36');

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
-- Table structure for table `joins`
--

CREATE TABLE `joins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `usertype` varchar(255) DEFAULT NULL,
  `office_code` varchar(255) DEFAULT NULL,
  `num_employees` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `joins`
--

INSERT INTO `joins` (`id`, `name`, `usertype`, `office_code`, `num_employees`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Shakil Shakil', '0', 'jhbjh', NULL, 'shakil3300bd@gmail.com', '01784918947', 'Rupnagar R/A , Mirpur-02, Dhaka-1216', '2023-09-06 02:59:40', '2023-09-06 02:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `menu_carts`
--

CREATE TABLE `menu_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `p_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_carts`
--

INSERT INTO `menu_carts` (`id`, `p_name`, `price`, `description`, `quantity`, `user_id`, `name`, `email`, `phone`, `address`, `p_id`, `created_at`, `updated_at`) VALUES
(3, 'Omeletto Italiano', '700', 'Mild Italian Sausage, mushroom, roasted red peppers, onion, thai kale & mozzarella topped w/tomato basil sauce and grated parmesan. Served with breakfast potatoes, choice of toast & a side of giardiniera. 14.49', '1', '5', 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '6', '2023-09-05 09:13:20', '2023-09-05 09:13:20'),
(4, 'Pulled Pork Tacos', '950', '3 slow cooked pulled pork tacos with onion, cilantro and a housemade pineapple salsa', '1', '5', 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', '2023-09-05 09:14:04', '2023-09-05 09:14:04'),
(5, 'Pulled Pork Tacos', '950', '3 slow cooked pulled pork tacos with onion, cilantro and a housemade pineapple salsa', '1', '5', 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', '2023-09-05 09:17:08', '2023-09-05 09:17:08'),
(7, 'Omeletto Italiano', '700', 'Mild Italian Sausage, mushroom, roasted red peppers, onion, thai kale & mozzarella topped w/tomato basil sauce and grated parmesan. Served with breakfast potatoes, choice of toast & a side of giardiniera. 14.49', '1', '5', 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '6', '2023-09-07 08:55:53', '2023-09-07 08:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `menu_cart_orders`
--

CREATE TABLE `menu_cart_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `delivery_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_cart_orders`
--

INSERT INTO `menu_cart_orders` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `p_name`, `quantity`, `price`, `product_id`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(2, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', 'User', '1', '750', '2', 'Paid', 'Delivered', '2023-09-04 22:38:35', '2023-09-04 22:42:12');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_08_17_222124_create_sessions_table', 1),
(9, '2023_08_19_211657_create_categories_table', 3),
(13, '2023_08_19_224142_create_products_table', 7),
(16, '2023_09_04_114833_create_offices_table', 8),
(17, '2014_10_12_000000_create_users_table', 9),
(18, '2023_08_20_190650_create_orders_table', 10),
(19, '2023_09_05_001832_create_packages_table', 11),
(20, '2023_09_05_005404_create_platters_table', 12),
(21, '2023_09_05_011804_create_specials_table', 13),
(24, '2023_08_20_024620_create_carts_table', 14),
(28, '2023_09_05_033752_create_menu_cart_orders_table', 16),
(30, '2023_09_05_030515_create_menu_carts_table', 17),
(32, '2023_09_05_045450_create_pkg_carts_table', 18),
(33, '2023_09_05_053456_create_pkg_orders_table', 19),
(36, '2023_09_05_071659_create_contacts_table', 20),
(39, '2023_09_05_094453_create_reviews_table', 21),
(43, '2023_09_05_093356_create_chefs_table', 24),
(48, '2023_09_06_084221_create_joins_table', 27),
(49, '2023_09_05_134447_create_custom_orders_table', 28),
(52, '2023_09_06_073843_create_event_manages_table', 29),
(53, '2023_09_06_123848_create_sliders_table', 29),
(54, '2023_09_05_093346_create_events_table', 30);

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `o_phone` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `o_address` varchar(255) NOT NULL,
  `o_email` varchar(255) NOT NULL,
  `o_name` varchar(255) NOT NULL,
  `no_emp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `code`, `o_phone`, `image`, `o_address`, `o_email`, `o_name`, `no_emp`, `created_at`, `updated_at`) VALUES
(2, 'IZYGBO', '676385783978', 'admin-assets/assets/image/office/951242024.jpg', 'Office 02', 'hhfhsdfh@mail.com', 'Lava Res', '100', '2023-09-04 07:01:16', '2023-09-06 10:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `delivery_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `product_title`, `quantity`, `price`, `image`, `product_id`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(1, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', 'South Indian Combo Lunch', '2', '800', 'admin-assets/assets/image/products/1925260948.jpeg', '5', 'Paid', 'Delivered', '2023-09-04 15:44:48', '2023-09-04 17:13:25'),
(5, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', 'South Indian Combo Lunch', '2', '800', 'admin-assets/assets/image/products/1925260948.jpeg', '5', 'COD', 'Delivered', '2023-09-04 15:47:48', '2023-09-04 17:10:19'),
(6, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', 'Brown Rice', '1', '320', 'admin-assets/assets/image/products/1864561194.webp', '4', 'COD', 'Delivered', '2023-09-04 15:47:48', '2023-09-04 17:11:59'),
(7, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', 'South Indian Combo Lunch', '1', '400', 'admin-assets/assets/image/products/1925260948.jpeg', '5', 'Paid', 'Delivered', '2023-09-04 18:02:15', '2023-09-04 19:41:14'),
(8, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', 'Coca Cola', '1', '75', 'admin-assets/assets/image/products/200818539.jpg', '13', 'COD', 'Processing', '2023-09-06 04:29:47', '2023-09-06 04:29:47'),
(9, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', 'Brown Rice', '1', '150', 'admin-assets/assets/image/products/1338764808.jpg', '8', 'COD', 'Processing', '2023-09-06 04:29:48', '2023-09-06 04:29:48'),
(10, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', 'Mushroom Kofta in Tomato Gravy', '1', '200', 'admin-assets/assets/image/products/961547587.jpg', '12', 'COD', 'Processing', '2023-09-06 04:29:48', '2023-09-06 04:29:48'),
(11, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', 'Coca Cola', '1', '75', 'admin-assets/assets/image/products/200818539.jpg', '13', 'COD', 'Processing', '2023-09-06 04:47:25', '2023-09-06 04:47:25'),
(12, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', 'Coca Cola', '1', '75', 'admin-assets/assets/image/products/200818539.jpg', '13', 'Paid', 'Delivered', '2023-09-06 09:59:04', '2023-09-06 11:19:27'),
(13, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', 'Mushroom Kofta in Tomato Gravy', '1', '200', 'admin-assets/assets/image/products/1589935814.jpg', '12', 'COD', 'Processing', '2023-09-06 09:59:04', '2023-09-06 09:59:04'),
(14, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', 'Whte Rice with Vegetable', '1', '200', 'admin-assets/assets/image/products/1830855645.jpg', '6', 'Paid', 'Delivered', '2023-09-06 09:59:04', '2023-09-06 11:39:43'),
(15, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', 'Meat 01', '1', '950', 'admin-assets/assets/image/products/216801881.webp', '14', 'Paid', 'Delivered', '2023-09-06 13:10:08', '2023-09-06 13:10:38'),
(16, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', 'Coca Cola', '1', '75', 'admin-assets/assets/image/products/200818539.jpg', '13', 'COD', 'Processing', '2023-09-06 13:10:08', '2023-09-06 13:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(2, 'Daily', '1000', '2023-09-04 19:45:26', '2023-09-04 19:45:26'),
(3, 'Weekly', '10000', '2023-09-04 19:45:34', '2023-09-04 19:45:34'),
(4, 'Monthly', '20000', '2023-09-04 19:45:44', '2023-09-04 19:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('shakil3300bd@gmail.com', '$2y$10$Nr5oL8FZ685EFKjU3PJEJO.onzX2F/wVfqPOiM6JoJwb6OxeHWYke', '2023-09-06 05:47:30');

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
-- Table structure for table `pkg_carts`
--

CREATE TABLE `pkg_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `p_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pkg_carts`
--

INSERT INTO `pkg_carts` (`id`, `p_name`, `price`, `quantity`, `user_id`, `name`, `email`, `phone`, `address`, `p_id`, `created_at`, `updated_at`) VALUES
(9, 'Monthly', '20000', '1', '5', 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '4', '2023-09-06 14:14:33', '2023-09-06 14:14:33'),
(10, 'Monthly', '20000', '1', '5', 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '4', '2023-09-06 14:18:58', '2023-09-06 14:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `pkg_orders`
--

CREATE TABLE `pkg_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `delivery_status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pkg_orders`
--

INSERT INTO `pkg_orders` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `p_name`, `quantity`, `price`, `product_id`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(1, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', 'User', '1', '1000', '2', 'Paid', 'Delivered', '2023-09-04 23:37:01', '2023-09-04 23:48:25'),
(2, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', 'Office 01', '1', '20000', '4', 'COD', 'Processing', '2023-09-06 04:27:22', '2023-09-06 04:27:22'),
(3, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', 'Office 01', '1', '20000', '4', 'COD', 'Processing', '2023-09-06 04:27:22', '2023-09-06 04:27:22'),
(4, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', 'Office 01', '1', '20000', '4', 'COD', 'Processing', '2023-09-06 04:36:59', '2023-09-06 04:36:59'),
(5, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', 'Office 01', '1', '10000', '3', 'COD', 'Processing', '2023-09-06 04:44:34', '2023-09-06 04:44:34'),
(6, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', 'Office 01', '1', '20000', '4', 'COD', 'Processing', '2023-09-06 10:30:04', '2023-09-06 10:30:04'),
(7, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', 'Office 01', '1', '20000', '4', 'Paid', 'Delivered', '2023-09-06 10:31:08', '2023-09-06 10:31:49');

-- --------------------------------------------------------

--
-- Table structure for table `platters`
--

CREATE TABLE `platters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `platters`
--

INSERT INTO `platters` (`id`, `name`, `price`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Omeletto Italiano', '750', 'Mild Italian Sausage, mushroom, roasted red peppers, onion, thai kale & mozzarella topped w/tomato basil sauce and grated parmesan. Served with breakfast potatoes, choice of toast & a side of giardiniera. 14.49', '2023-09-04 20:00:32', '2023-09-04 20:00:32'),
(3, 'Salsiccia Linguine', '1200', 'Mild Italian Sausage, roasted mushrooms, thai kale, tomato & basil sauce, onion, roasted red pepper & grated parmesan topped w/fried kale & tossed with linguine. 18.99', '2023-09-04 20:01:05', '2023-09-04 20:01:05'),
(4, 'Buffalo Cauliflower', '900', 'Crispy fried cauliflower, bualo sauce, ranch drizzle, green onions and blue cheese crumbles', '2023-09-04 20:02:45', '2023-09-04 20:02:45'),
(5, 'Pulled Pork Tacos', '950', '3 slow cooked pulled pork tacos with onion, cilantro and a housemade pineapple salsa', '2023-09-04 20:03:13', '2023-09-04 20:03:13'),
(6, 'Omeletto Italiano', '700', 'Mild Italian Sausage, mushroom, roasted red peppers, onion, thai kale & mozzarella topped w/tomato basil sauce and grated parmesan. Served with breakfast potatoes, choice of toast & a side of giardiniera. 14.49', '2023-09-04 20:07:34', '2023-09-04 20:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `image`, `category`, `quantity`, `price`, `discount_price`, `created_at`, `updated_at`) VALUES
(1, 'Happy Lunch', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'admin-assets/assets/image/products/512509343.jpg', 'Lunch', '100', '1000', NULL, '2023-08-27 19:44:59', '2023-08-27 19:44:59'),
(2, 'White Rice', '\"White rice, a staple grain, is polished to remove its outer layer, resulting in a clean and refined appearance. It boasts a mild, neutral flavor and a soft, fluffy texture when cooked. Commonly used as a base in various cuisines, white rice complements a wide array of dishes, from savory curries to stir-fries. Its versatility and easy digestion make it a popular choice in many cultures around the world.\"', 'admin-assets/assets/image/products/1276010051.jpg', 'Lunch', '70', '300', '260', '2023-08-27 19:45:46', '2023-08-27 21:47:24'),
(3, 'White Rice with Vegetable and Carry', '\"Indulge in the perfect blend of simplicity and flavor with our white rice vegetable curry. Delicate, fluffy white rice serves as the canvas for an array of vibrant vegetables, gently simmered in a rich, aromatic sauce. This dish presents a symphony of textures and tastes, where the tenderness of the vegetables meets the grains\' fluffy embrace. Each bite unfolds a story of wholesome nourishment and culinary craftsmanship, making it a heartwarming choice for those seeking both comfort and a balanced meal. Elevate your dining experience with this fusion of grains and garden-fresh goodness.\"', 'admin-assets/assets/image/products/595289069.jpg', 'Lunch', '100', '250', NULL, '2023-08-27 21:52:20', '2023-08-27 21:52:20'),
(4, 'Brown Rice', '\"Embrace health and flavor with our nutty and wholesome brown rice. Unpolished and with its bran intact, this rice variant is rich in nutrients and fiber, offering a chewier texture and earthier taste. Its natural nutty aroma and ability to absorb flavors make it a versatile addition to a variety of cuisines. Brown rice supports digestion, energy levels, and satiety, making it a smart choice for a balanced diet. Elevate your meals with this whole grain option that not only nourishes the body but also delights the palate with its robust character.\"', 'admin-assets/assets/image/products/881491192.webp', 'Rice', '50', '350', '350', '2023-08-27 21:53:12', '2023-09-06 00:00:32'),
(5, 'South Indian Combo Lunch', '\"Embrace health and flavor with our nutty and wholesome brown rice. Unpolished and with its bran intact, this rice variant is rich in nutrients and fiber, offering a chewier texture and earthier taste. Its natural nutty aroma and ability to absorb flavors make it a versatile addition to a variety of cuisines. Brown rice supports digestion, energy levels, and satiety, making it a smart choice for a balanced diet. Elevate your meals with this whole grain option that not only nourishes the body but also delights the palate with its robust character.\"', 'admin-assets/assets/image/products/1440643669.jpg', 'Lunch', '100', '400', '400', '2023-08-27 21:54:51', '2023-09-04 23:57:13'),
(6, 'Whte Rice with Vegetable', '\"Embrace health and flavor with our nutty and wholesome brown rice. Unpolished and with its bran intact, this rice variant is rich in nutrients and fiber, offering a chewier texture and earthier taste. Its natural nutty aroma and ability to absorb flavors make it a versatile addition to a variety of cuisines. Brown rice supports digestion, energy levels, and satiety, making it a smart choice for a balanced diet. Elevate your meals with this whole grain option that not only nourishes the body but also delights the palate with its robust character.\"', 'admin-assets/assets/image/products/1830855645.jpg', 'Lunch', '100', '220', '200', '2023-08-27 21:55:25', '2023-08-27 21:55:25'),
(7, 'White Rice', 'Making rice is an essential cooking technique you\'ll use again and again—and with this recipe, you\'ll make fluffy, perfect white rice every time. The secret to this foolproof method is adding long-grain rice (and salt) to a measured amount of boiling water, as opposed to starting the rice in a cold pot. This technique keeps the grains intact, so you can say goodbye to mushy, stuck-together clumps.', 'admin-assets/assets/image/products/1528034565.jpg', 'Rice', '50', '30', '48', '2023-09-05 02:27:53', '2023-09-05 02:27:53'),
(8, 'Brown Rice', 'Brown rice is a whole grain rice with the inedible outer hull removed. This kind of rice sheds its outer hull or husk but the bran and germ layer remain on, constituting the brown or tan colour of rice.[1] White rice is the same grain without the hull, the bran layer, and the cereal germ. Red rice, gold rice, and black rice (also called purple rice) are all whole rices with differently pigmented outer layers.', 'admin-assets/assets/image/products/1338764808.jpg', 'Rice', '100', '150', NULL, '2023-09-05 02:28:53', '2023-09-05 02:28:53'),
(9, 'Extra Brown Rice', 'Brown rice is a whole grain rice with the inedible outer hull removed. This kind of rice sheds its outer hull or husk but the bran and germ layer remain on, constituting the brown or tan colour of rice.[1] White rice is the same grain without the hull, the bran layer, and the cereal germ. Red rice, gold rice, and black rice (also called purple rice) are all whole rices with differently pigmented outer layers.', 'admin-assets/assets/image/products/215972326.webp', 'Rice', '100', '100', '100', '2023-09-05 02:30:41', '2023-09-06 00:00:11'),
(10, 'Masala Channa', 'This Chana Masala, also known as Chole Masala, is an authentic North Indian style curry made with white chickpeas, freshly powdered spices, onions, tomatoes and herbs. Naturally vegan and packed with healthy minerals, protein and fiber, this delicious vegetarian meal can be ready in just 45 minutes minus the soaking time of chickpeas.', 'admin-assets/assets/image/products/382304582.jpg', 'Vagetable', '100', '120', NULL, '2023-09-05 07:22:13', '2023-09-05 07:22:13'),
(11, 'Aamras Ki Kadhi', 'About Aamras Ki Kadhi Recipe: A quick, easy and tangy curry, Aamras ki Kadhi is a delicious blend of raw mango puree, buttermik and besan along with a host of other aromatic spices and chillies. Finished with a generous amount of boondi sauteed with the kadhi and a spicy tempering all over. This is a great option to cook for a hearty Sunday lunch, served with hot chapatis or rice.', 'admin-assets/assets/image/products/1308662085.jpg', 'Vagetable', '100', '150', '130', '2023-09-05 07:23:26', '2023-09-05 07:23:26'),
(12, 'Mushroom Kofta in Tomato Gravy', 'About Mushroom Kofta in Tomato Gravy Recipe: Spinach and paneer dough stuffed with mushrooms and fried to make koftas. Dipped in creamy tomato gravy with cashew paste. Serve these mushroom koftas along with some steamed rice for a perfect meal.', 'admin-assets/assets/image/products/1589935814.jpg', 'Vagetable', '200', '200', '200', '2023-09-05 07:24:36', '2023-09-05 23:59:44'),
(13, 'Coca Cola', 'Coca‑Cola Company Jobs We seek employees that embrace change, champion diversity and push for progress. Your skills and experience will help us navigate the ever-changing global landscape and guide us into the next chapter and beyond.', 'admin-assets/assets/image/products/200818539.jpg', 'Soft Drinks', '100', '75', NULL, '2023-09-05 07:36:30', '2023-09-05 07:36:30'),
(14, 'Meat 01', 'fgbsjkfjdiojm kjjhdiojhadn', 'admin-assets/assets/image/products/216801881.webp', 'Meat', '100', '1000', '950', '2023-09-06 10:22:37', '2023-09-06 10:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `phone`, `address`, `user_id`, `product_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', '9', '3', '2023-09-05 03:54:16', '2023-09-05 03:54:16'),
(2, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', '8', '5', '2023-09-05 07:12:25', '2023-09-05 07:12:25'),
(3, 'Office 01', 'office@office.com', '01517868256', 'Mirpur-2, Dhaka', '5', '10', '4', '2023-09-05 07:52:46', '2023-09-05 07:52:46'),
(4, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', '12', '4', '2023-09-06 03:40:10', '2023-09-06 03:40:10'),
(5, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', '12', '4', '2023-09-06 03:44:09', '2023-09-06 03:44:09'),
(6, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', '7', '3', '2023-09-06 03:45:34', '2023-09-06 03:45:34'),
(7, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', '13', '4', '2023-09-06 03:48:05', '2023-09-06 03:48:05'),
(8, 'User', 'shakil3300bd@gmail.com', '01517868256', 'Mirpur-2, Dhaka', '1', '13', '4', '2023-09-06 03:49:09', '2023-09-06 03:49:09');

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
('JXEiL1sGjlzbpasevJCIuD0Rwpt9AUkpVzjG49hS', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTDlsREpUQjVaMUhZcmxZd291dVB1N0lGcURYUDRrVzBkTXhpbURoUSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9mb29kYXBwL3B1YmxpYy9vcmRlciI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1694420455);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `subname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specials`
--

CREATE TABLE `specials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specials`
--

INSERT INTO `specials` (`id`, `name`, `price`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Item 01', '2000', 'admin-assets/assets/image/products/1438184853.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-09-06 06:17:29', '2023-09-06 06:28:21'),
(3, 'Item 01', '1000', 'admin-assets/assets/image/products/779468908.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2023-09-06 06:34:10', '2023-09-06 06:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `office_code` varchar(255) DEFAULT NULL,
  `office_id` varchar(255) DEFAULT NULL,
  `num_employees` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `phone`, `address`, `email_verified_at`, `password`, `location`, `office_code`, `office_id`, `num_employees`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'User', 'shakil3300bd@gmail.com', '0', '01517868256', 'Mirpur-2, Dhaka', NULL, '$2y$10$/AZ2gnaOOkfW..szzxaRMOuVr6zO0lNm61.MfMDulfTpWw3Et/n5m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04 09:42:10', '2023-09-04 09:42:10'),
(2, 'Admin', 'shakil.180csebubt@gmail.com', '1', '01784918947', 'Rupnagar R/A , Mirpur-02, Dhaka-1216', NULL, '$2y$10$GzvTVRprDrjq90m.4d.6CumGHSQo3EecSJCsmfGGDfU/bVsYz/n6i', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-04 09:42:36', '2023-09-04 09:42:36'),
(3, 'Admin 02', 'admin@admin.com', '2', '01987878767', 'Mirpur', NULL, '$2y$10$.B.bp8nuIuRuAJa771jAl..Umta.wvWPFMvezKGubomKilITuJXaW', NULL, 'Xb02', '1', '50', NULL, NULL, NULL, '2023-09-04 09:43:53', '2023-09-06 02:03:13'),
(4, 'MD. Abdulllah Al Shakil', 'empbd@gmail.com', '0', '01517868256', 'Mirpur-2, Dhaka', NULL, '$2y$10$dt6A8klmfDIeJABoBrTBvu/LxCHgG0YVDIWfTJnhTaWSpnSqpK6Vi', NULL, '234der', '1', NULL, NULL, NULL, NULL, '2023-09-04 09:44:27', '2023-09-04 09:44:27'),
(5, 'Office 01', 'office@office.com', '2', '01517868256', 'Mirpur-2, Dhaka', NULL, '$2y$10$BGDakYry9nFTTkFSK2EDU.LJafodPbyU9D99QvbDGnhjN8tHqyWD6', NULL, 'HAT2M1', '1', '50', NULL, NULL, NULL, '2023-09-04 09:45:12', '2023-09-04 09:45:12'),
(6, 'Office 02', 'office2@mail.com', '2', '0187876666', 'Mirpur', NULL, '$2y$10$P8jeeQD8sxcDIFalh40ym.0lb/ryvWbzyudKT7c248SBgW5.WkxKe', NULL, 'HAT2M1', '1', '50', NULL, NULL, NULL, '2023-09-06 02:10:14', '2023-09-06 02:10:14'),
(7, 'Shakkil', 'mail@mail.com', '2', '9789798078907', 'jklhkd;jnjkn', NULL, '$2y$10$cOVkcM4cMm/y9Pj4VkZrvO5j1cDoa27rzTFsyyanSVNit33IGtWku', NULL, 'sjo', '122', '100', NULL, NULL, NULL, '2023-09-06 05:46:10', '2023-09-06 05:46:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_orders`
--
ALTER TABLE `custom_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_manages`
--
ALTER TABLE `event_manages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `joins`
--
ALTER TABLE `joins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_carts`
--
ALTER TABLE `menu_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_cart_orders`
--
ALTER TABLE `menu_cart_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
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
-- Indexes for table `pkg_carts`
--
ALTER TABLE `pkg_carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pkg_orders`
--
ALTER TABLE `pkg_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `platters`
--
ALTER TABLE `platters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specials`
--
ALTER TABLE `specials`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `custom_orders`
--
ALTER TABLE `custom_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_manages`
--
ALTER TABLE `event_manages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `joins`
--
ALTER TABLE `joins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_carts`
--
ALTER TABLE `menu_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu_cart_orders`
--
ALTER TABLE `menu_cart_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pkg_carts`
--
ALTER TABLE `pkg_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pkg_orders`
--
ALTER TABLE `pkg_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `platters`
--
ALTER TABLE `platters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specials`
--
ALTER TABLE `specials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
