-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 10:27 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartwaterflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE `system` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `debitair` int(11) NOT NULL,
  `servo_low` int(2) NOT NULL,
  `servo_normal` int(2) NOT NULL,
  `servo_labor` int(2) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`id`, `token`, `debitair`, `servo_low`, `servo_normal`, `servo_labor`, `created_date`, `updated_date`) VALUES
(3, '118130122', 100, 0, 0, 0, '0000-00-00 00:00:00', '2021-02-10 16:01:17'),
(4, 'v5c4Fx8DPYMyBvlHbFytDuKBu5mINsNOIqCaYUpPM', 123, 0, 0, 1, '0000-00-00 00:00:00', '2021-02-10 16:03:34'),
(5, 'YLIsKe9Ci1SncIYpQ8u4UWneJFnKThx7Wx9LagErU', 12312, 0, 0, 0, '0000-00-00 00:00:00', '2021-02-10 16:26:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `system`
--
ALTER TABLE `system`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `system`
--
ALTER TABLE `system`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
