-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2021 a las 15:47:56
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `royal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `genero` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `celular` varchar(200) NOT NULL,
  `cedula` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `asignatura` varchar(200) NOT NULL,
  `estudiante` varchar(255) NOT NULL,
  `calificacion` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id`, `nombre`, `apellido`, `genero`, `usuario`, `email`, `telefono`, `celular`, `cedula`, `direccion`, `asignatura`, `estudiante`, `calificacion`, `foto`, `password`, `token`) VALUES
(1, 'Iriangy', 'Sanchez', 'Femenino', 'Irian_Sanchez', 'angyfeliz86@gmail.com', '', '', '', '', '', '', '', 'Contabilidad.png', 'angy030506', ''),
(26, '', '', '', 'AnaContreras', 'analucia.cq1925@gmail.com', '', '', '', '', '', '', '', '', '$2y$10$sIqZSm8NqsndkoUoVfBMO.MLozt.jy6CeZSp7rxr2PNk7zwX7RDpu', ''),
(28, 'Iriangy', 'Feliz', 'Femenino', 'Iriangy06', 'iriangy06@gmail.com', '', '', '', '', '', '', '', '800px-Wall_cloud_with_lightning_-_NOAA.jpg', '$2y$10$pp9uMVyl9i14UJoek9JBoOQy91Jp7VSrqH2VwoZUjRvVoH5ghXpHC', ''),
(32, '', '', '', 'Victor', 'VictorB@gmail.com', '', '', '', '', '', '', '', '', '$2y$10$pcSccRxEWbQGSwAgx.gP8ON3kbz6iBq7qM1EUZDHPxDHQQD9HeWNS', ''),
(33, '', '', '', 'Esmeralda', 'esmeralda@gmail.com', '', '', '', '', '', '', '', '', '$2y$10$KTpJzfjOMpHJabx4kGYYJu2CrUhqw9TUYaarhjGTGTtbgWcuAO/WW', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `genero` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `1ra_asignatura` varchar(200) NOT NULL,
  `2da_asignatura` varchar(200) NOT NULL,
  `calificacion_1ra_asignatura` varchar(200) NOT NULL,
  `calificacion_2da_asignatura` varchar(200) NOT NULL,
  `carrera` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `celular` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `matricula` varchar(200) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `password_estudiante` varchar(200) NOT NULL,
  `token` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `estado`, `nombre`, `apellido`, `genero`, `email`, `1ra_asignatura`, `2da_asignatura`, `calificacion_1ra_asignatura`, `calificacion_2da_asignatura`, `carrera`, `telefono`, `celular`, `direccion`, `matricula`, `foto`, `password_estudiante`, `token`) VALUES
(7, 'Activo', 'Ana Lucia', 'Contreras Quezada', 'Femenino', 'analucia.cq1925@gmail.com', 'Matemáticas', 'Español', '100', '90', 'Seguridad en Redes', '8294361925', '8093881475', 'Respaldo ÑC #21 Barrio Puerto Rico, Santo Domingo ', '60be06786675a', 'Me.jpg', '$2y$10$3yDlmi8TYzxioM3c4ebl3.0nL0uDlYoRt8n3xca5oq97/dI4CQb8a', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
