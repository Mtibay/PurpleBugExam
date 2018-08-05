-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2018 at 12:08 AM
-- Server version: 5.7.22-0ubuntu0.17.10.1
-- PHP Version: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PurpleBugExam`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `Full_Name` varchar(225) NOT NULL,
  `Bread` varchar(255) NOT NULL,
  `Sauce` varchar(255) NOT NULL,
  `Sandwich` varchar(255) NOT NULL,
  `Chese` varchar(255) NOT NULL,
  `Veggies` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `Full_Name`, `Bread`, `Sauce`, `Sandwich`, `Chese`, `Veggies`) VALUES
(61, 'Marvin', 'Whole Wheat', 'Mustard', 'Oven Roasted Turkey', ' Swiss', 'Peppers - Banana'),
(62, '', '', '', '', '', ''),
(63, 'tibay', 'Whole Wheat', 'Mayo', 'Turkey Bacon Club', 'American', 'Peppers - Banana'),
(64, '', '', '', '', '', ''),
(65, 'g', 'Italian Herb', 'Honey Mustard', 'Savory', 'American', 'Cucumber'),
(66, '', '', '', '', '', ''),
(67, 'ttttt', 'Whole Wheat', 'Honey Mustard', 'Savory', 'American', 'Cucumber'),
(68, '', '', '', '', '', ''),
(69, 'sdfsfd', 'Whole Wheat', 'Honey Mustard', 'Savory', 'American', ' Lettuce'),
(70, '', '', '', '', '', ''),
(71, 'GGWP!', 'Whole Wheat', 'Mustard', 'Oven Roasted Turkey', ' Swiss', 'Peppers - Banana'),
(72, 'Hire me please! hehe thakns!', 'Whole Wheat', 'Honey Mustard', 'Savory', 'American', 'Peppers - Banana'),
(73, '', '', '', '', '', ''),
(74, '', '', '', '', '', ''),
(75, '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
