-- MySQL dump 10.17  Distrib 10.3.16-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: activity_logger
-- ------------------------------------------------------
-- Server version	10.3.16-MariaDB

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
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `url` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `start` varchar(50) NOT NULL,
  `end` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (0,'LAP2','meetings.php','event-warning','1606534680000','1606536480000'),(20,'Time Pass','http://www.example.com/','event-warning','1606415799450','1606416799450');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_id` int(11) DEFAULT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `edit_by` varchar(255) DEFAULT NULL,
  `prev_min` text DEFAULT NULL,
  `new_min` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (1,21,'umesh','karry26','kik','kik'),(2,21,'umesh','karry26','',''),(3,21,'umesh','karry26',' dsc',' dsc'),(4,21,'umesh','karry26',' ddsds',' ddsds'),(5,21,'umesh','karry26',' ddsds','1. We discussed a lot\r\n2. Great meeting');
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meetings`
--

DROP TABLE IF EXISTS `meetings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meetings` (
  `topic` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `minutes` text DEFAULT NULL,
  `users` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meetings`
--

LOCK TABLES `meetings` WRITE;
/*!40000 ALTER TABLE `meetings` DISABLE KEYS */;
INSERT INTO `meetings` VALUES ('Breakfast','2020-11-23','08:00:00','umesh',30,21,'1. We discussed a lot\r\n2. Great meeting',''),('DInner','2020-11-23','20:23:00','umesh',30,22,'df',''),('LAP','2020-11-12','18:14:00','karry26',30,26,'','karry11;karry26'),('LAP2','2020-11-28','04:38:00','karry26',30,34,'','karry26;kkk');
/*!40000 ALTER TABLE `meetings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('Kairav Bansal','kairavbansla@gmail.com','9988154700','kairav','','user.png',''),('Kairav Bansal','kairavbansal@gmail.com','dcc','3b11d4ed537ced20e41a9b8a067f5d85','sds','WIN_20200519_02_42_50_Pro.jpg','+919988154700'),('','','k11','ff5e2c3e7cff28f4d962d00130315149','','user.png',''),('Bansal','','karry11','04b9df9145451d85b9214d420a92cde4','','user.png',''),('Kairav Bansal','kairavbansal@gmail.com','karry26','04b9df9145451d85b9214d420a92cde4','student','user.png','+919988154700'),('bansal1','','kkk','04b9df9145451d85b9214d420a92cde4','','user.png',''),('Umesh','email@email.com','umesh','13ceb369053f26c592bb4ae838714c33','done','Image.jpg','9876543210');
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

-- Dump completed on 2020-11-27  1:09:55
