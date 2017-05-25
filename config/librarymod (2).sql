-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2017 a las 05:17:50
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
('526-258-21-12', 'World English 2', 'National Geographic', 'Heinle', 1, 'Libro producido por la National Geographic para el aprendizaje del idioma ingles en universidades e institutciones ', 27, 75000, 1, '', 'ingles.jpg', 1),
('853-625-21-28', 'Calculo diferencial', 'Alberto Camacho', 'DML', 1, 'Libro de calculo diferencial para grado once y universidades', 5, 25000, 0, '', 'calculo.jpg', 0),
('853-625-21-41', 'Constitucion de Colombia', 'Constituyente de 1991', 'King Kolar', 1, 'Describiendo libro de prueba', 2, 600000, 0, '', 'constitucion.jpg', 0),
('854-214-23-52', 'Ciencias Naturales 7°', 'Santillana', 'Santillana', 1, 'Ciencias naturales para grado 7°', 5, 56000, 1, '', 'cienciasnaturales.jpg', 1),
('896-21-00-17', 'Historia de la 2° Guerra mundial', 'Liddell Hart', 'Caralt', 1, 'Relato de la segunda guerra mundial escrito por la mas prestigiosa analista militar de nuestro tiempo', 26, 85000, 1, '', 'guerra.jpg', 1),
('956-895-51-86', 'Ing. de Software', 'Roger S. Pressman', 'Mc Graw Hill', 1, 'null - - - - - - ', 5, 12500, 0, '', 'pressman.jpg', 0);

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
(1, 'Bogota', 'master', 26666332265, '2017-05-06', 266, 'Bogota', 'Cundinamarca', '');

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
  `ventaxlibro_fk` int(11) NOT NULL,
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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
