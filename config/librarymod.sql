-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2017 a las 01:30:04
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
(1, 'Davivienda', 'visa', 142653215632, '2023-10-20', 266, 'Bogota', 'Cundinamarca', ''),
(2, 'Bogota', 'visa', 14541245265895, '2019-05-18', 368, 'Cartagena', 'Bolivar', '');

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
  `fecha_crea` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `usuario_fk`, `tarjeta_fk`, `total`, `fecha_crea`) VALUES
(1, '', 1, 353500, '2017-05-29 18:25:45'),
(2, '', 2, 75000, '2017-05-29 18:28:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_x_libro`
--

CREATE TABLE `venta_x_libro` (
  `id` int(11) NOT NULL,
  `libro_fk` varchar(17) NOT NULL,
  `venta_fk` int(11) NOT NULL,
  `fecha_crea` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta_x_libro`
--

INSERT INTO `venta_x_libro` (`id`, `libro_fk`, `venta_fk`, `fecha_crea`) VALUES
(1, '222-567-89-88', 1, '2017-05-29 18:25:45'),
(2, '526-258-21-12', 1, '2017-05-29 18:25:45'),
(3, '789-585-45-96', 1, '2017-05-29 18:25:45'),
(4, '852-233-21-28', 1, '2017-05-29 18:25:45'),
(5, '854-214-23-52', 1, '2017-05-29 18:25:45'),
(6, '896-21-00-17', 1, '2017-05-29 18:25:45'),
(7, '956-895-51-86', 1, '2017-05-29 18:25:45'),
(8, '9788-44-15-36', 1, '2017-05-29 18:25:45'),
(16, '112-597-21-25', 2, '2017-05-29 18:28:37'),
(17, '9788-44-15-36', 2, '2017-05-29 18:28:37');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `venta_x_libro`
--
ALTER TABLE `venta_x_libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
