-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2025 a las 04:43:09
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estimacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `muestras`
--

CREATE TABLE `muestras` (
  `ID` int(11) NOT NULL,
  `MUESTRA` float(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `muestras`
--

INSERT INTO `muestras` (`ID`, `MUESTRA`) VALUES
(206, 49.74),
(207, 48.98),
(208, 49.41),
(209, 49.32),
(210, 48.11),
(211, 49.40),
(212, 49.96),
(213, 46.24),
(215, 48.63),
(216, 50.64),
(217, 50.06),
(218, 49.12),
(219, 49.84),
(220, 48.94),
(221, 48.59),
(222, 49.54),
(223, 49.21),
(224, 49.42),
(225, 49.20),
(226, 48.80),
(228, 48.69),
(229, 49.30),
(230, 48.81),
(231, 49.73),
(232, 48.67),
(233, 49.10),
(234, 49.37),
(235, 48.22),
(236, 48.47),
(237, 49.29),
(238, 49.11),
(239, 49.72),
(240, 49.57),
(241, 49.82),
(242, 49.82),
(243, 48.84),
(244, 48.84),
(245, 48.82),
(246, 48.94),
(247, 49.05),
(248, 49.26),
(249, 48.84),
(250, 48.23),
(251, 49.15),
(252, 48.55),
(253, 49.61),
(254, 48.35),
(255, 48.48),
(256, 48.70),
(257, 48.63);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `muestras`
--
ALTER TABLE `muestras`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `muestras`
--
ALTER TABLE `muestras`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
