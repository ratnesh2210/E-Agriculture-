-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 11:46 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-agri`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `customer_id` varchar(200) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `customer_id`, `product_id`, `status`, `quantity`, `price`, `total_price`) VALUES
(1, 'user5@gmail.com', 1, 'Purchased', 2, 60, 120),
(3, '', 0, 'Not Purchased', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comments` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `comments`) VALUES
(1, 'dsvdvdvsz', 'sdvsdv@gmail.com', ''),
(2, 'ruchi', 'ruchi@gmail.com', ''),
(3, 'srreyas', 'sreay@gmail.com', ''),
(4, 'user55', 'user5@gmail.com', ''),
(5, 'swathinair', 'swatinair44@gmail.com', ''),
(6, 'swathinair', 'swatinair44@gmail.com', ''),
(7, 'me', 'me@gmail.com', 'amazing'),
(8, 'me', 'me@gmail.com', 'amazing'),
(9, 'neha', 'singhneha8475@gmail.com', 'bcdshckjv'),
(10, 'shashank', 'shashank@gmail.com', 'nice website idea');

-- --------------------------------------------------------

--
-- Table structure for table `customer_history`
--

CREATE TABLE `customer_history` (
  `customer_history_id` int(11) NOT NULL,
  `customer_id` varchar(200) NOT NULL,
  `latest_updated` date NOT NULL,
  `history` varchar(5000) NOT NULL,
  `amount_deducted` int(11) NOT NULL,
  `account_balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_history`
--

INSERT INTO `customer_history` (`customer_history_id`, `customer_id`, `latest_updated`, `history`, `amount_deducted`, `account_balance`) VALUES
(1, 'user5@gmail.com', '2017-04-23', 'Purchased product=bananas , quantity purchased=2 for price=120', 120, 9880);

-- --------------------------------------------------------

--
-- Table structure for table `farmer_history`
--

CREATE TABLE `farmer_history` (
  `farmer_history_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `farmer_email` varchar(200) NOT NULL,
  `latest_updated` datetime NOT NULL,
  `history` longtext NOT NULL,
  `quantity_purchased` int(11) NOT NULL,
  `purchased_by_customer` varchar(200) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farmer_history`
--

INSERT INTO `farmer_history` (`farmer_history_id`, `product_id`, `product_name`, `farmer_email`, `latest_updated`, `history`, `quantity_purchased`, `purchased_by_customer`, `balance`) VALUES
(1, 1, 'bananas', 'user4@gmail.com', '2017-04-23 10:59:47', 'Amount added , since product = bananas with product_id=1,quantity purchased=2 purchased by customer=user5@gmail.com and hence amount added=120', 2, 'user5@gmail.com', 120);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `customer_id` varchar(200) NOT NULL,
  `bank_name` varchar(200) NOT NULL,
  `Name_on_card` varchar(200) NOT NULL,
  `expiry_date` date NOT NULL,
  `card_number` bigint(16) NOT NULL,
  `cvc_no` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `customer_id`, `bank_name`, `Name_on_card`, `expiry_date`, `card_number`, `cvc_no`) VALUES
(1, 'user4@gmail.com', 'State Bank of India', 'shashank', '2017-06-16', 9875465412, 654),
(2, 'user5@gmail.com', 'Bank of Baroda', 'shashank', '2017-06-08', 987654321, 356);

-- --------------------------------------------------------

--
-- Table structure for table `register_c`
--

CREATE TABLE `register_c` (
  `userid` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `contact` int(20) NOT NULL,
  `ammount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_c`
--

INSERT INTO `register_c` (`userid`, `username`, `emailid`, `password`, `contact`, `ammount`) VALUES
(1, 'swathi', 'swathinair13@gmail.com', 'swathi', 976543216, 10000),
(2, 'ruchi', 'ruchirathod25@gmail.com', '12345', 2147483647, 10000),
(3, 'random', 'random@gmail.com', '4356', 976543216, 10000),
(5, 'sreyasnair25', 'sreyasnair25@gmail.com', '123456789', 2147483647, 10000),
(6, 'newuser', 'newuser@gmail.com', 'newuser', 20389473, 10000),
(7, 'yser45', 'user5@gmail.com', '000000', 76868, 9880),
(8, 'user4', 'user4@gmail.com', '000000', 889856789, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `register_f`
--

CREATE TABLE `register_f` (
  `userid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `account` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_f`
--

INSERT INTO `register_f` (`userid`, `name`, `emailid`, `password`, `contact`, `account`) VALUES
(1, 'swathi n', 'swathin@gmail.com', '1234', 876543, 0),
(2, 'user3', 'user3@gmail.com', 'user', 654321987, 0),
(3, 'newuser', 'new@gmaill.com', '000000', 909090909, 0),
(5, 'user2', 'user2@gmail.com', '0900909', 2147483647, 0),
(7, 'user5', 'user5@gmail.com', '000000', 2147483647, 0),
(8, 'user4', 'user4@gmail.com', '00000', 9090999, 120),
(9, 'USER9', 'user9@gmail.com', '000000', 6868768, 0);

-- --------------------------------------------------------

--
-- Table structure for table `upload_db`
--

CREATE TABLE `upload_db` (
  `product_id` int(11) NOT NULL,
  `uploaded_by` varchar(300) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `area` varchar(40) NOT NULL,
  `selling_price` int(40) NOT NULL,
  `quantity` int(40) NOT NULL,
  `image` varchar(300) NOT NULL,
  `sku` varchar(30) NOT NULL,
  `exist` tinyint(1) NOT NULL,
  `validity` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_db`
--

INSERT INTO `upload_db` (`product_id`, `uploaded_by`, `product_name`, `area`, `selling_price`, `quantity`, `image`, `sku`, `exist`, `validity`) VALUES
(2, 'user4@gmail.com', 'orange', 'nasik', 100, 2, 'orange.jpg', '23456', 1, '2017-04-19'),
(3, 'user4@gmail.com', 'banana', 'ewfaef', 50, 56, 'bitter gourd.png', '34534', 1, '2017-04-25'),
(5, 'user4@gmail.com', 'vbox6', 'fdzs', 30, 3, 'box10.jpg', '352345', 0, '0000-00-00'),
(6, 'user5@gmail.com', 'vbox6', 'pune', 200, 2, 'vbox6.jpg', '353552', 1, '2017-05-03'),
(7, 'user4@gmail.com', 'banana', 'wgreg', 54, 32, 'beetroot-pic.jpg', '46346', 0, '2017-05-10'),
(8, 'user4@gmail.com', 'banana', 'rwgvr', 64, 39, 'bananas.jpg', '4654654', 0, '2017-04-20'),
(15, 'user4@gmail.com', 'chikoo', 'borivali', 25, 289, 'chikoo.jpg', '4IUGH', 1, '2017-04-15'),
(9, 'user5@gmail.com', 'vbox', 'pune', 500, 1, 'vbox.jpeg', '523435', 1, '0000-00-00'),
(10, 'user4@gmail.com', 'banana', 'cfasc', 32, 100, 'bananas.jpg', '5436', 0, '2017-04-20'),
(11, 'user5@gmail.com', 'Chikoo', 'gurgoan', 90, 80, 'chikoo.jpg', '5643875', 1, '0000-00-00'),
(29, 'user4@gmail.com', 'watermelons', 'vasai', 75, 100, '', '878', 0, '0000-00-00'),
(12, 'user4@gmail.com', 'watermelons', 'vasaii', 75, 1, 'Watermelons.jpg', '878797', 0, '0000-00-00'),
(13, 'user4@gmail.com', 'vbox', 'aklfjvk', 888, 7, 'box8.jpeg', '8898766', 0, '0000-00-00'),
(25, 'user4@gmail.com', 'orange', 'nasik', 60, 2, '', '97454', 0, '0000-00-00'),
(1, 'user4@gmail.com', 'bananas', 'kandivali', 60, 1, 'bananas.jpg', '987', 0, '2017-04-20'),
(24, 'user4@gmail.com', 'cilantro', 'Malad', 45, 897, 'Cilantro.jpg', 'HGFDS', 1, '2017-04-27'),
(14, 'user4@gmail.com', 'chikoo', 'borivali', 100, 5000, 'chikoo.jpg', 'IUYB', 0, '0000-00-00'),
(19, 'user4@gmail.com', 'chives', 'borivali', 60, 3021, 'chives.jpg', 'LJHOH9', 0, '0000-00-00'),
(21, 'user4@gmail.com', 'cherries', 'borivali', 95, 600, 'cherries.jpg', 'OIUH98', 1, '2017-04-26'),
(20, 'user4@gmail.com', 'cabage', 'borivali', 30, 984, 'cabage.jpg', 'OPIUN', 0, '0000-00-00'),
(16, 'user4@gmail.com', 'chikoo', 'borivali', 25, 300, 'chikoo.jpg', 'UYTB', 1, '2017-05-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `cart_id` (`cart_id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `contact_id` (`contact_id`);

--
-- Indexes for table `customer_history`
--
ALTER TABLE `customer_history`
  ADD UNIQUE KEY `customer_history_id` (`customer_history_id`);

--
-- Indexes for table `farmer_history`
--
ALTER TABLE `farmer_history`
  ADD UNIQUE KEY `farmer_history_id` (`farmer_history_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD UNIQUE KEY `payment_id` (`payment_id`);

--
-- Indexes for table `register_c`
--
ALTER TABLE `register_c`
  ADD UNIQUE KEY `userid` (`userid`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- Indexes for table `register_f`
--
ALTER TABLE `register_f`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `upload_db`
--
ALTER TABLE `upload_db`
  ADD UNIQUE KEY `sku` (`sku`),
  ADD UNIQUE KEY `id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `customer_history`
--
ALTER TABLE `customer_history`
  MODIFY `customer_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `farmer_history`
--
ALTER TABLE `farmer_history`
  MODIFY `farmer_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `register_c`
--
ALTER TABLE `register_c`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `register_f`
--
ALTER TABLE `register_f`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `upload_db`
--
ALTER TABLE `upload_db`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
