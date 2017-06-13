-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-06-2017 a las 15:37:51
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `TBS`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `password`) VALUES
('admin', 'beaker');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Reservas`
--

CREATE TABLE `Reservas` (
  `NumReserva` int(11) NOT NULL,
  `NomReserva` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `emailReserva` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefonoReserva` int(9) DEFAULT NULL,
  `arteReserva` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fechaHoraReserva` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `Reservas`
--

INSERT INTO `Reservas` (`NumReserva`, `NomReserva`, `emailReserva`, `telefonoReserva`, `arteReserva`, `fechaHoraReserva`) VALUES
(3, 'Aonso', 'odakesama@hotmail.com', 666666666, 'Kick Boxing', '2017/06/08 09:30'),
(5, 'Alejandro Contreras', 'jandroakagi@gmail.com', 0, 'Taekwondo', '2017/06/19 15:30'),
(6, 'Adrian Cabrera', 'matacabrasS@gmail.com', 666555999, 'Kendo', '2017/06/27 12:30'),
(7, 'Jaume Aonso', 'odakesama@gmail.com', 0, 'Judo', '2017/06/30 15:30'),
(8, 'Juan', 'juan@gmail.com', 123456789, 'Taekwondo', '2017/08/17 09:30'),
(9, 'Alex', 'jandroakagi@hotmail.com', 987654312, 'Judo', '2017/06/19 16:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `Reservas`
--
ALTER TABLE `Reservas`
  ADD PRIMARY KEY (`NumReserva`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Reservas`
--
ALTER TABLE `Reservas`
  MODIFY `NumReserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
