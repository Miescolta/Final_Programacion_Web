-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2014 a las 08:44:29
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bartender`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coctel`
--

CREATE TABLE IF NOT EXISTS `coctel` (
`idCoctel` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `idTipo` int(11) NOT NULL,
  `preparacion` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `coctel`
--

INSERT INTO `coctel` (`idCoctel`, `Nombre`, `idTipo`, `preparacion`) VALUES
(1, 'piña colada', 1, 'Aca va todo el texto de los pasos'),
(2, 'mojito', 2, 'Aca va todo el texto de los pasos'),
(3, 'cocaina rusa', 3, 'Aca va todo el texto de los pasos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `idCoctel` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idCoctel`, `idUsuario`, `comentario`) VALUES
(1, 2, 'aca va el comentario1'),
(1, 1, 'aca va el comentario2'),
(2, 2, 'aca va el comentario3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `idCoctel` int(11) NOT NULL,
`idProducto` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidadPorCoctel` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idCoctel`, `idProducto`, `nombre`, `precio`, `cantidadPorCoctel`) VALUES
(2, 1, 'piña', 2000, 1),
(2, 2, 'vodka', 14000, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguidores`
--

CREATE TABLE IF NOT EXISTS `seguidores` (
  `idUsuario` int(11) NOT NULL,
  `idUsuarioSeguido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seguidores`
--

INSERT INTO `seguidores` (`idUsuario`, `idUsuarioSeguido`) VALUES
(1, 2),
(2, 3),
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
`idTipo` int(11) NOT NULL,
  `Nombre` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`idTipo`, `Nombre`) VALUES
(1, 'tipo1'),
(2, 'tipo2'),
(3, 'tipo3'),
(4, 'tipo4'),
(5, 'tipo5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idUsuario` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `Correo` text NOT NULL,
  `Contrasena` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Nombre`, `Apellido`, `Correo`, `Contrasena`) VALUES
(1, 'Usuario1', 'Apellido1', 'correo@hotmail.com', '123'),
(2, 'usuario2', 'apellido2', 'correo2@hotmail.com', '456'),
(3, 'usuario3', 'apellido3', 'correo3@hotmail.com', '789');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariococtel`
--

CREATE TABLE IF NOT EXISTS `usuariococtel` (
  `idUsuario` int(11) NOT NULL,
`idCoctel` int(11) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idTipo` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuariococtel`
--

INSERT INTO `usuariococtel` (`idUsuario`, `idCoctel`, `puntaje`, `fecha`, `idTipo`) VALUES
(1, 1, 5, '2014-09-23', 3),
(1, 2, 3, '2014-09-24', 1),
(2, 3, 2, '2014-09-19', 2),
(1, 4, 5, '2014-05-06', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coctel`
--
ALTER TABLE `coctel`
 ADD PRIMARY KEY (`idCoctel`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
 ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
 ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `usuariococtel`
--
ALTER TABLE `usuariococtel`
 ADD PRIMARY KEY (`idCoctel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coctel`
--
ALTER TABLE `coctel`
MODIFY `idCoctel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `usuariococtel`
--
ALTER TABLE `usuariococtel`
MODIFY `idCoctel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
