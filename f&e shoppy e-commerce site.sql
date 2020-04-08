-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 11:08 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mirshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `caption` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(70) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `caption`, `image`) VALUES
(1, '10% OFF', '1512403983.png'),
(2, 'Winter Sale- 20% Discount.', '1511348052.jpg'),
(3, 'MIR Shoppy Limited', '1512403842.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(35) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(15, 'Accessories'),
(14, 'Electronices'),
(13, 'Kids'),
(1, 'Men'),
(12, 'Women');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `unit_price` float(8,2) NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `unit_price`, `summary`, `image`, `status`) VALUES
(3, 1, 'Shirt', 1500.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the', '1511293460.jpg', 1),
(4, 1, 'T-Shirt', 1200.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has', '1511362938.jpg', 1),
(5, 1, 'Shirt', 1800.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has', '1511202828.jpg', 1),
(6, 14, 'Mobile: Nokia', 12000.00, 'NOKIA\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the', '1511347278.jpg', 1),
(7, 1, 'Panjabi', 100.00, 'New Collection', '1511347341.jpg', 1),
(8, 1, 'Panjabi', 150.00, 'Desi Look', '1511347396.jpg', 1),
(9, 1, 'Watch', 120.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the', '1511348221.jpg', 1),
(10, 1, 'Watch', 140.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the', '1511348237.jpg', 1),
(11, 1, 'Watch', 160.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the', '1511363029.jpg', 1),
(12, 1, 'Watch', 170.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the', '1511363013.jpg', 1),
(13, 14, 'Laptop: Samsung', 10000.00, 'Best Laptop\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the', '1511348360.jpg', 1),
(14, 14, 'Laptop', 12000.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the', '1511348384.jpg', 1),
(15, 14, 'Laptop: Dell', 12000.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the', '1511348408.jpg', 1),
(16, 14, 'Mobile: iPhone', 500.00, 'iPhone\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the', '1511348445.jpg', 1),
(17, 14, 'Mobile', 80.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the', '1511348472.png', 1),
(18, 14, 'Mobile: Lenovo', 160.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the', '1511348490.png', 1),
(19, 12, 'Saree', 70.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the', '1511357147.jpg', 1),
(20, 12, 'Saree', 100.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the', '1511357189.jpg', 1),
(21, 14, 'Mobile: SONY', 1000.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the', '1511348916.jpg', 1),
(22, 15, 'Backpack', 300.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', '1511360705.jpg', 1),
(23, 15, 'Desktop Speaker', 500.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', '1511360828.jpg', 1),
(24, 15, 'External Hard Disk Drive ', 500.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', '1511360938.jpg', 1),
(25, 15, 'Mouse', 50.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', '1511361027.jpg', 1),
(26, 12, 'Semi-stitched Salwar', 500.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', '1511361260.jpg', 1),
(27, 1, 'T-Shirt', 300.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', '1511361315.jpg', 1),
(28, 12, 'Saree', 400.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', '1511361340.jpg', 1),
(29, 12, 'Semi-stitched Salwar', 520.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', '1511361760.jpg', 1),
(30, 12, 'Saree', 400.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', '1511361781.jpg', 1),
(31, 12, 'Saree', 200.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', '1511362027.jpg', 1),
(32, 1, 'Track Pant', 400.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', '1511362355.jpg', 1),
(33, 1, 'T-Shirt', 300.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', '1511362376.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` enum('U','A') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'U',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `registered_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `mobile_no`, `address`, `user_type`, `status`, `registered_at`) VALUES
(1, 'admin', '', 'admin@mirshop.com', '827ccb0eea8a706c4c34a16891f84e7b', '0123456789', 'Dhaka, Bangladesh', 'A', 1, '2017-11-19 23:10:20'),
(2, 'Momenul', 'Islam', 'bdmomonel@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0123456789', 'Dhaka, Bangladesh.', 'U', 1, '2017-12-04 21:25:07'),
(3, 'Rijvi', 'Islam', 'rijvi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '123456789', 'Dhaka, Bangladesh.', 'U', 1, '2017-12-04 21:31:57');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

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
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
