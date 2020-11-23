-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2020 a las 14:38:53
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresousuarios`
--

CREATE TABLE `ingresousuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `documento` varchar(11) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `servicio_ubicacion` varchar(200) NOT NULL,
  `nombrefamiliar` varchar(200) NOT NULL,
  `documentofamiliar` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ingresousuarios`
--

INSERT INTO `ingresousuarios` (`id`, `nombres`, `documento`, `telefono`, `direccion`, `servicio_ubicacion`, `nombrefamiliar`, `documentofamiliar`) VALUES
(1, 'MIGUEL DAVID PERPIÑAN', '1065614353', '3002100838', 'calle 6d # 19b - 50', 'PEDIATRIA', 'LOIDA AMAYA', '10656143568'),
(2, 'LUIS NIEVES', '48956321', '3002156489', 'LA CASA EN EL AIRE', 'UCI', '652265556', '1065984756');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `contraseña` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`) VALUES
(1, 'miguel', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ingresousuarios`
--
ALTER TABLE `ingresousuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ingresousuarios`
--
ALTER TABLE `ingresousuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
