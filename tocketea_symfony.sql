-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2018 a las 02:49:36
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tocketea_symfony`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(21) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Conciertos'),
(2, 'Festivales'),
(3, 'Musicales'),
(4, 'Teatro'),
(5, 'Monólogos'),
(6, 'Ballet'),
(7, 'Ópera'),
(8, 'Turismo'),
(9, 'Exposiciones y museos'),
(10, 'Eventos profesionales'),
(11, 'Deportes'),
(12, 'Cursos'),
(13, 'Circos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `num_entradas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`id`, `id_usuario`, `id_evento`, `num_entradas`) VALUES
(4, 8, 16, 2),
(5, 5, 3, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `id` int(11) NOT NULL,
  `fk_provincia` int(11) NOT NULL,
  `fk_categoria` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enlace_externo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `total_entradas` int(11) NOT NULL,
  `entradas_restantes` int(11) NOT NULL,
  `precio_entradas` int(11) NOT NULL,
  `venta_fecha_inicio` date NOT NULL,
  `venta_fecha_fin` date NOT NULL,
  `fecha_celebracion` date NOT NULL,
  `hora_celebracion` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id`, `fk_provincia`, `fk_categoria`, `fk_usuario`, `imagen`, `titulo`, `direccion`, `enlace_externo`, `descripcion`, `total_entradas`, `entradas_restantes`, `precio_entradas`, `venta_fecha_inicio`, `venta_fecha_fin`, `fecha_celebracion`, `hora_celebracion`) VALUES
(1, 4, 11, 1, NULL, 'Evento 1', 'Calle Falsa 123', 'asdasdada', 'asdasdadsada', 1000, 1000, 22, '2018-02-22', '2018-02-28', '2018-02-22', '00:00:00'),
(2, 10, 11, 1, NULL, 'Evento 2', 'Calle Mexico', 'sadasda', 'asdasdadasda', 330, 330, 45, '2018-02-20', '2018-02-24', '2018-02-25', '09:00:00'),
(3, 10, 5, 5, NULL, 'Evento de DADA', 'asdasdasdadada', 'aasdasdadadsa', 'asdasdadadsada', 240, 230, 32, '2018-02-07', '2018-02-24', '2018-02-26', '12:30:00'),
(15, 1, 1, 8, NULL, 'sada', 'asdasd', 'sadasd', 'asdads', 222, 222, 22, '2013-01-01', '2013-01-01', '2013-01-01', '00:00:00'),
(16, 18, 3, 8, '7ea1d87d273dd0fcb811ef1e30175b15.jpeg', 'Prueba con imagen', 'sadasdasdads', 'asdasdadsa', 'asdasdadas', 244, 242, 45, '2013-01-01', '2013-01-01', '2013-01-01', '03:04:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20180214212424'),
('20180216144322'),
('20180216152927'),
('20180216153306'),
('20180216201130'),
('20180216205215');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(22) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id`, `nombre`) VALUES
(1, 'Álava'),
(2, 'Albacete'),
(3, 'Alicante'),
(4, 'Almería'),
(5, 'Asturias'),
(6, 'Ávila'),
(7, 'Badajoz'),
(8, 'Barcelona'),
(9, 'Burgos'),
(10, 'Cantabria'),
(11, 'Castellón'),
(12, 'Ciudad Real'),
(13, 'Cuenca'),
(14, 'Cáceres'),
(15, 'Cádiz'),
(16, 'Córdoba'),
(17, 'Girona'),
(18, 'Granada'),
(19, 'Guadalajara'),
(20, 'Guipúzcoa'),
(21, 'Huelva'),
(22, 'Huesca'),
(23, 'Islas Baleares'),
(24, 'Jaén'),
(25, 'La Coruña'),
(26, 'La Rioja'),
(27, 'Las Palmas'),
(28, 'León'),
(29, 'Lleida'),
(30, 'Lugo'),
(31, 'Madrid'),
(32, 'Murcia'),
(33, 'Málaga'),
(34, 'Navarra'),
(35, 'Orense'),
(36, 'Palencia'),
(37, 'Pontevedra'),
(38, 'Salamanca'),
(39, 'Santa Cruz de Tenerife'),
(40, 'Segovia'),
(41, 'Sevilla'),
(42, 'Soria'),
(43, 'Tarragona'),
(44, 'Teruel'),
(45, 'Toledo'),
(46, 'Valencia'),
(47, 'Valladolid'),
(48, 'Vizcaya'),
(49, 'Zamora'),
(50, 'Zaragoza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `fk_provincia` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idioma` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `fk_provincia`, `email`, `imagen`, `password`, `rol`, `idioma`, `is_active`, `username`) VALUES
(1, 3, 'jose@gmail.com', NULL, '$2y$12$cZyiAX1Jg5FOws7RHq9IWO2L4gKujQoODj5jp4FLba3CTU6yUcHyi', 'ROLE_GESTOR', 'es_ES', 0, 'jose'),
(5, 17, 'pepe@gmail.com', NULL, '$2y$12$cZyiAX1Jg5FOws7RHq9IWO2L4gKujQoODj5jp4FLba3CTU6yUcHyi', 'ROLE_COMPRADOR', 'es_ES', 1, 'dada'),
(8, 15, 'gg@gmail.com', '0c285b3ca3e52107b36e720a8d0fdcd5.jpeg', '$2y$12$cZyiAX1Jg5FOws7RHq9IWO2L4gKujQoODj5jp4FLba3CTU6yUcHyi', 'ROLE_ADMINISTRADOR', 'es_ES', 1, 'gg'),
(10, 3, 'api@gmail.com', NULL, '$2y$12$CxN6OqAhLSSaASPP8bDuUOTFFLnR0QRLWDCB5JED5pvh8k.A2pvDK', 'ROLE_ADMINISTRADOR', 'es_ES', 1, 'api'),
(11, 3, 'api_rest@gmail.com', NULL, '$2y$12$cfNsnwJCY3q0I6nXRH44necAfhUACXFyAoL1Sq9KBWJvkgA09aNGO', 'ROLE_ADMINISTRADOR', 'es_ES', 1, 'api'),
(12, 3, 'api_rest_3@gmail.com', NULL, '$2y$12$DIHSltN427.Cbv9XP2SK6OzXjT7KDe/GR6gWOJOkWT..uGkBJMQke', 'ROLE_ADMINISTRADOR', 'es_ES', 1, 'api3'),
(14, 5, 'nuevo_usuario_api@gmail.com', NULL, '$2y$12$D5CnyqfCcgVsxfX8ZBzJ/uNLbQMTKuNRvD4WxYoSosc3aZthEP5WK', 'ROLE_ADMINISTRADOR', 'es_ES', 1, 'nuevo_api');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_C949A274FCF8192D` (`id_usuario`),
  ADD KEY `IDX_C949A27461B1BEE8` (`id_evento`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_47860B05B2C32583` (`fk_provincia`),
  ADD KEY `IDX_47860B052F49C5BD` (`fk_categoria`),
  ADD KEY `IDX_47860B05D24A8D71` (`fk_usuario`);

--
-- Indices de la tabla `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2265B05DB2C32583` (`fk_provincia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD CONSTRAINT `FK_C949A27461B1BEE8` FOREIGN KEY (`id_evento`) REFERENCES `evento` (`id`),
  ADD CONSTRAINT `FK_C949A274FCF8192D` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `FK_47860B052F49C5BD` FOREIGN KEY (`fk_categoria`) REFERENCES `categoria` (`id`),
  ADD CONSTRAINT `FK_47860B05B2C32583` FOREIGN KEY (`fk_provincia`) REFERENCES `provincia` (`id`),
  ADD CONSTRAINT `FK_47860B05D24A8D71` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_2265B05DB2C32583` FOREIGN KEY (`fk_provincia`) REFERENCES `provincia` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
