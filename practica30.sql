-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2024 a las 09:46:56
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica30`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacacionistas`
--

CREATE TABLE `vacacionistas` (
  `Nombre` varchar(45) NOT NULL,
  `Apellidos` varchar(45) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Sexo` varchar(45) NOT NULL,
  `Ciudad` varchar(45) NOT NULL,
  `Celular` varchar(45) NOT NULL,
  `Transporte` varchar(45) NOT NULL,
  `Comentarios` varchar(45) NOT NULL,
  `Camisa` varchar(45) NOT NULL,
  `Talla` varchar(45) NOT NULL,
  `Id_Vacacionista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vacacionistas`
--

INSERT INTO `vacacionistas` (`Nombre`, `Apellidos`, `Edad`, `Sexo`, `Ciudad`, `Celular`, `Transporte`, `Comentarios`, `Camisa`, `Talla`, `Id_Vacacionista`) VALUES
('JOSEPH', 'DEL TORO CRUZ', 22, 'MASCULINO', 'TIJUANA', '6641234567', 'SI', 'HOLA', 'NO', 'NINGUNA', 3),
('STEPHANIE', 'ARELLANO TORRES', 22, 'FEMENINO', 'TIJUANA', '6641234567', 'SI', 'HOLA', 'SI', 'MEDIANA', 4),
('VLADIMIR', 'CRUZ', 30, 'MASCULINO', 'TIJUANA', '6641234567', 'SI', 'HOLA', 'SI', 'CHICA', 6),
('JUAN', 'JIMENEZ GARCIA', 24, 'MASCULINO', 'TIJUANA', '6641234567', 'SI', 'HOLA', 'NO', 'CHICA', 8),
('JUAN', 'JIMENEZ GARCIA', 24, 'MASCULINO', 'TIJUANA', '6641234567', 'SI', 'HOLA', 'NO', 'CHICA', 9),
('JUAN', 'JIMENEZ GARCIA', 24, 'MASCULINO', 'TIJUANA', '6641234567', 'SI', 'HOLA', 'NO', 'NINGUNA', 13),
('MELLY', 'GALLEGOS ROJAS', 21, 'FEMENINO', 'ROSARITO', '6641234567', 'SI', 'HOLA', 'NO', 'NINGUNA', 14),
('MELLY', 'GALLEGOS ROJAS', 21, 'FEMENINO', 'ROSARITO', '6641234567', 'SI', 'HOLA', 'NO', 'NINGUNA', 15),
('JOSELYN', 'GARCIA MARQUEZ', 22, 'FEMENINO', 'MEXICALI', '6641234567', 'SI', 'HOLA', 'SI', 'CHICA', 16);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vacacionistas`
--
ALTER TABLE `vacacionistas`
  ADD PRIMARY KEY (`Id_Vacacionista`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vacacionistas`
--
ALTER TABLE `vacacionistas`
  MODIFY `Id_Vacacionista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
