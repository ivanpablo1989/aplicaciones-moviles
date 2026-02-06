-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-02-2026 a las 22:30:32
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

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `usuario_id`) VALUES
(8, 1),
(9, 1),
(10, 1),
(25, 1),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(16, 8),
(17, 8),
(18, 8),
(19, 8),
(20, 8),
(26, 11);

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
(4, 'nicky nicole', 'la mas chetada y ss', 1094, '3.00', 'belgrano 444', '2026-01-28', '19:33:00', 'd93b76989e1519aae44517cffe25dcd5.jpg'),
(5, 'duki el trapero del norte', 'el trapero del sur', 0, '12.00', 'paris 234', '2026-01-31', '17:33:00', '9387321787fe94258ecac36747c3e398.jpg'),
(6, 'maria becerra', 'la mas chetada', 220, '11.00', 'camino negro 1111', '2026-02-07', '13:35:00', 'be21f80e4256e773f28d5259442a4493.jpg'),
(11, 'marisol klubus', 'la mas inteligente del mundo', 10, '3.00', 'solis 444', '2026-02-25', '18:51:00', 'f5d00383acea2d6b3a93da8c847b2349.jpg');

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

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `usuario_id`, `espectaculo_id`, `cantidad`, `fecha_reserva`, `monto_total`, `estado`) VALUES
(10, 1, 4, 2, '2026-02-03', '4444.00', 'activa'),
(15, 2, 6, 3, '2026-02-03', '36.00', 'activa'),
(18, 8, 4, 3, '2026-02-03', '6666.00', 'activa'),
(19, 8, 5, 1, '2026-02-03', '12.00', 'activa'),
(20, 8, 6, 5, '2026-02-03', '60.00', 'activa'),
(23, 2, 4, 2, '2026-02-05', '4444.00', 'activa'),
(24, 2, 4, 2, '2026-02-05', '4444.00', 'activa'),
(25, 2, 6, 2, '2026-02-05', '24.00', 'activa'),
(26, 1, 4, 3, '2026-02-05', '6666.00', 'cancelada'),
(27, 11, 4, 2, '2026-02-05', '4444.00', 'cancelada');

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
(1, 1, 1, 'ivaninfonorte@gmail.com', '1234', 'agustin', 'rossi', 111, '11-4156-3813'),
(2, 1, 1, 'ivaninfosur@gmail.com', '1234', 'miguel', 'angel', 2147483647, '11-2310-8788'),
(3, 1, 1, 'ivaninfoeste@gmail.com', '1234', 'pablo', 'abel', 33333, '4444-4444'),
(5, 2, 1, 'ivaninfonet@gmail.com', '1234', 'pablo', 'tolaba', 2211112, '5555-6666'),
(6, 2, 1, 'ivaninfonet2@gmail.com', '1234', 'fabian', 'gauto', 44444, '6666-5555'),
(8, 1, 0, 'ivaninfoeste2@gmail.com', '1234', 'ivan', 'pablo', 0, ''),
(9, 1, 0, 'abc@hotmail.com', '$2y$10$IAr3fQnQsOYmkQOYqBWuNerHC5g0j3EmRTu7/fCfXBJ5v5yyDLSrm', 'ivan', 'pablo', 0, ''),
(11, 1, 0, 'b@hotmail.com', '1234', 'b', 'b', 3, '4'),
(12, 1, 1, 'u@gmail.com', '1234', 'minato', 'shino', 0, '');

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
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `usuario_id`, `espectaculo_id`, `reserva_id`, `fecha_venta`, `monto_total`) VALUES
(9, 1, 4, 10, '2026-02-03', '4444.00'),
(14, 2, 6, 15, '2026-02-03', '36.00'),
(17, 8, 4, 18, '2026-02-03', '6666.00'),
(18, 8, 5, 19, '2026-02-03', '12.00'),
(19, 8, 6, 20, '2026-02-03', '60.00'),
(22, 2, 4, 23, '2026-02-05', '4444.00'),
(23, 2, 4, 24, '2026-02-05', '4444.00'),
(24, 2, 6, 25, '2026-02-05', '24.00'),
(25, 1, 4, 26, '2026-02-05', '6666.00'),
(26, 11, 4, 27, '2026-02-05', '4444.00');

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
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `espectaculos`
--
ALTER TABLE `espectaculos`
  MODIFY `id_espectaculo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
