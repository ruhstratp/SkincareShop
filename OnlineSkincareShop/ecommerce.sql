-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 10:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `products_order` text NOT NULL,
  `order_price` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `county` varchar(256) NOT NULL,
  `postal_code` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `products_order`, `order_price`, `name`, `email`, `phone`, `address`, `city`, `county`, `postal_code`, `status`) VALUES
(1, 'La Roche-Posay cleanser.8', 472, 'adrian', 'adi2013@gmail.com', '0', 'Str. Plevnei, Nr. 51, Bl. D11, Sc. C, Ap. 1', 'Tulcea', 'Romania', '820114', 'Processing'),
(2, 'La Roche-Posay cleanser.8,Rilastil cream.1,ISNTREE spf.1', 621, 'Ioana', 'ioanaro@gmail.com', '0', 'Str. Muzicescu, Nr. 51, Bl. D11, Sc. C, Ap. 1', 'Arad', 'Romania', '820114', 'Done'),
(4, 'La Roche-Posay cleanser.1', 59, 'RuhstratPatricia', 'patyadmin@gmail.com', '0', 'ss', 'ss', 'ss', '0', 'Processing'),
(5, 'RNW serum.1', 125, 'RuhstratPatricia', 'patyadmin@gmail.com', '012231', 'ssfffhgfjhf', 'ss', 'ss', '0123234', 'Done'),
(6, 'La Roche-Posay cleanser.2', 118, 'Anamaria', 'anapop2013@gmail.com', '+40742670304', 'Str. Mures, Nr. 23, Bl. D11, Sc. C, Ap. 1', 'Timisoara', 'Romania', '820114', 'Done'),
(7, 'La Roche-Posay cleanser.1', 59, 'RuhstratPatricia', 'patyadmin@gmail.com', '012231', 'ssfffhgfjhf', 'ss', 'ss', '0123234', 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'La Roche-Posay cleanser', 59),
(2, 'RNW serum', 125),
(3, 'Rilastil cream', 52),
(4, 'ISNTREE spf', 97),
(5, 'Acnemy cleanser', 45),
(6, 'Revox serum', 22),
(7, 'Purito cream', 101),
(8, 'SVR spf', 53),
(9, 'Youth To The People cleanser', 135),
(10, 'The Ordinary serum', 31),
(11, 'Benton cream', 100),
(12, 'Purito spf', 100),
(13, 'CosrX cleanser', 45),
(14, 'Krave Beauty serum', 215),
(15, 'La Roche Posay cream', 45),
(16, 'Avene spf', 64);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `county` varchar(256) NOT NULL,
  `postal_code` varchar(11) NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_id`, `first_name`, `last_name`, `phone`, `address`, `city`, `county`, `postal_code`, `registration_time`, `password`, `admin`) VALUES
(68, 'Sara@yahoo.com', 'Sara', 'Pop', '0', '', '', '', '0', '2021-12-05 17:03:46', '8287458823facb8ff918dbfabcd22ccb', 0),
(69, 'paty@gmail.com', 'Patricia', 'Ruhstrat', '0', '', '', '', '0', '2021-12-29 15:42:11', '9c8109ca3343fe84f6b6da24ca8dc428', 0),
(73, 'patyadmin@gmail.com', 'Patricia', 'Ruhstrat', '012231', 'ssfffhgfjhf', 'ss', 'ss', '0123234', '2021-12-30 18:27:18', '3fd9279c2da46f521f4e22c89d101ed9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

CREATE TABLE `users_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `status` enum('Added To Cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- Indexes for table `users_products`
--
ALTER TABLE `users_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users_products`
--
ALTER TABLE `users_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
