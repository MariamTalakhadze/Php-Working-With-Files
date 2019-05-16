-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 11:23 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posts`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `satauri` varchar(50) NOT NULL,
  `agwera` text NOT NULL,
  `damatebistarigi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isactive` tinyint(4) NOT NULL,
  `misamarti` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `satauri`, `agwera`, `damatebistarigi`, `isactive`, `misamarti`) VALUES
(2, 'kokoko', 'rokoko', '2019-05-16 18:13:19', 0, 'uploads/5cdda83fb2f781.34734873.png'),
(3, 'mimino', 'ცეჯკფეიფჰ', '2019-05-16 18:17:26', 1, 'uploads/5cdda9362fe634.57584110.png'),
(4, 'ფევგრ', 'წევგ', '2019-05-16 18:18:58', 0, NULL),
(5, 'ფევგრ', 'წევგ', '2019-05-16 18:23:04', 1, ''),
(6, 'noirev', 'bfireg', '2019-05-16 18:24:36', 0, ''),
(7, 'noirev', 'bfireg', '2019-05-16 18:25:06', 1, ''),
(10, 'kokoro', 'mii', '2019-05-16 21:22:28', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
