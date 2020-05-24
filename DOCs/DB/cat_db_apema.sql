/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cat_db_apema

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-09-06 10:25:32
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for asociado
-- ----------------------------
DROP TABLE IF EXISTS `asociado`;
CREATE TABLE `asociado` (
  `asociado_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) unsigned DEFAULT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `estado` smallint(5) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`asociado_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of asociado
-- ----------------------------
INSERT INTO `asociado` VALUES ('1', null, 'Armando', 'Pisfil Puemape', 'armandoaepp@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', null, '1', '2019-09-04 12:22:11');
INSERT INTO `asociado` VALUES ('2', null, 'Armando E', 'Pisfil Puemape', 'demo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', null, '1', '2019-09-03 10:13:29');
INSERT INTO `asociado` VALUES ('3', '0', 'Juan', 'Perez', 'jperez@gmail.com', 'armando123', '958478073', '1', '2019-09-04 11:09:43');
INSERT INTO `asociado` VALUES ('4', '4', 'Armando Pisfil Puemape', 'demo 2', 'armandoaepp@gmail.com', 'a88d56d75eb71f7e187e73aed94626f6', '958478073', '1', '2019-09-04 12:24:17');
INSERT INTO `asociado` VALUES ('5', '3', 'Armando Pisfil Puemape', 'Pisfil p', 'armandoaepp@gmail.com', '7b64d09060db17ca6b96c0af99575903', '958478073', '1', '2019-09-04 11:09:00');

-- ----------------------------
-- Table structure for empresa
-- ----------------------------
DROP TABLE IF EXISTS `empresa`;
CREATE TABLE `empresa` (
  `empresa_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ruc` varchar(255) DEFAULT '',
  `nombre` varchar(255) NOT NULL,
  `estado` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`empresa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of empresa
-- ----------------------------
INSERT INTO `empresa` VALUES ('1', '', 'prueba', '1');
INSERT INTO `empresa` VALUES ('2', '', 'asfasdfasd', '1');
INSERT INTO `empresa` VALUES ('3', '', 'empresa 2', '1');
INSERT INTO `empresa` VALUES ('4', '', 'Nuevo Molino', '1');

-- ----------------------------
-- Table structure for publicacion
-- ----------------------------
DROP TABLE IF EXISTS `publicacion`;
CREATE TABLE `publicacion` (
  `publicacion_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_publicacion_id` int(11) unsigned DEFAULT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL DEFAULT '',
  `url_file` varchar(255) NOT NULL DEFAULT '',
  `publicar` char(1) NOT NULL DEFAULT 'N',
  `estado` tinyint(3) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`publicacion_id`),
  KEY `fk_tipo_publicacion_id_to_publicacion_id` (`tipo_publicacion_id`),
  CONSTRAINT `fk_tipo_publicacion_id_to_publicacion_id` FOREIGN KEY (`tipo_publicacion_id`) REFERENCES `tipo_publicacion` (`tipo_publicacion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of publicacion
-- ----------------------------
INSERT INTO `publicacion` VALUES ('1', '1', 'Publi 1', '', 'images/publicaciones/201909051209461951.pdf', 'S', '1', '2019-09-05 12:03:46');
INSERT INTO `publicacion` VALUES ('2', '1', 'Capacitación equipo técnico QaliWarma', '', 'images/publicaciones/201909051209057398.jpg', 'S', '1', '2019-09-05 12:04:05');
INSERT INTO `publicacion` VALUES ('3', '1', 'masmmdmasmdmas', '', 'images/publicaciones/201909051209179696.pdf', 'S', '1', '2019-09-05 12:04:21');
INSERT INTO `publicacion` VALUES ('4', '1', 'Producción Nacional 3', '', 'images/publicaciones/201909051209257813.pdf', 'S', '1', '2019-09-05 12:09:26');
INSERT INTO `publicacion` VALUES ('5', '2', 'Precio Nacional 1', '', 'images/publicaciones/201909060909435604.pdf', 'S', '1', '2019-09-06 09:09:43');
INSERT INTO `publicacion` VALUES ('6', '3', 'Mercado internacional prueba', '', 'images/publicaciones/201909060909291559.pdf', 'S', '1', '2019-09-06 09:09:29');
INSERT INTO `publicacion` VALUES ('7', '4', 'Estudio economico 2019 prueba', '', 'images/publicaciones/201909060909167764.pdf', 'S', '1', '2019-09-06 09:09:16');

-- ----------------------------
-- Table structure for suscriptor
-- ----------------------------
DROP TABLE IF EXISTS `suscriptor`;
CREATE TABLE `suscriptor` (
  `suscriptor_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT NULL,
  `telefono` varchar(25) NOT NULL DEFAULT '',
  `empresa` varchar(100) DEFAULT '',
  `mensaje` text,
  `estado` char(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`suscriptor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of suscriptor
-- ----------------------------
INSERT INTO `suscriptor` VALUES ('1', 'Armando E', 'armandoaepp@gmail.com', '958478073', 'Catmedia', 'M Mensaje de pruenaensaje de pruena Mensaje de pruena Mensaje de pruena', '0', '2019-06-04 11:06:14');
INSERT INTO `suscriptor` VALUES ('2', 'Armando Pisfil Puemape', 'apisfilp@gmail.com', '958478073', 'Catmedia', 'dswafasd asdfasd', '0', '2019-06-04 11:06:11');
INSERT INTO `suscriptor` VALUES ('3', 'Armando Pisfil Puemape', 'armandoaepp@gmail.com', '', '', 'dsfasdf', '1', '2019-06-04 11:06:28');
INSERT INTO `suscriptor` VALUES ('4', 'Armando E', 'armandoaepp@gmail.com', '958478073', '', 'adsfasd asdfadsf adsfasdf', '1', '2019-09-06 10:09:19');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tipo_publicacion
-- ----------------------------
INSERT INTO `tipo_publicacion` VALUES ('1', 'Producción Nacional', 'S', '1');
INSERT INTO `tipo_publicacion` VALUES ('2', 'Precios Nacionales', 'S', '1');
INSERT INTO `tipo_publicacion` VALUES ('3', 'Mercado Internacional', 'S', '1');
INSERT INTO `tipo_publicacion` VALUES ('4', 'Estudios Económicos', 'S', '1');

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
INSERT INTO `user` VALUES ('2', 'Armando E', 'Pisfil Puemape', 'demo@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1', '2019-09-04 12:08:58');
