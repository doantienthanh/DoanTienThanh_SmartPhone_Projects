-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 12:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_phone_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name_brand` varchar(250) DEFAULT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name_brand`, `created_date`) VALUES
(1, 'APPLE', '2000-05-20'),
(2, 'OPPO', '2000-05-20'),
(3, 'XIAOMI', '2000-05-20'),
(4, 'SAM SUNG', '2000-05-20'),
(5, 'SONY', '2000-05-20'),
(6, 'NOKIA', '2000-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name_categories` varchar(220) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_categories`, `created_date`) VALUES
(1, 'SMART PHONE', '2000-05-20'),
(2, 'PHỤ KIỆN', '2000-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `id_products` int(11) NOT NULL,
  `color_phone` varchar(220) DEFAULT NULL,
  `size_screen_phone` varchar(255) DEFAULT NULL,
  `resolution_phone` varchar(255) DEFAULT NULL,
  `weight_phone` varchar(255) DEFAULT NULL,
  `memory_phone` varchar(255) DEFAULT NULL,
  `operating_system` varchar(220) NOT NULL,
  `camera_phone` varchar(300) DEFAULT NULL,
  `pin_phone` varchar(200) DEFAULT NULL,
  `description_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `id_brands` int(11) NOT NULL,
  `slug_products` varchar(200) NOT NULL,
  `name_products` varchar(200) NOT NULL,
  `image_products` varchar(200) NOT NULL,
  `list_image_products` varchar(200) DEFAULT NULL,
  `quantity_products` int(11) NOT NULL,
  `price_products` float NOT NULL,
  `old_price_products` float DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number_phone` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL,
  `created_date` date DEFAULT NULL,
  `position` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `email`, `number_phone`, `address`, `created_date`, `position`) VALUES
(1, 'thanhdoan', 'cGFzc3dvcmRhZG1pbg==', 'thanhdoan200pn@gmail.com', '0946613608', 'Quang Binh', '0000-00-00', 0),
(2, 'user', 'cGFzc3dvcmR1c2Vy', 'user@gmail.com', '09121212', 'Quang Binh', '0000-00-00', 1),
(3, 'user22', 'MTIzNDU2', 'user2@gmail.com', '0946613618', 'Quang Binh', '0000-00-00', 1),
(4, 'thanhdoan2000', 'dGhhbmhkb2FuMjAwMA==', 'thanhdason@gmail.com', '0946613609', 'thanhdoan', '0000-00-00', 1),
(5, 'thanhdoan22', 'dGhhbmhkaWFiYQ==', 'thanhdoandevs@gmail.com', '0946612608', 'sdasd', '0000-00-00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_products` (`id_products`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug_products` (`slug_products`),
  ADD UNIQUE KEY `name_products` (`name_products`),
  ADD UNIQUE KEY `image_products` (`image_products`),
  ADD KEY `id_categories` (`id_categories`),
  ADD KEY `id_brands` (`id_brands`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`id_products`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`id_brands`) REFERENCES `brands` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
