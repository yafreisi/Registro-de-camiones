-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2021 a las 02:27:18
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `camiones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camiones`
--

CREATE TABLE `camiones` (
  `id` int(11) NOT NULL,
  `marca` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `comentario` varchar(250) NOT NULL,
  `cantLavadora` int(11) NOT NULL,
  `valorCarga` int(11) NOT NULL,
  `PesoTi` varchar(250) NOT NULL,
  `placa` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `camiones`
--

INSERT INTO `camiones` (`id`, `marca`, `modelo`, `color`, `comentario`, `cantLavadora`, `valorCarga`, `PesoTi`, `placa`) VALUES
(11, 'honda', 'civic', 'negro', 'ssdfsdfdfs', 52, 22, '10300', 'L32344'),
(12, 'mercedes', 'actros', 'azul', 'que sea bien amplio', 3, 20000, '2000libra', 'l35897'),
(13, 'lop', 'libr', 'azul', 'que sea espacioso', 5, 700, '2000', 'l5252'),
(14, '', '', '', '', 0, 0, '', ''),
(15, '', '', '', '', 0, 0, '', ''),
(16, '', '', '', '', 0, 0, '', ''),
(17, '', '', '', '', 0, 0, '', ''),
(18, '', '', '', '', 0, 0, '', ''),
(19, '', '', '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `Descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `Descripcion`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lavador`
--

CREATE TABLE `lavador` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `marca` varchar(250) NOT NULL,
  `modelo` varchar(250) NOT NULL,
  `valor` int(11) NOT NULL,
  `pesoLB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lavador`
--

INSERT INTO `lavador` (`id`, `codigo`, `marca`, `modelo`, `valor`, `pesoLB`) VALUES
(0, 1520, 'universal', 'asdsd', 22, 42),
(0, 123, 'continental', 'actros', 5000, 500),
(0, 123, 'continental', 'actros', 5000, 500),
(0, 11, 'lupe', 'vente', 500, 200),
(0, 0, '', '', 0, 0),
(0, 0, '', '', 0, 0),
(0, 0, '', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `placa` varchar(250) NOT NULL,
  `codigoLavadora` varchar(250) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `pesoLB` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `placa`, `codigoLavadora`, `Cantidad`, `pesoLB`) VALUES
(1, '45345', '545', 45, 45),
(2, 'l5252', '11', 5, 500),
(3, 'L32344', '1520', 0, 0),
(4, '', '', 0, 0),
(5, 'L32344', '1520', 54, 10100),
(6, 'Placa Camion', 'Codigo Lavador', 0, 0),
(7, 'Placa Camion', 'Codigo Lavador', 0, 0),
(8, 'Placa Camion', 'Codigo Lavador', 0, 0),
(9, 'Placa Camion', 'Codigo Lavador', 10, 10100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `usuario` varchar(250) NOT NULL,
  `contra` varchar(250) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `contra`, `id_cargo`) VALUES
(1, 'Kevin', 'Kevin01', '12345', 1),
(2, 'josue', 'josue01', '1234', 2),
(3, 'yafreisi', 'yafre', '1234', 1),
(4, 'yafre', 'yafre', 'yafre', 1),
(5, 'yafreisi', 'yafre', 'yolainys', 1),
(6, 'pepito', 'pepi', '123456', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camiones`
--
ALTER TABLE `camiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camiones`
--
ALTER TABLE `camiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
