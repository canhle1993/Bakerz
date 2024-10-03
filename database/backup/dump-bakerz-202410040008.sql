-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: bakerz
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `banner`
--

DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_banner` varchar(255) NOT NULL,
  `image_product` varchar(255) NOT NULL,
  `title1` varchar(255) NOT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `isdelete` int(1) NOT NULL DEFAULT 0,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) DEFAULT NULL,
  `ModifiedDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ModifiedBy` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`banner_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banner`
--

LOCK TABLES `banner` WRITE;
/*!40000 ALTER TABLE `banner` DISABLE KEYS */;
INSERT INTO `banner` VALUES (1,'1727966614.jpg','1727966614.jpg','1111','22222222',107,'33333',1,'2024-10-03 14:43:34',NULL,'2024-10-03 15:55:42',NULL),(2,'1727967470.jpg','1727967470.jpg','1111','22222222',34,'czxczx',1,'2024-10-03 14:57:50',NULL,'2024-10-03 09:29:40',NULL),(3,'1727967844.jpg','1727967844.jpg','aaaa','bbbb',106,'1111',1,'2024-10-03 15:04:04',NULL,'2024-10-03 09:29:45',NULL),(4,'1727972257.jpg','1727972267.jpg','sfsfsf','sfsf',107,'111123424',1,'2024-10-03 15:56:20',NULL,'2024-10-03 09:29:42',NULL),(5,'1727974472.jpg','1727974472.png','Love from','The oven',27,'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.',0,'2024-10-03 16:33:15',NULL,'2024-10-03 09:54:32',NULL),(6,'1727974142.jpg','1727974142.png','Quality is our','Recipe',17,'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.',0,'2024-10-03 16:49:02',NULL,'2024-10-03 09:49:02',NULL),(7,'1727974314.jpg','1727974314.png','Bread that','makes Friends',9,'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.',0,'2024-10-03 16:51:54',NULL,'2024-10-03 09:51:54',NULL);
/*!40000 ALTER TABLE `banner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) DEFAULT NULL,
  `ModifiedDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ModifiedBy` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE,
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (205,24,66,1,'2024-10-03 09:21:00',NULL,'2024-10-03 02:21:00',NULL),(213,26,88,1,'2024-10-03 11:16:10',NULL,'2024-10-03 04:16:10',NULL);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `isdelete` int(11) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES ('2024-09-21 22:10:15',NULL,'2024-09-24 07:06:20',NULL,'1727018037.png',1,'Danh Mục1',NULL,1),('2024-09-21 22:10:15',NULL,'2024-09-22 15:18:02',NULL,'1727017606.png',2,'132114',NULL,1),('2024-09-22 16:13:52',NULL,'2024-09-24 07:06:11',NULL,'1727146195.png',3,'242424',NULL,1),('2024-09-22 16:14:07',NULL,'2024-09-23 04:01:30',NULL,'1727021936.png',4,'242424',NULL,1),('2024-09-22 16:26:09',NULL,'2024-09-24 07:06:14',NULL,'1727108203.png',5,'tttt',NULL,1),('2024-09-22 16:54:59',NULL,'2024-09-23 12:13:54',NULL,'1727091454.png',6,'bbbe',NULL,1),('2024-09-23 12:13:49',NULL,'2024-09-24 07:06:17',NULL,'1727093715.png',7,'1313',NULL,1),('2024-09-24 07:05:57',NULL,'2024-10-03 11:24:26',NULL,'1727954666.jpg',8,'Sweet Breads',NULL,NULL),('2024-09-24 07:10:31',NULL,'2024-10-03 11:24:40',NULL,'1727954680.jpg',9,'Baked Goods',NULL,NULL),('2024-09-24 07:10:58',NULL,'2024-10-03 11:24:55',NULL,'1727954695.jpg',10,'Cakes',NULL,NULL),('2024-09-24 07:11:38',NULL,'2024-10-03 11:25:13',NULL,'1727954713.jpg',11,'Cheesecakes',NULL,NULL),('2024-09-26 08:56:45',NULL,'2024-09-30 05:58:06',NULL,'1727341005.jpg',12,'Hot',NULL,1),('2024-09-30 06:51:23',NULL,'2024-10-03 11:22:13',NULL,'1727954533.jpg',13,'Seasonal Products',NULL,NULL),('2024-09-30 16:39:40',NULL,'2024-09-30 16:39:40',NULL,'1727714380.png',14,'Coffee & Espresso',NULL,NULL);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contactus` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactus`
--

LOCK TABLES `contactus` WRITE;
/*!40000 ALTER TABLE `contactus` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discount`
--

DROP TABLE IF EXISTS `discount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discount` (
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` varchar(255) DEFAULT NULL,
  `discount_id` int(11) NOT NULL AUTO_INCREMENT,
  `promotion_name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `isdelete` int(11) DEFAULT NULL,
  PRIMARY KEY (`discount_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discount`
--

LOCK TABLES `discount` WRITE;
/*!40000 ALTER TABLE `discount` DISABLE KEYS */;
INSERT INTO `discount` VALUES ('2024-09-25 21:45:53',NULL,'2024-09-25 14:46:09',NULL,1,'flash sale','2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 12:16:22',NULL,'2024-09-26 12:16:22',NULL,2,'event','2024-09-27','2024-09-28',0.12,NULL);
/*!40000 ALTER TABLE `discount` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `discountproduct`
--

DROP TABLE IF EXISTS `discountproduct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `discountproduct` (
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` varchar(255) DEFAULT NULL,
  `discount_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `discount_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `isdelete` int(11) DEFAULT NULL,
  PRIMARY KEY (`discount_product_id`),
  KEY `discount_id` (`discount_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `discountproduct_ibfk_1` FOREIGN KEY (`discount_id`) REFERENCES `discount` (`discount_id`),
  CONSTRAINT `discountproduct_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discountproduct`
--

LOCK TABLES `discountproduct` WRITE;
/*!40000 ALTER TABLE `discountproduct` DISABLE KEYS */;
INSERT INTO `discountproduct` VALUES ('2024-09-26 17:32:49',NULL,NULL,NULL,5,1,66,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 17:32:56',NULL,NULL,NULL,6,1,88,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 17:33:01',NULL,NULL,NULL,7,1,64,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 17:33:06',NULL,NULL,NULL,8,1,62,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 17:33:21',NULL,NULL,NULL,9,1,61,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 17:33:49',NULL,NULL,NULL,10,1,28,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 17:33:59',NULL,NULL,NULL,11,1,27,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 17:34:06',NULL,NULL,NULL,12,1,25,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 17:34:15',NULL,NULL,NULL,13,1,21,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 17:34:26',NULL,NULL,NULL,14,1,18,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 17:35:42',NULL,NULL,NULL,15,1,47,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 17:35:49',NULL,NULL,NULL,16,1,34,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 17:36:01',NULL,NULL,NULL,17,1,39,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 17:36:13',NULL,NULL,NULL,18,1,42,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 17:36:26',NULL,NULL,NULL,19,1,37,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-26 19:16:31',NULL,NULL,NULL,20,2,66,'2024-09-27','2024-09-28',0.12,NULL);
/*!40000 ALTER TABLE `discountproduct` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
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
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `heathy_catalog`
--

DROP TABLE IF EXISTS `heathy_catalog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `heathy_catalog` (
  `heath_id` int(11) NOT NULL AUTO_INCREMENT,
  `heath_catalog` varchar(255) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ModifiedDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ModifiedBy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `isdelete` int(11) DEFAULT NULL,
  PRIMARY KEY (`heath_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `heathy_catalog`
--

LOCK TABLES `heathy_catalog` WRITE;
/*!40000 ALTER TABLE `heathy_catalog` DISABLE KEYS */;
INSERT INTO `heathy_catalog` VALUES (1,'Tim Mạch','2024-09-21 00:29:26',NULL,'2024-09-23 09:10:37',NULL,NULL),(2,'Tiểu Đường','2024-09-21 00:29:26',NULL,'2024-09-24 05:07:52',NULL,NULL),(3,'Cao Huyết Áp','2024-09-21 00:29:26',NULL,'2024-09-23 09:16:56',NULL,NULL),(4,'Thừa Cân','2024-09-21 00:29:26',NULL,'2024-09-21 00:29:26',NULL,NULL),(5,'Thiếu Cân','2024-09-21 00:29:26',NULL,'2024-09-21 00:29:26',NULL,NULL),(6,'Men gan cao','2024-09-21 00:29:26',NULL,'2024-09-23 22:15:02',NULL,NULL),(7,'qeqeqe','2024-09-23 07:29:19',NULL,'2024-09-23 07:29:39',NULL,1),(8,'Có nguy cơ mắc bệnh đột quỵ','2024-09-23 22:15:14',NULL,'2024-09-23 22:15:14',NULL,NULL);
/*!40000 ALTER TABLE `heathy_catalog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `link_product_heathy`
--

DROP TABLE IF EXISTS `link_product_heathy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `link_product_heathy` (
  `link_prod_heath_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `heath_id` int(11) NOT NULL,
  PRIMARY KEY (`link_prod_heath_id`),
  KEY `product_id` (`product_id`),
  KEY `heath_id` (`heath_id`),
  CONSTRAINT `link_product_heathy_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  CONSTRAINT `link_product_heathy_ibfk_2` FOREIGN KEY (`heath_id`) REFERENCES `heathy_catalog` (`heath_id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `link_product_heathy`
--

LOCK TABLES `link_product_heathy` WRITE;
/*!40000 ALTER TABLE `link_product_heathy` DISABLE KEYS */;
INSERT INTO `link_product_heathy` VALUES (9,5,2),(12,5,5),(13,7,1),(16,8,2),(17,8,3),(20,10,1),(21,9,1),(22,9,2),(23,9,3),(24,9,6),(25,9,8),(26,16,1),(27,16,2),(28,16,3),(29,16,6),(30,16,8),(31,17,1),(32,17,2),(33,17,3),(34,17,6),(35,17,8),(36,26,1),(37,26,2),(38,26,3),(39,26,6),(40,26,8),(41,28,1),(42,28,2),(43,28,3),(44,28,6),(45,28,8),(46,32,1),(47,32,2),(48,32,3),(49,32,6),(50,32,8),(51,33,2),(53,36,1),(54,36,3),(55,36,6),(56,36,8),(57,37,2),(58,39,1),(59,39,2),(60,39,3),(61,39,6),(62,39,8),(63,40,2),(64,49,1),(65,49,6),(66,49,8),(67,53,3),(68,55,2),(69,55,3),(70,58,2),(71,60,1),(72,60,2),(73,60,6),(74,60,8),(75,62,3),(76,64,2),(77,67,2),(78,69,1),(79,69,2),(80,69,6),(81,69,8),(82,71,1),(83,71,2),(84,71,6),(85,71,8),(86,73,2),(87,74,1),(88,74,2),(89,74,3),(90,74,6),(91,74,8),(92,75,1),(93,75,2),(94,75,6),(95,75,8),(96,78,2),(97,78,3),(98,79,1),(99,79,2),(100,79,6),(101,79,8),(102,81,2),(103,81,3),(104,9,5),(105,11,5),(106,14,5),(107,16,4),(108,17,5),(109,18,5),(110,19,4),(111,20,5),(112,25,4),(113,26,5),(114,24,4),(115,28,4),(116,23,4),(117,27,5),(118,33,5),(119,47,5),(120,43,5),(121,35,5),(122,41,5),(123,37,5),(124,34,5),(125,36,5),(126,30,4),(127,40,4),(128,42,4),(129,39,4),(130,48,4),(131,31,4),(132,55,5),(133,52,5),(134,65,5),(135,62,5),(136,56,5),(137,54,5),(138,49,5),(139,61,5),(140,58,4),(141,63,4),(142,88,4),(143,66,4),(144,78,4),(145,77,4),(146,84,4),(147,87,4),(148,81,4),(149,79,5),(150,73,5),(151,72,5),(152,83,5),(153,70,5),(155,69,5),(156,76,5),(157,68,5),(158,10,5);
/*!40000 ALTER TABLE `link_product_heathy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `linkcatalogproduct`
--

DROP TABLE IF EXISTS `linkcatalogproduct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `linkcatalogproduct` (
  `link_catalog_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`link_catalog_product_id`),
  KEY `category_id` (`category_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `linkcatalogproduct_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  CONSTRAINT `linkcatalogproduct_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linkcatalogproduct`
--

LOCK TABLES `linkcatalogproduct` WRITE;
/*!40000 ALTER TABLE `linkcatalogproduct` DISABLE KEYS */;
INSERT INTO `linkcatalogproduct` VALUES (3,1,5),(4,1,7),(9,6,8),(10,8,9),(12,8,11),(13,8,12),(14,8,13),(15,8,15),(16,8,14),(17,8,16),(18,8,17),(19,8,18),(20,8,19),(21,8,20),(22,8,21),(23,8,22),(24,8,23),(25,8,24),(26,8,25),(27,8,26),(28,8,27),(29,8,28),(30,9,29),(31,9,30),(32,9,31),(33,9,32),(34,9,33),(35,9,34),(36,9,35),(37,9,36),(38,9,37),(39,9,38),(40,9,39),(41,9,40),(42,9,41),(43,9,42),(44,9,43),(45,9,44),(46,9,45),(47,9,46),(48,9,47),(49,9,48),(52,10,51),(53,10,50),(54,10,49),(55,10,52),(56,10,53),(57,10,54),(58,10,55),(59,10,56),(60,10,57),(61,10,58),(62,10,59),(63,10,60),(64,10,61),(65,10,62),(66,10,63),(67,10,64),(68,10,65),(69,10,66),(70,10,67),(71,11,68),(72,11,69),(73,11,70),(74,11,71),(75,11,72),(76,11,73),(77,11,74),(78,11,75),(79,11,76),(80,11,77),(81,11,78),(82,11,79),(83,11,80),(84,11,81),(85,11,82),(86,11,83),(87,11,84),(88,11,85),(89,11,86),(90,11,87),(91,10,88),(92,8,10),(98,13,89),(99,13,90),(100,13,91),(101,13,92),(102,13,93),(103,14,94),(104,14,95),(105,14,96),(106,14,97),(107,14,98),(108,14,99),(109,14,100),(110,14,101),(111,14,102),(112,14,103),(113,14,104),(114,14,105),(115,14,106),(116,14,107),(117,14,108);
/*!40000 ALTER TABLE `linkcatalogproduct` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `locations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(11,8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,10.77688900,106.70098100,'2024-10-03 08:37:22','2024-10-03 08:37:22'),(2,10.82309900,106.62966200,'2024-10-03 08:37:22','2024-10-03 08:37:22'),(3,10.79725225,106.70583863,'2024-10-03 01:41:13','2024-10-03 01:41:13'),(4,10.80566187,106.69440150,'2024-10-03 01:43:04','2024-10-03 01:43:04'),(5,10.79723089,106.70578440,'2024-10-03 01:47:34','2024-10-03 01:47:34'),(6,10.79725898,106.70583455,'2024-10-03 01:51:10','2024-10-03 01:51:10'),(7,10.80566187,106.69440150,'2024-10-03 01:51:15','2024-10-03 01:51:15'),(8,10.79722499,106.70587136,'2024-10-03 01:58:17','2024-10-03 01:58:17'),(9,10.79722499,106.70587136,'2024-10-03 01:58:24','2024-10-03 01:58:24'),(10,10.79722979,106.70578360,'2024-10-03 02:03:12','2024-10-03 02:03:12'),(11,10.80566187,106.69440150,'2024-10-03 02:03:45','2024-10-03 02:03:45'),(12,10.79723177,106.70581328,'2024-10-03 02:12:26','2024-10-03 02:12:26'),(13,10.79722539,106.70578536,'2024-10-03 02:18:18','2024-10-03 02:18:18'),(14,10.79725225,106.70583863,'2024-10-03 02:45:12','2024-10-03 02:45:12'),(15,10.79725988,106.70584026,'2024-10-03 03:57:05','2024-10-03 03:57:05'),(16,10.79725898,106.70583455,'2024-10-03 04:06:24','2024-10-03 04:06:24'),(17,10.80566187,106.69440150,'2024-10-03 04:06:31','2024-10-03 04:06:31'),(18,10.79726863,106.70582563,'2024-10-03 04:19:46','2024-10-03 04:19:46');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL,
  `reply_id` int(11) NOT NULL,
  `is_read` int(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ModifiedBy` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_innotify` (`user_id`),
  KEY `fk_review` (`review_id`),
  KEY `fk_reply` (`reply_id`),
  CONSTRAINT `fk_reply` FOREIGN KEY (`reply_id`) REFERENCES `user_review_replies` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_review` FOREIGN KEY (`review_id`) REFERENCES `userreview` (`ID`) ON DELETE CASCADE,
  CONSTRAINT `fk_user_innotify` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order` (
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` varchar(255) DEFAULT NULL,
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `total` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `pay` decimal(10,2) DEFAULT NULL,
  `purchase_date` date NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `delivery_address` text DEFAULT NULL,
  `delivery_phone` varchar(20) DEFAULT NULL,
  `delivery_fee` decimal(10,2) DEFAULT NULL,
  `isdelete` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES ('2024-09-29 07:26:52',NULL,'2024-09-29 16:06:07',NULL,51,26,4.25,NULL,4.25,'2024-09-29','Cancel','TPHCM','0123456789',0.00,0),('2024-09-29 07:28:27',NULL,'2024-09-29 07:28:47',NULL,52,26,8.50,NULL,8.50,'2024-09-29','Paid','TPHCM','0123456789',0.00,0),('2024-09-29 07:54:35',NULL,'2024-09-29 16:20:05',NULL,53,26,4.25,NULL,4.25,'2024-09-29','Delivered','TPHCM','0123456789',0.00,0),('2024-09-29 11:37:38',NULL,'2024-09-30 13:31:59',NULL,54,26,4.25,NULL,4.25,'2024-09-29','Delivered','TPHCM','3213',0.00,0),('2024-09-29 14:25:01',NULL,'2024-09-29 16:17:46',NULL,55,26,57.10,NULL,57.10,'2024-09-29','Cancel','TPHCM','3213',0.00,0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:27',NULL,56,26,101.85,NULL,101.85,'2024-09-29','Paid','TPHCM','3213',0.00,0),('2024-09-29 14:46:07',NULL,'2024-09-29 14:46:23',NULL,57,26,29.75,NULL,29.75,'2024-09-29','Paid','TPHCM','3213',0.00,0),('2024-09-29 14:47:26',NULL,'2024-09-30 13:31:20',NULL,58,26,20.00,NULL,20.00,'2024-09-29','Delivered','TPHCM','3213',0.00,0),('2024-09-29 16:20:32',NULL,'2024-09-29 16:23:10',NULL,59,26,11.55,NULL,11.55,'2024-09-29','Delivered','TPHCM','3213',0.00,0),('2024-09-29 16:34:54',NULL,'2024-09-29 16:36:06',NULL,60,26,4.25,NULL,4.25,'2024-09-29','Confirmed','TPHCM','3123',0.00,0),('2024-09-29 16:55:21',NULL,'2024-09-29 16:56:42',NULL,61,26,10.00,NULL,10.00,'2024-09-29','Delivered','đâs','4234234',0.00,0),('2024-09-30 02:53:37',NULL,'2024-09-30 03:10:39',NULL,62,25,25.00,NULL,25.00,'2024-09-30','Delivered','TPHCM','0123456789',0.00,0),('2024-09-30 02:56:22',NULL,'2024-09-30 02:56:22',NULL,63,25,29.25,NULL,29.25,'2024-09-30','Pending','TPHCM','1234567899',0.00,0),('2024-09-30 03:00:17',NULL,'2024-09-30 13:32:12',NULL,64,25,25.00,NULL,25.00,'2024-09-30','Delivered','TPHCM','1234567899',0.00,0),('2024-09-30 03:05:05',NULL,'2024-09-30 03:10:29',NULL,65,25,10.00,NULL,10.00,'2024-09-30','Cancel','TPHCM','1234567899',0.00,0),('2024-09-30 03:08:02',NULL,'2024-09-30 03:08:21',NULL,66,25,25.00,NULL,25.00,'2024-09-30','Paid','TPHCM','1234567899',0.00,0),('2024-09-30 05:27:12',NULL,'2024-09-30 05:27:41',NULL,67,25,150.00,NULL,150.00,'2024-09-30','Paid','TPHCM','1234567899',0.00,0),('2024-09-30 05:29:00',NULL,'2024-09-30 13:33:00',NULL,68,25,200.00,NULL,200.00,'2024-09-30','Confirmed','TPHCM','1234567899',0.00,0),('2024-09-30 05:37:01',NULL,'2024-09-30 05:37:21',NULL,69,25,10.00,NULL,10.00,'2024-09-30','Paid','TPHCM','1234567899',0.00,0),('2024-09-30 05:47:02',NULL,'2024-09-30 05:47:02',NULL,70,25,10.00,NULL,10.00,'2024-09-30','Pending','TPHCM','1234567899',0.00,0),('2024-09-30 05:48:34',NULL,'2024-09-30 05:48:34',NULL,71,25,10.00,NULL,10.00,'2024-09-30','Pending','TPHCM','1234567899',0.00,0),('2024-09-30 05:48:57',NULL,'2024-09-30 13:32:56',NULL,72,25,10.00,NULL,10.00,'2024-09-30','Confirmed','TPHCM','1234567899',0.00,0),('2024-09-30 05:51:26',NULL,'2024-09-30 05:51:26',NULL,73,25,10.00,NULL,10.00,'2024-09-30','Pending','TPHCM','1234567899',0.00,0),('2024-09-30 05:52:17',NULL,'2024-09-30 13:32:38',NULL,74,25,10.00,NULL,10.00,'2024-09-30','Delivered','TPHCM','1234567899',0.00,0),('2024-09-30 12:32:16',NULL,'2024-09-30 12:32:16',NULL,75,26,5.00,NULL,5.00,'2024-09-30','Pending','TPHCM','1234567899',0.00,0),('2024-09-30 12:32:35',NULL,'2024-09-30 12:32:52',NULL,76,26,4.25,NULL,4.25,'2024-09-30','Paid','TPHCM','1234567899',0.00,0),('2024-09-30 12:54:18',NULL,'2024-09-30 12:54:18',NULL,77,26,4.25,NULL,4.25,'2024-09-30','Pending','TPHCM','1234567899',0.00,0),('2024-09-30 12:56:04',NULL,'2024-09-30 12:56:04',NULL,78,26,4.25,NULL,4.25,'2024-09-30','Pending','TPHCM','1234567899',0.00,0),('2024-09-30 12:56:41',NULL,'2024-09-30 12:56:41',NULL,79,26,4.25,NULL,4.25,'2024-09-30','Pending','TPHCM','1234567899',0.00,0),('2024-09-30 13:02:12',NULL,'2024-09-30 13:02:12',NULL,80,26,4.25,NULL,4.25,'2024-09-30','Pending','TPHCM','1234567899',0.00,0),('2024-09-30 13:03:10',NULL,'2024-09-30 13:03:10',NULL,81,26,4.25,NULL,4.25,'2024-09-30','Pending','TPHCM','1234567899',0.00,0),('2024-09-30 13:05:33',NULL,'2024-09-30 13:05:56',NULL,82,26,4.25,NULL,4.25,'2024-09-30','Paid','TPHCM','1234567899',0.00,0),('2024-09-30 13:08:36',NULL,'2024-09-30 13:08:56',NULL,83,26,5.00,NULL,5.00,'2024-09-30','Paid','TPHCM','1234567899',0.00,0),('2024-09-30 13:11:36',NULL,'2024-09-30 13:11:36',NULL,84,26,12.75,NULL,12.75,'2024-09-30','Pending','TPHCM','1234567899',0.00,0),('2024-09-30 13:13:04',NULL,'2024-09-30 13:13:04',NULL,85,26,5.00,NULL,5.00,'2024-09-30','Pending','TPHCM','1234567899',0.00,0),('2024-09-30 13:34:21',NULL,'2024-09-30 13:35:09',NULL,86,26,94.90,NULL,94.90,'2024-09-30','Delivered','TPHCM','1234567899',0.00,0),('2024-09-30 14:14:12',NULL,'2024-10-01 13:08:19',NULL,87,26,1000.00,NULL,1000.00,'2024-09-30','Confirmed','TPHCM','1234567899',0.00,0),('2024-09-30 14:15:08',NULL,'2024-09-30 14:15:28',NULL,88,26,995.00,NULL,995.00,'2024-09-30','Delivered','TPHCM','1234567899',0.00,0),('2024-09-30 15:11:48',NULL,'2024-09-30 15:11:48',NULL,89,26,210.00,NULL,205.80,'2024-09-30','Pending','TPHCM','1234567899',0.00,0),('2024-09-30 15:15:41',NULL,'2024-09-30 15:15:41',NULL,90,26,159.25,3.19,156.06,'2024-09-30','Pending','TPHCM','1234567899',0.00,0),('2024-10-01 07:10:46',NULL,'2024-10-01 07:17:20',NULL,91,28,20.00,NULL,20.00,'2024-10-01','Delivered','TPHCM','123123123',0.00,0),('2024-10-01 07:14:13',NULL,'2024-10-01 07:15:24',NULL,92,26,425.00,8.50,416.50,'2024-10-01','Delivered','đâs','42342',0.00,0),('2024-10-01 08:47:18',NULL,'2024-10-01 08:47:18',NULL,93,28,5.00,NULL,5.00,'2024-10-01','Pending','ádasdasda','312312',0.00,0),('2024-10-01 08:49:07',NULL,'2024-10-01 08:49:07',NULL,94,28,10.00,NULL,10.00,'2024-10-01','Pending','adasdas','32234',0.00,0),('2024-10-01 08:51:54',NULL,'2024-10-01 08:54:11',NULL,95,26,20.00,0.40,19.60,'2024-10-01','Delivered','TPHCM','31371237',0.00,0),('2024-10-01 08:58:43',NULL,'2024-10-01 09:00:23',NULL,96,26,5000.00,100.00,4900.00,'2024-10-01','Delivered','TPHCM','123123123',0.00,0),('2024-10-01 09:01:46',NULL,'2024-10-01 09:01:46',NULL,97,26,5.00,0.25,4.75,'2024-10-01','Pending','TPHCM','312312',0.00,0),('2024-10-01 12:59:38',NULL,'2024-10-01 13:02:08',NULL,98,26,45.00,2.25,42.75,'2024-10-01','Delivered','TPHCM','0123456',0.00,0),('2024-10-01 13:39:35',NULL,'2024-10-01 13:40:54',NULL,99,27,1500.00,NULL,1500.00,'2024-10-01','Delivered','TPHCM','3213123',0.00,0),('2024-10-01 13:41:35',NULL,'2024-10-01 13:41:35',NULL,100,27,5.00,0.10,4.90,'2024-10-01','Pending','TPHCM','312312',0.00,0),('2024-10-03 07:15:06',NULL,'2024-10-03 07:15:56',NULL,101,26,85.00,4.25,80.75,'2024-10-03','Delivered','TPHCM','123456789',0.00,0),('2024-10-03 08:59:59',NULL,'2024-10-03 08:59:59',NULL,102,24,7.30,NULL,7.30,'2024-10-03','Pending','TPHCM','0961563167',0.00,0);
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orderdetails` (
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` varchar(255) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `purchase_date` date NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `isdelete` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`,`product_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`),
  CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderdetails`
--

LOCK TABLES `orderdetails` WRITE;
/*!40000 ALTER TABLE `orderdetails` DISABLE KEYS */;
INSERT INTO `orderdetails` VALUES ('2024-09-29 07:26:52',NULL,'2024-09-29 07:26:52',NULL,51,64,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 07:28:27',NULL,'2024-09-29 07:28:27',NULL,52,64,2,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 07:54:35',NULL,'2024-09-29 07:54:35',NULL,53,64,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 11:37:38',NULL,'2024-09-29 11:37:38',NULL,54,88,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 14:25:01',NULL,'2024-09-29 14:25:01',NULL,55,37,6,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 14:25:01',NULL,'2024-09-29 14:25:01',NULL,55,66,2,10.00,7.30,'2024-09-29','Active',0),('2024-09-29 14:25:01',NULL,'2024-09-29 14:25:01',NULL,55,88,4,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,18,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,21,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,26,1,5.00,5.00,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,27,2,10.00,8.50,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,28,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,30,1,10.00,10.00,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,34,1,10.00,8.50,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,37,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,39,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,42,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,47,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,61,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,62,1,10.00,8.50,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,66,2,10.00,7.30,'2024-09-29','Active',0),('2024-09-29 14:39:01',NULL,'2024-09-29 14:39:01',NULL,56,88,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 14:46:07',NULL,'2024-09-29 14:46:07',NULL,57,21,2,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 14:46:07',NULL,'2024-09-29 14:46:07',NULL,57,25,1,10.00,8.50,'2024-09-29','Active',0),('2024-09-29 14:46:07',NULL,'2024-09-29 14:46:07',NULL,57,27,1,10.00,8.50,'2024-09-29','Active',0),('2024-09-29 14:46:07',NULL,'2024-09-29 14:46:07',NULL,57,28,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 14:47:26',NULL,'2024-09-29 14:47:26',NULL,58,9,1,5.00,5.00,'2024-09-29','Active',0),('2024-09-29 14:47:26',NULL,'2024-09-29 14:47:26',NULL,58,10,1,5.00,5.00,'2024-09-29','Active',0),('2024-09-29 14:47:26',NULL,'2024-09-29 14:47:26',NULL,58,11,1,10.00,10.00,'2024-09-29','Active',0),('2024-09-29 16:20:32',NULL,'2024-09-29 16:20:32',NULL,59,66,1,10.00,7.30,'2024-09-29','Active',0),('2024-09-29 16:20:32',NULL,'2024-09-29 16:20:32',NULL,59,88,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 16:34:54',NULL,'2024-09-29 16:34:54',NULL,60,18,1,5.00,4.25,'2024-09-29','Active',0),('2024-09-29 16:55:21',NULL,'2024-09-29 16:55:21',NULL,61,9,2,5.00,5.00,'2024-09-29','Active',0),('2024-09-30 02:53:37',NULL,'2024-09-30 02:53:37',NULL,62,9,1,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 02:53:37',NULL,'2024-09-30 02:53:37',NULL,62,29,1,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 02:53:37',NULL,'2024-09-30 02:53:37',NULL,62,51,1,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 02:53:37',NULL,'2024-09-30 02:53:37',NULL,62,68,1,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 02:56:22',NULL,'2024-09-30 02:56:22',NULL,63,10,1,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 02:56:22',NULL,'2024-09-30 02:56:22',NULL,63,13,1,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 02:56:22',NULL,'2024-09-30 02:56:22',NULL,63,16,1,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 02:56:22',NULL,'2024-09-30 02:56:22',NULL,63,18,1,5.00,4.25,'2024-09-30','Active',0),('2024-09-30 02:56:22',NULL,'2024-09-30 02:56:22',NULL,63,23,1,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 02:56:22',NULL,'2024-09-30 02:56:22',NULL,63,26,1,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 03:00:17',NULL,'2024-09-30 03:00:17',NULL,64,29,1,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 03:00:17',NULL,'2024-09-30 03:00:17',NULL,64,30,1,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 03:00:17',NULL,'2024-09-30 03:00:17',NULL,64,31,1,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 03:05:05',NULL,'2024-09-30 03:05:05',NULL,65,52,1,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 03:08:02',NULL,'2024-09-30 03:08:02',NULL,66,10,1,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 03:08:02',NULL,'2024-09-30 03:08:02',NULL,66,69,2,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 05:27:12',NULL,'2024-09-30 05:27:12',NULL,67,51,15,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 05:29:00',NULL,'2024-09-30 05:29:00',NULL,68,59,20,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 05:37:01',NULL,'2024-09-30 05:37:01',NULL,69,51,1,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 05:47:02',NULL,'2024-09-30 05:47:02',NULL,70,51,1,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 05:48:34',NULL,'2024-09-30 05:48:34',NULL,71,51,1,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 05:48:57',NULL,'2024-09-30 05:48:57',NULL,72,59,1,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 05:51:26',NULL,'2024-09-30 05:51:26',NULL,73,51,1,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 05:52:17',NULL,'2024-09-30 05:52:17',NULL,74,51,1,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 12:32:16',NULL,'2024-09-30 12:32:16',NULL,75,9,1,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 12:32:35',NULL,'2024-09-30 12:32:35',NULL,76,18,1,5.00,4.25,'2024-09-30','Active',0),('2024-09-30 12:54:18',NULL,'2024-09-30 12:54:18',NULL,77,88,1,5.00,4.25,'2024-09-30','Active',0),('2024-09-30 12:56:04',NULL,'2024-09-30 12:56:04',NULL,78,18,1,5.00,4.25,'2024-09-30','Active',0),('2024-09-30 12:56:41',NULL,'2024-09-30 12:56:41',NULL,79,88,1,5.00,4.25,'2024-09-30','Active',0),('2024-09-30 13:02:12',NULL,'2024-09-30 13:02:12',NULL,80,18,1,5.00,4.25,'2024-09-30','Active',0),('2024-09-30 13:03:10',NULL,'2024-09-30 13:03:10',NULL,81,88,1,5.00,4.25,'2024-09-30','Active',0),('2024-09-30 13:05:33',NULL,'2024-09-30 13:05:33',NULL,82,18,1,5.00,4.25,'2024-09-30','Active',0),('2024-09-30 13:08:36',NULL,'2024-09-30 13:08:36',NULL,83,9,1,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 13:11:36',NULL,'2024-09-30 13:11:36',NULL,84,88,3,5.00,4.25,'2024-09-30','Active',0),('2024-09-30 13:13:04',NULL,'2024-09-30 13:13:04',NULL,85,9,1,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 13:34:21',NULL,'2024-09-30 13:34:21',NULL,86,66,13,10.00,7.30,'2024-09-30','Active',0),('2024-09-30 14:14:12',NULL,'2024-09-30 14:14:12',NULL,87,11,100,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 14:15:08',NULL,'2024-09-30 14:15:08',NULL,88,9,1,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 14:15:08',NULL,'2024-09-30 14:15:08',NULL,88,11,99,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 15:11:48',NULL,'2024-09-30 15:11:48',NULL,89,11,21,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 15:15:41',NULL,'2024-09-30 15:15:41',NULL,90,9,7,5.00,5.00,'2024-09-30','Active',0),('2024-09-30 15:15:41',NULL,'2024-09-30 15:15:41',NULL,90,11,12,10.00,10.00,'2024-09-30','Active',0),('2024-09-30 15:15:41',NULL,'2024-09-30 15:15:41',NULL,90,88,1,5.00,4.25,'2024-09-30','Active',0),('2024-10-01 07:10:46',NULL,'2024-10-01 07:10:46',NULL,91,9,4,5.00,5.00,'2024-10-01','Active',0),('2024-10-01 07:14:13',NULL,'2024-10-01 07:14:13',NULL,92,13,12,5.00,5.00,'2024-10-01','Active',0),('2024-10-01 07:14:13',NULL,'2024-10-01 07:14:13',NULL,92,15,1,5.00,5.00,'2024-10-01','Active',0),('2024-10-01 07:14:13',NULL,'2024-10-01 07:14:13',NULL,92,92,10,15.00,15.00,'2024-10-01','Active',0),('2024-10-01 07:14:13',NULL,'2024-10-01 07:14:13',NULL,92,93,14,15.00,15.00,'2024-10-01','Active',0),('2024-10-01 08:47:18',NULL,'2024-10-01 08:47:18',NULL,93,9,1,5.00,5.00,'2024-10-01','Active',0),('2024-10-01 08:49:07',NULL,'2024-10-01 08:49:07',NULL,94,9,2,5.00,5.00,'2024-10-01','Active',0),('2024-10-01 08:51:54',NULL,'2024-10-01 08:51:54',NULL,95,15,4,5.00,5.00,'2024-10-01','Active',0),('2024-10-01 08:58:43',NULL,'2024-10-01 08:58:43',NULL,96,11,500,10.00,10.00,'2024-10-01','Active',0),('2024-10-01 09:01:46',NULL,'2024-10-01 09:01:46',NULL,97,15,1,5.00,5.00,'2024-10-01','Active',0),('2024-10-01 12:59:38',NULL,'2024-10-01 12:59:38',NULL,98,9,9,5.00,5.00,'2024-10-01','Active',0),('2024-10-01 13:39:35',NULL,'2024-10-01 13:39:35',NULL,99,89,100,15.00,15.00,'2024-10-01','Active',0),('2024-10-01 13:41:35',NULL,'2024-10-01 13:41:35',NULL,100,9,1,5.00,5.00,'2024-10-01','Active',0),('2024-10-03 07:15:06',NULL,'2024-10-03 07:15:06',NULL,101,88,20,5.00,4.25,'2024-10-03','Active',0),('2024-10-03 08:59:59',NULL,'2024-10-03 08:59:59',NULL,102,66,1,10.00,7.30,'2024-10-03','Active',0);
/*!40000 ALTER TABLE `orderdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `inventory` int(11) DEFAULT 0,
  `describe` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(100) DEFAULT NULL,
  `isdelete` int(11) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES ('2024-09-21 07:56:52',NULL,'2024-09-22 06:30:33',NULL,'1726984354_0.png',5,'Sản Phẩm 5',1,NULL,500000.00,NULL,1),('2024-09-22 07:37:17','26','2024-09-24 07:02:33',NULL,'1726990637_0.png',6,'Thêm bằng Màn Hình New Product',11,NULL,12.00,NULL,1),('2024-09-22 08:05:10','26','2024-09-24 07:02:36',NULL,'1726992310_0.png',7,'Thêm bằng Màn Hình New Product V2',2,'test test test test test test test test test test test test test test test test test test',12.00,NULL,1),('2024-09-22 16:55:41','26','2024-09-24 07:02:39',NULL,'1727024141_0.png',8,'uuuu',3,'jgjghj',4.00,NULL,1),('2024-09-24 07:14:21','25','2024-09-30 08:58:31','25','1727686711_0.png',9,'Almond bread',10,'- Product Description: Milk bread is a soft, fluffy bread known for its light, tender crumb and subtly sweet flavor, making it perfect for both savory and sweet uses. Baked to a golden-brown color, its slightly glossy crust comes from an egg wash that adds a gentle sheen. Inside, the bread is exceptionally airy, making it a popular choice for sandwiches, toast, or simply enjoying on its own with a spread of butter. Milk bread is often baked in loaves and sliced to reveal its pillowy texture, which stays soft for days due to the milk and butter in the recipe. The mild sweetness of milk bread pairs well with jams, honey, or even savory toppings.\r\n\r\n- Ingredients: Flour, yeast, milk, butter, sugar, salt, eggs (for egg wash).',5.00,NULL,NULL),('2024-09-24 07:23:12','25','2024-09-30 08:59:07','25','1727686747_0.png',10,'Banana bread',10,'- Product Description:  Banana bread is a moist, dense loaf packed with ripe bananas, providing a natural sweetness and rich flavor. It often includes ingredients like walnuts, chocolate chips, or spices such as cinnamon to enhance its flavor. The bread has a tender crumb and is perfect for breakfast, dessert, or a snack. The use of bananas ensures that the loaf stays moist for several days, making it a popular and long-lasting treat. Its comforting taste and aroma make banana bread a go-to option for a quick, delicious bake.\r\n\r\n- Ingredients: Flour, baking soda, salt, mashed ripe bananas, sugar, eggs, melted butter.',5.00,NULL,NULL),('2024-09-24 07:31:02','25','2024-09-30 08:59:30','25','1727686770_0.png',11,'Brioche',10,'- Product Description: Brioche is a rich and buttery French bread that blends the texture of bread with the richness of a pastry. Known for its tender crumb and golden, flaky crust, brioche is often enriched with eggs, butter, and milk, giving it a slightly sweet and luxurious flavor. The dough rises into a light and airy loaf, and its distinctive sheen comes from a generous egg wash before baking. Brioche is incredibly versatile and can be used for both sweet and savory dishes, from French toast and bread pudding to gourmet sandwiches and burgers. Its soft, pillowy texture and rich taste make it a favorite in bakeries worldwide. \r\n\r\n- Ingredients: Flour, eggs, butter, milk, sugar, yeast, salt.',10.00,NULL,NULL),('2024-09-24 07:33:36','25','2024-09-30 08:59:57','25','1727686797_0.png',12,'Butter sugar bread',10,'- Product Description: Butter sugar bread is a sweet, soft loaf with a delicate buttery flavor and a sprinkle of sugar for a satisfying crunch on top. The dough is enriched with butter, making the bread tender and rich, while the sugar topping adds a caramelized sweetness. The loaf is perfect for toasting and spreading with more butter or jam, offering a delightful balance between soft and crispy textures. This bread is a classic favorite for breakfast or a sweet snack. \r\n\r\n- Ingredients: Flour, yeast, butter, sugar (for topping), salt, milk.',10.00,NULL,NULL),('2024-09-24 07:36:06','25','2024-09-30 09:00:28','25','1727686828_0.png',13,'Cheese bread',10,'- Product Description: Cheese bread is a savory loaf filled with rich, melted cheese that adds a creamy and slightly salty flavor to the tender crumb. The bread is soft and fluffy, with pockets of cheese throughout, creating a delightful contrast of textures. Often topped with shredded cheese for a golden, crispy crust, cheese bread is perfect as a side dish, snack, or base for sandwiches. Its savory richness makes it a popular choice for cheese enthusiasts. \r\n\r\n- Ingredients: Flour, cheese (usually cheddar), yeast, milk, butter, sugar, salt.',5.00,NULL,NULL),('2024-09-24 07:38:42','25','2024-09-30 09:00:48','25','1727686848_0.png',14,'Chocolate bread',10,'- Product Description: Chocolate bread is a delicious blend of rich cocoa and tender, slightly sweet bread. With a deep chocolate flavor, the loaf offers a perfect balance between the lightness of bread and the indulgence of a dessert. The crumb is soft, with streaks of melted chocolate or cocoa powder incorporated throughout. Chocolate bread can be enjoyed on its own, with butter, or lightly toasted, making it a versatile choice for breakfast or an afternoon snack. It’s ideal for chocolate lovers seeking a sweet treat without the heaviness of cake. \r\n\r\n- Ingredients: Flour, cocoa powder, yeast, milk, butter, sugar, salt, chocolate chips (optional).',10.00,NULL,NULL),('2024-09-24 07:40:31','25','2024-09-30 09:01:07','25','1727686867_0.png',15,'Chocolate chip bread',10,'- Product Description: Chocolate chip bread is a soft and slightly sweet loaf dotted with chunks of semi-sweet chocolate. The bread has a light, airy texture, and the chocolate chips provide bursts of rich, creamy flavor in every bite. Perfect for breakfast, dessert, or a snack, this bread offers a more indulgent alternative to regular sweet bread. Whether toasted or served fresh, chocolate chip bread is a delicious treat for chocolate lovers. \r\n\r\n- Ingredients: Flour, chocolate chips, yeast, milk, butter, sugar, salt.',5.00,NULL,NULL),('2024-09-24 07:44:15','25','2024-09-30 09:01:27','25','1727686887_0.png',16,'Coconut milk bread',10,'- Product Description: Coconut milk bread is a soft, tender loaf made with coconut milk, giving it a subtle coconut flavor and a rich, moist texture. The coconut milk adds a creamy sweetness that pairs well with both savory and sweet toppings. Often topped with shredded coconut for added texture, this bread is perfect for enjoying on its own, as toast, or with tropical spreads like mango or pineapple jam. Coconut milk bread is a wonderful option for those who enjoy a hint of tropical flavor in their baked goods. \r\n\r\n- Ingredients: Flour, coconut milk, yeast, sugar, butter, salt.',5.00,NULL,NULL),('2024-09-24 07:46:47','25','2024-09-30 09:01:51','25','1727686911_0.png',17,'Coconut rolls',10,'- Product Description: Coconut rolls are soft, sweet rolls filled with a rich coconut filling, often made from grated coconut, sugar, and butter. The dough is soft and fluffy, and the coconut filling provides a sweet, nutty contrast that makes each bite flavorful and satisfying. These rolls are typically brushed with a light glaze or sprinkled with coconut flakes for added texture and sweetness. Coconut rolls are perfect as a snack or dessert, bringing a tropical twist to traditional sweet bread. \r\n\r\n- Ingredients: Flour, yeast, milk, sugar, shredded coconut, butter, salt.',10.00,NULL,NULL),('2024-09-24 07:49:05','25','2024-09-30 09:02:12','25','1727686932_0.png',18,'Cream butter bread',10,'- Product Description: Cream butter bread is a rich, soft loaf made with cream and butter, giving it an exceptionally tender and moist texture. The bread has a mild sweetness and a buttery flavor that melts in your mouth. Its smooth, creamy crumb makes it ideal for toasting or serving with jam or honey. Cream butter bread is often enjoyed as a breakfast treat or snack, offering a luxurious take on traditional sweet bread. \r\n\r\n- Ingredients: Flour, yeast, butter, cream, sugar, milk, salt.',5.00,NULL,NULL),('2024-09-24 07:50:37','25','2024-09-30 09:02:32','25','1727686952_0.png',19,'Dried Fruit Bread',10,'- Product Description: Dried fruit bread is a sweet, dense loaf filled with a mix of dried fruits like raisins, apricots, and figs. The dried fruits add a chewy texture and natural sweetness to the soft crumb of the bread, making each bite flavorful and satisfying. This bread is perfect for enjoying on its own, with butter, or paired with cheese. The combination of fruits and bread makes it a great option for a wholesome snack or a hearty breakfast. \r\n\r\n- Ingredients: Flour, dried fruits (raisins, apricots, figs), yeast, sugar, butter, milk, salt.',10.00,NULL,NULL),('2024-09-24 07:52:39','25','2024-09-30 09:04:55','25','1727687095_0.png',20,'Garlic butter bread',10,'- Product Description: Garlic butter bread is a savory delight that combines the fluffy texture of freshly baked bread with the rich, aromatic flavor of garlic-infused butter. The exterior is golden and crispy, often brushed with a garlic butter mixture before baking, giving it a glossy, appetizing finish. Inside, the bread remains soft and tender, with a subtle, mouthwatering garlic flavor throughout. This bread pairs wonderfully with soups, salads, or as a base for bruschetta, making it a versatile choice for meals and snacks. \r\n\r\n- Ingredients: Flour, yeast, garlic butter, sugar, salt, butter, milk.',10.00,NULL,NULL),('2024-09-24 07:55:26','25','2024-09-30 09:05:17','25','1727687117_0.png',21,'Garlic Butter Toast',10,'- Product Description: Garlic butter toast is a savory, golden-brown bread brushed with a mixture of garlic and butter before toasting. The result is a crispy, flavorful bread with a soft center and a rich, aromatic taste. It’s the perfect side dish for soups, salads, or pasta dishes, or can be enjoyed on its own as a snack. The balance between the crispy exterior and the soft, buttery interior makes garlic butter toast a favorite in many households.  \r\n\r\n- Ingredients: Flour, garlic butter, sugar, salt, butter, milk.',5.00,NULL,NULL),('2024-09-24 07:56:54','25','2024-09-30 09:05:36','25','1727687136_0.png',22,'Honey butter toast',10,'- Product Description: Honey butter toast is a sweet, golden-brown bread with a rich buttery flavor, enhanced by the natural sweetness of honey. The bread is often sliced thick and toasted to perfection, with the butter and honey soaking into the warm, crispy edges. It’s a simple yet indulgent treat, ideal for breakfast or an afternoon snack. The combination of creamy butter and fragrant honey creates a perfect balance of sweet and savory flavors.\r\n\r\n- Ingredients: Flour, yeast, honey, butter, sugar, salt.',10.00,NULL,NULL),('2024-09-24 07:58:29','25','2024-09-30 09:05:57','25','1727687157_0.png',23,'Matcha bread',10,'- Product Description: Matcha bread is a unique and flavorful loaf made with high-quality green tea powder, giving it a vibrant green color and a slightly earthy, bittersweet taste. The matcha provides a subtle tea flavor that pairs well with the soft, tender crumb of the bread. Often enjoyed with sweet spreads like jam or honey, matcha bread is a delightful fusion of traditional bread with the distinct taste of Japanese matcha. Its visually appealing color and flavor make it a standout choice for tea lovers. \r\n\r\n- Ingredients:  Flour, matcha powder, yeast, milk, sugar, butter, salt.',5.00,NULL,NULL),('2024-09-24 07:59:54','25','2024-09-30 09:06:25','25','1727687185_0.png',24,'Milk bread',10,'- Product Description: Milk bread is a soft, fluffy bread known for its light, tender crumb and subtly sweet flavor, making it perfect for both savory and sweet uses. Baked to a golden-brown color, its slightly glossy crust comes from an egg wash that adds a gentle sheen. Inside, the bread is exceptionally airy, making it a popular choice for sandwiches, toast, or simply enjoying on its own with a spread of butter. Milk bread is often baked in loaves and sliced to reveal its pillowy texture, which stays soft for days due to the milk and butter in the recipe. The mild sweetness of milk bread pairs well with jams, honey, or even savory toppings. \r\n\r\n- Ingredients: Flour, yeast, milk, butter, sugar, salt, eggs (for egg wash).',10.00,NULL,NULL),('2024-09-24 08:01:40','25','2024-09-30 09:06:44','25','1727687204_0.png',25,'Orange bread',10,'- Product Description: Orange bread is a fragrant and sweet loaf bursting with the fresh flavor of oranges. Made with orange zest and juice, this bread has a light, airy crumb with a citrusy aroma and taste. The slight tartness of the oranges is balanced by the sweetness of the dough, creating a refreshing and flavorful bread. It’s perfect for breakfast, served with tea, or as a dessert option. The loaf is often finished with an orange glaze or a dusting of powdered sugar to enhance its sweetness. \r\n\r\n- Ingredients: Flour, baking powder, fresh orange juice, sugar, butter, eggs, grated orange zest.',10.00,NULL,NULL),('2024-09-24 08:03:08','25','2024-09-30 09:07:01','25','1727687221_0.png',26,'Peanut butter bread',10,'- Product Description: Peanut butter bread is a soft and hearty loaf infused with the rich, nutty flavor of peanut butter. The bread has a dense, tender crumb and a subtly sweet taste that pairs well with both sweet and savory spreads. Often enjoyed with jam, honey, or additional peanut butter, it makes a perfect choice for breakfast or as a snack. Its high protein content, thanks to the peanut butter, also makes it a more filling option compared to traditional sweet breads. \r\n\r\n- Ingredients: Flour, baking powder, sugar, salt, peanut butter, milk.',5.00,NULL,NULL),('2024-09-24 08:04:36','25','2024-09-30 09:07:20','25','1727687240_0.png',27,'Raisin bread',10,'- Product Description: Raisin bread is a soft, mildly sweet loaf that features plump, juicy raisins baked into the dough, offering a delightful contrast between the tender crumb and the fruity burst of flavor. The bread is typically lightly spiced with cinnamon or nutmeg, enhancing its warm and comforting taste. Raisin bread can be enjoyed on its own, toasted with butter, or used as a base for a variety of recipes such as French toast or bread pudding. Its slightly chewy texture and natural sweetness make it a popular choice for breakfast or as a snack, pairing wonderfully with tea or coffee. \r\n\r\n- Ingredients: Flour, yeast, sugar, milk, raisins, butter, salt, cinnamon (optional).',10.00,NULL,NULL),('2024-09-24 08:05:59','25','2024-09-30 09:07:37','25','1727687257_0.png',28,'Yogurt bread',10,'- Product Description: Yogurt bread is a soft, tangy loaf made with the addition of yogurt, which lends a subtle tartness and moist texture to the bread. The yogurt helps create a tender crumb and a slightly chewy crust, making this bread versatile for both sweet and savory pairings. Whether enjoyed plain or with toppings like honey, fruit, or cheese, yogurt bread offers a light and refreshing alternative to more traditional loaves, with the yogurt enhancing its nutritional value by adding protein and probiotics. \r\n\r\n- Ingredients: Flour, yeast, yogurt, milk, sugar, butter, salt.',5.00,NULL,NULL),('2024-09-24 08:07:57','25','2024-09-30 08:25:22','25','1727345073_0.png',29,'Apple pie',10,'- Product Description: Apple pie is a classic baked dessert made with a buttery, flaky pie crust and a filling of sweetened, spiced apples. Often served warm with a scoop of vanilla ice cream, apple pie is a comforting and timeless treat. \r\n\r\n- Ingredients: Pie crust (flour, butter, salt, water), apples, sugar, cinnamon, nutmeg, lemon juice, butter.',5.00,NULL,NULL),('2024-09-24 08:10:19','25','2024-09-30 08:36:35','25','1727344583_0.png',30,'Apple tart',10,'- Product Description: Apple tarts are made with thinly sliced apples arranged over a buttery pastry base. The apples are typically sweetened and spiced with cinnamon, and the tart is baked until the apples are tender and the pastry is crisp. \r\n\r\n- Ingredients: Pastry dough (flour, butter, sugar, eggs), apples, sugar, cinnamon, lemon juice, apricot glaze.',10.00,NULL,NULL),('2024-09-24 08:12:55','25','2024-09-30 08:40:44','25','1727344455_0.png',31,'Blueberry tart',10,'- Product Description: Blueberry tarts feature a crisp pastry shell filled with sweetened blueberries, often baked until the berries are soft and juicy. The tart is sometimes topped with a dusting of powdered sugar or a dollop of whipped cream. \r\n\r\n- Ingredients: Pastry dough (flour, butter, sugar, eggs), fresh blueberries, sugar, cornstarch, lemon zest.',10.00,NULL,NULL),('2024-09-24 08:14:53','25','2024-09-30 08:26:09','25','1727345054_0.png',32,'Butter cookies',10,'- Product Description: Butter cookies are classic, crispy, and buttery delights, often made with just a few simple ingredients: butter, sugar, and flour. They are typically baked until golden brown and have a crumbly, melt-in-your-mouth texture, making them a favorite for tea time or as a light snack. \r\n\r\n- Ingredients: Flour, butter, sugar, eggs, vanilla extract, baking powder, salt.',5.00,NULL,NULL),('2024-09-24 08:16:45','25','2024-09-30 08:30:15','25','1727344883_0.png',33,'Chocolate chip cookies',10,'- Product Description: Chocolate chip cookies are soft, chewy cookies packed with semi-sweet chocolate chips. The dough, made from a combination of butter, sugar, eggs, and flour, is baked until the edges are golden and the center remains slightly gooey, giving the perfect balance between crisp and soft textures. \r\n\r\n- Ingredients: Flour, butter, brown sugar, white sugar, eggs, vanilla extract, baking soda, chocolate chips, salt.',5.00,NULL,NULL),('2024-09-24 08:18:14','25','2024-09-30 08:35:30','25','1727344605_0.png',34,'Chocolate cupcake',10,'- Product Description: Chocolate cupcakes are rich, moist, and packed with chocolate flavor. Typically frosted with a creamy chocolate buttercream, these cupcakes are a decadent and satisfying dessert for any chocolate lover. \r\n\r\n- Ingredients: Flour, sugar, cocoa powder, butter, eggs, milk, baking powder, vanilla extract, salt.',10.00,NULL,NULL),('2024-09-24 08:19:26','25','2024-09-30 08:32:07','25','1727344695_0.png',35,'Chocolate pie',10,'- Product Description: Chocolate pie is a rich, indulgent dessert made with a smooth chocolate filling encased in a flaky pie crust. Often topped with whipped cream or meringue, it provides a luscious, decadent treat for chocolate lovers. \r\n\r\n- Ingredients: Pie crust (flour, butter, sugar, salt, water), chocolate filling (chocolate, cream, eggs, butter, sugar).',10.00,NULL,NULL),('2024-09-24 08:20:57','25','2024-09-30 08:26:56','25','1727345035_0.png',36,'Coconut cookies',10,'- Product Description: Coconut cookies are chewy and slightly crispy, made with shredded coconut for a rich, tropical flavor. These cookies often have a golden-brown exterior and a soft interior, making them a deliciously satisfying treat. \r\n\r\n- Ingredients: Flour, shredded coconut, butter, sugar, eggs, vanilla extract, baking powder, salt.',5.00,NULL,NULL),('2024-09-24 08:25:52','25','2024-09-30 08:34:12','25','1727344630_0.png',37,'Coconut pie',10,'- Product Description: Coconut pie is a creamy, custard-based pie with shredded coconut mixed into the filling, giving it a chewy texture and rich flavor. The pie crust is typically flaky and golden, providing a perfect contrast to the creamy filling. \r\n\r\n- Ingredients: Pie crust (flour, butter, sugar, water), coconut filling (shredded coconut, eggs, sugar,butter, vanilla extract, milk).',5.00,NULL,NULL),('2024-09-24 08:27:18','25','2024-09-30 08:41:32','25','1727344431_0.png',38,'Egg tart',10,'- Product Description: Egg tarts are small, flaky pastries filled with a creamy, sweet custard made from eggs, sugar, and milk. Baked until the custard is just set and the crust is golden, these tarts are popular in many parts of the world, especially in Chinese and Portuguese cuisine. \r\n\r\n- Ingredients: Pastry dough (flour, butter), custard (milk, sugar, eggs, vanilla extract).',10.00,NULL,NULL),('2024-09-24 08:31:16','25','2024-09-30 08:39:10','25','1727344503_0.png',39,'Ginger cookies',10,'- Product Description: Ginger cookies are spiced, chewy cookies made with ginger, cinnamon, and cloves. Their warm, aromatic flavor is perfect for the colder months and pairs wonderfully with a cup of tea or coffee. \r\n\r\n- Ingredients: Flour, ground ginger, cinnamon, butter, sugar, molasses, eggs, baking soda, salt.',5.00,NULL,NULL),('2024-09-24 08:32:49','25','2024-09-30 08:37:34','25','1727344562_0.png',40,'Lemon tart',10,'- Product Description: Lemon tarts feature a crisp pastry shell filled with a tangy, creamy lemon curd. The combination of sweet and tart flavors makes this dessert a refreshing and light option, often finished with powdered sugar or whipped cream. \r\n\r\n- Ingredients: Pastry dough (flour, butter, sugar, eggs), lemon curd (lemon juice, eggs, sugar, butter, lemon zest).',10.00,NULL,NULL),('2024-09-24 08:34:37','25','2024-09-30 08:33:16','25','1727344651_0.png',41,'Mango tart',10,'- Product Description: Mango tarts are made with a buttery pastry shell and filled with a sweet, creamy mango filling. The vibrant orange color and refreshing tropical flavor make this tart a delightful dessert option, especially in warmer months. \r\n\r\n- Ingredients: Pastry dough (flour, butter, sugar, eggs), fresh mango, pastry cream(milk, sugar, eggs, vanilla, cornstarch).',5.00,NULL,NULL),('2024-09-24 08:35:51','25','2024-09-30 08:38:24','25','1727344544_0.png',42,'Orange cupcake',10,'- Product Description: Orange cupcakes are light and fluffy with a burst of citrus flavor from fresh orange juice and zest. Often frosted with a cream cheese or buttercream frosting, these cupcakes are refreshing and perfect for brightening up any occasion. \r\n\r\n- Ingredients: Flour, sugar, butter, eggs, orange juice, orange zest, baking powder, milk, salt.',5.00,NULL,NULL),('2024-09-24 08:37:29','25','2024-09-30 08:31:08','25','1727344720_0.png',43,'Passion fruit pie',10,'- Product Description: Passion fruit pie is a tropical twist on the traditional pie, featuring a creamy, sweet, and tangy filling made from passion fruit juice. The crust is typically buttery and crisp, complementing the zesty flavor of the filling. \r\n\r\n- Ingredients: Pie crust (flour, butter, sugar, water), passion fruit puree, eggs, sugar, cream, butter.',5.00,NULL,NULL),('2024-09-24 08:38:59','25','2024-09-30 08:27:54','25','1727345014_0.png',44,'Peach pie',10,'- Product Description: Peach pie is made with ripe, juicy peaches sweetened and spiced, all encased in a flaky pie crust. The pie is often topped with a lattice or crumble topping and baked until the filling is bubbly and the crust is golden. \r\n\r\n- Ingredients: Pie crust (flour, butter, sugar, salt, water), peaches, sugar, cinnamon, cornstarch, lemon juice.',10.00,NULL,NULL),('2024-09-24 08:40:13','25','2024-09-30 08:28:37','25','1727344994_0.png',45,'Plum tart',10,'- Product Description: Plum tarts are made with a buttery pastry crust and topped with juicy, sweet-tart plums. The fruit is often arranged in a decorative pattern and baked until tender, making for a visually stunning and delicious dessert. \r\n\r\n- Ingredients: Pastry dough (flour, butter, sugar, eggs), fresh plums, sugar, cinnamon, vanilla extract.',10.00,NULL,NULL),('2024-09-24 08:41:57','25','2024-09-30 08:29:27','25','1727344969_0.png',46,'Strawberry pie',10,'- Product Description: Strawberry pie features a fresh strawberry filling encased in a flaky pie crust. The filling is often made with whole strawberries coated in a sweet glaze, making it a bright and fruity dessert perfect for summertime. \r\n\r\n- Ingredients: Pie crust (flour, butter, sugar, salt, water), strawberries, sugar, cornstarch, lemon juice.',10.00,NULL,NULL),('2024-09-24 08:43:26','25','2024-09-30 07:35:06','25','1727346676_0.png',47,'Strawberry tart',10,'- Product Description:  A strawberry tart is a sweet pastry filled with custard or cream and topped with fresh strawberries. The pastry base is usually crisp and buttery, while the sweet strawberries add a refreshing contrast. This dessert is often glazed for extra shine and sweetness. \r\n\r\n- Ingredients: Pastry dough (flour, butter, sugar, eggs), fresh strawberries, pastry cream(milk, sugar, eggs, vanilla, cornstarch), glaze (apricot jam).',5.00,NULL,NULL),('2024-09-24 08:46:16','25','2024-09-30 08:39:58','25','1727344477_0.png',48,'Vanilla cupcake',10,'- Product Description: Vanilla cupcakes are light and fluffy single-serving cakes flavored with vanilla extract. They are often topped with a swirl of buttercream frosting and can be decorated with sprinkles or other toppings for added sweetness and fun. \r\n\r\n- Ingredients: Flour, dried fruits (raisins, apricots, figs), yeast, sugar, butter, milk, salt.',5.00,NULL,NULL),('2024-09-24 08:51:43','25','2024-09-30 08:14:28','25','1727345880_0.png',49,'Avocado mousse cake',10,'- Product Description: Avocado mousse cake is a creamy, smooth dessert made from ripe avocados blended into a mousse. The mousse is layered over a sponge or graham cracker base, offering a unique combination of sweet and savory flavors with a velvety texture. \r\n\r\n- Ingredients: Flour, sugar, butter, eggs, avocado, avocado mousse (avocado, cream, sugar), baking powder, vanilla extract.',10.00,NULL,NULL),('2024-09-24 08:54:18','25','2024-09-30 08:13:36','25','1727345898_0.png',50,'Birthday cake',10,'- Product Description: A birthday cake is a celebratory dessert often decorated with frosting, candles, and festive designs. The flavor can range from classic vanilla or chocolate to more adventurous varieties like red velvet or funfetti. Birthday cakes are designed to bring joy and can be customized with personal touches for any celebration. \r\n\r\n- Ingredients: Flour, sugar, butter, eggs, vanilla extract, milk, baking powder, salt, frosting (butter, powdered sugar, vanilla extract, milk).',10.00,NULL,NULL),('2024-09-24 08:55:59','25','2024-09-30 08:12:43','25','1727345917_0.png',51,'Blueberry cake',10,'- Product Description: Blueberry cake is a moist, tender cake packed with fresh or frozen blueberries. The berries burst during baking, adding a juicy sweetness and tang to the cake. Often served with a light glaze or cream cheese frosting, it’s a perfect dessert for brunch or summer gatherings. \r\n\r\n- Ingredients: Flour, sugar, butter, eggs, fresh or frozen blueberries, baking powder, vanilla extract, \r\nmilk.',10.00,NULL,NULL),('2024-09-24 08:58:11','25','2024-09-30 08:11:57','25','1727345934_0.png',52,'Caramel cake',10,'- Product Description: Caramel cake features layers of moist cake with a rich caramel filling or frosting. The caramel is often made from scratch, providing a buttery, sweet, and slightly salty flavor that complements the soft cake. It’s an indulgent dessert for those who love deep, caramelized flavors.\r\n\r\n- Ingredients: Flour, sugar, butter, eggs, vanilla extract, milk, baking powder, salt, \r\ncaramel sauce (sugar, cream, butter).',10.00,NULL,NULL),('2024-09-24 08:59:39','25','2024-09-30 08:10:00','25','1727345973_0.png',53,'Cheesecake',10,'- Product Description: Cheesecake is a creamy, smooth dessert made primarily from cream cheese, sugar, and eggs over a crumbly crust, typically made from graham crackers or biscuits. It comes in many varieties, including baked or no-bake versions, and is often flavored with fruits, chocolate, or caramel. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',5.00,NULL,NULL),('2024-09-24 09:01:52','25','2024-09-30 08:09:12','25','1727345995_0.png',54,'Chestnut mousse cake',10,'- Product Description: Chestnut mousse cake features a rich, nutty mousse made from sweetened chestnuts layered over a soft cake base. The chestnut flavor is subtle and earthy, providing a delightful contrast to the sweet, creamy texture of the mousse. \r\n\r\n- Ingredients: Flour, sugar, butter, eggs, chestnut puree, chestnut mousse (chestnut, cream, sugar), baking powder, vanilla extract.',10.00,NULL,NULL),('2024-09-24 09:03:32','25','2024-09-30 08:08:14','25','1727346013_0.png',55,'Chocolate mousse cake',10,'- Product Description: Chocolate mousse cake is a rich and creamy dessert that layers smooth chocolate mousse over a moist chocolate sponge cake. The mousse is light and airy, providing a delightful contrast to the dense cake layers, often topped with whipped cream or chocolate ganache. \r\n\r\n- Ingredients: Flour, sugar, cocoa powder, butter, eggs, baking powder, chocolate mousse (chocolate, heavy cream, sugar).',10.00,NULL,NULL),('2024-09-24 09:04:45','25','2024-09-30 08:07:24','25','1727346030_0.png',56,'Cocoa cake',10,'- Product Description: Cocoa cake is a simple yet rich dessert made from cocoa powder, offering a deep chocolate flavor without the heaviness of traditional chocolate cakes. Its light, airy texture makes it perfect for pairing with whipped cream, berries, or a dusting of powdered sugar. \r\n\r\n- Ingredients: Flour, cocoa powder, sugar, butter, eggs, baking powder, vanilla extract, milk.',5.00,NULL,NULL),('2024-09-24 09:06:33','25','2024-09-30 08:06:37','25','1727346048_0.png',57,'Green tea cake',10,'- Product Description: Green tea cake is similar to matcha cake but may use different green tea varieties for a lighter, subtler flavor. Often paired with red bean paste or sweet cream, it’s a refreshing dessert choice that balances the grassy notes of green tea with sweet elements. \r\n\r\n- Ingredients: Flour, sugar, green tea powder, butter, eggs, baking powder, milk.',5.00,NULL,NULL),('2024-09-24 09:07:56','25','2024-09-30 08:05:46','25','1727346066_0.png',58,'Lemon mousse cake',10,'- Product Description: Lemon mousse cake is a bright and refreshing dessert made by layering tangy lemon mousse over a soft sponge cake. The mousse is light and creamy, providing a perfect balance to the zesty, citrusy flavor of the lemon. \r\n\r\n- Ingredients: Flour, sugar, butter, eggs, lemon juice, lemon zest, lemon mousse (lemon, cream, sugar).',10.00,NULL,NULL),('2024-09-24 09:09:09','25','2024-09-30 08:04:49','25','1727346084_0.png',59,'Mango cake',10,'- Product Description:  Mango cake is a tropical dessert made with fresh mango puree or pieces mixed into the batter, resulting in a moist and fruity cake. It’s often paired with mango-flavored frosting or whipped cream, making it a refreshing option for hot weather or tropical-themed events. \r\n\r\n- Ingredients: Flour, sugar, butter, eggs, fresh mangoes, mango puree, baking powder, milk.',10.00,NULL,NULL),('2024-09-24 09:10:48','25','2024-09-30 08:04:06','25','1727346105_0.png',60,'Matcha cake',10,'- Product Description: Matcha cake is a light, spongy dessert infused with the flavor of green tea powder (matcha). Its earthy, slightly bitter taste contrasts beautifully with the sweetness of the cake, making it a unique choice for tea lovers. Often paired with white chocolate or whipped cream for balance. \r\n\r\n- Ingredients: Flour, sugar, matcha powder, butter, eggs, baking powder, vanilla extract, milk.',5.00,NULL,NULL),('2024-09-24 09:12:00','25','2024-09-30 08:03:16','25','1727346123_0.png',61,'Matcha mousse cake',10,'- Product Description: Matcha mousse cake is a luxurious dessert that layers a light green tea sponge with creamy matcha mousse. The smooth, velvety texture of the mousse complements the delicate cake, offering a balance between the earthy matcha flavor and the cake’s sweetness. \r\n\r\n- Ingredients: Flour, matcha powder, sugar, eggs, butter, milk, matcha mousse(matcha, cream, sugar).',5.00,NULL,NULL),('2024-09-24 09:13:12','25','2024-09-30 08:02:18','25','1727346140_0.png',62,'Oreo cake',10,'- Product Description: Oreo cake incorporates crushed Oreo cookies into both the cake batter and the frosting, creating a rich, chocolatey dessert with a crunchy texture. This cake is a favorite among cookie lovers and often includes layers of cream cheese or whipped cream for added richness. \r\n\r\n- Ingredients: Flour, sugar, butter, eggs, Oreo cookies, baking powder, milk, vanilla extract, cream cheese frosting.',10.00,NULL,NULL),('2024-09-24 09:14:26','25','2024-09-30 08:01:17','25','1727346160_0.png',63,'Red bean cake',10,'- Product Description: Red bean cake is a traditional Asian dessert made from a light, fluffy sponge cake and filled with sweetened red bean paste. The mild sweetness of the red beans pairs well with the cake’s soft texture, making it a unique and satisfying treat for those who enjoy Asian-inspired flavors. \r\n\r\n- Ingredients: Flour, sugar, butter, eggs, red bean paste, baking powder, milk.',5.00,NULL,NULL),('2024-09-24 09:18:01','25','2024-09-30 08:00:08','25','1727346178_0.png',64,'Strawberry cake',10,'- Product Description: Strawberry cake is a light and fruity dessert made with fresh or pureed strawberries. The cake has a delicate crumb and is often paired with strawberry-flavored frosting or whipped cream. This cake is a favorite for spring and summer celebrations due to its bright flavor and pink hue. \r\n\r\n- Ingredients: Flour, sugar, butter, eggs, fresh strawberries, strawberry puree, vanilla extract, baking powder, salt, milk.',5.00,NULL,NULL),('2024-09-24 09:19:11','25','2024-09-30 07:59:08','25','1727346217_0.png',65,'Tiramisu cake',10,'- Product Description: Tiramisu cake is inspired by the traditional Italian dessert, featuring layers of coffee-soaked sponge cake, mascarpone cream, and a dusting of cocoa powder. It’s a decadent, coffee-flavored dessert that offers a creamy, rich texture with a slight kick of espresso. \r\n\r\n- Ingredients: Flour, sugar, butter, eggs, mascarpone cheese, coffee, cocoa powder, ladyfinger biscuits, rum (optional).',5.00,NULL,NULL),('2024-09-24 09:20:31','25','2024-09-30 07:32:56','25','1727346235_0.png',66,'Tiramisu lemon cake',10,'- Product Description: Tiramisu lemon cake is a twist on the classic tiramisu, replacing coffee with zesty lemon. Layers of lemon-soaked sponge cake are combined with mascarpone cream, offering a fresh, tangy flavor that balances the creaminess of the mascarpone.\r\n\r\n- Ingredients:  Flour, sugar, butter, eggs, lemon juice, lemon zest, lemon mousse \r\n(lemon, cream, sugar).',10.00,NULL,NULL),('2024-09-24 09:21:58','25','2024-09-30 08:15:30','25','1727345854_0.png',67,'Vanilla cake',10,'- Product Description: Vanilla cake is a classic dessert known for its light and fluffy texture with a mild vanilla flavor. It serves as a versatile base for various fillings and frostings, making it a staple for many occasions, including weddings, birthdays, and everyday celebrations. \r\n\r\n- Ingredients: Flour, sugar, butter, eggs, vanilla extract, baking powder, salt, milk.',10.00,NULL,NULL),('2024-09-24 09:23:30','25','2024-09-30 07:58:00','25','1727411052_0.png',68,'Almond cheesecake',10,'- Product Description: Almond cheesecake features a nutty, slightly sweet flavor, often using almond extract in the filling and slivered almonds for garnish. The almond flavor adds a delightful richness to the creamy texture of the cheesecake, creating a sophisticated and flavorful dessert. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, almond extract, vanilla extract, \r\ngraham cracker crust (graham crackers, butter, sugar), sliced almonds (for topping).',5.00,NULL,NULL),('2024-09-24 09:24:46','25','2024-09-30 07:55:49','25','1727411070_0.png',69,'Avocado cheesecake',10,'- Product Description: Avocado cheesecake is a creamy, smooth dessert made with ripe avocados blended into the cream cheese filling. The avocado provides a subtle, buttery flavor and a beautiful green color, making this cheesecake both nutritious and visually appealing. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, ripe avocado, lime juice, vanilla extract, \r\ngraham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:26:15','25','2024-09-30 07:54:40','25','1727411094_0.png',70,'Baked cheesecake',10,'- Product Description: Baked cheesecake is the traditional version of this dessert, where the cheesecake is baked in an oven to achieve a firm yet creamy texture. The crust is usually a buttery graham cracker or biscuit base, and the filling sets into a perfectly smooth, dense consistency. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, vanilla extract, graham cracker crust (graham crackers, butter, sugar), sour cream topping (optional).',10.00,NULL,NULL),('2024-09-24 09:28:10','25','2024-09-30 07:53:23','25','1727411115_0.png',71,'Blueberry cheesecake',10,'- Product Description: Blueberry cheesecake features a velvety cream cheese filling with a generous topping of sweet, juicy blueberries. The fruity topping provides a burst of flavor that complements the rich, creamy texture of the cheesecake, making it a refreshing and colorful dessert. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, vanilla extract, fresh or frozen blueberries, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:29:46','25','2024-09-30 07:51:10','25','1727411135_0.png',72,'Caramel cheesecake',10,'- Product Description: Caramel cheesecake is a rich, indulgent dessert that features a smooth cream cheese filling swirled or topped with sweet, buttery caramel. The combination of creamy and caramelized flavors creates a luxurious dessert perfect for special occasions. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, caramel sauce, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',5.00,NULL,NULL),('2024-09-24 09:30:57','25','2024-09-30 07:49:45','25','1727411157_0.png',73,'Chocolate cheesecake',10,'- Product Description: Chocolate cheesecake is a decadent dessert that combines the richness of chocolate with the smoothness of cream cheese. The filling is infused with either melted chocolate or cocoa powder, and the result is a dense, indulgent treat that chocolate enthusiasts will love. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, cocoa powder, chocolate chips, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:34:25','25','2024-09-30 07:48:59','25','1727411180_0.png',74,'Classic cheesecake',10,'- Product Description: Classic cheesecake is a rich and creamy dessert made with a smooth cream cheese filling atop a buttery graham cracker crust. Baked to perfection, it has a silky texture with a slightly tangy flavor that pairs well with a variety of toppings, such as fresh fruit, chocolate, or caramel. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, vanilla extract, graham cracker crust(graham crackers, butter, sugar).',5.00,NULL,NULL),('2024-09-24 09:36:38','25','2024-09-30 07:47:53','25','1727411202_0.png',75,'Coconut cheesecake',10,'- Product Description: Coconut cheesecake is a tropical-inspired dessert that incorporates coconut milk or shredded coconut into the filling. The result is a creamy, mildly sweet cheesecake with a subtle coconut flavor, often topped with toasted coconut flakes for added texture and visual appeal. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, coconut milk, shredded coconut, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:38:46','25','2024-09-30 07:47:05','25','1727411228_0.png',76,'Durian cheesecake',10,'- Product Description: Durian cheesecake is a unique and bold-flavored dessert that uses durian fruit in the filling. Known for its strong aroma and creamy texture, durian adds a distinctive taste to the cheesecake, making it a favorite among adventurous food lovers. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, durian puree, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:40:43','25','2024-09-30 07:46:07','25','1727411248_0.png',77,'Green tea cheesecake',10,'- Product Description: Green tea cheesecake is infused with delicate green tea leaves or powder, providing a subtle and refreshing flavor that pairs well with the creamy texture of the cheesecake. The green color of the filling also gives this dessert a unique visual appeal. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, green tea powder (matcha), vanilla extract, \r\ngraham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:42:00','25','2024-09-30 07:44:52','25','1727411265_0.png',78,'Lemon cheesecake',10,'- Product Description: Lemon cheesecake is a zesty dessert that combines the tangy flavor of fresh lemons with the smooth, creamy texture of cheesecake. The citrus notes add a refreshing brightness, making this cake a perfect choice for those who prefer a less sweet, more tart dessert. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, lemon juice, lemon zest, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:43:23','25','2024-09-30 07:43:42','25','1727411286_0.png',79,'Mango cheesecake',10,'- Product Description: Mango cheesecake blends the tropical sweetness of ripe mangoes with the rich creaminess of traditional cheesecake. The mango puree or fresh mango slices add a refreshing fruitiness to the dessert, making it a popular choice during warmer months. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, mango puree, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:44:56','25','2024-09-30 07:42:45','25','1727411309_0.png',80,'Mascarpone cheesecake',10,'- Product Description: Mascarpone cheesecake replaces traditional cream cheese with Italian mascarpone cheese, resulting in a lighter, creamier texture with a milder flavor. This cheesecake has a silky smooth finish and is often paired with fruit or coffee-based toppings for a sophisticated touch. \r\n\r\n- Ingredients: Mascarpone cheese, cream cheese, sugar, eggs, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',5.00,NULL,NULL),('2024-09-24 09:46:09','25','2024-09-30 07:41:16','25','1727411327_0.png',81,'Matcha cheesecake',10,'- Product Description: Matcha cheesecake incorporates the earthy, slightly bitter flavor of Japanese green tea powder (matcha) into the cream cheese filling. This unique fusion creates a beautifully vibrant dessert with a balance of sweet and savory flavors that is perfect for tea lovers. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, matcha powder, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',5.00,NULL,NULL),('2024-09-24 09:47:25','25','2024-09-30 07:40:19','25','1727411346_0.png',82,'Orange cheesecake',10,'- Product Description: Orange cheesecake is a bright and zesty dessert that uses fresh orange zest and juice to infuse the cream cheese filling with citrusy notes. The tangy sweetness of the oranges complements the creamy texture of the cheesecake, offering a refreshing twist on the classic. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, orange zest, orange juice, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:48:44','25','2024-09-30 07:39:15','25','1727411367_0.png',83,'Oreo cheesecake',10,'- Product Description: Oreo cheesecake is a deliciously decadent dessert made with crushed Oreo cookies in both the crust and the filling. The creamy cheesecake filling is studded with cookie pieces, and the dessert is often topped with whipped cream and more Oreo crumbles for added texture and flavor. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, vanilla extract, crushed Oreo cookies (for crust and filling), whipped cream (optional for topping).',10.00,NULL,NULL),('2024-09-24 09:50:04','25','2024-09-30 07:38:18','25','1727411386_0.png',84,'Passion fruit cheesecake',10,'- Product Description: Passion fruit cheesecake offers a tangy twist on the classic dessert, with the tropical flavor of passion fruit adding a tart contrast to the sweet, creamy filling. The passion fruit topping provides both a vibrant appearance and an exotic taste that excites the palate. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, passion fruit puree, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',5.00,NULL,NULL),('2024-09-24 09:51:03','25','2024-09-30 07:36:58','25','1727411405_0.png',85,'Peach cheesecake',10,'- Product Description: Peach cheesecake combines the natural sweetness of peaches with the creamy richness of cheesecake. The fruit is either blended into the filling or used as a topping, creating a luscious dessert that’s perfect for summer gatherings. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, peach puree, vanilla extract, graham cracker crust (graham crackers, butter, sugar), fresh peach slices (for topping).',5.00,NULL,NULL),('2024-09-24 09:52:01','25','2024-09-30 07:31:56','25','1727411425_0.png',86,'Strawberry cheesecake',10,'- Product Description: Strawberry cheesecake combines the classic creaminess of cheesecake with a layer of fresh or glazed strawberries on top. The strawberries add a sweet, juicy element that balances the rich texture of the cheesecake, creating a light and fruity finish. \r\n\r\n- Ingredients: Cream cheese, sugar, eggs, matcha powder, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',5.00,NULL,NULL),('2024-09-24 09:53:01','25','2024-09-30 07:32:09','25','1727411501_0.png',87,'Yogurt cheesecake',10,'- Product Description: Yogurt cheesecake offers a lighter alternative to traditional cheesecake, with yogurt replacing some of the cream cheese in the filling. The result is a tangy, creamy texture that is both refreshing and satisfying, often paired with fruit toppings for extra flavor. \r\n\r\n- Ingredients: Greek yogurt, cream cheese, sugar, eggs, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 11:46:25','25','2024-09-30 07:35:51','25','1727346198_0.png',88,'Strawberry mousse cake',10,'- Product Description: Strawberry mousse cake is a light, airy dessert made by layering strawberry mousse over a sponge cake base. The mousse is made from fresh strawberries and whipped cream, creating a refreshing and fruity flavor that pairs perfectly with the soft cake. \r\n\r\n- Ingredients:  Flour, sugar, butter, eggs, fresh strawberries, strawberry mousse \r\n(strawberries, cream, sugar), baking powder, vanilla extract.',5.00,NULL,NULL),('2024-09-30 16:11:04','26','2024-09-30 16:11:04',NULL,'1727712664_0.png',89,'Black Sesame Mooncake',10,'Indulge in the rich and nutty flavor of our Black Sesame Mooncake, crafted with a delicate, golden pastry crust that gives way to a smooth, aromatic black sesame filling. Perfectly balanced between sweetness and the earthy, roasted taste of sesame, this mooncake offers a unique twist on traditional flavors, making it an irresistible choice for any mooncake enthusiast. Enjoy it with a cup of tea or share it as a thoughtful gift during the festive season.\r\nIngredients:Black sesame paste, sugar, flour,cooking oil, golden syrup,alkaline water, baking soda, salt.',15.00,NULL,NULL),('2024-09-30 16:12:33','26','2024-09-30 16:12:33',NULL,'1727712752_0.png',90,'Chocolate Mooncake',10,'Delight in the rich and indulgent taste of our \r\nChocolate Mooncake, featuring a smooth \r\nchocolate filling encased in a tender, \r\ngolden-brown pastry shell. This modern twist on a \r\ntraditional favorite blends the deep, velvety flavor\r\n of chocolate with the comforting texture of \r\nmooncake. Whether you’re a chocolate lover or \r\njust looking to try something new, this mooncake\r\n offers a luxurious and satisfying treat, perfect for\r\n gifting or savoring during the Mid-Autumn \r\nFestival.\r\nIngredients:\r\nChocolate paste, sugar, flour,\r\ncocoa powder, cooking oil,\r\ngolden syrup, alkaline water, baking soda, salt.',15.00,NULL,NULL),('2024-09-30 16:13:18','26','2024-09-30 16:13:18',NULL,'1727712798_0.png',91,'Coconut Mooncake',10,'Shredded coconut filling made from fresh coconut \r\nprovides a fragrant and rich texture, giving this \r\nmooncake a creamy, tropical flavor perfect for \r\ncoconut enthusiasts.\r\nIngredients: Shredded coconut, \r\nsugar, flour, cooking oil, water.',15.00,NULL,NULL),('2024-09-30 16:14:39','26','2024-09-30 16:14:39',NULL,'1727712879_0.png',92,'Durian Mooncake',10,'Known for its distinctive, strong aroma, the durian \r\nfilling provides a creamy and sweet flavor. The \r\ndurian is carefully selected to ensure a rich and \r\nsmooth filling that’s perfect for durian lovers.\r\nIngredients: Durian pulp, sugar, \r\nflour, cooking oil, water.',15.00,NULL,NULL),('2024-09-30 16:15:21','26','2024-09-30 16:15:21',NULL,'1727712921_0.png',93,'Green Tea Mooncake',10,'Filled with green tea paste, this mooncake has a \r\nrefreshing taste with a slight bitterness balanced by \r\na light sweetness. It’s a popular choice for those \r\nwho appreciate the natural flavor of green tea.\r\nIngredients: Green tea powder, \r\nwhite bean paste, sugar, flour, cooking oil, water.',15.00,NULL,NULL),('2024-09-30 16:41:25','26','2024-10-03 10:39:34','25','1727714485_0.png',94,'Iced Lavender Latte',10,'Enjoy this delicious twist on the classic latte that combines the soothing aromas and flavors of lavender with a bold espresso. A lavender latte is the perfect mid-day pick-me-up and just one of the many unique lavender drinks we serve at Bakerz Bite!.\r\n- Calories: 170\r\n- Total Fat (g): 9(g)\r\n- Saturated Fat (g): 5(g)\r\n- Trans Fat (g): 0(g)\r\n- Total Carbohydrate (g): 14(g)\r\n- Total Sugar (g): 14(g)\r\n- Protein (g): 9(g)',5.00,NULL,NULL),('2024-09-30 16:42:01','26','2024-10-03 10:39:17','25','1727714521_0.png',95,'Iced Cafe Latte',10,'Enjoy this delicious twist on the classic latte that combines the soothing aromas and flavors of lavender with a bold espresso. A lavender latte is the perfect mid-day pick-me-up and just one of the many unique lavender drinks we serve at Bakerz Bite!.\r\n- Calories: 170\r\n- Total Fat (g): 9(g)\r\n- Saturated Fat (g): 5(g)\r\n- Trans Fat (g): 0(g)\r\n- Total Carbohydrate (g): 14(g)\r\n- Total Sugar (g): 14(g)\r\n- Protein (g): 9(g)',5.00,NULL,NULL),('2024-09-30 16:42:43','26','2024-10-03 10:39:00','25','1727714563_0.png',96,'Cafe Mocha',10,'Enjoy this delicious twist on the classic latte that combines the soothing aromas and flavors of lavender with a bold espresso. A lavender latte is the perfect mid-day pick-me-up and just one of the many unique lavender drinks we serve at Bakerz Bite!.\r\n- Calories: 170\r\n- Total Fat (g): 9(g)\r\n- Saturated Fat (g): 5(g)\r\n- Trans Fat (g): 0(g)\r\n- Total Carbohydrate (g): 14(g)\r\n- Total Sugar (g): 14(g)\r\n- Protein (g): 9(g)',5.00,NULL,NULL),('2024-09-30 16:43:20','26','2024-10-03 10:38:45','25','1727714600_0.png',97,'Cafe Latte',10,'Enjoy this delicious twist on the classic latte that combines the soothing aromas and flavors of lavender with a bold espresso. A lavender latte is the perfect mid-day pick-me-up and just one of the many unique lavender drinks we serve at Bakerz Bite!.\r\n- Calories: 170\r\n- Total Fat (g): 9(g)\r\n- Saturated Fat (g): 5(g)\r\n- Trans Fat (g): 0(g)\r\n- Total Carbohydrate (g): 14(g)\r\n- Total Sugar (g): 14(g)\r\n- Protein (g): 9(g)',5.00,NULL,NULL),('2024-09-30 16:43:53','26','2024-10-03 10:37:47','25','1727714633_0.png',98,'Cappuccino',10,'Enjoy this delicious twist on the classic latte that combines the soothing aromas and flavors of lavender with a bold espresso. A lavender latte is the perfect mid-day pick-me-up and just one of the many unique lavender drinks we serve at Bakerz Bite!.\r\n- Calories: 170\r\n- Total Fat (g): 9(g)\r\n- Saturated Fat (g): 5(g)\r\n- Trans Fat (g): 0(g)\r\n- Total Carbohydrate (g): 14(g)\r\n- Total Sugar (g): 14(g)\r\n- Protein (g): 9(g)',5.00,NULL,NULL),('2024-10-01 13:04:42','26','2024-10-03 05:40:31',NULL,'1727787882_0.png',99,'adsdasdđâs',100,'adasdas',10.00,NULL,1),('2024-10-03 10:44:19','25','2024-10-03 10:44:19',NULL,'1727952258_0.jpg',100,'Cafe Americano',10,'Enjoy this delicious twist on the classic latte that combines the soothing aromas and flavors of lavender with a bold espresso. A lavender latte is the perfect mid-day pick-me-up and just one of the many unique lavender drinks we serve at Bakerz Bite!.\r\n- Calories: 170\r\n- Total Fat (g): 9(g)\r\n- Saturated Fat (g): 5(g)\r\n- Trans Fat (g): 0(g)\r\n- Total Carbohydrate (g): 14(g)\r\n- Total Sugar (g): 14(g)\r\n- Protein (g): 9(g)',5.00,NULL,NULL),('2024-10-03 10:45:45','25','2024-10-03 10:45:45',NULL,'1727952345_0.png',101,'Caramel Macchiato',10,'Enjoy this delicious twist on the classic latte that combines the soothing aromas and flavors of lavender with a bold espresso. A lavender latte is the perfect mid-day pick-me-up and just one of the many unique lavender drinks we serve at Bakerz Bite!.\r\n- Calories: 170\r\n- Total Fat (g): 9(g)\r\n- Saturated Fat (g): 5(g)\r\n- Trans Fat (g): 0(g)\r\n- Total Carbohydrate (g): 14(g)\r\n- Total Sugar (g): 14(g)\r\n- Protein (g): 9(g)',5.00,NULL,NULL),('2024-10-03 10:46:22','25','2024-10-03 10:46:22',NULL,'1727952382_0.png',102,'Cold Brew Tonic',10,'Enjoy this delicious twist on the classic latte that combines the soothing aromas and flavors of lavender with a bold espresso. A lavender latte is the perfect mid-day pick-me-up and just one of the many unique lavender drinks we serve at Bakerz Bite!.\r\n- Calories: 170\r\n- Total Fat (g): 9(g)\r\n- Saturated Fat (g): 5(g)\r\n- Trans Fat (g): 0(g)\r\n- Total Carbohydrate (g): 14(g)\r\n- Total Sugar (g): 14(g)\r\n- Protein (g): 9(g)',5.00,NULL,NULL),('2024-10-03 10:46:56','25','2024-10-03 10:46:56',NULL,'1727952416_0.png',103,'Iced Americano',10,'Enjoy this delicious twist on the classic latte that combines the soothing aromas and flavors of lavender with a bold espresso. A lavender latte is the perfect mid-day pick-me-up and just one of the many unique lavender drinks we serve at Bakerz Bite!.\r\n- Calories: 170\r\n- Total Fat (g): 9(g)\r\n- Saturated Fat (g): 5(g)\r\n- Trans Fat (g): 0(g)\r\n- Total Carbohydrate (g): 14(g)\r\n- Total Sugar (g): 14(g)\r\n- Protein (g): 9(g)',5.00,NULL,NULL),('2024-10-03 10:48:17','25','2024-10-03 10:48:17',NULL,'1727952497_0.png',104,'Iced Cafe Mocha',10,'Enjoy this delicious twist on the classic latte that combines the soothing aromas and flavors of lavender with a bold espresso. A lavender latte is the perfect mid-day pick-me-up and just one of the many unique lavender drinks we serve at Bakerz Bite!.\r\n- Calories: 170\r\n- Total Fat (g): 9(g)\r\n- Saturated Fat (g): 5(g)\r\n- Trans Fat (g): 0(g)\r\n- Total Carbohydrate (g): 14(g)\r\n- Total Sugar (g): 14(g)\r\n- Protein (g): 9(g)',5.00,NULL,NULL),('2024-10-03 10:49:19','25','2024-10-03 10:49:19',NULL,'1727952559_0.png',105,'Iced Caramel Macchiato',10,'Enjoy this delicious twist on the classic latte that combines the soothing aromas and flavors of lavender with a bold espresso. A lavender latte is the perfect mid-day pick-me-up and just one of the many unique lavender drinks we serve at Bakerz Bite!.\r\n- Calories: 170\r\n- Total Fat (g): 9(g)\r\n- Saturated Fat (g): 5(g)\r\n- Trans Fat (g): 0(g)\r\n- Total Carbohydrate (g): 14(g)\r\n- Total Sugar (g): 14(g)\r\n- Protein (g): 9(g)',5.00,NULL,NULL),('2024-10-03 10:51:27','25','2024-10-03 10:51:27',NULL,'1727952687_0.png',106,'Iced Vanilla Latte',10,'Enjoy this delicious twist on the classic latte that combines the soothing aromas and flavors of lavender with a bold espresso. A lavender latte is the perfect mid-day pick-me-up and just one of the many unique lavender drinks we serve at Bakerz Bite!.\r\n- Calories: 170\r\n- Total Fat (g): 9(g)\r\n- Saturated Fat (g): 5(g)\r\n- Trans Fat (g): 0(g)\r\n- Total Carbohydrate (g): 14(g)\r\n- Total Sugar (g): 14(g)\r\n- Protein (g): 9(g)',5.00,NULL,NULL),('2024-10-03 10:52:05','25','2024-10-03 10:52:22','25','1727952725_0.png',107,'Lavender Latte',10,'Enjoy this delicious twist on the classic latte that combines the soothing aromas and flavors of lavender with a bold espresso. A lavender latte is the perfect mid-day pick-me-up and just one of the many unique lavender drinks we serve at Bakerz Bite!.\r\n- Calories: 170\r\n- Total Fat (g): 9(g)\r\n- Saturated Fat (g): 5(g)\r\n- Trans Fat (g): 0(g)\r\n- Total Carbohydrate (g): 14(g)\r\n- Total Sugar (g): 14(g)\r\n- Protein (g): 9(g)',5.00,NULL,NULL),('2024-10-03 10:52:53','25','2024-10-03 10:52:53',NULL,'1727952773_0.png',108,'Vanilla Latte',10,'Enjoy this delicious twist on the classic latte that combines the soothing aromas and flavors of lavender with a bold espresso. A lavender latte is the perfect mid-day pick-me-up and just one of the many unique lavender drinks we serve at Bakerz Bite!.\r\n- Calories: 170\r\n- Total Fat (g): 9(g)\r\n- Saturated Fat (g): 5(g)\r\n- Trans Fat (g): 0(g)\r\n- Total Carbohydrate (g): 14(g)\r\n- Total Sugar (g): 14(g)\r\n- Protein (g): 9(g)',5.00,NULL,NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_image`
--

DROP TABLE IF EXISTS `product_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_image` (
  `prodimg_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`prodimg_id`),
  KEY `fk_product` (`product_id`),
  CONSTRAINT `fk_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=666 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_image`
--

LOCK TABLES `product_image` WRITE;
/*!40000 ALTER TABLE `product_image` DISABLE KEYS */;
INSERT INTO `product_image` VALUES (366,9,'1727321447_2.png','2024-09-26 03:30:47',NULL,'2024-09-26 03:30:47',NULL),(367,9,'1727321447_3.png','2024-09-26 03:30:47',NULL,'2024-09-26 03:30:47',NULL),(368,13,'1727321765_1.png','2024-09-26 03:36:05',NULL,'2024-09-26 03:36:05',NULL),(369,13,'1727321765_2.png','2024-09-26 03:36:05',NULL,'2024-09-26 03:36:05',NULL),(370,13,'1727321765_3.png','2024-09-26 03:36:05',NULL,'2024-09-26 03:36:05',NULL),(371,10,'1727321825_1.png','2024-09-26 03:37:05',NULL,'2024-09-26 03:37:05',NULL),(372,10,'1727321825_2.png','2024-09-26 03:37:05',NULL,'2024-09-26 03:37:05',NULL),(373,10,'1727321825_3.png','2024-09-26 03:37:05',NULL,'2024-09-26 03:37:05',NULL),(374,66,'1727421967_1.png','2024-09-27 07:26:07',NULL,'2024-09-27 07:26:07',NULL),(375,66,'1727421967_2.png','2024-09-27 07:26:07',NULL,'2024-09-27 07:26:07',NULL),(376,66,'1727421967_3.png','2024-09-27 07:26:07',NULL,'2024-09-27 07:26:07',NULL),(377,9,'1727432331_1.png','2024-09-27 10:18:51',NULL,'2024-09-27 10:18:51',NULL),(378,88,'1727435859_1.png','2024-09-27 11:17:39',NULL,'2024-09-27 11:17:39',NULL),(379,88,'1727435859_2.png','2024-09-27 11:17:39',NULL,'2024-09-27 11:17:39',NULL),(380,88,'1727435859_3.png','2024-09-27 11:17:39',NULL,'2024-09-27 11:17:39',NULL),(381,47,'1727680777_1.png','2024-09-30 07:19:37',NULL,'2024-09-30 07:19:37',NULL),(382,47,'1727680777_2.png','2024-09-30 07:19:37',NULL,'2024-09-30 07:19:37',NULL),(383,47,'1727680777_3.png','2024-09-30 07:19:37',NULL,'2024-09-30 07:19:37',NULL),(384,86,'1727681094_1.png','2024-09-30 07:24:54',NULL,'2024-09-30 07:24:54',NULL),(385,86,'1727681094_2.png','2024-09-30 07:24:54',NULL,'2024-09-30 07:24:54',NULL),(386,86,'1727681094_3.png','2024-09-30 07:24:54',NULL,'2024-09-30 07:24:54',NULL),(387,87,'1727681154_1.png','2024-09-30 07:25:54',NULL,'2024-09-30 07:25:54',NULL),(388,87,'1727681154_2.png','2024-09-30 07:25:54',NULL,'2024-09-30 07:25:54',NULL),(389,87,'1727681154_3.png','2024-09-30 07:25:54',NULL,'2024-09-30 07:25:54',NULL),(390,85,'1727681818_1.png','2024-09-30 07:36:58',NULL,'2024-09-30 07:36:58',NULL),(391,85,'1727681818_2.png','2024-09-30 07:36:58',NULL,'2024-09-30 07:36:58',NULL),(392,85,'1727681818_3.png','2024-09-30 07:36:58',NULL,'2024-09-30 07:36:58',NULL),(393,84,'1727681898_1.png','2024-09-30 07:38:18',NULL,'2024-09-30 07:38:18',NULL),(394,84,'1727681898_2.png','2024-09-30 07:38:18',NULL,'2024-09-30 07:38:18',NULL),(395,84,'1727681898_3.png','2024-09-30 07:38:18',NULL,'2024-09-30 07:38:18',NULL),(396,83,'1727681955_1.png','2024-09-30 07:39:15',NULL,'2024-09-30 07:39:15',NULL),(397,83,'1727681955_2.png','2024-09-30 07:39:15',NULL,'2024-09-30 07:39:15',NULL),(398,83,'1727681955_3.png','2024-09-30 07:39:15',NULL,'2024-09-30 07:39:15',NULL),(399,82,'1727682019_1.png','2024-09-30 07:40:19',NULL,'2024-09-30 07:40:19',NULL),(400,82,'1727682019_2.png','2024-09-30 07:40:19',NULL,'2024-09-30 07:40:19',NULL),(401,82,'1727682019_3.png','2024-09-30 07:40:19',NULL,'2024-09-30 07:40:19',NULL),(402,81,'1727682076_1.png','2024-09-30 07:41:16',NULL,'2024-09-30 07:41:16',NULL),(403,81,'1727682076_2.png','2024-09-30 07:41:16',NULL,'2024-09-30 07:41:16',NULL),(404,81,'1727682076_3.png','2024-09-30 07:41:16',NULL,'2024-09-30 07:41:16',NULL),(405,80,'1727682165_1.png','2024-09-30 07:42:45',NULL,'2024-09-30 07:42:45',NULL),(406,80,'1727682165_2.png','2024-09-30 07:42:45',NULL,'2024-09-30 07:42:45',NULL),(407,80,'1727682165_3.png','2024-09-30 07:42:45',NULL,'2024-09-30 07:42:45',NULL),(408,79,'1727682222_1.png','2024-09-30 07:43:42',NULL,'2024-09-30 07:43:42',NULL),(409,79,'1727682222_2.png','2024-09-30 07:43:42',NULL,'2024-09-30 07:43:42',NULL),(410,79,'1727682222_3.png','2024-09-30 07:43:42',NULL,'2024-09-30 07:43:42',NULL),(411,78,'1727682292_1.png','2024-09-30 07:44:52',NULL,'2024-09-30 07:44:52',NULL),(412,78,'1727682292_2.png','2024-09-30 07:44:52',NULL,'2024-09-30 07:44:52',NULL),(413,78,'1727682292_3.png','2024-09-30 07:44:52',NULL,'2024-09-30 07:44:52',NULL),(414,77,'1727682367_1.png','2024-09-30 07:46:07',NULL,'2024-09-30 07:46:07',NULL),(415,77,'1727682367_2.png','2024-09-30 07:46:07',NULL,'2024-09-30 07:46:07',NULL),(416,77,'1727682367_3.png','2024-09-30 07:46:07',NULL,'2024-09-30 07:46:07',NULL),(417,76,'1727682425_1.png','2024-09-30 07:47:05',NULL,'2024-09-30 07:47:05',NULL),(418,76,'1727682425_2.png','2024-09-30 07:47:05',NULL,'2024-09-30 07:47:05',NULL),(419,76,'1727682425_3.png','2024-09-30 07:47:05',NULL,'2024-09-30 07:47:05',NULL),(420,75,'1727682473_1.png','2024-09-30 07:47:53',NULL,'2024-09-30 07:47:53',NULL),(421,75,'1727682473_2.png','2024-09-30 07:47:53',NULL,'2024-09-30 07:47:53',NULL),(422,75,'1727682473_3.png','2024-09-30 07:47:53',NULL,'2024-09-30 07:47:53',NULL),(423,74,'1727682539_1.png','2024-09-30 07:48:59',NULL,'2024-09-30 07:48:59',NULL),(424,74,'1727682539_2.png','2024-09-30 07:48:59',NULL,'2024-09-30 07:48:59',NULL),(425,74,'1727682539_3.png','2024-09-30 07:48:59',NULL,'2024-09-30 07:48:59',NULL),(426,73,'1727682585_1.png','2024-09-30 07:49:45',NULL,'2024-09-30 07:49:45',NULL),(427,73,'1727682585_2.png','2024-09-30 07:49:45',NULL,'2024-09-30 07:49:45',NULL),(428,73,'1727682585_3.png','2024-09-30 07:49:45',NULL,'2024-09-30 07:49:45',NULL),(429,72,'1727682636_1.png','2024-09-30 07:50:36',NULL,'2024-09-30 07:50:36',NULL),(430,72,'1727682636_2.png','2024-09-30 07:50:36',NULL,'2024-09-30 07:50:36',NULL),(431,72,'1727682636_3.png','2024-09-30 07:50:36',NULL,'2024-09-30 07:50:36',NULL),(432,71,'1727682803_1.png','2024-09-30 07:53:23',NULL,'2024-09-30 07:53:23',NULL),(433,71,'1727682803_2.png','2024-09-30 07:53:23',NULL,'2024-09-30 07:53:23',NULL),(434,71,'1727682803_3.png','2024-09-30 07:53:23',NULL,'2024-09-30 07:53:23',NULL),(435,70,'1727682880_1.png','2024-09-30 07:54:40',NULL,'2024-09-30 07:54:40',NULL),(436,70,'1727682880_2.png','2024-09-30 07:54:40',NULL,'2024-09-30 07:54:40',NULL),(437,70,'1727682880_3.png','2024-09-30 07:54:40',NULL,'2024-09-30 07:54:40',NULL),(438,69,'1727682949_1.png','2024-09-30 07:55:49',NULL,'2024-09-30 07:55:49',NULL),(439,69,'1727682949_2.png','2024-09-30 07:55:49',NULL,'2024-09-30 07:55:49',NULL),(440,69,'1727682949_3.png','2024-09-30 07:55:49',NULL,'2024-09-30 07:55:49',NULL),(441,68,'1727683080_1.png','2024-09-30 07:58:00',NULL,'2024-09-30 07:58:00',NULL),(442,68,'1727683080_2.png','2024-09-30 07:58:00',NULL,'2024-09-30 07:58:00',NULL),(443,68,'1727683080_3.png','2024-09-30 07:58:00',NULL,'2024-09-30 07:58:00',NULL),(444,65,'1727683148_1.png','2024-09-30 07:59:08',NULL,'2024-09-30 07:59:08',NULL),(445,65,'1727683148_2.png','2024-09-30 07:59:08',NULL,'2024-09-30 07:59:08',NULL),(446,65,'1727683148_3.png','2024-09-30 07:59:08',NULL,'2024-09-30 07:59:08',NULL),(447,64,'1727683208_1.png','2024-09-30 08:00:08',NULL,'2024-09-30 08:00:08',NULL),(448,64,'1727683208_2.png','2024-09-30 08:00:08',NULL,'2024-09-30 08:00:08',NULL),(449,64,'1727683208_3.png','2024-09-30 08:00:08',NULL,'2024-09-30 08:00:08',NULL),(450,63,'1727683277_1.png','2024-09-30 08:01:17',NULL,'2024-09-30 08:01:17',NULL),(451,63,'1727683277_2.png','2024-09-30 08:01:17',NULL,'2024-09-30 08:01:17',NULL),(452,63,'1727683277_3.png','2024-09-30 08:01:17',NULL,'2024-09-30 08:01:17',NULL),(453,62,'1727683338_1.png','2024-09-30 08:02:18',NULL,'2024-09-30 08:02:18',NULL),(454,62,'1727683338_2.png','2024-09-30 08:02:18',NULL,'2024-09-30 08:02:18',NULL),(455,62,'1727683338_3.png','2024-09-30 08:02:18',NULL,'2024-09-30 08:02:18',NULL),(456,61,'1727683396_1.png','2024-09-30 08:03:16',NULL,'2024-09-30 08:03:16',NULL),(457,61,'1727683396_2.png','2024-09-30 08:03:16',NULL,'2024-09-30 08:03:16',NULL),(458,61,'1727683396_3.png','2024-09-30 08:03:16',NULL,'2024-09-30 08:03:16',NULL),(459,60,'1727683446_1.png','2024-09-30 08:04:06',NULL,'2024-09-30 08:04:06',NULL),(460,60,'1727683446_2.png','2024-09-30 08:04:06',NULL,'2024-09-30 08:04:06',NULL),(461,60,'1727683446_3.png','2024-09-30 08:04:06',NULL,'2024-09-30 08:04:06',NULL),(462,59,'1727683489_1.png','2024-09-30 08:04:49',NULL,'2024-09-30 08:04:49',NULL),(463,59,'1727683489_2.png','2024-09-30 08:04:49',NULL,'2024-09-30 08:04:49',NULL),(464,59,'1727683489_3.png','2024-09-30 08:04:49',NULL,'2024-09-30 08:04:49',NULL),(465,58,'1727683546_1.png','2024-09-30 08:05:46',NULL,'2024-09-30 08:05:46',NULL),(466,58,'1727683546_2.png','2024-09-30 08:05:46',NULL,'2024-09-30 08:05:46',NULL),(467,58,'1727683546_3.png','2024-09-30 08:05:46',NULL,'2024-09-30 08:05:46',NULL),(468,57,'1727683597_1.png','2024-09-30 08:06:37',NULL,'2024-09-30 08:06:37',NULL),(469,57,'1727683597_2.png','2024-09-30 08:06:37',NULL,'2024-09-30 08:06:37',NULL),(470,57,'1727683597_3.png','2024-09-30 08:06:37',NULL,'2024-09-30 08:06:37',NULL),(471,56,'1727683644_1.png','2024-09-30 08:07:24',NULL,'2024-09-30 08:07:24',NULL),(472,56,'1727683644_2.png','2024-09-30 08:07:24',NULL,'2024-09-30 08:07:24',NULL),(473,56,'1727683644_3.png','2024-09-30 08:07:24',NULL,'2024-09-30 08:07:24',NULL),(474,55,'1727683694_1.png','2024-09-30 08:08:14',NULL,'2024-09-30 08:08:14',NULL),(475,55,'1727683694_2.png','2024-09-30 08:08:14',NULL,'2024-09-30 08:08:14',NULL),(476,55,'1727683694_3.png','2024-09-30 08:08:14',NULL,'2024-09-30 08:08:14',NULL),(477,54,'1727683741_1.png','2024-09-30 08:09:01',NULL,'2024-09-30 08:09:01',NULL),(478,54,'1727683741_2.png','2024-09-30 08:09:01',NULL,'2024-09-30 08:09:01',NULL),(479,54,'1727683741_3.png','2024-09-30 08:09:01',NULL,'2024-09-30 08:09:01',NULL),(480,53,'1727683800_1.png','2024-09-30 08:10:00',NULL,'2024-09-30 08:10:00',NULL),(481,53,'1727683800_2.png','2024-09-30 08:10:00',NULL,'2024-09-30 08:10:00',NULL),(482,53,'1727683800_3.png','2024-09-30 08:10:00',NULL,'2024-09-30 08:10:00',NULL),(483,52,'1727683917_1.png','2024-09-30 08:11:57',NULL,'2024-09-30 08:11:57',NULL),(484,52,'1727683917_2.png','2024-09-30 08:11:57',NULL,'2024-09-30 08:11:57',NULL),(485,52,'1727683917_3.png','2024-09-30 08:11:57',NULL,'2024-09-30 08:11:57',NULL),(486,51,'1727683963_1.png','2024-09-30 08:12:43',NULL,'2024-09-30 08:12:43',NULL),(487,51,'1727683963_2.png','2024-09-30 08:12:43',NULL,'2024-09-30 08:12:43',NULL),(488,51,'1727683963_3.png','2024-09-30 08:12:43',NULL,'2024-09-30 08:12:43',NULL),(489,50,'1727684016_1.png','2024-09-30 08:13:36',NULL,'2024-09-30 08:13:36',NULL),(490,50,'1727684016_2.png','2024-09-30 08:13:36',NULL,'2024-09-30 08:13:36',NULL),(491,50,'1727684016_3.png','2024-09-30 08:13:36',NULL,'2024-09-30 08:13:36',NULL),(492,49,'1727684059_1.png','2024-09-30 08:14:19',NULL,'2024-09-30 08:14:19',NULL),(493,49,'1727684059_2.png','2024-09-30 08:14:19',NULL,'2024-09-30 08:14:19',NULL),(494,49,'1727684059_3.png','2024-09-30 08:14:19',NULL,'2024-09-30 08:14:19',NULL),(495,67,'1727684130_1.png','2024-09-30 08:15:30',NULL,'2024-09-30 08:15:30',NULL),(496,67,'1727684130_2.png','2024-09-30 08:15:30',NULL,'2024-09-30 08:15:30',NULL),(497,67,'1727684130_3.png','2024-09-30 08:15:30',NULL,'2024-09-30 08:15:30',NULL),(498,28,'1727684196_1.png','2024-09-30 08:16:36',NULL,'2024-09-30 08:16:36',NULL),(499,28,'1727684196_2.png','2024-09-30 08:16:36',NULL,'2024-09-30 08:16:36',NULL),(500,28,'1727684196_3.png','2024-09-30 08:16:36',NULL,'2024-09-30 08:16:36',NULL),(501,27,'1727684265_1.png','2024-09-30 08:17:45',NULL,'2024-09-30 08:17:45',NULL),(502,27,'1727684265_2.png','2024-09-30 08:17:45',NULL,'2024-09-30 08:17:45',NULL),(503,27,'1727684265_3.png','2024-09-30 08:17:45',NULL,'2024-09-30 08:17:45',NULL),(504,25,'1727684308_1.png','2024-09-30 08:18:28',NULL,'2024-09-30 08:18:28',NULL),(505,25,'1727684308_2.png','2024-09-30 08:18:28',NULL,'2024-09-30 08:18:28',NULL),(506,25,'1727684308_3.png','2024-09-30 08:18:28',NULL,'2024-09-30 08:18:28',NULL),(507,21,'1727684367_1.png','2024-09-30 08:19:27',NULL,'2024-09-30 08:19:27',NULL),(508,21,'1727684367_2.png','2024-09-30 08:19:27',NULL,'2024-09-30 08:19:27',NULL),(509,21,'1727684367_3.png','2024-09-30 08:19:27',NULL,'2024-09-30 08:19:27',NULL),(510,18,'1727684410_1.png','2024-09-30 08:20:10',NULL,'2024-09-30 08:20:10',NULL),(511,18,'1727684410_2.png','2024-09-30 08:20:10',NULL,'2024-09-30 08:20:10',NULL),(512,18,'1727684410_3.png','2024-09-30 08:20:10',NULL,'2024-09-30 08:20:10',NULL),(513,17,'1727684453_1.png','2024-09-30 08:20:53',NULL,'2024-09-30 08:20:53',NULL),(514,17,'1727684453_2.png','2024-09-30 08:20:53',NULL,'2024-09-30 08:20:53',NULL),(515,17,'1727684453_3.png','2024-09-30 08:20:53',NULL,'2024-09-30 08:20:53',NULL),(516,14,'1727684506_1.png','2024-09-30 08:21:46',NULL,'2024-09-30 08:21:46',NULL),(517,14,'1727684506_2.png','2024-09-30 08:21:46',NULL,'2024-09-30 08:21:46',NULL),(518,14,'1727684506_3.png','2024-09-30 08:21:46',NULL,'2024-09-30 08:21:46',NULL),(519,11,'1727684589_1.png','2024-09-30 08:23:09',NULL,'2024-09-30 08:23:09',NULL),(520,11,'1727684589_2.png','2024-09-30 08:23:09',NULL,'2024-09-30 08:23:09',NULL),(521,11,'1727684589_3.png','2024-09-30 08:23:09',NULL,'2024-09-30 08:23:09',NULL),(522,29,'1727684722_1.png','2024-09-30 08:25:22',NULL,'2024-09-30 08:25:22',NULL),(523,29,'1727684722_2.png','2024-09-30 08:25:22',NULL,'2024-09-30 08:25:22',NULL),(524,29,'1727684722_3.png','2024-09-30 08:25:22',NULL,'2024-09-30 08:25:22',NULL),(525,32,'1727684769_1.png','2024-09-30 08:26:09',NULL,'2024-09-30 08:26:09',NULL),(526,32,'1727684769_2.png','2024-09-30 08:26:09',NULL,'2024-09-30 08:26:09',NULL),(527,32,'1727684769_3.png','2024-09-30 08:26:09',NULL,'2024-09-30 08:26:09',NULL),(528,36,'1727684816_1.png','2024-09-30 08:26:56',NULL,'2024-09-30 08:26:56',NULL),(529,36,'1727684816_2.png','2024-09-30 08:26:56',NULL,'2024-09-30 08:26:56',NULL),(530,36,'1727684816_3.png','2024-09-30 08:26:56',NULL,'2024-09-30 08:26:56',NULL),(531,44,'1727684874_1.png','2024-09-30 08:27:54',NULL,'2024-09-30 08:27:54',NULL),(532,44,'1727684874_2.png','2024-09-30 08:27:54',NULL,'2024-09-30 08:27:54',NULL),(533,44,'1727684874_3.png','2024-09-30 08:27:54',NULL,'2024-09-30 08:27:54',NULL),(534,45,'1727684917_1.png','2024-09-30 08:28:37',NULL,'2024-09-30 08:28:37',NULL),(535,45,'1727684917_2.png','2024-09-30 08:28:37',NULL,'2024-09-30 08:28:37',NULL),(536,45,'1727684917_3.png','2024-09-30 08:28:37',NULL,'2024-09-30 08:28:37',NULL),(537,46,'1727684967_1.png','2024-09-30 08:29:27',NULL,'2024-09-30 08:29:27',NULL),(538,46,'1727684967_2.png','2024-09-30 08:29:27',NULL,'2024-09-30 08:29:27',NULL),(539,46,'1727684967_3.png','2024-09-30 08:29:27',NULL,'2024-09-30 08:29:27',NULL),(540,33,'1727685015_1.png','2024-09-30 08:30:15',NULL,'2024-09-30 08:30:15',NULL),(541,33,'1727685015_2.png','2024-09-30 08:30:15',NULL,'2024-09-30 08:30:15',NULL),(542,33,'1727685015_3.png','2024-09-30 08:30:15',NULL,'2024-09-30 08:30:15',NULL),(543,43,'1727685068_1.png','2024-09-30 08:31:08',NULL,'2024-09-30 08:31:08',NULL),(544,43,'1727685068_2.png','2024-09-30 08:31:08',NULL,'2024-09-30 08:31:08',NULL),(545,43,'1727685068_3.png','2024-09-30 08:31:08',NULL,'2024-09-30 08:31:08',NULL),(546,35,'1727685118_1.png','2024-09-30 08:31:58',NULL,'2024-09-30 08:31:58',NULL),(547,35,'1727685118_2.png','2024-09-30 08:31:58',NULL,'2024-09-30 08:31:58',NULL),(548,35,'1727685118_3.png','2024-09-30 08:31:58',NULL,'2024-09-30 08:31:58',NULL),(549,41,'1727685196_1.png','2024-09-30 08:33:16',NULL,'2024-09-30 08:33:16',NULL),(550,41,'1727685196_2.png','2024-09-30 08:33:16',NULL,'2024-09-30 08:33:16',NULL),(551,41,'1727685196_3.png','2024-09-30 08:33:16',NULL,'2024-09-30 08:33:16',NULL),(552,37,'1727685252_1.png','2024-09-30 08:34:12',NULL,'2024-09-30 08:34:12',NULL),(553,37,'1727685252_2.png','2024-09-30 08:34:12',NULL,'2024-09-30 08:34:12',NULL),(554,37,'1727685252_3.png','2024-09-30 08:34:12',NULL,'2024-09-30 08:34:12',NULL),(555,34,'1727685330_1.png','2024-09-30 08:35:30',NULL,'2024-09-30 08:35:30',NULL),(556,34,'1727685330_2.png','2024-09-30 08:35:30',NULL,'2024-09-30 08:35:30',NULL),(557,34,'1727685330_3.png','2024-09-30 08:35:30',NULL,'2024-09-30 08:35:30',NULL),(558,30,'1727685384_1.png','2024-09-30 08:36:24',NULL,'2024-09-30 08:36:24',NULL),(559,30,'1727685384_2.png','2024-09-30 08:36:24',NULL,'2024-09-30 08:36:24',NULL),(560,30,'1727685384_3.png','2024-09-30 08:36:24',NULL,'2024-09-30 08:36:24',NULL),(561,40,'1727685446_1.png','2024-09-30 08:37:26',NULL,'2024-09-30 08:37:26',NULL),(562,40,'1727685446_2.png','2024-09-30 08:37:26',NULL,'2024-09-30 08:37:26',NULL),(563,40,'1727685446_3.png','2024-09-30 08:37:26',NULL,'2024-09-30 08:37:26',NULL),(564,42,'1727685504_1.png','2024-09-30 08:38:24',NULL,'2024-09-30 08:38:24',NULL),(565,42,'1727685504_2.png','2024-09-30 08:38:24',NULL,'2024-09-30 08:38:24',NULL),(566,42,'1727685504_3.png','2024-09-30 08:38:24',NULL,'2024-09-30 08:38:24',NULL),(567,39,'1727685550_1.png','2024-09-30 08:39:10',NULL,'2024-09-30 08:39:10',NULL),(568,39,'1727685550_2.png','2024-09-30 08:39:10',NULL,'2024-09-30 08:39:10',NULL),(569,39,'1727685550_3.png','2024-09-30 08:39:10',NULL,'2024-09-30 08:39:10',NULL),(570,48,'1727685598_1.png','2024-09-30 08:39:58',NULL,'2024-09-30 08:39:58',NULL),(571,48,'1727685598_2.png','2024-09-30 08:39:58',NULL,'2024-09-30 08:39:58',NULL),(572,48,'1727685598_3.png','2024-09-30 08:39:58',NULL,'2024-09-30 08:39:58',NULL),(573,31,'1727685644_1.png','2024-09-30 08:40:44',NULL,'2024-09-30 08:40:44',NULL),(574,31,'1727685644_2.png','2024-09-30 08:40:44',NULL,'2024-09-30 08:40:44',NULL),(575,31,'1727685644_3.png','2024-09-30 08:40:44',NULL,'2024-09-30 08:40:44',NULL),(576,38,'1727685692_1.png','2024-09-30 08:41:32',NULL,'2024-09-30 08:41:32',NULL),(577,38,'1727685692_2.png','2024-09-30 08:41:32',NULL,'2024-09-30 08:41:32',NULL),(578,38,'1727685692_3.png','2024-09-30 08:41:32',NULL,'2024-09-30 08:41:32',NULL),(579,12,'1727685754_1.png','2024-09-30 08:42:34',NULL,'2024-09-30 08:42:34',NULL),(580,12,'1727685754_2.png','2024-09-30 08:42:34',NULL,'2024-09-30 08:42:34',NULL),(581,12,'1727685754_3.png','2024-09-30 08:42:34',NULL,'2024-09-30 08:42:34',NULL),(582,15,'1727685824_1.png','2024-09-30 08:43:44',NULL,'2024-09-30 08:43:44',NULL),(583,15,'1727685824_2.png','2024-09-30 08:43:44',NULL,'2024-09-30 08:43:44',NULL),(584,15,'1727685824_3.png','2024-09-30 08:43:44',NULL,'2024-09-30 08:43:44',NULL),(585,16,'1727685870_1.png','2024-09-30 08:44:30',NULL,'2024-09-30 08:44:30',NULL),(586,16,'1727685870_2.png','2024-09-30 08:44:30',NULL,'2024-09-30 08:44:30',NULL),(587,16,'1727685870_3.png','2024-09-30 08:44:30',NULL,'2024-09-30 08:44:30',NULL),(588,22,'1727685924_1.png','2024-09-30 08:45:24',NULL,'2024-09-30 08:45:24',NULL),(589,22,'1727685924_2.png','2024-09-30 08:45:24',NULL,'2024-09-30 08:45:24',NULL),(590,22,'1727685924_3.png','2024-09-30 08:45:24',NULL,'2024-09-30 08:45:24',NULL),(591,19,'1727685968_1.png','2024-09-30 08:46:08',NULL,'2024-09-30 08:46:08',NULL),(592,19,'1727685968_2.png','2024-09-30 08:46:08',NULL,'2024-09-30 08:46:08',NULL),(593,19,'1727685968_3.png','2024-09-30 08:46:08',NULL,'2024-09-30 08:46:08',NULL),(594,20,'1727686013_1.png','2024-09-30 08:46:53',NULL,'2024-09-30 08:46:53',NULL),(595,20,'1727686013_2.png','2024-09-30 08:46:53',NULL,'2024-09-30 08:46:53',NULL),(596,20,'1727686013_3.png','2024-09-30 08:46:53',NULL,'2024-09-30 08:46:53',NULL),(597,26,'1727686069_1.png','2024-09-30 08:47:49',NULL,'2024-09-30 08:47:49',NULL),(598,26,'1727686069_2.png','2024-09-30 08:47:49',NULL,'2024-09-30 08:47:49',NULL),(599,26,'1727686069_3.png','2024-09-30 08:47:49',NULL,'2024-09-30 08:47:49',NULL),(600,24,'1727686112_1.png','2024-09-30 08:48:32',NULL,'2024-09-30 08:48:32',NULL),(601,24,'1727686112_2.png','2024-09-30 08:48:32',NULL,'2024-09-30 08:48:32',NULL),(602,24,'1727686112_3.png','2024-09-30 08:48:32',NULL,'2024-09-30 08:48:32',NULL),(603,23,'1727686154_1.png','2024-09-30 08:49:14',NULL,'2024-09-30 08:49:14',NULL),(604,23,'1727686154_2.png','2024-09-30 08:49:14',NULL,'2024-09-30 08:49:14',NULL),(605,23,'1727686154_3.png','2024-09-30 08:49:14',NULL,'2024-09-30 08:49:14',NULL),(606,89,'1727712664_1.png','2024-09-30 16:11:04',NULL,'2024-09-30 16:11:04',NULL),(607,89,'1727712664_2.png','2024-09-30 16:11:04',NULL,'2024-09-30 16:11:04',NULL),(608,89,'1727712664_3.png','2024-09-30 16:11:04',NULL,'2024-09-30 16:11:04',NULL),(609,90,'1727712753_1.png','2024-09-30 16:12:33',NULL,'2024-09-30 16:12:33',NULL),(610,90,'1727712753_2.png','2024-09-30 16:12:33',NULL,'2024-09-30 16:12:33',NULL),(611,90,'1727712753_3.png','2024-09-30 16:12:33',NULL,'2024-09-30 16:12:33',NULL),(612,91,'1727712798_1.png','2024-09-30 16:13:18',NULL,'2024-09-30 16:13:18',NULL),(613,91,'1727712798_2.png','2024-09-30 16:13:18',NULL,'2024-09-30 16:13:18',NULL),(614,91,'1727712798_3.png','2024-09-30 16:13:18',NULL,'2024-09-30 16:13:18',NULL),(615,92,'1727712879_1.png','2024-09-30 16:14:39',NULL,'2024-09-30 16:14:39',NULL),(616,92,'1727712879_2.png','2024-09-30 16:14:39',NULL,'2024-09-30 16:14:39',NULL),(617,92,'1727712879_3.png','2024-09-30 16:14:39',NULL,'2024-09-30 16:14:39',NULL),(618,93,'1727712921_1.png','2024-09-30 16:15:21',NULL,'2024-09-30 16:15:21',NULL),(619,93,'1727712921_2.png','2024-09-30 16:15:21',NULL,'2024-09-30 16:15:21',NULL),(620,93,'1727712921_3.png','2024-09-30 16:15:21',NULL,'2024-09-30 16:15:21',NULL),(621,94,'1727714485_1.png','2024-09-30 16:41:25',NULL,'2024-09-30 16:41:25',NULL),(622,94,'1727714485_2.png','2024-09-30 16:41:25',NULL,'2024-09-30 16:41:25',NULL),(623,94,'1727714485_3.png','2024-09-30 16:41:25',NULL,'2024-09-30 16:41:25',NULL),(624,95,'1727714521_1.png','2024-09-30 16:42:01',NULL,'2024-09-30 16:42:01',NULL),(625,95,'1727714521_2.png','2024-09-30 16:42:01',NULL,'2024-09-30 16:42:01',NULL),(626,95,'1727714521_3.png','2024-09-30 16:42:01',NULL,'2024-09-30 16:42:01',NULL),(627,96,'1727714563_1.png','2024-09-30 16:42:43',NULL,'2024-09-30 16:42:43',NULL),(628,96,'1727714563_2.png','2024-09-30 16:42:43',NULL,'2024-09-30 16:42:43',NULL),(629,96,'1727714563_3.png','2024-09-30 16:42:43',NULL,'2024-09-30 16:42:43',NULL),(630,97,'1727714600_1.png','2024-09-30 16:43:20',NULL,'2024-09-30 16:43:20',NULL),(631,97,'1727714600_2.png','2024-09-30 16:43:20',NULL,'2024-09-30 16:43:20',NULL),(632,97,'1727714600_3.png','2024-09-30 16:43:20',NULL,'2024-09-30 16:43:20',NULL),(633,98,'1727714633_1.png','2024-09-30 16:43:53',NULL,'2024-09-30 16:43:53',NULL),(634,98,'1727714633_2.png','2024-09-30 16:43:53',NULL,'2024-09-30 16:43:53',NULL),(635,98,'1727714633_3.png','2024-09-30 16:43:53',NULL,'2024-09-30 16:43:53',NULL),(636,99,'1727787882_1.png','2024-10-01 13:04:42',NULL,'2024-10-01 13:04:42',NULL),(637,99,'1727787882_2.png','2024-10-01 13:04:42',NULL,'2024-10-01 13:04:42',NULL),(638,99,'1727787882_3.png','2024-10-01 13:04:42',NULL,'2024-10-01 13:04:42',NULL),(639,100,'1727952259_1.jpg','2024-10-03 10:44:19',NULL,'2024-10-03 10:44:19',NULL),(640,100,'1727952259_2.jpg','2024-10-03 10:44:19',NULL,'2024-10-03 10:44:19',NULL),(641,100,'1727952259_3.jpg','2024-10-03 10:44:19',NULL,'2024-10-03 10:44:19',NULL),(642,101,'1727952345_1.png','2024-10-03 10:45:45',NULL,'2024-10-03 10:45:45',NULL),(643,101,'1727952345_2.png','2024-10-03 10:45:45',NULL,'2024-10-03 10:45:45',NULL),(644,101,'1727952345_3.png','2024-10-03 10:45:45',NULL,'2024-10-03 10:45:45',NULL),(645,102,'1727952382_1.png','2024-10-03 10:46:22',NULL,'2024-10-03 10:46:22',NULL),(646,102,'1727952382_2.png','2024-10-03 10:46:22',NULL,'2024-10-03 10:46:22',NULL),(647,102,'1727952382_3.png','2024-10-03 10:46:22',NULL,'2024-10-03 10:46:22',NULL),(648,103,'1727952416_1.png','2024-10-03 10:46:56',NULL,'2024-10-03 10:46:56',NULL),(649,103,'1727952416_2.png','2024-10-03 10:46:56',NULL,'2024-10-03 10:46:56',NULL),(650,103,'1727952416_3.png','2024-10-03 10:46:56',NULL,'2024-10-03 10:46:56',NULL),(651,104,'1727952497_1.png','2024-10-03 10:48:17',NULL,'2024-10-03 10:48:17',NULL),(652,104,'1727952497_2.png','2024-10-03 10:48:17',NULL,'2024-10-03 10:48:17',NULL),(653,104,'1727952497_3.png','2024-10-03 10:48:17',NULL,'2024-10-03 10:48:17',NULL),(654,105,'1727952559_1.png','2024-10-03 10:49:19',NULL,'2024-10-03 10:49:19',NULL),(655,105,'1727952559_2.png','2024-10-03 10:49:19',NULL,'2024-10-03 10:49:19',NULL),(656,105,'1727952559_3.png','2024-10-03 10:49:19',NULL,'2024-10-03 10:49:19',NULL),(657,106,'1727952687_1.png','2024-10-03 10:51:27',NULL,'2024-10-03 10:51:27',NULL),(658,106,'1727952687_2.png','2024-10-03 10:51:27',NULL,'2024-10-03 10:51:27',NULL),(659,106,'1727952687_3.png','2024-10-03 10:51:27',NULL,'2024-10-03 10:51:27',NULL),(660,107,'1727952725_1.png','2024-10-03 10:52:05',NULL,'2024-10-03 10:52:05',NULL),(661,107,'1727952725_2.png','2024-10-03 10:52:05',NULL,'2024-10-03 10:52:05',NULL),(662,107,'1727952725_3.png','2024-10-03 10:52:05',NULL,'2024-10-03 10:52:05',NULL),(663,108,'1727952773_1.png','2024-10-03 10:52:53',NULL,'2024-10-03 10:52:53',NULL),(664,108,'1727952773_2.png','2024-10-03 10:52:53',NULL,'2024-10-03 10:52:53',NULL),(665,108,'1727952773_3.png','2024-10-03 10:52:53',NULL,'2024-10-03 10:52:53',NULL);
/*!40000 ALTER TABLE `product_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role` (
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES ('2024-09-18 15:48:09',NULL,NULL,NULL,1,'User'),('2024-09-18 15:48:09',NULL,NULL,NULL,2,'Admin'),('2024-09-24 09:53:59',NULL,NULL,NULL,3,'Supper Admin');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('GYQ85iVF34zesMZYympYHMVr97v9sIkNl11osfYL',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0','YToyOntzOjY6Il90b2tlbiI7czo0MDoiN05uOFVoc0hRalJoSFJhc09INVl6NnQ1YkV6VHdwaDZ5M2g1aHBtWSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1727788037),('n2Q380dyY0Xgu9eW91QzhAoKAjZPT99zdUEFzB3X',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0','YToyOntzOjY6Il90b2tlbiI7czo0MDoibVJ2cXljcEhNWDVWem12dkh2SjdrWjhhRkpYU25NeVZCMElBMW9ZViI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1727768770),('tFHEAHrkOTHOL1fljSzbaljtBn9GxUivcg1mLhLm',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36','YToyOntzOjY6Il90b2tlbiI7czo0MDoicWJnUUtkeERKN29OVGJpV3RrcFA3SVBJMXlZVlh0QnNOdVN1bEpQOSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1727779411),('w75Mo5HC1FSRmbAKsWTgm7RH2ozO768t3WftGrqK',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNVdNYkY4QVFEWTFjdkJTU1ZMNzBxZEcyaDRwb2FxTW04YTNvQVdnOSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3QvYmFrZXJ6L3B1YmxpYyI7fX0=',1727768800),('WEmBVbgFLbAv9CLjZb6XKUKUltebE1lduT8kEBsE',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNnVuZkU4QWJMRTJCVlJDSEl3MTNKTWVtZW5JeGNKMm56ZHA4TG4yZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvYmFrZXJ6L3B1YmxpYy9maWx0ZXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1727768168),('WSXeuI3FRjl091rfzD4Mfzc8HjNw4L5FNSv6ZXrO',NULL,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0','YToyOntzOjY6Il90b2tlbiI7czo0MDoiTm44cnVEN1RnMWl6clBDMFFoMTZLNzY1YWdGWlJ6TTR4anBPM1dMeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==',1727763474);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `isdelete` int(11) DEFAULT NULL,
  `note` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `rank` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('2024-09-18 15:21:33',NULL,'2024-10-03 08:59:19',NULL,24,'$2y$12$ZJhd6DL0xqX.RYFki0NO6.4LWpVU3iFWhU691C/l14MMch5xaIG7u','Lê Văn Canh','admin@gmail.com',2,'123456789','male','TPHCM',NULL,NULL,'1727945959.png',NULL,NULL,NULL),('2024-09-18 15:58:51',NULL,'2024-10-03 09:28:01',NULL,25,'$2y$12$1QGgnwOH071hZNWVAACo0Og2t14BAcX.AGQdrrh8zlN1Y4qE2hBda','Lê Văn A','user@gmail.com',3,'123456789','male','TPHCM',NULL,NULL,'1727321067.png',NULL,3,'Bronze'),('2024-09-18 17:00:14',NULL,'2024-10-03 11:04:04',NULL,26,'$2y$12$d/7XxCUStSWPNZtsWlYicO4pSkV82.uX7.L17QJD8OOM0L/MxvMNy','Nguyễn Văn Đạt','datnguyen0996@gmail.com',3,'0909677317','male','TPHCM',NULL,NULL,'1727437859.png',NULL,664,'Diamond'),('2024-09-18 17:03:15',NULL,'2024-10-01 13:40:54',NULL,27,'$2y$12$RJyNZgutrU4Un6NV3Y6WTudqihaikD3U6HKRCyrLOoE3lNZp4U.5u','Ngô Trung Diễn','ngotrungdientdt@gmail.com',2,'0961563167',NULL,'TPHCM',NULL,NULL,'1727789879.png',NULL,150,'Gold'),('2024-09-18 17:13:11',NULL,'2024-10-03 05:39:42',NULL,28,'$2y$12$yb2P54On0N38vxzu2eFXheBC4XGYzfKrBPixys9m5p13pPBYTqZrq','Minh Hưng','mhung3895@gmail.com',1,'0829030724','0','TPHCM',1,NULL,'1727767005.jpg',NULL,2,'Bronze'),('2024-09-19 14:58:46',NULL,'2024-09-24 05:11:58',NULL,29,'$2y$12$hZrfS4B6qlEFecsY4iiihef0SlYnTmM.4M234u150KK7AXJG7qyVS','Ngô Trung Diễn','aa@gmail.com',1,'0961563167','0','TPHCM',NULL,NULL,'PQ0F7PSGmVjYDe4IXkM7pF0mpthaa6eI1D3Othuk.png',NULL,NULL,NULL),('2024-09-20 11:05:15',NULL,'2024-09-24 05:10:52',NULL,30,'$2y$12$xhr079rpAeeAku73L4bqwu9vnw802XDQcnJGTZV7xpqAcCf2eYTEq','Lê Văn Canh','user1@gmail.com',1,'0123456789','male','BAC LIEU1',NULL,NULL,'1727154652.png',NULL,NULL,NULL),('2024-09-20 13:33:49',NULL,'2024-10-01 13:07:20',NULL,31,'$2y$12$2Ofy3td55eBHkv8vfE2tjeaINrmTkaDyJJ5eO5p8J2l12TMVjKWEm','Lê Thị G','user2@gmail.com',1,'012345678','female','TPHCM',NULL,NULL,'1726839405.png',NULL,NULL,NULL),('2024-09-24 03:12:33',NULL,'2024-09-24 03:13:19',NULL,32,'$2y$12$NU9fUon4ORq7NNgRZ1/5UO1hl.IIYtLHPQPizOOXCbz8exfLfMmNm','Nguyen thi H','user3@gmail.com',1,'123456789','female','TPHCM',NULL,NULL,'1727147594.png',NULL,NULL,NULL),('2024-10-01 12:53:52',NULL,'2024-10-01 12:54:22',NULL,33,'$2y$12$JGzbYTPaFL3TwbB8hVkGl.uk9Jy6iQBp1.E7Yy.G/dgIjDFQWziw6','le van canhhhhh','user5@gmail.com',1,'12345678','male','TPHCM',NULL,NULL,'1727787252.jpg',NULL,NULL,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_review_replies`
--

DROP TABLE IF EXISTS `user_review_replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_review_replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userreview_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `reply` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `fk_userreview` (`userreview_id`),
  KEY `fk_user` (`user_id`),
  CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE,
  CONSTRAINT `fk_userreview` FOREIGN KEY (`userreview_id`) REFERENCES `userreview` (`ID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_review_replies`
--

LOCK TABLES `user_review_replies` WRITE;
/*!40000 ALTER TABLE `user_review_replies` DISABLE KEYS */;
INSERT INTO `user_review_replies` VALUES (1,23,26,'111111111111111','2024-09-29 02:56:34','2024-09-29 02:56:34'),(2,23,25,'aaaaaaaaaaaaaaaaaaaaa','2024-09-29 02:57:35','2024-09-29 02:57:35'),(3,24,26,'zxzadada','2024-09-29 02:59:20','2024-09-29 02:59:20'),(4,20,26,'sadasd','2024-09-29 09:59:59','2024-09-29 09:59:59'),(5,20,26,'ádasasdas','2024-09-29 10:00:20','2024-09-29 10:00:20'),(6,21,26,'dsad','2024-10-01 06:03:16','2024-10-01 06:03:16');
/*!40000 ALTER TABLE `user_review_replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userreview`
--

DROP TABLE IF EXISTS `userreview`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `userreview` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ratestar` int(11) DEFAULT NULL CHECK (`ratestar` between 1 and 5),
  `image` text DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT current_timestamp(),
  `CreatedBy` varchar(255) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `ModifiedBy` varchar(255) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `reply` text DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `userreview_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  CONSTRAINT `userreview_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userreview`
--

LOCK TABLES `userreview` WRITE;
/*!40000 ALTER TABLE `userreview` DISABLE KEYS */;
INSERT INTO `userreview` VALUES (17,5,NULL,'ok',26,9,'2024-09-28 15:36:09','Nguyễn Văn Đạt',NULL,NULL,1,NULL),(18,5,NULL,'ok',26,9,'2024-09-28 15:55:37','Nguyễn Văn Đạt',NULL,NULL,1,NULL),(19,1,NULL,'oko\r\nọioijo',26,9,'2024-09-28 15:56:07','Nguyễn Văn Đạt',NULL,NULL,1,NULL),(20,5,NULL,'adg',26,16,'2024-09-29 05:02:39','Nguyễn Văn Đạt',NULL,NULL,1,NULL),(21,5,NULL,'shop ok đó',26,9,'2024-09-29 08:28:18','Nguyễn Văn Đạt',NULL,NULL,0,NULL),(22,1,NULL,'thôi lỏa\r\nquá',26,9,'2024-09-29 08:28:33','Nguyễn Văn Đạt',NULL,NULL,0,'block nha'),(23,4,NULL,'111111111111111',26,10,'2024-09-29 09:56:13','Nguyễn Văn Đạt',NULL,NULL,1,NULL),(24,3,NULL,'aaaaaaaaaaaaaaaaaaaaaaa',30,10,'2024-09-29 09:59:01','Lê Văn Canh',NULL,NULL,1,NULL),(25,5,NULL,'ok',26,15,'2024-10-01 09:15:06','Nguyễn Văn Đạt',NULL,NULL,0,NULL),(26,1,NULL,'da',28,15,'2024-10-01 09:15:51','Minh Hưng',NULL,NULL,0,NULL),(27,5,NULL,'đâsdas',26,9,'2024-10-01 13:02:44','Nguyễn Văn Đạt',NULL,NULL,0,NULL);
/*!40000 ALTER TABLE `userreview` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'bakerz'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-04  0:08:03
