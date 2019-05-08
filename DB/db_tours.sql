/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_tours

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-05-08 11:13:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for actividad
-- ----------------------------
DROP TABLE IF EXISTS `actividad`;
CREATE TABLE `actividad` (
  `actividad_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `horas` int(11) NOT NULL DEFAULT '0',
  `estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`actividad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of actividad
-- ----------------------------
INSERT INTO `actividad` VALUES ('1', 'Actividades acuáticas', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;El concepto de actividades acuáticas ha sido acuñado recientemente en nuestra sociedad, pues a lo largo de historia el agua ha sido entendida bajo distintas concepciones, de las cuales la más conocida ha sido el término de natación. Pero, ¿Es natación todo lo que realizamos en piscina?&lt;/p&gt;', '4', '1');
INSERT INTO `actividad` VALUES ('2', 'Actividades aéreas', '&lt;p&gt;Los deportes aeronáuticos exigen capacidad física, habilidad, destreza, competitividad, afán de superación , respeto por las normas . Los deportes aéreos contribuyen a la educación del cuerpo y la mente en un ambiente técnico y en un medio singularmente bello como es el aire.&lt;/p&gt;', '4', '1');

-- ----------------------------
-- Table structure for adicional
-- ----------------------------
DROP TABLE IF EXISTS `adicional`;
CREATE TABLE `adicional` (
  `adicional_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  PRIMARY KEY (`adicional_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of adicional
-- ----------------------------
INSERT INTO `adicional` VALUES ('1', 'Recorrido en motaxi por la ciudad', '5.00', '1');
INSERT INTO `adicional` VALUES ('2', 'Paseo en Caballo', '6.00', '1');

-- ----------------------------
-- Table structure for itinerario
-- ----------------------------
DROP TABLE IF EXISTS `itinerario`;
CREATE TABLE `itinerario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paquete_id` int(10) unsigned NOT NULL,
  `dia` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text,
  `estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_itinerario_paquete1_idx` (`paquete_id`),
  CONSTRAINT `fk_itinerario_paquete1` FOREIGN KEY (`paquete_id`) REFERENCES `paquete` (`paquete_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of itinerario
-- ----------------------------

-- ----------------------------
-- Table structure for pais
-- ----------------------------
DROP TABLE IF EXISTS `pais`;
CREATE TABLE `pais` (
  `pais_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`pais_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of pais
-- ----------------------------
INSERT INTO `pais` VALUES ('1', 'Perú', '1');

-- ----------------------------
-- Table structure for paquete
-- ----------------------------
DROP TABLE IF EXISTS `paquete`;
CREATE TABLE `paquete` (
  `paquete_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ubigeo_id` int(10) unsigned NOT NULL,
  `nombre` varchar(55) NOT NULL DEFAULT '',
  `descripcion` text,
  `recomendacion` text,
  `num_dias` int(11) NOT NULL DEFAULT '0',
  `num_noches` int(11) NOT NULL,
  `precio` decimal(12,2) DEFAULT NULL,
  `descuento` decimal(12,2) DEFAULT NULL,
  `precio_descuento` decimal(12,2) DEFAULT NULL,
  `fecha_ini_promo` date DEFAULT NULL,
  `fecha_fin_promo` date DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `num_visitas` int(11) DEFAULT NULL,
  `publicar` char(1) NOT NULL DEFAULT 'S',
  `estado` char(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`paquete_id`),
  KEY `fk_paquete_ubigeo1_idx` (`ubigeo_id`),
  CONSTRAINT `fk_paquete_ubigeo1` FOREIGN KEY (`ubigeo_id`) REFERENCES `ubigeo` (`ubigeo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete
-- ----------------------------

-- ----------------------------
-- Table structure for paquete_actividad
-- ----------------------------
DROP TABLE IF EXISTS `paquete_actividad`;
CREATE TABLE `paquete_actividad` (
  `paquete_actividad_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paquete_id` int(10) unsigned NOT NULL,
  `actividad_id` int(10) unsigned NOT NULL,
  `horas` int(11) NOT NULL COMMENT 'horas por defecto o horas personalizadas',
  `descripcion` varchar(255) NOT NULL DEFAULT '',
  `estado` char(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`paquete_actividad_id`),
  KEY `fk_paquete_actividad_paquete1_idx` (`paquete_id`),
  KEY `fk_paquete_actividad_actividad1_idx` (`actividad_id`),
  CONSTRAINT `fk_paquete_actividad_actividad1` FOREIGN KEY (`actividad_id`) REFERENCES `actividad` (`actividad_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_paquete_actividad_paquete1` FOREIGN KEY (`paquete_id`) REFERENCES `paquete` (`paquete_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete_actividad
-- ----------------------------

-- ----------------------------
-- Table structure for paquete_adicional
-- ----------------------------
DROP TABLE IF EXISTS `paquete_adicional`;
CREATE TABLE `paquete_adicional` (
  `paquete_adicional_id` int(11) NOT NULL,
  `paquete_id` int(10) unsigned NOT NULL,
  `adicional_id` int(10) unsigned NOT NULL,
  `estado` char(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`paquete_adicional_id`),
  KEY `fk_paquete_adicional_paquete1_idx` (`paquete_id`),
  KEY `fk_paquete_adicional_adicional1_idx` (`adicional_id`),
  CONSTRAINT `fk_paquete_adicional_adicional1` FOREIGN KEY (`adicional_id`) REFERENCES `adicional` (`adicional_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_paquete_adicional_paquete1` FOREIGN KEY (`paquete_id`) REFERENCES `paquete` (`paquete_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete_adicional
-- ----------------------------

-- ----------------------------
-- Table structure for paquete_img
-- ----------------------------
DROP TABLE IF EXISTS `paquete_img`;
CREATE TABLE `paquete_img` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paquete_id` int(10) unsigned NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `item` int(11) DEFAULT '0',
  `estado` char(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_paquete_img_paquete1_idx` (`paquete_id`),
  CONSTRAINT `fk_paquete_img_paquete1` FOREIGN KEY (`paquete_id`) REFERENCES `paquete` (`paquete_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete_img
-- ----------------------------

-- ----------------------------
-- Table structure for paquete_servicio
-- ----------------------------
DROP TABLE IF EXISTS `paquete_servicio`;
CREATE TABLE `paquete_servicio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paquete_id` int(10) unsigned NOT NULL,
  `servicio_id` int(10) unsigned NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT '0' COMMENT 'incluye:1\nno_incluye:2',
  `estado` char(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tour_paquete_servicio1_idx` (`servicio_id`),
  KEY `fk_tour_paquete_paquete1_idx` (`paquete_id`),
  CONSTRAINT `fk_tour_paquete_paquete1` FOREIGN KEY (`paquete_id`) REFERENCES `paquete` (`paquete_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tour_paquete_servicio1` FOREIGN KEY (`servicio_id`) REFERENCES `servicio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete_servicio
-- ----------------------------

-- ----------------------------
-- Table structure for region
-- ----------------------------
DROP TABLE IF EXISTS `region`;
CREATE TABLE `region` (
  `region_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `estado` char(1) DEFAULT '1',
  PRIMARY KEY (`region_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of region
-- ----------------------------
INSERT INTO `region` VALUES ('1', 'Costa', '1');
INSERT INTO `region` VALUES ('2', 'Sierra', '1');
INSERT INTO `region` VALUES ('3', 'Selva', '1');

-- ----------------------------
-- Table structure for servicio
-- ----------------------------
DROP TABLE IF EXISTS `servicio`;
CREATE TABLE `servicio` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `icono` varchar(255) NOT NULL DEFAULT '',
  `incluye` tinyint(4) NOT NULL DEFAULT '0',
  `estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of servicio
-- ----------------------------

-- ----------------------------
-- Table structure for suscritor
-- ----------------------------
DROP TABLE IF EXISTS `suscritor`;
CREATE TABLE `suscritor` (
  `suscritor_id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefono` varchar(25) DEFAULT NULL,
  `mensaje` text,
  `estado` char(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`suscritor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of suscritor
-- ----------------------------

-- ----------------------------
-- Table structure for ubigeo
-- ----------------------------
DROP TABLE IF EXISTS `ubigeo`;
CREATE TABLE `ubigeo` (
  `ubigeo_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) DEFAULT NULL,
  `nombre` varchar(150) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `ubigeo_id_padre` int(11) DEFAULT NULL,
  `pais_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `tipo` int(11) DEFAULT '1',
  `estado` char(1) NOT NULL DEFAULT '1' COMMENT '1:active, 0:inactivo y/o elimnado',
  PRIMARY KEY (`ubigeo_id`),
  KEY `fk_ubigeo_pais1_idx` (`pais_id`),
  KEY `fk_ubigeo_region1_idx` (`region_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of ubigeo
-- ----------------------------
INSERT INTO `ubigeo` VALUES ('19', '140101', 'Lambayeque', 'Lambayeque', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('20', '13', 'Trujillo', 'Trujillo', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('21', '1401', 'Chiclayo', 'Chiclayo, Lambayeque', '19', '1', '0', '2', '1');
INSERT INTO `ubigeo` VALUES ('22', '1401', 'Ferreñafe', 'Ferreñafe, Lambayeque', '19', '1', '0', '2', '1');
INSERT INTO `ubigeo` VALUES ('23', '1301', 'Trujillo', 'Trujillo, Trujillo', '20', '1', '0', '2', '1');
INSERT INTO `ubigeo` VALUES ('24', '1302', 'El Porvenir', 'El Porvenir, Trujillo', '20', '1', '0', '2', '1');
INSERT INTO `ubigeo` VALUES ('25', '140101', 'Chiclayo', 'Chiclayo, Ferreñafe, Lambayeque', '22', '1', '0', '3', '1');
INSERT INTO `ubigeo` VALUES ('26', '15', 'San Martin', 'San Martin', '0', '1', '3', '1', '1');

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
