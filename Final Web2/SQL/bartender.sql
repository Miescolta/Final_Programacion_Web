-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 28-11-2014 a las 16:16:49
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
  `preparacion` text NOT NULL,
  `imagen` text NOT NULL,
  `descripcion` text NOT NULL,
  `ingredientes` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `coctel`
--

INSERT INTO `coctel` (`idCoctel`, `Nombre`, `idTipo`, `preparacion`, `imagen`, `descripcion`, `ingredientes`) VALUES
(1, 'Caipirinha', 2, 'Corta la lima en cuñas (no en rodajas) y quita la parte blanca de en medio (para evitar que se amargue) .\r\nMezcla la lima y el azúcar con un mortero.\r\nLlena el vaso con cubos de hielo.\r\nVierte la cachaza en el vaso. \r\nRevuelve. Sirve con una pajilla.\r\n', 'img/Caipirinha.jpg', 'Tan alegre como la samba. Tan encantadora como Copacabana. Mejor que el fútbol brasileño. La caipiriña (kaipi?ri?a) es por mucho la bebida brasileña más conocida. Es una bebida muy placentera y refrescante, y como verás, también es muy fácil de preparar.', 'Limón\r\nAzúcar blanca (3 churadas)\r\nHielo\r\nCachaça brazileño (ka-shah-sa). El auténtico caipiriña esta hecho de cachaza, pero puedes sustituirlo con ron ligero o vodka si no tienes ninguno disponible\r\n'),
(2, 'Mojito', 2, 'Añadir dos cucharadas de azúcar de caña a la copa junto con la lima (media lima) y unas ramitas de hierbabuena. A continuación, machacar hasta extraer el jugo de la lima y de la hierbabuena. Añadir hielo picado y verter cuidadosamente Ron Santa Teresa Selecto con una cuchara mezcladora. Añadir champagne y remover. Se puede decorar con una ramita de hierbabuena o con una rodaja de lima. ', 'img/mojito.jpg', 'Originario de Cuba, cuenta con millones de seguidores en todo el mundo gracias a su acertada mezcla de lima, menta y ron. Debido a ese éxito, no es extraño encontrar diversas variaciones a la receta original: Virgin Mojito, sin alcohol; English Mojito, con ginebra en lugar de ron; Dirty Mojito, con azúcar morena y ron tostado; o Mojito Royal, que se hace con Santa Teresa y que añade champagne o cava a la mezcla como toque de distinción.', '1 parte de Ron Santa Teresa Selecto\r\n1/2 lima\r\nDos cucharadas de azúcar de caña\r\nHierbabuena\r\n1 parte de champagne/cava\r\n'),
(3, 'Negroni', 1, 'Cuando llega la Navidad, los más pequeños de la casa piensan en los regalos y los más mayores en la comida que deben preparar para sus invitados. Una forma original y sencilla de empezar esas veladas es con un cocktail de aperitivo. Como el Negroni.', 'img/negroni.jpg', 'Cuando llega la Navidad, los más pequeños de la casa piensan en los regalos y los más mayores en la comida que deben preparar para sus invitados. Una forma original y sencilla de empezar esas veladas es con un cocktail de aperitivo. Como el Negroni.', '1/3 de Vermut rojo\r\n1/3 de Campari (bitter)\r\n1/3 de Ginebra\r\nUna rodaja de limón o naranja\r\n'),
(6, 'Sea Breeze', 4, 'Las cantidades varían en función del barman, aunque las especificadas anteriormente son las aceptadas por la Asociación Internacional de Barmans. En el caso que mostramos a continuación, las cantidades son iguales para el alcohol y los dos zumos: 50 ml.', 'img/seabreeze.jpg', 'El Sea Breeze nació en la época de la prohibición americana, allá por los años 20 y 30, con una receta totalmente distinta a la que tiene actualmente, ya que estaba hecho a base de ginebra y granadina.', '40 ml de vodka\r\n120 ml de zumo de arándanos\r\n30 ml de zumo de uva\r\n2 rodajas de lima\r\nHielo\r\n'),
(7, 'White Russian', 3, 'Vierte el licor de café y el vodka directamente en un vaso de whisky lleno de hielo. Y añade la nata fresca para que flote en la superficie. Remuévelo lentamente y consúmelo, con moderación, después de la cena. Si el cocktail no lleva leche, entonces se llama Black Russian.', 'img/White-Russian.jpg', 'Ideal para después de cenar, el White Russian se hizo famoso entre la gente joven porque era la bebida favorita de The Dude, el protagonista de El Gran Lebowski.', '5.0 cl de Vodka\r\n2.0 cl de licor de café\r\n3.0 cl de nata fresca (si deseas, pon leche condensada)\r\n'),
(10, 'Gin Fizz', 3, 'El Gin Fizz tambiÃ©n presenta variantes: Silver Fizz si le aÃ±adimos clara de huevo; Golden Fizz si es yema; Royal Fizz si es un huevo entero; Diamond Fizz al sustituir el agua por vino espumoso; y Green Fizz si aÃ±adimos un chorrito de crema de menta.', 'img/ginfizz.jpg', 'El Gin Fizz es relativamente similar a un viejo conocido nuestro, el Tom Collins, precisamente con la diferencia del agua carbonatada.', '4.5 cl de ginebra\r\n3 cl. de zumo de limÃ³n\r\n1 cl de almÃ­bar (azÃºcar disuelta en agua)\r\n8 cl de agua carbonatada\r\nHielo\r\n'),
(17, 'sdfsdf', 3, 'sdfsdfsd', 'img/ginfizz.jpg', 'sdfsdf', 'sdfsdf'),
(18, 'sdfsdfsd', 5, 'sdfsdfsd', 'img/ginfizz.jpg', 'sdfsdf', 'sdfsdfsd');

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
(1, 7, 'genial'),
(1, 7, 'hkjhljkh'),
(3, 7, 'gran coctel'),
(2, 7, 'me encanta el mojito'),
(10, 1, 'Muy buen coctel el Gin'),
(1, 7, 'comentario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntaje`
--

CREATE TABLE IF NOT EXISTS `puntaje` (
  `idCoctel` int(11) NOT NULL,
  `puntaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puntaje`
--

INSERT INTO `puntaje` (`idCoctel`, `puntaje`) VALUES
(2, 1),
(2, 1),
(2, 1),
(2, 1),
(3, 1),
(3, 1),
(3, 1),
(6, 1),
(6, 1),
(7, 1),
(7, 1),
(7, 1),
(7, 1),
(7, 1),
(1, 1),
(1, 1),
(2, 1),
(2, 1),
(3, 1),
(1, 1),
(1, 1),
(1, 1),
(1, 1),
(10, 1),
(10, 1),
(10, 1),
(1, 1);

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
(3, 1),
(1, 3),
(1, 7);

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
(1, 'Picante'),
(2, 'Refrescante'),
(3, 'Amargo'),
(4, 'Dulce'),
(5, 'Acido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`idUsuario` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Correo` text NOT NULL,
  `Contrasena` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Nombre`, `Correo`, `Contrasena`) VALUES
(1, 'Usuario1', 'correo@hotmail.com', '123'),
(2, 'usuario2', 'correo2@hotmail.com', '456'),
(3, 'usuario3', 'correo3@hotmail.com', '789'),
(4, 'sgsfd', 'sdfsdfs', 'sdgsdf'),
(5, 'aaaaaa', 'bbbb', '123'),
(7, 'malierjia', 'malierjia@hotmail.com', '123'),
(8, '1234', '123', '123'),
(9, '1234', '123', 'sdfdsf'),
(10, 'sdfsgfs', 'sdgsdgsdg', 'sdgsg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariococtel`
--

CREATE TABLE IF NOT EXISTS `usuariococtel` (
  `idUsuario` int(11) NOT NULL,
`idCoctel` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `idTipo` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `usuariococtel`
--

INSERT INTO `usuariococtel` (`idUsuario`, `idCoctel`, `fecha`, `idTipo`) VALUES
(1, 1, '2014-09-23', 2),
(1, 2, '2014-09-24', 2),
(2, 3, '2014-09-19', 1),
(7, 6, '2014-05-06', 4),
(7, 7, '2014-05-06', 3),
(1, 8, '2014-11-28', 3),
(1, 9, '2014-11-28', 3),
(1, 10, '2014-11-28', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coctel`
--
ALTER TABLE `coctel`
 ADD PRIMARY KEY (`idCoctel`);

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
MODIFY `idCoctel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuariococtel`
--
ALTER TABLE `usuariococtel`
MODIFY `idCoctel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
