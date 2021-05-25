# Host: localhost  (Version: 5.7.26)
# Date: 2021-05-25 21:30:05
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `image` binary(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('admin','123',X'71712E6A70670000000000000000000000000000000000000000000000000000000000000000000000000000000000000000');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
