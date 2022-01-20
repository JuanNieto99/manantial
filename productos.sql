-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2022 a las 23:13:36
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `manantial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `estado` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `imagen`, `precio`, `estado`) VALUES
(1, 'Aceite de Coco x 130 ml', 'Aceite_de_Coco_x130ml.png', '14000.00', '0'),
(2, 'Aceite de Coco x 230 ml', 'Aceite_de_Coco_x230ml.png', '22500.00', '0'),
(3, 'Aceite de Coco x 450 ml', 'Aceite_de_Coco_x450ml.png', '39000.00', '0'),
(4, 'Aceite de Coco x 900 ml', 'Aceite_de_Coco_x900ml.png', '69000.00', '0'),
(5, 'Balsamo labial en barra de Coco y Chocolate x', 'Balsamo_Labial_Barra.png', '6000.00', '0'),
(6, 'Balsamo labial de Coco y Chocolate x 10gr', 'Balsamo_Labial_Pomo.png', '8500.00', '0'),
(7, 'Exfoliante Durazno ', 'Exfoliante_de_Durazno.png', '22000.00', '0'),
(8, 'Jabon de Arroz', 'Jabon_de_Arroz.png', '17000.00', '0'),
(9, 'Jabon de Rosas', 'Jabon_de_Rosas.png', '17000.00', '0'),
(10, 'Jabon de Carbón', 'Jabon_de_Carbon.png', '16000.00', '0'),
(11, 'Calostro', 'Calostro.png', '42000.00', '0'),
(12, ' Colágeno Hidrolizado', 'Colageno_Hidrolizado.png', '65000.00', '0'),
(13, 'Fibra', 'Fibra.png', '35000.00', '0'),
(14, 'Aceite de Argán x 30ml', 'Aceite_Argan_30ml.png', '40000.00', '0'),
(15, 'Aceite de Almendras x 30ml', 'Aceite_Almendra_30ml.png', '18000.00', '0'),
(16, 'Aceite de Jojoba x 30ml', 'Aceite_de_Jojoba_30ml.png', '25000.00', '0'),
(17, 'Aceite de Rosa Mosqueta x 30ml', 'Aceite_de_Rosa_ Mosqueta_30ml.png', '45000.00', '0'),
(18, 'Serum Facial x 30ml', 'Serum_Facial_30ml.png', '35000.00', '0'),
(19, 'Aceite de Ricino x 100ml', 'Aceite_de_Ricino_100ml.png', '18000.00', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
