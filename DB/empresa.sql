/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : escuelac_w_ne16

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-03-07 12:01:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for empresa
-- ----------------------------
DROP TABLE IF EXISTS `empresa`;
CREATE TABLE `empresa` (
  `empresa_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_empresa_id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `descripcion` text,
  `imagen` varchar(255) NOT NULL DEFAULT '',
  `publicar` char(1) DEFAULT 'S',
  `estado` tinyint(4) NOT NULL DEFAULT '1',
  `created_up` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`empresa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of empresa
-- ----------------------------
INSERT INTO `empresa` VALUES ('1', '1', 'EL SABOR DE LA PEDRO', '', '', 'S', '1', '2019-03-06 12:27:07');
INSERT INTO `empresa` VALUES ('2', '1', 'Nueva Empresa', 'empresa de prueba', 'images/empresa/201903061203155390.jpg', 'S', '1', '2019-03-06 12:03:15');

-- ----------------------------
-- Table structure for oportunidad_laboral
-- ----------------------------
DROP TABLE IF EXISTS `oportunidad_laboral`;
CREATE TABLE `oportunidad_laboral` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(10) unsigned NOT NULL,
  `titulo` varchar(125) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `tipo` varchar(125) COLLATE utf8mb4_bin DEFAULT NULL,
  `vacantes` varchar(125) COLLATE utf8mb4_bin DEFAULT NULL,
  `requisitos` text COLLATE utf8mb4_bin NOT NULL,
  `conocimientos` text COLLATE utf8mb4_bin NOT NULL,
  `salario` varchar(125) COLLATE utf8mb4_bin DEFAULT NULL,
  `nombrecontacto` varchar(125) COLLATE utf8mb4_bin DEFAULT NULL,
  `telefonocontacto` varchar(125) COLLATE utf8mb4_bin DEFAULT NULL,
  `emailcontacto` varchar(125) COLLATE utf8mb4_bin DEFAULT NULL,
  `item` int(11) NOT NULL,
  `publicar` char(1) COLLATE utf8mb4_bin NOT NULL DEFAULT 'S',
  `estado` int(1) NOT NULL DEFAULT '1',
  `created_up` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of oportunidad_laboral
-- ----------------------------
INSERT INTO `oportunidad_laboral` VALUES ('1', '1', 'Restaurantes', 'Prácticas', '02', 0x266C743B756C2667743B266C743B6C692667743B266C743B7374726F6E672667743B4170746974756465733A266C743B2F7374726F6E672667743B20436F6D70726F6D657469646F2C20686F6E6573746F2C2070726F61637469766F206520496E6E6F7661646F722E266C743B2F6C692667743B266C743B6C692667743B5469656D706F20636F6D706C65746F266C743B2F6C692667743B266C743B6C692667743B266C743B7374726F6E672667743B44697265636369C3B36E3A20266C743B2F7374726F6E672667743B4A75616E205858494949204EC2B020333730202D204C616D626179657175652028206672656E74652061206C6120554E50524729266C743B2F6C692667743B266C743B2F756C2667743B, 0x266C743B756C2667743B266C743B6C692667743B506C61746F73206372696F6C6C6F732C20706C61746F73206465207065736361646F2079206D61726973636F732028707265666572656E746529266C743B2F6C692667743B266C743B6C692667743B507265706172616369C3B36E206465206A75676F732066727574616C6573266C743B2F6C692667743B266C743B6C692667743B436F74697A616369C3B36E20646520706C61746F732028636F73746F2064652070726F6475636369C3B36E29266C743B2F6C692667743B266C743B2F756C2667743B, '--', 'Yurggen Salvador Bendezú Jáuregui', '939632397', 'yurggenbj@gmail.com', '3', 'S', '1', '2019-03-07 11:18:55');

-- ----------------------------
-- Table structure for tipo_empresa
-- ----------------------------
DROP TABLE IF EXISTS `tipo_empresa`;
CREATE TABLE `tipo_empresa` (
  `tipo_empresa_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `glosa` varchar(255) NOT NULL DEFAULT '',
  `estado` tinyint(4) unsigned DEFAULT '1',
  `created_up` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tipo_empresa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipo_empresa
-- ----------------------------
INSERT INTO `tipo_empresa` VALUES ('1', 'Restaurant', '', '1', '2019-03-06 12:03:40');
INSERT INTO `tipo_empresa` VALUES ('2', 'Bar', '', '1', '2019-03-06 12:03:37');
INSERT INTO `tipo_empresa` VALUES ('3', 'Hotel', '', '1', '2019-03-06 12:07:06');
