-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2021 at 02:58 PM
-- Server version: 10.2.40-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plugorange_shelee`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `booking_id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cell_no` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_category` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `sell_price` int(50) NOT NULL,
  `left_power` decimal(50,0) NOT NULL,
  `left_cylinder` decimal(50,0) NOT NULL,
  `left_axis` decimal(50,0) NOT NULL,
  `Left_add` varchar(50) NOT NULL,
  `right_power` decimal(50,0) NOT NULL,
  `right_cylinder` decimal(50,0) NOT NULL,
  `right_axis` decimal(50,0) NOT NULL,
  `right_add` varchar(50) NOT NULL,
  `transition` varchar(50) NOT NULL,
  `thinner_lens` varchar(50) NOT NULL,
  `multifocal_lens` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `customer_id`, `customer_name`, `address`, `cell_no`, `product_id`, `product_name`, `product_category`, `color`, `brand`, `quantity`, `sell_price`, `left_power`, `left_cylinder`, `left_axis`, `Left_add`, `right_power`, `right_cylinder`, `right_axis`, `right_add`, `transition`, `thinner_lens`, `multifocal_lens`, `date`, `time`) VALUES
(1, 3, 'huzaifa', '3 talwaar', 334347, 2, 'abc', 'abc', 'black', 'nike', 2, 500, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '14:09:09'),
(6, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '14:47:13'),
(7, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '14:50:54'),
(8, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '14:51:02'),
(9, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '14:51:24'),
(10, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '14:51:51'),
(11, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '14:59:22'),
(12, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '14:59:25'),
(13, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '14:59:51'),
(14, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '14:59:55'),
(15, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:03:09'),
(16, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:06:27'),
(17, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:07:43'),
(18, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:08:38'),
(19, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:08:41'),
(20, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:09:21'),
(21, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:09:24'),
(22, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:09:27'),
(23, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:43:47'),
(24, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:43:55'),
(25, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:44:02'),
(26, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:44:32'),
(27, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:45:32'),
(28, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:47:19'),
(29, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:49:47'),
(30, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:50:03'),
(31, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:50:17'),
(32, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:50:41'),
(33, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:50:50'),
(34, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:52:50'),
(35, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '15:59:34'),
(36, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '16:03:16'),
(37, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '16:04:22'),
(38, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '16:05:11'),
(39, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '16:05:42'),
(40, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '16:06:16'),
(41, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-28', '16:24:51'),
(42, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-29', '12:25:49'),
(43, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-29', '12:45:43'),
(44, 3, 'huzaifa Hussain', '3 talwaar', 112871, 3, 'Rado max', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-29', '13:02:52'),
(45, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-29', '13:07:09'),
(46, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-29', '16:37:55'),
(47, 3, 'huzaifa Hussain', '3 talwaar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 2, 2, 2, 'damn', 2, 2, 2, 'damn', 'transition', 'thinner', 'computer only', '2021-07-29', '16:39:13'),
(48, 4, 'Qaim Mehdi', 'Johar', 112871, 3, 'Rado max', 'sdaf', 'black', 'asdf', 1, 44, 12, 12, 12, 'damn', 12, 12, 12, 'damn', 'transition', 'thinner', 'reading only', '2021-07-30', '11:46:24'),
(49, 4, 'Qaim Mehdi', 'Johar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 2, 2, 2, 'damn', 2, 2, 2, 'damn', 'transition', 'thinner', 'distance only', '2021-07-30', '11:47:44'),
(50, 3, 'huzaifa Hussain', '3 talwaar', 14108, 4, 'dslr pro max', 'canon', 'black', 'chicago', 1, 44, 9, 9, 9, 'damn', 9, 9, 9, 'damn', 'transition', 'thinner', 'progressive only', '2021-07-30', '12:23:51'),
(51, 4, 'Qaim Mehdi', 'Johar', 112871, 3, 'Rado max', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-07-30', '15:42:57'),
(52, 2, 'rafay', 'johar', 334347, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-09-06', '11:33:37'),
(53, 2, 'rafay', 'johar', 334347, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-09-06', '13:58:36'),
(54, 2, 'rafay', 'johar', 334347, 3, 'Rado max', 'sdaf', 'black', 'asdf', 1, 44, 2, 60, 20, '', 2, 60, 20, '', '', '', 'Distance Only', '2021-09-06', '15:47:05'),
(55, 2, 'rafay', 'johar', 334347, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-09-08', '14:39:41'),
(56, 2, 'rafay', 'johar', 334347, 6, 'trivex', 'Adult', 'black', 'corex', 1, 400, 0, 0, 0, '', 0, 0, 0, '', '', '', '', '2021-09-08', '14:42:27'),
(57, 2, 'rafay', 'johar', 334347, 6, 'trivex', 'Adult', 'black', 'corex', 1, 400, 2, 60, 20, '', 2, 60, 20, '', 'transition', '', 'reading only', '2021-09-08', '14:42:53'),
(58, 2, 'rafay', 'johar', 334347, 3, 'dslr pro max', 'canon', 'black', 'chicago', 1, 44, 2, 60, 20, '', 2, 60, 20, '', 'transition', 'thinner', 'computer only', '2021-09-08', '14:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `customer_cell_no` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `address`, `customer_cell_no`, `email`, `password`, `date`, `time`) VALUES
(1, 'Huzaifa Hussain', '', 334347, 'huzefahussain61@gmail.com', '12345', '2021-07-13', '00:00:00'),
(2, 'rafay', 'johar', 334347, 'rafay.com', '12345', '2021-07-13', '00:00:00'),
(3, 'farzain', 'johar', 334347, 'farizain@gmail.com', '12345', '2021-07-13', '00:00:00'),
(4, 'qaim', 'johar', 334347, 'qaim@gmail.com', '12345', '2021-07-13', '15:21:17'),
(9, 'jameel', 'malir', 3343415, 'jameel@gmail.com', '12345', '2021-07-13', '15:26:54'),
(10, 'jameel', 'malir', 3343415, 'jameel@gmail.com', '12345', '2021-07-13', '15:29:07'),
(11, 'jameel', 'malir', 3343415, 'jameel@gmail.com', '12345', '2021-07-13', '15:29:10'),
(12, 'jameel', 'malir', 3343415, 'jameel@gmail.com', '12345', '2021-07-13', '15:29:13'),
(14, '', 'hyderabad', 30303, 'huzaifahussain336@gmail.com', '12345', '2021-07-16', '11:47:12'),
(15, 'huzaifahussain', 'hyderabad', 30303, 'huzaifahussain336@gmail.com', '12345', '2021-07-16', '11:49:05'),
(16, 'Huzaifa Hussain', 'hyderabad', 123456789, 'huzaifahussain336@gmail.com', '12345', '2021-07-16', '23:02:27'),
(17, 'Huzaifa Hussain', 'hyderabad', 123456789, 'huzaifahussain336@gmail.com', '12345', '2021-07-16', '23:04:43'),
(18, 'Huzaifa Hussain', 'hyderabad', 123456789, 'huzaifahussain336@gmail.com', '12345', '2021-07-16', '23:04:49'),
(19, 'abc', 'dfds', 123, 'abc@jhasd', '123', '2021-09-08', '12:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `glasses_table`
--

CREATE TABLE `glasses_table` (
  `glass_id` int(100) NOT NULL,
  `glass_name` varchar(100) NOT NULL,
  `short_description` varchar(100) NOT NULL,
  `long_description` varchar(200) NOT NULL,
  `category_name` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `purchase_price` int(50) NOT NULL,
  `sell_price` int(50) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `glasses_table`
--

INSERT INTO `glasses_table` (`glass_id`, `glass_name`, `short_description`, `long_description`, `category_name`, `color`, `brand`, `quantity`, `purchase_price`, `sell_price`, `image1`, `image2`, `image3`, `date`, `time`) VALUES
(2, 'Rado max pro', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 60, 44, '', '', '', '2021-07-08', '18:53:07'),
(3, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, '89075258_2881701661921483_7531086645135671296_o.jpg', '', '', '2021-07-14', '14:05:16'),
(4, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, '167211611_1629977863872547_9200074435122442024_n.jpg', '', '', '2021-07-14', '14:06:18'),
(5, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, '167211611_1629977863872547_9200074435122442024_n.jpg', '', '', '2021-07-14', '14:14:48'),
(6, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 500, 44, '167211611_1629977863872547_9200074435122442024_n.jpg', '', '', '2021-07-14', '14:48:00'),
(7, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, 'images/', '', '', '2021-07-14', '15:54:39'),
(8, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, 'images/', '', '', '2021-07-14', '15:56:02'),
(9, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, 'images/', '', '', '2021-07-14', '15:59:51'),
(10, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, '', '', '', '2021-07-14', '16:21:54'),
(11, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, '', '', '', '2021-07-14', '16:22:46'),
(12, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, 'images/', '', '', '2021-07-14', '16:23:49'),
(13, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'chicago', 2, 500, 44, '', '', '', '2021-07-27', '17:05:20'),
(14, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'chicago', 2, 500, 44, '', '', '', '2021-07-27', '17:08:18'),
(15, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, '', '', '', '2021-07-27', '17:11:32'),
(16, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, '', '', '', '2021-07-27', '17:12:23'),
(17, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, '', '', '', '2021-07-27', '17:15:06');

-- --------------------------------------------------------

--
-- Table structure for table `lense_table`
--

CREATE TABLE `lense_table` (
  `lense_id` int(100) NOT NULL,
  `lense_name` varchar(100) NOT NULL,
  `short_description` varchar(100) NOT NULL,
  `long_description` varchar(100) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `purchase_price` int(50) NOT NULL,
  `sell_price` int(50) NOT NULL,
  `image1` longblob NOT NULL,
  `image2` longblob NOT NULL,
  `image3` longblob NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lense_table`
--

INSERT INTO `lense_table` (`lense_id`, `lense_name`, `short_description`, `long_description`, `category_name`, `color`, `brand`, `quantity`, `purchase_price`, `sell_price`, `image1`, `image2`, `image3`, `date`, `time`) VALUES
(3, 'dslr pro max', 'abcd', 'sadf', 'canon', 'black', 'chicago', 50, 500, 44, '', '', '', '2021-07-13', '15:11:57'),
(4, 'dslr pro max', 'abcd', 'sadf', 'canon', 'black', 'chicago', 50, 500, 44, '', '', '', '2021-07-13', '15:12:34'),
(6, 'trivex', 'abcdefghijlk', 'You\'ll need a concave lens (curves inward) if you\'re nearsighted. A convex lens (curves outward) wil', 'Adult', 'black', 'corex', 5, 500, 400, '', '', '', '2021-07-14', '00:00:00'),
(7, 'trivex', 'abcdefghijlk', 'You\'ll need a concave lens (curves inward) if you\'re nearsighted. A convex lens (curves outward) wil', 'Adult', 'black', 'corex', 5, 500, 400, '', '', '', '2021-07-14', '00:00:00'),
(8, 'trivex', 'abcdefghijlk', 'You\'ll need a concave lens (curves inward) if you\'re nearsighted. A convex lens (curves outward) wil', 'Adult', 'black', 'corex', 5, 500, 400, '', '', '', '2021-07-14', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sold_invoices`
--

CREATE TABLE `sold_invoices` (
  `invoice_id` int(100) NOT NULL,
  `cart_id` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sold_invoices`
--

INSERT INTO `sold_invoices` (`invoice_id`, `cart_id`, `date`, `time`) VALUES
(1, 1, '2021-07-13', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_authorizenet_payment`
--

CREATE TABLE `tbl_authorizenet_payment` (
  `id` int(11) NOT NULL,
  `custormer_id` int(100) NOT NULL,
  `custormer_name` varchar(100) NOT NULL,
  `transaction_id` varchar(25) NOT NULL,
  `auth_code` varchar(25) NOT NULL,
  `response_code` varchar(25) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `payment_status` varchar(25) NOT NULL,
  `payment_response` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_authorizenet_payment`
--

INSERT INTO `tbl_authorizenet_payment` (`id`, `custormer_id`, `custormer_name`, `transaction_id`, `auth_code`, `response_code`, `amount`, `payment_status`, `payment_response`, `create_at`) VALUES
(1, 0, '', '0', '', '3', 151.51, 'Error', 'The credit card has expired.', '2021-09-02 18:52:20'),
(2, 0, '', '0', '', '3', 151.51, 'Error', 'The credit card has expired.', '2021-09-02 18:52:42'),
(3, 0, '', '0', '', '3', 151.51, 'Error', 'The credit card has expired.', '2021-09-02 18:53:07'),
(4, 0, '', '0', '', '3', 151.51, 'Error', 'The credit card has expired.', '2021-09-02 19:21:50'),
(5, 0, '', '0', '', '3', 151.51, 'Error', 'The credit card has expired.', '2021-09-02 19:28:11'),
(6, 0, '', '0', '', '3', 151.51, 'Error', 'The credit card has expired.', '2021-09-02 19:30:30'),
(7, 0, '', '0', '', '3', 151.51, 'Error', 'The credit card has expired.', '2021-09-02 19:31:06'),
(8, 0, '', '0', '', '3', 151.51, 'Error', 'The credit card has expired.', '2021-09-02 19:34:23'),
(9, 0, '', '0', '', '3', 151.51, 'Error', 'The credit card has expired.', '2021-09-02 19:34:43'),
(10, 0, '', '0', '', '3', 13344.00, 'Error', 'The credit card has expired.', '2021-09-02 19:35:03'),
(11, 0, '', '60173939925', '4TQLOG', '1', 54.00, 'Approved', 'This transaction has been approved.', '2021-09-02 19:35:45'),
(12, 0, '', '0', '', '3', 54.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-02 19:36:08'),
(13, 0, '', '0', '', '3', 54.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-02 19:36:41'),
(14, 0, '', '0', '', '3', 99999999.99, 'Error', 'A valid amount is required.', '2021-09-02 19:37:14'),
(15, 0, '', '0', '', '3', 688.00, 'Error', 'The credit card has expired.', '2021-09-02 19:37:41'),
(16, 0, '', '0', '', '3', 456.00, 'Error', 'The credit card has expired.', '2021-09-02 19:38:32'),
(17, 0, '', '60173939957', 'OC4E49', '1', 440.00, 'Approved', 'This transaction has been approved.', '2021-09-02 19:39:06'),
(18, 0, '', '0', '', '3', 456.00, 'Error', 'The credit card has expired.', '2021-09-02 19:40:53'),
(19, 0, '', '60173940056', 'YDEFAW', '1', 440.00, 'Approved', 'This transaction has been approved.', '2021-09-02 19:41:48'),
(20, 0, '', '60173940867', '1A7521', '1', 440.00, 'Approved', 'This transaction has been approved.', '2021-09-02 20:09:37'),
(21, 0, '', '0', '', '3', 440.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-02 20:09:51'),
(22, 0, '', '0', '', '3', 440.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-02 20:10:45'),
(23, 0, '', '0', '', '3', 440.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-02 20:11:13'),
(24, 0, '', '0', '', '3', 440.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-02 20:11:22'),
(25, 0, '', '60173940945', 'QV3YQO', '1', 4440.00, 'Approved', 'This transaction has been approved.', '2021-09-02 20:11:49'),
(26, 0, '', '0', '', '3', 4440.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-02 20:12:03'),
(27, 0, '', '0', '', '3', 4440.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-02 20:12:10'),
(28, 0, '', '60173940968', 'H5Y8L5', '1', 990.00, 'Approved', 'This transaction has been approved.', '2021-09-02 20:12:34'),
(29, 0, '', '60173996986', 'FVCQ4X', '1', 440.00, 'Approved', 'This transaction has been approved.', '2021-09-03 04:41:41'),
(30, 0, '', '60173999239', '357E4O', '1', 990.00, 'Approved', 'This transaction has been approved.', '2021-09-03 05:06:21'),
(31, 0, '', '60174168025', 'BUFF09', '1', 440.00, 'Approved', 'This transaction has been approved.', '2021-09-06 19:51:50'),
(32, 0, '', '60174168103', 'QVK24X', '1', 440.00, 'Approved', 'This transaction has been approved.', '2021-09-06 19:55:32'),
(33, 0, '', '60174168948', 'UETDTG', '1', 440.00, 'Approved', 'This transaction has been approved.', '2021-09-06 20:37:49'),
(34, 0, '', '60174169000', '42VBA2', '1', 440.00, 'Approved', 'This transaction has been approved.', '2021-09-06 20:41:06'),
(35, 0, '', '0', '', '3', 440.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-06 20:42:18'),
(36, 0, '', '60174169080', 'SAFVAB', '1', 440.00, 'Approved', 'This transaction has been approved.', '2021-09-06 20:47:05'),
(37, 0, '', '0', '', '3', 440.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-06 20:48:25'),
(38, 0, '', '0', '', '3', 440.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-06 20:49:00'),
(39, 0, '', '60174169144', 'XM2454', '1', 440.00, 'Approved', 'This transaction has been approved.', '2021-09-06 20:51:22'),
(40, 0, '', '0', '', '3', 440.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-06 20:51:48'),
(41, 0, '', '0', '', '3', 440.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-06 20:52:19'),
(42, 0, '', '0', '', '3', 440.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-06 20:52:49'),
(43, 0, '', '0', '', '3', 440.00, 'Error', 'A duplicate transaction has been submitted.', '2021-09-06 20:52:52'),
(44, 0, '', '60174189687', 'DZ6RNC', '1', 440.00, 'Approved', 'This transaction has been approved.', '2021-09-06 21:33:36'),
(45, 2, 'rafay.com', '60174189691', 'BZQQGG', '1', 138.00, 'Approved', 'This transaction has been approved.', '2021-09-06 21:33:43'),
(46, 0, '', '40073891319', 'BKI49H', '1', 440.00, 'Approved', 'This transaction has been approved.', '2021-09-06 22:32:51'),
(47, 0, '', '0', '', '3', 0.00, 'Error', 'A valid amount is required.', '2021-09-06 10:43:48'),
(48, 2, 'rafay.com', '60174192475', 'AS2J8K', '1', 182.00, 'Approved', 'This transaction has been approved.', '2021-09-06 10:47:28'),
(49, 2, 'rafay.com', '40073934348', 'FRABWM', '1', 182.00, 'Approved', 'This transaction has been approved.', '2021-09-07 06:04:59'),
(50, 2, 'rafay.com', '40073939617', 'TSL9HH', '1', 182.00, 'Approved', 'This transaction has been approved.', '2021-09-07 07:42:21'),
(51, 2, 'rafay.com', '0', '', '3', 182.00, 'Error', 'The credit card has expired.', '2021-09-07 07:42:43'),
(52, 2, 'rafay.com', '40073939713', '35EIVD', '1', 182.00, 'Approved', 'This transaction has been approved.', '2021-09-07 07:43:30'),
(53, 2, 'rafay.com', '0', '', '3', 182.00, 'Error', 'The credit card has expired.', '2021-09-07 07:44:47'),
(54, 2, 'rafay.com', '0', '', '3', 1026.00, 'Error', 'The credit card number is invalid.', '2021-09-08 09:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `date`, `time`) VALUES
(1, 'huzaifa', '12345', '0000-00-00', '00:00:00'),
(2, 'qaim', '12345', '2021-07-13', '15:39:29'),
(3, 'rafay', '12345', '2021-07-13', '15:39:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `glasses_table`
--
ALTER TABLE `glasses_table`
  ADD PRIMARY KEY (`glass_id`);

--
-- Indexes for table `lense_table`
--
ALTER TABLE `lense_table`
  ADD PRIMARY KEY (`lense_id`);

--
-- Indexes for table `sold_invoices`
--
ALTER TABLE `sold_invoices`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `cart_id` (`invoice_id`),
  ADD KEY `customer_id` (`cart_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `tbl_authorizenet_payment`
--
ALTER TABLE `tbl_authorizenet_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `booking_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `glasses_table`
--
ALTER TABLE `glasses_table`
  MODIFY `glass_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lense_table`
--
ALTER TABLE `lense_table`
  MODIFY `lense_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sold_invoices`
--
ALTER TABLE `sold_invoices`
  MODIFY `invoice_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_authorizenet_payment`
--
ALTER TABLE `tbl_authorizenet_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
