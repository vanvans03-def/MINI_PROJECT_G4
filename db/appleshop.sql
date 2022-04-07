-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 01:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appleshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`cart_id`, `user_id`, `product_id`, `date`, `quantity`) VALUES
(13, 8, 13, '2022-04-06 19:03:07', 1),
(14, 8, 13, '2022-04-06 19:47:29', 1),
(15, 8, 13, '2022-04-06 19:47:34', 1),
(16, 8, 13, '2022-04-06 19:50:20', 1),
(17, 8, 23, '2022-04-06 22:17:18', 1),
(18, 8, 23, '2022-04-06 22:26:41', 1),
(19, 8, 23, '2022-04-06 22:26:55', 1),
(20, 8, 23, '2022-04-06 22:54:22', 1),
(21, 8, 23, '2022-04-06 23:10:44', 1),
(22, 8, 23, '2022-04-06 23:11:22', 1),
(23, 8, 23, '2022-04-06 23:27:10', 2),
(24, 8, 13, '2022-04-07 09:07:11', 2),
(25, 8, 13, '2022-04-07 09:07:19', 2),
(26, 8, 13, '2022-04-07 09:09:26', 2),
(27, 8, 22, '2022-04-07 15:22:32', 2),
(28, 8, 22, '2022-04-07 15:22:32', 2),
(29, 8, 22, '2022-04-07 15:48:28', 7),
(30, 8, 13, '2022-04-07 16:24:54', 1),
(31, 8, 13, '2022-04-07 17:30:02', 2),
(32, 17, 13, '2022-04-07 18:29:49', 1),
(33, 17, 13, '2022-04-07 18:30:49', 1),
(34, 8, 13, '2022-04-07 18:35:31', 4),
(35, 8, 13, '2022-04-07 18:44:28', 3),
(36, 18, 22, '2022-04-07 18:46:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `user_id`, `payment_id`, `total`) VALUES
(18, 8, 927123, 116700),
(19, 18, 417008, 38900);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_id`, `cart_id`, `quantity`) VALUES
(1, 29, 7),
(2, 29, 7),
(3, 30, 1),
(4, 30, 1),
(5, 30, 1),
(6, 30, 1),
(7, 30, 1),
(8, 30, 1),
(9, 30, 1),
(10, 30, 1),
(11, 30, 1),
(12, 30, 1),
(13, 30, 1),
(14, 30, 1),
(15, 33, 1),
(16, 33, 1),
(17, 34, 4),
(18, 35, 3),
(19, 36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `provider` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rom` int(11) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `rom`, `descrip`, `quantity`, `category_id`, `price`, `img`) VALUES
(13, 'iPhone 13 Pro', 512, 'สีเขียวอัลไพน์', 10, 1, 38900, '500950957.png'),
(14, 'iPhone 13', 128, 'สีเขียวอัลไพน์', 20, 1, 25900, '1497478947.jpg'),
(15, 'iPhone SE', 64, 'สีมิดไนท์', 5, 1, 15900, '266263951.jpg'),
(16, 'iPhone 12', 128, 'สีม่วง', 20, 1, 21900, '1969129377.jpg'),
(17, 'iPhone 11', 1024, 'สีขาว', 11, 1, 19500, '486427488.jpg'),
(19, 'Airpods Pro', 0, 'สีขาว', 5, 2, 8992, '513440711.png'),
(20, 'Apple TV', 0, 'สีดำ', 2, 3, 2599, '996015314.jpg'),
(21, 'iPhone 13 Pro', 512, 'สีเชียร์ร่าบลู', 2, 1, 38900, '765519742.png'),
(22, 'iPhone 13 Pro', 512, 'สีมิดไนท์', 2, 1, 38900, '1738102152.png'),
(23, 'iPhone 13 Pro Max', 512, 'สีเขียวอัลไพน์', 11, 1, 42900, '1566095847.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `name`) VALUES
(1, 'iphone'),
(2, 'airpod'),
(3, 'tv');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL,
  `type` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `Lname`, `telephone`, `type`) VALUES
(2, 'barentalo@gmail.com', '1234', 'bento', 'jinjung', '0989503183', 0),
(3, 'admin1234@email.com', '1234', 'teera', 'meow', '0989503183', 1),
(5, 'peemai@email.com', '1234', 'peemai', 'meow', '191', 0),
(6, 'testt@email.com', '1234', 'teera', 'jinjung', '', 0),
(8, 'user@email.com', '1234', 'คนธรรมดา', 'ทดสอบ', '191', 0),
(16, 'usertest888@email.com', '1234', 'tera', 'reta', '0989503183', 0),
(17, 'testuser222@email.com', '1234', 'teera', 'hitchana', '+66989503183', 0),
(18, 'qwer@email.com', '1234', 'bento', 'ppp', '123', 0),
(19, 'qwer11@email.com', '1234', 'wwea', 'wwww', '1234', 0),
(20, 'user1234@email.com', '1234', 'wwea', 'qweqweqwe', '1234', 0),
(21, 'user11111@email.com', '1234', 'peemai', 'ppp', '1234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_address`
--

CREATE TABLE `users_address` (
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `address_line_1` varchar(100) NOT NULL,
  `address_line_2` varchar(100) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `Postcode` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `telephone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_address`
--

INSERT INTO `users_address` (`user_id`, `id`, `address_line_1`, `address_line_2`, `city`, `Postcode`, `country`, `telephone`) VALUES
(8, 0, '402', 'thaworistow', 'bkk', '151210', 'ไทย', '+66985021596'),
(18, 0, '402', 'thaworistow', 'bkk', '151210', 'ไทย', '+66985021596');

-- --------------------------------------------------------

--
-- Table structure for table `users_payment`
--

CREATE TABLE `users_payment` (
  `user_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Payment_type` varchar(100) NOT NULL,
  `Provider` varchar(100) NOT NULL,
  `Account_no` varchar(100) NOT NULL,
  `expiry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payment_id` (`payment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_address`
--
ALTER TABLE `users_address`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_payment`
--
ALTER TABLE `users_payment`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users_payment`
--
ALTER TABLE `users_payment`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `cart_item_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `payment_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_details_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `order_detail` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_address`
--
ALTER TABLE `users_address`
  ADD CONSTRAINT `users_address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_payment`
--
ALTER TABLE `users_payment`
  ADD CONSTRAINT `users_payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
