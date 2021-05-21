﻿# Host: localhost  (Version: 5.7.26)
# Date: 2021-05-21 13:44:36
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "article"
#

DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `name` varchar(50) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `time` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "article"
#

/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES ('                php','php是最美好的语言','2021/05/19 22:15');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;

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
INSERT INTO `user` VALUES ('admin','123',X'494D475F32303139313032355F3038323931382831292E6A7067000000000000000000000000000000000000000000000000'),('yankai','yanyan',X'494D475F32303139313032355F3038323931383120322E6A7067000000000000000000000000000000000000000000000000'),('111','111',X'494D475F32303139313032355F3038323931383120332E6A7067000000000000000000000000000000000000000000000000');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
