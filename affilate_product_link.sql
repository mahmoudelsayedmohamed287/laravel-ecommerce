-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 24, 2019 at 02:11 PM
-- Server version: 5.7.28-0ubuntu0.18.04.4
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `affilate_product_link`
--

CREATE TABLE `affilate_product_link` (
  `id` int(255) NOT NULL,
  `product_link` text NOT NULL,
  `user_id` int(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `click` int(255) NOT NULL,
  `confirmed-order` varchar(255) NOT NULL,
  `affilate_code` varchar(255) NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `affilate_product_link`
--

INSERT INTO `affilate_product_link` (`id`, `product_link`, `user_id`, `product_id`, `click`, `confirmed-order`, `affilate_code`, `updated_at`, `created_at`) VALUES
(22, 'http://localhost/store/index.php/product-detail/standard-fit-cotton-popover?u-a=5e009e578cac1&pro-d=8', 1, '8', 0, '', '5e009e578cac1', '2019-12-23 17:08:22', '2019-12-23 17:08:22'),
(23, 'http://localhost/store/index.php/product-detail/banks-sandal?u-a=5e009e578cac1&pro-d=71', 1, '71', 0, '', '5e009e578cac1', '2019-12-23 17:10:09', '2019-12-23 17:10:09'),
(24, 'http://localhost/store/index.php/product-detail/standard-fit-cotton-popover?u-a=5e00f7f4ce030&pro-d=8', 12, '8', 1, '', '5e00f7f4ce030', '2019-12-23 17:23:16', '2019-12-23 17:23:16'),
(25, 'http://localhost/store/index.php/product-detail/banks-sandal?u-a=5e00f7f4ce030&pro-d=71', 12, '71', 0, '', '5e00f7f4ce030', '2019-12-23 17:24:42', '2019-12-23 17:24:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affilate_product_link`
--
ALTER TABLE `affilate_product_link`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affilate_product_link`
--
ALTER TABLE `affilate_product_link`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
