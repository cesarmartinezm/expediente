-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2018 a las 06:17:47
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u839029504_sime`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aheredo_familares`
--

CREATE TABLE `aheredo_familares` (
  `idaheredo_familiares` int(11) NOT NULL,
  `diabetes` varchar(10) DEFAULT NULL,
  `exfumador` varchar(10) DEFAULT NULL,
  `hipertension` varchar(15) DEFAULT NULL,
  `exalcoholico` varchar(15) DEFAULT NULL,
  `cancer` varchar(10) DEFAULT NULL,
  `exadicto` varchar(10) DEFAULT NULL,
  `oenfermedades` varchar(50) DEFAULT NULL,
  `hclinica_idhclinica` int(11) NOT NULL,
  `hclinica_paciente_idpaciente` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antrel`
--

CREATE TABLE `antrel` (
  `idantrel` int(11) NOT NULL,
  `hipertencion` varchar(12) DEFAULT NULL,
  `diabetes` varchar(10) DEFAULT NULL,
  `cardiovasculares` varchar(20) DEFAULT NULL,
  `obesidad` varchar(10) DEFAULT NULL,
  `gastritis` varchar(10) DEFAULT NULL,
  `hepatitis` varchar(10) DEFAULT NULL,
  `nefropatias` varchar(12) DEFAULT NULL,
  `artritis` varchar(10) DEFAULT NULL,
  `convulsiones` varchar(15) DEFAULT NULL,
  `cirugias` varchar(10) DEFAULT NULL,
  `traumaticos` varchar(50) DEFAULT NULL,
  `fimicos` varchar(10) DEFAULT NULL,
  `neoplasias` varchar(15) DEFAULT NULL,
  `hemofilia` varchar(15) DEFAULT NULL,
  `psiquiatricos` varchar(15) DEFAULT NULL,
  `enfsexuales` varchar(25) DEFAULT NULL,
  `otros` varchar(100) DEFAULT NULL,
  `fur` varchar(100) DEFAULT NULL,
  `alergias` varchar(100) DEFAULT NULL,
  `toxicomanias` varchar(15) DEFAULT NULL,
  `nurgencias_idnurgencias` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `antrel`
--

INSERT INTO `antrel` (`idantrel`, `hipertencion`, `diabetes`, `cardiovasculares`, `obesidad`, `gastritis`, `hepatitis`, `nefropatias`, `artritis`, `convulsiones`, `cirugias`, `traumaticos`, `fimicos`, `neoplasias`, `hemofilia`, `psiquiatricos`, `enfsexuales`, `otros`, `fur`, `alergias`, `toxicomanias`, `nurgencias_idnurgencias`, `created_at`, `updated_at`) VALUES
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24, '2018-05-19 03:26:23', '2018-05-19 03:26:23'),
(4, 'HIPERTENCIÓN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TRAUMÁTICOS', NULL, NULL, NULL, NULL, NULL, 'NINGUNO', 'NO', 'NINGUNA', 'NINGUNA', 26, '2018-05-19 03:42:39', '2018-05-19 03:42:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aobtetricos`
--

CREATE TABLE `aobtetricos` (
  `idaobtetricos` int(11) NOT NULL,
  `menarca` varchar(45) DEFAULT NULL,
  `gesta` int(11) DEFAULT NULL,
  `para` int(11) DEFAULT NULL,
  `fup` varchar(45) DEFAULT NULL,
  `abortos` int(11) DEFAULT NULL,
  `cesareas` int(11) DEFAULT NULL,
  `fur` varchar(45) DEFAULT NULL,
  `meplafam` varchar(45) DEFAULT NULL,
  `hclinica_idhclinica` int(11) NOT NULL,
  `hclinica_paciente_idpaciente` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ap_nopatologicos`
--

CREATE TABLE `ap_nopatologicos` (
  `idap_nopatologicos` int(11) NOT NULL,
  `tabaquismo` varchar(15) DEFAULT NULL,
  `alcoholismo` varchar(15) DEFAULT NULL,
  `surbanizacion` varchar(15) DEFAULT NULL,
  `habhigienicos` varchar(15) DEFAULT NULL,
  `habdieteticos` varchar(15) DEFAULT NULL,
  `hclinica_idhclinica` int(11) NOT NULL,
  `hclinica_paciente_idpaciente` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ap_patologicos`
--

CREATE TABLE `ap_patologicos` (
  `idap_patologicos` int(11) NOT NULL,
  `diabetes` varchar(15) DEFAULT NULL,
  `hparterial` varchar(15) DEFAULT NULL,
  `cancer` varchar(15) DEFAULT NULL,
  `oenfermedades` varchar(50) DEFAULT NULL,
  `diagnosticosp` varchar(50) DEFAULT NULL,
  `cirugprevias` varchar(50) DEFAULT NULL,
  `fracturas` varchar(50) DEFAULT NULL,
  `ts` varchar(50) DEFAULT NULL,
  `alergias` varchar(50) DEFAULT NULL,
  `hclinica_idhclinica` int(11) NOT NULL,
  `hclinica_paciente_idpaciente` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hclinica`
--

CREATE TABLE `hclinica` (
  `idhclinica` int(11) NOT NULL,
  `habitacion` tinyint(4) DEFAULT NULL,
  `interrogatorio` varchar(15) DEFAULT NULL,
  `padecimiento_actual` varchar(200) DEFAULT NULL,
  `habitus_exterior` varchar(200) DEFAULT NULL,
  `glasgow` int(11) DEFAULT NULL,
  `bartell` int(11) DEFAULT NULL,
  `cabeza` varchar(200) DEFAULT NULL,
  `ojos` varchar(200) DEFAULT NULL,
  `cuello` varchar(200) DEFAULT NULL,
  `torax` varchar(200) DEFAULT NULL,
  `abdomen` varchar(200) DEFAULT NULL,
  `genitales` varchar(100) DEFAULT NULL,
  `extremidades_t` varchar(100) DEFAULT NULL,
  `extremidades_p` varchar(100) DEFAULT NULL,
  `otros` varchar(100) DEFAULT NULL,
  `diagnostico` varchar(100) DEFAULT NULL,
  `plan` varchar(100) DEFAULT NULL,
  `paciente_idpaciente` int(11) NOT NULL,
  `medico_idmedico` int(11) NOT NULL,
  `paciente_idpaciente1` int(11) NOT NULL,
  `signos_vitales_idsignos_vitales` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `idmedico` int(11) NOT NULL,
  `apaterno` varchar(20) NOT NULL,
  `amaterno` varchar(20) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `especialidad` varchar(30) DEFAULT NULL,
  `num_cedula` varchar(20) NOT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`idmedico`, `apaterno`, `amaterno`, `nombre`, `especialidad`, `num_cedula`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'ANGULO', 'GOMEZ', 'FERNANDO', 'Ginecológia', '12345678', 1, '2018-05-17 03:33:55', '2018-05-19 04:07:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_egreso`
--

CREATE TABLE `nota_egreso` (
  `idne` int(11) NOT NULL,
  `hora_c` time DEFAULT NULL,
  `triage` varchar(10) DEFAULT NULL,
  `folio` int(11) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `degreso` varchar(200) DEFAULT NULL,
  `ind_medicas` varchar(200) DEFAULT NULL,
  `medico_idmedico` int(11) NOT NULL,
  `paciente_idpaciente` int(11) NOT NULL,
  `signos_vitales_idsignos_vitales` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_evol`
--

CREATE TABLE `nota_evol` (
  `idnie` int(11) NOT NULL,
  `hora_c` time DEFAULT NULL,
  `triage` varchar(10) DEFAULT NULL,
  `folio` int(11) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `dactual` varchar(200) DEFAULT NULL,
  `ind_medicas` varchar(200) DEFAULT NULL,
  `medico_idmedico` int(11) NOT NULL,
  `paciente_idpaciente` int(11) NOT NULL,
  `signos_vitales_idsignos_vitales` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota_ing_esp`
--

CREATE TABLE `nota_ing_esp` (
  `idnie` int(11) NOT NULL,
  `hora_c` time DEFAULT NULL,
  `triage` varchar(10) DEFAULT NULL,
  `folio` int(11) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `dingreso` varchar(200) DEFAULT NULL,
  `ind_medicas` varchar(200) DEFAULT NULL,
  `medico_idmedico` int(11) NOT NULL,
  `paciente_idpaciente` int(11) NOT NULL,
  `signos_vitales_idsignos_vitales` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nurgencias`
--

CREATE TABLE `nurgencias` (
  `idnurgencias` int(11) NOT NULL,
  `hconsulta` time DEFAULT NULL,
  `triage` varchar(8) DEFAULT NULL,
  `folio` int(11) DEFAULT NULL,
  `padecimiento_a` varchar(200) DEFAULT NULL,
  `glasgow` int(11) DEFAULT NULL,
  `exp_fisica` varchar(200) DEFAULT NULL,
  `dpresunciales` varchar(200) DEFAULT NULL,
  `indicaciones_med` varchar(200) DEFAULT NULL,
  `hr_llam_esp` time DEFAULT NULL,
  `hr_lleg_esp` time DEFAULT NULL,
  `medico_idmedico` int(11) NOT NULL,
  `paciente_idpaciente` int(11) NOT NULL,
  `signos_vitales_idsignos_vitales` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nurgencias`
--

INSERT INTO `nurgencias` (`idnurgencias`, `hconsulta`, `triage`, `folio`, `padecimiento_a`, `glasgow`, `exp_fisica`, `dpresunciales`, `indicaciones_med`, `hr_llam_esp`, `hr_lleg_esp`, `medico_idmedico`, `paciente_idpaciente`, `signos_vitales_idsignos_vitales`, `created_at`, `updated_at`) VALUES
(24, '09:09:00', 'VERDE', NULL, NULL, NULL, NULL, NULL, NULL, '22:05:00', NULL, 1, 1, NULL, '2018-05-19 03:26:23', '2018-05-19 03:26:23'),
(26, '09:09:00', 'VERDE', 12, 'CEFALEA', NULL, 'OJOS ROJOS', 'CEFALEA SEVERA', 'NINGUNA', '22:05:00', '09:09:00', 1, 2, NULL, '2018-05-19 03:42:39', '2018-05-19 03:42:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `idpaciente` int(11) NOT NULL,
  `apaterno` varchar(20) NOT NULL,
  `amaterno` varchar(20) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `fnacimiento` date DEFAULT NULL,
  `nacionalidad` varchar(20) DEFAULT NULL,
  `edo_nacimiento` varchar(20) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `edo_civil` varchar(10) DEFAULT NULL,
  `dom_estado` varchar(20) DEFAULT NULL,
  `dom_municipio` varchar(20) DEFAULT NULL,
  `dom_localidad` varchar(30) DEFAULT NULL,
  `dom_calle` varchar(30) DEFAULT NULL,
  `dom_numero` varchar(5) DEFAULT NULL,
  `convenio` varchar(45) DEFAULT NULL,
  `ocupacion` varchar(45) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`idpaciente`, `apaterno`, `amaterno`, `nombre`, `fnacimiento`, `nacionalidad`, `edo_nacimiento`, `genero`, `edo_civil`, `dom_estado`, `dom_municipio`, `dom_localidad`, `dom_calle`, `dom_numero`, `convenio`, `ocupacion`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'ALCANTARA', 'HERNANDEZ', 'ALFREDO', '1990-09-09', 'Mexicana', 'México', 'Masculino', 'Casado', 'México', 'TOLUCA', 'BOSQUES DE COLON', 'PRIVADA 1', '12', 'Seguro4', 'SUPLENTE', 1, '2018-05-17 01:39:11', '2018-05-17 03:28:56'),
(2, 'MARTINEZ', 'MARTINEZ', 'CESAR OMAR', '1990-08-11', 'MEXICANA', 'México', 'Masculino', 'Casado', 'México', 'TOLUCA', 'SAN PABLO', '13 DE SEPTIEMBRE', '22', 'Seguro1', 'NINI', 1, '2018-05-17 05:39:10', '2018-05-17 05:39:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sic`
--

CREATE TABLE `sic` (
  `idsic` int(11) NOT NULL,
  `fsolicitud` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `habitacion` int(11) DEFAULT NULL,
  `servicio` varchar(45) DEFAULT NULL,
  `motivo` varchar(10) DEFAULT NULL,
  `servicior` varchar(45) DEFAULT NULL,
  `medicor` varchar(45) DEFAULT NULL,
  `fechar` date DEFAULT NULL,
  `horar` time DEFAULT NULL,
  `medico_idmedico` int(11) NOT NULL,
  `paciente_idpaciente` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sic`
--

INSERT INTO `sic` (`idsic`, `fsolicitud`, `hora`, `habitacion`, `servicio`, `motivo`, `servicior`, `medicor`, `fechar`, `horar`, `medico_idmedico`, `paciente_idpaciente`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 2, 'Servicio1', '3', 'Servicio2', '1', NULL, '23:00:00', 1, 1, '2018-05-18 03:49:42', '2018-05-18 03:49:42'),
(2, '2018-05-17', '22:05:00', 2, 'Servicio1', 'dsds', 'Servicio2', '1', '2018-05-17', '23:00:00', 1, 1, '2018-05-18 03:51:50', '2018-05-18 03:51:50'),
(3, '2018-05-17', '22:05:00', 2, 'Servicio1', 'dsdsds', 'Servicio2', '1', '2018-05-17', '23:00:00', 1, 1, '2018-05-18 03:55:28', '2018-05-18 03:55:28'),
(4, '2018-05-18', '00:05:00', 2, 'Servicio1', 'sdsds', 'Servicio1', '1', '2018-05-11', '09:00:00', 1, 1, '2018-05-18 05:01:41', '2018-05-18 05:01:41'),
(5, '2018-05-18', '13:05:00', 2, 'Servicio1', 'sssdss', 'Servicio2', '1', '2018-05-18', '09:09:00', 1, 1, '2018-05-18 18:56:03', '2018-05-18 18:56:03'),
(6, '2018-05-18', '13:05:00', 34, 'Servicio1', 'ddsd', 'Servicio2', '1', NULL, '09:09:00', 1, 2, '2018-05-18 18:58:20', '2018-05-18 18:58:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `signos_vitales`
--

CREATE TABLE `signos_vitales` (
  `idsignos_vitales` int(11) NOT NULL,
  `ta` int(11) DEFAULT NULL,
  `fc` int(11) DEFAULT NULL,
  `fr` int(11) DEFAULT NULL,
  `temp` float DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `talla` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aheredo_familares`
--
ALTER TABLE `aheredo_familares`
  ADD PRIMARY KEY (`idaheredo_familiares`),
  ADD KEY `fk_aheredo_familares_hclinica1_idx` (`hclinica_idhclinica`,`hclinica_paciente_idpaciente`);

--
-- Indices de la tabla `antrel`
--
ALTER TABLE `antrel`
  ADD PRIMARY KEY (`idantrel`),
  ADD KEY `fk_antrel_nurgencias1_idx` (`nurgencias_idnurgencias`);

--
-- Indices de la tabla `aobtetricos`
--
ALTER TABLE `aobtetricos`
  ADD PRIMARY KEY (`idaobtetricos`),
  ADD KEY `fk_aobtetricos_hclinica1_idx` (`hclinica_idhclinica`,`hclinica_paciente_idpaciente`);

--
-- Indices de la tabla `ap_nopatologicos`
--
ALTER TABLE `ap_nopatologicos`
  ADD PRIMARY KEY (`idap_nopatologicos`),
  ADD KEY `fk_ap_nopatologicos_hclinica1_idx` (`hclinica_idhclinica`,`hclinica_paciente_idpaciente`);

--
-- Indices de la tabla `ap_patologicos`
--
ALTER TABLE `ap_patologicos`
  ADD PRIMARY KEY (`idap_patologicos`),
  ADD KEY `fk_ap_patologicos_hclinica1_idx` (`hclinica_idhclinica`,`hclinica_paciente_idpaciente`);

--
-- Indices de la tabla `hclinica`
--
ALTER TABLE `hclinica`
  ADD PRIMARY KEY (`idhclinica`,`paciente_idpaciente`),
  ADD KEY `fk_hclinica_medico1_idx` (`medico_idmedico`),
  ADD KEY `fk_hclinica_paciente1_idx` (`paciente_idpaciente1`),
  ADD KEY `fk_hclinica_signos_vitales1_idx` (`signos_vitales_idsignos_vitales`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`idmedico`);

--
-- Indices de la tabla `nota_egreso`
--
ALTER TABLE `nota_egreso`
  ADD PRIMARY KEY (`idne`),
  ADD KEY `fk_nota_egreso_medico1_idx` (`medico_idmedico`),
  ADD KEY `fk_nota_egreso_paciente1_idx` (`paciente_idpaciente`),
  ADD KEY `fk_nota_egreso_signos_vitales1_idx` (`signos_vitales_idsignos_vitales`);

--
-- Indices de la tabla `nota_evol`
--
ALTER TABLE `nota_evol`
  ADD PRIMARY KEY (`idnie`),
  ADD KEY `fk_nota_evol_medico1_idx` (`medico_idmedico`),
  ADD KEY `fk_nota_evol_paciente1_idx` (`paciente_idpaciente`),
  ADD KEY `fk_nota_evol_signos_vitales1_idx` (`signos_vitales_idsignos_vitales`);

--
-- Indices de la tabla `nota_ing_esp`
--
ALTER TABLE `nota_ing_esp`
  ADD PRIMARY KEY (`idnie`),
  ADD KEY `fk_nota_ing_esp_medico1_idx` (`medico_idmedico`),
  ADD KEY `fk_nota_ing_esp_paciente1_idx` (`paciente_idpaciente`),
  ADD KEY `fk_nota_ing_esp_signos_vitales1_idx` (`signos_vitales_idsignos_vitales`);

--
-- Indices de la tabla `nurgencias`
--
ALTER TABLE `nurgencias`
  ADD PRIMARY KEY (`idnurgencias`),
  ADD KEY `fk_nurgencias_medico1_idx` (`medico_idmedico`),
  ADD KEY `fk_nurgencias_paciente1_idx` (`paciente_idpaciente`),
  ADD KEY `fk_nurgencias_signos_vitales1_idx` (`signos_vitales_idsignos_vitales`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idpaciente`);

--
-- Indices de la tabla `sic`
--
ALTER TABLE `sic`
  ADD PRIMARY KEY (`idsic`),
  ADD KEY `fk_sic_medico1_idx` (`medico_idmedico`),
  ADD KEY `fk_sic_paciente1_idx` (`paciente_idpaciente`);

--
-- Indices de la tabla `signos_vitales`
--
ALTER TABLE `signos_vitales`
  ADD PRIMARY KEY (`idsignos_vitales`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aheredo_familares`
--
ALTER TABLE `aheredo_familares`
  MODIFY `idaheredo_familiares` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `antrel`
--
ALTER TABLE `antrel`
  MODIFY `idantrel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `hclinica`
--
ALTER TABLE `hclinica`
  MODIFY `idhclinica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `idmedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nota_egreso`
--
ALTER TABLE `nota_egreso`
  MODIFY `idne` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nurgencias`
--
ALTER TABLE `nurgencias`
  MODIFY `idnurgencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sic`
--
ALTER TABLE `sic`
  MODIFY `idsic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `signos_vitales`
--
ALTER TABLE `signos_vitales`
  MODIFY `idsignos_vitales` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aheredo_familares`
--
ALTER TABLE `aheredo_familares`
  ADD CONSTRAINT `fk_aheredo_familares_hclinica1` FOREIGN KEY (`hclinica_idhclinica`,`hclinica_paciente_idpaciente`) REFERENCES `hclinica` (`idhclinica`, `paciente_idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `antrel`
--
ALTER TABLE `antrel`
  ADD CONSTRAINT `fk_antrel_nurgencias1` FOREIGN KEY (`nurgencias_idnurgencias`) REFERENCES `nurgencias` (`idnurgencias`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `aobtetricos`
--
ALTER TABLE `aobtetricos`
  ADD CONSTRAINT `fk_aobtetricos_hclinica1` FOREIGN KEY (`hclinica_idhclinica`,`hclinica_paciente_idpaciente`) REFERENCES `hclinica` (`idhclinica`, `paciente_idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ap_nopatologicos`
--
ALTER TABLE `ap_nopatologicos`
  ADD CONSTRAINT `fk_ap_nopatologicos_hclinica1` FOREIGN KEY (`hclinica_idhclinica`,`hclinica_paciente_idpaciente`) REFERENCES `hclinica` (`idhclinica`, `paciente_idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ap_patologicos`
--
ALTER TABLE `ap_patologicos`
  ADD CONSTRAINT `fk_ap_patologicos_hclinica1` FOREIGN KEY (`hclinica_idhclinica`,`hclinica_paciente_idpaciente`) REFERENCES `hclinica` (`idhclinica`, `paciente_idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `hclinica`
--
ALTER TABLE `hclinica`
  ADD CONSTRAINT `fk_hclinica_medico1` FOREIGN KEY (`medico_idmedico`) REFERENCES `medico` (`idmedico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_hclinica_paciente1` FOREIGN KEY (`paciente_idpaciente1`) REFERENCES `paciente` (`idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_hclinica_signos_vitales1` FOREIGN KEY (`signos_vitales_idsignos_vitales`) REFERENCES `signos_vitales` (`idsignos_vitales`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nota_egreso`
--
ALTER TABLE `nota_egreso`
  ADD CONSTRAINT `fk_nota_egreso_medico1` FOREIGN KEY (`medico_idmedico`) REFERENCES `medico` (`idmedico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nota_egreso_paciente1` FOREIGN KEY (`paciente_idpaciente`) REFERENCES `paciente` (`idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nota_egreso_signos_vitales1` FOREIGN KEY (`signos_vitales_idsignos_vitales`) REFERENCES `signos_vitales` (`idsignos_vitales`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nota_evol`
--
ALTER TABLE `nota_evol`
  ADD CONSTRAINT `fk_nota_evol_medico1` FOREIGN KEY (`medico_idmedico`) REFERENCES `medico` (`idmedico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nota_evol_paciente1` FOREIGN KEY (`paciente_idpaciente`) REFERENCES `paciente` (`idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nota_evol_signos_vitales1` FOREIGN KEY (`signos_vitales_idsignos_vitales`) REFERENCES `signos_vitales` (`idsignos_vitales`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nota_ing_esp`
--
ALTER TABLE `nota_ing_esp`
  ADD CONSTRAINT `fk_nota_ing_esp_medico1` FOREIGN KEY (`medico_idmedico`) REFERENCES `medico` (`idmedico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nota_ing_esp_paciente1` FOREIGN KEY (`paciente_idpaciente`) REFERENCES `paciente` (`idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nota_ing_esp_signos_vitales1` FOREIGN KEY (`signos_vitales_idsignos_vitales`) REFERENCES `signos_vitales` (`idsignos_vitales`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `nurgencias`
--
ALTER TABLE `nurgencias`
  ADD CONSTRAINT `fk_nurgencias_medico1` FOREIGN KEY (`medico_idmedico`) REFERENCES `medico` (`idmedico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nurgencias_paciente1` FOREIGN KEY (`paciente_idpaciente`) REFERENCES `paciente` (`idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nurgencias_signos_vitales1` FOREIGN KEY (`signos_vitales_idsignos_vitales`) REFERENCES `signos_vitales` (`idsignos_vitales`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sic`
--
ALTER TABLE `sic`
  ADD CONSTRAINT `fk_sic_medico1` FOREIGN KEY (`medico_idmedico`) REFERENCES `medico` (`idmedico`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sic_paciente1` FOREIGN KEY (`paciente_idpaciente`) REFERENCES `paciente` (`idpaciente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
