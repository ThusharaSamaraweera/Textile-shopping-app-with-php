-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 28, 2021 at 04:26 PM
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
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(1) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `email`, `password`, `user_type`, `time`) VALUES
(1, 'Rasalingam', 'Ragul', 'r.ragul0598@gmail.com', '$2y$10$wEjjpAmouYh9KBBA/xOR7eHI4aYK14h4bZvcUQH8TBiy.pg1I9SCC', 'c', '2021-09-24 21:39:43.390555'),
(7, 'Thushara', 'Samaraweera', 'thusharadasun204@gmail.com', '$2y$10$fdjkA//R62r1CI/S6BtVO.UJimYJlkttApYfkWDf6ccqlnUa7A8vW', 'c', '2021-09-24 21:39:43.390555');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

DROP TABLE IF EXISTS `customer_details`;
CREATE TABLE IF NOT EXISTS `customer_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sign_up_id` int(11) NOT NULL,
  `phone_num` int(12) NOT NULL,
  `country` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `address_line_1` varchar(250) NOT NULL,
  `address_line_2` varchar(250) NOT NULL,
  `postel_code` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `sign_up_id`, `phone_num`, `country`, `state`, `address_line_1`, `address_line_2`, `postel_code`) VALUES
(1, 1, 123456789, 'LK', 'south', '129/a road', 'dehiwala', 1222),
(2, 7, 111456789, 'IN', 'western', '139/a road', 'mathale', 1322);

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
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_details`
--

INSERT INTO `item_details` (`item_id`, `name`, `category`, `description`, `price`, `img1`, `img2`, `img3`, `qty`) VALUES
(62, 'BIGG BOSS MENS LINEN TROUSER', 'CASUAL TROUSERS', 'Add something comfortable and relaxed to your collection of smart and casual trousers. Featuring a single loop wait belt, double side pockets and cut in a regular fit. Wear yours smart or casual with a novelty printed shirt and loafers.', 'a:1:{i:0;a:3:{s:1:\"s\";s:7:\"1200.00\";s:1:\"m\";s:7:\"1500.00\";s:1:\"l\";s:7:\"1700.00\";}}', './images/Products/Men/CASUAL_TROUSERS/3/3.1.webp', './images/Products/Men/CASUAL_TROUSERS/2/2.2.webp', './images/Products/Men/CASUAL_TROUSERS/3/3.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(60, 'BIGG BOSS MENS LINEN TROUSER', 'CASUAL TROUSERS', 'Add something comfortable and relaxed to your collection of smart and casual trousers. Featuring a single loop wait belt, double side pockets and cut in a regular fit. Wear yours smart or casual with a novelty printed shirt and loafers.', NULL, './images/Products/Men/CASUAL_TROUSERS/1/1.1.webp', './images/Products/Men/CASUAL_TROUSERS/1/1.2.webp', './images/Products/Men/CASUAL_TROUSERS/1/1.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(61, 'BIGG BOSS MENS LINEN TROUSER', 'CASUAL TROUSERS', 'Add something comfortable and relaxed to your collection of smart and casual trousers. Featuring a single loop wait belt, double side pockets and cut in a regular fit. Wear yours smart or casual with a novelty printed shirt and loafers.', NULL, './images/Products/Men/CASUAL_TROUSERS/2/2.1.webp', './images/Products/Men/CASUAL_TROUSERS/2/2.2.webp', './images/Products/Men/CASUAL_TROUSERS/2/2.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(59, 'EMERALD MENS FORMAL SHIRT', 'FORMAL SHIRTS', 'Update your formal-wear with this smart shirt from Emerald. Made with lightweight and breathable fabric in an easy-to-wear finish. Its all over classic check pattern is a must have in all colour variations.', NULL, './images/Products/Men/FORMAL_SHIRTS/7/7.1.webp', './images/Products/Men/FORMAL_SHIRTS/7/7.2.webp', './images/Products/Men/FORMAL_SHIRTS/7/7.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(57, 'VANTAGE UBER MENS FORMAL SHIRT', 'FORMAL SHIRTS', 'This versatile shirt from Vantage Uber is made with an comfortable 100% cotton stripe fabric. and finished with quality fine finishing. complement it with a matching tie.', NULL, './images/Products/Men/FORMAL_SHIRTS/5/5.1.webp', './images/Products/Men/FORMAL_SHIRTS/5/5.2.webp', './images/Products/Men/FORMAL_SHIRTS/5/5.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(58, 'VANTAGE UBER MENS FORMAL SHIRT', 'FORMAL SHIRTS', 'This versatile shirt from Vantage Uber is made with an comfortable 100% cotton stripe fabric. and finished with quality fine finishing. complement it with a matching tie.', NULL, './images/Products/Men/FORMAL_SHIRTS/6/6.1.webp', './images/Products/Men/FORMAL_SHIRTS/6/6.2.webp', './images/Products/Men/FORMAL_SHIRTS/6/6.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(55, 'VANTAGE BLUE MENS FORMAL SHIRT', 'FORMAL SHIRTS', 'Lightweight and breathable, our easy-to-wear Vantage blue formal shirts are made from 100% cotton for all-day comfort. its designed in an all over checked print and clean finish.', NULL, './images/Products/Men/FORMAL_SHIRTS/3/3.1.webp', './images/Products/Men/FORMAL_SHIRTS/2/2.2.webp', './images/Products/Men/FORMAL_SHIRTS/3/3.3.webp', NULL),
(56, 'VANTAGE BLUE MENS FORMAL SHIRT', 'FORMAL SHIRTS', 'Lightweight and breathable, our easy-to-wear Vantage blue formal shirts are made from 100% cotton for all-day comfort. its designed in an all over checked print and clean finish', NULL, './images/Products/Men/FORMAL_SHIRTS/4/4.1.webp', './images/Products/Men/FORMAL_SHIRTS/4/4.2.webp', './images/Products/Men/FORMAL_SHIRTS/4/4.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(54, 'VANTAGE UBER MENS FORMAL SHIRT', 'FORMAL SHIRTS', 'This versatile shirt from Vantage Uber is made with an comfortable 100% cotton stripe fabric. and finished with quality fine finishing. complement it with a matching tie.', NULL, './images/Products/Men/FORMAL_SHIRTS/2/2.1.webp', './images/Products/Men/FORMAL_SHIRTS/2/2.2.webp', './images/Products/Men/FORMAL_SHIRTS/2/2.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(53, 'VANTAGE BLUE MENS FORMAL SHIRT', 'FORMAL SHIRTS', 'This micro check 100% cotton shirts from Vantage blue is excellent value for money. The easy-to-wear fabric is the ultimate comfort you’re looking for, it is an ideal addition to your workwear.', NULL, './images/Products/Men/FORMAL_SHIRTS/1/1.1.webp', './images/Products/Men/FORMAL_SHIRTS/1/1.2.webp', './images/Products/Men/FORMAL_SHIRTS/1/1.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(52, 'JOBBS LINEN CASUAL SHIRT', 'CASUAL SHIRTS', 'Made in luxurious soft linen for the ultimate comfort and regular wear. it features a regular short sleeve design with contrasting tipping and basic shirt collar. Ideal for any day to dress anyway.', 'a:1:{i:0;a:3:{s:1:\"s\";s:7:\"1200.00\";s:1:\"m\";s:7:\"1500.00\";s:1:\"l\";s:7:\"1700.00\";}}', './images/Products/Men/CASUAL_SHIRTS/7/7.1.webp', './images/Products/Men/CASUAL_SHIRTS/7/7.2.webp', './images/Products/Men/CASUAL_SHIRTS/7/7.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(51, 'BIGG BOSS MENS CASUAL LINEN SHIRT', 'CASUAL SHIRTS', 'Made from lightweight and breathable 100% linen, the airy fabric is perfect for warmer weather days. A versatile style designed with a basic shirt collar, full front button fastening and short sleeves. Make it a relaxed style with matching casual jeans. Available in a range of colors to choose from .', 'a:1:{i:0;a:3:{s:1:\"s\";s:7:\"1200.00\";s:1:\"m\";s:7:\"1500.00\";s:1:\"l\";s:7:\"1700.00\";}}', './images/Products/Men/CASUAL_SHIRTS/6/6.1.webp', './images/Products/Men/CASUAL_SHIRTS/6/6.2.webp', './images/Products/Men/CASUAL_SHIRTS/6/6.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(50, 'JOBBS SELECT MENS PRINTED CASUAL SHIRT', 'CASUAL SHIRTS', 'Keep it cool and breezy but super stylish with this 100% cotton rich blend short sleeve shirt. Made with lightweight textured fabric in short sleeves and finished off with invincible front buttons fastening, this printed shirt will keep you cool and take you from day to evening. Pair with chino shorts and flip flops for a lunchtime look or style up with a lightweight trouser and espadrille for a relaxed evening outfit. Available in many prints and colors.', 'a:1:{i:0;a:3:{s:1:\"s\";s:7:\"1200.00\";s:1:\"m\";s:7:\"1500.00\";s:1:\"l\";s:7:\"1700.00\";}}', './images/Products/Men/CASUAL_SHIRTS/5/5.1.webp', './images/Products/Men/CASUAL_SHIRTS/5/5.2.webp', './images/Products/Men/CASUAL_SHIRTS/5/5.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(49, 'JOBBS SELECT MENS PRINTED CASUAL SHIRT', 'CASUAL SHIRTS', 'Keep it cool and breezy but super stylish with this 100% cotton rich blend short sleeve shirt. Made with lightweight textured fabric in short sleeves and finished off with invincible front buttons fastening, this printed shirt will keep you cool and take you from day to evening. Pair with chino shorts and flip flops for a lunchtime look or style up with a lightweight trouser and espadrille for a relaxed evening outfit. Available in many prints and colors.', 'a:1:{i:0;a:3:{s:1:\"s\";s:7:\"1200.00\";s:1:\"m\";s:7:\"1500.00\";s:1:\"l\";s:7:\"1700.00\";}}', './images/Products/Men/CASUAL_SHIRTS/4/4.1.webp', './images/Products/Men/CASUAL_SHIRTS/4/4.2.webp', './images/Products/Men/CASUAL_SHIRTS/4/4.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(48, 'JOBBS SELECT MENS PRINTED CASUAL SHIRT', 'CASUAL SHIRTS', 'Keep it cool and breezy but super stylish with this 100% cotton rich blend short sleeve shirt. Made with lightweight textured fabric in short sleeves and finished off with invincible front buttons fastening, this printed shirt will keep you cool and take you from day to evening. Pair with chino shorts and flip flops for a lunchtime look or style up with a lightweight trouser and espadrille for a relaxed evening outfit. Available in many prints and colors.', 'a:1:{i:0;a:3:{s:1:\"s\";s:7:\"1200.00\";s:1:\"m\";s:7:\"1500.00\";s:1:\"l\";s:7:\"1700.00\";}}', './images/Products/Men/CASUAL_SHIRTS/3/3.1.webp', './images/Products/Men/CASUAL_SHIRTS/3/3.2.webp', './images/Products/Men/CASUAL_SHIRTS/3/3.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(47, 'JOBBS SELECT MENS PRINTED CASUAL SHIRT', 'CASUAL SHIRTS', 'Keep it cool and breezy but super stylish with this 100% cotton rich blend short sleeve shirt. Made with lightweight textured fabric in short sleeves and finished off with invincible front buttons fastening, this printed shirt will keep you cool and take you from day to evening. Pair with chino shorts and flip flops for a lunchtime look or style up with a lightweight trouser and espadrille for a relaxed evening outfit. Available in many prints and colors.', 'a:1:{i:0;a:3:{s:1:\"s\";s:7:\"1200.00\";s:1:\"m\";s:7:\"1500.00\";s:1:\"l\";s:7:\"1700.00\";}}', './images/Products/Men/CASUAL_SHIRTS/2/2.1.webp', './images/Products/Men/CASUAL_SHIRTS/2/2.2.webp', './images/Products/Men/CASUAL_SHIRTS/2/2.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(46, 'JOBBS SELECT MENS PRINTED CASUAL SHIRT', 'CASUAL SHIRTS', 'Keep it cool and breezy but super stylish with this 100% cotton rich blend short sleeve shirt. Made with lightweight textured fabric in short sleeves and finished off with invincible front buttons fastening, this printed shirt will keep you cool and take you from day to evening. Pair with chino shorts and flip flops for a lunchtime look or style up with a lightweight trouser and espadrille for a relaxed evening outfit. Available in many prints and colors.', 'a:1:{i:0;a:3:{s:1:\"s\";s:7:\"1200.00\";s:1:\"m\";s:7:\"1500.00\";s:1:\"l\";s:7:\"1700.00\";}}', './images/Products/Men/CASUAL_SHIRTS/1/1.1.webp', './images/Products/Men/CASUAL_SHIRTS/1/1.2.webp', './images/Products/Men/CASUAL_SHIRTS/1/1.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(79, 'MENS SLIM FIT JEANS', 'JEANS', 'Mens smart casual Slim fit stretch jeans with light shaded effect .', NULL, './images/Products/Men/JEANS/2/2.1.webp', './images/Products/Men/JEANS/2/2.2.webp', './images/Products/Men/JEANS/2/2.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(78, 'BIGG BOSS MENS SLIM FIT STRETCH JEANS', 'JEANS', 'Whether you’re working from home or heading our to breath some fresh air these jeans are sure to be your go-to s.', NULL, './images/Products/Men/JEANS/1/1.1.webp', './images/Products/Men/JEANS/1/1.2.webp', './images/Products/Men/JEANS/1.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(77, 'MENS TWILL SHORT', 'SHORT', 'Shorts are inherently casual, but this slim-leg silhouette in cotton-twill makes you feel even more laid-back.', NULL, './images/Products/Men/SHORT/7/7.1.webp', './images/Products/Men/SHORT/7/7.2.webp', './images/Products/Men/SHORT/7/7.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(76, 'MENS TWILL SHORT', 'SHORT', 'Shorts are inherently casual, but this slim-leg silhouette in cotton-twill makes you feel even more laid-back.', NULL, './images/Products/Men/SHORT/6/6.1.webp', './images/Products/Men/SHORT/6/6.2.webp', './images/Products/Men/SHORT/6/6.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(75, 'MENS TWILL SHORT', 'SHORT', 'Shorts are inherently casual, but this slim-leg silhouette in cotton-twill makes you feel even more laid-back.', NULL, './images/Products/Men/SHORT/5/5.1.webp', './images/Products/Men/SHORT/5/5.2.webp', './images/Products/Men/SHORT/5/5.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(74, 'MENS BELOW THE KNEE JOGGER SHORT', 'SHORT', 'These drawstring jogger below-the-knee shorts feature a ribbed waistband and ribbed cuffs. For functionality, they also have side pockets and for styling detail a contrast panel at the sides. Rock this with a t-shirt and black hoodie for a hipster look or a hip hop dancer look. Super comfortable cotton fleece is easy to move in.', NULL, './images/Products/Men/SHORT/4/4.1.webp', './images/Products/Men/SHORT/4/4.2.webp', './images/Products/Men/SHORT/4/4.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(73, 'JOBBS MENS SHORT', 'SHORT', 'Stock up for everyday essentials with these stylish shorts in a classic . Made from a lightweight 100% cotton for ultimate comfort. Featuring two buttoned back pockets. Style yours with a polo and trainers, try tucking in your shirt for a modern look.', NULL, './images/Products/Men/SHORT/3/3.1.webp', './images/Products/Men/SHORT/2/2.2.webp', './images/Products/Men/SHORT/3/3.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(72, 'MENS SPORTS SHORT', 'SHORT', 'These sport shorts have an iconic colour block waistband with Jobbs banding at the knee. With their cotton fleece fabric and adjustable waistband, they’re both soft and functional, so you can give it your all at the gym or layback and relax all day.', NULL, './images/Products/Men/SHORT/2/2.1.webp', './images/Products/Men/SHORT/2/2.2.webp', './images/Products/Men/SHORT/2/2.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(71, 'MENS SPORTS SHORT', 'SHORT', 'These sport shorts have an iconic colour block waistband with Jobbs banding at the knee. With their cotton fleece fabric and adjustable waistband, they’re both soft and functional, so you can give it your all at the gym or layback and relax all day.', NULL, './images/Products/Men/SHORT/1/1.1.webp', './images/Products/Men/SHORT/1/1.2.webp', './images/Products/Men/SHORT/1.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(70, 'MENS TAPERED FIT FORMAL TROUSER', 'FORMAL TROUSERS', 'Mens Tapered fit formal Black trouser in blended cotton.', NULL, './images/Products/Men/FORMAL_TROUSERS/4/4.1.webp', './images/Products/Men/FORMAL_TROUSERS/4/4.2.webp', './images/Products/Men/FORMAL_TROUSERS/4/4.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(69, 'MENS TAPERED FIT FORMAL TROUSER', 'FORMAL TROUSERS', 'Mens Tapered fit formal Blue 2 tone trouser in blended cotton.', NULL, './images/Products/Men/FORMAL_TROUSERS/3/3.1.webp', './images/Products/Men/FORMAL_TROUSERS/2/2.2.webp', './images/Products/Men/FORMAL_TROUSERS/3/3.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(68, 'MENS TAPERED FIT FORMAL TROUSER', 'FORMAL TROUSERS', 'Mens Tapered fit formal Black 2 tone trouser in blended cotton.', NULL, './images/Products/Men/FORMAL_TROUSERS/2/2.1.webp', './images/Products/Men/FORMAL_TROUSERS/2/2.2.webp', './images/Products/Men/FORMAL_TROUSERS/2/2.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(67, 'MENS TAPERED FIT FORMAL TROUSER', 'FORMAL TROUSERS', 'Mens Tapered fit formal Ash 2 tone trouser in blended cotton.', NULL, './images/Products/Men/FORMAL_TROUSERS/1/1.1.webp', './images/Products/Men/FORMAL_TROUSERS/1/1.2.webp', './images/Products/Men/FORMAL_TROUSERS/1/1.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(66, 'MENS COTTON TROUSER', 'CASUAL TROUSERS', 'Men’s Slim fit casual chino pant.', NULL, './images/Products/Men/CASUAL_TROUSERS/7/7.1.webp', './images/Products/Men/CASUAL_TROUSERS/7/7.2.webp', './images/Products/Men/CASUAL_TROUSERS/7/7.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(65, 'MENS COTTON TROUSER', 'CASUAL TROUSERS', 'Men’s Slim fit casual chino pant.', NULL, './images/Products/Men/CASUAL_TROUSERS/6/6.1.webp', './images/Products/Men/CASUAL_TROUSERS/6/6.2.webp', './images/Products/Men/CASUAL_TROUSERS/6/6.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(64, 'MENS COTTON TROUSER', 'CASUAL TROUSERS', 'Men’s Slim fit casual chino pant.', NULL, './images/Products/Men/CASUAL_TROUSERS/5/5.1.webp', './images/Products/Men/CASUAL_TROUSERS/5/5.2.webp', './images/Products/Men/CASUAL_TROUSERS/5/5.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(63, 'MENS COTTON TROUSER', 'CASUAL TROUSERS', 'Men’s Slim fit casual chino pant.', NULL, './images/Products/Men/CASUAL_TROUSERS/4/4.1.webp', './images/Products/Men/CASUAL_TROUSERS/4/4.2.webp', './images/Products/Men/CASUAL_TROUSERS/4/4.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(80, 'MENS DENIM', 'JEANS', 'Mens smart casual Slim fit stretch jeans.', NULL, './images/Products/Men/JEANS/3/3.1.webp', './images/Products/Men/JEANS/2/2.2.webp', './images/Products/Men/JEANS/3/3.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(81, 'MENS DENIM', 'JEANS', 'Mens smart casual Slim fit stretch jeans.', NULL, './images/Products/Men/JEANS/4/4.1.webp', './images/Products/Men/JEANS/4/4.2.webp', './images/Products/Men/JEANS/4/4.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(82, 'MENS DENIM', 'JEANS', 'Mens smart casual Slim fit stretch jeans.', NULL, './images/Products/Men/JEANS/5/5.1.webp', './images/Products/Men/JEANS/5/5.2.webp', './images/Products/Men/JEANS/5/5.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(83, 'BIGG BOSS MENS SLIM FIT STRETCH JEANS', 'JEANS', 'Whether you’re working from home or heading our to breath some fresh air these jeans are sure to be your go-to s.', NULL, './images/Products/Men/JEANS/6/6.1.webp', './images/Products/Men/JEANS/6/6.2.webp', './images/Products/Men/JEANS/6/6.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}'),
(84, 'BIGG BOSS MENS SLIM FIT STRETCH JEANS', 'JEANS', 'Whether you’re working from home or heading our to breath some fresh air these jeans are sure to be your go-to s.', NULL, './images/Products/Men/JEANS/7/7.1.webp', './images/Products/Men/JEANS/7/7.2.webp', './images/Products/Men/JEANS/7/7.3.webp', 'a:1:{i:0;a:3:{s:1:\"s\";s:3:\"200\";s:1:\"m\";s:3:\"100\";s:1:\"l\";s:2:\"50\";}}');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
