-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-12-2017 a las 18:01:12
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `llibreria`
--

CREATE DATABASE llibreria;
USE llibreria;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `id` int(11) NOT NULL,
  `nom` text COLLATE utf8_spanish2_ci NOT NULL,
  `cognom` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id`, `nom`, `cognom`) VALUES
(77, 'Henry', 'Miller'),
(99, 'Henry', 'Roth'),
(110, 'Miguel', 'Delibes'),
(131, 'Equip 2DAW', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

CREATE TABLE `editorial` (
  `id` int(11) NOT NULL,
  `nom` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`id`, `nom`) VALUES
(1, 'Anagrama'),
(2, 'Circulo de lectores'),
(3, 'Vallbona'),
(4, 'Alfaguara');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llibres`
--

CREATE TABLE `llibres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titol` char(50) COLLATE latin1_spanish_ci NOT NULL,
  `autor` int(11) NOT NULL,
  `editorial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `llibres`
--

INSERT INTO `llibres` (`id`, `titol`, `autor`, `editorial`) VALUES
(10, 'Plexus', 77, 1),
(11, 'Nexus', 77, 1),
(13, 'Llámalo sueño', 99, 2),
(14, 'El príncipe destronado', 110, 4),
(80, 'la biblia del php', 131, 3),
(81, 'AJAX, todo lo que hay que saber', 131, 2),
(82, 'Cartes a Anaïs', 77, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `editorial`
--
ALTER TABLE `editorial`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `llibres`
--
ALTER TABLE `llibres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `llibres`
--
ALTER TABLE `llibres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
