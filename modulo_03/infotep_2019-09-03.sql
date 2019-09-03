-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2019 a las 18:14:16
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infotep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decimales`
--

CREATE TABLE `decimales` (
  `_float` float DEFAULT NULL,
  `_double` float DEFAULT NULL,
  `_decimal` decimal(6,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decimales_2`
--

CREATE TABLE `decimales_2` (
  `_float` float DEFAULT NULL,
  `_double` double(6,3) DEFAULT NULL,
  `_decimal` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) DEFAULT NULL,
  `nombre` text,
  `pais` text,
  `fecha_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `nombre`, `pais`, `fecha_nacimiento`) VALUES
(NULL, 'Christian nunez', 'DR', NULL),
(NULL, 'Went Antoine', 'HT', NULL),
(NULL, 'Chris Nunez', 'jp', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numericos_enteros`
--

CREATE TABLE `numericos_enteros` (
  `_tinyint` tinyint(4) DEFAULT NULL,
  `_smallint` smallint(6) DEFAULT NULL,
  `_mediumint` mediumint(9) DEFAULT NULL,
  `_int` int(11) DEFAULT NULL,
  `_bigint` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `numericos_enteros`
--

INSERT INTO `numericos_enteros` (`_tinyint`, `_smallint`, `_mediumint`, `_int`, `_bigint`) VALUES
(127, 32767, 8388607, 2147483647, 9223372036854775807),
(127, 32767, 8388607, 2147483647, 9223372036854775807);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numericos_enteros_sin_signos`
--

CREATE TABLE `numericos_enteros_sin_signos` (
  `_tinyint` int(10) UNSIGNED DEFAULT NULL,
  `_smallint` smallint(5) UNSIGNED DEFAULT NULL,
  `_int` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texto`
--

CREATE TABLE `texto` (
  `_char` char(12) DEFAULT NULL,
  `_varchar` varchar(12) DEFAULT NULL,
  `_text` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `texto`
--

INSERT INTO `texto` (`_char`, `_varchar`, `_text`) VALUES
('Went', 'Went', 'Went'),
('Wentchelle A', 'Wentchelle A', 'Wentchelle Antoine');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
