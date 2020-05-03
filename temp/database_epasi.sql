-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-02-2020 a las 23:37:44
-- Versión del servidor: 5.6.45-log
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `c1321657_epasi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_comunicaciones`
--

CREATE TABLE `pow_comunicaciones` (
  `Id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `tipoID` int(11) NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `visto` int(1) NOT NULL,
  `cerrado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_comunicaciones_tipos`
--

CREATE TABLE `pow_comunicaciones_tipos` (
  `Id` int(11) NOT NULL,
  `tipo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_comunicaciones_tipos`
--

INSERT INTO `pow_comunicaciones_tipos` (`Id`, `tipo`, `color`) VALUES
(1, 'Urgente', 'danger'),
(2, 'Información', 'info'),
(3, 'Advertencia', 'warning'),
(4, 'Noticia', 'primary'),
(5, 'Comunicado', 'secondary'),
(6, 'Éxito', 'success');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_cursos`
--

CREATE TABLE `pow_cursos` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `profesores` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_cursos`
--

INSERT INTO `pow_cursos` (`Id`, `nombre`, `profesores`, `descripcion`, `fecha`, `active`) VALUES
(1, 'Formación en Coordinación en Talita Kumi y Tantana', '', 'Esta formación permitirá Coordinar  Talleres de Contención Emocional dirigido  a Mujeres TALITA KUMI , y dirigido a Hombres TANTANA KUY , ambos  pertenecen al Programa de Fortalecimiento Integral  de la Fundación EPASI. Estos Talleres de Contención Emocional surgen como respuesta a una necesidad de los hombres y mujeres, que padecen o han padecido, situaciones en sus vidas que lo llevaron a la depresión, al rechazo, al aislamiento. El trauma provocado por el abuso sexual, el acoso, la dependencia, el machismo y el feminismo. Intentos de suicidio, etc. Lograrán su restauración y sanidad a través de los mismos. \nEstos talleres son a corto plazo, de crecimiento cualitativo personal y grupal con hombres jóvenes y adultos., y mujeres jóvenes y adultas ', '0000-00-00', 1),
(4, 'Formación de Preventores del Abuso Sexual Infantil - Argentina', '', 'El Curso online/Semipresencial de Formación de Preventores del Abuso Sexual Infantil es un curso intensivo con formación teórica y práctica en cuanto al abuso sexual infantil y su prevención.\n\nLa modalidad semipresencial permite a los participantes adquirir las herramientas teóricas de forma virtual con la modalidad online teniendo dos clases por semana a través de una plataforma virtual; y por otro lado, adquirirán las herramientas prácticas de la prevención, la enseñanza del programa Mientras nos divertimos a vivir y las actividades psicodramáticas de forma presencial con una duración de dos días y medio en diferentes puntos del país donde los participantes puedan escoger según su conveniencia.\n\nEsta formación lo habilitará:\n\n1) Para dictar Talleres de Prevención, dirigido a niños de los 4 a 17 años. Con la Metodología Didáctica de la Prevención, primaria y secundaria, del Programa Educativo Mientras Nos Divertimos Aprendemos a Vivir.\n\n2) Dar charlas de concientización, prevención del Abuso Sexual Infantil.\n\n3) Intervenir en casos de abusos sexual , ayudando en el proceso, de denuncia y restauración del sobreviviente.\n\n4) Para formarse en un 2° Nivel de Preventores, para poder realizar la prevención terciaria, dictando los Talleres de Restauración de Sobrevivientes de abuso sexual. T.R.S\n\nLas inscripciones se encuentran abiertas\n\nFecha de inicio del Curso online: MARZO 2020\n\nLugares y fechas para la etapa presencial:\n\n1) Tucumán (Capital) Fecha: 15, 16 y 17 de Agosto 2020\n\n2) Neuquén (Capital) Fecha: 10, 11 y 12 de Octubre 2020\n\nPara extranjeros: Modalidad 100% online', '2020-03-02', 1),
(5, 'Formación en Coordinación en TRS (Talleres de Restauración del sobreviviente de Abuso)', '', 'Requisito excluyente para realizar este curso: Ser preventor del abuso sexual formado por la Fundación EPASI', '2020-08-07', 1),
(7, 'Formación de Preventores del Abuso Sexual Infantil - Internacional. ', '', 'El Curso de Formación de Preventores del Abuso Sexual Infantil 100% Online es exclusivo para extranjeros no residentes en Argentina. El mismo es un Curso  intensivo con formación teórica y práctica en cuanto al abuso sexual infantil y su prevención.\n\nLa modalidad 100% online permite a los participantes no residentes en Argentina, adquirir las herramientas teóricas y prácticas de la prevención de forma virtual, teniendo dos clases por semana a través de EPASI Educación (www.epasieducacion.com) nuestra plataforma virtual, a través de esta modalidad también aprenderán las enseñanza del programa Mientras nos divertimos a vivir.\n\nEsta formación lo habilitará:\n\n1) Para dictar Talleres de Prevención, dirigido a niños de los 4 a 17 años. Con la Metodología Didáctica de la Prevención, primaria y secundaria, del Programa Educativo Mientras Nos Divertimos Aprendemos a Vivir.\n\n2) Dar charlas de concientización, prevención del Abuso Sexual Infantil.\n\n3) Intervenir en casos de abusos sexual , ayudando en el proceso, de denuncia y restauración del sobreviviente.\n\n4) Para formarse en un 2° Nivel de Preventores, para poder realizar la prevención terciaria, dictando los Talleres de Restauración de Sobrevivientes de abuso sexual. T.R.S\n\nLas inscripciones se encuentran abiertas\n\nFecha de inicio del Curso online: MARZO 2020\n', '2020-03-02', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_cursos_clases`
--

CREATE TABLE `pow_cursos_clases` (
  `Id` int(11) NOT NULL,
  `cursoID` int(11) NOT NULL,
  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `placa` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `inicio` date NOT NULL,
  `final` date NOT NULL,
  `orden` int(1) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_cursos_clases`
--

INSERT INTO `pow_cursos_clases` (`Id`, `cursoID`, `titulo`, `video`, `placa`, `inicio`, `final`, `orden`, `active`) VALUES
(1, 1, 'Clase Nº 1 - Introducción', 'https://mega.nz/embed#!7oFWyYKC!irnXwbslP9GTNk07pPVleDu7AMluxtFIQsj6rmjZUXc', 'c4ca4238a0b923820dcc509a6f75849b.jpg', '2020-01-01', '2020-01-15', 0, 1),
(3, 1, 'Clase Nº 2 - Afrontando la situación', 'https://mega.nz/embed#!7oFWyYKC!irnXwbslP9GTNk07pPVleDu7AMluxtFIQsj6rmjZUXc', 'eccbc87e4b5ce2fe28308fd9f2a7baf3.jpg', '2020-01-15', '2020-01-31', 0, 1),
(4, 2, 'Clase #1 - Primera clase del año', '', 'a87ff679a2f3e71d9181a67b7542122c.jpg', '2020-01-01', '2020-01-01', 0, 1),
(5, 2, 'Clase #2 - Segunda clase del año', '', 'e4da3b7fbbce2345d7772b0674a318d5.jpg', '2020-01-01', '2020-01-01', 0, 1),
(6, 2, 'Clase #3 - Tercera clase del año', '', '1679091c5a880faf6fb5e6087eb1b2dc.jpg', '2020-01-01', '2020-01-01', 0, 1),
(7, 2, 'Clase #4 - Cuarta clase del año', '', '8f14e45fceea167a5a36dedd4bea2543.jpg', '2020-01-01', '2020-01-01', 0, 1),
(8, 1, 'Clase Nº 3 - Esta es otra clase más', 'https://mega.nz/embed#!7oFWyYKC!irnXwbslP9GTNk07pPVleDu7AMluxtFIQsj6rmjZUXc', 'c9f0f895fb98ab9159f51fd0297e236d.jpg', '2020-02-01', '2020-02-15', 0, 1),
(9, 1, 'Clase Nº 4 - Clase de cómo dar clases', '', '45c48cce2e2d7fbdea1afc51c7c6ad26.jpg', '2020-02-15', '2020-02-29', 0, 1),
(10, 1, 'Clase Nº 5 - La primera del mes de marzo', '', 'd3d9446802a44259755d38e6d163e820.jpg', '2020-03-01', '2020-03-15', 0, 1),
(12, 4, '00-Introducción ', 'aaaa', 'c20ad4d76fe97759aa27a0c99bff6710.jpg', '2020-03-02', '2020-03-11', 0, 1),
(13, 4, '01- Objetivos y Fundamentación del Curso', 'aaaa', 'c51ce410c124a10e0db5e4b97fc2af39.jpg', '2020-03-02', '2020-03-11', 0, 1),
(14, 4, '02- Marco Institucional', '', 'aab3238922bcc25a6f606eb525ffdc56.jpg', '2020-03-03', '2020-03-12', 0, 1),
(15, 4, '03- Modelo Ecológico del Trabajo en Redes ', '0000', '9bf31c7ff062936a96d3c8bd1f8f2ff3.jpg', '2020-03-03', '2020-03-12', 0, 1),
(16, 4, '04- Maltrato Infantil', '0000', 'c74d97b01eae257e44aa9d5bade97baf.jpg', '2020-03-09', '2020-03-18', 0, 1),
(17, 4, '05- Maltrato Infantil como Factor de Riesgo de ASI', 'https://mega.nz/#!ADZhiKzC!13TmEcTr-3aj2DjadOb6gZmaoG4O_LaZn-yxoOEpzVA', '70efdf2ec9b086079795c442636b55fb.jpg', '2020-03-09', '2020-03-17', 0, 1),
(18, 4, '06- Situación Alarmante. Estadísticas de ASI ', 'https://mega.nz/#!YCY1Ga7D!9KXcI7c1VsThtlRXNIlsxJV3cS07D278KaG_Fp4pPeI', '6f4922f45568161a8cdf4ad2299f6d23.jpg', '2020-03-10', '2020-03-19', 0, 1),
(19, 4, '07- Mitos del Abuso Sexual Infantil', '', '1f0e3dad99908345f7439f8ffabdffc4.jpg', '2020-03-10', '2020-03-19', 0, 1),
(20, 4, '08- Factores de Riesgo del Abuso Sexual Infantil', '', '98f13708210194c475687be6106a3b84.jpg', '2020-03-16', '2020-03-25', 0, 1),
(21, 4, '09- Abuso Sexual Infantil. Definición', '', '3c59dc048e8850243be8079a5c74d079.jpg', '2020-03-16', '2020-03-25', 0, 1),
(22, 4, '10- Tipos de Abuso Sexual Infantil', '0000', 'b6d767d2f8ed5d21a44b0e5886680cb9.jpg', '2020-03-17', '2020-03-26', 0, 1),
(23, 4, '11- Indicadores del Abuso Sexual Infantil', '0000', '37693cfc748049e45d87b8c7d8b9aacd.jpg', '2020-03-17', '2020-03-26', 0, 1),
(35, 4, '12- Perfil del Abusador/a ', '0000', '1c383cd30b7c298ab50293adfecb7b18.jpg', '2020-03-30', '2020-04-08', 0, 1),
(36, 4, '13- Estrategias del Abusador/a ', '0000', '19ca14e7ea6328a42e0eb13d585e4c22.jpg', '2020-03-30', '2020-04-08', 0, 1),
(37, 4, '14- El Origen de la Pedofilia ', '0000', 'a5bfc9e07964f8dddeb95fc584cd965d.jpg', '2020-03-31', '2020-04-09', 0, 1),
(38, 4, '15- La Adicción Sexual ', '0000', 'a5771bce93e200c36f7cd9dfd0e5deaa.jpg', '2020-03-31', '2020-04-09', 0, 1),
(39, 4, '16- Familias Expulsivas y Contenedoras', '0000', 'd67d8ab4f4c10bf22aa353e27879133c.jpg', '2020-04-06', '2020-04-15', 0, 1),
(41, 4, '17- Actitud de las  Madres ', '0000', '3416a75f4cea9109507cacd8e2f2aefc.jpg', '2020-04-06', '2020-04-14', 0, 1),
(42, 4, '18- Secuelas y Flash Back. Factores Predictores ', '0000', 'a1d0c6e83f027327d8461063f4ac58a6.jpg', '2020-04-07', '2020-04-16', 0, 1),
(43, 4, '19- Stress Post Traumático', '0000', '17e62166fc8586dfa4d1bc0e1742c08b.jpg', '2020-04-07', '2020-04-16', 0, 1),
(44, 4, '20- Revelación, Retractación y Re victimización ', '0000', 'f7177163c833dff4b38fc8d2872f1ec6.jpg', '2020-04-13', '2020-04-22', 0, 1),
(45, 4, '21- Qué hacer ante un abuso', '', '6c8349cc7260ae62e3b1396831a8398f.jpg', '2020-04-13', '2020-04-22', 0, 1),
(46, 4, '22- Prevención. Mitos. Tipos', '', 'd9d4f495e875a2e075a1a4a6e1b9770f.jpg', '2020-04-14', '2020-04-23', 0, 1),
(47, 4, '23- Prevención II', '', '67c6a1e7ce56d3d6fa748ab6d9af3fd7.jpg', '2020-04-14', '2020-04-23', 0, 1),
(48, 4, '24- Ejes  de la Prevención', '0000', '642e92efb79421734881b53e1e1b18b6.jpg', '2020-04-20', '2020-04-29', 0, 1),
(49, 4, '25- Prevención Eficaz', '0000', 'f457c545a9ded88f18ecee47145a72c0.jpg', '2020-04-20', '2020-04-29', 0, 1),
(50, 4, '26- Marco Normativo de los Derechos del Niño', '0000', 'c0c7c76d30bd3dcaefc96f40275bdc0a.jpg', '2020-04-21', '2020-04-30', 0, 1),
(51, 4, '27- La Ideología de Género ', '0000', '2838023a778dfaecdc212708f721b788.jpg', '2020-04-21', '2020-04-30', 0, 1),
(52, 4, '28- Sexualidad Humana', '0000', '9a1158154dfa42caddbd0694a4e9bdc8.jpg', '2020-04-27', '2020-05-06', 0, 1),
(53, 4, '29- Marco Legal de la Educación Sexual', '0000', 'd82c8d1619ad8176d665453cfb2e55f0.jpg', '2020-04-27', '2020-05-06', 0, 1),
(54, 4, '30- Fundamentación del Programa\" Mientras Nos Dive', '0000', 'a684eceee76fc522773286a895bc8436.jpg', '2020-04-28', '2020-04-07', 0, 1),
(55, 4, '31- Didáctica de la Prevención', '', 'b53b3a3d6ab90ce0268229151c9bde11.jpg', '2020-04-28', '2020-05-07', 0, 1),
(56, 4, '32- Factores Protectores del Abuso Sexual Infantil', '', '9f61408e3afb633e50cdf1b20de6f466.jpg', '2020-05-04', '2020-05-13', 0, 1),
(57, 4, '33- Factores Protectores del Abuso Sexual Infantil', '0000', '72b32a1f754ba1c09b3695e0cb6cde7f.jpg', '2020-05-04', '2020-05-13', 0, 1),
(58, 4, '34- El Grupo', '', '66f041e16a60928b05a7e228a89c3799.jpg', '2020-05-05', '2020-05-14', 0, 1),
(59, 4, '35- Rol del Coordinador y del Observador', '', '093f65e080a295f8076b1c5722a46aa2.jpg', '2020-05-05', '2020-05-14', 0, 1),
(60, 4, '36- Perfil del Preventor', '', '072b030ba126b2f4b2374f342be9ed44.jpg', '2020-05-11', '2020-05-20', 0, 1),
(61, 4, '37- Incumbencias de la Formación de Preventores', '', '7f39f8317fbdb1988ef4c628eba02591.jpg', '2020-05-11', '2020-05-20', 0, 1),
(62, 4, '38- Síndrome de Burn Out', '', '44f683a84163b3523afe57c2e008bc8c.jpg', '2020-05-12', '2020-05-21', 0, 1),
(63, 4, '39- Trabajo en Equipo', '', '03afdbd66e7929b125f8597834fa83a4.jpg', '2020-05-12', '2020-05-21', 0, 1),
(64, 4, '40- La Denuncia', '', 'ea5d2f1c4608232e07d3aa3d998e5135.jpg', '2020-05-18', '2020-05-27', 0, 1),
(65, 4, '41- La Resiliencia ', '', 'fc490ca45c00b1249bbe3554a4fdf6fb.jpg', '2020-05-18', '2020-05-28', 0, 1),
(66, 4, '42- Restauración del Sobreviviente de Abuso Sexual', '0000', '3295c76acbf4caaed33c36b1b5fc2cb1.jpg', '2020-05-19', '2020-05-28', 0, 1),
(67, 4, '43- Testimonio de Restauración', '', '735b90b4568125ed6c3f678819b6e058.jpg', '2020-05-19', '2020-05-28', 0, 1),
(68, 4, '44- Psicomotricidad y Musimotricidad', '', 'a3f390d88e4c41f2747bfa2f1b5f87db.jpg', '2020-05-26', '2020-06-03', 0, 1),
(69, 4, '45- Recursos Lúdicos', '', '14bfa6bb14875e45bba028a21ed38046.jpg', '2020-05-26', '2020-06-03', 0, 1),
(70, 6, 'Clase #1 - Titulo de la clase', 'https://mega.nz/#!ADZhiKzC!13TmEcTr-3aj2DjadOb6gZmaoG4O_LaZn-yxoOEpzVA', '7cbbc409ec990f19c78c75bd1e06f215.jpg', '2020-01-01', '2020-05-01', 0, 1),
(71, 6, 'Clase 2 Prueba de video', 'https://mega.nz/#!QaAzjYYL!cvcfNP9ZTyCB7g3bEaXld29_dVVD8sFIfQPlcS1ufpg', 'e2c420d928d4bf8ce0ff2ec19b371514.jpg', '2020-02-12', '2020-02-20', 0, 1),
(73, 7, '00- Introducción', '', 'd2ddea18f00665ce8623e36bd4e3c7c5.jpg', '2020-03-02', '2020-03-11', 0, 1),
(74, 7, '01- Objetivos y Fundamentación del Curso', '', 'ad61ab143223efbc24c7d2583be69251.jpg', '2020-03-02', '2020-03-11', 0, 1),
(75, 7, '02- Marco Institucional ', '', 'd09bf41544a3365a46c9077ebb5e35c3.jpg', '2020-03-03', '2020-03-12', 0, 1),
(76, 7, '03- Modelo Ecológico del Trabajo de Redes ', '', 'fbd7939d674997cdb4692d34de8633c4.jpg', '2020-03-03', '2020-03-12', 0, 1),
(77, 7, '04- Maltrato Infantil ', '', '28dd2c7955ce926456240b2ff0100bde.jpg', '2020-03-09', '2020-03-18', 0, 1),
(78, 7, '05- Maltrato Infantil como Factor de Riesgo de ASI', '', '35f4a8d465e6e1edc05f3d8ab658c551.jpg', '2020-03-09', '2020-03-18', 0, 1),
(79, 7, '06- Situación Alarmante. Estadísticas de ASI ', '', 'd1fe173d08e959397adf34b1d77e88d7.jpg', '2020-03-10', '2020-03-19', 0, 1),
(80, 7, '07- Mitos del Abuso Sexual Infantil ', '', 'f033ab37c30201f73f142449d037028d.jpg', '2020-03-10', '2020-03-19', 0, 1),
(81, 7, '08- Factores de Riesgo del Abuso Sexual Infantil ', '', '43ec517d68b6edd3015b3edc9a11367b.jpg', '2020-03-16', '2020-03-25', 0, 1),
(82, 7, '09- Abuso Sexual Infantil. Definición ', '', '9778d5d219c5080b9a6a17bef029331c.jpg', '2020-03-16', '2020-03-25', 0, 1),
(83, 7, '10- Tipos de Abuso Sexual Infantil ', '', 'fe9fc289c3ff0af142b6d3bead98a923.jpg', '2020-03-17', '2020-03-26', 0, 1),
(84, 7, '11- Indicadores del Abuso Sexual Infantil ', '', '68d30a9594728bc39aa24be94b319d21.jpg', '2020-03-17', '2020-03-26', 0, 1),
(85, 7, '12- Perfil del Abusador/a ', '', '3ef815416f775098fe977004015c6193.jpg', '2020-03-23', '2020-04-01', 0, 1),
(86, 7, '13- Estrategias del Abusador/a ', '', '93db85ed909c13838ff95ccfa94cebd9.jpg', '2020-03-23', '2020-04-01', 0, 1),
(87, 7, '14- El origen de la Pedofilia ', '', 'c7e1249ffc03eb9ded908c236bd1996d.jpg', '2020-03-24', '2020-04-02', 0, 1),
(88, 7, '15- La Adicción Sexual ', '', '2a38a4a9316c49e5a833517c45d31070.jpg', '2020-03-24', '2020-04-02', 0, 1),
(89, 7, '16- Familias Expulsivas y Contenedoras', '', '7647966b7343c29048673252e490f736.jpg', '2020-03-30', '2020-04-08', 0, 1),
(90, 7, '17- Actitud de las Madres', '', '8613985ec49eb8f757ae6439e879bb2a.jpg', '2020-03-30', '2020-04-08', 0, 1),
(91, 7, '18- Secuelas y Flash Back. Factores Predictores', '', '54229abfcfa5649e7003b83dd4755294.jpg', '2020-03-31', '2020-04-09', 0, 1),
(92, 7, '19- Stress Post Traumático ', '', '92cc227532d17e56e07902b254dfad10.jpg', '2020-03-31', '2020-04-09', 0, 1),
(93, 7, '20- Revelación, Retractación y Re victimización ', '', '98dce83da57b0395e163467c9dae521b.jpg', '2020-04-06', '2020-04-15', 0, 1),
(94, 7, '21- Qué hacer ante un abuso', '', 'f4b9ec30ad9f68f89b29639786cb62ef.jpg', '2020-04-06', '2020-04-15', 0, 1),
(95, 7, '22- Prevención. Mitos. Tipos', '', '812b4ba287f5ee0bc9d43bbf5bbe87fb.jpg', '2020-04-07', '2020-04-16', 0, 1),
(96, 7, '23- Prevención II ', '', '26657d5ff9020d2abefe558796b99584.jpg', '2020-04-07', '2020-04-16', 0, 1),
(97, 7, '24- Ejes de la Prevención', '', 'e2ef524fbf3d9fe611d5a8e90fefdc9c.jpg', '2020-04-13', '2020-04-22', 0, 1),
(98, 7, '25- Prevención Eficaz ', '', 'ed3d2c21991e3bef5e069713af9fa6ca.jpg', '2020-04-13', '2020-04-22', 0, 1),
(99, 7, '26- Marco Normativo de los Derechos del Niño', '', 'ac627ab1ccbdb62ec96e702f07f6425b.jpg', '2020-04-14', '2020-04-23', 0, 1),
(100, 7, '27- La ideología de Género', '', 'f899139df5e1059396431415e770c6dd.jpg', '2020-04-14', '2020-04-23', 0, 1),
(101, 7, '28- Sexualidad Humana ', '', '38b3eff8baf56627478ec76a704e9b52.jpg', '2020-04-20', '2020-04-29', 0, 1),
(102, 7, '29- Marco Legal de la Educación Sexual ', '', 'ec8956637a99787bd197eacd77acce5e.jpg', '2020-04-20', '2020-04-29', 0, 1),
(103, 7, '30- Fundamentación del Programa \"Mientras nos Dive', '', '6974ce5ac660610b44d9b9fed0ff9548.jpg', '2020-04-21', '2020-04-30', 0, 1),
(104, 7, '31- Didáctica de la Prevención ', '', 'c9e1074f5b3f9fc8ea15d152add07294.jpg', '2020-04-21', '2020-04-30', 0, 1),
(105, 7, '32- Factores Protectores del Abuso Sexual Infantil', '', '65b9eea6e1cc6bb9f0cd2a47751a186f.jpg', '2020-04-27', '2020-05-06', 0, 1),
(106, 7, '33- Factores Protectores del Abuso Sexual Infantil', '', 'f0935e4cd5920aa6c7c996a5ee53a70f.jpg', '2020-04-27', '2020-05-06', 0, 1),
(107, 7, '34- El Grupo ', '', 'a97da629b098b75c294dffdc3e463904.jpg', '2020-04-28', '2020-05-07', 0, 1),
(108, 7, '35- Rol del Coordinador y del Observador ', '', 'a3c65c2974270fd093ee8a9bf8ae7d0b.jpg', '2020-04-28', '2020-05-07', 0, 1),
(109, 7, '36- Perfil del Preventor ', '', '2723d092b63885e0d7c260cc007e8b9d.jpg', '2020-05-04', '2020-05-13', 0, 1),
(110, 7, '37- Incumbencias de la Formación de Preventores ', '', '5f93f983524def3dca464469d2cf9f3e.jpg', '2020-05-04', '2020-05-13', 0, 1),
(111, 7, '38- Síndrome de Burn Out ', '', '698d51a19d8a121ce581499d7b701668.jpg', '2020-05-05', '2020-05-14', 0, 1),
(112, 7, '39- Trabajo en Equipo ', '', '7f6ffaa6bb0b408017b62254211691b5.jpg', '2020-05-05', '2020-05-14', 0, 1),
(113, 7, '40- La Denuncia ', '', '73278a4a86960eeb576a8fd4c9ec6997.jpg', '2020-05-11', '2020-05-20', 0, 1),
(114, 7, '41- La Resiliencia ', '', '5fd0b37cd7dbbb00f97ba6ce92bf5add.jpg', '2020-05-11', '2020-05-20', 0, 1),
(115, 7, '42- Restauración del Sobreviviente de Abuso Sexual', '', '2b44928ae11fb9384c4cf38708677c48.jpg', '2020-05-12', '2020-05-21', 0, 1),
(116, 7, '43- Testimonio de Restauración ', '', 'c45147dee729311ef5b5c3003946c48f.jpg', '2020-05-12', '2020-05-21', 0, 1),
(117, 7, '44- Psicomotricidad y Musimotricidad ', '', 'eb160de1de89d9058fcb0b968dbbbd68.jpg', '2020-05-18', '2020-05-27', 0, 1),
(118, 7, '45- Recursos Lúdicos', '', '5ef059938ba799aaa845e1c2e8a762bd.jpg', '2020-05-18', '2020-05-27', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_cursos_clases_adjuntos`
--

CREATE TABLE `pow_cursos_clases_adjuntos` (
  `Id` int(11) NOT NULL,
  `claseID` int(11) NOT NULL,
  `archivo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_cursos_clases_adjuntos`
--

INSERT INTO `pow_cursos_clases_adjuntos` (`Id`, `claseID`, `archivo`, `link`) VALUES
(49, 70, 'eccbc87e4b5ce2fe28308fd9f2a7baf3.pdf', ''),
(50, 12, 'CV Docentes Curso.pdf', ''),
(51, 13, 'Cartilla Curso de Preventores ONLINE.pdf', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_cursos_clases_preguntas`
--

CREATE TABLE `pow_cursos_clases_preguntas` (
  `Id` int(11) NOT NULL,
  `claseID` int(11) NOT NULL,
  `pregunta` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_cursos_clases_preguntas`
--

INSERT INTO `pow_cursos_clases_preguntas` (`Id`, `claseID`, `pregunta`, `orden`) VALUES
(1, 70, 'Pregunta 1', 0),
(2, 70, 'Pregunta 2', 1),
(3, 70, 'Pregunta 3', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_mensajes`
--

CREATE TABLE `pow_mensajes` (
  `Id` int(11) NOT NULL,
  `remitenteID` int(11) NOT NULL,
  `destinatarioID` int(11) NOT NULL,
  `mensaje` text COLLATE utf8_unicode_ci NOT NULL,
  `enviado` datetime NOT NULL,
  `leido` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_mensajes`
--

INSERT INTO `pow_mensajes` (`Id`, `remitenteID`, `destinatarioID`, `mensaje`, `enviado`, `leido`) VALUES
(2, 3, 3, 'Acordáte de que tenés que pagar.', '2020-01-16 00:46:59', '2020-02-03 23:26:47'),
(3, 3, 7, 'Buenas tardes Julieta, necesitamos por favor que te pongas en contacto con nosotros.', '2020-02-03 23:05:17', '2020-02-03 23:05:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_users`
--

CREATE TABLE `pow_users` (
  `Id` int(11) NOT NULL,
  `user` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL,
  `datos` int(1) NOT NULL,
  `documentos` int(1) NOT NULL,
  `money` int(1) NOT NULL,
  `approved` int(1) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_users`
--

INSERT INTO `pow_users` (`Id`, `user`, `pass`, `email`, `active`, `datos`, `documentos`, `money`, `approved`, `admin`) VALUES
(3, '', 'f1e5c64fca3e3217702be0837b2b64ec', 'netfrank777@gmail.com', 1, 0, 0, 0, 0, 1),
(9, '', '0e282a7b9ba43b2556c7a79279a8505e', 'carlamillanperez@gmail.com', 1, 0, 0, 0, 0, 1),
(10, '', 'e845808d85c109d584fd339d63d38906', 'vivisalinas@hotmail.com', 1, 0, 0, 0, 0, 1),
(12, '', 'c7b9bd2b6c739cb116c7d53d57c18b11', 'valoyeliseo@gmail.com', 1, 0, 0, 0, 0, 1),
(13, '', '1ca8b9aaf0f9e61cd978983348275c80', 'luzsierra7@hotmail.com', 1, 0, 0, 0, 0, 0),
(17, '', 'f1e5c64fca3e3217702be0837b2b64ec', 'userprueba@gmail.com', 1, 0, 0, 0, 0, 0),
(18, '', '1ca8b9aaf0f9e61cd978983348275c80', 'emmanuelvaloy@gmail.com', 1, 1, 0, 1, 0, 0),
(19, '', '1ca8b9aaf0f9e61cd978983348275c80', 'eliseo.shaliah@hotmail.com', 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_users_cursos`
--

CREATE TABLE `pow_users_cursos` (
  `userID` int(11) NOT NULL,
  `cursoID` int(11) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_users_cursos`
--

INSERT INTO `pow_users_cursos` (`userID`, `cursoID`, `estado`) VALUES
(8, 1, 2),
(8, 2, 1),
(12, 1, 1),
(9, 1, 2),
(10, 1, 2),
(11, 1, 2),
(12, 6, 2),
(17, 1, 2),
(18, 4, 2),
(18, 5, 1),
(18, 6, 2),
(17, 6, 2),
(17, 4, 2),
(19, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_users_docs`
--

CREATE TABLE `pow_users_docs` (
  `userID` int(11) NOT NULL,
  `ddjj` int(1) NOT NULL,
  `antecedentes` int(1) NOT NULL,
  `video` int(1) NOT NULL,
  `identificacion` int(1) NOT NULL,
  `foto` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_users_docs`
--

INSERT INTO `pow_users_docs` (`userID`, `ddjj`, `antecedentes`, `video`, `identificacion`, `foto`) VALUES
(3, 0, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0),
(10, 0, 0, 0, 0, 0),
(13, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 0, 0),
(18, 0, 0, 0, 0, 0),
(19, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_users_pagos`
--

CREATE TABLE `pow_users_pagos` (
  `Id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `cursoID` int(11) NOT NULL,
  `medio` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_users_pagos`
--

INSERT INTO `pow_users_pagos` (`Id`, `userID`, `cursoID`, `medio`, `estado`) VALUES
(2, 18, 4, 'Banco', 1),
(3, 19, 1, 'Banco', 1),
(4, 19, 4, 'Banco', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_users_perfil`
--

CREATE TABLE `pow_users_perfil` (
  `userID` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nacimiento` date NOT NULL,
  `dni` int(8) NOT NULL,
  `estado_civil` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `provincia` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cp` int(10) NOT NULL,
  `celular` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `fijo` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `nacionalidad` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `proaborto` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `tratamiento` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `medicacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `trabajo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `referencia1_nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `referencia1_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `referencia1_celular` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `referencia2_nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `referencia2_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `referencia2_celular` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `razones` text COLLATE utf8_unicode_ci NOT NULL,
  `concepcion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_users_perfil`
--

INSERT INTO `pow_users_perfil` (`userID`, `nombre`, `apellido`, `nacimiento`, `dni`, `estado_civil`, `pais`, `provincia`, `ciudad`, `direccion`, `cp`, `celular`, `fijo`, `nacionalidad`, `religion`, `proaborto`, `tratamiento`, `medicacion`, `trabajo`, `referencia1_nombre`, `referencia1_email`, `referencia1_celular`, `referencia2_nombre`, `referencia2_email`, `referencia2_celular`, `razones`, `concepcion`) VALUES
(3, 'Franco Daniel', 'Ocaranza', '1985-12-04', 31842369, 'Soltero/a', 'Argentina', 'Tucumán', 'Las Talitas', 'Bº SOEME M7 C27', 0, '+5493816307673', '', 'Argentina', 'Evangélico', '', '', '', '', 'Pepe Perez (1111111) / Vecino (22222222)', '', '', '', '', '', 'Me gustaría capacitarme de la forma más completa para poder desarrollar un servicio en mi congregación.', ''),
(9, 'Carla', 'Millán', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'Viviana', 'Salinas', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'Eliseo', 'Valoy', '1989-09-11', 34132720, 'Casado/a', 'Argentina', 'Tucumán', 'San Miguel de Tucuman', 'Pje Monserrat 3050', 0, '3815181285', '', 'Argentino', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'Luz', 'Sierra', '0000-00-00', 0, 'Casado/a', 'Argentina', 'Tucuman', 'San Miguel de Tucuman', '', 0, '', '', 'Argentina', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'Usuario', 'Prueba', '1996-01-04', 35080800, 'Soltero/a', 'Argentina', 'Tucumán', 'San Miguel de Tucumán', 'Lavalle 222', 0, '3816528080', '', 'Argentino', 'Sí. Cristiano Evangélico.', 'En contra.', 'No.', 'No.', 'Sí, en horas felices.', 'Franco Ocaranza (3816307673 - netfrank777@gmail.com) y Daniel Ocaranza (3815652833 - francocaranzawork@gmail.com)', '', '', '', '', '', 'Quiero capacitarme.', ''),
(18, 'Emmanuel', 'Valoy', '1987-04-08', 32834850, 'Casado/a', 'Argentina', 'Tucuman ', 'Cebil Redondo', 'B° Mirador Mz A Cs 13', 0, '3815177564', '3814930339', 'Argentino', 'Cristianismo', 'No lo apruebo', 'NO', 'NO', 'Si en la casa', '', '', '', '', '', '', '', ''),
(19, 'Emilio ', 'Valoy', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_users_preventores`
--

CREATE TABLE `pow_users_preventores` (
  `Id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `lugar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `certificado` text COLLATE utf8_unicode_ci NOT NULL,
  `lugar_aplicacion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `edad_nivel` text COLLATE utf8_unicode_ci NOT NULL,
  `reporte` text COLLATE utf8_unicode_ci NOT NULL,
  `revelacion` text COLLATE utf8_unicode_ci NOT NULL,
  `explicacion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_users_preventores`
--

INSERT INTO `pow_users_preventores` (`Id`, `userID`, `lugar`, `fecha`, `certificado`, `lugar_aplicacion`, `edad_nivel`, `reporte`, `revelacion`, `explicacion`) VALUES
(1, 3, '', '0000-00-00', '', '', '', '', '', ''),
(2, 9, '', '0000-00-00', '', '', '', '', '', ''),
(3, 10, '', '0000-00-00', '', '', '', '', '', ''),
(4, 12, '', '0000-00-00', '', '', '', '', '', ''),
(5, 13, '', '0000-00-00', '', '', '', '', '', ''),
(7, 17, 'Neuquén', '2010-01-01', 'No. Lo extravié.', 'Escuela 346 - Desde el 2011 al 2014.', '8 a 12 años.', 'No pasé reportes. Sólo trabajé en la escuela.', 'Sí. Tuve dos casos.', 'Procedí de la siguiente forma:'),
(8, 18, '', '0000-00-00', '', '', '', '', '', ''),
(9, 19, '', '0000-00-00', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_users_respuestas`
--

CREATE TABLE `pow_users_respuestas` (
  `Id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `claseID` int(11) NOT NULL,
  `preguntaID` int(11) NOT NULL,
  `respuesta` text COLLATE utf8_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_users_respuestas`
--

INSERT INTO `pow_users_respuestas` (`Id`, `userID`, `claseID`, `preguntaID`, `respuesta`, `feedback`, `estado`) VALUES
(10, 12, 70, 1, 'A continuación le realizamos una serie de preguntas que servirán para evaluar la asimilación de los conceptos expuestos en la presente clase. ', '', 2),
(11, 12, 70, 2, ' Por favor desarrolle las consignas y haga click en el botón Enviar respuestas. Y ahora está bien hecha.', 'Deberías considerar otra opción.', 2),
(12, 12, 70, 3, 'Para evaluar la asimilación de los conceptos expuestos en la presente clase. Por favor desarrolle las consignas y haga click en el botón.', '', 2),
(13, 18, 70, 1, 'NO entendi bien la pregunta\r\n', 'Vuelva a ver el video', 2),
(14, 18, 70, 2, 'Si entendí bien ', '', 2),
(15, 18, 70, 3, 'Todavía no la vi ', '', 2),
(16, 17, 70, 1, 'A continuación le realizamos una serie de preguntas que servirán para evaluar la asimilación de los conceptos expuestos en la presente clase. Por favor desarrolle las consignas y haga click en el botón.', '', 2),
(17, 17, 70, 2, 'A continuación le realizamos una serie de preguntas que servirán para evaluar la asimilación de los conceptos expuestos en la presente clase. Por favor desarrolle las consignas y haga click en el botón.', '', 2),
(18, 17, 70, 3, 'A continuación le realizamos una serie de preguntas que servirán para evaluar la asimilación de los conceptos expuestos en la presente clase. Por favor desarrolle las consignas y haga click en el botón. Respuesta correcta.', 'Por favor, revise la respuesta.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_users_tareas`
--

CREATE TABLE `pow_users_tareas` (
  `Id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `claseID` int(11) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_users_tareas`
--

INSERT INTO `pow_users_tareas` (`Id`, `userID`, `claseID`, `estado`) VALUES
(6, 12, 70, 2),
(7, 18, 70, 2),
(8, 17, 70, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pow_comunicaciones`
--
ALTER TABLE `pow_comunicaciones`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pow_comunicaciones_tipos`
--
ALTER TABLE `pow_comunicaciones_tipos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pow_cursos`
--
ALTER TABLE `pow_cursos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pow_cursos_clases`
--
ALTER TABLE `pow_cursos_clases`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pow_cursos_clases_adjuntos`
--
ALTER TABLE `pow_cursos_clases_adjuntos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pow_cursos_clases_preguntas`
--
ALTER TABLE `pow_cursos_clases_preguntas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pow_mensajes`
--
ALTER TABLE `pow_mensajes`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pow_users`
--
ALTER TABLE `pow_users`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pow_users_pagos`
--
ALTER TABLE `pow_users_pagos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pow_users_preventores`
--
ALTER TABLE `pow_users_preventores`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pow_users_respuestas`
--
ALTER TABLE `pow_users_respuestas`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `pow_users_tareas`
--
ALTER TABLE `pow_users_tareas`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pow_comunicaciones`
--
ALTER TABLE `pow_comunicaciones`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pow_comunicaciones_tipos`
--
ALTER TABLE `pow_comunicaciones_tipos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pow_cursos`
--
ALTER TABLE `pow_cursos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pow_cursos_clases`
--
ALTER TABLE `pow_cursos_clases`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT de la tabla `pow_cursos_clases_adjuntos`
--
ALTER TABLE `pow_cursos_clases_adjuntos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `pow_cursos_clases_preguntas`
--
ALTER TABLE `pow_cursos_clases_preguntas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pow_mensajes`
--
ALTER TABLE `pow_mensajes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pow_users`
--
ALTER TABLE `pow_users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `pow_users_pagos`
--
ALTER TABLE `pow_users_pagos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pow_users_preventores`
--
ALTER TABLE `pow_users_preventores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pow_users_respuestas`
--
ALTER TABLE `pow_users_respuestas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `pow_users_tareas`
--
ALTER TABLE `pow_users_tareas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
