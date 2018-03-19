-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2016 at 05:54 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecomerce_batch_14`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email_address` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `access_label` tinyint(1) NOT NULL COMMENT 'access level=1 super admin access level=2 only admin access level=3 manager'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email_address`, `admin_password`, `access_label`) VALUES
(1, 'Monir Ahmed', 'monir.ahmed48@hotmail.com', '3d2172418ce305c7d16d4b05597c6a59', 1),
(2, 'Jannatun Nayeem', 'jannat.nayeem050@hotmail.com', 'c5fe25896e49ddfe996db7508cf00534', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(5) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_description`, `publication_status`) VALUES
(6, 'Food', '++++++++++++++++++++', 1),
(7, 'Home & Cleaning', '+++++++++++++++++', 1),
(8, 'Office Products', '++++++++++++++++', 1),
(9, 'Beauty & Health', '-----------------------------', 1),
(10, 'Gadgets', '++++++++++++++++++', 1),
(11, 'Watch', '+++++++++++++++++++++', 1),
(12, 'Jwellery', '++++++++++++++++++++', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` int(5) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `mobile_number` varchar(14) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip_code` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `email_address`, `password`, `mobile_number`, `address`, `city`, `country`, `zip_code`) VALUES
(2, 'Monir Ahmed', 'monir.ahmed48@hotmail.com', '3d2172418ce305c7d16d4b05597c6a59', '01677611008', 'Dhaka', 'Dhaka', 'BD', 1214),
(3, 'Jannatun Nayeem', 'jannat.nayeem050@hotmail.com', 'c5fe25896e49ddfe996db7508cf00534', '01677611008', 'Dhaka', 'Dhaka', 'BD', 1212),
(4, 'Alamin Mia', 'alamin@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '01677644552', 'Dhaka', 'Dhaka', 'BD', 1209),
(5, 'Jannat Kumu', 'jannat@gmail.com', 'c5fe25896e49ddfe996db7508cf00534', '01677611008', 'Dhaka', 'Dhaka', 'BD', 1204),
(6, 'Sakhawat Sumit', 'sumit@gmail.com', '3d2172418ce305c7d16d4b05597c6a59', '01677899451', 'Dhaka', 'Dhaka', 'BD', 1205),
(7, 'Sadia Nawrin', 'nawrin@gmail.com', '3d2172418ce305c7d16d4b05597c6a59', '01677611554', 'Dhaka', 'Dhaka', 'BD', 1204),
(8, 'Meherin Mumu', 'mumu@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01677611008', 'Dhaka', 'Dhaka', 'BD', 1205);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE IF NOT EXISTS `tbl_manufacturer` (
  `manufacturer_id` int(5) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `manufacturer_description` varchar(100) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_description`, `publication_status`) VALUES
(6, 'PRAN', '+++++++++++++', 1),
(7, 'RFL', '++++++++++++++++++', 1),
(8, 'Ruchi', '+++++++++++++++++++++', 1),
(9, 'Others', '++++++++++++++++++++', 1),
(10, 'Square', '++++++++++++++++++++', 1),
(11, 'Unilever', '++++++++++++++++++++', 1),
(12, 'Marico Bangladesh Limited', '++++++++++++++++++++++', 1),
(13, 'Sunsilk', '++++++++++++++++++++', 1),
(14, 'Dove', '+++++++++++++++++++++', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` float(10,2) NOT NULL,
  `order_status` varchar(15) NOT NULL DEFAULT 'Pending',
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_comments` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `order_date`, `order_comments`) VALUES
(28, 2, 26, 28, 5697.50, 'Pending', '2016-01-27 03:10:18', ''),
(29, 2, 26, 29, 9051.50, 'Pending', '2016-01-27 04:30:05', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE IF NOT EXISTS `tbl_order_details` (
  `order_details_id` int(13) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(5) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_sales_quantity` int(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`) VALUES
(1, 28, 30, 'Printer', 5000.00, 1),
(2, 28, 22, 'Fragranced Air', 200.00, 1),
(3, 28, 25, 'Watch1', 100.00, 1),
(4, 29, 26, 'Raw Chicken Meat', 350.00, 10),
(5, 29, 20, 'Shrimp', 200.00, 20),
(6, 29, 27, 'Fresh Fish', 230.00, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `payment_type` varchar(15) NOT NULL,
  `payment_status` varchar(15) NOT NULL DEFAULT 'Pendind',
  `payment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_type`, `payment_status`, `payment_date`) VALUES
(1, 'cash_on_deliver', 'Pendind', '2016-01-23 10:02:32'),
(2, 'cash_on_deliver', 'Pendind', '2016-01-23 10:07:33'),
(3, 'cash_on_deliver', 'Pendind', '2016-01-23 14:09:46'),
(4, 'cash_on_deliver', 'Pendind', '2016-01-23 14:15:03'),
(5, 'cash_on_deliver', 'Pendind', '2016-01-23 14:18:49'),
(6, 'cash_on_deliver', 'Pendind', '2016-01-23 20:13:14'),
(7, 'cash_on_deliver', 'Pendind', '2016-01-26 06:26:26'),
(8, 'cash_on_deliver', 'Pendind', '2016-01-26 07:40:36'),
(9, 'cash_on_deliver', 'Pendind', '2016-01-26 08:42:32'),
(10, 'cash_on_deliver', 'Pendind', '2016-01-26 16:44:10'),
(11, 'cash_on_deliver', 'Pendind', '2016-01-26 16:44:10'),
(12, 'cash_on_deliver', 'Pendind', '2016-01-26 16:47:22'),
(13, 'cash_on_deliver', 'Pendind', '2016-01-26 16:48:18'),
(14, 'cash_on_deliver', 'Pendind', '2016-01-26 16:48:42'),
(15, 'cash_on_deliver', 'Pendind', '2016-01-26 16:50:05'),
(16, 'cash_on_deliver', 'Pendind', '2016-01-26 16:50:09'),
(17, 'cash_on_deliver', 'Pendind', '2016-01-26 16:50:45'),
(18, 'cash_on_deliver', 'Pendind', '2016-01-26 16:51:57'),
(19, 'cash_on_deliver', 'Pendind', '2016-01-26 16:52:16'),
(20, 'cash_on_deliver', 'Pendind', '2016-01-26 16:53:35'),
(21, 'cash_on_deliver', 'Pendind', '2016-01-26 16:54:18'),
(22, 'cash_on_deliver', 'Pendind', '2016-01-26 16:59:49'),
(23, 'cash_on_deliver', 'Pendind', '2016-01-26 17:00:04'),
(24, 'cash_on_deliver', 'Pendind', '2016-01-26 17:08:45'),
(25, 'cash_on_deliver', 'Pendind', '2016-01-26 17:08:45'),
(26, 'cash_on_deliver', 'Pendind', '2016-01-26 17:11:01'),
(27, 'cash_on_deliver', 'Pendind', '2016-01-26 17:13:55'),
(28, 'cash_on_deliver', 'Pendind', '2016-01-27 03:10:17'),
(29, 'cash_on_deliver', 'Pendind', '2016-01-27 04:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category_id` int(5) NOT NULL,
  `manufacturer_id` int(5) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_short_description` text NOT NULL,
  `product_long_description` text NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `publication_status` tinyint(1) NOT NULL,
  `product_status` tinyint(1) NOT NULL COMMENT 'product status=1 Featured Product publication status=2 Normal Product'
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `category_id`, `manufacturer_id`, `product_price`, `product_short_description`, `product_long_description`, `product_stock`, `product_image`, `publication_status`, `product_status`) VALUES
(17, 'Tea', 6, 6, 23, '+++++++++++++++++++++', '++++++++++++++++++++', 100, './product_image/tea.jpg', 1, 0),
(18, 'rice products', 6, 6, 20, '++++++++++++++++', '++++++++++++++++++++++++', 187, './product_image/dollarphotoclub_68274393.jpg', 1, 0),
(19, 'Meat', 6, 9, 300, '++++++++++++++++', '+++++++++++++++++++++++', 80, './product_image/meat.jpg', 1, 0),
(20, 'Shrimp', 6, 9, 200, '++++++++++++', '++++++++++++++++++', 81, './product_image/shrimp-flat.jpg', 1, 0),
(22, 'Fragranced Air', 7, 7, 200, '++++++++++++++++++++', '+++++++++++++++++++', 200, './product_image/fragranced-air-fresheners-2-5.jpg', 1, 0),
(23, 'Teghtmeyer Ace', 7, 10, 20, '+++++++++++++++', '++++++++++++++++++++++', 168, './product_image/cleaning1resize.jpg', 1, 0),
(25, 'Watch1', 11, 12, 100, '+++++++++++++', '+++++++++++++++++', 191, './product_image/clock.jpg', 1, 1),
(26, 'Raw Chicken Meat', 6, 9, 350, '+++++++++++++', '++++++++++++++++++++', 213, './product_image/21201853-Pieces-of-raw-chicken-meat-Stock-Photo-chicken.jpg', 1, 1),
(27, 'Fresh Fish', 6, 9, 230, '++++++++++++++', '+++++++++++++', 46, './product_image/fish1.jpg', 1, 1),
(28, 'Shampoo', 9, 14, 50, '++++++++++++++++', '++++++++++++++++++++', 250, './product_image/dove.jpg', 1, 1),
(29, 'Shampoo', 9, 13, 45, '+++++++++++++++++', '+++++++++++++++++++++++', 260, './product_image/sunsilk.jpg', 1, 0),
(30, 'Printer', 8, 12, 5000, '+++++++++++++++', '++++++++++++++++++++++', 595, './product_image/Canon_Pixma_Printer.jpg', 1, 0),
(31, 'Jwellery', 12, 9, 500, '++++++++++++++++', '++++++++++++++', 300, './product_image/jwellary.jpg', 1, 0),
(32, 'Hotdog', 6, 9, 25, '+++++++++++++++++++', '+++++++++++++++++++++++', 126, './product_image/hotdog.jpg', 1, 0),
(33, 'Air Freshner', 7, 12, 250, '+++++++++++++++++++', '+++++++++++++++++++++++++', 1191, './product_image/air_freshner1.jpg', 1, 0),
(34, 'Soap', 9, 14, 25, '++++++++++++++++++', '<div>+++++++++++++++++++++++++</div>', 1498, './product_image/dove_soap.jpg', 1, 1),
(35, 'Water', 6, 6, 15, '++++++++++++++', '++++++++++++++++++++', 197, './product_image/water1.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE IF NOT EXISTS `tbl_shipping` (
  `shipping_id` int(5) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `mobile_number` varchar(14) NOT NULL,
  `address` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip_code` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `customer_name`, `email_address`, `mobile_number`, `address`, `city`, `country`, `zip_code`) VALUES
(13, 'Meherin Mumu', 'mumu@gmail.com', '01677611008', 'Dhaka', 'Dhaka', 'BD', '1205'),
(14, 'Monir Ahmed', 'monir.ahmed48@hotmail.com', '01677611008', 'Dhaka', 'Dhaka', 'BD', '1214'),
(15, 'Sakhawat Sumit', 'sumit@gmail.com', '01677611008', 'Dhaka', 'Dhaka', 'BD', '1219'),
(16, 'Jannat Kumu', 'jannat.nayeem0050@hotmail.com', '01677611008', 'Dhaka', 'Dhaka', 'BD', '1214'),
(17, 'Monir Ahmed', 'monir.ahmed48@hotmail.com', '01677611008', 'Dhaka', 'Dhaka', 'BD', '1204'),
(18, 'Monir Ahmed', 'monir.ahmed48@hotmail.com', '01677611008', 'Dhaka', 'Dhaka', 'BD', '1204'),
(19, 'Jannat Kumu', 'jannat.nayeem050@hotmail.com', '01677611008', 'Dhaka', 'Dhaka', 'BD', '1219'),
(20, 'Monir Ahmed', 'monir@gmail.com', '01677611008', 'Dhaka', 'Dhaka', 'BD', '1219'),
(21, 'Jannat Kumu', 'jannat.nayeem050@hotmail.com', '01677611008', 'Dhaka', 'Dhaka', 'BD', '1219'),
(22, 'Monir Ahmed', 'monir@gmail.com', '01677611008', 'Dhaka', 'Dhaka', 'BD', '1214'),
(23, 'Monir Ahmed', 'monir@gmail.com', '01677611008', 'Nilphamari', 'Nilphamari', 'BD', '1214'),
(24, 'Jannat Kumu', 'jannat@gmail.com', '01677611008', 'Dhaka', 'Dhaka', 'BD', '1299'),
(25, 'Monir Ahmed', 'monir.ahmed48@hotmail.com', '01677611008', 'Nilphamari', 'Nilphamari', 'BD', '1219'),
(26, 'Sakhawat Sumit', 'sumit@gmail.com', '01677611008', 'Nilphamari', 'Nilphamari', 'BD', '1219');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wish_list`
--

CREATE TABLE IF NOT EXISTS `tbl_wish_list` (
  `wish_list_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_wish_list`
--

INSERT INTO `tbl_wish_list` (`wish_list_id`, `product_id`, `customer_id`) VALUES
(13, 25, 2),
(14, 32, 2),
(15, 31, 2),
(16, 25, 3),
(17, 34, 3),
(18, 28, 3),
(19, 22, 3),
(23, 20, 3),
(24, 30, 3),
(25, 31, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_wish_list`
--
ALTER TABLE `tbl_wish_list`
  ADD PRIMARY KEY (`wish_list_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `manufacturer_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(13) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_wish_list`
--
ALTER TABLE `tbl_wish_list`
  MODIFY `wish_list_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
