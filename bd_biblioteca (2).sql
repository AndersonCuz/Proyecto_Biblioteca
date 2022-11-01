-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2022 a las 02:32:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `codigo_autor` int(11) NOT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `nacionalidad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`codigo_autor`, `apellido`, `nombre`, `nacionalidad`) VALUES
(1, 'de Cervantes', 'Miguel', 'España'),
(2, 'García', 'Gabriel', 'Colombia'),
(3, 'Poe', 'Edgar', 'Estados Unidos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `codigo_editorial` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`codigo_editorial`, `nombre`, `direccion`, `telefono`, `email`) VALUES
(1, 'santillana', '26av 2-20 zona 10', 24294300, 'servicioalclientegt@santillana.com'),
(2, 'piedra santa', '5ta calle7-55 zona 1', 22046600, 'info@piedrasanta.com'),
(3, 'susaeta', '12av 9-42 zona 1', 23894831, 'info@susaetaguatemala.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `codigo_estado` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`codigo_estado`, `nombre`) VALUES
(1, 'excelente'),
(2, 'regular'),
(3, 'malo'),
(4, 'deplorable');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `codigo_libro` int(11) NOT NULL,
  `codigo_autor` int(11) DEFAULT NULL,
  `codigo_editorial` int(11) DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `numero_paginas` int(11) DEFAULT NULL,
  `tamanio` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `codigo_estado` int(11) DEFAULT NULL,
  `edicion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`codigo_libro`, `codigo_autor`, `codigo_editorial`, `titulo`, `numero_paginas`, `tamanio`, `precio`, `codigo_estado`, `edicion`) VALUES
(1, 2, 3, 'La hojarasca', 462, 25, 30, 1, 'primera'),
(2, 3, 1, 'El gato negro', 224, 25, 30, 2, 'segunda'),
(3, 1, 2, 'Don Quijote de La Mancha', 462, 25, 30, 2, 'segunda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_prestamo` int(11) NOT NULL,
  `codigo_libro` int(11) DEFAULT NULL,
  `fecha_prestamo` date DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id_prestamo`, `codigo_libro`, `fecha_prestamo`, `fecha_devolucion`, `id_usuario`) VALUES
(1, 3, '2022-03-10', '2022-03-24', 2),
(2, 1, '2022-11-28', '2022-12-10', 3),
(3, 2, '2022-09-26', '2022-10-10', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_usuarios`
--

CREATE TABLE `tipos_usuarios` (
  `id_tipousuarios` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipos_usuarios`
--

INSERT INTO `tipos_usuarios` (`id_tipousuarios`, `nombre`, `descripcion`) VALUES
(1, 'Administrador', 'usuario admin'),
(2, 'Estudiante', 'usuario estudiante'),
(3, 'Empleado', 'usuario empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `id_tipousuarios` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `telefono`, `id_tipousuarios`) VALUES
(1, 'Alfonso', 25632012, 1),
(2, 'Alfredo', 59368417, 2),
(3, 'Hector', 45652135, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`codigo_autor`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`codigo_editorial`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`codigo_estado`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`codigo_libro`),
  ADD KEY `codigo_autor_fk1` (`codigo_autor`),
  ADD KEY `codigo_editorial_fk2` (`codigo_editorial`),
  ADD KEY `codigo_estado_fk3` (`codigo_estado`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `codigo_libro_fk1` (`codigo_libro`),
  ADD KEY `id_usuario_fk2` (`id_usuario`);

--
-- Indices de la tabla `tipos_usuarios`
--
ALTER TABLE `tipos_usuarios`
  ADD PRIMARY KEY (`id_tipousuarios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipousuarios_fk1` (`id_tipousuarios`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `codigo_autor_fk1` FOREIGN KEY (`codigo_autor`) REFERENCES `autores` (`codigo_autor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `codigo_editorial_fk2` FOREIGN KEY (`codigo_editorial`) REFERENCES `editoriales` (`codigo_editorial`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `codigo_estado_fk3` FOREIGN KEY (`codigo_estado`) REFERENCES `estados` (`codigo_estado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `codigo_libro_fk1` FOREIGN KEY (`codigo_libro`) REFERENCES `libros` (`codigo_libro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_usuario_fk2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `id_tipousuarios_fk1` FOREIGN KEY (`id_tipousuarios`) REFERENCES `tipos_usuarios` (`id_tipousuarios`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
