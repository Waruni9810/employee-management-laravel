-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 01:33 PM
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
-- Database: `employee_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `telephone`, `email`, `image`, `password`, `created_at`, `updated_at`) VALUES
(1, 'waruni', '0775827929', 'waruranjala@gmail.com', 'employees/6MOijQPWIckxK8MZh7XuHn9Ih6xLgYGWInQXNJJ0.jpg', '$2y$12$Kb9ODaARIPgxwG8GQ5FgS.EgFXCVGTxY/2ZmeLy3i03PS.mMB5xQC', '2024-11-13 02:43:59', '2024-11-13 02:43:59'),
(2, 'waru', '0777463974', 'nuween@gmail.com', 'employees/JvvTcF6s7MtEmUOUbLBaPIYZgKLOt95jgLDRduOF.jpg', '$2y$12$X6UE/./Y6CsChyeoxv0U.eZfbSNz1304BwfH1zsq6Jfj9RhzMEn/W', '2024-11-13 05:58:29', '2024-11-13 05:58:29'),
(3, 'warunih', '0475638788', 'waruniranjala98@gmail.com', 'employees/bTJxIcuPVKwIR1GVYgo7oTFUHnBmJbba4HCKQRM7.jpg', '$2y$12$xiRd605ewoCPBG3/sc9H/uZMEt3d3X64bqEk6Qf/oVdBrBzSkmvA.', '2024-11-13 06:02:26', '2024-11-13 06:02:26'),
(4, 'kamal', '0775827929', 'kamal@gmail.com', 'employees/IcAMppWICPWCXULA7ufje92jFzG9Bb9bqxkB4dGE.jpg', '$2y$12$u5/2MrWM5w6YfI8cpBf6W.MOEhiiEzTg/cQAscofw4l/gWTaTqiMG', '2024-11-13 06:05:57', '2024-11-13 06:05:57'),
(5, 'Waruni Ranjala', '0775827929', 'waruniranjala@gmail.com', 'employees/GNJBARqim4rSC5KKyzmyokMGPoofEF2eK6JSbkmB.jpg', '$2y$12$yFBzNb/9.HZAO.HOTexWYuyOZ5OCCrEHbij8HVU8bWCTE/OMx.XQm', '2024-11-13 06:38:49', '2024-11-13 06:38:49'),
(7, 'Waruni Ranjala', '0775827929', 'waruni@gmail.com', NULL, '$2y$12$I9B2fNhgKYpjFUH0Xr4hRu3GIwdQY0W83RHImvQBhhkCBg9GCZpE.', '2024-11-13 06:53:46', '2024-11-13 06:53:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
