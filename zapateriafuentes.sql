-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-11-2021 a las 16:37:11
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zapateriafuentes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `CVE_ADMINISTRADOR` int(11) NOT NULL,
  `RFC` varchar(30) DEFAULT NULL,
  `CONTRASENA_ADM` varchar(20) DEFAULT NULL,
  `ROL` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`CVE_ADMINISTRADOR`, `RFC`, `CONTRASENA_ADM`, `ROL`) VALUES
(6, 'EDVT900403NH4', 'Evidal77', 'Administrador'),
(7, 'AALE020731QU6', 'Ana1624', 'Administrador'),
(8, 'FUJA020829HTC', 'Vyron2908', 'Administrador'),
(9, 'GOPE870822218', 'Gos9823', 'Administrador'),
(58, 'FJAKS01212', 'hola2', 'Empleado'),
(64, 'FJ234452344', 'yesi2', 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `CVE_CARRITO` int(11) NOT NULL,
  `CVE_MEMBRESIA` int(11) DEFAULT NULL,
  `CVE_ZAPATO` varchar(10) DEFAULT NULL,
  `CVE_TALLAS` varchar(10) DEFAULT NULL,
  `CANTIDAD` int(11) DEFAULT NULL,
  `TOTAL_PROD` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`CVE_CARRITO`, `CVE_MEMBRESIA`, `CVE_ZAPATO`, `CVE_TALLAS`, `CANTIDAD`, `TOTAL_PROD`) VALUES
(322, 1, '/1H026', '/A01U2', 4, 2000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `CVE_MEMBRESIA` int(11) NOT NULL,
  `VIGENCIA` date DEFAULT NULL,
  `CONTRASENA_CLI` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`CVE_MEMBRESIA`, `VIGENCIA`, `CONTRASENA_CLI`) VALUES
(1, '2023-01-10', 'hola'),
(2, '2022-03-22', 'Ana89313'),
(3, '2023-07-24', 'EdLO99'),
(4, '2021-12-10', 'JoPeAl99'),
(5, '2022-08-14', 'AxelDE99'),
(48, '2023-12-31', '1234UTTAB'),
(73, '2023-12-31', 'hola5'),
(74, '2023-12-31', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `CVE_COLOR` varchar(10) NOT NULL,
  `NOMBRE_COLOR` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`CVE_COLOR`, `NOMBRE_COLOR`) VALUES
('/001A1', 'Marino/Rojo'),
('/001A2', 'Lavanda'),
('/002B2', 'Cafe'),
('/002B3', 'Azul'),
('/003C3', 'Negro/Rojo'),
('/003C6', 'Rosa'),
('/004D4', 'Rojo'),
('/005E5', 'Ferrero/Cafe'),
('/0Z2B3', 'Plateado'),
('/1E010', 'Negro/Amarillo'),
('/1F011', 'Blanco'),
('/1FF10', 'Gris'),
('/1FFF0', 'Negro/Gris'),
('/1G008', 'Carmel'),
('/1G012', 'Morado'),
('/1H009', 'Negro/Fiusha'),
('/1I010', 'Negros'),
('/1J011', 'Oxford/Morado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE `domicilios` (
  `CVE_DOMICILIO` int(11) NOT NULL,
  `NOMBRE_MUNICIPIO` varchar(80) DEFAULT NULL,
  `NOMBRE_COLONIA` varchar(20) DEFAULT NULL,
  `CALLE` varchar(20) DEFAULT NULL,
  `NUM_INT` varchar(20) DEFAULT NULL,
  `NUM_EXT` varchar(30) DEFAULT NULL,
  `CP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `domicilios`
--

INSERT INTO `domicilios` (`CVE_DOMICILIO`, `NOMBRE_MUNICIPIO`, `NOMBRE_COLONIA`, `CALLE`, `NUM_INT`, `NUM_EXT`, `CP`) VALUES
(1, 'Balancán', 'Acatempan', 'Calle Plan de Iguala', '32', '45', 86930),
(2, 'Cunduacán', 'Amado Gómez', 'Miguel Hidalgo', '12', '23', 86690),
(3, 'Jalpa de Méndez', 'Chacalapa 1a Secc', 'Barrio San Luis', '20', '20', 86752),
(4, 'Centla', 'Arauz Quintín Nueva ', 'Cuauhtémoc', '35', '40', 86200),
(5, 'Cárdenas', 'Agua Sol', 'Simon Sarlat', '10', '12', 86200),
(6, 'Balancán', 'Agricultores Del Nor', 'Correa 4ta', '14', '14', 86935),
(7, 'Cunduacán', 'Anta y Culico', 'Barrio Emiliano Zapa', 'Na', '34', 86690),
(8, 'Huimanguillo', 'Antonio Zamora Arrio', 'Cucuyula 3ra', '20', '18', 86190),
(9, 'Centro', 'Medellin y Pigua 3a ', 'Sector La paz', '69', '58', 86276),
(51, 'Centro', 'Medellin Y pigua 3ra', 'Sector la Paz', '3', '58', 86280),
(61, 'Centro', 'Medellin Y pigua 3ra', 'sdsdsds', '20', '24', 86277),
(67, 'Paraíso', 'sdsdsdsd', 'sector ya', '50', '69', 72342),
(76, 'Nacajuca', 'qqwqwqw', 'sdsdsds', '12', '42', 42412),
(77, 'Jalpa de Méndez', 'Colima', 'suarez', '34', 'Na', 86347);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `CVE_MARCAS` varchar(10) NOT NULL,
  `CVE_PROVEEDOR` varchar(10) DEFAULT NULL,
  `NOMBRE_MARCAS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`CVE_MARCAS`, `CVE_PROVEEDOR`, `NOMBRE_MARCAS`) VALUES
('/1A001', '/1C010', 'Nike'),
('/1A122', '/1B010', 'National Geographic'),
('/1A222', '/1B010', 'Chiflados'),
('/1B002', '/1C010', 'Adidas'),
('/1C003', '/1D011', 'Miracol by Mama lola'),
('/1C016', '/1G014', 'Destroyer'),
('/1D004', '/1D011', 'Puma'),
('/1D017', '/1H015', 'Halogen'),
('/1E005', '/1E012', 'Pirma'),
('/1E018', '/1H015', 'Custom Style'),
('/1F010', '/1E012', 'Suns'),
('/1F019', '/1I016', 'Steel Boost'),
('/1G011', '/1F013', 'Lili Mill'),
('/1G020', '/1I016', 'Minis Nice'),
('/1G099', '/1G014', 'Real Jungle'),
('/1H012', '/1F013', 'Diogga'),
('/1H021', '/1J017', 'Qatar'),
('/1I022', '/1J017', 'American Fire'),
('/1J023', '/1A009', 'Tropicana'),
('/1Z101', '/1A009', 'Trencitas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `CVE_PEDIDO` int(11) NOT NULL,
  `CVE_MEMBRESIA` int(11) DEFAULT NULL,
  `CVE_ZAPATO` varchar(10) DEFAULT NULL,
  `CVE_TALLAS` varchar(10) DEFAULT NULL,
  `CANTIDAD` int(11) DEFAULT NULL,
  `TOTAL_PROD` int(11) DEFAULT NULL,
  `SUBTOTAL` int(11) DEFAULT NULL,
  `TOTAL` int(11) DEFAULT NULL,
  `FECHA_COMPRA` date DEFAULT NULL,
  `PLAZO_GARANTIA` date DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL,
  `NUM_PED` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`CVE_PEDIDO`, `CVE_MEMBRESIA`, `CVE_ZAPATO`, `CVE_TALLAS`, `CANTIDAD`, `TOTAL_PROD`, `SUBTOTAL`, `TOTAL`, `FECHA_COMPRA`, `PLAZO_GARANTIA`, `STATUS`, `NUM_PED`) VALUES
(357, 48, '/1C021', '/A01T8', 4, 1916, 2813, 2813, '2021-11-15', '2022-07-29', 'Sucursal', '7SX57844R7100015F'),
(358, 48, '/A12Z8', '/A01R8', 3, 897, 2813, 2813, '2021-11-15', '2022-07-29', 'Sucursal', '7SX57844R7100015F'),
(359, 2, '/1C020', '/A01T2', 4, 1240, 1539, 1539, '2021-11-15', '2022-07-29', 'Sucursal', '5AD89356YY214563W'),
(360, 2, '/A12Z8', '/A01R8', 1, 299, 1539, 1539, '2021-11-15', '2022-07-29', 'Sucursal', '5AD89356YY214563W');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `CVE_PROVEEDOR` varchar(10) NOT NULL,
  `RFC` varchar(20) DEFAULT NULL,
  `NOMBRE_PROVEEDOR` varchar(30) DEFAULT NULL,
  `NUM_TELEFONO_PRO` int(11) DEFAULT NULL,
  `CORREO_PRO` varchar(80) DEFAULT NULL,
  `APELLIDO_PAT_PRO` varchar(50) DEFAULT NULL,
  `APELLIDO_MAT_PRO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`CVE_PROVEEDOR`, `RFC`, `NOMBRE_PROVEEDOR`, `NUM_TELEFONO_PRO`, `CORREO_PRO`, `APELLIDO_PAT_PRO`, `APELLIDO_MAT_PRO`) VALUES
('/1A009', 'FIHO870531FW8', 'Oscar', 2147483647, 'FIGUEHDZOSCAR@gmail.com', 'Figueroa', 'Hernandez'),
('/1B010', 'GACR900731A36', 'Rodrigo', 2147483647, 'GARCIADLCRODRI@gmail.com', 'Garcia', 'De La Cruz'),
('/1C010', 'AOGJ8612103Q9', 'Carlos', 2147483647, 'ACOPAGARCIAJUAN@gmail.com', 'Acopa', 'Garcia'),
('/1D011', 'AALE020731QU6', 'Enya', 2147483647, 'ALAMILLALOPEZENYA@gmail.com', 'Alamilla', 'Lopez'),
('/1E012', 'AARX900403NH4', 'Xiomara', 2147483647, 'ALVARADORIOSXIOMARA@gmail.com', 'Alvarado', 'Rios'),
('/1F013', 'AIMA861201LD4', 'Eduardo', 2147483647, 'ARIASMOLINANGEL@gmail.com', 'Arias', 'Molina'),
('/1G014', 'CEGD9111065Y6', 'Diego', 2147483647, 'CERINOGARCIADIEGO@gmail.com', 'Cerino', 'Garcia'),
('/1H015', 'CEGX880125HK8', 'Ximena', 2147483647, 'CERONGOMEZXIMENA@gmail.com', 'Ceron', 'Gomez'),
('/1I016', 'COAA890711M32', 'Alexander', 2147483647, 'CORTAZARALEX@gmail.com', 'Cortazar', 'Aquino'),
('/1J017', 'OIFR900212Q63', 'Francisco', 2147483647, 'DLOIZQFRANCIS@gmail.com', 'De La O', 'Izquierdo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallas`
--

CREATE TABLE `tallas` (
  `CVE_TALLAS` varchar(10) NOT NULL,
  `NUM_TALLAS` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tallas`
--

INSERT INTO `tallas` (`CVE_TALLAS`, `NUM_TALLAS`) VALUES
('/A01R2', 12),
('/A01R3', 12.5),
('/A01R4', 13),
('/A01R5', 13.5),
('/A01R6', 14),
('/A01R7', 14.5),
('/A01R8', 15),
('/A01R9', 15.5),
('/A01S0', 16),
('/A01S1', 16.5),
('/A01S2', 17),
('/A01S3', 17.5),
('/A01S4', 18),
('/A01S5', 18.5),
('/A01S6', 19),
('/A01S7', 19.5),
('/A01S8', 20),
('/A01S9', 20.5),
('/A01T0', 21),
('/A01T1', 21.5),
('/A01T2', 22),
('/A01T3', 22.5),
('/A01T4', 23),
('/A01T5', 23.5),
('/A01T6', 24),
('/A01T7', 24.5),
('/A01T8', 25),
('/A01T9', 25.5),
('/A01U0', 26),
('/A01U1', 26.5),
('/A01U2', 27),
('/A01U3', 27.5),
('/A01U4', 28),
('/A01U5', 28.5),
('/A01U6', 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `CVE_USUARIOS` int(11) NOT NULL,
  `CVE_DOMICILIO` int(11) DEFAULT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `APELLIDO_PATERNO` varchar(20) DEFAULT NULL,
  `APELLIDO_MATERNO` varchar(30) DEFAULT NULL,
  `NUM_TELEFONO` varchar(20) DEFAULT NULL,
  `CORREO_ELECT` varchar(80) DEFAULT NULL,
  `FECHA_NAC` date DEFAULT NULL,
  `IMAGEN_USU` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`CVE_USUARIOS`, `CVE_DOMICILIO`, `NOMBRE`, `APELLIDO_PATERNO`, `APELLIDO_MATERNO`, `NUM_TELEFONO`, `CORREO_ELECT`, `FECHA_NAC`, `IMAGEN_USU`) VALUES
(1, 1, 'Edith', 'Vidal', 'Terrozo', '9931292262', 'evidal664@gmail.com', '1981-06-17', 0x504552534f4e4150352e6a7067),
(2, 2, 'Regina', 'Ordoñez', 'Vidal', '9931919763', 'reginaOV@gmail.com', '1991-08-27', 0x504552534f4e4150322e6a7067),
(3, 3, 'Antonio', 'Fuentes', 'Jara', '9931074765', 'antoniofuentes2002@gmail.com', '2002-08-29', 0x594f2e6a7067),
(4, 4, 'Dios', 'Hernádez', 'Gómez', '9931929590', 'diosdadoHRG@gmail.com', '1996-10-26', 0x4156415441524c4f2e706e67),
(5, 5, 'Eduardo', 'Mejiaz', 'Castillo', '9932093565', 'lalo_567@gmail.com', '2002-12-17', 0x4156415441524c4f322e706e67),
(6, 6, 'Alejandro', 'Mejiaz', 'Castillo', '993490674', 'Aleme22@gmail.com', '1989-12-19', 0x4156415441524c4f322e706e67),
(7, 7, 'Ana Paula', 'Aguirre', 'Suárez', '893456891', 'anapag18@gmail.com', '1995-10-15', 0x504552534f4e4150352e6a7067),
(8, 8, 'Edson', 'López', 'Olan', '839282941', 'Eds2102@gmail.com', '2002-12-12', 0x504552534f4e4150332e6a7067),
(9, 9, 'Jonan', 'Perez', 'Alamilla', '9998804144', 'PEREZALAMILLAJONAN@gmail.com', '1982-03-11', 0x504552534f4e4150312e6a7067),
(48, 51, 'Antoni', 'Fuentes', 'Jara', '9931074765', 'antoniofuentesjara@gmail.com', '2002-08-29', 0x594f2e6a7067),
(58, 61, 'Jose Alberto', 'Jimenez', 'García', '9931074765', 'asasasass@gmail.com', '2021-07-01', 0x4156415441524c4f2e706e67),
(64, 67, 'Yesenia', 'Madrazo', 'Cruz', '88239413', 'yesenia@gmail.com', '2019-07-30', 0x4156415441524c4f2e706e67),
(73, 76, 'Jessica', 'Ducker', 'Marin', '9931074765', 'jp9asadd@gmail.com', '2021-09-22', 0x4156415441524c4f2e706e67),
(74, 77, 'Jessica', 'Ducker', 'Marín', '9924346738', 'Jessica1235@gmail.com', '2021-03-19', 0x4156415441524c4f2e706e67);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `CVE_VENTAS` int(11) NOT NULL,
  `CVE_MEMBRESIA` int(11) DEFAULT NULL,
  `CVE_ZAPATO` varchar(10) DEFAULT NULL,
  `CVE_TALLAS` varchar(10) DEFAULT NULL,
  `CANTIDAD` int(11) DEFAULT NULL,
  `TOTAL_PROD` int(11) DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL,
  `ENTREGA_ST` varchar(50) DEFAULT NULL,
  `FECHA_AC` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`CVE_VENTAS`, `CVE_MEMBRESIA`, `CVE_ZAPATO`, `CVE_TALLAS`, `CANTIDAD`, `TOTAL_PROD`, `STATUS`, `ENTREGA_ST`, `FECHA_AC`) VALUES
(132, 48, '/1E023', '/A01T8', 3, 1350, 'Cancelado', '58', '2021-11-11'),
(133, 48, '/A12Z8', '/A01R9', 4, 1196, 'Entregado', '58', '2021-11-11'),
(134, 1, '/1C021', '/A01T8', 1, 479, 'Entregado', '58', '2021-11-11'),
(135, 48, '/A12Y9', '/A01R2', 4, 876, 'Entregado', '58', '2021-11-11'),
(136, 1, '/A12Z8', '/A01R8', 1, 299, 'Entregado', '58', '2021-11-11'),
(137, 48, '/1C021', '/A01T8', 3, 1437, 'Cancelado', '6', '2021-11-12'),
(138, 48, '/1C021', '/A01T8', 1, 479, 'Cancelado', '6', '2021-11-12'),
(139, 48, '/A12Z8', '/A01R8', 1, 299, 'Cancelado', '6', '2021-11-12'),
(140, 48, '/1C021', '/A01T8', 1, 479, 'Entregado', '6', '2021-11-13'),
(141, 48, '/1B020', '/A01T8', 3, 1470, 'Cancelado', '6', '2021-11-13'),
(142, 48, '/A12Z9', '/A01R8', 1, 219, 'Cancelado', '6', '2021-11-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zapatos`
--

CREATE TABLE `zapatos` (
  `CVE_ZAPATO` varchar(10) NOT NULL,
  `CVE_COLOR` varchar(10) DEFAULT NULL,
  `CVE_MARCAS` varchar(10) DEFAULT NULL,
  `CVE_PROVEEDOR` varchar(10) DEFAULT NULL,
  `CVE_TALLAS` varchar(10) DEFAULT NULL,
  `PRECIO` int(11) DEFAULT NULL,
  `EXISTENCIAS` smallint(6) DEFAULT NULL,
  `NOMBRE_ZAP` varchar(80) DEFAULT NULL,
  `GENERO_ZAPATO` varchar(20) DEFAULT NULL,
  `TIPO_ZAPATO` varchar(30) DEFAULT NULL,
  `IMAGEN_ZA` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `zapatos`
--

INSERT INTO `zapatos` (`CVE_ZAPATO`, `CVE_COLOR`, `CVE_MARCAS`, `CVE_PROVEEDOR`, `CVE_TALLAS`, `PRECIO`, `EXISTENCIAS`, `NOMBRE_ZAP`, `GENERO_ZAPATO`, `TIPO_ZAPATO`, `IMAGEN_ZA`) VALUES
('/1A012', '/002B2', '/1A122', '/1B010', '/A01T8', 449, 250, 'Botas National Geographic Color Cafe', 'Masculino', 'Botas Varon', 0x426f74617348332e6a7067),
('/1A019', '/002B3', '/1G099', '/1G014', '/A01T2', 500, 214, 'Sandalias Real Jungle Color Azul', 'Femenino', 'Sandalias Damas', 0x53616e64616c69614e332e6a7067),
('/1B020', '/003C3', '/1D017', '/1H015', '/A01T8', 490, 198, 'Tenis Halogen Color ', 'Masculino', 'Tenis Varon', 0x54656e697348312e6a7067),
('/1C020', '/1G008', '/1C003', '/1D011', '/A01T2', 310, 220, 'Zapatillas Miracol By Mama Lola Color Carmel', 'Femenino', 'Zapatillas', 0x5461636f6e6573312e6a7067),
('/1C021', '/1I010', '/1A001', '/1C010', '/A01T8', 479, 215, 'Tenis Nike Color Negro', 'Masculino', 'Tenis Varon', 0x54656e69734832322e6a7067),
('/1D021', '/1I010', '/1C003', '/1D011', '/A01T2', 219, 297, 'Zapatillas Miracol By Mama Lola Color Negro', 'Femenino', 'Zapatillas', 0x5461636f6e6573322e6a7067),
('/1D022', '/1E010', '/1D017', '/1H015', '/A01T8', 459, 146, 'Tenis Halogen Color Negro/Amarillo', 'Masculino', 'Tenis Varon', 0x54656e697348332e6a7067),
('/1E022', '/1G008', '/1G011', '/1F013', '/A01T8', 350, 196, 'Zapatillas Lili Mill Color Carmel', 'Femenino', 'Zapatillas', 0x5461636f6e6573332e6a7067),
('/1E023', '/1I010', '/1E018', '/1H015', '/A01T8', 450, 200, 'Zapatos Casuales Custom Style Color Negro', 'Masculino', 'Casuales Hombre', 0x5a617061746f48312e6a7067),
('/1F023', '/1G012', '/1E005', '/1E012', '/A01T2', 249, 145, 'Tenis Deportivos Pirma Color Morado', 'Femenino', 'Tenis Damas', 0x54656e6973442e6a7067),
('/1F024', '/1FFF0', '/1E018', '/1H015', '/A01T8', 390, 299, 'Zapatos Casuales Custom Style Color Negro/Gris', 'Masculino', 'Casuales Hombre', 0x5a617061746f48322e6a7067),
('/1G024', '/1H009', '/1F010', '/1E012', '/A01T2', 329, 244, 'Tenis Deportivos Suns Color Negro/Fiusha', 'Femenino', 'Tenis Damas', 0x54656e697344322e6a7067),
('/1G025', '/002B3', '/1E018', '/1H015', '/A01T8', 519, 210, 'Zapatos Casuales Custom Style Color Azul', 'Masculino', 'Casuales Hombre', 0x5a617061746f4833332e6a7067),
('/1H025', '/1J011', '/1H012', '/1F013', '/A01T2', 299, 199, 'Tenis Deportivos Diogga Color Oxford/Morado', 'Femenino', 'Tenis Damas', 0x54656e697344332e6a7067),
('/1H026', '/1I010', '/1F019', '/1I016', '/A01T8', 500, 170, 'Botas De Piel Steel Boost Color Negro', 'Masculino', 'Botas Varon', 0x426f74617348312e6a7067),
('/1I026', '/1I010', '/1G099', '/1G014', '/A01T2', 355, 151, 'Sandalias Real Jungle Color Negro', 'Femenino', 'Sandalias Damas', 0x53616e64616c69617344312e6a7067),
('/1J020', '/1E010', '/1F019', '/1I016', '/A01T8', 599, 120, 'Botas Steel Boost Color Negro/Amarillo', 'Masculino', 'Botas Varon', 0x426f74617348322e6a7067),
('/1J027', '/1F011', '/1G099', '/1G014', '/A01T2', 320, 170, 'Sandalias Real Jungle Color Blanco', 'Femenino', 'Sandalias Damas', 0x53616e64616c6961734432322e6a7067),
('/A12X6', '/1FF10', '/1F019', '/1I016', '/A01U0', 719, 250, 'Botas De Piel Steel Boost Color Gris', 'Masculino', 'Botas Generales', 0x426f74617348362e6a7067),
('/A12X7', '/003C3', '/1A122', '/1B010', '/A01U0', 699, 119, 'Botas National Geographic Color Negro/Rojo', 'Masculino', 'Botas Generales', 0x424f544143412e6a7067),
('/A12X8', '/005E5', '/1F019', '/1I016', '/A01T8', 569, 299, 'Botas De Piel Steel Boost Color Ferrero/Cafe', 'Masculino', 'Botas Generales', 0x426f74617348382e6a7067),
('/A12X9', '/1I010', '/1A122', '/1B010', '/A01U0', 749, 250, 'Botas National Geographic Color Negro', 'Masculino', 'Botas Generales', 0x426f74617348392e6a7067),
('/A12Y0', '/1FF10', '/1A122', '/1B010', '/A01U0', 889, 120, 'Botas National Geographic Color Gris', 'Masculino', 'Botas Generales', 0x426f74617348352e6a7067),
('/A12Y1', '/002B2', '/1F019', '/1I016', '/A01U0', 949, 170, 'Botas De Piel Steel Boost Color Cafe', 'Masculino', 'Botas Generales', 0x426f74617348342e6a7067),
('/A12Y2', '/1J011', '/1E005', '/1E012', '/A01R2', 219, 187, 'Tenis Marca Pirma Color Oxford/Morado', 'Femenino', 'Tenis Niñas', 0x54656e69734e33332e6a7067),
('/A12Y3', '/1H009', '/1F010', '/1E012', '/A01R4', 180, 250, 'Tenis Deportivos Suns Color Negro/Fiusha', 'Femenino', 'Tenis Niñas', 0x54656e69734e322e6a7067),
('/A12Y4', '/0Z2B3', '/1F010', '/1E012', '/A01R2', 294, 190, 'Tenis Deportivos Suns Color Plateado', 'Femenino', 'Tenis Niñas', 0x54656e69734e312e6a7067),
('/A12Y5', '/002B3', '/1Z101', '/1A009', '/A01R2', 219, 190, 'Sandalias Trencitas Color Azul', 'Femenino', 'Sandalias NIñas', 0x53616e64616c69614e312e6a7067),
('/A12Y6', '/0Z2B3', '/1Z101', '/1A009', '/A01R8', 250, 120, 'Sandalias Trencitas Color Plateado', 'Femenino', 'Sandalias NIñas', 0x53616e64616c69614e322e6a7067),
('/A12Y7', '/1F011', '/1Z101', '/1A009', '/A01R6', 319, 150, 'Sandalias Trencitas Color Blanco', 'Femenino', 'Sandalias NIñas', 0x53616e64616c69614e342e6a7067),
('/A12Y8', '/003C6', '/1A222', '/1B010', '/A01R2', 309, 120, 'Flats Chiflados Color Rosa', 'Femenino', 'Flats', 0x466c6174734e332e6a7067),
('/A12Y9', '/003C6', '/1J023', '/1A009', '/A01R2', 219, 394, 'Flats Tropicana Color Rosa', 'Femenino', 'Flats', 0x466c6174734e322e6a7067),
('/A12Z0', '/001A2', '/1J023', '/1A009', '/A01R2', 200, 150, 'Flats Tropicana Color Lavanda', 'Femenino', 'Flats', 0x466c6174734e312e6a7067),
('/A12Z1', '/002B2', '/1G020', '/1I016', '/A01S2', 329, 120, 'Sandalias Minis Nice Color Cafe', 'Masculino', 'Sandalias Niños', 0x53616e64616c69614a332e6a7067),
('/A12Z2', '/1I010', '/1G020', '/1I016', '/A01S6', 400, 412, 'Sandalias Minis Nice Lex Color Negro', 'Masculino', 'Sandalias Niños', 0x53616e64616c69614a322e6a7067),
('/A12Z3', '/005E5', '/1C016', '/1G014', '/A01R8', 210, 150, 'Sandalias Destroyer Kids Color Ferrero/Cafe', 'Masculino', 'Sandalias Niños', 0x53616e64616c69614a312e6a7067),
('/A12Z4', '/1G008', '/1E018', '/1H015', '/A01S2', 250, 120, 'Zapatos Casuales Custom Style Color Carmel', 'Masculino', 'Casuales Niños', 0x43617375616c4a322e6a7067),
('/A12Z5', '/002B2', '/1E018', '/1H015', '/A01S0', 319, 409, 'Zapatos Casuales Custom Style Color Café', 'Masculino', 'Casuales Niños', 0x43617375616c4a312e6a7067),
('/A12Z6', '/005E5', '/1E018', '/1H015', '/A01R8', 219, 129, 'Zapatos Casuales Custom Style Color Ferrero/Café', 'Masculino', 'Casuales Niños', 0x43617375616c4a332e6a7067),
('/A12Z7', '/003C3', '/1H021', '/1J017', '/A01S0', 220, 540, 'Tenis Deportivos Qatar Color Negro/Rojo', 'Masculino', 'Tenis Niños', 0x54656e69734a33332e6a7067),
('/A12Z8', '/001A1', '/1H021', '/1J017', '/A01R8', 299, 344, 'Tenis Deportivos Qatar Color Marino/Rojo', 'Masculino', 'Tenis Niños', 0x54656e69734a322e6a7067),
('/A12Z9', '/003C3', '/1I022', '/1J017', '/A01R8', 219, 400, 'Tenis Deportivos American Fire Color Negro/Rojo', 'Masculino', 'Tenis Niños', 0x54656e69734a312e6a7067);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`CVE_ADMINISTRADOR`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`CVE_CARRITO`),
  ADD KEY `FK_CARRITO_REFERENCE_CLIENTE` (`CVE_MEMBRESIA`),
  ADD KEY `FK_CARRITO_REFERENCE_ZAPATOS` (`CVE_ZAPATO`),
  ADD KEY `FK_CARRITO_REFERENCE_TALLAS` (`CVE_TALLAS`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CVE_MEMBRESIA`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`CVE_COLOR`);

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD PRIMARY KEY (`CVE_DOMICILIO`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`CVE_MARCAS`),
  ADD KEY `FK_MARCAS_REFERENCE_PROVEEDO` (`CVE_PROVEEDOR`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`CVE_PEDIDO`),
  ADD KEY `FK_PEDIDOS_REFERENCE_CLIENTE` (`CVE_MEMBRESIA`),
  ADD KEY `FK_PEDIDOS_REFERENCE_ZAPATOS` (`CVE_ZAPATO`),
  ADD KEY `FK_PEDIDOS_REFERENCE_TALLAS` (`CVE_TALLAS`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`CVE_PROVEEDOR`);

--
-- Indices de la tabla `tallas`
--
ALTER TABLE `tallas`
  ADD PRIMARY KEY (`CVE_TALLAS`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`CVE_USUARIOS`),
  ADD KEY `FK_USUARIOS_REFERENCE_DOMICILI` (`CVE_DOMICILIO`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`CVE_VENTAS`),
  ADD KEY `FK_VENTAS_REFERENCE_CLIENTE` (`CVE_MEMBRESIA`),
  ADD KEY `FK_VENTAS_REFERENCE_ZAPATOS` (`CVE_ZAPATO`),
  ADD KEY `FK_VENTAS_REFERENCE_TALLAS` (`CVE_TALLAS`);

--
-- Indices de la tabla `zapatos`
--
ALTER TABLE `zapatos`
  ADD PRIMARY KEY (`CVE_ZAPATO`),
  ADD KEY `FK_ZAPATOS_REFERENCE_MARCAS` (`CVE_MARCAS`),
  ADD KEY `FK_ZAPATOS_REFERENCE_TALLAS` (`CVE_TALLAS`),
  ADD KEY `FK_ZAPATOS_REFERENCE_PROVEEDO` (`CVE_PROVEEDOR`),
  ADD KEY `FK_ZAPATOS_REFERENCE_COLORES` (`CVE_COLOR`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `CVE_CARRITO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- AUTO_INCREMENT de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  MODIFY `CVE_DOMICILIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `CVE_PEDIDO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=361;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `CVE_USUARIOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `CVE_VENTAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `FK_ADMINIST_USUARIOS` FOREIGN KEY (`CVE_ADMINISTRADOR`) REFERENCES `usuarios` (`CVE_USUARIOS`);

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `FK_CARRITO_REFERENCE_CLIENTE` FOREIGN KEY (`CVE_MEMBRESIA`) REFERENCES `cliente` (`CVE_MEMBRESIA`),
  ADD CONSTRAINT `FK_CARRITO_REFERENCE_TALLAS` FOREIGN KEY (`CVE_TALLAS`) REFERENCES `tallas` (`CVE_TALLAS`),
  ADD CONSTRAINT `FK_CARRITO_REFERENCE_ZAPATOS` FOREIGN KEY (`CVE_ZAPATO`) REFERENCES `zapatos` (`CVE_ZAPATO`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `FK_CLIENTE_USUARIOS` FOREIGN KEY (`CVE_MEMBRESIA`) REFERENCES `usuarios` (`CVE_USUARIOS`);

--
-- Filtros para la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD CONSTRAINT `FK_MARCAS_REFERENCE_PROVEEDO` FOREIGN KEY (`CVE_PROVEEDOR`) REFERENCES `proveedores` (`CVE_PROVEEDOR`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `FK_PEDIDOS_REFERENCE_CLIENTE` FOREIGN KEY (`CVE_MEMBRESIA`) REFERENCES `cliente` (`CVE_MEMBRESIA`),
  ADD CONSTRAINT `FK_PEDIDOS_REFERENCE_TALLAS` FOREIGN KEY (`CVE_TALLAS`) REFERENCES `tallas` (`CVE_TALLAS`),
  ADD CONSTRAINT `FK_PEDIDOS_REFERENCE_ZAPATOS` FOREIGN KEY (`CVE_ZAPATO`) REFERENCES `zapatos` (`CVE_ZAPATO`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_USUARIOS_REFERENCE_DOMICILI` FOREIGN KEY (`CVE_DOMICILIO`) REFERENCES `domicilios` (`CVE_DOMICILIO`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `FK_VENTAS_REFERENCE_CLIENTE` FOREIGN KEY (`CVE_MEMBRESIA`) REFERENCES `cliente` (`CVE_MEMBRESIA`),
  ADD CONSTRAINT `FK_VENTAS_REFERENCE_TALLAS` FOREIGN KEY (`CVE_TALLAS`) REFERENCES `tallas` (`CVE_TALLAS`),
  ADD CONSTRAINT `FK_VENTAS_REFERENCE_ZAPATOS` FOREIGN KEY (`CVE_ZAPATO`) REFERENCES `zapatos` (`CVE_ZAPATO`);

--
-- Filtros para la tabla `zapatos`
--
ALTER TABLE `zapatos`
  ADD CONSTRAINT `FK_ZAPATOS_REFERENCE_COLORES` FOREIGN KEY (`CVE_COLOR`) REFERENCES `colores` (`CVE_COLOR`),
  ADD CONSTRAINT `FK_ZAPATOS_REFERENCE_MARCAS` FOREIGN KEY (`CVE_MARCAS`) REFERENCES `marcas` (`CVE_MARCAS`),
  ADD CONSTRAINT `FK_ZAPATOS_REFERENCE_PROVEEDO` FOREIGN KEY (`CVE_PROVEEDOR`) REFERENCES `proveedores` (`CVE_PROVEEDOR`),
  ADD CONSTRAINT `FK_ZAPATOS_REFERENCE_TALLAS` FOREIGN KEY (`CVE_TALLAS`) REFERENCES `tallas` (`CVE_TALLAS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
