-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2019 a las 08:04:33
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `basquetbolistas`
--

CREATE TABLE `basquetbolistas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `posicion` varchar(30) NOT NULL,
  `carrera` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `basquetbolistas`
--

INSERT INTO `basquetbolistas` (`id`, `nombre`, `posicion`, `carrera`, `email`) VALUES
(1, 'Prueba 1', 'Posicion 1', 'Iti', 'Prueba1@correo.com'),
(2, 'Prueba 2', 'Posicion 2', 'Iti', 'Prueba2@correo.com'),
(3, 'Prueba 3', 'Posicion 3', 'Iti', 'Prueba3@correo.com'),
(4, 'Prueba 4', 'Posicion 4', 'Iti', 'Prueba4@correo.com'),
(5, 'Prueba 5', 'Posicion 5', 'Iti', 'Prueba5@correo.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `futbolistas`
--

CREATE TABLE `futbolistas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `posicion` varchar(30) NOT NULL,
  `carrera` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `futbolistas`
--

INSERT INTO `futbolistas` (`id`, `nombre`, `posicion`, `carrera`, `email`) VALUES
(3, 'Prueba 3', 'Medio', 'ITI', 'prueba3@prueba.com'),
(4, 'Prueba 4', 'Medio', 'ITI', 'prueba4@prueba.com'),
(5, 'Prueba 5', 'Banda Izq', 'ITI', 'prueba5@prueba.com'),
(6, 'Prueba 6', 'Banda Izq', 'ITI', 'prueb6@prueba.com'),
(7, 'Prueba 7', 'Banda Der', 'ITI', 'prueba7@prueba.com'),
(8, 'Prueba 8', 'Banda Der', 'ITI', 'prueba8@prueba.com'),
(9, 'Prueba 9', 'Delantero', 'ITI', 'prueba9@prueba.com'),
(10, 'Prueba 10', 'Delantero', 'ITI', 'prueba10@prueba.com'),
(15, 'Prueba 1', 'Portero', 'ITI', 'prueba1@prueba.com'),
(16, 'Prueba 16', 'Imaginaria', 'Iti', 'Prueba16@correo.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'conectado'),
(2, 'conectado'),
(3, 'conectado'),
(4, 'conectado'),
(5, 'conectado'),
(6, 'conectado'),
(7, 'conectado'),
(8, 'conectado'),
(9, 'conectado'),
(10, 'conectado'),
(11, 'desconectado'),
(12, 'desconectado'),
(13, 'desconectado'),
(14, 'desconectado'),
(15, 'desconectado'),
(16, 'desconectado'),
(17, 'desconectado'),
(18, 'desconectado'),
(19, 'desconectado'),
(20, 'desconectado'),
(21, 'desconectado'),
(22, 'desconectado'),
(23, 'desconectado'),
(24, 'desconectado'),
(25, 'desconectado'),
(26, 'desconectado'),
(27, 'desconectado'),
(28, 'desconectado'),
(29, 'desconectado'),
(30, 'desconectado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pssw` varchar(30) NOT NULL,
  `status_id` varchar(30) NOT NULL,
  `user_type_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `pssw`, `status_id`, `user_type_id`) VALUES
(1, 'Prueba@prueba.com', 'prueba', '1', 'tprueba'),
(2, 'Prueba@prueba.com', 'prueba', '1', 'tprueba'),
(3, 'Prueba@prueba.com', 'prueba', '1', 'tprueba'),
(4, 'Prueba@prueba.com', 'prueba', '1', 'tprueba'),
(5, 'Prueba@prueba.com', 'prueba', '1', 'tprueba'),
(6, 'Prueba@prueba.com', 'prueba', '1', 'tprueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_log`
--

CREATE TABLE `user_log` (
  `id` int(11) NOT NULL,
  `date_logged` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_log`
--

INSERT INTO `user_log` (`id`, `date_logged`, `user_id`) VALUES
(1, 'prueba', 'id'),
(2, 'prueba', 'id'),
(3, 'prueba', 'id');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_type`
--

INSERT INTO `user_type` (`id`, `name`) VALUES
(1, 'prueba'),
(1, 'prueba'),
(1, 'prueba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `basquetbolistas`
--
ALTER TABLE `basquetbolistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `futbolistas`
--
ALTER TABLE `futbolistas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `basquetbolistas`
--
ALTER TABLE `basquetbolistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `futbolistas`
--
ALTER TABLE `futbolistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
