-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-01-2020 a las 03:41:19
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autoresForma`
--

CREATE TABLE `autoresForma` (
  `id` int(11) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `libro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autoresForma`
--

INSERT INTO `autoresForma` (`id`, `autor`, `libro`) VALUES
(1, 'Jocko Willinck', 'Discipline Equals Freedom'),
(2, 'Joseph Mercola', 'Ketofast'),
(3, 'Jonas Salzgeber', 'The Little Book of Stoicism'),
(4, 'Dorrin Donnelly', 'Think Like a Warrior'),
(5, 'Steven Pressfield', 'Las Puertas de Fuego'),
(6, 'Ryan Holiday', 'El Obstaculo es el camino'),
(7, 'Ryan Holiday', 'El ego es el enemigo'),
(8, 'Miguel Ruiz', 'Los cuatro acuerdos'),
(9, 'Richard Bach', 'Juan Salvador Gaviota'),
(10, 'Matthieu Ricard', 'Why Meditate?'),
(11, 'Viktor Frankl', 'El hombre en busca de sentido'),
(12, 'Stefan Molineux', 'The Art of the Argument'),
(13, 'Anthony Weston', 'A Rulebook For Arguments'),
(14, 'Jordan B. Peterson', '12 Reglas para vivir'),
(15, 'Gen LaGreca', 'Noble Vision'),
(16, 'Fred Kofman', 'La revolución del sentido'),
(17, 'Fred Kofman', 'La empresa consciente'),
(18, 'Pete Blaber', 'The mission, The Men, and me'),
(19, 'Patrick Lencioni', 'Las cinco disfunciones de un equipo'),
(20, 'Greg Mckeown', 'Esencialismo'),
(21, 'Eliyahu M. Goldratt', 'The Goal');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autoresForma`
--
ALTER TABLE `autoresForma`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autoresForma`
--
ALTER TABLE `autoresForma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
