-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.34 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных testauth
CREATE DATABASE IF NOT EXISTS `testauth` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `testauth`;

-- Дамп структуры для таблица testauth.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `second_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT '1',
  `photo` text COLLATE utf8_unicode_ci,
  `photo_thumb` text COLLATE utf8_unicode_ci,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) DEFAULT '10',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Дамп данных таблицы testauth.user: ~0 rows (приблизительно)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `first_name`, `second_name`, `email`, `password_hash`, `password_reset_token`, `age`, `gender`, `photo`, `photo_thumb`, `auth_key`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'Admin', 'admin@a.a', '$2y$13$VEXvYgM1VjnGVXsOlELnmunBMEe6nrpJcBht5ukrbgKhkpFv5j6Hm', '', '28', '1', '/web/uploads/1511306020973295.gif', '/web/uploads/thumbs/1511306020973295.gif', '6GgUhhRYIVPBdBlpwHKNr7Oww18ekaZ6', 10, 1511306028, 1511306028),
	(2, 'Demo', 'Demo', 'demo@d.d', '$2y$13$Abxi9zIggV8M/XV0YjdtiO1s3uEQGtabg2cVttN9v35jASMuu9KHe', '', '18', '1', '', NULL, 'U4aovzA2mm7mPjZOMI3ByHzEFOBdf8eB', 10, 1511306727, 1511306727),
	(3, '11111111', '1111', '1@1.1', '$2y$13$SDjZRcm.9UDY49.BG8ESGuzwaGAX0OiCU3H/PtlZE6G/b5e0KwzkO', '', '18', '1', '/web/uploads/15113067995163317.png', '/web/uploads/thumbs/15113067995163317.png', 'IP0ezKMUaiESzM_cGvJ58KaiZ5AxLPRB', 10, 1511306803, 1511306803),
	(4, '22222', '22222', '2@2.2', '$2y$13$tiY.R/V2HQao.ySwdqSq5uNRNdDjrge2r.CtX3UM83B5kpcOqAxKe', '', '18', '0', '', NULL, '4B744inW9lzwHWhLjM67sc-0oo3Rlzfj', 10, 1511306845, 1511306845);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
