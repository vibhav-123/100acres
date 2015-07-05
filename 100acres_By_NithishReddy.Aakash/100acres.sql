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
-- Table structure for table `UserTable`
--

DROP TABLE IF EXISTS `UserTable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `UserTable` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobileno` varchar(10) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserTable`
--

LOCK TABLES `UserTable` WRITE;
/*!40000 ALTER TABLE `UserTable` DISABLE KEYS */;
INSERT INTO `UserTable` VALUES (1,'n','n@gmail.com','7b8b965ad4bca0e41ab51de7b31363a1','8978787867','2015-07-02 06:40:46'),(2,'ankit bansal','ankit.b@sdhkhd.com','0b4e7a0e5fe84ad35fb5f95b9ceeac79','4444444444','2015-07-02 07:40:35'),(3,'asdasdas','dasdas@ASDSA.COM','96e79218965eb72c92a549dd5a330112','8985229980','2015-07-02 07:43:36'),(4,'nithish','nithish8985@gmail.com','4b43b0aee35624cd95b910189b3dc231','8978976785','2015-07-02 09:24:23'),(5,'false','false','d41d8cd98f00b204e9800998ecf8427e','false','2015-07-02 09:30:03'),(7,'n','ni@gmail.com','7b8b965ad4bca0e41ab51de7b31363a1','0979878978','2015-07-02 09:30:23'),(10,'nithish','nithish@gmail.com','7b8b965ad4bca0e41ab51de7b31363a1','7182637846','2015-07-02 18:25:07'),(11,'nithish','nithish8960@gmail.com','7b8b965ad4bca0e41ab51de7b31363a1','9879797897','2015-07-03 04:05:28');
/*!40000 ALTER TABLE `UserTable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_us` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `mobileno` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `intrested`
--

DROP TABLE IF EXISTS `intrested`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `intrested` (
  `iid` int(20) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobileno` varchar(10) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intrested`
--

LOCK TABLES `intrested` WRITE;
/*!40000 ALTER TABLE `intrested` DISABLE KEYS */;
INSERT INTO `intrested` VALUES (1,'Aakashcjhv','tanwar','taaksha','9898398','2015-07-03 10:43:19','haxvaskjhg'),(2,'Aakashcjhv','tanwar','taaksha','9898398','2015-07-03 10:44:26','haxvaskjhg'),(3,'aa','a','aakash@gmail.co','71qw872','2015-07-03 10:51:30','asjhdasjhd'),(4,'aa','a','aakash@gmail.co','71qw872','2015-07-03 10:54:56','asjhdasjhd'),(5,'nithish','reddy','nithish@gmail.com','8985229980','2015-07-03 10:57:35','i want better than this.'),(6,'nithish','reddy','nithish@gmail.com','8985229980','2015-07-03 10:57:54','i want better than this.'),(7,'sdfsdf','sakdhfskh','ahsdfkdsh@ashfk.com','9999999999','2015-07-03 11:15:53','jkjkafkasdlfv askdfsd flsd fsdf'),(8,'zldfjdslj','sfjksdjk','skafjdaskj','askfnhksd','2015-07-03 11:17:15','askfhnksdfhk'),(9,'nithish','reddy','nithish8985@gmail.com','8988472872','2015-07-04 07:29:12','jksdhsjdhaas  asjhgahj'),(10,'Praveen','Kumar','p','9879667878','2015-07-04 13:02:04','sfklsdfjsdjfkjsdfjs');
/*!40000 ALTER TABLE `intrested` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `property` (
  `pid` int(10) NOT NULL AUTO_INCREMENT,
  `property_type` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `expected_price` float DEFAULT NULL,
  `image_path_name` varchar(255) DEFAULT NULL,
  `pp_area` int(15) DEFAULT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property`
--

LOCK TABLES `property` WRITE;
/*!40000 ALTER TABLE `property` DISABLE KEYS */;
INSERT INTO `property` VALUES (1,'Residential Apartment','Delhi','sector 37 Greater Noida',3,30050000,'delhi.jpg',12000,'2015-07-04 09:10:50','place available around the plot, good facilities and nice location'),(2,'Residential Apartment','Delhi','sector 18 greater noida ',1,21200000,'delhi1.jpg',250000,'2015-07-04 09:12:27','all facilities available and good climate around the property.'),(3,'Farm House','Delhi','sector 49 noida ',2,10110000,'delhi2.jpg',12500,'2015-07-04 09:13:28','all facilities available and good climate around the property.'),(4,'Residential Apartment','Mumbai','Next to juhu beach, Maharashtra 402401',1,121005000,'mumbai.jpg',140000,'2015-07-04 09:20:16','nice and good property.');
/*!40000 ALTER TABLE `property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seller`
--

DROP TABLE IF EXISTS `seller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seller` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `Type_of_person` varchar(255) DEFAULT NULL,
  `Purpose` varchar(255) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seller`
--

LOCK TABLES `seller` WRITE;
/*!40000 ALTER TABLE `seller` DISABLE KEYS */;
INSERT INTO `seller` VALUES (1,1,'owner','sell',1),(2,1,'owner','sell',2),(3,1,'owner','sell',3),(4,1,'owner','sell',4);
/*!40000 ALTER TABLE `seller` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-05 11:54:22
