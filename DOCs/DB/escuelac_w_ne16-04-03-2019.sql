/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : escuelac_w_ne16

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-03-04 11:53:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for --buzon
-- ----------------------------
DROP TABLE IF EXISTS `--buzon`;
CREATE TABLE `--buzon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) DEFAULT NULL,
  `telefono` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mensaje` text,
  `estado` int(11) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of --buzon
-- ----------------------------
INSERT INTO `--buzon` VALUES ('1', 'Williams Azabache Sarmiento', '9999999', 'williams.azabache@webtilia.com', 'Test Test', '1', '2015-06-12 18:27:43');
INSERT INTO `--buzon` VALUES ('2', 'Williams Azabache Sarmiento', '9999', 'williams.azabache@webtilia.com', 'Testing', '1', '2015-06-12 18:30:14');
INSERT INTO `--buzon` VALUES ('3', 'Williams Azabache Sarmiento', '9999', 'williams.azabache@webtilia.com', 'Testing', '1', '2015-06-12 18:31:59');
INSERT INTO `--buzon` VALUES ('4', 'Williams Azabache Sarmiento', '9999', 'williams.azabache@webtilia.com', 'Testing', '1', '2015-06-12 18:32:39');

-- ----------------------------
-- Table structure for --buzon_contacto
-- ----------------------------
DROP TABLE IF EXISTS `--buzon_contacto`;
CREATE TABLE `--buzon_contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(35) NOT NULL,
  `dni` varchar(15) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of --buzon_contacto
-- ----------------------------
INSERT INTO `--buzon_contacto` VALUES ('1', 'Pedro Calderón', '42548605', 'pedrocalderon_@hotmail.com', '987868401', '2015-10-06 23:43:15');

-- ----------------------------
-- Table structure for --buzon_retiro
-- ----------------------------
DROP TABLE IF EXISTS `--buzon_retiro`;
CREATE TABLE `--buzon_retiro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(200) DEFAULT NULL,
  `titulo_retiro` text,
  `email` varchar(200) DEFAULT NULL,
  `mensaje` text,
  `estado` int(11) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of --buzon_retiro
-- ----------------------------
INSERT INTO `--buzon_retiro` VALUES ('1', 'Williams', 'Próximamente Retiro 2015', 'wjharil@gmail.com', 'Retiro pruebas email', '1', '2015-07-13 01:54:43');

-- ----------------------------
-- Table structure for --diplomado
-- ----------------------------
DROP TABLE IF EXISTS `--diplomado`;
CREATE TABLE `--diplomado` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of --diplomado
-- ----------------------------
INSERT INTO `--diplomado` VALUES ('1', 'a:1:{s:2:\"es\";s:11:\"Pastelería\";}', 'a:1:{s:2:\"es\";s:323:\"<div>Este curso &ndash; taller tiene como objetivo capacitar a emprendedores y apasionados por la pasteler&iacute;a para que puedan implementar su propio negocio en base a productos de tendencia.<br />\r\nLos asistentes podr&aacute;n realizar pr&aacute;ctica en talleres totalmente implementados.</div>\r\n\r\n<div>&nbsp;</div>\r\n\";}', 'imagenes/carreras/fond_diplomado.jpg', 'imagenes/carreras/diplomado-pasteleria.png', 'a:1:{s:2:\"es\";s:486:\"Los participantes recibir&aacute;n el CERTIFICADO EN <strong>TALLER DE PASTELER&Iacute;A </strong>a nombre de Cumbre.<br />\r\n<strong><em>&iquest;Por qu&eacute; estudiar este taller en Cumbre?</em></strong>\r\n<ul>\r\n	<li>T&eacute;cnicas y herramientas con enfoque pr&aacute;ctico.</li>\r\n	<li>Docente instructor con experiencia y trayectoria.</li>\r\n	<li>Asesor&iacute;a de chefs de primer nivel.</li>\r\n	<li>La escuela de gastronom&iacute;a n&uacute;mero 1 de la regi&oacute;n.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:633:\"<strong>Luis Huerta / MASTER PATISSIER</strong><br />\r\nMaster Patissierie con m&aacute;s de 20 a&ntilde;os de experiencia. Con especializaci&oacute;n en Artisan Gelato - Carpigiani Gelato University, Bologna &ndash; Italia; panader&iacute;a artesanal y del mundo en el Institute of Culinary Education (ICE), New York; Chocolater&iacute;a y Bomboner&iacute;a - Chocolate Academy, Chicago, USA.<br />\r\nAdem&aacute;s es Pastry chef asociado &ndash; Miami Culinary Institute, ha trabajado como Pastry chef en Resort Madinat Jumeirah, Dub&aacute;i; Pastry chef en Resort Canyon Ranch Miami, USA; y como Line cook restaurant Malabar, Lima.\";}', 'a:1:{s:2:\"es\";s:288:\"<div style=\"line-height: 20.8px;\">\r\n<ul>\r\n	<li>S/. 1800.00 Nuevos Soles (4 cuotas de S/. 450.00 soles)</li>\r\n	<li>S/. 1500.00 soles (al contado)</li>\r\n</ul>\r\n<strong>Incluye: </strong>Uniforme (Chaqueta, mandil y Garibaldi) / Recetario / Insumos / Degustaci&oacute;n / Certificado</div>\r\n\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:27:\"Av. Eufemio Lora y Lora 625\";}', 'a:1:{s:2:\"es\";s:24:\"S/. 1500.00 (al contado)\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:10:\"074 228790\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:333:\"<ul>\r\n	<li>Propietarios de negocios de gastronom&iacute;a.</li>\r\n	<li>Pasteleros que quieren implementar un negocio.</li>\r\n	<li>Empresarios que desean implementar una marca de gastronom&iacute;a (pasteler&iacute;a).</li>\r\n	<li>P&uacute;blico apasionado por la pasteler&iacute;a que quiere perfeccionar su m&eacute;todo.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:319:\"<strong>SESI&Oacute;N 01:</strong> &nbsp; FESTIVAL DE GALLETAS Y SABLES.<br />\r\n<strong>SESI&Oacute;N 02:</strong>&nbsp;&nbsp; PIES Y TARTAS.<br />\r\n<strong>SESI&Oacute;N 03:&nbsp;&nbsp; </strong>PIES Y TARTAS II.<br />\r\n<strong>SESI&Oacute;N 04:</strong>&nbsp;&nbsp; MASA CHOUX.<br />\r\n[ ...16 SESIONES ]<br />\r\n&nbsp;\";}', 'pasteleria', '1', '1', '2017-10-05 11:40:34');

-- ----------------------------
-- Table structure for --facultad
-- ----------------------------
DROP TABLE IF EXISTS `--facultad`;
CREATE TABLE `--facultad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activo` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of --facultad
-- ----------------------------
INSERT INTO `--facultad` VALUES ('1', 'a:1:{s:2:\"es\";s:28:\"CIENCIAS DE LA COMUNICACIÓN\";}', 'a:1:{s:2:\"es\";s:34:\"Ciencias de la comunicaci&oacute;n\";}', 'imagenes/facultad/carrera_1.jpg', '1', '1', '2015-10-30 02:37:33', '0');

-- ----------------------------
-- Table structure for --home
-- ----------------------------
DROP TABLE IF EXISTS `--home`;
CREATE TABLE `--home` (
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
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of --home
-- ----------------------------
INSERT INTO `--home` VALUES ('1', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:24:\"./carrera-de-gastronomia\";}', 'imagenes/home/home_1.jpg', 'a:1:{s:2:\"es\";s:24:\"<h3>Cursos Cortos</h3>\r\n\";}', 'a:1:{s:2:\"es\";s:25:\"./diplomado-de-pasteleria\";}', 'imagenes/home/home_2.jpg', 'a:1:{s:2:\"es\";s:47:\"<h3>Chefs&nbsp;<span>Instructores</span></h3>\r\n\";}', 'a:1:{s:2:\"es\";s:10:\"./talleres\";}', 'imagenes/home/home_3_1.jpg', 'a:1:{s:2:\"es\";s:706:\"<p>Cumbre ahora comparte su marca con <strong><a href=\"http://www.toques-auvergne.com\" target=\"_blank\">Les Toques D&#39; Auvergne</a></strong> asociaci&oacute;n de restaurantes franceses categorizados con estrella Michelin. Cumplimos los est&aacute;ndares para titular alumnos siguiendo las pautas m&aacute;s rigurosas de los mejores establecimientos de Francia, la &ldquo;meca&rdquo; de la t&eacute;cnica gastron&oacute;mica mundial. Nuestros estudiantes y egresados pueden tambi&eacute;n acceder a pasant&iacute;as y pr&aacute;cticas. Para que tu pasi&oacute;n por la cocina sea el alma de tu futuro.&nbsp;<a href=\"http://www.toques-auvergne.com/\" target=\"_blank\">http://www.toques-auvergne.com</a></p>\r\n\";}', '0', '1', '2018-07-24 18:43:31');

-- ----------------------------
-- Table structure for --mensaje
-- ----------------------------
DROP TABLE IF EXISTS `--mensaje`;
CREATE TABLE `--mensaje` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of --mensaje
-- ----------------------------
INSERT INTO `--mensaje` VALUES ('1', 'a:1:{s:2:\"es\";s:24:\"BIENVENIDOS AL NUEVO ISP\";}', 'imagenes/mensaje/foto_promotor.png', 'a:1:{s:2:\"es\";s:2396:\"<p>En nombre de <span>INSTITUTO ISP</span> queremos darles una cordial bienvenida y esperamos formar parte de su tan anhelado futuro profesional.</p>\r\n\r\n<p>En <span>ISP</span> tenemos propuestas educativas realmente innovadoras, para que puedas alcanzar en poco tiempo, un adecuado grado de conocimientos y as&iacute; poder insertarte con &eacute;xito en el cambiante mercado laboral. Acad&eacute;micamente, estamos estructurados de tal manera que, cada alumno reciba una formaci&oacute;n integral y para ello consideramos que la teor&iacute;a y la pr&aacute;ctica son la conjunci&oacute;n ideal para alcanzar los objetivos requeridos. Hoy la capacitaci&oacute;n es indispensable, pero para que ella sea efectiva es necesario adecuarla a los cambios continuos que se producen en nuestros d&iacute;as. Por ello nuestro Instituto est&aacute; en contacto con los centros de estudio m&aacute;s importantes del mundo, lo cual nos permite evaluar y enriquecer permanentemente nuestros planes de estudio.</p>\r\n\r\n<p>El Instituto de Educaci&oacute;n Superior Tecnol&oacute;gico Privado <span>ISP</span>, es una Instituci&oacute;n Educativa de car&aacute;cter privado, con m&aacute;s de 28 a&ntilde;os formando profesionales l&iacute;deres en las Ciencias de la Comunicaci&oacute;n, creado mediante R.M. N&ordm; 501-86-ED del 07 de Agosto de 1986, Resoluci&oacute;n Directoral N&ordm; 6950-86-ED DEL 17 de Diciembre de 1986 y Revalidado con R.D. N&ordm; 0089-2006-ED del 09 de Febrero del 2006, contamos tambi&eacute;n con Certificado de Adecuaci&oacute;n de Estudios de las Carreras Profesionales al nuevo Dise&ntilde;o Curricular B&aacute;sico N&ordm; 238-2014-DESTP, con fecha 08 de Julio del 2014 y Constancia de Adecuaci&oacute;n Institucional N&ordm; 565, de fecha 24 de Setiembre del 2014.</p>\r\n\r\n<p>El funcionamiento del Instituto se rige por lo establecido en la Ley General de Educaci&oacute;n N&ordm; 28044, el Reglamento de Apertura y Funcionamiento de Institutos Superiores Tecnol&oacute;gicos y Escuelas Superiores no Estatales aprobado por D.S. N&ordm; 015-87-ED, las Normas de Organizaci&oacute;n y Funciones de los Institutos Superiores Tecnol&oacute;gicos aprobado por R.M. N&ordm; 641-83 y otras de car&aacute;cter T&eacute;cnico-Pedag&oacute;gico y Administrativo expedidas por la Direcci&oacute;n General de Educaci&oacute;n Superior, as&iacute; como el D.S. N&ordm; 014-2002-ED.</p>\r\n\";}', 'a:1:{s:2:\"es\";s:1185:\"<div class=\"col-xs-12\">\r\n<p>Ello significa no solamente la partida de nacimiento de nuestra vida institucional, sino tambi&eacute;n el cumplimiento del anhelo largamente esperado por los locutores peruanos: el reconocimiento de su actividad como una PROFESI&Oacute;N. En realidad, este hecho no es por pura coincidencia. Y es que siempre estuvimos a la vanguardia en el mundo de las comunicaciones en el pa&iacute;s, pues somos creadores de otra carrera profesional: &ldquo;Periodismo Radial y Televisivo&rdquo;.</p>\r\n\r\n<p>Hoy en d&iacute;a somos una instituci&oacute;n educativa s&oacute;lida, que desarrolla al m&aacute;ximo el talento de nuestros alumnos para convertirlos en profesionales l&iacute;deres; por ese motivo hemos redoblado esfuerzos y tecnolog&iacute;as.</p>\r\n\r\n<p>Ingresamos a nuestra tercera d&eacute;cada renovando nuestro compromiso de formar los mejores profesionales, esa motivaci&oacute;n crece y la encontramos en la m&iacute;stica de nuestros egresados que triunfan en los medios de comunicaci&oacute;n del pa&iacute;s y el extranjero; as&iacute; como en el esfuerzo y dedicaci&oacute;n de nuestros estudiantes. &iexcl; Bienvenidos al nuevo ISP!</p>\r\n</div>\r\n\";}', 'a:1:{s:2:\"es\";s:424:\"El 7 de agosto de 1986, el ministro de educaci&oacute;n por Resoluci&oacute;n Ministerial N&ordm; 501-86-ED, reconoce como carrera profesional &ldquo;Locuci&oacute;n y Comunicaci&oacute;n Radial y Televisiva&rdquo;; propuesta dise&ntilde;ada por la Asociaci&oacute;n Educativa &ldquo;Sistema Per&uacute;&rdquo;, a la vez que autoriza su funcionamiento como Instituto Superior Tecnol&oacute;gico Privado SISTEMAS PER&Uacute;.\";}', 'a:1:{s:2:\"es\";s:344:\"<p>Formar profesionales t&eacute;cnicos; investigadores, creativos, competentes y comprometidos en la soluci&oacute;n de problemas en el campo de las comunicaciones. Generando y desarrollando t&eacute;cnicas con conocimientos cient&iacute;ficos, human&iacute;sticos y tecnol&oacute;gicos a trav&eacute;s de los cuales buscamos soluciones.</p>\r\n\";}', 'a:1:{s:2:\"es\";s:191:\"<p>Hacer de cada uno de nuestros estudiantes, un profesional a carta cabal que cumpla un rol importante con &eacute;tica y moral al servicio de la sociedad. Comprometidos con la verdad.</p>\r\n\";}', '1', '1', '2015-11-04 22:51:54');

-- ----------------------------
-- Table structure for --slidehome
-- ----------------------------
DROP TABLE IF EXISTS `--slidehome`;
CREATE TABLE `--slidehome` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) DEFAULT NULL,
  `subtitulo` varchar(20) DEFAULT NULL,
  `descripcion` varchar(40) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `url` varchar(75) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of --slidehome
-- ----------------------------
INSERT INTO `--slidehome` VALUES ('13', 'Campus', 'Gastronómico', '', 'imagenes/home/slider-1_2.jpg', 'campus-gastronomico', '1', '1', '2016-07-04 23:52:09');
INSERT INTO `--slidehome` VALUES ('14', 'Carrera de ', 'Gastronomía', '', 'imagenes/home/slider-2.jpg', 'carrera-de-gastronomia', '2', '1', '2016-07-04 23:55:18');
INSERT INTO `--slidehome` VALUES ('15', 'Diplomado de', 'Pasteleria', '', 'imagenes/slidehome/slider-3.jpg', 'diplomado-de-pasteleria', '3', '1', '2016-07-04 23:53:54');

-- ----------------------------
-- Table structure for --traslados
-- ----------------------------
DROP TABLE IF EXISTS `--traslados`;
CREATE TABLE `--traslados` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of --traslados
-- ----------------------------
INSERT INTO `--traslados` VALUES ('1', 'a:1:{s:2:\"es\";s:9:\"TRASLADOS\";}', 'imagenes/mensaje/banner_traslado.jpg', 'a:1:{s:2:\"es\";s:1075:\"<p>Nos interesa que seas un profesional con los mejores conocimientos tanto te&oacute;ricos como pr&aacute;cticos en un ambiente de camarader&iacute;a y trabajo en equipo. Queremos que la pases bien mientras te formas.</p>\r\n\r\n<p>Como sabemos que eres &uacute;nico te damos un servicio innovador y diferenciado:</p>\r\n\r\n<ul style=\"padding-left: 16px; margin:20px 0\">\r\n	<li><strong>ISPort &gt;&gt;</strong> Momentos para el deporte (Voley, fulbito y ping pong).</li>\r\n	<li><strong>ISP invita &gt;&gt;</strong> Momentos para divertirte y compartir con alumnos y personal docente.</li>\r\n	<li><strong>Cine Club ISP &gt;&gt;</strong> Proyecci&oacute;n de pel&iacute;culas y videos para entretenimiento y aprendizaje.</li>\r\n	<li><strong>ISuP&eacute;rate &gt;&gt;</strong> Charlas y talleres gratuitos para tu auto superaci&oacute;n y crecimiento personal.</li>\r\n</ul>\r\n\r\n<p>Por eso y muchas razones m&aacute;s, queremos invitarte al ISP para contarte cu&aacute;l es nuestra nueva visi&oacute;n de la educaci&oacute;n y mostrarte una propuesta educativa completamente diferente.</p>\r\n\";}', 'a:1:{s:2:\"es\";s:43:\"POR QUÉ TRASLADARME A ISP? 							        \";}', 'a:1:{s:2:\"es\";s:48:\"Qué requisitos necesito para trasladarme a ISP?\";}', 'a:1:{s:2:\"es\";s:44:\"Cómo hago para trasladarme? 							        \";}', 'a:1:{s:2:\"es\";s:42:\"Cuándo puedo trasladarme? 							        \";}', 'a:1:{s:2:\"es\";s:1367:\"<p>Te ofrecemos un proceso de traslado atractivo que te permite convalidar algunos cursos que ya hayas llevado en tu actual instituto.</p>\r\n\r\n<p>Contar&aacute;s con un plan de pagos de acuerdo a tus necesidades previa categorizaci&oacute;n.</p>\r\n\r\n<p>&iexcl;Recibir&aacute;s una educaci&oacute;n integral con visitas a importantes empresas, para aprender en la cancha!</p>\r\n\r\n<p>Si destacas en tus estudios y gracias a nuestra amplia red de alianzas estrat&eacute;gicas te garantizamos trabajo incluso antes de graduarte.</p>\r\n\r\n<p>A partir del segundo a&ntilde;o de estudios ingresar&aacute;s autom&aacute;ticamente a nuestra Bolsa de Empleos.</p>\r\n\r\n<p>Seguir&aacute;s cursos de tu especialidad desde los primeros ciclos.</p>\r\n\r\n<p>Tu educaci&oacute;n ser&aacute; 100% pr&aacute;ctica desde el primer d&iacute;a ya que contamos con:</p>\r\n\r\n<ul>\r\n	<li><strong>Set de televisi&oacute;n &gt;&gt;</strong> Estudio propio con c&aacute;maras y luces profesionales</li>\r\n	<li><strong>Switcher profesional &gt;&gt;</strong> Como si estuvieras en el mismo canal de televisi&oacute;n</li>\r\n	<li><strong>Set de fotograf&iacute;a &gt;&gt;</strong> Estudio propio con c&aacute;maras e implementos de &uacute;ltimo generaci&oacute;n</li>\r\n	<li><strong>Cabina de radio &gt;&gt;</strong> Consola de audio, micros profesionales y software de edici&oacute;n profesional</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:252:\"<p>En ISP buscamos la excelencia educativa, por tanto debes cumplir con:</p>\r\n\r\n<ul>\r\n	<li>Haber aprobado los cr&eacute;ditos de estudio.</li>\r\n	<li>No haber sido separado de alguna instituci&oacute;n educativa por motivos disciplinarios.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:636:\"<p>Es muy sencillo. S&oacute;lo debes seguir estos 4 pasos:</p>\r\n\r\n<ul>\r\n	<li>Ac&eacute;rcate a nuestras oficinas en calle Madre de Dios 255 &ndash; Entre la cuadra 4 y 5 de Av. Petit Thouars frente al Paseo de las Aguas.</li>\r\n	<li>Luego de una entrevista personal con la Direcci&oacute;n Acad&eacute;mica sabr&aacute;s si est&aacute;s admitido.</li>\r\n	<li>Llenas la ficha de inscripci&oacute;n.</li>\r\n	<li>Presentas tu certificado de estudios y buena conducta emitido por el instituto de procedencia</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<h3 style=\"text-align:center; font-size:20px;\">EN ISP NO TE COBRAMOS NING&Uacute;N COSTO POR TRASLADARTE</h3>\r\n\";}', 'a:1:{s:2:\"es\";s:170:\"<p>Ahora mismo, tienes plazo para iniciar tus estudios en nuestro siguiente ciclo acad&eacute;mico 2016-I</p>\r\n\r\n<p>&iexcl;&iexcl;Ven y s&eacute; parte del cambio!!</p>\r\n\";}', 'a:1:{s:2:\"es\";s:40:\"CARRERAS Y TALLERES DISPONIBLES 2016 - 1\";}');

-- ----------------------------
-- Table structure for --traslado_pregunta
-- ----------------------------
DROP TABLE IF EXISTS `--traslado_pregunta`;
CREATE TABLE `--traslado_pregunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(50) DEFAULT NULL,
  `respuesta` text,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of --traslado_pregunta
-- ----------------------------
INSERT INTO `--traslado_pregunta` VALUES ('1', 'POR QUÉ TRASLADARME A ISP?', '<p>Te ofrecemos un proceso de traslado atractivo que te permite convalidar algunos cursos que ya hayas llevado en tu actual instituto.</p>\r\n\r\n<p>Contar&aacute;s con un plan de pagos de acuerdo a tus necesidades previa categorizaci&oacute;n.</p>\r\n\r\n<p>&iexcl;Recibir&aacute;s una educaci&oacute;n integral con visitas a importantes empresas, para aprender en la cancha!</p>\r\n\r\n<p>Si destacas en tus estudios y gracias a nuestra amplia red de alianzas estrat&eacute;gicas te garantizamos trabajo incluso antes de graduarte.</p>\r\n\r\n<p>A partir del segundo a&ntilde;o de estudios ingresar&aacute;s autom&aacute;ticamente a nuestra Bolsa de Empleos.</p>\r\n\r\n<p>Seguir&aacute;s cursos de tu especialidad desde los primeros ciclos.</p>\r\n\r\n<p>Tu educaci&oacute;n ser&aacute; 100% pr&aacute;ctica desde el primer d&iacute;a ya que contamos con:</p>\r\n\r\n<ul>\r\n	<li><strong>Set de televisi&oacute;n &gt;&gt;</strong> Estudio propio con c&aacute;maras y luces profesionales</li>\r\n	<li><strong>Switcher profesional &gt;&gt;</strong> Como si estuvieras en el mismo canal de televisi&oacute;n</li>\r\n	<li><strong>Set de fotograf&iacute;a &gt;&gt;</strong> Estudio propio con c&aacute;maras e implementos de &uacute;ltimo generaci&oacute;n</li>\r\n	<li><strong>Cabina de radio &gt;&gt;</strong> Consola de audio, micros profesionales y software de edici&oacute;n profesional</li>\r\n</ul>\r\n', null, '1', '2015-11-03 23:45:32');
INSERT INTO `--traslado_pregunta` VALUES ('2', 'Qué requisitos necesito para trasladarme a ISP?', '<p>En ISP buscamos la excelencia educativa, por tanto debes cumplir con:</p>\r\n\r\n<ul>\r\n	<li>Haber aprobado los cr&eacute;ditos de estudio.</li>\r\n	<li>No haber sido separado de alguna instituci&oacute;n educativa por motivos disciplinarios.</li>\r\n</ul>\r\n', null, '1', '2015-11-03 11:52:00');
INSERT INTO `--traslado_pregunta` VALUES ('3', 'Cómo hago para trasladarme?', '<p>Es muy sencillo. S&oacute;lo debes seguir estos 4 pasos:</p>\r\n\r\n<ul>\r\n	<li>Ac&eacute;rcate a nuestras oficinas en calle Madre de Dios 255 &ndash; Entre la cuadra 4 y 5 de Av. Petit Thouars frente al Paseo de las Aguas.</li>\r\n	<li>Luego de una entrevista personal con la Direcci&oacute;n Acad&eacute;mica sabr&aacute;s si est&aacute;s admitido.</li>\r\n	<li>Llenas la ficha de inscripci&oacute;n.</li>\r\n	<li>Presentas tu certificado de estudios y buena conducta emitido por el instituto de procedencia</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<h3 style=\"text-align:center; font-size:20px;\">EN ISP NO TE COBRAMOS NING&Uacute;N COSTO POR TRASLADARTE</h3>\r\n', null, '1', '2015-11-03 11:52:40');
INSERT INTO `--traslado_pregunta` VALUES ('4', 'Cuándo puedo trasladarme?', '<p>Ahora mismo, tienes plazo para iniciar tus estudios en nuestro siguiente ciclo acad&eacute;mico 2016-I</p>\r\n\r\n<p>&iexcl;&iexcl;Ven y s&eacute; parte del cambio!!</p>', null, '1', '2015-11-03 11:53:13');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of admision
-- ----------------------------
INSERT INTO `admision` VALUES ('1', 'Admisión 2019 - I', 'imagenes/resena/admison-18-marzo-2019.jpg', '&amp;lt;ul style=&amp;quot;list-style-type:circle;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Certificado de secundaria visado por la GRED.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Partida de nacimiento ACTUAL.&amp;amp;nbsp;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Copia del documento de identidad.&amp;amp;nbsp;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Copia de recibo agua y luz.&amp;amp;nbsp;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Dos fotos tama&amp;amp;ntilde;o carnet a color.&amp;amp;nbsp;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;Carnet de salud (vigente).&amp;amp;nbsp;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;P&amp;amp;oacute;liza de seguro contra accidentes.&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;', '&amp;lt;ul class=&amp;quot;list_ul_cer text-left&amp;quot; style=&amp;quot;list-style-type:square;&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;LUNEA A VIERNES&amp;lt;/strong&amp;gt;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;Turno ma&amp;amp;ntilde;ana: &amp;lt;/strong&amp;gt;7.30 am - 2.00 pm&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;Turno noche: &amp;lt;/strong&amp;gt;6:00 - 10:30 pm&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong style=&amp;quot;line-height: 1.6em;&amp;quot;&amp;gt;Duraci&amp;amp;oacute;n&amp;lt;/strong&amp;gt;&amp;lt;span style=&amp;quot;line-height: 1.6em;&amp;quot;&amp;gt;: &amp;lt;strong&amp;gt;3 a&amp;amp;ntilde;os&amp;lt;/strong&amp;gt; / VI ciclos (18 Semanas x ciclo)&amp;lt;/span&amp;gt;&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;INICIO&amp;lt;/strong&amp;gt;: 18 de marzo&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;', '&amp;lt;ul class=&amp;quot;list_ul_cer text-left&amp;quot;&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;MATR&amp;amp;Iacute;CULA&amp;lt;/strong&amp;gt;: S/. 310.00&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;UNIFORME&amp;lt;/strong&amp;gt;: S/. 200.00 (pantal&amp;amp;oacute;n + polo + garibaldi + camisaco + mandil)&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n	&amp;lt;li&amp;gt;&amp;lt;strong&amp;gt;MENSUALIDAD: &amp;lt;/strong&amp;gt;&amp;lt;br /&amp;gt;&lt;br /&gt;<br />\r\n	S/.650.00 (4 cuotas - Incluye insumos e idiomas)&amp;lt;/li&amp;gt;&lt;br /&gt;<br />\r\n&amp;lt;/ul&amp;gt;', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of amigos
-- ----------------------------
INSERT INTO `amigos` VALUES ('1', '&lt;section&gt;<br />\r\n&lt;h3&gt;SIGUE ESTAS INDICACIONES Y EMPIEZA A &lt;span style=&quot;color:red;&quot;&gt;&amp;iexcl;GANAR!&lt;/span&gt;.&lt;/h3&gt;<br />\r\n<br />\r\n&lt;ol class=&quot;text-left&quot;&gt;<br />\r\n	&lt;li value=&quot;1&quot;&gt;Recomienda un amigo o amigos a estudiar la carrera de Gastronom&amp;iacute;a y Arte Culinario con nosotros. Puedes recomendar todos los amigos(as) que desees.&lt;/li&gt;<br />\r\n	&lt;li&gt;Reg&amp;iacute;stralo(s) en www.escuelacumbre.edu.pe/amigopuntos.&lt;/li&gt;<br />\r\n	&lt;li&gt;Aseg&amp;uacute;rate que tu amigo o amigos recomendados figuren en nuestro registro de matriculados. Consulta en el &amp;aacute;rea de Informes.&lt;/li&gt;<br />\r\n	&lt;li&gt;Ac&amp;eacute;rcate al &amp;aacute;rea de Informes para obtener tu benefcio.&lt;/li&gt;<br />\r\n&lt;/ol&gt;<br />\r\n&lt;/section&gt;', 'a', 'a', 'marketing@escuelacumbre.edu.pe', '1', '1', '2017-10-02 19:47:19');

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of campus
-- ----------------------------
INSERT INTO `campus` VALUES ('16', 'Cumbre 1', '', 'Cumbre 1', 'imagenes/campus/campus1.jpg', '', '1', '1', '2016-07-11 06:29:22');
INSERT INTO `campus` VALUES ('17', 'Campus 2', '', '', 'imagenes/campus/campus2.jpg', '', '2', '1', '2016-07-11 06:30:18');
INSERT INTO `campus` VALUES ('18', 'Campus 3', '', '', 'imagenes/campus/campus3.jpg', '', '3', '1', '2016-07-11 06:30:39');
INSERT INTO `campus` VALUES ('19', 'Campus 4', '', '', 'imagenes/campus/campus4.jpg', '', '4', '1', '2016-07-11 06:30:59');
INSERT INTO `campus` VALUES ('20', 'Campus 5', '', '', 'imagenes/campus/campus5.jpg', '', '5', '1', '2016-07-11 06:31:48');
INSERT INTO `campus` VALUES ('21', 'Campus 6', '', '', 'imagenes/campus/campus6.jpg', '', '6', '1', '2016-07-11 06:32:03');
INSERT INTO `campus` VALUES ('22', 'Campus 7', '', '', 'imagenes/campus/campus7.jpg', '', '7', '1', '2016-07-11 06:32:18');
INSERT INTO `campus` VALUES ('23', 'Campus 8', '', '', 'imagenes/campus/campus8.jpg', '', '8', '1', '2016-07-11 06:32:34');
INSERT INTO `campus` VALUES ('24', 'Campus 9', '', '', 'imagenes/campus/campus9.jpg', '', '9', '1', '2016-07-11 06:32:48');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of carrera
-- ----------------------------
INSERT INTO `carrera` VALUES ('1', 'a:1:{s:2:\"es\";s:12:\"Gastronomía\";}', 'a:1:{s:2:\"es\";s:727:\"<p>Estudiar Gastronom&iacute;a en Chiclayo es un privilegio porque aqu&iacute; al parecer,&nbsp;se inici&oacute; la Historia del mundialmente reconocido Sabor Peruano.&nbsp;<br />\r\nEn Huaca Ventarr&oacute;n con m&aacute;s de 4,000 a&ntilde;os de antig&uuml;edad, se encontraron&nbsp;los primeros murales policromos de Am&eacute;rica.<br />\r\nEl Se&ntilde;or de Sip&aacute;n&nbsp;probablemente degustaba un &ldquo;chinguirito&rdquo; o pescado seco salado.<br />\r\nEl &ldquo;loche&rdquo;, &uacute;nico zapallo milenario da gusto a nuestras preparaciones&nbsp;desde tiempos inmemoriales.<br />\r\nDelicias a base de carnes de corral como&nbsp;el pato o cabrito seguir&aacute;n cautivando paladares hasta el final de los tiempos.</p>\r\n\";}', 'imagenes/carreras/head-carreras_2.jpg', 'imagenes/carreras/carrera-gastronomia.png', 'a:1:{s:2:\"es\";s:653:\"<h3>&iquest;QU&Eacute; ES GASTRONOM&Iacute;A?</h3>\r\n<br />\r\n<span style=\"font-size: 13px; line-height: 1.6em;\">La Gastronom&iacute;a es una disciplina que abarca todo lo relacionado al placer de la alimentaci&oacute;n humana. Las preparaciones con sus historias y tradiciones, los insumos e ingredientes, el servicio en mesa, las bebidas, los vinos, el desarrollo y manejo de negocios como restaurantes, cafeter&iacute;as, catering de eventos y mucho m&aacute;s.&nbsp;</span><em style=\"font-size: 13px; line-height: 1.6em;\"><span class=\"text-danger\">Gastronom&iacute;a no s&oacute;lo es cocinar o comer rico, va mucho m&aacute;s all&aacute;.</span></em>\";}', 'a:1:{s:2:\"es\";s:578:\"<h3>&iquest;POR QU&Eacute; ESTUDIAR GASTRONOM&Iacute;A?<br />\r\n<br />\r\n<span style=\"line-height: 1.6em; font-size: 13px;\">El mundo ha evolucionado en el aspecto gastron&oacute;mico, convirtiendo el alto nivel en servicio, en un est&aacute;ndar internacional. El turismo cada vez crece m&aacute;s, los paladares se sofistican cada d&iacute;a. Es necesario que el Per&uacute; profesionalice su afamada cocina. Un cocinero puede llegar a ser Chef, viajar por todo el mundo sirviendo con su arte y logrando satisfacciones tanto personales como de sus comensales.&nbsp;</span></h3>\r\n\";}', 'a:1:{s:2:\"es\";s:638:\"<h3>&iquest;D&Oacute;NDE PUEDES TRABAJAR?</h3>\r\n<br />\r\n<span style=\"font-size: 13px; line-height: 1.6em;\">El campo laboral es muy amplio, estos son algunos de los trabajos en donde se pueden desempe&ntilde;ar nuestros egresados:</span>\r\n\r\n<div class=\"text-block text-justify\">\r\n<ul class=\"list_ul\">\r\n	<li>Chef Ejecutivo de hoteles o restaurantes.</li>\r\n	<li>Gerente de Alimentos y Bebidas.</li>\r\n	<li><span style=\"line-height: 1.6em;\">Asesor o L&iacute;der de Empresas Gastron&oacute;micas.</span></li>\r\n	<li>Banquetes y eventos.&nbsp;</li>\r\n	<li>Chef ejecutivo, particular, asesor o instructor en establecimientos.</li>\r\n</ul>\r\n</div>\r\n\";}', 'a:1:{s:2:\"es\";s:174:\"M&oacute;dulo 1: Gastronom&iacute;a Regional<br />\r\nM&oacute;dulo 2: Gastronom&iacute;a Peruana<br />\r\nM&oacute;dulo 3: Gastronom&iacute;a Internacional<br />\r\n<br />\r\n&nbsp;\";}', 'a:1:{s:2:\"es\";s:317:\"<strong>CARRERA PROFESIONAL DE GASTRONOM&Iacute;A Y ARTE CULINARIO</strong><br />\r\nse entrega T&iacute;tulo a Nombre de la Naci&oacute;n<br />\r\n(R.M.N&deg; 0345 - 2008 - ED)<br />\r\n<strong>Duraci&oacute;n de la carrera: </strong>3 a&ntilde;os / VI Ciclos<br />\r\n(cada ciclo dura 4 meses)<br />\r\n<br />\r\n<br />\r\n&nbsp;\";}', 'a:1:{s:2:\"es\";s:328:\"<ul>\r\n	<li>Matr&iacute;cula: <strong>S/ 310.00</strong></li>\r\n	<li>Uniforme completo: <strong>S/ 200.00 </strong>(pantal&oacute;n + polo + garibaldi + camisaco + mandil)</li>\r\n	<li>Total por ciclo: <strong>S/ 2600.00</strong></li>\r\n	<li>Total por ciclo (pago al contado): <strong>S/ 2470.00 </strong>(5% descuento)</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:179:\"<strong>19&deg; </strong>Programa de Asesor&iacute;a de Proyectos para optar <strong>T&iacute;tulo Profesional T&eacute;cnico </strong>en GAC (Gastronom&iacute;a y Arte Culinario)\";}', 'a:1:{s:2:\"es\";s:10:\"16 SEMANAS\";}', 'a:1:{s:2:\"es\";s:24:\"INICIO: 19 DE ENERO 2019\";}', 'a:1:{s:2:\"es\";s:21:\"Sábados 9.00 a 13:00\";}', 'a:1:{s:2:\"es\";s:27:\"Av. Eufemio Lora y Lora 625\";}', 'a:1:{s:2:\"es\";s:12:\"S/. 4,630.00\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:12:\"(074) 228790\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:58:\"Dirigido a egresados con estudios conclu&iacute;dos.&nbsp;\";}', 'a:1:{s:2:\"es\";s:387:\"<ol>\r\n	<li>Seguridad e higiene alimentaria.</li>\r\n	<li>BPM.</li>\r\n	<li>&Aacute;rea de producci&oacute;n en cocina.</li>\r\n	<li>Marketing aplicado.</li>\r\n	<li>Etiqueta y protocolo.</li>\r\n	<li>T&eacute;cnicas b&aacute;sicas de cocina.</li>\r\n	<li>Repertorio de cocina regional y peruana.</li>\r\n	<li>Cata de vinos y maridaje.</li>\r\n	<li>Asesor&iacute;a de proyectos productivos.</li>\r\n</ol>\r\n\";}', 'gastronomia', '0', '1', '2019-01-11 11:43:08');

-- ----------------------------
-- Table structure for chef
-- ----------------------------
DROP TABLE IF EXISTS `chef`;
CREATE TABLE `chef` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `apellidos` varchar(150) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `cargo` varchar(120) COLLATE utf8mb4_bin NOT NULL DEFAULT '',
  `resumen` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL,
  `descripcion` longtext COLLATE utf8mb4_bin,
  `imagen` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL,
  `item` int(11) DEFAULT NULL,
  `publicar` char(1) COLLATE utf8mb4_bin NOT NULL DEFAULT 'S',
  `estado` int(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of chef
-- ----------------------------
INSERT INTO `chef` VALUES ('1', 'LUIS', 'HUERTA', 'Chef', 'MASTER PATISSIER', 0x266C743B756C2667743B3C6272202F3E0D0A09266C743B6C692667743B457370656369616C697A61636926616D703B6F61637574653B6E20656E204172746973616E2047656C61746F202D2043617270696769616E692047656C61746F20556E69766572736974792C20426F6C6F676E61202D204974616C69612E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B50616E6164657226616D703B6961637574653B61206172746573616E616C20792064656C206D756E646F202D20496E73746974757465206F662043756C696E61727920456475636174696F6E2028494345292C204E657720596F726B2E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B43686F636F6C6174657226616D703B6961637574653B61207920426F6D626F6E657226616D703B6961637574653B61202D2043686F636F6C6174652041636164656D792C204368696361676F2C205553412E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B576F726B73686F7020636F6E2056616C72686F6E6126616D703B6E6273703B2043686F636F6C617465202D20456D6972617465732041636164656D792C2044756226616D703B6161637574653B692E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B50617374727920636865662061736F636961646F2026616D703B6E646173683B204D69616D692043756C696E61727920496E73746974757465266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B506173747279206368656620656E205265736F7274204D6164696E6174204A756D65697261682C2044756226616D703B6161637574653B692E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B506173747279206368656620656E205265736F72742043616E796F6E2052616E6368204D69616D692C205553412E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4D61737465722050617469737369657269652C204C6520436F72646F6E20426C65752050657226616D703B7561637574653B2E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4C696E65636F6F6B2072657374617572616E74204D616C616261722C204C696D61266C743B2F6C692667743B3C6272202F3E0D0A266C743B2F756C2667743B, 'images/chef/1.jpg', '1', 'S', '1', '2019-03-02 18:20:26');
INSERT INTO `chef` VALUES ('2', 'KEVIN', 'SUÁREZ', 'Chef', 'ESPECIALISTA EN COCINA INTERNACIONAL', 0x266C743B756C2667743B3C6272202F3E0D0A09266C743B6C692667743B436F63696E65726F20656E2052657374617572616E74205226616D703B6561637574653B6769732026616D703B616D703B204A616371756573204D4152434F4E2026616D703B6E646173683B20332045737472656C6C6173204D696368656C696E2C204672616E6369612E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B436F63696E65726F20656E2052657374617572616E74204C756973204265726E6172642050756563682D20312045737472656C6C61204D696368656C696E2C204672616E6369612E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4D617374657220437563696E6120656E20494349462C204974616C69612E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4D61737465722043756973696E6520656E2045736375656C612064652047617374726F6E6F6D26616D703B6961637574653B61207920417274652043756C696E6172696F2043756D6272652E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4368656620656E20526573747572616E7465204C6F6368652C20486F74656C2043617361206465206C61204C756E612C20436869636C61796F2E266C743B2F6C692667743B3C6272202F3E0D0A266C743B2F756C2667743B, 'images/chef/2.jpg', '2', 'S', '1', '2019-03-02 18:20:26');
INSERT INTO `chef` VALUES ('3', 'BORIS', 'STAKEEFF', 'Chef', 'ESPECIALISTA EN COCINA PERUANA E INTERNACIONAL', 0x266C743B756C2667743B3C6272202F3E0D0A09266C743B6C692667743B43686566206465207061727469652064656C20526973746F72616E7465205175616472692C2056656E656369612C204974616C69612E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4D617374657220437563696E6120656E20494349462C204974616C69612E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B43686566207061726120656C20494920466F726F204D756E6469616C2064652054757269736D6F2047617374726F6E26616D703B6F61637574653B6D69636F2E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4361706163697461646F72207061726120656C204D494E43455455522026616D703B6E646173683B2043454E464F5455522E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4368656620617365736F7220656E2053757065726D65726361646F732050657275616E6F732E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B436F616368696E6720792074726162616A6F20656E2065717569706F202D2050726F6E6162656320284D494E454455292E266C743B2F6C692667743B3C6272202F3E0D0A266C743B2F756C2667743B, 'images/chef/3.jpg', '3', 'S', '0', '2019-03-02 18:20:26');
INSERT INTO `chef` VALUES ('4', 'ANDRÉ', 'KUNIYOSHI', 'Chef', 'ESPECIALISTA EN COCINA PERUANA', 0x266C743B756C2667743B3C6272202F3E0D0A09266C743B6C692667743B436865662064652070617274696520656E2072657374617572616E7420416E6472652043686174656C6172642C204672616E6369612E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4368656620456A6563757469766F206465206C6120636164656E61204361736120416E64696E6120486F74656C2E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4D61737465722043756973696E6520656E2045736375656C612064652047617374726F6E6F6D26616D703B6961637574653B61207920417274652043756C696E6172696F2043756D6272652E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B417365736F722067617374726F6E26616D703B6F61637574653B6D69636F20656E206469766572736F732072657374617572616E7465732061206E6976656C206E6163696F6E616C266C743B2F6C692667743B3C6272202F3E0D0A266C743B2F756C2667743B, 'images/chef/4.jpg', '4', 'S', '0', '2019-03-02 18:20:27');
INSERT INTO `chef` VALUES ('5', 'JESÚS', 'ZAMORA', 'Chef', 'ESPECIALISTA EN COCINA PERUANA', 0x266C743B756C2667743B3C6272202F3E0D0A09266C743B6C692667743B436865662064652070617274696520656E20526573746175616E74204C26616D703B61637574653B416D626173736164652C204672616E6369612E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4D61737465722043756973696E6520656E2045736375656C612064652047617374726F6E6F6D26616D703B6961637574653B61207920417274652043756C696E6172696F2043756D6272652E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4368656620656E2052657374617572616E7420456C2052696E6326616D703B6F61637574653B6E20517565204E6F20436F6E6F6365732C204C696D612E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B41646D696E6973747261636926616D703B6F61637574653B6E207920676573746926616D703B6F61637574653B6E2064652072657374617572616E74657320656E206C612045736375656C61204E6163696F6E616C2064652047617374726F6E6F6D26616D703B6961637574653B612C204C696D612E266C743B2F6C692667743B3C6272202F3E0D0A266C743B2F756C2667743B, 'images/chef/5.jpg', '5', 'S', '1', '2019-03-02 18:20:27');
INSERT INTO `chef` VALUES ('6', 'AGUSTÍN', 'JORDAN', 'Chef', 'ESPECIALISTA EN COCINA REGIONAL', 0x266C743B756C2667743B3C6272202F3E0D0A09266C743B6C692667743B4368656620656A6563757469766F2064656C2072657374617572616E74652074757226616D703B6961637574653B737469636F2026616D703B6C6471756F3B456C204326616D703B6161637574653B6E7461726F26616D703B726471756F3B2C204C616D626179657175652E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4578706F7369746F7220656E206C6120466572696120496E7465726E6163696F6E616C204D6973747572612028646F73206126616D703B6E74696C64653B6F7320636F6E736563757469766F73292E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B496E76657374696761646F72207920676573746F72206465206C612067617374726F6E6F6D26616D703B6961637574653B6120726567696F6E616C2065206964656E7469646164206C616D6261796563616E612E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4578706F7369746F7220656E206665726961732064652067617374726F6E6F6D26616D703B6961637574653B6120792074757269736D6F2C20636F6E677265736F7320792074616C6C657265732061206E6976656C206E6163696F6E616C206520696E7465726E6163696F6E616C2E266C743B2F6C692667743B3C6272202F3E0D0A09266C743B6C692667743B4573747564696F7320646520416C746120436F63696E6120656E20486F73706974616C696C79204D616E6167656D656E74205363686F6F6C20436F6C756D6269612C204C696D612E266C743B2F6C692667743B3C6272202F3E0D0A266C743B2F756C2667743B, 'images/chef/6.jpg', '6', 'S', '1', '2019-03-02 18:20:27');
INSERT INTO `chef` VALUES ('7', 'Carlos', 'Urbina', 'Chef', '', 0x266C743B702667743B26616D703B6E6273703B266C743B2F702667743B, 'images/chef/201903041103473325.jpg', '7', 'N', '1', '2019-03-04 11:07:36');
INSERT INTO `chef` VALUES ('8', 'Jimmy', 'Arévalo', 'Chef', '', 0x266C743B702667743B26616D703B6E6273703B266C743B2F702667743B, 'images/chef/201903041103274790.jpg', '8', 'N', '1', '2019-03-04 11:07:34');
INSERT INTO `chef` VALUES ('9', 'Manuel', 'Arevalo', 'Chef', '', 0x266C743B702667743B26616D703B6E6273703B266C743B2F702667743B, 'images/chef/201903041103481292.jpg', '9', 'N', '1', '2019-03-04 11:12:52');

-- ----------------------------
-- Table structure for configuracion
-- ----------------------------
DROP TABLE IF EXISTS `configuracion`;
CREATE TABLE `configuracion` (
  `configuracion_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) CHARACTER SET latin1 NOT NULL,
  `horario` text CHARACTER SET latin1,
  `direccion` text CHARACTER SET latin1,
  `email` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `telefono` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `facebook` varchar(75) CHARACTER SET latin1 DEFAULT NULL,
  `youtube` varchar(75) CHARACTER SET latin1 DEFAULT NULL,
  `instagram` varchar(75) CHARACTER SET latin1 DEFAULT NULL,
  `mapa` text CHARACTER SET latin1,
  `popup` varchar(75) CHARACTER SET latin1 DEFAULT NULL,
  `show_popup` int(1) DEFAULT NULL,
  `estado` char(1) COLLATE utf8mb4_bin NOT NULL DEFAULT '1',
  PRIMARY KEY (`configuracion_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of configuracion
-- ----------------------------
INSERT INTO `configuracion` VALUES ('1', 'INSTITUTO DE GASTRONOMÍA &amp; ARTE CULINARIO', '&lt;p&gt;Lunes a Viernes de 8:00 a.m. a 8.00 p.m.&lt;/p&gt;', '&lt;p&gt;Av. Eufemio Lora y Lora 625&lt;/p&gt;', 'recepcion@escuelacumbre.edu.pe', '(074) 228 790', 'https://www.facebook.com/CumbrePeru', 'https://www.youtube.com/results?search_query=Cumbre+Gastronomia', 'fotos123', '', 'imagenes/home/slider-1_1.jpg', '0', '1');

-- ----------------------------
-- Table structure for noticia
-- ----------------------------
DROP TABLE IF EXISTS `noticia`;
CREATE TABLE `noticia` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) CHARACTER SET latin1 NOT NULL,
  `descripcion` longtext CHARACTER SET latin1,
  `imagen` varchar(200) CHARACTER SET latin1 DEFAULT '',
  `url` varchar(200) CHARACTER SET latin1 NOT NULL,
  `item` int(11) DEFAULT NULL,
  `glosa` text CHARACTER SET latin1,
  `publicar` char(1) CHARACTER SET latin1 DEFAULT 'S',
  `estado` tinyint(1) unsigned DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of noticia
-- ----------------------------
INSERT INTO `noticia` VALUES ('1', 'Conferencias Magistrales', '', 'imagenes/eventos/conferencias-magistrales.jpg', 'conferencias-magistrales', '1', '', 'S', '1', '2019-03-02 13:31:24');
INSERT INTO `noticia` VALUES ('2', 'Clases Magistrales', '', 'imagenes/eventos/clases-magistrales.jpg', 'clases-magistrales', '2', '', 'S', '1', '2019-03-02 13:31:24');
INSERT INTO `noticia` VALUES ('3', 'Expo Cumbre', '', 'imagenes/eventos/expo-cumbre_1.jpg', 'expo-cumbre', '3', '', 'S', '1', '2019-03-02 13:31:24');
INSERT INTO `noticia` VALUES ('4', 'Fiesta de Gala', '', 'imagenes/eventos/fiesta-de-gala.jpg', 'fiesta-de-gala', '4', '', 'S', '1', '2019-03-02 13:31:24');
INSERT INTO `noticia` VALUES ('5', 'Imposición de camisacos I Ciclo', 'Nuestros estudiantes de primer ciclo recibieron su primera chaqueta, s&amp;iacute;mbolo de integridad y respeto hacia la pronta profesi&amp;oacute;n que los acompa&amp;ntilde;ar&amp;aacute; siempre.', 'imagenes/eventos/im-1.jpg', 'imposicion-de-camisacos-i-ciclo', '5', '', 'S', '1', '2019-03-02 13:31:24');
INSERT INTO `noticia` VALUES ('6', 'Activación Olmos', 'Activaci&amp;oacute;n en el Centro de esparcimiento &lt;strong&gt;&amp;ldquo;Los Algarrobos&amp;rdquo;&lt;/strong&gt; &amp;ndash; Olmos a las 9:00 am, el d&amp;iacute;a 22 de Septiembre del presente. El motivo de nuestra presencia fue participar de la feria vocacional exponiendo nuestra carrera profesional de gastronom&amp;iacute;a con la que cuenta la instituci&amp;oacute;n.&lt;br /&gt;<br />\r\n&amp;nbsp;', 'imagenes/eventos/im-2.jpg', 'activacion-olmos', '6', '', 'S', '1', '2019-03-02 13:31:24');
INSERT INTO `noticia` VALUES ('7', 'Miss Cumbre', 'La Escuela Peruana de Gastronom&amp;iacute;a y Arte Culinario &amp;ldquo;CUMBRE&amp;rdquo;, organiza en el marco de su XI Aniversario Institucional &lt;strong&gt;&amp;ldquo;MISS CUMBRE 2017&amp;rdquo;, &lt;/strong&gt;en la que se busca elegir a la dama que habr&amp;aacute; de representar a la singular belleza gastron&amp;oacute;mica, as&amp;iacute; como tambi&amp;eacute;n sus principios y virtudes.', 'imagenes/eventos/im-3.jpg', 'miss-cumbre', '7', '', 'S', '1', '2019-03-02 13:31:24');
INSERT INTO `noticia` VALUES ('8', 'Cumbrematch', 'La Escuela Peruana de Gastronom&amp;iacute;a y Arte Culinario &amp;ldquo;CUMBRE&amp;rdquo;, organiza en el marco de su XI Aniversario Institucional el &lt;strong&gt;CUMBREMATCH 2017, Copa &amp;ldquo;INGENIA&amp;rdquo;&lt;/strong&gt; con la participaci&amp;oacute;n de todos los estudiantes y miembros de la instituci&amp;oacute;n con el prop&amp;oacute;sito de fomentar la pr&amp;aacute;ctica del deporte, la sana competencia; as&amp;iacute; como, estrechar los lazos de confraternidad que permitan un desarrollo integral del estudiante y la identificaci&amp;oacute;n con su Escuela.', 'imagenes/eventos/im-4.jpg', 'cumbrematch', '8', '', 'S', '1', '2019-03-02 13:31:24');
INSERT INTO `noticia` VALUES ('9', 'Seminario Magistral - Cumbre 2017', '', 'imagenes/eventos/cha-cha.jpg', 'seminario-magistral-cumbre-2017', '9', '', 'S', '1', '2019-03-02 13:31:24');
INSERT INTO `noticia` VALUES ('10', 'Conferencia de Prensa', '', 'imagenes/eventos/con-prensa_1.jpg', 'conferencia-de-prensa', '10', '', 'S', '1', '2019-03-02 13:31:25');
INSERT INTO `noticia` VALUES ('11', 'CUMBRE MATCH', '', 'imagenes/eventos/cumbremacth.jpg', 'cumbre-match', '11', '', 'S', '1', '2019-03-02 13:31:25');
INSERT INTO `noticia` VALUES ('12', 'EXPOCUMBRE 2017', '', 'imagenes/eventos/expocumbre.jpg', 'expocumbre-2017', '12', '', 'S', '1', '2019-03-02 13:31:25');
INSERT INTO `noticia` VALUES ('13', 'Fiesta de Gala 2017', '', 'imagenes/eventos/fiesta-gala.jpg', 'fiesta-de-gala-2017', '13', '', 'S', '1', '2019-03-02 13:31:25');
INSERT INTO `noticia` VALUES ('14', 'Guerra de cocinas', '', 'imagenes/eventos/guerra-de-cocinas.jpg', 'guerra-de-cocinas', '14', '', 'S', '1', '2019-03-02 13:31:25');
INSERT INTO `noticia` VALUES ('15', 'Miss Cumbre 2017', '', 'imagenes/eventos/miss-cumbre.jpg', 'miss-cumbre-2017', '15', '', 'S', '1', '2019-03-02 13:31:25');
INSERT INTO `noticia` VALUES ('16', 'I Programa de Actualización Docente y Fortalecimiento de Competencias Pedagógicas', '', 'imagenes/eventos/x-min.jpg', 'i-programa-de-actualizacion-docente-y-fortalecimiento-de-competencias-pedagogicas', '16', '', 'S', '1', '2019-03-02 13:31:25');
INSERT INTO `noticia` VALUES ('17', 'Campaña de Protección ambiental', '', 'imagenes/eventos/x.jpg', 'campanna-de-proteccion-ambiental', '17', '', 'S', '1', '2019-03-02 13:31:25');
INSERT INTO `noticia` VALUES ('18', 'CHARLA MAGISTRAL', '', 'http://www.escuelacumbre.edu.pe/2018/imagenes/nodisponible.jpg', 'charla-magistral', '18', '', 'S', '1', '2019-03-02 13:31:25');
INSERT INTO `noticia` VALUES ('19', 'CHARLA MAGISTRAL 2', '', 'http://www.escuelacumbre.edu.pe/2018/imagenes/nodisponible.jpg', 'charla-magistral-2', '19', '', 'S', '1', '2019-03-02 13:31:25');

-- ----------------------------
-- Table structure for noticia_img
-- ----------------------------
DROP TABLE IF EXISTS `noticia_img`;
CREATE TABLE `noticia_img` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `noticia_id` int(11) unsigned DEFAULT NULL,
  `imagen` varchar(200) DEFAULT '',
  `item` int(11) DEFAULT '0',
  `estado` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of noticia_img
-- ----------------------------
INSERT INTO `noticia_img` VALUES ('3', '1', 'images/noticia/03-jpg-1468583251.jpg', '3', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('4', '1', 'images/noticia/04-jpg-1468583252.jpg', '4', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('5', '1', 'images/noticia/05-jpg-1468583252.jpg', '5', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('6', '1', 'images/noticia/05-1-jpg-1468583253.jpg', '6', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('7', '1', 'images/noticia/05-2-jpg-1468583253.jpg', '7', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('8', '1', 'images/noticia/06-jpg-1468583254.jpg', '8', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('9', '1', 'images/noticia/07-jpg-1468583254.jpg', '9', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('10', '1', 'images/noticia/08-jpg-1468583255.jpg', '10', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('13', '2', 'images/noticia/03-jpg-1468584349.jpg', '13', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('14', '2', 'images/noticia/05-jpg-1468584357.jpg', '14', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('15', '2', 'images/noticia/05-1-jpg-1468584367.jpg', '15', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('16', '2', 'images/noticia/06-jpg-1468584390.jpg', '16', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('18', '2', 'images/noticia/09-jpg-1468584408.jpg', '18', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('19', '2', 'images/noticia/01-jpg-1468595077.jpg', '19', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('20', '2', 'images/noticia/02-jpg-1468595096.jpg', '20', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('21', '2', 'images/noticia/03-jpg-1468595218.jpg', '21', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('22', '2', 'images/noticia/04-jpg-1468595231.jpg', '22', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('23', '2', 'images/noticia/05-jpg-1468595476.jpg', '23', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('24', '2', 'images/noticia/06-jpg-1468595590.jpg', '24', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('25', '3', 'images/noticia/01-jpg-1468595836.jpg', '25', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('26', '3', 'images/noticia/02-jpg-1468595985.jpg', '26', '1', '2019-03-02 13:35:11');
INSERT INTO `noticia_img` VALUES ('27', '3', 'images/noticia/03-jpg-1468596005.jpg', '27', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('28', '3', 'images/noticia/04-jpg-1468596090.jpg', '28', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('29', '3', 'images/noticia/06-jpg-1468596175.jpg', '29', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('30', '3', 'images/noticia/05-jpg-1468596190.jpg', '30', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('31', '3', 'images/noticia/02-jpg-1468596848.jpg', '31', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('32', '3', 'images/noticia/05-jpg-1468597176.jpg', '32', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('33', '3', 'images/noticia/06-jpg-1468597347.jpg', '33', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('34', '3', 'images/noticia/03-jpg-1468597366.jpg', '34', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('35', '4', 'images/noticia/01-jpg-1468599126.jpg', '35', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('36', '4', 'images/noticia/02-jpg-1468599136.jpg', '36', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('37', '4', 'images/noticia/03-jpg-1468599143.jpg', '37', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('38', '4', 'images/noticia/04-jpg-1468599148.jpg', '38', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('39', '4', 'images/noticia/05-jpg-1468599155.jpg', '39', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('40', '4', 'images/noticia/06-jpg-1468599160.jpg', '40', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('41', '4', 'images/noticia/07-jpg-1468599165.jpg', '41', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('42', '4', 'images/noticia/08-jpg-1468599168.jpg', '42', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('43', '4', 'images/noticia/09-jpg-1468599174.jpg', '43', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('44', '5', 'images/noticia/camisacos-oct-2017-1.jpg', '44', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('45', '5', 'images/noticia/camisacos-oct-2017-2.jpg', '45', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('46', '6', 'images/noticia/activ-olmos-oct-2017-1.jpg', '46', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('47', '6', 'images/noticia/activ-olmos-oct-2017-2.jpg', '47', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('48', '6', 'images/noticia/activ-olmos-oct-2017-3.jpg', '48', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('49', '7', 'images/noticia/mis-cumbre-oct-2017.jpg', '49', '1', '2019-03-02 13:35:12');
INSERT INTO `noticia_img` VALUES ('50', '8', 'images/noticia/expo-cumbre-oct-2017.jpg', '50', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('51', '9', 'images/noticia/seminarios-magistrales-17/cha1.jpg', '1', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('52', '9', 'images/noticia/seminarios-magistrales-17/cha2.jpg', '2', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('53', '9', 'images/noticia/seminarios-magistrales-17/cha3.jpg', '3', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('54', '9', 'images/noticia/seminarios-magistrales-17/cha4.jpg', '4', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('55', '9', 'images/noticia/seminarios-magistrales-17/cha5.jpg', '5', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('56', '10', 'images/noticia/conf-prensa-nov17/con-prensa-1.jpg', '1', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('57', '10', 'images/noticia/conf-prensa-nov17/con-prensa-2.jpg', '2', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('58', '10', 'images/noticia/conf-prensa-nov17/con-prensa-3.jpg', '3', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('59', '10', 'images/noticia/conf-prensa-nov17/con-prensa-4.jpg', '4', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('60', '11', 'images/noticia/cumbrematch-nov17/cumbre-match-1.jpg', '1', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('61', '11', 'images/noticia/cumbrematch-nov17/cumbre-match-2.jpg', '2', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('62', '11', 'images/noticia/cumbrematch-nov17/cumbre-match-3.jpg', '3', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('70', '12', 'images/noticia/expocumbre-2017/expocumbre-1.jpg', '1', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('71', '12', 'images/noticia/expocumbre-2017/expocumbre-2.jpg', '2', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('72', '12', 'images/noticia/expocumbre-2017/expocumbre-3.jpg', '3', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('73', '12', 'images/noticia/expocumbre-2017/expocumbre-4.jpg', '4', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('74', '12', 'images/noticia/expocumbre-2017/expocumbre-5.jpg', '5', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('75', '12', 'images/noticia/expocumbre-2017/expocumbre-6.jpg', '6', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('76', '13', 'images/noticia/fiesta-gala-2017/1.jpg', '1', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('77', '13', 'images/noticia/fiesta-gala-2017/2.jpg', '2', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('78', '13', 'images/noticia/fiesta-gala-2017/3.jpg', '3', '1', '2019-03-02 13:35:13');
INSERT INTO `noticia_img` VALUES ('79', '13', 'images/noticia/fiesta-gala-2017/4.jpg', '4', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('80', '13', 'images/noticia/fiesta-gala-2017/5.jpg', '5', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('81', '14', 'images/noticia/guerra-de-cocinas/1.jpg', '1', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('82', '14', 'images/noticia/guerra-de-cocinas/2.jpg', '2', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('83', '14', 'images/noticia/guerra-de-cocinas/3.jpg', '3', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('84', '14', 'images/noticia/guerra-de-cocinas/4.jpg', '4', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('85', '14', 'images/noticia/guerra-de-cocinas/5.jpg', '5', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('86', '15', 'images/noticia/miss-cumbre-17/1.jpg', '1', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('87', '15', 'images/noticia/miss-cumbre-17/2.jpg', '2', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('88', '15', 'images/noticia/miss-cumbre-17/3.jpg', '3', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('89', '15', 'images/noticia/miss-cumbre-17/4.jpg', '4', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('90', '15', 'images/noticia/miss-cumbre-17/5.jpg', '5', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('91', '17', 'images/noticia/web-01-1-jpg-1545418300.jpg', '51', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('92', '17', 'images/noticia/web-01-jpg-1545418301.jpg', '52', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('93', '17', 'images/noticia/willay-01-jpg-1545418304.jpg', '53', '1', '2019-03-02 13:35:14');
INSERT INTO `noticia_img` VALUES ('94', '1', 'images/noticia/conferencias-magistrales.jpg', '0', '1', '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES ('95', '2', 'images/noticia/clases-magistrales.jpg', '0', '1', '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES ('96', '3', 'images/noticia/expo-cumbre_1.jpg', '0', '1', '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES ('97', '4', 'images/noticia/fiesta-de-gala.jpg', '0', '1', '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES ('98', '5', 'images/noticia/im-1.jpg', '0', '1', '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES ('99', '6', 'images/noticia/im-2.jpg', '0', '1', '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES ('100', '7', 'images/noticia/im-3.jpg', '0', '1', '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES ('101', '8', 'images/noticia/im-4.jpg', '0', '1', '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES ('102', '9', 'images/noticia/cha-cha.jpg', '0', '1', '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES ('103', '10', 'images/noticia/con-prensa_1.jpg', '0', '1', '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES ('104', '11', 'images/noticia/cumbremacth.jpg', '0', '1', '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES ('105', '12', 'images/noticia/expocumbre.jpg', '0', '1', '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES ('106', '13', 'images/noticia/fiesta-gala.jpg', '0', '1', '2019-03-02 13:40:43');
INSERT INTO `noticia_img` VALUES ('107', '14', 'images/noticia/guerra-de-cocinas.jpg', '0', '1', '2019-03-02 13:40:44');
INSERT INTO `noticia_img` VALUES ('108', '15', 'images/noticia/miss-cumbre.jpg', '0', '1', '2019-03-02 13:40:44');
INSERT INTO `noticia_img` VALUES ('109', '16', 'images/noticia/x-min.jpg', '0', '1', '2019-03-02 13:40:44');
INSERT INTO `noticia_img` VALUES ('110', '17', 'images/noticia/x.jpg', '0', '1', '2019-03-02 13:40:44');
INSERT INTO `noticia_img` VALUES ('111', '18', 'http://www.escuelacumbre.edu.pe/2018/imagenes/nodisponible.jpg', '0', '1', '2019-03-02 13:40:44');
INSERT INTO `noticia_img` VALUES ('112', '19', 'http://www.escuelacumbre.edu.pe/2018/imagenes/nodisponible.jpg', '0', '1', '2019-03-02 13:40:44');

-- ----------------------------
-- Table structure for red
-- ----------------------------
DROP TABLE IF EXISTS `red`;
CREATE TABLE `red` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(125) CHARACTER SET latin1 DEFAULT NULL,
  `subtitulo` varchar(125) CHARACTER SET latin1 DEFAULT NULL,
  `tipo` varchar(125) CHARACTER SET latin1 DEFAULT NULL,
  `vacantes` varchar(125) CHARACTER SET latin1 DEFAULT NULL,
  `requisitos` text CHARACTER SET latin1 NOT NULL,
  `conocimientos` text CHARACTER SET latin1 NOT NULL,
  `salario` varchar(125) CHARACTER SET latin1 DEFAULT NULL,
  `nombrecontacto` varchar(125) CHARACTER SET latin1 DEFAULT NULL,
  `telefonocontacto` varchar(125) CHARACTER SET latin1 DEFAULT NULL,
  `emailcontacto` varchar(125) CHARACTER SET latin1 DEFAULT NULL,
  `item` int(11) NOT NULL,
  `publicar` char(1) CHARACTER SET latin1 NOT NULL DEFAULT 'S',
  `estado` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of red
-- ----------------------------
INSERT INTO `red` VALUES ('1', 'Restaurantes', 'El Sabor de la Pedro', 'Prácticas', '02', '&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Aptitudes:&lt;/strong&gt; Comprometido, honesto, proactivo e Innovador.&lt;/li&gt;&lt;li&gt;Tiempo completo&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Dirección: &lt;/strong&gt;Juan XXIII N° 370 - Lambayeque ( frente a la UNPRG)&lt;/li&gt;&lt;/ul&gt;', '&lt;ul&gt;&lt;li&gt;Platos criollos, platos de pescado y mariscos (preferente)&lt;/li&gt;&lt;li&gt;Preparación de jugos frutales&lt;/li&gt;&lt;li&gt;Cotización de platos (costo de producción)&lt;/li&gt;&lt;/ul&gt;', '--', 'Yurggen Salvador Bendezú Jáuregui', '939632397', 'yurggenbj@gmail.com', '0', 'S', '1', '2019-03-04 11:36:10');

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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of suscrito
-- ----------------------------
INSERT INTO `suscrito` VALUES ('1', 'Armando E', '', 'armandoaepp@gmail.com', '', '', 'mensaje de prueba', '1', '2019-02-13 10:02:29');
INSERT INTO `suscrito` VALUES ('2', 'Armando E', '', 'armandoaepp@gmail.com', '', '', 'mensaje de prueba', '1', '2019-02-13 11:02:40');
INSERT INTO `suscrito` VALUES ('3', 'Armando E', '', 'armandoaepp@gmail.com', '', '', 'Mensaje de prueba desde la web cumbre: CONTACTANOS', '1', '2019-02-13 11:02:38');
INSERT INTO `suscrito` VALUES ('4', 'fedra nury more castro', '', 'fedranury30@gmail.com', '', '', 'como puedo hacer para solicitar mi certificado de  haber  <br />\r\nterminado mis estudios', '1', '2019-02-27 00:02:41');
INSERT INTO `suscrito` VALUES ('5', 'Belén', '', 'belen.paicob@gmail.com', '', '', 'Buenos días quisiera saber sobre la carrera y sobre tbm sus pagos y su número telefónico no da', '1', '2019-02-27 09:02:31');
INSERT INTO `suscrito` VALUES ('6', 'Gina Lisbeth Fernandez Montenegro', '', 'ginafernandezmontenegro@gmail.com', '', '', 'Buenas tardes, me gustaria que me informen si habran vacantes en Agosto.<br />\r\n<br />\r\nGracias', '1', '2019-02-27 13:02:12');
INSERT INTO `suscrito` VALUES ('7', 'oscar archila', '', 'oscararchila1994@gmail.com', '', '', 'pa obtener informacion de los cursos? gracias', '1', '2019-02-28 17:02:42');

-- ----------------------------
-- Table structure for taller
-- ----------------------------
DROP TABLE IF EXISTS `taller`;
CREATE TABLE `taller` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `chef_id` int(10) unsigned DEFAULT '0',
  `titulo` varchar(75) CHARACTER SET latin1 DEFAULT NULL,
  `descripcion` text CHARACTER SET latin1 NOT NULL,
  `imagen` varchar(75) CHARACTER SET latin1 NOT NULL,
  `certificacion` text CHARACTER SET latin1 NOT NULL,
  `titulos` text CHARACTER SET latin1 NOT NULL,
  `titulacion` text CHARACTER SET latin1 NOT NULL,
  `duracion` text CHARACTER SET latin1 NOT NULL,
  `dia` text CHARACTER SET latin1,
  `horario` text CHARACTER SET latin1,
  `lugar` text CHARACTER SET latin1,
  `precio` text CHARACTER SET latin1,
  `dirigido` text CHARACTER SET latin1,
  `sesiones` varchar(255) CHARACTER SET latin1 DEFAULT '',
  `temas` text CHARACTER SET latin1,
  `url` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `item` int(11) NOT NULL,
  `glosa` text CHARACTER SET latin1,
  `publicar` char(1) CHARACTER SET latin1 NOT NULL DEFAULT 'S',
  `estado` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of taller
-- ----------------------------
INSERT INTO `taller` VALUES ('1', '0', 'MASA HOJALDRE Y SUS APLICACIONES', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'images/taller/1.jpg', '', '', '', '7, 8, 9 de agosto', '', '7:00 a 10:00 pm.', '', 'S/ 200', '', '3 SESIONES', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '0', '0', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'S', '0', '2019-03-04 11:16:13');
INSERT INTO `taller` VALUES ('2', '0', 'TORTAS MODERNAS', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'images/taller/2.jpg', '', '', '', '14, 15, 16 de agosto', '', '7:00 a 10:00 pm.', '', 'S/ 200', '', '3 SESIONES', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '0', '0', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'S', '0', '2019-03-04 11:15:51');
INSERT INTO `taller` VALUES ('3', '0', 'MESA DULCE', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'images/taller/3.jpg', '', '', '', '21, 22, 23 de agosto', '', '7:00 a 10:00 pm.', '', 'S/ 200', '', '3 SESIONES', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '0', '0', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'S', '0', '2019-03-04 11:15:21');
INSERT INTO `taller` VALUES ('4', '0', 'TALLER DE EMPRENDEDORES', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'images/taller/4.jpg', '', '', '', 'Lunes 11 hasta 26 febrero', '', '6 a 9 pm', '', 'S/ 500', '8 sesiones', '', '&lt;p&gt;&lt;strong&gt;Sesión 1 – 2&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;B.P.M. buenas prácticas en manipulación de alimentos&lt;/li&gt;&lt;li&gt;Bruselina de chocolate&lt;/li&gt;&lt;li&gt;Torta helada&lt;/li&gt;&lt;li&gt;Torta tres leche&lt;/li&gt;&lt;li&gt;Crema volteada&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Sesión 3 – 4&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Diseño y equipamiento de un taller de pastelería.&lt;/li&gt;&lt;li&gt;Alfajores de maicena y alfajores cubiertos de chocolate.&lt;/li&gt;&lt;li&gt;Postres de té: brownies, magdalenas, bizcotelas.&lt;/li&gt;&lt;li&gt;Pay de limón con merengue italiano.&lt;/li&gt;&lt;li&gt;Pay de manzana con masa frola.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Sesión 5 – 6&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Gestión de compras y almacén&lt;/li&gt;&lt;li&gt;Bavarois de guindones&lt;/li&gt;&lt;li&gt;Pionono&lt;/li&gt;&lt;li&gt;Selva negra&lt;/li&gt;&lt;li&gt;Soufflé de vainilla&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Sesión 7 – 8&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Costos de producción, costeo de recetas&lt;/li&gt;&lt;li&gt;Red velvet cake frosting y relleno&lt;/li&gt;&lt;li&gt;Torta damero cubierta con crema de chocolate y decorada con frutos del bosque&lt;/li&gt;&lt;/ul&gt;', '0', '0', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'S', '1', '2019-03-04 11:14:35');
INSERT INTO `taller` VALUES ('5', '0', 'COCINA PARA PRINCIPIANTES', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'images/taller/5.jpg', '', '', '', '11-12-13 febrero', '', '6 pm a 9 pm', '', '200.00', '', '', '&lt;p&gt;&lt;strong&gt;MODULO I&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Sesión 1&lt;/strong&gt;: reconocimiento de utensilios, técnica de cortes&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Fondos de cocción&lt;/p&gt;&lt;p&gt;Aderezos base&lt;/p&gt;&lt;p&gt;Minestrone – estofado de pollo – limonada&lt;/p&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Sesión 2&lt;/strong&gt;:&amp;nbsp; principales métodos de cocción&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Papa a la huancaína, arroz con pollo, ensalada criolla, chicha morada&lt;/p&gt;&lt;p&gt;&lt;strong&gt;MODULO II&amp;nbsp;&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Sesión 1&lt;/strong&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Vinagretas&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Ensalada cesar y crutones&lt;/p&gt;&lt;p&gt;Asado con puré&lt;/p&gt;&lt;p&gt;Ice tea&lt;/p&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Sesión&lt;/strong&gt; 2&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Cocción del arroz&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Causa limeña&lt;/p&gt;&lt;p&gt;Arroz con mariscos y limonada frozen&lt;/p&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Sesión&lt;/strong&gt; 3&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Salteados y flambeados&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Ají de gallina&lt;/p&gt;&lt;p&gt;Lomo saltado&lt;/p&gt;&lt;p&gt;Maracuyá frozen&lt;/p&gt;', '0', '0', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'S', '1', '2019-03-04 11:14:07');
INSERT INTO `taller` VALUES ('6', '9', 'BARRA CEVICHERA', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'images/taller/6.jpg', '', '', '', '11 -12 – 13 febrero', '', '5 a 8 pm', '', 's/ 200', '', '', '&lt;p&gt;&lt;br&gt;Sesión 1: &lt;strong&gt;leche de tigre y variantes&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Leche de tigre tradicional: aperitivo marino preparado a base de pescado.&lt;/li&gt;&lt;li&gt;Leche de pantera: aperitivo marino preparado a base de conchas negras.&lt;/li&gt;&lt;li&gt;Leche de lagarto: aperitivo marino preparado a base de contundente leche de tigre, culantro y ají limo&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Sesión 2:&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;ceviches carretilleros&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Ceviche de pescado: preparado a base pescado marinado con sal, ají limo, culantro, zumo de limón y cebolla, con guarnición de tortitas de cholo.&lt;/li&gt;&lt;li&gt;Ceviche mixto: preparado a base de pescado y mariscos (langostinos, caracol y pulpo), con guarnición de yuca, camote, cholo y cancha.&lt;/li&gt;&lt;li&gt;Ceviche con chicharrón: ceviche tradicional con chicharrón de calamar.&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Sesión 3:&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&amp;nbsp;ceviches compuestos&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Ceviche caliente: pescado marinado en crema de ají amarillo y cocido a las brasas y servido en panquita ahumada&lt;/li&gt;&lt;li&gt;Chancadito de cangrejo.&lt;/li&gt;&lt;li&gt;Choritos a la chalaca.&lt;/li&gt;&lt;/ul&gt;', '9', '0', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'S', '1', '2019-03-04 11:13:23');
INSERT INTO `taller` VALUES ('7', '8', 'SANGUCHERÍA PERUANA', '&lt;p&gt;&amp;lt;strong&amp;gt;Chef: Jimmy Ar&amp;amp;eacute;valo&amp;lt;/strong&amp;gt;&amp;lt;br /&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;br /&amp;gt;&lt;br&gt;&lt;br&gt;Sesi&amp;amp;oacute;n 1&lt;br&gt;&lt;br&gt;&amp;lt;ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;S&amp;amp;aacute;nguche de chicharr&amp;amp;oacute;n&lt;br&gt;&lt;br&gt;&amp;lt;ul style=&quot;list-style-type:circle;&quot;&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Pan franc&amp;amp;eacute;s&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Zarza criolla&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Camote en chips&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Cerdo pochado y frito previamente en salmuera&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Aj&amp;amp;iacute; parrillero&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Lechuga&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;amp;nbsp;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&amp;lt;ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;S&amp;amp;aacute;nguche de panceta agridulce&lt;br&gt;&lt;br&gt;&amp;lt;ul style=&quot;list-style-type:circle;&quot;&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Pan de hamburguesa con ajonjol&amp;amp;iacute;&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Encurtido de nabo y zanahoria&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Panceta al horno&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Salsa agridulce&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/ul&amp;gt;&lt;br&gt;&lt;br&gt;Sesi&amp;amp;oacute;n 2&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&amp;lt;ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;S&amp;amp;aacute;nguche de asado de res&lt;br&gt;&lt;br&gt;&amp;lt;ul style=&quot;list-style-type:circle;&quot;&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Asado de res&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Demi-glass&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Chips de papa nativa&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Lechuga lacia y tomate&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;amp;nbsp;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&amp;lt;ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;S&amp;amp;aacute;nguche de lomo saltado&lt;br&gt;&lt;br&gt;&amp;lt;ul style=&quot;list-style-type:circle;&quot;&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Lomo en su jugo&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Verduras crocantes&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Pan franc&amp;amp;eacute;s&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Papas fritas&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/ul&amp;gt;&lt;br&gt;&lt;br&gt;Sesi&amp;amp;oacute;n 3&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&amp;lt;ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;S&amp;amp;aacute;nguche de pavo asado criollo&lt;br&gt;&lt;br&gt;&amp;lt;ul style=&quot;list-style-type:circle;&quot;&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Pan franc&amp;amp;eacute;s&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Pechuga de pavo en su jugo&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Zarza criolla&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;T&amp;amp;aacute;rtara criolla (aj&amp;amp;iacute; limo, culantro, huevo duro y mayonesa)&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Lechuga&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Chips de camote&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;amp;nbsp;&lt;br&gt;&lt;br&gt;&lt;br&gt;&lt;br&gt;&amp;lt;ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;S&amp;amp;aacute;nguche de pavo saludable&lt;br&gt;&lt;br&gt;&amp;lt;ul style=&quot;list-style-type:circle;&quot;&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Pan integral&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Pechuga de pavo magra al horno&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Lechuga, tomate, palta y ar&amp;amp;uacute;gula&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;li&amp;gt;Vinagreta: vinagre bals&amp;amp;aacute;mico, aceite de oliva, miel, mostaza&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/ul&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/li&amp;gt;&lt;br&gt;&lt;br&gt;&amp;lt;/ul&amp;gt;&lt;/p&gt;', 'images/taller/7.jpg', '', '', '', '18 – 19 -21 febrero', '', '6 a 9 pm', '', 's/ 200', '', '', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', '8', '0', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'S', '1', '2019-03-04 11:11:30');
INSERT INTO `taller` VALUES ('8', '8', 'SANDWICH INTERNACIONALES', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'images/taller/8.jpg', '', '', '', '25 – 26 y 28 febrero', '', '6 a 9 pm', 'taller 702', 's/ 200', '', '', '&lt;p&gt;&lt;br&gt;Sesión 1&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Sándwich philadelfia (carne deshilachada y queso)&lt;ul&gt;&lt;li&gt;Panini&lt;/li&gt;&lt;li&gt;Salsa de queso ahumado (bechamel)&lt;/li&gt;&lt;li&gt;Cebolla caramelizada&lt;/li&gt;&lt;li&gt;Carne en láminas&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;li&gt;Hamburguesa artesanal a la francesa&lt;ul&gt;&lt;li&gt;Pan de hamburguesa con ajonjolí&lt;/li&gt;&lt;li&gt;Carne molida, huevo, tomillo, romero, cebolla&lt;/li&gt;&lt;li&gt;Tocino crocante&lt;/li&gt;&lt;li&gt;Cebolla caramelizada (tomillo, romero y aceite de oliva)&lt;/li&gt;&lt;li&gt;Salsa de champiñones (bechamel)&lt;/li&gt;&lt;li&gt;Lechuga y tomate&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Sesión 2&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Sándwich de pollo césar&lt;ul&gt;&lt;li&gt;Pan pita&lt;/li&gt;&lt;li&gt;Mis de lechuga&lt;/li&gt;&lt;li&gt;Pechuga de pollo a la plancha&lt;/li&gt;&lt;li&gt;Parmesano&lt;/li&gt;&lt;li&gt;Salsa césar&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;li&gt;Sándwich de pollo grillado y verduras&lt;ul&gt;&lt;li&gt;Ciabatta&lt;/li&gt;&lt;li&gt;Pechuga de pollo al grill&lt;/li&gt;&lt;li&gt;Zuccini, tomate, lechuga&lt;/li&gt;&lt;li&gt;Chimichurri&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;Sesión 3&lt;/p&gt;&lt;ul&gt;&lt;li&gt;&lt;strong&gt;Festival de club sándwich:&lt;/strong&gt;&lt;ul&gt;&lt;li&gt;Club sándwich clásico:&lt;ul&gt;&lt;li&gt;Pan de molde sin corteza&lt;/li&gt;&lt;li&gt;Pollo con mayonesa y lechuga&lt;/li&gt;&lt;li&gt;Palta, tomate&lt;/li&gt;&lt;li&gt;Huevo y tocino&lt;/li&gt;&lt;li&gt;Chips de papa nativa&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;li&gt;Club sándwich criollo:&lt;ul&gt;&lt;li&gt;Pan de molde sin corteza&lt;/li&gt;&lt;li&gt;Salchicha de huacho y huevo&lt;/li&gt;&lt;li&gt;Jamón del país y queso paria&lt;/li&gt;&lt;li&gt;Pollo mechado (vinagre, panca y ajo)&lt;/li&gt;&lt;li&gt;Chips de camote.&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;li&gt;Club sándwich francés:&lt;ul&gt;&lt;li&gt;Pan de molde sin corteza&lt;/li&gt;&lt;li&gt;Jamón inglés y queso Edam&lt;/li&gt;&lt;li&gt;Cebollas caramelizadas con champiñones&lt;/li&gt;&lt;li&gt;Queso rallado y huevo montado&lt;/li&gt;&lt;li&gt;Chips de papas rejilla&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ul&gt;', '8', '0', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'S', '1', '2019-03-04 11:10:36');
INSERT INTO `taller` VALUES ('9', '0', 'EL MUNDO DE LAS EMPANADAS', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'images/taller/9.jpg', '', '', '', '4 – 5 -7 marzo', '', 's/ 200', 'Taller 702', 's/ 200', '', '', '&lt;p&gt;&lt;br&gt;&lt;strong&gt;Sesión 1&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Masa brisée:&lt;ul&gt;&lt;li&gt;Empanada de pollo a la finas hierbas:&lt;ul&gt;&lt;li&gt;pollo salteado&lt;/li&gt;&lt;li&gt;cebolla caramelizada&lt;/li&gt;&lt;li&gt;salsa bechamel&lt;/li&gt;&lt;li&gt;mayonesa al ají amarillo&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;li&gt;Empanada de lomo saltado&lt;ul&gt;&lt;li&gt;lomo al jugo&lt;/li&gt;&lt;li&gt;verduras crocantes: cebolla, tomate y ají.&lt;/li&gt;&lt;li&gt;mayonesa oriental: mayonesa con aceite de ajonjolí, ajo y kion.&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Sesión 2&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Masa frita&lt;ul&gt;&lt;li&gt;Empanada argentina&lt;ul&gt;&lt;li&gt;mix de chorizo y fino corte de res&lt;/li&gt;&lt;li&gt;pimientos morroneados&lt;/li&gt;&lt;li&gt;salsa chimichurri&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;li&gt;Empanada huachana:&lt;ul&gt;&lt;li&gt;salchicha de huacho&lt;/li&gt;&lt;li&gt;huevo&lt;/li&gt;&lt;li&gt;ají limo y cebolla china&lt;/li&gt;&lt;li&gt;crema de rocoto&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Sesión 3&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Salteña&lt;ul&gt;&lt;li&gt;Empanada mexicana:&lt;ul&gt;&lt;li&gt;panceta de cerdo&lt;/li&gt;&lt;li&gt;cebolla caramelizada&lt;/li&gt;&lt;li&gt;chile (mexicano), tomate y culantro&lt;/li&gt;&lt;li&gt;pico de gallo con palta.&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;li&gt;Empanada italiana:&lt;ul&gt;&lt;li&gt;-carne molida&lt;/li&gt;&lt;li&gt;-cebolla caramelizada y tomate&lt;/li&gt;&lt;li&gt;-albahaca y orégano&lt;/li&gt;&lt;li&gt;mayonesa de anchoas alcaparras y ajo.&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ul&gt;&lt;/li&gt;&lt;/ul&gt;', '0', '9', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'S', '1', '2019-03-04 11:07:45');
INSERT INTO `taller` VALUES ('10', '7', 'EL CHIFA Y SUS SECRETOS', '&lt;p&gt;&lt;strong&gt;Chef Carlos Urbina&lt;/strong&gt;&lt;/p&gt;', 'images/taller/10.jpg', '', '', '', '4,5,7 marzo', '', '6 a  9 pm', '', 's/ 200', '', '', '&lt;p&gt;&lt;strong&gt;Primera sesión:&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Reconocimiento de ingredientes básicos para la cocina chifa&lt;/li&gt;&lt;li&gt;Preparación de fondos (fondo de ave, fondos oscuros)&lt;/li&gt;&lt;li&gt;Elaboración de Siu Mai&lt;/li&gt;&lt;li&gt;Elaboración de la salsa tamarindo y wantanes rellenos fritos.&lt;/li&gt;&lt;li&gt;Preparación del marinado para el cerdo asado&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Segunda sesión: elaboración de recetas&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Elaboración de arroz chaufa especial&lt;/li&gt;&lt;li&gt;Sopa Wantan especial&lt;/li&gt;&lt;li&gt;Ti pa kay&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;strong&gt;Tercera sesión: elaboración de recetas&lt;/strong&gt;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;Tallarín saltado.&lt;/li&gt;&lt;li&gt;Alitas kaypi.&lt;/li&gt;&lt;li&gt;Pollo chi&amp;nbsp; jau kay.&lt;/li&gt;&lt;/ul&gt;', '7', '10', '&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 'S', '1', '2019-03-04 11:03:12');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'Armando', 'Pisfil Puemape', 'armandoaepp@gmail.com', '7b64d09060db17ca6b96c0af99575903', '1', '2018-07-05 15:07:03');
