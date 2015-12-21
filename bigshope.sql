-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2015 at 06:20 PM
-- Server version: 5.0.27-community-nt
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bigshope`
--
CREATE DATABASE IF NOT EXISTS `bigshope` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bigshope`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `first` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `dob` int(10) NOT NULL,
  `gender` text NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`first`, `last`, `email`, `pass`, `dob`, `gender`) VALUES
('Divesh', 'J', 'dj12@g.com', '123456', 1, 'Male'),
('Divesh', 'J', 'dj1@g.com', '', 1, 'Male'),
('Divesh', 'J', 'dj@g.com', '123456789', 1, 'Male'),
('vijay', 'd', 'vijay@gmail.com', 'vijay123', 1, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `Lid` int(10) NOT NULL auto_increment,
  `dis` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY  (`Lid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`Lid`, `dis`, `price`) VALUES
(1, 'Titan Analog Watch - For Men', 5599),
(2, 'Titan Analog Watch - For Men', 5599),
(3, 'Titan Analog Watch - For Men', 5599);

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE IF NOT EXISTS `productcategory` (
  `pcid` int(11) NOT NULL auto_increment,
  `pcdis` varchar(255) NOT NULL,
  `fk_ptypeid` int(11) NOT NULL,
  PRIMARY KEY  (`pcid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`pcid`, `pcdis`, `fk_ptypeid`) VALUES
(1, 'Mobiles', 1),
(2, 'Laptops', 1),
(3, 'Cameras', 1),
(4, 'Television', 1),
(5, 'footware', 2),
(6, 'clothing', 2),
(7, 'watches', 2),
(8, 'footware', 3),
(9, 'clothing', 3),
(10, 'Watches', 3),
(11, 'clothing', 4),
(12, 'footware', 4),
(13, 'books', 5),
(14, 'gaming', 5);

-- --------------------------------------------------------

--
-- Table structure for table `productsubcategory`
--

CREATE TABLE IF NOT EXISTS `productsubcategory` (
  `psid` int(11) NOT NULL auto_increment,
  `fk_pcid` int(11) NOT NULL,
  `psdis` varchar(200) NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY  (`psid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `productsubcategory`
--

INSERT INTO `productsubcategory` (`psid`, `fk_pcid`, `psdis`, `price`) VALUES
(1, 1, 'Apple iPhone 5S', 40),
(2, 1, 'Lenovo A6000', 6),
(3, 1, 'Samsung Galaxy Note 3 Neo', 21),
(4, 1, 'Moto g', 1),
(5, 2, 'Asus EeeBook X205TA (90NL0733-M04230) Netbook (4th Gen Atom Quad Core/ 2GB/ 32GB EMMC/ Windows 8.1)', 43),
(6, 2, 'HP 15-g049AU Notebook (APU Quad Core A8/ 4GB/ 500GB/ Win8.1) (K5B45PA)', 31),
(7, 2, 'HP Compaq 15-s104TX Notebook (4th Gen Ci5/ 4GB/ 1TB/ Free DOS/ 2GB Graph) (K8T88PA)', 31),
(8, 2, 'Lenovo G50-30 Notebook', 28),
(9, 3, 'Canon PowerShot SX520 HS', 11),
(10, 3, 'Nikon D3300 DSLR Camera', 31),
(11, 3, 'Nikon L29 Point & Shoot Camera', 3),
(12, 4, 'Samsung 40H5500 102 cm (40) LED TV', 49999),
(13, 4, 'Sony BRAVIA KDL- 42W700B 106.7 cm (42) LED TV', 64900),
(14, 4, 'LG 42LB5820 106 cm (42) LED TV', 49990),
(15, 4, 'Micromax 50B5000FHD 127 cm (50) LED TV', 34490),
(16, 5, 'Puma Limnos CAT Ind. Sneakers', 1399),
(17, 5, 'Nike Air Futurun 2 Running Shoes', 1399),
(18, 5, 'Nike Chroma Thong Iii Slippers', 1398),
(19, 5, 'Louis Philippe Corporate Casuals', 1399),
(20, 6, 'Being Human Clothing Men''s Solid Casual Shirt', 1399),
(21, 6, 'Highlander Solid Men''s Polo T-Shirt', 599),
(22, 6, 'United Colors of Benetton Slim Fit Men''s Trousers', 1399),
(23, 6, 'Newport Slim Fit Men''s Jeans', 599),
(24, 7, 'Casio Enticer Analog Watch - For Men', 4599),
(25, 7, 'Giordano Analog Watch - For Men', 15599),
(26, 7, 'Titan Analog Watch - For Men', 5599),
(27, 7, 'Titan Analog Watch - For Men', 5599),
(28, 7, 'Casio Fiber Collection Analog-Digital Watch - For Men', 7599),
(29, 8, 'Charu-Diva Design Studio Heels', 1599),
(30, 8, 'Plosh Heels', 1699),
(31, 8, 'Lovely Chick Wedges', 699),
(32, 9, 'Eavan Women''s Shift Dress', 1439),
(33, 9, 'Elle Skinny Fit Women''s Jeans', 2699),
(34, 9, 'Janasya Self Design Fashion Chiffon Sari', 1699),
(35, 9, 'Khantil Net Printed Semi-stitched Salwar Suit Dupatta Materia', 999),
(36, 10, 'Casio Sheen Analog Watch - For Women', 7195),
(37, 10, 'Maxima Swarovski Gold Analog Watch - For Women', 1185),
(38, 10, 'Titan Raga Analog Watch - For Women', 3499),
(39, 12, 'Disney Bellies', 375),
(40, 12, 'Disney Pooh Clogs', 350),
(41, 12, 'Puma Atom V Jr DP Sports Shoes', 1295),
(42, 12, 'Disney Mickey Clogs', 350),
(43, 11, 'Batman Boy''s Jeans', 999),
(44, 11, 'Gkidz Solid Boy''s Round Neck T-Shirt (Pack of 2)', 399),
(45, 11, 'Gini & Jony Regular Fit Boy''s Jeans', 999),
(46, 11, 'Looney Tunes Printed Boy''s Round Neck T-Shirt', 399),
(47, 11, 'Jazzup Girl''s A-line Dress', 705),
(48, 11, 'Ssmitn Girl''s Gathered Dress', 705),
(49, 11, 'Shoppertree Girl''s Gathered Dress', 599),
(50, 14, 'FIFA 14', 1300),
(51, 14, 'Grand Theft Auto V', 1300),
(52, 13, 'Travelling to Infinity: My Life with Stephen (English)(Hardcover)', 300),
(53, 13, 'One Life Is Not Enough : An Autobiography (English) (Hardcover)', 300);

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE IF NOT EXISTS `producttype` (
  `ptypeid` int(11) NOT NULL auto_increment,
  `ptypedis` varchar(255) NOT NULL,
  PRIMARY KEY  (`ptypeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`ptypeid`, `ptypedis`) VALUES
(1, 'electronics '),
(2, 'men'),
(3, 'women'),
(4, 'kids'),
(5, 'gaming');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
