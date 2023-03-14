-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2023 a las 08:39:14
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tabla-evaluacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteles`
--

CREATE TABLE `hoteles` (
  `IDhotel` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `precio` varchar(20) NOT NULL,
  `destino` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `edad` varchar(20) NOT NULL,
  `estadia en el hotel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`IDhotel`, `fecha`, `precio`, `destino`, `nombre`, `edad`, `estadia en el hotel`) VALUES
(1, '2023-06-16', 'MXN$ 5,368', 'Grand Oasis Cancun A', 'antonio', '34', '2 dias '),
(2, '2023-10-14', 'MXN$ 3,250', 'Riu Lupita All Inclu', 'luis', '25', 'una semana '),
(3, '2023-08-17', 'MXN$ 3,573', 'Emporio Cancún', 'danny', '41', 'dos dias '),
(4, '2023-12-07', 'MXN$ 5,673', 'Grand Palladium Colo', 'angel', '37', 'una semana '),
(5, '2023-08-16', 'MXN$ 3,510', 'The Reef Playacar Re', 'juan', '20', 'una semana'),
(6, '2023-06-28', 'MXN$ 11,178', 'Hotel Xcaret Arte – ', 'jose esteban', '28', '5 dias'),
(7, '0000-00-00', 'MXN$ 7,395', 'Paradisus Playa del ', 'yahaira', '22', '4 dias'),
(8, '2023-08-24', 'MXN$ 4,710', 'Grand Riviera Prince', 'alberto', '29', '8 dias'),
(9, '0000-00-00', 'MXN$ 1,253', 'California Hotel and', 'arturo', '39', '15 dias'),
(10, '2023-07-18', 'MXN$ 409', 'OYO Hotel and Casino', 'juan', '49', '1 dia'),
(11, '2023-10-12', 'MXN$ 4,181', 'Kimpton Hotel Paloma', 'julian', '26', '5 dias'),
(12, '2023-11-09', 'MXN$ 4,593', 'Riu Plaza Manhattan ', 'Angel Eduardo', '39', '8 dias'),
(13, '2023-09-20', 'MXN$ 6,231', 'Riu Plaza Miami Beac', 'antonio', '22', '4 dias'),
(14, '2023-09-15', 'MXN$ 3,288', 'Wyndham Grand Orland', 'ruben', '26', 'una semana '),
(15, '2023-06-29', 'MXN$ 58,590', 'APA Hotel Sugamo Eki', 'Joseph', '16', '15 dias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugares para viajar`
--

CREATE TABLE `lugares para viajar` (
  `IDlugar` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `precio` varchar(12) NOT NULL,
  `destino` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `lugares para viajar`
--

INSERT INTO `lugares para viajar` (`IDlugar`, `fecha`, `precio`, `destino`, `nombre`, `apellido`) VALUES
(1, '2023-03-22', 'MXN$2,957', 'Cancún', 'Jose Luis', 'castro villalva'),
(3, '2023-03-31', 'MXN$7,449', 'Riviera Maya', 'Luis', 'Castro molina'),
(4, '2023-03-26', 'MXN$8,297', ' Playa del Carmen', 'Angel Eduardo', 'Revilla gaxiola'),
(5, '2023-04-17', 'MXN$5,099', 'Cozumel', 'antonio', 'meza castro'),
(6, '2023-06-16', 'MXN$3,852', 'Tulum', 'manuel', 'castro'),
(7, '2023-07-13', 'MXN$6,732', 'Isla Mujeres', 'danny', 'castaneda'),
(8, '2023-08-17', 'MXN$4,223', 'Puerto Morelos', 'yahaira', 'inzunza'),
(9, '2023-03-11', 'MXN$5,463', 'Bacalar', 'jose esteban', 'garcia'),
(10, '2023-09-07', 'MXN$4,469', 'Acapulco', 'arturo', 'hernandez'),
(11, '2023-06-16', 'MXN$6,711', 'Cabo San Lucas', 'alberto', 'perez gonzales'),
(12, '2023-06-29', 'MXN$ 14,944', 'Toronto', 'Joseph Eloir', 'Meza castañeda'),
(13, '2023-06-21', 'MXN$ 14,709', 'Vuelos a Madrid', 'angel', 'martinez'),
(14, '2023-10-24', 'MXN$ 2,754', 'Tijuana', 'juan', 'ibañez'),
(15, '2023-08-17', 'MXN$ 2,620', 'Mazatlán', 'juan', 'sanchez'),
(16, '2023-03-16', 'MXN$ 15,811', 'París', 'Luis', 'meza castañeda');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`IDhotel`);

--
-- Indices de la tabla `lugares para viajar`
--
ALTER TABLE `lugares para viajar`
  ADD PRIMARY KEY (`IDlugar`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `IDhotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `lugares para viajar`
--
ALTER TABLE `lugares para viajar`
  MODIFY `IDlugar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
