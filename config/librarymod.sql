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
  `foto` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`isbn`, `nombre`, `autor`, `editorial`, `estado`, `descripcion`, `cantidad`, `precio`, `esBachillerato`, `clasificacion_fk`, `foto`) VALUES
('23234', 'LALA', 'DIANA', 'ECOMERCE', 1, 'JAJAJAJA', 2, 80000, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjeta`
--

CREATE TABLE `tarjeta` (
  `id` int(11) NOT NULL,
  `banco` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `usuario_fk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` varchar(20) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `password` varchar(755) NOT NULL,
  `email` varchar(30) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `tarjeta_fk` int(11) NOT NULL,
  `es_admin` tinyint(1) NOT NULL
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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tarjeta`
--
ALTER TABLE `tarjeta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
