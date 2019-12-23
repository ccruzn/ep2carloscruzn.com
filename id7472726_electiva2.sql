-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-07-2019 a las 22:51:06
-- Versión del servidor: 10.3.14-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id7472726_electiva2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brionesbasurto`
--

CREATE TABLE `brionesbasurto` (
  `id` int(11) NOT NULL,
  `cedula` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `brionesbasurto`
--

INSERT INTO `brionesbasurto` (`id`, `cedula`, `nombre`, `apellido`, `direccion`, `telefono`, `email`) VALUES
(1, '0983838338', 'bla bla bla', 'la la la la la', 'Bastion', 123123125, 'blabla@blabla.com'),
(4, '0951941947', 'Christian', 'Briones', 'Bastion', 939687794, 'criss.b.b@hotmail.es'),
(5, 'ff', 'ff', 'ff', 'ff', 0, 'ff@hotmail.com'),
(6, '244', 'hyghg', 'ggg', 'gg', 1441, 'retetwet@jjjjj'),
(7, '7777777777', 'sINCH7', 'gUXM7', 'nORTE', 888098, 'BKVB@GMAIL.COM'),
(8, '', '', '', '', 0, ''),
(9, '0951941947', 'Christian', 'Briones', 'Bastion', 93968779, 'karlos.b.b1992@gmail.com'),
(10, '0951941947', 'cridss', 'briones', 'bbbbbb', 415454545, 'gughghjg@hotmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brionesbasurto`
--
ALTER TABLE `brionesbasurto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brionesbasurto`
--
ALTER TABLE `brionesbasurto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
