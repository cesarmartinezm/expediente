-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2018 a las 04:14:55
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
-- Base de datos: `sime`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aheredo_familares`
--

CREATE TABLE `aheredo_familares` (
  `idaheredo_familiares` int(11) NOT NULL,
  `diabetes` varchar(10) DEFAULT NULL,
  `exfumador` varchar(10) DEFAULT NULL,
  `hipertension` varchar(25) DEFAULT NULL,
  `exalcoholico` varchar(15) DEFAULT NULL,
  `cancer` varchar(10) DEFAULT NULL,
  `exadicto` varchar(10) DEFAULT NULL,
  `oenfermedades` varchar(50) DEFAULT NULL,
  `hclinica_idhclinica` int(11) NOT NULL,
  `hclinica_paciente_idpaciente` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aheredo_familares`
--

INSERT INTO `aheredo_familares` (`idaheredo_familiares`, `diabetes`, `exfumador`, `hipertension`, `exalcoholico`, `cancer`, `exadicto`, `oenfermedades`, `hclinica_idhclinica`, `hclinica_paciente_idpaciente`, `created_at`, `updated_at`) VALUES
(5, 'DIABETES', 'EXFUMADOR', 'HIPERTENSIÓN ARTERIAL', 'EX ALCOHOLICO', 'CANCER', 'EX ADICTO', 'otras uno', 8, 1, '2018-05-20 18:10:11', '2018-06-03 23:48:53'),
(6, 'DIABETES', 'EXFUMADOR', 'HIPERTENSIÓN ARTERIAL', 'EX ALCOHOLICO', 'CANCER', 'EX ADICTO', 'JSJSJS', 9, 2, '2018-06-10 17:49:35', '2018-08-25 16:07:55');

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
(6, 'HIPERTENCIÓN', 'DIABETES', 'CARDIOVASCULARES', NULL, 'GASTRITIS', NULL, 'NEFROPATIAS', NULL, 'CONVULSIONES', NULL, 'TRAUMÁTICOS', NULL, NULL, NULL, NULL, NULL, 'ESPECIFIQUE', '', '', '', 28, '2018-05-20 18:44:11', '2018-08-18 18:03:37'),
(16, 'HIPERTENCIÓN', 'DIABETES', 'CARDIOVASCULARES', NULL, 'GASTRITIS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GHGHGH', '', '', '', 39, '2018-07-27 00:30:01', '2018-08-19 16:47:41');

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

--
-- Volcado de datos para la tabla `aobtetricos`
--

INSERT INTO `aobtetricos` (`idaobtetricos`, `menarca`, `gesta`, `para`, `fup`, `abortos`, `cesareas`, `fur`, `meplafam`, `hclinica_idhclinica`, `hclinica_paciente_idpaciente`, `created_at`, `updated_at`) VALUES
(1, '0', 0, 1, '0', 0, 0, 'sdsds', 'sasa', 8, 1, '2018-05-20 18:10:12', '2018-06-03 23:50:54'),
(2, 'HHK', 1, 3, 'NOSE', 0, 0, 'HDHSJD', 'SHDJSH', 9, 2, '2018-06-10 17:49:35', '2018-08-25 16:20:19');

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

--
-- Volcado de datos para la tabla `ap_nopatologicos`
--

INSERT INTO `ap_nopatologicos` (`idap_nopatologicos`, `tabaquismo`, `alcoholismo`, `surbanizacion`, `habhigienicos`, `habdieteticos`, `hclinica_idhclinica`, `hclinica_paciente_idpaciente`, `created_at`, `updated_at`) VALUES
(4, 'TABAQUISMO', 'ALCOHOLISMO', 'BUENO', 'MALO', 'REGULAR', 8, 1, '2018-05-20 18:10:11', '2018-06-03 23:55:21'),
(5, 'TABAQUISMO', 'ALCOHOLISMO', 'BUENO', 'MALO', 'REGULAR', 9, 2, '2018-06-10 17:49:35', '2018-08-25 16:07:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ap_patologicos`
--

CREATE TABLE `ap_patologicos` (
  `idap_patologicos` int(11) NOT NULL,
  `diabetes` varchar(15) DEFAULT NULL,
  `hparterial` varchar(22) DEFAULT NULL,
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

--
-- Volcado de datos para la tabla `ap_patologicos`
--

INSERT INTO `ap_patologicos` (`idap_patologicos`, `diabetes`, `hparterial`, `cancer`, `oenfermedades`, `diagnosticosp`, `cirugprevias`, `fracturas`, `ts`, `alergias`, `hclinica_idhclinica`, `hclinica_paciente_idpaciente`, `created_at`, `updated_at`) VALUES
(2, 'DIABETES', 'HIPERTENSIÓN ARTERIAL', 'CANCER', 'otras', 'ssss', 'ooo', 'SJAKSJKA', 'sss', 'sss', 8, 1, '2018-05-20 18:10:11', '2018-06-03 23:54:16'),
(3, 'DIABETES', 'HIPERTENSIÓN ARTERIAL', 'CANCER', '', '', '', '', '', '', 9, 2, '2018-06-10 17:49:35', '2018-08-25 16:07:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenio`
--

CREATE TABLE `convenio` (
  `id_convenio` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `convenio`
--

INSERT INTO `convenio` (`id_convenio`, `nombre`) VALUES
(1, 'SEGURO 1'),
(2, 'SEGURO 2'),
(3, 'SEGURO 3'),
(4, 'SEGURO 4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id_esp` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id_esp`, `nombre`) VALUES
(1, 'ANATOMÍA PATOLÓGICA'),
(2, 'ALERGOLOGIA'),
(3, 'ANATOMÍA PATOLÓGICA'),
(4, 'ALERGOLOGIA'),
(5, 'CARDIOLOGÍA'),
(6, 'CIRUGÍA CARDIACA'),
(7, 'CIRUGÍA GENERAL'),
(8, 'CIRUGÍA PLASTICA'),
(9, 'CIRUGÍA DE MAMA'),
(10, 'CIRUGÍA MAXILOFACIAL'),
(11, 'CIRUGÍA VASCULAR'),
(12, 'DERMATOLOGÍA'),
(13, 'ENDOCRINOLOGÍA Y NUTRICIÓN'),
(14, 'GASTROENTEROLOGÍA-DIGESTIVO'),
(15, 'GERIATRÍA'),
(16, 'GINECOLOGÍA'),
(17, 'HEMATOLOGÍA'),
(18, 'HEPATOLOGÍA'),
(19, 'MEDICINA INTERNA'),
(20, 'NEFROLOGÍA'),
(21, 'NEUMOLOGIA'),
(22, 'NEUROLOGÍA'),
(23, 'OFTALMOLOGÍA'),
(24, 'OTORRINOLARINGOLOGIA'),
(25, 'ONCOLOGÍA'),
(26, 'PEDIATRÍA'),
(27, 'PROCTOLOGÍA'),
(28, 'PSIQUIATRÍA'),
(29, 'TRAUMATOLOGÍA'),
(30, 'UROLOGÍA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `nombre`) VALUES
(1, 'AGUASCALIENTES'),
(2, 'BAJA CALIFORNIA'),
(3, 'BAJA CALIFORNIA SUR'),
(4, 'CAMPECHE'),
(5, 'COAHUILA'),
(6, 'COLIMA'),
(7, 'CHIAPAS'),
(8, 'CHIHUAHUA'),
(9, 'CIUDAD DE MEXICO'),
(10, 'DURANGO'),
(11, 'GUANAJUATO'),
(12, 'GUERRERO'),
(13, 'HIDALGO'),
(14, 'JALISCO'),
(15, 'MEXICO'),
(16, 'MICHOACAN'),
(17, 'MORELOS'),
(18, 'NAYARIT'),
(19, 'NUEVO LEON'),
(20, 'OAXACA'),
(21, 'PUEBLA'),
(22, 'QUINTANA ROO'),
(23, 'SAN LUIS POTOSI'),
(24, 'SINALOA'),
(25, 'SONORA'),
(26, 'TABASCO'),
(27, 'TAMAULIPAS'),
(28, 'TLAXCALA'),
(29, 'VERACRUZ'),
(30, 'YUCATAN'),
(31, 'ZACATECAS');

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
  `estado` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hclinica`
--

INSERT INTO `hclinica` (`idhclinica`, `habitacion`, `interrogatorio`, `padecimiento_actual`, `habitus_exterior`, `glasgow`, `bartell`, `cabeza`, `ojos`, `cuello`, `torax`, `abdomen`, `genitales`, `extremidades_t`, `extremidades_p`, `otros`, `diagnostico`, `plan`, `paciente_idpaciente`, `medico_idmedico`, `paciente_idpaciente1`, `signos_vitales_idsignos_vitales`, `estado`, `created_at`, `updated_at`) VALUES
(8, 3, 'INDIRECTO', 'jskdjsasasasasasadsdsdsds', '4sdsdsdsdsds', 4, 2, 'GRANDE', 'dsds', 'dsds', 'ytrfff', 'piuoii', 'uhghgh', 'hghghg', 'hghghg', 'ghghg', 'hghghg', 'prueba de edicion', 1, 1, 1, 26, 1, '2018-05-20 18:10:11', '2018-11-03 23:02:27'),
(9, 2, 'DIRECTO', 'XAAZASASAS', 'ASAS', NULL, NULL, 'HSHDJSDJSJDK', 'OJOS', 'DHSHDSHDJ', 'SASA', 'SASA', 'KSKSLSLS', 'SASAS', 'KJDKSJKDS', '', '', 'AUN NO SE SABE', 2, 1, 2, 13, 1, '2018-06-10 17:49:35', '2018-08-25 16:07:55');

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
(1, 'ANGULO', 'GOMEZ', 'FERNANDO', 'GINECOLOGÍA', '123456789', 1, '2018-05-17 03:33:55', '2018-06-30 21:25:02'),
(2, 'MUNGUIA', 'DORIA', 'MARCO ALFREDO', 'PEDIATRÍA', '1234567', 1, '2018-06-02 18:11:05', '2018-06-30 21:26:21'),
(4, 'BORJA', 'NIETO', 'QUIMICO', 'CIRUGÍA GENERAL', '1234567', 1, '2018-06-21 19:04:10', '2018-11-06 02:25:37'),
(5, 'OTRO MEDICO', 'OTRO APELLIDO', 'OTRO MÁS', 'CIRUGÍA GENERAL', '123456789', 0, '2018-06-30 21:20:11', '2018-09-01 15:18:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_08_094622_create_paciente_table', 1);

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
  `estado` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nota_egreso`
--

INSERT INTO `nota_egreso` (`idne`, `hora_c`, `triage`, `folio`, `descripcion`, `degreso`, `ind_medicas`, `medico_idmedico`, `paciente_idpaciente`, `signos_vitales_idsignos_vitales`, `estado`, `created_at`, `updated_at`) VALUES
(1, '18:05:00', 'VERDE', 123, 'NOTA DE EGRESO PRUEBA DE EDICION Y NUMERO DE PALABRAS QUE CABEN EN LA DESCRIPCION\r\nPARA ASI VER EL LIMITE QUE TIENE EL TEXT AREA\r\nAUN NO SE CUANTAS \r\nPARTE QUE TRUENE', 'CEFALEA', 'HOLA NOTA DE EGRESO', 1, 1, 24, 1, '2018-05-20 23:35:32', '2018-11-05 04:34:48'),
(2, '19:09:00', 'VERDE', NULL, '', '', NULL, 1, 3, NULL, 1, '2018-09-07 00:54:35', '2018-09-07 00:54:35');

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
  `estado` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nota_evol`
--

INSERT INTO `nota_evol` (`idnie`, `hora_c`, `triage`, `folio`, `descripcion`, `dactual`, `ind_medicas`, `medico_idmedico`, `paciente_idpaciente`, `signos_vitales_idsignos_vitales`, `estado`, `created_at`, `updated_at`) VALUES
(1, '13:05:00', 'AMARILLO', 16, 'PRUEBA DE EDICION NOTA DE EVOLUCION', 'CEFALEA', 'HOLA NOTA DE EVOLUCION', 1, 2, 23, 1, '2018-05-20 18:48:09', '2018-11-05 04:32:15');

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
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nota_ing_esp`
--

INSERT INTO `nota_ing_esp` (`idnie`, `hora_c`, `triage`, `folio`, `descripcion`, `dingreso`, `ind_medicas`, `medico_idmedico`, `paciente_idpaciente`, `signos_vitales_idsignos_vitales`, `estado`, `created_at`, `updated_at`) VALUES
(1, '12:05:00', 'AMARILLO', 12, 'MARIA SE CALLO DE LA SILLA', 'CEFALEA', 'HOLA NOTA DE INGRESO ESP EDITADAS', 1, 1, 21, 1, '2018-05-19 17:18:08', '2018-11-05 04:22:17');

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
  `ind_medicas` varchar(200) DEFAULT NULL,
  `hr_llam_esp` time DEFAULT NULL,
  `hr_lleg_esp` time DEFAULT NULL,
  `medico_idmedico` int(11) NOT NULL,
  `paciente_idpaciente` int(11) NOT NULL,
  `signos_vitales_idsignos_vitales` int(11) DEFAULT NULL,
  `estado` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nurgencias`
--

INSERT INTO `nurgencias` (`idnurgencias`, `hconsulta`, `triage`, `folio`, `padecimiento_a`, `glasgow`, `exp_fisica`, `dpresunciales`, `ind_medicas`, `hr_llam_esp`, `hr_lleg_esp`, `medico_idmedico`, `paciente_idpaciente`, `signos_vitales_idsignos_vitales`, `estado`, `created_at`, `updated_at`) VALUES
(28, '12:09:00', 'AMARILLO', 14, 'SDSDSDSDDSDSD', 12, '', 'JDSKJDKSJD JDKSJDKSJDKS', 'HOLA NOTA DE URGENCIAS', '13:05:00', NULL, 1, 2, 19, 1, '2018-05-20 18:44:11', '2018-11-05 03:58:27'),
(39, '19:30:00', 'VERDE', NULL, 'ASASASJKJDKSDKSDKSJDKSJDKJAKJDKSAJDKSD\r\nSKDKSJDKAJKDASDJKSJDKS\r\nDJSKDJKSJDKSDKSJD\r\nJDSKJDKSJDKS\r\nDJSKDJKSJDKSJKD\r\nCKXKCLX\r\nLXKCLXKCLX\r\nKCLKCLX', NULL, 'JSKDKSDKSJKDJSKD\r\nAAAAAAAAAAAAAAA\r\nVVVVVVVVVVVVVVVVVVVVV\r\nBBBBBBBBBBBBBBBBBB', 'DJKSJDKS\r\nSSSSSSSSSSSSSSSS\r\nSSSSSSSSSSSSSSSSSSS\r\nFFFFFFFFFFFFFFFFFFFF', 'HOLA INDICACIONES NOTA DE URGENCIAS', '19:30:00', NULL, 1, 1, 27, 1, '2018-07-27 00:30:00', '2018-11-05 04:41:22');

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
  `edo_civil` varchar(15) DEFAULT NULL,
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
(1, 'ALCANTARA', 'HERNANDEZ', 'ALFREDO', '1990-09-09', 'EXTRANJERA', 'BAJA CALIFORNIA', 'MASCULINO', 'CASADO', 'CIUDAD DE MEXICO', 'TOLUCA', 'BOSQUES DE COLON', 'PRIVADA 1', '12', 'SEGURO 2', 'SUPLENTE', 1, '2018-05-17 01:39:11', '2018-06-14 01:20:20'),
(2, 'MARTINEZ', 'MARTINEZ', 'CESAR OMAR', '1990-08-11', 'MEXICANA', 'AGUASCALIENTES', 'MASCULINO', 'CASADO', 'AGUASCALIENTES', 'TOLUCA', 'SAN PABLO', '13 DE SEPTIEMBRE', '22', 'SEGURO 4', 'NINISSSS', 1, '2018-05-17 05:39:10', '2018-06-14 01:20:39'),
(3, 'SANCHEZ', 'PEREZ', 'ADRIANA', '1995-11-06', 'MEXICANA', 'MEXICO', 'FEMENINO', 'CASADO', 'MEXICO', 'XOCANCATLAN', 'MIMIAPAN', 'EMILIANO ZAPATA', 'S/N', 'SEGURO 1', 'SUPERNURSE', 0, '2018-06-21 21:15:38', '2018-10-15 16:25:03'),
(4, 'FFFF', '', '', NULL, 'MEXICANA', 'AGUASCALIENTES', NULL, 'CASADO', 'AGUASCALIENTES', '', '', '', NULL, 'SEGURO 1', '', 0, '2018-06-21 21:17:11', '2018-06-30 20:58:27'),
(5, 'YYYY', '', '', NULL, 'MEXICANA', 'AGUASCALIENTES', NULL, 'CASADO', 'AGUASCALIENTES', '', '', '', NULL, 'SEGURO 1', '', 0, '2018-06-21 21:17:20', '2018-06-30 20:58:20'),
(6, 'GGG', 'GFGF', '', NULL, 'MEXICANA', 'AGUASCALIENTES', NULL, 'CASADO', 'AGUASCALIENTES', '', '', '', NULL, 'SEGURO 1', '', 0, '2018-06-21 21:17:32', '2018-06-30 20:58:12'),
(7, 'FDDGFFG', '', '', NULL, 'MEXICANA', 'AGUASCALIENTES', NULL, 'CASADO', 'AGUASCALIENTES', '', '', '', NULL, 'SEGURO 1', '', 0, '2018-06-21 21:17:47', '2018-06-30 20:58:04'),
(8, 'AAAA', '', '', NULL, 'MEXICANA', 'AGUASCALIENTES', NULL, 'CASADO', 'AGUASCALIENTES', '', '', '', NULL, 'SEGURO 1', '', 0, '2018-06-21 21:18:06', '2018-06-21 21:18:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_p` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `convenio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('csarm190@gmail.com', '$2y$10$Py02mYED4aFHMbMCdWxaH.MAeqc6JI4sjSxqXZsYKGk5RKfU8lv.S', '2018-08-25 16:51:55');

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
  `motivo` varchar(100) DEFAULT NULL,
  `servicior` varchar(45) DEFAULT NULL,
  `medicor` int(11) DEFAULT NULL,
  `fechar` date DEFAULT NULL,
  `horar` time DEFAULT NULL,
  `medico_idmedico` int(11) NOT NULL,
  `paciente_idpaciente` int(11) NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sic`
--

INSERT INTO `sic` (`idsic`, `fsolicitud`, `hora`, `habitacion`, `servicio`, `motivo`, `servicior`, `medicor`, `fechar`, `horar`, `medico_idmedico`, `paciente_idpaciente`, `estado`, `created_at`, `updated_at`) VALUES
(4, '2018-05-18', '00:05:00', 2, 'Servicio1', 'SDSDS', 'Servicio2', 5, '2018-05-18', '09:00:00', 1, 1, 1, '2018-05-18 05:01:41', '2018-08-23 23:53:14'),
(5, '2018-05-18', '13:05:00', 2, 'Servicio1', 'sssdss', 'Servicio2', 2, '2018-05-18', '09:09:00', 1, 1, 1, '2018-05-18 18:56:03', '2018-06-11 21:54:03'),
(6, '2018-05-18', '13:05:00', 36, 'Servicio1', 'DDSD', 'Servicio2', 5, '2018-08-18', '10:00:00', 1, 2, 1, '2018-05-18 18:58:20', '2018-08-24 00:02:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `signos_vitales`
--

CREATE TABLE `signos_vitales` (
  `idsignos_vitales` int(11) NOT NULL,
  `ta` int(11) DEFAULT NULL,
  `fc` int(11) DEFAULT NULL,
  `fr` int(11) DEFAULT NULL,
  `sao2` int(11) DEFAULT NULL,
  `temp` float DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `talla` float DEFAULT NULL,
  `paciente_idpaciente` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `signos_vitales`
--

INSERT INTO `signos_vitales` (`idsignos_vitales`, `ta`, `fc`, `fr`, `sao2`, `temp`, `peso`, `talla`, `paciente_idpaciente`, `tipo`, `estado`, `created_at`, `updated_at`) VALUES
(10, 111, 45, 7, 23, 23, 78, 1.68, 2, 1, 1, '2018-06-08 03:23:32', '2018-06-21 21:06:44'),
(13, 22, 22, 22, 22, 2222, 23, 12, 2, 2, 1, '2018-06-10 18:05:06', '2018-11-03 23:01:55'),
(14, 2, 4, 44, 4, 2, 4, 4, 2, 1, 1, '2018-06-10 18:20:33', '2018-06-10 18:20:33'),
(17, 100760, 100, 24, 94, 39, 53, 155, 3, 1, 1, '2018-07-07 16:07:06', '2018-07-07 16:07:06'),
(19, 7, 1, 2, 2, 2, 2, 56, 2, 1, 1, '2018-11-03 19:44:35', '2018-11-03 22:43:56'),
(21, 12, 16, 183, 234, 14, 1241, 178, 1, 5, 1, '2018-11-03 20:11:46', '2018-11-03 23:01:22'),
(23, 1, 2, 222, 2, 1, 2, 2, 2, 3, 1, '2018-11-03 22:08:57', '2018-11-03 23:02:53'),
(24, 2, 222, 2, 290, 2, 223, 128, 1, 4, 1, '2018-11-03 22:18:11', '2018-11-03 23:05:02'),
(26, 14, 14, 14, 14, 14, 12, 123, 1, 2, 1, '2018-11-03 23:02:27', '2018-11-03 23:02:27'),
(27, 2, 4, 5, 29, 3, 5, 123, 1, 1, 1, '2018-11-05 00:49:21', '2018-11-05 00:57:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'prueba', 'prueba_sime@fagcom.mx', '$2y$10$Ljlv.I9tZvr0P11MnyJXP.IyR6BHrjYWymzqkfxJLflKsUHKz05TK', 'sB8Cx7534f7sanEoXvL4XC8D9dN8ZFltLI4wISD6tc4V8AxhsikcSD9YTU1Y', '2018-06-15 01:26:16', '2018-06-15 01:26:16'),
(2, 'FERNANDO', 'fernando@sime.com', '$2y$10$eRZXoXa6.SAc9wYMDFAI7e44QkMoa2vsbUj2kZNtI4.h87r0zHDCS', 'f7FJpdjZB1LnaqDKAWMx507dCCsone09GIYhz72urERPR5gg41j5aF172Gyr', '2018-06-16 15:22:10', '2018-06-16 15:22:10'),
(3, 'CESAR', 'csarm190@gmail.com', '$2y$10$J.48ao0fKTGDAeqO2xmbLuiFRhPmUIYvZXwwha/ureqUpYkC203cy', 'd5y5M7w4fe0syaYPtIPrfWkW5vXbanbui2rngNWk3bD72OueIAvpFOGv3Qae', '2018-06-16 15:32:08', '2018-06-16 15:32:08');

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
-- Indices de la tabla `convenio`
--
ALTER TABLE `convenio`
  ADD PRIMARY KEY (`id_convenio`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id_esp`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

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
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_p`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD PRIMARY KEY (`idsignos_vitales`),
  ADD KEY `paciente_idpaciente` (`paciente_idpaciente`);

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
-- AUTO_INCREMENT de la tabla `aheredo_familares`
--
ALTER TABLE `aheredo_familares`
  MODIFY `idaheredo_familiares` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `antrel`
--
ALTER TABLE `antrel`
  MODIFY `idantrel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `aobtetricos`
--
ALTER TABLE `aobtetricos`
  MODIFY `idaobtetricos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ap_nopatologicos`
--
ALTER TABLE `ap_nopatologicos`
  MODIFY `idap_nopatologicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ap_patologicos`
--
ALTER TABLE `ap_patologicos`
  MODIFY `idap_patologicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `convenio`
--
ALTER TABLE `convenio`
  MODIFY `id_convenio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id_esp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `hclinica`
--
ALTER TABLE `hclinica`
  MODIFY `idhclinica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `idmedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `nota_egreso`
--
ALTER TABLE `nota_egreso`
  MODIFY `idne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `nota_evol`
--
ALTER TABLE `nota_evol`
  MODIFY `idnie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nota_ing_esp`
--
ALTER TABLE `nota_ing_esp`
  MODIFY `idnie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nurgencias`
--
ALTER TABLE `nurgencias`
  MODIFY `idnurgencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `idpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_p` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sic`
--
ALTER TABLE `sic`
  MODIFY `idsic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `signos_vitales`
--
ALTER TABLE `signos_vitales`
  MODIFY `idsignos_vitales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
