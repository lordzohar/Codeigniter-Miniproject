-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2017 at 02:09 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kisaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `id` int(5) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`id`, `state`) VALUES
(7, 'goa'),
(0, 'gujrat'),
(4, 'jharkhand'),
(6, 'karnataka'),
(8, 'kerela'),
(4, 'madhyapradesh'),
(1, 'maharastra'),
(3, 'rajasthan'),
(7, 'tamilnadu'),
(5, 'west bengal');

-- --------------------------------------------------------

--
-- Table structure for table `marketlist`
--

CREATE TABLE `marketlist` (
  `state` varchar(50) NOT NULL,
  `market_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `market_list`
--

CREATE TABLE `market_list` (
  `marketname` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `pricemin` int(100) NOT NULL,
  `pricemax` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `password` varchar(512) NOT NULL,
  `mobilenumber` varchar(255) NOT NULL,
  `gender` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `Firstname`, `Lastname`, `password`, `mobilenumber`, `gender`) VALUES
(12, 'shanu', 'shaikh', '141', 'f9fcafd53e349e553ccd0a3bd7316bf7b5fc47c1cfd48e2cdd7ca9d475f4e8cc40006aaf73dc51638934c695b408a664e91a2edcc87ba29a00b6a6a238131bca', '1234567895', 'male'),
(13, 'taha', 'pipewala', '12345', 'ebaf1e136087d9812a2953ccfb8294b1b279757336f56247793fe20934fa8b2a2427fac631746ea0046f447ed9727783ea96548eb2cd96b66f7f9f08f4e5085b', '1234647897', 'male'),
(14, 'akshaykk', 'akshay', 'kharmale', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', '2147483647', 'male'),
(15, 'mehfooz ali', 'mehfooz', 'sayyed', 'b771a93ca1a45b45e77acfc712f30acc6cec74d3df3da1a1a2fe8c1396c314aafff860bed82a1364ab68c3bbddd0268b1848ca178eac8da58fc302e87056bcfe', '2147483647', 'male'),
(18, 'zohar123', 'zohar', 'mobiwala', 'd9e6762dd1c8eaf6d61b3c6192fc408d4d6d5f1176d0c29169bc24e71c3f274ad27fcd5811b313d681f7e55ec02d73d499c95455b6b5bb503acf574fba8ffe85', '8655519166', 'male'),
(19, 'abhay', 'abhay', 'gavandi', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', '1234567891', 'male'),
(20, 'abhay', 'abhay', 'gavandi', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', '1234567891', 'male'),
(21, 'abhay', 'abhay', 'gavandi', '3627909a29c31381a071ec27f7c9ca97726182aed29a7ddd2e54353322cfb30abb9e3a6df2ac2c20fe23436311d678564d0c8d305930575f60e2d3d048184d79', '1234567891', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `shopname` varchar(100) NOT NULL,
  `shopaddress` varchar(100) NOT NULL,
  `dealername` varchar(100) NOT NULL,
  `dealernumber` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`state`, `city`, `shopname`, `shopaddress`, `dealername`, `dealernumber`, `area`, `price`) VALUES
('maharastra', 'pune', '', '20000 sqft plot available for rent prime location at baner-Mahalunge road', 'Dream Door Real Estate', '', '20000 sqft', 200000),
('maharastra', 'nashik', '', 'Borgad Air Force Colony, Nashik Added via ', 'mohidkokni', '', '', 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`state`);

--
-- Indexes for table `marketlist`
--
ALTER TABLE `marketlist`
  ADD PRIMARY KEY (`state`),
  ADD UNIQUE KEY `market_name` (`market_name`);

--
-- Indexes for table `market_list`
--
ALTER TABLE `market_list`
  ADD PRIMARY KEY (`marketname`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`dealername`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `marketlist`
--
ALTER TABLE `marketlist`
  ADD CONSTRAINT `marketlist_ibfk_1` FOREIGN KEY (`state`) REFERENCES `market` (`state`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `market_list`
--
ALTER TABLE `market_list`
  ADD CONSTRAINT `market_list_ibfk_1` FOREIGN KEY (`marketname`) REFERENCES `marketlist` (`market_name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
