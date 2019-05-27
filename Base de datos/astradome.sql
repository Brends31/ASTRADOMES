-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-05-2019 a las 19:19:38
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `astradome`
--

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `Acceso_Administrador`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Acceso_Administrador` (IN `usuario` VARCHAR(200))  NO SQL
UPDATE USUARIOS U
SET U.tipoUsuario = 'Administrador' WHERE U.usuario = usuario$$

DROP PROCEDURE IF EXISTS `Acceso_Usuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Acceso_Usuario` (IN `usuario` VARCHAR(200))  NO SQL
UPDATE USUARIOS U
SET U.tipoUsuario = 'Usuario' WHERE U.usuario = usuario$$

DROP PROCEDURE IF EXISTS `Actualizar_Apellido`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Actualizar_Apellido` (IN `nombreUsuario` VARCHAR(200), IN `nuevoApellido` VARCHAR(200))  NO SQL
UPDATE USUARIOS U SET U.apellidos = nuevoApellido
WHERE U.usuario = nombreUsuario$$

DROP PROCEDURE IF EXISTS `Actualizar_Contrasenna`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Actualizar_Contrasenna` (IN `nombreUsuario` VARCHAR(200), IN `nuevaContrasenna` VARCHAR(1000))  NO SQL
UPDATE USUARIOS U SET U.contrasenna = nuevaContrasenna 
WHERE U.usuario = nombreUsuario$$

DROP PROCEDURE IF EXISTS `Actualizar_Correo`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Actualizar_Correo` (IN `nombreUsuario` VARCHAR(200), IN `nuevoCorreo` VARCHAR(200))  NO SQL
UPDATE USUARIOS U SET U.email = nuevoCorreo 
WHERE U.usuario = nombreUsuario$$

DROP PROCEDURE IF EXISTS `Actualizar_Nombre`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Actualizar_Nombre` (IN `nombreUsuario` VARCHAR(200), IN `nuevoNombre` VARCHAR(200))  NO SQL
UPDATE USUARIOS U SET U.nombre = nuevoNombre
WHERE U.usuario = nombreUsuario$$

DROP PROCEDURE IF EXISTS `Actualizar_Usuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Actualizar_Usuario` (IN `nombreUsuario` VARCHAR(200), IN `nuevoUsuario` VARCHAR(200))  NO SQL
UPDATE USUARIOS U SET U.usuario = nuevoUsuario 
WHERE U.usuario = nombreUsuario$$

DROP PROCEDURE IF EXISTS `Agregar_Actividad`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Agregar_Actividad` (IN `titulo` VARCHAR(100), IN `descripcion` VARCHAR(1000), IN `rutaImagen` VARCHAR(200), IN `fecha` VARCHAR(200))  INSERT INTO actividades (titulo, descripcion, rutaImagen, fecha)
VALUES(titulo, descripcion,rutaImagen, fecha)$$

DROP PROCEDURE IF EXISTS `Agregar_Documento`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Agregar_Documento` (IN `titulo` VARCHAR(500), IN `descripcion` VARCHAR(200), IN `enlace` VARCHAR(100), IN `fecha` VARCHAR(200))  INSERT INTO documentos_ley (titulo, descripcion, enlace, fecha)
VALUES(titulo, descripcion, enlace, fecha)$$

DROP PROCEDURE IF EXISTS `Agregar_FAQ`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Agregar_FAQ` (IN `Pregunta` VARCHAR(200), IN `Respuesta` VARCHAR(500))  INSERT INTO faq (pregunta, respuesta)
VALUES (Pregunta, Respuesta)$$

DROP PROCEDURE IF EXISTS `Agregar_Imagen`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Agregar_Imagen` (IN `rutaImagen` VARCHAR(100))  Insert into galeria(rutaImagen)
values(rutaImagen)$$

DROP PROCEDURE IF EXISTS `Agregar_Noticia`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Agregar_Noticia` (IN `titulo` VARCHAR(100), IN `descripcion` VARCHAR(500), IN `enlace` VARCHAR(1000), IN `rutaImagen` VARCHAR(1000), IN `fecha` VARCHAR(200))  INSERT INTO noticias (titulo, descripcion, enlace, rutaImagen, fecha)
VALUES(titulo, descripcion, enlace, rutaImagen, fecha)$$

DROP PROCEDURE IF EXISTS `Agregar_Usuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Agregar_Usuario` (IN `nombreUsuario` VARCHAR(100), IN `emailUsuario` VARCHAR(100), IN `contrasennaUsuario` VARCHAR(1000), IN `usuarioNombre` VARCHAR(100), IN `apellidosUsuario` VARCHAR(100))  INSERT INTO USUARIOS(usuario, contrasenna, nombre, apellidos, tipoUsuario, estado, email)
	values (nombreUsuario, contrasennaUsuario, usuarioNombre, apellidosUsuario, 'Usuario', '1', emailUsuario)$$

DROP PROCEDURE IF EXISTS `Cambiar_contrasenna`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Cambiar_contrasenna` (IN `usuario` VARCHAR(100), IN `contrasenna` VARCHAR(100))  UPDATE USUARIOS U
SET U.contrasenna = contrasenna WHERE U.usuario = usuario$$

DROP PROCEDURE IF EXISTS `Deshabilitar_Usuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Deshabilitar_Usuario` (IN `usuario` VARCHAR(100))  UPDATE USUARIOS U
SET U.estado = false WHERE U.usuario = usuario$$

DROP PROCEDURE IF EXISTS `Eliminar_Actividad`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Eliminar_Actividad` (IN `nombre` VARCHAR(100))  delete from actividades where titulo=nombre$$

DROP PROCEDURE IF EXISTS `Eliminar_Documento`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Eliminar_Documento` (IN `nombre` VARCHAR(100))  DELETE FROM documentos_ley  where titulo = nombre$$

DROP PROCEDURE IF EXISTS `Eliminar_Imagen`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Eliminar_Imagen` (IN `path` VARCHAR(200))  DELETE FROM galeria  where rutaImagen = path$$

DROP PROCEDURE IF EXISTS `Eliminar_Noticia`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Eliminar_Noticia` (IN `nombre` VARCHAR(100))  DELETE FROM noticias  where titulo = nombre$$

DROP PROCEDURE IF EXISTS `Eliminar_Pregunta`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Eliminar_Pregunta` (IN `nombre` INT)  DELETE FROM faq  where id = nombre$$

DROP PROCEDURE IF EXISTS `Eliminar_Usuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Eliminar_Usuario` (IN `usuario_a_eliminar` VARCHAR(100))  DELETE FROM Usuarios 
WHERE usuario=usuario_a_eliminar$$

DROP PROCEDURE IF EXISTS `Habilitar_Usuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Habilitar_Usuario` (IN `usuario` VARCHAR(100))  UPDATE USUARIOS U
SET U.estado = true WHERE U.usuario = usuario$$

DROP PROCEDURE IF EXISTS `Obtener_Actividades`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Obtener_Actividades` ()  NO SQL
SELECT A.titulo, A.descripcion,A.fecha, A.rutaImagen
FROM ACTIVIDADES A$$

DROP PROCEDURE IF EXISTS `Obtener_Datos_Usuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Obtener_Datos_Usuario` (IN `nombreUsuario` VARCHAR(200))  NO SQL
SELECT U.usuario, U.email, U.nombre, U.apellidos FROM USUARIOS U 
WHERE U.usuario = nombreUsuario$$

DROP PROCEDURE IF EXISTS `Obtener_Documentos`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Obtener_Documentos` ()  NO SQL
SELECT D.titulo, D.descripcion, D.enlace, D.fecha FROM documentos_ley D$$

DROP PROCEDURE IF EXISTS `Obtener_FAQ`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Obtener_FAQ` ()  SELECT F.pregunta,F.respuesta, F.id
FROM FAQ F$$

DROP PROCEDURE IF EXISTS `Obtener_Galeria`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Obtener_Galeria` ()  SELECT G.rutaImagen
FROM Galeria G$$

DROP PROCEDURE IF EXISTS `Obtener_Noticias`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Obtener_Noticias` ()  SELECT N.titulo, N.descripcion,N.fecha, N.rutaImagen, N.enlace
FROM NOTICIAS N$$

DROP PROCEDURE IF EXISTS `Obtener_Usuarios`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Obtener_Usuarios` ()  SELECT U.usuario, U.nombre, U.apellidos, U.tipoUsuario, U.estado
FROM Usuarios U$$

DROP PROCEDURE IF EXISTS `Obtener_Usuarios_Desde_Administrador`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `Obtener_Usuarios_Desde_Administrador` ()  SELECT U.usuario, U.nombre, U.primerApellido, U.tipoUsuario, U.estado
FROM USUARIOS U$$

--
-- Funciones
--
DROP FUNCTION IF EXISTS `Obtener_Contrasenna`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `Obtener_Contrasenna` (`nombreUsuario` VARCHAR(200)) RETURNS VARCHAR(1000) CHARSET latin1 NO SQL
BEGIN
	DECLARE resultado VARCHAR(1000);

	SELECT u.contrasenna INTO resultado 
    FROM  usuarios u
    WHERE u.usuario = nombreUsuario;

	RETURN resultado;

END$$

DROP FUNCTION IF EXISTS `Obtener_Tipo_Usuario`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `Obtener_Tipo_Usuario` (`nombreUsuario` VARCHAR(200)) RETURNS VARCHAR(200) CHARSET latin1 NO SQL
BEGIN
	DECLARE resultado VARCHAR(1000);

	SELECT u.tipoUsuario INTO resultado 
    FROM  usuarios u
    WHERE u.usuario = nombreUsuario;

	RETURN resultado;

END$$

DROP FUNCTION IF EXISTS `Usuario_Activo`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `Usuario_Activo` (`nombreUsuario` VARCHAR(200)) RETURNS INT(30) NO SQL
BEGIN
	DECLARE resultado VARCHAR(1000);

	SELECT u.estado INTO resultado 
    FROM  usuarios u
    WHERE u.usuario = nombreUsuario;

	RETURN resultado;

END$$

DROP FUNCTION IF EXISTS `Validar_Email`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `Validar_Email` (`email_Usuario` VARCHAR(200)) RETURNS INT(30) NO SQL
BEGIN

	DECLARE disponible INT(1);
    DECLARE check_disponible INT(1);
    
    SELECT count(1) INTO check_disponible 
	FROM  usuarios u          
	WHERE u.email =  email_Usuario;
    
	IF check_disponible = 0 THEN SET disponible  = 1;  
    
	ELSE SET disponible = 0;
	
    END IF;

	RETURN disponible;

END$$

DROP FUNCTION IF EXISTS `Validar_Usuario`$$
CREATE DEFINER=`root`@`localhost` FUNCTION `Validar_Usuario` (`nombreUsuario` VARCHAR(200)) RETURNS INT(30) NO SQL
BEGIN

	DECLARE disponible INT(1);
    DECLARE check_disponible INT(1);
    
    SELECT count(1) INTO check_disponible 
	FROM  usuarios u          
	WHERE u.usuario =  nombreUsuario;
    
	IF check_disponible = 0 THEN SET disponible  = 1;  
    
	ELSE SET disponible = 0;
	
    END IF;

	RETURN disponible;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

DROP TABLE IF EXISTS `actividades`;
CREATE TABLE IF NOT EXISTS `actividades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `rutaImagen` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `titulo`, `descripcion`, `fecha`, `rutaImagen`) VALUES
(1, 'Bingo Caritativo', 'Te invitamos a participar de nuestro bingo caritativo a benefico de nuestra organización, se llevará a cabo el dia 15 de diciembre a partir de la 1 pm, te esperamos.', '5/11/18', 'assets/images/actividades/bingo.jpg'),
(2, 'Reunión Extraordinaria', 'El día 30 de noviembre se llevará a cabo la próxima reunión extraordinaria de nuestra organizacion, en donde se discutirán temas relevates para nuestra comunidad.', '5/11/18', 'assets/images/actividades/reunion.jpg'),
(3, 'Taller de costura', 'Los días 5, 6 y 7 de diciembre se llevará a cabo un teller de costura en nuestras instalaciones, para inscribirse se debe llenar un formulario en nuestra oficina', '5/11/18', 'assets/images/actividades/taller_costura.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_ley`
--

DROP TABLE IF EXISTS `documentos_ley`;
CREATE TABLE IF NOT EXISTS `documentos_ley` (
  `numeroDocumento` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `enlace` varchar(200) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  PRIMARY KEY (`numeroDocumento`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentos_ley`
--

INSERT INTO `documentos_ley` (`numeroDocumento`, `titulo`, `descripcion`, `enlace`, `fecha`) VALUES
(1, 'Las leyes sobre trabajo doméstico ', 'En un trabajo anterior (Pereira y Valiente, 2007) estudiamos las leyes laborales que regulaban el empleo doméstico en los Estados del Mercosur ampliado, analizando sus estándares y su grado de igualdad con las normas que se aplicaban en cada país al resto de los trabajadores y trabajadoras. ', 'https://www.ilo.org/wcmsp5/groups/public/---ed_protect/---protrav/---migrant/documents/publication/wcms_476105.pdf', '5/11/18'),
(2, 'Ministerio de Trabajo: Trabajo\r\nDoméstico', 'Es la persona trabajadora que brinda asistencia y bienestar a una familia o persona, en forma remunerada; sus labores incluyen limpieza, cocina, lavado, planchado y demás labores propias de un hogar, residencia o habitación particular, que no generan lucro para la persona empleadora.', 'http://www.mtss.go.cr/temas-laborales/04_Trabajo_Domestico_ind.pdf', '5/11/18'),
(3, 'Manual de buenas prácticas para trabajadoras y empleadoras', 'Este manual intenta dar respuesta a la necesidad de información que tanto empleadoras como trabajadoras han manifestado en los distintos servicios de atención y consulta que funcionan en nuestro país. Existe una falta de conocimiento de la normativa legal vigente', 'https://www.ilo.org/wcmsp5/groups/public/---americas/---ro-lima/---sro-santiago/documents/publication/wcms_219955.pdf', '5/11/18'),
(4, 'Trabajo doméstico: un largo camino hacia el trabajo decente', 'El trabajo doméstico representa hoy en día una parte importante de la fuerza laboral, especialmente en los países en vías de desarrollo. En efecto, el número de trabajadoras domésticas en el mundo ha aumentado a más de 100 millones, de los cuales cerca de 14 millones son mujeres latinoamericanas, y se proyecta que esta tendencia seguirá aumentando en el futuro.', 'http://www.oit.org/wcmsp5/groups/public/---americas/---ro-lima/---sro-santiago/documents/publication/wcms_180549.pdf', '5/11/18'),
(5, 'El trabajo doméstico Análisis crítico', 'Se conoce como “trabajo doméstico” a todas las actividades o labores cuya realización está relacionada con el servicio, mantenimiento, apoyo, asistencia o aseo, inherentes o propios de una vivienda particular; entre algunos ejemplos podemos mencionar: lavar tanto los utensilios de cocina utilizados por los integrantes de la familia como las prendas de vestir.', 'http://132.248.9.34/hevila/Alegatos/2014/no87/5.pdf', '5/11/18'),
(6, 'Concepto de derechos de los trabajadores domésticos', 'El derecho del trabajo es una realidad cuyas normas, conceptos e instituciones surgen a raíz de la primera Revolución Industrial, durante la época conocida como Edad Contemporánea. A partir de la formalización de su existencia, diversos Estados soberanos consideraron la importancia de regular principios e instituciones que hoy día se califican como laborales.', 'https://archivos.juridicas.unam.mx/www/bjv/libros/1/78/tc.pdf', '5/11/18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Pregunta` varchar(200) NOT NULL,
  `Respuesta` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `faq`
--

INSERT INTO `faq` (`id`, `Pregunta`, `Respuesta`) VALUES
(2, '¿Cuál es el salario mínimo para una trabajadora doméstica?', 'El salario mínimo está fijado por el ministerio del trabajo y es revisado cada 6 meses.\r\n\r\nPara el segundo semestre del 2010 es de 128.527 colones. El salario mensual no incluye la dormida y la comida. Esto constituye salario en especie por un 50 % más respecto del salario mínimo.'),
(3, '¿Cuánto es la jornada laboral de una trabajadora doméstica?', 'A partir del 23 de julio del 2009, saliá publicado en la Gaceta, que, al igual que los demás trabajadores, la jornada es 8 horas diarias y 48 horas por semana. Lo más que se puede trabajar extra sin que sea una doble jornada, son tres horas mas por día, que deben pagarse a un valor de tiempo y medio por hora extra.'),
(4, '¿Cuándo es un despido sin responsabilidad patronal?', 'Ejemplo #1: tres faltas consecutivas sin avisar y sin estar enferma.\r\nEjemplo #2: si se demuestra que la o el trabajador ha robado.\r\n\r\n'),
(5, '¿Dirección?', 'De Plaza Cristal, 125 metros este y 25 norte, Curridabat San José, Costa Rica.'),
(6, '¿Teléfono?', '2280-1646'),
(7, '¿Dirección de correo electrónico?', 'astradom@racsa.co.cr '),
(8, '¿Horario de atención?', 'De lunes a viernes de 8:30am - 4:00 pm.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

DROP TABLE IF EXISTS `galeria`;
CREATE TABLE IF NOT EXISTS `galeria` (
  `rutaImagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`rutaImagen`) VALUES
('assets/images/galeria/1.jpg'),
('assets/images/galeria/2.jpg'),
('assets/images/galeria/3.jpg'),
('assets/images/galeria/4.jpg'),
('assets/images/galeria/5.jpg'),
('assets/images/galeria/6.jpg'),
('assets/images/galeria/7.jpg\r\n'),
('assets/images/galeria/8.jpg\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `rutaImagen` varchar(1000) NOT NULL,
  `enlace` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `fecha`, `rutaImagen`, `enlace`) VALUES
(1, 'CCSS facilita a los patronos asegurar a sus domésticas', 'La Caja Costarricense de Seguro Social (CCSS) facilitará a los patronos el aseguramiento de sus empleadas domésticas al bajar a la mitad la base mínima contributiva que se toma como referencia para cobrar las cargas sociales.', '22/6/16', 'assets/images/noticias/2.jpg', 'https://www.nacion.com/el-pais/trabajo/ccss-facilita-a-los-patronos-asegurar-a-sus-domesticas/QJZFJDUKYBDJNGVLSR4HD4JHVI/story/'),
(2, 'María Rosales, empleada doméstica', 'María Rosales trabaja como empleada doméstica desde que era una niña. Empezó a los 11 años, como la única salida que encontró para escapar del matrimonio al que su papá quería someterla.', '5/6/17', 'assets/images/noticias/1.jpg', 'https://www.nacion.com/el-pais/trabajo/maria-rosales-empleada-domestica-yo-no-sabia-nada-porque-venia-del-campo-que-me-iba-a-poner-a-exigir-seguro/LE4L4POIRJE7RL4HXPWWHVOEQI/story/'),
(3, 'Conocer las necesidades del hogar', 'Abrir las puertas del hogar a un trabajador puede significar un reto para una persona que quiera contratar a una empleada doméstica, hay que asesorarse y tener claras las funciones del trabajador.', '27/1/14', 'assets/images/noticias/3.jpg', 'https://www.nacion.com/economia/consumo/conocer-necesidades-del-hogar-ayuda-al-contratar-empleada-domestica/XR74EVT44FEBBLLD3DJZ2PYBZQ/story/'),
(6, 'Prueba de noticia', 'algun texto que vaya ahi ', '14/05/19', 'assets/images/noticias/3838063965cdafb30a5827.jpg', 'http://www.repretel.com/actualidad/151033?fbclid=IwAR19D4gPSPh23GnC9zHqIacwTg0NgzGCHd9us8bHLAeZl3ruiOWiJxeH_Oc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_Usuario` int(100) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(200) NOT NULL,
  `contrasenna` varchar(1000) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `tipoUsuario` varchar(50) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_Usuario`, `usuario`, `contrasenna`, `nombre`, `apellidos`, `tipoUsuario`, `estado`, `email`) VALUES
(2, 'Steven09', '$2y$10$NlTlBNTwWGtw1fxU8zMDkePR5C2HclkEaKh77EsNKZxhW/UAROt9G', 'Steven', 'Paniagua Aguilar', 'Administrador', 1, 'steven09@gmail.com'),
(3, 'Andres98', '$2y$10$p5e5injnKoEzi/ulSbZX4OPH5gMufpL4lgKlvzSxAAmJypEQxU4JS', 'Andre', 'Brenes Maleaño', 'Usuario', 1, 'andres98@gmail.com'),
(4, 'Gerardo78', '$2y$10$v592YdesxRu3eT6lRc7gaOwS.0RlP6iAJn4MhWkBsc49MI9atpqKK', 'Gerardo', 'Villalobos Villalobos', 'Usuario', 1, 'gerarado78@gmail.com'),
(5, 'Andre88', '$2y$10$IJiu50n0nxLac4PMFnxKSep/1ktfnXzsT.YRsu6lGWdjQQjtagm7C', 'Andre', 'Corrales Méndez', 'Usuario', 1, 'andre88@gmail.com'),
(6, 'aobm98', '$2y$10$85IePvoxpce/B3qhIXZAbeDa1yEPbdvdXbxv2L8grtwju1AfoOiDu', 'Andres', 'Brenes', 'Usuario', 1, 'aobm98@gmail.com'),
(7, 'jorgebv02', '$2y$10$Oyft4OkV0dMFfs0Bw6w8ROEuGjoyvLLg0JaWsIKc6GBvPfGwvybdC', 'Jorge', 'Barquero Villalobos', 'Administrador', 1, 'jorgebv02@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
