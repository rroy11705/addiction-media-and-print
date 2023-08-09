-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 07:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_addiction_media_and_print`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `featured` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `image`, `featured`) VALUES
(1, 'News Network 18', 'uploads/1690309920_2.png', 1),
(2, 'Mackintosh Burn Limited', 'uploads/1690311660_3.png', 1),
(3, 'Zee Bangla', 'uploads/1690311720_4.png', 1),
(4, 'Sabyaa Saachi', 'uploads/1690311780_1.png', 1),
(5, 'Govt. of West Bengal', 'uploads/1690311780_5.png', 1),
(6, 'Paridarshak', 'uploads/1690311840_6.png', 1),
(7, 'Bansal Cement', 'uploads/1690311840_7.png', 1),
(8, 'Kolkata Pourosanstha', 'uploads/1690311900_8.png', 1),
(9, 'Rashmi Group', 'uploads/1690311900_9.png', 1),
(10, 'CNCI', 'uploads/1690327740_10.png', 1),
(11, 'Spacio', 'uploads/1690311960_11.png', 1),
(12, 'CIA', 'uploads/1690311960_12.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `meta_field` text DEFAULT NULL,
  `meta_value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`meta_field`, `meta_value`) VALUES
('mobile', '[+91] 12345 67890'),
('whatsapp', '911234567890'),
('email', 'addictionmedia@gmail.com'),
('facebook', 'https://facebook.com'),
('twitter', ''),
('linkin', ''),
('instagram', 'https://www.instagram.com'),
('behance', '');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(30) NOT NULL,
  `name` text DEFAULT NULL,
  `service` int(30) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `attachment` text DEFAULT NULL,
  `date` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `service`, `summary`, `attachment`, `date`) VALUES
(5, 'Moment Perfume', 1, 'test', 'uploads/1690327920_H-3 1.png', '28/02/2023'),
(6, 'Moment Deodrent', 2, 'test', 'uploads/1690407300_H-3 1.png', '02/03/2023'),
(7, 'Moment Deodrent', 2, 'test', 'uploads/1690388040_H-1 1.png', '01/03/2023');

-- --------------------------------------------------------

--
-- Table structure for table `recent_work`
--

CREATE TABLE `recent_work` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `date` varchar(11) NOT NULL,
  `attachment` text NOT NULL,
  `thumbnail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recent_work`
--

INSERT INTO `recent_work` (`id`, `name`, `description`, `date`, `attachment`, `thumbnail`) VALUES
(1, 'BOMKESH PROMO', '25 sec of Bomkesh Bakshi promosion.', '28/02/2023', 'uploads/1690928220_BOMKESH_PROMO1_25secs.mp4', 'uploads/1690932660_Capture.PNG'),
(2, 'CESE', 'cese', '01/03/2023', 'uploads/1690930380_CESC.mp4', 'uploads/1690932780_Capture.PNG'),
(3, 'SAREGAMA PROMO 52SEC ASCHEY', '14.05.14 SAREGAMA PROMO 52SEC ASCHEY REVISED-MPEG-4 -1-1', '01/03/2023', 'uploads/1690930980_14.05.14 SAREGAMA PROMO 52SEC ASCHEY REVISED-MPEG-4 -1-1.mp4', 'uploads/1690932840_Capture.PNG'),
(4, 'Rashmi Cement', 'Rashmi Cement', '04/03/2023', 'uploads/1690930500_CA037955  Rashmi Cement 10sec.mov', 'uploads/1690932900_Capture.PNG'),
(5, 'Rashmi TMT', 'Rashmi TMT', '04/03/2023', 'uploads/1690930560_CA043366  RASHMI TMT  10  BEN.mov', 'uploads/1690932960_Capture.PNG'),
(6, 'Cycle Agarbathi', 'Cycle Agarbathi', '28/02/2023', 'uploads/1690930560_Cycle Agarbathi.mp4', 'uploads/1690933020_Capture.PNG'),
(7, 'Test Image', 'test', '04/03/2023', '', 'uploads/1690964880_Byakuya   Kuchiki Byakuya Wallpaper 13423882.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `image`) VALUES
(1, 'Packaging Design', 'uploads/1690230000_packaging-design.svg'),
(2, 'Advertisement', 'uploads/1690229880_advertisement.svg'),
(3, 'Events', 'uploads/1690230240_events.svg'),
(4, 'Google Ads', 'uploads/1690230420_google-ads.svg'),
(5, 'Films & Video', 'uploads/1690230660_films-and-videos.svg'),
(6, 'Technology', 'uploads/1690230660_technology.svg'),
(7, 'Content Writing', 'uploads/1690230720_content-writing.svg'),
(8, 'Promotions', 'uploads/1690270740_promotions.svg'),
(9, 'Digital Events', 'uploads/1690270740_digital-events.svg'),
(10, 'Designing', 'uploads/1690270800_designing.svg'),
(14, 'All Types of Printing', 'uploads/1690309740_printing.svg');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'Addiction Media & Print'),
(3, 'contact', '+1234567890'),
(4, 'email', 'info@sample.com'),
(6, 'short_name', 'AMP'),
(9, 'logo', 'uploads/1690230120_favicon.png'),
(11, 'welcome_message', 'A multidisciplinary creative studio, based out of Kolkata, specializing in advertising and branding.'),
(13, 'title', 'Welcome to');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`, `last_login`, `date_added`, `date_updated`) VALUES
(1, 'Rahul', 'Roy', 'bvibemurvoumarbvhmvme974g7gat', '34e6808856fcaf524d6a4386059d8cec', 'uploads/1690229340_favicon.png', NULL, '2021-01-20 14:02:37', '2023-07-25 01:39:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service` (`service`);

--
-- Indexes for table `recent_work`
--
ALTER TABLE `recent_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
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
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recent_work`
--
ALTER TABLE `recent_work`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`service`) REFERENCES `service` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
