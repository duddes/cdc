-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.0.51b-community-nt - MySQL Community Edition (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2012-07-19 11:05:25
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for cdc
DROP DATABASE IF EXISTS `cdc`;
CREATE DATABASE IF NOT EXISTS `cdc` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cdc`;


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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table cdc.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `roleid`, `fname`, `lname`, `sex`, `email`, `username`, `password`, `filename`, `datelogin`, `ipaddress`) VALUES
	(4, 1, 'kenneth', 'cordova', 'male', 'knnth.cordova@gmail.com', 'kenneth', 'admin', '', '2012-07-19 02:59:09', '127.0.0.1'),
	(6, 2, 'user fname', 'user lname', 'male', 'code4toth@yahoo.com', 'user', 'user', '', '2012-04-22 07:06:09', '127.0.0.1');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
