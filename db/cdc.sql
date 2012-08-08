-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.0.51b-community-nt - MySQL Community Edition (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-08-03 10:09:04
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table cdc.category
DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` tinyint(5) unsigned NOT NULL auto_increment,
  `category_name` varchar(25) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table cdc.inventory
DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `date_added` varchar(25) NOT NULL,
  `date_updated` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `category_id` int(10) unsigned NOT NULL default '0',
  `sku` char(25) NOT NULL,
  `description` varchar(50) NOT NULL,
  `units` char(10) NOT NULL default 'PCS',
  `qty` int(10) NOT NULL default '0',
  `packing` int(5) NOT NULL default '1',
  `unitcost` double(10,2) NOT NULL default '0.00',
  `unitprice` double(10,2) NOT NULL default '0.00',
  `deposits` double(10,2) NOT NULL default '0.00',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table cdc.units
DROP TABLE IF EXISTS `units`;
CREATE TABLE IF NOT EXISTS `units` (
  `id` tinyint(10) unsigned NOT NULL auto_increment,
  `unit_name` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.


-- Dumping structure for table cdc.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL auto_increment,
  `roleid` int(10) NOT NULL default '0',
  `fname` varchar(25) default NULL,
  `lname` varchar(25) default NULL,
  `sex` varchar(10) default NULL,
  `email` varchar(150) default NULL,
  `username` varchar(150) default NULL,
  `password` varchar(150) default NULL,
  `filename` varchar(50) default NULL,
  `datelogin` varchar(50) default NULL,
  `ipaddress` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
