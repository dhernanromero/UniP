-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 22:09:36
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unip`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_preferencias`
--

DROP TABLE IF EXISTS `alumno_preferencias`;
CREATE TABLE `alumno_preferencias` (
  `IdAlumnoPreferencia` int(11) NOT NULL,
  `IdAlumno` int(11) NOT NULL,
  `IdPreferencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno_preferencias`
--

INSERT INTO `alumno_preferencias` (`IdAlumnoPreferencia`, `IdAlumno`, `IdPreferencia`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 6, 1),
(6, 7, 1),
(7, 8, 1),
(8, 9, 1),
(9, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_skills`
--

DROP TABLE IF EXISTS `alumno_skills`;
CREATE TABLE `alumno_skills` (
  `IdAlumnoSkills` int(11) NOT NULL,
  `IdAlumno` int(11) NOT NULL,
  `IdSkills` int(11) NOT NULL,
  `ProfesorValidador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentoalumno`
--

DROP TABLE IF EXISTS `departamentoalumno`;
CREATE TABLE `departamentoalumno` (
  `IdDepAlumno` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Cuil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE `empresa` (
  `IdEmpresa` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Url` varchar(30) NOT NULL,
  `Cuit` int(11) NOT NULL,
  `Resumen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`IdEmpresa`, `Nombre`, `Url`, `Cuit`, `Resumen`) VALUES
(1, 'Softtek', 'https://www.softtek.com/', 306815199, 'Softtek es una empresa de tecnología de la información con sede en México que opera en América del Norte, América Latina, Europa y Asia. Con sede en Monterrey, México, la empresa tiene 15.000 asociado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_persona`
--

DROP TABLE IF EXISTS `empresa_persona`;
CREATE TABLE `empresa_persona` (
  `IdEmpresaPersona` int(11) NOT NULL,
  `IdEmpresa` int(11) NOT NULL,
  `IdPersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadopostulacion`
--

DROP TABLE IF EXISTS `estadopostulacion`;
CREATE TABLE `estadopostulacion` (
  `IdEstado` int(11) NOT NULL,
  `Descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_civil`
--

DROP TABLE IF EXISTS `estado_civil`;
CREATE TABLE `estado_civil` (
  `IdEstadoCivil` int(11) NOT NULL,
  `Descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado_civil`
--

INSERT INTO `estado_civil` (`IdEstadoCivil`, `Descripcion`) VALUES
(1, 'Soltero/a'),
(2, 'Casado/a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

DROP TABLE IF EXISTS `localidad`;
CREATE TABLE `localidad` (
  `IdLocalidad` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `IdProvincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`IdLocalidad`, `Descripcion`, `IdProvincia`) VALUES
(1, 'Ezeiza', 1),
(2, 'Tristan Suarez', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

DROP TABLE IF EXISTS `materia`;
CREATE TABLE `materia` (
  `IdMateria` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `CodMateria` int(11) NOT NULL,
  `AñoCursada` int(11) NOT NULL,
  `Cuatrimestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_skills`
--

DROP TABLE IF EXISTS `materia_skills`;
CREATE TABLE `materia_skills` (
  `Id` int(11) NOT NULL,
  `Idmateria` int(11) NOT NULL,
  `IdSkills` int(11) NOT NULL,
  `ProfesorValidador` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

DROP TABLE IF EXISTS `oferta`;
CREATE TABLE `oferta` (
  `IdOferta` int(11) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `UbicacionOferta` varchar(50) NOT NULL,
  `DetallePuesto` varchar(200) NOT NULL,
  `FuncionesPuesto` varchar(200) NOT NULL,
  `IdTipoContrato` int(11) NOT NULL,
  `IdTipoJornada` int(11) NOT NULL,
  `IdReclutador` int(11) NOT NULL,
  `AcercadeEmpresa` varchar(500) NOT NULL,
  `UrlEmpresa` varchar(30) NOT NULL,
  `NombreEmpresa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`IdOferta`, `Titulo`, `UbicacionOferta`, `DetallePuesto`, `FuncionesPuesto`, `IdTipoContrato`, `IdTipoJornada`, `IdReclutador`, `AcercadeEmpresa`, `UrlEmpresa`, `NombreEmpresa`) VALUES
(1, 'Programador web', 'Belgrano', 'fdsafdsafdsafdsafdsa', 'fdsafdsafdsafdsafdsa', 1, 1, 12, 'fdsafdsafdsafdsafdsa', 'baufest.com', 'baufest'),
(2, 'Programador web', 'Belgrano', 'fdsafdsafdsafdsafdsa', 'fdsafdsafdsafdsafdsa', 1, 1, 12, 'fdsafdsafdsafdsafdsa', '1', 'Globant');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partido`
--

DROP TABLE IF EXISTS `partido`;
CREATE TABLE `partido` (
  `IdPartido` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `IdProvincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE `persona` (
  `IdPersona` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `DNI` int(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `FotoPerfil` char(20) DEFAULT NULL,
  `Nacionalidad` varchar(15) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `IdEstadoCivil` int(11) NOT NULL,
  `NombreCalle` varchar(800) NOT NULL,
  `NumeroCalle` int(8) NOT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `IdProvincia` int(11) NOT NULL,
  `IdLocalidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`IdPersona`, `Nombre`, `Apellido`, `DNI`, `Email`, `FechaNacimiento`, `FotoPerfil`, `Nacionalidad`, `Telefono`, `IdEstadoCivil`, `NombreCalle`, `NumeroCalle`, `Password`, `IdProvincia`, `IdLocalidad`) VALUES
(5, 'Diego', 'Romero', 2036605300, 'dromero@baufest.com', '1991-12-22', NULL, 'Argentino', 42814688, 1, 'i decepcion', 171, '12345', 1, 1),
(6, 'Diego', 'Romero', 36605300, 'dhernan.romero@gmail.com', '1991-12-22', NULL, 'Argentino', 1121776728, 1, 'i decepcion', 171, NULL, 1, 1),
(9, 'Anabel', 'Lizet', 40258385, 'anny20312@gmail.com', '1996-12-31', 'ana2.jpg', 'argentina', 1144717795, 1, 'las margaritas', 1115, NULL, 1, 1),
(10, 'facundoo', 'Sergio', 38370388, 'facu11ja@gmail.com', '1994-11-14', 'Perfil-facu.jpg', 'argentino', 1123123, 1, 'Carrizo', 250, NULL, 1, 1),
(12, 'Hernan', 'Romero', 36605300, 'hromero@globant.com', '1991-12-22', NULL, 'Argentino', 42814686, 1, 'i decepcion', 124, '123456', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulaciones`
--

DROP TABLE IF EXISTS `postulaciones`;
CREATE TABLE `postulaciones` (
  `IdPostulacion` int(11) NOT NULL,
  `IdAlumno` int(11) NOT NULL,
  `IdOferta` int(11) NOT NULL,
  `IdEstado` int(2) NOT NULL,
  `FechaPostulacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preferencias`
--

DROP TABLE IF EXISTS `preferencias`;
CREATE TABLE `preferencias` (
  `IdPreferencia` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preferencias`
--

INSERT INTO `preferencias` (`IdPreferencia`, `Nombre`, `Estado`) VALUES
(1, 'Programador', 1),
(2, 'Analista', 1),
(3, 'Tester', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

DROP TABLE IF EXISTS `provincia`;
CREATE TABLE `provincia` (
  `IdProvincia` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`IdProvincia`, `Nombre`) VALUES
(1, 'Buenos Aires');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `IdRol` int(11) NOT NULL,
  `Descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`IdRol`, `Descripcion`) VALUES
(1, 'Administrador'),
(2, 'DepartamentoAlumnos'),
(3, 'Alumno'),
(4, 'Reclutador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolespersona`
--

DROP TABLE IF EXISTS `rolespersona`;
CREATE TABLE `rolespersona` (
  `Id` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `IdTipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rolespersona`
--

INSERT INTO `rolespersona` (`Id`, `IdUsuario`, `IdTipoUsuario`) VALUES
(1, 1, 3),
(2, 2, 3),
(3, 3, 3),
(4, 4, 3),
(5, 5, 4),
(6, 6, 3),
(7, 7, 3),
(8, 8, 3),
(9, 9, 3),
(10, 10, 3),
(11, 11, 4),
(12, 12, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE `skills` (
  `IdSkills` int(11) NOT NULL,
  `Descripcion` varchar(25) NOT NULL,
  `Estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocontrato`
--

DROP TABLE IF EXISTS `tipocontrato`;
CREATE TABLE `tipocontrato` (
  `IdTipoContrato` int(11) NOT NULL,
  `DetalleContrato` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipocontrato`
--

INSERT INTO `tipocontrato` (`IdTipoContrato`, `DetalleContrato`) VALUES
(1, 'Por Tiempo Indeterminado'),
(2, 'A Plazo Fijo'),
(3, 'Trabajo Eventual'),
(4, 'Trabajo de Grupo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoente`
--

DROP TABLE IF EXISTS `tipoente`;
CREATE TABLE `tipoente` (
  `IdTipoEnte` int(11) NOT NULL,
  `Descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoente`
--

INSERT INTO `tipoente` (`IdTipoEnte`, `Descripcion`) VALUES
(1, 'Recursos Humanos'),
(2, 'Consultora IT'),
(3, 'Particular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipojornada`
--

DROP TABLE IF EXISTS `tipojornada`;
CREATE TABLE `tipojornada` (
  `IdTipoJornada` int(11) NOT NULL,
  `Detalle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipojornada`
--

INSERT INTO `tipojornada` (`IdTipoJornada`, `Detalle`) VALUES
(1, 'Jornada Completa'),
(2, 'Part Time'),
(3, 'Pasantia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno_preferencias`
--
ALTER TABLE `alumno_preferencias`
  ADD PRIMARY KEY (`IdAlumnoPreferencia`);

--
-- Indices de la tabla `alumno_skills`
--
ALTER TABLE `alumno_skills`
  ADD PRIMARY KEY (`IdAlumnoSkills`);

--
-- Indices de la tabla `departamentoalumno`
--
ALTER TABLE `departamentoalumno`
  ADD PRIMARY KEY (`IdDepAlumno`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`IdEmpresa`);

--
-- Indices de la tabla `estado_civil`
--
ALTER TABLE `estado_civil`
  ADD PRIMARY KEY (`IdEstadoCivil`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`IdLocalidad`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`IdMateria`);

--
-- Indices de la tabla `materia_skills`
--
ALTER TABLE `materia_skills`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`IdOferta`);

--
-- Indices de la tabla `partido`
--
ALTER TABLE `partido`
  ADD PRIMARY KEY (`IdPartido`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`IdPersona`);

--
-- Indices de la tabla `postulaciones`
--
ALTER TABLE `postulaciones`
  ADD PRIMARY KEY (`IdPostulacion`);

--
-- Indices de la tabla `preferencias`
--
ALTER TABLE `preferencias`
  ADD PRIMARY KEY (`IdPreferencia`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`IdProvincia`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`IdRol`);

--
-- Indices de la tabla `rolespersona`
--
ALTER TABLE `rolespersona`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`IdSkills`);

--
-- Indices de la tabla `tipocontrato`
--
ALTER TABLE `tipocontrato`
  ADD PRIMARY KEY (`IdTipoContrato`);

--
-- Indices de la tabla `tipoente`
--
ALTER TABLE `tipoente`
  ADD PRIMARY KEY (`IdTipoEnte`);

--
-- Indices de la tabla `tipojornada`
--
ALTER TABLE `tipojornada`
  ADD PRIMARY KEY (`IdTipoJornada`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno_preferencias`
--
ALTER TABLE `alumno_preferencias`
  MODIFY `IdAlumnoPreferencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `IdEmpresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `estado_civil`
--
ALTER TABLE `estado_civil`
  MODIFY `IdEstadoCivil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `IdOferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `IdPersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `rolespersona`
--
ALTER TABLE `rolespersona`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tipocontrato`
--
ALTER TABLE `tipocontrato`
  MODIFY `IdTipoContrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipoente`
--
ALTER TABLE `tipoente`
  MODIFY `IdTipoEnte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipojornada`
--
ALTER TABLE `tipojornada`
  MODIFY `IdTipoJornada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
