# Host: localhost  (Version: 5.5.53)
# Date: 2018-10-16 21:40:30
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES gb2312 */;

#
# Structure for table "f1ag"
#

CREATE TABLE `f1ag` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `flag` varchar(255) DEFAULT 'flag{we1_come}',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "f1ag"
#

INSERT INTO `f1ag` VALUES (1,'flag{we1_come}');

#
# Structure for table "user"
#

CREATE TABLE `user` (
  `Id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT '1',
  `age` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (0,'.0','0'),(1,'1','1'),(2,'2','2'),(3,'3','3'),(4,'4','4');
