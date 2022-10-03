-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: copa
-- ------------------------------------------------------
-- Server version	8.0.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `confronto_palpites`
--

DROP TABLE IF EXISTS `confronto_palpites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `confronto_palpites` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `confronto_id` bigint unsigned NOT NULL,
  `casa` bigint unsigned NOT NULL,
  `visitante` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `confronto_palpites_user_id_foreign` (`user_id`),
  KEY `confronto_palpites_confronto_id_foreign` (`confronto_id`),
  KEY `confronto_palpites_casa_foreign` (`casa`),
  KEY `confronto_palpites_visitante_foreign` (`visitante`),
  CONSTRAINT `confronto_palpites_casa_foreign` FOREIGN KEY (`casa`) REFERENCES `selecaos` (`id`),
  CONSTRAINT `confronto_palpites_confronto_id_foreign` FOREIGN KEY (`confronto_id`) REFERENCES `confrontos` (`id`),
  CONSTRAINT `confronto_palpites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `confronto_palpites_visitante_foreign` FOREIGN KEY (`visitante`) REFERENCES `selecaos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `confronto_palpites`
--

LOCK TABLES `confronto_palpites` WRITE;
/*!40000 ALTER TABLE `confronto_palpites` DISABLE KEYS */;
/*!40000 ALTER TABLE `confronto_palpites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `confronto_resultados`
--

DROP TABLE IF EXISTS `confronto_resultados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `confronto_resultados` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `confronto_id` bigint unsigned NOT NULL,
  `casa` bigint unsigned NOT NULL,
  `visitante` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `confronto_resultados_confronto_id_foreign` (`confronto_id`),
  KEY `confronto_resultados_casa_foreign` (`casa`),
  KEY `confronto_resultados_visitante_foreign` (`visitante`),
  CONSTRAINT `confronto_resultados_casa_foreign` FOREIGN KEY (`casa`) REFERENCES `selecaos` (`id`),
  CONSTRAINT `confronto_resultados_confronto_id_foreign` FOREIGN KEY (`confronto_id`) REFERENCES `confrontos` (`id`),
  CONSTRAINT `confronto_resultados_visitante_foreign` FOREIGN KEY (`visitante`) REFERENCES `selecaos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `confronto_resultados`
--

LOCK TABLES `confronto_resultados` WRITE;
/*!40000 ALTER TABLE `confronto_resultados` DISABLE KEYS */;
/*!40000 ALTER TABLE `confronto_resultados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `confrontos`
--

DROP TABLE IF EXISTS `confrontos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `confrontos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `etapa_id` bigint unsigned NOT NULL,
  `grupo_id` bigint unsigned DEFAULT NULL,
  `casa` bigint unsigned DEFAULT NULL,
  `visitante` bigint unsigned DEFAULT NULL,
  `classificado_casa` bigint unsigned DEFAULT NULL,
  `classificado_visitante` bigint unsigned DEFAULT NULL,
  `data_confronto` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `confrontos_etapa_id_foreign` (`etapa_id`),
  KEY `confrontos_grupo_id_foreign` (`grupo_id`),
  KEY `confrontos_casa_foreign` (`casa`),
  KEY `confrontos_visitante_foreign` (`visitante`),
  KEY `confrontos_classificado_casa_foreign` (`classificado_casa`),
  KEY `confrontos_classificado_visitante_foreign` (`classificado_visitante`),
  CONSTRAINT `confrontos_casa_foreign` FOREIGN KEY (`casa`) REFERENCES `selecaos` (`id`),
  CONSTRAINT `confrontos_classificado_casa_foreign` FOREIGN KEY (`classificado_casa`) REFERENCES `selecaos` (`id`),
  CONSTRAINT `confrontos_classificado_visitante_foreign` FOREIGN KEY (`classificado_visitante`) REFERENCES `selecaos` (`id`),
  CONSTRAINT `confrontos_etapa_id_foreign` FOREIGN KEY (`etapa_id`) REFERENCES `etapas` (`id`),
  CONSTRAINT `confrontos_grupo_id_foreign` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`),
  CONSTRAINT `confrontos_visitante_foreign` FOREIGN KEY (`visitante`) REFERENCES `selecaos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `confrontos`
--

LOCK TABLES `confrontos` WRITE;
/*!40000 ALTER TABLE `confrontos` DISABLE KEYS */;
INSERT INTO `confrontos` VALUES (1,1,1,1,2,NULL,NULL,'2022-11-20 16:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(2,1,2,6,7,NULL,NULL,'2022-11-21 13:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(3,1,1,4,3,NULL,NULL,'2022-11-21 16:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(4,1,2,5,8,NULL,NULL,'2022-11-21 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(5,1,3,9,10,NULL,NULL,'2022-11-22 10:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(6,1,4,14,16,NULL,NULL,'2022-11-22 13:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(7,1,3,11,12,NULL,NULL,'2022-11-22 16:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(8,1,4,15,13,NULL,NULL,'2022-11-22 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(9,1,6,24,23,NULL,NULL,'2022-11-23 10:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(10,1,5,17,20,NULL,NULL,'2022-11-23 13:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(11,1,5,19,18,NULL,NULL,'2022-11-23 16:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(12,1,6,21,22,NULL,NULL,'2022-11-23 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(13,1,7,27,26,NULL,NULL,'2022-11-24 10:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(14,1,8,32,29,NULL,NULL,'2022-11-24 13:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(15,1,8,31,30,NULL,NULL,'2022-11-24 16:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(16,1,7,25,28,NULL,NULL,'2022-11-24 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(17,1,2,8,7,NULL,NULL,'2022-11-25 10:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(18,1,1,1,4,NULL,NULL,'2022-11-25 13:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(19,1,1,3,2,NULL,NULL,'2022-11-25 16:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(20,1,2,6,5,NULL,NULL,'2022-11-25 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(21,1,4,16,13,NULL,NULL,'2022-11-26 10:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(22,1,3,12,10,NULL,NULL,'2022-11-26 13:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(23,1,4,15,14,NULL,NULL,'2022-11-26 16:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(24,1,3,9,11,NULL,NULL,'2022-11-26 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(25,1,5,20,18,NULL,NULL,'2022-11-27 10:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(26,1,6,21,24,NULL,NULL,'2022-11-27 13:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(27,1,6,23,22,NULL,NULL,'2022-11-27 16:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(28,1,5,19,17,NULL,NULL,'2022-11-27 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(29,1,7,26,28,NULL,NULL,'2022-11-28 10:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(30,1,8,29,30,NULL,NULL,'2022-11-28 13:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(31,1,7,25,27,NULL,NULL,'2022-11-28 16:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(32,1,8,31,32,NULL,NULL,'2022-11-28 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(33,1,1,2,4,NULL,NULL,'2022-11-29 15:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(34,1,1,3,1,NULL,NULL,'2022-11-29 15:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(35,1,2,7,5,NULL,NULL,'2022-11-29 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(36,1,2,8,6,NULL,NULL,'2022-11-29 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(37,1,4,16,15,NULL,NULL,'2022-11-30 15:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(38,1,4,13,14,NULL,NULL,'2022-11-30 15:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(39,1,3,12,9,NULL,NULL,'2022-11-30 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(40,1,3,10,11,NULL,NULL,'2022-11-30 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(41,1,6,23,21,NULL,NULL,'2022-12-01 15:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(42,1,6,22,24,NULL,NULL,'2022-12-01 15:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(43,1,5,20,19,NULL,NULL,'2022-12-01 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(44,1,5,18,17,NULL,NULL,'2022-12-01 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(45,1,8,29,31,NULL,NULL,'2022-12-02 15:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(46,1,8,30,32,NULL,NULL,'2022-12-02 15:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(47,1,7,28,27,NULL,NULL,'2022-12-02 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(48,1,7,26,25,NULL,NULL,'2022-12-02 19:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(49,2,NULL,NULL,NULL,1,2,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(50,2,NULL,NULL,NULL,3,4,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(51,2,NULL,NULL,NULL,5,6,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(52,2,NULL,NULL,NULL,7,8,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(53,2,NULL,NULL,NULL,2,1,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(54,2,NULL,NULL,NULL,4,3,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(55,2,NULL,NULL,NULL,6,5,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(56,2,NULL,NULL,NULL,8,7,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(57,3,NULL,NULL,NULL,NULL,NULL,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(58,3,NULL,NULL,NULL,NULL,NULL,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(59,3,NULL,NULL,NULL,NULL,NULL,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(60,3,NULL,NULL,NULL,NULL,NULL,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(61,4,NULL,NULL,NULL,NULL,NULL,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(62,4,NULL,NULL,NULL,NULL,NULL,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(63,5,NULL,NULL,NULL,NULL,NULL,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL),(64,6,NULL,NULL,NULL,NULL,NULL,'2022-12-02 03:00:00','2022-05-23 19:30:00','2022-05-23 19:30:00',NULL);
/*!40000 ALTER TABLE `confrontos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etapas`
--

DROP TABLE IF EXISTS `etapas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `etapas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etapas`
--

LOCK TABLES `etapas` WRITE;
/*!40000 ALTER TABLE `etapas` DISABLE KEYS */;
INSERT INTO `etapas` VALUES (1,'Jogos de grupo','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(2,'oitavas de final','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(3,'quartas de final','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(4,'semi-finais','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(5,'terceiro lugar','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(6,'final','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL);
/*!40000 ALTER TABLE `etapas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupos`
--

DROP TABLE IF EXISTS `grupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grupos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `chave` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupos`
--

LOCK TABLES `grupos` WRITE;
/*!40000 ALTER TABLE `grupos` DISABLE KEYS */;
INSERT INTO `grupos` VALUES (1,'A','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(2,'B','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(3,'C','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(4,'D','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(5,'E','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(6,'F','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(7,'G','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(8,'H','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL);
/*!40000 ALTER TABLE `grupos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_controllers`
--

DROP TABLE IF EXISTS `login_controllers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `login_controllers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_controllers`
--

LOCK TABLES `login_controllers` WRITE;
/*!40000 ALTER TABLE `login_controllers` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_controllers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (28,'2014_10_12_000000_create_users_table',1),(29,'2014_10_12_100000_create_password_resets_table',1),(30,'2019_08_19_000000_create_failed_jobs_table',1),(31,'2022_09_08_225733_create_login_controllers_table',1),(32,'2022_09_09_025301_create_profile_table',1),(33,'2022_09_09_025726_update_users_table',1),(34,'2022_09_28_144653_create_grupos_table',1),(35,'2022_09_28_144755_create_selecaos_table',1),(36,'2022_09_29_010523_create_etapas_table',1),(39,'2022_09_29_143303_create_confronto_resultados_table',1),(42,'2022_09_29_143051_create_confrontos_table',2),(43,'2022_09_29_143234_create_confronto_palpites_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profiles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,'Usuário','Usuário','2022-09-30 15:00:00','2022-09-30 15:00:00',NULL),(2,'Administrador','Administrador','2022-09-30 15:00:00','2022-09-30 15:00:00',NULL);
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `selecaos`
--

DROP TABLE IF EXISTS `selecaos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `selecaos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `grupo_id` bigint unsigned NOT NULL,
  `selecao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `selecaos_grupo_id_foreign` (`grupo_id`),
  CONSTRAINT `selecaos_grupo_id_foreign` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `selecaos`
--

LOCK TABLES `selecaos` WRITE;
/*!40000 ALTER TABLE `selecaos` DISABLE KEYS */;
INSERT INTO `selecaos` VALUES (1,1,'Catar','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(2,1,'Equador','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(3,1,'Holanda','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(4,1,'Senegal','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(5,2,'Estados Unidos','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(6,2,'Inglaterra','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(7,2,'Irâ','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(8,2,'País de Gales','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(9,3,'Argentina','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(10,3,'Arábia Saudita','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(11,3,'México','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(12,3,'Polônia','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(13,4,'Austrália','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(14,4,'Dinamarca','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(15,4,'França','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(16,4,'Tunísia','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(17,5,'Alemanha','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(18,5,'Costa Rica','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(19,5,'Espanha','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(20,5,'Japão','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(21,6,'Bélgica','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(22,6,'Canadá','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(23,6,'Croácia','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(24,6,'Marrocos','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(25,7,'Brasil','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(26,7,'Camarões','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(27,7,'Suíça','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(28,7,'Sérvia','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(29,8,'Coreia do Sul','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(30,8,'Gana','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(31,8,'Portugal','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL),(32,8,'Uruguai','2022-05-23 16:30:00','2022-05-23 16:30:00',NULL);
/*!40000 ALTER TABLE `selecaos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `profile_id` int NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Marcos Vinicius','Nascimento Pereira','contato@axitech.com.br',1,2,'$2a$12$q04BEMWPhfF7Y2Yo9HO/MONeYLSpQ6Y.j733QZLYzqSSEvVaS01ZW','2022-09-30 15:00:00',NULL,'2022-09-30 15:00:00','2022-09-30 15:00:00',NULL),(2,'Sirleii Cristina','da Silva Roberto','sirleii@axitech.com.br',1,2,'$2a$12$q04BEMWPhfF7Y2Yo9HO/MONeYLSpQ6Y.j733QZLYzqSSEvVaS01ZW','2022-09-30 15:00:00',NULL,'2022-09-30 15:00:00','2022-09-30 15:00:00',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-03  8:40:41
