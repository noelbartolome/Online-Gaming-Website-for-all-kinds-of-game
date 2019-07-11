-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2018 at 07:37 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsteammarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `account_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pw` varchar(50) NOT NULL,
  `userlevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`account_id`, `uname`, `pw`, `userlevel`) VALUES
(1, 'admin', 'admin', 1),
(2, '2', '2', 0),
(12, 'kart', 'kart', 0),
(15, 'ren', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `account_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `unit_price` int(50) NOT NULL,
  `subtotal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `account_id`, `product_id`, `quantity`, `unit_price`, `subtotal`) VALUES
(28, 12, 120, 1, 21, 21),
(29, 12, 104, 1, 999, 999),
(30, 12, 109, 1, 500, 500);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `order_number` int(50) NOT NULL,
  `account_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `unit_price` int(50) NOT NULL,
  `subtotal` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile_num` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `unit_price` int(50) NOT NULL,
  `stock` int(50) NOT NULL,
  `game` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `fillornot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `unit_price`, `stock`, `game`, `type`, `fillornot`) VALUES
(0, 'demo2', 20, 9999, 'dota2', 'immortal', 1),
(1, 'fill', 0, 0, '0', 'immortal', 1),
(2, 'fill', 0, 0, '0', 'arcana', 1),
(3, 'fill', 0, 0, '0', 'courier', 1),
(4, 'fill', 0, 0, 'csgo', '', 1),
(5, 'fill', 0, 0, '0', 'primary', 1),
(6, 'fill', 0, 0, '0', 'secondary', 1),
(7, 'fill', 0, 0, '0', 'knife', 1),
(8, 'fill', 0, 0, 'pubg', '0', 1),
(9, 'fill', 0, 0, '0', 'shirt', 1),
(10, 'fill', 0, 0, '0', 'pants', 1),
(11, 'fill', 0, 0, '0', 'outer', 1),
(12, 'fill', 0, 0, '0', 'face', 1),
(99, 'dark artistry hair', 10, 999, 'dota2', 'immortal', 0),
(100, 'cluckles the brave', 300, 999, 'dota2', 'courier', 0),
(104, 'm4a1', 999, 9999, 'csgo', 'primary', 0),
(106, 'deagle', 300, 999, 'csgo', 'secondary', 0),
(107, 'kitchen knife', 200, 9999, 'csgo', 'knife', 0),
(109, 'tshirt', 500, 999, 'pubg', 'shirt', 0),
(110, 'maong', 900, 999, 'pubg', 'pants', 0),
(111, 'coat', 9, 999, 'pubg', 'outer', 0),
(112, 'ballistic mask', 700, 999, 'pubg', 'face', 0),
(113, 'great sages reckoning', 1500, 999, 'dota2', 'arcana', 0),
(120, 'demo2', 21, 999, 'dota2', 'immortal', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD UNIQUE KEY `cart_id` (`cart_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`order_number`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `order_number` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
