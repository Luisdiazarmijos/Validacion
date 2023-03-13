-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2023 a las 15:55:17
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examenweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `costousuario`
--

CREATE TABLE `costousuario` (
  `IdCosto` int(11) NOT NULL,
  `Costo` double NOT NULL,
  `IdUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `IdTipo` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`IdTipo`, `Nombre`) VALUES
(1, 'Profesional'),
(2, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Nombres` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Apellidos` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Identificacion` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Correo` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Direccion` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Telefono` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Pais` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Ciudad` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Institucion` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `IdTipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `costousuario`
--
ALTER TABLE `costousuario`
  ADD PRIMARY KEY (`IdCosto`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`IdTipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `costousuario`
--
ALTER TABLE `costousuario`
  MODIFY `IdCosto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `IdTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
