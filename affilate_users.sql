-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 24, 2019 at 02:16 PM
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
-- Table structure for table `affilate_users`
--

CREATE TABLE `affilate_users` (
  `id` int(255) NOT NULL,
  `user_id` int(255) UNSIGNED NOT NULL,
  `affilate_code` text NOT NULL,
  `updated_at` varchar(255) NOT NULL,
  `created_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `affilate_users`
--

INSERT INTO `affilate_users` (`id`, `user_id`, `affilate_code`, `updated_at`, `created_at`) VALUES
(15, 1, '5e009e578cac1', '2019-12-23 11:00:39', '2019-12-23 11:00:39'),
(16, 12, '5e00f7f4ce030', '2019-12-23 17:23:00', '2019-12-23 17:23:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affilate_users`
--
ALTER TABLE `affilate_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affilate_users`
--
ALTER TABLE `affilate_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `affilate_users`
--
ALTER TABLE `affilate_users`
  ADD CONSTRAINT `affilate_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `administrators` (`myid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
