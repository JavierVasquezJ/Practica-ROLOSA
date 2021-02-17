-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2021 a las 22:22:05
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_tecnica`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `Insert_Contacto` (IN `Nombre` VARCHAR(50), IN `Correo` VARCHAR(150), IN `Telefono` VARCHAR(100), IN `Edad` VARCHAR(100), IN `Provincia` VARCHAR(25), IN `Genero` VARCHAR(25), IN `Fecha` INT(100))  NO SQL
INSERT INTO datos_personales(datos_personales.Nombre,datos_personales.Correo,datos_personales.Telefono,datos_personales.Edad,datos_personales.Provincia,datos_personales.Genero,datos_personales.Fecha)
VALUES(Nombre,Correo,Telefono,Edad,Provincia,Genero,Fecha)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Insert_Usuario` (IN `Nombre` VARCHAR(50), IN `Contraseña` INT(15))  NO SQL
INSERT INTO usuarios(usuarios.Nombre_Usuario,usuarios.Contraseña)
VALUES(Nombre,Contraseña)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Select_Contacto` ()  NO SQL
SELECT * FROM datos_personales$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Select_Usuario` (IN `Nombre` VARCHAR(50), IN `Contraseña` VARCHAR(15))  NO SQL
select COUNT(*) from usuarios
WHERE usuarios.Nombre_Usuario = Nombre AND usuarios.Contraseña = Contraseña$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE `datos_personales` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(150) NOT NULL,
  `Telefono` varchar(100) NOT NULL,
  `Edad` varchar(100) NOT NULL,
  `Provincia` varchar(25) NOT NULL,
  `Genero` varchar(25) NOT NULL,
  `Fecha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`id`, `Nombre`, `Correo`, `Telefono`, `Edad`, `Provincia`, `Genero`, `Fecha`) VALUES
(1, 'Javier Vasquez', 'javier@hotmail.com', '71412212', '31', 'Alajuela', 'Masculino', '0'),
(2, '', '', '0', '0', '', '', '0'),
(3, '', '', '', '', '', '', '0'),
(4, '', '', '', '', '', '', '0'),
(5, 'genesis', 'gene@hotmail.com', '', '18', 'Cartago', 'on', '0'),
(6, 'dani', 'dani@hotmail.com', '', '24', 'Guanacaste', 'on', '0'),
(7, 'kevin', 'kevin@hotmail.com', '45216325', '22', 'Puntarenas', 'on', '0'),
(8, 'Andrea', 'Andre@gmail.com', '89856352', '55', 'Heredia', 'Femenino', '0'),
(9, 'David', 'David@gmail.com', '85963212', '34', 'Limon', 'Femenino', '0'),
(10, 'Camila', 'cami@hotmail.com', '45125263', '33', 'Cartago', 'Femenino', '0'),
(11, 'Camilo', 'Camilo@hotmail.com', '74526323', '24', 'Limon', 'Femenino', '0'),
(12, 'Hector', 'Hector@gmail.com', '41526323', '41', 'Puntarenas', 'Femenino', '0'),
(13, 'andra vasquez', 'ande@hotmail.com', '48596323', '45', 'Heredia', 'Femenino', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre_Usuario` varchar(50) NOT NULL,
  `Contraseña` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre_Usuario`, `Contraseña`) VALUES
(1, 'javier', '1234567'),
(2, '', '0'),
(3, 'Dani', '7654321'),
(4, '', '0'),
(5, '', '0'),
(6, '', '0'),
(7, 'Kevin', '999999'),
(8, 'Fernanda', '1234567'),
(9, 'Renato', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
