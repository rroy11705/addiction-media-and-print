-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 12:14 PM
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
('mobile', '[+91] 86975 00538'),
('whatsapp', '918697500538'),
('email', 'desgn.dd@gmail.com'),
('facebook', 'https://facebook.com/profile'),
('twitter', ''),
('linkin', 'https://www.linkedin.com/in/desgndd/'),
('instagram', 'https://www.instagram.com/desgn.dd/'),
('behance', 'https://www.behance.net/theddey/'),
('resume', 'https://drive.google.com/drive/folders/1K78x5z_eDCnm6JO9KTiga9FAaf8PYSgD?usp=sharing');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(30) NOT NULL,
  `school` text DEFAULT NULL,
  `degree` text DEFAULT NULL,
  `month` varchar(50) NOT NULL,
  `year` int(10) NOT NULL,
  `description` text DEFAULT NULL,
  `order_by` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `school`, `degree`, `month`, `year`, `description`, `order_by`) VALUES
(1, 'Sample School', 'Sample', 'April', 2017, '<p><span style=\"color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; text-align: justify;\"><span style=\"font-weight: bolder;\">Lorem ipsum dolor sit amet,</span> consectetur adipiscing elit. Quisque malesuada, odio ullamcorper ornare pellentesque, orci quam consectetur urna, sed fringilla nunc lorem lacinia quam. Ut pellentesque luctus mi vitae vestibulum. Vivamus scelerisque congue turpis, vel rutrum felis ultricies ac. Duis vitae ligula pellentesque erat fermentum mattis. Ut fringilla blandit est sit amet malesuada. Mauris ultrices interdum tellus nec tincidunt. Nulla malesuada sem lorem. Pellentesque blandit augue eu mi iaculis faucibus. Vestibulum in nisl at turpis bibendum efficitur. Integer dapibus volutpat nisl eget lobortis. Nam sit amet scelerisque felis. Praesent euismod quis eros et facilisis. Vivamus vitae nibh vitae nunc dapibus placerat. Duis ac accumsan enim, at semper tortor. Nunc aliquet augue eu diam semper sodales. Maecenas pulvinar dignissim ex, vel lacinia massa consectetur ut.</span></p><p><br></p>', 0),
(2, 'School 2', 'Degree 2', 'March', 2018, '<p><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Sed dui diam, aliquet vel porttitor non, placerat vitae ligula. Donec ut neque at massa accumsan volutpat vitae vitae augue. Morbi dapibus finibus nulla, vitae ultricies lectus iaculis vitae. Morbi maximus vel justo ut consequat. Fusce ut ex feugiat, pulvinar velit sit amet, cursus lorem. Aliquam ullamcorper tempor commodo. Etiam faucibus diam sed arcu vehicula, blandit accumsan nulla placerat.</span><br></p>', 0),
(3, 'Sample School 33', 'Degree 3', 'April', 2019, '&lt;p&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Etiam viverra sem sit amet dapibus imperdiet. Integer vitae eros ex. Cras ac nunc eleifend, malesuada ligula iaculis, posuere massa. Donec congue tincidunt vehicula. Pellentesque in sem est. Cras venenatis eros eget ipsum blandit, et vulputate ipsum rhoncus. Donec euismod non lacus eu venenatis. Nam magna velit, fringilla sed commodo non, accumsan at elit. Suspendisse sagittis purus ex, sit amet mollis sem vehicula vitae. Vivamus consectetur faucibus libero, efficitur feugiat nibh tempus sed.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(30) NOT NULL,
  `name` text DEFAULT NULL,
  `category` varchar(20) NOT NULL,
  `summary` text DEFAULT NULL,
  `attachment_type` text DEFAULT NULL,
  `attachment_link` text DEFAULT NULL,
  `year` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `category`, `summary`, `attachment_type`, `attachment_link`, `year`) VALUES
(1, 'NabaSpec', 'Website Design', 'No-Code Dashboard Creation Platform', 'Website', 'https://www.nabaspec.com', '2023'),
(2, 'House of AC', 'Graphic Design', 'Luxury Furniture Company', 'Figma File', '', '2022'),
(3, 'Addiction Media & Print', 'Website Design', 'Design &amp; Advertising Agency', 'Figma File', '', '2023');

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
(1, 'name', 'desgn.dd'),
(2, 'address', 'Philippines'),
(3, 'contact', '+1234567890'),
(4, 'email', 'info@sample.com'),
(6, 'short_name', 'd3'),
(9, 'logo', 'uploads/1689447240_design.dd.png'),
(11, 'welcome_message', 'I am a creative designer who has expertise in multi-disciplinary parts of design.'),
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
(1, 'Debarpan', 'Dey', 'bvibemurvoumarbvhmvme974g7gat', '34e6808856fcaf524d6a4386059d8cec', 'uploads/1689447240_design.dd.png', NULL, '2021-01-20 14:02:37', '2023-07-16 00:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `id` int(30) NOT NULL,
  `company` text DEFAULT NULL,
  `position` text DEFAULT NULL,
  `started` varchar(250) NOT NULL,
  `ended` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `order_by` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`id`, `company`, `position`, `started`, `ended`, `description`, `order_by`) VALUES
(1, 'Company 101', 'Web Developer', 'March_2014', 'July_2017', '&lt;p&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; text-align: justify;&quot;&gt;Curabitur venenatis tortor semper finibus congue. Praesent eget tellus ac libero euismod pulvinar sed tincidunt odio. Cras sed viverra orci. Suspendisse cursus faucibus augue, sed feugiat ante commodo vitae. Praesent ut tempus neque. Donec ac ultricies orci, sed egestas nunc. Nunc lacinia, tortor sit amet elementum cursus, ante erat dictum lorem, ut feugiat sapien mi quis nulla. Nunc diam erat, lobortis nec posuere in, tempus non dui. Phasellus eleifend est at neque luctus, in placerat dolor pretium. Integer sagittis lacinia placerat. Nulla in dolor dapibus purus pharetra consectetur ac et tortor. Morbi blandit viverra ipsum, at lobortis odio lacinia tempus. Maecenas ac lobortis nisi. Suspendisse potenti.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
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
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
