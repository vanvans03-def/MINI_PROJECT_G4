-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 01:25 PM
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
(72, 8, 23, '2022-04-14 15:43:39', 4);

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
(19, 18, 417008, 38900),
(20, 8, 781514, 300300),
(21, 8, 903814, 77800),
(22, 8, 194529, 38900),
(23, 8, 182533, 116700),
(24, 8, 948507, 38900),
(25, 8, 914810, 38900),
(26, 8, 920271, 389000),
(27, 8, 543881, 38900),
(28, 8, 164840, 38900),
(29, 8, 860153, 77800),
(30, 8, 221824, 77800),
(31, 8, 801962, 38900),
(32, 8, 830344, 38900),
(33, 8, 306723, 77800),
(34, 8, 761833, 77800),
(35, 8, 496522, 77800),
(36, 8, 813095, 77800),
(37, 8, 567799, 429000),
(38, 8, 703076, 429000),
(39, 8, 121995, 42900),
(40, 8, 282782, 116700),
(41, 8, 931866, 38900),
(42, 8, 720300, 38900),
(43, 8, 488596, 38900),
(44, 8, 595266, 59800),
(45, 8, 162530, 171600);

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
(19, 36, 1),
(20, 39, 7),
(21, 41, 2),
(22, 44, 1),
(23, 45, 3),
(24, 49, 1),
(25, 49, 1),
(26, 55, 10),
(27, 57, 1),
(28, 57, 1),
(29, 58, 2),
(30, 58, 2),
(31, 59, 1),
(32, 60, 1),
(33, 61, 2),
(34, 63, 2),
(35, 63, 2),
(36, 63, 2),
(37, 64, 10),
(38, 64, 10),
(39, 65, 1),
(40, 66, 3),
(41, 67, 1),
(42, 68, 1),
(43, 69, 1),
(44, 70, 2),
(45, 72, 4);

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
(162530, 45, 'ชำระเงินแล้ว(รอยืนยัน)', 'kasikorn', '2099147351.jpg'),
(488596, 43, 'ชำระเงินแล้ว(รอยืนยัน)', 'scb', '1110933801.png'),
(595266, 44, 'ชำระเงินแล้ว(รอยืนยัน)', 'aomsin', '1056294461.png');

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
(13, 'iPhone 13 Pro', 512, 'สีเขียวอัลไพน์', 10, 1, 38900.00, '500950957.png'),
(14, 'iPhone 13', 128, 'สีเขียวอัลไพน์', 20, 1, 25900.00, '1497478947.jpg'),
(15, 'iPhone SE', 64, 'สีมิดไนท์', 5, 1, 15900.00, '266263951.jpg'),
(16, 'iPhone 12', 128, 'สีม่วง', 20, 1, 21900.00, '1969129377.jpg'),
(17, 'iPhone 11', 1024, 'สีขาว', 11, 1, 19500.00, '486427488.jpg'),
(19, 'Airpods Pro', 0, 'สีขาว', 5, 2, 8992.00, '513440711.png'),
(20, 'Apple TV', 0, 'สีดำ', 2, 3, 2599.00, '996015314.jpg'),
(21, 'iPhone 13 Pro', 512, 'สีเชียร์ร่าบลู', 2, 1, 38900.00, '765519742.png'),
(22, 'iPhone 13 Pro', 512, 'สีมิดไนท์', 2, 1, 38900.00, '1738102152.png'),
(23, 'iPhone 13 Pro Max', 512, 'สีเขียวอัลไพน์', 11, 1, 42900.00, '1566095847.png'),
(24, 'iPhone 13 Pro', 128, 'สีขาว', 10, 1, 38900.00, '984014147.png'),
(29, 'iPhone 13 Pro Max', 1024, 'สีขาว', 2, 1, 42900.75, '951205373.png'),
(30, 'ทดสอบ', 128, 'ทดสอบ', 2, 5, 15.75, '100567993.jpg'),
(31, 'iPhone 13', 512, 'สีชมพู', 10, 1, 29900.00, '1619641248.png'),
(32, 'iPhone 13 mini', 512, 'สีฟ้า', 2, 1, 25900.00, '755934086.png'),
(33, 'iPhone 13 mini', 128, 'PRODUCT(RED)', 2, 1, 25900.00, '1087926596.png');

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
(7, 'qwe');

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

INSERT INTO `users_address` (`user_id`, `address_line_1`, `address_line_2`, `city`, `Postcode`, `country`, `telephone`) VALUES
(8, '402', 'thaworistow', 'bkk', '151210', 'ไทย', '+66985021596'),
(18, '402', 'thaworistow', 'bkk', '151210', 'ไทย', '+66985021596');

-- --------------------------------------------------------

--
-- Table structure for table `users_payment`
--

CREATE TABLE `users_payment` (
  `user_id` int(11) NOT NULL,
  `Payment_type` varchar(100) NOT NULL,
  `Provider` varchar(100) NOT NULL,
  `Account_no` varchar(100) NOT NULL,
  `expiry` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_payment`
--

INSERT INTO `users_payment` (`user_id`, `Payment_type`, `Provider`, `Account_no`, `expiry`) VALUES
(8, 'Debit', 'SCB', '23', '09/52');

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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
