-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2026 a las 19:15:28
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mi_base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `espectaculos`
--

CREATE TABLE `espectaculos` (
  `id_espectaculo` int(11) NOT NULL,
  `nombre` varchar(51) NOT NULL,
  `descripcion` varchar(51) NOT NULL,
  `disponibles` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `direccion` varchar(51) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `imagen` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `espectaculos`
--

INSERT INTO `espectaculos` (`id_espectaculo`, `nombre`, `descripcion`, `disponibles`, `precio`, `direccion`, `fecha`, `hora`, `imagen`) VALUES
(5, 'duki', 'el trapero del norte', 888, '12.00', 'paris 234', '2026-01-31', '17:33:00', 'a8691dfd80f13cfc8d81df274cc7d1c0.jpg'),
(12, 'maria becerra', 'lo mejor de este mundo', 5, '77.00', 'peron 333', '2026-02-27', '12:34:00', '4edc0fb1380e39263569f32155c41602.jpg'),
(13, 'chayane', 'el mejor cantante del centro', 33326, '22.00', 'mitre 446', '2026-03-12', '21:16:00', 'b9aee80025b12607c10db0fb8a814e3d.jpg'),
(15, 'ricky martin', 'la musica viviente', 15555, '33.00', 'paris 234', '2026-03-11', '17:02:00', '1b6099025806cfadd691f09572e2e6bc.jpg'),
(16, 'shakira', 'la mejor de colombia', 1555, '21.00', 'mitre 446', '2026-03-14', '16:03:00', '9ea678f859ed97b1283cdab5e3342586.jpg'),
(17, 'luis miguel', 'lo mejor de los romanticos', 3333, '33.00', 'camino negro 1111', '2026-03-11', '21:04:00', '1ad53b00c986106d503903f0f3200435.jpg'),
(18, 'rusher king', 'el cantante latino', 33322, '55.00', 'avenida roca 433', '2026-02-17', '18:05:00', '518b77172eb6ddddee58da074b3b0a98.jpg'),
(19, 'trueno', 'la palabra', 4444, '18.00', 'paris 234', '2026-02-18', '18:06:00', '33747b007354f4977ce060c0fe27f3d6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `espectaculo_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_reserva` date NOT NULL,
  `monto_total` decimal(10,2) NOT NULL,
  `estado` enum('activa','cancelada') NOT NULL DEFAULT 'activa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(51) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre`) VALUES
(1, 'usuario'),
(2, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `nombre_usuario` varchar(51) NOT NULL,
  `palabra_clave` varchar(255) NOT NULL,
  `nombre` varchar(51) NOT NULL,
  `apellido` varchar(51) NOT NULL,
  `dni` int(11) NOT NULL,
  `telefono` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `rol_id`, `activo`, `nombre_usuario`, `palabra_clave`, `nombre`, `apellido`, `dni`, `telefono`) VALUES
(1, 1, 1, 'ivaninfonorte@gmail.com', '1234', 'pablo', 'ivan', 1234, '11-2310-6932'),
(2, 1, 1, 'ivaninfosur@gmail.com', '1234', 'miguel', 'angel', 33, '11-2310-8788'),
(3, 1, 1, 'ivaninfoeste@gmail.com', '1234', 'lautaro', 'pou', 111, '22'),
(5, 2, 1, 'ivaninfonet@gmail.com', '1234', 'pablo', 'tolaba', 2211112, '5555-6666'),
(6, 2, 1, 'ivaninfonet2@gmail.com', '1234', 'fabian', 'gauto', 44444, '6666-5555'),
(8, 1, 0, 'ivaninfoeste2@gmail.com', '1234', 'ivan', 'pablo', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `espectaculo_id` int(11) NOT NULL,
  `reserva_id` int(11) NOT NULL,
  `fecha_venta` date NOT NULL,
  `monto_total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `cliente_usuario_fk` (`usuario_id`);

--
-- Indices de la tabla `espectaculos`
--
ALTER TABLE `espectaculos`
  ADD PRIMARY KEY (`id_espectaculo`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `reserva_usuario_fk` (`usuario_id`),
  ADD KEY `reserva_espectaculo_fk` (`espectaculo_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`),
  ADD KEY `rol_fk` (`rol_id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `venta_usuario_fk` (`usuario_id`),
  ADD KEY `venta_espectaculo_fk` (`espectaculo_id`),
  ADD KEY `venta_reserva_fk` (`reserva_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `espectaculos`
--
ALTER TABLE `espectaculos`
  MODIFY `id_espectaculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `cliente_usuario_fk` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reserva_espectaculo_fk` FOREIGN KEY (`espectaculo_id`) REFERENCES `espectaculos` (`id_espectaculo`),
  ADD CONSTRAINT `reserva_usuario_fk` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `rol_fk` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id_rol`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `venta_espectaculo_fk` FOREIGN KEY (`espectaculo_id`) REFERENCES `espectaculos` (`id_espectaculo`),
  ADD CONSTRAINT `venta_reserva_fk` FOREIGN KEY (`reserva_id`) REFERENCES `reservas` (`id_reserva`),
  ADD CONSTRAINT `venta_usuario_fk` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
