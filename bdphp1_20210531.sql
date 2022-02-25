-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2021 a las 19:36:18
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdphp1_20210531`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_personas`
--

CREATE TABLE `tbl_personas` (
  `id` int(11) NOT NULL,
  `doc` char(1) DEFAULT NULL,
  `nro` varchar(10) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `ape` varchar(30) DEFAULT NULL,
  `fna` date DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `dir` text DEFAULT NULL,
  `cor` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_personas`
--

INSERT INTO `tbl_personas` (`id`, `doc`, `nro`, `nom`, `ape`, `fna`, `sex`, `dir`, `cor`) VALUES
(8, 'V', '1234', 'JOSE ANTONIO', 'PEREZ', '2021-05-31', 'M', 'LA CALIFORNIA', 'JPEREZ@GMAIL.COM'),
(9, 'V', '4567', 'MARIA ISABEL', 'RODRIGUEZ', '2021-05-30', 'F', 'LOS DOS CAMINOS', 'MRODRIGUEZ@GMAIL.COM'),
(10, 'V', '5678', 'PEDRO', 'RIVAS', '2021-05-05', 'M', 'LA CALIFORNIA', 'PRIVAS@GMAIL.COM');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_personas`
--
ALTER TABLE `tbl_personas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doc` (`doc`,`nro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_personas`
--
ALTER TABLE `tbl_personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
