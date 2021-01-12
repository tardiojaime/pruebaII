-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 13-01-2021 a las 00:24:40
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `beto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `imagen` varchar(250) DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `nombre`, `descripcion`, `precio`, `cantidad`, `usuario`, `imagen`, `fecha`, `status`) VALUES
(1, 'fecha', 'descripcion', 13, 25, 'yo', 'img', '2021-01-08 00:00:00', '1'),
(10, 'prueba 25', 'prueba 25', 26, 10, 'tardio717@gmail.com', 'image/articulos/tfHBHR03MRYxmYCZdyrIqTgc9gUILablpRb5Nmcb.jpg', '2021-01-06 17:44:41', '1'),
(13, 'Marcos daniel', 'Temporada mas calida', 25, 20, 'tardio717@gmail.com', NULL, '2021-01-08 17:46:31', '1'),
(14, 'new', 'descripcion', 25, 20, 'Jaime', NULL, '2021-01-09 06:52:31', '1'),
(15, 'Marcos daniel', 'Temporada mas calida', 10, 0, 'Jaime', 'image/articulos/l3BA1foi1iMqD0HiGCVnnGAnzTnrkh7593twhvhO.png', '2021-01-10 12:11:56', '1'),
(16, 'Marcos daniel', 'klml', 2, 0, 'Jaime', 'image/articulos/peUt3JxNJ68uxwc7jrV4xhXLEFuGMFDxaWDtAmnk.png', '2021-01-10 12:13:18', '1'),
(17, 'new', 'jk', 222202000, 0, 'Jaime', 'image/articulos/NYjXBLeeXXtjWeuxHsbitTIaNTXmWVbxX7ZDSeS4.png', '2021-01-10 12:17:28', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallei`
--

CREATE TABLE `detallei` (
  `id` int(11) NOT NULL,
  `articulo` int(11) DEFAULT NULL,
  `ingreso` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallev`
--

CREATE TABLE `detallev` (
  `id` int(11) NOT NULL,
  `articulo` int(11) DEFAULT NULL,
  `venta` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallev`
--

INSERT INTO `detallev` (`id`, `articulo`, `venta`, `cantidad`, `precio`) VALUES
(3, 10, 10, 26, 3),
(4, 1, 10, 13, 3),
(5, 10, 11, 26, 5),
(6, 14, 11, 25, 5),
(7, 10, 12, 26, 5),
(8, 14, 12, 25, 5),
(9, 1, 13, 13, 5),
(10, 13, 13, 25, 5),
(11, 14, 13, 25, 5),
(12, 14, 14, 25, 7),
(13, 10, 14, 26, 7),
(14, 14, 15, 25, 2),
(15, 13, 16, 25, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `id` int(11) NOT NULL,
  `precio` float NOT NULL,
  `fecha` timestamp NULL DEFAULT NULL,
  `usuario` varchar(100) NOT NULL,
  `proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `telefono`, `email`, `email_verified_at`, `password`, `rol`, `avatar`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jaime', '67619302', 'tardio717@gmail.com', NULL, '$2y$10$gZaqMKT85PkXkblN.w8pd.VmK.zwVmsYDogfBsfj1P2R0tQmPFSuq', 'cliente', NULL, NULL, NULL, '2021-01-05 17:16:23', '2021-01-05 17:16:23'),
(2, 'erlinda', '67543219', 'erlinda12@gmail.com', NULL, '123456789', 'proveedor', NULL, '1', NULL, NULL, NULL),
(3, 'Jaime', '777777777', 'marcus@gmail.com', NULL, '$2y$10$95hl0yMUIOQ2zastoySrl.pOLcYF4bP09GVcUKKju5si67yoWDjwS', 'usuario', 'image/avatars/FpBEgdXXDoInk5xb3bZYSky5D1fp4XYwadNVaIjl.png', '1', NULL, '2021-01-13 01:53:33', '2021-01-13 03:10:12'),
(4, 'nuevo usuario editado', '75354625', 'tardio26__@gmail.com', NULL, '$2y$10$iG1CGEixktdL7koiYjXEnOgUrO.W5y4QN4YI4fmqs5Y2bRnCNz.P6', 'usuario', 'image/avatars/lRze96zyq8q8fXoEspmcUpGGCbN1WSHLRn4yrDgh.png', '1', NULL, '2021-01-13 01:56:14', '2021-01-13 03:11:42'),
(7, 'Jaime', '75843282', 'botsford.jeramy@example.com', NULL, '$2y$10$WhYaoUmCjh7vNYGMOQ53oOe2IWImTf8GeUwsQ46/FoLf1KBNjyOqO', 'administrador', 'image/avatars/lIslTHVb9vgjeTuoJPo6r25aAk8lDRnkOMRUB95X.png', '1', NULL, '2021-01-13 02:00:51', '2021-01-13 02:00:51'),
(9, 'Marcos daniel', '75354625', 'marc154156us@gmail.com', NULL, '$2y$10$02KMVVGN8a4fjcpg.mfYv.5QSaOaz.UfZQDSbxGqRZQOADraXzuPO', 'administrador', 'image/avatars/nkpeux2RfPja4vLpS8bQWz26sKmZet5w3Aq9Xukl.png', '1', NULL, '2021-01-13 02:01:32', '2021-01-13 02:01:32'),
(10, 'numero', '75354625', 'tardio262_6@gmail.com', NULL, '$2y$10$T72MF9RI4LS.CWsD4a3FvO7FP8xiSi9DK8yKKY6Q8VoYzme/pdXGu', 'usuario', NULL, '1', NULL, '2021-01-13 02:01:56', '2021-01-13 03:09:09'),
(11, 'Poroto duros', '123226556', 'marcurrs@gmail.com', NULL, '$2y$10$0AYatLzcWRwApNInhhTZbORHSgqvEVSNricM9mIeybf7lBHci9ay2', 'usuario', NULL, '1', NULL, '2021-01-13 02:03:37', '2021-01-13 03:09:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` int(11) NOT NULL,
  `precio` float DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `usuario` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id`, `precio`, `fecha`, `usuario`) VALUES
(10, 117, '2021-01-12 18:26:21', ''),
(11, 255, '2021-01-12 19:06:41', ''),
(12, 255, '2021-01-12 19:08:12', ''),
(13, 315, '2021-01-12 19:13:17', ''),
(14, 357, '2021-01-12 19:13:53', ''),
(15, 50, '2021-01-12 19:16:53', ''),
(16, 50, '2021-01-12 19:45:39', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detallei`
--
ALTER TABLE `detallei`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articulo` (`articulo`),
  ADD KEY `ingreso` (`ingreso`);

--
-- Indices de la tabla `detallev`
--
ALTER TABLE `detallev`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venta` (`venta`),
  ADD KEY `articulo` (`articulo`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proveedor` (`proveedor`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallei`
--
ALTER TABLE `detallei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detallev`
--
ALTER TABLE `detallev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallei`
--
ALTER TABLE `detallei`
  ADD CONSTRAINT `detallei_ibfk_1` FOREIGN KEY (`articulo`) REFERENCES `articulo` (`id`),
  ADD CONSTRAINT `detallei_ibfk_2` FOREIGN KEY (`ingreso`) REFERENCES `ingreso` (`id`);

--
-- Filtros para la tabla `detallev`
--
ALTER TABLE `detallev`
  ADD CONSTRAINT `detallev_ibfk_1` FOREIGN KEY (`venta`) REFERENCES `venta` (`id`),
  ADD CONSTRAINT `detallev_ibfk_2` FOREIGN KEY (`articulo`) REFERENCES `articulo` (`id`);

--
-- Filtros para la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD CONSTRAINT `ingreso_ibfk_1` FOREIGN KEY (`proveedor`) REFERENCES `proveedor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
