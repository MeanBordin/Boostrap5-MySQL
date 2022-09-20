-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 07:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminId` varchar(10) NOT NULL,
  `AdminName` varchar(20) NOT NULL,
  `Location` varchar(10) NOT NULL,
  `Mod-Date` date NOT NULL,
  `C-Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminId`, `AdminName`, `Location`, `Mod-Date`, `C-Date`) VALUES
('a1001', 'Admin1', 'pathumthan', '2022-11-17', '2023-01-13'),
('a1002', 'Admin2', 'bangkok', '2022-11-18', '2023-04-21'),
('a1003', 'Admin3', 'singburi', '2022-11-11', '2023-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `CartId` varchar(10) NOT NULL,
  `Price` float NOT NULL,
  `Total` float DEFAULT NULL,
  `Product` varchar(20) NOT NULL,
  `Number of Product` int(11) NOT NULL,
  `C-Date` date NOT NULL,
  `Mod-Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`CartId`, `Price`, `Total`, `Product`, `Number of Product`, `C-Date`, `Mod-Date`) VALUES
('cc1001', 220, NULL, 'champoo', 1, '2022-09-09', '2022-09-10'),
('cc1002', 220, NULL, 'condition', 1, '2022-09-10', '2022-09-11'),
('cc1003', 220, NULL, 'detergent', 1, '2022-09-11', '2022-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `c_date` date NOT NULL,
  `mod_date` date NOT NULL,
  `postcode` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `email`, `location`, `date_of_birth`, `c_date`, `mod_date`, `postcode`) VALUES
('c2001', 'user1', 'user101@gmail.com', 'pathumthani', '2022-09-01', '2022-11-02', '2023-01-12', 11111),
('c2002', 'user2', 'user102@gmail.com', 'bangkok', '2022-09-02', '2022-10-03', '2022-11-23', 11112),
('c2003', 'user3', 'dqwd@hotmali.com', 'singburi', '2022-09-19', '2022-09-20', '2024-06-18', 14202),
('c2004', 'user4', 'bgasad@gmail.com', 'bangkok', '2022-12-01', '2024-01-01', '2026-02-01', 16110);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` varchar(10) NOT NULL,
  `customer_id` varchar(10) NOT NULL,
  `cart_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `customer_id`, `cart_id`) VALUES
('v1001', 'c2002', 'cc1001'),
('v1002', 'c2002', 'cc1002'),
('v1003', 'c2003', 'cc1003');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` varchar(255) NOT NULL,
  `location_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `location_name`) VALUES
('l1001', 'pathumthani'),
('l1002', 'bangkok'),
('l1003', 'singburi');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `c_date` date NOT NULL,
  `mod_date` date NOT NULL,
  `price` float NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `c_date`, `mod_date`, `price`, `deleted`, `image`) VALUES
('p1001', 'champoo', '2022-12-08', '2023-06-16', 220, 1, ''),
('p1002', 'condition', '2022-09-01', '2023-07-21', 220, 1, ''),
('p1003', 'detergent', '2022-11-18', '2023-05-18', 220, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `promotion`
--

CREATE TABLE `promotion` (
  `promotion_id` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `c_date` date NOT NULL,
  `mod_date` date NOT NULL,
  `promotion_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotion`
--

INSERT INTO `promotion` (`promotion_id`, `c_date`, `mod_date`, `promotion_name`) VALUES
('pm2001', '2022-02-19', '2022-11-30', '8.8'),
('pm2002', '2022-09-22', '2022-09-26', '11.11'),
('pm2003', '2022-09-23', '2022-09-24', '12.12'),
('pm2004', '2022-12-31', '2022-12-01', '7.7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CartId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`promotion_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
