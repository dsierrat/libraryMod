-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2017 a las 06:39:24
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `librarymod`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `efectivo`
--

CREATE TABLE `efectivo` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `efectivo`
--

INSERT INTO `efectivo` (`ID`, `nombre`, `direccion`, `telefono`) VALUES
(1, 'Ana', 'reefrref', 3434345),
(2, 'vdff', 'eefge', 1243434),
(3, 'vdff', 'eefge', 1243434);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `isbn` varchar(17) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `editorial` varchar(20) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `esBachillerato` tinyint(1) NOT NULL,
  `clasificacion_fk` varchar(20) NOT NULL,
  `foto` varchar(35) NOT NULL,
  `es_digital` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`isbn`, `nombre`, `autor`, `editorial`, `estado`, `descripcion`, `cantidad`, `precio`, `esBachillerato`, `clasificacion_fk`, `foto`, `es_digital`) VALUES
('112-597-21-25', 'Algebra de baldor', 'Aurelio Baldor', 'Cultural', 1, 'Libro de algebra para bachillerato ', 5, 30000, 0, '', 'baldor.jpg', 0),
('222-567-89-88', 'Historia Universal Contemporanea', 'Marialba Pastor', 'Santillana', 1, 'Libro para grado sexto sobre la historia universal', 25, 25000, 1, '', 'historiauniversal.jpg', 1),
('254-232-54-89', 'La republica', 'Platon', 'universal', 1, 'Libro de literatura universal y filosofia de platon', 5, 18000, 1, '', 'republica.png', 1),
('526-258-21-12', 'World English 2', 'National Geographic', 'Heinle', 1, 'Libro producido por la National Geographic para el aprendizaje del idioma ingles en universidades e institutciones ', 27, 75000, 1, '', 'ingles.jpg', 1),
('789-585-45-96', 'Historia, Prehistoria, Antiguedad y edad media', 'Cristina Barbero', 'Santillana', 1, 'Libro de historia para bachillerato', 12, 30000, 1, '', 'historia1santillana.jpg', 1),
('852-233-21-28', 'Investiguemos 9', 'Norma', 'Voluntad', 1, 'Libro de ciencias naturales para grado 9ª', 8, 25000, 1, '', 'investiguemos.jpg', 1),
('853-625-21-28', 'Calculo diferencial', 'Alberto Camacho', 'DML', 1, 'Libro de calculo diferencial para grado once y universidades', 5, 25000, 0, '', 'calculo.jpg', 0),
('853-625-21-41', 'Constitucion de Colombia', 'Constituyente de 1991', 'King Kolar', 1, 'Describiendo libro de prueba', 2, 600000, 0, '', 'constitucion.jpg', 0),
('854-214-23-52', 'Ciencias Naturales 7°', 'Santillana', 'Santillana', 1, 'Ciencias naturales para grado 7°', 5, 56000, 1, '', 'cienciasnaturales.jpg', 1),
('896-21-00-17', 'Historia de la 2° Guerra mundial', 'Liddell Hart', 'Caralt', 1, 'Relato de la segunda guerra mundial escrito por la mas prestigiosa analista militar de nuestro tiempo', 26, 85000, 1, '', 'guerra.jpg', 1),
('956-895-51-86', 'Ing. de Software', 'Roger S. Pressman', 'Mc Graw Hill', 1, 'null - - - - - - ', 5, 12500, 0, '', 'pressman.jpg', 0),
('9788-44-15-36', 'Java 8', 'Rogers Cadenhead', 'Anaya Multimedia', 1, 'Libro guia del lenguaje de programacion Java 8', 10, 45000, 1, '', 'java8.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `id` int(11) NOT NULL,
  `banco` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `numtarj` bigint(20) NOT NULL,
  `caducidad` date NOT NULL,
  `codseg` int(3) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `usuario_fk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarjeta`
--

INSERT INTO `tarjeta` (`id`, `banco`, `tipo`, `numtarj`, `caducidad`, `codseg`, `ciudad`, `departamento`, `usuario_fk`) VALUES
(15, 'vtg', 'visa', 34545, '2017-04-23', 4545, 'Bogota', 'Cali', ''),
(16, 'vtg', 'visa', 34545, '2017-04-23', 4545, 'Bogota', 'Cali', ''),
(17, 'vtg', 'visa', 34545, '2017-04-23', 4545, 'Bogota', 'Cali', ''),
(18, 'vtg', 'visa', 34545, '2017-04-23', 4545, 'Bogota', 'Cali', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` varchar(20) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `tarjeta_fk` int(11) NOT NULL,
  `es_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `tipo_documento`, `nombre`, `password`, `email`, `direccion`, `telefono`, `tarjeta_fk`, `es_admin`) VALUES
('001', '', 'administrador', '12345', 'admin@librarymod.com', '', 0, 0, 1),
('1233893770', '1', 'Diego Mateo', '54321', 'dsierrat@uniminuto.edu.co', 'cll 130c 120c 84', 4960237, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `usuario_fk` varchar(20) NOT NULL,
  `tarjeta_fk` int(11) NOT NULL,
  `total` double NOT NULL,
  `fecha_crea` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_x_libro`
--

CREATE TABLE `venta_x_libro` (
  `id` int(11) NOT NULL,
  `libro_fk` varchar(17) NOT NULL,
  `venta_fk` int(11) NOT NULL,
  `fecha_crea` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta_x_libro`
--

INSERT INTO `venta_x_libro` (`id`, `libro_fk`, `venta_fk`, `fecha_crea`) VALUES
(1, '526-258-21-12', 0, '0000-00-00'),
(2, '852-233-21-28', 0, '0000-00-00'),
(3, '853-625-21-41', 0, '0000-00-00'),
(4, '896-21-00-17', 0, '0000-00-00'),
(5, '956-895-51-86', 0, '0000-00-00'),
(8, '526-258-21-12', 0, '0000-00-00'),
(9, '852-233-21-28', 0, '0000-00-00'),
(10, '853-625-21-41', 0, '0000-00-00'),
(11, '896-21-00-17', 0, '0000-00-00'),
(12, '956-895-51-86', 0, '0000-00-00'),
(15, '526-258-21-12', 0, '0000-00-00'),
(16, '852-233-21-28', 0, '0000-00-00'),
(17, '853-625-21-41', 0, '0000-00-00'),
(18, '896-21-00-17', 0, '0000-00-00'),
(19, '956-895-51-86', 0, '0000-00-00'),
(22, '526-258-21-12', 0, '0000-00-00'),
(23, '852-233-21-28', 0, '0000-00-00'),
(24, '853-625-21-41', 0, '0000-00-00'),
(25, '896-21-00-17', 0, '0000-00-00'),
(26, '956-895-51-86', 0, '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `efectivo`
--
ALTER TABLE `efectivo`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`isbn`);

--
-- Indices de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta_x_libro`
--
ALTER TABLE `venta_x_libro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `efectivo`
--
ALTER TABLE `efectivo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `venta_x_libro`
--
ALTER TABLE `venta_x_libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
