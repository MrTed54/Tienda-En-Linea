-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2020 a las 05:14:43
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simplezone`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idempleado` int(11) NOT NULL,
  `nombreempleado` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `contraseña` int(4) NOT NULL,
  `estado` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombrecliente` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `idmarca` int(11) NOT NULL,
  `nombremarca` varchar(50) NOT NULL,
  `tipomotor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidadunitaria` int(11) NOT NULL,
  `formadepago` int(11) NOT NULL,
  `fechadepedido` date NOT NULL,
  `fechadeentrega` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idpedido`, `precio`, `cantidadunitaria`, `formadepago`, `fechadepedido`, `fechadeentrega`) VALUES
(1, 0, 0, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `marcavehiculo` varchar(50) NOT NULL,
  `cantidaddisponible` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `estadodepruducto` int(11) NOT NULL,
  `preciocompra` int(11) NOT NULL,
  `precioventa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `modelo`, `marca`, `marcavehiculo`, `cantidaddisponible`, `descripcion`, `imagen`, `estadodepruducto`, `preciocompra`, `precioventa`) VALUES
(1, 'MAGSP33C', 'Motorcraft', 'Acura-1', 3, 'NUESTROS PRODUCTOS ESTAN 100% GARANTIZADOS. ', 'motorcraft/motorcraft.jpg', 1, 98, 140),
(2, '5224', 'Autolite', 'Acura-2', 4, 'NUESTROS PRODUCTOS ESTAN 100% GARANTIZADOS. ', 'autolite/autolite.jpg', 1, 95, 130),
(3, 'RC12MC4', 'Champion', 'Acura-3', 6, 'NUESTROS PRODUCTOS ESTAN 100% GARANTIZADOS. ', 'champion/champion.jpg', 1, 80, 140),
(4, 'BKR5C', 'NGK', 'Acura-4', 8, 'NUESTROS PRODUCTOS ESTAN 100% GARANTIZADOS. ', 'ngk/ngk.jpg', 1, 70, 130),
(5, 'MAGSP32C', 'Motorcraft', 'Bmw-1', 12, 'NUESTROS PRODUCTOS ESTAN 100% GARANTIZADOS. ', 'motorcraft/motorcraft.jpg', 1, 130, 260),
(6, '5225', 'Autolite', 'Bmw-2', 2, 'NUESTROS PRODUCTOS ESTAN 100% GARANTIZADOS. ', 'autolite/autolite.jpg', 1, 140, 200),
(7, 'RC12MC5', 'Champion', 'Bmw-3', 1, 'NUESTROS PRODUCTOS ESTAN 100% GARANTIZADOS. ', 'champion/champion.jpg', 1, 128, 198),
(8, 'BKR5E', 'NGK', 'Bmw-4', 5, 'NUESTROS PRODUCTOS ESTAN 100% GARANTIZADOS. ', 'ngk/ngk.jpg', 1, 142, 210),
(9, 'MAGSP32C', 'Motorcraft', 'Audi-1', 7, 'NUESTROS PRODUCTOS ESTAN 100% GARANTIZADOS. ', 'motorcraft/motorcraft.jpg', 1, 142, 198),
(10, '5226', 'Autolite', 'Audi-2', 9, 'NUESTROS PRODUCTOS ESTAN 100% GARANTIZADOS. ', 'autolite/autolite.jpg', 1, 147, 200),
(11, 'RC12MC4', 'Champion', 'Audi-3', 10, 'NUESTROS PRODUCTOS ESTAN 100% GARANTIZADOS. ', 'champion/champion.jpg', 1, 98, 170),
(12, 'BKR5E', 'NGK', 'Audi-4', 11, 'NUESTROS PRODUCTOS ESTAN 100% GARANTIZADOS. ', 'ngk/ngk.jpg', 1, 65, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `idVehiculo` int(11) NOT NULL,
  `año` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `motor` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`idVehiculo`, `año`, `modelo`, `motor`, `marca`) VALUES
(1, 2005, 'R-L 3.5L-SOHC', '6 Cilindros', 'Acura-1'),
(2, 2005, 'R-L 3.5L-SOHC', '6 Cilindros', 'Acura-2'),
(3, 2005, 'R-L 3.5L-SOHC', '6 Cilindros', 'Acura-3'),
(4, 2005, 'R-L 3.5L-SOHC', '6 Cilindros', 'Acura-4'),
(5, 2011, 'A1', '4 Cilindros', 'Audi-1'),
(6, 2011, 'A1', '4 Cilindros', 'Audi-2'),
(7, 2011, 'A1', '4 Cilindros', 'Audi-3'),
(8, 2011, 'A1', '4 Cilindros', 'Audi-4'),
(9, 2008, '323', '12 Cilindros', 'Bmw-1'),
(10, 2008, '323', '12 Cilindros', 'Bmw-2'),
(11, 2008, '323', '12 Cilindros', 'Bmw-3'),
(12, 2008, '323', '12 Cilindros', 'Bmw-4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idventas` int(11) NOT NULL,
  `folio` varchar(45) NOT NULL,
  `estatusventa` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idmarca`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`marca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
