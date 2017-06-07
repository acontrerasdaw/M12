-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2017 at 07:02 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TBS`
--

-- --------------------------------------------------------

--
-- Table structure for table `Reservas`
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
-- Dumping data for table `Reservas`
--

INSERT INTO `Reservas` (`NumReserva`, `NomReserva`, `emailReserva`, `telefonoReserva`, `arteReserva`, `fechaHoraReserva`) VALUES
(1, 'Alejandro', 'jandroakagi@hotmail.com', 671404295, 'Judo', '2017/06/14 20:30'),
(3, 'Aonso', 'odakesama@hotmail.com', 666666666, 'Kick Boxing', '2017/06/08 09:30'),
(5, 'Cabrera', 'matacabras@hotmail.com', 654654654, 'Taekwondo', '2017/06/08 20:30'),
(6, 'Hola', 'test@test.com', 789456132, 'Judo', '2017/06/23 12:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Reservas`
--
ALTER TABLE `Reservas`
  ADD PRIMARY KEY (`NumReserva`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Reservas`
--
ALTER TABLE `Reservas`
  MODIFY `NumReserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
