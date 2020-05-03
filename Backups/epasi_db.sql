-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-03-2020 a las 16:57:24
-- Versión del servidor: 5.7.29
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
-- Base de datos: `epasi_db`
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_comunicaciones_tipos`
--

CREATE TABLE `pow_comunicaciones_tipos` (
  `Id` int(11) NOT NULL,
  `tipo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `costo` int(4) NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_cursos`
--

INSERT INTO `pow_cursos` (`Id`, `nombre`, `costo`, `descripcion`, `fecha`, `active`) VALUES
(1, 'Formación en Coordinación en Talita Kumi y Tantana kuy', 0, 'Esta formación permitirá Coordinar  Talleres de Contención Emocional dirigido  a Mujeres TALITA KUMI , y a Hombres TANTANA KUY , ambos talleres  pertenecen al Programa de Fortalecimiento Integral de La Familia de la Fundación EPASI. Estos Talleres de Contención Emocional surgen como respuesta a una necesidad de los hombres y mujeres, que padecen o han padecido, situaciones en sus vidas que lo llevaron a la depresión, al rechazo, al aislamiento. El trauma provocado por el abuso sexual, el acoso, la dependencia, el machismo y el feminismo. Intentos de suicidio, etc. Lograrán su restauración y sanidad a través de los mismos. \nEstos talleres son a corto plazo, de crecimiento cualitativo personal y grupal con hombres jóvenes y adultos , y mujeres jóvenes y adultas ', '0000-00-00', 0),
(4, 'Formación de Preventores del Abuso Sexual Infantil - Argentina', 200, 'El Curso online/Semipresencial de Formación de Preventores del Abuso Sexual Infantil es un curso intensivo con formación teórica y práctica en cuanto al abuso sexual infantil y su prevención.\n\nLa modalidad semipresencial permite a los participantes adquirir las herramientas teóricas de forma virtual con la modalidad online teniendo cuatro clases por semana a través de una plataforma virtual; y por otro lado, adquirirán las herramientas prácticas de la prevención, la enseñanza del programa Mientras nos divertimos a vivir y las actividades psicodramáticas de forma presencial con una duración de dos días y medio en diferentes puntos del país donde los participantes puedan escoger según su conveniencia.\n\nEsta formación lo habilitará:\n\n1) Para dictar Talleres de Prevención, dirigido a niños de los 4 a 17 años. Con la Metodología Didáctica de la Prevención, primaria y secundaria, del Programa Educativo Mientras Nos Divertimos Aprendemos a Vivir.\n\n2) Dar charlas de concientización, prevención del Abuso Sexual Infantil.\n\n3) Intervenir en casos de abusos sexual , ayudando en el proceso, de denuncia y restauración del sobreviviente.\n\n4) Para formarse en un 2° Nivel de Preventores, para poder realizar la prevención terciaria, dictando los Talleres de Restauración de Sobrevivientes de abuso sexual. T.R.S\n\nLas inscripciones se encuentran abiertas\n\nFecha de inicio del Curso online: MARZO 2020\n\nLugares y fechas para la etapa presencial:\n\n1) Tucumán (Capital) Fecha: 15, 16 y 17 de Agosto 2020\n\n2) Neuquén (Capital) Fecha: 10, 11 y 12 de Octubre 2020\n', '2020-03-02', 1),
(5, 'Formación en Coordinación en TRS (Talleres de Restauración del sobreviviente de Abuso Infantil)', 0, 'Requisito excluyente para realizar este curso: Ser preventor del abuso sexual formado por la Fundación EPASI', '2020-08-07', 0),
(7, 'Formación de Preventores del Abuso Sexual Infantil - Internacional. ', 200, 'El Curso de Formación de Preventores del Abuso Sexual Infantil 100% Online es exclusivo para extranjeros no residentes en Argentina. El mismo es un Curso  intensivo con formación teórica y práctica en cuanto al abuso sexual infantil y su prevención.\n\nLa modalidad 100% online permite a los participantes no residentes en Argentina, adquirir las herramientas teóricas y prácticas de la prevención de forma virtual, teniendo dos clases por semana a través de EPASI Educación (www.epasieducacion.com) nuestra plataforma virtual, a través de esta modalidad también aprenderán las enseñanza del programa Mientras nos divertimos a vivir.\n\nEsta formación lo habilitará:\n\n1) Para dictar Talleres de Prevención, dirigido a niños de los 4 a 17 años. Con la Metodología Didáctica de la Prevención, primaria y secundaria, del Programa Educativo Mientras Nos Divertimos Aprendemos a Vivir.\n\n2) Dar charlas de concientización, prevención del Abuso Sexual Infantil.\n\n3) Intervenir en casos de abusos sexual , ayudando en el proceso, de denuncia y restauración del sobreviviente.\n\n4) Para formarse en un 2° Nivel de Preventores, para poder realizar la prevención terciaria, dictando los Talleres de Restauración de Sobrevivientes de abuso sexual. T.R.S\n\nLas inscripciones se encuentran abiertas\n\nFecha de inicio del Curso online: MARZO 2020\n', '2020-03-02', 1);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_cursos_clases`
--

INSERT INTO `pow_cursos_clases` (`Id`, `cursoID`, `titulo`, `video`, `placa`, `inicio`, `final`, `orden`, `active`) VALUES
(4, 2, 'Clase #1 - Primera clase del año', '', 'a87ff679a2f3e71d9181a67b7542122c.jpg', '2020-01-01', '2020-01-01', 0, 1),
(5, 2, 'Clase #2 - Segunda clase del año', '', 'e4da3b7fbbce2345d7772b0674a318d5.jpg', '2020-01-01', '2020-01-01', 0, 1),
(6, 2, 'Clase #3 - Tercera clase del año', '', '1679091c5a880faf6fb5e6087eb1b2dc.jpg', '2020-01-01', '2020-01-01', 0, 1),
(7, 2, 'Clase #4 - Cuarta clase del año', '', '8f14e45fceea167a5a36dedd4bea2543.jpg', '2020-01-01', '2020-01-01', 0, 1),
(12, 4, '00-Introducción ', 'https://mega.nz/#!EXIDSQpK!MFkzSgwaq91xz3Y3N4ldmYMcrvleVUPlAI1pIhj5xQw', 'c20ad4d76fe97759aa27a0c99bff6710.jpg', '2020-03-02', '2020-03-18', 0, 1),
(13, 4, '01- Objetivos y Fundamentación del Curso', 'https://mega.nz/#!kKBhWaoC!vQxkCLmankPtuNO7wnzSxVQUIUXu_0Fl72w__E8N9bg', 'c51ce410c124a10e0db5e4b97fc2af39.jpg', '2020-03-02', '2020-03-18', 0, 1),
(14, 4, '02- Marco Institucional', 'https://mega.nz/#!NfwzxTLB!nw_dXSIq1_IaoTA1PhBpKMBmeuAw3tyjVy46BPUWQlM', 'aab3238922bcc25a6f606eb525ffdc56.jpg', '2020-03-03', '2020-03-19', 0, 1),
(15, 4, '03- Modelo Ecológico del Trabajo en Redes ', 'https://mega.nz/#!cDxySCRL!YFYoCJ4J6ik2FS15XPmPIqMsAA9tMzNUaFZkwf9MsF8', '9bf31c7ff062936a96d3c8bd1f8f2ff3.jpg', '2020-03-03', '2020-03-19', 0, 1),
(16, 4, '04- Maltrato Infantil', 'https://mega.nz/#!hPpk3AQY!WQnP3mIJ-dTPkFhQJ7nYwrLzfMrsBFk1n_zW7sKAVXI', 'c74d97b01eae257e44aa9d5bade97baf.jpg', '2020-03-09', '2020-03-18', 0, 1),
(17, 4, '05- Maltrato Infantil como Factor de Riesgo de ASI', 'https://mega.nz/#!MKIHEQoK!Fihn5rIoc_V8Pmn9Lsq9-bNKhl5u2M9dWmsFIHM6bk8', '70efdf2ec9b086079795c442636b55fb.jpg', '2020-03-09', '2020-03-17', 0, 1),
(18, 4, '06- Situación Alarmante. Estadísticas de ASI ', 'https://mega.nz/#!gCBxzQiB!ZZZLqHKgIj3C7895gGDI1J8JaS43i3HPbHYgq_ORRuc', '6f4922f45568161a8cdf4ad2299f6d23.jpg', '2020-03-10', '2020-03-19', 0, 1),
(19, 4, '07- Mitos del Abuso Sexual Infantil', 'https://mega.nz/#!EfIVlCSb!FnSIHAEvOGNRAjDpKpf2XrdmgARs8n0FuKw_mQm7qG0', '1f0e3dad99908345f7439f8ffabdffc4.jpg', '2020-03-10', '2020-03-19', 0, 1),
(20, 4, '08- Factores de Riesgo del Abuso Sexual Infantil', 'https://mega.nz/#!IKowhSCC!NGrJBAYQHXfh54BcUbIBKxN9kU4EAl_Eo8v2pW3hSAY', '98f13708210194c475687be6106a3b84.jpg', '2020-03-16', '2020-03-25', 0, 1),
(21, 4, '09- Abuso Sexual Infantil. Definición', 'https://mega.nz/#!Ze4Cya4R!FEYZTpPv_SzMgfawvmKEPFftgboZMpJR1QRNzbkpSzg', '3c59dc048e8850243be8079a5c74d079.jpg', '2020-03-16', '2020-03-25', 0, 1),
(22, 4, '10- Tipos de Abuso Sexual Infantil', 'https://mega.nz/#!RaIQXYJD!b11-HmIOAZyVhp7zoFc0Hce5-eIpdqf9OUVr2bdpVV8', 'b6d767d2f8ed5d21a44b0e5886680cb9.jpg', '2020-03-17', '2020-03-26', 0, 1),
(23, 4, '11- Indicadores del Abuso Sexual Infantil', 'https://mega.nz/#!YXZR1YoQ!ezr_oQ789VUteB_-FEiENSy-t1ip7iK7r566I8hpgJ8', '37693cfc748049e45d87b8c7d8b9aacd.jpg', '2020-03-17', '2020-03-26', 0, 1),
(35, 4, '12- Perfil del Abusador/a ', 'https://mega.nz/#!FXIl2CiK!bTQM-oHMJ9S4zb2dZKPaYOK0ROxYqjIwj3ljM1CaLtY', '1c383cd30b7c298ab50293adfecb7b18.jpg', '2020-03-30', '2020-04-08', 0, 1),
(36, 4, '13- Estrategias del Abusador/a ', 'https://mega.nz/#!5LBFHSbR!AxFLMCU4Y-XcuuAmO_cW86HsUW_10LjHIDO-IL0WR2I', '19ca14e7ea6328a42e0eb13d585e4c22.jpg', '2020-03-30', '2020-04-08', 0, 1),
(37, 4, '14- El Origen de la Pedofilia ', 'https://mega.nz/#!AWZWHajS!hr620h5bB_panwJvDQ0b4mbQV_RgUn6Ih8cepgvhByA', 'a5bfc9e07964f8dddeb95fc584cd965d.jpg', '2020-03-31', '2020-04-09', 0, 1),
(38, 4, '15- La Adicción Sexual ', 'https://mega.nz/#!oCZSWSxB!ySGVQlm-8zTMakkmy7OMQPX0xLc2g3E6p94DBkWPo6k', 'a5771bce93e200c36f7cd9dfd0e5deaa.jpg', '2020-03-31', '2020-04-09', 0, 1),
(39, 4, '16- Familias Expulsivas y Contenedoras', 'https://mega.nz/#!BbpwSQAb!06g-Ri2Lr8DoGwEyUWm-Xsl40gmSjmEb_E2fyaN07rI', 'd67d8ab4f4c10bf22aa353e27879133c.jpg', '2020-04-06', '2020-04-15', 0, 1),
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
(73, 7, '00- Introducción', 'https://mega.nz/#!VfwGHYjT!aZo8RQMxleOwifT6RAIZSjVdyqpHAZ27Sw5_Q8BdQjI', 'd2ddea18f00665ce8623e36bd4e3c7c5.jpg', '2020-03-02', '2020-03-18', 0, 1),
(74, 7, '01- Objetivos y Fundamentación del Curso', 'https://mega.nz/#!kKBhWaoC!vQxkCLmankPtuNO7wnzSxVQUIUXu_0Fl72w__E8N9bg', 'ad61ab143223efbc24c7d2583be69251.jpg', '2020-03-02', '2020-03-18', 0, 1),
(75, 7, '02- Marco Institucional ', 'https://mega.nz/#!NfwzxTLB!nw_dXSIq1_IaoTA1PhBpKMBmeuAw3tyjVy46BPUWQlM', 'd09bf41544a3365a46c9077ebb5e35c3.jpg', '2020-03-03', '2020-03-19', 0, 1),
(76, 7, '03- Modelo Ecológico del Trabajo de Redes ', 'https://mega.nz/#!cDxySCRL!YFYoCJ4J6ik2FS15XPmPIqMsAA9tMzNUaFZkwf9MsF8', 'fbd7939d674997cdb4692d34de8633c4.jpg', '2020-03-03', '2020-03-19', 0, 1),
(77, 7, '04- Maltrato Infantil ', 'https://mega.nz/#!hPpk3AQY!WQnP3mIJ-dTPkFhQJ7nYwrLzfMrsBFk1n_zW7sKAVXI', '28dd2c7955ce926456240b2ff0100bde.jpg', '2020-03-09', '2020-03-18', 0, 1),
(78, 7, '05- Maltrato Infantil como Factor de Riesgo de ASI', 'https://mega.nz/#!MKIHEQoK!Fihn5rIoc_V8Pmn9Lsq9-bNKhl5u2M9dWmsFIHM6bk8', '35f4a8d465e6e1edc05f3d8ab658c551.jpg', '2020-03-09', '2020-03-18', 0, 1),
(79, 7, '06- Situación Alarmante. Estadísticas de ASI ', 'https://mega.nz/#!gCBxzQiB!ZZZLqHKgIj3C7895gGDI1J8JaS43i3HPbHYgq_ORRuc', 'd1fe173d08e959397adf34b1d77e88d7.jpg', '2020-03-10', '2020-03-19', 0, 1),
(80, 7, '07- Mitos del Abuso Sexual Infantil ', 'https://mega.nz/#!EfIVlCSb!FnSIHAEvOGNRAjDpKpf2XrdmgARs8n0FuKw_mQm7qG0', 'f033ab37c30201f73f142449d037028d.jpg', '2020-03-10', '2020-03-19', 0, 1),
(81, 7, '08- Factores de Riesgo del Abuso Sexual Infantil ', 'https://mega.nz/#!IKowhSCC!NGrJBAYQHXfh54BcUbIBKxN9kU4EAl_Eo8v2pW3hSAY', '43ec517d68b6edd3015b3edc9a11367b.jpg', '2020-03-16', '2020-03-25', 0, 1),
(82, 7, '09- Abuso Sexual Infantil. Definición ', 'https://mega.nz/#!Ze4Cya4R!FEYZTpPv_SzMgfawvmKEPFftgboZMpJR1QRNzbkpSzg', '9778d5d219c5080b9a6a17bef029331c.jpg', '2020-03-16', '2020-03-25', 0, 1),
(83, 7, '10- Tipos de Abuso Sexual Infantil ', 'https://mega.nz/#!RaIQXYJD!b11-HmIOAZyVhp7zoFc0Hce5-eIpdqf9OUVr2bdpVV8', 'fe9fc289c3ff0af142b6d3bead98a923.jpg', '2020-03-17', '2020-03-26', 0, 1),
(84, 7, '11- Indicadores del Abuso Sexual Infantil ', 'https://mega.nz/#!YXZR1YoQ!ezr_oQ789VUteB_-FEiENSy-t1ip7iK7r566I8hpgJ8', '68d30a9594728bc39aa24be94b319d21.jpg', '2020-03-17', '2020-03-26', 0, 1),
(85, 7, '12- Perfil del Abusador/a ', 'https://mega.nz/#!FXIl2CiK!bTQM-oHMJ9S4zb2dZKPaYOK0ROxYqjIwj3ljM1CaLtY', '3ef815416f775098fe977004015c6193.jpg', '2020-03-30', '2020-04-08', 0, 1),
(86, 7, '13- Estrategias del Abusador/a ', 'https://mega.nz/#!5LBFHSbR!AxFLMCU4Y-XcuuAmO_cW86HsUW_10LjHIDO-IL0WR2I', '93db85ed909c13838ff95ccfa94cebd9.jpg', '2020-03-30', '2020-04-08', 0, 1),
(87, 7, '14- El origen de la Pedofilia ', 'https://mega.nz/#!AWZWHajS!hr620h5bB_panwJvDQ0b4mbQV_RgUn6Ih8cepgvhByA', 'c7e1249ffc03eb9ded908c236bd1996d.jpg', '2020-03-31', '2020-04-09', 0, 1),
(88, 7, '15- La Adicción Sexual ', 'https://mega.nz/#!oCZSWSxB!ySGVQlm-8zTMakkmy7OMQPX0xLc2g3E6p94DBkWPo6k', '2a38a4a9316c49e5a833517c45d31070.jpg', '2020-03-31', '2020-04-09', 0, 1),
(89, 7, '16- Familias Expulsivas y Contenedoras', 'https://mega.nz/#!BbpwSQAb!06g-Ri2Lr8DoGwEyUWm-Xsl40gmSjmEb_E2fyaN07rI', '7647966b7343c29048673252e490f736.jpg', '2020-04-06', '2020-04-15', 0, 1),
(90, 7, '17- Actitud de las Madres', 'www', '8613985ec49eb8f757ae6439e879bb2a.jpg', '2020-04-06', '2020-04-15', 0, 1),
(91, 7, '18- Secuelas y Flash Back. Factores Predictores', 'www', '54229abfcfa5649e7003b83dd4755294.jpg', '2020-04-07', '2020-04-16', 0, 1),
(92, 7, '19- Stress Post Traumático ', 'ww', '92cc227532d17e56e07902b254dfad10.jpg', '2020-04-07', '2020-04-16', 0, 1),
(93, 7, '20- Revelación, Retractación y Re victimización ', 'ww', '98dce83da57b0395e163467c9dae521b.jpg', '2020-04-13', '2020-04-22', 0, 1),
(94, 7, '21- Qué hacer ante un abuso', 'w', 'f4b9ec30ad9f68f89b29639786cb62ef.jpg', '2020-04-13', '2020-04-22', 0, 1),
(95, 7, '22- Prevención. Mitos. Tipos', 'www', '812b4ba287f5ee0bc9d43bbf5bbe87fb.jpg', '2020-04-14', '2020-04-23', 0, 1),
(96, 7, '23- Prevención II ', 'www', '26657d5ff9020d2abefe558796b99584.jpg', '2020-04-14', '2020-04-23', 0, 1),
(97, 7, '24- Ejes de la Prevención', 'w', 'e2ef524fbf3d9fe611d5a8e90fefdc9c.jpg', '2020-04-20', '2020-04-29', 0, 1),
(98, 7, '25- Prevención Eficaz ', 'w', 'ed3d2c21991e3bef5e069713af9fa6ca.jpg', '2020-04-20', '2020-04-29', 0, 1),
(99, 7, '26- Marco Normativo de los Derechos del Niño', 'w', 'ac627ab1ccbdb62ec96e702f07f6425b.jpg', '2020-04-21', '2020-04-30', 0, 1),
(100, 7, '27- La ideología de Género', 'w', 'f899139df5e1059396431415e770c6dd.jpg', '2020-04-21', '2020-04-30', 0, 1),
(101, 7, '28- Sexualidad Humana ', 'w', '38b3eff8baf56627478ec76a704e9b52.jpg', '2020-04-27', '2020-05-06', 0, 1),
(102, 7, '29- Marco Legal de la Educación Sexual ', 'w', 'ec8956637a99787bd197eacd77acce5e.jpg', '2020-04-27', '2020-05-06', 0, 1),
(103, 7, '30- Fundamentación del Programa ', 'w', '6974ce5ac660610b44d9b9fed0ff9548.jpg', '2020-04-28', '2020-05-07', 0, 1),
(104, 7, '31- Didáctica de la Prevención ', 'w', 'c9e1074f5b3f9fc8ea15d152add07294.jpg', '2020-04-28', '2020-05-07', 0, 1),
(105, 7, '32- Factores Protectores del Abuso Sexual Infantil', 'w', '65b9eea6e1cc6bb9f0cd2a47751a186f.jpg', '2020-05-04', '2020-05-13', 0, 1),
(106, 7, '33- Factores Protectores del Abuso Sexual Infantil', 'w', 'f0935e4cd5920aa6c7c996a5ee53a70f.jpg', '2020-05-04', '2020-05-13', 0, 1),
(107, 7, '34- El Grupo ', 'w', 'a97da629b098b75c294dffdc3e463904.jpg', '2020-05-05', '2020-05-14', 0, 1),
(108, 7, '35- Rol del Coordinador y del Observador ', 'w', 'a3c65c2974270fd093ee8a9bf8ae7d0b.jpg', '2020-05-05', '2020-05-14', 0, 1),
(109, 7, '36- Perfil del Preventor ', 'w', '2723d092b63885e0d7c260cc007e8b9d.jpg', '2020-05-11', '2020-05-20', 0, 1),
(110, 7, '37- Incumbencias de la Formación de Preventores ', 'w', '5f93f983524def3dca464469d2cf9f3e.jpg', '2020-05-11', '2020-05-20', 0, 1),
(111, 7, '38- Síndrome de Burn Out ', 'w', '698d51a19d8a121ce581499d7b701668.jpg', '2020-05-12', '2020-05-21', 0, 1),
(112, 7, '39- Trabajo en Equipo ', 'w', '7f6ffaa6bb0b408017b62254211691b5.jpg', '2020-05-12', '2020-05-21', 0, 1),
(113, 7, '40- La Denuncia ', 'w', '73278a4a86960eeb576a8fd4c9ec6997.jpg', '2020-05-18', '2020-05-27', 0, 1),
(114, 7, '41- La Resiliencia ', 'w', '5fd0b37cd7dbbb00f97ba6ce92bf5add.jpg', '2020-05-18', '2020-05-27', 0, 1),
(115, 7, '42- Restauración del Sobreviviente de Abuso Sexual', 'w', '2b44928ae11fb9384c4cf38708677c48.jpg', '2020-05-19', '2020-05-28', 0, 1),
(116, 7, '43- Testimonio de Restauración ', 'w', 'c45147dee729311ef5b5c3003946c48f.jpg', '2020-05-19', '2020-05-28', 0, 1),
(117, 7, '44- Psicomotricidad y Musimotricidad ', 'w', 'eb160de1de89d9058fcb0b968dbbbd68.jpg', '2020-05-26', '2020-06-04', 0, 1),
(118, 7, '45- Recursos Lúdicos', 'w', '5ef059938ba799aaa845e1c2e8a762bd.jpg', '2020-05-26', '2020-06-04', 0, 1),
(119, 1, 'clase prueba', '', '07e1cd7dca89a1678042477183b7ac3f.jpg', '2020-02-27', '2020-02-28', 0, 1),
(120, 7, '46- Programa “Mientras nos divertimos aprendemos a', '', 'da4fb5c6e93e74d3df8527599fa62642.jpg', '2020-06-01', '2020-06-10', 0, 1),
(121, 7, '47- Desarrollo de los bloques. Técnicas de present', 'w', '4c56ff4ce4aaf9573aa5dff913df997a.jpg', '2020-06-01', '2020-06-10', 0, 1),
(122, 7, '48- Bloque 1: Autoestima - Los sentidos.', 'ww', 'a0a080f42e6f13b3a2df133f073095dd.jpg', '2020-06-02', '2020-06-11', 0, 1),
(123, 7, '49- Bloque 1: Emociones. Maltrato Emocional. Preve', 'ww', '202cb962ac59075b964b07152d234b70.jpg', '2020-06-02', '2020-06-11', 0, 1),
(124, 7, '50- Bloque 1: Comunicación. CNV. Comunicación No V', 'www', 'c8ffe9a587b126f152ed3d89a146b445.jpg', '2020-06-08', '2020-06-17', 0, 1),
(125, 7, '51- Bloque 2: Higiene. Partes Íntimas. Diferencias', 'www', '3def184ad8f4755ff269862ea77393dd.jpg', '2020-06-08', '2020-06-17', 0, 1),
(126, 7, '52- Bloque 1 Pre Juveniles/ Adolescentes. Autoesti', 'www', '069059b7ef840f0c74a814ec9237b6ec.jpg', '2020-06-09', '2020-06-18', 0, 1),
(127, 7, '53- Bloque 3: Partes Íntimas.', 'www', 'ec5decca5ed3d6b8079e2e7e7bacc9f2.jpg', '2020-06-09', '2020-06-18', 0, 1),
(128, 7, '54- Prevención del Embarazo.', 'www', '76dc611d6ebaafc66cc0879c71b5db5c.jpg', '2020-06-15', '2020-06-24', 0, 1),
(129, 7, '55- Prevención del Aborto', 'www', 'd1f491a404d6854880943e5c3cd9ca25.jpg', '2020-06-15', '2020-06-24', 0, 1),
(130, 7, '56- Bloque 4: Prevención del HIV. Derecho a Decir ', 'www', '9b8619251a19057cff70779273e95aa6.jpg', '2020-06-16', '2020-06-25', 0, 1),
(131, 7, '57- Psicodrama. Vivenciales. La Gestalt', 'www', '1afa34a7f984eeabdbb0a7d494132ee5.jpg', '2020-06-16', '2020-06-25', 0, 1),
(132, 7, '58- Entrenamiento Vivencial Emocional ', 'www', '65ded5353c5ee48d0b7d48c591b8f430.jpg', '2020-06-22', '2020-07-01', 0, 1),
(133, 7, '59- Entrenamiento Vivencial Emocional ', 'www', '9fc3d7152ba9336a670e36d0ed79bc43.jpg', '2020-06-22', '2020-07-01', 0, 1),
(134, 7, '60- Bloque 3: Prevención del Abuso Sexual.  Secret', 'www', '02522a2b2726fb0a03bb19f2d8d9524d.jpg', '2020-06-23', '2020-07-02', 0, 1),
(135, 7, '61- Uso de Láminas Disparadoras ', 'www', '7f1de29e6da19d22b51c68001e7e0e54.jpg', '2020-06-23', '2020-07-02', 0, 1),
(136, 7, '62- Uso de Radioteatros. Salidas de Escapes.  Uso ', '', '42a0e188f5033bc65bf8d78622277c4e.jpg', '2020-06-29', '2020-07-08', 0, 1),
(137, 7, '63- Prácticas de Observación. Directrices para ela', '', '3988c7f88ebcb58c6ce932b957b6f332.jpg', '2020-06-29', '2020-07-08', 0, 1),
(138, 7, '64- La Graduación', '', '013d407166ec4fa56eb1e1f8cbe183b9.jpg', '2020-06-30', '2020-07-09', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_cursos_clases_adjuntos`
--

CREATE TABLE `pow_cursos_clases_adjuntos` (
  `Id` int(11) NOT NULL,
  `claseID` int(11) NOT NULL,
  `archivo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_cursos_clases_adjuntos`
--

INSERT INTO `pow_cursos_clases_adjuntos` (`Id`, `claseID`, `archivo`, `link`) VALUES
(49, 70, 'eccbc87e4b5ce2fe28308fd9f2a7baf3.pdf', ''),
(74, 50, 'Convencion DD del niño.pdf', ''),
(80, 15, 'Teoria Ecologica  Sistemas Urie Bronfrenbrenner.jpg', ''),
(52, 12, 'CV Docentes Curso 2020.pdf', ''),
(76, 12, 'Programa Curso Prev 2020- Argentina.pdf', ''),
(54, 12, 'Cartilla Curso de Preventores ONLINE.pdf', ''),
(55, 15, 'Modelo Ecologico 2019.jpg', ''),
(56, 16, 'INFORME MUNDIAL DE VIOLENCIA Y SALUD.pdf', ''),
(57, 16, 'NIÑOS Y VIOLENCIA. Unicef.pdf', ''),
(58, 12, 'Protocolo Curso Online Semipresencial Argentina 2020.pdf', ''),
(79, 73, 'Protocolo-Curso-Online-Internacional-2020.pdf', ''),
(61, 74, 'Cartilla Curso de Preventores ONLINE.pdf', ''),
(62, 76, 'Modelo Ecologico 2019.jpg', ''),
(63, 77, 'INFORME MUNDIAL DE VIOLENCIA Y SALUD.pdf', ''),
(64, 77, 'NIÑOS Y VIOLENCIA. Unicef.pdf', ''),
(65, 73, 'CONTRATO EXCLUSIVIDAD 2020 INTERNACIONAL.pdf', ''),
(66, 12, 'CONTRATO EXCLUSIVIDAD 2020 ARGENTINA.pdf', ''),
(67, 73, 'CV Docentes Curso 2020.pdf', ''),
(68, 97, 'Bloques MNDAV.jpeg', ''),
(69, 103, 'Bloques MNDAV.jpeg', ''),
(70, 54, 'Bloques MNDAV.jpeg', ''),
(71, 57, 'Salidas de Escapes escritas por niños.pdf', ''),
(72, 106, 'Salidas de Escapes escritas por niños.pdf', ''),
(73, 99, 'Convencion DD del niño.pdf', ''),
(78, 73, 'Programa-Curso-Preventores-Online-2020.pdf', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_cursos_clases_preguntas`
--

CREATE TABLE `pow_cursos_clases_preguntas` (
  `Id` int(11) NOT NULL,
  `claseID` int(11) NOT NULL,
  `pregunta` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `orden` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_cursos_clases_preguntas`
--

INSERT INTO `pow_cursos_clases_preguntas` (`Id`, `claseID`, `pregunta`, `orden`) VALUES
(1, 70, 'Pregunta 1', 0),
(2, 70, 'Pregunta 2', 1),
(3, 70, 'Pregunta 3', 2),
(92, 15, ' Video 2: Murga  https://www.youtube.com/watch?v=qKJWaRnl_CY', 1),
(42, 19, 'Investigue y responda: ¿Qué estadísticas respecto al ASI hay en su ciudad/provincia?', 1),
(41, 19, 'Responda: ¿Por qué el maltrato infantil es un factor de riesgo para el ASI?', 0),
(11, 119, '1.	Escoger y ver uno de estos videos: Murga o work shop 2017. https://www.youtube.com/watch?v=c2rHxC', 0),
(44, 23, 'Identifique y escriba los indicadores físicos y conductuales y los factores de riesgo en la historia de Katy.', 1),
(43, 23, 'Ver video “Bajo la Manta del Silencio” https://www.youtube.com/watch?time_continue=2&v=Zd2SRSCYQ_c&feature=emb_logo', 0),
(46, 38, 'Identifique y responda: Según algún caso conocido para ud. ¿qué rasgos del perfil del abusador pudo identificar en el ofensor? (puede ser un caso particular o bien un caso de público conocimiento) ', 1),
(45, 38, 'Responda: ¿Por qué la pornografía es un factor de riesgo para el ASI?', 0),
(48, 43, 'Sobre el mismo caso conocido: Identifique las secuelas que dejó el abuso sexual. ', 1),
(47, 43, 'Responda: Según algún caso conocido para ud. ¿Cómo fue la actitud de la familia frente al abuso?', 0),
(20, 47, 'Responda: ¿Qué se debe hacer cuando se descubre un abuso? ¿Cómo evitar la revictimización de la víct', 0),
(21, 47, 'Según todo lo aprendido hasta hoy ¿cree que es posible la prevención del ASI? ¿Cómo podemos prevenir', 1),
(22, 51, 'Responda: ¿A qué llamamos prevención eficaz? ', 0),
(23, 51, 'Enumere los derechos del niño que son transversales al Programa de prevención. ', 1),
(86, 76, 'Video 2: Murga  https://www.youtube.com/watch?v=qKJWaRnl_CY', 1),
(26, 80, 'Responda: ¿Por qué el maltrato infantil es un factor de riesgo para el ASI? ', 0),
(27, 80, 'Investigue y responda: ¿Qué estadísticas respecto al ASI hay en su ciudad/provincia/departamento??', 1),
(28, 84, 'Ver video “Bajo la Manta del Silencio” https://www.youtube.com/watch?time_continue=2&v=Zd2SRSCYQ_c&f', 0),
(29, 84, 'Identifique y escriba los indicadores físicos y conductuales y los factores de riesgo en la historia', 1),
(30, 88, 'Responda: ¿Por qué la pornografía es un factor de riesgo para el ASI? ', 0),
(31, 88, 'Identifique y responda: Según algún caso conocido para ud. ¿qué rasgos del perfil del abusador pudo ', 1),
(32, 92, 'Responda: Según algún caso conocido para ud. ¿Cómo fue la actitud de la familia frente al abuso? ', 0),
(33, 92, 'Sobre el mismo caso conocido: Identifique las secuelas que dejó el abuso sexual.  ', 1),
(34, 96, 'Responda: ¿Qué se debe hacer cuando se descubre un abuso? ¿Cómo evitar la revictimización de la víct', 0),
(35, 96, 'Según todo lo aprendido hasta hoy ¿cree que es posible la prevención del ASI? ¿Cómo podemos prevenir', 1),
(36, 100, ' Responda: ¿A qué llamamos prevención eficaz? ', 0),
(37, 100, 'Enumere los derechos del niño que son transversales al Programa de prevención. ', 1),
(93, 15, 'Responda: ¿Cómo aplicaría la prevención primordial en su zona?', 2),
(49, 55, 'Responda: ¿Cuál es la concepción de sexualidad de la Fundación EPASI?', 0),
(50, 55, 'Responda: ¿Cuáles son los peligros de la ideología de género inmiscuida en la enseñanza de educación sexual?', 1),
(51, 59, 'Responda: ¿Qué normas de seguridad puede implementar en su institución y/o familia? ', 0),
(52, 59, '¿Cuáles son las aptitudes que debe desarrollar el coordinador? ', 1),
(53, 63, 'Responda: ¿Por qué cree ud. que es capaz de ser un preventor del abuso sexual infantil? ', 0),
(54, 63, '¿Por qué es importante el trabajo en equipo para la tarea de la prevención? Justifique su respuesta. ', 1),
(55, 67, 'Responda: ¿Cuándo es aplicable la denuncia pública? ', 0),
(69, 67, 'Ver video de Joyce Meyer e identificar aspectos resilientes de la sobreviviente https://www.youtube.com/watch?v=B0f2QPR5lkY https://www.youtube.com/watch?v=EN_ISZGxiAU https://www.youtube.com/watch?v=', 1),
(57, 69, 'Responda: ¿Es posible la total recuperación de un abuso sexual?', 0),
(58, 69, '¿Por qué es importante el uso de canciones y juegos en la metodología de la prevención?', 1),
(59, 104, 'Responda: ¿Cuál es la concepción de sexualidad de la Fundación EPASI?', 0),
(60, 104, '¿Cuáles son los peligros de la ideología de género inmiscuida en la enseñanza de educación sexual?', 1),
(61, 108, 'Responda: ¿Qué normas de seguridad puede implementar en su institución y/o familia? ', 0),
(62, 108, '¿Cuáles son las aptitudes que debe desarrollar el coordinador? ', 1),
(63, 112, 'Responda: ¿Por qué cree ud. que es capaz de ser un preventor del abuso sexual infantil? ', 0),
(64, 112, '¿Por qué es importante el trabajo en equipo para la tarea de la prevención? Justifique su respuesta. ', 1),
(65, 116, 'Responda: ¿Cuándo es aplicable la denuncia pública? ', 0),
(70, 116, 'Ver video de Joyce Meyer e identificar aspectos resilientes de la sobreviviente https://www.youtube.com/watch?v=B0f2QPR5lkY https://www.youtube.com/watch?v=EN_ISZGxiAU https://www.youtube.com/watch?v=', 1),
(67, 118, 'Responda: ¿Es posible la total recuperación de un abuso sexual?', 0),
(68, 118, '¿Por qué es importante el uso de canciones y juegos en la metodología de la prevención?', 1),
(87, 76, ' Responda: ¿Cómo aplicaría la prevención primordial en su zona?', 2),
(85, 76, 'A continuación le presentamos dos videos, de los cuales debe escoger uno y responder qué tipo de prevención es. Video 1. Work shop 2017 https://www.youtube.com/watch?v=c2rHxCyKKG0&t=15s', 0),
(91, 15, 'A continuación le presentamos dos videos, de los cuales debe escoger uno y responder qué tipo de prevención es. Video 1. Work shop 2017 https://www.youtube.com/watch?v=c2rHxCyKKG0&t=15s', 0);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_mensajes`
--

INSERT INTO `pow_mensajes` (`Id`, `remitenteID`, `destinatarioID`, `mensaje`, `enviado`, `leido`) VALUES
(11, 9, 146, 'Estimada, buen día. Debe seleccionar el Curso de formacion de preventores para comenzar el cursado. Debe ir a la pestaña \"Mis Cursos\". Gracias!', '2020-03-02 10:09:59', '2020-03-02 10:19:55'),
(3, 3, 7, 'Buenas tardes Julieta, necesitamos por favor que te pongas en contacto con nosotros.', '2020-02-03 23:05:17', '2020-02-03 23:05:51'),
(4, 10, 244, 'Estimada Mariana,hemos recibido dos suscripciones suyas al Curso de Formación de preventores del Abuso Sexual Infantil, debe escoger una. Le comentamos que la opción %100 Online es solo para el extranjero, para Argentina el Curso es Online/ Semipresencial.\nSera un gusto para nosotros contar con su participación\nSaludos cordiales, preventora Nadia Medina', '2020-02-28 19:03:54', '0000-00-00 00:00:00'),
(5, 10, 247, 'Estimada Marcela! hemos recibido su registro, nos alegra contar con su presencia! hemos observado que faltan llenar datos en su formulario de inscripción.\nSaludos cordiales, preventora Nadia Medina', '2020-03-01 20:37:48', '0000-00-00 00:00:00'),
(6, 10, 232, 'Estimada Mirta! hemos recibido su registro, nos alegra contar con su presencia! hemos observado que faltan llenar datos en su formulario de inscripción, los mismos son muy importantes para avanzar en la inscripción esperamos que pueda llenarlos, ante cualquier inquietud, no dude en escribirnos.\nSaludos cordiales, preventora Nadia Medina', '2020-03-01 20:46:56', '0000-00-00 00:00:00'),
(7, 10, 280, 'Estimada Patricia! hemos recibido su registro, nos alegra contar con su presencia! hemos observado que faltan llenar datos en su formulario de inscripción, los mismos son muy importantes para avanzar en la inscripción esperamos que pueda llenarlos, ante cualquier inquietud, no dude en escribirnos.\nSaludos cordiales, preventora Nadia Medina', '2020-03-01 20:51:37', '0000-00-00 00:00:00'),
(8, 10, 235, 'Estimada! hemos recibido su registro, nos alegra contar con su presencia! hemos observado que faltan llenar datos en su formulario de inscripción, los mismos son muy importantes para avanzar en la inscripción esperamos que pueda llenarlos, ante cualquier inquietud, no dude en escribirnos.\nSaludos cordiales, preventora Nadia Medina', '2020-03-01 20:52:16', '0000-00-00 00:00:00'),
(9, 10, 276, 'Estimada! hemos recibido su registro, nos alegra contar con su presencia! hemos observado que faltan llenar datos en su formulario de inscripción, los mismos son muy importantes para avanzar en la inscripción esperamos que pueda llenarlos, ante cualquier inquietud, no dude en escribirnos.\nSaludos cordiales, preventora Nadia Medina', '2020-03-01 20:52:42', '2020-03-01 23:21:36'),
(10, 3, 17, 'Estimado usuario! hemos recibido su registro, nos alegra contar con su presencia! hemos observado que faltan llenar datos en su formulario de inscripción, los mismos son muy importantes para avanzar en la inscripción esperamos que pueda llenarlos, ante cualquier inquietud, no dude en escribirnos. Saludos cordiales!', '2020-03-02 00:22:50', '2020-03-09 12:14:36'),
(12, 10, 20, 'Hola! respondeme!', '2020-03-02 10:51:19', '0000-00-00 00:00:00'),
(13, 10, 286, '\nEstimada! hemos recibido su registro, nos alegra contar con su presencia! hemos observado que faltan llenar datos en su formulario de inscripción, los mismos son muy importantes para avanzar en la inscripción esperamos que pueda llenarlos, ante cualquier inquietud, no dude en escribirnos. Saludos cordiales, preventora Nadia Medina', '2020-03-03 09:48:12', '0000-00-00 00:00:00'),
(14, 10, 299, '\nEstimada! hemos recibido su registro, nos alegra contar con su presencia! hemos observado que faltan llenar datos en su formulario de inscripción, los mismos son muy importantes para avanzar en la inscripción esperamos que pueda llenarlos, ante cualquier inquietud, no dude en escribirnos. Saludos cordiales, preventora Nadia Medina', '2020-03-03 09:48:55', '0000-00-00 00:00:00'),
(15, 12, 241, 'Roxana soy de soporte me dijeron que no puede cargar su DNI. ¿Puedes intentar cargarlos sin poner punto entre medio? ', '2020-03-03 10:46:34', '2020-03-03 20:32:00'),
(16, 10, 236, 'Estimada! hemos recibido su registro, nos alegra contar con su presencia! hemos observado que faltan llenar datos en su formulario de inscripción  y la documentación correspondiente para avanzar en su inscripción. Saludos cordiales, preventora Nadia Medina', '2020-03-03 14:54:07', '0000-00-00 00:00:00'),
(17, 13, 287, 'Estimada, podría verificar su correo electrónico? gracias!', '2020-03-05 11:16:21', '0000-00-00 00:00:00'),
(18, 13, 220, 'Estimada, podría verificar su correo electrónico? gracias!', '2020-03-05 11:17:46', '0000-00-00 00:00:00'),
(19, 13, 301, 'Estimada, por favor verifique su correo electronico. gracias!', '2020-03-05 12:15:56', '2020-03-06 13:23:16');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_users`
--

INSERT INTO `pow_users` (`Id`, `user`, `pass`, `email`, `active`, `datos`, `documentos`, `money`, `approved`, `admin`) VALUES
(3, '', 'f1e5c64fca3e3217702be0837b2b64ec', 'netfrank777@gmail.com', 1, 1, 0, 0, 0, 1),
(9, '', '0e282a7b9ba43b2556c7a79279a8505e', 'carlamillanperez@gmail.com', 1, 1, 0, 0, 0, 1),
(10, '', 'e845808d85c109d584fd339d63d38906', 'vivisalinas@hotmail.com', 1, 1, 0, 0, 0, 1),
(12, '', '46bcf2f7fc71745cbb42c8705029f1ea', 'valoyeliseo@gmail.com', 1, 1, 0, 0, 1, 1),
(13, '', '1ca8b9aaf0f9e61cd978983348275c80', 'luzsierra7@hotmail.com', 1, 1, 0, 0, 1, 1),
(17, '', 'f1e5c64fca3e3217702be0837b2b64ec', 'userprueba@gmail.com', 1, 1, 0, 0, 0, 0),
(289, '', '1ca8b9aaf0f9e61cd978983348275c80', 'julideseado@live.com.ar', 1, 1, 0, 0, 0, 0),
(20, '', 'b995690a4e1dc6744367f8fc2032e518', 'maritina07@hotmail.com', 1, 1, 0, 0, 0, 1),
(133, '', '1ca8b9aaf0f9e61cd978983348275c80', 'alexiajanet555@gmail.com', 1, 1, 0, 0, 0, 0),
(134, '', '1ca8b9aaf0f9e61cd978983348275c80', 'alibeza49@hotmail.com', 1, 1, 0, 0, 0, 0),
(135, '', '1ca8b9aaf0f9e61cd978983348275c80', 'arandamonica39@gmail.com', 1, 1, 0, 0, 1, 0),
(343, '', 'd6e5488edd6b6c6adc3479e906a30b9c', 'marcelaalejandrarce@gmail.com', 1, 0, 0, 0, 0, 0),
(139, '', '1ca8b9aaf0f9e61cd978983348275c80', 'carlataboada74@gmail.com', 1, 1, 0, 0, 1, 0),
(141, '', '1ca8b9aaf0f9e61cd978983348275c80', 'catalinarazo@hotmail.com', 1, 1, 0, 0, 0, 0),
(142, '', '1ca8b9aaf0f9e61cd978983348275c80', 'ccaprarulo15@gmail.com', 1, 1, 0, 0, 0, 0),
(143, '', '1ca8b9aaf0f9e61cd978983348275c80', 'celemariojonyabi2014@gmail.com', 1, 1, 0, 0, 0, 0),
(144, '', '1ca8b9aaf0f9e61cd978983348275c80', 'claugarcia1407@gmail.com', 1, 1, 0, 0, 1, 0),
(145, '', '1ca8b9aaf0f9e61cd978983348275c80', 'cpamela_sanchezb@hotmail.com', 1, 1, 0, 0, 0, 0),
(146, '', '1ca8b9aaf0f9e61cd978983348275c80', 'danabrus@hotmail.com', 1, 1, 0, 0, 1, 0),
(147, '', '1ca8b9aaf0f9e61cd978983348275c80', 'dany_8221@hotmail.com', 1, 1, 0, 0, 0, 0),
(148, '', '1ca8b9aaf0f9e61cd978983348275c80', 'elbesme_23@hotmail.com', 1, 1, 0, 0, 1, 0),
(149, '', '1ca8b9aaf0f9e61cd978983348275c80', 'girasolesps@gmail.com', 1, 1, 0, 0, 0, 0),
(150, '', '1ca8b9aaf0f9e61cd978983348275c80', 'jes.cua.06@gmail.com', 1, 1, 0, 0, 0, 0),
(151, '', '1ca8b9aaf0f9e61cd978983348275c80', 'juank77_01@hotmail.com', 1, 1, 0, 0, 0, 0),
(152, '', '1ca8b9aaf0f9e61cd978983348275c80', 'juany3286@gmail.com', 1, 1, 0, 0, 0, 0),
(155, '', '1ca8b9aaf0f9e61cd978983348275c80', 'karenrdz310@gmail.com', 1, 1, 0, 0, 0, 0),
(156, '', '1ca8b9aaf0f9e61cd978983348275c80', 'lau_maiorana@hotmail.com', 1, 1, 0, 0, 1, 0),
(157, '', '1ca8b9aaf0f9e61cd978983348275c80', 'lou_toledo@Hotmail.com.ar', 1, 1, 0, 0, 0, 0),
(158, '', '1ca8b9aaf0f9e61cd978983348275c80', 'louvirau@hotmail.com', 1, 1, 0, 0, 1, 0),
(160, '', '1ca8b9aaf0f9e61cd978983348275c80', 'majo0772@gmail.com', 1, 1, 0, 0, 0, 0),
(163, '', 'edf510cdf62cc709c5c67b5e092d14ba', 'migliorelaura03@gmail.com', 1, 1, 0, 0, 1, 0),
(164, '', '1ca8b9aaf0f9e61cd978983348275c80', 'monica.rojas@osde.com.ar', 1, 1, 0, 0, 0, 0),
(165, '', '1ca8b9aaf0f9e61cd978983348275c80', 'morenaima22@gmail.com', 1, 1, 0, 0, 0, 0),
(166, '', '1ca8b9aaf0f9e61cd978983348275c80', 'pao.panima@hotmail.com', 1, 1, 0, 0, 0, 0),
(167, '', '1ca8b9aaf0f9e61cd978983348275c80', 'patriciavillarroel1367@gmail.com', 1, 1, 0, 0, 0, 0),
(169, '', '1ca8b9aaf0f9e61cd978983348275c80', 'ruthlopez1246@gmail.com', 1, 1, 0, 0, 0, 0),
(170, '', '1ca8b9aaf0f9e61cd978983348275c80', 'sonytorres67@yahoo.com.ar', 1, 1, 0, 0, 0, 0),
(171, '', '1ca8b9aaf0f9e61cd978983348275c80', 'valeariel45@gmail.com', 1, 1, 0, 0, 0, 0),
(172, '', '1ca8b9aaf0f9e61cd978983348275c80', 'viviana_lara@hotmail.com', 1, 1, 0, 0, 0, 0),
(173, '', '1ca8b9aaf0f9e61cd978983348275c80', 'yany.valenzuela@gmail.com', 1, 1, 0, 0, 0, 0),
(174, '', '1ca8b9aaf0f9e61cd978983348275c80', 'yesicamartelpsp@gmail.com', 1, 1, 0, 0, 0, 0),
(185, '', '5984a34c1950199b35f0ffa44af867f4', 'pamelaca265@gmail.com', 1, 1, 0, 0, 1, 0),
(186, '', '1ca8b9aaf0f9e61cd978983348275c80', 'piuquet@yahoo.com', 1, 1, 0, 0, 1, 0),
(187, '', '1ca8b9aaf0f9e61cd978983348275c80', 'naj_vida@hotmail.com', 1, 1, 0, 0, 0, 0),
(188, '', '1ca8b9aaf0f9e61cd978983348275c80', 'kalin128@live.com.ar', 1, 1, 0, 0, 0, 0),
(189, '', '1ca8b9aaf0f9e61cd978983348275c80', 'marlili1770@yahoo.com.ar', 1, 1, 0, 0, 0, 0),
(190, '', '1ca8b9aaf0f9e61cd978983348275c80', 'lorenaprocetti@gmail.com', 1, 1, 0, 0, 0, 0),
(322, '', '13b4487d7031158b716d2034b71a2e05', 'robertjosval315@gmail.com', 1, 0, 0, 0, 0, 0),
(192, '', '1ca8b9aaf0f9e61cd978983348275c80', 'payorobles16@gmail.com', 1, 1, 0, 0, 0, 0),
(193, '', '1ca8b9aaf0f9e61cd978983348275c80', 'mabeldelgado832@gmail.com', 1, 1, 0, 0, 0, 0),
(194, '', '1ca8b9aaf0f9e61cd978983348275c80', 'lauv21@hotmail.com', 1, 1, 0, 0, 0, 0),
(195, '', '1ca8b9aaf0f9e61cd978983348275c80', 'realmele@hotmail.com', 1, 0, 0, 0, 0, 0),
(196, '', '1ca8b9aaf0f9e61cd978983348275c80', 'menyta77@gmail.com', 1, 1, 0, 0, 0, 0),
(197, '', '1ca8b9aaf0f9e61cd978983348275c80', 'nancyruizcataratas@gmail.com', 1, 0, 0, 0, 0, 0),
(263, '', '1ca8b9aaf0f9e61cd978983348275c80', 'mariamariuchi77@gmai.com', 1, 1, 0, 0, 0, 0),
(260, '', '1ca8b9aaf0f9e61cd978983348275c80', 'melinaalfano_85@yahoo.com.ar', 1, 1, 0, 0, 0, 0),
(199, '', '88d0c2e4f6296822b2673c346cdfb288', 'mlmagui1976@gmail.com', 1, 1, 0, 0, 0, 0),
(200, '', '1ca8b9aaf0f9e61cd978983348275c80', 'roxibgarcia@gmail.com', 1, 1, 0, 0, 0, 0),
(201, '', '1ca8b9aaf0f9e61cd978983348275c80', 'nattaliasaavedra@gmail.com', 1, 1, 0, 0, 0, 0),
(202, '', '1ca8b9aaf0f9e61cd978983348275c80', 'lucia20_20@hotmail.com', 1, 1, 0, 0, 1, 0),
(203, '', '1ca8b9aaf0f9e61cd978983348275c80', 'bernardomontecino@hotmail.com', 1, 1, 0, 0, 0, 0),
(204, '', '1ca8b9aaf0f9e61cd978983348275c80', 'rociopalavecino7273@gmail.com', 1, 1, 0, 0, 0, 0),
(205, '', '25c1ef1e166789017b8a11a13a1624e6', 'roxanagunzelmann@gmail.com', 1, 1, 0, 0, 0, 0),
(206, '', '1ca8b9aaf0f9e61cd978983348275c80', 'karina_cg11@hitmail.com', 1, 1, 0, 0, 0, 0),
(207, '', '1ca8b9aaf0f9e61cd978983348275c80', 'jesusreina2008@yahoo.com.ar', 1, 1, 0, 0, 1, 0),
(209, '', '1ca8b9aaf0f9e61cd978983348275c80', 'marialau2371@gmail.com', 1, 1, 0, 0, 0, 0),
(264, '', '1ca8b9aaf0f9e61cd978983348275c80', 'ayaviviana@gmail.com', 1, 1, 0, 0, 0, 0),
(211, '', '1ca8b9aaf0f9e61cd978983348275c80', 'cabezaslia@gmail.com', 1, 1, 0, 0, 0, 0),
(212, '', 'ea07f76b50d9ea1c457c90bfdf6f9a62', 'edithregliner@hotmail.com', 1, 1, 0, 0, 0, 0),
(213, '', '1ca8b9aaf0f9e61cd978983348275c80', 'estudiotrelew77@gmail.com', 1, 1, 0, 0, 0, 0),
(214, '', 'e10ed09cd7b0702da151b64627581085', 'claudia-vazquez1970@hotmail.com', 1, 1, 0, 0, 0, 0),
(281, '', 'f7acf462f05968fba2519cf1fb5bf3f8', 'yohatecnica17@gmail.com', 1, 1, 0, 0, 0, 0),
(217, '', '1ca8b9aaf0f9e61cd978983348275c80', 'girasolesps@gmail.com', 1, 0, 0, 0, 0, 0),
(218, '', '1172c3ca150ab0422210423d2a17d80b', 'carlosmunozr@hotmail.com', 1, 1, 0, 0, 0, 0),
(242, '', '434591372f99e9c430c199ebc4d0a831', 'maria.sanguine@hotmail.com', 1, 0, 0, 0, 0, 0),
(220, '', '1ca8b9aaf0f9e61cd978983348275c80', 'psicoafectps.asc@gmail.com', 1, 0, 0, 0, 0, 0),
(221, '', '2e97d58a9d540bfe35c46b3e3ba197b2', 'gabiiviidal_28@hotmail.es', 1, 1, 0, 0, 0, 0),
(222, '', '1ca8b9aaf0f9e61cd978983348275c80', 'mirta_encina1008@hotmail.com', 1, 0, 0, 0, 0, 0),
(223, '', '1ca8b9aaf0f9e61cd978983348275c80', 'sofiacontreras654@gmail.com', 1, 1, 0, 0, 0, 0),
(224, '', '1ca8b9aaf0f9e61cd978983348275c80', 'jpipedro250699@gmail.com', 1, 0, 0, 0, 0, 0),
(225, '', '9c6b0654b7d4ca05ee98952571001490', 'spiquard55@gmail.com', 1, 0, 0, 0, 0, 0),
(226, '', '1ca8b9aaf0f9e61cd978983348275c80', 'marugimenez2016@gmail.com', 1, 0, 0, 0, 0, 0),
(227, '', '1ca8b9aaf0f9e61cd978983348275c80', 'm_daniela_g2016@outlook.com', 1, 0, 0, 0, 0, 0),
(228, '', '1ca8b9aaf0f9e61cd978983348275c80', 'julietachazarreta57@gmail.com', 1, 0, 0, 0, 0, 0),
(229, '', '1ca8b9aaf0f9e61cd978983348275c80', 'jasy099f@gmail.com', 1, 0, 0, 0, 0, 0),
(230, '', '1ca8b9aaf0f9e61cd978983348275c80', 'denizhugo@hotmail.com', 1, 0, 0, 0, 0, 0),
(232, '', '1ca8b9aaf0f9e61cd978983348275c80', 'Corona.bella@hotmail.com', 1, 0, 0, 0, 0, 0),
(233, '', '1ca8b9aaf0f9e61cd978983348275c80', 'vicrey001@gmail.com', 1, 1, 0, 0, 0, 0),
(234, '', '1ca8b9aaf0f9e61cd978983348275c80', 'gustavohz@yahoo.com.ar', 1, 0, 0, 0, 0, 0),
(235, '', '1ca8b9aaf0f9e61cd978983348275c80', 'eunicearista@gmail.com', 1, 0, 0, 0, 0, 0),
(236, '', '1ca8b9aaf0f9e61cd978983348275c80', 'casapasiva@hotmail.com', 1, 1, 0, 0, 0, 0),
(237, '', '1ca8b9aaf0f9e61cd978983348275c80', 'gallardomariasilvina35@gmail.com', 1, 0, 0, 0, 0, 0),
(238, '', '1ca8b9aaf0f9e61cd978983348275c80', 'maxiichiotta016@gmail.com', 1, 1, 0, 0, 0, 0),
(239, '', '1ca8b9aaf0f9e61cd978983348275c80', 'sandrirodri52@gmail.com', 1, 1, 0, 0, 0, 0),
(240, '', 'ea48576f30be1669971699c09ad05c94', 'nfm_13@hotmail.com', 1, 1, 0, 0, 0, 1),
(241, '', '1ca8b9aaf0f9e61cd978983348275c80', 'roxanamainero@yahoo.com', 1, 1, 0, 0, 0, 0),
(318, '', '1ca8b9aaf0f9e61cd978983348275c80', 'magdalenavcr@hotmail.com', 1, 1, 1, 0, 0, 0),
(244, '', '8e57112c96517a965e5de9ee767637e7', 'ayme25ayme@gmail.com', 1, 0, 0, 0, 0, 0),
(245, '', 'd5b2444b588967a743c45ab794a6bf7c', 'adrywelter@gmail.com', 1, 0, 0, 0, 0, 0),
(246, '', '40bace3030ec9a6e623ef38878b38f58', 'ernesmoya063@gmail.com', 1, 0, 0, 0, 0, 0),
(247, '', '8a86a221f4a43fc8099e3be67e958106', 'marcela_alfandari@hotmail.com', 1, 0, 0, 0, 0, 0),
(248, '', '546cf87afddcea1ed1bc6f26d368957d', 'rociogutierrez_812@hotmail.com', 1, 0, 0, 0, 0, 0),
(249, '', '1ca8b9aaf0f9e61cd978983348275c80', 'allabenfe01@gmail.com', 1, 1, 0, 0, 0, 0),
(250, '', '480b417bfd843bea341be3e45c7f4974', 'flor.ceballos@outlook.com', 1, 0, 0, 0, 0, 0),
(251, '', '632fef68f2094d88b4299aca8288efec', 'germankiryk@yahoo.com.ar', 1, 0, 0, 0, 0, 0),
(252, '', '25d9149fa95d5c3df1675a77a39265aa', 'alenogo17@gmail.com', 1, 0, 0, 0, 0, 0),
(253, '', 'e5ca713a126ea5c5e8d71cdee8841930', 'elianamedina1988@gmail.com', 1, 0, 0, 0, 0, 0),
(254, '', 'e30e178c7f11ec7f7d96044f1f11ca5a', 'puca_kareneps@hotmail.com', 1, 0, 0, 0, 0, 0),
(257, '', 'f94c6518baaf33b1b422c6c1906acdc6', 'vanesaz90@hotmail.com', 1, 1, 1, 0, 0, 0),
(258, '', '1ca8b9aaf0f9e61cd978983348275c80', 'jgalianoberino@gmail.com', 1, 1, 0, 0, 0, 0),
(259, '', '1ca8b9aaf0f9e61cd978983348275c80', 'lidialopez68@icloud.com', 1, 1, 0, 0, 0, 0),
(261, '', '2b503d695746e2d05095953b3c526027', 'eslabon@hotmail.com.ar', 1, 1, 0, 0, 0, 0),
(262, '', '867515db60697ee2ddb105544624f16c', 'veronicamartinezalmafuerte@yahoo.com', 1, 0, 0, 0, 0, 0),
(331, '', '04ec1e03f2bb338d57542e902cf2f89b', 'garay_2005_ar@hotmail.com', 1, 0, 0, 0, 0, 0),
(288, '', '1ca8b9aaf0f9e61cd978983348275c80', 'emmanuelvaloy@gmail.com', 1, 1, 0, 0, 1, 0),
(265, '', '4fb56c3e79329dd8f6a73c0181bc8a94', 'hilari_1810@hotmail.com', 1, 0, 0, 0, 0, 0),
(274, '', 'afc06eb04fd0b9d78315638226d26324', 'sandraperalta67@yahoo.com.ar', 1, 1, 0, 0, 0, 0),
(266, '', '1ca8b9aaf0f9e61cd978983348275c80', 'iris86contreras@gmail.com', 1, 1, 0, 0, 0, 0),
(267, '', '1ca8b9aaf0f9e61cd978983348275c80', 'dorysmiranda8@gmail.com', 1, 1, 0, 0, 0, 0),
(268, '', '1ca8b9aaf0f9e61cd978983348275c80', 'vicenta_boveda@hotmail.com', 1, 1, 0, 0, 0, 0),
(314, '', '80ff5e8c90bee3275902e73a0659aee5', 'claudiamartinezdealvear@gmail.com', 1, 0, 0, 0, 0, 0),
(272, '', '641d01bf0e18715c2761f321e3474bf7', 'vero172000@hotmail.com', 1, 0, 0, 0, 0, 0),
(290, '', '1e57a14e47194d551e349f9cda9919a8', 'lucianalescano1994@gmail.com', 1, 0, 0, 0, 0, 0),
(271, '', '0f6ee5d23148304ca8d847fb3f28cc4d', 'barbaralbejar@hotmail.com', 1, 1, 0, 0, 0, 0),
(269, '', '73d1e9c2c65244e5710a7477963e4565', 'sole_fengler@hotmail.com', 1, 0, 0, 0, 0, 0),
(275, '', '1ca8b9aaf0f9e61cd978983348275c80', 'aaron_1419@hotmail.com', 1, 1, 0, 0, 0, 0),
(276, '', '1ca8b9aaf0f9e61cd978983348275c80', 'ama_x1476@hotmail.com', 1, 1, 0, 0, 0, 0),
(277, '', '1d84b6e476dc0f93012aa1966b222b55', 'ailinbjorklund@hotmail.com', 1, 0, 0, 0, 0, 0),
(278, '', '67a30d7afa91299c123c2862ef4d3369', 'caly_555@hotmail.com', 1, 0, 0, 0, 0, 0),
(279, '', '4e59dc0aeaaaa54cf52b8b961880b1eb', 'maricruz_rubio@hotmail.com', 1, 0, 0, 0, 0, 0),
(280, '', '4b5fb83404da2ac398ae3844df2d73d7', 'patriciaaranda677@gmail.com', 1, 1, 0, 0, 0, 0),
(283, '', '9e9be34d760c8a2b86a29b410f70befd', 'ferchu272727@gmail.com', 1, 0, 0, 0, 0, 0),
(284, '', '098f1ddb7b501e86e409edc4e378c690', 'mannyrocio1389roberto@gmail.com', 1, 1, 0, 0, 0, 0),
(285, '', '980de97690e6fc91445b3730a5ff17dc', 'marielencina18@gmail.com', 1, 0, 0, 0, 0, 0),
(286, '', '8a00a275e8ea3914a480c2405adfd586', 'arreguisilvia@hotmail.com', 1, 0, 0, 0, 0, 0),
(287, '', '879ddbac3e23cd083548d84a5b6f29f2', 'claudiakarinaquinteros@gmai.com', 1, 0, 0, 0, 0, 0),
(291, '', '1ca8b9aaf0f9e61cd978983348275c80', 'exenarese2290@gmail.com', 1, 1, 0, 0, 0, 0),
(292, '', '1ca8b9aaf0f9e61cd978983348275c80', 'betianapaolasalvo37@gmail.com', 1, 1, 0, 0, 0, 0),
(293, '', 'c6d18ee3efbc4a17615d0eddea477b58', 'javiermallia@gmail.com', 1, 0, 0, 0, 0, 0),
(294, '', '91a03d786cf849d14ee75cd9ce9f00a9', 'walteralbert43@gmail.com', 1, 1, 0, 0, 0, 0),
(295, '', '6b55381830f425ed140782401d0b6c8f', 'trizli39@gmail.com', 1, 0, 0, 0, 0, 0),
(296, '', 'bf1ef28269d1bdbade7e835288f464a1', 'rogoncalvez77@gmail.com', 1, 1, 0, 0, 0, 0),
(297, '', '1d3337c7c651d6bc5b1afb03410f7813', 'milivite@gmail.com', 1, 1, 0, 0, 0, 0),
(298, '', '18c3550d98827d096ff3da30c783fe61', 'griselda-andrea@hotmail.com', 1, 1, 0, 0, 0, 0),
(299, '', '062c109405c18888b210da4873b54a41', 'patriciaatoche123@gmail.com', 1, 0, 0, 0, 0, 0),
(300, '', '8d9112597b01fee6c4d4fea476f6765a', 'andreapourrieux@gmail.com', 1, 0, 0, 0, 0, 0),
(301, '', '744a39f7521a7fd0b96dbf314488298f', 'clauaramburo_33@hotmail.com', 1, 1, 1, 0, 0, 0),
(302, '', '9a6cc6073a82385e527ffe952db84ab6', 'sdvzoe@gmail.com', 1, 0, 0, 0, 0, 0),
(303, '', '1ca8b9aaf0f9e61cd978983348275c80', 'dorysmiranda8@gmail.com', 1, 1, 0, 0, 0, 0),
(304, '', '1ca8b9aaf0f9e61cd978983348275c80', 'betianapaolasalvo37@gmail.com', 1, 1, 0, 0, 0, 0),
(320, '', '1ca8b9aaf0f9e61cd978983348275c80', 'nataliadanielabenitez@hotmail.com', 1, 1, 1, 0, 0, 0),
(306, '', 'd53f3882b869b252afc0b54698ba7d18', 'modautea@hotmail.com', 1, 0, 0, 0, 0, 0),
(307, '', '1ca8b9aaf0f9e61cd978983348275c80', 'mariajoseg077@gmail.com', 1, 1, 0, 0, 0, 0),
(308, '', '1ca8b9aaf0f9e61cd978983348275c80', 'karenacostapaez@gmail.com', 1, 1, 0, 0, 0, 0),
(333, '', '49df6e5b6186ddc6c40bcc23c9ba5243', 'beritoguzman@gmail.com', 1, 0, 0, 0, 0, 0),
(310, '', '1dbd8eb2fcc232566e4b5da7cbdf4f26', 'cpamela_sanchezb@hotmail.com', 1, 1, 0, 0, 0, 0),
(311, '', '1ca8b9aaf0f9e61cd978983348275c80', 'chica_ejista@hotmail.com', 1, 1, 0, 0, 0, 0),
(312, '', '1ca8b9aaf0f9e61cd978983348275c80', 'clau.righi.cr@gmail.com', 1, 1, 0, 0, 0, 0),
(313, '', '1ca8b9aaf0f9e61cd978983348275c80', 'lidgalmes@gmail.com', 1, 1, 0, 0, 0, 0),
(321, '', 'fb3f6037030c4200d1acbbd7ce58398b', 'sandrawagner94@yahoo.com.ar', 1, 0, 0, 0, 0, 0),
(316, '', '3116541998db5db1c555cb6511580cb1', 'gvero33926@gmail.com', 1, 0, 0, 0, 0, 0),
(323, '', 'fc4b2f2b0d28f18bc528fe64727fd3ff', 'yaniisol95@gmail.com', 1, 0, 0, 0, 0, 0),
(324, '', '4868afee8c4e6c8f5c4e3b7738a29bfa', 'alejjsanchez@hotmail.com', 1, 0, 0, 0, 0, 0),
(325, '', 'f9ac4382839298bb2bfca8fe21aa1151', 'monicaarretche@gmail.com', 1, 0, 0, 0, 0, 0),
(326, '', '9cbe9327808f24f004224d7ef61f09ab', 'Eva16_@hotmail.com', 1, 1, 0, 0, 0, 0),
(327, '', '7a32ec9283407350cdeda4de8c24cc7d', 'elitanquia@gmail.com', 1, 1, 0, 0, 0, 0),
(328, '', 'af55ab84b31d0a6276000aad766444c9', 'lurosem@gmail.com', 1, 0, 0, 0, 0, 0),
(329, '', '2baa1dbb422ab342c18e774ec53cfff2', 'lucasdepascua@gmail.com', 1, 1, 0, 0, 0, 0),
(330, '', 'd06adb6465c3b93cafabc63654d8ff99', 'noe_unco@hotmail.com', 1, 0, 0, 0, 0, 0),
(332, '', '4775007b478da53a538eb2f1df0906e1', 'andreagaray182@gmail.com', 1, 0, 0, 0, 0, 0),
(334, '', 'e57db258d666c0ea08f58aa9bd37825e', 'micaias86@hotmail.com', 1, 0, 0, 0, 0, 0),
(335, '', '0169cd701e1015d8e7b8c5a38638c4c9', 'joako16305@hotmail.com', 1, 0, 0, 0, 0, 0),
(336, '', '215704bc9c2d5567842c1bee320a3cd0', 'la_picha10@hotmail.com', 1, 0, 0, 0, 0, 0),
(337, '', '3ebdfc9f32261f2aca918e49a06b6b5c', 'fmservants@hotmail.es', 1, 0, 0, 0, 0, 0),
(338, '', 'bee972dfd2c3f0a93a8b3ae31dc41d70', 'lainsa_13@hotmail.com', 1, 0, 0, 0, 0, 0),
(339, '', '5eef0f2806c9a143e2b19d5e2d88ff5d', 'mendezgabita24@gmail.com', 1, 0, 0, 0, 0, 0),
(340, '', 'b4eb4e0ad0ed429f616ae4a33baa584b', 'Jesicaro3434@gmail.com', 1, 0, 0, 0, 0, 0),
(341, '', '6a6fa6563b51b076c86458c9dfaab17b', 'loreveliz109@gmail.com', 1, 0, 0, 0, 0, 0),
(342, '', '6658dc368d8535662b060094254c6b16', 'agustinariino@gmail.com', 1, 1, 0, 0, 0, 0),
(344, '', 'a8cd0670422956c369a5d55beaa625df', 'bresciamelody@gmail.com', 1, 0, 0, 0, 0, 0),
(345, '', '13b4487d7031158b716d2034b71a2e05', 'robertjosval135@gmail.com', 1, 0, 0, 0, 0, 0),
(346, '', 'f59bce2c4bf21db0a7fbe96c59c523ff', 'belen.estiga@gmail.com', 1, 0, 0, 0, 0, 0),
(347, '', 'ece82d33ba04f097f795fdb79b4c754a', 'marilinacomeliesi@hotmail.com', 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_users_cursos`
--

CREATE TABLE `pow_users_cursos` (
  `userID` int(11) NOT NULL,
  `cursoID` int(11) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_users_cursos`
--

INSERT INTO `pow_users_cursos` (`userID`, `cursoID`, `estado`) VALUES
(8, 1, 2),
(8, 2, 1),
(12, 1, 2),
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
(19, 4, 1),
(281, 4, 2),
(17, 7, 2),
(216, 4, 1),
(222, 4, 1),
(223, 4, 1),
(225, 4, 1),
(18, 1, 2),
(215, 4, 1),
(231, 4, 2),
(227, 4, 1),
(233, 4, 1),
(235, 7, 1),
(236, 4, 1),
(224, 4, 1),
(238, 4, 1),
(239, 4, 2),
(241, 7, 2),
(244, 4, 2),
(244, 7, 1),
(276, 4, 2),
(247, 4, 1),
(249, 4, 2),
(250, 4, 1),
(254, 7, 1),
(271, 4, 1),
(253, 4, 1),
(255, 7, 2),
(256, 7, 1),
(257, 7, 2),
(243, 7, 1),
(260, 4, 2),
(135, 4, 2),
(263, 4, 1),
(264, 4, 1),
(151, 4, 1),
(194, 4, 2),
(266, 4, 1),
(268, 7, 2),
(280, 4, 1),
(284, 4, 1),
(275, 4, 2),
(303, 4, 2),
(267, 4, 2),
(204, 4, 1),
(146, 4, 2),
(204, 7, 1),
(288, 4, 2),
(288, 7, 2),
(144, 4, 2),
(156, 4, 2),
(158, 4, 2),
(203, 4, 2),
(139, 7, 2),
(186, 4, 2),
(159, 4, 2),
(283, 7, 1),
(283, 4, 1),
(295, 7, 1),
(202, 4, 2),
(185, 4, 2),
(212, 4, 2),
(290, 4, 1),
(293, 7, 1),
(187, 4, 2),
(214, 4, 2),
(297, 7, 2),
(298, 7, 1),
(294, 4, 1),
(205, 4, 2),
(148, 4, 2),
(299, 7, 1),
(163, 4, 2),
(221, 4, 2),
(296, 4, 1),
(207, 4, 2),
(301, 4, 2),
(191, 4, 2),
(310, 4, 2),
(191, 7, 1),
(199, 4, 2),
(315, 4, 2),
(259, 7, 2),
(142, 4, 2),
(258, 7, 2),
(319, 4, 2),
(320, 4, 2),
(303, 7, 1),
(218, 7, 2),
(167, 4, 2),
(318, 4, 2),
(291, 7, 2),
(258, 4, 1),
(334, 4, 1),
(312, 4, 1),
(344, 7, 1),
(342, 4, 2);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(289, 0, 0, 0, 0, 0),
(290, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 0, 0),
(185, 0, 0, 0, 0, 0),
(186, 0, 0, 0, 0, 0),
(187, 0, 0, 0, 0, 0),
(188, 0, 0, 0, 0, 0),
(188, 0, 0, 0, 0, 0),
(189, 0, 0, 0, 0, 0),
(190, 0, 0, 0, 0, 0),
(323, 0, 0, 0, 0, 0),
(192, 0, 0, 0, 0, 0),
(193, 0, 0, 0, 0, 0),
(194, 0, 0, 0, 0, 0),
(195, 0, 0, 0, 0, 0),
(196, 0, 0, 0, 0, 0),
(197, 0, 0, 0, 0, 0),
(263, 0, 0, 0, 0, 0),
(199, 0, 0, 0, 0, 0),
(200, 0, 0, 0, 0, 0),
(201, 0, 0, 0, 0, 0),
(202, 0, 0, 0, 0, 0),
(203, 0, 0, 0, 0, 0),
(204, 0, 0, 0, 0, 0),
(205, 0, 0, 0, 0, 0),
(206, 0, 0, 0, 0, 0),
(207, 0, 0, 0, 0, 0),
(322, 0, 0, 0, 0, 0),
(209, 0, 0, 0, 0, 0),
(211, 0, 0, 0, 0, 0),
(212, 0, 0, 0, 0, 0),
(213, 0, 0, 0, 0, 0),
(214, 0, 0, 0, 0, 0),
(272, 0, 0, 0, 0, 0),
(288, 0, 0, 0, 0, 0),
(217, 0, 0, 0, 0, 0),
(218, 0, 0, 0, 0, 0),
(242, 0, 0, 0, 0, 0),
(220, 0, 0, 0, 0, 0),
(221, 0, 0, 0, 0, 0),
(222, 0, 0, 0, 0, 0),
(223, 0, 0, 0, 0, 0),
(224, 0, 0, 0, 0, 0),
(225, 0, 0, 0, 0, 0),
(226, 0, 0, 0, 0, 0),
(227, 0, 0, 0, 0, 0),
(228, 0, 0, 0, 0, 0),
(229, 0, 0, 0, 0, 0),
(230, 0, 0, 0, 0, 0),
(343, 0, 0, 0, 0, 0),
(232, 0, 0, 0, 0, 0),
(233, 0, 0, 0, 0, 0),
(234, 0, 0, 0, 0, 0),
(235, 0, 0, 0, 0, 0),
(236, 0, 0, 0, 0, 0),
(237, 0, 0, 0, 0, 0),
(238, 0, 0, 0, 0, 0),
(239, 0, 0, 0, 0, 0),
(240, 0, 0, 0, 0, 0),
(241, 0, 0, 0, 0, 0),
(318, 0, 0, 0, 0, 0),
(244, 0, 0, 0, 0, 0),
(245, 0, 0, 0, 0, 0),
(246, 0, 0, 0, 0, 0),
(247, 0, 0, 0, 0, 0),
(248, 0, 0, 0, 0, 0),
(249, 0, 0, 0, 0, 0),
(250, 0, 0, 0, 0, 0),
(251, 0, 0, 0, 0, 0),
(252, 0, 0, 0, 0, 0),
(253, 0, 0, 0, 0, 0),
(254, 0, 0, 0, 0, 0),
(291, 0, 0, 0, 0, 0),
(314, 0, 0, 0, 0, 0),
(257, 0, 0, 0, 0, 0),
(258, 0, 0, 0, 0, 0),
(259, 0, 0, 0, 0, 0),
(260, 0, 0, 0, 0, 0),
(261, 0, 0, 0, 0, 0),
(262, 0, 0, 0, 0, 0),
(264, 0, 0, 0, 0, 0),
(265, 0, 0, 0, 0, 0),
(266, 0, 0, 0, 0, 0),
(267, 0, 0, 0, 0, 0),
(268, 0, 0, 0, 0, 0),
(269, 0, 0, 0, 0, 0),
(271, 0, 0, 0, 0, 0),
(281, 0, 0, 0, 0, 0),
(274, 0, 0, 0, 0, 0),
(275, 0, 0, 0, 0, 0),
(276, 0, 0, 0, 0, 0),
(277, 0, 0, 0, 0, 0),
(278, 0, 0, 0, 0, 0),
(279, 0, 0, 0, 0, 0),
(280, 0, 0, 0, 0, 0),
(283, 0, 0, 0, 0, 0),
(284, 0, 0, 0, 0, 0),
(285, 0, 0, 0, 0, 0),
(286, 0, 0, 0, 0, 0),
(287, 0, 0, 0, 0, 0),
(292, 0, 0, 0, 0, 0),
(293, 0, 0, 0, 0, 0),
(294, 0, 0, 0, 0, 0),
(295, 0, 0, 0, 0, 0),
(296, 0, 0, 0, 0, 0),
(297, 0, 0, 0, 0, 0),
(298, 0, 0, 0, 0, 0),
(299, 0, 0, 0, 0, 0),
(300, 0, 0, 0, 0, 0),
(301, 0, 0, 0, 0, 0),
(302, 0, 0, 0, 0, 0),
(303, 0, 0, 0, 0, 0),
(304, 0, 0, 0, 0, 0),
(320, 0, 0, 0, 0, 0),
(306, 0, 0, 0, 0, 0),
(307, 0, 0, 0, 0, 0),
(308, 0, 0, 0, 0, 0),
(333, 0, 0, 0, 0, 0),
(310, 0, 0, 0, 0, 0),
(311, 0, 0, 0, 0, 0),
(312, 0, 0, 0, 0, 0),
(313, 0, 0, 0, 0, 0),
(321, 0, 0, 0, 0, 0),
(316, 0, 0, 0, 0, 0),
(324, 0, 0, 0, 0, 0),
(325, 0, 0, 0, 0, 0),
(326, 0, 0, 0, 0, 0),
(327, 0, 0, 0, 0, 0),
(328, 0, 0, 0, 0, 0),
(329, 0, 0, 0, 0, 0),
(330, 0, 0, 0, 0, 0),
(331, 0, 0, 0, 0, 0),
(332, 0, 0, 0, 0, 0),
(334, 0, 0, 0, 0, 0),
(335, 0, 0, 0, 0, 0),
(336, 0, 0, 0, 0, 0),
(337, 0, 0, 0, 0, 0),
(338, 0, 0, 0, 0, 0),
(339, 0, 0, 0, 0, 0),
(340, 0, 0, 0, 0, 0),
(341, 0, 0, 0, 0, 0),
(342, 0, 0, 0, 0, 0),
(344, 0, 0, 0, 0, 0),
(345, 0, 0, 0, 0, 0),
(346, 0, 0, 0, 0, 0),
(347, 0, 0, 0, 0, 0);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_users_pagos`
--

INSERT INTO `pow_users_pagos` (`Id`, `userID`, `cursoID`, `medio`, `estado`) VALUES
(2, 18, 4, 'Banco', 1),
(3, 19, 1, 'Banco', 1),
(4, 19, 4, 'Banco', 1),
(6, 231, 4, 'Mercado Pago', 1),
(7, 235, 4, 'Banco', 1),
(8, 233, 4, 'Banco', 1),
(9, 236, 0, 'Mercado Pago', 1),
(10, 238, 4, 'Mercado Pago', 1),
(11, 249, 4, 'Mercado Pago', 1),
(12, 250, 4, 'Banco', 1),
(14, 259, 0, 'Mercado Pago', 1),
(15, 239, 4, 'Banco', 2),
(16, 266, 4, 'Mercado Pago', 1),
(17, 215, 4, 'Banco', 1),
(18, 185, 4, 'Banco', 2),
(19, 281, 4, 'Banco', 2),
(20, 146, 0, 'Mercado Pago', 1),
(21, 267, 4, 'Mercado Pago', 1),
(22, 212, 4, 'Banco', 1),
(24, 202, 4, 'Banco', 1),
(25, 214, 4, 'Banco', 2),
(27, 294, 4, 'Mercado Pago', 1),
(28, 280, 4, 'Mercado Pago', 1),
(29, 297, 7, 'Banco', 1),
(32, 221, 4, 'Mercado Pago', 2),
(33, 241, 7, 'Banco', 1),
(34, 296, 4, 'Mercado Pago', 2),
(42, 163, 4, 'Banco', 2),
(36, 205, 4, 'Banco', 2),
(37, 13, 4, 'Mercado Pago', 1),
(38, 310, 4, 'Banco', 2),
(40, 199, 4, 'Mercado Pago', 2),
(41, 260, 4, 'Mercado Pago', 2),
(43, 142, 4, 'Mercado Pago', 2),
(44, 303, 0, 'Banco', 1),
(45, 284, 4, 'Banco', 1),
(46, 158, 0, 'Mercado Pago', 1),
(47, 218, 7, 'Paypal', 1),
(48, 204, 0, 'Mercado Pago', 1),
(49, 167, 4, 'Mercado Pago', 1),
(50, 318, 4, 'Mercado Pago', 2),
(51, 291, 7, 'Mercado Pago', 1),
(52, 301, 4, 'Banco', 2),
(54, 258, 7, 'Banco', 1),
(55, 334, 4, 'Mercado Pago', 2),
(57, 209, 4, 'Banco', 1);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_users_perfil`
--

INSERT INTO `pow_users_perfil` (`userID`, `nombre`, `apellido`, `nacimiento`, `dni`, `estado_civil`, `pais`, `provincia`, `ciudad`, `direccion`, `cp`, `celular`, `fijo`, `nacionalidad`, `religion`, `proaborto`, `tratamiento`, `medicacion`, `trabajo`, `referencia1_nombre`, `referencia1_email`, `referencia1_celular`, `referencia2_nombre`, `referencia2_email`, `referencia2_celular`, `razones`, `concepcion`) VALUES
(3, 'Franco Daniel', 'Ocaranza', '1985-12-04', 31842369, 'Soltero/a', 'Argentina', 'Tucumán', 'Las Talitas', 'Bº SOEME M7 C27', 4101, '+5493816307673', '', 'Argentina', 'Evangélico', 'En contra', 'No', 'No', 'No', 'Pepe Perez', 'netfrank777@gmail.com', '3816307673', 'Vecino', 'netfrank777@gmail.com', '3815652833', 'Me gustaría capacitarme de la forma más completa para poder desarrollar un servicio en mi congregación.', 'Padre, Madre e hijos'),
(9, 'Carla', 'Millán', '0000-00-00', 33884566, 'Casado/a', 'Argentina', 'Tucuman', 'Yerba Buena', 'Barrio El Mirador', 4105, '+54 9 381 5177', '+54 381 493033', 'Argentina', 'Si- Cristiana', 'En contra', 'No', 'no', 'Si. EPASI', 'Viviana', 'vivisalinas@hotmail.com', '155177', 'Jose', 'Valoy', '155177', 'Docente del curso', 'Papa, mama, hijos'),
(10, 'Viviana', 'Salinas', '1961-05-09', 14226448, 'Casado/a', 'Argentina', 'Tucumán', 'Villa Carmela', 'B° El Mirador Mza R casa 15', 4105, '3815177547', '381 4932343', 'Argentina', 'Si, cristiana evangelica', 'En contra', 'Ninguno', 'No', 'Si, escuela biblica', 'Jose Valoy', 'josevaloy13@hotmail.com', '3815177559', 'Carla Millán Pérez', 'carlamillanperez@gmail.com', '3815177497', 'Por que quiero salvar a esta generación de este flagelo', 'padre, madre e hijos'),
(12, 'Eliseo', 'Valoy', '1989-09-11', 34132720, 'Casado/a', 'Argentina', 'Tucumán', 'San Miguel de Tucuman', 'Pje Monserrat 3050', 4000, '3815181285', '', 'Argentino', 'Cristiano', 'En contra', 'No', 'No', 'Si en Epasi', 'Jose Valoy', 'josevaloy13@hotmail.com', '3815177587', 'Viviana Salinas', 'vivisalinas@hotmail.com', '3815177590', 'Porque quiero servir', 'Por papá, mamá e hijos'),
(13, 'Luz', 'Sierra', '1993-01-08', 41059429, 'Casado/a', 'Argentina', 'Tucumán', 'San Miguel de Tucumán', '4105', 4105, '3813026636', '3813026636', 'Argentina', 'cristiana', 'En contra', 'no', 'luzsierra7@hotmail.com', 'fundacion epasi', 'lu sierra', 'lusierra07@gmail.com', '3813026636', 'dante argañaraz', 'dantearganaraz@gmail.com', '4262478', 'interererezante', 'padres e hijos'),
(17, 'Usuario', 'Prueba', '1996-01-04', 35080800, 'Soltero/a', 'Argentina', 'Tucumán', 'San Miguel de Tucumán', 'Lavalle 222', 43240, '3816528080', '', 'Argentino', 'Sí. Cristiano Evangélico.', 'En contra', 'No.', 'No.', 'Sí, en horas felices.', 'Franco Ocaranza', 'netfrank777@gmail.com', '3816307673', 'Daniel Ocaranza', 'francocaranzawork@gmail.com', '3815652833', 'Quiero capacitarme.', 'Papá, mamá e hijos.'),
(289, 'Julieta Beatriz', 'Zabala', '1971-09-21', 24028856, 'Casado/a', 'Argentina', 'Santa Cruz', 'Puerto Deseado', 'Crucero Gral Belgrano 2020', 0, '2975382721', '', 'Argentina', 'Cristiana Evangelica', 'En contra', '', '', 'Escuela Bíblica infantil', 'Alicia Beatriz Roncoroni ', 'alibeza49@hotmail.com', '2974136313', '', '', '', 'Porque como en toda ciudad el abuso es algo muy frecuente, y necesitamos herramientas para incertarnos y como iglesia involucranos en la sociedad estando capacitados para hacerlo no solamente en el área espiritual como hasta ahora nos ha tocado . Creo que la capacitación es fundamental para poder hacer bien esta tarea .', ''),
(20, 'Maria Marta', 'Sánchez ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(133, 'Alexia Janet', 'Cruz', '1996-03-23', 39573764, 'Casado/a', 'Argentina', 'Tucumán', 'San Miguel de Tucumán', 'Cristo rey 830 manantial', 0, '3816090652', '', 'Argentina', 'Cristiana evangélica', 'En contra', '', '', 'Escuela bíblica (vision apostólica)', '', '', '', '', '', '', 'Actualmente estoy trabajando con niños y deseo aprender sobre indicadores del ASI', ''),
(134, 'alicia', 'roncoroni', '1953-07-30', 10970072, 'Casado/a', 'argentina', 'santa cruz', 'puerto deseado', 'Ezequiel ramos Mejía 2138', 0, '2974136313', '', 'argentina', 'cristiana evangelica (pastora)', 'En contra', '', '', 'en la escuela bíblica', '', '', '', '', '', '', 'porque tristemente cada vez hay mas abusos dentro de los hogares y quiero detectarlos y denunciarlos o tratar de evitarlos seria lo mejor', ''),
(135, 'Mónica Andrea', 'Aranda', '1978-09-27', 26861039, 'Soltero/a', 'Argentina', 'Buenos aires', 'Carmen de Patagones', 'Domingo López 521', 0, '2,92015E+11', '', 'Argentina', 'Cristiana evangélica', 'En contra', '', '', 'En la iglesia', '', '', '', '', '', '', 'Creo necesario ,ya que nuestra labor activa dentro de la sociedad ,y como comidas cristiana recibimos muchos casos y debemos prepararnos para aportar herramientas no solo en lo Espiritual sino que también con herramientas de personas que son entendidas en el tema como la fundación Epasi. Aprovecho para felicitarles x la gran labor que hacen y les ánimo y admiro su gran labor !!', ''),
(264, 'Viviana Mariel', 'Ayala Peña', '1989-02-08', 34333102, '', 'Argentina', 'Buenos Aires', 'Bahía Blanca', 'chacabuco 3241', 0, '', '2914407364', 'Argentina', 'Evangelica', 'En contra', '', '', 'Como maestra de escuela biblica ', 'Pastor Luis Adolfo Carlino ', 'adolfocarlino@hotmail.com ', '5492914290898', ' Mario FuenteAlba ', '', '+5492914476295', 'Soy estudiante avanzada de la carrera de Abogacia en la U.N.S de bahia Blanca y quisiera enfocar mi carrera en la Defensoría de los menores. ', ''),
(343, 'Marcela', 'Arce', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(271, 'Barby', 'Bejar', '1997-05-13', 40383565, 'Casado/a', 'Argentina', 'Santa Cruz', 'Las Heras', '218, 2', 9917, '2974127800', '2974127800', 'Argentina', 'Cristiana', 'En contra', 'No.', 'No.', 'Si trabajé... En escuelita bíblica y también haciendo prevención al abuso en barrios de mi ciudad', 'Bárbara Lucíana Bejar', 'barbarabejar197@gmail.com', '2974127800', '', '', '', 'Deseo capacitarme para poder prevenir el abuso sexual en niños y asistir a víctimas de este flagelo. Soy consciente que hay muchos que son víctimas de esto , pero que también tenemos la solución en nuestras manos a tra vez de este curso. En mi ciudad no hay preventores y yo deseo ser una que ayude a sanar los corazones de quienes fueron víctimas y también prevenir.', 'Mama, papá e hijos.'),
(139, 'Carla', 'Taboada de Perello', '1974-03-11', 1453936, 'Casado/a', 'Paraguay', 'Asuncion', 'Asuncion', 'Ygatimi Casi Colon', 0, '981831183', '595 21 495525', 'paraguaya', 'cristiana evangelica', 'En contra', 'Ninguno', 'no', 'En la iglesia', 'Raquel Rojas ', 'rarojas.t@gmail.com', '0991214110', 'Celeste Rodriguez', 'celesterodriguezgon@gmail.com', '0982777714', 'Me interesa el curso porque estoy coordinando un proyecto de la Fundación Huellas de Amor de la Iglesia Mas que Vencedores, donde trabajamos en la prevención de abuso sexual infantil por medio de charlas, talleres, campañas, grupos de apoyo a personas que han pasado por abuso, y otras actividades, y considero muy importante seguir capacitandome en el tema.', 'Papa, Mama, hijos '),
(141, 'Maria Ana Catalina', 'Razo Murillo', '1993-11-15', 0, 'Soltero/a', 'México', 'Nuevo León', 'Monterrey', 'Nayarit 2211', 0, '8110094177', '', 'Mexicana', 'Católica', 'En contra', '', '', 'Como voluntaria en Educación y Formación Ohana, A.C. / prestadora de servicio social en Amig@ UANL / docente a nivel primaria, secundaria y preparator', '', '', '', '', '', '', 'He trabajado con niños en situación de vulnerabilidad desde los 17 años. México es un país en el que abunda la violencia hacia nuestros niños, niñas y adolescentes, especialmente la de índole sexual, registrándose más de 6,000 casos de abuso denunciados al año, considerando que muchos de ellos no llegan a denuncia (se estima que solamente 20% llegan ante la Ley). En enero de 2019 fundé una ONG llamada PIA - Protección a la Infancia y la Adolescencia, que tiene como objetivo prevenir el abuso sexual infantil en el norte del país, pues contamos con pocas ciudades que hacen esto (la mayoría solamente tiene protocolos de acción cuando el abuso ya ocurrió). Realizamos talleres para niños, niñas y adolescentes, además de talleres para padres de familia, maestros y sociedad con un objetivo: blindar a nuestros pequeños para prevenir el abuso sexual infantil.', ''),
(142, 'Claudio', 'Caprarulo', '1980-05-27', 28109690, 'Divorciado', 'Argentina', 'Buenos Aires', 'Moreno', 'Avenida Saavedra Lamas', 1744, '+5491121883660', '', 'Argentino', 'Evangélico', 'En contra', 'Ninguno', 'ccaprarulo15@gmail.com', 'Ninguno', 'Francisco Gregori (Pastor) ', 'frangregori@ymail.com', '+54 9 376 454-9', 'Paula Páez', 'paulapaezz23@gmail.com', '+54 9 381 530-4', 'Para aprender a detectar casos de abusos y ayudar a las víctimas.', 'Padre, madre e hijos'),
(143, 'María Celeste', 'Rodríguez Invernizzi', '1989-10-16', 3438042, 'Casado/a', 'Paraguay', 'Central', 'Asunción', 'Pitiantuta casi concordia 1131', 0, '982777714', '', 'Paraguaya', 'Cristiana', 'En contra', 'Ninguno', '', 'Maestra de niños', '', '', '', '', '', '', 'Soy trabajadora social y debo estar capacitada para abordar un tema tan importante', ''),
(144, 'Claudia Noemí', 'García', '1966-07-14', 17506995, 'Casado/a', 'Argentina', 'Buenos Aires', 'San Bernardo', 'Garay 204', 7111, '2257611928', '02257466708', 'Argentina', 'cristiana evangelica', 'En contra', 'Ninguno', 'no', 'no', 'Hector Antonio Martinez', 'alejandrolmendez204@gmail.com  ', '2664503305 ', 'Arnaldo Herme García', 'hermegarcia41@hotmail.com', '2257669584', 'Me interesa capacitarme para poder servir a la comunidad con la prevención de un tema tan importante como lo es el abuso sexual infantil. Como capellán cristiano debo formarme en algunas áreas y el Señor a puesto en mi corazón está problematica tan dolorosa como lo es el abuso. Trabajar en la prevención, en diferentes ámbitos como en escuelas, centros comunitarios, medios de comunicación. etc', 'papá, mamá, hijos'),
(145, 'Sanchez Bulacio', 'Carla Pamela', '1986-08-17', 32349273, 'Casado/a', 'Argentina', 'La Rioja', 'La Rioja', 'Calle República Argentina S/N ', 0, '3804951593', '', 'Argentina', 'Católico', 'En contra', '', '', 'Catequesis', '', '', '', '', '', '', 'Para poder ayudar en donde se requiera y evitar que se siga dando este flagelo en la familias', ''),
(146, 'Daniela', 'Brusain', '1985-03-03', 31528356, 'Casado/a', 'Argentina', 'Río Negro', 'Villa Regina', 'Liniers 583', 8336, '2,99154E+11', '', 'Argentina', 'Evangelica', 'En contra', 'no', 'no', 'Escuela bíblica en iglesia y dónde trabajo defensoría de menores', 'Eliut Soto', 'no tiene', '2984253393', 'Damian Eduardo Garrido', 'damigarri2@gmail.com', '2984326946', 'Me interesa la tematica por el lugar donde trabajo, defensoría de menores, y porque en la iglesia donde me congregó trabajo con niños.', 'padre, madre e hijos'),
(147, 'Ruth Daniela', 'Aguero', '1986-10-04', 32568693, 'Casado/a', 'Argentina', 'Chubut', 'Rawson', 'Caridad Allier 170, Área 12', 0, '2804340481', '', 'Argentina', 'Evangelio', 'En contra', 'Ninguno', '', 'Escuela 170 e iglesia local', '', '', '', '', '', '', 'Soy profesora de educación primaria y trabajo en el ministerio de misioneritas de mi iglesia,debido a ello interactivo continuamente con niños y niñas. Quisiera estar preparada para detectar abusos y contar con las herramientas necesarias para brindar ayuda.', ''),
(148, 'Elba Esmeralda', 'Lechare', '1951-01-23', 6540606, 'Casado/a', 'Argentina', 'Santa fe', 'Recreo', 'Martin de Guemes 608', 3018, '3425522723', '', 'Argentina', 'evangelico pentecostal', 'En contra', 'no.', 'solo gotas oftalmicas', 'en la escuela', 'Ludmila Manuale', 'ludmilamanuale@hotmail,com', '3412793221', 'Sandra de Juri', 'lunadeportes@yahoa,com.ar', '3426122265', 'DIOS ME DIO MUCHO AMOR POR LOS NIÑOS Y ADOLESCENTES Y en la escuela encontramos niños con esas caracteristicas y muchas veces no contabamos conherramientas o estrategias para abordar esa problematica, eso me inquieto mucho, y orando buscando direccion en Dios algunos casos lograron superarlo pero hubo csos que se detectaban y al año siguiente los padres lo traslaban a otra escuela...  me gusta escucharlos y poder ayudarlos, a traves de este curso poder aprender , tener conocimientos y sabiduria de Dios para poner a la practica....Muchas gracias por lo que hacen y muchas bendiciones!!', 'El modelo de Dios;papa, mama,e hijos...'),
(149, 'PAOLA', 'DELGADO', '1976-09-29', 1308854114, 'Soltero/a', 'ECUADOR', 'MANABI', 'MONTECRISTI', 'CALLE 10 DE AGOSTO Y ROCAFUERT', 0, '994890930', '', 'ECUATORIANA', 'EVANGELICA', 'En contra', '', '', 'FUNDACIONES E INSTITUCIONES EDUCATIVAS', '', '', '', '', '', '', 'Trabajo en esta área de prevención de abuso y violencia desde hace 10 años en fundaciones e instituciones educativas. Y dentro de unas semanas estaré coordinando un centro de Prevención, Intervención y Empoderamiento en esta problemática social.', ''),
(150, 'jesica daiana', 'cuadrado', '1989-07-17', 35020658, 'Casado/a', 'argentina', 'buenos aires', 'carmen de patagones', 'Joaquin maza 666', 0, '2920288652', '', 'argentina', 'cristiana evangelica', 'En contra', '', '', 'Animacion de fiestas infantiles', '', '', '', '', '', '', 'Por que creo que es necesario en estos tiempos prepararnos y tener los conocimientos necesarios para trabajar con los niños, la infancia es una etapa muy bulnerable y es la mas corrompida. A su vez capacitarme aun mas en el area donde sirvo.', ''),
(151, 'juan Carlos', 'ayelef', '2019-12-31', 34668019, 'Casado/a', 'Argentina', 'rio negro', 'viedma', 'french 216', 0, '2920527729', '', 'Argentina', 'ecangelio', 'En contra', '', '', 'iglesia', '', '', '', '', '', '', 'Hola mi interés es formarme, y capacitarme para poder contrarrestar todas estas leyes y grupos que se quieren levantar encontra de nuestros principios,', ''),
(152, 'Juana', 'Marin', '2019-07-25', 32390291, 'Casado/a', 'Argentina', 'Viedma', 'Viedma', 'Rio Negro 8500 Viedma Argentin', 0, '15361286', '', 'Argentina', 'Cristiana', 'En contra', '', '', 'Como auxiliar estado y dentro de escuelita de niño iglesia', '', '', '', '', '', '', 'Para poder inplimentarlo en el sector de iglesia donde pertenezco centro cristiano restaurador', ''),
(244, 'Mariana Aymé', 'Piñero', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(245, 'Adriana', 'Welter', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(246, 'Ernestina Yolanda ', 'Moya', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(247, 'Marcela', 'Alfandari ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(248, 'Rocio ', 'Gutierrez ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(249, 'Marta', 'Martinez', '1955-09-01', 92733342, 'Viudo/a', 'Argentina', 'Neuquen', 'Neuquen', 'B°Maronese manzana N°8 Casa N°', 8300, '+54 0297154764', '+54 0299-44513', 'Chilena', 'Cristiana Evangelica Bautista', 'En contra', 'NO', 'NO', 'Si, en la iglesia. misionera en africa, en horita feliz, etc', 'Gustavo Orejas', 'rocadeayuda@hotmail.com', '+54 02991559383', 'Gustavo Marcel', 'rocadeayuda@hotmail.com', '+34 636998044', 'Porque amo los niños, y esta problematica que cada dia crece mas me preocupa muchisimo. ', 'Papa, Mama, Hijos'),
(155, 'Karen Alicia', 'Rodrìguez Guzmàn', '1995-10-03', 0, 'Soltero/a', 'Mexico', 'Nuevo Leòn', 'Monterrey', 'Jesus Gonzàlez Ortega', 0, '8119146632', '', 'Mexicana', 'No', 'En contra', '', '', 'Psicologa escolar, talleres de prevenciòn del abuso sexual', '', '', '', '', '', '', 'Siendo parte de una asociación dedicada a la prevención del abuso sexual infantil me siento con la responsabilidad de estar preparada teórica y prácticamente para el proceso, asimismo, dar información actualizada y verídica.', ''),
(156, 'Laura', 'Maiorana', '1986-03-19', 32358262, 'Soltero/a', 'Argentina', 'Buenos aires', 'Buenos aires', 'Montgolfiel 4844 grio de lafer', 0, '1561816218', '', 'Argentina', 'Cristiana evangelica', 'En contra', '', '', 'Como psicologa y en mi congregacion (centro familiar cristiano)', '', '', '', '', '', '', 'Creo que es muy importante capacitarse en un tema tan delicado. Como psicologa es necesario', ''),
(157, 'Lourdes Rosalía', 'Toledo', '1991-05-05', 35922056, 'Divorciado', 'Argentina', 'Tucumán', 'Yerba Buena', 'Belisario Roldán 748 y pje Ig.', 0, '153035470', '', 'Argentina', 'Cristiana', 'En contra', 'Psicológico', '', 'Año completo en prácticas profecionalizantes de carrera T. Fonoaudiologo en la Escuela Luis Braile. Y un año de maestra de escuela bíblica.', '', '', '', '', '', '', 'Primero soy madre y siento que necesito herramientas útiles para detectar y trabajar con mis hijos. Y segundo para ampliar información y el trabajo en los chicos de la Iglesia dónde me congrego. Es importante la prevención y detección.', ''),
(158, 'Lourdes', 'Oviedo', '1963-08-22', 93286572, 'Casado/a', 'Argentina', 'Bueno Aires', 'San Martin', 'Antartida Argentina', 1683, '1551080317', '', 'Brasileiro', 'Evangélica pentecostal Emanuel (Balleste', 'En contra', 'No. ', 'Nunguna medicación para dormir ni tranquilisante', 'Brasil ED', 'Doniste Raupp', 'raupp4@hotmail.com', '1551080317', 'Cristina Claudia Flores', 'cristinaflores407@gmail.com', '01161850812', 'Carga por Los niños violados, ya que una de mis hijas fue violada.', 'Padre, madre Hijos.'),
(159, 'Magdalena del valle', 'Cabrera', '1976-08-29', 25320761, 'Casado/a', 'Argentina', 'Tucuman', 'Concepcion', 'Rivadavia453', 0, '3865678014', '', 'Argentina', 'Evangelica', 'En contra', '', 'vivisalinas@hotmail.com', 'En la iglesia donde pertenezco', '', '', '', '', '', '', 'La razon es por la necesidad que hay de ayudar y poder proveer algun tipo de soluciones estamos rodeados de niños y adolecente,con problemas de este tipo es importante tener herramienta y formacipn para poder ayudarlos', ''),
(160, 'María José', 'Hermosilla', '1990-07-14', 35310222, 'Casado/a', 'Argentina', 'Neuquén', 'Neuquén', 'Gobernador Quarta 1474', 0, '2995773385', '', 'Argentina', 'Evangélica', 'En contra', '', '', 'Escuela bíblica y auxiliar de servicio en escuela pública', 'Hermosilla José(pastor)', 'Josehermosilla_6@hotmail.com', '2994388214', '', '', '', 'Para ser de ayudar con el grupo que está trabajando en Neuquén y para poder ser útil en las necesitades que se presentan en los grupos de niños donde trabajo.', ''),
(260, 'Melina Vanesa', 'Alfano', '1985-03-11', 31429556, 'Casado/a', 'Argentina', 'Mendoza', 'Junin', '2 barrio Jardín Ferroviario Mn', 5585, '2634658199', '', 'Argentina', 'Cristiana evangelica', 'En contra', 'no', 'no', 'con adolescentes', 'Adriana Olivares ', 'a.olivares55@yahoo.com.ar', '2634477445', ' Adrian Rosas', 'a.olivares55@yahoo.com.ar', '2634731765', 'Quiero poder ayudar a los niños que pasaron por un abuso y también ayudar a los que no a prevenir esa situación. Sé que con esta herramienta y con ayuda de Dios los niños podrán ser restaurados. ', 'padre, madre e hijos'),
(261, 'Pablo', 'Tripailao', '0000-00-00', 22734821, 'Casado/a', 'Argentina', 'Neuquén', 'Neuquén', 'Dorrego, 356', 8300, '', '2995316656', 'Argentina ', 'Cristiana', 'En contra', 'No', 'No', 'No', 'Araceli silvana jara ', 'eslabon@hotmail.com.ar', '2995318571', 'Martina abril tripailao ', 'Matutri@hotmail.com', '2995707870', 'Tengo un grupo de varones en la iglesia los cuales algunos han sufrido abusos y creo necesito herramientas ', 'Papa, mama, hijos'),
(163, 'Laura Edith', 'Migliore', '1978-05-06', 26541170, 'Casado/a', 'Argentina', 'Neuquén', 'Plottier', 'Percy Clark 1180.', 8316, '2,99155E+11', '', 'Argentina', 'Cristiana - Evangelica', 'En contra', 'Ninguno', 'No', 'Actualmente escuela primaria, anteriormente ministerio de la iglesia', 'Roxana Villagran', '', '2994057940', 'Hactor Muñoz', 'hectormunoz1180@gmail.com', '2994730224', 'En mi trabajo (soy docente) he presenciado, y he sido obligada a pasar por alto, distintas situaciones, respecto a la integridad física y psíquica de alguno de mis alumnos, y no he actuado de la manera adecuada por no tener las herramientas y el conocimiento necesario al respecto. Actualmente estoy estudiando tecnicatura en niñez, adolescencia y familia, pero si bien me da cierta orientación y me brinda herramientas, no es una formación en valores, ni esta basada en principios éticos del cristianismo.', 'Dios. papá, mamá, hijos'),
(164, 'Mónica', 'Rojas', '1971-06-05', 18773246, 'Casado/a', 'Argentina', 'Neuquen', 'Neuquen', 'Veron 1570', 0, '2994060790', '', 'Argentina', 'Cristiana', 'En contra', '', '', 'No', '', '', '', '', '', '', 'Quiero tener herramientas para trabajar con niños en mi iglesia ( Iglesia El Camino, de Neuquén)', ''),
(165, 'Rebeca Beatriz', 'Pardo', '1992-01-30', 36664473, 'Casado/a', 'Argentina', 'Salta', 'Capital', 'Barrio Parque la Vega B 40 dpt', 0, '3876315340', '', 'Argentina', 'Cristiana', 'En contra', 'Ninguno', '', 'Si y adolescentes en la Escuela 4042 (mantenimiento) y en mis prácticas pre profesionales a fines a mi carrera y soy madre de dos niñas.', '', '', '', '', '', '', 'Soy estudiante de la carrera Técnico Superior en Familia y Niñez y el curso me será de gran ayuda para futuras intervenciones en comunidad. Así como mencione anteriormente también soy madre de dos niñas y me será de gran utilidad para seguir enseñándoles cómo proteger su cuerpo.', ''),
(166, 'Paola', 'Rodríguez', '1984-11-30', 31138398, 'Soltero/a', 'Argentina', 'Buenos Aires', 'General Rodríguez', 'La Rioja 410', 0, '1168401134', '', 'Argentina', 'No', 'En contra', '', '', 'Escuelas', '', '', '', '', '', '', 'Para poder Ayudara prevenir y ayudar a superar traumas', ''),
(167, 'Patricia Andrea', 'Villarroel', '1975-11-22', 24648770, 'Casado/a', 'Argentina', 'Río Negro', 'Villa Regina', '23 de septiembre', 83368336, '2984887412', '', 'Argentina', 'Evangelica', 'En contra', 'No', 'No', 'Escuelas', 'Daniela Brussin', 'Danabrus@hotmail.com', '2994107891', 'Esteban Soto', 'Esteban_soto2010@hotmail.com', '2984232831', 'Soy docente y trabajo con niños de escuela primaria y a la vez en el ministerio infantil de la congregación a la que pertenezco, quiero capacitarme en esta temática ya que considero que aportara herramientas que me permitirá ayudar a los niños y adolescentes que me rodean', 'Padre madre e hijos'),
(272, 'veronica', 'Belizan', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(169, 'Ruth Elizabeth', 'Lopez', '1972-02-05', 21947879, 'Casado/a', 'Argentina', 'Mendoza', 'San Martín', 'Gran Líbano 355', 0, '2634562785', '', 'Argentina', 'Evangelica', 'En contra', 'Ninguno', '', 'Escuelas', '', '', '', '', '', '', 'Para tener herramienta y poder usarlas en las escuelas donde trabajo', ''),
(170, 'Sylvia Sonia', 'Torres', '1967-04-09', 18398438, 'Casado/a', 'Argentina', 'La Rioja', 'La Rioja capital', 'La Paz 275.Barrio Los Cerros', 0, '3804373193', '', 'Argentina', 'Católica Apostólica Romana', 'En contra', '', '', 'Si como Asesora Pedagógica Colegios Privados Religiosos', '', '', '', '', '', '', 'Considero que es una problemática que en mi caso hoy como legisladora puedo aportar muchísimo y segundo como. ASESORA PEDAGÓGICA', ''),
(171, 'Mirna Valeria', 'Castillo', '1980-08-27', 28021530, 'Casado/a', 'Argentina', 'Santa Cruz', 'Caleta Olivia', 'Los Andes 1404', 0, '2973700784', '', 'Argentina', 'Cristiana Evangélica', 'En contra', '', '', 'En la iglesia a la que asisto', '', '', '', '', '', '', 'Quisiera realizar el curso de prevención de abuso porque trabajo con niños en la institución esclesiastica a la que pertenezco ,y en este último tiempo he tenido varios alumnos que han sufrido abuso sexual y en muchos de estos casos he sentido que no tenía las herramientas para ayudarles por lo cual es un desafío para mí el capacitarme en esta área', ''),
(172, 'viviana', 'lara', '1977-03-12', 25862228, 'Otra', 'Argentina', 'Neuquen', 'ZAPALA', 'barrio 582 viv. acceso L 2 Pla', 0, '2,94215E+11', '', 'Argentina', 'ninguna', 'En contra', 'Ninguno', '', 'Con niños y adolescentes victimas de abusos de diferente tipo de delitos. Centro de asistencia a la victima - Eaopie (Equipo de apoyo a las institucio', '', '', '', '', '', '', 'porque me gustaría convertirme en formadora de la temática, a diario me toca intervenir en el tema.', ''),
(173, 'Alessandra Yanina', 'Valenzuela', '1991-09-04', 36372018, 'Casado/a', 'argentina', 'neuquen', 'neuquen', 'lainez 1050', 0, '2994654299', '', 'argentina', 'Iglesia Bautista', 'En contra', '', '', 'no', '', '', '', '', '', '', 'Quisiera formarme como preventora para trabajar a futuro con niños en situacion de abuso, estudio actualmente una tecnicatura universitaria en acompañante terapeutico.', ''),
(174, 'Natalia', 'Martel', '1984-06-05', 31067860, 'Casado/a', 'Argentina', 'GREGORIO DE LAFERRERE', 'Buenos Aires', 'Carlos Casares 5384 PB Dto 3', 0, '1133725176', '', 'Argentina', 'Cristiana evangélica', 'En contra', 'Ninguno', '', 'Consultorio y escuela', '', '', '', '', '', '', 'Prepararme para entrar en barrios, plazas, comedores comunitarios, etc.y dar a conocer e identificar cuando está en peligro. Desde la prevención y la intervención.', ''),
(185, 'Pamela Giselle', 'Carballido', '1986-12-31', 32717404, 'Casado/a', 'Argentina', 'Buenos Aires', 'Punta Alta', 'Almafuerte 663', 8109, '2932528146', '2932528146', 'Argentina', 'Evangelica', 'En contra', 'Ninguno', 'Ninguna', 'Si, en la Escuelita bíblica ', 'Marcia Quiroga ', 'yeshua_mtq_taty@hotmail.com', '2932515293', 'Patricia Beatriz del Carmen zacarias', 'Bachizacarias@gmail.com', '2932405224', 'La situacion de hoy en dia con respecto a la cantidad de abusos y los daños que provoca en la infancia, me llevan a querer hacer algo por esta generación ayudando con herramientas a prevenir los abusos o ayudar a aquellos que hallan pasado por eso. ', 'Esposo esposa e hijos'),
(186, 'Rosana María', 'Pereyra', '1966-12-01', 17870675, 'Soltero/a', 'Argentina', 'Neuquén', 'Zapala', 'Ayacucho 855', 43804380, '2942691335', '', 'Argentina ', 'Cristiana evangélica ', 'En contra', 'Ninguno', 'No', 'Si, en iglesia', 'Sandra Tschanz ', 'sandraetschanz@gmail.com', ' 2954-228341', ' Lorena Procetti', 'lorenaprocetti@gmail.com ', ' 2954-373526', 'Actualmente en las iglesias estoy, con otra compañera, tratando de capacitar maestros de escuela bíblica y considero que este tema es sumamente importante tratarlo en las Iglesias ', 'Papá, mamá e hijos'),
(187, 'Nancy Azucena', 'Juarez', '1982-08-10', 29696289, 'Soltero/a', 'Argentina', 'Buenos Aires', 'Lomas de Zamora', 'Manuel Baliña 907', 1828, '1130749613', '4202-5316', 'Argentina', 'Cristiana Evangélica', 'En contra', 'Ninguno', 'No', 'En la iglesia y en un hogar de niños', '  Ariel Orellano', 'jccomputacion_ari@hotmail.com', '1532280563', 'Silvia Segovia', 'jesusreina2008@yahoo.com.ar', '1167363200', 'Es sumamente importante tener las estas herramientas al relacionarse con niños y familias. Estoy en formación como intérprete de Lengua de Señas y las personas sordas, están muy expuestas a estas situaciones.   Además comencé la carrera de Minoridad y familia en la Universidad de Lomas de zamora ', 'Papa, Mama e hijos'),
(188, 'Karen Ailin', 'Blanco', '1997-06-08', 40806274, 'Soltero/a', 'Argentina ', 'Entre Rios', 'Gualeguaychu ', 'Barrio Fiorotto C/23', 0, '0344615535381', '03446 441305', 'Argentina ', 'si, Cristiana Evangélica ', 'En contra', 'Ninguno', 'No', 'si, como niñera', 'Graciela Chanda', '', '03446-15321814', '', '', '', 'Para perfeccionarme y profesionalizarme en esa área y asi poder abordarla de la mejor manera.', 'Mamá, Papá, 8 hermanos '),
(189, 'Liliana', 'Bracamonte', '1963-05-10', 16362770, 'Soltero/a', 'Argentina', 'Mendoza', 'Capital', 'Federico Moreno 2028. 4ta Secc', 0, '2615115580', '2615115580', 'Argentina', 'Evangelica Pentecostal', 'En contra', 'Ninguno', 'no', 'Profesora de Enseñanza  Primaria  - Maestra de Escuela Dominical', 'Pastor  Omar  Montiel ', '', '2613826954 ', 'Marcelo Firmapaz', '', '2615796190', 'Amo la niñez y desearía  ser una voz que previene las heridas y el dolor en la infancia.', 'padre, madre,hijos'),
(190, 'Iris lorena', 'Procetti', '1978-10-30', 26892478, 'Casado/a', 'Argentina', 'La Pampa', 'Santa Rosa', 'Quinquela martin 2292', 0, '2954373526', '2942244255', 'Argentina', 'Cristiana evangelica', 'En contra', 'Ninguno', 'No', 'Si, En la iglesia', 'Sandra Tschanz  ', ' sandraetschanz@gmail.com ', '2954-228341', 'Rosana pereyra', 'piuquet@yahoo.com', '2942-691335 ', 'Xq me gustaria trabajar con y para los niños con mas conocimiento y saber como actuar correctamente en cada caso', 'Padre madre tres hnos'),
(192, 'Pablo Alejandro', 'Robles', '1981-08-16', 28982370, 'Casado/a', 'Argentina', 'Tucumán', 'Las Talitas', 'B:AMPLIACIÓN SOEME MZA.I CASA9', 0, '3815840836', '4377157', 'Argentino', 'Cristiano evangélico ', 'En contra', 'Ninguno', 'No', 'No', 'Mabel Delgado ', 'Sandra832@live.com', '3815843534', 'Ángela García ', 'margarita2019garcia2019@gmail.com ', '3813521684', 'Para poder llevar la prevención a los niños y adolescentes', 'Esposa y tres hijas '),
(193, 'Sandra Mabel', 'Delgado', '1981-05-03', 28513832, 'Casado/a', 'Argentina', 'Tucumán', 'Las Talitas ', 'Barrio Ampliación Soeme Mz I c', 0, '3815843534', '381 4377157', 'Argentina', 'Si, Cristiana evangelica', 'En contra', 'Ninguno', 'No', 'Si, Maestra particular ', 'Pablo Robles', 'payorobles16@gmail.com', '3815840836', 'Margarita García', 'margarita2019garcia2019@gnail.com', '3813521684', 'Para poder ayudar a los niños a identificar a un abusador y/o una situación de abuso y como actuar en tal caso', 'Esposo y tres hijas'),
(194, 'María Laura', 'Vallés', '1984-02-06', 29918850, 'Soltero/a', 'Argentina', 'La Rioja', 'La Rioja', 'Barrio San Antonio ', 0, '3821403004', '3821491290', 'Argentina ', 'Católica ', 'En contra', 'Ninguno', 'No', 'Si, Catequesis ', 'Maria Teresa Cáceres', '', '', ' Graciela sobol', '', '', 'Para imformame, conocer y poder ayudar ', 'Mamá,  papá e hijos '),
(195, 'Maria Elena', 'Real', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(196, 'Brenda Vanesa', 'Juanico', '1987-07-05', 32293169, 'Casado/a', 'Argentina', 'Chubut', 'Trevelin', 'Río Corintos 1342', 0, '2945646039', '2945 480692', 'Argentina', 'Si, Cristiana Evangelica', 'En contra', 'Ninguno', 'No', 'Si, de forma particular', 'Samuel Toledo', 'Samueltoledo777@gmail.com', '', '', '', '', 'La Razón por la que quisiera formarme como preventora del Abuso sexual infantil, es por qué cuando niña padecí y sufrí abuso y quisiera interiorizarme más sobre este asunto que no es poca cosa, debido a que quisiera poder ayudar a quienes lo han pasado o lo estén pasando, para poder tener las herramientas suficientes como para ayudar a los más indefensos. Y también para los que no han pasado por esto poder ayudarlos y enseñarles de la prevención.', 'Esposo y 2 hijos'),
(197, 'Nancy Victoria', 'Ruiz', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(263, 'Nelida Maria', 'Almada', '1977-03-21', 25913047, '', 'Argentina', 'Buenos Aires', 'Maquinista Savio-PDdo Escobar', 'Lambarè 1755', 0, '', '', 'Argentina', 'Evangelica', 'En contra', 'Psiquiatrico', 'Si. Clonagin y Elafax ', 'Colegio laico y escuela biblica', 'Directora Patricia Ibañez ', '', '1157719646 ', 'Diaconisa Patricia Raya', '', '3484530984', 'Tener mas herramientas como maestra de escuela biblica. Si bien se enseña la prevencion del abuso creo necesario capacitarme mas em ello.', 'Padre madre hijos'),
(199, 'Miriam Lorena', 'Maguiña', '1976-05-01', 24878734, 'Divorciado', 'Argentina', 'Mendoza', 'Palmira', 'Santa Fe 498', 5584, '2634478456', '----', 'Argentina', 'Evangélica pentecostal ', 'En contra', 'No', 'No', 'No. Con adolescentes', 'Adriana Olivares', 'a.olivares55@yahoo.com.ar', '2634477445', 'Melina Alfano', 'melinaalfano_85@yahoo.com.ar', '2634658199', 'Porque soy  mamá de 2 varones de 6 y 8 años, docente de secundaria y de adultos y quisiera tener las herramientas para poder ayudarles.', 'Papá, mamá e hijos.'),
(200, 'Roxana Beatriz', 'García', '1969-12-09', 20885209, 'Casado/a', 'Argentina', 'La Pampa', 'General Pico', 'Martin Ford 735 Norte', 0, '0230215340854', '02302428034', 'Argentina', 'Cristiana Evangelica', 'En contra', 'Ninguno', 'No', 'Si, Escuela dominical', 'Melina Farias', '', '0230315613921 ', '', '', '', 'Estoy haciendo la carrera de Licenciatura en Cs de la Educacion y mi proyecto es trabajar en el hogar de menores en riesgo Ademas de trabajar en la Iglesia donde me congrego.', 'Madre padre hijos '),
(201, 'Natalia', 'Saavedra', '1981-09-30', 28266986, 'Casado/a', 'Argentina', 'Buenos Aires', 'Trenque lauquen', 'Ricardo Frank 236', 0, '2392580943', '2392580943', 'Argentina', 'Cristiana', 'En contra', 'Ninguno', 'No', 'Si, Iglesia, soy pastora de niños', 'Sebastián Antonio', '', '2392493162', 'NORMA Saavedra ', '', '2392484995', 'Por mi tarea con la niñez, no solo en la iglesia, sino en el colegio q tenemos en la iglesia', 'Esposo, esposa, hijos '),
(202, 'Eva Lucía', 'Sequeira', '1971-09-10', 22188807, 'Casado/a', 'Argentina', 'Córdoba', 'General Deheza', 'Juan José Paso n° 642  Dto C', 5923, '358155162352', '358-4056791', 'Argentina', 'Si, Cristiana evangelica', 'En contra', 'Ninguno', 'No', 'Si, Iglesia Verbo (3 años Esc.Biblica - 1año con preadolescentes)', 'Claudia Righi ', 'clau.righi.cr@gmail.com ', '+5493585618596 ', 'Griselda Tinerello', 'gris.tinner.69@gmail.com', '+5493585182174', 'Por el aumento de caso que se registran hoy en dia,  mi deseo es prevenir y darles herramientas a los niños y preadolescente. Además muchos se alarman pero nadie se capacita. yo  tengo una niña de 7 años, y quiero que tanto ella como el resto puede defenderse y cuidarse. En mi localidad hubo muchos suicidios de jóvenes y preadolescentes. Uno de los motivos fue el abuso, la violencia de sus pares.', 'padre, madre, niños'),
(203, 'Bernardo', 'Montecino Pardo', '1965-08-21', 92838812, 'Casado/a', 'Argentina', 'Neuquen', 'Neuquen', 'Paimun 22o', 83000, '+542995816496', '299 4403517', 'Chileno', 'Cristiano Protestante', 'En contra', 'Ninguno', 'No', 'campamentos y en la iglesia', 'Monica Jara ', 'monijara01@hotmail.com', '2995975505', 'Claudia Figueroa ', 'claudia.andrea76@hotmail.com', '2995117380', 'Creo que es una herramienta muy valiosa y me gustaría ser parte del trabajo de prevención y ayuda a muchos personas que aun siguen padeciendo este gran flagelo y por sobre todo ayudar en la prevención, particularmente fue muy difícil para mi superar el proceso personal de mi abuso en mi infancia, pero bueno apareció Epasi y todo comenzó a cambiar!!!', 'Papa, Mama y 4 hijos'),
(204, 'Rocío Nahir', 'Palavecino', '1999-09-14', 45461553, 'Casado/a', 'Argentina', 'Buenos Aires', 'Paso del Rey', 'Las barrancas 74', 1742, '1165898471', '02374251157', 'Argentina', 'Si, evangelica', 'En contra', 'Ninguno', 'No', 'Si, en la iglesia', 'Sandra Ramírez   ', 'pacheco-rocio@hotmail.com', '1164730558', 'Rocio Pacheco', 'pacheca_sion@hotmail.com', '1123876888', 'Para poder ayudar a niños /adolescentes que han pasado por esta situación con las herramientas adecuadas, tambien poder adquirir esta enseñanza y estar capacitada a la medida correspondiente para poder evitar a que más niños/adolescentes pasen por esta situación. ', 'Mamá papá e hijos'),
(205, 'ROXANA', 'GUNZELMANN', '1974-08-28', 23918512, 'Casado/a', 'Argentina', 'Rio Negro', 'CIPOLLETTI ', 'los platanos 1586', 8324, '2995016605', '2994772771', 'Argentina', 'Si, Cristiana', 'En contra', 'Ninguno', 'No', 'SI, soy docente de Ingles', ' Horacio Fischer', 'horaciofischernqn@gmail.com', '2994194846', 'Marina Feuershvenger', 'marinafisher@live.com.ar', '2996347970 ', 'Trabajo con niños y adolescentes, y el año pasado hubo un mensaje en la mesa de un aula que nos alarmo (mi tío me viola) y no pudimos identificar quien lo escribió. Orando el Señor puso en mi la carga de poder tener herramientas para primeramente ver mas allá de lo terrenal y en el caso de detectar algún abuso poder tener las herramientas para ayudar a estos niños/adolescentes).', 'Mi esposo Rodrigo y mis hijos Mateo (14) y Francesca (4)'),
(206, 'Karina', 'Casco', '1997-05-21', 25813467, 'Casado/a', 'Argentina', 'Chaco', 'Villa Angela', 'Barrio CGT', 0, '3735525172', '', 'Argentina', 'Cristiana Evangélica', 'En contra', 'Ninguno', 'no', 'Si, en la escuela', '', '', '', '', '', '', 'Porque soy formadora de niños. Docente', 'Madre Padre Hijos'),
(207, 'Silvia Alejandra', 'Segovia', '1971-11-08', 22457462, 'Casado/a', 'Argentina', 'Buenos Aires', 'Lonas de Zamora', 'CAPITAN SARMIENTO 1081. VILLA ', 1828, '1167363200', '1121357490', 'Argentina', 'CRISTIANA EVANGELICA', 'En contra', 'Ninguno', 'No', 'No', 'Sergio Rosales ', 'srosales@brinks.com.ar ', ' 11 5409-2067', 'Natalia Benitez', ' nataliadanielabenitez@hotmail.com', ' 11 2321-0797 ', 'ayudar a madres, padres y niños a principalmente prevenir el abuso. O si no se llegase a prevenir, como remediar sus efectos, con la ayuda del Señor.', 'PAPA, MAMA, HIJOS'),
(284, 'Rocio Fabiana', 'Lencina', '1991-02-13', 0, 'Casado/a', 'Argentina', 'entesCorri', 'ingóItuza', 'Barrio San Jorge casa 15', 33023302, '3764162108', '', 'Argentina', 'Cristiana evangélica', 'En contra', 'No', 'No', 'Escuela bíblica', 'Maria Valoy', '', '3786-457457', 'Rubén Juárez', '', '3786-410789', 'Porque me gustaría ayudar a los niños', 'Papá, mamá, hijos'),
(209, 'María Laura', 'Belloni', '1971-01-23', 21967593, 'Casado/a', 'Argentina', 'Buenos Aires', 'La Plata', 'Calle 50 n° 2336 depto 3 PB', 0, '2216051139', '', 'Argentina', 'Cristiana evangelica', 'En contra', 'No', 'No', 'si, en escuelas', 'Esteban', '', '2216951404', '', '', '', 'Soy docente en escuela primaria y esta capacitación es una herramienta poderosa para defender a nuestros niños, jóvenes. También para poder instruir a la familia en e', 'Papa, mama, hijos'),
(211, 'Lía Vanesa', 'Cabezas', '1985-05-10', 31760701, 'Casado/a', 'Argentina', 'Neuquén', 'Neuquén', 'Vicente chrestia 435', 0, '2995285222', '2995285222', 'Argentina', 'Cristiana evangélica', 'En contra', 'Ninguno', 'No', 'Hora feliz y estudios biblicos', 'Matías Verón', 'matyasveron13@gmail.com', '2996154965', 'Maria Luisa Ciancaglini ', 'malucianca@hotmail.com', '2994572520', 'Por qué cada vez hay más casos de abuso y quisiera colaborar en la prevención para mis hijos y mis alumnos.', 'Papá mamá hijos'),
(212, 'Gladys Edith', 'Regliner', '1984-04-14', 30514876, 'Casado/a', 'Argentina', 'Rio Negro', 'General Roca', 'Formosa 1775', 8332, '2984655059', '0298 4429628', 'Argentina', 'Cristiana', 'En contra', 'Ninguno', 'No', 'Si, Sanatorio juan xxiii- consultorio- iglesia', 'Miriam sanchez  ', 'miosroy@hotmail.com', '0298 487-0156', 'anabella villasuso ', 'anabella3108@hotmail.com', '299 429-0507', 'Trabajo con niños como pediatra desde el 2012 y hablamos de desarrollo y sexualidad con los niños de la iglesia cada año. En nuestra iglesia se trabaja con adictos a distintas sustancias y sus hijos participan de las reunion. Presentan distintas manifestaciones de maltrato. La problemática de abuso sexual y maltrato hay crecido en el ambiente eclesiastico y secular. Sostengo la importancia de intervenir en esto como cristiana y profesional', 'Madre padre hijos'),
(213, 'Cesar Augusto', 'González', '1976-06-01', 25138619, 'Casado/a', 'Argentina', 'Chubut', 'Trelew', 'Perito Moreno 1519', 0, '02804362819', '02804425734 (m', 'Argentina', 'Si, cristiana evangelica', 'En contra', 'Ninguno', 'No', 'Si, en la iglesia', 'Lorena borquez', '', '', '', '', '', 'Soy pastor  y necesitmos herramientas para capacitar a los miembros, educadores', 'Mi esposa y 4 hijos'),
(214, 'Claudia Rosana', 'Vázquez', '1970-08-14', 21807290, 'Casado/a', 'Argentina', 'Mendoza', 'Capital', 'Videla Castillo 2434', 5500, '+54 9 26157228', '+54 9 26143759', 'Argentina', 'Cristiana evangélica', 'En contra', 'No', 'No', 'Si, maestra de escuela dominical y niñera', 'Marcela Videla', 'marcelam219@hotmail.com', '2612050902', 'Pablo Quintero', 'pabloquintero-cai@live.com.ar', '2613467677', 'Elegí tomar este curso para poder capacitarme y obtener herramientas y así poder brindar ayuda a los niños y niñas que lo necesiten. Hoy en día hay muchos casos de abusos hacia niños que están saliendo a la luz y considero muy importante el saber cómo actuar con fundamentos y bases firmes,', 'Padre y Madre'),
(274, 'Sandra ', 'de Jesús ', '1967-08-14', 0, 'Casado/a', 'Argentina', 'Buenos Aires', 'CABA', 'Valparaiso 3502', 1437, '+54 9 11 5594-', '--', 'Argentina', 'Cristiano evangélico', 'En contra', 'No', 'No', 'Sí, en Programa Josué', 'Jose Rivero', '', '1158629600', '', '', '', 'Mi interés por realizar el curso es porque hace algunos años venimos trabajando en la prevención primaria en adicciones, en barrios muy vulnerables con este flagelo que como consecuencia los niños, las niñas y adolescentes quedan en una situación de maltrato por los adultos, naturalizando la violencia, delincuencia, abusos, trabajo infantil  ', 'Mamá, papá, hijos'),
(217, 'Paola', 'Delgado', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(288, 'Emmanuel', 'Valoy', '1987-04-08', 32834850, 'Casado/a', 'Argentina ', 'Tucumán ', 'San Miguel ', 'Guido Spano 3901', 4000, '+543815177574', '', 'argentino', 'Evangélica ', 'En contra', 'No', 'No', 'Si. En Epasi', 'Viviana Salinas ', 'vivianavaloy@gmail.com', '0381 5177547', 'Maria Valoy', 'mariavaloy@hotmail.com', '03786457457', 'Para cuidar de mis niños ', 'Un padre , una madre , hijos'),
(218, 'Carlos', 'Muñoz Romero', '1962-12-10', 78116803, 'Casado/a', 'Chile', 'Valdivia', 'Valdivia', 'Romero Arturo Prat 507 depto. ', 5090000, '983612605', '+562212939', 'Chileno', 'Ninguna', 'En contra', 'Ninguno', 'No', 'No directamente, indirectamente, atendido la función como Administrador del Tribunal Oral en lo Penal de Valdivia', 'Maria Soledad Piñeiro, Ministra de la Corte de Apelaciones de Valdivia ', ' mpineiro@pjud.cl', ' +56998696568', ' Germán Olmedo Donoso Juez del Tribunal de Juicio Oral en lo Penal de Valdivia,  ', 'gomedo@pjud.cl', '+56998025340', 'Como miembro del Poder Judicial estoy en un proyecto de investigación de la materia, básicamente por la carencia de políticas públicas en la prevención,  área que se pretende hacer un aporte al menos regional (región de los Ríos - Chile)', 'Seres humanos que  busquen vivir en paz'),
(242, 'Maria', 'Sanguine', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(220, 'Aracely ', 'Sánchez ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(221, 'Gabriela', 'Vidal', '1990-12-28', 35570518, 'Soltero/a', 'Argentina', 'Neuquen', 'Neuquen', 'Candelaria 1570', 8300, '2996078211', '2996078211', 'Argentina', 'Evagelica', 'En contra', 'no', 'no', 'si, en los jardines', 'Walter Soto', 'Gabiiviidal_28@hotmail.es', '2995706402', 'GABRIELA VIDAL', 'Gabiiviidal_28@hotmail.es ', '2996078211', 'Me gustaría para poder ayudar a los niños, como soy maestra me parece una herramienta muy importante para poder ayudar.', 'Dios- Mi esposo e hijos.'),
(222, 'mirta', 'Encina', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(223, 'Sofía ', 'Contreras', '2000-07-28', 42654457, 'Soltero/a', 'Argentina', 'Neuquén', 'Neuquén', 'Cerro Chapelco 2167', 8300, '2994238148', '4462254', 'Argentina', 'Sí, bautista', 'En contra', 'No.', 'No.', 'Sí, en el ministerio de niñez en mi congregación', 'Sofía Dolores Contreras', 'sofiacontreras654@gmail.com', '2994238148', 'Sofía Dolores Contreras', 'sofiacontreras654@gmail.com', '2994238148', 'Mi razón para formarme como preventora, es porque fui víctima de un abuso y el Señor puso un llamado en mí para ayudar a niños y adolescentes que puedan presentar casos de ésta índole, y otros aspectos. Quiero participar de éste ministerio para poder ayudar a otras personas a recibir también la libertad, el amor y la sanidad en todos los sentidos que me dió Jesús en su momento.', 'Debería estar compuesta por padres (mamá y papá) que brinden amor a sus hijos y puedan guiarlos hacia un encuentro y una vida en Jesús.'),
(224, 'Juan Pedro', 'Pérez', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(225, 'Silvia', 'piquard', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(226, 'Lujan', 'Gimenez', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(227, 'Daniela', 'Galván ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(228, 'Julieta', 'Chazarreta', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(229, 'Francy', 'Querales', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(230, 'Maria Luisa', 'Romero', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(281, 'Jesica', 'Moreira', '1987-03-06', 32662930, 'Casado/a', 'Argentina', 'nesMisio', 'ierJav San', '', 3357, '3885125906', '', 'Argentina', 'Evangélica ', 'En contra', 'No', 'Ninguno', 'En la iglesia', '', '', '', '', '', '', 'Prevenir la niñez y crear una niñes sana ', 'Mamá papá hijos'),
(232, 'Mirta', 'Ancaten', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(233, 'victoria', 'rey', '1999-07-24', 41619801, 'Soltero/a', 'argentina', 'Río Negro', 'cipolletti', 'Jorge newbery 1553', 8324, '2995475022', '2995475022', 'argentina', 'cristiana evangelica', 'En contra', 'no', 'no', 'si, de niñera (actualmente) y dando talleres de sexualidad saludable en el secundario.', 'Mariela Novoa', 'marielanovoa@', '2994766638', 'Gustavo Orejas', 'tavoorejas@', '2995938390', 'Porque me parece importante que haya personas capacitadas para poderayudar a prevenir el abuso infantil. Creo que desde mi lugar puedo ayudar y enseñar a niños sobre este tema. ', 'madre, padre, hijos'),
(234, 'Gustavo Enrique', 'Hernandez', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(235, 'Eunice ', 'Arista', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(236, 'Sandra', 'Bulacio', '1963-05-16', 0, 'Casado/a', 'Argentina', 'Tucuman', 'yerba buena', 'Pje. Miguel Lillo ', 4107, '3814148653', '4 525434', 'argentina', 'Catolica ', 'En contra', 'no', 'casapasiva@hotmail.com', 'mama de 4 hijos', '', '', '', '', '', '', 'Porque mi madre me cuido mucho de este tema, creci con este temor, lo tuve con mis hijos pequeños y ahora quiero ayudar a prevenir este delito', 'Varon y Mujer'),
(237, 'Maria silvina', 'Gallardo', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(238, 'Maximiliano', 'Chiotta', '1996-03-16', 38804786, 'Soltero/a', 'Argentina', 'Chubut', 'Rawson', 'Maxiichiotta016@gmail.com', 9103, '2804971291', '', 'Argentino', 'Cristianismo', 'En contra', 'No', 'maxiichiotta016@gmail.com', 'Centro de accion familiar Ruca Cumelen', '', '', '', '', '', '', 'Trabajo con niños vulnerables en mi ciudad, y necesito herramientas para ayudar el antes, durante y despues de un abuso. ', 'Padre, madre e hijos'),
(239, 'Sandra', 'Rodriguez', '1965-09-12', 17757071, 'Soltero/a', 'Argentina', 'Neuquén', 'Plottier', 'Loteo La Casona Mzna D', 8316, '+5492995804228', '', 'Argentina', 'Cristiana evangélica', 'En contra', 'No, en ningún tipo de tratamiento', 'No, de ningún tipo', 'Si, durante 34 años en escuelas primarias de mi provincia.', 'Verónica Graciela Diaz', 'verónicagraciela.diaz@yahoo.com.ar', '2994714276', 'Débora Anahí Millán Rodriguez', 'millaindebora@gmail.com', '3515146765', 'En mi años de docente fui testigo de la aplicación de distintos planes de Educ. Sexual en las escuelas, aún así considero que nuestras infancias continúan vulnerables frente a nuevos modelos e ideologías que lejos están de brindar seguridad y protección. es urgente que alguien se levante y haga frente a un flagelo que está intentando destruir a nuestros niños y niñas.', 'Puede estar conformada por los padres e hijos, abuelos, tios, etc. O bien puede ser uno de los progenitores con sus hijos...el ideal sería papá, mamá y el o los hijos.'),
(240, 'Medina', 'Nadia', '0000-00-00', 34159838, 'Casado/a', 'Argentina', 'Tucumán ', 'San Miguel de Tucuman', 'Benigno Vallejos 3989', 4000, '3815523639', '3814390677', 'Argentina', 'Evangelica', 'En contra', 'NO', 'no', 'si, Fundación EPASI', 'Gustavo Lizarraga', 'hh', '381453698', 'gg', 'gg', 'gg', 'quiero prevenir a los niños', 'hombre y mujer'),
(241, 'Roxana', 'Mainero de Alderete', '1964-04-03', 2321506, 'Casado/a', 'Paraguay', 'Central', 'Asunción', 'José E. Rodó N° 532 c/ Cerro C', 7, '+595 981 42792', '', 'argentina', 'soy creyente en Jesucristo (evangélica)', 'En contra', 'no', 'no', 'Sí. En la iglesia y en instituciones educativas', 'Cinthia Hieber', 'cinthiahieber@hotmail.com', '+595992291210', 'Humberto Sarubbi', 'humbertosarubbi@yahoo.com.mx', '+595991775644', 'Como docente y educadora es un tema relevante para mí. Siempre he estado interesada en  este tipo de temas, ya que en la maestría realizada he indagado sobre el bullying y sus formas de llevarlo a cabo.', 'Esposa y Esposo '),
(250, 'Florencia Belen', 'Ceballos', '1988-07-20', 2147483647, '', '', '', '', '', 0, '', '', '', '', 'En contra', '', '', 'En una iglesia evangelica', '', '', '', '', '', '', '', '');
INSERT INTO `pow_users_perfil` (`userID`, `nombre`, `apellido`, `nacimiento`, `dni`, `estado_civil`, `pais`, `provincia`, `ciudad`, `direccion`, `cp`, `celular`, `fijo`, `nacionalidad`, `religion`, `proaborto`, `tratamiento`, `medicacion`, `trabajo`, `referencia1_nombre`, `referencia1_email`, `referencia1_celular`, `referencia2_nombre`, `referencia2_email`, `referencia2_celular`, `razones`, `concepcion`) VALUES
(251, 'German agustin ', 'Kiryk', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(252, 'Alejandra ', 'Gomez ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(253, 'Eliana Irma Yolanda', 'Medina', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(254, 'Karen ', 'Puca', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(257, 'Yanina Vanesa', 'Torrez', '1990-11-15', 6219768, 'Soltero/a', 'Paraguay', 'Central', 'Limpio', 'Limpio -25.170764, -57.489574', 1518, '+595991928010', '', 'Argentina', 'Evangélica', 'En contra', 'No.', 'No.', 'Sí, en la Iglesia Casa de Gracia Paraguay', 'Cinthia Hieber', 'cinthiahieber@hotmail.com', '+595 992 291 21', 'Humberto Sarubbi', 'humbertosarubbi@yahoo.com.mx', '+595 991 775 64', 'Quiero y necesito formarme como preventora del abuso sexual infantil principalmente porque hace años estoy trabajando con niños y entiendo que hoy en día se habla mucho más de este tema. Además, quiero estar preparada e informada para poder ayudar tanto en nuestra iglesia como a las demás debido a que no por trabajar con niños en una iglesia estamos exentos de que nuestros alumnos o niños en nuestro entorno pasen por esta situación.', 'Debería estar compuesta por papá, mamá e hijos.'),
(258, 'Gloria Telma ', 'Cabriza Doldan ', '1983-05-07', 0, 'Casado/a', 'Paraguay ', 'lartne CCentralartneC', ' Asunciónus AAsunciónus AAsunc', '1', 1290123110, '0986163282', '', 'Paraguaya', 'Cristiana ', 'En contra', 'No', 'No', 'Redil de niños ', 'Humberto Sarubbi Orue ', 'humbertosarubbi@yahoo.com.mx', '+595991775644', 'Cinthia Hieber ', 'cinthiahieber@hotmail.com', '+595992291210', 'Edificar y prevenir la vida de los niños mediante conceptos y principios fundamentales que ayuden a sostener su valor como personas,Conociendo sus derechos y estableciendo límites necesarios ', 'Dios: Papá, Mamá e hijos '),
(259, 'Lidia', 'Lopez', '1968-03-27', 0, '', 'Paraguay', 'Central ', 'Ñemby ', '2021', 595, '+595983711119', '', 'Paraguaya', 'La Cristiana Evangelica', 'En contra', 'No', 'No', 'En mi Iglesia hace 15 años cómo profe de escuela dominical', 'Humberto Sarubbi', 'Humbertosarubbi@yahoo.com.mx', '+595991775644', 'Cinthia Hieber', 'Cinthia Hieber', '+595992291210', 'Está en mi interés para ir educando a los niños con principios bíblicos para ir creciendo conforme a la palabra de Dios indica', 'Por un Padre y una Madre (Hombre y Mujer)'),
(262, 'Verónica ', 'Martínez ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(265, 'Beatriz Fabiola', 'Heredia Cacique ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(266, 'Blanca ', 'Contreras', '1986-07-19', 93859251, 'Soltero/a', 'Argentina', 'Río Negro', 'Villa Regina ', 'Av. Rivadavia 171', 8336, '2984744941', '2984744941', 'chilena', 'cristiana ', 'En contra', 'no', 'no', 'si, en mi ciudad villa regina y a nivel patagonia', 'Analía Gabriela Ponce', 'danyanaayelef@yahoo.com.ar ', '2984691002', 'Noemi Opazo', 'no tiene ', ' 298 4506486', 'Porque quiero tener herramientas para ayudar a los niños con los que trabajo , a los que conoceré y también brindar herramientas a los adultos con los que trabajo.', 'Dios, Papá , mamá , hijos/ en caso en los que no hay papá , Dios , mamá e hijos'),
(267, 'DORA Elena ', 'iranda', '1961-04-05', 14663544, 'Soltero/a', 'Argentina', 'Corrientes', 'Corrientes', 'Elías Abad 2318', -3400, '3794227844', '37944462153', 'Argentina', 'cristiana evangelica', 'En contra', 'no ', 'no', 'si guaderia', 'benitez vallejos maria jose ', 'benitezvallejosmj@gemail.com', '3795017705', 'barrios lorenaviviana', 'lorena.mia.yanela@gmail.com', '3794130005', 'para poder servir en la iglesia y en los barrios poder preveniry descubrir abusos en ', 'varon y mujer'),
(268, 'Vicenta', 'Boveda', '1966-07-24', 999986, 'Casado/a', 'paraguay', 'central', 'villa elisa', '000', 3, '+595982951449', '+59521944265', 'paraguaya', 'Evangelica', 'En contra', 'no', 'no', 'en la iglesia', 'Cinthia Hieber Sarubbi', 'cinthiahieber@hotmail.com', '+595992291210', 'Humberto Sarubbi', 'humbertosarubbi@hotmail.com', '+595991775644', 'Para conocer sobre e tema y a través del curso poder ayudar a otras personas, así como también fomentar la prevencion del mismo.', 'Mamá y papá'),
(269, 'VALERIA ', 'FENGLER ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(275, 'manuel aron', 'cuevas contreras', '1967-04-19', 19083018, 'Casado/a', 'argentina', 'neuquen', 'neuquen', 'spinelli mza. 20 casa 7 B. isl', 8300, '+5492996330207', '', 'argentino', 'cristiana evangelica', 'En contra', 'no', 'no', 'si, campamento de familia real. con nuestra iglesia.', 'Monica Jara', 'monicajara01@hotmail.com', '+5492995975505', 'Bernardo Montecino', 'bernardomontecino@hotmail.com', '+5492995816496', 'quisiera formarme como preventor del abuso sexual infantil, porque creo que en una muy buena herramienta para poder trabajar con estos niños y adolescentes que estan pasando por diferentes tipos de abuso, ya sea sexual oh maltrato verbal oh de otra indole. creo que es un tema muy interesante he, importante que ojala que muchos se sumen a este gran proyecto.', 'esposa esposo, he hijos.'),
(276, 'ana maria', 'arroyo', '1976-04-14', 25115772, 'Casado/a', 'argentina', 'neuquen', 'neuquen', 'spinelli mza.20 casa 7 b.islas', 8300, '+5492994656127', '', 'argentina', 'cristiana evangelica', 'En contra', 'no', 'no', 'no directamente', 'monica jara', 'monijara01@hotmail.com', '2995975505', 'bernardo montecino', 'bernardomontecino@hotmail.com', '2995816496', 'para poder obtener herramientas solidas de como trabajar con niños o adolescentes que esten pasando por este tipo de situaciones. asi poder ser mas util en esta sociedad y poder ser una persona contenedora y de ayuda en diferentes areas de niñes o adolescencia.', 'esposa esposo, he hijos'),
(277, 'SILVIA AILIN', 'BJORKLUND', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(278, 'carolina', 'serrano', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(279, 'Maricruz ', 'De Cardenas', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(280, 'Patricia Elizabeth', 'Aranda', '1987-12-27', 0, 'Casado/a', 'Argentina', 'Corrientes', 'Ituzaingó', '3302', 3302, '3786614285', '', 'Argentina', 'Cristiana', 'En contra', 'No', 'No', 'Si. En escuelas Biblicas en barrios y en iglesia.', 'Maria Valoy', 'mariavaloyj@gmail.com', '3786457457', 'Rubén Juárez', 'rubenjuarez7@gmail.com', '3786410789', '', 'Madre y Padre e Hijos'),
(283, 'Fernando', 'Rolon', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(285, 'Maria Elba', 'Encina', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', 'No', 'No', '', '', '', '', '', '', '', 'Porque estoy constantemente rodeada de situaciones de abuso de niñas. En unos de los barrios en donde me desempeñó como docente', 'Mama.papa.hijos'),
(286, 'Sil', 'Arregui', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(287, 'Claudia karina ', 'Quinteros ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(290, 'Luciana', 'Lescano', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(291, 'Exequiel Albano', 'Narese', '1991-03-08', 34186544, 'Casado/a', 'Argentina', 'Buenos Aires', '9 de Julio', 'Presidente perón 1485', 6500, '3815179950', '3815179950', 'Argentino', 'Si, evangelico', 'En contra', 'Ninguno', 'No', 'No', 'Laura Narese', 'lauranarese2@hotmail.com', '3814492040', 'Noelia Millán', 'noeliamillanperez@hotmail.com', '3815179549', 'Estoy involucrado en el deporte y seria una herramienta muy útil para trabajar con los chicos.', 'Padre, madre e hijos '),
(292, 'Salvo', 'Betiana', '1980-09-11', 28400072, 'Casado/a', 'Argentina', 'Neuquén', 'Neuquén', 'San Antonio 1040', 0, '2994599565', '', 'Argentina', 'Si, Evangelica', 'En contra', '', '', 'Si, Jardin Maternl Municipal y en casa kids de Casa de las Naciones', 'Sandoval Vanesa', 'vane.sandoval77@gmail.com', '', 'Daniel Antonio Figueroa ', 'df239018@gmail.com', '', 'Debido a una experiencia familiar y no supe como ayudar y otra porq trabajo con niños y deseo poder enseñar estas herramientas para prevenir los abusos sexuales.', ''),
(293, 'Alberto', 'Mallia', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(294, 'Walter', 'Albert', '1988-12-16', 34016560, 'Casado/a', 'Argentina', 'Corrientes', 'Ituzaingó', '3302', 3302, '3786614285', '', 'Argentino', 'Cristiano', 'En contra', 'No', 'No', 'Si. En Escuelas Bíblicas.', 'Maria Valoy', 'mariavaloyj@gmail.com', '3786457457', 'Rubén Juárez', 'rubenjuarez7@hotmail.com', '3786410789', 'Creo que la formación en esta área de trabajo es sumamente importante por los tiempos en que vivimos, veo necesidad de poder proteger a los niños en toda áreas de sus vidas, mas aun desde su niñez.', 'Madre y Padres e Hijos.'),
(295, 'Ivana', 'Vera', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(296, 'Rosa Haydee', 'Goncalvez Ubeda', '2001-07-02', 0, 'Soltero/a', '', 'Corrientes', 'Ituzaingo', '', 3302, '3786-497995', '', 'Argentina', 'Evangelica', 'En contra', 'No', 'rogoncalvez77@gmail.com', 'Muy poco aún.', '', '', '', '', '', '', 'Me gustaria formar parte de este grupo porque me interesa la formación y el cuidado de los niños.', 'Padre, Madre e hijos'),
(297, 'Milagros', 'Villanueva', '0000-00-00', 0, '', 'Peru', '', '', '', 0, '999500912', '', 'Peruana', 'Cristiana', 'En contra', 'No', 'No', 'Estado', '', '', '', '', '', '', 'Por contribuir a?la proteccion de niñoas y niñas que se encuentran en riesgo y por los que estan pasando este tipo de violencia ', 'Familia tradkckonal'),
(298, 'Griselda Andrea ', 'Fernández Mora ', '2020-11-02', 9981279, 'Casado/a', '', '', '1', '15', 150, '999956301', '', 'Peruana ', 'Evangelica', 'En contra', 'No ', 'No ', 'Colegio e iglesia ', 'Silvia soto', '', '999486448', 'Nancy Fernández ', '', '912711479', 'Prevenir el abuso y luchar contra las causas ', 'Padre,madre e hijos'),
(299, 'Patricia', 'Atoche Lopez', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(300, 'Amdrea', 'Pourrieux ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(301, 'Claudia', 'Aramburo', '1987-03-08', 33370919, 'Casado/a', 'Argentina', 'Córdoba', 'Santa Rosa de Rio Primero', 'Santa Rosa de Rio Primero', 5133, '03574 15401009', '', 'Argentina', 'Cristiana Evangélica', 'En contra', 'No', 'no', 'SI. Ministerio de niños en la Iglesia', 'Gustavo Tello', 'gustavodanieltello@yahoo.com.ar', '0351 155072017', 'Alejandro Inze', 'ale_inze@hotmail.com', '03574 15401993', 'Quiero ayudar en la prevención de abuso. Siendo niña sufre algún tipo de abuso y nadie lo noto. Hoy, Dios esta sanando esas heridas que por mucho tiempo me quitaron la verdadera libertad.  ', 'Papá y Mamá. Hijos'),
(302, 'Silvia', 'Villagarcia', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(303, 'Dora Elena', 'Miranda', '1961-04-05', 14663544, 'Soltero/a', 'Argentina', 'Corrientes', 'Corrientes', 'Elías Abad 2318', 3400, '3794227844', '37944462153', 'Argentina', 'si, cristiana evangelica', 'En contra', 'Ninguno', 'No', 'si en una guadería ', 'maria jose benitez vallejos', 'benitezvallejosmj@gmail.com', '3795017705', 'ofelia sosa', 'ofelina14@hotmail.com', '3795061991', 'para poder servir en la iglesia y en los barrios ', 'tengo.5 hijos todos mayores y 8 nietos '),
(304, 'Betiana', 'Salvo', '2019-09-11', 28400072, 'Casado/a', 'Argentina', 'Neuquén', 'Neuquén', 'San Antonio 1040', 0, '2994599565', '', 'Argentina', 'Si, evangelica', 'En contra', '', '', 'Si, Jardin Maternl Municipal y en casa kids de Casa de las Naciones', 'Sandoval Vanesa', 'vane.sandoval77@gmail.com', '', '', '', '', 'Debido a una experiencia familiar y no supe como ayudar y otra porq trabajo con niños y deseo poder enseñar estas herramientas para prevenir los abusos sexuales.', ''),
(306, 'Monica ', 'Sagardia', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', 'modautea@hotmail.com', '', '', '', '', '', '', '', '', ''),
(307, 'Maria José', 'Gonzalez', '1977-07-08', 25818339, 'Soltero/a', 'Argentina', 'Tucumán', 'Juan Bautista Alberdi', 'Pje Paz y Paraná Mza A casa 6 ', 0, '+543865634779', '', 'Argetina', 'si, Católica apostólica romana ', 'En contra', '', '', 'si, En el Hogar de Niñas San José de las Hermanas Esclavas y en Acción Católica en el Área Aspirantes, Caritas Arquidiocesana,soy Catequesista', 'Paula Pérez ', '', '381 562-4293', '', '', '', 'Creo que el abuso infantil es el más aberrante de los crímenes , y no basta con pedir justicia luego de que estos hechos suceden. Es necesaria la Prevención y cuidar que nuestros niños no deban pasar por una situación así ', ''),
(308, 'Karen', 'Paez', '1974-02-14', 23639398, 'Casado/a', 'Argentina', 'Cordoba', 'Juarez Celman ', 'El ombu 129', 0, '3518002342', '', 'Argentina', 'Si, Evangelica', 'En contra', '', '', 'Si, En la iglesia ', 'Matias Arraigada   ', 'matiascdr.@gmail.com ', '3516816377', 'Andrea Arias', 'privada@juarezcelman.gob.ar', '3513271319 ', 'Para poder ayudar a padres a prevenir el abuso de sus niños darles herramientas de como enseñar a sus hijos a pedir ayuda ante alguna situación de abuso.', ''),
(310, 'Sanchez Bulacio', 'Carla Pamela', '1986-08-17', 32349273, 'Casado/a', 'Argentina', 'La Rioja', 'La Rioja', 'Calle República Argentina S/N ', 5300, '3804951593', '', 'Argentina', 'si, Católico ', 'En contra', 'No me encuentro en tratamiento', 'No', 'si, Catequesis', 'María Teresa Cáceres ', 'mariateca47@gmail.com', '3804689978', 'Graciela Sobol', 'mgracielasobol55@gmail.com', '3804206850', 'Para poder ayudar en donde se requiera y evitar que se siga dando este flagelo en la familias', 'Mamá, Papá e hijos'),
(311, 'Elizabeth', 'Vivanco Arana', '1980-02-06', 40450348, 'Casado/a', 'Perú', 'Lima', 'Lima', 'Jr. Las Tunas 196 entel Perú -', 0, '992480723', '5267903', 'Peruana', 'Si, cristiana', 'En contra', 'Ninguno', 'No', 'si, King kids lima', 'David Vargas ', '', ' +51949398362', '', '', '', 'Trabajamos en zonas de vulnerabilidad', 'Matrimonio'),
(312, 'Claudia Mabel', 'Righi', '1970-06-07', 21646237, 'Casado/a', 'Argentina', 'Cordoba', 'General Deheza', 'Liniers 1209', 0, '3585618596', '03584053038', 'Argentina', 'Si, Evangelica', 'En contra', 'Ninguno', 'no', 'IGLESIA ESCUELA BIBLICA', 'Lucia Sequeira', 'lucia20-20@hotmail.com', '3585162352', '', '', '', 'Para ayudar a la situacion que estamos viviendo como pais dando talleres y asistiendo en todo lo que pueda.', 'Padre, madre e hijos'),
(313, 'Lid', 'Galmes', '0000-00-00', 16456956, 'Casado/a', 'Chile', 'Curicó', 'Curicó', 'Lago Peñuelas 1440', 0, '+56998940925', '998940925', 'Chilena', 'Si, cristiana evangelica', 'En contra', 'Ninguno', 'no', 'si, en la iglesia', 'Marcos Rossi ', '', '+56975853814', '', '', '', 'Para poder trabajar en conjunto con mi esposo, previniendo los niños de la iglesia en principio y luego de la ciudad.', 'Papá, mamá e hijo'),
(314, 'Claudia', 'Martínez', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(320, 'Natalia Daniela', 'Benitez', '1979-03-17', 34817575, 'Soltero/a', 'Argentina', 'Buenos Aires', 'Buenos Aires', 'Eloy Alfaro 1658', 2801, '1123210797', '', 'Argentina', 'Evangelica', 'En contra', 'no ninguno', 'no', 'si, en la escuela', 'Paula Mansilla', 'yo_pauls@hotmail.com', '1537951215 ', 'Miriam Almada.', 'joseluisbenitez2019@gmail.com', '1527014050 ', 'Contar con herramientas para detectar casos de abusos sexual.', 'papa, mama y muchos hijos '),
(316, 'Verónica ', 'Gómez ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(321, 'Sandra', 'Wagner', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(318, 'Magdalena', 'Romero', '1976-08-29', 25320761, 'Casado/a', 'argentina', 'tucuman', 'concepcion', 'gabriela mistral 372', 4146, '54 9 386567801', '00', 'argentina', 'evangelica', 'En contra', 'NO', 'NO', 'si. En  la iglesia', 'JAVIER CESAR AUGUSTO ROMERO', 'rome23560@hotmail.com', '3865236452', 'IRIS MAGDALENA ROMERO', 'romerito97@outlook.com', '3865623657', 'LAS RAZONES SON POR LA CANTIDAD DE CASOS DE ABUSOS QUE HAY, TENGO  LA NECESIDAD DE HACER ALGO, TRABAJAMOS CON NIÑOS Y ADOLECENTES. ALGUNOS QUE HAN VIVIDO ESTAS SITUACIONES, CON LAMENTARNOS NO AYUDA, ES IMPORTANTE ADQUIRIR HERRAMIENTAS PARA PREVENIR MAS QUE TODO Y ENCONTRAR LA FORMA DE AYUDAR ALOS QUE PASARON YA ESTO. Y PARA CAMBIAR EL NUMERO DE LAS ESTADISTICA DE ABUSOS QUE HAY HOY.', 'PAPA MAMA Y HIJOS'),
(322, 'jose', 'vallejo', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(323, 'Yanina Soledad', 'Bernhard', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(324, 'Alejandra ', 'Sanchez', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(325, 'Mónica Noemí', 'Arretche', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(326, 'eva', 'carrilemo', '1983-10-07', 0, 'Casado/a', 'Argentina', 'Chubut', 'Trelew', 'Pje Santiago del Estero nte', 91009100, '', '', '', 'Cristianismo', 'En contra', 'No', 'No', 'En La escuela', '', '', '', '', '', '', 'Quisiera implementar este servicio en la iglesia', 'Mamá- papá- hikos'),
(327, 'Eliana', 'Tanquia', '1982-10-10', 29449137, 'Casado/a', 'Argentina', 'La Rioja', 'La Rioja', 'Remedios de Escalada 1349', 5300, '3804236682', '', 'Argentina', 'Catolica', 'En contra', 'No', 'No', 'Si, como niñera', '', '', '', '', '', '', '', 'Papa, mama e hijos'),
(328, 'luciana', 'rosemberger', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(329, 'Lucas ', 'Depascua', '1991-09-22', 35704230, 'Soltero/a', 'Argentina', 'fe SantaSanta Fe', 'Rosario', 'Pje Rafaela 6060', 20, '3416412449', '', 'Argentina ', 'Si, cristiano evangelico', 'En contra', 'No', 'No', 'Si, escuela dominical ', 'Lucas', 'lucasdepascua@gmail.com', '3416412449', '', '', '', 'Ya soy preventro de abuso sexual infantil, pero quiera actualizar mi metodo de prevención ', 'Mamá, Papá  e hijos '),
(330, 'Noelia', 'Delgado', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(331, 'Silvana', 'Garay', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(332, 'Silvana', 'Garay', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(333, 'Berenice', 'Guzmán', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(334, 'Adriana ', 'Herrera', '1984-11-17', 31379725, 'Casado/a', 'Argentina', 'Rio Negro', 'General Roca', 'Colombia', 994, '2984530740', '', 'Argentina', 'Si, soy Evangelica, pertenezco a la Igle', 'En contra', 'No', 'No', 'Si, en Horita Feliz y Escuela Dominical', 'Adriana Noemi Herrera', 'micaias86@hotmail.com', '2984530740', 'Micaias Paillaqueo', 'micaias86@hotmail.com', '2984504487', 'Actualmente estoy trabajando en la Fundacion La Salida con mujeres que tienen sus parejas con problemas de adicciones y entiendo que es importante formarme e interiorizarme del abuso sexual infantil, ya que es un tema relacionado', 'Por un papa, mama y niños'),
(335, 'Griselda', 'Aciar', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(336, 'Lía Vanesa', 'Cabezas', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(337, 'Marcela ', 'Arce', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(338, 'Laura Ines ', 'Sajama', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(339, 'Gabriela ', 'Mendez ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(340, 'Jesica', 'Montenegro ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(341, 'LORENA', 'VELIZ', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(342, 'Agustin', 'Ariino', '1982-03-08', 29212552, 'Casado/a', 'Argentina', 'Río Negro', 'General Roca', 'Artigas 868', 8332, '+54 9 29846489', '', 'Argentino', 'Cristiano', 'En contra', 'No', 'No', 'Cervantes - Río Negro / Jordania - Medio Oriente', 'Osvaldo Monroy', 'osroy@hotmail.com', '2984648949', 'Javier Crosta', 'javiercrosta@gmail.com', '2984381351', 'Es una realidad que siempre existió que ha crecido exponencialmente y creo que es el detonante de los muchos desordenes actuales en la sociedad. Colaboro en centro de adicciones, la mayoria de las historias proviene de contexto de abuso. El deseo es capacitarme para poder ayudar en mi entorno iglesia/barrio y a futuro me gustaría trabajar con niños yadultos post guerra, en un principio medio oriente.', 'un papá, una mamá e hijos'),
(344, 'Melody', 'Brescia', '0000-00-00', 0, 'Casado/a', '', '', 'Buenos aire ', '', 17720, '1534741520', '', 'Argentina', '', 'En contra', 'No', 'No', 'Si', 'Melody ', 'bresciamelody@gmail.com', '1534741520', '', '', '', 'Participó de una red de personas que sirven a la comunidad ', 'Mamá papá e hijos '),
(345, 'Jose', 'Vallejo', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(346, 'Maria', 'Belen', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(347, 'Marilina', 'Comeliesi', '0000-00-00', 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_users_preventores`
--

INSERT INTO `pow_users_preventores` (`Id`, `userID`, `lugar`, `fecha`, `certificado`, `lugar_aplicacion`, `edad_nivel`, `reporte`, `revelacion`, `explicacion`) VALUES
(1, 3, '', '0000-00-00', '', '', '', '', '', ''),
(2, 9, '', '0000-00-00', '', '', '', '', '', ''),
(3, 10, '', '0000-00-00', '', '', '', '', '', ''),
(4, 12, '', '0000-00-00', '', '', '', '', '', ''),
(5, 13, '', '0000-00-00', '', '', '', '', '', ''),
(7, 17, 'Neuquén', '2010-01-01', 'No. Lo extravié.', 'Escuela 346 - Desde el 2011 al 2014.', '8 a 12 años.', 'No pasé reportes. Sólo trabajé en la escuela.', 'Sí. Tuve dos casos.', ''),
(8, 18, '', '0000-00-00', '', '', '', '', '', ''),
(9, 19, '', '0000-00-00', '', '', '', '', '', ''),
(10, 20, '', '0000-00-00', '', '', '', '', '', ''),
(11, 175, '', '0000-00-00', '', '', '', '', '', ''),
(12, 176, '', '0000-00-00', '', '', '', '', '', ''),
(13, 177, '', '0000-00-00', '', '', '', '', '', ''),
(14, 178, '', '0000-00-00', '', '', '', '', '', ''),
(15, 179, '', '0000-00-00', '', '', '', '', '', ''),
(16, 180, '', '0000-00-00', '', '', '', '', '', ''),
(17, 181, '', '0000-00-00', '', '', '', '', '', ''),
(18, 182, '', '0000-00-00', '', '', '', '', '', ''),
(19, 183, '', '0000-00-00', '', '', '', '', '', ''),
(20, 184, '', '0000-00-00', '', '', '', '', '', ''),
(21, 185, '', '0000-00-00', '', '', '', '', '', ''),
(22, 186, '', '0000-00-00', '', '', '', '', '', ''),
(23, 187, '', '0000-00-00', '', '', '', '', '', ''),
(24, 188, '', '0000-00-00', '', '', '', '', '', ''),
(25, 188, '', '0000-00-00', '', '', '', '', '', ''),
(26, 189, '', '0000-00-00', '', '', '', '', '', ''),
(27, 190, '', '0000-00-00', '', '', '', '', '', ''),
(28, 191, '', '0000-00-00', '', '', '', '', '', ''),
(29, 192, '', '0000-00-00', '', '', '', '', '', ''),
(30, 193, '', '0000-00-00', '', '', '', '', '', ''),
(31, 194, '', '0000-00-00', '', '', '', '', '', ''),
(32, 195, '', '0000-00-00', '', '', '', '', '', ''),
(33, 196, '', '0000-00-00', '', '', '', '', '', ''),
(34, 197, '', '0000-00-00', '', '', '', '', '', ''),
(35, 198, '', '0000-00-00', '', '', '', '', '', ''),
(36, 199, '', '0000-00-00', '', '', '', '', '', ''),
(37, 200, '', '0000-00-00', '', '', '', '', '', ''),
(38, 201, '', '0000-00-00', '', '', '', '', '', ''),
(39, 202, '', '0000-00-00', '', '', '', '', '', ''),
(40, 203, '', '0000-00-00', '', '', '', '', '', ''),
(41, 204, '', '0000-00-00', '', '', '', '', '', ''),
(42, 205, '', '0000-00-00', '', '', '', '', '', ''),
(43, 206, '', '0000-00-00', '', '', '', '', '', ''),
(44, 207, '', '0000-00-00', '', '', '', '', '', ''),
(45, 208, '', '0000-00-00', '', '', '', '', '', ''),
(46, 209, '', '0000-00-00', '', '', '', '', '', ''),
(47, 210, '', '0000-00-00', '', '', '', '', '', ''),
(48, 211, '', '0000-00-00', '', '', '', '', '', ''),
(49, 212, '', '0000-00-00', '', '', '', '', '', ''),
(50, 213, '', '0000-00-00', '', '', '', '', '', ''),
(51, 214, '', '0000-00-00', '', '', '', '', '', ''),
(52, 215, '', '0000-00-00', '', '', '', '', '', ''),
(53, 216, '', '0000-00-00', '', '', '', '', '', ''),
(54, 217, '', '0000-00-00', '', '', '', '', '', ''),
(55, 218, '', '0000-00-00', '', '', '', '', '', ''),
(56, 219, '', '0000-00-00', '', '', '', '', '', ''),
(57, 220, '', '0000-00-00', '', '', '', '', '', ''),
(58, 221, '', '0000-00-00', '', '', '', '', '', 'gabiiviidal_28@hotmail.es'),
(59, 222, '', '0000-00-00', '', '', '', '', '', ''),
(60, 223, '', '0000-00-00', '', '', '', '', '', ''),
(61, 224, '', '0000-00-00', '', '', '', '', '', ''),
(62, 225, '', '0000-00-00', '', '', '', '', '', ''),
(63, 226, '', '0000-00-00', '', '', '', '', '', ''),
(64, 227, '', '0000-00-00', '', '', '', '', '', ''),
(65, 228, '', '0000-00-00', '', '', '', '', '', ''),
(66, 229, '', '0000-00-00', '', '', '', '', '', ''),
(67, 230, '', '0000-00-00', '', '', '', '', '', ''),
(68, 231, '', '0000-00-00', '', '', '', '', '', ''),
(69, 232, '', '0000-00-00', '', '', '', '', '', ''),
(70, 233, '', '0000-00-00', '', '', '', '', '', ''),
(71, 234, '', '0000-00-00', '', '', '', '', '', ''),
(72, 235, '', '0000-00-00', '', '', '', '', '', ''),
(73, 236, '', '0000-00-00', '', '', '', '', '', ''),
(74, 237, '', '0000-00-00', '', '', '', '', '', ''),
(75, 238, '', '0000-00-00', '', '', '', '', '', ''),
(76, 239, '', '0000-00-00', '', '', '', '', '', ''),
(77, 240, '', '0000-00-00', '', '', '', '', '', ''),
(78, 241, '', '0000-00-00', '', '', '', '', '', ''),
(79, 242, '', '0000-00-00', '', '', '', '', '', ''),
(80, 243, '', '0000-00-00', '', '', '', '', '', ''),
(81, 244, '', '0000-00-00', '', '', '', '', '', ''),
(82, 245, '', '0000-00-00', '', '', '', '', '', ''),
(83, 246, '', '0000-00-00', '', '', '', '', '', ''),
(84, 247, '', '0000-00-00', '', '', '', '', '', ''),
(85, 248, '', '0000-00-00', '', '', '', '', '', ''),
(86, 249, '', '0000-00-00', '', '', '', '', '', ''),
(87, 250, '', '0000-00-00', '', '', '', '', '', ''),
(88, 251, '', '0000-00-00', '', '', '', '', '', ''),
(89, 252, '', '0000-00-00', '', '', '', '', '', ''),
(90, 253, '', '0000-00-00', '', '', '', '', '', ''),
(91, 254, '', '0000-00-00', '', '', '', '', '', ''),
(92, 255, '', '0000-00-00', '', '', '', '', '', ''),
(93, 256, '', '0000-00-00', '', '', '', '', '', ''),
(94, 257, '', '0000-00-00', '', '', '', '', '', ''),
(95, 258, '', '0000-00-00', '', '', '', '', '', ''),
(96, 259, '', '0000-00-00', '', '', '', '', '', ''),
(97, 260, '', '0000-00-00', '', '', '', '', '', ''),
(98, 261, '', '0000-00-00', '', '', '', '', '', ''),
(99, 262, '', '0000-00-00', '', '', '', '', '', ''),
(100, 263, '', '0000-00-00', '', '', '', '', '', ''),
(101, 264, '', '0000-00-00', '', '', '', '', '', ''),
(102, 265, '', '0000-00-00', '', '', '', '', '', ''),
(103, 266, '', '0000-00-00', '', '', '', '', '', ''),
(104, 267, '', '0000-00-00', '', '', '', '', '', ''),
(105, 268, '', '0000-00-00', '', '', '', '', '', ''),
(106, 269, '', '0000-00-00', '', '', '', '', '', ''),
(107, 270, '', '0000-00-00', '', '', '', '', '', ''),
(108, 271, '', '0000-00-00', '', '', '', '', '', ''),
(109, 272, '', '0000-00-00', '', '', '', '', '', ''),
(110, 273, '', '0000-00-00', '', '', '', '', '', ''),
(111, 274, '', '0000-00-00', '', '', '', '', '', ''),
(112, 275, '', '0000-00-00', '', '', '', '', '', ''),
(113, 276, '', '0000-00-00', '', '', '', '', '', ''),
(114, 277, '', '0000-00-00', '', '', '', '', '', ''),
(115, 278, '', '0000-00-00', '', '', '', '', '', ''),
(116, 279, '', '0000-00-00', '', '', '', '', '', ''),
(117, 280, '', '0000-00-00', '', '', '', '', '', ''),
(118, 281, '', '0000-00-00', '', '', '', '', '', ''),
(119, 282, '', '0000-00-00', '', '', '', '', '', ''),
(120, 283, '', '0000-00-00', '', '', '', '', '', ''),
(121, 284, '', '0000-00-00', '', '', '', '', '', ''),
(122, 285, '', '0000-00-00', '', '', '', '', '', ''),
(123, 286, '', '0000-00-00', '', '', '', '', '', ''),
(124, 287, '', '0000-00-00', '', '', '', '', '', ''),
(125, 288, '', '0000-00-00', '', '', '', '', '', ''),
(126, 289, '', '0000-00-00', '', '', '', '', '', ''),
(127, 290, '', '0000-00-00', '', '', '', '', '', ''),
(128, 291, '', '0000-00-00', '', '', '', '', '', ''),
(129, 292, '', '0000-00-00', '', '', '', '', '', ''),
(130, 293, '', '0000-00-00', '', '', '', '', '', ''),
(131, 294, '', '0000-00-00', '', '', '', '', '', ''),
(132, 295, '', '0000-00-00', '', '', '', '', '', ''),
(133, 296, 'Ituzaingo Corrientes ', '0000-00-00', '', '', '', '', '', 'rogoncalvez77@gmail.com'),
(134, 297, '', '0000-00-00', '', '', '', '', '', ''),
(135, 298, '', '0000-00-00', '', '', '', '', '', ''),
(136, 299, '', '0000-00-00', '', '', '', '', '', ''),
(137, 300, '', '0000-00-00', '', '', '', '', '', ''),
(138, 301, '', '0000-00-00', '', '', '', '', '', ''),
(139, 302, '', '0000-00-00', '', '', '', '', '', ''),
(140, 303, '', '0000-00-00', '', '', '', '', '', ''),
(141, 304, '', '0000-00-00', '', '', '', '', '', ''),
(142, 305, '', '0000-00-00', '', '', '', '', '', ''),
(143, 306, '', '0000-00-00', '', '', '', '', '', 'modautea@hotmail.com'),
(144, 307, '', '0000-00-00', '', '', '', '', '', ''),
(145, 308, '', '0000-00-00', '', '', '', '', '', ''),
(146, 309, '', '0000-00-00', '', '', '', '', '', ''),
(147, 310, '', '0000-00-00', '', '', '', '', '', ''),
(148, 311, '', '0000-00-00', '', '', '', '', '', ''),
(149, 312, '', '0000-00-00', '', '', '', '', '', ''),
(150, 313, '', '0000-00-00', '', '', '', '', '', ''),
(151, 314, '', '0000-00-00', '', '', '', '', '', ''),
(152, 315, '', '0000-00-00', '', '', '', '', '', ''),
(153, 316, '', '0000-00-00', '', '', '', '', '', ''),
(154, 317, '', '0000-00-00', '', '', '', '', '', ''),
(155, 318, '', '0000-00-00', '', '', '', '', '', ''),
(156, 319, '', '0000-00-00', '', '', '', '', '', ''),
(157, 320, '', '0000-00-00', '', '', '', '', '', ''),
(158, 321, '', '0000-00-00', '', '', '', '', '', ''),
(159, 322, '', '0000-00-00', '', '', '', '', '', ''),
(160, 323, '', '0000-00-00', '', '', '', '', '', ''),
(161, 324, '', '0000-00-00', '', '', '', '', '', ''),
(162, 325, '', '0000-00-00', '', '', '', '', '', ''),
(163, 326, '', '0000-00-00', '', '', '', '', '', ''),
(164, 327, '', '0000-00-00', '', '', '', '', '', ''),
(165, 328, '', '0000-00-00', '', '', '', '', '', ''),
(166, 329, '', '0000-00-00', '', '', '', '', '', ''),
(167, 330, '', '0000-00-00', '', '', '', '', '', ''),
(168, 331, '', '0000-00-00', '', '', '', '', '', ''),
(169, 332, '', '0000-00-00', '', '', '', '', '', ''),
(170, 333, '', '0000-00-00', '', '', '', '', '', ''),
(171, 334, '', '0000-00-00', '', '', '', '', '', ''),
(172, 335, '', '0000-00-00', '', '', '', '', '', ''),
(173, 336, '', '0000-00-00', '', '', '', '', '', ''),
(174, 337, '', '0000-00-00', '', '', '', '', '', ''),
(175, 338, '', '0000-00-00', '', '', '', '', '', ''),
(176, 339, '', '0000-00-00', '', '', '', '', '', ''),
(177, 340, '', '0000-00-00', '', '', '', '', '', ''),
(178, 341, '', '0000-00-00', '', '', '', '', '', ''),
(179, 342, '', '0000-00-00', '', '', '', '', '', 'agustinariino@gmail.com'),
(180, 343, '', '0000-00-00', '', '', '', '', '', ''),
(181, 344, '', '0000-00-00', '', '', '', '', '', ''),
(182, 345, '', '0000-00-00', '', '', '', '', '', ''),
(183, 346, '', '0000-00-00', '', '', '', '', '', ''),
(184, 347, '', '0000-00-00', '', '', '', '', '', '');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(18, 17, 70, 3, 'A continuación le realizamos una serie de preguntas que servirán para evaluar la asimilación de los conceptos expuestos en la presente clase. Por favor desarrolle las consignas y haga click en el botón. Respuesta correcta.', 'Por favor, revise la respuesta.', 2),
(19, 0, 15, 91, 'En este video el tipo de prevención que se muestra es prevención primaria (donde a través de las distintas herramientas aplicadas por los preventores se puede lograr detección de situaciones de ASI.-', '', 0),
(20, 0, 15, 92, 'En este video se muestra como se aplica la prevención primordial.-', '', 0),
(21, 0, 15, 93, 'En mi localidad buscaría aplicar la prevención primordial a través de campañas de concientización y promoción de derechos del niños/as y adolescentes. Por ejemplo utilizar la actividad que desarrollamos como iglesia, que se llama Barrileteada \"Remontando Sueños\", donde los niños acuden y remontan sus barriletes, aprovechando dicha oportunidad para dar a conocer sus derechos y tratar el tema de prevención de ASI a traves de una dramatización.- ', '', 0),
(22, 146, 15, 91, 'En este video el tipo de prevención observado es la Primaria, en la cual los preventores a través de las distintas herramientas trabajan para la detección de manifestaciones de ASI en niños/as y pre juveniles.-', '', 2),
(23, 146, 15, 92, 'En este video el tipo de prevención es la Primordial.-', '', 2),
(24, 146, 15, 93, 'En mi localidad  la prevención la realizaría a través de la concientización y promoción de los derechos de los niños/as y adolescentes. Por ejemplo desde nuestra iglesia se desarrolla una actividad con niños que se llama \"Barrileteada, Remontando Sueños\" en la cual los niños acuden y remontan sus barriletes, allí se puede dar a conocer los derechos y a través de una dramatización que apunte sobre la prevención de ASI.-', '', 2),
(25, 0, 15, 91, 'Prevención primaria', '', 0),
(26, 0, 15, 92, 'Prevención primordial', '', 0),
(27, 0, 15, 93, ' Foros y promoción en la radio de la iglesia.\r\n\r\n', '', 0),
(28, 0, 15, 91, '   El video corresponde a los tipos de prevención PRIMARIA y SECUNDARIA, ya que trabaja de manera grupal en los talleres con niños de 4 a 17 años. Manifiestan y dan a conocer sus actitudes y emociones en base a las diferentes técnicas de recolección de datos que los preventores utilizan. \r\n\r\n   Los chicos interactúan con su entorno, se comunican y reciben estímulos que los ayuden y den a conocer lo que podría estar oculto producto del abuso.  ', '', 0),
(29, 0, 15, 92, '   La expresión cultural que utiliza la MURGA DE LOS INOCENTES muestra la información a la sociedad desde EPASI sobre la problemática que es el abuso sexual infantil. Esta metodología de difusión pertenece a la prevención PRIMORDIAL. ', '', 0),
(30, 0, 15, 93, '   Puesto que, el desarrollo humano se va forjando en base a la interacción con el entorno, según el psicólogo ruso Bronfenbrenner, es importante saber cuál es el contexto donde se podría aplicar la PREVENCIÓN PRIMORDIAL. La murga es una expresión aceptada y adoptada por todas las clases sociales, por ende la convierte en la más factible al momento de dar a conocer un mensaje. Otra forma de comunicación sería teatro o títeres callejeros.   ', '', 0),
(31, 144, 15, 91, 'prevención primaria y secundaria (1)', '', 2),
(32, 144, 15, 92, 'prevención primordial', '', 2),
(33, 144, 15, 93, 'La prevención primordial la aplicaría en medios de comunicación radial,donde soy invitada a hablar de diferentes temas, es por eso la capacitación. Redes sociales donde también tiene gran alcance , en la difusión personal a diario y exponiendo el tema a las autoridades de la zona.', '', 2),
(34, 288, 15, 91, 'Gracias muy interesante', '', 2),
(35, 288, 15, 92, 'Espectacular', '', 0),
(36, 288, 15, 93, 'De muchas maneras\r\n', '', 0),
(37, 214, 15, 91, 'Prevencón Primaria', '', 0),
(38, 214, 15, 92, 'Prevención Primordial', '', 0),
(39, 214, 15, 93, 'Lo implementaria a travéz de la televisón con programas que ayuden a visualizar y prevenir el ASI, ', '', 0),
(40, 202, 15, 91, 'Se trata de la prevención primaria (talleres de niños y prejuveniles). Es decir trabajar en el mesosistema del sujeto.', '', 0),
(41, 202, 15, 92, 'Se refiere a la prevención primordial, es decir, difusion y promocion de los derechos de  los niños. O sea, estar en el exosistema del sujeto, ya que se le enseña valores, para así modificar la sociedad.', '', 0),
(42, 202, 15, 93, 'Una de las formas seria, con los medios de comunicación (radio y tv), como vivo en un pueblo grande casi ciudad, aqui no se ven manifestaciones publicas, por lo tanto las murgas las emplearia en las caminatas del cáncer, o en los talleres de verano. Hay eventos del síndrome de Down como también de Autismo (ya que participo en ellos), en ellos no podría usarlos, porque ellos no soportan el sonido fuerte, pero podría usar las representaciones con un fondo musical suave.', '', 0),
(43, 241, 76, 85, 'En este vídeo presenta  la prevención primaria, la cual se realiza por medio del equipo especializado de preventores EPASI. Esta prevención primaria consiste, en llevar talleres, juegos, canciones, desde un cambio de encuadre físico, donde el niño o los niños, se sientan en confianza de compartir sus experiencias y recibir instrucciones saludables de prevención, a través del Programa \"Mientras nos divertimos aprendemos a vivir\". Las técnicas empleadas fueron: Dominó de las emociones - Técnicas del Puf- Psicodrama: Técnicas de las esculturas - Secretos buenos y Secretos malos - Canciones- Cuento del fantasma .', '', 0),
(44, 241, 76, 86, 'En este vídeo se muestra la prevención primordial por medio de murgas realizadas en las calles. Es un impacto desde lo social (MACRO, transmitiendo un mensaje en vivo, con participación activa de los integrantes de EPASI  y también de la comunidad.', '', 0),
(45, 241, 76, 87, 'Me interesó lo de los programas radiales, ya que Casa de Gracia, tiene un programa radial, donde de una otra forma, se podría estar impartiendo cápsulas de mensajes preventivos.  (Por supuesto después de recibir mayor entrenamiento en cómo hacerlo) También sería interesante armar Foros internacionales para poder expresar mensajes preventivos e invitar a que otras personas se vayan uniendo,  desde los distintos niveles o áreas profesionales.', '', 0),
(46, 221, 15, 91, 'PREVENCIÓN SECUNDARIA \"Mientras nos divertimos aprendemos a vivir\"', '', 0),
(47, 221, 15, 92, 'PREVENCIÓN PRIMORDIAL', '', 0),
(48, 221, 15, 93, 'La aplicaría a través de los medios de comunicación, como facebook, instagram, entre otros. También con folletos, en las diferentes instituciones educativas, teniendo las expectativas de que las familias se interesen y poder realizar alguna charla informativa.', '', 0),
(49, 163, 15, 91, 'Talleres de prevención: Prevención primaria- secundaria', '', 2),
(50, 163, 15, 92, 'Prevención primordial', '', 2),
(51, 163, 15, 93, 'Difundiendo, informando, previniendo, hablando de  derechos de niñas, niños y adolescentes,  en distintos medios de comunicación como radio, televisión, redes sociales. Buscando y generando espacios (clubes, actividades barriales y comunitarias...). A través de marchas con murgas, música...', '', 2),
(52, 167, 15, 91, '---', '', 0),
(53, 167, 15, 92, 'Esta actividad corresponde a la prevención primordial', '', 0),
(54, 167, 15, 93, 'Desde hace algunos años, en el mes de agosto,  la institución en la que me congrego realiza  la  barrileteada \"Remontando sueños\", a través de los medios de comunicación locales se invita a las familias a participar de esta actividad. La misma ha sido declarada de interés municipal en dos oportunidades. Este es un buen espacio para hacer énfasis en los derechos de los niños y niñas. De hecho en una de las ediciones nos centramos en la temática, mientras las familias remontaban sus barriletes se  distribuyó folletería, se colocó cartelería y desde el palco quienes animaban difundieron informaciòn.\r\nPienso que de otra actividad que podría anexarse es la realización de una obra de teatro, en el momento que las familias se reúnen para recibir los premios .\r\n', '', 0),
(55, 0, 15, 91, 'este video muestra la prevención primaria, donde se aplican os métodos de baja complejidad para la obtención de alta efectividad', '', 0),
(56, 0, 15, 92, 'este video muestra la prevención primordial, donde a través de la murga se hace petición de la justicia y da a conocer la prevención y el pedido de accionar por parte del gobierno a favor de los niños y victimas de abuso', '', 0),
(57, 0, 15, 93, 'En la zona donde yo vivo podría aplicarla de varias maneras, a través de radios cristianas donde tenemos acceso a través de una hermana; saliendo a la calle apoyando a la marchas pro vidas, viendo la posibilidad de hablar a canales de tv a nivel local.', '', 0),
(58, 185, 15, 91, 'EL VIDEO ES DE PREVENCION PRIMARIA DONDE UTILIZAN METODOS  SENCILLOS PARA OBTENER GRANDES RESULTADOS', '', 2),
(59, 185, 15, 92, 'EL VIDEO ES DE PREVENCIÓN PRIMORDIAL,  DONDE A TRAVÉS DE LA MURGA SE MANIFIESTA EL PEDIDO DE JUSTICIA Y ACCIONAR POR PARTE DEL GOBIERNO DE TURNO COMO ASÍ TAMBIÉN LA MANIFESTACIÓN DEL INCUMPLIMIENTO DE LOS DERECHOS DEL NIÑO Y PERSONAS VICTIMAS DE ABUSO SEXUAL Y QUE SE NECESITA LA INTERVENCIÓN INMEDIATA Y EL FALLO DE LA JUSTICIA A FAVOR DE LA NIÑEZ', '', 2),
(60, 185, 15, 93, 'LA APLICACIÓN QUE PODRÍA HACER EN MI CIUDAD ES A TRAVÉS DE UN PROGRAMA DE RADIO, INTENTAR HABLAR  CON UN PASTOR CONOCIDO  QUE TRABAJA EN EL MUNICIPIO COMO CONSEJAL, PARA QUE A NIVEL JUSTICIA SE PUEDA EMPEZAR A IMPLEMENTAR UN PROYECTO EN LA CUIDAD, EN LAS ESCUELAS PARA DAR CHARLAS DE PREVENCIÓN, HACIENDO MARCHAS APOYANDO AL MOVIMIENTO PRO VIDA CONTRARRESTANDO LO QUE SE QUIERE IMPONER CON LAS MARCHAS PRO ABORTO ', '', 2),
(61, 142, 15, 91, 'El trabajo realizado en los talleres con niños y adolescentes (de 4 a 17 años) de manera grupal corresponden a las PREVENCIONES PRIMARIAS Y SECUNDARIAS. Cada preventor guía y coordina las actividades y según el nivel de avance que se lleve adelante con los participantes serán las herramientas que se utilizarán.  ', '', 2),
(62, 142, 15, 92, '   El material visto comprende al la PREVENCIÓN PRIMORDIAL, con la cual se logra comunicar a la sociedad la problemática del abuso infantil. En este caso el video muestra a la murga como un canal de expresión.  ', '', 2),
(63, 142, 15, 93, '   El ámbito propicio para dar a conocer el trabajo sería a través de expresiones artísticas, eso actuaría con gran empatía en los receptores. Luego, cada disciplina podrían comenzar a abordarse de manera grupal dentro de talleres.', '', 2),
(64, 0, 15, 91, 'prevencion primaria', '', 0),
(65, 0, 15, 92, 'prevencion primordial', '', 0),
(66, 0, 15, 93, 'atraves de la informacion del tema y llamar a consentisar que se debe hacer algo al respeto no podemos estar en silencio hacia tal situacion  ', '', 0),
(67, 203, 15, 91, 'Prevención primaria y segundaría!!! mientras nos divertimos aprendemos a vivir.', '', 2),
(68, 203, 15, 92, 'Prevención primordial, ', '', 2),
(69, 203, 15, 93, 'A través de medios de comunicación tv, radios, foros, murgas grupos de promoción humanos de los niños, niñas y pre juveniles.', '', 2),
(70, 0, 15, 91, 'esta es prevención primaria.', '', 0),
(71, 0, 15, 92, 'esta es prevención primordial.', '', 0),
(72, 0, 15, 93, 'la aplicaría por medio de marchas con carteles indicativos, remeras y folletería.', '', 0),
(73, 275, 15, 91, 'esta es prevención primaria.', '', 2),
(74, 275, 15, 92, 'prevención primordial.', '', 2),
(75, 275, 15, 93, 'la aplicaría por medio de marchas con cartelería, remeras y folletería.', '', 2),
(76, 276, 15, 91, 'acá podemos ver que esta es una prevención primaria y prevención secundaria.', '', 2),
(77, 276, 15, 92, 'esta es prevención primordial.', '', 2),
(78, 276, 15, 93, 'por medio de difusión radial, por medio de grafitis, títeres, obras de teatro etc. ', '', 2),
(79, 288, 76, 85, 'aaa', '', 2),
(80, 288, 76, 86, 'aaa', '', 0),
(81, 288, 76, 87, 'aaa', '', 0),
(82, 268, 76, 85, 'el video numero uno es para ir a enseñar a los niños  a prevenenir el abuso,enseñarle la importancia del cuepo ,que nadie debe tocar las partes intimas de uno, decir NO si alguien quiere tocar las partes intimas. es la prevencion primordial', '', 0),
(83, 268, 76, 86, 'prevencion secundaria', '', 0),
(84, 268, 76, 87, 'En mi zona  juntaria a los niños y hablarles de la importacia de su cuerpo ,que nadie puedetocar las partes intimas de uno, aprender a decir NO y contarle a alguna persona mayor,papa o mama o la profesora del colegio.', '', 0),
(85, 139, 76, 85, 'Prevención terciaria ', '', 0),
(86, 139, 76, 86, 'Prevención primordial', '', 0),
(87, 139, 76, 87, 'A través de campañas de concientizacion, por medio de spots publicitarios, blogs informativos por las redes sociales, corridas, y diferentes eventos a nivel nacional donde enseñen a los padres tips de cuidados preventivos y a los adultos a ser responsables de los mas pequeños.  ', '', 0),
(88, 212, 15, 91, 'prevencion primaria: donde se realiza un trabajo especial de prevencion antes de que ocurra el abuso. ej escuela, clubes. Es en estos lugares donde se se puede realizar tambien observaciones y detectar niños que estan viviendo alguna situacion de abuso y aplicar la prevencion terciaria.', '', 0),
(89, 212, 15, 92, 'prevencion primordial. actividades de alto impacto social.', '', 0),
(90, 212, 15, 93, 'En mi ciudad se podrian realizar dos o tres tipos de actividades para aplicar la prevencion primordial. por un lado el uso de la plaza, no murgas especificamente, sino a traves de juegos, titeres, cuentos que los invite a reflexionar sobre el abuso, otra de las formas es a traves de la radio. sin embargo concidero que la fm es buena para gente adulta, pero los niños estan siendo atrapados ppor el celular. por lo tanto usaria videos preventivos, dibujos animados, cuentos o canciones infantiles a traves de you tube y  redes sociales. ', '', 0),
(91, 239, 15, 91, 'Este video muestra el trabajo de los equipos de preventores, con niños de distintas  edades en actividades propias de talleres,  por lo que atino a suponer que se trataría de prevención primaria y/o secundaria, según la finalidad de las actividades aplicadas ya sea para prevenir y que el niño/a no sea abusado o para detectar manifestaciones tempranas de abuso y brindarle la intervención adecuada.', '', 0),
(92, 239, 15, 92, 'Este video caracteriza la prevención primordial, ya que impacta directamente en la comunidad llevando un claro mensaje de concientización sobre el abuso sexual infantil y los derechos del niño y del adolescente.', '', 0),
(93, 239, 15, 93, 'Apelaría a la sensibilización y concientización de las personas integrantes de mi comunidad, desde el barrio donde resido a la ciudad en general, por medio de spots publicitarios difundiendo la problemática de abuso sexual infantil en emisoras radiales,  en espacios públicos de concurrencia masiva como ferias de artesano y/o productores rurales, generando marchas o movilizaciones que evidencien la temática y desde donde se promueva fundamentalmente los derechos universales de los niños y adolescentes.', '', 0),
(94, 0, 15, 91, 'ESCOGI EL VIDEO 1:, SE TRATA DE UNA PREVENCION PRIMORDIAL, YA QUE SE COMUNICA , TRASMITE E INFORMA A TRAVES DE DISTINTOS RECURSOS SOBRE LOS DERECHOS DE LOS NIÑOS Y ADOLESCENTES.', '', 0),
(95, 0, 15, 92, 'AQUI ESTAN  LOS PREVENTORES QUE  DESARROLLAN ACTIVIDADES PARA RECLAMAR ANTE LA JUSTICIA QUE SE TOMEN MEDIDAS PARA DEFENDER A LOS NIÑOS Y ADOLESCENTES INOCENTES , QUE YA HAN SUFRIDO ALGUN TIPO DE ABUSO ', '', 0),
(96, 0, 15, 93, 'EN LA CIUDAD DONDE VIVO LA APLICARIA A TRAVES DE MEDIOS DE DIFUSION COMO LA RADIO FM, TV, Y FOROS EDUCATIVOS Y ONLINE..', '', 0),
(97, 186, 15, 91, 'Prevención primaria y secundaria', '', 0),
(98, 186, 15, 92, 'Es prevención Primordial', '', 0),
(99, 186, 15, 93, 'A través de los medios de comunicación: Radio, dando charlas informativas o también en la plaza principal hacer representaciones y murgas ', '', 0),
(100, 301, 15, 91, 'Considero que en éste vídeo se muestra la \"Prevención primaria y secundaria\". Con los talleres \"Mientras nos divertimos aprendemos a vivir\". ', '', 2),
(101, 301, 15, 92, 'En este vídeo se muestra la \"Prevención primordial\". ', '', 2),
(102, 301, 15, 93, 'Hace dos años que trabajamos con el Ministerio de niños de la Iglesia llevando a cabo una \"Horita Feliz\" en una plaza barrial. Mas de 50 niños participan de esta actividad. Considero que podríamos realizar actividades especiales sensibilizando a los padres con respecto a ASI y enseñando a los niños a decir \"NO\". Tenemos muy buena y frecuente relación con los papas (principalmente, mamás). Podríamos enseñarle a los niños que hay cosas que no son normales, enseñarles que es, verdaderamente, el abuso.  ', '', 2),
(103, 303, 15, 91, 'prevencion primaria y prevencion secundaria.Talleres de prevencion \"mIENTRAS NOS DIVERTIMOS APRENDEMOS A VIVIR\"', '', 2),
(104, 303, 15, 92, 'prevencion primordial difucion,sencibilizacion einformacion sobre los derechos del niño', '', 2),
(105, 303, 15, 93, 'elijo la estrategia de la murga como prevencion, me parece espectacular para transmitir una noticia de prevencion ,por medio del baile y el juegos donde participan hijos y padres, Es una buena metodologia para fijar los conocimientos para luego cambiar conductas.Asi ambos podran prevenir ubusos de cualquier tipo.                      ', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pow_users_tareas`
--

CREATE TABLE `pow_users_tareas` (
  `Id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `claseID` int(11) NOT NULL,
  `estado` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pow_users_tareas`
--

INSERT INTO `pow_users_tareas` (`Id`, `userID`, `claseID`, `estado`) VALUES
(6, 12, 70, 2),
(7, 18, 70, 2),
(8, 17, 70, 2),
(9, 0, 15, 0),
(10, 146, 15, 2),
(11, 0, 15, 0),
(12, 0, 15, 0),
(13, 144, 15, 2),
(14, 288, 15, 1),
(15, 214, 15, 0),
(16, 202, 15, 0),
(17, 241, 76, 0),
(18, 221, 15, 0),
(19, 163, 15, 2),
(20, 167, 15, 0),
(21, 0, 15, 0),
(22, 185, 15, 2),
(23, 142, 15, 2),
(24, 0, 15, 0),
(25, 203, 15, 2),
(26, 0, 15, 0),
(27, 275, 15, 2),
(28, 276, 15, 2),
(29, 288, 76, 1),
(30, 268, 76, 0),
(31, 139, 76, 0),
(32, 212, 15, 0),
(33, 239, 15, 0),
(34, 0, 15, 0),
(35, 186, 15, 0),
(36, 301, 15, 2),
(37, 303, 15, 2);

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `pow_cursos_clases`
--
ALTER TABLE `pow_cursos_clases`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT de la tabla `pow_cursos_clases_adjuntos`
--
ALTER TABLE `pow_cursos_clases_adjuntos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `pow_cursos_clases_preguntas`
--
ALTER TABLE `pow_cursos_clases_preguntas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de la tabla `pow_mensajes`
--
ALTER TABLE `pow_mensajes`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `pow_users`
--
ALTER TABLE `pow_users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT de la tabla `pow_users_pagos`
--
ALTER TABLE `pow_users_pagos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `pow_users_preventores`
--
ALTER TABLE `pow_users_preventores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT de la tabla `pow_users_respuestas`
--
ALTER TABLE `pow_users_respuestas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de la tabla `pow_users_tareas`
--
ALTER TABLE `pow_users_tareas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
