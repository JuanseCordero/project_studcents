-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2023 a las 02:35:48
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
-- Base de datos: `studcents`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `id_estudiante` int(15) NOT NULL,
  `estado` varchar(5) NOT NULL,
  `fk_materia` int(15) NOT NULL,
  `fecha` date NOT NULL,
  `usuario_registra` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asistencia`
--

INSERT INTO `asistencia` (`id_asistencia`, `id_estudiante`, `estado`, `fk_materia`, `fecha`, `usuario_registra`) VALUES
(29, 1013459674, 'no', 1, '2023-10-11', 1238),
(30, 1013459467, 'si', 2, '2023-10-11', 1238);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dia`
--

CREATE TABLE `dia` (
  `id_dia` int(15) NOT NULL,
  `nombre_dia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dia`
--

INSERT INTO `dia` (`id_dia`, `nombre_dia`) VALUES
(1, 'lunes'),
(2, 'martes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(15) NOT NULL,
  `nom_num` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `nom_num`) VALUES
(1, 'docente'),
(101, '0101'),
(102, '0102'),
(201, '0201'),
(202, '0202'),
(301, '0301'),
(302, '0302'),
(401, '0401'),
(402, '0402'),
(501, '0501'),
(502, '0502'),
(601, '0601'),
(602, '0602'),
(701, '0701'),
(702, '0702'),
(801, '0801'),
(802, '0802'),
(901, '0901'),
(902, '0902'),
(1001, '01001'),
(1002, '01002'),
(1101, '01101');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora`
--

CREATE TABLE `hora` (
  `id_hora` int(15) NOT NULL,
  `numero_hora` int(2) NOT NULL,
  `fk_id_materia` int(15) NOT NULL,
  `fk_id_dia` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(15) NOT NULL,
  `nombre_materia` varchar(50) NOT NULL,
  `fk_id_dia` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre_materia`, `fk_id_dia`) VALUES
(1, 'Matemáticas ', 1),
(2, 'ciencias', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(15) NOT NULL,
  `nom_rol` varchar(30) NOT NULL,
  `des` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nom_rol`, `des`) VALUES
(1, 'estudiante', 'estudiantes'),
(2, 'docente', 'docentes'),
(3, 'administrador', 'admin'),
(4, 'acudiente', 'acudientes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `doc` int(15) NOT NULL,
  `tipo_doc` varchar(20) NOT NULL,
  `nom1` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `nom2` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ape1` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `ape2` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `tel` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `id_rol_fk` int(15) NOT NULL,
  `nac` date NOT NULL,
  `edad` int(3) NOT NULL,
  `fk_grupo` int(15) NOT NULL,
  `clave` varchar(101) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`doc`, `tipo_doc`, `nom1`, `nom2`, `ape1`, `ape2`, `correo`, `tel`, `id_rol_fk`, `nac`, `edad`, `fk_grupo`, `clave`) VALUES
(1022, 'CC', 'Juan', 'Sebastian', 'Cordero', 'Quintero', 'jjj@gmail.com', '888', 1, '2023-10-18', 12, 1101, 'c4ca4238a0b923820dcc509a6f75849b'),
(1233, 'TI', 'Juan', 'Sebastian', 'Cordero', 'Quintero', 'jjjj@gmail.com', '888', 1, '2023-10-27', 12, 902, 'c4ca4238a0b923820dcc509a6f75849b'),
(1238, 'TI', 'Administrador ', 'Admin', 'Admin', 'Admin', 'Admin@gmail.com', '310890283', 3, '2023-08-17', 112, 1, '202cb962ac59075b964b07152d234b70'),
(1013459467, 'TI', 'Juan', 'S', 'Cardona', 'Q', '999@gmail.com', '9999', 3, '2023-10-17', 18, 1101, '2a38a4a9316c49e5a833517c45d31070'),
(1013459674, 'TI', 'Johan', 'Stiven', 'Echeverry', 'Ossa', 'stiven@gmail.com', '3013426148', 1, '2006-11-18', 16, 1101, '6d4203839f7c1b512de95da9587ad218');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_materia`
--

CREATE TABLE `usuario_materia` (
  `fk_id_u` int(15) NOT NULL,
  `fk_materia` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `asistencia_usuario` (`id_estudiante`),
  ADD KEY `materia_asistencia` (`fk_materia`);

--
-- Indices de la tabla `dia`
--
ALTER TABLE `dia`
  ADD PRIMARY KEY (`id_dia`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `hora`
--
ALTER TABLE `hora`
  ADD PRIMARY KEY (`id_hora`),
  ADD KEY `dia_hora` (`fk_id_dia`),
  ADD KEY `materia_dia` (`fk_id_materia`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`),
  ADD KEY `dia_materia` (`fk_id_dia`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`doc`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `user_rol` (`id_rol_fk`),
  ADD KEY `user_grupo` (`fk_grupo`);

--
-- Indices de la tabla `usuario_materia`
--
ALTER TABLE `usuario_materia`
  ADD KEY `user_materia1` (`fk_id_u`),
  ADD KEY `user_materia2` (`fk_materia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_usuario` FOREIGN KEY (`id_estudiante`) REFERENCES `user` (`doc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materia_asistencia` FOREIGN KEY (`fk_materia`) REFERENCES `materia` (`id_materia`);

--
-- Filtros para la tabla `hora`
--
ALTER TABLE `hora`
  ADD CONSTRAINT `dia_hora` FOREIGN KEY (`fk_id_dia`) REFERENCES `dia` (`id_dia`),
  ADD CONSTRAINT `materia_dia` FOREIGN KEY (`fk_id_materia`) REFERENCES `materia` (`id_materia`);

--
-- Filtros para la tabla `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `dia_materia` FOREIGN KEY (`fk_id_dia`) REFERENCES `dia` (`id_dia`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_grupo` FOREIGN KEY (`fk_grupo`) REFERENCES `grupo` (`id_grupo`),
  ADD CONSTRAINT `user_rol` FOREIGN KEY (`id_rol_fk`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `usuario_materia`
--
ALTER TABLE `usuario_materia`
  ADD CONSTRAINT `user_materia1` FOREIGN KEY (`fk_id_u`) REFERENCES `user` (`doc`),
  ADD CONSTRAINT `user_materia2` FOREIGN KEY (`fk_materia`) REFERENCES `materia` (`id_materia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
