-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2024 a las 11:25:13
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
-- Base de datos: `proyectofinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `idAdmin` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `ApellidoPaterno` varchar(100) DEFAULT NULL,
  `ApellidoMaterno` varchar(100) DEFAULT NULL,
  `FechadeNacimiento` date DEFAULT NULL,
  `Domicilio` varchar(80) DEFAULT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `NombreUsuario` varchar(50) DEFAULT NULL,
  `Contraseña` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campistas`
--

CREATE TABLE `campistas` (
  `idinscripcion` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Sexo` varchar(50) DEFAULT NULL,
  `Ciudad` varchar(50) DEFAULT NULL,
  `Otro1` varchar(50) DEFAULT NULL,
  `Otro2` varchar(50) DEFAULT NULL,
  `Celular` varchar(50) DEFAULT NULL,
  `Transporte` varchar(50) DEFAULT NULL,
  `Comentarios` varchar(1000) DEFAULT NULL,
  `Camisa` varchar(50) DEFAULT NULL,
  `Talla` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `campistas`
--

INSERT INTO `campistas` (`idinscripcion`, `Nombre`, `Apellidos`, `Edad`, `Sexo`, `Ciudad`, `Otro1`, `Otro2`, `Celular`, `Transporte`, `Comentarios`, `Camisa`, `Talla`) VALUES
(3, 'JOSEPH', 'DEL TORO CRUZ', 21, 'MASCULINO', 'TIJUANA', 'HOLA', 'SI', '6641234567', 'SI', 'HOLA', 'SI', 'L'),
(4, 'JOSELYN', 'GARCIA MARQUEZ', 22, 'FEMENINO', 'ROSARITO', 'HOLA', 'SI', '6641234567', '', 'HOLA', 'NO', 'S');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `Nombres` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `NombreUsuario` varchar(50) DEFAULT NULL,
  `Contraseña` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Nombres`, `Apellidos`, `Telefono`, `Correo`, `NombreUsuario`, `Contraseña`) VALUES
(3, 'Joseph', 'Del Toro Cruz', '6643171862', 'joseph@gmail.com', 'joseph', '123'),
(5, 'Juan Emanuel', 'Jimenez Garcia', '6641234567', 'juan@gmail.com', 'juanEma', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `campistas`
--
ALTER TABLE `campistas`
  ADD PRIMARY KEY (`idinscripcion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `campistas`
--
ALTER TABLE `campistas`
  MODIFY `idinscripcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
