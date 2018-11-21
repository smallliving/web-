# Host: localhost  (Version: 5.5.53)
# Date: 2018-10-16 21:40:41
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "userid"
#

CREATE TABLE `userid` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT 'admin',
  `password` varchar(255) DEFAULT 'password',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "userid"
#

INSERT INTO `userid` VALUES (1,'admin','134679');
