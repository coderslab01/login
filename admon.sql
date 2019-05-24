-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-05-2019 a las 03:43:27
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

DROP TABLE IF EXISTS `equipos`;
CREATE TABLE IF NOT EXISTS `equipos` (
  `id_equipos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8 NOT NULL,
  `horario` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_equipos`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id_equipos`, `nombre`, `horario`) VALUES
(19, 'real madrid', '12:20'),
(20, 'pumas', '8:00'),
(21, 'chivas', '14:00'),
(22, 'san juanicxo', '8:00'),
(23, 'America', '18:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas`
--

DROP TABLE IF EXISTS `estadisticas`;
CREATE TABLE IF NOT EXISTS `estadisticas` (
  `id_estadisticas` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipos` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `jornada` int(11) NOT NULL,
  `PJ` int(11) NOT NULL,
  `PG` int(11) NOT NULL,
  `PE` int(11) NOT NULL,
  `PP` int(11) NOT NULL,
  `GF` int(11) NOT NULL,
  `GC` int(11) NOT NULL,
  `PUNTOS` int(11) NOT NULL,
  PRIMARY KEY (`id_estadisticas`),
  KEY `id_equipos` (`id_equipos`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadisticas`
--

INSERT INTO `estadisticas` (`id_estadisticas`, `id_equipos`, `nombre`, `jornada`, `PJ`, `PG`, `PE`, `PP`, `GF`, `GC`, `PUNTOS`) VALUES
(1, 19, 'real madrid', 1, 1, 1, 0, 0, 3, 0, 3),
(2, 21, 'chivas', 1, 1, 0, 0, 1, 5, 10, 0),
(3, 22, 'san juanicxo', 1, 1, 1, 0, 0, 10, 5, 3),
(4, 23, 'America', 1, 1, 1, 0, 0, 5, 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hist_est`
--

DROP TABLE IF EXISTS `hist_est`;
CREATE TABLE IF NOT EXISTS `hist_est` (
  `id_hist_est` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipos` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `jornada` int(11) NOT NULL,
  `PJ` int(11) NOT NULL,
  `PG` int(11) NOT NULL,
  `PE` int(11) NOT NULL,
  `PP` int(11) NOT NULL,
  `GF` int(11) NOT NULL,
  `GC` int(11) NOT NULL,
  `PUNTOS` int(11) NOT NULL,
  PRIMARY KEY (`id_hist_est`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32;

--
-- Volcado de datos para la tabla `hist_est`
--

INSERT INTO `hist_est` (`id_hist_est`, `id_equipos`, `nombre`, `jornada`, `PJ`, `PG`, `PE`, `PP`, `GF`, `GC`, `PUNTOS`) VALUES
(1, 1, 'real madrid', 1, 1, 1, 0, 0, 3, 0, 3),
(2, 23, 'America', 1, 1, 1, 0, 0, 5, 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

DROP TABLE IF EXISTS `pagos`;
CREATE TABLE IF NOT EXISTS `pagos` (
  `id_pagos` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id_pagos`),
  KEY `id_equipo` (`id_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(10) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `usuario`, `clave`) VALUES
(1, 'Humberto', 'admon', 'admon'),
(2, 'David', 'descobar', 'admon');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD CONSTRAINT `estadisticas_ibfk_1` FOREIGN KEY (`id_equipos`) REFERENCES `equipos` (`id_equipos`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`id_equipo`) REFERENCES `equipos` (`id_equipos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
