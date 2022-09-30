-- MySQL dump 10.13  Distrib 5.7.33, for Win64 (x86_64)
--
-- Host: localhost    Database: copa
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `selecoes`
--

DROP TABLE IF EXISTS `selecoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `selecoes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `grupo_id` bigint(20) unsigned NOT NULL,
  `selecao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `selecoes_grupo_id_foreign` (`grupo_id`),
  CONSTRAINT `selecoes_grupo_id_foreign` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `selecoes`
--

LOCK TABLES `selecoes` WRITE;
/*!40000 ALTER TABLE `selecoes` DISABLE KEYS */;
INSERT INTO `selecoes` VALUES (1,1,'Catar','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(2,1,'Equador','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(3,1,'Holanda','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(4,1,'Senegal','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(5,2,'Estados Unidos','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(6,2,'Inglaterra','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(7,2,'Irã','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(8,2,'País de Gales','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(9,3,'Argentina','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(10,3,'Arábia Saudita','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(11,3,'México','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(12,3,'Polônia','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(13,4,'Austrália','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(14,4,'Dinamarca','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(15,4,'França','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(16,4,'Tunísia','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(17,5,'Alemanha','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(18,5,'Costa Rica','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(19,5,'Espanha','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(20,5,'Japão','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(21,6,'Bélgica','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(22,6,'Canadá','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(23,6,'Croácia','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(24,6,'Marrocos','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(25,7,'Brasil','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(26,7,'Camarões','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(27,7,'Suíça','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(28,7,'Sérvia','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(29,8,'Coreia do Sul','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(30,8,'Gana','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(31,8,'Portugal','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL),(32,8,'Uruguai','2022-04-20 21:00:00','2022-04-20 21:00:00',NULL);
/*!40000 ALTER TABLE `selecoes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-29 11:45:58