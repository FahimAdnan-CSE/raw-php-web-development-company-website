-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 06:28 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userform`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `fname`, `lname`, `email`, `message`) VALUES
(19, 'Muhit', 'Asraf', 'muhit@gmail.com', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase`
--

CREATE TABLE `product_purchase` (
  `No` int(17) NOT NULL,
  `id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `product` varchar(30) NOT NULL,
  `price` varchar(30) DEFAULT NULL,
  `t_number` varchar(30) DEFAULT NULL,
  `m_number` varchar(30) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_purchase`
--

INSERT INTO `product_purchase` (`No`, `id`, `name`, `email`, `product`, `price`, `t_number`, `m_number`, `reg_date`, `order_status`) VALUES
(3, 5, 'fahimadanan5', 'fahimadnan18@gmail.com', 'Flarum -Laravel project', '5000', 'asdsasd', 'dadsa', '2021-07-17 18:57:01', 'Apssad'),
(4, 5, 'fahimadanan5', 'fahimadnan18@gmail.com', 'Flarum -Laravel project', '5000', 'assdas', 'sdsad', '2021-07-17 18:58:11', 'ApdsDA'),
(5, 5, 'fahimadanan5', 'fahimadnan18@gmail.com', 'Flarum -Laravel project', '5000', 'asdsas', 'dadas', '2021-07-17 18:56:13', 'Ap'),
(8, 5, 'fahimadanan5', 'fahimadnan18@gmail.com', 'Flarum -Laravel project', '5000', 'asdda', 'dsdasd', '2021-07-17 19:27:45', 'Pending'),
(9, 6, 'asdd', 'fahimadnan18@gmail.com', 'Flarum -Laravel project', '5000', 'asddsa', 'sddsad', '2021-07-18 03:55:40', 'Pending'),
(10, 7, 'adnan', 'fahimadnan18@gmail.com', 'Flarum -Laravel project', '5000', 'sdsadsds', '122122121', '2021-07-18 04:34:26', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile_image`, `bio`) VALUES
(1, '1626619688-exit.png', ''),
(2, '1626619775-logoutexit.png', ''),
(3, '1626625315-logoutexit.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(5, 'fahimadanan5', 'fahimadnan1@gmail.com', '$2y$10$wX0/SOzWpj8fSjvufwd5ReTC/Sa3.bWv0dsoJ6iRFsPE9ffaZxvFm', 0, 'verified'),
(7, 'adnan', 'fahimadnan18@gmail.com', '$2y$10$OWoGYW58osJP9DdvDcyrkOvKQ4t96fCHAVxg//RS0iMXh6XkuBNSq', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_purchase`
--
ALTER TABLE `product_purchase`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_purchase`
--
ALTER TABLE `product_purchase`
  MODIFY `No` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
