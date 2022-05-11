-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-05-2022 a las 15:34:02
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `objetivo_id` int(11) NOT NULL,
  `actividad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `objetivo_id`, `actividad`) VALUES
(1, 1, ' PERFILES DE CARGO - Actividades y funciones principales'),
(2, 1, ' CONTEXTO (Partes interesadas y políticas)'),
(3, 1, ' CONTEXTO de la empresa (Análisis interno, externo)'),
(4, 1, ' CONTEXTO (Alcance, objetivos de calidad)'),
(5, 1, ' PLAN ESTRATEGICO (Misión, visión, organigrama, políticas, objetivos)'),
(6, 1, ' CONTEXTO Y PLAN ESTRATEGICO'),
(7, 1, ' Se presenta la estructura del sistema de gestión.'),
(8, 2, ' Caracterización - Revisión de caracterizaciones y ajustes de cambio.'),
(9, 2, ' Revisión de caracterizaciones y ajustes de cambio.'),
(10, 2, ' Revisión de caracterizaciones y ajustes de cambio.'),
(11, 2, ' Revisión de caracterizaciones y ajustes de cambio.'),
(12, 2, ' Revisión de caracterizaciones y ajustes de cambio.'),
(13, 2, ' Revisión de caracterizaciones y ajustes de cambio.'),
(14, 3, ' Taller de normas para entendimiento en cada proceso.'),
(15, 4, ' CAPACITACIÓN CONTROL DOCUMENTAL'),
(16, 5, ' Parametrización de documentos y formatos para control documental -PROCESO CALIDAD'),
(17, 5, '  Parametrización de documentos y formatos para control documental -PROCESO ADMINISTRATIVO'),
(18, 5, '  Parametrización de documentos y formatos para control documental -PROCESO DIRECCIÓN'),
(19, 5, '  Parametrización de documentos y formatos para control documental -PROCESO PEDAGOGICO'),
(20, 5, '  Parametrización de documentos y formatos para control documental -PROCESO BIENESTAR'),
(21, 5, '  Parametrización de documentos y formatos para control documental -PROCESO CALIDAD'),
(22, 5, ' PARAMETRIZACIÓN CONTROL DOCUMENTAL (Listado maestro)'),
(23, 5, '  PARAMETRIZACIÓN CONTROL DOCUMENTAL (Listado maestro)'),
(24, 5, ' Revisión de documentos y formatos para control documental-PROCESO ADMINISTRATIVO'),
(25, 5, '  Revisión de documentos y formatos para control documental-PROCESO DIRECCIÓN'),
(26, 5, '  Revisión de documentos y formatos para control documental-PROCESO CALIDAD'),
(27, 5, '  Revisión de documentos y formatos para control documental-PROCESO PEDAGOGICO'),
(28, 5, ' Revisión de documentos y formatos para control documental-PROCESO COMERCIAL'),
(29, 5, ' Revisión de documentos y formatos para control documental-PROCESO BIENESTAR'),
(30, 5, ' PARAMETRIZACIÓN CONTROL DOCUMENTAL (Listado maestro)-AJUSTE DOCUMENTAL'),
(31, 5, '  PARAMETRIZACIÓN CONTROL DOCUMENTAL (Listado maestro)-AJUSTE DOCUMENTAL'),
(32, 6, ' SEGURIDAD Y SALUD EN EL TRABAJO (verificación de cumplimiento decreto 1072)-PROCEDIMIENTO SST'),
(33, 7, 'Revisión del diseño curricular, modelo estructura para certificación'),
(34, 7, 'CONTROL DE PROCESO ACADEMICOS (planificación, asignación, revisión, verificación y validación.)'),
(35, 7, 'CAPACITACIÓN - diseño curricular -equipo de diseño'),
(36, 7, ' Ajuste del diseño curricular, modelo estructura para certificación'),
(37, 7, ' LIBERACIÓN DE PRODUCTO (Consolidado salida de CLIENTE)'),
(38, 7, 'SATISFACCIÓN DEL CLIENTE (Mecanismo PQRSF)'),
(39, 8, ' PERFILES DE CARGO - Actividades y funciones principales'),
(40, 8, ' HERRAMINETA PARA APLICACIÓN (mecanismo de aplicación.)'),
(41, 8, ' Revisar el cumplimiento de hojas de vida del personal.'),
(42, 8, ' Revisar aplicación de evaluación de desempeño'),
(43, 9, ' INFRAESTRUCTURA (Inventarios, mantenimiento, proveedores y presupuesto)'),
(44, 10, 'AUDITORIA INTERNA (procesos- calidad)'),
(45, 10, '  AUDITORIA INTERNA (procesos- pedagógico -desarrollo)'),
(46, 10, '  AUDITORIA INTERNA (procesos- pedagógico -diseño)'),
(47, 10, '  AUDITORIA INTERNA (procesos-administrativo)'),
(48, 10, '  AUDITORIA INTERNA (procesos- bienestar- talento humano)'),
(49, 10, '  AUDITORIA INTERNA (procesos- dirección)'),
(50, 10, '  AUDITORIA INTERNA (procesos-sst)'),
(51, 10, ' AUDITORIA INTERNA- todos los procesos'),
(52, 11, ' CAPACITACIÓN DE LIDERES (Auditoria interna de calidad)'),
(53, 12, ' TRATAMIENTO DE HALLAZGOS (Método de análisis)'),
(54, 13, '  ACCIONES CORRECTIVAS Y DE MEJORA. (Pedagógico)'),
(55, 13, '  ACCIONES CORRECTIVAS Y DE MEJORA. ( dirección)'),
(56, 13, '  ACCIONES CORRECTIVAS Y DE MEJORA. (administrativo )'),
(57, 13, '  ACCIONES CORRECTIVAS Y DE MEJORA. ( bienestar)'),
(58, 13, ' ACCIONES CORRECTIVAS Y DE MEJORA. ( comercial)'),
(59, 14, ' CAPACITACIÓN DE LIDERES (Acciones correctivas-preventivas y de mejora)'),
(60, 15, ' PROCESO DE CERTIFICACIÓN- DOCUMENTAL'),
(61, 15, ' AUDITORIA EXTERNA ( Acompañamiento a empresa durante auditoria externa).'),
(62, 16, '  REVISIÓN POR LA DIRECCIÓN (Revisión por la dirección integral).'),
(63, 16, ' VALIDAR LA EEVISIÓN POR LA DIRECCIÓN (Revisión por la dirección integral).');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `nit` bigint(100) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `potencial` varchar(11) NOT NULL,
  `interesado_en` varchar(255) NOT NULL,
  `como_se_entero` varchar(255) NOT NULL,
  `estado_id` int(11) NOT NULL COMMENT '1=activo, 0=inactivo',
  `tipo_cliente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `correo`, `telefono`, `nit`, `ubicacion`, `potencial`, `interesado_en`, `como_se_entero`, `estado_id`, `tipo_cliente_id`) VALUES
(3, 'IMPORMEDICAL EQUIPOS Y SUMINISTROS MEDICOS', '', '', 0, 900261089, 'PALMIRA', 'Alto', '', '', 1, 3),
(4, 'INSTITUCIÓN EDUCATIVA NUESTRA SEÑORA DE FATIMA  (INFA)', '', '', 0, 800191574, 'PALMIRA - CALI', 'Alto', '', '', 1, 3),
(6, 'INSTITUCIÓN EDUCATIVA MERCEDES ABREGO', '', '', 0, 815004333, 'PALMIRA', 'Alto', '', '', 1, 3),
(7, 'ASESORES DE SEGUIRIDAD (agm)', '', '', 0, 9005322226, 'CALI', 'Alto', '', '', 1, 3),
(8, 'Seguridad  Industrial y Bancaria SIB 70 Ltda.', '', '', 0, 891301, 'Calle 44 No. 6A-109 B/ Las Delicias ', 'Alto', 'producto', 'redes', 1, 1),
(9, 'SERVICIOS GENERALES DEL VALLE S.A.S.', '', '', 0, 900572793, 'CALI', 'Alto', '', '', 1, 3),
(10, 'POLITÉCNICO INTERNACIONAL DE OCCIDENTE', '', '', 0, 900847259, 'CALI-PALMIRA', 'Alto', '', '', 1, 3),
(12, 'ACADEMIA DE BELLEZA CARRUSEL', '', '', 0, 890323443, 'CALI', 'Alto', '', '', 1, 3),
(13, 'AFICENTER SA.S', '', '', 0, 805025635, 'CALI', 'Alto', '', '', 1, 3),
(14, 'AON RISK SERVICE COLOMBIA S.A.', '', '', 0, 860069265, 'CRA 11 No.86-53 PISO 5 BOGOTA', 'Alto', '', '', 1, 3),
(15, 'BM INDUSTRIAS METALMECANICAS SAS', '', '', 0, 901052545, 'YUMBO', 'Alto', '', '', 1, 3),
(16, 'ASOCIACIÓN EDUCATIVA VIDA Y SALUD', '', '', 0, 805017089, 'CALI', 'Alto', '', '', 1, 3),
(17, 'I.E JOSE ASUNCIÓN SILVA', '', '', 0, 891380, 'LA TORRE ', 'Alto', '', '', 1, 3),
(18, 'I.E SAGRADA FAMILIA', '', '', 0, 815004305, 'PALMIRA', 'Alto', '', '', 1, 3),
(19, 'I.E. DE ROZO', '', '', 0, 815004288, 'ROZO', 'Alto', '', '', 1, 3),
(20, 'FERTILITY CARE', '', '', 0, 1111111111, 'BARRANQUILLA', 'Alto', '', '', 1, 3),
(21, 'colombo', '', '', 0, 9000, 'bogota', 'Alto', '', '', 1, 3),
(22, 'PRUEBA  REGISTRO', '', '', 0, 1469662, 'palmira 1', 'Alto', '', '', 1, 2),
(23, 'LAS LAJAS', '', '', 0, 1, 'palmira', 'Medio', 'producto', 'redes', 1, 1),
(31, 'alex', 'orejuela', 'alexsanderorejuela@gmail.com', 123456, 1469, 'dsfafafdasfas', 'Alto', 'producto', 'redes', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_procesos`
--

CREATE TABLE `clientes_procesos` (
  `cliente_id` int(11) NOT NULL,
  `proceso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas`
--

CREATE TABLE `etapas` (
  `id` int(11) NOT NULL,
  `proyecto_id` int(11) NOT NULL,
  `notacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `etapas`
--

INSERT INTO `etapas` (`id`, `proyecto_id`, `notacion`) VALUES
(1, 1, 'PLANEACIÓN'),
(2, 1, 'ANALISIS'),
(3, 1, 'DOCUMENTACION'),
(4, 1, 'EJECUCIÓN'),
(5, 1, 'VERIFICACION'),
(6, 1, 'MEJORAMIENTO'),
(7, 1, 'CIERRE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetivos`
--

CREATE TABLE `objetivos` (
  `id` int(11) NOT NULL,
  `etapa_id` int(11) NOT NULL,
  `objetivo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `objetivos`
--

INSERT INTO `objetivos` (`id`, `etapa_id`, `objetivo`) VALUES
(1, 1, 'CONTEXTO'),
(2, 2, 'CARACTERIZACION DE PROCESO'),
(3, 2, 'CAPACITACIÓN EN NORMAS'),
(4, 2, 'CAPACITACIÓN DE LIDERES CONTROL DE DOCUMENTOS '),
(5, 3, ' CONTROL DOCUMENTAL'),
(6, 3, 'SEGURIDAD Y SALUD EN EL TRABAJO '),
(7, 4, ' PROCESO MISIONAL'),
(8, 4, 'PROCESO BIENESTAR'),
(9, 4, 'PROCESO ADMINISTRATIVO '),
(10, 5, '  AUDITORIA INTERNA SGI'),
(11, 5, 'TRATAMIENTO DE HALLAZGOS Y TOMA DE ACCIONES '),
(12, 6, ' INFORME DE AUDITORIA INTERNA'),
(13, 6, ' ACCIONES CORRECTIVAS Y PREVENTIVAS'),
(14, 6, '  ACCIONES CORRECTIVAS Y DE MEJORA'),
(15, 7, ' AUDITORIA EXTERNA'),
(16, 7, '  REVISIÓN POR LA DIRECCIÓN ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantillas`
--

CREATE TABLE `plantillas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(2555) NOT NULL,
  `duracion` varchar(255) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plantillas`
--

INSERT INTO `plantillas` (`id`, `nombre`, `descripcion`, `duracion`, `created`, `modified`) VALUES
(1, 'CERTIFICACIÓN', 'IETDH PLANTILLA', '7 MESES', '2022-05-06', '2022-05-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `id` int(11) NOT NULL,
  `proceso` varchar(30) NOT NULL,
  `sigla` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimientos`
--

CREATE TABLE `seguimientos` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `fecha_control` date NOT NULL COMMENT 'fecha para realizar control luego de la primera intervencion',
  `usuario_id` int(255) NOT NULL COMMENT 'funcionario que lo esta atendiendo',
  `propuesta` varchar(255) NOT NULL,
  `m_envio` varchar(255) NOT NULL,
  `info1` varchar(255) NOT NULL COMMENT 'informacion entregada al cliente por el asesor',
  `info2` varchar(255) NOT NULL,
  `creacion` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seguimientos`
--

INSERT INTO `seguimientos` (`id`, `cliente_id`, `fecha_control`, `usuario_id`, `propuesta`, `m_envio`, `info1`, `info2`, `creacion`) VALUES
(1, 8, '2022-04-29', 1, 'Sin Propuesta', 'Telefonico', '12', '34', '2022'),
(2, 8, '2022-04-29', 1, 'Sin Propuesta', 'Telefonico', '12', '34', '2022-04-29'),
(3, 8, '2022-04-29', 1, 'Sin Propuesta', 'Telefonico', '12', '34', '2022-04-29'),
(4, 8, '2022-04-30', 1, 'Certificacion', 'Telefonico', 'p2', 'p3', '2022-04-29'),
(5, 23, '2019-02-28', 1, 'Certificacion', 'Telefonico', 'r', 'w', '2022-04-29'),
(6, 31, '2022-04-07', 1, 'Certificacion', 'Mensajeria', 'r', 'w', '2022-04-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_clientes`
--

CREATE TABLE `tipo_clientes` (
  `id` int(11) NOT NULL,
  `tipo_cliente` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_clientes`
--

INSERT INTO `tipo_clientes` (`id`, `tipo_cliente`) VALUES
(1, 'Interesado'),
(2, 'Prospecto'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `id` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'auditor'),
(3, 'operario'),
(4, 'asesor'),
(5, 'root');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `tipo_identificacion` varchar(11) COLLATE utf8_unicode_ci NOT NULL COMMENT 'C=cedula, TI=tarjeta identidad, CE=Cedula extranjeria, P=pasaporte',
  `num_identificacion` bigint(20) NOT NULL,
  `nombres` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` bigint(11) NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL COMMENT '1=activo,0=inactivo',
  `tipo_usuario` int(11) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipo_identificacion`, `num_identificacion`, `nombres`, `apellidos`, `telefono`, `correo`, `usuario`, `clave`, `estado`, `tipo_usuario`, `created`, `modified`) VALUES
(1, 'CC', 146966585, 'deve', 'loper', 3113368682, 'a@info.com', 'root', 'e77989ed21758e78331b20e477fc5582', 1, 4, '2022-03-14', '2022-04-01'),
(3, 'CE', 789456, 'alexander', 'orejuela', 123, 'alexsanderorejuela@gmail.com', '789456', '71b3b26aaa319e0cdf6fdb8429c112b0', 1, 6, '0000-00-00', '0000-00-00'),
(4, 'TI', 15986, 'jorge andres', 'orejuela a', 3113398685, 'alexsanderorejuela@gmail.com', '12', 'c20ad4d76fe97759aa27a0c99bff6710', 1, 3, '0000-00-00', '2022-04-20'),
(5, 'CC', 12366, 'alexander', 'orejuela', 78878, 'alexsanderorejuela@gmail.com', '12366', 'd8b121387a58ed51d1e9459a0edb5934', 1, 6, '0000-00-00', '0000-00-00'),
(6, 'TI', 146966, 'jorge', 'orejuela', 1231, 'alexsanderorejuela@gmail.com', '146966', '0099d876db1a3a3201178dee17e596ce', 1, 7, '0000-00-00', '0000-00-00'),
(7, 'CC', 1345, 'jorge', 'perz', 0, 'alexsanderorejuela@gmail.com', '1345', '86109d400f0ed29e840b47ed72777c84', 1, 2, '0000-00-00', '2022-04-20'),
(8, 'TI', 789456321, '--WUIGOO--', '--WUIGOO--', 65555555, 'INFO1@INFO.COM', '789456321', '69973c4700dc33fa46226ae14e7f22bb', 1, 3, '2022-03-24', '2022-05-03'),
(16, 'TI', 987654258, 'WUIGOO', '--WUIGOO--', 4545454, 'INFO1@INFO.COM', '987654258', 'f5bbd9c1dc8b96f2dc76248371840866', 1, 7, '2022-03-24', '2022-03-24'),
(17, 'CC', 789632541, 'MARINO', ' MILLAN', 2785686, 'MILLAN@INFO', '789632541', 'dc2a6de0e83527c92e0a654fbf46f919', 1, 7, '2022-03-24', '2022-03-24'),
(18, 'CC', 6333740, 'RODRIGO', 'BUSTOS CABRERA', 3218525687, 'RODRIGOBUSTOSMJ@GMAIL.COM', '6333740', '349ef21c273e8591ea42cd2c8f96565a', 1, 5, '2022-03-30', '2022-03-30'),
(19, 'CC', 78945677, 'alexs', 'visitante', 0, 'null', '78945677', '3ba663fca166183b9986ac0cc03a0b8a', 1, 8, '2022-04-04', '2022-04-04'),
(20, 'CC', 78945677, 'alexs', 'visitante', 0, 'null', '78945677', '3ba663fca166183b9986ac0cc03a0b8a', 1, 8, '2022-04-04', '2022-04-04'),
(21, 'CC', 963214785, 'alexander', 'visita', 0, 'null', '963214785', 'b81e2123f11354a7121706c332da7caa', 1, 8, '2022-04-04', '2022-04-04'),
(22, 'CC', 951753, 'visitante ', 'de prueba', 0, 'null', '951753', '009b927906b97d1507451f45d795d55e', 1, 8, '2022-04-04', '2022-04-04'),
(23, 'TI', 654258, 'alexs', 'visitante', 0, 'null', '654258', '69b21ddba533daf0696e31aab02f07b0', 1, 8, '2022-04-04', '2022-04-04'),
(24, 'TI', 654258, 'alexs', 'visitante', 0, 'null', '654258', '69b21ddba533daf0696e31aab02f07b0', 1, 8, '2022-04-04', '2022-04-04'),
(25, 'TI', 654258, 'alexs', 'visitante', 0, 'null', '654258', '69b21ddba533daf0696e31aab02f07b0', 1, 8, '2022-04-04', '2022-04-04'),
(26, '', 124589, 'martin ', 'de francisco', 0, 'null', '124589', '2748cffc53f7c9a6f538ebfb47dd773d', 1, 8, '2022-04-04', '2022-04-04'),
(27, '', 124589, 'martin ', 'de francisco', 0, 'null', '124589', '2748cffc53f7c9a6f538ebfb47dd773d', 1, 8, '2022-04-04', '2022-04-04'),
(28, 'TI', 123098, 'alexander', 'guimaraes', 0, 'null', '123098', '209d439cb668c11fc8657c4d90dee1d2', 1, 8, '2022-04-04', '2022-04-04'),
(29, 'CC', 125487, 'alexander', ' MILLAN', 0, 'null', '125487', '646c62848819a0cce27938a3979d636e', 1, 8, '2022-04-04', '2022-04-04'),
(30, 'CC', 129988777, 'alexs', 'ander', 0, 'null', '129988777', 'd0a654e39a72b05360c3eb382c377031', 1, 8, '2022-04-04', '2022-04-04'),
(31, 'CC', 1299887778, 'alexs', 'ander', 0, 'null', '1299887778', '6eba2c73b8ef373ff148318f97380cd6', 1, 8, '2022-04-04', '2022-04-04'),
(32, 'CC', 15963, 'user 1', 'pruebaloi', 1111110, 'INFO@INFO.COM1', '15963', '8ddcff3a80f4189ca1c9d4d902c3c909', 0, 2, '2022-04-18', '2022-05-03'),
(33, 'CC', 99999, 'alexander', ' MILLAN', 0, 'null', '99999', 'd3eb9a9233e52948740d7eb8c3062d14', 1, 8, '2022-04-20', '2022-04-20'),
(38, 'CC', 789, '--WUIGOO--', '--WUIGOO--', 65555555, 'INFO1@INFO.COM', '789', '69973c4700dc33fa46226ae14e7f22bb', 1, 1, '2022-05-03', '2022-05-03'),
(39, 'CC', 78945, '--WUIGOO--', '--WUIGOO--', 6555563, 'INFO1@INFO.COM', '78945', '69973c4700dc33fa46226ae14e7f22bb', 1, 1, '2022-05-03', '2022-05-03'),
(40, 'CC', 789456321, '--WUIGOO--', '--WUIGOO--', 65555555, 'INFO1@INFO.COM', '789456321', '69973c4700dc33fa46226ae14e7f22bb', 1, 2, '2022-05-03', '2022-05-03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_cliente_id` (`tipo_cliente_id`);

--
-- Indices de la tabla `clientes_procesos`
--
ALTER TABLE `clientes_procesos`
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `proceso_id` (`proceso_id`);

--
-- Indices de la tabla `etapas`
--
ALTER TABLE `etapas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `objetivos`
--
ALTER TABLE `objetivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `plantillas`
--
ALTER TABLE `plantillas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `tipo_clientes`
--
ALTER TABLE `tipo_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_usuario` (`tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `etapas`
--
ALTER TABLE `etapas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `objetivos`
--
ALTER TABLE `objetivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `plantillas`
--
ALTER TABLE `plantillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_clientes`
--
ALTER TABLE `tipo_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`tipo_cliente_id`) REFERENCES `tipo_clientes` (`id`);

--
-- Filtros para la tabla `clientes_procesos`
--
ALTER TABLE `clientes_procesos`
  ADD CONSTRAINT `clientes_procesos_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `clientes_procesos_ibfk_2` FOREIGN KEY (`proceso_id`) REFERENCES `procesos` (`id`);

--
-- Filtros para la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  ADD CONSTRAINT `seguimientos_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `seguimientos_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
