-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 11:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalboss`
--

-- --------------------------------------------------------

--
-- Table structure for table `carttable`
--

CREATE TABLE `carttable` (
  `cart_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carttable`
--

INSERT INTO `carttable` (`cart_id`, `f_name`, `m_name`, `amount`, `user_id`) VALUES
(1, 'chicken', 'Bundles', '500', 0),
(2, 'chicken', 'Bundles', '500', 0),
(3, 'chicken', 'Bundles', '500', 0),
(4, 'chicken', 'Bundles', '500', 0),
(5, 'chicken', 'Bundles', '500', 0),
(6, 'beef', 'Bundles', '400', 0),
(7, 'beef', 'Bundles', '400', 0),
(8, 'beef', 'Bundles', '400', 0),
(9, 'chicken', 'Bundles', '500', 0),
(10, 'chicken', 'Bundles', '500', 0),
(11, 'chicken', 'Bundles', '500', 0),
(12, 'chicken', 'Bundles', '500', 0),
(13, 'gg', 'Bundles', '124', 0),
(14, 'cheese', 'Burgers', '34134', 0),
(15, 'chicken', 'Bundles', '500', 8),
(16, 'beef', 'Bundles', '400', 8),
(17, 'gg', 'Bundles', '124', 8),
(18, 'beef', 'Bundles', '400', 8),
(19, 'Crispy Onion Ring', 'Fries & Sides', '200Kyats', 10),
(23, 'Grilled Chicken Bundle', 'Bundles', '9900Kyats', 8),
(24, 'Grilled Beef Bundle', 'Bundles', '11900Kyats', 8),
(28, 'Family Duel Bundle', 'Bundles', '19900Kyats', 10),
(30, 'Grilled Beef Bundle', 'Bundles', '11900Kyats', 10),
(31, 'Family Duel Bundle', 'Bundles', '19900Kyats', 10);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(1000) NOT NULL,
  `c_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`c_id`, `c_name`, `c_img`) VALUES
(43, 'Bundles', 'family bundle.png'),
(44, 'Burgers', 'double beef.png'),
(45, 'Fries & Sides', 'onion.png'),
(46, 'Beverages', 'pepsi-png-15969.png');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(1000) NOT NULL,
  `item_price` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `item_img` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_price`, `cat_id`, `item_img`) VALUES
(78, 'Grilled Chicken Bundle', 9900, 43, 'c01.png'),
(79, 'Grilled Beef Bundle', 11900, 43, 'b02.png'),
(80, 'Family Duel Bundle', 19900, 43, 'family bundle.png'),
(83, 'King Burger', 3500, 44, '01.png'),
(84, 'Double Beef Burger', 4500, 44, 'double beef.png'),
(85, 'Fried Chicken Tender Patty Burger', 3500, 44, 'HJ00571_WEB_JackΓCOs-Fried-Chicken-classic_800X600_1.png'),
(86, 'Smoked Beef  Patty Burger', 3500, 44, '02.png'),
(87, 'Chicken Spicy Sauce Burger', 3500, 44, '03.png'),
(88, 'Spicy Vegetable Patty Burger', 4500, 44, 'spicy vegan burger.png'),
(89, 'Egg & Sausage Burger', 3500, 44, 'sausage and cheese.png'),
(90, 'French Fries', 2000, 45, 'fries.png'),
(91, 'Crispy Onion Ring', 200, 45, 'onion.png'),
(92, 'Cola', 1500, 46, 'coca-cola-png-22535.png'),
(93, 'Pepsi', 1500, 46, 'pepsi-png-15969.png'),
(94, 'Tap Water', 1000, 46, 'Water.png'),
(95, 'Chicken Nuggets', 2000, 45, 'nugget.png'),
(96, 'Chicken Nuggets', 2000, 45, 'nugget.png'),
(97, 'c bundle', 123456, 43, 'family bundle.png');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `o_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `o_price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`o_id`, `user_id`, `item_name`, `cat_name`, `o_price`) VALUES
(10, 0, 'Tap Water', 'Beverages', '1000Kyats'),
(11, 0, 'Tap Water', 'Beverages', '1000Kyats'),
(12, 0, 'Grilled Beef Bundle', 'Bundles', '11900Kyats'),
(13, 0, 'Fried Chicken Tender Patty Burger', 'Burgers', '3500Kyats');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(1000) NOT NULL,
  `user_ph` varchar(50) NOT NULL,
  `user_mail` varchar(1000) NOT NULL,
  `user_pass` varchar(1000) NOT NULL,
  `user_type` varchar(100) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_ph`, `user_mail`, `user_pass`, `user_type`) VALUES
(1, 'minthantkyaw', '09750373806', 'amesan2015bio@gmail.com', '1234567', 'YES'),
(2, 'hello', '09254369731', 'henery@gmail.com', '12345', 'NO'),
(3, 'ff', '213213142135', 'admin@gmail.com', '123456789', 'YES'),
(4, 'coleon', '09750373806', 'user@gmail.com', '123456789', 'NO'),
(5, 'user', '09750373806', 'user@gmail.com', '123456', 'YES'),
(6, 'pyu', '1231241251', 'phyu@gmail.com', '12345', 'NO'),
(7, 'aaa', '1234454', 'aaa@gmail.com', '12345', 'NO'),
(8, 'aa', '12314124', 'asd@gmail.com', '12345', 'NO'),
(9, 'aaaaa', '09152763581273', 'user@gmail.com', '123456', 'NO'),
(10, 'minthantkyaw', '09254369731', 'coleon@gmail.com', '111111', 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carttable`
--
ALTER TABLE `carttable`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carttable`
--
ALTER TABLE `carttable`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
