-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 01, 2018 at 02:40 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `onlinestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`) VALUES
(1, 'Necklaces', 'For man and woman'),
(2, 'Bracelets', 'For man and woman'),
(3, 'Rings', 'Form man and woman'),
(4, 'Earrings', 'Just for woman'),
(5, 'New Category', 'Testing category');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `price`, `image`, `description`, `category`) VALUES
(1, 'Lab-Created', '244.99', 'image1.jpg', 'Lorem ipsum dolo emet alem or iflao', 3),
(3, 'Lurus Lurus', '320.44', 'image3.jpg', 'Tirus lorem ispul a kekle ovsalm msmel. Daozk odo kzkdoa lakd', 0),
(4, 'Tututr', '59.00', 'image2.jpg', 'Zekle ovsalm msmel. Daozk odo kzkdoa lakd', 0),
(5, 'Hufle', '120.49', 'image1.jpg', 'Mali neki description ', 0),
(9, 'Ecletic Creations', '180.00', 'woman-918787_640.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 1),
(10, 'Foozles', '280.00', 'lady-602881_640.jpg', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 1),
(11, 'Doodads', '382.00', 'necklace-518268_640.jpg', 'Loset enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 1),
(12, 'Buris', '145.00', 'image2.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 3),
(13, 'Relics to Riches', '85.00', 'jewelry-2117470_640.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 2),
(14, 'Lara Ortak', '234.00', 'diamond-1817291_640.png', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 2),
(15, 'Brabus', '450.00', 'bracelet-3165768_640.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam', 2),
(16, 'Octopus', '123.00', 'girl-2366438_640.jpg', 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur', 4),
(17, 'Larska', '1323.00', 'girl-2198018_640.jpg', 'Turuis autem vel eum iure reprehenderit qui in eaao ', 4),
(18, 'Test Item', '123.00', 'image3.jpg', 'Lorem ipsul dolor emet ar ipsum amet bla tralala', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 3),
(2, 'Jovan', 'jovan', 2),
(3, 'Milena', 'milena', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
