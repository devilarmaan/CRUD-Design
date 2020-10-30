-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2020 at 06:39 PM
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
-- Database: `CRUD_Design`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud_posts_data`
--

CREATE TABLE `crud_posts_data` (
  `id` int(11) NOT NULL,
  `authorname` varchar(32) NOT NULL,
  `title` varchar(100) NOT NULL,
  `addressname` varchar(100) NOT NULL,
  `post` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crud_posts_data`
--

INSERT INTO `crud_posts_data` (`id`, `authorname`, `title`, `addressname`, `post`) VALUES
(1, 'Devil Armaan', 'here is my data as demo', 'Chhagalnaiya, Feni', 'Hi Dear..'),
(4, 'Asad Anik', 'About PUBG...', 'Chhagalnaiya, Feni, Dhaka', 'Hi all there is our main database...'),
(5, 'Asad Anik', 'About My Macbook Overheating...', 'Dhaka, Motua,,', 'I use macbook air and it becomes so much heat because there is no pan inside for this kind of processor...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud_posts_data`
--
ALTER TABLE `crud_posts_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud_posts_data`
--
ALTER TABLE `crud_posts_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
