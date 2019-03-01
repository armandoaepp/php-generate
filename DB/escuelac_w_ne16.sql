/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : escuelac_w_ne16

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-02-28 18:34:39
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
INSERT INTO `admision` VALUES ('1', 'a:1:{s:2:\"es\";s:18:\"Admisión 2019 - I\";}', 'imagenes/resena/admison-18-marzo-2019.jpg', 'a:1:{s:2:\"es\";s:400:\"<ul style=\"list-style-type:circle;\">\r\n	<li>Certificado de secundaria visado por la GRED.</li>\r\n	<li>Partida de nacimiento ACTUAL.&nbsp;</li>\r\n	<li>Copia del documento de identidad.&nbsp;</li>\r\n	<li>Copia de recibo agua y luz.&nbsp;</li>\r\n	<li>Dos fotos tama&ntilde;o carnet a color.&nbsp;</li>\r\n	<li>Carnet de salud (vigente).&nbsp;</li>\r\n	<li>P&oacute;liza de seguro contra accidentes.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:469:\"<ul class=\"list_ul_cer text-left\" style=\"list-style-type:square;\">\r\n	<li><strong>LUNEA A VIERNES</strong></li>\r\n	<li><strong>Turno ma&ntilde;ana: </strong>7.30 am - 2.00 pm</li>\r\n	<li><strong>Turno noche: </strong>6:00 - 10:30 pm</li>\r\n	<li><strong style=\"line-height: 1.6em;\">Duraci&oacute;n</strong><span style=\"line-height: 1.6em;\">: <strong>3 a&ntilde;os</strong> / VI ciclos (18 Semanas x ciclo)</span></li>\r\n	<li><strong>INICIO</strong>: 18 de marzo</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:305:\"<ul class=\"list_ul_cer text-left\">\r\n	<li><strong>MATR&Iacute;CULA</strong>: S/. 310.00</li>\r\n	<li><strong>UNIFORME</strong>: S/. 200.00 (pantal&oacute;n + polo + garibaldi + camisaco + mandil)</li>\r\n	<li><strong>MENSUALIDAD: </strong><br />\r\n	S/.650.00 (4 cuotas - Incluye insumos e idiomas)</li>\r\n</ul>\r\n\";}', null);

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
INSERT INTO `carrera` VALUES ('1', 'a:1:{s:2:\"es\";s:12:\"Gastronomía\";}', 'a:1:{s:2:\"es\";s:727:\"<p>Estudiar Gastronom&iacute;a en Chiclayo es un privilegio porque aqu&iacute; al parecer,&nbsp;se inici&oacute; la Historia del mundialmente reconocido Sabor Peruano.&nbsp;<br />\r\nEn Huaca Ventarr&oacute;n con m&aacute;s de 4,000 a&ntilde;os de antig&uuml;edad, se encontraron&nbsp;los primeros murales policromos de Am&eacute;rica.<br />\r\nEl Se&ntilde;or de Sip&aacute;n&nbsp;probablemente degustaba un &ldquo;chinguirito&rdquo; o pescado seco salado.<br />\r\nEl &ldquo;loche&rdquo;, &uacute;nico zapallo milenario da gusto a nuestras preparaciones&nbsp;desde tiempos inmemoriales.<br />\r\nDelicias a base de carnes de corral como&nbsp;el pato o cabrito seguir&aacute;n cautivando paladares hasta el final de los tiempos.</p>\r\n\";}', 'imagenes/carreras/head-carreras_2.jpg', 'imagenes/carreras/carrera-gastronomia.png', 'a:1:{s:2:\"es\";s:653:\"<h3>&iquest;QU&Eacute; ES GASTRONOM&Iacute;A?</h3>\r\n<br />\r\n<span style=\"font-size: 13px; line-height: 1.6em;\">La Gastronom&iacute;a es una disciplina que abarca todo lo relacionado al placer de la alimentaci&oacute;n humana. Las preparaciones con sus historias y tradiciones, los insumos e ingredientes, el servicio en mesa, las bebidas, los vinos, el desarrollo y manejo de negocios como restaurantes, cafeter&iacute;as, catering de eventos y mucho m&aacute;s.&nbsp;</span><em style=\"font-size: 13px; line-height: 1.6em;\"><span class=\"text-danger\">Gastronom&iacute;a no s&oacute;lo es cocinar o comer rico, va mucho m&aacute;s all&aacute;.</span></em>\";}', 'a:1:{s:2:\"es\";s:578:\"<h3>&iquest;POR QU&Eacute; ESTUDIAR GASTRONOM&Iacute;A?<br />\r\n<br />\r\n<span style=\"line-height: 1.6em; font-size: 13px;\">El mundo ha evolucionado en el aspecto gastron&oacute;mico, convirtiendo el alto nivel en servicio, en un est&aacute;ndar internacional. El turismo cada vez crece m&aacute;s, los paladares se sofistican cada d&iacute;a. Es necesario que el Per&uacute; profesionalice su afamada cocina. Un cocinero puede llegar a ser Chef, viajar por todo el mundo sirviendo con su arte y logrando satisfacciones tanto personales como de sus comensales.&nbsp;</span></h3>\r\n\";}', 'a:1:{s:2:\"es\";s:638:\"<h3>&iquest;D&Oacute;NDE PUEDES TRABAJAR?</h3>\r\n<br />\r\n<span style=\"font-size: 13px; line-height: 1.6em;\">El campo laboral es muy amplio, estos son algunos de los trabajos en donde se pueden desempe&ntilde;ar nuestros egresados:</span>\r\n\r\n<div class=\"text-block text-justify\">\r\n<ul class=\"list_ul\">\r\n	<li>Chef Ejecutivo de hoteles o restaurantes.</li>\r\n	<li>Gerente de Alimentos y Bebidas.</li>\r\n	<li><span style=\"line-height: 1.6em;\">Asesor o L&iacute;der de Empresas Gastron&oacute;micas.</span></li>\r\n	<li>Banquetes y eventos.&nbsp;</li>\r\n	<li>Chef ejecutivo, particular, asesor o instructor en establecimientos.</li>\r\n</ul>\r\n</div>\r\n\";}', 'a:1:{s:2:\"es\";s:174:\"M&oacute;dulo 1: Gastronom&iacute;a Regional<br />\r\nM&oacute;dulo 2: Gastronom&iacute;a Peruana<br />\r\nM&oacute;dulo 3: Gastronom&iacute;a Internacional<br />\r\n<br />\r\n&nbsp;\";}', 'a:1:{s:2:\"es\";s:317:\"<strong>CARRERA PROFESIONAL DE GASTRONOM&Iacute;A Y ARTE CULINARIO</strong><br />\r\nse entrega T&iacute;tulo a Nombre de la Naci&oacute;n<br />\r\n(R.M.N&deg; 0345 - 2008 - ED)<br />\r\n<strong>Duraci&oacute;n de la carrera: </strong>3 a&ntilde;os / VI Ciclos<br />\r\n(cada ciclo dura 4 meses)<br />\r\n<br />\r\n<br />\r\n&nbsp;\";}', 'a:1:{s:2:\"es\";s:328:\"<ul>\r\n	<li>Matr&iacute;cula: <strong>S/ 310.00</strong></li>\r\n	<li>Uniforme completo: <strong>S/ 200.00 </strong>(pantal&oacute;n + polo + garibaldi + camisaco + mandil)</li>\r\n	<li>Total por ciclo: <strong>S/ 2600.00</strong></li>\r\n	<li>Total por ciclo (pago al contado): <strong>S/ 2470.00 </strong>(5% descuento)</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:179:\"<strong>19&deg; </strong>Programa de Asesor&iacute;a de Proyectos para optar <strong>T&iacute;tulo Profesional T&eacute;cnico </strong>en GAC (Gastronom&iacute;a y Arte Culinario)\";}', 'a:1:{s:2:\"es\";s:10:\"16 SEMANAS\";}', 'a:1:{s:2:\"es\";s:24:\"INICIO: 19 DE ENERO 2019\";}', 'a:1:{s:2:\"es\";s:21:\"Sábados 9.00 a 13:00\";}', 'a:1:{s:2:\"es\";s:27:\"Av. Eufemio Lora y Lora 625\";}', 'a:1:{s:2:\"es\";s:12:\"S/. 4,630.00\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:12:\"(074) 228790\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:58:\"Dirigido a egresados con estudios conclu&iacute;dos.&nbsp;\";}', 'a:1:{s:2:\"es\";s:387:\"<ol>\r\n	<li>Seguridad e higiene alimentaria.</li>\r\n	<li>BPM.</li>\r\n	<li>&Aacute;rea de producci&oacute;n en cocina.</li>\r\n	<li>Marketing aplicado.</li>\r\n	<li>Etiqueta y protocolo.</li>\r\n	<li>T&eacute;cnicas b&aacute;sicas de cocina.</li>\r\n	<li>Repertorio de cocina regional y peruana.</li>\r\n	<li>Cata de vinos y maridaje.</li>\r\n	<li>Asesor&iacute;a de proyectos productivos.</li>\r\n</ol>\r\n\";}', 'gastronomia', '0', '1', '2019-01-11 11:43:08');

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_bin DEFAULT '',
  `imagen` varchar(255) COLLATE utf8mb4_bin DEFAULT '',
  `publicar` char(1) COLLATE utf8mb4_bin DEFAULT 'S',
  `estado` smallint(5) unsigned NOT NULL DEFAULT '1',
  `created_up` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idcategoria`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES ('1', 'Categoría 123', 'categora-123', '', 'S', '1', '2018-08-08 17:08:01');
INSERT INTO `categoria` VALUES ('2', 'Categoría 22', 'categoria-22', '', 'S', '1', '2018-08-08 17:08:09');
INSERT INTO `categoria` VALUES ('3', 'Categoría 3 23', 'categoria-3-23', '', 'N', '1', '2018-08-08 17:08:14');
INSERT INTO `categoria` VALUES ('4', 'fdgdfg', 'fdgdfg', '', 'S', '1', '2018-12-19 11:12:04');

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
INSERT INTO `chef` VALUES ('10', 'a:1:{s:2:\"es\";s:14:\"BORIS STAKEEFF\";}', 'a:1:{s:2:\"es\";s:4:\"Chef\";}', 'a:1:{s:2:\"es\";s:46:\"ESPECIALISTA EN COCINA PERUANA E INTERNACIONAL\";}', 'a:1:{s:2:\"es\";s:362:\"<ul>\r\n	<li>Chef de partie del Ristorante Quadri, Venecia, Italia.</li>\r\n	<li>Master Cucina en ICIF, Italia.</li>\r\n	<li>Chef para el II Foro Mundial de Turismo Gastron&oacute;mico.</li>\r\n	<li>Capacitador para el MINCETUR &ndash; CENFOTUR.</li>\r\n	<li>Chef asesor en Supermercados Peruanos.</li>\r\n	<li>Coaching y trabajo en equipo - Pronabec (MINEDU).</li>\r\n</ul>\r\n\";}', 'imagenes/chef/3.jpg', '10', '0', '2018-12-24 03:14:39');
INSERT INTO `chef` VALUES ('11', 'a:1:{s:2:\"es\";s:16:\"ANDRÉ KUNIYOSHI\";}', 'a:1:{s:2:\"es\";s:4:\"Chef\";}', 'a:1:{s:2:\"es\";s:30:\"ESPECIALISTA EN COCINA PERUANA\";}', 'a:1:{s:2:\"es\";s:301:\"<ul>\r\n	<li>Chef de partie en restaurant Andre Chatelard, Francia.</li>\r\n	<li>Chef Ejecutivo de la cadena Casa Andina Hotel.</li>\r\n	<li>Master Cuisine en Escuela de Gastronom&iacute;a y Arte Culinario Cumbre.</li>\r\n	<li>Asesor gastron&oacute;mico en diversos restaurantes a nivel nacional</li>\r\n</ul>\r\n\";}', 'imagenes/chef/4.jpg', '11', '0', '2018-12-24 03:14:48');
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
-- Table structure for noticia
-- ----------------------------
DROP TABLE IF EXISTS `noticia`;
CREATE TABLE `noticia` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `descripcion` longtext CHARACTER SET latin1,
  `url` varchar(200) CHARACTER SET latin1 NOT NULL,
  `glosa` text,
  `publicar` char(1) CHARACTER SET latin1 NOT NULL DEFAULT 'S',
  `estado` int(1) NOT NULL DEFAULT '1',
  `created_up` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of noticia
-- ----------------------------
INSERT INTO `noticia` VALUES ('1', 'Conferencias Magistrales', '', 'conferencias-magistrales', null, 'S', '1', '2019-02-28 12:07:50');
INSERT INTO `noticia` VALUES ('2', 'Clases Magistrales', '', 'clases-magistrales', null, 'S', '1', '2019-02-28 12:07:50');
INSERT INTO `noticia` VALUES ('3', 'Expo Cumbre', '', 'expo-cumbre', null, 'S', '1', '2019-02-28 12:07:50');
INSERT INTO `noticia` VALUES ('4', 'Fiesta de Gala', '', 'fiesta-de-gala', null, 'S', '1', '2019-02-28 12:07:50');
INSERT INTO `noticia` VALUES ('5', 'Imposición de camisacos I Ciclo', 'Nuestros estudiantes de primer ciclo recibieron su primera chaqueta, s&amp;amp;iacute;mbolo de integridad y respeto hacia la pronta profesi&amp;amp;oacute;n que los acompa&amp;amp;ntilde;ar&amp;amp;aacute; siempre.', 'imposicion-de-camisacos-i-ciclo', null, 'S', '1', '2019-02-28 12:07:50');
INSERT INTO `noticia` VALUES ('6', 'Activación Olmos', 'Activaci&amp;amp;oacute;n en el Centro de esparcimiento &amp;lt;strong&amp;gt;&amp;amp;ldquo;Los Algarrobos&amp;amp;rdquo;&amp;lt;/strong&amp;gt; &amp;amp;ndash; Olmos a las 9:00 am, el d&amp;amp;iacute;a 22 de Septiembre del presente. El motivo de nuestra presencia fue participar de la feria vocacional exponiendo nuestra carrera profesional de gastronom&amp;amp;iacute;a con la que cuenta la instituci&amp;amp;oacute;n.&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\n&amp;amp;nbsp;', 'activacion-olmos', null, 'S', '1', '2019-02-28 12:07:50');
INSERT INTO `noticia` VALUES ('7', 'Miss Cumbre', 'La Escuela Peruana de Gastronom&amp;amp;iacute;a y Arte Culinario &amp;amp;ldquo;CUMBRE&amp;amp;rdquo;, organiza en el marco de su XI Aniversario Institucional &amp;lt;strong&amp;gt;&amp;amp;ldquo;MISS CUMBRE 2017&amp;amp;rdquo;, &amp;lt;/strong&amp;gt;en la que se busca elegir a la dama que habr&amp;amp;aacute; de representar a la singular belleza gastron&amp;amp;oacute;mica, as&amp;amp;iacute; como tambi&amp;amp;eacute;n sus principios y virtudes.', 'miss-cumbre', null, 'S', '1', '2019-02-28 12:07:50');
INSERT INTO `noticia` VALUES ('8', 'Cumbrematch', 'La Escuela Peruana de Gastronom&amp;amp;iacute;a y Arte Culinario &amp;amp;ldquo;CUMBRE&amp;amp;rdquo;, organiza en el marco de su XI Aniversario Institucional el &amp;lt;strong&amp;gt;CUMBREMATCH 2017, Copa &amp;amp;ldquo;INGENIA&amp;amp;rdquo;&amp;lt;/strong&amp;gt; con la participaci&amp;amp;oacute;n de todos los estudiantes y miembros de la instituci&amp;amp;oacute;n con el prop&amp;amp;oacute;sito de fomentar la pr&amp;amp;aacute;ctica del deporte, la sana competencia; as&amp;amp;iacute; como, estrechar los lazos de confraternidad que permitan un desarrollo integral del estudiante y la identificaci&amp;amp;oacute;n con su Escuela.', 'cumbrematch', null, 'S', '1', '2019-02-28 12:07:50');
INSERT INTO `noticia` VALUES ('9', 'Seminario Magistral - Cumbre 2017', '', 'seminario-magistral-cumbre-2017', null, 'S', '1', '2019-02-28 12:07:50');
INSERT INTO `noticia` VALUES ('10', 'Conferencia de Prensa', '', 'conferencia-de-prensa', null, 'S', '1', '2019-02-28 12:07:50');
INSERT INTO `noticia` VALUES ('11', 'CUMBRE MATCH', '', 'cumbre-match', null, 'S', '1', '2019-02-28 12:07:50');
INSERT INTO `noticia` VALUES ('12', 'EXPOCUMBRE 2017', '', 'expocumbre-2017', null, 'S', '1', '2019-02-28 12:07:50');
INSERT INTO `noticia` VALUES ('13', 'Fiesta de Gala 2017', '', 'fiesta-de-gala-2017', null, 'S', '1', '2019-02-28 12:07:50');
INSERT INTO `noticia` VALUES ('14', 'Guerra de cocinas', '', 'guerra-de-cocinas', null, 'S', '1', '2019-02-28 12:07:50');
INSERT INTO `noticia` VALUES ('15', 'Miss Cumbre 2017', '', 'miss-cumbre-2017', null, 'S', '1', '2019-02-28 12:07:51');
INSERT INTO `noticia` VALUES ('16', 'I Programa de Actualización Docente y Fortalecimiento de Competencias Pedagógicas', '', 'i-programa-de-actualizacion-docente-y-fortalecimiento-de-competencias-pedagogicas', null, 'S', '1', '2019-02-28 12:07:51');
INSERT INTO `noticia` VALUES ('17', 'Campaña de Protección ambiental', '', 'campanna-de-proteccion-ambiental', null, 'S', '1', '2019-02-28 12:07:51');
INSERT INTO `noticia` VALUES ('18', 'CHARLA MAGISTRAL', '', 'charla-magistral', null, 'S', '1', '2019-02-28 12:07:51');
INSERT INTO `noticia` VALUES ('19', 'CHARLA MAGISTRAL 2', '', 'charla-magistral-2', null, 'S', '1', '2019-02-28 12:07:51');
INSERT INTO `noticia` VALUES ('20', 'masmmdmasmdmas', '&lt;p&gt;asdfasdf&lt;/p&gt;', 'masmmdmasmdmas', '&lt;p&gt;asdfasdf&lt;/p&gt;', 'S', '1', '2019-02-28 18:02:07');
INSERT INTO `noticia` VALUES ('21', 'masmmdmasmdmas', '&lt;p&gt;asdfasdf&lt;/p&gt;', 'masmmdmasmdmas', '&lt;p&gt;asdfasdf&lt;/p&gt;', 'S', '1', '2019-02-28 18:02:39');
INSERT INTO `noticia` VALUES ('22', 'pruenbas', '&lt;p&gt;asdfasdfasdf&lt;/p&gt;', 'pruenbas', '&lt;p&gt;asdfasdfasdf&lt;/p&gt;', 'S', '1', '2019-02-28 18:02:42');

-- ----------------------------
-- Table structure for noticia_img
-- ----------------------------
DROP TABLE IF EXISTS `noticia_img`;
CREATE TABLE `noticia_img` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `noticia_id` int(11) unsigned NOT NULL,
  `imagen` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `item` int(11) unsigned DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  `created_up` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of noticia_img
-- ----------------------------
INSERT INTO `noticia_img` VALUES ('3', '1', 'imagenes/eventos/03-jpg-1468583251.jpg', '3', '1', null);
INSERT INTO `noticia_img` VALUES ('4', '1', 'imagenes/eventos/04-jpg-1468583252.jpg', '4', '1', null);
INSERT INTO `noticia_img` VALUES ('5', '1', 'imagenes/eventos/05-jpg-1468583252.jpg', '5', '1', null);
INSERT INTO `noticia_img` VALUES ('6', '1', 'imagenes/eventos/05-1-jpg-1468583253.jpg', '6', '1', null);
INSERT INTO `noticia_img` VALUES ('7', '1', 'imagenes/eventos/05-2-jpg-1468583253.jpg', '7', '1', null);
INSERT INTO `noticia_img` VALUES ('8', '1', 'imagenes/eventos/06-jpg-1468583254.jpg', '8', '1', null);
INSERT INTO `noticia_img` VALUES ('9', '1', 'imagenes/eventos/07-jpg-1468583254.jpg', '9', '1', null);
INSERT INTO `noticia_img` VALUES ('10', '1', 'imagenes/eventos/08-jpg-1468583255.jpg', '10', '1', null);
INSERT INTO `noticia_img` VALUES ('13', '2', 'imagenes/eventos/03-jpg-1468584349.jpg', '13', '1', null);
INSERT INTO `noticia_img` VALUES ('14', '2', 'imagenes/eventos/05-jpg-1468584357.jpg', '14', '1', null);
INSERT INTO `noticia_img` VALUES ('15', '2', 'imagenes/eventos/05-1-jpg-1468584367.jpg', '15', '1', null);
INSERT INTO `noticia_img` VALUES ('16', '2', 'imagenes/eventos/06-jpg-1468584390.jpg', '16', '1', null);
INSERT INTO `noticia_img` VALUES ('18', '2', 'imagenes/eventos/09-jpg-1468584408.jpg', '18', '1', null);
INSERT INTO `noticia_img` VALUES ('19', '2', 'imagenes/eventos/01-jpg-1468595077.jpg', '19', '1', null);
INSERT INTO `noticia_img` VALUES ('20', '2', 'imagenes/eventos/02-jpg-1468595096.jpg', '20', '1', null);
INSERT INTO `noticia_img` VALUES ('21', '2', 'imagenes/eventos/03-jpg-1468595218.jpg', '21', '1', null);
INSERT INTO `noticia_img` VALUES ('22', '2', 'imagenes/eventos/04-jpg-1468595231.jpg', '22', '1', null);
INSERT INTO `noticia_img` VALUES ('23', '2', 'imagenes/eventos/05-jpg-1468595476.jpg', '23', '1', null);
INSERT INTO `noticia_img` VALUES ('24', '2', 'imagenes/eventos/06-jpg-1468595590.jpg', '24', '1', null);
INSERT INTO `noticia_img` VALUES ('25', '3', 'imagenes/eventos/01-jpg-1468595836.jpg', '25', '1', null);
INSERT INTO `noticia_img` VALUES ('26', '3', 'imagenes/eventos/02-jpg-1468595985.jpg', '26', '1', null);
INSERT INTO `noticia_img` VALUES ('27', '3', 'imagenes/eventos/03-jpg-1468596005.jpg', '27', '1', null);
INSERT INTO `noticia_img` VALUES ('28', '3', 'imagenes/eventos/04-jpg-1468596090.jpg', '28', '1', null);
INSERT INTO `noticia_img` VALUES ('29', '3', 'imagenes/eventos/06-jpg-1468596175.jpg', '29', '1', null);
INSERT INTO `noticia_img` VALUES ('30', '3', 'imagenes/eventos/05-jpg-1468596190.jpg', '30', '1', null);
INSERT INTO `noticia_img` VALUES ('31', '3', 'imagenes/eventos/02-jpg-1468596848.jpg', '31', '1', null);
INSERT INTO `noticia_img` VALUES ('32', '3', 'imagenes/eventos/05-jpg-1468597176.jpg', '32', '1', null);
INSERT INTO `noticia_img` VALUES ('33', '3', 'imagenes/eventos/06-jpg-1468597347.jpg', '33', '1', null);
INSERT INTO `noticia_img` VALUES ('34', '3', 'imagenes/eventos/03-jpg-1468597366.jpg', '34', '1', null);
INSERT INTO `noticia_img` VALUES ('35', '4', 'imagenes/eventos/01-jpg-1468599126.jpg', '35', '1', null);
INSERT INTO `noticia_img` VALUES ('36', '4', 'imagenes/eventos/02-jpg-1468599136.jpg', '36', '1', null);
INSERT INTO `noticia_img` VALUES ('37', '4', 'imagenes/eventos/03-jpg-1468599143.jpg', '37', '1', null);
INSERT INTO `noticia_img` VALUES ('38', '4', 'imagenes/eventos/04-jpg-1468599148.jpg', '38', '1', null);
INSERT INTO `noticia_img` VALUES ('39', '4', 'imagenes/eventos/05-jpg-1468599155.jpg', '39', '1', null);
INSERT INTO `noticia_img` VALUES ('40', '4', 'imagenes/eventos/06-jpg-1468599160.jpg', '40', '1', null);
INSERT INTO `noticia_img` VALUES ('41', '4', 'imagenes/eventos/07-jpg-1468599165.jpg', '41', '1', null);
INSERT INTO `noticia_img` VALUES ('42', '4', 'imagenes/eventos/08-jpg-1468599168.jpg', '42', '1', null);
INSERT INTO `noticia_img` VALUES ('43', '4', 'imagenes/eventos/09-jpg-1468599174.jpg', '43', '1', null);
INSERT INTO `noticia_img` VALUES ('44', '5', 'imagenes/eventos/camisacos-oct-2017-1.jpg', '44', '1', null);
INSERT INTO `noticia_img` VALUES ('45', '5', 'imagenes/eventos/camisacos-oct-2017-2.jpg', '45', '1', null);
INSERT INTO `noticia_img` VALUES ('46', '6', 'imagenes/eventos/activ-olmos-oct-2017-1.jpg', '46', '1', null);
INSERT INTO `noticia_img` VALUES ('47', '6', 'imagenes/eventos/activ-olmos-oct-2017-2.jpg', '47', '1', null);
INSERT INTO `noticia_img` VALUES ('48', '6', 'imagenes/eventos/activ-olmos-oct-2017-3.jpg', '48', '1', null);
INSERT INTO `noticia_img` VALUES ('49', '7', 'imagenes/eventos/mis-cumbre-oct-2017.jpg', '49', '1', null);
INSERT INTO `noticia_img` VALUES ('50', '8', 'imagenes/eventos/expo-cumbre-oct-2017.jpg', '50', '1', null);
INSERT INTO `noticia_img` VALUES ('51', '9', 'imagenes/eventos/seminarios-magistrales-17/cha1.jpg', '1', '1', null);
INSERT INTO `noticia_img` VALUES ('52', '9', 'imagenes/eventos/seminarios-magistrales-17/cha2.jpg', '2', '1', null);
INSERT INTO `noticia_img` VALUES ('53', '9', 'imagenes/eventos/seminarios-magistrales-17/cha3.jpg', '3', '1', null);
INSERT INTO `noticia_img` VALUES ('54', '9', 'imagenes/eventos/seminarios-magistrales-17/cha4.jpg', '4', '1', null);
INSERT INTO `noticia_img` VALUES ('55', '9', 'imagenes/eventos/seminarios-magistrales-17/cha5.jpg', '5', '1', null);
INSERT INTO `noticia_img` VALUES ('56', '10', 'imagenes/eventos/conf-prensa-nov17/con-prensa-1.jpg', '1', '1', null);
INSERT INTO `noticia_img` VALUES ('57', '10', 'imagenes/eventos/conf-prensa-nov17/con-prensa-2.jpg', '2', '1', null);
INSERT INTO `noticia_img` VALUES ('58', '10', 'imagenes/eventos/conf-prensa-nov17/con-prensa-3.jpg', '3', '1', null);
INSERT INTO `noticia_img` VALUES ('59', '10', 'imagenes/eventos/conf-prensa-nov17/con-prensa-4.jpg', '4', '1', null);
INSERT INTO `noticia_img` VALUES ('60', '11', 'imagenes/eventos/cumbrematch-nov17/cumbre-match-1.jpg', '1', '1', null);
INSERT INTO `noticia_img` VALUES ('61', '11', 'imagenes/eventos/cumbrematch-nov17/cumbre-match-2.jpg', '2', '1', null);
INSERT INTO `noticia_img` VALUES ('62', '11', 'imagenes/eventos/cumbrematch-nov17/cumbre-match-3.jpg', '3', '1', null);
INSERT INTO `noticia_img` VALUES ('70', '12', 'imagenes/eventos/expocumbre-2017/expocumbre-1.jpg', '1', '1', null);
INSERT INTO `noticia_img` VALUES ('71', '12', 'imagenes/eventos/expocumbre-2017/expocumbre-2.jpg', '2', '1', null);
INSERT INTO `noticia_img` VALUES ('72', '12', 'imagenes/eventos/expocumbre-2017/expocumbre-3.jpg', '3', '1', null);
INSERT INTO `noticia_img` VALUES ('73', '12', 'imagenes/eventos/expocumbre-2017/expocumbre-4.jpg', '4', '1', null);
INSERT INTO `noticia_img` VALUES ('74', '12', 'imagenes/eventos/expocumbre-2017/expocumbre-5.jpg', '5', '1', null);
INSERT INTO `noticia_img` VALUES ('75', '12', 'imagenes/eventos/expocumbre-2017/expocumbre-6.jpg', '6', '1', null);
INSERT INTO `noticia_img` VALUES ('76', '13', 'imagenes/eventos/fiesta-gala-2017/1.jpg', '1', '1', null);
INSERT INTO `noticia_img` VALUES ('77', '13', 'imagenes/eventos/fiesta-gala-2017/2.jpg', '2', '1', null);
INSERT INTO `noticia_img` VALUES ('78', '13', 'imagenes/eventos/fiesta-gala-2017/3.jpg', '3', '1', null);
INSERT INTO `noticia_img` VALUES ('79', '13', 'imagenes/eventos/fiesta-gala-2017/4.jpg', '4', '1', null);
INSERT INTO `noticia_img` VALUES ('80', '13', 'imagenes/eventos/fiesta-gala-2017/5.jpg', '5', '1', null);
INSERT INTO `noticia_img` VALUES ('81', '14', 'imagenes/eventos/guerra-de-cocinas/1.jpg', '1', '1', null);
INSERT INTO `noticia_img` VALUES ('82', '14', 'imagenes/eventos/guerra-de-cocinas/2.jpg', '2', '1', null);
INSERT INTO `noticia_img` VALUES ('83', '14', 'imagenes/eventos/guerra-de-cocinas/3.jpg', '3', '1', null);
INSERT INTO `noticia_img` VALUES ('84', '14', 'imagenes/eventos/guerra-de-cocinas/4.jpg', '4', '1', null);
INSERT INTO `noticia_img` VALUES ('85', '14', 'imagenes/eventos/guerra-de-cocinas/5.jpg', '5', '1', null);
INSERT INTO `noticia_img` VALUES ('86', '15', 'imagenes/eventos/miss-cumbre-17/1.jpg', '1', '1', null);
INSERT INTO `noticia_img` VALUES ('87', '15', 'imagenes/eventos/miss-cumbre-17/2.jpg', '2', '1', null);
INSERT INTO `noticia_img` VALUES ('88', '15', 'imagenes/eventos/miss-cumbre-17/3.jpg', '3', '1', null);
INSERT INTO `noticia_img` VALUES ('89', '15', 'imagenes/eventos/miss-cumbre-17/4.jpg', '4', '1', null);
INSERT INTO `noticia_img` VALUES ('90', '15', 'imagenes/eventos/miss-cumbre-17/5.jpg', '5', '1', null);
INSERT INTO `noticia_img` VALUES ('91', '17', 'imagenes/eventos/web-01-1-jpg-1545418300.jpg', '51', '1', null);
INSERT INTO `noticia_img` VALUES ('92', '17', 'imagenes/eventos/web-01-jpg-1545418301.jpg', '52', '1', null);
INSERT INTO `noticia_img` VALUES ('93', '17', 'imagenes/eventos/willay-01-jpg-1545418304.jpg', '53', '1', null);
INSERT INTO `noticia_img` VALUES ('94', '21', 'images/noticia/201902281802391502862122.jpg', '1', '1', '2019-02-28 18:02:39');
INSERT INTO `noticia_img` VALUES ('95', '21', 'images/noticia/20190228180239877690824.jpg', '2', '1', '2019-02-28 18:02:39');
INSERT INTO `noticia_img` VALUES ('96', '22', 'images/noticia/201902281802427023589.jpg', '1', '1', '2019-02-28 18:02:42');
INSERT INTO `noticia_img` VALUES ('97', '22', 'images/noticia/20190228180242303864690.jpg', '2', '1', '2019-02-28 18:02:42');

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
) ENGINE=InnoDB AUTO_INCREMENT=135 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of red
-- ----------------------------
INSERT INTO `red` VALUES ('134', 'a:1:{s:2:\"es\";s:13:\"Restaurantes \";}', 'a:1:{s:2:\"es\";s:20:\"El Sabor de la Pedro\";}', 'a:1:{s:2:\"es\";s:10:\"Prácticas\";}', 'a:1:{s:2:\"es\";s:2:\"02\";}', 'a:1:{s:2:\"es\";s:227:\"<ul>\r\n	<li><strong>Aptitudes:</strong> Comprometido, honesto, proactivo e Innovador.</li>\r\n	<li>Tiempo completo</li>\r\n	<li><strong>Direcci&oacute;n: </strong>Juan XXIII N&deg; 370 - Lambayeque ( frente a la UNPRG)</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:199:\"<ul>\r\n	<li>Platos criollos, platos de pescado y mariscos (preferente)</li>\r\n	<li>Preparaci&oacute;n de jugos frutales</li>\r\n	<li>Cotizaci&oacute;n de platos (costo de producci&oacute;n)</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:2:\"--\";}', 'a:1:{s:2:\"es\";s:35:\"Yurggen Salvador Bendezú Jáuregui\";}', 'a:1:{s:2:\"es\";s:9:\"939632397\";}', 'a:1:{s:2:\"es\";s:19:\"yurggenbj@gmail.com\";}', '5', '1', '2019-01-29 15:20:37');

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
-- Table structure for suscrito
-- ----------------------------
DROP TABLE IF EXISTS `suscrito`;
CREATE TABLE `suscrito` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `asunto` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `telefono` varchar(50) NOT NULL DEFAULT '',
  `empresa` varchar(255) DEFAULT '',
  `mensaje` text,
  `estado` int(1) NOT NULL DEFAULT '1',
  `created_up` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of suscrito
-- ----------------------------
INSERT INTO `suscrito` VALUES ('1', 'Armando E', '', 'armandoaepp@gmail.com', '', '', 'mensaje de prueba', '1', '2019-02-13 10:02:29');
INSERT INTO `suscrito` VALUES ('2', 'Armando E', '', 'armandoaepp@gmail.com', '', '', 'mensaje de prueba', '1', '2019-02-13 11:02:40');
INSERT INTO `suscrito` VALUES ('3', 'Armando E', '', 'armandoaepp@gmail.com', '', '', 'Mensaje de prueba desde la web cumbre: CONTACTANOS', '1', '2019-02-13 11:02:38');
INSERT INTO `suscrito` VALUES ('4', 'fedra nury more castro', '', 'fedranury30@gmail.com', '', '', 'como puedo hacer para solicitar mi certificado de  haber  <br />\r\nterminado mis estudios', '1', '2019-02-27 00:02:41');
INSERT INTO `suscrito` VALUES ('5', 'Belén', '', 'belen.paicob@gmail.com', '', '', 'Buenos días quisiera saber sobre la carrera y sobre tbm sus pagos y su número telefónico no da', '1', '2019-02-27 09:02:31');

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of taller
-- ----------------------------
INSERT INTO `taller` VALUES ('17', 'MASA HOJALDRE Y SUS APLICACIONES', '&amp;amp;lt;strong&amp;amp;gt;3 SESIONES&amp;amp;lt;/strong&amp;amp;gt;', '', 'imagenes/talleres/1.jpg', '', '', '', '', '7, 8, 9 de agosto', '', '7:00 a 10:00 pm.', '', 'S/ 200', '', '', '', '', '', '', '1', '0', '2019-02-25 10:44:45');
INSERT INTO `taller` VALUES ('18', 'TORTAS MODERNAS', '&lt;strong&gt;3 SESIONES&lt;/strong&gt;&lt;br /&gt;<br />\r\n&amp;nbsp;', '', 'imagenes/talleres/2.jpg', '', '', '', '', '14, 15, 16 de agosto', '', '7:00 a 10:00 pm.', '', 'S/ 200', '', '', '', '', '', '', '2', '0', '2019-02-25 10:44:49');
INSERT INTO `taller` VALUES ('19', 'MESA DULCE', '&lt;strong&gt;3 SESIONES&lt;/strong&gt;', '', 'imagenes/talleres/3.jpg', '', '', '', '', '21, 22, 23 de agosto', '', '7:00 a 10:00 pm.', '', 'S/ 200', '', '', '', '', '', '', '3', '0', '2019-02-25 10:44:54');
INSERT INTO `taller` VALUES ('20', 'TALLER DE EMPRENDEDORES', '&lt;strong&gt;Sesi&amp;oacute;n 1 &amp;ndash; 2&lt;/strong&gt;<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;B.P.M. buenas pr&amp;aacute;cticas en manipulaci&amp;oacute;n de alimentos&lt;/li&gt;<br />\r\n	&lt;li&gt;Bruselina de chocolate&lt;/li&gt;<br />\r\n	&lt;li&gt;Torta helada&lt;/li&gt;<br />\r\n	&lt;li&gt;Torta tres leche&lt;/li&gt;<br />\r\n	&lt;li&gt;Crema volteada&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&lt;strong&gt;Sesi&amp;oacute;n 3 &amp;ndash; 4&lt;/strong&gt;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;Dise&amp;ntilde;o y equipamiento de un taller de pasteler&amp;iacute;a.&lt;/li&gt;<br />\r\n	&lt;li&gt;Alfajores de maicena y alfajores cubiertos de chocolate.&lt;/li&gt;<br />\r\n	&lt;li&gt;Postres de t&amp;eacute;: brownies, magdalenas, bizcotelas.&lt;/li&gt;<br />\r\n	&lt;li&gt;Pay de lim&amp;oacute;n con merengue italiano.&lt;/li&gt;<br />\r\n	&lt;li&gt;Pay de manzana con masa frola.&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&lt;strong&gt;Sesi&amp;oacute;n 5 &amp;ndash; 6&lt;/strong&gt;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;Gesti&amp;oacute;n de compras y almac&amp;eacute;n&lt;/li&gt;<br />\r\n	&lt;li&gt;Bavarois de guindones&lt;/li&gt;<br />\r\n	&lt;li&gt;Pionono&lt;/li&gt;<br />\r\n	&lt;li&gt;Selva negra&lt;/li&gt;<br />\r\n	&lt;li&gt;Souffl&amp;eacute; de vainilla&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&lt;strong&gt;Sesi&amp;oacute;n 7 &amp;ndash; 8&lt;/strong&gt;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;Costos de producci&amp;oacute;n, costeo de recetas&lt;/li&gt;<br />\r\n	&lt;li&gt;Red velvet cake frosting y relleno&lt;/li&gt;<br />\r\n	&lt;li&gt;Torta damero cubierta con crema de chocolate y decorada con frutos del bosque&lt;/li&gt;<br />\r\n&lt;/ul&gt;', '', 'imagenes/talleres/4.jpg', '', '', '', '', 'Lunes 11 hasta 26 febrero', '', '6 a 9 pm', '', 'S/ 500', '', '', '8 sesiones', '', '', '', '4', '1', '2019-02-25 11:38:36');
INSERT INTO `taller` VALUES ('21', 'COCINA PARA PRINCIPIANTES', '&lt;strong&gt;MODULO I&lt;/strong&gt;<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;&lt;strong&gt;Sesi&amp;oacute;n 1&lt;/strong&gt;: reconocimiento de utensilios, t&amp;eacute;cnica de cortes&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\nFondos de cocci&amp;oacute;n&lt;br /&gt;<br />\r\nAderezos base&lt;br /&gt;<br />\r\nMinestrone &amp;ndash; estofado de pollo &amp;ndash; limonada<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;&lt;strong&gt;Sesi&amp;oacute;n 2&lt;/strong&gt;:&amp;nbsp; principales m&amp;eacute;todos de cocci&amp;oacute;n&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\nPapa a la huanca&amp;iacute;na, arroz con pollo, ensalada criolla, chicha morada&lt;br /&gt;<br />\r\n&amp;nbsp;&lt;br /&gt;<br />\r\n&amp;nbsp;&lt;br /&gt;<br />\r\n&lt;strong&gt;MODULO II&amp;nbsp;&lt;/strong&gt;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;&lt;strong&gt;Sesi&amp;oacute;n 1 &lt;/strong&gt;&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&lt;strong&gt;Vinagretas&lt;/strong&gt;&lt;br /&gt;<br />\r\nEnsalada cesar y crutones&lt;br /&gt;<br />\r\nAsado con pur&amp;eacute;&lt;br /&gt;<br />\r\nIce tea<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;&lt;strong&gt;Sesi&amp;oacute;n&lt;/strong&gt; 2&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&lt;strong&gt;Cocci&amp;oacute;n del arroz&lt;/strong&gt;&lt;br /&gt;<br />\r\nCausa lime&amp;ntilde;a&lt;br /&gt;<br />\r\nArroz con mariscos y limonada frozen<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;&lt;strong&gt;Sesi&amp;oacute;n&lt;/strong&gt; 3&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&lt;strong&gt;Salteados y flambeados&lt;/strong&gt;&lt;br /&gt;<br />\r\nAj&amp;iacute; de gallina&lt;br /&gt;<br />\r\nLomo saltado&lt;br /&gt;<br />\r\nMaracuy&amp;aacute; frozen', '', 'imagenes/talleres/5.jpg', '', '', '', '', '11-12-13 febrero', '', '6 pm a 9 pm', '', '200.00', '', '', '', '', '', '', '5', '1', '2019-02-25 11:38:44');
INSERT INTO `taller` VALUES ('22', 'BARRA CEVICHERA', '&lt;strong&gt;Chef: Manuel Arevalo&lt;/strong&gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\nSesi&amp;oacute;n 1: &lt;strong&gt;leche de tigre y variantes&lt;/strong&gt;<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;Leche de tigre tradicional: aperitivo marino preparado a base de pescado.&lt;/li&gt;<br />\r\n	&lt;li&gt;Leche de pantera: aperitivo marino preparado a base de conchas negras.&lt;/li&gt;<br />\r\n	&lt;li&gt;Leche de lagarto: aperitivo marino preparado a base de contundente leche de tigre, culantro y aj&amp;iacute; limo&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\nSesi&amp;oacute;n 2: &lt;strong&gt;ceviches carretilleros&lt;/strong&gt;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;Ceviche de pescado: preparado a base pescado marinado con sal, aj&amp;iacute; limo, culantro, zumo de lim&amp;oacute;n y cebolla, con guarnici&amp;oacute;n de tortitas de cholo.&lt;/li&gt;<br />\r\n	&lt;li&gt;Ceviche mixto: preparado a base de pescado y mariscos (langostinos, caracol y pulpo), con guarnici&amp;oacute;n de yuca, camote, cholo y cancha.&lt;/li&gt;<br />\r\n	&lt;li&gt;Ceviche con chicharr&amp;oacute;n: ceviche tradicional con chicharr&amp;oacute;n de calamar.&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\nSesi&amp;oacute;n 3:&lt;strong&gt; ceviches compuestos&lt;/strong&gt;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;Ceviche caliente: pescado marinado en crema de aj&amp;iacute; amarillo y cocido a las brasas y servido en panquita ahumada&lt;/li&gt;<br />\r\n	&lt;li&gt;Chancadito de cangrejo.&lt;/li&gt;<br />\r\n	&lt;li&gt;Choritos a la chalaca.&lt;/li&gt;<br />\r\n&lt;/ul&gt;', '', 'imagenes/talleres/6.jpg', '', '', '', '', '11 -12 – 13 febrero', '', '5 a 8 pm', '', 's/ 200', '', '', '', '', '', '', '6', '1', '2019-02-27 11:53:38');
INSERT INTO `taller` VALUES ('23', 'SANGUCHERÍA PERUANA', '&lt;strong&gt;Chef: Jimmy Ar&amp;eacute;valo&lt;/strong&gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\nSesi&amp;oacute;n 1<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;S&amp;aacute;nguche de chicharr&amp;oacute;n<br />\r\n	&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n		&lt;li&gt;Pan franc&amp;eacute;s&lt;/li&gt;<br />\r\n		&lt;li&gt;Zarza criolla&lt;/li&gt;<br />\r\n		&lt;li&gt;Camote en chips&lt;/li&gt;<br />\r\n		&lt;li&gt;Cerdo pochado y frito previamente en salmuera&lt;/li&gt;<br />\r\n		&lt;li&gt;Aj&amp;iacute; parrillero&lt;/li&gt;<br />\r\n		&lt;li&gt;Lechuga&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&amp;nbsp;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;S&amp;aacute;nguche de panceta agridulce<br />\r\n	&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n		&lt;li&gt;Pan de hamburguesa con ajonjol&amp;iacute;&lt;/li&gt;<br />\r\n		&lt;li&gt;Encurtido de nabo y zanahoria&lt;/li&gt;<br />\r\n		&lt;li&gt;Panceta al horno&lt;/li&gt;<br />\r\n		&lt;li&gt;Salsa agridulce&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\nSesi&amp;oacute;n 2<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;S&amp;aacute;nguche de asado de res<br />\r\n	&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n		&lt;li&gt;Asado de res&lt;/li&gt;<br />\r\n		&lt;li&gt;Demi-glass&lt;/li&gt;<br />\r\n		&lt;li&gt;Chips de papa nativa&lt;/li&gt;<br />\r\n		&lt;li&gt;Lechuga lacia y tomate&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&amp;nbsp;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;S&amp;aacute;nguche de lomo saltado<br />\r\n	&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n		&lt;li&gt;Lomo en su jugo&lt;/li&gt;<br />\r\n		&lt;li&gt;Verduras crocantes&lt;/li&gt;<br />\r\n		&lt;li&gt;Pan franc&amp;eacute;s&lt;/li&gt;<br />\r\n		&lt;li&gt;Papas fritas&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\nSesi&amp;oacute;n 3<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;S&amp;aacute;nguche de pavo asado criollo<br />\r\n	&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n		&lt;li&gt;Pan franc&amp;eacute;s&lt;/li&gt;<br />\r\n		&lt;li&gt;Pechuga de pavo en su jugo&lt;/li&gt;<br />\r\n		&lt;li&gt;Zarza criolla&lt;/li&gt;<br />\r\n		&lt;li&gt;T&amp;aacute;rtara criolla (aj&amp;iacute; limo, culantro, huevo duro y mayonesa)&lt;/li&gt;<br />\r\n		&lt;li&gt;Lechuga&lt;/li&gt;<br />\r\n		&lt;li&gt;Chips de camote&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&amp;nbsp;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;S&amp;aacute;nguche de pavo saludable<br />\r\n	&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n		&lt;li&gt;Pan integral&lt;/li&gt;<br />\r\n		&lt;li&gt;Pechuga de pavo magra al horno&lt;/li&gt;<br />\r\n		&lt;li&gt;Lechuga, tomate, palta y ar&amp;uacute;gula&lt;/li&gt;<br />\r\n		&lt;li&gt;Vinagreta: vinagre bals&amp;aacute;mico, aceite de oliva, miel, mostaza&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;', '', 'imagenes/talleres/7.jpg', '', '', '', '', '18 – 19 -21 febrero', '', '6 a 9 pm', '', 's/ 200', '', '', '', '', '', '', '7', '1', '2019-02-27 11:54:28');
INSERT INTO `taller` VALUES ('24', 'SANDWICH INTERNACIONALES', '&lt;strong&gt;Chef Jimmy Ar&amp;eacute;valo&lt;/strong&gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\nSesi&amp;oacute;n 1<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;S&amp;aacute;ndwich philadelfia (carne deshilachada y queso)<br />\r\n	&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n		&lt;li&gt;Panini&lt;/li&gt;<br />\r\n		&lt;li&gt;Salsa de queso ahumado (bechamel)&lt;/li&gt;<br />\r\n		&lt;li&gt;Cebolla caramelizada&lt;/li&gt;<br />\r\n		&lt;li&gt;Carne en l&amp;aacute;minas&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&amp;nbsp;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;Hamburguesa artesanal a la francesa<br />\r\n	&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n		&lt;li&gt;Pan de hamburguesa con ajonjol&amp;iacute;&lt;/li&gt;<br />\r\n		&lt;li&gt;Carne molida, huevo, tomillo, romero, cebolla&lt;/li&gt;<br />\r\n		&lt;li&gt;Tocino crocante&lt;/li&gt;<br />\r\n		&lt;li&gt;Cebolla caramelizada (tomillo, romero y aceite de oliva)&lt;/li&gt;<br />\r\n		&lt;li&gt;Salsa de champi&amp;ntilde;ones (bechamel)&lt;/li&gt;<br />\r\n		&lt;li&gt;Lechuga y tomate&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\nSesi&amp;oacute;n 2<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;S&amp;aacute;ndwich de pollo c&amp;eacute;sar<br />\r\n	&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n		&lt;li&gt;Pan pita&lt;/li&gt;<br />\r\n		&lt;li&gt;Mis de lechuga&lt;/li&gt;<br />\r\n		&lt;li&gt;Pechuga de pollo a la plancha&lt;/li&gt;<br />\r\n		&lt;li&gt;Parmesano&lt;/li&gt;<br />\r\n		&lt;li&gt;Salsa c&amp;eacute;sar&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&amp;nbsp;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;S&amp;aacute;ndwich de pollo grillado y verduras<br />\r\n	&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n		&lt;li&gt;Ciabatta&lt;/li&gt;<br />\r\n		&lt;li&gt;Pechuga de pollo al grill&lt;/li&gt;<br />\r\n		&lt;li&gt;Zuccini, tomate, lechuga&lt;/li&gt;<br />\r\n		&lt;li&gt;Chimichurri&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\nSesi&amp;oacute;n 3<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;&lt;strong&gt;Festival de club s&amp;aacute;ndwich:&lt;/strong&gt;<br />\r\n<br />\r\n	&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n		&lt;li&gt;Club s&amp;aacute;ndwich cl&amp;aacute;sico:<br />\r\n		&lt;ul&gt;<br />\r\n			&lt;li&gt;Pan de molde sin corteza&lt;/li&gt;<br />\r\n			&lt;li&gt;Pollo con mayonesa y lechuga&lt;/li&gt;<br />\r\n			&lt;li&gt;Palta, tomate&lt;/li&gt;<br />\r\n			&lt;li&gt;Huevo y tocino&lt;/li&gt;<br />\r\n			&lt;li&gt;Chips de papa nativa&lt;/li&gt;<br />\r\n		&lt;/ul&gt;<br />\r\n		&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&amp;nbsp;<br />\r\n<br />\r\n&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n	&lt;li&gt;Club s&amp;aacute;ndwich criollo:<br />\r\n	&lt;ul&gt;<br />\r\n		&lt;li&gt;Pan de molde sin corteza&lt;/li&gt;<br />\r\n		&lt;li&gt;Salchicha de huacho y huevo&lt;/li&gt;<br />\r\n		&lt;li&gt;Jam&amp;oacute;n del pa&amp;iacute;s y queso paria&lt;/li&gt;<br />\r\n		&lt;li&gt;Pollo mechado (vinagre, panca y ajo)&lt;/li&gt;<br />\r\n		&lt;li&gt;Chips de camote.&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&amp;nbsp;<br />\r\n<br />\r\n&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n	&lt;li&gt;Club s&amp;aacute;ndwich franc&amp;eacute;s:<br />\r\n	&lt;ul&gt;<br />\r\n		&lt;li&gt;Pan de molde sin corteza&lt;/li&gt;<br />\r\n		&lt;li&gt;Jam&amp;oacute;n ingl&amp;eacute;s y queso Edam&lt;/li&gt;<br />\r\n		&lt;li&gt;Cebollas caramelizadas con champi&amp;ntilde;ones&lt;/li&gt;<br />\r\n		&lt;li&gt;Queso rallado y huevo montado&lt;/li&gt;<br />\r\n		&lt;li&gt;Chips de papas rejilla&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;', '', 'imagenes/talleres/8.jpg', '', '', '', '', '25 – 26 y 28 febrero', '', '6 a 9 pm', 'taller 702', 's/ 200', '', '', '', '', '', '', '8', '1', '2019-02-27 11:54:47');
INSERT INTO `taller` VALUES ('25', 'EL MUNDO DE LAS EMPANADAS', '&lt;strong&gt;Chef Jimmy Ar&amp;eacute;valo&lt;/strong&gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&lt;strong&gt;Sesi&amp;oacute;n 1&lt;/strong&gt;<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;Masa bris&amp;eacute;e:<br />\r\n	&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n		&lt;li&gt;Empanada de pollo a la finas hierbas:<br />\r\n		&lt;ul&gt;<br />\r\n			&lt;li&gt;pollo salteado&lt;/li&gt;<br />\r\n			&lt;li&gt;cebolla caramelizada&lt;/li&gt;<br />\r\n			&lt;li&gt;salsa bechamel&lt;/li&gt;<br />\r\n			&lt;li&gt;mayonesa al aj&amp;iacute; amarillo&lt;/li&gt;<br />\r\n		&lt;/ul&gt;<br />\r\n		&lt;/li&gt;<br />\r\n		&lt;li&gt;Empanada de lomo saltado<br />\r\n		&lt;ul&gt;<br />\r\n			&lt;li&gt;lomo al jugo&lt;/li&gt;<br />\r\n			&lt;li&gt;verduras crocantes: cebolla, tomate y aj&amp;iacute;.&lt;/li&gt;<br />\r\n			&lt;li&gt;mayonesa oriental: mayonesa con aceite de ajonjol&amp;iacute;, ajo y kion.&lt;/li&gt;<br />\r\n		&lt;/ul&gt;<br />\r\n		&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&lt;strong&gt;Sesi&amp;oacute;n 2&lt;/strong&gt;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;Masa frita<br />\r\n	&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n		&lt;li&gt;Empanada argentina<br />\r\n		&lt;ul&gt;<br />\r\n			&lt;li&gt;mix de chorizo y fino corte de res&lt;/li&gt;<br />\r\n			&lt;li&gt;pimientos morroneados&lt;/li&gt;<br />\r\n			&lt;li&gt;salsa chimichurri&lt;/li&gt;<br />\r\n		&lt;/ul&gt;<br />\r\n		&lt;/li&gt;<br />\r\n		&lt;li&gt;Empanada huachana:<br />\r\n		&lt;ul&gt;<br />\r\n			&lt;li&gt;salchicha de huacho&lt;/li&gt;<br />\r\n			&lt;li&gt;huevo&lt;/li&gt;<br />\r\n			&lt;li&gt;aj&amp;iacute; limo y cebolla china&lt;/li&gt;<br />\r\n			&lt;li&gt;crema de rocoto&lt;/li&gt;<br />\r\n		&lt;/ul&gt;<br />\r\n		&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&lt;strong&gt;Sesi&amp;oacute;n 3 &lt;/strong&gt;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;Salte&amp;ntilde;a<br />\r\n	&lt;ul style=&quot;list-style-type:circle;&quot;&gt;<br />\r\n		&lt;li&gt;Empanada mexicana:<br />\r\n		&lt;ul&gt;<br />\r\n			&lt;li&gt;panceta de cerdo&lt;/li&gt;<br />\r\n			&lt;li&gt;cebolla caramelizada&lt;/li&gt;<br />\r\n			&lt;li&gt;chile (mexicano), tomate y culantro&lt;/li&gt;<br />\r\n			&lt;li&gt;pico de gallo con palta.&lt;/li&gt;<br />\r\n		&lt;/ul&gt;<br />\r\n		&lt;/li&gt;<br />\r\n		&lt;li&gt;Empanada italiana:<br />\r\n		&lt;ul&gt;<br />\r\n			&lt;li&gt;-carne molida&lt;/li&gt;<br />\r\n			&lt;li&gt;-cebolla caramelizada y tomate&lt;/li&gt;<br />\r\n			&lt;li&gt;-albahaca y or&amp;eacute;gano&lt;/li&gt;<br />\r\n			&lt;li&gt;mayonesa de anchoas alcaparras y ajo.&lt;/li&gt;<br />\r\n		&lt;/ul&gt;<br />\r\n		&lt;/li&gt;<br />\r\n	&lt;/ul&gt;<br />\r\n	&lt;/li&gt;<br />\r\n&lt;/ul&gt;', '', 'imagenes/talleres/9.jpg', '', '', '', '', '4 – 5 -7 marzo', '', 's/ 200', 'Taller 702', 's/ 200', '', '', '', '', '', '', '9', '1', '2019-02-27 11:55:06');
INSERT INTO `taller` VALUES ('26', 'EL CHIFA Y SUS SECRETOS', '&lt;strong&gt;Chef Carlos Urbina&lt;/strong&gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&lt;strong&gt;Primera sesi&amp;oacute;n:&lt;/strong&gt;<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;Reconocimiento de ingredientes b&amp;aacute;sicos para la cocina chifa&lt;/li&gt;<br />\r\n	&lt;li&gt;Preparaci&amp;oacute;n de fondos (fondo de ave, fondos oscuros)&lt;/li&gt;<br />\r\n	&lt;li&gt;Elaboraci&amp;oacute;n de Siu Mai&lt;/li&gt;<br />\r\n	&lt;li&gt;Elaboraci&amp;oacute;n de la salsa tamarindo y wantanes rellenos fritos.&lt;/li&gt;<br />\r\n	&lt;li&gt;Preparaci&amp;oacute;n del marinado para el cerdo asado&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&lt;strong&gt;Segunda sesi&amp;oacute;n: elaboraci&amp;oacute;n de recetas&lt;/strong&gt;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;Elaboraci&amp;oacute;n de arroz chaufa especial&lt;/li&gt;<br />\r\n	&lt;li&gt;Sopa Wantan especial&lt;/li&gt;<br />\r\n	&lt;li&gt;Ti pa kay&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&lt;strong&gt;Tercera sesi&amp;oacute;n: elaboraci&amp;oacute;n de recetas&lt;/strong&gt;<br />\r\n<br />\r\n&lt;ul&gt;<br />\r\n	&lt;li&gt;Tallar&amp;iacute;n saltado.&lt;/li&gt;<br />\r\n	&lt;li&gt;Alitas kaypi.&lt;/li&gt;<br />\r\n	&lt;li&gt;Pollo chi&amp;nbsp; jau kay.&lt;/li&gt;<br />\r\n&lt;/ul&gt;', '', 'imagenes/talleres/10.jpg', '', '', '', '', '4,5,7 marzo', '', '6 a  9 pm', '', 's/ 200', '', '', '', '', '', '', '10', '1', '2019-02-27 11:55:27');

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
INSERT INTO `user` VALUES ('1', 'Armando', 'Pisfil Puemape', 'armandoaepp@gmail.com', '7b64d09060db17ca6b96c0af99575903', '1', '2018-07-05 15:07:03');

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
INSERT INTO `users` VALUES ('2', 0x3132372E302E302E31, 'cumbre', '$2y$08$xLjUc5GGv0qvypmFlMrXjOZVaLXGiAEGvP7dJoUHP7bsoeCF8/iJ6', null, 'usuario@isp.com', null, null, null, null, '1402679836', '1551283748', '1', 'Admin ', 'CUMBRE', 'ADMIN', '99999', 'imagenes/usuarios/logo.jpg');
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
