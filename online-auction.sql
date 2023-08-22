-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 05:53 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `customer_id`, `product_id`, `price`, `created_at`, `updated_at`) VALUES
(5, 1, 19, 1700, NULL, NULL),
(6, 1, 19, 1800, NULL, NULL),
(7, 2, 19, 10000, NULL, NULL),
(8, 2, 16, 1700, NULL, NULL),
(9, 1, 19, 160000, NULL, NULL),
(10, 1, 19, 200000, NULL, NULL),
(11, 1, 19, 200500, NULL, NULL),
(12, 1, 19, 200600, NULL, NULL),
(13, 1, 19, 200700, NULL, NULL),
(14, 1, 19, 200800, NULL, NULL),
(15, 1, 19, 200900, NULL, NULL),
(16, 1, 19, 300000, NULL, NULL),
(17, 1, 19, 400000, NULL, NULL),
(18, 1, 19, 500000, NULL, NULL),
(19, 1, 19, 600000, NULL, NULL),
(20, 1, 19, 700000, NULL, NULL),
(21, 1, 19, 750000, NULL, NULL),
(22, 1, 19, 760000, NULL, NULL),
(23, 1, 19, 75000, NULL, NULL),
(24, 2, 11, 1232, NULL, NULL),
(25, 1, 21, 1600, NULL, NULL),
(26, 2, 23, 1700, NULL, NULL),
(27, 2, 23, 1800, NULL, NULL),
(28, 2, 23, 10000, NULL, NULL),
(29, 1, 13, 1000, NULL, NULL),
(30, 1, 13, 8000, NULL, NULL),
(31, 1, 13, 8001, NULL, NULL),
(32, 1, 28, 1700, NULL, NULL),
(33, 1, 28, 1800, NULL, NULL),
(34, 1, 25, 1000, NULL, NULL),
(35, 1, 25, 1700, NULL, NULL),
(36, 1, 30, 700, NULL, NULL),
(37, 1, 30, 800, NULL, NULL),
(38, 1, 31, 1700, NULL, NULL),
(39, 1, 13, 8006, NULL, NULL),
(40, 1, 13, 10000, NULL, NULL),
(41, 1, 32, 600, NULL, NULL),
(42, 1, 32, 1800, NULL, NULL),
(43, 1, 32, 10000, NULL, NULL),
(44, 1, 32, 410000, NULL, NULL),
(45, 1, 13, 15000, NULL, NULL),
(46, 1, 33, 125, NULL, NULL),
(47, 1, 33, 0, NULL, NULL),
(48, 1, 33, 12344, NULL, NULL),
(49, 1, 33, 123334, NULL, NULL),
(50, 1, 36, 125, NULL, NULL),
(51, 2, 36, 200, NULL, NULL),
(52, 2, 37, 122, NULL, NULL),
(53, 2, 37, 130, NULL, NULL),
(54, 1, 37, 148, NULL, NULL),
(55, 1, 38, 1700, NULL, NULL),
(56, 1, 38, 1800, NULL, NULL),
(57, 1, 39, 700, NULL, NULL),
(58, 1, 40, 111, NULL, NULL),
(59, 1, 40, 124, NULL, NULL),
(60, 2, 41, 450, NULL, NULL),
(61, 2, 41, 480, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Favorites', 'Finding something for you.......'),
(4, 'Antiques', ''),
(5, 'Accessories', ''),
(6, 'Painting', 'sdfhtgfhntgc'),
(21, 'Book', 'sgdfhygkjmhgjmh');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `number` int(20) NOT NULL,
  `password` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `number`, `password`, `status`) VALUES
(1, 'shanta', 'shanta@gmail.com', 'rajshahi', 1632269186, '1', 1),
(2, 'shakil', 'shakil@gmail.com', 'dhaka', 2147483647, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(30) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `category_id` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `images` text NOT NULL,
  `starting_price` varchar(50) NOT NULL,
  `starting_time` datetime NOT NULL,
  `ending_time` datetime NOT NULL,
  `created_add` timestamp NULL DEFAULT NULL,
  `updated_add` timestamp NULL DEFAULT NULL,
  `deleted` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=not start,1=remaining,2=closed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `description`, `images`, `starting_price`, `starting_time`, `ending_time`, `created_add`, `updated_add`, `deleted`, `status`) VALUES
(10, 'Test Product', '1', 'any', 'a:1:{i:0;s:13:\"images/93.jpg\";}', '123', '2019-11-12 23:45:00', '2019-11-12 23:55:00', NULL, NULL, NULL, 2),
(11, 'Necklace', '5', 'asdsgfg', 'a:1:{i:0;s:22:\"images/ACCESSORIES.png\";}', '1200', '2019-11-18 22:00:00', '2019-12-22 22:50:00', NULL, NULL, NULL, 1),
(12, 'Painting', '6', 'Just wow painting... After getting it you will be happy!!', 'a:1:{i:0;s:12:\"images/n.jpg\";}', '650', '2019-11-22 10:45:00', '2019-11-22 10:50:00', NULL, NULL, NULL, 2),
(13, 'Bronze', '5', 'Have you ever had one of those days when even though youâ€™ve paired all your fave pieces, your outfit still isnâ€™t what you want it to be?', 'a:1:{i:0;s:19:\"images/download.jpg\";}', '1500', '2019-11-21 11:20:00', '2019-12-28 11:30:00', NULL, NULL, NULL, 1),
(14, 'Antique Watch', '4', 'Vintage Antique pocket watch on the background of old books', 'a:1:{i:0;s:18:\"images/antique.jpg\";}', '2000', '2019-11-12 09:10:00', '2019-11-12 09:15:00', NULL, NULL, NULL, 2),
(16, 'Nature Painting', '6', 'wdgwq', 'a:3:{i:0;s:12:\"images/3.jpg\";i:1;s:13:\"images/93.jpg\";i:2;s:22:\"images/ACCESSORIES.png\";}', '123', '2019-11-16 01:13:00', '2019-11-04 14:12:00', NULL, NULL, NULL, 2),
(23, 'Antique Key', '4', 'Have you ever had one of those days when even though youâ€™ve paired all your fave pieces, your outfit still isnâ€™t what you want it to be?', 'a:1:{i:0;s:41:\"images/il_fullxfull.1314141770_bnwg-2.jpg\";}', '1200', '2019-11-21 09:38:00', '2019-11-21 09:41:00', NULL, NULL, NULL, 2),
(25, 'Book', '21', 'asdsgfg', 'a:1:{i:0;s:12:\"images/b.jpg\";}', '1500', '2019-11-24 11:34:00', '2019-11-24 23:35:00', NULL, NULL, NULL, 2),
(30, 'Earring', '5', 'Have you ever had one of those days when even though youâ€™ve paired all your fave pieces, your outfit still isnâ€™t what you want it to be?', 'a:1:{i:0;s:18:\"images/earring.jpg\";}', '650', '2019-11-25 11:17:00', '2019-11-25 11:19:00', NULL, NULL, NULL, 2),
(31, 'Binocular', '4', 'Have you ever had one of those days when even though youâ€™ve paired all your fave pieces, your outfit still isnâ€™t what you want it to be?', 'a:1:{i:0;s:53:\"images/brass-binoculars-antique-finish-royal-navy.jpg\";}', '1500', '2019-11-25 11:27:00', '2019-11-25 11:28:00', NULL, NULL, NULL, 2),
(32, 'Bidder', '1', 'asdsgfg', 'a:1:{i:0;s:18:\"images/Auction.png\";}', '650', '2019-11-25 11:42:00', '2019-11-25 11:44:00', NULL, NULL, NULL, 2),
(33, 'Accessories', '5', 'asdsgfg', 'a:1:{i:0;s:13:\"images/93.jpg\";}', '123', '2019-11-25 12:04:00', '2019-11-25 12:05:00', NULL, NULL, NULL, 2),
(37, 'Telephone', '4', 'dhbghjhgmjkh', 'a:1:{i:0;s:30:\"images/PMTARTESIAN-600x600.jpg\";}', '123', '2019-11-25 20:03:00', '2019-11-25 20:05:00', NULL, NULL, NULL, 2),
(38, 'Oil painting', '1', 'Just wow painting... After getting it you will be happy!!', 'a:1:{i:0;s:12:\"images/a.jpg\";}', '1500', '2019-11-25 20:13:00', '2019-11-25 20:14:00', NULL, NULL, NULL, 2),
(41, 'Books', '21', 'Book reader', 'a:1:{i:0;s:15:\"images/book.jpg\";}', '400', '2019-12-03 19:35:00', '2019-12-03 19:37:00', NULL, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `phone`, `email`, `password`, `status`) VALUES
(1, 'shanta', 'rajshahi', '01632269186', 'skshanta01@gmail.com', '123', 1),
(13, 'shakil', 'Rajshahi', '01632269186', 'shakil@gmail.com', '111111', 1),
(14, 'himel', 'gazipur', '01632324325', 'himel@gmail.com', '1', 1),
(15, 'subrina', 'dhaka', '01632269186', 'subrina@gmail.com', '1', 1),
(16, 'subrina', 'rajshahi', '01632269186', 's@gmail.com', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
