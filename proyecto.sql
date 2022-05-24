-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2022 a las 18:38:23
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
  `actividad` varchar(255) NOT NULL,
  `responsable` varchar(255) NOT NULL,
  `soporte` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `objetivo_id`, `actividad`, `responsable`, `soporte`) VALUES
(1, 1, 'Elaborar herramienta de Analisis interno y externo', '2', 'Analisis interno y externos'),
(2, 1, 'Realizar o validar Mision', '2', 'Mision'),
(3, 1, 'Realizar organigrama y mapa de proceso', '2', 'Mapa de proceso y organigrama'),
(4, 1, 'Realizar politica de calidad y  Partes interesadas', '2', 'Politica de calidad y partes interesadas'),
(5, 1, 'Elaborar Alcance del sistema de gestion.', '2', 'Alcance del sistema de gestion'),
(6, 1, 'Validar y asegurar el presupuesto', '2', 'Presupuesto'),
(7, 1, 'Elaborar el plan estrategico', '2', 'Plan estrategico'),
(8, 2, 'Realizar caracterizacion del proceso de Direccion', '2', 'Caracaterizacion '),
(9, 2, 'Realizar caracterizacion del proceso Administrativo', '1', 'Caracaterizacion '),
(10, 2, 'Realizar caracterizacion del proceso de Bienestar', '2', 'Caracaterizacion '),
(11, 2, 'Realizar caracterizacion del proceso Comercial', '4', 'Caracaterizacion '),
(12, 2, 'Realizar caracterizacion del proceso de Calidad', '7', 'Caracaterizacion '),
(13, 2, 'Realizar caracterizacion del proceso misional', '3', 'Caracaterizacion '),
(14, 3, 'Realizar Capacitacion en norma iso 9001', '5', 'Registro de formacion'),
(15, 4, 'Realizar capacitacion en control documental', '5', 'Registro de formacion'),
(16, 4, 'Creacion del comite de auditoria', '7', 'Acta de comite'),
(17, 5, 'Riesgos proceso de Direccion', '2', 'Matriz de riesgos'),
(18, 5, 'Riesgos proceso administrativo', '1', 'Matriz de riesgos'),
(19, 5, 'Riesgos proceso de Bienestar', '2', 'Matriz de riesgos'),
(20, 5, 'Riesgos proceso Comercial', '4', 'Matriz de riesgos'),
(21, 5, 'Riesgos proceso de Calidad', '7', 'Matriz de riesgos'),
(22, 5, 'Riesgos proceso Misional', '3', 'Matriz de riesgos'),
(23, 6, 'validar perfiles de cargo', '2', 'Perfiles de cargo'),
(24, 6, 'Realizar procedimiento Talento Humano', '2', 'Procedimiento'),
(25, 6, 'Evaluacion de competencias', '2', 'Evaluacion de competencia'),
(26, 6, 'Evaluacion de desempeno', '2', 'Evaluacion de desemepeno'),
(27, 6, 'Plan de formacion', '2', 'Planificacion de formacion'),
(28, 7, 'Realizar documentacion de proveedores', '1', 'Procedimiento'),
(29, 7, 'Evaluacion de proveedores', '1', 'Evaluacion proveedores y reevaluacion'),
(30, 7, 'Almacenamiento de informacion proveedores', '1', 'Carpeta de proveedores'),
(31, 8, 'Realizar procedimiento de compras', '1', 'Procedimiento'),
(32, 8, 'Solicitudes de compra', '1', 'Formato'),
(33, 8, 'Consolidar de compras', '1', 'Consolidado de compras'),
(34, 9, 'Realizar procedimiento de mantenimiento ', '1', 'Procedimiento'),
(35, 9, 'Ficha tecnica de equipos', '1', 'Fiche tecnica'),
(36, 9, 'Cronograma de mantenimiento', '1', 'Planeacion mantenimiento'),
(37, 10, 'Revision de proceso de direccion', '2', 'Revision por la direccion'),
(38, 10, 'Revision de proceso misional', '3', 'Procedimiento'),
(39, 10, 'Revision de proceso de bienestar', '2', 'Procedimiento'),
(40, 10, 'Revision de proceso comercial', '4', 'Procedimiento'),
(41, 10, 'Revision de proceso de calidad', '7', 'Procedimiento'),
(42, 10, 'Revision de proceso misional', '3', 'Procedimiento'),
(43, 11, 'Realizar trazabilidad de servicios o productos', '3', 'Procedimiento'),
(44, 12, 'Satisfaccion de partes interesadas  PQRSF', '3', 'Procedimiento'),
(45, 13, 'Analizar datos', '5', 'Registro de formacion'),
(46, 13, 'Identificar fuente de datos por proceso ', '5', 'Registro de formacion'),
(47, 14, 'Realizacion de procedimiento servicios no conformes ', '5', 'Registro de formacion'),
(48, 14, 'Capacitar en servicios no conformes', '5', 'Registro de formacion'),
(49, 15, 'Realizar Indicadores por proceso', '5', 'Registro de formacion'),
(50, 15, 'Consolidar indicadores', '7', 'Matriz de indicadores'),
(51, 16, 'Proceso direccion', '2', 'Procedimiento'),
(52, 16, 'Proceso administrativo', '1', 'Procedimiento'),
(53, 16, 'Proceso bienestar', '2', 'Procedimiento'),
(54, 16, 'Proceso comercial', '4', 'Procedimiento'),
(55, 16, 'Proceso calidad', '7', 'Procedimiento'),
(56, 16, 'Proceso misional', '3', 'Procedimiento'),
(57, 17, 'Capacitar en revision por la direccion', '5', 'Registro de formacion'),
(58, 17, 'Realizar informe de revision por la direccion ', '2', 'Revision por la direccion'),
(59, 18, 'Capacitar en tratamiento de hallazgos y toma de acciones', '5', 'Registro de formacion'),
(60, 18, 'Realizar tratamiento de hallazgos y toma de acciones', '2', 'Cronograma de seguimiento'),
(61, 19, 'Capacitar en acciones correctivas', '5', 'Registro de formacion'),
(62, 19, 'Capacitar en acciones preventivas y de mejora', '5', 'Registro de formacion'),
(63, 19, 'Realizar informe de acciones Correctivas Preventivas y de Mejora', '7', 'Consolidado de accion'),
(64, 20, 'Solicitar visita', '7', 'solicitud'),
(65, 20, 'Preparar personal para visita', '5', 'Registro de formacion'),
(66, 21, 'Entrevista con el cliente para validar alcance de software', '2', 'null'),
(67, 21, 'Analizar contexto y determinar requerimientos', '2', 'null'),
(68, 21, 'Realizar reunion para validar requerimientos con el cliente', '2', 'null'),
(69, 21, 'Definir recursos fisicos y tecnologicos se necesitan', '2', 'null'),
(70, 22, 'Establecer faces  y tareas', '2', 'null'),
(71, 22, 'Analisis de riesgo de los requerimientos', '2', 'null'),
(72, 23, 'Planificacion del diseno', '2', 'null'),
(73, 23, 'Entradas del diseno', '2', 'null'),
(74, 23, 'Elaboracion de diagramas USO', '2', 'null'),
(75, 23, 'Elaboracion de diagramas MER', '2', 'null'),
(76, 23, 'Elaboracion de diagramas CLASES', '2', 'null'),
(77, 23, 'Controles del diseno ', '2', 'null'),
(78, 23, 'Salidas del diseno ', '2', 'null'),
(79, 23, 'Cambios del diseno', '2', 'null'),
(80, 24, 'Desarrollo de la BD', '2', 'null'),
(81, 24, 'Elaboracion del MVC', '2', 'null'),
(82, 25, 'Analisis de vulnerabilidad', '2', 'Informe de vulnerabilidad'),
(83, 25, 'Control de proceso de pruebas (Aplicabilidad', '2', 'Informe de pruebas'),
(84, 26, 'Despliegue de la app', '2', 'null'),
(85, 26, 'Entrega de software', '2', 'null'),
(86, 26, 'Capacitacion de uso', '2', 'null'),
(87, 26, 'Acceso al manual de usuario', '2', 'null'),
(88, 26, 'Encuesta de satisfaccion', '2', 'null'),
(89, 27, 'Revisar plan estrategico', '2', 'null'),
(90, 27, 'Revisar partes interesadas', '2', 'null'),
(91, 27, 'Revisar vision', '2', 'null'),
(92, 27, 'Revisar politica y objetivos', '2', 'null'),
(93, 27, 'Comite de auditoria', '2', 'Registro de formacion'),
(94, 28, 'Realizar capacitacion iso 9001', '5', 'Registro de formacion'),
(95, 28, 'Realizar capacitacion Norma especifica', '5', 'Registro de formacion'),
(96, 28, 'Realizar revision de documentos', '7', 'Informe del sistema'),
(97, 28, 'Realizar Capacitacion auditoria interna', '5', 'Registro de formacion'),
(98, 29, 'Revision de proceso de direccion', '2', 'Procedimiento'),
(99, 29, 'Revision de proceso administrativo', '1', 'Procedimiento'),
(100, 29, 'Revision de proceso de bienestar', '2', 'Procedimiento'),
(101, 29, 'Revision de proceso comercial', '4', 'Procedimiento'),
(102, 29, 'Revision de proceso de calidad', '7', 'Procedimiento'),
(103, 29, 'Revision de proceso mision', '3', 'Procedimiento'),
(104, 29, 'Realizar auditoria interna', '7', 'Informe de auditoria'),
(105, 29, 'Revisar indicadores', '2', 'Matriz de indicadores'),
(106, 29, 'Comite de auditoria', '2', 'Acta de comite'),
(107, 30, 'Seguimiento a no conformidades proceso directivo', '2', 'Cronograma de seguimiento'),
(108, 30, 'Seguimiento a no conformidades proceso administrativo', '1', 'Cronograma de seguimiento'),
(109, 30, 'Seguimiento a no conformidades proceso de bienestar', '2', 'Cronograma de seguimiento'),
(110, 30, 'Seguimiento a no conformidades proceso comercial', '4', 'Cronograma de seguimiento'),
(111, 30, 'Seguimiento a no conformidades proceso de calidad', '7', 'Cronograma de seguimiento'),
(112, 30, 'Seguimiento a no conformidades proceso misional', '3', 'Cronograma de seguimiento'),
(113, 31, 'Riesgos proceso de Direccion', '2', 'Matriz de riesgos'),
(114, 31, 'Riesgos proceso administrativo', '1', 'Matriz de riesgos'),
(115, 31, 'Riesgos proceso de Bienestar', '2', 'Matriz de riesgos'),
(116, 31, 'Riesgos proceso Comercial', '4', 'Matriz de riesgos'),
(117, 31, 'Riesgos proceso de Calidad', '7', 'Matriz de riesgos'),
(118, 31, 'Riesgos proceso Misional', '3', 'Matriz de riesgos'),
(119, 31, 'Seguimiento de acciones correctivas y de mejora proceso de direccion', '2', 'Cronograma de seguimiento'),
(120, 31, 'Seguimiento de acciones correctivas y de mejora proceso administrativo', '1', 'Cronograma de seguimiento'),
(121, 31, 'Seguimiento de acciones correctivas y de mejora proceso comercial', '4', 'Cronograma de seguimiento'),
(122, 31, 'Seguimiento de acciones correctivas y de mejora proceso de bienestar', '2', 'Cronograma de seguimiento'),
(123, 31, 'Seguimiento de acciones correctivas y de mejora proceso de calidad', '7', 'Cronograma de seguimiento'),
(124, 31, 'Seguimiento de acciones correctivas y de mejora proceso misional', '3', 'Cronograma de seguimiento'),
(125, 31, 'Comite de auditoria', '2', 'Acta de comite');

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
(8, '', '', '', 0, 0, '', '', '', '', 1, 1),
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
(20, 'FERTILITY CARE', '', '', 0, 0, 'BARRANQUILLA', 'Alto', '', '', 1, 3),
(21, 'ColomboJaponesa', '', 'educacion@colombojaponesa.com', 3176431963, 901202174, 'Bogotá, avenida carrera 70 # 103-25', 'Alto', 'Certificación', 'Redes', 1, 3);

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
-- Estructura de tabla para la tabla `compromisos`
--

CREATE TABLE `compromisos` (
  `id` int(11) NOT NULL,
  `horario_id` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL COMMENT '1=cumple\r\n, 0=no cumple'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `proceso_id` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `contacto` bigint(20) NOT NULL,
  `correo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`id`, `cliente_id`, `proceso_id`, `nombres`, `apellidos`, `contacto`, `correo`) VALUES
(1, 21, 2, 'Ninfer', 'Betancourt', 3176431963, 'educacion@colombojaponesa.com'),
(2, 21, 1, 'Elizabeth ', 'Ortiz Alarcon', 3160232388, 'gerente.admon@colombojaponesa.com'),
(3, 21, 3, 'Kana ', 'Kimura', 3208621896, 'kana.kimura@colombojaponesa.com'),
(4, 21, 4, 'Zaida ', 'Lombana', 3183385157, 'zaida.lombana@colombojaponesa.com'),
(5, 21, 5, 'Carolina ', 'Mogollón', 0, 'carolina.mogollon@colombojaponesa.com'),
(6, 21, 7, 'MILENA ', 'VEGA', 123, 'milena.vega@colombojaponesa.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas`
--

CREATE TABLE `etapas` (
  `id` int(11) NOT NULL,
  `plantilla_id` int(11) NOT NULL,
  `notacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `etapas`
--

INSERT INTO `etapas` (`id`, `plantilla_id`, `notacion`) VALUES
(1, 1, 'CONTEXTO'),
(2, 1, 'LIDERAZGO'),
(3, 1, 'RIESGOS'),
(4, 1, 'RECURSOS O APOYO'),
(5, 1, 'OPERACIÓN MISIONAL'),
(6, 1, 'DESEMPEÑO DE PROCESO'),
(7, 1, 'MEJORA'),
(8, 2, 'PLANIFICACION'),
(9, 2, 'ANALISIS Y DATOS'),
(10, 2, 'DISEÑO'),
(11, 2, 'DESARROLLO'),
(12, 2, 'SIMULACION'),
(13, 2, 'ENTREGA'),
(14, 3, 'CONTEXTO'),
(15, 3, 'LIDERAZGO'),
(16, 3, 'DESEMPEÑO DE PROCESO'),
(17, 3, 'RIESGOS'),
(18, 3, 'MEJORA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapa_plantillas`
--

CREATE TABLE `etapa_plantillas` (
  `id` int(11) NOT NULL,
  `etapa_id` int(11) NOT NULL,
  `proyecto_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `dia` varchar(10) NOT NULL,
  `hora1` time NOT NULL,
  `hora2` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `etapa_plantillas`
--

INSERT INTO `etapa_plantillas` (`id`, `etapa_id`, `proyecto_id`, `fecha`, `dia`, `hora1`, `hora2`) VALUES
(1, 8, 2, '2022-05-04', 'Miercoles', '08:00:00', '11:00:00'),
(2, 8, 2, '2022-05-11', 'Miercoles', '08:00:00', '11:00:00'),
(3, 8, 2, '2022-05-18', 'Miercoles', '08:00:00', '11:00:00'),
(4, 9, 2, '2022-07-01', 'Viernes', '08:00:00', '12:00:00'),
(5, 9, 2, '2022-07-02', 'Sabado', '08:00:00', '12:00:00'),
(6, 9, 2, '2022-07-05', 'Martes', '08:00:00', '12:00:00'),
(7, 9, 2, '2022-07-08', 'Viernes', '08:00:00', '12:00:00'),
(8, 9, 2, '2022-07-09', 'Sabado', '08:00:00', '12:00:00'),
(9, 9, 2, '2022-07-12', 'Martes', '08:00:00', '12:00:00'),
(10, 9, 2, '2022-07-15', 'Viernes', '08:00:00', '12:00:00'),
(11, 9, 2, '2022-07-16', 'Sabado', '08:00:00', '12:00:00'),
(12, 9, 2, '2022-07-19', 'Martes', '08:00:00', '12:00:00'),
(13, 9, 2, '2022-07-22', 'Viernes', '08:00:00', '12:00:00'),
(14, 9, 2, '2022-07-23', 'Sabado', '08:00:00', '12:00:00'),
(15, 9, 2, '2022-07-26', 'Martes', '08:00:00', '12:00:00'),
(16, 9, 2, '2022-07-29', 'Viernes', '08:00:00', '12:00:00'),
(17, 9, 2, '2022-07-30', 'Sabado', '08:00:00', '12:00:00'),
(18, 9, 2, '2022-08-02', 'Martes', '08:00:00', '12:00:00'),
(19, 9, 2, '2022-08-05', 'Viernes', '08:00:00', '12:00:00'),
(20, 9, 2, '2022-08-06', 'Sabado', '08:00:00', '12:00:00'),
(21, 9, 2, '2022-08-09', 'Martes', '08:00:00', '12:00:00'),
(22, 9, 2, '2022-08-12', 'Viernes', '08:00:00', '12:00:00'),
(23, 9, 2, '2022-08-13', 'Sabado', '08:00:00', '12:00:00'),
(24, 9, 2, '2022-08-16', 'Martes', '08:00:00', '12:00:00'),
(25, 9, 2, '2022-08-19', 'Viernes', '08:00:00', '12:00:00'),
(26, 9, 2, '2022-08-20', 'Sabado', '08:00:00', '12:00:00'),
(27, 9, 2, '2022-08-23', 'Martes', '08:00:00', '12:00:00'),
(28, 9, 2, '2022-08-26', 'Viernes', '08:00:00', '12:00:00'),
(29, 9, 2, '2022-08-27', 'Sabado', '08:00:00', '12:00:00'),
(30, 9, 2, '2022-08-30', 'Martes', '08:00:00', '12:00:00'),
(31, 1, 3, '2022-06-02', 'jueves', '10:00:00', '00:00:00'),
(32, 1, 3, '2022-06-07', 'Martes', '10:00:00', '00:00:00'),
(33, 1, 3, '2022-06-09', 'jueves', '10:00:00', '00:00:00'),
(34, 1, 3, '2022-06-14', 'Martes', '10:00:00', '00:00:00'),
(35, 1, 3, '2022-06-16', 'jueves', '10:00:00', '00:00:00'),
(36, 1, 3, '2022-06-21', 'Martes', '10:00:00', '00:00:00'),
(37, 1, 3, '2022-06-23', 'jueves', '10:00:00', '00:00:00'),
(38, 1, 3, '2022-06-02', 'jueves', '10:00:00', '00:00:00'),
(39, 1, 3, '2022-06-28', 'Martes', '10:00:00', '00:00:00'),
(40, 1, 3, '2022-06-07', 'Martes', '10:00:00', '00:00:00'),
(41, 1, 3, '2022-06-30', 'jueves', '10:00:00', '00:00:00'),
(42, 1, 3, '2022-06-09', 'jueves', '10:00:00', '00:00:00'),
(43, 1, 3, '2022-07-05', 'Martes', '10:00:00', '00:00:00'),
(44, 1, 3, '2022-06-14', 'Martes', '10:00:00', '00:00:00'),
(45, 1, 3, '2022-07-07', 'jueves', '10:00:00', '00:00:00'),
(46, 1, 3, '2022-06-16', 'jueves', '10:00:00', '00:00:00'),
(47, 1, 3, '2022-06-21', 'Martes', '10:00:00', '00:00:00'),
(48, 1, 3, '2022-06-23', 'jueves', '10:00:00', '00:00:00'),
(49, 1, 3, '2022-06-28', 'Martes', '10:00:00', '00:00:00'),
(50, 1, 3, '2022-06-30', 'jueves', '10:00:00', '00:00:00'),
(51, 1, 3, '2022-07-05', 'Martes', '10:00:00', '00:00:00'),
(52, 1, 3, '2022-07-07', 'jueves', '10:00:00', '00:00:00'),
(53, 3, 3, '2022-05-24', 'Martes', '08:00:00', '10:00:00'),
(54, 3, 3, '2022-05-24', 'Martes', '08:00:00', '10:00:00'),
(55, 3, 3, '2022-05-26', 'jueves', '08:00:00', '10:00:00'),
(56, 3, 3, '2022-05-26', 'jueves', '08:00:00', '10:00:00'),
(57, 3, 3, '2022-05-31', 'Martes', '08:00:00', '10:00:00'),
(58, 3, 3, '2022-05-31', 'Martes', '08:00:00', '10:00:00'),
(59, 3, 3, '2022-06-02', 'jueves', '08:00:00', '10:00:00'),
(60, 3, 3, '2022-06-02', 'jueves', '08:00:00', '10:00:00'),
(61, 3, 3, '2022-06-07', 'Martes', '08:00:00', '10:00:00'),
(62, 3, 3, '2022-06-07', 'Martes', '08:00:00', '10:00:00'),
(63, 3, 3, '2022-06-09', 'jueves', '08:00:00', '10:00:00'),
(64, 3, 3, '2022-06-09', 'jueves', '08:00:00', '10:00:00'),
(65, 3, 3, '2022-06-14', 'Martes', '08:00:00', '10:00:00'),
(66, 3, 3, '2022-06-14', 'Martes', '08:00:00', '10:00:00'),
(67, 3, 3, '2022-06-16', 'jueves', '08:00:00', '10:00:00'),
(68, 3, 3, '2022-06-16', 'jueves', '08:00:00', '10:00:00'),
(69, 3, 3, '2022-06-21', 'Martes', '08:00:00', '10:00:00'),
(70, 3, 3, '2022-06-21', 'Martes', '08:00:00', '10:00:00'),
(71, 3, 3, '2022-06-23', 'jueves', '08:00:00', '10:00:00'),
(72, 3, 3, '2022-06-23', 'jueves', '08:00:00', '10:00:00'),
(73, 3, 3, '2022-06-28', 'Martes', '08:00:00', '10:00:00'),
(74, 3, 3, '2022-06-28', 'Martes', '08:00:00', '10:00:00'),
(75, 3, 3, '2022-06-30', 'jueves', '08:00:00', '10:00:00'),
(76, 3, 3, '2022-06-30', 'jueves', '08:00:00', '10:00:00'),
(77, 3, 3, '2022-05-24', 'Martes', '08:00:00', '10:00:00'),
(78, 3, 3, '2022-05-26', 'jueves', '08:00:00', '10:00:00'),
(79, 3, 3, '2022-05-31', 'Martes', '08:00:00', '10:00:00'),
(80, 3, 3, '2022-06-02', 'jueves', '08:00:00', '10:00:00'),
(81, 3, 3, '2022-06-07', 'Martes', '08:00:00', '10:00:00'),
(82, 3, 3, '2022-06-09', 'jueves', '08:00:00', '10:00:00'),
(83, 3, 3, '2022-06-14', 'Martes', '08:00:00', '10:00:00'),
(84, 3, 3, '2022-06-16', 'jueves', '08:00:00', '10:00:00'),
(85, 3, 3, '2022-06-21', 'Martes', '08:00:00', '10:00:00'),
(86, 3, 3, '2022-06-23', 'jueves', '08:00:00', '10:00:00'),
(87, 3, 3, '2022-06-28', 'Martes', '08:00:00', '10:00:00'),
(88, 3, 3, '2022-06-30', 'jueves', '08:00:00', '10:00:00'),
(89, 4, 3, '2022-05-24', 'Martes', '08:00:00', '10:00:00'),
(90, 4, 3, '2022-05-26', 'jueves', '08:00:00', '10:00:00'),
(91, 4, 3, '2022-05-24', 'Martes', '08:00:00', '10:00:00'),
(92, 4, 3, '2022-05-26', 'jueves', '08:00:00', '10:00:00'),
(93, 1, 1, '2022-03-31', 'jueves', '10:00:00', '00:00:00'),
(94, 1, 1, '2022-04-05', 'Martes', '10:00:00', '00:00:00'),
(95, 1, 1, '2022-04-07', 'jueves', '10:00:00', '00:00:00'),
(96, 1, 1, '2022-04-12', 'Martes', '10:00:00', '00:00:00'),
(97, 1, 1, '2022-04-14', 'jueves', '10:00:00', '00:00:00'),
(98, 1, 1, '2022-04-19', 'Martes', '10:00:00', '00:00:00'),
(99, 1, 1, '2022-04-21', 'jueves', '10:00:00', '00:00:00'),
(100, 1, 1, '2022-04-26', 'Martes', '10:00:00', '00:00:00'),
(101, 1, 1, '2022-04-28', 'jueves', '10:00:00', '00:00:00'),
(102, 1, 1, '2022-05-03', 'Martes', '10:00:00', '00:00:00'),
(103, 1, 1, '2022-05-05', 'jueves', '10:00:00', '00:00:00'),
(104, 2, 1, '2022-04-19', 'Martes', '10:00:00', '11:59:00'),
(105, 2, 1, '2022-04-21', 'jueves', '10:00:00', '11:59:00'),
(106, 2, 1, '2022-04-26', 'Martes', '10:00:00', '11:59:00'),
(107, 2, 1, '2022-04-28', 'jueves', '10:00:00', '11:59:00'),
(108, 2, 1, '2022-05-03', 'Martes', '10:00:00', '11:59:00'),
(109, 2, 1, '2022-05-05', 'jueves', '10:00:00', '11:59:00'),
(110, 2, 1, '2022-05-10', 'Martes', '10:00:00', '11:59:00'),
(111, 2, 1, '2022-05-12', 'jueves', '10:00:00', '11:59:00'),
(112, 2, 1, '2022-05-17', 'Martes', '10:00:00', '11:59:00'),
(113, 2, 1, '2022-05-19', 'jueves', '10:00:00', '11:59:00'),
(114, 2, 1, '2022-05-24', 'Martes', '10:00:00', '11:59:00'),
(115, 2, 1, '2022-05-26', 'jueves', '10:00:00', '11:59:00'),
(116, 2, 1, '2022-05-31', 'Martes', '10:00:00', '11:59:00'),
(117, 2, 1, '2022-06-02', 'jueves', '10:00:00', '11:59:00'),
(118, 2, 1, '2022-06-07', 'Martes', '10:00:00', '11:59:00'),
(119, 2, 1, '2022-06-09', 'jueves', '10:00:00', '11:59:00'),
(120, 2, 1, '2022-06-14', 'Martes', '10:00:00', '11:59:00'),
(121, 2, 1, '2022-06-16', 'jueves', '10:00:00', '11:59:00'),
(122, 3, 1, '2022-05-17', 'Martes', '10:00:00', '12:00:00'),
(123, 3, 1, '2022-05-19', 'jueves', '10:00:00', '12:00:00'),
(124, 3, 1, '2022-05-24', 'Martes', '10:00:00', '12:00:00'),
(125, 3, 1, '2022-05-26', 'jueves', '10:00:00', '12:00:00'),
(126, 3, 1, '2022-05-31', 'Martes', '10:00:00', '12:00:00'),
(127, 3, 1, '2022-06-02', 'jueves', '10:00:00', '12:00:00'),
(128, 3, 1, '2022-06-07', 'Martes', '10:00:00', '12:00:00'),
(129, 3, 1, '2022-06-09', 'jueves', '10:00:00', '12:00:00'),
(130, 3, 1, '2022-06-14', 'Martes', '10:00:00', '12:00:00'),
(131, 3, 1, '2022-05-17', 'Martes', '10:00:00', '12:00:00'),
(132, 3, 1, '2022-05-19', 'jueves', '10:00:00', '12:00:00'),
(133, 3, 1, '2022-05-24', 'Martes', '10:00:00', '12:00:00'),
(134, 3, 1, '2022-05-26', 'jueves', '10:00:00', '12:00:00'),
(135, 3, 1, '2022-05-31', 'Martes', '10:00:00', '12:00:00'),
(136, 3, 1, '2022-06-02', 'jueves', '10:00:00', '12:00:00'),
(137, 3, 1, '2022-06-07', 'Martes', '10:00:00', '12:00:00'),
(138, 3, 1, '2022-06-09', 'jueves', '10:00:00', '12:00:00'),
(139, 3, 1, '2022-06-14', 'Martes', '10:00:00', '12:00:00'),
(140, 3, 1, '2022-05-17', 'Martes', '10:00:00', '12:00:00'),
(141, 3, 1, '2022-05-19', 'jueves', '10:00:00', '12:00:00'),
(142, 3, 1, '2022-05-24', 'Martes', '10:00:00', '12:00:00'),
(143, 3, 1, '2022-05-26', 'jueves', '10:00:00', '12:00:00'),
(144, 3, 1, '2022-05-31', 'Martes', '10:00:00', '12:00:00'),
(145, 3, 1, '2022-06-02', 'jueves', '10:00:00', '12:00:00'),
(146, 3, 1, '2022-06-07', 'Martes', '10:00:00', '12:00:00'),
(147, 3, 1, '2022-06-09', 'jueves', '10:00:00', '12:00:00'),
(148, 3, 1, '2022-06-14', 'Martes', '10:00:00', '12:00:00'),
(149, 4, 1, '2022-06-16', 'jueves', '08:00:00', '12:00:00'),
(150, 4, 1, '2022-06-16', 'jueves', '08:00:00', '12:00:00'),
(151, 4, 1, '2022-06-21', 'Martes', '08:00:00', '12:00:00'),
(152, 4, 1, '2022-06-21', 'Martes', '08:00:00', '12:00:00'),
(153, 4, 1, '2022-06-23', 'jueves', '08:00:00', '12:00:00'),
(154, 4, 1, '2022-06-23', 'jueves', '08:00:00', '12:00:00'),
(155, 4, 1, '2022-06-28', 'Martes', '08:00:00', '12:00:00'),
(156, 4, 1, '2022-06-28', 'Martes', '08:00:00', '12:00:00'),
(157, 4, 1, '2022-06-30', 'jueves', '08:00:00', '12:00:00'),
(158, 4, 1, '2022-06-30', 'jueves', '08:00:00', '12:00:00'),
(159, 4, 1, '2022-07-05', 'Martes', '08:00:00', '12:00:00'),
(160, 4, 1, '2022-07-05', 'Martes', '08:00:00', '12:00:00'),
(161, 4, 1, '2022-07-07', 'jueves', '08:00:00', '12:00:00'),
(162, 4, 1, '2022-07-07', 'jueves', '08:00:00', '12:00:00'),
(163, 4, 1, '2022-07-12', 'Martes', '08:00:00', '12:00:00'),
(164, 4, 1, '2022-07-12', 'Martes', '08:00:00', '12:00:00'),
(165, 4, 1, '2022-07-14', 'jueves', '08:00:00', '12:00:00'),
(166, 4, 1, '2022-07-14', 'jueves', '08:00:00', '12:00:00'),
(167, 5, 1, '2022-07-19', 'Martes', '08:00:00', '12:00:00'),
(168, 5, 1, '2022-07-21', 'jueves', '08:00:00', '12:00:00'),
(169, 5, 1, '2022-07-26', 'Martes', '08:00:00', '12:00:00'),
(170, 5, 1, '2022-07-28', 'jueves', '08:00:00', '12:00:00'),
(171, 5, 1, '2022-08-02', 'Martes', '08:00:00', '12:00:00'),
(172, 5, 1, '2022-08-04', 'jueves', '08:00:00', '12:00:00'),
(173, 5, 1, '2022-08-09', 'Martes', '08:00:00', '12:00:00'),
(174, 5, 1, '2022-08-11', 'jueves', '08:00:00', '12:00:00'),
(175, 5, 1, '2022-08-16', 'Martes', '08:00:00', '12:00:00'),
(176, 6, 1, '2022-08-18', 'jueves', '08:00:00', '12:00:00'),
(177, 6, 1, '2022-08-23', 'Martes', '08:00:00', '12:00:00'),
(178, 6, 1, '2022-08-25', 'jueves', '08:00:00', '12:00:00'),
(179, 6, 1, '2022-08-30', 'Martes', '08:00:00', '12:00:00'),
(180, 6, 1, '2022-09-01', 'jueves', '08:00:00', '12:00:00'),
(181, 6, 1, '2022-09-06', 'Martes', '08:00:00', '12:00:00'),
(182, 6, 1, '2022-09-08', 'jueves', '08:00:00', '12:00:00'),
(183, 6, 1, '2022-09-13', 'Martes', '08:00:00', '12:00:00'),
(184, 6, 1, '2022-09-15', 'jueves', '08:00:00', '12:00:00'),
(185, 6, 1, '2022-09-15', 'jueves', '08:00:00', '12:00:00'),
(186, 6, 1, '2022-09-20', 'Martes', '08:00:00', '12:00:00'),
(187, 6, 1, '2022-09-22', 'jueves', '08:00:00', '12:00:00'),
(188, 6, 1, '2022-09-27', 'Martes', '08:00:00', '12:00:00'),
(189, 6, 1, '2022-09-15', 'jueves', '08:00:00', '12:00:00'),
(190, 6, 1, '2022-09-29', 'jueves', '08:00:00', '12:00:00'),
(191, 6, 1, '2022-09-20', 'Martes', '08:00:00', '12:00:00'),
(192, 6, 1, '2022-10-04', 'Martes', '08:00:00', '12:00:00'),
(193, 6, 1, '2022-09-22', 'jueves', '08:00:00', '12:00:00'),
(194, 6, 1, '2022-10-06', 'jueves', '08:00:00', '12:00:00'),
(195, 6, 1, '2022-09-27', 'Martes', '08:00:00', '12:00:00'),
(196, 6, 1, '2022-10-11', 'Martes', '08:00:00', '12:00:00'),
(197, 6, 1, '2022-09-29', 'jueves', '08:00:00', '12:00:00'),
(198, 6, 1, '2022-10-13', 'jueves', '08:00:00', '12:00:00'),
(199, 6, 1, '2022-10-04', 'Martes', '08:00:00', '12:00:00'),
(200, 6, 1, '2022-10-06', 'jueves', '08:00:00', '12:00:00'),
(201, 6, 1, '2022-10-11', 'Martes', '08:00:00', '12:00:00'),
(202, 6, 1, '2022-10-13', 'jueves', '08:00:00', '12:00:00'),
(203, 7, 1, '2022-09-15', 'jueves', '08:00:00', '12:00:00'),
(204, 7, 1, '2022-09-20', 'Martes', '08:00:00', '12:00:00'),
(205, 7, 1, '2022-09-22', 'jueves', '08:00:00', '12:00:00'),
(206, 7, 1, '2022-09-27', 'Martes', '08:00:00', '12:00:00'),
(207, 7, 1, '2022-09-29', 'jueves', '08:00:00', '12:00:00'),
(208, 7, 1, '2022-10-04', 'Martes', '08:00:00', '12:00:00'),
(209, 7, 1, '2022-10-06', 'jueves', '08:00:00', '12:00:00'),
(210, 7, 1, '2022-10-11', 'Martes', '08:00:00', '12:00:00'),
(211, 7, 1, '2022-10-13', 'jueves', '08:00:00', '12:00:00'),
(212, 7, 1, '2022-10-18', 'Martes', '08:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `dia` varchar(255) NOT NULL,
  `hora1` time NOT NULL,
  `hora2` time NOT NULL,
  `etapa_plantilla_id` int(11) NOT NULL,
  `actividad_id` int(11) NOT NULL,
  `proyecto_id` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `fecha`, `dia`, `hora1`, `hora2`, `etapa_plantilla_id`, `actividad_id`, `proyecto_id`, `estado`) VALUES
(8, '2022-04-19', 'Martes', '10:00:00', '12:00:00', 2, 8, 1, 0),
(9, '2022-04-21', 'jueves', '10:00:00', '12:00:00', 2, 9, 1, 0),
(10, '2022-04-26', 'Martes', '10:00:00', '12:00:00', 2, 10, 1, 0),
(11, '2022-04-28', 'jueves', '10:00:00', '12:00:00', 2, 11, 1, 0),
(12, '2022-05-03', 'Martes', '10:00:00', '12:00:00', 2, 12, 1, 0),
(13, '2022-05-05', 'jueves', '10:00:00', '12:00:00', 2, 13, 1, 0),
(14, '2022-05-10', 'Martes', '10:00:00', '12:00:00', 2, 14, 1, 0),
(15, '2022-05-12', 'jueves', '10:00:00', '12:00:00', 2, 15, 1, 0),
(16, '2022-05-17', 'Martes', '10:00:00', '12:00:00', 2, 16, 1, 0),
(17, '2022-08-18', 'jueves', '08:00:00', '09:00:00', 6, 45, 1, 0),
(18, '2022-08-18', 'jueves', '09:00:00', '12:00:00', 6, 46, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario_soportes`
--

CREATE TABLE `horario_soportes` (
  `id` int(11) NOT NULL,
  `horario_id` int(11) NOT NULL,
  `ruta_soporte` varchar(255) NOT NULL,
  `fecha_reg` datetime NOT NULL,
  `enlace` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 1, 'ESTRATEGICO'),
(2, 2, 'CARACTERIZACION DEL PROCESO'),
(3, 2, 'CONTROL DOCUMENTAL '),
(4, 2, ' CAPACITACIÓN  '),
(5, 3, 'RIESGOS DE PROCESO'),
(6, 4, 'TALENTO HUMANO'),
(7, 4, 'PROVEEDORES'),
(8, 4, 'COMPRAS'),
(9, 4, 'MANTENIMIENTO'),
(10, 5, 'REVISION DE PROCESOS'),
(11, 5, 'TRAZABILIDAD DE SERVICIOS O PRODUCTOS'),
(12, 5, 'SATISFACCION DE PARTES INTERESADAS'),
(13, 6, 'ANALISIS DE DATOS'),
(14, 6, 'SERVICIOS O PRODUCTOS NO CONFORMES'),
(15, 6, ' INDICADORES'),
(16, 6, 'AUDITORIA INTERNA'),
(17, 6, 'REVISION POR LA DIRECCION'),
(18, 7, 'TRATAMIENTO DE HALLAZGOS'),
(19, 7, 'ACCIONES CPM'),
(20, 7, 'AUDITORIA EXTERNA'),
(21, 8, 'PLANEACION DEL PROYECTO'),
(22, 9, 'ANALISIS DE SOFTWARE'),
(23, 10, 'DISEÑO DE SOFTWARE'),
(24, 11, 'DESARROLLO DE SOFTWARE'),
(25, 12, 'DESARROLLO DE PRUEBAS'),
(26, 13, 'IMPLEMENTACION'),
(27, 14, 'CONTEXTO'),
(28, 15, 'LIDERAZGO'),
(29, 16, 'DESEMPEÑO DE PROCESO'),
(31, 18, 'MEJORA'),
(32, 19, 'RIESGOS DE PROCESO');

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
(1, 'ISO 9001', '', '', '2022-05-06', '2022-05-06'),
(2, 'SOFTWARE', '', '', '2022-05-19', '2022-05-19'),
(3, 'MANTENIMIENTO', '', '', '2022-05-20', '2022-05-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `id` int(11) NOT NULL,
  `proceso` varchar(30) NOT NULL,
  `sigla` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`id`, `proceso`, `sigla`) VALUES
(1, 'ADMINISTRATIVO', 'PA'),
(2, 'DIRECTIVO', 'PD'),
(3, 'MISIONAL', 'PP'),
(4, 'COMERCIAL', 'PC'),
(5, 'BIENESTAR', 'PB'),
(6, 'OPERACIONAL', 'PO'),
(7, 'SISTEMA DE GESTION', 'PI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_cierre` date NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `plantilla_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombre`, `fecha_inicio`, `fecha_cierre`, `cliente_id`, `plantilla_id`) VALUES
(1, 'CERTIFICACIÓN', '2022-03-18', '2022-10-18', 21, 1);

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
(1, 'CC', 146966585, 'deve', 'loper', 3113368682, 'alexsanderorejuela@gmail.com', 'root', 'e77989ed21758e78331b20e477fc5582', 1, 4, '2022-03-14', '2022-04-01'),
(3, 'CE', 789456, 'Diana', 'Support', 123, '', '789456', '71b3b26aaa319e0cdf6fdb8429c112b0', 1, 4, '0000-00-00', '0000-00-00');

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
-- Indices de la tabla `compromisos`
--
ALTER TABLE `compromisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `etapas`
--
ALTER TABLE `etapas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `etapa_plantillas`
--
ALTER TABLE `etapa_plantillas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horario_soportes`
--
ALTER TABLE `horario_soportes`
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
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `compromisos`
--
ALTER TABLE `compromisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `etapas`
--
ALTER TABLE `etapas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `etapa_plantillas`
--
ALTER TABLE `etapa_plantillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=425;

--
-- AUTO_INCREMENT de la tabla `horario_soportes`
--
ALTER TABLE `horario_soportes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `objetivos`
--
ALTER TABLE `objetivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `plantillas`
--
ALTER TABLE `plantillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Filtros para la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  ADD CONSTRAINT `seguimientos_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `seguimientos_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
