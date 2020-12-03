-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-09-2011 a las 04:48:39
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT=0;
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inv_fa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--
-- Creación: 04-07-2011 a las 18:05:38
--
CREATE DATABASE IF NOT EXISTS `inv_fa`;

USE `inv_fa`;

CREATE TABLE IF NOT EXISTS `area` (
  `id_area` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `nombre`) VALUES
(1, 'Compras'),
(2, 'RH'),
(3, 'Administracion'),
(4, 'Gerencia'),
(5, 'Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_x_instalaciones`
--
-- Creación: 12-07-2011 a las 21:11:28
--

DROP TABLE IF EXISTS `area_x_instalaciones`;
CREATE TABLE IF NOT EXISTS `area_x_instalaciones` (
  `idarea_x_instalaciones` int(20) NOT NULL,
  `Area_id_area` int(15) NOT NULL,
  `Instalaciones_id_instalaciones` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `area_x_instalaciones`
--

INSERT  INTO `area_x_instalaciones` (`idarea_x_instalaciones`, `Area_id_area`, `Instalaciones_id_instalaciones`) VALUES
(1, 1, 3),
(2, 2, 3),
(3, 3, 3),
(4, 4, 3),
(5, 5, 1),
(6, 5, 2),
(7, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--
-- Creación: 04-07-2011 a las 18:05:38
--

DROP TABLE IF EXISTS `equipo`;
CREATE TABLE IF NOT EXISTS `equipo` (
  `serie` int(11) NOT NULL,
  `tipo_eq` varchar(45) DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `capacidad` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `comentarios` varchar(300) DEFAULT NULL,
  `id_instalaciones` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  PRIMARY KEY (`serie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`serie`, `tipo_eq`, `marca`, `modelo`, `nombre`, `capacidad`, `status`, `comentarios`, `id_instalaciones`, `id_area`) VALUES
(0, '', '', '', '', '', 0, '', 0, 5),
(1, 'Pin pad', 'Logitech', 'zero', 'AQWBV-45', '5 mb', 2, 'Equipo de reciente adquisicion', 4, 5),
(2, 'CPU', 'Tron', 'AAA-4512', 'Titan', '6 ATAS', 2, 'ok', 4, 5),
(3, 'Teclado', 'Tron', 'VBH1245', 'YYZA1245', 'OK', 1, 'Buen estado', 3, 1),
(4, 'Monitor', 'Tron', 'Tiger200', 'DSFF4502', '1200 gb', 4, 'Insoportable', 4, 5),
(5, 'Impresora', 'LG', 'Zangar', 'AK-45', 'Doble cartucho', 2, 'Buen estado', 4, 5),
(6, 'Mouse', 'Lenovo', 'ARG-45', 'Lenovo Mouse', 'Raton optico', 1, 'Raton con buenas caracteristicas', 1, 5),
(7, 'Pin Pad', 'Lenovo', 'Arlington', 'Max-45', 'Pind pad simple', 1, 'Ok', 2, 5),
(8, 'Monitor', 'Daewoo', 'JK450', 'Lamblos', '24 in', 1, 'OK', 2, 5),
(9, 'Monitor', 'Mecenas', 'M51', 'M51', '24 in', 4, 'Ok', 4, 5),
(10, 'Monitor', 'Toshiba', 'Mercury', '80-15', '21 in', 4, 'Ok', 4, 5),
(11, 'Monitor', 'HP Star', 'kain', 'kain-45', '24 in', 2, 'Buen estado', 4, 0),
(12, 'Mouse', 'HP', 'Start', 'HP-PAV', 'Doble scroll', 1, 'Buen estado', 2, 5),
(14, 'Monitor LCD', 'Samsung', 'Vipper 52', 'CFR-551120', '1200 gb', 1, 'OK', 2, 5),
(15, 'Verificador', 'HP', 'Vipper 52', 'CFR-551', '2 HD', 2, 'ok', 4, 5),
(16, 'Monitor', 'HP', 'Tiger200', 'TITAN-YYZ', '120 GB', 1, NULL, 1, 5),
(17, 'Verificador', 'Samsung', 'Vipper', 'YYZA1245', '2 HD', 1, NULL, 1, 5),
(18, 'Monitor LCD', 'LG', 'Vipper', 'YYZA1245', '2 HD', 1, 'vamos', 1, 5),
(19, 'CPU', 'Samsung', 'Vipper 52', 'CFR-551120', '120 GB', 1, 'En mantenimiento', 3, 2),
(20, 'Verificador', 'LG', 'Vipper', 'CFR-551120', '120 GB', 4, 'Yeah', 4, 5),
(21, 'Monitor LCD', 'HP', 'Vipper 52', 'YYZA1245', '2 HD', 1, 'ok', 1, 5),
(22, 'Mouse', 'Lenovo', 'AAA-4512', 'M15', 'Por definirse', 1, 'Mouse optico con scroll', 1, 5),
(24, 'LCD', 'LG', 'Vipper', 'YYZA1245', '6 ATAS', 1, 'ok', 2, 5),
(25, 'Teclado', 'LG', 'Vipper', 'YYZA1245', '2 HD', 1, 'ok', 1, 5),
(26, 'Pantalla', 'LG2', 'Tiger200', 'M15', '6 ATAS', 2, 'Inexorable', 4, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_x_area`
--
-- Creación: 04-07-2011 a las 18:05:38
--

DROP TABLE IF EXISTS `equipo_x_area`;
CREATE TABLE IF NOT EXISTS `equipo_x_area` (
  `idequipo_x_area` int(11) DEFAULT NULL,
  `Equipo_serie` int(11) NOT NULL,
  `Area_id_area` int(11) NOT NULL,
  PRIMARY KEY (`Equipo_serie`,`Area_id_area`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `equipo_x_area`
--

INSERT INTO `equipo_x_area` (`idequipo_x_area`, `Equipo_serie`, `Area_id_area`) VALUES
(1, 1, 2),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_x_status`
--
-- Creación: 01-08-2011 a las 17:58:00
--

DROP TABLE IF EXISTS `equipo_x_status`;
CREATE TABLE IF NOT EXISTS `equipo_x_status` (
  `id_status` int(11) NOT NULL,
  `serie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `equipo_x_status`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instalaciones`
--
-- Creación: 04-07-2011 a las 18:05:38
--

DROP TABLE IF EXISTS `instalaciones`;
CREATE TABLE IF NOT EXISTS `instalaciones` (
  `id_instalaciones` int(11) NOT NULL,
  `filial` varchar(8) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `ubicacion` varchar(90) DEFAULT NULL,
  `Plaza_id_plaza` int(11) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `id_personal` int(11) NOT NULL,
  `relacion` int(11) NOT NULL,
  PRIMARY KEY (`id_instalaciones`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `instalaciones`
--

INSERT INTO `instalaciones` (`id_instalaciones`, `filial`, `nombre`, `ubicacion`, `Plaza_id_plaza`, `tipo`, `id_personal`, `relacion`) VALUES
(1, 'MMTN', 'Torreon Nuevo', 'Av Torreon Nuevo No 251', 1, 'Sucursal', 3, 3),
(2, 'MMMA', 'Madero', 'Av Madero No 45', 1, 'Sucursal', 4, 3),
(3, '- -', 'Oficinas', 'Bucareli No 147', 1, 'Oficinas', 6, 3),
(4, '- -', 'Estacion de Trabajo de Sistemas', 'Bucareli No 147', 1, 'Oficinas', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--
-- Creación: 04-07-2011 a las 18:05:37
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE IF NOT EXISTS `personal` (
  `id_personal` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `contraseña` varchar(25) NOT NULL,
  `puesto` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_personal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `nombre`, `contraseña`, `puesto`) VALUES
(1, 'Jose de Jesus', 'chucho', 'Jefe de Computo'),
(2, 'Israel Fuentes', 'isra', 'Jefe de Computo'),
(3, 'Ramiro Cortes', '0', 'RF'),
(4, 'Margarita Jimenez', '0', 'RF'),
(5, 'Alfa Martinez', '0', 'ROC'),
(6, 'Roberto Juarez ', '0', 'Administracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_x_instalaciones`
--
-- Creación: 01-08-2011 a las 20:05:23
--

DROP TABLE IF EXISTS `personal_x_instalaciones`;
CREATE TABLE IF NOT EXISTS `personal_x_instalaciones` (
  `id_instalaciones` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `personal_x_instalaciones`
--

INSERT INTO `personal_x_instalaciones` (`id_instalaciones`, `id_personal`) VALUES
(1, 5),
(2, 4),
(3, 2),
(4, 2),
(4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plaza`
--
-- Creación: 04-07-2011 a las 18:05:37
--

DROP TABLE IF EXISTS `plaza`;
CREATE TABLE IF NOT EXISTS `plaza` (
  `id_plaza` int(11) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL,
  `Ubicacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_plaza`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `plaza`
--

INSERT INTO `plaza` (`id_plaza`, `Nombre`, `Ubicacion`) VALUES
(1, 'Morelia', 'Michoacan'),
(2, 'Leon', 'Guananjuato'),
(3, 'Ixtapa', 'Guerrero'),
(4, 'Puebla', 'Puebla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--
-- Creación: 01-08-2011 a las 17:52:22
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id_status` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `status`
--

INSERT INTO `status` (`id_status`, `nombre`) VALUES
(1, 'OK'),
(2, 'En espera'),
(3, 'Asignar a Sucursal'),
(4, 'Baja');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
