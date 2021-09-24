-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 24, 2021 at 11:02 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `textile_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

DROP TABLE IF EXISTS `customer_details`;
CREATE TABLE IF NOT EXISTS `customer_details` (
  `sign_up_id` int(11) NOT NULL,
  `phone_num` int(12) NOT NULL,
  `country` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `address_line_1` varchar(100) NOT NULL,
  `address_line_2` varchar(100) NOT NULL,
  `postel_code` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`sign_up_id`, `phone_num`, `country`, `state`, `address_line_1`, `address_line_2`, `postel_code`) VALUES
(1, 123456789, 'sri lanka', 'provice', '129/a road', 'dehiwala', 1222),
(2, 111456789, 'sri lanka', 'colombo', '139/a road', 'mathale', 1322);

-- --------------------------------------------------------

--
-- Table structure for table `item_details`
--

DROP TABLE IF EXISTS `item_details`;
CREATE TABLE IF NOT EXISTS `item_details` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` varchar(100) DEFAULT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `qty` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_details`
--

INSERT INTO `item_details` (`item_id`, `name`, `category`, `description`, `price`, `img1`, `img2`, `img3`, `qty`) VALUES
(1, 'EDGE MENS CASUAL STRIPED T-SHIRT', 'Men Top Wear', 'Add a splash of color to your street-ready look with this vibrant stripe style. Made in a lightweight-and-breathable blended cotton it features an wide pin stripe pattern along with a two button placket and contrasting ribbed collar.', 'a:1:{i:0;a:3:{s:7:\"s\";s:7:\"1200.00\";s:7:\"m\";s:7:\"1500.00\";s:7:\"l\";s:7:\"1700.00\";}}', './Image/ProductImages/1/1.1.webp', './Image/ProductImages/1/1.2.webp', './Image/ProductImages/1/1.3.webp', 'a:1:{i:0;a:3:{s:5:\"s\";s:3:\"200\";s:5:\"m\";s:3:\"100\";s:5:\"l\";s:2:\"50\";}}'),
(2, 'JOBBS SELECT MENS PRINTED CASUAL SHIRT', 'Men Top Wear', 'Keep it cool and breezy but super stylish with this 100% cotton rich blend short sleeve shirt. Made with lightweight textured fabric in short sleeves and finished off with invincible front buttons fastening, this printed shirt will keep you cool and take you from day to evening. Pair with chino shorts and flip flops for a lunchtime look or style up with a lightweight trouser and espadrille for a relaxed evening outfit. Available in many prints and colors.', 'a:1:{i:0;a:3:{s:7:\"s\";s:7:\"1000.00\";s:7:\"m\";s:4:\"1200\";s:7:\"l\";s:4:\"1350\";}}', './Image/ProductImages/1/2.1.webp', './Image/ProductImages/1/2.2.webp', './Image/ProductImages/1/2.3.webp', 'a:1:{i:0;a:3:{s:5:\"s\";s:3:\"200\";s:5:\"m\";s:3:\"100\";s:5:\"l\";s:2:\"50\";}}'),
(4, 'AMANI VINTAGE DITSY FLORAL PEPLUM TOP', 'Women BLOUSES & SHIRTS', 'This peplum floral top will be an essential for your summer wardrobe. V neck front, midi length balloon sleeves, smocked empire waistline and peplum finish will complete your casual summer outfit.', 'a:1:{i:0;a:3:{s:7:\"s_price\";s:7:\"1100.00\";s:7:\"m_price\";s:4:\"1400\";s:7:\"l_price\";s:4:\"1550\";}}', './Image/ProductImages/2/2.1.webp', './Image/ProductImages/2/2.2.webp', './Image/ProductImages/2/2.3.webp', 'a:1:{i:0;a:3:{s:5:\"s_qty\";s:3:\"100\";s:5:\"m_qty\";s:3:\"100\";s:5:\"l_qty\";s:2:\"50\";}}'),
(3, 'GIVO VINTAGE FLORAL TOP', 'Women BLOUSES & SHIRTS', 'Perfect for wearing all day long from smart to casual, this vintage floral blouse is a versatile choice. Enhanced by a sweet ditsy print, a retro inspired neckline with front button fastening along with balloon sleeves, it’s designed in a relaxed shape that sits on the lower waist.', 'a:1:{i:0;a:3:{s:7:\"s_price\";s:7:\"1000.00\";s:7:\"m_price\";s:4:\"1200\";s:7:\"l_price\";s:4:\"1350\";}}', './Image/ProductImages/2/2.1.webp', './Image/ProductImages/2/2.2.webp', './Image/ProductImages/2/2.3.webp', 'a:1:{i:0;a:3:{s:5:\"s_qty\";s:3:\"200\";s:5:\"m_qty\";s:3:\"100\";s:5:\"l_qty\";s:2:\"50\";}}');

-- --------------------------------------------------------

--
-- Table structure for table `order_customer`
--

DROP TABLE IF EXISTS `order_customer`;
CREATE TABLE IF NOT EXISTS `order_customer` (
  `sign_up_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_num` int(12) NOT NULL,
  `country` int(12) NOT NULL,
  `state` varchar(12) NOT NULL,
  `address_line_1` varchar(100) NOT NULL,
  `address_line_2` varchar(100) NOT NULL,
  `postel_code` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_customer_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `size` varchar(5) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `state` varchar(25) NOT NULL DEFAULT 'incomplete',
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `order_customer_id`, `item_id`, `qty`, `size`, `time`, `state`) VALUES
(1, 1, 3, 4, 's', '2021-09-24 00:38:55.479899', 'incomplete'),
(2, 1, 4, 4, 's', '2021-09-24 00:40:26.341802', 'incomplete');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

DROP TABLE IF EXISTS `sign_up`;
CREATE TABLE IF NOT EXISTS `sign_up` (
  `sign_up_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `date_and_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`sign_up_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`sign_up_id`, `first_name`, `last_name`, `email`, `password`, `date_and_time`) VALUES
(1, 'kamal', 'perera', 'kamal@gmail.com', NULL, '2021-09-23 23:52:14.932584'),
(2, 'amal', 'perera', 'amal@gamil.com', NULL, '2021-09-23 23:53:23.881713');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
