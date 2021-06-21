-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2021 a las 13:35:23
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `timeproyect`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `count_status`
--

CREATE TABLE `count_status` (
  `id_statuss` int(5) NOT NULL,
  `name_status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `count_status`
--

INSERT INTO `count_status` (`id_statuss`, `name_status`) VALUES
(1, 'active'),
(2, 'inactive');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(5) NOT NULL,
  `name_rol` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `name_rol`) VALUES
(1, 'admin'),
(2, 'client');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `namee` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `user_name` varchar(25) DEFAULT NULL,
  `passwoord` varchar(100) DEFAULT NULL,
  `id_roll` int(5) DEFAULT NULL,
  `id_statusss` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `namee`, `last_name`, `email`, `user_name`, `passwoord`, `id_roll`, `id_statusss`) VALUES
(5, 'adminc', 'admin2', 'admin@adm', 'admin', 'admin', 1, 1),
(6, 'valentina', 'ramirez', 'ramirez@ramirez', 'ramirez', 'valentina', 2, 2),
(7, 'valentina', 'ramirez', 'ramirez@ramirez', 'ramirez', 'valentina', 2, 2),
(8, 'valentina', 'ramirez', 'admin@admin', 'ramirez', 'valentina', 2, 2),
(9, 'valentina', 'ramirez', 'admin@admin', 'ramirez', 'valentina', 2, 1),
(10, 'valentina', 'ramirez', 'admin@admin', 'ramirez', 'valentina', 2, 2),
(11, 'valentinaaaa', 'ramirez', 'admin@admin', 'ramirez', 'valentina', 2, 1),
(12, 'valentina', 'ramirez', 'admin@admin', 'ramirez', 'valentina', 2, 2),
(13, 'johan steven', 'rodriguez bermudez', 'johanrodriguezbermudez@gm', 'gohan', 'gohan', 2, 2),
(14, 'johan steven', 'rodriguez bermudez', 'johanrodriguezbermudez@gm', 'gohan', 'gohan', 2, 1),
(15, 'johan steven', 'rodriguez bermudez', 'johanrodriguezbermudez@gm', 'gohan', 'gohan', 2, 2),
(16, 'ivancho', 'ivan@ivan', 'ivan@ivan', 'ivan', 'ivan', 2, 1),
(17, 'liliana', 'bermudez', 'liliana@lili', 'lili', '$2y$10$H7KjE3ECSM61UucBng', 2, 2),
(18, 'lilian', 'bermudez', 'liliana@lili', 'lili', '$2y$10$xV63MJs5nrnsZmCP/e', 2, 2),
(19, 'johan ', 'rodriguez bermudez', 'johanrodriguezbermudez@gm', 'gohan', '$2y$10$ZzLQSch9Yq2arjhkuk', 2, 1),
(20, 'daniels', 'diaz', 'diaz@diaz', 'diaz', '123456', 2, 1),
(21, 'prueba', 'pruebadiez', 'prueba', 'prueba', '$2y$10$nI7E7CkfDabvczKOZp2c2uUB/aQdqEDfArm/8jHUPHrEA/kbJ7ut6', 2, 1),
(22, 'lol', 'lolitalalo', 'lolo', 'lolo', '1234568', 2, 2),
(23, 'andrea', 'del pilar', 'andre@gmail.com', 'andrea', 'andrea', 2, 2),
(24, 'marcela', 'bermudez', 'marcela@marcela', 'marce', '147852', 2, 2),
(25, 'pedro', 'perez', 'pedro@pedro', 'pedrito', 'pedro', 2, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `count_status`
--
ALTER TABLE `count_status`
  ADD PRIMARY KEY (`id_statuss`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_roll` (`id_roll`),
  ADD KEY `id_statusss` (`id_statusss`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `count_status`
--
ALTER TABLE `count_status`
  MODIFY `id_statuss` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_roll`) REFERENCES `rol` (`id_rol`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_statusss`) REFERENCES `count_status` (`id_statuss`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
