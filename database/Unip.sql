-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2021 a las 14:47:39
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
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE `alumno` (
  `IdAlumno` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `nacionalidad` varchar(12) NOT NULL,
  `ingreso` int(4) NOT NULL,
  `telefono` int(11) NOT NULL,
  `IdEstadoCivil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_ofertas`
--

DROP TABLE IF EXISTS `alumno_ofertas`;
CREATE TABLE `alumno_ofertas` (
  `IdAlumnoOferta` int(11) NOT NULL,
  `IdAlumno` int(11) NOT NULL,
  `IdOferta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Estructura de tabla para la tabla `estado_civil`
--

DROP TABLE IF EXISTS `estado_civil`;
CREATE TABLE `estado_civil` (
  `IdEstadoCivil` int(11) NOT NULL,
  `Descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

DROP TABLE IF EXISTS `localidad`;
CREATE TABLE `localidad` (
  `IdLocalidad` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `IdPartido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

DROP TABLE IF EXISTS `materia`;
CREATE TABLE `materia` (
  `IdMateria` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `CodMateria` int(11) DEFAULT NULL,
  `AñoCursada` int(11) NOT NULL,
  `Cuatrimestre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

DROP TABLE IF EXISTS `oferta`;
CREATE TABLE `oferta` (
  `IdOferta` int(11) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `IdEmpresa` int(11) NOT NULL,
  `UbicacoionOferta` varchar(50) NOT NULL,
  `DetallePuesto` varchar(200) NOT NULL,
  `FuncionesPuesto` varchar(200) NOT NULL,
  `IdTipoContrato` int(11) NOT NULL,
  `IdTipoJornada` int(11) NOT NULL,
  `IdReclutador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Estructura de tabla para la tabla `preferencias`
--

DROP TABLE IF EXISTS `preferencias`;
CREATE TABLE `preferencias` (
  `IdPreferencia` int(11) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

DROP TABLE IF EXISTS `profesor`;
CREATE TABLE `profesor` (
  `IdProfesor` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Cuil` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `IdMateria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

DROP TABLE IF EXISTS `provincia`;
CREATE TABLE `provincia` (
  `IdProvincia` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclutador`
--

DROP TABLE IF EXISTS `reclutador`;
CREATE TABLE `reclutador` (
  `IdReclutador` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Estado` tinyint(1) NOT NULL,
  `UrlReclutador` varchar(50) NOT NULL,
  `Cuiit` int(11) NOT NULL,
  `ResumenEmpresa` varchar(250) NOT NULL,
  `IdTipoEnte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoente`
--

DROP TABLE IF EXISTS `tipoente`;
CREATE TABLE `tipoente` (
  `IdTipoEnte` int(11) NOT NULL,
  `Descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipojornada`
--

DROP TABLE IF EXISTS `tipojornada`;
CREATE TABLE `tipojornada` (
  `IdTipoJornada` int(11) NOT NULL,
  `Detalle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipousuario`
--

DROP TABLE IF EXISTS `tipousuario`;
CREATE TABLE `tipousuario` (
  `IdTipoUsuario` int(11) NOT NULL,
  `Descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `IdUsuario` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `DNI` int(11) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `FotoPerfil` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_tipousuario`
--

DROP TABLE IF EXISTS `usuario_tipousuario`;
CREATE TABLE `usuario_tipousuario` (
  `Id` int(11) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `IdTipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`IdAlumno`);

--
-- Indices de la tabla `alumno_ofertas`
--
ALTER TABLE `alumno_ofertas`
  ADD PRIMARY KEY (`IdAlumnoOferta`);

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
-- Indices de la tabla `preferencias`
--
ALTER TABLE `preferencias`
  ADD PRIMARY KEY (`IdPreferencia`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`IdProfesor`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`IdProvincia`);

--
-- Indices de la tabla `reclutador`
--
ALTER TABLE `reclutador`
  ADD PRIMARY KEY (`IdReclutador`);

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
-- Indices de la tabla `tipousuario`
--
ALTER TABLE `tipousuario`
  ADD PRIMARY KEY (`IdTipoUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- Indices de la tabla `usuario_tipousuario`
--
ALTER TABLE `usuario_tipousuario`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
