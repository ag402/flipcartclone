-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2024 at 08:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flipcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--



-- --------------------------------------------------------

--
-- Table structure for table `tblorderaddresses`
--
--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) NOT NULL,
  `MobileNumber` bigint(10) NOT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', '                <b>        We Help Shopkeepers To Grow Their Bussiness</b><div>Welcome to FLIPCART, your premier e-commerce destination. We blend technology and commerce for an exceptional online shopping experience. Our mission: empower businesses, support shopkeepers, and enhance your journey.\r\n<br><br>\r\n\r\nFLIPCART gives help to get daily changing prices of every item..<br></div><div><br></div>', '', 0, '2024-03-22 20:24:14'),
(2, 'contactus', 'Contact Us', '<div>Nanded ,Maharashtra,India.</div>', 'akash@flipcart.com', 9834268086, '2024-03-22 07:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `ID` int(10) NOT NULL,
  `description` varchar(120) DEFAULT NULL,
  `category` varchar(120) DEFAULT NULL,
  `Size` varchar(120) DEFAULT NULL,
  `Price` int(10) DEFAULT NULL,
  `Image` varchar(120) DEFAULT NULL,
  `EntryDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`ID`, `description`, `category`, `Size`, `Price`, `Image`, `EntryDate`) VALUES
(30, 'Lv', 'Mens', 'XL', 55, '4625b26a742678bb6328814d603b32e0.png', '2023-12-18 13:20:27'),
(32, 'jo', 'Kids', 'XXXL', 4500, 'cb144d6dbf099aa4f1812d82bf511932.png', '2023-12-18 13:23:10'),
(33, 'pro', 'Mens', 'L', 22, '59f85551dabd224db7350b20f9a27f0e.png', '2023-12-18 13:25:07'),
(34, 'electronics', 'electronics', 'free', 1100, 'earphone.png', '2023-12-18 13:25:07'),
(35, 'electronics', 'electronics', 'free', 15500, 'computer.png', '2023-12-18 13:25:07'),
(35, 'electronics', 'electronics', 'free', 0000, 'powerbank.png', '2023-12-18 13:25:07'),
(35, 'electronics', 'electronics', 'free', 1000, 'charger.png', '2023-12-18 13:25:07'),
(35, 'electronics', 'electronics', 'free', 10000, 'washing machine.png', '2023-12-18 13:25:07');
-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `MobileNo` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `MobileNo`, `Email`, `Password`, `RegDate`) VALUES
(9, 'Akash Ghogare', 9834268086, 'akash@gmail.com', 'akash', '2023-12-18 13:15:11');
