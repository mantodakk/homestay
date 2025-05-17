-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2025 at 10:24 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestay`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `tarikh_mula` datetime DEFAULT NULL,
  `tarikh_tamat` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int DEFAULT '1',
  `status2` int DEFAULT '0',
  `reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `payment_file` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `tarikh_mula`, `tarikh_tamat`, `created_at`, `status`, `status2`, `reason`, `payment_file`) VALUES
(6, 1, '2025-05-19 14:00:00', '2025-05-20 12:00:00', '2025-05-08 05:55:49', 1, NULL, NULL, '482050322_593653983720609_6627846518497808137_n.jpg'),
(7, 2, '2025-05-18 14:00:00', '2025-05-19 12:00:00', '2025-05-08 05:55:49', 1, NULL, NULL, '482050322_593653983720609_6627846518497808137_n.jpg'),
(8, 1, '2025-05-20 14:00:00', '2025-05-21 12:00:00', '2025-05-08 09:55:10', 1, NULL, NULL, ''),
(9, 1, '2025-05-21 14:00:00', '2025-05-22 12:00:00', '2025-05-08 09:55:41', 1, NULL, NULL, ''),
(10, 1, '2025-05-22 14:00:00', '2025-05-24 12:00:00', '2025-05-08 16:49:39', 2, 4, NULL, 'schedule_calendar.pdf'),
(11, 3, '2025-05-24 14:00:00', '2025-05-25 12:00:00', '2025-05-14 19:04:00', 1, NULL, NULL, ''),
(12, 2, '2025-05-29 14:00:00', '2025-05-30 12:00:00', '2025-05-17 20:18:17', 1, NULL, NULL, NULL),
(13, 2, '2025-05-30 14:00:00', '2025-05-31 12:00:00', '2025-05-17 20:19:44', 1, NULL, NULL, ''),
(14, 2, '2025-05-31 14:00:00', '2025-06-01 12:00:00', '2025-05-17 22:24:06', 1, 0, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

DROP TABLE IF EXISTS `booking_details`;
CREATE TABLE IF NOT EXISTS `booking_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `booking_id` int NOT NULL,
  `int_cond` int DEFAULT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `booking_id` (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_id`, `int_cond`, `file`, `created_at`) VALUES
(5, 10, 2, '1746894718222.jpg', '2025-05-17 22:16:34'),
(7, 10, 3, '1746899231303.jpg', '2025-05-17 22:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

DROP TABLE IF EXISTS `cuti`;
CREATE TABLE IF NOT EXISTS `cuti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `tarikh_mula` date NOT NULL,
  `tarikh_tamat` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id`, `user_id`, `tarikh_mula`, `tarikh_tamat`, `created_at`) VALUES
(1, 1, '2025-05-06', '2025-05-06', '2025-04-30 07:56:13'),
(2, 1, '2025-05-28', '2025-05-28', '2025-05-17 19:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `damage`
--

DROP TABLE IF EXISTS `damage`;
CREATE TABLE IF NOT EXISTS `damage` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_general_ci,
  `description` text COLLATE utf8mb4_general_ci,
  `status` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `category_id` int DEFAULT NULL,
  `priority` int DEFAULT NULL,
  `cost` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `damage`
--

INSERT INTO `damage` (`id`, `title`, `description`, `status`, `user_id`, `category_id`, `priority`, `cost`, `created_at`, `updated_at`) VALUES
(51, 'test', 'asdas', 0, 1, NULL, 1, 232, '2025-05-17 20:16:48', '2025-05-17 20:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `damage_attachments`
--

DROP TABLE IF EXISTS `damage_attachments`;
CREATE TABLE IF NOT EXISTS `damage_attachments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `damage_id` int DEFAULT NULL,
  `file` text COLLATE utf8mb4_general_ci,
  `uploaded_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `damage_attachments`
--

INSERT INTO `damage_attachments` (`id`, `damage_id`, `file`, `uploaded_at`) VALUES
(8, 51, 'assets/uploads/kerosakan/51/1746899231303.jpg', '2025-05-17 20:16:48'),
(7, 51, 'assets/uploads/kerosakan/51/1746894718222.jpg', '2025-05-17 20:16:48');

-- --------------------------------------------------------

--
-- Table structure for table `damage_log`
--

DROP TABLE IF EXISTS `damage_log`;
CREATE TABLE IF NOT EXISTS `damage_log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `damage_id` int DEFAULT NULL,
  `action` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `comment` int DEFAULT NULL,
  `cost` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `id` int NOT NULL AUTO_INCREMENT,
  `action` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `user_id` int DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_views`
--

DROP TABLE IF EXISTS `page_views`;
CREATE TABLE IF NOT EXISTS `page_views` (
  `id` int NOT NULL AUTO_INCREMENT,
  `page_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `view_date` date NOT NULL,
  `view_count` int DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_page_date` (`page_name`,`view_date`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page_views`
--

INSERT INTO `page_views` (`id`, `page_name`, `view_date`, `view_count`) VALUES
(1, 'index', '2025-05-15', 16);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `expires_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `star` double DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `description`, `star`, `status`, `created_at`) VALUES
(4, 2, 'asdasda', 3, 1, '2025-05-17 10:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` int NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `image`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'a8f5f167f44f4964e6c998dee827110c', 1, NULL, '2025-05-08 10:48:32'),
(2, 'guest', 'guest@gmail.com', 'a8f5f167f44f4964e6c998dee827110c', 2, NULL, '2025-05-08 10:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ic` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `passport` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'guest');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `booking_details_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `user_role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
