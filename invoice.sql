-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2015 at 01:03 PM
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
`bill_id` int(10) NOT NULL,
  `client_id` int(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `due_date` date NOT NULL,
  `total_bill` double(10,2) NOT NULL,
  `due` double(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `client_id`, `status`, `date`, `due_date`, `total_bill`, `due`) VALUES
(1, 1, '0', '2015-10-01', '2015-12-01', 300.00, 300.00),
(6, 6, '0', '2015-12-24', '2015-12-24', 600.00, 300.00),
(7, 6, '0', '2015-12-23', '2015-12-23', 1600.00, 300.00);

-- --------------------------------------------------------

--
-- Table structure for table `bill_service`
--

CREATE TABLE IF NOT EXISTS `bill_service` (
`id` int(10) NOT NULL,
  `bill_id` int(10) NOT NULL,
  `service_id` int(10) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_service`
--

INSERT INTO `bill_service` (`id`, `bill_id`, `service_id`, `quantity`) VALUES
(1, 1, 2, 1),
(2, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`client_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(30) NOT NULL,
  `post_code` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `first_name`, `last_name`, `email`, `address`, `state`, `city`, `country`, `post_code`) VALUES
(1, 'Ummoy', 'Biswas', 'ummoy.biswas@live.com', 'Mohakhali Dohs', 'Dhaka', 'Dhaka', 'Bangladesh', '1203'),
(6, 'Aman', 'Ullah', 'aman.rabby@gmail.com', 'Mohakhali Dohs', 'Dhaka', 'Dhaka', 'Bangladesh', '1203');

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
(2, 2, 'client', 'client', '0');

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
 ADD PRIMARY KEY (`client_id`);

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
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
MODIFY `bill_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bill_service`
--
ALTER TABLE `bill_service`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
MODIFY `client_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
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
