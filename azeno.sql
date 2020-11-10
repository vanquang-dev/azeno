-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 28, 2020 lúc 01:38 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `azeno`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `position` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `name`, `password`, `position`, `date_created`) VALUES
(1, 'admin', 'Quang admin', '$2y$10$99yYbEYoOhc/4kVOcbQpgu3f6c1MuHBSMWUHvoApdwQWIFFJf.rWm', 0, '2020-03-20 23:48:20'),
(2, 'vanquang', 'Văn Quang 01', '	$2y$10$99yYbEYoOhc/4kVOcbQpgu3f6c1MuHBSMWUHvoApdwQWIFFJf.rWm', 1, '2020-03-21 22:43:39'),
(3, 'quangnguyen', 'Văn Quang 02', '$2y$10$zXTgTK6ec33OnZ46T6YBg.sCTb0pNatYiLGxn7FK0q9rl7HaKZwI.', 2, '2020-03-22 00:32:48'),
(4, 'nguyenvanquang', 'Văn Quang 03', '$2y$10$FVB8mwKJE/ywJU/Pr1Hgq.7Qo5s8cf0i9fHZhNKaaOrVC2Plb2aCi', 1, '2020-03-22 00:34:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name_brand` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `name_brand`) VALUES
(1, 'AZENO'),
(2, 'DVG'),
(3, 'abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name_category` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name_category`) VALUES
(1, 'Kem phủ bạc'),
(2, 'Bột tẩy'),
(4, 'azeno'),
(6, 'abc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_user`
--

CREATE TABLE `order_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `price` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `phone_number` varchar(256) NOT NULL,
  `status` int(1) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_user`
--

INSERT INTO `order_user` (`id`, `user_id`, `product_id`, `image`, `product_name`, `price`, `number`, `username`, `address`, `phone_number`, `status`, `date_created`) VALUES
(1, 2, 46, '20200327160231.jpg', 'Điện thoại', 10000000, 1, 'Nguyễn Văn Quang', '98 nguyễn ngọc nại', '0355899948', 2, '2020-03-29 15:42:22'),
(14, 2, 55, '20200330092557.jpg', 'Điện thoại', 10000, 5, 'Quang Nguyễn', 'Thanh Xuân - Hà Nội', '0355899948', 2, '2020-03-30 16:31:32'),
(16, 2, 44, '20200327160210.jpg', 'Điện thoại', 10000000, 3, 'Quang Nguyễn', 'Thanh Xuân - Hà Nội', '0355899948', 2, '2020-03-31 14:13:38'),
(18, 2, 2, '20200322173905.jpg', 'Kem phủ bạc', 10000000, 4, 'Nguyễn Thị Huyền', '98 nguyễn ngọc nại', '0355899948', 1, '2020-03-31 16:22:55'),
(20, 4, 42, '20200327160150.jpg', 'Điện thoại', 10000000, 3, 'Trần Duy Hưng', 'Bách Khoa', '0999888899', 1, '2020-03-31 20:59:11'),
(21, 4, 20, '20200327155843.jpg', 'Điện thoại', 10000000, 1, 'Trần Duy Hưng', 'Bách Khoa', '0999888899', 1, '2020-03-31 20:59:28'),
(22, 1, 46, '20200327160231.jpg', 'Điện thoại', 10000000, 3, 'Nguyễn Văn Quang', '98 Gốc đề', '0355899948', 1, '2020-03-31 22:58:12'),
(23, 1, 13, '20200326035933.jpg', 'Phủ mịn', 10000000, 2, 'Nguyễn Văn Quang', '98 Gốc đề', '0355899948', 1, '2020-03-31 22:58:41'),
(26, 1, 2, '20200322173905.jpg', 'Kem phủ bạc', 10000000, 2, 'Nguyễn Văn Quang', '98 nguyễn ngọc nại', '0355899948', 1, '2020-03-31 23:14:39'),
(27, 1, 55, '20200330092557.jpg', 'Điện thoại', 10000, 4, 'Nguyễn Văn Quang', '98 nguyễn ngọc nại', '0355899948', 1, '2020-03-31 23:15:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `price` int(50) NOT NULL,
  `introduce` varchar(200) NOT NULL,
  `how_to_use` varchar(2000) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `images` varchar(100) NOT NULL,
  `admin_add` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `id_category`, `id_brand`, `name_product`, `price`, `introduce`, `how_to_use`, `origin`, `images`, `admin_add`, `date_created`) VALUES
(1, 1, 2, 'Kem phủ bạc', 10000000, 'Azeno cho máu tóc đẹp', 'abc...xyz', 'Hàn Quốc', '20200322173139.jpg', 1, '2020-03-22 23:31:39'),
(2, 1, 2, 'Kem phủ bạc', 10000000, 'Azeno cho máu tóc đẹp', 'abc...xyz', 'Hàn Quốc', '20200322173905.jpg', 1, '2020-03-22 23:39:05'),
(3, 1, 2, 'Kem phủ bạc', 10000000, 'Azeno cho máu tóc đẹp', 'abc...xyz', 'Hàn Quốc', '20200322174222.jpg', 1, '2020-03-22 23:42:22'),
(6, 4, 1, 'Phủ mịn', 10000000, 'Phủ mịn pro', 'abc...xyz', 'Hàn Quốc', '20200323164550.jpg', 3, '2020-03-23 22:45:50'),
(7, 0, 1, 'Thuốc nhuộm tuýt', 10000000, 'DVG thuốc tẩy tóc sịn', 'abc...xyz', 'Hàn Quốc', '20200324173557.jpg', 1, '2020-03-24 15:54:24'),
(8, 0, 1, 'Kem phủ bạc', 10000000, 'aaa', 'aaa', 'Hàn Quốc', '20200324153231.jpg', 1, '2020-03-24 16:19:56'),
(9, 4, 1, 'Thuốc nhuộm tuýt', 10000000, 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaa', 'Ý', '20200324111939.jpg', 1, '2020-03-24 17:19:39'),
(10, 1, 1, 'Kem phủ bạc', 10000000, '', '', 'Hàn Quốc', '20200326035723.jpg', 1, '2020-03-26 09:57:23'),
(11, 4, 1, 'Thuốc nhuộm tuýt', 10000000, '', '', 'Ý', '20200326035737.jpg', 1, '2020-03-26 09:57:37'),
(12, 2, 2, 'Bột tẩy', 10000000, '', '', 'Hàn Quốc', '20200326035752.jpg', 1, '2020-03-26 09:57:52'),
(13, 4, 1, 'Phủ mịn', 10000000, '', '', 'Hàn Quốc', '20200326035933.jpg', 1, '2020-03-26 09:59:33'),
(14, 1, 2, 'Kem phủ bạc', 10000000, '', '', 'Hàn Quốc', '20200326153126.jpg', 3, '2020-03-26 21:31:26'),
(15, 6, 3, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155558.jpg', 1, '2020-03-27 21:55:58'),
(16, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155751.jpg', 1, '2020-03-27 21:57:51'),
(17, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155800.jpg', 1, '2020-03-27 21:58:00'),
(18, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155809.jpg', 1, '2020-03-27 21:58:09'),
(19, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155819.jpg', 1, '2020-03-27 21:58:19'),
(20, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155843.jpg', 1, '2020-03-27 21:58:43'),
(21, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155849.jpg', 1, '2020-03-27 21:58:49'),
(22, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155857.jpg', 1, '2020-03-27 21:58:57'),
(23, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155904.jpg', 1, '2020-03-27 21:59:04'),
(24, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155912.jpg', 1, '2020-03-27 21:59:12'),
(25, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155920.jpg', 1, '2020-03-27 21:59:20'),
(26, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155928.jpg', 1, '2020-03-27 21:59:28'),
(27, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155934.jpg', 1, '2020-03-27 21:59:34'),
(28, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155941.jpg', 1, '2020-03-27 21:59:41'),
(29, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155950.jpg', 1, '2020-03-27 21:59:50'),
(30, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327155958.jpg', 1, '2020-03-27 21:59:58'),
(31, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160005.jpg', 1, '2020-03-27 22:00:05'),
(32, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160012.jpg', 1, '2020-03-27 22:00:12'),
(33, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160019.jpg', 1, '2020-03-27 22:00:19'),
(34, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160028.jpg', 1, '2020-03-27 22:00:28'),
(35, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160035.jpg', 1, '2020-03-27 22:00:35'),
(36, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160049.jpg', 1, '2020-03-27 22:00:49'),
(37, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160103.jpg', 1, '2020-03-27 22:01:03'),
(38, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160111.jpg', 1, '2020-03-27 22:01:11'),
(39, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160121.jpg', 1, '2020-03-27 22:01:21'),
(40, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160132.jpg', 1, '2020-03-27 22:01:32'),
(41, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160142.jpg', 1, '2020-03-27 22:01:42'),
(42, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160150.jpg', 1, '2020-03-27 22:01:50'),
(43, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160159.jpg', 1, '2020-03-27 22:01:59'),
(44, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160210.jpg', 1, '2020-03-27 22:02:10'),
(45, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160219.jpg', 1, '2020-03-27 22:02:19'),
(46, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160231.jpg', 1, '2020-03-27 22:02:31'),
(47, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160239.jpg', 1, '2020-03-27 22:02:39'),
(48, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160248.jpg', 1, '2020-03-27 22:02:49'),
(49, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160258.jpg', 1, '2020-03-27 22:02:58'),
(50, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160307.jpg', 1, '2020-03-27 22:03:07'),
(51, 1, 1, 'Điện thoại', 10000000, '', '', 'Việt Nam', '20200327160321.jpg', 1, '2020-03-27 22:03:21'),
(52, 1, 1, 'Điện tử số', 10000000, '', '', 'Việt Nam', '20200328152818.jpg', 1, '2020-03-28 21:28:18'),
(53, 1, 1, 'Thoại hình học', 10000000, '', '', 'Việt Nam', '20200328152849.jpg', 1, '2020-03-28 21:28:49'),
(55, 1, 1, 'Điện thoại', 10000, '', '', 'Việt Nam', '20200330092557.jpg', 1, '2020-03-30 14:25:58'),
(56, 2, 2, 'Bột tẩy', 160, 'abc', 'abc', 'Hàn Quốc', '20200331182044.jpg', 1, '2020-03-31 23:20:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `date_created`) VALUES
(1, 'admin', '$2y$10$9o0YZjQsxsZG0kYsN/arVugepWoTJfpwGAuH6KAnSs3vVDU0zrPzW', 'quang@gmail.com', '2020-03-26 22:32:50'),
(2, 'vanquang', '$2y$10$G2xMEpMRcj.1w1CX0suvgOeIL9VRIomXyyujjI.HnJQRICo71rDdq', 'quang1@gmail.com', '2020-03-27 12:10:59'),
(4, 'quangnguyen', '$2y$10$4ETQ8X/ggfDq7b48nu5/he1dtlkZ9MTL9i7Bnq0dJt2temmW5b4vC', 'vanquang07032000@gmail.com', '2020-03-30 22:27:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_user`
--
ALTER TABLE `order_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
