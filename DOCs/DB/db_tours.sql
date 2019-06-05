/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_tours

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-06-05 10:36:59
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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of actividad
-- ----------------------------
INSERT INTO `actividad` VALUES ('1', 'Actividades acuáticas', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;El concepto de actividades acuáticas ha sido acuñado recientemente en nuestra sociedad, pues a lo largo de historia el agua ha sido entendida bajo distintas concepciones, de las cuales la más conocida ha sido el término de natación. Pero, ¿Es natación todo lo que realizamos en piscina?&lt;/p&gt;', '6', '1');
INSERT INTO `actividad` VALUES ('2', 'Actividades aéreas', '&lt;p&gt;Los deportes aeronáuticos exigen capacidad física, habilidad, destreza, competitividad, afán de superación , respeto por las normas . Los deportes aéreos contribuyen a la educación del cuerpo y la mente en un ambiente técnico y en un medio singularmente bello como es el aire.&lt;/p&gt;', '5', '1');
INSERT INTO `actividad` VALUES ('3', 'Actividades acuáticas', '', '6', '1');
INSERT INTO `actividad` VALUES ('4', 'Actividades aéreas', '', '5', '1');
INSERT INTO `actividad` VALUES ('5', 'Andinismo, alpinismo', '', '2', '1');
INSERT INTO `actividad` VALUES ('6', 'Barranquismo, canyoning', '', '6', '1');
INSERT INTO `actividad` VALUES ('7', 'Bicicleta', '', '6', '1');
INSERT INTO `actividad` VALUES ('8', 'Buceo', '', '3', '1');
INSERT INTO `actividad` VALUES ('9', 'Buggies, areneros, off road', '', '2', '1');
INSERT INTO `actividad` VALUES ('10', 'Bus turístico, panorámico', '', '1', '1');
INSERT INTO `actividad` VALUES ('11', 'Caminata, senderismo, trekking', '', '2', '1');
INSERT INTO `actividad` VALUES ('12', 'Canopy, zipline, tirolesa', '', '6', '1');
INSERT INTO `actividad` VALUES ('13', 'Canotaje', '', '1', '1');
INSERT INTO `actividad` VALUES ('14', 'Cata de Vinos o Licores', '', '1', '1');
INSERT INTO `actividad` VALUES ('15', 'Compra de artesanía', '', '6', '1');
INSERT INTO `actividad` VALUES ('16', 'Cuatrimoto, Quads, ATV', '', '2', '1');
INSERT INTO `actividad` VALUES ('17', 'Degustación otras bebidas', '', '6', '1');
INSERT INTO `actividad` VALUES ('18', 'Escalada', '', '4', '1');
INSERT INTO `actividad` VALUES ('19', 'Espeleología', '', '5', '1');
INSERT INTO `actividad` VALUES ('20', 'Gastronomía', '', '1', '1');
INSERT INTO `actividad` VALUES ('21', 'Kayak, piraguismo', '', '2', '1');
INSERT INTO `actividad` VALUES ('22', 'Kitesurf', '', '3', '1');
INSERT INTO `actividad` VALUES ('23', 'Misticismo, chamanismo', '', '3', '1');
INSERT INTO `actividad` VALUES ('24', 'Moto Acuatica', '', '5', '1');
INSERT INTO `actividad` VALUES ('25', 'Motocross', '', '5', '1');
INSERT INTO `actividad` VALUES ('26', 'Museos, monumentos', '', '6', '1');
INSERT INTO `actividad` VALUES ('27', 'Observación de aves', '', '6', '1');
INSERT INTO `actividad` VALUES ('28', 'Observación fauna y flora', '', '3', '1');
INSERT INTO `actividad` VALUES ('29', 'Off Road 4x4', '', '3', '1');
INSERT INTO `actividad` VALUES ('30', 'Paintball', '', '4', '1');
INSERT INTO `actividad` VALUES ('31', 'Parapente', '', '5', '1');
INSERT INTO `actividad` VALUES ('32', 'Paseo Áreas Naturales', '', '4', '1');
INSERT INTO `actividad` VALUES ('33', 'Paseos a caballo', '', '2', '1');
INSERT INTO `actividad` VALUES ('34', 'Paseos Aéreos', '', '2', '1');
INSERT INTO `actividad` VALUES ('35', 'Paseos en Embarcaciones', '', '1', '1');
INSERT INTO `actividad` VALUES ('36', 'Paseos en otros vehículos', '', '1', '1');
INSERT INTO `actividad` VALUES ('37', 'Pesca Deportiva', '', '6', '1');
INSERT INTO `actividad` VALUES ('38', 'Remo', '', '4', '1');
INSERT INTO `actividad` VALUES ('39', 'Sandboard', '', '5', '1');
INSERT INTO `actividad` VALUES ('40', 'Shows y espectaculos', '', '2', '1');
INSERT INTO `actividad` VALUES ('41', 'Surf', '', '1', '1');
INSERT INTO `actividad` VALUES ('42', 'Teleférico, funicular, telecabinas', '', '1', '1');
INSERT INTO `actividad` VALUES ('43', 'Termalismo', '', '6', '1');
INSERT INTO `actividad` VALUES ('44', 'Visitas arqueológicas', '', '3', '1');
INSERT INTO `actividad` VALUES ('45', 'Visitas culturales', '', '3', '1');
INSERT INTO `actividad` VALUES ('46', 'Visitas guiadas', '', '1', '1');
INSERT INTO `actividad` VALUES ('47', 'Visitas Históricas', '', '2', '1');
INSERT INTO `actividad` VALUES ('48', 'Windsurf', '', '5', '1');

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
-- Table structure for convenio
-- ----------------------------
DROP TABLE IF EXISTS `convenio`;
CREATE TABLE `convenio` (
  `convenio_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_convenio_id` int(10) unsigned NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `caracteristica` text NOT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `glosa` varchar(255) DEFAULT NULL,
  `publicar` char(1) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`convenio_id`),
  KEY `fk_convenio_tipo_convenio1_idx` (`tipo_convenio_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of convenio
-- ----------------------------
INSERT INTO `convenio` VALUES ('1', '1', 'Hotel turistico 5 estrellas', '&lt;p&gt;Nuevo hotel&lt;/p&gt;', '250.00', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'S', '1');
INSERT INTO `convenio` VALUES ('2', '2', 'Transporte tours', '&lt;p&gt;demos&lt;/p&gt;', '20.00', '&lt;p&gt;asdfasd&lt;/p&gt;', 'S', '1');

-- ----------------------------
-- Table structure for convenio_img
-- ----------------------------
DROP TABLE IF EXISTS `convenio_img`;
CREATE TABLE `convenio_img` (
  `convenio_img_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `convenio_id` int(10) unsigned NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `item` int(11) DEFAULT '0',
  `desc_img` varchar(255) DEFAULT NULL,
  `estado` char(1) DEFAULT '1',
  PRIMARY KEY (`convenio_img_id`),
  KEY `fk_convenio_img_convenio1_idx` (`convenio_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of convenio_img
-- ----------------------------
INSERT INTO `convenio_img` VALUES ('1', '1', 'images/convenios/1201906031006091170.jpg', '1', '', '1');
INSERT INTO `convenio_img` VALUES ('2', '2', 'images/convenios/2201906031106015151.jpg', '1', '', '1');

-- ----------------------------
-- Table structure for itinerario
-- ----------------------------
DROP TABLE IF EXISTS `itinerario`;
CREATE TABLE `itinerario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paquete_id` int(10) unsigned NOT NULL,
  `dia` int(11) DEFAULT '0',
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `descripcion` text,
  `estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_itinerario_paquete1_idx` (`paquete_id`),
  CONSTRAINT `fk_itinerario_paquete1` FOREIGN KEY (`paquete_id`) REFERENCES `paquete` (`paquete_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of itinerario
-- ----------------------------
INSERT INTO `itinerario` VALUES ('1', '1', '1', '', '', '1');
INSERT INTO `itinerario` VALUES ('2', '1', '2', '', '', '1');
INSERT INTO `itinerario` VALUES ('3', '1', '3', '', '', '1');
INSERT INTO `itinerario` VALUES ('4', '1', '4', '', '', '1');
INSERT INTO `itinerario` VALUES ('5', '2', '1', '', '', '1');
INSERT INTO `itinerario` VALUES ('6', '2', '2', '', '', '1');
INSERT INTO `itinerario` VALUES ('7', '2', '3', '', '', '1');
INSERT INTO `itinerario` VALUES ('8', '2', '4', '', '', '1');
INSERT INTO `itinerario` VALUES ('9', '3', '1', '', '', '1');
INSERT INTO `itinerario` VALUES ('10', '3', '2', '', '', '1');
INSERT INTO `itinerario` VALUES ('11', '3', '3', '', '', '1');
INSERT INTO `itinerario` VALUES ('12', '3', '4', '', '', '1');
INSERT INTO `itinerario` VALUES ('13', '4', '1', '', '', '1');
INSERT INTO `itinerario` VALUES ('14', '4', '2', '', '', '1');
INSERT INTO `itinerario` VALUES ('15', '4', '3', '', '', '1');
INSERT INTO `itinerario` VALUES ('16', '4', '4', '', '', '1');
INSERT INTO `itinerario` VALUES ('17', '4', '5', '', '', '1');
INSERT INTO `itinerario` VALUES ('18', '4', '6', '', '', '1');
INSERT INTO `itinerario` VALUES ('19', '4', '7', '', '', '1');
INSERT INTO `itinerario` VALUES ('20', '4', '8', '', '', '1');
INSERT INTO `itinerario` VALUES ('21', '4', '9', '', '', '1');
INSERT INTO `itinerario` VALUES ('22', '4', '10', '', '', '1');
INSERT INTO `itinerario` VALUES ('23', '5', '1', 'Cataratas', '&lt;p&gt;21323&lt;/p&gt;', '1');
INSERT INTO `itinerario` VALUES ('24', '5', '2', '', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete
-- ----------------------------
INSERT INTO `paquete` VALUES ('1', '225', 'Tours Playero', '&lt;p&gt;asdfasdf&lt;/p&gt;', '&lt;p&gt;sdfasdf&lt;/p&gt;', '4', '5', '200.00', '5.00', '190.00', '2019-05-31', '2019-06-05', 'tours-playero', '21', 'S', '1', '2019-05-30 12:05:04');
INSERT INTO `paquete` VALUES ('2', '224', 'turistico playero', '&lt;p&gt;nuevo tours&amp;nbsp;&lt;/p&gt;', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '4', '3', '100.00', '10.00', '90.00', '2019-06-07', '2019-06-15', 'turistico-playero', '13', 'S', '1', '2019-06-03 10:06:51');
INSERT INTO `paquete` VALUES ('3', '224', 'turistico playero', '&lt;p&gt;nuevo tours&amp;nbsp;&lt;/p&gt;', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '4', '3', '100.00', '10.00', '90.00', '2019-06-07', '2019-06-15', 'turistico-playero', '12', 'S', '1', '2019-06-03 10:06:35');
INSERT INTO `paquete` VALUES ('4', '222', 'Chachapollero demos xD', '&lt;p&gt;tours nuevosaaa&lt;/p&gt;', '&lt;p&gt;sadfasdf&lt;/p&gt;', '10', '9', '34.00', '0.00', '34.00', '2019-06-15', '2019-06-29', 'chachapollero-demos-xd', '6', 'S', '1', '2019-06-03 11:06:14');
INSERT INTO `paquete` VALUES ('5', '2019', 'Tours selvero', '&lt;p&gt;sdaksd&lt;/p&gt;', '&lt;p&gt;asd&lt;/p&gt;', '2', '3', '5.00', '0.00', '5.00', '2019-06-20', '2019-06-21', 'tours-selvero', '0', 'S', '1', '2019-06-04 12:06:15');

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete_actividad
-- ----------------------------
INSERT INTO `paquete_actividad` VALUES ('1', '1', '3', '6', '', '1', '2019-05-30 12:05:04');
INSERT INTO `paquete_actividad` VALUES ('2', '1', '10', '1', '', '1', '2019-05-30 12:05:04');
INSERT INTO `paquete_actividad` VALUES ('3', '2', '2', '2', '', '1', '2019-06-03 10:06:52');
INSERT INTO `paquete_actividad` VALUES ('4', '2', '8', '3', '', '1', '2019-06-03 10:06:52');
INSERT INTO `paquete_actividad` VALUES ('5', '2', '40', '2', '', '1', '2019-06-03 10:06:52');
INSERT INTO `paquete_actividad` VALUES ('6', '2', '43', '6', '', '1', '2019-06-03 10:06:52');
INSERT INTO `paquete_actividad` VALUES ('7', '3', '2', '2', '', '1', '2019-06-03 10:06:35');
INSERT INTO `paquete_actividad` VALUES ('8', '3', '8', '3', '', '1', '2019-06-03 10:06:35');
INSERT INTO `paquete_actividad` VALUES ('9', '3', '40', '2', '', '1', '2019-06-03 10:06:35');
INSERT INTO `paquete_actividad` VALUES ('10', '3', '43', '6', '', '1', '2019-06-03 10:06:36');
INSERT INTO `paquete_actividad` VALUES ('11', '4', '2', '5', '', '1', '2019-06-03 11:06:14');
INSERT INTO `paquete_actividad` VALUES ('12', '4', '6', '6', '', '1', '2019-06-03 11:06:14');
INSERT INTO `paquete_actividad` VALUES ('13', '5', '4', '5', '', '1', '2019-06-04 12:06:15');
INSERT INTO `paquete_actividad` VALUES ('14', '5', '10', '1', '', '1', '2019-06-04 12:06:15');
INSERT INTO `paquete_actividad` VALUES ('15', '5', '43', '6', '', '1', '2019-06-04 12:06:15');

-- ----------------------------
-- Table structure for paquete_adicional
-- ----------------------------
DROP TABLE IF EXISTS `paquete_adicional`;
CREATE TABLE `paquete_adicional` (
  `paquete_adicional_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `paquete_id` int(10) unsigned NOT NULL,
  `adicional_id` int(10) unsigned NOT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `estado` char(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`paquete_adicional_id`),
  KEY `fk_paquete_adicional_paquete1_idx` (`paquete_id`),
  KEY `fk_paquete_adicional_adicional1_idx` (`adicional_id`),
  CONSTRAINT `fk_paquete_adicional_adicional1` FOREIGN KEY (`adicional_id`) REFERENCES `adicional` (`adicional_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_paquete_adicional_paquete1` FOREIGN KEY (`paquete_id`) REFERENCES `paquete` (`paquete_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete_adicional
-- ----------------------------
INSERT INTO `paquete_adicional` VALUES ('1', '1', '2', '6.00', '1', '2019-05-30 12:05:05');
INSERT INTO `paquete_adicional` VALUES ('2', '2', '1', '6.00', '1', '2019-06-03 10:06:52');
INSERT INTO `paquete_adicional` VALUES ('3', '2', '2', '6.00', '1', '2019-06-03 10:06:52');
INSERT INTO `paquete_adicional` VALUES ('4', '3', '1', '6.00', '1', '2019-06-03 10:06:36');
INSERT INTO `paquete_adicional` VALUES ('5', '3', '2', '6.00', '1', '2019-06-03 10:06:36');
INSERT INTO `paquete_adicional` VALUES ('6', '4', '2', '6.00', '1', '2019-06-03 11:06:14');
INSERT INTO `paquete_adicional` VALUES ('7', '4', '2', '6.00', '1', '2019-06-03 12:06:57');
INSERT INTO `paquete_adicional` VALUES ('8', '4', '2', '6.00', '1', '2019-06-03 12:06:53');
INSERT INTO `paquete_adicional` VALUES ('9', '4', '2', '6.00', '1', '2019-06-03 12:06:53');
INSERT INTO `paquete_adicional` VALUES ('10', '4', '2', '6.00', '1', '2019-06-03 12:06:03');
INSERT INTO `paquete_adicional` VALUES ('11', '4', '2', '6.00', '1', '2019-06-03 12:06:03');
INSERT INTO `paquete_adicional` VALUES ('12', '4', '2', '6.00', '1', '2019-06-03 12:06:03');
INSERT INTO `paquete_adicional` VALUES ('13', '4', '2', '6.00', '1', '2019-06-03 12:06:03');
INSERT INTO `paquete_adicional` VALUES ('14', '5', '2', '6.00', '1', '2019-06-04 12:06:16');
INSERT INTO `paquete_adicional` VALUES ('15', '5', '1', '5.00', '1', '2019-06-04 12:06:16');

-- ----------------------------
-- Table structure for paquete_convenio
-- ----------------------------
DROP TABLE IF EXISTS `paquete_convenio`;
CREATE TABLE `paquete_convenio` (
  `paquete_convenio_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paquete_id` int(10) unsigned NOT NULL,
  `convenio_id` int(10) unsigned NOT NULL,
  `estado` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`paquete_convenio_id`),
  KEY `fk_paquete_convenio_paquete1_idx` (`paquete_id`),
  KEY `fk_paquete_convenio_convenio1_idx` (`convenio_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete_convenio
-- ----------------------------
INSERT INTO `paquete_convenio` VALUES ('1', '4', '1', '0');
INSERT INTO `paquete_convenio` VALUES ('2', '4', '2', '0');
INSERT INTO `paquete_convenio` VALUES ('3', '4', '1', '0');
INSERT INTO `paquete_convenio` VALUES ('4', '4', '2', '0');
INSERT INTO `paquete_convenio` VALUES ('5', '4', '1', '0');
INSERT INTO `paquete_convenio` VALUES ('6', '4', '1', '0');
INSERT INTO `paquete_convenio` VALUES ('7', '4', '1', '0');
INSERT INTO `paquete_convenio` VALUES ('8', '4', '1', '1');
INSERT INTO `paquete_convenio` VALUES ('9', '5', '1', '0');
INSERT INTO `paquete_convenio` VALUES ('10', '5', '2', '0');
INSERT INTO `paquete_convenio` VALUES ('11', '5', '1', '1');
INSERT INTO `paquete_convenio` VALUES ('12', '5', '2', '1');

-- ----------------------------
-- Table structure for paquete_img
-- ----------------------------
DROP TABLE IF EXISTS `paquete_img`;
CREATE TABLE `paquete_img` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paquete_id` int(10) unsigned NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `item` int(11) DEFAULT '0',
  `desc_img` varchar(255) DEFAULT NULL,
  `estado` char(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_paquete_img_paquete1_idx` (`paquete_id`),
  CONSTRAINT `fk_paquete_img_paquete1` FOREIGN KEY (`paquete_id`) REFERENCES `paquete` (`paquete_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete_img
-- ----------------------------
INSERT INTO `paquete_img` VALUES ('1', '1', 'images/paquetes/1201905301205058899.jpg', '4', null, '1');
INSERT INTO `paquete_img` VALUES ('2', '1', 'images/paquetes/1201905301205055734.jpg', '2', null, '1');
INSERT INTO `paquete_img` VALUES ('3', '1', 'images/paquetes/1201905301205056920.jpg', '3', null, '1');
INSERT INTO `paquete_img` VALUES ('4', '1', 'images/paquetes/1201905301205222083.jpg', '4', null, '1');
INSERT INTO `paquete_img` VALUES ('5', '3', 'images/paquetes/3201906031006367812.jpg', '2', '', '1');
INSERT INTO `paquete_img` VALUES ('6', '3', 'images/paquetes/3201906031006367620.jpg', '1', '', '1');
INSERT INTO `paquete_img` VALUES ('7', '3', 'images/paquetes/3201906031006362994.jpg', '4', '', '1');
INSERT INTO `paquete_img` VALUES ('8', '3', 'images/paquetes/3201906031006366090.jpg', '3', '', '1');
INSERT INTO `paquete_img` VALUES ('9', '3', 'images/paquetes/3201906031006086604.jpg', '5', '', '1');
INSERT INTO `paquete_img` VALUES ('10', '4', 'images/paquetes/4201906031106145235.jpg', '1', '', '1');
INSERT INTO `paquete_img` VALUES ('11', '4', 'images/paquetes/4201906031106149134.jpg', '2', '', '1');
INSERT INTO `paquete_img` VALUES ('12', '4', 'images/paquetes/4201906031106143885.jpg', '3', '', '1');
INSERT INTO `paquete_img` VALUES ('13', '5', 'images/paquetes/5201906041206167526.jpg', '1', '', '1');
INSERT INTO `paquete_img` VALUES ('14', '5', 'images/paquetes/5201906041206165361.png', '2', '', '1');
INSERT INTO `paquete_img` VALUES ('15', '5', 'images/paquetes/5201906041206168306.jpg', '3', '', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete_servicio
-- ----------------------------
INSERT INTO `paquete_servicio` VALUES ('1', '1', '1', '1', '1', '2019-05-30 12:05:04');
INSERT INTO `paquete_servicio` VALUES ('2', '1', '4', '1', '1', '2019-05-30 12:05:04');
INSERT INTO `paquete_servicio` VALUES ('3', '1', '6', '1', '1', '2019-05-30 12:05:04');
INSERT INTO `paquete_servicio` VALUES ('4', '1', '8', '1', '1', '2019-05-30 12:05:04');
INSERT INTO `paquete_servicio` VALUES ('5', '2', '1', '1', '1', '2019-06-03 10:06:52');
INSERT INTO `paquete_servicio` VALUES ('6', '2', '2', '1', '1', '2019-06-03 10:06:52');
INSERT INTO `paquete_servicio` VALUES ('7', '2', '4', '1', '1', '2019-06-03 10:06:52');
INSERT INTO `paquete_servicio` VALUES ('8', '2', '5', '1', '1', '2019-06-03 10:06:52');
INSERT INTO `paquete_servicio` VALUES ('9', '3', '1', '1', '1', '2019-06-03 10:06:36');
INSERT INTO `paquete_servicio` VALUES ('10', '3', '2', '1', '1', '2019-06-03 10:06:36');
INSERT INTO `paquete_servicio` VALUES ('11', '3', '4', '1', '1', '2019-06-03 10:06:36');
INSERT INTO `paquete_servicio` VALUES ('12', '3', '5', '1', '1', '2019-06-03 10:06:36');
INSERT INTO `paquete_servicio` VALUES ('13', '4', '1', '1', '1', '2019-06-03 11:06:14');
INSERT INTO `paquete_servicio` VALUES ('14', '4', '2', '1', '1', '2019-06-03 11:06:14');
INSERT INTO `paquete_servicio` VALUES ('15', '4', '6', '1', '1', '2019-06-03 11:06:14');
INSERT INTO `paquete_servicio` VALUES ('16', '5', '1', '1', '1', '2019-06-04 12:06:15');
INSERT INTO `paquete_servicio` VALUES ('17', '5', '3', '1', '1', '2019-06-04 12:06:15');
INSERT INTO `paquete_servicio` VALUES ('18', '5', '6', '1', '1', '2019-06-04 12:06:15');

-- ----------------------------
-- Table structure for paquete_video
-- ----------------------------
DROP TABLE IF EXISTS `paquete_video`;
CREATE TABLE `paquete_video` (
  `paquete_video_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `paquete_id` int(10) unsigned NOT NULL,
  `url_video` varchar(255) NOT NULL,
  `item` int(11) DEFAULT '0',
  `desc_video` varchar(255) DEFAULT NULL,
  `estado` char(1) DEFAULT '1',
  PRIMARY KEY (`paquete_video_id`),
  KEY `fk_paquete_video_paquete1_idx` (`paquete_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete_video
-- ----------------------------
INSERT INTO `paquete_video` VALUES ('1', '2', 'yGFeHsqVw-4', '1', 'video informativo', '1');
INSERT INTO `paquete_video` VALUES ('2', '2', 'dNe-QWb3qiw', '2', '', '1');
INSERT INTO `paquete_video` VALUES ('3', '3', 'yGFeHsqVw-4', '1', 'video informativo', '1');
INSERT INTO `paquete_video` VALUES ('4', '3', 'dNe-QWb3qiw', '2', '', '1');
INSERT INTO `paquete_video` VALUES ('5', '4', '9XyiBI53LZ0', '1', '', '1');
INSERT INTO `paquete_video` VALUES ('6', '4', 'luECXKqgUpc', '2', '', '1');
INSERT INTO `paquete_video` VALUES ('7', '5', 'ciaKqwX8Uqc', '1', '', '1');
INSERT INTO `paquete_video` VALUES ('8', '5', 'OcQK9k9GRzM', '2', '', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of servicio
-- ----------------------------
INSERT INTO `servicio` VALUES ('1', 'Desayuno', '', '1', '1');
INSERT INTO `servicio` VALUES ('2', 'Almuerzo', '', '1', '1');
INSERT INTO `servicio` VALUES ('3', 'Cena', '', '1', '1');
INSERT INTO `servicio` VALUES ('4', 'Hospedaje', '', '1', '1');
INSERT INTO `servicio` VALUES ('5', 'Transporte', '', '1', '1');
INSERT INTO `servicio` VALUES ('6', 'Guía', '', '1', '1');
INSERT INTO `servicio` VALUES ('7', 'Traslados', '', '1', '1');
INSERT INTO `servicio` VALUES ('8', 'Excursiones', '', '1', '1');
INSERT INTO `servicio` VALUES ('9', 'Entradas', '', '1', '1');
INSERT INTO `servicio` VALUES ('10', 'Carpa', '', '1', '1');

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
-- Table structure for tipo_convenio
-- ----------------------------
DROP TABLE IF EXISTS `tipo_convenio`;
CREATE TABLE `tipo_convenio` (
  `tipo_convenio_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `desc_convenio` varchar(45) NOT NULL,
  `estado` tinyint(3) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`tipo_convenio_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of tipo_convenio
-- ----------------------------
INSERT INTO `tipo_convenio` VALUES ('1', 'Hoteles', '1');
INSERT INTO `tipo_convenio` VALUES ('2', 'Autos', '1');
INSERT INTO `tipo_convenio` VALUES ('3', 'Restaurant', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=2096 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of ubigeo
-- ----------------------------
INSERT INTO `ubigeo` VALUES ('1', '10000', 'Amazonas', 'Amazonas', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('2', '20000', 'Áncash', 'Áncash', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('3', '30000', 'Apurímac', 'Apurímac', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('4', '40000', 'Arequipa', 'Arequipa', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('5', '50000', 'Ayacucho', 'Ayacucho', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('6', '60000', 'Cajamarca', 'Cajamarca', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('7', '70000', 'Callao', 'Callao', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('8', '80000', 'Cusco', 'Cusco', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('9', '90000', 'Huancavelica', 'Huancavelica', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('10', '100000', 'Huánuco', 'Huánuco', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('11', '110000', 'Ica', 'Ica', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('12', '120000', 'Junín', 'Junín', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('13', '130000', 'La Libertad', 'La Libertad', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('14', '140000', 'Lambayeque', 'Lambayeque', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('15', '150000', 'Lima', 'Lima', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('16', '160000', 'Loreto', 'Loreto', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('17', '170000', 'Madre de Dios', 'Madre de Dios', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('18', '180000', 'Moquegua', 'Moquegua', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('19', '190000', 'Pasco', 'Pasco', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('20', '200000', 'Piura', 'Piura', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('21', '210000', 'Puno', 'Puno', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('22', '220000', 'San Martín', 'San Martín', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('23', '230000', 'Tacna', 'Tacna', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('24', '240000', 'Tumbes', 'Tumbes', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('25', '250000', 'Ucayali', 'Ucayali', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('26', '10100', 'Chachapoyas', 'Chachapoyas, Amazonas', '1', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('27', '10200', 'Bagua', 'Bagua, Amazonas', '1', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('28', '10300', 'Bongará', 'Bongará, Amazonas', '1', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('29', '10400', 'Condorcanqui', 'Condorcanqui, Amazonas', '1', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('30', '10500', 'Luya', 'Luya, Amazonas', '1', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('31', '10600', 'Rodríguez de Mendoza', 'Rodríguez de Mendoza, Amazonas', '1', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('32', '10700', 'Utcubamba', 'Utcubamba, Amazonas', '1', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('33', '20100', 'Huaraz', 'Huaraz, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('34', '20200', 'Aija', 'Aija, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('35', '20300', 'Antonio Raymondi', 'Antonio Raymondi, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('36', '20400', 'Asunción', 'Asunción, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('37', '20500', 'Bolognesi', 'Bolognesi, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('38', '20600', 'Carhuaz', 'Carhuaz, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('39', '20700', 'Carlos Fermín Fitzcarrald', 'Carlos Fermín Fitzcarrald, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('40', '20800', 'Casma', 'Casma, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('41', '20900', 'Corongo', 'Corongo, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('42', '21000', 'Huari', 'Huari, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('43', '21100', 'Huarmey', 'Huarmey, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('44', '21200', 'Huaylas', 'Huaylas, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('45', '21300', 'Mariscal Luzuriaga', 'Mariscal Luzuriaga, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('46', '21400', 'Ocros', 'Ocros, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('47', '21500', 'Pallasca', 'Pallasca, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('48', '21600', 'Pomabamba', 'Pomabamba, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('49', '21700', 'Recuay', 'Recuay, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('50', '21800', 'Santa', 'Santa, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('51', '21900', 'Sihuas', 'Sihuas, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('52', '22000', 'Yungay', 'Yungay, Áncash', '2', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('53', '30100', 'Abancay', 'Abancay, Apurímac', '3', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('54', '30200', 'Andahuaylas', 'Andahuaylas, Apurímac', '3', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('55', '30300', 'Antabamba', 'Antabamba, Apurímac', '3', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('56', '30400', 'Aymaraes', 'Aymaraes, Apurímac', '3', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('57', '30500', 'Cotabambas', 'Cotabambas, Apurímac', '3', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('58', '30600', 'Chincheros', 'Chincheros, Apurímac', '3', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('59', '30700', 'Grau', 'Grau, Apurímac', '3', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('60', '40100', 'Arequipa', 'Arequipa, Arequipa', '4', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('61', '40200', 'Camaná', 'Camaná, Arequipa', '4', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('62', '40300', 'Caravelí', 'Caravelí, Arequipa', '4', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('63', '40400', 'Castilla', 'Castilla, Arequipa', '4', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('64', '40500', 'Caylloma', 'Caylloma, Arequipa', '4', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('65', '40600', 'Condesuyos', 'Condesuyos, Arequipa', '4', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('66', '40700', 'Islay', 'Islay, Arequipa', '4', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('67', '40800', 'La Uniòn', 'La Uniòn, Arequipa', '4', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('68', '50100', 'Huamanga', 'Huamanga, Ayacucho', '5', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('69', '50200', 'Cangallo', 'Cangallo, Ayacucho', '5', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('70', '50300', 'Huanca Sancos', 'Huanca Sancos, Ayacucho', '5', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('71', '50400', 'Huanta', 'Huanta, Ayacucho', '5', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('72', '50500', 'La Mar', 'La Mar, Ayacucho', '5', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('73', '50600', 'Lucanas', 'Lucanas, Ayacucho', '5', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('74', '50700', 'Parinacochas', 'Parinacochas, Ayacucho', '5', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('75', '50800', 'Pàucar del Sara Sara', 'Pàucar del Sara Sara, Ayacucho', '5', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('76', '50900', 'Sucre', 'Sucre, Ayacucho', '5', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('77', '51000', 'Víctor Fajardo', 'Víctor Fajardo, Ayacucho', '5', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('78', '51100', 'Vilcas Huamán', 'Vilcas Huamán, Ayacucho', '5', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('79', '60100', 'Cajamarca', 'Cajamarca, Cajamarca', '6', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('80', '60200', 'Cajabamba', 'Cajabamba, Cajamarca', '6', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('81', '60300', 'Celendín', 'Celendín, Cajamarca', '6', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('82', '60400', 'Chota', 'Chota, Cajamarca', '6', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('83', '60500', 'Contumazá', 'Contumazá, Cajamarca', '6', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('84', '60600', 'Cutervo', 'Cutervo, Cajamarca', '6', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('85', '60700', 'Hualgayoc', 'Hualgayoc, Cajamarca', '6', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('86', '60800', 'Jaén', 'Jaén, Cajamarca', '6', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('87', '60900', 'San Ignacio', 'San Ignacio, Cajamarca', '6', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('88', '61000', 'San Marcos', 'San Marcos, Cajamarca', '6', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('89', '61100', 'San Miguel', 'San Miguel, Cajamarca', '6', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('90', '61200', 'San Pablo', 'San Pablo, Cajamarca', '6', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('91', '61300', 'Santa Cruz', 'Santa Cruz, Cajamarca', '6', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('92', '70100', 'Prov. Const. del Callao', 'Prov. Const. del Callao, Callao', '7', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('93', '80100', 'Cusco', 'Cusco, Cusco', '8', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('94', '80200', 'Acomayo', 'Acomayo, Cusco', '8', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('95', '80300', 'Anta', 'Anta, Cusco', '8', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('96', '80400', 'Calca', 'Calca, Cusco', '8', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('97', '80500', 'Canas', 'Canas, Cusco', '8', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('98', '80600', 'Canchis', 'Canchis, Cusco', '8', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('99', '80700', 'Chumbivilcas', 'Chumbivilcas, Cusco', '8', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('100', '80800', 'Espinar', 'Espinar, Cusco', '8', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('101', '80900', 'La Convención', 'La Convención, Cusco', '8', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('102', '81000', 'Paruro', 'Paruro, Cusco', '8', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('103', '81100', 'Paucartambo', 'Paucartambo, Cusco', '8', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('104', '81200', 'Quispicanchi', 'Quispicanchi, Cusco', '8', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('105', '81300', 'Urubamba', 'Urubamba, Cusco', '8', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('106', '90100', 'Huancavelica', 'Huancavelica, Huancavelica', '9', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('107', '90200', 'Acobamba', 'Acobamba, Huancavelica', '9', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('108', '90300', 'Angaraes', 'Angaraes, Huancavelica', '9', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('109', '90400', 'Castrovirreyna', 'Castrovirreyna, Huancavelica', '9', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('110', '90500', 'Churcampa', 'Churcampa, Huancavelica', '9', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('111', '90600', 'Huaytará', 'Huaytará, Huancavelica', '9', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('112', '90700', 'Tayacaja', 'Tayacaja, Huancavelica', '9', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('113', '100100', 'Huánuco', 'Huánuco, Huánuco', '10', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('114', '100200', 'Ambo', 'Ambo, Huánuco', '10', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('115', '100300', 'Dos de Mayo', 'Dos de Mayo, Huánuco', '10', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('116', '100400', 'Huacaybamba', 'Huacaybamba, Huánuco', '10', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('117', '100500', 'Huamalíes', 'Huamalíes, Huánuco', '10', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('118', '100600', 'Leoncio Prado', 'Leoncio Prado, Huánuco', '10', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('119', '100700', 'Marañón', 'Marañón, Huánuco', '10', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('120', '100800', 'Pachitea', 'Pachitea, Huánuco', '10', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('121', '100900', 'Puerto Inca', 'Puerto Inca, Huánuco', '10', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('122', '101000', 'Lauricocha ', 'Lauricocha , Huánuco', '10', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('123', '101100', 'Yarowilca ', 'Yarowilca , Huánuco', '10', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('124', '110100', 'Ica ', 'Ica , Ica', '11', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('125', '110200', 'Chincha ', 'Chincha , Ica', '11', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('126', '110300', 'Nasca ', 'Nasca , Ica', '11', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('127', '110400', 'Palpa ', 'Palpa , Ica', '11', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('128', '110500', 'Pisco ', 'Pisco , Ica', '11', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('129', '120100', 'Huancayo ', 'Huancayo , Junín', '12', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('130', '120200', 'Concepción ', 'Concepción , Junín', '12', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('131', '120300', 'Chanchamayo ', 'Chanchamayo , Junín', '12', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('132', '120400', 'Jauja ', 'Jauja , Junín', '12', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('133', '120500', 'Junín ', 'Junín , Junín', '12', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('134', '120600', 'Satipo ', 'Satipo , Junín', '12', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('135', '120700', 'Tarma ', 'Tarma , Junín', '12', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('136', '120800', 'Yauli ', 'Yauli , Junín', '12', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('137', '120900', 'Chupaca ', 'Chupaca , Junín', '12', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('138', '130100', 'Trujillo ', 'Trujillo , La Libertad', '13', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('139', '130200', 'Ascope ', 'Ascope , La Libertad', '13', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('140', '130300', 'Bolívar ', 'Bolívar , La Libertad', '13', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('141', '130400', 'Chepén ', 'Chepén , La Libertad', '13', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('142', '130500', 'Julcán ', 'Julcán , La Libertad', '13', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('143', '130600', 'Otuzco ', 'Otuzco , La Libertad', '13', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('144', '130700', 'Pacasmayo ', 'Pacasmayo , La Libertad', '13', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('145', '130800', 'Pataz ', 'Pataz , La Libertad', '13', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('146', '130900', 'Sánchez Carrión ', 'Sánchez Carrión , La Libertad', '13', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('147', '131000', 'Santiago de Chuco ', 'Santiago de Chuco , La Libertad', '13', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('148', '131100', 'Gran Chimú ', 'Gran Chimú , La Libertad', '13', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('149', '131200', 'Virú ', 'Virú , La Libertad', '13', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('150', '140100', 'Chiclayo ', 'Chiclayo , Lambayeque', '14', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('151', '140200', 'Ferreñafe ', 'Ferreñafe , Lambayeque', '14', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('152', '140300', 'Lambayeque ', 'Lambayeque , Lambayeque', '14', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('153', '150100', 'Lima ', 'Lima , Lima', '15', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('154', '150200', 'Barranca ', 'Barranca , Lima', '15', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('155', '150300', 'Cajatambo ', 'Cajatambo , Lima', '15', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('156', '150400', 'Canta ', 'Canta , Lima', '15', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('157', '150500', 'Cañete ', 'Cañete , Lima', '15', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('158', '150600', 'Huaral ', 'Huaral , Lima', '15', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('159', '150700', 'Huarochirí ', 'Huarochirí , Lima', '15', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('160', '150800', 'Huaura ', 'Huaura , Lima', '15', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('161', '150900', 'Oyón ', 'Oyón , Lima', '15', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('162', '151000', 'Yauyos ', 'Yauyos , Lima', '15', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('163', '160100', 'Maynas ', 'Maynas , Loreto', '16', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('164', '160200', 'Alto Amazonas ', 'Alto Amazonas , Loreto', '16', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('165', '160300', 'Loreto ', 'Loreto , Loreto', '16', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('166', '160400', 'Mariscal Ramón Castilla ', 'Mariscal Ramón Castilla , Loreto', '16', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('167', '160500', 'Requena ', 'Requena , Loreto', '16', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('168', '160600', 'Ucayali ', 'Ucayali , Loreto', '16', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('169', '160700', 'Datem del Marañón ', 'Datem del Marañón , Loreto', '16', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('170', '160800', 'Putumayo', 'Putumayo, Loreto', '16', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('171', '170100', 'Tambopata ', 'Tambopata , Madre de Dios', '17', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('172', '170200', 'Manu ', 'Manu , Madre de Dios', '17', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('173', '170300', 'Tahuamanu ', 'Tahuamanu , Madre de Dios', '17', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('174', '180100', 'Mariscal Nieto ', 'Mariscal Nieto , Moquegua', '18', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('175', '180200', 'General Sánchez Cerro ', 'General Sánchez Cerro , Moquegua', '18', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('176', '180300', 'Ilo ', 'Ilo , Moquegua', '18', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('177', '190100', 'Pasco ', 'Pasco , Pasco', '19', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('178', '190200', 'Daniel Alcides Carrión ', 'Daniel Alcides Carrión , Pasco', '19', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('179', '190300', 'Oxapampa ', 'Oxapampa , Pasco', '19', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('180', '200100', 'Piura ', 'Piura , Piura', '20', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('181', '200200', 'Ayabaca ', 'Ayabaca , Piura', '20', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('182', '200300', 'Huancabamba ', 'Huancabamba , Piura', '20', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('183', '200400', 'Morropón ', 'Morropón , Piura', '20', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('184', '200500', 'Paita ', 'Paita , Piura', '20', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('185', '200600', 'Sullana ', 'Sullana , Piura', '20', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('186', '200700', 'Talara ', 'Talara , Piura', '20', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('187', '200800', 'Sechura ', 'Sechura , Piura', '20', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('188', '210100', 'Puno ', 'Puno , Puno', '21', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('189', '210200', 'Azángaro ', 'Azángaro , Puno', '21', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('190', '210300', 'Carabaya ', 'Carabaya , Puno', '21', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('191', '210400', 'Chucuito ', 'Chucuito , Puno', '21', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('192', '210500', 'El Collao ', 'El Collao , Puno', '21', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('193', '210600', 'Huancané ', 'Huancané , Puno', '21', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('194', '210700', 'Lampa ', 'Lampa , Puno', '21', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('195', '210800', 'Melgar ', 'Melgar , Puno', '21', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('196', '210900', 'Moho ', 'Moho , Puno', '21', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('197', '211000', 'San Antonio de Putina ', 'San Antonio de Putina , Puno', '21', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('198', '211100', 'San Román ', 'San Román , Puno', '21', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('199', '211200', 'Sandia ', 'Sandia , Puno', '21', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('200', '211300', 'Yunguyo ', 'Yunguyo , Puno', '21', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('201', '220100', 'Moyobamba ', 'Moyobamba , San Martín', '22', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('202', '220200', 'Bellavista ', 'Bellavista , San Martín', '22', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('203', '220300', 'El Dorado ', 'El Dorado , San Martín', '22', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('204', '220400', 'Huallaga ', 'Huallaga , San Martín', '22', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('205', '220500', 'Lamas ', 'Lamas , San Martín', '22', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('206', '220600', 'Mariscal Cáceres ', 'Mariscal Cáceres , San Martín', '22', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('207', '220700', 'Picota ', 'Picota , San Martín', '22', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('208', '220800', 'Rioja ', 'Rioja , San Martín', '22', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('209', '220900', 'San Martín ', 'San Martín , San Martín', '22', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('210', '221000', 'Tocache ', 'Tocache , San Martín', '22', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('211', '230100', 'Tacna ', 'Tacna , Tacna', '23', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('212', '230200', 'Candarave ', 'Candarave , Tacna', '23', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('213', '230300', 'Jorge Basadre ', 'Jorge Basadre , Tacna', '23', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('214', '230400', 'Tarata ', 'Tarata , Tacna', '23', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('215', '240100', 'Tumbes ', 'Tumbes , Tumbes', '24', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('216', '240200', 'Contralmirante Villar ', 'Contralmirante Villar , Tumbes', '24', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('217', '240300', 'Zarumilla ', 'Zarumilla , Tumbes', '24', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('218', '250100', 'Coronel Portillo ', 'Coronel Portillo , Ucayali', '25', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('219', '250200', 'Atalaya ', 'Atalaya , Ucayali', '25', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('220', '250300', 'Padre Abad ', 'Padre Abad , Ucayali', '25', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('221', '250400', 'Purús', 'Purús, Ucayali', '25', '1', '1', '2', '1');
INSERT INTO `ubigeo` VALUES ('222', '10101', 'Chachapoyas', 'Chachapoyas, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('223', '10102', 'Asunción', 'Asunción, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('224', '10103', 'Balsas', 'Balsas, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('225', '10104', 'Cheto', 'Cheto, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('226', '10105', 'Chiliquin', 'Chiliquin, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('227', '10106', 'Chuquibamba', 'Chuquibamba, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('228', '10107', 'Granada', 'Granada, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('229', '10108', 'Huancas', 'Huancas, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('230', '10109', 'La Jalca', 'La Jalca, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('231', '10110', 'Leimebamba', 'Leimebamba, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('232', '10111', 'Levanto', 'Levanto, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('233', '10112', 'Magdalena', 'Magdalena, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('234', '10113', 'Mariscal Castilla', 'Mariscal Castilla, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('235', '10114', 'Molinopampa', 'Molinopampa, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('236', '10115', 'Montevideo', 'Montevideo, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('237', '10116', 'Olleros', 'Olleros, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('238', '10117', 'Quinjalca', 'Quinjalca, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('239', '10118', 'San Francisco de Daguas', 'San Francisco de Daguas, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('240', '10119', 'San Isidro de Maino', 'San Isidro de Maino, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('241', '10120', 'Soloco', 'Soloco, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('242', '10121', 'Sonche', 'Sonche, Chachapoyas, Amazonas', '26', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('243', '10201', 'Bagua', 'Bagua, Bagua, Amazonas', '27', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('244', '10202', 'Aramango', 'Aramango, Bagua, Amazonas', '27', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('245', '10203', 'Copallin', 'Copallin, Bagua, Amazonas', '27', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('246', '10204', 'El Parco', 'El Parco, Bagua, Amazonas', '27', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('247', '10205', 'Imaza', 'Imaza, Bagua, Amazonas', '27', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('248', '10206', 'La Peca', 'La Peca, Bagua, Amazonas', '27', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('249', '10301', 'Jumbilla', 'Jumbilla, Bongará, Amazonas', '28', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('250', '10302', 'Chisquilla', 'Chisquilla, Bongará, Amazonas', '28', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('251', '10303', 'Churuja', 'Churuja, Bongará, Amazonas', '28', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('252', '10304', 'Corosha', 'Corosha, Bongará, Amazonas', '28', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('253', '10305', 'Cuispes', 'Cuispes, Bongará, Amazonas', '28', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('254', '10306', 'Florida', 'Florida, Bongará, Amazonas', '28', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('255', '10307', 'Jazan', 'Jazan, Bongará, Amazonas', '28', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('256', '10308', 'Recta', 'Recta, Bongará, Amazonas', '28', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('257', '10309', 'San Carlos', 'San Carlos, Bongará, Amazonas', '28', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('258', '10310', 'Shipasbamba', 'Shipasbamba, Bongará, Amazonas', '28', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('259', '10311', 'Valera', 'Valera, Bongará, Amazonas', '28', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('260', '10312', 'Yambrasbamba', 'Yambrasbamba, Bongará, Amazonas', '28', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('261', '10401', 'Nieva', 'Nieva, Condorcanqui, Amazonas', '29', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('262', '10402', 'El Cenepa', 'El Cenepa, Condorcanqui, Amazonas', '29', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('263', '10403', 'Río Santiago', 'Río Santiago, Condorcanqui, Amazonas', '29', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('264', '10501', 'Lamud', 'Lamud, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('265', '10502', 'Camporredondo', 'Camporredondo, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('266', '10503', 'Cocabamba', 'Cocabamba, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('267', '10504', 'Colcamar', 'Colcamar, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('268', '10505', 'Conila', 'Conila, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('269', '10506', 'Inguilpata', 'Inguilpata, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('270', '10507', 'Longuita', 'Longuita, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('271', '10508', 'Lonya Chico', 'Lonya Chico, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('272', '10509', 'Luya', 'Luya, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('273', '10510', 'Luya Viejo', 'Luya Viejo, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('274', '10511', 'María', 'María, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('275', '10512', 'Ocalli', 'Ocalli, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('276', '10513', 'Ocumal', 'Ocumal, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('277', '10514', 'Pisuquia', 'Pisuquia, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('278', '10515', 'Providencia', 'Providencia, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('279', '10516', 'San Cristóbal', 'San Cristóbal, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('280', '10517', 'San Francisco de Yeso', 'San Francisco de Yeso, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('281', '10518', 'San Jerónimo', 'San Jerónimo, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('282', '10519', 'San Juan de Lopecancha', 'San Juan de Lopecancha, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('283', '10520', 'Santa Catalina', 'Santa Catalina, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('284', '10521', 'Santo Tomas', 'Santo Tomas, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('285', '10522', 'Tingo', 'Tingo, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('286', '10523', 'Trita', 'Trita, Luya, Amazonas', '30', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('287', '10601', 'San Nicolás', 'San Nicolás, Rodríguez de Mendoza, Amazonas', '31', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('288', '10602', 'Chirimoto', 'Chirimoto, Rodríguez de Mendoza, Amazonas', '31', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('289', '10603', 'Cochamal', 'Cochamal, Rodríguez de Mendoza, Amazonas', '31', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('290', '10604', 'Huambo', 'Huambo, Rodríguez de Mendoza, Amazonas', '31', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('291', '10605', 'Limabamba', 'Limabamba, Rodríguez de Mendoza, Amazonas', '31', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('292', '10606', 'Longar', 'Longar, Rodríguez de Mendoza, Amazonas', '31', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('293', '10607', 'Mariscal Benavides', 'Mariscal Benavides, Rodríguez de Mendoza, Amazonas', '31', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('294', '10608', 'Milpuc', 'Milpuc, Rodríguez de Mendoza, Amazonas', '31', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('295', '10609', 'Omia', 'Omia, Rodríguez de Mendoza, Amazonas', '31', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('296', '10610', 'Santa Rosa', 'Santa Rosa, Rodríguez de Mendoza, Amazonas', '31', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('297', '10611', 'Totora', 'Totora, Rodríguez de Mendoza, Amazonas', '31', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('298', '10612', 'Vista Alegre', 'Vista Alegre, Rodríguez de Mendoza, Amazonas', '31', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('299', '10701', 'Bagua Grande', 'Bagua Grande, Utcubamba, Amazonas', '32', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('300', '10702', 'Cajaruro', 'Cajaruro, Utcubamba, Amazonas', '32', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('301', '10703', 'Cumba', 'Cumba, Utcubamba, Amazonas', '32', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('302', '10704', 'El Milagro', 'El Milagro, Utcubamba, Amazonas', '32', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('303', '10705', 'Jamalca', 'Jamalca, Utcubamba, Amazonas', '32', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('304', '10706', 'Lonya Grande', 'Lonya Grande, Utcubamba, Amazonas', '32', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('305', '10707', 'Yamon', 'Yamon, Utcubamba, Amazonas', '32', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('306', '20101', 'Huaraz', 'Huaraz, Huaraz, Áncash', '33', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('307', '20102', 'Cochabamba', 'Cochabamba, Huaraz, Áncash', '33', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('308', '20103', 'Colcabamba', 'Colcabamba, Huaraz, Áncash', '33', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('309', '20104', 'Huanchay', 'Huanchay, Huaraz, Áncash', '33', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('310', '20105', 'Independencia', 'Independencia, Huaraz, Áncash', '33', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('311', '20106', 'Jangas', 'Jangas, Huaraz, Áncash', '33', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('312', '20107', 'La Libertad', 'La Libertad, Huaraz, Áncash', '33', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('313', '20108', 'Olleros', 'Olleros, Huaraz, Áncash', '33', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('314', '20109', 'Pampas Grande', 'Pampas Grande, Huaraz, Áncash', '33', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('315', '20110', 'Pariacoto', 'Pariacoto, Huaraz, Áncash', '33', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('316', '20111', 'Pira', 'Pira, Huaraz, Áncash', '33', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('317', '20112', 'Tarica', 'Tarica, Huaraz, Áncash', '33', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('318', '20201', 'Aija', 'Aija, Aija, Áncash', '34', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('319', '20202', 'Coris', 'Coris, Aija, Áncash', '34', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('320', '20203', 'Huacllan', 'Huacllan, Aija, Áncash', '34', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('321', '20204', 'La Merced', 'La Merced, Aija, Áncash', '34', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('322', '20205', 'Succha', 'Succha, Aija, Áncash', '34', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('323', '20301', 'Llamellin', 'Llamellin, Antonio Raymondi, Áncash', '35', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('324', '20302', 'Aczo', 'Aczo, Antonio Raymondi, Áncash', '35', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('325', '20303', 'Chaccho', 'Chaccho, Antonio Raymondi, Áncash', '35', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('326', '20304', 'Chingas', 'Chingas, Antonio Raymondi, Áncash', '35', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('327', '20305', 'Mirgas', 'Mirgas, Antonio Raymondi, Áncash', '35', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('328', '20306', 'San Juan de Rontoy', 'San Juan de Rontoy, Antonio Raymondi, Áncash', '35', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('329', '20401', 'Chacas', 'Chacas, Asunción, Áncash', '36', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('330', '20402', 'Acochaca', 'Acochaca, Asunción, Áncash', '36', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('331', '20501', 'Chiquian', 'Chiquian, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('332', '20502', 'Abelardo Pardo Lezameta', 'Abelardo Pardo Lezameta, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('333', '20503', 'Antonio Raymondi', 'Antonio Raymondi, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('334', '20504', 'Aquia', 'Aquia, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('335', '20505', 'Cajacay', 'Cajacay, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('336', '20506', 'Canis', 'Canis, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('337', '20507', 'Colquioc', 'Colquioc, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('338', '20508', 'Huallanca', 'Huallanca, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('339', '20509', 'Huasta', 'Huasta, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('340', '20510', 'Huayllacayan', 'Huayllacayan, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('341', '20511', 'La Primavera', 'La Primavera, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('342', '20512', 'Mangas', 'Mangas, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('343', '20513', 'Pacllon', 'Pacllon, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('344', '20514', 'San Miguel de Corpanqui', 'San Miguel de Corpanqui, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('345', '20515', 'Ticllos', 'Ticllos, Bolognesi, Áncash', '37', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('346', '20601', 'Carhuaz', 'Carhuaz, Carhuaz, Áncash', '38', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('347', '20602', 'Acopampa', 'Acopampa, Carhuaz, Áncash', '38', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('348', '20603', 'Amashca', 'Amashca, Carhuaz, Áncash', '38', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('349', '20604', 'Anta', 'Anta, Carhuaz, Áncash', '38', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('350', '20605', 'Ataquero', 'Ataquero, Carhuaz, Áncash', '38', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('351', '20606', 'Marcara', 'Marcara, Carhuaz, Áncash', '38', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('352', '20607', 'Pariahuanca', 'Pariahuanca, Carhuaz, Áncash', '38', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('353', '20608', 'San Miguel de Aco', 'San Miguel de Aco, Carhuaz, Áncash', '38', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('354', '20609', 'Shilla', 'Shilla, Carhuaz, Áncash', '38', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('355', '20610', 'Tinco', 'Tinco, Carhuaz, Áncash', '38', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('356', '20611', 'Yungar', 'Yungar, Carhuaz, Áncash', '38', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('357', '20701', 'San Luis', 'San Luis, Carlos Fermín Fitzcarrald, Áncash', '39', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('358', '20702', 'San Nicolás', 'San Nicolás, Carlos Fermín Fitzcarrald, Áncash', '39', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('359', '20703', 'Yauya', 'Yauya, Carlos Fermín Fitzcarrald, Áncash', '39', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('360', '20801', 'Casma', 'Casma, Casma, Áncash', '40', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('361', '20802', 'Buena Vista Alta', 'Buena Vista Alta, Casma, Áncash', '40', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('362', '20803', 'Comandante Noel', 'Comandante Noel, Casma, Áncash', '40', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('363', '20804', 'Yautan', 'Yautan, Casma, Áncash', '40', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('364', '20901', 'Corongo', 'Corongo, Corongo, Áncash', '41', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('365', '20902', 'Aco', 'Aco, Corongo, Áncash', '41', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('366', '20903', 'Bambas', 'Bambas, Corongo, Áncash', '41', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('367', '20904', 'Cusca', 'Cusca, Corongo, Áncash', '41', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('368', '20905', 'La Pampa', 'La Pampa, Corongo, Áncash', '41', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('369', '20906', 'Yanac', 'Yanac, Corongo, Áncash', '41', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('370', '20907', 'Yupan', 'Yupan, Corongo, Áncash', '41', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('371', '21001', 'Huari', 'Huari, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('372', '21002', 'Anra', 'Anra, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('373', '21003', 'Cajay', 'Cajay, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('374', '21004', 'Chavin de Huantar', 'Chavin de Huantar, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('375', '21005', 'Huacachi', 'Huacachi, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('376', '21006', 'Huacchis', 'Huacchis, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('377', '21007', 'Huachis', 'Huachis, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('378', '21008', 'Huantar', 'Huantar, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('379', '21009', 'Masin', 'Masin, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('380', '21010', 'Paucas', 'Paucas, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('381', '21011', 'Ponto', 'Ponto, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('382', '21012', 'Rahuapampa', 'Rahuapampa, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('383', '21013', 'Rapayan', 'Rapayan, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('384', '21014', 'San Marcos', 'San Marcos, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('385', '21015', 'San Pedro de Chana', 'San Pedro de Chana, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('386', '21016', 'Uco', 'Uco, Huari, Áncash', '42', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('387', '21101', 'Huarmey', 'Huarmey, Huarmey, Áncash', '43', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('388', '21102', 'Cochapeti', 'Cochapeti, Huarmey, Áncash', '43', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('389', '21103', 'Culebras', 'Culebras, Huarmey, Áncash', '43', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('390', '21104', 'Huayan', 'Huayan, Huarmey, Áncash', '43', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('391', '21105', 'Malvas', 'Malvas, Huarmey, Áncash', '43', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('392', '21201', 'Caraz', 'Caraz, Huaylas, Áncash', '44', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('393', '21202', 'Huallanca', 'Huallanca, Huaylas, Áncash', '44', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('394', '21203', 'Huata', 'Huata, Huaylas, Áncash', '44', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('395', '21204', 'Huaylas', 'Huaylas, Huaylas, Áncash', '44', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('396', '21205', 'Mato', 'Mato, Huaylas, Áncash', '44', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('397', '21206', 'Pamparomas', 'Pamparomas, Huaylas, Áncash', '44', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('398', '21207', 'Pueblo Libre', 'Pueblo Libre, Huaylas, Áncash', '44', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('399', '21208', 'Santa Cruz', 'Santa Cruz, Huaylas, Áncash', '44', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('400', '21209', 'Santo Toribio', 'Santo Toribio, Huaylas, Áncash', '44', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('401', '21210', 'Yuracmarca', 'Yuracmarca, Huaylas, Áncash', '44', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('402', '21301', 'Piscobamba', 'Piscobamba, Mariscal Luzuriaga, Áncash', '45', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('403', '21302', 'Casca', 'Casca, Mariscal Luzuriaga, Áncash', '45', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('404', '21303', 'Eleazar Guzmán Barron', 'Eleazar Guzmán Barron, Mariscal Luzuriaga, Áncash', '45', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('405', '21304', 'Fidel Olivas Escudero', 'Fidel Olivas Escudero, Mariscal Luzuriaga, Áncash', '45', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('406', '21305', 'Llama', 'Llama, Mariscal Luzuriaga, Áncash', '45', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('407', '21306', 'Llumpa', 'Llumpa, Mariscal Luzuriaga, Áncash', '45', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('408', '21307', 'Lucma', 'Lucma, Mariscal Luzuriaga, Áncash', '45', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('409', '21308', 'Musga', 'Musga, Mariscal Luzuriaga, Áncash', '45', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('410', '21401', 'Ocros', 'Ocros, Ocros, Áncash', '46', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('411', '21402', 'Acas', 'Acas, Ocros, Áncash', '46', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('412', '21403', 'Cajamarquilla', 'Cajamarquilla, Ocros, Áncash', '46', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('413', '21404', 'Carhuapampa', 'Carhuapampa, Ocros, Áncash', '46', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('414', '21405', 'Cochas', 'Cochas, Ocros, Áncash', '46', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('415', '21406', 'Congas', 'Congas, Ocros, Áncash', '46', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('416', '21407', 'Llipa', 'Llipa, Ocros, Áncash', '46', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('417', '21408', 'San Cristóbal de Rajan', 'San Cristóbal de Rajan, Ocros, Áncash', '46', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('418', '21409', 'San Pedro', 'San Pedro, Ocros, Áncash', '46', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('419', '21410', 'Santiago de Chilcas', 'Santiago de Chilcas, Ocros, Áncash', '46', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('420', '21501', 'Cabana', 'Cabana, Pallasca, Áncash', '47', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('421', '21502', 'Bolognesi', 'Bolognesi, Pallasca, Áncash', '47', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('422', '21503', 'Conchucos', 'Conchucos, Pallasca, Áncash', '47', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('423', '21504', 'Huacaschuque', 'Huacaschuque, Pallasca, Áncash', '47', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('424', '21505', 'Huandoval', 'Huandoval, Pallasca, Áncash', '47', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('425', '21506', 'Lacabamba', 'Lacabamba, Pallasca, Áncash', '47', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('426', '21507', 'Llapo', 'Llapo, Pallasca, Áncash', '47', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('427', '21508', 'Pallasca', 'Pallasca, Pallasca, Áncash', '47', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('428', '21509', 'Pampas', 'Pampas, Pallasca, Áncash', '47', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('429', '21510', 'Santa Rosa', 'Santa Rosa, Pallasca, Áncash', '47', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('430', '21511', 'Tauca', 'Tauca, Pallasca, Áncash', '47', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('431', '21601', 'Pomabamba', 'Pomabamba, Pomabamba, Áncash', '48', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('432', '21602', 'Huayllan', 'Huayllan, Pomabamba, Áncash', '48', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('433', '21603', 'Parobamba', 'Parobamba, Pomabamba, Áncash', '48', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('434', '21604', 'Quinuabamba', 'Quinuabamba, Pomabamba, Áncash', '48', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('435', '21701', 'Recuay', 'Recuay, Recuay, Áncash', '49', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('436', '21702', 'Catac', 'Catac, Recuay, Áncash', '49', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('437', '21703', 'Cotaparaco', 'Cotaparaco, Recuay, Áncash', '49', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('438', '21704', 'Huayllapampa', 'Huayllapampa, Recuay, Áncash', '49', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('439', '21705', 'Llacllin', 'Llacllin, Recuay, Áncash', '49', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('440', '21706', 'Marca', 'Marca, Recuay, Áncash', '49', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('441', '21707', 'Pampas Chico', 'Pampas Chico, Recuay, Áncash', '49', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('442', '21708', 'Pararin', 'Pararin, Recuay, Áncash', '49', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('443', '21709', 'Tapacocha', 'Tapacocha, Recuay, Áncash', '49', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('444', '21710', 'Ticapampa', 'Ticapampa, Recuay, Áncash', '49', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('445', '21801', 'Chimbote', 'Chimbote, Santa, Áncash', '50', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('446', '21802', 'Cáceres del Perú', 'Cáceres del Perú, Santa, Áncash', '50', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('447', '21803', 'Coishco', 'Coishco, Santa, Áncash', '50', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('448', '21804', 'Macate', 'Macate, Santa, Áncash', '50', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('449', '21805', 'Moro', 'Moro, Santa, Áncash', '50', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('450', '21806', 'Nepeña', 'Nepeña, Santa, Áncash', '50', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('451', '21807', 'Samanco', 'Samanco, Santa, Áncash', '50', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('452', '21808', 'Santa', 'Santa, Santa, Áncash', '50', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('453', '21809', 'Nuevo Chimbote', 'Nuevo Chimbote, Santa, Áncash', '50', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('454', '21901', 'Sihuas', 'Sihuas, Sihuas, Áncash', '51', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('455', '21902', 'Acobamba', 'Acobamba, Sihuas, Áncash', '51', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('456', '21903', 'Alfonso Ugarte', 'Alfonso Ugarte, Sihuas, Áncash', '51', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('457', '21904', 'Cashapampa', 'Cashapampa, Sihuas, Áncash', '51', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('458', '21905', 'Chingalpo', 'Chingalpo, Sihuas, Áncash', '51', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('459', '21906', 'Huayllabamba', 'Huayllabamba, Sihuas, Áncash', '51', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('460', '21907', 'Quiches', 'Quiches, Sihuas, Áncash', '51', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('461', '21908', 'Ragash', 'Ragash, Sihuas, Áncash', '51', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('462', '21909', 'San Juan', 'San Juan, Sihuas, Áncash', '51', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('463', '21910', 'Sicsibamba', 'Sicsibamba, Sihuas, Áncash', '51', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('464', '22001', 'Yungay', 'Yungay, Yungay, Áncash', '52', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('465', '22002', 'Cascapara', 'Cascapara, Yungay, Áncash', '52', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('466', '22003', 'Mancos', 'Mancos, Yungay, Áncash', '52', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('467', '22004', 'Matacoto', 'Matacoto, Yungay, Áncash', '52', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('468', '22005', 'Quillo', 'Quillo, Yungay, Áncash', '52', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('469', '22006', 'Ranrahirca', 'Ranrahirca, Yungay, Áncash', '52', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('470', '22007', 'Shupluy', 'Shupluy, Yungay, Áncash', '52', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('471', '22008', 'Yanama', 'Yanama, Yungay, Áncash', '52', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('472', '30101', 'Abancay', 'Abancay, Abancay, Apurímac', '53', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('473', '30102', 'Chacoche', 'Chacoche, Abancay, Apurímac', '53', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('474', '30103', 'Circa', 'Circa, Abancay, Apurímac', '53', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('475', '30104', 'Curahuasi', 'Curahuasi, Abancay, Apurímac', '53', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('476', '30105', 'Huanipaca', 'Huanipaca, Abancay, Apurímac', '53', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('477', '30106', 'Lambrama', 'Lambrama, Abancay, Apurímac', '53', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('478', '30107', 'Pichirhua', 'Pichirhua, Abancay, Apurímac', '53', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('479', '30108', 'San Pedro de Cachora', 'San Pedro de Cachora, Abancay, Apurímac', '53', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('480', '30109', 'Tamburco', 'Tamburco, Abancay, Apurímac', '53', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('481', '30201', 'Andahuaylas', 'Andahuaylas, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('482', '30202', 'Andarapa', 'Andarapa, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('483', '30203', 'Chiara', 'Chiara, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('484', '30204', 'Huancarama', 'Huancarama, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('485', '30205', 'Huancaray', 'Huancaray, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('486', '30206', 'Huayana', 'Huayana, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('487', '30207', 'Kishuara', 'Kishuara, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('488', '30208', 'Pacobamba', 'Pacobamba, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('489', '30209', 'Pacucha', 'Pacucha, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('490', '30210', 'Pampachiri', 'Pampachiri, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('491', '30211', 'Pomacocha', 'Pomacocha, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('492', '30212', 'San Antonio de Cachi', 'San Antonio de Cachi, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('493', '30213', 'San Jerónimo', 'San Jerónimo, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('494', '30214', 'San Miguel de Chaccrampa', 'San Miguel de Chaccrampa, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('495', '30215', 'Santa María de Chicmo', 'Santa María de Chicmo, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('496', '30216', 'Talavera', 'Talavera, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('497', '30217', 'Tumay Huaraca', 'Tumay Huaraca, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('498', '30218', 'Turpo', 'Turpo, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('499', '30219', 'Kaquiabamba', 'Kaquiabamba, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('500', '30220', 'José María Arguedas', 'José María Arguedas, Andahuaylas, Apurímac', '54', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('501', '30301', 'Antabamba', 'Antabamba, Antabamba, Apurímac', '55', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('502', '30302', 'El Oro', 'El Oro, Antabamba, Apurímac', '55', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('503', '30303', 'Huaquirca', 'Huaquirca, Antabamba, Apurímac', '55', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('504', '30304', 'Juan Espinoza Medrano', 'Juan Espinoza Medrano, Antabamba, Apurímac', '55', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('505', '30305', 'Oropesa', 'Oropesa, Antabamba, Apurímac', '55', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('506', '30306', 'Pachaconas', 'Pachaconas, Antabamba, Apurímac', '55', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('507', '30307', 'Sabaino', 'Sabaino, Antabamba, Apurímac', '55', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('508', '30401', 'Chalhuanca', 'Chalhuanca, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('509', '30402', 'Capaya', 'Capaya, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('510', '30403', 'Caraybamba', 'Caraybamba, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('511', '30404', 'Chapimarca', 'Chapimarca, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('512', '30405', 'Colcabamba', 'Colcabamba, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('513', '30406', 'Cotaruse', 'Cotaruse, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('514', '30407', 'Ihuayllo', 'Ihuayllo, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('515', '30408', 'Justo Apu Sahuaraura', 'Justo Apu Sahuaraura, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('516', '30409', 'Lucre', 'Lucre, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('517', '30410', 'Pocohuanca', 'Pocohuanca, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('518', '30411', 'San Juan de Chacña', 'San Juan de Chacña, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('519', '30412', 'Sañayca', 'Sañayca, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('520', '30413', 'Soraya', 'Soraya, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('521', '30414', 'Tapairihua', 'Tapairihua, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('522', '30415', 'Tintay', 'Tintay, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('523', '30416', 'Toraya', 'Toraya, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('524', '30417', 'Yanaca', 'Yanaca, Aymaraes, Apurímac', '56', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('525', '30501', 'Tambobamba', 'Tambobamba, Cotabambas, Apurímac', '57', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('526', '30502', 'Cotabambas', 'Cotabambas, Cotabambas, Apurímac', '57', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('527', '30503', 'Coyllurqui', 'Coyllurqui, Cotabambas, Apurímac', '57', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('528', '30504', 'Haquira', 'Haquira, Cotabambas, Apurímac', '57', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('529', '30505', 'Mara', 'Mara, Cotabambas, Apurímac', '57', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('530', '30506', 'Challhuahuacho', 'Challhuahuacho, Cotabambas, Apurímac', '57', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('531', '30601', 'Chincheros', 'Chincheros, Chincheros, Apurímac', '58', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('532', '30602', 'Anco_Huallo', 'Anco_Huallo, Chincheros, Apurímac', '58', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('533', '30603', 'Cocharcas', 'Cocharcas, Chincheros, Apurímac', '58', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('534', '30604', 'Huaccana', 'Huaccana, Chincheros, Apurímac', '58', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('535', '30605', 'Ocobamba', 'Ocobamba, Chincheros, Apurímac', '58', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('536', '30606', 'Ongoy', 'Ongoy, Chincheros, Apurímac', '58', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('537', '30607', 'Uranmarca', 'Uranmarca, Chincheros, Apurímac', '58', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('538', '30608', 'Ranracancha', 'Ranracancha, Chincheros, Apurímac', '58', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('539', '30609', 'Rocchacc', 'Rocchacc, Chincheros, Apurímac', '58', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('540', '30610', 'El Porvenir', 'El Porvenir, Chincheros, Apurímac', '58', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('541', '30611', 'Los Chankas', 'Los Chankas, Chincheros, Apurímac', '58', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('542', '30701', 'Chuquibambilla', 'Chuquibambilla, Grau, Apurímac', '59', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('543', '30702', 'Curpahuasi', 'Curpahuasi, Grau, Apurímac', '59', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('544', '30703', 'Gamarra', 'Gamarra, Grau, Apurímac', '59', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('545', '30704', 'Huayllati', 'Huayllati, Grau, Apurímac', '59', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('546', '30705', 'Mamara', 'Mamara, Grau, Apurímac', '59', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('547', '30706', 'Micaela Bastidas', 'Micaela Bastidas, Grau, Apurímac', '59', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('548', '30707', 'Pataypampa', 'Pataypampa, Grau, Apurímac', '59', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('549', '30708', 'Progreso', 'Progreso, Grau, Apurímac', '59', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('550', '30709', 'San Antonio', 'San Antonio, Grau, Apurímac', '59', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('551', '30710', 'Santa Rosa', 'Santa Rosa, Grau, Apurímac', '59', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('552', '30711', 'Turpay', 'Turpay, Grau, Apurímac', '59', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('553', '30712', 'Vilcabamba', 'Vilcabamba, Grau, Apurímac', '59', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('554', '30713', 'Virundo', 'Virundo, Grau, Apurímac', '59', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('555', '30714', 'Curasco', 'Curasco, Grau, Apurímac', '59', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('556', '40101', 'Arequipa', 'Arequipa, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('557', '40102', 'Alto Selva Alegre', 'Alto Selva Alegre, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('558', '40103', 'Cayma', 'Cayma, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('559', '40104', 'Cerro Colorado', 'Cerro Colorado, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('560', '40105', 'Characato', 'Characato, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('561', '40106', 'Chiguata', 'Chiguata, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('562', '40107', 'Jacobo Hunter', 'Jacobo Hunter, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('563', '40108', 'La Joya', 'La Joya, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('564', '40109', 'Mariano Melgar', 'Mariano Melgar, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('565', '40110', 'Miraflores', 'Miraflores, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('566', '40111', 'Mollebaya', 'Mollebaya, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('567', '40112', 'Paucarpata', 'Paucarpata, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('568', '40113', 'Pocsi', 'Pocsi, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('569', '40114', 'Polobaya', 'Polobaya, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('570', '40115', 'Quequeña', 'Quequeña, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('571', '40116', 'Sabandia', 'Sabandia, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('572', '40117', 'Sachaca', 'Sachaca, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('573', '40118', 'San Juan de Siguas', 'San Juan de Siguas, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('574', '40119', 'San Juan de Tarucani', 'San Juan de Tarucani, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('575', '40120', 'Santa Isabel de Siguas', 'Santa Isabel de Siguas, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('576', '40121', 'Santa Rita de Siguas', 'Santa Rita de Siguas, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('577', '40122', 'Socabaya', 'Socabaya, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('578', '40123', 'Tiabaya', 'Tiabaya, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('579', '40124', 'Uchumayo', 'Uchumayo, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('580', '40125', 'Vitor', 'Vitor, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('581', '40126', 'Yanahuara', 'Yanahuara, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('582', '40127', 'Yarabamba', 'Yarabamba, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('583', '40128', 'Yura', 'Yura, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('584', '40129', 'José Luis Bustamante Y Rivero', 'José Luis Bustamante Y Rivero, Arequipa, Arequipa', '60', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('585', '40201', 'Camaná', 'Camaná, Camaná, Arequipa', '61', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('586', '40202', 'José María Quimper', 'José María Quimper, Camaná, Arequipa', '61', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('587', '40203', 'Mariano Nicolás Valcárcel', 'Mariano Nicolás Valcárcel, Camaná, Arequipa', '61', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('588', '40204', 'Mariscal Cáceres', 'Mariscal Cáceres, Camaná, Arequipa', '61', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('589', '40205', 'Nicolás de Pierola', 'Nicolás de Pierola, Camaná, Arequipa', '61', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('590', '40206', 'Ocoña', 'Ocoña, Camaná, Arequipa', '61', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('591', '40207', 'Quilca', 'Quilca, Camaná, Arequipa', '61', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('592', '40208', 'Samuel Pastor', 'Samuel Pastor, Camaná, Arequipa', '61', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('593', '40301', 'Caravelí', 'Caravelí, Caravelí, Arequipa', '62', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('594', '40302', 'Acarí', 'Acarí, Caravelí, Arequipa', '62', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('595', '40303', 'Atico', 'Atico, Caravelí, Arequipa', '62', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('596', '40304', 'Atiquipa', 'Atiquipa, Caravelí, Arequipa', '62', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('597', '40305', 'Bella Unión', 'Bella Unión, Caravelí, Arequipa', '62', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('598', '40306', 'Cahuacho', 'Cahuacho, Caravelí, Arequipa', '62', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('599', '40307', 'Chala', 'Chala, Caravelí, Arequipa', '62', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('600', '40308', 'Chaparra', 'Chaparra, Caravelí, Arequipa', '62', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('601', '40309', 'Huanuhuanu', 'Huanuhuanu, Caravelí, Arequipa', '62', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('602', '40310', 'Jaqui', 'Jaqui, Caravelí, Arequipa', '62', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('603', '40311', 'Lomas', 'Lomas, Caravelí, Arequipa', '62', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('604', '40312', 'Quicacha', 'Quicacha, Caravelí, Arequipa', '62', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('605', '40313', 'Yauca', 'Yauca, Caravelí, Arequipa', '62', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('606', '40401', 'Aplao', 'Aplao, Castilla, Arequipa', '63', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('607', '40402', 'Andagua', 'Andagua, Castilla, Arequipa', '63', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('608', '40403', 'Ayo', 'Ayo, Castilla, Arequipa', '63', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('609', '40404', 'Chachas', 'Chachas, Castilla, Arequipa', '63', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('610', '40405', 'Chilcaymarca', 'Chilcaymarca, Castilla, Arequipa', '63', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('611', '40406', 'Choco', 'Choco, Castilla, Arequipa', '63', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('612', '40407', 'Huancarqui', 'Huancarqui, Castilla, Arequipa', '63', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('613', '40408', 'Machaguay', 'Machaguay, Castilla, Arequipa', '63', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('614', '40409', 'Orcopampa', 'Orcopampa, Castilla, Arequipa', '63', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('615', '40410', 'Pampacolca', 'Pampacolca, Castilla, Arequipa', '63', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('616', '40411', 'Tipan', 'Tipan, Castilla, Arequipa', '63', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('617', '40412', 'Uñon', 'Uñon, Castilla, Arequipa', '63', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('618', '40413', 'Uraca', 'Uraca, Castilla, Arequipa', '63', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('619', '40414', 'Viraco', 'Viraco, Castilla, Arequipa', '63', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('620', '40501', 'Chivay', 'Chivay, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('621', '40502', 'Achoma', 'Achoma, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('622', '40503', 'Cabanaconde', 'Cabanaconde, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('623', '40504', 'Callalli', 'Callalli, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('624', '40505', 'Caylloma', 'Caylloma, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('625', '40506', 'Coporaque', 'Coporaque, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('626', '40507', 'Huambo', 'Huambo, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('627', '40508', 'Huanca', 'Huanca, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('628', '40509', 'Ichupampa', 'Ichupampa, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('629', '40510', 'Lari', 'Lari, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('630', '40511', 'Lluta', 'Lluta, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('631', '40512', 'Maca', 'Maca, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('632', '40513', 'Madrigal', 'Madrigal, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('633', '40514', 'San Antonio de Chuca', 'San Antonio de Chuca, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('634', '40515', 'Sibayo', 'Sibayo, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('635', '40516', 'Tapay', 'Tapay, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('636', '40517', 'Tisco', 'Tisco, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('637', '40518', 'Tuti', 'Tuti, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('638', '40519', 'Yanque', 'Yanque, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('639', '40520', 'Majes', 'Majes, Caylloma, Arequipa', '64', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('640', '40601', 'Chuquibamba', 'Chuquibamba, Condesuyos, Arequipa', '65', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('641', '40602', 'Andaray', 'Andaray, Condesuyos, Arequipa', '65', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('642', '40603', 'Cayarani', 'Cayarani, Condesuyos, Arequipa', '65', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('643', '40604', 'Chichas', 'Chichas, Condesuyos, Arequipa', '65', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('644', '40605', 'Iray', 'Iray, Condesuyos, Arequipa', '65', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('645', '40606', 'Río Grande', 'Río Grande, Condesuyos, Arequipa', '65', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('646', '40607', 'Salamanca', 'Salamanca, Condesuyos, Arequipa', '65', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('647', '40608', 'Yanaquihua', 'Yanaquihua, Condesuyos, Arequipa', '65', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('648', '40701', 'Mollendo', 'Mollendo, Islay, Arequipa', '66', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('649', '40702', 'Cocachacra', 'Cocachacra, Islay, Arequipa', '66', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('650', '40703', 'Dean Valdivia', 'Dean Valdivia, Islay, Arequipa', '66', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('651', '40704', 'Islay', 'Islay, Islay, Arequipa', '66', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('652', '40705', 'Mejia', 'Mejia, Islay, Arequipa', '66', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('653', '40706', 'Punta de Bombón', 'Punta de Bombón, Islay, Arequipa', '66', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('654', '40801', 'Cotahuasi', 'Cotahuasi, La Uniòn, Arequipa', '67', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('655', '40802', 'Alca', 'Alca, La Uniòn, Arequipa', '67', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('656', '40803', 'Charcana', 'Charcana, La Uniòn, Arequipa', '67', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('657', '40804', 'Huaynacotas', 'Huaynacotas, La Uniòn, Arequipa', '67', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('658', '40805', 'Pampamarca', 'Pampamarca, La Uniòn, Arequipa', '67', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('659', '40806', 'Puyca', 'Puyca, La Uniòn, Arequipa', '67', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('660', '40807', 'Quechualla', 'Quechualla, La Uniòn, Arequipa', '67', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('661', '40808', 'Sayla', 'Sayla, La Uniòn, Arequipa', '67', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('662', '40809', 'Tauria', 'Tauria, La Uniòn, Arequipa', '67', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('663', '40810', 'Tomepampa', 'Tomepampa, La Uniòn, Arequipa', '67', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('664', '40811', 'Toro', 'Toro, La Uniòn, Arequipa', '67', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('665', '50101', 'Ayacucho', 'Ayacucho, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('666', '50102', 'Acocro', 'Acocro, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('667', '50103', 'Acos Vinchos', 'Acos Vinchos, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('668', '50104', 'Carmen Alto', 'Carmen Alto, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('669', '50105', 'Chiara', 'Chiara, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('670', '50106', 'Ocros', 'Ocros, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('671', '50107', 'Pacaycasa', 'Pacaycasa, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('672', '50108', 'Quinua', 'Quinua, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('673', '50109', 'San José de Ticllas', 'San José de Ticllas, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('674', '50110', 'San Juan Bautista', 'San Juan Bautista, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('675', '50111', 'Santiago de Pischa', 'Santiago de Pischa, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('676', '50112', 'Socos', 'Socos, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('677', '50113', 'Tambillo', 'Tambillo, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('678', '50114', 'Vinchos', 'Vinchos, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('679', '50115', 'Jesús Nazareno', 'Jesús Nazareno, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('680', '50116', 'Andrés Avelino Cáceres Dorregaray', 'Andrés Avelino Cáceres Dorregaray, Huamanga, Ayacucho', '68', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('681', '50201', 'Cangallo', 'Cangallo, Cangallo, Ayacucho', '69', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('682', '50202', 'Chuschi', 'Chuschi, Cangallo, Ayacucho', '69', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('683', '50203', 'Los Morochucos', 'Los Morochucos, Cangallo, Ayacucho', '69', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('684', '50204', 'María Parado de Bellido', 'María Parado de Bellido, Cangallo, Ayacucho', '69', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('685', '50205', 'Paras', 'Paras, Cangallo, Ayacucho', '69', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('686', '50206', 'Totos', 'Totos, Cangallo, Ayacucho', '69', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('687', '50301', 'Sancos', 'Sancos, Huanca Sancos, Ayacucho', '70', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('688', '50302', 'Carapo', 'Carapo, Huanca Sancos, Ayacucho', '70', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('689', '50303', 'Sacsamarca', 'Sacsamarca, Huanca Sancos, Ayacucho', '70', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('690', '50304', 'Santiago de Lucanamarca', 'Santiago de Lucanamarca, Huanca Sancos, Ayacucho', '70', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('691', '50401', 'Huanta', 'Huanta, Huanta, Ayacucho', '71', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('692', '50402', 'Ayahuanco', 'Ayahuanco, Huanta, Ayacucho', '71', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('693', '50403', 'Huamanguilla', 'Huamanguilla, Huanta, Ayacucho', '71', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('694', '50404', 'Iguain', 'Iguain, Huanta, Ayacucho', '71', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('695', '50405', 'Luricocha', 'Luricocha, Huanta, Ayacucho', '71', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('696', '50406', 'Santillana', 'Santillana, Huanta, Ayacucho', '71', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('697', '50407', 'Sivia', 'Sivia, Huanta, Ayacucho', '71', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('698', '50408', 'Llochegua', 'Llochegua, Huanta, Ayacucho', '71', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('699', '50409', 'Canayre', 'Canayre, Huanta, Ayacucho', '71', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('700', '50410', 'Uchuraccay', 'Uchuraccay, Huanta, Ayacucho', '71', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('701', '50411', 'Pucacolpa', 'Pucacolpa, Huanta, Ayacucho', '71', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('702', '50412', 'Chaca', 'Chaca, Huanta, Ayacucho', '71', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('703', '50501', 'San Miguel', 'San Miguel, La Mar, Ayacucho', '72', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('704', '50502', 'Anco', 'Anco, La Mar, Ayacucho', '72', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('705', '50503', 'Ayna', 'Ayna, La Mar, Ayacucho', '72', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('706', '50504', 'Chilcas', 'Chilcas, La Mar, Ayacucho', '72', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('707', '50505', 'Chungui', 'Chungui, La Mar, Ayacucho', '72', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('708', '50506', 'Luis Carranza', 'Luis Carranza, La Mar, Ayacucho', '72', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('709', '50507', 'Santa Rosa', 'Santa Rosa, La Mar, Ayacucho', '72', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('710', '50508', 'Tambo', 'Tambo, La Mar, Ayacucho', '72', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('711', '50509', 'Samugari', 'Samugari, La Mar, Ayacucho', '72', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('712', '50510', 'Anchihuay', 'Anchihuay, La Mar, Ayacucho', '72', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('713', '50511', 'Oronccoy', 'Oronccoy, La Mar, Ayacucho', '72', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('714', '50601', 'Puquio', 'Puquio, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('715', '50602', 'Aucara', 'Aucara, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('716', '50603', 'Cabana', 'Cabana, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('717', '50604', 'Carmen Salcedo', 'Carmen Salcedo, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('718', '50605', 'Chaviña', 'Chaviña, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('719', '50606', 'Chipao', 'Chipao, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('720', '50607', 'Huac-Huas', 'Huac-Huas, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('721', '50608', 'Laramate', 'Laramate, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('722', '50609', 'Leoncio Prado', 'Leoncio Prado, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('723', '50610', 'Llauta', 'Llauta, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('724', '50611', 'Lucanas', 'Lucanas, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('725', '50612', 'Ocaña', 'Ocaña, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('726', '50613', 'Otoca', 'Otoca, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('727', '50614', 'Saisa', 'Saisa, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('728', '50615', 'San Cristóbal', 'San Cristóbal, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('729', '50616', 'San Juan', 'San Juan, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('730', '50617', 'San Pedro', 'San Pedro, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('731', '50618', 'San Pedro de Palco', 'San Pedro de Palco, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('732', '50619', 'Sancos', 'Sancos, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('733', '50620', 'Santa Ana de Huaycahuacho', 'Santa Ana de Huaycahuacho, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('734', '50621', 'Santa Lucia', 'Santa Lucia, Lucanas, Ayacucho', '73', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('735', '50701', 'Coracora', 'Coracora, Parinacochas, Ayacucho', '74', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('736', '50702', 'Chumpi', 'Chumpi, Parinacochas, Ayacucho', '74', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('737', '50703', 'Coronel Castañeda', 'Coronel Castañeda, Parinacochas, Ayacucho', '74', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('738', '50704', 'Pacapausa', 'Pacapausa, Parinacochas, Ayacucho', '74', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('739', '50705', 'Pullo', 'Pullo, Parinacochas, Ayacucho', '74', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('740', '50706', 'Puyusca', 'Puyusca, Parinacochas, Ayacucho', '74', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('741', '50707', 'San Francisco de Ravacayco', 'San Francisco de Ravacayco, Parinacochas, Ayacucho', '74', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('742', '50708', 'Upahuacho', 'Upahuacho, Parinacochas, Ayacucho', '74', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('743', '50801', 'Pausa', 'Pausa, Pàucar del Sara Sara, Ayacucho', '75', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('744', '50802', 'Colta', 'Colta, Pàucar del Sara Sara, Ayacucho', '75', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('745', '50803', 'Corculla', 'Corculla, Pàucar del Sara Sara, Ayacucho', '75', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('746', '50804', 'Lampa', 'Lampa, Pàucar del Sara Sara, Ayacucho', '75', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('747', '50805', 'Marcabamba', 'Marcabamba, Pàucar del Sara Sara, Ayacucho', '75', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('748', '50806', 'Oyolo', 'Oyolo, Pàucar del Sara Sara, Ayacucho', '75', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('749', '50807', 'Pararca', 'Pararca, Pàucar del Sara Sara, Ayacucho', '75', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('750', '50808', 'San Javier de Alpabamba', 'San Javier de Alpabamba, Pàucar del Sara Sara, Ayacucho', '75', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('751', '50809', 'San José de Ushua', 'San José de Ushua, Pàucar del Sara Sara, Ayacucho', '75', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('752', '50810', 'Sara Sara', 'Sara Sara, Pàucar del Sara Sara, Ayacucho', '75', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('753', '50901', 'Querobamba', 'Querobamba, Sucre, Ayacucho', '76', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('754', '50902', 'Belén', 'Belén, Sucre, Ayacucho', '76', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('755', '50903', 'Chalcos', 'Chalcos, Sucre, Ayacucho', '76', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('756', '50904', 'Chilcayoc', 'Chilcayoc, Sucre, Ayacucho', '76', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('757', '50905', 'Huacaña', 'Huacaña, Sucre, Ayacucho', '76', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('758', '50906', 'Morcolla', 'Morcolla, Sucre, Ayacucho', '76', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('759', '50907', 'Paico', 'Paico, Sucre, Ayacucho', '76', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('760', '50908', 'San Pedro de Larcay', 'San Pedro de Larcay, Sucre, Ayacucho', '76', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('761', '50909', 'San Salvador de Quije', 'San Salvador de Quije, Sucre, Ayacucho', '76', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('762', '50910', 'Santiago de Paucaray', 'Santiago de Paucaray, Sucre, Ayacucho', '76', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('763', '50911', 'Soras', 'Soras, Sucre, Ayacucho', '76', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('764', '51001', 'Huancapi', 'Huancapi, Víctor Fajardo, Ayacucho', '77', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('765', '51002', 'Alcamenca', 'Alcamenca, Víctor Fajardo, Ayacucho', '77', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('766', '51003', 'Apongo', 'Apongo, Víctor Fajardo, Ayacucho', '77', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('767', '51004', 'Asquipata', 'Asquipata, Víctor Fajardo, Ayacucho', '77', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('768', '51005', 'Canaria', 'Canaria, Víctor Fajardo, Ayacucho', '77', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('769', '51006', 'Cayara', 'Cayara, Víctor Fajardo, Ayacucho', '77', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('770', '51007', 'Colca', 'Colca, Víctor Fajardo, Ayacucho', '77', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('771', '51008', 'Huamanquiquia', 'Huamanquiquia, Víctor Fajardo, Ayacucho', '77', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('772', '51009', 'Huancaraylla', 'Huancaraylla, Víctor Fajardo, Ayacucho', '77', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('773', '51010', 'Huaya', 'Huaya, Víctor Fajardo, Ayacucho', '77', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('774', '51011', 'Sarhua', 'Sarhua, Víctor Fajardo, Ayacucho', '77', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('775', '51012', 'Vilcanchos', 'Vilcanchos, Víctor Fajardo, Ayacucho', '77', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('776', '51101', 'Vilcas Huaman', 'Vilcas Huaman, Vilcas Huamán, Ayacucho', '78', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('777', '51102', 'Accomarca', 'Accomarca, Vilcas Huamán, Ayacucho', '78', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('778', '51103', 'Carhuanca', 'Carhuanca, Vilcas Huamán, Ayacucho', '78', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('779', '51104', 'Concepción', 'Concepción, Vilcas Huamán, Ayacucho', '78', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('780', '51105', 'Huambalpa', 'Huambalpa, Vilcas Huamán, Ayacucho', '78', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('781', '51106', 'Independencia', 'Independencia, Vilcas Huamán, Ayacucho', '78', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('782', '51107', 'Saurama', 'Saurama, Vilcas Huamán, Ayacucho', '78', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('783', '51108', 'Vischongo', 'Vischongo, Vilcas Huamán, Ayacucho', '78', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('784', '60101', 'Cajamarca', 'Cajamarca, Cajamarca, Cajamarca', '79', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('785', '60102', 'Asunción', 'Asunción, Cajamarca, Cajamarca', '79', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('786', '60103', 'Chetilla', 'Chetilla, Cajamarca, Cajamarca', '79', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('787', '60104', 'Cospan', 'Cospan, Cajamarca, Cajamarca', '79', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('788', '60105', 'Encañada', 'Encañada, Cajamarca, Cajamarca', '79', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('789', '60106', 'Jesús', 'Jesús, Cajamarca, Cajamarca', '79', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('790', '60107', 'Llacanora', 'Llacanora, Cajamarca, Cajamarca', '79', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('791', '60108', 'Los Baños del Inca', 'Los Baños del Inca, Cajamarca, Cajamarca', '79', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('792', '60109', 'Magdalena', 'Magdalena, Cajamarca, Cajamarca', '79', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('793', '60110', 'Matara', 'Matara, Cajamarca, Cajamarca', '79', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('794', '60111', 'Namora', 'Namora, Cajamarca, Cajamarca', '79', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('795', '60112', 'San Juan', 'San Juan, Cajamarca, Cajamarca', '79', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('796', '60201', 'Cajabamba', 'Cajabamba, Cajabamba, Cajamarca', '80', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('797', '60202', 'Cachachi', 'Cachachi, Cajabamba, Cajamarca', '80', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('798', '60203', 'Condebamba', 'Condebamba, Cajabamba, Cajamarca', '80', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('799', '60204', 'Sitacocha', 'Sitacocha, Cajabamba, Cajamarca', '80', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('800', '60301', 'Celendín', 'Celendín, Celendín, Cajamarca', '81', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('801', '60302', 'Chumuch', 'Chumuch, Celendín, Cajamarca', '81', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('802', '60303', 'Cortegana', 'Cortegana, Celendín, Cajamarca', '81', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('803', '60304', 'Huasmin', 'Huasmin, Celendín, Cajamarca', '81', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('804', '60305', 'Jorge Chávez', 'Jorge Chávez, Celendín, Cajamarca', '81', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('805', '60306', 'José Gálvez', 'José Gálvez, Celendín, Cajamarca', '81', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('806', '60307', 'Miguel Iglesias', 'Miguel Iglesias, Celendín, Cajamarca', '81', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('807', '60308', 'Oxamarca', 'Oxamarca, Celendín, Cajamarca', '81', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('808', '60309', 'Sorochuco', 'Sorochuco, Celendín, Cajamarca', '81', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('809', '60310', 'Sucre', 'Sucre, Celendín, Cajamarca', '81', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('810', '60311', 'Utco', 'Utco, Celendín, Cajamarca', '81', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('811', '60312', 'La Libertad de Pallan', 'La Libertad de Pallan, Celendín, Cajamarca', '81', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('812', '60401', 'Chota', 'Chota, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('813', '60402', 'Anguia', 'Anguia, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('814', '60403', 'Chadin', 'Chadin, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('815', '60404', 'Chiguirip', 'Chiguirip, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('816', '60405', 'Chimban', 'Chimban, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('817', '60406', 'Choropampa', 'Choropampa, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('818', '60407', 'Cochabamba', 'Cochabamba, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('819', '60408', 'Conchan', 'Conchan, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('820', '60409', 'Huambos', 'Huambos, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('821', '60410', 'Lajas', 'Lajas, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('822', '60411', 'Llama', 'Llama, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('823', '60412', 'Miracosta', 'Miracosta, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('824', '60413', 'Paccha', 'Paccha, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('825', '60414', 'Pion', 'Pion, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('826', '60415', 'Querocoto', 'Querocoto, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('827', '60416', 'San Juan de Licupis', 'San Juan de Licupis, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('828', '60417', 'Tacabamba', 'Tacabamba, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('829', '60418', 'Tocmoche', 'Tocmoche, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('830', '60419', 'Chalamarca', 'Chalamarca, Chota, Cajamarca', '82', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('831', '60501', 'Contumaza', 'Contumaza, Contumazá, Cajamarca', '83', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('832', '60502', 'Chilete', 'Chilete, Contumazá, Cajamarca', '83', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('833', '60503', 'Cupisnique', 'Cupisnique, Contumazá, Cajamarca', '83', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('834', '60504', 'Guzmango', 'Guzmango, Contumazá, Cajamarca', '83', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('835', '60505', 'San Benito', 'San Benito, Contumazá, Cajamarca', '83', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('836', '60506', 'Santa Cruz de Toledo', 'Santa Cruz de Toledo, Contumazá, Cajamarca', '83', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('837', '60507', 'Tantarica', 'Tantarica, Contumazá, Cajamarca', '83', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('838', '60508', 'Yonan', 'Yonan, Contumazá, Cajamarca', '83', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('839', '60601', 'Cutervo', 'Cutervo, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('840', '60602', 'Callayuc', 'Callayuc, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('841', '60603', 'Choros', 'Choros, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('842', '60604', 'Cujillo', 'Cujillo, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('843', '60605', 'La Ramada', 'La Ramada, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('844', '60606', 'Pimpingos', 'Pimpingos, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('845', '60607', 'Querocotillo', 'Querocotillo, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('846', '60608', 'San Andrés de Cutervo', 'San Andrés de Cutervo, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('847', '60609', 'San Juan de Cutervo', 'San Juan de Cutervo, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('848', '60610', 'San Luis de Lucma', 'San Luis de Lucma, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('849', '60611', 'Santa Cruz', 'Santa Cruz, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('850', '60612', 'Santo Domingo de la Capilla', 'Santo Domingo de la Capilla, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('851', '60613', 'Santo Tomas', 'Santo Tomas, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('852', '60614', 'Socota', 'Socota, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('853', '60615', 'Toribio Casanova', 'Toribio Casanova, Cutervo, Cajamarca', '84', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('854', '60701', 'Bambamarca', 'Bambamarca, Hualgayoc, Cajamarca', '85', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('855', '60702', 'Chugur', 'Chugur, Hualgayoc, Cajamarca', '85', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('856', '60703', 'Hualgayoc', 'Hualgayoc, Hualgayoc, Cajamarca', '85', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('857', '60801', 'Jaén', 'Jaén, Jaén, Cajamarca', '86', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('858', '60802', 'Bellavista', 'Bellavista, Jaén, Cajamarca', '86', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('859', '60803', 'Chontali', 'Chontali, Jaén, Cajamarca', '86', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('860', '60804', 'Colasay', 'Colasay, Jaén, Cajamarca', '86', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('861', '60805', 'Huabal', 'Huabal, Jaén, Cajamarca', '86', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('862', '60806', 'Las Pirias', 'Las Pirias, Jaén, Cajamarca', '86', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('863', '60807', 'Pomahuaca', 'Pomahuaca, Jaén, Cajamarca', '86', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('864', '60808', 'Pucara', 'Pucara, Jaén, Cajamarca', '86', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('865', '60809', 'Sallique', 'Sallique, Jaén, Cajamarca', '86', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('866', '60810', 'San Felipe', 'San Felipe, Jaén, Cajamarca', '86', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('867', '60811', 'San José del Alto', 'San José del Alto, Jaén, Cajamarca', '86', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('868', '60812', 'Santa Rosa', 'Santa Rosa, Jaén, Cajamarca', '86', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('869', '60901', 'San Ignacio', 'San Ignacio, San Ignacio, Cajamarca', '87', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('870', '60902', 'Chirinos', 'Chirinos, San Ignacio, Cajamarca', '87', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('871', '60903', 'Huarango', 'Huarango, San Ignacio, Cajamarca', '87', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('872', '60904', 'La Coipa', 'La Coipa, San Ignacio, Cajamarca', '87', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('873', '60905', 'Namballe', 'Namballe, San Ignacio, Cajamarca', '87', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('874', '60906', 'San José de Lourdes', 'San José de Lourdes, San Ignacio, Cajamarca', '87', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('875', '60907', 'Tabaconas', 'Tabaconas, San Ignacio, Cajamarca', '87', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('876', '61001', 'Pedro Gálvez', 'Pedro Gálvez, San Marcos, Cajamarca', '88', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('877', '61002', 'Chancay', 'Chancay, San Marcos, Cajamarca', '88', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('878', '61003', 'Eduardo Villanueva', 'Eduardo Villanueva, San Marcos, Cajamarca', '88', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('879', '61004', 'Gregorio Pita', 'Gregorio Pita, San Marcos, Cajamarca', '88', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('880', '61005', 'Ichocan', 'Ichocan, San Marcos, Cajamarca', '88', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('881', '61006', 'José Manuel Quiroz', 'José Manuel Quiroz, San Marcos, Cajamarca', '88', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('882', '61007', 'José Sabogal', 'José Sabogal, San Marcos, Cajamarca', '88', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('883', '61101', 'San Miguel', 'San Miguel, San Miguel, Cajamarca', '89', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('884', '61102', 'Bolívar', 'Bolívar, San Miguel, Cajamarca', '89', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('885', '61103', 'Calquis', 'Calquis, San Miguel, Cajamarca', '89', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('886', '61104', 'Catilluc', 'Catilluc, San Miguel, Cajamarca', '89', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('887', '61105', 'El Prado', 'El Prado, San Miguel, Cajamarca', '89', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('888', '61106', 'La Florida', 'La Florida, San Miguel, Cajamarca', '89', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('889', '61107', 'Llapa', 'Llapa, San Miguel, Cajamarca', '89', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('890', '61108', 'Nanchoc', 'Nanchoc, San Miguel, Cajamarca', '89', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('891', '61109', 'Niepos', 'Niepos, San Miguel, Cajamarca', '89', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('892', '61110', 'San Gregorio', 'San Gregorio, San Miguel, Cajamarca', '89', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('893', '61111', 'San Silvestre de Cochan', 'San Silvestre de Cochan, San Miguel, Cajamarca', '89', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('894', '61112', 'Tongod', 'Tongod, San Miguel, Cajamarca', '89', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('895', '61113', 'Unión Agua Blanca', 'Unión Agua Blanca, San Miguel, Cajamarca', '89', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('896', '61201', 'San Pablo', 'San Pablo, San Pablo, Cajamarca', '90', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('897', '61202', 'San Bernardino', 'San Bernardino, San Pablo, Cajamarca', '90', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('898', '61203', 'San Luis', 'San Luis, San Pablo, Cajamarca', '90', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('899', '61204', 'Tumbaden', 'Tumbaden, San Pablo, Cajamarca', '90', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('900', '61301', 'Santa Cruz', 'Santa Cruz, Santa Cruz, Cajamarca', '91', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('901', '61302', 'Andabamba', 'Andabamba, Santa Cruz, Cajamarca', '91', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('902', '61303', 'Catache', 'Catache, Santa Cruz, Cajamarca', '91', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('903', '61304', 'Chancaybaños', 'Chancaybaños, Santa Cruz, Cajamarca', '91', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('904', '61305', 'La Esperanza', 'La Esperanza, Santa Cruz, Cajamarca', '91', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('905', '61306', 'Ninabamba', 'Ninabamba, Santa Cruz, Cajamarca', '91', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('906', '61307', 'Pulan', 'Pulan, Santa Cruz, Cajamarca', '91', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('907', '61308', 'Saucepampa', 'Saucepampa, Santa Cruz, Cajamarca', '91', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('908', '61309', 'Sexi', 'Sexi, Santa Cruz, Cajamarca', '91', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('909', '61310', 'Uticyacu', 'Uticyacu, Santa Cruz, Cajamarca', '91', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('910', '61311', 'Yauyucan', 'Yauyucan, Santa Cruz, Cajamarca', '91', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('911', '70101', 'Callao', 'Callao, Prov. Const. del Callao, Callao', '92', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('912', '70102', 'Bellavista', 'Bellavista, Prov. Const. del Callao, Callao', '92', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('913', '70103', 'Carmen de la Legua Reynoso', 'Carmen de la Legua Reynoso, Prov. Const. del Callao, Callao', '92', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('914', '70104', 'La Perla', 'La Perla, Prov. Const. del Callao, Callao', '92', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('915', '70105', 'La Punta', 'La Punta, Prov. Const. del Callao, Callao', '92', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('916', '70106', 'Ventanilla', 'Ventanilla, Prov. Const. del Callao, Callao', '92', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('917', '70107', 'Mi Perú', 'Mi Perú, Prov. Const. del Callao, Callao', '92', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('918', '80101', 'Cusco', 'Cusco, Cusco, Cusco', '93', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('919', '80102', 'Ccorca', 'Ccorca, Cusco, Cusco', '93', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('920', '80103', 'Poroy', 'Poroy, Cusco, Cusco', '93', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('921', '80104', 'San Jerónimo', 'San Jerónimo, Cusco, Cusco', '93', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('922', '80105', 'San Sebastian', 'San Sebastian, Cusco, Cusco', '93', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('923', '80106', 'Santiago', 'Santiago, Cusco, Cusco', '93', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('924', '80107', 'Saylla', 'Saylla, Cusco, Cusco', '93', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('925', '80108', 'Wanchaq', 'Wanchaq, Cusco, Cusco', '93', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('926', '80201', 'Acomayo', 'Acomayo, Acomayo, Cusco', '94', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('927', '80202', 'Acopia', 'Acopia, Acomayo, Cusco', '94', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('928', '80203', 'Acos', 'Acos, Acomayo, Cusco', '94', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('929', '80204', 'Mosoc Llacta', 'Mosoc Llacta, Acomayo, Cusco', '94', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('930', '80205', 'Pomacanchi', 'Pomacanchi, Acomayo, Cusco', '94', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('931', '80206', 'Rondocan', 'Rondocan, Acomayo, Cusco', '94', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('932', '80207', 'Sangarara', 'Sangarara, Acomayo, Cusco', '94', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('933', '80301', 'Anta', 'Anta, Anta, Cusco', '95', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('934', '80302', 'Ancahuasi', 'Ancahuasi, Anta, Cusco', '95', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('935', '80303', 'Cachimayo', 'Cachimayo, Anta, Cusco', '95', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('936', '80304', 'Chinchaypujio', 'Chinchaypujio, Anta, Cusco', '95', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('937', '80305', 'Huarocondo', 'Huarocondo, Anta, Cusco', '95', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('938', '80306', 'Limatambo', 'Limatambo, Anta, Cusco', '95', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('939', '80307', 'Mollepata', 'Mollepata, Anta, Cusco', '95', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('940', '80308', 'Pucyura', 'Pucyura, Anta, Cusco', '95', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('941', '80309', 'Zurite', 'Zurite, Anta, Cusco', '95', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('942', '80401', 'Calca', 'Calca, Calca, Cusco', '96', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('943', '80402', 'Coya', 'Coya, Calca, Cusco', '96', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('944', '80403', 'Lamay', 'Lamay, Calca, Cusco', '96', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('945', '80404', 'Lares', 'Lares, Calca, Cusco', '96', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('946', '80405', 'Pisac', 'Pisac, Calca, Cusco', '96', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('947', '80406', 'San Salvador', 'San Salvador, Calca, Cusco', '96', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('948', '80407', 'Taray', 'Taray, Calca, Cusco', '96', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('949', '80408', 'Yanatile', 'Yanatile, Calca, Cusco', '96', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('950', '80501', 'Yanaoca', 'Yanaoca, Canas, Cusco', '97', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('951', '80502', 'Checca', 'Checca, Canas, Cusco', '97', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('952', '80503', 'Kunturkanki', 'Kunturkanki, Canas, Cusco', '97', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('953', '80504', 'Langui', 'Langui, Canas, Cusco', '97', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('954', '80505', 'Layo', 'Layo, Canas, Cusco', '97', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('955', '80506', 'Pampamarca', 'Pampamarca, Canas, Cusco', '97', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('956', '80507', 'Quehue', 'Quehue, Canas, Cusco', '97', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('957', '80508', 'Tupac Amaru', 'Tupac Amaru, Canas, Cusco', '97', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('958', '80601', 'Sicuani', 'Sicuani, Canchis, Cusco', '98', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('959', '80602', 'Checacupe', 'Checacupe, Canchis, Cusco', '98', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('960', '80603', 'Combapata', 'Combapata, Canchis, Cusco', '98', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('961', '80604', 'Marangani', 'Marangani, Canchis, Cusco', '98', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('962', '80605', 'Pitumarca', 'Pitumarca, Canchis, Cusco', '98', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('963', '80606', 'San Pablo', 'San Pablo, Canchis, Cusco', '98', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('964', '80607', 'San Pedro', 'San Pedro, Canchis, Cusco', '98', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('965', '80608', 'Tinta', 'Tinta, Canchis, Cusco', '98', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('966', '80701', 'Santo Tomas', 'Santo Tomas, Chumbivilcas, Cusco', '99', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('967', '80702', 'Capacmarca', 'Capacmarca, Chumbivilcas, Cusco', '99', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('968', '80703', 'Chamaca', 'Chamaca, Chumbivilcas, Cusco', '99', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('969', '80704', 'Colquemarca', 'Colquemarca, Chumbivilcas, Cusco', '99', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('970', '80705', 'Livitaca', 'Livitaca, Chumbivilcas, Cusco', '99', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('971', '80706', 'Llusco', 'Llusco, Chumbivilcas, Cusco', '99', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('972', '80707', 'Quiñota', 'Quiñota, Chumbivilcas, Cusco', '99', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('973', '80708', 'Velille', 'Velille, Chumbivilcas, Cusco', '99', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('974', '80801', 'Espinar', 'Espinar, Espinar, Cusco', '100', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('975', '80802', 'Condoroma', 'Condoroma, Espinar, Cusco', '100', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('976', '80803', 'Coporaque', 'Coporaque, Espinar, Cusco', '100', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('977', '80804', 'Ocoruro', 'Ocoruro, Espinar, Cusco', '100', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('978', '80805', 'Pallpata', 'Pallpata, Espinar, Cusco', '100', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('979', '80806', 'Pichigua', 'Pichigua, Espinar, Cusco', '100', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('980', '80807', 'Suyckutambo', 'Suyckutambo, Espinar, Cusco', '100', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('981', '80808', 'Alto Pichigua', 'Alto Pichigua, Espinar, Cusco', '100', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('982', '80901', 'Santa Ana', 'Santa Ana, La Convención, Cusco', '101', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('983', '80902', 'Echarate', 'Echarate, La Convención, Cusco', '101', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('984', '80903', 'Huayopata', 'Huayopata, La Convención, Cusco', '101', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('985', '80904', 'Maranura', 'Maranura, La Convención, Cusco', '101', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('986', '80905', 'Ocobamba', 'Ocobamba, La Convención, Cusco', '101', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('987', '80906', 'Quellouno', 'Quellouno, La Convención, Cusco', '101', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('988', '80907', 'Kimbiri', 'Kimbiri, La Convención, Cusco', '101', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('989', '80908', 'Santa Teresa', 'Santa Teresa, La Convención, Cusco', '101', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('990', '80909', 'Vilcabamba', 'Vilcabamba, La Convención, Cusco', '101', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('991', '80910', 'Pichari', 'Pichari, La Convención, Cusco', '101', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('992', '80911', 'Inkawasi', 'Inkawasi, La Convención, Cusco', '101', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('993', '80912', 'Villa Virgen', 'Villa Virgen, La Convención, Cusco', '101', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('994', '80913', 'Villa Kintiarina', 'Villa Kintiarina, La Convención, Cusco', '101', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('995', '80914', 'Megantoni', 'Megantoni, La Convención, Cusco', '101', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('996', '81001', 'Paruro', 'Paruro, Paruro, Cusco', '102', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('997', '81002', 'Accha', 'Accha, Paruro, Cusco', '102', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('998', '81003', 'Ccapi', 'Ccapi, Paruro, Cusco', '102', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('999', '81004', 'Colcha', 'Colcha, Paruro, Cusco', '102', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1000', '81005', 'Huanoquite', 'Huanoquite, Paruro, Cusco', '102', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1001', '81006', 'Omacha', 'Omacha, Paruro, Cusco', '102', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1002', '81007', 'Paccaritambo', 'Paccaritambo, Paruro, Cusco', '102', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1003', '81008', 'Pillpinto', 'Pillpinto, Paruro, Cusco', '102', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1004', '81009', 'Yaurisque', 'Yaurisque, Paruro, Cusco', '102', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1005', '81101', 'Paucartambo', 'Paucartambo, Paucartambo, Cusco', '103', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1006', '81102', 'Caicay', 'Caicay, Paucartambo, Cusco', '103', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1007', '81103', 'Challabamba', 'Challabamba, Paucartambo, Cusco', '103', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1008', '81104', 'Colquepata', 'Colquepata, Paucartambo, Cusco', '103', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1009', '81105', 'Huancarani', 'Huancarani, Paucartambo, Cusco', '103', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1010', '81106', 'Kosñipata', 'Kosñipata, Paucartambo, Cusco', '103', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1011', '81201', 'Urcos', 'Urcos, Quispicanchi, Cusco', '104', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1012', '81202', 'Andahuaylillas', 'Andahuaylillas, Quispicanchi, Cusco', '104', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1013', '81203', 'Camanti', 'Camanti, Quispicanchi, Cusco', '104', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1014', '81204', 'Ccarhuayo', 'Ccarhuayo, Quispicanchi, Cusco', '104', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1015', '81205', 'Ccatca', 'Ccatca, Quispicanchi, Cusco', '104', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1016', '81206', 'Cusipata', 'Cusipata, Quispicanchi, Cusco', '104', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1017', '81207', 'Huaro', 'Huaro, Quispicanchi, Cusco', '104', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1018', '81208', 'Lucre', 'Lucre, Quispicanchi, Cusco', '104', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1019', '81209', 'Marcapata', 'Marcapata, Quispicanchi, Cusco', '104', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1020', '81210', 'Ocongate', 'Ocongate, Quispicanchi, Cusco', '104', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1021', '81211', 'Oropesa', 'Oropesa, Quispicanchi, Cusco', '104', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1022', '81212', 'Quiquijana', 'Quiquijana, Quispicanchi, Cusco', '104', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1023', '81301', 'Urubamba', 'Urubamba, Urubamba, Cusco', '105', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1024', '81302', 'Chinchero', 'Chinchero, Urubamba, Cusco', '105', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1025', '81303', 'Huayllabamba', 'Huayllabamba, Urubamba, Cusco', '105', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1026', '81304', 'Machupicchu', 'Machupicchu, Urubamba, Cusco', '105', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1027', '81305', 'Maras', 'Maras, Urubamba, Cusco', '105', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1028', '81306', 'Ollantaytambo', 'Ollantaytambo, Urubamba, Cusco', '105', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1029', '81307', 'Yucay', 'Yucay, Urubamba, Cusco', '105', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1030', '90101', 'Huancavelica', 'Huancavelica, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1031', '90102', 'Acobambilla', 'Acobambilla, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1032', '90103', 'Acoria', 'Acoria, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1033', '90104', 'Conayca', 'Conayca, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1034', '90105', 'Cuenca', 'Cuenca, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1035', '90106', 'Huachocolpa', 'Huachocolpa, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1036', '90107', 'Huayllahuara', 'Huayllahuara, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1037', '90108', 'Izcuchaca', 'Izcuchaca, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1038', '90109', 'Laria', 'Laria, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1039', '90110', 'Manta', 'Manta, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1040', '90111', 'Mariscal Cáceres', 'Mariscal Cáceres, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1041', '90112', 'Moya', 'Moya, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1042', '90113', 'Nuevo Occoro', 'Nuevo Occoro, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1043', '90114', 'Palca', 'Palca, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1044', '90115', 'Pilchaca', 'Pilchaca, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1045', '90116', 'Vilca', 'Vilca, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1046', '90117', 'Yauli', 'Yauli, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1047', '90118', 'Ascensión', 'Ascensión, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1048', '90119', 'Huando', 'Huando, Huancavelica, Huancavelica', '106', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1049', '90201', 'Acobamba', 'Acobamba, Acobamba, Huancavelica', '107', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1050', '90202', 'Andabamba', 'Andabamba, Acobamba, Huancavelica', '107', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1051', '90203', 'Anta', 'Anta, Acobamba, Huancavelica', '107', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1052', '90204', 'Caja', 'Caja, Acobamba, Huancavelica', '107', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1053', '90205', 'Marcas', 'Marcas, Acobamba, Huancavelica', '107', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1054', '90206', 'Paucara', 'Paucara, Acobamba, Huancavelica', '107', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1055', '90207', 'Pomacocha', 'Pomacocha, Acobamba, Huancavelica', '107', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1056', '90208', 'Rosario', 'Rosario, Acobamba, Huancavelica', '107', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1057', '90301', 'Lircay', 'Lircay, Angaraes, Huancavelica', '108', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1058', '90302', 'Anchonga', 'Anchonga, Angaraes, Huancavelica', '108', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1059', '90303', 'Callanmarca', 'Callanmarca, Angaraes, Huancavelica', '108', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1060', '90304', 'Ccochaccasa', 'Ccochaccasa, Angaraes, Huancavelica', '108', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1061', '90305', 'Chincho', 'Chincho, Angaraes, Huancavelica', '108', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1062', '90306', 'Congalla', 'Congalla, Angaraes, Huancavelica', '108', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1063', '90307', 'Huanca-Huanca', 'Huanca-Huanca, Angaraes, Huancavelica', '108', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1064', '90308', 'Huayllay Grande', 'Huayllay Grande, Angaraes, Huancavelica', '108', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1065', '90309', 'Julcamarca', 'Julcamarca, Angaraes, Huancavelica', '108', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1066', '90310', 'San Antonio de Antaparco', 'San Antonio de Antaparco, Angaraes, Huancavelica', '108', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1067', '90311', 'Santo Tomas de Pata', 'Santo Tomas de Pata, Angaraes, Huancavelica', '108', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1068', '90312', 'Secclla', 'Secclla, Angaraes, Huancavelica', '108', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1069', '90401', 'Castrovirreyna', 'Castrovirreyna, Castrovirreyna, Huancavelica', '109', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1070', '90402', 'Arma', 'Arma, Castrovirreyna, Huancavelica', '109', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1071', '90403', 'Aurahua', 'Aurahua, Castrovirreyna, Huancavelica', '109', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1072', '90404', 'Capillas', 'Capillas, Castrovirreyna, Huancavelica', '109', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1073', '90405', 'Chupamarca', 'Chupamarca, Castrovirreyna, Huancavelica', '109', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1074', '90406', 'Cocas', 'Cocas, Castrovirreyna, Huancavelica', '109', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1075', '90407', 'Huachos', 'Huachos, Castrovirreyna, Huancavelica', '109', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1076', '90408', 'Huamatambo', 'Huamatambo, Castrovirreyna, Huancavelica', '109', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1077', '90409', 'Mollepampa', 'Mollepampa, Castrovirreyna, Huancavelica', '109', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1078', '90410', 'San Juan', 'San Juan, Castrovirreyna, Huancavelica', '109', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1079', '90411', 'Santa Ana', 'Santa Ana, Castrovirreyna, Huancavelica', '109', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1080', '90412', 'Tantara', 'Tantara, Castrovirreyna, Huancavelica', '109', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1081', '90413', 'Ticrapo', 'Ticrapo, Castrovirreyna, Huancavelica', '109', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1082', '90501', 'Churcampa', 'Churcampa, Churcampa, Huancavelica', '110', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1083', '90502', 'Anco', 'Anco, Churcampa, Huancavelica', '110', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1084', '90503', 'Chinchihuasi', 'Chinchihuasi, Churcampa, Huancavelica', '110', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1085', '90504', 'El Carmen', 'El Carmen, Churcampa, Huancavelica', '110', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1086', '90505', 'La Merced', 'La Merced, Churcampa, Huancavelica', '110', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1087', '90506', 'Locroja', 'Locroja, Churcampa, Huancavelica', '110', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1088', '90507', 'Paucarbamba', 'Paucarbamba, Churcampa, Huancavelica', '110', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1089', '90508', 'San Miguel de Mayocc', 'San Miguel de Mayocc, Churcampa, Huancavelica', '110', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1090', '90509', 'San Pedro de Coris', 'San Pedro de Coris, Churcampa, Huancavelica', '110', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1091', '90510', 'Pachamarca', 'Pachamarca, Churcampa, Huancavelica', '110', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1092', '90511', 'Cosme', 'Cosme, Churcampa, Huancavelica', '110', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1093', '90601', 'Huaytara', 'Huaytara, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1094', '90602', 'Ayavi', 'Ayavi, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1095', '90603', 'Córdova', 'Córdova, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1096', '90604', 'Huayacundo Arma', 'Huayacundo Arma, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1097', '90605', 'Laramarca', 'Laramarca, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1098', '90606', 'Ocoyo', 'Ocoyo, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1099', '90607', 'Pilpichaca', 'Pilpichaca, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1100', '90608', 'Querco', 'Querco, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1101', '90609', 'Quito-Arma', 'Quito-Arma, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1102', '90610', 'San Antonio de Cusicancha', 'San Antonio de Cusicancha, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1103', '90611', 'San Francisco de Sangayaico', 'San Francisco de Sangayaico, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1104', '90612', 'San Isidro', 'San Isidro, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1105', '90613', 'Santiago de Chocorvos', 'Santiago de Chocorvos, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1106', '90614', 'Santiago de Quirahuara', 'Santiago de Quirahuara, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1107', '90615', 'Santo Domingo de Capillas', 'Santo Domingo de Capillas, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1108', '90616', 'Tambo', 'Tambo, Huaytará, Huancavelica', '111', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1109', '90701', 'Pampas', 'Pampas, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1110', '90702', 'Acostambo', 'Acostambo, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1111', '90703', 'Acraquia', 'Acraquia, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1112', '90704', 'Ahuaycha', 'Ahuaycha, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1113', '90705', 'Colcabamba', 'Colcabamba, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1114', '90706', 'Daniel Hernández', 'Daniel Hernández, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1115', '90707', 'Huachocolpa', 'Huachocolpa, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1116', '90709', 'Huaribamba', 'Huaribamba, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1117', '90710', 'Ñahuimpuquio', 'Ñahuimpuquio, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1118', '90711', 'Pazos', 'Pazos, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1119', '90713', 'Quishuar', 'Quishuar, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1120', '90714', 'Salcabamba', 'Salcabamba, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1121', '90715', 'Salcahuasi', 'Salcahuasi, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1122', '90716', 'San Marcos de Rocchac', 'San Marcos de Rocchac, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1123', '90717', 'Surcubamba', 'Surcubamba, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1124', '90718', 'Tintay Puncu', 'Tintay Puncu, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1125', '90719', 'Quichuas', 'Quichuas, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1126', '90720', 'Andaymarca', 'Andaymarca, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1127', '90721', 'Roble', 'Roble, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1128', '90722', 'Pichos', 'Pichos, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1129', '90723', 'Santiago de Tucuma', 'Santiago de Tucuma, Tayacaja, Huancavelica', '112', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1130', '100101', 'Huanuco', 'Huanuco, Huánuco, Huánuco', '113', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1131', '100102', 'Amarilis', 'Amarilis, Huánuco, Huánuco', '113', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1132', '100103', 'Chinchao', 'Chinchao, Huánuco, Huánuco', '113', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1133', '100104', 'Churubamba', 'Churubamba, Huánuco, Huánuco', '113', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1134', '100105', 'Margos', 'Margos, Huánuco, Huánuco', '113', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1135', '100106', 'Quisqui (Kichki)', 'Quisqui (Kichki), Huánuco, Huánuco', '113', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1136', '100107', 'San Francisco de Cayran', 'San Francisco de Cayran, Huánuco, Huánuco', '113', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1137', '100108', 'San Pedro de Chaulan', 'San Pedro de Chaulan, Huánuco, Huánuco', '113', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1138', '100109', 'Santa María del Valle', 'Santa María del Valle, Huánuco, Huánuco', '113', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1139', '100110', 'Yarumayo', 'Yarumayo, Huánuco, Huánuco', '113', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1140', '100111', 'Pillco Marca', 'Pillco Marca, Huánuco, Huánuco', '113', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1141', '100112', 'Yacus', 'Yacus, Huánuco, Huánuco', '113', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1142', '100113', 'San Pablo de Pillao', 'San Pablo de Pillao, Huánuco, Huánuco', '113', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1143', '100201', 'Ambo', 'Ambo, Ambo, Huánuco', '114', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1144', '100202', 'Cayna', 'Cayna, Ambo, Huánuco', '114', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1145', '100203', 'Colpas', 'Colpas, Ambo, Huánuco', '114', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1146', '100204', 'Conchamarca', 'Conchamarca, Ambo, Huánuco', '114', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1147', '100205', 'Huacar', 'Huacar, Ambo, Huánuco', '114', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1148', '100206', 'San Francisco', 'San Francisco, Ambo, Huánuco', '114', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1149', '100207', 'San Rafael', 'San Rafael, Ambo, Huánuco', '114', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1150', '100208', 'Tomay Kichwa', 'Tomay Kichwa, Ambo, Huánuco', '114', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1151', '100301', 'La Unión', 'La Unión, Dos de Mayo, Huánuco', '115', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1152', '100307', 'Chuquis', 'Chuquis, Dos de Mayo, Huánuco', '115', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1153', '100311', 'Marías', 'Marías, Dos de Mayo, Huánuco', '115', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1154', '100313', 'Pachas', 'Pachas, Dos de Mayo, Huánuco', '115', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1155', '100316', 'Quivilla', 'Quivilla, Dos de Mayo, Huánuco', '115', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1156', '100317', 'Ripan', 'Ripan, Dos de Mayo, Huánuco', '115', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1157', '100321', 'Shunqui', 'Shunqui, Dos de Mayo, Huánuco', '115', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1158', '100322', 'Sillapata', 'Sillapata, Dos de Mayo, Huánuco', '115', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1159', '100323', 'Yanas', 'Yanas, Dos de Mayo, Huánuco', '115', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1160', '100401', 'Huacaybamba', 'Huacaybamba, Huacaybamba, Huánuco', '116', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1161', '100402', 'Canchabamba', 'Canchabamba, Huacaybamba, Huánuco', '116', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1162', '100403', 'Cochabamba', 'Cochabamba, Huacaybamba, Huánuco', '116', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1163', '100404', 'Pinra', 'Pinra, Huacaybamba, Huánuco', '116', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1164', '100501', 'Llata', 'Llata, Huamalíes, Huánuco', '117', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1165', '100502', 'Arancay', 'Arancay, Huamalíes, Huánuco', '117', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1166', '100503', 'Chavín de Pariarca', 'Chavín de Pariarca, Huamalíes, Huánuco', '117', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1167', '100504', 'Jacas Grande', 'Jacas Grande, Huamalíes, Huánuco', '117', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1168', '100505', 'Jircan', 'Jircan, Huamalíes, Huánuco', '117', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1169', '100506', 'Miraflores', 'Miraflores, Huamalíes, Huánuco', '117', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1170', '100507', 'Monzón', 'Monzón, Huamalíes, Huánuco', '117', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1171', '100508', 'Punchao', 'Punchao, Huamalíes, Huánuco', '117', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1172', '100509', 'Puños', 'Puños, Huamalíes, Huánuco', '117', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1173', '100510', 'Singa', 'Singa, Huamalíes, Huánuco', '117', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1174', '100511', 'Tantamayo', 'Tantamayo, Huamalíes, Huánuco', '117', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1175', '100601', 'Rupa-Rupa', 'Rupa-Rupa, Leoncio Prado, Huánuco', '118', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1176', '100602', 'Daniel Alomía Robles', 'Daniel Alomía Robles, Leoncio Prado, Huánuco', '118', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1177', '100603', 'Hermílio Valdizan', 'Hermílio Valdizan, Leoncio Prado, Huánuco', '118', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1178', '100604', 'José Crespo y Castillo', 'José Crespo y Castillo, Leoncio Prado, Huánuco', '118', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1179', '100605', 'Luyando', 'Luyando, Leoncio Prado, Huánuco', '118', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1180', '100606', 'Mariano Damaso Beraun', 'Mariano Damaso Beraun, Leoncio Prado, Huánuco', '118', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1181', '100607', 'Pucayacu', 'Pucayacu, Leoncio Prado, Huánuco', '118', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1182', '100608', 'Castillo Grande', 'Castillo Grande, Leoncio Prado, Huánuco', '118', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1183', '100609', 'Pueblo Nuevo', 'Pueblo Nuevo, Leoncio Prado, Huánuco', '118', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1184', '100610', 'Santo Domingo de Anda', 'Santo Domingo de Anda, Leoncio Prado, Huánuco', '118', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1185', '100701', 'Huacrachuco', 'Huacrachuco, Marañón, Huánuco', '119', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1186', '100702', 'Cholon', 'Cholon, Marañón, Huánuco', '119', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1187', '100703', 'San Buenaventura', 'San Buenaventura, Marañón, Huánuco', '119', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1188', '100704', 'La Morada', 'La Morada, Marañón, Huánuco', '119', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1189', '100705', 'Santa Rosa de Alto Yanajanca', 'Santa Rosa de Alto Yanajanca, Marañón, Huánuco', '119', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1190', '100801', 'Panao', 'Panao, Pachitea, Huánuco', '120', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1191', '100802', 'Chaglla', 'Chaglla, Pachitea, Huánuco', '120', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1192', '100803', 'Molino', 'Molino, Pachitea, Huánuco', '120', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1193', '100804', 'Umari', 'Umari, Pachitea, Huánuco', '120', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1194', '100901', 'Puerto Inca', 'Puerto Inca, Puerto Inca, Huánuco', '121', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1195', '100902', 'Codo del Pozuzo', 'Codo del Pozuzo, Puerto Inca, Huánuco', '121', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1196', '100903', 'Honoria', 'Honoria, Puerto Inca, Huánuco', '121', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1197', '100904', 'Tournavista', 'Tournavista, Puerto Inca, Huánuco', '121', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1198', '100905', 'Yuyapichis', 'Yuyapichis, Puerto Inca, Huánuco', '121', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1199', '101001', 'Jesús', 'Jesús, Lauricocha , Huánuco', '122', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1200', '101002', 'Baños', 'Baños, Lauricocha , Huánuco', '122', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1201', '101003', 'Jivia', 'Jivia, Lauricocha , Huánuco', '122', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1202', '101004', 'Queropalca', 'Queropalca, Lauricocha , Huánuco', '122', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1203', '101005', 'Rondos', 'Rondos, Lauricocha , Huánuco', '122', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1204', '101006', 'San Francisco de Asís', 'San Francisco de Asís, Lauricocha , Huánuco', '122', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1205', '101007', 'San Miguel de Cauri', 'San Miguel de Cauri, Lauricocha , Huánuco', '122', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1206', '101101', 'Chavinillo', 'Chavinillo, Yarowilca , Huánuco', '123', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1207', '101102', 'Cahuac', 'Cahuac, Yarowilca , Huánuco', '123', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1208', '101103', 'Chacabamba', 'Chacabamba, Yarowilca , Huánuco', '123', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1209', '101104', 'Aparicio Pomares', 'Aparicio Pomares, Yarowilca , Huánuco', '123', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1210', '101105', 'Jacas Chico', 'Jacas Chico, Yarowilca , Huánuco', '123', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1211', '101106', 'Obas', 'Obas, Yarowilca , Huánuco', '123', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1212', '101107', 'Pampamarca', 'Pampamarca, Yarowilca , Huánuco', '123', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1213', '101108', 'Choras', 'Choras, Yarowilca , Huánuco', '123', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1214', '110101', 'Ica', 'Ica, Ica , Ica', '124', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1215', '110102', 'La Tinguiña', 'La Tinguiña, Ica , Ica', '124', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1216', '110103', 'Los Aquijes', 'Los Aquijes, Ica , Ica', '124', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1217', '110104', 'Ocucaje', 'Ocucaje, Ica , Ica', '124', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1218', '110105', 'Pachacutec', 'Pachacutec, Ica , Ica', '124', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1219', '110106', 'Parcona', 'Parcona, Ica , Ica', '124', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1220', '110107', 'Pueblo Nuevo', 'Pueblo Nuevo, Ica , Ica', '124', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1221', '110108', 'Salas', 'Salas, Ica , Ica', '124', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1222', '110109', 'San José de Los Molinos', 'San José de Los Molinos, Ica , Ica', '124', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1223', '110110', 'San Juan Bautista', 'San Juan Bautista, Ica , Ica', '124', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1224', '110111', 'Santiago', 'Santiago, Ica , Ica', '124', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1225', '110112', 'Subtanjalla', 'Subtanjalla, Ica , Ica', '124', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1226', '110113', 'Tate', 'Tate, Ica , Ica', '124', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1227', '110114', 'Yauca del Rosario', 'Yauca del Rosario, Ica , Ica', '124', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1228', '110201', 'Chincha Alta', 'Chincha Alta, Chincha , Ica', '125', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1229', '110202', 'Alto Laran', 'Alto Laran, Chincha , Ica', '125', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1230', '110203', 'Chavin', 'Chavin, Chincha , Ica', '125', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1231', '110204', 'Chincha Baja', 'Chincha Baja, Chincha , Ica', '125', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1232', '110205', 'El Carmen', 'El Carmen, Chincha , Ica', '125', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1233', '110206', 'Grocio Prado', 'Grocio Prado, Chincha , Ica', '125', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1234', '110207', 'Pueblo Nuevo', 'Pueblo Nuevo, Chincha , Ica', '125', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1235', '110208', 'San Juan de Yanac', 'San Juan de Yanac, Chincha , Ica', '125', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1236', '110209', 'San Pedro de Huacarpana', 'San Pedro de Huacarpana, Chincha , Ica', '125', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1237', '110210', 'Sunampe', 'Sunampe, Chincha , Ica', '125', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1238', '110211', 'Tambo de Mora', 'Tambo de Mora, Chincha , Ica', '125', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1239', '110301', 'Nasca', 'Nasca, Nasca , Ica', '126', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1240', '110302', 'Changuillo', 'Changuillo, Nasca , Ica', '126', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1241', '110303', 'El Ingenio', 'El Ingenio, Nasca , Ica', '126', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1242', '110304', 'Marcona', 'Marcona, Nasca , Ica', '126', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1243', '110305', 'Vista Alegre', 'Vista Alegre, Nasca , Ica', '126', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1244', '110401', 'Palpa', 'Palpa, Palpa , Ica', '127', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1245', '110402', 'Llipata', 'Llipata, Palpa , Ica', '127', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1246', '110403', 'Río Grande', 'Río Grande, Palpa , Ica', '127', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1247', '110404', 'Santa Cruz', 'Santa Cruz, Palpa , Ica', '127', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1248', '110405', 'Tibillo', 'Tibillo, Palpa , Ica', '127', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1249', '110501', 'Pisco', 'Pisco, Pisco , Ica', '128', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1250', '110502', 'Huancano', 'Huancano, Pisco , Ica', '128', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1251', '110503', 'Humay', 'Humay, Pisco , Ica', '128', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1252', '110504', 'Independencia', 'Independencia, Pisco , Ica', '128', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1253', '110505', 'Paracas', 'Paracas, Pisco , Ica', '128', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1254', '110506', 'San Andrés', 'San Andrés, Pisco , Ica', '128', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1255', '110507', 'San Clemente', 'San Clemente, Pisco , Ica', '128', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1256', '110508', 'Tupac Amaru Inca', 'Tupac Amaru Inca, Pisco , Ica', '128', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1257', '120101', 'Huancayo', 'Huancayo, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1258', '120104', 'Carhuacallanga', 'Carhuacallanga, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1259', '120105', 'Chacapampa', 'Chacapampa, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1260', '120106', 'Chicche', 'Chicche, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1261', '120107', 'Chilca', 'Chilca, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1262', '120108', 'Chongos Alto', 'Chongos Alto, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1263', '120111', 'Chupuro', 'Chupuro, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1264', '120112', 'Colca', 'Colca, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1265', '120113', 'Cullhuas', 'Cullhuas, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1266', '120114', 'El Tambo', 'El Tambo, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1267', '120116', 'Huacrapuquio', 'Huacrapuquio, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1268', '120117', 'Hualhuas', 'Hualhuas, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1269', '120119', 'Huancan', 'Huancan, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1270', '120120', 'Huasicancha', 'Huasicancha, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1271', '120121', 'Huayucachi', 'Huayucachi, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1272', '120122', 'Ingenio', 'Ingenio, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1273', '120124', 'Pariahuanca', 'Pariahuanca, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1274', '120125', 'Pilcomayo', 'Pilcomayo, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1275', '120126', 'Pucara', 'Pucara, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1276', '120127', 'Quichuay', 'Quichuay, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1277', '120128', 'Quilcas', 'Quilcas, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1278', '120129', 'San Agustín', 'San Agustín, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1279', '120130', 'San Jerónimo de Tunan', 'San Jerónimo de Tunan, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1280', '120132', 'Saño', 'Saño, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1281', '120133', 'Sapallanga', 'Sapallanga, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1282', '120134', 'Sicaya', 'Sicaya, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1283', '120135', 'Santo Domingo de Acobamba', 'Santo Domingo de Acobamba, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1284', '120136', 'Viques', 'Viques, Huancayo , Junín', '129', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1285', '120201', 'Concepción', 'Concepción, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1286', '120202', 'Aco', 'Aco, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1287', '120203', 'Andamarca', 'Andamarca, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1288', '120204', 'Chambara', 'Chambara, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1289', '120205', 'Cochas', 'Cochas, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1290', '120206', 'Comas', 'Comas, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1291', '120207', 'Heroínas Toledo', 'Heroínas Toledo, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1292', '120208', 'Manzanares', 'Manzanares, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1293', '120209', 'Mariscal Castilla', 'Mariscal Castilla, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1294', '120210', 'Matahuasi', 'Matahuasi, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1295', '120211', 'Mito', 'Mito, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1296', '120212', 'Nueve de Julio', 'Nueve de Julio, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1297', '120213', 'Orcotuna', 'Orcotuna, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1298', '120214', 'San José de Quero', 'San José de Quero, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1299', '120215', 'Santa Rosa de Ocopa', 'Santa Rosa de Ocopa, Concepción , Junín', '130', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1300', '120301', 'Chanchamayo', 'Chanchamayo, Chanchamayo , Junín', '131', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1301', '120302', 'Perene', 'Perene, Chanchamayo , Junín', '131', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1302', '120303', 'Pichanaqui', 'Pichanaqui, Chanchamayo , Junín', '131', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1303', '120304', 'San Luis de Shuaro', 'San Luis de Shuaro, Chanchamayo , Junín', '131', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1304', '120305', 'San Ramón', 'San Ramón, Chanchamayo , Junín', '131', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1305', '120306', 'Vitoc', 'Vitoc, Chanchamayo , Junín', '131', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1306', '120401', 'Jauja', 'Jauja, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1307', '120402', 'Acolla', 'Acolla, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1308', '120403', 'Apata', 'Apata, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1309', '120404', 'Ataura', 'Ataura, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1310', '120405', 'Canchayllo', 'Canchayllo, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1311', '120406', 'Curicaca', 'Curicaca, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1312', '120407', 'El Mantaro', 'El Mantaro, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1313', '120408', 'Huamali', 'Huamali, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1314', '120409', 'Huaripampa', 'Huaripampa, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1315', '120410', 'Huertas', 'Huertas, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1316', '120411', 'Janjaillo', 'Janjaillo, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1317', '120412', 'Julcán', 'Julcán, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1318', '120413', 'Leonor Ordóñez', 'Leonor Ordóñez, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1319', '120414', 'Llocllapampa', 'Llocllapampa, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1320', '120415', 'Marco', 'Marco, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1321', '120416', 'Masma', 'Masma, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1322', '120417', 'Masma Chicche', 'Masma Chicche, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1323', '120418', 'Molinos', 'Molinos, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1324', '120419', 'Monobamba', 'Monobamba, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1325', '120420', 'Muqui', 'Muqui, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1326', '120421', 'Muquiyauyo', 'Muquiyauyo, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1327', '120422', 'Paca', 'Paca, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1328', '120423', 'Paccha', 'Paccha, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1329', '120424', 'Pancan', 'Pancan, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1330', '120425', 'Parco', 'Parco, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1331', '120426', 'Pomacancha', 'Pomacancha, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1332', '120427', 'Ricran', 'Ricran, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1333', '120428', 'San Lorenzo', 'San Lorenzo, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1334', '120429', 'San Pedro de Chunan', 'San Pedro de Chunan, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1335', '120430', 'Sausa', 'Sausa, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1336', '120431', 'Sincos', 'Sincos, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1337', '120432', 'Tunan Marca', 'Tunan Marca, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1338', '120433', 'Yauli', 'Yauli, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1339', '120434', 'Yauyos', 'Yauyos, Jauja , Junín', '132', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1340', '120501', 'Junin', 'Junin, Junín , Junín', '133', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1341', '120502', 'Carhuamayo', 'Carhuamayo, Junín , Junín', '133', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1342', '120503', 'Ondores', 'Ondores, Junín , Junín', '133', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1343', '120504', 'Ulcumayo', 'Ulcumayo, Junín , Junín', '133', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1344', '120601', 'Satipo', 'Satipo, Satipo , Junín', '134', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1345', '120602', 'Coviriali', 'Coviriali, Satipo , Junín', '134', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1346', '120603', 'Llaylla', 'Llaylla, Satipo , Junín', '134', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1347', '120604', 'Mazamari', 'Mazamari, Satipo , Junín', '134', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1348', '120605', 'Pampa Hermosa', 'Pampa Hermosa, Satipo , Junín', '134', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1349', '120606', 'Pangoa', 'Pangoa, Satipo , Junín', '134', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1350', '120607', 'Río Negro', 'Río Negro, Satipo , Junín', '134', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1351', '120608', 'Río Tambo', 'Río Tambo, Satipo , Junín', '134', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1352', '120609', 'Vizcatan del Ene', 'Vizcatan del Ene, Satipo , Junín', '134', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1353', '120701', 'Tarma', 'Tarma, Tarma , Junín', '135', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1354', '120702', 'Acobamba', 'Acobamba, Tarma , Junín', '135', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1355', '120703', 'Huaricolca', 'Huaricolca, Tarma , Junín', '135', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1356', '120704', 'Huasahuasi', 'Huasahuasi, Tarma , Junín', '135', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1357', '120705', 'La Unión', 'La Unión, Tarma , Junín', '135', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1358', '120706', 'Palca', 'Palca, Tarma , Junín', '135', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1359', '120707', 'Palcamayo', 'Palcamayo, Tarma , Junín', '135', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1360', '120708', 'San Pedro de Cajas', 'San Pedro de Cajas, Tarma , Junín', '135', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1361', '120709', 'Tapo', 'Tapo, Tarma , Junín', '135', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1362', '120801', 'La Oroya', 'La Oroya, Yauli , Junín', '136', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1363', '120802', 'Chacapalpa', 'Chacapalpa, Yauli , Junín', '136', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1364', '120803', 'Huay-Huay', 'Huay-Huay, Yauli , Junín', '136', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1365', '120804', 'Marcapomacocha', 'Marcapomacocha, Yauli , Junín', '136', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1366', '120805', 'Morococha', 'Morococha, Yauli , Junín', '136', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1367', '120806', 'Paccha', 'Paccha, Yauli , Junín', '136', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1368', '120807', 'Santa Bárbara de Carhuacayan', 'Santa Bárbara de Carhuacayan, Yauli , Junín', '136', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1369', '120808', 'Santa Rosa de Sacco', 'Santa Rosa de Sacco, Yauli , Junín', '136', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1370', '120809', 'Suitucancha', 'Suitucancha, Yauli , Junín', '136', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1371', '120810', 'Yauli', 'Yauli, Yauli , Junín', '136', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1372', '120901', 'Chupaca', 'Chupaca, Chupaca , Junín', '137', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1373', '120902', 'Ahuac', 'Ahuac, Chupaca , Junín', '137', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1374', '120903', 'Chongos Bajo', 'Chongos Bajo, Chupaca , Junín', '137', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1375', '120904', 'Huachac', 'Huachac, Chupaca , Junín', '137', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1376', '120905', 'Huamancaca Chico', 'Huamancaca Chico, Chupaca , Junín', '137', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1377', '120906', 'San Juan de Iscos', 'San Juan de Iscos, Chupaca , Junín', '137', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1378', '120907', 'San Juan de Jarpa', 'San Juan de Jarpa, Chupaca , Junín', '137', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1379', '120908', 'Tres de Diciembre', 'Tres de Diciembre, Chupaca , Junín', '137', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1380', '120909', 'Yanacancha', 'Yanacancha, Chupaca , Junín', '137', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1381', '130101', 'Trujillo', 'Trujillo, Trujillo , La Libertad', '138', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1382', '130102', 'El Porvenir', 'El Porvenir, Trujillo , La Libertad', '138', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1383', '130103', 'Florencia de Mora', 'Florencia de Mora, Trujillo , La Libertad', '138', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1384', '130104', 'Huanchaco', 'Huanchaco, Trujillo , La Libertad', '138', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1385', '130105', 'La Esperanza', 'La Esperanza, Trujillo , La Libertad', '138', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1386', '130106', 'Laredo', 'Laredo, Trujillo , La Libertad', '138', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1387', '130107', 'Moche', 'Moche, Trujillo , La Libertad', '138', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1388', '130108', 'Poroto', 'Poroto, Trujillo , La Libertad', '138', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1389', '130109', 'Salaverry', 'Salaverry, Trujillo , La Libertad', '138', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1390', '130110', 'Simbal', 'Simbal, Trujillo , La Libertad', '138', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1391', '130111', 'Victor Larco Herrera', 'Victor Larco Herrera, Trujillo , La Libertad', '138', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1392', '130201', 'Ascope', 'Ascope, Ascope , La Libertad', '139', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1393', '130202', 'Chicama', 'Chicama, Ascope , La Libertad', '139', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1394', '130203', 'Chocope', 'Chocope, Ascope , La Libertad', '139', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1395', '130204', 'Magdalena de Cao', 'Magdalena de Cao, Ascope , La Libertad', '139', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1396', '130205', 'Paijan', 'Paijan, Ascope , La Libertad', '139', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1397', '130206', 'Rázuri', 'Rázuri, Ascope , La Libertad', '139', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1398', '130207', 'Santiago de Cao', 'Santiago de Cao, Ascope , La Libertad', '139', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1399', '130208', 'Casa Grande', 'Casa Grande, Ascope , La Libertad', '139', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1400', '130301', 'Bolívar', 'Bolívar, Bolívar , La Libertad', '140', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1401', '130302', 'Bambamarca', 'Bambamarca, Bolívar , La Libertad', '140', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1402', '130303', 'Condormarca', 'Condormarca, Bolívar , La Libertad', '140', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1403', '130304', 'Longotea', 'Longotea, Bolívar , La Libertad', '140', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1404', '130305', 'Uchumarca', 'Uchumarca, Bolívar , La Libertad', '140', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1405', '130306', 'Ucuncha', 'Ucuncha, Bolívar , La Libertad', '140', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1406', '130401', 'Chepen', 'Chepen, Chepén , La Libertad', '141', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1407', '130402', 'Pacanga', 'Pacanga, Chepén , La Libertad', '141', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1408', '130403', 'Pueblo Nuevo', 'Pueblo Nuevo, Chepén , La Libertad', '141', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1409', '130501', 'Julcan', 'Julcan, Julcán , La Libertad', '142', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1410', '130502', 'Calamarca', 'Calamarca, Julcán , La Libertad', '142', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1411', '130503', 'Carabamba', 'Carabamba, Julcán , La Libertad', '142', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1412', '130504', 'Huaso', 'Huaso, Julcán , La Libertad', '142', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1413', '130601', 'Otuzco', 'Otuzco, Otuzco , La Libertad', '143', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1414', '130602', 'Agallpampa', 'Agallpampa, Otuzco , La Libertad', '143', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1415', '130604', 'Charat', 'Charat, Otuzco , La Libertad', '143', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1416', '130605', 'Huaranchal', 'Huaranchal, Otuzco , La Libertad', '143', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1417', '130606', 'La Cuesta', 'La Cuesta, Otuzco , La Libertad', '143', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1418', '130608', 'Mache', 'Mache, Otuzco , La Libertad', '143', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1419', '130610', 'Paranday', 'Paranday, Otuzco , La Libertad', '143', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1420', '130611', 'Salpo', 'Salpo, Otuzco , La Libertad', '143', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1421', '130613', 'Sinsicap', 'Sinsicap, Otuzco , La Libertad', '143', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1422', '130614', 'Usquil', 'Usquil, Otuzco , La Libertad', '143', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1423', '130701', 'San Pedro de Lloc', 'San Pedro de Lloc, Pacasmayo , La Libertad', '144', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1424', '130702', 'Guadalupe', 'Guadalupe, Pacasmayo , La Libertad', '144', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1425', '130703', 'Jequetepeque', 'Jequetepeque, Pacasmayo , La Libertad', '144', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1426', '130704', 'Pacasmayo', 'Pacasmayo, Pacasmayo , La Libertad', '144', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1427', '130705', 'San José', 'San José, Pacasmayo , La Libertad', '144', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1428', '130801', 'Tayabamba', 'Tayabamba, Pataz , La Libertad', '145', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1429', '130802', 'Buldibuyo', 'Buldibuyo, Pataz , La Libertad', '145', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1430', '130803', 'Chillia', 'Chillia, Pataz , La Libertad', '145', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1431', '130804', 'Huancaspata', 'Huancaspata, Pataz , La Libertad', '145', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1432', '130805', 'Huaylillas', 'Huaylillas, Pataz , La Libertad', '145', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1433', '130806', 'Huayo', 'Huayo, Pataz , La Libertad', '145', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1434', '130807', 'Ongon', 'Ongon, Pataz , La Libertad', '145', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1435', '130808', 'Parcoy', 'Parcoy, Pataz , La Libertad', '145', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1436', '130809', 'Pataz', 'Pataz, Pataz , La Libertad', '145', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1437', '130810', 'Pias', 'Pias, Pataz , La Libertad', '145', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1438', '130811', 'Santiago de Challas', 'Santiago de Challas, Pataz , La Libertad', '145', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1439', '130812', 'Taurija', 'Taurija, Pataz , La Libertad', '145', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1440', '130813', 'Urpay', 'Urpay, Pataz , La Libertad', '145', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1441', '130901', 'Huamachuco', 'Huamachuco, Sánchez Carrión , La Libertad', '146', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1442', '130902', 'Chugay', 'Chugay, Sánchez Carrión , La Libertad', '146', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1443', '130903', 'Cochorco', 'Cochorco, Sánchez Carrión , La Libertad', '146', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1444', '130904', 'Curgos', 'Curgos, Sánchez Carrión , La Libertad', '146', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1445', '130905', 'Marcabal', 'Marcabal, Sánchez Carrión , La Libertad', '146', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1446', '130906', 'Sanagoran', 'Sanagoran, Sánchez Carrión , La Libertad', '146', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1447', '130907', 'Sarin', 'Sarin, Sánchez Carrión , La Libertad', '146', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1448', '130908', 'Sartimbamba', 'Sartimbamba, Sánchez Carrión , La Libertad', '146', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1449', '131001', 'Santiago de Chuco', 'Santiago de Chuco, Santiago de Chuco , La Libertad', '147', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1450', '131002', 'Angasmarca', 'Angasmarca, Santiago de Chuco , La Libertad', '147', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1451', '131003', 'Cachicadan', 'Cachicadan, Santiago de Chuco , La Libertad', '147', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1452', '131004', 'Mollebamba', 'Mollebamba, Santiago de Chuco , La Libertad', '147', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1453', '131005', 'Mollepata', 'Mollepata, Santiago de Chuco , La Libertad', '147', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1454', '131006', 'Quiruvilca', 'Quiruvilca, Santiago de Chuco , La Libertad', '147', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1455', '131007', 'Santa Cruz de Chuca', 'Santa Cruz de Chuca, Santiago de Chuco , La Libertad', '147', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1456', '131008', 'Sitabamba', 'Sitabamba, Santiago de Chuco , La Libertad', '147', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1457', '131101', 'Cascas', 'Cascas, Gran Chimú , La Libertad', '148', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1458', '131102', 'Lucma', 'Lucma, Gran Chimú , La Libertad', '148', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1459', '131103', 'Marmot', 'Marmot, Gran Chimú , La Libertad', '148', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1460', '131104', 'Sayapullo', 'Sayapullo, Gran Chimú , La Libertad', '148', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1461', '131201', 'Viru', 'Viru, Virú , La Libertad', '149', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1462', '131202', 'Chao', 'Chao, Virú , La Libertad', '149', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1463', '131203', 'Guadalupito', 'Guadalupito, Virú , La Libertad', '149', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1464', '140101', 'Chiclayo', 'Chiclayo, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1465', '140102', 'Chongoyape', 'Chongoyape, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1466', '140103', 'Eten', 'Eten, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1467', '140104', 'Eten Puerto', 'Eten Puerto, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1468', '140105', 'José Leonardo Ortiz', 'José Leonardo Ortiz, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1469', '140106', 'La Victoria', 'La Victoria, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1470', '140107', 'Lagunas', 'Lagunas, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1471', '140108', 'Monsefu', 'Monsefu, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1472', '140109', 'Nueva Arica', 'Nueva Arica, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1473', '140110', 'Oyotun', 'Oyotun, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1474', '140111', 'Picsi', 'Picsi, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1475', '140112', 'Pimentel', 'Pimentel, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1476', '140113', 'Reque', 'Reque, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1477', '140114', 'Santa Rosa', 'Santa Rosa, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1478', '140115', 'Saña', 'Saña, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1479', '140116', 'Cayalti', 'Cayalti, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1480', '140117', 'Patapo', 'Patapo, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1481', '140118', 'Pomalca', 'Pomalca, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1482', '140119', 'Pucala', 'Pucala, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1483', '140120', 'Tuman', 'Tuman, Chiclayo , Lambayeque', '150', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1484', '140201', 'Ferreñafe', 'Ferreñafe, Ferreñafe , Lambayeque', '151', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1485', '140202', 'Cañaris', 'Cañaris, Ferreñafe , Lambayeque', '151', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1486', '140203', 'Incahuasi', 'Incahuasi, Ferreñafe , Lambayeque', '151', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1487', '140204', 'Manuel Antonio Mesones Muro', 'Manuel Antonio Mesones Muro, Ferreñafe , Lambayeque', '151', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1488', '140205', 'Pitipo', 'Pitipo, Ferreñafe , Lambayeque', '151', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1489', '140206', 'Pueblo Nuevo', 'Pueblo Nuevo, Ferreñafe , Lambayeque', '151', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1490', '140301', 'Lambayeque', 'Lambayeque, Lambayeque , Lambayeque', '152', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1491', '140302', 'Chochope', 'Chochope, Lambayeque , Lambayeque', '152', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1492', '140303', 'Illimo', 'Illimo, Lambayeque , Lambayeque', '152', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1493', '140304', 'Jayanca', 'Jayanca, Lambayeque , Lambayeque', '152', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1494', '140305', 'Mochumi', 'Mochumi, Lambayeque , Lambayeque', '152', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1495', '140306', 'Morrope', 'Morrope, Lambayeque , Lambayeque', '152', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1496', '140307', 'Motupe', 'Motupe, Lambayeque , Lambayeque', '152', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1497', '140308', 'Olmos', 'Olmos, Lambayeque , Lambayeque', '152', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1498', '140309', 'Pacora', 'Pacora, Lambayeque , Lambayeque', '152', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1499', '140310', 'Salas', 'Salas, Lambayeque , Lambayeque', '152', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1500', '140311', 'San José', 'San José, Lambayeque , Lambayeque', '152', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1501', '140312', 'Tucume', 'Tucume, Lambayeque , Lambayeque', '152', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1502', '150101', 'Lima', 'Lima, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1503', '150102', 'Ancón', 'Ancón, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1504', '150103', 'Ate', 'Ate, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1505', '150104', 'Barranco', 'Barranco, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1506', '150105', 'Breña', 'Breña, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1507', '150106', 'Carabayllo', 'Carabayllo, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1508', '150107', 'Chaclacayo', 'Chaclacayo, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1509', '150108', 'Chorrillos', 'Chorrillos, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1510', '150109', 'Cieneguilla', 'Cieneguilla, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1511', '150110', 'Comas', 'Comas, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1512', '150111', 'El Agustino', 'El Agustino, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1513', '150112', 'Independencia', 'Independencia, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1514', '150113', 'Jesús María', 'Jesús María, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1515', '150114', 'La Molina', 'La Molina, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1516', '150115', 'La Victoria', 'La Victoria, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1517', '150116', 'Lince', 'Lince, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1518', '150117', 'Los Olivos', 'Los Olivos, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1519', '150118', 'Lurigancho', 'Lurigancho, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1520', '150119', 'Lurin', 'Lurin, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1521', '150120', 'Magdalena del Mar', 'Magdalena del Mar, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1522', '150121', 'Pueblo Libre', 'Pueblo Libre, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1523', '150122', 'Miraflores', 'Miraflores, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1524', '150123', 'Pachacamac', 'Pachacamac, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1525', '150124', 'Pucusana', 'Pucusana, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1526', '150125', 'Puente Piedra', 'Puente Piedra, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1527', '150126', 'Punta Hermosa', 'Punta Hermosa, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1528', '150127', 'Punta Negra', 'Punta Negra, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1529', '150128', 'Rímac', 'Rímac, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1530', '150129', 'San Bartolo', 'San Bartolo, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1531', '150130', 'San Borja', 'San Borja, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1532', '150131', 'San Isidro', 'San Isidro, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1533', '150132', 'San Juan de Lurigancho', 'San Juan de Lurigancho, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1534', '150133', 'San Juan de Miraflores', 'San Juan de Miraflores, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1535', '150134', 'San Luis', 'San Luis, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1536', '150135', 'San Martín de Porres', 'San Martín de Porres, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1537', '150136', 'San Miguel', 'San Miguel, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1538', '150137', 'Santa Anita', 'Santa Anita, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1539', '150138', 'Santa María del Mar', 'Santa María del Mar, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1540', '150139', 'Santa Rosa', 'Santa Rosa, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1541', '150140', 'Santiago de Surco', 'Santiago de Surco, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1542', '150141', 'Surquillo', 'Surquillo, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1543', '150142', 'Villa El Salvador', 'Villa El Salvador, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1544', '150143', 'Villa María del Triunfo', 'Villa María del Triunfo, Lima , Lima', '153', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1545', '150201', 'Barranca', 'Barranca, Barranca , Lima', '154', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1546', '150202', 'Paramonga', 'Paramonga, Barranca , Lima', '154', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1547', '150203', 'Pativilca', 'Pativilca, Barranca , Lima', '154', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1548', '150204', 'Supe', 'Supe, Barranca , Lima', '154', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1549', '150205', 'Supe Puerto', 'Supe Puerto, Barranca , Lima', '154', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1550', '150301', 'Cajatambo', 'Cajatambo, Cajatambo , Lima', '155', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1551', '150302', 'Copa', 'Copa, Cajatambo , Lima', '155', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1552', '150303', 'Gorgor', 'Gorgor, Cajatambo , Lima', '155', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1553', '150304', 'Huancapon', 'Huancapon, Cajatambo , Lima', '155', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1554', '150305', 'Manas', 'Manas, Cajatambo , Lima', '155', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1555', '150401', 'Canta', 'Canta, Canta , Lima', '156', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1556', '150402', 'Arahuay', 'Arahuay, Canta , Lima', '156', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1557', '150403', 'Huamantanga', 'Huamantanga, Canta , Lima', '156', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1558', '150404', 'Huaros', 'Huaros, Canta , Lima', '156', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1559', '150405', 'Lachaqui', 'Lachaqui, Canta , Lima', '156', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1560', '150406', 'San Buenaventura', 'San Buenaventura, Canta , Lima', '156', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1561', '150407', 'Santa Rosa de Quives', 'Santa Rosa de Quives, Canta , Lima', '156', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1562', '150501', 'San Vicente de Cañete', 'San Vicente de Cañete, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1563', '150502', 'Asia', 'Asia, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1564', '150503', 'Calango', 'Calango, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1565', '150504', 'Cerro Azul', 'Cerro Azul, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1566', '150505', 'Chilca', 'Chilca, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1567', '150506', 'Coayllo', 'Coayllo, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1568', '150507', 'Imperial', 'Imperial, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1569', '150508', 'Lunahuana', 'Lunahuana, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1570', '150509', 'Mala', 'Mala, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1571', '150510', 'Nuevo Imperial', 'Nuevo Imperial, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1572', '150511', 'Pacaran', 'Pacaran, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1573', '150512', 'Quilmana', 'Quilmana, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1574', '150513', 'San Antonio', 'San Antonio, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1575', '150514', 'San Luis', 'San Luis, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1576', '150515', 'Santa Cruz de Flores', 'Santa Cruz de Flores, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1577', '150516', 'Zúñiga', 'Zúñiga, Cañete , Lima', '157', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1578', '150601', 'Huaral', 'Huaral, Huaral , Lima', '158', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1579', '150602', 'Atavillos Alto', 'Atavillos Alto, Huaral , Lima', '158', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1580', '150603', 'Atavillos Bajo', 'Atavillos Bajo, Huaral , Lima', '158', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1581', '150604', 'Aucallama', 'Aucallama, Huaral , Lima', '158', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1582', '150605', 'Chancay', 'Chancay, Huaral , Lima', '158', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1583', '150606', 'Ihuari', 'Ihuari, Huaral , Lima', '158', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1584', '150607', 'Lampian', 'Lampian, Huaral , Lima', '158', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1585', '150608', 'Pacaraos', 'Pacaraos, Huaral , Lima', '158', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1586', '150609', 'San Miguel de Acos', 'San Miguel de Acos, Huaral , Lima', '158', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1587', '150610', 'Santa Cruz de Andamarca', 'Santa Cruz de Andamarca, Huaral , Lima', '158', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1588', '150611', 'Sumbilca', 'Sumbilca, Huaral , Lima', '158', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1589', '150612', 'Veintisiete de Noviembre', 'Veintisiete de Noviembre, Huaral , Lima', '158', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1590', '150701', 'Matucana', 'Matucana, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1591', '150702', 'Antioquia', 'Antioquia, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1592', '150703', 'Callahuanca', 'Callahuanca, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1593', '150704', 'Carampoma', 'Carampoma, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1594', '150705', 'Chicla', 'Chicla, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1595', '150706', 'Cuenca', 'Cuenca, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1596', '150707', 'Huachupampa', 'Huachupampa, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1597', '150708', 'Huanza', 'Huanza, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1598', '150709', 'Huarochiri', 'Huarochiri, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1599', '150710', 'Lahuaytambo', 'Lahuaytambo, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1600', '150711', 'Langa', 'Langa, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1601', '150712', 'Laraos', 'Laraos, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1602', '150713', 'Mariatana', 'Mariatana, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1603', '150714', 'Ricardo Palma', 'Ricardo Palma, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1604', '150715', 'San Andrés de Tupicocha', 'San Andrés de Tupicocha, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1605', '150716', 'San Antonio', 'San Antonio, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1606', '150717', 'San Bartolomé', 'San Bartolomé, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1607', '150718', 'San Damian', 'San Damian, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1608', '150719', 'San Juan de Iris', 'San Juan de Iris, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1609', '150720', 'San Juan de Tantaranche', 'San Juan de Tantaranche, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1610', '150721', 'San Lorenzo de Quinti', 'San Lorenzo de Quinti, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1611', '150722', 'San Mateo', 'San Mateo, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1612', '150723', 'San Mateo de Otao', 'San Mateo de Otao, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1613', '150724', 'San Pedro de Casta', 'San Pedro de Casta, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1614', '150725', 'San Pedro de Huancayre', 'San Pedro de Huancayre, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1615', '150726', 'Sangallaya', 'Sangallaya, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1616', '150727', 'Santa Cruz de Cocachacra', 'Santa Cruz de Cocachacra, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1617', '150728', 'Santa Eulalia', 'Santa Eulalia, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1618', '150729', 'Santiago de Anchucaya', 'Santiago de Anchucaya, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1619', '150730', 'Santiago de Tuna', 'Santiago de Tuna, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1620', '150731', 'Santo Domingo de Los Olleros', 'Santo Domingo de Los Olleros, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1621', '150732', 'Surco', 'Surco, Huarochirí , Lima', '159', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1622', '150801', 'Huacho', 'Huacho, Huaura , Lima', '160', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1623', '150802', 'Ambar', 'Ambar, Huaura , Lima', '160', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1624', '150803', 'Caleta de Carquin', 'Caleta de Carquin, Huaura , Lima', '160', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1625', '150804', 'Checras', 'Checras, Huaura , Lima', '160', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1626', '150805', 'Hualmay', 'Hualmay, Huaura , Lima', '160', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1627', '150806', 'Huaura', 'Huaura, Huaura , Lima', '160', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1628', '150807', 'Leoncio Prado', 'Leoncio Prado, Huaura , Lima', '160', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1629', '150808', 'Paccho', 'Paccho, Huaura , Lima', '160', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1630', '150809', 'Santa Leonor', 'Santa Leonor, Huaura , Lima', '160', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1631', '150810', 'Santa María', 'Santa María, Huaura , Lima', '160', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1632', '150811', 'Sayan', 'Sayan, Huaura , Lima', '160', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1633', '150812', 'Vegueta', 'Vegueta, Huaura , Lima', '160', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1634', '150901', 'Oyon', 'Oyon, Oyón , Lima', '161', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1635', '150902', 'Andajes', 'Andajes, Oyón , Lima', '161', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1636', '150903', 'Caujul', 'Caujul, Oyón , Lima', '161', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1637', '150904', 'Cochamarca', 'Cochamarca, Oyón , Lima', '161', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1638', '150905', 'Navan', 'Navan, Oyón , Lima', '161', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1639', '150906', 'Pachangara', 'Pachangara, Oyón , Lima', '161', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1640', '151001', 'Yauyos', 'Yauyos, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1641', '151002', 'Alis', 'Alis, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1642', '151003', 'Allauca', 'Allauca, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1643', '151004', 'Ayaviri', 'Ayaviri, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1644', '151005', 'Azángaro', 'Azángaro, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1645', '151006', 'Cacra', 'Cacra, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1646', '151007', 'Carania', 'Carania, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1647', '151008', 'Catahuasi', 'Catahuasi, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1648', '151009', 'Chocos', 'Chocos, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1649', '151010', 'Cochas', 'Cochas, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1650', '151011', 'Colonia', 'Colonia, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1651', '151012', 'Hongos', 'Hongos, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1652', '151013', 'Huampara', 'Huampara, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1653', '151014', 'Huancaya', 'Huancaya, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1654', '151015', 'Huangascar', 'Huangascar, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1655', '151016', 'Huantan', 'Huantan, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1656', '151017', 'Huañec', 'Huañec, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1657', '151018', 'Laraos', 'Laraos, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1658', '151019', 'Lincha', 'Lincha, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1659', '151020', 'Madean', 'Madean, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1660', '151021', 'Miraflores', 'Miraflores, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1661', '151022', 'Omas', 'Omas, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1662', '151023', 'Putinza', 'Putinza, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1663', '151024', 'Quinches', 'Quinches, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1664', '151025', 'Quinocay', 'Quinocay, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1665', '151026', 'San Joaquín', 'San Joaquín, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1666', '151027', 'San Pedro de Pilas', 'San Pedro de Pilas, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1667', '151028', 'Tanta', 'Tanta, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1668', '151029', 'Tauripampa', 'Tauripampa, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1669', '151030', 'Tomas', 'Tomas, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1670', '151031', 'Tupe', 'Tupe, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1671', '151032', 'Viñac', 'Viñac, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1672', '151033', 'Vitis', 'Vitis, Yauyos , Lima', '162', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1673', '160101', 'Iquitos', 'Iquitos, Maynas , Loreto', '163', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1674', '160102', 'Alto Nanay', 'Alto Nanay, Maynas , Loreto', '163', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1675', '160103', 'Fernando Lores', 'Fernando Lores, Maynas , Loreto', '163', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1676', '160104', 'Indiana', 'Indiana, Maynas , Loreto', '163', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1677', '160105', 'Las Amazonas', 'Las Amazonas, Maynas , Loreto', '163', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1678', '160106', 'Mazan', 'Mazan, Maynas , Loreto', '163', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1679', '160107', 'Napo', 'Napo, Maynas , Loreto', '163', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1680', '160108', 'Punchana', 'Punchana, Maynas , Loreto', '163', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1681', '160110', 'Torres Causana', 'Torres Causana, Maynas , Loreto', '163', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1682', '160112', 'Belén', 'Belén, Maynas , Loreto', '163', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1683', '160113', 'San Juan Bautista', 'San Juan Bautista, Maynas , Loreto', '163', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1684', '160201', 'Yurimaguas', 'Yurimaguas, Alto Amazonas , Loreto', '164', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1685', '160202', 'Balsapuerto', 'Balsapuerto, Alto Amazonas , Loreto', '164', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1686', '160205', 'Jeberos', 'Jeberos, Alto Amazonas , Loreto', '164', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1687', '160206', 'Lagunas', 'Lagunas, Alto Amazonas , Loreto', '164', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1688', '160210', 'Santa Cruz', 'Santa Cruz, Alto Amazonas , Loreto', '164', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1689', '160211', 'Teniente Cesar López Rojas', 'Teniente Cesar López Rojas, Alto Amazonas , Loreto', '164', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1690', '160301', 'Nauta', 'Nauta, Loreto , Loreto', '165', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1691', '160302', 'Parinari', 'Parinari, Loreto , Loreto', '165', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1692', '160303', 'Tigre', 'Tigre, Loreto , Loreto', '165', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1693', '160304', 'Trompeteros', 'Trompeteros, Loreto , Loreto', '165', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1694', '160305', 'Urarinas', 'Urarinas, Loreto , Loreto', '165', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1695', '160401', 'Ramón Castilla', 'Ramón Castilla, Mariscal Ramón Castilla , Loreto', '166', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1696', '160402', 'Pebas', 'Pebas, Mariscal Ramón Castilla , Loreto', '166', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1697', '160403', 'Yavari', 'Yavari, Mariscal Ramón Castilla , Loreto', '166', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1698', '160404', 'San Pablo', 'San Pablo, Mariscal Ramón Castilla , Loreto', '166', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1699', '160501', 'Requena', 'Requena, Requena , Loreto', '167', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1700', '160502', 'Alto Tapiche', 'Alto Tapiche, Requena , Loreto', '167', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1701', '160503', 'Capelo', 'Capelo, Requena , Loreto', '167', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1702', '160504', 'Emilio San Martín', 'Emilio San Martín, Requena , Loreto', '167', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1703', '160505', 'Maquia', 'Maquia, Requena , Loreto', '167', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1704', '160506', 'Puinahua', 'Puinahua, Requena , Loreto', '167', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1705', '160507', 'Saquena', 'Saquena, Requena , Loreto', '167', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1706', '160508', 'Soplin', 'Soplin, Requena , Loreto', '167', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1707', '160509', 'Tapiche', 'Tapiche, Requena , Loreto', '167', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1708', '160510', 'Jenaro Herrera', 'Jenaro Herrera, Requena , Loreto', '167', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1709', '160511', 'Yaquerana', 'Yaquerana, Requena , Loreto', '167', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1710', '160601', 'Contamana', 'Contamana, Ucayali , Loreto', '168', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1711', '160602', 'Inahuaya', 'Inahuaya, Ucayali , Loreto', '168', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1712', '160603', 'Padre Márquez', 'Padre Márquez, Ucayali , Loreto', '168', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1713', '160604', 'Pampa Hermosa', 'Pampa Hermosa, Ucayali , Loreto', '168', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1714', '160605', 'Sarayacu', 'Sarayacu, Ucayali , Loreto', '168', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1715', '160606', 'Vargas Guerra', 'Vargas Guerra, Ucayali , Loreto', '168', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1716', '160701', 'Barranca', 'Barranca, Datem del Marañón , Loreto', '169', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1717', '160702', 'Cahuapanas', 'Cahuapanas, Datem del Marañón , Loreto', '169', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1718', '160703', 'Manseriche', 'Manseriche, Datem del Marañón , Loreto', '169', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1719', '160704', 'Morona', 'Morona, Datem del Marañón , Loreto', '169', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1720', '160705', 'Pastaza', 'Pastaza, Datem del Marañón , Loreto', '169', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1721', '160706', 'Andoas', 'Andoas, Datem del Marañón , Loreto', '169', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1722', '160801', 'Putumayo', 'Putumayo, Putumayo, Loreto', '170', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1723', '160802', 'Rosa Panduro', 'Rosa Panduro, Putumayo, Loreto', '170', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1724', '160803', 'Teniente Manuel Clavero', 'Teniente Manuel Clavero, Putumayo, Loreto', '170', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1725', '160804', 'Yaguas', 'Yaguas, Putumayo, Loreto', '170', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1726', '170101', 'Tambopata', 'Tambopata, Tambopata , Madre de Dios', '171', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1727', '170102', 'Inambari', 'Inambari, Tambopata , Madre de Dios', '171', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1728', '170103', 'Las Piedras', 'Las Piedras, Tambopata , Madre de Dios', '171', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1729', '170104', 'Laberinto', 'Laberinto, Tambopata , Madre de Dios', '171', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1730', '170201', 'Manu', 'Manu, Manu , Madre de Dios', '172', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1731', '170202', 'Fitzcarrald', 'Fitzcarrald, Manu , Madre de Dios', '172', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1732', '170203', 'Madre de Dios', 'Madre de Dios, Manu , Madre de Dios', '172', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1733', '170204', 'Huepetuhe', 'Huepetuhe, Manu , Madre de Dios', '172', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1734', '170301', 'Iñapari', 'Iñapari, Tahuamanu , Madre de Dios', '173', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1735', '170302', 'Iberia', 'Iberia, Tahuamanu , Madre de Dios', '173', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1736', '170303', 'Tahuamanu', 'Tahuamanu, Tahuamanu , Madre de Dios', '173', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1737', '180101', 'Moquegua', 'Moquegua, Mariscal Nieto , Moquegua', '174', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1738', '180102', 'Carumas', 'Carumas, Mariscal Nieto , Moquegua', '174', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1739', '180103', 'Cuchumbaya', 'Cuchumbaya, Mariscal Nieto , Moquegua', '174', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1740', '180104', 'Samegua', 'Samegua, Mariscal Nieto , Moquegua', '174', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1741', '180105', 'San Cristóbal', 'San Cristóbal, Mariscal Nieto , Moquegua', '174', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1742', '180106', 'Torata', 'Torata, Mariscal Nieto , Moquegua', '174', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1743', '180201', 'Omate', 'Omate, General Sánchez Cerro , Moquegua', '175', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1744', '180202', 'Chojata', 'Chojata, General Sánchez Cerro , Moquegua', '175', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1745', '180203', 'Coalaque', 'Coalaque, General Sánchez Cerro , Moquegua', '175', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1746', '180204', 'Ichuña', 'Ichuña, General Sánchez Cerro , Moquegua', '175', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1747', '180205', 'La Capilla', 'La Capilla, General Sánchez Cerro , Moquegua', '175', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1748', '180206', 'Lloque', 'Lloque, General Sánchez Cerro , Moquegua', '175', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1749', '180207', 'Matalaque', 'Matalaque, General Sánchez Cerro , Moquegua', '175', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1750', '180208', 'Puquina', 'Puquina, General Sánchez Cerro , Moquegua', '175', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1751', '180209', 'Quinistaquillas', 'Quinistaquillas, General Sánchez Cerro , Moquegua', '175', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1752', '180210', 'Ubinas', 'Ubinas, General Sánchez Cerro , Moquegua', '175', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1753', '180211', 'Yunga', 'Yunga, General Sánchez Cerro , Moquegua', '175', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1754', '180301', 'Ilo', 'Ilo, Ilo , Moquegua', '176', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1755', '180302', 'El Algarrobal', 'El Algarrobal, Ilo , Moquegua', '176', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1756', '180303', 'Pacocha', 'Pacocha, Ilo , Moquegua', '176', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1757', '190101', 'Chaupimarca', 'Chaupimarca, Pasco , Pasco', '177', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1758', '190102', 'Huachon', 'Huachon, Pasco , Pasco', '177', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1759', '190103', 'Huariaca', 'Huariaca, Pasco , Pasco', '177', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1760', '190104', 'Huayllay', 'Huayllay, Pasco , Pasco', '177', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1761', '190105', 'Ninacaca', 'Ninacaca, Pasco , Pasco', '177', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1762', '190106', 'Pallanchacra', 'Pallanchacra, Pasco , Pasco', '177', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1763', '190107', 'Paucartambo', 'Paucartambo, Pasco , Pasco', '177', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1764', '190108', 'San Francisco de Asís de Yarusyacan', 'San Francisco de Asís de Yarusyacan, Pasco , Pasco', '177', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1765', '190109', 'Simon Bolívar', 'Simon Bolívar, Pasco , Pasco', '177', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1766', '190110', 'Ticlacayan', 'Ticlacayan, Pasco , Pasco', '177', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1767', '190111', 'Tinyahuarco', 'Tinyahuarco, Pasco , Pasco', '177', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1768', '190112', 'Vicco', 'Vicco, Pasco , Pasco', '177', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1769', '190113', 'Yanacancha', 'Yanacancha, Pasco , Pasco', '177', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1770', '190201', 'Yanahuanca', 'Yanahuanca, Daniel Alcides Carrión , Pasco', '178', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1771', '190202', 'Chacayan', 'Chacayan, Daniel Alcides Carrión , Pasco', '178', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1772', '190203', 'Goyllarisquizga', 'Goyllarisquizga, Daniel Alcides Carrión , Pasco', '178', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1773', '190204', 'Paucar', 'Paucar, Daniel Alcides Carrión , Pasco', '178', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1774', '190205', 'San Pedro de Pillao', 'San Pedro de Pillao, Daniel Alcides Carrión , Pasco', '178', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1775', '190206', 'Santa Ana de Tusi', 'Santa Ana de Tusi, Daniel Alcides Carrión , Pasco', '178', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1776', '190207', 'Tapuc', 'Tapuc, Daniel Alcides Carrión , Pasco', '178', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1777', '190208', 'Vilcabamba', 'Vilcabamba, Daniel Alcides Carrión , Pasco', '178', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1778', '190301', 'Oxapampa', 'Oxapampa, Oxapampa , Pasco', '179', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1779', '190302', 'Chontabamba', 'Chontabamba, Oxapampa , Pasco', '179', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1780', '190303', 'Huancabamba', 'Huancabamba, Oxapampa , Pasco', '179', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1781', '190304', 'Palcazu', 'Palcazu, Oxapampa , Pasco', '179', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1782', '190305', 'Pozuzo', 'Pozuzo, Oxapampa , Pasco', '179', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1783', '190306', 'Puerto Bermúdez', 'Puerto Bermúdez, Oxapampa , Pasco', '179', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1784', '190307', 'Villa Rica', 'Villa Rica, Oxapampa , Pasco', '179', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1785', '190308', 'Constitución', 'Constitución, Oxapampa , Pasco', '179', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1786', '200101', 'Piura', 'Piura, Piura , Piura', '180', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1787', '200104', 'Castilla', 'Castilla, Piura , Piura', '180', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1788', '200105', 'Catacaos', 'Catacaos, Piura , Piura', '180', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1789', '200107', 'Cura Mori', 'Cura Mori, Piura , Piura', '180', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1790', '200108', 'El Tallan', 'El Tallan, Piura , Piura', '180', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1791', '200109', 'La Arena', 'La Arena, Piura , Piura', '180', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1792', '200110', 'La Unión', 'La Unión, Piura , Piura', '180', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1793', '200111', 'Las Lomas', 'Las Lomas, Piura , Piura', '180', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1794', '200114', 'Tambo Grande', 'Tambo Grande, Piura , Piura', '180', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1795', '200115', 'Veintiseis de Octubre', 'Veintiseis de Octubre, Piura , Piura', '180', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1796', '200201', 'Ayabaca', 'Ayabaca, Ayabaca , Piura', '181', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1797', '200202', 'Frias', 'Frias, Ayabaca , Piura', '181', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1798', '200203', 'Jilili', 'Jilili, Ayabaca , Piura', '181', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1799', '200204', 'Lagunas', 'Lagunas, Ayabaca , Piura', '181', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1800', '200205', 'Montero', 'Montero, Ayabaca , Piura', '181', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1801', '200206', 'Pacaipampa', 'Pacaipampa, Ayabaca , Piura', '181', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1802', '200207', 'Paimas', 'Paimas, Ayabaca , Piura', '181', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1803', '200208', 'Sapillica', 'Sapillica, Ayabaca , Piura', '181', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1804', '200209', 'Sicchez', 'Sicchez, Ayabaca , Piura', '181', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1805', '200210', 'Suyo', 'Suyo, Ayabaca , Piura', '181', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1806', '200301', 'Huancabamba', 'Huancabamba, Huancabamba , Piura', '182', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1807', '200302', 'Canchaque', 'Canchaque, Huancabamba , Piura', '182', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1808', '200303', 'El Carmen de la Frontera', 'El Carmen de la Frontera, Huancabamba , Piura', '182', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1809', '200304', 'Huarmaca', 'Huarmaca, Huancabamba , Piura', '182', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1810', '200305', 'Lalaquiz', 'Lalaquiz, Huancabamba , Piura', '182', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1811', '200306', 'San Miguel de El Faique', 'San Miguel de El Faique, Huancabamba , Piura', '182', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1812', '200307', 'Sondor', 'Sondor, Huancabamba , Piura', '182', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1813', '200308', 'Sondorillo', 'Sondorillo, Huancabamba , Piura', '182', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1814', '200401', 'Chulucanas', 'Chulucanas, Morropón , Piura', '183', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1815', '200402', 'Buenos Aires', 'Buenos Aires, Morropón , Piura', '183', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1816', '200403', 'Chalaco', 'Chalaco, Morropón , Piura', '183', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1817', '200404', 'La Matanza', 'La Matanza, Morropón , Piura', '183', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1818', '200405', 'Morropon', 'Morropon, Morropón , Piura', '183', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1819', '200406', 'Salitral', 'Salitral, Morropón , Piura', '183', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1820', '200407', 'San Juan de Bigote', 'San Juan de Bigote, Morropón , Piura', '183', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1821', '200408', 'Santa Catalina de Mossa', 'Santa Catalina de Mossa, Morropón , Piura', '183', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1822', '200409', 'Santo Domingo', 'Santo Domingo, Morropón , Piura', '183', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1823', '200410', 'Yamango', 'Yamango, Morropón , Piura', '183', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1824', '200501', 'Paita', 'Paita, Paita , Piura', '184', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1825', '200502', 'Amotape', 'Amotape, Paita , Piura', '184', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1826', '200503', 'Arenal', 'Arenal, Paita , Piura', '184', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1827', '200504', 'Colan', 'Colan, Paita , Piura', '184', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1828', '200505', 'La Huaca', 'La Huaca, Paita , Piura', '184', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1829', '200506', 'Tamarindo', 'Tamarindo, Paita , Piura', '184', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1830', '200507', 'Vichayal', 'Vichayal, Paita , Piura', '184', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1831', '200601', 'Sullana', 'Sullana, Sullana , Piura', '185', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1832', '200602', 'Bellavista', 'Bellavista, Sullana , Piura', '185', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1833', '200603', 'Ignacio Escudero', 'Ignacio Escudero, Sullana , Piura', '185', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1834', '200604', 'Lancones', 'Lancones, Sullana , Piura', '185', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1835', '200605', 'Marcavelica', 'Marcavelica, Sullana , Piura', '185', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1836', '200606', 'Miguel Checa', 'Miguel Checa, Sullana , Piura', '185', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1837', '200607', 'Querecotillo', 'Querecotillo, Sullana , Piura', '185', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1838', '200608', 'Salitral', 'Salitral, Sullana , Piura', '185', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1839', '200701', 'Pariñas', 'Pariñas, Talara , Piura', '186', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1840', '200702', 'El Alto', 'El Alto, Talara , Piura', '186', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1841', '200703', 'La Brea', 'La Brea, Talara , Piura', '186', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1842', '200704', 'Lobitos', 'Lobitos, Talara , Piura', '186', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1843', '200705', 'Los Organos', 'Los Organos, Talara , Piura', '186', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1844', '200706', 'Mancora', 'Mancora, Talara , Piura', '186', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1845', '200801', 'Sechura', 'Sechura, Sechura , Piura', '187', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1846', '200802', 'Bellavista de la Unión', 'Bellavista de la Unión, Sechura , Piura', '187', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1847', '200803', 'Bernal', 'Bernal, Sechura , Piura', '187', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1848', '200804', 'Cristo Nos Valga', 'Cristo Nos Valga, Sechura , Piura', '187', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1849', '200805', 'Vice', 'Vice, Sechura , Piura', '187', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1850', '200806', 'Rinconada Llicuar', 'Rinconada Llicuar, Sechura , Piura', '187', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1851', '210101', 'Puno', 'Puno, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1852', '210102', 'Acora', 'Acora, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1853', '210103', 'Amantani', 'Amantani, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1854', '210104', 'Atuncolla', 'Atuncolla, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1855', '210105', 'Capachica', 'Capachica, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1856', '210106', 'Chucuito', 'Chucuito, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1857', '210107', 'Coata', 'Coata, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1858', '210108', 'Huata', 'Huata, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1859', '210109', 'Mañazo', 'Mañazo, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1860', '210110', 'Paucarcolla', 'Paucarcolla, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1861', '210111', 'Pichacani', 'Pichacani, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1862', '210112', 'Plateria', 'Plateria, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1863', '210113', 'San Antonio', 'San Antonio, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1864', '210114', 'Tiquillaca', 'Tiquillaca, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1865', '210115', 'Vilque', 'Vilque, Puno , Puno', '188', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1866', '210201', 'Azángaro', 'Azángaro, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1867', '210202', 'Achaya', 'Achaya, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1868', '210203', 'Arapa', 'Arapa, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1869', '210204', 'Asillo', 'Asillo, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1870', '210205', 'Caminaca', 'Caminaca, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1871', '210206', 'Chupa', 'Chupa, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1872', '210207', 'José Domingo Choquehuanca', 'José Domingo Choquehuanca, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1873', '210208', 'Muñani', 'Muñani, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1874', '210209', 'Potoni', 'Potoni, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1875', '210210', 'Saman', 'Saman, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1876', '210211', 'San Anton', 'San Anton, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1877', '210212', 'San José', 'San José, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1878', '210213', 'San Juan de Salinas', 'San Juan de Salinas, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1879', '210214', 'Santiago de Pupuja', 'Santiago de Pupuja, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1880', '210215', 'Tirapata', 'Tirapata, Azángaro , Puno', '189', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1881', '210301', 'Macusani', 'Macusani, Carabaya , Puno', '190', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1882', '210302', 'Ajoyani', 'Ajoyani, Carabaya , Puno', '190', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1883', '210303', 'Ayapata', 'Ayapata, Carabaya , Puno', '190', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1884', '210304', 'Coasa', 'Coasa, Carabaya , Puno', '190', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1885', '210305', 'Corani', 'Corani, Carabaya , Puno', '190', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1886', '210306', 'Crucero', 'Crucero, Carabaya , Puno', '190', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1887', '210307', 'Ituata', 'Ituata, Carabaya , Puno', '190', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1888', '210308', 'Ollachea', 'Ollachea, Carabaya , Puno', '190', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1889', '210309', 'San Gaban', 'San Gaban, Carabaya , Puno', '190', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1890', '210310', 'Usicayos', 'Usicayos, Carabaya , Puno', '190', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1891', '210401', 'Juli', 'Juli, Chucuito , Puno', '191', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1892', '210402', 'Desaguadero', 'Desaguadero, Chucuito , Puno', '191', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1893', '210403', 'Huacullani', 'Huacullani, Chucuito , Puno', '191', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1894', '210404', 'Kelluyo', 'Kelluyo, Chucuito , Puno', '191', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1895', '210405', 'Pisacoma', 'Pisacoma, Chucuito , Puno', '191', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1896', '210406', 'Pomata', 'Pomata, Chucuito , Puno', '191', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1897', '210407', 'Zepita', 'Zepita, Chucuito , Puno', '191', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1898', '210501', 'Ilave', 'Ilave, El Collao , Puno', '192', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1899', '210502', 'Capazo', 'Capazo, El Collao , Puno', '192', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1900', '210503', 'Pilcuyo', 'Pilcuyo, El Collao , Puno', '192', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1901', '210504', 'Santa Rosa', 'Santa Rosa, El Collao , Puno', '192', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1902', '210505', 'Conduriri', 'Conduriri, El Collao , Puno', '192', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1903', '210601', 'Huancane', 'Huancane, Huancané , Puno', '193', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1904', '210602', 'Cojata', 'Cojata, Huancané , Puno', '193', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1905', '210603', 'Huatasani', 'Huatasani, Huancané , Puno', '193', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1906', '210604', 'Inchupalla', 'Inchupalla, Huancané , Puno', '193', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1907', '210605', 'Pusi', 'Pusi, Huancané , Puno', '193', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1908', '210606', 'Rosaspata', 'Rosaspata, Huancané , Puno', '193', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1909', '210607', 'Taraco', 'Taraco, Huancané , Puno', '193', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1910', '210608', 'Vilque Chico', 'Vilque Chico, Huancané , Puno', '193', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1911', '210701', 'Lampa', 'Lampa, Lampa , Puno', '194', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1912', '210702', 'Cabanilla', 'Cabanilla, Lampa , Puno', '194', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1913', '210703', 'Calapuja', 'Calapuja, Lampa , Puno', '194', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1914', '210704', 'Nicasio', 'Nicasio, Lampa , Puno', '194', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1915', '210705', 'Ocuviri', 'Ocuviri, Lampa , Puno', '194', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1916', '210706', 'Palca', 'Palca, Lampa , Puno', '194', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1917', '210707', 'Paratia', 'Paratia, Lampa , Puno', '194', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1918', '210708', 'Pucara', 'Pucara, Lampa , Puno', '194', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1919', '210709', 'Santa Lucia', 'Santa Lucia, Lampa , Puno', '194', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1920', '210710', 'Vilavila', 'Vilavila, Lampa , Puno', '194', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1921', '210801', 'Ayaviri', 'Ayaviri, Melgar , Puno', '195', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1922', '210802', 'Antauta', 'Antauta, Melgar , Puno', '195', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1923', '210803', 'Cupi', 'Cupi, Melgar , Puno', '195', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1924', '210804', 'Llalli', 'Llalli, Melgar , Puno', '195', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1925', '210805', 'Macari', 'Macari, Melgar , Puno', '195', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1926', '210806', 'Nuñoa', 'Nuñoa, Melgar , Puno', '195', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1927', '210807', 'Orurillo', 'Orurillo, Melgar , Puno', '195', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1928', '210808', 'Santa Rosa', 'Santa Rosa, Melgar , Puno', '195', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1929', '210809', 'Umachiri', 'Umachiri, Melgar , Puno', '195', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1930', '210901', 'Moho', 'Moho, Moho , Puno', '196', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1931', '210902', 'Conima', 'Conima, Moho , Puno', '196', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1932', '210903', 'Huayrapata', 'Huayrapata, Moho , Puno', '196', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1933', '210904', 'Tilali', 'Tilali, Moho , Puno', '196', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1934', '211001', 'Putina', 'Putina, San Antonio de Putina , Puno', '197', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1935', '211002', 'Ananea', 'Ananea, San Antonio de Putina , Puno', '197', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1936', '211003', 'Pedro Vilca Apaza', 'Pedro Vilca Apaza, San Antonio de Putina , Puno', '197', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1937', '211004', 'Quilcapuncu', 'Quilcapuncu, San Antonio de Putina , Puno', '197', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1938', '211005', 'Sina', 'Sina, San Antonio de Putina , Puno', '197', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1939', '211101', 'Juliaca', 'Juliaca, San Román , Puno', '198', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1940', '211102', 'Cabana', 'Cabana, San Román , Puno', '198', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1941', '211103', 'Cabanillas', 'Cabanillas, San Román , Puno', '198', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1942', '211104', 'Caracoto', 'Caracoto, San Román , Puno', '198', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1943', '211105', 'San Miguel', 'San Miguel, San Román , Puno', '198', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1944', '211201', 'Sandia', 'Sandia, Sandia , Puno', '199', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1945', '211202', 'Cuyocuyo', 'Cuyocuyo, Sandia , Puno', '199', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1946', '211203', 'Limbani', 'Limbani, Sandia , Puno', '199', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1947', '211204', 'Patambuco', 'Patambuco, Sandia , Puno', '199', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1948', '211205', 'Phara', 'Phara, Sandia , Puno', '199', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1949', '211206', 'Quiaca', 'Quiaca, Sandia , Puno', '199', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1950', '211207', 'San Juan del Oro', 'San Juan del Oro, Sandia , Puno', '199', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1951', '211208', 'Yanahuaya', 'Yanahuaya, Sandia , Puno', '199', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1952', '211209', 'Alto Inambari', 'Alto Inambari, Sandia , Puno', '199', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1953', '211210', 'San Pedro de Putina Punco', 'San Pedro de Putina Punco, Sandia , Puno', '199', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1954', '211301', 'Yunguyo', 'Yunguyo, Yunguyo , Puno', '200', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1955', '211302', 'Anapia', 'Anapia, Yunguyo , Puno', '200', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1956', '211303', 'Copani', 'Copani, Yunguyo , Puno', '200', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1957', '211304', 'Cuturapi', 'Cuturapi, Yunguyo , Puno', '200', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1958', '211305', 'Ollaraya', 'Ollaraya, Yunguyo , Puno', '200', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1959', '211306', 'Tinicachi', 'Tinicachi, Yunguyo , Puno', '200', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1960', '211307', 'Unicachi', 'Unicachi, Yunguyo , Puno', '200', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1961', '220101', 'Moyobamba', 'Moyobamba, Moyobamba , San Martín', '201', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1962', '220102', 'Calzada', 'Calzada, Moyobamba , San Martín', '201', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1963', '220103', 'Habana', 'Habana, Moyobamba , San Martín', '201', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1964', '220104', 'Jepelacio', 'Jepelacio, Moyobamba , San Martín', '201', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1965', '220105', 'Soritor', 'Soritor, Moyobamba , San Martín', '201', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1966', '220106', 'Yantalo', 'Yantalo, Moyobamba , San Martín', '201', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1967', '220201', 'Bellavista', 'Bellavista, Bellavista , San Martín', '202', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1968', '220202', 'Alto Biavo', 'Alto Biavo, Bellavista , San Martín', '202', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1969', '220203', 'Bajo Biavo', 'Bajo Biavo, Bellavista , San Martín', '202', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1970', '220204', 'Huallaga', 'Huallaga, Bellavista , San Martín', '202', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1971', '220205', 'San Pablo', 'San Pablo, Bellavista , San Martín', '202', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1972', '220206', 'San Rafael', 'San Rafael, Bellavista , San Martín', '202', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1973', '220301', 'San José de Sisa', 'San José de Sisa, El Dorado , San Martín', '203', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1974', '220302', 'Agua Blanca', 'Agua Blanca, El Dorado , San Martín', '203', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1975', '220303', 'San Martín', 'San Martín, El Dorado , San Martín', '203', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1976', '220304', 'Santa Rosa', 'Santa Rosa, El Dorado , San Martín', '203', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1977', '220305', 'Shatoja', 'Shatoja, El Dorado , San Martín', '203', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1978', '220401', 'Saposoa', 'Saposoa, Huallaga , San Martín', '204', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1979', '220402', 'Alto Saposoa', 'Alto Saposoa, Huallaga , San Martín', '204', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1980', '220403', 'El Eslabón', 'El Eslabón, Huallaga , San Martín', '204', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1981', '220404', 'Piscoyacu', 'Piscoyacu, Huallaga , San Martín', '204', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1982', '220405', 'Sacanche', 'Sacanche, Huallaga , San Martín', '204', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1983', '220406', 'Tingo de Saposoa', 'Tingo de Saposoa, Huallaga , San Martín', '204', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1984', '220501', 'Lamas', 'Lamas, Lamas , San Martín', '205', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1985', '220502', 'Alonso de Alvarado', 'Alonso de Alvarado, Lamas , San Martín', '205', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1986', '220503', 'Barranquita', 'Barranquita, Lamas , San Martín', '205', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1987', '220504', 'Caynarachi', 'Caynarachi, Lamas , San Martín', '205', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1988', '220505', 'Cuñumbuqui', 'Cuñumbuqui, Lamas , San Martín', '205', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1989', '220506', 'Pinto Recodo', 'Pinto Recodo, Lamas , San Martín', '205', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1990', '220507', 'Rumisapa', 'Rumisapa, Lamas , San Martín', '205', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1991', '220508', 'San Roque de Cumbaza', 'San Roque de Cumbaza, Lamas , San Martín', '205', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1992', '220509', 'Shanao', 'Shanao, Lamas , San Martín', '205', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1993', '220510', 'Tabalosos', 'Tabalosos, Lamas , San Martín', '205', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1994', '220511', 'Zapatero', 'Zapatero, Lamas , San Martín', '205', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1995', '220601', 'Juanjuí', 'Juanjuí, Mariscal Cáceres , San Martín', '206', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1996', '220602', 'Campanilla', 'Campanilla, Mariscal Cáceres , San Martín', '206', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1997', '220603', 'Huicungo', 'Huicungo, Mariscal Cáceres , San Martín', '206', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1998', '220604', 'Pachiza', 'Pachiza, Mariscal Cáceres , San Martín', '206', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('1999', '220605', 'Pajarillo', 'Pajarillo, Mariscal Cáceres , San Martín', '206', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2000', '220701', 'Picota', 'Picota, Picota , San Martín', '207', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2001', '220702', 'Buenos Aires', 'Buenos Aires, Picota , San Martín', '207', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2002', '220703', 'Caspisapa', 'Caspisapa, Picota , San Martín', '207', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2003', '220704', 'Pilluana', 'Pilluana, Picota , San Martín', '207', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2004', '220705', 'Pucacaca', 'Pucacaca, Picota , San Martín', '207', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2005', '220706', 'San Cristóbal', 'San Cristóbal, Picota , San Martín', '207', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2006', '220707', 'San Hilarión', 'San Hilarión, Picota , San Martín', '207', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2007', '220708', 'Shamboyacu', 'Shamboyacu, Picota , San Martín', '207', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2008', '220709', 'Tingo de Ponasa', 'Tingo de Ponasa, Picota , San Martín', '207', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2009', '220710', 'Tres Unidos', 'Tres Unidos, Picota , San Martín', '207', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2010', '220801', 'Rioja', 'Rioja, Rioja , San Martín', '208', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2011', '220802', 'Awajun', 'Awajun, Rioja , San Martín', '208', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2012', '220803', 'Elías Soplin Vargas', 'Elías Soplin Vargas, Rioja , San Martín', '208', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2013', '220804', 'Nueva Cajamarca', 'Nueva Cajamarca, Rioja , San Martín', '208', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2014', '220805', 'Pardo Miguel', 'Pardo Miguel, Rioja , San Martín', '208', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2015', '220806', 'Posic', 'Posic, Rioja , San Martín', '208', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2016', '220807', 'San Fernando', 'San Fernando, Rioja , San Martín', '208', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2017', '220808', 'Yorongos', 'Yorongos, Rioja , San Martín', '208', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2018', '220809', 'Yuracyacu', 'Yuracyacu, Rioja , San Martín', '208', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2019', '220901', 'Tarapoto', 'Tarapoto, San Martín , San Martín', '209', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2020', '220902', 'Alberto Leveau', 'Alberto Leveau, San Martín , San Martín', '209', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2021', '220903', 'Cacatachi', 'Cacatachi, San Martín , San Martín', '209', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2022', '220904', 'Chazuta', 'Chazuta, San Martín , San Martín', '209', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2023', '220905', 'Chipurana', 'Chipurana, San Martín , San Martín', '209', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2024', '220906', 'El Porvenir', 'El Porvenir, San Martín , San Martín', '209', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2025', '220907', 'Huimbayoc', 'Huimbayoc, San Martín , San Martín', '209', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2026', '220908', 'Juan Guerra', 'Juan Guerra, San Martín , San Martín', '209', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2027', '220909', 'La Banda de Shilcayo', 'La Banda de Shilcayo, San Martín , San Martín', '209', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2028', '220910', 'Morales', 'Morales, San Martín , San Martín', '209', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2029', '220911', 'Papaplaya', 'Papaplaya, San Martín , San Martín', '209', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2030', '220912', 'San Antonio', 'San Antonio, San Martín , San Martín', '209', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2031', '220913', 'Sauce', 'Sauce, San Martín , San Martín', '209', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2032', '220914', 'Shapaja', 'Shapaja, San Martín , San Martín', '209', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2033', '221001', 'Tocache', 'Tocache, Tocache , San Martín', '210', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2034', '221002', 'Nuevo Progreso', 'Nuevo Progreso, Tocache , San Martín', '210', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2035', '221003', 'Polvora', 'Polvora, Tocache , San Martín', '210', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2036', '221004', 'Shunte', 'Shunte, Tocache , San Martín', '210', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2037', '221005', 'Uchiza', 'Uchiza, Tocache , San Martín', '210', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2038', '230101', 'Tacna', 'Tacna, Tacna , Tacna', '211', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2039', '230102', 'Alto de la Alianza', 'Alto de la Alianza, Tacna , Tacna', '211', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2040', '230103', 'Calana', 'Calana, Tacna , Tacna', '211', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2041', '230104', 'Ciudad Nueva', 'Ciudad Nueva, Tacna , Tacna', '211', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2042', '230105', 'Inclan', 'Inclan, Tacna , Tacna', '211', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2043', '230106', 'Pachia', 'Pachia, Tacna , Tacna', '211', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2044', '230107', 'Palca', 'Palca, Tacna , Tacna', '211', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2045', '230108', 'Pocollay', 'Pocollay, Tacna , Tacna', '211', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2046', '230109', 'Sama', 'Sama, Tacna , Tacna', '211', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2047', '230110', 'Coronel Gregorio Albarracín Lanchipa', 'Coronel Gregorio Albarracín Lanchipa, Tacna , Tacna', '211', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2048', '230111', 'La Yarada los Palos', 'La Yarada los Palos, Tacna , Tacna', '211', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2049', '230201', 'Candarave', 'Candarave, Candarave , Tacna', '212', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2050', '230202', 'Cairani', 'Cairani, Candarave , Tacna', '212', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2051', '230203', 'Camilaca', 'Camilaca, Candarave , Tacna', '212', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2052', '230204', 'Curibaya', 'Curibaya, Candarave , Tacna', '212', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2053', '230205', 'Huanuara', 'Huanuara, Candarave , Tacna', '212', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2054', '230206', 'Quilahuani', 'Quilahuani, Candarave , Tacna', '212', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2055', '230301', 'Locumba', 'Locumba, Jorge Basadre , Tacna', '213', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2056', '230302', 'Ilabaya', 'Ilabaya, Jorge Basadre , Tacna', '213', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2057', '230303', 'Ite', 'Ite, Jorge Basadre , Tacna', '213', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2058', '230401', 'Tarata', 'Tarata, Tarata , Tacna', '214', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2059', '230402', 'Héroes Albarracín', 'Héroes Albarracín, Tarata , Tacna', '214', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2060', '230403', 'Estique', 'Estique, Tarata , Tacna', '214', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2061', '230404', 'Estique-Pampa', 'Estique-Pampa, Tarata , Tacna', '214', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2062', '230405', 'Sitajara', 'Sitajara, Tarata , Tacna', '214', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2063', '230406', 'Susapaya', 'Susapaya, Tarata , Tacna', '214', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2064', '230407', 'Tarucachi', 'Tarucachi, Tarata , Tacna', '214', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2065', '230408', 'Ticaco', 'Ticaco, Tarata , Tacna', '214', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2066', '240101', 'Tumbes', 'Tumbes, Tumbes , Tumbes', '215', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2067', '240102', 'Corrales', 'Corrales, Tumbes , Tumbes', '215', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2068', '240103', 'La Cruz', 'La Cruz, Tumbes , Tumbes', '215', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2069', '240104', 'Pampas de Hospital', 'Pampas de Hospital, Tumbes , Tumbes', '215', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2070', '240105', 'San Jacinto', 'San Jacinto, Tumbes , Tumbes', '215', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2071', '240106', 'San Juan de la Virgen', 'San Juan de la Virgen, Tumbes , Tumbes', '215', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2072', '240201', 'Zorritos', 'Zorritos, Contralmirante Villar , Tumbes', '216', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2073', '240202', 'Casitas', 'Casitas, Contralmirante Villar , Tumbes', '216', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2074', '240203', 'Canoas de Punta Sal', 'Canoas de Punta Sal, Contralmirante Villar , Tumbes', '216', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2075', '240301', 'Zarumilla', 'Zarumilla, Zarumilla , Tumbes', '217', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2076', '240302', 'Aguas Verdes', 'Aguas Verdes, Zarumilla , Tumbes', '217', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2077', '240303', 'Matapalo', 'Matapalo, Zarumilla , Tumbes', '217', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2078', '240304', 'Papayal', 'Papayal, Zarumilla , Tumbes', '217', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2079', '250101', 'Calleria', 'Calleria, Coronel Portillo , Ucayali', '218', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2080', '250102', 'Campoverde', 'Campoverde, Coronel Portillo , Ucayali', '218', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2081', '250103', 'Iparia', 'Iparia, Coronel Portillo , Ucayali', '218', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2082', '250104', 'Masisea', 'Masisea, Coronel Portillo , Ucayali', '218', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2083', '250105', 'Yarinacocha', 'Yarinacocha, Coronel Portillo , Ucayali', '218', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2084', '250106', 'Nueva Requena', 'Nueva Requena, Coronel Portillo , Ucayali', '218', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2085', '250107', 'Manantay', 'Manantay, Coronel Portillo , Ucayali', '218', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2086', '250201', 'Raymondi', 'Raymondi, Atalaya , Ucayali', '219', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2087', '250202', 'Sepahua', 'Sepahua, Atalaya , Ucayali', '219', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2088', '250203', 'Tahuania', 'Tahuania, Atalaya , Ucayali', '219', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2089', '250204', 'Yurua', 'Yurua, Atalaya , Ucayali', '219', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2090', '250301', 'Padre Abad', 'Padre Abad, Padre Abad , Ucayali', '220', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2091', '250302', 'Irazola', 'Irazola, Padre Abad , Ucayali', '220', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2092', '250303', 'Curimana', 'Curimana, Padre Abad , Ucayali', '220', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2093', '250304', 'Neshuya', 'Neshuya, Padre Abad , Ucayali', '220', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2094', '250305', 'Alexander Von Humboldt', 'Alexander Von Humboldt, Padre Abad , Ucayali', '220', '1', '1', '3', '1');
INSERT INTO `ubigeo` VALUES ('2095', '250401', 'Purus', 'Purus, Purús, Ucayali', '221', '1', '1', '3', '1');

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
