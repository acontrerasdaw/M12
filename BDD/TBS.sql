-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-06-2017 a las 16:01:17
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
(1, 'Alejandro', 'jandroakagi@hotmail.com', 671404295, 'Judo', '2017/06/14 20:30'),
(3, 'Aonso', 'odakesama@hotmail.com', 666666666, 'Kick Boxing', '2017/06/08 09:30'),
(5, 'Cabrera', 'matacabras@hotmail.com', 654654654, 'Taekwondo', '2017/06/08 20:30'),
(6, 'Hola', 'test@test.com', 789456132, 'Judo', '2017/06/23 12:30'),
(7, 'LA COKIS ES UNA PLASTA', 'cookies@xavi.baz', 789746123, 'Kick Boxing', '2017/06/09 20:30'),
(8, 'Hola', 'hola@hola.com', 0, 'Taekwondo', '2017/06/09 20:30');

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
  MODIFY `NumReserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
