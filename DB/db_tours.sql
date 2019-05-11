/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_tours

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-05-10 19:53:05
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
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of actividad
-- ----------------------------
INSERT INTO `actividad` VALUES ('1', 'Actividades acuáticas', '&lt;p&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;El concepto de actividades acuáticas ha sido acuñado recientemente en nuestra sociedad, pues a lo largo de historia el agua ha sido entendida bajo distintas concepciones, de las cuales la más conocida ha sido el término de natación. Pero, ¿Es natación todo lo que realizamos en piscina?&lt;/p&gt;', '4', '1');
INSERT INTO `actividad` VALUES ('2', 'Actividades aéreas', '&lt;p&gt;Los deportes aeronáuticos exigen capacidad física, habilidad, destreza, competitividad, afán de superación , respeto por las normas . Los deportes aéreos contribuyen a la educación del cuerpo y la mente en un ambiente técnico y en un medio singularmente bello como es el aire.&lt;/p&gt;', '4', '1');
INSERT INTO `actividad` VALUES ('3', 'Actividades acuáticas', '', '2', '1');
INSERT INTO `actividad` VALUES ('4', 'Actividades aéreas', '', '0', '1');
INSERT INTO `actividad` VALUES ('5', 'Andinismo, alpinismo', '', '0', '1');
INSERT INTO `actividad` VALUES ('6', 'Barranquismo, canyoning', '', '0', '1');
INSERT INTO `actividad` VALUES ('7', 'Bicicleta', '', '0', '1');
INSERT INTO `actividad` VALUES ('8', 'Buceo', '', '0', '1');
INSERT INTO `actividad` VALUES ('9', 'Buggies, areneros, off road', '', '0', '1');
INSERT INTO `actividad` VALUES ('10', 'Bus turístico, panorámico', '', '0', '1');
INSERT INTO `actividad` VALUES ('11', 'Caminata, senderismo, trekking', '', '0', '1');
INSERT INTO `actividad` VALUES ('12', 'Canopy, zipline, tirolesa', '', '0', '1');
INSERT INTO `actividad` VALUES ('13', 'Canotaje', '', '0', '1');
INSERT INTO `actividad` VALUES ('14', 'Cata de Vinos o Licores', '', '0', '1');
INSERT INTO `actividad` VALUES ('15', 'Compra de artesanía', '', '0', '1');
INSERT INTO `actividad` VALUES ('16', 'Cuatrimoto, Quads, ATV', '', '0', '1');
INSERT INTO `actividad` VALUES ('17', 'Degustación otras bebidas', '', '0', '1');
INSERT INTO `actividad` VALUES ('18', 'Escalada', '', '0', '1');
INSERT INTO `actividad` VALUES ('19', 'Espeleología', '', '0', '1');
INSERT INTO `actividad` VALUES ('20', 'Gastronomía', '', '0', '1');
INSERT INTO `actividad` VALUES ('21', 'Kayak, piraguismo', '', '0', '1');
INSERT INTO `actividad` VALUES ('22', 'Kitesurf', '', '0', '1');
INSERT INTO `actividad` VALUES ('23', 'Misticismo, chamanismo', '', '0', '1');
INSERT INTO `actividad` VALUES ('24', 'Moto Acuatica', '', '0', '1');
INSERT INTO `actividad` VALUES ('25', 'Motocross', '', '0', '1');
INSERT INTO `actividad` VALUES ('26', 'Museos, monumentos', '', '0', '1');
INSERT INTO `actividad` VALUES ('27', 'Observación de aves', '', '0', '1');
INSERT INTO `actividad` VALUES ('28', 'Observación fauna y flora', '', '0', '1');
INSERT INTO `actividad` VALUES ('29', 'Off Road 4x4', '', '0', '1');
INSERT INTO `actividad` VALUES ('30', 'Paintball', '', '0', '1');
INSERT INTO `actividad` VALUES ('31', 'Parapente', '', '0', '1');
INSERT INTO `actividad` VALUES ('32', 'Paseo Áreas Naturales', '', '0', '1');
INSERT INTO `actividad` VALUES ('33', 'Paseos a caballo', '', '0', '1');
INSERT INTO `actividad` VALUES ('34', 'Paseos Aéreos', '', '0', '1');
INSERT INTO `actividad` VALUES ('35', 'Paseos en Embarcaciones', '', '0', '1');
INSERT INTO `actividad` VALUES ('36', 'Paseos en otros vehículos', '', '0', '1');
INSERT INTO `actividad` VALUES ('37', 'Pesca Deportiva', '', '0', '1');
INSERT INTO `actividad` VALUES ('38', 'Remo', '', '0', '1');
INSERT INTO `actividad` VALUES ('39', 'Sandboard', '', '0', '1');
INSERT INTO `actividad` VALUES ('40', 'Shows y espectaculos', '', '0', '1');
INSERT INTO `actividad` VALUES ('41', 'Surf', '', '0', '1');
INSERT INTO `actividad` VALUES ('42', 'Teleférico, funicular, telecabinas', '', '0', '1');
INSERT INTO `actividad` VALUES ('43', 'Termalismo', '', '0', '1');
INSERT INTO `actividad` VALUES ('44', 'Visitas arqueológicas', '', '0', '1');
INSERT INTO `actividad` VALUES ('45', 'Visitas culturales', '', '0', '1');
INSERT INTO `actividad` VALUES ('46', 'Visitas guiadas', '', '0', '1');
INSERT INTO `actividad` VALUES ('47', 'Visitas Históricas', '', '0', '1');
INSERT INTO `actividad` VALUES ('48', 'Windsurf', '', '0', '1');
INSERT INTO `actividad` VALUES ('49', '', '', '2', '1');
INSERT INTO `actividad` VALUES ('50', '', '', '0', '1');
INSERT INTO `actividad` VALUES ('51', '', '', '0', '1');
INSERT INTO `actividad` VALUES ('52', '', '', '0', '1');
INSERT INTO `actividad` VALUES ('53', '', '', '0', '1');

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
  `dia` int(11) DEFAULT '0',
  `titulo` varchar(255) NOT NULL DEFAULT '',
  `descripcion` text,
  `estado` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_itinerario_paquete1_idx` (`paquete_id`),
  CONSTRAINT `fk_itinerario_paquete1` FOREIGN KEY (`paquete_id`) REFERENCES `paquete` (`paquete_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=473 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of itinerario
-- ----------------------------
INSERT INTO `itinerario` VALUES ('1', '24', '1', '', '', '1');
INSERT INTO `itinerario` VALUES ('2', '25', '1', '', '', '1');
INSERT INTO `itinerario` VALUES ('3', '25', '2', '', '', '1');
INSERT INTO `itinerario` VALUES ('4', '25', '3', '', '', '1');
INSERT INTO `itinerario` VALUES ('5', '25', '4', '', '', '1');
INSERT INTO `itinerario` VALUES ('6', '25', '5', '', '', '1');
INSERT INTO `itinerario` VALUES ('7', '28', '1', '', '', '1');
INSERT INTO `itinerario` VALUES ('8', '28', '2', '', '', '1');
INSERT INTO `itinerario` VALUES ('9', '28', '3', '', '', '1');
INSERT INTO `itinerario` VALUES ('10', '28', '4', '', '', '1');
INSERT INTO `itinerario` VALUES ('11', '28', '5', '', '', '1');
INSERT INTO `itinerario` VALUES ('12', '28', '6', '', '', '1');
INSERT INTO `itinerario` VALUES ('13', '28', '7', '', '', '1');
INSERT INTO `itinerario` VALUES ('14', '28', '8', '', '', '1');
INSERT INTO `itinerario` VALUES ('15', '28', '9', '', '', '1');
INSERT INTO `itinerario` VALUES ('16', '28', '10', '', '', '1');
INSERT INTO `itinerario` VALUES ('17', '28', '11', '', '', '1');
INSERT INTO `itinerario` VALUES ('18', '28', '12', '', '', '1');
INSERT INTO `itinerario` VALUES ('19', '28', '13', '', '', '1');
INSERT INTO `itinerario` VALUES ('20', '28', '14', '', '', '1');
INSERT INTO `itinerario` VALUES ('21', '28', '15', '', '', '1');
INSERT INTO `itinerario` VALUES ('22', '28', '16', '', '', '1');
INSERT INTO `itinerario` VALUES ('23', '28', '17', '', '', '1');
INSERT INTO `itinerario` VALUES ('24', '28', '18', '', '', '1');
INSERT INTO `itinerario` VALUES ('25', '28', '19', '', '', '1');
INSERT INTO `itinerario` VALUES ('26', '28', '20', '', '', '1');
INSERT INTO `itinerario` VALUES ('27', '28', '21', '', '', '1');
INSERT INTO `itinerario` VALUES ('28', '28', '22', '', '', '1');
INSERT INTO `itinerario` VALUES ('29', '28', '23', '', '', '1');
INSERT INTO `itinerario` VALUES ('30', '28', '24', '', '', '1');
INSERT INTO `itinerario` VALUES ('31', '28', '25', '', '', '1');
INSERT INTO `itinerario` VALUES ('32', '28', '26', '', '', '1');
INSERT INTO `itinerario` VALUES ('33', '28', '27', '', '', '1');
INSERT INTO `itinerario` VALUES ('34', '28', '28', '', '', '1');
INSERT INTO `itinerario` VALUES ('35', '28', '29', '', '', '1');
INSERT INTO `itinerario` VALUES ('36', '28', '30', '', '', '1');
INSERT INTO `itinerario` VALUES ('37', '28', '31', '', '', '1');
INSERT INTO `itinerario` VALUES ('38', '28', '32', '', '', '1');
INSERT INTO `itinerario` VALUES ('39', '28', '33', '', '', '1');
INSERT INTO `itinerario` VALUES ('40', '28', '34', '', '', '1');
INSERT INTO `itinerario` VALUES ('41', '28', '35', '', '', '1');
INSERT INTO `itinerario` VALUES ('42', '28', '36', '', '', '1');
INSERT INTO `itinerario` VALUES ('43', '28', '37', '', '', '1');
INSERT INTO `itinerario` VALUES ('44', '28', '38', '', '', '1');
INSERT INTO `itinerario` VALUES ('45', '28', '39', '', '', '1');
INSERT INTO `itinerario` VALUES ('46', '28', '40', '', '', '1');
INSERT INTO `itinerario` VALUES ('47', '28', '41', '', '', '1');
INSERT INTO `itinerario` VALUES ('48', '28', '42', '', '', '1');
INSERT INTO `itinerario` VALUES ('49', '28', '43', '', '', '1');
INSERT INTO `itinerario` VALUES ('50', '28', '44', '', '', '1');
INSERT INTO `itinerario` VALUES ('51', '28', '45', '', '', '1');
INSERT INTO `itinerario` VALUES ('52', '28', '46', '', '', '1');
INSERT INTO `itinerario` VALUES ('53', '28', '47', '', '', '1');
INSERT INTO `itinerario` VALUES ('54', '28', '48', '', '', '1');
INSERT INTO `itinerario` VALUES ('55', '28', '49', '', '', '1');
INSERT INTO `itinerario` VALUES ('56', '28', '50', '', '', '1');
INSERT INTO `itinerario` VALUES ('57', '28', '51', '', '', '1');
INSERT INTO `itinerario` VALUES ('58', '28', '52', '', '', '1');
INSERT INTO `itinerario` VALUES ('59', '28', '53', '', '', '1');
INSERT INTO `itinerario` VALUES ('60', '28', '54', '', '', '1');
INSERT INTO `itinerario` VALUES ('61', '28', '55', '', '', '1');
INSERT INTO `itinerario` VALUES ('62', '28', '56', '', '', '1');
INSERT INTO `itinerario` VALUES ('63', '28', '57', '', '', '1');
INSERT INTO `itinerario` VALUES ('64', '28', '58', '', '', '1');
INSERT INTO `itinerario` VALUES ('65', '28', '59', '', '', '1');
INSERT INTO `itinerario` VALUES ('66', '28', '60', '', '', '1');
INSERT INTO `itinerario` VALUES ('67', '28', '61', '', '', '1');
INSERT INTO `itinerario` VALUES ('68', '28', '62', '', '', '1');
INSERT INTO `itinerario` VALUES ('69', '28', '63', '', '', '1');
INSERT INTO `itinerario` VALUES ('70', '28', '64', '', '', '1');
INSERT INTO `itinerario` VALUES ('71', '28', '65', '', '', '1');
INSERT INTO `itinerario` VALUES ('72', '28', '66', '', '', '1');
INSERT INTO `itinerario` VALUES ('73', '28', '67', '', '', '1');
INSERT INTO `itinerario` VALUES ('74', '28', '68', '', '', '1');
INSERT INTO `itinerario` VALUES ('75', '28', '69', '', '', '1');
INSERT INTO `itinerario` VALUES ('76', '28', '70', '', '', '1');
INSERT INTO `itinerario` VALUES ('77', '28', '71', '', '', '1');
INSERT INTO `itinerario` VALUES ('78', '28', '72', '', '', '1');
INSERT INTO `itinerario` VALUES ('79', '28', '73', '', '', '1');
INSERT INTO `itinerario` VALUES ('80', '28', '74', '', '', '1');
INSERT INTO `itinerario` VALUES ('81', '28', '75', '', '', '1');
INSERT INTO `itinerario` VALUES ('82', '28', '76', '', '', '1');
INSERT INTO `itinerario` VALUES ('83', '28', '77', '', '', '1');
INSERT INTO `itinerario` VALUES ('84', '28', '78', '', '', '1');
INSERT INTO `itinerario` VALUES ('85', '28', '79', '', '', '1');
INSERT INTO `itinerario` VALUES ('86', '28', '80', '', '', '1');
INSERT INTO `itinerario` VALUES ('87', '28', '81', '', '', '1');
INSERT INTO `itinerario` VALUES ('88', '28', '82', '', '', '1');
INSERT INTO `itinerario` VALUES ('89', '28', '83', '', '', '1');
INSERT INTO `itinerario` VALUES ('90', '28', '84', '', '', '1');
INSERT INTO `itinerario` VALUES ('91', '28', '85', '', '', '1');
INSERT INTO `itinerario` VALUES ('92', '28', '86', '', '', '1');
INSERT INTO `itinerario` VALUES ('93', '28', '87', '', '', '1');
INSERT INTO `itinerario` VALUES ('94', '28', '88', '', '', '1');
INSERT INTO `itinerario` VALUES ('95', '28', '89', '', '', '1');
INSERT INTO `itinerario` VALUES ('96', '28', '90', '', '', '1');
INSERT INTO `itinerario` VALUES ('97', '28', '91', '', '', '1');
INSERT INTO `itinerario` VALUES ('98', '28', '92', '', '', '1');
INSERT INTO `itinerario` VALUES ('99', '28', '93', '', '', '1');
INSERT INTO `itinerario` VALUES ('100', '28', '94', '', '', '1');
INSERT INTO `itinerario` VALUES ('101', '28', '95', '', '', '1');
INSERT INTO `itinerario` VALUES ('102', '28', '96', '', '', '1');
INSERT INTO `itinerario` VALUES ('103', '28', '97', '', '', '1');
INSERT INTO `itinerario` VALUES ('104', '28', '98', '', '', '1');
INSERT INTO `itinerario` VALUES ('105', '28', '99', '', '', '1');
INSERT INTO `itinerario` VALUES ('106', '28', '100', '', '', '1');
INSERT INTO `itinerario` VALUES ('107', '28', '101', '', '', '1');
INSERT INTO `itinerario` VALUES ('108', '28', '102', '', '', '1');
INSERT INTO `itinerario` VALUES ('109', '28', '103', '', '', '1');
INSERT INTO `itinerario` VALUES ('110', '28', '104', '', '', '1');
INSERT INTO `itinerario` VALUES ('111', '28', '105', '', '', '1');
INSERT INTO `itinerario` VALUES ('112', '28', '106', '', '', '1');
INSERT INTO `itinerario` VALUES ('113', '28', '107', '', '', '1');
INSERT INTO `itinerario` VALUES ('114', '28', '108', '', '', '1');
INSERT INTO `itinerario` VALUES ('115', '28', '109', '', '', '1');
INSERT INTO `itinerario` VALUES ('116', '28', '110', '', '', '1');
INSERT INTO `itinerario` VALUES ('117', '28', '111', '', '', '1');
INSERT INTO `itinerario` VALUES ('118', '28', '112', '', '', '1');
INSERT INTO `itinerario` VALUES ('119', '28', '113', '', '', '1');
INSERT INTO `itinerario` VALUES ('120', '28', '114', '', '', '1');
INSERT INTO `itinerario` VALUES ('121', '28', '115', '', '', '1');
INSERT INTO `itinerario` VALUES ('122', '28', '116', '', '', '1');
INSERT INTO `itinerario` VALUES ('123', '28', '117', '', '', '1');
INSERT INTO `itinerario` VALUES ('124', '28', '118', '', '', '1');
INSERT INTO `itinerario` VALUES ('125', '28', '119', '', '', '1');
INSERT INTO `itinerario` VALUES ('126', '28', '120', '', '', '1');
INSERT INTO `itinerario` VALUES ('127', '28', '121', '', '', '1');
INSERT INTO `itinerario` VALUES ('128', '28', '122', '', '', '1');
INSERT INTO `itinerario` VALUES ('129', '28', '123', '', '', '1');
INSERT INTO `itinerario` VALUES ('130', '28', '124', '', '', '1');
INSERT INTO `itinerario` VALUES ('131', '28', '125', '', '', '1');
INSERT INTO `itinerario` VALUES ('132', '28', '126', '', '', '1');
INSERT INTO `itinerario` VALUES ('133', '28', '127', '', '', '1');
INSERT INTO `itinerario` VALUES ('134', '28', '128', '', '', '1');
INSERT INTO `itinerario` VALUES ('135', '28', '129', '', '', '1');
INSERT INTO `itinerario` VALUES ('136', '28', '130', '', '', '1');
INSERT INTO `itinerario` VALUES ('137', '28', '131', '', '', '1');
INSERT INTO `itinerario` VALUES ('138', '28', '132', '', '', '1');
INSERT INTO `itinerario` VALUES ('139', '28', '133', '', '', '1');
INSERT INTO `itinerario` VALUES ('140', '28', '134', '', '', '1');
INSERT INTO `itinerario` VALUES ('141', '28', '135', '', '', '1');
INSERT INTO `itinerario` VALUES ('142', '28', '136', '', '', '1');
INSERT INTO `itinerario` VALUES ('143', '28', '137', '', '', '1');
INSERT INTO `itinerario` VALUES ('144', '28', '138', '', '', '1');
INSERT INTO `itinerario` VALUES ('145', '28', '139', '', '', '1');
INSERT INTO `itinerario` VALUES ('146', '28', '140', '', '', '1');
INSERT INTO `itinerario` VALUES ('147', '28', '141', '', '', '1');
INSERT INTO `itinerario` VALUES ('148', '28', '142', '', '', '1');
INSERT INTO `itinerario` VALUES ('149', '28', '143', '', '', '1');
INSERT INTO `itinerario` VALUES ('150', '28', '144', '', '', '1');
INSERT INTO `itinerario` VALUES ('151', '28', '145', '', '', '1');
INSERT INTO `itinerario` VALUES ('152', '28', '146', '', '', '1');
INSERT INTO `itinerario` VALUES ('153', '28', '147', '', '', '1');
INSERT INTO `itinerario` VALUES ('154', '28', '148', '', '', '1');
INSERT INTO `itinerario` VALUES ('155', '28', '149', '', '', '1');
INSERT INTO `itinerario` VALUES ('156', '28', '150', '', '', '1');
INSERT INTO `itinerario` VALUES ('157', '28', '151', '', '', '1');
INSERT INTO `itinerario` VALUES ('158', '28', '152', '', '', '1');
INSERT INTO `itinerario` VALUES ('159', '28', '153', '', '', '1');
INSERT INTO `itinerario` VALUES ('160', '28', '154', '', '', '1');
INSERT INTO `itinerario` VALUES ('161', '28', '155', '', '', '1');
INSERT INTO `itinerario` VALUES ('162', '28', '156', '', '', '1');
INSERT INTO `itinerario` VALUES ('163', '28', '157', '', '', '1');
INSERT INTO `itinerario` VALUES ('164', '28', '158', '', '', '1');
INSERT INTO `itinerario` VALUES ('165', '28', '159', '', '', '1');
INSERT INTO `itinerario` VALUES ('166', '28', '160', '', '', '1');
INSERT INTO `itinerario` VALUES ('167', '28', '161', '', '', '1');
INSERT INTO `itinerario` VALUES ('168', '28', '162', '', '', '1');
INSERT INTO `itinerario` VALUES ('169', '28', '163', '', '', '1');
INSERT INTO `itinerario` VALUES ('170', '28', '164', '', '', '1');
INSERT INTO `itinerario` VALUES ('171', '28', '165', '', '', '1');
INSERT INTO `itinerario` VALUES ('172', '28', '166', '', '', '1');
INSERT INTO `itinerario` VALUES ('173', '28', '167', '', '', '1');
INSERT INTO `itinerario` VALUES ('174', '28', '168', '', '', '1');
INSERT INTO `itinerario` VALUES ('175', '28', '169', '', '', '1');
INSERT INTO `itinerario` VALUES ('176', '28', '170', '', '', '1');
INSERT INTO `itinerario` VALUES ('177', '28', '171', '', '', '1');
INSERT INTO `itinerario` VALUES ('178', '28', '172', '', '', '1');
INSERT INTO `itinerario` VALUES ('179', '28', '173', '', '', '1');
INSERT INTO `itinerario` VALUES ('180', '28', '174', '', '', '1');
INSERT INTO `itinerario` VALUES ('181', '28', '175', '', '', '1');
INSERT INTO `itinerario` VALUES ('182', '28', '176', '', '', '1');
INSERT INTO `itinerario` VALUES ('183', '28', '177', '', '', '1');
INSERT INTO `itinerario` VALUES ('184', '28', '178', '', '', '1');
INSERT INTO `itinerario` VALUES ('185', '28', '179', '', '', '1');
INSERT INTO `itinerario` VALUES ('186', '28', '180', '', '', '1');
INSERT INTO `itinerario` VALUES ('187', '28', '181', '', '', '1');
INSERT INTO `itinerario` VALUES ('188', '28', '182', '', '', '1');
INSERT INTO `itinerario` VALUES ('189', '28', '183', '', '', '1');
INSERT INTO `itinerario` VALUES ('190', '28', '184', '', '', '1');
INSERT INTO `itinerario` VALUES ('191', '28', '185', '', '', '1');
INSERT INTO `itinerario` VALUES ('192', '28', '186', '', '', '1');
INSERT INTO `itinerario` VALUES ('193', '28', '187', '', '', '1');
INSERT INTO `itinerario` VALUES ('194', '28', '188', '', '', '1');
INSERT INTO `itinerario` VALUES ('195', '28', '189', '', '', '1');
INSERT INTO `itinerario` VALUES ('196', '28', '190', '', '', '1');
INSERT INTO `itinerario` VALUES ('197', '28', '191', '', '', '1');
INSERT INTO `itinerario` VALUES ('198', '28', '192', '', '', '1');
INSERT INTO `itinerario` VALUES ('199', '28', '193', '', '', '1');
INSERT INTO `itinerario` VALUES ('200', '28', '194', '', '', '1');
INSERT INTO `itinerario` VALUES ('201', '28', '195', '', '', '1');
INSERT INTO `itinerario` VALUES ('202', '28', '196', '', '', '1');
INSERT INTO `itinerario` VALUES ('203', '28', '197', '', '', '1');
INSERT INTO `itinerario` VALUES ('204', '28', '198', '', '', '1');
INSERT INTO `itinerario` VALUES ('205', '28', '199', '', '', '1');
INSERT INTO `itinerario` VALUES ('206', '28', '200', '', '', '1');
INSERT INTO `itinerario` VALUES ('207', '28', '201', '', '', '1');
INSERT INTO `itinerario` VALUES ('208', '28', '202', '', '', '1');
INSERT INTO `itinerario` VALUES ('209', '28', '203', '', '', '1');
INSERT INTO `itinerario` VALUES ('210', '28', '204', '', '', '1');
INSERT INTO `itinerario` VALUES ('211', '28', '205', '', '', '1');
INSERT INTO `itinerario` VALUES ('212', '28', '206', '', '', '1');
INSERT INTO `itinerario` VALUES ('213', '28', '207', '', '', '1');
INSERT INTO `itinerario` VALUES ('214', '28', '208', '', '', '1');
INSERT INTO `itinerario` VALUES ('215', '28', '209', '', '', '1');
INSERT INTO `itinerario` VALUES ('216', '28', '210', '', '', '1');
INSERT INTO `itinerario` VALUES ('217', '28', '211', '', '', '1');
INSERT INTO `itinerario` VALUES ('218', '28', '212', '', '', '1');
INSERT INTO `itinerario` VALUES ('219', '28', '213', '', '', '1');
INSERT INTO `itinerario` VALUES ('220', '28', '214', '', '', '1');
INSERT INTO `itinerario` VALUES ('221', '28', '215', '', '', '1');
INSERT INTO `itinerario` VALUES ('222', '28', '216', '', '', '1');
INSERT INTO `itinerario` VALUES ('223', '28', '217', '', '', '1');
INSERT INTO `itinerario` VALUES ('224', '28', '218', '', '', '1');
INSERT INTO `itinerario` VALUES ('225', '28', '219', '', '', '1');
INSERT INTO `itinerario` VALUES ('226', '28', '220', '', '', '1');
INSERT INTO `itinerario` VALUES ('227', '28', '221', '', '', '1');
INSERT INTO `itinerario` VALUES ('228', '28', '222', '', '', '1');
INSERT INTO `itinerario` VALUES ('229', '28', '223', '', '', '1');
INSERT INTO `itinerario` VALUES ('230', '28', '224', '', '', '1');
INSERT INTO `itinerario` VALUES ('231', '28', '225', '', '', '1');
INSERT INTO `itinerario` VALUES ('232', '28', '226', '', '', '1');
INSERT INTO `itinerario` VALUES ('233', '28', '227', '', '', '1');
INSERT INTO `itinerario` VALUES ('234', '28', '228', '', '', '1');
INSERT INTO `itinerario` VALUES ('235', '28', '229', '', '', '1');
INSERT INTO `itinerario` VALUES ('236', '28', '230', '', '', '1');
INSERT INTO `itinerario` VALUES ('237', '29', '1', '', '', '1');
INSERT INTO `itinerario` VALUES ('238', '29', '2', '', '', '1');
INSERT INTO `itinerario` VALUES ('239', '29', '3', '', '', '1');
INSERT INTO `itinerario` VALUES ('240', '29', '4', '', '', '1');
INSERT INTO `itinerario` VALUES ('241', '29', '5', '', '', '1');
INSERT INTO `itinerario` VALUES ('242', '29', '6', '', '', '1');
INSERT INTO `itinerario` VALUES ('243', '29', '7', '', '', '1');
INSERT INTO `itinerario` VALUES ('244', '29', '8', '', '', '1');
INSERT INTO `itinerario` VALUES ('245', '29', '9', '', '', '1');
INSERT INTO `itinerario` VALUES ('246', '29', '10', '', '', '1');
INSERT INTO `itinerario` VALUES ('247', '29', '11', '', '', '1');
INSERT INTO `itinerario` VALUES ('248', '29', '12', '', '', '1');
INSERT INTO `itinerario` VALUES ('249', '29', '13', '', '', '1');
INSERT INTO `itinerario` VALUES ('250', '29', '14', '', '', '1');
INSERT INTO `itinerario` VALUES ('251', '29', '15', '', '', '1');
INSERT INTO `itinerario` VALUES ('252', '29', '16', '', '', '1');
INSERT INTO `itinerario` VALUES ('253', '29', '17', '', '', '1');
INSERT INTO `itinerario` VALUES ('254', '29', '18', '', '', '1');
INSERT INTO `itinerario` VALUES ('255', '29', '19', '', '', '1');
INSERT INTO `itinerario` VALUES ('256', '29', '20', '', '', '1');
INSERT INTO `itinerario` VALUES ('257', '29', '21', '', '', '1');
INSERT INTO `itinerario` VALUES ('258', '29', '22', '', '', '1');
INSERT INTO `itinerario` VALUES ('259', '29', '23', '', '', '1');
INSERT INTO `itinerario` VALUES ('260', '29', '24', '', '', '1');
INSERT INTO `itinerario` VALUES ('261', '29', '25', '', '', '1');
INSERT INTO `itinerario` VALUES ('262', '29', '26', '', '', '1');
INSERT INTO `itinerario` VALUES ('263', '29', '27', '', '', '1');
INSERT INTO `itinerario` VALUES ('264', '29', '28', '', '', '1');
INSERT INTO `itinerario` VALUES ('265', '29', '29', '', '', '1');
INSERT INTO `itinerario` VALUES ('266', '29', '30', '', '', '1');
INSERT INTO `itinerario` VALUES ('267', '29', '31', '', '', '1');
INSERT INTO `itinerario` VALUES ('268', '29', '32', '', '', '1');
INSERT INTO `itinerario` VALUES ('269', '29', '33', '', '', '1');
INSERT INTO `itinerario` VALUES ('270', '29', '34', '', '', '1');
INSERT INTO `itinerario` VALUES ('271', '29', '35', '', '', '1');
INSERT INTO `itinerario` VALUES ('272', '29', '36', '', '', '1');
INSERT INTO `itinerario` VALUES ('273', '29', '37', '', '', '1');
INSERT INTO `itinerario` VALUES ('274', '29', '38', '', '', '1');
INSERT INTO `itinerario` VALUES ('275', '29', '39', '', '', '1');
INSERT INTO `itinerario` VALUES ('276', '29', '40', '', '', '1');
INSERT INTO `itinerario` VALUES ('277', '29', '41', '', '', '1');
INSERT INTO `itinerario` VALUES ('278', '29', '42', '', '', '1');
INSERT INTO `itinerario` VALUES ('279', '29', '43', '', '', '1');
INSERT INTO `itinerario` VALUES ('280', '29', '44', '', '', '1');
INSERT INTO `itinerario` VALUES ('281', '29', '45', '', '', '1');
INSERT INTO `itinerario` VALUES ('282', '29', '46', '', '', '1');
INSERT INTO `itinerario` VALUES ('283', '29', '47', '', '', '1');
INSERT INTO `itinerario` VALUES ('284', '29', '48', '', '', '1');
INSERT INTO `itinerario` VALUES ('285', '29', '49', '', '', '1');
INSERT INTO `itinerario` VALUES ('286', '29', '50', '', '', '1');
INSERT INTO `itinerario` VALUES ('287', '29', '51', '', '', '1');
INSERT INTO `itinerario` VALUES ('288', '29', '52', '', '', '1');
INSERT INTO `itinerario` VALUES ('289', '29', '53', '', '', '1');
INSERT INTO `itinerario` VALUES ('290', '29', '54', '', '', '1');
INSERT INTO `itinerario` VALUES ('291', '29', '55', '', '', '1');
INSERT INTO `itinerario` VALUES ('292', '29', '56', '', '', '1');
INSERT INTO `itinerario` VALUES ('293', '29', '57', '', '', '1');
INSERT INTO `itinerario` VALUES ('294', '29', '58', '', '', '1');
INSERT INTO `itinerario` VALUES ('295', '29', '59', '', '', '1');
INSERT INTO `itinerario` VALUES ('296', '29', '60', '', '', '1');
INSERT INTO `itinerario` VALUES ('297', '29', '61', '', '', '1');
INSERT INTO `itinerario` VALUES ('298', '29', '62', '', '', '1');
INSERT INTO `itinerario` VALUES ('299', '29', '63', '', '', '1');
INSERT INTO `itinerario` VALUES ('300', '29', '64', '', '', '1');
INSERT INTO `itinerario` VALUES ('301', '29', '65', '', '', '1');
INSERT INTO `itinerario` VALUES ('302', '29', '66', '', '', '1');
INSERT INTO `itinerario` VALUES ('303', '29', '67', '', '', '1');
INSERT INTO `itinerario` VALUES ('304', '29', '68', '', '', '1');
INSERT INTO `itinerario` VALUES ('305', '29', '69', '', '', '1');
INSERT INTO `itinerario` VALUES ('306', '29', '70', '', '', '1');
INSERT INTO `itinerario` VALUES ('307', '29', '71', '', '', '1');
INSERT INTO `itinerario` VALUES ('308', '29', '72', '', '', '1');
INSERT INTO `itinerario` VALUES ('309', '29', '73', '', '', '1');
INSERT INTO `itinerario` VALUES ('310', '29', '74', '', '', '1');
INSERT INTO `itinerario` VALUES ('311', '29', '75', '', '', '1');
INSERT INTO `itinerario` VALUES ('312', '29', '76', '', '', '1');
INSERT INTO `itinerario` VALUES ('313', '29', '77', '', '', '1');
INSERT INTO `itinerario` VALUES ('314', '29', '78', '', '', '1');
INSERT INTO `itinerario` VALUES ('315', '29', '79', '', '', '1');
INSERT INTO `itinerario` VALUES ('316', '29', '80', '', '', '1');
INSERT INTO `itinerario` VALUES ('317', '29', '81', '', '', '1');
INSERT INTO `itinerario` VALUES ('318', '29', '82', '', '', '1');
INSERT INTO `itinerario` VALUES ('319', '29', '83', '', '', '1');
INSERT INTO `itinerario` VALUES ('320', '29', '84', '', '', '1');
INSERT INTO `itinerario` VALUES ('321', '29', '85', '', '', '1');
INSERT INTO `itinerario` VALUES ('322', '29', '86', '', '', '1');
INSERT INTO `itinerario` VALUES ('323', '29', '87', '', '', '1');
INSERT INTO `itinerario` VALUES ('324', '29', '88', '', '', '1');
INSERT INTO `itinerario` VALUES ('325', '29', '89', '', '', '1');
INSERT INTO `itinerario` VALUES ('326', '29', '90', '', '', '1');
INSERT INTO `itinerario` VALUES ('327', '29', '91', '', '', '1');
INSERT INTO `itinerario` VALUES ('328', '29', '92', '', '', '1');
INSERT INTO `itinerario` VALUES ('329', '29', '93', '', '', '1');
INSERT INTO `itinerario` VALUES ('330', '29', '94', '', '', '1');
INSERT INTO `itinerario` VALUES ('331', '29', '95', '', '', '1');
INSERT INTO `itinerario` VALUES ('332', '29', '96', '', '', '1');
INSERT INTO `itinerario` VALUES ('333', '29', '97', '', '', '1');
INSERT INTO `itinerario` VALUES ('334', '29', '98', '', '', '1');
INSERT INTO `itinerario` VALUES ('335', '29', '99', '', '', '1');
INSERT INTO `itinerario` VALUES ('336', '29', '100', '', '', '1');
INSERT INTO `itinerario` VALUES ('337', '29', '101', '', '', '1');
INSERT INTO `itinerario` VALUES ('338', '29', '102', '', '', '1');
INSERT INTO `itinerario` VALUES ('339', '29', '103', '', '', '1');
INSERT INTO `itinerario` VALUES ('340', '29', '104', '', '', '1');
INSERT INTO `itinerario` VALUES ('341', '29', '105', '', '', '1');
INSERT INTO `itinerario` VALUES ('342', '29', '106', '', '', '1');
INSERT INTO `itinerario` VALUES ('343', '29', '107', '', '', '1');
INSERT INTO `itinerario` VALUES ('344', '29', '108', '', '', '1');
INSERT INTO `itinerario` VALUES ('345', '29', '109', '', '', '1');
INSERT INTO `itinerario` VALUES ('346', '29', '110', '', '', '1');
INSERT INTO `itinerario` VALUES ('347', '29', '111', '', '', '1');
INSERT INTO `itinerario` VALUES ('348', '29', '112', '', '', '1');
INSERT INTO `itinerario` VALUES ('349', '29', '113', '', '', '1');
INSERT INTO `itinerario` VALUES ('350', '29', '114', '', '', '1');
INSERT INTO `itinerario` VALUES ('351', '29', '115', '', '', '1');
INSERT INTO `itinerario` VALUES ('352', '29', '116', '', '', '1');
INSERT INTO `itinerario` VALUES ('353', '29', '117', '', '', '1');
INSERT INTO `itinerario` VALUES ('354', '29', '118', '', '', '1');
INSERT INTO `itinerario` VALUES ('355', '29', '119', '', '', '1');
INSERT INTO `itinerario` VALUES ('356', '29', '120', '', '', '1');
INSERT INTO `itinerario` VALUES ('357', '29', '121', '', '', '1');
INSERT INTO `itinerario` VALUES ('358', '29', '122', '', '', '1');
INSERT INTO `itinerario` VALUES ('359', '29', '123', '', '', '1');
INSERT INTO `itinerario` VALUES ('360', '29', '124', '', '', '1');
INSERT INTO `itinerario` VALUES ('361', '29', '125', '', '', '1');
INSERT INTO `itinerario` VALUES ('362', '29', '126', '', '', '1');
INSERT INTO `itinerario` VALUES ('363', '29', '127', '', '', '1');
INSERT INTO `itinerario` VALUES ('364', '29', '128', '', '', '1');
INSERT INTO `itinerario` VALUES ('365', '29', '129', '', '', '1');
INSERT INTO `itinerario` VALUES ('366', '29', '130', '', '', '1');
INSERT INTO `itinerario` VALUES ('367', '29', '131', '', '', '1');
INSERT INTO `itinerario` VALUES ('368', '29', '132', '', '', '1');
INSERT INTO `itinerario` VALUES ('369', '29', '133', '', '', '1');
INSERT INTO `itinerario` VALUES ('370', '29', '134', '', '', '1');
INSERT INTO `itinerario` VALUES ('371', '29', '135', '', '', '1');
INSERT INTO `itinerario` VALUES ('372', '29', '136', '', '', '1');
INSERT INTO `itinerario` VALUES ('373', '29', '137', '', '', '1');
INSERT INTO `itinerario` VALUES ('374', '29', '138', '', '', '1');
INSERT INTO `itinerario` VALUES ('375', '29', '139', '', '', '1');
INSERT INTO `itinerario` VALUES ('376', '29', '140', '', '', '1');
INSERT INTO `itinerario` VALUES ('377', '29', '141', '', '', '1');
INSERT INTO `itinerario` VALUES ('378', '29', '142', '', '', '1');
INSERT INTO `itinerario` VALUES ('379', '29', '143', '', '', '1');
INSERT INTO `itinerario` VALUES ('380', '29', '144', '', '', '1');
INSERT INTO `itinerario` VALUES ('381', '29', '145', '', '', '1');
INSERT INTO `itinerario` VALUES ('382', '29', '146', '', '', '1');
INSERT INTO `itinerario` VALUES ('383', '29', '147', '', '', '1');
INSERT INTO `itinerario` VALUES ('384', '29', '148', '', '', '1');
INSERT INTO `itinerario` VALUES ('385', '29', '149', '', '', '1');
INSERT INTO `itinerario` VALUES ('386', '29', '150', '', '', '1');
INSERT INTO `itinerario` VALUES ('387', '29', '151', '', '', '1');
INSERT INTO `itinerario` VALUES ('388', '29', '152', '', '', '1');
INSERT INTO `itinerario` VALUES ('389', '29', '153', '', '', '1');
INSERT INTO `itinerario` VALUES ('390', '29', '154', '', '', '1');
INSERT INTO `itinerario` VALUES ('391', '29', '155', '', '', '1');
INSERT INTO `itinerario` VALUES ('392', '29', '156', '', '', '1');
INSERT INTO `itinerario` VALUES ('393', '29', '157', '', '', '1');
INSERT INTO `itinerario` VALUES ('394', '29', '158', '', '', '1');
INSERT INTO `itinerario` VALUES ('395', '29', '159', '', '', '1');
INSERT INTO `itinerario` VALUES ('396', '29', '160', '', '', '1');
INSERT INTO `itinerario` VALUES ('397', '29', '161', '', '', '1');
INSERT INTO `itinerario` VALUES ('398', '29', '162', '', '', '1');
INSERT INTO `itinerario` VALUES ('399', '29', '163', '', '', '1');
INSERT INTO `itinerario` VALUES ('400', '29', '164', '', '', '1');
INSERT INTO `itinerario` VALUES ('401', '29', '165', '', '', '1');
INSERT INTO `itinerario` VALUES ('402', '29', '166', '', '', '1');
INSERT INTO `itinerario` VALUES ('403', '29', '167', '', '', '1');
INSERT INTO `itinerario` VALUES ('404', '29', '168', '', '', '1');
INSERT INTO `itinerario` VALUES ('405', '29', '169', '', '', '1');
INSERT INTO `itinerario` VALUES ('406', '29', '170', '', '', '1');
INSERT INTO `itinerario` VALUES ('407', '29', '171', '', '', '1');
INSERT INTO `itinerario` VALUES ('408', '29', '172', '', '', '1');
INSERT INTO `itinerario` VALUES ('409', '29', '173', '', '', '1');
INSERT INTO `itinerario` VALUES ('410', '29', '174', '', '', '1');
INSERT INTO `itinerario` VALUES ('411', '29', '175', '', '', '1');
INSERT INTO `itinerario` VALUES ('412', '29', '176', '', '', '1');
INSERT INTO `itinerario` VALUES ('413', '29', '177', '', '', '1');
INSERT INTO `itinerario` VALUES ('414', '29', '178', '', '', '1');
INSERT INTO `itinerario` VALUES ('415', '29', '179', '', '', '1');
INSERT INTO `itinerario` VALUES ('416', '29', '180', '', '', '1');
INSERT INTO `itinerario` VALUES ('417', '29', '181', '', '', '1');
INSERT INTO `itinerario` VALUES ('418', '29', '182', '', '', '1');
INSERT INTO `itinerario` VALUES ('419', '29', '183', '', '', '1');
INSERT INTO `itinerario` VALUES ('420', '29', '184', '', '', '1');
INSERT INTO `itinerario` VALUES ('421', '29', '185', '', '', '1');
INSERT INTO `itinerario` VALUES ('422', '29', '186', '', '', '1');
INSERT INTO `itinerario` VALUES ('423', '29', '187', '', '', '1');
INSERT INTO `itinerario` VALUES ('424', '29', '188', '', '', '1');
INSERT INTO `itinerario` VALUES ('425', '29', '189', '', '', '1');
INSERT INTO `itinerario` VALUES ('426', '29', '190', '', '', '1');
INSERT INTO `itinerario` VALUES ('427', '29', '191', '', '', '1');
INSERT INTO `itinerario` VALUES ('428', '29', '192', '', '', '1');
INSERT INTO `itinerario` VALUES ('429', '29', '193', '', '', '1');
INSERT INTO `itinerario` VALUES ('430', '29', '194', '', '', '1');
INSERT INTO `itinerario` VALUES ('431', '29', '195', '', '', '1');
INSERT INTO `itinerario` VALUES ('432', '29', '196', '', '', '1');
INSERT INTO `itinerario` VALUES ('433', '29', '197', '', '', '1');
INSERT INTO `itinerario` VALUES ('434', '29', '198', '', '', '1');
INSERT INTO `itinerario` VALUES ('435', '29', '199', '', '', '1');
INSERT INTO `itinerario` VALUES ('436', '29', '200', '', '', '1');
INSERT INTO `itinerario` VALUES ('437', '29', '201', '', '', '1');
INSERT INTO `itinerario` VALUES ('438', '29', '202', '', '', '1');
INSERT INTO `itinerario` VALUES ('439', '29', '203', '', '', '1');
INSERT INTO `itinerario` VALUES ('440', '29', '204', '', '', '1');
INSERT INTO `itinerario` VALUES ('441', '29', '205', '', '', '1');
INSERT INTO `itinerario` VALUES ('442', '29', '206', '', '', '1');
INSERT INTO `itinerario` VALUES ('443', '29', '207', '', '', '1');
INSERT INTO `itinerario` VALUES ('444', '29', '208', '', '', '1');
INSERT INTO `itinerario` VALUES ('445', '29', '209', '', '', '1');
INSERT INTO `itinerario` VALUES ('446', '29', '210', '', '', '1');
INSERT INTO `itinerario` VALUES ('447', '29', '211', '', '', '1');
INSERT INTO `itinerario` VALUES ('448', '29', '212', '', '', '1');
INSERT INTO `itinerario` VALUES ('449', '29', '213', '', '', '1');
INSERT INTO `itinerario` VALUES ('450', '29', '214', '', '', '1');
INSERT INTO `itinerario` VALUES ('451', '29', '215', '', '', '1');
INSERT INTO `itinerario` VALUES ('452', '29', '216', '', '', '1');
INSERT INTO `itinerario` VALUES ('453', '29', '217', '', '', '1');
INSERT INTO `itinerario` VALUES ('454', '29', '218', '', '', '1');
INSERT INTO `itinerario` VALUES ('455', '29', '219', '', '', '1');
INSERT INTO `itinerario` VALUES ('456', '29', '220', '', '', '1');
INSERT INTO `itinerario` VALUES ('457', '29', '221', '', '', '1');
INSERT INTO `itinerario` VALUES ('458', '29', '222', '', '', '1');
INSERT INTO `itinerario` VALUES ('459', '29', '223', '', '', '1');
INSERT INTO `itinerario` VALUES ('460', '29', '224', '', '', '1');
INSERT INTO `itinerario` VALUES ('461', '29', '225', '', '', '1');
INSERT INTO `itinerario` VALUES ('462', '29', '226', '', '', '1');
INSERT INTO `itinerario` VALUES ('463', '29', '227', '', '', '1');
INSERT INTO `itinerario` VALUES ('464', '29', '228', '', '', '1');
INSERT INTO `itinerario` VALUES ('465', '29', '229', '', '', '1');
INSERT INTO `itinerario` VALUES ('466', '29', '230', '', '', '1');
INSERT INTO `itinerario` VALUES ('467', '30', '1', '', '', '1');
INSERT INTO `itinerario` VALUES ('468', '30', '2', '', '', '1');
INSERT INTO `itinerario` VALUES ('469', '30', '3', '', '', '1');
INSERT INTO `itinerario` VALUES ('470', '31', '1', '', '', '1');
INSERT INTO `itinerario` VALUES ('471', '31', '2', '', '', '1');
INSERT INTO `itinerario` VALUES ('472', '31', '3', '', '', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete
-- ----------------------------
INSERT INTO `paquete` VALUES ('17', '25', 'Veraniando...', '&lt;p&gt;asdfasdfsda&lt;/p&gt;', '&lt;p&gt;sdfasdfsadf&lt;/p&gt;', '4', '3', '5.00', '0.00', '5.00', '1900-01-01', '1900-01-01', 'veraniando', '0', 'S', '1', '2019-05-10 17:05:46');
INSERT INTO `paquete` VALUES ('18', '25', 'Veraniando...', '&lt;p&gt;asdfasdfsda&lt;/p&gt;', '&lt;p&gt;sdfasdfsadf&lt;/p&gt;', '4', '3', '5.00', '0.00', '5.00', '1900-01-01', '1900-01-01', 'veraniando', '0', 'S', '1', '2019-05-10 17:05:30');
INSERT INTO `paquete` VALUES ('19', '28', 'Tours Monsefuano', '&lt;p&gt;aksdjas&lt;/p&gt;', '&lt;p&gt;Recomendación Recomendación&lt;/p&gt;', '4', '3', '20.00', '0.00', '20.00', '1900-01-01', '1900-01-01', 'tours-monsefuano', '0', 'S', '1', '2019-05-10 17:05:48');
INSERT INTO `paquete` VALUES ('20', '25', 'Tours Playero', '&lt;p&gt;sdaf&lt;/p&gt;', '&lt;p&gt;asdfads&lt;/p&gt;', '3', '2', '5.00', '0.00', '5.00', '1900-01-01', '1900-01-01', 'tours-playero', '0', 'S', '1', '2019-05-10 17:05:47');
INSERT INTO `paquete` VALUES ('21', '28', 'asdfasdf', '&lt;p&gt;asdfasd&lt;/p&gt;', '&lt;p&gt;asdf&lt;/p&gt;', '2', '4', '10.00', '0.00', '10.00', '1900-01-01', '1900-01-01', 'asdfasdf', '0', 'S', '1', '2019-05-10 17:05:19');
INSERT INTO `paquete` VALUES ('22', '28', 'Toiurs playayaya', '&lt;p&gt;asdfasd&lt;/p&gt;', '&lt;p&gt;asdfsadf&lt;/p&gt;', '1', '1', '3.00', '0.00', '3.00', '1900-01-01', '1900-01-01', 'toiurs-playayaya', '0', 'S', '1', '2019-05-10 17:05:00');
INSERT INTO `paquete` VALUES ('23', '28', 'Toiurs playayaya', '&lt;p&gt;asdfasd&lt;/p&gt;', '&lt;p&gt;asdfsadf&lt;/p&gt;', '1', '1', '3.00', '0.00', '3.00', '1900-01-01', '1900-01-01', 'toiurs-playayaya', '0', 'S', '1', '2019-05-10 17:05:57');
INSERT INTO `paquete` VALUES ('24', '28', 'Toiurs playayaya', '&lt;p&gt;asdfasd&lt;/p&gt;', '&lt;p&gt;asdfsadf&lt;/p&gt;', '1', '1', '3.00', '0.00', '3.00', '1900-01-01', '1900-01-01', 'toiurs-playayaya', '0', 'S', '1', '2019-05-10 18:05:15');
INSERT INTO `paquete` VALUES ('25', '28', 'Chiclayo', '&lt;p&gt;sdfadfa&lt;/p&gt;', '&lt;p&gt;asdfasd&lt;/p&gt;', '5', '4', '20.00', '10.00', '18.00', '1900-01-01', '1900-01-01', 'chiclayo', '0', 'S', '1', '2019-05-10 18:05:06');
INSERT INTO `paquete` VALUES ('26', '28', 'Tours Pimentel', '&lt;p&gt;asdfasd&lt;/p&gt;', '&lt;p&gt;sdfasdf&lt;/p&gt;', '3', '5', '200.00', '10.00', '180.00', '1900-01-01', '1900-01-01', 'tours-pimentel', '0', 'S', '1', '2019-05-10 18:05:18');
INSERT INTO `paquete` VALUES ('27', '25', 'Chiclayo', '&lt;p&gt;sdfgsdfg&lt;/p&gt;', '&lt;p&gt;sdfgdsfg&lt;/p&gt;', '230', '3', '5.00', '3.00', '4.85', '1900-01-01', '1900-01-01', 'chiclayo', '0', 'S', '1', '2019-05-10 18:05:25');
INSERT INTO `paquete` VALUES ('28', '25', 'Chiclayo', '&lt;p&gt;sdfgsdfg&lt;/p&gt;', '&lt;p&gt;sdfgdsfg&lt;/p&gt;', '230', '3', '5.00', '3.00', '4.85', '1900-01-01', '1900-01-01', 'chiclayo', '0', 'S', '1', '2019-05-10 18:05:50');
INSERT INTO `paquete` VALUES ('29', '25', 'Chiclayo', '&lt;p&gt;sdfgsdfg&lt;/p&gt;', '&lt;p&gt;sdfgdsfg&lt;/p&gt;', '230', '3', '5.00', '3.00', '4.85', '1900-01-01', '1900-01-01', 'chiclayo', '0', 'S', '1', '2019-05-10 18:05:34');
INSERT INTO `paquete` VALUES ('30', '25', 'Tours aventurero', '&lt;p&gt;asdafsdaf&lt;/p&gt;', '&lt;p&gt;asdfasdf&lt;/p&gt;', '3', '3', '5.00', '0.00', '5.00', '1900-01-01', '1900-01-01', 'tours-aventurero', '0', 'S', '1', '2019-05-10 19:05:22');
INSERT INTO `paquete` VALUES ('31', '25', 'Tours aventurero', '&lt;p&gt;asdafsdaf&lt;/p&gt;', '&lt;p&gt;asdfasdf&lt;/p&gt;', '3', '3', '5.00', '0.00', '5.00', '1900-01-01', '1900-01-01', 'tours-aventurero', '0', 'S', '1', '2019-05-10 19:05:42');

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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete_actividad
-- ----------------------------
INSERT INTO `paquete_actividad` VALUES ('1', '17', '3', '2', '', '1', '2019-05-10 17:05:46');
INSERT INTO `paquete_actividad` VALUES ('2', '17', '4', '0', '', '1', '2019-05-10 17:05:46');
INSERT INTO `paquete_actividad` VALUES ('3', '17', '13', '0', '', '1', '2019-05-10 17:05:46');
INSERT INTO `paquete_actividad` VALUES ('4', '17', '44', '0', '', '1', '2019-05-10 17:05:46');
INSERT INTO `paquete_actividad` VALUES ('5', '17', '47', '0', '', '1', '2019-05-10 17:05:46');
INSERT INTO `paquete_actividad` VALUES ('6', '18', '3', '2', '', '1', '2019-05-10 17:05:30');
INSERT INTO `paquete_actividad` VALUES ('7', '18', '4', '0', '', '1', '2019-05-10 17:05:30');
INSERT INTO `paquete_actividad` VALUES ('8', '18', '13', '0', '', '1', '2019-05-10 17:05:30');
INSERT INTO `paquete_actividad` VALUES ('9', '18', '44', '0', '', '1', '2019-05-10 17:05:30');
INSERT INTO `paquete_actividad` VALUES ('10', '18', '47', '0', '', '1', '2019-05-10 17:05:31');
INSERT INTO `paquete_actividad` VALUES ('11', '19', '3', '2', '', '1', '2019-05-10 17:05:48');
INSERT INTO `paquete_actividad` VALUES ('12', '19', '4', '0', '', '1', '2019-05-10 17:05:48');
INSERT INTO `paquete_actividad` VALUES ('13', '19', '18', '0', '', '1', '2019-05-10 17:05:48');
INSERT INTO `paquete_actividad` VALUES ('14', '19', '22', '0', '', '1', '2019-05-10 17:05:48');
INSERT INTO `paquete_actividad` VALUES ('15', '19', '30', '0', '', '1', '2019-05-10 17:05:48');
INSERT INTO `paquete_actividad` VALUES ('16', '20', '3', '2', '', '1', '2019-05-10 17:05:47');
INSERT INTO `paquete_actividad` VALUES ('17', '20', '5', '0', '', '1', '2019-05-10 17:05:47');
INSERT INTO `paquete_actividad` VALUES ('18', '20', '20', '0', '', '1', '2019-05-10 17:05:47');
INSERT INTO `paquete_actividad` VALUES ('19', '20', '40', '0', '', '1', '2019-05-10 17:05:47');
INSERT INTO `paquete_actividad` VALUES ('20', '21', '10', '0', '', '1', '2019-05-10 17:05:19');
INSERT INTO `paquete_actividad` VALUES ('21', '21', '24', '0', '', '1', '2019-05-10 17:05:20');
INSERT INTO `paquete_actividad` VALUES ('22', '21', '30', '0', '', '1', '2019-05-10 17:05:20');
INSERT INTO `paquete_actividad` VALUES ('23', '22', '3', '2', '', '1', '2019-05-10 17:05:00');
INSERT INTO `paquete_actividad` VALUES ('24', '22', '5', '0', '', '1', '2019-05-10 17:05:00');
INSERT INTO `paquete_actividad` VALUES ('25', '22', '20', '0', '', '1', '2019-05-10 17:05:01');
INSERT INTO `paquete_actividad` VALUES ('26', '23', '3', '2', '', '1', '2019-05-10 17:05:57');
INSERT INTO `paquete_actividad` VALUES ('27', '23', '5', '0', '', '1', '2019-05-10 17:05:57');
INSERT INTO `paquete_actividad` VALUES ('28', '23', '20', '0', '', '1', '2019-05-10 17:05:57');
INSERT INTO `paquete_actividad` VALUES ('29', '24', '3', '2', '', '1', '2019-05-10 18:05:15');
INSERT INTO `paquete_actividad` VALUES ('30', '24', '5', '0', '', '1', '2019-05-10 18:05:15');
INSERT INTO `paquete_actividad` VALUES ('31', '24', '20', '0', '', '1', '2019-05-10 18:05:15');
INSERT INTO `paquete_actividad` VALUES ('32', '25', '3', '2', '', '1', '2019-05-10 18:05:06');
INSERT INTO `paquete_actividad` VALUES ('33', '25', '6', '0', '', '1', '2019-05-10 18:05:06');
INSERT INTO `paquete_actividad` VALUES ('34', '25', '22', '0', '', '1', '2019-05-10 18:05:06');
INSERT INTO `paquete_actividad` VALUES ('35', '25', '35', '0', '', '1', '2019-05-10 18:05:06');
INSERT INTO `paquete_actividad` VALUES ('36', '28', '4', '0', '', '1', '2019-05-10 18:05:56');
INSERT INTO `paquete_actividad` VALUES ('37', '28', '7', '0', '', '1', '2019-05-10 18:05:56');
INSERT INTO `paquete_actividad` VALUES ('38', '28', '20', '0', '', '1', '2019-05-10 18:05:56');
INSERT INTO `paquete_actividad` VALUES ('39', '29', '4', '0', '', '1', '2019-05-10 18:05:39');
INSERT INTO `paquete_actividad` VALUES ('40', '29', '7', '0', '', '1', '2019-05-10 18:05:39');
INSERT INTO `paquete_actividad` VALUES ('41', '29', '20', '0', '', '1', '2019-05-10 18:05:39');
INSERT INTO `paquete_actividad` VALUES ('42', '30', '5', '0', '', '1', '2019-05-10 19:05:22');
INSERT INTO `paquete_actividad` VALUES ('43', '31', '5', '0', '', '1', '2019-05-10 19:05:42');

-- ----------------------------
-- Table structure for paquete_adicional
-- ----------------------------
DROP TABLE IF EXISTS `paquete_adicional`;
CREATE TABLE `paquete_adicional` (
  `paquete_adicional_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `paquete_id` int(10) unsigned NOT NULL,
  `adicional_id` int(10) unsigned NOT NULL,
  `estado` char(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`paquete_adicional_id`),
  KEY `fk_paquete_adicional_paquete1_idx` (`paquete_id`),
  KEY `fk_paquete_adicional_adicional1_idx` (`adicional_id`),
  CONSTRAINT `fk_paquete_adicional_adicional1` FOREIGN KEY (`adicional_id`) REFERENCES `adicional` (`adicional_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_paquete_adicional_paquete1` FOREIGN KEY (`paquete_id`) REFERENCES `paquete` (`paquete_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete_adicional
-- ----------------------------
INSERT INTO `paquete_adicional` VALUES ('1', '30', '1', '1', '2019-05-10 19:05:23');
INSERT INTO `paquete_adicional` VALUES ('2', '31', '1', '1', '2019-05-10 19:05:42');
INSERT INTO `paquete_adicional` VALUES ('3', '31', '2', '1', '2019-05-10 19:05:42');

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of paquete_img
-- ----------------------------
INSERT INTO `paquete_img` VALUES ('1', '28', 'images/paquetes/28201905101805561679.jpg', '1', '1');
INSERT INTO `paquete_img` VALUES ('2', '28', 'images/paquetes/28201905101805564269.jpg', '2', '1');
INSERT INTO `paquete_img` VALUES ('3', '28', 'images/paquetes/28201905101805565265.jpg', '3', '1');
INSERT INTO `paquete_img` VALUES ('4', '28', 'images/paquetes/28201905101805564809.jpg', '4', '1');
INSERT INTO `paquete_img` VALUES ('5', '28', 'images/paquetes/28201905101805565700.jpg', '5', '1');
INSERT INTO `paquete_img` VALUES ('6', '28', 'images/paquetes/28201905101805562659.jpg', '6', '1');
INSERT INTO `paquete_img` VALUES ('7', '28', 'images/paquetes/28201905101805561374.jpg', '7', '1');
INSERT INTO `paquete_img` VALUES ('8', '28', 'images/paquetes/28201905101805562029.jpg', '8', '1');
INSERT INTO `paquete_img` VALUES ('9', '28', 'images/paquetes/28201905101805562723.jpg', '9', '1');
INSERT INTO `paquete_img` VALUES ('10', '28', 'images/paquetes/28201905101805564489.jpg', '10', '1');
INSERT INTO `paquete_img` VALUES ('11', '29', 'images/paquetes/29201905101805397742.jpg', '1', '1');
INSERT INTO `paquete_img` VALUES ('12', '29', 'images/paquetes/29201905101805392395.jpg', '2', '1');
INSERT INTO `paquete_img` VALUES ('13', '29', 'images/paquetes/29201905101805391347.jpg', '3', '1');
INSERT INTO `paquete_img` VALUES ('14', '29', 'images/paquetes/29201905101805391418.jpg', '4', '1');
INSERT INTO `paquete_img` VALUES ('15', '29', 'images/paquetes/29201905101805395479.jpg', '5', '1');
INSERT INTO `paquete_img` VALUES ('16', '29', 'images/paquetes/29201905101805398434.jpg', '6', '1');
INSERT INTO `paquete_img` VALUES ('17', '29', 'images/paquetes/29201905101805394336.jpg', '7', '1');
INSERT INTO `paquete_img` VALUES ('18', '29', 'images/paquetes/29201905101805393029.jpg', '8', '1');
INSERT INTO `paquete_img` VALUES ('19', '29', 'images/paquetes/29201905101805391713.jpg', '9', '1');
INSERT INTO `paquete_img` VALUES ('20', '29', 'images/paquetes/29201905101805398427.jpg', '10', '1');
INSERT INTO `paquete_img` VALUES ('21', '31', 'images/paquetes/31201905101905423775.jpg', '1', '1');
INSERT INTO `paquete_img` VALUES ('22', '31', 'images/paquetes/31201905101905427560.jpg', '2', '1');

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
INSERT INTO `paquete_servicio` VALUES ('1', '23', '1', '1', '1', '2019-05-10 17:05:57');
INSERT INTO `paquete_servicio` VALUES ('2', '23', '5', '1', '1', '2019-05-10 17:05:57');
INSERT INTO `paquete_servicio` VALUES ('3', '23', '7', '1', '1', '2019-05-10 17:05:57');
INSERT INTO `paquete_servicio` VALUES ('4', '24', '1', '1', '1', '2019-05-10 18:05:15');
INSERT INTO `paquete_servicio` VALUES ('5', '24', '5', '1', '1', '2019-05-10 18:05:15');
INSERT INTO `paquete_servicio` VALUES ('6', '24', '7', '1', '1', '2019-05-10 18:05:15');
INSERT INTO `paquete_servicio` VALUES ('7', '25', '2', '1', '1', '2019-05-10 18:05:06');
INSERT INTO `paquete_servicio` VALUES ('8', '25', '4', '1', '1', '2019-05-10 18:05:06');
INSERT INTO `paquete_servicio` VALUES ('9', '25', '7', '1', '1', '2019-05-10 18:05:06');
INSERT INTO `paquete_servicio` VALUES ('10', '25', '10', '1', '1', '2019-05-10 18:05:06');
INSERT INTO `paquete_servicio` VALUES ('11', '28', '2', '1', '1', '2019-05-10 18:05:56');
INSERT INTO `paquete_servicio` VALUES ('12', '28', '7', '1', '1', '2019-05-10 18:05:56');
INSERT INTO `paquete_servicio` VALUES ('13', '29', '2', '1', '1', '2019-05-10 18:05:39');
INSERT INTO `paquete_servicio` VALUES ('14', '29', '7', '1', '1', '2019-05-10 18:05:39');
INSERT INTO `paquete_servicio` VALUES ('15', '30', '2', '1', '1', '2019-05-10 19:05:22');
INSERT INTO `paquete_servicio` VALUES ('16', '30', '8', '1', '1', '2019-05-10 19:05:22');
INSERT INTO `paquete_servicio` VALUES ('17', '31', '2', '1', '1', '2019-05-10 19:05:42');
INSERT INTO `paquete_servicio` VALUES ('18', '31', '8', '1', '1', '2019-05-10 19:05:42');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of ubigeo
-- ----------------------------
INSERT INTO `ubigeo` VALUES ('19', '140101', 'Lambayeque', 'Lambayeque', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('20', '13', 'Trujillo', 'Trujillo', '0', '1', '1', '1', '1');
INSERT INTO `ubigeo` VALUES ('21', '1401', 'Chiclayo', 'Chiclayo, Lambayeque', '19', '1', '0', '2', '1');
INSERT INTO `ubigeo` VALUES ('22', '1401', 'Ferreñafe', 'Ferreñafe, Lambayeque', '19', '1', '0', '2', '1');
INSERT INTO `ubigeo` VALUES ('23', '1301', 'Trujillo', 'Trujillo, Trujillo', '20', '1', '0', '2', '1');
INSERT INTO `ubigeo` VALUES ('24', '1302', 'El Porvenir', 'El Porvenir, Trujillo', '20', '1', '0', '2', '1');
INSERT INTO `ubigeo` VALUES ('25', '140101', 'Chiclayo', 'Chiclayo, Chiclayo, Lambayeque', '21', '1', '0', '3', '1');
INSERT INTO `ubigeo` VALUES ('26', '15', 'San Martin', 'San Martin', '0', '1', '3', '1', '1');
INSERT INTO `ubigeo` VALUES ('28', '1401021', 'Monsefu', 'Monsefu, Chiclayo, Lambayeque', '21', '1', '0', '3', '1');

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
