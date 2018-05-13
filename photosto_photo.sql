-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2013 at 03:35 PM
-- Server version: 5.1.69-cll
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `photosto_photo`
--

-- --------------------------------------------------------

--
-- Table structure for table `photo_admin_login`
--

CREATE TABLE IF NOT EXISTS `photo_admin_login` (
  `adminId` int(222) NOT NULL AUTO_INCREMENT,
  `adminFullName` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `userName` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `roleId` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`adminId`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `photo_admin_login`
--

INSERT INTO `photo_admin_login` (`adminId`, `adminFullName`, `email`, `phone`, `userName`, `password`, `roleId`, `status`) VALUES
(1, 'Admin', 'stm@ymail.com', '98765432123', 'admin123', 'admin123', 0, 0),
(2, 'Admin User', 'user@xyz.com', '474764747476', 'user123', 'user123', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `photo_admin_modules`
--

CREATE TABLE IF NOT EXISTS `photo_admin_modules` (
  `moduleId` int(11) NOT NULL AUTO_INCREMENT,
  `moduleName` varchar(500) NOT NULL,
  `moduleStatus` tinyint(4) NOT NULL,
  PRIMARY KEY (`moduleId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `photo_admin_modules`
--

INSERT INTO `photo_admin_modules` (`moduleId`, `moduleName`, `moduleStatus`) VALUES
(1, 'admin', 1),
(2, 'users', 1),
(3, 'photographers', 1),
(4, 'images', 1),
(5, 'frames', 1),
(6, 'papers', 1),
(7, 'shop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `photo_admin_permission`
--

CREATE TABLE IF NOT EXISTS `photo_admin_permission` (
  `permissionId` int(11) NOT NULL AUTO_INCREMENT,
  `roleId` int(11) NOT NULL,
  `moduleId` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `add` int(11) NOT NULL,
  `edit` int(11) NOT NULL,
  `delete` int(11) NOT NULL,
  `permissionStatus` tinyint(4) NOT NULL,
  PRIMARY KEY (`permissionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `photo_admin_permission`
--

INSERT INTO `photo_admin_permission` (`permissionId`, `roleId`, `moduleId`, `view`, `add`, `edit`, `delete`, `permissionStatus`) VALUES
(1, 3, 1, 0, 0, 0, 0, 1),
(2, 3, 2, 1, 0, 1, 0, 1),
(3, 3, 3, 0, 0, 0, 1, 1),
(4, 3, 4, 1, 0, 0, 0, 1),
(5, 3, 5, 0, 0, 0, 1, 1),
(6, 3, 6, 0, 0, 1, 0, 1),
(7, 3, 7, 0, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `photo_admin_roles`
--

CREATE TABLE IF NOT EXISTS `photo_admin_roles` (
  `roleId` int(11) NOT NULL AUTO_INCREMENT,
  `roleName` varchar(500) NOT NULL,
  `roleType` varchar(200) NOT NULL,
  `roleLimit` varchar(500) NOT NULL,
  `rolesDescription` text NOT NULL,
  `createdDate` date NOT NULL,
  `updatedDate` date NOT NULL,
  `roleStatus` tinyint(4) NOT NULL,
  PRIMARY KEY (`roleId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `photo_admin_roles`
--

INSERT INTO `photo_admin_roles` (`roleId`, `roleName`, `roleType`, `roleLimit`, `rolesDescription`, `createdDate`, `updatedDate`, `roleStatus`) VALUES
(3, 'Role3', 'Type1', 'Limited1', 'desc', '2013-01-21', '2013-01-24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `photo_bill`
--

CREATE TABLE IF NOT EXISTS `photo_bill` (
  `billId` int(11) NOT NULL AUTO_INCREMENT,
  `orderId` int(11) NOT NULL,
  `billing_address1` text NOT NULL,
  `billing_address2` text NOT NULL,
  `billing_city` varchar(500) NOT NULL,
  `billing_companyname` varchar(500) NOT NULL,
  `billing_country` varchar(500) NOT NULL,
  `billing_email` varchar(500) NOT NULL,
  `billing_firstname` varchar(500) NOT NULL,
  `billing_lastname` varchar(500) NOT NULL,
  `billing_phone` varchar(500) NOT NULL,
  `billing_state` varchar(500) NOT NULL,
  `billing_zip` varchar(500) NOT NULL,
  PRIMARY KEY (`billId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `photo_bill`
--

INSERT INTO `photo_bill` (`billId`, `orderId`, `billing_address1`, `billing_address2`, `billing_city`, `billing_companyname`, `billing_country`, `billing_email`, `billing_firstname`, `billing_lastname`, `billing_phone`, `billing_state`, `billing_zip`) VALUES
(1, 1, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Assam', '456789'),
(2, 2, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Andhra Pradesh', '456789'),
(3, 3, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Bihar', '456789'),
(4, 4, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Andhra Pradesh', '456789'),
(5, 5, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Andaman & Nicobar', '456789'),
(6, 6, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Andaman & Nicobar', '456789'),
(7, 7, 'dgfdgfdg', 'fgfdgfd', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Andhra Pradesh', '456789'),
(8, 8, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Arunachal Pradesh', '456789'),
(9, 1, 'dgfdgfdg', 'fgfdgfd', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Arunachal Pradesh', '456789'),
(10, 2, 'dgfdgfdg', 'fgfdgfd', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Assam', '456789'),
(11, 3, 'dgfdgfdg', 'fgfdgfd', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Kerala', '456789'),
(12, 4, 'dgfdgfdg', 'fgfdgfd', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Kerala', '456789'),
(13, 5, 'dgfdgfdg', 'fgfdgfd', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Andaman & Nicobar', '456789'),
(14, 6, 'dgfdgfdg', 'fgfdgfd', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Andaman & Nicobar', '456789'),
(15, 7, 'dgfdgfdg', 'fgfdgfd', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Andaman & Nicobar', '456789'),
(16, 8, 'dgfdgfdg', 'fgfdgfd', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Andhra Pradesh', '456789'),
(17, 9, 'dgfdgfdg', 'fgfdgfd', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Andhra Pradesh', '456789'),
(18, 10, 'dgfdgfdg', 'fgfdgfd', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Andhra Pradesh', '456789'),
(19, 1, 'Bangalore', 'Bangalore', 'Bangalore', 'inertia', 'India', 'chitra@inertiainc.co.in', 'chaithra', 'inertia', '8123902142', 'Karnataka', '560091'),
(20, 2, 'Bangalore', 'Bangalore', 'Bangalore', 'inertia', 'India', 'chitra@inertiainc.co.in', 'chaithra', 'inertia', '8123902142', 'Karnataka', '560091'),
(21, 3, 'Ulsoor', 'Commercial Street', 'Bangalore', 'Inertia Inc', 'India', 'poonam.g.reddy@gmail.com', 'Poonam', 'Reddy', '8967545678', 'Karnataka', '560054'),
(22, 4, 'Ulsoor', 'Commercial Street', 'Bangalore', 'Inertia Inc', 'India', 'poonam.g.reddy@gmail.com', 'Poonam', 'Reddy', '8967545678', 'Karnataka', '560054'),
(23, 5, 'Ulsoor', 'Commercial Street', 'Bangalore', 'Inertia Inc', 'India', 'poonam.g.reddy@gmail.com', 'Poonam', 'Reddy', '8967545678', 'Karnataka', '560054'),
(24, 1, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi-Payment-Test', 'Mathew', '5435454535', 'Himachal Pradesh', '456789'),
(25, 2, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi-Payment-Test', 'Mathew', '5435454535', 'Himachal Pradesh', '456789'),
(26, 3, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Bihar', '456789'),
(27, 4, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Bihar', '456789'),
(28, 5, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Bihar', '456789'),
(29, 6, 'sfdfd', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi-Test', 'Mathew', '2345678901', 'Karnataka', '123456'),
(30, 7, 'sfdfd', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi-Test', 'Mathew', '2345678901', 'Karnataka', '123456'),
(31, 8, 'sfdfd', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi-Test', 'Mathew', '2345678901', 'Karnataka', '123456'),
(32, 9, 'sfdfd', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi-Test', 'Mathew', '2345678901', 'Karnataka', '123456'),
(33, 10, 'Peniel#5', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Stm-Test', 'Mathew', '2345678902', 'Kerala', '689121'),
(34, 11, 'Peniel#5', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Stm-Test', 'Mathew', '2345678902', 'Kerala', '689121'),
(35, 12, 'Peniel#5', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Stm-Test', 'Mathew', '2345678902', 'Kerala', '689121'),
(36, 13, 'Peniel#5', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Stm-Test', 'Mathew', '2345678902', 'Kerala', '689121'),
(37, 14, 'Honeycomb', 'kormangala', 'banglore', 'Honeycomb Creative Support Pvt. Ltd.', 'India', 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '9844360170', 'Karnataka', '560034'),
(38, 15, 'Honeycomb', 'kormangala', 'banglore', 'Honeycomb Creative Support Pvt. Ltd.', 'India', 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '9844360170', 'Karnataka', '560034'),
(39, 16, 'Honeycomb', 'kormangala', 'banglore', 'Honeycomb Creative Support Pvt. Ltd.', 'India', 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '9844360170', 'Karnataka', '560034'),
(40, 17, 'Honeycomb', 'kormangala', 'banglore', 'Honeycomb Creative Support Pvt. Ltd.', 'India', 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '9844360170', 'Karnataka', '560034'),
(41, 18, 'Honeycomb', 'kormangala', 'banglore', 'Honeycomb Creative Support Pvt. Ltd.', 'India', 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '9844360170', 'Karnataka', '560034'),
(42, 19, 'Honeycomb', 'kormangala', 'banglore', 'Honeycomb Creative Support Pvt. Ltd.', 'India', 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '9844360170', 'Karnataka', '560034'),
(43, 20, 'Honeycomb', 'kormangala', 'banglore', 'Honeycomb Creative Support Pvt. Ltd.', 'India', 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '9844360170', 'Karnataka', '560034'),
(44, 21, 'Honeycomb', 'kormangala', 'banglore', 'Honeycomb Creative Support Pvt. Ltd.', 'India', 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '9844360170', 'Karnataka', '560034'),
(45, 22, 'Honeycomb', 'kormangala', 'banglore', 'Honeycomb Creative Support Pvt. Ltd.', 'India', 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '9844360170', 'Karnataka', '560034'),
(46, 23, 'Honeycomb', 'kormangala', 'banglore', 'Honeycomb Creative Support Pvt. Ltd.', 'India', 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '9844360170', 'Karnataka', '560034'),
(47, 24, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Chandigarh', '456789'),
(48, 25, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Chandigarh', '456789'),
(49, 26, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Chandigarh', '456789'),
(50, 27, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Chandigarh', '456789'),
(51, 28, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Chandigarh', '456789'),
(52, 29, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Chandigarh', '456789'),
(53, 30, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Chandigarh', '456789'),
(54, 31, 'dgfdgfdg', '', 'Bangalore', '', 'India', 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '5435454535', 'Chandigarh', '456789'),
(55, 32, 'Honeycomb', 'kormangala', 'banglore', 'Honeycomb Creative Support Pvt. Ltd.', 'India', 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '9844360170', 'Karnataka', '560034'),
(56, 33, 'Honeycomb', 'kormangala', 'banglore', 'Honeycomb Creative Support Pvt. Ltd.', 'India', 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '9844360170', 'Karnataka', '560034'),
(57, 34, 'Honeycomb', 'kormangala', 'banglore', 'Honeycomb Creative Support Pvt. Ltd.', 'India', 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '9844360170', 'Karnataka', '560034'),
(58, 35, 'Koramangala', '', 'Bengaluru', 'Honeycomb', 'India', 'photostop.blog@gmail.com', 'Harika', 'Maruboyina', '9986687424', 'Karnataka', '560100'),
(59, 36, '123 3 rf', '', 'Hyderabad', 'abc', 'India', 'alekhya.s@ebs.in', 'Test', 'test ', '04444887000', 'Andhra Pradesh', '500016'),
(60, 37, 'abc', 'abc', 'bangalore', 'Honeycomb', 'India', 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '9844360170', 'Karnataka', '560035'),
(61, 38, '1026, 2nd Floor, 7th Main, 1st Block, Koramangala', '', 'Bangalore', 'Honeycomb Creative Support', 'India', 'noufel@honeycombindia.net', 'Noufel', 'A N', '919845128760', 'Karnataka', '560034'),
(62, 39, '1026, 2nd floor (next to more),80 ft rd', '7th main, 1st block, kormangala', 'bangalore', 'honeycombindia.net', 'India', 'baiju@honeycombindia.net', 'baiju', 'mm', '7411643619', 'Karnataka', '560034');

-- --------------------------------------------------------

--
-- Table structure for table `photo_cart`
--

CREATE TABLE IF NOT EXISTS `photo_cart` (
  `cartId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `userType` enum('user','artist') NOT NULL,
  `imageId` int(11) NOT NULL,
  `frameId` int(11) NOT NULL,
  `paperId` int(11) NOT NULL,
  `size` varchar(200) NOT NULL,
  `frameType` varchar(200) NOT NULL,
  `productPrice` varchar(500) NOT NULL,
  `createdDate` date NOT NULL,
  `purchased` enum('false','true') NOT NULL,
  PRIMARY KEY (`cartId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `photo_cart`
--

INSERT INTO `photo_cart` (`cartId`, `userId`, `userType`, `imageId`, `frameId`, `paperId`, `size`, `frameType`, `productPrice`, `createdDate`, `purchased`) VALUES
(1, 5, 'user', 58, 0, 0, 'a1', 'omount', '0', '2013-04-27', 'false'),
(2, 5, 'user', 56, 2, 4, 'a3', 'mount', '3000', '2013-04-27', 'false'),
(3, 9, 'user', 53, 2, 4, 'a2', 'mount', '6300', '2013-04-29', 'false'),
(7, 23, 'user', 58, 1, 1, 'a3', 'omount', '850', '2013-04-30', 'false'),
(8, 23, 'user', 58, 2, 3, 'a1', 'mount', '4300', '2013-04-30', 'false'),
(9, 22, 'user', 45, 2, 1, 'a2', 'mount', '5300', '2013-04-30', 'false'),
(10, 23, 'user', 56, 3, 5, 'a3', 'mount', '4300', '2013-04-30', 'false'),
(11, 22, 'user', 57, 1, 5, 'a3', 'omount', '4150', '2013-04-30', 'false'),
(12, 26, 'user', 29, 2, 1, 'a3', 'omount', '3350', '2013-04-30', 'false'),
(14, 1, 'user', 156, 5, 5, 'a2', 'mount', '6600', '2013-05-13', 'false'),
(15, 1, 'user', 156, 7, 4, 'a4', 'mount', '2200', '2013-05-13', 'false'),
(16, 1, 'user', 98, 3, 4, 'a2', 'mount', '6300', '2013-05-13', 'false'),
(17, 1, 'user', 159, 10, 3, 'a2', 'mount', '5550', '2013-05-14', 'false'),
(19, 69, 'artist', 207, 5, 4, 'a2', 'omount', '6000', '2013-05-21', 'false'),
(20, 66, 'user', 254, 2, 1, 'a2', 'mount', '5300', '2013-05-21', 'false'),
(23, 21, 'user', 340, 5, 1, 'a4', 'omount', '1900', '2013-07-08', 'false'),
(24, 82, 'user', 346, 8, 1, 'a4', 'mount', '2000', '2013-07-09', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `photo_categories`
--

CREATE TABLE IF NOT EXISTS `photo_categories` (
  `categoryId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(500) NOT NULL,
  `categoryDescription` text NOT NULL,
  `parentCategoryId` int(11) NOT NULL,
  `createdDate` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`categoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `photo_categories`
--

INSERT INTO `photo_categories` (`categoryId`, `categoryName`, `categoryDescription`, `parentCategoryId`, `createdDate`, `status`) VALUES
(1, 'Birds', 'An amazing collection of birds', 0, '2013-05-24', 1),
(2, 'Nature ', 'A collection of the most beautiful scenic shots', 0, '2013-05-27', 1),
(6, 'Flowers', 'Colorful Flora', 0, '2013-05-30', 1),
(7, 'Abstract', 'abstract photographs', 0, '2013-05-27', 1),
(8, 'Culture and Heritage', 'This is a collection of some amazing culture and heritage symbols and places of India', 0, '2013-05-28', 1),
(9, 'Places', 'Best shots taken at prominent places', 0, '2013-05-28', 1),
(10, 'People', 'Candid shots', 0, '2013-05-28', 1),
(11, 'Animals', 'The best collection of animals', 0, '2013-05-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `photo_contents`
--

CREATE TABLE IF NOT EXISTS `photo_contents` (
  `contentId` int(11) NOT NULL AUTO_INCREMENT,
  `contentName` varchar(500) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`contentId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `photo_contents`
--

INSERT INTO `photo_contents` (`contentId`, `contentName`, `content`) VALUES
(1, 'Aboutus', '<div style="color: rgb(118, 118, 118); font-size: 20px;" align="justify"><font face="times new roman">Photostop is an online platform that helps professional Photographers and Photography enthusiasts market their creativity and sell their artworks to Corporates, Art Buyers, Interior Designers, Architects, Hotels, Hospitals, etc.<br></font></div><font face="times new roman"><br><br></font><div align="justify" style="color: rgb(118, 118, 118); font-size: 20px;"><font face="times new roman">Photostop is a brand owned by Honeycomb Creative Support Pvt. Ltd., Bangalore. Honeycomb was established in 2008 as a Photo Retouching and Artworking company. In 2010 we started with our third Vertical –&nbsp;<b><a href="http://www.honeycombindia.net/canvas-printing/" target="_blank">Archival Printing</a>.</b><br></font></div><font face="times new roman"><br></font><div style="color: rgb(118, 118, 118); font-size: 20px;" align="justify"><font face="times new roman">As a company with five years of fruitful experience in this Creative field, we ensure that colors are reproduced accurately for high quality performance delivery using the state of the art facilities such as Apple Mac Pro’s, Quato Monitors and Star Proof color management system.<br></font></div><font face="times new roman"><br></font><div style="color: rgb(118, 118, 118); font-size: 20px;" align="justify"><font face="times new roman">Photostop understands that each one of us looks for fresh and unique images with varied criteria in mind. Hence, Photostop brings to you pictures from the most comprehensive photographers in an easily navigable format, aiming to deliver a wide range of choices in just a few clicks!<br></font></div>'),
(2, 'Terms', '<div align="justify"><span style="font-family: Arial, Verdana; font-size: 12px;">BY USING OR ACCESSING THE PHOTOSTOP WEB SITE (“WEB \nSITE”) AND THE INFORMATION, MATERIAL, PRODUCTS OR SERVICES PROVIDED \nTHEREIN BY PHOTOSTOP, AND BY ACTIVATING YOUR ACCOUNT ON THE COMMUNITY \nPAGES,</span>&nbsp;<font face="Arial, Verdana"><span style="font-size: 12px;">YOU AGREE TO BE LEGALLY BOUND BY THE TERMS AND CONDITIONS OF \nTHIS AGREEMENT.PLEASE IMPORTANT INFORMATION REGARDING YOUR LEGAL RIGHTS \nAND OTHER ELEMNTS. READ THESE TERMS CAREFULLY AS THEY CONTAIN.</span></font><br><br><div align="justify"><font face="Arial, Verdana"><span style="font-size: 12px;">If\n you do not agree with the terms and conditions of this Agreement, do \nnot use or access the Web Site or information, material, products or \nservices provided therein. This Agreement is between you, and if you are\n using this Web Site on your employer’s behalf, to you and your employer\n (“You” or “User”) and PHOTOSTOP and is effective as at the date of your\n first use or access of the Web Site.</span></font><br><br><b style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; line-height: normal;">1. THE PHOTOSTOP PLATFORM.</b><br><br><b style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; line-height: normal;">1.1 Purpose of the platform.</b><br><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">The\n PHOTOSTOP Platform is an online portal and website provided by \nHoneycomb Creative Support (p) Limited,Banglore, where professional \nphotographers and photography enthusiasts project their photographic \nwork, communicate with a Buyer or an agency and market their creativity.\n In addition, payments for the services contracted for or photographs \nbought through the PHOTOSTOP Platform are made through the PHOTOSTOP \nPlatform. On the PHOTOSTOP Platform, photographers will post photographs\n and Buyers will buy them. Also, the photographers could avail the Photo\n Retouching facility available considering that, PHOTOSTOP falls under \nthe umbrella of Honeycomb Creative Support (p) Limited (a leading \ncompany specialized in printing and various artwork relatedservices) and\n the Buyers can avail both digital and print versions of the photographs\n as required by them.<br></div><br><b style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; line-height: normal;">1.2 Eligibility to use the platform</b><br><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">The\n PHOTOSTOP Platform is available only to legal entities/persons who are \neighteen (18) years and above or they are otherwise capable of forming \nlegally binding contracts under applicable law. Without limiting the \nforegoing, thePHOTOSTOP Platform is not available to temporarily or \nindefinitely suspended Users. Users are not authorized toenter into any \ncontracts on behalf of PHOTOSTOP.<br></div><br><b><span style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; line-height: normal;">1.3 Role of Legal Contracts on Photographs and the Role of PHOTOSTOP.</span><br></b><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">If\n a Buyer accepts a photographer''s work, a contract is formed between the\n Buyer and PHOTOSTOP. Buyer abidesby the legal rights specified by \nPHOTOSTOP mentioned in the service.<br></div><br><b style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; line-height: normal;">1.4 User Acknowledgement</b><br><br><div align="justify"><font face="Arial, Verdana"><span style="font-size: 12px;">The\n User, be it a Buyer or a photographer acknowledges and agrees that the \nreputation and goodwill of PHOTOSTOP may be adversely affected if the \nUser engages in violations of the Service Contract. PHOTOSTOP has the \nright to take action, including legal action, against the user as \nPHOTOSTOP, in its sole discretion, deems necessary to protect the \ninterests of PHOTOSTOP</span></font><br><br><b style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; line-height: normal;">2. POLICIES</b><br><br><b style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; line-height: normal;">2.1GeneralUserObligations</b><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">PHOTOSTOP\n is an online platform to connect Buyers and photographers using our \nsystems and resources. PHOTOSTOP is not a service company and does not \nmanage individual Services or individual photographers, in any manner. \nPHOTOSTOP expects a consistent and high level of courtesy, respect and \nprofessionalism from all of its Users towards each other and reserves \nthe right to expel any User from our network at any time. Users agree to\n use good judgment when posting information, comments, feedback or other\n content regarding other Users. PHOTOSTOP is not legally responsible for\n any remarks, information or other content posted or made available on \nthe PHOTOSTOP Platform by any User or third party, even if such \ninformation or content is defamatory or otherwise legally actionable.<br></div><br><b style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; line-height: normal;">2.2Identity</b><br><font face="Arial, Verdana"><span style="font-size: 12px;">All\n the identity information associated with a PHOTOSTOP User Account must \nbe authentic and verifiable. Each UserAccount must be used by only one \nperson, and each person is allowed to use only one User account.</span></font><br><br><b style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; line-height: normal;">2.3 Copyright and Uploading content on PHOTOSTOP</b><br><br><font face="Arial, Verdana"><span style="font-size: 12px;">Copyright\n protects photographer’s work i.e. their photos. You take full \nresponsibility for the work you upload and display on PHOTOSTOP and this\n is reflected in the PHOTOSTOP Terms of Service which you agree to \ncomply with in order to use the PHOTOSTOP service. PHOTOSTOP may suspend\n or terminate users who in our opinion infringe the copyright or other \nrights of others purposely.</span></font><br><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">When you submit or upload content on the PHOTOSTOP website you represent and warrant that:<br></div><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">2.3.1\n You own all copyright in the content, or if you are not the owner, that\n you have permission to use the content,and that you have the right to \ndisplay, reproduce and sell the content. You license PHOTOSTOP to use \nand sub-license the content in accordance with this agreement;<br></div><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">2.3.2\n You and your content do not and will not infringe the intellectual \nproperty rights or other rights of any person orentity, including \ncopyright, moral rights, trade mark, patent or right of privacy;<br></div><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">2.3.2\n You or your content, and your use, storage, reproduction and display on\n the website will comply with allapplicable law, rules and regulations;<br></div><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">2.3.3\n Your content does not contain material that defames or vilifies any \nperson, people, races, religion or religiousgroup and is not obscene, \npornographic, indecent, harassing, threatening, harmful, invasive of \nprivacy or publicityrights, abusive, inflammatory or otherwise \nobjectionable;<br></div><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">2.3.4 Your content does\n not include malicious code such as viruses, trojans, worms, time bombs,\n cancel bots, or anyother computer programming routines that may damage,\n interfere with, surreptitiously intercept, or expropriate anysystem, \nprogram, data, or personal information;<br></div><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">2.3.5\n Your content is not misleading and deceptive and does not offer or \ndisseminate fraudulent goods, services,schemes, or promotions.<br></div><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">2.3.6\n As a Photographer, one needs to ensure that their work posted in \nPHOTOSTOP does not directly or indirectlyadvertise any brand. PHOTOSTOP \nis not responsible for any such issue arising in this context. The \nPhotographershall be held liable in such a scenario<br></div><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">2.3.7\n The Photographers are responsible for the content they upload on \nPHOTOSTOP. It shall not contain images ofor resembling any person \n(living or dead) without their/their family’s permission. Any such issue\n shall be handled bythe photographer itself and PHOTOSTOP shall no \nlonger be responsible for it.<br></div><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">2.3.8 \nPHOTOSTOP reserves the right to choose the photographs that may be \ndisplayed in the online platform. Thisselection shall solely be done \nfrom the Sales view point and not based on the rubrics and specifics of \nPhotography. Hence, any dispute in this context from the Photographer’s \nend shall not be entertained.<br></div><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">2.3.9 \nPHOTOSTOP reserves the right to review and if necessary remove any \ncontent from the website or to cancelyour account at its sole \ndiscretion, either because that content breaches this agreement or any \napplicable laws, orotherwise.<br></div><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; line-height: normal;"><b>2.5 Contracts</b><br>Buyers\n agree to Packages and milestones set by the photographers. Buyer and \nPhotographer should respondpromptly to communications with and requests \nfrom each other. Any negotiation (if required) shall only be \nmadepossible through the PHOTOSTOP team and not directlywith the \nPhotographer. Any unacceptable deviation from<br>this rule could lead to legal consequences.<br></div><br><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; line-height: normal;"><b>2.6\n Feedback and Photo of the day/week.</b></div><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">PHOTOSTOP provides its \nrecommendation, feedback as a means through which Users can express \ntheir opinions publicly and PHOTOSTOP does not monitor or censor these \nopinions or investigate any remarks posted by Users for accuracy or \nreliability. You acknowledge and agree that the PHOTOSTOP Platform will \ncontain publicfeedback from Users with whom you have transacted. You \nacknowledge that feedback results for you may consist of comments left \nby other Users. You may be held legally responsible for damages suffered\n by other PHOTOSTOP Users or third parties as a result of these remarks \nif a court finds that these remarks are legally actionable ordefamatory.\n PHOTOSTOP is not legally responsible for any feedback or comments \nposted or made available on the PHOTOSTOP Platform by any Users or third\n parties, even if that information is defamatory or otherwise \nlegallyactionable. Any effort to falsify feedback, manipulate or coerce \nanother User by threatening negative feedback or offering to sell or buy\n Services in exchange for feedback is in violation of this Agreement. \nPHOTOSTOP reserves theright to delete ratings and feedback as it deems \nappropriate.<br></div><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;">PHOTOSTOP also provides a \nfeature called “Photo of the Day/Week” which is purely based on the \n“sales” of thephotograph and it is not judged based on the nitty gritty \nof Photography.<br></div><div align="justify" style="font-family: Arial, Verdana; font-size: 12px; font-style: normal; font-variant: normal; font-weight: normal; line-height: normal;"><br></div><div align="justify"><div align="justify"><font face="Arial, Verdana"><span style="font-size: 12px;"><b>3. SERVICE CONTRACT TERMS BETWEEN BUYER AND PHOTOGRAPHER.</b></span></font></div><div align="justify"><font face="Arial, Verdana"><span style="font-size: 12px;"><br></span></font></div><div align="justify"><font face="Arial, Verdana"><span style="font-size: 12px;"><b>3.1 Services.</b></span></font></div><div align="justify"><font face="Arial, Verdana"><span style="font-size: 12px;">Buyers and photographers shall perform Services in a professional and workmanlike manner. The pictures can&nbsp;</span></font><span style="font-size: 12px; font-family: Arial, Verdana;">either be bought in digital or print format, both are services provided to the Buyer by PHOTOSTOP and not by the&nbsp;</span><span style="font-size: 12px; font-family: Arial, Verdana;">photographer directly. The Buyer gets to choose the kind of paper and format for printing as well.</span></div><div align="justify"><font face="Arial, Verdana"><span style="font-size: 12px;"><br></span></font></div><div align="justify"><font face="Arial, Verdana"><span style="font-size: 12px;">In addition to this, PHOTOSTOP also provides an added Service (on request, chargeable) to its Photographers, i.e.&nbsp;</span></font><span style="font-size: 12px; font-family: Arial, Verdana;">Photo Retouching which is enabled by PHOTOSTOP’s mother brand Honeycomb Creative Solutions (p) limited.&nbsp;</span><span style="font-size: 12px; font-family: Arial, Verdana;">Availing this service is a decision purely under the Photographer’s discretion. If the photographer chooses to avail this&nbsp;</span><span style="font-size: 12px; font-family: Arial, Verdana;">service, he/she shall be charged for it.</span></div><div align="justify"><font face="Arial, Verdana"><span style="font-size: 12px;"><br></span></font></div><div align="justify"><font face="Arial, Verdana"><span style="font-size: 12px;"><b>3.2 Fees.</b></span></font></div><div align="justify"><font face="Arial, Verdana"><span style="font-size: 12px;">PHOTOSTOP shall pay Photographer the agreed-upon fees after delivery of the Service.</span></font></div><div align="justify"><font face="Arial, Verdana"><span style="font-size: 12px;"><br></span></font></div><div align="justify"><font face="Arial, Verdana"><div align="justify" style="font-size: 12px;"><b>4. ACKNOWLEDGMENTS BY USER OF PHOTOSTOP''S ROLE.</b></div><div align="justify" style="font-size: 12px;"><br></div><div align="justify" style="font-size: 12px;"><b>4.1 Service Contracts</b></div><div align="justify" style="font-size: 12px;">User expressly acknowledges, agrees and understands that PHOTOSTOP Platform is merely a venue where Users may act as a Buyer or Photographer</div><div align="justify" style="font-size: 12px;"><br></div><div align="justify" style="font-size: 12px;"><b>4.2 PHOTOSTOP Resources</b></div><div align="justify" style="font-size: 12px;">PHOTOSTOP and its licensors reserve all Proprietary Rights in and to the PHOTOSTOP resources. User may not use the PHOTOSTOP resources except as necessary for the purposes of discharging its obligations under this Agreement and any Service Contract entered into pursuant to this Agreement and on the terms set out in the License Agreement.</div><div align="justify" style="font-size: 12px;"><br></div><div align="justify" style="font-size: 12px;"><b>5. PROHIBITED USE OF SITE AND CONTENT</b></div><div align="justify" style="font-size: 12px;">The following uses are prohibited, therefore, you may not:</div><div align="justify" style="font-size: 12px;"><br></div><div align="justify" style="font-size: 12px;"><br></div><div align="justify"><ul><li style="font-size: 12px;">Remove, alter or change any copyright information or other notices or metadata associated with the Content;</li><li><span style="font-size: 12px;">Download, copy, or re-transmit any or all of the Site or the Content without, or in violation of, a writtenlicense or agreement with Company;</span></li><li><span style="font-size: 12px;">Use any data mining, robots or similar data and/or image gathering or extraction technology or algorithms to crawl, scrape or monitor the Site or seek information on Site Visitor’s or Company’s customers;</span></li><li><span style="font-size: 12px;">Manipulate or otherwise display the Site or the Content by using framing or similar navigational technology; Deceive any Site’s restrictions or measures to limit access to the Site;</span></li><li><span style="font-size: 12px;">Register or attempt to register for any products or services offered by the Company if you are not authorized by the party to do so;</span></li><li><span style="font-size: 12px;">Disclose, sell or trade any password to restricted areas of the Site s or allow any third party to have access to your password; and</span></li><li><span style="font-size: 12px;">Interfere in any manner, whether technological or otherwise with the function of the Site or and services offered by Company.</span></li></ul></div><div align="justify" style="font-size: 12px;"><br></div><div align="justify"><div align="justify"><span style="font-size: 12px;"><b>6. FEES AND PAYMENTS.</b></span></div><div align="justify"><span style="font-size: 12px;"><br></span></div><div align="justify"><span style="font-size: 12px;"><b>6.1 Formal Invoices and Taxes.</b></span></div><div align="justify"><span style="font-size: 12px;">PHOTOSTOP shall have no responsibility for determining the necessity of or for issuing any formal invoices, or for</span><span style="font-size: 12px;">determining, remitting, or withholding any taxes applicable to Photographer Fees.</span></div><div align="justify"><span style="font-size: 12px;"><br></span></div><div align="justify"><span style="font-size: 12px;"><b>6.2 Invoices to Buyer.</b></span></div><div align="justify"><span style="font-size: 12px;">Buyer will be invoiced for Assignments on package basis. For milestone payments and Fixed-Price payments, Buyer&nbsp;</span><span style="font-size: 12px;">is billed immediately.</span></div><div align="justify"><span style="font-size: 12px;"><br></span></div><div align="justify"><span style="font-size: 12px;"><b>6.3 Payment.</b></span></div><div align="justify"><span style="font-size: 12px;">Buyer hereby authorizes PHOTOSTOP to run credit card authorizations on all credit cards provided by Buyer , to&nbsp;</span><span style="font-size: 12px;">store credit card details as Buyer''s method of payment for Services, and to charge Buyer''s credit card (or any other&nbsp;</span><span style="font-size: 12px;">form of payment authorized by PHOTOSTOP or mutually agreed to between Buyer and PHOTOSTOP).</span></div><div align="justify"><span style="font-size: 12px;"><br></span></div><div align="justify"><span style="font-size: 12px;"><b>7. LIMITATION OF LIABILITY.</b></span></div><div align="justify"><span style="font-size: 12px;">IN NO EVENT WILL PHOTOSTOP BE LIABLE FOR ANY SPECIAL, CONSEQUENTIAL, INCIDENTAL,&nbsp;</span><span style="font-size: 12px;">EXEMPLARY OR INDIRECT COSTS OR DAMAGES, LITIGATION COSTS, INSTALLATION AND REMOVAL&nbsp;</span><span style="font-size: 12px;">COSTS, OR LOSS OF DATA, PRODUCTION OR PROFIT.</span></div><div align="justify"><span style="font-size: 12px;"><br></span></div><div align="justify"><span style="font-size: 12px;"><b>8. GENERAL.</b></span></div><div align="justify"><span style="font-size: 12px;"><br></span></div><div align="justify"><span style="font-size: 12px;"><b>8.1 Limited Privacy.</b></span></div><div align="justify"><span style="font-size: 12px;">User acknowledges and understands that any Work Product, and any other information (including the terms of this&nbsp;</span><span style="font-size: 12px;">Agreement) that User provides or makes available on the PHOTOSTOP Platform as a Photographer may be made&nbsp;</span><span style="font-size: 12px;">available to Buyers and others in accordance with PHOTOSTOP''s Privacy policies above.</span></div><div align="justify"><span style="font-size: 12px;"><br></span></div><div align="justify"><span style="font-size: 12px;"><b>8.2 Notices: Consent to Electronic Notice.</b></span></div><div align="justify"><span style="font-size: 12px;">You consent to the use of (a) electronic means to complete this Agreement and to deliver any notices pursuant to this&nbsp;</span><span style="font-size: 12px;">Agreement;</span></div><div align="justify"><span style="font-size: 12px;"><br></span></div><div align="justify"><span style="font-size: 12px;"><b>8.3 Modifications.</b></span></div><div align="justify"><span style="font-size: 12px;">PHOTOSTOP reserves the right in its sole discretion to amend this Agreement without advance notice. Modifications&nbsp;</span><span style="font-size: 12px;">to this Agreement will be posted on the Site or made in compliance with any notice requirements set forth in this&nbsp;</span><span style="font-size: 12px;">Agreement.</span></div><div align="justify"><span style="font-size: 12px;"><br></span></div><div align="justify"><span style="font-size: 12px;"><b>8.4 Dates and Timelines.</b></span></div><div align="justify"><span style="font-size: 12px;">All references to days shall be to business days (Monday to Friday, UTC, excluding bank holidays), except as&nbsp;</span><span style="font-size: 12px;">expressly noted otherwise.</span></div></div><div align="justify" style="font-size: 12px;"><br></div></font></div></div></div></div></div>'),
(3, 'Privacy', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).');

-- --------------------------------------------------------

--
-- Table structure for table `photo_faq`
--

CREATE TABLE IF NOT EXISTS `photo_faq` (
  `faqId` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `createdDate` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `display` enum('true','false') NOT NULL,
  `displayModule` enum('buyer','photographer') NOT NULL,
  PRIMARY KEY (`faqId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `photo_faq`
--

INSERT INTO `photo_faq` (`faqId`, `question`, `answer`, `createdDate`, `status`, `display`, `displayModule`) VALUES
(1, 'How do I choose photographs in Photostop?', 'Register yourself and login using the Sign in button. Click on the “SHOP” button\r\nand choose from the wide range of photographs. Also select the size, type of\r\npaper and type of the frame. Finally add it to your cart.', '2013-04-23', 1, 'true', 'buyer'),
(2, 'How can I search for photographs through keywords?', 'Photographs can be chosen based on one’s requirement by typing in keywords in\r\nthe space made available. You can search through genre or photographer.', '2013-04-23', 1, 'true', 'buyer'),
(3, 'What are the methods of payment available?', 'The Client can pay for the purchased Photographs only through Online\r\nTransactions.', '2013-04-23', 1, 'true', 'buyer'),
(4, 'Can I download images from Photostop?', 'No, the images cannot be downloaded directly from Photostop. You can only\r\norder them in Print format with a frame. If you need images in any other format,\r\nyou may contact our Expert.', '2013-04-23', 1, 'true', 'buyer'),
(5, 'How many types of paper are available for printing?', '<ol><li>Canvas (Hahnemuhle) 410 gsm</li><li>Canvas (Technova) 410 gsm</li><li>&nbsp;Enhanced Matte 189 gsm</li><li>&nbsp;Premium Lusture 260 gsm</li><li>Textured Fine Art 225 gsm</li></ol>', '2013-04-23', 1, 'true', 'buyer'),
(6, 'How do we upload our images to Photostop?', 'Register yourself and log in using the “Sign In” button. Click on the “Upload\r\nImages” button. Fill in the details and start uploading!', '2013-04-23', 1, 'true', 'photographer'),
(7, 'Is there a limit on the number of images to be uploaded? If so what is it?', 'There is no limit on the number of photographs to be sent. However, our panel of\r\nexperts shall decide on the number of photographs depending on their salability.', '2013-04-23', 1, 'true', 'photographer'),
(8, 'Will the images be chosen by Photostop? How?', 'Yes, the best images shall be chosen by a panel of experts purely based on its\r\nability to sell. Photographers initially upload their low resolution images, once\r\nchosen they have to upload their high resolution versions.', '2013-04-23', 1, 'true', 'photographer'),
(9, 'What should be the size of images to be uploaded?', 'Initially, 300 kb images can be uploaded for review by the Photostop team.\r\nOnce the Photographs have been selected, higher resolutions images have to be\r\nuploaded for sale. The price of the image shall be decided by its size.\r\nThe different variations available include: <br><!--[if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\r\n  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:DontVertAlignCellWithSp/>\r\n   <w:DontBreakConstrainedForcedTables/>\r\n   <w:DontVertAlignInTxbx/>\r\n   <w:Word11KerningPairs/>\r\n   <w:CachedColBalance/>\r\n  </w:Compatibility>\r\n  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>\r\n  <m:mathPr>\r\n   <m:mathFont m:val="Cambria Math"/>\r\n   <m:brkBin m:val="before"/>\r\n   <m:brkBinSub m:val="--"/>\r\n   <m:smallFrac m:val="off"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val="0"/>\r\n   <m:rMargin m:val="0"/>\r\n   <m:defJc m:val="centerGroup"/>\r\n   <m:wrapIndent m:val="1440"/>\r\n   <m:intLim m:val="subSup"/>\r\n   <m:naryLim m:val="undOvr"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]-->\r\n\r\n<table class="MsoTableGrid" style="margin-left: 77.4pt; border-collapse: collapse; border: medium none;" border="1" cellpadding="0" cellspacing="0">\r\n <tbody><tr style="mso-yfti-irow:0;mso-yfti-firstrow:yes">\r\n  <td style="width:82.2pt;border:solid windowtext 1.0pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt" valign="top" width="110">\r\n  <p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:\r\n  .0001pt;mso-add-space:auto;text-align:center;line-height:normal" align="center"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">A4</span></p>\r\n  </td>\r\n  <td style="width:159.6pt;border:solid windowtext 1.0pt;\r\n  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\r\n  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt" valign="top" width="213">\r\n  <p class="MsoListParagraphCxSpMiddle" style="margin:0in;\r\n  margin-bottom:.0001pt;mso-add-space:auto;text-align:center;line-height:normal" align="center"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">210mm×297mm</span></p>\r\n  </td>\r\n  <td style="width:159.6pt;border:solid windowtext 1.0pt;\r\n  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:\r\n  solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt" valign="top" width="213">\r\n  <p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:\r\n  .0001pt;mso-add-space:auto;text-align:center;line-height:normal" align="center"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">8”×11”</span></p>\r\n  </td>\r\n </tr>\r\n <tr style="mso-yfti-irow:1">\r\n  <td style="width:82.2pt;border:solid windowtext 1.0pt;\r\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\r\n  padding:0in 5.4pt 0in 5.4pt" valign="top" width="110">\r\n  <p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:\r\n  .0001pt;mso-add-space:auto;text-align:center;line-height:normal" align="center"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">A3</span></p>\r\n  </td>\r\n  <td style="width:159.6pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt" valign="top" width="213">\r\n  <p class="MsoListParagraphCxSpMiddle" style="margin:0in;\r\n  margin-bottom:.0001pt;mso-add-space:auto;text-align:center;line-height:normal" align="center"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">297mm×420mm</span></p>\r\n  </td>\r\n  <td style="width:159.6pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt" valign="top" width="213">\r\n  <p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:\r\n  .0001pt;mso-add-space:auto;text-align:center;line-height:normal" align="center"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">11”×17”</span></p>\r\n  </td>\r\n </tr>\r\n <tr style="mso-yfti-irow:2">\r\n  <td style="width:82.2pt;border:solid windowtext 1.0pt;\r\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\r\n  padding:0in 5.4pt 0in 5.4pt" valign="top" width="110">\r\n  <p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:\r\n  .0001pt;mso-add-space:auto;text-align:center;line-height:normal" align="center"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">A2</span></p>\r\n  </td>\r\n  <td style="width:159.6pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt" valign="top" width="213">\r\n  <p class="MsoListParagraphCxSpMiddle" style="margin:0in;\r\n  margin-bottom:.0001pt;mso-add-space:auto;text-align:center;line-height:normal" align="center"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">420mm×594mm</span></p>\r\n  </td>\r\n  <td style="width:159.6pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt" valign="top" width="213">\r\n  <p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:\r\n  .0001pt;mso-add-space:auto;text-align:center;line-height:normal" align="center"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">17” ×23”</span></p>\r\n  </td>\r\n </tr>\r\n <tr style="mso-yfti-irow:3;mso-yfti-lastrow:yes">\r\n  <td style="width:82.2pt;border:solid windowtext 1.0pt;\r\n  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;\r\n  padding:0in 5.4pt 0in 5.4pt" valign="top" width="110">\r\n  <p class="MsoListParagraphCxSpFirst" style="margin:0in;margin-bottom:\r\n  .0001pt;mso-add-space:auto;text-align:center;line-height:normal" align="center"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">A1</span></p>\r\n  </td>\r\n  <td style="width:159.6pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt" valign="top" width="213">\r\n  <p class="MsoListParagraphCxSpMiddle" style="margin:0in;\r\n  margin-bottom:.0001pt;mso-add-space:auto;text-align:center;line-height:normal" align="center"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">594mm×840mm</span></p>\r\n  </td>\r\n  <td style="width:159.6pt;border-top:none;border-left:\r\n  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;\r\n  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;\r\n  mso-border-alt:solid windowtext .5pt;padding:0in 5.4pt 0in 5.4pt" valign="top" width="213">\r\n  <p class="MsoListParagraphCxSpLast" style="margin:0in;margin-bottom:\r\n  .0001pt;mso-add-space:auto;text-align:center;line-height:normal" align="center"><span style="font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;">23” ×34”</span></p>\r\n  </td>\r\n </tr>\r\n</tbody></table>\r\n\r\n<!--[if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true"\r\n  DefSemiHidden="true" DefQFormat="false" DefPriority="99"\r\n  LatentStyleCount="267">\r\n  <w:LsdException Locked="false" Priority="0" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Normal"/>\r\n  <w:LsdException Locked="false" Priority="9" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="heading 1"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/>\r\n  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 1"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 2"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 3"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 4"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 5"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 6"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 7"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 8"/>\r\n  <w:LsdException Locked="false" Priority="39" Name="toc 9"/>\r\n  <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/>\r\n  <w:LsdException Locked="false" Priority="10" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Title"/>\r\n  <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/>\r\n  <w:LsdException Locked="false" Priority="11" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/>\r\n  <w:LsdException Locked="false" Priority="22" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Strong"/>\r\n  <w:LsdException Locked="false" Priority="20" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="59" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Table Grid"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/>\r\n  <w:LsdException Locked="false" Priority="1" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/>\r\n  <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/>\r\n  <w:LsdException Locked="false" Priority="34" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/>\r\n  <w:LsdException Locked="false" Priority="29" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Quote"/>\r\n  <w:LsdException Locked="false" Priority="30" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/>\r\n  <w:LsdException Locked="false" Priority="60" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="61" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="62" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Light Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="63" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="64" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="65" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="66" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="67" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="68" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="69" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="70" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Dark List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="71" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="72" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful List Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="73" SemiHidden="false"\r\n   UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/>\r\n  <w:LsdException Locked="false" Priority="19" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="21" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/>\r\n  <w:LsdException Locked="false" Priority="31" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/>\r\n  <w:LsdException Locked="false" Priority="32" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/>\r\n  <w:LsdException Locked="false" Priority="33" SemiHidden="false"\r\n   UnhideWhenUsed="false" QFormat="true" Name="Book Title"/>\r\n  <w:LsdException Locked="false" Priority="37" Name="Bibliography"/>\r\n  <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/>\r\n </w:LatentStyles>\r\n</xml><![endif]--><!--[if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n	{mso-style-name:"Table Normal";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-qformat:yes;\r\n	mso-style-parent:"";\r\n	mso-padding-alt:0in 5.4pt 0in 5.4pt;\r\n	mso-para-margin-top:0in;\r\n	mso-para-margin-right:0in;\r\n	mso-para-margin-bottom:10.0pt;\r\n	mso-para-margin-left:0in;\r\n	line-height:115%;\r\n	mso-pagination:widow-orphan;\r\n	font-size:11.0pt;\r\n	font-family:"Calibri","sans-serif";\r\n	mso-ascii-font-family:Calibri;\r\n	mso-ascii-theme-font:minor-latin;\r\n	mso-fareast-font-family:"Times New Roman";\r\n	mso-fareast-theme-font:minor-fareast;\r\n	mso-hansi-font-family:Calibri;\r\n	mso-hansi-theme-font:minor-latin;}\r\ntable.MsoTableGrid\r\n	{mso-style-name:"Table Grid";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-priority:59;\r\n	mso-style-unhide:no;\r\n	border:solid windowtext 1.0pt;\r\n	mso-border-alt:solid windowtext .5pt;\r\n	mso-padding-alt:0in 5.4pt 0in 5.4pt;\r\n	mso-border-insideh:.5pt solid windowtext;\r\n	mso-border-insidev:.5pt solid windowtext;\r\n	mso-para-margin:0in;\r\n	mso-para-margin-bottom:.0001pt;\r\n	mso-pagination:widow-orphan;\r\n	font-size:11.0pt;\r\n	font-family:"Calibri","sans-serif";\r\n	mso-ascii-font-family:Calibri;\r\n	mso-ascii-theme-font:minor-latin;\r\n	mso-hansi-font-family:Calibri;\r\n	mso-hansi-theme-font:minor-latin;}\r\n</style>\r\n<![endif]--><br><br>', '2013-04-23', 1, 'true', 'photographer'),
(10, 'Will the Photographer get to decide on the price?', 'The Photostop team will decide on the price for every Photograph depending on\r\nits size. However, there is also an option for the photographer’s to quote their\r\nprice. For more details, ask our Expert!', '2013-04-23', 1, 'true', 'photographer'),
(11, 'How will I receive my money when my photograph gets sold?', 'The payment shall be made to the Photographer once a month depending on his\r\nchoice of Payment mode. It could either be through Cheque/DD or Electronic\r\npayment.', '2013-04-23', 1, 'true', 'photographer'),
(12, 'Is it possible to cancel my order?', 'No, the order cannot be cancelled once the payment has been made.', '2013-04-23', 1, 'true', 'buyer');

-- --------------------------------------------------------

--
-- Table structure for table `photo_frames`
--

CREATE TABLE IF NOT EXISTS `photo_frames` (
  `frameId` int(11) NOT NULL AUTO_INCREMENT,
  `frameName` varchar(500) NOT NULL,
  `frameType` enum('portrait','landscape') NOT NULL,
  `frameHeight` varchar(500) NOT NULL,
  `frameWidth` varchar(500) NOT NULL,
  `frameUnit` varchar(500) NOT NULL,
  `frameFile_landscape_mount_price` varchar(500) NOT NULL,
  `frameFile_landscape_omount_price` varchar(500) NOT NULL,
  `frameFile_portrait_mount_price` varchar(500) NOT NULL,
  `frameFile_portrait_omount_price` varchar(500) NOT NULL,
  `frameFile_landscape_mount` text NOT NULL,
  `frameFile_landscape_omount` text NOT NULL,
  `frameFile_portrait_mount` text NOT NULL,
  `frameFile_portrait_omount` text NOT NULL,
  `frameEdgeFile` text NOT NULL,
  `frameStatus` tinyint(4) NOT NULL,
  `createdDate` date NOT NULL,
  PRIMARY KEY (`frameId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `photo_frames`
--

INSERT INTO `photo_frames` (`frameId`, `frameName`, `frameType`, `frameHeight`, `frameWidth`, `frameUnit`, `frameFile_landscape_mount_price`, `frameFile_landscape_omount_price`, `frameFile_portrait_mount_price`, `frameFile_portrait_omount_price`, `frameFile_landscape_mount`, `frameFile_landscape_omount`, `frameFile_portrait_mount`, `frameFile_portrait_omount`, `frameEdgeFile`, `frameStatus`, `createdDate`) VALUES
(1, 'Emerald', 'portrait', '', '', '', '', '', '', '', 'emerald_A4_H mount.png', 'emerald_A4_W Omount.png', 'emerald_A4_mount.png', 'emerald_A4_w o mount.png', 'emerald_Frame 09.png', 0, '2013-04-24'),
(2, 'Corel', 'portrait', '', '', '', '', '', '', '', 'corel_A1_H Mount.png', 'corel_A1_H WO Mount.png', 'corel_A4_mount.png', 'corel_A1 WO Mount.png', 'corel_Frame 11.png', 0, '2013-04-24'),
(3, 'Opal', 'portrait', '', '', '', '', '', '', '', 'opal_A4_H mount copy.png', 'opal_A4_H W O mount copy.png', 'opal_A4 mount copy.PNG', 'opal_A4_W O mount copy.png', 'opal_Frame 03 copy.png', 0, '2013-04-24'),
(4, 'Onyx', 'portrait', '', '', '', '', '', '', '', 'onyx_A4_mount copy.png', 'onyx_A4_H w o mount copy.png', 'onyx_A4_mount.png', 'onyx_A4_w o mount.png', 'onyx_Frame 01.png', 0, '2013-04-24'),
(5, 'Jade', 'portrait', '', '', '', '', '', '', '', 'jade_A4_H mount.png', 'jade_A4_H W Omount copy.png', 'jade_A4 mount.png', 'jade_A4_W Omount.png', 'jade_Frame 04.png', 0, '2013-04-24'),
(6, 'Garnet', 'portrait', '', '', '', '', '', '', '', 'garnet_A4_H mount copy.png', 'garnet_A4_H W O mount copy.png', 'garnet_A4_mount.png', 'garnet_A4_W O mount.png', 'garnet_Frame 06.png', 0, '2013-04-24'),
(7, 'Topaz', 'portrait', '', '', '', '', '', '', '', 'topaz_A4_H mount copy.png', 'topaz_A4_H W Omount copy.png', 'topaz_A4_mount copy.png', 'topaz_A4_W O mount copy.png', 'topaz_Frame 07 copy.png', 0, '2013-04-24'),
(8, 'Sapphire', 'portrait', '', '', '', '', '', '', '', 'sapphire_A4_H mount copy.png', 'sapphire_A4_H w o mount copy.png', 'sapphire_A4_mount copy.png', 'sapphire_A4_W Omount copy.png', 'sapphire_Frame 08 copy.png', 0, '2013-04-24'),
(9, 'Ruby', 'portrait', '', '', '', '', '', '', '', 'ruby_A1_H mount copy.png', 'ruby_A1_H w out mount copy.png', 'ruby_A1_mount copy.png', 'ruby_A1 WO Mount copy.png', 'ruby_Frame 02 copy.png', 0, '2013-04-24'),
(10, 'Blood Stone', 'portrait', '', '', '', '', '', '', '', 'BloodStone_A1_H Mount copy.png', 'BloodStone_A1_H WO Mount copy.png', 'BloodStone_A4_mount copy.png', 'BloodStone_A1 WO Mount copy.png', 'BloodStone_Frame 10 copy.png', 0, '2013-04-24'),
(11, 'Amber', 'portrait', '', '', '', '', '', '', '', 'Amber_A1_H mount copy.png', 'Amber_A1_H WO Mount copy.png', 'Amber_A1_mount.png', 'Amber_A1 WO Mount copy.png', 'Amber_Frame 05.png', 0, '2013-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `photo_orders_mapping`
--

CREATE TABLE IF NOT EXISTS `photo_orders_mapping` (
  `orderId` int(11) NOT NULL AUTO_INCREMENT,
  `orderNo` varchar(500) NOT NULL,
  `imageId` int(11) NOT NULL,
  `paperId` int(11) NOT NULL,
  `frameId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userType` enum('artist','user') NOT NULL,
  `unitPrice` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `size` varchar(200) NOT NULL,
  `frameType` varchar(200) NOT NULL,
  `totalPrice` varchar(200) NOT NULL,
  `paymentStatus` enum('pending','done') NOT NULL,
  `deliveryStatus` enum('notdelivered','processing','delivered') NOT NULL,
  `shipperId` int(11) NOT NULL,
  `shipperPrice` varchar(500) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `createdDate` date NOT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `photo_orders_mapping`
--

INSERT INTO `photo_orders_mapping` (`orderId`, `orderNo`, `imageId`, `paperId`, `frameId`, `userId`, `userType`, `unitPrice`, `quantity`, `size`, `frameType`, `totalPrice`, `paymentStatus`, `deliveryStatus`, `shipperId`, `shipperPrice`, `status`, `createdDate`) VALUES
(6, '', 156, 5, 5, 1, 'user', '6600', '1', 'a2', 'mount', '6600', 'done', 'notdelivered', 1, '', 0, '0000-00-00'),
(7, '', 156, 4, 7, 1, 'user', '2200', '1', 'a4', 'mount', '2200', 'done', 'notdelivered', 1, '', 0, '0000-00-00'),
(8, '', 98, 4, 3, 1, 'user', '6300', '1', 'a2', 'mount', '6300', 'done', 'notdelivered', 1, '', 0, '0000-00-00'),
(9, '', 159, 3, 10, 1, 'user', '5550', '1', 'a2', 'mount', '5550', 'done', 'notdelivered', 1, '', 0, '0000-00-00'),
(10, '', 156, 5, 5, 1, 'user', '6600', '1', 'a2', 'mount', '6600', 'done', 'notdelivered', 1, '', 0, '0000-00-00'),
(11, '', 156, 4, 7, 1, 'user', '2200', '1', 'a4', 'mount', '2200', 'done', 'notdelivered', 1, '', 0, '0000-00-00'),
(12, '', 98, 4, 3, 1, 'user', '6300', '1', 'a2', 'mount', '6300', 'done', 'notdelivered', 1, '', 0, '0000-00-00'),
(13, '', 159, 3, 10, 1, 'user', '5550', '1', 'a2', 'mount', '5550', 'done', 'notdelivered', 1, '', 0, '0000-00-00'),
(14, '', 39, 1, 11, 21, 'user', '5300', '1', 'a2', 'mount', '5300', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(15, '', 252, 2, 2, 21, 'user', '2100', '1', 'a4', 'mount', '2100', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(16, '', 39, 1, 11, 21, 'user', '5300', '1', 'a2', 'mount', '5300', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(17, '', 252, 2, 2, 21, 'user', '2100', '1', 'a4', 'mount', '2100', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(18, '', 39, 1, 11, 21, 'user', '5300', '1', 'a2', 'mount', '5300', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(19, '', 252, 2, 2, 21, 'user', '2100', '1', 'a4', 'mount', '2100', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(20, '', 39, 1, 11, 21, 'user', '5300', '1', 'a2', 'mount', '5300', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(21, '', 252, 2, 2, 21, 'user', '2100', '1', 'a4', 'mount', '2100', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(22, '', 39, 1, 11, 21, 'user', '5300', '2', 'a2', 'mount', '10600', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(23, '', 252, 2, 2, 21, 'user', '2100', '2', 'a4', 'mount', '4200', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(24, '', 156, 5, 5, 1, 'user', '6600', '1', 'a2', 'mount', '6600', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(25, '', 156, 4, 7, 1, 'user', '2200', '1', 'a4', 'mount', '2200', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(26, '', 98, 4, 3, 1, 'user', '6300', '1', 'a2', 'mount', '6300', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(27, '', 159, 3, 10, 1, 'user', '5550', '1', 'a2', 'mount', '5550', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(28, '', 156, 5, 5, 1, 'user', '6600', '1', 'a2', 'mount', '6600', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(29, '', 156, 4, 7, 1, 'user', '2200', '1', 'a4', 'mount', '2200', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(30, '', 98, 4, 3, 1, 'user', '6300', '1', 'a2', 'mount', '6300', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(31, '', 159, 3, 10, 1, 'user', '5550', '2', 'a2', 'mount', '11100', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(32, '', 39, 1, 11, 21, 'user', '5300', '1', 'a2', 'mount', '5300', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(33, '', 252, 2, 2, 21, 'user', '2100', '1', 'a4', 'mount', '2100', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(34, '', 252, 2, 2, 21, 'user', '2100', '1', 'a4', 'mount', '2100', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(35, '', 207, 4, 5, 69, 'artist', '6000', '5', 'a2', 'omount', '30000', 'done', 'notdelivered', 1, '', 0, '0000-00-00'),
(36, '', 254, 1, 2, 66, 'user', '5300', '1', 'a2', 'mount', '5300', 'done', 'notdelivered', 1, '', 0, '0000-00-00'),
(37, '', 340, 1, 5, 21, 'user', '1900', '1', 'a4', 'omount', '1900', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(38, '', 346, 1, 8, 82, 'user', '2000', '1', 'a4', 'mount', '2000', 'pending', 'notdelivered', 1, '', 0, '0000-00-00'),
(39, '', 342, 1, 11, 78, 'user', '2000', '1', 'a4', 'mount', '2000', 'done', 'notdelivered', 1, '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `photo_papers`
--

CREATE TABLE IF NOT EXISTS `photo_papers` (
  `paperId` int(11) NOT NULL AUTO_INCREMENT,
  `paperName` varchar(500) NOT NULL,
  `paperType` varchar(500) NOT NULL,
  `paperQuality` varchar(500) NOT NULL,
  `paperWidth` varchar(500) NOT NULL,
  `paperHeight` varchar(500) NOT NULL,
  `paperUnit` varchar(500) NOT NULL,
  `paperPrice` varchar(500) NOT NULL,
  `a1mouldedPrice` varchar(500) NOT NULL,
  `a1withoutmouldedPrice` varchar(500) NOT NULL,
  `a1wrapPrice` varchar(500) NOT NULL,
  `a2mouldedPrice` varchar(500) NOT NULL,
  `a2withoutmouldedPrice` varchar(500) NOT NULL,
  `a2wrapPrice` varchar(200) NOT NULL,
  `a3mouldedPrice` varchar(500) NOT NULL,
  `a3withoutmouldedPrice` varchar(500) NOT NULL,
  `a3wrapPrice` varchar(200) NOT NULL,
  `a4mouldedPrice` varchar(500) NOT NULL,
  `a4withoutmouldedPrice` varchar(500) NOT NULL,
  `a4wrapPrice` varchar(200) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `createdDate` date NOT NULL,
  PRIMARY KEY (`paperId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `photo_papers`
--

INSERT INTO `photo_papers` (`paperId`, `paperName`, `paperType`, `paperQuality`, `paperWidth`, `paperHeight`, `paperUnit`, `paperPrice`, `a1mouldedPrice`, `a1withoutmouldedPrice`, `a1wrapPrice`, `a2mouldedPrice`, `a2withoutmouldedPrice`, `a2wrapPrice`, `a3mouldedPrice`, `a3withoutmouldedPrice`, `a3wrapPrice`, `a4mouldedPrice`, `a4withoutmouldedPrice`, `a4wrapPrice`, `status`, `createdDate`) VALUES
(1, 'Enhanced  Matte', 'normal', 'good', '', '', '', '', '2600', '2200', '0', '1500', '1200', '0', '1000', '850', '0', '600', '500', '0', 1, '2013-04-24'),
(2, 'Textured  fine art', 'normal', 'good', '', '', '', '', '3200', '2700', '0', '1800', '1500', '0', '1250', '1100', '0', '700', '600', '0', 1, '2013-04-24'),
(3, 'Premium  Lusture', 'normal', 'good', '', '', '', '', '2900', '2600', '0', '1750', '1450', '0', '1150', '1000', '0', '650', '550', '0', 1, '2013-04-24'),
(4, 'Technova  Canvas', 'normal', 'good', '', '', '', '', '4300', '4000', '4000', '2500', '2200', '2200', '1600', '1450', '1450', '800', '700', '700', 1, '2013-04-24'),
(5, 'Hahnemuhle Canvas', 'normal', 'good', '', '', '', '', '4900', '4600', '4600', '2800', '2500', '2500', '1800', '1650', '1650', '900', '800', '800', 1, '2013-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `photo_photographers`
--

CREATE TABLE IF NOT EXISTS `photo_photographers` (
  `photographerId` int(11) NOT NULL AUTO_INCREMENT,
  `photographerFullName` varchar(500) NOT NULL,
  `photographerUserName` varchar(222) NOT NULL,
  `photographerPassword` varchar(222) NOT NULL,
  `photographerAddress` text NOT NULL,
  `photographerEmail` varchar(222) NOT NULL,
  `photographerCity` varchar(222) NOT NULL,
  `photographerState` varchar(222) NOT NULL,
  `photographerCountry` varchar(222) NOT NULL,
  `photographerPhoneNo` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `registerStatus` enum('notverified','verified') NOT NULL,
  PRIMARY KEY (`photographerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `photo_photographers`
--

INSERT INTO `photo_photographers` (`photographerId`, `photographerFullName`, `photographerUserName`, `photographerPassword`, `photographerAddress`, `photographerEmail`, `photographerCity`, `photographerState`, `photographerCountry`, `photographerPhoneNo`, `status`, `registerStatus`) VALUES
(3, 'Goutham Shankar', 'goutham', 'goutham', 'Indranagar', 'chitra@inertiainc.co.in', 'bangalore', 'karnataka', 'India', '8976532234', 0, 'verified'),
(34, 'Venkatesh Appala', 'venkatesh', 'venkatesh', 'Honeycomb Creative Support (p) Ltd.', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(35, 'Aishwarya Belliappa', 'aishwarya', 'aishwarya', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '919986687424', 0, 'verified'),
(36, 'Ankita Gupta', 'ankita', 'ankita', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(37, 'Prakash Khaja', 'prakashkhaja', 'prakashkhaja', 'Honeycomb Creative Support (p) Ltd', 'photostop.blog@gmail.com', 'Bangalore', 'Karnataka', 'India', '9876785656', 0, 'verified'),
(38, 'Shankar Subramanian', 'shankar', 'shankar', 'Honeycomb', 'photostop.blog@gmail.com', 'Bangalore', 'Karnataka', 'India', '7867854565', 0, 'verified'),
(39, 'Shanthala Sudhindranath', 'shanthala', 'shanthala', 'Honeycomb', 'photostop.blog@gmail.com', 'Bangalore', 'Karnataka', 'India', '8786567895', 0, 'verified'),
(40, 'Sreeroop', 'sreeroop', 'sreeroop', 'Honeycomb', 'photostop.blog@gmail.com', 'Bangalore', 'Karnataka', 'India', '9878987678', 0, 'verified'),
(41, 'Sribha Jain', 'sribha', 'sribha', 'Honeycomb', 'photostop.blog@gmail.com', 'Bangalore', 'Karnataka', 'India', '8789787899', 0, 'verified'),
(42, 'Vikram Murthy', 'vikram', 'vikram', 'Honeycomb', 'photostop.blog@gmail.com', 'Bangalore', 'Karnataka', 'India', '8987897867', 0, 'verified'),
(43, 'Aasim Mistry', 'aasimM', 'aasimM', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '919986687424', 0, 'verified'),
(44, 'Kumar Ramachandra', 'kumarR', 'kumarR', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(45, 'Ketan Ankalikar', 'ketanA', 'ketanA', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(46, 'Kameshwar Nayak', 'kameshwar', 'kameshwar', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(47, 'Girish Mayachari', 'girish', 'girish', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(48, 'Renith Valsarajan', 'renith', 'renith', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(49, 'Chetan Krishna', 'chetan', 'chetan', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(50, 'Binu Balakrishnan', 'binubala', 'binubala', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(52, 'Goutam Majumdar', 'goutam', 'goutam', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(53, 'Sabir Ahmed', 'sabirahmed', 'sabirahmed', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(54, 'Raghunandan', 'raghunandan', 'raghunandan', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(55, 'Harsh Sharma', 'harshsharma', 'harshsharma', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(56, 'Jaspreet Singh', 'jaspreet', 'jaspreet', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(57, 'Lakshmikantha Mattur', 'lakshmi', 'lakshmi', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(58, 'Mandeep Singh Mann', 'mandeep', 'mandeep', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(59, 'Prashanth Krishna', 'prashanth', 'prashanth', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(60, 'Nagarjuna Meda', 'Nagarjuna Meda', 'nagarjuna', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(61, 'Santosh Sugumar', 'santosh', 'santosh', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(62, 'Yogesh Gupta', 'yogesh', 'yogesh', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(63, 'Shatrujay Sharan', 'sharan', 'sharan', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(64, 'Manjunath Kumatagi', 'manjunath', 'manjunath', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(65, 'Rajesh Gangadharan', 'rajesh', 'rajesh', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(66, 'Meghna Iyer', 'meghna', 'meghna', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(67, 'Prithivi Poosapati', 'prithvi', 'prithvi', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(68, 'Sucheth S L', 'sucheth', 'sucheth', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(69, 'Harika', 'harika', 'harika', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '919986687424', 0, 'verified'),
(70, 'Anzal Saleem', 'anzalsaleem', 'anzalsaleem', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(71, 'Saravanan Ekambaram', 'saravanan', 'saravanan', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(72, 'Tapas Datta', 'tapasdatta', 'tapasdatta', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(73, 'Kusumakar Dwivedi', 'kusumakar', 'kusumakar', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844630170', 0, 'verified'),
(74, 'Tarun Giridhar', 'tarung', 'tarung', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(75, 'anusha', 'anusha', 'anusha', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(76, 'Renuka Nayaka', 'Renuka', 'renuka', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(77, 'Tasneem Khan', 'Tasneem Khan', 'tasneem', 'Photostop', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(78, 'Nandhini', 'nandhini', 'nandhini', 'Honeycomb', 'photostop.blog@gmail.com', 'Bengaluru', 'Karnataka', 'India', '9844360170', 0, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `photo_photographers_image_mapping`
--

CREATE TABLE IF NOT EXISTS `photo_photographers_image_mapping` (
  `imageId` int(11) NOT NULL AUTO_INCREMENT,
  `categoryId` varchar(500) NOT NULL,
  `uploadedId` int(11) NOT NULL,
  `uploadedBy` enum('photographer','admin') NOT NULL,
  `fileName` text NOT NULL,
  `fileId` text NOT NULL,
  `imageResolution` varchar(500) NOT NULL,
  `imageName` varchar(500) NOT NULL,
  `imageDescription` text NOT NULL,
  `imageTags` text NOT NULL,
  `a1imagePrice` varchar(500) NOT NULL,
  `a2imagePrice` varchar(500) NOT NULL,
  `a3imagePrice` varchar(500) NOT NULL,
  `a4imagePrice` varchar(500) NOT NULL,
  `imageType` enum('portrait','landscape') NOT NULL,
  `newstatus` enum('1','0') NOT NULL,
  `imageStatus` enum('pending','rejected','approved') NOT NULL,
  `takenDate` date NOT NULL,
  `createdDate` date NOT NULL,
  PRIMARY KEY (`imageId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=352 ;

--
-- Dumping data for table `photo_photographers_image_mapping`
--

INSERT INTO `photo_photographers_image_mapping` (`imageId`, `categoryId`, `uploadedId`, `uploadedBy`, `fileName`, `fileId`, `imageResolution`, `imageName`, `imageDescription`, `imageTags`, `a1imagePrice`, `a2imagePrice`, `a3imagePrice`, `a4imagePrice`, `imageType`, `newstatus`, `imageStatus`, `takenDate`, `createdDate`) VALUES
(28, '1', 3, 'photographer', 'bird in the woods.jpg', 'p17p2i0ltb1rdh100f1t0c1q6vtep4', '1200*800', 'Bird in the woods', 'Bird in the woods', 'Bird in the woods, Gautham Shankar, Wildlife', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(29, '11', 3, 'photographer', 'cat.jpg', 'p17p2i4s6b1euvm0du4111kdng4', '1200*800', 'Cat', 'Cat', 'Cat, Gautham Shankar', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(30, '1', 3, 'photographer', 'Eagle.jpg', 'p17p2i7k6n1cnu1j2ns8u1f24aka4', '1200*800', 'Eagle', 'Eagle', 'Eagle, Gautham Shankar', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(31, '', 3, 'photographer', 'man with moustache.jpg', 'p17p2i9qgj1kkcpke1eso1m9g1mfm4', '1200*800', 'Man with moustache', 'Man with moustache', 'Man with moustache, Gautham Shankar', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-04-26'),
(32, '11', 3, 'photographer', 'tusker.jpg', 'p17p2ib9m72ulmgc1e7g1fp28j34', '1200*800', 'Tusker', 'Tusker', 'Tusker, Gautham Shankar', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-30'),
(68, '', 34, 'photographer', 'Venkatesh Appala 1.jpg', 'p17q491n8c1b8012nu1j3q14qd3ge4', '432*638', 'Hilly Rocks of Devarayanadurga', 'The hilly rocks with a deciduous glamour glow with blue sky with a wonderful clouds - Devarayanadurga - Tumkur, Bangalore', 'rocks', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-09'),
(69, '9,8', 34, 'photographer', 'Venkatesh Appala 2.jpg', 'p17q495nkn1355cui175p1c6cpmt4', '648*432', 'Yoganarasimha and the Bhoganarasimha Temple', 'Yoganarasimha and the Bhoganarasimha Temple built with Dravidian style of architecture, faces east and is said to have been constructed by Kanthirava Narasaraja I, king of Mysore - Devarayanadurga - Tumkur, Bangalore', 'temple', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(70, '', 35, 'photographer', 'Aishwarya Belliappa 1.jpg', 'p17q49pou31v2sa8h1dlc7b7hqs4', '648*434', 'Frog and the Flower', 'Frog and the Flower\nNature has varies ways to surprise us. I was rewarded with this sight when I went for a walk in the garden', 'frog,flower,garden', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-09'),
(71, '8', 35, 'photographer', 'Aishwarya Belliappa 2.jpg', 'p17q4a1lj3pi518edr7q1dtlf84', '648*434', 'Moonrise in Hampi', 'Moonrise in Hampi\nIts any amazing experience to watch the moon rise against the rocky hills of Hampi soaked in the sunset colours.', 'moon,rise, hampi', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(72, '9,7,2', 43, 'photographer', 'Aasim Mistry 2.jpg', 'p17q6ba21u1sp71bt311ch16vh1ji34', '648*431', 'Zabriskie Point', 'Zabriskie Point is an elevated overlook of a colorful,undulating landscape of gullies and mud hills at the edge of the Black Mountains, Death Valley National Park-CA', 'places,Zabriskie Point,aasim,mistry', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(73, '2', 43, 'photographer', 'Aasim Mistry 1.jpg', 'p17q6bcpes1jtspi3c6b1l4lb8j4', '648*432', 'Hebbal Lake', 'Sun peaks through a hole in the clouds at dawn casting a golden spotlight on the water, Hebbal Lake - Bangalore', 'hebbal lake,places,aasim,mistry', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(74, '6,2', 36, 'photographer', 'Ankita Gupta 1.jpg', 'p17q6bmip116hq1p7du5t16tf5h14', '648*432', 'The Gloriously boomed flower ', 'gloriously bloomed to show off its inner beauty', 'flower,ankita,gupta,', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(75, '8', 36, 'photographer', 'Ankita Gupta 2.jpg', 'p17q6bok5rnp2ga9cv4p1ufc4', '648*432', 'Festive colors', '“Festive Colors” – colors spring out on the festive occasion of DurgaPooja.', 'festivals,colors,places,ankita', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(82, '', 39, 'photographer', 'Shanthala Sudhindranath_4.jpg', 'p17q6d3kodom81bjh2qt1j7omva4', '638*432', 'Landscape of Los Angeles', 'Nature never goes out of style.\n- Lovely landscapes in los angeles, California,USA.', 'nature,landscape,los angeles,places,shanthala', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(83, '', 39, 'photographer', 'Shanthala Sudhindranath_5.jpg', 'p17q6d6aghg5m1qq11ihr1nio1v0a4', '638*432', 'Mahatma Gandhi shot on the hill of los angeles', 'God has no religion - Mahatma Gandhi.\n- Shot on the hill of los angeles, California, USA.', 'mahatma gandhi,people,places,los angeles,shanthala', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-10'),
(84, '9,2', 39, 'photographer', 'Shanthala Sudhindranath_1.jpg', 'p17q6dfb56rs81cqn1qcq74pojd4', '638*432', 'Ventura Beach in California', 'You don’t take a Photograph you make it – Ansel Adams.\n- Beautiful evening on Ventura beach in los angeles, California, USA.', 'california,USA,ventura beach,beautiful,evening,places,shanthala', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(85, '', 39, 'photographer', 'Shanthala Sudhindranath_6.jpg', 'p17q6dhkl91n10s2ph261sifbt94', '638*432', 'Peacock at Karanji Lake,Mysore', 'Peacock our Indian National bird is the most beautiful and amazing large long tailed bird in the world.\n- Karanji lake mysore, Karnataka, India.', 'peacock,bird,mysore,karanji lake,karnataka,places,shanthala', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(86, '', 44, 'photographer', 'Kumar Ramachandra 2.jpg', 'p17q6e0gfg3ofb371de8ugnslm4', '638*432', 'Reflecting upon a bicycle', 'Reflecting upon a Bicycle - It’s not how many times you fall, its how many times you get back up that matters\nPhotographed at Gorur Dam, Hassan, Karnataka', 'bicycle,gorur dam,hassan,karnataka,places,kumar,ramachandra', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(87, '9,2', 44, 'photographer', 'Kumar Ramachandra 3.jpg', 'p17q6e2lc4h1krq71hfg19snl0t4', '638*432', 'Companionship for Solitude in Goa', 'Companionship for Solitude,\nPhotographed at Goa', 'solitude,companionship,goa,places,kumar,ramachandra', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(88, '', 44, 'photographer', 'Kumar Ramachandra 4.jpg', 'p17q6e4dke17ts13eijf51ol418054', '638*432', 'Man and the Moon in Goa', 'Man and Moon - Both With Their Dark Sides\nPhotographed at Goa', 'man,moon,people,places,goa,kumar,ramachandra', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-10'),
(89, '9,8,2', 44, 'photographer', 'Kumar Ramachandra 1.jpg', 'p17q6e6voauojdr1ban117slpn4', '638*432', 'The Ghats of Varanasi', 'The Oars of Death and the Transcendental are forever affirmed on the Ghats of Varanasi Photographed at Varanasi', 'ghats of varanasi,varanasi,places,kumar,ramachandra', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-31'),
(90, '', 45, 'photographer', 'Ketan Ankalikar 1.jpg', 'p17q6ei32s1m2vt04mr715jlck14', '638*432', 'Statues of two Apsaras at Angkor Wat, Cambodia', 'The most exciting attractions are between two opposites that never meet - Statues of two Apsaras at Angkor Wat, Cambodia', 'statues,apsarasas,cambodia,angor wat,places,ketan,ankalikar', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-10'),
(91, '6', 45, 'photographer', 'Ketan Ankalikar 5.jpg', 'p17q6eks85j4d14pp132n1bt31veh4', '638*432', 'Flowers on a Shikhara Boat in Kashmir', 'Where flowers bloom, so does hope - Flowers on a Shikhara Boat in Kashmir', 'flowers,shikara boat,kashmir,places,ketan,ankalikar', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(92, '9,7', 45, 'photographer', 'Ketan Ankalikar 2.jpg', 'p17q6eo30o1vc2hh3l92tu7saf4', '638*432', 'The Illuminated Metallic Pillars in Doha', 'We are what we think. All that we are arises with our thoughts. With our thoughts, we make our world.\n-Teachings of the Buddha -- Metalllic Pillars illuminated at night, Doha - Qatar', 'pillars,illuminated,night,doha,qatar,places,ketan,ankalikar', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(93, '', 45, 'photographer', 'Ketan Ankalikar 3.jpg', 'p17q6eqcti6dsi1mdd919sg1v485', '638*432', 'Flamingos in Singapore', 'A group of Flamingos at Singapore Night safari.\n', 'flamingos,group,singapore,night,safari,ketan,ankalikar', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(94, '', 45, 'photographer', 'Ketan Ankalikar 4.jpg', 'p17q6ese601sdg6sl1gjn1pfe1j7g4', '638*432', 'Nigin Lake, Kashmir', 'Every moment of light and dark is a miracle. - Serene Natural Beauty of Nigin Lake, Kashmir', 'nigin lake,natural beauty,serene,kashmir,ketan,ankalikar', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(95, '2,1', 46, 'photographer', 'Kameshwar Nayak 2.jpg', 'p17q6f7j1hfh4cv71eo11pj51mrg4', '638*432', 'Wings of Freedom', 'Wings of Freedom', 'freedom,wings,birds,kameshwar,nayak', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(96, '1', 46, 'photographer', 'Kameshwar Nayak 1.jpg', 'p17q6f86ua83mgoo19st8qaoak4', '638*432', 'Bird and its prey', 'First thing I do in the morning is PREY.', 'prey,birds,kameshwar,nayak', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(97, '2', 47, 'photographer', 'Girish Mayachari 3.jpg', 'p17q6feie8q9egl914qb79aj9q4', '638*432', 'A Beautiful Butterfly', 'A Beautiful Butterfly', 'beautiful,butterfly,nature,girish,mayachari', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(98, '2', 47, 'photographer', 'Girish Mayachari 1.jpg', 'p17q6fgal41ej313hq170r1jfst074', '638*432', 'A baronet basking in the Sun', 'A baronet basking in the Sun; it''s beauty enhanced by the sunlight gently filtering through it''s wings', 'sun,nature,beauty,girish,mayachari', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-28'),
(99, '6', 47, 'photographer', 'Girish Mayachari 2.jpg', 'p17q6fhqga89h1qst6m11jieikc4', '638*432', 'An ant explores the flower', 'n ant explores the flower in search of energy rich nectar', 'ant,flower,nectar,honey,nature,beauty,girish,mayachary', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(100, '9,2', 37, 'photographer', 'PrakashKaja .jpg', 'p17q6g6ft7ptt1v3d1bjn1b7h101l4', '638*432', 'The lake of kaivara', 'The lake of kaivara', 'The lake of kaivara, prakash khaja, places, nature,beauty', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(101, '2', 37, 'photographer', 'PrakashKaja 2.jpg', 'p17q6gb8kui7kgkd9m51qaa4hc4', '638*432', 'Hills of Kaivara', 'Every hill top is within reach if you just keep climbing.\n', 'hills, kaivara,prakash khaja, nature,beauty', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(102, '', 37, 'photographer', 'PrakashKaja 3.jpg', 'p17q6gc9mi1f85e2mvqh1g0tt9h4', '638*432', 'Kaivara - a photographer''s view', 'Kaivara - a photographer''s view', 'kaivara,nature,beauty,prakash khaja', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(103, '', 42, 'photographer', 'Vikram Murthy 1.jpg', 'p17q6gh1rorla7clnvhv57cbu4', '638*432', 'Shankha, a symbol of fertility', 'Shankha (Sanskrit: ???, ?a?kha), also spelled and pronounced as shankh and sankha, is a conch shell which is of ritual and religious importance in both Hinduism and Buddhism.', 'conch,shankha,religion,devotion,vikram murthy', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(105, '8', 48, 'photographer', 'Kathakali - Texture Fine.jpg', 'p17q6gs46q57i1rdu18e41vjt24f4', '638*432', 'Kathakali', 'Kathakali is a highly stylized classical Indian dance-drama originated from Kerala noted for the attractive make-up of characters, elaborate costumes, detailed gestures and well-defined body movements presented in tune with the anchor playback music and complementary percussion.', 'dance,culture,kathakali,people,india,renith', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(106, '', 49, 'photographer', 'Chetan Krishna 2.jpg', 'p17q6hpjnb1g251ht012om1bmt1mia4', '638*432', 'The Blowing Winds', 'The Blowing Winds', 'wind,blowing,nature,chetan krishna', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(107, '', 49, 'photographer', 'Chetan Krishna 1.jpg', 'p17q6hraj710enqlc11jle4r159q4', '638*432', 'The Beautiful Sky', 'The Beautiful Sky', 'sky,beauty,nature,chetan krishna', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(109, '9,2', 52, 'photographer', 'Goutam Majumdar 3.jpg', 'p17q6kd1jf1d3frn726m1bijetj4', '638*432', 'A calm morning at the Ulsoor Lake', 'One calm morning at Ulsoor Lake, Bangalore, Karnataka.', 'lake,ulsoor lake,morning,nature,beauty,goutam majumdar', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(110, '', 52, 'photographer', 'Goutam Majumdar 2.jpg', 'p17q6kgrv5h031l385steuegn24', '638*432', 'The Bass Harbor head lighthouse', 'Memorable Bass Harbor head lighthouse, one of the most photographed light houses in the world at Acadia National Park, Maine, USA.', 'lighthouse,harbor,park marine,USA,places,goutam majumdar', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(111, '9', 52, 'photographer', 'Goutam Majumdar 1.jpg', 'p17q6kkhv7hpt4o2v361qkgul14', '638*432', 'Antelope Canyon, Arizona', 'Play of light and shadow deep under earth at Antelope Canyon, near Page, Arizona, USA.', 'antelope canyon,arizona,places,beauty,shadow,light,goutam majumdar', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(112, '', 38, 'photographer', 'varanasi3- Lady with a dog- LU.jpg', 'p17q6lt86b1mjl1kfi9st9rc4l84', '638*432', 'Lady with a dog ', 'Scene from the Ghats of Varanasi - Lady with Dog', 'varanasi,lady,people,places,shankar subramanian', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(113, '11,9', 38, 'photographer', 'goat - luster.jpg', 'p17q6lv8pn1sfbgo519t81gpj14214', '638*432', 'A Goat from the Ghats of Varanasi', 'Scene from the Ghats of Varanasi - Goat', 'goat,varanasi,places,shankar subramanian', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(114, '', 38, 'photographer', 'landscape - EM new.jpg', 'p17q6m0rr91ke01bd31a3719av1c7j4', '638*432', 'Landscape of Munnar', 'Landscape scene from Munnar, Kerala', 'landscape,munnar,kerala,nature,beauty,shankar subramanian', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(115, '10,9', 38, 'photographer', 'teaseller - EM.jpg', 'p17q6m1tv21f2nlpus5of6j8d14', '638*432', 'A Tell Seller in Varanasi', 'A candid shot of a Tea Seller in Varanasi.', 'tea seller,varanasi,candid shot,shankar subramanian', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(116, '8', 38, 'photographer', 'tribal7 - LU.jpg', 'p17q6m3osd1j6b1v0l2u71k1ehgr4', '638*432', 'Lady in Ghungat', 'Portrait of a tribal, shot while waiting in the bus stop on the way to Sasan Gir, Gujarat.', 'lady,people,places,shankar subramanian,gujarat', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-28'),
(117, '', 38, 'photographer', 'sadhu3_ 2nos.jpg', 'p17q6m99g48it1svh1h3f6js1afg4', '638*432', 'Sadhu', 'Sadhu', 'sadhu,people,shankar subramanian,culture', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-10'),
(118, '2', 40, 'photographer', 'Sreeroop 1.jpg', 'p17q6qmubs1djtoaumlu1irigob4', '638*432', 'Alone in the Woods', 'Alone in the Woods\nLoneliness crept up slowly, unheard,\nLike the madness set out to take over a soul,\nAnd before I knew it, I could feel it in my bones,\nThis maddening loneliness would not leave me alone.\nI could feel it stronger in the midst of the crowd,\nMany smiling faces, but none could touch my heart,\nAll I wanted to do was run away from the noise,\nWhere I could be alone and feel my solitary warmth.\n', 'woods,places,beauty,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(119, '9', 40, 'photographer', 'Sreeroop 2.jpg', 'p17q6qoq801tu0108u11kalca1oiq4', '638*432', 'Bellagio Fountains-Las Vegas', 'Bellagio Fountains-Las Vegas\nBuilt in a 9 acre manmade lake, the fountains boast over 1200 nozzles and 4500 lights, and can shoot water as high as 460 feet in one of their massive performances.', 'Bellagio Fountains,Las Vegas,places,Sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(120, '', 40, 'photographer', 'Sreeroop 3.jpg', 'p17q6qqj47idafec1ecuaao1dqm4', '638*432', 'Lone bird resting in Golden Hour', 'GoldenHour\nLone bird resting in Golden Hour.\nI find the golden hour to be the most beautiful, magical light to shoot.', 'bird, Gloden Hour,beauty,places,Sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(121, '', 40, 'photographer', 'Sreeroop 4.jpg', 'p17q6qsc68ugb11fc1l3l15311i944', '638*432', 'Grand Canyon Sunset', 'GrandCanyonSunset\nThe Grand Canyon is recognized as a natural wonder that you simply have to see to believe because of the overall scale and size combined with the beautifully colored landscape. Stretching 277 miles from end to end, steep, rocky walls descend more than a mile to the canyon''s floor, where the wild Colorado river traces a swift course southwest, the canyon offers a variety of lookouts and experiences that provide visitors with a view that cannot be matched.', 'sunset,beauty,nature,grand canyon,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(122, '', 40, 'photographer', 'Sreeroop 5.jpg', 'p17q6qttvc1dapjcjlvpa13t084', '638*432', 'La Jola Cov, SanDiego', 'La Jola Cove-SanDiego\nLa Jolla Cove is a cove and a beach in La Jolla, San Diego, California. It is popular for swimming, scuba diving and snorkelling.', 'san diego, places, sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(124, '2', 40, 'photographer', 'sreeroop2.jpg', 'p17q6r0r1493n1q2m1tppvrm2l44', '638*432', 'The infinite beauty', 'Nature is painting for us, day after day, pictures of infinite beauty.', 'nature,beauty,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(125, '', 40, 'photographer', 'sreeroop3.jpg', 'p17q6r2rhr1cor1r1sop4da8pss4', '638*432', 'The beauty of water', 'Always be like water. Float in the times of pain or dance like waves along the wind which touches its surface.', 'water,beauty,nature,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-10'),
(126, '', 53, 'photographer', 'Sabir Ahmed 3.jpg', 'p17q8vfprq1r6s2ic1tbo1r5sien4', '638*432', 'The Bibi Ka Maqbara in Aurangabad', 'The Bibi Ka Maqbara in Aurangabad, India just after sundown. This monument is a replica of the more popular Taj Mahal in Agra.', 'places,mosque,religion,culture,india,sabir ahmed', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-11'),
(127, '6', 53, 'photographer', 'Sabir Ahmed 2.jpg', 'p17q8vhfkf17qd1le31jet1s9k1s704', '638*432', 'A Calla Lily', 'A Calla Lily at a home stay in Ooty, India. Focus is on the obvious place with a very shallow DOF.', 'lilly,flower,beauty,nature,sabir ahmed', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-27'),
(128, '', 54, 'photographer', 'Raghunandan 1.jpg', 'p17q8vp9ooaoc1b231lt21io7vjo4', '638*432', 'Gold Fishing Silhouette', 'Gold Fishing Silhouette - Early Morning Venture of 2 fisherman on a 2 feet wide wooden boat battling through the rapids of tough sea in search for their livelihood at Pondicherry , India .', 'water,fishing,boat,silhoutte,nature,beauty,raghunandan', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-11'),
(129, '9,8', 54, 'photographer', 'Raghunandan 2.jpg', 'p17q8vrgsd1fvc1hg81i341hv21fmh4', '638*432', 'Victoria Memorial Hall Reflection', 'Victoria Memorial Hall Reflection – The Grandeur of Kolkata’s beauty doubled during the Dus', 'victoria memorial hall,places,kolkata, raghunandan', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(131, '9,8', 55, 'photographer', 'Harsh Sharma 2.jpg', 'p17q9072601gl01s0415d2139ehc4', '638*432', 'Bazaar of Ancient Hampi.', 'Bazaar of Ancient Hampi.\n', 'places,culture,india,beauty,harsh sharma', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(132, '', 56, 'photographer', 'Jaspreet Singh 1.jpg', 'p17q90b6d9vcu18m3ovach3tn54', '638*432', 'Silhouette of tourists', 'Silhouette of tourists getting awed by the magnums Chitradurga Fort while passing through its mighty gates.....', 'people,places,silhoutte,india,jaspreet singh', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-11'),
(133, '', 38, 'photographer', 'Naga Sadhu.jpg', 'p17q90pjnh1ltj16av14ca1ant3lf4', '638*432', 'Naga Sadhu', 'Naga Sadhu at the Kumbh Mela', 'people,places,religion,culture,india,shankar subramanian', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-11'),
(134, '', 57, 'photographer', 'Lakshmikantha Mattur 1.jpg', 'p17q92pdlh1vusg2g1n57ut1k764', '638*432', 'The Eiffel Tower', '\nEiffel tower: a late evening shot showing the eiffel tower in all its glory with the fountains adding more drama', 'eiffel tower,places,loactions,abroad,paris,lakhsmikanth', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-11'),
(135, '', 57, 'photographer', 'Lakshmikantha Mattur 2.jpg', 'p17q92r8enb32187s1fbbr7t15ca4', '638*432', 'Pied Bush Chat', 'Pied bush chat: wildlife is all around if you have an eye for it, this female pied bushchat in its grassland habitat in beautiful morning light - outskirts of bangalore.', 'beauty,birds,banglore,india,nature,lakshmikanth', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-11'),
(136, '9,8', 58, 'photographer', 'Mandeep Singh Mann 1.jpg', 'p17q93148t1h1a1trh601ev6m5d4', '638*432', ' Hampi', 'At Hampi, the past comes alive. Whispering winds, magnificient ruins, traces and scents of a bygone era all linger fresh here. And they virtually transport you to a world of kings, battles and long forgotten marvels.', 'hampi,places,india,culture,mandeep singh mann', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(137, '', 58, 'photographer', 'Mandeep Singh Mann 2.jpg', 'p17q932urm117iua11ndh174j1rka4', '638*432', 'Life Underneath', 'While clicking this pic I discovered that if one looks a little closer at this beautiful world, there are always red ants underneath.', 'ants,nature,beauty,closeup,mandeep singh mann', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-11'),
(138, '', 60, 'photographer', 'Nagarjun Meda 1.jpg', 'p17q93n1481dlbo1kcgamdkj0l4', '638*432', 'Pleasant voices from the backyard', 'No need to search in the jungle or in the mountains to hear the pleasant voice, look around, start from your backyard, you will hear them everywhere.', 'birds,nature,beauty,nagarjuna meda', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-11'),
(139, '', 60, 'photographer', 'Nagarjun Meda 2.jpg', 'p17q93p3rreih14ts1bju1e7h1q484', '638*432', 'The Red Pierrot', 'No matter how long you live, fly sky high, spread colours of love, live to the fullest.\nButterfly : Red Pierrot. Bannerghatta national park', 'beauty,nature,nagarjuna meda,butterfly', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-11'),
(140, '', 61, 'photographer', 'Santosh Sugumar 1.jpg', 'p17q94a9vrdi2p101mnllso1qkm4', '638*432', 'Sunset and Water', 'The sky broke like an egg into full sunset and the water caught fire, Captured @ Radha Nagar Beach, ', 'nature,beauty,santosh sugumar,sunset,water', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-11'),
(141, '2', 61, 'photographer', 'Santosh Sugumar 2.jpg', 'p17q94b8gr25n1evt7en1t471osd4', '638*432', 'The Sky at its best', 'The Sky at its best', 'sky,beauty,nature,santosh sugumar', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(142, '', 61, 'photographer', 'Santosh Sugumar 3.jpg', 'p17q94e5hlhqsiio1hl21jbs1i9m4', '638*432', 'Heaven meets Earth', 'When the heaven meets earth, Captured @ Kaivara', 'beauty,nature,kaivara,banglore,india', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-11'),
(143, '9,8,2', 63, 'photographer', 'Shatrujay Sharan 1.jpg', 'p17q9522pe13bg9521p7rbb95ln4', '638*432', 'The Sheshnag Lake', 'According to popular folklore, the Sheshnag Lake is the site where Lord Shiva left His snake (which is believed to represent His power) while en route to Amarnath Cave in Himalaya.', 'nature,beauty,india,religion,culture,sharan,lake', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(144, '', 64, 'photographer', 'Manjunath Kumatagi 1.jpg', 'p17q95cs6g4g310dv1oossc0166m4', '638*432', 'Solitude', 'Being lonely isn''t having no one around you, it''s the feeling that there is no one around you who cares.', 'nature,beauty,manjunath,calm,solitude', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-11'),
(145, '11', 59, 'photographer', 'Prashanth Krishna 1.jpg', 'p17q9dcksc1jpe10a5vlg148cngv4', '638*432', 'Cooling down', 'Shot at Nagarhole National Park, Karnataka. This park was declared the thirty seventh Project Tiger tiger reserve in 1999. Also, this park has a healthy tiger-predator ratio.', 'tiger,animals,prashanth', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(146, '11,8', 59, 'photographer', 'Prashanth Krishna 2.jpg', 'p17q9djt7q1jr0uqfl31q79dmf4', '638*432', 'A Roaring Shot', 'Shot at the Nagarhole National Park, Karnataka. It was declared the 37th Progect Tiger tiger reserve. This park is also known to have a good tiger-predator ratio.', 'tiger,national park,animals,prashanth', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-29'),
(147, '9,8', 48, 'photographer', 'DSC_7418.jpg', 'p17qe35fu6ep2sgn1ee2p9u1dui4', '638*432', 'The most beautiful Shilabalike''s (beautiful dancers) ', 'The most beautiful Shilabalike''s (beautiful dancers) of Belur and Halebid - from the Hoysala Dynasty.\nThe Hoysals temples are well known for its sculptures that run all along the outer wall In all there are two hundred and forty such images. No other Hoysala temple is as articulate in sculpture as this is and these sculptures are "second to none in all of India".\n', 'culture,places,india,heritage,history,renith', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(150, '9,8', 48, 'photographer', 'DSC_7421.jpg', 'p17qeqe16u1b1n9421egbrkh8da4', '638*432', 'A Historic shot', 'The most beautiful Shilabalike''s (beautiful dancers) of Belur and Halebid - from the Hoysala Dynasty.\nThe Hoysals temples are well known for its sculptures that run all along the outer wall In all there are two hundred and forty such images. No other Hoysala temple is as articulate in sculpture as this is and these sculptures are "second to none in all of India".\n', 'history,india,culture,heritage,renith', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(151, '', 48, 'photographer', 'DSC_7438.jpg', 'p17qeqhss03916rg2jr7a17sd4', '638*432', 'The Beautiful dancers of Belur and Halebid ', 'The most beautiful Shilabalike''s (beautiful dancers) of Belur and Halebid - from the Hoysala Dynasty.\nThe Hoysals temples are well known for its sculptures that run all along the outer wall In all there are two hundred and forty such images. No other Hoysala temple is as articulate in sculpture as this is and these sculptures are "second to none in all of India".\n', 'history,culture,heritage,india,renith', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-13'),
(152, '8', 48, 'photographer', 'DSC_7422.jpg', 'p17qeqnem81h4n8gu1ua416281og54', '638*432', 'Sculptures at the Hoysals temples', 'The most beautiful Shilabalike''s (beautiful dancers) of Belur and Halebid - from the Hoysala Dynasty.\nThe Hoysals temples are well known for its sculptures that run all along the outer wall In all there are two hundred and forty such images. No other Hoysala temple is as articulate in sculpture as this is and these sculptures are "second to none in all of India".\n', 'history,india,culture,heritage,renith', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(153, '9,8', 48, 'photographer', 'DSC_7440.jpg', 'p17qeqp8hcjq1eviv1bj8p12pe4', '638*432', 'The Magnificent Sculptures', 'The most beautiful Shilabalike''s (beautiful dancers) of Belur and Halebid - from the Hoysala Dynasty.\nThe Hoysals temples are well known for its sculptures that run all along the outer wall In all there are two hundred and forty such images. No other Hoysala temple is as articulate in sculpture as this is and these sculptures are "second to none in all of India".\n', 'history,renith,india,culture,heritage', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(154, '', 40, 'photographer', 'sreeroop7.jpg', 'p17qernh66153r12pr1nu71pae1s8s4', '638*432', 'On the edge', 'On the edge, a few seconds away to freedom!', 'beauty,birds,nature,pigeon,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-13'),
(155, '', 40, 'photographer', 'sreeroop9.jpg', 'p17qersj667thuji1p0d36ntlf4', '638*432', 'House on Paradise', 'House on Paradise', 'beauty,nature,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-13'),
(156, '2', 40, 'photographer', 'sreeroop8.jpg', 'p17qeru1kcobmoes1odf1bnp1p5t4', '638*432', 'Giant Indian Malabar Flying Squirrel', 'Giant Indian Malabar Flying Squirrel', 'nature,beauty,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(157, '10,2', 40, 'photographer', 'sreeroop23.jpg', 'p17qgl1saa199617bg7gt1rbhjul4', '638*432', 'A lone cyclist', 'A lone cyclist', 'nature,beauty,people,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(158, '1', 40, 'photographer', 'sreeroop18.jpg', 'p17qgl4gem1adhjut1n3i13ad1hin4', '638*432', 'Snack Time', 'Snack time', 'beauty,birds,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(159, '6', 40, 'photographer', 'sreeroop24.jpg', 'p17qgl6m4789d72m1idkmds1vnm4', '638*432', 'Silent Beauty', 'Flowers are peaceful to look at. They have neither emotions nor conflicts', 'nature,beauty,flower,sreeroop', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-28'),
(160, '', 40, 'photographer', 'sreeroop22.jpg', 'p17qglfgvk1m7b33f1kse1sfm1u124', '960*652', 'Rest Down', 'Rest Down', 'beauty,water,people,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-14'),
(161, '', 40, 'photographer', 'sreeroop25.jpg', 'p17qglkl3h1kh81dq41fvs1v2somq4', '960*652', 'Peafowl', 'Peafowl', 'birds,national bird,peacock,india,heritage,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-14'),
(162, '', 40, 'photographer', 'sreeroop15.jpg', 'p17qglop5t1ettfnt1kh41r9kvvd4', '960*652', 'Synchronous diving', 'Synchronous diving of the dolphins', 'beauty,water,dolphins,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-14'),
(163, '11,10,9,8', 40, 'photographer', 'sreeroop11.jpg', 'p17qgmntnu9n7hvi1p189kr1kde4', '960*652', 'Thrissur Pooram', 'Thrissur Pooram is one of the most popular temple festivals of Kerala.It is held at the Vadakkunnathan temple every year on Pooram day (day when the moon rises with the Pooram star)', 'culture,hertiage,religion,india,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(164, '', 40, 'photographer', 'sreeroop16.jpg', 'p17qgmvv3p19khe45hihro16hr4', '960*652', 'Kite Flying ', 'Kite flying across La Jola beach in San Diego', 'festival,event,beauty,places,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-14'),
(165, '', 40, 'photographer', 'sreeroop17.jpg', 'p17qgn1mlo1dh6tbn1la7p5urj44', '960*652', 'Polar bears resting', 'Polar bears resting', 'animals,nature,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-14'),
(166, '', 40, 'photographer', 'sreeroop19.jpg', 'p17qgn51t91pn4g48le7ahc1vpk5', '960*652', 'Mallard Ducks', 'Mallard Ducks', 'ducks,beauty,water,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-14'),
(167, '', 40, 'photographer', '942538_10151606510481071_525461247_n.jpg', 'p17qgncm6m1bd8r6l1gpmffn18q44', '960*652', 'On the tip', 'On the tip', 'nature,beauty,insects,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-14'),
(168, '8,1', 40, 'photographer', '5635_10151504414336071_447207083_n.jpg', 'p17qgnhl4n1ipn14p75f911kg1ss4', '960*652', 'The National bird', 'The nation''s pride', 'beauty,colors,peacock,india,heritage,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(169, '11', 40, 'photographer', '183070_10151615098406071_1761617122_n.jpg', 'p17qgod29p31hg1k609g9u17qo4', '960*652', 'Cool Ice', 'Dolphins and the cool ice', 'water,dolphins,beauty,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(170, '7,2', 40, 'photographer', '428548_10151614270966071_1603338916_n.jpg', 'p17qgois5m1vft131n1fcna67100d4', '60*652', 'Crepuscular rays', 'Crepuscular rays are rays of sunlight that appear to radiate from a point in sky where the sun is located.', 'beauty,nature,light,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(171, '2', 40, 'photographer', 'sreeroop12.jpg', 'p17qgop555tj3100b14clig5cud4', '960*652', 'The Housefly', 'The Housefly', 'beauty,nature,insects, sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(172, '', 40, 'photographer', '483610_10151570740736071_925577472_n.jpg', 'p17qgp13dj1ruvrv8uj81m61ho44', '960*652', 'Elephant and its younger one', 'Every baby animal is unique and adorable, and there is no greater love than that between a mother and her young. It is the power of this love that explains why humans have always sought the company of young animals.', 'beauty,animals,mammals,giant,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-14'),
(173, '', 40, 'photographer', '544647_10151451681871071_1237625565_n.jpg', 'p17qgp4hkt17khbl61ka6fht117d4', '960*652', 'King of the Jungle', 'King of the Jungle', 'animals,fierce,lion,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-14'),
(174, '9,2', 40, 'photographer', '480534_10151175240216071_226875594_n.jpg', 'p17qgpcsdt1rci83pmmf1h2srgd4', '960*652', 'Beauty in Las Vegas', 'Water is fluid, soft, and yielding. But water will wear away rock, which is rigid and cannot yield. As a rule, whatever is fluid, soft, and yielding will overcome whatever is rigid and hard. This is another paradox: what is soft is strong.', 'beauty,nature,water,places,vegas,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(175, '7', 40, 'photographer', '375889_10151253163496071_398927171_n.jpg', 'p17qgpepjrdu51uvs1tb9mldso04', '960*652', 'The Giant Wheel', 'Giant wheel in action, Arizona State fest\n', 'places,festival,colors,light,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-31'),
(176, '', 40, 'photographer', '12997_10151449567281071_1274617086_n.jpg', 'p17qgpia1p4l14vd16kd1h7810li4', '960*652', 'Beauty and the Butterfly', 'Beauty and the Butterfly', 'beauty,nature,butterfly,flower,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-14'),
(177, '', 40, 'photographer', '64392_10150715499006071_905502314_n.jpg', 'p17qgpsse1104h77j9tk10iv11e74', '960*652', 'Sun', 'Hold fast to dreams for if dreams die, life is a broken winged bird that cannot fly', 'beauty,nature,sunset,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-14'),
(178, '9,2', 40, 'photographer', '422422_10150685620666071_1795663462_n.jpg', 'p17qgq39n71v32ti6182c1fqk7ie4', '960*652', 'A Coffee estate in Coorg ', 'A Coffee estate in Coorg ', 'beauty,nature,trees,places,sreeroop,coffee', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(179, '2', 40, 'photographer', '378826_10150578138321071_276424258_n.jpg', 'p17qgq6qk0coadr01erl136u1ogn4', '960*652', 'The Moon ', 'I never think of the future, it comes soon enough', 'beauty,nature,moon,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(182, '', 39, 'photographer', 'shantala3.jpg', 'p17qgqtj0ilk3mif1cdd1c9k13ue4', '960*652', 'Colorful Autumn', 'Colorful Autumn: where every leaf is a flower.', 'beauty,nature,autumn,seasons,shanthala', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-14'),
(183, '', 39, 'photographer', 'shantala2.jpg', 'p17qgqvh7k1ja51jo516leogv8ov4', '960*652', 'Leaves and Snow', 'Leaves and Snow; a blended beauty of nature.', 'nature,beauty,leaves,snow,shanthala', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-14'),
(184, '6', 39, 'photographer', 'shantala1.jpg', 'p17qgr0ripsuq1g2nfkl17jr1nlu4', '960*652', 'Colors can create impressions', 'Colors can create impressions', 'nature,beauty,flower,shanthala,colors', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(185, '2', 40, 'photographer', 'sreeroop13.jpg', 'p17qgs77b41tgrvutcsr3e7tu94', '960*652', 'Where there''s life, there''s hope.', 'Where there''s life, there''s hope.', 'beauty,nature,insects,leaves,sreeroop', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(186, '', 41, 'photographer', 'Sribha Jain 2.jpg', 'p17qj9aqq51ck413ms18crfvnrdt4', '638*432', 'Butterfly enjoying the nectar', 'Butterfly enjoying the nectar at Butterfly Park, Bannerghatta National Park, Bangalore', 'beauty,nature,places,butterfly,sribha', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-15'),
(187, '', 41, 'photographer', 'Sribha Jain 3.jpg', 'p17qj9okge1srmpvf1kh2d2ndls4', '638*432', 'The enchanted sun rays', 'Sun rays decorating the Indian Ocean and the Pier at Mauritius', 'beauty,nature,sun,water,sribha', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-15'),
(188, '6,2', 41, 'photographer', 'Sribha Jain 4.jpg', 'p17qj9q77n11r819gsi475hf1p3c4', '638*432', 'The Rose on a rainy day', 'Water drops laden Rose after a rainy day in Bangalore', 'beauty,nature,flower,rose,rain,sribha', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-30'),
(189, '9,8', 41, 'photographer', 'Sribha Jain 1.jpg', 'p17qj9sb6i3j21hinuh32sn1d6h4', '638*432', 'The corridors at Taj Mahal', 'Play of light at a corridor in administrative block at Taj Mahal, Agra.', 'beauty,light,taj mahal,india,monument,history,hertitage,sribha', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-06-04'),
(191, '2', 41, 'photographer', 'Sribha Jain 5.jpg', 'p17qjaj96p1mu4hhj1ae1i84n524', '638*432', 'A Magical shot', 'Some shots are just magical', 'beauty,nature,darkness,sun,trees,sribha', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(192, '2', 61, 'photographer', 's4.jpg', 'p17qr2rbhoarg1det1fupisd139r4', '785*649', 'Close Encounters with the moon', 'My first Moon pic from my terrace. Still a long way to go to get to perfection, at Banglore', 'moon,nature,beauty,darkness,night,santosh', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(193, '', 61, 'photographer', 'santosh1.jpg', 'p17qr32r4g1j1i8nfkreqs1qvt4', '720*960', 'Fountain Hills,Arizona', '1.	The fountain reaches 560 feet (170 m) in height. When built, it was the world''s tallest fountain and held that record for over a decade. – Fountain Hills,Arizona', 'beauty.places,arizona,abroad,exotic,santosh', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-18'),
(194, '9,2', 61, 'photographer', 'santosh2.jpg', 'p17qr35l6lgme1mu316ldvdhi7n4', '960*720', 'Grand Canyon village, Arizona', 'Grand Canyon village, Arizona', 'beauty,nature,abroad,exotic,places', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(195, '', 63, 'photographer', 'sh2.jpg', 'p17qr3h9itjdq1m0q149ooju24c4', '960*63', 'Natural beauty ', 'Natural beauty through circular polarized filter — in Bangalore.', 'nature,beauty,butterfly,leaves,sharan', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-18'),
(198, '', 60, 'photographer', 'n11.jpg', 'p17qr4bi3l1u7g1b331ht3stiudb4', '960*639', 'Beauty in red', 'Bannergatta National Park, Banglore', 'beauty,nature,flowers,places', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-18'),
(199, '6,2', 60, 'photographer', 'n12.jpg', 'p17qr4g34s1tan63j15mp116i16o94', '960*639', 'Upside down', 'at Bannergatta National Park, Banglore', 'beauty,nature,leaves,flowers,places', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(200, '6,2', 60, 'photographer', 'n13.jpg', 'p17qr4i3u7jic308nvkntvq5d4', '960*639', 'White beauty', 'at Bannergatta National Park, Banglore', 'beauty,nature,places,flowers,leaves,garden', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(203, '11,2', 60, 'photographer', 'n17.jpg', 'p17qr4ol1ld7gjkd34n6s41h944', '960*639', 'The Oriental white eye', 'Oriental white eye — at Butterflypark, Bennerghatta.', 'nature,beauty,places,birds,trees', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(204, '7', 60, 'photographer', 'n18.jpg', 'p17qr504cl1iab10ksmtqkv93im4', '960*639', 'Up in the sky', 'at Yelahanka Airforce Base.', 'sky,india,planes,pride', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(205, '2,1', 60, 'photographer', 'n75.jpg', 'p17qr56n651vbdtr01uge1nn6qt84', '960*639', 'The hues of a peacock', 'Nation''s pride', 'nature,beauty,india,pride,birds,peacock,colors', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(207, '8,1', 60, 'photographer', 'n78.jpg', 'p17qr5q6si60mn6h1cr21utq1dod4', '960*639', 'Photographic brilliance', 'Nation''s pride', 'nature,beauty,india,pride,birds,peacock,colors', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(209, '', 60, 'photographer', 'n21.jpg', 'p17qr5uqqd17r71912iqimc91qm84', '960*639', 'Lalbagh Botanical Garden.', 'at Lalbagh Botanical Garden, Banglore.', 'beauty,architecture,places', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-18'),
(210, '6,2', 60, 'photographer', 'n24.jpg', 'p17qr60ueu19fu1d9h1i9a1gld4nm4', '960*639', 'The orange beauty', 'at Lalbagh Botanical Garden.', 'beauty,nature,garden,places,flowers', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(211, '6,2', 60, 'photographer', 'n25.jpg', 'p17qr629271honsec29j1p5t13lp4', '960*639', 'When life blends into nature', 'at Lalbagh Botanical Gardens,Banglore', 'beauty,nature,garden,places,flowers', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(212, '', 60, 'photographer', 'n26.jpg', 'p17qr63uo8vmf10to1od3c43ca24', '960*639', 'The Asian Paradise flycatcher', 'After so many visits to Valley School finally got him in frame... \nAsian Paradise flycatcher\n', 'nature,beauty,trees,birds,places', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-18'),
(213, '9,8', 60, 'photographer', 'n27.jpg', 'p17qr65hr2r4i132h13c41k2c1qqo4', '960*639', 'Dalhousie, Himachal Pradesh.', 'Dalhousie, Himachal Pradesh.', 'beauty,places,history, India, heritage,monuments', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(214, '9,8', 60, 'photographer', 'n29.jpg', 'p17qr67keie1a1juq71imums8a4', '960*639', 'The golden temple', 'The golden temple,amritsar', 'beauty,places,religion,punjab,india', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(215, '9,8', 60, 'photographer', 'n30.jpg', 'p17qr6a6a4pcbhu1j0f1o4bh3f4', '960*639', 'The Lotus temple', 'The Lotus Temple, located in New Delhi, India, is a Bahá''í House of Worship completed in 1986. Notable for its flowerlike shape, it serves as the Mother Temple of the Indian subcontinent and has become a prominent attraction in the city', 'places,beauty,architecture,india,wonders', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(216, '9,8', 60, 'photographer', 'n31.jpg', 'p17qr6ebo718ti5031pal1feb85r4', '960*639', 'We all are one religion', 'The Lotus Temple, located in New Delhi, India, is a Bahá''í House of Worship completed in 1986. Notable for its flowerlike shape, it serves as the Mother Temple of the Indian subcontinent and has become a prominent attraction in the city', 'beauty,places,india,', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(217, '8', 60, 'photographer', 'n34.jpg', 'p17qr6js39sgnur12da1tvrkln4', '960*639', 'History at length', 'at Dalhousie,Himachal pradesh', 'beauty,monuments,india,places', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-28'),
(218, '8', 60, 'photographer', 'n32.jpg', 'p17qr6lm371oen18bipbs5m10ga4', '960*639', 'History caught by the lens', 'at Dalhousie, Himachal Pradesh', 'beauty,monuments,India,history,pride', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-07-16'),
(219, '8', 60, 'photographer', 'n33.jpg', 'p17qr6o8ua1ch713n210qd1plm1emh4', '960*639', 'Historical Architectures', 'at Dalhousie,Himachal Pradesh', 'beauty,monuments,india,history,pride,architecture', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(226, '7', 60, 'photographer', 'n44.jpg', 'p17qrdq9v31mng1sgrunjaf7n04', '960*639', 'Creating magic with lens', 'Droplets of water caught as a pattern', 'beauty,nature,water,rain,droplets,magic', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(227, '7', 60, 'photographer', 'n65.jpg', 'p17qrdqll2b6hesp1mngm561md54', '960*639', 'Colored water', 'Experimenting with colored water', 'beauty,water,color', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(228, '2', 60, 'photographer', 'n1.jpg', 'p17qrdrupbusl1u0gge61js613qt4', '960*639', 'Butterfly on a yellow flower', 'Butterfly on a yellow flower', 'nature,beauty,garden,butterfly,flower', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(229, '2', 60, 'photographer', 'n5.jpg', 'p17qrdughe1rt6diq352vp92de4', '960*639', 'A colorful butterfly', 'Colorful butterfly', 'beauty,nature,garden,butterfly,plants,leaves', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(230, '2', 60, 'photographer', 'n7.jpg', 'p17qre2tll1a7n39c12l51sn11c9o4', '960*639', 'Close encounters', 'Close encounters', 'nature,beauty,butterfly,leaves,garden', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(231, '6,2', 60, 'photographer', 'n68.jpg', 'p17qre557i1dj91i0g1u2c1h271k6o4', '960*639', 'A splendid shot', 'Butterfly and the beautiful orange flower', 'nature,beauty,garden,leaves,butterfly', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(232, '6', 60, 'photographer', 'n66.jpg', 'p17qre7ve61q634319oua7f1ljm4', '960*639', 'Purple wonder', 'A beautiful purple flower', 'nature,beauty,flower', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28');
INSERT INTO `photo_photographers_image_mapping` (`imageId`, `categoryId`, `uploadedId`, `uploadedBy`, `fileName`, `fileId`, `imageResolution`, `imageName`, `imageDescription`, `imageTags`, `a1imagePrice`, `a2imagePrice`, `a3imagePrice`, `a4imagePrice`, `imageType`, `newstatus`, `imageStatus`, `takenDate`, `createdDate`) VALUES
(233, '2', 60, 'photographer', 'n71.jpg', 'p17qreb9h915p51f8k10c11iagemh4', '960*639', 'A Rainy shot', 'beautiful rain droplets on the leaves', 'nature,beauty,rain,leaves,trees', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(234, '1', 60, 'photographer', 'n74.jpg', 'p17qree57n8id1q7r1u131fig10lu4', '960*639', 'Tickell''s Blue Flycatcher', 'Tickell''s Blue Flycatcher — in Bangalore.', 'beauty,nature,birds', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-30'),
(235, '1', 60, 'photographer', 'n94.jpg', 'p17qreifstdijmk31o86hk213jq4', '960*639', 'Exotic looking', 'at Ranganathittu Bird Sanctuary', 'nature,beauty,birds,colors', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-28'),
(236, '1', 60, 'photographer', 'n98.jpg', 'p17qrelduh1clc19kv1r8i13eoird4', '960*639', 'Copper-smith barbet', 'Copper-smith barbet', 'nature,beauty,places,birds', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-28'),
(237, '1', 60, 'photographer', 'n99.jpg', 'p17qrf1bvt1dec7ssj8v1h3b1djd4', '960*639', 'Expression of freedom', 'Lalbagh, Karnataka.', 'beauty,nature,peace,birds', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(238, '', 60, 'photographer', 'n103.jpg', 'p17qrf52km15rp7o51bc81124t4u4', '960*639', 'Sculptures from Beluru and Halebeidu', 'Velapuri (Beluru) was the first capital of the Hoysalas. Dwarasamudra (Halebidu) was the next capital of Hoysalas', 'beauty,monuments,history,heritage,india,religion', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-18'),
(239, '8', 60, 'photographer', 'n106.jpg', 'p17qrfevcgl071gg853ocv8ueq4', '960*639', 'Historical beauty', 'Velapuri (Beluru) was the first capital of the Hoysalas. Dwarasamudra (Halebidu) was the next capital of Hoysalas', 'beauty,hertiage,history,monuments,india', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(240, '', 60, 'photographer', 'n87.jpg', 'p17qrfl5set31g4s58g1rig6ra4', '960*639', 'Flying beauty', 'butterfly among purple flowers', 'nature,beauty,trees,leaves,butterfly', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-18'),
(241, '1', 60, 'photographer', 'n81.jpg', 'p17qrfs7g1c5ojlc6po18v94', '960*632', 'Eurasian Kingfisher', 'Eurasian Kingfisher / Common Kingfisher — at Ranganathittu Bird Sanctuarys.\n', 'nature,beauty,birds', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(242, '', 60, 'photographer', '426116_311095898948380_1828398904_n.jpg', 'p17qrfu16s1dcjmn24241d0as3t4', '960*639', 'Stork Billed Kingfisher', 'Stork Billed Kingfisher at Ranganathittu Bird Sanctuary.', 'nature,beauty,birds', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-18'),
(243, '', 65, 'photographer', '20120812_113759.jpg', 'p17qrgriqe1edmhlu12ub18ot1jc74', '1632*2164', 'Tanjore Museum', 'Tanjore museum', 'bauty, history,India,culture', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-18'),
(244, '', 65, 'photographer', '20121024_125948.jpg', 'p17qrgvsfo1c6a1qa8os1ddv3ut4', '3264*2448', 'Temple', 'A Temple on the way to nandi hills, Karnataka', 'India,religion,culture,beauty', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-18'),
(245, '', 65, 'photographer', '20130113_130003.jpg', 'p17qrh8cjn1191nsl1sl86eopu24', '720*960', 'Life underneath', 'Chitharal jain monument, kanyakumari', 'nature,beauty,life,hill,tree', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-18'),
(246, '', 65, 'photographer', '20130113_150502.jpg', 'p17qrh9ikv2hkqfd1n2s1orso7r4', '760*960', 'Lord Buddha', 'Chitharal jain monument, kanyakumari', 'nature,beauty,religion,India,culture', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-18'),
(247, '', 65, 'photographer', '20130113_151040.jpg', 'p17qrjdvs94f31g5i5te1of815na4', '960*678', 'Scenic Beauty', 'Near Chitharal jain monument, kanyakumari', 'beauty,nature,water,hills', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-18'),
(248, '9,2', 65, 'photographer', '20130510_090833.jpg', 'p17qrjg7u7ct39gbstp16bq1ko54', '960*638', 'A Charming Shot of the Kanyakumari beach', 'Kanyakumari beach', 'nature,beauty,water,places', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-28'),
(249, '9,2', 65, 'photographer', '20130510_090930.jpg', 'p17qrji78p1rlspqi8iqg6628i4', '960*638', 'The Kanyakumari beach', 'Kanyakumari beach', 'nature,beauty,water,places', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(250, '7,2', 53, 'photographer', 'sabir ahmed.jpg', 'p17qrjq3sq1g1t1mlshaekma1nl44', '960*738', 'The world in purple', 'a beautiful shot of the hills', 'beauty,nature', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(251, '8,7', 66, 'photographer', 'meghna iyer.jpg', 'p17qrk0hqv12im1mje1fgomh91iop4', '960*639', 'The Diya', 'A Diya, divaa, deepa, deepam, or deepak is an oil lamp. A diya placed in temples and used to bless worshippers is referred to as an aarti.', 'India,culture,religion', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-04'),
(252, '6', 40, 'photographer', '559657_10151625380471071_744224007_n.jpg', 'p17r0i92licbvhqfql1m8m1ok74', '960*653', 'Soberness Spotted', 'Test shot from my new Tamron 90mm macro lens', 'beauty,nature,flowers', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(253, '6', 40, 'photographer', '547051_10151259319166071_1360103955_n.jpg', 'p17r0ign4aumqict1l6k18986894', '601*960', 'Beautiful Creations', 'Life is the flower for which love is the honey.\n', 'beauty,nature,flowers', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-28'),
(254, '', 40, 'photographer', '397175_10151224493916071_819744909_n.jpg', 'p17r0imde319krfvh1l5l13la1khm4', '960*639', 'Leaves of Love', 'Leaves of Love', 'nature,beauty,leaves,plants,green', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-20'),
(256, '', 47, 'photographer', '485505_604013476284960_1829342444_n.jpg', 'p17r3fepisogj1ho61f1e1nnfmdo4', '900*600', 'The Face-Off', 'The Face-Off', 'beauty,nature,sky', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-21'),
(257, '6', 38, 'photographer', '310202_320551538075309_2001388968_n.jpg', 'p17rabil8pqd51deljm83nk1iug4', '960*653', 'Irresistible Beauty', 'closeup of a beautiful red flower', 'beauty,nature,flower,red', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(258, '', 38, 'photographer', '931429_320551558075307_1941235458_n.jpg', 'p17raboi4f996jub1cle1qsjch45', '960*653', 'Blue Butterfly', 'a beautiful blue butterfly on a flower', 'beauty,nature,butterfly', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-24'),
(259, '', 41, 'photographer', '1-IMG_5910-1.jpg', 'p17rad4qnhfn513ke17gt1ka7195i4', '960*639', 'Ray of hope', 'Faith gives you hope', 'beauty,religion,india,belief,heritage,silence,buddha', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-24'),
(260, '6', 41, 'photographer', '1-IMG_2029-1.jpg', 'p17rad91r81d3tuck1qtlaus1bkc4', '960*639', 'Play of sunlight on Gerberas at dusk', 'Play of sunlight on Gerberas at dusk', 'beauty,nature,flowers', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(261, '6', 41, 'photographer', '1-IMG_6557-1.jpg', 'p17radealf74r166t1q4jjqioer4', '960*639', 'Miracles of a flower', 'If we could see the miracle of a single flower clearly, our whole life would change.', 'nature,beauty,garden,flowers', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(262, '9,2', 55, 'photographer', 'Harsh Sharma 1.jpg', 'p17rcv20lp1j6qght14hcp6pai94', '900*639', 'The Emrald lake at Ooty', 'Emrald Lake at Ooty', 'beauty,nature,water,places', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-31'),
(263, '', 70, 'photographer', 'p17rb4d7u76t61gog1ufvr0p18me4.jpg', 'p17ricqh0k521tnhdptl915c34', '960*639', 'Shot the Lightening', 'a hobbyist''s pic of a lightning shot in bangalore..', 'beauty,nature,lightening,sky,rain', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-27'),
(264, '1', 39, 'photographer', 'Shanthala Sudhindranath_3.jpg', 'p17rie36pb16u6ffqtl8k41f1k4', '960*639', 'Common Spoonbill', 'Common SpoonBill - White bird except for its dark legs, black bill with a yellow tip, and a yellow breast patch.\n- Very commonly found in Ranganathittu, Karnataka, India.\n', 'beauty,nature,sky,birds', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(265, '6,2', 40, 'photographer', '284091_10151231275606071_1466216332_n.jpg', 'p17riec75n1jo1ml01tanelmsb4', '960*639', 'Triple Beauty', 'Just as a flower which seems beautiful and has color but no perfume, so are the fruitless words of the man who speaks them but does them not.', 'beauty,nature,white,colors,flowers', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(266, '9,7', 40, 'photographer', 'Sreeroop-6.jpg', 'p17rl9n72s1f711jm5j4v131316994', '270*181', 'Point Loma Lighthouse', 'PointLomaLighthouse\nPoint Loma Lighthouse is a historic lighthouse located at the mouth of San Diego Bay in San Diego, California.\nThis is a top view of staircase inside Point Loma Lighthouse.', 'beauty,architecture,abstract', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(267, '2,7', 67, 'photographer', 'tn__MG_0643.jpg', 'p17rlak08n11j11qoanfjs6r7k4', '638*325', 'Calmness', 'Calmness', 'beauty,nature,rocks', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(268, '7', 67, 'photographer', 'tn__MG_0645_tonemapped.jpg', 'p17rlao2lt13of1avirtd16n3lfu4', '292*432', 'Passing clouds', 'passing clouds', 'beauty,sky', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-28'),
(269, '2', 67, 'photographer', 'tn__MG_0900_1_2_tonemapped.jpg', 'p17rlb1roqc3mh61dbp8011ps94', '285*432', 'A Beautiful Avenue', 'Avenue', 'beauty, nature', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-28'),
(271, '2,7', 67, 'photographer', 'tn__MG_0696_tonemapped.jpg', 'p17rlb59st1p2l1ntl13i7njlo5l4', '638*419', 'When land meets sky', 'When land meets sky', 'beauty,nature', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(272, '2,7,9', 67, 'photographer', 'tn__MG_0652_tonemapped.jpg', 'p17rlb6k6a8bk1l50a0v1m5c1t5c4', '638*419', 'Rishikonda Beach', 'Rishikonda Beach', 'beauty,nature,sky', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(273, '2,7', 67, 'photographer', 'tn__MG_0975 - Copy.jpg', 'p17rlbosdnm91f571sul14gm1er84', '486*432', 'Alone in the dark', 'Alone in the dark', 'nature,beauty,dark,night', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-28'),
(274, '2', 67, 'photographer', 'tn__MG_1355.jpg', 'p17rlbtb0sl54rql778s90avn4', '638*232', 'Trees all over', 'Trees all over', 'beauty,trees,nature', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(275, '2,7', 67, 'photographer', 'tn__MG_2450.jpg', 'p17rlbudsv12qp5251gjm1ov5g954', '638*232', 'A Serene shore', 'A Serene shore', 'beauty,nature,water,sea', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(276, '1,2,7', 67, 'photographer', 'tn__MG_2639.jpg', 'p17rlc037t17udg7qtho15kk11c34', '329*432', 'An Outstanding shot', 'A crow awake at night', 'beauty,nature,dark,night,trees,birds', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-28'),
(277, '7', 67, 'photographer', 'tn__MG_2684.jpg', 'p17rlcjh2vdse1nf71akc7ok5oh4', '638*438', 'Glowing Streetlight', 'Glowing Streetlight', 'beauty,light,darkness,nature', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(278, '7,9', 67, 'photographer', 'tn__MG_2716_7_8_tonemapped.jpg', 'p17rlcmkpiacv1u541qv7m213in4', '638*432', 'Shot in Vishakapatnam', 'Shot in Vishakapatnam', 'beauty,water,beach', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(279, '2,7', 67, 'photographer', 'tn__MG_2756 - Copy.jpg', 'p17rlcsg8j1tgpk0ehkuj8un14', '638*425', 'Rocks and Water', 'Rocks and Water', 'beauty,nature,water,rocks', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(281, '7,10', 67, 'photographer', 'tn__MG_3648.jpg', 'p17rldjk8m95lcka1chr11a910pk4', '288*432', 'Happiness is all we want', 'Happiness is all we want', 'nature,kids', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-28'),
(282, '2,7', 67, 'photographer', 'tn__MG_3803.jpg', 'p17rldo97s1dmfgrhld1okb5m84', '432*432', 'Black and White', 'Black and White', 'beauty,nature,dark,trees', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-05-28'),
(283, '2,7', 67, 'photographer', 'tn__MG_3837_tonemapped.jpg', 'p17rldp3g71eo41qpj1mp918tu1mbv4', '638*425', 'Sail away', 'Sail away', 'beauty,nature,sky,boat,water', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(284, '2,7', 67, 'photographer', 'tn__MG_3857_tonemapped.jpg', 'p17rldsb2udgsfiv1u1teda19074', '638*425', 'Mountains in the dark', 'Mountains in the dark', 'beauty,nature,trees,darkness,sky,mountains', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(285, '2,7', 67, 'photographer', 'tn__MG_3965.jpg', 'p17rldvc944s1jveboaptl11r94', '638*425', 'A Playful evening', 'A Playful evening', 'beauty,nature,dusk,trees,sky,', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(286, '2', 67, 'photographer', 'tn__MG_6777.jpg', 'p17rle0lvus1ct191q4l6pqanc4', '638*425', 'A lazy evening', 'A lazy evening', 'beauty,nature,house,trees', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(287, '2', 67, 'photographer', 'tn__MG_6950.jpg', 'p17rle3uvp1g8oiavcuuktvs7v4', '638*425', 'Love for nature', 'Love for nature', 'nature,beauty,snow,trees', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(288, '2', 67, 'photographer', 'tn__MG_7975.jpg', 'p17rle7m9kidl1kpk1nq5doa1tog4', '638*425', 'Beauty beyond words', 'Beauty beyond words', 'beauty,nature,night,darkness,water', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(289, '', 67, 'photographer', 'tn__MG_8576.jpg', 'p17rlec7eh1jcr5lm1t8i1d8k44p4', '638*425', 'Flowing beauty', 'Flowing beauty', 'nature,beauty,water', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(290, '2,6', 67, 'photographer', 'tn__MG_9704.jpg', 'p17rlef0lonlh1gls1e701t847lj4', '638*425', 'Nature is bliss', 'Nature is bliss', 'nature,beauty,flowers,trees,garden', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(291, '2,7', 67, 'photographer', 'tn__MG_9750.jpg', 'p17rleik7r11li6om5ul14s21qh44', '638*432', 'Sounds of water', 'Sounds of water best heard at a beach', 'nature,beauty,water', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(292, '2,7', 67, 'photographer', 'tn__MG_9753.jpg', 'p17rlemcbp1uvsbcs3gl19na1a4m4', '638*425', 'Art of nature', 'Art of nature', 'beauty,nature,water,darkness,tree', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(294, '2,6,7', 67, 'photographer', 'tn__MG_9805_tonemapped.jpg', 'p17rlerl304cild41nf7dg8aks4', '638*425', 'Blooming beauty', 'Blooming beauty', 'beauty,nature,garden,flowers', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(295, '2,7', 67, 'photographer', 'tn__MG_9806.jpg', 'p17rleuq3u1g466aa2an181elbf4', '638*425', 'A House so beautiful', 'A House so beautiful', 'nature,beauty,house,flowers,garden,water', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(296, '2,7', 67, 'photographer', 'tn_car hdr.jpg', 'p17rlf1afq1rk011vtok51chtlno4', '638*425', 'Transporting pumpkins', 'Transporting pumpkins', 'beauty,nature,vehicle,transport,pumpkins', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(298, '2,7', 67, 'photographer', 'tn_IMG_0853.jpg', 'p17rlf753h1fiqetf1a7h1n1k1f0d4', '638*425', 'A Bridge of beauty', 'A Bridge of beauty', 'nature,beauty,bridge,water,trees', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(300, '2,7', 67, 'photographer', 'tn_road hdr copy.jpg', 'p17rlfh4qa1lvcr0t1mk11ejt1rcp4', '638*425', 'The road well taken', 'The road well taken', 'nature,beauty,leaves,flowers,road', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(301, '2,7', 67, 'photographer', 'tn_long exposure bw art ,.jpg', 'p17rlfigeh1mgbbdgt42157d19cr4', '638*425', 'A foggy shot', 'A foggy shot', 'nature,beauty,fog,rocks', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(302, '2,7', 67, 'photographer', 'tn_seascape color.jpg', 'p17rlfk79dfjp1bpigks1opkqhl4', '638*425', 'Wet rocks', 'Wet rocks', 'nature,beauty,rocks,water', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(304, '2', 67, 'photographer', 'tn_woods.jpg', 'p17rlfoe0913g3qg38ri12952q94', '638*425', 'Path through the woods', 'Path through the woods', 'nature,beauty,bridge,trees', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-28'),
(305, '2', 71, 'photographer', 'blacknwhite.jpg', 'p17rq7or891vsgvfp1urp16j13it4', '960*640', 'Fluttering beauty', 'Fluttering beauty', 'beauty,nature,butterfly,leaves,garden', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(306, '2,10', 71, 'photographer', 'fishing_Silhouette.jpg', 'p17rq7ri0nd22127h1rtaj1j2b4', '960*652', 'Fishing before sunrise', 'Fishing before sunrise', 'beauty,nature,person,fishing,water', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(307, '2,6', 71, 'photographer', 'butterflyyellow.jpg', 'p17rq857h9o6d3ki7ifumn1m44', '960*640', 'Love for Nectar', 'Love for Nectar', 'beauty,nature,butterfly,flowers,garden', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(308, '1,2', 71, 'photographer', 'pelican1.jpg', 'p17rq8fjo0a59r7ieq1fte1uks4', '960*640', 'Pelican', 'Pelican', 'nature,beauty,birds,water', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(309, '1,2', 71, 'photographer', 'flyingpaintedstork.jpg', 'p17rq8m91iqbs1uph138bciu1ov14', '960*640', 'Flying Painted stork', 'Flying Painted stork', 'nature,beauty,sky,water,birds', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(310, '1,2', 71, 'photographer', 'flyingpelican.jpg', 'p17rq8nr0d5mq112cofk1his1kl24', '960*640', 'Flying Pelican', 'Flying Pelican', 'birds,nature,sky,beauty', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(311, '2,9', 71, 'photographer', 'Thalankuppambridge_bottomview.jpg', 'p17rq8t21k15u919e115311jfo65a4', '960*640', 'Thalankuppam Bridge', 'Thalankuppam Bridge', 'beauty,nature,water,bridge', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(312, '1,2', 71, 'photographer', 'pelican2.jpg', 'p17rq8vrjdrun7t1gghvtp1l0h4', '944*768', 'Over the water', 'Pelican flying over water', 'beauty,nature,water,birds', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-05-30'),
(313, '2', 72, 'photographer', 'DSC_0807_low.jpg', 'p17rvt57lt1r931c2fgs7th412hd1', '720 x 487 72 dpi', 'SUNSET', 'Sunset in Jabel Ali industrila area, Dubai', 'TIME TO RETURN HOME', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-06-01'),
(315, '7,1', 72, 'photographer', 'DSC_0308_low.jpg', 'p17rvuhi902opce0n4f83u1gv1', '992 x 50, 72dpi', 'Flying Towards New Horizon', 'Winter Birds', 'Birds, Sea, Black & White', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-05'),
(316, '7', 72, 'photographer', 'DSC_0333_low.jpg', 'p17s0hnaigjgs1bh5168hvriqoe1', '850 x 572, 72dpi', 'Take Me Along', 'Taken when a small beautiful girl ran behind birds to catch', 'birds, small girl, sea', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-01'),
(317, '2', 73, 'photographer', 'Squirrel.jpg', 'p17s6rslg3ptrj3n1h9d1c1t1r1f4', '960*735', 'Squirrel caught in the lens', 'Squirrel caught in the lens', 'beauty,nature,animals', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-04'),
(318, '7,8,9', 73, 'photographer', 'Rumi Darwaza.jpg', 'p17s6sen621nkk1p3ajccm8cms4', '960*619', 'Rumi Darwaza', 'The Rumi Darwaza, in Lucknow, Uttar Pradesh, India, is an imposing gateway which was built under the patronage of Nawab Asaf-Ud-dowlah in 1784. It is an example of Awadhi architecture', 'places', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-04'),
(319, '8', 73, 'photographer', 'LordBudhha.jpg', 'p17s6shspus1gr9016s0lrs1l5s4', '960*637', 'Lord Buddha', 'Lord buddha, the symbol of serenity', 'culture,religion,india', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-04'),
(320, '8,9', 73, 'photographer', 'Bada Imambara.jpg', 'p17s6t62kk6ks17m61st91c181ujv4', '960*639', 'Bara Imambara', 'Bara Imambara is an imambara complex in Lucknow, India, built by Asaf-ud-Daula, Nawab of Lucknow, in 1784. It is also called the Asafi Imambara. Bara means big, and an imambara is a shrine built by Shia Muslims for the purpose of Azadari.', 'india,culture,places', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-04'),
(322, '8,9', 73, 'photographer', 'Bada Imambara2.jpg', 'p17s6upi191gpkf531uh0ugvpsl4', '960*639', 'Bara Imambara ', 'Bara Imambara is an imambara complex in Lucknow, India, built by Asaf-ud-Daula, Nawab of Lucknow, in 1784. It is also called the Asafi Imambara. Bara means big, and an imambara is a shrine built by Shia Muslims for the purpose of Azadari.', 'places,india,culture,hertiage', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-04'),
(323, '8,9', 73, 'photographer', 'Ambedkar Park.jpg', 'p17s76fts4v0h1fe21mhf1g9bov4', '960*640', 'Ambedkar Park', 'Ambedkar Park at Lucknow,Uttar Pradesh,India', 'india', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-04'),
(324, '7', 72, 'photographer', 'DSC_0008_low.jpg', 'p17sc0a1sc1hrpa7c1un1jrgacp1', '850 x 572, 72dpi', 'LET ME FLY', 'Taken in Musandam Oman just after sunset sunset', 'sunset, ship, bird', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-06'),
(325, '1', 74, 'photographer', 'KF with a catch(Low Resolution).jpg', 'p17sc7jbdt1som1ob7156if5r133g4', '960*768', 'Kingfisher with a catch', 'Kingfishers are a group of small to medium sized brightly coloured birds', 'birds', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-06'),
(326, '1,2', 74, 'photographer', 'LC1.jpg', 'p17sc7vgoj1vq37pv1klvorp78q4', '960*768', 'Little Cormorant', 'The Cormorants are medium to large sized sea birds. They are typically fish eaters', 'birds', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-06'),
(327, '1,2', 74, 'photographer', 'PS1.jpg', 'p17sc83622pts8eb1nkvtaa1bdt4', '960*768', 'The Thirsty painted stork', 'The Painted Stork is a large wading bird in the stork family. It is found in the wetlands of the plains of tropical Asia south of the Himalayas in the Indian Subcontinent and extending into Southeast Asia', 'birds', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-06'),
(328, '1,2', 74, 'photographer', 'SBP1.jpg', 'p17sc85qsv1cj71ot5bn2hgc1pqi4', '960*768', 'Spot Billed Pelican in flight', 'The Spot-billed Pelican or Grey Pelican is a member of the pelican family. It breeds in southern Asia from southern Pakistan across India east to Indonesia. It is a bird of large inland and coastal waters, especially large lakes', 'birds', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-06'),
(329, '9', 72, 'photographer', 'buhaira corniche_Panorama_low.jpg', 'p17scgn2lgmbdtvt18bc1oce3q31', '1417 x 398 72 dpi', 'Buheira Corniche Sharjah Panorama', 'Sharjah Buheira Corniche looks beautiful at night', 'Buhairah Corniche, Sharjah', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-06'),
(330, '1', 72, 'photographer', 'DSC_0146_low.jpg', 'p17scmqnhb1bkrqasbepub85jv1', '850 x 572, 72dpi', 'Its a long journey', 'Parsian Shearwater', 'bird, sea', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-06-06'),
(331, '7', 72, 'photographer', 'DSC_0189_low.jpg', 'p17shct1tq1d28mb19sj1el75at1', '850 x 572, 72dpi', 'Roundabout light trailing', 'Night 30 sec long exposure ', 'Night photography, long exposure', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-08'),
(332, '2', 72, 'photographer', 'DSC_0202_low.jpg', 'p17shdtq2d1rg67i82u7h631v6r1', '1034 x 411 72dpi', 'BLUE', 'Branch of winter birds on flying ocean', 'birds, sea, ', '5000', '3800', '2500', '1400', 'portrait', '0', 'rejected', '0000-00-00', '2013-06-08'),
(333, '7', 72, 'photographer', 'DSC_0241_low.jpg', 'p17shemkgt1or7170v1n69ge6a2t1', '850 x 572, 72dpi', 'Fountain at night', 'Fountain at night', 'fountain', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-08'),
(334, '2', 72, 'photographer', 'DSC_0319_low.jpg', 'p17shfd0io1ihpsuv1v4a1pqm1q711', '850 x 572, 72dpi', 'Flying birds', 'Birds flyingon sea', 'birds, sea', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-08'),
(335, '7', 72, 'photographer', 'DSC_0410_low.jpg', 'p17shflo95g41c4o1r74ntost31', '850 x 572, 72dpi', 'Beach at night', 'Bridge shoot at night', 'sea, night', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-08'),
(336, '9', 72, 'photographer', 'DSC_0588_low.jpg', 'p17shgbmrf1tgr15ue1h2e1sia13p01', '850 x 572, 72dpi', 'Sharjah Night Cityscape', 'Famous ''Qanat Al Qasba, Sharjah'' at night', 'Cityscape, night photography, Qanat Al Qasba, Sharjah', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-08'),
(337, '7', 72, 'photographer', 'DSC_0598_low.jpg', 'p17shgvpm21eo14m8cp01f7106r1', '850 x 572, 72dpi', 'Corniche at night', 'Sharjah corniche at night', 'Sharjah, corniche, cityscape', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-08'),
(338, '2', 72, 'photographer', 'DSC_0787_low.jpg', 'p17shi0bgq3291o1gb44qb77ot1', '850 x 572, 72dpi', 'Sunset from top of building', 'Sunset taken from the top of building', 'sunset', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-08'),
(339, '2', 72, 'photographer', 'DSC_0929_low.jpg', 'p17shi8id0tvi1691k2s1kh2r1r1', '850 x 572, 72dpi', 'Dew on Grass', 'Morning Dew on grass', 'dew, grass', '5000', '3800', '2500', '1400', 'landscape', '0', 'rejected', '0000-00-00', '2013-06-08'),
(340, '6', 72, 'photographer', 'DSC_0947_low.jpg', 'p17shjd3qioa2drm14hk1d6m118d1', '850 x 572, 72dpi', 'Flower - Morning glory', 'Yesllow Flower', 'flower, yellow flower', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-07-13'),
(341, '7', 72, 'photographer', 'DSC_1038_low.jpg', 'p17shm9v0u1kqt5gm14dumabin11', '850 x 572, 72dpi', 'Walk Alone', 'Captured moment of one lonely person enjoying the nature', 'sea, beach, lonely person, silence', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-08'),
(342, '2', 72, 'photographer', 'DSC_1070_low.jpg', 'p17shn35161sph4rg13kb1fm1e6d1', '850 x 572, 72dpi', 'Reflections ', 'Reflection of full moon on sea water', 'moon, sea, hills, reflection', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-08'),
(345, '1', 72, 'photographer', 'DSC_0252_low.jpg', 'p17u8hvp3f18n2rvbqgt1f761f1q1', '992 x 505 72dpi', 'Lesser crested tern', 'A lesser crested tern is flying  in the mountain and sea of oman. These birds are found in winter in gulf', 'white bird, flying bird, lesser crested tern, wings, winter, front face, eyes', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-29'),
(346, '1', 72, 'photographer', 'DSC_0146_new_2.jpg', 'p17u8ia61n1a6vk09vck1kfvm1b1', '3432 x 2273, 240dpi', 'Persian Shearwater', 'A persian shearwater is flying over the sea. These birds are found in winter in gulf', 'bird, persian shear-water, winter bird, sea, ocean, flying, wings, blue, beach, ocean ', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-06-29'),
(347, '2,7,10', 72, 'photographer', 'DSC_0279_low.jpg', 'p17uqf0e2a1dgs1qfc15u5n309vd1', '850 x 551, 72dpi', 'Affection', 'A boy is playing with his sister in the water and taking care of her', 'children, affection, attachment, devotion, love, liking, friendliness, amity, fondness, friendship, sea, ocean, boy, girl', '5000', '3800', '2500', '1400', 'landscape', '0', 'pending', '0000-00-00', '2013-07-06'),
(348, '2,7', 76, 'photographer', 'p17v7h9f3uvflumugj9rn1l074.JPG', 'p17vg7s5h6c4pc7fblbtnv1qhh4', '647X500', 'Droplet', 'A droplet of water so beautiful.', 'beauty', '5000', '3800', '2500', '1400', 'portrait', '0', 'approved', '0000-00-00', '2013-07-15'),
(350, '7', 77, 'photographer', 'p17v8mjtbt1a9h1qh03guhkg1h6n5.jpg', 'p17vg8n1ju12en1v081ue71j7c1vjn4', '800X531', 'A Beautiful Pattern', 'A beautiful green pattern captured', 'beauty', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-07-15'),
(351, '7', 78, 'photographer', 'p17vh3e4fc13v5onv1rhlfmpqs24.JPG', 'p17vh6gdhkds1gs53u1r9j109a4', '665X500', 'Time', 'Time waits for none. So carry it along!', 'time', '5000', '3800', '2500', '1400', 'landscape', '0', 'approved', '0000-00-00', '2013-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `photo_shippers`
--

CREATE TABLE IF NOT EXISTS `photo_shippers` (
  `shipperId` int(11) NOT NULL AUTO_INCREMENT,
  `shipperName` varchar(500) NOT NULL,
  `shipperAddress` text NOT NULL,
  `shipperUniqueNo` varchar(500) NOT NULL,
  `shipperContat` varchar(500) NOT NULL,
  `shipperEmail` varchar(500) NOT NULL,
  `createdDate` date NOT NULL,
  PRIMARY KEY (`shipperId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `photo_shippers`
--

INSERT INTO `photo_shippers` (`shipperId`, `shipperName`, `shipperAddress`, `shipperUniqueNo`, `shipperContat`, `shipperEmail`, `createdDate`) VALUES
(1, 'VHL', 'Address', '1234', '098765432', 'shipper@vhl.com', '2013-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `photo_shipping`
--

CREATE TABLE IF NOT EXISTS `photo_shipping` (
  `shippingId` int(11) NOT NULL AUTO_INCREMENT,
  `shipping_email` varchar(500) NOT NULL,
  `shipping_firstname` varchar(500) NOT NULL,
  `shipping_lastname` varchar(500) NOT NULL,
  `shipping_companyname` varchar(500) NOT NULL,
  `shipping_phone` varchar(500) NOT NULL,
  `shipping_address1` text NOT NULL,
  `shipping_address2` text NOT NULL,
  `shipping_city` varchar(500) NOT NULL,
  `shipping_country` varchar(500) NOT NULL,
  `shipping_state` varchar(500) NOT NULL,
  `orderId` int(11) NOT NULL,
  PRIMARY KEY (`shippingId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `photo_shipping`
--

INSERT INTO `photo_shipping` (`shippingId`, `shipping_email`, `shipping_firstname`, `shipping_lastname`, `shipping_companyname`, `shipping_phone`, `shipping_address1`, `shipping_address2`, `shipping_city`, `shipping_country`, `shipping_state`, `orderId`) VALUES
(1, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Assam', 1),
(2, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Andhra Pradesh', 2),
(3, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Bihar', 3),
(4, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Andhra Pradesh', 4),
(5, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Andaman & Nicobar', 5),
(6, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Andaman & Nicobar', 6),
(7, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', 'fgfdgfd', 'Bangalore', 'India', 'Andhra Pradesh', 7),
(8, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Arunachal Pradesh', 8),
(9, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', 'fgfdgfd', 'Bangalore', 'India', 'Arunachal Pradesh', 1),
(10, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', 'fgfdgfd', 'Bangalore', 'India', 'Assam', 2),
(11, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', 'fgfdgfd', 'Bangalore', 'India', 'Kerala', 3),
(12, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', 'fgfdgfd', 'Bangalore', 'India', 'Kerala', 4),
(13, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', 'fgfdgfd', 'Bangalore', 'India', 'Andaman & Nicobar', 5),
(14, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', 'fgfdgfd', 'Bangalore', 'India', 'Andaman & Nicobar', 6),
(15, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', 'fgfdgfd', 'Bangalore', 'India', 'Andaman & Nicobar', 7),
(16, 'sibi@inertisinc.co.in', 'sibi', 'mathew', '', '432434324324', 'gfdgfdgd', 'dgfdgf', 'bangalore', 'India', 'Andhra Pradesh', 8),
(17, 'sibi@inertisinc.co.in', 'sibi', 'mathew', '', '432434324324', 'gfdgfdgd', 'dgfdgf', 'bangalore', 'India', 'Andhra Pradesh', 9),
(18, 'sibi@inertisinc.co.in', 'sibi', 'mathew', '', '432434324324', 'gfdgfdgd', 'dgfdgf', 'bangalore', 'India', 'Andhra Pradesh', 10),
(19, 'chitra@inertiainc.co.in', 'chaithra', 'inertia', '', '8123902142', 'Bangalore', 'Bangalore', 'Bangalore', 'India', 'Karnataka', 1),
(20, 'chitra@inertiainc.co.in', 'chaithra', 'inertia', '', '8123902142', 'Bangalore', 'Bangalore', 'Bangalore', 'India', 'Karnataka', 2),
(21, 'poonam.g.reddy@gmail.com', 'Poonam', 'Reddy', '', '8967545678', 'Ulsoor', 'Commercial Street', 'Bangalore', 'India', 'Karnataka', 3),
(22, 'poonam.g.reddy@gmail.com', 'Poonam', 'Reddy', '', '8967545678', 'Ulsoor', 'Commercial Street', 'Bangalore', 'India', 'Karnataka', 4),
(23, 'poonam.g.reddy@gmail.com', 'Poonam', 'Reddy', '', '8967545678', 'Ulsoor', 'Commercial Street', 'Bangalore', 'India', 'Karnataka', 5),
(24, 'sibi@inertiainc.co.in', 'Sibi-Payment-Test', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Himachal Pradesh', 1),
(25, 'sibi@inertiainc.co.in', 'Sibi-Payment-Test', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Himachal Pradesh', 2),
(26, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Bihar', 3),
(27, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Bihar', 4),
(28, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Bihar', 5),
(29, 'sibi@inertiainc.co.in', 'Sibi-Test', 'Mathew', '', '2345678901', 'sfdfd', '', 'Bangalore', 'India', 'Karnataka', 6),
(30, 'sibi@inertiainc.co.in', 'Sibi-Test', 'Mathew', '', '2345678901', 'sfdfd', '', 'Bangalore', 'India', 'Karnataka', 7),
(31, 'sibi@inertiainc.co.in', 'Sibi-Test', 'Mathew', '', '2345678901', 'sfdfd', '', 'Bangalore', 'India', 'Karnataka', 8),
(32, 'sibi@inertiainc.co.in', 'Sibi-Test', 'Mathew', '', '2345678901', 'sfdfd', '', 'Bangalore', 'India', 'Karnataka', 9),
(33, 'sibi@inertiainc.co.in', 'Stm-Test', 'Mathew', '', '2345678902', 'Peniel#5', '', 'Bangalore', 'India', 'Kerala', 10),
(34, 'sibi@inertiainc.co.in', 'Stm-Test', 'Mathew', '', '2345678902', 'Peniel#5', '', 'Bangalore', 'India', 'Kerala', 11),
(35, 'sibi@inertiainc.co.in', 'Stm-Test', 'Mathew', '', '2345678902', 'Peniel#5', '', 'Bangalore', 'India', 'Kerala', 12),
(36, 'sibi@inertiainc.co.in', 'Stm-Test', 'Mathew', '', '2345678902', 'Peniel#5', '', 'Bangalore', 'India', 'Kerala', 13),
(37, 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '', '9844360170', 'Honeycomb', 'kormangala', 'banglore', 'India', 'Karnataka', 14),
(38, 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '', '9844360170', 'Honeycomb', 'kormangala', 'banglore', 'India', 'Karnataka', 15),
(39, 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '', '9844360170', 'Honeycomb', 'kormangala', 'banglore', 'India', 'Karnataka', 16),
(40, 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '', '9844360170', 'Honeycomb', 'kormangala', 'banglore', 'India', 'Karnataka', 17),
(41, 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '', '9844360170', 'Honeycomb', 'kormangala', 'banglore', 'India', 'Karnataka', 18),
(42, 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '', '9844360170', 'Honeycomb', 'kormangala', 'banglore', 'India', 'Karnataka', 19),
(43, 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '', '9844360170', 'Honeycomb', 'kormangala', 'banglore', 'India', 'Karnataka', 20),
(44, 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '', '9844360170', 'Honeycomb', 'kormangala', 'banglore', 'India', 'Karnataka', 21),
(45, 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '', '9844360170', 'Honeycomb', 'kormangala', 'banglore', 'India', 'Karnataka', 22),
(46, 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '', '9844360170', 'Honeycomb', 'kormangala', 'banglore', 'India', 'Karnataka', 23),
(47, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Chandigarh', 24),
(48, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Chandigarh', 25),
(49, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Chandigarh', 26),
(50, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Chandigarh', 27),
(51, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Chandigarh', 28),
(52, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Chandigarh', 29),
(53, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Chandigarh', 30),
(54, 'sibi@inertiainc.co.in', 'Sibi', 'Mathew', '', '5435454535', 'dgfdgfdg', '', 'Bangalore', 'India', 'Chandigarh', 31),
(55, 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '', '9844360170', 'Honeycomb', 'kormangala', 'banglore', 'India', 'Karnataka', 32),
(56, 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '', '9844360170', 'Honeycomb', 'kormangala', 'banglore', 'India', 'Karnataka', 33),
(57, 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '', '9844360170', 'Honeycomb', 'kormangala', 'banglore', 'India', 'Karnataka', 34),
(58, 'photostop.blog@gmail.com', 'Harika', 'Maruboyina', '', '9986687424', 'Koramangala', '', 'Bengaluru', 'India', 'Karnataka', 35),
(59, 'alekhya.s@ebs.in', 'Test', 'test ', '', '04444887000', '123 3 rf', '', 'Hyderabad', 'India', 'Andhra Pradesh', 36),
(60, 'sreekumar@honeycombindia.net', 'sreekumar', 'K B', '', '9844360170', 'abc', 'abc', 'bangalore', 'India', 'Karnataka', 37),
(61, 'noufel@honeycombindia.net', 'Noufel', 'A N', '', '919845128760', '1026, 2nd Floor, 7th Main, 1st Block, Koramangala', '', 'Bangalore', 'India', 'Karnataka', 38),
(62, 'baiju@honeycombindia.net', 'baiju', 'mm', '', '7411643619', '1026, 2nd floor (next to more),80 ft rd', '7th main, 1st block, kormangala', 'bangalore', 'India', 'Karnataka', 39);

-- --------------------------------------------------------

--
-- Table structure for table `photo_users`
--

CREATE TABLE IF NOT EXISTS `photo_users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userFullName` varchar(500) NOT NULL,
  `userName` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `address` text NOT NULL,
  `Email` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `country` varchar(222) NOT NULL,
  `phoneNo` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `registerStatus` enum('notverified','verified') NOT NULL,
  PRIMARY KEY (`userId`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `photo_users`
--

INSERT INTO `photo_users` (`userId`, `userFullName`, `userName`, `password`, `address`, `Email`, `city`, `state`, `country`, `phoneNo`, `status`, `registerStatus`) VALUES
(1, 'User', 'user123', 'user123', 'sgsgf', 'stm@ymail.com', 'Bang', 'Kar', 'India', '987654321334', 0, 'verified'),
(2, 'Sibi', 'stm123', 'stm123', 'vsgdsgfdgfdfd', 'user2@xyz.com', 'Bang', 'Kar', 'India', '52543433535', 0, 'verified'),
(3, 'Test', 'test123', 'test123', 'xyz', 'sibi@inertiainc.co.in', 'Bangalore', 'Karnataka', 'India', '52543433535', 0, 'notverified'),
(5, 'Dharshan', 'dharshan', '123456', 'Bangalore', 'sharshan@inertiainc.co.in', 'Bangalore', 'Karnataka', 'India', '9663151313', 0, 'notverified'),
(8, 'vani', 'lakshmi', 'Honey123', 'koramangala', 'vani@honeycombindia.net', 'bangalore', 'karnataka', 'India', '8050841377', 0, 'verified'),
(9, 'Harika', 'Harika', 'Honey123', 'SIMC', 'harika.naidu1@gmail.com', 'Banglore', 'Karnataka', 'India', '9986687424', 0, 'verified'),
(13, 'anusha', 'anusha', 'mail@simc', 'jhbfljhsbfwk', 'anusha@simc.edu.in', 'kjbljbjk', 'lbjkblu', 'India', '9879824921', 0, 'verified'),
(14, 'anusha', 'anushak', 'mail@simc', 'kjnbfcewlinc', 'anusha@simc.edu.in', 'JBIBVWPUICJSK', 'LKJBLJB ', 'Bahamas', '9999999999', 0, 'notverified'),
(20, 'Prakash Kaja', 'pkaja123', '4uris1ly', '305 Keerthi Regent 2nd Main Road Kodihalli', 'prakash.kaja@gmail.com', 'Bangalore', 'Karnataka', 'India', '9663106752', 0, 'verified'),
(21, 'Sreekumar', 'sreekumar', 'pharaoh2k', 'No.1026, 2nd Floor,80 ft Rd. 7th Main, 1st block, Koramangala', 'sreekumar@honeycombindia.net', 'Bangalore', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(22, 'chaithra', 'indiaindia', 'india!@#', 'New Bel Road.Bangalore', 'chitra@inertiainc.co.in', 'Bangalore', 'Karnataka', 'India', '8123902142', 0, 'verified'),
(23, 'Poonam', 'poonam', 'poonam', 'Ulsoor', 'poonam.g.reddy@gmail.com', 'Bangalore', 'Karnataka', 'India', '9876785434', 0, 'verified'),
(24, 'sujith kaimal', 'sujithkaimal', 'mannadiar', '', 'sujithkaimal@gmail.com', '', '', 'India', '9008944644', 0, 'notverified'),
(25, 'anusha', 'anushakk', 'mail@simc', 'dsjbfvcwn;kjebv', 'anushasntalien@gmail.com', ';lb;jb ;ljk', ';onic ;elkj w', 'India', '9999999999', 0, 'verified'),
(26, 'Harika', 'harika12', 'Honey123', 'simc', 'harika.naidu1@gmail.com', 'Bengaluru', 'Karnataka', 'India', '919986687424', 0, 'verified'),
(27, 'Goutam Majumder', 'GoutamMajumder', 'Bappa001', 'G8, Vintage Elite, Block A, 1st Main, Vishweshwaraya Marg, BTM 4th Stage.', 'goutammajumder@gmail.com', 'Bangalore', 'Karnataka', 'India', '919742078668', 0, 'notverified'),
(28, 'Sribha Jain', 'sribhajain', 'sribha3108', 'C-208, Purva Heights, Bilekahalli, Bannerghatta Rd', 'sribha@gmail.com', 'Bangalore', 'Karnataka', 'India', '9845422778', 0, 'notverified'),
(29, 'Shashank Ramesh', 'Shashank Ramesh', 'rpshankp123', 'AO-1, HAL Oldtownship,\nVimanapura post,', 'shashankramesh20@gmail.com', 'Bangalore', 'Karnataka', 'India', '9663360890', 0, 'verified'),
(30, '', '', '', '', '', '', '', '', '', 0, 'notverified'),
(32, 'ManjunathBK', 'manbabu', 'april2004', '12324\nasdasfad', 'manjunathbk@gmail.com', 'Bengaluru', 'Karanataka', 'India', '1234567890', 0, 'verified'),
(33, 'Lakshmikantha Mattur', 'lkanth22', 'sureshraina', '87 2nd cross Sushruthi Nagar Basapura\nElectronics city post', 'lkanth22@gmail.com', 'bangalore', 'karnataka', 'India', '9886605687', 0, 'notverified'),
(34, 'Santosh Sugumar', 'santosh_sugumar', 'sarada', '', 'santoshssantosh@gmail.com', 'Bangalore', 'Karnataka', 'India', '9986624677', 0, 'notverified'),
(35, 'Venkatesh', 'vappala', 'stupid', 'Sai Siddi Homes, TF-3, Venkateswara Colony, Sheels nagar', 'venkatesh.appala@gmail.com', 'Visakhapatnam', 'Andhra Pradesh', 'India', '7259354444', 0, 'verified'),
(36, 'Venkatesh Appala', 'venkatesh', 'venkatesh', 'Honeycomb Creative Support (p)ltd.', 'photostop.blog@gmail.com', 'Banglore', 'Karnataka', 'India', '9844360170', 0, 'verified'),
(58, 'Binu Balakrishnan', 'binubal', 'thamara@suzhou', 'G-205, Alpine Echo Apartments, Marathahalli', 'binubal@yahoo.com', 'Bangalore', 'Karnataka', 'India', '9980540749', 0, 'notverified'),
(59, 'poorneshgopi', 'poorneshgopi', 'vishakh3gg', '', 'poorneshgopi3g@gmail.com', 'trivandrum', 'kerala', 'India', '8089030381', 0, 'verified'),
(61, 'Shashank Ramesh', 'shashankramesh20@gmail.com', 'rpshankp123', 'AO-1, HAL OLDTOWNSHIP,\nVIMANAPURA POST', 'shashankramesh20@gmail.com', 'BANGALORE', 'KARNATAKA', 'India', '9663360890', 0, 'verified'),
(62, 'Tarun Giridhar B', 'tarunbg05', 'DSLR@123', '6-001, The Heritage Estate, DBP Road, Yelahanka', 'tarunbg05@gmail.com', 'Bangalore', 'Karnataka', 'India', '9591100633', 0, 'verified'),
(63, 'Sucheth S L', 'suchethsl', '1qaz!QAZ', '169/2,2nd floor,6th cross,2nd Main, Venkatapura, Koramangala 1st Block.Bangalore - 560034', 'suchethsl@gmail.com', 'Bangalore ', 'Karnataka', 'India', '9886049987', 0, 'verified'),
(64, 'vani', 'vanilakshmi', 'Honey123', '', 'vani@honeycombindia.net', 'bangalore', 'karnataka', 'India', '8050841377', 0, 'verified'),
(65, 'rajinder saggu', 'Raj.saggu', 'clarion', '1943, 1st Cross, 9th Main,\nKumaraswamy Layout 2nd Stage', 'raaj.saggu@gmail.com', 'Banagalore', 'Karnataka', 'India', '9591160402', 0, 'verified'),
(66, 'test', 'testtest', '123456', '12345', 'alekhya.s@ebs.in', 'HYDERABAD', 'Andrapradesh', 'India', '04044887000', 0, 'verified'),
(67, 'anzal s', 'anzals', 'asw767', 'nbh 634, New boys hostel, IISc hostel, IISc, Malleshwaram , Bangalore 560012 , Karnataka', 'anzal.s@gmail.com', 'bangalore', 'Karnataka', 'India', '919008838321', 0, 'verified'),
(68, 'Amit Khanna', 'amit.2503', 'AMIT1979', '5/15, Patel Colony, Laximibai Lad road, dahisar east', 'amit.2503@gmail.com', 'Mumbai', 'Maharashtra', 'India', '9833110421', 0, 'verified'),
(69, 'Swarup', 'swarupdayal', 'veni.suryam87', 'DBK 31D, Railway Quaters, Dondaprthy', 'swarupdayal@gmail.com', 'Visakhapatnam', 'Andhra Pradesh', 'India', '9618014794', 0, 'verified'),
(70, 'Tapas Datta', 'dattatapas', 'sumana1611', '', 'dattatapas1@gmail.com', 'Dubai', '', 'United Arab Emirates', '00971504589461', 0, 'verified'),
(71, 'Devanshu Morang', 'Morang24', 'soulless', 'Aihm&ct boys hostel', 'morangdevanshu@gmail.com', 'bangalore', 'karnataka', 'India', '7760146871', 0, 'notverified'),
(73, 'Sanketh YS', 'sankethys@gmail.com', '20110885041', '600, 9th A main, A Sector, Yelahanaka  NewTown, Bangalore - 560064 ', 'sankethys@gmail.com', 'Bangalore ', 'Karnataka', 'India', '9916784135', 0, 'notverified'),
(74, 'Prasad.BG', 'prasad naidu', 'prasadbg', 'No.02, 1st main 1st cross, chamundeshwari layout, vidyaranyapura post, bangalore-560097', 'prasadbg99@gmail.com', 'bangalore', 'karnataka', 'India', '7795588525', 0, 'verified'),
(75, 'manjith babu', 'Manjithclicks', 'rocksalad', '#12/112, GF, 1st cross, Venkataswamappa Layout, Vidyaranyapura', 'manjith.r@gmail.com', 'bangalore', 'Karnataka', 'India', '9986338800', 0, 'verified'),
(76, 'Sudipta', 'Sudipta', 'Titir@123', '7th main 19th cross,BTM 2nd Stage', 'goswami.sudipta@gmail.com', 'Bangalore', 'Karnataka', 'India', '9916221115', 0, 'notverified'),
(77, 'srikanta chandra jain', 'cjains@gmail.com', 'pratibha', '484 saraswati Vihar', 'cjains@gmail.com', 'Gurgaon', 'haryana', '', '8826045675', 0, 'verified'),
(78, 'Baiju MM', 'baijumm', 'palakkad', 'Honeycomb creative support pvt\nbangalore', 'baiju@honeycombindia.net', 'bangalore', 'karnataka', 'India', '7411653619', 0, 'verified'),
(79, 'Ankita Gupta', 'mailguptaankita', 'framed691', '', 'mailguptaankita@gmail.com', 'Bangalore', 'Karnataka', 'India', '9886247256', 0, 'notverified'),
(80, 'Umeed Mistry', 'Umeed Mistry', 'm3n0st0p', '576, 9th A Main, 1st Stage, Indiranagar,', 'umeedmistry@gmail.com', 'Bangalore', 'Karnataka', 'India', '9480521842', 0, 'verified'),
(81, 'Tasneem Khan', 'Tasneem Khan', 'verreauxi', 'D-13, Parmar Paradise, 7/9 BJ Road,', 'tasneemkhan85@gmail.com', 'Pune', 'Maharashtra', 'India', '9933225656', 0, 'notverified'),
(82, 'Noufel', 'noufel', 'riya2007', 'House No. 174, Daddys Garden, Hebbagudi, Bangalore', 'noufel@honeycombindia.net', 'Bangalore', 'Karnataka', 'India', '9845128760', 0, 'verified'),
(83, 'Varun Bhoopalam', 'bsvarun', 'aishu1111', 'Shankar Steels. No.14, GC Street, Motinagar, Behind Bamboo Bazaar', 'bsvarun@gmail.com', 'Bangalore', 'Karnataka', 'India', '9880997933', 0, 'verified'),
(84, 'Ganesh Gopal', 'gg5361', 'Cemex0609@', '# 2362, Anugraha, 16th Main, HAL II Stage', 'gg5361@gmail.com', 'Bangalore', 'Karnataka', 'India', '9980833884', 0, 'verified'),
(88, 'Renuka.A', 'Renuka', 'renu.photo5', 'ME(Microelectronics),\nDESE Departmant,\nIISc Bangalore,\n18th cross Malleshwaram, Bangalore - 560012', 'arenukanayak@gmail.com', 'Bangalore', 'Karnataka', 'India', '9739464531', 0, 'verified'),
(89, 'Tanish hawk', 'tanish hawk', 'surendra', '', 'Tanishhawk@yahoo.in', 'bangalore', 'karnataka', 'India', '7259152615', 0, 'notverified'),
(90, 'Tanish Ethan', 'Tanish ethan', 'surendra', '', 'Smcarfinishers@gmail.com', 'Bangalore', 'Karnataka', 'India', '7259152615', 0, 'notverified'),
(91, 'Nandhini Gopalan', 'nandhini', 'gprasanna', '', 'nandhini.gopalan@gmail.com', 'Bangalore', 'Karnataka', 'India', '919535713758', 0, 'verified'),
(92, 'Test', 'test_test', '123456', 'Test', 'test@gmail.com', 'Mumbai', 'Maharashtra', 'India', '9912345678', 0, 'notverified'),
(93, 'Alka', 'cliksy', 'alka25457857', '', 'dalka77@gmail.com', 'Pune', 'Maharashtra', 'India', '7507068218', 0, 'notverified');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
