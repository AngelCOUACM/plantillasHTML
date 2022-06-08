-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-02-2013 a las 22:37:22
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `noticiero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentario` int(11) NOT NULL AUTO_INCREMENT,
  `id_noticia` int(11) NOT NULL,
  `texto` text NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  PRIMARY KEY (`id_comentario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_noticia`, `texto`, `nombre`, `fecha`) VALUES
(1, 1, 'Hola como estan esta es un mensaje enviado como el administrador del sitio web', 'administrador ', '28-Nov-2012-A las 08:14:14'),
(2, 1, 'Este es otro mensaje enviado como un usuario simple que entra al sitio ', 'webmaster ', '28-Nov-2012-A las 08:14:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `texto` text NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `descripcion`, `texto`, `fecha`, `imagen`) VALUES
(1, 'Que puedo hacer con este sistema de noticias en mi web', 'Bueno si te haces esta pregunta es porque quizas no te interece el tema, pero como mensionamos en una entrada anterior esto lo hacemos solo por aprender a manejar de una forma basica y facil el lenguaje de programacion php y mysql.', 'Si te fijas en esta nueva noticia podras ver que es la noticia numero 2 y por lo tanto no tiene los mismo comentarios que tiene la primera algo que es muy importante de aprender a manejar en php ya que es muy utilizado en diversos sitios web. <br />\r\n<br />\r\nSi no saves php ni mysql y quieres aprender solo sigue este tutorial paso a paso y veras que poquito a poco podras manejarlo de una forma basica y sin muchas complicaciones. Lo importante es empezar luego que sepas lo basico ya podrias ir pensando en algo mas avanzado.<br />\r\n<br />\r\nComo siempre te remito a que si no has seguido nuestro tutorial de noticias con php en www.comocrearmiweb.com entonces es hora de que te desidas y empieses a leerlo paso a paso, porque no es bueno irse a lo mas avanzado sin saver lo mas basico, por ejemplo si tienes ambre no puedes comerte todo de un solo bocado, para hacerlo tienes que empezar chin a chin y asi mismo son los lenguajes de programacion para poder entenderlo tienes que empezar por lo mas insignificante hasta llegar a lo mas avanzado.<br />\r\n<br />\r\nPor eso este tutorial de programacion con php y mysql para que puedas aprender lo basico de estos lenguajes.<br />\r\n<br />\r\nCuando descargue el escript esta informacion bendra por defecto en el archivo sql de base de datos es solo para que veas que todo marcha bien tambien agregare 2 comentario por cada noticia uno de un usuario normal y otro del administrador. <br />\r\n<br />\r\nYa cave de mas recordarte los datos de administrador que son admin@hotmail.com y la clave admin', '28-Nov-2012-A las 08:11:39', ''),
(3, 'Bienvenidos a este sistema de noticias creado paso a paso.', 'Gracias por estar siguiente nuestro sistema de noticias, aunque sabemos que es muy basico pero creo que tiene las bases para lanzarnos a montar uno mas avanzado y sin menos complicaciones.', 'Como hemos visto en las entradas anteriores ya hemos creado una pagina en html algo normal y con muy poco diseÃ±o pero bueno al gusto de ustedes esta el diseÃ±o esto es mas bien una practica para ir aprendiendo lo basico de php, Ya que es un lenguaje de programacion web que dia a dia va ocupando y ganando mas terreno en el mundo de la programacion de sitios web dinamicos o profesionales.<br />\r\n<br />\r\nEn las proximas entradas vamos haber como borrar dichas noticias y como editarla, para no complicarlos tanto como mensione en el blog www.comocrearmiweb.com vamos facilitarle un link donde podran disponer de los archivos y hacerles las modificaciones que ustedes quieran.<br />\r\n<br />\r\nY te preguntaras si llegaste a este sitio y esto bueno si no saves estamos creando una pagina de publicacion de noticias utilizando php y mysql, en la cual hemos empezado desde el primer codigo hasta el ultimo.<br />\r\n<br />\r\nPara seguir probando el sistema pueden pulsar siguiente para ver como esta funcionando todo y tambien prueben con la session serrada para ver hasta donde estan limitados.', '28-Nov-2012-A las 08:03:40', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(50) NOT NULL,
  `nivel` varchar(2) NOT NULL,
  PRIMARY KEY (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nombre`, `apellido`, `correo`, `clave`, `nivel`) VALUES
(1, 'administrador', '', 'admin@hotmail.com', 'admin', '2'),
(2, 'webmaster', '', 'master@hotmail.com', 'master', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
