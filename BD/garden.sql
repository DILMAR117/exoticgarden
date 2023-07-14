-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.27-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para garden
CREATE DATABASE IF NOT EXISTS `garden` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `garden`;

-- Volcando estructura para tabla garden.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla garden.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla garden.flores
CREATE TABLE IF NOT EXISTS `flores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla garden.flores: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `flores` DISABLE KEYS */;
REPLACE INTO `flores` (`id`, `nombre`, `descripcion`, `imagen`, `created_at`, `updated_at`) VALUES
	(4, 'Rosas', 'Las rosas son todo un género de arbustos espinosos, ampliamente conocidos por la belleza de sus flores, de fragancia muy característica', '64007e0008ce9.webp', '2023-03-02 10:44:16', '2023-03-02 10:44:16'),
	(5, 'Tulipanes', 'Los tulipanes o tulipa son también todo un género de plantas, en este caso de tipo bulboso y perenne', '64007e255adba.webp', '2023-03-02 10:44:53', '2023-03-02 10:44:53'),
	(6, 'Orquídeas', 'Las orquídeas son otro de los tipos de flores más reconocibles para todo el mundo', '64007e5615dff.webp', '2023-03-02 10:45:42', '2023-03-02 10:45:42'),
	(7, 'Pensamientos', 'Las plantas conocidas como pensamientos tienen unas flores muy bellas y por ello son muy buscadas para decorar, sobre todo en exteriores', '64007e82b195a.webp', '2023-03-02 10:46:26', '2023-03-02 10:46:26'),
	(8, 'Alegría', 'Las alegrías de la casa, también llamadas Impatients wallerana, son plantas del género Impatiens, proveniente de África', '64007f2707e18.webp', '2023-03-02 10:49:11', '2023-03-02 10:49:11'),
	(9, 'azaleas', 'Perteneciente a la familia de las Ericáceas, conocidas por su floración abundante, las azaleas, de nombre botánico Rhododendron indicum o simsii, son un pequeño arbusto de origen', '64007fe5909e2.webp', '2023-03-02 10:52:21', '2023-03-02 10:52:21'),
	(10, 'Gladiolus', 'Sus espigas florales muestran una amplia gama de colores. Estos van desde los tonos cálidos, rojizos y amarillentos, hasta los tonos más fríos como el los violáceos y morados', '640080520932b.webp', '2023-03-02 10:54:10', '2023-03-02 10:54:10'),
	(11, 'Gazania', 'Es una planta perenne, aunque muchas veces se cultiva como anual, que tiende a no sobrepasar los 20 cm de altura', '640080bdd73b9.webp', '2023-03-02 10:55:57', '2023-03-02 10:55:57'),
	(13, 'Girasol', 'Flor amarilla que transmite emociones distintivas', '646439fdc0787.webp', '2023-05-17 01:20:45', '2023-05-17 01:20:45');
/*!40000 ALTER TABLE `flores` ENABLE KEYS */;

-- Volcando estructura para tabla garden.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla garden.migrations: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_02_26_192237_flores', 1),
	(6, '2023_03_02_065541_flores', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla garden.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla garden.password_reset_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
REPLACE INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
	('dilmar@gmail.com', '$2y$10$53hPIk1fHxPREQwNk3aBZeTWMiS/nNK3.9m8lKoSS64vEX2HZWtAe', '2023-03-14 22:30:28');
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla garden.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla garden.personal_access_tokens: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla garden.puestos
CREATE TABLE IF NOT EXISTS `puestos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `puesto` varchar(255) NOT NULL,
  `telefono` int(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla garden.puestos: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `puestos` DISABLE KEYS */;
REPLACE INTO `puestos` (`id`, `nombre`, `apellido`, `puesto`, `telefono`, `created_at`, `updated_at`) VALUES
	(1, 'Octavio', 'Solorzano Roblero', 'Gerente-Empresarial', 1234, '2023-03-01 22:05:39', '2023-03-02 12:10:55'),
	(9, 'Marcos', 'Pérez', 'Jardinero empresarial', 654321, '2023-03-02 12:05:08', '2023-03-02 12:10:02'),
	(10, 'Diego', 'Lorenzo Méndez', 'Jardinero empresarial', 137156, '2023-03-02 12:06:13', '2023-03-02 12:07:28'),
	(11, 'Enoc', 'Encino Cruz', 'Gerente-Domicilio', 7898465, '2023-03-02 12:06:43', '2023-03-02 12:10:40'),
	(12, 'Maribel', 'Gómez Gómez', 'Jardinera a domicilio', 54684521, '2023-03-02 12:07:17', '2023-03-02 12:07:17'),
	(13, 'Dilmar', 'González Hernández', 'Administrador', 1358468, '2023-03-02 12:08:07', '2023-03-02 12:08:07'),
	(14, 'Pedro de Jesús', 'Hernández Palacios', 'Jardinero a domicilio', 354687649, '2023-03-02 12:09:48', '2023-03-02 12:09:48');
/*!40000 ALTER TABLE `puestos` ENABLE KEYS */;

-- Volcando estructura para tabla garden.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla garden.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Dilmar', 'dilmar@gmail.com', NULL, '$2y$10$LdDR48aXPZ/LAL5rrdWZGOFv2PhuagjCjBS3DVwiQDPuyZovDo98y', 'mUO3oNPpPx1M6wYsAlfzAZQGiOdAyT5xnn6ZDX7yiuSV107CPBMyAJ9Zi9Ht', '2023-03-14 22:10:10', '2023-03-14 22:10:10');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
