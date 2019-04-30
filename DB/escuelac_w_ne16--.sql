-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-02-2019 a las 12:04:21
-- Versión del servidor: 10.1.37-MariaDB-cll-lve
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuelac_w_ne16`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admision`
--

CREATE TABLE `admision` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `requisitos` text NOT NULL,
  `horarios` text NOT NULL,
  `inversion` text NOT NULL,
  `email` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admision`
--

INSERT INTO `admision` (`id`, `titulo`, `imagen`, `requisitos`, `horarios`, `inversion`, `email`) VALUES
(1, 'a:1:{s:2:\"es\";s:18:\"Admisión 2019 - I\";}', 'imagenes/resena/admison-18-marzo-2019.jpg', 'a:1:{s:2:\"es\";s:400:\"<ul style=\"list-style-type:circle;\">\r\n	<li>Certificado de secundaria visado por la GRED.</li>\r\n	<li>Partida de nacimiento ACTUAL.&nbsp;</li>\r\n	<li>Copia del documento de identidad.&nbsp;</li>\r\n	<li>Copia de recibo agua y luz.&nbsp;</li>\r\n	<li>Dos fotos tama&ntilde;o carnet a color.&nbsp;</li>\r\n	<li>Carnet de salud (vigente).&nbsp;</li>\r\n	<li>P&oacute;liza de seguro contra accidentes.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:469:\"<ul class=\"list_ul_cer text-left\" style=\"list-style-type:square;\">\r\n	<li><strong>LUNEA A VIERNES</strong></li>\r\n	<li><strong>Turno ma&ntilde;ana: </strong>7.30 am - 2.00 pm</li>\r\n	<li><strong>Turno noche: </strong>6:00 - 10:30 pm</li>\r\n	<li><strong style=\"line-height: 1.6em;\">Duraci&oacute;n</strong><span style=\"line-height: 1.6em;\">: <strong>3 a&ntilde;os</strong> / VI ciclos (18 Semanas x ciclo)</span></li>\r\n	<li><strong>INICIO</strong>: 18 de marzo</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:305:\"<ul class=\"list_ul_cer text-left\">\r\n	<li><strong>MATR&Iacute;CULA</strong>: S/. 310.00</li>\r\n	<li><strong>UNIFORME</strong>: S/. 200.00 (pantal&oacute;n + polo + garibaldi + camisaco + mandil)</li>\r\n	<li><strong>MENSUALIDAD: </strong><br />\r\n	S/.650.00 (4 cuotas - Incluye insumos e idiomas)</li>\r\n</ul>\r\n\";}', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amigos`
--

CREATE TABLE `amigos` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `imagen` varchar(75) NOT NULL,
  `imagen_2` varchar(75) NOT NULL,
  `email` text,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `amigos`
--

INSERT INTO `amigos` (`id`, `titulo`, `imagen`, `imagen_2`, `email`, `orden`, `estado`, `fecha`) VALUES
(1, 'a:1:{s:2:\"es\";s:627:\"<section>\r\n<h3>SIGUE ESTAS INDICACIONES Y EMPIEZA A <span style=\"color:red;\">&iexcl;GANAR!</span>.</h3>\r\n\r\n<ol class=\"text-left\">\r\n	<li value=\"1\">Recomienda un amigo o amigos a estudiar la carrera de Gastronom&iacute;a y Arte Culinario con nosotros. Puedes recomendar todos los amigos(as) que desees.</li>\r\n	<li>Reg&iacute;stralo(s) en www.escuelacumbre.edu.pe/amigopuntos.</li>\r\n	<li>Aseg&uacute;rate que tu amigo o amigos recomendados figuren en nuestro registro de matriculados. Consulta en el &aacute;rea de Informes.</li>\r\n	<li>Ac&eacute;rcate al &aacute;rea de Informes para obtener tu benefcio.</li>\r\n</ol>\r\n</section>\r\n\";}', 'a', 'a', 'a:1:{s:2:\"es\";s:30:\"marketing@escuelacumbre.edu.pe\";}', 1, 1, '2017-10-03 00:47:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buzon`
--

CREATE TABLE `buzon` (
  `id` int(11) NOT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `telefono` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `mensaje` text,
  `estado` int(11) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `buzon`
--

INSERT INTO `buzon` (`id`, `nombres`, `telefono`, `email`, `mensaje`, `estado`, `fecha`) VALUES
(1, 'Williams Azabache Sarmiento', '9999999', 'williams.azabache@webtilia.com', 'Test Test', 1, '2015-06-12 23:27:43'),
(2, 'Williams Azabache Sarmiento', '9999', 'williams.azabache@webtilia.com', 'Testing', 1, '2015-06-12 23:30:14'),
(3, 'Williams Azabache Sarmiento', '9999', 'williams.azabache@webtilia.com', 'Testing', 1, '2015-06-12 23:31:59'),
(4, 'Williams Azabache Sarmiento', '9999', 'williams.azabache@webtilia.com', 'Testing', 1, '2015-06-12 23:32:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buzon_contacto`
--

CREATE TABLE `buzon_contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `dni` varchar(15) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `buzon_contacto`
--

INSERT INTO `buzon_contacto` (`id`, `nombre`, `dni`, `email`, `telefono`, `fecha`) VALUES
(1, 'Pedro Calderón', '42548605', 'pedrocalderon_@hotmail.com', '987868401', '2015-10-07 04:43:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buzon_retiro`
--

CREATE TABLE `buzon_retiro` (
  `id` int(11) NOT NULL,
  `nombres` varchar(200) DEFAULT NULL,
  `titulo_retiro` text,
  `email` varchar(200) DEFAULT NULL,
  `mensaje` text,
  `estado` int(11) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `buzon_retiro`
--

INSERT INTO `buzon_retiro` (`id`, `nombres`, `titulo_retiro`, `email`, `mensaje`, `estado`, `fecha`) VALUES
(1, 'Williams', 'Próximamente Retiro 2015', 'wjharil@gmail.com', 'Retiro pruebas email', 1, '2015-07-13 06:54:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campus`
--

CREATE TABLE `campus` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `subtitulo` varchar(20) DEFAULT NULL,
  `descripcion` varchar(40) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `url` varchar(75) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `campus`
--

INSERT INTO `campus` (`id`, `titulo`, `subtitulo`, `descripcion`, `imagen`, `url`, `orden`, `estado`, `fecha`) VALUES
(16, 'a:1:{s:2:\"es\";s:8:\"Cumbre 1\";}', NULL, 'a:1:{s:2:\"es\";s:8:\"Cumbre 1\";}', 'imagenes/campus/campus1.jpg', NULL, 1, 1, '2016-07-11 11:29:22'),
(17, 'a:1:{s:2:\"es\";s:8:\"Campus 2\";}', NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus2.jpg', NULL, 2, 1, '2016-07-11 11:30:18'),
(18, 'a:1:{s:2:\"es\";s:8:\"Campus 3\";}', NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus3.jpg', NULL, 3, 1, '2016-07-11 11:30:39'),
(19, 'a:1:{s:2:\"es\";s:8:\"Campus 4\";}', NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus4.jpg', NULL, 4, 1, '2016-07-11 11:30:59'),
(20, 'a:1:{s:2:\"es\";s:8:\"Campus 5\";}', NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus5.jpg', NULL, 5, 1, '2016-07-11 11:31:48'),
(21, 'a:1:{s:2:\"es\";s:8:\"Campus 6\";}', NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus6.jpg', NULL, 6, 1, '2016-07-11 11:32:03'),
(22, 'a:1:{s:2:\"es\";s:8:\"Campus 7\";}', NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus7.jpg', NULL, 7, 1, '2016-07-11 11:32:18'),
(23, 'a:1:{s:2:\"es\";s:8:\"Campus 8\";}', NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus8.jpg', NULL, 8, 1, '2016-07-11 11:32:34'),
(24, 'a:1:{s:2:\"es\";s:8:\"Campus 9\";}', NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/campus/campus9.jpg', NULL, 9, 1, '2016-07-11 11:32:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
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
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `titulo`, `descripcion`, `slide`, `imagen`, `presentacion`, `porque`, `donde`, `certificacion`, `titulos`, `inversion`, `titulacion`, `detalleduracion`, `detalledia`, `detallehorario`, `detallelugar`, `detalleprecio`, `detalleequipos`, `detalleconsultas`, `detalledirigido`, `aquien`, `temas`, `nombreseo`, `orden`, `estado`, `fecha`) VALUES
(1, 'a:1:{s:2:\"es\";s:12:\"Gastronomía\";}', 'a:1:{s:2:\"es\";s:727:\"<p>Estudiar Gastronom&iacute;a en Chiclayo es un privilegio porque aqu&iacute; al parecer,&nbsp;se inici&oacute; la Historia del mundialmente reconocido Sabor Peruano.&nbsp;<br />\r\nEn Huaca Ventarr&oacute;n con m&aacute;s de 4,000 a&ntilde;os de antig&uuml;edad, se encontraron&nbsp;los primeros murales policromos de Am&eacute;rica.<br />\r\nEl Se&ntilde;or de Sip&aacute;n&nbsp;probablemente degustaba un &ldquo;chinguirito&rdquo; o pescado seco salado.<br />\r\nEl &ldquo;loche&rdquo;, &uacute;nico zapallo milenario da gusto a nuestras preparaciones&nbsp;desde tiempos inmemoriales.<br />\r\nDelicias a base de carnes de corral como&nbsp;el pato o cabrito seguir&aacute;n cautivando paladares hasta el final de los tiempos.</p>\r\n\";}', 'imagenes/carreras/head-carreras_2.jpg', 'imagenes/carreras/carrera-gastronomia.png', 'a:1:{s:2:\"es\";s:653:\"<h3>&iquest;QU&Eacute; ES GASTRONOM&Iacute;A?</h3>\r\n<br />\r\n<span style=\"font-size: 13px; line-height: 1.6em;\">La Gastronom&iacute;a es una disciplina que abarca todo lo relacionado al placer de la alimentaci&oacute;n humana. Las preparaciones con sus historias y tradiciones, los insumos e ingredientes, el servicio en mesa, las bebidas, los vinos, el desarrollo y manejo de negocios como restaurantes, cafeter&iacute;as, catering de eventos y mucho m&aacute;s.&nbsp;</span><em style=\"font-size: 13px; line-height: 1.6em;\"><span class=\"text-danger\">Gastronom&iacute;a no s&oacute;lo es cocinar o comer rico, va mucho m&aacute;s all&aacute;.</span></em>\";}', 'a:1:{s:2:\"es\";s:578:\"<h3>&iquest;POR QU&Eacute; ESTUDIAR GASTRONOM&Iacute;A?<br />\r\n<br />\r\n<span style=\"line-height: 1.6em; font-size: 13px;\">El mundo ha evolucionado en el aspecto gastron&oacute;mico, convirtiendo el alto nivel en servicio, en un est&aacute;ndar internacional. El turismo cada vez crece m&aacute;s, los paladares se sofistican cada d&iacute;a. Es necesario que el Per&uacute; profesionalice su afamada cocina. Un cocinero puede llegar a ser Chef, viajar por todo el mundo sirviendo con su arte y logrando satisfacciones tanto personales como de sus comensales.&nbsp;</span></h3>\r\n\";}', 'a:1:{s:2:\"es\";s:638:\"<h3>&iquest;D&Oacute;NDE PUEDES TRABAJAR?</h3>\r\n<br />\r\n<span style=\"font-size: 13px; line-height: 1.6em;\">El campo laboral es muy amplio, estos son algunos de los trabajos en donde se pueden desempe&ntilde;ar nuestros egresados:</span>\r\n\r\n<div class=\"text-block text-justify\">\r\n<ul class=\"list_ul\">\r\n	<li>Chef Ejecutivo de hoteles o restaurantes.</li>\r\n	<li>Gerente de Alimentos y Bebidas.</li>\r\n	<li><span style=\"line-height: 1.6em;\">Asesor o L&iacute;der de Empresas Gastron&oacute;micas.</span></li>\r\n	<li>Banquetes y eventos.&nbsp;</li>\r\n	<li>Chef ejecutivo, particular, asesor o instructor en establecimientos.</li>\r\n</ul>\r\n</div>\r\n\";}', 'a:1:{s:2:\"es\";s:174:\"M&oacute;dulo 1: Gastronom&iacute;a Regional<br />\r\nM&oacute;dulo 2: Gastronom&iacute;a Peruana<br />\r\nM&oacute;dulo 3: Gastronom&iacute;a Internacional<br />\r\n<br />\r\n&nbsp;\";}', 'a:1:{s:2:\"es\";s:317:\"<strong>CARRERA PROFESIONAL DE GASTRONOM&Iacute;A Y ARTE CULINARIO</strong><br />\r\nse entrega T&iacute;tulo a Nombre de la Naci&oacute;n<br />\r\n(R.M.N&deg; 0345 - 2008 - ED)<br />\r\n<strong>Duraci&oacute;n de la carrera: </strong>3 a&ntilde;os / VI Ciclos<br />\r\n(cada ciclo dura 4 meses)<br />\r\n<br />\r\n<br />\r\n&nbsp;\";}', 'a:1:{s:2:\"es\";s:328:\"<ul>\r\n	<li>Matr&iacute;cula: <strong>S/ 310.00</strong></li>\r\n	<li>Uniforme completo: <strong>S/ 200.00 </strong>(pantal&oacute;n + polo + garibaldi + camisaco + mandil)</li>\r\n	<li>Total por ciclo: <strong>S/ 2600.00</strong></li>\r\n	<li>Total por ciclo (pago al contado): <strong>S/ 2470.00 </strong>(5% descuento)</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:179:\"<strong>19&deg; </strong>Programa de Asesor&iacute;a de Proyectos para optar <strong>T&iacute;tulo Profesional T&eacute;cnico </strong>en GAC (Gastronom&iacute;a y Arte Culinario)\";}', 'a:1:{s:2:\"es\";s:10:\"16 SEMANAS\";}', 'a:1:{s:2:\"es\";s:24:\"INICIO: 19 DE ENERO 2019\";}', 'a:1:{s:2:\"es\";s:21:\"Sábados 9.00 a 13:00\";}', 'a:1:{s:2:\"es\";s:27:\"Av. Eufemio Lora y Lora 625\";}', 'a:1:{s:2:\"es\";s:12:\"S/. 4,630.00\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:12:\"(074) 228790\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:58:\"Dirigido a egresados con estudios conclu&iacute;dos.&nbsp;\";}', 'a:1:{s:2:\"es\";s:387:\"<ol>\r\n	<li>Seguridad e higiene alimentaria.</li>\r\n	<li>BPM.</li>\r\n	<li>&Aacute;rea de producci&oacute;n en cocina.</li>\r\n	<li>Marketing aplicado.</li>\r\n	<li>Etiqueta y protocolo.</li>\r\n	<li>T&eacute;cnicas b&aacute;sicas de cocina.</li>\r\n	<li>Repertorio de cocina regional y peruana.</li>\r\n	<li>Cata de vinos y maridaje.</li>\r\n	<li>Asesor&iacute;a de proyectos productivos.</li>\r\n</ol>\r\n\";}', 'gastronomia', 0, 1, '2019-01-11 16:43:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chef`
--

CREATE TABLE `chef` (
  `id` int(11) NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `subtitulo` varchar(120) DEFAULT NULL,
  `resumen` varchar(150) DEFAULT NULL,
  `descripcion` longtext,
  `imagen` varchar(200) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chef`
--

INSERT INTO `chef` (`id`, `titulo`, `subtitulo`, `resumen`, `descripcion`, `imagen`, `orden`, `estado`, `fecha`) VALUES
(8, 'a:1:{s:2:\"es\";s:11:\"LUIS HUERTA\";}', 'a:1:{s:2:\"es\";s:4:\"Chef\";}', 'a:1:{s:2:\"es\";s:16:\"MASTER PATISSIER\";}', 'a:1:{s:2:\"es\";s:677:\"<ul>\r\n	<li>Especializaci&oacute;n en Artisan Gelato - Carpigiani Gelato University, Bologna - Italia.</li>\r\n	<li>Panader&iacute;a artesanal y del mundo - Institute of Culinary Education (ICE), New York.</li>\r\n	<li>Chocolater&iacute;a y Bomboner&iacute;a - Chocolate Academy, Chicago, USA.</li>\r\n	<li>Workshop con Valrhona&nbsp; Chocolate - Emirates Academy, Dub&aacute;i.</li>\r\n	<li>Pastry chef asociado &ndash; Miami Culinary Institute</li>\r\n	<li>Pastry chef en Resort Madinat Jumeirah, Dub&aacute;i.</li>\r\n	<li>Pastry chef en Resort Canyon Ranch Miami, USA.</li>\r\n	<li>Master Patissierie, Le Cordon Bleu Per&uacute;.</li>\r\n	<li>Linecook restaurant Malabar, Lima</li>\r\n</ul>\r\n\";}', 'imagenes/chef/1.jpg', 8, 1, '2017-09-09 16:48:00'),
(9, 'a:1:{s:2:\"es\";s:14:\"KEVIN SUÁREZ \";}', 'a:1:{s:2:\"es\";s:4:\"Chef\";}', 'a:1:{s:2:\"es\";s:36:\"ESPECIALISTA EN COCINA INTERNACIONAL\";}', 'a:1:{s:2:\"es\";s:400:\"<ul>\r\n	<li>Cocinero en Restaurant R&eacute;gis &amp; Jacques MARCON &ndash; 3 Estrellas Michelin, Francia.</li>\r\n	<li>Cocinero en Restaurant Luis Bernard Puech- 1 Estrella Michelin, Francia.</li>\r\n	<li>Master Cucina en ICIF, Italia.</li>\r\n	<li>Master Cuisine en Escuela de Gastronom&iacute;a y Arte Culinario Cumbre.</li>\r\n	<li>Chef en Resturante Loche, Hotel Casa de la Luna, Chiclayo.</li>\r\n</ul>\r\n\";}', 'imagenes/chef/2.jpg', 9, 1, '2017-09-09 16:49:07'),
(10, 'a:1:{s:2:\"es\";s:14:\"BORIS STAKEEFF\";}', 'a:1:{s:2:\"es\";s:4:\"Chef\";}', 'a:1:{s:2:\"es\";s:46:\"ESPECIALISTA EN COCINA PERUANA E INTERNACIONAL\";}', 'a:1:{s:2:\"es\";s:362:\"<ul>\r\n	<li>Chef de partie del Ristorante Quadri, Venecia, Italia.</li>\r\n	<li>Master Cucina en ICIF, Italia.</li>\r\n	<li>Chef para el II Foro Mundial de Turismo Gastron&oacute;mico.</li>\r\n	<li>Capacitador para el MINCETUR &ndash; CENFOTUR.</li>\r\n	<li>Chef asesor en Supermercados Peruanos.</li>\r\n	<li>Coaching y trabajo en equipo - Pronabec (MINEDU).</li>\r\n</ul>\r\n\";}', 'imagenes/chef/3.jpg', 10, 0, '2018-12-24 08:14:39'),
(11, 'a:1:{s:2:\"es\";s:16:\"ANDRÉ KUNIYOSHI\";}', 'a:1:{s:2:\"es\";s:4:\"Chef\";}', 'a:1:{s:2:\"es\";s:30:\"ESPECIALISTA EN COCINA PERUANA\";}', 'a:1:{s:2:\"es\";s:301:\"<ul>\r\n	<li>Chef de partie en restaurant Andre Chatelard, Francia.</li>\r\n	<li>Chef Ejecutivo de la cadena Casa Andina Hotel.</li>\r\n	<li>Master Cuisine en Escuela de Gastronom&iacute;a y Arte Culinario Cumbre.</li>\r\n	<li>Asesor gastron&oacute;mico en diversos restaurantes a nivel nacional</li>\r\n</ul>\r\n\";}', 'imagenes/chef/4.jpg', 11, 0, '2018-12-24 08:14:48'),
(12, 'a:1:{s:2:\"es\";s:13:\"JESÚS ZAMORA\";}', 'a:1:{s:2:\"es\";s:4:\"Chef\";}', 'a:1:{s:2:\"es\";s:30:\"ESPECIALISTA EN COCINA PERUANA\";}', 'a:1:{s:2:\"es\";s:351:\"<ul>\r\n	<li>Chef de partie en Restauant L&acute;Ambassade, Francia.</li>\r\n	<li>Master Cuisine en Escuela de Gastronom&iacute;a y Arte Culinario Cumbre.</li>\r\n	<li>Chef en Restaurant El Rinc&oacute;n Que No Conoces, Lima.</li>\r\n	<li>Administraci&oacute;n y gesti&oacute;n de restaurantes en la Escuela Nacional de Gastronom&iacute;a, Lima.</li>\r\n</ul>\r\n\";}', 'imagenes/chef/5.jpg', 12, 1, '2017-09-09 16:52:41'),
(13, 'a:1:{s:2:\"es\";s:15:\"AGUSTÍN JORDAN\";}', 'a:1:{s:2:\"es\";s:4:\"Chef\";}', 'a:1:{s:2:\"es\";s:31:\"ESPECIALISTA EN COCINA REGIONAL\";}', 'a:1:{s:2:\"es\";s:499:\"<ul>\r\n	<li>Chef ejecutivo del restaurante tur&iacute;stico &ldquo;El C&aacute;ntaro&rdquo;, Lambayeque.</li>\r\n	<li>Expositor en la Feria Internacional Mistura (dos a&ntilde;os consecutivos).</li>\r\n	<li>Investigador y gestor de la gastronom&iacute;a regional e identidad lambayecana.</li>\r\n	<li>Expositor en ferias de gastronom&iacute;a y turismo, congresos y talleres a nivel nacional e internacional.</li>\r\n	<li>Estudios de Alta Cocina en Hospitalily Management School Columbia, Lima.</li>\r\n</ul>\r\n\";}', 'imagenes/chef/6.jpg', 13, 1, '2017-09-09 16:53:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL,
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
  `show_popup` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `titulo`, `horario`, `direccion`, `email`, `telefono`, `facebook`, `youtube`, `instagram`, `mapa`, `popup`, `show_popup`) VALUES
(1, 'INSTITUTO DE GASTRONOMÍA & ARTE CULINARIO', 'Lunes a Viernes de 8:00 a.m. a 8.00 p.m.', 'Av. Eufemio Lora y Lora 625', 'recepcion@escuelacumbre.edu.pe', '(074) 228 790', 'https://www.facebook.com/CumbrePeru', 'https://www.youtube.com/results?search_query=Cumbre+Gastronomia', 'fotos', '', 'imagenes/home/slider-1_1.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diplomado`
--

CREATE TABLE `diplomado` (
  `id` int(11) NOT NULL,
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
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diplomado`
--

INSERT INTO `diplomado` (`id`, `titulo`, `descripcion`, `slide`, `imagen`, `certificacion`, `titulos`, `inversion`, `titulacion`, `detalleduracion`, `detalledia`, `detallehorario`, `detallelugar`, `detalleprecio`, `detalleequipos`, `detalleconsultas`, `detalledirigido`, `aquien`, `temas`, `nombreseo`, `orden`, `estado`, `fecha`) VALUES
(1, 'a:1:{s:2:\"es\";s:11:\"Pastelería\";}', 'a:1:{s:2:\"es\";s:323:\"<div>Este curso &ndash; taller tiene como objetivo capacitar a emprendedores y apasionados por la pasteler&iacute;a para que puedan implementar su propio negocio en base a productos de tendencia.<br />\r\nLos asistentes podr&aacute;n realizar pr&aacute;ctica en talleres totalmente implementados.</div>\r\n\r\n<div>&nbsp;</div>\r\n\";}', 'imagenes/carreras/fond_diplomado.jpg', 'imagenes/carreras/diplomado-pasteleria.png', 'a:1:{s:2:\"es\";s:486:\"Los participantes recibir&aacute;n el CERTIFICADO EN <strong>TALLER DE PASTELER&Iacute;A </strong>a nombre de Cumbre.<br />\r\n<strong><em>&iquest;Por qu&eacute; estudiar este taller en Cumbre?</em></strong>\r\n<ul>\r\n	<li>T&eacute;cnicas y herramientas con enfoque pr&aacute;ctico.</li>\r\n	<li>Docente instructor con experiencia y trayectoria.</li>\r\n	<li>Asesor&iacute;a de chefs de primer nivel.</li>\r\n	<li>La escuela de gastronom&iacute;a n&uacute;mero 1 de la regi&oacute;n.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:633:\"<strong>Luis Huerta / MASTER PATISSIER</strong><br />\r\nMaster Patissierie con m&aacute;s de 20 a&ntilde;os de experiencia. Con especializaci&oacute;n en Artisan Gelato - Carpigiani Gelato University, Bologna &ndash; Italia; panader&iacute;a artesanal y del mundo en el Institute of Culinary Education (ICE), New York; Chocolater&iacute;a y Bomboner&iacute;a - Chocolate Academy, Chicago, USA.<br />\r\nAdem&aacute;s es Pastry chef asociado &ndash; Miami Culinary Institute, ha trabajado como Pastry chef en Resort Madinat Jumeirah, Dub&aacute;i; Pastry chef en Resort Canyon Ranch Miami, USA; y como Line cook restaurant Malabar, Lima.\";}', 'a:1:{s:2:\"es\";s:288:\"<div style=\"line-height: 20.8px;\">\r\n<ul>\r\n	<li>S/. 1800.00 Nuevos Soles (4 cuotas de S/. 450.00 soles)</li>\r\n	<li>S/. 1500.00 soles (al contado)</li>\r\n</ul>\r\n<strong>Incluye: </strong>Uniforme (Chaqueta, mandil y Garibaldi) / Recetario / Insumos / Degustaci&oacute;n / Certificado</div>\r\n\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:27:\"Av. Eufemio Lora y Lora 625\";}', 'a:1:{s:2:\"es\";s:24:\"S/. 1500.00 (al contado)\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:10:\"074 228790\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:333:\"<ul>\r\n	<li>Propietarios de negocios de gastronom&iacute;a.</li>\r\n	<li>Pasteleros que quieren implementar un negocio.</li>\r\n	<li>Empresarios que desean implementar una marca de gastronom&iacute;a (pasteler&iacute;a).</li>\r\n	<li>P&uacute;blico apasionado por la pasteler&iacute;a que quiere perfeccionar su m&eacute;todo.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:319:\"<strong>SESI&Oacute;N 01:</strong> &nbsp; FESTIVAL DE GALLETAS Y SABLES.<br />\r\n<strong>SESI&Oacute;N 02:</strong>&nbsp;&nbsp; PIES Y TARTAS.<br />\r\n<strong>SESI&Oacute;N 03:&nbsp;&nbsp; </strong>PIES Y TARTAS II.<br />\r\n<strong>SESI&Oacute;N 04:</strong>&nbsp;&nbsp; MASA CHOUX.<br />\r\n[ ...16 SESIONES ]<br />\r\n&nbsp;\";}', 'pasteleria', 1, 1, '2017-10-05 16:40:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id` int(11) NOT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `descripcion` longtext,
  `imagen` varchar(200) DEFAULT NULL,
  `nombreseo` varchar(200) NOT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id`, `titulo`, `descripcion`, `imagen`, `nombreseo`, `orden`, `estado`, `fecha`) VALUES
(1, 'a:1:{s:2:\"es\";s:24:\"Conferencias Magistrales\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/conferencias-magistrales.jpg', 'conferencias-magistrales', 1, 1, '2017-11-07 04:38:19'),
(2, 'a:1:{s:2:\"es\";s:18:\"Clases Magistrales\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/clases-magistrales.jpg', 'clases-magistrales', 2, 1, '2017-11-07 04:38:50'),
(3, 'a:1:{s:2:\"es\";s:11:\"Expo Cumbre\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/expo-cumbre_1.jpg', 'expo-cumbre', 3, 1, '2017-11-07 04:38:56'),
(4, 'a:1:{s:2:\"es\";s:14:\"Fiesta de Gala\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/fiesta-de-gala.jpg', 'fiesta-de-gala', 4, 1, '2017-11-07 04:39:03'),
(5, 'a:1:{s:2:\"es\";s:32:\"Imposición de camisacos I Ciclo\";}', 'a:1:{s:2:\"es\";s:182:\"Nuestros estudiantes de primer ciclo recibieron su primera chaqueta, s&iacute;mbolo de integridad y respeto hacia la pronta profesi&oacute;n que los acompa&ntilde;ar&aacute; siempre.\";}', 'imagenes/eventos/im-1.jpg', 'imposicion-de-camisacos-i-ciclo', 5, 1, '2017-10-12 03:50:36'),
(6, 'a:1:{s:2:\"es\";s:17:\"Activación Olmos\";}', 'a:1:{s:2:\"es\";s:352:\"Activaci&oacute;n en el Centro de esparcimiento <strong>&ldquo;Los Algarrobos&rdquo;</strong> &ndash; Olmos a las 9:00 am, el d&iacute;a 22 de Septiembre del presente. El motivo de nuestra presencia fue participar de la feria vocacional exponiendo nuestra carrera profesional de gastronom&iacute;a con la que cuenta la instituci&oacute;n.<br />\r\n&nbsp;\";}', 'imagenes/eventos/im-2.jpg', 'activacion-olmos', 6, 1, '2017-10-11 20:37:26'),
(7, 'a:1:{s:2:\"es\";s:11:\"Miss Cumbre\";}', 'a:1:{s:2:\"es\";s:353:\"La Escuela Peruana de Gastronom&iacute;a y Arte Culinario &ldquo;CUMBRE&rdquo;, organiza en el marco de su XI Aniversario Institucional <strong>&ldquo;MISS CUMBRE 2017&rdquo;, </strong>en la que se busca elegir a la dama que habr&aacute; de representar a la singular belleza gastron&oacute;mica, as&iacute; como tambi&eacute;n sus principios y virtudes.\";}', 'imagenes/eventos/im-3.jpg', 'miss-cumbre', 7, 1, '2017-10-11 20:45:37'),
(8, 'a:1:{s:2:\"es\";s:11:\"Cumbrematch\";}', 'a:1:{s:2:\"es\";s:527:\"La Escuela Peruana de Gastronom&iacute;a y Arte Culinario &ldquo;CUMBRE&rdquo;, organiza en el marco de su XI Aniversario Institucional el <strong>CUMBREMATCH 2017, Copa &ldquo;INGENIA&rdquo;</strong> con la participaci&oacute;n de todos los estudiantes y miembros de la instituci&oacute;n con el prop&oacute;sito de fomentar la pr&aacute;ctica del deporte, la sana competencia; as&iacute; como, estrechar los lazos de confraternidad que permitan un desarrollo integral del estudiante y la identificaci&oacute;n con su Escuela.\";}', 'imagenes/eventos/im-4.jpg', 'cumbrematch', 8, 1, '2017-10-11 20:48:45'),
(9, 'a:1:{s:2:\"es\";s:33:\"Seminario Magistral - Cumbre 2017\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/cha-cha.jpg', 'seminario-magistral-cumbre-2017', 9, 1, '2017-12-05 04:51:58'),
(10, 'a:1:{s:2:\"es\";s:21:\"Conferencia de Prensa\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/con-prensa_1.jpg', 'conferencia-de-prensa', 10, 1, '2017-12-05 05:13:45'),
(11, 'a:1:{s:2:\"es\";s:12:\"CUMBRE MATCH\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/cumbremacth.jpg', 'cumbre-match', 11, 1, '2017-12-05 05:18:43'),
(12, 'a:1:{s:2:\"es\";s:15:\"EXPOCUMBRE 2017\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/expocumbre.jpg', 'expocumbre-2017', 12, 1, '2017-12-05 05:24:19'),
(13, 'a:1:{s:2:\"es\";s:19:\"Fiesta de Gala 2017\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/fiesta-gala.jpg', 'fiesta-de-gala-2017', 13, 1, '2017-12-05 05:30:41'),
(14, 'a:1:{s:2:\"es\";s:17:\"Guerra de cocinas\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/guerra-de-cocinas.jpg', 'guerra-de-cocinas', 14, 1, '2017-12-05 05:35:57'),
(15, 'a:1:{s:2:\"es\";s:16:\"Miss Cumbre 2017\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/miss-cumbre.jpg', 'miss-cumbre-2017', 15, 1, '2017-12-05 05:41:22'),
(16, 'a:1:{s:2:\"es\";s:83:\"I Programa de Actualización Docente y Fortalecimiento de Competencias Pedagógicas\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/x-min.jpg', 'i-programa-de-actualizacion-docente-y-fortalecimiento-de-competencias-pedagogicas', 16, 1, '2018-12-07 09:27:13'),
(17, 'a:1:{s:2:\"es\";s:33:\"Campaña de Protección ambiental\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'imagenes/eventos/x.jpg', 'campanna-de-proteccion-ambiental', 17, 1, '2018-12-21 18:53:18'),
(18, 'a:1:{s:2:\"es\";s:16:\"CHARLA MAGISTRAL\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'http://www.escuelacumbre.edu.pe/2018/imagenes/nodisponible.jpg', 'charla-magistral', 18, 1, '2019-02-22 15:15:59'),
(19, 'a:1:{s:2:\"es\";s:18:\"CHARLA MAGISTRAL 2\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'http://www.escuelacumbre.edu.pe/2018/imagenes/nodisponible.jpg', 'charla-magistral-2', 19, 1, '2019-02-22 15:29:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento_img`
--

CREATE TABLE `evento_img` (
  `id` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `id_padre` int(11) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `evento_img`
--

INSERT INTO `evento_img` (`id`, `imagen`, `id_padre`, `orden`, `estado`, `fecha`) VALUES
(3, 'imagenes/eventos/03-jpg-1468583251.jpg', 1, 3, 1, '2016-07-15 11:47:31'),
(4, 'imagenes/eventos/04-jpg-1468583252.jpg', 1, 4, 1, '2016-07-15 11:47:32'),
(5, 'imagenes/eventos/05-jpg-1468583252.jpg', 1, 5, 1, '2016-07-15 11:47:32'),
(6, 'imagenes/eventos/05-1-jpg-1468583253.jpg', 1, 6, 1, '2016-07-15 11:47:33'),
(7, 'imagenes/eventos/05-2-jpg-1468583253.jpg', 1, 7, 1, '2016-07-15 11:47:33'),
(8, 'imagenes/eventos/06-jpg-1468583254.jpg', 1, 8, 1, '2016-07-15 11:47:34'),
(9, 'imagenes/eventos/07-jpg-1468583254.jpg', 1, 9, 1, '2016-07-15 11:47:34'),
(10, 'imagenes/eventos/08-jpg-1468583255.jpg', 1, 10, 1, '2016-07-15 11:47:35'),
(13, 'imagenes/eventos/03-jpg-1468584349.jpg', 2, 13, 1, '2016-07-15 12:05:49'),
(14, 'imagenes/eventos/05-jpg-1468584357.jpg', 2, 14, 1, '2016-07-15 12:05:57'),
(15, 'imagenes/eventos/05-1-jpg-1468584367.jpg', 2, 15, 1, '2016-07-15 12:06:07'),
(16, 'imagenes/eventos/06-jpg-1468584390.jpg', 2, 16, 1, '2016-07-15 12:06:30'),
(18, 'imagenes/eventos/09-jpg-1468584408.jpg', 2, 18, 1, '2016-07-15 12:06:48'),
(19, 'imagenes/eventos/01-jpg-1468595077.jpg', 2, 19, 1, '2016-07-15 15:04:37'),
(20, 'imagenes/eventos/02-jpg-1468595096.jpg', 2, 20, 1, '2016-07-15 15:04:56'),
(21, 'imagenes/eventos/03-jpg-1468595218.jpg', 2, 21, 1, '2016-07-15 15:06:58'),
(22, 'imagenes/eventos/04-jpg-1468595231.jpg', 2, 22, 1, '2016-07-15 15:07:11'),
(23, 'imagenes/eventos/05-jpg-1468595476.jpg', 2, 23, 1, '2016-07-15 15:11:16'),
(24, 'imagenes/eventos/06-jpg-1468595590.jpg', 2, 24, 1, '2016-07-15 15:13:10'),
(25, 'imagenes/eventos/01-jpg-1468595836.jpg', 3, 25, 1, '2016-07-15 15:17:16'),
(26, 'imagenes/eventos/02-jpg-1468595985.jpg', 3, 26, 1, '2016-07-15 15:19:45'),
(27, 'imagenes/eventos/03-jpg-1468596005.jpg', 3, 27, 1, '2016-07-15 15:20:05'),
(28, 'imagenes/eventos/04-jpg-1468596090.jpg', 3, 28, 1, '2016-07-15 15:21:30'),
(29, 'imagenes/eventos/06-jpg-1468596175.jpg', 3, 29, 1, '2016-07-15 15:22:55'),
(30, 'imagenes/eventos/05-jpg-1468596190.jpg', 3, 30, 1, '2016-07-15 15:23:10'),
(31, 'imagenes/eventos/02-jpg-1468596848.jpg', 3, 31, 1, '2016-07-15 15:34:08'),
(32, 'imagenes/eventos/05-jpg-1468597176.jpg', 3, 32, 1, '2016-07-15 15:39:36'),
(33, 'imagenes/eventos/06-jpg-1468597347.jpg', 3, 33, 1, '2016-07-15 15:42:27'),
(34, 'imagenes/eventos/03-jpg-1468597366.jpg', 3, 34, 1, '2016-07-15 15:42:46'),
(35, 'imagenes/eventos/01-jpg-1468599126.jpg', 4, 35, 1, '2016-07-15 16:12:06'),
(36, 'imagenes/eventos/02-jpg-1468599136.jpg', 4, 36, 1, '2016-07-15 16:12:16'),
(37, 'imagenes/eventos/03-jpg-1468599143.jpg', 4, 37, 1, '2016-07-15 16:12:23'),
(38, 'imagenes/eventos/04-jpg-1468599148.jpg', 4, 38, 1, '2016-07-15 16:12:28'),
(39, 'imagenes/eventos/05-jpg-1468599155.jpg', 4, 39, 1, '2016-07-15 16:12:35'),
(40, 'imagenes/eventos/06-jpg-1468599160.jpg', 4, 40, 1, '2016-07-15 16:12:40'),
(41, 'imagenes/eventos/07-jpg-1468599165.jpg', 4, 41, 1, '2016-07-15 16:12:45'),
(42, 'imagenes/eventos/08-jpg-1468599168.jpg', 4, 42, 1, '2016-07-15 16:12:48'),
(43, 'imagenes/eventos/09-jpg-1468599174.jpg', 4, 43, 1, '2016-07-15 16:12:54'),
(44, 'imagenes/eventos/camisacos-oct-2017-1.jpg', 5, 44, 1, '2017-11-07 14:27:22'),
(45, 'imagenes/eventos/camisacos-oct-2017-2.jpg', 5, 45, 1, '2017-11-07 14:27:22'),
(46, 'imagenes/eventos/activ-olmos-oct-2017-1.jpg', 6, 46, 1, '2017-11-07 21:42:02'),
(47, 'imagenes/eventos/activ-olmos-oct-2017-2.jpg', 6, 47, 1, '2017-11-07 21:42:02'),
(48, 'imagenes/eventos/activ-olmos-oct-2017-3.jpg', 6, 48, 1, '2017-11-07 21:42:02'),
(49, 'imagenes/eventos/mis-cumbre-oct-2017.jpg', 7, 49, 1, '2017-11-07 21:47:43'),
(50, 'imagenes/eventos/expo-cumbre-oct-2017.jpg', 8, 50, 1, '2017-11-07 21:51:10'),
(51, 'imagenes/eventos/seminarios-magistrales-17/cha1.jpg', 9, 1, 1, '2017-12-05 05:08:37'),
(52, 'imagenes/eventos/seminarios-magistrales-17/cha2.jpg', 9, 2, 1, '2017-12-05 05:08:37'),
(53, 'imagenes/eventos/seminarios-magistrales-17/cha3.jpg', 9, 3, 1, '2017-12-05 05:09:01'),
(54, 'imagenes/eventos/seminarios-magistrales-17/cha4.jpg', 9, 4, 1, '2017-12-05 05:09:01'),
(55, 'imagenes/eventos/seminarios-magistrales-17/cha5.jpg', 9, 5, 1, '2017-12-05 05:09:11'),
(56, 'imagenes/eventos/conf-prensa-nov17/con-prensa-1.jpg', 10, 1, 1, '2017-12-05 05:15:36'),
(57, 'imagenes/eventos/conf-prensa-nov17/con-prensa-2.jpg', 10, 2, 1, '2017-12-05 05:15:36'),
(58, 'imagenes/eventos/conf-prensa-nov17/con-prensa-3.jpg', 10, 3, 1, '2017-12-05 05:15:36'),
(59, 'imagenes/eventos/conf-prensa-nov17/con-prensa-4.jpg', 10, 4, 1, '2017-12-05 05:15:36'),
(60, 'imagenes/eventos/cumbrematch-nov17/cumbre-match-1.jpg', 11, 1, 1, '2017-12-05 05:20:20'),
(61, 'imagenes/eventos/cumbrematch-nov17/cumbre-match-2.jpg', 11, 2, 1, '2017-12-05 05:20:20'),
(62, 'imagenes/eventos/cumbrematch-nov17/cumbre-match-3.jpg', 11, 3, 1, '2017-12-05 05:20:20'),
(70, 'imagenes/eventos/expocumbre-2017/expocumbre-1.jpg', 12, 1, 1, '2017-12-05 05:26:05'),
(71, 'imagenes/eventos/expocumbre-2017/expocumbre-2.jpg', 12, 2, 1, '2017-12-05 05:26:05'),
(72, 'imagenes/eventos/expocumbre-2017/expocumbre-3.jpg', 12, 3, 1, '2017-12-05 05:26:05'),
(73, 'imagenes/eventos/expocumbre-2017/expocumbre-4.jpg', 12, 4, 1, '2017-12-05 05:26:05'),
(74, 'imagenes/eventos/expocumbre-2017/expocumbre-5.jpg', 12, 5, 1, '2017-12-05 05:26:05'),
(75, 'imagenes/eventos/expocumbre-2017/expocumbre-6.jpg', 12, 6, 1, '2017-12-05 05:26:17'),
(76, 'imagenes/eventos/fiesta-gala-2017/1.jpg', 13, 1, 1, '2017-12-05 05:32:51'),
(77, 'imagenes/eventos/fiesta-gala-2017/2.jpg', 13, 2, 1, '2017-12-05 05:32:51'),
(78, 'imagenes/eventos/fiesta-gala-2017/3.jpg', 13, 3, 1, '2017-12-05 05:32:51'),
(79, 'imagenes/eventos/fiesta-gala-2017/4.jpg', 13, 4, 1, '2017-12-05 05:32:51'),
(80, 'imagenes/eventos/fiesta-gala-2017/5.jpg', 13, 5, 1, '2017-12-05 05:32:51'),
(81, 'imagenes/eventos/guerra-de-cocinas/1.jpg', 14, 1, 1, '2017-12-05 05:36:53'),
(82, 'imagenes/eventos/guerra-de-cocinas/2.jpg', 14, 2, 1, '2017-12-05 05:36:53'),
(83, 'imagenes/eventos/guerra-de-cocinas/3.jpg', 14, 3, 1, '2017-12-05 05:36:53'),
(84, 'imagenes/eventos/guerra-de-cocinas/4.jpg', 14, 4, 1, '2017-12-05 05:36:53'),
(85, 'imagenes/eventos/guerra-de-cocinas/5.jpg', 14, 5, 1, '2017-12-05 05:37:07'),
(86, 'imagenes/eventos/miss-cumbre-17/1.jpg', 15, 1, 1, '2017-12-05 05:43:14'),
(87, 'imagenes/eventos/miss-cumbre-17/2.jpg', 15, 2, 1, '2017-12-05 05:43:14'),
(88, 'imagenes/eventos/miss-cumbre-17/3.jpg', 15, 3, 1, '2017-12-05 05:43:14'),
(89, 'imagenes/eventos/miss-cumbre-17/4.jpg', 15, 4, 1, '2017-12-05 05:43:14'),
(90, 'imagenes/eventos/miss-cumbre-17/5.jpg', 15, 5, 1, '2017-12-05 05:43:14'),
(91, 'imagenes/eventos/web-01-1-jpg-1545418300.jpg', 17, 51, 1, '2018-12-21 18:51:40'),
(92, 'imagenes/eventos/web-01-jpg-1545418301.jpg', 17, 52, 1, '2018-12-21 18:51:41'),
(93, 'imagenes/eventos/willay-01-jpg-1545418304.jpg', 17, 53, 1, '2018-12-21 18:51:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facultad`
--

CREATE TABLE `facultad` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activo` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facultad`
--

INSERT INTO `facultad` (`id`, `titulo`, `descripcion`, `imagen`, `orden`, `estado`, `fecha`, `activo`) VALUES
(1, 'a:1:{s:2:\"es\";s:28:\"CIENCIAS DE LA COMUNICACIÓN\";}', 'a:1:{s:2:\"es\";s:34:\"Ciencias de la comunicaci&oacute;n\";}', 'imagenes/facultad/carrera_1.jpg', 1, 1, '2015-10-30 07:37:33', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
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
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `home`
--

INSERT INTO `home` (`id`, `titulo`, `url`, `imagen`, `titulo_2`, `url_2`, `imagen_2`, `titulo_3`, `url_3`, `imagen_3`, `convenios`, `orden`, `estado`, `fecha`) VALUES
(1, 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:24:\"./carrera-de-gastronomia\";}', 'imagenes/home/home_1.jpg', 'a:1:{s:2:\"es\";s:24:\"<h3>Cursos Cortos</h3>\r\n\";}', 'a:1:{s:2:\"es\";s:25:\"./diplomado-de-pasteleria\";}', 'imagenes/home/home_2.jpg', 'a:1:{s:2:\"es\";s:47:\"<h3>Chefs&nbsp;<span>Instructores</span></h3>\r\n\";}', 'a:1:{s:2:\"es\";s:10:\"./talleres\";}', 'imagenes/home/home_3_1.jpg', 'a:1:{s:2:\"es\";s:706:\"<p>Cumbre ahora comparte su marca con <strong><a href=\"http://www.toques-auvergne.com\" target=\"_blank\">Les Toques D&#39; Auvergne</a></strong> asociaci&oacute;n de restaurantes franceses categorizados con estrella Michelin. Cumplimos los est&aacute;ndares para titular alumnos siguiendo las pautas m&aacute;s rigurosas de los mejores establecimientos de Francia, la &ldquo;meca&rdquo; de la t&eacute;cnica gastron&oacute;mica mundial. Nuestros estudiantes y egresados pueden tambi&eacute;n acceder a pasant&iacute;as y pr&aacute;cticas. Para que tu pasi&oacute;n por la cocina sea el alma de tu futuro.&nbsp;<a href=\"http://www.toques-auvergne.com/\" target=\"_blank\">http://www.toques-auvergne.com</a></p>\r\n\";}', 0, 1, '2018-07-24 23:43:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `descripcion` text NOT NULL,
  `descripcion_2` text NOT NULL,
  `slogan` text NOT NULL,
  `mision` text NOT NULL,
  `vision` text NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id`, `titulo`, `imagen`, `descripcion`, `descripcion_2`, `slogan`, `mision`, `vision`, `orden`, `estado`, `fecha`) VALUES
(1, 'a:1:{s:2:\"es\";s:24:\"BIENVENIDOS AL NUEVO ISP\";}', 'imagenes/mensaje/foto_promotor.png', 'a:1:{s:2:\"es\";s:2396:\"<p>En nombre de <span>INSTITUTO ISP</span> queremos darles una cordial bienvenida y esperamos formar parte de su tan anhelado futuro profesional.</p>\r\n\r\n<p>En <span>ISP</span> tenemos propuestas educativas realmente innovadoras, para que puedas alcanzar en poco tiempo, un adecuado grado de conocimientos y as&iacute; poder insertarte con &eacute;xito en el cambiante mercado laboral. Acad&eacute;micamente, estamos estructurados de tal manera que, cada alumno reciba una formaci&oacute;n integral y para ello consideramos que la teor&iacute;a y la pr&aacute;ctica son la conjunci&oacute;n ideal para alcanzar los objetivos requeridos. Hoy la capacitaci&oacute;n es indispensable, pero para que ella sea efectiva es necesario adecuarla a los cambios continuos que se producen en nuestros d&iacute;as. Por ello nuestro Instituto est&aacute; en contacto con los centros de estudio m&aacute;s importantes del mundo, lo cual nos permite evaluar y enriquecer permanentemente nuestros planes de estudio.</p>\r\n\r\n<p>El Instituto de Educaci&oacute;n Superior Tecnol&oacute;gico Privado <span>ISP</span>, es una Instituci&oacute;n Educativa de car&aacute;cter privado, con m&aacute;s de 28 a&ntilde;os formando profesionales l&iacute;deres en las Ciencias de la Comunicaci&oacute;n, creado mediante R.M. N&ordm; 501-86-ED del 07 de Agosto de 1986, Resoluci&oacute;n Directoral N&ordm; 6950-86-ED DEL 17 de Diciembre de 1986 y Revalidado con R.D. N&ordm; 0089-2006-ED del 09 de Febrero del 2006, contamos tambi&eacute;n con Certificado de Adecuaci&oacute;n de Estudios de las Carreras Profesionales al nuevo Dise&ntilde;o Curricular B&aacute;sico N&ordm; 238-2014-DESTP, con fecha 08 de Julio del 2014 y Constancia de Adecuaci&oacute;n Institucional N&ordm; 565, de fecha 24 de Setiembre del 2014.</p>\r\n\r\n<p>El funcionamiento del Instituto se rige por lo establecido en la Ley General de Educaci&oacute;n N&ordm; 28044, el Reglamento de Apertura y Funcionamiento de Institutos Superiores Tecnol&oacute;gicos y Escuelas Superiores no Estatales aprobado por D.S. N&ordm; 015-87-ED, las Normas de Organizaci&oacute;n y Funciones de los Institutos Superiores Tecnol&oacute;gicos aprobado por R.M. N&ordm; 641-83 y otras de car&aacute;cter T&eacute;cnico-Pedag&oacute;gico y Administrativo expedidas por la Direcci&oacute;n General de Educaci&oacute;n Superior, as&iacute; como el D.S. N&ordm; 014-2002-ED.</p>\r\n\";}', 'a:1:{s:2:\"es\";s:1185:\"<div class=\"col-xs-12\">\r\n<p>Ello significa no solamente la partida de nacimiento de nuestra vida institucional, sino tambi&eacute;n el cumplimiento del anhelo largamente esperado por los locutores peruanos: el reconocimiento de su actividad como una PROFESI&Oacute;N. En realidad, este hecho no es por pura coincidencia. Y es que siempre estuvimos a la vanguardia en el mundo de las comunicaciones en el pa&iacute;s, pues somos creadores de otra carrera profesional: &ldquo;Periodismo Radial y Televisivo&rdquo;.</p>\r\n\r\n<p>Hoy en d&iacute;a somos una instituci&oacute;n educativa s&oacute;lida, que desarrolla al m&aacute;ximo el talento de nuestros alumnos para convertirlos en profesionales l&iacute;deres; por ese motivo hemos redoblado esfuerzos y tecnolog&iacute;as.</p>\r\n\r\n<p>Ingresamos a nuestra tercera d&eacute;cada renovando nuestro compromiso de formar los mejores profesionales, esa motivaci&oacute;n crece y la encontramos en la m&iacute;stica de nuestros egresados que triunfan en los medios de comunicaci&oacute;n del pa&iacute;s y el extranjero; as&iacute; como en el esfuerzo y dedicaci&oacute;n de nuestros estudiantes. &iexcl; Bienvenidos al nuevo ISP!</p>\r\n</div>\r\n\";}', 'a:1:{s:2:\"es\";s:424:\"El 7 de agosto de 1986, el ministro de educaci&oacute;n por Resoluci&oacute;n Ministerial N&ordm; 501-86-ED, reconoce como carrera profesional &ldquo;Locuci&oacute;n y Comunicaci&oacute;n Radial y Televisiva&rdquo;; propuesta dise&ntilde;ada por la Asociaci&oacute;n Educativa &ldquo;Sistema Per&uacute;&rdquo;, a la vez que autoriza su funcionamiento como Instituto Superior Tecnol&oacute;gico Privado SISTEMAS PER&Uacute;.\";}', 'a:1:{s:2:\"es\";s:344:\"<p>Formar profesionales t&eacute;cnicos; investigadores, creativos, competentes y comprometidos en la soluci&oacute;n de problemas en el campo de las comunicaciones. Generando y desarrollando t&eacute;cnicas con conocimientos cient&iacute;ficos, human&iacute;sticos y tecnol&oacute;gicos a trav&eacute;s de los cuales buscamos soluciones.</p>\r\n\";}', 'a:1:{s:2:\"es\";s:191:\"<p>Hacer de cada uno de nuestros estudiantes, un profesional a carta cabal que cumpla un rol importante con &eacute;tica y moral al servicio de la sociedad. Comprometidos con la verdad.</p>\r\n\";}', 1, 1, '2015-11-05 03:51:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `banner` varchar(75) DEFAULT NULL,
  `nombreseo` varchar(75) DEFAULT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `activo` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `imagen`, `banner`, `nombreseo`, `orden`, `estado`, `fecha`, `activo`) VALUES
(1, 'a:1:{s:2:\"es\";s:15:\"GROUND SHIPPING\";}', 'a:1:{s:2:\"es\";s:128:\"<p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Aenean in ante magna. Quisque sodales, exid fermentum tempor.</p>\r\n\";}', 'imagenes/noticias/noticia1.jpg', 'imagenes/noticias/noticia1_1.jpg', 'ground-shipping', 1, 1, '2015-11-06 03:27:31', 0),
(2, 'a:1:{s:2:\"es\";s:11:\"AIR FREIGHT\";}', 'a:1:{s:2:\"es\";s:128:\"<p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Aenean in ante magna. Quisque sodales, exid fermentum tempor.</p>\r\n\";}', 'imagenes/noticias/noticia2.jpg', 'imagenes/noticias/noticia1_2.jpg', 'air-freight', 2, 1, '2015-11-06 03:27:59', 1),
(3, 'a:1:{s:2:\"es\";s:12:\"SEA DELIVERY\";}', 'a:1:{s:2:\"es\";s:128:\"<p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Aenean in ante magna. Quisque sodales, exid fermentum tempor.</p>\r\n\";}', 'imagenes/noticias/noticia3.jpg', 'imagenes/noticias/noticia1_3.jpg', 'sea-delivery', 3, 1, '2015-11-06 03:31:16', 0),
(4, 'a:1:{s:2:\"es\";s:17:\"GROUND SHIPPING 2\";}', 'a:1:{s:2:\"es\";s:128:\"<p>Lorem ipsum dolor sit amet, consectetur adip iscing elit. Aenean in ante magna. Quisque sodales, exid fermentum tempor.</p>\r\n\";}', 'imagenes/noticias/noticia4.jpg', 'imagenes/noticias/noticia1_4.jpg', 'ground-shipping-2', 4, 1, '2015-11-06 03:31:28', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `red`
--

CREATE TABLE `red` (
  `id` int(11) NOT NULL,
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
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `red`
--

INSERT INTO `red` (`id`, `titulo`, `subtitulo`, `tipo`, `vacantes`, `requisitos`, `conocimientos`, `salario`, `nombrecontacto`, `telefonocontacto`, `emailcontacto`, `orden`, `estado`, `fecha`) VALUES
(134, 'a:1:{s:2:\"es\";s:13:\"Restaurantes \";}', 'a:1:{s:2:\"es\";s:20:\"El Sabor de la Pedro\";}', 'a:1:{s:2:\"es\";s:10:\"Prácticas\";}', 'a:1:{s:2:\"es\";s:2:\"02\";}', 'a:1:{s:2:\"es\";s:227:\"<ul>\r\n	<li><strong>Aptitudes:</strong> Comprometido, honesto, proactivo e Innovador.</li>\r\n	<li>Tiempo completo</li>\r\n	<li><strong>Direcci&oacute;n: </strong>Juan XXIII N&deg; 370 - Lambayeque ( frente a la UNPRG)</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:199:\"<ul>\r\n	<li>Platos criollos, platos de pescado y mariscos (preferente)</li>\r\n	<li>Preparaci&oacute;n de jugos frutales</li>\r\n	<li>Cotizaci&oacute;n de platos (costo de producci&oacute;n)</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:2:\"--\";}', 'a:1:{s:2:\"es\";s:35:\"Yurggen Salvador Bendezú Jáuregui\";}', 'a:1:{s:2:\"es\";s:9:\"939632397\";}', 'a:1:{s:2:\"es\";s:19:\"yurggenbj@gmail.com\";}', 5, 1, '2019-01-29 20:20:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slidehome`
--

CREATE TABLE `slidehome` (
  `id` int(11) NOT NULL,
  `titulo` varchar(20) DEFAULT NULL,
  `subtitulo` varchar(20) DEFAULT NULL,
  `descripcion` varchar(40) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `url` varchar(75) DEFAULT NULL,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `slidehome`
--

INSERT INTO `slidehome` (`id`, `titulo`, `subtitulo`, `descripcion`, `imagen`, `url`, `orden`, `estado`, `fecha`) VALUES
(13, 'Campus', 'Gastronómico', '', 'imagenes/home/slider-1_2.jpg', 'campus-gastronomico', 1, 1, '2016-07-05 04:52:09'),
(14, 'Carrera de ', 'Gastronomía', '', 'imagenes/home/slider-2.jpg', 'carrera-de-gastronomia', 2, 1, '2016-07-05 04:55:18'),
(15, 'Diplomado de', 'Pasteleria', '', 'imagenes/slidehome/slider-3.jpg', 'diplomado-de-pasteleria', 3, 1, '2016-07-05 04:53:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscrito`
--

CREATE TABLE `suscrito` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `asunto` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `telefono` varchar(50) NOT NULL DEFAULT '',
  `empresa` varchar(255) DEFAULT '',
  `mensaje` text,
  `estado` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `suscrito`
--

INSERT INTO `suscrito` (`id`, `nombre`, `asunto`, `email`, `telefono`, `empresa`, `mensaje`, `estado`, `created_at`) VALUES
(1, 'Armando E', '', 'armandoaepp@gmail.com', '', '', 'mensaje de prueba', 1, '2019-02-13 15:02:29'),
(2, 'Armando E', '', 'armandoaepp@gmail.com', '', '', 'mensaje de prueba', 1, '2019-02-13 16:02:40'),
(3, 'Armando E', '', 'armandoaepp@gmail.com', '', '', 'Mensaje de prueba desde la web cumbre: CONTACTANOS', 1, '2019-02-13 16:02:38'),
(4, 'fedra nury more castro', '', 'fedranury30@gmail.com', '', '', 'como puedo hacer para solicitar mi certificado de  haber  <br />\r\nterminado mis estudios', 1, '2019-02-27 05:02:41'),
(5, 'Belén', '', 'belen.paicob@gmail.com', '', '', 'Buenos días quisiera saber sobre la carrera y sobre tbm sus pagos y su número telefónico no da', 1, '2019-02-27 14:02:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taller`
--

CREATE TABLE `taller` (
  `id` int(11) NOT NULL,
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
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `taller`
--

INSERT INTO `taller` (`id`, `titulo`, `descripcion`, `slide`, `imagen`, `certificacion`, `titulos`, `inversion`, `titulacion`, `detalleduracion`, `detalledia`, `detallehorario`, `detallelugar`, `detalleprecio`, `detalleequipos`, `detalleconsultas`, `detalledirigido`, `aquien`, `temas`, `nombreseo`, `orden`, `estado`, `fecha`) VALUES
(17, 'a:1:{s:2:\"es\";s:32:\"MASA HOJALDRE Y SUS APLICACIONES\";}', 'a:1:{s:2:\"es\";s:27:\"<strong>3 SESIONES</strong>\";}', '', 'imagenes/talleres/1.jpg', '', '', '', '', 'a:1:{s:2:\"es\";s:17:\"7, 8, 9 de agosto\";}', NULL, 'a:1:{s:2:\"es\";s:16:\"7:00 a 10:00 pm.\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:6:\"S/ 200\";}', NULL, NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', NULL, NULL, NULL, 1, 0, '2019-02-25 15:44:45'),
(18, 'a:1:{s:2:\"es\";s:15:\"TORTAS MODERNAS\";}', 'a:1:{s:2:\"es\";s:41:\"<strong>3 SESIONES</strong><br />\r\n&nbsp;\";}', '', 'imagenes/talleres/2.jpg', '', '', '', '', 'a:1:{s:2:\"es\";s:20:\"14, 15, 16 de agosto\";}', NULL, 'a:1:{s:2:\"es\";s:16:\"7:00 a 10:00 pm.\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:6:\"S/ 200\";}', NULL, NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', NULL, NULL, NULL, 2, 0, '2019-02-25 15:44:49'),
(19, 'a:1:{s:2:\"es\";s:10:\"MESA DULCE\";}', 'a:1:{s:2:\"es\";s:27:\"<strong>3 SESIONES</strong>\";}', '', 'imagenes/talleres/3.jpg', '', '', '', '', 'a:1:{s:2:\"es\";s:20:\"21, 22, 23 de agosto\";}', NULL, 'a:1:{s:2:\"es\";s:16:\"7:00 a 10:00 pm.\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:6:\"S/ 200\";}', NULL, NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', NULL, NULL, NULL, 3, 0, '2019-02-25 15:44:54'),
(20, 'a:1:{s:2:\"es\";s:23:\"TALLER DE EMPRENDEDORES\";}', 'a:1:{s:2:\"es\";s:1090:\"<strong>Sesi&oacute;n 1 &ndash; 2</strong>\r\n<ul>\r\n	<li>B.P.M. buenas pr&aacute;cticas en manipulaci&oacute;n de alimentos</li>\r\n	<li>Bruselina de chocolate</li>\r\n	<li>Torta helada</li>\r\n	<li>Torta tres leche</li>\r\n	<li>Crema volteada</li>\r\n</ul>\r\n<strong>Sesi&oacute;n 3 &ndash; 4</strong>\r\n\r\n<ul>\r\n	<li>Dise&ntilde;o y equipamiento de un taller de pasteler&iacute;a.</li>\r\n	<li>Alfajores de maicena y alfajores cubiertos de chocolate.</li>\r\n	<li>Postres de t&eacute;: brownies, magdalenas, bizcotelas.</li>\r\n	<li>Pay de lim&oacute;n con merengue italiano.</li>\r\n	<li>Pay de manzana con masa frola.</li>\r\n</ul>\r\n<strong>Sesi&oacute;n 5 &ndash; 6</strong>\r\n\r\n<ul>\r\n	<li>Gesti&oacute;n de compras y almac&eacute;n</li>\r\n	<li>Bavarois de guindones</li>\r\n	<li>Pionono</li>\r\n	<li>Selva negra</li>\r\n	<li>Souffl&eacute; de vainilla</li>\r\n</ul>\r\n<strong>Sesi&oacute;n 7 &ndash; 8</strong>\r\n\r\n<ul>\r\n	<li>Costos de producci&oacute;n, costeo de recetas</li>\r\n	<li>Red velvet cake frosting y relleno</li>\r\n	<li>Torta damero cubierta con crema de chocolate y decorada con frutos del bosque</li>\r\n</ul>\r\n\";}', '', 'imagenes/talleres/4.jpg', '', '', '', '', 'a:1:{s:2:\"es\";s:25:\"Lunes 11 hasta 26 febrero\";}', NULL, 'a:1:{s:2:\"es\";s:8:\"6 a 9 pm\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:6:\"S/ 500\";}', NULL, NULL, 'a:1:{s:2:\"es\";s:10:\"8 sesiones\";}', NULL, NULL, NULL, 4, 1, '2019-02-25 16:38:36'),
(21, 'a:1:{s:2:\"es\";s:25:\"COCINA PARA PRINCIPIANTES\";}', 'a:1:{s:2:\"es\";s:1015:\"<strong>MODULO I</strong>\r\n<ul>\r\n	<li><strong>Sesi&oacute;n 1</strong>: reconocimiento de utensilios, t&eacute;cnica de cortes</li>\r\n</ul>\r\nFondos de cocci&oacute;n<br />\r\nAderezos base<br />\r\nMinestrone &ndash; estofado de pollo &ndash; limonada\r\n<ul>\r\n	<li><strong>Sesi&oacute;n 2</strong>:&nbsp; principales m&eacute;todos de cocci&oacute;n</li>\r\n</ul>\r\nPapa a la huanca&iacute;na, arroz con pollo, ensalada criolla, chicha morada<br />\r\n&nbsp;<br />\r\n&nbsp;<br />\r\n<strong>MODULO II&nbsp;</strong>\r\n\r\n<ul>\r\n	<li><strong>Sesi&oacute;n 1 </strong></li>\r\n</ul>\r\n<strong>Vinagretas</strong><br />\r\nEnsalada cesar y crutones<br />\r\nAsado con pur&eacute;<br />\r\nIce tea\r\n<ul>\r\n	<li><strong>Sesi&oacute;n</strong> 2</li>\r\n</ul>\r\n<strong>Cocci&oacute;n del arroz</strong><br />\r\nCausa lime&ntilde;a<br />\r\nArroz con mariscos y limonada frozen\r\n<ul>\r\n	<li><strong>Sesi&oacute;n</strong> 3</li>\r\n</ul>\r\n<strong>Salteados y flambeados</strong><br />\r\nAj&iacute; de gallina<br />\r\nLomo saltado<br />\r\nMaracuy&aacute; frozen\";}', '', 'imagenes/talleres/5.jpg', '', '', '', '', 'a:1:{s:2:\"es\";s:16:\"11-12-13 febrero\";}', NULL, 'a:1:{s:2:\"es\";s:11:\"6 pm a 9 pm\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:6:\"200.00\";}', NULL, NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', NULL, NULL, NULL, 5, 1, '2019-02-25 16:38:44'),
(22, 'a:1:{s:2:\"es\";s:15:\"BARRA CEVICHERA\";}', 'a:1:{s:2:\"es\";s:1183:\"<strong>Chef: Manuel Arevalo</strong><br />\r\n<br />\r\nSesi&oacute;n 1: <strong>leche de tigre y variantes</strong>\r\n<ul>\r\n	<li>Leche de tigre tradicional: aperitivo marino preparado a base de pescado.</li>\r\n	<li>Leche de pantera: aperitivo marino preparado a base de conchas negras.</li>\r\n	<li>Leche de lagarto: aperitivo marino preparado a base de contundente leche de tigre, culantro y aj&iacute; limo</li>\r\n</ul>\r\nSesi&oacute;n 2: <strong>ceviches carretilleros</strong>\r\n\r\n<ul>\r\n	<li>Ceviche de pescado: preparado a base pescado marinado con sal, aj&iacute; limo, culantro, zumo de lim&oacute;n y cebolla, con guarnici&oacute;n de tortitas de cholo.</li>\r\n	<li>Ceviche mixto: preparado a base de pescado y mariscos (langostinos, caracol y pulpo), con guarnici&oacute;n de yuca, camote, cholo y cancha.</li>\r\n	<li>Ceviche con chicharr&oacute;n: ceviche tradicional con chicharr&oacute;n de calamar.</li>\r\n</ul>\r\nSesi&oacute;n 3:<strong> ceviches compuestos</strong>\r\n\r\n<ul>\r\n	<li>Ceviche caliente: pescado marinado en crema de aj&iacute; amarillo y cocido a las brasas y servido en panquita ahumada</li>\r\n	<li>Chancadito de cangrejo.</li>\r\n	<li>Choritos a la chalaca.</li>\r\n</ul>\r\n\";}', '', 'imagenes/talleres/6.jpg', '', '', '', '', 'a:1:{s:2:\"es\";s:21:\"11 -12 – 13 febrero\";}', NULL, 'a:1:{s:2:\"es\";s:8:\"5 a 8 pm\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:7:\" s/ 200\";}', NULL, NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', NULL, NULL, NULL, 6, 1, '2019-02-27 16:53:38'),
(23, 'a:1:{s:2:\"es\";s:21:\" SANGUCHERÍA PERUANA\";}', 'a:1:{s:2:\"es\";s:1806:\"<strong>Chef: Jimmy Ar&eacute;valo</strong><br />\r\n<br />\r\nSesi&oacute;n 1\r\n<ul>\r\n	<li>S&aacute;nguche de chicharr&oacute;n\r\n	<ul style=\"list-style-type:circle;\">\r\n		<li>Pan franc&eacute;s</li>\r\n		<li>Zarza criolla</li>\r\n		<li>Camote en chips</li>\r\n		<li>Cerdo pochado y frito previamente en salmuera</li>\r\n		<li>Aj&iacute; parrillero</li>\r\n		<li>Lechuga</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<ul>\r\n	<li>S&aacute;nguche de panceta agridulce\r\n	<ul style=\"list-style-type:circle;\">\r\n		<li>Pan de hamburguesa con ajonjol&iacute;</li>\r\n		<li>Encurtido de nabo y zanahoria</li>\r\n		<li>Panceta al horno</li>\r\n		<li>Salsa agridulce</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\nSesi&oacute;n 2\r\n\r\n<ul>\r\n	<li>S&aacute;nguche de asado de res\r\n	<ul style=\"list-style-type:circle;\">\r\n		<li>Asado de res</li>\r\n		<li>Demi-glass</li>\r\n		<li>Chips de papa nativa</li>\r\n		<li>Lechuga lacia y tomate</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<ul>\r\n	<li>S&aacute;nguche de lomo saltado\r\n	<ul style=\"list-style-type:circle;\">\r\n		<li>Lomo en su jugo</li>\r\n		<li>Verduras crocantes</li>\r\n		<li>Pan franc&eacute;s</li>\r\n		<li>Papas fritas</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\nSesi&oacute;n 3\r\n\r\n<ul>\r\n	<li>S&aacute;nguche de pavo asado criollo\r\n	<ul style=\"list-style-type:circle;\">\r\n		<li>Pan franc&eacute;s</li>\r\n		<li>Pechuga de pavo en su jugo</li>\r\n		<li>Zarza criolla</li>\r\n		<li>T&aacute;rtara criolla (aj&iacute; limo, culantro, huevo duro y mayonesa)</li>\r\n		<li>Lechuga</li>\r\n		<li>Chips de camote</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<ul>\r\n	<li>S&aacute;nguche de pavo saludable\r\n	<ul style=\"list-style-type:circle;\">\r\n		<li>Pan integral</li>\r\n		<li>Pechuga de pavo magra al horno</li>\r\n		<li>Lechuga, tomate, palta y ar&uacute;gula</li>\r\n		<li>Vinagreta: vinagre bals&aacute;mico, aceite de oliva, miel, mostaza</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\";}', '', 'imagenes/talleres/7.jpg', '', '', '', '', 'a:1:{s:2:\"es\";s:21:\"18 – 19 -21 febrero\";}', NULL, 'a:1:{s:2:\"es\";s:8:\"6 a 9 pm\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:7:\" s/ 200\";}', NULL, NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', NULL, NULL, NULL, 7, 1, '2019-02-27 16:54:28'),
(24, 'a:1:{s:2:\"es\";s:24:\"SANDWICH INTERNACIONALES\";}', 'a:1:{s:2:\"es\";s:2323:\"<strong>Chef Jimmy Ar&eacute;valo</strong><br />\r\n<br />\r\nSesi&oacute;n 1\r\n<ul>\r\n	<li>S&aacute;ndwich philadelfia (carne deshilachada y queso)\r\n	<ul style=\"list-style-type:circle;\">\r\n		<li>Panini</li>\r\n		<li>Salsa de queso ahumado (bechamel)</li>\r\n		<li>Cebolla caramelizada</li>\r\n		<li>Carne en l&aacute;minas</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<ul>\r\n	<li>Hamburguesa artesanal a la francesa\r\n	<ul style=\"list-style-type:circle;\">\r\n		<li>Pan de hamburguesa con ajonjol&iacute;</li>\r\n		<li>Carne molida, huevo, tomillo, romero, cebolla</li>\r\n		<li>Tocino crocante</li>\r\n		<li>Cebolla caramelizada (tomillo, romero y aceite de oliva)</li>\r\n		<li>Salsa de champi&ntilde;ones (bechamel)</li>\r\n		<li>Lechuga y tomate</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\nSesi&oacute;n 2\r\n\r\n<ul>\r\n	<li>S&aacute;ndwich de pollo c&eacute;sar\r\n	<ul style=\"list-style-type:circle;\">\r\n		<li>Pan pita</li>\r\n		<li>Mis de lechuga</li>\r\n		<li>Pechuga de pollo a la plancha</li>\r\n		<li>Parmesano</li>\r\n		<li>Salsa c&eacute;sar</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<ul>\r\n	<li>S&aacute;ndwich de pollo grillado y verduras\r\n	<ul style=\"list-style-type:circle;\">\r\n		<li>Ciabatta</li>\r\n		<li>Pechuga de pollo al grill</li>\r\n		<li>Zuccini, tomate, lechuga</li>\r\n		<li>Chimichurri</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\nSesi&oacute;n 3\r\n\r\n<ul>\r\n	<li><strong>Festival de club s&aacute;ndwich:</strong>\r\n\r\n	<ul style=\"list-style-type:circle;\">\r\n		<li>Club s&aacute;ndwich cl&aacute;sico:\r\n		<ul>\r\n			<li>Pan de molde sin corteza</li>\r\n			<li>Pollo con mayonesa y lechuga</li>\r\n			<li>Palta, tomate</li>\r\n			<li>Huevo y tocino</li>\r\n			<li>Chips de papa nativa</li>\r\n		</ul>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<ul style=\"list-style-type:circle;\">\r\n	<li>Club s&aacute;ndwich criollo:\r\n	<ul>\r\n		<li>Pan de molde sin corteza</li>\r\n		<li>Salchicha de huacho y huevo</li>\r\n		<li>Jam&oacute;n del pa&iacute;s y queso paria</li>\r\n		<li>Pollo mechado (vinagre, panca y ajo)</li>\r\n		<li>Chips de camote.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<ul style=\"list-style-type:circle;\">\r\n	<li>Club s&aacute;ndwich franc&eacute;s:\r\n	<ul>\r\n		<li>Pan de molde sin corteza</li>\r\n		<li>Jam&oacute;n ingl&eacute;s y queso Edam</li>\r\n		<li>Cebollas caramelizadas con champi&ntilde;ones</li>\r\n		<li>Queso rallado y huevo montado</li>\r\n		<li>Chips de papas rejilla</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\";}', '', 'imagenes/talleres/8.jpg', '', '', '', '', 'a:1:{s:2:\"es\";s:23:\"25 – 26 y 28 febrero \";}', NULL, 'a:1:{s:2:\"es\";s:8:\"6 a 9 pm\";}', 'a:1:{s:2:\"es\";s:11:\"taller 702 \";}', 'a:1:{s:2:\"es\";s:6:\"s/ 200\";}', NULL, NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', NULL, NULL, NULL, 8, 1, '2019-02-27 16:54:47'),
(25, 'a:1:{s:2:\"es\";s:25:\"EL MUNDO DE LAS EMPANADAS\";}', 'a:1:{s:2:\"es\";s:1631:\"<strong>Chef Jimmy Ar&eacute;valo</strong><br />\r\n<br />\r\n<strong>Sesi&oacute;n 1</strong>\r\n<ul>\r\n	<li>Masa bris&eacute;e:\r\n	<ul style=\"list-style-type:circle;\">\r\n		<li>Empanada de pollo a la finas hierbas:\r\n		<ul>\r\n			<li>pollo salteado</li>\r\n			<li>cebolla caramelizada</li>\r\n			<li>salsa bechamel</li>\r\n			<li>mayonesa al aj&iacute; amarillo</li>\r\n		</ul>\r\n		</li>\r\n		<li>Empanada de lomo saltado\r\n		<ul>\r\n			<li>lomo al jugo</li>\r\n			<li>verduras crocantes: cebolla, tomate y aj&iacute;.</li>\r\n			<li>mayonesa oriental: mayonesa con aceite de ajonjol&iacute;, ajo y kion.</li>\r\n		</ul>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n<strong>Sesi&oacute;n 2</strong>\r\n\r\n<ul>\r\n	<li>Masa frita\r\n	<ul style=\"list-style-type:circle;\">\r\n		<li>Empanada argentina\r\n		<ul>\r\n			<li>mix de chorizo y fino corte de res</li>\r\n			<li>pimientos morroneados</li>\r\n			<li>salsa chimichurri</li>\r\n		</ul>\r\n		</li>\r\n		<li>Empanada huachana:\r\n		<ul>\r\n			<li>salchicha de huacho</li>\r\n			<li>huevo</li>\r\n			<li>aj&iacute; limo y cebolla china</li>\r\n			<li>crema de rocoto</li>\r\n		</ul>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n<strong>Sesi&oacute;n 3 </strong>\r\n\r\n<ul>\r\n	<li>Salte&ntilde;a\r\n	<ul style=\"list-style-type:circle;\">\r\n		<li>Empanada mexicana:\r\n		<ul>\r\n			<li>panceta de cerdo</li>\r\n			<li>cebolla caramelizada</li>\r\n			<li>chile (mexicano), tomate y culantro</li>\r\n			<li>pico de gallo con palta.</li>\r\n		</ul>\r\n		</li>\r\n		<li>Empanada italiana:\r\n		<ul>\r\n			<li>-carne molida</li>\r\n			<li>-cebolla caramelizada y tomate</li>\r\n			<li>-albahaca y or&eacute;gano</li>\r\n			<li>mayonesa de anchoas alcaparras y ajo.</li>\r\n		</ul>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\";}', '', 'imagenes/talleres/9.jpg', '', '', '', '', 'a:1:{s:2:\"es\";s:17:\"4 – 5 -7 marzo \";}', NULL, 'a:1:{s:2:\"es\";s:6:\"s/ 200\";}', 'a:1:{s:2:\"es\";s:10:\"Taller 702\";}', 'a:1:{s:2:\"es\";s:6:\"s/ 200\";}', NULL, NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', NULL, NULL, NULL, 9, 1, '2019-02-27 16:55:06'),
(26, 'a:1:{s:2:\"es\";s:23:\"EL CHIFA Y SUS SECRETOS\";}', 'a:1:{s:2:\"es\";s:815:\"<strong>Chef Carlos Urbina</strong><br />\r\n<br />\r\n<strong>Primera sesi&oacute;n:</strong>\r\n<ul>\r\n	<li>Reconocimiento de ingredientes b&aacute;sicos para la cocina chifa</li>\r\n	<li>Preparaci&oacute;n de fondos (fondo de ave, fondos oscuros)</li>\r\n	<li>Elaboraci&oacute;n de Siu Mai</li>\r\n	<li>Elaboraci&oacute;n de la salsa tamarindo y wantanes rellenos fritos.</li>\r\n	<li>Preparaci&oacute;n del marinado para el cerdo asado</li>\r\n</ul>\r\n<strong>Segunda sesi&oacute;n: elaboraci&oacute;n de recetas</strong>\r\n\r\n<ul>\r\n	<li>Elaboraci&oacute;n de arroz chaufa especial</li>\r\n	<li>Sopa Wantan especial</li>\r\n	<li>Ti pa kay</li>\r\n</ul>\r\n<strong>Tercera sesi&oacute;n: elaboraci&oacute;n de recetas</strong>\r\n\r\n<ul>\r\n	<li>Tallar&iacute;n saltado.</li>\r\n	<li>Alitas kaypi.</li>\r\n	<li>Pollo chi&nbsp; jau kay.</li>\r\n</ul>\r\n\";}', '', 'imagenes/talleres/10.jpg', '', '', '', '', 'a:1:{s:2:\"es\";s:11:\"4,5,7 marzo\";}', NULL, 'a:1:{s:2:\"es\";s:9:\"6 a  9 pm\";}', 'a:1:{s:2:\"es\";s:0:\"\";}', 'a:1:{s:2:\"es\";s:6:\"s/ 200\";}', NULL, NULL, 'a:1:{s:2:\"es\";s:0:\"\";}', NULL, NULL, NULL, 10, 1, '2019-02-27 16:55:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos`
--

CREATE TABLE `textos` (
  `id` int(11) NOT NULL,
  `identificador` text NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `orden` int(11) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `textos`
--

INSERT INTO `textos` (`id`, `identificador`, `titulo`, `descripcion`, `orden`, `estado`, `fecha`) VALUES
(1, 'Transforma tu vida', 'a:1:{s:2:\"es\";s:19:\"TRANSFORMA TU VIDA \";}', 'a:1:{s:2:\"es\";s:1279:\"Tenemos nuestro Reto40 - reto de 40 d&iacute;as dise&ntilde;ado de acuerdo a tus necesidades y requerimientos. D&oacute;nde deseamos brindarte una mirada holistica y una figura amplia de lo que est&aacute; sucediendo en tu vida y como generar el cambio inicial para poder transformarte.<br />\r\n<br />\r\n<img alt=\"\" class=\"krown-single-image aligncenter sep1\" height=\"8\" src=\"http://nadine-rothfuss.de/media/sep.png\" width=\"194\" /><br />\r\n\r\nElaboraremos una pr&aacute;ctica diaria para ti, asesor&iacute;a en nutrici&oacute;n y soporte v&iacute;a email y/o skype ilimitado durante todo el proceso. Ya sea que desees cambiar tu estilo de vida o alimentaci&oacute;n, aprender a respirar, liberar estr&eacute;s, miedo, ansiedad, fortalecer , prepararte para tu matrimonio, recuperarte de alguna enfermedad o cualquier sucedo importante en tu vida. Esta es la herramienta clave para atravesar cualquier cosa que se te presente! Crea la mejor versi&oacute;n posible de ti mismo a trav&eacute;s de nuestra gu&iacute;a y soporte. Todos tenemos el poder de transformar-nos y est&aacute; dentro de todos la capacidad de volver esto realidad. Tenemos asesor&iacute;a personalizada para ti para inicies el cambio en tu vida y nuestro apoyo para sostener tus procesos de transformaci&oacute;n.\";}', 0, 1, '2015-07-20 02:21:30'),
(2, 'Retiros', 'a:1:{s:2:\"es\";s:7:\"Retiros\";}', 'a:1:{s:2:\"es\";s:643:\"Nuestros retiros buscan abrir el espacio en ti para que logres conectarte con tus elementos a trav&eacute;s de la naturaleza.&nbsp; Desconectate de la rutina en la ciudad y entra a un espacio de sanaci&oacute;n d&oacute;nde nutriremos y desintoxicaremos nuestro cuerpo a trav&eacute;s del Yoga, la Meditaci&oacute;n y una dieta vegetariana. Disfruta de los amaneceres, de la pr&aacute;ctica al aire libre y de la conexi&oacute;n con la naturaleza a trav&eacute;s de la respiraci&oacute;n.&nbsp; Noches de meditaci&oacute;n profunda y relajaci&oacute;n con gong para liberar la tensi&oacute;n de nuestro cuerpo y renovar nuestra energ&iacute;a.\";}', 0, 1, '2015-07-20 02:23:22'),
(3, 'Fuera del Mat', 'a:1:{s:2:\"es\";s:14:\"FUERA DEL MAT \";}', 'a:1:{s:2:\"es\";s:81:\"Llevando y aplicando la experiencia de nuestra pr&aacute;ctica en la vida diaria.\";}', 0, 1, '2015-07-13 13:51:42'),
(4, 'Terapias', 'a:1:{s:2:\"es\";s:8:\"Terapias\";}', 'a:1:{s:2:\"es\";s:288:\"<span class=\"cont_descripcion\">A trav&eacute;s del yoga, se crea regulares tiempos de espera para la relajaci&oacute;n y regeneraci&oacute;n profunda. Cuerpo, mente y alma a respirar. Disfrute de los peque&ntilde;os oasis de la vida cotidiana mediante una clase de yoga relajante. </span>\";}', 0, 1, '2015-06-18 05:07:36'),
(5, 'Tienda', 'a:1:{s:2:\"es\";s:6:\"Tienda\";}', 'a:1:{s:2:\"es\";s:105:\"Tenemos un aplio cat&aacute;logo de productos para ti.<br />\r\nCon&oacute;celos a detalle y haz tu pedido.\";}', 0, 1, '2015-06-18 05:08:01'),
(6, 'Yoga', 'a:1:{s:2:\"es\";s:4:\"YOGA\";}', 'a:1:{s:2:\"es\";s:1927:\"<div style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 12.8000001907349px; line-height: normal;\"><span style=\"color: rgb(102, 102, 102); font-family: Georgia, serif; font-size: 14px; line-height: 25.2000007629395px; text-align: center;\">El yoga es un sistema que se utiliza para equilibrar el cuerpo, la mente y el esp&iacute;ritu. Es una tecnolog&iacute;a de la conciencia, una ciencia antigua que ha evolucionado pero que guarda el objetivo de encontrar bienestar, salud, felicidad y crecimiento interior.&nbsp;</span></div>\r\n\r\n<div style=\"color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 12.8000001907349px; line-height: normal;\">\r\n<p style=\"border: 0px; font-family: Georgia, serif; font-size: 14px; margin: 0px; outline: 0px; padding: 6px 0px; vertical-align: baseline; color: rgb(102, 102, 102); line-height: 25.2000007629395px; text-align: center;\">A trav&eacute;s de la mente, &nbsp;generamos diferentes emociones y con la pr&aacute;ctica regular de yoga es que estimulados estados de calma donde hay m&aacute;s tolerancia con respecto a uno mismo, sus limitaciones, su cuerpo, y un trabajo interior hacia la sabidur&iacute;a, la felicidad, la espiritualidad.&nbsp;</p>\r\n\r\n<p style=\"border: 0px; font-family: Georgia, serif; font-size: 14px; margin: 0px; outline: 0px; padding: 6px 0px; vertical-align: baseline; color: rgb(102, 102, 102); line-height: 25.2000007629395px; text-align: center;\">La pr&aacute;ctica del yoga es apropiada para todos y es independiente de las creencias de cada cual. Nos ayuda a enfocarnos, a fortalecer la capacidad de disfrutar y la fuerza de voluntad, a regular el metabolismo, a aumentar la agilidad y la elasticidad, a desintoxicar el cuerpo, a revitalizar los &oacute;rganos, a sentirnos siempre j&oacute;venes. La salud est&aacute; en nuestras manos, as&iacute; como la felicidad, la alegr&iacute;a y el crecimiento espiritual.</p>\r\n</div>\r\n\";}', 0, 1, '2015-06-24 22:25:15'),
(7, 'Link de interes', 'a:1:{s:2:\"es\";s:16:\"Link de Interés\";}', 'a:1:{s:2:\"es\";s:41:\"Descripci&oacute;n link de inter&eacute;s\";}', 1, 1, '2015-06-21 07:25:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traslados`
--

CREATE TABLE `traslados` (
  `id` int(11) NOT NULL,
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
  `promocion` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `traslados`
--

INSERT INTO `traslados` (`id`, `titulo`, `imagen`, `presentacion`, `item1`, `item2`, `item3`, `item4`, `descitem1`, `descitem2`, `descitem3`, `descitem4`, `promocion`) VALUES
(1, 'a:1:{s:2:\"es\";s:9:\"TRASLADOS\";}', 'imagenes/mensaje/banner_traslado.jpg', 'a:1:{s:2:\"es\";s:1075:\"<p>Nos interesa que seas un profesional con los mejores conocimientos tanto te&oacute;ricos como pr&aacute;cticos en un ambiente de camarader&iacute;a y trabajo en equipo. Queremos que la pases bien mientras te formas.</p>\r\n\r\n<p>Como sabemos que eres &uacute;nico te damos un servicio innovador y diferenciado:</p>\r\n\r\n<ul style=\"padding-left: 16px; margin:20px 0\">\r\n	<li><strong>ISPort &gt;&gt;</strong> Momentos para el deporte (Voley, fulbito y ping pong).</li>\r\n	<li><strong>ISP invita &gt;&gt;</strong> Momentos para divertirte y compartir con alumnos y personal docente.</li>\r\n	<li><strong>Cine Club ISP &gt;&gt;</strong> Proyecci&oacute;n de pel&iacute;culas y videos para entretenimiento y aprendizaje.</li>\r\n	<li><strong>ISuP&eacute;rate &gt;&gt;</strong> Charlas y talleres gratuitos para tu auto superaci&oacute;n y crecimiento personal.</li>\r\n</ul>\r\n\r\n<p>Por eso y muchas razones m&aacute;s, queremos invitarte al ISP para contarte cu&aacute;l es nuestra nueva visi&oacute;n de la educaci&oacute;n y mostrarte una propuesta educativa completamente diferente.</p>\r\n\";}', 'a:1:{s:2:\"es\";s:43:\"POR QUÉ TRASLADARME A ISP? 							        \";}', 'a:1:{s:2:\"es\";s:48:\"Qué requisitos necesito para trasladarme a ISP?\";}', 'a:1:{s:2:\"es\";s:44:\"Cómo hago para trasladarme? 							        \";}', 'a:1:{s:2:\"es\";s:42:\"Cuándo puedo trasladarme? 							        \";}', 'a:1:{s:2:\"es\";s:1367:\"<p>Te ofrecemos un proceso de traslado atractivo que te permite convalidar algunos cursos que ya hayas llevado en tu actual instituto.</p>\r\n\r\n<p>Contar&aacute;s con un plan de pagos de acuerdo a tus necesidades previa categorizaci&oacute;n.</p>\r\n\r\n<p>&iexcl;Recibir&aacute;s una educaci&oacute;n integral con visitas a importantes empresas, para aprender en la cancha!</p>\r\n\r\n<p>Si destacas en tus estudios y gracias a nuestra amplia red de alianzas estrat&eacute;gicas te garantizamos trabajo incluso antes de graduarte.</p>\r\n\r\n<p>A partir del segundo a&ntilde;o de estudios ingresar&aacute;s autom&aacute;ticamente a nuestra Bolsa de Empleos.</p>\r\n\r\n<p>Seguir&aacute;s cursos de tu especialidad desde los primeros ciclos.</p>\r\n\r\n<p>Tu educaci&oacute;n ser&aacute; 100% pr&aacute;ctica desde el primer d&iacute;a ya que contamos con:</p>\r\n\r\n<ul>\r\n	<li><strong>Set de televisi&oacute;n &gt;&gt;</strong> Estudio propio con c&aacute;maras y luces profesionales</li>\r\n	<li><strong>Switcher profesional &gt;&gt;</strong> Como si estuvieras en el mismo canal de televisi&oacute;n</li>\r\n	<li><strong>Set de fotograf&iacute;a &gt;&gt;</strong> Estudio propio con c&aacute;maras e implementos de &uacute;ltimo generaci&oacute;n</li>\r\n	<li><strong>Cabina de radio &gt;&gt;</strong> Consola de audio, micros profesionales y software de edici&oacute;n profesional</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:252:\"<p>En ISP buscamos la excelencia educativa, por tanto debes cumplir con:</p>\r\n\r\n<ul>\r\n	<li>Haber aprobado los cr&eacute;ditos de estudio.</li>\r\n	<li>No haber sido separado de alguna instituci&oacute;n educativa por motivos disciplinarios.</li>\r\n</ul>\r\n\";}', 'a:1:{s:2:\"es\";s:636:\"<p>Es muy sencillo. S&oacute;lo debes seguir estos 4 pasos:</p>\r\n\r\n<ul>\r\n	<li>Ac&eacute;rcate a nuestras oficinas en calle Madre de Dios 255 &ndash; Entre la cuadra 4 y 5 de Av. Petit Thouars frente al Paseo de las Aguas.</li>\r\n	<li>Luego de una entrevista personal con la Direcci&oacute;n Acad&eacute;mica sabr&aacute;s si est&aacute;s admitido.</li>\r\n	<li>Llenas la ficha de inscripci&oacute;n.</li>\r\n	<li>Presentas tu certificado de estudios y buena conducta emitido por el instituto de procedencia</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<h3 style=\"text-align:center; font-size:20px;\">EN ISP NO TE COBRAMOS NING&Uacute;N COSTO POR TRASLADARTE</h3>\r\n\";}', 'a:1:{s:2:\"es\";s:170:\"<p>Ahora mismo, tienes plazo para iniciar tus estudios en nuestro siguiente ciclo acad&eacute;mico 2016-I</p>\r\n\r\n<p>&iexcl;&iexcl;Ven y s&eacute; parte del cambio!!</p>\r\n\";}', 'a:1:{s:2:\"es\";s:40:\"CARRERAS Y TALLERES DISPONIBLES 2016 - 1\";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traslado_pregunta`
--

CREATE TABLE `traslado_pregunta` (
  `id` int(11) NOT NULL,
  `pregunta` varchar(50) DEFAULT NULL,
  `respuesta` text,
  `orden` int(11) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `fecha` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `traslado_pregunta`
--

INSERT INTO `traslado_pregunta` (`id`, `pregunta`, `respuesta`, `orden`, `estado`, `fecha`) VALUES
(1, 'POR QUÉ TRASLADARME A ISP?', '<p>Te ofrecemos un proceso de traslado atractivo que te permite convalidar algunos cursos que ya hayas llevado en tu actual instituto.</p>\r\n\r\n<p>Contar&aacute;s con un plan de pagos de acuerdo a tus necesidades previa categorizaci&oacute;n.</p>\r\n\r\n<p>&iexcl;Recibir&aacute;s una educaci&oacute;n integral con visitas a importantes empresas, para aprender en la cancha!</p>\r\n\r\n<p>Si destacas en tus estudios y gracias a nuestra amplia red de alianzas estrat&eacute;gicas te garantizamos trabajo incluso antes de graduarte.</p>\r\n\r\n<p>A partir del segundo a&ntilde;o de estudios ingresar&aacute;s autom&aacute;ticamente a nuestra Bolsa de Empleos.</p>\r\n\r\n<p>Seguir&aacute;s cursos de tu especialidad desde los primeros ciclos.</p>\r\n\r\n<p>Tu educaci&oacute;n ser&aacute; 100% pr&aacute;ctica desde el primer d&iacute;a ya que contamos con:</p>\r\n\r\n<ul>\r\n	<li><strong>Set de televisi&oacute;n &gt;&gt;</strong> Estudio propio con c&aacute;maras y luces profesionales</li>\r\n	<li><strong>Switcher profesional &gt;&gt;</strong> Como si estuvieras en el mismo canal de televisi&oacute;n</li>\r\n	<li><strong>Set de fotograf&iacute;a &gt;&gt;</strong> Estudio propio con c&aacute;maras e implementos de &uacute;ltimo generaci&oacute;n</li>\r\n	<li><strong>Cabina de radio &gt;&gt;</strong> Consola de audio, micros profesionales y software de edici&oacute;n profesional</li>\r\n</ul>\r\n', NULL, 1, '2015-11-04 04:45:32'),
(2, 'Qué requisitos necesito para trasladarme a ISP?', '<p>En ISP buscamos la excelencia educativa, por tanto debes cumplir con:</p>\r\n\r\n<ul>\r\n	<li>Haber aprobado los cr&eacute;ditos de estudio.</li>\r\n	<li>No haber sido separado de alguna instituci&oacute;n educativa por motivos disciplinarios.</li>\r\n</ul>\r\n', NULL, 1, '2015-11-03 16:52:00'),
(3, 'Cómo hago para trasladarme?', '<p>Es muy sencillo. S&oacute;lo debes seguir estos 4 pasos:</p>\r\n\r\n<ul>\r\n	<li>Ac&eacute;rcate a nuestras oficinas en calle Madre de Dios 255 &ndash; Entre la cuadra 4 y 5 de Av. Petit Thouars frente al Paseo de las Aguas.</li>\r\n	<li>Luego de una entrevista personal con la Direcci&oacute;n Acad&eacute;mica sabr&aacute;s si est&aacute;s admitido.</li>\r\n	<li>Llenas la ficha de inscripci&oacute;n.</li>\r\n	<li>Presentas tu certificado de estudios y buena conducta emitido por el instituto de procedencia</li>\r\n</ul>\r\n&nbsp;\r\n\r\n<h3 style=\"text-align:center; font-size:20px;\">EN ISP NO TE COBRAMOS NING&Uacute;N COSTO POR TRASLADARTE</h3>\r\n', NULL, 1, '2015-11-03 16:52:40'),
(4, 'Cuándo puedo trasladarme?', '<p>Ahora mismo, tienes plazo para iniciar tus estudios en nuestro siguiente ciclo acad&eacute;mico 2016-I</p>\r\n\r\n<p>&iexcl;&iexcl;Ven y s&eacute; parte del cambio!!</p>', NULL, 1, '2015-11-03 16:53:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `imagen`) VALUES
(1, 0x7f000001, 'pedroclm', '$2y$08$RDkGGRyQX/8LZlHJlCMcH.SpItZwHvrAhLZEkNwfPsJteAbEkZZZu', 'NULL', 'info@webtilia.com', '', '', 1402679493, NULL, 1268889823, 1459094860, 1, 'Pedro', 'Calderon', 'WJHARIL', '940147037', 'imagenes/usuarios/wjharil.png'),
(2, 0x3132372e302e302e31, 'cumbre', '$2y$08$xLjUc5GGv0qvypmFlMrXjOZVaLXGiAEGvP7dJoUHP7bsoeCF8/iJ6', NULL, 'usuario@isp.com', NULL, NULL, NULL, NULL, 1402679836, 1551283748, 1, 'Admin ', 'CUMBRE', 'ADMIN', '99999', 'imagenes/usuarios/logo.jpg'),
(3, 0x3139302e3233342e3130352e3133, 'jallpas', '$2y$08$QdYMJ2UeSjU41K6MowdnyOv0Jva1tjxQkeJU3JDkKYPEd5Z9LvKcC', NULL, 'berzavlu@gmail.com', NULL, NULL, NULL, NULL, 1436487801, 1436574605, 1, 'Luis', 'Eduardo', 'wjharil', '-----', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(2, 1, 1),
(3, 2, 2),
(4, 3, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admision`
--
ALTER TABLE `admision`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `amigos`
--
ALTER TABLE `amigos`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `buzon`
--
ALTER TABLE `buzon`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `buzon_contacto`
--
ALTER TABLE `buzon_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `buzon_retiro`
--
ALTER TABLE `buzon_retiro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `diplomado`
--
ALTER TABLE `diplomado`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `evento_img`
--
ALTER TABLE `evento_img`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `red`
--
ALTER TABLE `red`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `slidehome`
--
ALTER TABLE `slidehome`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suscrito`
--
ALTER TABLE `suscrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `taller`
--
ALTER TABLE `taller`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `textos`
--
ALTER TABLE `textos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `traslados`
--
ALTER TABLE `traslados`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `traslado_pregunta`
--
ALTER TABLE `traslado_pregunta`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admision`
--
ALTER TABLE `admision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `amigos`
--
ALTER TABLE `amigos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `buzon`
--
ALTER TABLE `buzon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `buzon_contacto`
--
ALTER TABLE `buzon_contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `buzon_retiro`
--
ALTER TABLE `buzon_retiro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `campus`
--
ALTER TABLE `campus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `chef`
--
ALTER TABLE `chef`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `diplomado`
--
ALTER TABLE `diplomado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `evento_img`
--
ALTER TABLE `evento_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `facultad`
--
ALTER TABLE `facultad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `red`
--
ALTER TABLE `red`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT de la tabla `slidehome`
--
ALTER TABLE `slidehome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `suscrito`
--
ALTER TABLE `suscrito`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `taller`
--
ALTER TABLE `taller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `textos`
--
ALTER TABLE `textos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `traslados`
--
ALTER TABLE `traslados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `traslado_pregunta`
--
ALTER TABLE `traslado_pregunta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
