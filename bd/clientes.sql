-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2021 a las 22:30:58
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `celular` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `correo`, `celular`) VALUES
(680, 'Alex puti', 'alexsarriahenao.2307@gmail.com', '3112781478'),
(682, 'Adriana', 'amilenita64@hotmail.com', '3176802693'),
(684, 'DAMARIS', 'damaris-rincon@hotmail.com', '3115050103'),
(685, 'Magaly', 'magaly_vega87@yahoo.com', '3014378134'),
(686, 'Oscar', 'oscarbogota79@gmail.com', '3162655524'),
(687, 'Francy', 'francymesa@gmail.com', '3212060512'),
(688, 'ADRIANA MERCEDES', 'adrimher_99@hotmail.com', '3108039620'),
(690, 'Fredy', 'fbejarano1982@yahoo.es', '3142159522'),
(692, 'JAVIER ', 'javierdario.0870@gmail.com', '3124861910'),
(693, 'JAIRO NEL ', 'jaironel2007@gmail.com', '3209642982'),
(695, 'Marcos', 'aldanilly@yahoo.com.co', '3102418894'),
(2727, 'Urian Viera', 'u@gmail.com', '4562');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2728;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
