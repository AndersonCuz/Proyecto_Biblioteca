-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2022 a las 02:31:17
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
(3, 'Poe', 'Edgar', 'Estados Unidos'),
(4, 'BAEZ TEJADO', 'JOAN', 'MEXICANA'),
(5, 'PASCUAL ALOY', 'ESTHER', 'GUATEMALTECA');

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
(3, 'susaeta', '12av 9-42 zona 1', 23894831, 'info@susaetaguatemala.com'),
(4, 'Editorial 300', '1ra. Calle 25-19 Zona 7', 936545115, 'Editorial300@correo.com'),
(5, 'Editorial 500', '2da. Calle 23-20 Zona 8\r\n\r\n', 938350521, 'Editorial500@correo.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `codigo_empleado` int(4) NOT NULL,
  `nombre` varchar(16) DEFAULT NULL,
  `apellido` varchar(17) DEFAULT NULL,
  `direccion` varchar(26) DEFAULT NULL,
  `email` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`codigo_empleado`, `nombre`, `apellido`, `direccion`, `email`) VALUES
(1001, 'Andrea Esperanza', 'Avila Mendoza', '3ra. Calle 25-21 Zona 10', 'andavi@correo.com'),
(1002, 'Ana Maribel', 'Bacajol', '3ra. Calle 25-01 Zona 13', 'anabac@correo.com'),
(1003, 'Katerin Johana', 'Barahona Aguilar', '6ta. Calle 25-16 Zona 13', 'katbar@correo.com'),
(1004, 'Josúe David', 'Barillas Quiñonez', '8va. Avenida 25-21 Zona 14', 'josbar@correo.com'),
(1005, 'Paulo André', 'Barrera Cardona', '2da. Calle 24-23 Zona 19', 'paubar@correo.com');

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
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `carne_alumno` int(7) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido` varchar(17) DEFAULT NULL,
  `direccion` varchar(26) DEFAULT NULL,
  `telefono` int(8) DEFAULT NULL,
  `email` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`carne_alumno`, `nombre`, `apellido`, `direccion`, `telefono`, `email`) VALUES
(2013001, 'Ana Maribel', 'Ajcabul', '1ra. Calle 25-18 Zona 15', 22452154, 'anaajc@correo.com'),
(2013002, 'Katerin Johana', 'Albizures Keller', '2da. Calle 23-20 Zona 8', 22451323, 'katalb@correo.com'),
(2013003, 'Josúe David', 'Alva De Leon', '3ra. Calle 24-21 Zona 9', 22451326, 'josalv@correo.com'),
(2013004, 'Paulo André', 'Alvarado López', '3ra. Calle 24-23 Zona 10', 22451962, 'paualv@correo.com'),
(2013005, 'Edgar Josue', 'Alvarado Recinos', '3ra. Calle 25-22 Zona 21', 22451953, 'edgalv@correo.com');

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
  `tamanio` varchar(20) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `codigo_estado` int(11) DEFAULT NULL,
  `edicion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`codigo_libro`, `codigo_autor`, `codigo_editorial`, `titulo`, `numero_paginas`, `tamanio`, `precio`, `codigo_estado`, `edicion`) VALUES
(1, 2, 3, 'La hojarasca', 462, 'Oficio', 150, 1, 'primera'),
(2, 3, 1, 'El gato negro', 224, 'Carta', 100, 2, 'segunda'),
(3, 1, 2, 'Don Quijote de La Mancha', 462, 'Oficio', 30, 2, 'segunda'),
(4, 4, 4, 'Libro 4', 50, 'Standar', 1175, 2, 'Primera'),
(5, 5, 5, 'Libro 5', 150, 'Carta', 125, 1, 'Primera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `id_prestamo` int(11) NOT NULL,
  `codigo_libro` int(11) DEFAULT NULL,
  `carne_alumno` int(7) DEFAULT NULL,
  `fecha_prestamo` date DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `codigo_empleado` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `prestamos`
--

INSERT INTO `prestamos` (`id_prestamo`, `codigo_libro`, `carne_alumno`, `fecha_prestamo`, `fecha_devolucion`, `id_usuario`, `codigo_empleado`) VALUES
(1, 3, 2013001, '2022-03-10', '2022-03-24', 2, 1001),
(2, 1, 2013002, '2022-11-28', '2022-12-10', 3, 1004),
(3, 2, 2013003, '2022-09-26', '2022-10-10', 3, 1005);

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
  `contra` int(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `id_tipousuarios` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `contra`, `telefono`, `id_tipousuarios`) VALUES
(1, 'Alfonso', 123456, 25632012, 1),
(2, 'Alfredo', 123456, 59368417, 2),
(3, 'Hector', 123456, 45652135, 3);

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
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`codigo_empleado`),
  ADD KEY `codigo_empleado` (`codigo_empleado`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`codigo_estado`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`carne_alumno`);

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
  ADD KEY `id_usuario_fk2` (`id_usuario`),
  ADD KEY `carne_alumno` (`carne_alumno`),
  ADD KEY `codigo_empleado` (`codigo_empleado`);

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
  ADD CONSTRAINT `id_usuario_fk2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`carne_alumno`) REFERENCES `estudiantes` (`carne_alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`codigo_empleado`) REFERENCES `empleados` (`codigo_empleado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `id_tipousuarios_fk1` FOREIGN KEY (`id_tipousuarios`) REFERENCES `tipos_usuarios` (`id_tipousuarios`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
