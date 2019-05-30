-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 30, 2019 at 09:28 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `win_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `brand_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_date`) VALUES
(1, 'Toyota', '2019-05-29 09:11:44'),
(2, 'Honda', '2019-05-29 09:11:44'),
(3, 'Misubishi', '2019-05-29 09:11:44'),
(4, 'Nissan', '2019-05-29 09:11:44'),
(5, 'Mazda', '2019-05-29 09:11:44'),
(6, 'Chevtolet', '2019-05-29 09:11:44'),
(7, 'Bmw', '2019-05-29 09:11:44'),
(8, 'Benz', '2019-05-29 09:11:44'),
(9, 'Ford', '2019-05-29 09:11:44'),
(10, 'Volvo Band', '2019-05-29 09:11:44'),
(11, 'test', '2019-05-30 09:15:04');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `color_id` varchar(30) NOT NULL,
  `brand_id` varchar(30) NOT NULL,
  `generation_id` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `image`, `name`, `color_id`, `brand_id`, `generation_id`, `price`, `date`) VALUES
(1, '61538988_868901500140742_3545348520477196288_n.jpg', 'Honda-Civic 1.5 Turbo-ปี 2018', 'Blue', 'Honda', 'Civic', 1104000, '2019-05-30 09:00:57'),
(2, '61741485_674556359681044_8593849836942393344_n.jpg', 'Honda-Accord HYBRID TECH-ปี 2019', 'Black', 'Honda', 'Accord', 1799000, '2019-05-30 09:00:57'),
(3, '52789761_2363038813728680_4268003306632118272_n.jpg', 'Honda-City V-ปี 2017', 'White', 'Honda', 'City', 649000, '2019-05-30 09:00:57'),
(4, '61643294_2333274930068983_134704175995944960_n.jpg', 'Toyota-Camry Hybrid 2.5 HV MY2019-ปี 2019', 'White', 'Toyota', 'Vios', 609000, '2019-05-30 08:57:01'),
(5, '52382644_2248769615374305_4256859116334481408_n.jpg', 'Nissan-Teana 2.0 XL Navi 2019', 'White', 'Nissan', 'Teana', 1476000, '2019-05-30 08:57:41'),
(6, '61635485_294290801264092_5244622631440744448_n.jpg', 'Nissan-March E-ปี 2013', 'White', 'Nissan', 'March', 479000, '2019-05-30 08:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `color_id` int(10) NOT NULL,
  `color_name` varchar(50) NOT NULL,
  `color_color` varchar(50) NOT NULL,
  `color_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`color_id`, `color_name`, `color_color`, `color_date`) VALUES
(1, 'White', '#ffffff', '2019-05-30 05:22:58'),
(2, 'Black', '#000000', '2019-05-30 05:22:58'),
(3, 'Red', '#ff0000', '2019-05-30 05:23:51'),
(4, 'Blue', '#0000ff', '2019-05-30 05:23:51'),
(5, 'test', '#000000', '2019-05-30 09:11:26'),
(6, 'test 2', '#fc1800', '2019-05-30 09:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `generations`
--

CREATE TABLE `generations` (
  `generation_id` int(10) NOT NULL,
  `generation_name` varchar(50) NOT NULL,
  `generation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `generations`
--

INSERT INTO `generations` (`generation_id`, `generation_name`, `generation_date`) VALUES
(1, 'Civic', '2019-05-30 06:37:46'),
(2, 'Accord', '2019-05-30 06:37:46'),
(3, 'City', '2019-05-30 06:38:15'),
(4, 'Camry', '2019-05-30 06:38:15'),
(5, 'Vios', '2019-05-30 06:38:46'),
(6, 'Mazda-3', '2019-05-30 06:38:46'),
(7, 'Teana', '2019-05-30 06:39:06'),
(8, 'March', '2019-05-30 06:39:06'),
(9, 'D-MAX', '2019-05-30 06:39:26'),
(10, 'Ranger', '2019-05-30 06:39:26'),
(11, 'Mustang', '2019-05-30 06:40:02'),
(12, 'GT-R', '2019-05-30 06:40:02'),
(13, 'Mercedes', '2019-05-30 06:40:49'),
(14, 'Swift', '2019-05-30 06:40:49'),
(15, 'test', '2019-05-30 09:14:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`color_id`);

--
-- Indexes for table `generations`
--
ALTER TABLE `generations`
  ADD PRIMARY KEY (`generation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `color_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `generations`
--
ALTER TABLE `generations`
  MODIFY `generation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
