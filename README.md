# Listado_LoginRegistro
## Configuración
### Para Conectar con la Base de Datos, se debe modificar el archivo:
### REPOSITORIO\config.php

```php
<?php
ob_start();
session_start();

//set timezone
date_default_timezone_set('America/Santiago');

//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','appweb');

$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>

```

## Script
### Base de Datos MYSQL

```sql
-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2018 a las 04:30:16
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `appweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `infosalud`
--

CREATE TABLE `infosalud` (
  `idInfosalud` int(10) UNSIGNED NOT NULL,
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `Peso` int(3) NOT NULL,
  `Altura` int(3) NOT NULL,
  `Imc` double NOT NULL,
  `Tmb` double NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `infosalud`
--

INSERT INTO `infosalud` (`idInfosalud`, `idUsuario`, `Peso`, `Altura`, `Imc`, `Tmb`, `Fecha`) VALUES
(12, 6, 12, 111, 0.99, 0, '2018-12-17 01:20:25'),
(13, 6, 12, 123, 7.9317866349395, 0, '2018-12-17 01:21:04'),
(14, 6, 95, 160, 37.109375, 0.0037109375, '2018-12-17 01:25:19'),
(15, 6, 95, 160, 37.109375, 37.109375, '2018-12-17 01:36:17'),
(16, 6, 99, 160, 38.671875, 894.9, '2018-12-17 01:37:00'),
(17, 6, 90, 90, 111.11111111111, 456.5, '2018-12-17 01:39:41'),
(18, 19, 98, 156, 40.269559500329, 989.8, '2018-12-17 03:15:27'),
(19, 19, 98, 175, 32, 1108.55, '2018-12-17 03:15:49'),
(20, 19, 95, 159, 37.577627467268, 1008.25, '2018-12-17 03:16:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(10) UNSIGNED NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Rut` varchar(9) NOT NULL,
  `Nacimiento` date NOT NULL,
  `Telefono` int(9) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Contrasena` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Nombre`, `Apellido`, `Rut`, `Nacimiento`, `Telefono`, `Correo`, `Contrasena`) VALUES
(2, 'Eduardo', 'Lynch', '23487829', '2018-12-03', 912345678, 'eduardolynch94@gmail.com', '23487829'),
(6, 'Eduardo', 'Lynch', '23487829', '1994-09-22', 912345678, 'ab@ab.ab', '123456'),
(7, 'Eduardo', 'Lynch', '23487829', '2018-12-04', 912345678, 'eduardol34@gmail.com', '123123123'),
(19, 'Cristina', 'Sanchez', '23487829', '2018-11-13', 912345678, 'kiki.chrisan@gmail.com', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `infosalud`
--
ALTER TABLE `infosalud`
  ADD PRIMARY KEY (`idInfosalud`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `Correo` (`Correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `infosalud`
--
ALTER TABLE `infosalud`
  MODIFY `idInfosalud` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```

### Eres libre de usar el Código en Tus Proyectos
### Proposito del Repositorio: Tarea de Aplicaciones web - Inacap Apoquindo
### Autor: Eduardo Lynch Araya
