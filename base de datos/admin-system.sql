-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2022 a las 04:00:37
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admin-system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `tema` text NOT NULL,
  `fecha` date NOT NULL,
  `evidencia` text NOT NULL,
  `sesion` int(11) NOT NULL,
  `programa` int(11) NOT NULL,
  `modalidad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `codigo`, `tema`, `fecha`, `evidencia`, `sesion`, `programa`, `modalidad`) VALUES
(3, 'f321f', 'actividad', '2022-09-03', '2', 1, 3, 'Virtual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_participante`
--

CREATE TABLE `estado_participante` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `village` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad`
--

CREATE TABLE `modalidad` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais_patrocinador`
--

CREATE TABLE `pais_patrocinador` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `genero` text NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `village` int(11) NOT NULL,
  `localidad` int(11) NOT NULL,
  `pais` text NOT NULL,
  `programa` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id`, `nombre`, `genero`, `fechaNacimiento`, `edad`, `village`, `localidad`, `pais`, `programa`, `estado`, `fecha`) VALUES
(26, 'Julia ', 'F', '2022-09-02', 3, 1, 2, 'Ecuador', 1, 2, '2022-09-03 01:59:13'),
(28, 'María', 'M', '2011-01-07', 3, 2, 2, 'Estados Unidos', 3, 3, '2022-09-03 02:01:23'),
(29, 'Naire', 'M', '2011-06-02', 12, 2, 2, 'España', 2, 3, '2022-09-03 02:11:36'),
(30, 'José m', 'M', '2011-07-03', 10, 2, 0, 'Ecuador', 2, 0, '2022-09-04 06:52:36'),
(31, 'Mauricio', 'M', '2022-09-03', 7, 1, 2, 'Estados Unidos', 1, 1, '2022-09-04 06:53:13'),
(32, 'María jose', 'M', '0000-00-00', 7, 1, 2, 'Estados Unidos', 1, 1, '2022-09-04 06:53:36'),
(33, 'María jose', 'F', '0000-00-00', 7, 2, 2, 'España', 2, 1, '2022-09-04 06:54:00'),
(34, 'Pablo Ortiz', 'M', '2010-03-03', 7, 2, 2, 'Mexico', 2, 1, '2022-09-04 06:54:31'),
(35, 'José Mayque', 'M', '2007-06-03', 7, 1, 2, 'Estados Unidos', 2, 0, '2022-09-04 06:55:16'),
(36, 'Pedro Alvarez', 'M', '2008-02-03', 7, 1, 2, 'Estados Unidos', 2, 1, '2022-09-04 06:55:59'),
(37, 'Marta Vaia', 'M', '2006-02-03', 7, 2, 2, 'Estados Unidos', 3, 1, '2022-09-04 06:56:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `edadMinima` int(11) NOT NULL,
  `edadLimite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `village`
--

CREATE TABLE `village` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_participante`
--
ALTER TABLE `estado_participante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pais_patrocinador`
--
ALTER TABLE `pais_patrocinador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `village`
--
ALTER TABLE `village`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estado_participante`
--
ALTER TABLE `estado_participante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modalidad`
--
ALTER TABLE `modalidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pais_patrocinador`
--
ALTER TABLE `pais_patrocinador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `village`
--
ALTER TABLE `village`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
