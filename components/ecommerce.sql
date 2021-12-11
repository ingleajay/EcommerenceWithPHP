-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2019 at 07:29 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) NOT NULL,
  `brand_title` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Puma'),
(2, 'Nike'),
(3, 'Sonata'),
(4, 'Lotto'),
(5, 'Bata'),
(6, 'Sparx');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `Email`) VALUES
(1, 0, 2, 'naikusharvi33@gmail.com'),
(15, 0, 2, 'ingleajay987@gmail.com'),
(19, 0, 1, 'ankurrathi1398@gmail.com'),
(23, 0, 1, 'ankurrathi1398@gmail.com'),
(24, 0, 3, 'ingleajay987@gmail.com'),
(25, 0, 2, 'ingleajay987@gmail.com'),
(26, 0, 1, 'naikusharvi33@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(20) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'men'),
(2, 'women'),
(3, 'kids'),
(4, 'boys');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keyword` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `cat_id`, `brand_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keyword`, `status`) VALUES
(1, 1, 5, '2019-10-04 07:10:27', 'BATA Men\'s Drool Formal Shoes\r\n', 'bata1.jpg', 'bata3.jpg', 'bata2.jpg', 900, '<p>ajay</p>', 'bata,men', 'on'),
(15, 1, 5, '2019-10-04 07:25:42', 'BATA Men\'s Tyrion Formal Shoes\r\n', 'bata3.jpg', 'bata3.jpg', 'bata3.jpg', 899, '<p>ajay</p>', 'bata,men', 'on'),
(16, 3, 5, '2019-10-04 07:21:53', 'Power Boy\'s Cooper Running Shoes\r\n', 'kbata1.jpg', 'kbata1.jpg', 'kbata1.jpg', 1000, '<p>aaa</p>', 'kids,bata', 'on'),
(17, 3, 5, '2019-10-04 07:32:30', 'Power Boy\'s Ryan Sports Shoes\r\n', 'kbata2_.jpg', 'kbata2_.jpg', 'kbata2_.jpg', 1232, '<p>nice</p>', 'kids,bata', 'on'),
(19, 4, 5, '2019-10-04 07:32:41', 'Power Boy\'s Ryan  Shoes\r\n', 'bata4.jpg', 'bata4.jpg', 'bata4.jpg', 10000, '<p>nice</p>', 'boys,bata', 'on'),
(22, 2, 5, '2019-10-04 07:11:36', 'BATA Women\'s Winter Daisy Sneakers\r\n', 'wbata11.jpg', 'wbata12.jpg', 'wbata11.jpg', 1212, '<p>ahata</p>', 'women,bata', 'on'),
(23, 2, 5, '2019-10-04 07:11:44', 'BATA Women\'s Slip ON Softy Sneakers\r\n', 'wbata1_.jpg', 'wbata1_.jpg', 'women1.jpg', 1200, '<p>nice shoes</p>', 'women,bata', 'on'),
(24, 1, 2, '2019-10-04 07:42:20', 'Nike Men\'s RUNALLDAY Running Shoes\r\n', 'nike1.jpg', 'nike1.jpg', 'nike.jpg', 600, '<P>nice</p>', 'nike,men', 'on'),
(25, 1, 2, '2019-10-04 07:42:28', 'Nike Men\'s Liteforce III Sneakers\r\n', 'nike2.jpg', 'nike2.jpg', 'nike2.jpg', 1000, '<p>nice</p>', 'nike,men', 'on'),
(26, 2, 2, '2019-10-04 07:53:28', 'Nike Women\'s  Blue Running Shoes \r\n', 'wnike1.jpg', 'wnike1.jpg', 'wnike1.jpg', 1009, '<p>nice</p>', 'nike,women', 'on'),
(27, 2, 2, '2019-10-04 07:51:41', 'Nike Women\'s WMNS  Running Shoes\r\n', 'wnike2.jpg', 'wnike2.jpg', 'wnike2.jpg', 1008, '<p>nice</p>', 'nike,women', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(10) NOT NULL,
  `Email` text NOT NULL,
  `mobileno` bigint(10) NOT NULL,
  `pass1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `Email`, `mobileno`, `pass1`) VALUES
(24, 'inglesonali987@gmail.com', 987654321, 'Ajay@987'),
(28, 'inglemanohar987@gmail.com', 987123456, '702ccc744fec44f7166a'),
(39, 'ankurrathi1398@gmail.com', 9876543210, 'Ankur@1'),
(40, 'ingleajay987@gmail.com', 8692803088, 'Lufa@7917'),
(41, 'soham123@gmail.com', 1231231231, ' a08ee45ef214dc905e5'),
(42, 'inglevijay987@gmail.com', 8169485573, 'Vijay987@'),
(43, 'ingleajay888@gmail.com', 8692803088, ' 8c3f604b15f614b960e'),
(44, 'inglemanoj123@gmail.com', 981211111, ' 4b2747fd29164de2d95'),
(45, 'sonali123@gmail.com', 8692803088, ' a08ee45ef214dc905e5'),
(47, 'akshay.deekonda@gmail.com', 8433675225, ' a38a52b7452fde454aa3062212576f5e '),
(48, 'nikhilmusale70@gmail.com', 8692803088, ' 102eb1ef188b1a24e1a3e2621298702a '),
(49, 'nikhilmusale70@gmail.com', 987654321, 'Nikhil@123'),
(50, 'naikusharvi33@gmail.com', 9820584603, 'Usharvi@1999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
