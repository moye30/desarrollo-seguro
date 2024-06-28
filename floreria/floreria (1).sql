-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2023 a las 20:42:59
-- Versión del servidor: 10.4.25-MariaDB-log
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `floreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria`, `precio`, `imagen`) VALUES
(34, 'RAMO BUCHON DE 100 ROSAS', 'FLORES', '500', 'https://cdn.shopify.com/s/files/1/0609/2475/6155/products/IMG_1452_560x.jpg?v=1665546030'),
(35, 'BOTELLA DE CHAMPAGNE MOET MOET & CHANDON NECTAR IMPERIAL', 'OTROS', '3400', 'http://cdn.shopify.com/s/files/1/0277/1769/7610/products/moet-_-chandon-nectar-imperial.jpg?v=1632869174'),
(36, 'RAMO DE PEONIAS', 'FLORES', '890', 'https://floreriamargaritacarrillo.com.mx/wp-content/uploads/2020/05/RAMO-PEONIAS-1.jpg'),
(37, 'MACAROUNS', 'REPOSTRERIA', '560', 'https://cdn.shopify.com/s/files/1/0274/8910/8102/products/201117-macarons-web-46.jpg?v=1605656875'),
(38, 'BOLSO DE MANO GUCCI PARA HOMBRE', 'OTROS', '49000', 'https://cdn-images.farfetch-contents.com/18/37/63/97/18376397_39618468_1000.jpg'),
(39, 'PULSERA PANDORA', 'OTROS', '5900', 'https://media.glamour.es/photos/616f80a48acf211ccf4fa3f0/master/w_1600%2Cc_limit/668987.jpg'),
(42, 'TENIS PHILIP PLEIN', 'FLORES', '23000', 'https://cdn-images.farfetch-contents.com/18/55/86/40/18558640_40993636_1000.jpg'),
(45, 'SUDADERA NIKE ', 'OTROS', '1700', 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/30669179-ba37-4ebe-9845-29ad3946b96b/sudadera-con-gorro-de-tejido-fleece-sportswear-icon-clash-wH0QZ2.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(12) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `correo`, `telefono`, `sexo`, `contrasena`) VALUES
(1, 'moises', 'moises.moralesl2000@gmail.com', 2147483647, 'masculino', 'moY3300500'),
(2, 'moy', 'moy@gmail.com', 2147483647, 'hombre', 'moy2'),
(3, 'alex', 'alex@gamail.com', 1212121212, 'masculino', 'alex10'),
(4, 'nodal', 'nodal@icloud.com', 5555, 'mujer', 'nodal1'),
(5, 'alejandro', 'jandro@gmail.com', 2147483647, 'hombre', '1234'),
(6, 'maria', 'mari@gmail.com', 1122334455, 'femenino', '123456'),
(7, 'pito', 'pito@gamil.com', 2147483647, 'joto', 'pitos2'),
(8, 'morales', 'mm@gmail.com', 22222, 'mujer', '10'),
(9, 'qq', 'mm@main.com', 22, 'moy', '123'),
(10, 'moises', 'moyy@gmail.com', 2222, 'honbre', 'lol'),
(14, 'jose luis', 'jose@mor.com', 444, 'hombre', 'ppppp'),
(15, 'mico', 'janddro@gmail.com', 33, 'mm', '33'),
(16, 'mico', 'janddro@gmail.com', 33, 'mm', '33'),
(17, 'mico', 'janddro@gmail.com', 33, 'mm', '33'),
(18, 'mico', 'janddro@gmail.com', 33, 'mm', '33'),
(19, 'ramo rosas', 'janeeddro@gmail.com', 111, 'dd', '22'),
(20, 'ramo rosas', 'moy@gmail.com', 0, 'moy@gmail.com', 'moy2'),
(21, 'javier', 'jv@rr.com', 333434, 'hombre', '456'),
(22, 'moises', 'janddro@gmail.com', 444, 'mm', 'moy2'),
(23, 'marco', 'marco@gmail.com', 666, 'marco@gmail.com', '12345'),
(24, 'moises', 'moy@gmail.com', 88888, 'njnj', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registroadmin`
--

CREATE TABLE `registroadmin` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `contrasena` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registroadmin`
--

INSERT INTO `registroadmin` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(1, 'moises', 'moy@gmail.com', 'moy2'),
(2, 'moy', 'moy@gmail.com', 'moy2'),
(3, 'mooo', 'moy@gmail.com', 'moy2'),
(4, 'jjj', 'moy@gmail.com', 'moy2'),
(5, 'mm', 'moy@gmail.com', 'moy2'),
(6, 'rosa', 'rosa@gmail.com', '12345'),
(7, 'lazaro', 'lazaro@gmail.com', '123'),
(8, 'markitos', 'markitos@gmail.com', '12345'),
(9, 'mmmmm', 'mmmm@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrofloreria`
--

CREATE TABLE `registrofloreria` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `contrasena` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registroadmin`
--
ALTER TABLE `registroadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrofloreria`
--
ALTER TABLE `registrofloreria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `registroadmin`
--
ALTER TABLE `registroadmin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `registrofloreria`
--
ALTER TABLE `registrofloreria`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
