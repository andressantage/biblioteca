-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2023 a las 01:26:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `apellido` varchar(120) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id`, `nombre`, `apellido`, `email`, `password`) VALUES
(1, 'Ximena', 'ssss', 'ximena@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `biblioteca`
--

CREATE TABLE `biblioteca` (
  `BibliotecaID` bigint(20) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `biblioteca`
--

INSERT INTO `biblioteca` (`BibliotecaID`, `Descripcion`) VALUES
(683070001001, 'BIBLIOTECA PÚBLICA MUNICIPAL DE GIRÓN'),
(683070001002, 'BIBLIOTECA PÚBLICA MUNICIPAL GABRIEL GARCÍA MARQUEZ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `ClasificacionID` varchar(100) NOT NULL,
  `Descripcion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`ClasificacionID`, `Descripcion`) VALUES
('000', 'Generalidades'),
('010', 'Bibliografía'),
('020', 'Bibliotecología y ciencias de la información'),
('030', 'Enciclopedias generales'),
('040', 'No definido'),
('050', 'Publicaciones en serie'),
('060', 'Organizaciones y museografía'),
('070', 'Periodismo, editoriales, diarios'),
('080', 'Colecciones generales'),
('090', 'Manuscritos y libros raros'),
('100', 'Filosofía y psicología'),
('110', 'Metafísica'),
('120', 'Conocimiento, causa, fin, hombre'),
('130', 'Parapsicología, ocultismo, fenómenos paranormales'),
('140', 'Escuelas filosóficas específicas'),
('150', 'Psicología'),
('160', 'Lógica'),
('170', 'Ética (filosofía moral)'),
('180', 'Filosofía antigua, medieval, oriental'),
('190', 'Filosofía moderna occidental'),
('200', 'Religión'),
('210', 'Filosofía y teoría de la religión'),
('220', 'Biblia'),
('230', 'Teología cristiana'),
('240', 'Moral y prácticas cristianas'),
('250', 'Iglesia local y órdenes religiosas'),
('260', 'Teología social y eclesiástica'),
('270', 'Historia y geografía de la iglesia cristiana'),
('280', 'Credos y sectas de la iglesia cristiana'),
('290', 'Otras religiones'),
('300', 'Ciencias sociales'),
('310', 'Estadística'),
('320', 'Ciencia política'),
('330', 'Economía'),
('340', 'Derecho'),
('350', 'Administración pública y ciencia militar'),
('360', 'Problemas y servicios sociales'),
('370', 'Educación'),
('380', 'Comercio, comunicaciones y transporte'),
('390', 'Costumbres y folklore'),
('400', 'Lenguas'),
('410', 'Lingüística'),
('420', 'Inglés e inglés antiguo'),
('430', 'Lenguas germánicas; alemán'),
('440', 'Lenguas romances; francés'),
('450', 'Italiano, rumano, rético'),
('460', 'Español y portugués'),
('470', 'Lenguas itálicas; latín'),
('480', 'Lenguas helénicas; griego clásico'),
('490', 'Otras lenguas'),
('500', 'Matemáticas y ciencias naturales'),
('510', 'Matemáticas'),
('520', 'Astronomía y ciencias afines'),
('530', 'Física'),
('540', 'Química y ciencias afines'),
('550', 'Geociencias'),
('560', 'Paleontología. paleozoología'),
('570', 'Ciencias biológicas'),
('580', 'Ciencias botánicas'),
('590', 'Ciencias zoológicas'),
('600', 'Tecnología y ciencias aplicadas'),
('610', 'Ciencias médicas'),
('620', 'Ingeniería y operaciones afines'),
('630', 'Agricultura y tecnologías afines'),
('640', 'Economía doméstica'),
('650', 'Servicios administrativos empresariales'),
('660', 'Química industrial'),
('670', 'Manufacturas'),
('680', 'Manufacturas varias'),
('690', 'Construcciones'),
('700', 'Artes'),
('710', 'Urbanismo y arquitectura del paisaje'),
('720', 'Arquitectura'),
('730', 'Artes plásticas; escultura'),
('740', 'Dibujo, artes decorativas'),
('750', 'Pintura y pinturas'),
('760', 'Artes gráficas; grabados'),
('770', 'Fotografía y fotografías'),
('780', 'Música'),
('790', 'Entretenimiento'),
('800', 'Literatura'),
('810', 'Literatura americana en inglés'),
('820', 'Literatura inglesa e inglesa antigua'),
('830', 'Literaturas germánicas'),
('840', 'Literaturas de las lenguas romances'),
('850', 'Literaturas italiana, rumana'),
('860', 'Literaturas española y portuguesa'),
('870', 'Literaturas de las lenguas itálicas'),
('880', 'Literaturas de las lenguas helénicas'),
('890', 'Literaturas de otras lenguas'),
('900', 'Historia y geografía'),
('910', 'Geografía; viajes'),
('920', 'Biografía y genealogía'),
('930', 'Historia del mundo antiguo'),
('940', 'Historia de Europa'),
('950', 'Historia de Asia'),
('960', 'Historia de África'),
('970', 'Historia de América del Norte'),
('980', 'Historia de América del Sur'),
('990', 'Historia de otras regiones'),
('A', 'Libro álbum'),
('C', 'Cuento'),
('CD', 'Colección audiovisual'),
('CL', 'Colección Literarias'),
('CP', 'Colecciones Patrimonio'),
('CR', 'Colección regional'),
('CV', 'Colección Varias'),
('DE', 'Diccionarios y enciclopedias'),
('H', 'Historieta'),
('LM', 'Leyenda y mito'),
('N', 'Novela'),
('NG', 'Novela Grafica'),
('P', 'Poesia'),
('R', 'Referencias'),
('T', 'Teatro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigobarras`
--

CREATE TABLE `codigobarras` (
  `CodigoBarrasID` int(11) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `codigobarras`
--

INSERT INTO `codigobarras` (`CodigoBarrasID`, `Descripcion`) VALUES
(0, 'No tiene codigo de barras'),
(1, 'Si tiene codigo de Barras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiqueta`
--

CREATE TABLE `etiqueta` (
  `EtiquetaID` int(11) NOT NULL,
  `Color` varchar(100) DEFAULT NULL,
  `Descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `etiqueta`
--

INSERT INTO `etiqueta` (`EtiquetaID`, `Color`, `Descripcion`) VALUES
(0, 'Amarillo', 'Niños'),
(1, 'Azul', 'Jóvenes'),
(2, 'Rojo', 'Adultos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `LibrosID` varchar(100) NOT NULL,
  `CodigoBarrasID` int(11) DEFAULT NULL,
  `Titulo` varchar(100) DEFAULT NULL,
  `Autor` varchar(100) DEFAULT NULL,
  `ClasificacionID` varchar(100) DEFAULT NULL,
  `CodigoClasificacion` varchar(100) DEFAULT NULL,
  `Codigo_Autor` varchar(100) DEFAULT NULL,
  `N_Ejemplares` int(11) DEFAULT NULL,
  `OrigenID` int(11) DEFAULT NULL,
  `N_Disponible` int(11) DEFAULT 0,
  `EtiquetaID` int(11) DEFAULT NULL,
  `BibliotecaID` bigint(20) DEFAULT NULL,
  `SalaID` int(11) DEFAULT NULL,
  `Observacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`LibrosID`, `CodigoBarrasID`, `Titulo`, `Autor`, `ClasificacionID`, `CodigoClasificacion`, `Codigo_Autor`, `N_Ejemplares`, `OrigenID`, `N_Disponible`, `EtiquetaID`, `BibliotecaID`, `SalaID`, `Observacion`) VALUES
('1080', 1, 'MAMÍFEROS DEL LLANO', 'CRISTINA URIBE EDITORES', '590', '599.098619', 'U73m', 1, 1, 1, 2, 683070001001, 1, NULL),
('8474907721', 0, 'DON QUIJOTE DE LA MANCHA', 'MIGUEL DE CERVANTES', 'CL', NULL, NULL, 1, 0, 1, 2, 683070001001, 1, NULL),
('9588089336', 0, 'FUENTE OVEJUNA / EL CABALLERO DE OLMEDO', 'LOPE DE VEGA', 'T', 'T', 'LOP3', 1, 1, 1, 1, 683070001001, 1, NULL),
('9786287555259', 1, 'PIÉLADO POÉTICO', 'RAMIRO LAGOS CASTRO', 'CV', NULL, NULL, 1, 0, 1, 2, 683070001001, 1, NULL),
('9788437608549', 1, 'CANCIONERO I', 'FRANCESCO PETRARCA', 'P', 'P', 'PET1', 1, 1, 1, 2, 683070001001, 1, 'PAGINAS SUELTAS Y DESPEGADO'),
('9788449314599', 1, 'CÓMO HABLAR CON TUS HIJOS DE LAS GROGAS Y EL ALCOHOL', 'CYNTHIA KUHN, SCOTT SWARTZWELDER Y WILKIE WILSON', '360', '363.29', 'K83c', 1, 1, 1, 2, 683070001001, 1, NULL),
('9788489784864', 1, 'OBRA POÉTICA, I PARTE DESOLACIÓN / TERNURA', 'GABRIELA MISTRAL', 'CR', 'COLECCIÓN REGIONAL', NULL, 1, 0, 1, 2, 683070001001, 1, NULL),
('9789582013073', 1, 'EL FANTASTICO MUNDO DE LOS ELEMENTOS', 'BUNPEI YORIFUJI', '540', '546.8', 'Y67f', 1, 1, 1, 1, 683070001001, 1, NULL),
('9789583202124', 1, 'SR. MININO', 'DAVID WIESNER', 'A', 'A', 'WIES', 1, 1, 1, 0, 683070001001, 2, NULL),
('9789584464439', 0, 'EL PAIS QUE SOÑAMOS', 'NUMA POMPILIO CARVAJAL NUÑEZ', 'CP', 'COLECCION PATRIMONIO', NULL, 1, 0, 1, 2, 683070001001, 1, NULL),
('9789585105461', 1, 'LA TIERRA DE EL DORADO', 'SANTIAGO PÉREZ TRIANA', 'R', NULL, NULL, 2, 1, 2, 0, 683070001001, 2, NULL),
('9789585599871', 1, 'PASIÓN VAGABUNDA', 'MANUEL ZAPATA OLIVELLA', 'C', 'C', 'ZAP2', 1, 1, 1, 2, 683070001001, 1, NULL),
('9789585667259', 1, 'MITOS DE MEMORIA DEL FUEGO', 'EDUARDO GALEANO', 'LM', 'LM', 'GAL1', 1, 1, 1, 1, 683070001001, 1, NULL),
('9789585910232', 1, 'LOS PAJAROS ', 'GERMANO ZULLO', 'C', 'C', 'ZULP', 1, 1, 1, 0, 683070001001, 2, NULL),
('9789585942998', 1, 'ELEFANTES EN EL CUARTO', 'SINDY ELEFANTE', 'NG', 'NG', 'SIN2', 1, 1, 1, 1, 683070001001, 1, 'DONADO POR EL ESTADO'),
('9789586652537', 1, 'VIRGINIA WOOLF', 'MICHÈLE GAZIER', 'H', 'H', 'GAZ1', 1, 1, 1, 1, 683070001001, 2, NULL),
('9789586654647', 1, 'EN DOCIS DIARIAS', 'ALBERTO MONTT', 'H', 'H', 'MON29', 1, 1, 1, 1, 683070001001, 1, NULL),
('9789587231458', 1, 'DICCIONARIO FILOSÓFICO', 'M. M. ROSENTAL Y P. F. LUDIN', 'DE', NULL, NULL, 1, 0, 1, 2, 683070001001, 1, NULL),
('9789588562933', 1, 'EL PINTOR DEBAJO DEL LAVAPLATOS', 'AFONSO CRUZ', 'N', 'N', 'CRU7', 1, 1, 1, 1, 683070001001, 1, NULL),
('9789588618425', 1, 'ASOMBROSOS INTENTOS DE FUGA DE UN REO IRACUNDO', 'JORGE IVÁN GALLEGO', '360', '365.6', 'G14a', 1, 1, 1, 2, 683070001001, 1, NULL),
('9789588869216', 1, 'RÉGIMEN JURÍDICO DE LAS ELECCIONES EN COLOMBIA', 'GUILLERMO MEJÍA MEJÍA', '340', '342.86107', 'M24r', 1, 1, 1, 2, 683070001001, 1, NULL),
('9789589862254', 1, 'TODO LO QUE QUIERES SABER SOBRE ADICCIONES', 'EDITORIAL CYPRES LTDA', 'R', 'R 613.8', 'G83', 1, 1, 1, 2, 683070001001, 1, NULL),
('CNMH001860', 1, 'JUGLARES DE LA MEMORIA', 'CENTRO NACIONAL DE MEMORIA HISTORICA', 'CD', '303.6098', 'J83j', 1, 1, 1, 2, 683070001001, 1, 'DVD, DONADO POR EL ESTADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `librosconsulta`
--

CREATE TABLE `librosconsulta` (
  `LibrosConsultaID` int(11) NOT NULL,
  `LibrosID` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origen`
--

CREATE TABLE `origen` (
  `OrigenID` int(11) NOT NULL,
  `Donado_por` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `origen`
--

INSERT INTO `origen` (`OrigenID`, `Donado_por`) VALUES
(0, 'No se sabe'),
(1, 'Estado'),
(2, 'Particular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamos`
--

CREATE TABLE `prestamos` (
  `PrestamosID` int(11) NOT NULL,
  `LibrosID` varchar(100) DEFAULT NULL,
  `UsuariosID` varchar(100) DEFAULT NULL,
  `Fecha_Prestamo` int(11) DEFAULT NULL,
  `Fecha_Limite` int(11) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL,
  `Obervacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `SalaID` int(11) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`SalaID`, `Descripcion`) VALUES
(1, 'Sala General'),
(2, 'Sala Ludoteca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuariosID` varchar(100) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellido` varchar(100) DEFAULT NULL,
  `Correo` int(11) DEFAULT NULL,
  `Cedula` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`UsuariosID`, `Nombre`, `Apellido`, `Correo`, `Cedula`) VALUES
('232323', 'Cesar', 'Santana', 0, '43'),
('23232323', 'Juan', 'Garcia', NULL, '223'),
('23234345', 'Luis', 'Mantilla', 0, '23'),
('343434', '1', '1', 1, '4');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `biblioteca`
--
ALTER TABLE `biblioteca`
  ADD PRIMARY KEY (`BibliotecaID`);

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`ClasificacionID`);

--
-- Indices de la tabla `codigobarras`
--
ALTER TABLE `codigobarras`
  ADD PRIMARY KEY (`CodigoBarrasID`);

--
-- Indices de la tabla `etiqueta`
--
ALTER TABLE `etiqueta`
  ADD PRIMARY KEY (`EtiquetaID`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`LibrosID`),
  ADD KEY `EtiquetaID` (`EtiquetaID`),
  ADD KEY `ClasificacionID` (`ClasificacionID`),
  ADD KEY `BibliotecaID` (`BibliotecaID`),
  ADD KEY `OrigenID` (`OrigenID`),
  ADD KEY `SalaID` (`SalaID`),
  ADD KEY `CodigoBarrasID` (`CodigoBarrasID`);

--
-- Indices de la tabla `librosconsulta`
--
ALTER TABLE `librosconsulta`
  ADD PRIMARY KEY (`LibrosConsultaID`),
  ADD KEY `LibrosID` (`LibrosID`);

--
-- Indices de la tabla `origen`
--
ALTER TABLE `origen`
  ADD PRIMARY KEY (`OrigenID`);

--
-- Indices de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD PRIMARY KEY (`PrestamosID`),
  ADD KEY `UsuariosID` (`UsuariosID`),
  ADD KEY `LibrosID` (`LibrosID`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`SalaID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuariosID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `librosconsulta`
--
ALTER TABLE `librosconsulta`
  MODIFY `LibrosConsultaID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `prestamos`
--
ALTER TABLE `prestamos`
  MODIFY `PrestamosID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libros_ibfk_1` FOREIGN KEY (`EtiquetaID`) REFERENCES `etiqueta` (`EtiquetaID`),
  ADD CONSTRAINT `libros_ibfk_2` FOREIGN KEY (`ClasificacionID`) REFERENCES `clasificacion` (`ClasificacionID`),
  ADD CONSTRAINT `libros_ibfk_3` FOREIGN KEY (`BibliotecaID`) REFERENCES `biblioteca` (`BibliotecaID`),
  ADD CONSTRAINT `libros_ibfk_4` FOREIGN KEY (`OrigenID`) REFERENCES `origen` (`OrigenID`),
  ADD CONSTRAINT `libros_ibfk_5` FOREIGN KEY (`SalaID`) REFERENCES `sala` (`SalaID`),
  ADD CONSTRAINT `libros_ibfk_6` FOREIGN KEY (`CodigoBarrasID`) REFERENCES `codigobarras` (`CodigoBarrasID`);

--
-- Filtros para la tabla `librosconsulta`
--
ALTER TABLE `librosconsulta`
  ADD CONSTRAINT `librosconsulta_ibfk_1` FOREIGN KEY (`LibrosID`) REFERENCES `libros` (`LibrosID`);

--
-- Filtros para la tabla `prestamos`
--
ALTER TABLE `prestamos`
  ADD CONSTRAINT `prestamos_ibfk_1` FOREIGN KEY (`UsuariosID`) REFERENCES `usuarios` (`UsuariosID`),
  ADD CONSTRAINT `prestamos_ibfk_2` FOREIGN KEY (`LibrosID`) REFERENCES `libros` (`LibrosID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
