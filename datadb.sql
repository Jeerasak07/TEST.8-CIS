-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 06:44 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) UNSIGNED NOT NULL,
  `swot_analysis` text DEFAULT NULL,
  `strengths` text DEFAULT NULL,
  `weaknesses` text DEFAULT NULL,
  `opportunities` text DEFAULT NULL,
  `threats` text DEFAULT NULL,
  `local_resources` text DEFAULT NULL,
  `tourist_attractions` text DEFAULT NULL,
  `economic_crops` text DEFAULT NULL,
  `abundant_resources` text DEFAULT NULL,
  `community_groups` text DEFAULT NULL,
  `reporter_name` varchar(50) DEFAULT NULL,
  `report_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `swot_analysis`, `strengths`, `weaknesses`, `opportunities`, `threats`, `local_resources`, `tourist_attractions`, `economic_crops`, `abundant_resources`, `community_groups`, `reporter_name`, `report_date`) VALUES
(6, 'ครวจสอบพื้นที่ในด้านต่าง ๆ เช่น พื้นที่ตั้งอยู่ที่ไหน สภาพภูมิศาสตร์เป็นอย่างไร เป็นต้น', 'พื้นที่ติดกับแม่น้ำ', 'พื้นที่ในการเข้าถึงยาก เนื่อวจากสภาพถนนที่ทรุดโทรม', 'พื้นที่เป็นที่รู้จักน้อย ทรัพยากรอุดมสมบุรณ์', 'ขาดความร่วมมือของคนในพื้นที่ และความเข้าใจในการใช้ทรัพยากร', NULL, 'อุทยาน แม่น้ำ', 'ยางพารา', 'ป่าไม้', 'บ้านเพียงใจ', 'นาย จีรศักดิ์ ผาลี', '2023-06-23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `role`) VALUES
(1, 0, 'vip', '1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
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
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
