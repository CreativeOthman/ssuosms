-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 01:45 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cststore`
--

-- --------------------------------------------------------

--
-- Table structure for table `items_tbl`
--

CREATE TABLE IF NOT EXISTS `items_tbl` (
  `SN` int(25) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(255) NOT NULL,
  `modelNo` varchar(255) NOT NULL,
  `itemsQuantity` int(255) NOT NULL,
  `dateAdded` datetime NOT NULL,
  `addedBy` varchar(255) NOT NULL,
  PRIMARY KEY (`SN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `items_tbl`
--

INSERT INTO `items_tbl` (`SN`, `itemName`, `modelNo`, `itemsQuantity`, `dateAdded`, `addedBy`) VALUES
(21, 'Motorcircle', 'Daylong', 0, '2016-12-04 19:09:41', 'Drives');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `TransactionsId` int(11) NOT NULL AUTO_INCREMENT,
  `vendorName` varchar(24) NOT NULL,
  `itemName` varchar(255) NOT NULL,
  `oldQuantity` int(11) NOT NULL,
  `NoItemsReceved` int(11) NOT NULL,
  `newQuantity` int(11) NOT NULL,
  `tType` varchar(255) NOT NULL,
  `tdate` datetime NOT NULL,
  PRIMARY KEY (`TransactionsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`TransactionsId`, `vendorName`, `itemName`, `oldQuantity`, `NoItemsReceved`, `newQuantity`, `tType`, `tdate`) VALUES
(41, 'Zuga', 'Motorcircle', 5, 3, 2, 'Withdraw', '2016-11-21 12:14:55'),
(42, 'Usman Ahmad', 'Motorcircle', 2, 2, 0, 'Withdraw', '2016-11-21 12:21:18'),
(43, 'Islam Hands ', 'Motorcircle', 0, 5, 5, 'Deposit', '2016-11-21 22:22:06'),
(44, 'Aliyu Umar', 'Motorcircle', 5, 2, 7, 'Deposit', '2016-11-21 22:24:18'),
(45, 'Sani Musa', 'Motorcircle', 7, 1, 6, 'Withdraw', '2016-11-21 22:26:36'),
(46, 'john ', 'Mobile Phone', 5, 3, 2, 'Withdraw', '2016-11-23 20:44:00'),
(47, 'Usman Ahmad', 'Mobile Phone', 2, 2, 0, 'Withdraw', '2016-11-29 20:55:51'),
(48, 'Usman Ahmad', 'Computers', 15, 12, 3, 'Withdraw', '2016-12-03 19:24:54'),
(49, 'Usman Ahmad', 'HP-Laptops', 3, 50, 53, 'Deposit', '2016-12-04 15:13:25'),
(50, 'Aliyu Usman', 'Computers', 3, 1, 4, 'Deposit', '2016-12-04 15:14:43'),
(51, 'Usman', 'Computers', 4, 1, 3, 'Withdraw', '2016-12-04 15:15:15'),
(52, 'Usman Ahmad', 'Mobile Phone', 3, 1, 4, 'Deposit', '2016-12-04 15:24:54'),
(53, 'Abdullahi', 'Computers', 3, 2, 1, 'Withdraw', '2016-12-04 15:27:05'),
(54, 'Aliyu Usman', 'Phone', 1, 50, 51, 'Deposit', '2016-12-04 18:54:30'),
(55, 'Sani Musa', 'Motorcircle', 1, 1, 2, 'Deposit', '2016-12-04 19:01:46'),
(56, 'Usman Ahmad', 'Motorcircle', 1, 1, 0, 'Withdraw', '2016-12-04 19:02:04'),
(57, 'Ali', 'Mobile Phone', 1, 1, 0, 'Withdraw', '2016-12-04 19:07:00'),
(58, 'Usman Ahmad', 'Motorcircle', 150, 149, 1, 'Withdraw', '2016-12-04 19:09:55'),
(59, 'Usman Ahmad', 'Motorcircle', 1, 1, 0, 'Withdraw', '2016-12-04 21:16:47'),
(60, 'Usman Ahmad', 'Motorcircle', 0, 2, 2, 'Deposit', '2016-12-21 13:43:22'),
(61, 'john', 'Motorcircle', 2, 2, 0, 'Withdraw', '2016-12-21 13:43:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `email`, `password`) VALUES
(1, 'bewithusman@yahoo.com', 'sokoto'),
(2, 'babangidaigwe2016@gmail.com', 'igwe2016');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
