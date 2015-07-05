-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: hunacres
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
  `purpose` enum('sell','rent') NOT NULL DEFAULT 'sell',
  `type` enum('residential','commercial') NOT NULL DEFAULT 'residential',
  `pg` enum('y','n') NOT NULL DEFAULT 'n',
  `city` varchar(10) NOT NULL,
  `locality` varchar(20) NOT NULL,
  `society` varchar(20) NOT NULL,
  `bedroom` int(1) DEFAULT NULL,
  `bathroom` int(1) DEFAULT NULL,
  `balcony` int(1) DEFAULT NULL,
  `furnish` enum('full','semi','un') DEFAULT NULL,
  `area` mediumint(9) NOT NULL,
  `unit` enum('Sq.Ft.','Sq. Yards','Sq. Meter','Acres','Marla','Cents','Bigha','Kottah','Kanal','Grounds','Ares','Biswa','Guntha','Ankadam','Hectares','Rood','Chataks','Perch') NOT NULL,
  `imagepath` varchar(20) DEFAULT NULL,
  `address` varchar(30) NOT NULL,
  `price` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` text,
  `lat` decimal(10,8) DEFAULT NULL,
  `lon` decimal(11,8) DEFAULT NULL,
  `pid` bigint(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pid`),
  KEY `posted_by_index` (`user_id`),
  KEY `city_index` (`city`),
  KEY `bedroom_index` (`bedroom`),
  KEY `purpose_index` (`purpose`),
  KEY `type_index` (`type`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `property`
--

LOCK TABLES `property` WRITE;
/*!40000 ALTER TABLE `property` DISABLE KEYS */;
INSERT INTO `property` VALUES ('sell','residential','y','Noida','sector 132','Spring farms',2,1,1,'full',1008,'Sq. Yards','flat-6.jpg','Sector 131, Sector-132 Noida, ',4100000,4,'2015-07-05 03:35:41','Spring farms noida is offering you high level of life, Uncompromising quality and effective eco-Identity for you and your family. \nWith all the modern facilities and king style amenities you are offered the life of a king in your personnel resort. The best memories which you make with your family on the weekend, You will not have to travel far for that, You can create such type of memorable moment at your own place. All farms are vaastu compliant.\nFarm house would be having brilliant connectivity to all amenities.\nAt spring farms noida you get a repository of premium facility in accord with untouched natures enhancement which offers the life time experience of living the traditional way with all amenities near. Farm houses are located on f&g;Road that would be providing a fresh environment with lush green nature',28.52574456,77.37625705,1),('sell','commercial','n','Delhi','mayur vihar','manas apartments',6,5,4,'full',3078,'Grounds','flat-3.jpeg','sector-10,mayur vihar-1,east d',50000000,4,'2015-07-05 03:55:02','Located in the heart of Delhi city within the grand masterplan of wave city center, Eminence offers and opportunity to experience in comparable lifestyles. A collection of 240 limited edition residences, Crafted and built to match your affluent personality .Eminence, Is the desire, Realisation and experience bespoke life and the harmonious symbol of design architecture and luxury. ',28.59848530,77.29313090,2),('sell','residential','y','Delhi','Priyadarshni vihar','Vikas society',1,2,1,'semi',6700,'Sq.Ft.','flat-1.jpg','D-100, Dak khana road,Delhi',2300000,4,'2015-07-05 04:05:00','It is a 2 bhk house available for sale in Delhi. Flat at 2nd floor faces east direction overlooking main road. The flat is well constructed. The location has easy access to all prime location of the city. It has 2 bedrooms, 2 bathrooms and 1 balcony. All wood work done in kitchen and dinning room. ',28.63067700,77.27761900,3),('sell','residential','n','Delhi','Block-A,Preet Vihar','Angad Home',4,2,2,'full',1056,'Sq. Yards','flat-5.jpg','Sukh colony,preet vihar-110091',6700000,4,'2015-07-05 04:09:55','',28.62478864,77.14447652,4),('sell','residential','n','Noida','Block-B','Holly apartment',2,1,1,'full',1320,'Sq.Ft.','flta-14.jpg','Noida Expressway, Near Paris C',9500000,9,'2015-07-05 05:40:17','Well furnished 2 BHK house,well designed beyond your imagination with all basic amenities provided nearby for you.',28.66759730,77.44115710,5),('rent','commercial','n','Gurgaon','sector 93','JMS Crosswalk',4,0,0,'full',13890,'Chataks','my.jpg','Sector-93 Gurgaon, Gurgaon, Ha',23000000,9,'2015-07-05 05:44:15','Jms crosswalk is a commercial development by jms buildtech. It has a thoughtful design and is well equipped with all the modern day amenities as well as basic facilities. The project offers spacious and skillfully designed retail spaces.\n\nFeatures\nTotal area: 200 acres\nDirection of towers: North east',28.38356107,76.93570660,6),('sell','residential','n','Delhi','new colony','Malviya house',2,1,3,'full',900,'Sq.Ft.','flat-18.jpg','press enclave marg,new delhi',39000000,4,'2015-07-05 12:49:02','well designed to meet basic amenities',28.53049190,77.21716290,7),('sell','residential','y','Delhi','botanical garden','okhla apartments',2,2,1,'semi',200,'Sq. Yards','flat-10.jpg','zakhir nagar,sector-27,delhi',670000000,6,'2015-07-05 12:52:22','Semi-furnished, 5 year old property',28.57179401,77.32011607,8),('sell','residential','n','Delhi','Dwarka mor','sector-4',3,2,1,'full',3000,'Acres','flat-7.jpg','block-C,dwarka',7899000000,6,'2015-07-05 12:56:52','well designed',28.61936510,77.03314800,9),('sell','residential','n','Mumbai','Sanjay gandhi park','abc',2,2,1,'full',300,'Acres','flat-3.jpeg','kandavali east,mumbai-78',80000000,4,'2015-07-05 15:01:43','',19.21201851,72.88975778,10);
/*!40000 ALTER TABLE `property` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`user_id`),
  KEY `email_password_index` (`email`,`password`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('neha','anqq.ak@gmil.com','12378',9958418499,'2015-06-23 01:43:23',1,'0000-00-00 00:00:00'),('vishakha','f.66@gmail.com','123',9987654321,'2015-07-02 04:17:36',2,'0000-00-00 00:00:00'),('faran','fg@gmail.com','ank123',9717125115,'2015-06-28 10:58:34',3,'0000-00-00 00:00:00'),('Charu','g.ankita77@yahoo.co.in','1994',8858412401,'2015-06-28 03:00:23',4,'2015-07-05 09:47:52'),('geeta','g@yahoo.com','anj123',9557125115,'2015-06-29 04:01:17',5,'0000-00-00 00:00:00'),('Anjali','anj@gmail.com','123',9871950092,'2015-06-25 01:43:23',6,'0000-00-00 00:00:00'),('pankhuri','p@yahoo.com','12',9799777777,'2015-07-01 10:38:03',7,'0000-00-00 00:00:00'),('payal','payal@yahoo.com','246',8586913261,'2015-07-02 07:16:09',8,'0000-00-00 00:00:00'),('sunidhi','sun@gmail.com','246',9958412401,'2015-06-27 01:43:23',9,'0000-00-00 00:00:00'),('vishal','v@yahoo.com','123',9871093929,'2015-06-28 10:52:58',10,'0000-00-00 00:00:00'),('priyanshi','pr@yahoo.com','pr',9871093967,'2015-07-03 16:39:33',11,'0000-00-00 00:00:00'),('sangeeta','sang@gmail.com','sang',9958412403,'2015-07-04 09:04:52',12,'0000-00-00 00:00:00'),('','','',0,'2015-07-04 13:49:08',13,'2015-07-04 13:49:08');
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

-- Dump completed on 2015-07-05 21:05:13
