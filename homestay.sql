-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2025 at 08:26 PM
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
  `total_price` text COLLATE utf8mb4_general_ci,
  `payment_file` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `tarikh_mula`, `tarikh_tamat`, `created_at`, `status`, `status2`, `reason`, `total_price`, `payment_file`) VALUES
(69, 2, '2025-06-28 14:00:00', '2025-06-29 12:00:00', '2025-06-01 18:48:10', 2, 4, NULL, NULL, 'WhatsApp Image 2025-05-11 at 01.41.04_f8dd7e33.jpg'),
(70, 2, '2025-06-23 14:00:00', '2025-06-24 12:00:00', '2025-06-01 20:15:25', 1, 0, NULL, '600.00', 'ETS_Intercity - Ticket.pdf');

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`id`, `booking_id`, `int_cond`, `file`, `created_at`) VALUES
(22, 69, 2, '117395236_4807587732599968_9108203099612728337_n.jpg', '2025-06-01 19:12:27'),
(28, 69, 3, '1746894718222.jpg', '2025-06-01 19:39:15');

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page_views`
--

INSERT INTO `page_views` (`id`, `page_name`, `view_date`, `view_count`) VALUES
(1, 'index', '2025-05-15', 16),
(2, 'index', '2025-05-31', 218),
(3, 'login', '2025-05-31', 11),
(4, 'register', '2025-05-31', 5),
(5, 'register', '2025-06-01', 5),
(6, 'login', '2025-06-01', 14),
(7, 'index', '2025-06-01', 2),
(8, 'login#facilities', '2025-06-01', 1),
(9, '#facilities', '2025-06-01', 3),
(10, '#faq', '2025-06-01', 1),
(11, 'index', '2025-06-02', 19),
(12, 'login', '2025-06-02', 10),
(13, 'register', '2025-06-02', 1),
(14, '#facilities', '2025-06-02', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `description`, `star`, `status`, `created_at`) VALUES
(4, 2, 'asdasda', 3, 1, '2025-05-17 10:05:53'),
(5, 2, 'test', 1, 0, '2025-06-01 16:14:51');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `name`, `ic`, `image`, `passport`, `phone`, `address`) VALUES
(1, 1, '', '', NULL, NULL, '60107627918', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `web_settings`
--

DROP TABLE IF EXISTS `web_settings`;
CREATE TABLE IF NOT EXISTS `web_settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `setting_key` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `setting_value` text COLLATE utf8mb4_general_ci NOT NULL,
  `setting_type` enum('string','int','bool','json','float','date') COLLATE utf8mb4_general_ci DEFAULT 'string',
  `description` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_settings`
--

INSERT INTO `web_settings` (`id`, `setting_key`, `setting_value`, `setting_type`, `description`, `created_at`, `updated_at`) VALUES
(1, 'price_per_night', '800.00', 'float', 'Base price per night for booking', '2025-06-01 18:01:27', '2025-06-01 18:01:27'),
(2, 'discount_price_per_night', '600.00', 'float', 'Discounted price per night for booking', '2025-06-01 18:02:29', '2025-06-01 18:08:37');

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
