-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-12-2013 a las 03:59:35
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `seu_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `carreras_id_carrera` int(10) unsigned NOT NULL,
  `comunas_id_comuna` int(10) unsigned NOT NULL,
  `nom_usuario` varchar(100) DEFAULT NULL,
  `apel1_usuario` varchar(100) DEFAULT NULL,
  `apel2_usuario` varchar(100) DEFAULT NULL,
  `rut_usuario` varchar(100) DEFAULT NULL,
  `dir_usuario` varchar(100) DEFAULT NULL,
  `email_usuario` varchar(100) DEFAULT NULL,
  `cel_usuario` varchar(100) DEFAULT NULL,
  `estudios_usuario` tinyint(1) DEFAULT NULL,
  `fnac_usuario` date DEFAULT NULL,
  `genero_usuario` tinyint(1) DEFAULT NULL,
  `hijos_usuario` int(10) unsigned DEFAULT NULL,
  `pass_usuario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `usuarios_FKIndex1` (`comunas_id_comuna`),
  KEY `usuarios_FKIndex2` (`carreras_id_carrera`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `carreras_id_carrera`, `comunas_id_comuna`, `nom_usuario`, `apel1_usuario`, `apel2_usuario`, `rut_usuario`, `dir_usuario`, `email_usuario`, `cel_usuario`, `estudios_usuario`, `fnac_usuario`, `genero_usuario`, `hijos_usuario`, `pass_usuario`) VALUES
(1, 1, 2201, 'Anibal', 'Bastias', 'Soto', '16846047-3', 'Avenida Estacion 175', 'anibal.bastias@gmail.com', '81839102', 2, '1987-10-27', 0, 0, '123'),
(2, 3985, 14101, 'Camila', 'Soto', 'Moreno', '111-1', 'Los Vilos 2323', 'asdasd@asdasd.cl', '3498329483', 2, '1996-12-17', 1, 0, '202cb962ac59075b964b07152d234b70'),
(3, 1, 2201, 'admin', '', '', 'admin', '', '', '', NULL, '0000-00-00', NULL, 0, '202cb962ac59075b964b07152d234b70'),
(5, 1, 2201, 'caty', 'vignolo', 'rojas', 'caty', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '202cb962ac59075b964b07152d234b70'),
(6, 1, 2201, 'pedro', 'gonzalez', 'nunez', 'pedro', '', '', '', NULL, '0000-00-00', NULL, 0, '202cb962ac59075b964b07152d234b70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
