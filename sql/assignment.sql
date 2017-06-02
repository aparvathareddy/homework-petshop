-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 04:09 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `favourite_food` varchar(255) DEFAULT NULL,
  `names` text NOT NULL COMMENT 'JSON encoded array of names',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `type`, `name`, `age`, `favourite_food`, `names`, `created_at`, `updated_at`) VALUES
(1, 'Cat', 'Kitty', 6, NULL, '[''Billy'']', '2017-05-15 20:41:38', '2017-05-15 20:41:38'),
(2, 'Dog', 'Tiger', 8, NULL, '[]', '2017-05-15 20:41:38', '2017-05-15 20:41:38'),
(3, 'Cat', 'Billy', 6, NULL, '[''Kitty'']', '2017-05-15 20:42:03', '2017-05-15 20:42:03'),
(4, 'Dog', 'Dragon', 8, NULL, '[''Shooter'']', '2017-05-15 20:42:03', '2017-05-15 20:42:03'),
(5, 'Cat', NULL, 5, 'Mouse', '[]', '2017-05-15 22:06:06', '2017-05-15 22:06:06'),
(6, 'Dog', NULL, 9, 'Peanut Butter', '[]', '2017-05-15 22:06:06', '2017-05-15 22:06:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
