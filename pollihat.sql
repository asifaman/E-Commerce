-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2014 at 10:14 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pollihat`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `email` varchar(5000) NOT NULL,
  `username` varchar(5000) NOT NULL,
  `password` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `username`, `password`) VALUES
(1, 'asifaman31@yahoo.com', 'admin', '123456'),
(2, 'asifaman@yahoo.com', 'alimoon', 'alimoon');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`serial`, `name`, `email`, `address`, `phone`) VALUES
(1, 'asif aman', 'asifaman31@gmail.com', '10/b,arambag, motijheel, dhaka-1000', '01722335535'),
(29, 'Saurav Kumer Sen', 'asifaman31@yahoo.com', '123/erijsd', '01670141478'),
(28, 'Saurav Kumer Sen', 'sdfsdfjkldsfj', '123/erijsd', 'lskdfjkljs');

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact_info`
--

CREATE TABLE IF NOT EXISTS `customer_contact_info` (
  `serial` int(250) NOT NULL AUTO_INCREMENT,
  `name` int(250) NOT NULL,
  `mobile` varchar(5000) NOT NULL,
  `email` varchar(5000) NOT NULL,
  `message` varchar(5000) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_order`
--

CREATE TABLE IF NOT EXISTS `delivery_order` (
  `serial` int(250) NOT NULL AUTO_INCREMENT,
  `name` varchar(5000) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `phone` int(250) NOT NULL,
  `date` date NOT NULL,
  `customerid` int(250) NOT NULL,
  `product_name` varchar(5000) NOT NULL,
  `qty` int(250) NOT NULL,
  `price` int(250) NOT NULL,
  `condition` varchar(500) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `delivery_order`
--

INSERT INTO `delivery_order` (`serial`, `name`, `address`, `phone`, `date`, `customerid`, `product_name`, `qty`, `price`, `condition`) VALUES
(1, 'asif aman', '10/b,arambag, motijheel, dhaka-1000', 1722335535, '2014-06-20', 3, 'IBM CDROM Drive, IBM CDROM Drive', 2, 230, '');

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE IF NOT EXISTS `management` (
  `serial` int(250) NOT NULL AUTO_INCREMENT,
  `name` varchar(5000) NOT NULL,
  `details` varchar(5000) NOT NULL,
  `total_cost` int(250) NOT NULL,
  `date` date NOT NULL,
  `login_name` varchar(5000) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`serial`, `name`, `details`, `total_cost`, `date`, `login_name`) VALUES
(1, 'asif aman', 'camera 1pcs, digital LED display 1 pcs', 13500, '2014-06-26', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`) VALUES
(1, '2014-06-14', 1),
(2, '2014-06-15', 2),
(3, '2014-06-16', 3),
(4, '2014-06-17', 4),
(5, '2014-06-17', 5),
(6, '2014-06-25', 7),
(7, '2014-06-25', 8),
(8, '2014-06-25', 9),
(9, '2014-06-25', 10),
(10, '2014-06-25', 11),
(11, '2014-06-25', 12),
(12, '2014-06-25', 13),
(13, '2014-06-25', 14),
(14, '2014-06-25', 15),
(15, '2014-06-25', 16),
(16, '2014-06-25', 17),
(17, '2014-06-25', 18),
(18, '2014-06-25', 19),
(19, '2014-06-25', 20),
(20, '2014-06-25', 21),
(21, '2014-06-25', 22),
(22, '2014-06-28', 23),
(23, '2014-06-28', 24),
(24, '2014-07-07', 25),
(25, '2014-07-20', 26),
(26, '2014-08-30', 27),
(27, '2014-09-03', 28),
(28, '2014-09-03', 29);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `product_name` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  `serial` int(250) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=68 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `quantity`, `price`, `product_name`, `serial`) VALUES
(1, 6, 1, 299, '', 1),
(2, 3, 1, 50, '', 2),
(2, 4, 1, 40, '', 3),
(2, 2, 1, 80, '', 4),
(2, 1, 1, 250, '', 5),
(3, 2, 2, 80, '', 6),
(4, 2, 1, 80, 'IBM CDROM Drive', 7),
(5, 2, 1, 80, 'IBM CDROM Drive', 8),
(6, 19, 1, 500, 'Dry Small Shrimp', 10),
(6, 2, 1, 5800, 'Samsung ES95 Camera ', 11),
(6, 15, 1, 1800, 'Marine Coral Dry ', 12),
(7, 19, 1, 500, 'Dry Small Shrimp', 13),
(7, 2, 1, 5800, 'Samsung ES95 Camera ', 14),
(7, 15, 1, 1800, 'Marine Coral Dry ', 15),
(8, 19, 1, 500, 'Dry Small Shrimp', 16),
(8, 2, 1, 5800, 'Samsung ES95 Camera ', 17),
(8, 15, 1, 1800, 'Marine Coral Dry ', 18),
(9, 19, 1, 500, 'Dry Small Shrimp', 19),
(9, 2, 1, 5800, 'Samsung ES95 Camera ', 20),
(9, 15, 1, 1800, 'Marine Coral Dry ', 21),
(10, 19, 1, 500, 'Dry Small Shrimp', 22),
(10, 2, 1, 5800, 'Samsung ES95 Camera ', 23),
(10, 15, 1, 1800, 'Marine Coral Dry ', 24),
(11, 19, 1, 500, 'Dry Small Shrimp', 25),
(11, 2, 1, 5800, 'Samsung ES95 Camera ', 26),
(11, 15, 1, 1800, 'Marine Coral Dry ', 27),
(12, 19, 1, 500, 'Dry Small Shrimp', 28),
(12, 2, 1, 5800, 'Samsung ES95 Camera ', 29),
(12, 15, 1, 1800, 'Marine Coral Dry ', 30),
(13, 19, 1, 500, 'Dry Small Shrimp', 31),
(13, 2, 1, 5800, 'Samsung ES95 Camera ', 32),
(13, 15, 1, 1800, 'Marine Coral Dry ', 33),
(14, 19, 1, 500, 'Dry Small Shrimp', 34),
(14, 2, 1, 5800, 'Samsung ES95 Camera ', 35),
(14, 15, 1, 1800, 'Marine Coral Dry ', 36),
(15, 19, 1, 500, 'Dry Small Shrimp', 37),
(15, 2, 1, 5800, 'Samsung ES95 Camera ', 38),
(15, 15, 1, 1800, 'Marine Coral Dry ', 39),
(16, 19, 1, 500, 'Dry Small Shrimp', 40),
(16, 2, 1, 5800, 'Samsung ES95 Camera ', 41),
(16, 15, 1, 1800, 'Marine Coral Dry ', 42),
(17, 19, 1, 500, 'Dry Small Shrimp', 43),
(17, 2, 1, 5800, 'Samsung ES95 Camera ', 44),
(17, 15, 1, 1800, 'Marine Coral Dry ', 45),
(18, 19, 1, 500, 'Dry Small Shrimp', 46),
(18, 2, 1, 5800, 'Samsung ES95 Camera ', 47),
(18, 15, 1, 1800, 'Marine Coral Dry ', 48),
(19, 19, 1, 500, 'Dry Small Shrimp', 49),
(19, 2, 1, 5800, 'Samsung ES95 Camera ', 50),
(19, 15, 1, 1800, 'Marine Coral Dry ', 51),
(20, 19, 1, 500, 'Dry Small Shrimp', 52),
(20, 2, 1, 5800, 'Samsung ES95 Camera ', 53),
(20, 15, 1, 1800, 'Marine Coral Dry ', 54),
(21, 19, 1, 500, 'Dry Small Shrimp', 55),
(21, 2, 1, 5800, 'Samsung ES95 Camera ', 56),
(21, 15, 1, 1800, 'Marine Coral Dry ', 57),
(22, 15, 1, 1800, 'Marine Coral Dry ', 58),
(23, 15, 1, 1800, 'Marine Coral Dry ', 59),
(23, 16, 1, 2500, 'Rupchanda Dry Fish', 60),
(24, 1, 1, 8000, 'Digital LED Display', 61),
(25, 16, 1, 2500, 'Rupchanda Dry Fish', 62),
(26, 2, 1, 5800, 'Samsung ES95 Camera ', 63),
(27, 15, 2, 1800, 'Marine Coral Dry ', 64),
(27, 1, 1, 8000, 'Digital LED Display', 65),
(28, 15, 2, 1800, 'Marine Coral Dry ', 66),
(28, 1, 1, 8000, 'Digital LED Display', 67);

-- --------------------------------------------------------

--
-- Table structure for table `phpap105_admins`
--

CREATE TABLE IF NOT EXISTS `phpap105_admins` (
  `status` enum('main admin','admin') NOT NULL DEFAULT 'admin'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phpap105_menu`
--

CREATE TABLE IF NOT EXISTS `phpap105_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `page_name` varchar(30) NOT NULL DEFAULT '',
  `is_menu_group` tinyint(1) NOT NULL DEFAULT '0',
  `is_removable` tinyint(1) NOT NULL DEFAULT '0',
  `is_hidden` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `order_index` tinyint(3) NOT NULL DEFAULT '0',
  `icon` varchar(30) DEFAULT NULL,
  `is_dashboard_icon` tinyint(1) DEFAULT '1',
  `is_menu_item` tinyint(1) NOT NULL DEFAULT '1',
  `file_type_id` tinyint(3) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `is_menu_name` (`is_menu_group`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `phpap105_menu`
--

INSERT INTO `phpap105_menu` (`id`, `name`, `page_name`, `is_menu_group`, `is_removable`, `is_hidden`, `parent_id`, `order_index`, `icon`, `is_dashboard_icon`, `is_menu_item`, `file_type_id`) VALUES
(1, 'General', '', 1, 0, 0, 0, 0, '', 1, 1, 2),
(2, 'Account Manager', '', 1, 0, 0, 0, 5, '', 1, 1, 2),
(3, 'Emails & Events', '', 1, 0, 0, 0, 10, '', 1, 1, 2),
(4, 'Statistics', '', 1, 0, 0, 0, 15, '', 1, 1, 2),
(5, 'Menu Manager', 'pages/menu_manager.php', 0, 0, 0, 1, 10, 'menu_manager.png', 1, 1, 2),
(6, 'Main', 'home.php', 0, 0, 0, 1, 0, '', 0, 1, 2),
(7, 'My Account', 'pages/my_account.php', 0, 0, 0, 2, 0, 'my_account.png', 1, 1, 2),
(8, 'Admins', 'pages/admins.php', 0, 0, 0, 2, 0, 'admins.png', 1, 1, 2),
(9, 'Users', 'pages/users.php', 0, 0, 0, 2, 5, '', 1, 1, 2),
(10, 'News', 'pages/news.php', 0, 0, 0, 3, 0, '', 1, 1, 2),
(11, 'Mass Mail', 'pages/mass_mail.php', 0, 0, 0, 3, 5, '', 1, 1, 2),
(12, 'Events', 'pages/events.php', 0, 0, 0, 3, 10, '', 1, 1, 2),
(13, 'Logs', 'pages/logs.php', 0, 0, 0, 4, 0, '', 1, 1, 2),
(14, 'Statistics', 'pages/statistics.php', 0, 0, 0, 4, 5, '', 1, 1, 2),
(15, 'Pages', '', 1, 0, 0, 0, 7, NULL, 0, 1, 2),
(16, 'Static', 'pages/static_pages.php', 0, 0, 0, 15, 0, '', 0, 1, 2),
(94, 'Order', '', 1, 0, 0, 0, 8, NULL, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `phpap105_settings`
--

CREATE TABLE IF NOT EXISTS `phpap105_settings` (
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(125) NOT NULL DEFAULT '',
  `site_address` varchar(125) NOT NULL DEFAULT '',
  `css_style` varchar(10) NOT NULL DEFAULT '',
  `header_text` varchar(125) NOT NULL DEFAULT '',
  `site_language` char(2) NOT NULL DEFAULT 'en',
  `datagrid_css_style` varchar(10) NOT NULL DEFAULT 'default',
  `menu_style` enum('left','top') NOT NULL DEFAULT 'left',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phpap105_settings`
--

INSERT INTO `phpap105_settings` (`id`, `site_name`, `site_address`, `css_style`, `header_text`, `site_language`, `datagrid_css_style`, `menu_style`) VALUES
(1, 'Admin Panel Development', 'domain.com', 'blue', 'Admin Panel', 'en', 'blue', 'top');

-- --------------------------------------------------------

--
-- Table structure for table `p_dry_fish_view`
--

CREATE TABLE IF NOT EXISTS `p_dry_fish_view` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `P_catagory` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  `P_code` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `p_dry_fish_view`
--

INSERT INTO `p_dry_fish_view` (`serial`, `name`, `description`, `price`, `picture`, `P_catagory`, `P_code`) VALUES
(15, 'Marine Coral Dry ', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata. Per KG Price BDT 550/= You buy this Product from online.minimum order 500 gm. 100% Halal Food. ', 1800, 'images/dry_fish/shutki-koral-500x500.jpg', '', ''),
(14, 'Lotta Dry fish', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata.\r\nPer KG Price BDT 550/= You buy this Product from online. minimum order 1 kg. 100% Halal Food.\r\n', 550, 'images/dry_fish/lotta.jpg', '', ''),
(16, 'Rupchanda Dry Fish', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata. Per KG Price BDT 550/= You buy this Product from online.minimum order 500 gm. 100% Halal Food. ', 2500, 'images/dry_fish/rup_chanda_1_2_1.jpg', '', ''),
(17, 'Elish Dry Fish', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata. Per KG Price BDT 550/= You buy this Product from online.minimum order 1 KG. 100% Halal Food. ', 1000, 'images/dry_fish/ilish.jpg', '', ''),
(18, 'Dry Elish Fish Eggs ', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata. Per KG Price BDT 550/= You buy this Product from online. minimum order 500 gm. 100% Halal Food. ', 1000, 'images/dry_fish/ilish-dim.jpg', '', ''),
(19, 'Dry Small Shrimp', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata. Per KG Price BDT 550/= You buy this Product from online. minimum order 500 gm. 100% Halal Food. ', 500, 'images/dry_fish/chingri_02.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_dry_fish_view_all`
--

CREATE TABLE IF NOT EXISTS `p_dry_fish_view_all` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `P_catagory` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  `P_code` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `p_dry_fish_view_all`
--

INSERT INTO `p_dry_fish_view_all` (`serial`, `name`, `description`, `price`, `picture`, `P_catagory`, `P_code`) VALUES
(21, 'Marine Coral Dry ', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata. Per KG Price BDT 550/= You buy this Product from online.minimum order 500 gm. 100% Halal Food. ', 1800, 'images/dry_fish/shutki-koral-500x500.jpg', '', ''),
(24, 'Dry Elish Fish Eggs ', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata. Per KG Price BDT 550/= You buy this Product from online. minimum order 500 gm. 100% Halal Food. ', 1000, 'images/dry_fish/ilish-dim.jpg', '', ''),
(23, 'Elish Dry Fish', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata. Per KG Price BDT 550/= You buy this Product from online.minimum order 1 KG. 100% Halal Food. ', 1000, 'images/dry_fish/ilish.jpg', '', ''),
(22, 'Rupchanda Dry Fish', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata. Per KG Price BDT 550/= You buy this Product from online.minimum order 500 gm. 100% Halal Food. ', 2500, 'images/dry_fish/rup_chanda_1_2_1.jpg', '', ''),
(20, 'Lotta Dry fish', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata. Per KG Price BDT 550/= You buy this Product from online. minimum order 1 kg. 100% Halal Food. ', 550, 'images/dry_fish/lotta.jpg', '', ''),
(25, 'Dry Small Shrimp', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata. Per KG Price BDT 550/= You buy this Product from online. minimum order 500 gm. 100% Halal Food. ', 500, 'images/dry_fish/chingri_02.jpg', '', ''),
(26, 'Dry Large Shrimp', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata. Per KG Price BDT 550/= You buy this Product from online. minimum order 500 gm. 100% Halal Food. ', 1000, 'images/dry_fish/chingri_2_4.jpg', '', ''),
(27, 'Kaski Dry Fish', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata. Per KG Price BDT 550/= You buy this Product from online. minimum order 1 KG. 100% Halal Food. ', 500, 'images/dry_fish/Kaski.jpg', '', ''),
(28, 'Churi dry fish', '100% chemical free Natural Dry Fish. The dry Fish collect from Kuakata. Per KG Price BDT 550/= You buy this Product from online. minimum order 1 KG. 100% Halal Food. ', 800, 'images/dry_fish/churi-1kg.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_electronic_view`
--

CREATE TABLE IF NOT EXISTS `p_electronic_view` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `P_catagory` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  `P_code` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `p_electronic_view`
--

INSERT INTO `p_electronic_view` (`serial`, `name`, `description`, `price`, `picture`, `P_catagory`, `P_code`) VALUES
(1, 'Digital LED Display', 'Width=4 Fit Height=8 inches                                                 The digital display units from Electronic Displays will automate your information gathering processes with custom LED systems and the display control by mobile message', 8000, 'images/electronic/led_display.jpg', '', ''),
(2, 'Samsung ES95 Camera ', 'Advance Payment Needed !! Samsung ES95 camera has 16.2 megapixel resolution, 5x optical zoom, 2.7" LCD screen, auto Flash with red-eye reduction, multi shooting mode such as smart auto, scene, PIP; USB 2.0, external memory card slot, rechargable battery.', 5800, 'images/electronic/Samsung_ES95.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_electronic_view_all`
--

CREATE TABLE IF NOT EXISTS `p_electronic_view_all` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `P_catagory` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  `P_code` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `p_electronic_view_all`
--

INSERT INTO `p_electronic_view_all` (`serial`, `name`, `description`, `price`, `picture`, `P_catagory`, `P_code`) VALUES
(1, 'Digital LED Display', 'Width=4 Fit Height=8 inches                                                 The digital display units from Electronic Displays will automate your information gathering processes with custom LED systems and the display control by mobile message', 8000, 'images/electronic/led_display.jpg', '', ''),
(2, 'Samsung ES95 Camera ', 'Advance Payment Needed !! Samsung ES95 camera has 16.2 megapixel resolution, 5x optical zoom, 2.7" LCD screen, auto Flash with red-eye reduction, multi shooting mode such as smart auto, scene, PIP; USB 2.0, external memory card slot, rechargable battery.', 5800, 'images/electronic/Samsung_ES95.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_e_book_view`
--

CREATE TABLE IF NOT EXISTS `p_e_book_view` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `P_catagory` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  `P_code` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `p_e_book_view`
--

INSERT INTO `p_e_book_view` (`serial`, `name`, `description`, `price`, `picture`, `P_catagory`, `P_code`) VALUES
(1, '1971 ', 'Humayun Ahmed was a Bangladeshi author, dramatist, screenwriter, playwright and filmmaker. Dawn referred to him as the cultural legend of Bangladesh.', 'http://www.mediafire.com/download/yi68n81tys56063/banglar24.com1971+by+Humayum+Ahmed.pdf', 'images/e_book/1971.jpg', '', ''),
(2, 'Ami-ee Misir Ali', 'Humayun Ahmed was a Bangladeshi author, dramatist, screenwriter, playwright and filmmaker. Dawn referred to him as the cultural legend of Bangladesh.', 'http://www.mediafire.com/download/cukuw9g9lb7cvx1/banglar24.comAmi-ee+Misir+Ali.pdf', 'images/e_book/ami-e-misir-ali.JPG', '', ''),
(3, 'Amar Bandhu Rashed', 'Muhammed Zafar Iqbal is a Bangladeshi author of science fiction and children''s literature. He is a professor at SUST in computer science and engineering', 'http://www.mediafire.com/download/5u8cc4y5g7r3r51/banglar24.comAmar+Bandhu+Rashed+by+Md.Jafar+Iqbal.PDF', 'images/e_book/Amar-Bandhu-Rashed.jpg', '', ''),
(4, 'Aay Sukh Jaay Sukh', 'Samaresh Majumdar is a well-known contemporary Bengali writer from West Bengal, India. He is known for creation of the detective character Arjun, who is the central character of the 2013 film Arjun – Kalimpong E Sitaharan.', 'http://www.mediafire.com/download/2ck82nl31c47i2k/banglar24.comAay+Sukh+Jaay+Sukh.PDF', 'images/e_book/ay_suk.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_e_book_view_all`
--

CREATE TABLE IF NOT EXISTS `p_e_book_view_all` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `P_catagory` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  `P_code` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `p_e_book_view_all`
--

INSERT INTO `p_e_book_view_all` (`serial`, `name`, `description`, `price`, `picture`, `P_catagory`, `P_code`) VALUES
(1, '1971 ', 'Humayun Ahmed was a Bangladeshi author, dramatist, screenwriter, playwright and filmmaker. Dawn referred to him as the cultural legend of Bangladesh.', 'http://www.mediafire.com/download/yi68n81tys56063/banglar24.com1971+by+Humayum+Ahmed.pdf', 'images/e_book/1971.jpg', '', ''),
(2, 'Ami-ee Misir Ali', 'Humayun Ahmed was a Bangladeshi author, dramatist, screenwriter, playwright and filmmaker. Dawn referred to him as the cultural legend of Bangladesh.', 'http://www.mediafire.com/download/cukuw9g9lb7cvx1/banglar24.comAmi-ee+Misir+Ali.pdf', 'images/e_book/ami-e-misir-ali.JPG', '', ''),
(3, 'Amar Bandhu Rashed', 'Muhammed Zafar Iqbal is a Bangladeshi author of science fiction and children''s literature. He is a professor at SUST in computer science and engineering', 'http://www.mediafire.com/download/5u8cc4y5g7r3r51/banglar24.comAmar+Bandhu+Rashed+by+Md.Jafar+Iqbal.PDF', 'images/e_book/Amar-Bandhu-Rashed.jpg', '', ''),
(4, 'Aay Sukh Jaay Sukh', 'Samaresh Majumdar is a well-known contemporary Bengali writer from West Bengal, India. He is known for creation of the detective character Arjun, who is the central character of the 2013 film Arjun – Kalimpong E Sitaharan.', 'http://www.mediafire.com/download/2ck82nl31c47i2k/banglar24.comAay+Sukh+Jaay+Sukh.PDF', 'images/e_book/ay_suk.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_spice_view`
--

CREATE TABLE IF NOT EXISTS `p_spice_view` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `P_catagory` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  `P_code` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `p_spice_view`
--

INSERT INTO `p_spice_view` (`serial`, `name`, `description`, `price`, `picture`, `P_catagory`, `P_code`) VALUES
(1, 'Tehari Mix', 'Buy With Other Product. No Delivery Charge !!', 30, 'images/spice/tehari_mix.jpg', '', ''),
(2, 'Chashi Minicate Rice', 'Buy With Other Product. No Delivery Charge !!', 280, 'images/spice/chashi_minicate_rice.jpg', '', ''),
(3, 'Rezala Masala', 'Buy With Other Product. No Delivery Charge !!', 38, 'images/spice/rezala_masala.jpg', '', ''),
(4, 'Roast Masla', 'Buy With Other Product. No Delivery Charge !!', 46, 'images/spice/roast_masla.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `p_spice_view_all`
--

CREATE TABLE IF NOT EXISTS `p_spice_view_all` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `P_catagory` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  `P_code` varchar(5000) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `p_spice_view_all`
--

INSERT INTO `p_spice_view_all` (`serial`, `name`, `description`, `price`, `picture`, `P_catagory`, `P_code`) VALUES
(1, 'Tehari Mix', 'Buy With Other Product. No Delivery Charge !!', 30, 'images/spice/tehari_mix.jpg', '', ''),
(2, 'Chashi Minicate Rice', 'Buy With Other Product. No Delivery Charge !!', 280, 'images/spice/chashi_minicate_rice.jpg', '', ''),
(3, 'Rezala Masala', 'Buy With Other Product. No Delivery Charge !!', 38, 'images/spice/rezala_masala.jpg', '', ''),
(4, 'Roast Masla', 'Buy With Other Product. No Delivery Charge !!', 46, 'images/spice/roast_masla.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(29, 'asif', 'asifaman@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(30, 'asif', 'asifaman@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(31, 'asif', 'asifaman@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(32, 'asif aman', 'asifaman@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(33, 'asif', 'asifaman@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(34, 'asif', 'asifaman@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
