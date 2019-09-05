-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2019 a las 18:24:07
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
-- Base de datos: `fn1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `APPELLIDO` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombre`, `APPELLIDO`) VALUES
(1, 'Antoine', 'wentchelle'),
(2, 'Frias', 'Ronny'),
(3, 'Ford', 'kervens'),
(4, 'Chris', 'Nunez'),
(5, 'Norbin', 'Lele');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_correos`
--

CREATE TABLE `estudiantes_correos` (
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes_correos`
--

INSERT INTO `estudiantes_correos` (`id`, `correo`) VALUES
(1, 'a.wentchelle94@gmail.com'),
(2, 'reyesronny42@gmail.com'),
(3, 'kervensford45@gmail.com'),
(4, 'christopher21@gmail.com'),
(5, 'norbinlele@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_telefonos`
--

CREATE TABLE `estudiantes_telefonos` (
  `id` int(11) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes_telefonos`
--

INSERT INTO `estudiantes_telefonos` (`id`, `telefono`) VALUES
(1, '-7504'),
(2, '-809'),
(3, '437');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
