/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : escuelac_w_ne16

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-12-20 12:54:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admision
-- ----------------------------
DROP TABLE IF EXISTS `admision`;
CREATE TABLE `admision` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `requisitos` text NOT NULL,
  `horarios` text NOT NULL,
  `inversion` text NOT NULL,
  `email` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admision
-- ----------------------------
INSERT INTO `admision` VALUES ('1', 'a:1:{s:2:\"es\";s:18:\"Admisión 2018 - I\";}', 'imagenes/resena/escuela-cumbre-admision-27-agosto-2018.jpg', 'a:1:{s:2:\"es\";s:400:\"<ul style=\"list-style-type:circle;\">\r\n	<li>Certificado de secundaria visado por la GRED.</li>\r\n	<li>Partida de nacimiento ACTUAL.&nbsp;</li>\r\n	<li>Copia del documento de identidad.&nbsp;</li>\r\n	<li>Copia de recibo agua y luz.&nbsp;</li>\r\n	<li>Dos fotos tama&ntilde;o carnet a color.&nbsp;</li>\r\n	<li>Carnet de salud (vigente).&nbsp;</li>\r\n	<li>P&oacute;liza de seguro contra accidentes.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:467:\"<ul class=\"list_ul_cer text-left\" style=\"list-style-type:square;\">\r\n	<li><strong>LUNEA A VIERNES</strong></li>\r\n	<li><strong>Turno ma&ntilde;ana: </strong>7.30 am - 2.00 pm</li>\r\n	<li><strong>Turno noche: </strong>6:00 - 10:30 pm</li>\r\n	<li><strong style=\"line-height: 1.6em;\">Duraci&oacute;n</strong><span style=\"line-height: 1.6em;\">: <strong>3 a&ntilde;os</strong> / VI ciclos (4 meses x ciclo)</span></li>\r\n	<li><strong>INICIO</strong>: 27 de Agosto</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:305:\"<ul class=\"list_ul_cer text-left\">\r\n	<li><strong>MATR&Iacute;CULA</strong>: S/. 310.00</li>\r\n	<li><strong>UNIFORME</strong>: S/. 200.00 (pantal&oacute;n + polo + garibaldi + camisaco + mandil)</li>\r\n	<li><strong>MENSUALIDAD: </strong><br />\r\n	S/.520.00 (5 cuotas - Incluye insumos e idiomas)</li>\r\n</ul>\r\n\";}', null);

-- ----------------------------
-- Table structure for amigos
-- ----------------------------
DROP TABLE IF EXISTS `amigos`;
CREATE TABLE `amigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `imagen` varchar(75) NOT NULL,
  `imagen_2` varchar(75) NOT NULL,
  `email` text,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of amigos
-- ----------------------------
INSERT INTO `amigos` VALUES ('1', 'a:1:{s:2:\"es\";s:627:\"<section>\r\n<h3>SIGUE ESTAS INDICACIONES Y EMPIEZA A <span style=\"color:red;\">&iexcl;GANAR!</span>.</h3>\r\n\r\n<ol class=\"text-left\">\r\n	<li value=\"1\">Recomienda un amigo o amigos a estudiar la carrera de Gastronom&iacute;a y Arte Culinario con nosotros. Puedes recomendar todos los amigos(as) que desees.</li>\r\n	<li>Reg&iacute;stralo(s) en www.escuelacumbre.edu.pe/amigopuntos.</li>\r\n	<li>Aseg&uacute;rate que tu amigo o amigos recomendados figuren en nuestro registro de matriculados. Consulta en el &aacute;rea de Informes.</li>\r\n	<li>Ac&eacute;rcate al &aacute;rea de Informes para obtener tu benefcio.</li>\r\n</ol>\r\n</section>\r\n\";}', 'a', 'a', 'a:1:{s:2:\"es\";s:30:\"marketing@escuelacumbre.edu.pe\";}', '1', '1', '2017-10-02 19:47:19');

-- ----------------------------
-- Table structure for buzon
-- ----------------------------
DROP TABLE IF EXISTS `buzon`;
CREATE TABLE `buzon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) DEFAULT NULL,
  `telefono` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mensaje` text,
  `estado` int(11) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of buzon
-- ----------------------------
INSERT INTO `buzon` VALUES ('1', 'Williams Azabache Sarmiento', '9999999', 'williams.azabache@webtilia.com', 'Test Test', '1', '2015-06-12 18:27:43');
INSERT INTO `buzon` VALUES ('2', 'Williams Azabache Sarmiento', '9999', 'williams.azabache@webtilia.com', 'Testing', '1', '2015-06-12 18:30:14');
INSERT INTO `buzon` VALUES ('3', 'Williams Azabache Sarmiento', '9999', 'williams.azabache@webtilia.com', 'Testing', '1', '2015-06-12 18:31:59');
INSERT INTO `buzon` VALUES ('4', 'Williams Azabache Sarmiento', '9999', 'williams.azabache@webtilia.com', 'Testing', '1', '2015-06-12 18:32:39');

-- ----------------------------
-- Table structure for buzon_contacto
-- ----------------------------
DROP TABLE IF EXISTS `buzon_contacto`;
CREATE TABLE `buzon_contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) NOT NULL,
  `dni` varchar(15) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of buzon_contacto
-- ----------------------------
INSERT INTO `buzon_contacto` VALUES ('1', 'Pedro Calderón', '42548605', 'pedrocalderon_@hotmail.com', '987868401', '2015-10-06 23:43:15');

-- ----------------------------
-- Table structure for buzon_retiro
-- ----------------------------
DROP TABLE IF EXISTS `buzon_retiro`;
CREATE TABLE `buzon_retiro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) DEFAULT NULL,
  `titulo_retiro` text,
  `email` varchar(200) DEFAULT NULL,
  `mensaje` text,
  `estado` int(11) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of buzon_retiro
-- ----------------------------
INSERT INTO `buzon_retiro` VALUES ('1', 'Williams', 'Próximamente Retiro 2015', 'wjharil@gmail.com', 'Retiro pruebas email', '1', '2015-07-13 01:54:43');

-- ----------------------------
-- Table structure for campus
-- ----------------------------
DROP TABLE IF EXISTS `campus`;
CREATE TABLE `campus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `subtitulo` varchar(20) DEFAULT NULL,
  `descripcion` varchar(40) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `url` varchar(75) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of campus
-- ----------------------------
INSERT INTO `campus` VALUES ('16', 'a:1:{s:2:\"es\";s:8:\"Cumbre 1\";}', null, 'a:1:{s:2:\"es\";s:8:\"Cumbre 1\";}', 'imagenes/campus/campus1.jpg', null, '1', '1', '2016-07-11 06:29:22');
INSERT INTO `campus` VALUES ('17', 'a:1:{s:2:\"es\";s:8:\"Campus 2\";}', null, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus2.jpg', null, '2', '1', '2016-07-11 06:30:18');
INSERT INTO `campus` VALUES ('18', 'a:1:{s:2:\"es\";s:8:\"Campus 3\";}', null, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus3.jpg', null, '3', '1', '2016-07-11 06:30:39');
INSERT INTO `campus` VALUES ('19', 'a:1:{s:2:\"es\";s:8:\"Campus 4\";}', null, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus4.jpg', null, '4', '1', '2016-07-11 06:30:59');
INSERT INTO `campus` VALUES ('20', 'a:1:{s:2:\"es\";s:8:\"Campus 5\";}', null, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus5.jpg', null, '5', '1', '2016-07-11 06:31:48');
INSERT INTO `campus` VALUES ('21', 'a:1:{s:2:\"es\";s:8:\"Campus 6\";}', null, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus6.jpg', null, '6', '1', '2016-07-11 06:32:03');
INSERT INTO `campus` VALUES ('22', 'a:1:{s:2:\"es\";s:8:\"Campus 7\";}', null, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus7.jpg', null, '7', '1', '2016-07-11 06:32:18');
INSERT INTO `campus` VALUES ('23', 'a:1:{s:2:\"es\";s:8:\"Campus 8\";}', null, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus8.jpg', null, '8', '1', '2016-07-11 06:32:34');
INSERT INTO `campus` VALUES ('24', 'a:1:{s:2:\"es\";s:8:\"Campus 9\";}', null, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus9.jpg', null, '9', '1', '2016-07-11 06:32:48');

-- ----------------------------
-- Table structure for carrera
-- ----------------------------
DROP TABLE IF EXISTS `carrera`;
CREATE TABLE `carrera` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(75) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `slide` varchar(75) DEFAULT NULL,
  `imagen` varchar(75) NOT NULL,
  `presentacion` text NOT NULL,
  `porque` text NOT NULL,
  `donde` text NOT NULL,
  `certificacion` text NOT NULL,
  `titulos` text NOT NULL,
  `inversion` text NOT NULL,
  `titulacion` text NOT NULL,
  `detalleduracion` text NOT NULL,
  `detalledia` text,
  `detallehorario` text,
  `detallelugar` text,
  `detalleprecio` text,
  `detalleequipos` text,
  `detalleconsultas` text,
  `detalledirigido` text,
  `aquien` text,
  `temas` text,
  `nombreseo` varchar(200) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of carrera
-- ----------------------------
INSERT INTO `carrera` VALUES ('1', 'a:1:{s:2:\"es\";s:12:\"Gastronomía\";}', 'a:1:{s:2:\"es\";s:727:\"<p>Estudiar Gastronom&iacute;a en Chiclayo es un privilegio porque aqu&iacute; al parecer,&nbsp;se inici&oacute; la Historia del mundialmente reconocido Sabor Peruano.&nbsp;<br />\r\nEn Huaca Ventarr&oacute;n con m&aacute;s de 4,000 a&ntilde;os de antig&uuml;edad, se encontraron&nbsp;los primeros murales policromos de Am&eacute;rica.<br />\r\nEl Se&ntilde;or de Sip&aacute;n&nbsp;probablemente degustaba un &ldquo;chinguirito&rdquo; o pescado seco salado.<br />\r\nEl &ldquo;loche&rdquo;, &uacute;nico zapallo milenario da gusto a nuestras preparaciones&nbsp;desde tiempos inmemoriales.<br />\r\nDelicias a base de carnes de corral como&nbsp;el pato o cabrito seguir&aacute;n cautivando paladares hasta el final de los tiempos.</p>\r\n\";}', 'imagenes/carreras/head-carreras_2.jpg', 'imagenes/carreras/carrera-gastronomia.png', 'a:1:{s:2:\"es\";s:661:\"<h3>&iquest;QU&Eacute; ES GASTRONOM&Iacute;A?<br />\r\n<br />\r\n<span style=\"font-size: 13px; line-height: 1.6em;\">La Gastronom&iacute;a es una disciplina que abarca todo lo relacionado al placer de la alimentaci&oacute;n humana. Las preparaciones con sus historias y tradiciones, los insumos e ingredientes, el servicio en mesa, las bebidas, los vinos, el desarrollo y manejo de negocios como restaurantes, cafeter&iacute;as, catering de eventos y mucho m&aacute;s.&nbsp;</span><em style=\"font-size: 13px; line-height: 1.6em;\"><span class=\"text-danger\">Gastronom&iacute;a no s&oacute;lo es cocinar o comer rico, va mucho m&aacute;s all&aacute;.</span></em></h3>\r\n\";}', 'a:1:{s:2:\"es\";s:578:\"<h3>&iquest;POR QU&Eacute; ESTUDIAR GASTRONOM&Iacute;A?<br />\r\n<br />\r\n<span style=\"line-height: 1.6em; font-size: 13px;\">El mundo ha evolucionado en el aspecto gastron&oacute;mico, convirtiendo el alto nivel en servicio, en un est&aacute;ndar internacional. El turismo cada vez crece m&aacute;s, los paladares se sofistican cada d&iacute;a. Es necesario que el Per&uacute; profesionalice su afamada cocina. Un cocinero puede llegar a ser Chef, viajar por todo el mundo sirviendo con su arte y logrando satisfacciones tanto personales como de sus comensales.&nbsp;</span></h3>\r\n\";}', 'a:1:{s:2:\"es\";s:644:\"<h3>&iquest;D&Oacute;NDE PUEDES TRABAJAR?<br />\r\n<br />\r\n<span style=\"font-size: 13px; line-height: 1.6em;\">El campo laboral es muy amplio, estos son algunos de los trabajos en donde se pueden desempe&ntilde;ar nuestros egresados:</span></h3>\r\n\r\n<div class=\"text-block text-justify\">\r\n<ul class=\"list_ul\">\r\n	<li>Chef Ejecutivo de hoteles o restaurantes.</li>\r\n	<li>Gerente de Alimentos y Bebidas.</li>\r\n	<li><span style=\"line-height: 1.6em;\">Asesor o L&iacute;der de Empresas Gastron&oacute;micas.</span></li>\r\n	<li>Banquetes y eventos.&nbsp;</li>\r\n	<li>Chef ejecutivo, particular, asesor o instructor en establecimientos.</li>\r\n</ul>\r\n</div>\r\n\";}', 'a:1:{s:2:\"es\";s:174:\"M&oacute;dulo 1: Gastronom&iacute;a Regional<br />\r\nM&oacute;dulo 2: Gastronom&iacute;a Peruana<br />\r\nM&oacute;dulo 3: Gastronom&iacute;a Internacional<br />\r\n<br />\r\n&nbsp;\";}', 'a:1:{s:2:\"es\";s:317:\"<strong>CARRERA PROFESIONAL DE GASTRONOM&Iacute;A Y ARTE CULINARIO</strong><br />\r\nse entrega T&iacute;tulo a Nombre de la Naci&oacute;n<br />\r\n(R.M.N&deg; 0345 - 2008 - ED)<br />\r\n<strong>Duraci&oacute;n de la carrera: </strong>3 a&ntilde;os / VI Ciclos<br />\r\n(cada ciclo dura 4 meses)<br />\r\n<br />\r\n<br />\r\n&nbsp;\";}', 'a:1:{s:2:\"es\";s:340:\"<ul>\r\n	<li>Matr&iacute;cula: <strong>S/ 310.00</strong></li>\r\n	<li>Uniforme completo: <strong>S/ 200.00 </strong>(Pantal&oacute;n + Polo + Garibaldi + Camisaco + &nbsp;&nbsp;Mandil)</li>\r\n	<li>Total por ciclo: <strong>S/ 2600.00</strong></li>\r\n	<li>Total por ciclo (pago al contado): <strong>S/ 2470.00 </strong>(5% descuento)</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:179:\"<strong>19&deg; </strong>Programa de Asesor&iacute;a de Proyectos para optar <strong>T&iacute;tulo Profesional T&eacute;cnico </strong>en GAC (Gastronom&iacute;a y Arte Culinario)\";}', 'a:1:{s:2:\"es\";s:10:\"16 SEMANAS\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:21:\"Sábados 9.00 a 13:00\";}', 'a:1:{s:2:\"es\";s:27:\"Av. Eufemio Lora y Lora 625\";}', 'a:1:{s:2:\"es\";s:12:\"S/. 4,630.00\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:12:\"(074) 228790\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:236:\"Dirigido a egresados con estudios conclu&iacute;dos.<br />\r\n<strong>INICIO: </strong>19 DE ENERO 2019<br />\r\n<strong>INFORMES - INSCRIPCIONES Y FINANCIAMIENTO:</strong> Oficina de Secretar&iacute;a Acad&eacute;mica o Recaudaci&oacute;n.\";}', 'a:1:{s:2:\"es\";s:387:\"<ol>\r\n	<li>Seguridad e higiene alimentaria.</li>\r\n	<li>BPM.</li>\r\n	<li>&Aacute;rea de producci&oacute;n en cocina.</li>\r\n	<li>Marketing aplicado.</li>\r\n	<li>Etiqueta y protocolo.</li>\r\n	<li>T&eacute;cnicas b&aacute;sicas de cocina.</li>\r\n	<li>Repertorio de cocina regional y peruana.</li>\r\n	<li>Cata de vinos y maridaje.</li>\r\n	<li>Asesor&iacute;a de proyectos productivos.</li>\r\n</ol>\r\n\";}', 'gastronomia', '0', '1', '2018-09-27 10:33:00');

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `visible` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'S',
  `fechareg` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `url` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `imagen` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `publicar` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'S',
  `estado` smallint(6) NOT NULL DEFAULT '1',
  `created_up` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES ('1', 'Polo de entrenamiento - Conj', 'Se suda hasta la última gota de esfuerzo', 'S', '2016-04-18 16:37:08', 'polo-de-entrenamiento-conj', 'img_admin/categorias/20181022171022.jpg', 'S', '1', '2018-10-22 10:59:22');
INSERT INTO `categoria` VALUES ('2', 'Polo de concentración', 'Ideal para los grandes partidos', 'S', '2016-04-18 16:37:08', 'polo-de-concentracion', 'img_admin/categorias/20181022181006.jpg', 'S', '1', '2018-10-22 11:00:06');
INSERT INTO `categoria` VALUES ('3', 'Buzo', 'Para soportar cualquier clima de visita', 'S', '2016-04-18 16:37:08', 'buzo', 'img_admin/categorias/20181022181015.jpg', 'S', '1', '2018-10-22 11:00:15');
INSERT INTO `categoria` VALUES ('5', 'Short', 'Ponte de corto y al campo...', 'S', '2016-05-14 00:52:45', 'short', 'img_admin/categorias/20181022181023.jpg', 'S', '1', '2018-10-22 11:00:23');
INSERT INTO `categoria` VALUES ('6', 'Casacas de buzo', 'Para soportar cualquier clima de visita', 'S', '2016-05-18 01:22:46', 'casacas-de-buzo', 'img_admin/categorias/20181022181031.jpg', 'S', '1', '2018-10-22 11:00:31');
INSERT INTO `categoria` VALUES ('7', 'Pantalón de buzo', 'Ideal para el frío de la \"pichanga\" por las noches', 'S', '2016-05-19 00:02:09', 'pantalon-de-buzo', 'img_admin/categorias/20181022181044.jpg', 'S', '1', '2018-10-22 11:26:44');
INSERT INTO `categoria` VALUES ('8', 'Solo polo entreno', 'Se suda hasta la última gota de esfuerzo', 'S', '2016-05-18 01:23:15', 'solo-polo-entreno', 'img_admin/categorias/20181022181003.jpg', 'S', '1', '2018-10-22 11:27:03');
INSERT INTO `categoria` VALUES ('9', 'Pack Apasionado', '', 'S', '2016-05-18 23:07:04', 'pack-apasionado', 'img_admin/categorias/20181022181035.jpg', 'S', '1', '2018-10-22 11:26:35');
INSERT INTO `categoria` VALUES ('10', 'Arquero de Exportación', '', 'S', '2016-06-18 00:17:06', 'arquero-de-exportacion', 'img_admin/categorias/20181022181026.jpg', 'S', '1', '2018-10-22 11:26:26');
INSERT INTO `categoria` VALUES ('11', 'Papá Hincha', '', 'S', '2016-06-18 00:23:42', 'papa-hincha', 'img_admin/categorias/20181022181019.jpg', 'S', '1', '2018-10-22 11:26:19');

-- ----------------------------
-- Table structure for chef
-- ----------------------------
DROP TABLE IF EXISTS `chef`;
CREATE TABLE `chef` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) DEFAULT NULL,
  `subtitulo` varchar(120) DEFAULT NULL,
  `resumen` varchar(150) DEFAULT NULL,
  `descripcion` longtext,
  `imagen` varchar(200) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of chef
-- ----------------------------
INSERT INTO `chef` VALUES ('8', 'a:1:{s:2:\"es\";s:11:\"LUIS HUERTA\";}', 'a:1:{s:2:\"es\";s:4:\"Chef\";}', 'a:1:{s:2:\"es\";s:16:\"MASTER PATISSIER\";}', 'a:1:{s:2:\"es\";s:677:\"<ul>\r\n	<li>Especializaci&oacute;n en Artisan Gelato - Carpigiani Gelato University, Bologna - Italia.</li>\r\n	<li>Panader&iacute;a artesanal y del mundo - Institute of Culinary Education (ICE), New York.</li>\r\n	<li>Chocolater&iacute;a y Bomboner&iacute;a - Chocolate Academy, Chicago, USA.</li>\r\n	<li>Workshop con Valrhona&nbsp; Chocolate - Emirates Academy, Dub&aacute;i.</li>\r\n	<li>Pastry chef asociado &ndash; Miami Culinary Institute</li>\r\n	<li>Pastry chef en Resort Madinat Jumeirah, Dub&aacute;i.</li>\r\n	<li>Pastry chef en Resort Canyon Ranch Miami, USA.</li>\r\n	<li>Master Patissierie, Le Cordon Bleu Per&uacute;.</li>\r\n	<li>Linecook restaurant Malabar, Lima</li>\r\n</ul>\r\n\";}', 'imagenes/chef/1.jpg', '8', '1', '2017-09-09 11:48:00');
INSERT INTO `chef` VALUES ('9', 'a:1:{s:2:\"es\";s:14:\"KEVIN SUÁREZ \";}', 'a:1:{s:2:\"es\";s:4:\"Chef\";}', 'a:1:{s:2:\"es\";s:36:\"ESPECIALISTA EN COCINA INTERNACIONAL\";}', 'a:1:{s:2:\"es\";s:400:\"<ul>\r\n	<li>Cocinero en Restaurant R&eacute;gis &amp; Jacques MARCON &ndash; 3 Estrellas Michelin, Francia.</li>\r\n	<li>Cocinero en Restaurant Luis Bernard Puech- 1 Estrella Michelin, Francia.</li>\r\n	<li>Master Cucina en ICIF, Italia.</li>\r\n	<li>Master Cuisine en Escuela de Gastronom&iacute;a y Arte Culinario Cumbre.</li>\r\n	<li>Chef en Resturante Loche, Hotel Casa de la Luna, Chiclayo.</li>\r\n</ul>\r\n\";}', 'imagenes/chef/2.jpg', '9', '1', '2017-09-09 11:49:07');
INSERT INTO `chef` VALUES ('10', 'a:1:{s:2:\"es\";s:14:\"BORIS STAKEEFF\";}', 'a:1:{s:2:\"es\";s:4:\"Chef\";}', 'a:1:{s:2:\"es\";s:46:\"ESPECIALISTA EN COCINA PERUANA E INTERNACIONAL\";}', 'a:1:{s:2:\"es\";s:362:\"<ul>\r\n	<li>Chef de partie del Ristorante Quadri, Venecia, Italia.</li>\r\n	<li>Master Cucina en ICIF, Italia.</li>\r\n	<li>Chef para el II Foro Mundial de Turismo Gastron&oacute;mico.</li>\r\n	<li>Capacitador para el MINCETUR &ndash; CENFOTUR.</li>\r\n	<li>Chef asesor en Supermercados Peruanos.</li>\r\n	<li>Coaching y trabajo en equipo - Pronabec (MINEDU).</li>\r\n</ul>\r\n\";}', 'imagenes/chef/3.jpg', '10', '1', '2017-09-09 11:49:57');
INSERT INTO `chef` VALUES ('11', 'a:1:{s:2:\"es\";s:16:\"ANDRÉ KUNIYOSHI\";}', 'a:1:{s:2:\"es\";s:4:\"Chef\";}', 'a:1:{s:2:\"es\";s:30:\"ESPECIALISTA EN COCINA PERUANA\";}', 'a:1:{s:2:\"es\";s:301:\"<ul>\r\n	<li>Chef de partie en restaurant Andre Chatelard, Francia.</li>\r\n	<li>Chef Ejecutivo de la cadena Casa Andina Hotel.</li>\r\n	<li>Master Cuisine en Escuela de Gastronom&iacute;a y Arte Culinario Cumbre.</li>\r\n	<li>Asesor gastron&oacute;mico en diversos restaurantes a nivel nacional</li>\r\n</ul>\r\n\";}', 'imagenes/chef/4.jpg', '11', '1', '2017-09-09 11:51:35');
INSERT INTO `chef` VALUES ('12', 'a:1:{s:2:\"es\";s:13:\"JESÚS ZAMORA\";}', 'a:1:{s:2:\"es\";s:4:\"Chef\";}', 'a:1:{s:2:\"es\";s:30:\"ESPECIALISTA EN COCINA PERUANA\";}', 'a:1:{s:2:\"es\";s:351:\"<ul>\r\n	<li>Chef de partie en Restauant L&acute;Ambassade, Francia.</li>\r\n	<li>Master Cuisine en Escuela de Gastronom&iacute;a y Arte Culinario Cumbre.</li>\r\n	<li>Chef en Restaurant El Rinc&oacute;n Que No Conoces, Lima.</li>\r\n	<li>Administraci&oacute;n y gesti&oacute;n de restaurantes en la Escuela Nacional de Gastronom&iacute;a, Lima.</li>\r\n</ul>\r\n\";}', 'imagenes/chef/5.jpg', '12', '1', '2017-09-09 11:52:41');
INSERT INTO `chef` VALUES ('13', 'a:1:{s:2:\"es\";s:15:\"AGUSTÍN JORDAN\";}', 'a:1:{s:2:\"es\";s:4:\"Chef\";}', 'a:1:{s:2:\"es\";s:31:\"ESPECIALISTA EN COCINA REGIONAL\";}', 'a:1:{s:2:\"es\";s:499:\"<ul>\r\n	<li>Chef ejecutivo del restaurante tur&iacute;stico &ldquo;El C&aacute;ntaro&rdquo;, Lambayeque.</li>\r\n	<li>Expositor en la Feria Internacional Mistura (dos a&ntilde;os consecutivos).</li>\r\n	<li>Investigador y gestor de la gastronom&iacute;a regional e identidad lambayecana.</li>\r\n	<li>Expositor en ferias de gastronom&iacute;a y turismo, congresos y talleres a nivel nacional e internacional.</li>\r\n	<li>Estudios de Alta Cocina en Hospitalily Management School Columbia, Lima.</li>\r\n</ul>\r\n\";}', 'imagenes/chef/6.jpg', '13', '1', '2017-09-09 11:53:34');

-- ----------------------------
-- Table structure for configuracion
-- ----------------------------
DROP TABLE IF EXISTS `configuracion`;
CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) DEFAULT NULL,
  `horario` text,
  `direccion` text,
  `email` varchar(200) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `facebook` varchar(75) DEFAULT NULL,
  `youtube` varchar(75) DEFAULT NULL,
  `instagram` varchar(75) DEFAULT NULL,
  `mapa` text,
  `popup` varchar(75) DEFAULT NULL,
  `show_popup` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of configuracion
-- ----------------------------
INSERT INTO `configuracion` VALUES ('1', 'INSTITUTO DE GASTRONOMÍA & ARTE CULINARIO', 'Lunes a Viernes de 8:00 a.m. a 8.00 p.m.', 'Av. Eufemio Lora y Lora 625', 'recepcion@escuelacumbre.edu.pe', '(074) 228 790', 'https://www.facebook.com/CumbrePeru', 'https://www.youtube.com/results?search_query=Cumbre+Gastronomia', 'fotos', '', 'imagenes/home/slider-1_1.jpg', '0');

-- ----------------------------
-- Table structure for diplomado
-- ----------------------------
DROP TABLE IF EXISTS `diplomado`;
CREATE TABLE `diplomado` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(75) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `slide` varchar(75) DEFAULT NULL,
  `imagen` varchar(75) NOT NULL,
  `certificacion` text NOT NULL,
  `titulos` text NOT NULL,
  `inversion` text NOT NULL,
  `titulacion` text NOT NULL,
  `detalleduracion` text NOT NULL,
  `detalledia` text,
  `detallehorario` text,
  `detallelugar` text,
  `detalleprecio` text,
  `detalleequipos` text,
  `detalleconsultas` text,
  `detalledirigido` text,
  `aquien` text,
  `temas` text,
  `nombreseo` varchar(200) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of diplomado
-- ----------------------------
INSERT INTO `diplomado` VALUES ('1', 'a:1:{s:2:\"es\";s:11:\"Pastelería\";}', 'a:1:{s:2:\"es\";s:323:\"<div>Este curso &ndash; taller tiene como objetivo capacitar a emprendedores y apasionados por la pasteler&iacute;a para que puedan implementar su propio negocio en base a productos de tendencia.<br />\r\nLos asistentes podr&aacute;n realizar pr&aacute;ctica en talleres totalmente implementados.</div>\r\n\r\n<div>&nbsp;</div>\r\n\";}', 'imagenes/carreras/fond_diplomado.jpg', 'imagenes/carreras/diplomado-pasteleria.png', 'a:1:{s:2:\"es\";s:486:\"Los participantes recibir&aacute;n el CERTIFICADO EN <strong>TALLER DE PASTELER&Iacute;A </strong>a nombre de Cumbre.<br />\r\n<strong><em>&iquest;Por qu&eacute; estudiar este taller en Cumbre?</em></strong>\r\n<ul>\r\n	<li>T&eacute;cnicas y herramientas con enfoque pr&aacute;ctico.</li>\r\n	<li>Docente instructor con experiencia y trayectoria.</li>\r\n	<li>Asesor&iacute;a de chefs de primer nivel.</li>\r\n	<li>La escuela de gastronom&iacute;a n&uacute;mero 1 de la regi&oacute;n.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:633:\"<strong>Luis Huerta / MASTER PATISSIER</strong><br />\r\nMaster Patissierie con m&aacute;s de 20 a&ntilde;os de experiencia. Con especializaci&oacute;n en Artisan Gelato - Carpigiani Gelato University, Bologna &ndash; Italia; panader&iacute;a artesanal y del mundo en el Institute of Culinary Education (ICE), New York; Chocolater&iacute;a y Bomboner&iacute;a - Chocolate Academy, Chicago, USA.<br />\r\nAdem&aacute;s es Pastry chef asociado &ndash; Miami Culinary Institute, ha trabajado como Pastry chef en Resort Madinat Jumeirah, Dub&aacute;i; Pastry chef en Resort Canyon Ranch Miami, USA; y como Line cook restaurant Malabar, Lima.\";}', 'a:1:{s:2:\"es\";s:288:\"<div style=\"line-height: 20.8px;\">\r\n<ul>\r\n	<li>S/. 1800.00 Nuevos Soles (4 cuotas de S/. 450.00 soles)</li>\r\n	<li>S/. 1500.00 soles (al contado)</li>\r\n</ul>\r\n<strong>Incluye: </strong>Uniforme (Chaqueta, mandil y Garibaldi) / Recetario / Insumos / Degustaci&oacute;n / Certificado</div>\r\n\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:27:\"Av. Eufemio Lora y Lora 625\";}', 'a:1:{s:2:\"es\";s:24:\"S/. 1500.00 (al contado)\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:10:\"074 228790\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:333:\"<ul>\r\n	<li>Propietarios de negocios de gastronom&iacute;a.</li>\r\n	<li>Pasteleros que quieren implementar un negocio.</li>\r\n	<li>Empresarios que desean implementar una marca de gastronom&iacute;a (pasteler&iacute;a).</li>\r\n	<li>P&uacute;blico apasionado por la pasteler&iacute;a que quiere perfeccionar su m&eacute;todo.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:319:\"<strong>SESI&Oacute;N 01:</strong> &nbsp; FESTIVAL DE GALLETAS Y SABLES.<br />\r\n<strong>SESI&Oacute;N 02:</strong>&nbsp;&nbsp; PIES Y TARTAS.<br />\r\n<strong>SESI&Oacute;N 03:&nbsp;&nbsp; </strong>PIES Y TARTAS II.<br />\r\n<strong>SESI&Oacute;N 04:</strong>&nbsp;&nbsp; MASA CHOUX.<br />\r\n[ ...16 SESIONES ]<br />\r\n&nbsp;\";}', 'pasteleria', '1', '1', '2017-10-05 11:40:34');

-- ----------------------------
-- Table structure for evento
-- ----------------------------
DROP TABLE IF EXISTS `evento`;
CREATE TABLE `evento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) DEFAULT NULL,
  `descripcion` longtext,
  `imagen` varchar(200) DEFAULT NULL,
  `nombreseo` varchar(200) NOT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of evento
-- ----------------------------
INSERT INTO `evento` VALUES ('1', 'a:1:{s:2:\"es\";s:24:\"Conferencias Magistrales\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/conferencias-magistrales.jpg', 'conferencias-magistrales', '1', '1', '2017-11-06 23:38:19');
INSERT INTO `evento` VALUES ('2', 'a:1:{s:2:\"es\";s:18:\"Clases Magistrales\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/clases-magistrales.jpg', 'clases-magistrales', '2', '1', '2017-11-06 23:38:50');
INSERT INTO `evento` VALUES ('3', 'a:1:{s:2:\"es\";s:11:\"Expo Cumbre\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/expo-cumbre_1.jpg', 'expo-cumbre', '3', '1', '2017-11-06 23:38:56');
INSERT INTO `evento` VALUES ('4', 'a:1:{s:2:\"es\";s:14:\"Fiesta de Gala\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/fiesta-de-gala.jpg', 'fiesta-de-gala', '4', '1', '2017-11-06 23:39:03');
INSERT INTO `evento` VALUES ('5', 'a:1:{s:2:\"es\";s:32:\"Imposición de camisacos I Ciclo\";}', 'a:1:{s:2:\"es\";s:182:\"Nuestros estudiantes de primer ciclo recibieron su primera chaqueta, s&iacute;mbolo de integridad y respeto hacia la pronta profesi&oacute;n que los acompa&ntilde;ar&aacute; siempre.\";}', 'imagenes/eventos/im-1.jpg', 'imposicion-de-camisacos-i-ciclo', '5', '1', '2017-10-11 22:50:36');
INSERT INTO `evento` VALUES ('6', 'a:1:{s:2:\"es\";s:17:\"Activación Olmos\";}', 'a:1:{s:2:\"es\";s:352:\"Activaci&oacute;n en el Centro de esparcimiento <strong>&ldquo;Los Algarrobos&rdquo;</strong> &ndash; Olmos a las 9:00 am, el d&iacute;a 22 de Septiembre del presente. El motivo de nuestra presencia fue participar de la feria vocacional exponiendo nuestra carrera profesional de gastronom&iacute;a con la que cuenta la instituci&oacute;n.<br />\r\n&nbsp;\";}', 'imagenes/eventos/im-2.jpg', 'activacion-olmos', '6', '1', '2017-10-11 15:37:26');
INSERT INTO `evento` VALUES ('7', 'a:1:{s:2:\"es\";s:11:\"Miss Cumbre\";}', 'a:1:{s:2:\"es\";s:353:\"La Escuela Peruana de Gastronom&iacute;a y Arte Culinario &ldquo;CUMBRE&rdquo;, organiza en el marco de su XI Aniversario Institucional <strong>&ldquo;MISS CUMBRE 2017&rdquo;, </strong>en la que se busca elegir a la dama que habr&aacute; de representar a la singular belleza gastron&oacute;mica, as&iacute; como tambi&eacute;n sus principios y virtudes.\";}', 'imagenes/eventos/im-3.jpg', 'miss-cumbre', '7', '1', '2017-10-11 15:45:37');
INSERT INTO `evento` VALUES ('8', 'a:1:{s:2:\"es\";s:11:\"Cumbrematch\";}', 'a:1:{s:2:\"es\";s:527:\"La Escuela Peruana de Gastronom&iacute;a y Arte Culinario &ldquo;CUMBRE&rdquo;, organiza en el marco de su XI Aniversario Institucional el <strong>CUMBREMATCH 2017, Copa &ldquo;INGENIA&rdquo;</strong> con la participaci&oacute;n de todos los estudiantes y miembros de la instituci&oacute;n con el prop&oacute;sito de fomentar la pr&aacute;ctica del deporte, la sana competencia; as&iacute; como, estrechar los lazos de confraternidad que permitan un desarrollo integral del estudiante y la identificaci&oacute;n con su Escuela.\";}', 'imagenes/eventos/im-4.jpg', 'cumbrematch', '8', '1', '2017-10-11 15:48:45');
INSERT INTO `evento` VALUES ('9', 'a:1:{s:2:\"es\";s:33:\"Seminario Magistral - Cumbre 2017\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/cha-cha.jpg', 'seminario-magistral-cumbre-2017', '9', '1', '2017-12-04 23:51:58');
INSERT INTO `evento` VALUES ('10', 'a:1:{s:2:\"es\";s:21:\"Conferencia de Prensa\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/con-prensa_1.jpg', 'conferencia-de-prensa', '10', '1', '2017-12-05 00:13:45');
INSERT INTO `evento` VALUES ('11', 'a:1:{s:2:\"es\";s:12:\"CUMBRE MATCH\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/cumbremacth.jpg', 'cumbre-match', '11', '1', '2017-12-05 00:18:43');
INSERT INTO `evento` VALUES ('12', 'a:1:{s:2:\"es\";s:15:\"EXPOCUMBRE 2017\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/expocumbre.jpg', 'expocumbre-2017', '12', '1', '2017-12-05 00:24:19');
INSERT INTO `evento` VALUES ('13', 'a:1:{s:2:\"es\";s:19:\"Fiesta de Gala 2017\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/fiesta-gala.jpg', 'fiesta-de-gala-2017', '13', '1', '2017-12-05 00:30:41');
INSERT INTO `evento` VALUES ('14', 'a:1:{s:2:\"es\";s:17:\"Guerra de cocinas\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/guerra-de-cocinas.jpg', 'guerra-de-cocinas', '14', '1', '2017-12-05 00:35:57');
INSERT INTO `evento` VALUES ('15', 'a:1:{s:2:\"es\";s:16:\"Miss Cumbre 2017\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/miss-cumbre.jpg', 'miss-cumbre-2017', '15', '1', '2017-12-05 00:41:22');

-- ----------------------------
-- Table structure for evento_img
-- ----------------------------
DROP TABLE IF EXISTS `evento_img`;
CREATE TABLE `evento_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(200) DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of evento_img
-- ----------------------------
INSERT INTO `evento_img` VALUES ('3', 'imagenes/eventos/03-jpg-1468583251.jpg', '1', '3', '1', '2016-07-15 06:47:31');
INSERT INTO `evento_img` VALUES ('4', 'imagenes/eventos/04-jpg-1468583252.jpg', '1', '4', '1', '2016-07-15 06:47:32');
INSERT INTO `evento_img` VALUES ('5', 'imagenes/eventos/05-jpg-1468583252.jpg', '1', '5', '1', '2016-07-15 06:47:32');
INSERT INTO `evento_img` VALUES ('6', 'imagenes/eventos/05-1-jpg-1468583253.jpg', '1', '6', '1', '2016-07-15 06:47:33');
INSERT INTO `evento_img` VALUES ('7', 'imagenes/eventos/05-2-jpg-1468583253.jpg', '1', '7', '1', '2016-07-15 06:47:33');
INSERT INTO `evento_img` VALUES ('8', 'imagenes/eventos/06-jpg-1468583254.jpg', '1', '8', '1', '2016-07-15 06:47:34');
INSERT INTO `evento_img` VALUES ('9', 'imagenes/eventos/07-jpg-1468583254.jpg', '1', '9', '1', '2016-07-15 06:47:34');
INSERT INTO `evento_img` VALUES ('10', 'imagenes/eventos/08-jpg-1468583255.jpg', '1', '10', '1', '2016-07-15 06:47:35');
INSERT INTO `evento_img` VALUES ('13', 'imagenes/eventos/03-jpg-1468584349.jpg', '2', '13', '1', '2016-07-15 07:05:49');
INSERT INTO `evento_img` VALUES ('14', 'imagenes/eventos/05-jpg-1468584357.jpg', '2', '14', '1', '2016-07-15 07:05:57');
INSERT INTO `evento_img` VALUES ('15', 'imagenes/eventos/05-1-jpg-1468584367.jpg', '2', '15', '1', '2016-07-15 07:06:07');
INSERT INTO `evento_img` VALUES ('16', 'imagenes/eventos/06-jpg-1468584390.jpg', '2', '16', '1', '2016-07-15 07:06:30');
INSERT INTO `evento_img` VALUES ('18', 'imagenes/eventos/09-jpg-1468584408.jpg', '2', '18', '1', '2016-07-15 07:06:48');
INSERT INTO `evento_img` VALUES ('19', 'imagenes/eventos/01-jpg-1468595077.jpg', '2', '19', '1', '2016-07-15 10:04:37');
INSERT INTO `evento_img` VALUES ('20', 'imagenes/eventos/02-jpg-1468595096.jpg', '2', '20', '1', '2016-07-15 10:04:56');
INSERT INTO `evento_img` VALUES ('21', 'imagenes/eventos/03-jpg-1468595218.jpg', '2', '21', '1', '2016-07-15 10:06:58');
INSERT INTO `evento_img` VALUES ('22', 'imagenes/eventos/04-jpg-1468595231.jpg', '2', '22', '1', '2016-07-15 10:07:11');
INSERT INTO `evento_img` VALUES ('23', 'imagenes/eventos/05-jpg-1468595476.jpg', '2', '23', '1', '2016-07-15 10:11:16');
INSERT INTO `evento_img` VALUES ('24', 'imagenes/eventos/06-jpg-1468595590.jpg', '2', '24', '1', '2016-07-15 10:13:10');
INSERT INTO `evento_img` VALUES ('25', 'imagenes/eventos/01-jpg-1468595836.jpg', '3', '25', '1', '2016-07-15 10:17:16');
INSERT INTO `evento_img` VALUES ('26', 'imagenes/eventos/02-jpg-1468595985.jpg', '3', '26', '1', '2016-07-15 10:19:45');
INSERT INTO `evento_img` VALUES ('27', 'imagenes/eventos/03-jpg-1468596005.jpg', '3', '27', '1', '2016-07-15 10:20:05');
INSERT INTO `evento_img` VALUES ('28', 'imagenes/eventos/04-jpg-1468596090.jpg', '3', '28', '1', '2016-07-15 10:21:30');
INSERT INTO `evento_img` VALUES ('29', 'imagenes/eventos/06-jpg-1468596175.jpg', '3', '29', '1', '2016-07-15 10:22:55');
INSERT INTO `evento_img` VALUES ('30', 'imagenes/eventos/05-jpg-1468596190.jpg', '3', '30', '1', '2016-07-15 10:23:10');
INSERT INTO `evento_img` VALUES ('31', 'imagenes/eventos/02-jpg-1468596848.jpg', '3', '31', '1', '2016-07-15 10:34:08');
INSERT INTO `evento_img` VALUES ('32', 'imagenes/eventos/05-jpg-1468597176.jpg', '3', '32', '1', '2016-07-15 10:39:36');
INSERT INTO `evento_img` VALUES ('33', 'imagenes/eventos/06-jpg-1468597347.jpg', '3', '33', '1', '2016-07-15 10:42:27');
INSERT INTO `evento_img` VALUES ('34', 'imagenes/eventos/03-jpg-1468597366.jpg', '3', '34', '1', '2016-07-15 10:42:46');
INSERT INTO `evento_img` VALUES ('35', 'imagenes/eventos/01-jpg-1468599126.jpg', '4', '35', '1', '2016-07-15 11:12:06');
INSERT INTO `evento_img` VALUES ('36', 'imagenes/eventos/02-jpg-1468599136.jpg', '4', '36', '1', '2016-07-15 11:12:16');
INSERT INTO `evento_img` VALUES ('37', 'imagenes/eventos/03-jpg-1468599143.jpg', '4', '37', '1', '2016-07-15 11:12:23');
INSERT INTO `evento_img` VALUES ('38', 'imagenes/eventos/04-jpg-1468599148.jpg', '4', '38', '1', '2016-07-15 11:12:28');
INSERT INTO `evento_img` VALUES ('39', 'imagenes/eventos/05-jpg-1468599155.jpg', '4', '39', '1', '2016-07-15 11:12:35');
INSERT INTO `evento_img` VALUES ('40', 'imagenes/eventos/06-jpg-1468599160.jpg', '4', '40', '1', '2016-07-15 11:12:40');
INSERT INTO `evento_img` VALUES ('41', 'imagenes/eventos/07-jpg-1468599165.jpg', '4', '41', '1', '2016-07-15 11:12:45');
INSERT INTO `evento_img` VALUES ('42', 'imagenes/eventos/08-jpg-1468599168.jpg', '4', '42', '1', '2016-07-15 11:12:48');
INSERT INTO `evento_img` VALUES ('43', 'imagenes/eventos/09-jpg-1468599174.jpg', '4', '43', '1', '2016-07-15 11:12:54');
INSERT INTO `evento_img` VALUES ('44', 'imagenes/eventos/camisacos-oct-2017-1.jpg', '5', '44', '1', '2017-11-07 09:27:22');
INSERT INTO `evento_img` VALUES ('45', 'imagenes/eventos/camisacos-oct-2017-2.jpg', '5', '45', '1', '2017-11-07 09:27:22');
INSERT INTO `evento_img` VALUES ('46', 'imagenes/eventos/activ-olmos-oct-2017-1.jpg', '6', '46', '1', '2017-11-07 16:42:02');
INSERT INTO `evento_img` VALUES ('47', 'imagenes/eventos/activ-olmos-oct-2017-2.jpg', '6', '47', '1', '2017-11-07 16:42:02');
INSERT INTO `evento_img` VALUES ('48', 'imagenes/eventos/activ-olmos-oct-2017-3.jpg', '6', '48', '1', '2017-11-07 16:42:02');
INSERT INTO `evento_img` VALUES ('49', 'imagenes/eventos/mis-cumbre-oct-2017.jpg', '7', '49', '1', '2017-11-07 16:47:43');
INSERT INTO `evento_img` VALUES ('50', 'imagenes/eventos/expo-cumbre-oct-2017.jpg', '8', '50', '1', '2017-11-07 16:51:10');
INSERT INTO `evento_img` VALUES ('51', 'imagenes/eventos/seminarios-magistrales-17/cha1.jpg', '9', '1', '1', '2017-12-05 00:08:37');
INSERT INTO `evento_img` VALUES ('52', 'imagenes/eventos/seminarios-magistrales-17/cha2.jpg', '9', '2', '1', '2017-12-05 00:08:37');
INSERT INTO `evento_img` VALUES ('53', 'imagenes/eventos/seminarios-magistrales-17/cha3.jpg', '9', '3', '1', '2017-12-05 00:09:01');
INSERT INTO `evento_img` VALUES ('54', 'imagenes/eventos/seminarios-magistrales-17/cha4.jpg', '9', '4', '1', '2017-12-05 00:09:01');
INSERT INTO `evento_img` VALUES ('55', 'imagenes/eventos/seminarios-magistrales-17/cha5.jpg', '9', '5', '1', '2017-12-05 00:09:11');
INSERT INTO `evento_img` VALUES ('56', 'imagenes/eventos/conf-prensa-nov17/con-prensa-1.jpg', '10', '1', '1', '2017-12-05 00:15:36');
INSERT INTO `evento_img` VALUES ('57', 'imagenes/eventos/conf-prensa-nov17/con-prensa-2.jpg', '10', '2', '1', '2017-12-05 00:15:36');
INSERT INTO `evento_img` VALUES ('58', 'imagenes/eventos/conf-prensa-nov17/con-prensa-3.jpg', '10', '3', '1', '2017-12-05 00:15:36');
INSERT INTO `evento_img` VALUES ('59', 'imagenes/eventos/conf-prensa-nov17/con-prensa-4.jpg', '10', '4', '1', '2017-12-05 00:15:36');
INSERT INTO `evento_img` VALUES ('60', 'imagenes/eventos/cumbrematch-nov17/cumbre-match-1.jpg', '11', '1', '1', '2017-12-05 00:20:20');
INSERT INTO `evento_img` VALUES ('61', 'imagenes/eventos/cumbrematch-nov17/cumbre-match-2.jpg', '11', '2', '1', '2017-12-05 00:20:20');
INSERT INTO `evento_img` VALUES ('62', 'imagenes/eventos/cumbrematch-nov17/cumbre-match-3.jpg', '11', '3', '1', '2017-12-05 00:20:20');
INSERT INTO `evento_img` VALUES ('70', 'imagenes/eventos/expocumbre-2017/expocumbre-1.jpg', '12', '1', '1', '2017-12-05 00:26:05');
INSERT INTO `evento_img` VALUES ('71', 'imagenes/eventos/expocumbre-2017/expocumbre-2.jpg', '12', '2', '1', '2017-12-05 00:26:05');
INSERT INTO `evento_img` VALUES ('72', 'imagenes/eventos/expocumbre-2017/expocumbre-3.jpg', '12', '3', '1', '2017-12-05 00:26:05');
INSERT INTO `evento_img` VALUES ('73', 'imagenes/eventos/expocumbre-2017/expocumbre-4.jpg', '12', '4', '1', '2017-12-05 00:26:05');
INSERT INTO `evento_img` VALUES ('74', 'imagenes/eventos/expocumbre-2017/expocumbre-5.jpg', '12', '5', '1', '2017-12-05 00:26:05');
INSERT INTO `evento_img` VALUES ('75', 'imagenes/eventos/expocumbre-2017/expocumbre-6.jpg', '12', '6', '1', '2017-12-05 00:26:17');
INSERT INTO `evento_img` VALUES ('76', 'imagenes/eventos/fiesta-gala-2017/1.jpg', '13', '1', '1', '2017-12-05 00:32:51');
INSERT INTO `evento_img` VALUES ('77', 'imagenes/eventos/fiesta-gala-2017/2.jpg', '13', '2', '1', '2017-12-05 00:32:51');
INSERT INTO `evento_img` VALUES ('78', 'imagenes/eventos/fiesta-gala-2017/3.jpg', '13', '3', '1', '2017-12-05 00:32:51');
INSERT INTO `evento_img` VALUES ('79', 'imagenes/eventos/fiesta-gala-2017/4.jpg', '13', '4', '1', '2017-12-05 00:32:51');
INSERT INTO `evento_img` VALUES ('80', 'imagenes/eventos/fiesta-gala-2017/5.jpg', '13', '5', '1', '2017-12-05 00:32:51');
INSERT INTO `evento_img` VALUES ('81', 'imagenes/eventos/guerra-de-cocinas/1.jpg', '14', '1', '1', '2017-12-05 00:36:53');
INSERT INTO `evento_img` VALUES ('82', 'imagenes/eventos/guerra-de-cocinas/2.jpg', '14', '2', '1', '2017-12-05 00:36:53');
INSERT INTO `evento_img` VALUES ('83', 'imagenes/eventos/guerra-de-cocinas/3.jpg', '14', '3', '1', '2017-12-05 00:36:53');
INSERT INTO `evento_img` VALUES ('84', 'imagenes/eventos/guerra-de-cocinas/4.jpg', '14', '4', '1', '2017-12-05 00:36:53');
INSERT INTO `evento_img` VALUES ('85', 'imagenes/eventos/guerra-de-cocinas/5.jpg', '14', '5', '1', '2017-12-05 00:37:07');
INSERT INTO `evento_img` VALUES ('86', 'imagenes/eventos/miss-cumbre-17/1.jpg', '15', '1', '1', '2017-12-05 00:43:14');
INSERT INTO `evento_img` VALUES ('87', 'imagenes/eventos/miss-cumbre-17/2.jpg', '15', '2', '1', '2017-12-05 00:43:14');
INSERT INTO `evento_img` VALUES ('88', 'imagenes/eventos/miss-cumbre-17/3.jpg', '15', '3', '1', '2017-12-05 00:43:14');
INSERT INTO `evento_img` VALUES ('89', 'imagenes/eventos/miss-cumbre-17/4.jpg', '15', '4', '1', '2017-12-05 00:43:14');
INSERT INTO `evento_img` VALUES ('90', 'imagenes/eventos/miss-cumbre-17/5.jpg', '15', '5', '1', '2017-12-05 00:43:14');

-- ----------------------------
-- Table structure for facultad
-- ----------------------------
DROP TABLE IF EXISTS `facultad`;
CREATE TABLE `facultad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activo` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of facultad
-- ----------------------------
INSERT INTO `facultad` VALUES ('1', 'a:1:{s:2:\"es\";s:28:\"CIENCIAS DE LA COMUNICACIÓN\";}', 'a:1:{s:2:\"es\";s:34:\"Ciencias de la comunicaci&oacute;n\";}', 'imagenes/facultad/carrera_1.jpg', '1', '1', '2015-10-30 02:37:33', '0');

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'admin', 'Administrator');
INSERT INTO `groups` VALUES ('2', 'members', 'General User');

-- ----------------------------
-- Table structure for home
-- ----------------------------
DROP TABLE IF EXISTS `home`;
CREATE TABLE `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `url` varchar(75) NOT NULL,
  `imagen` varchar(75) NOT NULL,
  `titulo_2` text NOT NULL,
  `url_2` varchar(75) NOT NULL,
  `imagen_2` varchar(75) NOT NULL,
  `titulo_3` text,
  `url_3` varchar(75) DEFAULT NULL,
  `imagen_3` varchar(75) DEFAULT NULL,
  `convenios` text,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of home
-- ----------------------------
INSERT INTO `home` VALUES ('1', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:24:\"./carrera-de-gastronomia\";}', 'imagenes/home/home_1.jpg', 'a:1:{s:2:\"es\";s:24:\"<h3>Cursos Cortos</h3>\r\n\";}', 'a:1:{s:2:\"es\";s:25:\"./diplomado-de-pasteleria\";}', 'imagenes/home/home_2.jpg', 'a:1:{s:2:\"es\";s:47:\"<h3>Chefs&nbsp;<span>Instructores</span></h3>\r\n\";}', 'a:1:{s:2:\"es\";s:10:\"./talleres\";}', 'imagenes/home/home_3_1.jpg', 'a:1:{s:2:\"es\";s:706:\"<p>Cumbre ahora comparte su marca con <strong><a href=\"http://www.toques-auvergne.com\" target=\"_blank\">Les Toques D&#39; Auvergne</a></strong> asociaci&oacute;n de restaurantes franceses categorizados con estrella Michelin. Cumplimos los est&aacute;ndares para titular alumnos siguiendo las pautas m&aacute;s rigurosas de los mejores establecimientos de Francia, la &ldquo;meca&rdquo; de la t&eacute;cnica gastron&oacute;mica mundial. Nuestros estudiantes y egresados pueden tambi&eacute;n acceder a pasant&iacute;as y pr&aacute;cticas. Para que tu pasi&oacute;n por la cocina sea el alma de tu futuro.&nbsp;<a href=\"http://www.toques-auvergne.com/\" target=\"_blank\">http://www.toques-auvergne.com</a></p>\r\n\";}', '0', '1', '2018-07-24 18:43:31');

-- ----------------------------
-- Table structure for login_attempts
-- ----------------------------
DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of login_attempts
-- ----------------------------

-- ----------------------------
-- Table structure for mensaje
-- ----------------------------
DROP TABLE IF EXISTS `mensaje`;
CREATE TABLE `mensaje` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `descripcion_2` text NOT NULL,
  `slogan` text NOT NULL,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mensaje
-- ----------------------------
INSERT INTO `mensaje` VALUES ('1', 'a:1:{s:2:\"es\";s:24:\"BIENVENIDOS AL NUEVO ISP\";}', 'imagenes/mensaje/foto_promotor.png', 'a:1:{s:2:\"es\";s:2396:\"<p>En nombre de <span>INSTITUTO ISP</span> queremos darles una cordial bienvenida y esperamos formar parte de su tan anhelado futuro profesional.</p>\r\n\r\n<p>En <span>ISP</span> tenemos propuestas educativas realmente innovadoras, para que puedas alcanzar en poco tiempo, un adecuado grado de conocimientos y as&iacute; poder insertarte con &eacute;xito en el cambiante mercado laboral. Acad&eacute;micamente, estamos estructurados de tal manera que, cada alumno reciba una formaci&oacute;n integral y para ello consideramos que la teor&iacute;a y la pr&aacute;ctica son la conjunci&oacute;n ideal para alcanzar los objetivos requeridos. Hoy la capacitaci&oacute;n es indispensable, pero para que ella sea efectiva es necesario adecuarla a los cambios continuos que se producen en nuestros d&iacute;as. Por ello nuestro Instituto est&aacute; en contacto con los centros de estudio m&aacute;s importantes del mundo, lo cual nos permite evaluar y enriquecer permanentemente nuestros planes de estudio.</p>\r\n\r\n<p>El Instituto de Educaci&oacute;n Superior Tecnol&oacute;gico Privado <span>ISP</span>, es una Instituci&oacute;n Educativa de car&aacute;cter privado, con m&aacute;s de 28 a&ntilde;os formando profesionales l&iacute;deres en las Ciencias de la Comunicaci&oacute;n, creado mediante R.M. N&ordm; 501-86-ED del 07 de Agosto de 1986, Resoluci&oacute;n Directoral N&ordm; 6950-86-ED DEL 17 de Diciembre de 1986 y Revalidado con R.D. N&ordm; 0089-2006-ED del 09 de Febrero del 2006, contamos tambi&eacute;n con Certificado de Adecuaci&oacute;n de Estudios de las Carreras Profesionales al nuevo Dise&ntilde;o Curricular B&aacute;sico N&ordm; 238-2014-DESTP, con fecha 08 de Julio del 2014 y Constancia de Adecuaci&oacute;n Institucional N&ordm; 565, de fecha 24 de Setiembre del 2014.</p>\r\n\r\n<p>El funcionamiento del Instituto se rige por lo establecido en la Ley General de Educaci&oacute;n N&ordm; 28044, el Reglamento de Apertura y Funcionamiento de Institutos Superiores Tecnol&oacute;gicos y Escuelas Superiores no Estatales aprobado por D.S. N&ordm; 015-87-ED, las Normas de Organizaci&oacute;n y Funciones de los Institutos Superiores Tecnol&oacute;gicos aprobado por R.M. N&ordm; 641-83 y otras de car&aacute;cter T&eacute;cnico-Pedag&oacute;gico y Administrativo expedidas por la Direcci&oacute;n General de Educaci&oacute;n Superior, as&iacute; como el D.S. N&ordm; 014-2002-ED.</p>\r\n\";}', 'a:1:{s:2:\"es\";s:1185:\"<div class=\"col-xs-12\">\r\n<p>Ello significa no solamente la partida de nacimiento de nuestra vida institucional, sino tambi&eacute;n el cumplimiento del anhelo largamente esperado por los locutores peruanos: el reconocimiento de su actividad como una PROFESI&Oacute;N. En realidad, este hecho no es por pura coincidencia. Y es que siempre estuvimos a la vanguardia en el mundo de las comunicaciones en el pa&iacute;s, pues somos creadores de otra carrera profesional: &ldquo;Periodismo Radial y Televisivo&rdquo;.</p>\r\n\r\n<p>Hoy en d&iacute;a somos una instituci&oacute;n educativa s&oacute;lida, que desarrolla al m&aacute;ximo el talento de nuestros alumnos para convertirlos en profesionales l&iacute;deres; por ese motivo hemos redoblado esfuerzos y tecnolog&iacute;as.</p>\r\n\r\n<p>Ingresamos a nuestra tercera d&eacute;cada renovando nuestro compromiso de formar los mejores profesionales, esa motivaci&oacute;n crece y la encontramos en la m&iacute;stica de nuestros egresados que triunfan en los medios de comunicaci&oacute;n del pa&iacute;s y el extranjero; as&iacute; como en el esfuerzo y dedicaci&oacute;n de nuestros estudiantes. &iexcl; Bienvenidos al nuevo ISP!</p>\r\n</div>\r\n\";}', 'a:1:{s:2:\"es\";s:424:\"El 7 de agosto de 1986, el ministro de educaci&oacute;n por Resoluci&oacute;n Ministerial N&ordm; 501-86-ED, reconoce como carrera profesional &ldquo;Locuci&oacute;n y Comunicaci&oacute;n Radial y Televisiva&rdquo;; propuesta dise&ntilde;ada por la Asociaci&oacute;n Educativa &ldquo;Sistema Per&uacute;&rdquo;, a la vez que autoriza su funcionamiento como Instituto Superior Tecnol&oacute;gico Privado SISTEMAS PER&Uacute;.\";}', 'a:1:{s:2:\"es\";s:344:\"<p>Formar profesionales t&eacute;cnicos; investigadores, creativos, competentes y comprometidos en la soluci&oacute;n de problemas en el campo de las comunicaciones. Generando y desarrollando t&eacute;cnicas con conocimientos cient&iacute;ficos, human&iacute;sticos y tecnol&oacute;gicos a trav&eacute;s de los cuales buscamos soluciones.</p>\r\n\";}', 'a:1:{s:2:\"es\";s:191:\"<p>Hacer de cada uno de nuestros estudiantes, un profesional a carta cabal que cumpla un rol importante con &eacute;tica y moral al servicio de la sociedad. Comprometidos con la verdad.</p>\r\n\";}', '1', '1', '2015-11-04 22:51:54');

-- ----------------------------
-- Table structure for noticias
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `banner` varchar(75) DEFAULT NULL,
  `nombreseo` varchar(75) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activo` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES ('1', 'a:1:{s:2:\"es\";s:15:\"GROUND SHIPPING\";}', 'a:1:{s:2:\"es\";s:128:\"<p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Aenean in ante magna. Quisque sodales, exid fermentum tempor.</p>\r\n\";}', 'imagenes/noticias/noticia1.jpg', 'imagenes/noticias/noticia1_1.jpg', 'ground-shipping', '1', '1', '2015-11-05 22:27:31', '0');
INSERT INTO `noticias` VALUES ('2', 'a:1:{s:2:\"es\";s:11:\"AIR FREIGHT\";}', 'a:1:{s:2:\"es\";s:128:\"<p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Aenean in ante magna. Quisque sodales, exid fermentum tempor.</p>\r\n\";}', 'imagenes/noticias/noticia2.jpg', 'imagenes/noticias/noticia1_2.jpg', 'air-freight', '2', '1', '2015-11-05 22:27:59', '1');
INSERT INTO `noticias` VALUES ('3', 'a:1:{s:2:\"es\";s:12:\"SEA DELIVERY\";}', 'a:1:{s:2:\"es\";s:128:\"<p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Aenean in ante magna. Quisque sodales, exid fermentum tempor.</p>\r\n\";}', 'imagenes/noticias/noticia3.jpg', 'imagenes/noticias/noticia1_3.jpg', 'sea-delivery', '3', '1', '2015-11-05 22:31:16', '0');
INSERT INTO `noticias` VALUES ('4', 'a:1:{s:2:\"es\";s:17:\"GROUND SHIPPING 2\";}', 'a:1:{s:2:\"es\";s:128:\"<p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Aenean in ante magna. Quisque sodales, exid fermentum tempor.</p>\r\n\";}', 'imagenes/noticias/noticia4.jpg', 'imagenes/noticias/noticia1_4.jpg', 'ground-shipping-2', '4', '1', '2015-11-05 22:31:28', '0');

-- ----------------------------
-- Table structure for red
-- ----------------------------
DROP TABLE IF EXISTS `red`;
CREATE TABLE `red` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(125) DEFAULT NULL,
  `subtitulo` varchar(125) DEFAULT NULL,
  `tipo` varchar(125) DEFAULT NULL,
  `vacantes` varchar(125) DEFAULT NULL,
  `requisitos` text NOT NULL,
  `conocimientos` text NOT NULL,
  `salario` varchar(125) DEFAULT NULL,
  `nombrecontacto` varchar(125) DEFAULT NULL,
  `telefonocontacto` varchar(125) DEFAULT NULL,
  `emailcontacto` varchar(125) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of red
-- ----------------------------
INSERT INTO `red` VALUES ('119', 'a:1:{s:2:\"es\";s:20:\"Restaurante de Hotel\";}', 'a:1:{s:2:\"es\";s:21:\"Hotel Casa de La Luna\";}', 'a:1:{s:2:\"es\";s:10:\"Prácticas\";}', 'a:1:{s:2:\"es\";s:2:\"01\";}', 'a:1:{s:2:\"es\";s:238:\"<ul>\r\n	<li>Conocimientos del arte culinario</li>\r\n	<li>Facilidad de palabra y atenci&oacute;n al p&uacute;blico.</li>\r\n	<li>Capacidad de trabajo en equipo.</li>\r\n	<li>Enviar CV a <strong>contacto@casadelaluna.com.pe</strong></li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:2:\"--\";}', 'a:1:{s:2:\"es\";s:31:\"Administración Casa de la Luna\";}', 'a:1:{s:2:\"es\";s:13:\"(074) 270 156\";}', 'a:1:{s:2:\"es\";s:28:\"contacto@casadelaluna.com.pe\";}', '22', '1', '2018-09-27 10:48:34');
INSERT INTO `red` VALUES ('120', 'a:1:{s:2:\"es\";s:11:\"Restaurante\";}', 'a:1:{s:2:\"es\";s:22:\"D´MAPHI Coffee Lounge\";}', 'a:1:{s:2:\"es\";s:2:\"02\";}', 'a:1:{s:2:\"es\";s:16:\"Practicante Chef\";}', 'a:1:{s:2:\"es\";s:131:\"<ul style=\"list-style-type:circle;\">\r\n	<li>Responsabilidad</li>\r\n	<li>Apasionado por la cocina</li>\r\n	<li>Puntualidad</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:219:\"<ul style=\"list-style-type:circle;\">\r\n	<li>Cocina variada</li>\r\n	<li>Pasteler&iacute;a</li>\r\n	<li>Cokteleria</li>\r\n	<li><strong>Direcci&oacute;n: </strong>Calle Los Dulantos 162 &ndash; Urb. Santa Victoria</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:2:\"--\";}', 'a:1:{s:2:\"es\";s:16:\"Miltón Coronado\";}', 'a:1:{s:2:\"es\";s:9:\"987725161\";}', 'a:1:{s:2:\"es\";s:17:\"dmaphig@gmail.com\";}', '23', '1', '2018-10-03 16:28:00');
INSERT INTO `red` VALUES ('121', 'a:1:{s:2:\"es\";s:11:\"Restaurante\";}', 'a:1:{s:2:\"es\";s:22:\"D´MAPHI Coffee Lounge\";}', 'a:1:{s:2:\"es\";s:21:\"Practicantes Azafatas\";}', 'a:1:{s:2:\"es\";s:2:\"04\";}', 'a:1:{s:2:\"es\";s:136:\"<ul style=\"list-style-type:circle;\">\r\n	<li>Responsabilidad</li>\r\n	<li>Apasionado</li>\r\n	<li>Puntualidad</li>\r\n	<li>Carisma</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:203:\"<ul style=\"list-style-type:circle;\">\r\n	<li>Atenci&oacute;n al cliente en Restauraci&oacute;n</li>\r\n	<li><strong>Direcci&oacute;n: </strong>Calle Los Dulantos 162 &ndash; Urb. Santa Victoria</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:2:\"--\";}', 'a:1:{s:2:\"es\";s:16:\"Miltón Coronado\";}', 'a:1:{s:2:\"es\";s:9:\"987725161\";}', 'a:1:{s:2:\"es\";s:17:\"dmaphig@gmail.com\";}', '24', '1', '2018-10-03 16:30:32');
INSERT INTO `red` VALUES ('122', 'a:1:{s:2:\"es\";s:11:\"Restaurante\";}', 'a:1:{s:2:\"es\";s:22:\"D´MAPHI Coffee Lounge\";}', 'a:1:{s:2:\"es\";s:30:\"Practicante Ayudante de cocina\";}', 'a:1:{s:2:\"es\";s:2:\"04\";}', 'a:1:{s:2:\"es\";s:117:\"<ul style=\"list-style-type:circle;\">\r\n	<li>Responsabilidad</li>\r\n	<li>Apasionado</li>\r\n	<li>Puntualidad</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:219:\"<ul style=\"list-style-type:circle;\">\r\n	<li>Cocina variada</li>\r\n	<li>Pasteler&iacute;a</li>\r\n	<li>Cokteleria</li>\r\n	<li><strong>Direcci&oacute;n: </strong>Calle Los Dulantos 162 &ndash; Urb. Santa Victoria</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:2:\"--\";}', 'a:1:{s:2:\"es\";s:16:\"Miltón Coronado\";}', 'a:1:{s:2:\"es\";s:9:\"987725161\";}', 'a:1:{s:2:\"es\";s:17:\"dmaphig@gmail.com\";}', '25', '1', '2018-10-03 16:33:43');
INSERT INTO `red` VALUES ('123', 'a:1:{s:2:\"es\";s:14:\"Sushi Delivery\";}', 'a:1:{s:2:\"es\";s:8:\"MAKI Cix\";}', 'a:1:{s:2:\"es\";s:12:\"Practicantes\";}', 'a:1:{s:2:\"es\";s:2:\"02\";}', 'a:1:{s:2:\"es\";s:88:\"<ul>\r\n	<li>Ganas de aprender m&aacute;s sobre la cocina nikkei y de autor.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:69:\"<ul>\r\n	<li><strong>Horario: </strong>6:00 pm a 10:30 pm</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:2:\"--\";}', 'a:1:{s:2:\"es\";s:21:\"Edgard Flores Guevara\";}', 'a:1:{s:2:\"es\";s:9:\"959692328\";}', 'a:1:{s:2:\"es\";s:32:\"edgard.floresguevara@gmail.com  \";}', '26', '1', '2018-10-03 16:37:25');
INSERT INTO `red` VALUES ('124', 'a:1:{s:2:\"es\";s:11:\"Restaurante\";}', 'a:1:{s:2:\"es\";s:11:\"Restaurante\";}', 'a:1:{s:2:\"es\";s:11:\"Practicante\";}', 'a:1:{s:2:\"es\";s:2:\"01\";}', 'a:1:{s:2:\"es\";s:86:\"<ul>\r\n	<li>Aptitudes: Honradez, buen desenvolvimiento en el &aacute;rea.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:142:\"<ul>\r\n	<li>Preparaci&oacute;n de pescados, marisco y comida criolla.</li>\r\n	<li>Direcci&oacute;n: Av. J. L. Ortiz 339 - Chiclayo</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:2:\"--\";}', 'a:1:{s:2:\"es\";s:15:\"Agustín Vargas\";}', 'a:1:{s:2:\"es\";s:11:\"979 544 270\";}', 'a:1:{s:2:\"es\";s:27:\"agustin28vargas@hotmail.com\";}', '27', '1', '2018-10-10 14:52:06');
INSERT INTO `red` VALUES ('125', 'a:1:{s:2:\"es\";s:9:\"RESTOBAR \";}', 'a:1:{s:2:\"es\";s:7:\"QUATTRO\";}', 'a:1:{s:2:\"es\";s:18:\"Ayudante de cocina\";}', 'a:1:{s:2:\"es\";s:2:\"02\";}', 'a:1:{s:2:\"es\";s:135:\"<ul>\r\n	<li>Horario: 9:30 am. A 4:30 pm.</li>\r\n	<li>Direcci&oacute;n: Los Manzanos 180 - Urb. Santa Victoria</li>\r\n</ul>\r\n<br />\r\n&nbsp;\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:9:\"Nina Soto\";}', 'a:1:{s:2:\"es\";s:11:\"989 913 918\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', '28', '1', '2018-10-11 10:33:15');

-- ----------------------------
-- Table structure for slidehome
-- ----------------------------
DROP TABLE IF EXISTS `slidehome`;
CREATE TABLE `slidehome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) DEFAULT NULL,
  `subtitulo` varchar(20) DEFAULT NULL,
  `descripcion` varchar(40) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `url` varchar(75) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of slidehome
-- ----------------------------
INSERT INTO `slidehome` VALUES ('13', 'Campus', 'Gastronómico', '', 'imagenes/home/slider-1_2.jpg', 'campus-gastronomico', '1', '1', '2016-07-04 23:52:09');
INSERT INTO `slidehome` VALUES ('14', 'Carrera de ', 'Gastronomía', '', 'imagenes/home/slider-2.jpg', 'carrera-de-gastronomia', '2', '1', '2016-07-04 23:55:18');
INSERT INTO `slidehome` VALUES ('15', 'Diplomado de', 'Pasteleria', '', 'imagenes/slidehome/slider-3.jpg', 'diplomado-de-pasteleria', '3', '1', '2016-07-04 23:53:54');

-- ----------------------------
-- Table structure for taller
-- ----------------------------
DROP TABLE IF EXISTS `taller`;
CREATE TABLE `taller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(75) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `slide` varchar(75) DEFAULT NULL,
  `imagen` varchar(75) NOT NULL,
  `certificacion` text NOT NULL,
  `titulos` text NOT NULL,
  `inversion` text NOT NULL,
  `titulacion` text NOT NULL,
  `detalleduracion` text NOT NULL,
  `detalledia` text,
  `detallehorario` text,
  `detallelugar` text,
  `detalleprecio` text,
  `detalleequipos` text,
  `detalleconsultas` text,
  `detalledirigido` text,
  `aquien` text,
  `temas` text,
  `nombreseo` varchar(200) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of taller
-- ----------------------------
INSERT INTO `taller` VALUES ('17', 'a:1:{s:2:\"es\";s:32:\"MASA HOJALDRE Y SUS APLICACIONES\";}', 'a:1:{s:2:\"es\";s:27:\"<strong>3 SESIONES</strong>\";}', '', 'imagenes/talleres/1.jpg', '', '', '', '', 'a:1:{s:2:\"es\";s:17:\"7, 8, 9 de agosto\";}', null, 'a:1:{s:2:\"es\";s:16:\"7:00 a 10:00 pm.\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:6:\"S/ 200\";}', null, null, 'a:1:{s:2:\"es\";s:0:\"\";}', null, null, null, '1', '1', '2018-07-25 06:09:33');
INSERT INTO `taller` VALUES ('18', 'a:1:{s:2:\"es\";s:15:\"TORTAS MODERNAS\";}', 'a:1:{s:2:\"es\";s:41:\"<strong>3 SESIONES</strong><br />\r\n&nbsp;\";}', '', 'imagenes/talleres/2.jpg', '', '', '', '', 'a:1:{s:2:\"es\";s:20:\"14, 15, 16 de agosto\";}', null, 'a:1:{s:2:\"es\";s:16:\"7:00 a 10:00 pm.\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:6:\"S/ 200\";}', null, null, 'a:1:{s:2:\"es\";s:0:\"\";}', null, null, null, '2', '1', '2018-07-25 06:20:33');
INSERT INTO `taller` VALUES ('19', 'a:1:{s:2:\"es\";s:10:\"MESA DULCE\";}', 'a:1:{s:2:\"es\";s:27:\"<strong>3 SESIONES</strong>\";}', '', 'imagenes/talleres/3.jpg', '', '', '', '', 'a:1:{s:2:\"es\";s:20:\"21, 22, 23 de agosto\";}', null, 'a:1:{s:2:\"es\";s:16:\"7:00 a 10:00 pm.\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:6:\"S/ 200\";}', null, null, 'a:1:{s:2:\"es\";s:0:\"\";}', null, null, null, '3', '1', '2018-07-25 06:26:30');

-- ----------------------------
-- Table structure for textos
-- ----------------------------
DROP TABLE IF EXISTS `textos`;
CREATE TABLE `textos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificador` text NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of textos
-- ----------------------------
INSERT INTO `textos` VALUES ('1', 'Transforma tu vida', 'a:1:{s:2:\"es\";s:19:\"TRANSFORMA TU VIDA \";}', 'a:1:{s:2:\"es\";s:1279:\"Tenemos nuestro Reto40 - reto de 40 d&iacute;as dise&ntilde;ado de acuerdo a tus necesidades y requerimientos. D&oacute;nde deseamos brindarte una mirada holistica y una figura amplia de lo que est&aacute; sucediendo en tu vida y como generar el cambio inicial para poder transformarte.<br />\r\n<br />\r\n<img alt=\"\" class=\"krown-single-image aligncenter sep1\" height=\"8\" src=\"http://nadine-rothfuss.de/media/sep.png\" width=\"194\" /><br />\r\n\r\nElaboraremos una pr&aacute;ctica diaria para ti, asesor&iacute;a en nutrici&oacute;n y soporte v&iacute;a email y/o skype ilimitado durante todo el proceso. Ya sea que desees cambiar tu estilo de vida o alimentaci&oacute;n, aprender a respirar, liberar estr&eacute;s, miedo, ansiedad, fortalecer , prepararte para tu matrimonio, recuperarte de alguna enfermedad o cualquier sucedo importante en tu vida. Esta es la herramienta clave para atravesar cualquier cosa que se te presente! Crea la mejor versi&oacute;n posible de ti mismo a trav&eacute;s de nuestra gu&iacute;a y soporte. Todos tenemos el poder de transformar-nos y est&aacute; dentro de todos la capacidad de volver esto realidad. Tenemos asesor&iacute;a personalizada para ti para inicies el cambio en tu vida y nuestro apoyo para sostener tus procesos de transformaci&oacute;n.\";}', '0', '1', '2015-07-19 21:21:30');
INSERT INTO `textos` VALUES ('2', 'Retiros', 'a:1:{s:2:\"es\";s:7:\"Retiros\";}', 'a:1:{s:2:\"es\";s:643:\"Nuestros retiros buscan abrir el espacio en ti para que logres conectarte con tus elementos a trav&eacute;s de la naturaleza.&nbsp; Desconectate de la rutina en la ciudad y entra a un espacio de sanaci&oacute;n d&oacute;nde nutriremos y desintoxicaremos nuestro cuerpo a trav&eacute;s del Yoga, la Meditaci&oacute;n y una dieta vegetariana. Disfruta de los amaneceres, de la pr&aacute;ctica al aire libre y de la conexi&oacute;n con la naturaleza a trav&eacute;s de la respiraci&oacute;n.&nbsp; Noches de meditaci&oacute;n profunda y relajaci&oacute;n con gong para liberar la tensi&oacute;n de nuestro cuerpo y renovar nuestra energ&iacute;a.\";}', '0', '1', '2015-07-19 21:23:22');
INSERT INTO `textos` VALUES ('3', 'Fuera del Mat', 'a:1:{s:2:\"es\";s:14:\"FUERA DEL MAT \";}', 'a:1:{s:2:\"es\";s:81:\"Llevando y aplicando la experiencia de nuestra pr&aacute;ctica en la vida diaria.\";}', '0', '1', '2015-07-13 08:51:42');
INSERT INTO `textos` VALUES ('4', 'Terapias', 'a:1:{s:2:\"es\";s:8:\"Terapias\";}', 'a:1:{s:2:\"es\";s:288:\"<span class=\"cont_descripcion\">A trav&eacute;s del yoga, se crea regulares tiempos de espera para la relajaci&oacute;n y regeneraci&oacute;n profunda. Cuerpo, mente y alma a respirar. Disfrute de los peque&ntilde;os oasis de la vida cotidiana mediante una clase de yoga relajante. </span>\";}', '0', '1', '2015-06-18 00:07:36');
INSERT INTO `textos` VALUES ('5', 'Tienda', 'a:1:{s:2:\"es\";s:6:\"Tienda\";}', 'a:1:{s:2:\"es\";s:105:\"Tenemos un aplio cat&aacute;logo de productos para ti.<br />\r\nCon&oacute;celos a detalle y haz tu pedido.\";}', '0', '1', '2015-06-18 00:08:01');
INSERT INTO `textos` VALUES ('6', 'Yoga', 'a:1:{s:2:\"es\";s:4:\"YOGA\";}', 'a:1:{s:2:\"es\";s:1927:\"<div style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 12.8000001907349px; line-height: normal;\"><span style=\"color: rgb(102, 102, 102); font-family: Georgia, serif; font-size: 14px; line-height: 25.2000007629395px; text-align: center;\">El yoga es un sistema que se utiliza para equilibrar el cuerpo, la mente y el esp&iacute;ritu. Es una tecnolog&iacute;a de la conciencia, una ciencia antigua que ha evolucionado pero que guarda el objetivo de encontrar bienestar, salud, felicidad y crecimiento interior.&nbsp;</span></div>\r\n\r\n<div style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 12.8000001907349px; line-height: normal;\">\r\n<p style=\"border: 0px; font-family: Georgia, serif; font-size: 14px; margin: 0px; outline: 0px; padding: 6px 0px; vertical-align: baseline; color: rgb(102, 102, 102); line-height: 25.2000007629395px; text-align: center;\">A trav&eacute;s de la mente, &nbsp;generamos diferentes emociones y con la pr&aacute;ctica regular de yoga es que estimulados estados de calma donde hay m&aacute;s tolerancia con respecto a uno mismo, sus limitaciones, su cuerpo, y un trabajo interior hacia la sabidur&iacute;a, la felicidad, la espiritualidad.&nbsp;</p>\r\n\r\n<p style=\"border: 0px; font-family: Georgia, serif; font-size: 14px; margin: 0px; outline: 0px; padding: 6px 0px; vertical-align: baseline; color: rgb(102, 102, 102); line-height: 25.2000007629395px; text-align: center;\">La pr&aacute;ctica del yoga es apropiada para todos y es independiente de las creencias de cada cual. Nos ayuda a enfocarnos, a fortalecer la capacidad de disfrutar y la fuerza de voluntad, a regular el metabolismo, a aumentar la agilidad y la elasticidad, a desintoxicar el cuerpo, a revitalizar los &oacute;rganos, a sentirnos siempre j&oacute;venes. La salud est&aacute; en nuestras manos, as&iacute; como la felicidad, la alegr&iacute;a y el crecimiento espiritual.</p>\r\n</div>\r\n\";}', '0', '1', '2015-06-24 17:25:15');
INSERT INTO `textos` VALUES ('7', 'Link de interes', 'a:1:{s:2:\"es\";s:16:\"Link de Interés\";}', 'a:1:{s:2:\"es\";s:41:\"Descripci&oacute;n link de inter&eacute;s\";}', '1', '1', '2015-06-21 02:25:38');

-- ----------------------------
-- Table structure for traslados
-- ----------------------------
DROP TABLE IF EXISTS `traslados`;
CREATE TABLE `traslados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `presentacion` text NOT NULL,
  `item1` varchar(75) NOT NULL,
  `item2` varchar(75) NOT NULL,
  `item3` varchar(75) NOT NULL,
  `item4` varchar(75) NOT NULL,
  `descitem1` text NOT NULL,
  `descitem2` text NOT NULL,
  `descitem3` text NOT NULL,
  `descitem4` text NOT NULL,
  `promocion` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of traslados
-- ----------------------------
INSERT INTO `traslados` VALUES ('1', 'a:1:{s:2:\"es\";s:9:\"TRASLADOS\";}', 'imagenes/mensaje/banner_traslado.jpg', 'a:1:{s:2:\"es\";s:1075:\"<p>Nos interesa que seas un profesional con los mejores conocimientos tanto te&oacute;ricos como pr&aacute;cticos en un ambiente de camarader&iacute;a y trabajo en equipo. Queremos que la pases bien mientras te formas.</p>\r\n\r\n<p>Como sabemos que eres &uacute;nico te damos un servicio innovador y diferenciado:</p>\r\n\r\n<ul style=\"padding-left: 16px; margin:20px 0\">\r\n	<li><strong>ISPort &gt;&gt;</strong> Momentos para el deporte (Voley, fulbito y ping pong).</li>\r\n	<li><strong>ISP invita &gt;&gt;</strong> Momentos para divertirte y compartir con alumnos y personal docente.</li>\r\n	<li><strong>Cine Club ISP &gt;&gt;</strong> Proyecci&oacute;n de pel&iacute;culas y videos para entretenimiento y aprendizaje.</li>\r\n	<li><strong>ISuP&eacute;rate &gt;&gt;</strong> Charlas y talleres gratuitos para tu auto superaci&oacute;n y crecimiento personal.</li>\r\n</ul>\r\n\r\n<p>Por eso y muchas razones m&aacute;s, queremos invitarte al ISP para contarte cu&aacute;l es nuestra nueva visi&oacute;n de la educaci&oacute;n y mostrarte una propuesta educativa completamente diferente.</p>\r\n\";}', 'a:1:{s:2:\"es\";s:43:\"POR QUÉ TRASLADARME A ISP? 							        \";}', 'a:1:{s:2:\"es\";s:48:\"Qué requisitos necesito para trasladarme a ISP?\";}', 'a:1:{s:2:\"es\";s:44:\"Cómo hago para trasladarme? 							        \";}', 'a:1:{s:2:\"es\";s:42:\"Cuándo puedo trasladarme? 							        \";}', 'a:1:{s:2:\"es\";s:1367:\"<p>Te ofrecemos un proceso de traslado atractivo que te permite convalidar algunos cursos que ya hayas llevado en tu actual instituto.</p>\r\n\r\n<p>Contar&aacute;s con un plan de pagos de acuerdo a tus necesidades previa categorizaci&oacute;n.</p>\r\n\r\n<p>&iexcl;Recibir&aacute;s una educaci&oacute;n integral con visitas a importantes empresas, para aprender en la cancha!</p>\r\n\r\n<p>Si destacas en tus estudios y gracias a nuestra amplia red de alianzas estrat&eacute;gicas te garantizamos trabajo incluso antes de graduarte.</p>\r\n\r\n<p>A partir del segundo a&ntilde;o de estudios ingresar&aacute;s autom&aacute;ticamente a nuestra Bolsa de Empleos.</p>\r\n\r\n<p>Seguir&aacute;s cursos de tu especialidad desde los primeros ciclos.</p>\r\n\r\n<p>Tu educaci&oacute;n ser&aacute; 100% pr&aacute;ctica desde el primer d&iacute;a ya que contamos con:</p>\r\n\r\n<ul>\r\n	<li><strong>Set de televisi&oacute;n &gt;&gt;</strong> Estudio propio con c&aacute;maras y luces profesionales</li>\r\n	<li><strong>Switcher profesional &gt;&gt;</strong> Como si estuvieras en el mismo canal de televisi&oacute;n</li>\r\n	<li><strong>Set de fotograf&iacute;a &gt;&gt;</strong> Estudio propio con c&aacute;maras e implementos de &uacute;ltimo generaci&oacute;n</li>\r\n	<li><strong>Cabina de radio &gt;&gt;</strong> Consola de audio, micros profesionales y software de edici&oacute;n profesional</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:252:\"<p>En ISP buscamos la excelencia educativa, por tanto debes cumplir con:</p>\r\n\r\n<ul>\r\n	<li>Haber aprobado los cr&eacute;ditos de estudio.</li>\r\n	<li>No haber sido separado de alguna instituci&oacute;n educativa por motivos disciplinarios.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:636:\"<p>Es muy sencillo. S&oacute;lo debes seguir estos 4 pasos:</p>\r\n\r\n<ul>\r\n	<li>Ac&eacute;rcate a nuestras oficinas en calle Madre de Dios 255 &ndash; Entre la cuadra 4 y 5 de Av. Petit Thouars frente al Paseo de las Aguas.</li>\r\n	<li>Luego de una entrevista personal con la Direcci&oacute;n Acad&eacute;mica sabr&aacute;s si est&aacute;s admitido.</li>\r\n	<li>Llenas la ficha de inscripci&oacute;n.</li>\r\n	<li>Presentas tu certificado de estudios y buena conducta emitido por el instituto de procedencia</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<h3 style=\"text-align:center; font-size:20px;\">EN ISP NO TE COBRAMOS NING&Uacute;N COSTO POR TRASLADARTE</h3>\r\n\";}', 'a:1:{s:2:\"es\";s:170:\"<p>Ahora mismo, tienes plazo para iniciar tus estudios en nuestro siguiente ciclo acad&eacute;mico 2016-I</p>\r\n\r\n<p>&iexcl;&iexcl;Ven y s&eacute; parte del cambio!!</p>\r\n\";}', 'a:1:{s:2:\"es\";s:40:\"CARRERAS Y TALLERES DISPONIBLES 2016 - 1\";}');

-- ----------------------------
-- Table structure for traslado_pregunta
-- ----------------------------
DROP TABLE IF EXISTS `traslado_pregunta`;
CREATE TABLE `traslado_pregunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(50) DEFAULT NULL,
  `respuesta` text,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of traslado_pregunta
-- ----------------------------
INSERT INTO `traslado_pregunta` VALUES ('1', 'POR QUÉ TRASLADARME A ISP?', '<p>Te ofrecemos un proceso de traslado atractivo que te permite convalidar algunos cursos que ya hayas llevado en tu actual instituto.</p>\r\n\r\n<p>Contar&aacute;s con un plan de pagos de acuerdo a tus necesidades previa categorizaci&oacute;n.</p>\r\n\r\n<p>&iexcl;Recibir&aacute;s una educaci&oacute;n integral con visitas a importantes empresas, para aprender en la cancha!</p>\r\n\r\n<p>Si destacas en tus estudios y gracias a nuestra amplia red de alianzas estrat&eacute;gicas te garantizamos trabajo incluso antes de graduarte.</p>\r\n\r\n<p>A partir del segundo a&ntilde;o de estudios ingresar&aacute;s autom&aacute;ticamente a nuestra Bolsa de Empleos.</p>\r\n\r\n<p>Seguir&aacute;s cursos de tu especialidad desde los primeros ciclos.</p>\r\n\r\n<p>Tu educaci&oacute;n ser&aacute; 100% pr&aacute;ctica desde el primer d&iacute;a ya que contamos con:</p>\r\n\r\n<ul>\r\n	<li><strong>Set de televisi&oacute;n &gt;&gt;</strong> Estudio propio con c&aacute;maras y luces profesionales</li>\r\n	<li><strong>Switcher profesional &gt;&gt;</strong> Como si estuvieras en el mismo canal de televisi&oacute;n</li>\r\n	<li><strong>Set de fotograf&iacute;a &gt;&gt;</strong> Estudio propio con c&aacute;maras e implementos de &uacute;ltimo generaci&oacute;n</li>\r\n	<li><strong>Cabina de radio &gt;&gt;</strong> Consola de audio, micros profesionales y software de edici&oacute;n profesional</li>\r\n</ul>\r\n', null, '1', '2015-11-03 23:45:32');
INSERT INTO `traslado_pregunta` VALUES ('2', 'Qué requisitos necesito para trasladarme a ISP?', '<p>En ISP buscamos la excelencia educativa, por tanto debes cumplir con:</p>\r\n\r\n<ul>\r\n	<li>Haber aprobado los cr&eacute;ditos de estudio.</li>\r\n	<li>No haber sido separado de alguna instituci&oacute;n educativa por motivos disciplinarios.</li>\r\n</ul>\r\n', null, '1', '2015-11-03 11:52:00');
INSERT INTO `traslado_pregunta` VALUES ('3', 'Cómo hago para trasladarme?', '<p>Es muy sencillo. S&oacute;lo debes seguir estos 4 pasos:</p>\r\n\r\n<ul>\r\n	<li>Ac&eacute;rcate a nuestras oficinas en calle Madre de Dios 255 &ndash; Entre la cuadra 4 y 5 de Av. Petit Thouars frente al Paseo de las Aguas.</li>\r\n	<li>Luego de una entrevista personal con la Direcci&oacute;n Acad&eacute;mica sabr&aacute;s si est&aacute;s admitido.</li>\r\n	<li>Llenas la ficha de inscripci&oacute;n.</li>\r\n	<li>Presentas tu certificado de estudios y buena conducta emitido por el instituto de procedencia</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<h3 style=\"text-align:center; font-size:20px;\">EN ISP NO TE COBRAMOS NING&Uacute;N COSTO POR TRASLADARTE</h3>\r\n', null, '1', '2015-11-03 11:52:40');
INSERT INTO `traslado_pregunta` VALUES ('4', 'Cuándo puedo trasladarme?', '<p>Ahora mismo, tienes plazo para iniciar tus estudios en nuestro siguiente ciclo acad&eacute;mico 2016-I</p>\r\n\r\n<p>&iexcl;&iexcl;Ven y s&eacute; parte del cambio!!</p>', null, '1', '2015-11-03 11:53:13');

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

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 0x7F000001, 'pedroclm', '$2y$08$RDkGGRyQX/8LZlHJlCMcH.SpItZwHvrAhLZEkNwfPsJteAbEkZZZu', 'NULL', 'info@webtilia.com', '', '', '1402679493', null, '1268889823', '1459094860', '1', 'Pedro', 'Calderon', 'WJHARIL', '940147037', 'imagenes/usuarios/wjharil.png');
INSERT INTO `users` VALUES ('2', 0x3132372E302E302E31, 'cumbre', '$2y$08$xLjUc5GGv0qvypmFlMrXjOZVaLXGiAEGvP7dJoUHP7bsoeCF8/iJ6', null, 'usuario@isp.com', null, null, null, null, '1402679836', '1540479991', '1', 'Admin ', 'CUMBRE', 'ADMIN', '99999', 'imagenes/usuarios/logo.jpg');
INSERT INTO `users` VALUES ('3', 0x3139302E3233342E3130352E3133, 'jallpas', '$2y$08$QdYMJ2UeSjU41K6MowdnyOv0Jva1tjxQkeJU3JDkKYPEd5Z9LvKcC', null, 'berzavlu@gmail.com', null, null, null, null, '1436487801', '1436574605', '1', 'Luis', 'Eduardo', 'wjharil', '-----', null);

-- ----------------------------
-- Table structure for users_groups
-- ----------------------------
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users_groups
-- ----------------------------
INSERT INTO `users_groups` VALUES ('2', '1', '1');
INSERT INTO `users_groups` VALUES ('3', '2', '2');
INSERT INTO `users_groups` VALUES ('4', '3', '2');
