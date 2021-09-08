-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 11:19 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(48, 4, 'Qaim Mehdi', 'Johar', 112871, 3, 'Rado max', 'sdaf', 'black', 'asdf', 1, 44, '12', '12', '12', 'damn', '12', '12', '12', 'damn', 'transition', 'thinner', 'reading only', '2021-07-30', '11:46:24'),
(49, 4, 'Qaim Mehdi', 'Johar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, '2', '2', '2', 'damn', '2', '2', '2', 'damn', 'transition', 'thinner', 'distance only', '2021-07-30', '11:47:44'),
(51, 4, 'Qaim Mehdi', 'Johar', 112871, 3, 'Rado max', 'sdaf', 'black', 'asdf', 1, 44, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-07-30', '15:42:57'),
(52, 4, 'Qaim Mehdi', 'Johar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-08-02', '16:37:20'),
(53, 4, 'Qaim Mehdi', 'Johar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-08-02', '16:37:35'),
(54, 4, 'Qaim Mehdi', 'Johar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-08-02', '16:38:13'),
(55, 4, 'Qaim Mehdi', 'Johar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-08-02', '16:40:55'),
(56, 4, 'Qaim Mehdi', 'Johar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-08-02', '18:49:20'),
(57, 4, 'Qaim Mehdi', 'Johar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-08-02', '19:31:16'),
(58, 4, 'Qaim Mehdi', 'Johar', 14108, 3, 'dslr pro max', 'canon', 'black', 'chicago', 1, 44, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-08-03', '13:52:34'),
(59, 4, 'Qaim Mehdi', 'Johar', 14108, 3, 'dslr pro max', 'canon', 'black', 'chicago', 1, 44, '2', '60', '20', '', '2', '60', '20', '', 'transition', 'thinner', 'Distance Only', '2021-08-03', '13:53:50'),
(60, 4, 'Qaim Mehdi', 'Johar', 112871, 3, 'Rado max', 'sdaf', 'black', 'asdf', 1, 44, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-08-03', '17:52:17'),
(61, 4, 'Qaim Mehdi', 'Johar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, '2', '2', '2', 'damn', '2', '2', '2', 'damn', 'transition', 'thinner', 'reading only', '2021-08-03', '18:00:46'),
(62, 4, 'Qaim Mehdi', 'Johar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-08-03', '18:02:50'),
(63, 4, 'Qaim Mehdi', 'Johar', 112871, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-08-03', '18:39:46'),
(68, 12, 'jameel', 'malir', 3343415, 2, 'Rado max pro', 'sdaf', 'black', 'asdf', 1, 44, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-08-03', '19:11:29'),
(69, 4, 'Qaim Mehdi', 'Johar', 14108, 3, 'dslr pro max', 'canon', 'black', 'chicago', 1, 44, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-08-03', '19:11:55'),
(70, 12, 'jameel', 'malir', 3343415, 3, 'dslr pro max', 'canon', 'black', 'chicago', 1, 44, '5', '5', '5', 'damn', '5', '5', '5', '5', 'transition', 'thinner', 'reading only', '2021-08-03', '19:16:35'),
(71, 12, 'jameel', 'malir', 3343415, 4, 'dslr pro max', 'canon', 'black', 'chicago', 1, 44, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-08-03', '19:19:41'),
(73, 2, 'rafay', 'johar', 334347, 18, 'edwdw', 'fff', 'ff', 'ff', 1, 2222, '2', '2', '2', 'damn', '2', '2', '2', 'damn', 'transition', 'thinner', 'reading only', '2021-08-04', '17:24:50'),
(74, 2, 'rafay', 'johar', 334347, 29, 'huzaifa', 'canon', 'black', 'chicago', 1, 5000, '0', '0', '0', '', '0', '0', '0', '', '', '', '', '2021-08-05', '12:51:43');

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
(2, 'rafay', 'johar', 334347, 'rafay.com', '12345', '2021-07-13', '00:00:00'),
(3, 'farzain', 'johar', 334347, 'farizain@gmail.com', '12345', '2021-07-13', '00:00:00'),
(4, 'qaim', 'johar', 334347, 'qaim@gmail.com', '12345', '2021-07-13', '15:21:17'),
(12, 'jameel', 'malir', 3343415, 'jameel@gmail.com', '12345', '2021-07-13', '15:29:13'),
(14, '', 'hyderabad', 30303, 'huzaifahussain336@gmail.com', '12345', '2021-07-16', '11:47:12'),
(15, 'huzaifahussain', 'hyderabad', 30303, 'huzaifahussain336@gmail.com', '12345', '2021-07-16', '11:49:05'),
(16, 'Huzaifa Hussain', 'hyderabad', 123456789, 'huzaifahussain336@gmail.com', '12345', '2021-07-16', '23:02:27'),
(17, 'Huzaifa Hussain', 'hyderabad', 123456789, 'huzaifahussain336@gmail.com', '12345', '2021-07-16', '23:04:43'),
(18, 'Huzaifa Hussain', 'hyderabad', 123456789, 'huzaifahussain336@gmail.com', '12345', '2021-07-16', '23:04:49'),
(19, 'admin', 'B352', 2147483647, 'admin@site.com', 'admin', '2021-07-30', '17:12:39'),
(20, 'admin', 'B352', 2147483647, 'admin@site.com', 'admin', '2021-07-30', '17:14:20'),
(21, 'admin', 'B352', 2147483647, 'jardin.restaurant1@gmail.com', 'admin', '2021-07-30', '17:15:01'),
(22, 'admin', 'B352', 2147483647, 'jardin.restaurant1@gmail.com', 'admin', '2021-07-30', '17:22:32'),
(23, 'Khizarkhan203', 'House no 4 GS-2 larax Colony Mughalpura road nishter park near karachi phatak step grammer school gh', 2147483647, 'khankhizar203@gmail.com', 'khizar12345', '2021-08-03', '11:33:58'),
(24, 'qaim', 'n 1345656', 2147483647, 'qaim490@gmail.com', '12345', '2021-08-03', '13:51:36');

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
(15, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, '', '', '', '2021-07-27', '17:11:32'),
(16, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, '', '', '', '2021-07-27', '17:12:23'),
(17, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, '', '', '', '2021-07-27', '17:15:06'),
(18, 'edwdw', 'wdw', 'awdwdadwdwdqwfe', 'fff', 'ff', 'ff', 222, 222, 2222, 'e8d84d22-24bd-4f74-a66b-dd49fc4cf6b2.jpg', '', '', '2021-07-30', '19:41:43'),
(19, 'edwdw', 'wdw', 'awdwdadwdwdqwfe', 'fff', 'ff', 'ff', 222, 222, 2222, 'e8d84d22-24bd-4f74-a66b-dd49fc4cf6b2.jpg', '', '', '2021-07-30', '19:43:04'),
(20, 'edwdw', 'wdw', 'gtgt', 'fff', 'ff', 'gtrgg', 222, 222, 2222, 'a11b4378-0ef7-4c06-924f-ef6b4442ad81.jpg', 'img1.PNG', '', '2021-08-02', '11:17:48'),
(21, 'edwdw', 'wdw', 'gtgt', 'fff', 'ff', 'gtrgg', 222, 222, 2222, 'a11b4378-0ef7-4c06-924f-ef6b4442ad81.jpg', 'img1.PNG', '', '2021-08-02', '11:22:51'),
(22, 'edwdw', 'wdw', 'gtgt', 'fff', 'ff', 'gtrgg', 222, 222, 2222, 'a11b4378-0ef7-4c06-924f-ef6b4442ad81.jpg', 'img1.PNG', '', '2021-08-02', '11:28:30'),
(27, 'rafay', 'abcd', 'efgh', 'canon', 'black', 'chicago', 5000, 5000, 5000, 'the joker wine 1600x900 wallpaper_www.wallpapername.com_28 (1).jpg', 'mercedes-cls63-wallpaper-3.jpg', 'Games-3D-Wallpapers-012.jpg', '2021-08-03', '20:04:51'),
(28, 'huzaifa', 'abcd', 'efgh', 'canon', 'black', 'chicago', 5000, 5000, 5000, 'wallpapersden.com_astronaut-exploring-space_1600x900.jpg', 'Untitleda.png', 'man_mask_car_150649_1600x900.jpg', '2021-08-03', '20:09:09'),
(29, 'huzaifa', 'abcd', 'efgh', 'canon', 'black', 'chicago', 5000, 5000, 5000, 'wallpapersden.com_astronaut-exploring-space_1600x900.jpg', 'Untitleda.png', 'man_mask_car_150649_1600x900.jpg', '2021-08-03', '20:13:18'),
(30, 'Rado max', 'abcd', 'sadf', 'canon', 'black', 'asdf', 2, 500, 44, 'Games-3D-Wallpapers-012.jpg', 'green-snake-wallpaper-2560x1600.jpeg', 'ford-raptor-4k-tw-1600x900.jpg', '2021-08-03', '20:14:00'),
(31, 'Rado max', 'abcd', 'sadf', 'canon', 'black', 'asdf', 2, 500, 44, 'Games-3D-Wallpapers-012.jpg', 'green-snake-wallpaper-2560x1600.jpeg', 'ford-raptor-4k-tw-1600x900.jpg', '2021-08-03', '20:18:30'),
(32, 'Rado max', 'sdf', 'sadf', 'sdaf', 'asdf', 'asdf', 2, 44, 5000, '1600x900-Wallpapers-HD-For-Desktop.jpg', '1969-Ford-Mustang-car-back-view-motel-neon-night_1600x900.jpg', 'ford-raptor-4k-tw-1600x900.jpg', '2021-08-03', '20:19:03'),
(33, 'Rado max', 'sdf', 'sadf', 'sdaf', 'asdf', 'asdf', 2, 44, 5000, '1600x900-Wallpapers-HD-For-Desktop.jpg', '1969-Ford-Mustang-car-back-view-motel-neon-night_1600x900.jpg', 'ford-raptor-4k-tw-1600x900.jpg', '2021-08-03', '20:23:48'),
(34, 'ponka', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 2, 44, 44, 'green-snake-wallpaper-2560x1600.jpeg', 'green-snake-wallpaper-2560x1600.jpeg', 'ford-raptor-4k-tw-1600x900.jpg', '2021-08-03', '20:24:18'),
(35, 'Rado max', 'sdf', 'sadf', 'sdaf', 'black', 'asdf', 50, 44, 5000, 'Games-3D-Wallpapers-012.jpg', 'green-snake-wallpaper-2560x1600.jpeg', 'ford-raptor-4k-tw-1600x900.jpg', '2021-08-03', '20:26:41'),
(36, 'ponka', 'sdf', 'sadf', 'canon', 'black', 'asdf', 2, 44, 5000, 'green-snake-wallpaper-2560x1600.jpeg', 'joker-with-gun-4k-8y-1600x900.jpg', 'ford-raptor-4k-tw-1600x900.jpg', '2021-08-03', '20:28:13');

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
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
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
(8, 'trivex', 'abcdefghijlk', 'You\'ll need a concave lens (curves inward) if you\'re nearsighted. A convex lens (curves outward) wil', 'Adult', 'black', 'corex', 5, 500, 400, '', '', '', '2021-07-14', '00:00:00'),
(9, 'uii', 'uvbhkj', 'hibjkn', 'hbkbjkj', 'blochj', 'gtrgg', 222, 222, 78, 'vision (1).png', 'images.PNG', 'Capture.PNG', '2021-08-02', '12:18:58'),
(10, 'uii', 'tggtg', 'gtgt', 'fff', 'gtrgtr', 'gtrgg', 222, 222, 2222, 'Capture.PNG', 'download.png', 'gd.PNG', '2021-08-02', '12:49:18'),
(11, 'uii', 'wdw', 'awdwdadwdwdqwfe', 'fff', 'gtrgtr', 'gtrgg', 222, 222, 2222, 'Capture.PNG', 'Capture.PNG', 'Capture.PNG', '2021-08-02', '13:02:31');

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
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `glasses_table`
--
ALTER TABLE `glasses_table`
  MODIFY `glass_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `lense_table`
--
ALTER TABLE `lense_table`
  MODIFY `lense_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sold_invoices`
--
ALTER TABLE `sold_invoices`
  MODIFY `invoice_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
