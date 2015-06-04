-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-06-2015 a las 23:40:29
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `floreria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_cliente`
--

CREATE TABLE IF NOT EXISTS `datos_cliente` (
  `Id_cliente` int(4) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(10) NOT NULL,
  `Apellido` varchar(10) NOT NULL,
  `Edad` int(3) NOT NULL,
  PRIMARY KEY (`Id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `datos_cliente`
--

INSERT INTO `datos_cliente` (`Id_cliente`, `Nombre`, `Apellido`, `Edad`) VALUES
(1, 'jesus', 'villa', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `Id_producto` int(4) NOT NULL AUTO_INCREMENT,
  `NombreP` varchar(10) NOT NULL,
  `Presio` int(4) NOT NULL,
  `Descripcion` varchar(40) NOT NULL,
  PRIMARY KEY (`Id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id_producto`, `NombreP`, `Presio`, `Descripcion`) VALUES
(1, 'Rosa', 12, 'grande');
