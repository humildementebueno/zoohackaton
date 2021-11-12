-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2021 a las 15:49:31
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sanjuan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `id` int(11) NOT NULL,
  `asignatura` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`id`, `asignatura`) VALUES
(1, 'Lenguaje '),
(2, 'Matematicas'),
(3, 'Comunicacion'),
(5, 'Valores Espirituales y Religion'),
(6, 'Actividades de la Vida Diaria'),
(7, 'Funciones Basicas de Aprendizaje'),
(8, 'Trabajo Cooperativo y Conocimiento Social'),
(9, 'Ciencias de la Vida'),
(10, 'Comunicacion y Lenguajes'),
(11, 'Ciencias Naturales'),
(12, 'Ciencias Sociales'),
(13, 'Educacion Fisica'),
(14, 'Educacion Plastica'),
(15, 'Educacion Musical'),
(16, 'Talleres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_prof` int(11) NOT NULL,
  `id_estu` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `info` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id`, `id_curso`, `id_prof`, `id_estu`, `fecha`, `info`) VALUES
(1, 1, 7, 1, '2021-07-19', 'asistio'),
(2, 1, 7, 2, '2021-07-19', 'falto'),
(3, 1, 7, 3, '2021-07-19', 'asistio'),
(4, 1, 7, 4, '2021-07-19', 'falto'),
(5, 1, 7, 5, '2021-07-19', 'asistio'),
(6, 1, 7, 6, '2021-07-19', 'falto'),
(7, 1, 7, 7, '2021-07-19', 'asistio'),
(8, 1, 7, 8, '2021-07-19', 'falto'),
(9, 2, 6, 1, '2021-07-19', 'asistio'),
(10, 1, 7, 1, '2021-10-15', 'asistio'),
(11, 1, 7, 2, '2021-10-15', 'asistio'),
(12, 1, 7, 3, '2021-10-15', 'falto'),
(13, 1, 7, 4, '2021-10-15', 'falto'),
(14, 1, 7, 5, '2021-10-15', 'asistio'),
(15, 1, 7, 6, '2021-10-15', 'asistio'),
(16, 1, 7, 7, '2021-10-15', 'falto'),
(17, 1, 7, 8, '2021-10-15', 'falto'),
(18, 1, 7, 1, '2021-10-16', 'asistio'),
(19, 1, 7, 2, '2021-10-16', 'asistio'),
(20, 1, 7, 3, '2021-10-16', 'asistio'),
(21, 1, 7, 4, '2021-10-16', 'asistio'),
(22, 1, 7, 5, '2021-10-16', 'asistio'),
(23, 1, 7, 6, '2021-10-16', 'asistio'),
(24, 1, 7, 7, '2021-10-16', 'asistio'),
(25, 1, 7, 8, '2021-10-16', 'asistio'),
(26, 1, 7, 1, '2021-10-17', 'asistio'),
(27, 1, 7, 2, '2021-10-17', 'asistio'),
(28, 1, 7, 3, '2021-10-17', NULL),
(29, 1, 7, 4, '2021-10-17', NULL),
(30, 1, 7, 5, '2021-10-17', NULL),
(31, 1, 7, 6, '2021-10-17', NULL),
(32, 1, 7, 7, '2021-10-17', NULL),
(33, 1, 7, 8, '2021-10-17', 'asistio'),
(34, 1, 7, 1, '2021-10-24', 'asistio'),
(35, 1, 7, 2, '2021-10-24', 'asistio'),
(36, 1, 7, 3, '2021-10-24', 'falto'),
(37, 1, 7, 4, '2021-10-24', NULL),
(38, 1, 7, 5, '2021-10-24', NULL),
(39, 1, 7, 6, '2021-10-24', NULL),
(40, 1, 7, 7, '2021-10-24', NULL),
(41, 1, 7, 8, '2021-10-24', NULL),
(42, 8, 2, 1, '2021-10-24', NULL),
(43, 8, 2, 2, '2021-10-24', NULL),
(44, 8, 2, 20, '2021-10-24', NULL),
(45, 8, 2, 3, '2021-10-24', NULL),
(46, 8, 2, 4, '2021-10-24', 'licencia'),
(47, 8, 2, 6, '2021-10-24', 'licencia'),
(48, 1, 7, 1, '2021-10-26', 'asistio'),
(49, 1, 7, 2, '2021-10-26', NULL),
(50, 1, 7, 3, '2021-10-26', NULL),
(51, 1, 7, 4, '2021-10-26', NULL),
(52, 1, 7, 5, '2021-10-26', NULL),
(53, 1, 7, 6, '2021-10-26', NULL),
(54, 1, 7, 7, '2021-10-26', NULL),
(55, 1, 7, 8, '2021-10-26', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_estu` int(11) NOT NULL,
  `id_materia` varchar(150) NOT NULL,
  `primero` varchar(11) NOT NULL,
  `segundo` varchar(11) NOT NULL,
  `tercero` varchar(11) NOT NULL,
  `obs` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`id`, `id_curso`, `id_estu`, `id_materia`, `primero`, `segundo`, `tercero`, `obs`) VALUES
(1, 1, 1, 'Comunicacion', 'AOCMA', 'NAO', 'NAO', 'NAO'),
(2, 1, 1, 'Lenguaje', 'AOCA', 'AOCA', 'AOCA', 'AOCA'),
(3, 1, 1, 'Matematica', 'AOSA', 'AOSA', 'AOSA', 'AOSA'),
(4, 2, 2, 'Comunicacion', '1', '2', '3', '4'),
(5, 2, 2, 'Lenguaje', '5', '6', '7', '89'),
(6, 2, 2, 'Matematica', '9', '10', '11', '12'),
(7, 1, 2, 'Comunicacion', '13', '2', '3', '4'),
(8, 1, 2, 'Lenguaje', '5', '6', '7', '8'),
(9, 1, 2, 'Matematica', '9', '10', '11', '12'),
(10, 5, 1, 'Lenguaje ', 'NAO', '', '', ''),
(11, 5, 1, 'Matematicas', 'NAO', '', '', ''),
(12, 5, 1, 'Comunicacion', 'AOCMA', '', '', ''),
(13, 5, 1, 'Ciencias Sociales', 'NAO', '', '', ''),
(14, 5, 1, 'Educacion Fisica', 'NAO', '', '', ''),
(15, 5, 1, 'Educacion Plastica', 'NAO', '', '', ''),
(16, 5, 20, 'Lenguaje ', 'NAO', '', '', ''),
(17, 5, 6, 'Lenguaje ', 'NAO', '', '', ''),
(18, 5, 6, 'Matematicas', 'NAO', '', '', ''),
(19, 5, 6, 'Comunicacion', 'AOCMA', '', '', ''),
(20, 5, 6, 'Ciencias Sociales', 'AOCA', '', '', ''),
(21, 5, 6, 'Educacion Fisica', 'NAO', '', '', ''),
(22, 5, 6, 'Educacion Plastica', 'NAO', '', '', ''),
(23, 5, 4, 'Lenguaje ', 'NAO', 'AOCA', '', ''),
(24, 5, 20, 'Matematicas', 'AOCMA', '', '', ''),
(25, 5, 20, 'Comunicacion', 'AOCA', '', '', ''),
(26, 5, 4, 'Matematicas', 'NAO', 'NAO', '', ''),
(27, 5, 4, 'Comunicacion', 'NAO', 'NAO', '', ''),
(28, 5, 4, 'Ciencias Sociales', 'AOCMA', 'AOCMA', '', ''),
(29, 5, 4, 'Educacion Fisica', 'AOCMA', 'AOCA', '', ''),
(30, 5, 4, 'Educacion Plastica', 'NAO', 'NAO', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `cod` varchar(50) NOT NULL,
  `grado` varchar(80) NOT NULL,
  `turno` varchar(50) NOT NULL,
  `area` varchar(100) NOT NULL,
  `nivel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `cod`, `grado`, `turno`, `area`, `nivel`) VALUES
(1, 'C001', 'Primero', 'Tarde', '', ''),
(2, 'C002', 'Segunfo', 'Tarde', '', ''),
(4, 'C003', 'Primero A y B', 'Tarde', 'Discapacidad Intelectual', 'Independencia Personal No Escolarizada'),
(5, 'C005', '3ro', 'Tarde', 'Discapacidad Intelectual', 'Independencia Personal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_es`
--

CREATE TABLE `curso_es` (
  `id` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `cod_curso` varchar(20) NOT NULL,
  `id_estu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso_es`
--

INSERT INTO `curso_es` (`id`, `id_curso`, `cod_curso`, `id_estu`) VALUES
(1, 1, 'C001', 1),
(2, 1, 'C001', 2),
(3, 1, 'C001', 3),
(4, 1, 'C001', 4),
(5, 1, 'C001', 5),
(6, 1, 'C001', 6),
(7, 1, 'C001', 7),
(8, 1, 'C001', 8),
(11, 3, '3', 13),
(13, 4, '4', 4),
(14, 5, '5', 1),
(15, 5, '5', 2),
(16, 5, '5', 20),
(17, 5, '5', 3),
(18, 5, '5', 4),
(19, 5, '5', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_prof`
--

CREATE TABLE `curso_prof` (
  `id` int(11) NOT NULL,
  `id_curso` varchar(11) NOT NULL,
  `cod_curso` varchar(11) NOT NULL,
  `id_prof` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso_prof`
--

INSERT INTO `curso_prof` (`id`, `id_curso`, `cod_curso`, `id_prof`) VALUES
(1, '1', 'C001', '7'),
(2, '2', 'C002', '6'),
(7, '4', 'C003', '19'),
(8, '5', 'C005', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `cod` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `ap_paterno` varchar(15) NOT NULL,
  `ap_materno` varchar(15) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `c_identidad` varchar(15) NOT NULL,
  `c_discapacidad` varchar(15) NOT NULL,
  `tipo_discapacidad` varchar(30) NOT NULL,
  `grado` varchar(10) NOT NULL,
  `rude_es` varchar(30) NOT NULL,
  `lugar_nac` varchar(10) NOT NULL,
  `fecha_nac` date NOT NULL,
  `edad` int(10) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `nom_padre` varchar(15) NOT NULL,
  `ocup_padre` varchar(10) NOT NULL,
  `nom_madre` varchar(15) NOT NULL,
  `ocup_madre` varchar(10) NOT NULL,
  `unid_procedencia` varchar(10) NOT NULL,
  `grado_ant` varchar(10) NOT NULL,
  `domicilio` varchar(15) NOT NULL,
  `celular` int(10) NOT NULL,
  `obs` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `cod`, `fecha`, `ap_paterno`, `ap_materno`, `nombre`, `c_identidad`, `c_discapacidad`, `tipo_discapacidad`, `grado`, `rude_es`, `lugar_nac`, `fecha_nac`, `edad`, `sexo`, `nom_padre`, `ocup_padre`, `nom_madre`, `ocup_madre`, `unid_procedencia`, `grado_ant`, `domicilio`, `celular`, `obs`) VALUES
(1, 'E001', '2021-06-10', 'ALEJO', 'CHIJO', 'MISHEL ORIANA', '8654111', '3253111', 'Sin Defini', 'Segundo', 'R10000000001', 'Potosi', '2000-06-01', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045781, 'Sin Observacion'),
(2, 'E002', '2021-06-11', 'ANZE', 'PUMA', 'NAYELI PAOLA', '8654112', '3253112', 'Sin Defini', 'Segundo', 'R10000000002', 'Potosi', '2000-06-02', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045782, 'Sin Observacion'),
(3, 'E003', '2021-06-12', 'ARIAS', 'MAMANI', 'ALISON', '8654113', '3253113', 'Sin Defini', 'Segundo', 'R10000000003', 'Potosi', '2000-06-03', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045783, 'Sin Observacion'),
(4, 'E004', '2021-06-13', 'BARRIENTOS', 'ALEJO', 'DIANARA TERESA', '8654114', '3253114', 'Sin Defini', 'Segundo', 'R10000000004', 'Potosi', '2000-06-04', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045784, 'Sin Observacion'),
(5, 'E005', '2021-06-14', 'BASCOPE', 'ROLLANO', 'CAMILA VALENTIN', '8654115', '3253115', 'Sin Defini', 'Segundo', 'R10000000005', 'Potosi', '2000-06-05', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045785, 'Sin Observacion'),
(6, 'E006', '2021-06-15', 'CABRERA', 'VEDIA', 'EVELIN', '8654116', '3253116', 'Sin Defini', 'Segundo', 'R10000000006', 'Potosi', '2000-06-06', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045786, 'Sin Observacion'),
(7, 'E007', '2021-06-16', 'CAMPOS', 'CARDONA', '  MAYRA MICHEL', '8654117', '3253117', 'Sin Defini', 'Segundo', 'R10000000007', 'Potosi', '2000-06-07', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045787, 'Sin Observacion'),
(8, 'E008', '2021-06-17', 'CANQUELLA', 'PEREIRA', 'ALINA ABIGAIL', '8654118', '3253118', 'Sin Defini', 'Segundo', 'R10000000008', 'Potosi', '2000-06-08', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045788, 'Sin Observacion'),
(9, 'E009', '2021-06-18', 'CHACON', 'FLORES', 'PAOLA ANDREA', '8654119', '3253119', 'Sin Defini', 'Segundo', 'R10000000009', 'Potosi', '2000-06-09', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045789, 'Sin Observacion'),
(10, 'E010', '2021-06-19', 'CHUCAMANI', 'RIVERO', 'MICAELA BELEN', '8654120', '3253120', 'Sin Defini', 'Segundo', 'R10000000010', 'Potosi', '2000-06-10', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045790, 'Sin Observacion'),
(11, 'E011', '2021-06-20', 'CHUMACERO', 'VIDAURRE', 'MADALIS', '8654121', '3253121', 'Sin Defini', 'Segundo', 'R10000000011', 'Potosi', '2000-06-11', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045791, 'Sin Observacion'),
(12, 'E012', '2021-06-21', 'CUBA', 'SUBIETA', 'MELANI HEIDI', '8654122', '3253122', 'Sin Defini', 'Segundo', 'R10000000012', 'Potosi', '2000-06-12', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045792, 'Sin Observacion'),
(13, 'E013', '2021-06-22', 'FERNANDEZ', 'RODRIGUEZ', 'DAFNE CONCEPCIO', '8654123', '3253123', 'Sin Defini', 'Segundo', 'R10000000013', 'Potosi', '2000-06-13', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045793, 'Sin Observacion'),
(14, 'E014', '2021-06-23', 'FLORES', 'HIDALGO', 'TANIA ALEJANDRA', '8654124', '3253124', 'Sin Defini', 'Segundo', 'R10000000014', 'Potosi', '2000-06-14', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045794, 'Sin Observacion'),
(15, 'E015', '2021-06-24', 'FUERTEZ', 'ZURITA', 'EMILY NOELIA', '8654125', '3253125', 'Sin Defini', 'Segundo', 'R10000000015', 'Potosi', '2000-06-15', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045795, 'Sin Observacion'),
(16, 'E016', '2021-06-25', 'GARCIA', 'BAUTISTA', 'MALORI ABIGAIL', '8654126', '3253126', 'Sin Defini', 'Segundo', 'R10000000016', 'Potosi', '2000-06-16', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045796, 'Sin Observacion'),
(17, 'E017', '2021-06-26', 'GONZALES', 'CALLAHUANCA', 'PAOLA ALENIS', '8654127', '3253127', 'Sin Defini', 'Segundo', 'R10000000017', 'Potosi', '2000-06-17', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045797, 'Sin Observacion'),
(18, 'E018', '2021-06-27', 'MAMANI', 'ARISMENDI', 'CECILIA ANGELA', '8654128', '3253128', 'Sin Defini', 'Segundo', 'R10000000018', 'Potosi', '2000-06-18', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045798, 'Sin Observacion'),
(19, 'E019', '2021-06-28', 'MAMANI', 'ESTRADA', 'DULCE NICOL', '8654129', '3253129', 'Sin Defini', 'Segundo', 'R10000000019', 'Potosi', '2000-06-19', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045799, 'Sin Observacion'),
(20, 'E020', '2021-06-29', 'MENDEZ', 'GUTIERREZ', 'LLUVIA AVRIL', '8654130', '3253130', 'Sin Defini', 'Segundo', 'R10000000020', 'Potosi', '2000-06-20', 11, 'Femenino', 'Nom Padre', 'Ocu Padre', 'Nom Madre', 'Ocu Madre', 'Unidad', 'Grado A', 'Calle Falsa', 70045800, 'Sin Observacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `id_curso` varchar(30) NOT NULL,
  `materia` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `id_curso`, `materia`) VALUES
(1, '1', 'Comunicacion'),
(2, '1', 'Lenguaje'),
(3, '1', 'Matematica'),
(6, '5', 'Lenguaje '),
(7, '5', 'Matematicas'),
(8, '5', 'Comunicacion'),
(9, '5', 'Ciencias Sociales'),
(10, '5', 'Educacion Fisica'),
(11, '5', 'Educacion Plastica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id` int(11) NOT NULL,
  `cod` varchar(9) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `ap_paterno` varchar(100) NOT NULL,
  `ap_materno` varchar(100) NOT NULL,
  `lugar` varchar(400) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `ci` int(11) NOT NULL,
  `domicilio` varchar(150) NOT NULL,
  `celular` int(11) NOT NULL,
  `normal` varchar(200) NOT NULL,
  `a_egreso` int(11) NOT NULL,
  `especialidad` varchar(400) NOT NULL,
  `serv_gen` int(11) NOT NULL,
  `ser_fe` int(11) NOT NULL,
  `rda` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `categoria` varchar(80) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `area` varchar(100) NOT NULL,
  `designacion` varchar(250) NOT NULL,
  `otros` text NOT NULL,
  `edad` varchar(50) NOT NULL,
  `ext` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id`, `cod`, `nombre`, `ap_paterno`, `ap_materno`, `lugar`, `estado`, `ci`, `domicilio`, `celular`, `normal`, `a_egreso`, `especialidad`, `serv_gen`, `ser_fe`, `rda`, `item`, `categoria`, `correo`, `area`, `designacion`, `otros`, `edad`, `ext`) VALUES
(1, 'P001', 'Ivon', 'Teran', 'Chungara', '', '', 4584451, 'Calle Uno', 60548412, '', 0, '', 0, 0, 0, 0, '', '', 'Matematicas', '', '', '', ''),
(2, 'P002', 'Elizabeth', 'Carvajal', 'Delgado', '', '', 4584452, 'Calle Dos', 60548413, '', 0, '', 0, 0, 0, 0, '', '', 'Ciencias', '', '', '', ''),
(3, 'P003', 'Ross Mary', 'Agreda', 'Tellez', '', '', 4584453, 'Calle Uno', 60548414, '', 0, '', 0, 0, 0, 0, '', '', 'Lenguaje', '', '', '', ''),
(4, 'P004', 'Salome', 'Miranda', ' Pereira', '', '', 4584454, 'Calle Dos', 60548415, '', 0, '', 0, 0, 0, 0, '', '', 'Auidologia', '', '', '', ''),
(5, 'P005', 'Veronica', 'Gutierrez', ' Cortes ', '', '', 4584455, 'Calle Uno', 60548416, '', 0, '', 0, 0, 0, 0, '', '', 'Talleres', '', '', '', ''),
(6, 'P006', 'Tania', 'Huaranca', 'Carvajal', '', '', 4584456, 'Calle Dos', 60548417, '', 0, '', 0, 0, 0, 0, '', '', 'Educacion Fisica', '', '', '', ''),
(7, 'P007', 'Silvia', 'Fernandez', 'Coro', '', '', 4584457, 'Calle Uno', 60548418, '', 0, '', 0, 0, 0, 0, '', '', 'Fisica', '', '', '', ''),
(8, 'P008', 'Milena', 'Iglesias', 'Huallpa', '', '', 4584458, 'Calle Dos', 60548419, '', 0, '', 0, 0, 0, 0, '', '', 'Quimica', '', '', '', ''),
(9, 'P009', 'Martha', 'Castro', 'Canedo', '', '', 4584459, 'Calle Uno', 60548420, '', 0, '', 0, 0, 0, 0, '', '', 'Historia', '', '', '', ''),
(10, 'P010', 'Marisol', 'Quiroga', 'Estrada', '', '', 4584460, 'Calle Dos', 60548421, '', 0, '', 0, 0, 0, 0, '', '', 'Matematicas', '', '', '', ''),
(11, 'P011', 'Marina', 'Paco', 'Llanos', '', '', 4584461, 'Calle Uno', 60548422, '', 0, '', 0, 0, 0, 0, '', '', 'Ciencias', '', '', '', ''),
(12, 'P012', 'Marilu', 'Coro', ' Vargas', '', '', 4584462, 'Calle Dos', 60548423, '', 0, '', 0, 0, 0, 0, '', '', 'Lenguaje', '', '', '', ''),
(13, 'P013', 'Marcia', 'Huallpa', 'Huaranca', '', '', 4584463, 'Calle Uno', 60548424, '', 0, '', 0, 0, 0, 0, '', '', 'Auidologia', '', '', '', ''),
(14, 'P014', 'Juana', 'Canedo', 'Fernandez', '', '', 4584464, 'Calle Dos', 60548425, '', 0, '', 0, 0, 0, 0, '', '', 'Talleres', '', '', '', ''),
(15, 'P015', 'Irma', 'Estrada', 'Iglesias', '', '', 4584465, 'Calle Uno', 60548426, '', 0, '', 0, 0, 0, 0, '', '', 'Educacion Fisica', '', '', '', ''),
(16, 'P016', 'Felisa', 'Llanos', 'Castro', '', '', 4584466, 'Calle Dos', 60548427, '', 0, '', 0, 0, 0, 0, '', '', 'Fisica', '', '', '', ''),
(17, 'P017', 'Elena', 'Caballero', 'Quiroga', '', '', 4584467, 'Calle Uno', 60548428, '', 0, '', 0, 0, 0, 0, '', '', 'Quimica', '', '', '', ''),
(18, 'P018', 'Diva', 'Miranda', 'Paco', '', '', 4584468, 'Calle Dos', 60548429, '', 0, '', 0, 0, 0, 0, '', '', 'Historia', '', '', '', ''),
(19, 'P019', 'Freddy', 'Chungara', 'Huallpa', '', '', 4584469, 'Calle Uno', 60548430, '', 0, '', 0, 0, 0, 0, '', '', 'Matematicas', '', '', '', ''),
(20, 'P020', 'Saul', 'Delgado', 'Canedo', '', '', 4584470, 'Calle Dos', 60548431, '', 0, '', 0, 0, 0, 0, '', '', 'Ciencias', '', '', '', ''),
(21, 'P021', 'Raul', 'Lizarazu', 'Estrada', '', '', 4584471, 'Calle Uno', 60548432, '', 0, '', 0, 0, 0, 0, '', '', 'Lenguaje', '', '', '', ''),
(22, 'P022', 'Jaime', 'Heredia', 'Llanos', '', '', 4584472, 'Calle Dos', 60548433, '', 0, '', 0, 0, 0, 0, '', '', 'Auidologia', '', '', '', ''),
(23, 'P023', 'Martha', 'Navarro', 'Caballero', '', '', 4584473, 'Calle Uno', 60548434, '', 0, '', 0, 0, 0, 0, '', '', 'Talleres', '', '', '', ''),
(24, 'P024', 'Rosaura', 'Rivera', 'Miranda', '', '', 4584474, 'Calle Dos', 60548435, '', 0, '', 0, 0, 0, 0, '', '', 'Educacion Fisica', '', '', '', ''),
(25, 'P025', 'Sonia', 'Limachi', 'Rivera', '', '', 4584475, 'Calle Uno', 60548436, '', 0, '', 0, 0, 0, 0, '', '', 'Fisica', '', '', '', ''),
(26, 'P026', 'Virginia', 'Puma', 'Heredia', '', '', 4584476, 'Calle Dos', 60548437, '', 0, '', 0, 0, 0, 0, '', '', 'Quimica', '', '', '', ''),
(27, 'P027', '11', '12', '13', '14', '15', 16, '17', 18, '19', 20, '21', 22, 23, 24, 25, '26', '27', '28', '29', '30', '31', '32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ci` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nac` date DEFAULT NULL,
  `direccion` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cel` int(11) NOT NULL,
  `foto` blob DEFAULT NULL,
  `tipo` int(10) NOT NULL,
  `activo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `ci`, `sexo`, `fecha_nac`, `direccion`, `cel`, `foto`, `tipo`, `activo`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$l8A3YgBiHHUlx2vvPOpIAOheZ43jB7FI9J3wcyBJNAfFGAgOCEUb.', 'tZSAByUMhSac6hUYKuNbtVhQ0d3P2VMWNMhuYUdyM8c4PLzDjZjJHVgezPyh', '2021-02-10 05:55:47', '2021-10-26 10:00:28', '7353881', 'Masculino', '1995-02-02', 'av. Las Banderas', 61911078, NULL, 1, 1),
(15, 'asdasd', 'eas@gmail.com', '$2y$10$HLwHG7Ia6/Qk7RmdWmxo1.GGGOVY6/ImA4CZTeuEnZMpCNifGau.u', NULL, '2021-10-15 10:47:09', '2021-10-15 10:47:09', '854648', 'Masculino', '2021-10-08', 'aasdsd', 9872454, NULL, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `curso_es`
--
ALTER TABLE `curso_es`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `curso_prof`
--
ALTER TABLE `curso_prof`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `curso_es`
--
ALTER TABLE `curso_es`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `curso_prof`
--
ALTER TABLE `curso_prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
