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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES ('2024-09-21 22:10:15',NULL,'2024-09-24 07:06:20',NULL,'1727018037.png',1,'Danh Mục1',NULL,1),('2024-09-21 22:10:15',NULL,'2024-09-22 15:18:02',NULL,'1727017606.png',2,'132114',NULL,1),('2024-09-22 16:13:52',NULL,'2024-09-24 07:06:11',NULL,'1727146195.png',3,'242424',NULL,1),('2024-09-22 16:14:07',NULL,'2024-09-23 04:01:30',NULL,'1727021936.png',4,'242424',NULL,1),('2024-09-22 16:26:09',NULL,'2024-09-24 07:06:14',NULL,'1727108203.png',5,'tttt',NULL,1),('2024-09-22 16:54:59',NULL,'2024-09-23 12:13:54',NULL,'1727091454.png',6,'bbbe',NULL,1),('2024-09-23 12:13:49',NULL,'2024-09-24 07:06:17',NULL,'1727093715.png',7,'1313',NULL,1),('2024-09-24 07:05:57',NULL,'2024-09-26 03:43:45',NULL,'1727322225.png',8,'Sweet Breads',NULL,NULL),('2024-09-24 07:10:31',NULL,'2024-09-26 03:43:28',NULL,'1727322208.png',9,'Baked Goods',NULL,NULL),('2024-09-24 07:10:58',NULL,'2024-09-26 03:43:09',NULL,'1727322189.png',10,'Cakes',NULL,NULL),('2024-09-24 07:11:38',NULL,'2024-09-26 03:42:54',NULL,'1727322174.png',11,'Cheesecakes',NULL,NULL),('2024-09-26 08:56:45',NULL,'2024-09-26 08:56:45',NULL,'1727341005.jpg',12,'Hot',NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discount`
--

LOCK TABLES `discount` WRITE;
/*!40000 ALTER TABLE `discount` DISABLE KEYS */;
INSERT INTO `discount` VALUES ('2024-09-25 21:45:53',NULL,'2024-09-25 14:46:09',NULL,1,'flash sale','2024-09-25','2024-09-25',0.15,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `discountproduct`
--

LOCK TABLES `discountproduct` WRITE;
/*!40000 ALTER TABLE `discountproduct` DISABLE KEYS */;
INSERT INTO `discountproduct` VALUES ('2024-09-25 21:46:12',NULL,NULL,NULL,1,1,13,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-25 21:46:16',NULL,NULL,NULL,2,1,69,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-25 21:46:22',NULL,NULL,NULL,3,1,38,'2024-09-25','2024-09-25',0.15,NULL),('2024-09-25 21:46:24',NULL,NULL,NULL,4,1,68,'2024-09-25','2024-09-25',0.15,NULL);
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
INSERT INTO `link_product_heathy` VALUES (6,3,1),(7,3,5),(8,4,4),(9,5,2),(11,2,1),(12,5,5),(13,7,1),(14,1,5),(16,8,2),(17,8,3),(18,1,2),(20,10,1),(21,9,1),(22,9,2),(23,9,3),(24,9,6),(25,9,8),(26,16,1),(27,16,2),(28,16,3),(29,16,6),(30,16,8),(31,17,1),(32,17,2),(33,17,3),(34,17,6),(35,17,8),(36,26,1),(37,26,2),(38,26,3),(39,26,6),(40,26,8),(41,28,1),(42,28,2),(43,28,3),(44,28,6),(45,28,8),(46,32,1),(47,32,2),(48,32,3),(49,32,6),(50,32,8),(51,33,2),(53,36,1),(54,36,3),(55,36,6),(56,36,8),(57,37,2),(58,39,1),(59,39,2),(60,39,3),(61,39,6),(62,39,8),(63,40,2),(64,49,1),(65,49,6),(66,49,8),(67,53,3),(68,55,2),(69,55,3),(70,58,2),(71,60,1),(72,60,2),(73,60,6),(74,60,8),(75,62,3),(76,64,2),(77,67,2),(78,69,1),(79,69,2),(80,69,6),(81,69,8),(82,71,1),(83,71,2),(84,71,6),(85,71,8),(86,73,2),(87,74,1),(88,74,2),(89,74,3),(90,74,6),(91,74,8),(92,75,1),(93,75,2),(94,75,6),(95,75,8),(96,78,2),(97,78,3),(98,79,1),(99,79,2),(100,79,6),(101,79,8),(102,81,2),(103,81,3),(104,9,5),(105,11,5),(106,14,5),(107,16,4),(108,17,5),(109,18,5),(110,19,4),(111,20,5),(112,25,4),(113,26,5),(114,24,4),(115,28,4),(116,23,4),(117,27,5),(118,33,5),(119,47,5),(120,43,5),(121,35,5),(122,41,5),(123,37,5),(124,34,5),(125,36,5),(126,30,4),(127,40,4),(128,42,4),(129,39,4),(130,48,4),(131,31,4),(132,55,5),(133,52,5),(134,65,5),(135,62,5),(136,56,5),(137,54,5),(138,49,5),(139,61,5),(140,58,4),(141,63,4),(142,88,4),(143,66,4),(144,78,4),(145,77,4),(146,84,4),(147,87,4),(148,81,4),(149,79,5),(150,73,5),(151,72,5),(152,83,5),(153,70,5),(155,69,5),(156,76,5),(157,68,5),(158,10,5);
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
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linkcatalogproduct`
--

LOCK TABLES `linkcatalogproduct` WRITE;
/*!40000 ALTER TABLE `linkcatalogproduct` DISABLE KEYS */;
INSERT INTO `linkcatalogproduct` VALUES (1,1,1),(2,1,2),(3,1,5),(4,1,7),(5,2,1),(6,3,1),(7,4,1),(8,5,1),(9,6,8),(10,8,9),(12,8,11),(13,8,12),(14,8,13),(15,8,15),(16,8,14),(17,8,16),(18,8,17),(19,8,18),(20,8,19),(21,8,20),(22,8,21),(23,8,22),(24,8,23),(25,8,24),(26,8,25),(27,8,26),(28,8,27),(29,8,28),(30,9,29),(31,9,30),(32,9,31),(33,9,32),(34,9,33),(35,9,34),(36,9,35),(37,9,36),(38,9,37),(39,9,38),(40,9,39),(41,9,40),(42,9,41),(43,9,42),(44,9,43),(45,9,44),(46,9,45),(47,9,46),(48,9,47),(49,9,48),(51,9,50),(52,10,51),(53,10,50),(54,10,49),(55,10,52),(56,10,53),(57,10,54),(58,10,55),(59,10,56),(60,10,57),(61,10,58),(62,10,59),(63,10,60),(64,10,61),(65,10,62),(66,10,63),(67,10,64),(68,10,65),(69,10,66),(70,10,67),(71,11,68),(72,11,69),(73,11,70),(74,11,71),(75,11,72),(76,11,73),(77,11,74),(78,11,75),(79,11,76),(80,11,77),(81,11,78),(82,11,79),(83,11,80),(84,11,81),(85,11,82),(86,11,83),(87,11,84),(88,11,85),(89,11,86),(90,11,87),(91,10,88),(92,8,10),(93,12,12),(94,12,15),(95,12,14),(96,12,22),(97,12,16);
/*!40000 ALTER TABLE `linkcatalogproduct` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES ('2024-09-21 07:56:52',NULL,'2024-09-24 07:02:11',NULL,'1727093226_0.png',1,'Sản Phẩm 1 Test',5,'test desiption 1\r\ntest desiption 2\r\ntest desiption 3\r\ntest desiption 4\r\ntest desiption 1\r\ntest desiption 2\r\ntest desiption 3\r\ntest desiption 4\r\ntest desiption 1\r\ntest desiption 2\r\ntest desiption 3\r\ntest desiption 4',10.00,NULL,1),('2024-09-21 07:56:52',NULL,'2024-09-24 07:02:14',NULL,'1726937071_0.png',2,'Sản Phẩm 2',2,'đâsdasdasdasd',12.00,NULL,1),('2024-09-21 07:56:52',NULL,'2024-09-23 15:34:32',NULL,'1726984398_0.png',3,'Sản Phẩm 3',0,NULL,300000.00,NULL,1),('2024-09-21 07:56:52',NULL,'2024-09-24 07:02:18',NULL,'1726984439_0.png',4,'Sản Phẩm 4',0,NULL,400000.00,NULL,1),('2024-09-21 07:56:52',NULL,'2024-09-22 06:30:33',NULL,'1726984354_0.png',5,'Sản Phẩm 5',1,NULL,500000.00,NULL,1),('2024-09-22 07:37:17','26','2024-09-24 07:02:33',NULL,'1726990637_0.png',6,'Thêm bằng Màn Hình New Product',11,NULL,12.00,NULL,1),('2024-09-22 08:05:10','26','2024-09-24 07:02:36',NULL,'1726992310_0.png',7,'Thêm bằng Màn Hình New Product V2',2,'test test test test test test test test test test test test test test test test test test',12.00,NULL,1),('2024-09-22 16:55:41','26','2024-09-24 07:02:39',NULL,'1727024141_0.png',8,'uuuu',3,'jgjghj',4.00,NULL,1),('2024-09-24 07:14:21','25','2024-09-26 04:13:04','25','1727323984_0.png',9,'Almond bread',10,'- Milk bread is a soft, fluffy bread known for its light, tender crumb and subtly sweet flavor, making it perfect for both savory and sweet uses. Baked to a golden-brown color, its slightly glossy crust comes from an egg wash that adds a gentle sheen. Inside, the bread is exceptionally airy, making it a popular choice for sandwiches, toast, or simply enjoying on its own with a spread of butter. Milk bread is often baked in loaves and sliced to reveal its pillowy texture, which stays soft for days due to the milk and butter in the recipe. The mild sweetness of milk bread pairs well with jams, honey, or even savory toppings.\r\n Flour, yeast, milk, butter, sugar, salt, eggs (for egg wash).',5.00,NULL,NULL),('2024-09-24 07:23:12','25','2024-09-26 04:11:53','25','1727323913_0.png',10,'Banana bread',10,'- Banana bread is a moist, dense loaf packed with ripe bananas, providing a natural sweetness and rich flavor. It often includes ingredients like walnuts, chocolate chips, or spices such as cinnamon to enhance its flavor. The bread has a tender crumb and is perfect for breakfast, dessert, or a snack. The use of bananas ensures that the loaf stays moist for several days, making it a popular and long-lasting treat. Its comforting taste and aroma make banana bread a go-to option for a quick, delicious bake.\r\nFlour, baking soda, salt, mashed ripe bananas, sugar, eggs, melted butter.',5.00,NULL,NULL),('2024-09-24 07:31:02','25','2024-09-26 04:20:22','25','1727324422_0.png',11,'Brioche',10,'Brioche is a rich and buttery French bread that blends the texture of bread with the richness of a pastry. Known for its tender crumb and golden, flaky crust, brioche is often enriched with eggs, butter, and milk, giving it a slightly sweet and luxurious flavor. The dough rises into a light and airy loaf, and its distinctive sheen comes from a generous egg wash before baking. Brioche is incredibly versatile and can be used for both sweet and savory dishes, from French toast and bread pudding to gourmet sandwiches and burgers. Its soft, pillowy texture and rich taste make it a favorite in bakeries worldwide. Flour, eggs, butter, milk, sugar, yeast, salt.',10.00,NULL,NULL),('2024-09-24 07:33:36','25','2024-09-26 04:22:21','25','1727324541_0.png',12,'Butter sugar bread',10,'Butter sugar bread is a sweet, soft loaf with a delicate buttery flavor and a sprinkle of sugar for a satisfying crunch on top. The dough is enriched with butter, making the bread tender and rich, while the sugar topping adds a caramelized sweetness. The loaf is perfect for toasting and spreading with more butter or jam, offering a delightful balance between soft and crispy textures. This bread is a classic favorite for breakfast or a sweet snack. Flour, yeast, butter, sugar (for topping), salt, milk.',10.00,NULL,NULL),('2024-09-24 07:36:06','25','2024-09-26 04:12:40','25','1727323960_0.png',13,'Cheese bread',10,'Cheese bread is a savory loaf filled with rich, melted cheese that adds a creamy and slightly salty flavor to the tender crumb. The bread is soft and fluffy, with pockets of cheese throughout, creating a delightful contrast of textures. Often topped with shredded cheese for a golden, crispy crust, cheese bread is perfect as a side dish, snack, or base for sandwiches. Its savory richness makes it a popular choice for cheese enthusiasts. Flour, cheese (usually cheddar), yeast, milk, butter, sugar, salt.',5.00,NULL,NULL),('2024-09-24 07:38:42','25','2024-09-26 04:21:38','25','1727324498_0.png',14,'Chocolate bread',10,'Chocolate bread is a delicious blend of rich cocoa and tender, slightly sweet bread. With a deep chocolate flavor, the loaf offers a perfect balance between the lightness of bread and the indulgence of a dessert. The crumb is soft, with streaks of melted chocolate or cocoa powder incorporated throughout. Chocolate bread can be enjoyed on its own, with butter, or lightly toasted, making it a versatile choice for breakfast or an afternoon snack. It’s ideal for chocolate lovers seeking a sweet treat without the heaviness of cake. Flour, cocoa powder, yeast, milk, butter, sugar, salt, chocolate chips (optional).',10.00,NULL,NULL),('2024-09-24 07:40:31','25','2024-09-26 04:22:00','25','1727324520_0.png',15,'Chocolate chip bread',10,'Chocolate chip bread is a soft and slightly sweet loaf dotted with chunks of semi-sweet chocolate. The bread has a light, airy texture, and the chocolate chips provide bursts of rich, creamy flavor in every bite. Perfect for breakfast, dessert, or a snack, this bread offers a more indulgent alternative to regular sweet bread. Whether toasted or served fresh, chocolate chip bread is a delicious treat for chocolate lovers. Flour, chocolate chips, yeast, milk, butter, sugar, salt.',5.00,NULL,NULL),('2024-09-24 07:44:15','25','2024-09-26 04:19:36','25','1727324376_0.png',16,'Coconut milk bread',10,'Coconut milk bread is a soft, tender loaf made with coconut milk, giving it a subtle coconut flavor and a rich, moist texture. The coconut milk adds a creamy sweetness that pairs well with both savory and sweet toppings. Often topped with shredded coconut for added texture, this bread is perfect for enjoying on its own, as toast, or with tropical spreads like mango or pineapple jam. Coconut milk bread is a wonderful option for those who enjoy a hint of tropical flavor in their baked goods. Flour, coconut milk, yeast, sugar, butter, salt.',5.00,NULL,NULL),('2024-09-24 07:46:47','25','2024-09-26 04:19:10','25','1727324350_0.png',17,'Coconut rolls',10,'Coconut rolls are soft, sweet rolls filled with a rich coconut filling, often made from grated coconut, sugar, and butter. The dough is soft and fluffy, and the coconut filling provides a sweet, nutty contrast that makes each bite flavorful and satisfying. These rolls are typically brushed with a light glaze or sprinkled with coconut flakes for added texture and sweetness. Coconut rolls are perfect as a snack or dessert, bringing a tropical twist to traditional sweet bread. Flour, yeast, milk, sugar, shredded coconut, butter, salt.',10.00,NULL,NULL),('2024-09-24 07:49:05','25','2024-09-26 04:18:09','25','1727324289_0.png',18,'Cream butter bread',10,'Cream butter bread is a rich, soft loaf made with cream and butter, giving it an exceptionally tender and moist texture. The bread has a mild sweetness and a buttery flavor that melts in your mouth. Its smooth, creamy crumb makes it ideal for toasting or serving with jam or honey. Cream butter bread is often enjoyed as a breakfast treat or snack, offering a luxurious take on traditional sweet bread. Flour, yeast, butter, cream, sugar, milk, salt.',5.00,NULL,NULL),('2024-09-24 07:50:37','25','2024-09-26 04:17:28','25','1727324248_0.png',19,'Dried Fruit Bread',10,'Dried fruit bread is a sweet, dense loaf filled with a mix of dried fruits like raisins, apricots, and figs. The dried fruits add a chewy texture and natural sweetness to the soft crumb of the bread, making each bite flavorful and satisfying. This bread is perfect for enjoying on its own, with butter, or paired with cheese. The combination of fruits and bread makes it a great option for a wholesome snack or a hearty breakfast. Flour, dried fruits (raisins, apricots, figs), yeast, sugar, butter, milk, salt.',10.00,NULL,NULL),('2024-09-24 07:52:39','25','2024-09-26 04:16:52','25','1727324212_0.png',20,'Garlic butter bread',10,'Garlic butter bread is a savory delight that combines the fluffy texture of freshly baked bread with the rich, aromatic flavor of garlic-infused butter. The exterior is golden and crispy, often brushed with a garlic butter mixture before baking, giving it a glossy, appetizing finish. Inside, the bread remains soft and tender, with a subtle, mouthwatering garlic flavor throughout. This bread pairs wonderfully with soups, salads, or as a base for bruschetta, making it a versatile choice for meals and snacks. Flour, yeast, garlic butter, sugar, salt, butter, milk.',10.00,NULL,NULL),('2024-09-24 07:55:26','25','2024-09-26 04:21:16','25','1727324476_0.png',21,'Garlic Butter Toast',10,'Garlic butter toast is a savory, golden-brown bread brushed with a mixture of garlic and butter before toasting. The result is a crispy, flavorful bread with a soft center and a rich, aromatic taste. It’s the perfect side dish for soups, salads, or pasta dishes, or can be enjoyed on its own as a snack. The balance between the crispy exterior and the soft, buttery interior makes garlic butter toast a favorite in many households.  Flour, garlic butter, sugar, salt, butter, milk.',5.00,NULL,NULL),('2024-09-24 07:56:54','25','2024-09-26 04:20:46','25','1727324446_0.png',22,'Honey butter toast',10,'Honey butter toast is a sweet, golden-brown bread with a rich buttery flavor, enhanced by the natural sweetness of honey. The bread is often sliced thick and toasted to perfection, with the butter and honey soaking into the warm, crispy edges. It’s a simple yet indulgent treat, ideal for breakfast or an afternoon snack. The combination of creamy butter and fragrant honey creates a perfect balance of sweet and savory flavors.\r\nFlour, yeast, honey, butter, sugar, salt.',10.00,NULL,NULL),('2024-09-24 07:58:29','25','2024-09-26 04:14:32','25','1727324072_0.png',23,'Matcha bread',10,'Matcha bread is a unique and flavorful loaf made with high-quality green tea powder, giving it a vibrant green color and a slightly earthy, bittersweet taste. The matcha provides a subtle tea flavor that pairs well with the soft, tender crumb of the bread. Often enjoyed with sweet spreads like jam or honey, matcha bread is a delightful fusion of traditional bread with the distinct taste of Japanese matcha. Its visually appealing color and flavor make it a standout choice for tea lovers. Flour, matcha powder, yeast, milk, sugar, butter, salt.',5.00,NULL,NULL),('2024-09-24 07:59:54','25','2024-09-26 04:15:26','25','1727324126_0.png',24,'Milk bread',10,'Milk bread is a soft, fluffy bread known for its light, tender crumb and subtly sweet flavor, making it perfect for both savory and sweet uses. Baked to a golden-brown color, its slightly glossy crust comes from an egg wash that adds a gentle sheen. Inside, the bread is exceptionally airy, making it a popular choice for sandwiches, toast, or simply enjoying on its own with a spread of butter. Milk bread is often baked in loaves and sliced to reveal its pillowy texture, which stays soft for days due to the milk and butter in the recipe. The mild sweetness of milk bread pairs well with jams, honey, or even savory toppings. Flour, yeast, milk, butter, sugar, salt, eggs (for egg wash).',10.00,NULL,NULL),('2024-09-24 08:01:40','25','2024-09-26 04:16:26','25','1727324186_0.png',25,'Orange bread',10,'Orange bread is a fragrant and sweet loaf bursting with the fresh flavor of oranges. Made with orange zest and juice, this bread has a light, airy crumb with a citrusy aroma and taste. The slight tartness of the oranges is balanced by the sweetness of the dough, creating a refreshing and flavorful bread. It’s perfect for breakfast, served with tea, or as a dessert option. The loaf is often finished with an orange glaze or a dusting of powdered sugar to enhance its sweetness. Flour, baking powder, fresh orange juice, sugar, butter, eggs, grated orange zest.',10.00,NULL,NULL),('2024-09-24 08:03:08','25','2024-09-26 04:15:59','25','1727324159_0.png',26,'Peanut butter bread',10,'Peanut butter bread is a soft and hearty loaf infused with the rich, nutty flavor of peanut butter. The bread has a dense, tender crumb and a subtly sweet taste that pairs well with both sweet and savory spreads. Often enjoyed with jam, honey, or additional peanut butter, it makes a perfect choice for breakfast or as a snack. Its high protein content, thanks to the peanut butter, also makes it a more filling option compared to traditional sweet breads. Flour, baking powder, sugar, salt, peanut butter, milk.',5.00,NULL,NULL),('2024-09-24 08:04:36','25','2024-09-26 04:14:08','25','1727324048_0.png',27,'Raisin bread',10,'Raisin bread is a soft, mildly sweet loaf that features plump, juicy raisins baked into the dough, offering a delightful contrast between the tender crumb and the fruity burst of flavor. The bread is typically lightly spiced with cinnamon or nutmeg, enhancing its warm and comforting taste. Raisin bread can be enjoyed on its own, toasted with butter, or used as a base for a variety of recipes such as French toast or bread pudding. Its slightly chewy texture and natural sweetness make it a popular choice for breakfast or as a snack, pairing wonderfully with tea or coffee. Flour, yeast, sugar, milk, raisins, butter, salt, cinnamon (optional).',10.00,NULL,NULL),('2024-09-24 08:05:59','25','2024-09-26 04:15:05','25','1727324105_0.png',28,'Yogurt bread',10,'Yogurt bread is a soft, tangy loaf made with the addition of yogurt, which lends a subtle tartness and moist texture to the bread. The yogurt helps create a tender crumb and a slightly chewy crust, making this bread versatile for both sweet and savory pairings. Whether enjoyed plain or with toppings like honey, fruit, or cheese, yogurt bread offers a light and refreshing alternative to more traditional loaves, with the yogurt enhancing its nutritional value by adding protein and probiotics. Flour, yeast, yogurt, milk, sugar, butter, salt.',5.00,NULL,NULL),('2024-09-24 08:07:57','25','2024-09-24 08:07:57',NULL,'1727165277_0.png',29,'Apple pie',10,'Apple pie is a classic baked dessert made with a buttery, flaky pie crust and a filling of sweetened, spiced apples. Often served warm with a scoop of vanilla ice cream, apple pie is a comforting and timeless treat. Pie crust (flour, butter, salt, water), apples, sugar, cinnamon, nutmeg, lemon juice, \r\nbutter.',5.00,NULL,NULL),('2024-09-24 08:10:19','25','2024-09-24 11:00:38','25','1727165419_0.png',30,'Apple tart',10,'Apple tarts are made with thinly sliced apples arranged over a buttery pastry base. The apples are typically sweetened and spiced with cinnamon, and the tart is baked until the apples are tender and the pastry is crisp. Pastry dough (flour, butter, sugar, eggs), apples, sugar, cinnamon, lemon juice, \r\napricot glaze.',10.00,NULL,NULL),('2024-09-24 08:12:55','25','2024-09-24 11:02:36','25','1727165575_0.png',31,'Blueberry tart',10,'Blueberry tarts feature a crisp pastry shell filled with sweetened blueberries, often baked until the berries are soft and juicy. The tart is sometimes topped with a dusting of powdered sugar or a dollop of whipped cream. Pastry dough (flour, butter, sugar, eggs), fresh blueberries, sugar, cornstarch, \r\nlemon zest.',10.00,NULL,NULL),('2024-09-24 08:14:53','25','2024-09-24 08:14:53',NULL,'1727165693_0.png',32,'Butter cookies',10,'Butter cookies are classic, crispy, and buttery delights, often made with just a few simple ingredients: butter, sugar, and flour. They are typically baked until golden brown and have a crumbly, melt-in-your-mouth texture, making them a favorite for tea time or as a light snack. Flour, butter, sugar, eggs, vanilla extract, baking powder, salt.',5.00,NULL,NULL),('2024-09-24 08:16:45','25','2024-09-24 10:56:15','25','1727165805_0.png',33,'Chocolate chip cookies',10,'Chocolate chip cookies are soft, chewy cookies packed with semi-sweet chocolate chips. The dough, made from a combination of butter, sugar, eggs, and flour, is baked until the edges are golden and the center remains slightly gooey, giving the perfect balance between crisp and soft textures. Flour, butter, brown sugar, white sugar, eggs, vanilla extract, baking soda, chocolate chips, salt.',5.00,NULL,NULL),('2024-09-24 08:18:14','25','2024-09-24 10:59:29','25','1727165894_0.png',34,'Chocolate cupcake',10,'Chocolate cupcakes are rich, moist, and packed with chocolate flavor. Typically frosted with a creamy chocolate buttercream, these cupcakes are a decadent and satisfying dessert for any chocolate lover. Flour, sugar, cocoa powder, butter, eggs, milk, baking powder, vanilla extract, salt.',10.00,NULL,NULL),('2024-09-24 08:19:26','25','2024-09-24 10:57:40','25','1727165966_0.png',35,'Chocolate pie',10,'Chocolate pie is a rich, indulgent dessert made with a smooth chocolate filling encased in a flaky pie crust. Often topped with whipped cream or meringue, it provides a luscious, decadent treat for chocolate lovers. Pie crust (flour, butter, sugar, salt, water), chocolate filling (chocolate, cream, eggs, \r\nbutter, sugar).',10.00,NULL,NULL),('2024-09-24 08:20:57','25','2024-09-24 08:23:58','25','1727166057_0.png',36,'Coconut cookies',10,'Coconut cookies are chewy and slightly crispy, made with shredded coconut for a rich, tropical flavor. These cookies often have a golden-brown exterior and a soft interior, making them a deliciously satisfying treat. Flour, shredded coconut, butter, sugar, eggs, vanilla extract, baking powder, salt.',5.00,NULL,NULL),('2024-09-24 08:25:52','25','2024-09-24 10:59:00','25','1727166352_0.png',37,'Coconut pie',10,'Coconut pie is a creamy, custard-based pie with shredded coconut mixed into the filling, giving it a chewy texture and rich flavor. The pie crust is typically flaky and golden, providing a perfect contrast to the creamy filling. Pie crust (flour, butter, sugar, water), coconut filling (shredded coconut, eggs, sugar,\r\n butter, vanilla extract, milk).',5.00,NULL,NULL),('2024-09-24 08:27:18','25','2024-09-26 08:37:44','25','1727339864_0.png',38,'Egg tart',10,'Egg tarts are small, flaky pastries filled with a creamy, sweet custard made from eggs, sugar, and milk. Baked until the custard is just set and the crust is golden, these tarts are popular in many parts of the world, especially in Chinese and Portuguese cuisine. Pastry dough (flour, butter), custard (milk, sugar, eggs, vanilla extract).',10.00,NULL,NULL),('2024-09-24 08:31:16','25','2024-09-24 11:01:50','25','1727166676_0.png',39,'Ginger cookies',10,'Ginger cookies are spiced, chewy cookies made with ginger, cinnamon, and cloves. Their warm, aromatic flavor is perfect for the colder months and pairs wonderfully with a cup of tea or coffee. Flour, ground ginger, cinnamon, butter, sugar, molasses, eggs, baking soda, salt.',5.00,NULL,NULL),('2024-09-24 08:32:49','25','2024-09-24 11:01:01','25','1727166769_0.png',40,'Lemon tart',10,'Lemon tarts feature a crisp pastry shell filled with a tangy, creamy lemon curd. The combination of sweet and tart flavors makes this dessert a refreshing and light option, often finished with powdered sugar or whipped cream. Pastry dough (flour, butter, sugar, eggs), lemon curd (lemon juice, eggs, sugar, butter, \r\nlemon zest).',10.00,NULL,NULL),('2024-09-24 08:34:37','25','2024-09-24 10:58:09','25','1727166877_0.png',41,'Mango tart',10,'Mango tarts are made with a buttery pastry shell and filled with a sweet, creamy mango filling. The vibrant orange color and refreshing tropical flavor make this tart a delightful dessert option, especially in warmer months. Pastry dough (flour, butter, sugar, eggs), fresh mango, pastry cream(milk, sugar, eggs, vanilla, cornstarch).',5.00,NULL,NULL),('2024-09-24 08:35:51','25','2024-09-24 11:01:26','25','1727166951_0.png',42,'Orange cupcake',10,'Orange cupcakes are light and fluffy with a burst of citrus flavor from fresh orange juice and zest. Often frosted with a cream cheese or buttercream frosting, these cupcakes are refreshing and perfect for brightening up any occasion. Flour, sugar, butter, eggs, orange juice, orange zest, baking powder, milk, salt.',5.00,NULL,NULL),('2024-09-24 08:37:29','25','2024-09-24 10:57:17','25','1727167049_0.png',43,'Passion fruit pie',10,'Passion fruit pie is a tropical twist on the traditional pie, featuring a creamy, sweet, and tangy filling made from passion fruit juice. The crust is typically buttery and crisp, complementing the zesty flavor of the filling. Pie crust (flour, butter, sugar, water), passion fruit puree, eggs, sugar, cream, butter.',5.00,NULL,NULL),('2024-09-24 08:38:59','25','2024-09-24 08:38:59',NULL,'1727167139_0.png',44,'Peach pie',10,'Peach pie is made with ripe, juicy peaches sweetened and spiced, all encased in a flaky pie crust. The pie is often topped with a lattice or crumble topping and baked until the filling is bubbly and the crust is golden. Pie crust (flour, butter, sugar, salt, water), peaches, sugar, cinnamon, cornstarch, \r\nlemon juice.',10.00,NULL,NULL),('2024-09-24 08:40:13','25','2024-09-24 08:40:13',NULL,'1727167213_0.png',45,'Plum tart',10,'Plum tarts are made with a buttery pastry crust and topped with juicy, sweet-tart plums. The fruit is often arranged in a decorative pattern and baked until tender, making for a visually stunning and delicious dessert. Pastry dough (flour, butter, sugar, eggs), fresh plums, sugar, cinnamon, vanilla extract.',10.00,NULL,NULL),('2024-09-24 08:41:57','25','2024-09-24 08:41:57',NULL,'1727167317_0.png',46,'Strawberry pie',10,'Strawberry pie features a fresh strawberry filling encased in a flaky pie crust. The filling is often made with whole strawberries coated in a sweet glaze, making it a bright and fruity dessert perfect for summertime. Pie crust (flour, butter, sugar, salt, water), strawberries, sugar, cornstarch, lemon juice.',10.00,NULL,NULL),('2024-09-24 08:43:26','25','2024-09-24 10:56:53','25','1727167406_0.png',47,'Strawberry tart',10,'A strawberry tart is a sweet pastry filled with custard or cream and topped with fresh strawberries. The pastry base is usually crisp and buttery, while the sweet strawberries add a refreshing contrast. This dessert is often glazed for extra shine and sweetness. Pastry dough (flour, butter, sugar, eggs), fresh strawberries, pastry cream(milk, sugar, eggs, vanilla, cornstarch), glaze (apricot jam).',5.00,NULL,NULL),('2024-09-24 08:46:16','25','2024-09-24 11:02:18','25','1727167576_0.png',48,'Vanilla cupcake',10,'Vanilla cupcakes are light and fluffy single-serving cakes flavored with vanilla extract. They are often topped with a swirl of buttercream frosting and can be decorated with sprinkles or other toppings for added sweetness and fun. Flour, dried fruits (raisins, apricots, figs), yeast, sugar, butter, milk, salt.',5.00,NULL,NULL),('2024-09-24 08:51:43','25','2024-09-24 08:56:44','25','1727167903_0.png',49,'Avocado mousse cake',10,'Avocado mousse cake is a creamy, smooth dessert made from ripe avocados blended into a mousse. The mousse is layered over a sponge or graham cracker base, offering a unique combination of sweet and savory flavors with a velvety texture. Flour, sugar, butter, eggs, avocado, avocado mousse (avocado, cream, sugar), \r\nbaking powder, vanilla extract.',10.00,NULL,NULL),('2024-09-24 08:54:18','25','2024-09-24 08:56:17','25','1727168058_0.png',50,'Birthday cake',10,'A birthday cake is a celebratory dessert often decorated with frosting, candles, and festive designs. The flavor can range from classic vanilla or chocolate to more adventurous varieties like red velvet or funfetti. Birthday cakes are designed to bring joy and can be customized with personal touches for any celebration. Flour, sugar, butter, eggs, vanilla extract, milk, baking powder, salt, frosting (butter, powdered sugar, vanilla extract, milk).',10.00,NULL,NULL),('2024-09-24 08:55:59','25','2024-09-24 08:55:59',NULL,'1727168159_0.png',51,'Blueberry cake',10,'Blueberry cake is a moist, tender cake packed with fresh or frozen blueberries. The berries burst during baking, adding a juicy sweetness and tang to the cake. Often served with a light glaze or cream cheese frosting, it’s a perfect dessert for brunch or summer gatherings. Flour, sugar, butter, eggs, fresh or frozen blueberries, baking powder, vanilla extract, \r\nmilk.',10.00,NULL,NULL),('2024-09-24 08:58:11','25','2024-09-24 11:36:46','25','1727168291_0.png',52,'Caramel cake',10,'Caramel cake features layers of moist cake with a rich caramel filling or frosting. The caramel is often made from scratch, providing a buttery, sweet, and slightly salty flavor that complements the soft cake. It’s an indulgent dessert for those who love deep, caramelized flavors.',10.00,NULL,NULL),('2024-09-24 08:59:39','25','2024-09-24 09:00:29','25','1727168379_0.png',53,'Cheesecake',10,'Cheesecake is a creamy, smooth dessert made primarily from cream cheese, sugar, and eggs over a crumbly crust, typically made from graham crackers or biscuits. It comes in many varieties, including baked or no-bake versions, and is often flavored with fruits, chocolate, or caramel. Cream cheese, sugar, eggs, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',5.00,NULL,NULL),('2024-09-24 09:01:52','25','2024-09-24 11:38:31','25','1727168512_0.png',54,'Chestnut mousse cake',10,'Chestnut mousse cake features a rich, nutty mousse made from sweetened chestnuts layered over a soft cake base. The chestnut flavor is subtle and earthy, providing a delightful contrast to the sweet, creamy texture of the mousse. Flour, sugar, butter, eggs, chestnut puree, chestnut mousse (chestnut, cream, sugar),\r\nbaking powder, vanilla extract.',10.00,NULL,NULL),('2024-09-24 09:03:32','25','2024-09-24 11:36:30','25','1727168612_0.png',55,'Chocolate mousse cake',10,'Chocolate mousse cake is a rich and creamy dessert that layers smooth chocolate mousse over a moist chocolate sponge cake. The mousse is light and airy, providing a delightful contrast to the dense cake layers, often topped with whipped cream or chocolate ganache. Flour, sugar, cocoa powder, butter, eggs, baking powder, chocolate mousse (chocolate, heavy cream, sugar).',10.00,NULL,NULL),('2024-09-24 09:04:45','25','2024-09-24 09:05:17','25','1727168685_0.png',56,'Cocoa cake',10,'Cocoa cake is a simple yet rich dessert made from cocoa powder, offering a deep chocolate flavor without the heaviness of traditional chocolate cakes. Its light, airy texture makes it perfect for pairing with whipped cream, berries, or a dusting of powdered sugar. Flour, cocoa powder, sugar, butter, eggs, baking powder, vanilla extract, milk.',5.00,NULL,NULL),('2024-09-24 09:06:33','25','2024-09-24 09:06:33',NULL,'1727168793_0.png',57,'Green tea cake',10,'Green tea cake is similar to matcha cake but may use different green tea varieties for a lighter, subtler flavor. Often paired with red bean paste or sweet cream, it’s a refreshing dessert choice that balances the grassy notes of green tea with sweet elements. Flour, sugar, green tea powder, butter, eggs, baking powder, milk.',5.00,NULL,NULL),('2024-09-24 09:07:56','25','2024-09-24 11:41:34','25','1727168876_0.png',58,'Lemon mousse cake',10,'Lemon mousse cake is a bright and refreshing dessert made by layering tangy lemon mousse over a soft sponge cake. The mousse is light and creamy, providing a perfect balance to the zesty, citrusy flavor of the lemon. Flour, sugar, butter, eggs, lemon juice, lemon zest, lemon mousse (lemon, cream, sugar).',10.00,NULL,NULL),('2024-09-24 09:09:09','25','2024-09-24 09:09:09',NULL,'1727168949_0.png',59,'Mango cake',10,'Mango cake is a tropical dessert made with fresh mango puree or pieces mixed into the batter, resulting in a moist and fruity cake. It’s often paired with mango-flavored frosting or whipped cream, making it a refreshing option for hot weather or tropical-themed events. Flour, sugar, butter, eggs, fresh mangoes, mango puree, baking powder, milk.',10.00,NULL,NULL),('2024-09-24 09:10:48','25','2024-09-24 09:10:48',NULL,'1727169048_0.png',60,'Matcha cake',10,'Matcha cake is a light, spongy dessert infused with the flavor of green tea powder (matcha). Its earthy, slightly bitter taste contrasts beautifully with the sweetness of the cake, making it a unique choice for tea lovers. Often paired with white chocolate or whipped cream for balance. Flour, sugar, matcha powder, butter, eggs, baking powder, vanilla extract, milk.',5.00,NULL,NULL),('2024-09-24 09:12:00','25','2024-09-24 11:40:50','25','1727169120_0.png',61,'Matcha mousse cake',10,'Matcha mousse cake is a luxurious dessert that layers a light green tea sponge with creamy matcha mousse. The smooth, velvety texture of the mousse complements the delicate cake, offering a balance between the earthy matcha flavor and the cake’s sweetness. Flour, matcha powder, sugar, eggs, butter, milk, matcha mousse(matcha, cream, sugar).',5.00,NULL,NULL),('2024-09-24 09:13:12','25','2024-09-24 11:37:47','25','1727169192_0.png',62,'Oreo cake',10,'Oreo cake incorporates crushed Oreo cookies into both the cake batter and the frosting, creating a rich, chocolatey dessert with a crunchy texture. This cake is a favorite among cookie lovers and often includes layers of cream cheese or whipped cream for added richness. Flour, sugar, butter, eggs, Oreo cookies, baking powder, milk, vanilla extract, cream cheese frosting.',10.00,NULL,NULL),('2024-09-24 09:14:26','25','2024-09-24 11:42:06','25','1727169266_0.png',63,'Red bean cake',10,'Red bean cake is a traditional Asian dessert made from a light, fluffy sponge cake and filled with sweetened red bean paste. The mild sweetness of the red beans pairs well with the cake’s soft texture, making it a unique and satisfying treat for those who enjoy Asian-inspired flavors. Flour, sugar, butter, eggs, red bean paste, baking powder, milk.',5.00,NULL,NULL),('2024-09-24 09:18:01','25','2024-09-24 09:18:01',NULL,'1727169481_0.png',64,'Strawberry cake',10,'Strawberry cake is a light and fruity dessert made with fresh or pureed strawberries. The cake has a delicate crumb and is often paired with strawberry-flavored frosting or whipped cream. This cake is a favorite for spring and summer celebrations due to its bright flavor and pink hue. Flour, sugar, butter, eggs, fresh strawberries, strawberry puree, vanilla extract, baking powder, salt, milk.',5.00,NULL,NULL),('2024-09-24 09:19:11','25','2024-09-24 11:37:17','25','1727169551_0.png',65,'Tiramisu cake',10,'Tiramisu cake is inspired by the traditional Italian dessert, featuring layers of coffee-soaked sponge cake, mascarpone cream, and a dusting of cocoa powder. It’s a decadent, coffee-flavored dessert that offers a creamy, rich texture with a slight kick of espresso. Flour, sugar, butter, eggs, mascarpone cheese, coffee, cocoa powder, ladyfinger biscuits, rum (optional).',5.00,NULL,NULL),('2024-09-24 09:20:31','25','2024-09-24 11:46:54','25','1727169631_0.png',66,'Tiramisu lemon cake',10,'Tiramisu lemon cake is a twist on the classic tiramisu, replacing coffee with zesty lemon. Layers of lemon-soaked sponge cake are combined with mascarpone cream, offering a fresh, tangy flavor that balances the creaminess of the mascarpone. Flour, sugar, butter, eggs, lemon juice, lemon zest, lemon mousse \r\n(lemon, cream, sugar).',10.00,NULL,NULL),('2024-09-24 09:21:58','25','2024-09-24 09:21:58',NULL,'1727169718_0.png',67,'Vanilla cake',10,'Vanilla cake is a classic dessert known for its light and fluffy texture with a mild vanilla flavor. It serves as a versatile base for various fillings and frostings, making it a staple for many occasions, including weddings, birthdays, and everyday celebrations. Flour, sugar, butter, eggs, vanilla extract, baking powder, salt, milk.',10.00,NULL,NULL),('2024-09-24 09:23:30','25','2024-09-26 08:37:08','25','1727339828_0.png',68,'Almond cheesecake',10,'Almond cheesecake features a nutty, slightly sweet flavor, often using almond extract in the filling and slivered almonds for garnish. The almond flavor adds a delightful richness to the creamy texture of the cheesecake, creating a sophisticated and flavorful dessert. Cream cheese, sugar, eggs, almond extract, vanilla extract, \r\ngraham cracker crust (graham crackers, butter, sugar), sliced almonds (for topping).',5.00,NULL,NULL),('2024-09-24 09:24:46','25','2024-09-26 08:37:25','25','1727339845_0.png',69,'Avocado cheesecake',10,'Avocado cheesecake is a creamy, smooth dessert made with ripe avocados blended into the cream cheese filling. The avocado provides a subtle, buttery flavor and a beautiful green color, making this cheesecake both nutritious and visually appealing. Cream cheese, sugar, eggs, ripe avocado, lime juice, vanilla extract, \r\ngraham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:26:15','25','2024-09-24 11:52:07','25','1727169975_0.png',70,'Baked cheesecake',10,'Baked cheesecake is the traditional version of this dessert, where the cheesecake is baked in an oven to achieve a firm yet creamy texture. The crust is usually a buttery graham cracker or biscuit base, and the filling sets into a perfectly smooth, dense consistency. Cream cheese, sugar, eggs, vanilla extract, graham cracker crust (graham crackers, butter, sugar), sour cream topping (optional).',10.00,NULL,NULL),('2024-09-24 09:28:10','25','2024-09-24 09:28:10',NULL,'1727170090_0.png',71,'Blueberry cheesecake',10,'Blueberry cheesecake features a velvety cream cheese filling with a generous topping of sweet, juicy blueberries. The fruity topping provides a burst of flavor that complements the rich, creamy texture of the cheesecake, making it a refreshing and colorful dessert. Cream cheese, sugar, eggs, vanilla extract, fresh or frozen blueberries, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:29:46','25','2024-09-24 11:51:20','25','1727170186_0.png',72,'Caramel cheesecake',10,'Caramel cheesecake is a rich, indulgent dessert that features a smooth cream cheese filling swirled or topped with sweet, buttery caramel. The combination of creamy and caramelized flavors creates a luxurious dessert perfect for special occasions. Cream cheese, sugar, eggs, caramel sauce, vanilla extract, graham cracker crust \r\n(graham crackers, butter, sugar).',5.00,NULL,NULL),('2024-09-24 09:30:57','25','2024-09-24 11:50:55','25','1727170257_0.png',73,'Chocolate cheesecake',10,'Chocolate cheesecake is a decadent dessert that combines the richness of chocolate with the smoothness of cream cheese. The filling is infused with either melted chocolate or cocoa powder, and the result is a dense, indulgent treat that chocolate enthusiasts will love. Cream cheese, sugar, eggs, cocoa powder, chocolate chips, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:34:25','25','2024-09-24 09:34:25',NULL,'1727170465_0.png',74,'Classic cheesecake',10,'Classic cheesecake is a rich and creamy dessert made with a smooth cream cheese filling atop a buttery graham cracker crust. Baked to perfection, it has a silky texture with a slightly tangy flavor that pairs well with a variety of toppings, such as fresh fruit, chocolate, or caramel. Cream cheese, sugar, eggs, vanilla extract, graham cracker crust(graham crackers, butter, sugar).',5.00,NULL,NULL),('2024-09-24 09:36:38','25','2024-09-24 09:57:02','25','1727170598_0.png',75,'Coconut cheesecake',10,'Coconut cheesecake is a tropical-inspired dessert that incorporates coconut milk or shredded coconut into the filling. The result is a creamy, mildly sweet cheesecake with a subtle coconut flavor, often topped with toasted coconut flakes for added texture and visual appeal. Cream cheese, sugar, eggs, coconut milk, shredded coconut, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:38:46','25','2024-09-24 11:53:27','25','1727170726_0.png',76,'Durian cheesecake',10,'Durian cheesecake is a unique and bold-flavored dessert that uses durian fruit in the filling. Known for its strong aroma and creamy texture, durian adds a distinctive taste to the cheesecake, making it a favorite among adventurous food lovers. Cream cheese, sugar, eggs, durian puree, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:40:43','25','2024-09-24 11:49:12','25','1727170843_0.png',77,'Green tea cheesecake',10,'Green tea cheesecake is infused with delicate green tea leaves or powder, providing a subtle and refreshing flavor that pairs well with the creamy texture of the cheesecake. The green color of the filling also gives this dessert a unique visual appeal. Cream cheese, sugar, eggs, green tea powder (matcha), vanilla extract, \r\ngraham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:42:00','25','2024-09-24 11:48:45','25','1727170920_0.png',78,'Lemon cheesecake',10,'Lemon cheesecake is a zesty dessert that combines the tangy flavor of fresh lemons with the smooth, creamy texture of cheesecake. The citrus notes add a refreshing brightness, making this cake a perfect choice for those who prefer a less sweet, more tart dessert. Cream cheese, sugar, eggs, lemon juice, lemon zest, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:43:23','25','2024-09-24 11:50:29','25','1727171003_0.png',79,'Mango cheesecake',10,'Mango cheesecake blends the tropical sweetness of ripe mangoes with the rich creaminess of traditional cheesecake. The mango puree or fresh mango slices add a refreshing fruitiness to the dessert, making it a popular choice during warmer months. Cream cheese, sugar, eggs, mango puree, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:44:56','25','2024-09-24 09:44:56',NULL,'1727171096_0.png',80,'Mascarpone cheesecake',10,'Mascarpone cheesecake replaces traditional cream cheese with Italian mascarpone cheese, resulting in a lighter, creamier texture with a milder flavor. This cheesecake has a silky smooth finish and is often paired with fruit or coffee-based toppings for a sophisticated touch. Mascarpone cheese, cream cheese, sugar, eggs, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',5.00,NULL,NULL),('2024-09-24 09:46:09','25','2024-09-24 11:50:08','25','1727171169_0.png',81,'Matcha cheesecake',10,'Matcha cheesecake incorporates the earthy, slightly bitter flavor of Japanese green tea powder (matcha) into the cream cheese filling. This unique fusion creates a beautifully vibrant dessert with a balance of sweet and savory flavors that is perfect for tea lovers. Cream cheese, sugar, eggs, matcha powder, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',5.00,NULL,NULL),('2024-09-24 09:47:25','25','2024-09-24 09:47:25',NULL,'1727171245_0.png',82,'Orange cheesecake',10,'Orange cheesecake is a bright and zesty dessert that uses fresh orange zest and juice to infuse the cream cheese filling with citrusy notes. The tangy sweetness of the oranges complements the creamy texture of the cheesecake, offering a refreshing twist on the classic. Cream cheese, sugar, eggs, orange zest, orange juice, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 09:48:44','25','2024-09-24 11:51:44','25','1727171324_0.png',83,'Oreo cheesecake',10,'Oreo cheesecake is a deliciously decadent dessert made with crushed Oreo cookies in both the crust and the filling. The creamy cheesecake filling is studded with cookie pieces, and the dessert is often topped with whipped cream and more Oreo crumbles for added texture and flavor. Cream cheese, sugar, eggs, vanilla extract, crushed Oreo cookies (for crust and filling), whipped cream (optional for topping).',10.00,NULL,NULL),('2024-09-24 09:50:04','25','2024-09-24 11:49:33','25','1727171404_0.png',84,'Passion fruit cheesecake',10,'Passion fruit cheesecake offers a tangy twist on the classic dessert, with the tropical flavor of passion fruit adding a tart contrast to the sweet, creamy filling. The passion fruit topping provides both a vibrant appearance and an exotic taste that excites the palate. Cream cheese, sugar, eggs, passion fruit puree, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',5.00,NULL,NULL),('2024-09-24 09:51:03','25','2024-09-24 09:51:03',NULL,'1727171463_0.png',85,'Peach cheesecake',10,'Peach cheesecake combines the natural sweetness of peaches with the creamy richness of cheesecake. The fruit is either blended into the filling or used as a topping, creating a luscious dessert that’s perfect for summer gatherings. Cream cheese, sugar, eggs, peach puree, vanilla extract, graham cracker crust (graham crackers, butter, sugar), fresh peach slices (for topping).',5.00,NULL,NULL),('2024-09-24 09:52:01','25','2024-09-24 09:52:01',NULL,'1727171521_0.png',86,'Strawberry cheesecake',10,'Strawberry cheesecake combines the classic creaminess of cheesecake with a layer of fresh or glazed strawberries on top. The strawberries add a sweet, juicy element that balances the rich texture of the cheesecake, creating a light and fruity finish. Cream cheese, sugar, eggs, matcha powder, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',5.00,NULL,NULL),('2024-09-24 09:53:01','25','2024-09-24 11:49:57','25','1727171581_0.png',87,'Yogurt cheesecake',10,'Yogurt cheesecake offers a lighter alternative to traditional cheesecake, with yogurt replacing some of the cream cheese in the filling. The result is a tangy, creamy texture that is both refreshing and satisfying, often paired with fruit toppings for extra flavor. Greek yogurt, cream cheese, sugar, eggs, vanilla extract, graham cracker crust (graham crackers, butter, sugar).',10.00,NULL,NULL),('2024-09-24 11:46:25','25','2024-09-24 11:46:25',NULL,'1727178385_0.png',88,'Strawberry mousse cake',10,'Strawberry mousse cake is a light, airy dessert made by layering strawberry mousse over a sponge cake base. The mousse is made from fresh strawberries and whipped cream, creating a refreshing and fruity flavor that pairs perfectly with the soft cake. \r\nFlour, sugar, butter, eggs, fresh strawberries, strawberry mousse \r\n(strawberries, cream, sugar), baking powder, vanilla extract.',5.00,NULL,NULL);
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
) ENGINE=InnoDB AUTO_INCREMENT=374 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_image`
--

LOCK TABLES `product_image` WRITE;
/*!40000 ALTER TABLE `product_image` DISABLE KEYS */;
INSERT INTO `product_image` VALUES (365,9,'1727321447_1.png','2024-09-26 03:30:47',NULL,'2024-09-26 03:30:47',NULL),(366,9,'1727321447_2.png','2024-09-26 03:30:47',NULL,'2024-09-26 03:30:47',NULL),(367,9,'1727321447_3.png','2024-09-26 03:30:47',NULL,'2024-09-26 03:30:47',NULL),(368,13,'1727321765_1.png','2024-09-26 03:36:05',NULL,'2024-09-26 03:36:05',NULL),(369,13,'1727321765_2.png','2024-09-26 03:36:05',NULL,'2024-09-26 03:36:05',NULL),(370,13,'1727321765_3.png','2024-09-26 03:36:05',NULL,'2024-09-26 03:36:05',NULL),(371,10,'1727321825_1.png','2024-09-26 03:37:05',NULL,'2024-09-26 03:37:05',NULL),(372,10,'1727321825_2.png','2024-09-26 03:37:05',NULL,'2024-09-26 03:37:05',NULL),(373,10,'1727321825_3.png','2024-09-26 03:37:05',NULL,'2024-09-26 03:37:05',NULL);
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
INSERT INTO `role` VALUES ('2024-09-18 15:48:09',NULL,NULL,NULL,1,'User'),('2024-09-18 15:48:09',NULL,NULL,NULL,2,'Admin'),('2024-09-24 09:53:59',NULL,NULL,NULL,3,'Manager');
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
INSERT INTO `sessions` VALUES ('jXPFHZfR1Zetrmqww9Jnw6f6AQjCSN6MPudS5ALD',25,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36 Edg/129.0.0.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoicFI3V3lFVXN0VVpmQmk3RmVZcE1WVFRXbDNvMHhvOVQxWkZxNTE4dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvYmFrZXJ6L3B1YmxpYy9maWx0ZXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyNTt9',1727341731);
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
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('2024-09-18 15:21:33',NULL,'2024-09-23 16:32:08',NULL,24,'$2y$12$ZJhd6DL0xqX.RYFki0NO6.4LWpVU3iFWhU691C/l14MMch5xaIG7u','Lê Văn Canh','admin@gmail.com',2,'123456789','male','TPHCM',NULL,NULL,'1727091465.png',NULL),('2024-09-18 15:58:51',NULL,'2024-09-26 03:24:27',NULL,25,'$2y$12$ofGw8MYcs4.n/9e7xa0LWOWYLPAbpJxY2rmAPep5b37vcuZxJ47cy','Lê Văn A','user@gmail.com',3,'123456789',NULL,'TPHCM',NULL,NULL,'1727321067.png',NULL),('2024-09-18 17:00:14',NULL,'2024-09-23 12:15:55',NULL,26,'$2y$12$U7i36EZbVFCqHxw1wWU6fuQyGEqMcLVcI5QWeiPEUk7Y9.YFNBhGK','Nguyễn Văn Đạt','datnguyen0996@gmail.com',2,'0909677317','male','TPHCM',NULL,NULL,'1727093755.png',NULL),('2024-09-18 17:03:15',NULL,'2024-09-20 09:00:03',NULL,27,'$2y$12$RJyNZgutrU4Un6NV3Y6WTudqihaikD3U6HKRCyrLOoE3lNZp4U.5u','Ngô Trung Diễn','ngotrungdientdt@gmail.com',2,'0961563167',NULL,'TPHCM',NULL,NULL,'1726822803.png',NULL),('2024-09-18 17:13:11',NULL,'2024-09-24 05:11:48',NULL,28,'$2y$12$yb2P54On0N38vxzu2eFXheBC4XGYzfKrBPixys9m5p13pPBYTqZrq','Minh Hưng','mhung3895@gmail.com',1,'0829030724','0','TPHCM',NULL,NULL,'rt4Ld3cdfXPHoUikNCjoP0Dq9DTXCtEkaQ8OvfBZ.png',NULL),('2024-09-19 14:58:46',NULL,'2024-09-24 05:11:58',NULL,29,'$2y$12$hZrfS4B6qlEFecsY4iiihef0SlYnTmM.4M234u150KK7AXJG7qyVS','Ngô Trung Diễn','aa@gmail.com',1,'0961563167','0','TPHCM',NULL,NULL,'PQ0F7PSGmVjYDe4IXkM7pF0mpthaa6eI1D3Othuk.png',NULL),('2024-09-20 11:05:15',NULL,'2024-09-24 05:10:52',NULL,30,'$2y$12$xhr079rpAeeAku73L4bqwu9vnw802XDQcnJGTZV7xpqAcCf2eYTEq','Lê Văn Canh','user1@gmail.com',1,'0123456789','male','BAC LIEU1',NULL,NULL,'1727154652.png',NULL),('2024-09-20 13:33:49',NULL,'2024-09-24 02:55:55',NULL,31,'$2y$12$2Ofy3td55eBHkv8vfE2tjeaINrmTkaDyJJ5eO5p8J2l12TMVjKWEm','Lê Thị G','user2@gmail.com',1,'012345678','female','TPHCM',1,NULL,'1726839405.png',NULL),('2024-09-24 03:12:33',NULL,'2024-09-24 03:13:19',NULL,32,'$2y$12$NU9fUon4ORq7NNgRZ1/5UO1hl.IIYtLHPQPizOOXCbz8exfLfMmNm','Nguyen thi H','user3@gmail.com',1,'123456789','female','TPHCM',NULL,NULL,'1727147594.png',NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
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
  PRIMARY KEY (`ID`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `userreview_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  CONSTRAINT `userreview_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userreview`
--

LOCK TABLES `userreview` WRITE;
/*!40000 ALTER TABLE `userreview` DISABLE KEYS */;
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

-- Dump completed on 2024-09-26 16:11:29
