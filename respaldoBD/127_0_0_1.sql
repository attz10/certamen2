-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2023 a las 03:04:01
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
-- Base de datos: `proyectoc2`
--
CREATE DATABASE IF NOT EXISTS `proyectoc2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `proyectoc2`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`rut`, `nombre`, `apellido`, `email`, `created_at`, `updated_at`) VALUES
('21107123-5', 'Atilio', 'Tudesca', 'asdasdas@usm.cl', '2023-06-09 00:24:07', '2023-06-09 00:24:07'),
('87667887-k', 'pedro', 'bolivar', 'ardiles@usm.cl', '2023-06-09 00:24:32', '2023-06-09 00:24:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_06_01_003231_create_estudiantes_table', 1),
(3, '2023_06_01_003246_create_profesores_table', 1),
(4, '2023_06_01_003324_create_propuestas_table', 1),
(5, '2023_06_01_003421_create_profesor_propuesta_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`rut`, `nombre`, `apellido`, `created_at`, `updated_at`) VALUES
('12332123-1', 'pedro', 'sanchez', '2023-06-09 00:23:19', '2023-06-09 00:23:19'),
('32112343-7', 'Erling', 'Haaland', '2023-06-09 00:23:38', '2023-06-09 00:23:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor_propuesta`
--

CREATE TABLE `profesor_propuesta` (
  `propuesta_id` int(10) UNSIGNED NOT NULL,
  `profesor_rut` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time(1) NOT NULL,
  `comentario` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuestas`
--

CREATE TABLE `propuestas` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `documento` varchar(100) NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estudiante_rut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `profesor_propuesta`
--
ALTER TABLE `profesor_propuesta`
  ADD PRIMARY KEY (`propuesta_id`,`profesor_rut`),
  ADD KEY `profesor_propuesta_profesor_rut_foreign` (`profesor_rut`);

--
-- Indices de la tabla `propuestas`
--
ALTER TABLE `propuestas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propuestas_estudiante_rut_foreign` (`estudiante_rut`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `propuestas`
--
ALTER TABLE `propuestas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `profesor_propuesta`
--
ALTER TABLE `profesor_propuesta`
  ADD CONSTRAINT `profesor_propuesta_profesor_rut_foreign` FOREIGN KEY (`profesor_rut`) REFERENCES `profesores` (`rut`),
  ADD CONSTRAINT `profesor_propuesta_propuesta_id_foreign` FOREIGN KEY (`propuesta_id`) REFERENCES `propuestas` (`id`);

--
-- Filtros para la tabla `propuestas`
--
ALTER TABLE `propuestas`
  ADD CONSTRAINT `propuestas_estudiante_rut_foreign` FOREIGN KEY (`estudiante_rut`) REFERENCES `estudiantes` (`rut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
