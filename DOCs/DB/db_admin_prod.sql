/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_admin_prod

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-08-19 13:11:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT '',
  `imagen` varchar(255) COLLATE utf8mb4_bin DEFAULT '',
  `publicar` char(1) COLLATE utf8mb4_bin DEFAULT 'S',
  `estado` smallint(5) unsigned NOT NULL DEFAULT '1',
  `created_up` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES ('1', 'Nueva descripción del categoria', 'categora-123', '', 'S', '1', '2018-08-08 17:08:01');
INSERT INTO `categoria` VALUES ('2', 'Categoría 22', 'categoria-22', '', 'S', '1', '2018-08-08 17:08:09');
INSERT INTO `categoria` VALUES ('3', 'Categoría 3 23', 'categoria-3-23', '', 'N', '1', '2018-08-08 17:08:14');
INSERT INTO `categoria` VALUES ('4', 'fdgdfg', 'fdgdfg', '', 'S', '0', '2018-12-19 11:12:04');
INSERT INTO `categoria` VALUES ('5', 'neuvaa', 'neuvaa', 'images/categoria/201903111303488540.jpg', 'N', '1', '2019-03-11 13:03:48');
INSERT INTO `categoria` VALUES ('6', 'Nueva descripción del categoria', '', '', 'S', '1', null);
INSERT INTO `categoria` VALUES ('7', 'Nueva Cat desde composer ELOQUENT', '', '', 'S', '1', null);

-- ----------------------------
-- Table structure for marca
-- ----------------------------
DROP TABLE IF EXISTS `marca`;
CREATE TABLE `marca` (
  `idmarca` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `publicar` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'S',
  `estado` smallint(6) DEFAULT NULL,
  `created_up` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idmarca`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of marca
-- ----------------------------
INSERT INTO `marca` VALUES ('1', 'marca 1', 'N', '1', '2019-01-02 10:01:58');

-- ----------------------------
-- Table structure for noticia
-- ----------------------------
DROP TABLE IF EXISTS `noticia`;
CREATE TABLE `noticia` (
  `idnoticia` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `descripcion` text COLLATE utf8mb4_bin NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_bin DEFAULT '',
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `publicar` char(1) COLLATE utf8mb4_bin DEFAULT NULL,
  `estado` smallint(255) unsigned NOT NULL DEFAULT '1',
  `created_up` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idnoticia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of noticia
-- ----------------------------

-- ----------------------------
-- Table structure for producto
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `idproducto` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `idmarca` int(11) unsigned NOT NULL DEFAULT '0',
  `idsubcategoria` int(11) unsigned NOT NULL DEFAULT '0',
  `idcategoria` int(11) unsigned NOT NULL,
  `tipo` char(1) COLLATE utf8mb4_bin NOT NULL DEFAULT 'M' COMMENT 'Material/Accesorio',
  `descripcion` blob NOT NULL,
  `precio` float unsigned DEFAULT NULL,
  `imagen` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '',
  `publicar` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'S',
  `estado` smallint(5) unsigned NOT NULL DEFAULT '1',
  `created_up` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `fk_producto_marca1` (`idmarca`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of producto
-- ----------------------------
INSERT INTO `producto` VALUES ('1', 'Inmueble 1', '', '0', '0', '1', 'M', 0x787878, null, '', 'S', '0', '2016-12-06 14:54:25');
INSERT INTO `producto` VALUES ('2', 'Inmueble 2', '', '0', '0', '2', 'M', 0x6465736372697063696F6E, null, '', 'S', '0', '2016-12-06 20:47:00');
INSERT INTO `producto` VALUES ('3', 'SERVICIO EDUCATIVO EN LA IES MIXTO NIEVA', '', '0', '0', '1', 'M', 0xE2809C4D454A4F52414D49454E544F2044454C20534552564943494F2045445543415449564F20454E204C4120494553204D4958544F204E494556410D0A444953545249544F204445204E4945564120E2809320434F4E444F5243414E515549202D20414D415A4F4E4153E2809D, null, '', 'S', '0', '2017-03-07 22:03:47');
INSERT INTO `producto` VALUES ('4', 'NIEVA', '', '0', '0', '1', 'M', 0x20534552564943494F2045445543415449564F20454E204C4120494553204D4958544F204E49455641, null, '', 'S', '1', '2017-03-07 22:12:30');
INSERT INTO `producto` VALUES ('5', 'CENEPA', '', '0', '0', '1', 'M', 0x43432E4E4E2053414E20414E544F4E494F20444953545249544F20444520454C2043454E455041, null, '', 'S', '1', '2017-03-07 22:26:39');
INSERT INTO `producto` VALUES ('6', 'RIO SANTIAGO', '', '0', '0', '1', 'M', 0x434F4D554E494441204E41544956412043484150495A412052494F2053414E544941474F, null, '', 'S', '0', '2017-03-07 22:45:12');
INSERT INTO `producto` VALUES ('7', ' RIO SANTIAGO', '', '0', '0', '1', 'M', 0x434F4D554E494441204E41544956412043484150495A412052494F2053414E544941474F, null, '', 'S', '1', '2017-03-07 22:48:43');
INSERT INTO `producto` VALUES ('8', 'CETP NIEVA', '', '0', '0', '1', 'M', 0x43454E54524F2045445543415449564F2054C389434E49434F0D0A50524F4455435449564F204E49455641, null, '', 'S', '1', '2017-03-07 23:07:58');
INSERT INTO `producto` VALUES ('9', 'BAGUA', '', '0', '0', '1', 'M', 0x50414C4143494F204D554E49434950414C204445204C4120434955444144204445204241475541, null, '', 'S', '1', '2017-03-07 23:13:31');
INSERT INTO `producto` VALUES ('10', 'CHACHAPOYAS', '', '0', '0', '1', 'M', 0x484F53504954414C2056495247454E20444520464154494D4120444520434841434841504F594153, null, '', 'S', '1', '2017-03-07 23:19:17');
INSERT INTO `producto` VALUES ('11', 'CC.NN. JAIME ESCUELA NIEVA', '', '0', '0', '1', 'M', 0x43432E4E4E2E204A415041494D452045534355454C410D0A4E49455641, null, '', 'S', '0', '2017-03-07 23:32:25');
INSERT INTO `producto` VALUES ('12', 'CC.NN. JAIME ESCUELA NIEVA', '', '0', '0', '1', 'M', 0x43432E4E4E2E204A415041494D452045534355454C410D0A4E49455641, null, '', 'S', '1', '2017-03-07 23:33:56');
INSERT INTO `producto` VALUES ('13', 'CASERIO NUEVO ILUCAN', '', '0', '0', '1', 'M', 0x4341534552494F204E5545564F20494C5543414E, null, '', 'S', '1', '2017-06-17 22:08:32');
INSERT INTO `producto` VALUES ('14', 'SANTA MARÍA DE NIEVA', '', '0', '0', '1', '', 0x3C703E53414E5441204D4152264961637574653B41204445204E494556413C2F703E0D0A, '0', '', 'S', '1', '2017-06-17 22:11:08');
INSERT INTO `producto` VALUES ('15', 'HOSPITAL II - 1 SANTA MARÃA DE NIEVA - Parte1', '', '0', '0', '1', 'M', 0x484F53504954414C204949202D20312053414E5441204D4152C38D41204445204E49455641, null, '', 'S', '0', '2017-06-17 22:53:30');
INSERT INTO `producto` VALUES ('16', 'HOSPITAL II - 1 SANTA MARÃA DE NIEVA - Parte2', '', '0', '0', '1', 'M', 0x484F53504954414C204949202D20312053414E5441204D4152C38D41204445204E49455641, null, '', 'S', '0', '2017-06-17 22:56:02');
INSERT INTO `producto` VALUES ('17', 'HOSPITAL II - 1 SANTA MARÃA DE NIEVA - Parte2', '', '0', '0', '1', 'M', 0x484F53504954414C204949202D20312053414E5441204D4152C38D41204445204E49455641, null, '', 'S', '0', '2017-06-17 23:02:32');
INSERT INTO `producto` VALUES ('18', 'SECTOR LA MOLANA Y CUMBA', '', '0', '0', '1', 'M', 0x534552564943494F20444520414C43414E544152494C4C41444F0D0A44454C20534543544F52204C41204D4F4C414E4120592043554D4241, null, '', 'S', '1', '2017-06-17 23:14:09');
INSERT INTO `producto` VALUES ('19', 'SANTA MARÃA DE NIEVA', '', '0', '0', '1', 'M', 0x414D504C49414349C3934E204445204C4120494E465241455354525543545552412059204551554950414D49454E544F2044454C20484F53504954414C2049490D0A312053414E5441204D4152C38D41204445204E49455641, null, '', 'S', '0', '2017-06-17 23:25:00');
INSERT INTO `producto` VALUES ('20', 'SANTA MARÃA DE NIEVA PARTE2', '', '0', '0', '1', 'M', 0x414D504C49414349C3934E204445204C4120494E465241455354525543545552412059204551554950414D49454E544F2044454C20484F53504954414C2049490D0A312053414E5441204D4152C38D41204445204E49455641, null, '', 'S', '0', '2017-06-17 23:27:15');
INSERT INTO `producto` VALUES ('21', 'SANTA MARÍA DE NIEVA PARTE1', '', '0', '0', '2', '', 0x3C703E414D504C49414349264F61637574653B4E204445204C4120494E465241455354525543545552412059204551554950414D49454E544F2044454C20484F53504954414C20494920312053414E5441204D4152264961637574653B41204445204E494556413C2F703E0D0A, '0', '', 'S', '1', '2017-06-17 23:33:31');
INSERT INTO `producto` VALUES ('22', 'SANTA MARÍA DE NIEVA PARTE2', '', '0', '0', '2', '', 0x3C703E414D504C49414349264F61637574653B4E204445204C4120494E465241455354525543545552412059204551554950414D49454E544F2044454C20484F53504954414C20494920312053414E5441204D4152264961637574653B41204445204E494556413C2F703E0D0A, '0', '', 'S', '1', '2017-06-17 23:36:51');
INSERT INTO `producto` VALUES ('23', 'Tubo Metálica Día & Noche', '', '0', '0', '1', '', 0x3C703E61736466617364663C2F703E0D0A, '0', '', 'S', '1', '2018-09-14 10:09:10');

-- ----------------------------
-- Table structure for producto_img
-- ----------------------------
DROP TABLE IF EXISTS `producto_img`;
CREATE TABLE `producto_img` (
  `id_producto_detalle` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) unsigned NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `imagen` varchar(255) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `item` smallint(5) unsigned NOT NULL DEFAULT '0',
  `estado` smallint(5) unsigned NOT NULL DEFAULT '1',
  `created_up` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_producto_detalle`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of producto_img
-- ----------------------------
INSERT INTO `producto_img` VALUES ('1', '4', '', 'img_admin/productos/070317-22123004.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('2', '4', '', 'img_admin/productos/070317-22123014.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('3', '4', '', 'img_admin/productos/070317-22123024.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('4', '4', '', 'img_admin/productos/070317-22123034.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('5', '4', '', 'img_admin/productos/070317-22123044.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('6', '4', '', 'img_admin/productos/070317-22123054.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('7', '4', '', 'img_admin/productos/070317-22123064.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('8', '4', '', 'img_admin/productos/070317-22123174.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('9', '5', '', 'img_admin/productos/070317-22263905.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('10', '5', '', 'img_admin/productos/070317-22263915.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('11', '5', '', 'img_admin/productos/070317-22263925.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('12', '5', '', 'img_admin/productos/070317-22263935.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('13', '5', '', 'img_admin/productos/070317-22263945.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('14', '5', '', 'img_admin/productos/070317-22263955.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('15', '5', '', 'img_admin/productos/070317-22263965.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('16', '5', '', 'img_admin/productos/070317-22263975.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('17', '7', '', 'img_admin/productos/070317-22484307.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('18', '7', '', 'img_admin/productos/070317-22484317.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('19', '7', '', 'img_admin/productos/070317-22484327.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('20', '7', '', 'img_admin/productos/070317-22484337.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('21', '8', '', 'img_admin/productos/070317-23075808.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('22', '8', '', 'img_admin/productos/070317-23075818.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('23', '8', '', 'img_admin/productos/070317-23075828.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('24', '8', '', 'img_admin/productos/070317-23075838.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('25', '9', '', 'img_admin/productos/070317-23133109.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('26', '9', '', 'img_admin/productos/070317-23133119.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('27', '9', '', 'img_admin/productos/070317-23133129.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('28', '9', '', 'img_admin/productos/070317-23133139.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('29', '10', '', 'img_admin/productos/070317-231917010.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('30', '10', '', 'img_admin/productos/070317-231917110.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('31', '12', '', 'img_admin/productos/070317-233356012.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('32', '12', '', 'img_admin/productos/070317-233356112.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('33', '12', '', 'img_admin/productos/070317-233356212.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('34', '12', '', 'img_admin/productos/070317-233356312.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('35', '12', '', 'img_admin/productos/070317-233356412.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('36', '12', '', 'img_admin/productos/070317-233356512.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('37', '12', '', 'img_admin/productos/070317-233356612.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('38', '12', '', 'img_admin/productos/070317-233356712.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('39', '12', '', 'img_admin/productos/070317-233356812.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('40', '12', '', 'img_admin/productos/070317-233356912.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('41', '13', '', 'img_admin/productos/170617-230832013.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('42', '13', '', 'img_admin/productos/170617-230832113.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('43', '13', '', 'img_admin/productos/170617-230832213.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('44', '13', '', 'img_admin/productos/170617-230832313.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('45', '13', '', 'img_admin/productos/170617-230832413.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('46', '13', '', 'img_admin/productos/170617-230832513.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('47', '13', '', 'img_admin/productos/170617-230832613.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('48', '13', '', 'img_admin/productos/170617-230832713.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('49', '14', '', 'img_admin/productos/170617-231108014.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('50', '14', '', 'img_admin/productos/170617-231108114.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('51', '14', '', 'img_admin/productos/170617-231108214.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('52', '14', '', 'img_admin/productos/170617-231108314.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('53', '18', '', 'img_admin/productos/180617-001409018.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('54', '18', '', 'img_admin/productos/180617-001409118.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('55', '18', '', 'img_admin/productos/180617-001409218.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('56', '18', '', 'img_admin/productos/180617-001409318.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('57', '18', '', 'img_admin/productos/180617-001409418.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('58', '18', '', 'img_admin/productos/180617-001409518.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('59', '18', '', 'img_admin/productos/180617-001409618.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('60', '18', '', 'img_admin/productos/180617-001409718.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('61', '21', '', 'img_admin/productos/180617-003331021.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('62', '21', '', 'img_admin/productos/180617-003331121.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('63', '21', '', 'img_admin/productos/180617-003331221.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('64', '21', '', 'img_admin/productos/180617-003331321.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('65', '21', '', 'img_admin/productos/180617-003331421.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('66', '21', '', 'img_admin/productos/180617-003331521.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('67', '21', '', 'img_admin/productos/180617-003331621.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('68', '21', '', 'img_admin/productos/180617-003333721.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('69', '21', '', 'img_admin/productos/180617-003333821.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('70', '21', '', 'img_admin/productos/180617-003333921.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('71', '22', '', 'img_admin/productos/180617-003651022.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('72', '22', '', 'img_admin/productos/180617-003651122.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('73', '22', '', 'img_admin/productos/180617-003651222.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('74', '22', '', 'img_admin/productos/180617-003651322.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('75', '22', '', 'img_admin/productos/180617-003651422.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('76', '22', '', 'img_admin/productos/180617-003651522.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('77', '22', '', 'img_admin/productos/180617-003651622.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('78', '22', '', 'img_admin/productos/180617-003651722.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('79', '22', '', 'img_admin/productos/180617-003651822.jpg', '0', '1', '2018-08-08 15:57:31');
INSERT INTO `producto_img` VALUES ('80', '23', '', 'img_admin/productos/20180914100910781954578.PNG', '1', '1', '2018-09-14 10:09:10');
INSERT INTO `producto_img` VALUES ('81', '23', '', 'img_admin/productos/2018091410091079649889.PNG', '2', '1', '2018-09-14 10:09:10');

-- ----------------------------
-- Table structure for suscrito
-- ----------------------------
DROP TABLE IF EXISTS `suscrito`;
CREATE TABLE `suscrito` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL,
  `telefono` varchar(50) NOT NULL DEFAULT '',
  `asunto` varchar(255) DEFAULT NULL,
  `mensaje` text,
  `empresa` varchar(255) DEFAULT '',
  `estado` int(1) NOT NULL DEFAULT '1',
  `created_up` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of suscrito
-- ----------------------------
INSERT INTO `suscrito` VALUES ('4', 'Armando E', 'armandoaepp@gmail.com', '', null, 'mensaja de prueba', '', '1', '2019-03-22 12:03:38');
INSERT INTO `suscrito` VALUES ('5', 'Categoría 123456', 'armandoaepp@gmail.com', '', null, 'sdfasdfasdsdf', '', '1', '2019-03-22 12:03:33');
INSERT INTO `suscrito` VALUES ('6', 'Armando Pisfil Puemape', 'armandoaepp@gmail.com', '', null, 'sadfgsdfg', '', '1', '2019-03-22 12:03:44');
INSERT INTO `suscrito` VALUES ('7', 'Armando Pisfil Puemape', 'armandoaepp@gmail.com', '', null, 'sfdsadfgsdfgsdfg', '', '1', '2019-03-22 12:03:17');
INSERT INTO `suscrito` VALUES ('8', 'Armando Pisfil Puemape', 'armandoaepp@gmail.com', '', null, 'asdfasdfasdf', '', '1', '2019-03-22 12:03:21');
INSERT INTO `suscrito` VALUES ('9', 'Armando Pisfil Puemape', 'armandoaepp@gmail.com', '', null, 'dsfsdf asdfasdf', '', '1', '2019-03-22 12:03:41');
INSERT INTO `suscrito` VALUES ('10', 'Armando Pisfil Puemape', 'armandoaepp@gmail.com', '', null, 'dfsdfsdfsdaf', '', '1', '2019-03-22 12:03:44');
INSERT INTO `suscrito` VALUES ('11', 'Armando Pisfil Puemape', 'armandoaepp@gmail.com', '', null, 'sdfasdfsd', '', '1', '2019-03-22 12:03:35');
INSERT INTO `suscrito` VALUES ('12', 'Armando Pisfil Puemape', 'armandoaepp@gmail.com', '', null, 'sdfasdfasdf', '', '1', '2019-03-22 12:03:16');
INSERT INTO `suscrito` VALUES ('13', 'Armando Pisfil Puemape', 'armandoaepp@gmail.com', '', null, 'asdfasdfasdf', '', '1', '2019-03-22 12:03:08');
INSERT INTO `suscrito` VALUES ('14', 'Armando Pisfil Puemape', 'armandoaepp@gmail.com', '', null, 'sdfasdfsadf', '', '1', '2019-03-22 12:03:01');
INSERT INTO `suscrito` VALUES ('15', 'Armando Pisfil Puemape', 'armandoaepp@gmail.com', '958478073', 'informaicon', 'mensaje de prueba', '', '1', '2019-04-11 10:04:53');
INSERT INTO `suscrito` VALUES ('16', 'Armando Pisfil Puemape', 'armandoaepp@gmail.com', '958478073', 'informaicon', 'mensaje de prueba', '', '1', '2019-04-11 10:04:53');
INSERT INTO `suscrito` VALUES ('17', 'Armando Pisfil Puemape', 'armandoaepp@gmail.com', '958478073', 'Asesoria', 'mensaje de prueba', '', '1', '2019-04-11 10:04:53');
INSERT INTO `suscrito` VALUES ('18', '', 'armandoaepp@gmail.com', '958478073', null, 'sdfasd asdfasd asdfasd', '', '1', '2019-06-27 11:06:23');
INSERT INTO `suscrito` VALUES ('19', 'Armando E', 'armandoaepp@gmail.com', '958478073', null, 'asfda asdfasd', '', '1', '2019-07-17 10:07:17');
INSERT INTO `suscrito` VALUES ('20', 'Armando', 'armandoaepp@gmail.com', '958478073', null, 'asdfasdf', '', '1', '2019-07-17 10:07:02');
INSERT INTO `suscrito` VALUES ('21', 'Armando', 'armandoaepp@gmail.com', '958478073', null, 'asdfasdf', '', '1', '2019-07-17 10:07:02');

-- ----------------------------
-- Table structure for tipo_evento
-- ----------------------------
DROP TABLE IF EXISTS `tipo_evento`;
CREATE TABLE `tipo_evento` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8_bin NOT NULL,
  `glosa` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `estado` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
-- Records of tipo_evento
-- ----------------------------

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
  `created_up` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'Armando', 'Pisfil Puemape', 'armandoaepp@gmail.com', '7b64d09060db17ca6b96c0af99575903', '1', '2018-07-05 16:07:03');
