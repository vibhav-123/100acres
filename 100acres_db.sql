-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: 100acres
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) DEFAULT NULL,
  `user_type` enum('Owner','Broker','Builder') DEFAULT NULL,
  `sell_rent` enum('Sell','Rent') DEFAULT NULL,
  `prop_type` enum('Residential','Commercial') DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `bedrooms` varchar(10) DEFAULT NULL,
  `area` int(11) DEFAULT NULL,
  `price` bigint(20) DEFAULT NULL,
  `post_time` datetime DEFAULT NULL,
  `image` longblob,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`pid`),
  KEY `cityIndex` (`city`),
  KEY `bedIndex` (`bedrooms`),
  KEY `areaIndex` (`area`),
  KEY `priceIndex` (`price`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property`
--

LOCK TABLES `property` WRITE;
/*!40000 ALTER TABLE `property` DISABLE KEYS */;
INSERT INTO `property` VALUES (1,'sanyam1204@gmail.com','Owner','Sell','Residential','Noida','Raja','1 BHK',-2,1200000,'2015-07-05 21:01:01','http://www.100acres.com/Properties/i1.jpg','nbjk'),(2,'sanyam1204@gmail.com','Owner','Rent','Residential','Noida','D-67, Sector 50, Noida','4 BHK',-2,60000,'2015-07-05 21:17:13','http://www.100acres.com/Properties/i12.jpg','A 4BHK flat with all the amenities and balcony with a gym on the same lane'),(3,'sanyam1204@gmail.com','Owner','Sell','Commercial','Rohini','A-20, sector 9, dharamkunj apartements opp. Rohini West Metro Station, Rohini We','-2',4000,500000,'2015-07-05 21:23:17','http://www.100acres.com/Properties/i7.jpg','A perfect corner land for construction'),(4,'sanyam1204@gmail.com','Owner','Rent','Residential','Dwarka','B-40,Sector 20 ,vasantkunj, Dwarka','3 BHK',-2,60000,'2015-07-05 21:36:47','http://www.100acres.com/Properties/i10.jpg','A perfect flat on rent at reasonable prices for family'),(5,'sanyam1204@gmail.com','Owner','Rent','Commercial','Dwarka','freeland area opposite dharamkunj apartments','-2',10000,1000000,'2015-07-05 21:51:38','http://www.100acres.com/Properties/i7.jpg','an ideal place for a hotel');
/*!40000 ALTER TABLE `property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registration` (
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(40) NOT NULL DEFAULT '',
  `pass` varchar(10) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `security` varchar(20) DEFAULT NULL,
  `ans` varchar(30) DEFAULT NULL,
  `registration_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`registration_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration`
--

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT INTO `registration` VALUES ('sanyam','sanyam1204@gmail.com','sanyam1204','9855467799','Mothers_Name','sonia',1),('sam','sanyam.chopra@99acres.com','sanyam1204','8800470788','Mothers_Name','sonia',2);
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `session_details`
--

DROP TABLE IF EXISTS `session_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `session_details` (
  `email` varchar(40) NOT NULL DEFAULT '',
  `login_time` datetime DEFAULT NULL,
  `logout_time` datetime DEFAULT NULL,
  `session_id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`session_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `session_details`
--

LOCK TABLES `session_details` WRITE;
/*!40000 ALTER TABLE `session_details` DISABLE KEYS */;
INSERT INTO `session_details` VALUES ('sanyam1204@gmail.com','2015-07-05 21:50:19','2015-07-05 21:54:59',1),('sanyam.chopra@99acres.com','2015-07-05 21:55:24','2015-07-05 21:55:28',3);
/*!40000 ALTER TABLE `session_details` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-05 21:59:59
