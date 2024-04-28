-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2024 a las 04:47:30
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dulceriara`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `imagen_categoria` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`, `imagen_categoria`) VALUES
(1, 'Leche Cajeta', 'img/imagenescategoria/dulceleche.jpg'),
(2, 'tamarindo', 'img/imagenescategoria/picosito.jpg'),
(3, 'coco', 'img/imagenescategoria/cocadas.jpg'),
(4, 'frutas', 'img/imagenescategoria/dulcedefruta.jpg'),
(5, 'pilonsillo', 'img/imagenescategoria/Dulcesconvento.jpg'),
(6, 'amaranto', 'img/imagenescategoria/nuecesysemillas.jpg'),
(7, 'chocolate', 'img/imagenescategoria/chocolate.jpg'),
(8, 'regionales', 'img/imagenescategoria/galletasc.jpg'),
(9, 'enchilados', 'img/imagenescategoria/fondochile.jpg'),
(10, 'Dulces favoritos de la caja', 'img/imagenescategoria/tamarindo.jpg'),
(13, 'Arreglos', 'img/imagenescategoria/arreglos.jpg'),
(14, 'Tamarindo enchilado', 'img/imagenescategoria/tamarindo.jpg'),
(15, 'Dulcescaja', 'img/imagenescategoria/dulcedefruta.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id_compras` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `preciounitario` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id_compras`, `id_proveedor`, `id_producto`, `cantidad`, `preciounitario`, `total`) VALUES
(1, 1, 1, 50, 12, 600);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `caducidad` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fechacompra` date NOT NULL,
  `imagen_producto` varchar(90) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `id_proveedor`, `id_categoria`, `nombre`, `descripcion`, `caducidad`, `cantidad`, `fechacompra`, `imagen_producto`, `precio`) VALUES
(1, 1, 4, 'Jalea de manzana', 'Rico y delicioso dulce con su chilito y su limon\r\n', '2025-03-26', 100, '2024-03-27', 'img/imagenescategoria/dulcedefruta.jpg', 50),
(2, 1, 3, 'Cocada', '', '2027-03-26', 50, '2024-03-30', 'img/imagenescategoria/cocadas.jpg', 10),
(12, 26, 2, 'Macarrones', '', '2026-07-28', 14, '2024-03-28', 'img/imagenescategoria/macarrones.jpg', 8),
(13, 26, 1, 'Macarrones', '', '2026-04-28', 14, '2024-03-28', 'img/imagenescategoria/macarrones.jpg\r\n', 8),
(14, 1, 6, 'Alegria', '', '2027-03-26', 50, '2024-03-28', 'img/imagenescategoria/nuecesysemillas.jpg', 10),
(15, 2, 5, 'pilonsillo', '', '2027-03-26', 50, '2024-03-28', 'img/imagenescategoria/dulceleche.jpg', 10),
(16, 2, 7, 'chocolate', '', '2027-03-26', 50, '2024-03-28', 'img/imagenescategoria/chocolate.jpg\r\n', 10),
(19, 2, 8, 'regionales', '', '2027-03-26', 50, '2024-03-28', 'img/imagenescategoria/nuecesysemillas.jpg', 10),
(20, 1, 9, 'enchilados', '', '2027-03-26', 50, '2024-03-28', 'img/imagenescategoria/tamarindo.jpg', 10),
(21, 1, 10, 'enchilados', '', '2027-03-26', 50, '2024-03-28', 'img/imagenescategoria/tamarindo.jpg', 10),
(22, 1, 13, 'Arreglos', '', '2027-03-26', 50, '2024-03-28', 'img/imagenescategoria/arreglos.jpg', 10),
(23, 2, 14, 'enchilados', '', '2027-03-26', 50, '2024-03-28', 'img/imagenescategoria/tamarindo.jpg', 10),
(24, 2, 15, 'paleta tamarindo', '', '2027-03-26', 50, '2024-03-29', 'img/imagenescategoria/tamarindo.jpg', 10),
(25, 2, 3, 'coco de leche', 'Rico y delicioso dulce con su chilito y su limon', '2027-03-26', 50, '2024-03-29', 'img/imagenescategoria/cocoleche.jpg', 10),
(26, 1, 3, 'Cocada', 'Rico y delicioso dulce con su chilito y su limon', '2027-03-26', 50, '2024-03-30', 'img/imagenescategoria/cocadas.jpg', 10),
(27, 2, 3, 'coco de leche', 'Rico y delicioso dulce con su chilito y su limon', '2027-03-26', 50, '2024-03-29', 'img/imagenescategoria/cocoleche.jpg', 10),
(29, 2, 8, 'Borrachos', '', '2026-11-18', 10, '2024-04-02', '', 15),
(30, 27, 8, 'Dulce cristalizado', '', '2026-07-04', 10, '2024-04-04', '', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_repartidor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `id_usuario`, `id_repartidor`) VALUES
(1, 9, 1),
(2, 12, 2),
(26, 39, 1),
(27, 45, 2),
(28, 46, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repartidores`
--

CREATE TABLE `repartidores` (
  `id_repartidor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `repartidores`
--

INSERT INTO `repartidores` (`id_repartidor`, `id_usuario`) VALUES
(1, 10),
(2, 14),
(3, 44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `id_tipo_usuarios` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`id_tipo_usuarios`, `nombre`) VALUES
(1, 'administrador'),
(2, 'encargado'),
(3, 'proveedor'),
(4, 'repartidor'),
(5, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellidopa` varchar(15) NOT NULL,
  `apellidoma` varchar(15) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `contraseña` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_tipo_usuario`, `nombre`, `apellidopa`, `apellidoma`, `correo`, `telefono`, `contraseña`) VALUES
(7, 1, 'Christian', 'Reyes', 'Guarneros', 'chris@gmail.com', '2481595251', '12345678'),
(8, 2, 'Chio', 'Roldan', 'Rodriguez', 'chio@gmail.com', '2481525356', '12345678'),
(9, 3, 'Chino', 'Botella', 'Luna', 'chino@gmail.com', '2456532241', '12345678'),
(10, 4, 'Amando', 'Coraza', 'Perez', 'amando@gmail.com', '2458574469', '12345678'),
(11, 5, 'Hanis', 'Coraza', 'Ramirez', 'hanis@gmail.com', '2451598586', '12345678'),
(12, 3, 'Ipolita', 'Lazcano', 'Ojeda', 'ipo@gmail.com', '2458651236', '12345678'),
(13, 3, 'Mario', 'Castro', 'Gutierres', 'mario@gmail.com', '2458651237', '12345678'),
(14, 4, 'Daniela', 'Coraza ', 'Roldan', 'daniela@gmail.com', '2458688237', '12345678'),
(15, 3, 'Dayra', 'Roldan', 'Costeño', 'dadad@gmail.com', '+522461588', '12345678'),
(39, 3, 'sharay', 'Roldan', 'Coste', 'dadad@gmail.com', '+522461588', '1111111'),
(44, 4, 'Ingeniero', 'Coraza', 'Ramirez', 'inge@gmail.com', '2458635852', '12345678'),
(45, 3, 'Camorras', 'Garcia', 'Garcia', 'garcia@gmail.com', '2581474556', '12345678'),
(46, 3, 'Enrique', 'Roldan', 'Rodriguez', 'cande@gmail.com', '2587412345', '12345678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compras`),
  ADD KEY `id_proveedor_id_compra` (`id_proveedor`),
  ADD KEY `id_producto_compra` (`id_producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_repartidor_proveedores` (`id_repartidor`);

--
-- Indices de la tabla `repartidores`
--
ALTER TABLE `repartidores`
  ADD PRIMARY KEY (`id_repartidor`),
  ADD KEY `id_repartidor_id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`id_tipo_usuarios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `repartidores`
--
ALTER TABLE `repartidores`
  MODIFY `id_repartidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  MODIFY `id_tipo_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `id_producto_compra` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`),
  ADD CONSTRAINT `id_proveedor_id_compra` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`),
  ADD CONSTRAINT `id_proveedor` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`);

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `id_repartidor_proveedores` FOREIGN KEY (`id_repartidor`) REFERENCES `repartidores` (`id_repartidor`),
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `repartidores`
--
ALTER TABLE `repartidores`
  ADD CONSTRAINT `id_repartidor_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `id_tipo_usuario` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuarios` (`id_tipo_usuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
