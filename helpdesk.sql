-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2016 at 08:59 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `bureaus`
--

CREATE TABLE `bureaus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bureaus`
--

INSERT INTO `bureaus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Information Technology', '2016-04-25 11:19:55', '2016-04-25 11:19:55'),
(2, 'Legal Adviser', '2016-04-25 11:19:55', '2016-04-25 11:19:55'),
(3, 'Human Resource', '2016-04-25 11:19:55', '2016-04-25 11:19:55'),
(4, 'Administration', '2016-04-25 11:19:55', '2016-04-25 11:19:55'),
(5, 'Medical Service', '2016-04-25 11:19:55', '2016-04-25 11:19:55'),
(6, 'Energy Resource', '2016-04-25 11:19:55', '2016-04-25 11:19:55'),
(7, 'Executive Secretariat', '2016-04-25 11:19:55', '2016-04-25 11:19:55'),
(8, 'Budget and Planning', '2016-04-25 11:19:55', '2016-04-25 11:19:55'),
(9, 'Counterterrorism', '2016-04-25 11:19:55', '2016-04-25 11:19:55'),
(10, 'Executive', '2016-04-25 11:19:55', '2016-04-25 11:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_04_02_135940_users_password_reset_table', 1),
('2016_04_04_090819_problems_table', 1),
('2016_04_04_090844_bureaus_table', 1),
('2016_04_04_101644_users_table', 1),
('2016_04_04_155659_status_table', 1),
('2016_04_04_160109_tickets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Network', '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(2, 'Hardware', '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(3, 'Software', '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(4, 'Infrastructure', '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(5, 'Other', '2016-04-25 11:19:56', '2016-04-25 11:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `color`, `created_at`, `updated_at`) VALUES
(1, 'Waiting approval', 'aqua', '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(2, 'Waiting to be processed', 'blue', '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(3, 'Not Valid', 'yellow', '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(4, 'On process', 'orange', '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(5, 'Waiting confirmation', 'yellow', '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(6, 'Confirmation denied', 'purple', '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(7, 'Closed', 'green', '2016-04-25 11:19:56', '2016-04-25 11:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` int(10) UNSIGNED NOT NULL,
  `operator_id` int(10) UNSIGNED DEFAULT NULL,
  `it_id` int(10) UNSIGNED DEFAULT NULL,
  `problem_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `bureau_id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `temp` text COLLATE utf8_unicode_ci,
  `closed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `employee_id`, `operator_id`, `it_id`, `problem_id`, `status_id`, `bureau_id`, `description`, `location`, `temp`, `closed_at`, `created_at`, `updated_at`) VALUES
(1, 11, 1, NULL, 2, 3, 2, 'testest', 'stsetset', 'sgsg', '2016-04-25 11:20:22', '2016-04-25 11:20:12', '2016-04-25 11:20:22'),
(2, 11, 1, 4, 1, 4, 2, 'Cant open sites', '4th floor, manager room', NULL, NULL, '2016-04-29 00:12:11', '2016-04-29 00:14:07'),
(3, 11, 1, 4, 2, 5, 2, 'PC keep restarting', '4 th floor, manager room', NULL, NULL, '2016-04-29 00:12:35', '2016-04-29 00:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bureau_id` int(10) UNSIGNED NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `est` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `birth`, `gender`, `address`, `bureau_id`, `position`, `est`, `img`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Archie Isdiningrat', 'archisdiningrat', '1995-11-21', 'male', 'Telkom University Bandung', 1, 'Manager', 2013, 'archisdiningrat.jpg', 'operator', 'archie.isdiningrat@gmail.com', '$2y$10$5hjDp5Gs66vxj7SiQ.fpd.7o66zEDZB8LV1aBmaeQlAQBFx3/V3yy', 'SyI69GUlKSaNpHAOjLM3N11OAiaav1sXfT37IPnEPlF5dhrQdneG0AlHOcuQ', '2016-04-25 11:19:55', '2016-10-19 09:35:27'),
(2, 'Bunga Dwipa', 'bungadwipa', '1997-05-07', 'female', 'Telkom University Bandung', 1, 'Manager Assistant', 2013, 'bungadwipa.jpg', 'operator', 'bungadwipa@gmail.com', '$2y$10$ILR.ZkCu/2ke8vHzQgWRkOJSiKRIOXwNCT7Ssb.v9hM6WzenyUN/S', NULL, '2016-04-25 11:19:55', '2016-04-25 11:19:55'),
(3, 'Vicha Octavia', 'vichaoctavia', '1996-10-14', 'female', 'Telkom University Bandung', 1, 'Staff', 2014, 'vichaoctavia.jpg', 'operator', 'octaviavicha@yahoo.com', '$2y$10$mooJjAOdPy940NiZXRhOqe74HUxR/U37fkKCz0.pheup3tbf/TvPi', NULL, '2016-04-25 11:19:55', '2016-04-25 11:19:55'),
(4, 'Elrizky Mardhi', 'elrizky', '1995-10-25', 'male', 'Telkom University Bandung', 1, 'Staff', 2013, 'elrizky.jpg', 'it', 'elrizkimardhi@gmail.com', '$2y$10$E.lqSaWPPGBNjkfQ8Y2.I.Z9kQVvxOSHIGUh/BixXUFQE5TWZXNnu', '5pIPVLyBKWPaVfzSEKiha8bX6UWUVel7J5AmO1KI1ca6hKzLcwfiH3Z0FeCv', '2016-04-25 11:19:55', '2016-04-29 00:14:15'),
(5, 'Faisal Nuqobasidqy', 'faisalnuq', '1995-12-07', 'male', 'Telkom University Bandung', 1, 'Staff', 2013, 'faisalnuq.jpg', 'it', 'faisalnuqobasidqy12@gmail.com', '$2y$10$T11ymf3oOfDBgdP.ZTf2eeQkLBmYh358yoTNX6ph2t2ZtFw.xtb8C', NULL, '2016-04-25 11:19:55', '2016-04-25 11:19:55'),
(6, 'Wahyu Kurniawan', 'wahyukur', '1995-11-30', 'male', 'Telkom University Bandung', 1, 'Staff', 2013, 'wahyukur.jpg', 'it', 'wahyuawankurniawan@gmail.com', '$2y$10$S8uI7g/nBqWCnS4EpFxNeuBRO8J4PaVbqelPv1N3th9IKBBvzB/u2', NULL, '2016-04-25 11:19:55', '2016-04-25 11:19:55'),
(7, 'Ghassan Amanullah', 'gacan', '1995-01-31', 'male', 'Prologos', 1, 'Staff', 2013, 'gacan.jpg', 'it', 'ga_wijaya@gmail.com', '$2y$10$NYOcxrIikCAJSGIquOwTq.GUfKiFz7M3WPOlEeV4JdZhSAwxv/lzq', NULL, '2016-04-25 11:19:55', '2016-04-25 11:19:55'),
(8, 'Hafidz Ali', 'hafidz', '1995-08-20', 'male', 'Gg.Paedo', 1, 'Staff', 2013, 'hafidz.jpg', 'it', 'hafidzalimaulana@gmail.com', '$2y$10$qIO5FUT6t/5VH98vbhvgbOEsk6FMB6C8PkGh.mzaOMG/.4JUc6SAO', NULL, '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(9, 'Adfal Riawan', 'adfalriawan', '1995-01-08', 'male', 'Telkom University Bandung', 1, 'Staff', 2013, 'adfal.jpg', 'it', 'adfalriawan@gmail.com', '$2y$10$mcwaKCB0ruTHN6HGIRr0zOuZ5Lq.qIcBA/dHHvJxR3qWxKP4MmbB2', NULL, '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(10, 'Fadhlurahman Irwan', 'fadhlurahman', '1995-12-03', 'male', 'Jln.Sukabirus Gg.Rd.shaleh no.19', 3, 'Manager', 2013, 'Fadhlurahman.jpg', 'employee', 'fadhloe@gmail.com', '$2y$10$Tb.udlEQHOZjoIVPndAh0eGUY4UuBkX66VhelMA7PiBKLG7wMFKOa', NULL, '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(11, 'Imas Nur Tiarani', 'imasnurtiarani', '1995-08-06', 'female', 'Jln.Sukabirus Gg.Rd.shaleh no.15', 2, 'Manager', 2013, 'imasnurtiarani.jpg', 'employee', 'imasnurtiarani@gmail.com', '$2y$10$2xHWlVgvu6F1a7TqipXQ8eenbvezeGNlASilgFISFSW8oeetow3Ny', 't99xlz44hiG6bOVOnohdCsMC0PjUDt0r7aYmI9wU4XHCWZkF9xU7Fy877afv', '2016-04-25 11:19:56', '2016-10-19 09:35:54'),
(12, 'Rini Wahyuni Tahir', 'riniwahyunit', '1995-06-13', 'female', 'Perumahan Permata Buah Batu no.e43', 5, 'Manager', 2013, 'riniwahyunit.jpg', 'employee', 'riniwahyunit@gmail.com', '$2y$10$7NlhpN.oH9AobbLtcSQezOYPLUo5bNJcHRTg.X5i8VL9QXmAw9Kaq', NULL, '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(13, 'Fifinella Rahma', 'fifinella', '1995-06-13', 'female', 'Elfiana House', 9, 'Manager', 2013, 'fifinella.jpg', 'employee', 'fifinellar9@gmail.com', '$2y$10$3kM20MDLYEgL2Y3QUvmoXuVrwOLxdE2uoRbo1j1RKvJhHe7s6sKde', NULL, '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(14, 'Maya Budi Rahayu', 'mayabr', '1994-05-30', 'female', 'Kantin Asrama', 8, 'Manager', 2013, 'mayabr.jpg', 'employee', 'mayabudir@gmail.com', '$2y$10$KKwOo.TdvzTAcGyq0tLWkuX3KUVSBxQFn5fQLUYy7YWwdIcf1A1wO', NULL, '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(15, 'Luthfi Fadil', 'infigare', '1995-11-29', 'male', 'Prologos', 7, 'Manager', 2013, 'infigare.jpg', 'employee', 'luthfifadilalamin@gmail.com', '$2y$10$vX757dFiPWqvYZIYM57AFuI7JkTQYZSXcwVDznEXQws0JW/69Rqea', NULL, '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(16, 'Ananda Bayu Putra', 'mrrobo', '1995-08-09', 'male', 'Batununggal', 9, 'Asistant Manager', 2013, 'mrrobo.jpg', 'employee', 'anandabayuputra@gmail.com', '$2y$10$8Oqki/657U19nwTe1MZ3pOvfGh2OZ2aX0fOzKnIG.r3W0w3MOY4gy', NULL, '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(17, 'Mochamad Arif Hidayat', 'mocharif', '1996-10-01', 'male', 'Palm House', 6, 'Manager', 2013, 'mocharif.jpg', 'employee', 'mocharifhidayat01@gmail.com', '$2y$10$yNLXjHmmMVhhx4xxkAxCP.RpRFAmP8pei2siTwrq65.eisuZjWmU6', NULL, '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(18, 'Shalahudin Al Ayubi', 'ayubial', '1994-12-20', 'male', 'Pavilion 18', 5, 'Manager', 2013, 'ayubial.jpg', 'employee', 'shalahudin.al.ayubi@gmail.com', '$2y$10$/mpuUzp67vud4yalTJcwBeslDM4xRSn6z6JcCdxFFA0rgCFB0axXy', NULL, '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(19, 'William Roridande', 'roridande', '1995-01-28', 'male', 'Wisma sukapura', 4, 'Manager', 2013, 'roridande.jpg', 'employee', 'roridande@gmail.com', '$2y$10$gd/ajEkFgD6gBbxUifGnYOH4QauzaXVh7gXCfJfw/BHp.SYQ4tmGy', NULL, '2016-04-25 11:19:56', '2016-04-25 11:19:56'),
(20, 'Danang Junaedi', 'danangjunaedi', '1982-01-01', 'male', 'Bandung', 10, 'CEO', 2000, 'danangjunaedi.jpg', 'employee', 'danangjunaedi@gmail.com', '$2y$10$1rygj2iFb8hslUFxHsr31./ZTc7qX2b85CA14FR7sZT7YW.ACYqle', NULL, '2016-04-25 11:19:56', '2016-04-25 11:19:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bureaus`
--
ALTER TABLE `bureaus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bureaus_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `problems_name_unique` (`name`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statuses_name_unique` (`name`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_employee_id_foreign` (`employee_id`),
  ADD KEY `tickets_operator_id_foreign` (`operator_id`),
  ADD KEY `tickets_it_id_foreign` (`it_id`),
  ADD KEY `tickets_problem_id_foreign` (`problem_id`),
  ADD KEY `tickets_status_id_foreign` (`status_id`),
  ADD KEY `tickets_bureau_id_foreign` (`bureau_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_bureau_id_foreign` (`bureau_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bureaus`
--
ALTER TABLE `bureaus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_bureau_id_foreign` FOREIGN KEY (`bureau_id`) REFERENCES `bureaus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tickets_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tickets_it_id_foreign` FOREIGN KEY (`it_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tickets_operator_id_foreign` FOREIGN KEY (`operator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tickets_problem_id_foreign` FOREIGN KEY (`problem_id`) REFERENCES `problems` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tickets_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_bureau_id_foreign` FOREIGN KEY (`bureau_id`) REFERENCES `bureaus` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
