-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 01:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ft-01-fast-food-restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `ft_01_items`
--

CREATE TABLE `ft_01_items` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` decimal(9,2) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ft_01_items`
--

INSERT INTO `ft_01_items` (`id`, `category_id`, `name`, `description`, `price`, `image`) VALUES
(1, 4, 'French Fries--', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus ', 350.00, 'images/f5.png'),
(2, 1, 'Tasty Burger----', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus ', 500.00, 'images/f8.png'),
(3, 1, 'Tasty Burger--', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus ', 550.00, 'images/f7.png'),
(4, 2, 'Delicious Pizza----', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus ', 750.00, 'images/f6.png'),
(5, 2, 'Delicious Pizza----', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus ', 800.00, 'images/f3.png'),
(6, 3, 'Delicious Pasta***', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus ', 500.00, 'images/f4.png'),
(7, 3, 'Delicious Pasta***', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus ', 600.00, 'images/f9.png'),
(8, 2, 'Delicious Pizza----', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus ', 700.00, 'images/f1.png'),
(9, 1, 'Delicious Burger--', 'Veniam debitis quaerat officiis quasi cupiditate quo, quisquam velit, magnam voluptatem repellendus ', 500.00, 'images/f2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ft_01_items`
--
ALTER TABLE `ft_01_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ft_01_items`
--
ALTER TABLE `ft_01_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
