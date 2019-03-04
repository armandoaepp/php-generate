/*
 Navicat Premium Data Transfer

 Source Server         : LOCALHOST
 Source Server Type    : MySQL
 Source Server Version : 100136
 Source Host           : localhost:3306
 Source Schema         : escuelac_w_ne16

 Target Server Type    : MySQL
 Target Server Version : 100136
 File Encoding         : 65001

 Date: 04/03/2019 07:44:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admision
-- ----------------------------
DROP TABLE IF EXISTS `admision`;
CREATE TABLE `admision`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `imagen` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `requisitos` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `horarios` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `inversion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of admision
-- ----------------------------
INSERT INTO `admision` VALUES (1, 'Admisión 2019 - I', 'imagenes/resena/admison-18-marzo-2019.jpg', '&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Certificado de secundaria visado por la GRED.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Partida de nacimiento ACTUAL.&amp;amp;nbsp;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Copia del documento de identidad.&amp;amp;nbsp;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Copia de recibo agua y luz.&amp;amp;nbsp;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Dos fotos tama&amp;amp;ntilde;o carnet a color.&amp;amp;nbsp;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Carnet de salud (vigente).&amp;amp;nbsp;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;P&amp;amp;oacute;liza de seguro contra accidentes.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;', '&amp;lt;ul class=&amp;quot;list_ul_cer text-left&amp;quot; style=&amp;quot;list-style-type:square;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;LUNEA A VIERNES&amp;lt;/strong&amp;gt;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;Turno ma&amp;amp;ntilde;ana: &amp;lt;/strong&amp;gt;7.30 am - 2.00 pm&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;Turno noche: &amp;lt;/strong&amp;gt;6:00 - 10:30 pm&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong style=&amp;quot;line-height: 1.6em;&amp;quot;&amp;gt;Duraci&amp;amp;oacute;n&amp;lt;/strong&amp;gt;&amp;lt;span style=&amp;quot;line-height: 1.6em;&amp;quot;&amp;gt;: &amp;lt;strong&amp;gt;3 a&amp;amp;ntilde;os&amp;lt;/strong&amp;gt; / VI ciclos (18 Semanas x ciclo)&amp;lt;/span&amp;gt;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;INICIO&amp;lt;/strong&amp;gt;: 18 de marzo&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;', '&amp;lt;ul class=&amp;quot;list_ul_cer text-left&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;MATR&amp;amp;Iacute;CULA&amp;lt;/strong&amp;gt;: S/. 310.00&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;UNIFORME&amp;lt;/strong&amp;gt;: S/. 200.00 (pantal&amp;amp;oacute;n + polo + garibaldi + camisaco + mandil)&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;MENSUALIDAD: &amp;lt;/strong&amp;gt;&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\n	S/.650.00 (4 cuotas - Incluye insumos e idiomas)&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;', '');

-- ----------------------------
-- Table structure for amigos
-- ----------------------------
DROP TABLE IF EXISTS `amigos`;
CREATE TABLE `amigos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `imagen` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `imagen_2` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1,
  `fecha` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of amigos
-- ----------------------------
INSERT INTO `amigos` VALUES (1, '&lt;section&gt;<br />\r\n&lt;h3&gt;SIGUE ESTAS INDICACIONES Y EMPIEZA A &lt;span style=&quot;color:red;&quot;&gt;&amp;iexcl;GANAR!&lt;/span&gt;.&lt;/h3&gt;<br />\r\n<br />\r\n&lt;ol class=&quot;text-left&quot;&gt;<br />\r\n	&lt;li value=&quot;1&quot;&gt;Recomienda un amigo o amigos a estudiar la carrera de Gastronom&amp;iacute;a y Arte Culinario con nosotros. Puedes recomendar todos los amigos(as) que desees.&lt;/li&gt;<br />\r\n	&lt;li&gt;Reg&amp;iacute;stralo(s) en www.escuelacumbre.edu.pe/amigopuntos.&lt;/li&gt;<br />\r\n	&lt;li&gt;Aseg&amp;uacute;rate que tu amigo o amigos recomendados figuren en nuestro registro de matriculados. Consulta en el &amp;aacute;rea de Informes.&lt;/li&gt;<br />\r\n	&lt;li&gt;Ac&amp;eacute;rcate al &amp;aacute;rea de Informes para obtener tu benefcio.&lt;/li&gt;<br />\r\n&lt;/ol&gt;<br />\r\n&lt;/section&gt;', 'a', 'a', 'marketing@escuelacumbre.edu.pe', 1, 1, '2017-10-02 19:47:19');

-- ----------------------------
-- Table structure for buzon
-- ----------------------------
DROP TABLE IF EXISTS `buzon`;
CREATE TABLE `buzon`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telefono` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mensaje` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `estado` int(11) NULL DEFAULT 1,
  `fecha` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of buzon
-- ----------------------------
INSERT INTO `buzon` VALUES (1, 'Williams Azabache Sarmiento', '9999999', 'williams.azabache@webtilia.com', 'Test Test', 1, '2015-06-12 18:27:43');
INSERT INTO `buzon` VALUES (2, 'Williams Azabache Sarmiento', '9999', 'williams.azabache@webtilia.com', 'Testing', 1, '2015-06-12 18:30:14');
INSERT INTO `buzon` VALUES (3, 'Williams Azabache Sarmiento', '9999', 'williams.azabache@webtilia.com', 'Testing', 1, '2015-06-12 18:31:59');
INSERT INTO `buzon` VALUES (4, 'Williams Azabache Sarmiento', '9999', 'williams.azabache@webtilia.com', 'Testing', 1, '2015-06-12 18:32:39');

-- ----------------------------
-- Table structure for buzon_contacto
-- ----------------------------
DROP TABLE IF EXISTS `buzon_contacto`;
CREATE TABLE `buzon_contacto`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dni` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telefono` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fecha` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of buzon_contacto
-- ----------------------------
INSERT INTO `buzon_contacto` VALUES (1, 'Pedro Calderón', '42548605', 'pedrocalderon_@hotmail.com', '987868401', '2015-10-06 23:43:15');

-- ----------------------------
-- Table structure for buzon_retiro
-- ----------------------------
DROP TABLE IF EXISTS `buzon_retiro`;
CREATE TABLE `buzon_retiro`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `titulo_retiro` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `email` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mensaje` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `estado` int(11) NULL DEFAULT 1,
  `fecha` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of buzon_retiro
-- ----------------------------
INSERT INTO `buzon_retiro` VALUES (1, 'Williams', 'Próximamente Retiro 2015', 'wjharil@gmail.com', 'Retiro pruebas email', 1, '2015-07-13 01:54:43');

-- ----------------------------
-- Table structure for campus
-- ----------------------------
DROP TABLE IF EXISTS `campus`;
CREATE TABLE `campus`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `subtitulo` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `descripcion` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `imagen` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `url` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `orden` int(11) NULL DEFAULT NULL,
  `estado` int(1) NULL DEFAULT 1,
  `fecha` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of campus
-- ----------------------------
INSERT INTO `campus` VALUES (16, 'Cumbre 1', '', 'Cumbre 1', 'imagenes/campus/campus1.jpg', '', 1, 1, '2016-07-11 06:29:22');
INSERT INTO `campus` VALUES (17, 'Campus 2', '', '', 'imagenes/campus/campus2.jpg', '', 2, 1, '2016-07-11 06:30:18');
INSERT INTO `campus` VALUES (18, 'Campus 3', '', '', 'imagenes/campus/campus3.jpg', '', 3, 1, '2016-07-11 06:30:39');
INSERT INTO `campus` VALUES (19, 'Campus 4', '', '', 'imagenes/campus/campus4.jpg', '', 4, 1, '2016-07-11 06:30:59');
INSERT INTO `campus` VALUES (20, 'Campus 5', '', '', 'imagenes/campus/campus5.jpg', '', 5, 1, '2016-07-11 06:31:48');
INSERT INTO `campus` VALUES (21, 'Campus 6', '', '', 'imagenes/campus/campus6.jpg', '', 6, 1, '2016-07-11 06:32:03');
INSERT INTO `campus` VALUES (22, 'Campus 7', '', '', 'imagenes/campus/campus7.jpg', '', 7, 1, '2016-07-11 06:32:18');
INSERT INTO `campus` VALUES (23, 'Campus 8', '', '', 'imagenes/campus/campus8.jpg', '', 8, 1, '2016-07-11 06:32:34');
INSERT INTO `campus` VALUES (24, 'Campus 9', '', '', 'imagenes/campus/campus9.jpg', '', 9, 1, '2016-07-11 06:32:48');

-- ----------------------------
-- Table structure for carrera
-- ----------------------------
DROP TABLE IF EXISTS `carrera`;
CREATE TABLE `carrera`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `descripcion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `slide` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `imagen` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `presentacion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `porque` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `donde` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `certificacion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `titulos` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `inversion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `titulacion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `detalleduracion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `detalledia` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `detallehorario` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `detallelugar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `detalleprecio` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `detalleequipos` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `detalleconsultas` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `detalledirigido` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `aquien` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `temas` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `nombreseo` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1,
  `fecha` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of carrera
-- ----------------------------
INSERT INTO `carrera` VALUES (1, 'a:1:{s:2:\"es\";s:12:\"Gastronomía\";}', 'a:1:{s:2:\"es\";s:727:\"<p>Estudiar Gastronom&iacute;a en Chiclayo es un privilegio porque aqu&iacute; al parecer,&nbsp;se inici&oacute; la Historia del mundialmente reconocido Sabor Peruano.&nbsp;<br />\r\nEn Huaca Ventarr&oacute;n con m&aacute;s de 4,000 a&ntilde;os de antig&uuml;edad, se encontraron&nbsp;los primeros murales policromos de Am&eacute;rica.<br />\r\nEl Se&ntilde;or de Sip&aacute;n&nbsp;probablemente degustaba un &ldquo;chinguirito&rdquo; o pescado seco salado.<br />\r\nEl &ldquo;loche&rdquo;, &uacute;nico zapallo milenario da gusto a nuestras preparaciones&nbsp;desde tiempos inmemoriales.<br />\r\nDelicias a base de carnes de corral como&nbsp;el pato o cabrito seguir&aacute;n cautivando paladares hasta el final de los tiempos.</p>\r\n\";}', 'imagenes/carreras/head-carreras_2.jpg', 'imagenes/carreras/carrera-gastronomia.png', 'a:1:{s:2:\"es\";s:653:\"<h3>&iquest;QU&Eacute; ES GASTRONOM&Iacute;A?</h3>\r\n<br />\r\n<span style=\"font-size: 13px; line-height: 1.6em;\">La Gastronom&iacute;a es una disciplina que abarca todo lo relacionado al placer de la alimentaci&oacute;n humana. Las preparaciones con sus historias y tradiciones, los insumos e ingredientes, el servicio en mesa, las bebidas, los vinos, el desarrollo y manejo de negocios como restaurantes, cafeter&iacute;as, catering de eventos y mucho m&aacute;s.&nbsp;</span><em style=\"font-size: 13px; line-height: 1.6em;\"><span class=\"text-danger\">Gastronom&iacute;a no s&oacute;lo es cocinar o comer rico, va mucho m&aacute;s all&aacute;.</span></em>\";}', 'a:1:{s:2:\"es\";s:578:\"<h3>&iquest;POR QU&Eacute; ESTUDIAR GASTRONOM&Iacute;A?<br />\r\n<br />\r\n<span style=\"line-height: 1.6em; font-size: 13px;\">El mundo ha evolucionado en el aspecto gastron&oacute;mico, convirtiendo el alto nivel en servicio, en un est&aacute;ndar internacional. El turismo cada vez crece m&aacute;s, los paladares se sofistican cada d&iacute;a. Es necesario que el Per&uacute; profesionalice su afamada cocina. Un cocinero puede llegar a ser Chef, viajar por todo el mundo sirviendo con su arte y logrando satisfacciones tanto personales como de sus comensales.&nbsp;</span></h3>\r\n\";}', 'a:1:{s:2:\"es\";s:638:\"<h3>&iquest;D&Oacute;NDE PUEDES TRABAJAR?</h3>\r\n<br />\r\n<span style=\"font-size: 13px; line-height: 1.6em;\">El campo laboral es muy amplio, estos son algunos de los trabajos en donde se pueden desempe&ntilde;ar nuestros egresados:</span>\r\n\r\n<div class=\"text-block text-justify\">\r\n<ul class=\"list_ul\">\r\n	<li>Chef Ejecutivo de hoteles o restaurantes.</li>\r\n	<li>Gerente de Alimentos y Bebidas.</li>\r\n	<li><span style=\"line-height: 1.6em;\">Asesor o L&iacute;der de Empresas Gastron&oacute;micas.</span></li>\r\n	<li>Banquetes y eventos.&nbsp;</li>\r\n	<li>Chef ejecutivo, particular, asesor o instructor en establecimientos.</li>\r\n</ul>\r\n</div>\r\n\";}', 'a:1:{s:2:\"es\";s:174:\"M&oacute;dulo 1: Gastronom&iacute;a Regional<br />\r\nM&oacute;dulo 2: Gastronom&iacute;a Peruana<br />\r\nM&oacute;dulo 3: Gastronom&iacute;a Internacional<br />\r\n<br />\r\n&nbsp;\";}', 'a:1:{s:2:\"es\";s:317:\"<strong>CARRERA PROFESIONAL DE GASTRONOM&Iacute;A Y ARTE CULINARIO</strong><br />\r\nse entrega T&iacute;tulo a Nombre de la Naci&oacute;n<br />\r\n(R.M.N&deg; 0345 - 2008 - ED)<br />\r\n<strong>Duraci&oacute;n de la carrera: </strong>3 a&ntilde;os / VI Ciclos<br />\r\n(cada ciclo dura 4 meses)<br />\r\n<br />\r\n<br />\r\n&nbsp;\";}', 'a:1:{s:2:\"es\";s:328:\"<ul>\r\n	<li>Matr&iacute;cula: <strong>S/ 310.00</strong></li>\r\n	<li>Uniforme completo: <strong>S/ 200.00 </strong>(pantal&oacute;n + polo + garibaldi + camisaco + mandil)</li>\r\n	<li>Total por ciclo: <strong>S/ 2600.00</strong></li>\r\n	<li>Total por ciclo (pago al contado): <strong>S/ 2470.00 </strong>(5% descuento)</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:179:\"<strong>19&deg; </strong>Programa de Asesor&iacute;a de Proyectos para optar <strong>T&iacute;tulo Profesional T&eacute;cnico </strong>en GAC (Gastronom&iacute;a y Arte Culinario)\";}', 'a:1:{s:2:\"es\";s:10:\"16 SEMANAS\";}', 'a:1:{s:2:\"es\";s:24:\"INICIO: 19 DE ENERO 2019\";}', 'a:1:{s:2:\"es\";s:21:\"Sábados 9.00 a 13:00\";}', 'a:1:{s:2:\"es\";s:27:\"Av. Eufemio Lora y Lora 625\";}', 'a:1:{s:2:\"es\";s:12:\"S/. 4,630.00\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:12:\"(074) 228790\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:58:\"Dirigido a egresados con estudios conclu&iacute;dos.&nbsp;\";}', 'a:1:{s:2:\"es\";s:387:\"<ol>\r\n	<li>Seguridad e higiene alimentaria.</li>\r\n	<li>BPM.</li>\r\n	<li>&Aacute;rea de producci&oacute;n en cocina.</li>\r\n	<li>Marketing aplicado.</li>\r\n	<li>Etiqueta y protocolo.</li>\r\n	<li>T&eacute;cnicas b&aacute;sicas de cocina.</li>\r\n	<li>Repertorio de cocina regional y peruana.</li>\r\n	<li>Cata de vinos y maridaje.</li>\r\n	<li>Asesor&iacute;a de proyectos productivos.</li>\r\n</ol>\r\n\";}', 'gastronomia', 0, 1, '2019-01-11 11:43:08');

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria`  (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT '',
  `imagen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT '',
  `publicar` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT 'S',
  `estado` smallint(5) UNSIGNED NOT NULL DEFAULT 1,
  `created_up` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`categoria_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES (1, 'Categoría 1', 'categoria-1', '', 'S', 1, '2018-08-08 17:08:01');
INSERT INTO `categoria` VALUES (2, 'Categoría 2', 'categoria-2', '', 'S', 1, '2018-08-08 17:08:09');
INSERT INTO `categoria` VALUES (3, 'Categoría 3', 'categoria-3', '', 'S', 1, '2018-08-08 17:08:14');

-- ----------------------------
-- Table structure for chef
-- ----------------------------
DROP TABLE IF EXISTS `chef`;
CREATE TABLE `chef`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `apellidos` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `cargo` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `resumen` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `descripcion` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL,
  `imagen` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `item` int(11) NULL DEFAULT NULL,
  `publicar` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT 'S',
  `estado` int(1) NULL DEFAULT 1,
  `created_up` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of chef
-- ----------------------------
INSERT INTO `chef` VALUES (1, 'LUIS', 'HUERTA', 'Chef', 'MASTER PATISSIER', '&lt;ul&gt;<br />\r\n	&lt;li&gt;Especializaci&amp;oacute;n en Artisan Gelato - Carpigiani Gelato University, Bologna - Italia.&lt;/li&gt;<br />\r\n	&lt;li&gt;Panader&amp;iacute;a artesanal y del mundo - Institute of Culinary Education (ICE), New York.&lt;/li&gt;<br />\r\n	&lt;li&gt;Chocolater&amp;iacute;a y Bomboner&amp;iacute;a - Chocolate Academy, Chicago, USA.&lt;/li&gt;<br />\r\n	&lt;li&gt;Workshop con Valrhona&amp;nbsp; Chocolate - Emirates Academy, Dub&amp;aacute;i.&lt;/li&gt;<br />\r\n	&lt;li&gt;Pastry chef asociado &amp;ndash; Miami Culinary Institute&lt;/li&gt;<br />\r\n	&lt;li&gt;Pastry chef en Resort Madinat Jumeirah, Dub&amp;aacute;i.&lt;/li&gt;<br />\r\n	&lt;li&gt;Pastry chef en Resort Canyon Ranch Miami, USA.&lt;/li&gt;<br />\r\n	&lt;li&gt;Master Patissierie, Le Cordon Bleu Per&amp;uacute;.&lt;/li&gt;<br />\r\n	&lt;li&gt;Linecook restaurant Malabar, Lima&lt;/li&gt;<br />\r\n&lt;/ul&gt;', 'images/chef/1.jpg', 1, 'S', 1, '2019-03-02 18:20:26');
INSERT INTO `chef` VALUES (2, 'KEVIN', 'SUÁREZ', 'Chef', 'ESPECIALISTA EN COCINA INTERNACIONAL', '&lt;ul&gt;<br />\r\n	&lt;li&gt;Cocinero en Restaurant R&amp;eacute;gis &amp;amp; Jacques MARCON &amp;ndash; 3 Estrellas Michelin, Francia.&lt;/li&gt;<br />\r\n	&lt;li&gt;Cocinero en Restaurant Luis Bernard Puech- 1 Estrella Michelin, Francia.&lt;/li&gt;<br />\r\n	&lt;li&gt;Master Cucina en ICIF, Italia.&lt;/li&gt;<br />\r\n	&lt;li&gt;Master Cuisine en Escuela de Gastronom&amp;iacute;a y Arte Culinario Cumbre.&lt;/li&gt;<br />\r\n	&lt;li&gt;Chef en Resturante Loche, Hotel Casa de la Luna, Chiclayo.&lt;/li&gt;<br />\r\n&lt;/ul&gt;', 'images/chef/2.jpg', 2, 'S', 1, '2019-03-02 18:20:26');
INSERT INTO `chef` VALUES (3, 'BORIS', 'STAKEEFF', 'Chef', 'ESPECIALISTA EN COCINA PERUANA E INTERNACIONAL', '&lt;ul&gt;<br />\r\n	&lt;li&gt;Chef de partie del Ristorante Quadri, Venecia, Italia.&lt;/li&gt;<br />\r\n	&lt;li&gt;Master Cucina en ICIF, Italia.&lt;/li&gt;<br />\r\n	&lt;li&gt;Chef para el II Foro Mundial de Turismo Gastron&amp;oacute;mico.&lt;/li&gt;<br />\r\n	&lt;li&gt;Capacitador para el MINCETUR &amp;ndash; CENFOTUR.&lt;/li&gt;<br />\r\n	&lt;li&gt;Chef asesor en Supermercados Peruanos.&lt;/li&gt;<br />\r\n	&lt;li&gt;Coaching y trabajo en equipo - Pronabec (MINEDU).&lt;/li&gt;<br />\r\n&lt;/ul&gt;', 'images/chef/3.jpg', 3, 'S', 0, '2019-03-02 18:20:26');
INSERT INTO `chef` VALUES (4, 'ANDRÉ', 'KUNIYOSHI', 'Chef', 'ESPECIALISTA EN COCINA PERUANA', '&lt;ul&gt;<br />\r\n	&lt;li&gt;Chef de partie en restaurant Andre Chatelard, Francia.&lt;/li&gt;<br />\r\n	&lt;li&gt;Chef Ejecutivo de la cadena Casa Andina Hotel.&lt;/li&gt;<br />\r\n	&lt;li&gt;Master Cuisine en Escuela de Gastronom&amp;iacute;a y Arte Culinario Cumbre.&lt;/li&gt;<br />\r\n	&lt;li&gt;Asesor gastron&amp;oacute;mico en diversos restaurantes a nivel nacional&lt;/li&gt;<br />\r\n&lt;/ul&gt;', 'images/chef/4.jpg', 4, 'S', 0, '2019-03-02 18:20:27');
INSERT INTO `chef` VALUES (5, 'JESÚS', 'ZAMORA', 'Chef', 'ESPECIALISTA EN COCINA PERUANA', '&lt;ul&gt;<br />\r\n	&lt;li&gt;Chef de partie en Restauant L&amp;acute;Ambassade, Francia.&lt;/li&gt;<br />\r\n	&lt;li&gt;Master Cuisine en Escuela de Gastronom&amp;iacute;a y Arte Culinario Cumbre.&lt;/li&gt;<br />\r\n	&lt;li&gt;Chef en Restaurant El Rinc&amp;oacute;n Que No Conoces, Lima.&lt;/li&gt;<br />\r\n	&lt;li&gt;Administraci&amp;oacute;n y gesti&amp;oacute;n de restaurantes en la Escuela Nacional de Gastronom&amp;iacute;a, Lima.&lt;/li&gt;<br />\r\n&lt;/ul&gt;', 'images/chef/5.jpg', 5, 'S', 1, '2019-03-02 18:20:27');
INSERT INTO `chef` VALUES (6, 'AGUSTÍN', 'JORDAN', 'Chef', 'ESPECIALISTA EN COCINA REGIONAL', '&lt;ul&gt;<br />\r\n	&lt;li&gt;Chef ejecutivo del restaurante tur&amp;iacute;stico &amp;ldquo;El C&amp;aacute;ntaro&amp;rdquo;, Lambayeque.&lt;/li&gt;<br />\r\n	&lt;li&gt;Expositor en la Feria Internacional Mistura (dos a&amp;ntilde;os consecutivos).&lt;/li&gt;<br />\r\n	&lt;li&gt;Investigador y gestor de la gastronom&amp;iacute;a regional e identidad lambayecana.&lt;/li&gt;<br />\r\n	&lt;li&gt;Expositor en ferias de gastronom&amp;iacute;a y turismo, congresos y talleres a nivel nacional e internacional.&lt;/li&gt;<br />\r\n	&lt;li&gt;Estudios de Alta Cocina en Hospitalily Management School Columbia, Lima.&lt;/li&gt;<br />\r\n&lt;/ul&gt;', 'images/chef/6.jpg', 6, 'S', 1, '2019-03-02 18:20:27');

-- ----------------------------
-- Table structure for configuracion
-- ----------------------------
DROP TABLE IF EXISTS `configuracion`;
CREATE TABLE `configuracion`  (
  `configuracion_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `horario` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `direccion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `email` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telefono` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `facebook` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `youtube` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `instagram` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mapa` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `popup` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `show_popup` int(1) NULL DEFAULT NULL,
  `estado` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '1',
  PRIMARY KEY (`configuracion_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of configuracion
-- ----------------------------
INSERT INTO `configuracion` VALUES (1, 'INSTITUTO DE GASTRONOMÍA &amp; ARTE CULINARIO', '&lt;p&gt;Lunes a Viernes de 8:00 a.m. a 8.00 p.m.&lt;/p&gt;', '&lt;p&gt;Av. Eufemio Lora y Lora 625&lt;/p&gt;', 'recepcion@escuelacumbre.edu.pe', '(074) 228 790', 'https://www.facebook.com/CumbrePeru', 'https://www.youtube.com/results?search_query=Cumbre+Gastronomia', 'fotos123', '', 'imagenes/home/slider-1_1.jpg', 0, '1');

-- ----------------------------
-- Table structure for diplomado
-- ----------------------------
DROP TABLE IF EXISTS `diplomado`;
CREATE TABLE `diplomado`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `descripcion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `slide` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `imagen` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `certificacion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `titulos` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `inversion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `titulacion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `detalleduracion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `detalledia` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `detallehorario` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `detallelugar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `detalleprecio` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `detalleequipos` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `detalleconsultas` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `detalledirigido` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `aquien` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `temas` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `nombreseo` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1,
  `fecha` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of diplomado
-- ----------------------------
INSERT INTO `diplomado` VALUES (1, 'a:1:{s:2:\"es\";s:11:\"Pastelería\";}', 'a:1:{s:2:\"es\";s:323:\"<div>Este curso &ndash; taller tiene como objetivo capacitar a emprendedores y apasionados por la pasteler&iacute;a para que puedan implementar su propio negocio en base a productos de tendencia.<br />\r\nLos asistentes podr&aacute;n realizar pr&aacute;ctica en talleres totalmente implementados.</div>\r\n\r\n<div>&nbsp;</div>\r\n\";}', 'imagenes/carreras/fond_diplomado.jpg', 'imagenes/carreras/diplomado-pasteleria.png', 'a:1:{s:2:\"es\";s:486:\"Los participantes recibir&aacute;n el CERTIFICADO EN <strong>TALLER DE PASTELER&Iacute;A </strong>a nombre de Cumbre.<br />\r\n<strong><em>&iquest;Por qu&eacute; estudiar este taller en Cumbre?</em></strong>\r\n<ul>\r\n	<li>T&eacute;cnicas y herramientas con enfoque pr&aacute;ctico.</li>\r\n	<li>Docente instructor con experiencia y trayectoria.</li>\r\n	<li>Asesor&iacute;a de chefs de primer nivel.</li>\r\n	<li>La escuela de gastronom&iacute;a n&uacute;mero 1 de la regi&oacute;n.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:633:\"<strong>Luis Huerta / MASTER PATISSIER</strong><br />\r\nMaster Patissierie con m&aacute;s de 20 a&ntilde;os de experiencia. Con especializaci&oacute;n en Artisan Gelato - Carpigiani Gelato University, Bologna &ndash; Italia; panader&iacute;a artesanal y del mundo en el Institute of Culinary Education (ICE), New York; Chocolater&iacute;a y Bomboner&iacute;a - Chocolate Academy, Chicago, USA.<br />\r\nAdem&aacute;s es Pastry chef asociado &ndash; Miami Culinary Institute, ha trabajado como Pastry chef en Resort Madinat Jumeirah, Dub&aacute;i; Pastry chef en Resort Canyon Ranch Miami, USA; y como Line cook restaurant Malabar, Lima.\";}', 'a:1:{s:2:\"es\";s:288:\"<div style=\"line-height: 20.8px;\">\r\n<ul>\r\n	<li>S/. 1800.00 Nuevos Soles (4 cuotas de S/. 450.00 soles)</li>\r\n	<li>S/. 1500.00 soles (al contado)</li>\r\n</ul>\r\n<strong>Incluye: </strong>Uniforme (Chaqueta, mandil y Garibaldi) / Recetario / Insumos / Degustaci&oacute;n / Certificado</div>\r\n\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:27:\"Av. Eufemio Lora y Lora 625\";}', 'a:1:{s:2:\"es\";s:24:\"S/. 1500.00 (al contado)\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:10:\"074 228790\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:333:\"<ul>\r\n	<li>Propietarios de negocios de gastronom&iacute;a.</li>\r\n	<li>Pasteleros que quieren implementar un negocio.</li>\r\n	<li>Empresarios que desean implementar una marca de gastronom&iacute;a (pasteler&iacute;a).</li>\r\n	<li>P&uacute;blico apasionado por la pasteler&iacute;a que quiere perfeccionar su m&eacute;todo.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:319:\"<strong>SESI&Oacute;N 01:</strong> &nbsp; FESTIVAL DE GALLETAS Y SABLES.<br />\r\n<strong>SESI&Oacute;N 02:</strong>&nbsp;&nbsp; PIES Y TARTAS.<br />\r\n<strong>SESI&Oacute;N 03:&nbsp;&nbsp; </strong>PIES Y TARTAS II.<br />\r\n<strong>SESI&Oacute;N 04:</strong>&nbsp;&nbsp; MASA CHOUX.<br />\r\n[ ...16 SESIONES ]<br />\r\n&nbsp;\";}', 'pasteleria', 1, 1, '2017-10-05 11:40:34');

-- ----------------------------
-- Table structure for evento
-- ----------------------------
DROP TABLE IF EXISTS `evento`;
CREATE TABLE `evento`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `descripcion` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `imagen` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nombreseo` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `orden` int(11) NULL DEFAULT NULL,
  `estado` int(1) NULL DEFAULT 1,
  `fecha` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of evento
-- ----------------------------
INSERT INTO `evento` VALUES (1, 'a:1:{s:2:\"es\";s:24:\"Conferencias Magistrales\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/conferencias-magistrales.jpg', 'conferencias-magistrales', 1, 1, '2017-11-06 23:38:19');
INSERT INTO `evento` VALUES (2, 'a:1:{s:2:\"es\";s:18:\"Clases Magistrales\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/clases-magistrales.jpg', 'clases-magistrales', 2, 1, '2017-11-06 23:38:50');
INSERT INTO `evento` VALUES (3, 'a:1:{s:2:\"es\";s:11:\"Expo Cumbre\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/expo-cumbre_1.jpg', 'expo-cumbre', 3, 1, '2017-11-06 23:38:56');
INSERT INTO `evento` VALUES (4, 'a:1:{s:2:\"es\";s:14:\"Fiesta de Gala\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/fiesta-de-gala.jpg', 'fiesta-de-gala', 4, 1, '2017-11-06 23:39:03');
INSERT INTO `evento` VALUES (5, 'a:1:{s:2:\"es\";s:32:\"Imposición de camisacos I Ciclo\";}', 'a:1:{s:2:\"es\";s:182:\"Nuestros estudiantes de primer ciclo recibieron su primera chaqueta, s&iacute;mbolo de integridad y respeto hacia la pronta profesi&oacute;n que los acompa&ntilde;ar&aacute; siempre.\";}', 'imagenes/eventos/im-1.jpg', 'imposicion-de-camisacos-i-ciclo', 5, 1, '2017-10-11 22:50:36');
INSERT INTO `evento` VALUES (6, 'a:1:{s:2:\"es\";s:17:\"Activación Olmos\";}', 'a:1:{s:2:\"es\";s:352:\"Activaci&oacute;n en el Centro de esparcimiento <strong>&ldquo;Los Algarrobos&rdquo;</strong> &ndash; Olmos a las 9:00 am, el d&iacute;a 22 de Septiembre del presente. El motivo de nuestra presencia fue participar de la feria vocacional exponiendo nuestra carrera profesional de gastronom&iacute;a con la que cuenta la instituci&oacute;n.<br />\r\n&nbsp;\";}', 'imagenes/eventos/im-2.jpg', 'activacion-olmos', 6, 1, '2017-10-11 15:37:26');
INSERT INTO `evento` VALUES (7, 'a:1:{s:2:\"es\";s:11:\"Miss Cumbre\";}', 'a:1:{s:2:\"es\";s:353:\"La Escuela Peruana de Gastronom&iacute;a y Arte Culinario &ldquo;CUMBRE&rdquo;, organiza en el marco de su XI Aniversario Institucional <strong>&ldquo;MISS CUMBRE 2017&rdquo;, </strong>en la que se busca elegir a la dama que habr&aacute; de representar a la singular belleza gastron&oacute;mica, as&iacute; como tambi&eacute;n sus principios y virtudes.\";}', 'imagenes/eventos/im-3.jpg', 'miss-cumbre', 7, 1, '2017-10-11 15:45:37');
INSERT INTO `evento` VALUES (8, 'a:1:{s:2:\"es\";s:11:\"Cumbrematch\";}', 'a:1:{s:2:\"es\";s:527:\"La Escuela Peruana de Gastronom&iacute;a y Arte Culinario &ldquo;CUMBRE&rdquo;, organiza en el marco de su XI Aniversario Institucional el <strong>CUMBREMATCH 2017, Copa &ldquo;INGENIA&rdquo;</strong> con la participaci&oacute;n de todos los estudiantes y miembros de la instituci&oacute;n con el prop&oacute;sito de fomentar la pr&aacute;ctica del deporte, la sana competencia; as&iacute; como, estrechar los lazos de confraternidad que permitan un desarrollo integral del estudiante y la identificaci&oacute;n con su Escuela.\";}', 'imagenes/eventos/im-4.jpg', 'cumbrematch', 8, 1, '2017-10-11 15:48:45');
INSERT INTO `evento` VALUES (9, 'a:1:{s:2:\"es\";s:33:\"Seminario Magistral - Cumbre 2017\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/cha-cha.jpg', 'seminario-magistral-cumbre-2017', 9, 1, '2017-12-04 23:51:58');
INSERT INTO `evento` VALUES (10, 'a:1:{s:2:\"es\";s:21:\"Conferencia de Prensa\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/con-prensa_1.jpg', 'conferencia-de-prensa', 10, 1, '2017-12-05 00:13:45');
INSERT INTO `evento` VALUES (11, 'a:1:{s:2:\"es\";s:12:\"CUMBRE MATCH\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/cumbremacth.jpg', 'cumbre-match', 11, 1, '2017-12-05 00:18:43');
INSERT INTO `evento` VALUES (12, 'a:1:{s:2:\"es\";s:15:\"EXPOCUMBRE 2017\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/expocumbre.jpg', 'expocumbre-2017', 12, 1, '2017-12-05 00:24:19');
INSERT INTO `evento` VALUES (13, 'a:1:{s:2:\"es\";s:19:\"Fiesta de Gala 2017\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/fiesta-gala.jpg', 'fiesta-de-gala-2017', 13, 1, '2017-12-05 00:30:41');
INSERT INTO `evento` VALUES (14, 'a:1:{s:2:\"es\";s:17:\"Guerra de cocinas\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/guerra-de-cocinas.jpg', 'guerra-de-cocinas', 14, 1, '2017-12-05 00:35:57');
INSERT INTO `evento` VALUES (15, 'a:1:{s:2:\"es\";s:16:\"Miss Cumbre 2017\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/miss-cumbre.jpg', 'miss-cumbre-2017', 15, 1, '2017-12-05 00:41:22');
INSERT INTO `evento` VALUES (16, 'a:1:{s:2:\"es\";s:83:\"I Programa de Actualización Docente y Fortalecimiento de Competencias Pedagógicas\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/x-min.jpg', 'i-programa-de-actualizacion-docente-y-fortalecimiento-de-competencias-pedagogicas', 16, 1, '2018-12-07 04:27:13');
INSERT INTO `evento` VALUES (17, 'a:1:{s:2:\"es\";s:33:\"Campaña de Protección ambiental\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/x.jpg', 'campanna-de-proteccion-ambiental', 17, 1, '2018-12-21 13:53:18');
INSERT INTO `evento` VALUES (18, 'a:1:{s:2:\"es\";s:16:\"CHARLA MAGISTRAL\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'http://www.escuelacumbre.edu.pe/2018/imagenes/nodisponible.jpg', 'charla-magistral', 18, 1, '2019-02-22 10:15:59');
INSERT INTO `evento` VALUES (19, 'a:1:{s:2:\"es\";s:18:\"CHARLA MAGISTRAL 2\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'http://www.escuelacumbre.edu.pe/2018/imagenes/nodisponible.jpg', 'charla-magistral-2', 19, 1, '2019-02-22 10:29:40');

-- ----------------------------
-- Table structure for evento_img
-- ----------------------------
DROP TABLE IF EXISTS `evento_img`;
CREATE TABLE `evento_img`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_padre` int(11) NULL DEFAULT NULL,
  `orden` int(11) NULL DEFAULT NULL,
  `estado` int(1) NULL DEFAULT 1,
  `fecha` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 94 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of evento_img
-- ----------------------------
INSERT INTO `evento_img` VALUES (3, 'imagenes/eventos/03-jpg-1468583251.jpg', 1, 3, 1, '2016-07-15 06:47:31');
INSERT INTO `evento_img` VALUES (4, 'imagenes/eventos/04-jpg-1468583252.jpg', 1, 4, 1, '2016-07-15 06:47:32');
INSERT INTO `evento_img` VALUES (5, 'imagenes/eventos/05-jpg-1468583252.jpg', 1, 5, 1, '2016-07-15 06:47:32');
INSERT INTO `evento_img` VALUES (6, 'imagenes/eventos/05-1-jpg-1468583253.jpg', 1, 6, 1, '2016-07-15 06:47:33');
INSERT INTO `evento_img` VALUES (7, 'imagenes/eventos/05-2-jpg-1468583253.jpg', 1, 7, 1, '2016-07-15 06:47:33');
INSERT INTO `evento_img` VALUES (8, 'imagenes/eventos/06-jpg-1468583254.jpg', 1, 8, 1, '2016-07-15 06:47:34');
INSERT INTO `evento_img` VALUES (9, 'imagenes/eventos/07-jpg-1468583254.jpg', 1, 9, 1, '2016-07-15 06:47:34');
INSERT INTO `evento_img` VALUES (10, 'imagenes/eventos/08-jpg-1468583255.jpg', 1, 10, 1, '2016-07-15 06:47:35');
INSERT INTO `evento_img` VALUES (13, 'imagenes/eventos/03-jpg-1468584349.jpg', 2, 13, 1, '2016-07-15 07:05:49');
INSERT INTO `evento_img` VALUES (14, 'imagenes/eventos/05-jpg-1468584357.jpg', 2, 14, 1, '2016-07-15 07:05:57');
INSERT INTO `evento_img` VALUES (15, 'imagenes/eventos/05-1-jpg-1468584367.jpg', 2, 15, 1, '2016-07-15 07:06:07');
INSERT INTO `evento_img` VALUES (16, 'imagenes/eventos/06-jpg-1468584390.jpg', 2, 16, 1, '2016-07-15 07:06:30');
INSERT INTO `evento_img` VALUES (18, 'imagenes/eventos/09-jpg-1468584408.jpg', 2, 18, 1, '2016-07-15 07:06:48');
INSERT INTO `evento_img` VALUES (19, 'imagenes/eventos/01-jpg-1468595077.jpg', 2, 19, 1, '2016-07-15 10:04:37');
INSERT INTO `evento_img` VALUES (20, 'imagenes/eventos/02-jpg-1468595096.jpg', 2, 20, 1, '2016-07-15 10:04:56');
INSERT INTO `evento_img` VALUES (21, 'imagenes/eventos/03-jpg-1468595218.jpg', 2, 21, 1, '2016-07-15 10:06:58');
INSERT INTO `evento_img` VALUES (22, 'imagenes/eventos/04-jpg-1468595231.jpg', 2, 22, 1, '2016-07-15 10:07:11');
INSERT INTO `evento_img` VALUES (23, 'imagenes/eventos/05-jpg-1468595476.jpg', 2, 23, 1, '2016-07-15 10:11:16');
INSERT INTO `evento_img` VALUES (24, 'imagenes/eventos/06-jpg-1468595590.jpg', 2, 24, 1, '2016-07-15 10:13:10');
INSERT INTO `evento_img` VALUES (25, 'imagenes/eventos/01-jpg-1468595836.jpg', 3, 25, 1, '2016-07-15 10:17:16');
INSERT INTO `evento_img` VALUES (26, 'imagenes/eventos/02-jpg-1468595985.jpg', 3, 26, 1, '2016-07-15 10:19:45');
INSERT INTO `evento_img` VALUES (27, 'imagenes/eventos/03-jpg-1468596005.jpg', 3, 27, 1, '2016-07-15 10:20:05');
INSERT INTO `evento_img` VALUES (28, 'imagenes/eventos/04-jpg-1468596090.jpg', 3, 28, 1, '2016-07-15 10:21:30');
INSERT INTO `evento_img` VALUES (29, 'imagenes/eventos/06-jpg-1468596175.jpg', 3, 29, 1, '2016-07-15 10:22:55');
INSERT INTO `evento_img` VALUES (30, 'imagenes/eventos/05-jpg-1468596190.jpg', 3, 30, 1, '2016-07-15 10:23:10');
INSERT INTO `evento_img` VALUES (31, 'imagenes/eventos/02-jpg-1468596848.jpg', 3, 31, 1, '2016-07-15 10:34:08');
INSERT INTO `evento_img` VALUES (32, 'imagenes/eventos/05-jpg-1468597176.jpg', 3, 32, 1, '2016-07-15 10:39:36');
INSERT INTO `evento_img` VALUES (33, 'imagenes/eventos/06-jpg-1468597347.jpg', 3, 33, 1, '2016-07-15 10:42:27');
INSERT INTO `evento_img` VALUES (34, 'imagenes/eventos/03-jpg-1468597366.jpg', 3, 34, 1, '2016-07-15 10:42:46');
INSERT INTO `evento_img` VALUES (35, 'imagenes/eventos/01-jpg-1468599126.jpg', 4, 35, 1, '2016-07-15 11:12:06');
INSERT INTO `evento_img` VALUES (36, 'imagenes/eventos/02-jpg-1468599136.jpg', 4, 36, 1, '2016-07-15 11:12:16');
INSERT INTO `evento_img` VALUES (37, 'imagenes/eventos/03-jpg-1468599143.jpg', 4, 37, 1, '2016-07-15 11:12:23');
INSERT INTO `evento_img` VALUES (38, 'imagenes/eventos/04-jpg-1468599148.jpg', 4, 38, 1, '2016-07-15 11:12:28');
INSERT INTO `evento_img` VALUES (39, 'imagenes/eventos/05-jpg-1468599155.jpg', 4, 39, 1, '2016-07-15 11:12:35');
INSERT INTO `evento_img` VALUES (40, 'imagenes/eventos/06-jpg-1468599160.jpg', 4, 40, 1, '2016-07-15 11:12:40');
INSERT INTO `evento_img` VALUES (41, 'imagenes/eventos/07-jpg-1468599165.jpg', 4, 41, 1, '2016-07-15 11:12:45');
INSERT INTO `evento_img` VALUES (42, 'imagenes/eventos/08-jpg-1468599168.jpg', 4, 42, 1, '2016-07-15 11:12:48');
INSERT INTO `evento_img` VALUES (43, 'imagenes/eventos/09-jpg-1468599174.jpg', 4, 43, 1, '2016-07-15 11:12:54');
INSERT INTO `evento_img` VALUES (44, 'imagenes/eventos/camisacos-oct-2017-1.jpg', 5, 44, 1, '2017-11-07 09:27:22');
INSERT INTO `evento_img` VALUES (45, 'imagenes/eventos/camisacos-oct-2017-2.jpg', 5, 45, 1, '2017-11-07 09:27:22');
INSERT INTO `evento_img` VALUES (46, 'imagenes/eventos/activ-olmos-oct-2017-1.jpg', 6, 46, 1, '2017-11-07 16:42:02');
INSERT INTO `evento_img` VALUES (47, 'imagenes/eventos/activ-olmos-oct-2017-2.jpg', 6, 47, 1, '2017-11-07 16:42:02');
INSERT INTO `evento_img` VALUES (48, 'imagenes/eventos/activ-olmos-oct-2017-3.jpg', 6, 48, 1, '2017-11-07 16:42:02');
INSERT INTO `evento_img` VALUES (49, 'imagenes/eventos/mis-cumbre-oct-2017.jpg', 7, 49, 1, '2017-11-07 16:47:43');
INSERT INTO `evento_img` VALUES (50, 'imagenes/eventos/expo-cumbre-oct-2017.jpg', 8, 50, 1, '2017-11-07 16:51:10');
INSERT INTO `evento_img` VALUES (51, 'imagenes/eventos/seminarios-magistrales-17/cha1.jpg', 9, 1, 1, '2017-12-05 00:08:37');
INSERT INTO `evento_img` VALUES (52, 'imagenes/eventos/seminarios-magistrales-17/cha2.jpg', 9, 2, 1, '2017-12-05 00:08:37');
INSERT INTO `evento_img` VALUES (53, 'imagenes/eventos/seminarios-magistrales-17/cha3.jpg', 9, 3, 1, '2017-12-05 00:09:01');
INSERT INTO `evento_img` VALUES (54, 'imagenes/eventos/seminarios-magistrales-17/cha4.jpg', 9, 4, 1, '2017-12-05 00:09:01');
INSERT INTO `evento_img` VALUES (55, 'imagenes/eventos/seminarios-magistrales-17/cha5.jpg', 9, 5, 1, '2017-12-05 00:09:11');
INSERT INTO `evento_img` VALUES (56, 'imagenes/eventos/conf-prensa-nov17/con-prensa-1.jpg', 10, 1, 1, '2017-12-05 00:15:36');
INSERT INTO `evento_img` VALUES (57, 'imagenes/eventos/conf-prensa-nov17/con-prensa-2.jpg', 10, 2, 1, '2017-12-05 00:15:36');
INSERT INTO `evento_img` VALUES (58, 'imagenes/eventos/conf-prensa-nov17/con-prensa-3.jpg', 10, 3, 1, '2017-12-05 00:15:36');
INSERT INTO `evento_img` VALUES (59, 'imagenes/eventos/conf-prensa-nov17/con-prensa-4.jpg', 10, 4, 1, '2017-12-05 00:15:36');
INSERT INTO `evento_img` VALUES (60, 'imagenes/eventos/cumbrematch-nov17/cumbre-match-1.jpg', 11, 1, 1, '2017-12-05 00:20:20');
INSERT INTO `evento_img` VALUES (61, 'imagenes/eventos/cumbrematch-nov17/cumbre-match-2.jpg', 11, 2, 1, '2017-12-05 00:20:20');
INSERT INTO `evento_img` VALUES (62, 'imagenes/eventos/cumbrematch-nov17/cumbre-match-3.jpg', 11, 3, 1, '2017-12-05 00:20:20');
INSERT INTO `evento_img` VALUES (70, 'imagenes/eventos/expocumbre-2017/expocumbre-1.jpg', 12, 1, 1, '2017-12-05 00:26:05');
INSERT INTO `evento_img` VALUES (71, 'imagenes/eventos/expocumbre-2017/expocumbre-2.jpg', 12, 2, 1, '2017-12-05 00:26:05');
INSERT INTO `evento_img` VALUES (72, 'imagenes/eventos/expocumbre-2017/expocumbre-3.jpg', 12, 3, 1, '2017-12-05 00:26:05');
INSERT INTO `evento_img` VALUES (73, 'imagenes/eventos/expocumbre-2017/expocumbre-4.jpg', 12, 4, 1, '2017-12-05 00:26:05');
INSERT INTO `evento_img` VALUES (74, 'imagenes/eventos/expocumbre-2017/expocumbre-5.jpg', 12, 5, 1, '2017-12-05 00:26:05');
INSERT INTO `evento_img` VALUES (75, 'imagenes/eventos/expocumbre-2017/expocumbre-6.jpg', 12, 6, 1, '2017-12-05 00:26:17');
INSERT INTO `evento_img` VALUES (76, 'imagenes/eventos/fiesta-gala-2017/1.jpg', 13, 1, 1, '2017-12-05 00:32:51');
INSERT INTO `evento_img` VALUES (77, 'imagenes/eventos/fiesta-gala-2017/2.jpg', 13, 2, 1, '2017-12-05 00:32:51');
INSERT INTO `evento_img` VALUES (78, 'imagenes/eventos/fiesta-gala-2017/3.jpg', 13, 3, 1, '2017-12-05 00:32:51');
INSERT INTO `evento_img` VALUES (79, 'imagenes/eventos/fiesta-gala-2017/4.jpg', 13, 4, 1, '2017-12-05 00:32:51');
INSERT INTO `evento_img` VALUES (80, 'imagenes/eventos/fiesta-gala-2017/5.jpg', 13, 5, 1, '2017-12-05 00:32:51');
INSERT INTO `evento_img` VALUES (81, 'imagenes/eventos/guerra-de-cocinas/1.jpg', 14, 1, 1, '2017-12-05 00:36:53');
INSERT INTO `evento_img` VALUES (82, 'imagenes/eventos/guerra-de-cocinas/2.jpg', 14, 2, 1, '2017-12-05 00:36:53');
INSERT INTO `evento_img` VALUES (83, 'imagenes/eventos/guerra-de-cocinas/3.jpg', 14, 3, 1, '2017-12-05 00:36:53');
INSERT INTO `evento_img` VALUES (84, 'imagenes/eventos/guerra-de-cocinas/4.jpg', 14, 4, 1, '2017-12-05 00:36:53');
INSERT INTO `evento_img` VALUES (85, 'imagenes/eventos/guerra-de-cocinas/5.jpg', 14, 5, 1, '2017-12-05 00:37:07');
INSERT INTO `evento_img` VALUES (86, 'imagenes/eventos/miss-cumbre-17/1.jpg', 15, 1, 1, '2017-12-05 00:43:14');
INSERT INTO `evento_img` VALUES (87, 'imagenes/eventos/miss-cumbre-17/2.jpg', 15, 2, 1, '2017-12-05 00:43:14');
INSERT INTO `evento_img` VALUES (88, 'imagenes/eventos/miss-cumbre-17/3.jpg', 15, 3, 1, '2017-12-05 00:43:14');
INSERT INTO `evento_img` VALUES (89, 'imagenes/eventos/miss-cumbre-17/4.jpg', 15, 4, 1, '2017-12-05 00:43:14');
INSERT INTO `evento_img` VALUES (90, 'imagenes/eventos/miss-cumbre-17/5.jpg', 15, 5, 1, '2017-12-05 00:43:14');
INSERT INTO `evento_img` VALUES (91, 'imagenes/eventos/web-01-1-jpg-1545418300.jpg', 17, 51, 1, '2018-12-21 13:51:40');
INSERT INTO `evento_img` VALUES (92, 'imagenes/eventos/web-01-jpg-1545418301.jpg', 17, 52, 1, '2018-12-21 13:51:41');
INSERT INTO `evento_img` VALUES (93, 'imagenes/eventos/willay-01-jpg-1545418304.jpg', 17, 53, 1, '2018-12-21 13:51:44');

-- ----------------------------
-- Table structure for facultad
-- ----------------------------
DROP TABLE IF EXISTS `facultad`;
CREATE TABLE `facultad`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `descripcion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `imagen` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1,
  `fecha` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `activo` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of facultad
-- ----------------------------
INSERT INTO `facultad` VALUES (1, 'a:1:{s:2:\"es\";s:28:\"CIENCIAS DE LA COMUNICACIÓN\";}', 'a:1:{s:2:\"es\";s:34:\"Ciencias de la comunicaci&oacute;n\";}', 'imagenes/facultad/carrera_1.jpg', 1, 1, '2015-10-30 02:37:33', 0);

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups`  (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES (1, 'admin', 'Administrator');
INSERT INTO `groups` VALUES (2, 'members', 'General User');

-- ----------------------------
-- Table structure for home
-- ----------------------------
DROP TABLE IF EXISTS `home`;
CREATE TABLE `home`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `url` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `imagen` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `titulo_2` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `url_2` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `imagen_2` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `titulo_3` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `url_3` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `imagen_3` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `convenios` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1,
  `fecha` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of home
-- ----------------------------
INSERT INTO `home` VALUES (1, 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:24:\"./carrera-de-gastronomia\";}', 'imagenes/home/home_1.jpg', 'a:1:{s:2:\"es\";s:24:\"<h3>Cursos Cortos</h3>\r\n\";}', 'a:1:{s:2:\"es\";s:25:\"./diplomado-de-pasteleria\";}', 'imagenes/home/home_2.jpg', 'a:1:{s:2:\"es\";s:47:\"<h3>Chefs&nbsp;<span>Instructores</span></h3>\r\n\";}', 'a:1:{s:2:\"es\";s:10:\"./talleres\";}', 'imagenes/home/home_3_1.jpg', 'a:1:{s:2:\"es\";s:706:\"<p>Cumbre ahora comparte su marca con <strong><a href=\"http://www.toques-auvergne.com\" target=\"_blank\">Les Toques D&#39; Auvergne</a></strong> asociaci&oacute;n de restaurantes franceses categorizados con estrella Michelin. Cumplimos los est&aacute;ndares para titular alumnos siguiendo las pautas m&aacute;s rigurosas de los mejores establecimientos de Francia, la &ldquo;meca&rdquo; de la t&eacute;cnica gastron&oacute;mica mundial. Nuestros estudiantes y egresados pueden tambi&eacute;n acceder a pasant&iacute;as y pr&aacute;cticas. Para que tu pasi&oacute;n por la cocina sea el alma de tu futuro.&nbsp;<a href=\"http://www.toques-auvergne.com/\" target=\"_blank\">http://www.toques-auvergne.com</a></p>\r\n\";}', 0, 1, '2018-07-24 18:43:31');

-- ----------------------------
-- Table structure for login_attempts
-- ----------------------------
DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` int(11) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for mensaje
-- ----------------------------
DROP TABLE IF EXISTS `mensaje`;
CREATE TABLE `mensaje`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `imagen` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `descripcion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `descripcion_2` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `slogan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mision` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `vision` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1,
  `fecha` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mensaje
-- ----------------------------
INSERT INTO `mensaje` VALUES (1, 'a:1:{s:2:\"es\";s:24:\"BIENVENIDOS AL NUEVO ISP\";}', 'imagenes/mensaje/foto_promotor.png', 'a:1:{s:2:\"es\";s:2396:\"<p>En nombre de <span>INSTITUTO ISP</span> queremos darles una cordial bienvenida y esperamos formar parte de su tan anhelado futuro profesional.</p>\r\n\r\n<p>En <span>ISP</span> tenemos propuestas educativas realmente innovadoras, para que puedas alcanzar en poco tiempo, un adecuado grado de conocimientos y as&iacute; poder insertarte con &eacute;xito en el cambiante mercado laboral. Acad&eacute;micamente, estamos estructurados de tal manera que, cada alumno reciba una formaci&oacute;n integral y para ello consideramos que la teor&iacute;a y la pr&aacute;ctica son la conjunci&oacute;n ideal para alcanzar los objetivos requeridos. Hoy la capacitaci&oacute;n es indispensable, pero para que ella sea efectiva es necesario adecuarla a los cambios continuos que se producen en nuestros d&iacute;as. Por ello nuestro Instituto est&aacute; en contacto con los centros de estudio m&aacute;s importantes del mundo, lo cual nos permite evaluar y enriquecer permanentemente nuestros planes de estudio.</p>\r\n\r\n<p>El Instituto de Educaci&oacute;n Superior Tecnol&oacute;gico Privado <span>ISP</span>, es una Instituci&oacute;n Educativa de car&aacute;cter privado, con m&aacute;s de 28 a&ntilde;os formando profesionales l&iacute;deres en las Ciencias de la Comunicaci&oacute;n, creado mediante R.M. N&ordm; 501-86-ED del 07 de Agosto de 1986, Resoluci&oacute;n Directoral N&ordm; 6950-86-ED DEL 17 de Diciembre de 1986 y Revalidado con R.D. N&ordm; 0089-2006-ED del 09 de Febrero del 2006, contamos tambi&eacute;n con Certificado de Adecuaci&oacute;n de Estudios de las Carreras Profesionales al nuevo Dise&ntilde;o Curricular B&aacute;sico N&ordm; 238-2014-DESTP, con fecha 08 de Julio del 2014 y Constancia de Adecuaci&oacute;n Institucional N&ordm; 565, de fecha 24 de Setiembre del 2014.</p>\r\n\r\n<p>El funcionamiento del Instituto se rige por lo establecido en la Ley General de Educaci&oacute;n N&ordm; 28044, el Reglamento de Apertura y Funcionamiento de Institutos Superiores Tecnol&oacute;gicos y Escuelas Superiores no Estatales aprobado por D.S. N&ordm; 015-87-ED, las Normas de Organizaci&oacute;n y Funciones de los Institutos Superiores Tecnol&oacute;gicos aprobado por R.M. N&ordm; 641-83 y otras de car&aacute;cter T&eacute;cnico-Pedag&oacute;gico y Administrativo expedidas por la Direcci&oacute;n General de Educaci&oacute;n Superior, as&iacute; como el D.S. N&ordm; 014-2002-ED.</p>\r\n\";}', 'a:1:{s:2:\"es\";s:1185:\"<div class=\"col-xs-12\">\r\n<p>Ello significa no solamente la partida de nacimiento de nuestra vida institucional, sino tambi&eacute;n el cumplimiento del anhelo largamente esperado por los locutores peruanos: el reconocimiento de su actividad como una PROFESI&Oacute;N. En realidad, este hecho no es por pura coincidencia. Y es que siempre estuvimos a la vanguardia en el mundo de las comunicaciones en el pa&iacute;s, pues somos creadores de otra carrera profesional: &ldquo;Periodismo Radial y Televisivo&rdquo;.</p>\r\n\r\n<p>Hoy en d&iacute;a somos una instituci&oacute;n educativa s&oacute;lida, que desarrolla al m&aacute;ximo el talento de nuestros alumnos para convertirlos en profesionales l&iacute;deres; por ese motivo hemos redoblado esfuerzos y tecnolog&iacute;as.</p>\r\n\r\n<p>Ingresamos a nuestra tercera d&eacute;cada renovando nuestro compromiso de formar los mejores profesionales, esa motivaci&oacute;n crece y la encontramos en la m&iacute;stica de nuestros egresados que triunfan en los medios de comunicaci&oacute;n del pa&iacute;s y el extranjero; as&iacute; como en el esfuerzo y dedicaci&oacute;n de nuestros estudiantes. &iexcl; Bienvenidos al nuevo ISP!</p>\r\n</div>\r\n\";}', 'a:1:{s:2:\"es\";s:424:\"El 7 de agosto de 1986, el ministro de educaci&oacute;n por Resoluci&oacute;n Ministerial N&ordm; 501-86-ED, reconoce como carrera profesional &ldquo;Locuci&oacute;n y Comunicaci&oacute;n Radial y Televisiva&rdquo;; propuesta dise&ntilde;ada por la Asociaci&oacute;n Educativa &ldquo;Sistema Per&uacute;&rdquo;, a la vez que autoriza su funcionamiento como Instituto Superior Tecnol&oacute;gico Privado SISTEMAS PER&Uacute;.\";}', 'a:1:{s:2:\"es\";s:344:\"<p>Formar profesionales t&eacute;cnicos; investigadores, creativos, competentes y comprometidos en la soluci&oacute;n de problemas en el campo de las comunicaciones. Generando y desarrollando t&eacute;cnicas con conocimientos cient&iacute;ficos, human&iacute;sticos y tecnol&oacute;gicos a trav&eacute;s de los cuales buscamos soluciones.</p>\r\n\";}', 'a:1:{s:2:\"es\";s:191:\"<p>Hacer de cada uno de nuestros estudiantes, un profesional a carta cabal que cumpla un rol importante con &eacute;tica y moral al servicio de la sociedad. Comprometidos con la verdad.</p>\r\n\";}', 1, 1, '2015-11-04 22:51:54');

-- ----------------------------
-- Table structure for noticia
-- ----------------------------
DROP TABLE IF EXISTS `noticia`;
CREATE TABLE `noticia`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `descripcion` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `imagen` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `url` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `item` int(11) NULL DEFAULT NULL,
  `estado` tinyint(1) UNSIGNED NULL DEFAULT 1,
  `created_up` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  `publicar` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'S',
  `glosa` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of noticia
-- ----------------------------
INSERT INTO `noticia` VALUES (1, 'Conferencias Magistrales', '', 'imagenes/eventos/conferencias-magistrales.jpg', 'conferencias-magistrales', 1, 1, '2019-03-02 13:31:24', 'S', '');
INSERT INTO `noticia` VALUES (2, 'Clases Magistrales', '', 'imagenes/eventos/clases-magistrales.jpg', 'clases-magistrales', 2, 1, '2019-03-02 13:31:24', 'S', '');
INSERT INTO `noticia` VALUES (3, 'Expo Cumbre', '', 'imagenes/eventos/expo-cumbre_1.jpg', 'expo-cumbre', 3, 1, '2019-03-02 13:31:24', 'S', '');
INSERT INTO `noticia` VALUES (4, 'Fiesta de Gala', '', 'imagenes/eventos/fiesta-de-gala.jpg', 'fiesta-de-gala', 4, 1, '2019-03-02 13:31:24', 'S', '');
INSERT INTO `noticia` VALUES (5, 'Imposición de camisacos I Ciclo', 'Nuestros estudiantes de primer ciclo recibieron su primera chaqueta, s&amp;iacute;mbolo de integridad y respeto hacia la pronta profesi&amp;oacute;n que los acompa&amp;ntilde;ar&amp;aacute; siempre.', 'imagenes/eventos/im-1.jpg', 'imposicion-de-camisacos-i-ciclo', 5, 1, '2019-03-02 13:31:24', 'S', '');
INSERT INTO `noticia` VALUES (6, 'Activación Olmos', 'Activaci&amp;oacute;n en el Centro de esparcimiento &lt;strong&gt;&amp;ldquo;Los Algarrobos&amp;rdquo;&lt;/strong&gt; &amp;ndash; Olmos a las 9:00 am, el d&amp;iacute;a 22 de Septiembre del presente. El motivo de nuestra presencia fue participar de la feria vocacional exponiendo nuestra carrera profesional de gastronom&amp;iacute;a con la que cuenta la instituci&amp;oacute;n.&lt;br /&gt;<br />\r\n&amp;nbsp;', 'imagenes/eventos/im-2.jpg', 'activacion-olmos', 6, 1, '2019-03-02 13:31:24', 'S', '');
INSERT INTO `noticia` VALUES (7, 'Miss Cumbre', 'La Escuela Peruana de Gastronom&amp;iacute;a y Arte Culinario &amp;ldquo;CUMBRE&amp;rdquo;, organiza en el marco de su XI Aniversario Institucional &lt;strong&gt;&amp;ldquo;MISS CUMBRE 2017&amp;rdquo;, &lt;/strong&gt;en la que se busca elegir a la dama que habr&amp;aacute; de representar a la singular belleza gastron&amp;oacute;mica, as&amp;iacute; como tambi&amp;eacute;n sus principios y virtudes.', 'imagenes/eventos/im-3.jpg', 'miss-cumbre', 7, 1, '2019-03-02 13:31:24', 'S', '');
INSERT INTO `noticia` VALUES (8, 'Cumbrematch', 'La Escuela Peruana de Gastronom&amp;iacute;a y Arte Culinario &amp;ldquo;CUMBRE&amp;rdquo;, organiza en el marco de su XI Aniversario Institucional el &lt;strong&gt;CUMBREMATCH 2017, Copa &amp;ldquo;INGENIA&amp;rdquo;&lt;/strong&gt; con la participaci&amp;oacute;n de todos los estudiantes y miembros de la instituci&amp;oacute;n con el prop&amp;oacute;sito de fomentar la pr&amp;aacute;ctica del deporte, la sana competencia; as&amp;iacute; como, estrechar los lazos de confraternidad que permitan un desarrollo integral del estudiante y la identificaci&amp;oacute;n con su Escuela.', 'imagenes/eventos/im-4.jpg', 'cumbrematch', 8, 1, '2019-03-02 13:31:24', 'S', '');
INSERT INTO `noticia` VALUES (9, 'Seminario Magistral - Cumbre 2017', '', 'imagenes/eventos/cha-cha.jpg', 'seminario-magistral-cumbre-2017', 9, 1, '2019-03-02 13:31:24', 'S', '');
INSERT INTO `noticia` VALUES (10, 'Conferencia de Prensa', '', 'imagenes/eventos/con-prensa_1.jpg', 'conferencia-de-prensa', 10, 1, '2019-03-02 13:31:25', 'S', '');
INSERT INTO `noticia` VALUES (11, 'CUMBRE MATCH', '', 'imagenes/eventos/cumbremacth.jpg', 'cumbre-match', 11, 1, '2019-03-02 13:31:25', 'S', '');
INSERT INTO `noticia` VALUES (12, 'EXPOCUMBRE 2017', '', 'imagenes/eventos/expocumbre.jpg', 'expocumbre-2017', 12, 1, '2019-03-02 13:31:25', 'S', '');
INSERT INTO `noticia` VALUES (13, 'Fiesta de Gala 2017', '', 'imagenes/eventos/fiesta-gala.jpg', 'fiesta-de-gala-2017', 13, 1, '2019-03-02 13:31:25', 'S', '');
INSERT INTO `noticia` VALUES (14, 'Guerra de cocinas', '', 'imagenes/eventos/guerra-de-cocinas.jpg', 'guerra-de-cocinas', 14, 1, '2019-03-02 13:31:25', 'S', '');
INSERT INTO `noticia` VALUES (15, 'Miss Cumbre 2017', '', 'imagenes/eventos/miss-cumbre.jpg', 'miss-cumbre-2017', 15, 1, '2019-03-02 13:31:25', 'S', '');
INSERT INTO `noticia` VALUES (16, 'I Programa de Actualización Docente y Fortalecimiento de Competencias Pedagógicas', '', 'imagenes/eventos/x-min.jpg', 'i-programa-de-actualizacion-docente-y-fortalecimiento-de-competencias-pedagogicas', 16, 1, '2019-03-02 13:31:25', 'S', '');
INSERT INTO `noticia` VALUES (17, 'Campaña de Protección ambiental', '', 'imagenes/eventos/x.jpg', 'campanna-de-proteccion-ambiental', 17, 1, '2019-03-02 13:31:25', 'S', '');
INSERT INTO `noticia` VALUES (18, 'CHARLA MAGISTRAL', '', 'http://www.escuelacumbre.edu.pe/2018/imagenes/nodisponible.jpg', 'charla-magistral', 18, 1, '2019-03-02 13:31:25', 'S', '');
INSERT INTO `noticia` VALUES (19, 'CHARLA MAGISTRAL 2', '', 'http://www.escuelacumbre.edu.pe/2018/imagenes/nodisponible.jpg', 'charla-magistral-2', 19, 1, '2019-03-02 13:31:25', 'S', '');

-- ----------------------------
-- Table structure for noticia_img
-- ----------------------------
DROP TABLE IF EXISTS `noticia_img`;
CREATE TABLE `noticia_img`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `noticia_id` int(11) UNSIGNED NULL DEFAULT NULL,
  `imagen` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `item` int(11) NULL DEFAULT 0,
  `estado` tinyint(1) NULL DEFAULT 1,
  `created_up` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 113 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of noticia_img
-- ----------------------------
INSERT INTO `noticia_img` VALUES (3, 1, 'images/noticia/03-jpg-1468583251.jpg', 3, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (4, 1, 'images/noticia/04-jpg-1468583252.jpg', 4, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (5, 1, 'images/noticia/05-jpg-1468583252.jpg', 5, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (6, 1, 'images/noticia/05-1-jpg-1468583253.jpg', 6, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (7, 1, 'images/noticia/05-2-jpg-1468583253.jpg', 7, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (8, 1, 'images/noticia/06-jpg-1468583254.jpg', 8, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (9, 1, 'images/noticia/07-jpg-1468583254.jpg', 9, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (10, 1, 'images/noticia/08-jpg-1468583255.jpg', 10, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (13, 2, 'images/noticia/03-jpg-1468584349.jpg', 13, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (14, 2, 'images/noticia/05-jpg-1468584357.jpg', 14, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (15, 2, 'images/noticia/05-1-jpg-1468584367.jpg', 15, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (16, 2, 'images/noticia/06-jpg-1468584390.jpg', 16, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (18, 2, 'images/noticia/09-jpg-1468584408.jpg', 18, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (19, 2, 'images/noticia/01-jpg-1468595077.jpg', 19, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (20, 2, 'images/noticia/02-jpg-1468595096.jpg', 20, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (21, 2, 'images/noticia/03-jpg-1468595218.jpg', 21, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (22, 2, 'images/noticia/04-jpg-1468595231.jpg', 22, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (23, 2, 'images/noticia/05-jpg-1468595476.jpg', 23, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (24, 2, 'images/noticia/06-jpg-1468595590.jpg', 24, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (25, 3, 'images/noticia/01-jpg-1468595836.jpg', 25, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (26, 3, 'images/noticia/02-jpg-1468595985.jpg', 26, 1, '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES (27, 3, 'images/noticia/03-jpg-1468596005.jpg', 27, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (28, 3, 'images/noticia/04-jpg-1468596090.jpg', 28, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (29, 3, 'images/noticia/06-jpg-1468596175.jpg', 29, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (30, 3, 'images/noticia/05-jpg-1468596190.jpg', 30, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (31, 3, 'images/noticia/02-jpg-1468596848.jpg', 31, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (32, 3, 'images/noticia/05-jpg-1468597176.jpg', 32, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (33, 3, 'images/noticia/06-jpg-1468597347.jpg', 33, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (34, 3, 'images/noticia/03-jpg-1468597366.jpg', 34, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (35, 4, 'images/noticia/01-jpg-1468599126.jpg', 35, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (36, 4, 'images/noticia/02-jpg-1468599136.jpg', 36, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (37, 4, 'images/noticia/03-jpg-1468599143.jpg', 37, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (38, 4, 'images/noticia/04-jpg-1468599148.jpg', 38, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (39, 4, 'images/noticia/05-jpg-1468599155.jpg', 39, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (40, 4, 'images/noticia/06-jpg-1468599160.jpg', 40, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (41, 4, 'images/noticia/07-jpg-1468599165.jpg', 41, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (42, 4, 'images/noticia/08-jpg-1468599168.jpg', 42, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (43, 4, 'images/noticia/09-jpg-1468599174.jpg', 43, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (44, 5, 'images/noticia/camisacos-oct-2017-1.jpg', 44, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (45, 5, 'images/noticia/camisacos-oct-2017-2.jpg', 45, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (46, 6, 'images/noticia/activ-olmos-oct-2017-1.jpg', 46, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (47, 6, 'images/noticia/activ-olmos-oct-2017-2.jpg', 47, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (48, 6, 'images/noticia/activ-olmos-oct-2017-3.jpg', 48, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (49, 7, 'images/noticia/mis-cumbre-oct-2017.jpg', 49, 1, '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES (50, 8, 'images/noticia/expo-cumbre-oct-2017.jpg', 50, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (51, 9, 'images/noticia/seminarios-magistrales-17/cha1.jpg', 1, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (52, 9, 'images/noticia/seminarios-magistrales-17/cha2.jpg', 2, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (53, 9, 'images/noticia/seminarios-magistrales-17/cha3.jpg', 3, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (54, 9, 'images/noticia/seminarios-magistrales-17/cha4.jpg', 4, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (55, 9, 'images/noticia/seminarios-magistrales-17/cha5.jpg', 5, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (56, 10, 'images/noticia/conf-prensa-nov17/con-prensa-1.jpg', 1, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (57, 10, 'images/noticia/conf-prensa-nov17/con-prensa-2.jpg', 2, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (58, 10, 'images/noticia/conf-prensa-nov17/con-prensa-3.jpg', 3, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (59, 10, 'images/noticia/conf-prensa-nov17/con-prensa-4.jpg', 4, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (60, 11, 'images/noticia/cumbrematch-nov17/cumbre-match-1.jpg', 1, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (61, 11, 'images/noticia/cumbrematch-nov17/cumbre-match-2.jpg', 2, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (62, 11, 'images/noticia/cumbrematch-nov17/cumbre-match-3.jpg', 3, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (70, 12, 'images/noticia/expocumbre-2017/expocumbre-1.jpg', 1, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (71, 12, 'images/noticia/expocumbre-2017/expocumbre-2.jpg', 2, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (72, 12, 'images/noticia/expocumbre-2017/expocumbre-3.jpg', 3, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (73, 12, 'images/noticia/expocumbre-2017/expocumbre-4.jpg', 4, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (74, 12, 'images/noticia/expocumbre-2017/expocumbre-5.jpg', 5, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (75, 12, 'images/noticia/expocumbre-2017/expocumbre-6.jpg', 6, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (76, 13, 'images/noticia/fiesta-gala-2017/1.jpg', 1, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (77, 13, 'images/noticia/fiesta-gala-2017/2.jpg', 2, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (78, 13, 'images/noticia/fiesta-gala-2017/3.jpg', 3, 1, '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES (79, 13, 'images/noticia/fiesta-gala-2017/4.jpg', 4, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (80, 13, 'images/noticia/fiesta-gala-2017/5.jpg', 5, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (81, 14, 'images/noticia/guerra-de-cocinas/1.jpg', 1, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (82, 14, 'images/noticia/guerra-de-cocinas/2.jpg', 2, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (83, 14, 'images/noticia/guerra-de-cocinas/3.jpg', 3, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (84, 14, 'images/noticia/guerra-de-cocinas/4.jpg', 4, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (85, 14, 'images/noticia/guerra-de-cocinas/5.jpg', 5, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (86, 15, 'images/noticia/miss-cumbre-17/1.jpg', 1, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (87, 15, 'images/noticia/miss-cumbre-17/2.jpg', 2, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (88, 15, 'images/noticia/miss-cumbre-17/3.jpg', 3, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (89, 15, 'images/noticia/miss-cumbre-17/4.jpg', 4, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (90, 15, 'images/noticia/miss-cumbre-17/5.jpg', 5, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (91, 17, 'images/noticia/web-01-1-jpg-1545418300.jpg', 51, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (92, 17, 'images/noticia/web-01-jpg-1545418301.jpg', 52, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (93, 17, 'images/noticia/willay-01-jpg-1545418304.jpg', 53, 1, '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES (94, 1, 'images/noticia/conferencias-magistrales.jpg', 0, 1, '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES (95, 2, 'images/noticia/clases-magistrales.jpg', 0, 1, '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES (96, 3, 'images/noticia/expo-cumbre_1.jpg', 0, 1, '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES (97, 4, 'images/noticia/fiesta-de-gala.jpg', 0, 1, '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES (98, 5, 'images/noticia/im-1.jpg', 0, 1, '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES (99, 6, 'images/noticia/im-2.jpg', 0, 1, '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES (100, 7, 'images/noticia/im-3.jpg', 0, 1, '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES (101, 8, 'images/noticia/im-4.jpg', 0, 1, '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES (102, 9, 'images/noticia/cha-cha.jpg', 0, 1, '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES (103, 10, 'images/noticia/con-prensa_1.jpg', 0, 1, '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES (104, 11, 'images/noticia/cumbremacth.jpg', 0, 1, '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES (105, 12, 'images/noticia/expocumbre.jpg', 0, 1, '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES (106, 13, 'images/noticia/fiesta-gala.jpg', 0, 1, '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES (107, 14, 'images/noticia/guerra-de-cocinas.jpg', 0, 1, '2019-03-02 13:40:44');
INSERT INTO `noticia_img` VALUES (108, 15, 'images/noticia/miss-cumbre.jpg', 0, 1, '2019-03-02 13:40:44');
INSERT INTO `noticia_img` VALUES (109, 16, 'images/noticia/x-min.jpg', 0, 1, '2019-03-02 13:40:44');
INSERT INTO `noticia_img` VALUES (110, 17, 'images/noticia/x.jpg', 0, 1, '2019-03-02 13:40:44');
INSERT INTO `noticia_img` VALUES (111, 18, 'http://www.escuelacumbre.edu.pe/2018/imagenes/nodisponible.jpg', 0, 1, '2019-03-02 13:40:44');
INSERT INTO `noticia_img` VALUES (112, 19, 'http://www.escuelacumbre.edu.pe/2018/imagenes/nodisponible.jpg', 0, 1, '2019-03-02 13:40:44');

-- ----------------------------
-- Table structure for red
-- ----------------------------
DROP TABLE IF EXISTS `red`;
CREATE TABLE `red`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(125) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `subtitulo` varchar(125) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tipo` varchar(125) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `vacantes` varchar(125) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `requisitos` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `conocimientos` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `salario` varchar(125) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nombrecontacto` varchar(125) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `telefonocontacto` varchar(125) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `emailcontacto` varchar(125) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1,
  `fecha` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 135 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of red
-- ----------------------------
INSERT INTO `red` VALUES (134, 'a:1:{s:2:\"es\";s:13:\"Restaurantes \";}', 'a:1:{s:2:\"es\";s:20:\"El Sabor de la Pedro\";}', 'a:1:{s:2:\"es\";s:10:\"Prácticas\";}', 'a:1:{s:2:\"es\";s:2:\"02\";}', 'a:1:{s:2:\"es\";s:227:\"<ul>\r\n	<li><strong>Aptitudes:</strong> Comprometido, honesto, proactivo e Innovador.</li>\r\n	<li>Tiempo completo</li>\r\n	<li><strong>Direcci&oacute;n: </strong>Juan XXIII N&deg; 370 - Lambayeque ( frente a la UNPRG)</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:199:\"<ul>\r\n	<li>Platos criollos, platos de pescado y mariscos (preferente)</li>\r\n	<li>Preparaci&oacute;n de jugos frutales</li>\r\n	<li>Cotizaci&oacute;n de platos (costo de producci&oacute;n)</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:2:\"--\";}', 'a:1:{s:2:\"es\";s:35:\"Yurggen Salvador Bendezú Jáuregui\";}', 'a:1:{s:2:\"es\";s:9:\"939632397\";}', 'a:1:{s:2:\"es\";s:19:\"yurggenbj@gmail.com\";}', 5, 1, '2019-01-29 15:20:37');

-- ----------------------------
-- Table structure for slidehome
-- ----------------------------
DROP TABLE IF EXISTS `slidehome`;
CREATE TABLE `slidehome`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `subtitulo` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `descripcion` varchar(40) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `imagen` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `url` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `orden` int(11) NULL DEFAULT NULL,
  `estado` int(1) NULL DEFAULT 1,
  `fecha` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of slidehome
-- ----------------------------
INSERT INTO `slidehome` VALUES (13, 'Campus', 'Gastronómico', '', 'imagenes/home/slider-1_2.jpg', 'campus-gastronomico', 1, 1, '2016-07-04 23:52:09');
INSERT INTO `slidehome` VALUES (14, 'Carrera de ', 'Gastronomía', '', 'imagenes/home/slider-2.jpg', 'carrera-de-gastronomia', 2, 1, '2016-07-04 23:55:18');
INSERT INTO `slidehome` VALUES (15, 'Diplomado de', 'Pasteleria', '', 'imagenes/slidehome/slider-3.jpg', 'diplomado-de-pasteleria', 3, 1, '2016-07-04 23:53:54');

-- ----------------------------
-- Table structure for suscrito
-- ----------------------------
DROP TABLE IF EXISTS `suscrito`;
CREATE TABLE `suscrito`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `asunto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `telefono` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT '',
  `empresa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
  `mensaje` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `estado` int(1) NOT NULL DEFAULT 1,
  `created_up` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of suscrito
-- ----------------------------
INSERT INTO `suscrito` VALUES (1, 'Armando E', '', 'armandoaepp@gmail.com', '', '', 'mensaje de prueba', 1, '2019-02-13 10:02:29');
INSERT INTO `suscrito` VALUES (2, 'Armando E', '', 'armandoaepp@gmail.com', '', '', 'mensaje de prueba', 1, '2019-02-13 11:02:40');
INSERT INTO `suscrito` VALUES (3, 'Armando E', '', 'armandoaepp@gmail.com', '', '', 'Mensaje de prueba desde la web cumbre: CONTACTANOS', 1, '2019-02-13 11:02:38');
INSERT INTO `suscrito` VALUES (4, 'fedra nury more castro', '', 'fedranury30@gmail.com', '', '', 'como puedo hacer para solicitar mi certificado de  haber  <br />\r\nterminado mis estudios', 1, '2019-02-27 00:02:41');
INSERT INTO `suscrito` VALUES (5, 'Belén', '', 'belen.paicob@gmail.com', '', '', 'Buenos días quisiera saber sobre la carrera y sobre tbm sus pagos y su número telefónico no da', 1, '2019-02-27 09:02:31');
INSERT INTO `suscrito` VALUES (6, 'Gina Lisbeth Fernandez Montenegro', '', 'ginafernandezmontenegro@gmail.com', '', '', 'Buenas tardes, me gustaria que me informen si habran vacantes en Agosto.<br />\r\n<br />\r\nGracias', 1, '2019-02-27 13:02:12');
INSERT INTO `suscrito` VALUES (7, 'oscar archila', '', 'oscararchila1994@gmail.com', '', '', 'pa obtener informacion de los cursos? gracias', 1, '2019-02-28 17:02:42');

-- ----------------------------
-- Table structure for taller
-- ----------------------------
DROP TABLE IF EXISTS `taller`;
CREATE TABLE `taller`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `chef_id` int(10) UNSIGNED NULL DEFAULT 0,
  `titulo` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `descripcion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `imagen` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `certificacion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `titulos` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `titulacion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `duracion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `dia` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `horario` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `lugar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `precio` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `dirigido` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `sesiones` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `temas` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `url` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `item` int(11) NOT NULL,
  `glosa` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `publicar` char(1) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT 'S',
  `estado` int(1) NOT NULL DEFAULT 1,
  `created_up` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = Compact;

-- ----------------------------
-- Records of taller
-- ----------------------------
INSERT INTO `taller` VALUES (1, 0, 'MASA HOJALDRE Y SUS APLICACIONES', '&amp;lt;strong&amp;gt;3 SESIONES&amp;lt;/strong&amp;gt;', 'images/taller/1.jpg', '', '', '', '7, 8, 9 de agosto', '', '7:00 a 10:00 pm.', '', 'S/ 200', '', NULL, '', '', 1, '', 'S', 0, '2019-03-04 07:22:58');
INSERT INTO `taller` VALUES (2, 0, 'TORTAS MODERNAS', '&amp;lt;strong&amp;gt;3 SESIONES&amp;lt;/strong&amp;gt;&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\n&amp;amp;nbsp;', 'images/taller/2.jpg', '', '', '', '14, 15, 16 de agosto', '', '7:00 a 10:00 pm.', '', 'S/ 200', '', NULL, '', '', 2, '', 'S', 0, '2019-03-04 07:22:58');
INSERT INTO `taller` VALUES (3, 0, 'MESA DULCE', '&amp;lt;strong&amp;gt;3 SESIONES&amp;lt;/strong&amp;gt;', 'images/taller/3.jpg', '', '', '', '21, 22, 23 de agosto', '', '7:00 a 10:00 pm.', '', 'S/ 200', '', NULL, '', '', 3, '', 'S', 0, '2019-03-04 07:22:58');
INSERT INTO `taller` VALUES (4, 0, 'TALLER DE EMPRENDEDORES', '&amp;lt;strong&amp;gt;Sesi&amp;amp;oacute;n 1 &amp;amp;ndash; 2&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;B.P.M. buenas pr&amp;amp;aacute;cticas en manipulaci&amp;amp;oacute;n de alimentos&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Bruselina de chocolate&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Torta helada&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Torta tres leche&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Crema volteada&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;strong&amp;gt;Sesi&amp;amp;oacute;n 3 &amp;amp;ndash; 4&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Dise&amp;amp;ntilde;o y equipamiento de un taller de pasteler&amp;amp;iacute;a.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Alfajores de maicena y alfajores cubiertos de chocolate.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Postres de t&amp;amp;eacute;: brownies, magdalenas, bizcotelas.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Pay de lim&amp;amp;oacute;n con merengue italiano.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Pay de manzana con masa frola.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;strong&amp;gt;Sesi&amp;amp;oacute;n 5 &amp;amp;ndash; 6&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Gesti&amp;amp;oacute;n de compras y almac&amp;amp;eacute;n&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Bavarois de guindones&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Pionono&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Selva negra&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Souffl&amp;amp;eacute; de vainilla&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;strong&amp;gt;Sesi&amp;amp;oacute;n 7 &amp;amp;ndash; 8&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Costos de producci&amp;amp;oacute;n, costeo de recetas&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Red velvet cake frosting y relleno&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Torta damero cubierta con crema de chocolate y decorada con frutos del bosque&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;', 'images/taller/4.jpg', '', '', '', 'Lunes 11 hasta 26 febrero', '', '6 a 9 pm', '', 'S/ 500', '8 sesiones', NULL, '', '', 4, '', 'S', 1, '2019-03-04 07:22:59');
INSERT INTO `taller` VALUES (5, 0, 'COCINA PARA PRINCIPIANTES', '&amp;lt;strong&amp;gt;MODULO I&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;Sesi&amp;amp;oacute;n 1&amp;lt;/strong&amp;gt;: reconocimiento de utensilios, t&amp;amp;eacute;cnica de cortes&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\nFondos de cocci&amp;amp;oacute;n&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\nAderezos base&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\nMinestrone &amp;amp;ndash; estofado de pollo &amp;amp;ndash; limonada&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;Sesi&amp;amp;oacute;n 2&amp;lt;/strong&amp;gt;:&amp;amp;nbsp; principales m&amp;amp;eacute;todos de cocci&amp;amp;oacute;n&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\nPapa a la huanca&amp;amp;iacute;na, arroz con pollo, ensalada criolla, chicha morada&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\n&amp;amp;nbsp;&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\n&amp;amp;nbsp;&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;strong&amp;gt;MODULO II&amp;amp;nbsp;&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;Sesi&amp;amp;oacute;n 1 &amp;lt;/strong&amp;gt;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;strong&amp;gt;Vinagretas&amp;lt;/strong&amp;gt;&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\nEnsalada cesar y crutones&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\nAsado con pur&amp;amp;eacute;&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\nIce tea&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;Sesi&amp;amp;oacute;n&amp;lt;/strong&amp;gt; 2&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;strong&amp;gt;Cocci&amp;amp;oacute;n del arroz&amp;lt;/strong&amp;gt;&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\nCausa lime&amp;amp;ntilde;a&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\nArroz con mariscos y limonada frozen&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;Sesi&amp;amp;oacute;n&amp;lt;/strong&amp;gt; 3&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;strong&amp;gt;Salteados y flambeados&amp;lt;/strong&amp;gt;&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\nAj&amp;amp;iacute; de gallina&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\nLomo saltado&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\nMaracuy&amp;amp;aacute; frozen', 'images/taller/5.jpg', '', '', '', '11-12-13 febrero', '', '6 pm a 9 pm', '', '200.00', '', NULL, '', '', 5, '', 'S', 1, '2019-03-04 07:22:59');
INSERT INTO `taller` VALUES (6, 0, 'BARRA CEVICHERA', '&amp;lt;strong&amp;gt;Chef: Manuel Arevalo&amp;lt;/strong&amp;gt;&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\nSesi&amp;amp;oacute;n 1: &amp;lt;strong&amp;gt;leche de tigre y variantes&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Leche de tigre tradicional: aperitivo marino preparado a base de pescado.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Leche de pantera: aperitivo marino preparado a base de conchas negras.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Leche de lagarto: aperitivo marino preparado a base de contundente leche de tigre, culantro y aj&amp;amp;iacute; limo&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\nSesi&amp;amp;oacute;n 2: &amp;lt;strong&amp;gt;ceviches carretilleros&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Ceviche de pescado: preparado a base pescado marinado con sal, aj&amp;amp;iacute; limo, culantro, zumo de lim&amp;amp;oacute;n y cebolla, con guarnici&amp;amp;oacute;n de tortitas de cholo.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Ceviche mixto: preparado a base de pescado y mariscos (langostinos, caracol y pulpo), con guarnici&amp;amp;oacute;n de yuca, camote, cholo y cancha.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Ceviche con chicharr&amp;amp;oacute;n: ceviche tradicional con chicharr&amp;amp;oacute;n de calamar.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\nSesi&amp;amp;oacute;n 3:&amp;lt;strong&amp;gt; ceviches compuestos&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Ceviche caliente: pescado marinado en crema de aj&amp;amp;iacute; amarillo y cocido a las brasas y servido en panquita ahumada&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Chancadito de cangrejo.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Choritos a la chalaca.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;', 'images/taller/6.jpg', '', '', '', '11 -12 – 13 febrero', '', '5 a 8 pm', '', 's/ 200', '', NULL, '', '', 6, '', 'S', 1, '2019-03-04 07:22:59');
INSERT INTO `taller` VALUES (7, 0, 'SANGUCHERÍA PERUANA', '&amp;lt;strong&amp;gt;Chef: Jimmy Ar&amp;amp;eacute;valo&amp;lt;/strong&amp;gt;&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\nSesi&amp;amp;oacute;n 1&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;S&amp;amp;aacute;nguche de chicharr&amp;amp;oacute;n&lt;br /&gt;<br />\r\n	&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Pan franc&amp;amp;eacute;s&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Zarza criolla&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Camote en chips&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Cerdo pochado y frito previamente en salmuera&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Aj&amp;amp;iacute; parrillero&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Lechuga&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;amp;nbsp;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;S&amp;amp;aacute;nguche de panceta agridulce&lt;br /&gt;<br />\r\n	&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Pan de hamburguesa con ajonjol&amp;amp;iacute;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Encurtido de nabo y zanahoria&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Panceta al horno&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Salsa agridulce&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\nSesi&amp;amp;oacute;n 2&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;S&amp;amp;aacute;nguche de asado de res&lt;br /&gt;<br />\r\n	&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Asado de res&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Demi-glass&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Chips de papa nativa&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Lechuga lacia y tomate&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;amp;nbsp;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;S&amp;amp;aacute;nguche de lomo saltado&lt;br /&gt;<br />\r\n	&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Lomo en su jugo&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Verduras crocantes&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Pan franc&amp;amp;eacute;s&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Papas fritas&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\nSesi&amp;amp;oacute;n 3&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;S&amp;amp;aacute;nguche de pavo asado criollo&lt;br /&gt;<br />\r\n	&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Pan franc&amp;amp;eacute;s&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Pechuga de pavo en su jugo&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Zarza criolla&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;T&amp;amp;aacute;rtara criolla (aj&amp;amp;iacute; limo, culantro, huevo duro y mayonesa)&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Lechuga&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Chips de camote&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;amp;nbsp;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;S&amp;amp;aacute;nguche de pavo saludable&lt;br /&gt;<br />\r\n	&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Pan integral&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Pechuga de pavo magra al horno&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Lechuga, tomate, palta y ar&amp;amp;uacute;gula&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Vinagreta: vinagre bals&amp;amp;aacute;mico, aceite de oliva, miel, mostaza&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;', 'images/taller/7.jpg', '', '', '', '18 – 19 -21 febrero', '', '6 a 9 pm', '', 's/ 200', '', NULL, '', '', 7, '', 'S', 1, '2019-03-04 07:22:59');
INSERT INTO `taller` VALUES (8, 0, 'SANDWICH INTERNACIONALES', '&amp;lt;strong&amp;gt;Chef Jimmy Ar&amp;amp;eacute;valo&amp;lt;/strong&amp;gt;&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\nSesi&amp;amp;oacute;n 1&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;S&amp;amp;aacute;ndwich philadelfia (carne deshilachada y queso)&lt;br /&gt;<br />\r\n	&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Panini&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Salsa de queso ahumado (bechamel)&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Cebolla caramelizada&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Carne en l&amp;amp;aacute;minas&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;amp;nbsp;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Hamburguesa artesanal a la francesa&lt;br /&gt;<br />\r\n	&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Pan de hamburguesa con ajonjol&amp;amp;iacute;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Carne molida, huevo, tomillo, romero, cebolla&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Tocino crocante&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Cebolla caramelizada (tomillo, romero y aceite de oliva)&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Salsa de champi&amp;amp;ntilde;ones (bechamel)&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Lechuga y tomate&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\nSesi&amp;amp;oacute;n 2&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;S&amp;amp;aacute;ndwich de pollo c&amp;amp;eacute;sar&lt;br /&gt;<br />\r\n	&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Pan pita&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Mis de lechuga&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Pechuga de pollo a la plancha&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Parmesano&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Salsa c&amp;amp;eacute;sar&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;amp;nbsp;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;S&amp;amp;aacute;ndwich de pollo grillado y verduras&lt;br /&gt;<br />\r\n	&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Ciabatta&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Pechuga de pollo al grill&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Zuccini, tomate, lechuga&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Chimichurri&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\nSesi&amp;amp;oacute;n 3&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;Festival de club s&amp;amp;aacute;ndwich:&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n	&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Club s&amp;amp;aacute;ndwich cl&amp;amp;aacute;sico:&lt;br /&gt;<br />\r\n		&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;Pan de molde sin corteza&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;Pollo con mayonesa y lechuga&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;Palta, tomate&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;Huevo y tocino&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;Chips de papa nativa&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;amp;nbsp;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Club s&amp;amp;aacute;ndwich criollo:&lt;br /&gt;<br />\r\n	&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Pan de molde sin corteza&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Salchicha de huacho y huevo&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Jam&amp;amp;oacute;n del pa&amp;amp;iacute;s y queso paria&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Pollo mechado (vinagre, panca y ajo)&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Chips de camote.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;amp;nbsp;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Club s&amp;amp;aacute;ndwich franc&amp;amp;eacute;s:&lt;br /&gt;<br />\r\n	&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Pan de molde sin corteza&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Jam&amp;amp;oacute;n ingl&amp;amp;eacute;s y queso Edam&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Cebollas caramelizadas con champi&amp;amp;ntilde;ones&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Queso rallado y huevo montado&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Chips de papas rejilla&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;', 'images/taller/8.jpg', '', '', '', '25 – 26 y 28 febrero', '', '6 a 9 pm', 'taller 702', 's/ 200', '', NULL, '', '', 8, '', 'S', 1, '2019-03-04 07:22:59');
INSERT INTO `taller` VALUES (9, 0, 'EL MUNDO DE LAS EMPANADAS', '&amp;lt;strong&amp;gt;Chef Jimmy Ar&amp;amp;eacute;valo&amp;lt;/strong&amp;gt;&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;strong&amp;gt;Sesi&amp;amp;oacute;n 1&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Masa bris&amp;amp;eacute;e:&lt;br /&gt;<br />\r\n	&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Empanada de pollo a la finas hierbas:&lt;br /&gt;<br />\r\n		&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;pollo salteado&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;cebolla caramelizada&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;salsa bechamel&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;mayonesa al aj&amp;amp;iacute; amarillo&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Empanada de lomo saltado&lt;br /&gt;<br />\r\n		&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;lomo al jugo&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;verduras crocantes: cebolla, tomate y aj&amp;amp;iacute;.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;mayonesa oriental: mayonesa con aceite de ajonjol&amp;amp;iacute;, ajo y kion.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;strong&amp;gt;Sesi&amp;amp;oacute;n 2&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Masa frita&lt;br /&gt;<br />\r\n	&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Empanada argentina&lt;br /&gt;<br />\r\n		&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;mix de chorizo y fino corte de res&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;pimientos morroneados&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;salsa chimichurri&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Empanada huachana:&lt;br /&gt;<br />\r\n		&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;salchicha de huacho&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;huevo&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;aj&amp;amp;iacute; limo y cebolla china&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;crema de rocoto&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;strong&amp;gt;Sesi&amp;amp;oacute;n 3 &amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Salte&amp;amp;ntilde;a&lt;br /&gt;<br />\r\n	&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Empanada mexicana:&lt;br /&gt;<br />\r\n		&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;panceta de cerdo&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;cebolla caramelizada&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;chile (mexicano), tomate y culantro&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;pico de gallo con palta.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;li&amp;gt;Empanada italiana:&lt;br /&gt;<br />\r\n		&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;-carne molida&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;-cebolla caramelizada y tomate&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;-albahaca y or&amp;amp;eacute;gano&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n			&amp;lt;li&amp;gt;mayonesa de anchoas alcaparras y ajo.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n		&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;', 'images/taller/9.jpg', '', '', '', '4 – 5 -7 marzo', '', 's/ 200', 'Taller 702', 's/ 200', '', NULL, '', '', 9, '', 'S', 1, '2019-03-04 07:22:59');
INSERT INTO `taller` VALUES (10, 0, 'EL CHIFA Y SUS SECRETOS', '&amp;lt;strong&amp;gt;Chef Carlos Urbina&amp;lt;/strong&amp;gt;&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;strong&amp;gt;Primera sesi&amp;amp;oacute;n:&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Reconocimiento de ingredientes b&amp;amp;aacute;sicos para la cocina chifa&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Preparaci&amp;amp;oacute;n de fondos (fondo de ave, fondos oscuros)&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Elaboraci&amp;amp;oacute;n de Siu Mai&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Elaboraci&amp;amp;oacute;n de la salsa tamarindo y wantanes rellenos fritos.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Preparaci&amp;amp;oacute;n del marinado para el cerdo asado&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;strong&amp;gt;Segunda sesi&amp;amp;oacute;n: elaboraci&amp;amp;oacute;n de recetas&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Elaboraci&amp;amp;oacute;n de arroz chaufa especial&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Sopa Wantan especial&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Ti pa kay&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;strong&amp;gt;Tercera sesi&amp;amp;oacute;n: elaboraci&amp;amp;oacute;n de recetas&amp;lt;/strong&amp;gt;&lt;br /&gt;<br />\r\n&lt;br /&gt;<br />\r\n&amp;lt;ul&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Tallar&amp;amp;iacute;n saltado.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Alitas kaypi.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Pollo chi&amp;amp;nbsp; jau kay.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;', 'images/taller/10.jpg', '', '', '', '4,5,7 marzo', '', '6 a  9 pm', '', 's/ 200', '', NULL, '', '', 10, '', 'S', 1, '2019-03-04 07:22:59');

-- ----------------------------
-- Table structure for textos
-- ----------------------------
DROP TABLE IF EXISTS `textos`;
CREATE TABLE `textos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identificador` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `titulo` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `descripcion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 1,
  `fecha` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of textos
-- ----------------------------
INSERT INTO `textos` VALUES (1, 'Transforma tu vida', 'a:1:{s:2:\"es\";s:19:\"TRANSFORMA TU VIDA \";}', 'a:1:{s:2:\"es\";s:1279:\"Tenemos nuestro Reto40 - reto de 40 d&iacute;as dise&ntilde;ado de acuerdo a tus necesidades y requerimientos. D&oacute;nde deseamos brindarte una mirada holistica y una figura amplia de lo que est&aacute; sucediendo en tu vida y como generar el cambio inicial para poder transformarte.<br />\r\n<br />\r\n<img alt=\"\" class=\"krown-single-image aligncenter sep1\" height=\"8\" src=\"http://nadine-rothfuss.de/media/sep.png\" width=\"194\" /><br />\r\n\r\nElaboraremos una pr&aacute;ctica diaria para ti, asesor&iacute;a en nutrici&oacute;n y soporte v&iacute;a email y/o skype ilimitado durante todo el proceso. Ya sea que desees cambiar tu estilo de vida o alimentaci&oacute;n, aprender a respirar, liberar estr&eacute;s, miedo, ansiedad, fortalecer , prepararte para tu matrimonio, recuperarte de alguna enfermedad o cualquier sucedo importante en tu vida. Esta es la herramienta clave para atravesar cualquier cosa que se te presente! Crea la mejor versi&oacute;n posible de ti mismo a trav&eacute;s de nuestra gu&iacute;a y soporte. Todos tenemos el poder de transformar-nos y est&aacute; dentro de todos la capacidad de volver esto realidad. Tenemos asesor&iacute;a personalizada para ti para inicies el cambio en tu vida y nuestro apoyo para sostener tus procesos de transformaci&oacute;n.\";}', 0, 1, '2015-07-19 21:21:30');
INSERT INTO `textos` VALUES (2, 'Retiros', 'a:1:{s:2:\"es\";s:7:\"Retiros\";}', 'a:1:{s:2:\"es\";s:643:\"Nuestros retiros buscan abrir el espacio en ti para que logres conectarte con tus elementos a trav&eacute;s de la naturaleza.&nbsp; Desconectate de la rutina en la ciudad y entra a un espacio de sanaci&oacute;n d&oacute;nde nutriremos y desintoxicaremos nuestro cuerpo a trav&eacute;s del Yoga, la Meditaci&oacute;n y una dieta vegetariana. Disfruta de los amaneceres, de la pr&aacute;ctica al aire libre y de la conexi&oacute;n con la naturaleza a trav&eacute;s de la respiraci&oacute;n.&nbsp; Noches de meditaci&oacute;n profunda y relajaci&oacute;n con gong para liberar la tensi&oacute;n de nuestro cuerpo y renovar nuestra energ&iacute;a.\";}', 0, 1, '2015-07-19 21:23:22');
INSERT INTO `textos` VALUES (3, 'Fuera del Mat', 'a:1:{s:2:\"es\";s:14:\"FUERA DEL MAT \";}', 'a:1:{s:2:\"es\";s:81:\"Llevando y aplicando la experiencia de nuestra pr&aacute;ctica en la vida diaria.\";}', 0, 1, '2015-07-13 08:51:42');
INSERT INTO `textos` VALUES (4, 'Terapias', 'a:1:{s:2:\"es\";s:8:\"Terapias\";}', 'a:1:{s:2:\"es\";s:288:\"<span class=\"cont_descripcion\">A trav&eacute;s del yoga, se crea regulares tiempos de espera para la relajaci&oacute;n y regeneraci&oacute;n profunda. Cuerpo, mente y alma a respirar. Disfrute de los peque&ntilde;os oasis de la vida cotidiana mediante una clase de yoga relajante. </span>\";}', 0, 1, '2015-06-18 00:07:36');
INSERT INTO `textos` VALUES (5, 'Tienda', 'a:1:{s:2:\"es\";s:6:\"Tienda\";}', 'a:1:{s:2:\"es\";s:105:\"Tenemos un aplio cat&aacute;logo de productos para ti.<br />\r\nCon&oacute;celos a detalle y haz tu pedido.\";}', 0, 1, '2015-06-18 00:08:01');
INSERT INTO `textos` VALUES (6, 'Yoga', 'a:1:{s:2:\"es\";s:4:\"YOGA\";}', 'a:1:{s:2:\"es\";s:1927:\"<div style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 12.8000001907349px; line-height: normal;\"><span style=\"color: rgb(102, 102, 102); font-family: Georgia, serif; font-size: 14px; line-height: 25.2000007629395px; text-align: center;\">El yoga es un sistema que se utiliza para equilibrar el cuerpo, la mente y el esp&iacute;ritu. Es una tecnolog&iacute;a de la conciencia, una ciencia antigua que ha evolucionado pero que guarda el objetivo de encontrar bienestar, salud, felicidad y crecimiento interior.&nbsp;</span></div>\r\n\r\n<div style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 12.8000001907349px; line-height: normal;\">\r\n<p style=\"border: 0px; font-family: Georgia, serif; font-size: 14px; margin: 0px; outline: 0px; padding: 6px 0px; vertical-align: baseline; color: rgb(102, 102, 102); line-height: 25.2000007629395px; text-align: center;\">A trav&eacute;s de la mente, &nbsp;generamos diferentes emociones y con la pr&aacute;ctica regular de yoga es que estimulados estados de calma donde hay m&aacute;s tolerancia con respecto a uno mismo, sus limitaciones, su cuerpo, y un trabajo interior hacia la sabidur&iacute;a, la felicidad, la espiritualidad.&nbsp;</p>\r\n\r\n<p style=\"border: 0px; font-family: Georgia, serif; font-size: 14px; margin: 0px; outline: 0px; padding: 6px 0px; vertical-align: baseline; color: rgb(102, 102, 102); line-height: 25.2000007629395px; text-align: center;\">La pr&aacute;ctica del yoga es apropiada para todos y es independiente de las creencias de cada cual. Nos ayuda a enfocarnos, a fortalecer la capacidad de disfrutar y la fuerza de voluntad, a regular el metabolismo, a aumentar la agilidad y la elasticidad, a desintoxicar el cuerpo, a revitalizar los &oacute;rganos, a sentirnos siempre j&oacute;venes. La salud est&aacute; en nuestras manos, as&iacute; como la felicidad, la alegr&iacute;a y el crecimiento espiritual.</p>\r\n</div>\r\n\";}', 0, 1, '2015-06-24 17:25:15');
INSERT INTO `textos` VALUES (7, 'Link de interes', 'a:1:{s:2:\"es\";s:16:\"Link de Interés\";}', 'a:1:{s:2:\"es\";s:41:\"Descripci&oacute;n link de inter&eacute;s\";}', 1, 1, '2015-06-21 02:25:38');

-- ----------------------------
-- Table structure for traslado_pregunta
-- ----------------------------
DROP TABLE IF EXISTS `traslado_pregunta`;
CREATE TABLE `traslado_pregunta`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `respuesta` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `orden` int(11) NULL DEFAULT NULL,
  `estado` int(1) NULL DEFAULT 1,
  `fecha` timestamp(0) NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of traslado_pregunta
-- ----------------------------
INSERT INTO `traslado_pregunta` VALUES (1, 'POR QUÉ TRASLADARME A ISP?', '<p>Te ofrecemos un proceso de traslado atractivo que te permite convalidar algunos cursos que ya hayas llevado en tu actual instituto.</p>\r\n\r\n<p>Contar&aacute;s con un plan de pagos de acuerdo a tus necesidades previa categorizaci&oacute;n.</p>\r\n\r\n<p>&iexcl;Recibir&aacute;s una educaci&oacute;n integral con visitas a importantes empresas, para aprender en la cancha!</p>\r\n\r\n<p>Si destacas en tus estudios y gracias a nuestra amplia red de alianzas estrat&eacute;gicas te garantizamos trabajo incluso antes de graduarte.</p>\r\n\r\n<p>A partir del segundo a&ntilde;o de estudios ingresar&aacute;s autom&aacute;ticamente a nuestra Bolsa de Empleos.</p>\r\n\r\n<p>Seguir&aacute;s cursos de tu especialidad desde los primeros ciclos.</p>\r\n\r\n<p>Tu educaci&oacute;n ser&aacute; 100% pr&aacute;ctica desde el primer d&iacute;a ya que contamos con:</p>\r\n\r\n<ul>\r\n	<li><strong>Set de televisi&oacute;n &gt;&gt;</strong> Estudio propio con c&aacute;maras y luces profesionales</li>\r\n	<li><strong>Switcher profesional &gt;&gt;</strong> Como si estuvieras en el mismo canal de televisi&oacute;n</li>\r\n	<li><strong>Set de fotograf&iacute;a &gt;&gt;</strong> Estudio propio con c&aacute;maras e implementos de &uacute;ltimo generaci&oacute;n</li>\r\n	<li><strong>Cabina de radio &gt;&gt;</strong> Consola de audio, micros profesionales y software de edici&oacute;n profesional</li>\r\n</ul>\r\n', NULL, 1, '2015-11-03 23:45:32');
INSERT INTO `traslado_pregunta` VALUES (2, 'Qué requisitos necesito para trasladarme a ISP?', '<p>En ISP buscamos la excelencia educativa, por tanto debes cumplir con:</p>\r\n\r\n<ul>\r\n	<li>Haber aprobado los cr&eacute;ditos de estudio.</li>\r\n	<li>No haber sido separado de alguna instituci&oacute;n educativa por motivos disciplinarios.</li>\r\n</ul>\r\n', NULL, 1, '2015-11-03 11:52:00');
INSERT INTO `traslado_pregunta` VALUES (3, 'Cómo hago para trasladarme?', '<p>Es muy sencillo. S&oacute;lo debes seguir estos 4 pasos:</p>\r\n\r\n<ul>\r\n	<li>Ac&eacute;rcate a nuestras oficinas en calle Madre de Dios 255 &ndash; Entre la cuadra 4 y 5 de Av. Petit Thouars frente al Paseo de las Aguas.</li>\r\n	<li>Luego de una entrevista personal con la Direcci&oacute;n Acad&eacute;mica sabr&aacute;s si est&aacute;s admitido.</li>\r\n	<li>Llenas la ficha de inscripci&oacute;n.</li>\r\n	<li>Presentas tu certificado de estudios y buena conducta emitido por el instituto de procedencia</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<h3 style=\"text-align:center; font-size:20px;\">EN ISP NO TE COBRAMOS NING&Uacute;N COSTO POR TRASLADARTE</h3>\r\n', NULL, 1, '2015-11-03 11:52:40');
INSERT INTO `traslado_pregunta` VALUES (4, 'Cuándo puedo trasladarme?', '<p>Ahora mismo, tienes plazo para iniciar tus estudios en nuestro siguiente ciclo acad&eacute;mico 2016-I</p>\r\n\r\n<p>&iexcl;&iexcl;Ven y s&eacute; parte del cambio!!</p>', NULL, 1, '2015-11-03 11:53:13');

-- ----------------------------
-- Table structure for traslados
-- ----------------------------
DROP TABLE IF EXISTS `traslados`;
CREATE TABLE `traslados`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `imagen` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `presentacion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `item1` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `item2` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `item3` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `item4` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `descitem1` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `descitem2` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `descitem3` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `descitem4` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `promocion` varchar(75) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of traslados
-- ----------------------------
INSERT INTO `traslados` VALUES (1, 'a:1:{s:2:\"es\";s:9:\"TRASLADOS\";}', 'imagenes/mensaje/banner_traslado.jpg', 'a:1:{s:2:\"es\";s:1075:\"<p>Nos interesa que seas un profesional con los mejores conocimientos tanto te&oacute;ricos como pr&aacute;cticos en un ambiente de camarader&iacute;a y trabajo en equipo. Queremos que la pases bien mientras te formas.</p>\r\n\r\n<p>Como sabemos que eres &uacute;nico te damos un servicio innovador y diferenciado:</p>\r\n\r\n<ul style=\"padding-left: 16px; margin:20px 0\">\r\n	<li><strong>ISPort &gt;&gt;</strong> Momentos para el deporte (Voley, fulbito y ping pong).</li>\r\n	<li><strong>ISP invita &gt;&gt;</strong> Momentos para divertirte y compartir con alumnos y personal docente.</li>\r\n	<li><strong>Cine Club ISP &gt;&gt;</strong> Proyecci&oacute;n de pel&iacute;culas y videos para entretenimiento y aprendizaje.</li>\r\n	<li><strong>ISuP&eacute;rate &gt;&gt;</strong> Charlas y talleres gratuitos para tu auto superaci&oacute;n y crecimiento personal.</li>\r\n</ul>\r\n\r\n<p>Por eso y muchas razones m&aacute;s, queremos invitarte al ISP para contarte cu&aacute;l es nuestra nueva visi&oacute;n de la educaci&oacute;n y mostrarte una propuesta educativa completamente diferente.</p>\r\n\";}', 'a:1:{s:2:\"es\";s:43:\"POR QUÉ TRASLADARME A ISP? 							        \";}', 'a:1:{s:2:\"es\";s:48:\"Qué requisitos necesito para trasladarme a ISP?\";}', 'a:1:{s:2:\"es\";s:44:\"Cómo hago para trasladarme? 							        \";}', 'a:1:{s:2:\"es\";s:42:\"Cuándo puedo trasladarme? 							        \";}', 'a:1:{s:2:\"es\";s:1367:\"<p>Te ofrecemos un proceso de traslado atractivo que te permite convalidar algunos cursos que ya hayas llevado en tu actual instituto.</p>\r\n\r\n<p>Contar&aacute;s con un plan de pagos de acuerdo a tus necesidades previa categorizaci&oacute;n.</p>\r\n\r\n<p>&iexcl;Recibir&aacute;s una educaci&oacute;n integral con visitas a importantes empresas, para aprender en la cancha!</p>\r\n\r\n<p>Si destacas en tus estudios y gracias a nuestra amplia red de alianzas estrat&eacute;gicas te garantizamos trabajo incluso antes de graduarte.</p>\r\n\r\n<p>A partir del segundo a&ntilde;o de estudios ingresar&aacute;s autom&aacute;ticamente a nuestra Bolsa de Empleos.</p>\r\n\r\n<p>Seguir&aacute;s cursos de tu especialidad desde los primeros ciclos.</p>\r\n\r\n<p>Tu educaci&oacute;n ser&aacute; 100% pr&aacute;ctica desde el primer d&iacute;a ya que contamos con:</p>\r\n\r\n<ul>\r\n	<li><strong>Set de televisi&oacute;n &gt;&gt;</strong> Estudio propio con c&aacute;maras y luces profesionales</li>\r\n	<li><strong>Switcher profesional &gt;&gt;</strong> Como si estuvieras en el mismo canal de televisi&oacute;n</li>\r\n	<li><strong>Set de fotograf&iacute;a &gt;&gt;</strong> Estudio propio con c&aacute;maras e implementos de &uacute;ltimo generaci&oacute;n</li>\r\n	<li><strong>Cabina de radio &gt;&gt;</strong> Consola de audio, micros profesionales y software de edici&oacute;n profesional</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:252:\"<p>En ISP buscamos la excelencia educativa, por tanto debes cumplir con:</p>\r\n\r\n<ul>\r\n	<li>Haber aprobado los cr&eacute;ditos de estudio.</li>\r\n	<li>No haber sido separado de alguna instituci&oacute;n educativa por motivos disciplinarios.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:636:\"<p>Es muy sencillo. S&oacute;lo debes seguir estos 4 pasos:</p>\r\n\r\n<ul>\r\n	<li>Ac&eacute;rcate a nuestras oficinas en calle Madre de Dios 255 &ndash; Entre la cuadra 4 y 5 de Av. Petit Thouars frente al Paseo de las Aguas.</li>\r\n	<li>Luego de una entrevista personal con la Direcci&oacute;n Acad&eacute;mica sabr&aacute;s si est&aacute;s admitido.</li>\r\n	<li>Llenas la ficha de inscripci&oacute;n.</li>\r\n	<li>Presentas tu certificado de estudios y buena conducta emitido por el instituto de procedencia</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<h3 style=\"text-align:center; font-size:20px;\">EN ISP NO TE COBRAMOS NING&Uacute;N COSTO POR TRASLADARTE</h3>\r\n\";}', 'a:1:{s:2:\"es\";s:170:\"<p>Ahora mismo, tienes plazo para iniciar tus estudios en nuestro siguiente ciclo acad&eacute;mico 2016-I</p>\r\n\r\n<p>&iexcl;&iexcl;Ven y s&eacute; parte del cambio!!</p>\r\n\";}', 'a:1:{s:2:\"es\";s:40:\"CARRERAS Y TALLERES DISPONIBLES 2016 - 1\";}');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apellidos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `estado` smallint(5) UNSIGNED NOT NULL DEFAULT 1,
  `created_up` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Armando', 'Pisfil Puemape', 'armandoaepp@gmail.com', '7b64d09060db17ca6b96c0af99575903', 1, '2018-07-05 15:07:03');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `salt` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `activation_code` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `forgotten_password_code` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED NULL DEFAULT NULL,
  `remember_code` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED NULL DEFAULT NULL,
  `active` tinyint(1) UNSIGNED NULL DEFAULT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `company` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `imagen` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 0x7F000001, 'pedroclm', '$2y$08$RDkGGRyQX/8LZlHJlCMcH.SpItZwHvrAhLZEkNwfPsJteAbEkZZZu', 'NULL', 'info@webtilia.com', '', '', 1402679493, NULL, 1268889823, 1459094860, 1, 'Pedro', 'Calderon', 'WJHARIL', '940147037', 'imagenes/usuarios/wjharil.png');
INSERT INTO `users` VALUES (2, 0x3132372E302E302E31, 'cumbre', '$2y$08$xLjUc5GGv0qvypmFlMrXjOZVaLXGiAEGvP7dJoUHP7bsoeCF8/iJ6', NULL, 'usuario@isp.com', NULL, NULL, NULL, NULL, 1402679836, 1551538820, 1, 'Admin ', 'CUMBRE', 'ADMIN', '99999', 'imagenes/usuarios/logo.jpg');
INSERT INTO `users` VALUES (3, 0x3139302E3233342E3130352E3133, 'jallpas', '$2y$08$QdYMJ2UeSjU41K6MowdnyOv0Jva1tjxQkeJU3JDkKYPEd5Z9LvKcC', NULL, 'berzavlu@gmail.com', NULL, NULL, NULL, NULL, 1436487801, 1436574605, 1, 'Luis', 'Eduardo', 'wjharil', '-----', NULL);

-- ----------------------------
-- Table structure for users_groups
-- ----------------------------
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `uc_users_groups`(`user_id`, `group_id`) USING BTREE,
  INDEX `fk_users_groups_users1_idx`(`user_id`) USING BTREE,
  INDEX `fk_users_groups_groups1_idx`(`group_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users_groups
-- ----------------------------
INSERT INTO `users_groups` VALUES (2, 1, 1);
INSERT INTO `users_groups` VALUES (3, 2, 2);
INSERT INTO `users_groups` VALUES (4, 3, 2);

SET FOREIGN_KEY_CHECKS = 1;
