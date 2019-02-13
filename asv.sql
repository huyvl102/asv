-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 13, 2019 at 08:45 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asv`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent_id`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'CƠ KHÍ GIA CÔNG CNC', 'co-khi-gia-cong-cnc', NULL, 0, '2019-01-28 08:13:51', '2019-01-28 08:13:51'),
(2, 'CƠ KHÍ GIA CÔNG TẤM CNC', 'co-khi-gia-cong-tam-cnc', NULL, 0, '2019-01-28 08:14:18', '2019-01-28 08:14:18'),
(3, 'CHẾ TẠO MÁY VÀ TỰ ĐỘNG HOÁ', 'che-tao-may-va-tu-dong-hoa', NULL, 0, '2019-01-28 08:24:05', '2019-01-28 08:24:05'),
(4, 'THIẾT BỊ NHÀ XƯỞNG', 'thiet-bi-nha-xuong', NULL, 0, '2019-01-28 08:28:27', '2019-01-28 08:28:27'),
(5, 'CƠ KHÍ XÂY DỰNG', 'co-khi-xay-dung', NULL, 0, '2019-01-28 08:29:26', '2019-01-28 08:29:26'),
(6, 'CƠ KHÍ NỘI THẤT', 'co-khi-noi-that', NULL, 0, '2019-01-28 08:30:24', '2019-01-28 08:30:24'),
(7, 'CẮT LASER CNC TẤM - ỐNG - HỘP', 'cat-laser-cnc-tam-ong-hop', 1, 0, '2019-01-28 08:55:07', '2019-01-28 08:55:07'),
(8, 'CHẤN - DỘT - DẬP', 'chan-dot-dap', 1, 0, '2019-01-28 09:21:05', '2019-01-28 09:21:05'),
(9, 'PHAY TIỆN CNC', 'phay-tien-cnc', 1, 0, '2019-01-28 09:23:22', '2019-01-28 09:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `category_id`, `url`, `size`, `format`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'c2815f887910a132c688395ff22acc4b.png', '434.8 Kb', 'png', 0, '2019-01-28 08:13:51', '2019-01-28 08:22:24'),
(2, NULL, 2, '3655bceead0c16a2c72489153329d9ad.png', '227.4 Kb', 'png', 0, '2019-01-28 08:20:45', '2019-01-28 08:22:33'),
(3, NULL, 3, '575f4180b18f101cfd346a6137e75c3d.png', '654.8 Kb', 'png', 0, '2019-01-28 08:24:05', '2019-01-28 08:24:05'),
(4, NULL, 4, '49997b392899f18f0b04f1118392ed15.png', '318.2 Kb', 'png', 0, '2019-01-28 08:28:27', '2019-01-28 08:28:27'),
(5, NULL, 5, '6a1477f9490d6b7b03592c1bd28e2293.png', '2,443.5 Kb', 'png', 0, '2019-01-28 08:29:26', '2019-01-28 08:29:26'),
(6, NULL, 6, '4a9b4dec461f652a682db68ba3f61337.png', '767.5 Kb', 'png', 0, '2019-01-28 08:30:24', '2019-01-28 08:30:24'),
(7, NULL, 7, '0eba7d6d1ca96e906c4324ea616d330f.png', '434.8 Kb', 'png', 0, '2019-01-28 08:55:38', '2019-01-28 08:55:38'),
(8, NULL, 8, 'ac038187e21df30844c25d650c91a596.png', '434.8 Kb', 'png', 0, '2019-01-28 09:21:05', '2019-01-28 09:21:05'),
(9, NULL, 9, '3d0185dcf8bf68a583969787d52459ae.png', '434.8 Kb', 'png', 0, '2019-01-28 09:23:22', '2019-01-28 09:23:22'),
(10, 1, NULL, 'e0c37dbc95b61d8562f999ca3a7032e1.png', '318.9 Kb', 'png', 0, '2019-01-28 10:01:53', '2019-01-28 10:01:53'),
(11, 2, NULL, '661087f886389b33acb22cf255edb0d6.png', '137.8 Kb', 'png', 0, '2019-01-28 10:37:55', '2019-01-28 10:37:55'),
(12, 1, NULL, '242074c70c4c1daf2a9b3688c05dd919.png', '1,058.3 Kb', 'png', 0, '2019-01-28 10:38:09', '2019-01-28 10:38:09'),
(13, 1, NULL, 'bfded3a68d5b109a0af38b2ad1165932.png', '143.1 Kb', 'png', 0, '2019-01-28 10:38:09', '2019-01-28 10:38:09'),
(14, 1, NULL, '0b5557083f330cc964b0191fd9fd09b4.png', '137.8 Kb', 'png', 0, '2019-01-28 10:38:09', '2019-01-28 10:38:09'),
(15, 1, NULL, '12bf3dbb5c53d69c9c261f6cd0f3b0b0.png', '305.4 Kb', 'png', 0, '2019-01-28 10:38:09', '2019-01-28 10:38:09'),
(16, 3, NULL, '676668d48246511d911c2be636612a25.jpg', '15.4 Kb', 'jpg', 0, '2019-01-29 07:55:52', '2019-01-29 07:55:52'),
(17, 4, NULL, '0d88f3ecd804005d606cfaa10bc7c80d.jpg', '15.4 Kb', 'jpg', 0, '2019-01-29 08:11:06', '2019-01-29 08:11:06'),
(18, 5, NULL, '84bde0761a44a13ef06b7f7f1ff24303.jpg', '13.6 Kb', 'jpg', 0, '2019-01-29 08:26:45', '2019-01-29 08:26:45'),
(19, 6, NULL, 'ef1b2759751df7d0f56a2d9d296fdc75.jpg', '12.1 Kb', 'jpg', 0, '2019-01-29 08:27:50', '2019-01-29 08:27:50'),
(20, 7, NULL, '809db697282f2541f1f46fb08aaa4e83.jpg', '18.2 Kb', 'jpg', 0, '2019-01-29 08:30:09', '2019-01-29 08:30:09'),
(21, 8, NULL, 'dcb2534383ece88d386f8463fdb36d5f.jpg', '25.4 Kb', 'jpg', 0, '2019-01-29 08:30:51', '2019-01-29 08:30:51'),
(22, 9, NULL, 'c5913d8ba4258ef23d871c6493d62f27.jpg', '10.9 Kb', 'jpg', 0, '2019-01-29 08:31:32', '2019-01-29 08:31:32'),
(23, 10, NULL, '144fb2e54c08996013be681ff1f3ca30.jpg', '15.8 Kb', 'jpg', 0, '2019-01-29 08:32:03', '2019-01-29 08:32:03'),
(24, 11, NULL, 'cb767d91beb4228f0e1e2b0135beddfe.jpg', '13.6 Kb', 'jpg', 0, '2019-01-29 08:32:40', '2019-01-29 08:32:40'),
(25, 12, NULL, '359db8719619b13d83b14922d6eac6fd.jpg', '22.0 Kb', 'jpg', 0, '2019-01-29 08:45:39', '2019-01-29 08:45:39'),
(26, 13, NULL, '1ee27ff8caee799ea9e424cebcb17ae9.jpg', '16.2 Kb', 'jpg', 0, '2019-01-29 08:46:31', '2019-01-29 08:46:31'),
(27, 14, NULL, 'dd5c39c2f397cffaffe65cc866258ccb.jpg', '16.9 Kb', 'jpg', 0, '2019-01-29 08:47:07', '2019-01-29 08:47:07'),
(28, 15, NULL, 'bf0a7ded0e5c98f225c3bbf65cd9f134.jpg', '12.4 Kb', 'jpg', 0, '2019-01-29 08:48:20', '2019-01-29 08:48:20'),
(29, 16, NULL, 'daa016c81d125f4f291ab81c689a299a.jpg', '14.7 Kb', 'jpg', 0, '2019-01-29 08:49:11', '2019-01-29 08:49:11'),
(30, 17, NULL, 'ccd45e9b80db86f46e9a8fddc91c4ff4.jpg', '14.7 Kb', 'jpg', 0, '2019-01-29 08:49:44', '2019-01-29 08:49:44'),
(31, 18, NULL, '96c1ef159fb19441bb1d8d1bc9666bba.jpg', '12.5 Kb', 'jpg', 0, '2019-01-29 08:50:14', '2019-01-29 08:50:14'),
(32, 19, NULL, '72e590c497cc55f2f3c244ce44164b21.jpg', '12.5 Kb', 'jpg', 0, '2019-01-29 08:50:47', '2019-01-29 08:50:47');

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
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2019_01_17_144517_create_categories_table', 1),
(24, '2019_01_17_144541_create_products_table', 1),
(25, '2019_01_17_160628_create_images_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `category_id`, `is_deleted`, `created_at`, `updated_at`) VALUES
(4, 'CẮT LASER THEO BIÊN DẠNG ỐNG', 'cat-laser-theo-bien-dang-ong', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>Hiện nay, tr&ecirc;n thế giới v&agrave; Việt Nam nhu cầu&nbsp;<strong>gia c&ocirc;ng cắt Laser&nbsp;</strong>phổ biến,cắt laser thay thế hầu hết c&aacute;c phương ph&aacute;p cắt thủ c&ocirc;ng. M&aacute;y cắt laser c&oacute; thể gia c&ocirc;ng được tr&ecirc;n c&aacute;c loại vật liệu như: inox, th&eacute;p, nh&ocirc;m,&hellip;Đặc biệt, được sử dụng rộng r&atilde;i trong ng&agrave;nh chế t&aacute;c kim loại tấm.</p>\r\n\r\n<p>Tại Việt Nam,&nbsp;<strong>c&ocirc;ng ty ASV&nbsp;</strong>chuy&ecirc;n&nbsp;<strong>gia c&ocirc;ng&nbsp;cắt Laser</strong>&nbsp;với nhiều năm kinh nghiệm v&agrave; đội ngũ nh&acirc;n vi&ecirc;n l&agrave;nh nghề sẽ đem đến cho kh&aacute;ch h&agrave;ng c&aacute;c sản phẩm chất lượng nhất.</p>\r\n\r\n<p>Ưu điểm của&nbsp;gia c&ocirc;ng cắt laser:</p>\r\n\r\n<ul>\r\n	<li>Đadạng h&igrave;nh thức gia c&ocirc;ng: Cắt laser ỐNG, HỘP, T&Acirc;M&hellip;Tr&ecirc;n nhiều Vật liệu như: INOX, TH&Eacute;P T&Acirc;M, NH&Ocirc;M TẤM&hellip;.với độ d&agrave;y 0.45 &ndash; 20mm v&agrave; cắt d&agrave;i đến 6m.</li>\r\n	<li>Gia c&ocirc;ng y&ecirc;ucầu kh&aacute;ch h&agrave;ng.</li>\r\n	<li>C&ocirc;ng xuất m&aacute;y lớn, tốc độ cắt cao, giao h&agrave;ng nhanh ch&oacute;ng.</li>\r\n	<li>Chất lượng sản phẩm được đảm bảo, đường cắt sắc n&eacute;t.</li>\r\n</ul>\r\n\r\n<p>Với nhiều ưu điểm vượt trội,cắt laser&nbsp;sẽ l&agrave; lựa chọn h&agrave;ng đầu cho c&aacute;c cơ sở sản xuất kim loại tấm.</p>\r\n\r\n<p><strong>C&ocirc;ng</strong><strong>ty ASV&nbsp;</strong>nhận&nbsp;<strong>gia c&ocirc;ng cắt laser</strong>, gi&aacute; cạnh tranh, giao h&agrave;ng nhanh v&agrave; tận nơi. Với c&aacute;c sản phẩm chất lượng, m&aacute;y m&oacute;c hiện đại, độ ch&iacute;nh x&aacute;c cao. Để được đặt h&agrave;ng cũng như tư vấn th&ecirc;m th&ocirc;ng tin c&aacute;c bạn c&oacute; thể li&ecirc;n hệ với ch&uacute;ng t&ocirc;i qua số m&aacute;y&nbsp;094 9925 888&nbsp;để được hỗ trợ.</p>', 7, 0, '2019-01-29 08:11:06', '2019-01-29 08:11:06'),
(5, 'CẮT LASER HỘP', 'cat-laser-hop', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>Hiện nay, tr&ecirc;n thế giới v&agrave;Việt Nam nhu cầu&nbsp;<strong>gia c&ocirc;ng cắt Laser&nbsp;</strong>phổ biến,cắt laser thay thế hầu hết c&aacute;c phương ph&aacute;p cắt thủ c&ocirc;ng. M&aacute;y cắt laser c&oacute; thể gia c&ocirc;ng được tr&ecirc;n c&aacute;c loại vật liệu như: inox, th&eacute;p, nh&ocirc;m,&hellip;Đặc biệt, được sử dụng rộng r&atilde;i trong ng&agrave;nh chế t&aacute;c kim loại tấm.</p>\r\n\r\n<p>Tại Việt Nam,&nbsp;<strong>c&ocirc;ng ty ASV&nbsp;</strong>chuy&ecirc;n&nbsp;<strong>gia c&ocirc;ng&nbsp;cắt Laser</strong>&nbsp;với nhiều năm kinh nghiệm v&agrave; đội ngũ nh&acirc;n vi&ecirc;n l&agrave;nh nghề sẽ đem đến cho kh&aacute;ch h&agrave;ng c&aacute;c sản phẩm chất lượng nhất.</p>\r\n\r\n<p>Ưu điểm của&nbsp;gia c&ocirc;ng cắt laser:</p>\r\n\r\n<ul>\r\n	<li>Đadạng h&igrave;nh thức gia c&ocirc;ng: Cắt laser ỐNG, HỘP, T&Acirc;M&hellip;Tr&ecirc;n nhiều Vật liệu như: INOX, TH&Eacute;P T&Acirc;M, NH&Ocirc;M TẤM&hellip;.với độ d&agrave;y 0.45 &ndash; 20mm v&agrave; cắt d&agrave;i đến 6m.</li>\r\n	<li>Gia c&ocirc;ng y&ecirc;ucầu kh&aacute;ch h&agrave;ng.</li>\r\n	<li>C&ocirc;ng xuất m&aacute;y lớn,tốc độ cắt caogiao h&agrave;ng nhanh ch&oacute;ng.</li>\r\n	<li>Chất lượng sản phẩm được đảm bảo, đườngcắt sắc n&eacute;t.</li>\r\n</ul>\r\n\r\n<p>Với nhiều ưu điểm vượt trội,cắt laser&nbsp;sẽ l&agrave; lựa chọn h&agrave;ng đầu cho c&aacute;c cơ sở sản xuất kim loại tấm.</p>\r\n\r\n<p><strong>C&ocirc;ng</strong><strong>ty ASV&nbsp;</strong>nhận&nbsp;<strong>gia c&ocirc;ng cắt laser</strong>, gi&aacute; cạnh tranh, giao h&agrave;ng nhanh v&agrave; tận nơi. Với c&aacute;c sản phẩm chất lượng, m&aacute;y m&oacute;c hiện đại, độ ch&iacute;nh x&aacute;c cao. Để được đặt h&agrave;ng cũng như tư vấn th&ecirc;m th&ocirc;ng tin c&aacute;c bạn c&oacute; thể li&ecirc;n hệ với ch&uacute;ng t&ocirc;i qua số m&aacute;y&nbsp;094 9925 888&nbsp;để được hỗ trợ.</p>', 7, 0, '2019-01-29 08:26:45', '2019-01-29 08:26:45'),
(6, 'CẮT LASER ỐNG', 'cat-laser-ong', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>Hiện nay, tr&ecirc;n thế giới v&agrave;Việt Nam nhu cầu&nbsp;<strong>gia c&ocirc;ng cắt Laser</strong>phổ biến,cắt laser thay thế hầu hết c&aacute;c phương ph&aacute;p cắt thủ c&ocirc;ng. M&aacute;y cắt laser c&oacute; thể gia c&ocirc;ng được tr&ecirc;n c&aacute;c loại vật liệu như: inox, th&eacute;p, nh&ocirc;m,&hellip;Đặc biệt, được sử dụng rộng r&atilde;i trong ng&agrave;nh chế t&aacute;c kim loại tấm.</p>\r\n\r\n<p>Tại Việt Nam,&nbsp;<strong>c&ocirc;ng ty ASV</strong>chuy&ecirc;n&nbsp;<strong>gia c&ocirc;ng&nbsp;cắt Laser</strong>&nbsp;với nhiều năm kinh nghiệm v&agrave; đội ngũ nh&acirc;n vi&ecirc;n l&agrave;nh nghề sẽ đem đến cho kh&aacute;ch h&agrave;ng c&aacute;c sản phẩm chất lượng nhất.</p>\r\n\r\n<p>Ưu điểm của&nbsp;gia c&ocirc;ng cắt laser:</p>\r\n\r\n<ul>\r\n	<li>Đadạng h&igrave;nh thức gia c&ocirc;ng: Cắt laser ỐNG, HỘP, T&Acirc;M&hellip;Tr&ecirc;n nhiều Vật liệu như: INOX, TH&Eacute;P T&Acirc;M, NH&Ocirc;M TẤM&hellip;.với độ d&agrave;y 0.45 &ndash; 20mm v&agrave; cắt d&agrave;i đến 6m.</li>\r\n	<li>Gia c&ocirc;ng y&ecirc;ucầu kh&aacute;ch h&agrave;ng.</li>\r\n	<li>C&ocirc;ng xuất m&aacute;y lớn,tốc độ cắt caogiao h&agrave;ng nhanh ch&oacute;ng.</li>\r\n	<li>Chất lượng sản phẩm được đảm bảo, đườngcắt sắc n&eacute;t.</li>\r\n</ul>\r\n\r\n<p>Với nhiều ưu điểm vượt trội,cắt laser&nbsp;sẽ l&agrave; lựa chọn h&agrave;ng đầu cho c&aacute;c cơ sở sản xuất kim loại tấm.<strong>C&ocirc;ng</strong><strong>ty ASV</strong>nhận&nbsp;<strong>gia c&ocirc;ng cắt laser</strong>, gi&aacute; cạnh tranh, giao h&agrave;ng nhanh v&agrave; tận nơi. Với c&aacute;c sản phẩm chất lượng, m&aacute;y m&oacute;c hiện đại, độ ch&iacute;nh x&aacute;c cao. Để được đặt h&agrave;ng cũng như tư vấn th&ecirc;m th&ocirc;ng tin c&aacute;c bạn c&oacute; thể li&ecirc;n hệ với ch&uacute;ng t&ocirc;i qua số m&aacute;y&nbsp;094 9925 888&nbsp;để được hỗ trợ.</p>', 7, 0, '2019-01-29 08:27:50', '2019-01-29 08:27:50'),
(7, 'CẮT LASER HỘP', 'cat-laser-hop', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>\r\n\r\n<p>Hiện nay, tr&ecirc;n thế giới v&agrave;Việt Nam nhu cầu&nbsp;<strong>gia c&ocirc;ng cắt Laser</strong>phổ biến,cắt laser thay thế hầu hết c&aacute;c phương ph&aacute;p cắt thủ c&ocirc;ng. M&aacute;y cắt laser c&oacute; thể gia c&ocirc;ng được tr&ecirc;n c&aacute;c loại vật liệu như: inox, th&eacute;p, nh&ocirc;m,&hellip;Đặc biệt, được sử dụng rộng r&atilde;i trong ng&agrave;nh chế t&aacute;c kim loại tấm.</p>\r\n\r\n<p>Tại Việt Nam,&nbsp;<strong>c&ocirc;ng ty ASV</strong>chuy&ecirc;n&nbsp;<strong>gia c&ocirc;ng&nbsp;cắt Laser</strong>&nbsp;với nhiều năm kinh nghiệm v&agrave; đội ngũ nh&acirc;n vi&ecirc;n l&agrave;nh nghề sẽ đem đến cho kh&aacute;ch h&agrave;ng c&aacute;c sản phẩm chất lượng nhất.</p>\r\n\r\n<p>Ưu điểm của&nbsp;gia c&ocirc;ng cắt laser:</p>\r\n\r\n<ul>\r\n	<li>Đadạng h&igrave;nh thức gia c&ocirc;ng: Cắt laser ỐNG, HỘP, T&Acirc;M&hellip;Tr&ecirc;n nhiều Vật liệu như: INOX, TH&Eacute;P T&Acirc;M, NH&Ocirc;M TẤM&hellip;.với độ d&agrave;y 0.45 &ndash; 20mm v&agrave; cắt d&agrave;i đến 6m.</li>\r\n	<li>Gia c&ocirc;ng y&ecirc;ucầu kh&aacute;ch h&agrave;ng.</li>\r\n	<li>C&ocirc;ng xuất m&aacute;y lớn,tốc độ cắt caogiao h&agrave;ng nhanh ch&oacute;ng.</li>\r\n	<li>Chất lượng sản phẩm được đảm bảo, đườngcắt sắc n&eacute;t.</li>\r\n</ul>\r\n\r\n<p>Với nhiều ưu điểm vượt trội,cắt laser&nbsp;sẽ l&agrave; lựa chọn h&agrave;ng đầu cho c&aacute;c cơ sở sản xuất kim loại tấm.</p>\r\n\r\n<p><strong>C&ocirc;ng</strong><strong>ty ASV</strong>nhận&nbsp;<strong>gia c&ocirc;ng cắt laser</strong>, gi&aacute; cạnh tranh, giao h&agrave;ng nhanh v&agrave; tận nơi. Với c&aacute;c sản phẩm chất lượng, m&aacute;y m&oacute;c hiện đại, độ ch&iacute;nh x&aacute;c cao. Để được đặt h&agrave;ng cũng như tư vấn th&ecirc;m th&ocirc;ng tin c&aacute;c bạn c&oacute; thể li&ecirc;n hệ với ch&uacute;ng t&ocirc;i qua số m&aacute;y&nbsp;094 9925 888&nbsp;để được hỗ trợ.</p>', 7, 0, '2019-01-29 08:30:09', '2019-01-29 08:30:09'),
(8, 'CẮT VÁCH CNC', 'cat-vach-cnc', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>', 7, 0, '2019-01-29 08:30:51', '2019-01-29 08:30:51'),
(9, 'CẮT LASER NGHỆ THUẬT', 'cat-laser-nghe-thuat', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>', 7, 0, '2019-01-29 08:31:32', '2019-01-29 08:31:32'),
(10, 'CẮT LASER TẤM', 'cat-laser-tam', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>', 7, 0, '2019-01-29 08:32:03', '2019-01-29 08:32:03'),
(11, 'CẮT LASER TẤM', 'cat-laser-tam', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>', 7, 0, '2019-01-29 08:32:40', '2019-01-29 08:32:40'),
(12, 'SẢN PHẨM CHẤN GẤP', 'san-pham-chan-gap', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>', 8, 0, '2019-01-29 08:45:39', '2019-01-29 08:45:39'),
(13, 'TẤM SÓNG', 'tam-song', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>', 8, 0, '2019-01-29 08:46:31', '2019-01-29 08:46:31'),
(14, 'CHẤN GẤP SOI RÃNH', 'chan-gap-soi-ranh', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>', 8, 0, '2019-01-29 08:47:07', '2019-01-29 08:47:07'),
(15, 'SẢN PHẨM CHẤN ĐỘT DẬP', 'san-pham-chan-dot-dap', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>', 8, 0, '2019-01-29 08:48:20', '2019-01-29 08:48:20'),
(16, 'PHAY NHÔM', 'phay-nhom', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>', 9, 0, '2019-01-29 08:49:11', '2019-01-29 08:49:11'),
(17, 'PHAY CNC', 'phay-cnc', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>', 9, 0, '2019-01-29 08:49:44', '2019-01-29 08:49:44'),
(18, 'SẢN PHẨM PHAY TIỆN CNC', 'san-pham-phay-tien-cnc', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>', 9, 0, '2019-01-29 08:50:14', '2019-01-29 08:50:14'),
(19, 'PHAY CNC', 'phay-cnc', '<p>Qu&yacute; kh&aacute;ch để c&oacute; thể trải nghiệm c&aacute;c sản phẩm mẫu, xin vui l&ograve;ng li&ecirc;n hệ trực tiếp, b&ecirc;n c&ocirc;ng ty sẽ c&oacute; đội ngũ nh&acirc;n vi&ecirc;n chuy&ecirc;n nghiệp tư vấn v&agrave; hướng dẫn qu&yacute; kh&aacute;ch h&agrave;ng.</p>', 9, 0, '2019-01-29 08:50:47', '2019-01-29 08:50:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 'huy', 'huyvlse90085@gmail.com', '2019-01-21 08:05:53', '$2y$10$.Xmz615IZN9aUBnh89/2Rez5hef1NVOhX3dpTOMlCy3k7qySEKZ7q', '0tJBpaLmDCsNSPj7i4lI4Kw6HjytttcLRL0rmFli1IaFMbmXGn0l2y4cSrdw', '2019-01-21 08:05:33', '2019-01-21 08:05:53'),
(2, 'nam', 'nam@gmail.com', NULL, '$2y$10$70w1JjnDdla2IyAOViQG/.58opppumLOfj9AWRLYtFRkFTfKEfQwy', NULL, '2019-01-31 10:34:03', '2019-01-31 10:34:03'),
(3, 'nam', 'nam123@gmail.com', NULL, '$2y$10$hSH5KKFfy/xVEqqYc/FkAuojhtvUOBMdGAg/NGLoJ6NLQvCSWZ/he', NULL, '2019-01-31 10:35:59', '2019-01-31 10:35:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
