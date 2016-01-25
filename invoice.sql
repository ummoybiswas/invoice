-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2016 at 12:11 PM
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
  `partial_status` int(1) NOT NULL DEFAULT '0',
  `bill_status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bill_id`, `user_email`, `bill_reference`, `bill_date`, `bill_due_date`, `bill_total_amount`, `bill_due_amount`, `bill_to_paid`, `bill_allow_partial`, `bill_allow_discount`, `note_recipient`, `term_condition`, `partial_status`, `bill_status`) VALUES
('INV-10035', 'ummoy.biswas@live.com', 'ref#213123', '2015-12-31', '2015-12-31', 9.00, 9.00, 9.00, 0, 0, '0', '0', 0, '0'),
('INV-10036', 'ummoy.biswas@live.com', 'ref#213123', '2015-12-31', '2015-12-31', 9.00, 9.00, 9.00, 0, 0, '0', '0', 0, '0'),
('INV-10037', 'ummoy.biswas@live.com', 'dsfsds', '0000-00-00', '2016-01-16', 149.00, 149.00, 149.00, 0, 0, '0', '0', 0, '0'),
('INV-10038', 'ummoy.biswas@live.com', 'dsfsds', '2016-01-21', '2016-01-31', 138.00, 138.00, 138.00, 0, 0, '0', '0', 0, '0'),
('INV-10039', 'ummoy.biswas@live.com', 'dsfsds', '2016-01-21', '2016-01-31', 138.00, 138.00, 138.00, 0, 0, '0', '0', 0, '0'),
('INV-10040', 'ummoy.biswas@live.com', 'ui', '2016-01-07', '2016-01-17', 14.00, 28.00, 0.00, 0, 0, '0', '0', 0, '0'),
('INV-10041', 'ummoy.biswas@live.com', 'yyujbhj', '2016-01-05', '2016-01-20', 145.00, 145.00, 145.00, 0, 0, '0', '0', 0, '0'),
('INV-10042', 'aman.rabby@gmail.com', 'INV-10042', '2016-01-02', '2016-03-27', 28.00, 0.00, 28.00, 0, 0, '0', '0', 1, '1'),
('INV-10043', 'aman.rabby@gmail.com', 'INV-10043', '2016-01-02', '2016-01-27', 28.00, 28.00, 0.00, 0, 0, '0', '0', 0, '0'),
('INV-10044', 'aman.rabby@gmail.com', 'INV-10044', '2016-01-02', '2016-01-27', 28.00, -28.00, 56.00, 0, 0, '0', '0', 0, '1'),
('INV-10045', 'aman.rabby@gmail.com', '', '2016-01-02', '2016-01-27', 9.00, -9.00, 18.00, 0, 0, '0', '0', 0, '1'),
('INV-10046', 'aman.rabby@gmail.com', '', '2016-01-02', '2016-01-27', 9.00, -9.00, 18.00, 0, 0, '0', '0', 0, '1'),
('INV-10047', 'aman.rabby@gmail.com', '', '2016-01-02', '2016-01-27', 9.00, -9.00, 18.00, 0, 0, '0', '0', 0, '1'),
('INV-10048', 'smkiron@gmail.com', '2ewqeqwe', '2016-01-13', '2016-01-28', 1.00, -1.00, 1.00, 0, 0, '0', '0', 0, '1'),
('INV-10049', 'ummoy.biswas@live.com', 'lkkh', '2016-01-13', '2016-01-13', 6.00, 6.00, 6.00, 0, 0, '0', '0', 0, '0'),
('INV-10050', 'ummoy.biswas@live.com', 'lkkh', '2016-01-13', '2016-01-13', 6.00, 6.00, 6.00, 0, 0, '0', '0', 0, '0'),
('INV-10051', 'ummoy.biswas@live.com', 'lkkh', '2016-01-13', '2016-01-13', 6.00, 6.00, 6.00, 0, 0, '0', '0', 0, '0'),
('INV-10052', 'ummoy.biswas@live.com', 'lkkh', '2016-01-13', '2016-01-13', 6.00, 6.00, 6.00, 0, 0, '0', '0', 0, '0'),
('INV-10053', 'ummoy.biswas@live.com', 'lkkh', '2016-01-13', '2016-01-13', 6.00, 6.00, 6.00, 0, 0, '0', '0', 0, '0'),
('INV-10054', 'ummoy.biswas@live.com', 'opiop', '2016-01-14', '2016-01-24', 4.00, 4.00, 4.00, 0, 0, '0', '0', 0, '0'),
('INV-10055', 'aman.rabby@gmail.com', '', '2015-12-31', '2015-12-31', 3.00, 3.00, 3.00, 0, 0, '0', '0', 0, '0'),
('INV-10056', 'aman.rabby@gmail.com', '', '2015-12-31', '2015-12-31', 3.00, 3.00, 3.00, 0, 0, '0', '0', 0, '0'),
('INV-10057', 'aman.rabby@gmail.com', '', '2015-12-31', '2016-01-20', 3.00, 3.00, 3.00, 0, 0, '0', '0', 0, '0'),
('INV-10058', 'aman.rabby@gmail.com', '', '2016-01-22', '2016-02-11', 3.00, 3.00, 3.00, 0, 0, '0', '0', 0, '0'),
('INV-10059', 'aman.rabby@gmail.com', '', '2016-01-21', '2016-02-10', 3.00, 0.00, 3.00, 0, 0, '0', '0', 0, '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill_service`
--

INSERT INTO `bill_service` (`id`, `bill_id`, `user_email`, `particulars`, `additional_particulars`, `services`, `bill_cycle`, `reg_date`, `next_due`, `quantity`, `price`, `total`, `status`) VALUES
(1, 'INV-10035', 'ummoy.biswas@live.com', 'hosting', 'hosting', 'Hosting', 'monthly', '2015-12-31', '2016-01-30', 1.00, 6.00, 6.00, 0),
(2, 'INV-10035', 'ummoy.biswas@live.com', 'domain', 'domain', 'Domain', 'yearly', '2015-12-31', '2016-12-30', 1.00, 3.00, 3.00, 0),
(3, 'INV-10036', 'ummoy.biswas@live.com', 'domain', 'domain', 'Domain', 'yearly', '2015-12-31', '2016-12-30', 1.00, 3.00, 3.00, 0),
(4, 'INV-10036', 'ummoy.biswas@live.com', 'hosting', 'hosting', 'Hosting', 'monthly', '2015-12-31', '2016-01-30', 1.00, 6.00, 6.00, 0),
(5, 'INV-10037', 'ummoy.biswas@live.com', 'sadkjasde', 'wqqweqwe', 'Hosting', 'yearly', '0000-00-00', '2017-01-05', 1.00, 80.00, 80.00, 0),
(6, 'INV-10037', 'ummoy.biswas@live.com', 'asdasdas', 'adeqwaewe', 'Development', 'fixed', '0000-00-00', '0000-00-00', 1.00, 58.00, 58.00, 0),
(7, 'INV-10037', 'ummoy.biswas@live.com', 'fdgfdgfdgfdg', 'dsfdsfsdf', 'Domain', 'yearly', '0000-00-00', '2017-01-05', 1.00, 11.00, 11.00, 0),
(8, 'INV-10038', 'ummoy.biswas@live.com', 'asdasdas', 'adeqwaewe', 'Development', 'fixed', '2016-01-21', '0000-00-00', 1.00, 58.00, 58.00, 0),
(9, 'INV-10038', 'ummoy.biswas@live.com', 'sadkjasde', 'wqqweqwe', 'Hosting', 'yearly', '2016-01-21', '2017-01-20', 1.00, 80.00, 80.00, 0),
(10, 'INV-10039', 'ummoy.biswas@live.com', 'asdasdas', 'adeqwaewe', 'Development', 'fixed', '2016-01-21', '0000-00-00', 1.00, 58.00, 58.00, 0),
(11, 'INV-10039', 'ummoy.biswas@live.com', 'sadkjasde', 'wqqweqwe', 'Hosting', 'yearly', '2016-01-21', '2017-01-20', 1.00, 80.00, 80.00, 0),
(12, 'INV-10040', 'ummoy.biswas@live.com', 'sdfs', 'sderdf', 'Hosting', 'monthly', '2016-01-07', '2016-02-06', 1.00, 4.00, 4.00, 0),
(13, 'INV-10040', 'ummoy.biswas@live.com', 'dsfsfg', '', 'Domain', 'yearly', '2016-01-07', '2017-01-06', 1.00, 10.00, 10.00, 0),
(14, 'INV-10041', 'ummoy.biswas@live.com', 'sadasdasd', 'zSdsad', 'Hosting', 'yearly', '2016-01-05', '2017-01-04', 1.00, 45.00, 45.00, 0),
(15, 'INV-10041', 'ummoy.biswas@live.com', 'sdfsdf', 'cxvxfdsf', 'Development', 'fixed', '2016-01-05', '0000-00-00', 1.00, 100.00, 100.00, 0),
(16, 'INV-10042', 'aman.rabby@gmail.com', 'aman.com', 'aman.com', 'Hosting', 'monthly', '2016-01-02', '2016-02-01', 4.00, 7.00, 28.00, 0),
(17, 'INV-10043', 'aman.rabby@gmail.com', 'aman.com', 'aman.com', 'Hosting', 'monthly', '2016-01-02', '2016-02-01', 4.00, 7.00, 28.00, 0),
(18, 'INV-10044', 'aman.rabby@gmail.com', 'aman.com', 'aman.com', 'Hosting', 'monthly', '2016-01-02', '2016-02-01', 4.00, 7.00, 28.00, 0),
(19, 'INV-10045', 'aman.rabby@gmail.com', 'sdfdsfds', 'sdfdsfdsfds', 'Domain', 'fixed', '2016-01-02', '0000-00-00', 1.00, 4.00, 4.00, 0),
(20, 'INV-10045', 'aman.rabby@gmail.com', 'sdf', 'sdfsdfdsf', 'Hosting', 'yearly', '2016-01-02', '2017-01-01', 1.00, 5.00, 5.00, 0),
(21, 'INV-10046', 'aman.rabby@gmail.com', 'sdfdsfds', 'sdfdsfdsfds', 'Domain', 'fixed', '2016-01-02', '0000-00-00', 1.00, 4.00, 4.00, 0),
(22, 'INV-10046', 'aman.rabby@gmail.com', 'sdf', 'sdfsdfdsf', 'Hosting', 'yearly', '2016-01-02', '2017-01-01', 1.00, 5.00, 5.00, 0),
(23, 'INV-10047', 'aman.rabby@gmail.com', 'sdfdsfds', 'sdfdsfdsfds', 'Domain', 'fixed', '2016-01-02', '0000-00-00', 1.00, 4.00, 4.00, 0),
(24, 'INV-10047', 'aman.rabby@gmail.com', 'sdf', 'sdfsdfdsf', 'Hosting', 'yearly', '2016-01-02', '2017-01-01', 1.00, 5.00, 5.00, 0),
(25, 'INV-10048', 'smkiron@gmail.com', 'sadasd', 'asdasdasd', 'Domain', 'yearly', '2016-01-13', '2017-01-12', 1.00, 5.00, 5.00, 0),
(26, 'INV-10049', 'ummoy.biswas@live.com', 'sdfsdfdsf', 'sdfsfdfsdf', 'Hosting', 'fixed', '2016-01-13', '0000-00-00', 1.00, 6.00, 6.00, 0),
(27, 'INV-10050', 'ummoy.biswas@live.com', 'sdfsdfdsf', 'sdfsfdfsdf', 'Hosting', 'fixed', '2016-01-13', '0000-00-00', 1.00, 6.00, 6.00, 0),
(28, 'INV-10051', 'ummoy.biswas@live.com', 'sdfsdfdsf', 'sdfsfdfsdf', 'Hosting', 'fixed', '2016-01-13', '0000-00-00', 1.00, 6.00, 6.00, 0),
(29, 'INV-10052', 'ummoy.biswas@live.com', 'sdfsdfdsf', 'sdfsfdfsdf', 'Hosting', 'fixed', '2016-01-13', '0000-00-00', 1.00, 6.00, 6.00, 0),
(30, 'INV-10053', 'ummoy.biswas@live.com', 'sdfsdfdsf', 'sdfsfdfsdf', 'Hosting', 'fixed', '2016-01-13', '0000-00-00', 1.00, 6.00, 6.00, 0),
(31, 'INV-10054', 'ummoy.biswas@live.com', 'asdasd', 'sadasd', 'Hosting', 'monthly', '2016-01-14', '2016-02-13', 1.00, 4.00, 4.00, 0),
(32, 'INV-10055', 'aman.rabby@gmail.com', 'sdfds', 'sfdsfds', 'Hosting', 'fixed', '2015-12-31', '0000-00-00', 1.00, 3.00, 3.00, 0),
(33, 'INV-10056', 'aman.rabby@gmail.com', 'sdfds', 'sfdsfds', 'Hosting', 'fixed', '2015-12-31', '0000-00-00', 1.00, 3.00, 3.00, 0),
(34, 'INV-10057', 'aman.rabby@gmail.com', 'sdfds', 'sfdsfds', 'Hosting', 'fixed', '2015-12-31', '0000-00-00', 1.00, 3.00, 3.00, 0),
(35, 'INV-10058', 'aman.rabby@gmail.com', 'sdfds', 'sfdsfds', 'Hosting', 'fixed', '2016-01-22', '0000-00-00', 1.00, 3.00, 3.00, 0),
(36, 'INV-10059', 'aman.rabby@gmail.com', 'sdfds', 'sfdsfds', 'Hosting', 'fixed', '2016-01-21', '0000-00-00', 1.00, 3.00, 3.00, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `user_name`, `first_name`, `last_name`, `company_name`, `email`, `address`, `address2`, `state`, `city`, `country`, `post_code`, `phone_no`) VALUES
(1, 'ummoy', 'Ummoy', 'Biswas', '', 'ummoy.biswas@live.com', 'Mohakhali Dohs', '', 'Dhaka', 'Dhaka', 'Bangladesh', '1203', ''),
(6, 'aman', 'Aman', 'Ullah', 'gnt', 'aman.rabby@gmail.com', 'Mohakhali Dohs', '', 'Dhaka', 'Dhaka', 'Bangladesh', '1203', '874651654'),
(7, 'admin', 'Gnt', 'Ltd', 'geeksntechnology', 'info@geeksntechnology.com', 'Mohkhali Dohs', '0', 'Dhaka', 'Dhaka', 'bangladesh', '1203', '345435'),
(8, 'new', 'f_name', 'l_name', 'c_name', 'email@email.com', 'address', 'address1', 'Dhaka', 'dhaka', 'bangladesh', '1212', '654654');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE IF NOT EXISTS `discount` (
`id` int(11) NOT NULL,
  `bill_id` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `discount_amount` double(30,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(10060);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`order_id` int(10) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=10025 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `bill_id`, `user_email`, `order_reference`, `order_date`, `order_due_date`, `order_total_amount`, `order_due_amount`, `order_to_paid`, `order_allow_partial`, `order_allow_discount`, `note_recipient`, `term_condition`, `order_status`) VALUES
(10000, 'INV-10035', 'ummoy.biswas@live.com', 'ref#213123', '2015-12-31', '2015-12-31', 9.00, 9.00, 9.00, 0, 0, '0', '0', '1'),
(10001, 'INV-10036', 'ummoy.biswas@live.com', 'ref#213123', '2015-12-31', '2015-12-31', 9.00, 9.00, 9.00, 0, 0, '0', '0', '1'),
(10002, 'INV-10037', 'ummoy.biswas@live.com', 'dsfsds', '0000-00-00', '2016-01-16', 149.00, 149.00, 149.00, 0, 0, '0', '0', '1'),
(10003, 'INV-10038', 'ummoy.biswas@live.com', 'dsfsds', '2016-01-21', '2016-01-31', 138.00, 138.00, 138.00, 0, 0, '0', '0', '1'),
(10004, 'INV-10039', 'ummoy.biswas@live.com', 'dsfsds', '2016-01-21', '2016-01-31', 138.00, 138.00, 138.00, 0, 0, '0', '0', '1'),
(10005, 'INV-10040', 'ummoy.biswas@live.com', 'ui', '2016-01-07', '2016-01-17', 14.00, 14.00, 14.00, 0, 0, '0', '0', '1'),
(10006, 'INV-10041', 'ummoy.biswas@live.com', 'yyujbhj', '2016-01-05', '2016-01-20', 145.00, 145.00, 145.00, 0, 0, '0', '0', '1'),
(10007, 'INV-10042', 'aman.rabby@gmail.com', 'INV-10042', '2016-01-02', '2016-01-27', 28.00, 28.00, 28.00, 0, 0, '0', '0', '1'),
(10008, 'INV-10043', 'aman.rabby@gmail.com', 'INV-10043', '2016-01-02', '2016-01-27', 28.00, 28.00, 28.00, 0, 0, '0', '0', '1'),
(10009, 'INV-10044', 'aman.rabby@gmail.com', 'INV-10044', '2016-01-02', '2016-01-27', 28.00, 28.00, 28.00, 0, 0, '0', '0', '1'),
(10010, 'INV-10045', 'aman.rabby@gmail.com', '', '2016-01-02', '2016-01-27', 9.00, 9.00, 9.00, 0, 0, '0', '0', '1'),
(10011, 'INV-10046', 'aman.rabby@gmail.com', '', '2016-01-02', '2016-01-27', 9.00, 9.00, 9.00, 0, 0, '0', '0', '1'),
(10012, 'INV-10047', 'aman.rabby@gmail.com', '', '2016-01-02', '2016-01-27', 9.00, 9.00, 9.00, 0, 0, '0', '0', '1'),
(10013, 'INV-10048', 'smkiron@gmail.com', '2ewqeqwe', '2016-01-13', '2016-01-28', 5.00, 5.00, 5.00, 0, 0, '0', '0', '1'),
(10014, 'INV-10049', 'ummoy.biswas@live.com', 'lkkh', '2016-01-13', '2016-01-13', 6.00, 6.00, 6.00, 0, 0, '0', '0', '1'),
(10015, 'INV-10050', 'ummoy.biswas@live.com', 'lkkh', '2016-01-13', '2016-01-13', 6.00, 6.00, 6.00, 0, 0, '0', '0', '1'),
(10016, 'INV-10051', 'ummoy.biswas@live.com', 'lkkh', '2016-01-13', '2016-01-13', 6.00, 6.00, 6.00, 0, 0, '0', '0', '1'),
(10017, 'INV-10052', 'ummoy.biswas@live.com', 'lkkh', '2016-01-13', '2016-01-13', 6.00, 6.00, 6.00, 0, 0, '0', '0', '1'),
(10018, 'INV-10053', 'ummoy.biswas@live.com', 'lkkh', '2016-01-13', '2016-01-13', 6.00, 6.00, 6.00, 0, 0, '0', '0', '1'),
(10019, 'INV-10054', 'ummoy.biswas@live.com', 'opiop', '2016-01-14', '2016-01-24', 4.00, 4.00, 4.00, 0, 0, '0', '0', '1'),
(10020, 'INV-10055', 'aman.rabby@gmail.com', '', '2015-12-31', '2015-12-31', 3.00, 3.00, 3.00, 0, 0, '0', '0', '1'),
(10021, 'INV-10056', 'aman.rabby@gmail.com', '', '2015-12-31', '2015-12-31', 3.00, 3.00, 3.00, 0, 0, '0', '0', '1'),
(10022, 'INV-10057', 'aman.rabby@gmail.com', '', '2015-12-31', '2016-01-20', 3.00, 3.00, 3.00, 0, 0, '0', '0', '1'),
(10023, 'INV-10058', 'aman.rabby@gmail.com', '', '2016-01-22', '2016-02-11', 3.00, 3.00, 3.00, 0, 0, '0', '0', '1'),
(10024, 'INV-10059', 'aman.rabby@gmail.com', '', '2016-01-21', '2016-02-10', 3.00, 3.00, 3.00, 0, 0, '0', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `partial`
--

CREATE TABLE IF NOT EXISTS `partial` (
`id` int(10) NOT NULL,
  `bill_id` varchar(255) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `partial_amount` double(30,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partial`
--

INSERT INTO `partial` (`id`, `bill_id`, `user_email`, `partial_amount`) VALUES
(1, 'INV-10042', 'aman.rabby@gmail.com', 14.00);

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
`id` int(10) NOT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `gateway` varchar(10) DEFAULT NULL,
  `bill_id` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `debit` double(10,2) NOT NULL DEFAULT '0.00',
  `credit` double(10,2) NOT NULL DEFAULT '0.00',
  `vat` double(10,2) NOT NULL DEFAULT '0.00',
  `balance` double(10,2) NOT NULL,
  `transaction_date_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `transaction_id`, `gateway`, `bill_id`, `user_email`, `debit`, `credit`, `vat`, `balance`, `transaction_date_time`) VALUES
(1, NULL, 'Paypal', 'INV-10042', 'aman.rabby@gmail.com', 28.00, 0.00, 0.00, 28.00, ''),
(8, '1JN53258LL056974S', 'Paypal', 'INV-10043', 'aman.rabby@gmail.com', 0.00, 14.00, 0.86, 0.00, '02:24:38 Jan 24, 2016 PST'),
(9, '5CA17715TV864192T', 'Paypal', 'INV-10044', 'aman.rabby@gmail.com', 0.00, 28.00, 1.42, -28.00, '03:39:00 Jan 24, 2016 PST'),
(10, '1AE58435PG8085713', 'Paypal', 'INV-10045', 'aman.rabby@gmail.com', 0.00, 9.00, 0.66, -9.00, '04:27:59 Jan 24, 2016 PST'),
(11, '49272722L46865238', 'Paypal', 'INV-10046', 'aman.rabby@gmail.com', 0.00, 9.00, 0.66, -9.00, '04:32:35 Jan 24, 2016 PST'),
(12, '4FE037091T2804017', 'Paypal', 'INV-10047', 'aman.rabby@gmail.com', 0.00, 9.00, 0.66, -9.00, '04:44:08 Jan 24, 2016 PST'),
(13, '1WW55174JN5871835', 'Paypal', 'INV-10048', 'aman.rabby@gmail.com', 0.00, 1.00, 0.34, -1.00, '04:48:31 Jan 24, 2016 PST'),
(23, '4KB67015C1933350P', 'Paypal', 'INV-10059', 'aman.rabby@gmail.com', 0.00, 3.00, 0.42, 0.00, '23:20:53 Jan 24, 2016 PST'),
(28, '6D6011995D663403C', 'Paypal', 'INV-10042', 'aman.rabby@gmail.com', 0.00, 14.00, 0.86, 14.00, '00:53:05 Jan 25, 2016 PST'),
(29, '0WX491957H950672S', 'Paypal', 'INV-10042', 'aman.rabby@gmail.com', 0.00, 14.00, 0.86, 0.00, '00:54:09 Jan 25, 2016 PST');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `client_id`, `username`, `password`, `type`) VALUES
(1, 1, 'admin', 'admin', '1'),
(2, 2, 'aman', 'aman', '0'),
(3, 0, 'new', '12345678', '0');

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
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
 ADD PRIMARY KEY (`id`);

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
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
MODIFY `client_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10025;
--
-- AUTO_INCREMENT for table `partial`
--
ALTER TABLE `partial`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
