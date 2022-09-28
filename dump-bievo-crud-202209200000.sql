-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: crud
-- ------------------------------------------------------
-- Server version	8.0.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `login_controllers`
--

DROP TABLE IF EXISTS `login_controllers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2022_09_08_225733_create_login_controllers_table',1),(7,'2022_09_09_025301_create_profile_table',3),(10,'2014_10_12_000000_create_users_table',5),(11,'2022_09_09_025726_update_users_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,'Financeiro','Financeiro','2022-09-08 15:00:00','2022-09-08 15:00:00',NULL),(2,'Administrativo','Administrativo','2022-09-08 15:00:00','2022-09-08 15:00:00',NULL),(3,'Recursos Humanos','Recursos Humanos','2022-09-08 15:00:00','2022-09-08 15:00:00',NULL),(4,'Gerência','Gerência','2022-09-08 15:00:00','2022-09-08 15:00:00',NULL),(5,'Vendedores','Vendedores','2022-09-08 15:00:00','2022-09-08 15:00:00',NULL),(6,'Consultores','Consultores','2022-09-08 15:00:00','2022-09-08 15:00:00',NULL),(7,'Comercial','Comercial','2022-09-08 15:00:00','2022-09-08 15:00:00',NULL);
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `profile_id` int NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Marcos Vinicius','Nascimento Pereira','contato@axitech.com.br',1,1,'$2y$10$/8lB0Sz4Koftem56C9w2AO/fO5AmM/DYnNnfyxv2dAgSVW0jfef0y','2022-09-08 18:00:00','','2022-09-08 18:00:00','2022-09-09 14:55:23',NULL),(2,'Sirleii Cristina','da Silva Roberto','sirleii@axitech.com.br',1,3,'$2y$10$/8lB0Sz4Koftem56C9w2AO/fO5AmM/DYnNnfyxv2dAgSVW0jfef0y','2022-09-08 18:00:00','','2022-09-08 18:00:00','2022-09-09 15:00:39',NULL),(3,'Anthonella Karolyne','Silva de Lima','anthonella@axitech.com.br',0,4,'$2y$10$/8lB0Sz4Koftem56C9w2AO/fO5AmM/DYnNnfyxv2dAgSVW0jfef0y','2022-09-08 18:00:00','','2022-09-08 18:00:00','2022-09-09 15:18:43',NULL),(4,'Clayton','Nascimento Pereira','clayton@axitech.com.br',1,1,'$2y$10$/8lB0Sz4Koftem56C9w2AO/fO5AmM/DYnNnfyxv2dAgSVW0jfef0y','2022-09-08 18:00:00','','2022-09-08 18:00:00','2022-09-08 18:00:00',NULL),(5,'Erlane Maria','Alexandre Pereira','erlane@axitech.com.br',1,4,'$2y$10$/8lB0Sz4Koftem56C9w2AO/fO5AmM/DYnNnfyxv2dAgSVW0jfef0y','2022-09-08 18:00:00','','2022-09-08 18:00:00','2022-09-08 18:00:00',NULL),(6,'Claudio','Nascimento Pereira','claudio@axitech.com.br',1,5,'$2y$10$/8lB0Sz4Koftem56C9w2AO/fO5AmM/DYnNnfyxv2dAgSVW0jfef0y','2022-09-08 18:00:00','','2022-09-08 18:00:00','2022-09-08 18:00:00',NULL),(7,'Maria Rita','Nascimento Pereira','maria@axitech.com.br',0,3,'$2y$10$/8lB0Sz4Koftem56C9w2AO/fO5AmM/DYnNnfyxv2dAgSVW0jfef0y','2022-09-08 18:00:00','','2022-09-08 18:00:00','2022-09-09 15:18:02',NULL),(8,'Claudio Altierri','Nascimento Pereira','altierri@axitech.com.br',0,2,'$2y$10$/8lB0Sz4Koftem56C9w2AO/fO5AmM/DYnNnfyxv2dAgSVW0jfef0y','2022-09-08 18:00:00','','2022-09-08 18:00:00','2022-09-09 15:22:12',NULL),(9,'Dulce Helena','Pereira Zozimo','dulce@axitech.com.br',1,5,'$2y$10$/8lB0Sz4Koftem56C9w2AO/fO5AmM/DYnNnfyxv2dAgSVW0jfef0y','2022-09-08 18:00:00','','2022-09-08 18:00:00','2022-09-08 18:00:00',NULL),(10,'Max Willy','Pereira Braga','max@axitech.com.br',1,5,'$2y$10$/8lB0Sz4Koftem56C9w2AO/fO5AmM/DYnNnfyxv2dAgSVW0jfef0y',NULL,NULL,'2022-09-09 15:16:44','2022-09-09 15:16:44',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'crud'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-20  0:00:01
