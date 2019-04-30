/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_admin_prod

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-03-20 12:27:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for suscrito
-- ----------------------------
DROP TABLE IF EXISTS `suscrito`;
CREATE TABLE `suscrito` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(50) NOT NULL DEFAULT '',
  `empresa` varchar(255) DEFAULT '',
  `mensaje` text,
  `estado` int(1) NOT NULL DEFAULT '1',
  `created_up` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
