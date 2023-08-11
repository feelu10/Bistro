-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2023 at 04:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bistro`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `book_id` int(255) NOT NULL,
  `book_name` text NOT NULL,
  `book_email` text NOT NULL,
  `book_date` date NOT NULL,
  `book_time` time NOT NULL,
  `book_people` text NOT NULL,
  `book_request` text NOT NULL,
  `book_category` text NOT NULL,
  `book_available` text NOT NULL,
  `book_special_id` text NOT NULL,
  `book_price` text NOT NULL,
  `book_status` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`book_id`, `book_name`, `book_email`, `book_date`, `book_time`, `book_people`, `book_request`, `book_category`, `book_available`, `book_special_id`, `book_price`, `book_status`) VALUES
(1, 'asd', 'joshuapadilla@gmail.com', '2023-05-06', '00:00:00', '2', '', '1', 'Table 6', 'WMdwZ9oS', '80', 0),
(2, 'testerrrr', 'admin@admin', '2023-05-06', '09:00:00', '3', 'aaa', '1', 'Table 10', 'zihTpb8Z', '120', 1),
(16, 'Joshua', 'hongmydrive09@gmail.com', '2023-05-27', '14:00:00', '3', 'i like it', '0', 'Room 2', '5806517895', '', 2),
(17, 'hakdog', 'test@gmail.com', '2023-05-06', '12:00:00', '2', 'i love adobo', '0', '2', '9213087108', '120', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `contact_no` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_active`, `contact_no`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test', 'admin@admin.com', 0, '', 'Testing123', NULL, '2023-05-09 09:30:32', '2023-05-09 10:02:05'),
(4, 'preciouscruz012mail.com', 'preciouscruz012@gmail.com', 1, '', 'isaiah2975', NULL, '2023-05-09 09:49:27', '2023-05-09 10:02:03'),
(5, 'pre cruz', 'precruz012@gmail.com', 1, '', 'precruz1234', NULL, '2023-05-09 10:02:37', '2023-05-09 10:02:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id` (`id`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `book_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
