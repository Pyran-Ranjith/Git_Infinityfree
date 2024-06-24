-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2023 at 01:09 PM
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
-- Table structure for table `ft_01_bookings`
--

CREATE TABLE `ft_01_bookings` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `personscount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ft_01_bookings`
--

INSERT INTO `ft_01_bookings` (`id`, `email`, `name`, `phone`, `personscount`, `date`) VALUES
(1, 'mahi@gmail.com', 'Mahi', '0718111805', 1, '2023-09-09 03:27:09'),
(2, 'dammika@gmil.com', 'Dammika', '0718111805', 2, '2023-09-09 03:27:09'),
(3, 'ranjith@gmail.com', 'Ranjith', '0718111805', 3, '2023-09-09 03:27:09'),
(30, 'mani@gmail.com', 'Mani', '0718111826', 0, '2023-09-12 18:30:00'),
(32, 'mani@gmail.com', 'Mani', '0718111826', 1, '2023-09-11 18:30:00'),
(33, 'admin11@gmail.com', 'Dammika', '0718111826', 3, '2023-09-22 18:30:00'),
(34, 'admin11@gmail.com', 'Dammika', '0718111826', 3, '2023-09-22 18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ft_01_bookings`
--
ALTER TABLE `ft_01_bookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ft_01_bookings`
--
ALTER TABLE `ft_01_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
