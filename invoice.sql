-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2016 at 01:37 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `invoice`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE IF NOT EXISTS `bills` (
  `bill_id` varchar(255) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `bill_reference` varchar(30) NOT NULL,
  `bill_date` date NOT NULL,
  `bill_due_date` date NOT NULL,
  `bill_total_amount` double(30,2) NOT NULL,
  `bill_due_amount` double(30,2) NOT NULL,
  `bill_to_paid` double(30,2) NOT NULL,
  `bill_allow_partial` int(3) NOT NULL DEFAULT '0',
  `bill_allow_discount` int(3) NOT NULL DEFAULT '0',
  `note_recipient` varchar(255) DEFAULT NULL,
  `term_condition` varchar(255) DEFAULT NULL,
  `bill_status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `user_email`, `bill_reference`, `bill_date`, `bill_due_date`, `bill_total_amount`, `bill_due_amount`, `bill_to_paid`, `bill_allow_partial`, `bill_allow_discount`, `note_recipient`, `term_condition`, `bill_status`) VALUES
('INV-10008', 'aman.rabby@gmail.com', '34rt', '2015-12-31', '2015-12-31', 7.00, 3.50, 3.50, 1, 1, '0', '0', '0'),
('INV-10009', 'aman.rabby@gmail.com', '34rt', '2015-12-31', '2015-12-31', 7.00, 3.50, 7.00, 0, 0, '0', '0', '1');

--
-- Triggers `bills`
--
DELIMITER //
CREATE TRIGGER `Invoice_generator` AFTER INSERT ON `bills`
 FOR EACH ROW BEGIN
 DECLARE prev_invoice_no INT;
 set prev_invoice_no =(SELECT invoice_no from invoice_gen); 
 update invoice_gen set invoice_no=prev_invoice_no+1;

END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `bill_service`
--

CREATE TABLE IF NOT EXISTS `bill_service` (
`id` int(10) NOT NULL,
  `bill_id` varchar(255) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `particulars` text NOT NULL,
  `additional_particulars` varchar(255) DEFAULT NULL,
  `services` varchar(30) NOT NULL,
  `bill_cycle` varchar(10) NOT NULL,
  `reg_date` date NOT NULL,
  `next_due` date NOT NULL,
  `quantity` double(30,2) NOT NULL DEFAULT '1.00',
  `price` double(30,2) NOT NULL,
  `total` double(30,2) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_service`
--

INSERT INTO `bill_service` (`id`, `bill_id`, `user_email`, `particulars`, `additional_particulars`, `services`, `bill_cycle`, `reg_date`, `next_due`, `quantity`, `price`, `total`, `status`) VALUES
(28, 'INV-10008', 'aman.rabby@gmail.com', 'dfgdfg', 'dsfsdfsdfsdf', 'Hosting', 'fixed', '2015-12-31', '0000-00-00', 1.00, 3.00, 3.00, 1),
(29, 'INV-10008', 'aman.rabby@gmail.com', 'fdgdfgdfg', 'dsfsdfsdfsdf', 'Hosting', 'monthly', '2015-12-31', '2016-01-30', 1.00, 4.00, 4.00, 0);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`client_id` int(10) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `address2` varchar(200) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(30) NOT NULL,
  `post_code` varchar(30) NOT NULL,
  `phone_no` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `user_name`, `first_name`, `last_name`, `company_name`, `email`, `address`, `address2`, `state`, `city`, `country`, `post_code`, `phone_no`) VALUES
(1, 'ummoy', 'Ummoy', 'Biswas', '', 'ummoy.biswas@live.com', 'Mohakhali Dohs', '', 'Dhaka', 'Dhaka', 'Bangladesh', '1203', ''),
(6, 'aman', 'Aman', 'Ullah', '', 'aman.rabby@gmail.com', 'Mohakhali Dohs', '', 'Dhaka', 'Dhaka', 'Bangladesh', '1203', ''),
(7, 'admin', 'Gnt', 'Ltd', '', 'info@geeksntechnology.com', 'Mohakhali Dohs', '', 'Dhaka', 'Dhaka', 'Bangladesh', '1203', '');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE IF NOT EXISTS `discount` (
`id` int(11) NOT NULL,
  `bill_id` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `discount_amount` double(30,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `bill_id`, `user_email`, `discount_amount`) VALUES
(3, 'INV-10008', 'aman.rabby@gmail.com', 3.50);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_gen`
--

CREATE TABLE IF NOT EXISTS `invoice_gen` (
  `invoice_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_gen`
--

INSERT INTO `invoice_gen` (`invoice_no`) VALUES
(10012);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`order_id` int(11) NOT NULL,
  `bill_id` varchar(255) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `order_reference` varchar(30) NOT NULL,
  `order_date` date NOT NULL,
  `order_due_date` date NOT NULL,
  `order_total_amount` double(30,2) NOT NULL,
  `order_due_amount` double(30,2) NOT NULL,
  `order_to_paid` double(30,2) NOT NULL,
  `order_allow_partial` int(3) NOT NULL DEFAULT '0',
  `order_allow_discount` int(3) NOT NULL DEFAULT '0',
  `note_recipient` varchar(255) DEFAULT NULL,
  `term_condition` varchar(255) DEFAULT NULL,
  `order_status` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10001 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partial`
--

CREATE TABLE IF NOT EXISTS `partial` (
`id` int(10) NOT NULL,
  `bill_id` varchar(255) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `partial_amount` double(30,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partial`
--

INSERT INTO `partial` (`id`, `bill_id`, `user_email`, `partial_amount`) VALUES
(3, 'INV-10008', 'aman.rabby@gmail.com', 1.75);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`product_id` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_description`) VALUES
(1, 'Web Development', ''),
(2, 'Mobile Apps', ''),
(3, 'Domain', ''),
(4, 'Shared Hosting', ''),
(5, 'Dedicated Hosting', '');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
`service_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `service_description` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `product_id`, `service_name`, `amount`, `service_description`) VALUES
(1, 1, 'Static Website', 200.00, ''),
(2, 1, 'Dynamic Website', 300.00, ''),
(3, 1, 'Responsive Website', 300.00, ''),
(4, 1, 'CMS Website', 250.00, ''),
(5, 2, 'Android Apps', 250.00, ''),
(6, 2, 'iOS Apps', 450.00, ''),
(7, 3, '.WEBSITE', 4.00, ''),
(8, 3, '.COM', 10.00, ''),
(9, 3, '.NET', 7.00, ''),
(10, 3, '.ORG', 6.00, ''),
(11, 4, 'Basic Plan', 1.30, ''),
(12, 4, 'Standard Plan', 2.20, ''),
(13, 4, 'Advanced Plan', 3.50, ''),
(14, 4, 'Mega Plan', 4.80, ''),
(15, 4, 'Heavy Plan', 6.50, ''),
(16, 5, 'Starter Plan', 20.50, ''),
(17, 5, 'Basic Plan', 41.00, ''),
(18, 5, 'Standard Plan', 51.50, ''),
(19, 5, 'Advanced Plan', 103.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `transaction_id` varchar(255) NOT NULL,
  `bill_id` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `debit` double NOT NULL,
  `credit` double NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `client_id`, `username`, `password`, `type`) VALUES
(1, 1, 'admin', 'admin', '1'),
(2, 2, 'aman', 'aman', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
 ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `bill_service`
--
ALTER TABLE `bill_service`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`client_id`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `email_2` (`email`), ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `partial`
--
ALTER TABLE `partial`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
 ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_service`
--
ALTER TABLE `bill_service`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
MODIFY `client_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10001;
--
-- AUTO_INCREMENT for table `partial`
--
ALTER TABLE `partial`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
