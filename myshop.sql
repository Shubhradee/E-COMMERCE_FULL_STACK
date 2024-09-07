-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2024 at 08:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `userpassword` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `userpassword`) VALUES
('Shubhradeep Roy', 9883228584);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `Id` int(20) NOT NULL,
  `Pname` varchar(100) NOT NULL,
  `Pimage` varchar(200) NOT NULL,
  `Pprice` int(100) NOT NULL,
  `Pcategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`Id`, `Pname`, `Pimage`, `Pprice`, `Pcategory`) VALUES
(1, 'Safari Bag', 'uploadimage/bag1.jpeg', 2500, 'BAGS'),
(2, 'Macbook', 'uploadimage/laptop2.jpeg', 189999, 'LAPTOPS'),
(4, 'Acer Laptop', 'uploadimage/AcerLaptop.jpg', 189999, 'LAPTOPS'),
(5, 'Large size college bag', 'uploadimage/bag2.jpeg', 3500, 'BAGS'),
(6, 'Samsung Front-Load Washing Machine', 'uploadimage/samsung-washing-machine.jpg', 14000, 'ELECTRONICS'),
(7, 'OEM 50inch Smart LED TV', 'uploadimage/50-inch-smart-android-led-tv-500x500.jpeg', 15800, 'ELECTRONICS'),
(8, 'Samsung 80cm HD Smart TV', 'uploadimage/71S8iUPW9bL._AC_UF1000,1000_QL80_.jpg', 15239, 'ELECTRONICS'),
(9, 'Pytton RoundNeck Yellow T-shirt', 'uploadimage/s-t27-mtbl-pytton-original-imaghap3xwzjgfyr.jpeg', 299, 'CLOTHES'),
(10, 'Sports T-shirt', 'uploadimage/0001.jpeg', 250, 'CLOTHES'),
(11, 'Cotton Printed Full-Sleeve Shirt', 'uploadimage/Shirt.jpeg', 458, 'CLOTHES'),
(12, 'Apple IPhone 14Pro', 'uploadimage/MPU63_AV3.jfif', 134900, 'MOBILES'),
(20, 'Redmi 12pro', 'uploadimage/mobile1.jpeg', 25999, 'MOBILES'),
(21, 'Gaming Laptop', 'uploadimage/laptopgaming.jpeg', 209999, 'LAPTOPS');

-- --------------------------------------------------------

--
-- Table structure for table `usercart`
--

CREATE TABLE `usercart` (
  `Id` int(10) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `Pimage` varchar(100) NOT NULL,
  `Pprice` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `PQuantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usercart`
--

INSERT INTO `usercart` (`Id`, `PName`, `Pimage`, `Pprice`, `Name`, `PQuantity`) VALUES
(1, 'Redmi 12pro', 'uploadimage/mobile1.jpeg', 25999, 'Shubhradeep Roy', 7),
(2, 'Safari Bag', 'uploadimage/bag1.jpeg', 2500, 'Shubhradeep Roy', 2),
(3, 'Macbook', 'uploadimage/laptop2.jpeg', 189999, 'Shubhradeep Roy', 4),
(4, 'Safari Bag', 'uploadimage/bag1.jpeg', 2500, 'Sukhendu', 2),
(5, 'Redmi 12pro', 'uploadimage/mobile1.jpeg', 25999, 'Sukhendu', 3),
(6, 'Macbook', 'uploadimage/laptop2.jpeg', 189999, 'Sukhendu', 4),
(7, 'bag', 'uploadimage/bag2.jpeg', 2500, 'Sukhendu', 5),
(8, 'Acer Laptop', 'uploadimage/AcerLaptop.jpg', 189999, 'Sukhendu', 10),
(9, 'Safari Bag', 'uploadimage/bag1.jpeg', 2500, 'Sukhendu Roy', 5),
(10, 'Acer Laptop', 'uploadimage/AcerLaptop.jpg', 189999, 'Sukhendu Roy', 4),
(11, 'Apple IPhone 14Pro', 'uploadimage/MPU63_AV3.jfif', 134900, 'Sukhendu Roy', 2),
(35, 'Safari Bag', 'uploadimage/bag1.jpeg', 2500, 'Rahul Kumar', 2),
(36, 'Samsung 80cm HD Smart TV', 'uploadimage/71S8iUPW9bL._AC_UF1000,1000_QL80_.jpg', 15239, 'Rahul Kumar', 3),
(37, 'OEM 50inch Smart LED TV', 'uploadimage/50-inch-smart-android-led-tv-500x500.jpeg', 15800, 'Shubhradeep Roy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNo` bigint(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Email`, `PhoneNo`, `Password`, `Address`) VALUES
('Shubhradeep Roy', 'shubhradeeproy343@gmail.com', 7003096801, '$Hubhradeep1', '75 Aswini Nagar,P.O-Regent Park,Kolkata-700040'),
('Sukhendu Roy', 'sukhenduroy343@gmail.com', 9883228584, '$Hukhendu1', '75 Aswini Nagar,P.O-Regent Park,Kolkata-700040');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `usercart`
--
ALTER TABLE `usercart`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `usercart`
--
ALTER TABLE `usercart`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
