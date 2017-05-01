-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 05:39 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `order-line`
--

CREATE TABLE `order-line` (
  `orderLineId` int(11) NOT NULL,
  `orderNo` int(4) NOT NULL,
  `prodId` int(4) NOT NULL,
  `quantityOrdered` int(4) NOT NULL,
  `subTotal` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderNo` int(4) NOT NULL,
  `userId` int(4) NOT NULL,
  `orderDateTime` datetime NOT NULL,
  `orderTotal` decimal(8,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderNo`, `userId`, `orderDateTime`, `orderTotal`) VALUES
(1, 0, '2017-04-05 21:50:02', '0.00'),
(2, 0, '2017-04-05 22:10:59', '0.00'),
(3, 0, '2017-04-05 22:15:28', '0.00'),
(4, 0, '2017-04-05 22:17:55', '0.00'),
(5, 0, '2017-04-05 22:18:22', '0.00'),
(6, 0, '2017-04-05 22:18:23', '0.00'),
(7, 0, '2017-04-05 22:18:24', '0.00'),
(8, 0, '2017-04-05 22:20:56', '0.00'),
(9, 0, '2017-04-05 22:22:53', '0.00'),
(10, 0, '2017-04-05 22:22:54', '0.00'),
(11, 0, '2017-04-05 22:22:54', '0.00'),
(12, 0, '2017-04-05 22:22:55', '0.00'),
(13, 0, '2017-04-05 22:23:07', '0.00'),
(14, 0, '2017-04-05 22:23:07', '0.00'),
(15, 0, '2017-04-05 22:23:07', '0.00'),
(16, 0, '2017-04-05 22:23:08', '0.00'),
(17, 0, '2017-04-05 22:24:47', '0.00'),
(18, 0, '2017-04-05 22:24:48', '0.00'),
(19, 0, '2017-04-05 22:24:48', '0.00'),
(20, 0, '2017-04-05 22:24:48', '0.00'),
(21, 0, '2017-04-05 22:24:48', '0.00'),
(22, 0, '2017-04-05 22:24:49', '0.00'),
(23, 0, '2017-04-05 22:24:50', '0.00'),
(24, 0, '2017-04-05 22:25:37', '0.00'),
(25, 0, '2017-04-05 22:25:38', '0.00'),
(26, 0, '2017-04-05 22:25:38', '0.00'),
(27, 0, '2017-04-05 22:25:39', '0.00'),
(28, 0, '2017-04-05 22:25:40', '0.00'),
(29, 0, '2017-04-05 22:25:41', '0.00'),
(30, 0, '2017-04-05 22:25:41', '0.00'),
(31, 0, '2017-04-05 22:25:42', '0.00'),
(32, 0, '2017-04-05 22:25:42', '0.00'),
(33, 0, '2017-04-05 22:25:42', '0.00'),
(34, 0, '2017-04-05 22:25:43', '0.00'),
(35, 0, '2017-04-05 22:26:18', '0.00'),
(36, 0, '2017-04-05 22:29:30', '0.00'),
(37, 0, '2017-04-05 22:30:20', '0.00'),
(38, 0, '2017-04-05 22:33:36', '0.00'),
(39, 0, '2017-04-05 22:34:01', '0.00'),
(40, 0, '2017-04-05 22:34:33', '0.00'),
(41, 0, '2017-04-05 22:39:11', '0.00'),
(42, 0, '2017-04-05 22:46:38', '0.00'),
(43, 0, '2017-04-05 22:51:47', '0.00'),
(44, 0, '2017-04-06 20:01:03', '0.00'),
(45, 0, '2017-04-06 20:10:51', '0.00'),
(46, 0, '2017-04-06 20:11:13', '0.00'),
(47, 0, '2017-04-06 20:12:04', '0.00'),
(48, 0, '2017-04-06 20:16:27', '0.00'),
(49, 0, '2017-04-06 20:24:18', '0.00'),
(50, 0, '2017-04-06 20:27:07', '0.00'),
(51, 0, '2017-04-06 20:36:04', '0.00'),
(52, 0, '2017-04-06 20:37:14', '0.00'),
(53, 0, '2017-04-06 20:37:16', '0.00'),
(54, 0, '2017-04-06 20:50:23', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicName` varchar(50) NOT NULL,
  `prodDescrip` varchar(1000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL DEFAULT '0.00',
  `prodQuantity` int(4) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicName`, `prodDescrip`, `prodPrice`, `prodQuantity`) VALUES
(1, 'Sainsbury''s hanging 3 keys', 'keys.jpg', 'Give your room a hint of old world charm with this hanging decoration.\r\n\r\nDimensions: L20xW6cm\r\n\r\nCare and use instructions: Clean with a soft dry cloth and keep dry\r\nWarnings: Keep out of reach of children', '3.00', 100),
(2, 'Sainsbury''s Gold Glam Lantern', 'lantern.jpg', 'Add a glitzy effect to your home with the Sainsbury''s small gold glam lantern, a perfect way to create saome ambient lighting. Available in other sizes.\r\n\r\nDimensions: H27xW14xD13cm\r\nCare instructions: Clean with a soft dry cloth and keep dry. If used outdoors please keep dry and store indoors after use.\r\nWarning: Never leave a burning candle unattended. Burn candle out of the reach of children and pets.', '12.00', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(10) NOT NULL,
  `userType` text NOT NULL,
  `userFName` text NOT NULL,
  `userSName` text NOT NULL,
  `userAddress` varchar(15) NOT NULL,
  `userPostCode` int(6) NOT NULL,
  `userTelNo` int(10) NOT NULL,
  `userEmail` varchar(20) NOT NULL,
  `userPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userType`, `userFName`, `userSName`, `userAddress`, `userPostCode`, `userTelNo`, `userEmail`, `userPassword`) VALUES
(5, '', 'binu', 'sene', 'next to thareef', 690, 1234567890, 'binu.kumar', 'holywtf'),
(10, '', 'umar', 'packeer', '81, kent', 900, 987633234, 'umar.packeer', 'qwerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order-line`
--
ALTER TABLE `order-line`
  ADD PRIMARY KEY (`orderLineId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderNo`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`),
  ADD UNIQUE KEY `userPassword` (`userPassword`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order-line`
--
ALTER TABLE `order-line`
  MODIFY `orderLineId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderNo` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
