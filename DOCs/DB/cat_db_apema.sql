/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cat_db_apema

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-09-02 20:03:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for publicacion
-- ----------------------------
DROP TABLE IF EXISTS `publicacion`;
CREATE TABLE `publicacion` (
  `publicacion_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_publicacion_id` int(11) DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL DEFAULT '',
  `url_file` varchar(255) NOT NULL DEFAULT '',
  `publicar` char(1) NOT NULL DEFAULT 'N',
  `estado` tinyint(3) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`publicacion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of publicacion
-- ----------------------------

-- ----------------------------
-- Table structure for suscriptor
-- ----------------------------
DROP TABLE IF EXISTS `suscriptor`;
CREATE TABLE `suscriptor` (
  `suscritor_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT NULL,
  `telefono` varchar(25) NOT NULL DEFAULT '',
  `empresa` varchar(100) DEFAULT '',
  `mensaje` text,
  `estado` char(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`suscritor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of suscriptor
-- ----------------------------
INSERT INTO `suscriptor` VALUES ('1', 'Armando E', 'armandoaepp@gmail.com', '958478073', 'Catmedia', 'Mensaje de pruena', '0', '2019-06-04 11:06:14');
INSERT INTO `suscriptor` VALUES ('2', 'Armando Pisfil Puemape', 'apisfilp@gmail.com', '958478073', 'Catmedia', 'dswafasd asdfasd', '0', '2019-06-04 11:06:11');
INSERT INTO `suscriptor` VALUES ('3', 'Armando Pisfil Puemape', 'armandoaepp@gmail.com', '', '', 'dsfasdf', '1', '2019-06-04 11:06:28');

-- ----------------------------
-- Table structure for tipo_publicacion
-- ----------------------------
DROP TABLE IF EXISTS `tipo_publicacion`;
CREATE TABLE `tipo_publicacion` (
  `tipo_publicacion_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `publicar` char(1) DEFAULT 'N',
  `estado` tinyint(255) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`tipo_publicacion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tipo_publicacion
-- ----------------------------
INSERT INTO `tipo_publicacion` VALUES ('1', 'Revista Institucional', 'S', '1');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `estado` smallint(5) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'Armando', 'Pisfil Puemape', 'armandoaepp@gmail.com', '7b64d09060db17ca6b96c0af99575903', '1', '2018-07-05 16:07:03');
INSERT INTO `user` VALUES ('2', 'Armando E', 'Guzman Campos', 'demo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1', '2019-06-05 12:06:04');
