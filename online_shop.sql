-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 20, 2020 lúc 11:20 AM
-- Phiên bản máy phục vụ: 8.0.21
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
create database online_shop;
use online_shop;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `online_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cates`
--

CREATE TABLE `cates` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `order` int NOT NULL,
  `parent_id` int NOT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(16, 'Iphone', 'iphone', 1, 0, 'Áo sơ mi', 'Áo sơ mi', '2016-08-01 08:53:11', '2020-12-19 15:33:56'),
(17, 'Iphone12', 'iphone12', 2, 16, 'Iphone', 'Iphone 12 mới', '2016-08-01 08:53:42', '2020-12-19 15:52:41'),
(18, 'Iphone bản trước', 'iphone-ban-truoc', 3, 16, 'Iphone', 'Iphone cũ ', '2016-08-01 08:54:01', '2020-12-19 20:46:20'),
(19, 'Oppo', 'oppo', 4, 0, 'Oppo', 'Oppo', '2016-08-01 08:54:22', '2020-12-19 16:20:18'),
(20, 'Samsung', 'samsung', 5, 0, 'Samsung', 'Samsung', '2016-08-01 08:54:42', '2020-12-19 15:52:04'),
(21, 'Xiaomi', 'xiaomi', 6, 0, 'Xiaomi', 'Xiaomi, China', '2016-08-01 08:55:25', '2020-12-19 16:20:51'),
(22, 'Vivo', 'vivo', 7, 0, 'Vivo', 'Vivo', '2016-08-01 08:55:46', '2020-12-19 16:21:26'),
(23, 'Realme', 'realme', 8, 0, 'Realme', 'Realme', '2016-08-01 08:56:07', '2020-12-19 16:23:30'),
(25, 'Phụ kiện', 'phu-kien', 10, 0, 'Phụ kiện', 'Phụ kiện', '2016-08-01 08:56:44', '2020-12-19 16:22:24'),
(26, 'Củ sạc', 'cu-sac', 11, 25, 'Charge', 'Củ sạc điện thoại', '2016-08-01 08:57:56', '2020-12-19 16:22:43'),
(27, 'Cáp sạc', 'cap-sac', 12, 25, 'Cáp', 'Cáp sạc', '2016-08-01 08:58:10', '2020-12-19 16:23:03'),
(31, 'Samsung Note 20', 'samsung-note-20', 13, 20, 'Samsung', 'Samsung note 20\r\n', '2020-12-19 16:24:24', '2020-12-19 16:25:35'),
(32, 'Samsung bản trước', 'samsung-ban-truoc', 14, 20, 'Samsung', 'ok', '2020-12-19 17:00:25', '2020-12-19 20:46:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_07_07_041211_create_cates_table', 1),
('2016_07_07_042014_create_products_table', 1),
('2016_07_07_042609_create_product_images_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `intro` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `cate_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `price`, `intro`, `content`, `image`, `keywords`, `description`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 'Iphone 12 mini 64 GB', 'iphone-12-mini-64-gb', 219900, '                                                                                                                        Iphone 12 đỏ                                                                                                                                         ', '                                                                                                                                                                                                                                                                        ', '3347.png', 'Iphone', '  ', 2, 17, '2016-08-01 09:01:27', '2016-08-01 09:01:27'),
(2, 'Iphone 12 64 GB', 'iphone-12-64-gb', 339000, '                                                                                        ', '                                                                                        ', '4461.jpg', '', '  ', 2, 17, '2016-08-01 09:06:07', '2016-08-01 09:06:07'),
(3, 'Iphone 12 pro max 512GB', 'iphone-12-pro-max-512gb', 339000, '                                            ', '                                            ', '4469.jpg', 'Iphone', '  ', 2, 17, '2016-08-01 09:07:39', '2016-08-01 09:07:39'),
(4, 'Iphone 12 pro 512 GB', 'iphone-12-pro-512-gb', 339000, '                                            ', '                                            ', '4456.jpg', 'Iphone', '  ', 2, 17, '2016-08-01 09:12:00', '2016-08-01 09:12:00'),
(5, 'Iphone 12 256 GB', 'iphone-12-256-gb', 339000, '                                            ', '                                            ', '4477.jpg', 'Iphone', '  ', 2, 17, '2016-08-01 09:13:03', '2016-08-01 09:13:03'),
(6, 'Iphone 12 mini 128 GB', 'iphone-12-mini-128-gb', 365000, '                                            ', '                                            ', '0022.jpg', 'Iphone', '  ', 2, 17, '2016-08-01 09:14:14', '2016-08-01 09:14:14'),
(7, 'Iphone 12 pro max 256 GB', 'iphone-12-pro-max-256-gb', 365000, '                                            ', '                                            ', '9947.jpg', 'Iphone', '    ', 2, 17, '2016-08-01 09:16:12', '2016-08-01 09:16:12'),
(9, 'Iphone 12 pro max 128 GB', 'iphone-12-pro-max-128-gb', 365000, '                                            ', '                                            ', '9961.jpg', 'Iphone', '  ', 2, 17, '2016-08-01 10:40:16', '2016-08-01 10:40:16'),
(10, 'Iphone 12 Pro 256 GB', 'iphone-12-pro-256-gb', 365000, '                                            ', '                                            ', '9952.jpg', 'Iphone', '    ', 2, 17, '2016-08-01 10:41:19', '2016-08-01 10:44:41'),
(11, 'Iphone 12 128 GB', 'iphone-12-128-gb', 365000, '                                            ', '                                            ', '9018.jpg', 'Iphone', '    ', 2, 17, '2016-08-01 10:43:43', '2016-08-01 10:43:43'),
(12, 'Iphone XS 64 GB', 'iphone-xs-64-gb', 469000, '                                            ', '                                            ', '0853.png', 'Iphone', '    ', 2, 18, '2016-08-01 10:47:17', '2016-08-01 10:47:17'),
(13, 'Iphone SE 256 GB', 'iphone-se-256-gb', 469000, '                                            ', '                                            ', '0848.png', 'Iphone', '  ', 2, 18, '2016-08-01 10:48:24', '2016-08-01 10:48:24'),
(14, 'Iphone XR 64 GB', 'iphone-xr-64-gb', 469000, '                                            ', '                                            ', '8463.png', 'Iphone', '  ', 2, 18, '2016-08-01 10:49:16', '2016-08-01 10:49:16'),
(15, 'Oppo Reno 4', 'oppo-reno-4', 295000, '                                            ', '                                            ', '4452.jpg', 'Oppo', '  ', 2, 19, '2016-08-01 10:50:57', '2016-08-01 10:50:57'),
(16, 'Oppo Find X2', 'oppo-find-x2', 225000, '                                            ', '                                            ', '3991.jpg', 'Oppo', '    ', 2, 19, '2016-08-01 10:54:02', '2016-08-01 10:54:02'),
(17, 'Oppo Reno 3 Pro', 'oppo-reno-3-pro', 295000, '                                            ', '                                            ', '4444.jpg', 'Oppo', '  ', 2, 19, '2016-08-01 10:55:19', '2016-08-01 10:55:19'),
(18, 'Samsung Galaxy Note 20 Ultra 5G', 'samsung-galaxy-note-20-ultra-5g', 285000, '                                            ', '                                            ', 'ACT_0007.png', 'Samsung', '    ', 2, 31, '2016-08-01 10:57:02', '2016-08-01 10:57:02'),
(19, 'Samsung Galaxy S20+', 'samsung-galaxy-s20+', 285000, '                                                                                        ', '                                                                                        ', 'ACT_0006.png', 'Samsung', '    ', 2, 31, '2016-08-01 10:57:42', '2016-08-01 10:57:42'),
(20, 'Samsung Galaxy Note 10+', 'samsung-galaxy-note-10+', 285000, '                                            ', '                                            ', 'ACT_0005.png', 'Samsung', '    ', 2, 32, '2016-08-01 10:58:19', '2016-08-01 10:58:19'),
(21, 'Samsung Galaxy M51', 'samsung-galaxy-m51', 285000, '                                            ', '                                            ', 'ACT_0004.png', 'Samsung', '  ', 2, 32, '2016-08-01 10:58:42', '2016-08-01 10:58:42'),
(22, 'Samsung Galaxy Note 10 Lite', 'samsung-galaxy-note-10-lite', 285000, '                                                                                        ', '                                                                                        ', 'ACT_0003.png', 'Samsung', '    ', 2, 32, '2016-08-01 10:59:06', '2016-08-02 01:52:44'),
(23, 'Xiaomi Redmi 9', 'xiaomi-redmi-9', 409000, '                                            ', '                                            ', '4423.jpg', 'Xiaomi', '  ', 2, 21, '2016-08-01 11:00:48', '2016-08-01 11:00:48'),
(24, 'Xiaomi 10T Pro 5G', 'xiaomi-10t-pro-5g', 409000, '                                                                                        ', '                                                                                        ', '4419.jpg', 'Xiaomi', '  ', 2, 21, '2016-08-01 11:01:26', '2016-08-01 11:01:26'),
(25, 'Xiaomi Redmi Note 9 Pro', 'xiaomi-redmi-note-9-pro', 370000, '                                            ', '                                            ', '160412-1.jpg', 'Xiaomi', '  ', 2, 21, '2016-08-01 11:02:09', '2016-08-01 11:02:09'),
(26, 'Vivo Y12S', 'vivo-y12s', 535000, '                                            ', '                                            ', '1602580-1.jpg', 'Vivo', '  ', 2, 22, '2016-08-01 11:03:15', '2016-08-01 11:03:15'),
(27, 'Vivo X50 Pro', 'vivo-x50-pro', 535000, '                                            ', '                                            ', '1601000-1.jpg', 'Vivo', '  ', 2, 22, '2016-08-01 11:04:04', '2016-08-01 11:04:04'),
(28, 'Vivo V19', 'vivo-v19', 535000, '                                            ', '                                            ', '1600980-1.jpg', '', '  ', 2, 22, '2016-08-01 11:04:42', '2016-08-01 11:04:42'),
(31, 'Realme C15', 'realme-c15', 353000, '                                            ', '                                            ', '9671.jpg', 'Realme', '  ', 2, 23, '2016-08-01 11:09:36', '2016-08-01 11:09:36'),
(32, 'Realme 7 Pro', 'realme-7-pro', 353000, '                                            ', '                                            ', '9683.jpg', 'Realme', '  ', 2, 23, '2016-08-01 11:10:20', '2016-08-01 11:10:20'),
(33, 'Realme 6 Pro', 'realme-6-pro', 353000, '                                            ', '                                            ', '9674.jpg', 'Realme', '    ', 2, 23, '2016-08-01 11:11:44', '2016-08-01 11:11:44'),
(34, 'Cáp Type C DS954', 'cap-type-c-ds954', 50000, '                                            ', '                                            ', '4360.jpg', '', '  ', 2, 27, '2016-08-01 11:12:44', '2016-08-01 11:12:44'),
(35, 'Cáp 3 đầu Spanker D2', 'cap-3-dau-spanker-d2', 45000, '                                            ', '                                            ', '4369.jpg', 'Cáp sạc', '    ', 2, 27, '2016-08-01 11:13:24', '2016-08-01 11:13:24'),
(36, 'Adapter 2 cổng DS674', 'adapter-2-cong-ds674', 45000, '                                            ', '                                            ', '4371.jpg', '', '  ', 2, 26, '2016-08-01 11:13:44', '2016-08-01 11:13:44'),
(37, 'Adapter Type C', 'adapter-type-c', 99000, '                                            ', '                                            ', '5269.jpg', '', '  ', 2, 26, '2016-08-01 11:15:16', '2016-08-01 11:15:16'),
(38, 'Iphone 11 64 GB', 'iphone-11-64-gb', 199900, '                        new                                                     ', '                        new                                                                ', '51.jpg', 'Iphone', 'new', 2, 18, '2016-08-01 11:16:00', '2016-08-01 11:16:00'),
(39, 'Samsung Galaxy Note 20', 'samsung-galaxy-note-20', 279900, '                                                                        Samsung                                                                                              ', '                                                                        1                                                                                             ', '48.jpg', '', '1', 2, 31, '2016-08-01 11:16:39', '2016-08-01 11:16:39'),
(41, 'Realme C17', 'realme-c17', 499000, '                        Realme C17                                                                ', '                        Đt Realme                                                                ', '0048.jpg', 'Realme', '    ', 2, 23, '2016-08-02 05:48:32', '2016-08-02 05:49:29'),
(43, 'Iphone 12 mini 65 GB ', 'iphone-12-mini-65-gb', 219900, '', '', '0022.jpg', 'Iphone', ' ', 2, 16, '2020-12-20 05:34:43', '2020-12-20 05:34:43'),
(44, 'Samsung thêm', 'samsung-them', 999999, '                                            ', '                                            ', 'ACT_0004.png', 'Samsung', ' ', 2, 32, '2020-12-20 05:38:33', '2020-12-20 05:38:33'),
(45, 'Iphone 12 mini 111 GB', 'iphone-12-mini-111-gb', 219900, '', '', '0853.png', 'Iphone', ' ', 2, 17, '2020-12-20 06:42:08', '2020-12-20 06:42:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` int UNSIGNED NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(5, '4462.jpg', 2, '2016-08-01 09:06:07', '2016-08-01 09:06:07'),
(6, '4392.jpg', 2, '2016-08-01 09:06:07', '2016-08-01 09:06:07'),
(8, '4470.jpg', 3, '2016-08-01 09:07:39', '2016-08-01 09:07:39'),
(9, '4390.jpg', 3, '2016-08-01 09:07:39', '2016-08-01 09:07:39'),
(11, '4457.jpg', 4, '2016-08-01 09:12:01', '2016-08-01 09:12:01'),
(12, '4403.jpg', 4, '2016-08-01 09:12:01', '2016-08-01 09:12:01'),
(14, '4479.jpg', 5, '2016-08-01 09:13:03', '2016-08-01 09:13:03'),
(15, '4395.jpg', 5, '2016-08-01 09:13:03', '2016-08-01 09:13:03'),
(17, '0020.jpg', 6, '2016-08-01 09:14:15', '2016-08-01 09:14:15'),
(18, '0021.jpg', 6, '2016-08-01 09:14:15', '2016-08-01 09:14:15'),
(21, '9947.jpg', 7, '2016-08-01 09:16:12', '2016-08-01 09:16:12'),
(22, '9948.jpg', 7, '2016-08-01 09:16:12', '2016-08-01 09:16:12'),
(23, '9901.jpg', 7, '2016-08-01 09:16:13', '2016-08-01 09:16:13'),
(25, '9960.jpg', 9, '2016-08-01 10:40:16', '2016-08-01 10:40:16'),
(26, '9962.jpg', 9, '2016-08-01 10:40:16', '2016-08-01 10:40:16'),
(27, '9916.jpg', 9, '2016-08-01 10:40:16', '2016-08-01 10:40:16'),
(29, '9951.jpg', 10, '2016-08-01 10:41:19', '2016-08-01 10:41:19'),
(30, '9953.jpg', 10, '2016-08-01 10:41:19', '2016-08-01 10:41:19'),
(33, '9017.jpg', 11, '2016-08-01 10:43:43', '2016-08-01 10:43:43'),
(34, '8924.jpg', 11, '2016-08-01 10:43:43', '2016-08-01 10:43:43'),
(35, '9907.jpg', 10, '2016-08-01 10:44:41', '2016-08-01 10:44:41'),
(37, '0854.png', 12, '2016-08-01 10:47:17', '2016-08-01 10:47:17'),
(38, '0857.png', 12, '2016-08-01 10:47:17', '2016-08-01 10:47:17'),
(39, '0730.png', 12, '2016-08-01 10:47:17', '2016-08-01 10:47:17'),
(41, '0849.png', 13, '2016-08-01 10:48:25', '2016-08-01 10:48:25'),
(42, '0850.png', 13, '2016-08-01 10:48:25', '2016-08-01 10:48:25'),
(43, '0734.png', 13, '2016-08-01 10:48:25', '2016-08-01 10:48:25'),
(45, '8466.png', 14, '2016-08-01 10:49:16', '2016-08-01 10:49:16'),
(46, '8467.png', 14, '2016-08-01 10:49:16', '2016-08-01 10:49:16'),
(47, 'mau-so-mi-02.png', 14, '2016-08-01 10:49:16', '2016-08-01 10:49:16'),
(49, '4453.jpg', 15, '2016-08-01 10:50:57', '2016-08-01 10:50:57'),
(50, '4405.jpg', 15, '2016-08-01 10:50:57', '2016-08-01 10:50:57'),
(52, '3992.jpg', 16, '2016-08-01 10:54:02', '2016-08-01 10:54:02'),
(53, '3993.jpg', 16, '2016-08-01 10:54:02', '2016-08-01 10:54:02'),
(55, '4445.jpg', 17, '2016-08-01 10:55:19', '2016-08-01 10:55:19'),
(56, '4407.jpg', 17, '2016-08-01 10:55:19', '2016-08-01 10:55:19'),
(58, '4424.jpg', 23, '2016-08-01 11:00:49', '2016-08-01 11:00:49'),
(60, '4420.jpg', 24, '2016-08-01 11:01:26', '2016-08-01 11:01:26'),
(62, '160412-2.jpg', 25, '2016-08-01 11:02:09', '2016-08-01 11:02:09'),
(64, '1602580-2.jpg', 26, '2016-08-01 11:03:15', '2016-08-01 11:03:15'),
(66, '1601000-2.jpg', 27, '2016-08-01 11:04:04', '2016-08-01 11:04:04'),
(68, '1600980-2.jpg', 28, '2016-08-01 11:04:42', '2016-08-01 11:04:42'),
(74, '9672.jpg', 31, '2016-08-01 11:09:36', '2016-08-01 11:09:36'),
(75, '9657.jpg', 31, '2016-08-01 11:09:36', '2016-08-01 11:09:36'),
(77, '9684.jpg', 32, '2016-08-01 11:10:20', '2016-08-01 11:10:20'),
(78, '9648.jpg', 32, '2016-08-01 11:10:20', '2016-08-01 11:10:20'),
(80, '9676.jpg', 33, '2016-08-01 11:11:44', '2016-08-01 11:11:44'),
(81, '9655.jpg', 33, '2016-08-01 11:11:44', '2016-08-01 11:11:44'),
(83, '5265.jpg', 37, '2016-08-01 11:15:16', '2016-08-01 11:15:16'),
(84, '5273.jpg', 37, '2016-08-01 11:15:16', '2016-08-01 11:15:16'),
(86, '52.jpg', 38, '2016-08-01 11:16:00', '2016-08-01 11:16:00'),
(87, '53.jpg', 38, '2016-08-01 11:16:00', '2016-08-01 11:16:00'),
(89, '49.jpg', 39, '2016-08-01 11:16:39', '2016-08-01 11:16:39'),
(90, '50.jpg', 39, '2016-08-01 11:16:39', '2016-08-01 11:16:39'),
(92, '0047.jpg', 41, '2016-08-02 05:48:32', '2016-08-02 05:48:32'),
(94, '9965.jpg', 41, '2016-08-02 05:49:29', '2016-08-02 05:49:29'),
(95, '3168.png', 1, '2016-12-12 16:56:19', '2016-12-12 16:56:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `password_md5` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `remember_token`, `created_at`, `updated_at`, `password_md5`) VALUES
(2, 'admin', '123456', 'admin@gmail.com', 2, 'ajJm1Yd4c8iWvWa332mCAgSnIMGht4z5ElJSxll8PVKERD21VwdoBrKophhk', '2016-07-28 19:45:25', '2016-12-12 23:39:19', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'member', '$2y$10$5/cTYfRUlhjOO8j6QNbu8uBsr6Y7dpJPDZvqV/36cvGRSKsETSAMW', 'member@gmail.com', 1, 'WjHjW8Fi00PfiCWt806vT4iDdzJaspE4JTc1eMNg', '2016-07-28 19:46:15', '2016-07-28 19:46:15', ''),
(4, 'super', '$2y$10$0A5JOYC8MqYmeZP0lFadXuL7nod5q8j2rsaGN8fiK.AQTBNHjy4tK', 'super@gmail.com', 3, 'WjHjW8Fi00PfiCWt806vT4iDdzJaspE4JTc1eMNg', '2016-07-28 21:06:37', '2016-07-28 21:06:37', ''),
(6, 's', '$2y$10$4pFvKmL4OmA8UVB1R0o.5OIw3/SjkyTU./HKr70FdhhfoxFsyKoi2', 's@gmail.com', 2, 'VY8fgD1SnND2JqIF2IT7LjorB1UaCembkt0V0AZu', '2016-12-12 23:31:22', '2016-12-12 23:31:22', ''),
(8, 'ad@gmail.com', '$2y$10$3k7eT8tdU9PDtHLdK/7OdeBT5sCY5oBVekRO.Hav25XX73Scklzmu', 'ad@gmail.com', 2, 'VY8fgD1SnND2JqIF2IT7LjorB1UaCembkt0V0AZu', '2016-12-13 00:35:17', '2016-12-13 00:38:23', ''),
(10, 'abc', '', 'abc@abc.com', 2, NULL, '2016-12-13 08:24:03', '2016-12-13 08:24:03', '900150983cd24fb0d6963f7d28e17f72');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cates_name_unique` (`name`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
