-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 05:53 AM
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
(36, 18, 22, '2022-04-07 18:46:40', 1),
(37, 18, 13, '2022-04-07 19:00:43', 1),
(38, 18, 13, '2022-04-07 19:05:16', 7),
(39, 8, 23, '2022-04-08 12:12:30', 7),
(40, 8, 13, '2022-04-08 12:14:06', 2),
(41, 8, 22, '2022-04-08 12:15:18', 2),
(42, 8, 22, '2022-04-08 12:18:42', 2),
(43, 8, 22, '2022-04-08 12:19:56', 2),
(44, 8, 22, '2022-04-08 12:23:52', 1),
(45, 8, 13, '2022-04-08 13:45:04', 3),
(46, 3, 13, '2022-04-08 14:23:20', 2),
(47, 8, 22, '2022-04-11 10:42:36', 2),
(48, 8, 22, '2022-04-11 11:25:15', 1),
(49, 8, 22, '2022-04-11 11:30:00', 1),
(50, 8, 22, '2022-04-11 14:12:00', 1),
(51, 8, 13, '2022-04-11 15:26:04', 3),
(52, 8, 13, '2022-04-12 12:57:07', 2),
(53, 8, 13, '2022-04-12 13:01:20', 6),
(54, 8, 13, '2022-04-12 13:03:05', 6),
(55, 8, 13, '2022-04-12 13:09:18', 10),
(56, 8, 13, '2022-04-12 15:15:15', 1),
(57, 8, 22, '2022-04-12 15:20:11', 1),
(58, 8, 22, '2022-04-12 16:13:56', 2),
(59, 8, 22, '2022-04-12 17:04:11', 1),
(60, 8, 22, '2022-04-13 12:05:48', 1),
(61, 8, 22, '2022-04-13 14:44:32', 2),
(62, 8, 13, '2022-04-13 15:06:15', 2),
(63, 8, 13, '2022-04-13 17:04:17', 2),
(64, 8, 23, '2022-04-13 18:43:20', 10),
(65, 8, 23, '2022-04-13 20:01:17', 1),
(66, 8, 13, '2022-04-13 21:28:26', 3),
(67, 8, 13, '2022-04-13 22:30:27', 1),
(68, 8, 13, '2022-04-14 12:37:51', 1),
(69, 8, 13, '2022-04-14 13:59:37', 1),
(70, 8, 31, '2022-04-14 15:26:39', 2),
(71, 8, 23, '2022-04-14 15:31:36', 2),
(72, 8, 23, '2022-04-14 15:43:39', 4),
(73, 8, 31, '2022-04-14 20:13:21', 2),
(74, 8, 15, '2022-04-15 11:14:01', 2),
(75, 8, 16, '2022-04-15 11:33:04', 1),
(76, 8, 17, '2022-04-15 11:47:14', 3),
(77, 3, 20, '2022-04-15 14:29:32', 2),
(78, 8, 38, '2022-04-15 14:30:20', 2),
(79, 8, 32, '2022-04-15 14:59:03', 2),
(80, 8, 20, '2022-04-15 18:29:51', 3),
(81, 8, 20, '2022-04-15 18:57:02', 2),
(82, 8, 13, '2022-04-15 21:54:29', 1),
(83, 8, 13, '2022-04-15 22:02:43', 1),
(84, 8, 38, '2022-04-15 22:48:46', 1),
(85, 8, 15, '2022-04-16 15:19:59', 1),
(86, 3, 31, '2022-04-16 16:27:16', 2),
(87, 8, 13, '2022-04-16 16:27:44', 2),
(88, 8, 29, '2022-04-16 16:39:11', 2),
(89, 8, 13, '2022-04-16 18:18:31', 2),
(90, 8, 15, '2022-04-16 18:19:03', 2),
(91, 8, 17, '2022-04-16 18:19:46', 1),
(92, 3, 13, '2022-04-16 18:27:51', 7),
(93, 8, 13, '2022-04-16 18:28:21', 7),
(94, 8, 13, '2022-04-16 18:40:17', 8),
(95, 8, 13, '2022-04-16 18:42:13', 8),
(96, 8, 16, '2022-04-16 19:05:45', 1),
(97, 8, 16, '2022-04-16 19:22:56', 5);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `user_id`, `payment_id`, `total`) VALUES
(69, 72, 8, 811248, 77800),
(70, 73, 8, 895601, 31800),
(71, 74, 8, 161019, 19500),
(72, 75, 3, 133740, 272300),
(73, 76, 8, 741192, 272300),
(74, 77, 8, 705961, 311200),
(75, 78, 8, 177160, 311200),
(76, 79, 8, 167028, 21900),
(77, 80, 8, 411811, 109500);

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
(30, 58, 2),
(31, 59, 1),
(32, 60, 1),
(33, 61, 2),
(34, 63, 2),
(35, 63, 2),
(36, 63, 2),
(37, 64, 10),
(38, 64, 10),
(41, 67, 1),
(43, 69, 1),
(44, 70, 2),
(46, 73, 2),
(47, 73, 2),
(49, 75, 1),
(50, 76, 3),
(51, 77, 2),
(52, 78, 2),
(53, 79, 2),
(54, 80, 3),
(55, 81, 2),
(56, 82, 1),
(57, 82, 1),
(58, 83, 1),
(59, 83, 1),
(60, 83, 1),
(61, 83, 1),
(62, 83, 1),
(63, 83, 1),
(64, 83, 1),
(65, 83, 1),
(66, 83, 1),
(67, 84, 1),
(69, 86, 2),
(70, 87, 2),
(72, 89, 2),
(73, 90, 2),
(74, 91, 1),
(75, 92, 7),
(76, 93, 7),
(77, 94, 8),
(78, 95, 8),
(79, 96, 1),
(80, 97, 4);

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `provider` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`payment_id`, `order_id`, `status`, `provider`, `img`) VALUES
(161019, 74, 'ชำระเงินเรียบร้อย', 'prompay', '126249248.jpg'),
(167028, 79, 'ชำระเงินเรียบร้อย', 'scb', '1947501247.jpg'),
(177160, 78, 'ชำระเงินเรียบร้อย', 'bkk', '1192309639.jpg'),
(411811, 80, 'ชำระเงินเรียบร้อย', 'bkk', '659240804.jpg'),
(705961, 77, 'ชำระเงินเรียบร้อย', 'bkk', '187778886.png'),
(741192, 76, 'ชำระเงินเรียบร้อย', 'bkk', '2127171697.jpg'),
(811248, 72, 'ชำระเงินเรียบร้อย', 'bkk', '664301580.jpg'),
(895601, 73, 'ชำระเงินเรียบร้อย', 'bkk', '471664704.jpg');

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
  `price` float(15,2) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `rom`, `descrip`, `quantity`, `category_id`, `price`, `img`) VALUES
(13, 'iPhone 13 Pro', 512, 'สีเขียวอัลไพน์', 0, 1, 38900.00, '500950957.png'),
(14, 'iPhone 13', 128, 'สีเขียวอัลไพน์', 0, 1, 25900.00, '1497478947.jpg'),
(15, 'iPhone SE', 64, 'สีมิดไนท์', 5, 1, 15900.00, '266263951.jpg'),
(16, 'iPhone 12', 128, 'สีม่วง', 4, 1, 21900.00, '1969129377.jpg'),
(17, 'iPhone 11', 64, 'สีขาว', -4, 1, 19500.00, '486427488.jpg'),
(19, 'Airpods Pro', 0, 'สีขาว', 5, 2, 8992.00, '513440711.png'),
(20, 'Apple TV 4K', 32, 'สีดำ', 1, 3, 6700.00, '996015314.jpg'),
(21, 'iPhone 13 Pro', 512, 'สีเชียร์ร่าบลู', 2, 1, 38900.00, '765519742.png'),
(22, 'iPhone 13 Pro', 512, 'สีมิดไนท์', 2, 1, 38900.00, '1738102152.png'),
(23, 'iPhone 13 Pro Max', 512, 'สีเขียวอัลไพน์', 11, 1, 42900.00, '1566095847.png'),
(24, 'iPhone 13 Pro', 128, 'สีขาว', 10, 1, 38900.00, '984014147.png'),
(29, 'iPhone 13 Pro Max', 1024, 'สีขาว', 2, 1, 42900.75, '951205373.png'),
(30, 'test', 128, 'test', 2, 1, 125500.75, '2102061000.png'),
(31, 'iPhone 13', 512, 'สีชมพู', 10, 1, 29900.00, '1619641248.png'),
(32, 'iPhone 13 mini', 512, 'สีฟ้า', 2, 1, 25900.00, '755934086.png'),
(33, 'iPhone 13 mini', 128, 'PRODUCT(RED)', 2, 1, 25900.00, '1087926596.png'),
(38, 'Apple TV 4K', 64, 'สีดำ', 2, 3, 7400.00, '1601602900.jpg'),
(39, 'เทสหน่อยได้ไหม', 32, 'ทดสอบ', 2, 4, 42900.75, '1473197668.png'),
(40, 'iPhone 13 Pro Max', 1024, 'สีมิดไนท์', 2, 1, 42900.00, '1226483657.png');

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
(3, 'tv'),
(4, 'ทดสอบเพิ่มCate ID'),
(5, '[value-2]'),
(6, '13'),
(7, 'qwe'),
(13, '2s');

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
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
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

INSERT INTO `users_address` (`id`, `user_id`, `address_line_1`, `address_line_2`, `city`, `Postcode`, `country`, `telephone`) VALUES
(1, 3, '402', 'thaworistow', 'bkk', '151210', 'ไทย', '+66985021596'),
(2, 8, 'test', 'thaworistow', 'bkk', '151210       ', 'ไทย', '+66985021596'),
(3, 18, '402', 'thaworistow', 'bkk', '151210', 'ไทย', '+66985021596');

-- --------------------------------------------------------

--
-- Table structure for table `users_payment`
--

CREATE TABLE `users_payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Payment_type` varchar(100) NOT NULL,
  `Provider` varchar(100) NOT NULL,
  `Account_no` varchar(100) NOT NULL,
  `expiry` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_payment`
--

INSERT INTO `users_payment` (`id`, `user_id`, `Payment_type`, `Provider`, `Account_no`, `expiry`) VALUES
(1, 8, 'Debit', 'SCB', '1234', '09/22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payment_id` (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cart_id` (`cart_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users_payment`
--
ALTER TABLE `users_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users_payment`
--
ALTER TABLE `users_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `cart_item_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_item_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order_item` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_item`
--
ALTER TABLE `order_item`
  ADD CONSTRAINT `order_item_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart_item` (`cart_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD CONSTRAINT `payment_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_detail` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
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
